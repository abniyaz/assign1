-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 10:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old`
--

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `id` int(11) NOT NULL,
  `serviceType_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `id` int(11) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `id` int(11) NOT NULL,
  `requestID` int(11) DEFAULT NULL,
  `requestDate` datetime DEFAULT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `servicetype`
--

CREATE TABLE `servicetype` (
  `id` int(11) NOT NULL,
  `serviceCode` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `userType` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `password`, `email`, `mobile`, `userType`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'niyaz', NULL, '$2y$10$CulCOmUEP91BR24xgxNF0OUcEkopYFKDzCTzFG3e9ks2z945f7p.6', 'niyaz@gmail.com', NULL, NULL, '2018-10-09 04:24:02', '2018-10-09 04:24:02', 'Mpw9QQfsV35MyyzORnonbUsEtZ2ea49iuK9eLBqnVbGCHIHyNLdxHesy95vO'),
(5, 'Justin Ng Han Chuen', NULL, '$2y$10$eX7s1i8C7fLX5dTlmTlS4ugTkkfJE4MgSOQpfditIURCZ5ZWPlOfu', 'justinng056@gmail.com', NULL, NULL, '2018-10-19 00:27:19', '2018-10-19 00:27:19', ''),
(6, 'seetha', NULL, '$2y$10$f5fg9l5sBNY5kKHhIG4BteCKCOBrrDC1GzpOFBOaRy7O2vz3s5GoG', 'seetha@gmail.com', NULL, NULL, '2018-10-22 00:37:54', '2018-10-22 00:37:54', 'SfPqcYlui68IFvjspbAIZMwzc8RzB3bo3FhgVe9peAUf0GSg8svlWWMLcAa6'),
(7, 'fathih', NULL, '$2y$10$USoRFtmmmP0DvGz57w9usOmm5H1ZXevKkOEfWNJ1l/m/u2lc4ZwOK', 'fathih@gmail.com', NULL, NULL, '2018-10-22 00:38:31', '2018-10-22 00:38:31', 'dc06WUln6i3uET5wroTkrkAzW3tCB8zNV9pvMusPe6uOJ2u0ZB03DrJVS7g9'),
(8, 'sdasdasdasd', NULL, '$2y$10$fTRIrC2.AJ7ASb1v2YV9CelUjGwKFiClx02xe3h0yLEWAltTEJAa.', 'test@gmail.com', NULL, NULL, '2018-10-22 22:53:37', '2018-10-22 22:53:37', '45f4sIF61w85MrZtOwuG91I3RwKDmUP27J2LaL18Ka40Ny5YuJb7RvuIyFq2'),
(9, 'Ahmed', NULL, '$2y$10$n/UCPJz/khM6bXFMVVwbFuEej0gSb6lxBqz/xF/5IbpjTXo4ew8Ye', 'test2@gmail.com', NULL, NULL, '2018-10-22 22:57:09', '2018-10-22 22:57:09', 'Kxng6ouM0l6Ji4PbmAYc8iDgFEa5Jge5p7ZXkGtROSVHsUKyJjSi9OzeJ1tL'),
(10, 'This', NULL, '$2y$10$A9icyvLv5vSy2XCnD5yxDeN3I3AOinMOXs6gW13hLdkzAjDQjp06G', 'test3@gmail.com', NULL, NULL, '2018-10-23 03:19:19', '2018-10-23 03:19:19', 'IWxlp56hhGRKk1GrfRcvbnrC0tcwqP3TYPTf6XdRbZJJeZmNubBmVH4wsXj9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`,`serviceType_id`,`user_id`),
  ADD KEY `fk_provider_serviceType1_idx` (`serviceType_id`),
  ADD KEY `fk_provider_user1_idx` (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `fk_rewview_user_idx` (`user_id`);

--
-- Indexes for table `senior`
--
ALTER TABLE `senior`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `fk_senior_user1_idx` (`user_id`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `fk_serviceRequest_user1_idx` (`user_id`);

--
-- Indexes for table `servicetype`
--
ALTER TABLE `servicetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senior`
--
ALTER TABLE `senior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicetype`
--
ALTER TABLE `servicetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `provider`
--
ALTER TABLE `provider`
  ADD CONSTRAINT `fk_provider_serviceType1` FOREIGN KEY (`serviceType_id`) REFERENCES `servicetype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_provider_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_rewview_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `senior`
--
ALTER TABLE `senior`
  ADD CONSTRAINT `fk_senior_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD CONSTRAINT `fk_serviceRequest_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
