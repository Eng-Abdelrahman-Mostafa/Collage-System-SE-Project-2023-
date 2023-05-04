<?php

$router->get('/', 'app\http\Controllers\Controller.php', 'index');
$router->get('/html', 'app\http\Controllers\Controller.php', 'index');
$router->get('/dashboard', 'app\http\Controllers\Dashboard.php', 'index');
$router->get('/dashboard_std', 'app\http\Controllers\Dashboard.php', 'index2');
$router->get('/all_students', 'app\http\Controllers\Controller_all_students.php', 'index');

$router->get("/login", "app\http\Controllers\Controller_login.php",'view',[
    'guest'
]);
$router->post("/login", "app\http\Controllers\Controller_login.php",'submit');