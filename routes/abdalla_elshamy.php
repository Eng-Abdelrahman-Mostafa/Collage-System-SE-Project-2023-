<?php

$router->get('/Controller_enrolled_students', 'app\http\Controllers\Controller_enrolled_students.php', 'index');

//$router->get('/Controller_enrolled_students', 'app\http\Controllers\Controller_enrolled_students.php', 'add');


$router->get('/Controller_enrolled_students/delete', 'app\http\Controllers\Controller_enrolled_students.php', 'delete');




