-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-07-13 04:14:15
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
-- テーブルの構造 `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `age` int(11) NOT NULL,
  `kikkake` text NOT NULL,
  `douki` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `contact_table`
--

INSERT INTO `contact_table` (`id`, `date`, `name`, `email`, `age`, `kikkake`, `douki`, `text`) VALUES
(2, '2023-07-13', 'デンゼル・ワシントンDC', 'info@honda.net', 42, '看板', '現在もトラックに乗っている', '特になし'),
(3, '2023-07-13', '新渡戸稲造', 'nitobe.com', 32, '看板', '物流に関連する仕事をしたい', '5000円以上稼ぎたい。'),
(4, '2023-07-10', '福沢諭吉', 'fukuzawa@yenyen.com.', 33, '運転手の紹介', 'トラックに乗ってみたい', '10000円以上稼ぎたいです。'),
(5, '2023-07-03', '夏目漱石', 'wagahai-cat@noname.', 23, 'ＳＮＳ', '将来的には管理職になりたい', '時給1000円は欲しいです。');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
