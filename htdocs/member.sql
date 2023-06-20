-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-10-26 05:36:52
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
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `name` varchar(20) COLLATE big5_bin NOT NULL,
  `password` varchar(20) COLLATE big5_bin NOT NULL,
  `email` varchar(40) COLLATE big5_bin NOT NULL,
  `address` varchar(50) COLLATE big5_bin NOT NULL,
  `phone` varchar(10) COLLATE big5_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_bin;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`name`, `password`, `email`, `address`, `phone`) VALUES
('john', '123', '123@gmail.com', 'No.1台中市', '0999988883'),
('joe', '123', '123@gmail.com', 'No.1台中市', '0999988883'),
('marry', '123', '123@gmail.com', 'No.1台南', '0999988883'),
('three', '123', 'dff@gmail.com', '高雄', '0988877765'),
('李四', '123', 'dff@gmail.com', '大同路', '0988877765'),
('王六', '123', 'dff@gmail.com', '大同路', '0988877765'),
('王六', '123', 'dff@gmail.com', '大同路', '0988877765');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
