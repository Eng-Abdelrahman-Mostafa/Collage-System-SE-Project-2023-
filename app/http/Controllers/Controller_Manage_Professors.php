<?php
namespace app\http\Controllers;
//write code here
class Controller_Manage_Professors {
    public function index() {
        view('Manage_Professors');
    }
}

//write code here

return new Controller_Manage_Professors();
