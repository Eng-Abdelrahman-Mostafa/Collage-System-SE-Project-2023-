<?php

namespace app\http\Controllers;

use Core\Database;

class Controller_Manage_courses
{

    public function index() {

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $data= $db->query("SELECT courses.name AS name_courses, departments.name AS name_departments, code, course_hour, courses.id AS id_courses
FROM courses
INNER JOIN departments ON courses.department_id = departments.id;")->fetchALL();


        return view("Manage_courses",compact('data'));
        //dd($data);
    }

    public function add() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors=[];
        if(
            isset($_POST['name']) && isset($_POST['code'])
            && isset($_POST['department']) && isset($_POST['hours'])
        ) {

            $name = $_POST['name'];
            $code = $_POST['code'];
            $department_id = $_POST ['department'];
            $course_hour = $_POST['hours'];
            $checkcode =  $db->query("INSERT INTO courses(name, code, department_id, course_hour) VALUES ('?','?','?','?')",[
                'name' =>$name,
                'code' =>$code,
                'department_id' =>$department_id,
                'course_hour' =>$course_hour,
            ]);
            if (!$checkcode) {
                $errors['code'] = '     الماده مسجله سابقا';
            }
        }

        $data= $db->query("SELECT courses.name AS name_courses, departments.name AS name_departments, code, course_hour, courses.id AS id_courses
            FROM courses
            INNER JOIN departments ON courses.department_id = departments.id;")->fetchALL();
        return view("Manage_courses",compact('data'));
    }
    public function delete() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $id=$_POST['id'];
        $delet = "DELETE FROM courses WHERE id=$id" ;
        $db->query($delet);
        $data= $db->query("SELECT courses.name AS name_courses, departments.name AS name_departments, code, course_hour, courses.id AS id_courses
                FROM courses
                INNER JOIN departments ON courses.department_id = departments.id;")->fetchALL();
        return view("Manage_courses",compact('data'));
    }

    public function  updata() {

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);

//         $updata= "UPDATE `courses` SET `name`= ,
//         `code`='[value-3]',`department_id`='[value-4]',`course_hour`='[value-5]' WHERE 1";



    }



}

return new Controller_Manage_courses();