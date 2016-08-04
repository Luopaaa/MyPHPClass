-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-08-02 08:47:10
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `budget`
--

-- --------------------------------------------------------

--
-- 資料表結構 `userdata`
--

CREATE TABLE `userdata` (
  `id` int(3) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `english_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `passportnum` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `english_name`, `birthday`, `passportnum`, `phone`, `address`, `email`) VALUES
(1, 'steven', 'Rickylou', '1994/4/18', '2256365897', '0930960418', 'dsfsdfsd', 'ppp01231@gmail.com'),
(2, 'Jenny', 'Rickylou', '1995/5/30', '2256365897', '22620367', 'dsfsdfsd', '01208006'),
(3, 'é™³ä¸–ç¾Ž', 'beauti', '1352', '221555', '23115', '26568', '323232323'),
(4, 'é™³å°', 'sho', '26d5s', '', '', '', ''),
(5, 'é™³å°', 'sho', '26d5s', '', '', '', ''),
(6, 'é™³å°', 'sho', '26d5s', '4242', '4442', '4545454', '242424'),
(7, 'Jenny', 'beauti', '1995/5/30', '221555', '22620367', '26568', 'ppp01231@yahoo.com.tw'),
(8, 'Jenny', 'beauti', '1995/5/30', '221555', '22620367', '26568', 'ppp01231@yahoo.com.tw'),
(9, '', '', '', '', '', '', ''),
(10, 'steven', 'sho', '2032', '221555', '22565854', '4545454', 'ppp01231@yahoo.com.tw');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
