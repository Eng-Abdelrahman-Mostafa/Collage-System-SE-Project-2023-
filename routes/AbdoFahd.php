<?php

$router->get('/add_TA', 'app\http\Controllers\Controller_add_TA.php', 'index');
$router->post("/add_TA", "app\http\Controllers\Controller_add_TA.php",'submit');




$router->get('/Manage_Professors', 'app\http\Controllers\Controller_Manage_Professors.php', 'index');
$router->post('/updateUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'update');
$router->post('/deleteUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'delete');






$router->get('/Manage_Students', 'app\http\Controllers\Controller_Manage_Students.php', 'index');
$router->Post('/deleteStd', 'app\http\Controllers\Controller_Manage_Students.php', 'delete');
$router->Post('/updateStd', 'app\http\Controllers\Controller_Manage_Students.php', 'update');
