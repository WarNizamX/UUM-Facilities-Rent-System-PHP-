-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 03:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uumps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin'),
(3, 'cigarazak@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `fac_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fac_type` varchar(255) NOT NULL,
  `fac_code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `rent_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`fac_id`, `description`, `fac_type`, `fac_code`, `image`, `rent_cost`, `capacity`, `status`) VALUES
(15, 'Saiz Olimpik(1 Unit)', 'Kolam Renang', '12', 'b.jpg', 1, 1, 'Pending'),
(16, 'Indoor/Outdoor(4 Unit)', 'Gelanggang Sepak Takraw', '13', 'c.jpg', 30, 4, 'Pending'),
(17, 'Lelaki/Perempuan(2 Unit)', 'Bilik Sauna', '14', 'SAUNA.jpg', 3, 2, 'Pending'),
(18, 'Outdoor(1 Unit)', 'Padang Hoki', '15', 'HOKI.jpg', 30, 1, 'Pending'),
(19, 'Indoor/Outdoor(2 Unit)', 'Bola Tampar', '22', 'BOLA-TAMPAR.jpg', 20, 2, 'Pending'),
(20, 'Outdoor(1 UNIT) ', 'Lapang Sasar Memanah', '23', 's.jpg', 30, 1, 'Pending'),
(21, 'Tendem and Single Bike(30 Unit)', 'Basikal Tendem', '24', 'd.jpg', 2, 30, 'Pending'),
(22, 'Type: Grass and Synthetic', 'Bola Jaring', '25', 'BOLA-JARING.jpg', 20, 2, 'Pending'),
(24, 'Indoor(1 Unit)', 'Gymnasium', '30', 'GYMNASIUM.jpg', 30, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_list`
--

CREATE TABLE `facilities_list` (
  `faci_id` int(50) NOT NULL,
  `faci_name` varchar(50) NOT NULL,
  `faci_date` varchar(50) NOT NULL,
  `faci_time` varchar(50) NOT NULL,
  `faci_available` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_list`
--

INSERT INTO `facilities_list` (`faci_id`, `faci_name`, `faci_date`, `faci_time`, `faci_available`) VALUES
(97, 'Kolam Renang', '27/12/2020', '9:00 a.m-10:00 a.m', 'No'),
(98, 'Gelanggang Sepak Takraw', '24/12/2020', '', 'Yes'),
(99, 'Bilik Sauna', '18/12/2020', '3:00 p.m-3:30 p.m', 'No'),
(100, 'Padang Hoki', '29/12/2020', '8:00 a.m-10:a.m', 'No'),
(101, 'Bola Tampar', '26/12/2020', '10:30 a.m-5:30 p.m', 'No'),
(102, 'Lapang Sasar Memanah', '10/1/2021', '10', 'No'),
(103, 'Basikal Tendem', '5/1/2021', '', 'Yes'),
(104, 'Bola Jaring', '16/1/2021', '10:00 a.m-4:30 p.m', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mem_status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `fac_code` varchar(255) NOT NULL,
  `fac_unit` int(11) NOT NULL,
  `book_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `fname`, `email`, `id_no`, `phone`, `gender`, `mem_status`, `address`, `city`, `postcode`, `state`, `country`, `fac_code`, `fac_unit`, `book_time`) VALUES
(50, 'Amir', 'amir@gmail.com', 121212, '018323234212', 'Male', 'Reject', 'Dungun,Terengganus', 'Teenganu', '02302', 'Terengganu', 'Malaysia', '24', 1, ''),
(52, 'Amirul', 'mirul@gmail.com', 2222, '0123242232', 'Male', 'Reject', 'Taman sakti', 'kemaman', '08029', 'PERAK', 'Malaysia', '23', 1, ''),
(53, 'Nizam', 'kosaki108@gmail.com', 5747, '01124066803', 'Male', 'Approved', '1395,Jalan Cempaka Indah 18,Taman Cempaka Indah', 'Sungai Petani', '08010', 'Kedah', 'Malaysia', '22', 1, '10:30 a.m-12:00 p.m'),
(54, 'Hafizah', 'fie@gmail.com', 5555, '01957623233', 'Female', 'Pending', 'Taman Jati.SS alam', 'Subang Jaya', '07232', 'Selangor', 'Malaysia', '25', 1, ''),
(55, 'Epul', 'pul@gmail.com', 9999, '+60193362987', 'Male', 'Pending', 'Universiti Teknologi MARA (UiTM)', 'Shah Alam', '40450', 'Selangor', 'Malaysia', '14', 2, ''),
(59, 'Haziq', 'haziq@gmail.com', 8888, '01123242422', 'Male', 'Approved', 'Taman Kemaman Indah 18.', 'Sungai Biawak', '07210', 'Kedah', 'Malaysia', '15', 1, '8:00 a.m - 10:00 a.m');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `mem_id`, `message`, `status`, `time`) VALUES
(7, 0, 'Hi admin , can ', 'Unread', '2021-01-16 22:28:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `facilities_list`
--
ALTER TABLE `facilities_list`
  ADD PRIMARY KEY (`faci_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `facilities_list`
--
ALTER TABLE `facilities_list`
  MODIFY `faci_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
