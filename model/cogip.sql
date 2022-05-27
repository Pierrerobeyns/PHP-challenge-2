-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2022 at 01:05 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cogip`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `vatnumber` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `phonecompany` varchar(15) NOT NULL,
  `typecompany` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company`, `country`, `vatnumber`, `phonecompany`, `typecompany`) VALUES
(1, 'Raviga', 'United States', 'US456 654 342', '555 4500', 'Supplier'),
(2, 'Mutiny', 'United States', 'US678 765 765', '555 7800', 'Client'),
(3, 'Hooli', 'France', 'FR 678 908 654', '555 4200', 'Supplier'),
(4, 'Phoque Off', 'Belgique', 'BE0876 654 665', '555 4510', 'Supplier'),
(5, 'Pied Piper ', 'France', 'FR 677 544 000', '555 0900', 'Client'),
(6, 'Belgalol', 'Belgique', 'BE0810 664 765', '555 4710', 'Supplier'),
(7, 'Proximdr', 'Belgique', 'BE0636 154 120', '068 48 00 00', 'Supplier'),
(8, 'Pierre Cailloux', 'France', 'FR 149 479 560', '06 84 76 14 00', 'Supplier'),
(9, 'Electricpower', 'Italy', 'IT154 486 760', '0340 123 4800', 'Supplier'),
(10, 'Dunder Mifflin', 'United States', 'US678 765 765', '555-9800', 'Client'),
(11, 'Jouets Jean-Michel', 'France', 'FR677 544 000', '06 85 67 74 00', 'Supplier'),
(12, 'Bob Vance Refrig', 'United States', 'US456 654 687', '555-1700', 'Client'),
(13, 'Belgatax', 'Belgique', 'BE148 596 286', '071 48 19 26', 'Supplier'),
(14, 'FranceAir', 'France', 'FR178 548 152', '01 48 14 54 18', 'Supplier'),
(15, 'JouetManga', 'United States', 'US178 258 196', '555 1486', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `numberinvoice` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `id_people` int(11) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `numberinvoice`, `date`, `id_people`, `id_company`) VALUES
(1, 'F20190404-004', '2019-04-04', 1, 1),
(2, 'F20190404-003', '2019-04-04', 2, 2),
(3, 'F20190404-002', '2019-04-04', 3, 3),
(4, 'F20190404-001', '2019-04-04', 4, 4),
(5, 'F20190403-654', '2019-04-03', 5, 5),
(6, 'F20170403-621', '2017-04-03', 6, 6),
(7, 'F20180404-010', '2018-04-04', 7, 7),
(8, 'F20190501-182', '2019-05-01', 8, 8),
(9, 'F20180403-002', '2018-04-03', 9, 9),
(10, 'F20190404-003', '2019-04-04', 10, 10),
(11, 'F20180414-003', '2018-04-14', 11, 10),
(12, 'F20170401-004', '2017-04-01', 12, 10),
(13, 'F20190404-005', '2019-04-04', 13, 11),
(14, 'F20170208-120', '2017-02-08', 14, 12);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `firstname`, `lastname`, `phone`, `email`, `id_company`) VALUES
(1, 'Peter ', 'Gregory', '555-4567', 'peter.gregory@raviga.com', 1),
(2, 'Cameron', 'Howe', '555-7869', 'cam.howe@mutiny.net', 2),
(3, 'Gavin', 'Belson', '555-4213', 'gavin@hooli.com', 3),
(4, 'Jian', 'Yang', '555-4567', 'jian.yang@phoque.off', 4),
(5, 'Bertram', 'Gilfoyle', '555-0987', 'gilfoyle@piedpiper.com', 5),
(6, 'John', 'Doe', '555-4725', 'John@belgalol.be', 6),
(7, 'Charles', 'Dupond', '068 48 49 12', 'chdp@proxi.be', 7),
(8, 'Pierre', 'Cailloux', '06 84 76 14 15', 'pierreC@pc.fr', 8),
(9, 'Monica', 'Florenzi', '0340 123 4851', 'monica@electricpower.it', 9),
(10, 'Dwight', 'Schrute', '555-9859', 'dwight.schrute@ddmfl.com', 10),
(11, 'Kelly', 'Kapoor', '555-9858', 'kelly.kapoor@ddmfl.com', 10),
(12, 'Creed', 'Bratton', '555-9856', 'creed.bratton@ddmfl.com', 10),
(13, 'Meredith', 'Palmer', '06 85 67 74 58', 'meredithpalmer@jouetsjm.fr', 11),
(14, 'Bob', 'Vance', '555-1759', 'bobvance@refrig.com', 12);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `id_company` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`, `id_company`) VALUES
(1, 'Supplier', 1),
(2, 'Client', 2),
(3, 'Supplier', 3),
(4, 'Supplier', 4),
(5, 'Client', 5),
(6, 'Supplier', 6),
(7, 'Supplier', 7),
(8, 'Supplier', 8),
(9, 'Supplier', 9),
(10, 'Client', 10),
(11, 'Client', 10),
(12, 'Client', 10),
(13, 'Supplier', 11),
(14, 'Client', 12),
(15, 'Supplier', 13),
(16, 'Supplier', 14),
(17, 'Client', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `lastname`, `firstname`, `mail`, `password`) VALUES
('jean-christian-ranu', 'Ranu', 'Jean-Christian', 'jcr@cogip-admin.net', '$2y$10$qco3D3oE0zeBb9RlGHpUp.Yg.LhK2DWF0pu03hzihEH/tPTiHejse'),
('muriel-perrache', 'Perrache', 'Muriel', 'mp@cogip.net', '$2y$10$D0E10BzHc3vABFQX7e5PyOtp3wko3lBsz2RXDkPq4tbISmmdG6nFi'),
('test', 'test', 'test', 'test', '$2y$10$CcozMZuk9UnNwFK/slUmD.r6kEmZtvM1KLNGznosbOT1VsbNsHHzy'),
('test', 'test', 'test', 'test1', '$2y$10$gOoBu7FoWYpstt25PkzEnu8SnBlQ0gkyJIYFrQYm285zE.A/u2VM.'),
('test', 'test', 'test', 'test23', '$2y$10$0KapRIJibwWuxPQAFr8GH.BZ49myW6mFSHoeMH84GqzhW3bhmY7pq'),
('test', 'test', 'test', 'test233', '$2y$10$8egGRy3Q4qAo5HCJFzkXOu9.1ouCxSzvN/TlyYrtZ2YuDuorPnKhy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typecompany` (`typecompany`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_people` (`id_people`,`id_company`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`id_people`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
