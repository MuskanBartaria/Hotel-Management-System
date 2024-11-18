-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 11:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `check in`
--

CREATE TABLE `check in` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `adhaar` varchar(12) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check in`
--

INSERT INTO `check in` (`id`, `name`, `adhaar`, `pass`, `address`, `phone`, `email`, `gender`) VALUES
(1, 'Muskan Bartaria', '54541151', 'muskan', 'Saket', '9015571475', 'ksmv29muskan@gmail.c', 'female'),
(2, 'Muskan Bartaria', '45', '', '', '', '', ''),
(3, 'Muskan Bartaria', '4554', 'muskan', 'bdwubduw', '56592', 'k', 'female'),
(4, 'Muskan Bartaria', '54541151', 'muskan', 'Saket', '9015571475', 'ksmv29muskan@gmail.c', 'female'),
(5, 'KAUSHAL BARTARIA', '54841616', 'kaushal', 'ugfuewgvwuig', '94514654894', 'vbartaria59@gmail.co', 'male'),
(6, 'KAUSHAL BARTARIA', '484646', 'kaushal', 'vbeubvwi', '959456464', 'vbartaria59@gmail.co', 'male'),
(7, 'KAUSHAL BARTARIA', '484646', 'kaushal', 'vbeubvwi', '959456464', 'vbartaria59@gmail.co', 'male'),
(8, 'KAUSHAL BARTARIA', '484646', 'kaushal', 'vbeubvwi', '959456464', 'vbartaria59@gmail.co', 'male'),
(9, 'va', '', '', '', '', '', ''),
(10, 'vaibhav', '6446648546', 'vaibhav', 'bffbufb', '468794564', 'vaibhav162001@gmail.', 'male'),
(11, 'Muskan Bartaria', '', '', '', '', '', ''),
(12, 'Muskan Bartaria', '46454846', 'muskan', 'hfugfuigf', '57465784645', 'ksmv29muskan@gmail.c', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(6) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comments` varchar(60) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `name`, `email`, `comments`, `date`) VALUES
(11, 'Muskan', 'muskan@gmail.com', 'nice', '06/01/18'),
(12, 'pinky', 'pinky@gmail.com', 'awesome', '07/01/18'),
(13, 'puja', 'puja@gmail.com', 'helpfull', '07/01/18'),
(14, 'Neeraj', 'neeraj@gmail.com', 'great', '09/01/18'),
(15, 'vaibhav', 'vaibhav@gmail.com', 'great job', '11/01/18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(2) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `aadhar` varchar(16) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `check_in_date` varchar(11) NOT NULL,
  `check_in_time` varchar(11) NOT NULL,
  `room` int(5) NOT NULL,
  `number` int(5) NOT NULL,
  `payment` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `aadhar`, `address`, `phone`, `check_in_date`, `check_in_time`, `room`, `number`, `payment`) VALUES
(1, 'Muskan', 'Bartaria', '64489494', 'saket', '449464544', '2018-12-31', '00:59', 2, 101, 5000),
(2, 'alpana', 'Srivastav', '1234567891234', 'abc badarpur', '1234567891', '2018-01-17', '12:59', 1, 101, 2500),
(3, 'manoj', 'kumar', '123abc', '123 saket', '9874563210', '2018-01-17', '02:00', 1, 102, 2500),
(4, 'Muskan', 'Bartaria', '6464646464', 'saket', '9015571475', '2018-02-01', '11:00', 1, 103, 2500),
(5, 'Muskan', 'Bartaria', '6464646464', 'saket', '9015571475', '2018-02-01', '11:00', 1, 103, 2500),
(6, 'muskan', 'bartaria', '1234567891234', 'abc', '846469498', '2018-02-07', '13:59', 1, 101, 2500),
(7, 'Muskan', 'Bartaria', '64646454564', 'neb sarai', '48484948484', '2018-03-14', '12:59', 1, 104, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `aadhar` varchar(16) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `check_in_date` varchar(11) NOT NULL,
  `check_in_time` varchar(11) NOT NULL,
  `room_number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room` int(10) NOT NULL,
  `book` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room`, `book`) VALUES
(101, 'yes'),
(102, 'no'),
(103, 'no'),
(104, 'no'),
(105, 'yes'),
(106, 'yes'),
(107, 'yes'),
(108, 'yes'),
(109, 'yes'),
(110, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check in`
--
ALTER TABLE `check in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check in`
--
ALTER TABLE `check in`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
