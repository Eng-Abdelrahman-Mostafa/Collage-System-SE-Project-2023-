<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Dashboard {
    public function index() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $std_num= $db->query("SELECT COUNT(id) FROM students")->fetchALL();
        $professor_num= $db->query("SELECT COUNT(id) FROM teaching_staff WHERE role_num=2")->fetchALL();
        $TA_num= $db->query("SELECT COUNT(id) FROM teaching_staff WHERE role_num=3 ")->fetchALL();
        $departments_num= $db->query("SELECT COUNT(students.id) FROM students INNER JOIN departments ON students.department_id = departments.id group by(department_id)")->fetchALL();
        $departments_exam= $db->query("SELECT SUM(degree) FROM exam_degrees INNER JOIN students ON exam_degrees.student_id = students.id group by(department_id)")->fetchALL();

        view('dashboard',compact('professor_num','std_num','TA_num','departments_num','departments_exam'));
    }
    public function index2() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $appointment= $db->query("SELECT title, start_time FROM appointment")->fetchAll();
//        dd($appointment);
         view('dashboard_student',compact('appointment'));
    }

    public function index3() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $std_num= $db->query("SELECT COUNT(id) FROM students")->fetchALL();
        $professor_num= $db->query("SELECT COUNT(id) FROM teaching_staff WHERE role_num=2")->fetchALL();
        $TA_num= $db->query("SELECT COUNT(id) FROM teaching_staff WHERE role_num=3 ")->fetchALL();
        $departments_num= $db->query("SELECT COUNT(students.id) FROM students INNER JOIN departments ON students.department_id = departments.id group by(department_id)")->fetchALL();
        $departments_exam= $db->query("SELECT SUM(degree) FROM exam_degrees INNER JOIN students ON exam_degrees.student_id = students.id group by(department_id)")->fetchALL();

        view('dashboard_professor',compact('professor_num','std_num','TA_num','departments_num','departments_exam'));
    }
}

//write code here

return new Dashboard();
