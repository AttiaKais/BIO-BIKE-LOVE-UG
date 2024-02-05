-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2024 at 07:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2b_mesh_bio_bike_love`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `cpname` varchar(50) DEFAULT NULL,
  `cpadress` varchar(150) DEFAULT NULL,
  `cpzipcode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cpcity` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `vatnumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`mail`, `password`, `name`, `lastname`, `number`, `cpname`, `cpadress`, `cpzipcode`, `cpcity`, `vatnumber`) VALUES
('amin@biobikelove:de', '1234', 'Amin', 'Attia', '1234567890', 'BBL', 'Here', '28207', 'Bremen', 'DE1234567'),
('aminattia@gmail.com', 'BIOBIKE', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', '3454345'),
('attiakais1@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', '0982883'),
('attiakais3@gmail.com', 'PASSWORD', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', '0982883'),
('attiakais3333@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', '0982883'),
('attiakais343@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', '0982883'),
('attiakais3434@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', '0982883'),
('attiakais3à@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', 'zzzz'),
('attiakais3b@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', 'zzzz'),
('attiakais3u@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', 'zzzz'),
('attiakais3uy@gmail.com', 'Password', 'Kais', 'Attia', '+33783456752', 'Mesh', '17 rue Paul verlaine', '93130', 'noisy le sec', 'zzzz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
