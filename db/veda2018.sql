-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2018 at 11:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veda2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `about` text NOT NULL COMMENT 'event name',
  `submittedby` varchar(1050) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='About of Event';

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `cname` varchar(255) NOT NULL COMMENT 'event Co-ordinate name',
  `cno` varchar(10) NOT NULL COMMENT 'event Co-ordinate Mobile',
  `cemail` varchar(255) NOT NULL COMMENT 'event Co-ordinate Email',
  `event_name` text NOT NULL,
  `co_type` text NOT NULL,
  `submittedby` varchar(1050) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='About of Co-ordinate';

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `event_name` varchar(255) NOT NULL COMMENT 'event name',
  `event_overview` varchar(1050) NOT NULL COMMENT 'event overview',
  `event_rules` varchar(1050) NOT NULL COMMENT 'event rules',
  `event_dates` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `event_registration` varchar(1050) NOT NULL COMMENT 'event registration',
  `event_location` varchar(1050) NOT NULL COMMENT 'event location',
  `other_conditions` varchar(1050) NOT NULL COMMENT 'other conditions',
  `event_selection` varchar(1050) NOT NULL COMMENT 'event selection',
  `event_fname` varchar(1050) NOT NULL COMMENT 'event fname',
  `event_fno` varchar(1050) NOT NULL COMMENT 'event fno',
  `event_femail` varchar(1050) NOT NULL COMMENT 'event femail',
  `event_sname` varchar(1050) NOT NULL COMMENT 'event sname',
  `event_sno` varchar(1050) NOT NULL COMMENT 'event sno',
  `event_semail` varchar(1050) NOT NULL COMMENT 'event semail',
  `submittedby` varchar(1050) NOT NULL COMMENT 'submitted by'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_overview`, `event_rules`, `event_dates`, `event_registration`, `event_location`, `other_conditions`, `event_selection`, `event_fname`, `event_fno`, `event_femail`, `event_sname`, `event_sno`, `event_semail`, `submittedby`) VALUES
(0, 'project space', 'Platform', 'sakdnand jk', '2018-05-14 04:23:31.115544', '#', 'THUB', 'no conditions', '', '', '', '', '', '', '', 'thub');

-- --------------------------------------------------------

--
-- Table structure for table `event_register`
--

CREATE TABLE `event_register` (
  `id` int(11) NOT NULL,
  `regname` varchar(50) NOT NULL,
  `regdept` varchar(50) NOT NULL,
  `regcategory` varchar(200) NOT NULL,
  `regevent` varchar(50) NOT NULL,
  `regyear` varchar(50) NOT NULL,
  `regroll` varchar(50) NOT NULL,
  `regclg` varchar(50) NOT NULL,
  `regloc` varchar(50) NOT NULL,
  `reggender` varchar(50) NOT NULL,
  `regph` varchar(50) NOT NULL,
  `regmail` varchar(50) NOT NULL,
  `regacc` varchar(50) NOT NULL,
  `reg_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `receipt_id` varchar(50) NOT NULL,
  `rollno` varchar(200) NOT NULL,
  `question1` varchar(100) NOT NULL,
  `question2` varchar(100) NOT NULL,
  `question3` varchar(100) NOT NULL,
  `question4` varchar(100) NOT NULL,
  `question5` varchar(100) NOT NULL,
  `question6` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_accommodation`
--

CREATE TABLE `hostel_accommodation` (
  `id` int(11) NOT NULL,
  `receipt_id` varchar(50) NOT NULL,
  `student_code` varchar(250) NOT NULL,
  `student_name` text NOT NULL,
  `section` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `event_dept` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `team` varchar(200) NOT NULL,
  `team_size` varchar(200) NOT NULL,
  `fee` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_login`
--

CREATE TABLE `hostel_login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_login`
--

INSERT INTO `hostel_login` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'boyshostel', '', '56f6dea1f733876b85d3ff0b5a30d638', 0),
(2, 'girlshostel', '', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ordinator`
--

CREATE TABLE `ordinator` (
  `id` int(11) NOT NULL,
  `name` varchar(1050) NOT NULL,
  `fname` varchar(255) NOT NULL COMMENT 'event Co-ordinate name',
  `fno` varchar(10) NOT NULL COMMENT 'event Co-ordinate Mobile',
  `femail` varchar(255) NOT NULL COMMENT 'event Co-ordinate Email',
  `ftype` varchar(255) NOT NULL COMMENT 'event Co-ordinate Type',
  `submittedby` varchar(255) NOT NULL COMMENT 'username'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo ordinator';

-- --------------------------------------------------------

--
-- Table structure for table `spot_registration`
--

CREATE TABLE `spot_registration` (
  `id` int(11) NOT NULL,
  `receipt_id` varchar(50) NOT NULL,
  `student_code` varchar(250) NOT NULL,
  `student_name` text NOT NULL,
  `section` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `event_dept` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `participation` varchar(200) NOT NULL,
  `participation_size` varchar(200) NOT NULL,
  `fee` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spot_registration_old`
--

CREATE TABLE `spot_registration_old` (
  `id` int(11) NOT NULL,
  `receipt_id` varchar(50) NOT NULL,
  `student_code` varchar(250) NOT NULL,
  `student_name` text NOT NULL,
  `section` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `event_dept` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `participation` varchar(200) NOT NULL,
  `participation_size` varchar(200) NOT NULL,
  `fee` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `section` varchar(250) NOT NULL,
  `student_code` varchar(250) NOT NULL,
  `student_name` text NOT NULL,
  `guardian_name` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `college` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'digi', '', '56f6dea1f733876b85d3ff0b5a30d638', '0000-00-00 00:00:00'),
(2, 'ignite', '', '9bcf458c592ab20bd98cb41412583f86', '0000-00-00 00:00:00'),
(3, 'electrenz', '', 'd5fad51c882ccd5a8f3019b0ae997ce2', '0000-00-00 00:00:00'),
(4, 'spark', '', '4c36b71b193860c1e7c1e39700aeca47', '0000-00-00 00:00:00'),
(5, 'petrospirit', '', '9ea3a0806d6edab0c2ebcb7855ce1c36', '0000-00-00 00:00:00'),
(6, 'krishi', '', '85945d759818765980302e4612a2db08', '0000-00-00 00:00:00'),
(7, 'opus', '', '56f6dea1f733876b85d3ff0b5a30d638', '0000-00-00 00:00:00'),
(8, 'excavation', '', '1fb59db7f9aeb8fa0b76223b587b5ee5', '0000-00-00 00:00:00'),
(10, 'thub', '', '56f6dea1f733876b85d3ff0b5a30d638', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `co`
--
ALTER TABLE `co`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hostel_login`
--
ALTER TABLE `hostel_login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
