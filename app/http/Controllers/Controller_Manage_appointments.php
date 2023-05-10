<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Controller_Manage_appointments{
    private  $db;
    public function  __construct()
    {
        $config = require base_path("app/config.php");
        $this->db = new Database($config);
    }

    public function index() {
        session_start();
        $lecturers = $this->db->query("select * from `teaching_staff` where role_num = 2 or role_num = 3 ")->fetchAll();
        $courses = $this->db->query("select * from `courses`")->fetchAll();
        $semesters = $this->db->query("select * from `semesters`")->fetchAll();
        $groups = $this->db->query("select * from `groups` ")->fetchAll();
        $appointments = $this->db->query("SELECT appointment.* , teaching_staff.full_name_ar , courses.name as c_name , groups.name as g_name FROM `appointment` 
                                                INNER JOIN `teaching_staff` on lecturer_id = teaching_staff.id INNER JOIN `courses` on course_id = courses.id 
                                                INNER JOIN `groups` on group_id = groups.id")->fetchAll();
        view('Manage_appointments',compact('appointments','lecturers','courses','semesters','groups'));
    }

    public function add()
    {
        session_start();
        if(
            isset($_POST['title']) && isset($_POST['start_time']) && isset($_POST['full_time']) && isset($_POST['type'])
            && isset($_POST['lecturer']) && isset($_POST['course'])  && isset($_POST['semester']) && isset($_POST['group'])
        )
        {
            $title = $_POST['title'];
            $start_time = $_POST['start_time'];
            $full_time = $_POST['full_time'];
            $lecturer = $_POST['lecturer'];
            $type = $_POST['type'];
            $course = $_POST['course'];
            $semester = $_POST['semester'];
            $group = $_POST['group'];


            $this->db->query("INSERT INTO `appointment`(`type`, `title`, `lecturer_id`, `course_id`, `semester_id`, `group_id`, `start_time`, `full_time`, `created_by`) 
                                    VALUES (:type,:title,:lecturer_id,:course_id,:semester_id,:group_id,:start_time,:full_time,:created_by)",
                                    [
                                        'title'  => $title,
                                        'start_time' => $start_time,
                                        'full_time' => $full_time,
                                        'type' => $type,
                                        'lecturer_id' => $lecturer,
                                        'course_id' => $course,
                                        'semester_id' => $semester,
                                        'group_id' => $group,
                                        'created_by' => $_SESSION['user_id']
                                    ]);
            header("Location: Manage_appointments");
            exit();
        }
    }

    public  function  delete()
    {
        $appId= $_POST['id'];
        $this->db->query("DELETE FROM `semesters` WHERE id = :id",['id'=>$appId]);
        header("Location: Manage_appointments");
        exit();
    }

}

//write code here

return new Controller_Manage_appointments();
