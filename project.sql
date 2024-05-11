-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 06:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Admin1', 'admin1@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin1.jpg'),
(2, 'Admin2', 'admin2@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `u_id` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `cls` varchar(25) NOT NULL,
  `days` varchar(25) NOT NULL,
  `t_method` varchar(25) NOT NULL,
  `t_gender` varchar(25) NOT NULL,
  `t_salary` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `u_id`, `location`, `category`, `cls`, `days`, `t_method`, `t_gender`, `t_salary`) VALUES
(1, '3', 'Gulshan 2, House:15', 'English Version', 'Class-9', '5', 'Student', 'Male', 'BDT 7000'),
(2, '1', 'Dhanmondi 11/A, house no.', 'English Medium', 'Class-4', '4', 'Student', 'Female', 'BDT 6000');

-- --------------------------------------------------------

--
-- Table structure for table `stform`
--

CREATE TABLE `stform` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `t_method` varchar(100) NOT NULL,
  `t_gender` varchar(100) NOT NULL,
  `t_salary` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `t_requirement` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stform`
--

INSERT INTO `stform` (`id`, `name`, `gender`, `institute`, `category`, `class`, `t_method`, `t_gender`, `t_salary`, `days`, `t_requirement`, `address`, `email`, `phone`) VALUES
(1, 'student1', 'Female', 'abc school', 'English Medium', 'Class-4', 'Student\'s Home', 'Female', 'BDT 6000', '4', 'Need a EM background tutor.', 'Dhanmondi 11/A, house no. 2/3', 'abc@gmail.com', '01912345678'),
(2, 'student2', 'Male', 'xyz college', 'Bangla Medium', 'Class-8', 'Teacher\'s Home', 'Any', 'BDT 5000', '3', 'Public university background tutor required', 'Mohammadia housing society Road-7, Mohammadpur', 'xyz@gmail.com', '01234567890'),
(3, 'student3', 'Male', 'pqr', 'English Version', 'Class-9', 'Student\'s Home', 'Male', 'BDT 7000', '5', 'Experienced tutor required', 'Gulshan 2, house:15', 'stu3@gmail.com', '01678923456'),
(4, 'student4', 'Female', 'pqr school', 'Religious & Moral Studies', 'KG', 'Online', 'Female', 'BDT 4000', '4', 'A good teacher is needed', 'Bashundhara, Road no.5', 'stu4@gmail.com', '01897654321');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'student1', 'student1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'stu1.png'),
(2, 'student2', 'student2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'stu2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'abc', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', 'tutor1.jpg'),
(2, 'def', 'def@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'tutor2.png'),
(7, 'xyz', 'xyz@gmail.com', '202cb962ac59075b964b07152d234b70', 'tutor2.png'),
(8, 'pqr', 'pqr@gmail.com', '202cb962ac59075b964b07152d234b70', 'tutor1.jpg'),
(9, 'efg', 'efg@gmail.com', '202cb962ac59075b964b07152d234b70', 'tutor1.jpg'),
(10, 'raju', 'raju@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'about.jpg'),
(11, 'ankon', 'ankon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(12, 'abcd', 'abcd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `tutorform`
--

CREATE TABLE `tutorform` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` datetime NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `curriculum` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `study` varchar(100) NOT NULL,
  `pref_loc` varchar(100) NOT NULL,
  `t_method` varchar(100) NOT NULL,
  `pref_category` varchar(100) NOT NULL,
  `exp_salary` varchar(100) NOT NULL,
  `img_id` varchar(100) NOT NULL,
  `img_cert1` varchar(100) NOT NULL,
  `img_cert2` varchar(100) NOT NULL,
  `img_uni` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorform`
--

INSERT INTO `tutorform` (`id`, `name`, `gender`, `number`, `email`, `dob`, `location`, `address`, `school`, `curriculum`, `college`, `group`, `board`, `university`, `study`, `pref_loc`, `t_method`, `pref_category`, `exp_salary`, `img_id`, `img_cert1`, `img_cert2`, `img_uni`) VALUES
(1, 'abc', 'Male', '012345', 'abc@gmail.com', '2022-11-28 00:00:00', 'Dhanmondi', 'Dhanmondi 11/A, house no. 2/3', 'abc school', 'Bangla Medium', 'xyz college', 'Science', 'Dhaka', 'pqr university', 'BSCSE', 'Dhanmondi', 'Student\'s Home', 'Bangla Medium', 'BDT 4000', 'tree.png', 'home-tuition-in-Panchkula-1024x745.jpg', 'images.jpg', 'UIU-Logo-250.png'),
(2, 'def', 'Female', '012345678', 'def@gmail.com', '2001-01-28 00:00:00', 'Mohammadpur', 'Mohammadia housing society', 'def school', 'English Medium', 'def college', 'Commerce', 'Dhaka', 'xyx university', 'BBA', 'Mohammadpur', 'Teacher\'s Home', 'English Medium', 'BDT 7000', 'Tuition-fee-in-Chinese-universities-e1606201819387.jpg', 'tutor1.jpg', 'tutor2.png', 'UIU-Logo-250.png'),
(3, 'raju islam', 'Male', '01815491313', 'raju@gmail.com', '2023-01-26 00:00:00', 'Badda', 'Badda ,Dhaka ', 'Badda high school', 'Bangla Medium', 'Badda College', 'Science', 'Dhaka', 'UIU', 'BSCSE', 'Badda', 'Student\'s Home', 'Bangla Medium', 'BDT 8000', 'about.jpg', 'edu2.jpg', 'edu2.jpg', 'edu2.jpg'),
(4, 'ankon islam', 'Female', '01815491313', 'ankon@gmail.com', '2023-01-01 00:00:00', 'Azimpur', 'Badda ,Dhaka ', 'Badda high school', 'Bangla Medium', 'Badda College', 'Science', 'Dhaka', 'UIU', 'MSEEE', 'Beribadh', 'Student\'s Home', 'English Medium', 'BDT 10000', 'bg.png', 'about.jpg', 'back1.jpg', 'about.jpg'),
(5, 'abcd', 'Male', '82982392', 'abcd@gmail.com', '2023-01-24 00:00:00', 'Hatirpul', 'Badda ,Dhaka ', 'Badda high school', 'Bangla Medium', 'Badda College', 'Science', 'Cambridge', 'UIU', 'BSCSE', 'Azimpur', 'Student\'s Home', 'Bangla Medium', 'BDT 12000', 'bg.jpg', 'bkash.png', 'blue.jpg', 'bg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stform`
--
ALTER TABLE `stform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorform`
--
ALTER TABLE `tutorform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stform`
--
ALTER TABLE `stform`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tutorform`
--
ALTER TABLE `tutorform`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
