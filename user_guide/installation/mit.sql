-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.2.0.4675
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

-- Data exporting was unselected.


-- Dumping structure for procedure couponslist.Login
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `Login`(IN `email` VARCHAR(250), IN `pwd` VARCHAR(250))
BEGIN
	SELECT * FROM users WHERE user_email = email AND user_pwd = pwd;
END//
DELIMITER ;


-- Dumping structure for table couponslist.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_key` varchar(50) NOT NULL,
  `product_model` varchar(50) NOT NULL,
  `product_title` varchar(250) NOT NULL,
  `product_img` text NOT NULL,
  `product_mrp` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_url` varchar(250) NOT NULL,
  `product_category` varchar(250) NOT NULL,
  `product_deliver` varchar(250) NOT NULL,
  `product_availability` varchar(50) NOT NULL,
  `product_instock` enum('Y','N') NOT NULL DEFAULT 'Y',
  `product_cod_available` enum('Y','N') NOT NULL DEFAULT 'Y',
  `product_email` varchar(50) NOT NULL,
  `product_offers` varchar(50) NOT NULL,
  `product_discount` varchar(50) NOT NULL,
  `product_cashback` varchar(50) NOT NULL,
  `product_created_on` datetime NOT NULL,
  `product_is_active` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table couponslist.providers
CREATE TABLE IF NOT EXISTS `providers` (
  `provider_id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(250) NOT NULL,
  `provider_code` varchar(250) NOT NULL,
  `provider_is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `provider_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`provider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table couponslist.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(250) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(250) NOT NULL,
  `user_is_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
