<?php
namespace app\http\Controllers;
use Core\Database;
//write code here
class Controller_student_register_courses {
    public function index() {
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $active_semester = $db->query("SELECT * FROM `semesters` WHERE `active_status` = 1")->fetch();
        $active_semester_id = $active_semester['id'];
        $active_courses = $db->query("SELECT * FROM `semester_courses` INNER JOIN `courses` ON semester_courses.course_id = courses.id WHERE semester_courses.semester_id = :id", ['id' => $active_semester_id])->fetchAll();

        foreach ($active_courses as $key => $active_course) {
            $courses_prerequisites = $db->query("SELECT prerequisties_id FROM `courses_prerequisites` WHERE course_id = :course_id", ['course_id' => $active_course['course_id']])->fetchAll();

            foreach ($courses_prerequisites as $pre) {
                $check_std_prerequisites = $db->query("SELECT `id` FROM `courses_students` WHERE `course_id` = :course_id AND `student_id` = :student_id",
                    [
                        'course_id' => $pre['prerequisties_id'],
                        'student_id' => 4
                    ])->fetch();

                if (!$check_std_prerequisites) {
                    unset($active_courses[$key]);
                    break;
                }
            }
        }


            view('student_register_courses',compact('active_semester','active_courses'));
    }

    public function registerCourseData()
    {
        $courseId= $_POST['id'];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $course  =   $db->query("SELECT * FROM `course` where id =:id",['id' => $courseId])->fetchAll();
        if(!$course)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'Course not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'course' => $course , 'message' => 'Course Founded'));
        exit;
    }
}

//write code here

return new Controller_student_register_courses();
