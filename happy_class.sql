-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-08 19:09:51
-- 服务器版本： 10.1.8-MariaDB
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_class`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_class`
--

CREATE TABLE IF NOT EXISTS `tp_class` (
  `id` int(11) NOT NULL COMMENT '唯一id',
  `name` varchar(30) NOT NULL COMMENT '班级名称',
  `info` text NOT NULL COMMENT '班级介绍',
  `cover` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_class`
--
ALTER TABLE `tp_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `image_origin` (`cover`),
  ADD UNIQUE KEY `video` (`video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_class`
--
ALTER TABLE `tp_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '唯一id';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
