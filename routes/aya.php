<?php
$router->get('/department', 'app\http\Controllers\Controller_department.php', 'index');
$router->post('/departments-add', 'app\http\Controllers\Controller_department.php', 'add');
$router->post('/departments-delete', 'app\http\Controllers\Controller_department.php', 'delete');
$router->post('/departments-update', 'app\http\Controllers\Controller_department.php', 'update');

$router->get('/exam', 'app\http\Controllers\Controller_exam.php', 'index');
$router->post('/exams-add', 'app\http\Controllers\Controller_exam.php', 'add');
$router->post('/exams-delete', 'app\http\Controllers\Controller_exam.php', 'delete');
$router->post('/exams-update', 'app\http\Controllers\Controller_exam.php', 'update');

$router->get('/exam-degree', 'app\http\Controllers\Controller_exam_dgree.php', 'index');
$router->post('/exam-degree-delete', 'app\http\Controllers\Controller_exam_dgree.php', 'delete');
$router->post('/exam-degree-update', 'app\http\Controllers\Controller_exam_dgree.php', 'update');
