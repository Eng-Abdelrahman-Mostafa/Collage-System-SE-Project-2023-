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

///////////////////////////////////////////////////////////////////////////////function add///////////////////////////////////////////////////////////////////////////////


    public function add() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors = [];

        if(isset($_POST['name']) && isset($_POST['code']) && isset($_POST['department']) && isset($_POST['hours'])) {
            $name = $_POST['name'];
            $code = $_POST['code'];
            $department_id = $_POST['department'];
            $course_hour = $_POST['hours'];

            $checkcode = $db->query("INSERT INTO courses(name, code, department_id, course_hour) VALUES (?,?,?,?)",[$name, $code, $department_id, $course_hour]);

            if(!$checkcode) {
                $errors['code'] = ' الماده مسجله سابقا';
            }
        }

     $data = $db->query("SELECT courses.name AS name_courses, departments.name AS name_departments, code, course_hour, courses.id AS id_courses FROM courses INNER JOIN departments ON courses.department_id = departments.id;")->fetchAll();
     // dd($_POST['department']);
        return view("Manage_courses", compact('data'));
    }



///////////////////////////////////////////////////////////////////////////////function delete///////////////////////////////////////////////////////////////////////////////

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




///////////////////////////////////////////////////////////////////////////////function update///////////////////////////////////////////////////////////////////////////////



    public function update() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors = [];

        if(isset($_POST['name']) && isset($_POST['code']) && isset($_POST['department']) && isset($_POST['hours'])) {
            $name = $_POST['name'];
            $code = $_POST['code'];
            $department_id = $_POST['department'];
            $course_hour = $_POST['hours'];
            $id= $_POST['course_id'];

            $checkcode = $db->query("UPDATE courses SET name=?, code=?, department_id=?, course_hour=? WHERE id=?",
                [$name, $code, $department_id, $course_hour, $id]);

            if(!$checkcode) {
                $errors['code'] = '  تم النعديل مسبقا  ';
            }
      }
        $data= $db->query("SELECT courses.name AS name_courses, departments.name AS name_departments, code, course_hour, courses.id AS id_courses
                FROM courses
                INNER JOIN departments ON courses.department_id = departments.id;")->fetchALL();
        return view("Manage_courses",compact('data'));
    }


}

return new Controller_Manage_courses();