-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2023 lúc 10:24 AM
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
(5, 'Bioderma Sebium Sensitive – Kem Dưỡng Da Dành Cho Da Mụn, Yếu Và Nhạy Cảm – 30ml', '1.png', 620000, 500000, 1, 50, ' ', 0, 'Đang hoạt động'),
(6, 'Balance Active Formula Gold Collagen Rejuvenating Serum – Tinh Chất Vàng Dưỡng Căng Bóng Da, Ngừa Lã', '2.jpeg', 450000, 400000, 1, 47, '', 0, 'Đang hoạt động'),
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
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
