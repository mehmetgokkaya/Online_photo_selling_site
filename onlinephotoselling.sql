-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 09:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinephotoselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditrequest`
--

CREATE TABLE `creditrequest` (
  `cid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditrequest`
--

INSERT INTO `creditrequest` (`cid`, `amount`, `date`, `uid`, `email`) VALUES
(3, 100, '2019-04-30 06:53:14', 3, 'tripto47@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `downloadlist`
--

CREATE TABLE `downloadlist` (
  `pid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `photoname` varchar(100) NOT NULL,
  `imagename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloadlist`
--

INSERT INTO `downloadlist` (`pid`, `uid`, `photoname`, `imagename`) VALUES
(9, 3, 'sajek', '20190536243887sajek.jpg'),
(9, 3, 'sajek', '20190536243887sajek.jpg'),
(10, 3, 'saintmartin', '20192137524563saintmartin.jpg'),
(10, 3, 'saintmartin', '20192137524563saintmartin.jpg'),
(9, 3, 'sajek', '20190536243887sajek.jpg'),
(10, 3, 'saintmartin', '20192137524563saintmartin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infotable`
--

CREATE TABLE `infotable` (
  `uid` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infotable`
--

INSERT INTO `infotable` (`uid`, `username`, `password`, `email`, `phone`, `balance`, `type`) VALUES
(1, 'tripto', '12345678', 'triptorahman@gmail.com', '01521302122', 0, 'admin'),
(3, 'tripto47', '123456789', 'tripto47@gmail.com', '01758037522', 100, 'buyer'),
(4, 'samiur', '123456789', 'samiur@gmail.com', '01521302122', 1600, 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `phototable`
--

CREATE TABLE `phototable` (
  `pid` int(100) NOT NULL,
  `photoName` varchar(100) NOT NULL,
  `photoType` varchar(100) NOT NULL,
  `photoDescription` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phototable`
--

INSERT INTO `phototable` (`pid`, `photoName`, `photoType`, `photoDescription`, `price`, `photo`, `uid`) VALUES
(9, 'sajek', 'hill', 'beautiful place', 100, '20190536243887sajek.jpg', 4),
(10, 'saintmartin', 'beach', 'very nice place', 100, '20192137524563saintmartin.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tempupload`
--

CREATE TABLE `tempupload` (
  `pid` int(100) NOT NULL,
  `photoName` varchar(100) NOT NULL,
  `photoType` varchar(100) NOT NULL,
  `photoDescription` varchar(200) NOT NULL,
  `askingPrice` int(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempupload`
--

INSERT INTO `tempupload` (`pid`, `photoName`, `photoType`, `photoDescription`, `askingPrice`, `photo`, `uid`) VALUES
(14, 'sajek1', 'hill', 'beautiful place', 1000, '20190930001336camera.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `transactionlist`
--

CREATE TABLE `transactionlist` (
  `tid` int(100) NOT NULL,
  `buyeremail` varchar(100) NOT NULL,
  `buyerid` int(100) NOT NULL,
  `sellerid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactionlist`
--

INSERT INTO `transactionlist` (`tid`, `buyeremail`, `buyerid`, `sellerid`, `amount`, `time`) VALUES
(6, 'tripto47@gmail.com', 3, 4, 100, '2019-04-30 04:57:53'),
(7, 'tripto47@gmail.com', 3, 4, 100, '2019-04-30 05:28:36'),
(8, 'tripto47@gmail.com', 3, 4, 100, '2019-04-30 05:58:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creditrequest`
--
ALTER TABLE `creditrequest`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `infotable`
--
ALTER TABLE `infotable`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tempupload`
--
ALTER TABLE `tempupload`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `transactionlist`
--
ALTER TABLE `transactionlist`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creditrequest`
--
ALTER TABLE `creditrequest`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infotable`
--
ALTER TABLE `infotable`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tempupload`
--
ALTER TABLE `tempupload`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactionlist`
--
ALTER TABLE `transactionlist`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
