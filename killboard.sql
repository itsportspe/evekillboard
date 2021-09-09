-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 12:40 PM
-- Server version: 5.7.20
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `killboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `attackers`
--

CREATE TABLE `attackers` (
  `id` bigint(20) NOT NULL,
  `killmail_id` int(11) NOT NULL,
  `security_status` float NOT NULL,
  `final_blow` tinyint(1) NOT NULL,
  `damage_done` int(11) NOT NULL,
  `character_id` bigint(20) NOT NULL,
  `corporation_id` int(11) NOT NULL,
  `alliance_id` int(11) NOT NULL,
  `ship_type_id` int(11) NOT NULL,
  `weapon_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items00`
--

CREATE TABLE `items00` (
  `id` bigint(20) NOT NULL,
  `killmail_id` int(11) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `singleton` tinyint(1) NOT NULL,
  `flag` int(11) NOT NULL,
  `quantity_dropped` int(11) NOT NULL,
  `quantity_destroyed` int(11) NOT NULL,
  `ships_dropped` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items01`
--

CREATE TABLE `items01` (
  `id` bigint(20) NOT NULL,
  `killmail_id` int(11) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `singleton` tinyint(1) NOT NULL,
  `flag` int(11) NOT NULL,
  `quantity_dropped` int(11) NOT NULL,
  `quantity_destroyed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `killmail_id` int(11) NOT NULL,
  `killmail_time` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `character_id` int(11) NOT NULL,
  `corporation_id` int(11) NOT NULL,
  `alliance_id` int(11) NOT NULL,
  `damage_taken` int(11) NOT NULL,
  `solar_system_id` int(11) NOT NULL,
  `ship_type_id` int(11) NOT NULL,
  `esilink` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `json` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` bigint(20) NOT NULL,
  `killmail_id` int(11) NOT NULL,
  `x` double NOT NULL,
  `y` double NOT NULL,
  `z` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attackers`
--
ALTER TABLE `attackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items00`
--
ALTER TABLE `items00`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items01`
--
ALTER TABLE `items01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attackers`
--
ALTER TABLE `attackers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items00`
--
ALTER TABLE `items00`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items01`
--
ALTER TABLE `items01`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
