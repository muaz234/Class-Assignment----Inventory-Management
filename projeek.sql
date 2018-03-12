-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2016 at 02:48 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeek`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `name` varchar(30) NOT NULL,
  `quantity` int(99) NOT NULL,
  `price` int(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `approved` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`name`, `quantity`, `price`, `type`, `status`, `approved`) VALUES
(' Emotiv EPOC headset', 2, 350, 'NP', 'borrow', 0),
('19-channels   Brainmarker   EE', 1, 8000, 'NP', 'borrow', 0),
('8-channels  BIMEC  EEG  machin', 1, 959, 'NP', 'return', 0),
('alcohol pads', 3, 10, 'P', 'borrow', 1),
('cotton buds', 100, 1, 'P', 'return', 0),
('digital camera  with  tripod', 1, 1000, 'NP', 'return', 0),
('GoPro camera', 2, 1000, 'NP', 'return', 0),
('iPad', 1, 1300, 'NP', 'return', 0),
('laptop', 2, 2500, 'NP', '123', 0),
('Nuprep', 100, 1, 'P', 'borrow', 0),
('plastic gloves', 100, 1, 'P', 'return', 0),
('rubber gloves', 100, 1, 'P', 'return', 0),
('saline solution', 100, 3, 'P', 'return', 0),
('Samsung tablet', 1, 1500, 'NP', 'borrow', 0);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`, `phone`, `address`) VALUES
(1, 'Bob', 'Baker', 6899898, 'selangor'),
(2, 'Tim', 'Thomas', 987987, 'johor'),
(3, 'Rachel', 'Roberts', 9897, 'kl'),
(4, 'Sam', 'Smith', 89768687, 'mioi');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `temp_name` varchar(30) NOT NULL,
  `temp_quantity` int(99) NOT NULL,
  `temp_price` int(255) NOT NULL,
  `temp_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`temp_name`, `temp_quantity`, `temp_price`, `temp_type`) VALUES
('nam', 1, 1, 'p');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(32) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `phone`, `address`, `role`) VALUES
(1, 'muaz', 'ahmed', '123', 60123323, 'kulim', 'admin'),
(2, 'izzat', 'aiman', '321', 6012321, 'kulim', 'assistant'),
(3, 'rasyadi', 'zaki', '732', 604288, 'kodiang', 'assistant'),
(4, 'loqman', 'kamal', '387', 6012855, 'kl', 'manager'),
(5, 'adik', 'wafi', '999', 6012333, 'sungai petani', 'assistant'),
(6, 'wan', 'faris', '888', 603211, 'machang', 'assistant'),
(7, 'saufi', 'jikan', '545', 601233, 'ayer tawar', 'assistant'),
(8, 'izwan', 'pilus', '333', 6016777, 'manggatal', 'assistant'),
(9, 'wak', 'jahar', '888', 6013222, 'kuantan', 'assistant'),
(10, 'ipang', 'naqibah', '532', 601388, 'ipoh', 'assistant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`temp_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
