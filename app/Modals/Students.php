<?php

namespace Modals;

use Core\Database;

class Student {
    private $id;
    private $national_id_number;
    private $nationality_id;
    private $full_name_ar;
    private $full_name_en;
    private $email;
    private $password;
    private $photo;
    private $phone_number;
    private $address;
    private $description;
    private $academic_id;
    private $department_id;
    private $grade_id;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct($info = null) {
        if ($info) {
            $this->id = $info['id'];
            $this->national_id_number = $info['national_id_number'];
            $this->nationality_id = $info['nationality_id'];
            $this->full_name_ar = $info['full_name_ar'];
            $this->full_name_en = $info['full_name_en'];
            $this->email = $info['email'];
            $this->password = $info['password'];
            $this->photo = $info['photo'];
            $this->phone_number = $info['phone_number'];
            $this->address = $info['address'];
            $this->description = $info['description'];
            $this->academic_id = $info['academic_id'];
            $this->department_id = $info['department_id'];
            $this->grade_id = $info['grade_id'];
            $this->created_at = $info['created_at'];
            $this->updated_at = $info['updated_at'];
            $this->deleted_at = $info['deleted_at'];
        }
    }

    public function add() {
        // perform validation, then insert or update the record in the database
        // and set $this->id to the new ID if it's an insert
    }

    public function delete($id = null) {
        // delete the record from the database based on the current $this->id
        if (!$id)
        {
            $id = $this->id;
        }
        $config = require  base_path("app/config.php");
        $db = new Database($config) ;
        return $db->query("DELETE FROM `students` WHERE `id` = :id",['id' => $id]);
    }

    public function update($info) {
        // perform validation, then update the record in the database based on the current $this->id

        if ($info) {
            $this->id = $info['id'];
            $this->national_id_number = $info['national_id_number'];
            $this->nationality_id = $info['nationality_id'];
            $this->full_name_ar = $info['full_name_ar'];
            $this->full_name_en = $info['full_name_en'];
            $this->email = $info['email'];
            isset($info['password']) ? $this->password = $info['password'] : $this->password = null ;
            $this->photo = $info['photo'];
            $this->phone_number = $info['phone_number'];
            $this->address = $info['address'];
            $this->description = $info['description'];
            $this->academic_id = $info['academic_id'];
            $this->department_id = $info['department_id'];
            $this->grade_id = $info['grade_id'];
            $this->created_at = $info['created_at'];
            $this->updated_at = $info['updated_at'];
            $this->deleted_at = $info['deleted_at'];
        }

        $config = require base_path("app/config.php");
        $db = new Database($config);

        $sql = "UPDATE `teaching_staff` SET";

        $columns = [];
        $values = [];

        if ($info) {
            foreach ($info as $key => $value) {
                if($key==='id'){
                    continue;
                }else{

                        $columns[] = "`$key`";
                        $values[] = $value;
                }
            }
        }

        $setClauses = [];
        for ($i = 0; $i < count($columns); $i++) {
            $setClauses[] = "$columns[$i] = ?";
        }

        $sql .= implode(", ", $setClauses);

        $sql.= "where id = ?";

        $values[] = $info['id'];

        $db->query($sql,$values);
    }

    public function get($id = null) {
        // fetch the record with the given ID from the database and return a new instance of this class
        if(!$id)
        {
            $id = $this->id;
        }
        $config = require base_path("app/config.php");
        $db = new Database($config);
        return   $db->query("SELECT * FROM `students` where id =:id",['id' => $id])->fetchAll();
    }
    public function gpa($id=null){
        if(!$id)
        {
            $id = $this->id;
        }
        $GPA = 0;
        $totalHours = 0;

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
            $course_gpa=self::percentage_to_gpa($course_total_degree/100)*$student_course['course_hour'];
            $student_course[] = ['course_gpa' => $course_gpa];
        }
        foreach ($student_courses as $student_course){
            $GPA+=$student_course['course_gpa'];
            $totalHours+=$student_course['course_hour'];
        }
        return $GPA/$totalHours;
    }
    private static function percentage_to_gpa($percentage){
        switch ($percentage){
            case ($percentage>=90):
                return 4;
            case ($percentage>=85):
                return 3.75;
            case ($percentage>=80):
                return 3.4;
            case ($percentage>=75):
                return 3.1;
            case ($percentage>=70):
                return 2.8;
            case ($percentage>=65):
                return 2.5;
            case ($percentage>=60):
                return 2.25;
            case ($percentage>=50):
                return 2;
            case ($percentage<50):
                return 0;
        }
        return false;
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

    // getters and setters for each property (omitted for brevity)
}
