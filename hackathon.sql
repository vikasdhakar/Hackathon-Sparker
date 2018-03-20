-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 03:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erento`
--

-- --------------------------------------------------------

--
-- Table structure for table `hckreg`
--

CREATE TABLE `hckreg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `num` varchar(10) DEFAULT NULL,
  `addr` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hckreg`
--

INSERT INTO `hckreg` (`id`, `name`, `email`, `pass`, `num`, `addr`, `city`) VALUES
(1, 'Guru', 'guru@mail.com', 'virk0011', '7792902639', 'ward no 11', 'assandh'),
(2, 'Gurpinder', 'gurpindersingh0009@gmail.com', 'guru0011', '9664042275', 'ward no 15', 'Karnal'),
(5, 'Vikas', 'vikas@mail.com', 'vikas1234', '9587999790', 'Near bus stand', 'Chittaurgarh'),
(3, 'Guru', 'guru@gmail.com', 'guru0011', '7792902639', 'ward no 11 assandh', 'Assandh');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `add` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `fea` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `img1`, `img2`, `loc`, `add`, `rent`, `fea`, `type`, `total`) VALUES
(1, 'Virk', 'h11.jpg', 'h12.jpg', 'jaipur', 'JNL Road Jaipur', '1500', 'Locality is very environment friendly', 'nac', 20),
(2, 'Guru', 'h21.jpg', 'h22.jpg', 'jaipur', 'JNL Road Jaipur', '2000', 'Locality is very environment friendly', 'nac', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hroom`
--

CREATE TABLE `hroom` (
  `id` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `bid` int(11) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `nod` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hroom`
--

INSERT INTO `hroom` (`id`, `hid`, `rno`, `status`, `bid`, `bdate`, `nod`) VALUES
(1, 1, 1, 0, NULL, NULL, NULL),
(2, 1, 2, 0, NULL, NULL, NULL),
(3, 1, 3, 0, NULL, NULL, NULL),
(4, 1, 4, 0, NULL, NULL, NULL),
(5, 1, 5, 0, NULL, NULL, NULL),
(6, 1, 6, 0, NULL, NULL, NULL),
(7, 1, 7, 0, NULL, NULL, NULL),
(8, 1, 8, 0, NULL, NULL, NULL),
(9, 1, 9, 0, NULL, NULL, NULL),
(10, 1, 10, 0, NULL, NULL, NULL),
(11, 2, 1, 0, NULL, NULL, NULL),
(12, 2, 2, 0, NULL, NULL, NULL),
(13, 2, 3, 0, NULL, NULL, NULL),
(14, 2, 4, 0, NULL, NULL, NULL),
(15, 2, 5, 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hckreg`
--
ALTER TABLE `hckreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hroom`
--
ALTER TABLE `hroom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hckreg`
--
ALTER TABLE `hckreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hroom`
--
ALTER TABLE `hroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
