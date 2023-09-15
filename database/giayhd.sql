-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 15, 2023 lúc 11:15 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giayhd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'shophd', '123456789', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(5, 28, '2507', 1),
(11, 30, '9356', 1),
(12, 30, '9420', 1),
(13, 30, '4323', 1),
(19, 4, '5784', 0),
(20, 4, '4665', 1),
(21, 4, '731', 1),
(22, 16, '2722', 0),
(23, 4, '9596', 1),
(24, 1, '2821', 1),
(25, 1, '7986', 1),
(26, 1, '9458', 1),
(27, 1, '1747', 1),
(28, 1, '7995', 1),
(29, 1, '8686', 1),
(31, 1, '3070', 1),
(32, 1, '3668', 1),
(34, 1, '2677', 2),
(35, 1, '7277', 1),
(36, 1, '5178', 1),
(37, 1, '7527', 1),
(38, 1, '2708', 1),
(39, 1, '740', 0),
(40, 4, '9445', 0),
(41, 4, '3575', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(4, '2507', 14, 1),
(10, '9356', 23, 1),
(11, '9356', 24, 1),
(12, '9420', 22, 1),
(13, '4323', 14, 1),
(19, '5784', 15, 1),
(20, '4665', 15, 1),
(21, '731', 23, 1),
(22, '2722', 1, 1),
(23, '9596', 19, 1),
(24, '2821', 2, 1),
(25, '7986', 15, 1),
(26, '9458', 23, 1),
(27, '1747', 16, 1),
(28, '7995', 23, 1),
(29, '8686', 19, 1),
(32, '3070', 22, 1),
(33, '3668', 24, 1),
(35, '2677', 22, 1),
(36, '7277', 17, 1),
(37, '5178', 15, 1),
(38, '7527', 14, 1),
(39, '7527', 23, 1),
(40, '2708', 23, 1),
(41, '740', 18, 1),
(42, '9445', 23, 1),
(43, '3575', 23, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `taikhoan` varchar(225) NOT NULL,
  `matkhau` varchar(225) NOT NULL,
  `diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `dienthoai`, `email`, `taikhoan`, `matkhau`, `diachi`) VALUES
(1, '093477', 'datttt', 'hodat', '827ccb0eea8a706c4c34a16891f84e7b', 'vinh'),
(4, '039329', 'dsaerf', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'vinh'),
(6, '0394983163', 'dung12', 'dung', '827ccb0eea8a706c4c34a16891f84e7b', 'Vinh'),
(9, '7473', 'ddao01', 'dat1234', '827ccb0eea8a706c4c34a16891f84e7b', 'Yên Thành'),
(12, '0439934', 'dat12345', 'dat2362', '827ccb0eea8a706c4c34a16891f84e7b', 'cửa lò'),
(14, '323323', 'hd12', 'data', '827ccb0eea8a706c4c34a16891f84e7b', 'cửa lò'),
(15, '09544', 'datu', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'cửa lò'),
(16, '0492513547', '0328363401', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'oooo'),
(17, '0955686', 'dat@gmail.com', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'faf'),
(18, '09873272', 'dat@gmail.com', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'vinh'),
(19, '04394393', 'dat1@gmail.com', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'vinh'),
(20, '04394393', 'dat1@gmail.com', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'vinh'),
(21, '293248', 'd@gmail.com', 'datt', '827ccb0eea8a706c4c34a16891f84e7b', 'cửa lò'),
(22, '0393939', 'dat@gmail.com', 'dat', '827ccb0eea8a706c4c34a16891f84e7b', 'cửa lò'),
(23, '04044', 'dat1@gmail.com', 'dat123', '827ccb0eea8a706c4c34a16891f84e7b', 'vinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `logo`, `thutu`) VALUES
(1, 'Nike', '1654186310_1654162098_nike1.png', 1),
(2, 'Addias', '1654186324_1654185974_addias1.jpg', 2),
(3, 'Puma', '1654186335_1654162081_puma.jpg', 3),
(4, 'MLB', '1654186348_1654162072_mlb1.png', 4),
(5, 'Gucci', '1654186361_1654162044_gucci2.jpg', 5),
(16, 'Vans', '1654186371_1654185884_vans1.jpg', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(225) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `tomtat` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `size`, `tomtat`, `tinhtrang`, `id_danhmuc`) VALUES
(1, 'Nike Air Force 1', '00001', '500000', 499, '1651396680_nikeairforce1.jpg', 40, 'Giày Nike Air Force 1 Trắng Đen Đế Nâu Rep\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 1, 1),
(2, 'MLB White Blue', '00002', '300000', 499, '1651336091_mlbwhiteblue.jpg', 39, 'Giày Mlb white blue Rep 1:1\r\nThương hiệu: No brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp', 1, 4),
(3, 'Adidas Yeezy Static', '00003', '400000', 500, '1651336507_AdidasYeezyBoost350V2StaticRep.jpg', 42, 'Giày Adidas Yeezy Boost 350 V2 Static\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, Kiểu dáng phong cách', 1, 2),
(4, 'Puma Đen Trắng', '00004', '300000', 500, '1651336688_pumađentrắngcaocấp.jfif', 37, 'Giày Puma đen trắng cao cấp\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp', 1, 3),
(5, 'Nike Air Jordan 1', '00005', '400000', 500, '1653148147_1651398656_nikejordan1lowxanhdương.jpg', 41, 'Giày Nike Air Jordan 1 Low Xanh Dương\r\n\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, hợp thời trang', 1, 1),
(6, 'Vans Old Skool', '00006', '250000', 500, '1651397807_Vansoldskool.jpg', 36, 'Giày thể thao Van Old Skool\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp', 1, 16),
(7, 'Gucci Sơn Tùng ', '00007', '500000', 500, '1653147970_1651397996_guccisơntùngrep.jfif', 41, 'Giày Gucci Sơn Tùng Rep \r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, kiểu dáng phong cách', 1, 5),
(8, 'Nike Air Shadow', '00008', '600000', 500, '1651398422_giàythểthaonikeairshadowrep.jpg', 38, 'Giày Thể Thao Nike Air Shadow Rep\r\nThương hiệu: No brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, độ bền cao', 1, 1),
(9, 'Addias Eqt Bask Adv', '00009', '400000', 500, '1651398610_addiaseqtbaskadvxanhdương.jpg', 39, 'Addias Eqt Bask Adv Xanh Dương\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, hợp thời trang', 1, 2),
(10, 'Nike Jordan Hồng', '00010', '500000', 500, '1651413918_nikejordan1hồngđếnâu.jpg', 40, 'Giày Nike Air Jordan hồng đế nâu\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, độ bền cao', 1, 1),
(11, 'Gucci Rhyton Cream', '00011', '450000', 500, '1651415194_guccirhytoncream.jpg', 42, 'Giày Gucci Rhyton Cream F1\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, kiểu dáng phong cách', 1, 5),
(12, 'MLB Chunky Boston', '00012', '350000', 500, '1651416814_mlbbigballchunky.jpg', 39, 'Giày MLB Bigball Chunky Check Boston B \r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, độ bền cao', 1, 4),
(13, 'Vans Vault Caro ', '00013', '200000', 499, '1651415840_vansvaultslip.jpg', 37, 'Vans Vault Slip on Caro Đen Trắng REP\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, hợp thời trang', 1, 16),
(14, 'Adidas Ultra Boost', '00014', '350000', 495, '1651416147_adidasultra.jpg', 41, 'Giày XSPORT ADD Ultra Boost 6.0 REP\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, hợp thời trang', 1, 2),
(15, 'Puma RS-X3 Move', '00015', '250000', 495, '1651416424_pumars-x3.jpg', 38, 'Giày Puma RS-X3 Move\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, độ bền cao, kiểu dáng phong cách', 1, 3),
(16, 'Gucci ID Xanh ', '00016', '700000', 499, '1651416719_guccixanhdo.jpg', 40, 'Giày Gucci ID Trắng Xanh Đỏ Rep\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp', 1, 5),
(17, 'MLB Boston Rep', '00017', '400000', 499, '1651417309_mlbboston.jpg', 41, 'Giày thể thao Mlb Boston Rep\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, kiểu dáng phong cách', 1, 4),
(18, 'Vans Skool Kẻ Xanh', '00018', '200000', 498, '1651417629_vanstrangxanh.jpg', 38, 'Giày Thể Thao Vans Old Skool Vải trắng kẻ xanh mũi nỉ\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, hợp thời trang', 1, 16),
(19, 'Adidas Super Star', '00019', '300000', 497, '1651418166_adidassuperstar.jfif', 39, 'Giày Adidas Super Star\r\nRep\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp,\r\nđộ bền cao', 1, 2),
(20, 'Puma Trắng F1', '00020', '300000', 496, '1651418946_pumatrangf1.jpg', 38, 'Giày Puma Trắng F1 Rep\r\nThương hiệu: No Brand\r\nXuất xứ: Việt nam\r\nChất liệu cao cấp, kiểu dáng phong cách, độ bền cao', 1, 3),
(21, 'Gucci Star Bee', '00021', '350000', 500, '1651422868_guccitar.jpg', 38, 'Giày Gucci Star Bee Rep\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, kiểu dáng phong cách', 1, 5),
(22, 'Vans Skool Nâu', '00022', '250000', 496, '1651419461_vansnaube.jpg', 37, 'Giày Vans Old Skool Nâu\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, hợp thời trang', 1, 16),
(23, 'MLB NY Trắng', '00023', '400000', 489, '1651420822_mlbnyv.jfif', 40, 'Giày MLB NY Trắng Rep\r\nThương hiệu: No brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, độ bền cao, kiểu dáng phong cách', 1, 4),
(24, 'Puma Nâu F1', '00024', '300000', 495, '1651420022_pumawi.jfif', 36, 'Giày thể thao Puma Nâu F1\r\nThương hiệu: No Brand\r\nXuất xứ: Việt Nam\r\nChất liệu cao cấp, kiểu dáng phong cách', 1, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
