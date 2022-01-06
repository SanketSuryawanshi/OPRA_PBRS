-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 12:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `Assignment_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `statement` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `Created_date` date NOT NULL,
  `Due_date` date NOT NULL,
  `Attachments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`Assignment_id`, `title`, `statement`, `user_id`, `Created_date`, `Due_date`, `Attachments`) VALUES
(1, 'Physics Problems', 'Gravitational Force Derivation Explain', 1, '2021-12-22', '2021-12-27', 'ER Dig PBRS.pdf'),
(2, 'Maths Problems	', 'Limitations & Derivations Problems', 1, '2021-12-22', '2021-12-28', 'PBRS_SRS .pdf'),
(3, 'Chemistry Problems', 'Carbon Compound Family Tables	', 2, '2021-12-22', '2021-12-27', 'Team -Project Assignment.pdf'),
(4, 'Programming Problems', 'Python & Database DBMS Problems	', 2, '2021-12-22', '2021-12-29', 'Team -Project Assignment.pdf'),
(5, 'CSS', 'CSS Short Trick Problems', 1, '2022-01-04', '2022-01-11', 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sr.no` int(11) NOT NULL,
  `Yname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `professor` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `tellAbout` varchar(255) NOT NULL,
  `concern` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Sr.no`, `Yname`, `email`, `mobile`, `member`, `professor`, `user`, `tellAbout`, `concern`) VALUES
(1, 'Sanket Suryawanshi', 'suryawanshisanket69@gmail.com', '7666294825', 'Yes', 'Yes', 'Yes', 'Nothing More Interesting', 'Nothing more !!!');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `Assignment_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `Answers` varchar(255) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `submitted_date` date NOT NULL,
  `Marks` int(100) NOT NULL,
  `Evaluated_Marks` int(100) NOT NULL,
  `Certificate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`Assignment_id`, `user_id`, `Answers`, `Comments`, `due_date`, `submitted_date`, `Marks`, `Evaluated_Marks`, `Certificate`) VALUES
(1, 1, 'AICTE PROCESS DOCUMENT_Student Registration.pdf', 'Nice Work !!', '2021-12-27', '2021-12-22', 80, 85, ''),
(2, 1, '881055278066515_encrypt_signedFinal.pdf', 'Cowin Work !!', '2021-12-28', '2021-12-22', 90, 85, ''),
(3, 2, '5 Transport Layer.pdf', 'I have doubts !!', '2021-12-27', '2021-12-24', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `Name`, `Email`, `Password`, `Phone`, `Address`, `profile`) VALUES
(1, 'Sanket Suryawanshi', 'suryawanshisanket69@gmail.com', 'Sanket@@123', 7666294825, 'Mumbai', 'sanket.jpg'),
(2, 'Snehal Suryawanshi', 'snehalsuryawanshi@gmail.com', 'Snehal@@123', 7057899850, 'Ratnagiri', 'snehal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`Assignment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`Assignment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `Assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
