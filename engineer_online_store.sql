-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 06:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `engineer_mogasaclothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_nama` varchar(250) NOT NULL,
  `bank_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_nama`, `bank_id`) VALUES
('BANK BRI', 2),
('BANK EKSPOR INDONESIA', 3),
('BANK MANDIRI', 8),
('BANK BNI', 9),
('BANK DANAMON', 11),
('PERMATA BANK', 13),
('BANK BCA', 14),
('BANK BII', 16),
('BANK PANIN', 19),
('BANK ARTA NIAGA KENCANA', 20),
('BANK NIAGA', 22),
('BANK BUANA IND', 23),
('BANK LIPPO', 26),
('BANK NISP', 28),
('AMERICAN EXPRESS BANK LTD', 30),
('CITIBANK N.A.', 31),
('JP. MORGAN CHASE BANK, N.A.', 32),
('BANK OF AMERICA, N.A', 33),
('ING INDONESIA BANK', 34),
('BANK MULTICOR TBK.', 36),
('BANK ARTHA GRAHA', 37),
('BANK CREDIT AGRICOLE INDOSUEZ', 39),
('THE BANGKOK BANK COMP. LTD', 40),
('THE HONGKONG & SHANGHAI B.C.', 41),
('THE BANK OF TOKYO MITSUBISHI UFJ LTD', 42),
('BANK SUMITOMO MITSUI INDONESIA', 45),
('BANK DBS INDONESIA', 46),
('BANK RESONA PERDANIA', 47),
('BANK MIZUHO INDONESIA', 48),
('STANDARD CHARTERED BANK', 50),
('BANK ABN AMRO', 52),
('BANK KEPPEL TATLEE BUANA', 53),
('BANK CAPITAL INDONESIA, TBK.', 54),
('BANK BNP PARIBAS INDONESIA', 57),
('BANK UOB INDONESIA', 58),
('KOREA EXCHANGE BANK DANAMON', 59),
('RABOBANK INTERNASIONAL INDONESIA', 60),
('ANZ PANIN BANK', 61),
('DEUTSCHE BANK AG.', 67),
('BANK WOORI INDONESIA', 68),
('BANK OF CHINA LIMITED', 69),
('BANK BUMI ARTA', 76),
('BANK EKONOMI', 87),
('BANK ANTARDAERAH', 88),
('BANK HAGA', 89),
('BANK IFI', 93),
('BANK CENTURY, TBK.', 95),
('BANK MAYAPADA', 97),
('BANK JABAR', 110),
('BANK DKI', 111),
('BPD DIY', 112),
('BANK JATENG', 113),
('BANK JATIM', 114),
('BPD JAMBI', 115),
('BPD ACEH', 116),
('BANK SUMUT', 117),
('BANK NAGARI', 118),
('BANK RIAU', 119),
('BANK SUMSEL', 120),
('BANK LAMPUNG', 121),
('BPD KALSEL', 122),
('BPD KALIMANTAN BARAT', 123),
('BPD KALTIM', 124),
('BPD KALTENG', 125),
('BPD SULSEL', 126),
('BANK SULUT', 127),
('BPD NTB', 128),
('BPD BALI', 129),
('BANK NTT', 130),
('BANK MALUKU', 131),
('BPD PAPUA', 132),
('BANK BENGKULU', 133),
('BPD SULAWESI TENGAH', 134),
('BANK SULTRA', 135),
('BANK NUSANTARA PARAHYANGAN', 145),
('BANK SWADESI', 146),
('BANK MUAMALAT', 147),
('BANK MESTIKA', 151),
('BANK METRO EXPRESS', 152),
('BANK SHINTA INDONESIA', 153),
('BANK MASPION', 157),
('BANK HAGAKITA', 159),
('BANK GANESHA', 161),
('BANK WINDU KENTJANA', 162),
('HALIM INDONESIA BANK', 164),
('BANK HARMONI INTERNATIONAL', 166),
('BANK KESAWAN', 167),
('BANK TABUNGAN NEGARA (PERSERO)', 200),
('BANK HIMPUNAN SAUDARA 1906, TBK .', 212),
('BANK TABUNGAN PENSIUNAN NASIONAL', 213),
('BANK SWAGUNA', 405),
('BANK JASA ARTA', 422),
('BANK MEGA', 426),
('BANK JASA JAKARTA', 427),
('BANK BUKOPIN', 441),
('BANK SYARIAH MANDIRI', 451),
('BANK BISNIS INTERNASIONAL', 459),
('BANK SRI PARTHA', 466),
('BANK JASA JAKARTA', 472),
('BANK BINTANG MANUNGGAL', 484),
('BANK BUMIPUTERA', 485),
('BANK YUDHA BHAKTI', 490),
('BANK MITRANIAGA', 491),
('BANK AGRO NIAGA', 494),
('BANK INDOMONEX', 498),
('BANK ROYAL INDONESIA', 501),
('BANK ALFINDO', 503),
('BANK SYARIAH MEGA', 506),
('BANK INA PERDANA', 513),
('BANK HARFA', 517),
('PRIMA MASTER BANK', 520),
('BANK PERSYARIKATAN INDONESIA', 521),
('BANK AKITA', 525),
('LIMAN INTERNATIONAL BANK', 526),
('ANGLOMAS INTERNASIONAL BANK', 531),
('BANK DIPO INTERNATIONAL', 523),
('BANK KESEJAHTERAAN EKONOMI', 535),
('BANK UIB', 536),
('BANK ARTOS IND', 542),
('BANK PURBA DANARTA', 547),
('BANK MULTI ARTA SENTOSA', 548),
('BANK MAYORA', 553),
('BANK INDEX SELINDO', 555),
('BANK VICTORIA INTERNATIONAL', 566),
('BANK EKSEKUTIF', 558),
('CENTRATAMA NASIONAL BANK', 559),
('BANK FAMA INTERNASIONAL', 562),
('BANK SINAR HARAPAN BALI', 564),
('BANK HARDA', 567),
('BANK FINCONESIA', 945),
('BANK MERINCORP', 946),
('BANK MAYBANK INDOCORP', 947),
('BANK OCBC – INDONESIA', 948),
('BANK CHINA TRUST INDONESIA', 949),
('BANK COMMONWEALTH', 950);

-- --------------------------------------------------------

--
-- Table structure for table `bank_method`
--

CREATE TABLE `bank_method` (
  `id` int(11) NOT NULL,
  `jenis_bank` varchar(200) NOT NULL,
  `atas_nama` varchar(200) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_method`
--

INSERT INTO `bank_method` (`id`, `jenis_bank`, `atas_nama`, `no_rekening`, `status`) VALUES
(4, 'BCA', 'Lambok Santo Alfonsius ', '3462659439', 1),
(5, 'BNI', 'Lambok Santo Alfonsius', '0972105735', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_setting`
--

CREATE TABLE `banner_setting` (
  `bann_id` int(11) NOT NULL,
  `bann_menu_id` int(11) NOT NULL,
  `bann_name` varchar(50) NOT NULL,
  `bann_image` varchar(100) NOT NULL,
  `bann_description` text NOT NULL,
  `bann_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_setting`
--

INSERT INTO `banner_setting` (`bann_id`, `bann_menu_id`, `bann_name`, `bann_image`, `bann_description`, `bann_status`, `created_at`, `updated_at`) VALUES
(1, 26, 'Home', '1610706196banner.png', 'Home page', 0, '2020-12-27 06:47:45', '2021-03-04 16:45:52'),
(2, 47, 'Produk', '1613372789footer-ini.png', 'Product Page Banner', 1, '2021-01-06 00:30:42', '2021-02-15 07:06:29'),
(3, 48, 'Tentang Mogasacloth', '1613372815footer-ini.png', '-', 1, '2021-01-15 03:35:47', '2021-02-15 07:06:55'),
(4, 49, 'Cara Memesan', '1613372664footer-ini.png', '-', 1, '2021-01-15 03:36:41', '2021-02-15 07:04:24'),
(5, 57, 'Produk Sablon', '1613372830footer-ini.png', 'Produk Costum', 1, '2021-02-11 09:51:27', '2021-02-17 08:29:35'),
(6, 60, 'Tutorial', '16136133151613372830footer-ini.png', '-', 1, '2021-02-18 01:55:15', '2021-02-18 01:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `bolg_user_id` int(11) NOT NULL,
  `blog_cate_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_thumbnal` varchar(100) NOT NULL,
  `blog_view` int(11) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_status` tinyint(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `bolg_user_id`, `blog_cate_id`, `blog_title`, `blog_thumbnal`, `blog_view`, `blog_content`, `blog_status`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 'Mogasacloth', '16136204451609057730slide-01.jpg', 31, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2021-07-18 14:15:37', '2021-02-18 03:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `cart_total_price` int(11) NOT NULL,
  `cart_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_user_id`, `cart_total_price`, `cart_status`, `created_at`, `updated_at`) VALUES
(63, 71, 0, 1, '2021-02-26 12:02:14', '2021-02-26 12:02:14'),
(64, 1, 99000, 0, '2021-02-27 06:08:54', '2021-03-03 04:47:56'),
(65, 72, 0, 1, '2021-02-27 14:00:19', '2021-02-27 14:00:19'),
(66, 1, 33000, 0, '2021-03-03 06:14:41', '2021-03-03 06:15:49'),
(67, 1, 33000, 0, '2021-03-05 19:06:33', '2021-03-05 19:11:24'),
(68, 1, 65000, 0, '2021-03-06 05:58:31', '2021-03-06 05:59:47'),
(69, 1, 33000, 0, '2021-03-06 06:41:16', '2021-03-06 06:44:12'),
(70, 1, 65000, 0, '2021-03-07 21:00:47', '2021-03-07 21:04:05'),
(71, 1, 33000, 0, '2021-03-09 07:37:04', '2021-03-09 07:37:54'),
(72, 1, 66000, 0, '2021-03-09 07:45:36', '2021-03-09 14:49:18'),
(73, 1, 33000, 0, '2021-03-16 10:08:05', '2021-03-16 10:13:29'),
(74, 1, 33000, 0, '2021-03-16 10:14:17', '2021-03-16 10:15:17'),
(75, 39153, 66000, 0, '2021-03-22 23:10:56', '2021-03-23 14:15:26'),
(76, 22337, 33000, 0, '2021-04-18 04:48:21', '2021-04-18 04:49:33'),
(77, 22337, 0, 1, '2021-04-18 04:50:09', '2021-04-18 04:50:09'),
(78, 12936, 0, 1, '2021-06-26 00:51:24', '2021-06-26 00:51:24'),
(79, 44216, 0, 1, '2021-07-15 16:34:04', '2021-07-15 16:34:04'),
(80, 48184, 33000, 0, '2021-07-21 08:29:30', '2021-07-21 08:30:35'),
(81, 48184, 0, 1, '2021-07-21 08:31:32', '2021-07-21 08:31:32'),
(82, 1, 132000, 0, '2021-07-21 17:12:26', '2021-07-21 17:22:51'),
(83, 83, 33000, 0, '2021-07-24 16:30:42', '2021-07-26 16:22:52'),
(84, 83, 0, 1, '2021-07-26 16:37:25', '2021-07-26 16:37:25'),
(85, 86, 33000, 0, '2021-07-29 10:13:30', '2021-07-29 14:56:38'),
(86, 87, 99000, 0, '2021-07-30 06:56:05', '2021-07-30 08:18:34'),
(87, 88, 66000, 0, '2021-08-04 07:17:15', '2021-08-04 07:21:14'),
(88, 88, 33000, 0, '2021-08-05 07:35:49', '2021-08-05 07:37:10'),
(89, 88, 33000, 0, '2021-08-06 06:33:05', '2021-08-06 06:33:45'),
(90, 88, 165000, 0, '2021-08-07 18:05:19', '2021-08-15 04:19:38'),
(91, 1, 0, 1, '2021-08-07 18:32:25', '2021-08-07 18:32:25'),
(92, 88, 66000, 0, '2021-08-24 17:10:45', '2021-08-24 17:11:59'),
(93, 88, 0, 1, '2021-08-28 07:09:24', '2021-08-28 07:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `card_id` int(11) NOT NULL,
  `card_cart_id` int(11) NOT NULL,
  `card_prod_id` int(11) NOT NULL,
  `cart_size_id` int(11) NOT NULL,
  `cart_color_id` int(11) NOT NULL,
  `card_price` int(11) NOT NULL,
  `card_qty` int(11) NOT NULL,
  `card_total_price` int(11) NOT NULL,
  `card_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`card_id`, `card_cart_id`, `card_prod_id`, `cart_size_id`, `cart_color_id`, `card_price`, `card_qty`, `card_total_price`, `card_status`, `created_at`, `updated_at`) VALUES
(125, 63, 27, 4, 1, 57000, 1, 57000, 1, '2021-02-26 12:02:14', '2021-02-26 12:02:14'),
(126, 64, 15, 6, 1, 33000, 1, 33000, 1, '2021-02-27 06:08:54', '2021-02-27 06:08:54'),
(127, 65, 26, 4, 1, 33000, 1, 33000, 1, '2021-02-27 14:00:19', '2021-02-27 14:00:19'),
(128, 64, 14, 4, 1, 33000, 2, 66000, 1, '2021-03-03 04:25:25', '2021-03-03 04:42:39'),
(129, 66, 25, 4, 1, 33000, 1, 33000, 1, '2021-03-03 06:14:41', '2021-03-03 06:14:41'),
(130, 67, 26, 4, 1, 33000, 1, 33000, 1, '2021-03-05 19:06:33', '2021-03-05 19:06:33'),
(131, 68, 27, 4, 1, 65000, 1, 65000, 1, '2021-03-06 05:58:31', '2021-03-06 05:58:31'),
(132, 69, 26, 4, 1, 33000, 1, 33000, 1, '2021-03-06 06:41:16', '2021-03-06 06:41:16'),
(133, 70, 27, 4, 1, 65000, 1, 65000, 1, '2021-03-07 21:00:47', '2021-03-07 21:00:47'),
(134, 71, 26, 4, 1, 33000, 1, 33000, 1, '2021-03-09 07:37:04', '2021-03-09 07:37:04'),
(135, 72, 15, 4, 1, 33000, 1, 33000, 1, '2021-03-09 07:45:36', '2021-03-09 14:47:18'),
(136, 72, 16, 4, 1, 33000, 1, 33000, 1, '2021-03-09 07:53:18', '2021-03-09 14:47:18'),
(137, 73, 33, 4, 1, 33000, 1, 33000, 1, '2021-03-16 10:08:05', '2021-03-16 10:08:05'),
(138, 74, 16, 4, 1, 33000, 1, 33000, 1, '2021-03-16 10:14:17', '2021-03-16 10:14:17'),
(139, 75, 34, 4, 1, 33000, 1, 33000, 1, '2021-03-22 23:10:56', '2021-03-22 23:10:56'),
(140, 75, 33, 4, 1, 33000, 1, 33000, 1, '2021-03-23 14:13:43', '2021-03-23 14:13:43'),
(141, 76, 14, 4, 1, 33000, 1, 33000, 1, '2021-04-18 04:48:21', '2021-04-18 04:48:21'),
(142, 77, 14, 4, 1, 33000, 1, 33000, 1, '2021-04-18 04:50:09', '2021-04-18 04:50:09'),
(143, 77, 26, 4, 1, 33000, 4, 132000, 1, '2021-04-18 04:53:46', '2021-04-18 04:53:46'),
(144, 78, 31, 10, 1, 33000, 2, 66000, 1, '2021-06-26 00:51:24', '2021-06-26 00:52:40'),
(145, 79, 26, 4, 1, 33000, 5, 165000, 1, '2021-07-15 16:34:04', '2021-07-15 16:34:18'),
(146, 80, 12, 4, 1, 33000, 1, 33000, 1, '2021-07-21 08:29:30', '2021-07-21 08:29:30'),
(147, 81, 14, 4, 1, 33000, 1, 33000, 1, '2021-07-21 08:31:32', '2021-07-21 08:31:32'),
(148, 82, 12, 4, 1, 33000, 2, 66000, 1, '2021-07-21 17:12:26', '2021-07-21 17:12:36'),
(149, 82, 14, 10, 1, 33000, 1, 33000, 1, '2021-07-21 17:13:51', '2021-07-21 17:13:51'),
(150, 82, 15, 4, 1, 33000, 1, 33000, 1, '2021-07-21 17:16:39', '2021-07-21 17:16:39'),
(151, 83, 12, 4, 1, 33000, 1, 33000, 1, '2021-07-24 16:30:42', '2021-07-24 16:30:42'),
(152, 84, 12, 4, 1, 33000, 1, 33000, 1, '2021-07-26 16:37:25', '2021-07-26 16:37:25'),
(154, 85, 12, 4, 1, 33000, 1, 33000, 1, '2021-07-29 11:28:05', '2021-07-29 11:28:05'),
(155, 86, 12, 4, 1, 33000, 2, 66000, 1, '2021-07-30 06:56:05', '2021-07-30 07:20:57'),
(156, 86, 14, 8, 1, 33000, 1, 33000, 1, '2021-07-30 06:56:39', '2021-07-30 06:56:39'),
(157, 87, 35, 8, 1, 33000, 2, 66000, 1, '2021-08-04 07:17:15', '2021-08-04 07:17:58'),
(158, 88, 35, 11, 1, 33000, 1, 33000, 1, '2021-08-05 07:35:49', '2021-08-05 07:35:49'),
(159, 89, 35, 4, 1, 33000, 1, 33000, 1, '2021-08-06 06:33:05', '2021-08-06 06:33:05'),
(160, 90, 20, 7, 1, 33000, 1, 33000, 1, '2021-08-07 18:05:19', '2021-08-07 18:05:19'),
(161, 90, 38, 14, 1, 66000, 2, 132000, 1, '2021-08-07 18:09:39', '2021-08-12 22:54:25'),
(162, 91, 33, 4, 1, 33000, 1, 33000, 1, '2021-08-07 18:32:25', '2021-08-07 18:32:25'),
(163, 92, 38, 14, 1, 66000, 1, 66000, 1, '2021-08-24 17:10:45', '2021-08-24 17:10:45'),
(164, 93, 16, 4, 1, 33000, 1, 33000, 1, '2021-08-28 07:09:24', '2021-08-28 07:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) NOT NULL,
  `cate_parent` int(11) NOT NULL,
  `cate_url` varchar(100) NOT NULL,
  `cate_keywords` varchar(100) NOT NULL,
  `cate_banner` varchar(100) NOT NULL,
  `cate_description` text NOT NULL,
  `cate_image` varchar(250) NOT NULL,
  `cate_upload_by` varchar(250) NOT NULL,
  `cate_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_parent`, `cate_url`, `cate_keywords`, `cate_banner`, `cate_description`, `cate_image`, `cate_upload_by`, `cate_status`, `created_at`, `updated_at`) VALUES
(9, 'Sablon Satuan', 0, 'kaos-sablon', '-', '', '-', '1615402518DSCF1840.jpg', '1', 1, '2021-02-11 10:14:33', '2021-07-29 04:44:16'),
(10, 'Kaos Polos', 0, 'kaos-polos', '-', '', '-', '1613973859DSCF1885.jpg', '1', 1, '2021-02-11 10:14:48', '2021-07-27 14:17:24'),
(11, 'Kaos Batak Apparel Themes', 0, 'kaos-batak', '-', '', '-', 'Kaos Batak Apparel Themes.jpg', '1', 1, '2021-02-18 14:35:35', '2021-07-27 14:19:28'),
(12, 'Sarung Pantai Ulos / Selendang Motif Ulos', 0, 'Sarung Pantai Ulos', 'Sarung Pantai Ulos', '', 'Sarung Pantai Ulos', 'Ulos_Ragi_Hotang.jpg', '1', 1, '2021-02-27 00:19:58', '2021-07-27 14:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `check_id` int(11) NOT NULL,
  `check_code` varchar(20) NOT NULL,
  `check_invoice` varchar(20) NOT NULL,
  `check_resi` varchar(50) NOT NULL,
  `check_user_id` int(11) NOT NULL,
  `check_name` varchar(200) NOT NULL,
  `check_phone` varchar(20) NOT NULL,
  `check_email` varchar(200) NOT NULL,
  `check_cart_id` int(11) NOT NULL,
  `check_total` int(11) NOT NULL,
  `check_description` text NOT NULL,
  `check_status_value` varchar(50) NOT NULL,
  `check_status_code` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`check_id`, `check_code`, `check_invoice`, `check_resi`, `check_user_id`, `check_name`, `check_phone`, `check_email`, `check_cart_id`, `check_total`, `check_description`, `check_status_value`, `check_status_code`, `created_at`, `updated_at`) VALUES
(79, '16280616749455426', 'MGS-00202179', '1234567', 88, 'test', '', '', 87, 74000, 'Cibeunying Kidul, undefined, -1, -1', 'Sent', 1, '2021-08-04 07:21:14', '2021-08-12 22:42:46'),
(80, '16281490308282671', 'MGS-00202180', '11001100', 88, '', '', '', 88, 43000, 'Antapani (Cicadas), undefined, PHH.Mustofa, 40391', 'Sent', 1, '2021-08-05 07:37:10', '2021-08-12 22:36:21'),
(81, '16282316252514906', '', '1234567', 88, '', '', '', 89, 41000, 'Cibeunying Kidul, undefined, Jl.soekarno hatta, 40391', 'Sent', 0, '2021-08-06 06:33:45', '2021-08-24 17:30:27'),
(82, '16290011780821', '', '', 88, '', '', '', 90, 173000, 'Cibeunying Kidul, undefined, Jl.soekarno hatta, 40391', 'Pendding', 0, '2021-08-15 04:19:38', '2021-08-15 04:19:38'),
(83, '1629825119486398', '', '', 88, '', '', '', 92, 73000, 'Arcamanik, undefined, Jl.soekarno hatta, 40391', 'Pendding', 0, '2021-08-24 17:11:59', '2021-08-24 17:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_payment`
--

CREATE TABLE `checkout_payment` (
  `checp_id` int(11) NOT NULL,
  `checp_check_code` varchar(20) NOT NULL,
  `checp_type` varchar(20) NOT NULL,
  `checp_file` varchar(250) NOT NULL,
  `checp_account_number` varchar(20) NOT NULL,
  `checp_transaction_id` varchar(50) NOT NULL,
  `checp_order_id` varchar(15) NOT NULL,
  `checp_gross_amount` int(11) NOT NULL,
  `checp_payment_type` varchar(20) NOT NULL,
  `checp_transaction_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `checp_bank` varchar(50) NOT NULL,
  `checp_payment_code` varchar(20) NOT NULL,
  `checp_va_number` varchar(20) NOT NULL,
  `checp_fraud_status` varchar(20) NOT NULL,
  `checp_pdf_url` text NOT NULL,
  `checp_status_value` varchar(50) NOT NULL,
  `checp_status_code` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_payment`
--

INSERT INTO `checkout_payment` (`checp_id`, `checp_check_code`, `checp_type`, `checp_file`, `checp_account_number`, `checp_transaction_id`, `checp_order_id`, `checp_gross_amount`, `checp_payment_type`, `checp_transaction_time`, `checp_bank`, `checp_payment_code`, `checp_va_number`, `checp_fraud_status`, `checp_pdf_url`, `checp_status_value`, `checp_status_code`, `created_at`, `updated_at`) VALUES
(75, '16280616749455426', 'manual', '162806170621ae9fedcbe9ab3582ca4885f933c24d.jpg', '-1', '', '', 74000, 'ATM', '2021-08-04 07:21:15', 'BANK BRI', '', '', 'accept', '', 'Sent', 1, '2021-08-04 07:21:15', '2021-08-12 22:42:46'),
(76, '16281490308282671', 'manual', '16281494751366x768_big-sur-apple-4k-abstract.jpg', '', '', '', 43000, 'ATM', '2021-08-05 07:37:10', 'BANK NIAGA', '', '', 'accept', '', 'Sent', 1, '2021-08-05 07:37:10', '2021-08-12 22:36:21'),
(77, '16282316252514906', 'manual', '1628232471Mobile Apps.jpg', '', '', '', 41000, 'ATM', '2021-08-06 06:33:45', 'BANK BNI', '', '', 'accept', '', 'Sent', 0, '2021-08-06 06:33:45', '2021-08-24 17:30:27'),
(78, '16290011780821', 'manual', '1629006037-simbol-use-case.png', '', '', '', 173000, 'Mobile Banking', '2021-08-15 04:19:38', 'BANK BRI', '', '', 'accept', '', 'checked', 0, '2021-08-15 04:19:38', '2021-08-15 05:40:37'),
(79, '1629825119486398', 'manual', '16298251501366x768_big-sur-apple-4k-abstract.jpg', '', '', '', 73000, 'Mobile Banking', '2021-08-24 17:11:59', 'BANK BCA', '', '', 'accept', '', 'checked', 0, '2021-08-24 17:11:59', '2021-08-24 17:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_shipping`
--

CREATE TABLE `checkout_shipping` (
  `checs_id` int(11) NOT NULL,
  `checs_check_id` int(11) NOT NULL,
  `checs_aggent` varchar(50) NOT NULL,
  `checs_service_name` varchar(50) NOT NULL,
  `checs_service_description` text NOT NULL,
  `checs_cost` int(11) NOT NULL,
  `checs_etd` varchar(15) NOT NULL,
  `checs_from_province` varchar(50) NOT NULL,
  `checs_to_province` varchar(50) NOT NULL,
  `checs_from_city` varchar(50) NOT NULL,
  `checs_to_city` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_shipping`
--

INSERT INTO `checkout_shipping` (`checs_id`, `checs_check_id`, `checs_aggent`, `checs_service_name`, `checs_service_description`, `checs_cost`, `checs_etd`, `checs_from_province`, `checs_to_province`, `checs_from_city`, `checs_to_city`, `created_at`, `updated_at`) VALUES
(77, 79, 'Jalur Nugraha Ekakurir (JNE)', 'CTC', 'JNE City Courier', 8000, '1-2', 'Jawa Barat', 'Jawa Barat', 'Bandung', 'Bandung', '2021-08-04 07:21:15', '2021-08-04 07:21:15'),
(78, 80, 'J&T Express', 'EZ', 'Regular Service', 10000, '', 'Jawa Barat', 'Jawa Barat', 'Bandung', 'Bandung', '2021-08-05 07:37:10', '2021-08-05 07:37:10'),
(79, 81, 'Jalur Nugraha Ekakurir (JNE)', 'CTC', 'JNE City Courier', 8000, '1-2', 'Jawa Barat', 'Jawa Barat', 'Bandung', 'Bandung', '2021-08-06 06:33:45', '2021-08-06 06:33:45'),
(80, 82, 'Jalur Nugraha Ekakurir (JNE)', 'CTC', 'JNE City Courier', 8000, '1-2', 'Jawa Barat', 'Jawa Barat', 'Bandung', 'Bandung', '2021-08-15 04:19:38', '2021-08-15 04:19:38'),
(81, 83, 'POS Indonesia (POS)', 'Paket Kilat Khusus', 'Paket Kilat Khusus', 7000, '2 HARI', 'Jawa Barat', 'Jawa Barat', 'Bandung', 'Bandung', '2021-08-24 17:11:59', '2021-08-24 17:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(50) NOT NULL,
  `color_code` varchar(50) NOT NULL,
  `color_description` text NOT NULL,
  `color_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`, `color_code`, `color_description`, `color_status`, `created_at`, `updated_at`) VALUES
(3, 'Hitam', '001', '-', 1, '2021-01-23 08:49:33', '2021-02-11 14:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `footer_setting`
--

CREATE TABLE `footer_setting` (
  `foo_id` int(11) NOT NULL,
  `foo_foo_id` int(11) NOT NULL,
  `foo_name` varchar(50) NOT NULL,
  `foo_value` text NOT NULL,
  `foo_description` text NOT NULL,
  `foo_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `header_setting`
--

CREATE TABLE `header_setting` (
  `head_id` int(11) NOT NULL,
  `head_name` varchar(50) NOT NULL,
  `head_value` text NOT NULL,
  `head_description` text NOT NULL,
  `head_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `lev_id` int(11) NOT NULL,
  `lev_name` varchar(50) NOT NULL,
  `lev_description` text NOT NULL,
  `lev_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`lev_id`, `lev_name`, `lev_description`, `lev_status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '-', 1, '2020-12-25 10:08:01', '2020-12-25 10:08:01'),
(2, 'Customer', '-', 1, '2020-12-25 14:04:55', '2020-12-25 14:04:55'),
(3, 'Gudang', '-', 1, '2021-02-02 13:33:38', '2021-02-02 15:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_description` text NOT NULL,
  `menu_index` int(11) NOT NULL,
  `menu_icon` varchar(50) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `menu_views` int(11) NOT NULL,
  `menu_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_menu_id`, `menu_name`, `menu_description`, `menu_index`, `menu_icon`, `menu_url`, `menu_views`, `menu_status`, `created_at`, `updated_at`) VALUES
(10, 0, 'Dashboard', '-', 1, 'fa fa-suitcase', 'admin/dashboard', 0, 1, '2020-12-25 01:01:15', '2020-12-25 01:01:15'),
(15, 0, 'Setting', '-', 10, 'fa fa-cogs', '#', 0, 0, '2020-12-25 01:03:47', '2021-03-03 06:26:17'),
(16, 15, 'Level', '-', 1, 'fa fa-caret-right', 'admin/setting/level', 0, 1, '2020-12-25 01:04:45', '2020-12-25 01:04:45'),
(17, 15, 'Menu', '-', 2, 'fa fa-caret-right', 'admin/setting/menu', 0, 1, '2020-12-25 01:05:34', '2020-12-25 01:05:34'),
(18, 15, 'Role Menu', '-', 3, 'fa fa-caret-right', 'admin/setting/role-menu', 0, 1, '2020-12-25 01:05:53', '2020-12-25 01:05:53'),
(19, 0, 'Setting Website', '-', 6, 'fa fa-comments-o', '#', 0, 1, '2020-12-25 01:07:50', '2021-07-29 15:09:46'),
(22, 19, 'Configuration', '-', 1, 'fa fa-caret-right', 'admin/website-setting', 0, 1, '2020-12-25 21:17:42', '2021-02-15 06:44:39'),
(23, 19, 'Banner', '-', 3, 'fa fa-caret-right', 'admin/website-banner', 0, 1, '2020-12-25 21:18:12', '2021-02-15 06:44:21'),
(24, 19, 'Header', '-', 4, 'fa fa-caret-right', 'admin/website-header', 0, 1, '2020-12-25 21:18:36', '2020-12-25 21:18:36'),
(25, 19, 'Footer', '-', 5, 'fa fa-caret-right', 'admin/website-footer', 0, 1, '2020-12-25 21:19:07', '2020-12-25 21:19:07'),
(26, 0, 'Home', '-', 1, 'fa fa-home', 'user/home', 0, 1, '2020-12-26 01:30:06', '2021-07-28 08:34:45'),
(27, 19, 'Slider', '-', 2, 'fa fa-caret-right', 'admin/website-slider', 0, 1, '2020-12-26 02:09:32', '2021-02-11 14:32:46'),
(28, 0, 'Catalog', '-', 2, 'fa fa-tag', '#', 0, 1, '2020-12-27 00:22:00', '2020-12-27 00:22:00'),
(29, 28, 'Kategori', '-', 1, 'fa fa-caret-right', 'admin/catalog-category', 0, 1, '2020-12-27 00:22:33', '2021-01-23 18:55:43'),
(30, 28, 'Produk', '-', 2, 'fa fa-caret-right', 'admin/catalog-product', 0, 1, '2020-12-27 00:23:36', '2021-01-23 18:31:47'),
(31, 28, 'Warna', '-', 3, 'fa fa-caret-right', 'admin/catalog-color', 0, 0, '2020-12-27 00:25:21', '2021-02-18 02:48:35'),
(32, 28, 'Size', '-', 4, 'fa fa-caret-right', 'admin/catalog-size', 0, 1, '2020-12-27 00:25:43', '2021-02-11 14:08:56'),
(33, 28, 'Reviews', '-', 6, 'fa fa-caret-right', 'admin/catalog-reviews', 0, 1, '2020-12-27 00:27:18', '2020-12-27 00:27:18'),
(34, 0, 'Information', '-', 5, 'fa fa-info-circle', '#', 0, 1, '2020-12-27 00:30:22', '2020-12-27 00:30:22'),
(36, 34, 'Terms & Conditions', '-', 2, 'fa fa-caret-right', 'admin/information-terms-condition', 0, 1, '2020-12-27 00:31:13', '2020-12-27 00:31:13'),
(37, 0, 'Sales', '-', 4, 'fa fa-shopping-cart', '#', 0, 1, '2020-12-27 00:34:47', '2020-12-27 00:34:47'),
(38, 37, 'Payment Method', '-', 1, 'fa fa-caret-right', 'admin/sales-payment-method', 0, 1, '2020-12-27 00:35:34', '2020-12-27 00:35:34'),
(39, 37, 'Order', '-', 2, 'fa fa-caret-right', 'admin/sales-order-list', 0, 1, '2020-12-27 00:35:54', '2021-01-23 19:21:13'),
(40, 37, 'Pembayaran', '-', 3, 'fa fa-caret-right', 'admin/sales-payment-list', 0, 1, '2020-12-27 00:37:14', '2021-01-23 19:21:30'),
(41, 37, 'Voucher', '-', 4, 'fa fa-caret-right', 'admin/sales-voucher', 0, 1, '2020-12-27 00:37:38', '2020-12-27 00:37:38'),
(42, 0, 'Discount', '-', 3, 'fa fa-percent', '#', 0, 1, '2020-12-27 00:40:59', '2020-12-27 00:40:59'),
(43, 42, 'Dsicount Theme', '-', 1, 'fa fa-caret-right', 'admin/discount-theme', 0, 1, '2020-12-27 00:41:36', '2020-12-27 00:41:36'),
(44, 42, 'Discount List', '-', 2, 'fa fa-caret-right', 'admin/discount-list', 0, 1, '2020-12-27 00:41:54', '2020-12-27 00:41:54'),
(45, 42, 'Discount Product', '-', 3, 'fa fa-caret-right', 'admin/discount-product', 0, 1, '2020-12-27 00:42:19', '2020-12-27 00:42:19'),
(46, 28, 'Tags', '-', 5, 'fa fa-caret-right', 'admin/catalog-tags', 0, 0, '2020-12-27 17:37:24', '2021-01-23 18:31:17'),
(47, 0, 'Produk', '-', 1, 'fa fa-product-hunt', 'user/product-list', 0, 1, '2021-01-05 17:28:38', '2021-02-17 05:31:40'),
(48, 0, 'Tentang Kami', '-', 5, 'fa fa-caret-right', 'user/about-us', 0, 0, '2021-01-12 23:43:11', '2021-02-17 05:38:11'),
(49, 0, 'Cara Pemesanan', '-', 2, 'fa fa-caret-right', 'user/how-order', 0, 1, '2021-01-14 19:35:06', '2021-02-17 05:32:01'),
(50, 19, 'Artikel', '-', 4, 'fa fa-caret-right', 'admin/website-blog', 0, 0, '2021-01-15 19:33:20', '2021-07-19 16:21:21'),
(51, 0, 'Artikel', '-', 7, 'fa fa-caret-right', 'user/blog', 0, 0, '2021-01-15 19:35:19', '2021-07-19 16:21:29'),
(52, 19, 'Testimonials', '-', 5, 'fa fa-caret-right', 'admin/website-testimonials', 0, 1, '2021-01-16 03:13:13', '2021-01-16 03:13:13'),
(53, 0, 'FaQ', '-', 3, 'fa fa-question', 'user/faq', 0, 1, '2021-01-16 16:44:49', '2021-02-17 05:32:28'),
(55, 28, 'Level', '-', 4, 'fa fa-caret-right', 'admin/catalog-level', 0, 0, '2021-01-23 08:47:12', '2021-02-11 10:13:35'),
(56, 0, 'Manage Stok', '-', 1, 'fa fa-caret-right', 'admin/manage-stok', 0, 1, '2021-02-02 13:38:55', '2021-02-02 14:03:40'),
(57, 0, 'Sablon', '-', 4, 'fa fa-envelope-o', 'user/custom', 0, 0, '2021-02-11 06:57:32', '2021-07-31 08:27:04'),
(58, 0, 'Riwayat Pembelian', '-', 5, 'fa fa-caret-right', 'my/checkout', 0, 1, '2021-02-15 07:57:12', '2021-02-17 05:43:46'),
(59, 0, 'Cek Resi', '-', 5, 'fa fa-caret-right', 'user/tracking', 0, 0, '2021-02-17 05:37:24', '2021-07-19 16:20:41'),
(60, 0, 'Tutorial', '-', 8, 'fa fa-caret-right', 'user/tutorial', 0, 0, '2021-02-17 05:40:48', '2021-07-19 16:22:40'),
(61, 19, 'FAQ', '-', 5, 'fa fa-caret-right', 'admin/website-faq', 0, 1, '2021-02-18 10:11:13', '2021-02-18 10:19:44'),
(62, 19, 'Tutorial', '-', 6, 'fa fa-caret-right', 'admin/website-tutorial', 0, 0, '2021-02-18 11:18:34', '2021-07-19 16:22:24'),
(63, 19, 'Bank', '-', 3, 'fa fa-caret-right', 'admin/sales-bank-method', 0, 1, '2021-03-04 16:52:01', '2021-07-29 15:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `paynt_id` int(11) NOT NULL,
  `paynt_name` varchar(50) NOT NULL,
  `paynt_description` text NOT NULL,
  `paynt_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`paynt_id`, `paynt_name`, `paynt_description`, `paynt_status`, `created_at`, `updated_at`) VALUES
(1, 'Manual', '-', 1, '2021-01-16 05:38:46', '2021-01-16 05:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_cate_id` int(11) NOT NULL,
  `prod_merc_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_keyword` varchar(100) NOT NULL,
  `prod_url` varchar(100) NOT NULL,
  `prod_image` text NOT NULL,
  `prod_weight` int(11) NOT NULL DEFAULT 350,
  `prod_size` text NOT NULL,
  `prod_tags` text NOT NULL,
  `prod_color` text NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_stok` int(11) NOT NULL,
  `prod_min_stok` int(11) NOT NULL,
  `prod_rating` int(11) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_views` int(11) NOT NULL,
  `prod_upload_by` int(11) NOT NULL,
  `prod_diskon` int(11) NOT NULL,
  `prod_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_cate_id`, `prod_merc_id`, `prod_name`, `prod_keyword`, `prod_url`, `prod_image`, `prod_weight`, `prod_size`, `prod_tags`, `prod_color`, `prod_price`, `prod_stok`, `prod_min_stok`, `prod_rating`, `prod_description`, `prod_views`, `prod_upload_by`, `prod_diskon`, `prod_status`, `created_at`, `updated_at`) VALUES
(12, 10, 0, 'Kaos polos merah maroon', '180 gram', 'kaospolos', '1613971266DSC_0107.jpg', 350, '4', '4', '', 66000, 30, 10, 0, '-Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 0, 30, 50, 1, '2021-02-15 12:40:12', '2021-08-24 17:39:09'),
(14, 10, 0, 'kaos polos pink dusty', '180 gram', 'kaospoloswanita', '1613971573DSC_0327.jpg', 350, '', '', '', 66000, 16, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 8, 1, 50, 1, '2021-02-22 05:26:13', '2021-08-06 16:06:18'),
(15, 10, 0, 'kaos polos ungu muda', '180 gram', 'kaospoloswanita', '1613971828DSC_0298.jpg', 350, '', '', '', 66000, 18, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:30:28', '2021-08-06 15:53:58'),
(16, 10, 0, 'kaos polos kuning mustard', '180 gram', 'kaospoloswanita', '1613971972DSC_0366.jpg', 350, '', '', '', 66000, 21, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 1, 1, 50, 1, '2021-02-22 05:32:52', '2021-08-28 07:09:18'),
(17, 10, 0, 'kaos polos hijau stabilo', '180 gram', 'kaospoloswanita', '1613972100DSC_0282.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:35:00', '2021-08-06 15:54:19'),
(18, 10, 0, 'kaos polos kuning kenari', '180 gram', 'kaospoloswanita', '1613972247DSCF1794.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:37:27', '2021-08-06 15:54:28'),
(19, 10, 0, 'kaos polos merah cabe', '180 gram', 'kaospolos', '1613972363DSCF1852.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 2, 1, 50, 1, '2021-02-22 05:39:23', '2021-08-30 16:08:46'),
(20, 10, 0, 'kaos polos hitam', '180 gram', 'kaospolospria', '1613972513DSC_0177.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 1, 1, 50, 1, '2021-02-22 05:41:53', '2021-08-07 18:05:12'),
(21, 10, 0, 'kaos polos biru navy', '180 gram', 'kaospolospria', '1613972633DSC_0201.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:43:53', '2021-08-06 15:54:58'),
(22, 10, 0, 'kaos polos hijau fuji', '180 gram', 'kaospolospria', '1613972776DSC_0245.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:46:16', '2021-08-06 15:55:06'),
(23, 10, 0, 'kaos polos tosca muda', '180 gram', 'kaospolospria', '1613974446DSCF1890.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:48:47', '2021-08-06 15:57:32'),
(24, 10, 0, 'kaos polos biru turkis', '180 gram', 'kaospolospria', '1613973134DSC_0056 copy.jpg', 350, '', '', '', 66000, 22, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:52:14', '2021-08-06 15:57:45'),
(25, 10, 0, 'kaos polos hijau botol', '180 gram', 'kaospolospria', '1613973321DSC_0079.jpg', 350, '', '', '', 66000, 21, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:55:21', '2021-08-06 15:58:00'),
(26, 10, 0, 'kaos polos biru benhur', '180 gram', 'kaospolospria', '1613973490DSC_0156.jpg', 350, '', '', '', 66000, 18, 10, 0, 'Tersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.', 0, 1, 50, 1, '2021-02-22 05:58:10', '2021-08-06 15:59:17'),
(27, 10, 0, 'kaos polos couple', '180 gram', 'kaoscouple', '1613973859DSCF1885.jpg', 350, '', '', '', 130000, 49, 10, 0, '*DISCLAIMER*\n* harga untuk di atas untuk 2pcs kaos dan bebas pilih warna dan ukuran yg tersedia\n\nTersedia ukuran S-XXL\n\nUkuran:\nS = 48 x 68 cm\nM = 50 x 70 cm\nL = 52 x 72 cm\nXL = 54 x 74 cm\nXXL = 56 x 76 cm\n\n\nSpesifikasi\n- Bahan 100% Cotton Combed 30s Reaktif\n- Jahit Rantai \n- Jahit Leher Double Stick \n- Nyaman, Tidak Panas, dan Menyerap Keringat\n- Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll.\n- Menerima Pembuatan Kaos Costum (Min. 2 Lusin)\n- Plastik packaging tebal.\n\nVarian Warna :\n1	hitam \n2	putih \n3	maroon \n4	navy\n5	abu muda\n6	kuning kubus\n7	merah cabe\n8	hijau stabilo\n9	kuning kenari\n10	pink rose\n11	 fanta magenta\n12	ungu muda\n13	biru benhur\n14	biru turkis\n15	orange\n16	hijau fuji\n17	hijau tosca muda\n18	hijau army\n19	hijau botol\n20	pink dusty\n', 0, 1, 50, 1, '2021-02-22 06:04:19', '2021-08-06 15:59:26'),
(28, 10, 0, 'Kaos Polos Merah Cabe', '180 gram', 'kaos polos merah cabe', '1615402007DSCF1852.jpg', 350, '', '', '', 66000, 50, 10, 0, 'Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 0, 1, 50, 1, '2021-03-10 18:46:47', '2021-08-06 15:59:35'),
(29, 10, 0, 'Kaos Polos Putih Lengan Pendek', '180 gram', 'kaos polos', '1615402516DSCF1840.jpg', 350, '', '', '', 66000, 50, 10, 0, 'Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 0, 1, 50, 1, '2021-03-10 18:55:16', '2021-08-06 15:59:43'),
(31, 10, 0, 'Kaos Polos Hijau Army Lengan Pendek', '180 gram', 'kaos polos', '1615402676DSC_0218.jpg', 350, '', '', '', 66000, 50, 10, 0, 'Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 0, 1, 50, 1, '2021-03-10 18:57:56', '2021-08-06 15:59:51'),
(32, 10, 0, 'Kaos Polos Abu Muda Lengan Pendek', '180 gram', 'kaos polos abu muda', '1615402914DSCF1915.jpg', 350, '', '', '', 66000, 50, 10, 0, 'Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 0, 1, 50, 1, '2021-03-10 19:01:54', '2021-08-06 15:59:59'),
(33, 10, 0, 'Kaos Polos Pink Rose Lengan Pendek', '180 gram', 'kaos pink rose', '1615403073DSC_0347.jpg', 350, '', '', '', 66000, 50, 10, 0, 'Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 2, 1, 50, 1, '2021-03-10 19:04:33', '2021-08-28 07:18:53'),
(34, 10, 0, 'Kaos Polos Orange Lengan Pendek', '180 gram', 'kaos polos orange', '1615403246DSC_0256.jpg', 350, '', '', '', 66000, 50, 10, 0, 'Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 0, 1, 50, 1, '2021-03-10 19:07:26', '2021-08-06 16:00:14'),
(35, 10, 0, 'Kaos Polos Magenta Lengan Pendek', '180 gram', 'kaos polos magenta', '1615403381DSC_0083.jpg', 350, '', '', '', 66000, 39, 10, 0, 'Tersedia ukuran S-XXL Ukuran: S = 48 x 68 cm M = 50 x 70 cm L = 52 x 72 cm XL = 54 x 74 cm XXL = 56 x 76 cm Spesifikasi - Bahan 100% Cotton Combed 30s Reaktif - Jahit Rantai - Jahit Leher Double Stick - Nyaman, Tidak Panas, dan Menyerap Keringat - Sangat Cocok untuk menggunakan Sablon Rubber, Plastisol, Discharge, dll. - Menerima Pembuatan Kaos Costum (Min. 2 Lusin) - Plastik packaging tebal.', 1, 1, 50, 1, '2021-03-10 19:09:41', '2021-08-28 07:19:17'),
(38, 9, 0, 'Sablon Print bahan plastisol', '180 gram', 'sablonprint', '162740164232cd9ae57ab75a3eb39f8928d6229611.jpg', 350, '', '', '', 66000, 100, 2, 0, 'sablon menggunakan desain custom, untuk desain sendiri bisa kirimkan gambar lewat whatsapp admin kami ya...\nharga dihitung dari ukuran gambar ya, jika gambar ukuran lebar x panjang nya gede maka harga nya bisa juga naik, untuk harga tanyakan kepada admin terlebih dahulu yah kak :)', 5, 1, 0, 1, '2021-07-27 16:00:42', '2021-08-28 07:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_menu`
--

CREATE TABLE `role_menu` (
  `role_id` int(11) NOT NULL,
  `role_menu_id` int(11) NOT NULL,
  `role_lev_id` int(11) NOT NULL,
  `role_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_menu`
--

INSERT INTO `role_menu` (`role_id`, `role_menu_id`, `role_lev_id`, `role_status`, `created_at`, `updated_at`) VALUES
(3, 10, 1, 1, '2020-12-26 09:08:32', '2020-12-26 09:08:32'),
(4, 15, 1, 1, '2020-12-26 09:08:40', '2020-12-26 09:08:40'),
(5, 19, 1, 1, '2020-12-26 09:08:49', '2020-12-26 09:08:49'),
(6, 16, 1, 0, '2020-12-26 09:08:58', '2021-01-22 14:03:27'),
(7, 17, 1, 0, '2020-12-26 09:09:05', '2021-01-22 14:03:45'),
(8, 18, 1, 0, '2020-12-26 09:09:14', '2021-01-22 14:03:58'),
(9, 22, 1, 1, '2020-12-26 11:20:04', '2020-12-26 11:20:04'),
(10, 23, 1, 1, '2020-12-26 11:20:49', '2020-12-26 11:20:49'),
(13, 26, 2, 1, '2020-12-26 15:30:14', '2020-12-26 15:30:14'),
(14, 27, 1, 1, '2020-12-26 16:17:46', '2020-12-26 16:17:46'),
(15, 28, 1, 1, '2020-12-27 14:23:48', '2020-12-27 14:23:48'),
(16, 29, 1, 1, '2020-12-27 14:23:59', '2020-12-27 14:23:59'),
(17, 30, 1, 1, '2020-12-27 14:24:11', '2020-12-27 14:24:11'),
(18, 31, 1, 1, '2020-12-27 14:26:03', '2020-12-27 14:26:03'),
(19, 32, 1, 1, '2020-12-27 14:26:13', '2020-12-27 14:26:13'),
(22, 0, 1, 1, '2020-12-27 14:32:03', '2021-02-18 10:20:30'),
(23, 36, 1, 1, '2020-12-27 14:32:11', '2020-12-27 14:32:11'),
(24, 37, 1, 1, '2020-12-27 14:35:07', '2020-12-27 14:35:07'),
(26, 39, 1, 1, '2020-12-27 14:36:46', '2020-12-27 14:36:46'),
(27, 40, 1, 1, '2020-12-27 14:37:50', '2020-12-27 14:37:50'),
(30, 43, 1, 1, '2020-12-27 14:42:36', '2020-12-27 14:42:36'),
(31, 44, 1, 1, '2020-12-27 14:42:45', '2020-12-27 14:42:45'),
(32, 45, 1, 1, '2020-12-27 14:42:55', '2020-12-27 14:42:55'),
(33, 46, 1, 1, '2020-12-28 07:37:37', '2020-12-28 07:37:37'),
(34, 47, 2, 1, '2021-01-06 07:28:49', '2021-01-06 07:28:49'),
(35, 48, 2, 1, '2021-01-13 13:43:43', '2021-01-13 13:43:43'),
(36, 49, 2, 1, '2021-01-15 09:35:29', '2021-01-15 09:35:29'),
(37, 50, 1, 1, '2021-01-16 09:33:39', '2021-01-16 09:33:39'),
(38, 51, 2, 1, '2021-01-16 09:35:44', '2021-01-16 09:35:44'),
(39, 0, 1, 0, '2021-01-16 17:13:24', '2021-02-15 07:09:13'),
(40, 55, 1, 1, '2021-01-23 15:47:59', '2021-01-23 15:47:59'),
(41, 56, 3, 1, '2021-02-02 13:40:10', '2021-02-02 13:40:10'),
(42, 57, 2, 1, '2021-02-11 06:58:21', '2021-02-11 06:58:21'),
(43, 58, 2, 1, '2021-02-15 07:58:11', '2021-02-15 07:58:11'),
(44, 59, 2, 1, '2021-02-17 05:38:56', '2021-02-17 05:38:56'),
(45, 60, 2, 1, '2021-02-17 05:43:14', '2021-02-17 05:43:14'),
(46, 53, 2, 1, '2021-02-17 08:10:22', '2021-02-17 08:10:22'),
(47, 61, 1, 1, '2021-02-18 10:25:46', '2021-02-18 10:28:20'),
(48, 62, 1, 1, '2021-02-18 11:18:59', '2021-02-18 11:19:17'),
(49, 63, 1, 1, '2021-03-04 16:52:30', '2021-03-04 16:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_category_id` int(11) NOT NULL,
  `size_name` varchar(50) NOT NULL,
  `size_description` text NOT NULL,
  `size_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_category_id`, `size_name`, `size_description`, `size_status`, `created_at`, `updated_at`) VALUES
(4, 10, 'S', 'Ukuran S sampai XXL', 1, '2021-02-11 14:09:56', '2021-02-28 04:54:11'),
(7, 10, 'M', 'Ukuran S sampai XXL', 1, '2021-02-28 04:53:17', '2021-02-28 04:53:17'),
(8, 10, 'L', 'Ukuran S sampai XXL', 1, '2021-02-28 04:53:50', '2021-02-28 04:53:50'),
(10, 10, 'XL', 'Ukuran S sampai XL', 1, '2021-02-28 04:55:51', '2021-02-28 04:55:51'),
(11, 10, 'XXL', 'Ukuran S sampai XXL', 1, '2021-02-28 04:56:15', '2021-02-28 04:56:15'),
(12, 11, 'S', 'Ukuran S sampai L Ready', 1, '2021-07-29 15:03:40', '2021-07-29 15:04:00'),
(13, 12, 'All Size', 'Untuk semua ukuran', 1, '2021-07-29 15:04:26', '2021-07-29 15:04:26'),
(14, 9, 'All Size', 'untuk semua ukuran', 1, '2021-08-06 16:01:11', '2021-08-06 16:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `slider_setting`
--

CREATE TABLE `slider_setting` (
  `slide_id` int(11) NOT NULL,
  `slide_menu_id` int(11) NOT NULL,
  `slide_caption` varchar(50) NOT NULL,
  `slide_image` varchar(100) NOT NULL,
  `slide_description` text NOT NULL,
  `slide_url` varchar(100) NOT NULL,
  `slide_text_1` text NOT NULL,
  `slide_text_2` text NOT NULL,
  `slide_text_3` text NOT NULL,
  `slide_index` int(11) NOT NULL,
  `slide_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_setting`
--

INSERT INTO `slider_setting` (`slide_id`, `slide_menu_id`, `slide_caption`, `slide_image`, `slide_description`, `slide_url`, `slide_text_1`, `slide_text_2`, `slide_text_3`, `slide_index`, `slide_status`, `created_at`, `updated_at`) VALUES
(1, 26, 'clothing', '1613372429about-header-bg.jpg', 'Mogasacloth', 'daftar-produk', 'Bandung', 'Mogasa Cloth', 'SHOP NOW', 1, 1, '2020-12-27 08:20:01', '2021-02-21 11:16:34'),
(2, 26, 'kaos etnik batak', '1614744625LOGO.jpeg', ' ', 'https://mogasacloth.com/user/product-list', 'bandung', ' ', 'selengkapnya', 1, 1, '2021-03-03 04:09:14', '2021-03-03 04:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_lev_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `user_gender` varchar(5) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_address` text NOT NULL,
  `user_photo_cover` varchar(100) NOT NULL,
  `user_token` varchar(50) NOT NULL,
  `verified_email` tinyint(4) NOT NULL DEFAULT 0,
  `verified_phone` tinyint(4) NOT NULL DEFAULT 0,
  `verified_account` tinyint(4) NOT NULL DEFAULT 0,
  `blokir` tinyint(4) NOT NULL DEFAULT 0,
  `is_logged_in` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_lev_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_photo`, `user_gender`, `user_birthdate`, `user_address`, `user_photo_cover`, `user_token`, `verified_email`, `verified_phone`, `verified_account`, `blokir`, `is_logged_in`, `created_at`, `updated_at`) VALUES
(1, 1, 'Administrator', 'administrator@gmail.com', '$2a$10$.Z/W4wcIBySQhYL69YlATeEFEothDhxqwxiyiz022mPPFF1bxnfA.', '08123123', '-', '-', '2020-12-01', '-', '-', '', 1, 1, 1, 0, 0, '2020-12-25 10:06:45', '2020-12-25 10:06:45'),
(30, 3, 'Admin Gudang', 'admingudang@gmail.com', '$2a$10$.Z/W4wcIBySQhYL69YlATeEFEothDhxqwxiyiz022mPPFF1bxnfA.', '08123123', '-', '-', '2020-12-01', '-', '-', '', 1, 1, 1, 0, 0, '2020-12-25 10:06:45', '2020-12-25 10:06:45'),
(71, 2, 'Test', 'bayurifkialgh@gmail.com', '$2y$10$HqFtHMvWd9ZA5stjl1OlE.kWV/C.CbMgizCyB5Nm8sw2FP6VG1P7K', '123', '', '', '0000-00-00', '', '', '7d5d6824eb3db40f56b2fa9cfe449537', 1, 0, 0, 0, 0, '2021-02-26 11:59:34', '2021-02-26 12:00:34'),
(86, 2, 'adjie abdul azis', 'adjieabdulazis42@gmail.com', '$2y$10$tWpfS0WjLNMD1Suyruagje0i6P2flWPJJyCYsh4Q3P8V0MfETiQRC', '085795526001', '', '', '0000-00-00', 'Bandung ', '', '0c3280fd35e80a00dc646a5bf0215e32', 1, 0, 0, 0, 0, '2021-07-29 09:16:46', '2021-07-29 10:13:57'),
(88, 2, 'adjie abdul azis', 'saya.abdulazis42@gmail.com', '$2y$10$tUWq5hLdbXZZqsLEx1wOz.5r8HfRZrRj/Ep8tbF1Msjz8J80.C3Ui', '1234456', '', '', '0000-00-00', '', '', '10f42fc342c5281f436edd8a0d2a547f', 1, 0, 0, 0, 0, '2021-08-04 07:13:28', '2021-08-04 07:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `web_id` int(11) NOT NULL,
  `web_name` varchar(100) NOT NULL,
  `web_language` varchar(10) NOT NULL,
  `web_description` text NOT NULL,
  `web_icon` varchar(100) NOT NULL,
  `web_template` tinyint(4) NOT NULL,
  `web_setting` text NOT NULL,
  `web_logo` varchar(100) NOT NULL,
  `web_payment_method` varchar(200) NOT NULL,
  `web_delivery_service` varchar(200) NOT NULL,
  `web_addres` text NOT NULL,
  `web_copyright` varchar(100) NOT NULL,
  `web_type` varchar(50) NOT NULL,
  `web_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`web_id`, `web_name`, `web_language`, `web_description`, `web_icon`, `web_template`, `web_setting`, `web_logo`, `web_payment_method`, `web_delivery_service`, `web_addres`, `web_copyright`, `web_type`, `web_status`, `created_at`, `updated_at`) VALUES
(1, 'Mogasacloth', 'ID', 'Mogasacloth', '1613372195logo-mogasa.png', 1, '', '1613372195logo-mogasa.png', 'payment-method.png', 'service.png', 'Perum D\'Boqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376', 'Mogasacloth', 'Single', 1, '2020-12-26 11:30:20', '2021-02-18 09:17:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_method`
--
ALTER TABLE `bank_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_setting`
--
ALTER TABLE `banner_setting`
  ADD PRIMARY KEY (`bann_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `checkout_payment`
--
ALTER TABLE `checkout_payment`
  ADD PRIMARY KEY (`checp_id`);

--
-- Indexes for table `checkout_shipping`
--
ALTER TABLE `checkout_shipping`
  ADD PRIMARY KEY (`checs_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `footer_setting`
--
ALTER TABLE `footer_setting`
  ADD PRIMARY KEY (`foo_id`);

--
-- Indexes for table `header_setting`
--
ALTER TABLE `header_setting`
  ADD PRIMARY KEY (`head_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`lev_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`paynt_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `slider_setting`
--
ALTER TABLE `slider_setting`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`web_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_method`
--
ALTER TABLE `bank_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner_setting`
--
ALTER TABLE `banner_setting`
  MODIFY `bann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `checkout_payment`
--
ALTER TABLE `checkout_payment`
  MODIFY `checp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `checkout_shipping`
--
ALTER TABLE `checkout_shipping`
  MODIFY `checs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_setting`
--
ALTER TABLE `footer_setting`
  MODIFY `foo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_setting`
--
ALTER TABLE `header_setting`
  MODIFY `head_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `lev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `paynt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider_setting`
--
ALTER TABLE `slider_setting`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `web_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
