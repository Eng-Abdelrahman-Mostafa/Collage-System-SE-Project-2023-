<?php

$router->get('/add_TA', 'app\http\Controllers\Controller_add_TA.php', 'index');
$router->post("/add_TA", "app\http\Controllers\Controller_add_TA.php",'submit');
$router->get('/Manage_Professors', 'app\http\Controllers\Controller_Manage_Professors.php', 'index');
$router->get('/Manage_TA', 'app\http\Controllers\Controller_Manage_TA', 'index');

