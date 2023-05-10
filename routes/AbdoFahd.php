<?php

$router->get('/add_TA', 'app\http\Controllers\Controller_add_TA.php', 'index');
$router->post("/add_TA", "app\http\Controllers\Controller_add_TA.php",'submit');




$router->get('/Manage_Professors', 'app\http\Controllers\Controller_Manage_Professors.php', 'index');
$router->post('/updateUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'update');
$router->post('/deleteUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'delete');






$router->get('/Manage_Students', 'app\http\Controllers\Controller_Manage_Students.php', 'index');
$router->Post('/deleteStd', 'app\http\Controllers\Controller_Manage_Students.php', 'delete');
$router->Post('/updateStd', 'app\http\Controllers\Controller_Manage_Students.php', 'update');
$router->Post('/search', 'app\http\Controllers\Controller_Manage_Students.php', 'search');



$router->get('/student_register_courses', 'app\http\Controllers\Controller_student_register_courses.php', 'index');


$router->get('/Manage_semesters', 'app\http\Controllers\Controller_Manage_semesters.php', 'index');
$router->Post('/addSemester', 'app\http\Controllers\Controller_Manage_semesters.php', 'add');
$router->Post('/activeSem', 'app\http\Controllers\Controller_Manage_semesters.php', 'active');
$router->Post('/activeReg', 'app\http\Controllers\Controller_Manage_semesters.php', 'activeReg');
$router->Post('/deleteSem', 'app\http\Controllers\Controller_Manage_semesters.php', 'delete');



$router->get('/Manage_appointments', 'app\http\Controllers\Controller_Manage_appointments.php', 'index');
$router->post('/addApp', 'app\http\Controllers\Controller_Manage_appointments.php', 'add');
$router->post('/deleteApp', 'app\http\Controllers\Controller_Manage_appointments.php', 'delete');
