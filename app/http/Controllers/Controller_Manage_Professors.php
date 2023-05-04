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
    public function submit()
    {
        $errors=[];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $db->query();
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
