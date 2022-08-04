-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 07:31 PM
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
-- Table structure for table `tracking_users_watching`
--

CREATE TABLE `tracking_users_watching` (
  `Customer_Username` varchar(100) DEFAULT NULL,
  `Watching` varchar(100) DEFAULT NULL,
  `Paused` varchar(100) DEFAULT NULL,
  `Paused_At_Time` time DEFAULT NULL,
  `DateTimeWatching` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracking_users_watching`
--

INSERT INTO `tracking_users_watching` (`Customer_Username`, `Watching`, `Paused`, `Paused_At_Time`, `DateTimeWatching`) VALUES
('Hpcoder97', 'Deadpool 2', NULL, NULL, '2022-08-02 22:50:46'),
('Kevin758', 'Despicable Me 3', NULL, NULL, '2022-08-02 22:50:46'),
('Gravin369', 'Matrix Reloaded', NULL, NULL, '2022-08-02 22:50:46'),
('Wilson738', 'Doctor Strange', NULL, NULL, '2022-08-02 22:50:46'),
('Terry56323', 'Deadpool 2', NULL, NULL, '2022-08-02 22:50:46'),
('Susan8357', 'Despicable Me 3', NULL, NULL, '2022-08-02 22:50:46'),
('Lilly0368', 'Matrix Reloaded', NULL, NULL, '2022-08-02 22:50:46'),
('Leon1678', 'Despicable Me 3', NULL, NULL, '2022-08-02 22:50:46'),
('Mike5725', 'Jumanji', NULL, NULL, '2022-08-02 22:50:46'),
('Danny24656', 'Fast And Furious 9', NULL, NULL, '2022-08-02 22:50:46'),
('Henry454567', 'Jumanji', NULL, NULL, '2022-08-02 22:50:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
