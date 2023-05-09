<?php
namespace app\http\Controllers;
//write code here
class Controller_Manage_appointments{
    public function index() {
        view('Manage_appointments');
    }
}

//write code here

return new Controller_Manage_appointments();
