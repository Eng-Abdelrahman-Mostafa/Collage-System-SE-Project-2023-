<?php

$router->get('/add_TA', 'app\http\Controllers\Controller_add_TA.php', 'index');
$router->post("/add_TA", "app\http\Controllers\Controller_add_TA.php",'submit');
