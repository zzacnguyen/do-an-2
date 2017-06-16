-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 04:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsp`
--

CREATE TABLE `chitietsp` (
  `CTSP_ID` int(11) NOT NULL,
  `HA_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL,
  `CTSP_TINHTRANG` varchar(20) DEFAULT NULL,
  `CTSP_BOSUUTAP` varchar(50) DEFAULT NULL,
  `CTSP_SERIES` varchar(50) DEFAULT NULL,
  `CTSP_KICHTHUOC` varchar(10) DEFAULT NULL,
  `CTSP_CHATLIEU` varchar(50) DEFAULT NULL,
  `CTSP_KHUNG` varchar(50) DEFAULT NULL,
  `CTSP_LOAIMAY` varchar(20) DEFAULT NULL,
  `CTSP_LOAIDAYDEO` varchar(50) DEFAULT NULL,
  `CTSP_MATQUAYSO` varchar(100) DEFAULT NULL,
  `CTSP_CHONGNUOC` varchar(100) DEFAULT NULL,
  `CTSP_GIOITINH` varchar(5) DEFAULT NULL,
  `CTSP_CHUCNANGHIENTHI` varchar(100) DEFAULT NULL,
  `CTSP_MOTA` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietsp`
--

INSERT INTO `chitietsp` (`CTSP_ID`, `HA_ID`, `SP_ID`, `CTSP_TINHTRANG`, `CTSP_BOSUUTAP`, `CTSP_SERIES`, `CTSP_KICHTHUOC`, `CTSP_CHATLIEU`, `CTSP_KHUNG`, `CTSP_LOAIMAY`, `CTSP_LOAIDAYDEO`, `CTSP_MATQUAYSO`, `CTSP_CHONGNUOC`, `CTSP_GIOITINH`, `CTSP_CHUCNANGHIENTHI`, `CTSP_MOTA`) VALUES
(1, 1, 1, 'Like New (99%)', 'Day-Date President', '118135chodro', '36 mm', 'Vàng hồng 18k', 'Vàng hồng 18k', 'Automatic', 'Vàng hồng 18k', 'Chocolate,thanh chỉ giờ gắn kim cương', '100m', 'Nam', 'Giờ, Phút, Giây, Ngày', 'Chưa có mô tả'),
(2, 2, 2, 'Mới', 'Day-Date President', '118235mtdp', '36 mm', 'Vàng hồng 18k', 'Vàng hồng 18k', 'Automatic', 'Vàng hồng 18k', 'Mặt thiên thạch,thanh chỉ giờ gắn kim cương', '100m', 'Nam', 'Giờ, Phút, Giây, Ngày', 'Chưa có mô tả'),
(3, 3, 3, 'Mới', 'Day-Date President', '118235 CHODRP', '118235 CHO', 'Vàng hồng 18k', 'Vàng hồng 18k', 'Automatic', 'Vàng hồng 18k', 'Chocolate,thanh chỉ giờ gắn kim cương', '100m', 'Nam', 'Vàng hồng 18k', 'Chưa có mô tả'),
(4, 4, 4, 'Mới', 'Datejust 36 Steel/Yellow Gold', '116243 bkdj', '36 mm', 'Thép không gỉ kết hợp vàng hồng 18k', 'gắn kim cương', 'Automatic', 'thép không gỉ kết hợp vàng hồng 18k', 'màu đen,thanh chỉ giờ gắn kim cương', '100m', 'Nam', 'Giờ, Phút, Giây,Ngày', 'Là một trong những sản phẩm nằm trong bộ sưu tập Datejust, thiết kế sang trọng');

-- --------------------------------------------------------

--
-- Table structure for table `danhgiasp`
--

CREATE TABLE `danhgiasp` (
  `DG_ID` int(11) NOT NULL,
  `DG_TEN` varchar(100) NOT NULL,
  `DG_NOIDUNG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhgiasp`
--

INSERT INTO `danhgiasp` (`DG_ID`, `DG_TEN`, `DG_NOIDUNG`) VALUES
(1, 'Nguyễn Trung Việt', 'Đồng hồ đẹp, sẽ mua 30 cái tặng cho sinh viên của mình'),
(2, 'Hải Đăng', 'Đồng hồ sang trọng, nhân viên phục vụ tốt'),
(3, 'TÍnh Phan', 'Đồng hồ đẹp, nhân viên thân thiện');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `HA_ID` int(11) NOT NULL,
  `HA_HINH1` text,
  `HA_HINH2` text,
  `HA_HINH3` text,
  `HA_HINH4` text,
  `HA_HINH5` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`HA_ID`, `HA_HINH1`, `HA_HINH2`, `HA_HINH3`, `HA_HINH4`, `HA_HINH5`) VALUES
(1, 'daydate-president-2.jpg', 'daydate-president-3.jpg', 'daydate-president-5.jpg', 'daydate-president-2.jpg', 'daydate-president-3.jpg'),
(2, 'oyster-perpetual-2.jpg', 'oyster-perpetual-3.jpg', 'oyster-perpetual-4.jpg', 'oyster-perpetual-2.jpg', 'oyster-perpetual-3.jpg'),
(3, 'daydate-president2-2.jpg', 'daydate-president2-3.jpg', 'daydate-president2-4.jpg', 'daydate-president2-2.jpg', 'daydate-president2-3.jpg'),
(4, 'datejust-36-2.jpg', 'datejust-36-3.jpg', 'datejust-36-4.jpg', 'datejust-36-5.jpg', 'datejust-36-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `LH_ID` int(11) NOT NULL,
  `LH_TEN` varchar(100) DEFAULT NULL,
  `LH_EMAIL` varchar(100) NOT NULL,
  `LH_TIEUDE` varchar(100) NOT NULL,
  `LH_NOIDUNG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`LH_ID`, `LH_TEN`, `LH_EMAIL`, `LH_TIEUDE`, `LH_NOIDUNG`) VALUES
(2, 'Nguyễn ĐÔng Tường', 'Test', 'Test', 'Test test'),
(3, 'Thái Ngọc Huy', 'huymap@gmail.com', 'Bán web không', 'NHận làm web không bạn'),
(4, 'Ngô Quốc Thịnh', 'nqthinh19996@gmail.com', 'Thực tập', 'Cửa hàng có nhận thực tập sinh quản trị website không?');

-- --------------------------------------------------------

--
-- Table structure for table `nhanemail`
--

CREATE TABLE `nhanemail` (
  `EMAIL_ID` int(11) NOT NULL,
  `EMAIL_TEN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanemail`
--

INSERT INTO `nhanemail` (`EMAIL_ID`, `EMAIL_TEN`) VALUES
(1, 'ndtuong.ktpm0114@student.ctuet.edu.vn'),
(2, 'tnhuy.ktpm0114@student.ctuet.edu.vn'),
(3, 'pvtinh.ktpm0114@student.ctuet.vn');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `SP_ID` int(11) NOT NULL,
  `SP_TENSP` varchar(100) NOT NULL,
  `SP_GIA` int(11) NOT NULL,
  `SP_GIOITHIEU` text NOT NULL,
  `SP_HINH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`SP_ID`, `SP_TENSP`, `SP_GIA`, `SP_GIOITHIEU`, `SP_HINH`) VALUES
(1, 'Rolex Day Date President', 557000000, 'Rolex Day Date President Day Date 118235 CHODRP (LIKE NEW 99%)', 'daydate-president-1.jpg'),
(2, 'Rolex Oyster Perpetual', 730000000, 'Rolex Oyster Perpetual Day-Date Automatic Men Watch 118235\r\n', 'oyster-perpetual-1.jpg'),
(3, 'Rolex Day Date President', 603000000, 'Rolex Day Date President Automatic Mens watch 118235 CHODRO ', 'daydate-president2-1.jpg'),
(4, 'Rolex Datejust 36mm 116243', 359000000, 'Rolex Datejust Day-Date Automatic Men Watch 116243', 'datejust-36-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TK_ID` int(11) NOT NULL,
  `TK_TAIKHOAN` varchar(16) NOT NULL,
  `TK_MATKHAU` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TK_ID`, `TK_TAIKHOAN`, `TK_MATKHAU`) VALUES
(1, 'admin', 'admin'),
(2, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `TT_ID` int(11) NOT NULL,
  `TT_TIEUDE` text NOT NULL,
  `TT_NOIDUNG` text NOT NULL,
  `TT_HINHANH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`TT_ID`, `TT_TIEUDE`, `TT_NOIDUNG`, `TT_HINHANH`) VALUES
(1, 'Rolex GMT-Master II 116710BLNR: Chuẩn mực của sự tinh tế và sang trọng', 'Những chiếc đồng hồ Rolex vẫn luôn có sức hút vô cùng lớn bởi thiết kế sang trọng và lịch lãm của mình.\r\n\r\nMẫu GMT-Master II được Rolex cho ra mắt lần đầu tiên vào năm 2005 với phiên bản Ref. 116718LN được làm hoàn toàn từ vàng và số lượng có hạn. Vào năm 2007 Rolex tiếp tục tung ra một phiên bản khác của GMT-Master II làm từ thép với số hiệu Ref.116710LN. Rất nhiều người mong chờ một chiếc GMT-Master II với vòng đệm bezel 2 màu được làm bằng gốm cao cấp nhưng lúc này Rolex chỉ có thể sử dụng chất liệu nhôm vì việc in lên gốm là khá khó khăn. Tuy nhiên ở triển lãm đồng hồ Baselworld vừa qua Rolex đã cho ra mắt mẫu GMT-Master II Ref.116710BLNR  với vòng đệm bezel 2 màu được làm từ gốm (BLNR là viết tắt của Bleu & Noir, có nghĩa là xanh và đen). Chiếc đồng hồ nhanh chóng trở thành ngôi sao của sự kiện và số lượng bán ra cũng ở mức rất cao.\r\nThân đồng hồ có đường kính là 40mm, một kích cỡ không quá to cho một chiếc đồng hồ đeo tay nhưng vì các chi tiết như vòng đệm, núm vặn lại lớn hơn bình thường nên khi đeo trên tay bạn sẽ có cảm giác như đang đeo một chiếc đồng hồ cỡ lớn. Rolex thường hay dùng những thuật ngữ như \"Super Case\" hoặc \"Maxi Dial\" để chỉ những chiếc đồng hồ của hãng có kích cỡ lớn như thế này. GMT-Master II 116710BLNR sử dụng bộ chuyển động calibre 3186 của Rolex, với nhiều cải tiến ở độ chính xác so với người tiền nhiệm calibre 3185. Vòng đệm bezel bằng gốm 2 màu của GMT-Master II 116710BLNR cũng được đánh giá rất cao với cơ chế chuyển màu rất mượt mà và ấn tượng.\r\nRolex GMT-Master II 116710BLNR được bán với giá 8.950 USD (~190 triệu VND)', 'test_tintuc2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`CTSP_ID`),
  ADD KEY `SP_ID` (`SP_ID`),
  ADD KEY `HA_ID` (`HA_ID`);

--
-- Indexes for table `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD PRIMARY KEY (`DG_ID`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`HA_ID`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`LH_ID`);

--
-- Indexes for table `nhanemail`
--
ALTER TABLE `nhanemail`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`SP_ID`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TK_ID`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`TT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `CTSP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `danhgiasp`
--
ALTER TABLE `danhgiasp`
  MODIFY `DG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `HA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `LH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nhanemail`
--
ALTER TABLE `nhanemail`
  MODIFY `EMAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `TK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `TT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD CONSTRAINT `chitietsp_ibfk_1` FOREIGN KEY (`SP_ID`) REFERENCES `sanpham` (`SP_ID`),
  ADD CONSTRAINT `chitietsp_ibfk_2` FOREIGN KEY (`HA_ID`) REFERENCES `hinhanh` (`HA_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
