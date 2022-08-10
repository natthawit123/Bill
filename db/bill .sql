-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 05:30 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `id` int(10) NOT NULL,
  `projact_bill` varchar(200) NOT NULL,
  `item_bill` varchar(200) NOT NULL,
  `list_bill` varchar(200) NOT NULL,
  `bill_date` varchar(200) NOT NULL,
  `payment_due` varchar(200) NOT NULL,
  `vat_bill` varchar(200) NOT NULL,
  `vat_amount` varchar(200) NOT NULL,
  `total_amount` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`id`, `projact_bill`, `item_bill`, `list_bill`, `bill_date`, `payment_due`, `vat_bill`, `vat_amount`, `total_amount`, `note`) VALUES
(73, 'fvfdxbfdbfbd', '1', 'esdfrsdfv', '2021-02-17', '2021-02-27', '20000', '1400', '21400', '....'),
(74, 'fvfdxbfdbfbd', '2', '11122555', '2021-02-17', '2021-02-27', '20000', '1400', '21400', '....'),
(97, 'fvfdxbfdbfb1234', '1', 'esdfrsdfv', '', '', '20000', '1400', '21400', ''),
(98, 'fvfdxbfdbfb1234', '2', '11122555', '', '', '20000', '1400', '21400', ''),
(99, 'fvfdxbfdbfb1234', '3', 'esdfrsdfv0', '', '', '20000', '1400', '21400', ''),
(100, 'fvfdxbfdbfb1234', '4', 'qwadfsedf', '', '', '20000', '1400', '21400', '....'),
(101, 'fvfdxbfdbfbd', '3', 'efdsf', '2021-02-18', '2021-03-13', '20000', '1400', '21400', '....'),
(102, 'fvfdxbfdbfbd', '4', 'ynjnry', '2021-02-18', '2021-03-13', '20000', '1400', '21400', '....'),
(103, 'ouonmlkm', '1', '11122555', '2021-02-18', '2021-02-27', '199999', '13999.93', '213998.93', '....'),
(104, 'ouonmlkm', '2', 'esdfrsdfv1', '2021-02-18', '2021-02-27', '199999', '13999.93', '213998.93', '....'),
(105, 'ouonmlkm', '3', '5rhrtjytgjtyg', '', '', '1999', '139.93', '2138.93', '....'),
(106, 'fvfdxbfdbfbd', '5', '11122555', '', '', '200000', '14000', '214000', ''),
(107, 'ouonmlkm13', '1', '11122555', '2021-02-20', '2021-02-27', '199999', '13999.93', '213998.93', '....'),
(108, 'ouonmlkm13', '2', 'esdfrsdfv', '2021-02-20', '2021-02-27', '199999', '13999.93', '213998.93', '....'),
(109, 'ouonmlkm13', '3', 'esdfrsdfv0', '2021-02-20', '2021-02-27', '199999', '13999.93', '213998.93', '....'),
(110, 'ouonmlkm13', '4', 'esdfrsdfv1', '2021-02-20', '2021-02-27', '199999', '13999.93', '213998.93', '....'),
(111, 'ouonmlkm13', '5', 'sdfsdfsdf', '2021-02-20', '2021-02-27', '20000', '1400', '21400', '....');

-- --------------------------------------------------------

--
-- Table structure for table `bill_tbl`
--

CREATE TABLE `bill_tbl` (
  `id` int(10) NOT NULL,
  `projact_bill` varchar(255) NOT NULL,
  `no_bill` varchar(255) NOT NULL,
  `date_bill` date NOT NULL,
  `namecus_bill` varchar(255) NOT NULL,
  `address_bill` text NOT NULL,
  `idtax_bill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_tbl`
--

INSERT INTO `bill_tbl` (`id`, `projact_bill`, `no_bill`, `date_bill`, `namecus_bill`, `address_bill`, `idtax_bill`) VALUES
(24, 'fvfdxbfdbfbd', '01', '2021-02-17', 'สมชัย โพธ์พิมท์', '', '9865653168151'),
(28, 'fvfdxbfdbfb1234', '02', '2021-02-17', 'ศรัญญา เผ่าภูรี', '141', '851631651651'),
(29, 'ouonmlkm', '03', '2021-02-18', 'มนัสนันท์ ชนันธรศิริ', '141/20 54162132132132132132132', '6165151269815'),
(30, 'ouonmlkm13', '04', '2021-02-20', 'ธนวัฒน์ โครตวงษา', '141', '851631651651');

-- --------------------------------------------------------

--
-- Table structure for table `bill_total`
--

CREATE TABLE `bill_total` (
  `id` int(11) NOT NULL,
  `projact_bill` varchar(200) NOT NULL,
  `total_bill` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_total`
--

INSERT INTO `bill_total` (`id`, `projact_bill`, `total_bill`) VALUES
(22, 'fvfdxbfdbfbd', '299600'),
(30, 'fvfdxbfdbfb1234', '85600'),
(31, 'ouonmlkm', '430134'),
(32, 'ouonmlkm13', '877392');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_total`
--
ALTER TABLE `bill_total`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `bill_total`
--
ALTER TABLE `bill_total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
