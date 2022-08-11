-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 03:45 PM
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
-- Database: `folk_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `folk_form`
--

CREATE TABLE `folk_form` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `father_name` varchar(22) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folk_form`
--

INSERT INTO `folk_form` (`id`, `name`, `father_name`, `email`, `gender`, `password`) VALUES
(1, 'Mohit sahani', 'manish kuma', 'suraj@gmail.com', 'female', '787878887'),
(2, 'SURAJ KUMAR', 'surajkumars', 'surajkumarsharma62@gma', 'male', 'sdfdfdvd'),
(3, 'SURAJ KUMAR', 'surajkumars', 'surajkumarsharma62@gma', 'male', 'sdfdfdvd'),
(4, 'Suraj Kumar sharma', 'surajkumars', 'surajkumarsharma62@gma', 'male', 'ddddddddddddddd'),
(5, 'SURAJ KUMAR', 'surajkumarsharma62@gma', 'surajkumarsharma62@gmail.com', 'male', 'fsadgadf'),
(6, 'SURAJ KUMAR', 'surajkumarsharma62@gma', 'surajkumarsharma62@gmail.com', 'male', 'fsadgadf'),
(7, 'SURAJ KUMAR', 'ram kuamr sharma', 'rksharmatwi@gmail.com', 'male', 'safafasfsd'),
(8, 'SURAJ KUMAR', 'surajkumarsharma62@gma', 'surajkumarsharma62@gmail.com', 'male', 'nnnnn'),
(9, 'kumkum', 'kumar anil', 'kumkum@gmail.com', 'female', 'adsasdcs'),
(10, 'nakul', 'Amir Khan', 'Nakul@gmail.com', 'male', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `folk_form`
--
ALTER TABLE `folk_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `folk_form`
--
ALTER TABLE `folk_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
