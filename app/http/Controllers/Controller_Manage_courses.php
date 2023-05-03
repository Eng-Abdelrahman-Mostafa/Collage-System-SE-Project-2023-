<?php

namespace app\http\Controllers;

use Core\Database;

class Controller_Manage_courses
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

    public function add() {

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);



        return view("Manage_courses",compact(' '));
        //dd($data);
    }
    public function delete() {

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $id=$_POST['id'];

        $delet = "DELETE FROM `courses` WHERE `id`=$id" ;
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