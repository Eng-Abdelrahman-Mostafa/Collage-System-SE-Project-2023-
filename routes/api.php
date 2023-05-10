<?php

$router->post('/get_professor_data', 'app\http\Controllers\Controller_Manage_Professors.php','getProfessorData');
$router->post('/get_registerCourse_data', 'app\http\Controllers\Controller_student_register_courses.php','registerCourseData');
$router->post('/get_student_data', 'app\http\Controllers\Controller_Manage_Students.php','getStudentData');
$router->post('/get_semester_status', 'app\http\Controllers\Controller_Manage_semesters.php','getSemStatus');
$router->post('/get_register_status', 'app\http\Controllers\Controller_Manage_semesters.php','getSemStatus');
$router->post('/get_semester_data', 'app\http\Controllers\Controller_Manage_semesters.php','getSemStatus');

$router->post('/get_selected_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php','get_selected_prerequisites');
$router->post('/add_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php','add_prerequisites');
$router->Post('/addCourses', 'app\http\Controllers\Controller_Manage_semesters.php', 'addCourses');
$router->Post('/get_semester_courses', 'app\http\Controllers\Controller_Manage_semesters.php', 'getSemCourses');
$router->Post('/get_selected_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php', 'get_selected_prerequisites');
$router->Post('/add_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php', 'add_prerequisites');

$router->Post('/add_department_data', 'app\http\Controllers\Controller_department.php', 'get_department');


