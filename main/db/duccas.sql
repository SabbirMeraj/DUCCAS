-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 02:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duccas`
--

-- --------------------------------------------------------

--
-- Table structure for table `associate_member`
--

CREATE TABLE `associate_member` (
  `Membership_ID` int(5) NOT NULL,
  `Occupation` varchar(40) NOT NULL,
  `Bank_AC_No` varchar(20) NOT NULL,
  `Recommender_Membereship_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associate_member`
--

INSERT INTO `associate_member` (`Membership_ID`, `Occupation`, `Bank_AC_No`, `Recommender_Membereship_ID`) VALUES
(707, 'Student', '123456', 726),
(709, 'Businessman', '123456', 702),
(711, 'Student', '112357', 726);

-- --------------------------------------------------------

--
-- Table structure for table `available_item`
--

CREATE TABLE `available_item` (
  `Available_Item_ID` int(10) NOT NULL,
  `Item_ID` int(5) NOT NULL,
  `Day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_item`
--

INSERT INTO `available_item` (`Available_Item_ID`, `Item_ID`, `Day`) VALUES
(1, 1, 'Saturday'),
(2, 1, 'Monday'),
(3, 1, 'Wednesday'),
(4, 2, 'Saturday'),
(5, 2, 'Sunday'),
(6, 2, 'Monday'),
(7, 2, 'Tuesday'),
(8, 2, 'Thursday'),
(9, 2, 'Friday'),
(10, 3, 'Saturday'),
(11, 3, 'Monday'),
(12, 4, 'Saturday'),
(13, 4, 'Sunday'),
(14, 4, 'Monday'),
(15, 4, 'Tuesday'),
(16, 4, 'Wednesday'),
(17, 4, 'Thursday'),
(18, 4, 'Friday'),
(19, 5, 'Saturday'),
(20, 5, 'Sunday'),
(21, 5, 'Monday'),
(22, 5, 'Tuesday'),
(23, 5, 'Wednesday'),
(24, 5, 'Thursday'),
(25, 5, 'Friday'),
(26, 6, 'Saturday'),
(27, 6, 'Wednesday'),
(28, 7, 'Saturday'),
(29, 7, 'Wednesday'),
(30, 8, 'Saturday'),
(31, 8, 'Sunday'),
(32, 8, 'Monday'),
(33, 8, 'Tuesday'),
(34, 8, 'Wednesday'),
(35, 8, 'Thursday'),
(36, 8, 'Friday'),
(37, 9, 'Saturday'),
(38, 9, 'Sunday'),
(39, 9, 'Monday'),
(40, 9, 'Tuesday'),
(41, 9, 'Wednesday'),
(42, 9, 'Thursday'),
(43, 9, 'Friday'),
(44, 10, 'Saturday'),
(45, 10, 'Sunday'),
(46, 10, 'Monday'),
(47, 10, 'Tuesday'),
(48, 10, 'Wednesday'),
(49, 10, 'Thursday'),
(50, 10, 'Friday'),
(51, 11, 'Saturday'),
(52, 11, 'Sunday'),
(53, 11, 'Monday'),
(54, 11, 'Tuesday'),
(55, 11, 'Wednesday'),
(56, 11, 'Thursday'),
(57, 11, 'Friday'),
(58, 12, 'Sunday'),
(59, 12, 'Tuesday'),
(60, 12, 'Thursday'),
(61, 12, 'Friday'),
(62, 13, 'Sunday'),
(63, 13, 'Wednesday'),
(64, 14, 'Sunday'),
(65, 15, 'Sunday'),
(66, 16, 'Tuesday'),
(67, 16, 'Wednesday'),
(68, 16, 'Thursday'),
(69, 17, 'Monday'),
(70, 18, 'Monday'),
(71, 18, 'Thursday'),
(72, 19, 'Tuesday'),
(73, 19, 'Friday'),
(74, 20, 'Tuesday'),
(75, 20, 'Friday'),
(76, 21, 'Tuesday'),
(77, 21, 'Friday'),
(78, 22, 'Tuesday'),
(79, 22, 'Friday'),
(80, 23, 'Wednesday'),
(81, 24, 'Wednesday'),
(82, 25, 'Thursday'),
(83, 26, 'Saturday'),
(84, 26, 'Sunday'),
(85, 26, 'Monday'),
(86, 26, 'Tuesday'),
(87, 26, 'Wednesday'),
(88, 26, 'Thursday'),
(89, 26, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_item`
--

CREATE TABLE `consumer_item` (
  `Item_ID` int(5) NOT NULL,
  `Item_Name` varchar(20) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer_item`
--

INSERT INTO `consumer_item` (`Item_ID`, `Item_Name`, `Price`) VALUES
(1, 'Chitoipitha', 5),
(2, 'Rumaliruti', 10),
(3, 'Beef', 70),
(4, 'Daal', 60),
(5, 'Vegetable', 30),
(6, 'Daalpuri', 5),
(7, 'Alupuri', 5),
(8, 'Sandwich', 40),
(9, 'Bombay Toast', 10),
(10, 'Soup', 60),
(11, 'Lachchi', 40),
(12, 'Vapapitha', 5),
(13, 'Chicken fry', 50),
(14, 'Alu chop', 5),
(15, 'Cholapiaju', 40),
(16, 'Chicken grill', 120),
(17, 'Moghlaiparatha', 50),
(18, 'Shingara', 5),
(19, 'Shkkabab', 60),
(20, 'Luchi', 5),
(21, 'Sola Batura', 20),
(22, 'Somucha', 10),
(23, 'Paratha', 5),
(24, 'Chicken', 100),
(25, 'Sola Piaju', 20),
(26, 'Tea', 30);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(5) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Contact_Number` varchar(15) NOT NULL,
  `Present_Address` varchar(100) NOT NULL,
  `Permanent_Address` varchar(100) NOT NULL,
  `Email_Address` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Name`, `Contact_Number`, `Present_Address`, `Permanent_Address`, `Email_Address`, `Password`) VALUES
(700, 'ABC', '01826633740', 'Dhaka University', 'Bangladesh', 'abc.def@gmail.com', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `general_member`
--

CREATE TABLE `general_member` (
  `Membership_ID` int(5) NOT NULL,
  `Department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_member`
--

INSERT INTO `general_member` (`Membership_ID`, `Department`) VALUES
(178, 'IIT'),
(701, 'Genetics'),
(702, 'Physics'),
(703, 'Botany'),
(712, 'Math'),
(726, 'IIT');

-- --------------------------------------------------------

--
-- Table structure for table `lounge`
--

CREATE TABLE `lounge` (
  `Lounge_ID` int(10) NOT NULL,
  `Lounge_Name` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lounge`
--

INSERT INTO `lounge` (`Lounge_ID`, `Lounge_Name`, `Status`) VALUES
(1, 'Boishakhi', 'Enable'),
(2, 'Srabon', 'Enable'),
(3, 'Choitali', 'Enable'),
(4, 'Ekushe', 'Disable'),
(5, 'IIT DU Lounge', 'Disable');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Membership_ID` int(5) NOT NULL,
  `Designation_ID` int(5) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Contact_Number` varchar(15) NOT NULL,
  `Present_Address` varchar(100) NOT NULL,
  `Permanent_Address` varchar(100) NOT NULL,
  `Email_Address` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Membership_ID`, `Designation_ID`, `Name`, `Contact_Number`, `Present_Address`, `Permanent_Address`, `Email_Address`, `Password`) VALUES
(178, 4, 'ABCDE', '01826633747', 'FH Hall Dhaka University', 'Narayanganj', 'sabbir.meraj@gmail.com', '12345'),
(701, 4, 'Hasan', '01826633738', 'Azimpur', 'Jhenaidah', 'h.h@gmail.com', '12345'),
(702, 3, 'Sumon', '01826633748', 'FH Hall, Dhka University', 'Comilla', 'j.s@gmail.com', '12345'),
(703, 4, 'Shihab', '01826633740', 'Katabon', 'Madaripur', 's.s@gmail.com', '12345'),
(707, 5, 'Nafis', '01826633748', 'FH Hall, Dhka University', 'Sirajganj', 'nafis.faysal@gmail.com', '12345'),
(709, 5, 'Reshad', '01826633739', 'Hatirpool', 'Bogura', 'reshad.m@gmail.com', '12345'),
(711, 5, 'Tanvir', '01826633756', 'United State', 'Pabna', 't.a@gmail.com', '12345'),
(712, 3, 'Galib', '01826633749', 'Cantonment', 'Feni, Chittagong', 'asd.galib@gmail.com', '12345'),
(726, 1, 'Sabbir', '01826633747', '149/2 North Basaboo', 'Narayanganj', 'sabbir.meraj@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `send_food`
--

CREATE TABLE `send_food` (
  `Send_Food_ID` int(5) NOT NULL,
  `Item_ID` int(5) NOT NULL,
  `Lounge_ID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_food`
--

INSERT INTO `send_food` (`Send_Food_ID`, `Item_ID`, `Lounge_ID`, `Date`, `Amount`) VALUES
(1, 10, 2, '2017-04-18', 6),
(4, 26, 2, '2017-04-20', 25),
(5, 2, 1, '2017-04-21', 20),
(6, 5, 1, '2017-04-20', 25),
(7, 2, 1, '2017-04-20', 5),
(8, 2, 2, '0000-00-00', 5),
(9, 2, 2, '2017-04-21', 5),
(10, 2, 1, '2017-04-27', 25),
(11, 5, 3, '2017-04-26', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `Designation_ID` int(5) NOT NULL,
  `Designation` varchar(40) NOT NULL,
  `Fee` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`Designation_ID`, `Designation`, `Fee`) VALUES
(1, 'Professor', 250),
(2, 'Associate Professor', 225),
(3, 'Assistant Professor', 175),
(4, 'Lecturer', 150),
(5, 'Other', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associate_member`
--
ALTER TABLE `associate_member`
  ADD PRIMARY KEY (`Membership_ID`);

--
-- Indexes for table `available_item`
--
ALTER TABLE `available_item`
  ADD PRIMARY KEY (`Available_Item_ID`);

--
-- Indexes for table `consumer_item`
--
ALTER TABLE `consumer_item`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `general_member`
--
ALTER TABLE `general_member`
  ADD PRIMARY KEY (`Membership_ID`);

--
-- Indexes for table `lounge`
--
ALTER TABLE `lounge`
  ADD PRIMARY KEY (`Lounge_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Membership_ID`),
  ADD KEY `Designation_ID` (`Designation_ID`);

--
-- Indexes for table `send_food`
--
ALTER TABLE `send_food`
  ADD PRIMARY KEY (`Send_Food_ID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`Designation_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_item`
--
ALTER TABLE `available_item`
  MODIFY `Available_Item_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `consumer_item`
--
ALTER TABLE `consumer_item`
  MODIFY `Item_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `lounge`
--
ALTER TABLE `lounge`
  MODIFY `Lounge_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `send_food`
--
ALTER TABLE `send_food`
  MODIFY `Send_Food_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `Designation_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `Member_ibfk_1` FOREIGN KEY (`Designation_ID`) REFERENCES `subscription` (`Designation_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
