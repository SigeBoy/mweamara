-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 02:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwea`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladministrator`
--

CREATE TABLE `tbladministrator` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladministrator`
--

INSERT INTO `tbladministrator` (`id`, `fname`, `mname`, `lname`, `gender`, `user`, `pass`, `phone`, `email`, `level`) VALUES
(1, 'Flavian', 'C.', 'Festus', 'Male', 'admin', '12345', '0785252431', 'cosmas.flavian@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `cost_center` varchar(100) DEFAULT NULL,
  `geo_center` varchar(100) DEFAULT NULL,
  `i_borrowe` varchar(100) DEFAULT NULL,
  `g_borrower` varchar(100) DEFAULT NULL,
  `pdf` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `email`, `fname`, `mname`, `lname`, `gender`, `age`, `contact`, `cost_center`, `geo_center`, `i_borrowe`, `g_borrower`, `pdf`) VALUES
(1, '', 'Sige', 'H.', 'Emmanuel', 'Male', '56', '0752809394', 'LCCB', 'Watoto', '', '', '1-lg2.png'),
(2, '', 'Dorah', 'M.', 'vitalis', 'Female', '23', '07528099098', 'MICRO-CREDIT', 'Watoto', '', '', '2-logi1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladministrator`
--
ALTER TABLE `tbladministrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladministrator`
--
ALTER TABLE `tbladministrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
