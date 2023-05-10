<?php

//Login Page Routes
$router->get("/login", "app\http\Controllers\Controller_login.php",'view',[
    'guest'
]);
$router->post("/login", "app\http\Controllers\Controller_login.php",'submit',['guest']);

$router->get('/logout', 'app\http\Controllers\Controller_login.php', 'logout',[
    'auth'
]);
$router->get('/', 'app\http\Controllers\Controller.php', 'index');
$router->get('/html', 'app\http\Controllers\Controller.php', 'index');
$router->get('/dashboard', 'app\http\Controllers\Dashboard.php', 'index');
$router->get('/dashboard-std', 'app\http\Controllers\Dashboard.php', 'index2');
$router->get('/exam-agenda', 'app\http\Controllers\Exam_Agenda.php', 'index');
$router->get('/register-courses-dgree', 'app\http\Controllers\Regist_Dg.php', 'index');
$router->get('/all_students', 'app\http\Controllers\Controller_all_students.php', 'index');
$router->get('/student_profile', 'app\http\Controllers\Controller_Student_Profile.php', 'index');
$router->post('/student_profile/update', 'app\http\Controllers\Controller_Student_Profile.php', 'save_info');
$router->get('/profile', 'app\http\Controllers\Controller_Teaching_Profile.php', 'index');
$router->post('/profile/update', 'app\http\Controllers\Controller_Teaching_Profile.php', 'save_info');