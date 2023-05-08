<?php
namespace app\http\Controllers;
use Core\Database;
use Modals\Student;
use Modals\TeachingStaff;

//write code here
class Controller_Teaching_Profile
{
    private $db;

    public function index()
    {
//        $userRole = $_SESSION['user_role'];
        require base_path("app/Modals/TeachingStaff.php");
        $userRole = 1;
        $studentId = 0;
        $config = require base_path("app/config.php");
        $this->db = new Database($config);
        $roleName = $this->db->query("SELECT * FROM `roles` WHERE `id` = :id",['id'=>$userRole])->fetch()['name'];
        $roles = $this->db->query("SELECT * FROM `roles` ")->fetchAll();
        $data = [];
        $data['departments'] = $this->db->query("SELECT * FROM `departments`")->fetchAll();
        $data['nationalities'] = $this->db->query("SELECT * FROM `nationalities`")->fetchAll();
        if ($userRole == 2 || $userRole == 3) {
            $studentId = $_SESSION['user_id'];
        } else {
            $studentId = $_GET['id'];
        }
        $TeachingStaff = new TeachingStaff($studentId);
        $teaching_info = $TeachingStaff->get($studentId);
        view('teaching_staff_profile', compact('teaching_info',  'userRole', 'data','roleName','roles'));
    }


    public function save_info()
    {
        require base_path("app/Modals/TeachingStaff.php");
        $errors = [];
        session_start();
        if ($_POST['national_id_number'] === '') {
            $errors['national_id_number'] = "من فضلك ادخل الرقم القومي";
        }
        if ($_POST['full_name_ar'] === '') {
            $errors['full_name_ar'] = "من فضلك ادخل الاسم باللغة العربية";
        }
        if ($_POST['full_name_en'] === '') {
            $errors['full_name_en'] = "من فضلك ادخل الاسم باللغة الانجليزية";
        }
        if ($_POST['email'] === '') {
            $errors['email'] = "من فضلك ادخل البريد الالكتروني";
        }
        if ($_POST['phone_number'] === '') {
            $errors['phone_number'] = "من فضلك ادخل رقم الهاتف";
        }
        if ($_POST['department_id'] === '') {
            $errors['department_id'] = "من فضلك ادخل رقم القسم";
        }
        if (count($errors) > 0) {
            $_SESSION['errors'] = $errors;
            if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
                header("Location: /profile");
                exit();
            } else {
                header("Location: /profile?id=" . $_POST['id']);
                dd($_POST);
                exit();
            }
        } else {
            unset($_SESSION['errors']);
        }
        $info = [];
        $info['id'] = $_POST['id'];
        $info['national_id_number'] = $_POST['national_id_number'];
        $info['nationality_id'] = $_POST['nationality_id'];
//        $info['role_num'] = $_POST['role_num'];
        $info['full_name_ar'] = $_POST['full_name_ar'];
        $info['full_name_en'] = $_POST['full_name_en'];
        $info['title'] = $_POST['title'];
        $info['email'] = $_POST['email'];
        $_POST['password'] === '' ?: $info['password'] = $_POST['password'];
        $info['phone_number'] = $_POST['phone_number'];
        $info['department_id'] = $_POST['department_id'];
        $teaching_staff = new TeachingStaff();
        try {
            $teaching_staff->update($info);
        } catch (\Exception $e) {
        }
        if (isset($_SESSION['user_id']) && isset($_SESSION['user_role']) && $_SESSION['user_role'] == 4) {
            header("Location: /profile");
            exit();
        } else {
            header("Location: /profile?id=" . $_POST['id']);
            exit();
        }
    }

}

return new Controller_Teaching_Profile();
