-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 03:11 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surveyobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(120) NOT NULL AUTO_INCREMENT,
  `question_id` int(120) NOT NULL,
  `question_number` int(120) NOT NULL,
  `user_answer` varchar(256) COLLATE utf8_bin NOT NULL,
  `survey_id` int(120) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(120) NOT NULL AUTO_INCREMENT,
  `question_text` varchar(256) COLLATE utf8_bin NOT NULL,
  `question_type_id` int(120) NOT NULL,
  `unique_number_of _question` int(120) NOT NULL,
  `survey_id` int(120) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_types`
--

CREATE TABLE IF NOT EXISTS `question_types` (
  `question_type_id` int(120) NOT NULL AUTO_INCREMENT,
  `question_type_name` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`question_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `question_types`
--

INSERT INTO `question_types` (`question_type_id`, `question_type_name`) VALUES
(1, 'Multiple Choice'),
(2, 'Word Cloud'),
(3, 'Scales'),
(4, 'Open Ended'),
(5, '100 points'),
(6, 'Dual axis'),
(7, 'Who will win');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `survey_id` int(120) NOT NULL AUTO_INCREMENT,
  `survey_name` varchar(256) COLLATE utf8_bin NOT NULL,
  `user_id` int(120) NOT NULL,
  `survey_status` varchar(256) COLLATE utf8_bin NOT NULL,
  `survey_start_date` varchar(100) COLLATE utf8_bin NOT NULL,
  `survey_close_date` varchar(100) COLLATE utf8_bin NOT NULL,
  `survey_update_date` varchar(100) COLLATE utf8_bin NOT NULL,
  `vote_limit_count` int(120) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(120) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(256) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(256) COLLATE utf8_bin NOT NULL,
  `user_password` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
