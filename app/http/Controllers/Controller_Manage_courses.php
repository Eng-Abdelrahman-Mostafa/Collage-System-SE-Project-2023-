<?php

namespace app\http\Controllers;

use Core\Database;
use Modals\Course;

class Controller_Manage_courses
{

    public function index() {

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $data= $db->query("SELECT courses.name AS name_courses, departments.name AS name_departments, code, course_hour, courses.id AS id_courses
           FROM courses
              INNER JOIN departments ON courses.department_id = departments.id;")->fetchALL();
        $courses = $db->query("select * from `courses`")->fetchAll();

        $departments = $db->query("select * from `departments`")->fetchAll();
       return view("Manage_courses",compact('data','departments','courses'));
    }

///////////////////////////////////////////////////////////////////////////////function add///////////////////////////////////////////////////////////////////////////////


    public function add() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors = [];
        //dd($_POST);
        if(isset($_POST['name']) && isset($_POST['code']) && isset($_POST['department']) && isset($_POST['hours'])) {
            $name = $_POST['name'];
            $code = $_POST['code'];
            $department_id = $_POST['department'];
            $course_hour = $_POST['hours'];


            $checkcode = $db->query("select id from `courses` where `code`=:code",['code'=>$code])->fetch();

            if(!$checkcode) {
                $errors['code'] = ' الماده مسجله سابقا';
            }

            $db->query("INSERT INTO courses(name, code, department_id, course_hour) VALUES (?,?,?,?)",[$name, $code, $department_id, $course_hour]);
       header("Location: Manage_courses");
        }


    }



///////////////////////////////////////////////////////////////////////////////function delete///////////////////////////////////////////////////////////////////////////////

    public function delete() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db = new Database($config);
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        if ($id) {
            $delete_query = "DELETE FROM courses WHERE id = ?";
            $db->query($delete_query, [$id]);
        }

         header("Location: Manage_courses");

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
            $id = $_POST['course_id'];

            $updated = $db->query("UPDATE courses SET name=?, code=?, department_id=?, course_hour=? WHERE id=?",
                [$name, $code, $department_id, $course_hour, $id]);
            header("Location: Manage_courses");
        }



    }
    public function getCourses()
    {
         $courseid= $_POST['id'];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $course  =   $db->query("SELECT * FROM `courses` where id =:id",['id' => $courseid])->fetchAll();
        if(!$course)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'course not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'course' => $course , 'message' => 'course Founded'));
        exit;

    }
    public function get_selected_prerequisites()
    {
        $courseid= $_POST['id'];
        require base_path("app/Modals/Course.php");
        $Course=new Course();
        $course  =  $Course->get_prerequisites($courseid);
        if(!$course)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'course not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'course' => $course , 'message' => 'course Founded'));
        exit;
    }
    public function add_prerequisites(){
        $courseid= $_POST['id'];
        $prerequisites= $_POST['prerequisites'];

        require base_path("app/Modals/Course.php");

        $Course=new Course();
        $Course->add_prerequisites($courseid,$prerequisites);

        header("Location: Manage_courses");
        exit;
    }
}






return new Controller_Manage_courses();