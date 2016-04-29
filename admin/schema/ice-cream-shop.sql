-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 07:54 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ice-cream-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `type`) VALUES
(1, 'ice cream cone', 'Main Item'),
(2, 'milkshake', 'Main Item'),
(3, 'float', 'Main Item'),
(7, 'banana', 'Flavor'),
(8, 'orange', 'Flavor'),
(9, 'straw berry', 'Flavor'),
(10, 'Grape', 'Flavor'),
(11, 'pine-apple', 'Flavor'),
(12, 'waffle cone', 'Serving vessels'),
(13, 'cup', 'Serving vessels'),
(14, 'Sprite', 'Soda'),
(15, 'cola', 'Soda'),
(16, 'mountain dew', 'Soda');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
`id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `vessels` varchar(100) NOT NULL,
  `flavors` varchar(100) NOT NULL,
  `soda` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `type`, `discount`, `vessels`, `flavors`, `soda`) VALUES
(1, 'milkshake', 'yes', 'cup', 'orange', 'sprite'),
(2, 'float', 'yes', 'waffle cone', 'banana', 'Sprite'),
(3, 'ice cream cone', 'No', 'waffle cone', 'banana', 'Sprite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
