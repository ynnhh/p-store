-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 12:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myphamshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBinhLuan` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `NgayBinhLuan` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MaBinhLuan`, `NoiDung`, `MaKhachHang`, `MaSanPham`, `NgayBinhLuan`) VALUES
(2, 'váy rất đẹp', 2, 13, '2023-10-18 15:37:58'),
(3, 'sản phẩm tốt', 2, 8, '2023-10-18 15:44:45'),
(4, 'sản phẩm có giá tốt', 2, 8, '2023-10-18 15:45:36'),
(5, 'váy rất đẹp', 2, 6, '2023-10-19 14:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTietDH` int(11) NOT NULL,
  `MaDonHang` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonhang`
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
(18, 34, 16, 5, 240000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) NOT NULL,
  `HinhAnh` text NOT NULL,
  `TrangThai` varchar(100) NOT NULL DEFAULT 'Đang hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`, `HinhAnh`, `TrangThai`) VALUES
(1, 'CHĂM SÓC CÁ NHÂN', 'dm1.jpg', 'Đang hoạt động'),
(2, 'CHĂM SÓC CÁ NHÂN', 'banner3.jpg', 'Đang hoạt động'),
(3, 'CHĂM SÓC TÓC', 'banner2.jpg', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
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
-- Dumping data for table `donhang`
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
(34, '2023-09-24 15:25:04', 2, 2250000, 'Đang chờ xử lý', '');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
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
  `TrangThai` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `Email`, `MatKhau`, `HoTen`, `DiaChi`, `SDT`, `Admin`, `Anh`, `TrangThai`) VALUES
(1, 'admin@gmail.com', 'pass', 'administrator', 'HCM', '0987654321', 1, 'admin.png', 1),
(2, 'khachhang@gmail.com', '123', 'Nguyễn Thị Phương', 'Quận 12, HCM', '0987654321', 0, '3df98a9990ae777a85a708776498fee3.jpg', 1),
(23, 'khachhang2@gmail.com', '12345', 'khách hàng 2', 'hcm', '1234567890', 0, '3d2d6e5e1e11cd6327777c32ba632ecb.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
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
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhAnh`, `Gia`, `GiaKhuyenMai`, `MaDanhMuc`, `SoLuong`, `MoTa`, `Hot`, `TrangThai`) VALUES
(5, 'Bioderma Sebium Sensitive – Kem Dưỡng Da Dành Cho Da Mụn, Yếu Và Nhạy Cảm – 30ml', '1.png', 620000, 500000, 1, 100, NULL, 0, 'Đang hoạt động'),
(6, 'Balance Active Formula Gold Collagen Rejuvenating Serum – Tinh Chất Vàng Dưỡng Căng Bóng Da, Ngừa Lã', '2.jpeg', 450000, 400000, 1, 50, '', 0, 'Đang hoạt động'),
(7, 'SuzanObagiMD Physical Defense Broad Spectrum SPF 40 – Kem Chống Nắng Vật Lý Đến Từ Mỹ 96.3 G', '12.jpg', 550000, 450000, 1, 50, '', 1, 'Đang hoạt động'),
(8, 'Fixderma FCL Hydrating Mask – Mặt Nạ Dưỡng Ẩm Sáng Da, Cải Thiện Da Cháy Nắng 100g', '5.png', 400000, 350000, 1, 40, '', 0, 'Đang hoạt động'),
(9, 'Dermalogica Barrier Repair – Kem Dưỡng Ẩm Phục Hồi Da Nhạy Cảm 30m', '5.png', 280000, 200000, 2, 30, NULL, 0, 'Đang hoạt động'),
(10, 'Mesoestetic Mineral Matt Antiaging Fluid Mesoprotech SPF 50+- Kem Chống Nắng Thế Hệ Mới 50ml', '6.png', 450000, 330000, 2, 30, NULL, NULL, 'Đang hoạt động'),
(11, 'The Original MakeUp Eraser Original Pink – Khăn Mặt Tẩy Trang Màu Hồng', '7.jpeg', 600000, 550000, 2, 10, '', 1, 'Đang hoạt động'),
(12, 'NUXE Creme Fraiche De Beaute 48HR Moisturising Cream – Kem Dưỡng Cung Cấp Độ Ẩm Trong Suốt 48h 30ml', '13.webp', 400000, 380000, 2, 30, '', 0, 'Đang hoạt động'),
(13, 'Christina Biophyto Enlightening Eye And Neck Cream – Kem Dưỡng Làm Sáng Da Vùng Mắt Và Cổ 30ml', '25.jpg', 300000, 280000, 3, 30, '', 0, 'Đang hoạt động'),
(14, 'IS Clinical Pro-Heal Serum Advance+ – Tinh Chất Phục Hồi Da 15m/30ml', '5.png', 400000, 370000, 3, 40, '', 1, 'Đang hoạt động'),
(15, 'Paula’s Choice 5% Niacinamide Body Serum – Tinh Chất Làm Sáng Và Phục Hồi Da Cơ Thể 118ml', '11.jpeg', 450000, 360000, 3, 50, '', 0, 'Đang hoạt động'),
(16, 'Priori TTC Natural Soothing Balm – Sáp Dưỡng Ẩm, Làm Dịu Da 20gr/ 90gr', '24.jpg', 300000, 240000, 3, 30, '', 1, 'Đang hoạt động'),
(22, 'Neova Body Repair Daily Lotion – Kem DNA Phục Hồi, Sửa Chữa, Dưỡng Da Toàn Thân 250ml', '15.jpg', 400000, 350000, 1, 30, NULL, NULL, 'Đang hoạt động'),
(23, 'Klairs Midnight Blue Calming Cream – Kem Dưỡng Ẩm, Phục Hồi Da 60ml', '20.jpg', 350000, 250000, 1, NULL, NULL, NULL, 'Đang hoạt động'),
(24, 'Wellmaxx Hyaluron Gentle Deep Clean Face Wash- Sữa Rửa Mặt Không Chứa Xà Phòng, Phù Hợp Cho Tất Cả C', '21.jpg', 350000, 200000, 2, 30, NULL, NULL, 'Đang hoạt động'),
(25, 'Fixderma Shadow SPF 30+ Gel – Gel Chống Nắng 75g', '22.jpg', 500000, 350000, 2, 20, NULL, NULL, 'Đang hoạt động'),
(26, 'Sugarbear Pro Collagen – Kẹo Gấu Bổ Sung Collagen 60 Viên', '23.jpg', 400000, 300000, 3, 10, NULL, NULL, 'Đang hoạt động'),
(27, 'Sugarbear Hair Vegan Vitamin Gummies – Kẹo Gấu Kích Thích Mọc Tóc 75 Viên', '24.jpg', 300000, 150000, 3, 30, NULL, NULL, 'Đang hoạt động'),
(52, 'Profa Nucos Collagen 100% – Thực Phẩm Bảo Vệ Sức Khỏe Ngăn Ngừa Lão Hóa Da – 90 Viên', '25.jpg', 150000, 130000, 1, 122, '', 1, 'Tạm ngưng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaChiTietDH`),
  ADD KEY `MaDonHang` (`MaDonHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `MaChiTietDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
