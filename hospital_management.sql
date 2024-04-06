-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 08:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminbid`
--

CREATE TABLE `adminbid` (
  `aid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminbid`
--

INSERT INTO `adminbid` (`aid`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `doctid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `docfee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`doctid`, `username`, `email`, `password`, `spec`, `docfee`) VALUES
(1, 'sushanta', 'sushanta@gmail.com', 'sush12345', 'meadicine', 500),
(2, 'ravee', 'ravee@gmail.com', '123456', 'surgeon', 700);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'Tushar Basak', 'tusharbasak041@gmail.com', '01712028802', '  Have a coffe\r\n              '),
(2, 'Sushant Basak', '202262@gmail.com', '01859938480', '  \r\n              have a nice day doctor!!'),
(3, 'shahriar ronok', '202362@gmail.com', '01859938480', '  \r\n              nothing'),
(4, 'Ravee', 'ravee@gmail.com', '01876767612', '  Nice Work Buddy!!\r\n              '),
(5, 'ravee', 'ravee41@gmail.com', '01876404245', 'have a nice day');

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`) VALUES
(1, 'Tushar', 'Basak', 'male', '2022315@iub.edu.bd', '01712028802', 'admin123'),
(22, 'Tushar', 'Basak', 'male', 'tusharbasak041@gmail.com', '01712028802', '76767676'),
(23, 'Sushanta', 'Basak', 'female', '202362@gmail.com', '01859938480', '6565565656'),
(24, 'Shahriar', 'Ronok', 'male', '212022@gmail.com', '01712028802', '1344555'),
(25, 'Tushar', 'Basak', 'male', 'sushanta@gmail.com', '01712028802', '123456'),
(27, 'Shajuti', 'paul', 'female', 'shajuti@gmail.com', '01876404245', '1234567'),
(28, 'Shahriar', 'ranok', 'male', 'shahriar@gmail.com', '01876404245', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminbid`
--
ALTER TABLE `adminbid`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `doctb`
--
ALTER TABLE `doctb`
  ADD PRIMARY KEY (`doctid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminbid`
--
ALTER TABLE `adminbid`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctb`
--
ALTER TABLE `doctb`
  MODIFY `doctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
