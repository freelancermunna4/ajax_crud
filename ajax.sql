-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 10:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `name`, `email`) VALUES
(2, 'aaadfddfsdff', 'aaa'),
(120, 'Munna Hasan4', 'admin@gmail.com4'),
(121, 'Munna Hasan', 'admin@gmail.com'),
(122, 'sdfsf', 'sdfsdf'),
(123, 'Munna Hasan', 'admin@gmail.com'),
(124, 'Munna Hasan', 'admin@gmail.com'),
(125, 'Munna Hasan', 'admin@gmail.com'),
(126, 'sdfsf', 'sdfsdf'),
(127, 'Munna Hasan', 'admin@gmail.com'),
(129, 'Munna Hasan', 'admin@gmail.com'),
(130, 'khan', 'sohan'),
(131, 'Munna Hasan', 'admin@gmail.com'),
(132, 'Munna Hasan', 'admin@gmail.com'),
(133, 'Munna Hasan', 'admin@gmail.com'),
(135, 'Munna Hasan', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
