-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 09:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pni_students_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `last_name` varchar(100) NOT NULL,
  `given_name` varchar(100) NOT NULL,
  `mid_in` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`last_name`, `given_name`, `mid_in`, `id`) VALUES
('Ramos', 'Frank', 'Francisco', 1),
('Frank', 'John', 'Ramos', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students_app`
--

CREATE TABLE `students_app` (
  `stud_name` varchar(100) NOT NULL,
  `curr_yr` varchar(50) NOT NULL,
  `curr_sy` varchar(50) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `date_birth` varchar(50) NOT NULL,
  `place_birth` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_occ` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_occ` varchar(100) NOT NULL,
  `parents_addr` varchar(100) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_occ` varchar(100) NOT NULL,
  `guardian_addr` varchar(100) NOT NULL,
  `elem` varchar(100) NOT NULL,
  `elem_sy` varchar(100) NOT NULL,
  `elem_addr` varchar(100) NOT NULL,
  `last_school_attend` varchar(100) NOT NULL,
  `last_school_sy` varchar(100) NOT NULL,
  `last_school_addr` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Waiting for Confirmation',
  `student_status` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `curr_label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_app`
--

INSERT INTO `students_app` (`stud_name`, `curr_yr`, `curr_sy`, `date_reg`, `age`, `sex`, `date_birth`, `place_birth`, `father_name`, `father_occ`, `mother_name`, `mother_occ`, `parents_addr`, `guardian_name`, `guardian_occ`, `guardian_addr`, `elem`, `elem_sy`, `elem_addr`, `last_school_attend`, `last_school_sy`, `last_school_addr`, `status`, `student_status`, `id`, `curr_label`) VALUES
('Frank, John Ramos', 'Grade 9', '', '2020-12-15', '', 'choose_sex', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Waiting for Confirmation', 'Current', 3, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `stud_name` varchar(100) NOT NULL,
  `curr_yr` varchar(50) NOT NULL,
  `curr_sy` varchar(50) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `date_birth` varchar(50) NOT NULL,
  `place_birth` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_occ` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_occ` varchar(100) NOT NULL,
  `parents_addr` varchar(100) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_occ` varchar(100) NOT NULL,
  `guardian_addr` varchar(100) NOT NULL,
  `elem` varchar(100) NOT NULL,
  `elem_sy` varchar(100) NOT NULL,
  `elem_addr` varchar(100) NOT NULL,
  `last_school_attend` varchar(100) NOT NULL,
  `last_school_sy` varchar(100) NOT NULL,
  `last_school_addr` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Confirmed',
  `id` int(11) NOT NULL,
  `student_status` varchar(100) NOT NULL,
  `curr_label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`stud_name`, `curr_yr`, `curr_sy`, `date_reg`, `age`, `sex`, `date_birth`, `place_birth`, `father_name`, `father_occ`, `mother_name`, `mother_occ`, `parents_addr`, `guardian_name`, `guardian_occ`, `guardian_addr`, `elem`, `elem_sy`, `elem_addr`, `last_school_attend`, `last_school_sy`, `last_school_addr`, `status`, `id`, `student_status`, `curr_label`) VALUES
('Ramos, Frank Francisco', 'Grade 9', '', '2020-05-15', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Confirmed', 1, 'New/Transferee Student', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_app`
--
ALTER TABLE `students_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students_app`
--
ALTER TABLE `students_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
