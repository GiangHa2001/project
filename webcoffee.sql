-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 11, 2024 lúc 03:30 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webcoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgh` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `idsp` char(10) NOT NULL,
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `phone`, `email`) VALUES
(1, 'Giang', '1234', '0962256987', 'me@example.com'),
(2, 'Bình', '1234', '0962256986', 'binh@example.com'),
(3, 'long', '123456', '0962256987', '123456@gmail.com'),
(4, 'huybinh', '123', '0397956775', 'huybinh123@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` char(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `images` char(100) NOT NULL,
  `gia` float NOT NULL,
  `loaisp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `images`, `gia`, `loaisp`) VALUES
('S01', 'Latte Đào', 'dao.jpg', 26000, 'latte'),
('S02', 'Latte Dâu', 'dau.jpg', 26000, 'latte'),
('S03', 'Latte Matcha', 'matcha.jpg', 26000, 'latte'),
('S04', 'Yogurt Xoài', 'yg-xoai.png', 42000, 'latte'),
('S05', 'Matcha Đậu Đỏ', 'matchadaudo.jfif', 30000, 'trasua'),
('S06', 'Trà Sữa Truyền Thống', 'truyenthong.jfif', 30000, 'trasua'),
('S07', 'Trà Sữa Matcha', 'matcha1.png', 29000, 'trasua'),
('S08', 'Trà Sữa Olong', 'tsolong.png', 30000, 'trasua'),
('S09', 'Trà Sen', 'trasen.jpg', 32000, 'tra'),
('S10', 'Trà Đào', 'dao1.jpg', 30000, 'tra'),
('S11', 'Olong Hoàng Gia', 'ologhg.jpg', 32000, 'tra'),
('S12', 'Lục Trà Chanh', 'luctrachanh.jpg', 29000, 'tra'),
('S13', 'Trà Vải', 'tra_vai.png', 29000, 'tra'),
('S14', 'Trà Xoài', 'tra_xoai.png', 30000, 'tra'),
('S15', 'Trà Ổi Hồng', 'tra-oi-hong.jfif', 35000, 'tra'),
('S16', 'Trà Xoài Chanh Dây', 'xoai-chanh-day.jpg', 30000, 'tra'),
('S17', 'Trà Sữa Hoa Lài', 'tra_sua_hoa_lai.png', 30000, 'trasua'),
('S18', 'Trà Sữa Khoai Môn', 'trasuakhoaimon.png', 30000, 'trasua'),
('S19', 'Trà Sữa Thái Xanh', 'thai-xanh.png', 30000, 'trasua'),
('S20', 'Trà Sữa Lai Trứng Đậu Đỏ', 'trasualaitrungdaudo.png', 30000, 'trasua'),
('S21', 'Chocolate Oreo Đường Đen', 'cclateoreođuongen.png', 29000, 'latte'),
('S22', 'Latte Chocolate', 'chocolate-latte.png', 30000, 'latte'),
('S23', 'Lục Trà Creama', 'tra-xanh-lai-creama.png', 27000, 'latte'),
('S24', 'Yagurt Trân Châu Dâu', 'yo-dau.png', 42000, 'latte');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgh`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
