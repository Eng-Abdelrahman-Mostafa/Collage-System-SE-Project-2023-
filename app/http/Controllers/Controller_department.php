<?php
namespace app\http\Controllers;
//write code here
use Core\Database;

class Controller_department {

    public function index (){
        $config = require base_path("app/config.php");
        require_once base_path("Core/Database.php");
        $db=new Database($config);
        $data= $db->query("SELECT * FROM departments")->fetchALL();
        return view("manage_department",compact('data'));



    }




}

//write code here

return new Controller_department();
