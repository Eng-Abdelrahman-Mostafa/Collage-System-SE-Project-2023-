<?php
namespace app\http\Controllers;
use Core\Database;
//write code here
class Controller_Manage_Students {
    public function index() {
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $students = $db->query("SELECT students.id, `national_id_number`, `nationality_id`, `full_name_ar`, `full_name_en`, `email`, `password`, `photo`, `phone_number`, 
                                        `address`, `description`, `academic_id`, `department_id`, `grade_id`, `created_at`, `updated_at`, 
                                        `deleted_at` , departments.name AS d_name FROM `students` 
                                        INNER JOIN  `departments`
                                         ON students.department_id = departments.id")->fetchAll();
        $nationalities = $db->query("select * from `nationalities`")->fetchAll();
        $departments = $db->query("select * from `departments`")->fetchAll();
//        dd($professors);
        view('Manage_Students' , compact('students', "nationalities","departments"));
    }
    public function update()
    {
        $errors=[];


        if (
            isset($_POST['email']) && isset($_POST['ar_name']) && isset($_POST['en_name']) &&
            isset($_POST['phone_number']) &&  isset($_POST['National_ID']) &&  isset($_POST['title'])
            &&  isset($_POST['address']) &&  isset($_POST['description']) &&  isset($_POST['department'])
            &&  isset($_POST['nationality']) &&  isset($_POST['password'])
        )
        {

            $email= $_POST['email'];
            $password = md5($_POST['password']);
            $ar_name= $_POST['ar_name'];
            $en_name= $_POST ['en_name'];
            $phone_number = $_POST['phone_number'];
            $National_ID= $_POST['National_ID'];
            $title = $_POST['title'];
            $address= $_POST['address'];
            $department = $_POST['department'];
            $nationality = $_POST['nationality'];
            $description = $_POST['description'];
            $id = $_POST['id'];
            $config = require base_path("app/config.php");
            $db = new Database($config);
            $db->query( "UPDATE `teaching_staff` SET `national_id_number`=:national_id_number,`nationality_id`=:nationality_id,
                            `full_name_ar`=:full_name_ar,`full_name_en`=:full_name_en,`title`=:title,`email`=:email, `password`=:password,
                            `phone_number`=:phone_number,`address`=:address,`description`=:description,`department_id`=:department_id  WHERE `id`=:id",
                [
                    'national_id_number' => $National_ID,
                    'nationality_id' => $nationality,
                    'full_name_ar' =>  $ar_name ,
                    'full_name_en' =>  $en_name ,
                    'title' => $title,
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'address' => $address,
                    'description' => $description,
                    'department_id' => $department,
                    'id' => $id,
                    'password' => $password
                ]
            );
            header("Location: Manage_Students");
            exit();
        }
        elseif(
            isset($_POST['email']) && isset($_POST['ar_name']) && isset($_POST['en_name']) &&
            isset($_POST['phone_number']) &&  isset($_POST['National_ID']) &&  isset($_POST['title'])
            &&  isset($_POST['address']) &&  isset($_POST['description']) &&  isset($_POST['department'])
            &&  isset($_POST['nationality'])
        )
        {
            $email= $_POST['email'];
            $ar_name= $_POST['ar_name'];
            $en_name= $_POST ['en_name'];
            $phone_number = $_POST['phone_number'];
            $National_ID= $_POST['National_ID'];
            $title = $_POST['title'];
            $address= $_POST['address'];
            $department = $_POST['department'];
            $nationality = $_POST['nationality'];
            $description = $_POST['description'];
            $id = $_POST['id'];
            $config = require base_path("app/config.php");
            $db = new Database($config);
            $db->query( "UPDATE `teaching_staff` SET `national_id_number`=:national_id_number,`nationality_id`=:nationality_id,
                                `full_name_ar`=:full_name_ar,`full_name_en`=:full_name_en,`title`=:title,`email`=:email,
                                `phone_number`=:phone_number,`address`=:address,`description`=:description,`department_id`=:department_id  WHERE `id`=:id",
                [
                    'national_id_number' => $National_ID,
                    'nationality_id' => $nationality,
                    'full_name_ar' =>  $ar_name ,
                    'full_name_en' =>  $en_name ,
                    'title' => $title,
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'address' => $address,
                    'description' => $description,
                    'department_id' => $department,
                    'id' => $id
                ]
            );
            header("Location: Manage_Students");
            exit();
        }
    }
    public function getStudentData()
    {
        $studentId= $_POST['id'];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $std  =   $db->query("SELECT * FROM `students` where id =:id",['id' => $studentId])->fetchAll();
        if(!$std)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'Student not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'std' => $std , 'message' => 'Student Founded'));
        exit;

    }

    public function delete()
    {
        $userId  = $_POST['id'];
        $config = require  base_path("app/config.php");
        $db = new Database($config) ;
        $db->query("DELETE FROM `students` WHERE `id` = :id",['id' => $userId]);
        header("Location: Manage_Students");
        exit();
    }
}

//write code here

return new Controller_Manage_Students();
