-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 07:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emmanuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `nickname` varchar(255) DEFAULT NULL,
  `main_title` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `about_text_1` text DEFAULT NULL,
  `about_text_2` text DEFAULT NULL,
  `work_experience_title_1` varchar(255) DEFAULT NULL,
  `work_experience_years_1` varchar(50) DEFAULT NULL,
  `work_experience_title_2` varchar(255) DEFAULT NULL,
  `work_experience_years_2` varchar(50) DEFAULT NULL,
  `work_experience_title_3` varchar(255) DEFAULT NULL,
  `work_experience_years_3` varchar(50) DEFAULT NULL,
  `education_title_1` varchar(255) DEFAULT NULL,
  `education_passout_years_1` varchar(50) DEFAULT NULL,
  `education_title_2` varchar(255) DEFAULT NULL,
  `education_passout_years_2` varchar(50) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `status`, `nickname`, `main_title`, `full_name`, `phone`, `email`, `website`, `address`, `twitter_link`, `facebook_link`, `linkedin_link`, `about_text_1`, `about_text_2`, `work_experience_title_1`, `work_experience_years_1`, `work_experience_title_2`, `work_experience_years_2`, `work_experience_title_3`, `work_experience_years_3`, `education_title_1`, `education_passout_years_1`, `education_title_2`, `education_passout_years_2`, `user_image`) VALUES
(1, 'active', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(2, 'active', 'chandippan', 'dasdsad', 'dsadsadsa', 'dasdsadsa', 'dsadsadasd@gmail.com', 'https://www.google.com', 'dsadsadsadsad', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'dadasdwqedwq eqwewq e q ', ' ewqe wqe wq ewq qwewqe wq wq', 'q eqwe wq ewq e', '1', '', '', '', '', '', '', '', '', NULL),
(3, 'active', 'chandippan', 'dasdsad', 'dsadsadsa', 'dasdsadsa', 'dsadsadasd@gmail.com', 'https://www.google.com', 'dsadsadsadsad', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'dadasdwqedwq eqwewq e q ', ' ewqe wqe wq ewq qwewqe wq wq', 'q eqwe wq ewq e', '1', '', '', '', '', '', '', '', '', NULL),
(4, 'active', 'eqwewqe', 'ewqewqe', 'eqwewqewqe', 'eqwewqe', 'edwinjoevarghese2026@mca.ajce.in', 'https://www.google.com', 'waeewqe', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'eqwewqewqe', 'qewqewqewqeqwewqe', 'e wqe q', '2', '', '', '', '', '', '', '', '', NULL),
(5, 'active', 'eqwewqe', 'ewqewqe', 'eqwewqewqe', 'eqwewqe', 'edwinjoevarghese2026@mca.ajce.in', 'https://www.google.com', 'waeewqe', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'https://mail.google.com/mail/u/0/#inbox', 'eqwewqewqe', 'qewqewqewqeqwewqe', 'e wqe q', '2', 'ewqewqe', '2', 'wewqewqeqw', '3', 'ewqewqeqw', 'ewqewqe', 'ewqewqewq', 'qwewqe', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
