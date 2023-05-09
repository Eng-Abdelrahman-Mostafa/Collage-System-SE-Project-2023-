<?php

namespace Modals;


class Course
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
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



}