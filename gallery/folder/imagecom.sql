-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 11:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiman_motiv`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagecom`
--

CREATE TABLE `imagecom` (
  `idImage` int(30) NOT NULL,
  `titleImage` longtext NOT NULL,
  `imgFullNameImage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagecom`
--

INSERT INTO `imagecom` (`idImage`, `titleImage`, `imgFullNameImage`) VALUES
(2, 'LIVE YOUR DREAMs', 'baus_7.jpg'),
(3, 'DO YOUR BEST', 'best.61eae8be5fc603.48111354.jpg'),
(4, 'BE POSITIVE', 'positive.61eae8e3e38cc6.74185266.jpg'),
(5, 'JUST FOCUS ON YOU', 'focus.61eae92583b015.99995026.jpg'),
(6, 'WORK HARD', 'work.61eae93ac7bc00.79103113.jpg'),
(7, 'HELPING HUMANITY', 'humanity.61eae9560de4d5.36879293.jpg'),
(8, 'EFFORTS CAN DO ANY THING', 'effort.61eae976d65182.82836574.jpg'),
(9, 'NEVER GIVE UP', 'give.61eae992c49578.50571841.jpg'),
(10, 'MISTAKE MAKES US BETTER', 'better.61eae9ab0dc527.39061127.jpg'),
(11, 'DONT JUDGE OTHERS', 'judge.61eae9c48a20d5.02936100.jpg'),
(12, 'the best is efforts', 'busa_5.png'),
(13, 'the life is short', 'busa_9.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagecom`
--
ALTER TABLE `imagecom`
  ADD PRIMARY KEY (`idImage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagecom`
--
ALTER TABLE `imagecom`
  MODIFY `idImage` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
