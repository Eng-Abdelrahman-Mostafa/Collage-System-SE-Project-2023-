<?php

use app\http\Controllers\Controller_Manage_courses;

$router->get('/Manage_courses', 'app\http\Controllers\Controller_Manage_courses.php', 'index');



$router->post('/courses_delete', 'app\http\Controllers\Controller_Manage_courses.php', 'delete');

$router->post('/courses_updata', 'app\http\Controllers\Controller_Manage_courses.php', 'update');

$router->post('/add_courses', 'app\http\Controllers\Controller_Manage_courses.php', 'add');



$router->get('/Manage_enrolled_students', 'app\http\Controllers\Controller_Manage_enrolled_students.php', 'index');
