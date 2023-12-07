-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2023 at 01:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(17, 'vãi lồng đèn =))\r\n', 5, 51, '15:33:24pm 04/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(13, 'CHÓ ALASKA MALAMUTE'),
(14, 'CHÓ GOLDEN RETRIEVER'),
(15, 'CHÓ HUSKY SIBERIAN'),
(16, 'MÈO TAI CỤP'),
(17, 'MÈO CHÂN NGẮN');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int NOT NULL,
  `id_order` int NOT NULL,
  `id_pro` int NOT NULL,
  `giamua` double(12,2) NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order_detail`, `id_order`, `id_pro`, `giamua`, `soluong`, `thanhtien`) VALUES
(58, 79, 54, 4000000.00, 2, 8000000.00),
(59, 79, 52, 8000000.00, 1, 8000000.00),
(60, 80, 51, 13000000.00, 1, 13000000.00),
(61, 81, 55, 9000000.00, 1, 9000000.00),
(62, 82, 54, 4000000.00, 1, 4000000.00),
(63, 83, 54, 4000000.00, 1, 4000000.00),
(64, 84, 54, 4000000.00, 1, 4000000.00),
(65, 85, 54, 4000000.00, 1, 4000000.00),
(66, 86, 54, 4000000.00, 1, 4000000.00),
(67, 87, 54, 4000000.00, 1, 4000000.00),
(68, 88, 54, 4000000.00, 1, 4000000.00),
(69, 89, 54, 4000000.00, 1, 4000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `soluong` int DEFAULT '0',
  `price` double(12,2) DEFAULT '0.00',
  `price_sale` double(12,2) DEFAULT '0.00',
  `xuatsu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `luotxem` int DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `soluong`, `price`, `price_sale`, `xuatsu`, `mota`, `luotxem`, `iddm`) VALUES
(51, 'CHÓ ALASKA MALAMUTE', 'p5.jpg', 15, 15000000.00, 13000000.00, ' Nguồn gốc: nhân giống tại Trang trại Dogily Kennel Đà Lạt (thành viên Hiệp hội những người nuôi chó giống Việt Nam – VKA).', 'Chó Alaska\r\nChó Alaska hay Alaska Malamute hay Mahlemuts xuất thân là giống chó được sử đụng dể kéo xe. Người dân Eskimo ở vùng Alaska đã khám phá ra khả năng di chuyển và kéo xe trượt tuyết của các bé chó này. Nổi bất bởi sự to lớn, khỏe mạnh, bền bỉ và có thể chịu đựng được khí hậu khắc nghiệt vùng Bắc Cực.\r\n\r\nTuy nhiên hiện tại giống chó này đã được nhân giống rộng rãi và được nuôi dưỡng như thú cưng tại rát nhiều quốc gia trên toàn thế giới.\r\n\r\nĐẶC ĐIỂM CỦA CHÓ ALASKA\r\nTheo sự phân chia của AKC (hiệp hội chó Hoa Kỳ), có tất cả ba loại chó Alaska là Standard (tiêu chuẩn), Large Standard (tiêu chuẩn lớn) và Giant (khổng lồ). Có Alaska có độ cao trung bình từ 63,5cm cho đến 68,5cm. Trong đó dòng Alaska Giant có thể cao tới 70cm và nặng tới 75kg.', 0, 13),
(52, 'HUSKY XÁM', 'p2.jpg', 7, 9000000.00, 8000000.00, '✔️ Nguồn gốc: nhân giống tại Trang trại Dogily Kennel Đà Lạt (thành viên Hiệp hội những người nuôi chó giống Việt Nam – VKA).', 'Đặc điểm ngoại hình Husky\r\nHusky sở hữu một thân hình thuôn dài, to khỏe và rất săn chắc. Chiều cao trung bình từ 53 đến 58 cm và cân nặng từ 16 đến 30 kg (thường những chú “Ngáo” giống đực sẽ có thân hình nhỉnh hơn những con cái). Loài chó này có một bộ lông dày và có 2 lớp giữ ấm (thường rụng lông 2 lần một năm).\r\n\r\nHusky sở hữu một thân hình thuôn dài, to khỏe và rất săn chắc\r\n\r\nMũi của chó Husky đặc biệt hơn so với các giống chó khác vì màu mũi của chúng sẽ cùng tông theo màu lông. Lúc nào mũi của chúng cũng hơi ướt một chút. Vào thời tiết lạnh, mũi Husky sẽ chuyển sang màu nâu hoặc màu hồng nhạt nhưng trong mùa hè thì mũi chúng có màu như ban đầu.', 0, 15),
(53, 'MÈO ALN BLUE TAI CỤP', 'm10.jpg', 4, 6000000.00, 5500000.00, '', '', 0, 16),
(54, 'MÈO CHÂN LÙN', 'p1.jpg', 18, 5000000.00, 4000000.00, '', '', 0, 17),
(55, 'MÈO VÀNG', 'm9.jpg', 5, 11000000.00, 9000000.00, '', '', 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(5, 'admin', '123', 'luctcph37171@fpt.edu.vn', 'Bích Hòa, Thanh Oai, Hà Nội', '0332293871', 1),
(14, 'luc', '123', 'truongcongluc2004@gmail.com', 'Bích Hòa, Thanh Oai, Hà Nội', '0332293871', 0),
(23, 'lucdzs1tg', '123', 'luc@gmail.com', 'Không có địa chỉ nhà ...!', '0123456789', 0),
(24, 'thu', '123', 'thuntlph31086@fpt.edu.vn', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int NOT NULL,
  `id_user` int NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tongtien` double(10,2) DEFAULT NULL,
  `pttt` tinyint NOT NULL COMMENT '1. Thanh toán khi nhận hàng 2. Chuyển khoản',
  `ngaydathang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trangthai` tinyint NOT NULL DEFAULT '1' COMMENT '1. Đang chờ duyệt 2. Đã xác nhận 3. Đang vận chuyển 4. Hoàn thành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `hoten`, `sdt`, `email`, `diachi`, `tongtien`, `pttt`, `ngaydathang`, `trangthai`) VALUES
(79, 14, 'Trương Công Lực', '0332293871', 'luctcph37171@fpt.edu.vn', 'bích hòa, thanh oai, hà nội ', 16000000.00, 2, '2023-12-04 22:34:33', 3),
(80, 14, 'test1', '03334498564', 'luc@gmail.com', 'hà đông, hà nội', 13000000.00, 1, '2023-12-04 22:36:25', 1),
(81, 24, 'thu', '0332293871', 'thuntlph31086@fpt.edu.vn', 'lllllllllllllllllllllllllllllllllll', 9000000.00, 2, '2023-12-05 07:28:24', 1),
(82, 24, 'luc', '0332293871', 'luctcph37171@fpt.edu.vn', 'cccccccccccc', 4000000.00, 1, '2023-12-05 07:31:08', 1),
(83, 14, 'Trương Công Lực', '0332293871', 'thuntlph31086@fpt.edu.vn', 'bích hòa, thanh oai, hà nội ', 4000000.00, 1, '2023-12-05 07:34:02', 1),
(84, 14, 'Trương Công Lực', '0332293871', 'luctcph37171@fpt.edu.vn', 'bích hòa, thanh oai, hà nội ', 4000000.00, 1, '2023-12-05 07:37:12', 1),
(85, 14, 'thu', '0332293871', 'thuntlph31086@fpt.edu.vn', 'lllllllllllllllllllllllllllllllllll', 4000000.00, 1, '2023-12-05 07:37:58', 1),
(86, 24, 'thu', '0332293871', 'thuntlph31086@fpt.edu.vn', 'bích hòa, thanh oai, hà nội ', 4000000.00, 1, '2023-12-05 07:38:44', 1),
(87, 0, 'test3', '0332293871', 'luctcph37171@fpt.edu.vn', 'dddddddddddd', 4000000.00, 1, '2023-12-05 08:10:09', 1),
(88, 14, 'test5', '0332293871', 'luctcph37171@fpt.edu.vn', 'bích hòa, thanh oai, hà nội ', 4000000.00, 1, '2023-12-05 08:10:35', 1),
(89, 14, 'test10', '0332293871', 'luctcph37171@fpt.edu.vn', '4fff', 4000000.00, 1, '2023-12-05 08:14:05', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_dm` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `lk_donhang_tk` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
