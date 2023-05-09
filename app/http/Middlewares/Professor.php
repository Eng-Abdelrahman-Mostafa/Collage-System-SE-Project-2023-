<?php

namespace app\http\Middlewares;

class Professor
{
    public function handle()
    {
        session_start();
        if ( $_SESSION['user_role'] != 2) {
            abort(403);
        }
    }
}