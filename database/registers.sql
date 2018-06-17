-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2018 at 04:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `stime` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `size` varchar(500) NOT NULL,
  `type` varchar(300) NOT NULL,
  `iname` varchar(300) NOT NULL,
  `isize` varchar(300) NOT NULL,
  `itype` varchar(300) NOT NULL,
  `id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`stime`, `name`, `size`, `type`, `iname`, `isize`, `itype`, `id`) VALUES
('Tollywoodsongs', '[iSongs.info] 03 - Nee Kallalona.mp3', '3809931', 'mp3', 'beach-beautiful-fun-5358.jpg', '3991146', 'image/jpeg', '3'),
('Bollywoodsongs', '01 - Swag Se Swagat - DownloadMing.SE.mp3', '3846272', 'mp3', 'black-wallpaper-dark-galaxy-14676.jpg', '303489', 'image/jpeg', '5'),
('FrenchSongs', 'Loustic_Rock_-_2000_pas_d_bile.mp3', '3770116', 'mp3', 'hannu-pekka-peuranen-1301-unsplash.jpg', '1012493', 'image/jpeg', '6'),
('Punjabisongs', '04 - Daata Tu - DownloadMing.SE.mp3', '4135040', 'mp3', '58757.jpg', '603048', 'image/jpeg', '9');

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(11) NOT NULL,
  `trn_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `stime` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `iname` varchar(1000) NOT NULL,
  `isize` varchar(1000) NOT NULL,
  `itype` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`stime`, `name`, `size`, `type`, `iname`, `isize`, `itype`, `id`) VALUES
('Tollywoodsongs', '02 - Hello [NaaSong.in].mp3', '3514538', 'mp3', 'file_name', '8782', 'image/jpeg', 0),
('Tollywoodsongs', 'Hey Ready - SenSongsMp3.Co.mp3', '6100477', 'mp3', 'file_name', '303489', 'image/jpeg', 3),
('Tollywoodsongs', '[iSongs.info] 01 - First Time.mp3', '4261634', 'mp3', '58757.jpg', '603048', 'image/jpeg', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
