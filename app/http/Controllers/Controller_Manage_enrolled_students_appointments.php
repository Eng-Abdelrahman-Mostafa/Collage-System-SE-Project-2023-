<?php

namespace app\http\Controllers;
use Core\Database;

class Controller_Manage_enrolled_students_appointments
{

    public function index() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);

         $appointments = $db->query("
        SELECT  appointment_students.id, appointment_id, student_id, full_name_ar, full_name_en, email, phone_number, appointment_students.created_at
        FROM appointment_students
        INNER JOIN students ON appointment_students.student_id = students.id
    
        ORDER BY created_at DESC
    ")->fetchAll();


         return view("Manage_enrolled_students_appointments", compact('appointments'));
    }

    public function delete() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db = new Database($config);
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        if ($id) {
            $delete_query = "DELETE FROM appointment_students WHERE id = ?";
            $db->query($delete_query, [$id]);
        }
        header("Location: Manage_enrolled_students_appointments");
        exit();
    }



}

return new Controller_Manage_enrolled_students_appointments();