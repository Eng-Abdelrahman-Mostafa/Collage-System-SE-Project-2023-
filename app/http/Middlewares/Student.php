<?php

namespace app\http\Middlewares;

class Student
{
    public function handle()
    {
        session_start();
        if ( $_SESSION['user_role'] != 4) {
            abort(403);
        }
    }
}