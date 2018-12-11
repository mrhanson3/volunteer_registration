-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2018 at 10:47 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tennis_registration123`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `function` varchar(255) NOT NULL,
  `time` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `people` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `function`, `time`, `date`, `people`, `location`) VALUES
(1, 'Feeding the homeless.', '6pm', '2019-01-27', 212, 'Yeagansss'),
(2, 'Building houses.', '7:30pm', '2019-01-05', 34, 'Habitatss'),
(3, 'Canned food drive.', '10am', '2018-12-10', 20, 'Swansons');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `username`, `email`, `password`) VALUES
(1, 'Clayton', 'sss', 'sss', 'ssss@example.com', 'alaska'),
(2, 'hello', 'hi', 'hola', 'hi@example.com', '5ababd603b22780302dd8d83498e5172'),
(3, 'Chicken', 'LeStrange', 'strangechicken', 'strange@example.com', '088f2ea83bd971b8bb177cb5820700f8'),
(4, 'Clayton', 'Hanson1', 'cahanson1', 'cahanson12@example.com', '1a79a4d60de6718e8e5b326e338ae533'),
(5, 'Em', 'Gem', 'GemToTheEm1', 'em@example.com', '1a79a4d60de6718e8e5b326e338ae533'),
(6, 'White', 'Black', 'grey', 'grey@example.com', '1a79a4d60de6718e8e5b326e338ae533'),
(7, 'Cam', 'Newton', 'Newt', 'cacam@example.com', '1a79a4d60de6718e8e5b326e338ae533'),
(8, 'ed', 'ed', 'eded', 'ed@example.com', '1a79a4d60de6718e8e5b326e338ae533'),
(9, 'John', 'Jon', 'Juan', 'johnnyjuanny@example.com', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
