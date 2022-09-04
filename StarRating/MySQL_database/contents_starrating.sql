-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thp_movie_streaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents_starrating`
--

CREATE TABLE `contents_starrating` (
  `Content_Title` varchar(1000) NOT NULL,
  `1star` int(11) NOT NULL,
  `2stars` int(11) NOT NULL,
  `3stars` int(11) NOT NULL,
  `4stars` int(11) NOT NULL,
  `5stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents_starrating`
--

INSERT INTO `contents_starrating` (`Content_Title`, `1star`, `2stars`, `3stars`, `4stars`, `5stars`) VALUES
('22 Jump Street', 327, 1234, 3652, 2701, 631),
('Aladin', 326, 1234, 3652, 2697, 7562),
('Aquaman', 330, 1239, 3653, 2699, 4231),
('Batman 2022', 326, 1234, 3652, 2697, 237),
('Captain America', 326, 1234, 3652, 2697, 1783),
('Deadpool 2', 326, 1234, 3652, 2697, 3201),
('Despicable Me 3', 327, 1234, 3652, 2697, 2364),
('Disaster Movie', 326, 1234, 3652, 2697, 1423),
('Doctor Strange', 326, 1234, 3652, 2697, 1778),
('Fast And Furious 9', 326, 1234, 3652, 2697, 2436),
('Iron Man', 327, 1234, 3652, 2697, 1542),
('Jumanji', 326, 1234, 3652, 2697, 1230),
('Luca', 326, 1234, 3652, 2697, 1420),
('Monster Inc', 326, 1234, 3653, 2699, 11268),
('Matrix Reloaded', 326, 1234, 3652, 2697, 20369),
('Onward', 326, 1234, 3652, 2697, 23425),
('Pirate Of The Caribbean', 326, 1234, 3652, 2697, 16428),
('Ride Along 2', 326, 1234, 3652, 2697, 142),
('Scary Movie', 326, 1234, 3652, 2697, 289),
('Spider Man', 330, 1238, 3652, 2697, 12658),
('Sonic 2', 326, 1234, 3652, 2697, 316),
('The Hot Chick', 326, 1234, 3652, 2697, 3426),
('Transformers', 26, 34, 5652, 6697, 9123),
('Turning Red', 226, 3234, 4652, 5697, 8237),
('Toy Story', 326, 1234, 3652, 2697, 5631),
('Wonder Woman', 326, 1234, 3652, 2697, 631),
('Wreck It Ralph', 326, 1234, 3652, 2697, 15631),
('X-Men', 326, 1234, 3652, 2697, 15631);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
