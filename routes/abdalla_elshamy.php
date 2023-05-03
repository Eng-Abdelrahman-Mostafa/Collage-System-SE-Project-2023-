<?php

use app\http\Controllers\Controller_Manage_courses;

$router->get('/Controller_Manage_courses', 'app\http\Controllers\Controller_Manage_courses.php', 'index');



$router->post('/Controller_Manage_courses', 'app\http\Controllers\Controller_Manage_courses.php', 'delete');

$router->get('/Controller_enrolled_students/updata', 'app\http\Controllers\Controller_Manage_courses.php', 'updata');

$router->get('/Controller_Manage_courses/add', 'app\http\Controllers\Controller_Manage_courses.php', 'add');

$router->get('/Controller_Manage_enrolled_students', 'app\http\Controllers\Controller_Manage_enrolled_students.php', 'index');
