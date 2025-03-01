-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 12, 2022 lúc 10:41 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `students`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `_id` int(11) NOT NULL,
  `studentCode` text NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `birthdate` date NOT NULL,
  `gender` text NOT NULL,
  `courseCode` text NOT NULL,
  `scoreStudent` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`_id`, `studentCode`, `firstName`, `lastName`, `birthdate`, `gender`, `courseCode`, `scoreStudent`) VALUES
(69, 's1', 'Nguyen Tung', 'Duong', '2000-05-25', 'Nam', 'CNTT', '{\"math\":\"8\",\"literature\":\"9\",\"english\":\"10\",\"chemistry\":\"8\"}'),
(70, 's2', 'Nguyen Van', 'Tung', '2000-12-04', 'Nam', 'CNTT', '{\"math\":\"9\",\"literature\":\"9\",\"english\":\"7\",\"chemistry\":\"8\"}'),
(71, 's3', 'Nguyen Thi', 'Nam', '3221-02-04', 'Nữ', 'CODE', '{\"math\":\"10\",\"literature\":\"4\",\"english\":\"7\"}'),
(72, 's4', 'Nguyen Hoang', 'Anh', '4214-04-21', 'Nam', 'CODE', '{\"math\":\"7\",\"literature\":\"8\",\"english\":\"8\"}'),
(80, 's5', 'Hoang', 'Nam', '2222-12-01', 'Nam', 'CODE', '{\"math\":\"9\",\"literature\":\"9\",\"english\":\"9\"}'),
(82, 's6', 'Nguyen', 'Khoi', '1211-12-04', 'Nam', 'CDDC', '{\"math\":\"10\",\"literature\":\"9\",\"english\":\"8\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Subject`
--

CREATE TABLE `Subject` (
  `_id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Subject`
--

INSERT INTO `Subject` (`_id`, `name`) VALUES
(1, 'math'),
(2, 'literature'),
(3, 'english'),
(5, 'chemistry');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`_id`);

--
-- Chỉ mục cho bảng `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `Subject`
--
ALTER TABLE `Subject`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
