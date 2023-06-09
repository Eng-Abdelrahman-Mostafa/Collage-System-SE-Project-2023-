<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Controller_department {

    public function index (){
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $data= $db->query("SELECT * FROM departments")->fetchALL();

        return view("manage_department",compact('data'));
    }


    public function add() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors = [];
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
            $db->query("INSERT INTO departments(name) VALUES (?)",[$name]);
            header("Location: department");
        }


    }

    public function delete() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db = new Database($config);
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        if ($id) {
            $delete_query = "DELETE FROM departments WHERE id = ?";
            $db->query($delete_query, [$id]);
        }

        header("Location: department");

    }

    public function update() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $errors = [];
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
            $id = $_POST['id'];
            $updated = $db->query("UPDATE departments SET name=? WHERE id=$id",
                [$name]);
            header("Location: department");
        }

    }

    public function get_department()
    {
        $id= $_POST['id'];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $department  =   $db->query("SELECT * FROM departments where id =:id",['id' => $id])->fetchAll();
        if(!$department)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'course not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'course' => $department , 'message' => 'course Founded'));
        exit;

    }




}

//write code here

return new Controller_department();
