-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 يوليو 2024 الساعة 17:59
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdata`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `id_number` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `duration_of_stay` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `id_number`, `email`, `duration_of_stay`) VALUES
(1, 'سلطان', 548112194, 2147483647, 'sumq2001@gmail.com', '10'),
(2, 'احمد', 537184298, 1163926104, 'test@gmail.com', '3'),
(3, 'علي', 542798531, 2147483647, 'test1@gmail.com', '6'),
(11, 'سعيد', 542852001, 1294836502, 'keke@gmail.com', '14'),
(16, 'عبدالعزيز', 549178277, 2147483647, 'abd3@outlook.com', '10'),
(24, 'sultan', 564213569, 2134579853, 'test@gmail.com', '2'),
(29, 'سمير', 541697422, 2022932293, 'sssss@gmail.com', '7'),
(30, 'سمير', 541697422, 2022932293, 'sssss@gmail.com', '7'),
(31, 'سمير', 541697422, 2022932293, 'sssss@gmail.com', '7'),
(35, 'سمير', 541697422, 2022932293, 'sssss@gmail.com', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
