<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Controller_exam {

    public function index (){
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $data= $db->query("SELECT * FROM exams")->fetchALL();

        return view("manage_exam",compact('data'));
    }


    public function add() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors = [];
        if(isset($_POST['title']) && isset($_POST['total_exam_time']) && isset($_POST['total_degree'])) {
            $title = $_POST['title'];
            $total_degree=$_POST['total_degree'];
            $total_exam_time = $_POST['total_exam_time'];
            $db->query("INSERT INTO exams(title,total_degree,total_exam_time) VALUES (?,?,?)",[$title,$total_degree,$total_exam_time]);
            header("Location: exam");
        }


    }

    public function delete() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db = new Database($config);
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        if ($id) {
            $delete_query = "DELETE FROM exams WHERE id = ?";
            $db->query($delete_query, [$id]);
        }

        header("Location: exam");

    }

    public function update() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors = [];
        if(isset($_POST['title']) && isset($_POST['total_exam_time']) && isset($_POST['total_degree'])) {
            $title = $_POST['title'];
            $total_degree=$_POST['total_degree'];
            $total_exam_time = $_POST['total_exam_time'];
            $id = $_POST['id'];
            $updated = $db->query("UPDATE exams SET title=?,total_exam_time=?,total_degree=? WHERE id=$id",
                [$title,$total_exam_time,$total_degree]);
            header("Location: exam");
        }

    }

    public function getCourses()
    {
        $id= $_POST['id'];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $exam  =   $db->query("SELECT * FROM exams where id =:id",['id' => $id])->fetchAll();
        if(!$exam)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'course not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'course' => $exam , 'message' => 'course Founded'));
        exit;

    }




}

//write code here

return new Controller_exam();
