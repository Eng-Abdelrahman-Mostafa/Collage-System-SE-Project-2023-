<?php

use app\http\Controllers\Controller_Manage_courses;

$router->get('/Manage_courses', 'app\http\Controllers\Controller_Manage_courses.php', 'index');
$router->post('/Manage_courses_add', 'app\http\Controllers\Controller_Manage_courses.php', 'add');
$router->post('/Manage_courses_delete', 'app\http\Controllers\Controller_Manage_courses.php', 'delete');
$router->post('/Manage_courses_update', 'app\http\Controllers\Controller_Manage_courses.php', 'update');


$router->get('/Manage_enrolled_students', 'app\http\Controllers\Controller_Manage_enrolled_students.php', 'index');
$router->post('/Manage_enrolled_students_delete', 'app\http\Controllers\Manage_enrolled_students.php', 'delete');



$router->get('/Controller_Manage_enrolled_students_appointments', 'app\http\Controllers\Controller_Manage_enrolled_students_appointments.php', 'index');
$router->post('/Manage_enrolled_students_appointments_delete', 'app\http\Controllers\Controller_Manage_enrolled_students_appointments.php', 'delete');

