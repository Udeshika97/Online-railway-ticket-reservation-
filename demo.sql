-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 05:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Adminid` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Adminid`, `Username`, `Password`) VALUES
(1, 'sonali', 'sona123'),
(2, 'hiruni', 'hiru123'),
(3, 'udeshika', 'udeshi12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contactid` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contactid`, `Name`, `Address`, `Email`, `Mobile`, `Message`) VALUES
(1, 'Supun Jayaweera', 'Colombo 5', 'supun@gmail.com', '0716156018', 'Great service');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Loginid` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Loginid`, `Username`, `Password`) VALUES
(1, 'supunJ', '322gher5');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `NICorPassport` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Repeatpassword` varchar(8) NOT NULL,
  `Firstname` varchar(10) NOT NULL,
  `Lastname` varchar(10) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`NICorPassport`, `Username`, `Password`, `Repeatpassword`, `Firstname`, `Lastname`, `Mobile`, `Email`, `Address`) VALUES
(0, '', '', '', '', '', '', '', ''),
(975962997, 'supunJ', '322gher5', '322gher5', 'Supun', 'Jayaweera', '0716156018', 'supun@gmail.com', 'Colombo 5');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservationid` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Class` varchar(8) NOT NULL,
  `Departure` varchar(15) NOT NULL,
  `Arrival` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservationid`, `Type`, `Class`, `Departure`, `Arrival`, `Date`, `Time`, `Seats`) VALUES
(1, 'Express', 'First', 'Colombo Fort', 'Ella', '2020-05-22', '08:30:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `JourneyNumber` int(11) NOT NULL,
  `Departure` varchar(20) NOT NULL,
  `DepartureTime` varchar(10) NOT NULL,
  `Arrival` varchar(20) NOT NULL,
  `ArrivalTime` varchar(10) NOT NULL,
  `TrainNumber` int(11) NOT NULL,
  `TrainType` varchar(20) NOT NULL,
  `Class` varchar(15) NOT NULL,
  `A/C` varchar(5) NOT NULL,
  `Fare` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`JourneyNumber`, `Departure`, `DepartureTime`, `Arrival`, `ArrivalTime`, `TrainNumber`, `TrainType`, `Class`, `A/C`, `Fare`) VALUES
(1, 'Colombo Fort', '06:00', 'Peradeniya', '09:15', 1005, 'Express', 'First Class', 'Yes', 'Rs.2000'),
(2, 'Colombo Fort', '06:45', 'Peradeniya', '09:17', 1001, 'Express', 'First Class', 'Yes', 'Rs.2000'),
(3, 'Colombo Fort', '07:00', 'Peradeniya', '09:21', 1009, 'Express', 'Second Class', 'No', 'Rs.1000'),
(4, 'Colombo Fort', '08:30', 'Peradeniya', '10:54', 1015, 'Express', 'Second Class', 'No', 'Rs.2000'),
(5, 'Colombo Fort', '08:30', 'Peradeniya', '10:54', 1015, 'Express', 'First Class', 'Yes', 'Rs.2200'),
(6, 'Colombo Fort', '09:54', 'Peradeniya', '12:25', 1007, 'Express', 'Third Class', 'No', 'Rs.800'),
(7, 'Colombo Fort', '15:35', 'Peradeniya', '17:56', 1029, 'Express', 'Second Class', 'No', 'Rs.1000'),
(8, 'Colombo Fort', '15:35', 'Peradeniya', '17:56', 1029, 'Express', 'Third Class', 'No', 'Rs.800'),
(9, 'Colombo Fort', '20:00', 'Peradeniya', '22:52', 1045, 'NM-Slow', 'Second Class', 'No', 'Rs.2000'),
(10, 'Colombo Fort', '20:00', 'Peradeniya', '22:52', 1045, 'NM-Slow', 'Third Class', 'No', 'Rs.800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contactid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Loginid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`NICorPassport`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservationid`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`JourneyNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `JourneyNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
