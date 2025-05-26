-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2025 at 07:40 AM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_Cmt` int(11) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `Uid` int(50) NOT NULL,
  `NgayTao` datetime NOT NULL DEFAULT current_timestamp(),
  `id_SP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_Cmt`, `NoiDung`, `Uid`, `NgayTao`, `id_SP`) VALUES
(1, 'asda', 1, '2024-06-19 10:22:31', 48),
(2, 'dadsa', 1, '2024-06-19 10:25:09', 48),
(3, 'asdad', 1, '2024-06-19 10:27:21', 48),
(4, 'alo', 1, '2024-06-19 10:27:26', 48),
(5, 'alo', 1, '2024-06-19 10:27:29', 48),
(6, 'da', 1, '2024-06-19 10:27:38', 48),
(7, 'a', 1, '2024-06-19 10:27:40', 48),
(8, 'sdada', 1, '2024-06-19 11:42:33', 47),
(9, 'dadsa', 1, '2024-06-19 11:42:37', 47),
(10, 'dasda', 1, '2024-06-19 12:19:12', 46),
(11, 'sad', 1, '2024-06-19 12:19:25', 46);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_ChiTietDonHang` int(255) NOT NULL,
  `id_DonHang` int(255) NOT NULL,
  `id_SP` int(255) NOT NULL,
  `SoLuong` int(50) NOT NULL,
  `DonGia` float NOT NULL,
  `TongSoTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_ChiTietDonHang`, `id_DonHang`, `id_SP`, `SoLuong`, `DonGia`, `TongSoTien`) VALUES
(3, 2, 53, 7, 5690000, 39830000),
(5, 4, 56, 1, 690000, 690000),
(6, 4, 52, 1, 15990000, 15990000),
(7, 4, 45, 1, 8590000, 8590000),
(8, 5, 46, 1, 3510000, 3510000),
(9, 5, 56, 1, 690000, 690000),
(10, 5, 51, 1, 4490000, 4490000),
(11, 5, 55, 1, 690000, 690000);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_DonHang` int(11) NOT NULL,
  `id_Customer` int(50) NOT NULL,
  `SoLuong` int(50) NOT NULL,
  `ngayDatHang` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `DiaChi` varchar(255) NOT NULL,
  `TongSoTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_DonHang`, `id_Customer`, `SoLuong`, `ngayDatHang`, `status`, `DiaChi`, `TongSoTien`) VALUES
(2, 1, 1, '2024-06-19 00:07:49', 1, 'asdad', 39830000),
(4, 1, 3, '2024-06-19 11:14:24', 0, '78 Nguyễn Phước Chu', 25270000),
(5, 1, 4, '2024-06-19 12:25:57', 1, 'asdad', 9380000);

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `id_Hang` int(11) NOT NULL,
  `HinhAnh` blob NOT NULL,
  `TenHang` varchar(50) NOT NULL,
  `AnHien` tinyint(2) NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  `Urlhang` varchar(50) NOT NULL,
  `Uid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`id_Hang`, `HinhAnh`, `TenHang`, `AnHien`, `MoTa`, `Urlhang`, `Uid`) VALUES
(4, 0x6f70706f2d6c6f676f2e6a7067, 'Oppo', 1, 'Hãng Oppo', 'oppo', 1),
(5, 0x73616d73756e672d6c6f676f2e6a7067, 'SamSung', 1, 'Hãng SamSung', 'samsung', 1),
(6, 0x7869616f6d692d6c6f676f2e6a7067, 'Xiaomi', 1, 'Hãng Xiaomi', 'xiaomi', 1),
(7, 0x6170706c652d6c6f676f2e6a7067, 'Apple', 1, 'Hãng Apple', 'apple', 1),
(8, 0x736f756e6470656174732d6c6f676f2e6a7067, 'Sound Peats', 0, 'Hãng Sound Peats', 'soundpeats', 1),
(9, 0x42574f4f2d6c6f676f2e6a7067, 'BWOO', 1, 'Hãng BWOO', 'BWOO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id_Loai` int(11) NOT NULL,
  `HinhAnh` blob NOT NULL,
  `TenLoai` varchar(50) NOT NULL,
  `AnHien` tinyint(2) NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  `Urlloai` varchar(50) NOT NULL,
  `Uid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id_Loai`, `HinhAnh`, `TenLoai`, `AnHien`, `MoTa`, `Urlloai`, `Uid`) VALUES
(9, 0x736d61727470686f6e652e706e67, 'Điện Thoại', 1, 'Loại Điện Thoại', 'smartphone', 1),
(10, 0x6865616470686f6e65732e69636f, 'Tai Nghe', 1, 'Loại Tai Nghe', 'headphones', 1),
(11, 0x77726973742d77617463682e706e67, 'Đồng Hồ', 1, 'Loại Đồng Hồ', 'watch', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `idLT` int(11) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `AnHien` tinyint(4) NOT NULL,
  `MoTa` text NOT NULL,
  `idTL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_SP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `HinhAnh` blob NOT NULL,
  `LoaiSP` int(50) NOT NULL,
  `HangSP` int(50) NOT NULL,
  `Gia` float NOT NULL,
  `GiaGoc` float NOT NULL DEFAULT 0,
  `AnHien` tinyint(2) NOT NULL DEFAULT 0,
  `MoTa` text NOT NULL,
  `chitietsanpham` text DEFAULT NULL,
  `Uid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_SP`, `TenSP`, `HinhAnh`, `LoaiSP`, `HangSP`, `Gia`, `GiaGoc`, `AnHien`, `MoTa`, `chitietsanpham`, `Uid`) VALUES
(45, 'OPPO Reno11', 0x6f70706f2d72656e6f31312e77656270, 9, 4, 8590000, 8990000, 1, 'OPPO Reno11 F 5G là một chiếc điện thoại tầm trung mới được OPPO ra mắt trong thời gian gần đây. Máy sở hữu nhiều ưu điểm nổi bật như thiết kế trẻ trung, màn hình đẹp, hiệu năng mạnh mẽ nhờ chip Dimensity 7050 5G, hứa hẹn mang đến trải nghiệm tốt khi sử dụng', 'Kích thước và Trọng lượng\r\nChiều cao\r\n\r\nkhoảng 161.6mm\r\nChiều rộng\r\n\r\nkhoảng 74.7mm\r\nĐộ dày\r\n\r\nkhoảng 7.54mm\r\nTrọng lượng\r\n\r\nkhoảng 177g\r\n*Kích thực và trọng lượng có thể thay đổi tùy mẫu, quá trình lắp đặt và đo lường. Tất cả thông số nên tham khảo trên sản phẩm thực tế.\r\n\r\nBộ nhớ\r\nRAM và ROM\r\n\r\n8GB + 256GB\r\nLoại RAM\r\n\r\nLPDDR4x @ 2133 MHz, 2 x 16 bits\r\nChi tiết ROM\r\n\r\nUFS3.1\r\nThẻ nhớ\r\n\r\nHỗ trợ\r\nUSB OTG\r\n\r\nHỗ trợ\r\n*Bộ nhớ trong tích hợp có thể nhỏ hơn bộ nhớ trong phần mềm. Không gian bộ nhớ thực tế có thể thay đổi tùy theo cập nhật ứng dụng, người dùng và các yếu tố liên quan khác.\r\n\r\nMàn hình\r\nKích thước\r\n\r\n6.7\"\r\nTỉ lệ màn hình\r\n\r\n93.4%\r\nĐộ phân giải\r\n\r\nFHD+ (2412x1080)\r\nTốc độ làm mới\r\n\r\nTối đa: 120Hz (60/90/120Hz)\r\nTốc độ cảm ứng mẫu\r\n\r\nTối đa: 240Hz\r\nMặc định: 120Hz\r\nGam màu\r\n\r\nChế độ sống động: 100% DCI-P3\r\nChế độ bình thường: 100% sRGB\r\nĐộ sâu màu\r\n\r\n1.07 tỷ màu\r\nMật độ điểm ảnh\r\n\r\n394PPI\r\nĐộ sáng\r\n\r\nĐộ sáng mặc định tối đa toàn cầu: 500nits (điển hình);\r\nĐộ sáng kích thích tối đa toàn cầu: 900nits (điển hình);\r\nĐộ sáng tối đa cực đại cục bộ: 1100nits\r\nPanel\r\n\r\n2.5D flexible OLED\r\nKính phủ\r\n\r\nPanda glass (twice-reinforced)\r\nCamera\r\nMặt sau\r\n\r\nCamera chính: 64MP; f/1.7; FOV 81°; ống kinh 6P; hỗ trợ AF.\r\nGóc mở rộng: 8MP; f/2.2; FOV 112°; ống kính 5P, ống kính tiêu cự cố định\r\nMacro: 2MP; f/2.4; FOV 89°; ống kính 3P+ IR lens; ống kính tiêu cự cố định\r\nMặt trước\r\n\r\n32MP; f/2.4; FOV 90°; ống kính 5P lens, không hỗ trợ AF.\r\nChế độ chụp hình\r\n\r\nSau: Pro, quay video, chụp ảnh, chụp chân dung, chụp đêm, extra HD, chụp Pano, Slow-Motion, Time-Lapse, chế độ xem kép, Sticker, Text Scanner và Google lens\r\nTrước: chụp ảnh, quay video, chân dung, chụp đêm, Pano, time-lapse, video kép và Sticker.\r\nVideo\r\nSau\r\n\r\nTối đa: 4K@30fps, 1080P@60fps/30fps, 720P@60fps/30fps; Mặc định: 1080P@30fps;\r\nEIS: 1080P@60fps/30fps;\r\nSlow-motion video: 1080P@120fps/480fps, 720P@240fps/960fps;\r\nTime-lapse: 1080P@30fps;\r\nDual-view video: 1080P@30fps\r\nTrước\r\n\r\nLên đến 4K/1080P/720P@30fps; mặc định 1080P@30fps\r\nHỗ trợ chống rung: 1080P/720P@30fps.\r\nChip\r\nChip\r\n\r\nMediaTek Dimensity 7050\r\nCPU\r\n\r\n8 nhân\r\nGPU\r\n\r\nARM Mali-G68 MC4\r\nPin\r\nPin\r\n\r\nGiá trị định mức: 4880mAh/19.09Wh\r\nGiá trị tiêu chuẩn: 5000mAh/19.55Wh\r\nSạc nhanh\r\n\r\nSuperVOOCTM 2.0, SuperVOOCTM, VOOC 3.0, and PD2.0 (9V/1.5A) supported', 1),
(46, 'Oppo A58', 0x4f70706f2d4135382e6a7067, 9, 4, 3510000, 4690000, 1, 'Oppo A58 - Sắc nét từng khoảnh khắc. Màn hình lớn, camera chất lượng, và hiệu suất ổn định. Khám phá ngay!', 'Chipset: Helio G85 RAM: 6GB ROM: 128GB Camera trước: 50MP + 2MP Camera sau: 8MP Pin: 5.000mAh Sạc nhanh: 33W', 1),
(47, 'Oppo A18', 0x4f70706f2d4131382e6a7067, 9, 4, 2990000, 3290000, 1, 'Oppo A18 - Sự kết hợp hoàn hảo giữa hiệu suất và phong cách. Màn hình sắc nét, camera chất lượng và thiết kế đẹp mắt, tất cả đều có trong chiếc điện thoại này. Với khả năng xử lý mạnh mẽ và dung lượng pin lớn, Oppo A18 là người bạn đồng hành đáng tin cậy cho mọi cuộc phiêu lưu của bạn. Khám phá ngay và trải nghiệm sự khác biệt cùng Oppo A18!', 'Kích thước màn hình: 6.56 inch Độ phân giải: HD+ Cô ng nghệ màn hình: IPS LCD Hệ điều hành: Android 13 RAM: 4 GB ; ROM: 128 GB Chip xử lý (CPU): MediaTek Helio G85 8 nhân', 1),
(48, 'True Wireless Xiaomi Buds 3', 0x5461692d6e6768652d426c7565746f6f74682d547275652d576972656c6573732d5869616f6d692d427564732d332e77656270, 10, 6, 990000, 2690000, 1, 'Tai nghe Bluetooth True Wireless Xiaomi Buds 3 - Sự hoàn hảo đến từ sự đơn giản. Thiết kế nhỏ gọn, trọng lượng nhẹ và chất âm tuyệt vời, mang lại trải nghiệm nghe nhạc không giới hạn. Với kết nối không dây ổn định và khả năng chống nước, bạn có thể tận hưởng âm nhạc mọi lúc, mọi nơi. Khám phá sự thuận tiện và chất lượng cùng Xiaomi Buds 3!', 'Thời lượng pin\r\n\r\nTai nghe: 7 giờ\r\nHộp sạc: 32 giờ\r\nChống nước\r\n\r\nIP55\r\nCông nghệ âm thanh\r\n\r\nÂm thanh HiFi\r\nChống ồn chủ động ANC\r\nMicro\r\n\r\nCó\r\nTương thích\r\n\r\nCác thiết bị có hỗ trợ Bluetooth\r\nHãng sản xuất\r\n\r\nXiaomi\r\nPhạm vi kết nối\r\n\r\n10 m', 1),
(51, 'OPPO A38', 0x6f70706f2d6133382e77656270, 9, 4, 4490000, 0, 1, 'Chào mừng đến với cuộc cách mạng mới của công nghệ di động với Oppo A38!', 'Hệ điều hành: Android 13, ColorOS 13.1\r\nChipset: Mediatek MT6769 Helio G85 (12nm)\r\nĐộ phân giải: 720 x 1612 pixels\r\nMàn hình rộng: 6.56 inches\r\nCamera sau: Chính 50 MP & Phụ 2 MP\r\nRAM: 4GB\r\nBộ nhớ trong ( Rom): 128 GB\r\nCamera trước: 5 MP\r\nDung lượng pin: 5000mAh', 1),
(52, ' OPPO Reno11 Pro', 0x6f70706f2d72656e6f2d31312d70726f2e77656270, 9, 4, 15990000, 0, 1, 'Bước vào một thế giới mới, nơi sự hiện đại gặp gỡ với sự tinh tế, và sức mạnh kết hợp với đẳng cấp. Oppo Reno 11 Pro không chỉ là một chiếc điện thoại thông thường, mà là một biểu tượng của phong cách và sự tiện nghi.', 'Kích thước và Trọng lượng\r\nHeight\r\n\r\nkhoảng 162.4mm\r\nWidth\r\n\r\nkhoảng 74.1mm\r\nThickness\r\n\r\nXám San Hô: Khoảng 7.59mm\r\nTrắng Ngọc Trai: khoảng 7.66mm\r\nWeight\r\n\r\nkhoảng 181g\r\n*Kích thực và trọng lượng có thể thay đổi tùy mẫu, quá trình lắp đặt và đo lường. Tất cả thông số nên tham khảo trên sản phẩm thực tế.\r\n\r\nBộ nhớ\r\nRAM and ROM Capacities\r\n\r\n12GB + 512GB\r\nRAM Type\r\n\r\nLPDDR5 @ 3200MHz 4×16bit\r\nROM Specifications\r\n\r\nUFS3.1 @ 2Lanes HS-Gear4\r\nUSB OTG\r\n\r\nHỗ trợ\r\n*Bộ nhớ trong tích hợp có thể nhỏ hơn bộ nhớ trong phần mềm. Không gian bộ nhớ thực tế có thể thay đổi tùy theo cập nhật ứng dụng, người dùng và các yếu tố liên quan khác.\r\n\r\nMàn hình\r\nSize\r\n\r\n6.7\"\r\nScreen Ratio\r\n\r\n93%\r\nResolution\r\n\r\nFHD+ (2412x1080)\r\nRefresh Rate\r\n\r\nTối đa: 120Hz\r\nTouch Sampling Rate\r\n\r\nTối đa: 240Hz\r\nMặc định: 120Hz\r\nColour Gamut\r\n\r\nChế độ sống động: 100% DCI-P3 coverage\r\nChế độ bình thường: : 100% sRGB coverage\r\nColor Depth\r\n\r\n1.07 tỷ màu (10 bit)\r\nPixel Density\r\n\r\n394PPI\r\nBrightness\r\n\r\nĐộ sáng 950nits\r\nPanel\r\n\r\nOLED curved screen\r\nCover Glasses\r\n\r\nAGC\r\nCamera\r\nRear\r\n\r\nCamera chính: 50MP; f/1.8; FOV 84°; ống kinh 6P; hỗ trợ AF; hỗ trợ OIS.\r\nGóc mở rộng: 8MP; f/2.2; FOV 112°; ống kính 5P, cố định tiêu cự.\r\nTelephoto: 32MP; f/2; FOV 49°; ống kính 6P; hỗ trợ AF\r\nFront\r\n\r\n32MP; f/2.4; FOV 90°; ống kính 5P lens, hỗ trợ AF, sử dụng động cơ lấy nét vòng hở và không hỗ trợ OIS\r\nShooting Mode\r\n\r\nSau: Pro, quay video,chụp ảnh, , chuyên gia chụp ảnh, chụp đêm, Pano, Slo-Mo, Time-Lapse, Dual-view video, Sticker, Text Scanner và Google lens\r\nTrước: chụp ảnh, quay video, chân dung, chụp đêm, Pano, time-lapse, video kép và Sticker.\r\nVideo\r\nRear\r\n\r\n4K@30fps, 1080P@60fps/30fps, và 720P@60fps/30fps hỗ trợ\r\nEIS/OIS hỗ trợ chống rung video: 1080P@60fps.\r\nVideo zoom: 720P@240fps, 720P@960fps, 1080P@120fps\r\nSlow-motion video hỗ trợ 1080P@480fps.\r\nTime-lapse hỗ trợ 1080P@30fps. (interval settings: 10X, 60X, 120X, 480X, 960X)\r\nFront\r\n\r\nLên đến 4K@30fps, mặc định 1080P@30fps (hiệu ứng chỉnh hình ảnh được bật mặc định) .720P@30fps, video ổn định, video zoom, time-lapse (1080P@30fps, interval settings: 10X, 60X, 120X, 480X, and 960X), no slow motion\r\nChip\r\nSoC\r\n\r\nMediaTek Dimensity 8200\r\nCPU\r\n\r\n8 nhân\r\nGPU\r\n\r\nArm Mali G610 MC6 950MHz\r\nPin\r\nBattery\r\n\r\nGiá trị định mức: 4440mAh/17.36Wh\r\nGiá trị tiêu chuẩn: 4600mAh/17.98Wh\r\nFast Charge\r\n\r\nSUPERVOOCTM 80W, SUPERVOOCTM 2.0, VOOC 3.0, PD (9V/1.5A)', 1),
(53, 'AirPods Pro Gen 2', 0x616972706f64732d70726f2d326e642d67656e2e6a7067, 10, 7, 5690000, 0, 1, 'AirPods Pro Gen 2 mang đến âm thanh sắc nét và chi tiết, giúp bạn trải nghiệm những bản nhạc yêu thích của mình một cách hoàn hảo nhất. Với chất lượng âm thanh tuyệt vời, bạn sẽ không muốn rời tai nghe của mình.', 'Thời gian tai nghe:\r\n\r\nDùng 6 giờ\r\nThời gian hộp sạc:\r\n\r\nDùng 30 giờ\r\nCổng sạc:\r\n\r\nType-CSạc MagSafeSạc không dây Qi\r\nCông nghệ âm thanh:\r\n\r\nChip Apple H2Ambient SoundAdaptive EQActive Noise Cancellation\r\nTương thích:\r\n\r\nmacOS (Macbook, iMac)Android, iOS, Windows\r\nTiện ích:\r\n\r\nTrợ lý ảo SiriSạc nhanhSạc không dâyCó mic thoạiChống ồn chủ động ANCChống nước & bụi IP54\r\nHỗ trợ kết nối:\r\n\r\nBluetooth 5.3\r\nĐiều khiển bằng:\r\n\r\nCảm ứng chạm', 1),
(55, 'SoundPEATS Watch 4', 0x736f756e6470656174732d77617463682d342d312e77656270, 11, 8, 690000, 890000, 0, 'Sau một năm tạm thời vắng bóng để nhường sân cho các sản phẩm True Wireless lên ngôi, SoundPEATS Việt Nam đã trở lại đường đua Smart Watch với sản phẩm mới mang tên SoundPEATS Watch 4. Được nâng cấp nhiều tính năng hơn so với những dòng Smart Watch đời trước, đồng hồ thông minh SoundPEATS Watch 4 sẽ mang đến những tính năng tiện lợi và có tính dụng cao với người dùng.', 'Bluetooth 5.2 tích hợp với điện thoại để thực hiện cuộc gọi, nhận thông báo.\r\n109+ Chế độ thể thao hỗ trợ theo dõi các dữ liệu và chỉ số khi tập luyện.\r\nMàn hình cảm ứng 1,38″ mượt mà, 222 mặt đồng hồ thay thế, cá nhân hoá mặt đồng hồ theo ý thích.\r\nNhiều chế độ theo dõi sức khoẻ: Theo dõi oxy trong máu, giấc ngủ, chu kỳ kinh nguyệt, nhịp tim.\r\nPin đồng hồ sử dụng được 7 ngày liên tục và thời gian chờ lên đến 30 ngày.\r\nChống nước IP68 có thể đeo trong những ngày thời tiết mưa hoặc rửa tay.', 1),
(56, 'BWOO WA-03', 0x353139332d6368616d5f736f635f63615f6e68616e2e706e67, 11, 9, 690000, 1190000, 1, 'Đồng hồ thông minh BWOO WA-03 - Chính hãng', 'Kích thước màn hình: 1.39 inch\r\nDung lượng pin: 220mAh\r\nKích thước: 252x46x12mm\r\nTrọng lượng: 38.4g', 1),
(57, '', '', 0, 0, 0, 0, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `idTL` int(11) NOT NULL,
  `TenTL` varchar(50) NOT NULL,
  `AnHien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idTin` int(11) NOT NULL,
  `TieuDe` varchar(50) NOT NULL,
  `TomTat` varchar(255) NOT NULL,
  `HinhAnh` blob NOT NULL,
  `NgayTao` date NOT NULL,
  `Content` text NOT NULL,
  `idLT` int(11) NOT NULL,
  `AnHien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` int(255) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `HinhAnh` blob NOT NULL DEFAULT 'unknown.jpg',
  `Email` varchar(50) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `group_id` tinyint(4) NOT NULL DEFAULT 0,
  `reset_token` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `HoTen`, `HinhAnh`, `Email`, `SoDienThoai`, `MatKhau`, `group_id`, `reset_token`) VALUES
(1, 'Lê Nguyễn Hoàng King', 0x756e6b6e6f776e2e6a7067, 'khoaledn56@gmail.com', '0905087440', 'k16816429234', 1, 0x31393264393864333064343337613837633632313831616465646232326361636432326363303262353430326637386331326331333439303730383237346239),
(2, 'Nguyễn Ngọc Hoàng', 0x756e6b6e6f776e2e6a7067, 'anhl49655@gmail.com', '0908152508', 'k16816429234', 0, ''),
(3, 'dấđâsds', 0x756e6b6e6f776e2e6a7067, 'kinglnhpd09634@fpt.edu.vn', '0908152508', 'k16816429234', 0, ''),
(4, 'demo', 0x756e6b6e6f776e2e6a7067, 'demo@gmail.com', '0908152508', 'k16816429234', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_Cmt`),
  ADD KEY `nguoiBinhLuan` (`Uid`),
  ADD KEY `binhluancuasanpham` (`id_SP`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_ChiTietDonHang`),
  ADD KEY `SanPham` (`id_SP`),
  ADD KEY `DonHang` (`id_DonHang`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_DonHang`),
  ADD KEY `NguoiDat` (`id_Customer`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`id_Hang`),
  ADD KEY `nguoiTaoHang` (`Uid`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_Loai`),
  ADD KEY `nguoiTaoDanhMuc` (`Uid`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`idLT`),
  ADD KEY `theLoai` (`idTL`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_SP`),
  ADD KEY `nguoiTaoSanPham` (`Uid`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTL`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idTin`),
  ADD KEY `LoaiTin` (`idLT`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_Cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_ChiTietDonHang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_DonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `id_Hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_Loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `idLT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_SP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idTin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluancuasanpham` FOREIGN KEY (`id_SP`) REFERENCES `sanpham` (`id_SP`),
  ADD CONSTRAINT `nguoiBinhLuan` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `DonHang` FOREIGN KEY (`id_DonHang`) REFERENCES `donhang` (`id_DonHang`),
  ADD CONSTRAINT `SanPham` FOREIGN KEY (`id_SP`) REFERENCES `sanpham` (`id_SP`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `NguoiDat` FOREIGN KEY (`id_Customer`) REFERENCES `users` (`Uid`);

--
-- Constraints for table `hang`
--
ALTER TABLE `hang`
  ADD CONSTRAINT `nguoiTaoHang` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);

--
-- Constraints for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD CONSTRAINT `nguoiTaoDanhMuc` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);

--
-- Constraints for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD CONSTRAINT `theLoai` FOREIGN KEY (`idTL`) REFERENCES `theloai` (`idTL`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `nguoiTaoSanPham` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `LoaiTin` FOREIGN KEY (`idLT`) REFERENCES `loaitin` (`idLT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
