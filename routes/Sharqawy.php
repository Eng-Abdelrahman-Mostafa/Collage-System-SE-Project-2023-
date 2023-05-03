<?php



$router->get('/add_student',  'app\http\Controllers\Controller_add_student.php', 'index');
$router->post('/add_student', 'app\http\Controllers\Controller_add_student.php', 'submit');
