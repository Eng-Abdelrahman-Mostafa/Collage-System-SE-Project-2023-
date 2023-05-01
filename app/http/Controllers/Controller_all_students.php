<?php
namespace app\http\Controllers;
//write code here
class Controller_all_students {
    public function index() {
        view('all_students');
    }
}

//write code here

return new Controller_all_students();
