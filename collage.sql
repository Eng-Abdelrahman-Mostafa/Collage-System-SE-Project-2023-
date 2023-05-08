-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2023 at 05:15 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collage`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `type` enum('session','lecture') NOT NULL,
    `title` varchar(200) NOT NULL,
    `lecturer_id` bigint(20) NOT NULL,
    `course_id` bigint(20) NOT NULL,
    `semester_id` bigint(20) NOT NULL,
    `group_id` bigint(20) NOT NULL,
    `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `full_time` time NOT NULL,
    `max_capacity` int(11) NOT NULL,
    `created_by` bigint(20) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `lecturer_id` (`lecturer_id`),
    KEY `semester_id` (`semester_id`),
    KEY `group_id` (`group_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_students`
--

DROP TABLE IF EXISTS `appointment_students`;
CREATE TABLE IF NOT EXISTS `appointment_students` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `student_id` bigint(20) NOT NULL,
    `appointment_id` bigint(20) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `student_id` (`student_id`),
    KEY `appointment_id` (`appointment_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `code` varchar(255) NOT NULL,
    `department_id` bigint(20) NOT NULL,
    `course_hour` enum('2','3') NOT NULL,
    PRIMARY KEY (`id`),
    KEY `department_id` (`department_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses_lecturer`
--

DROP TABLE IF EXISTS `courses_lecturer`;
CREATE TABLE IF NOT EXISTS `courses_lecturer` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `course_id` bigint(20) NOT NULL,
    `lecturer_id` bigint(20) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `course_id` (`course_id`),
    KEY `lecturer_id` (`lecturer_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses_prerequisites`
--

DROP TABLE IF EXISTS `courses_prerequisites`;
CREATE TABLE IF NOT EXISTS `courses_prerequisites` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `course_id` bigint(20) NOT NULL,
    `prerequisties_id` bigint(20) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `course_id` (`course_id`),
    KEY `prerequisties_id` (`prerequisties_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses_students`
--

DROP TABLE IF EXISTS `courses_students`;
CREATE TABLE IF NOT EXISTS `courses_students` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `student_id` bigint(20) NOT NULL,
    `course_id` bigint(20) NOT NULL,
    `semester_id` bigint(20) NOT NULL,
    `chance_number` int(11) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `student_id` (`student_id`),
    KEY `course_id` (`course_id`),
    KEY `semester_id` (`semester_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
                                             (1, 'CS'),
                                             (2, 'MI');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `description` varchar(255) DEFAULT NULL,
    `course_id` bigint(20) NOT NULL,
    `semester_id` bigint(20) NOT NULL,
    `creator_id` bigint(20) NOT NULL,
    `total_degree` int(11) NOT NULL,
    `pass_degree` int(11) NOT NULL,
    `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `total_exam_time` time NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `course_id` (`course_id`),
    KEY `semester_id` (`semester_id`),
    KEY `creator_id` (`creator_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_degrees`
--

DROP TABLE IF EXISTS `exam_degrees`;
CREATE TABLE IF NOT EXISTS `exam_degrees` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `student_id` bigint(20) NOT NULL,
    `exam_id` bigint(20) NOT NULL,
    `chance_number` int(11) NOT NULL,
    `degree` double NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `student_id` (`student_id`),
    KEY `exam_id` (`exam_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `name` varchar(250) NOT NULL,
    `grade_id` bigint(20) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `grade_id` (`grade_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

DROP TABLE IF EXISTS `nationalities`;
CREATE TABLE IF NOT EXISTS `nationalities` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `name`) VALUES
    (1, 'egypt');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
                                       (1, 'admin'),
                                       (2, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
CREATE TABLE IF NOT EXISTS `semesters` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `start_date` date NOT NULL,
    `end_date` date NOT NULL,
    `active_status` tinyint(1) NOT NULL DEFAULT '0',
    `registration_status` tinyint(1) NOT NULL DEFAULT '0',
    `created_by` bigint(20) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `created_by` (`created_by`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester_courses`
--

DROP TABLE IF EXISTS `semester_courses`;
CREATE TABLE IF NOT EXISTS `semester_courses` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `course_id` bigint(20) NOT NULL,
    `semester_id` bigint(20) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `course_id` (`course_id`),
    KEY `semester_id` (`semester_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `role_num` bigint(20) NOT NULL,
    `national_id_number` bigint(20) NOT NULL,
    `nationality_id` bigint(20) NOT NULL,
    `full_name_ar` varchar(250) NOT NULL,
    `full_name_en` varchar(250) NOT NULL,
    `email` varchar(250) NOT NULL,
    `password` varchar(250) NOT NULL,
    `photo` varchar(250) DEFAULT NULL,
    `phone_number` varchar(15) NOT NULL,
    `address` varchar(250) DEFAULT NULL,
    `description` varchar(1000) DEFAULT NULL,
    `academic_id` bigint(20) NOT NULL,
    `department_id` bigint(20) NOT NULL,
    `grade_id` bigint(20) NOT NULL,
    `group_id` bigint(20) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `nationality_id` (`nationality_id`),
    KEY `department_id` (`department_id`),
    KEY `grade_id` (`grade_id`),
    KEY `role_num` (`role_num`),
    KEY `group_id` (`group_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_staff`
--

DROP TABLE IF EXISTS `teaching_staff`;
CREATE TABLE IF NOT EXISTS `teaching_staff` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `national_id_number` varchar(20) NOT NULL,
    `nationality_id` bigint(20) NOT NULL,
    `role_num` bigint(20) NOT NULL,
    `full_name_ar` varchar(250) NOT NULL,
    `full_name_en` varchar(250) NOT NULL,
    `title` varchar(100) NOT NULL,
    `email` varchar(250) NOT NULL,
    `password` varchar(250) NOT NULL,
    `photo` varchar(250) NOT NULL,
    `phone_number` varchar(15) NOT NULL,
    `address` varchar(250) NOT NULL,
    `description` varchar(1000) NOT NULL,
    `department_id` bigint(20) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `nationality_id` (`nationality_id`),
    KEY `role_num` (`role_num`),
    KEY `department_id` (`department_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaching_staff`
--

INSERT INTO `teaching_staff` (`id`, `national_id_number`, `nationality_id`, `role_num`, `full_name_ar`, `full_name_en`, `title`, `email`, `password`, `photo`, `phone_number`, `address`, `description`, `department_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
                                                                                                                                                                                                                                                                        (1, 'asdawd', 1, 1, 'عبدو', 'boda', 'eng. ', 'boda@collage.com', '202cb962ac59075b964b07152d234b70', 'sss', '44589', 'sdawdaw4d', 'awdad', 1, '2023-05-01 13:56:09', '2023-05-01 13:56:09', NULL),
                                                                                                                                                                                                                                                                        (3, '4321345', 1, 2, 'آية محمد حسن', 'Aya Mohamed Hassan', 'Doc', 'Aya@fci.helwan.com', '6ae50163b14dbc1f003b91de37cf6906', '1', '012355165', 'Pasdjasd', 'Kgdasd', 1, '2023-05-02 16:54:19', '2023-05-02 16:54:19', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
    ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `teaching_staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment_students`
--
ALTER TABLE `appointment_students`
    ADD CONSTRAINT `appointment_students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_students_ibfk_2` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
    ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses_lecturer`
--
ALTER TABLE `courses_lecturer`
    ADD CONSTRAINT `courses_lecturer_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_lecturer_ibfk_2` FOREIGN KEY (`lecturer_id`) REFERENCES `teaching_staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses_prerequisites`
--
ALTER TABLE `courses_prerequisites`
    ADD CONSTRAINT `courses_prerequisites_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_prerequisites_ibfk_2` FOREIGN KEY (`prerequisties_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses_students`
--
ALTER TABLE `courses_students`
    ADD CONSTRAINT `courses_students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_students_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_students_ibfk_3` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
    ADD CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_ibfk_3` FOREIGN KEY (`creator_id`) REFERENCES `teaching_staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_degrees`
--
ALTER TABLE `exam_degrees`
    ADD CONSTRAINT `exam_degrees_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_degrees_ibfk_2` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
    ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semesters`
--
ALTER TABLE `semesters`
    ADD CONSTRAINT `semesters_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `teaching_staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester_courses`
--
ALTER TABLE `semester_courses`
    ADD CONSTRAINT `semester_courses_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `semester_courses_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
    ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`role_num`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_5` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
    ADD CONSTRAINT `teaching_staff_ibfk_1` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teaching_staff_ibfk_2` FOREIGN KEY (`role_num`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teaching_staff_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
