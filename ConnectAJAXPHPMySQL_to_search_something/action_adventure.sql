-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 07:49 PM
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
-- Database: `movies_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_adventure`
--

CREATE TABLE `action_adventure` (
  `Movie_Poster` varchar(200) NOT NULL,
  `Movie_id` varchar(1000) DEFAULT NULL,
  `Title` varchar(1000) NOT NULL,
  `Ticket_id` varchar(1000),
  `Movie_Type` varchar(1000) NOT NULL,
  `PublicYear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action_adventure`
--

INSERT INTO `action_adventure` (`Movie_Poster`, `Movie_id`, `Title`, `Ticket_id`, `Movie_Type`, `PublicYear`) VALUES
('image/aquaman_img1.jpg', 'MOV-32565572', 'AQUAMAN', 'FTGHBN', 'Action&Adventure', 2018),
('image/transformer_img1.jpg', 'MOV-28965578', 'TRANSFORMER', 'TGHJKP', 'Action&Adventure', 2007),
('image/iron_man_img1.jpg', 'MOV-34925572', 'IRON MAN', 'IVSDRT', 'Action&Adventure', 2008),
('image/doctor_strange_img1.jpg', 'MOV-78918572', 'DOCTOR STRANGE', 'DVNGTQ', 'Action&Adventure', 2016);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_adventure`
--
ALTER TABLE `action_adventure`
  ADD UNIQUE KEY `MOV_UNIQUE` (`Title`,`Ticket_id`) USING HASH,
  ADD KEY `idx_title` (`Title`(768));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
