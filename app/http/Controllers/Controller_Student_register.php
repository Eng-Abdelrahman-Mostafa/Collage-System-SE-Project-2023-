<?php

namespace app\http\Controllers;

class Controller_Student_register
{
    public function index() {
        view('student_register');
    }
}

return new Controller_Student_register();
