<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Controller_Manage_semesters {
    private  $db;
    public function  __construct()
    {
        $config = require base_path("app/config.php");
        $this->db = new Database($config);
    }

    public function index() {

        $roles = $this->db->query("select  *  from `teaching_staff` WHERE role_num= 1 OR role_num = 3")->fetchAll();
        $semesters = $this->db->query("select semesters.* , teaching_staff.full_name_ar as creator_name from `semesters` INNER join  `teaching_staff` on created_by=teaching_staff.id")->fetchAll();

        view('Manage_semesters',compact('roles','semesters'));
    }

    public function add()
    {
        $errors=[];

        if(
            isset($_POST['semesterTitle']) && isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['creator'])
        )
        {
            $title= $_POST['semesterTitle'];
            $startDate= $_POST['startDate'];
            $endDate= $_POST['endDate'];
            $creator= $_POST['creator'];
            $this->db->query("INSERT INTO `semesters`(`title`, `start_date`, `end_date`, `active_status`, `registration_status`, `created_by`) 
                                    VALUES (:title,:startDate,:endDate,0,0,:created_by)",[
                'title' => $title,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'created_by' => $creator
            ]);
            header("Location: Manage_semesters");
            exit();
        }
        else{
            isset($_POST['title']) ? : $errors['title']='يرجى ادخال اسم الترم';
            isset($_POST['startDate']) ? : $errors['startDate']='يرجى تاريخ البداية';
            isset($_POST['endDate']) ? : $errors['endDate']='يرجى ادخال تاريخ نهاية الترم';
            isset($_POST['creator']) ? : $errors['creator']='يرجى ادخال اسم المنشئ';
        }
        if (count($errors)>0){
            view('Manage_semesters',compact('errors'));
            header("Location: Manage_semesters");
            exit();
        }

    }

    public function active()
    {
            $id = $_POST['id'];
        if (isset($_POST['switchValue'])) {
            $switchValue = $_POST['switchValue'];
            if ($switchValue === "on") {
                $this->db->query("UPDATE `semesters` SET `active_status`= 1 where id =:id",['id'=>$id]);
                header("Location: Manage_semesters");
                exit();
            }
        }else{
            $this->db->query("UPDATE `semesters` SET `active_status`= 0 where id =:id",['id'=>$id]);
            header("Location: Manage_semesters");
            exit();
        }

    }

    public function activeReg()
    {
            $id = $_POST['id'];
        if (isset($_POST['switchValue'])) {
            $switchValue = $_POST['switchValue'];
            if ($switchValue === "on") {
                $this->db->query("UPDATE `semesters` SET `registration_status`= 1 where id =:id",['id'=>$id]);
                header("Location: Manage_semesters");
                exit();
            }
        }else{
            $this->db->query("UPDATE `semesters` SET `registration_status`= 0 where id =:id",['id'=>$id]);
            header("Location: Manage_semesters");
            exit();
        }

    }


    public function  getSemStatus()
    {
        $semId= $_POST['id'];
        $sem  =   $this->db->query("SELECT * FROM `semesters` where id =:id",['id' => $semId])->fetch();
        if(!$sem)
        {
            header('Content-Type: application/json');
            echo json_encode(array('success' => false,'message' => 'Semester not Founded'));
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'sem' => $sem , 'message' => 'Semester Founded'));
        exit;
    }

    public  function delete()
    {
        $semId= $_POST['id'];
        $this->db->query("DELETE FROM `semesters` WHERE id = :id",['id'=>$semId]);
        header("Location: Manage_semesters");
        exit();

    }


}

//write code here

return new Controller_Manage_semesters();
