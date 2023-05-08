<?php
namespace app\http\Controllers;
use Core\Database;
use Modals\Student;

//write code here
class Controller_Student_Profile {
    private int $total_hours = 0;
    private $db;
    public function index() {
        session_start();
        $userRole = $_SESSION['user_role'];
        require base_path("app/Modals/Students.php");
        $studentId = 0;
        $config = require base_path("app/config.php");
        $this->db = new Database($config);
        $data=[];
        $data['departments']=$this->db->query("SELECT * FROM `departments`")->fetchAll();
        $data['grades']=$this->db->query("SELECT * FROM `grades`")->fetchAll();
        $data['groups']=$this->db->query("SELECT * FROM `groups`")->fetchAll();
        $data['nationalities']=$this->db->query("SELECT * FROM `nationalities`")->fetchAll();
        if ($userRole == 4) {
            $studentId = $_SESSION['user_id'];
        } else {
            $studentId = $_GET['id'];
        }
        $student = new Student($studentId);
        $student_info = $student->get();
        $grades_count = $this->getGradesCount($studentId);
        $grades_departments = $this->getGradesDepartments($studentId);
        $student_info['total_hours'] = ($this->total_hours/$config['academic_info']['total_hours'])*100;
        view('student_profile', compact('student_info', 'grades_count', 'grades_departments', 'userRole','data'));
    }
    private function getGradesCount($id){
        $grades_count = [
            "A+"=>0,
            "A"=>0,
            "B+"=>0,
            "B"=>0,
            "C+"=>0,
            "C"=>0,
            "D+"=>0,
            "D"=>0,
            "F"=>0
        ];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $student_courses= $db->query("SELECT `courses_students`.chance_number,courses.course_hour,`courses_students`.course_id ,`courses_students`.semester_id FROM `courses_students` INNER JOIN courses on courses.id=course_id INNER JOIN semesters on semester_id = semesters.id where semesters.active_status=0 and student_id =:id",['id' => $id])->fetchAll();
        foreach ($student_courses as $student_course){
            $course_total_degree= $db->query("SELECT 
                  exams.id, 
                  (SELECT SUM(exam_degrees.degree) 
                   FROM exam_degrees 
                   WHERE exam_degrees.exam_id = exams.id) as total_degree
                FROM 
                  exams 
                WHERE 
                  exams.semester_id = :semester_id AND exams.course_id = :course_id;
                ",[
                'semester_id' => $student_course['semester_id'],
                'course_id' => $student_course['course_id']
            ])->fetch()['total_degree'];
            $course_perc=self::percentage_to_grade($course_total_degree/100);
            $this->total_hours+=(int)$student_course['course_hour'];
            $grades_count[$course_perc]++;
        }
        return $grades_count;
    }
    public function save_info(){
        require base_path("app/Modals/Students.php");
        $errors=[];
        session_start();
        if($_POST['national_id_number']===''){
            $errors['national_id_number']="من فضلك ادخل الرقم القومي";
        }
        if($_POST['full_name_ar']===''){
            $errors['full_name_ar']="من فضلك ادخل الاسم باللغة العربية";
        }
        if($_POST['full_name_en']===''){
            $errors['full_name_en']="من فضلك ادخل الاسم باللغة الانجليزية";
        }
        if($_POST['email']===''){
            $errors['email']="من فضلك ادخل البريد الالكتروني";
        }
        if($_POST['phone_number']===''){
            $errors['phone_number']="من فضلك ادخل رقم الهاتف";
        }
        if($_POST['academic_id']===''){
            $errors['academic_id']="من فضلك ادخل المعرف الاكاديمي";
        }
        if (count($errors)>0){
            $_SESSION['errors']=$errors;
            if(isset($_SESSION['user_id'])&&isset($_SESSION['user_role'])&&$_SESSION['user_role']==4){
                header("Location: /student_profile");
                exit();
            }else{
                header("Location: /student_profile?id=".$_POST['id']);
                dd($_POST);
                exit();
            }
        }else{
            unset($_SESSION['errors']);
        }
        $info=[];
        $info['id'] = $_POST['id'];
        $info['national_id_number'] = $_POST['national_id_number'];
        $info['nationality_id'] = $_POST['nationality_id'];
        $info['full_name_ar'] = $_POST['full_name_ar'];
        $info['full_name_en'] = $_POST['full_name_en'];
        $info['email'] = $_POST['email'];
        $_POST['password']===''?:$info['password'] = $_POST['password'];
        $info['phone_number'] = $_POST['phone_number'];
        $info['academic_id'] = $_POST['academic_id'];
        $info['department_id'] = $_POST['department_id'];
        $info['grade_id'] = $_POST['grade_id'];
        $info['group_id'] = $_POST['group_id'];
        $student = new Student();
        $student->update($info);
        if(isset($_SESSION['user_id'])&&isset($_SESSION['user_role'])&&$_SESSION['user_role']==4){
            header("Location: /student_profile");
            exit();
        }else{
            header("Location: /student_profile?id=".$_POST['id']);
            exit();
        }
    }
    private function getGradesDepartments($id){
        $departments_grades = [];
        $departments=$this->db->query("SELECT * FROM `departments`")->fetchAll();
        foreach ($departments as $department){
            $departments_grades[]=[$department['name'] => 0];
        }
        $student_courses= $this->db->query("SELECT `courses_students`.chance_number,courses.course_hour,departments.name AS department_name,`courses_students`.course_id ,`courses_students`.semester_id FROM `courses_students` INNER JOIN courses on courses.id=course_id INNER JOIN semesters on semester_id = semesters.id INNER JOIN departments ON courses.department_id=departments.id where semesters.active_status=0 and student_id =:id",['id' => $id])->fetchAll();
        foreach ($student_courses as $student_course){
            $course_total_degree= $this->db->query("SELECT 
                  exams.id, 
                  (SELECT SUM(exam_degrees.degree) 
                   FROM exam_degrees 
                   WHERE exam_degrees.exam_id = exams.id) as total_degree
                FROM 
                  exams 
                WHERE 
                  exams.semester_id = :semester_id AND exams.course_id = :course_id;
                ",[
                'semester_id' => $student_course['semester_id'],
                'course_id' => $student_course['course_id']
            ])->fetch()['total_degree'];
            $departments_grades[$student_course['department_name']]+= (double) $course_total_degree;
        }
        return $departments_grades;
    }
    private static function percentage_to_grade($percentage){
        switch ($percentage){
            case ($percentage>=90):
                return "A+";
            case ($percentage>=85):
                return "A";
            case ($percentage>=80):
                return "B+";
            case ($percentage>=75):
                return "B";
            case ($percentage>=70):
                return "C+";
            case ($percentage>=65):
                return "C";
            case ($percentage>=60):
                return "D+";
            case ($percentage>=50):
                return "D";
            case ($percentage<50):
                return "F";
        }
        return false;
    }
}

//write code here

return new Controller_Student_Profile();
