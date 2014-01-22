-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for couponslist
CREATE DATABASE IF NOT EXISTS `couponslist` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `couponslist`;


-- Dumping structure for table couponslist.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(250) NOT NULL,
  `brand_created_on` datetime NOT NULL,
  `brand_is_active` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table couponslist.brand: ~0 rows (approximately)
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;


-- Dumping structure for procedure couponslist.Login
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `Login`(IN `email` VARCHAR(250), IN `pwd` VARCHAR(250))
BEGIN
	SELECT * FROM users WHERE user_email = email AND user_pwd = pwd;
END//
DELIMITER ;


-- Dumping structure for table couponslist.main_category
CREATE TABLE IF NOT EXISTS `main_category` (
  `main_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) NOT NULL,
  `category_is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `category_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`main_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table couponslist.main_category: ~25 rows (approximately)
/*!40000 ALTER TABLE `main_category` DISABLE KEYS */;
INSERT IGNORE INTO `main_category` (`main_category_id`, `category_name`, `category_is_active`, `category_created_on`) VALUES
	(1, 'Baby Care', 'Y', '2014-01-23 00:34:27'),
	(2, 'Bags, Wallets &amp; Belts', 'Y', '2014-01-23 00:34:31'),
	(3, 'Beauty and Personal Care', 'Y', '2014-01-23 00:34:37'),
	(4, 'Camera Accessories', 'Y', '2014-01-23 00:34:40'),
	(5, 'Computer Components', 'Y', '2014-01-23 00:34:44'),
	(6, 'Computer Peripherals', 'Y', '2014-01-23 00:34:47'),
	(7, 'Desktops', 'Y', '2014-01-23 00:34:51'),
	(8, 'Home Appliance', 'Y', '2014-01-23 00:34:53'),
	(9, 'Home Furnishing', 'Y', '2014-01-23 00:34:58'),
	(10, 'Kid\'s Clothing', 'Y', '2014-01-23 00:35:02'),
	(11, 'Kid\'s Footwear', 'Y', '2014-01-23 00:36:33'),
	(12, 'Kitchen Appliance', 'Y', '2014-01-23 00:36:37'),
	(13, 'Laptops', 'Y', '2014-01-23 00:36:40'),
	(14, 'Men\'s Clothing', 'Y', '2014-01-23 00:36:44'),
	(15, 'Men\'s Footwear', 'Y', '2014-01-23 00:36:47'),
	(16, 'Mobiles', 'Y', '2014-01-23 00:36:50'),
	(17, 'Office Supplies', 'Y', '2014-01-23 00:36:55'),
	(18, 'Pens', 'Y', '2014-01-23 00:36:58'),
	(19, 'School Supplies', 'Y', '2014-01-23 00:37:02'),
	(20, 'Software', 'Y', '2014-01-23 00:37:07'),
	(21, 'Sports and Fitness', 'Y', '2014-01-23 00:37:10'),
	(22, 'Tablets', 'Y', '2014-01-23 00:37:14'),
	(23, 'Toys', 'Y', '2014-01-23 00:37:20'),
	(24, 'Women\'s Clothing', 'Y', '2014-01-23 00:37:23'),
	(25, 'Women\'s Footwear', 'Y', '2014-01-23 00:37:25');
/*!40000 ALTER TABLE `main_category` ENABLE KEYS */;


-- Dumping structure for table couponslist.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_key` varchar(50) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `product_image100` varchar(50) DEFAULT NULL,
  `product_image125` varchar(250) DEFAULT NULL,
  `product_image200` varchar(250) DEFAULT NULL,
  `product_image275` varchar(250) DEFAULT NULL,
  `product_image400` varchar(250) DEFAULT NULL,
  `product_image40` varchar(250) DEFAULT NULL,
  `product_imageoriginal` varchar(250) DEFAULT NULL,
  `product_mrp` int(11) DEFAULT NULL,
  `product_image75` varchar(250) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_url` varchar(250) DEFAULT NULL,
  `product_deliverytime` varchar(250) DEFAULT NULL,
  `product_codavailable` enum('Y','N') NOT NULL DEFAULT 'Y',
  `product_instock` enum('Y','N') NOT NULL DEFAULT 'Y',
  `product_emiavailable` varchar(50) DEFAULT NULL,
  `product_offers` varchar(50) DEFAULT NULL,
  `product_cashback` varchar(50) DEFAULT NULL,
  `product_discount` varchar(50) DEFAULT NULL,
  `product_created_on` datetime DEFAULT NULL,
  `product_modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table couponslist.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Dumping structure for table couponslist.providers
CREATE TABLE IF NOT EXISTS `providers` (
  `provider_id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(250) NOT NULL,
  `provider_code` varchar(250) NOT NULL,
  `provider_is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `provider_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`provider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table couponslist.providers: ~2 rows (approximately)
/*!40000 ALTER TABLE `providers` DISABLE KEYS */;
INSERT IGNORE INTO `providers` (`provider_id`, `provider_name`, `provider_code`, `provider_is_active`, `provider_created_on`) VALUES
	(1, 'Flipkart', 'FK', 'Y', '2014-01-23 00:27:12'),
	(2, 'Snapdeal', 'SD', 'Y', '2014-01-23 00:27:20');
/*!40000 ALTER TABLE `providers` ENABLE KEYS */;


-- Dumping structure for table couponslist.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(250) NOT NULL,
  `user_is_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table couponslist.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`user_id`, `user_email`, `user_name`, `user_pwd`, `user_is_active`) VALUES
	(1, 'msjvmv@gmail.com', 'vijays', '1bfa8871c06cd13dd3a6c593fe9fe798', '2014-01-22 23:39:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
