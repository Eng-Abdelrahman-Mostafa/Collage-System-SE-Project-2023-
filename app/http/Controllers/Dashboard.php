<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Dashboard {
    public function index() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $data['std_num']= $db->query("SELECT COUNT(id) FROM students")->fetchALL();
        $data['professor_num']= $db->query("SELECT COUNT(id) FROM teaching_staff WHERE 'role_num'=2")->fetchALL();
        $data['TA_num']= $db->query("SELECT COUNT(id) FROM teaching_staff WHERE 'role_num'=3 ")->fetchALL();
//
//        $data['departments_num']= $db->query("SELECT COUNT(id) FROM students INNER JOIN departments ON students.department_id = departments.id group by(departments.name)")->fetchALL();
//
//        $data['departments_exam']= $db->query("SELECT SUM(degree) FROM exam_degrees INNER JOIN students ON exam_degrees.student_id = students.id group by(departments.name)")->fetchALL();
//
        view('dashboard');
    }
    public function index2() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);

    view('dashboard_student');
    }
}

//write code here

return new Dashboard();
