-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 06:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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

CREATE TABLE `appointment` (
                               `id` bigint(20) NOT NULL,
                               `type` enum('session','lecture') NOT NULL,
                               `title` varchar(200) NOT NULL,
                               `lecturer_id` bigint(20) NOT NULL,
                               `course_id` bigint(20) NOT NULL,
                               `semester_id` bigint(20) NOT NULL,
                               `group_id` bigint(20) NOT NULL,
                               `start_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                               `full_time` time NOT NULL,
                               `created_by` bigint(20) NOT NULL,
                               `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                               `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_students`
--

CREATE TABLE `appointment_students` (
                                        `id` bigint(20) NOT NULL,
                                        `student_id` bigint(20) NOT NULL,
                                        `appointment_id` bigint(20) NOT NULL,
                                        `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
                           `id` bigint(20) NOT NULL,
                           `name` varchar(255) NOT NULL,
                           `code` varchar(255) NOT NULL,
                           `department_id` bigint(20) NOT NULL,
                           `course_hour` enum('2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `code`, `department_id`, `course_hour`) VALUES
                                                                                 (2, 'MIS', '221', 2, '3'),
                                                                                 (4, 'DS', 'DS-201', 1, '3'),
                                                                                 (5, 'Statics', 'cs-256', 1, '3'),
                                                                                 (6, 'Human', 'H1212', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `courses_lecturer`
--

CREATE TABLE `courses_lecturer` (
                                    `id` bigint(20) NOT NULL,
                                    `course_id` bigint(20) NOT NULL,
                                    `lecturer_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses_prerequisites`
--

CREATE TABLE `courses_prerequisites` (
                                         `id` bigint(20) NOT NULL,
                                         `course_id` bigint(20) NOT NULL,
                                         `prerequisties_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_prerequisites`
--

INSERT INTO `courses_prerequisites` (`id`, `course_id`, `prerequisties_id`) VALUES
    (6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `courses_students`
--

CREATE TABLE `courses_students` (
                                    `id` bigint(20) NOT NULL,
                                    `student_id` bigint(20) NOT NULL,
                                    `course_id` bigint(20) NOT NULL,
                                    `semester_id` bigint(20) NOT NULL,
                                    `chance_number` int(11) NOT NULL,
                                    `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
                               `id` bigint(20) NOT NULL,
                               `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
                                             (1, 'CS'),
                                             (2, 'MI'),
                                             (3, 'AI'),
                                             (4, 'IT'),
                                             (5, 'IS'),
                                             (6, 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
                         `id` bigint(20) NOT NULL,
                         `title` varchar(255) NOT NULL,
                         `description` varchar(255) DEFAULT NULL,
                         `course_id` bigint(20) NOT NULL,
                         `semester_id` bigint(20) NOT NULL,
                         `creator_id` bigint(20) NOT NULL,
                         `total_degree` int(11) NOT NULL,
                         `pass_degree` int(11) NOT NULL,
                         `start_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                         `total_exam_time` time NOT NULL,
                         `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                         `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_degrees`
--

CREATE TABLE `exam_degrees` (
                                `id` bigint(20) NOT NULL,
                                `student_id` bigint(20) NOT NULL,
                                `exam_id` bigint(20) NOT NULL,
                                `chance_number` int(11) NOT NULL,
                                `degree` double NOT NULL,
                                `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
                          `id` bigint(20) NOT NULL,
                          `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`) VALUES
                                        (1, '1'),
                                        (2, '2'),
                                        (3, '3'),
                                        (4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
                          `id` bigint(20) NOT NULL,
                          `name` varchar(250) NOT NULL,
                          `grade_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `grade_id`) VALUES
                                                    (1, 'A', 1),
                                                    (2, 'B', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
                                 `id` bigint(20) NOT NULL,
                                 `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `name`) VALUES
                                               (1, 'egypt'),
                                               (2, 'UAE');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
                         `id` bigint(20) NOT NULL,
                         `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
                                       (1, 'admin'),
                                       (2, 'TA'),
                                       (3, 'Professor'),
                                       (4, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
                             `id` bigint(20) NOT NULL,
                             `title` varchar(255) NOT NULL,
                             `start_date` date NOT NULL,
                             `end_date` date NOT NULL,
                             `active_status` tinyint(1) NOT NULL DEFAULT 0,
                             `registration_status` tinyint(1) NOT NULL DEFAULT 0,
                             `created_by` bigint(20) NOT NULL,
                             `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                             `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `title`, `start_date`, `end_date`, `active_status`, `registration_status`, `created_by`, `created_at`, `updated_at`) VALUES
    (10, 'ربيع', '2023-05-10', '2023-06-03', 1, 1, 10, '2023-05-10 06:16:48', '2023-05-10 06:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `semester_courses`
--

CREATE TABLE `semester_courses` (
                                    `id` bigint(20) NOT NULL,
                                    `course_id` bigint(20) NOT NULL,
                                    `semester_id` bigint(20) NOT NULL,
                                    `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester_courses`
--

INSERT INTO `semester_courses` (`id`, `course_id`, `semester_id`, `created_at`) VALUES
                                                                                    (52, 2, 10, '2023-05-10 06:17:14'),
                                                                                    (53, 4, 10, '2023-05-10 06:17:14'),
                                                                                    (54, 5, 10, '2023-05-10 06:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
                            `id` bigint(20) NOT NULL,
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
                            `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                            `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
                            `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `role_num`, `national_id_number`, `nationality_id`, `full_name_ar`, `full_name_en`, `email`, `password`, `photo`, `phone_number`, `address`, `description`, `academic_id`, `department_id`, `grade_id`, `group_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
    (5, 4, 65464844, 1, 'طالب', 'student', 'student@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, '5548', NULL, NULL, 21558, 1, 3, 1, '2023-05-10 05:55:08', '2023-05-10 05:55:08', '2023-05-10 05:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_staff`
--

CREATE TABLE `teaching_staff` (
                                  `id` bigint(20) NOT NULL,
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
                                  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                                  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                                  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaching_staff`
--

INSERT INTO `teaching_staff` (`id`, `national_id_number`, `nationality_id`, `role_num`, `full_name_ar`, `full_name_en`, `title`, `email`, `password`, `photo`, `phone_number`, `address`, `description`, `department_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
                                                                                                                                                                                                                                                                        (10, '3020221', 1, 1, 'ادمن', 'admin', 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0109787410', '', '', 1, '2023-05-10 05:51:46', '2023-05-10 05:51:46', NULL),
                                                                                                                                                                                                                                                                        (11, '34545448', 2, 3, 'دكتور', 'doctor', 'Prof.', 'doctor@gmail.com', '202cb962ac59075b964b07152d234b70', '', '45648', '', '', 2, '2023-05-10 05:52:47', '2023-05-10 05:52:47', NULL),
                                                                                                                                                                                                                                                                        (13, '5448478', 1, 2, 'معيد', 'TA', 'Eng.', 'ta@gmail.com', '202cb962ac59075b964b07152d234b70', '', '4584848', '', '', 2, '2023-05-10 05:53:54', '2023-05-10 05:53:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
    ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer_id` (`lecturer_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `appointment_students`
--
ALTER TABLE `appointment_students`
    ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `appointment_id` (`appointment_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
    ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `courses_lecturer`
--
ALTER TABLE `courses_lecturer`
    ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `courses_prerequisites`
--
ALTER TABLE `courses_prerequisites`
    ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `prerequisties_id` (`prerequisties_id`);

--
-- Indexes for table `courses_students`
--
ALTER TABLE `courses_students`
    ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
    ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Indexes for table `exam_degrees`
--
ALTER TABLE `exam_degrees`
    ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
    ADD PRIMARY KEY (`id`),
  ADD KEY `grade_id` (`grade_id`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
    ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `semester_courses`
--
ALTER TABLE `semester_courses`
    ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
    ADD PRIMARY KEY (`id`),
  ADD KEY `nationality_id` (`nationality_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `role_num` (`role_num`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
    ADD PRIMARY KEY (`id`),
  ADD KEY `nationality_id` (`nationality_id`),
  ADD KEY `role_num` (`role_num`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment_students`
--
ALTER TABLE `appointment_students`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses_lecturer`
--
ALTER TABLE `courses_lecturer`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses_prerequisites`
--
ALTER TABLE `courses_prerequisites`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses_students`
--
ALTER TABLE `courses_students`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_degrees`
--
ALTER TABLE `exam_degrees`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `semester_courses`
--
ALTER TABLE `semester_courses`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
    ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `teaching_staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
