<?php

namespace Modals;


use Core\Database;

class Course
{
    private $db;
    private $id;

    public function __construct()
    {
        $config=require base_path("app/config.php");
        $this->db = new Database($config);
    }

    public function addCourse($name, $code, $department_id, $course_hour, $lecturers, $prerequisites)
    {
        // Add a new course to the courses table
        $stmt = $this->db->prepare("INSERT INTO courses (name, code, department_id, course_hour) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $name, $code, $department_id, $course_hour);
        $stmt->execute();

        // Get the ID of the newly inserted course
        $course_id = $this->db->insert_id;

        // Add the course-lecturer relationships to the courses_lecturer table
        foreach ($lecturers as $lecturer_id) {
            $stmt = $this->db->prepare("INSERT INTO courses_lecturer (course_id, lecturer_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $course_id, $lecturer_id);
            $stmt->execute();
        }

        // Add the course-prerequisite relationships to the courses_prerequisites table
        foreach ($prerequisites as $prerequisite_id) {
            $stmt = $this->db->prepare("INSERT INTO courses_prerequisites (course_id, prerequisties_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $course_id, $prerequisite_id);
            $stmt->execute();
        }
    }

    public function editCourse($id, $name, $code, $department_id, $course_hour, $lecturers, $prerequisites)
    {
        // Update the course in the courses table
        $stmt = $this->db->prepare("UPDATE courses SET name = ?, code = ?, department_id = ?, course_hour = ? WHERE id = ?");
        $stmt->bind_param("ssiii", $name, $code, $department_id, $course_hour, $id);
        $stmt->execute();

        // Delete existing course-lecturer relationships from the courses_lecturer table
        $stmt = $this->db->prepare("DELETE FROM courses_lecturer WHERE course_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Add the new course-lecturer relationships to the courses_lecturer table
        foreach ($lecturers as $lecturer_id) {
            $stmt = $this->db->prepare("INSERT INTO courses_lecturer (course_id, lecturer_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $id, $lecturer_id);
            $stmt->execute();
        }

        // Delete existing course-prerequisite relationships from the courses_prerequisites table
        $stmt = $this->db->prepare("DELETE FROM courses_prerequisites WHERE course_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Add the new course-prerequisite relationships to the courses_prerequisites table
        foreach ($prerequisites as $prerequisite_id) {
            $stmt = $this->db->prepare("INSERT INTO courses_prerequisites (course_id, prerequisties_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $id, $prerequisite_id);
            $stmt->execute();
        }
    }
    public function add_prerequisites($id=null,$prerequisites){
        $db_prerequisites= $this->db->query("SELECT prerequisties_id FROM `courses_prerequisites` WHERE course_id = ?",[$id])->fetchAll();
        if($id=null){
            $id=$this->id;
        }
        foreach ($prerequisites as $prerequisite){
            if (found_in_array($prerequisite,$db_prerequisites)){
                continue;
            }else{
                $sql="INSERT INTO `courses_prerequisites` (`course_id`, `prerequisties_id`) VALUES (?, ?)";
                $this->db->query($sql,[$id,$prerequisite]);
                unset($db_prerequisites[$prerequisite]);
            }
        }
        foreach ($db_prerequisites as $prerequisite){
            $sql="DELETE FROM `courses_prerequisites` WHERE `course_id` = ? AND `prerequisties_id` = ?";
            $this->db->query($sql,[$id,$prerequisite]);
        }
        return true;
    }
    public function get_prerequisites($id)
    {
        $courseid=$id;
        $course  = $this->db->query("SELECT * FROM `courses_prerequisites` where `course_id` =:id",['id' => $courseid])->fetchAll();
        return $course;
    }
    public function add_to_semester($courses,$semester_id){
        $db_courses_semester= $this->db->query("SELECT * FROM `semester_courses` WHERE `semester_id` = ?",[$semester_id])->fetchAll();
        $db_courses_semester_id=[];
        foreach ($db_courses_semester as $course){
            $db_courses_semester_id[]=$course['course_id'];
        }
        foreach ($courses as $course){
            if (found_in_array($course,$db_courses_semester)){
                if(($key = array_search($course, $db_courses_semester_id)) !== false) {
                    unset($db_courses_semester_id[$key]);
                }
            }else{
                $sql="INSERT INTO `semester_courses`(`course_id`, `semester_id`) VALUES (?,?)";
                $this->db->query($sql,[$course,$semester_id]);
            }
        }

        foreach ($db_courses_semester_id as $course){
            $sql="SELECT * FROM `semester_courses` WHERE `course_id`=? AND`semester_id`=?";
            $this->db->query($sql,[$course,$semester_id]);
        }
        return true;
    }



}