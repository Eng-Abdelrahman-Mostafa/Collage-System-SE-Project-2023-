<?php
namespace app\http\Controllers;
//write code here
use Core\Database;
class Controller_login {
    public function view() {
        return view('login');
    }
    public function submit() {
        $errors=[];
        if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $config= require base_path('app/config.php');
            require base_path('Core/Database.php');
            $db = new Database($config);

            $teachingstaff=$db->query('SELECT * FROM `teaching_staff` WHERE `email`=:email AND `password`=:password',[
                "email"=>$email,
                "password"=>$password
            ])->fetch();
            $students=$db->query('SELECT * FROM `students` WHERE `email`=:email AND `password`=:password',[
                "email"=>$email,
                "password"=>$password
            ])->fetch();

            if ($teachingstaff || $students){
                session_start();
                $_SESSION['user_name']=$teachingstaff['full_name_ar'] ?? $students['name'];
                $_SESSION['user_id']=$teachingstaff['id'] ?? $students['id'];
                $_SESSION['user_role']=$teachingstaff['role_num'] ?? $students['role_num'];
                header('location: /dashboard');
                exit();
            }else{
                $errors['email']='البريد الالكتروني او كلمة المرور غير صحيحة';
            }
        }else{
            isset($_POST['email']) ? : $errors['email']='يرجى ادخال البريد الالكتروني';
            isset($_POST['password']) ? : $errors['password']='يرجى ادخال كلمة المرور';
        }
        if (count($errors)>0){
            view('login',compact('errors'));
            exit();
        }

    }
}

//write code here

return new Controller_login();
