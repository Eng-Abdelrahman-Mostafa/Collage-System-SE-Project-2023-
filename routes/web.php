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
$router->get('/dashboard', 'app\http\Controllers\Dashboard.php', 'index',['auth','teaching_staff']);
$router->get('/dashboard-std', 'app\http\Controllers\Dashboard.php', 'index2',['auth','student']);
$router->get('/exam-agenda', 'app\http\Controllers\Exam_Agenda.php', 'index',['auth','student']);
$router->get('/register-courses-dgree', 'app\http\Controllers\Regist_Dg.php', 'index',['auth','student']);
$router->get('/all_students', 'app\http\Controllers\Controller_all_students.php', 'index',['auth','admin']);
$router->get('/student_profile', 'app\http\Controllers\Controller_Student_Profile.php', 'index',['auth','teaching_staff']);
$router->post('/student_profile/update', 'app\http\Controllers\Controller_Student_Profile.php', 'save_info',['auth','teaching_staff']);
$router->get('/profile', 'app\http\Controllers\Controller_Teaching_Profile.php', 'index',['auth','teaching_staff']);
$router->post('/profile/update', 'app\http\Controllers\Controller_Teaching_Profile.php', 'save_info',['auth','teaching_staff']);

$router->get('/department', 'app\http\Controllers\Controller_department.php', 'index',['auth','admin']);
$router->post('/departments-add', 'app\http\Controllers\Controller_department.php', 'add',['auth','admin']);
$router->post('/departments-delete', 'app\http\Controllers\Controller_department.php', 'delete',['auth','admin']);
$router->post('/departments-update', 'app\http\Controllers\Controller_department.php', 'update',['auth','admin']);

$router->get('/exam', 'app\http\Controllers\Controller_exam.php', 'index',['auth','teaching_staff']);
$router->post('/exams-add', 'app\http\Controllers\Controller_exam.php', 'add',['auth','teaching_staff']);
$router->post('/exams-delete', 'app\http\Controllers\Controller_exam.php', 'delete',['auth','teaching_staff']);
$router->post('/exams-update', 'app\http\Controllers\Controller_exam.php', 'update',['auth','teaching_staff']);

$router->get('/exam-degree', 'app\http\Controllers\Controller_exam_dgree.php', 'index',['auth','teaching_staff']);
$router->post('/exam-degree-delete', 'app\http\Controllers\Controller_exam_dgree.php', 'delete',['auth','teaching_staff']);
$router->post('/exam-degree-update', 'app\http\Controllers\Controller_exam_dgree.php', 'update',['auth','teaching_staff']);

$router->get('/add_TA', 'app\http\Controllers\Controller_add_TA.php', 'index',['auth','admin']);
$router->post("/add_TA", "app\http\Controllers\Controller_add_TA.php",'submit',['auth','admin']);




$router->get('/Manage_Professors', 'app\http\Controllers\Controller_Manage_Professors.php', 'index',[
    'auth','admin'
]);
$router->post('/updateUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'update',[
    'auth','admin'
]);
$router->post('/deleteUser', 'app\http\Controllers\Controller_Manage_Professors.php', 'delete',[
    'auth','admin'
]);






$router->get('/Manage_Students', 'app\http\Controllers\Controller_Manage_Students.php', 'index',[
    'auth','admin'
]);
$router->Post('/deleteStd', 'app\http\Controllers\Controller_Manage_Students.php', 'delete',[
    'auth','admin'
]);
$router->Post('/updateStd', 'app\http\Controllers\Controller_Manage_Students.php', 'update',[
    'auth','admin'
]);
$router->Post('/search', 'app\http\Controllers\Controller_Manage_Students.php', 'search',[
    'auth','admin'
]);



$router->get('/student_register_courses', 'app\http\Controllers\Controller_student_register_courses.php', 'index',[
    'auth','student'
]);


$router->get('/Manage_semesters', 'app\http\Controllers\Controller_Manage_semesters.php', 'index',[
    'auth','admin'
]);
$router->Post('/addSemester', 'app\http\Controllers\Controller_Manage_semesters.php', 'add',[
    'auth','admin'
]);
$router->Post('/activeSem', 'app\http\Controllers\Controller_Manage_semesters.php', 'active',[
    'auth','admin'
]);
$router->Post('/activeReg', 'app\http\Controllers\Controller_Manage_semesters.php', 'activeReg',[
    'auth','admin'
]);
$router->Post('/deleteSem', 'app\http\Controllers\Controller_Manage_semesters.php', 'delete',[
    'auth','admin'
]);



$router->get('/Manage_appointments', 'app\http\Controllers\Controller_Manage_appointments.php', 'index',[
    'auth','admin'
]);
$router->post('/addApp', 'app\http\Controllers\Controller_Manage_appointments.php', 'add',[
    'auth','admin'
]);
$router->post('/deleteApp', 'app\http\Controllers\Controller_Manage_appointments.php', 'delete',[
    'auth','admin'
]);



$router->get('/Manage_courses', 'app\http\Controllers\Controller_Manage_courses.php', 'index',[
    'auth','admin'
]);
$router->post('/Manage_courses_add', 'app\http\Controllers\Controller_Manage_courses.php', 'add',[
    'auth','admin'
]);
$router->post('/Manage_courses_delete', 'app\http\Controllers\Controller_Manage_courses.php', 'delete',[
    'auth','admin'
]);
$router->post('/Manage_courses_update', 'app\http\Controllers\Controller_Manage_courses.php', 'update',[
    'auth','admin'
]);


$router->get('/Manage_enrolled_students', 'app\http\Controllers\Controller_Manage_enrolled_students.php', 'index',[
    'auth','teaching_staff'
]);
$router->post('/Manage_enrolled_students_delete', 'app\http\Controllers\Manage_enrolled_students.php', 'delete',[
    'auth','teaching_staff'
]);



$router->get('/Controller_Manage_enrolled_students_appointments', 'app\http\Controllers\Controller_Manage_enrolled_students_appointments.php', 'index',[
    'auth','teaching_staff'
]);
$router->post('/Manage_enrolled_students_appointments_delete', 'app\http\Controllers\Controller_Manage_enrolled_students_appointments.php', 'delete',[
    'auth','teaching_staff'
]);

$router->get('/add_student',  'app\http\Controllers\Controller_add_student.php', 'index',['auth','admin']);
$router->post('/addStudent', 'app\http\Controllers\Controller_add_student.php', 'submit',['auth','admin']);
