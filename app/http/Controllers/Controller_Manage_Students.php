<?php
namespace app\http\Controllers;
use Core\Database;
use Modals\Student;

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
        $students_num = $db->query("SELECT COUNT(*) as number FROM `students`;")->fetch();
     //   dd($students_num);
        view('Manage_Students' , compact('students', "nationalities","departments","students_num"));
    }
    public function update()
    {
        $errors=[];
        $info=[];

        if (
            isset($_POST['email']) && isset($_POST['ar_name']) && isset($_POST['en_name']) &&
            isset($_POST['phone_number']) &&  isset($_POST['National_ID'])
            &&  isset($_POST['address']) &&  isset($_POST['description']) &&  isset($_POST['department'])
            &&  isset($_POST['nationality']) &&  isset($_POST['password'])
        )
        {

               $info['email']   =$_POST['email'];
               $info['password']   =md5($_POST['password']);
               $info['full_name_ar']   =$_POST['ar_name'];
               $info['full_name_en']   =$_POST ['en_name'];
               $info['phone_number']   =$_POST['phone_number'];
               $info['national_id_number']   =$_POST['National_ID'];
               $info['address']   =$_POST['address'];
               $info['department_id']   =$_POST['department'];
               $info['nationality_id']   =$_POST['nationality'];
               $info['description']   =$_POST['description'];
               $info['id']   =$_POST['id'];


        }
        elseif(
            isset($_POST['email']) && isset($_POST['ar_name']) && isset($_POST['en_name']) &&
            isset($_POST['phone_number']) &&  isset($_POST['National_ID']) &&  isset($_POST['title'])
            &&  isset($_POST['address']) &&  isset($_POST['description']) &&  isset($_POST['department'])
            &&  isset($_POST['nationality']) && !isset($_POST['password'])
        )
        {
            $info['email']   =$_POST['email'];
            $info['full_name_ar']   =$_POST['ar_name'];
            $info['full_name_en']   =$_POST ['en_name'];
            $info['phone_number']   =$_POST['phone_number'];
            $info['national_id_number']   =$_POST['National_ID'];
            $info['address']   =$_POST['address'];
            $info['department_id']   =$_POST['department'];
            $info['nationality_id']   =$_POST['nationality'];
            $info['description']   =$_POST['description'];
            $info['id']   =$_POST['id'];
        }
        require base_path("app/Modals/Students.php");
        $student = new Student();
        $student->update($info);
        header("Location: Manage_Students");
        exit();
    }
    public function getStudentData()
    {
        require base_path("app/Modals/Students.php");
        $studentId= $_POST['id'];
        $student = new Student();
        $std = $student->get($studentId);
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
        require base_path("app/Modals/Students.php");
        $userId  = $_POST['id'];
        $student = new Student();
        $student->delete($userId);
        header("Location: Manage_Students");
        exit();
    }

    public function search()
    {
        require  base_path("app/Modals/Students.php");
        $word = $_POST['word'];
        $search = new Student($word);
        $search->search($word);
        header("Location: Manage_Students");
        exit();
    }
}

//write code here

return new Controller_Manage_Students();
