-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2023 at 01:19 PM
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
(19, 'vitamin meo meo\r\n', 31, 64, '13:11:44pm 09/12/2023');

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
(22, 'Loại Khác'),
(23, 'Chó'),
(24, 'Mèo');

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
(82, 104, 59, 44444.00, 1, 44444.00),
(83, 105, 62, 3.00, 2, 6.00),
(84, 106, 64, 444444.00, 1, 444444.00);

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
(59, 'Chó Alaska Malamute', 'p5.jpg', 7, 10000000.00, 8000000.00, 'Việt Nam', 'Một số thông tin các em:\r\n- Giống: Alaska Oversize thuần chủng ( cha mẹ trên 50kg)\r\n- Nguồn gốc: sinh sản tại Việt Nam\r\n- Số lượng: 3 cái 4 đực\r\n- Tiêm chủng: Đủ 02 mũi 7 bệnh ( có sổ sức khoẻ)\r\n*Chế độ bảo hành VÀNG tại shop như sau:\r\n1. Bảo hành thuần chủng trọn đời\r\n2. Bảo hành care, parvo 1 tuần (hai loại bệnh phổ biến thường xảy ra khi chó ko được tiêm chủng)', 0, 23),
(60, 'Mèo Chân Ngắn Tai Cụp', 'p1.jpg', 9, 5000000.00, 4500000.00, 'Nước Ngoài', 'Thông tin về bé\r\nGiống : Anh lông ngắn Munchkin (chân lùn) + TAI CỤP - ĐẢM BẢO THUẦN CHỦNG 100%\r\nGiới tính : Cái\r\nMàu : Bicolor\r\nBé đã tiêm dinh dưỡng và đã sổ giun\r\nBé khoẻ mạnh, linh hoạt và quấn chủ . Bé đã biết tự ăn ( hạt + pate), biết đi vệ sinh đúng chỗ, mèo nhà nuôi chứ không phải dạng trang trại nên khách cứ an tâm ạ.\r\n*Bạn cần xem thêm hình và video bé có thể kết bạn zal0 với mình\r\n*Có thể đến xem và rước bé trực tiếp hoặc mình cũng có ship đi ạ\r\n*Bên mình có hỗ trợ hướng dẫn cách chăm sóc bé tận tình', 0, 24),
(61, 'Chó Corgi Mông trái tim', 'p12.jpg', 4, 6500000.00, 6000000.00, 'Việt Nam', 'Các con tìm bát ăn mới đây ạ\r\n-Dễ nuôi dễ chăm sóc, ăn cơm cháo hoặc hạt khô ngon lành\r\n-Đã tiêm phòng mũi 5 trong 1 và tẩy giun định kì cho bé\r\nKhuyến khích mọi người qua tận nhà xem cún trực tiếp để lựa chọn ưng ý nha\r\nNhận ship toàn quốc nhận cún thanh toán ạ\r\nAi cần thêm thông tin Ib zallo em hoặc call trực tiếp\r\nGiá cực yêu thương ạ', 0, 23),
(62, 'Mèo Chân Ngắn Xinh Xinh', 'm3.jpg', 11, 5000000.00, 4500000.00, 'Việt Nam', 'Thông tin về bé Giống : Anh lông ngắn Munchkin (chân lùn) + TAI CỤP - ĐẢM BẢO THUẦN CHỦNG 100% Giới tính : Cái Màu : Bicolor Bé đã tiêm dinh dưỡng và đã sổ giun Bé khoẻ mạnh, linh hoạt và quấn chủ . Bé đã biết tự ăn ( hạt + pate), biết đi vệ sinh đúng chỗ, mèo nhà nuôi chứ không phải dạng trang trại nên khách cứ an tâm ạ. *Bạn cần xem thêm hình và video bé có thể kết bạn zal0 với mình *Có thể đến xem và rước bé trực tiếp hoặc mình cũng có ship đi ạ *Bên mình có hỗ trợ hướng dẫn cách chăm sóc bé tận tình', 0, 24),
(63, 'Chó samoyed trắng tuyết', 'p9.jpg', 6, 8000000.00, 7500000.00, 'Việt Nam', 'Samoyed là một giống chó có nguồn gốc từ vùng đất Siberia lạnh giá và được gọi với cái tên trìu mến Nàng Bạch Tuyết của rừng Taiga.\r\n- Đôi mắt đen, sâu\r\n- Mũi màu nâu hoặc đen\r\n- Hàm răng khỏe\r\n- Tai có kích thước bình thường, vành tai hơi cong tròn, đỉnh luôn dựng đứng\r\n- Phần đuôi dài, thường cuộn vòng trên lưng\r\n- Bộ lông dày và rụng nhiều vào mùa nóng', 0, 23),
(64, 'Mèo Scottish tai cụp', 'm9.jpg', 8, 3000000.00, 2500000.00, 'Việt Nam', 'Mèo tai cụp là một giống mèo khá độc đáo với đôi tai cụp không thể lẫn được với bất kì giống mèo nào khác. Chúng đang được những người yêu mèo tìm mua và nhận được sự quan tâm đặc biệt. Khi đôi tai gập đã trở nên khá đặc trưng, những người nghiện mèo lại tìm đến những màu sắc khác lạ. Mèo tai cụp màu vàng hiện đang rất được nhiều người lựa chọn bởi sự bắt mắt và sang trọng.', 0, 24);

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
  `role` tinyint NOT NULL DEFAULT '0' COMMENT '0.Người dùng\r\n1.Admin\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(5, 'admin', '123', 'luctcph37171@fpt.edu.vn', 'Bích Hòa, Thanh Oai, Hà Nội', '0332293871', 1),
(31, 'luc', '123', 'truongcongluc2004@gmail.com', NULL, NULL, 0);

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
(104, 31, 'Trương Công Lực', '0332293871', 'luc@gmail.com', 'dddddddddddd', 44444.00, 1, '2023-12-08 18:57:01', 4),
(105, 0, 'luc', '0332293871', 'luc@gmail.com', 'dddddddddddd', 6.00, 1, '2023-12-09 16:47:00', 1),
(106, 31, 'fff', '0332293871', 'truongcongluc2004@gmail.com', 'fffffff', 444444.00, 1, '2023-12-09 16:54:17', 1);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

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
