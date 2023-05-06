<?php

$router->post('/get_professor_data', 'app\http\Controllers\Controller_Manage_Professors.php','getProfessorData');
$router->post('/get_student_data', 'app\http\Controllers\Controller_Manage_Students.php','getStudentData');
