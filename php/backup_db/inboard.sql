-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-12-29 07:21
-- 서버 버전: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inboard`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `freeboard`
--

CREATE TABLE IF NOT EXISTS `freeboard` (
`no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `wdate` datetime NOT NULL,
  `ip` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`no` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userphone` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `freeboard`
--
ALTER TABLE `freeboard`
 ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `freeboard`
--
ALTER TABLE `freeboard`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
