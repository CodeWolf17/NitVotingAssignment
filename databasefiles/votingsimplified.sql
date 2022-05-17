-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2022 at 10:02 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18917587_votingsimplified`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) DEFAULT NULL,
  `surname` varchar(30) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `age` int(11) NOT NULL,
  `maritalstatus` enum('single','married','divorced','deadpartner') NOT NULL,
  `region` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL DEFAULT 'TANZANIAN',
  `userID` int(11) NOT NULL,
  `password` varchar(52) NOT NULL,
  `usertype` enum('registrar','judge') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`firstname`, `middlename`, `surname`, `gender`, `age`, `maritalstatus`, `region`, `nationality`, `userID`, `password`, `usertype`) VALUES
('innocent', 'ibrahim', 'mwijonge', 'male', 22, 'single', 'Dodoma', 'TANZANIAN', 8, '7842bc72d1734d0cb6f4b3b05358cb7d', 'judge'),
('swithan', NULL, 'billa', 'male', 23, 'single', 'pwani', 'TANZANIAN', 7, '7842bc72d1734d0cb6f4b3b05358cb7d', 'registrar'),
('Esther', 'Geras', 'Mwita', 'female', 22, 'divorced', 'Dar Es Salaam', 'TANZANIAN', 11, '7842bc72d1734d0cb6f4b3b05358cb7d', 'registrar');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `gender`, `img`) VALUES
(1, 'President', 'Harry', 'Den', 'Male', 'upload/male3.jpg'),
(2, 'Secretary', 'James', 'Corden', 'Male', 'upload/male3.jpg'),
(3, 'President', 'Mwijonge', 'Maricen', 'Male', 'upload/browser.jpg'),
(4, 'Secretary', 'Man', 'Jahulula', 'Male', 'upload/Untitled-2.png'),
(5, 'Vice President for Internal Affairs', 'John', 'Jo', 'Male', 'upload/cloudy.png'),
(6, 'Vice President for Internal Affairs', 'Emma', 'Piano', 'Male', 'upload/Untitled-2.png'),
(7, 'Vice President for Internal Affairs', 'John', 'Jo', 'Male', 'upload/cloudy.png'),
(8, 'President', 'isaiah', 'john', 'Male', 'upload/IMG_20210819_135513_174.jpg'),
(9, 'President', 'isaiah', 'john', 'Male', 'upload/IMG_20210819_135513_174.jpg'),
(10, 'President', 'isaiah', 'john', 'Male', 'upload/IMG_20210819_135513_174.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) DEFAULT NULL,
  `surname` varchar(30) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `age` int(11) NOT NULL,
  `maritalstatus` enum('single','married','divorced','deadpartner') NOT NULL,
  `region` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL DEFAULT 'TANZANIAN',
  `userID` int(11) NOT NULL,
  `password` varchar(52) NOT NULL,
  `status` enum('voted','unvoted') NOT NULL DEFAULT 'unvoted',
  `usertype` enum('voter') NOT NULL DEFAULT 'voter'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`firstname`, `middlename`, `surname`, `gender`, `age`, `maritalstatus`, `region`, `nationality`, `userID`, `password`, `status`, `usertype`) VALUES
('Selina ', 'Venance', 'Tarimo', 'female', 21, 'single', 'Kilimamjaro', 'Tanzanian', 1001, 'c43d7c8f3bdbaf9e592b0b38a27e08fa', 'voted', 'voter'),
('kilo', NULL, 'man', 'male', 23, 'married', 'dar', 'TANZANIAN', 1006, '7815696ecbf1c96e6894b779456d330e', 'voted', 'voter'),
('inno', 'cent', 'mwijo', 'male', 21, 'single', 'dodoma', 'tanzanian', 1007, '6e4b53ea3b52c602de86672b3880898a', 'unvoted', 'voter'),
('voter', 'wa', 'mchongo', 'male', 21, 'single', 'Dodoma', 'Tanzanian', 1008, 'f970e2767d0cfe75876ea857f92e319b', 'unvoted', 'voter'),
('Esther', 'Innocent', 'Swithan', 'male', 22, 'single', 'Dodoma', 'Tanzanian', 1009, '5f4dcc3b5aa765d61d8327deb882cf99', 'unvoted', 'voter');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `userID`) VALUES
(78, 1, 9),
(79, 5, 9),
(80, 0, 9),
(81, 2, 9),
(82, 0, 9),
(83, 0, 9),
(84, 0, 9),
(85, 0, 9),
(86, 0, 9),
(87, 0, 9),
(88, 0, 9),
(89, 0, 1003),
(90, 0, 1003),
(91, 0, 1003),
(92, 0, 1003),
(93, 0, 1003),
(94, 0, 1003),
(95, 0, 1003),
(96, 0, 1003),
(97, 0, 1003),
(98, 0, 1003),
(99, 0, 1003),
(100, 1, 1006),
(101, 5, 1006),
(102, 0, 1006),
(103, 4, 1006),
(104, 0, 1006),
(105, 0, 1006),
(106, 0, 1006),
(107, 0, 1006),
(108, 0, 1006),
(109, 0, 1006),
(110, 0, 1006),
(111, 1, 1001),
(112, 5, 1001),
(113, 0, 1001),
(114, 4, 1001),
(115, 0, 1001),
(116, 0, 1001),
(117, 0, 1001),
(118, 0, 1001),
(119, 0, 1001),
(120, 0, 1001),
(121, 0, 1001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
