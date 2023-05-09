<?php

namespace app\http\Controllers;

use Core\Database;

class Controller_Manage_enrolled_students
{
    public function index() {
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        if (!$id) {
           echo "error 500";
           exit();
        }

        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $query = "SELECT courses_students.*, students.*, semesters.id as semester_id, semesters.title as semester_title, semesters.start_date, semesters.end_date, semesters.active_status, semesters.registration_status, semesters.created_by, semesters.created_at as semester_created_at, semesters.updated_at as semester_updated_at
              FROM courses_students
              INNER JOIN students ON courses_students.student_id = students.id
              INNER JOIN semesters ON courses_students.semester_id = semesters.id
              WHERE courses_students.id = :id";

        $params = ['id' => $id];
        $data = $db->query($query, $params)->fetchAll();
        dd($data);
      //  return view("Manage_enrolled_students", compact('data'));

    }




    public function delete($id) {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db = new Database($config);

        $query = "DELETE FROM courses_students WHERE id = :id";
        $params = ['id' => $id];

        $db->query($query, $params);
        return true;
        header("Manage_enrolled_students");

    }














}

return new Controller_Manage_enrolled_students();