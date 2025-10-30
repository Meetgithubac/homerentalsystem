-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 07:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner_page`
--

CREATE TABLE `owner_page` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `society_name` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `sq_ft` int(11) NOT NULL,
  `bhk` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `property_images` varchar(255) NOT NULL,
  `property_images1` varchar(255) NOT NULL,
  `property_images2` varchar(255) NOT NULL,
  `property_images3` varchar(255) NOT NULL,
  `property_images4` varchar(255) NOT NULL,
  `property_images5` varchar(255) NOT NULL,
  `gas_bill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_page`
--

INSERT INTO `owner_page` (`id`, `email`, `owner_name`, `society_name`, `caste`, `address`, `price`, `sq_ft`, `bhk`, `city`, `property_images`, `property_images1`, `property_images2`, `property_images3`, `property_images4`, `property_images5`, `gas_bill`) VALUES
(8, 'hello1@gmail.com', 'hello2', 'vidyavihar222', 'we124e2', 'this is Rcti VGCE', 320000, 3200, '3 BHK', 'Bapunagar', 'UploadImage/2.jpg', 'UploadImage/3.jpg', 'UploadImage/4.jpg', 'UploadImage/9.jpg', 'UploadImage/8.jpg', 'UploadImage/7.jpg', 'UploadImage/Gasbill/1.jpg'),
(9, 'jay@gmail.com', 'hello1313', 'vidyavihar131313', 'hindu', 'this is jay house ', 12000, 1200, '2 BHK ', 'Sola ', 'UploadImage/1.jpg', 'UploadImage/3.jpg', 'UploadImage/5.jpg', 'UploadImage/7.jpg', 'UploadImage/9.jpg', 'UploadImage/2.jpg', 'UploadImageGasbill/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `whatno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `username`, `email`, `password`, `cpassword`, `whatno`) VALUES
(0, 'hello1', 'hello1@gmail.com', '$2y$10$HaGulBrETjhL5s3BEaX1eebh18cPRvFFxO.HVD2nnH.DyE3ApL9p2', '', 1234567890),
(0, 'jay', 'jay@gmail.com', '$2y$10$MYDpVcHzx1DfGHquME5.Gu1lqZDgKecMwe6SZXxXqQgAMZc99th1S', '', 1234321890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner_page`
--
ALTER TABLE `owner_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `owner_name` (`owner_name`),
  ADD UNIQUE KEY `owner_name_2` (`owner_name`,`address`,`property_images`,`gas_bill`),
  ADD KEY `email_fk` (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_page`
--
ALTER TABLE `owner_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
