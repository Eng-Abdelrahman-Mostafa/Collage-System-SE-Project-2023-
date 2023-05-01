<?php

namespace app\http\Middlewares;

class guest
{
    public function handle()
    {
        session_start();
        if(isset($_SESSION['user_id'])) {
            header('Location: /dashboard');
        }
    }

}
