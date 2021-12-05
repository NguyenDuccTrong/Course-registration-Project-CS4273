-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2021 lúc 11:53 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `registerphase`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachdadangky`
--

CREATE TABLE `danhsachdadangky` (
  `Mamonhoc` varchar(50) NOT NULL,
  `Tenmonhoc` varchar(50) NOT NULL,
  `Tinchi` int(10) NOT NULL,
  `Makhoa` varchar(50) NOT NULL,
  `Hocphi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `Mamonhoc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Tenmonhoc` varchar(50) NOT NULL,
  `Tinchi` int(10) NOT NULL,
  `Makhoa` varchar(10) NOT NULL,
  `Hocphi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`Mamonhoc`, `Tenmonhoc`, `Tinchi`, `Makhoa`, `Hocphi`) VALUES
('CS3653', 'Toán rời rạc cho máy tính', 3, 'HTTT', 3000000),
('EC208', 'Quản trị dự án TMĐT', 3, 'HTTT', 3000000),
('EC214', 'Nhập môn quản trị chuỗi cung ứng', 3, 'HTTT', 3000000),
('EC232', 'Nguyên lý kế toán', 3, 'HTTT', 3000000),
('IS210', 'Hệ quản trị cơ sở dữ liệu', 4, 'HTTT', 4000000),
('IS332', 'Hệ thống thông tin quản lý', 3, 'HTTT', 3000000),
('IS403', 'Phân tích dữ liệu kinh doanh', 3, 'HTTT', 3000000),
('MATH3013', 'Đại số tuyến tính', 3, 'HTTT', 3000000),
('NT101', 'An toàn mạng máy tính', 4, 'HTTT', 4000000),
('NT106', 'Lập trình mạng căn bản', 3, 'HTTT', 3000000),
('NT208', 'Lập trình ứng dụng web', 3, 'HTTT', 3000000),
('NT402', 'Công nghệ mạng viễn thông', 3, 'HTTT', 3000000),
('SS003', 'Tư tưởng Hồ Chí Minh', 2, 'HTTT', 2000000),
('SS007', 'Triết học Mác-Lênin', 3, 'HTTT', 3000000),
('SS008', 'Kinh tế chính trị Mác- Lênin', 2, 'HTTT', 2000000),
('SS009', 'Chủ nghĩa xã hội khoa học', 2, 'HTTT', 2000000),
('SS010', 'Lịch sử Đảng Cộng Sản Việt Nam', 2, 'HTTT', 2000000),
('STAT4033', 'Thống kê kỹ thuật', 3, 'HTTT', 3000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `registration`
--

CREATE TABLE `registration` (
  `MaSoSV` varchar(11) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `gender` enum('Nam','Nữ') NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Lop` varchar(50) NOT NULL,
  `NgaySinh` varchar(20) NOT NULL,
  `avatar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `registration`
--

INSERT INTO `registration` (`MaSoSV`, `HoTen`, `gender`, `MatKhau`, `Lop`, `NgaySinh`, `avatar`) VALUES
('19522230', 'Lê Sỹ Thanh', 'Nam', '12345678', 'HTTT', '11/02/2001', 'https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Freceived_429469951167094.jpeg?v=1638460291156'),
('19522348', 'Lê Đức Tín', 'Nam', '12345678', 'HTTT', '04/08/2001', 'https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F2f420c7dcebf9d761c2f814a9d5eb84e.jpg?v=1638458895093'),
('19522391', 'Phạm Minh Trí', 'Nam', '12345678', 'HTTT', '29/08/2001', 'https://cdn.discordapp.com/attachments/718435071249612803/916694002110177280/178720141_2821947188018243_6976093716516322055_n.png'),
('19522409', 'Nguyễn Đức Trọng', 'Nam', '12345678', 'HTTT', '26/09/2001', 'https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F124829387_1098645023922959_1601509479711093416_n.png?v=1638459901791'),
('admin', 'ADMIN', 'Nam', 'admin123', '*****', '**********', 'https://user-images.githubusercontent.com/35910158/35493994-36e2c50e-04d9-11e8-8b38-890caea01850.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhsachdadangky`
--
ALTER TABLE `danhsachdadangky`
  ADD PRIMARY KEY (`Mamonhoc`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`Mamonhoc`);

--
-- Chỉ mục cho bảng `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`MaSoSV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
