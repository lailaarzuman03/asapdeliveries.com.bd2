-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 01:46 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asapdeliveries`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `recepient_number` int(11) NOT NULL,
  `recepient_name` int(11) NOT NULL,
  `recepient_address` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `recepient_area` int(11) NOT NULL,
  `recepient_landmark` int(11) NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `parcel_type` int(11) NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `delivery_time` int(11) NOT NULL,
  `no_of_item` int(11) NOT NULL,
  `item_type` text NOT NULL,
  `instructions` longtext NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL,
  `city_code` varchar(100) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `city_code`, `upload_date`) VALUES
(1, 'Dhaka', 'Dha', '2018-03-06'),
(2, 'Barishal', 'Bar', '2018-03-06'),
(3, 'Rajshahi', 'Raj', '2018-03-06'),
(4, 'Khulna', 'Khu', '2018-03-06'),
(5, 'Rangpur', 'Ran', '2018-03-06'),
(6, 'Mymensing', 'Mym', '2018-03-06'),
(7, 'Chittagong', 'Chi', '2018-03-06'),
(8, 'Sylhet', 'Syl', '2018-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `promo_code`
--

CREATE TABLE `promo_code` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `cod` int(11) DEFAULT NULL,
  `end_date` varchar(255) NOT NULL,
  `standard1` float DEFAULT NULL,
  `standard2` float DEFAULT NULL,
  `standard3` float DEFAULT NULL,
  `standard4` float DEFAULT NULL,
  `speedy1` float DEFAULT NULL,
  `speedy2` float DEFAULT NULL,
  `speedy3` float DEFAULT NULL,
  `speedy4` float DEFAULT NULL,
  `asap1` float DEFAULT NULL,
  `asap2` float DEFAULT NULL,
  `asap3` float DEFAULT NULL,
  `asap4` float DEFAULT NULL,
  `nationwide1` float DEFAULT NULL,
  `nationwide2` float DEFAULT NULL,
  `nationwide3` float DEFAULT NULL,
  `nationwide4` float DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_code`
--

INSERT INTO `promo_code` (`id`, `merchant_id`, `cod`, `end_date`, `standard1`, `standard2`, `standard3`, `standard4`, `speedy1`, `speedy2`, `speedy3`, `speedy4`, `asap1`, `asap2`, `asap3`, `asap4`, `nationwide1`, `nationwide2`, `nationwide3`, `nationwide4`, `user_id`, `status`, `upload_date`) VALUES
(1, 3, NULL, '03/07/2018', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-03-07'),
(2, 1, 1, '03/17/2018', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-03-08'),
(3, 2, 1, '03/07/2018', 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-03-08'),
(4, 1, NULL, '03/10/2018', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

CREATE TABLE `registerform` (
  `id` int(11) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `city_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `client_user_name` varchar(100) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `payment_details` text NOT NULL,
  `register_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`id`, `business_name`, `full_name`, `mobile`, `email`, `city_id`, `address`, `facebook_url`, `client_user_name`, `cpassword`, `payment_method`, `payment_details`, `register_date`, `status`) VALUES
(1, 'Ecommerce', 'M.laila arzuman Banu', '01774273726,01533136014', 'lailaarzuman03@gmail.com', 1, 'House #1495, Road #18, Avenue #2 , Mirpur DOHS , Dhaka-1216', '0', 'laila.arzuman4', 'laila@123', 2, 'test', '2018-03-01', 0),
(2, 'test', 'Dola', '01774273726,01533136014', 'lailaarzuman03@gmail.com', 10, 'test', '0', 'laila.arzuman41', 'sfdsf', 1, '0', '2018-03-01', 0),
(3, 'sdfsdf', 'Obhi', '01774273726,01533136014', 'lailaraj10@gmail.com', 8, 'sdfsdf', '0', 'laila.arzuman42', 'sdfsf', 2, '0', '2018-03-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_counter`
--

CREATE TABLE `visitor_counter` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(150) NOT NULL,
  `date` varchar(150) NOT NULL,
  `visitor` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_counter`
--

INSERT INTO `visitor_counter` (`id`, `ip_address`, `date`, `visitor`) VALUES
(1, '::1', '2018-03-07', NULL),
(2, '::1', '2018-03-08', NULL),
(3, '::1', '2018-03-10', NULL),
(4, '::1', '2018-03-11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_code`
--
ALTER TABLE `promo_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerform`
--
ALTER TABLE `registerform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_user_name` (`client_user_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promo_code`
--
ALTER TABLE `promo_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registerform`
--
ALTER TABLE `registerform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
