-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 08:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsce`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `department` varchar(100) NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `event` varchar(100) NOT NULL,
  `list` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`department`, `tittle`, `date`, `event`, `list`) VALUES
('CSE', 'drupal', '2017-05-15', 'workshop', 'workshop on drupal.pdf'),
('CSE', 'sociotech innovation lab', '2017-04-21', 'hackathons', 'socio tech inovation lab.pdf'),
('CSE', 'sociotech hackathon', '2017-06-01', 'hackathons', 'hackathon.pdf'),
('CSE', 'bugle vol1 issu 2', '2014-09-01', 'newsletter', 'bugle vol1 issu 1.pdf'),
('CSE', 'bugle vol3 issu 2', '2016-08-01', 'newsletter', 'bugle vol 3 issu 2.pdf'),
('CSE', 'bugle vol3 issu 1', '2016-03-01', 'newsletter', 'bugle vol 3 issu 1.pdf'),
('CSE', 'bugle vol1 issu 4', '2014-12-01', 'newsletter', 'bugle vol 1 issu 4.pdf'),
('CSE', 'bugle vol1 issu 1', '2014-10-01', 'newsletter', 'bugle vol 1 issu 2.pdf'),
('CSE', 'bugle vol4 issu 2', '2017-08-01', 'newsletter', 'bigle vol 4 issu 2.pdf'),
('CSE', 'bot labs', '2019-04-09', 'mini_project', 'bot.pdf'),
('ISE', 'HACKATHON-2019', '2019-04-17', 'hackathons', 'Research paper 3.pdf'),
('ECE', 'big data', '2019-04-15', 'workshop', 'IRJET-V3I10169.pdf'),
('CSE', 'jjjjj', '2019-04-21', 'others', '490h_nutch.pdf'),
('CSE', 'research', '2019-04-23', 'workshop', 'How to write research paper.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `username` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`username`, `department`, `date`, `status`) VALUES
('HOD_CSE', 'CSE', '23-04-2019 02:27:39pm', 'successful'),
('HOD_CSE', 'CSE', '23-04-2019 02:28:09pm', 'successful'),
('harish', 'CSE', '23-04-2019 02:28:38pm', 'successful'),
('HOD_CSE', 'CSE', '23-04-2019 02:37:02pm', 'successful'),
('HOD_CSE', 'CSE', '23-04-2019 02:37:44pm', 'successful'),
('harish', 'CSE', '23-04-2019 02:37:58pm', 'successful'),
('harish', 'CSE', '23-04-2019 02:39:16pm', 'successful'),
('HOD_CSE', 'CSE', '23-04-2019 02:39:35pm', 'successful'),
('hod', 'ECE', '24-04-2019 03:09:02pm', 'successful'),
('admin', '', '24-04-2019 04:45:51pm', 'Invalid Details'),
('deepak', 'CSE', '26-04-2019 11:28:45am', 'successful'),
('CSE_HOD', '', '26-04-2019 11:30:10am', 'Invalid Details'),
('HOD_CSE', 'CSE', '26-04-2019 11:30:41am', 'successful'),
('HOD_CSE', 'CSE', '26-04-2019 11:31:55am', 'successful'),
('HOD_CSE', 'CSE', '26-04-2019 11:32:31am', 'successful'),
('deepak', 'CSE', '26-04-2019 11:33:25am', 'successful');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `priority` int(10) NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `priority`, `department`) VALUES
('admin', 'admin@123', 1, 'DSCE'),
('deepak', 'deepak', 3, 'CSE'),
('harish', 'harish', 3, 'CSE'),
('hod', 'hod123', 2, 'ECE'),
('HOD_CSE', 'hodcse', 2, 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
