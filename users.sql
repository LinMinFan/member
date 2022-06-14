-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-14 02:04:57
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `member`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '會員編號',
  `account` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `nick` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '暱稱',
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `password` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電話',
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電子信箱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `nick`, `name`, `password`, `phone`, `email`) VALUES
(1, 'admin', '寒天飲冰泉', '林旻汎', 'admin', '0939646359', 'cvse00566@gmail.com'),
(2, 'test01', '悟空', '孫悟空', '1234', '0939646359', 'cvse00567@gmail.com'),
(3, 'test02', '', 'test02', '1234', '', 'cvse00568@gmail.com'),
(4, 'test03', '', 'test03', '1234', '', 'cvse00569@gmail.com'),
(5, 'test04', '', 'test04', '1234', '', 'cvse00570@gmail.com'),
(6, 'test05', '', 'test05', '1234', '', 'cvse00571@gmail.com'),
(7, 'ad', 'a', '', '1234', 'a', 'a123@gmail.com'),
(8, 'aaa', 'a', 'a', '1234', 'a', 'cvse00572@gmail.com'),
(9, 'aa', '悟飯', '孫悟飯', '1234', '0939646359', 'a124@gmail.com');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '會員編號', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
