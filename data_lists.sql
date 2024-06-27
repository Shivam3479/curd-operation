-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 03:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd_operation_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_lists`
--

CREATE TABLE `data_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_lists`
--

INSERT INTO `data_lists` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(12, 'Autumn Chapman', 'jymegojiw@mailinator.com', '+1 (763) 898-7696', 'Enim qui non hic et', '2024-06-26 00:23:38', '2024-06-27 07:07:03'),
(13, 'divya', 'jidol@mailinator.com', '9643576199', 'Consequatur laborios', '2024-06-26 00:24:30', '2024-06-27 05:16:01'),
(27, 'Cherokee Kerr', 'kunirasim@mailinator.com', '+1 (429) 153-1994', 'Possimus duis cumqu', '2024-06-27 05:34:41', '2024-06-27 07:08:18'),
(28, 'shivammmm', 'lydelog@mailinator.com', '9654268019', 'i love you', '2024-06-27 05:39:44', '2024-06-27 05:49:39'),
(29, 'shivam', 'shivam@gmail.com', '9643576162', 'testing11111', '2024-06-27 06:03:16', '2024-06-27 07:31:37'),
(30, 'Guinevere Clayton', 'resisyt@mailinator.com', '+1 (188) 786-2694', 'Sunt veniam nesciu', '2024-06-27 06:03:53', '2024-06-27 07:20:42'),
(32, 'Grant Lawson', 'gafizilo@mailinator.com', '+1 (635) 724-3683', 'Mollitia quisquam si', '2024-06-27 06:18:13', '2024-06-27 06:18:13'),
(34, 'Lael Buck', 'zekewu@mailinator.com', '+1 (947) 414-4205', 'Dignissimos aut culp', '2024-06-27 06:19:56', '2024-06-27 06:19:56'),
(35, 'Inez', 'sewocud@mailinator.com', '+1 (842) 216-4638', 'Odit similique venia', '2024-06-27 06:20:27', '2024-06-27 07:20:58'),
(39, 'Quincy Bray', 'vaso@mailinator.com', '+1 (961) 122-7551', 'Consectetur maiores', '2024-06-27 07:27:31', '2024-06-27 07:27:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_lists`
--
ALTER TABLE `data_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_lists`
--
ALTER TABLE `data_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
