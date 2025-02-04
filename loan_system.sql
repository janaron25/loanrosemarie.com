-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 03:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `cellphone_number` varchar(15) DEFAULT NULL,
  `gcash_number` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `loan_amount` decimal(10,2) DEFAULT NULL,
  `installment` enum('7','15') DEFAULT NULL,
  `interest` decimal(5,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `status` enum('pending','paid') DEFAULT NULL,
  `due_penalties` decimal(10,2) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `loan_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `name`, `cellphone_number`, `gcash_number`, `address`, `loan_amount`, `installment`, `interest`, `total`, `status`, `due_penalties`, `due_date`, `loan_date`) VALUES
(9, 'Rosemarie Y. Butchayo', '09157407993', '09157407993', 'Bannawag Aurora Isabela', '1000.00', '7', '500.00', '1500.00', 'pending', NULL, '2025-02-11', '2025-02-04'),
(10, 'JOHN AARON DAGUIO GALINGANA', '09157407993', '09157407993', 'Bannawag Aurora Isabela', '2500.00', '15', '700.00', '3200.00', 'pending', NULL, '2025-02-19', '2025-02-04'),
(11, 'AARON DAGUIO GALINGANA', '09157407993', '09157407993', 'Bannawag Aurora Isabela', '2500.00', '7', '350.00', '2850.00', 'pending', NULL, '2025-02-11', '2025-02-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
