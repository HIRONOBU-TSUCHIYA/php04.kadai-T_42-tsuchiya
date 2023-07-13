-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-07-13 04:12:55
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `tsuchiya_transport`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tsuchiya_user_table`
--

CREATE TABLE `tsuchiya_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tsuchiya_user_table`
--

INSERT INTO `tsuchiya_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, '管理者', 'tsuchiya', 'transport', 1, 0),
(2, '管理職', 'tsuchiya', 'manager', 1, 0),
(3, '事務職', 'tsuchiya', 'jimu', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `tsuchiya_user_table`
--
ALTER TABLE `tsuchiya_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `tsuchiya_user_table`
--
ALTER TABLE `tsuchiya_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
