-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018 m. Spa 12 d. 18:05
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `klientai`
--

CREATE TABLE `klientai` (
  `id` int(11) NOT NULL,
  `vardas` text NOT NULL,
  `telefonas` text NOT NULL,
  `email` varchar(320) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `klientai`
--

INSERT INTO `klientai` (`id`, `vardas`, `telefonas`, `email`, `message`) VALUES
(1, '', '', '', ''),
(2, 'asta', '5585555', 'asta@gmail.com', 'fghjkjhgfddfghjk'),
(3, '', '', '', ''),
(4, 'asta', '5585555', 'asta@gmail.com', 'hgffghjhgfxgjhgkj'),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'Dmitrij', '37067150170', 'feonornor@yandex.com', 'b'),
(9, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klientai`
--
ALTER TABLE `klientai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klientai`
--
ALTER TABLE `klientai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
