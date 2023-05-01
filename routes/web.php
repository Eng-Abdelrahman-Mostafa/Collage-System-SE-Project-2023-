<?php

$router->get('/', 'app\http\Controllers\Controller.php', 'index');
$router->get('/html', 'app\http\Controllers\Controller.php', 'index');
$router->get('/dashboard', 'app\http\Controllers\Dashboard.php', 'index');
$router->get('/all_students', 'app\http\Controllers\Controller_all_students.php', 'index');
