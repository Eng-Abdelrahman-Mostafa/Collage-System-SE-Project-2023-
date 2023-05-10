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
$router->get('/dashboard-pr', 'app\http\Controllers\Dashboard.php', 'index3');
$router->get('/exam-agenda', 'app\http\Controllers\Exam_Agenda.php', 'index');
$router->get('/register-courses-dgree', 'app\http\Controllers\Regist_Dg.php', 'index');
$router->get('/all_students', 'app\http\Controllers\Controller_all_students.php', 'index');
$router->get('/student_profile', 'app\http\Controllers\Controller_Student_Profile.php', 'index');
$router->post('/student_profile/update', 'app\http\Controllers\Controller_Student_Profile.php', 'save_info');
$router->get('/profile', 'app\http\Controllers\Controller_Teaching_Profile.php', 'index');
$router->post('/profile/update', 'app\http\Controllers\Controller_Teaching_Profile.php', 'save_info');

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

$router->get('/add_TA', 'app\http\Controllers\Controller_add_TA.php', 'index');
$router->post("/add_TA", "app\http\Controllers\Controller_add_TA.php",'submit');




$router->get('/Manage_Professors', 'app\http\Controllers\Controller_Manage_Professors.php', 'index');
$router->post('/updateUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'update');
$router->post('/deleteUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'delete');






$router->get('/Manage_Students', 'app\http\Controllers\Controller_Manage_Students.php', 'index');
$router->Post('/deleteStd', 'app\http\Controllers\Controller_Manage_Students.php', 'delete');
$router->Post('/updateStd', 'app\http\Controllers\Controller_Manage_Students.php', 'update');
$router->Post('/search', 'app\http\Controllers\Controller_Manage_Students.php', 'search');



$router->get('/student_register_courses', 'app\http\Controllers\Controller_student_register_courses.php', 'index');


$router->get('/Manage_semesters', 'app\http\Controllers\Controller_Manage_semesters.php', 'index');
$router->Post('/addSemester', 'app\http\Controllers\Controller_Manage_semesters.php', 'add');
$router->Post('/activeSem', 'app\http\Controllers\Controller_Manage_semesters.php', 'active');
$router->Post('/activeReg', 'app\http\Controllers\Controller_Manage_semesters.php', 'activeReg');
$router->Post('/deleteSem', 'app\http\Controllers\Controller_Manage_semesters.php', 'delete');



$router->get('/Manage_appointments', 'app\http\Controllers\Controller_Manage_appointments.php', 'index');
$router->post('/addApp', 'app\http\Controllers\Controller_Manage_appointments.php', 'add');
$router->post('/deleteApp', 'app\http\Controllers\Controller_Manage_appointments.php', 'delete');



$router->get('/Manage_courses', 'app\http\Controllers\Controller_Manage_courses.php', 'index');
$router->post('/Manage_courses_add', 'app\http\Controllers\Controller_Manage_courses.php', 'add');
$router->post('/Manage_courses_delete', 'app\http\Controllers\Controller_Manage_courses.php', 'delete');
$router->post('/Manage_courses_update', 'app\http\Controllers\Controller_Manage_courses.php', 'update');


$router->get('/Manage_enrolled_students', 'app\http\Controllers\Controller_Manage_enrolled_students.php', 'index');
$router->post('/Manage_enrolled_students_delete', 'app\http\Controllers\Manage_enrolled_students.php', 'delete');



$router->get('/Controller_Manage_enrolled_students_appointments', 'app\http\Controllers\Controller_Manage_enrolled_students_appointments.php', 'index');
$router->post('/Manage_enrolled_students_appointments_delete', 'app\http\Controllers\Controller_Manage_enrolled_students_appointments.php', 'delete');

$router->get('/add_student',  'app\http\Controllers\Controller_add_student.php', 'index');
$router->post('/addStudent', 'app\http\Controllers\Controller_add_student.php', 'submit');
