-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 27, 2022 at 05:48 PM
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
-- Database: `feedback_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_data`
--

CREATE TABLE `feedback_data` (
  `id` int(11) NOT NULL,
  `communication` varchar(25) NOT NULL,
  `understandability` varchar(25) NOT NULL,
  `nervous` varchar(25) NOT NULL,
  `recommended-material` varchar(25) NOT NULL,
  `knowledgeable` varchar(25) NOT NULL,
  `follow-syllabus` varchar(25) NOT NULL,
  `practical` varchar(25) NOT NULL,
  `audible` varchar(25) NOT NULL,
  `recommend` varchar(25) NOT NULL,
  `rating` varchar(25) NOT NULL,
  `suggestions` varchar(255) NOT NULL,
  `name` varchar(45) DEFAULT 'Anonymous'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_data`
--

INSERT INTO `feedback_data` (`id`, `communication`, `understandability`, `nervous`, `recommended-material`, `knowledgeable`, `follow-syllabus`, `practical`, `audible`, `recommend`, `rating`, `suggestions`, `name`) VALUES
(1, 'Nop, not at all!', ' Nop, not at all!', 'Nop, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', '1', 'hello hi bye bye', 'test1'),
(2, 'Nop, not at all!', ' Nop, not at all!', 'Nop, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', 'Nope, not at all!', '1', 'hello hi bye bye', 'test1'),
(3, 'moderately', ' moderately', 'slightly', 'Yes, very!', 'Yes, very!', 'moderately', 'Yes, very!', 'Nope, not at all!', 'Yes, very!', '10', 'BIT is going to new height', ''),
(4, 'moderately', ' moderately', 'slightly', 'Yes, very!', 'Yes, very!', 'moderately', 'Yes, very!', 'Nope, not at all!', 'Yes, very!', '10', 'BIT is going to new height', ''),
(5, 'slightly', ' slightly', 'Nop, not at all!', 'moderately', 'Yes, very!', 'Nope, not at all!', '', 'moderately', 'Nope, not at all!', '1', 'ghvhgv', 'test3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback_data`
--
ALTER TABLE `feedback_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback_data`
--
ALTER TABLE `feedback_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
