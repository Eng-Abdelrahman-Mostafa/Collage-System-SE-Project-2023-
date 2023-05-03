<?php

namespace app\http\Controllers;

class Controller_Manage_enrolled_students
{
    public function index() {
        view('Manage_Professors');
    }
}

return new Controller_Manage_enrolled_students();