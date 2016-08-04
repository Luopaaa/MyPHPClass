-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-08-04 14:36:13
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
-- 資料表結構 `orderno`
--

CREATE TABLE `orderno` (
  `id` int(5) NOT NULL,
  `adminid` int(5) NOT NULL,
  `userid` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `productid` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `orderNum` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `orderYear` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `orderMonth` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `orderDay` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `orderno`
--

INSERT INTO `orderno` (`id`, `adminid`, `userid`, `productid`, `orderNum`, `orderYear`, `orderMonth`, `orderDay`) VALUES
(53, 14, '1', '1', '2', '2016', '8', '4'),
(54, 14, '1', '2', '2', '2016', '8', '4'),
(55, 13, '2', '3', '3', '2016', '8', '4'),
(56, 13, '2', '4', '1', '2016', '8', '4'),
(57, 14, '3', '1', '1', '2016', '8', '4'),
(58, 3, '4', '2', '2', '2016', '8', '4'),
(59, 3, '5', '1', '30', '2016', '8', '4'),
(60, 3, '5', '1', '30', '2016', '8', '4'),
(61, 3, '5', '1', '3', '2016', '8', '4'),
(62, 3, '5', '2', '30', '2016', '8', '4');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `orderno`
--
ALTER TABLE `orderno`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `orderno`
--
ALTER TABLE `orderno`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
