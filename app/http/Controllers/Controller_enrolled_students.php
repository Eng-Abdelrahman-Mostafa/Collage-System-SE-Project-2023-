<?php

namespace app\http\Controllers;

use Core\Database;

class Controller_enrolled_students
{
    public function index() {

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $data= $db->query("SELECT courses.name as name_courses, departments.name as name_departments,code ,course_hour,courses.id as id_courses   
                FROM courses
              INNER JOIN departments ON courses.department_id= department_id  ;")->fetchALL();


        return view("Manage_courses",compact('data'));
       //dd($data);
      }

//    public function add() {
//
//        $config = require base_path("app/config.php");
//        require_once base_path("Core/Database.php");
//        $db=new Database($config);
//
//
//
//        return view("Manage_courses",compact(' '));
//       //dd($data);
//      }
    public function delete() {

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);

        $delet = "DELETE FROM `courses` WHERE `id`=:id" ;



    }





}

return new Controller_enrolled_students();