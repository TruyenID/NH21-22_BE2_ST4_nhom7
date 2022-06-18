-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2022 at 07:14 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1234@gmail.com', NULL, 'e807f1fcf82d132f9bb018ca6738a19f', NULL, '2022-06-29 07:04:38', '2022-06-21 07:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
CREATE TABLE IF NOT EXISTS `billings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fistname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `billing_id` double NOT NULL,
  `user_id` double NOT NULL,
  `product_id` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Xiaomi'),
(4, 'Asus'),
(5, 'Oppo'),
(6, 'ViVo');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_04_13_114012_create_products_table', 1),
(2, '2022_04_13_114123_create_protypes_table', 1),
(3, '2022_04_13_114213_create_manufactures_table', 1),
(4, '2022_04_13_114734_create__recelptt_detalls_table', 1),
(5, '2022_04_13_115042_create_recelpts_table', 1),
(6, '2022_04_13_115533_create_carts_table', 1),
(7, '2022_04_13_115709_create_billings_table', 1),
(8, '2022_05_15_103158_create_tbl_admin_table', 1),
(9, '2022_05_15_103247_create_admin_table', 1),
(10, '2022_05_22_083327_create_review_ratings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_id` double NOT NULL,
  `type_id` double NOT NULL,
  `price` double NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` double(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`) VALUES
(1, 'iPhone 12 Pro Max 512GB', 2, 1, 34090000, 'iphone-12-pro-max-512gb-xanh-duong-1-org.jpg', '      \r\n            Cấu hình Điện thoại iPhone 12 Pro Max 512GB\r\n            Màn hình:OLED6.7\"Super Retina XDR\r\n            Hệ điều hành: iOS 15\r\n            Camera sau: 3 camera 12 MP\r\n            Camera trước:12 MP\r\n            Chip: Apple A14 Bionic\r\n            RAM: 6 GB\r\n            Bộ nhớ trong: 512 GB\r\n            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G\r\n            Pin, Sạc:3687 mAh20 W ', 1.00),
(2, 'Samsung Galaxy Z Fold3 5G', 1, 1, 36990000, 'samsung-galaxy-z-fold3-5g-1.jpg', '      \r\n            Cấu hình Điện thoại Samsung Galaxy Z Fold3 5G 256GB\r\n            Màn hình:Chính: 7.6 inch, \r\n            Hệ điều hành: android 11\r\n            Camera sau: 12.0 MP + 12.0 MP + 12.0 MP\r\n            Camera trước:10.0 MP\r\n            RAM: 12 GB\r\n            Bộ nhớ trong: 256 GB\r\n            SIM:2 - 2 Nano SIM hoặc 1 eSIM, 1 Nano SIM\r\n            Dung lượng Pin:4400 mAh ', 1.00),
(3, 'Xiaomi Mi 11 5G', 3, 1, 21990000, 'xiaomi-mi-11-lite-4g-blue-600x600.jpg', '      \r\n            Cấu hình Điện thoại Xiaomi Mi 11 5G\r\n            Màn hình:AMOLED6.81\"Quad HD+ (2K+) \r\n            Hệ điều hành: android 11\r\n            Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP\r\n            Camera trước: 20 MP\r\n            RAM: 8 GB\r\n            Chip: Snapdragon 888\r\n            Bộ nhớ trong: 256 GB\r\n            SIM:2 Nano SIMHỗ trợ 5G\r\n            Pin, Sạc: 4600mAh, 55W ', 2.00),
(4, 'Vivo X70 Pro 5G', 6, 1, 19990000, 'vivo-x70-pro-xanh-hong-1-600x600.jpg', '      \r\n            Cấu hình Điện thoại Vivo X70 Pro 5G\r\n            Màn hình:AMOLED6.56\"Full HD+\r\n            Hệ điều hành:Android 11\r\n            Camera sau:Chính 50 MP & Phụ 12 MP, 12 MP, 8 MP\r\n            Camera trước:32 MP\r\n            Chip:MediaTek Dimensity 1200\r\n            RAM:12 GB\r\n            Bộ nhớ trong:256 GB\r\n            SIM:2 Nano SIMHỗ trợ 5G\r\n            Pin, Sạc:4450mAh, 44W ', 2.00),
(6, 'Laptop Xiaomi MiBook Air', 3, 2, 12890000, 'laptop-xiaomi-mi-notebook-air-12.5-inch-thiet-ke-746x400.jpg', '      \r\n            Cấu hình Laptop Xiaomi MiBook Air 12.5 inch\r\n            Kích thước: 292mm x 202mm x 12.9mm\r\n            Trọng lượng: 1.07kg\r\n            Màn hình: 12.5″ Full HD 1920 x 1080 (176 ppi) 16:9\r\n            CPU: Intel Core M3 6Y30 (4M Cache, up to 2.20 GHz)\r\n            GPU: Intel HD Graphics 515\r\n            Bộ nhớ: 128G SATA SSD (có thể mở rộng thêm một thanh SSD)\r\n            RAM: 4G LPDDR3 1866MHz\r\n            Máy ảnh: Camera 1.0MP 1280 x 720\r\n            WIFI: Intel 2X2, 802.11 b/g/n/ac, 2.4GHz、5GHz\r\n            Âm thanh: Chip âm thanh Realtek ALC255, Loa đôi AKG 2Wx2, Dolby Audio™ Premium\r\n            Kết nối: 1 cổng USB 3.0 (tốc độ 5 Gbps), HDMI 4K, Jack 3.5mm, Type-C\r\n            Hệ điều hành: Windows 10 Home\r\n            Pin: Pin Li-Po 37w(typ), sạc nhanh 30 phút được 50%, thời gian sử dụng dài nhất 11.5 giờ', 1.00),
(8, 'Laptop Asus Gaming Rog Strix', 4, 2, 21490000, 'd6bb72333118eea373fd684372ba8dc2.jpg', '      \r\n            Cấu hình Laptop Asus Gaming Rog Strix G15 G513IH HN015W\r\n            CPU:Ryzen 74800H2.9GHz\r\n            RAM:8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\n            Ổ cứng:512 GB SSD NVMe PCIe\r\n            Màn hình:15.6\"Full HD (1920 x 1080)144Hz\r\n            Card màn hình:Card rờiGTX 1650 4GB\r\n            Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C (Power Delivery and DisplayPort)\r\n            Hệ điều hành:Windows 10 Home SL\r\n            Kích thước, trọng lượng:Dài 354 mm - Rộng 259 mm - Dày 206 mm - Nặng 2.1', 1.00),
(7, 'Laptop Apple MacBook Air M1', 2, 2, 24450000, 'Laptop Apple MacBook Air M1 2020.jpg', '      \r\n            Cấu hình Laptop Apple MacBook Air M1 2020\r\n            CPU:Apple M1\r\n            RAM:8 GB\r\n            Ổ cứng:256 GB SSD\r\n            Màn hình:13.3\"Retina (2560 x 1600)\r\n            Card màn hình:Card tích hợp7 nhân GPU\r\n            Cổng kết nối:2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\n            Đặc biệt:Có đèn bàn phím\r\n            Hệ điều hành:Mac OS\r\n            \r\n            Thiết kế:Vỏ kim loại nguyên khối\r\n            Kích thước, trọng lượng:Dài 304.1 mm - Rộng 212.4 mm - Dày 4.1 mm đến 16.1 mm - Nặng 1.29 kg', 1.00),
(5, 'Laptop Asus Vivobook 13', 6, 2, 17790000, 'Laptop Asus Vivobook 13 Slate Oled T3300KA.jpg', '      \r\n            Cấu hình Laptop Asus Vivobook 13 Slate Oled T3300KA\r\n            Kích thước màn hình: 13.3 inches\r\n            Trọng lượng: 0.78 kg            \r\n            CPU: Intel Pentium Silver N6000 1.1 GHz (4M Cache, up to 3.3 GHz, 4 cores)\r\n            Card đồ họa: Intel® UHD\r\n            Bộ nhớ: 128G SATA SSD (có thể mở rộng thêm một thanh SSD)\r\n            RAM: 8GB\r\n            Hệ điều hành: Windows 11 Home\r\n            Pin: 3-cell Li-ion, 50 Wh\r\n            Trọng lượng: 0.78 kg\r\n            Tính năng đặc biệt: Ổ cứng SSD, Wi-Fi 6, Màn hình cảm ứng, Bảo mật vân tay', 2.00),
(10, 'iPad Air 5', 2, 3, 17790000, 'iPad Air 5.jpg', '      \r\n            Cấu hình iPad Air 5\r\n            Kích thước màn hình: 10.9 inches\r\n            Công nghệ màn hình: Liquid Retina\r\n            Camera sau: 12MP\r\n            Camera trước: 12MP\r\n            Chipset: Chip M1\r\n            Dung lượng: RAM 8 GB\r\n            Bộ nhớ trong: 64 GB\r\n            Hệ điều hành: iPadOS\r\n            Độ phân giải màn hình: 2360 x 1640 pixel\r\n            Loại CPU: CPU 8 nhân\r\n            Trọng lượng: 461 g', 1.00),
(9, 'Apple iPad Pro 11 128GB', 2, 3, 19950000, 'Apple iPad Pro 11.jpg', '      \r\n            Cấu hình Apple iPad Pro 11\r\n            Kích thước màn hình	11 inches\r\n            Công nghệ màn hình: IPS LCD\r\n            Camera sau: 12MP góc rộng,10MP góc siêu rộng\r\n            Camera trước:12MP góc siêu rộng 122 độ\r\n            Chipset: Apple M1 8 nhân\r\n            Dung lượng RAM:	8 GB\r\n            Bộ nhớ trong: 128 GB\r\n            Pin: 7538mAh\r\n            Hệ điều hành: iPadOS\r\n            Độ phân giải màn hình: 2048 x 2732 pixels\r\n            Loại CPU: 8 nhân CPU\r\n            Trọng lượng: 466 g', 1.00),
(12, 'Apple Watch Series 7 dây thép', 2, 4, 19700000, 'Apple Watch Series 7.jpg', '      \r\n            Cấu hình: Apple Watch Series 7\r\n            Kích thước:	45 x 38 x 10.7 mm (1.77 x 1.50 x 0.42 in)\r\n            SIM: eSIM\r\n            Chipset: Apple S7\r\n            Camera trước: 12MP góc siêu rộng 122 độ\r\n            Chipset: Apple M1 8 nhân\r\n            CPU: Dual-core\r\n            GPU: PowerVR\r\n            Bộ nhớ trong: 32GB', 1.00),
(11, 'Đồng Hồ OPPO Watch 46mm', 5, 4, 7990000, 'avatar-dong-ho-thong-minh-oppo-watch.jpg', '      \r\n            Cấu hình đồng hồ OPPO Watch 46mm\r\n            Màn hình: AMOLED1.91 inch\r\n            Mặt: Kính cường lực46 mm\r\n            Thời lượng pin: Khoảng 21 ngày (chế độ tiết kiệm pin)Khoảng 36 giờ (chế độ thường)\r\n            Kết nối với hệ điều hành: Android 6.0 trở lêniOS 12 trở lên\r\n            Tính năng cho sức khỏe: Chế độ luyện tậpTheo dõi giấc ngủTính lượng calories tiêu thụTính quãng đường chạyĐo nhịp timĐếm số bước chân', 2.00),
(22, 'Pin sạc dự phòng Xiaomi Redmi', 3, 5, 450000, 'pin-sac-du-phong-xiaomi-redmi-20000mah-sac-nhanh-18w_3_.jpg', '      \r\n            Pin dự phòng Xiaomi Redmi 20000mAh – Phụ kiện pin sạc an toàn, hiệu suất cao\r\n            Thiết kế nhỏ gọn, hoàn thiện từ nhựa ABS\r\n            Thiết bị sở hữu kích thước tổng thể 154 x 73.6 x 27.3mm, có thể thấy mặc dù không nhỏ gọn như nhiều sản phẩm cao cấp khác, nhưng nó chứa dung lượng pin lên đến 20000mAh.\r\n            Viên pin dung lượng lớn 20000mAh, sạc hai thiết bị cùng một lúc với công suất tối đa 40W\r\n            Đồng thời, pin sạc này cũng có thể sạc cho nhiều loại điện thoại, máy tính bảng khác nhau, thậm chí là smartwatch.\r\n            Điểm thu hút thứ hai của thiết bị này là đầu vào của pin dự phòng cũng khá ấn tượng khi được trang bị cùng lúc cả hai giao tiếp micro-USB và USB Type-C, tạo điều kiện sạc pin thuận tiện hơn', 2.00),
(13, 'Pin dự phòng Xiaomi 20000mAh', 3, 5, 1100000, 'pin-sac-du-phong-xiaomi-bhr5121gl-20000mah-50w.jpg', '      \r\n            Pin dự phòng Xiaomi 20.000mAh 50W (BHR5121GL) - Sạc nhanh 2 chiều\r\n            Thiết kế gọn gàng với vật liệu ABS bền bỉ cùng 3 cổng sạc nhanh\r\n            Xiaomi 20.000mAh 50W (BHR5121GL) cũng được hoàn thiện một cách khá chi tiết và tỉ mỉ với lớp vỏ mờ nhám hạn chế trầy xước và trơn tay khi cầm\r\n            Điểm nhấn khác khiến Xiaomi 20.000mAh 50W (BHR5121GL) trở nên nổi bật hơn là nó sở hữu đến 3 cổng sạc nhanh: 2 cổng USB-A và 1 cổng USB-C, có thể sạc cùng lúc nhiều thiết bị nhưng vẫn cho ra thông số ấn tượng.\r\n            Pin dự phòng Xiaomi 20.000mAh 50W (BHR5121GL) không chỉ có thể sạc đồng thời nhiều thiết bị cùng lúc mà còn mang đến một tốc độ sạc ấn tượng với công suất sạc đạt đến 50W và đương nhiên, nó sẽ tốc độ sạc đạt nhanh hơn so với các bộ sạc 5W thông thường đến 50%.\r\n            Nếu bạn đang tìm kiếm một sạc dự phòng giá tốt mà chất lượng sạc phải nhanh và đảm bảo an toàn thì Xiaomi 20.000mAh 50W (BHR5121GL) chính là lựa chọn hoàn hảo đó nhé!', 2.00),
(15, 'Pin sạc dự phòng SamSung', 1, 5, 690000, 'SamSung_EB-P3300X_10.000 MAH.jpg', '      \r\n            Pin dự phòng SamSung EB-P3300X – Dung lượng lớn, hỗ trợ sạc nhanh 25W\r\n            Đèn LED thông báo tình trạng pin nổi bật cùng thiết kế sơn nhám ôm tay\r\n            Đa số các máy điện thoại hay các thiết bị liên lạc chỉ có mức pin tối đa là 5000mAh, cho nên trang bị cho mình một viên pin sạc dự phòng 10.000mAh là một điều khá hợp lý. Khi bạn có thể sạc lên đến 2-3 lần cho một thiết bị điện thoại di động của mình.\r\n            2 cổng sạc tiện lợi và việc sạc ngược cục sạc dễ dàng thông qua cổng Type-C\r\n            Dù bạn là người chuyên sử dụng loại cáp sạc USB-C hay là Micro-USB đi nữa thì với phụ kiện sạc dự phòng đến từ Samsung này bạn không cần phải lo lắng quá nhiều nếu bạn sạc chúng bằng một trong hai loại dây sạc trên cho cục sạc.', 1.00),
(16, 'Pin dự phòng Samsung', 1, 5, 790000, '10000_mAh_EB-U1200.jpg', '      \r\n            Pin sạc dự phòng Samsung Wireless Charger EB-U1200 – pin dự phòng kết hợp sạc không dây\r\n            Thiết kế nguyên khối hình chữ nhật, 5V-2A khi sạc thường, 9V-1.67A khi sạc nhanh\r\n            Phần vỏ được làm bằng hợp kim nhôm kết hợp với độ gia công nhỏ gọn mang đến sự tiện dụng tối đa cho bạn khi mang theo đi du lịch, đi công tác.\r\n            Sạc nhanh 2 chiều tối đa 15W, dung lương lưu trữ lên đến 10000 mAh\r\n            Tương thích sạc không dây chuẩn Qi', 2.00),
(17, 'Pin dự phòng Apple Magsafe', 2, 5, 2290000, 'Apple-MagSafe-Battery-Pack.jpg', '      \r\n            Pin dự phòng Apple MagSafe - Pin sạc không dây đến từ Apple\r\n            Thiết kế nhỏ gọn, công suất sạc lớn, lên đến 15W\r\n            Apple MagSafe có thể sạc cho iPhone với công suất 5W ở chế độ sạc không dây và lên đến 15W khi sử dụng sạc dây.\r\n            Dung lượng pin lớn, lõi pin lithium an toàn\r\n            Được biết mức giá của pin dự phòng Apple MagSafe chính hãng khá cao so với mặt bằng chung nhưng hầu như mọi người đều lường trước vì đây là đứa con của Apple. ', 1.00),
(18, 'Tai nghe không dây Xiaomi', 3, 6, 1190000, 'tai-nghe-bluetooth-redmi-buds-3.jpg', '      \r\n            Tai nghe Xiaomi Redmi Buds 3 – tai nghe không dây chống ồn hiệu quả\r\n            Thiết kế dạng earbuds, thoải mái khi sử dụng\r\n            Tai nghe với thiết kế màu trắng tinh tế, sang trong khi sử dụng. Đặc biệt, tai nghe còn được trang bị công nghệ kháng nước và bụi bẩn IP54, nhờ đó người dùng có thể sử dụng tai nghe trong tập luyện.\r\n            Xiaomi Redmi Buds 3 được trang bị driver có kích thước lên đến 12nm mang lại khả năng tái tạo tinh chỉnh âm phù hợp với xung hướng cụ thị trường.\r\n            ai nghe Xiaomi Redmi Buds 3 chính hãng với thiết kế tinh tế sang trọng cùng âm thanh chất lượng mang lại trải nghiệm giải trí ấn tượng cho người dùng.', 2.00),
(19, 'Tai nghe Bluetooth Apple AirPods', 2, 6, 4690000, 'bluetooth-airpods-pro-magsafe-charge-apple.jpg', '      \r\n            Tai nghe AirPods Pro Magsafe 2021 - Trải nghiệm âm thanh đầy mê hoặc\r\n            Thiết kế cải tiến tăng độ êm nhẹ khi đeo\r\n            Phần thân được tích hợp vùng cảm biến chạm giúp bạn dễ dàng điều chỉnh âm nhạc, nhận cuộc gọi, và chuyển đổi giữa các tính năng hỗ trợ.\r\n            AirPods Pro 2021 mang đến chất lượng âm thanh đặc sắc và đẳng cấp. Bên trong tai nghe cũng trang bị các phần cứng giúp tăng cường độ mạnh âm bass, cân bằng các dải âm thấp và trung, cũng như lọc tiếng ồn khi thu âm giọng nói cho chất lượng cuộc gọi tốt hơn.\r\n            Sạc pin tiện lợi qua cổng USB-C, dùng không ngừng nghỉ', 1.00),
(20, 'Tai nghe Bluetooth Samsung', 1, 6, 2490000, 'tai-nghe-bluetooth-true-wireless-galaxy-buds-pro.jpg', '      \r\n            Tai nghe Samsung Galaxy Buds Pro - Thiết kế tinh tế cùng chất âm đột phá\r\n            Thiết kế công thái học cho trải nghiệm đeo thoải mái và hoàn hảo\r\n            Chống ồn chủ động ANC, làm chủ âm thanh mà bạn mong muốn\r\n            Samsung tích hợp cho tai nghe Bluetooth Samsung Galaxy Buds Pro công nghệ chống ồn chủ động ANC tiên tiến. Giúp lọc tạp âm hiệu quả để bạn có thể thưởng thức âm thanh, nhận thông báo tin nhắn và gọi thoại với chất lượng tốt nhất.\r\n            Tích hợp 3 mic thu cùng bộ thu nhận giọng nói thế hệ mới nâng cao chất lượng đàm thoại\r\n            Làm việc và giải trí liên tục không lo gián đoạn với thời lượng pin lên đến 20 giờ\r\n            Màng loa 12nm mang đến chất âm sống động, tinh chỉnh bởi AKG', 1.00),
(21, 'Loa Bluetooth Apple Homepod', 2, 7, 23390000, 'loa-apple-homepod-mini.jpg', '      \r\n            Với chiều cao chỉ 3,3 inch, sản phẩm gần như không chiếm không gian nhưng lại có thể lấp đầy toàn bộ căn phòng với âm thanh 360 độ phong phú, âm thanh tuyệt vời từ mọi góc độ.\r\n            Cụ thể, treble và mid đều được thiết kế vừa phải mang đến âm thanh tốt. Về bass của loa thì mang đến sự nhẹ nhàng không quá dồn dập.\r\n            Apple Homepod Mini còn được phủ toàn thân bên ngoài đến cả dây sạc một lớp vải mềm. Tạo sự đồng bộ cho sản phẩm và mang đến cái nhìn đầy tinh tế và sang trọng cho sản phẩm.\r\n            Vi xử lý S5 cũng được trang bị trên Homepod Mini cho khả năng kết nối với nhiều loa khác tạo được không gian âm thanh đa chiều stereo.\r\n            Bạn cũng có thể kết nối với Airplay 2 để tận hưởng âm thanh đa phòng. Bên cạnh đó bạn có thể phát nhạc trên nhiều nền tảng khác nhau như Pandora,\r\n            Amazon Music và iHeartRadio cho khả năng nghe nhạc linh động hơn và có thể tận hưởng nhiều ca khúc khác nhau toàn trên thế giới.', 1.00),
(23, 'Asus ZenBeam Latte', 4, 7, 23390000, 'asus-zenbeam-latte-loa-bluetooth.jpg', '      \r\n            Asus ZenBeam Latte: Loa Bluetooth tích hợp máy chiếu kích thước nhỏ bằng tách cafe\r\n            Thời lượng pin asus zenbeam latte nghe nhạc 12 tiếng và xem video 3 tiếng', 2.00),
(24, 'Loa thanh Soundbar Samsung', 1, 7, 1390000, 'samsung-hw-t420.jpg', '      \r\n            Với loa thanh 2.1ch kênh, loa siêu trầm 6.5 inch kết hợp với công suất 150W của loa thanh Samsung HW-T420 đã tạo nên âm thanh trầm bổng mạnh mẽ, sâu lắng hơn cho căn phòng của bạn. Giúp bạn có thể chìm đắm trong âm nhạc, tận hưởng những âm thanh chân thực nhất.\r\n            Loa thanh Samsung HW-T420 không dây đã được các nhà sản xuất nâng cao chất lượng dải âm thành hệ thống âm thanh vòm đa chiều, đỉnh cao mà không cần dây kết nối. Điều này giúp cho người dùng có những cảm nhận âm thanh như đang ở rạp chiếu phim và cảm nhận thực tế từng âm nhanh như đang có mặt ngay tại hiện trường mang đến trải nghiệm tuyệt vời, những phút thư giản nhất.', 2.00),
(25, 'Loa bluetooth Level Box Slim', 1, 7, 990000, 'loa-bluetooth-samsung-level-box-slim.jpg', '      \r\n            Bạn đang có nhu cầu nghe nhạc thư giãn đầu óc sau những giờ làm việc căng thẳng nhưng vẫn chưa chọn được loại loa nghe nhạc nào vừa có trọng lượng nhẹ, chất lượng cao, âm thanh hay? Hãy thử trải nghiệm loa bluetooth Samsung Level Box Slim chính hãng tại shop phụ kiện Samsung với nhiều tính năng nổi bật.\r\n            - Loa Samsung Level Box Slim được đánh giá là một trong những mẫu loa Bluetooth Mini nhỏ gọn nhất của Samsung. Thiết kế hình hộp, mỏng nhẹ và gọn gàng chính vì thế bạn có thể đem đi bất kì đâu và ở bất kì lúc nào, ngay cả khi kẹp trên xe đạp để nghe nhạc khắp mọi nơi cũng được.\r\n            - Nhờ sự tính toán và sử dụng các dòng chất liệu cao cấp hãng Samsung sản xuất sản phẩm chỉ có trọng lượng vỏn vẹn 236g nhưng chứa đựng trong mình là 2 loa nhỏ có công suất 8W cho âm thanh tràn ngập khi hoạt động.\r\n            - Ngay mặt sau loa được hãng trang bị một chân đứng có thể bật ra hoặc gấp lại khi cần, giúp cho loa luôn hướng đến người dùng, cho trải nghiệm âm thanh tốt nhất có thể.\r\n            - Các phím bấm chức năng được tích hợp ngay mặt trên và loa di động Samsung Level Box Slim sẽ sạc được điện thoại có cổng microUSB.\r\n            - Loa Level Box Slim được hãng sản xuất chống nước IPX7 chính vì thế dù bạn đi gặp trời mưa. để loa trong phòng tắm hay bên hồ nước vẫn nghe nhạc bình thường.', 2.00),
(26, 'Loa bluetooth Samsung Wireless', 1, 7, 690000, 'Loa-bluetooth-scoop-04.jpg', '      \r\n            Loa bluetooth Samsung Wireless Scoop là sản phẩm loa bluetooth mới ra mắt của thương hiệu Samsung. Với kiểu dáng cực kỳ nhỏ, có thể nằm gọn trong lòng bàn tay bạn, cùng chất lượng âm thanh chuẩn, loa bluetooth Samsung Scoop hiện là dòng sản phẩm được rất nhiều người dùng yêu thích.\r\n            Trọng lượng loa rất nhẹ, chỉ 151 g, phần thân loa được thiết kế dây treo, bạn có thể thuận tiện móc loa vào balo hay túi,…mang theo bên mình.\r\n            Loa được tích hợp công nghệ bluetooth v4.0, cho kết nối nhanh chóng. Loa bluetooth chỉ gọn gàng trong lòng bàn tay quý khách nhưng mang lại âm to rõ ràng hơn vẻ ngoài.\r\n            Loa bluetooth Samsung Wireless Scoop được trang bị công nghệ chống thấm nước giúp bạn thoải mái thưởng thức âm nhạc mọi trong khi mọi nơi.\r\n            Loa Samsung Wireless Speaker Scoop tích hợp microphone. Giảm tiếng ồn và chống tiếng vang, giúp người dùng có thể nhận cuộc gọi mà không cần chạm vào điện thoại.\r\n            Thời lượng sạc pin lên tới 9h nghe nhạc. Jack 3.5mm kết nối hầu hết các thiết bị.', 2.00),
(27, 'Loa Bluetooth Xiaomi', 3, 7, 869000, 'loa-xiaomi-mi-bluetooth-speaker.jpg', '      \r\n            - Mi Speaker sở hữu thiết kế gọn gàng bắt mắt với lớp vỏ nhôm, thay vì vật liệu nhựa ABS như trên Square Box\r\n            THÔNG SỐ KĨ THUẬT:\r\n\r\n                Kích thước: 168 x 24.5 x 58 mm\r\n\r\n                Trọng lượng: 270g\r\n\r\n                Số kênh: 2(2.0)\r\n\r\n                Kiểu loa: Subwoofer\r\n\r\n                Công suất: 3W x 2\r\n\r\n                Chuẩn Bluetooth: 4.0\r\n\r\n                Kiểu Bluetooth hỗ trợ: A2DP\\AVRCP\r\n\r\n                Khoảng cách kết nối: 10 mét\r\n\r\n                Thẻ nhớ: microSD, tối đa 32GB\r\n\r\n                Dung lượng pin: 1500mAh\r\n\r\n                Thời gian sử dụng: 8h (sạc đầy 2,5h)', 2.00),
(28, ' Loa bluetooth Xiaomi ZMI B508', 3, 7, 248000, 'loa-bluetooth-xiaomi-9-1.jpg', '      \r\n            Thêm một sản phẩm tuyệt vời đến từ Xiaomi đó chính là chiếc loa Bluetooth Xiaomi kiêm sạc không dây này. 20W Xiaomi ZMI B508 ghi điểm với người dùng bởi được trang bị 2 chức năng trong 1 như tên gọi rất tiện lợi. Cùng với kích thước gọn nhỏ, dễ mang theo bên mình, đảm bảo thiết bị này sẽ đem đến cho bạn những phút giây giải trí tuyệt vời nhất.\r\n            - Sử dụng công nghệ Bluetooth 5.0 cho đường truyền âm thanh nhanh chóng và tiện lợi nhất.\r\n            - Công suất của loa lên đến 5W, đem đến chất lượng âm tuyệt hảo.\r\n            - Tích hợp chức năng sạc không dây tiện lợi với chức năng y hệt một chiếc sạc dự phòng có thể đem theo người dễ dàng.\r\n            - Tích hợp nhiều tính năng bảo vệ an toàn, chống thấm nước giúp người dùng có thể yên tâm sử dụng.\r\n            - Thiết kế bề ngoài đẳng cấp, hiện đại với hệ thống đèn led 7 màu thay đổi theo nhịp bài hát, mang đến nhiều trải nghiệm mới lạ khi sử dụng.', 2.00),
(29, ' Loa bluetooth Xiaomi ZMI B508', 5, 7, 900000, 'loaoppo-12_800x450.jpg', '      \r\n            Nói về thiết kế, chiếc loa Bluetooth nhìn khá bầu bĩnh, các góc cạnh được bo tròn. Mặt trước và sau được hoàn thiện từ chất liệu vải nhìn vào khá thích tay, như các bạn có thể thấy mặt trước có thể hiển thị cả thời gian. Bao quanh chiếc loa là phần nhựa dẻo cũng có màu Xanh tông xoẹt tông.\r\n            Phần trên có một số phím nguồn kiêm luôn kết nối Bluetooth, các phím chuyển bài và tăng giảm âm lượng cơ bản.\r\n            Loa Bluetooth đến từ OPPO hỗ trợ công nghệ kết nối Bluetooth 5.0, việc kết nối diễn ra tương đối nhanh chóng. Phạm vi để \"tìm thấy nhau\" giữa chiếc loa với thiết bị của bạn trong bán kính khoảng 10m.\r\n            Loa Bluetooth của OPPO có dung lượng pin 750 mAh, có thể phát nhạc được khoảng 8 giờ đồng hồ cũng là thời lượng kha khá rồi. Nhưng để sạc đầy pin cho chiếc loa thì lại hơi mất thời gian, đến 3 tiếng đồng hồ .', 2.00),
(30, ' Loa bluetooth Pill +', 2, 7, 5000000, 'pill-loa-bluetooth-apple-1.jpg', '      \r\n            Phiên bản Pill+ không còn hình dạng \"tròn trĩnh\" của một viên thuốc mà thay vào đó là kiểu dáng phẳng ở 2 mặt trên dưới, tinh tế và hiện đại. Chất âm của Pill+ cũng được cải thiện rõ rệt, với hệ thống loa trầm tạo âm bass mạnh mẽ quen thuộc bên cạnh loa tweeter bổ sung vào 2 dải âm còn lại (mid, treble) sự chi tiết và rõ ràng. Pill+ có khả năng chơi nhạc lên tới 12 tiếng liền. Trên thân loa sẽ có 1 hệ thống đèn LED để báo hiệu dung lượng pin và một cổng USB để thực hiện chức năng sạc dự phòng cho smartphone. Đi kèm chiếc loa này là một ứng dụng được Apple phát triển riêng, cho phép người dùng kết nối Pill+ với nhiều thiết bị, thiết lập EQ cũng như ghép nối với một chiếc Pill+ khác để tạo nên dàn âm thanh 2.0.', 2.00),
(31, ' Loa Bluetooth Samsung Bottle', 1, 7, 990000, 'Loa-Bluetooth-Samsung-Bottle-EO-SG710-1.jpg', '      \r\n            Loa Bluetooth Samsung Bottle EO-SG710 được mệnh danh là chiếc đèn biết hát. Với thiết kế bên ngoài độc đáo, chiếc đèn ngủ kiêm loa di động vừa được Samsung cho ra mắt.\r\n            Loa Bluetooth Samsung Bottle EO-SG710 là sản phẩm được thiết kế khá đặc biệt trông giống như một bình đựng nước. Sự phối hợp của màu trắng và màu xám tạo nên vẻ thanh lịch, tinh tế phù hợp với mọi không gian. Samsung còn bố trí một quai xách giả da làm từ nhựa cứng và cố định. Thiết kế khá tiện dụng, dễ cầm loa di chuyển hoặc treo ở nhiều vị trí khác nhau.\r\n            Phần thân được tách biệt với hệ thống loa 360 độ đặt ở nửa bên dưới. Còn phía trên là lớp nhựa mờ với hệ thống đèn led nhiều màu tích hợp bên trong. Lớp nhựa này dễ bám bẩn nhưng cũng không khó để làm sạch. Kích thước nhỏ gọn với trọng lượng chỉ 360g dễ dàng di chuyển ở bất cứ đâu.\r\n            Loa Bluetooth Samsung Bottle EO- SG710 mang đến cho người dùng chất âm ấm áp, độ chi tiết khá tốt, âm lượng vừa đủ, phù hợp với không gian nhỏ như phòng ngủ. Thưởng thức âm nhạc trọn vẹn trong không gian của chính mình với âm thanh đa chiều 360 độ. Mẫu sản phẩm loa bluetooth Samsung này có khả năng tái tạo âm thanh tốt, không thiên về một chất âm nào cả rất phù hợp với nhiều thể loại nhạc.\r\n            Loa Bluetooth Samsung Bottle EO-SG710 được tích hợp công nghệ Bluetooth 4.0 cho nên kết nối nhanh chóng, ổn định độ trễ thấp, tương thích với nhiều thiết bị phát nhạc như điện thoại, máy tính bảng, laptop… Ngoài ra loa cũng có jack cắm 3.5mm để bạn có thể kết nối với các thiết bị không có bluetooth như tivi, pc qua dây cáp.', 2.00),
(32, 'Samsung Galaxy Watch 4 40mm', 1, 4, 5490000, 'samsung-galaxy-watch-4-40mm.jpg', '      \r\n            Màn hình:\r\n            SUPER AMOLED1.19 inch\r\n\r\n            Thời lượng pin:\r\n            Khoảng 1.5 ngày\r\n\r\n            Kết nối với hệ điều hành:\r\n            Android dùng Google Mobile Service\r\n\r\n            Mặt:\r\n            Kính cường lực Gorrilla Glass Dx+40 mm\r\n\r\n            Tính năng cho sức khỏe:\r\n            Theo dõi giấc ngủTính lượng calories tiêu thụĐiện tâm đồĐo huyết ápĐo nhịp timĐo nồng độ oxy (SpO2)Đếm số bước chân', 2.00),
(33, 'Samsung Galaxy Watch 4 LTE', 1, 4, 6990000, 'samsung-galaxy-watch-4-lte-44mm.jpg', '      \r\n            Màn hình:\r\n            SUPER AMOLED1.36 inch\r\n\r\n            Thời lượng pin:\r\n            Khoảng 1.5 ngày\r\n\r\n            Kết nối với hệ điều hành:\r\n            Android dùng Google Mobile Service\r\n\r\n            Mặt:\r\n            Kính cường lực Gorrilla Glass Dx+44 mm\r\n\r\n            Tính năng cho sức khỏe:\r\n            Theo dõi giấc ngủĐiện tâm đồĐo huyết ápĐo nhịp timĐo nồng độ oxy (SpO2)Đếm số bước chân', 2.00),
(34, 'Apple Watch SE 40mm viền nhôm', 2, 4, 7490000, 'se-40mm-vien-nhom-day-cao-su.jpg', '      \r\n            Màn hình:\r\n            OLED1.57 inch\r\n\r\n            Thời lượng pin:\r\n            Khoảng 1.5 ngày\r\n\r\n            Kết nối với hệ điều hành:\r\n            iOS bản mới nhất\r\n\r\n            Mặt:\r\n            Ion-X strengthened glass40 mm\r\n\r\n            Tính năng cho sức khỏe:\r\n            Chế độ luyện tậpTheo dõi giấc ngủTính lượng calories tiêu thụTính quãng đường chạyĐo nhịp timĐếm số bước chân', 2.00),
(35, 'Đồng hồ Xiaomi Mi Watch Lite', 3, 4, 1280000, 'watch-live.jpg', '      \r\n            Nằm trong số những chiếc đồng hồ thông minh giá có giá rẻ, Xiaomi Mi Watch Lite là một chiếc smartwatch có đẹp mắt với hoàn thiện chất lượng cao và nhiều tính năng thông minh.\r\n            Đồng hồ thông minh Xiaomi Mi Watch Lite gây ấn tượng với người dùng bởi thiết kế độc đáo. Thay vì màn hình tròn như thế hệ trước thì Mi Watch Lite được trang bị mặt vuông với 4 góc bo tròn mềm mại. Bên cạnh đó, khung viền của đồng hồ được làm bằng nhôm chắc chắn mang đến sự sang trọng và bền bỉ vượt trội.\r\n            Dây đeo chất liệu silicon dẻo và mềm đi kèm sản phẩm mang lại cảm giác êm ái và dễ chịu khi đeo trên tay.\r\n            Ngoài ra, một điểm cộng khác cho thiết bị này là khả năng 5ATM. Với trang bị này, người dùng có thể thoải mái đi dưới trời mưa hoặc rửa tay mà không lo ảnh hưởng tới chất lượng của đồng hồ.\r\n            Xiaomi Mi Watch Lite được trang bị màn hình LCD kích thước 1.41 inch độ phân giải HD mang đến hình ảnh ấn tượng và sắc nét tới từng chi tiết. Với độ sáng 350 nit, người dùng có thể sử dụng tốt trong mọi điều kiện ánh sáng khác nhau mà không lo bị lóa.', 2.00),
(36, 'Đồng hồ Xiaomi Mi Watch', 3, 4, 2290000, 'GS.008422_FEATURE_92387.jpg', '      \r\n            Chiếc đồng hồ thông minh này chỉ có trọng lượng 32 gram siêu nhẹ với khung viền nhựa nhẹ nhàng, thanh thoát. Dây đeo silicone thiết kế đục lỗ phù hợp nhiều kích cỡ cổ tay, mềm mại, mỏng nhẹ và ôm cổ tay tạo cảm giác thoải mái cho người dùng khi đeo đồng hồ suốt ngày dài. Đặc biệt dây đeo có thể tháo rời thuận tiện hơn khi vệ sinh đồng hồ.\r\n            Đồng hồ thông minh Xiaomi được trang bị màn hình AMOLED kích thước 1.39 inch có độ phân giải 454 x 454 pixels, độ sáng lên đến 450 nits cho khả năng hiển thị hình ảnh sắc nét, sống động, quan sát thông tin rõ nét ngay cả khi sử dụng đồng hồ ở ngoài trời. Xiaomi Mi Watch còn được trang bị mặt kính cường lực Gorilla Glass 3 mỏng nhẹ nhưng vô cùng chắc chắn, hạn chế trầy xước, khả năng chịu lực cao tăng độ bền cho thiết bị.\r\n            Xiaomi cập nhật thêm nhiều mặt đồng hồ mới với hơn 100 mẫu giao diện mặt đồng hồ rực rỡ, đầy màu sắc cho phép người dùng có thể thoải mái chọn mẫu mình thích. Đặc biệt, bạn còn có thể tự tạo riêng cho mình một mặt đồng hồ theo phong cách cá nhân với những tấm hình mà bạn yêu thích.\r\n            Chiếc đồng hồ thông minh này cung cấp cho người dùng 17 chế độ luyện tập thể thao chuyên nghiệp như chạy bộ, đạp xe, leo núi, bơi lội, yoga, tập luyện tự do... Ngoài ra còn có 100 bài tập hỗ trợ, hỗ trợ bạn rèn luyện sức khỏe tốt hơn, tập luyện bài bản và chuyên nghiệp, khoa học hơn.\r\n            Tính năng màn hình luôn hiển thị giúp người dùng dễ dàng theo dõi thông báo cuộc gọi, tin nhắn hay thông báo từ các ứng dụng: Zalo, Messenger (Facebook), Line,... để bạn không bỏ lỡ thông tin quan trọng nào. Chỉ cần kết nối đồng hồ với các thiết bị khác thông qua Bluetooth v5.0, GPS, bạn có thể nhận thông báo trên chiếc đồng hồ đeo tay của mình.', 2.00),
(37, 'Đồng hồ Xiaomi Mi band 4C', 3, 4, 450000, '1_637394418901019285.jpg', '      \r\n            Trái với kiểu dáng thuôn dài với các góc được bo tròn của những chiếc Mi Band cũ, Xiaomi Mi Band 4C được thiết kế vuông vức, tạo ra phong cách nam tính và khoẻ khoắn khi đeo trên tay.\r\n            Hướng tới người dùng đeo đồng hồ khi tập luyện thể thao, Xiaomi đã chọn chất liệu nhựa cao cấp bền nhẹ để chế tác khung vỏ thiết bị, dây đeo cao su có kiểu dáng ôm tay, mềm mại mà vẫn đảm bảo chắc chắn khi người dùng vận động mạnh. \r\n            Màn hình được bảo vệ bởi kính cường lực hạn chế tối đa tình trạng xước dăm và hư hại trong quá trình sử dụng. Lớp phủ màn hình có khả năng chống vây tay, hạn chế màn hình mờ ảnh hưởng tới hiển thị. Màn hình TFT được trang bị có độ phân giải 128x220, có thể hiển thị hình ảnh với màu sắc trung thực với độ sáng tối đa 200 nit.\r\n            Với chuẩn kết nối Bluetooth 5.0, Xiaomi Mi Band 4C có thể kết nối từ xa với smartphone trong phạm vi lên tới 10 mét. Nhờ đó, bạn có thể tập luyện mà vẫn nhận được các thông báo cần thiết từ điện thoại, dễ dàng chuyển bài hát đang nghe hoặc từ chối cuộc gọi tới chỉ với một thao tác trên màn hình Mi Band 4C. Sản phẩm đạt độ tương thích tối ưu với các dòng iPhone cài đặt iOS 10 và Android 5.0 trở lên.\r\n            Cung cấp năng lượng hoạt động cho Mi Band 4C là viên pin 130 mAh. Bạn cũng sẽ chỉ mất khoảng hai tiếng chờ đợi để thiết bị nạp đủ pin cho tối đa 14 ngày vận hành bền bỉ tiếp theo. Nhờ đó, bạn không cần phải lo lắng tới việc phải đem theo bộ sạc trong những chuyến du lịch hoặc công tác nhiều ngày.', 2.00),
(38, 'Đồng hồ thông minh Xiaomi', 3, 4, 3500000, 'dong-ho-thong-minh-xiaomi-watch.jpg', '      \r\n            Giữ nguyên kiểu dáng thiết kế cổ điển với mặt đồng hồ dạng tròn, Watch Color 2 trang bị màn hình 1.43 inch, sử dụng tấm nền AMOLED với mật độ điểm ảnh 326 ppi. Màn hình này của Watch Color 2 hỗ trợ tần số quét 60Hz cho trải nghiệm sử dụng mượt mà hơn, hỗ trợ tính năng Always on. Có tới hơn 200 mặt đồng hồ khác nhau và người dùng có thể tuỳ chỉnh theo sở thích cá nhân.\r\n            Xiaomi Watch Color 2 có trọng lượng khá nhẹ chỉ 36.3 gam, không cho cảm giác quá nặng nề khi đeo trên cổ tay, đặc biệt là khi tập luyện. Khung viền của Watch Color 2 hoàn thiện từ kim loại, còn dây đeo hoàn thiện từ silicon với thiết kế cài truyền thống.\r\n            Xiaomi Watch Color 2 hỗ trợ 117 chế độ luyện tập thể dục thể thao, trong đó bao gồm 19 chế độ chuyên nghiệp cường độ cao như bóng rổ, tenis, bơi lội... Đồng hồ hỗ trợ chuẩn kháng nước 5ATM cho phép hoạt động trong nhiều điều kiện thời tiết.\r\n            Xiaomi trang bị cho Watch Color 2 cảm biến sinh trắc học PPG thế hệ mới, cho phép đo nhịp tim liên tục theo thời gian thực trong vòng 24 giờ, hỗ trợ đưa ra cảnh báo khi nhịp tim quá cao hoặc quá thấp. Khi đồng bộ với ứng dụng Xiaomi Wearable, Xiaomi Watch Color 2 lưu giữ nhịp tim của người đeo trong 30 ngày và phân tích các chỉ số nhằm đưa ra các lời khuyên có ích cho sức khoẻ người dùng.', 2.00),
(39, 'iPhone 13 Pro Max 128GB', 2, 1, 29690000, 'iphone_13-_pro-5_4.jpg', '  \r\n            ĐẶC ĐIỂM NỔI BẬT    \r\n            - Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao\r\n            - Không gian hiển thị sống động - Màn hình 6.7\" Super Retina XDR độ sáng cao, sắc nét\r\n            - Trải nghiệm điện ảnh đỉnh cao - Cụm 3 camera kép 12MP, hỗ trợ ổn định hình ảnh quang học\r\n            - Tối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút\r\n            - Xét về chất liệu, iPhone 13 Pro Max vẫn áp dụng chất liệu thép không gỉ như thế hệ trước đó. Mặt này cũng được phủ một lớp kính mờ giúp hạn chế bám bụi bẩn và vân tay. Ngoài ra, điện thoại cũng sẽ đảm bảo được khả năng chống bụi / nước chuẩn IP68.', 1.00),
(40, 'iPhone SE 2022 | Chính hãng VN/A', 2, 1, 11990000, 'download_1__6_7.jpg', '  \r\n            ĐẶC ĐIỂM NỔI BẬT    \r\n            - Hiệu năng vượt trội với vi xử lý mới nhất - Chip Apple A15 tiên tiến nhất, cân mọi tác vụ\r\n            - Tận hưởng không gian hiển thị sắc nét - Màn hình Liquid Retina nhỏ gọn 4.7 inch tỷ lệ 16:9\r\n            - Giải trí trọn vẹn ngày dài - Viên pin có nhiều cải tiến giúp bạn không còn lo lắng khi sử dụng\r\n            - Camera ghi trọn mọi khoảnh khắc - Camera đơn 12 MP f/1.8 hỗ trợ công nghệ Deep Fusion\r\n            - Nếu các thế hệ trước đó được Apple trang bị khung nhôm hoặc khung thép không gỉ thì tới SE 2022, máy được Apple trang bị khung nhôm không chứa Carbon. Đây là thế hệ iPhone đầu tiên của Apple được trang khung viền này.', 1.00),
(41, 'Samsung Galaxy Note 20 Ultra 5G', 1, 1, 18990000, 'yellow_final_3.jpg', '      \r\n            ĐẶC ĐIỂM NỔI BẬT\r\n            - Sang trọng, cao cấp - Màu sắc độc đáo và cuốn hút\r\n            - Chụp ảnh chuyên nghiệp - Bộ 3 camera hỗ trợ Zoom xa đến 30X\r\n            - Ghi chú nhanh chóng, chính xác với bút S- Pen thế hệ mới\r\n            - Chơi game đỉnh cao - Exynos 990 7nm mạnh mẽ, hiệu năng xử lý vượt trội ', 1.00),
(42, 'Samsung Galaxy A32', 1, 1, 5880000, 'samsung-galaxy-a32-18_1.jpg', '      \r\n            ĐẶC ĐIỂM NỔI BẬT\r\n            - Màn hình siêu mượt, hình ảnh sắc nét - Màn hình Super AMOLED FullHD, tần số quét 90Hz\r\n            - Thiết kế tối giản, thể hiện phong cách - Màu sắc trẻ trung, mặt lưng bóng bẩy, cụm camera thiết kế mới.\r\n            - Ghi lại mọi khoảnh khắc - Cụm camera 64MP tuyệt đỉnh, camera selfie 20MP chất lượng.\r\n            - Pin ấn tượng, kéo dài lên đến 2 ngày - Dung lượng 5000mAh, sạc nhanh 15W\r\n            - Đa nhiệm vượt trội, hiệu năng mạnh mẽ - Helio G80 8 nhân, RAM 8GB, chế độ Game Booster ', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Smartphone'),
(2, 'Laptop'),
(3, 'Ipad'),
(4, 'SmartWatch'),
(5, 'Backup charger'),
(6, 'Wireless headphones'),
(7, 'Bluetooth Speaker');

-- --------------------------------------------------------

--
-- Table structure for table `recelpts`
--

DROP TABLE IF EXISTS `recelpts`;
CREATE TABLE IF NOT EXISTS `recelpts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` double NOT NULL,
  `receipt_totalPrice` double NOT NULL,
  `receiot_purcharseDate` date NOT NULL,
  `receipt_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_ratings`
--

DROP TABLE IF EXISTS `review_ratings`;
CREATE TABLE IF NOT EXISTS `review_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci,
  `star_rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'USER 01', '123@gmail.com', NULL, '$2y$10$nJ.lK38PkqoJT41NhW42wOm29N4by8Uy83InbgKDEMexd9AAljwLG', NULL, '2022-06-18 00:01:42', '2022-06-18 00:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `_recelptt_detalls`
--

DROP TABLE IF EXISTS `_recelptt_detalls`;
CREATE TABLE IF NOT EXISTS `_recelptt_detalls` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` double NOT NULL,
  `product_quantity` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
