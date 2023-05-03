<?php
namespace app\http\Controllers;

use Core\Database;

class Controller_add_student {
    public function index() {
        $config= require base_path("app/config.php");
        require base_path("Core/Database.php");
        $db=new Database($config);
        $departments=$db->query("select * from `departments`")->fetchAll();
        $grades=$db->query("select * from `grades`")->fetchAll();
        $nationalities=$db->query("select *from `nationalities`")->fetchAll();

        view('add_student',compact("departments","grades","nationalities"));

    }
    public function submit() {
        $errors=[];
        if (

            isset($_POST['email']) && isset($_POST['password']) && isset($_POST['ar_name']) && isset($_POST['en_name'])
            && isset($_POST['National_ID']) && isset($_POST['phone_num']) && isset($_POST['address'])
            && isset($_POST['description']) && isset($_POST['std_id']) && isset($_POST['std_department'])
            && isset($_POST['std_grade']) && isset($_POST['std_nationality'])
        ){

            $email =$_POST['email'];
            $password = md5($_POST['password']);
            $ar_name =$_POST['ar_name'];
            $en_name =$_POST['en_name'];
            $National_ID =$_POST['National_ID'];
            $phone_num =$_POST['phone_num'];
            $address =$_POST['address'];
            $description =$_POST['description'];
            $std_id =$_POST['std_id'];
            $std_department =$_POST['std_department'];
            $std_grade =$_POST['std_grade'];
            $std_nationality =$_POST['std_nationality'];

            $config = require base_path("app/config.php");
            require base_path("Core/Database.php");
            $db=new Database($config);
//            $checkEmail = $db->query("select id from `students` where `email`=:email",['email'=>$email])->fetch();
//
//            if(!$checkEmail)
//
//            {
//                $errors['email'] = 'البريد الالكتروني موجود سابقا';
//                exit();
//
//            }
            $db->query("INSERT INTO `students`( `role_num`, `national_id_number`, `nationality_id`, `full_name_ar`, `full_name_en`, `email`, `password`, `photo`,`phone_number`, `address`, `description`, `academic_id`, `department_id`, `grade_id`) VALUES ('1',:national_id_number,:nationality_id,:full_name_ar,:full_name_en,:email,:password,'1',:phone_number,:address,:description,:academic_id,:department_id,:grade_id)",[
                    'national_id_number' => $National_ID ,
                    'nationality_id' => $std_nationality ,
                    'full_name_ar' => $ar_name,
                    'full_name_en' => $en_name,
                    'email' => $email,
                    'password' => $password,
                    'phone_number' => $phone_num,
                    'address' => $address,
                    'description' => $description,
                    'academic_id' => $std_id,
                    'department_id' => $std_department,
                    'grade_id' =>$std_grade ,
                ]



            );
            header('Location: add_student');

        }else{
            isset($_POST['email']) ? : $errors['email']='يرجى ادخال البريد الالكتروني';
            isset($_POST['password']) ? : $errors['password']='يرجى ادخال كلمة المرور';
            isset($_POST['ar_name']) ? : $errors['ar_name']='يرجى الاسم باللغة العربية';
            isset($_POST['en_name']) ? : $errors['en_name']='يرجى ادخال ادخال الاسم باللغة الانجليزية';
            isset($_POST['National_ID']) ? : $errors['National_ID']='يرجى ادخال الرقم القومي';
            isset($_POST['phone_num']) ? : $errors['phone_num']='يرجى ادخال رقم الهاتف';
            isset($_POST['address']) ? : $errors['address']='يرجى ادخال العنوان';
            isset($_POST['description']) ? : $errors['description']='يرجى ادخال الوصف';
            isset($_POST['std_id']) ? : $errors['std_id']='يرجى ادخال كود الطالب';
            isset($_POST['std_department']) ? : $errors['std_department']='يرجى ادخال القسم';
            isset($_POST['std_grade']) ? : $errors['std_grade']='يرجى ادخال المرحله';
            isset($_POST['std_nationality']) ? : $errors['std_nationality']='يرجى ادخال الجنسية';


        }



    }
}

//write code here

return new Controller_add_student();
