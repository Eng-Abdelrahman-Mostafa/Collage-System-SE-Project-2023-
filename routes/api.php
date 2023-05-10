<?php

$router->post('/get_professor_data', 'app\http\Controllers\Controller_Manage_Professors.php','getProfessorData',[
    'auth','admin'
]);
$router->post('/get_registerCourse_data', 'app\http\Controllers\Controller_student_register_courses.php','registerCourseData',[
    'auth','student'
]);
$router->post('/get_student_data', 'app\http\Controllers\Controller_Manage_Students.php','getStudentData',[
    'auth','admin'
]);
$router->post('/get_semester_status', 'app\http\Controllers\Controller_Manage_semesters.php','getSemStatus',[
    'auth','admin'
]);
$router->post('/get_register_status', 'app\http\Controllers\Controller_Manage_semesters.php','getSemStatus',[
    'auth','admin'
]);
$router->post('/get_semester_data', 'app\http\Controllers\Controller_Manage_semesters.php','getSemStatus',[
    'auth','admin'
]);

$router->post('/get_selected_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php','get_selected_prerequisites',[
    'auth','admin'
]);
$router->post('/add_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php','add_prerequisites',[
    'auth','admin'
]);
$router->Post('/addCourses', 'app\http\Controllers\Controller_Manage_semesters.php', 'addCourses',[
    'auth','admin'
]);
$router->Post('/get_semester_courses', 'app\http\Controllers\Controller_Manage_semesters.php', 'getSemCourses',[
    'auth','admin'
]);
$router->Post('/get_selected_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php', 'get_selected_prerequisites',[
    'auth','admin'
]);
$router->Post('/add_prerequisites', 'app\http\Controllers\Controller_Manage_courses.php', 'add_prerequisites',[
    'auth','admin'
]);

$router->Post('/add_department_data', 'app\http\Controllers\Controller_department.php', 'get_department',[
    'auth','admin'
]);


