-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2021 at 03:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volPortal`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appID` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `descriptionn` varchar(1000) NOT NULL,
  `checked` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appID`, `first_name`, `last_name`, `email`, `descriptionn`, `checked`) VALUES
(15, 'Scott', 'Jones', 'scottjones@gmail.com', 'I am interested in doing meal prep and delivery.           ', 1),
(16, 'Mark', 'Anthony', 'mark.ant@gmail.com', 'I am interesting in being a chef for the organization!           ', 0),
(19, 'Gary', 'Sanchez', 'elgary@yankees.com', 'I would love to volunteer as a chef!', 1),
(20, 'Sok', 'Sok', 'sok@aol.com', 'idk           ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dropOff`
--

CREATE TABLE `dropOff` (
  `droppedID` int(10) UNSIGNED NOT NULL,
  `shelter` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `volunteer_name` varchar(35) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropOff`
--

INSERT INTO `dropOff` (`droppedID`, `shelter`, `address`, `volunteer_name`, `date`) VALUES
(1, 'ABC', '123 ocean drive', 'sokol', '2019-07-31'),
(4, 'abcd', '123 ocean drive', 'sokol', '2019-07-31'),
(5, 'dun', '12nonm', 'sokol', '1011-10-10'),
(9, 'acssq', 'dont know', 'John 2', '2019-07-29'),
(10, 'CBD', '333 some lane', 'Lebron', '2019-07-31'),
(11, 'Shelter A', '22 Jones place', 'Adam', '2019-08-05'),
(12, 'DEF', '22 mango dr', 'LeBron', '2019-08-07'),
(13, 'ABC', '33 idk lane', 'Scott Jones', '2019-08-06'),
(14, 'DEF', '23 some street', 'Adam ', '0000-00-00'),
(15, 'ABC', '1 some st', 'Doc', '2019-08-15'),
(16, 'Coneys Shelter', '22 dewer lane', 'Michael Jordan', '2020-08-29'),
(17, 'shelter b', '12 main road', 'Gary Sanchez', '2020-09-07'),
(18, 'shelter c', 'man', 'gary', '2021-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `foodDonors`
--

CREATE TABLE `foodDonors` (
  `foodID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `pickUpDay` varchar(35) NOT NULL,
  `pickUpTime` varchar(35) NOT NULL,
  `foodDes` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `checked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodDonors`
--

INSERT INTO `foodDonors` (`foodID`, `userID`, `pickUpDay`, `pickUpTime`, `foodDes`, `address`, `checked`) VALUES
(3, 6, '2019-08-14', '13:00', '10 carrots, 5 apples, 10 lettuce', '12 whole food rd', 0),
(4, 6, '2019-08-14', '09:00', '10 carrots, 5 apples, 10 lettuce', '12 whole food rd', 0),
(5, 6, '2019-08-08', '09:00', '20 bananas, 15 oranges, 20 apples', '12 whole food rd', 0),
(7, 6, '2019-08-08', '08:00', '20 apples, 50 oranges', '12 whole food rd', 0),
(8, 45, '2019-08-16', '09:00', '10 turkey, 10 lettuce', '1 whole foods', 0);

-- --------------------------------------------------------

--
-- Table structure for table `moneyDonors`
--

CREATE TABLE `moneyDonors` (
  `donationID` int(10) UNSIGNED NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moneyDonors`
--

INSERT INTO `moneyDonors` (`donationID`, `amount`) VALUES
(2, 20000),
(3, 20000),
(4, 2000),
(5, 1000),
(6, 10003);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `volRole` varchar(1000) NOT NULL,
  `location` varchar(35) NOT NULL,
  `Day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleID`, `userID`, `volRole`, `location`, `Day`) VALUES
(16, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(17, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(18, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(19, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(20, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(21, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(22, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(23, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(24, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(25, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(26, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(27, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(28, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(29, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(30, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(31, 41, ' You are the chef today. ', 'Truck A', '2019-08-05'),
(34, 41, ' You will be in charge of delivering meals to shelter DEF/', 'Truck B', '2019-08-19'),
(35, 41, ' qqqqqqhuvxuwvsxbwexiwebcbheibcuhbeubceiubcbecbiebwicbeijbcijbeijbcibe cijbeijbcijebcibejcbiebcbebcibeibcihbdecibeciebdcibciibdecibidbecibibdecibdeciibdecibdeciibbdecibiijbdecibijbedcijijebcijbedcijbjbecjbdecijebcbdecjjbdecijebcjbdecibbcijbdcibijbijbdciijebdcijbeijbcibdecijbdjbcjibdcjdbecibijbdcbijdbcijbdijcbdbcjidbecjbidijbcjdebcijdbcijbijcbdebcibdcbijebcijebdcibdeijcdebcbdecjibdebcdebcbjecbedcbdecbibdecjbdecjdebcdebcdejdebcdibidebcidebcbdebcedbcibidebcuobdecbjebciejbcijdebdecijobdeciecbedcijbcdibcjhdbcjde', 'Truck A', '2019-08-14'),
(37, 29, ' You will be running food', 'Truck A', '2020-08-14'),
(39, 53, ' You will be working as our chef today.', 'Truck A', '2020-09-07'),
(40, 53, ' work truck', 'truck b', '2021-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `passwordd` varchar(1000) NOT NULL,
  `street` varchar(35) NOT NULL,
  `city` varchar(35) NOT NULL,
  `statee` varchar(2) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `typee` int(11) NOT NULL,
  `avail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `first_name`, `last_name`, `email`, `passwordd`, `street`, `city`, `statee`, `zip`, `typee`, `avail`) VALUES
(5, 'sokol', 'sheri', 'sokolsheri@gmail.com', '6f94a91fc96f0d44fdf56b2bbf93e966c348df2d', '325 thomas st', 'si', 'AL', '10111', 1, ''),
(6, 'whole', 'foods', 'manager@gmail.com', '58d3b506a3e7a60bfc74dbdf10c56a565ec021db', '12 whole food rd', 'Manhattan', 'NY', '11110', 3, ''),
(29, 'ALEX', 'TUNG', 'atung@gmail.com', '033be7118da8103385fd540f7eff68f86d5e3241', '2ertg`', 'staten', 'NM', '10203', 2, 'ALL'),
(38, 'IVAN', 'WIZE', 'iwize@gmail.com', '45f297392e3e51c663aeb78c3c87c6c043dbec54', 'city street', 'Queens', 'NY', '11111', 1, ' THURS'),
(41, 'ADAM', 'SANDLER', 'aSandler@gmail.com', '279e47f8cc79a2ef68e27ee51f5554b2db2b77c3', '1 ocean rd', 'Bronx', 'AL', '10211', 2, 'ALL'),
(42, 'SHI', 'LI', 'shili@gmail.com', 'b4b022cc88462a7e4b820ab7ba9039bc07b83bba', '2 fruit lane', 'Manhattan', 'NY', '11101', 1, 'ALL'),
(45, 'JOHN ', 'WALKER', 'jwalker@wholefoods.com', 'ed06ddb1859a34bfc8a82aa08293f9747698e17c', '2 whole foods rd', 'Manhattan', 'NY', '11111', 3, 'ALL'),
(50, 'BOBBY', 'FLAY', 'bobbyflay@gmail.com', '279e47f8cc79a2ef68e27ee51f5554b2db2b77c3', '1 ocean rd', 'Bronx', 'NY', '10211', 2, 'ALL'),
(53, 'GARY', 'SANCHEZ', 'elgary@yankees.com', 'c7f5ad19683e803432e906610ca15d46b9face3e', '13 m s', 'brook', 'AK', '11211', 2, ' THURS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `dropOff`
--
ALTER TABLE `dropOff`
  ADD PRIMARY KEY (`droppedID`);

--
-- Indexes for table `foodDonors`
--
ALTER TABLE `foodDonors`
  ADD PRIMARY KEY (`foodID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `moneyDonors`
--
ALTER TABLE `moneyDonors`
  ADD PRIMARY KEY (`donationID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dropOff`
--
ALTER TABLE `dropOff`
  MODIFY `droppedID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `foodDonors`
--
ALTER TABLE `foodDonors`
  MODIFY `foodID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `moneyDonors`
--
ALTER TABLE `moneyDonors`
  MODIFY `donationID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foodDonors`
--
ALTER TABLE `foodDonors`
  ADD CONSTRAINT `foodDonors_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
