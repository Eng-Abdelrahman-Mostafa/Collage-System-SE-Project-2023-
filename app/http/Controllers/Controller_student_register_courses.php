<?php
namespace app\http\Controllers;
use Core\Database;
use Modals\Student;

//write code here
class Controller_student_register_courses {
    
    private $db;
    private int $studentId ;
    public function  __construct()
    {
        $config = require base_path("app/config.php");
        $this->db = new Database($config);
    }

    public function index() {
        session_start();
        $this->studentId = $_SESSION['user_id'];
        $active_semester = $this->db->query("SELECT * FROM `semesters` WHERE `active_status` = 1")->fetch();
        $active_semester_id = $active_semester? $active_semester['id']:'';
        $active_courses = $this->db->query("SELECT * FROM `semester_courses` INNER JOIN `courses` ON semester_courses.course_id = courses.id WHERE semester_courses.semester_id = :id", ['id' => $active_semester_id])->fetchAll();
        $student_courses = $this->db->query("SELECT `course_id` FROM `courses_students` WHERE `student_id` = :student_id  AND `semester_id` = :semester_id ",['student_id' => $this->studentId , 'semester_id' => $active_semester_id])->fetchAll();
        foreach ($active_courses as $key => $active_course) {
            $courses_prerequisites = $this->db->query("SELECT prerequisties_id FROM `courses_prerequisites` WHERE course_id = :course_id", ['course_id' => $active_course['course_id']])->fetchAll();

            foreach ($courses_prerequisites as $pre) {
                $check_std_prerequisites = $this->db->query("SELECT `id` FROM `courses_students` WHERE `course_id` = :course_id AND `student_id` = :student_id",
                    [
                        'course_id' => $pre['prerequisties_id'],
                        'student_id' => $this->studentId
                    ])->fetch();

                if (!$check_std_prerequisites) {
                    unset($active_courses[$key]);
                    break;
                }
            }
        }


            view('student_register_courses',compact('active_semester','active_courses','student_courses'));
    }

    public function registerCourseData()
    {
        session_start();
        $this->studentId = $_SESSION['user_id'];
        $studentId = $this->studentId;
        $coursesIds= $_POST['selected_courses'][0]===''?'0':$_POST['selected_courses'][0];
        $total_courses_hours  =   $this->db->query("SELECT SUM(convert(course_hour,char)) AS total_hours FROM `courses`  where id in (".$coursesIds.")")->fetch();
        $active_semester = $this->db->query("SELECT * FROM `semesters` WHERE `active_status` = 1")->fetch();
        $active_semester_id = $active_semester['id'];
        $student_courses = $this->db->query("SELECT `id` FROM `courses_students` WHERE `student_id` = :student_id  AND `semester_id` = :semester_id ",['student_id' => $this->studentId , 'semester_id' => $active_semester_id])->fetchAll();
        if(!$coursesIds)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'no course selected'));
            exit;
        }

        if($total_courses_hours>18 && $total_courses_hours<=0)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'لقد تجاوزت ساعات الدورة المتاحة لك أو لم تحدد أي دورة تدريبية'));
            exit;
        }
        require base_path("app/Modals/Students.php");
        $student = new Student();
        $gpa = $student->gpa($studentId);
        if($gpa > 2.0)
        {
            
            $courses=explode(",", "$coursesIds");
            $delete_courses = $student_courses;
            foreach ($courses as $course)
            {
                if (found_in_array($course, $student_courses)){
                    continue;
                }else{
//                    $this->db->query('DELETE FROM `courses_students` WHERE `id` = :id',['id' => $check_course['id']]);
//                    $check_course = $this->db->query("SELECT `id` FROM `courses_students` WHERE `course_id` = :course_id AND `student_id` = :student_id",
//                        [
//                            'course_id' => $course,
//                            'student_id' => $studentId
//                        ])->fetch();
                    $this->db->query("INSERT INTO `courses_students`( `student_id`, `course_id`, `semester_id`, `chance_number`) 
                                            VALUES (:student_id,:course_id,:semester_id,'1')",
                        [
                            'student_id' => $studentId,
                            'course_id' => $course,
                            'semester_id' => $active_semester_id
                        ]
                    );
                    unset($delete_courses[$course]);
                }
            }
            foreach ($delete_courses as $delete_course)
            {
                $this->db->query('DELETE FROM `courses_students` WHERE `id` = :id',['id' => $delete_course['id']]);
            }
            header('Content-Type: application/json');
            echo json_encode(array('success' => true,'message' => 'تم التسجيل بنجاح'));
            exit;
        }else
        {
            if($total_courses_hours <= 14)
            {
                //register_this_courses
                $courses=explode(",", "$coursesIds");
                $delete_courses = $student_courses;
                foreach ($courses as $course)
                {
                    if (found_in_array($course, $student_courses)){
                        continue;
                    }else{
//                        $check_course = $this->db->query("SELECT `id` FROM `courses_students` WHERE `course_id` = :course_id AND `student_id` = :student_id",
//                            [
//                                'course_id' => $course,
//                                'student_id' => $studentId
//                            ])->fetch();
                        $this->db->query("INSERT INTO `courses_students`( `student_id`, `course_id`, `semester_id`, `chance_number`) 
                                            VALUES (:student_id,:course_id,:semester_id,'1')",
                            [
                                'student_id' => $studentId,
                                'course_id' => $course,
                                'semester_id' => $active_semester_id
                            ]
                        );
                        unset($delete_courses[$course]);
                    }

                }
                foreach ($delete_courses as $delete_course)
                {
                    $this->db->query('DELETE FROM `courses_students` WHERE `id` = :id',['id' => $delete_course['id']]);
                }
                header('Content-Type: application/json');
                echo json_encode(array('success' => true,'message' => 'تم التسجيل بنجاح'));
                exit;
            }else
            {
                header('Content-Type: application/json');
                echo json_encode(array('success' => false,'message' => 'لقد تجاوزت ساعات الدورة المتاحة لك ، يجب أن تحصل على +2.0 في المعدل التراكمي الخاص بك'));
                exit;
            }

        }


    }
}

//write code here

return new Controller_student_register_courses();
