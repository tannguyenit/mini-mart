-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 02:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `parent_id`, `icon`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Điện tử', '0', 'leftmenu_icon_1.png', 'Dien-Tu', 'Dien-Tu', '2017-01-19 02:58:24', '2017-01-19 02:58:24'),
(5, 'Tivi', '4', '', 'Tivi', 'Tivi', '2017-01-19 03:00:10', '2017-01-19 03:00:10'),
(6, 'Dàn máy nghe nhạc', '4', '', 'Dan-May-Nghe-Nhac', 'Dan-May-Nghe-Nhac', '2017-01-19 03:00:39', '2017-01-19 03:00:39'),
(7, 'Điện lạnh', '0', 'leftmenu_icon_2.png', 'Dien-Lanh', 'Dien-Lanh', '2017-01-19 03:16:37', '2017-01-19 03:16:37'),
(8, 'Đầu đĩa DVD Bluray - Karaoke', '4', '', 'Dau-Dia-Dvd-Bluray---Karaoke', 'Dau-Dia-Dvd-Bluray---Karaoke', '2017-01-19 03:17:19', '2017-01-19 03:17:19'),
(9, 'Amply & Loa', '4', '', 'Amply-&-Loa', 'Amply-&-Loa', '2017-01-19 03:17:28', '2017-01-19 03:17:28'),
(10, 'Máy radio cassette', '4', '', 'May-Radio-Cassette', 'May-Radio-Cassette', '2017-01-19 03:17:43', '2017-01-19 03:17:43'),
(11, 'Máy giặt', '7', '', 'May-Giat', 'May-Giat', '2017-01-19 03:18:29', '2017-01-19 03:18:29'),
(12, 'Máy lạnh', '7', '', 'May-Lanh', 'May-Lanh', '2017-01-19 03:18:40', '2017-01-19 03:18:40'),
(13, 'Tủ lạnh', '7', '', 'Tu-Lanh', 'Tu-Lanh', '2017-01-19 03:19:00', '2017-01-19 03:19:00'),
(14, 'Máy nước nóng', '7', '', 'May-Nuoc-Nong', 'May-Nuoc-Nong', '2017-01-19 03:19:14', '2017-01-19 03:19:14'),
(15, 'Máy sấy quần áo', '7', '', 'May-Say-Quan-Ao', 'May-Say-Quan-Ao', '2017-01-19 03:19:34', '2017-01-19 03:19:34'),
(16, 'Tủ đông', '7', '', 'Tu-Dong', 'Tu-Dong', '2017-01-19 03:19:51', '2017-01-19 03:19:51'),
(17, 'Tủ mát - Tủ giữ lạnh', '7', '', 'Tu-Mat---Tu-Giu-Lanh', 'Tu-Mat---Tu-Giu-Lanh', '2017-01-19 03:20:09', '2017-01-19 03:20:09'),
(19, 'Máy lọc nước', '7', '', 'May-Loc-Nuoc', 'May-Loc-Nuoc', '2017-01-19 04:39:39', '2017-01-19 04:39:39'),
(20, 'Nhà bếp', '0', 'leftmenu_icon_3.png', 'Nha-Bep', 'Nha-Bep', '2017-01-24 14:46:10', '2017-01-24 14:46:10'),
(21, 'Nồi cơm điện', '20', '', 'Noi-Com-Dien', 'Noi-Com-Dien', '2017-01-24 14:46:38', '2017-01-24 14:46:38'),
(22, 'Bếp ga', '20', '', 'Bep-Ga', 'Bep-Ga', '2017-01-24 14:46:55', '2017-01-24 14:46:55'),
(23, 'Lò vi sóng', '20', '', 'Lo-Vi-Song', 'Lo-Vi-Song', '2017-01-24 14:47:08', '2017-01-24 14:47:08'),
(24, 'Nồi đa năng', '20', '', 'Noi-Da-Nang', 'Noi-Da-Nang', '2017-01-24 14:48:19', '2017-01-24 14:48:19'),
(25, 'Bộ nồi nấu ăn', '20', '', 'Bo-Noi-Nau-An', 'Bo-Noi-Nau-An', '2017-01-24 14:48:39', '2017-01-24 14:48:39'),
(26, 'Chảo chống dính', '20', '', 'Chao-Chong-Dinh', 'Chao-Chong-Dinh', '2017-01-24 14:48:56', '2017-01-24 14:48:56'),
(27, 'Gia dụng', '0', 'leftmenu_icon_4.png', 'Gia-Dung', 'Gia-Dung', '2017-01-24 14:49:10', '2017-01-24 14:49:10'),
(28, 'Quạt điện - Quạt máy', '27', '', 'Quat-Dien---Quat-May', 'Quat-Dien---Quat-May', '2017-01-24 14:49:32', '2017-01-24 14:49:32'),
(29, 'Máy hút bụi', '27', '', 'May-Hut-Bui', 'May-Hut-Bui', '2017-01-24 15:02:14', '2017-01-24 15:02:14'),
(30, 'Bàn ủi - Bàn là', '27', '', 'Ban-Ui---Ban-La', 'Ban-Ui---Ban-La', '2017-01-24 15:02:26', '2017-01-24 15:02:26'),
(31, 'Máy hút ẩm', '27', '', 'May-Hut-Am', 'May-Hut-Am', '2017-01-24 15:02:37', '2017-01-24 15:02:37'),
(32, 'Quạt phun sương - Quạt hơi nước', '27', '', 'Quat-Phun-Suong---Quat-Hoi-Nuoc', 'Quat-Phun-Suong---Quat-Hoi-Nuoc', '2017-01-24 15:02:53', '2017-01-24 15:02:53'),
(33, 'Bình lọc nước', '27', '', 'Binh-Loc-Nuoc', 'Binh-Loc-Nuoc', '2017-01-24 15:03:00', '2017-01-24 15:03:00'),
(34, 'Máy pha cà phê', '27', '', 'May-Pha-Ca-Phe', 'May-Pha-Ca-Phe', '2017-01-24 15:03:09', '2017-01-24 15:03:09'),
(35, 'Viễn thông', '0', 'leftmenu_icon_5.png', 'Vien-Thong', 'Vien-Thong', '2017-01-24 15:03:39', '2017-01-24 15:03:39'),
(36, 'Điện thoại di động', '35', '', 'Dien-Thoai-Di-Dong', 'Dien-Thoai-Di-Dong', '2017-01-24 15:03:58', '2017-01-24 15:03:58'),
(37, 'Máy tính bảng', '35', '', 'May-Tinh-Bang', 'May-Tinh-Bang', '2017-01-24 15:04:10', '2017-01-24 15:04:10'),
(38, 'Điện thoại bàn', '35', '', 'Dien-Thoai-Ban', 'Dien-Thoai-Ban', '2017-01-24 15:04:20', '2017-01-24 15:04:20'),
(39, 'Phụ Kiện Điện Thoại', '35', '', 'Phu-Kien-Dien-Thoai', 'Phu-Kien-Dien-Thoai', '2017-01-24 15:04:29', '2017-01-24 15:04:29'),
(40, 'Tin học', '0', 'leftmenu_icon_6.png', 'Tin-Hoc', 'Tin-Hoc', '2017-01-24 15:05:33', '2017-01-24 15:05:33'),
(41, 'Máy tính xách tay', '40', '', 'May-Tinh-Xach-Tay', 'May-Tinh-Xach-Tay', '2017-01-24 15:05:44', '2017-01-24 15:05:44'),
(42, 'Máy tính để bàn', '40', '', 'May-Tinh-De-Ban', 'May-Tinh-De-Ban', '2017-01-24 15:05:55', '2017-01-24 15:05:55'),
(43, 'Màn hình vi tính LCD', '40', '', 'Man-Hinh-Vi-Tinh-Lcd', 'Man-Hinh-Vi-Tinh-Lcd', '2017-01-24 15:06:06', '2017-01-24 15:06:06'),
(44, 'Loa vi tính', '40', '', 'Loa-Vi-Tinh', 'Loa-Vi-Tinh', '2017-01-24 15:06:15', '2017-01-24 15:06:15'),
(45, 'Phụ Kiện Tin Học', '40', '', 'Phu-Kien-Tin-Hoc', 'Phu-Kien-Tin-Hoc', '2017-01-24 15:06:26', '2017-01-24 15:06:26'),
(46, 'Kỹ thuật số', '0', 'leftmenu_icon_7.png', 'Ky-Thuat-So', 'Ky-Thuat-So', '2017-01-24 15:06:42', '2017-01-24 15:06:42'),
(47, 'Máy ảnh ống kính rời', '46', '', 'May-Anh-Ong-Kinh-Roi', 'May-Anh-Ong-Kinh-Roi', '2017-01-24 15:06:57', '2017-01-24 15:06:57'),
(48, 'Máy ảnh du lịch', '46', '', 'May-Anh-Du-Lich', 'May-Anh-Du-Lich', '2017-01-24 15:07:19', '2017-01-24 15:07:19'),
(49, 'Máy quay phim', '46', '', 'May-Quay-Phim', 'May-Quay-Phim', '2017-01-24 15:07:37', '2017-01-24 15:07:37'),
(50, 'Camera quan sát', '46', '', 'Camera-Quan-Sat', 'Camera-Quan-Sat', '2017-01-24 15:07:49', '2017-01-24 15:07:49'),
(51, 'Máy ghi âm', '46', '', 'May-Ghi-Am', 'May-Ghi-Am', '2017-01-24 15:08:02', '2017-01-24 15:08:02'),
(52, 'Máy nghe nhạc MP3/MP4', '46', '', 'May-Nghe-Nhac-Mp3/mp4', 'May-Nghe-Nhac-Mp3/mp4', '2017-01-24 15:08:16', '2017-01-24 15:08:16'),
(53, 'Thiết bị giải trí', '46', '', 'Thiet-Bi-Giai-Tri', 'Thiet-Bi-Giai-Tri', '2017-01-24 15:08:31', '2017-01-24 15:08:31'),
(54, 'Phụ Kiện Kỹ Thuật Số', '46', '', 'Phu-Kien-Ky-Thuat-So', 'Phu-Kien-Ky-Thuat-So', '2017-01-24 15:08:45', '2017-01-24 15:08:45'),
(55, 'Thiết bị văn phòng', '0', 'leftmenu_icon_8.png', 'Thiet-Bi-Van-Phong', 'Thiet-Bi-Van-Phong', '2017-01-24 15:09:19', '2017-01-24 15:09:19'),
(56, 'Máy in', '55', '', 'May-In', 'May-In', '2017-01-24 15:09:30', '2017-01-24 15:09:30'),
(57, 'Máy scan', '55', '', 'May-Scan', 'May-Scan', '2017-01-24 15:09:42', '2017-01-24 15:09:42'),
(58, 'Máy chiếu', '55', '', 'May-Chieu', 'May-Chieu', '2017-01-24 15:09:55', '2017-01-24 15:09:55'),
(59, 'Máy hủy giấy', '55', '', 'May-Huy-Giay', 'May-Huy-Giay', '2017-01-24 15:10:07', '2017-01-24 15:10:07'),
(60, 'Máy đếm tiền', '55', '', 'May-Dem-Tien', 'May-Dem-Tien', '2017-01-24 15:10:37', '2017-01-24 15:10:37'),
(61, 'Từ điển điện tử', '55', '', 'Tu-Dien-Dien-Tu', 'Tu-Dien-Dien-Tu', '2017-01-24 15:10:50', '2017-01-24 15:10:50'),
(62, 'Điện cơ', '0', 'leftmenu_icon_9.png', 'Dien-Co', 'Dien-Co', '2017-01-24 15:11:03', '2017-01-24 15:11:03'),
(63, 'Phụ kiện', '0', 'leftmenu_icon_10.png', 'Phu-Kien', 'Phu-Kien', '2017-01-24 15:11:34', '2017-01-24 15:11:34'),
(64, 'Sức khỏe làm đẹp', '0', 'leftmenu_icon_11.png', 'Suc-Khoe-Lam-Dep', 'Suc-Khoe-Lam-Dep', '2017-01-24 15:11:44', '2017-01-24 15:11:44'),
(65, 'Bách hóa', '0', 'leftmenu_icon_12.png', 'Bach-Hoa', 'Bach-Hoa', '2017-01-24 15:11:54', '2017-01-24 15:11:54'),
(66, 'Gối', '65', '', 'Goi', 'Goi', '2017-01-24 15:12:11', '2017-01-24 15:12:11'),
(67, 'Vali', '65', '', 'Vali', 'Vali', '2017-01-24 15:12:24', '2017-01-24 15:12:24'),
(68, 'Ba lô', '65', '', 'Ba-Lo', 'Ba-Lo', '2017-01-24 15:12:40', '2017-01-24 15:12:40'),
(69, 'Mền', '65', '', 'Men', 'Men', '2017-01-24 15:12:50', '2017-01-24 15:12:50'),
(70, 'Hóa mỹ phẩm', '65', '', 'Hoa-My-Pham', 'Hoa-My-Pham', '2017-01-24 15:13:01', '2017-01-24 15:13:01'),
(71, 'Bộ drap trải giường và áo gối', '65', '', 'Bo-Drap-Trai-Giuong-Va-Ao-Goi', 'Bo-Drap-Trai-Giuong-Va-Ao-Goi', '2017-01-24 15:13:15', '2017-01-24 15:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(12) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `fullname`, `email`, `address`, `phone`, `content`, `created_at`, `update_add`) VALUES
(0, 'tannguyen', 'Nguyễn Văn Tân', 'tannguyenit95@gmail.com', 'Phú Ninh Quảng Nam', 126454222, 'Chúng tôi liên lạc với bạn', '2017-01-20 02:58:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_16_043143_create_products_table', 2),
(4, '2017_01_16_044446_create_product_images_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(12) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT  '0000-00-00 00:00:00' ,
  `update_at` timestamp NOT NULL DEFAULT  '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `created_at`, `update_at`) VALUES
(1, 'INTEL MUA SAFFRON, CÔNG TY DÙNG TRÍ TUỆ NHÂN TẠO ĐỂ DỰ ĐOÁN HƯ HỎNG MÁY BAY', 'ce07459e575717e935be6b84ec32aef7.jpeg', '<p>Intel mới đ&acirc;y đ&atilde; mua lại một c&ocirc;ng ty khởi nghiệp t&ecirc;n Saffron. Họ đ&atilde; ph&aacute;t triển n&ecirc;n c&ocirc;ng nghệ tr&iacute; tuệ nh&acirc;n tạo c&oacute; thể gi&uacute;p &quot;ti&ecirc;u h&oacute;a&quot; dữ liệu từ nhiều nguồn ri&ecirc;ng biệt, kết nối ch&uacute;ng với nhau v&agrave; đưa ra những b&aacute;o c&aacute;o hỗ trợ việc ra quyết định của c&aacute;c doanh nghiệp. Nghe qua th&igrave; c&oacute; vẻ giống với c&aacute;c c&ocirc;ng cụ ph&acirc;n t&iacute;ch dữ liệu hiện nay, tuy nhi&ecirc;n Saffron n&oacute;i rằng &quot;nền tảng tr&iacute; tuệ tự nhi&ecirc;n&quot; của họ c&oacute; thể l&agrave;m điều đ&oacute; một c&aacute;ch hiệu quả hơn bằng việc tự học hỏi v&agrave; nhận biết, kh&ocirc;ng cần phải được lập tr&igrave;nh sẵn c&aacute;c m&ocirc; h&igrave;nh hay quy tắc t&igrave;m kiếm. C&ocirc;ng nghệ của Saffron c&oacute; thể được d&ugrave;ng để dự đo&aacute;n hư hỏng m&aacute;y m&oacute;c trong m&aacute;y bay, dự b&aacute;o t&agrave;i ch&iacute;nh, ph&aacute;t hiện những vụ lừa đảo bảo hiểm v&agrave; hơn thế nữa. Gi&aacute; trị của thương vụ kh&ocirc;ng được tiết lộ.</p>\r\n\r\n<p><img src="//bizweb.dktcdn.net/100/024/820/files/3526824-cv.jpg?v=1445939406474" style="border:0px; box-sizing:border-box; font-family:#e90000,sans-serif !important; max-width:100%; vertical-align:middle" /></p>\r\n\r\n<p>Intel n&oacute;i th&ecirc;m: &quot;Ch&uacute;ng t&ocirc;i thấy cơ hội để &aacute;p dụng điện to&aacute;n th&ocirc;ng minh kh&ocirc;ng chỉ trong những cỗ m&aacute;y server to lớn của c&aacute;c doanh nghiệp m&agrave; c&ograve;n trong những thiết bị ti&ecirc;u d&ugrave;ng, vốn đang c&oacute; nhu cầu thấy, cảm nhận v&agrave; hiểu th&ocirc;ng tin phức tạp theo thời gian thực. Saffron sẽ tiếp tục ph&aacute;t triển trong lĩnh vực của họ, cũng như cống hiến cho nỗ lực của Intel về những thiết bị mới, big data, an to&agrave;n th&ocirc;ng tin, sức khỏe v&agrave; Internet of Things&quot;. IBM hiện cũng đang x&agrave;i si&ecirc;u m&aacute;y t&iacute;nh Watson của m&igrave;nh để phục vụ cho việc ph&acirc;n t&iacute;ch dữ liệu bằng tr&iacute; tuệ nh&acirc;n tạo v&agrave; machine learning.</p>\r\n', '2017-01-30 14:59:58', '0000-00-00 00:00:00'),
(7, 'Tạo hiệu ứng chúc mừng năm mới trên iPhone', 'b93f2955926c92ee2333babb2f3e49fc.png', '<div class="short_intro txt_666" style="margin: 0px; padding: 0px 0px 10px; color: rgb(68, 68, 68); font-weight: 700; font-stretch: normal; font-size: 14px; line-height: 18px; font-family: arial; width: 480.016px; float: left; text-rendering: geometricPrecision;">Ứng dụng Tin nhắn tr&ecirc;n iPhone, iPad được bổ sung hiệu ứng đẹp mắt khi người d&ugrave;ng tr&ograve; chuyện dịp Tết.</div>\n\n<div id="left_calculator" style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 12px;">\n<div class="fck_detail width_common block_ads_connect" style="margin: 0px; padding: 0px 9.59375px 0px 0px; width: 470.406px; float: left; overflow: hidden; font-stretch: normal; font-size: 14px; line-height: normal; color: rgb(51, 51, 51);">\n<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin:0px auto 10px; max-width:100%; padding:0px; width:300px">\n	<tbody>\n		<tr>\n			<td><img alt="tao-hieu-ung-chuc-mung-nam-moi-tren-iphone" src="http://img.f5.sohoa.vnecdn.net/2017/01/25/IMG-0248-PNG-6345-1485328654.png" style="border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>Hiệu ứng ph&aacute;o hoa khi nhắn tin &quot;Ch&uacute;c mừng năm mới&quot; tr&ecirc;n iPhone chạy iOS 10.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Khi g&otilde; d&ograve;ng chữ &quot;Ch&uacute;c mừng năm mới&quot; tr&ecirc;n iPhone rồi gửi cho bạn b&egrave;, ứng dụng Tin nhắn sẽ xuất hiện hiệu ứng ph&aacute;o hoa tr&ecirc;n m&agrave;n h&igrave;nh. Đ&acirc;y l&agrave; t&iacute;nh năng được Apple bổ sung nh&acirc;n dịp Tết v&agrave; hỗ trợ tr&ecirc;n những thiết bị chạy iOS 10.</p>\n\n<p>Hiệu ứng sẽ xuất hiện cho cả người gửi v&agrave; người nhận, bao gồm SMS v&agrave; iMessage. Đầu ti&ecirc;n, m&agrave;n h&igrave;nh Tin nhắn chuyển sang t&ocirc;ng m&agrave;u tối. H&igrave;nh ảnh ph&aacute;o hoa xuất hiện, c&aacute;c đoạn tr&ograve; chuyện được thay bằng m&agrave;u đỏ k&egrave;m chữ m&agrave;u v&agrave;ng. Tuy nhi&ecirc;n, thử nghiệm tr&ecirc;n iPhone 5C c&agrave;i iOS 9 th&igrave; kh&ocirc;ng c&oacute; hiệu ứng.</p>\n\n<p>Tương tự, khi g&otilde; &quot;Ch&uacute;c mừng sinh nhật&quot; th&igrave; ứng dụng Tin nhắn tr&ecirc;n iPhone cũng xuất hiện hiệu ứng b&oacute;ng bay. Cả hai c&uacute; ph&aacute;p &aacute;p dụng với cả tin nhắn tiếng Việt kh&ocirc;ng dấu, như &quot;Chuc mung sinh nhat&quot; hay &quot;Chuc mung nam moi&quot;.</p>\n</div>\n</div>\n', '2017-01-27 14:42:56', '2017-01-27 14:42:12'),
(8, 'TV ''cháy hàng'' trước Tết Đinh Dậu', '6d55e29b3e3503d7f9e1b876f555ea45.jpeg', '<div class="short_intro txt_666" style="margin: 0px; padding: 0px 0px 10px; color: rgb(68, 68, 68); font-weight: 700; font-stretch: normal; font-size: 14px; line-height: 18px; font-family: arial; width: 480.016px; float: left; text-rendering: geometricPrecision;">Lượng kh&aacute;ch h&agrave;ng quan t&acirc;m đến TV tăng đột biến khiến một số si&ecirc;u thị điện m&aacute;y kh&ocirc;ng c&ograve;n một số mẫu TV để b&aacute;n trước Tết cả tuần.&nbsp;</div>\r\n\r\n<div id="left_calculator" style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 12px;">\r\n<div class="fck_detail width_common block_ads_connect" style="margin: 0px; padding: 0px 9.59375px 0px 0px; width: 470.406px; float: left; overflow: hidden; font-stretch: normal; font-size: 14px; line-height: normal; color: rgb(51, 51, 51);">\r\n<p>Tại nhiều si&ecirc;u thị điện m&aacute;y lớn ở H&agrave; Nội v&agrave; TP HCM, một số d&ograve;ng TV đ&atilde; được th&ocirc;ng b&aacute;o hết h&agrave;ng d&ugrave; v&agrave;i ng&agrave;y nữa mới đến Tết, hoặc phải đặt trước rồi chờ tới giữa th&aacute;ng 2, tức qua Tết, mới nhận được.&nbsp;</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin:0px auto 10px; max-width:100%; padding:0px; width:470px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Nhiều mẫu TV của Sony đã được các siêu thị điện máy thông báo hết hàng." src="http://img.f5.sohoa.vnecdn.net/2017/01/25/Screen-Shot-2017-01-25-at-10-1-5968-9142-1485318870.png" style="border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px; width:470px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nhiều mẫu TV của Sony đ&atilde; được c&aacute;c si&ecirc;u thị điện m&aacute;y th&ocirc;ng b&aacute;o hết h&agrave;ng trong dịp Tết.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Sau nhiều năm, hiện tượng &quot;ch&aacute;y h&agrave;ng&quot; đ&atilde; quay trở lại thị trường TV Tết năm nay. Theo &ocirc;ng Tuấn Anh, Gi&aacute;m đốc ng&agrave;nh h&agrave;ng điện tử hệ thống Media Mart (H&agrave; Nội), năm nay đ&atilde; c&oacute; nhiều TV hết h&agrave;ng nhanh tr&ecirc;n diện rộng, tức kh&ocirc;ng chỉ kh&ocirc;ng c&ograve;n h&agrave;ng b&aacute;n ở c&aacute;c nơi m&agrave; c&ograve;n tới cả tuần trước khi Tết đến. Trong đ&oacute;, đa phần l&agrave; sản phẩm của Sony.&nbsp;</p>\r\n\r\n<p>B&agrave; Nguyễn Thị Ngọc Thương, Gi&aacute;m đốc ng&agrave;nh h&agrave;ng TV hệ thống Điện M&aacute;y Xanh cũng cho biết to&agrave;n bộ dải sản phẩm của Sony đều đang trong t&igrave;nh trạng khan h&agrave;ng dịp cuối năm, thậm ch&iacute; một số model 43 inch của thương hiệu n&agrave;y đ&atilde; hết sạch h&agrave;ng để b&aacute;n.&nbsp;</p>\r\n\r\n<p>Tại một số cửa h&agrave;ng nhỏ ở Hai B&agrave; Trưng hay Nguyễn Tr&atilde;i (H&agrave; Nội), khi hỏi mua những model như Sony 43X8000D hay 43X8000E, kh&aacute;ch h&agrave;ng cũng sẽ nhận được c&acirc;u trả lời kh&ocirc;ng c&oacute; h&agrave;ng. Tuy nhi&ecirc;n, những nơi c&ograve;n mẫu b&aacute;n th&igrave; kh&ocirc;ng thấy hiện tượng đội gi&aacute;.</p>\r\n\r\n<p>Nguy&ecirc;n nh&acirc;n khiến cho t&igrave;nh trạng &quot;ch&aacute;y h&agrave;ng&quot; t&aacute;i xuất ở thị trường TV Tết năm nay l&agrave; sức mua TV cuối năm v&agrave; trước Tết bất ngờ tăng đột biến. Theo hệ thống Media Mart, doanh số b&aacute;n TV trong dịp Tết n&agrave;y đ&atilde; tăng tới 170% so với năm ngo&aacute;i. Trong khi đ&oacute;, đại diện hệ thống Điện M&aacute;y Xanh cho biết, số lượng TV b&aacute;n ra trong th&aacute;ng cận Tết đ&atilde; tăng gấp đ&ocirc;i so với 2 th&aacute;ng trước đ&oacute;.&nbsp;</p>\r\n\r\n<p>Theo &ocirc;ng Tuấn Anh, TV l&agrave; mặt h&agrave;ng kinh doanh theo m&ugrave;a vụ, doanh số th&aacute;ng cuối năm c&oacute; thể bằng cả năm cộng lại v&igrave; thế c&aacute;c h&atilde;ng đều phải đưa ra dự b&aacute;o trước khi tung h&agrave;ng ra thị trường.&nbsp;Năm nay, việc dự b&aacute;o của Sony chưa tốt n&ecirc;n mới dẫn đến t&igrave;nh trạng ch&aacute;y h&agrave;ng. Giờ cửa h&agrave;ng muốn nhập th&ecirc;m về b&aacute;n cũng kh&ocirc;ng c&ograve;n.&nbsp;</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin:0px auto 10px; max-width:100%; padding:0px; width:470px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Sức tiêu thụ TV dịp Tết năm nay đang tăng đột biến, tại một số hệ thống doanh số bán đã cao gấp đôi năm ngoái." src="http://img.f5.sohoa.vnecdn.net/2017/01/25/IMG-4310-JPG-1167-1485318870.jpg" style="border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px; width:470px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sức ti&ecirc;u thụ TV dịp Tết năm nay đang tăng đột biến, tại một số hệ thống doanh số b&aacute;n đ&atilde; cao gấp đ&ocirc;i năm ngo&aacute;i.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trong khi đ&oacute;, đại diện hệ thống Điện M&aacute;y Xanh cũng cho biết, d&ugrave; ch&aacute;y h&agrave;ng, Sony chưa phải l&agrave; h&atilde;ng c&oacute; số lượng ti&ecirc;u thụ tốt nhất dịp n&agrave;y. Samsung, LG v&agrave; c&aacute;c thương hiệu kh&aacute;c đều cung cấp lượng h&agrave;ng kh&aacute; dồi d&agrave;o n&ecirc;n kh&ocirc;ng gặp cảnh &quot;ch&aacute;y h&agrave;ng&quot; như Sony.</p>\r\n\r\n<p>TV b&aacute;n chạy trong dịp Tết năm nay tập trung v&agrave;o ph&acirc;n kh&uacute;c tầm trung k&iacute;ch thước 43, 49 v&agrave; 55 inch, với cả TV thường v&agrave; TV 4K. Trong đ&oacute;, trội hơn cả l&agrave; c&aacute;c model 43 inch.&nbsp;</p>\r\n\r\n<p>Theo những người d&ugrave;ng c&oacute; kinh nghiệm, TV l&agrave; sản phẩm &iacute;t thay đổi v&agrave; n&acirc;ng cấp qua c&aacute;c đời. V&igrave; thế, nếu gặp t&igrave;nh trạng sản phẩm muốn mua kh&ocirc;ng c&ograve;n h&agrave;ng, người d&ugrave;ng vẫn c&ograve;n nhiều lựa chọn kh&aacute;c để c&acirc;n nhắc. Thiết kế, chất lượng h&igrave;nh ảnh v&agrave; gi&aacute; b&aacute;n l&agrave; c&aacute;c yếu tố cần quan t&acirc;m nhất khi mua TV trong dịp Tết.</p>\r\n</div>\r\n</div>\r\n', '2017-01-27 14:48:36', '2017-01-27 14:48:36'),
(9, 'iOS 10.3 sẽ có tính năng tìm tai nghe', '62db088b841b1002a0a6a5d07e6e7d5f.jpeg', '<div class="short_intro txt_666" style="margin: 0px; padding: 0px 0px 10px; color: rgb(68, 68, 68); font-weight: 700; font-stretch: normal; font-size: 14px; line-height: 18px; font-family: arial; width: 480.016px; float: left; text-rendering: geometricPrecision;">&quot;Find My AirPods&quot; (T&igrave;m AirPods) xuất hiện trong bản thử nghiệm iOS mới, cho ph&eacute;p người d&ugrave;ng x&aacute;c định vị tr&iacute; của tai nghe kh&ocirc;ng d&acirc;y.</div>\r\n\r\n<div class="relative_new" style="margin: 0px; padding: 0px 0px 5px; width: 480.016px; float: left; color: rgb(0, 0, 0); font-family: arial; font-size: 12px;">\r\n<ul style="list-style-type:none">\r\n	<li><a href="http://sohoa.vnexpress.net/tin-tuc/doi-song-so/cach-deo-tai-nghe-airpods-de-khong-bi-roi-3517329.html" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none; outline: 1px; font-weight: 700; font-stretch: normal; line-height: 16px;">C&aacute;ch đeo tai nghe AirPods để kh&ocirc;ng bị rơi</a>&nbsp;/&nbsp;<a href="http://sohoa.vnexpress.net/tin-tuc/san-pham/apple-bat-dau-ban-tai-nghe-khong-day-airpods-gia-159-usd-3513110.html" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none; outline: 1px; font-weight: 700; font-stretch: normal; line-height: 16px;">Apple bắt đầu b&aacute;n tai nghe kh&ocirc;ng d&acirc;y AirPods, gi&aacute; 159 USD</a></li>\r\n</ul>\r\n</div>\r\n\r\n<div id="left_calculator" style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 12px;">\r\n<div class="fck_detail width_common block_ads_connect" style="margin: 0px; padding: 0px 9.59375px 0px 0px; width: 470.406px; float: left; overflow: hidden; font-stretch: normal; font-size: 14px; line-height: normal; color: rgb(51, 51, 51);">\r\n<p>Với thiết kế kh&ocirc;ng d&acirc;y ho&agrave;n to&agrave;n, AirPods của Apple mang đến nhiều thuận tiện khi sử dụng. Nhưng kiểu d&aacute;ng đ&oacute; cũng khiến mẫu tai nghe c&oacute; gi&aacute; 159 USD n&agrave;y dễ bị rơi hoặc bỏ qu&ecirc;n. Trong iOS 10.3 beta, Apple đ&atilde; &quot;xoa dịu&quot; nỗi lo của người d&ugrave;ng bằng việc th&ecirc;m t&iacute;nh năng t&igrave;m AirPods.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="margin:0px auto 10px; max-width:100%; padding:0px; width:400px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="ios-103-se-co-tinh-nang-tim-tai-nghe" src="http://img.f5.sohoa.vnecdn.net/2017/01/25/find-my-airpods-3018-1485311318.jpg" style="border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Giao diện Find My AirPods tr&ecirc;n iOS 10.3 beta.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Find My AirPods xuất hiện trong menu của ứng dụng Find My iPhone. Khi mở t&ugrave;y chọn n&agrave;y, tai nghe sẽ ph&aacute;t ra &acirc;m thanh to dần gi&uacute;p người d&ugrave;ng x&aacute;c định vị tr&iacute;. Bạn cũng c&oacute; thể t&ugrave;y chọn &acirc;m th&ocirc;ng b&aacute;o ph&aacute;t tr&ecirc;n tai tr&aacute;i hoặc phải, nếu một trong hai b&ecirc;n AirPods bị mất.</p>\r\n\r\n<p>Vị tr&iacute; của tai nghe cũng được x&aacute;c định th&ocirc;ng qua GPS của iPhone hoặc những thiết bị iOS kh&aacute;c m&agrave; n&oacute; kết nối tới. Th&ocirc;ng qua dữ liệu n&agrave;y, người d&ugrave;ng c&oacute; thể x&aacute;c định vị tr&iacute; AirPods bị rơi, ở khoảng c&aacute;ch tương đối.</p>\r\n\r\n<p>Theo&nbsp;<em>MacRumors</em>, Find My AirPods kh&ocirc;ng phải l&agrave; giải ph&aacute;p ho&agrave;n hảo, những phần n&agrave;o gi&uacute;p khoanh v&ugrave;ng vị tr&iacute; thiết bị bị rơi. Tr&ecirc;n iOS 10.3 beta, t&iacute;nh năng n&agrave;y được tự động k&iacute;ch hoạt v&agrave; hứa hẹn sẽ c&oacute; tr&ecirc;n phi&ecirc;n bản ch&iacute;nh thức.</p>\r\n</div>\r\n</div>\r\n', '2017-01-27 14:52:48', '2017-01-27 14:52:48'),
(10, 'Không thể ra khỏi nhà vì dị ứng với Wi-Fi', 'db8da2480a624690438f3cfd3ece8441.jpeg', '<div class="short_intro txt_666" style="margin: 0px; padding: 0px 0px 10px; color: rgb(68, 68, 68); font-weight: 700; font-stretch: normal; font-size: 14px; line-height: 18px; font-family: arial; width: 480.016px; float: left; text-rendering: geometricPrecision;">Kim De&#39;Atta bị chứng nhạy cảm điện từ n&ecirc;n kh&ocirc;ng thể ở gần nơi n&agrave;o c&oacute; s&oacute;ng điện thoại hoặc Wi-Fi v&agrave; gần như phải ở trong nh&agrave; vĩnh viễn.</div>\r\n\r\n<div id="left_calculator" style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 12px;">\r\n<div class="fck_detail width_common block_ads_connect" style="margin: 0px; padding: 0px 9.59375px 0px 0px; width: 470.406px; float: left; overflow: hidden; font-stretch: normal; font-size: 14px; line-height: normal; color: rgb(51, 51, 51);">\r\n<p>Kim De&#39;Atta (ở&nbsp;Somerset, một hạt nhỏ ở t&acirc;y nam nước Anh)&nbsp;mắc một căn bệnh hiếm gặp khi cơ thể nhạy cảm qu&aacute; mức với s&oacute;ng điện từ. Tiếp x&uacute;c với c&aacute;c t&iacute;n hiệu từ điện thoại di động, ở l&acirc;u trong khu vực c&oacute; s&oacute;ng Wi-Fi hay trường điện từ mạnh c&ocirc; đều bị đau nửa đầu, mệt mỏi hay thậm ch&iacute; nhiễm tr&ugrave;ng nghi&ecirc;m trọng.</p>\r\n\r\n<p>Điều n&agrave;y khiến cho Kim hiếm khi rời khỏi nh&agrave; để đi du lịch. Căn nh&agrave; c&ocirc; ở cũng phải sửa lại để ngăn c&aacute;c loại s&oacute;ng điện từ từ b&ecirc;n ngo&agrave;i.&nbsp;Khi buộc phải ra ngo&agrave;i, c&ocirc; phải đội chiếc mũ đặc biệt để che chắn c&aacute;c t&iacute;n hiệu s&oacute;ng v&agrave; chỉ được đến những nơi c&oacute; &iacute;t nguồn s&oacute;ng di động.</p>\r\n\r\n<p><img alt="khong-the-ra-khoi-nha-vi-di-ung-voi-wi-fi" src="http://img.f5.sohoa.vnecdn.net/2017/01/24/kim1-3258-1485245193.jpg" style="border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px" /></p>\r\n\r\n<p>&quot;Hầu hết mọi người nghĩ t&ocirc;i đi&ecirc;n. Rất kh&oacute; khăn giải th&iacute;ch bởi mọi người kh&ocirc;ng cảm thấy n&oacute; (s&oacute;ng điện từ)&quot;, Kim cho biết. &quot;T&ocirc;i đ&atilde; l&acirc;u kh&ocirc;ng nh&igrave;n thấy bạn b&egrave; v&agrave; gia đ&igrave;nh. Mỗi năm, t&ocirc;i chỉ đ&oacute;n hai vị kh&aacute;ch v&agrave; họ chỉ lưu lại đ&acirc;y nửa ng&agrave;y. Người gần gũi nhất đ&atilde; 10 năm t&ocirc;i kh&ocirc;ng gặp mặt v&agrave; mới đ&acirc;y t&ocirc;i đ&atilde; bất chấp tất cả để đến gặp. Nếu kh&ocirc;ng đến khi mất, c&ocirc; ấy cũng kh&ocirc;ng biết tại sao ch&aacute;u m&igrave;nh m&atilde;i kh&ocirc;ng đến thăm. T&ocirc;i sẽ kh&ocirc;ng bao giờ tha thứ cho bản th&acirc;n v&igrave; điều đ&oacute;&quot;.</p>\r\n\r\n<p>Theo&nbsp;<em>Metro</em>, vấn đề của Kim bắt đầu khi c&ocirc; 16 tuổi v&agrave; đang sống ở ph&iacute;a nam London. Căn bệnh xuất hiện khi c&ocirc; đến gần TV. Mọi chuyện tồi tệ hơn một v&agrave;i năm sau đ&oacute; khi c&ocirc; l&agrave;m y t&aacute;, phụ tr&aacute;ch việc chăm s&oacute;c c&aacute;c bệnh nh&acirc;n đặc biệt v&agrave; phải mua một chiếc điện thoại di động để c&oacute; thể li&ecirc;n lạc trong trường hợp khẩn cấp.</p>\r\n\r\n<p>&quot;Lần đầu ti&ecirc;n t&ocirc;i đặt điện thoại l&ecirc;n nghe, giống như c&oacute; một tia laser đi thẳng v&agrave;o n&atilde;o. Mỗi lần t&ocirc;i đưa điện thoại gần đầu, cảm gi&aacute;c v&ocirc; c&ugrave;ng đau đớn&quot;, C&ocirc; cho biết.</p>\r\n\r\n<p>Sau đ&oacute;, Kim ng&agrave;y c&agrave;ng c&oacute; cảm gi&aacute;c mệt mỏi v&agrave; hệ thống miễn dịch của cơ thể bị tổn thương nghi&ecirc;m trọng. Cơ thể c&ocirc; bị nhiễm tr&ugrave;ng một c&aacute;ch bất thường. Đ&acirc;y cũng l&agrave; l&uacute;c c&ocirc; ph&aacute;t hiện về căn bệnh c&oacute; t&ecirc;n &quot;nhạy cảm điện từ&quot; (electrosensitivity) v&agrave; nhận ra vấn đề của m&igrave;nh bị g&acirc;y ra bởi c&aacute;c thiết bị ph&aacute;t s&oacute;ng như điện thoại di động, TV, mạng Wi-Fi v&agrave; c&aacute;c thiết bị điện tử.</p>\r\n\r\n<p>Kim đ&atilde; chuyển đến thị trấn Glastonbury ở Somerset để tho&aacute;t khỏi những con s&oacute;ng v&ocirc; h&igrave;nh v&agrave; cảm thấy sức khỏe tốt trở lại. Tuy nhi&ecirc;n, v&agrave;i năm sau, một cột ph&aacute;t s&oacute;ng lớn được x&acirc;y dựng ở trung t&acirc;m thị trấn. Ngay lập tức, Kim nhận ra sức khỏe của m&igrave;nh lại xấu đi. Chứng đau nửa đầu, mệt mỏi v&agrave; t&igrave;nh trạng nhiễm tr&ugrave;ng t&aacute;i ph&aacute;t.</p>\r\n\r\n<p>Khi thị trấn bắt đầu c&oacute; t&iacute;n hiệu 3G, cũng l&agrave; l&uacute;c c&ocirc; trải nghiệm cảm gi&aacute;c kh&oacute; thở v&agrave; tim đập nhanh, đau lưng. Tiếp đ&oacute; l&agrave; t&igrave;nh trạng đau tai nghi&ecirc;m trọng v&agrave; cơ thể c&ocirc; trở n&ecirc;n nhạy cảm với &aacute;nh s&aacute;ng. Kim sau đ&oacute; phải chuyển nh&agrave; thị trấn kh&aacute;c.</p>\r\n\r\n<p>&quot;T&ocirc;i đ&atilde; phải nhờ một người bạn đến đ&oacute;n t&ocirc;i v&igrave; qu&aacute; đau n&ecirc;n kh&ocirc;ng thể di chuyển được nữa. C&aacute;c anh em họ đ&atilde; cho t&ocirc;i một số tiền v&agrave; t&ocirc;i đ&atilde; thử đi du lịch tới những nơi hẻo l&aacute;nh. Nhưng ở khắp mọi nơi, họ đều dựng l&ecirc;n những cột thu ph&aacute;t s&oacute;ng điện thoại&quot;.</p>\r\n</div>\r\n</div>\r\n', '2017-01-27 14:53:23', '2017-01-27 14:53:23'),
(11, 'HÃNG BÁN LẺ WALMART MUỐN DÙNG DRONE ĐỂ VẬN CHUYỂN HÀNG', '16829dc2c943c9919b5d0481119215b8.jpeg', '<p>Kh&ocirc;ng chỉ c&oacute; Amazon m&agrave; h&ocirc;m nay tập đo&agrave;n b&aacute;n lẻ Walmart cũng tuy&ecirc;n bố kế hoạch d&ugrave;ng m&aacute;y bay drone để chuyển h&agrave;ng v&agrave; phục vụ hoạt động kinh doanh.</p>\r\n\r\n<p>Cụ thể, họ đ&atilde; đệ tr&igrave;nh văn bản xin ph&eacute;p vận h&agrave;nh thương mại hệ thống m&aacute;y bay kh&ocirc;ng người l&aacute;i ( UAS) trong một số trường hợp nhất định l&ecirc;n cho Cục h&agrave;ng kh&ocirc;ng li&ecirc;n bang Hoa Kỳ để ph&ecirc; duyệt. Nếu được th&ocirc;ng qua, Walmart sẽ t&igrave;m c&aacute;ch sử dụng drone (c&oacute; thể l&ecirc;n tới 25kg) để phục vụ hoạt động kinh doanh của họ.</p>\r\n\r\n<p><img src="//bizweb.dktcdn.net/100/024/820/files/3526847-cv-drone-tinhte.jpg?v=1445939188847" style="border:0px; box-sizing:border-box; font-family:#e90000,sans-serif !important; max-width:100%; vertical-align:middle" /></p>\r\n\r\n<p>Trước giờ, ch&uacute;ng ta đ&atilde; nghe n&oacute;i nhiều về những c&ocirc;ng nghệ m&agrave; Google hoặc Amazon,... đang ph&aacute;t triển nhằm phục vụ cho ng&agrave;nh c&ocirc;ng nghiệp vận tải bằng drone vốn vẫn c&ograve;n kh&aacute; non trẻ. Ngược lại, Techcrunch cho biết rằng Walmart đang l&agrave;m việc với h&atilde;ng sản xuất drone DJI v&agrave; trong c&aacute;c thử nghiệm bay để xin cấp ph&eacute;p, họ đ&atilde; sử dụng mẫu DJI Phantom 3 Professional v&agrave; DJI S900 với gi&aacute; lần lượt từ 1224 v&agrave; 1400 đ&ocirc; la.</p>\r\n\r\n<p>Ngo&agrave;i việc chuyển h&agrave;ng, văn bản xin ph&eacute;p m&agrave; Walmart nộp c&ograve;n đề cập tới c&aacute;c tiềm năng sử dụng drone kh&aacute;c, bao gồm &quot;thu thập dữ liệu từ tr&ecirc;n kh&ocirc;ng để hỗ trợ ph&acirc;n t&iacute;ch kinh doanh&quot;, từ đ&oacute; vận h&agrave;nh qu&aacute; tr&igrave;nh chuyển h&agrave;ng tại c&aacute;c khu d&acirc;n cư nhỏ, hỗ trợ bốc dỡ h&agrave;ng h&oacute;a, ph&acirc;n bổ hoạt động trung t&acirc;m v&agrave; hoạt động tại c&aacute;c khu vực n&ocirc;ng th&ocirc;n.</p>\r\n\r\n<p>Mặc d&ugrave; hiện tại ở Mỹ chưa c&oacute; nhiều quy phạm ph&aacute;p luật &aacute;p dụng cho việc quản l&yacute; drone nhưng được biết hồi tuần rồi, cục h&agrave;ng kh&ocirc;ng li&ecirc;n bang đ&atilde; ban h&agrave;nh đạo luật y&ecirc;u cầu tất cả những chiếc drone phải đăng k&yacute; cho ch&iacute;nh phủ mới hoạt động được. Cho tới nay, FAA đ&atilde; cấp giấy ph&eacute;p hoạt động cho hơn 2020 trường hợp.</p>\r\n', '2017-01-30 15:07:49', '2017-01-30 15:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(12) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT  '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `name`, `category`, `content`, `created_at`) VALUES
(1, 'gioi-thieu', 0, '<p>Đ&acirc;y l&agrave; trang giới thiệu về Mini-Mart</p>\r\n', '2017-01-22 03:04:37'),
(2, 'gioi-thieu', 1, '<p>CH&Iacute;NH S&Aacute;CH GIAO H&Agrave;NG V&Agrave; HO&Agrave;N TRẢ</p>\r\n\r\n<p>Giao h&agrave;ng<br />\r\nCửa h&agrave;ng sẽ vận chuyển h&agrave;ng trong khoảng thời gian thỏa thuận khi qu&yacute; kh&aacute;ch thanh to&aacute;n. Tuy nhi&ecirc;n, ch&uacute;ng t&ocirc;i kh&ocirc;ng thể đảm bảo tất cả c&aacute;c đơn h&agrave;ng sẽ được giao trong khoảng thời gian đ&atilde; thống nhất.</p>\r\n\r\n<p>Ngay sau khi đơn h&agrave;ng của bạn được gửi đi từ kho của ch&uacute;ng t&ocirc;i, qu&yacute; kh&aacute;ch sẽ nhận được thư x&aacute;c nhận rằng h&agrave;ng h&oacute;a của bạn đang tr&ecirc;n đường vận chuyển. Nếu ch&uacute;ng t&ocirc;i kh&ocirc;ng thể giao h&agrave;ng đ&uacute;ng ng&agrave;y dự đo&aacute;n, ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm về bất kỳ tổn thất, ch&iacute; ph&iacute;, thiệt hại hay chi ph&iacute; ph&aacute;t sinh từ việc giao h&agrave;ng trễ. Nếu qu&yacute; kh&aacute;ch vắng mặt ở nơi giao h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ gửi cho bạn một thẻ hướng dẫn để nhận h&agrave;ng lại hoặc lấy h&agrave;ng từ h&atilde;ng vận chuyển.</p>\r\n\r\n<p>Để kiểm tra đơn h&agrave;ng của qu&yacute; kh&aacute;ch, h&atilde;y sử dụng m&atilde; số theo d&otilde;i đ&atilde; được gửi cho kh&aacute;ch h&agrave;ng trong thư x&aacute;c nhận. Sau khi h&agrave;ng được chuyển đến qu&yacute; kh&aacute;ch, trước khi k&yacute; x&aacute;c nhận, qu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra nếu sản phẩm c&oacute; bất kỳ lỗi hay khiếm khuyết n&agrave;o. Để đề ph&ograve;ng, xin vui l&ograve;ng giữ lại bi&ecirc;n lại vận chuyển.</p>\r\n\r\n<p>Tuy hiếm xảy ra nhưng nếu qu&yacute; kh&aacute;ch ph&aacute;t hiện sản phảm bị khiếm khuyết hay thiếu sản phẩm trong đơn h&agrave;ng, vui l&ograve;ng thực hiện c&aacute;c bước hướng dẫn trong mục &ldquo;C&aacute;c c&acirc;u hỏi thường gặp&rdquo; hay li&ecirc;n lạc với Bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng qua customer@theshop.vn.</p>\r\n\r\n<p>Ho&agrave;n trả h&agrave;ng<br />\r\nTrong trường hợp kh&aacute;ch h&agrave;ng muốn trả lại h&agrave;ng đ&atilde; mua, qu&yacute; kh&aacute;ch c&oacute; 30 ng&agrave;y từ ng&agrave;y mua h&agrave;ng để ho&agrave;n trả đơn h&agrave;ng. Vui l&ograve;ng li&ecirc;n lạc với Bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng của Cửa h&agrave;ng để bắt đầu ho&agrave;n trả.&nbsp;<br />\r\nVui l&ograve;ng đảm bảo mảnh giấy ho&agrave;n trả đ&atilde; được đ&iacute;nh k&egrave;m với bưu kiện, v&agrave; sản phẩm chưa được mặc v&agrave; c&ograve;n trong t&igrave;nh trạng ban đầu. Sản phẩm cần phải được chuyển đến địa chỉ ho&agrave;n trả của ch&uacute;ng t&ocirc;i trong v&ograve;ng 30 ng&agrave;y từ ng&agrave;y mua h&agrave;ng.</p>\r\n\r\n<p><br />\r\nCửa h&agrave;ng<br />\r\n61/2 Quang Trung, P.10&nbsp;<br />\r\nQ. G&ograve; Vấp, TP. HCM</p>\r\n\r\n<p><br />\r\nKhi ph&ograve;ng Quản l&yacute; Chất lượng đ&atilde; kiểm tra h&agrave;ng được trả về, ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;ng qu&aacute; tr&igrave;nh ho&agrave;n trả của bạn trong v&ograve;ng 5 ng&agrave;y l&agrave;m việc</p>\r\n\r\n<p>Q&uacute;y kh&aacute;ch sẽ chịu tr&aacute;ch nhiệm cho tất cả h&agrave;ng h&oacute;a cho đến khi ch&uacute;ng được gửi đến nh&agrave; kho của c&ocirc;ng ty v&agrave; đồng &yacute; trả chi ph&iacute; li&ecirc;n quan đến việc trả h&agrave;ng của qu&yacute; vị. Vui l&ograve;ng đảm bảo đ&oacute;ng g&oacute;i h&agrave;ng h&oacute;a cẩn thận để đề ph&ograve;ng thiệt hại. Ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n sử dụng h&atilde;ng vận chuyển uy t&iacute;n c&oacute; dịch vụ theo d&otilde;i bưu phẩm.</p>\r\n\r\n<p>Nếu qu&yacute; kh&aacute;ch c&oacute; c&acirc;u hỏi hay y&ecirc;u cầu kh&aacute;c, vui l&ograve;ng li&ecirc;n hệ Bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng qua email customer@theshop.vn.</p>\r\n', '2017-01-22 03:04:37'),
(3, 'privacy_policy', 2, '<p>CH&Iacute;NH S&Aacute;CH BẢO MẬT CỦA TheShop.VN.<br />\r\nRi&ecirc;ng tư của kh&aacute;ch h&agrave;ng v&ocirc; c&ugrave;ng quan trọng với TheShop.VN, v&igrave; thế ch&uacute;ng t&ocirc;i chỉ sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch v&agrave;o những trường hợp n&ecirc;u ra sau đ&acirc;y.&nbsp;<br />\r\nBảo vệ dữ liệu l&agrave; vấn đề của sự tin tưởng v&agrave; bảo mật danh t&iacute;nh của qu&yacute; kh&aacute;ch v&ocirc; c&ugrave;ng quan trọng với ch&uacute;ng t&ocirc;i. V&igrave; thế, ch&uacute;ng t&ocirc;i chỉ sẽ sử dụng t&ecirc;n v&agrave; một số th&ocirc;ng tin kh&aacute;c của qu&yacute; kh&aacute;ch theo c&aacute;ch được đề ra trong Ch&iacute;nh s&aacute;ch Bảo mật n&agrave;y. Ch&uacute;ng t&ocirc;i chỉ sẽ thu thập những th&ocirc;ng tin cần thiết v&agrave; c&oacute; li&ecirc;n quan đến giao dịch giữa ch&uacute;ng t&ocirc;i v&agrave; qu&yacute; kh&aacute;ch.<br />\r\nCh&uacute;ng t&ocirc;i chỉ giữ th&ocirc;ng tin của qu&yacute; kh&aacute;ch trong thời gian luật ph&aacute;p y&ecirc;u cầu hoặc cho mục đ&iacute;ch m&agrave; th&ocirc;ng tin đ&oacute; được thu thập.<br />\r\nQu&yacute; kh&aacute;ch c&oacute; thể gh&eacute; thăm trang web m&agrave; kh&ocirc;ng cần phải cung cấp bất kỳ th&ocirc;ng tin c&aacute; nh&acirc;n n&agrave;o. Khi viếng thăm trang web, qu&yacute; kh&aacute;ch sẽ lu&ocirc;n ở trong t&igrave;nh trạng v&ocirc; danh trừ khi qu&yacute; kh&aacute;ch c&oacute; t&agrave;i khoản tr&ecirc;n trang web v&agrave; đăng nhập v&agrave;o bằng t&ecirc;n v&agrave; mật khẩu của m&igrave;nh.<br />\r\nNếu qu&yacute; kh&aacute;ch c&oacute; &yacute; kiến hay đ&oacute;ng g&oacute;p g&igrave;, xin vui l&ograve;ng gửi đến địa chỉ bưu điện hoặc gửi email tới customer@TheShop.vn. Ch&uacute;ng t&ocirc;i lu&ocirc;n sẳn s&agrave;ng lắng nghe nhận x&eacute;t của qu&yacute; kh&aacute;ch.<br />\r\nQuy định Bảo mật của ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n tu&acirc;n theo Đạo luật Bảo Mật 1988 v&agrave; l&agrave; phương ch&acirc;m tốt nhất của nền c&ocirc;ng nghiệp.&nbsp;</p>\r\n\r\n<p>Thu thập th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nCập nhật th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nBảo mật th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nTiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nThu thập dữ liệu m&aacute;y t&iacute;nh<br />\r\nThay đổi của Ch&iacute;nh s&aacute;ch Bảo Mật</p>\r\n\r\n<p>Thu thập th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nTheShop.VN kh&ocirc;ng b&aacute;n, chia sẻ hay trao đổi th&ocirc;ng tin c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng thu thập tr&ecirc;n trang web cho một b&ecirc;n thứ ba n&agrave;o kh&aacute;c.</p>\r\n\r\n<p>Th&ocirc;ng tin c&aacute; nh&acirc;n thu thập được sẽ chỉ được sử dụng trong nội bộ c&ocirc;ng ty.&nbsp;</p>\r\n\r\n<p>Khi qu&yacute; kh&aacute;ch đăng k&yacute; t&agrave;i khoản TheShop.VN, th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave; ch&uacute;ng t&ocirc;i thu thập bao gồm:</p>\r\n\r\n<p>- T&ecirc;n<br />\r\n- Địa chỉ giao h&agrave;ng<br />\r\n- Địa chỉ Email<br />\r\n- Số điện thoại cố định<br />\r\n- Số điện thoại di động<br />\r\n- Ng&agrave;y sinh<br />\r\n- Giới t&iacute;nh</p>\r\n\r\n<p>Những th&ocirc;ng tin tr&ecirc;n sẽ được sử dụng cho một hoặc tất cả c&aacute;c mục đ&iacute;ch sau đ&acirc;y:</p>\r\n\r\n<p>- Giao h&agrave;ng qu&yacute; kh&aacute;ch đ&atilde; mua tại TheShop.VN<br />\r\n- Th&ocirc;ng b&aacute;o về việc giao h&agrave;ng v&agrave; hỗ trợ kh&aacute;ch h&agrave;ng<br />\r\n- Cung cấp th&ocirc;ng tin li&ecirc;n quan đến sản phẩm<br />\r\n- Xử l&yacute; đơn đặt h&agrave;ng v&agrave; cung cấp dịch vụ v&agrave; th&ocirc;ng tin qua trang web của ch&uacute;ng t&ocirc;i theo y&ecirc;u cầu của qu&yacute; kh&aacute;ch<br />\r\n- Ngo&agrave;i ra, ch&uacute;ng t&ocirc;i sẽ sử dụng th&ocirc;ng tin qu&yacute; kh&aacute;ch cung cấp để hỗ trợ quản l&yacute; t&agrave;i khoản kh&aacute;ch h&agrave;ng; x&aacute;c nhận v&agrave; thực hiện c&aacute;c giao dịch t&agrave;i ch&iacute;nh li&ecirc;n quan đến c&aacute;c khoản thanh to&aacute;n trực tuyến của qu&yacute; kh&aacute;ch; kiểm tra dữ liệu tải từ trang web của ch&uacute;ng t&ocirc;i; cải thiện giao diện v&agrave;/hoặc nội dung của c&aacute;c trang mục tr&ecirc;n trang web v&agrave; t&ugrave;y chỉnh để dễ d&agrave;ng hơn khi sử dụng; nhận diện kh&aacute;ch đến thăm trang web; nghi&ecirc;n cứu về nh&acirc;n khẩu học của người sử dụng; gửi đến qu&yacute; kh&aacute;ch th&ocirc;ng tin m&agrave; ch&uacute;ng t&ocirc;i nghĩ sẽ c&oacute; &iacute;ch hoặc do qu&yacute; kh&aacute;ch y&ecirc;u cầu, bao gồm th&ocirc;ng tin về sản phẩm v&agrave; dịch vụ, với điều kiện qu&yacute; kh&aacute;ch đồng &yacute; kh&ocirc;ng phản đối việc được li&ecirc;n lạc cho c&aacute;c mục đ&iacute;ch tr&ecirc;n.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i c&oacute; thể chia sẻ t&ecirc;n v&agrave; địa chỉ của qu&yacute; kh&aacute;ch cho dịch vụ chuyển ph&aacute;t nhanh hoặc nh&agrave; cung cấp của ch&uacute;ng t&ocirc;i để c&oacute; thể giao h&agrave;ng cho qu&yacute; kh&aacute;ch.</p>\r\n\r\n<p>Khi qu&yacute; kh&aacute;ch đăng k&yacute; l&agrave;m th&agrave;nh vi&ecirc;n tr&ecirc;n trang web TheShop.VN, ch&uacute;ng t&ocirc;i cũng sẽ sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch để gửi c&aacute;c th&ocirc;ng tin khuyến m&atilde;i/tiếp thị. Qu&yacute; kh&aacute;ch c&oacute; thể hủy nhận c&aacute;c th&ocirc;ng tin đ&oacute; bất kỳ l&uacute;c n&agrave;o bằng c&aacute;ch sử dụng chức năng hủy đăng k&yacute; trong c&aacute;c th&ocirc;ng b&aacute;o quảng c&aacute;o.</p>\r\n\r\n<p>C&aacute;c khoản thanh to&aacute;n m&agrave; qu&yacute; kh&aacute;ch thực hiện qua trang web sẽ được xử l&yacute; bởi c&ocirc;ng ty của ch&uacute;ng t&ocirc;i, C&Ocirc;NG TY TNHH B&Aacute;N LẺ V&Agrave; GIAO NHẬN RECESS. Qu&yacute; kh&aacute;ch phải cung cấp cho ch&uacute;ng t&ocirc;i hoặc đại l&yacute; của ch&uacute;ng t&ocirc;i hoặc trang web những th&ocirc;ng tin ch&iacute;nh x&aacute;c v&agrave; phải lu&ocirc;n cập nhật th&ocirc;ng tin v&agrave; b&aacute;o cho ch&uacute;ng t&ocirc;i biết nếu c&oacute; thay đổi.</p>\r\n\r\n<p>Chi tiết đơn h&agrave;ng của qu&yacute; kh&aacute;ch sẽ được ch&uacute;ng t&ocirc;i lưu trữ nhưng v&igrave; l&yacute; do bảo mật, qu&yacute; kh&aacute;ch kh&ocirc;ng thể y&ecirc;u cầu th&ocirc;ng tin đ&oacute; từ ch&uacute;ng t&ocirc;i. Tuy nhi&ecirc;n, qu&yacute; kh&aacute;ch c&oacute; thể kiểm tra th&ocirc;ng tin đ&oacute; bằng c&aacute;ch đăng nhập v&agrave;o t&agrave;i khoản ri&ecirc;ng của m&igrave;nh tr&ecirc;n trang web. Tại đ&oacute;, qu&yacute; kh&aacute;ch c&oacute; thể theo d&otilde;i đầy đủ chi tiết của c&aacute;c đơn h&agrave;ng đ&atilde; ho&agrave;n tất, những đơn h&agrave;ng mở v&agrave; những đơn h&agrave;ng sắp được giao cũng như quản l&yacute; th&ocirc;ng tin về địa chỉ, th&ocirc;ng tin về ng&acirc;n h&agrave;ng v&agrave; những bản tin m&agrave; qu&yacute; kh&aacute;ch đ&atilde; đăng k&yacute; nhận. Qu&yacute; kh&aacute;ch cần bảo đảm l&agrave; th&ocirc;ng tin được truy cập một c&aacute;ch b&iacute; mật v&agrave; kh&ocirc;ng l&agrave;m lộ cho một b&ecirc;n thứ ba kh&ocirc;ng c&oacute; quyền. Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm đối với việc sử dụng sai mật khẩu trừ khi đ&oacute; l&agrave; lỗi của ch&uacute;ng t&ocirc;i.<br />\r\nCập nhật th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nQu&yacute; kh&aacute;ch c&oacute; thể cập nhật th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh bất kỳ l&uacute;c n&agrave;o bằng c&aacute;ch đăng nhập v&agrave;o trang web TheShop.VN.</p>\r\n\r\n<p>Bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nTheShop.VN đảm bảo rằng mọi th&ocirc;ng tin thu thập được sẽ được lưu giữ an to&agrave;n. Ch&uacute;ng t&ocirc;i bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch bằng c&aacute;ch:&nbsp;<br />\r\n- Giới hạn truy cập th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\n- Sử dụng sản phẩm c&ocirc;ng nghệ để ngăn chặn truy cập m&aacute;y t&iacute;nh tr&aacute;i ph&eacute;p<br />\r\n- X&oacute;a th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch khi n&oacute; kh&ocirc;ng c&ograve;n cần thiết cho mục đ&iacute;ch lưu trữ hồ sơ của ch&uacute;ng t&ocirc;i</p>\r\n\r\n<p>TheShop.VN sử dụng c&ocirc;ng nghệ m&atilde; h&oacute;a theo giao thức 128-bit SSL (secure sockets layer) khi xử l&yacute; th&ocirc;ng tin t&agrave;i ch&iacute;nh của qu&yacute; kh&aacute;ch. M&atilde; h&oacute;a 128-bit SSL phải mất xấp xỉ một ngh&igrave;n tỉ năm mới c&oacute; thể ph&aacute; vỡ được v&agrave; l&agrave; giao thức ti&ecirc;u chuẩn của m&atilde; h&oacute;a.</p>\r\n\r\n<p>Tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n<br />\r\nCh&uacute;ng t&ocirc;i sẽ kh&ocirc;ng chia sẻ th&ocirc;ng tin của qu&yacute; kh&aacute;ch cho bất kỳ một c&ocirc;ng ty n&agrave;o kh&aacute;c ngoại trừ những c&ocirc;ng ty v&agrave; c&aacute;c b&ecirc;n thứ ba c&oacute; li&ecirc;n quan trực tiếp đến việc giao h&agrave;ng m&agrave; qu&yacute; kh&aacute;ch đ&atilde; mua tại TheShop.VN. Trong một v&agrave;i trường hợp đặc biệt, TheShop.VN c&oacute; thể bị y&ecirc;u cầu phải tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n, v&iacute; dụ như khi c&oacute; căn cứ cho việc tiết lộ th&ocirc;ng tin l&agrave; cần thiết để ngăn chặn c&aacute;c mối đe dọa về t&iacute;nh mạng v&agrave; sức khỏe, hay cho mục đ&iacute;ch thực thi ph&aacute;p luật. TheShop.VN cam kết tu&acirc;n thủ Đạo luật Bảo Mật v&agrave; c&aacute;c Nguy&ecirc;n tắc Bảo mật Quốc gia.</p>\r\n\r\n<p>Nếu qu&yacute; kh&aacute;ch tin rằng bảo mật của qu&yacute; kh&aacute;ch bị TheShop.VN x&acirc;m phạm, xin vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i tại địa chỉ customer@TheShop.vn để được giải quyết vấn đề.</p>\r\n\r\n<p>Thu thập dữ liệu m&aacute;y t&iacute;nh<br />\r\nKhi qu&yacute; kh&aacute;ch đến thăm TheShop.VN, m&aacute;y chủ của c&ocirc;ng ty ch&uacute;ng t&ocirc;i sẽ tự động lưu trữ th&ocirc;ng tin m&agrave; tr&igrave;nh duyệt của qu&yacute; kh&aacute;ch gửi đến. Những th&ocirc;ng tin n&agrave;y bao gồm:&nbsp;<br />\r\n- Địa chỉ IP của qu&yacute; kh&aacute;ch<br />\r\n- Loại tr&igrave;nh duyệt<br />\r\n- C&aacute;c trang web m&agrave; qu&yacute; kh&aacute;ch đ&atilde; gh&eacute; thăm trước khi đến trang web của ch&uacute;ng t&ocirc;i<br />\r\n- Những trang mục trong TheShop.VN m&agrave; qu&yacute; kh&aacute;ch gh&eacute; thăm<br />\r\n- Khoảng thời gian qu&yacute; kh&aacute;ch gi&agrave;nh ra đ&atilde; xem những trang mục đ&oacute;, sản phẩm, t&igrave;m kiếm th&ocirc;ng tin tr&ecirc;n trang web, thời gian v&agrave; ng&agrave;y th&aacute;ng truy cập, v&agrave; c&aacute;c số liệu thống k&ecirc; kh&aacute;c.</p>\r\n\r\n<p>C&aacute;c th&ocirc;ng tin đ&oacute; được thu thập cho mục đ&iacute;ch ph&acirc;n t&iacute;ch v&agrave; đ&aacute;nh gi&aacute; để g&oacute;p phần cải thiện trang web, dịch vụ, v&agrave; sản phẩm m&agrave; ch&uacute;ng t&ocirc;i cung cấp. Những dữ liệu đ&oacute; sẽ kh&ocirc;ng c&oacute; li&ecirc;n quan g&igrave; đến c&aacute;c th&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;c.</p>\r\n\r\n<p>Như đ&atilde; đề cập ở phần tr&ecirc;n, TheShop sẽ sử dụng t&iacute;nh năng của Google Analytics dựa tr&ecirc;n những dữ liệu về quảng c&aacute;o bằng h&igrave;nh ảnh (Display advertising) bao gồm những phần sau: b&aacute;o c&aacute;o về Re-marketing, b&aacute;o c&aacute;o về số lượt hiện quảng c&aacute;o h&igrave;nh ảnh tr&ecirc;n mạng lưới trang web của Google, b&aacute;o c&aacute;o về Double Click, thống k&ecirc; h&agrave;nh vi &amp; sở th&iacute;ch kh&aacute;ch h&agrave;ng tr&ecirc;n Google Analytics. H&atilde;y chọn mục thiết lập quảng c&aacute;o của Google (https://www.google.com/settings/ads ), để bạn c&oacute; thể tắt phần hiển thị quảng c&aacute;o từ Google Analytics v&agrave; t&ugrave;y chỉnh quảng c&aacute;o tr&ecirc;n hệ thống Google Display Network.</p>\r\n\r\n<p>Ngo&agrave;i ra, TheShop c&ograve;n sử dụng chức năng Re-marketing của Google Analytic để quảng c&aacute;o trực tuyến; c&aacute;c b&ecirc;n thứ ba (bao gồm Google) sẽ c&oacute; thể hiển thị quảng c&aacute;o của TheShop tr&ecirc;n c&aacute;c website li&ecirc;n kết. TheShop v&agrave; b&ecirc;n cung cấp thứ 3, bao gồm cả Google, sẽ sử dụng cookies của b&ecirc;n thứ nhất (như Google Analytics cookies v&agrave; cookie) của b&ecirc;n thứ 3 (như DoubleClick) để th&ocirc;ng b&aacute;o, tối ưu h&oacute;a v&agrave; tr&igrave;nh chiếu c&aacute;c mẫu quảng c&aacute;o dựa tr&ecirc;n những lần kh&aacute;ch h&agrave;ng truy cập website trước đ&oacute;, đồng thời cho biết kết quả phản ứng của kh&aacute;ch h&agrave;ng đối với mẫu quảng c&aacute;o, những c&aacute;ch sử dụng kh&aacute;c của quảng c&aacute;o v&agrave; độ tương t&aacute;c của những mẫu quảng c&aacute;o n&agrave;y v&agrave; dịch vụ quảng c&aacute;o đến số lượng truy cập v&agrave;o trang TheShop.</p>\r\n\r\n<p>Thay đổi của Ch&iacute;nh s&aacute;ch Bảo mật&nbsp;<br />\r\nTheShop.VN c&oacute; quyền thay đổi v&agrave; chỉnh sửa Quy định Bảo mật v&agrave;o bất kỳ l&uacute;c n&agrave;o. Bất cứ thay đổi n&agrave;o về ch&iacute;nh s&aacute;ch n&agrave;y đều được đăng tr&ecirc;n trang web của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>TheShop.VN c&oacute; quyền thay đổi v&agrave; chỉnh sửa Quy định Bảo mật v&agrave;o bất kỳ l&uacute;c n&agrave;o. Bất cứ thay đổi n&agrave;o về ch&iacute;nh s&aacute;ch n&agrave;y đều được đăng tr&ecirc;n trang web của ch&uacute;ng t&ocirc;i.<br />\r\nNếu qu&yacute; kh&aacute;ch kh&ocirc;ng h&agrave;i l&ograve;ng với việc ch&uacute;ng t&ocirc;i xử l&yacute; thắc mắc hay khiếu nại của qu&yacute; kh&aacute;ch, xin vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i tại customer@TheShop.vn.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-01-22 03:04:37'),
(4, 'change_delivery', 3, '<p>Nhằm mang đến những trải nghiệm mua sắm tốt nhất cho bạn, The Luxury fashion hỗ trợ dịch vụ đổi trả h&agrave;ng v&ocirc; c&ugrave;ng thuận tiện v&agrave; ho&agrave;n to&agrave;n MIỄN PH&Iacute;, trong v&ograve;ng 30 ng&agrave;y kể từ ng&agrave;y nhận h&agrave;ng. Vui l&ograve;ng đọc kỹ Điều kiện đổi v&agrave; trả h&agrave;ng. Sản phẩm gửi trả sẽ kh&ocirc;ng được The Luxury fashion chấp nhận nếu kh&ocirc;ng đ&aacute;p ứng một trong những điều kiện b&ecirc;n dưới. Bạn sẽ phải thanh to&aacute;n số tiền cho 2 lần vận chuyển (gửi h&agrave;ng về cho The Luxury fashion, v&agrave; The Luxury fashion gửi trả lại h&agrave;ng cho bạn)</p>\r\n\r\n<p><br />\r\nĐIỀU KIỆN ĐỔI TRẢ SẢN PHẨM:</p>\r\n\r\n<p>H&oacute;a đơn VAT c&ograve;n nguy&ecirc;n vẹn, kh&ocirc;ng chấp v&aacute; hoặc tẩy x&oacute;a.<br />\r\nTrong v&ograve;ng 30 ng&agrave;y kể từ ng&agrave;y nhận h&agrave;ng.<br />\r\nC&ograve;n nguy&ecirc;n tem, nh&atilde;n m&aacute;c, hộp v&agrave; bao b&igrave; c&oacute; d&aacute;n m&atilde; sản phẩm của TheShop.<br />\r\nChưa sử dụng, giặt ủi, kh&ocirc;ng bị dơ bẩn. (V&igrave; vậy khi thử c&aacute;c sản phẩm gi&agrave;y d&eacute;p, bạn n&ecirc;n mang vớ v&agrave; thử gi&agrave;y tr&ecirc;n bề mặt sạch)<br />\r\nCh&iacute;nh s&aacute;ch đổi trả h&agrave;ng kh&ocirc;ng &aacute;p dụng cho: đồ l&oacute;t, đồ ngủ, đồ bơi, đồ thể dục thẩm mỹ v&agrave; yoga, sản phẩm l&agrave;m đẹp, b&ocirc;ng tai, vớ, quần legging, văn ph&ograve;ng phẩm, v&agrave; c&aacute;c sản phẩm trong chương tr&igrave;nh giảm gi&aacute;, khuyến m&atilde;i kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng (nếu c&oacute;).<br />\r\nLưu &yacute;: Dịch vụ đổi h&agrave;ng chỉ &aacute;p dụng cho c&ugrave;ng sản phẩm nhưng kh&aacute;c m&agrave;u kh&aacute;c size, KH&Ocirc;NG &aacute;p dụng cho sản phẩm đặt tại TheShop Singapore v&agrave; sản phẩm được cung cấp bởi đối t&aacute;c của TheShop.</p>\r\n\r\n<p>C&Aacute;C BƯỚC HO&Agrave;N TRẢ SẢN PHẨM</p>\r\n\r\n<p><br />\r\n1. Điền v&agrave;o &quot;Phiếu Ho&agrave;n Trả Sản Phẩm&quot;:</p>\r\n\r\n<p>Chọn 1 trong 8 l&yacute; do cho mỗi sản phẩm ho&agrave;n trả: 1- Kh&ocirc;ng th&iacute;ch kiểu d&aacute;ng, 2- Kh&ocirc;ng th&iacute;ch m&agrave;u sắc, 3- Kh&ocirc;ng th&iacute;ch chất liệu, 4- Sản phẩm kh&aacute;c website, 5- Sản phẩm bị lỗi, 6- K&iacute;ch cỡ qu&aacute; nhỏ, 7- K&iacute;ch cỡ qu&aacute; to, 8- L&yacute; do kh&aacute;c.</p>\r\n\r\n<p>2. Đ&oacute;ng g&oacute;i sản phẩm cần ho&agrave;n trả:</p>\r\n\r\n<p>Đ&oacute;ng g&oacute;i sản phẩm k&egrave;m đầy đủ h&oacute;a đơn VAT v&agrave; &quot;Phiếu Ho&agrave;n Trả Sản Phẩm&quot; để gửi về TheShop.</p>\r\n\r\n<p>3. Gửi kiện h&agrave;ng đ&atilde; đ&oacute;ng g&oacute;i về TheShop:</p>\r\n\r\n<p>Nếu bạn ở nội th&agrave;nh H&agrave; Nội hoặc Th&agrave;nh phố Hồ Ch&iacute; Minh:</p>\r\n\r\n<p>Lựa chọn 1: Y&ecirc;u cầu TheShop đến nhận h&agrave;ng ho&agrave;n trả tận nơi, vui l&ograve;ng đăng k&yacute; th&ocirc;ng tin gửi trả tại đ&acirc;y.<br />\r\nLựa chọn 2: Sau khi đ&oacute;ng g&oacute;i, d&aacute;n &quot;Tem chuyển ph&aacute;t nhanh miễn ph&iacute;&quot; (đ&atilde; in sẵn &quot;M&atilde; vận chuyển&quot; v&agrave; th&ocirc;ng tin cần thiết) b&ecirc;n ngo&agrave;i kiện h&agrave;ng v&agrave; đem ra bưu điện gần nhất. Mọi thủ tục sẽ được Bưu điện tiến h&agrave;nh tự động v&agrave; ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n\r\n<p>Nếu bạn ở c&aacute;c tỉnh v&agrave; th&agrave;nh phố kh&aacute;c:</p>\r\n\r\n<p>Sau khi đ&oacute;ng g&oacute;i, d&aacute;n &quot;Tem chuyển ph&aacute;t nhanh miễn ph&iacute;&quot; (đ&atilde; in sẵn &quot;M&atilde; vận chuyển&quot; v&agrave; th&ocirc;ng tin cần thiết) b&ecirc;n ngo&agrave;i kiện h&agrave;ng v&agrave; đem ra bưu điện gần nhất.<br />\r\nMọi thủ tục sẽ được Bưu điện tiến h&agrave;nh tự động v&agrave; ho&agrave;n to&agrave;n miễn ph&iacute;.<br />\r\n4. Nhận tiền ho&agrave;n trả v&agrave;o V&iacute; Điện Tử:</p>\r\n\r\n<p>Để qu&aacute; tr&igrave;nh ho&agrave;n tiền được tiến h&agrave;nh nhanh ch&oacute;ng nhất c&oacute; thể, TheShop sẽ chủ động ho&agrave;n tiền v&agrave;o V&iacute; Điện Tử của bạn trong v&ograve;ng 24 giờ ngay sau khi nhận được sản phẩm ho&agrave;n trả.<br />\r\nTiền trong V&iacute; Điện Tử c&oacute; gi&aacute; trị 1 năm v&agrave; bằng với số tiền bạn đ&atilde; thanh to&aacute;n (kh&ocirc;ng bao gồm ph&iacute; vận chuyển v&agrave; m&atilde; giảm gi&aacute;), sẽ được khấu trừ trong qu&aacute; tr&igrave;nh đặt h&agrave;ng tiếp theo v&agrave; &aacute;p dụng đồng thời với c&aacute;c m&atilde; giảm gi&aacute; kh&aacute;c.<br />\r\nĐể thay đổi h&igrave;nh thức ho&agrave;n tiền kh&aacute;c, vui l&ograve;ng li&ecirc;n hệ bộ phận CSKH</p>\r\n\r\n<p>C&Aacute;C BƯỚC ĐỔI SẢN PHẨM</p>\r\n\r\n<p><br />\r\nVui l&ograve;ng li&ecirc;n hệ Bộ phận Chăm s&oacute;c Kh&aacute;ch h&agrave;ng hoặc đăng nhập v&agrave;o t&agrave;i khoản c&aacute; nh&acirc;n để đăng k&yacute; đổi h&agrave;ng (c&ugrave;ng sản phẩm, kh&aacute;c m&agrave;u, kh&aacute;c size). Dịch vụ đổi h&agrave;ng tại TheShop ho&agrave;n to&agrave;n miễn ph&iacute; tr&ecirc;n to&agrave;n quốc</p>\r\n\r\n<p>Trong v&ograve;ng 30 ng&agrave;y kể từ khi nhận h&agrave;ng, nếu bạn muốn đổi sản phẩm, t&ugrave;y v&agrave;o khu vực giao h&agrave;ng, chỉ cần thực hiện theo c&aacute;c bước sau:</p>\r\n\r\n<p>Nếu bạn ở nội th&agrave;nh H&agrave; Nội hoặc Th&agrave;nh phố Hồ Ch&iacute; Minh:</p>\r\n\r\n<p>Li&ecirc;n hệ Bộ phận Chăm s&oacute;c Kh&aacute;ch h&agrave;ng th&ocirc;ng qua Hotline để được hỗ trợ đổi sản phẩm tận nơi: Nh&acirc;n vi&ecirc;n giao h&agrave;ng sẽ đem sản phẩm bạn muốn đổi đến tận nh&agrave;, đồng thời nhận lại sản phẩm ban đầu.<br />\r\nNếu bạn ở khu vực kh&aacute;c:</p>\r\n\r\n<p>Y&ecirc;u cầu đổi h&agrave;ng bằng c&aacute;ch li&ecirc;n hệ TheShop để gi&uacute;p giữ sản phẩm bạn muốn đổi trong v&ograve;ng 10 ng&agrave;y.<br />\r\nTiến h&agrave;nh đ&oacute;ng g&oacute;i để ho&agrave;n trả sản phẩm ban đầu v&agrave; gửi về cho TheShop qua bưu điện (giống như Bước 3 trong &quot;C&aacute;c Bước Ho&agrave;n Trả Sản Phẩm&quot;, xem phần tr&ecirc;n)<br />\r\nNgay khi nhận được sản phẩm ho&agrave;n trả, TheShop sẽ tiến h&agrave;nh gửi sản phẩm bạn muốn đổi đến cho bạn.<br />\r\nLưu &yacute;:<br />\r\nTrong 10 ng&agrave;y: TheShop chỉ giữ sản phẩm bạn muốn đổi.<br />\r\nSau 10 ng&agrave;y: Nếu vẫn chưa nhận được sản phẩm bạn gửi trả, y&ecirc;u cầu đổi h&agrave;ng vẫn c&ograve;n hiệu lực, nhưng trong trường hợp sản phẩm bạn muốn đổi đ&atilde; hết h&agrave;ng, TheShop sẽ tiến h&agrave;nh ho&agrave;n tiền cho bạn (l&uacute;c n&agrave;y xem như đơn h&agrave;ng ho&agrave;n trả).<br />\r\nSau 15 ng&agrave;y: Y&ecirc;u cầu đổi h&agrave;ng hết hiệu lực.</p>\r\n\r\n<p>LI&Ecirc;N HỆ CHĂM S&Oacute;C KH&Aacute;CH H&Agrave;NG<br />\r\nEmail: customer@vn.TheShop.com<br />\r\nPhone: 123456789<br />\r\nGiờ l&agrave;m việc:<br />\r\nThứ 2 - Chủ nhật: 8h - 18h<br />\r\nNg&agrave;y Lễ: 9h - 18h</p>\r\n', '2017-01-22 03:04:37'),
(5, 'transport', 4, '<p>CH&Iacute;NH S&Aacute;CH GIAO H&Agrave;NG V&Agrave; HO&Agrave;N TRẢ</p>\r\n\r\n<p>Giao h&agrave;ng<br />\r\nTheShop sẽ vận chuyển h&agrave;ng trong khoảng thời gian thỏa thuận khi qu&yacute; kh&aacute;ch thanh to&aacute;n. Tuy nhi&ecirc;n, ch&uacute;ng t&ocirc;i kh&ocirc;ng thể đảm bảo tất cả c&aacute;c đơn h&agrave;ng sẽ được giao trong khoảng thời gian đ&atilde; thống nhất.</p>\r\n\r\n<p>Ngay sau khi đơn h&agrave;ng của bạn được gửi đi từ kho của ch&uacute;ng t&ocirc;i, qu&yacute; kh&aacute;ch sẽ nhận được thư x&aacute;c nhận rằng h&agrave;ng h&oacute;a của bạn đang tr&ecirc;n đường vận chuyển. Nếu ch&uacute;ng t&ocirc;i kh&ocirc;ng thể giao h&agrave;ng đ&uacute;ng ng&agrave;y dự đo&aacute;n, ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm về bất kỳ tổn thất, ch&iacute; ph&iacute;, thiệt hại hay chi ph&iacute; ph&aacute;t sinh từ việc giao h&agrave;ng trễ. Nếu qu&yacute; kh&aacute;ch vắng mặt ở nơi giao h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ gửi cho bạn một thẻ hướng dẫn để nhận h&agrave;ng lại hoặc lấy h&agrave;ng từ h&atilde;ng vận chuyển.</p>\r\n\r\n<p>Để kiểm tra đơn h&agrave;ng của qu&yacute; kh&aacute;ch, h&atilde;y sử dụng m&atilde; số theo d&otilde;i đ&atilde; được gửi cho kh&aacute;ch h&agrave;ng trong thư x&aacute;c nhận. Sau khi h&agrave;ng được chuyển đến qu&yacute; kh&aacute;ch, trước khi k&yacute; x&aacute;c nhận, qu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra nếu sản phẩm c&oacute; bất kỳ lỗi hay khiếm khuyết n&agrave;o. Để đề ph&ograve;ng, xin vui l&ograve;ng giữ lại bi&ecirc;n lại vận chuyển.</p>\r\n\r\n<p>Tuy hiếm xảy ra nhưng nếu qu&yacute; kh&aacute;ch ph&aacute;t hiện sản phảm bị khiếm khuyết hay thiếu sản phẩm trong đơn h&agrave;ng, vui l&ograve;ng thực hiện c&aacute;c bước hướng dẫn trong mục &ldquo;C&aacute;c c&acirc;u hỏi thường gặp&rdquo; hay li&ecirc;n lạc với Bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng qua customer@The-Luxury fashion.vn.</p>\r\n\r\n<p>Ho&agrave;n trả h&agrave;ng<br />\r\nTrong trường hợp kh&aacute;ch h&agrave;ng muốn trả lại h&agrave;ng đ&atilde; mua, qu&yacute; kh&aacute;ch c&oacute; 30 ng&agrave;y từ ng&agrave;y mua h&agrave;ng để ho&agrave;n trả đơn h&agrave;ng. Vui l&ograve;ng li&ecirc;n lạc với Bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng của TheShop để bắt đầu ho&agrave;n trả.&nbsp;<br />\r\nVui l&ograve;ng đảm bảo mảnh giấy ho&agrave;n trả đ&atilde; được đ&iacute;nh k&egrave;m với bưu kiện, v&agrave; sản phẩm chưa được mặc v&agrave; c&ograve;n trong t&igrave;nh trạng ban đầu. Sản phẩm cần phải được chuyển đến địa chỉ ho&agrave;n trả của ch&uacute;ng t&ocirc;i trong v&ograve;ng 30 ng&agrave;y từ ng&agrave;y mua h&agrave;ng.</p>\r\n\r\n<p><br />\r\nTheShop<br />\r\n61/2 Quang Trung, P.10&nbsp;<br />\r\nQ. G&ograve; Vấp, TP. HCM</p>\r\n\r\n<p><br />\r\nKhi ph&ograve;ng Quản l&yacute; Chất lượng đ&atilde; kiểm tra h&agrave;ng được trả về, ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;ng qu&aacute; tr&igrave;nh ho&agrave;n trả của bạn trong v&ograve;ng 5 ng&agrave;y l&agrave;m việc</p>\r\n\r\n<p>Q&uacute;y kh&aacute;ch sẽ chịu tr&aacute;ch nhiệm cho tất cả h&agrave;ng h&oacute;a cho đến khi ch&uacute;ng được gửi đến nh&agrave; kho của c&ocirc;ng ty v&agrave; đồng &yacute; trả chi ph&iacute; li&ecirc;n quan đến việc trả h&agrave;ng của qu&yacute; vị. Vui l&ograve;ng đảm bảo đ&oacute;ng g&oacute;i h&agrave;ng h&oacute;a cẩn thận để đề ph&ograve;ng thiệt hại. Ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n sử dụng h&atilde;ng vận chuyển uy t&iacute;n c&oacute; dịch vụ theo d&otilde;i bưu phẩm.</p>\r\n\r\n<p>Nếu qu&yacute; kh&aacute;ch c&oacute; c&acirc;u hỏi hay y&ecirc;u cầu kh&aacute;c, vui l&ograve;ng li&ecirc;n hệ Bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng qua email customer@The-Luxury fashion.vn.</p>\r\n', '2017-01-22 03:04:37'),
(6, 'payment', 5, '<p>Nhằm mang đến qu&yacute; kh&aacute;ch những trải nghiệm mua sắm trực tuyến tuyệt vời nhất, tại đ&acirc;y, ch&uacute;ng t&ocirc;i đưa ra nhiều phương thức thanh to&aacute;n để qu&yacute; kh&aacute;ch dễ d&agrave;ng lựa chọn:</p>\r\n\r\n<ul style="margin-left:30px; margin-right:initial">\r\n	<li>Thanh to&aacute;n khi nhận h&agrave;ng (COD)</li>\r\n	<li>Thanh to&aacute;n qua thẻ t&iacute;n dụng/thẻ ghi nợ</li>\r\n	<li>Thanh to&aacute;n qua thẻ ATM nội địa</li>\r\n	<li>Thanh to&aacute;n trả g&oacute;p qua thẻ t&iacute;n dụng</li>\r\n</ul>\r\n', '2017-01-22 03:04:37'),
(7, 'transport_fee', 6, '<p>Do sản phẩm của c&aacute;c nh&agrave; cung cấp được đặt tại nhiều kho kh&aacute;c nhau, TheShop sẽ ủy quyền vận chuyển sản phẩm cho mỗi nh&agrave; cung cấp tương ứng trong giỏ h&agrave;ng. V&igrave; vậy:</p>\r\n\r\n<p>Từ ng&agrave;y 22/09/2015, ph&iacute; vận chuyển được &aacute;p dụng ri&ecirc;ng biệt cho từng NH&Agrave; CUNG CẤP*:</p>\r\n\r\n<p>Gi&aacute; trị mua h&agrave;ng từ c&ugrave;ng 1 NH&Agrave; CUNG CẤP &ge; 449,000 VNĐ: MIỄN PH&Iacute; ho&agrave;n to&agrave;n ph&iacute; vận chuyển tr&ecirc;n to&agrave;n quốc<br />\r\nGi&aacute; trị mua h&agrave;ng từ c&ugrave;ng 1 NH&Agrave; CUNG CẤP &lt; 449,000 VNĐ: Vui l&ograve;ng tham khảo biểu ph&iacute; giao h&agrave;ng cho từng khu vực tại đ&acirc;y.<br />\r\n* Để x&aacute;c định NH&Agrave; CUNG CẤP, bạn vui l&ograve;ng xem ghi ch&uacute; &ldquo;Cung cấp bởi ...&rdquo; tại 2 vị tr&iacute; sau:&nbsp;</p>\r\n\r\n<p>1. Trang Cataloge:<br />\r\n2. Trang sản phẩm:</p>\r\n\r\n<p>Nếu kh&ocirc;ng c&oacute; ghi ch&uacute; tr&ecirc;n, th&igrave; sản phẩm thuộc NH&Agrave; CUNG CẤP TheShop.</p>\r\n\r\n<p>Với sự đổi mới n&agrave;y, TheShop cam kết:</p>\r\n\r\n<p>1. Giao sản phẩm đến bạn sớm nhất c&oacute; thể<br />\r\n2. Mang đến nhiều sản phẩm chất lượng từ nhiều nh&agrave; cung cấp hơn với mức gi&aacute; hấp dẫn hơn, tạo n&ecirc;n sự phong ph&uacute; v&agrave; h&agrave;i l&ograve;ng khi mua sắm cho bạn.</p>\r\n', '2017-01-22 03:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(12) NOT NULL,
  `quantity` int(10) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `view` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT  '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `quantity`, `intro`, `content`, `images`, `keyword`, `description`, `user_id`, `cat_id`, `view`, `created_at`, `updated_at`) VALUES
(3, 'Tủ Lạnh Aqua Aqr-S185an (Sn)', 49000000, 8, 10, '<p>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t được thiết kế hiện đại theo phong c&aacute;ch g&oacute;c cạnh, hiện đại, kh&ocirc;ng chứa nhiều chi tiết sẽ mang lại sự sang trọng cho kh&ocirc;ng gian nội thất gia đ&igrave;nh. B&ecirc;n cạnh đ&oacute; l&agrave; c&aacute;c t&iacute;nh năng cải tiến gi&uacute;p bạn linh hoạt trong việc lưu trữ thức ăn nhằm gi&uacute;p ch&uacute;ng lu&ocirc;n giữ được dưỡng chất v&agrave; sự tươi ngon.</p>\r\n', '<div class="pd_description_content tab-content clearfix  ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1">\r\n<h4 style="text-align:center"><strong><span style="color:#008AC2">TỦ LẠNH ELECTROLUX ETB2102PE-RVN 210 L&Iacute;T</span></strong></h4>\r\n\r\n<p>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t được thiết kế hiện đại theo phong c&aacute;ch g&oacute;c cạnh, hiện đại, kh&ocirc;ng chứa nhiều chi tiết sẽ mang lại sự sang trọng cho kh&ocirc;ng gian nội thất gia đ&igrave;nh. B&ecirc;n cạnh đ&oacute; l&agrave; c&aacute;c t&iacute;nh năng cải tiến gi&uacute;p bạn linh hoạt trong việc lưu trữ thức ăn nhằm gi&uacute;p ch&uacute;ng lu&ocirc;n giữ được dưỡng chất v&agrave; sự tươi ngon.</p>\r\n\r\n<h3><span style="color:#008AC2"><strong>ĐẶC ĐIỂM NỔI BẬT</strong></span></h3>\r\n\r\n<table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p>- Tủ lạnh kh&ocirc;ng đ&oacute;ng tuyết<br />\r\n			- Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t tăng hiệu suất l&agrave;m lạnh, giữ thực phẩm tươi ngon hơn<br />\r\n			- Khay k&iacute;nh được l&agrave;m bằng k&iacute;nh chịu lực c&oacute; độ bền rất cao</p>\r\n			</td>\r\n			<td style="width:50%"><img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn.jpg?v=1453793489296" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="color:#008AC2"><strong>CHI TIẾT T&Iacute;NH NĂNG</strong></span></h3>\r\n\r\n<table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p><strong>Kh&ocirc;ng đ&oacute;ng tuyết</strong><br />\r\n			Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t kh&ocirc;ng đ&oacute;ng tuyết gi&uacute;p người d&ugrave;ng kh&ocirc;ng phải mất thời gian xả tuyết cũng như bảo quản thực phẩm tốt hơn. Tủ lạnh được sản xuất bằng c&ocirc;ng nghệ cao mang đến sự tiện nghi cho gia đ&igrave;nh bạn.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-1.jpg?v=1453794206331" /></p>\r\n\r\n			<p style="text-align:center"><em>Tủ lạnh Electrolux ETB2102PE-RVN dễ vệ sinh khi đ&oacute;ng tuyết</em></p>\r\n			</td>\r\n			<td style="width:50%">\r\n			<p><strong>L&agrave;m lạnh đa chiều</strong><br />\r\n			Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t với c&ocirc;ng nghệ l&agrave;m lạnh đa chiều, luồng kh&iacute; lạnh được thổi ra từ tất cả c&aacute;c v&aacute;ch ngăn của tủ để ph&acirc;n bố đều cho tất cả c&aacute;c loại thực phẩm, do đ&oacute; bạn sẽ kh&ocirc;ng phải lo lắng về việc ph&acirc;n bố độ lạnh kh&ocirc;ng đều.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-2.jpg?v=1453794141296" /></p>\r\n\r\n			<p style="text-align:center"><em>Bảo quản thực phẩm tươi ngon với luồng kh&iacute; lạnh đa chiều</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p><strong>Kiểm so&aacute;t độ ẩm</strong><br />\r\n			Ngăn rau củ tủ lạnh Electrolux ETB2102PE-RVN c&oacute; bộ kiểm so&aacute;t độ ẩm gi&uacute;p cho độ ẩm trong ngăn lu&ocirc;n được đảm bảo nhờ đ&oacute; đảm bảo độ tươi ngon v&agrave; vitamin của rau củ l&acirc;u hơn.<img alt="" src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-3.jpg?v=1453794293139" /></p>\r\n\r\n			<p style="text-align:center"><em>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t kiểm so&aacute;t độ ẩm tốt</em></p>\r\n			</td>\r\n			<td style="width:50%">\r\n			<p><strong>Khay k&iacute;nh chịu lực</strong><br />\r\n			Ngăn rau củ tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t c&oacute; bộ kiểm so&aacute;t độ ẩm gi&uacute;p cho độ ẩm trong ngăn lu&ocirc;n được đảm bảo nhờ đ&oacute; đảm bảo độ tươi ngon v&agrave; vitamin của rau củ l&acirc;u hơn.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-4.jpg?v=1453794307463" /></p>\r\n\r\n			<p style="text-align:center"><em>Thoải m&aacute;i lưu trữ thực phẩm c&oacute; trọng lượng nặng</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-2-480953d9-6ee7-4070-aff4-8495cae3d4ea.jpg?v=1453794407322" /></p>\r\n</div>\r\n', '678b13d949724bf80bb894326fec7490.jpeg', 'Tu-Lanh-Aqua-Aqr-S185An-(Sn)', 'Tu-Lanh-Aqua-Aqr-S185An-(Sn)', 1, 13, NULL, '2017-01-23 17:00:00', NULL),
(4, 'Tủ Lạnh Sanyo Sr-145pn(Vs) ', 4799993, 15, 5, '<p>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t được thiết kế hiện đại theo phong c&aacute;ch g&oacute;c cạnh, hiện đại, kh&ocirc;ng chứa nhiều chi tiết sẽ mang lại sự sang trọng cho kh&ocirc;ng gian nội thất gia đ&igrave;nh. B&ecirc;n cạnh đ&oacute; l&agrave; c&aacute;c t&iacute;nh năng cải tiến gi&uacute;p bạn linh hoạt trong việc lưu trữ thức ăn nhằm gi&uacute;p ch&uacute;ng lu&ocirc;n giữ được dưỡng chất v&agrave; sự tươi ngon.</p>\r\n', '<div class="pd_description_content tab-content clearfix  ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1">\r\n<h4 style="text-align:center"><strong><span style="color:#008AC2">TỦ LẠNH ELECTROLUX ETB2102PE-RVN 210 L&Iacute;T</span></strong></h4>\r\n\r\n<p>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t được thiết kế hiện đại theo phong c&aacute;ch g&oacute;c cạnh, hiện đại, kh&ocirc;ng chứa nhiều chi tiết sẽ mang lại sự sang trọng cho kh&ocirc;ng gian nội thất gia đ&igrave;nh. B&ecirc;n cạnh đ&oacute; l&agrave; c&aacute;c t&iacute;nh năng cải tiến gi&uacute;p bạn linh hoạt trong việc lưu trữ thức ăn nhằm gi&uacute;p ch&uacute;ng lu&ocirc;n giữ được dưỡng chất v&agrave; sự tươi ngon.</p>\r\n\r\n<h3><span style="color:#008AC2"><strong>ĐẶC ĐIỂM NỔI BẬT</strong></span></h3>\r\n\r\n<table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p>- Tủ lạnh kh&ocirc;ng đ&oacute;ng tuyết<br />\r\n			- Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t tăng hiệu suất l&agrave;m lạnh, giữ thực phẩm tươi ngon hơn<br />\r\n			- Khay k&iacute;nh được l&agrave;m bằng k&iacute;nh chịu lực c&oacute; độ bền rất cao</p>\r\n			</td>\r\n			<td style="width:50%"><img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn.jpg?v=1453793489296" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="color:#008AC2"><strong>CHI TIẾT T&Iacute;NH NĂNG</strong></span></h3>\r\n\r\n<table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p><strong>Kh&ocirc;ng đ&oacute;ng tuyết</strong><br />\r\n			Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t kh&ocirc;ng đ&oacute;ng tuyết gi&uacute;p người d&ugrave;ng kh&ocirc;ng phải mất thời gian xả tuyết cũng như bảo quản thực phẩm tốt hơn. Tủ lạnh được sản xuất bằng c&ocirc;ng nghệ cao mang đến sự tiện nghi cho gia đ&igrave;nh bạn.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-1.jpg?v=1453794206331" /></p>\r\n\r\n			<p style="text-align:center"><em>Tủ lạnh Electrolux ETB2102PE-RVN dễ vệ sinh khi đ&oacute;ng tuyết</em></p>\r\n			</td>\r\n			<td style="width:50%">\r\n			<p><strong>L&agrave;m lạnh đa chiều</strong><br />\r\n			Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t với c&ocirc;ng nghệ l&agrave;m lạnh đa chiều, luồng kh&iacute; lạnh được thổi ra từ tất cả c&aacute;c v&aacute;ch ngăn của tủ để ph&acirc;n bố đều cho tất cả c&aacute;c loại thực phẩm, do đ&oacute; bạn sẽ kh&ocirc;ng phải lo lắng về việc ph&acirc;n bố độ lạnh kh&ocirc;ng đều.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-2.jpg?v=1453794141296" /></p>\r\n\r\n			<p style="text-align:center"><em>Bảo quản thực phẩm tươi ngon với luồng kh&iacute; lạnh đa chiều</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p><strong>Kiểm so&aacute;t độ ẩm</strong><br />\r\n			Ngăn rau củ tủ lạnh Electrolux ETB2102PE-RVN c&oacute; bộ kiểm so&aacute;t độ ẩm gi&uacute;p cho độ ẩm trong ngăn lu&ocirc;n được đảm bảo nhờ đ&oacute; đảm bảo độ tươi ngon v&agrave; vitamin của rau củ l&acirc;u hơn.<img alt="" src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-3.jpg?v=1453794293139" /></p>\r\n\r\n			<p style="text-align:center"><em>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t kiểm so&aacute;t độ ẩm tốt</em></p>\r\n			</td>\r\n			<td style="width:50%">\r\n			<p><strong>Khay k&iacute;nh chịu lực</strong><br />\r\n			Ngăn rau củ tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t c&oacute; bộ kiểm so&aacute;t độ ẩm gi&uacute;p cho độ ẩm trong ngăn lu&ocirc;n được đảm bảo nhờ đ&oacute; đảm bảo độ tươi ngon v&agrave; vitamin của rau củ l&acirc;u hơn.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-4.jpg?v=1453794307463" /></p>\r\n\r\n			<p style="text-align:center"><em>Thoải m&aacute;i lưu trữ thực phẩm c&oacute; trọng lượng nặng</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-2-480953d9-6ee7-4070-aff4-8495cae3d4ea.jpg?v=1453794407322" style="height:198px; width:858px" /></p>\r\n</div>\r\n', 'e8d4709968b7308c7591072e1ab320fe.jpeg', 'Tu-Lanh-Sanyo-Sr-145Pn(Vs)', 'Tu-Lanh-Sanyo-Sr-145Pn(Vs)', 1, 13, NULL, '2017-01-24 08:22:52', NULL),
(5, 'Tủ Lạnh Panasonic Nr (167l) ', 4820000, 14, 15, '<p>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t được thiết kế hiện đại theo phong c&aacute;ch g&oacute;c cạnh, hiện đại, kh&ocirc;ng chứa nhiều chi tiết sẽ mang lại sự sang trọng cho kh&ocirc;ng gian nội thất gia đ&igrave;nh. B&ecirc;n cạnh đ&oacute; l&agrave; c&aacute;c t&iacute;nh năng cải tiến gi&uacute;p bạn linh hoạt trong việc lưu trữ thức ăn nhằm gi&uacute;p ch&uacute;ng lu&ocirc;n giữ được dưỡng chất v&agrave; sự tươi ngon.</p>\r\n', '<h4 style="text-align:center"><strong><span style="color:#008AC2">TỦ LẠNH ELECTROLUX ETB2102PE-RVN 210 L&Iacute;T</span></strong></h4>\r\n\r\n<p>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t được thiết kế hiện đại theo phong c&aacute;ch g&oacute;c cạnh, hiện đại, kh&ocirc;ng chứa nhiều chi tiết sẽ mang lại sự sang trọng cho kh&ocirc;ng gian nội thất gia đ&igrave;nh. B&ecirc;n cạnh đ&oacute; l&agrave; c&aacute;c t&iacute;nh năng cải tiến gi&uacute;p bạn linh hoạt trong việc lưu trữ thức ăn nhằm gi&uacute;p ch&uacute;ng lu&ocirc;n giữ được dưỡng chất v&agrave; sự tươi ngon.</p>\r\n\r\n<h3><span style="color:#008AC2"><strong>ĐẶC ĐIỂM NỔI BẬT</strong></span></h3>\r\n\r\n<table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p>- Tủ lạnh kh&ocirc;ng đ&oacute;ng tuyết<br />\r\n			- Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t tăng hiệu suất l&agrave;m lạnh, giữ thực phẩm tươi ngon hơn<br />\r\n			- Khay k&iacute;nh được l&agrave;m bằng k&iacute;nh chịu lực c&oacute; độ bền rất cao</p>\r\n			</td>\r\n			<td style="width:50%"><img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn.jpg?v=1453793489296" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="color:#008AC2"><strong>CHI TIẾT T&Iacute;NH NĂNG</strong></span></h3>\r\n\r\n<table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p><strong>Kh&ocirc;ng đ&oacute;ng tuyết</strong><br />\r\n			Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t kh&ocirc;ng đ&oacute;ng tuyết gi&uacute;p người d&ugrave;ng kh&ocirc;ng phải mất thời gian xả tuyết cũng như bảo quản thực phẩm tốt hơn. Tủ lạnh được sản xuất bằng c&ocirc;ng nghệ cao mang đến sự tiện nghi cho gia đ&igrave;nh bạn.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-1.jpg?v=1453794206331" /></p>\r\n\r\n			<p style="text-align:center"><em>Tủ lạnh Electrolux ETB2102PE-RVN dễ vệ sinh khi đ&oacute;ng tuyết</em></p>\r\n			</td>\r\n			<td style="width:50%">\r\n			<p><strong>L&agrave;m lạnh đa chiều</strong><br />\r\n			Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t với c&ocirc;ng nghệ l&agrave;m lạnh đa chiều, luồng kh&iacute; lạnh được thổi ra từ tất cả c&aacute;c v&aacute;ch ngăn của tủ để ph&acirc;n bố đều cho tất cả c&aacute;c loại thực phẩm, do đ&oacute; bạn sẽ kh&ocirc;ng phải lo lắng về việc ph&acirc;n bố độ lạnh kh&ocirc;ng đều.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-2.jpg?v=1453794141296" /></p>\r\n\r\n			<p style="text-align:center"><em>Bảo quản thực phẩm tươi ngon với luồng kh&iacute; lạnh đa chiều</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:50%">\r\n			<p><strong>Kiểm so&aacute;t độ ẩm</strong><br />\r\n			Ngăn rau củ tủ lạnh Electrolux ETB2102PE-RVN c&oacute; bộ kiểm so&aacute;t độ ẩm gi&uacute;p cho độ ẩm trong ngăn lu&ocirc;n được đảm bảo nhờ đ&oacute; đảm bảo độ tươi ngon v&agrave; vitamin của rau củ l&acirc;u hơn.<img alt="" src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-3.jpg?v=1453794293139" /></p>\r\n\r\n			<p style="text-align:center"><em>Tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t kiểm so&aacute;t độ ẩm tốt</em></p>\r\n			</td>\r\n			<td style="width:50%">\r\n			<p><strong>Khay k&iacute;nh chịu lực</strong><br />\r\n			Ngăn rau củ tủ lạnh Electrolux ETB2102PE-RVN 210 l&iacute;t c&oacute; bộ kiểm so&aacute;t độ ẩm gi&uacute;p cho độ ẩm trong ngăn lu&ocirc;n được đảm bảo nhờ đ&oacute; đảm bảo độ tươi ngon v&agrave; vitamin của rau củ l&acirc;u hơn.<img src="https://bizweb.dktcdn.net/100/052/691/files/tu-lanh-electrolux-etb2102pe-rvn-4.jpg?v=1453794307463" /></p>\r\n\r\n			<p style="text-align:center"><em>Thoải m&aacute;i lưu trữ thực phẩm c&oacute; trọng lượng nặng</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'b3d66477cf9b3196bb30ccedb0677b4a.jpeg', 'Tu-Lanh-Panasonic-Nr-(167L)', 'Tu-Lanh-Panasonic-Nr-(167L)', 1, 13, NULL, '2017-01-24 08:28:06', NULL),
(6, 'Tủ lạnh Aqua 50 lít AQR-55AR', 2590000, 5, 12, '<ul>\r\n	<li>50 l&iacute;t</li>\r\n	<li>Tủ lạnh thường</li>\r\n	<li>Điện năng ti&ecirc;u thụ ~ 0.6 kW/ng&agrave;y</li>\r\n	<li>C&ocirc;ng nghệ l&agrave;m lạnh trực tiếp l&agrave;m lạnh nhanh ch&oacute;ng.</li>\r\n	<li>Tiết kiệm điện năng, giảm chi ph&iacute; cho gia đ&igrave;nh bạn.</li>\r\n	<li>Đ&egrave;n LED chiếu s&aacute;ng r&otilde;, bền bỉ hơn so với c&aacute;c loại đ&egrave;n th&ocirc;ng thường.</li>\r\n</ul>\r\n', '<div class="imgnote"><img alt="Thông số kỹ thuật Tủ lạnh Aqua 50 lít AQR-55AR" class="lazy" src="https://cdn.tgdd.vn/Products/Images/1943/72686/Kit/tu-lanh-aqua-aqr-55ar.jpg" style="display:block; height:548px; opacity:1; width:730px" /></div>\r\n\r\n<div class="box-article">\r\n<h3>Thiết kế tủ lạnh gọn g&agrave;ng m&agrave; hiện đại</h3>\r\n\r\n<p>Sở hữu thiết kế nhỏ gọn c&ugrave;ng gam m&agrave;u đẹp mắt, <a href="https://www.dienmayxanh.com/tu-lanh/aqua-aqr-55ar" target="_blank" title="tủ lạnh Aqua AQR-55AR">tủ lạnh Aqua AQR-55AR</a> hứa hẹn sẽ đem đến g&oacute;c nh&igrave;n đẹp mắt cho nội thất ph&ograve;ng bạn. Với dung t&iacute;ch <a href="https://www.dienmayxanh.com/tu-lanh?g=duoi-150-lit" target="_blank" title="50 lít">50 l&iacute;t</a>, chiếc <a href="https://www.dienmayxanh.com/tu-lanh-aqua-sanyo" target="_blank" title="tủ lạnh Aqua">tủ lạnh Aqua</a> n&agrave;y sẽ rất ph&ugrave; hợp với những người độc th&acirc;n, đang ở trọ, đặt trong ph&ograve;ng ngủ hay ph&ograve;ng l&agrave;m việc c&aacute; nh&acirc;n.</p>\r\n<img alt="Sở hữu thiết kế nhỏ gọn cùng gam màu đẹp mắt, tủ lạnh Aqua AQR-55AR hứa hẹn sẽ đem đến góc nhìn đẹp mắt cho nội thất phòng bạn" class="lazy" src="https://cdn.dmx.vn/Products/Images/1943/72686/tu-lanh-aqua-aqr-55ar-sg1.jpg" style="display:block; opacity:1" title="Sở hữu thiết kế nhỏ gọn cùng gam màu đẹp mắt, tủ lạnh Aqua AQR-55AR hứa hẹn sẽ đem đến góc nhìn đẹp mắt cho nội thất phòng bạn" />\r\n<h3>L&agrave;m lạnh nhanh ch&oacute;ng</h3>\r\n\r\n<p>Với c&ocirc;ng nghệ l&agrave;m lạnh trực tiếp, tủ lạnh Aqua AQR-55AR sẽ l&agrave;m lạnh nhanh ch&oacute;ng, gi&uacute;p thực phẩm tươi ngon v&agrave; giữ được nguy&ecirc;n vị.</p>\r\n<img alt="Với công nghệ làm lạnh trực tiếp, tủ lạnh Aqua AQR-55AR sẽ làm lạnh nhanh chóng, giúp thực phẩm tươi ngon và giữ được nguyên vị" class="lazy" src="https://cdn.dmx.vn/Products/Images/1943/72686/tu-lanh-aqua-aqr-55ar-sg2.jpg" style="display:block; opacity:1" title="Với công nghệ làm lạnh trực tiếp, tủ lạnh Aqua AQR-55AR sẽ làm lạnh nhanh chóng, giúp thực phẩm tươi ngon và giữ được nguyên vị" />\r\n<h3>Tiết kiệm điện</h3>\r\n\r\n<p>Do c&oacute; dung t&iacute;ch nhỏ n&ecirc;n tủ lạnh Aqua AQR-55AR ti&ecirc;u thụ kh&aacute; &iacute;t điện năng v&agrave; cho khả năng tiết kiệm điện năng cao, gi&uacute;p người d&ugrave;ng tiết kiệm được khoản tiền nho nhỏ cho những việc kh&aacute;c trong nh&agrave;. Chiếc <a href="https://www.dienmayxanh.com/tu-lanh" target="_blank" title="tủ lạnh">tủ lạnh</a> n&agrave;y trung b&igrave;nh chỉ ti&ecirc;u thụ khoảng 0.6 kW điện mỗi ng&agrave;y.</p>\r\n<img alt="Công nghệ tiết kiệm điện" class="lazy" src="https://cdn.dmx.vn/Products/Images/1943/72686/tu-lanh-aqua-aqr-55ar-sg2-1-1.jpg" style="display:block; opacity:1" title="Công nghệ tiết kiệm điện" /></div>\r\n', '6f2f508459f03180cc970d7ad2ac11e4.jpeg', 'Tu-Lanh-Aqua-50-Lit-Aqr-55Ar', 'Tu-Lanh-Aqua-50-Lit-Aqr-55Ar', 1, 13, NULL, '2017-01-24 08:32:14', NULL),
(7, 'Tủ lạnh Aqua 90 lít AQR-95AR', 2990000, 10, 10, '<ul>\r\n	<li>90 l&iacute;t</li>\r\n	<li>Tủ lạnh thường</li>\r\n	<li>Điện năng ti&ecirc;u thụ ~ 0.8 kW/ng&agrave;y</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>K&iacute;ch thước nhỏ gọn ph&ugrave; hợp cho người độc th&acirc;n hay gia đ&igrave;nh nhỏ.</li>\r\n	<li>Tiết kiệm điện năng tối ưu cho cả gia đ&igrave;nh bạn.</li>\r\n	<li>Vận h&agrave;nh &ecirc;m &aacute;i, kh&ocirc;ng g&acirc;y tiếng động kh&oacute; chịu.</li>\r\n</ul>\r\n', '<div class="imgnote"><img alt="Thông số kỹ thuật Tủ lạnh Aqua 90 lít AQR-95AR" class="lazy" src="https://cdn.tgdd.vn/Products/Images/1943/70539/Kit/tu-lanh-aqua-aqr-95ar-1.jpg" style="display:block; height:548px; opacity:1; width:730px" /></div>\r\n', 'a29860bc44285d7fc72a64b18cd50c72.jpeg', 'Tu-Lanh-Aqua-90-Lit-Aqr-95Ar', 'Tu-Lanh-Aqua-90-Lit-Aqr-95Ar', 1, 13, NULL, '2017-01-24 08:34:57', NULL),
(8, 'Tủ lạnh Aqua 130 lít AQR-145AN', 4490000, 5, 12, '<ul>\r\n	<li>130 l&iacute;t</li>\r\n	<li>Tủ lạnh thường</li>\r\n	<li>Điện năng ti&ecirc;u thụ ~ 1.3 kW/ng&agrave;y</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Chức năng diệt khuẩn v&agrave; khử m&ugrave;i Nano Fresh Ag+ gi&uacute;p thực phẩm lu&ocirc;n tươi ngon.</li>\r\n	<li>Đ&egrave;n LED chiếu s&aacute;ng tiết kiệm điện năng.</li>\r\n	<li>Khay trong suốt dễ ch&ugrave;i rửa, c&oacute; thể di chuyển được.</li>\r\n</ul>\r\n', '<div class="imgnote"><img alt="Thông số kỹ thuật Tủ lạnh Aqua 130 lít AQR-145AN" class="lazy" src="https://cdn.tgdd.vn/Products/Images/1943/72801/Kit/tu-lanh-aqua-aqr-145an-2.jpg" style="display:block; height:548px; opacity:1; width:730px" /></div>\r\n\r\n<div class="box-article">\r\n<h3>Thiết kế nhỏ gọn, thanh lịch</h3>\r\n\r\n<p><a href="https://www.dienmayxanh.com/tu-lanh/aqua-aqr-145an" target="_blank" title="Tủ lạnh Aqua AQR-145AN 130 lít">Tủ lạnh Aqua AQR-145AN 130 l&iacute;t</a> được thiết kế &nbsp;với k&iacute;ch thước nhỏ gọn dễ d&agrave;ng bố tr&iacute; ở mọi kh&ocirc;ng gian. Tủ lạnh c&oacute;&nbsp;<a href="https://www.dienmayxanh.com/tu-lanh?g=ngan-da-tren" target="_blank" title="dung tích 130 lít">dung t&iacute;ch 130 l&iacute;t</a>&nbsp;ph&ugrave; hợp với gia đ&igrave;nh &iacute;t người (1-3 th&agrave;nh vi&ecirc;n).</p>\r\n<img alt="Tủ lạnh Aqua AQR-145AN 130 lít" class="lazy" src="https://cdn.dmx.vn/Products/Images/1943/72801/aqua-aqr-145an-nkk-10-11.jpg" style="display:block; opacity:1" title="Tủ lạnh Aqua AQR-145AN 130 lít" />\r\n<h3>C&ocirc;ng nghệ Nano Fresh Ag+ gi&uacute;p khử m&ugrave;i hiệu quả</h3>\r\n\r\n<p><a href="https://www.dienmayxanh.com/tu-lanh?g=ngan-da-tren" target="_blank" title="Tủ lạnh">Tủ lạnh</a> được trang bị c&ocirc;ng nghệ Nano Fresh Ag+, l&agrave; c&ocirc;ng nghệ cho ph&eacute;p ph&acirc;n t&aacute;ch c&aacute;c ph&acirc;n tử bạc th&agrave;nh c&aacute;c k&iacute;ch thước si&ecirc;u nhỏ, l&agrave;m tăng diện t&iacute;ch tiếp x&uacute;c bề mặt của bạc trong m&ocirc;i trường, gi&uacute;p diệt khuẩn v&agrave; khử m&ugrave;i tốt. Nhờ vậy, thực phẩm lu&ocirc;n được bảo quản tươi ngon.</p>\r\n<img alt="Công nghệ Nano Fresh Ag+ giúp khử mùi hiệu quả" class="lazy" src="https://cdn.dmx.vn/Products/Images/1943/72801/aqua-aqr-145an-nkk-10-12.jpg" style="display:block; opacity:1" title="Công nghệ Nano Fresh Ag+ giúp khử mùi hiệu quả" />\r\n<h3>Đ&egrave;n LED chiếu s&aacute;ng th&ocirc;ng minh</h3>\r\n\r\n<p>Tủ lạnh sử dụng đ&egrave;n Led để chiếu s&aacute;ng cho ngăn m&aacute;t, tiết kiệm điện v&agrave; bền hơn so với đ&egrave;n d&acirc;y t&oacute;c.</p>\r\n\r\n<p><img alt="Đèn LED chiếu sáng thông minh" class="lazy" src="https://cdn.dmx.vn/Products/Images/1943/72801/aqua-aqr-145an-nkk-10-14.jpg" style="display:block; opacity:1" title="Đèn LED chiếu sáng thông minh" /></p>\r\n\r\n<h3>Ti&ecirc;u thụ điện</h3>\r\n\r\n<p>Aqua AQR-145AN kh&ocirc;ng phải l&agrave; một chiếc tủ lạnh được đ&aacute;nh gi&aacute; cao về khả năng tiết kiệm điện, tuy nhi&ecirc;n với dung t&iacute;ch nhỏ của m&igrave;nh, mỗi ng&agrave;y chiếc tủ lạnh n&agrave;y chỉ ti&ecirc;u tốn khoảng 1,3 kW điện.</p>\r\n<img alt="Tiêu thụ điện" class="lazy" src="https://cdn.dmx.vn/Products/Images/1943/72801/aqua-aqr-145an-nkk-10-13.jpg" style="display:block; opacity:1" title="Tiêu thụ điện" /></div>\r\n', '91bf92259e2b757fd8641cf33b0ff209.jpeg', 'Tu-Lanh-Aqua-130-Lit-Aqr-145An', 'Tu-Lanh-Aqua-130-Lit-Aqr-145An', 1, 13, NULL, '2017-01-24 08:38:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `images`, `product_id`, `size`, `created_at`, `updated_at`) VALUES
(1, '678b13d949724bf80bb894326fec7490.jpeg', 3, 0, NULL, NULL),
(3, 'f6f8d05d4ce6672d24e85178f119452c.jpeg', 3, 0, NULL, NULL),
(10, '2772a11a250514e0989951c5637797a8.jpeg', 3, 68756, NULL, NULL),
(11, 'f0c81617f4b1ba99e3c59cf25fb044d8.jpeg', 4, 46116, NULL, NULL),
(12, '2772a11a250514e0989951c5637797a8.jpeg', 4, 68756, NULL, NULL),
(13, '11b848d072fa7c79ee8d8fb37024d185.jpeg', 4, 41704, NULL, NULL),
(14, 'c42d1591513923c80acc6d65f5df2e2b.jpeg', 5, 41922, NULL, NULL),
(16, '75d2f9a210a9d907a98553ba5fe02882.jpeg', 5, 35709, NULL, NULL),
(17, '055e44095c59237d4036e1fbb1a26165.jpeg', 6, 121953, NULL, NULL),
(18, '56620d16f1ab824304b44706d0d36d64.jpeg', 6, 130128, NULL, NULL),
(19, 'd0f2a4e47cd5182a4715ade4d0e0cd7c.jpeg', 6, 140862, NULL, NULL),
(20, '31cbf832e53cb2a44d1dd166b16f62c0.jpeg', 6, 116042, NULL, NULL),
(21, 'ad3af33d72494ecbe6f2a36e1b3db0c1.jpeg', 7, 183045, NULL, NULL),
(22, '0aec70181f4b22b478ace7273bba2611.jpeg', 7, 177967, NULL, NULL),
(23, 'f6192a81350d1adba0f245e153dc510f.jpeg', 7, 158436, NULL, NULL),
(24, '3f67c63a689bbfa7456282c26b88ad0d.jpeg', 7, 96740, NULL, NULL),
(25, 'eb5b505bae762054ee4017ac82b5e562.jpeg', 7, 120419, NULL, NULL),
(26, 'f293ecca5dfd2e51dcc85f600fe9e1db.jpeg', 8, 123942, NULL, NULL),
(27, '3acc8b77ad06086b84826269695e02ed.jpeg', 8, 121947, NULL, NULL),
(28, '58b6abd98a5c20f12f6a44cc87700abd.jpeg', 8, 122279, NULL, NULL),
(29, '121ea8e3350e0165fdfef276dbe3c576.jpeg', 8, 147199, NULL, NULL),
(30, 'e0087fc69f5e5a9860ca710850beef9d.png', 9, 313638, NULL, NULL),
(31, '5952771cfe4fb4386dd0168643167157.png', 9, 299833, NULL, NULL),
(32, '35c2de6947008d37e45f59eee4fc9d45.png', 9, 254609, NULL, NULL),
(33, '65be8439d6646819ec084b949113fc58.png', 9, 307618, NULL, NULL),
(34, '1a2289293cd0b3325782bcf31dc42570.png', 9, 365226, NULL, NULL),
(35, '74f68448694f2b300f88a01e1cc15639.png', 9, 354986, NULL, NULL),
(36, 'c6094139de60cabbe5d7b52f7cfcbd2e.png', 9, 911253, NULL, NULL),
(37, 'b33624436101e0a6dcf289c03a6a0d25.png', 9, 659409, NULL, NULL),
(38, 'f72ad68fca5a954d4d0d3c2c1659de65.png', 9, 424606, NULL, NULL),
(39, '1a2289293cd0b3325782bcf31dc42570.png', 5, 365226, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(12) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT  '0000-00-00 00:00:00' 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `image`, `title`, `content`, `created_at`) VALUES
(1, '877fdc47b38d41c2d01bc7454381b122.jpeg', 'TAI NGHE BLUETOOTH PLANTRONICS ML15', '<p>Thiết kế nhỏ gọn đơn giản c&ugrave;ng nhiều tiện &iacute;ch l&agrave; những g&igrave; tai nghe bluetooth Plantronics ML15 mang đến cho bạn, ngay từ b&acirc;y giờ h&atilde;y nhanh ch&oacute;ng đặt h&agrave;ng online ngay để được giảm gi&aacute; trực tiếp l&ecirc;n đến 100.000đ.</p>\r\n\r\n<p>Giảm ngay 100.000 khi đặt mua Online tai nghe Bluetooth</p>\r\n\r\n<p>Những tiện &iacute;ch của tai nghe:<br />\r\n- C&oacute; thể kết nối 2 thiết bị c&ugrave;ng l&uacute;c.</p>\r\n\r\n<p>- Khoảng c&aacute;ch truyền t&iacute;n hiệu l&ecirc;n đến 10 m.</p>\r\n\r\n<p>- Kết nối nhanh ch&oacute;ng với thiết bị.</p>\r\n\r\n<p>- Thời gian thoại l&ecirc;n đến 6 giờ.</p>\r\n\r\n<p>- Lưu &yacute;: chỉ hỗ trợ nghe gọi, kh&ocirc;ng hỗ trợ nghe nhạc.</p>\r\n\r\n<p>Thời gian diễn ra chương tr&igrave;nh: từ 1/2/2016 đến 15/2/2016<br />\r\nGiảm gi&aacute; ưu đ&atilde;i đ&oacute;n tết:<br />\r\n- Khi bạn đặt mua online tai nghe bluetooth Plantronics ML15 sẽ được giảm ngay 100.000đ, gi&aacute; c&ograve;n lại l&agrave; 590.000đ.</p>\r\n\r\n<p>- Đặt mua bằng hai c&aacute;ch, gọi đến tổng đ&agrave;i 1800.1060 (miễn ph&iacute;), hoặc đặt h&agrave;ng trực tiếp tr&ecirc;n website TheShop.com.</p>\r\n', '2017-01-22 03:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT  '0000-00-00 00:00:00' ,
  `update_at` timestamp NOT NULL DEFAULT  '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `position`, `created_at`, `update_at`) VALUES
(1, 'Ảnh slide giới thiệu giáng sinh', 'slideshow_1.jpg', '1', '2017-01-20 10:47:48', '0000-00-00 00:00:00'),
(2, 'Ảnh slide mang rạp phim về nhà', 'slideshow_2.jpg', '1', '2017-01-20 10:48:06', '0000-00-00 00:00:00'),
(4, 'Điện lạnh', 'bb944fa0f7dfc9e38fec39b3bb2363eb.jpeg', '2', '2017-01-21 15:48:43', '2017-01-21 15:48:43'),
(5, 'Ảnh đầu', 'bb944fa0f7dfc9e38fec39b3bb2363eb.jpeg', '3', '2017-01-21 15:56:33', '2017-01-21 15:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT  '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT  '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Tân Nguyễn', 'Phú Ninh Quảng Nam', 'tannguyenit95@hotmail.com', '$2y$10$ThzJ/cUZbdofPS4JAfiJzeFSDPc9GRvySsWvV9xLl2NkB6.JeKRD2', '22c7k55HWlxMvK7QIX4i14nlu1I9oyBAE9HjfQ6H', '2017-01-19 07:20:00', '2017-01-19 07:33:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
