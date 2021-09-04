-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 07:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `name`, `password`, `1`) VALUES
('sanjay@gmail.com', 'sanjay', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `contactno` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fname`, `lname`, `email`, `dateofbirth`, `contactno`, `designation`, `gender`, `hobbies`, `password`) VALUES
(8, 'sanjay', 'kumar', 'sanjaykumar2081998@gmail.com', '2021-09-22', '8057812301', 'php developer', 'male', 'music, read books, tarvling, coin collating', '123456'),
(9, 'sanjay', 'kumar', 'sanjaykumar2081998@gmail.com', '2021-09-22', '8057812301', 'php developer', 'male', 'music, read books, tarvling, ', '123456'),
(10, 'sanjay', 'kumar', 'sanjaykumar2081998@gmail.com', '2021-09-22', '8057812301', 'php developer', 'male', 'music,   ', '123456'),
(11, 'sanjay', 'kumar', 'sanjaykumar2081998@gmail.com', '2021-09-22', '8057812301', 'php developer', 'male', ' read books, tarvling, coin collating', '123456'),
(12, 'm', 'g', 's@gmail.com', '2021-09-01', '8057812301', 'php developer', 'male', 'music, read books, tarvling, coin collating', '123456'),
(13, 'm', 'g', 's@gmail.com', '2021-09-13', '8057812301', 'php developer', 'female', 'music, read books, tarvling, coin collating', '123456'),
(14, 'sanjay', 'kumar', 'sanjaykumar2081998@gmail.com', '2021-09-21', '8057812301', 'php developer', 'male', 'music, read books, tarvling, coin collating', '123456'),
(15, 'sanjay', 'kumar', 'sanjay@gmail.com', '2021-09-15', '8057812301', 'php developer', 'male', 'music, read books, tarvling, coin collating', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`1`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
