<?php
namespace app\http\Controllers;

use Core\Database;

//write code here
class Controller_add_TA{
    public function index() {
        $config = require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db = new Database($config);
        $roles = $db->query("select * from `roles`")->fetchAll();
        $nationalities = $db->query("select * from `nationalities`")->fetchAll();
        $departments = $db->query("select * from `departments`")->fetchAll();
        return view('add_TA',compact("roles","nationalities","departments"));
    }
    public function submit(){
        $errors=[];
        if(
            isset($_POST['email']) && isset($_POST['password']) && isset($_POST['ar_name'])
            && isset($_POST['en_name']) && isset($_POST['phone_number']) && isset($_POST['National_ID'])
            && isset($_POST['title']) && isset($_POST['address']) && isset($_POST['department'])
            && isset($_POST['role']) && isset($_POST['nationality'])
        ){
            $email= $_POST['email'];
            $password = md5($_POST['password']);
            $ar_name= $_POST['ar_name'];
            $en_name= $_POST ['en_name'];
            $phone_number = $_POST['phone_number'];
            $National_ID= $_POST['National_ID'];
            $title = $_POST['title'];
            $address= $_POST['address'];
            $department = $_POST['department'];
            $role = $_POST['role'];
            $nationality = $_POST['nationality'];
            $description = $_POST['description'];
            $config = require  base_path("app/config.php");
            require base_path("Core/Database.php");
            $db = new Database($config);
            $checkEmail = $db->query("select id from `teaching_staff` where `email`=:email",['email'=>$email])->fetch();
            if(!$checkEmail)
            {
                $errors['email'] = 'البريد الالكتروني موجود سابقا';
            }
//            dd($_POST);
            $db->query("INSERT INTO `teaching_staff`(`national_id_number`, `nationality_id`, `role_num`, `full_name_ar`, `full_name_en`, `title`, `email`, `password`, `photo`, `phone_number`, `address`, `description`, `department_id`) VALUES (:national_id_number ,:nationality_id,:role_num,:full_name_ar,:full_name_en,:title,:email,:password,'1',:phone_number,:address,:description,:department_id)",[
                'national_id_number' => $National_ID,
                'full_name_ar' => $ar_name,
                'full_name_en' => $en_name,
                'title' => $title,
                'email' => $email,
                'password' => $password,
                'phone_number' => $phone_number,
                'address' => $address,
                'description' => $description,
                'role_num' => $role,
                'nationality_id' => $nationality,
                'department_id' => $department
            ]);
            header('Location: add_TA');
            exit();
        }else{
            isset($_POST['email']) ? : $errors['email']='يرجى ادخال البريد الالكتروني';
            isset($_POST['password']) ? : $errors['password']='يرجى ادخال كلمة المرور';
            isset($_POST['ar_name']) ? : $errors['ar_name']='يرجى الاسم باللغة العربية';
            isset($_POST['en_name']) ? : $errors['en_name']='يرجى ادخال ادخال الاسم باللغة الانجليزية';
            isset($_POST['phone_number']) ? : $errors['phone_number']='يرجى ادخال رقم الهاتف';
            isset($_POST['National_ID']) ? : $errors['National_ID']='يرجى ادخال الرقم القومي';
            isset($_POST['title']) ? : $errors['title']='يرجى ادخال اللقب';
            isset($_POST['address']) ? : $errors['address']='يرجى ادخال العنوان';
            isset($_POST['department']) ? : $errors['department']='يرجى ادخال القسم';
            isset($_POST['role']) ? : $errors['role']='يرجى ادخال الدور';
            isset($_POST['nationality']) ? : $errors['nationality']='يرجى ادخال الجنسية';
        }
        if (count($errors)>0){
            view('add_TA',compact('errors'));
            exit();
        }
    }
}

//write code here

return new Controller_add_TA();
