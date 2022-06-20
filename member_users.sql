-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 20 日 08:34
-- 伺服器版本： 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1110204`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member_users`
--

CREATE TABLE `member_users` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '會員編號',
  `account` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `nick` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '暱稱',
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電話',
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電子信箱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member_users`
--

INSERT INTO `member_users` (`id`, `account`, `nick`, `name`, `password`, `phone`, `email`) VALUES
(1, 'admin', '寒天飲冰泉', '林旻汎', 'admin', '0939646359', 'cvse00566@gmail.com'),
(2, 'test01', '悟空', '孫悟空', '1234', '0939646359', 'cvse00567@gmail.com'),
(3, 'test02', '悟天', 'test02', '1234', '1234', 'cvse00568@gmail.com'),
(6, 'test05', '', 'test05', '1234', '', 'cvse00571@gmail.com'),
(7, 'ad', 'a', '', '1234', 'a', 'a123@gmail.com'),
(8, 'aaa', 'a', 'a', '1234', 'a', 'cvse00572@gmail.com'),
(9, 'aa', '悟飯', '孫悟飯', '1234', '0939646359', 'a124@gmail.com'),
(11, 'test06', '特南克斯', '特南克斯', '674f3c2c1a8a6f90461e8a66fb5550ba', '0939646359', 'a1234@gmail.com');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member_users`
--
ALTER TABLE `member_users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_users`
--
ALTER TABLE `member_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '會員編號', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
