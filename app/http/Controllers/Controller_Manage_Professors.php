<?php
namespace app\http\Controllers;
use Core\Database;
//write code here
class Controller_Manage_Professors {
    public function index() {
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $professors = $db->query("SELECT teaching_staff.`id`, `national_id_number`, `nationality_id`, `role_num`, `full_name_ar`, `full_name_en`, `title`, `email`, `password`, `photo`, `phone_number`, `address`, `description`, `department_id`, `created_at`, `updated_at`, `deleted_at`, departments.name as d_name 
                                        FROM `teaching_staff` 
                                        INNER JOIN `departments` 
                                        ON departments.id = teaching_staff.department_id
                                        where  `role_num`=3;")->fetchAll();
        $roles = $db->query("select * from `roles`")->fetchAll();
        $nationalities = $db->query("select * from `nationalities`")->fetchAll();
        $departments = $db->query("select * from `departments`")->fetchAll();
//        dd($professors);
        view('Manage_Professors' , compact('professors', "roles","nationalities","departments"));
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
            header("Location: Manage_Professors");
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
            header("Location: Manage_Professors");
            exit();
        }
    }
    public function getProfessorData()
    {
        $professorId= $_POST['id'];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $prof  =   $db->query("SELECT * FROM `teaching_staff` where id =:id",['id' => $professorId])->fetchAll();
        if(!$prof)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'Professor not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'prof' => $prof , 'message' => 'Professor Founded'));
        exit;

    }
}

//write code here

return new Controller_Manage_Professors();
