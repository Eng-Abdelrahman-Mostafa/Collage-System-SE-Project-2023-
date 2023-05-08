<?php
namespace app\http\Controllers;
use Core\Database;
use Modals\Student;

//write code here
class Controller_Student_Profile {
    private int $total_hours = 0;
    private $db;
    public function index() {
        $userRole = $_SESSION['user_role'];
        $studentId = 0;
        if ($userRole == 4) {
            $studentId = $_SESSION['user_id'];
        } else {
            $studentId = $_GET['id'];
        }
        $config = require base_path("app/config.php");
        $this->db = new Database($config);
        $student = new Student();
        $student_info = $student->get($studentId);
        $grades_count = $this->getGradesCount($studentId);
        $grades_departments = $this->getGradesDepartments($studentId);
        $student['total_hours'] = ($this->total_hours/$config['academic_info']['total_hours'])*100;
        view('student_profile', compact('student_info', 'grades_count', 'grades_departments'));
    }
    private function getGradesCount($id){
        $grades_count = [
            "A+"=>0,
            "A"=>0,
            "B+"=>0,
            "B"=>0,
            "C+"=>0,
            "C"=>0,
            "D+"=>0,
            "D"=>0,
            "F"=>0
        ];
        $config = require base_path("app/config.php");
        $db = new Database($config);
        $student_courses= $db->query("SELECT `courses_students`.chance_number,courses.course_hour,`courses_students`.course_id ,`courses_students`.semester_id FROM `courses_students` INNER JOIN courses on courses.id=course_id semesters on semester_id = semesters.id where semesters.active_status=0 and student_id =:id",['id' => $id])->fetchAll();
        foreach ($student_courses as $student_course){
            $course_total_degree= $db->query("SELECT 
                  exams.id, 
                  (SELECT SUM(exam_degrees.degree) 
                   FROM exam_degrees 
                   WHERE exam_degrees.exam_id = exams.id) as total_degree
                FROM 
                  exams 
                WHERE 
                  exams.semester_id = :semester_id AND exams.course_id = :course_id;
                ",[
                'semester_id' => $student_course['semester_id'],
                'course_id' => $student_course['course_id']
            ])->fetch()['total_degree'];
            $course_perc=self::percentage_to_grade($course_total_degree/100);
            $this->total_hours+=(int)$student_course['course_hour'];
            $grades_count[$course_perc]++;
        }
        return $grades_count;
    }
    private function getGradesDepartments($id){
        $departments_grades = [];
        $departments=$this->db->query("SELECT * FROM `departments`")->fetchAll();
        foreach ($departments as $department){
            $departments_grades[]=[$department['name'] => 0];
        }
        $student_courses= $this->db->query("SELECT `courses_students`.chance_number,courses.course_hour,departments.name AS department_name,`courses_students`.course_id ,`courses_students`.semester_id FROM `courses_students` INNER JOIN courses on courses.id=course_id INNER JOIN semesters on semester_id = semesters.id INNER JOIN departments ON courses.department_id=departments.id where semesters.active_status=0 and student_id =''",['id' => $id])->fetchAll();
        foreach ($student_courses as $student_course){
            $course_total_degree= $this->db->query("SELECT 
                  exams.id, 
                  (SELECT SUM(exam_degrees.degree) 
                   FROM exam_degrees 
                   WHERE exam_degrees.exam_id = exams.id) as total_degree
                FROM 
                  exams 
                WHERE 
                  exams.semester_id = :semester_id AND exams.course_id = :course_id;
                ",[
                'semester_id' => $student_course['semester_id'],
                'course_id' => $student_course['course_id']
            ])->fetch()['total_degree'];
            $departments_grades[$student_course['department_name']]+= (double) $course_total_degree;
        }
        return $departments_grades;
    }
    private static function percentage_to_grade($percentage){
        switch ($percentage){
            case ($percentage>=90):
                return "A+";
            case ($percentage>=85):
                return "A";
            case ($percentage>=80):
                return "B+";
            case ($percentage>=75):
                return "B";
            case ($percentage>=70):
                return "C+";
            case ($percentage>=65):
                return "C";
            case ($percentage>=60):
                return "D+";
            case ($percentage>=50):
                return "D";
            case ($percentage<50):
                return "F";
        }
        return false;
    }
}

//write code here

return new Controller_Student_Profile();
