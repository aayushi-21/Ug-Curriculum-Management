-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2015 at 06:50 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ug_curriculum_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_curriculum` int(11) NOT NULL,
  `course_sem` int(11) NOT NULL,
  `course_credits` int(11) NOT NULL,
  `course_objectives` varchar(100) NOT NULL,
  `course_outlines` varchar(100) NOT NULL,
  `course_outcomes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_curriculum`, `course_sem`, `course_credits`, `course_objectives`, `course_outlines`, `course_outcomes`) VALUES
(23, 'ai', 34, 2, 4, 'dghj', 'dghj', 'fcbn'),
(34, 'maths', 4, 7, 5, 'DG jkk', 'fghj', 'fgjj'),
(345, 'fdbdgndgn', 4, 1, 5, 'fbdfbdf', 'dagvfsbfsb', 'bsfbdf'),
(454, 'sepm', 34, 3, 5, 'dsknvkdsnvk', 'sldjvlnsdlgvnl', 'lfnmbvlfdnbl'),
(876, 'dcs', 4, 5, 3, 'bdfbg', 'fsbdfb', 'bdfbdfb');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE IF NOT EXISTS `curriculum` (
  `curriculum_id` int(11) NOT NULL,
  `curriculum_name` varchar(50) NOT NULL,
  `curriculum_batch` varchar(25) NOT NULL,
  `curriculum_branch` varchar(25) NOT NULL,
  `curriculum_credits` int(11) NOT NULL,
  `curriculum_flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`curriculum_id`, `curriculum_name`, `curriculum_batch`, `curriculum_branch`, `curriculum_credits`, `curriculum_flag`) VALUES
(4, 'jdbvkds', 'y13', 'hvh', 2, 1),
(34, 'gyi', 'fhui', 'sdgj', 357, 1),
(56, 'gvfdbefg', 'y15', 'bae', 2, 1),
(246, 'fvb', 'fghn', 'xvbn', 45, 1),
(356, 'dcb', 'dvbn', 'fvn', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_sno` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_sno`, `user_id`, `user_name`, `user_type`, `password`) VALUES
(1, '56', 'chi', 'Student', 'dsds'),
(2, '123', 'abc', 'HOD', 'abc'),
(3, '3532', 'qwe', 'AC-UGC', 'a'),
(4, '34', 'bnm', 'Director', 'z');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`), ADD UNIQUE KEY `course_name` (`course_name`), ADD KEY `course_curriculum` (`course_curriculum`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`curriculum_id`), ADD UNIQUE KEY `curriculum_name` (`curriculum_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_sno`), ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`course_curriculum`) REFERENCES `curriculum` (`curriculum_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
