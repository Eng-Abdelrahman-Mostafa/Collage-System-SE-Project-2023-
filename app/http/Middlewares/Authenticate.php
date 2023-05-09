<?php

namespace app\http\Middlewares;

class Authenticate
{
    public function handle()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            // redirect to login page by location header
            header('Location: /login');
        }
    }
}