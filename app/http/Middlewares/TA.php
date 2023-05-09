<?php

namespace app\http\Middlewares;

class TA
{
    public function handle()
    {
        session_start();
        if ( $_SESSION['user_role'] != 3) {
            abort(403);
        }
    }
}