-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2014 at 10:16 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `age`, `gender`, `email`, `birthday`, `username`, `password`) VALUES
(4, 'kazi', 'latif', 26, 'male', 'fahad.kuet@gmail.com', '2004-02-04', 'fahad', 'qqqqqqqqqqqq'),
(2, 'nazm', 'gazi', 13, 'male', 'gazi.k@gmai.com', '2003-03-01', 'nazim_gazi', 'asdfasdf'),
(2, 'sf', 'rtrt', 12, 'male', 'aazi.k@gmai.com', '2003-03-01', 'nazim_the', 'sdfsd'),
(2, 'roton', 'koli', 13, 'male', 'dfd.ee@yahoo.com', '2006-07-06', 'toni', 'sdfsdf'),
(2, 'fdgsdf', 'dfg', 8, 'female', 'asd.asd@sdf.c', '2015-01-01', 'vvv', 'qqq'),
(2, 'fdgsdf', 'dfg', 8, 'female', 'asd.asd@sdf.c', '2015-01-01', 'vvvt', 'ff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
