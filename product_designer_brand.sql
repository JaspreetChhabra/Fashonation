-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 09:26 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashonat_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_designer_brand`
--

CREATE TABLE `product_designer_brand` (
  `brand_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `totalproducts` int(11) NOT NULL,
  `brandname` varchar(32) NOT NULL,
  `brandimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_designer_brand`
--

INSERT INTO `product_designer_brand` (`brand_id`, `type`, `totalproducts`, `brandname`, `brandimg`) VALUES
(1, 'brand', 24, 'Oxford Club', '/designer/manish.jpg'),
(2, 'designer', 50, 'Manish Malhotra', '/designer/manish.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_designer_brand`
--
ALTER TABLE `product_designer_brand`
  ADD PRIMARY KEY (`brand_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
