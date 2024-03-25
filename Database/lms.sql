-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 05:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fullname`, `email`, `username`, `password`, `contact`, `status`, `pic`) VALUES
('librarian lords', 'lmslords@gmail.com', 'lib123', 'lib234', 2147483647, 'yes', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` text NOT NULL,
  `edition` varchar(100) NOT NULL,
  `quantity` int(225) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `quantity`, `department`) VALUES
(3, 'MEDICAL MICROBIOLOGY-2: Paper 1', 'Mrs. G. Devasthale, Dr. S. Ambade', '1st Edition', 11, 'MICRO'),
(2, 'COMPUTER NETWORKS', 'Dr. Manisha Bharambe , Dr. Harshita Vachhani', '2nd Edition', 9, 'CS'),
(4, 'INTERNET OF THINGS', 'Yogesh Pingale, Sandeep Kamble, Shrutika Waghmare', '1st Edition', 12, 'IT'),
(1, 'ADMINISTRATIVE LAW', 'Dr. U. P. D. Kesari', '4th Edition', 9, 'LLB'),
(5, 'MANAGEMENT CONTROL SYSTEMS', 'Chirag Jain, Preeti Salecha', '2nd Edition', 11, 'BAF'),
(6, 'SPORTS MARKETING', 'Sonia Sharma, Nitin Sharma', '1st Edition', 6, 'BMS'),
(7, 'EXPORT MARKETING – II', 'N. G. Kale, M. Ahmed', '1st Edition', 15, 'BCOM'),
(8, 'AUDITING – I', 'Sachin Bhandarkar', '1st Edition', 10, 'BBI'),
(9, 'EFFECTIVE COMMUNICATION – II', 'Raj K. Dhar', '3rd Edition', 8, 'BAMMC'),
(3, 'geeeta', 'seeta', '3rd edition', 13, 'story telling');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `bid`, `returned`, `day`, `fine`, `status`) VALUES
('aprasla31', 2, '2023-03-17', 0, 0, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `return`) VALUES
('aprasla31', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2023-03-15', '2023-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `message`, `status`, `sender`) VALUES
(8, 'aprasla31', 'hello librarian ', 'yes', 'student'),
(9, 'aprasla31', 'whats my duE DATE FOR BOOK SUBMISIN', 'yes', 'student'),
(10, 'aprasla31', 'IN 3 DAYS', 'yes', 'admin'),
(11, 'aprasla31', 'whats my duE DATE FOR BOOK SUBMISIN', 'yes', 'student'),
(12, 'aprasla31', 'pls submit your book', 'yes', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` int(225) NOT NULL,
  `contact` int(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fullname`, `email`, `username`, `password`, `roll`, `contact`, `pic`) VALUES
('ahad prasla', 'ahadprasla34@gmail.com', 'aprasla31', 'ahad123', 20, 1234567890, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
