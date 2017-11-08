-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2017 at 05:16 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE IF NOT EXISTS `data1` (
  `No` int(8) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Keperluan` text NOT NULL,
  `Telp` int(13) NOT NULL,
  `Alamat` text NOT NULL,
  `Waktu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`No`, `Nama`, `Keperluan`, `Telp`, `Alamat`, `Waktu`) VALUES
(1, 'Muafa', 'dasfasf', 242453, '6546456', '14 ');
