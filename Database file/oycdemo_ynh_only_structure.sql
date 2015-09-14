-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2015 at 09:45 AM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.31

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oycdemo_ynh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(25) NOT NULL,
  `interest` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `restaurant` varchar(200) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `about` text,
  `b_hour` varchar(200) DEFAULT NULL,
  `admin_type` int(5) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE IF NOT EXISTS `banner_image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner_video`
--

CREATE TABLE IF NOT EXISTS `banner_video` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE IF NOT EXISTS `bookmark` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `b_url` varchar(255) NOT NULL,
  `property_id` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boost`
--

CREATE TABLE IF NOT EXISTS `boost` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `days` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `building_amenities`
--

CREATE TABLE IF NOT EXISTS `building_amenities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `edit_by` int(10) NOT NULL,
  `details` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE IF NOT EXISTS `buses` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `buses` varchar(50) NOT NULL,
  `edit_by` int(10) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `state_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `from_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `explore`
--

CREATE TABLE IF NOT EXISTS `explore` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heading` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `include_listing`
--

CREATE TABLE IF NOT EXISTS `include_listing` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `edit_by` int(10) NOT NULL,
  `details` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listing_amenities`
--

CREATE TABLE IF NOT EXISTS `listing_amenities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `edit_by` int(10) NOT NULL,
  `details` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manage_client`
--

CREATE TABLE IF NOT EXISTS `manage_client` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manage_page`
--

CREATE TABLE IF NOT EXISTS `manage_page` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_keywords` varchar(100) NOT NULL,
  `meta_description` varchar(200) NOT NULL,
  `edit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE IF NOT EXISTS `our_services` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `card_type` varchar(200) NOT NULL,
  `card_no` varchar(200) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `verification_no` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `agent_id` int(10) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `property_id` int(10) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ack` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `c_code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_id` (`agent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_view`
--

CREATE TABLE IF NOT EXISTS `profile_view` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `agent_id` int(10) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `view` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_detail`
--

CREATE TABLE IF NOT EXISTS `property_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `property_id` varchar(50) NOT NULL,
  `property` varchar(200) NOT NULL,
  `purpose` varchar(25) NOT NULL,
  `type` int(10) NOT NULL,
  `edit_by` int(5) NOT NULL,
  `price1` int(50) NOT NULL,
  `price2` int(10) NOT NULL,
  `square_ft` int(50) NOT NULL,
  `bedroom` int(5) DEFAULT NULL,
  `bathroom` int(5) DEFAULT NULL,
  `overview` text,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `school` int(5) DEFAULT NULL,
  `police` int(5) DEFAULT NULL,
  `train` varchar(50) DEFAULT NULL,
  `buses` varchar(50) DEFAULT NULL,
  `feature_image` varchar(200) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `listing_amenities` varchar(100) DEFAULT NULL,
  `building_amenities` varchar(100) DEFAULT NULL,
  `nearby_transit` varchar(100) DEFAULT NULL,
  `commute_time` varchar(100) DEFAULT NULL,
  `listing_include` varchar(100) DEFAULT NULL,
  `featured` enum('active','in active') NOT NULL,
  `boosted` enum('yes','no') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_location`
--

CREATE TABLE IF NOT EXISTS `property_location` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `full_address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE IF NOT EXISTS `property_type` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `edit_by` int(5) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `property_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `review` varchar(255) NOT NULL,
  `r_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `property_id` (`property_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `save_property`
--

CREATE TABLE IF NOT EXISTS `save_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fav_property` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `property_id` (`property_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `save_search`
--

CREATE TABLE IF NOT EXISTS `save_search` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(50) NOT NULL,
  `search_url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `share_data`
--

CREATE TABLE IF NOT EXISTS `share_data` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `property_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `friend_email` varchar(250) NOT NULL,
  `b_url` varchar(250) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE IF NOT EXISTS `site_setting` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_logo` varchar(200) NOT NULL,
  `site_favicon` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `paypal_username` varchar(255) NOT NULL,
  `paypal_password` varchar(255) NOT NULL,
  `paypal_signature` varchar(255) NOT NULL,
  `paypal_url` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE IF NOT EXISTS `star_rating` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `property_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `star` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `property_id` (`property_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `country_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE IF NOT EXISTS `train` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `train` varchar(50) NOT NULL,
  `edit_by` int(10) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE IF NOT EXISTS `user_review` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `agent_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `star` int(10) NOT NULL,
  `review` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `helpful` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_id` (`agent_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ynh_feature`
--

CREATE TABLE IF NOT EXISTS `ynh_feature` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_location`
--
ALTER TABLE `property_location`
  ADD CONSTRAINT `property_location_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `property_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `save_property`
--
ALTER TABLE `save_property`
  ADD CONSTRAINT `save_property_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `save_property_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD CONSTRAINT `star_rating_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `star_rating_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_review`
--
ALTER TABLE `user_review`
  ADD CONSTRAINT `user_review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_review_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
