-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2023 lúc 08:27 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myphamshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBinhLuan` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `NgayBinhLuan` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`MaBinhLuan`, `NoiDung`, `MaKhachHang`, `MaSanPham`, `NgayBinhLuan`) VALUES
(2, 'váy rất đẹp', 2, 13, '2023-10-18 15:37:58'),
(3, 'sản phẩm tốt', 2, 8, '2023-10-18 15:44:45'),
(4, 'sản phẩm có giá tốt', 2, 8, '2023-10-18 15:45:36'),
(5, 'váy rất đẹp', 2, 6, '2023-10-19 14:32:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTietDH` int(11) NOT NULL,
  `MaDonHang` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaChiTietDH`, `MaDonHang`, `MaSanPham`, `SoLuong`, `GiaBan`) VALUES
(4, 18, 7, 1, 450000),
(5, 18, 10, 1, 330000),
(6, 19, 14, 1, 370000),
(7, 19, 7, 2, 450000),
(8, 31, 7, 2, 450000),
(9, 31, 11, 4, 550000),
(10, 31, 16, 1, 240000),
(13, 33, 11, 1, 550000),
(14, 33, 6, 2, 400000),
(15, 33, 12, 2, 380000),
(16, 34, 10, 1, 330000),
(17, 34, 15, 2, 360000),
(18, 34, 16, 5, 240000),
(19, 782805119, 52, 2, 130000),
(20, 782805119, 6, 1, 400000),
(21, 520570855, 5, 2, 500000),
(22, 527268429, 5, 2, 500000),
(23, 469237198, 5, 2, 500000),
(24, 938805473, 5, 2, 500000),
(25, 512802048, 5, 2, 500000),
(26, 135334728, 5, 2, 500000),
(27, 887092537, 5, 2, 500000),
(28, 278126693, 5, 2, 500000),
(29, 746916909, 5, 2, 500000),
(30, 815676402, 5, 2, 500000),
(31, 527985424, 5, 2, 500000),
(32, 527985424, 23, 1, 250000),
(33, 527985424, 8, 1, 350000),
(34, 257821922, 5, 2, 500000),
(35, 257821922, 23, 1, 250000),
(36, 257821922, 8, 1, 350000),
(37, 448470797, 5, 2, 500000),
(38, 448470797, 23, 1, 250000),
(39, 448470797, 8, 1, 350000),
(41, 632901545, 5, 5, 500000),
(42, 632901545, 23, 1, 250000),
(43, 632901545, 8, 1, 350000),
(44, 636053463, 5, 5, 500000),
(45, 636053463, 23, 1, 250000),
(46, 636053463, 8, 1, 350000),
(47, 568291909, 5, 6, 500000),
(50, 998672714, 5, 6, 500000),
(51, 347474874, 11, 5, 550000),
(52, 471547055, 11, 5, 550000),
(53, 471547055, 5, 5, 500000),
(55, 271254137, 11, 5, 550000),
(56, 271254137, 5, 5, 500000),
(57, 926774792, 11, 5, 550000),
(58, 926774792, 5, 5, 500000),
(59, 232916131, 11, 5, 550000),
(60, 232916131, 5, 5, 500000),
(61, 294629698, 11, 3, 550000),
(62, 294629698, 5, 4, 500000),
(63, 294629698, 6, 3, 400000),
(64, 710929670, 11, 3, 550000),
(65, 710929670, 5, 4, 500000),
(66, 710929670, 6, 3, 400000),
(67, 410637719, 11, 3, 550000),
(68, 410637719, 5, 4, 500000),
(69, 410637719, 6, 3, 400000),
(70, 750423403, 11, 3, 550000),
(71, 750423403, 5, 4, 500000),
(72, 750423403, 6, 3, 400000),
(73, 584955636, 11, 3, 550000),
(74, 584955636, 5, 4, 500000),
(75, 584955636, 6, 3, 400000),
(76, 222901412, 11, 3, 550000),
(77, 222901412, 5, 4, 500000),
(78, 222901412, 6, 3, 400000),
(79, 249506670, 11, 5, 550000),
(80, 249506670, 5, 4, 500000),
(81, 249506670, 6, 3, 400000),
(82, 574741318, 11, 10, 550000),
(83, 574741318, 5, 4, 500000),
(84, 574741318, 6, 3, 400000),
(85, 426697895, 11, 10, 550000),
(86, 426697895, 5, 4, 500000),
(87, 426697895, 6, 3, 400000),
(88, 262026107, 11, 10, 550000),
(89, 262026107, 6, 5, 400000),
(90, 796266182, 11, 10, 550000),
(91, 796266182, 6, 5, 400000),
(92, 171920368, 11, 10, 550000),
(93, 171920368, 6, 5, 400000),
(94, 418180024, 11, 11, 550000),
(95, 418180024, 6, 5, 400000),
(96, 627472374, 11, 11, 550000),
(97, 627472374, 6, 5, 400000),
(98, 745190571, 5, 1, 500000),
(99, 740236294, 5, 1, 500000),
(100, 946642885, 5, 1, 500000),
(101, 647926661, 5, 2, 500000),
(102, 384776712, 5, 2, 500000),
(103, 384776712, 6, 2, 400000),
(104, 600981324, 5, 2, 500000),
(105, 600981324, 6, 2, 400000),
(106, 600981324, 52, 1, 130000),
(107, 722801569, 5, 2, 500000),
(108, 722801569, 6, 2, 400000),
(109, 722801569, 52, 1, 130000),
(110, 440696307, 5, 3, 500000),
(111, 440696307, 6, 3, 400000),
(112, 440696307, 52, 1, 130000),
(113, 643877725, 5, 3, 500000),
(114, 643877725, 6, 3, 400000),
(115, 643877725, 52, 1, 130000),
(116, 289158003, 5, 4, 500000),
(117, 289158003, 6, 3, 400000),
(118, 289158003, 52, 1, 130000),
(119, 392406233, 5, 4, 500000),
(120, 392406233, 6, 3, 400000),
(121, 392406233, 52, 1, 130000),
(122, 636483898, 5, 4, 500000),
(123, 636483898, 6, 3, 400000),
(124, 636483898, 52, 1, 130000),
(125, 797205563, 5, 4, 500000),
(126, 797205563, 6, 3, 400000),
(127, 797205563, 52, 1, 130000),
(128, 734521704, 5, 50, 500000),
(129, 734521704, 6, 3, 400000),
(130, 734521704, 52, 1, 130000),
(131, 217395560, 5, 50, 500000),
(132, 217395560, 6, 3, 400000),
(133, 217395560, 52, 1, 130000),
(134, 878435734, 6, 3, 400000),
(135, 878435734, 52, 1, 130000),
(136, 878435734, 23, 2, 250000),
(137, 894800558, 6, 3, 400000),
(138, 894800558, 52, 1, 130000),
(139, 894800558, 23, 2, 250000),
(140, 894800558, 25, 1, 350000),
(141, 858403523, 6, 3, 400000),
(142, 858403523, 52, 1, 130000),
(143, 858403523, 23, 2, 250000),
(144, 858403523, 25, 1, 350000),
(145, 856787672, 6, 3, 400000),
(146, 856787672, 52, 2, 130000),
(147, 856787672, 23, 2, 250000),
(148, 856787672, 25, 1, 350000),
(149, 791900468, 6, 2, 400000),
(150, 598337254, 6, 2, 400000),
(151, 212676745, 5, 2, 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) NOT NULL,
  `HinhAnh` text NOT NULL,
  `TrangThai` varchar(100) NOT NULL DEFAULT 'Đang hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`, `HinhAnh`, `TrangThai`) VALUES
(1, 'CHĂM SÓC CÁ NHÂN', 'dm1.jpg', 'Đang hoạt động'),
(2, 'CHĂM SÓC CÁ NHÂN', 'banner3.jpg', 'Đang hoạt động'),
(3, 'CHĂM SÓC TÓC', 'banner2.jpg', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `NgayDatHang` datetime NOT NULL DEFAULT current_timestamp(),
  `MaKhachHang` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TrangThai` varchar(100) NOT NULL DEFAULT 'Đang chờ xử lý',
  `GhiChu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDonHang`, `NgayDatHang`, `MaKhachHang`, `TongTien`, `TrangThai`, `GhiChu`) VALUES
(18, '2023-08-30 09:06:26', 1, 780000, 'Đang chờ xử lý', ''),
(19, '2023-08-30 14:32:09', 2, 1270000, 'Đang chờ xử lý', 'Nhớ chuyển trước 7h'),
(20, '2023-09-07 22:50:47', 1, 450000, 'Đã duyệt đơn hàng', ''),
(21, '2023-09-07 23:10:08', 1, 900000, 'Đang chờ xử lý', ''),
(22, '2023-09-07 23:10:24', 1, 900000, 'Đang giao hàng', ''),
(23, '2023-09-07 23:12:43', 1, 1450000, 'Đã duyệt đơn hàng', ''),
(24, '2023-09-07 23:18:27', 1, 3100000, 'Đã hủy', ''),
(25, '2023-09-07 23:19:16', 1, 3340000, 'Đã giao hàng', ''),
(26, '2023-09-07 23:20:05', 1, 3340000, 'Đang giao hàng', ''),
(27, '2023-09-07 23:21:03', 1, 3340000, 'Đã hủy', ''),
(28, '2023-09-07 23:22:39', 1, 3340000, 'Đã giao hàng', ''),
(29, '2023-09-07 23:34:46', 1, 3340000, 'Đã hủy', ''),
(30, '2023-09-07 23:35:09', 1, 3340000, 'Đã giao hàng', ''),
(31, '2023-09-07 23:36:18', 1, 3340000, 'Đã giao hàng', ''),
(33, '2023-09-24 15:13:45', 2, 2110000, 'Đã giao hàng', ''),
(34, '2023-09-24 15:25:04', 2, 2250000, 'Đang chờ xử lý', ''),
(135334728, '2023-12-05 03:31:33', 1, 1030000, 'Đang chờ xử lý', NULL),
(171920368, '2023-12-05 05:56:47', 2, 7530000, 'Đang chờ xử lý', NULL),
(212676745, '2023-12-05 10:37:29', 1, 1030000, 'Đang chờ xử lý', NULL),
(217395560, '2023-12-05 09:42:01', 2, 26360000, 'Đang chờ xử lý', NULL),
(222901412, '2023-12-05 05:51:30', 2, 4880000, 'Đang chờ xử lý', NULL),
(232916131, '2023-12-05 05:45:15', 2, 5280000, 'Đang chờ xử lý', NULL),
(249506670, '2023-12-05 05:52:15', 2, 5980000, 'Đang chờ xử lý', NULL),
(257821922, '2023-12-05 03:33:47', 1, 1630000, 'Đang chờ xử lý', NULL),
(262026107, '2023-12-05 05:54:14', 2, 7530000, 'Đang chờ xử lý', NULL),
(271254137, '2023-12-05 05:42:39', 2, 5280000, 'Đang chờ xử lý', NULL),
(278126693, '2023-12-05 03:31:34', 1, 1030000, 'Đang chờ xử lý', NULL),
(289158003, '2023-12-05 07:46:59', 2, 3360000, 'Đang chờ xử lý', NULL),
(294629698, '2023-12-05 05:46:02', 2, 4880000, 'Đang chờ xử lý', NULL),
(347474874, '2023-12-05 05:36:08', 2, 2780000, 'Đang chờ xử lý', NULL),
(384776712, '2023-12-05 07:25:10', 2, 1830000, 'Đang chờ xử lý', NULL),
(392406233, '2023-12-05 08:04:56', 2, 3360000, 'Đang chờ xử lý', NULL),
(410637719, '2023-12-05 05:46:35', 2, 4880000, 'Đang chờ xử lý', NULL),
(418180024, '2023-12-05 05:57:46', 2, 8080000, 'Đang chờ xử lý', NULL),
(426697895, '2023-12-05 05:53:46', 2, 8730000, 'Đang chờ xử lý', NULL),
(440696307, '2023-12-05 07:41:39', 2, 2860000, 'Đang chờ xử lý', NULL),
(448470797, '2023-12-05 03:34:26', 1, 1630000, 'Đang chờ xử lý', NULL),
(469237198, '2023-12-05 03:31:33', 1, 1030000, 'Đang chờ xử lý', NULL),
(471547055, '2023-12-05 05:36:46', 2, 5280000, 'Đang chờ xử lý', NULL),
(512802048, '2023-12-05 03:31:33', 1, 1030000, 'Đang chờ xử lý', NULL),
(520570855, '2023-12-05 03:29:05', 1, 1030000, 'Đang chờ xử lý', NULL),
(527268429, '2023-12-05 03:31:32', 1, 1030000, 'Đang chờ xử lý', NULL),
(527985424, '2023-12-05 03:32:34', 1, 1630000, 'Đang chờ xử lý', NULL),
(568291909, '2023-12-05 05:33:03', 2, 3030000, 'Đang chờ xử lý', NULL),
(574741318, '2023-12-05 05:52:44', 2, 8730000, 'Đang chờ xử lý', NULL),
(584955636, '2023-12-05 05:50:58', 2, 4880000, 'Đang chờ xử lý', NULL),
(598337254, '2023-12-05 10:36:11', 1, 830000, 'Đang chờ xử lý', NULL),
(600981324, '2023-12-05 07:35:55', 2, 1960000, 'Đang chờ xử lý', NULL),
(627472374, '2023-12-05 05:58:04', 2, 8080000, 'Đang chờ xử lý', NULL),
(632901545, '2023-12-05 03:42:12', 1, 3130000, 'Đang chờ xử lý', NULL),
(636053463, '2023-12-05 03:46:18', 1, 3130000, 'Đang chờ xử lý', NULL),
(636483898, '2023-12-05 09:10:44', 2, 3360000, 'Đang chờ xử lý', NULL),
(643877725, '2023-12-05 07:46:49', 2, 2860000, 'Đang chờ xử lý', NULL),
(647926661, '2023-12-05 07:23:27', 2, 1030000, 'Đang chờ xử lý', NULL),
(710929670, '2023-12-05 05:46:32', 2, 4880000, 'Đang chờ xử lý', NULL),
(722801569, '2023-12-05 07:41:27', 2, 1960000, 'Đang chờ xử lý', NULL),
(734521704, '2023-12-05 09:40:34', 2, 26360000, 'Đang chờ xử lý', NULL),
(740236294, '2023-12-05 07:22:46', 2, 530000, 'Đang chờ xử lý', NULL),
(745190571, '2023-12-05 05:58:29', 2, 530000, 'Đang chờ xử lý', NULL),
(746916909, '2023-12-05 03:31:34', 1, 1030000, 'Đang chờ xử lý', NULL),
(750423403, '2023-12-05 05:46:38', 2, 4880000, 'Đang chờ xử lý', NULL),
(782805119, '2023-12-05 03:28:03', 1, 690000, 'Đang chờ xử lý', NULL),
(791900468, '2023-12-05 10:36:04', 1, 830000, 'Đang chờ xử lý', NULL),
(796266182, '2023-12-05 05:56:28', 2, 7530000, 'Đang chờ xử lý', NULL),
(797205563, '2023-12-05 09:39:58', 2, 3360000, 'Đang chờ xử lý', NULL),
(815676402, '2023-12-05 03:32:04', 1, 1030000, 'Đang chờ xử lý', NULL),
(856787672, '2023-12-05 10:06:59', 30, 2340000, 'Đang chờ xử lý', NULL),
(858403523, '2023-12-05 09:58:54', 2, 2210000, 'Đang chờ xử lý', NULL),
(878435734, '2023-12-05 09:42:21', 2, 1860000, 'Đang chờ xử lý', NULL),
(887092537, '2023-12-05 03:31:33', 1, 1030000, 'Đang chờ xử lý', NULL),
(894800558, '2023-12-05 09:57:59', 2, 2210000, 'Đang chờ xử lý', NULL),
(926774792, '2023-12-05 05:44:20', 2, 5280000, 'Đang chờ xử lý', NULL),
(938805473, '2023-12-05 03:31:33', 1, 1030000, 'Đang chờ xử lý', NULL),
(946642885, '2023-12-05 07:22:56', 2, 530000, 'Đang chờ xử lý', NULL),
(998672714, '2023-12-05 05:35:40', 2, 3030000, 'Đang chờ xử lý', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `SDT` varchar(100) DEFAULT NULL,
  `Admin` int(1) NOT NULL DEFAULT 0,
  `Anh` varchar(100) DEFAULT NULL,
  `TrangThai` int(1) NOT NULL DEFAULT 1,
  `reset_token` varchar(225) NOT NULL,
  `token_expiry` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `Email`, `MatKhau`, `HoTen`, `DiaChi`, `SDT`, `Admin`, `Anh`, `TrangThai`, `reset_token`, `token_expiry`) VALUES
(1, 'admin@gmail.com', 'pass', 'administrator', 'HCM', '0987654321', 1, 'admin.png', 1, '', ''),
(2, 'khachhang@gmail.com', '123', 'Nguyễn Thị Phương', 'Quận 12, HCM', '0987654321', 0, '3df98a9990ae777a85a708776498fee3.jpg', 1, '', ''),
(23, 'khachhang2@gmail.com', 'ntrhvrgz', 'khách hàng 2', 'hcm', '1234567890', 0, '3d2d6e5e1e11cd6327777c32ba632ecb.jpg', 0, '', ''),
(30, 'hungpham3062004@gmail.com', '1234', 'Tuấn Hưng', 'quận 12', '123456789', 0, NULL, 1, '', ''),
(40, 'hancr20@gmail.com', 'RrkIyfQ5g1', 'Hwan', 'gò vấp - tp.hcm', '0869536638', 0, 'ff.jpg', 1, '9ce2ddbf3c7d9bec11a3b47613d3d87f', '2023-12-05 15:55:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(10) NOT NULL,
  `TenSanPham` varchar(100) NOT NULL,
  `HinhAnh` text DEFAULT NULL,
  `Gia` int(10) DEFAULT NULL,
  `GiaKhuyenMai` int(10) DEFAULT NULL,
  `MaDanhMuc` int(10) NOT NULL,
  `SoLuong` int(10) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `Hot` int(11) DEFAULT NULL,
  `TrangThai` varchar(100) NOT NULL DEFAULT 'Đang hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhAnh`, `Gia`, `GiaKhuyenMai`, `MaDanhMuc`, `SoLuong`, `MoTa`, `Hot`, `TrangThai`) VALUES
(5, 'Bioderma Sebium Sensitive – Kem Dưỡng Da Dành Cho Da Mụn, Yếu Và Nhạy Cảm – 30ml', '1.png', 620000, 500000, 1, 48, ' ', 0, 'Đang hoạt động'),
(6, 'Balance Active Formula Gold Collagen Rejuvenating Serum – Tinh Chất Vàng Dưỡng Căng Bóng Da, Ngừa Lã', '2.jpeg', 450000, 400000, 1, 43, '', 0, 'Đang hoạt động'),
(7, 'SuzanObagiMD Physical Defense Broad Spectrum SPF 40 – Kem Chống Nắng Vật Lý Đến Từ Mỹ 96.3 G', '12.jpg', 550000, 450000, 1, 50, '', 1, 'Đang hoạt động'),
(8, 'Fixderma FCL Hydrating Mask – Mặt Nạ Dưỡng Ẩm Sáng Da, Cải Thiện Da Cháy Nắng 100g', '5.png', 400000, 350000, 1, 50, '', 0, 'Đang hoạt động'),
(9, 'Dermalogica Barrier Repair – Kem Dưỡng Ẩm Phục Hồi Da Nhạy Cảm 30m', '5.png', 280000, 200000, 2, 0, ' ', 0, 'Đang hoạt động'),
(10, 'Mesoestetic Mineral Matt Antiaging Fluid Mesoprotech SPF 50+- Kem Chống Nắng Thế Hệ Mới 50ml', '6.png', 450000, 330000, 2, 50, ' ', 0, 'Đang hoạt động'),
(11, 'The Original MakeUp Eraser Original Pink – Khăn Mặt Tẩy Trang Màu Hồng', '7.jpeg', 600000, 550000, 2, 50, '', 1, 'Đang hoạt động'),
(12, 'NUXE Creme Fraiche De Beaute 48HR Moisturising Cream – Kem Dưỡng Cung Cấp Độ Ẩm Trong Suốt 48h 30ml', '13.webp', 400000, 380000, 2, 50, '', 0, 'Đang hoạt động'),
(13, 'Christina Biophyto Enlightening Eye And Neck Cream – Kem Dưỡng Làm Sáng Da Vùng Mắt Và Cổ 30ml', '25.jpg', 300000, 280000, 3, 50, '', 0, 'Đang hoạt động'),
(14, 'IS Clinical Pro-Heal Serum Advance+ – Tinh Chất Phục Hồi Da 15m/30ml', '5.png', 400000, 370000, 3, 50, '', 1, 'Đang hoạt động'),
(15, 'Paula’s Choice 5% Niacinamide Body Serum – Tinh Chất Làm Sáng Và Phục Hồi Da Cơ Thể 118ml', '11.jpeg', 450000, 360000, 3, 50, '', 0, 'Đang hoạt động'),
(16, 'Priori TTC Natural Soothing Balm – Sáp Dưỡng Ẩm, Làm Dịu Da 20gr/ 90gr', '24.jpg', 300000, 240000, 3, 50, '', 1, 'Đang hoạt động'),
(22, 'Neova Body Repair Daily Lotion – Kem DNA Phục Hồi, Sửa Chữa, Dưỡng Da Toàn Thân 250ml', '15.jpg', 400000, 350000, 1, 50, NULL, NULL, 'Đang hoạt động'),
(23, 'Klairs Midnight Blue Calming Cream – Kem Dưỡng Ẩm, Phục Hồi Da 60ml', '20.jpg', 350000, 250000, 1, 42, NULL, NULL, 'Đang hoạt động'),
(24, 'Wellmaxx Hyaluron Gentle Deep Clean Face Wash- Sữa Rửa Mặt Không Chứa Xà Phòng, Phù Hợp Cho Tất Cả C', '21.jpg', 350000, 200000, 2, 50, NULL, NULL, 'Đang hoạt động'),
(25, 'Fixderma Shadow SPF 30+ Gel – Gel Chống Nắng 75g', '22.jpg', 500000, 350000, 2, 47, NULL, NULL, 'Đang hoạt động'),
(26, 'Sugarbear Pro Collagen – Kẹo Gấu Bổ Sung Collagen 60 Viên', '23.jpg', 400000, 300000, 3, 50, NULL, NULL, 'Đang hoạt động'),
(27, 'Sugarbear Hair Vegan Vitamin Gummies – Kẹo Gấu Kích Thích Mọc Tóc 75 Viên', '24.jpg', 300000, 150000, 3, 50, ' ', 0, 'Đang hoạt động'),
(52, 'Profa Nucos Collagen 100% – Thực Phẩm Bảo Vệ Sức Khỏe Ngăn Ngừa Lão Hóa Da – 90 Viên', '25.jpg', 150000, 130000, 1, 16, '', 1, 'Tạm ngưng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaChiTietDH`),
  ADD KEY `MaDonHang` (`MaDonHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `MaChiTietDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=998672715;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
