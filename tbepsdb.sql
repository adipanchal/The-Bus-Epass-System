-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 06:49 AM
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
-- Database: `tbepsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adreg`
--

CREATE TABLE `adreg` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adreg`
--

INSERT INTO `adreg` (`id`, `username`, `password`, `email`) VALUES
(1, 'adjing', '@djing2003', 'adjing12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `crtps`
--

CREATE TABLE `crtps` (
  `user_id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `scid` int(10) NOT NULL,
  `id_type` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `id_img` varchar(255) NOT NULL,
  `bonofide_img` varchar(255) NOT NULL,
  `from_place` varchar(255) NOT NULL,
  `to_place` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `pass_type` varchar(255) NOT NULL,
  `issue_date` datetime DEFAULT current_timestamp(),
  `ending_date` date DEFAULT NULL,
  `clg_approved` varchar(255) NOT NULL,
  `admin_approved` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crtps`
--

INSERT INTO `crtps` (`user_id`, `full_name`, `age`, `gender`, `address`, `profile_img`, `year`, `scid`, `id_type`, `id_no`, `id_img`, `bonofide_img`, `from_place`, `to_place`, `month`, `pass_type`, `issue_date`, `ending_date`, `clg_approved`, `admin_approved`) VALUES
(82, 'Aditya Panchal', '', '', 'valsad pardi,tekra faliya', 'uploads/profile_img/', 'First Year', 10024, 'Aadhaar Card', '52436578768543', 'uploads/id_img/', 'uploads/bonofide_img/', '', '', '1month', 'Local', '2022-08-30 23:08:13', '2022-09-30', 'done', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `screg`
--

CREATE TABLE `screg` (
  `id` int(10) NOT NULL,
  `scname` varchar(255) NOT NULL,
  `scid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screg`
--

INSERT INTO `screg` (`id`, `scname`, `scid`, `username`, `email`, `password`) VALUES
(20, 'Gsc Chikhli', '10024', 'gsc07', 'gsc@gmail.com', 'gsc07');

-- --------------------------------------------------------

--
-- Table structure for table `usereg`
--

CREATE TABLE `usereg` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `scl_clg_nm` varchar(255) NOT NULL,
  `scid` int(10) NOT NULL,
  `course` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usereg`
--

INSERT INTO `usereg` (`id`, `fullname`, `scl_clg_nm`, `scid`, `course`, `username`, `email`, `password`, `creation_time`) VALUES
(82, 'Aditya Panchal', 'GSC Chikhli', 10024, 'BSc CS', 'adjing', 'adjing7@gmail.com', '@djing2003', '2022-08-30 17:13:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adreg`
--
ALTER TABLE `adreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crtps`
--
ALTER TABLE `crtps`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `screg`
--
ALTER TABLE `screg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usereg`
--
ALTER TABLE `usereg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adreg`
--
ALTER TABLE `adreg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `screg`
--
ALTER TABLE `screg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usereg`
--
ALTER TABLE `usereg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
