<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Exam_Agenda {
    public function index() {
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $appointment= $db->query("SELECT title, start_time FROM exams")->fetchAll();

         view('exam_agenda',compact('appointment'));
    }
}

//write code here

return new Exam_Agenda();
