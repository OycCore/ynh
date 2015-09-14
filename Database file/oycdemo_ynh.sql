-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2015 at 09:43 AM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `interest`, `company`, `facebook`, `twitter`, `google`, `restaurant`, `activity`, `address`, `image`, `about`, `b_hour`, `admin_type`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '9865456789', 1, 'NY Real Estate', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.co.in/?gfe_rd=cr&ei=dCDLVdTUCvDI8Af18KmQAQ&gws_rd=ssl', '', 'Shopping, hanging out with friends, Walking in Central Park', '1223 5th Avenue, NY, #24549', 'ranbir kapoor!.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>\r\n', 'mon,fri,9,am,6,pm', 1, 1),
(21, 'Amit ', 'amit@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '9991653256', 4, 'Newworld.com', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.google.com/', 'taj', 'games ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Koala.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>\r\n', 'mon,mon,1,am,1,am', 2, 1),
(33, 'Test Agent', 'agent@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '7867675643', 0, 'hytech', '', '', '', '', '', '', 'image1.jpg', '', 'mon,mon,1,am,1,am', 2, 1),
(34, 'Test User', 'user@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 0, '', '', '', '', '', '', '', NULL, NULL, NULL, 3, 1),
(35, 'Vikas', 'vik@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '8505945066', 3, 'Myworld.com', 'https://www.facebook.com/', 'https://twitter.com/', ' https://www.google.com/', 'Taj', 'Chess ', 'New York', 'Penguins.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n', 'mon,sun,2,am,11,am', 2, 1),
(36, 'Vikas User', 'vik@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 0, '', '', '', '', '', '', '', NULL, NULL, NULL, 3, 1),
(41, 'Vikas', 'vikas@gmail.com', 'dd5fef9c1c1da1394d6d34b248c51be2ad740840', '8505945088', 3, 'Abc.com', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.google.com/', 'Haveli', 'Chess', 'New West Mumbai', 'Tulips.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'mon,sun,1,am,10,pm', 3, 1),
(42, 'Abhi', '@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '9993652566', 3, 'fresher.com', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', 'Taj', 'Music', 'Noida ', 'Hydrangeas.jpg', '<p><strong style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</strong><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,&nbsp;</span></p>\r\n', 'mon,mon,2,am,10,pm', 3, 1),
(43, 'Ravi', 'ravi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 0, '', '', '', '', '', '', '', NULL, NULL, NULL, 3, 1),
(45, 'Vikas', 'vikastest4@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 0, '', '', '', '', '', '', '', NULL, NULL, NULL, 3, 1);

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

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `heading`, `image`, `content`) VALUES
(1, 'Improve Your Move', 'banner-home.png', '<p>Your Neighbourhood brings together all the information you need to make your best&nbsp; move Sign-up now and find <strong>YOUR</strong> neighborhood</p>\r\n');

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

--
-- Dumping data for table `banner_video`
--

INSERT INTO `banner_video` (`id`, `heading`, `url`, `content`) VALUES
(1, 'Check Out Our Video', 'http://www.youtube.com/embed/suQu-ukSS4w?enablejsapi=1&wmode=transparent&rel=0', '<p>Your Neighbourhood brings together all the information</p>\r\n');

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

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`, `user_id`, `b_url`, `property_id`) VALUES
(1, 5, 'http://oycdemo.com/ynh/home/detail/Mg==', 2),
(2, 4, 'http://oycdemo.com/ynh/home/detail/MTk=', 19),
(3, 9, 'http://oycdemo.com/ynh/home/detail/MjY=', 26),
(4, 9, 'http://oycdemo.com/ynh/home/detail/MjY=', 26),
(5, 3, 'http://oycdemo.com/ynh/home/detail/MjY=', 26),
(6, 3, 'http://oycdemo.com/ynh/home/detail/MjY=', 26),
(7, 18, 'http://oycdemo.com/ynh/home/detail/MzM=', 33),
(8, 20, 'http://oycdemo.com/ynh/home/detail/MzQ=', 34),
(9, 19, 'http://oycdemo.com/ynh/home/detail/MzQ=', 34),
(10, 3, 'http://oycdemo.com/ynh/home/detail/MzQ=', 34),
(11, 10, 'http://oycdemo.com/ynh/home/detail/MzQ=', 34),
(12, 10, 'http://oycdemo.com/ynh/home/detail/Mjk=', 29),
(13, 24, 'http://oycdemo.com/ynh/home/detail/MzQ=', 34),
(14, 7, 'http://oycdemo.com/ynh/home/detail/MzQ=', 34),
(15, 33, 'http://oycdemo.com/ynh/home/detail/NjQ=', 64);

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

--
-- Dumping data for table `boost`
--

INSERT INTO `boost` (`id`, `name`, `price`, `days`) VALUES
(1, 'Pre Plan', 10, 10),
(2, 'Minor Plan', 15, 20),
(3, 'Average Plan', 20, 25),
(4, 'Major Plan', 25, 30),
(7, 'Short Plan', 15, 20);

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

--
-- Dumping data for table `building_amenities`
--

INSERT INTO `building_amenities` (`id`, `name`, `edit_by`, `details`) VALUES
(1, 'Doorman', 1, 'some details'),
(2, 'Gym', 1, 'some details'),
(3, 'Swimming Pool', 3, ' Lorem Ipsum has been the industry''s standard dummy text'),
(6, 'M2', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(7, 'M3', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(8, 'M4', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(9, 'M5', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(10, 'M6', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(11, 'M7', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(12, 'M8', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(13, 'M9', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(16, 'game', 1, 'Lorem Ipsum has been the industry''');

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

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `buses`, `edit_by`, `description`) VALUES
(1, 'm1', 1, 'some details'),
(2, 'm2', 1, 'some details'),
(4, 'm3', 3, 'some details'),
(5, 'm4', 3, 'some details'),
(6, 'm5', 4, 'some details'),
(7, 'm4', 7, 'uk to bostan'),
(8, 'M2', 20, 'Mumbai to Goa'),
(10, 'M5', 20, 'New York to California '),
(11, 'M1', 20, 'Boston to Uk'),
(13, 'M4', 20, 'delhi');

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

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `state_id`) VALUES
(1, 'Sacramento', 1),
(2, 'Los Angles', 1),
(3, 'Albany', 2),
(4, 'New york city', 2),
(5, 'Aligarh', 3),
(6, 'Agra', 3),
(7, 'Gurgaon', 4),
(8, 'Faridabad', 4),
(9, 'Montgomery', 5),
(10, 'Birmingham', 5),
(11, ' Austin', 6),
(12, 'Houston', 6),
(13, 'Manhattan', 2),
(14, 'Nedrow', 2),
(15, 'Cayuga', 2),
(16, 'Castile', 2),
(17, 'Glasco', 2),
(18, 'Clayton', 2),
(19, 'Elmira', 2),
(20, 'Belmont', 2),
(21, 'Cherry Valley', 2),
(22, 'Brooklyn', 2);

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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `to_email`, `from_email`, `subject`, `message`) VALUES
(1, 'narendrasingh909@gmail.com', 'narendra@oycdev.com', 'hiiii', 'messagesss'),
(2, 'narendra.neoweb@gmail.com', 'narendra@oycdev.com', 'About property', 'my message'),
(3, 'narendrasingh909@gmail.com', 'narendra@oycdev.com', 'subject', 'message is here'),
(5, 'narendra@oycdev.com\r\n<div style="border:1px solid ', 'user@gmail.com', 'sdfsdf', 'dsfsgg'),
(6, 'agent@gmail.com\r\n<div style="border:1px solid #990', 'vikastest4@gmail.com', '12313', ''),
(7, 'abhishek@oycdev.com\r\n<div style="border:1px solid ', 'vikas@oycdev.com', 'test contact', 'hellooo\r\n'),
(8, 'narendrasingh@gmail.com', 'narendra.neoweb@gmail.com', 'hiiiii', 'gdahjsdkahh dkjada '),
(9, 'narendra@oycdev.com', 'narendra.neoweb@gmail.com', 'hiii', 'ddsefe rwe ');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'USA'),
(2, 'India');

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

--
-- Dumping data for table `explore`
--

INSERT INTO `explore` (`id`, `heading`, `image`, `content`) VALUES
(1, 'Explore Other Neighborhoods', 'home-img12.png', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset</p>\r\n');

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

--
-- Dumping data for table `include_listing`
--

INSERT INTO `include_listing` (`id`, `name`, `edit_by`, `details`) VALUES
(1, 'Video', 1, 'some details'),
(2, 'Address', 1, 'some details'),
(4, 'V2', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(5, 'V3', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(6, 'V3', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(7, 'V4', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(8, 'V5', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(9, 'V6', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(10, 'V7', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(11, 'V8', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(12, 'V9', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(14, 'Game Room', 1, 'Lorem Ipsum has been the industry''');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `name`) VALUES
(1, 'Playing Football'),
(3, 'Travelling'),
(4, 'Cricket'),
(5, 'Gaming'),
(6, 'Reading');

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

--
-- Dumping data for table `listing_amenities`
--

INSERT INTO `listing_amenities` (`id`, `name`, `edit_by`, `details`) VALUES
(1, 'Dishwasher', 1, 'some details'),
(2, 'Fireplace', 1, 'some details'),
(4, 'Washman', 1, 'Some details'),
(5, 'Cleaning', 20, 'to clear'),
(6, 'denting', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a'),
(7, 'fresh', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a'),
(9, 'walk', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a'),
(12, 'dance', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a'),
(14, 'cricket', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a'),
(15, 'Football', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a'),
(16, 'Football', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a');

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

--
-- Dumping data for table `manage_client`
--

INSERT INTO `manage_client` (`id`, `name`, `image`) VALUES
(1, 'Dell ', '1027px-Dell_Logo.png');

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

--
-- Dumping data for table `manage_page`
--

INSERT INTO `manage_page` (`id`, `page_name`, `page_title`, `meta_title`, `meta_keywords`, `meta_description`, `edit_date`, `description`) VALUES
(1, 'Home Page', 'Find the Best Neighborhoods and Places to Live in NYC | YourNeighborhood', 'Your Neighborhood', 'Your Neighborhood', 'Your Neighborhood', '2015-08-14 11:52:36', '<p>Your Neighborhood brings together all information you need to make your best move</p>\r\n'),
(2, 'Listing page', 'Property Listing | YourNeighborhood', 'Listing YourNeighborhood Property', 'Listing YourNeighborhood Property', 'Listing YourNeighborhood Property', '2015-08-14 11:55:51', ''),
(3, 'Professional Profile ', 'Professional Profile | YourNeighborhood', 'Professional Profile Your Neighborhood', 'Professional Profile Your Neighborhood', 'Professional Profile Your Neighborhood', '2015-08-14 11:56:09', ''),
(4, 'Detail page', 'Property Detail | YourNeighborhood', 'Property Detail', 'Property Detail', 'Property Detail', '2015-08-14 11:56:33', '<p>Property Detail</p>\r\n'),
(5, 'Personel Profile', 'Personel Profile | YourNeighborhood', 'Personel Profile Page', 'Personel Profile Page', 'Personel Profile Page', '2015-08-14 11:56:44', '<p>Personel Profile Page</p>\r\n');

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

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `heading`, `image`, `content`) VALUES
(1, 'neighborhood research', 'glass.png', '<p>sdsf gfg hh dfd</p>\r\n');

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

--
-- Dumping data for table `profile_view`
--

INSERT INTO `profile_view` (`id`, `agent_id`, `user_id`, `view`) VALUES
(1, 1, '6,5,19,10,45,44,,42,34', 9),
(2, 3, '5,9,10', 3),
(3, 4, '5,18', 2),
(4, 7, '9,10,19,18', 4),
(5, 20, '10,18,19,5', 4),
(6, 0, '7', 1),
(7, 35, '41,34,42,,44', 5),
(8, 21, '42,43', 2);

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

--
-- Dumping data for table `property_detail`
--

INSERT INTO `property_detail` (`id`, `property_id`, `property`, `purpose`, `type`, `edit_by`, `price1`, `price2`, `square_ft`, `bedroom`, `bathroom`, `overview`, `country`, `state`, `city`, `location`, `landmark`, `school`, `police`, `train`, `buses`, `feature_image`, `images`, `listing_amenities`, `building_amenities`, `nearby_transit`, `commute_time`, `listing_include`, `featured`, `boosted`) VALUES
(47, '#0047YNH', 'Faridabad Buildings', '2', 9, 21, 200000, 300000, 600, 6, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>\r\n', '2', '4', '8', 'Faridabad', 'Faridabad', 3, 2, '1,2,4,5', '1,4', '1441696658-a1.jpg', '1441696658-a2.jpg,1441696658-a3.jpg,1441696658-a4.jpg', '1,2,4,5', '1,3', NULL, NULL, '1,4,5', 'active', 'no'),
(48, '#0048YNH', 'USA Estate', '1', 7, 21, 100000, 300000, 700, 4, 1, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>\r\n', '1', '2', '4', 'New York', 'New York', 4, 2, '1,2,4', '5,6,7', '1441696928-a5.jpg', '1441696928-p2.jpg,1441696928-p3.jpg,1441696928-p4.jpg,1441696928-p5.jpg,1441696928-p6.jpg', '1,2,4,5,6', '1,2,3', NULL, NULL, '1,2', 'active', 'no'),
(49, '#0049YNH', 'USA House', '1', 8, 21, 100000, 500000, 800, 5, 2, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>\r\n', '1', '1', '2', 'California ', 'California ', 3, 1, '9,10,12', '1,2,4', '1441697084-b1.jpg', '1441697084-p7.jpg,1441697084-p8.jpg,1441697084-p9.jpg', '1,5,7', '1,12,13,14', NULL, NULL, '1,11,12', 'active', 'no'),
(50, '#0050YNH', 'India Estate', '2', 11, 21, 20000, 80000, 1000, 6, 3, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.<br />\r\n&nbsp;</p>\r\n', '2', '4', '7', 'Gurgaon', 'Gurgaon', 3, 1, '4,5,6', '10,11', '1441697290-b2.jpg', '1441697290-p10.jpg,1441697290-p11.jpg,1441697290-p12.jpg', '1,2,16', '1,2', NULL, NULL, '1,2', 'in active', 'no'),
(51, '#0051YNH', 'India Estate', '1', 1, 21, 250000, 650000, 600, 4, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>\r\n', '2', '3', '6', 'Noida ', 'Noida ', 3, 1, '1,4', '2,5', '1441697490-c1.jpg', '1441697490-p17.jpg,1441697490-p18.jpg,1441697490-p19.jpg,1441697490-p20.jpg', '1,2,4,5', '1,2,3,6', NULL, NULL, '1,2,4,5', 'in active', 'no'),
(52, '#0052YNH', 'USA Estate', '2', 2, 21, 150000, 350000, 600, 4, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>\r\n', '1', '6', '12', 'Houston', 'Houston', 4, 2, '5', '4,5', '1441697789-b3.jpg', '1441697789-p19.jpg,1441697789-p20.jpg,1441697789-p21.jpg,1441697789-p22.jpg,1441697789-p23.jpg,1441697789-p24.jpg', '1,2,4,5,6', '1,2,3', NULL, NULL, '2,4', 'in active', 'no'),
(53, '#0053YNH', 'USA Estate', '2', 2, 21, 150000, 350000, 600, 4, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>\r\n', '1', '6', '12', 'Houston', 'Houston', 4, 2, '5', '4,5', '1441697800-b3.jpg', '1441697800-p19.jpg,1441697800-p20.jpg,1441697800-p21.jpg,1441697800-p22.jpg,1441697800-p23.jpg,1441697800-p24.jpg', '1,2,4,5,6', '1,2,3', NULL, NULL, '2,4', 'in active', 'no'),
(54, '#0054YNH', 'India Home', '1', 7, 1, 100000, 200000, 1000, 4, 2, '<p><span style="line-height: 20.8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2', '4', '7', 'Gurgaon', 'Gurgaon', 2, 1, '5,1', '5,1', '1441702418-a1.jpg', '1441702418-a1.jpg,1441702418-a2.jpg,1441702418-a3.jpg', '4,2,1', '2,1', NULL, NULL, '2,1', 'active', 'no'),
(55, '#0055YNH', 'USA Home ', '2', 10, 1, 300000, 450000, 1500, 7, 2, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>\r\n', '1', '5', '10', 'Alabama', 'Alabama ', 3, 1, '10,12', '4,5', '1441702576-a2.jpg', '1441702576-b2.jpg,1441702576-b3.jpg,1441702576-b4.jpg,a9.jpg', '1,2,4,5,6', '1,2,3', NULL, NULL, '1,2,4,5', 'in active', 'no'),
(56, '#0056YNH', 'USA Dream Home', '1', 13, 1, 100000, 150000, 1500, 8, 3, '<p><span style="line-height: 20.8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '1', '2', '13', 'Manahattan', 'Manahattan', 3, 2, '8,10,12', '10,11,13', '1441702766-a3.jpg', '1441702766-', '1,2,4,5,6', '1,2', NULL, NULL, '1,2', 'active', 'no'),
(57, '#0057YNH', 'Dream home ', '1', 13, 35, 250000, 450000, 1000, 6, 3, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p>\r\n', '2', '4', '7', 'Gurgaon DLF', 'Gurgaon DLF City ', 2, 1, '1,2,5', '1,4', '1441705522-a4.jpg', '1441705522-c1.jpg,1441705522-c2.jpg,1441705522-c3.jpg,1441705522-c5.jpg,1441705522-d1.jpg', '1,2,4,5', '1,2,3,6', NULL, NULL, '1,2,4,5,6', 'active', 'no'),
(58, '#0058YNH', 'JP Homes', '1', 7, 35, 300000, 500000, 300, 2, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam purus est, elementum vel nisl et, consequat varius purus. Phasellus id enim volutpat, rhoncus urna nec, vestibulum leo. Cras imperdiet dignissim sapien, eget faucibus ex rutrum eget. In varius non turpis id luctus. Etiam ut interdum nulla. Praesent laoreet, augue quis lobortis tristique, nisi ipsum efficitur nisi, nec scelerisque odio metus in sem. Phasellus convallis metus nulla, vitae suscipit libero tincidunt sed.</p>\r\n', '2', '4', '8', 'Faridabad city', 'Faridabad city', 3, 1, '2,1', '2,1', '1441705739-a6.jpg', '1441705739-d2.jpg,1441705739-d3.jpg,1441705739-d4.jpg,1441705739-d5.jpg,1441705739-e1.jpg,1441705739-e2.jpg,1441705739-e3.jpg', '6,5,4,2,1', '6,3,2,1', NULL, NULL, '4,2,1', 'in active', 'no'),
(59, '#0059YNH', 'New World Home', '1', 16, 35, 350000, 550000, 1000, 6, 3, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p>\r\n', '1', '2', '18', 'Clayton', 'Clayton', 4, 1, '5,4', '4,2', '1441705985-a8.jpg', '1441705985-d3.jpg,1441705985-f1.jpg,1441705985-f2.jpg,1441705985-f4.jpg,1441705985-g1.jpg', '4,2,1', '2,1', NULL, NULL, '2,1', 'active', 'no'),
(60, '#0060YNH', 'Dream Homes ', '2', 9, 35, 25000, 50000, 500, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis sapien in tellus fringilla, vitae imperdiet lorem posuere. Nam congue facilisis diam, a rhoncus massa. Aenean imperdiet luctus odio non imperdiet. Phasellus orci lectus, ultricies nec hendrerit a, dapibus a ex. Nam porta risus vel elit vulputate, vel congue justo euismod. Curabitur libero ipsum, volutpat eget consequat in, molestie eu orci. Fusce consectetur sagittis consequat. Phasellus dapibus turpis in urna elementum volutpat.</p>\r\n', '2', '3', '6', 'Noida', 'Greater Noida ', 4, 1, '5,4', '10,8', '1441706186-a8.jpg', '1441706186-d3.jpg,1441706186-v1.jpg,1441706186-v2.jpg,1441706186-v3.jpg,1441706186-v4.jpg,1441706186-v5.jpg', '4,2,1', '6,3,2,1', NULL, NULL, '5,4,2,1', 'active', 'no'),
(61, '#0061YNH', 'USA Dream House', '2', 8, 35, 25000, 60000, 800, 5, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam purus est, elementum vel nisl et, consequat varius purus. Phasellus id enim volutpat, rhoncus urna nec, vestibulum leo. Cras imperdiet dignissim sapien, eget faucibus ex rutrum eget. In varius non turpis id luctus. Etiam ut interdum nulla. Praesent laoreet, augue quis lobortis tristique, nisi ipsum efficitur nisi, nec scelerisque odio metus in sem. Phasellus convallis metus nulla, vitae suscipit libero tincidunt sed.</p>\r\n', '1', '2', '17', 'Glasco', 'Glasco', 3, 1, '5,4,2', '5,4,2', '1441706559-a10.jpg', '1441706559-d1.jpg,1441706559-p12.jpg,1441706559-p13.jpg,1441706559-p14.jpg,1441706559-p15.jpg,1441706559-p16.jpg', '16,4,2,1', '3,2,1', NULL, NULL, '2', 'in active', 'no'),
(62, '#0062YNH', 'USA World ', '2', 2, 35, 30000, 70000, 800, 6, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam purus est, elementum vel nisl et, consequat varius purus. Phasellus id enim volutpat, rhoncus urna nec, vestibulum leo. Cras imperdiet dignissim sapien, eget faucibus ex rutrum eget. In varius non turpis id luctus. Etiam ut interdum nulla. Praesent laoreet, augue quis lobortis tristique, nisi ipsum efficitur nisi, nec scelerisque odio metus in sem. Phasellus convallis metus nulla, vitae suscipit libero tincidunt sed.</p>\r\n', '1', '2', '19', 'Elmira', 'Elmira', 3, 1, '5,4', '13,4', '1441706778-a9.jpg', '1441706778-d5.jpg,1441706778-e1.jpg,1441706778-e2.jpg,1441706778-e3.jpg,1441706778-e4.jpg,1441706778-e5.jpg', '4,2,1', '3,1', NULL, NULL, '2,1', 'in active', 'no'),
(63, '#0063YNH', 'USA Dream house', '1', 10, 1, 200000, 400000, 700, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam purus est, elementum vel nisl et, consequat varius purus. Phasellus id enim volutpat, rhoncus urna nec, vestibulum leo. Cras imperdiet dignissim sapien, eget faucibus ex rutrum eget. In varius non turpis id luctus. Etiam ut interdum nulla. Praesent laoreet, augue quis lobortis tristique, nisi ipsum efficitur nisi, nec scelerisque odio metus in sem. Phasellus convallis metus nulla, vitae suscipit libero tincidunt sed.</p>\n', '1', '2', '20', 'Belmont', 'Belmont', 3, 1, '12,10', '5,4', '1441776417-a3.jpg', '1441776417-p21.jpg,1441776417-p22.jpg,1441776417-p23.jpg,1441776417-p24.jpg,1441776417-v2.jpg,1441776417-v3.jpg,1441776417-v4.jpg,1441776417-v5.jpg', '4,2,1', '2,1', NULL, NULL, '2,1', 'active', 'no'),
(64, '#0064YNH', 'New House', '1', 20, 1, 150000, 350000, 500, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam purus est, elementum vel nisl et, consequat varius purus. Phasellus id enim volutpat, rhoncus urna nec, vestibulum leo. Cras imperdiet dignissim sapien, eget faucibus ex rutrum eget. In varius non turpis id luctus. Etiam ut interdum nulla. Praesent laoreet, augue quis lobortis tristique, nisi ipsum efficitur nisi, nec scelerisque odio metus in sem. Phasellus convallis metus nulla, vitae suscipit libero tincidunt sed.</p>\r\n', '2', '4', '7', 'Gurgaon', 'Gurgaon City', 3, 1, '12,10', '12', '1441783444-a7.jpg', '1441783444-d1.jpg,1441783444-p7.jpg,1441783444-p8.jpg,1441783444-p9.jpg,1441783444-p10.jpg,1441783444-p11.jpg,1441783444-p12.jpg,1441783444-p13.jpg', '5,4,2,1', '3,2,1', NULL, NULL, '2,1', 'active', 'no'),
(65, '#0065YNH', 'Gurgaon City House', '1', 8, 1, 250000, 4000, 800, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '7', 'Gurgaon', 'Gurgaon Village', 3, 1, '10,9,8', '11,10', '1441860845-a11.jpg', '1441860845-c1.jpg,1441860845-p14.jpg,1441860845-p15.jpg,1441860845-p16.jpg,1441860845-p17.jpg,1441860845-p18.jpg', '16,15,14', '16,13,12', NULL, NULL, '14,12,11', 'active', 'no'),
(66, '#0066YNH', 'Gurgaon Home', '1', 9, 1, 200000, 300, 900, 5, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '7', 'Gurgaon', 'Gurgaon Cyber City', 2, 1, '5,4,2', '6,5,4', '1441861139-a4.jpg', '1441861139-c1.jpg,1441861139-f3.jpg,1441861139-f4.jpg,1441861139-f5.jpg,1441861139-g1.jpg,1441861139-g2.jpg', '16,15,14,12,9', '16,3,2,1', NULL, NULL, '14,2,1', 'active', 'no'),
(67, '#0067YNH', 'Manahattan Home', '1', 9, 1, 150000, 350000, 600, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '1', '2', '13', 'Manahattan', 'Manahattan club', 3, 1, '5,4', '13,11', '1441861907-a1.jpg', '1441861907-b3.jpg,1441861907-b4.jpg,1441861907-d1.jpg,1441861907-d2.jpg,1441861907-d4 - Copy.jpg', '16,15,14,1', '16,3,2,1', NULL, NULL, '14,2', 'in active', 'no'),
(68, '#0068YNH', 'Faridabad Villa ', '1', 11, 21, 250000, 500000, 800, 6, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '8', 'Faridabad city', 'Faridabad ', 3, 1, '10,9,8', '13,11,10', '1441862142-12.jpg', '1441862142-d2.jpg,1441862142-p1.jpg,1441862142-p4.jpg,1441862142-p8.jpg,1441862142-p9.jpg,1441862142-p11.jpg', '16,15,14,1', '16,3,2', NULL, NULL, '14,2,1', 'active', 'no'),
(69, '#0069YNH', 'Manahattan House ', '1', 10, 1, 170000, 320000, 500, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '1', '2', '13', 'Manahattan', 'Manahattan City', 4, 2, '8,7', '10,8', '1441862307-a5.jpg', '1441862307-b3.jpg,1441862307-b4.jpg,1441862307-b5.jpg,1441862307-c1.jpg,1441862307-c2.jpg,1441862307-c3.jpg', '16,15,14,12,9', '16,13,11', NULL, NULL, '14,12,2,1', 'in active', 'no'),
(70, '#0070YNH', 'Belmont House ', '1', 12, 1, 350000, 500000, 900, 6, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '1', '2', '20', 'Belmont', 'Belmont City', 4, 2, '5,4', '13,11', '1441862482-a9.jpg', '1441862482-c5.jpg,1441862482-p21.jpg,1441862482-p22.jpg,1441862482-p23.jpg,1441862482-p24.jpg', '16,15,4,2', '16,13,3,2,1', NULL, NULL, '14,12,10,2', 'active', 'no'),
(71, '#0071YNH', 'Belmont Villa ', '1', 13, 1, 350000, 700000, 1000, 8, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '1', '2', '20', 'New York', 'Manahattan', 4, 1, '8,7', '11,10,8', '1441862849-a11.jpg', '1441862849-b5.jpg,1441862849-c1.jpg,1441862849-c2.jpg,1441862849-c3.jpg', '16,15', '16,13,12,2,1', NULL, NULL, '14,2,1', 'in active', 'no'),
(72, '#0072YNH', 'Faridabad Dream Home ', '1', 2, 21, 140000, 280000, 400, 2, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '8', 'Noida ', 'Mumbai', 2, 1, '7', '13,11', '1441863002-a6.jpg', '1441863002-p17.jpg,1441863002-p19.jpg,1441863002-p23.jpg,1441863002-v1 - Copy.jpg', '14,12,9,1', '16,3,2,1', NULL, NULL, '14,2,1', 'active', 'no'),
(73, '#0073YNH', 'Gurgaon Villa ', '1', 14, 21, 450000, 1000000, 1500, 10, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '7', 'Gurgaon', 'Faridabad', 2, 2, '9,8', '11,10', '1441863328-d2.jpg', '1441863328-a8.jpg,1441863328-a9.jpg,1441863328-a10.jpg,1441863328-a11.jpg', '16,14,12,1', '16,3,2,1', NULL, NULL, '14,2,1', 'active', 'no'),
(74, '#0074YNH', 'Manahattan family Villa ', '1', 16, 1, 500000, 1500000, 1500, 10, 4, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '1', '2', '13', 'New York', 'Belmont City', 4, 2, '5,4', '5,4,2', '1441863874-d4 - Copy.jpg', '1441863874-a6.jpg,1441863874-a7.jpg,1441863874-a8.jpg,1441863874-a9.jpg', '16,14,12,9,1', '16,3,2,1', NULL, NULL, '14,2,1', 'active', 'no'),
(75, '#0075YNH', 'Vikas Appartment', '1', 7, 21, 140000, 250000, 300, 2, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '7', 'Gurgaon DLF', 'Cyber City ', 2, 1, '9,8', '11,10', '1441864247-a8.jpg', '1441864247-12.jpg,1441864247-a1.jpg,1441864247-a2.jpg,1441864247-a3.jpg,1441864247-a5.jpg', '16,4,2', '16,13,3,2,1', NULL, NULL, '14,2,1', 'active', 'no'),
(76, '#0076YNH', 'Earth Apartments ', '1', 9, 1, 280000, 350000, 700, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '3', '6', 'Noida ', 'Noida City', 3, 1, '5,4', '2,1', '1441864396-a7.jpg', '1441864396-d2.jpg,1441864396-g4.jpg,1441864396-g5.jpg,1441864396-h1.jpg,1441864396-h2.jpg,1441864396-h4.jpg', '14,12,9,1', '16,3,2,1', NULL, NULL, '2,1', 'active', 'no'),
(77, '#0077YNH', 'Earth House ', '1', 10, 1, 140000, 260000, 400, 2, 1, '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. </strong></p>\r\n\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>\r\n\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>\r\n', '2', '3', '6', 'Noida ', 'Noida City', 4, 1, '5', '6,5,4', '1441864699-a5.jpg', '1441864699-a6.jpg,1441864699-a7.jpg,1441864699-a8.jpg,1441864699-a9.jpg,1441864699-a10.jpg,1441864699-a11.jpg', '16,14,12,1', '16,12,3,2,1', NULL, NULL, '14,2,1', 'in active', 'no'),
(78, '#0078YNH', 'Earth Estate', '1', 11, 21, 3500000, 600000, 800, 4, 2, '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>\r\n\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>\r\n', '2', '3', '5', 'Noida', 'Noida Cyber City', 4, 2, '10,9', '13,11,10', '1441864827-g5.jpg', '1441864827-c1.jpg,1441864827-p13.jpg,1441864827-p15.jpg,1441864827-p16.jpg,1441864827-p21.jpg,1441864827-v1 - Copy.jpg', '14,12,9', '16,3,2,1', NULL, NULL, '14,2', 'in active', 'no'),
(79, '#0079YNH', 'Mohan Estate', '1', 12, 21, 350000, 700000, 900, 6, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '7', 'Gurgaon DLF', 'Gurgaon DLF City', 4, 1, '10,9', '13,11', '1441865273-a10.jpg', '1441865273-12.jpg,1441865273-a1.jpg,1441865273-a2.jpg,1441865273-a3.jpg,1441865273-a4 - Copy.jpg,1441865273-a4.jpg,1441865273-a5.jpg', '15,14,12,9,1', '16,13,3,2,1', NULL, NULL, '14,2,1', 'in active', 'no'),
(80, '#0080YNH', 'Vikas Estate', '1', 10, 1, 150000, 360000, 600, 4, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n', '2', '4', '7', 'Gurgaon DLF', 'Gurgaon DLF', 4, 1, '4', '13,11', '1441865352-p24.jpg', '1441865352-b2.jpg,1441865352-b4.jpg,1441865352-c1.jpg,1441865352-c2.jpg,1441865352-d4 - Copy.jpg', '16,5,4,2', '16,3,2,1', NULL, NULL, '2,1', 'active', 'no'),
(81, '#0081YNH', 'John Estate', '1', 8, 1, 230000, 395000, 300, 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue nisl pharetra mauris scelerisque, non volutpat neque gravida. Mauris gravida cursus rhoncus. Donec vulputate est quam, sed tincidunt odio iaculis sit amet. Morbi a velit ante. Pellentesque ac laoreet sapien. Duis laoreet, ex finibus dignissim mattis, arcu urna consectetur magna, pretium auctor urna ante in mi. Nam sed egestas ipsum. Maecenas arcu enim, hendrerit eget rhoncus vitae, tincidunt eget libero. Praesent luctus ipsum ut odio convallis fermentum. Nunc tincidunt egestas laoreet. Donec cursus et lectus sit amet vestibulum. Quisque ac lacus in nisl sollicitudin fringilla aliquet suscipit nisi. Mauris et dui viverra, ultrices massa at, consequat purus. Maecenas consequat dignissim dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', '2', '19', 'Elmira ', 'Elmira City ', 2, 1, '5,4,2', '5,4,1', '1441866508-f3.jpg', '1441866508-b3.jpg,1441866508-b4.jpg,1441866508-b5.jpg,1441866508-c1.jpg,1441866508-d1.jpg,1441866508-d2.jpg,1441866508-d3.jpg', '16,14,12,1', '16,2,1', NULL, NULL, '14,2,1', 'active', 'no');

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

--
-- Dumping data for table `property_location`
--

INSERT INTO `property_location` (`id`, `pid`, `lat`, `log`, `full_address`) VALUES
(34, 47, '28.4089123', '77.3177894', 'Faridabad, Haryana, India'),
(35, 48, '40.7127837', '-74.0059413', 'New York, NY, USA'),
(36, 49, '36.778261', '-119.4179324', 'California, USA'),
(37, 50, '28.4594965', '77.0266383', 'Gurgaon, Haryana, India'),
(38, 51, '28.5355161', '77.3910265', 'Noida, Uttar Pradesh, India'),
(39, 52, '29.7604267', '-95.3698028', 'Houston, TX, USA'),
(40, 53, '29.7604267', '-95.3698028', 'Houston, TX, USA'),
(41, 54, '28.4594965', '77.0266383', 'Gurgaon, Haryana, India'),
(42, 55, '32.3182314', '-86.902298', 'Alabama, USA'),
(43, 56, '40.7830603', '-73.9712488', 'Manhattan, New York, NY, USA'),
(44, 57, '28.4661035', '77.0994342', 'DLF, Arjun Marg, Block E, DLF Phase 1, Sector 26A, Gurgaon, Haryana 122002, India'),
(45, 58, '28.4089123', '77.3177894', 'Faridabad, Haryana, India'),
(46, 59, '38.6425518', '-90.3237263', 'Clayton, MO, USA'),
(47, 60, '28.5355161', '77.3910265', 'Noida, Uttar Pradesh, India'),
(48, 61, '39.3566689', '-97.8411519', 'Glasco, KS 67445, USA'),
(49, 62, '42.0897965', '-76.8077338', 'Elmira, NY, USA'),
(50, 63, '37.5202145', '-122.2758008', 'Belmont, CA, USA'),
(51, 64, '28.4594965', '77.0266383', 'Gurgaon, Haryana, India'),
(52, 65, '28.4594965', '77.0266383', 'Gurgaon, Haryana, India'),
(53, 66, '28.4594965', '77.0266383', 'Gurgaon, Haryana, India'),
(54, 67, '40.7830603', '-73.9712488', 'Manhattan, New York, NY, USA'),
(55, 68, '28.4089123', '77.3177894', 'Faridabad, Haryana, India'),
(56, 69, '40.7830603', '-73.9712488', 'Manhattan, New York, NY, USA'),
(57, 70, '37.5202145', '-122.2758008', 'Belmont, CA, USA'),
(58, 71, '40.7127837', '-74.0059413', 'New York, NY, USA'),
(59, 72, '28.5355161', '77.3910265', 'Noida, Uttar Pradesh, India'),
(60, 73, '28.4594965', '77.0266383', 'Gurgaon, Haryana, India'),
(61, 74, '40.7127837', '-74.0059413', 'New York, NY, USA'),
(62, 75, '28.4661035', '77.0994342', 'DLF, Arjun Marg, Block E, DLF Phase 1, Sector 26A, Gurgaon, Haryana 122002, India'),
(63, 76, '28.5355161', '77.3910265', 'Noida, Uttar Pradesh, India'),
(64, 77, '28.5355161', '77.3910265', 'Noida, Uttar Pradesh, India'),
(65, 78, '28.5355161', '77.3910265', 'Noida, Uttar Pradesh, India'),
(66, 79, '28.4661035', '77.0994342', 'DLF, Arjun Marg, Block E, DLF Phase 1, Sector 26A, Gurgaon, Haryana 122002, India'),
(67, 80, '28.4661035', '77.0994342', 'DLF, Arjun Marg, Block E, DLF Phase 1, Sector 26A, Gurgaon, Haryana 122002, India'),
(68, 81, '42.0897965', '-76.8077338', 'Elmira, NY, USA');

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

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`id`, `type`, `edit_by`, `content`) VALUES
(1, 'OpenHouses', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(2, 'Multifamilies', 1, ' Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, '),
(4, 'Foreclosures', 1, 'Lorem ipsum'),
(6, 'Full', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(7, '1 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(8, '2 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(9, '3 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(10, '4 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(11, '5 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(12, '6 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(13, '7 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(14, '8 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(15, '9 BHK', 20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,'),
(20, '1 BHK Room', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,');

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

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `property_id`, `user_id`, `review`, `r_date`) VALUES
(1, 77, 21, '', '2015-09-10 07:27:41'),
(2, 55, 21, 'very Nice property ', '2015-09-10 07:43:38'),
(3, 55, 21, 'wonderful', '2015-09-10 07:44:10');

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

--
-- Dumping data for table `save_property`
--

INSERT INTO `save_property` (`id`, `property_id`, `user_id`, `fav_property`) VALUES
(44, 53, 21, '0'),
(45, 58, 41, '1'),
(46, 52, 41, '1'),
(47, 62, 33, '1'),
(48, 63, 34, '1'),
(49, 62, 34, '1'),
(50, 64, 33, '1');

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

--
-- Dumping data for table `save_search`
--

INSERT INTO `save_search` (`id`, `name`, `user_id`, `search_url`) VALUES
(1, 'all_search?location%5B%5D=Alabama&location%5B%5D=Elmira&location%5B%5D=Glasco&type=all&price1=max&price2=max&beds=max&baths=max', 33, 'http://oycdemo.com/ynh/home/all_search?location%5B%5D=Alabama&location%5B%5D=Elmira&location%5B%5D=Glasco&type=all&price1=max&price2=max&beds=max&baths=max'),
(2, 'all_search?type=all&price1=max&price2=max&beds=max&baths=max&sort_by=newest', 34, 'http://oycdemo.com/ynh/home/all_search?type=all&price1=max&price2=max&beds=max&baths=max&sort_by=newest'),
(3, 'all_search?type=7&price1=100000&price2=200000&beds=4&baths=2', 34, 'http://oycdemo.com/ynh/home/all_search?type=7&price1=100000&price2=200000&beds=4&baths=2'),
(4, 'all_search?type=all&price1=max&price2=max&beds=max&baths=max', 33, 'http://oycdemo.com/ynh/home/all_search?type=all&price1=max&price2=max&beds=max&baths=max');

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

--
-- Dumping data for table `share_data`
--

INSERT INTO `share_data` (`id`, `property_id`, `user_id`, `user_email`, `friend_email`, `b_url`, `message`) VALUES
(1, 2, 5, 'narendra@gmail.com', 'deepak@gmail.com', 'http://oycdemo.com/ynh/home/detail/Mg==', 'this is my message'),
(2, 5, 4, 'narendrasingh909@gmail.com', 'narendra@oycdev.com', 'http://oycdemo.com/ynh/home/detail/NQ==', 'click on link'),
(3, 4, 3, 'narendra@oycdev.com', 'ram_sajan@oycdev.com', 'http://oycdemo.com/ynh/home/detail/NA==', 'hii ram click on link'),
(4, 26, 7, 'vikastest4@gmail.com', 'vikas@oycdev.com', 'http://oycdemo.com/ynh/home/detail/MjY=', 'Hi'),
(5, 34, 19, 'vikas@oycdev.com', 'abhishek@oycdev.com', 'http://oycdemo.com/ynh/home/detail/MzQ=', 'hello'),
(6, 62, 41, 'vik@gmail.com', 'vikas@oycdev.com', 'http://oycdemo.com/ynh/home/detail/NjI=', 'hello');

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

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `site_name`, `site_title`, `site_logo`, `site_favicon`, `phone`, `email`, `facebook`, `twitter`, `google`, `copyright`, `address`, `paypal_username`, `paypal_password`, `paypal_signature`, `paypal_url`) VALUES
(1, 'Your Neighbourhood', 'Your Neighbourhood', 'logo.png', '10475107_1379684638992911_699223826_a.jpg', '9764677890', 'ynh@gmail.com', 'https://www.facebook.com/YourNeighborhood', 'https://twitter.com/YrNeighborhood', 'https://plus.google.com/102011319359168377683/posts', 'Copyright 2015 - YourNeighborhood. All rights reserved', '1223 Avenue, NY', 'platfo_1255077030_biz_api1.gmail.com', '1255077037', 'Abg0gYcQyxQvnf2HDJkKtA-p6pqhA1k-KTYE0Gcy1diujFio4io5Vqjf', 0);

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

--
-- Dumping data for table `star_rating`
--

INSERT INTO `star_rating` (`id`, `property_id`, `user_id`, `star`) VALUES
(1, 55, 33, 4),
(2, 60, 41, 5),
(3, 58, 35, 5),
(4, 62, 41, 5),
(5, 62, 21, 4),
(6, 61, 42, 5),
(7, 55, 21, 5),
(8, 79, 34, 5),
(9, 81, 34, 5);

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

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `country_id`) VALUES
(1, 'California', 1),
(2, 'New York', 1),
(3, 'Uttar Pradesh', 2),
(4, 'Hariyana', 2),
(5, 'Alabama', 1),
(6, 'Texas', 1);

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

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `train`, `edit_by`, `description`) VALUES
(1, 't1', 1, 'some details'),
(2, 't2', 1, 'some details'),
(4, 't3', 3, 'some details'),
(5, 't4', 3, 'some details'),
(6, 't5', 4, 'some details'),
(7, 't1', 20, 'delhi'),
(8, 't2', 20, 'karnal'),
(9, 't3', 20, 'panipat'),
(10, 't4', 20, 'new york');

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

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`id`, `agent_id`, `user_id`, `star`, `review`, `date`, `helpful`) VALUES
(1, 35, 34, 4, 'Good', '2015-09-09 10:24:39', 0),
(2, 1, 45, 5, 'Really good ', '2015-09-09 11:01:24', 0),
(3, 1, 42, 5, 'Better', '2015-09-09 10:28:59', 0);

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
-- Dumping data for table `ynh_feature`
--

INSERT INTO `ynh_feature` (`id`, `name`, `image`, `content`) VALUES
(1, 'Feature1', '512.png', '<p>df we dfd</p>\r\n');

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
