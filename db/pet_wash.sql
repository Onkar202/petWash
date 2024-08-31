-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 02:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_wash`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `sr_no` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile_No` varchar(13) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sr_no`, `Name`, `Mobile_No`, `Email`, `Message`, `Date`) VALUES
(1, 'onkar', '08766816741', 'kr6968533@gmail.com', 'hii', '2024-02-10 16:19:40'),
(2, 'ronyk2612', '8964537893', 'ronyk010201@gmail.co', 'hello', '2024-03-19 05:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sr_no` int(20) NOT NULL,
  `Name` varchar(13) NOT NULL,
  `Mobile_No` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Pet` varchar(5) NOT NULL,
  `Aggressive` varchar(10) NOT NULL,
  `Service_name` varchar(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sr_no`, `Name`, `Mobile_No`, `Email`, `Address`, `Pet`, `Aggressive`, `Service_name`, `Date`) VALUES
(1, 'onkar', '08766816741', 'kr6968533@gmail.com', 'hello', 'Dog', 'Normal', 'Grooming', '2024-02-10 16:18:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sr_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
