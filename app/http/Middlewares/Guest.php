<?php

namespace app\http\Middlewares;

class guest
{
    public function handle()
    {
        if(isset($_SESSION['user_id'])) {
            header('Location: /dashboard');
        }
    }

}
