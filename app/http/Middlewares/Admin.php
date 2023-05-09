<?php

namespace app\http\Middlewares;

class Admin
{
    public function handle()
    {
        session_start();
        if ( $_SESSION['user_role'] != 1) {
            abort(403);
        }
    }
}