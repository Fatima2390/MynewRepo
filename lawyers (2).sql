-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 10:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Date` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `LawyerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ClientID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ClientID`, `Name`, `Email`, `City`, `Contact`, `Gender`, `password`) VALUES
(1, 'Ahmed', 'ahmed@gmail.com', 'karachi', 9784651, 'Male', ''),
(3, 'mubeen', '', '', 0, '', 'mubeen');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `LawyerID` int(11) NOT NULL,
  `nic` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Cases_done` int(11) NOT NULL,
  `Success_cases` int(11) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Services` varchar(50) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`LawyerID`, `nic`, `Name`, `Specialization`, `Cases_done`, `Success_cases`, `Contact`, `Location`, `Services`, `image`) VALUES
(52, 42343242, 'Mubeen', 'Criminal', 23, 2, 342424, 'Hyderabad', 'Family', 'b1.PNG'),
(53, 534535, 'ali', 'Family', 345, 34, 342424, 'Lahore', 'Property', '050_sc18.jpg'),
(54, 2343232, 'fgdfd', 'Criminal', 34, 23432, 2434, 'Hyderabad', 'Family', '050_sc18.jpg'),
(55, 235423, 'ali123', 'Criminal', 5423, 123, 342424, 'Hyderabad', 'Family', '050_sc18.jpg'),
(56, 345345345, 'ali345', 'Property', 345345, 2147483647, 342424, 'Multan', 'Offense', '050_sc18.jpg'),
(57, 5345345, '534534ggdfg', 'Offense', 678, 432, 53453453, 'Lahore', 'Offense', 'a1.PNG'),
(58, 234234, 'Mubeen234234', 'Family', 5234, 23, 23424, 'Lahore', 'Offense', 'a1.PNG'),
(59, 23423, '234', 'Family', 234, 2, 4353535, 'Hyderabad', 'Family', '050_sc18.jpg'),
(60, 12324, 'abc123123', 'Criminal', 213, 12, 123123, 'Hyderabad', 'Offense', '050_sc18.jpg'),
(61, 1243, '432ff', 'Family', 5, 4, 4325, 'Hyderabad', 'Criminal', '050_sc18.jpg'),
(65, 124234234, 'Ahmed', 'Offense', 5, 3, 342424, 'Hyderabad', 'Family', 'cat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `location`) VALUES
(1, 'Karachi'),
(2, 'Hyderabad'),
(3, 'Lahore'),
(4, 'Multan');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `service`, `details`) VALUES
(1, 'Property', ''),
(2, 'Criminal', ''),
(3, 'Family', ''),
(4, 'Offense', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `lawyer_name` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`lawyer_name`, `customer_name`, `date`) VALUES
('Ali', 'Ahmed', '2020-11-27'),
('Ali', 'PHP', '2020-11-27'),
('Ali', 'PHP', '2020-11-27'),
('Ali', 'JavaScript', '2020-11-27'),
('dfss', 'adas', '2020-11-28'),
('Ali', 'PHP', '2020-11-27'),
('Ali', 'PHP', '2020-11-27'),
('Ali', 'REACT', '2020-11-27'),
('dfss', 'REACT', '2020-12-02'),
('Ali', 'REACT', '2020-11-27'),
('Ali', 'PHP', '2020-11-27'),
('Ali', 'REACT', '2020-11-27'),
('Ali', 'REACT', '2020-11-27'),
('mubeen', 'Ahmed', '2020-11-28'),
('mubeen', 'Ahmed', '2020-11-28'),
('Fahad', 'Nabeel', '2020-11-29'),
('hamid', 'Mubeen', '2020-11-28'),
('hamid', 'Mubeen', '2020-11-28'),
('hamid', 'Mubeen', '2020-11-28'),
('hamid', 'Mubeen', '2020-11-28'),
('hamid', 'asad', '2020-11-29'),
('Mubeen', 'Mubeen', '2020-12-02'),
('ali123', 'Mubeen', '2020-12-03'),
('ali123', '34', '2020-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD KEY `ClientID` (`ClientID`),
  ADD KEY `LawyerID` (`LawyerID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`LawyerID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ClientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `LawyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `clients` (`ClientID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`LawyerID`) REFERENCES `lawyer` (`LawyerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
