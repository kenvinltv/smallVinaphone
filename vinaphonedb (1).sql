-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2018 lúc 11:17 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vinaphonedb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ezcom`
--

CREATE TABLE `ezcom` (
  `id` int(11) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_out` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ezcom`
--

INSERT INTO `ezcom` (`id`, `type`, `name`, `price`, `data`, `price_out`) VALUES
(1, 1, 'D0', '0', '0 GB', '200Đ/MB'),
(2, 2, 'D10', '10.000Đ/NGÀY', '3 GB', '200Đ/MB'),
(3, 2, 'D50', '50.000Đ/THÁNG', '3 GB', '200Đ/MB'),
(4, 2, 'D70', '70.000Đ/THÁNG', '6 GB', '200Đ/MB'),
(5, 3, 'DMAX', '70.000Đ/THÁNG', '5GB', 'Miễn phí'),
(6, 3, 'DMAX100', '100.000Đ/THÁNG', '9 G', 'Miễn phí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mess` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayGioDK` datetime NOT NULL,
  `IP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `name`, `sdt`, `mess`, `NgayGioDK`, `IP`) VALUES
(1, '', '0123456789---http://localhost/smallVinaphone/', 'Ko có lời nhắn', '2018-03-17 08:07:27', '::1'),
(2, 'Kenvin Code', '1234567890---http://localhost/smallVinaphone/', 'Khong coslowif nhawts\r\n', '2018-03-17 08:08:53', '::1'),
(5, '', '0123456789---http://localhost/smallVinaphone/', '', '2018-03-17 08:53:12', '::1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mi`
--

CREATE TABLE `mi` (
  `id` int(11) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `sms` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctrenweb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nghenhac` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taigame` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `docemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xemvideo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giagoicuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khongdk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quydoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mi`
--

INSERT INTO `mi` (`id`, `type`, `name`, `price`, `data`, `note`, `sms`, `doctrenweb`, `nghenhac`, `taigame`, `docemail`, `xemvideo`, `giagoicuoc`, `khongdk`, `quydoi`) VALUES
(1, 1, 'BIG70', '70.000/lần', '2,4 GB', 'Hết lưu lượng miễn phí cần mua thêm các góiData X15/25/35 để sử dụng dịch vụ Data	', 'BIG70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 1, 'BIG90', '90.000/lần', '3,5 GB', 'Hết lưu lượng miễn phí cần mua thêm các góiData X15/25/35 để sử dụng dịch vụ Data', 'BIG90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 2, 'SPEED79', '79.000/lần', '2GB/tháng, tặng thêm 30 phút nội mạng + 30 SMS nội mạng', 'Hết lưu lượng miễn phí cần mua thêm các góiData X15/25/35 để sử dụng dịch vụ Data	', 'SPEED79', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 2, 'SPEED199', '199.000/lần', '6GB/tháng, tặng thêm 30 phút nội mạng + 30 SMS nội mạng', 'Hết lưu lượng miễn phí cần mua thêm các góiData X15/25/35 để sử dụng dịch vụ Data	', 'SPEED199', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 6, 'M10', '10.000/30 ngày', '50MB/30 ngày', 'Vượt gói tính phí.', 'M10', '140', '50', '12', '2.500', '25', '10.000', '75.000', 1),
(6, 6, 'M25', '25.000/30 ngày', '150MB/30 ngày', 'Vượt gói tính phí.', '', '400', '150', '40', '7.500', '75', '25.000', '225.000', 1),
(7, 6, 'M50', '50.000/30 ngày', '500MB/30 ngày', 'Vượt gói tính phí.', '', '1.333', '500', '133', '25.500', '250', '50.000', '750.000\r\n', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id`, `name`, `description`) VALUES
(1, 'GÓI CƯỚC TỐC ĐỘ CAO BIG DATA THÁNG', '(Nhân đôi dung lượng data hàng tháng từ 20/11/2017 đến 25/2/2018)'),
(2, 'GÓI CƯỚC TỐC ĐỘ CAO 4G (lưu ý phải có SIM 4G)', ''),
(3, 'GÓI CƯỚC TỐC ĐỘ CAO THEO NGÀY GIỚI HẠN LƯU LƯỢNG MIỄN PHÍ', ''),
(4, 'GÓI CƯỚC TỐC ĐỘ CAO THEO TUẦN GIỚI HẠN LƯU LƯỢNG MIỄN PHÍ', ''),
(5, 'GÓI CƯỚC KHÔNG GIỚI HẠN LƯU LƯỢNG MIỄN PHÍ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_ezcom`
--

CREATE TABLE `type_ezcom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_ezcom`
--

INSERT INTO `type_ezcom` (`id`, `name`, `description`) VALUES
(1, 'GÓI CƯỚC KHÔNG CÓ DUNG LƯỢNG MIỄN PHÍ', ''),
(2, 'GÓI CƯỚC GIỚI HẠN LƯU LƯỢNG MIỄN PHÍ', ''),
(3, 'GÓI CƯỚC KHÔNG GIỚI HẠN LƯU LƯỢNG MIỄN PHÍ (*)', ''),
(4, 'GÓI CƯỚC TÍCH HỢP SIM THOẠI VÀ SIM EZCOM TRẢ SAU', ''),
(5, 'BỘ SIM EZCOM TRẢ TRƯỚC TÍCH HỢP SẴN GÓI', ''),
(6, 'MUA THÊM LƯU LƯỢNG TỐC ĐỘ CAO (CHỈ ĐĂNG KÝ CÙNG GÓI DMAX/DMAX100/DMAX200/DMAX300/D150/D150/D250/D500)', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `User` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BoPhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idGroup` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `User`, `Name`, `BoPhan`, `Pass`, `idGroup`) VALUES
(1, '@dmin', '', 'Trùm Cuối', '25f9e794323b453885f5181f1b624d0b', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ezcom`
--
ALTER TABLE `ezcom`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mi`
--
ALTER TABLE `mi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_ezcom`
--
ALTER TABLE `type_ezcom`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ezcom`
--
ALTER TABLE `ezcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `mi`
--
ALTER TABLE `mi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `type_ezcom`
--
ALTER TABLE `type_ezcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
