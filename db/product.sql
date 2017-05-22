-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2017 at 06:05 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.6.30-7+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `product`
--
CREATE DATABASE IF NOT EXISTS `product` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `product`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `banner_image`, `status`, `create_time`, `update_time`) VALUES
(1, 'asd', 'images/banner/ohGq6t2pZ7.jpg', 'Active', '2017-05-18 17:42:24', '2017-05-22 13:22:26'),
(2, 'banner', 'images/banner/vVL1pfAcSJ.jpg', 'Inactive', '2017-05-18 17:59:52', '2017-05-22 13:22:48'),
(3, 'test', 'images/banner/x78sIAmRe_.jpg', 'Active', '2017-05-18 18:12:39', '2017-05-22 14:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_image` varchar(225) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `slug`, `description`, `category_image`, `status`, `create_time`, `update_time`) VALUES
(7, 'Sofa', 'sofa', ' <div class="holder"><h2>MY SMALL WRITING <br>DESK</h2></div>\r\n', 'images/category/62cgse5B6x.jpg', 'Active', '2017-05-22 14:41:01', '2017-05-22 14:43:10'),
(8, 'Wooden Chair', 'wooden-chair', '<p>chair</p>\r\n', 'images/category/BglWLdCz7O.jpg', 'Active', '2017-05-22 15:54:37', '2017-05-22 15:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1492673106),
('m130524_201442_init', 1492673115),
('m140506_102106_rbac_init', 1493113225),
('m170425_050824_create_news_table', 1493097324),
('m170425_052257_add_position_column_to_news_table', 1493098090),
('m170425_053109_add_social_media_column_to_news_table', 1493098336);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_slug` varchar(255) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_image` varchar(225) NOT NULL,
  `product_details` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL,
  `product_discount` decimal(10,2) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `author_id` int(11) NOT NULL,
  `updater_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_slug`, `product_name`, `product_image`, `product_details`, `category_id`, `product_price`, `product_quantity`, `status`, `product_discount`, `create_time`, `update_time`, `author_id`, `updater_id`) VALUES
(1, 'upholstered-chair', 'Upholstered chair', 'images/product/RiDeqkp-ox.jpg', 'chair', 8, '399.00', 100, 'Active', '0.00', '2017-05-22 15:56:02', '2017-05-22 15:56:02', 1, 1),
(2, 'easy-chair-with-armrests', 'Easy chair with armrests', 'images/product/mimJ-psrAU.jpg', 'chair', 8, '400.00', 100, 'Active', '0.00', '2017-05-22 15:57:04', '2017-05-22 15:57:04', 1, 1),
(3, 'bombi-chair', 'Bombi Chair', 'images/product/xKtxH1T-Ru.jpg', 'test', 8, '400.12', 1000, 'Active', '0.00', '2017-05-22 15:57:59', '2017-05-22 15:57:59', 1, 1),
(4, 'wood-chair', 'wood chair', 'images/product/wH7X76Zbtf.jpg', 'test', 8, '550.15', 200, 'Active', '0.00', '2017-05-22 15:59:25', '2017-05-22 15:59:25', 1, 1),
(5, 'bombi-chair-2', 'Bombi Chair', 'images/product/M4secqhkv2.jpg', 'chair', 8, '1200.00', 200, 'Active', '20.00', '2017-05-22 16:00:19', '2017-05-22 16:00:19', 1, 1),
(6, 'trestle-based-chair', 'Trestle-based chair', 'images/product/cKYG6zXI93.jpg', 'test', 8, '800.00', 1000, 'Active', '0.00', '2017-05-22 16:01:23', '2017-05-22 16:01:23', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

DROP TABLE IF EXISTS `product_options`;
CREATE TABLE IF NOT EXISTS `product_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_type` enum('Text','Check Box','Dropdown','Radio Button','Textarea') NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `author_id` int(11) NOT NULL,
  `updater_id` int(11) NOT NULL,
  PRIMARY KEY (`option_id`),
  KEY `category` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_option_trans`
--

DROP TABLE IF EXISTS `product_option_trans`;
CREATE TABLE IF NOT EXISTS `product_option_trans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_option_id` int(11) NOT NULL,
  `option_value` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL DEFAULT 'Active',
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `activation_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `auth_key`, `activation_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '', '', 'rahul', 'lVRx3rAel9QszhYBlcpOXJCBXVrEG3KJ', '', '$2y$13$2pRqKk6E8GBrnP0sSjmfRuFdio9aANJ/bFl4IS9a6z2JFlBkfmW46', NULL, 'singh@gmail.com', 10, 1492676437, 1494834563),
(2, '', '', 'singh', 'yjf9WWf8EGROpf3nr7uVq5EPrUIUlFbU', '', '$2y$13$lcBjYtUxlEIEbPDSY9SO1utEa4xq41Wo81I08vHRT2baormKoYhsa', 'EUyi6pxcprpPmK_Kee8zzq7O_xgyjAZ8_1494593527', 'rahul@gmail.com', 10, 1492676625, 1494840156);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_options`
--
ALTER TABLE `product_options`
  ADD CONSTRAINT `product_options_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
