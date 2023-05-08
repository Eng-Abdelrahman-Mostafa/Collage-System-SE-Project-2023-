<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Regist_Dg {
    public function index() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $id=1;
        $data= $db->query("SELECT courses.name AS name_courses, code, course_hour, courses.id AS id_courses
                FROM courses
                INNER JOIN courses_students ON courses_students.course_id = courses.id WHERE student_id=$id;")->fetchALL();
        $data2= $db->query("SELECT degree,course_id
                FROM exam_degrees
                INNER JOIN exams ON exam_degrees.exam_id = exams.id WHERE student_id=$id;")->fetchALL();

        view('register-dg',compact('data','data2'));
    }
}

//write code here

return new Regist_Dg();
