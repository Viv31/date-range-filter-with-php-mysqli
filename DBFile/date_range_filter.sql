-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 09:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `date_range_filter`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction_product`
--

CREATE TABLE `auction_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `auctions_date` date NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction_product`
--

INSERT INTO `auction_product` (`id`, `product_name`, `price`, `auctions_date`, `qty`) VALUES
(1, 'Motorola one power', 19000, '2020-12-01', 1),
(2, 'Motorola one ', 19500, '2020-12-01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_product`
--
ALTER TABLE `auction_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction_product`
--
ALTER TABLE `auction_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
