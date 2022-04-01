-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2022 at 12:28 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `productid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productid`, `email`) VALUES
(1, 'sauravkj2000@gmail.com'),
(1, 'sauravkj2000@gmail.com'),
(1, 'sauravkj2000@gmail.com'),
(1, 'sauravkj2000@gmail.com'),
(1, 'sauravkj2000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `datetime` datetime NOT NULL,
  `productid` int(16) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `price` int(250) NOT NULL,
  PRIMARY KEY (`datetime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `brandname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `featured` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `brandname`, `description`, `image`, `featured`) VALUES
(2, 'Rog Phone 5', '48000', 'Asus', 'Display: 6.78 inches AMOLED | OS :Android 11, ROG UI  | Chipset :Qualcomm SM8350 Snapdragon 888 5G (5 nm) | Memory:128GB 8GB RAM', 'https://dlcdnwebimgs.asus.com/gain/56BB3442-7143-494F-9EC9-037290A3CBBF', 1),
(3, 'Google Pixel 5', '68000', 'Google', 'Display: 6.0 inches OLED | OS :Android 11  | Chipset :Qualcomm SM7250 Snapdragon 765G 5G (7 nm) | Memory:128GB 8GB RAM', 'https://m.media-amazon.com/images/S/aplus-media/sota/b68ae137-3334-41db-ba91-c4be9d8e807b.__CR84,476,1685,1685_PT0_SX300_V1___.jpg', 1),
(4, 'IQOO 9 Pro', '46000', 'Vivo', 'Display :6.78 inches AMOLED |OS :Android 12, Funtouch 12 (International), Origin OS Ocean (China) | Chipset :Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm) |Memory :256 GB 8 GB', 'https://images.fonearena.com/blog/wp-content/uploads/2022/02/iQOO-9.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`email`, `name`, `number`, `password`) VALUES
('k2000@gmail.com', 'Kiran', '9445676843', '5678'),
('sauravkj2000@gmail.com', 'Saurav KJ', '9446945723', '12346'),
('k45@gmail.com', 'Kiran U', '94445678967', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
