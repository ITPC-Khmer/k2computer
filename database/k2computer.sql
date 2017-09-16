-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 05:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k2computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `brand_id` int(11) DEFAULT '0',
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_detail` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `option` longtext COLLATE utf8mb4_unicode_ci,
  `start_price` double DEFAULT '0',
  `promotion_price` double DEFAULT '0',
  `promotion_expire_date` date DEFAULT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `brand_id`, `code`, `url_detail`, `title`, `description`, `option`, `start_price`, `promotion_price`, `promotion_expire_date`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(7, 31, 2, NULL, '', 'Gigabyte Motherboard GA-H81-D3', '<br>', '{\"lang\":{\"kh\":\"Gigabyte Motherboard GA-H81-D3\"}}', 110, 100, '2017-06-20', '[\"22692_1497929162.jpg\",\"50521_1497929227.jpg\",\"84399_1497929227.jpg\",\"17870_1497929227.jpg\"]', 1, '2017-06-19 20:26:22', '2017-06-19 20:27:29'),
(8, 31, 2, NULL, '', 'Gigabyte Motherboard GA-H81-D3P', NULL, '{\"lang\":{\"kh\":\"Gigabyte Motherboard GA-H81-D3P\"}}', 120, 100, '2017-06-20', '[\"75678_1497929308.jpg\",\"38303_1497929309.jpg\",\"37418_1497929309.jpg\",\"18646_1497929309.jpg\",\"59713_1497929780.jpg\"]', 1, '2017-06-19 20:36:33', '2017-06-19 20:36:33'),
(9, 31, 2, NULL, '', 'Gigabyte Motherboard GA-H81M-DS2', NULL, '{\"lang\":{\"kh\":\"Gigabyte Motherboard GA-H81M-DS2\"}}', 150, 120, '2017-06-20', '[\"42211_1497929837.jpg\",\"97729_1497929837.jpg\",\"45748_1497929837.jpg\",\"36240_1497929941.jpg\",\"27150_1497929941.jpg\",\"78314_1497929940.jpg\"]', 1, '2017-06-19 20:39:09', '2017-06-19 20:39:09'),
(10, 33, 1, NULL, '', 'External HD710M', '<p>\r\n						\r\n					\r\n					\r\n					\r\n					\r\n					\r\n						\r\n    \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 1TB<br></td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Camouflage</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 132 x 99 x 22mm / 5.2 x 3.9 x 0.9\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 220g / 7.8oz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 3.0 (backward compatible with USB2.0)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 5–50°C / 41–121°F</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">System requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">\r\n            : Windows XP or later<br>&nbsp; Mac OS X 10.6 or later<br>&nbsp;\r\n            Linux Kernel 2.6 or later<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 3.0 cable, Quick Start Guide</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: 3 years</td></p>', '{\"lang\":{\"kh\":\"External HD710M\"}}', 72, NULL, NULL, '[\"30822_1497930549.jpg\",\"72391_1497930549.jpg\"]', 1, '2017-06-19 20:48:45', '2017-06-21 19:57:01'),
(11, 33, 1, NULL, '', 'External HD720', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">&nbsp;: 1TB</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: Black / Blue / Green</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 129.4 x 97.9 x 20.2 mm / 5.1 x 3.9 x 0.8 in</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 211g / 7.4 oz (500GB), 223g / 7.9 oz (1TB/2TB)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: SuperSpeed USB 3.0 (backward compatible with USB 2.0)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: Windows XP or later<br>\r\n            &nbsp;&nbsp;Mac OS X 10.6 or later<br>\r\n            &nbsp;&nbsp;Linux Kernel 2.6 or later</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: USB 3.0 cable; Quick Start Guide</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Op. Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 5°C (41°F) to 50°C (121°F)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Op. Voltage</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB DC 5V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Texture</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: Plastic / Silicone Rubber</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: 3 Years</td></p>', '{\"lang\":{\"kh\":\"External HD720\"}}', 65, NULL, NULL, '[\"80864_1497930729.jpg\",\"29003_1497930849.jpg\",\"53601_1497930849.jpg\"]', 1, '2017-06-19 20:54:23', '2017-06-21 19:58:52'),
(12, 33, 1, NULL, '', 'External HD710', '<td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 1TB<br>\r\n            &nbsp;</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Yellow / Black / Blue</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 132 x 99 x 22 mm (5.2 x 3.9 x 0.9in)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 220g (7.8oz)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: SuperSpeed USB 3.0 (backward compatible with USB 2.0)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Texture</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Plastic / Rubber</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 3 years</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Opt. Voltage</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB DC 5V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Windows XP or later<br>\r\n            Mac OS X 10.6 or later<br>\r\n            Linux Kernel 2.6 or later</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.0 cable; Quick Start Guide</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Opt. Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 5°C (41°F) to 50°C (121°F)</td>', '{\"lang\":{\"kh\":\"External HD710\"}}', 70, 65, NULL, '[\"86456_1497931115.jpg\",\"63203_1497931115.jpg\",\"80076_1497931115.jpg\"]', 1, '2017-06-19 21:01:45', '2017-06-21 20:01:47'),
(13, 33, 1, NULL, '', 'External HC500', NULL, '{\"lang\":{\"kh\":\"External HC500\"}}', 55, NULL, NULL, '[\"37404_1498009205.jpg\"]', 1, '2017-06-20 18:41:24', '2017-06-20 18:41:24'),
(14, 33, 1, NULL, '', 'External HC660', '<td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">:1TB</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Titanium</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 120 x 76 x 9.6 mm / 4.7 x 3.0 x 0.38\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 124g / 4.3oz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Texture</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Metal/Plastic</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 3.0, backward compatible with USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating system requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">\r\n            : Windows XP or later<br>\r\n            &nbsp; Mac OS X 10.6 or later<br>\r\n            &nbsp; Linux Kernel 2.6 or later<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Op. Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 5°C(41°F) to 50°C(121°F)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Op. Voltage</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DC 5V, 900mA</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: USB3.0 cable; Quick Start Guide</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: 3 year</td>', '{\"lang\":{\"kh\":\"External HC660\"}}', 65, NULL, NULL, '[\"49180_1498009675.jpg\",\"61262_1498009675.jpg\",\"64348_1498009675.jpg\",\"75524_1498009675.jpg\",\"38583_1498009675.jpg\"]', 1, '2017-06-20 18:52:33', '2017-06-20 19:09:12'),
(15, 33, 1, NULL, '', 'External HD650', NULL, '{\"lang\":{\"kh\":\"External HD650\"}}', 65, NULL, NULL, '[\"30634_1498009993.jpg\",\"33036_1498009993.jpg\",\"58447_1498009993.jpg\",\"60378_1498010023.jpg\"]', 1, '2017-06-20 18:53:48', '2017-06-20 18:53:48'),
(16, 33, 1, NULL, '', 'External HD650X', NULL, '{\"lang\":{\"kh\":\"External HD650X\"}}', 107, NULL, NULL, '[\"20113_1498010089.jpg\",\"56174_1498010089.jpg\",\"82610_1498010090.jpg\",\"38386_1498010090.jpg\"]', 1, '2017-06-20 18:55:29', '2017-06-20 18:55:29'),
(17, 33, 1, NULL, '', 'External HD700', NULL, '{\"lang\":{\"kh\":\"External HD700\"}}', 65, NULL, NULL, '[\"81883_1498010189.jpg\",\"46154_1498010189.jpg\",\"38329_1498010189.jpg\",\"37805_1498010189.jpg\"]', 1, '2017-06-20 18:56:38', '2017-06-20 18:56:38'),
(18, 33, 1, NULL, '', 'External HD710A', NULL, '{\"lang\":{\"kh\":\"External HD710A\"}}', 70, NULL, NULL, '[\"76485_1498010270.jpg\",\"80136_1498010270.jpg\",\"51919_1498010270.jpg\",\"71107_1498010270.jpg\"]', 1, '2017-06-20 18:57:58', '2017-06-20 18:57:58'),
(19, 33, 1, NULL, '', 'External HE720', NULL, '{\"lang\":{\"kh\":\"External HE720\"}}', 95, NULL, NULL, '[\"92792_1498010373.jpg\",\"62487_1498010373.jpg\",\"34965_1498010373.jpg\",\"17288_1498010373.jpg\"]', 1, '2017-06-20 18:59:37', '2017-06-20 18:59:37'),
(20, 33, 1, NULL, '', 'External HM900', NULL, '{\"lang\":{\"kh\":\"External HM900\"}}', 107, NULL, NULL, '[\"17438_1498010461.jpg\",\"11365_1498010461.jpg\",\"64317_1498010461.jpg\",\"91495_1498010461.jpg\",\"56005_1498010461.jpg\"]', 1, '2017-06-20 19:01:06', '2017-06-20 19:01:06'),
(21, 33, 1, NULL, '', 'External HV100', NULL, '{\"lang\":{\"kh\":\"External HV100\"}}', 62, NULL, NULL, '[\"81138_1498010530.jpg\",\"55309_1498010531.jpg\",\"45397_1498010531.jpg\",\"25460_1498010531.jpg\"]', 1, '2017-06-20 19:02:28', '2017-06-20 19:02:28'),
(22, 33, 1, NULL, '', 'External HV620S', NULL, '{\"lang\":{\"kh\":\"External HV620S\"}}', 60, NULL, NULL, '[\"60795_1498010619.jpg\",\"60205_1498010620.jpg\",\"27024_1498010620.jpg\",\"23015_1498010620.jpg\",\"80095_1498010620.jpg\"]', 1, '2017-06-20 19:04:49', '2017-06-20 19:04:49'),
(23, 33, 1, NULL, '', 'External NH13', NULL, '{\"lang\":{\"kh\":\"External NH13\"}}', 65, NULL, NULL, '[\"72200_1498010797.jpg\",\"18723_1498010797.jpg\",\"59548_1498010797.jpg\",\"25615_1498010797.jpg\"]', 1, '2017-06-20 19:06:48', '2017-06-20 19:06:48'),
(24, 32, 1, NULL, '', 'C008 USB Flash Drive', '<p>- Capacity\r\n&nbsp;            :&nbsp; 8GB<br>- Color&nbsp;\r\n            : Blue / Red<br>\r\n        \r\n        \r\n            - Dimensions (L x W x H)\r\n            :&nbsp; 59.95 x 19.83 x 8.85mm (L x W x H)\r\n        \r\n        \r\n            <br>- Weight&nbsp;\r\n            : 10g<br>\r\n        \r\n        \r\n            - Interface\r\n            :&nbsp; USB 2.0<br>\r\n        \r\n        \r\n            - Performance\r\n            :&nbsp; N/A\r\n        \r\n        \r\n            <br>- System Requirements\r\n            :&nbsp; Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no :&nbsp;&nbsp;&nbsp;&nbsp; device driver needed<br>\r\n        \r\n        \r\n            - Warranty\r\n            : Lifetime Warranty</p>', '{\"lang\":{\"kh\":\"C008 USB Flash Drive\"}}', 6, NULL, NULL, '[\"87989_1498011405.jpg\",\"80883_1498011405.jpg\",\"44099_1498011405.jpg\"]', 1, '2017-06-20 19:21:03', '2017-06-20 19:21:03'),
(25, 32, 1, NULL, '', 'C906 USB Flash Drive', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 16GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Black / White</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 58 x 17.6 x 10.4mm (L x W x H)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 9g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: N/A</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System Requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no device driver needed</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Lifetime Warranty</td></p>', '{\"lang\":{\"kh\":\"C906 USB Flash Drive\"}}', 8, NULL, NULL, '[\"82149_1498011781.jpg\",\"24791_1498011781.jpg\",\"81520_1498011781.jpg\"]', 1, '2017-06-20 19:25:43', '2017-06-20 19:25:43'),
(26, 32, 1, NULL, '', 'UV100 USB Flash Drive', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 8GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Black/Blue/Red</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 41 x 19.3 x 5.8mm (L x W x H)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 4g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: N/A</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System Requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no device driver needed</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Lifetime Warranty</td></p>', '{\"lang\":{\"kh\":\"UV100 USB Flash Drive\"}}', 6, NULL, NULL, '[\"74292_1498012040.jpg\",\"86726_1498012040.jpg\",\"46040_1498012039.jpg\"]', 1, '2017-06-20 19:28:49', '2017-06-20 19:28:49'),
(27, 32, 1, NULL, '', 'UC510 USB Flash Drive', '<p>- Capacity\r\n            : 16GB<br>\r\n        \r\n        \r\n            - Color\r\n            : Black/Blue <br>- Interface\r\n            : USB 3.0 (backward compatible with USB 2.0)<br>- Performance\r\n            : N/A<br>\r\n        \r\n        \r\n            - System Requirements\r\n            : Windows XP/Vista/7/8/8.1/10 or later<br>                                                \r\n            Mac OSX 10.5 or later<br>                                                 Linux Kernel 2.6 or later</p><p>\r\n        \r\n        \r\n            - Warranty\r\n            : Lifetime Warranty</p>', '{\"lang\":{\"kh\":\"UC510 USB Flash Drive\"}}', 9, NULL, NULL, '[\"78097_1498012261.jpg\",\"98657_1498012262.jpg\",\"85386_1498012262.jpg\",\"92697_1498012261.jpg\"]', 1, '2017-06-20 19:36:24', '2017-06-20 20:12:09'),
(28, 32, 1, NULL, '', 'UV128 USB Flash Drive', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 32GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Black/Blue &amp; Black/Yellow</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 60 x 20 x 9mm (L x W x H)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 10g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.0 (backward compatible with USB 2.0)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: N/A</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System Requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Windows XP/Vista/7/8/8.1/10 or later<br>&nbsp;\r\n            Mac OSX 10.5 or later<br>\r\n            <br>\r\n            : Linux Kernel 2.6 or later</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Lifetime Warranty</td></p>', '{\"lang\":{\"kh\":\"UV128 USB Flash Drive\"}}', 13, NULL, NULL, '[\"77998_1498012655.jpg\",\"67238_1498012655.jpg\"]', 1, '2017-06-20 19:40:22', '2017-06-20 19:40:22'),
(29, 32, 1, NULL, '', 'UV140 USB Flash Drive', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">&nbsp;: 16GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: Blue/Red</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 43 x 16 x 8mm(LxWxH)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 4g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: USB 3.0, backward compatible with USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: Windows XP, Vista, 7, 8, 8.1, 10 <br>\r\n            &nbsp;&nbsp; Mac OS X 10.6 or later&nbsp; <br>\r\n            &nbsp;&nbsp; Linux Kernel 2.6 or later</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Lifetime Warranty</td></p>', '{\"lang\":{\"kh\":\"UV140 USB Flash Drive\"}}', 10, NULL, NULL, '[\"17146_1498012913.jpg\",\"48970_1498012913.jpg\",\"57640_1498012913.jpg\",\"62731_1498012913.jpg\"]', 1, '2017-06-20 19:43:28', '2017-06-20 19:43:28'),
(30, 32, 1, NULL, '', 'UV150 USB Flash Drive', '<td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 16GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Black/Red</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 58 x 18 x 10mm (L x W x H)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 9g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.0 (backward compatible with USB 2.0)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: N/A</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System Requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no&nbsp;&nbsp;&nbsp; device driver needed</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Lifetime Warranty</td>', '{\"lang\":{\"kh\":\"UV150 USB Flash Drive\"}}', 13, NULL, NULL, '[\"74701_1498013107.jpg\",\"99712_1498013107.jpg\",\"25693_1498013334.jpg\",\"27107_1498013334.jpg\"]', 1, '2017-06-20 19:49:04', '2017-06-20 19:49:04'),
(31, 32, 1, NULL, '', 'UV210 USB Flash Drive', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 32GB</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Housing</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Metal</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 39 x 12.2 x 4.5mm/1.54 x 0.48 x 0.18 inch</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 6g /0.21oz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 2.0</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: lifetime</td></p>', '{\"lang\":{\"kh\":\"UV210 USB Flash Drive\"}}', 14, NULL, NULL, '[\"24054_1498013488.jpg\",\"24697_1498013489.jpg\",\"95644_1498013489.jpg\",\"69656_1498013488.jpg\"]', 1, '2017-06-20 19:52:20', '2017-06-20 19:52:20'),
(32, 18, 1, NULL, '', 'A100 50 Power Bank', '<p>- Capacity&nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>10050mAh (Lithium-ion rechargeable battery 37.2Wh)</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Titanium Grey、Silver、Gold、Rose Gold</p><p>- Dimensions (L x W x H)&nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>100 x 60 x 22mm / 3.93 x 2.36 x 0.86\"</p><p>- Weight&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>220g / 7.8oz</p><p>- Input&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>DC 5V/2A (Micro USB)</p><p>- Output&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>DC 5V 2.1A (Type-A USB)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DC&nbsp;&nbsp;5V 1.0A (Type-A USB)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Micro USB Cable; User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;1 year</p>', '{\"lang\":{\"kh\":\"A100 50 Power Bank\"}}', 33, NULL, NULL, '[\"53813_1498013897.png\",\"15292_1498013898.png\"]', 1, '2017-06-20 20:02:37', '2017-06-20 20:02:37'),
(33, 32, 1, NULL, '', 'UC330 USB OTG', '<td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 8GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Silver zinc body &amp; black cap</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 31 x 17 x 11mm (L x W x H)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 3.6g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: N/A</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System Requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Windows XP, Vista, 7, 8, 8.1, 10 and Mac OS 9.X or higher, with no device driver&nbsp;&nbsp; needed <br>\r\n            Mobile devices running Android 4.1 or higher</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Lifetime Warranty</td>', '{\"lang\":{\"kh\":\"UC330 USB OTG\"}}', 9, NULL, NULL, '[\"57327_1498014195.jpg\",\"38544_1498014195.jpg\",\"13696_1498014194.jpg\",\"96707_1498014197.jpg\"]', 1, '2017-06-20 20:06:30', '2017-06-20 20:06:30'),
(34, 32, 1, NULL, '', 'UC350 USB OTG', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">&nbsp;: 16GB/32GB/64GB</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: Golden</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 29.3 x 18.8 x 7.8 mm</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 5g(0.18oz)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: Switchable Type-A and Type-C USB 3.1(Gen 1) connectors, backward compatible with USB 2.0/USB 3.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- System requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">\r\n            :&nbsp; MAC OS 9.0 or later<br>\r\n            &nbsp;Chromebook Pixel<br>\r\n            &nbsp;Windows XP,7, 8, 8.1,10<br>\r\n            &nbsp;Linux Kernel 2.4.2 or later<br>\r\n            &nbsp;Mobile devices running Android OS 4.0 or later<br>\r\n            &nbsp;With USB Type-C transmission joint smart phones and tablets (the device itself must support OTG&nbsp;&nbsp; function)<br>\r\n            </td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: lifetime warranty</td></p>', '{\"lang\":{\"kh\":\"UC350 USB OTG\"}}', 17, NULL, NULL, '[\"51811_1498014439.jpg\",\"99134_1498014440.jpg\",\"54758_1498014440.jpg\",\"19165_1498014440.jpg\"]', 1, '2017-06-20 20:11:28', '2017-06-20 20:11:28'),
(35, 18, 1, NULL, '', 'PV150 Power Bank', '<p>- Capacity&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;10000mAh (Lithium-ion rechargeable battery 36Wh)</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Black / White / Blue</p><p>- Dimensions&nbsp; &nbsp; : (L x W x H)<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>99 x 84 x 24mm / 3.9 x 3.3 x 0.9\"</p><p>- Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;235g / 8.3oz</p><p>- Input&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;DC 5V/2A (microUSB)</p><p>- Output&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;DC 5V 2.1A (Type-A USB)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Micro USB Cable; User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;1 Year</p>', '{\"lang\":{\"kh\":\"PV150 Power Bank\"}}', 18, NULL, NULL, '[\"71044_1498014670.jpg\",\"59847_1498014670.jpg\",\"15921_1498014670.jpg\",\"11319_1498014670.jpg\",\"67315_1498014670.jpg\"]', 1, '2017-06-20 20:16:00', '2017-06-20 20:16:00'),
(36, 33, 1, NULL, '', 'SC660H External SSD', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 256GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Titanium</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">&nbsp;: 120 x 76 x 9.6 mm / 4.7 x 3.0 x 0.38\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 73g / 2.6oz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Texture</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Metal/plastic</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.1,backward compatible with USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">\r\n            : Read: up to 440MB/s<br>&nbsp;Write: up to 430MB/s<br>\r\n            *Performance may vary based on SSD capacity, hardware test \r\nplatform, test software, operating system and other variables<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Operating system requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">\r\n            : Windows XP/Vista/7/8/8.1/10<br>&nbsp;\r\n            Mac OS X 10.6 or later<br>&nbsp;Linux Kernel 2.6 or later<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 5°C (41°F) to 50°C (121°F)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Operating voltage</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DC 5V, 900mA</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 3.1 cable, quick start guide</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 3 years</td></p>', '{\"lang\":{\"kh\":\"SC660H External SSD\"}}', 107, NULL, NULL, '[\"94845_1498015115.jpg\",\"58228_1498015115.jpg\",\"58965_1498015115.jpg\",\"11575_1498015115.jpg\"]', 1, '2017-06-20 20:21:21', '2017-06-20 20:21:21'),
(37, 18, 1, NULL, '', 'PT100 Power Bank', '<p>- Capacity&nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>10000mAh (Rechargeable Lithium-ion battery)</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Black / White</p><p>- Dimensions&nbsp; &nbsp; : (L x W x H)<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>140 x 63 x 21.5mm (5.5 x 2.5 x 0.8\")</p><p>- Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;285g (10.1oz)</p><p>- Input&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;DC 5V/2A (Micro USB)</p><p>- Output&nbsp; &nbsp; &nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>DC 5V / 1A (USB-A)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DC 5V / 2.1A max (USB-A)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Micro USB cable , User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>1 year</p>', '{\"lang\":{\"kh\":\"PT100 Power Bank\"}}', 18, NULL, NULL, '[\"79706_1498015162.jpg\",\"27745_1498015163.jpg\",\"67405_1498015164.jpg\",\"74810_1498015164.jpg\",\"53122_1498015165.jpg\",\"97775_1498015165.jpg\"]', 1, '2017-06-20 20:22:19', '2017-06-20 20:22:19'),
(38, 33, 1, NULL, '', 'HD700 External SSD', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">Black/Yellow</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 256GB</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 83.5 x 83.5 x 13.9 mm / 3.3 x 3.3 x 0.5\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 75g / 2.6oz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.1 Gen 1</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">\r\n            : Read : Up to 440MB/s<br>\r\n            : Write : Up to 430MB/s<br>\r\n            *Performance may vary based on SSD capacity, hardware test \r\nplatform, test software, operating system and other system variables.<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating system : requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">Windows XP/Vista/7/8/8.1/10<br>\r\n            Mac OS X 10.6 or later<br>\r\n            Linux Kernel 2.6 or later<br>\r\n            Android 5.0 or later</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Op. Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 5°C (41°F) to 50°C (122°F)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Op. Voltage</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: DC 5V, 900mA</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.1 Gen 1 cable, Quick Start Guide</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 3 years</td></p>', '{\"lang\":{\"kh\":\"HD700 External SSD\"}}', 110, NULL, NULL, '[\"94084_1498015526.jpg\",\"77300_1498015526.jpg\",\"40621_1498015526.jpg\",\"23212_1498015526.jpg\"]', 1, '2017-06-20 20:28:51', '2017-06-20 20:28:51'),
(39, 18, 1, NULL, '', 'PC500 Power Bank', '<p>- Capacity&nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>5000mAh (Lithium-ion rechargeable battery 36Wh)</p><p>- Colors<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;Sky Blue / Pink</p><p>- Accessory&nbsp; : &nbsp;Micro USB Cable; User Manual</p><p>- Warranty&nbsp; &nbsp; : &nbsp;1 Year</p>', '{\"lang\":{\"kh\":\"PC500 Power Bank\"}}', 22, NULL, NULL, '[\"76316_1498015576.jpg\",\"45927_1498015576.jpg\",\"91765_1498015577.jpg\",\"22434_1498015577.jpg\"]', 1, '2017-06-20 20:31:36', '2017-06-20 20:31:36'),
(40, 33, 1, NULL, '', 'HV620 External SSD', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 240GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Titanium</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 115 x 78 x 11.5mm / 4.5 x 3.0 x 0.4\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 76g / 2.7oz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Texture</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Plastic</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.1,backward compatible with USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">\r\n            : Read : up to 440MB/s<br>\r\n            &nbsp;Write : up to 430MB/s<br>\r\n            *Performance may vary based on SSD capacity, hardware test \r\nplatform, test software, operating system and other variables<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Operating system requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">\r\n            : Windows XP/Vista/7/8/8.1/10<br>&nbsp;\r\n            Mac OS X 10.6 or later<br>&nbsp;\r\n            Linux Kernel 2.6 or later<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Op. Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 5°C (41°F) to 50°C (121°F)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Operating voltage</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DC 5V, 900mA</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 3.1 cable; Quick Start Guide</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 3 years</td></p>', '{\"lang\":{\"kh\":\"HV620 External SSD\"}}', 95, NULL, NULL, '[\"44184_1498015867.jpg\",\"70966_1498015867.jpg\",\"83304_1498015867.jpg\",\"51246_1498015867.jpg\",\"71272_1498015867.jpg\"]', 1, '2017-06-20 20:34:19', '2017-06-20 20:34:19');
INSERT INTO `items` (`id`, `category_id`, `brand_id`, `code`, `url_detail`, `title`, `description`, `option`, `start_price`, `promotion_price`, `promotion_expire_date`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(41, 18, 1, NULL, '', 'PV100 Power Bank', '<p>- Capacity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;<span class=\"Apple-tab-span\" style=\"white-space:pre\"></span>4200mAh (Lithium-ion rechargeable battery 36Wh)</p><p>- Colors<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;Black / White / Blue / Pink</p><p>- Accessory<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp; : &nbsp;Micro USB Cable; User Manual</p><p>- Warranty<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp; : &nbsp;1 Year</p>', '{\"lang\":{\"kh\":\"PV100 Power Bank\"}}', 18, NULL, NULL, '[\"41194_1498016049.jpg\",\"77526_1498016050.jpg\",\"21142_1498016050.jpg\",\"81000_1498016050.jpg\"]', 1, '2017-06-20 20:36:56', '2017-06-20 20:36:56'),
(42, 33, 1, NULL, '', 'SE730 External SSD', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 250GB</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Gold/Red</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 72.7 x 44 x 12.2mm / 2.8 x 1.7 x 0.4\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 33g (1.1oz)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.1 Gen 2 Type-C</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Performance</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">\r\n            : 250GB Performance (ATTO) :<br>\r\n            : Read : Up to 500MB/s<br>\r\n            : Write : Up to 450MB/s<br>\r\n            *Performance may vary based on SSD capacity, hardware test \r\nplatform, test software, operating system and other system variables.<br>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating system requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Windows XP/Vista/7/8/8.1/10<br>\r\n            &nbsp;Mac OS X 10.6 or later<br>\r\n            &nbsp;Linux Kernel 2.6 or later<br>\r\n            &nbsp;Android 5.0 or later</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Op. Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 5°C (41°F) to 50°C (122°F)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Op. Voltage</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: DC 5V, 900mA</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB 3.1 Gen 2 cable, Quick Start Guide</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 3 years</td></p>', '{\"lang\":{\"kh\":\"SE730 External SSD\"}}', 125, NULL, NULL, '[\"70334_1498016176.jpg\",\"70148_1498016176.jpg\",\"90572_1498016176.jpg\",\"35442_1498016176.jpg\",\"57449_1498016176.jpg\"]', 1, '2017-06-20 20:41:42', '2017-06-20 20:41:42'),
(43, 33, 1, NULL, '', 'External Hard Disk Box', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Color</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Red</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Compatibility</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 7mm/9.5mm, HDD/SSD</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 125 x 90 x 17 mm / 4.5 x 3.5 x 0.6\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 69g / 2.4oz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- External Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: SATA 3.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Internal Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 3.1, backward compatible with USB 2.0</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Controller</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: JMS578</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating system&nbsp; requirements</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Windows XP/Vista/7/8/8.1/10<br>\r\n            &nbsp; Mac OS X 10.6 or later<br>\r\n            &nbsp; Linux Kernel 2.6 or later</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Operating Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 5°C (41°F) to 50°C (122°F)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: USB 3.1 Gen 1 cable</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 1 year</td></p>', '{\"lang\":{\"kh\":\"External Hard Disk Box\"}}', NULL, NULL, NULL, '[\"72790_1498016715.jpg\",\"36331_1498016715.jpg\",\"70242_1498016715.jpg\",\"86088_1498016714.jpg\"]', 1, '2017-06-20 20:47:50', '2017-06-20 20:47:50'),
(44, 18, 1, NULL, '', 'P12500 Power Bank', '<p>- Capacity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;: &nbsp;12500mAh (Rechargeable Lithium-ion battery 45Wh)</p><p>- Colors<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: &nbsp;Black/White</p><p>- Dimensions&nbsp; &nbsp; :&nbsp; (L x W x H)<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>141 x 63.5 x 22.5 mm / 5.5 x 2.5 x 0.9 in</p><p>- Weight<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;295g / 10.4oz</p><p>- Input<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;DC 5V/2A (Micro USB)</p><p>- Output&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>DC 5V/2.1A max. (Type-A USB)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Micro USB Cable; User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>1 year</p>', '{\"lang\":{\"kh\":\"P12500 Power Bank\"}}', 23, NULL, NULL, '[\"19900_1498017554.jpg\",\"30142_1498017554.jpg\",\"21209_1498017555.jpg\",\"25888_1498017555.jpg\"]', 1, '2017-06-20 21:01:18', '2017-06-20 21:01:18'),
(45, 31, 2, NULL, '', 'GA-H97M-Gaming 3', NULL, '{\"lang\":{\"kh\":\"GA-H97M-Gaming 3\"}}', 139, NULL, NULL, '[\"36542_1498018410.jpg\",\"22809_1498018409.jpg\",\"20445_1498018410.jpg\",\"85809_1498018410.jpg\",\"82577_1498018410.jpg\",\"34210_1498018410.jpg\"]', 1, '2017-06-20 21:14:00', '2017-06-20 21:14:00'),
(46, 40, 1, NULL, '', 'RC300  Car Camera', '<p>- Sensor<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;1/3” CMOS</p><p>- Resolution<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;:&nbsp;3 Mega-pixel</p><p>- Display<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;2.0” LCD</p><p>- Controller IC<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Novatek96650</p><p>Storage<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span> microSD card (Max.128GB)</p><p>Camera Lens<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>6G+1</p><p>View Angle<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>140°</p><p>Aperture<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>F/2.0</p><p>Video Format<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>MOV(H.264)</p><p>1080FHD(1920x1080) / 720P(1280x720) / WVGA(848x480P) / VGA(640x480)</p><p>Image Format<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>JPEG</p><p>12M(4032x3024) / 10M(3648x2736) / 8M(3264x2448) / 5M(2592x1944) / 3M(2048x1536) / 2MHD(1920x1080) / VGA(640x480) / 1.3M(1280x960)</p><p>Audio<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Built-in MIC / Speaker</p><p>Loop Recording<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>OFF / 1 / 3 / 5 minutes</p><p>USB<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>USB2.0（High-Speed)</p><p>Video Out<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>AV out (NTSC/PAL)</p><p>HDMI out (Max. 1920x1080 P50 or 1920x1080 P60)</p><p>Battery<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Built-in 300mAh±10mAh Battery</p><p>Power Supply<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Input DC 12V/24V</p><p>Output DC 5V, 1A</p><p>Operating Temp.<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>-20°C(-4°F)-70°C(158°F)</p><p>Dimension<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>64 x 54 x 30 mm</p><p>Weight<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>50g</p><p>Certification<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>CE, FCC, BSMI</p><p>Warranty<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>1 year</p>', '{\"lang\":{\"kh\":\"RC300 Car Camera\"}}', 85, NULL, NULL, '[\"63817_1498018364.jpg\",\"83602_1498018365.jpg\"]', 1, '2017-06-20 21:14:43', '2017-06-20 21:14:43'),
(47, 8, 1, NULL, '', 'SX930 SSD HDD', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 120GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Form Factor</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 2.5\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- NAND Flash</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Synchronous MLC Plus</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Controller</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: JMicron JMF670H&nbsp;</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)&nbsp;</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 100.45 x 69.85 x 7mm</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 58g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: SATA 6Gb/s</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Performance(Max)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\"><br>\r\n            120GB Performance (ATTO)<br>\r\n            Read: Up to 560MB/s<br>\r\n            Write: Up to 460MB/s<br>\r\n            *Performance may vary based on SSD capacity, hardware test \r\nplatform, test software, operating system and other system variables.&nbsp;<br>\r\n            &nbsp;</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Operating temperature</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: 0~70°C</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Storage temperature</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: -40~85°C</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Shock resistance</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: 1500G/0.5ms&nbsp;</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- MTBF</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">: 1,500,000 hours&nbsp;&nbsp;</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Accessories</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">\r\n            : 2.5” to 3.5” Bracket<br>\r\n            : 7mm to 9.5mm holder<br>\r\n            : Acronis ATI HD 2013<br>\r\n            </td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_0_h10\" align=\"left\">\r\n            <span style=\"font-size: smaller\">: 5 years<br>\r\n            </span><span style=\"font-size: x-small\">&nbsp;5 years</span></td></p>', '{\"lang\":{\"kh\":\"SX930 SSD HDD\"}}', 75, NULL, NULL, '[\"97758_1498101055.jpg\",\"94778_1498101055.jpg\",\"25508_1498101055.jpg\"]', 1, '2017-06-21 20:14:22', '2017-06-21 20:14:22'),
(48, 8, 1, NULL, '', 'SU800 SSD HDD', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 256GB<br></td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Form Factor</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 2.5\"</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- NAND Flash</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 3D TLC</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Controller</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: SMI</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)&nbsp;</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 100.45 x 69.85 x 7mm</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 47.5g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: SATA 6Gb/s</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Sequential R/W - performance (max)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Up to 560/520MB/s<br>\r\n            *Actual performance may vary due to available SSD capacity, \r\nsystem hardware and software components, and other factors</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Operating temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 0°C-70°C</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Storage temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: -40°C-85°C</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Shock resistance</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 1500G/0.5ms</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- MTBF</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 2,000,000 hours</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 3 years</td></p>', '{\"lang\":{\"kh\":\"SU800 SSD HDD\"}}', 105, NULL, NULL, '[\"51541_1498101384.jpg\",\"53254_1498101384.jpg\",\"33923_1498101383.jpg\",\"33208_1498101383.jpg\",\"74445_1498101384.jpg\",\"40584_1498101384.jpg\"]', 1, '2017-06-21 20:21:28', '2017-06-21 20:21:28'),
(49, 15, 1, NULL, '', 'Micro USB cable', '<p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : <span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;Black、Blue、Purple、Red、Gold、Silver、Rose Gold</p><p>- Length<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;100cm</p><p>- Weight<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;19.5g</p><p>- Interface&nbsp; &nbsp; : &nbsp;Micro USB and USB type A</p><p>- Warranty &nbsp; &nbsp;: &nbsp;1 Year</p>', '{\"lang\":{\"kh\":\"Micro USB cable\"}}', 5, NULL, NULL, '[\"42297_1498101613.jpg\",\"88854_1498101614.jpg\",\"19998_1498101614.jpg\",\"53785_1498101615.jpg\",\"79866_1498101615.jpg\",\"66293_1498101616.jpg\"]', 1, '2017-06-21 20:23:20', '2017-06-21 20:23:20'),
(50, 8, 1, NULL, '', 'SP920 SSD HDD', '<p>\r\n						\r\n					\r\n					\r\n					\r\n					\r\n					\r\n						\r\n    \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 128GB/256GB/512GB/1TB</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Form Factor</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 2.5 inch</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- NAND Flash</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Synchronous MLC</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Controller</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Marvell</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 100.45 x 69.85 x 7mm</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Weight</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 28GB/256GB 38g ; 512G/1TB 68g</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: SATA 6Gb/sec&nbsp;</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" align=\"left\">\r\n            - Performance<br>\r\n            </td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">\r\n            <br>\r\n            <span style=\"text-indent: 2pt\">128GB Performance (ATTO) :<br>\r\n            </span>Read : Up to 540MB/s<br>\r\n            Write : Up to 160MB/s</td></p><p><td class=\"adata_table_line_x_h10\" align=\"left\">- Warranty &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 3 Years<br></td></p>', '{\"lang\":{\"kh\":\"SP920 SSD HDD\"}}', 80, NULL, NULL, '[\"24929_1498101737.jpg\",\"44886_1498101737.jpg\",\"50308_1498101737.jpg\",\"21638_1498101737.jpg\",\"85460_1498101737.jpg\",\"15140_1498101737.jpg\"]', 1, '2017-06-21 20:28:17', '2017-06-21 20:28:17'),
(51, 15, 1, NULL, '', 'Lightning Cable', '<p>- Interface&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span> Lightning and USB / 2-in-1: Lightning, microUSB, USB</p><p>- Length<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 100cm</p><p>- Weight<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;(TPE)18g / (Aluminum-casing)19.5g / (2-in-1)17.5g</p><p>- Warranty<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 1 Year</p>', '{\"lang\":{\"kh\":\"Lightning Cable\"}}', 8, NULL, NULL, '[\"70057_1498102109.jpg\",\"57801_1498102109.jpg\",\"19789_1498102110.jpg\",\"38103_1498102110.jpg\",\"65660_1498102111.jpg\"]', 1, '2017-06-21 20:32:51', '2017-06-21 20:32:51'),
(52, 15, 1, NULL, '', 'USB-C 2.0 Cable', '<p>- Interface<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp; &nbsp; : &nbsp;USB-C 2.0</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;White</p><p>- Length<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;100cm</p><p>- Texture<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;Aluminum-Casing+Plastic</p><p>- Performance&nbsp; &nbsp;: &nbsp;480Mbps</p><p>- Warranty<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;1 year</p>', '{\"lang\":{\"kh\":\"USB-C 2.0 Cable\"}}', 12, NULL, NULL, '[\"36784_1498102694.jpg\",\"84847_1498102694.jpg\",\"75901_1498102694.jpg\"]', 1, '2017-06-21 20:40:16', '2017-06-21 20:40:16'),
(53, 4, 1, NULL, '', 'DDR4 2400MHz RAM', '<p>- Module Type\r\n            : U-DIMM<br>- Form Factor\r\n            : standard 1.23\" height<br>\r\n        \r\n        \r\n            - Memory Type\r\n            : DDR4<br>\r\n        \r\n        \r\n            - Standard\r\n            : JEDEC<br>\r\n        \r\n        \r\n            - Interface\r\n            : 288-pin\r\n        \r\n        \r\n            <br>- Density\r\n            : 8GB<br>\r\n        \r\n        \r\n            - Speed\r\n            : 2400MHz<br>\r\n        \r\n        \r\n            - Power supply\r\n            : VDD and VDDQ = 1.2V±0.06V\r\n        \r\n        \r\n            <br>- DRAM activation power <br>- supply\r\n            &nbsp;: VPP= 2.5V (+0.25V / -0.125V)<br>\r\n        \r\n        \r\n            - DRAM spec/VCC\r\n            : DDR4 STD 1.2V<br>\r\n        \r\n        \r\n            - Operating temperature\r\n            : 0°C to 85°C\r\n        \r\n        \r\n            <br>- Warranty\r\n            : Lifetime</p>', '{\"lang\":{\"kh\":\"DDR4 2400MHz RAM\"}}', 68, NULL, NULL, '[\"52742_1498102908.jpg\"]', 1, '2017-06-21 20:42:09', '2017-06-21 20:44:08'),
(54, 15, 1, NULL, '', 'USB-C 3.1 Cable', '<p>- Interface<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp; &nbsp; : &nbsp;USB-C 3.1</p><p>- Colors<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;White</p><p>- Length<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;100cm</p><p>- Texture&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Aluminum-Casing+Plastic</p><p>- Performance&nbsp; &nbsp;: &nbsp;5Gbps</p><p>- Warranty<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp; &nbsp; : &nbsp;1 year</p>', '{\"lang\":{\"kh\":\"USB-C 3.1 Cable\"}}', 13, NULL, NULL, '[\"92754_1498102928.jpg\",\"89061_1498102928.jpg\",\"59454_1498102928.jpg\"]', 1, '2017-06-21 20:43:47', '2017-06-21 20:43:47'),
(55, 15, 1, NULL, '', 'USB-C HUB', '<p>- Interface<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp; &nbsp; : &nbsp;USB-C, USB-A 3.1 and HDMI</p><p>- Colors<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;White</p><p>- Dimensions (L x W x H)<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>:&nbsp;158 x 60 x 12 mm</p><p>- Texture<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;Plastic</p><p>- Performance&nbsp; : &nbsp;5Gbps</p><p>- Warranty<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>&nbsp; &nbsp; : &nbsp;1 year</p>', '{\"lang\":{\"kh\":\"USB-C HUB\"}}', 45, NULL, NULL, '[\"13352_1498103229.jpg\",\"46574_1498103229.jpg\",\"22651_1498103229.jpg\"]', 1, '2017-06-21 20:50:09', '2017-06-21 20:50:09'),
(56, 4, 1, NULL, '', 'DDR4 2133MHz RAM', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Suitable for</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Desktop PC</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Module Specification</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 288 Pin Unbuffered-DIMM</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Density</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 4GB<br></td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Power Supply</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: VDD&amp;VDDQ=1.2V +0.06/- 0.06V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- DRAM Activation Power - Supply</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: VPP= 2.5V (2.375V min , 2.75 max)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">&nbsp;&nbsp; DRAM Spec/VCC</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DDR4 STD 1.2V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 0°C to +85°C</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Limited Lifetime Warranty</td></p>', '{\"lang\":{\"kh\":\"DDR4 2133MHz RAM\"}}', 38, NULL, NULL, '[\"55392_1498103318.jpg\"]', 1, '2017-06-21 20:51:26', '2017-06-21 20:51:26'),
(57, 15, 1, NULL, '', 'USB-C TO HDMI ADAPTER', '<tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: USB-C and HDMI</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Colors</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: White</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Dimensions (L x W x H)</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 149 x W 25.5 x 12.6 mm</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Texture</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: Plastic</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Pixel</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 4K UltraHD</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: 1 year</td>', '{\"lang\":{\"kh\":\"USB-C TO HDMI ADAPTER\"}}', 30, NULL, NULL, '[\"93278_1498103873.jpg\",\"38442_1498103873.jpg\",\"73287_1498103873.jpg\"]', 1, '2017-06-21 21:06:05', '2017-06-21 21:09:42'),
(58, 4, 1, NULL, '', 'DDR4 2400MHz RAM', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Module Type</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: SO-DIMM</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Form Factor</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: standard 1.18\" height</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Memory Type</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DDR4</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Standard</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: JEDEC</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 260-pin</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Density</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 4GB / 8GB / 16GB</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Speed</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 2400MHz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Power supply</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: VDD and VDDQ = 1.2V±0.06V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- DRAM activation power&nbsp; supply</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: VPP= 2.5V (+0.25V / -0.125V)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- DRAM spec/VCC</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DDR4 STD 1.2V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operating temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 0°C to 85°C</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: Lifetime</td></p>', '{\"lang\":{\"kh\":\"DDR4 2400MHz RAM\"}}', 69, NULL, NULL, '[\"83529_1498104231.jpg\"]', 1, '2017-06-21 21:06:42', '2017-06-21 21:06:42'),
(59, 4, 1, NULL, '', 'DDR4 2133MHz RAM', '<p><td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Module Type</td>\r\n            <td class=\"adata_table_line_x_h10\" width=\"647\" align=\"left\">: SO-DIMM</td>\r\n        \r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Form Factor</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: standard 1.18\" height</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Memory Type</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DDR4</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Standard</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: JEDEC</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Interface</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 260-pin</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Capacity</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 4GB / 8GB</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Speed</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: 2133MHz</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Power Supply</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: VDD &amp; VDDQ = 1.2V±0.06V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- DRAM Activation Power Supply</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: VPP= 2.5V (+0.25V / -0.125V)</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- DRAM Spec/VCC</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: DDR4 STD 1.2V</td>\r\n        </tr>\r\n        <tr>\r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Operation Temperature</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">&nbsp;: 0°C to 85°C</td>\r\n        </tr>\r\n        \r\n            <td class=\"adata_table_title13_bg_gray_line\" width=\"171\" align=\"left\">- Warranty</td>\r\n            <td class=\"adata_table_line_x_h10\" align=\"left\">: limited lifetime warranty</td></p>', '{\"lang\":{\"kh\":\"DDR4 2133MHz RAM\"}}', 38, NULL, NULL, '[\"75524_1498104724.jpg\"]', 1, '2017-06-21 21:14:05', '2017-06-21 21:14:05'),
(60, 5, 2, NULL, '#', 'GTX 1060 G1 Gaming', '<div class=\"sp-section Specification-section\">\r\n                <ul class=\"display-table\"><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Process Technology &nbsp;&nbsp; : 16 nm\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Clock &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 8008 MHz\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Size &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : 6 GB\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : GDDR5\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Bus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 192 bit\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Card Bus &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : PCI-E 3.0 x 16\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Output</div>\r\n                                    <div class=\"display-table-cell\">&nbsp;&nbsp;&nbsp;&nbsp; <br></div></li></ul>\r\n            </div>', '{\"lang\":{\"kh\":\"GTX 1060 G1 Gaming\"}}', 0, NULL, NULL, '[\"80033_1498187466.jpg\",\"25065_1498187466.jpg\",\"15687_1498187467.jpg\",\"24045_1498187466.jpg\"]', 1, '2017-06-22 20:18:52', '2017-07-19 01:16:55'),
(61, 5, 2, NULL, '', 'GTX 1070 G1 Gaming', '<div class=\"sp-section Specification-section\">\r\n                <ul class=\"display-table\"><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Graphics Processing : GeForce® GTX 1070\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Core Clock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; Boost: 1822 MHz/ Base: 1620 MHz in OC Mode<br></div><div class=\"display-table-cell\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Boost: 1784 MHz/ Base: 1594 MHz in Gaming Mode</div>\r\n                                </li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Process Technology : 16 nm\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Clock : 8008 MHz\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Size : 8 GB\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Type : GDDR5\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Memory Bus : 256 bit\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Card Bus : PCI-E 3.0 x 16\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Output</div>\r\n                                    <div class=\"display-table-cell\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dual-link DVI-D *1 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDMI-2.0b*1 (Max Resolution:  4096x2160 @60 Hz)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\nDisplay Port-1.4 *3 (Max Resolution: 7680x4320  @60 Hz)</div>\r\n                                </li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Digital max resolution : 7680x4320\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Multi-view : 4\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Card size : H=41 L=280 W=114 mm\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">PCB Form : ATX\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">DirectX : 12\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">OpenGL : 4.5\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Recommended PSU : 500W\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">Power Connectors : 8 pin*1\r\n                                </div></li><li class=\"display-table-row black\">\r\n                                    <div class=\"display-table-cell item\">SLI support : 2-way SLI HB\r\n                                </div></li></ul>\r\n            </div>', '{\"lang\":{\"kh\":\"GTX 1070 G1 Gaming\"}}', 0, NULL, NULL, '[\"89280_1498187989.jpg\",\"97380_1498187989.jpg\",\"62456_1498187989.jpg\",\"96407_1498187989.jpg\"]', 1, '2017-06-22 20:28:04', '2017-06-22 20:28:04'),
(62, 5, 2, NULL, NULL, 'GTX 1080 G1 Gaming', '<div class=\"section-right\"><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Powered by GeForce® GTX 1080</span><br><div class=\"summary\"><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; - Integrated with 8GB GDDR5X  256bit memory  </span><br><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; - WINDFORCE 3X with Blade Fan Design </span><br><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Support up to 8K display @60Hz (requires 2*DP1.3 connectors) </span><br><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 16.8M Customizable Color </span><span style=\"background-color: inherit;\"><span style=\"color:#ff3300; font-size:20px;\"></span></span><br><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Boost: 1860 MHz / Base: 1721 MHz  in OC mode</span><br><span style=\"background-color: inherit;\"></span><span style=\"background-color: inherit;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Boost: 1835 MHz / Base: 1695 MHz  in Gaming mode</span></div></div>', '{\"lang\":{\"kh\":\"GTX 1080 G1 Gaming\"}}', 0, NULL, NULL, '[\"12338_1498188974.jpg\",\"91119_1498188974.jpg\",\"14954_1498188975.jpg\",\"99792_1498188974.jpg\",\"32125_1498188974.jpg\",\"78647_1498188974.jpg\"]', 1, '2017-06-22 20:36:25', '2017-07-19 01:18:05'),
(63, 12, 10, NULL, '', 'Case 303', NULL, '{\"lang\":{\"kh\":\"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b 303\"}}', 175, NULL, NULL, '[\"97965_1498530952.jpg\",\"14643_1498530952.jpg\",\"68667_1498530952.jpg\"]', 1, '2017-06-26 19:35:59', '2017-06-26 19:35:59'),
(64, 12, 10, NULL, '', 'Case 503', NULL, '{\"lang\":{\"kh\":\"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b 503\"}}', 125, NULL, NULL, '[\"59374_1498531005.jpg\",\"39921_1498531005.jpg\",\"25455_1498531005.jpg\"]', 1, '2017-06-26 19:38:04', '2017-06-26 19:38:04'),
(66, 12, 10, NULL, '', 'Case GT1', NULL, '{\"lang\":{\"kh\":\"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b GT1\"}}', 117, NULL, NULL, '[\"17239_1498531344.jpg\",\"92260_1498531344.jpg\",\"81583_1498531344.jpg\",\"58913_1498531343.jpg\"]', 1, '2017-06-26 19:42:27', '2017-06-26 19:42:27'),
(68, 12, 10, NULL, '', 'Case 509', NULL, '{\"lang\":{\"kh\":\"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b 509\"}}', 235, NULL, NULL, '[\"35372_1498531553.jpg\"]', 1, '2017-06-26 19:46:01', '2017-06-26 19:46:01'),
(69, 9, 10, NULL, '', 'C 750W', '<th>Model</th>\r\n			<td class=\"border_right\">C 750W</td>\r\n			<td class=\"main_model\"><br></td>\r\n		\r\n		<tr>\r\n			<th>Total Power</th>\r\n			<td class=\"border_right\">750W</td>\r\n			<td class=\"main_model\"><br></td>\r\n		</tr>\r\n		<tr>\r\n			<th>Material</th>\r\n			<td colspan=\"2\">Aluminium, SECC</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Type</th>\r\n			<td colspan=\"2\">ATX12V V2.4/<br>\r\n			EPS12V V2.92</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cable Management</th>\r\n			<td colspan=\"2\">Fully Modular</td>\r\n		</tr>\r\n		<tr>\r\n			<th>PFC</th>\r\n			<td colspan=\"2\">Active PFC ( &gt; 0.9)</td>\r\n		</tr>\r\n		<tr>\r\n			<th>80 PLUS</th>\r\n			<td colspan=\"2\">Platinum (up to 92%)</td>\r\n		</tr>\r\n		<tr>\r\n			<th>MTBF (Hours)</th>\r\n			<td colspan=\"2\">&gt; 100,000hr</td>\r\n		</tr>\r\n		<tr>\r\n			<th>AC Input</th>\r\n			<td colspan=\"2\">100 - 240Vac. 50 - 60Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Hold-up time (ms)</th>\r\n			<td colspan=\"2\">&gt;16ms</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Fan</th>\r\n			<td colspan=\"2\">120mm Hypro Bearing Fan</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Typical Fan Noise (dB)</th>\r\n			<td colspan=\"2\">&lt; 25dB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Operating Temperature Range (°C)</th>\r\n			<td colspan=\"2\">0~50 °C</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Full Protection</th>\r\n			<td colspan=\"2\">OCP/ OVP / UVP / SCP / OTP / OPP</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Safety Certifications</th>\r\n			<td colspan=\"2\">cTUVus / TUV / CB / BSMI / CE / FCC / EAC / RCM / CCC</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dimensions<br>\r\n			(L x W x D)</th>\r\n			<td colspan=\"2\">165 x 150 x 86mm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Package Dimensions<br>\r\n			(L x W x D)</th>\r\n			<td colspan=\"2\">225 x 350 x 135mm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Net Weight</th>\r\n			<td colspan=\"2\">3.0kg</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Gross Weight</th>\r\n			<td colspan=\"2\">3.5kg</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Warranty</th>\r\n			<td colspan=\"2\">2 Years</td>\r\n		</tr>\r\n		<tr class=\"border_top\">\r\n			<th rowspan=\"6\">Connector</th>\r\n			<th>24 Pin Motherboard</th>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<th>8 (4+4) Pin CPU</th>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<th>8 (6+2) Pin PCI-E</th>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>4 Pin Peripheral</th>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SATA</th>\r\n			<td>6</td>\r\n		</tr>\r\n		\r\n			<th>Floppy</th>\r\n			<td>2</td>', '{\"lang\":{\"kh\":null}}', 80, NULL, NULL, '[\"56629_1498531844.jpg\"]', 1, '2017-06-26 19:51:00', '2017-06-26 20:16:12');
INSERT INTO `items` (`id`, `category_id`, `brand_id`, `code`, `url_detail`, `title`, `description`, `option`, `start_price`, `promotion_price`, `promotion_expire_date`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(70, 9, 10, NULL, '', 'C 900W', '<th>Model</th>\r\n			<td class=\"border_right\">C 900W</td>\r\n			<td class=\"main_model\"><br></td>\r\n		\r\n		<tr>\r\n			<th>Total Power</th>\r\n			<td class=\"border_right\">900W</td>\r\n			<td class=\"main_model\"><br></td>\r\n		</tr>\r\n		<tr>\r\n			<th>Material</th>\r\n			<td colspan=\"2\">Aluminium, SECC</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Type</th>\r\n			<td colspan=\"2\">ATX12V V2.4/<br>\r\n			EPS12V V2.92</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cable Management</th>\r\n			<td colspan=\"2\">Fully Modular</td>\r\n		</tr>\r\n		<tr>\r\n			<th>PFC</th>\r\n			<td colspan=\"2\">Active PFC ( &gt; 0.9)</td>\r\n		</tr>\r\n		<tr>\r\n			<th>80 PLUS</th>\r\n			<td colspan=\"2\">Platinum (up to 92%)</td>\r\n		</tr>\r\n		<tr>\r\n			<th>MTBF (Hours)</th>\r\n			<td colspan=\"2\">&gt; 100,000hr</td>\r\n		</tr>\r\n		<tr>\r\n			<th>AC Input</th>\r\n			<td colspan=\"2\">100 - 240Vac. 50 - 60Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Hold-up time (ms)</th>\r\n			<td colspan=\"2\">&gt;16ms</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Fan</th>\r\n			<td colspan=\"2\">120mm Hypro Bearing Fan</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Typical Fan Noise (dB)</th>\r\n			<td colspan=\"2\">&lt; 25dB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Operating Temperature Range (°C)</th>\r\n			<td colspan=\"2\">0~50 °C</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Full Protection</th>\r\n			<td colspan=\"2\">OCP/ OVP / UVP / SCP / OTP / OPP</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Safety Certifications</th>\r\n			<td colspan=\"2\">cTUVus / TUV / CB / BSMI / CE / FCC / EAC / RCM / CCC</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dimensions<br>\r\n			(L x W x D)</th>\r\n			<td colspan=\"2\">165 x 150 x 86mm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Package Dimensions<br>\r\n			(L x W x D)</th>\r\n			<td colspan=\"2\">225 x 350 x 135mm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Net Weight</th>\r\n			<td colspan=\"2\">3.0kg</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Gross Weight</th>\r\n			<td colspan=\"2\">3.5kg</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Warranty</th>\r\n			<td colspan=\"2\">2 Years</td>\r\n		</tr>\r\n		<tr class=\"border_top\">\r\n			<th rowspan=\"6\">Connector</th>\r\n			<th>24 Pin Motherboard</th>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<th>8 (4+4) Pin CPU</th>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<th>8 (6+2) Pin PCI-E</th>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>4 Pin Peripheral</th>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SATA</th>\r\n			<td>6</td>\r\n		</tr>\r\n		\r\n			<th>Floppy</th>\r\n			<td>2</td>', '{\"lang\":{\"kh\":null}}', 235, NULL, NULL, '[\"37787_1498531932.jpg\"]', 1, '2017-06-26 19:55:38', '2017-06-26 20:15:37'),
(71, 41, 2, NULL, '', 'GB-BACE-3150', '<p>- Intel® Celeron® Processor N3150 up to 2.08GHz1<br>- Ram 4G<br>- HDD 500G<br>- VGA Resolution 1920 x 1200 @60 Hz<br>- HDMI Resolution 3840x2160 @ 30 Hz<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 1 x VGA , 1 x HDMI , 2 x USB 3.0 , 1 x RJ45 , 1 x DC-In , 1 x Kensington lockslot , 1 x headset phone jack , 1 x Mic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; phone jack<br>- Supports 2.5” thickness 7.0/9.5mm Hard Drives (1 x 6Gbps SATA3)<br>- Input: AC 100-240V Output: DC 19V/2.1A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- WIN7 64bit , WIN8.1 64bit , WIN10 64bit<br></p>', '{\"lang\":{\"kh\":\"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b GB-BACE-3150\"}}', 245, NULL, NULL, '[\"83411_1498532367.jpg\",\"88596_1498532367.jpg\",\"86303_1498532367.jpg\"]', 1, '2017-06-26 20:09:09', '2017-06-26 20:09:09'),
(72, 41, 2, NULL, '', 'GB-BSi3H- 6100', '<p>- Intel® Core™ i3-6100U 2.3GHz<br>- Ram 4G<br>- HDD 500G<br>- Gigabit LAN (Intel i219V) / Audio<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 4096 x 2160 @ 24Hz<br>- 1 x M.2 slot (2280_storage)<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 4 x USB 3.0 , 1 x head phone Jack , 1 x Mic phone Jack<br>- 1 x HDMI (1.4a) , 1 x Mini DisplayPort (1.2) , 1 x RJ45 , 1 x DC-In1 x lock slot<br>- Input: AC 100-240V Output: DC 19V/3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3165<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>- WIN7 32/64bit , WIN8.1 64bit , WIN10 64bit<br></p>', '{\"lang\":{\"kh\":null}}', 405, NULL, NULL, '[\"48683_1498533449.jpg\",\"97218_1498533449.jpg\",\"92296_1498533449.jpg\"]', 1, '2017-06-26 20:21:08', '2017-06-26 20:21:08'),
(73, 41, 2, NULL, '', 'GB-BSi5H-6200', '<p>- Intel® Core™ i5-6200U 2.3GHz ~ 2.8GHz<br>- Ram 4G<br>- HDD 500G<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 4096 x 2160 @ 24Hz<br>- 1 x M.2 slot (2280_storage) PCIe /SATA<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 2 x USB 3.0 , 1 x USB3.1 , 1 x USB 3.1 type C<br>- 1 x head phone jack with MIC<br>- 1 x HDMI , 1 x Mini DisplayPort , 1 x RJ45 , 1 x DC-In , 1 x lock slot<br>- Input: AC 100-240V , Output: DC 19V/3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3165<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>- WIN7 32/64bit , WIN8.1 64bit , WIN10 64bit<br></p>', '{\"lang\":{\"kh\":\"GB-BSi5H-6200\"}}', 495, NULL, NULL, '[\"43625_1498533705.jpg\",\"34579_1498533707.jpg\",\"20328_1498533710.jpg\",\"66730_1498533710.jpg\"]', 1, '2017-06-26 20:25:06', '2017-06-26 20:25:06'),
(74, 41, 2, NULL, '', 'GB-BKi5HA-7200', '<p>- Intel® Core™ i5-7200U 2.5GHz ~ 3.1GHz<br>- Ram 4G<br>- HDD 500G<br>- Gigabit LAN (Intel i219LM) / Audio<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 3840 x 2160 @ 60Hz<br>- 1 x M.2 slot (2280_storage) PCIe /SATA<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 1 x USB 3.1 type C / 1 x USB3.1 / 1 x head phone jack with MIC<br>- 1 x HDMI (2.0) / 1 x Mini DisplayPort (1.2) / 2 x USB 3.0 / 1 x RJ45 /1 x DC-In / 1 x Kensington lock slot<br>- Input: AC 100-240V Output: DC 19V 3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3168<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>&nbsp; WIN10 64bit<br></p>', '{\"lang\":{\"kh\":\"GB-BKi5HA-7200\"}}', 500, NULL, NULL, '[\"64346_1498534634.jpg\",\"95978_1498534634.jpg\",\"98025_1498534634.jpg\",\"33221_1498534633.jpg\"]', 1, '2017-06-26 20:38:46', '2017-06-26 20:38:46'),
(75, 41, 2, NULL, '', 'GB-BKi3HA-7100', '<p>- Intel® Core™ i3-7100U 2.4GHz<br>- Ram 4G<br>- HDD 500G<br>- Gigabit LAN (Intel i219LM) / Audio<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 3840 x 2160 @ 60Hz<br>- 1 x M.2 slot (2280_storage) PCIe /SATA<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 1 x USB 3.1 type C / 1 x USB3.1 / 1 x head phone jack with MIC<br>- 1 x HDMI (2.0) / 1 x Mini DisplayPort (1.2) / 2 x USB 3.0 / 1 x RJ45 /1 x DC-In / 1 x Kensington lock slot<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>- Input: AC 100-240V Output: DC 19V 3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3168<br>&nbsp; WIN10 64bit<br></p>', '{\"lang\":{\"kh\":\"GB-BKi3HA-7100\"}}', 415, NULL, NULL, '[\"58029_1498534804.jpg\",\"46050_1498534803.jpg\",\"27207_1498534803.jpg\",\"85701_1498534884.jpg\"]', 1, '2017-06-26 20:41:34', '2017-06-26 20:41:34'),
(76, 7, 14, '7900X X-series Processor', 'http://ark.intel.com/products/123613/Intel-Core-i9-7900X-X-series-Processor-13_75M-Cache-up-to-4_30-GHz', 'Intel Core i9-7900x X-Series Processor', '<p>Intel® Core™ i9-7900X X-series Processor<br>\r\n          13.75M Cache, up to 4.30 GHz 10 Core and 20 Threads <span class=\"price\">= $ 1,065</span><br></p>', '{\"lang\":{\"kh\":\"Intel\\u00ae Core\\u2122 i9-7900X X-series Processor\"}}', 1065, 1065, NULL, '[\"80504_1501212781.png\",\"23625_1501212781.jpg\"]', 1, '2017-07-27 20:34:40', '2017-07-27 20:37:44'),
(77, 7, 14, 'Intel® Core™ i7-6950X Processor Extreme Edition', 'https://ark.intel.com/products/94456/Intel-Core-i7-6950X-Processor-Extreme-Edition-25M-Cache-up-to-3_50-GHz', 'Intel® Core™ i7-6950X Processor Extreme Edition', '<p><b> </b>Intel® Core™ i7-6950X Processor Extreme Edition (25M Cache, up to 3.50 GHz) 20 threads <span class=\"price\">= $ 1,799</span>\r\n      <br></p><p class=\"txt\">- Intel® Core™ i7-6900K (20M Cache, up to 3.70 GHz) 16 threads <span class=\"price\">= $ 1,155</span></p><p class=\"txt\">- Intel® Core™ i7-6850K  (15M Cache, up to 3.80 GHz) 12 threads <span class=\"price\">= $ 699</span></p><p><br></p>', '{\"lang\":{\"kh\":\"Intel\\u00ae Core\\u2122 i7-6950X Processor Extreme Edition\"}}', 1799, 1799, NULL, '[\"12104_1501213447.jpg\",\"62331_1501213447.jpg\"]', 1, '2017-07-27 20:44:24', '2017-09-10 19:06:28'),
(78, 31, 2, '001', 'https://www.gigabyte.com/Motherboard/X399-AORUS-Gaming-7-rev-10#kf', 'X399 AORUS Gaming 7', '<div><div style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 36px; font-family: Arial, 微軟正黑體, \"Microsoft JhengHei\", 微軟雅黑體, \"Microsoft YaHei\", SimHei, メイリオ, Meiryo, \"ヒラギノ角ゴ Pro W3\", \"Hiragino Kaku Gothic Pro\", 新細明體, Arial, Verdana, Helvetica, sans-serif; font-size: 26px; vertical-align: baseline; color: rgb(255, 255, 255); background-color: rgb(0, 0, 0);\">AMD X399 Gaming motherboard with RGB Fusion, Digital LED strip support, Triple M.2 with Thermal Guard,120dB SNR ALC1220, Killer E2500 Gaming Network, Front & Rear USB 3.1 Gen 2 Type-C, Intel Dual Band 802.11ac WiFi+BT4.2</div></div>', '{\"lang\":{\"kh\":\"X399 AORUS Gaming 7\"}}', 400, 500, '2017-09-30', '[\"73149_1505096998.png\",\"61887_1505096998.png\"]', 1, '2017-09-10 19:31:04', '2017-09-10 19:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `item_brands`
--

CREATE TABLE `item_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `image_logo` text COLLATE utf8mb4_unicode_ci,
  `option` longtext COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_brands`
--

INSERT INTO `item_brands` (`id`, `brand_name`, `note`, `image_logo`, `option`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ADATA', 'Computer and phone', '44205_1497924824.png', 'adata', 1, '2017-06-12 20:50:36', '2017-06-19 19:13:45'),
(2, 'GIGABYTE', NULL, '51823_1497924605.png', 'GIGABYTE', 1, '2017-06-13 06:11:06', '2017-06-19 19:10:05'),
(3, 'SSK', NULL, '19997_1497924579.png', 'SSK', 1, '2017-06-13 06:11:31', '2017-06-19 19:09:39'),
(4, 'ASUS', NULL, '35720_1497924559.png', 'asus', 1, '2017-06-13 06:12:02', '2017-06-19 19:09:19'),
(5, 'COLORVIUS', NULL, '89942_1497924500.png', 'Colorvius', 1, '2017-06-13 06:13:42', '2017-06-19 19:08:20'),
(6, 'DELL', NULL, '63748_1497924406.png', 'dell', 1, '2017-06-13 06:14:10', '2017-06-19 19:06:46'),
(8, 'HOCO', NULL, '40065_1497924045.png', NULL, 1, '2017-06-13 06:14:54', '2017-06-19 19:00:45'),
(9, 'NANSIN', NULL, '53907_1497924008.png', NULL, 1, '2017-06-13 06:15:51', '2017-06-19 19:00:08'),
(10, 'INWIN', NULL, '14897_1497923983.png', NULL, 1, '2017-06-13 06:16:31', '2017-06-19 18:59:43'),
(11, 'Weifi', NULL, '76390_1497923918.png', NULL, 1, '2017-06-13 06:17:27', '2017-06-19 18:58:39'),
(13, 'VIEWSONIC', NULL, '70779_1497924339.png', 'VIEWSONIC', 1, '2017-06-19 19:05:39', '2017-06-19 19:05:39'),
(14, 'Intel', NULL, '58530_1497925305.png', 'Intel', 0, '2017-06-19 19:21:45', '2017-06-19 19:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT '0',
  `option` longtext COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `title`, `description`, `parent`, `option`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Computer Accessory', 'Computer', 0, '{\"lang\":{\"kh\":\"\\u1782\\u17d2\\u179a\\u17bf\\u1784\\u1794\\u1793\\u17d2\\u179b\\u17b6\\u179f\\u17cb \\u1780\\u17bb\\u17c6\\u1796\\u17d2\\u1799\\u17bc\\u1791\\u17d0\\u179a\"}}', NULL, 1, '2017-06-12 21:04:32', '2017-06-15 06:09:03'),
(4, 'RAM', NULL, 3, '{\"lang\":{\"kh\":\"RAM\"}}', '90339_1498536196.jpg', 1, '2017-06-13 04:48:38', '2017-06-26 21:03:16'),
(5, 'VGA', NULL, 3, '{\"lang\":{\"kh\":\"\\u179c\\u17b8\\u1787\\u17b8\\u17a2\\u17c1\"}}', '11274_1498536216.jpg', 1, '2017-06-13 05:51:45', '2017-06-26 21:03:37'),
(6, 'HDD', NULL, 3, '{\"lang\":{\"kh\":\"\\u17a0\\u17b6\\u178f\\u178c\\u17b8\\u179f\"}}', NULL, 1, '2017-06-13 05:53:34', '2017-06-13 05:53:34'),
(7, 'CPU', NULL, 3, '{\"lang\":{\"kh\":\"\\u179f\\u17ca\\u17b8\\u1797\\u17b8\\u1799\\u17bc\"}}', NULL, 1, '2017-06-13 05:54:05', '2017-06-13 05:54:05'),
(8, 'SSD', NULL, 3, '{\"lang\":{\"kh\":\"\\u17a2\\u17c1\\u179f \\u17a2\\u17c1\\u179f \\u178c\\u17b8\"}}', '35586_1498536261.jpg', 1, '2017-06-13 05:55:08', '2017-06-26 21:04:21'),
(9, 'Power Suply', NULL, 3, '{\"lang\":{\"kh\":\"\\u1795\\u17c5\\u179c\\u17d0\\u179a\\u179f\\u17ca\\u17bb\\u1794\\u1795\\u17d2\\u179b\\u17b6\\u1799\"}}', NULL, 1, '2017-06-13 05:56:01', '2017-06-13 05:56:01'),
(11, 'Mouse + Keybaord', NULL, 3, '{\"lang\":{\"kh\":\"\\u1798\\u17c9\\u17c5 \\u1793\\u17b7\\u1784 \\u1783\\u17b8\\u1794\\u178f\"}}', NULL, 1, '2017-06-13 05:58:51', '2017-06-13 05:58:51'),
(12, 'Case', NULL, 3, '{\"lang\":{\"kh\":\"\\u1792\\u17bb\\u1784\"}}', NULL, 1, '2017-06-13 05:59:38', '2017-06-13 05:59:38'),
(13, 'Phone Accessory', NULL, 0, '{\"lang\":{\"kh\":\"\\u1782\\u17d2\\u179a\\u17bf\\u1784\\u1794\\u1793\\u17d2\\u179b\\u17c7\\u1791\\u17bc\\u179a\\u179f\\u17d0\\u1796\\u17d2\\u1791\"}}', NULL, 1, '2017-06-13 06:00:53', '2017-06-13 06:00:53'),
(14, 'Case', NULL, 13, '{\"lang\":{\"kh\":\"\\u179f\\u17c6\\u1794\\u1780\"}}', NULL, 1, '2017-06-13 06:01:26', '2017-06-13 06:01:26'),
(15, 'Charge Cable', NULL, 13, '{\"lang\":{\"kh\":\"\\u1781\\u17d2\\u179f\\u17c2\\u179f\\u17b6\\u1780\"}}', NULL, 1, '2017-06-13 06:02:11', '2017-06-13 06:02:11'),
(16, 'Charger', NULL, 13, '{\"lang\":{\"kh\":\"\\u178a\\u17bb\\u17c6\\u179f\\u17b6\\u1780\"}}', NULL, 1, '2017-06-13 06:02:46', '2017-06-13 06:02:46'),
(17, 'Screen', NULL, 13, '{\"lang\":{\"kh\":\"\\u179f\\u17d2\\u179a\\u17d2\\u1782\\u17b8\\u1793\"}}', NULL, 1, '2017-06-13 06:03:16', '2017-06-13 06:03:16'),
(18, 'Power Bank', NULL, 13, '{\"lang\":{\"kh\":\"\\u1790\\u17d2\\u1798\\u1787\\u17bb\\u17c6\\u1793\\u17bd\\u1799\"}}', NULL, 1, '2017-06-13 06:04:34', '2017-06-13 06:04:34'),
(19, 'DESKTOPS', NULL, 0, '{\"lang\":{\"kh\":\"\\u1780\\u17bb\\u17c6\\u1796\\u17d2\\u1799\\u17bc\\u1791\\u17d0\\u179a\\u179b\\u17be\\u178f\\u17bb\"}}', NULL, 1, '2017-06-13 19:06:36', '2017-06-13 19:06:36'),
(23, 'Gamer', NULL, 19, '{\"lang\":{\"kh\":\"\\u17a0\\u17d2\\u1782\\u17c1\\u1798\"}}', NULL, 1, '2017-06-15 07:02:55', '2017-06-15 07:02:55'),
(24, 'Designer', NULL, 19, '{\"lang\":{\"kh\":\"\\u178c\\u17b8\\u179f\\u17b6\\u1789\"}}', NULL, 1, '2017-06-15 07:04:21', '2017-06-15 07:04:21'),
(25, 'Clone', NULL, 19, '{\"lang\":{\"kh\":\"\\u1780\\u17d2\\u179b\\u17bc\\u1793\"}}', NULL, 1, '2017-06-15 07:04:58', '2017-06-15 07:04:58'),
(26, 'Office', NULL, 20, '{\"lang\":{\"kh\":\"\\u1780\\u17b6\\u179a\\u17b7\\u1799\\u17b6\\u179b\\u17d0\\u1799\"}}', NULL, 0, '2017-06-15 07:05:59', '2017-06-15 07:05:59'),
(29, 'Speaker', NULL, 3, '{\"lang\":{\"kh\":\"\\u179f\\u17d2\\u1796\\u17b8\\u1780\\u1783\\u17d0\\u179a\"}}', NULL, 1, '2017-06-15 07:21:58', '2017-06-15 07:21:58'),
(31, 'Mother Board', NULL, 3, '{\"lang\":{\"kh\":\"\\u1798\\u17c9\\u17b6\\u179f\\u17ca\\u17b8\\u1793\"}}', '60685_1498535228.jpg', 1, '2017-06-19 18:34:50', '2017-06-26 20:47:08'),
(32, 'USB Flash Drive', NULL, 3, '{\"lang\":{\"kh\":\"\\u17a0\\u17d2\\u179b\\u17b6\\u179f \\u178a\\u17d2\\u179a\\u17b6\\u1799\"}}', '49120_1498535384.jpg', 1, '2017-06-19 18:35:37', '2017-06-26 20:49:46'),
(33, 'External', NULL, 3, '{\"lang\":{\"kh\":\"External\"}}', '91174_1498529432.jpg', 1, '2017-06-19 18:36:58', '2017-06-26 19:10:34'),
(34, 'Wire Cable', NULL, 3, '{\"lang\":{\"kh\":\"\\u1781\\u17d2\\u179f\\u17c2 VGA & HDMI\"}}', NULL, 1, '2017-06-19 18:39:12', '2017-06-19 18:39:12'),
(35, 'CD ROM', NULL, 3, '{\"lang\":{\"kh\":\"CD ROM\"}}', NULL, 1, '2017-06-19 18:52:03', '2017-06-19 18:52:03'),
(36, 'Monitor', NULL, 3, '{\"lang\":{\"kh\":\"\\u17a2\\u17c1\\u1780\\u17d2\\u179a\\u1784\\u17cb\"}}', NULL, 1, '2017-06-19 18:52:36', '2017-06-19 18:52:36'),
(37, 'Network Card', NULL, 3, '{\"lang\":{\"kh\":\"\\u178e\\u17c1\\u178f\\u179c\\u1780 \\u1780\\u17b6\\u178f\"}}', NULL, 1, '2017-06-19 18:53:27', '2017-06-19 18:53:27'),
(40, 'Car Camera', NULL, 13, '{\"lang\":{\"kh\":\"\\u1780\\u17b6\\u1798\\u17c1\\u179a\\u17c9\\u17b6\\u200b \\u17a1\\u17b6\\u1793\"}}', '51499_1498442831.jpg', 1, '2017-06-20 21:10:27', '2017-06-25 19:07:12'),
(41, 'Brix (Mini PC)', NULL, 3, '{\"lang\":{\"kh\":\"Brix (Mini PC)\"}}', NULL, 1, '2017-06-26 19:58:15', '2017-06-26 19:58:15'),
(42, 'lebtops', NULL, 0, '{\"lang\":{\"kh\":\"lebtop\"}}', NULL, 0, '2017-07-27 01:39:05', '2017-07-27 01:39:38'),
(43, 'Office', NULL, 42, '{\"lang\":{\"kh\":\"\\u1780\\u17b6\\u179a\\u17b7\\u1799\\u17b6\\u179b\\u17d0\\u1799\"}}', NULL, 1, '2017-07-27 21:21:09', '2017-07-27 21:21:09'),
(44, 'Gammer', NULL, 42, '{\"lang\":{\"kh\":\"Gammer\"}}', NULL, 1, '2017-07-27 21:21:35', '2017-07-27 21:21:35'),
(45, 'Designer', NULL, 42, '{\"lang\":{\"kh\":\"\\u178c\\u17b7\\u179f\\u17b6\\u1789\"}}', NULL, 1, '2017-07-27 21:22:07', '2017-07-27 21:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `item_category_details`
--

CREATE TABLE `item_category_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(11) DEFAULT '0',
  `category_id` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_features`
--

CREATE TABLE `item_features` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option` longtext COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_feature_details`
--

CREATE TABLE `item_feature_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(11) DEFAULT '0',
  `spec_id` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_spaces`
--

CREATE TABLE `item_spaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_spaces`
--

INSERT INTO `item_spaces` (`id`, `category_id`, `title`, `description`, `option`, `created_at`, `updated_at`) VALUES
(10, 4, 'SIZE', NULL, NULL, '2017-06-13 06:22:27', '2017-06-13 06:22:27'),
(11, 4, 'BUS', NULL, NULL, '2017-06-13 06:22:45', '2017-06-13 06:22:45'),
(12, 5, 'SIZE', NULL, NULL, '2017-06-13 06:22:58', '2017-06-13 06:22:58'),
(13, 6, 'SIZE', NULL, NULL, '2017-06-13 06:24:11', '2017-06-13 06:24:11'),
(14, 7, 'Genaretion', NULL, NULL, '2017-06-13 06:24:56', '2017-06-13 06:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `item_space_details`
--

CREATE TABLE `item_space_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(11) DEFAULT '0',
  `spec_id` int(11) DEFAULT '0',
  `spec_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_space_details`
--

INSERT INTO `item_space_details` (`id`, `item_id`, `spec_id`, `spec_value`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Core I7 7700k', '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(2, 2, 2, '32G', '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(3, 2, 3, '1000GB', '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(4, 2, 4, '256GB', '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(5, 2, 5, NULL, '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(6, 2, 6, 'INWIN', '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(7, 2, 7, 'X1', '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(8, 2, 8, NULL, '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(9, 2, 9, 'View Sonic', '2017-06-13 06:29:22', '2017-06-13 06:29:22'),
(10, 3, 10, '8GB', '2017-06-13 06:41:39', '2017-06-13 06:41:39'),
(11, 3, 11, '1600/2400/2333', '2017-06-13 06:41:39', '2017-06-13 06:41:39'),
(12, 4, 1, 'Core I7 7700k', '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(13, 4, 2, '32', '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(14, 4, 3, '1TB', '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(15, 4, 4, '512GB', '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(16, 4, 5, 'Z270 gaming 9', '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(17, 4, 6, NULL, '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(18, 4, 7, NULL, '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(19, 4, 8, NULL, '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(20, 4, 9, NULL, '2017-06-13 07:49:37', '2017-06-13 07:49:37'),
(21, 5, 14, NULL, '2017-06-13 18:56:17', '2017-06-13 18:56:17'),
(22, 6, 14, '7', '2017-06-19 20:23:57', '2017-06-19 20:23:57'),
(27, 53, 10, NULL, '2017-06-21 20:44:08', '2017-06-21 20:44:08'),
(28, 53, 11, NULL, '2017-06-21 20:44:08', '2017-06-21 20:44:08'),
(29, 56, 10, '4G', '2017-06-21 20:51:26', '2017-06-21 20:51:26'),
(30, 56, 11, '2133MHz', '2017-06-21 20:51:26', '2017-06-21 20:51:26'),
(31, 58, 10, '8G', '2017-06-21 21:06:42', '2017-06-21 21:06:42'),
(32, 58, 11, '2400MHz', '2017-06-21 21:06:42', '2017-06-21 21:06:42'),
(33, 59, 10, '38', '2017-06-21 21:14:05', '2017-06-21 21:14:05'),
(34, 59, 11, '2133MHz', '2017-06-21 21:14:05', '2017-06-21 21:14:05'),
(36, 61, 12, NULL, '2017-06-22 20:28:04', '2017-06-22 20:28:04'),
(38, 82, 14, '7', '2017-06-28 06:19:50', '2017-06-28 06:19:50'),
(43, 60, 12, '6G', '2017-07-19 01:16:55', '2017-07-19 01:16:55'),
(44, 62, 12, '8G', '2017-07-19 01:18:05', '2017-07-19 01:18:05'),
(47, 76, 14, '7th', '2017-07-27 20:37:44', '2017-07-27 20:37:44'),
(51, 77, 14, '7th', '2017-09-10 19:06:28', '2017-09-10 19:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_06_031802_create_item_features_table', 1),
(4, '2017_06_06_031828_create_item_categories_table', 1),
(5, '2017_06_06_032040_create_item_spaces_table', 1),
(6, '2017_06_06_032107_create_item_brands_table', 1),
(7, '2017_06_06_032206_create_item_space_details_table', 1),
(8, '2017_06_06_032229_create_item_feature_details_table', 1),
(9, '2017_06_06_032301_create_sale_order_details_table', 1),
(10, '2017_06_06_032313_create_sale_orders_table', 1),
(11, '2017_06_06_032443_create_items_table', 1),
(12, '2017_06_13_141936_create_item_category_details_table', 2),
(13, '2017_05_16_022252_create_web_settings_table', 3),
(14, '2017_06_24_145830_create_slides_table', 4),
(15, '2017_07_19_054915_create_whatnews_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_orders`
--

CREATE TABLE `sale_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT '0',
  `order_date` date DEFAULT NULL,
  `require_date` date DEFAULT NULL,
  `total_qty` double DEFAULT '0',
  `total_amount` double DEFAULT '0',
  `total_discount` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `delivery_address` text COLLATE utf8mb4_unicode_ci,
  `delivery_date` date DEFAULT NULL,
  `order_status` int(11) DEFAULT '1',
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_order_details`
--

CREATE TABLE `sale_order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `sale_order_id` int(11) DEFAULT '0',
  `item_id` int(11) DEFAULT '0',
  `qty` double DEFAULT '0',
  `price` double DEFAULT '0',
  `discount` double DEFAULT '0',
  `amount` double DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `slide_image` text COLLATE utf8mb4_unicode_ci,
  `status` int(91) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_title`, `video_url`, `slide_image`, `status`, `description`, `created_at`, `updated_at`) VALUES
(5, 'ADATA', NULL, '31114_1498443582.jpg', 1, NULL, '2017-06-25 19:19:43', '2017-06-25 19:19:43'),
(6, 'AORUS', NULL, '69796_1498443654.jpg', 1, 'Very Good', '2017-06-25 19:20:54', '2017-06-25 19:20:54'),
(8, 'GIGABITE', NULL, '60333_1498443742.jpg', 1, 'Very Good', '2017-06-25 19:22:22', '2017-06-25 19:22:22'),
(15, 'AORUS', NULL, '13724_1498446604.jpg', 1, 'Good', '2017-06-25 20:10:05', '2017-06-25 20:10:05'),
(16, 'ADATA', NULL, '80697_1498529383.jpg', 1, 'Very Good', '2017-06-26 19:09:44', '2017-06-26 19:09:44'),
(17, 'ADATA', NULL, '46315_1498529984.jpg', 1, 'Very Good', '2017-06-26 19:19:44', '2017-06-26 19:19:44'),
(18, 'ADATA', NULL, '40082_1498530009.jpg', 1, 'Very Good', '2017-06-26 19:20:09', '2017-06-26 19:20:09'),
(19, 'ADATA', NULL, '27492_1498530034.jpg', 1, 'Very Good', '2017-06-26 19:20:34', '2017-06-26 19:20:34'),
(22, 'ADATA', NULL, '26696_1498530140.jpg', 1, 'Very Good', '2017-06-26 19:22:20', '2017-06-26 19:22:20'),
(24, 'ADATA', NULL, '65198_1498530517.jpg', 1, 'Very Good', '2017-06-26 19:28:37', '2017-06-26 19:28:37'),
(25, 'ADATA', NULL, '88745_1498532368.jpg', 1, 'Very Good', '2017-06-26 19:59:29', '2017-06-26 19:59:29'),
(26, 'ADATA', NULL, '70445_1498532390.jpg', 1, 'Very Good', '2017-06-26 19:59:50', '2017-06-26 19:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'admin', 'admin@mct.com', '$2y$10$M8VE7IRZtlqcmHp9hW12OO1LEgQLA0YxjhUbO./dfyAwexKhI4Dim', 'admin', NULL, '2017-07-02 18:55:14', '2017-07-02 18:55:14'),
(11, 'Dany', 'Dany@yahoo.com', '$2y$10$3Oill1eP5hY8nudznGPTEeBkh6GiU1A3f0fhICVgipnMYZb.V7NBS', 'admin', NULL, '2017-07-03 19:35:38', '2017-07-03 19:35:38'),
(12, 'Linha', 'linha@k2.com', '$2y$10$yFR7yHQPxj4ifikjjuZd0eq2JSJ0nJrtQfodEyD/Gu4QOqQCG8vqm', 'admin', NULL, '2017-07-03 19:36:23', '2017-07-03 19:36:23'),
(13, 'darrath', 'darrath@k2.com', '$2y$10$kcRe8t4kM66QrdB4EzTGsOowU/TVqkrTzdAVq0QH6nPO45eW9qoCK', 'admin', NULL, '2017-07-03 19:37:00', '2017-07-03 19:37:00'),
(14, 'reach', 'reach@k2.com', '$2y$10$brD4/5sSEwi4gDx1mvOHSushWXhPkAEmr468F26koRrk4G.kXPki2', 'admin', NULL, '2017-07-03 19:37:21', '2017-07-03 19:37:21'),
(15, 'sale', 'sale@k2.com', '$2y$10$yOr205vLyMxiaM.TrxX2vOGvAQyFS2WFqS8JQ86bYZVqNHfz29gsC', 'user', NULL, '2017-07-03 19:41:25', '2017-07-03 19:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_value` text COLLATE utf8mb4_unicode_ci,
  `key_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `key`, `title`, `key_value`, `key_type`, `select_value`, `created_at`, `updated_at`) VALUES
(1, 'home-category', 'Home Category', '[\"5\",\"8\",\"31\",\"32\",\"33\"]', 'select', NULL, NULL, '2017-07-03 20:04:20'),
(2, 'product-category', 'PRODUCTS CATEGORY', '[\"4\",\"5\",\"7\",\"8\",\"31\"]', 'select', '', '0000-00-00 00:00:00', '2017-07-27 20:50:38'),
(3, 'email', 'E-mail', 'chhoy.dany@gmail.com', 'text', NULL, NULL, '2017-06-21 18:49:35'),
(4, 'address', 'Adress', 'Phnom Penh', 'text', NULL, NULL, '2017-06-21 18:49:42'),
(5, 'logo', 'Logo', '22617_1501143381.png', 'file', NULL, NULL, '2017-07-27 01:16:21'),
(6, 'phone_number', 'Phone_Number', '0967014246', 'text', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whatnews`
--

CREATE TABLE `whatnews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `option` longtext COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatnews`
--

INSERT INTO `whatnews` (`id`, `title`, `description`, `option`, `image_url`, `video_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ហេតុផល ៤ បង្ហាញ​ថា Laptop ធម្មតាជាជម្រើសល្អ​​ជាង Mac ​សម្រាប់​ការ​កាត់​​ត​', 'អ្នក​ដែល​ចង់​ទិញ​កុំព្យូទ័រ​យួរ​ដៃ​សម្រាប់​រៀន​កាត់​ត​វីដេអូ ឬ រូបភាព​ប្រហែល​ជា​មិន​ទាន់​សម្រេច​ចិត្ត​បាន​នៅ​ឡើយ​ទេ​ថា​គួរ​ទិញ​កុំព្យូទ័រ​ដើរ​ដោយ​ Windows ធម្មតា​ ឬ ទិញ​ពពួក MacBook របស់​ Apple នោះ។ ត​ទៅ​នេះ​នឹង​ប្រាប់​​ពី​ហេតុផល​ ៤ ដែល​បង្ហាញ​ថា​កុំព្យូទ័រ​យួរ​ដៃ​ធម្មតា​ ជា​ជម្រើស​ល្អ​ជាង MacBook សម្រាប់​ការ​កាត់​ត​វីដេអូ ឬ រូបភាព៖\r\n\r\n១. តម្លៃ\r\n\r\nបើ​មើល​លើ​កុំព្យូទ័រ​ធម្មតា​ដូច​ជា​ Dell XPS 15 ជា​ដើម​មាន​សមត្ថភាព​ប្រហាក់ប្រហែល​នឹង​ MacBook Pro ប៉ុន្តែ​តម្លៃ​របស់​វា​ថោក​ជាង​ MacBook Pro ដល់​ទៅ ១ ០០០ ដុល្លារ​ឯណោះ។\r\n\r\n២. រន្ធ​ដោត\r\n\r\nទោះ​បី​ជា MacBook Pro ​មាន​តម្លៃ​ថ្លៃ​ជាង​ ១ ០០០ ដុល្លារ​មែន​ ប៉ុន្តែ​អ្នក​ត្រូវ​ចំណាយ​លុយ​បន្ថែម​លើ​ការ​ទិញ​ឌុយ​សម្រាប់​ត​ភ្ជាប់​បន្ថែម​ដោយ​សារ​វា​មិន​មាន​រន្ធ​សម្រាប់​ដោត​មេមូរី​កាត​ដែល​ជា​រន្ធ​ដ៏​សំខាន់​មួយ ​និង មិន​មាន​រន្ធ​អ្វី​ផ្សេង​ទៀត​ក្រៅ​ពី​រន្ធ​ Thunderbolt 3 ចំនួន​ ៤ នោះ​ទេ។\r\n\r\n៣. អាច​ដំឡើង​ម៉ាស៊ីន​ឲ្យ​ខ្លាំង​បាន\r\n\r\nនៅ​លើ​កុំព្យូទ័រ Windows បើ​ចង់​ដំឡើង​លក្ខណៈ​សម្បត្តិ​ម៉ាស៊ីន​ឲ្យ​ខ្លាំង​គឺ​ជា​រឿង​ងាយ​ស្រួល ហើយ​ចំណាយ​ប្រាក់​អស់​មិន​ច្រើន​ឡើយ។ ដោយ​ឡែក​ចំពោះ​ MacBook វិញ​គឺ​ចំណាយ​ប្រាក់​អស់​ច្រើន​ ហើយ​ពិបាក​នឹង​ប្ដូរ​គ្រឿង​ទៀត​ ជា​ពិសេស​ MacBook ស៊េរី​ថ្មី​ព្រោះ​ថា​ Processor, RAM, SSD សុទ្ធ​តែ​បាន​ផ្សា​ភ្ជាប់​នឹង​ Motherboard។\r\n\r\n៤. អេក្រង់ Touch\r\n\r\nកុំព្យូទ័រ​ Windows ភាគ​ច្រើន​មាន​​អេក្រង់​សមត្ថភាព​ពិសេស​ដែល​​អាច​បញ្ជា​តាម​រយៈ​ម្រាម​ដៃ​បាន ប៉ុន្តែ​ចំណុច​ពិសេស​នេះ​គេ​នៅ​មិន​ទាន់​ឃើញ​មាន​នៅ​លើ​ MacBook នៅ​ឡើយ​ទេ។ ទោះ​បី​ជា​ MacBook ស៊េរី​ថ្មី​មាន​ខ្សែ​ Touch មួយ​ជួរ​មែន ប៉ុន្តែ​មិន​មាន​សមត្ថភាព​ពេញ​លេញ​ដូច​អេក្រង់ Touch ឡើយ។\r\n\r\n​​​​​​​​ ត្បិត​ថា​ចំណុច​ ៤ ខាង​លើ​​កុំព្យូទ័រ​យួរ​ដៃ​ធម្មតា​មាន​ប្រៀប​ជាង MacBook មែន​ ប៉ុន្តែ​​ MacBook របស់​ Apple មាន​ចំណុច​​ខ្លាំង​មួយ​ដែល​គេ​ទទួល​ស្គាល់​នោះ​គឺ​ម៉ាស៊ីន​មិន​សូវ​ជួប​បញ្ហា​ច្រើន​ដូច​ជា​កុំព្យូទ័រ​ដើរ​ដោយ​ Windows នោះ​ទេ។ ដូច​នេះ​ប្រសិន​បើ​អ្នក​មាន​ថវិកា​គ្រប់​គ្រាន់​ហើយ​មិន​ចង់​ប្រើ​កុំព្យូទ័រ​ដែល​ឧស្សាហ៍​ជួប​បញ្ហា​គួរ​យក​ MacBook ប៉ុន្តែ​បើ​សិន​ថវិកា​មិន​គ្រប់គ្រាន់​ទេ​អាច​ប្រើ​ត្រឹម​កុំព្យូទ័រ Windows ក៏​បាន​ដែរ៕​​\r\n\r\nចុចអាន៖\r\n\r\n    តិចនិច​​ធ្វើ​ឲ្យ​ផ្ទៃ​អេក្រង់​ ចេញ​រូប​ពស់​វា​ពេញហ្វេសបុក ការពិត​គេ​ធ្វើ​ចឹង​សោះ!\r\n\r\n    មក​ស្គាល់​​កំពូលកម្មវិធី​កម្ចាត់មេរោគ​ទាំង ៥ លើ​កុំព្យូទ័រ​', '{\"lang\":{\"kh\":\"\\u17a0\\u17c1\\u178f\\u17bb\\u1795\\u179b \\u17e4\"}}', '20677_1500453029.jpg', 'https://www.youtube.com/', 1, '2017-07-19 01:29:02', '2017-07-19 01:30:30'),
(3, 'ចេញ​ហើយ! USB 3.2​ ​ល្បឿន​ ​២០​ ​Gbps', 'ទើប​ប្រកាស​ ​ប៉ុន្តែ​ក្រុម​អ្នក​អភិវឌ្ឍ​បង្ហាញ​ ​នឹង​​ចេញ​​ផ្លូវការ​នា​ខែ​កញ្ញា​ ​២០១៧​ ​ហើយ​បច្ចេកវិទ្យា​ចម្លង​ទិន្នន័យ​ដ៏​លឿន​នេះ​ ​និង​បំពាក់​ក្នុង​ក្បាល​​ចម្លង​ទិន្នន័យ​ប្រភេទ​ ​USB-C។ ដោយ​ឡែក​ ​បច្ចេកវិទ្យា​ ​USB 3.1​ ​ដែល​ចម្លង​ទិន្នន័យ​ដល់​ ​២០​ ​Gbps​ ​នេះ​ ​គឺ​នឹង​ដាក់​ឲ្យ​ប្រើប្រាស់​ជា​សាធារណៈ​តាម​គ្រឿង​អេឡិចត្រូនិក​នានា​ចាប់​ពី​ឆ្នាំ​ ​២០១៩។\r\n\r\n​បច្ចេកវិទ្យា​ចម្លង​ទិន្នន័យ​ ​USB​ ​នេះ​ ​មាន​បែង​ចែក​ជា​ ​៤​ ​ប្រភេទ​ ​គឺ​ ​៖\r\n\r\n    USB​ ​មាន​ល្បឿន​ ​១២​ ​Mbps\r\n    USB​ ​HI-SPEED​ ​មាន​ល្បឿន​ ​៤៨០​ ​Mbps\r\n    USB​ ​SUPERSPEED+​ ​មាន​ល្បឿន​ ​១០​ ​Gbps\r\n    USB​ ​SUPERSPEED++​ ​មាន​ល្បឿន​ ​២០​ ​Gbps', '{\"lang\":{\"kh\":\"\\u1785\\u17c1\\u1789\\u200b\\u17a0\\u17be\\u1799! USB 3.2\\u200b \\u200b\\u179b\\u17d2\\u1794\\u17bf\\u1793\\u200b \\u200b\\u17e2\\u17e0\\u200b \\u200bGbps\"}}', '54915_1501146737.png', NULL, 1, '2017-07-27 02:12:18', '2017-07-27 02:12:18'),
(4, 'ឧបករណ៍​សាក​ថ្ម​ទូរសព្ទ​ដោយ​ពន្លឺ​ព្រះអាទិត្យ​ ល្អ​ៗ​ចំនួន​ ៦', 'សុបិន​អាក្រក់​របស់​អ្នក​ប្រើ​ស្មាតហ្វូន ឬ Tablet ​គឺ​រឿង​អស់​ថ្ម​​តែ​មួយ​ប៉ុណ្ណោះ ហើយ​អាក្រក់​ជាង​នេះ​ទៅ​ទៀត​នោះ​ពេល​ដែល​មិន​មាន​​កន្លែង​សម្រាប់​សាក​ថ្ម​នៅ​ជិត​ខ្លួន។ ប៉ុន្តែ​នៅ​ជុំវិញ​ខ្លួន​យើង​មាន​ព្រះអាទិត្យ​ដែល​ជា​​ថាមពល​ធម្មជាតិ​ដ៏​ល្អ​មួយ អាច​ប្រើ​សម្រាប់​សាក​ថ្ម​ស្មាតហ្វូន​បាន​តាម​រយៈ​​ឧបករណ៍​សាក​ថ្ម​ទូរសព្ទ​ដោយ​ពន្លឺ​ព្រះអាទិត្យ។ ត​ទៅ​នេះ​នឹង​បង្ហាញ​ពី​ជម្រើស​ឧបករណ៍​សាក​ថ្ម​​ល្អ​ៗ​ចំនួន​ ៦៖\r\n\r\n១. Solartab (តម្លៃ​​នៅ​បរទេស​ ៩៩ ដុល្លារ)\r\n\r\n#បរិមាណ​​ផ្ទុក ៖ ១៣០០០ mAh\r\n\r\n#ប្រភព​បញ្ចេញ ៖ រន្ធ​ USB ចំនួន​ ២ អាច​ចម្លង​ថាមពល​បាន​ ២,១ A\r\n\r\n#ទម្ងន់ ៖ ១,២ គីឡូក្រាម\r\n\r\n#ផ្ទាំង​សូឡារ ៖ ថាមពល​ ៥,៥ វ៉ាត់​\r\n\r\n​​​​​​​​​Solartab មិន​ត្រឹម​តែ​​អាច​សាក​ថ្ម​ទូរសព្ទ​ដោយ​ប្រើ​ថាមពល​ព្រះអាទិត្យ​ប៉ុណ្ណោះ​ទេ ប៉ុន្តែ​ថែម​ទាំង​អាច​រក្សា​ទុក​ថាមពល​ព្រះអាទិត្យ​បាន​ដល់​ ១៣០០០ mAh សម្រាប់​សាក​នៅ​ពេល​ក្រោយ​បាន​ទៀត​ផង។ ឧបករណ៍​នេះ​មាន​ជើង​សម្រាប់​​ទ្រ ដូច​នេះ​អ្នក​អាច​បង្វែរ​ទិស​ដៅ​ផ្ទាំង​សូឡារ​ឲ្យ​ចំ​កម្ដៅ​ព្រះអាទិត្យ​បាន​ពេញៗ។ អ្នក​អាច​ប្រើ​ឧបករណ៍​នេះ​ដើម្បី​សាក​បំពេញ​ថ្ម​ iPhone ក្នុង​ពេល​​ប្រមាណ​ ៩០ នាទី។\r\n\r\n២. Voltaic Systems Amp (តម្លៃ​​នៅ​បរទេស​ ៩៩ ដុល្លារ)\r\n\r\n#​បរិមាណ​​ផ្ទុក ៖ ៤០០០ mAh\r\n\r\n#ប្រភព​បញ្ចេញ ៖ រន្ធ​ USB ចំនួន​ ១ អាច​ចម្លង​ថាមពល​បាន​ ១ A\r\n\r\n#ទម្ងន់ ៖ ៤៨០ ក្រាម​\r\n\r\n#ផ្ទាំង​សូឡារ ៖ ថាមពល​ ៤ វ៉ាត់\r\n\r\nឧបករណ៍​នេះ​អាច​ស្រូប​ថាមពល​ព្រះអាទិត្យ​បាន​ពេញ​ក្នុង​ពេល​ ៦ ម៉ោង ហើយ​ចំណាយ​ពេល​ ៤ ម៉ោង​ឯណោះ​ដើម្បី​សាក​បំពេញ​ថ្ម​ស្មាតហ្វូន​មួយ។ ចំណុច​ពិសេស​របស់​វា​គឺ​មាន​សម្បក​ការពារ​ដែល​អាច​ធន់​នឹង​ទឹក។ មិន​តែ​ប៉ុណ្ណោះ​ក៏​មាន​មុខងារ​បង្ការ​មួយ​ដែល​នឹង​បិទ​ដំណើរ​ការ​ថ្ម​ប្រសិន​បើ​ឡើង​កម្ដៅ​ក្ដៅ​ខ្លាំង។\r\n\r\n៣. JOOS Orange (តម្លៃ​​នៅ​បរទេស​ ១៥០ ដុល្លារ)\r\n\r\n#បរិមាណ​​ផ្ទុក ៖ ៥៤០០ mAh\r\n\r\n#ប្រភព​បញ្ចេញ ៖ រន្ធ​ USB ចំនួន​ ១ អាច​ចម្លង​ថាមពល​បាន​ ១ A\r\n\r\n#ទម្ងន់ ៖ ៦៨០ ក្រាម​\r\n\r\n#ផ្ទាំង​សូឡារ ៖ ថាមពល​ ២,៤ វ៉ាត់\r\n\r\nតម្លៃ​រាង​ថ្លៃ​បន្តិច​ នេះ​ក៏​ដោយ​សារ​តែ​វា​មាន​ភាព​រឹងមាំ​​អាច​ទប់​ស្កាត់​ការ​ប្រេះ​បែក​​ពេល​ដែល​ធ្លាក់​ក្នុង​ហេតុការណ៍​ចៃដន្យ​ណា​មួយ។ ចំណុច​ពិសេស​មួយ​ទៀត​គឺ​​ធន់​នឹង​ទឹក ហើយ​អាច​សាក​ថ្ម​ក្នុង​ទឹក​បាន​ទៀត។\r\n\r\n៤. Yolk Station Solar Paper (តម្លៃ​​នៅ​បរទេស​ ១២៣ ដុល្លារ)\r\n\r\n#បរិមាណ​​ផ្ទុក ៖ មិនមាន​\r\n\r\n#ប្រភព​បញ្ចេញ ៖ រន្ធ​ USB ចំនួន​ ១ អាច​ចម្លង​ថាមពល​បាន​ ១ A\r\n\r\n#ទម្ងន់ ៖ ១១៣ ក្រាម​\r\n\r\n#ផ្ទាំង​សូឡារ ៖ ថាមពល​ ៥ វ៉ាត់\r\n\r\nជា​ឧបករណ៍​សាក​មាន​ទម្ងន់​ស្រាល​ជាង​គេ​បំផុត និង មាន​កម្រាស់​ត្រឹម​ ១១,៤៣ ម.ម ប៉ុណ្ណោះ។ ដោយ​សារ​តែ​មិន​មាន​ថ្ម​សម្រាប់​ផ្ទុក​ថាមពល​ ក៏​ជា​ចំណុច​ដែល​ធ្វើ​ឲ្យ​វា​​អាច​អាយុ​កាល​វែង​ដែរ។\r\n\r\n៥. Anker PowerPort Solar (តម្លៃ​​នៅ​បរទេស​ ៦០ ដុល្លារ)\r\n\r\n#​បរិមាណ​​ផ្ទុក ៖ មិនមាន​\r\n\r\n#ប្រភព​បញ្ចេញ ៖ រន្ធ​ USB ចំនួន​ ១ អាច​ចម្លង​ថាមពល​បាន​​ដល់​ ៣ A\r\n\r\n#ទម្ងន់ ៖ ៤១៦ ក្រាម​\r\n\r\n#ផ្ទាំង​សូឡារ ៖ ថាមពល​ ២១ វ៉ាត់\r\n\r\nដោយ​សារ​តែ​មិន​មាន​ថ្ម​ ហេតុ​នេះ​ទើប​ឧបករណ៍​នេះ​មាន​ថាមពល​ច្រើន​ដល់​ ២១ វ៉ាត់ ដែល​អាច​ឲ្យ​សាក​ឧបករណ៍​អេឡិចត្រូនិក​ដទៃ​ទៀត​បាន​លឿន​បំផុត។ ឧបករណ៍​នេះ​មាន​មុខងារ​មួយ​ឈ្មោះ​ថា​ PowerIQ អាច​សម្រួល​នូវ​​កម្រិត​​អំពែ​នៃ​ថាមពល​​ដើម្បី​ឲ្យ​ស៊ី​គ្នា​នឹង​ឧបករណ៍​របស់​អ្នក ដើម្បី​ធានា​ថា​អាច​សាក​ថ្ម​បាន​លឿន​ និង មាន​សុវត្ថិភាព។\r\n\r\n៦. SLXTREME Waterproof (តម្លៃ​​នៅ​បរទេស​ ១៥០ ដុល្លារ)\r\n\r\n#​បរិមាណ​​ផ្ទុក ៖ ៣០០០ mAh​\r\n\r\n#ប្រភព​បញ្ចេញ ៖ ភ្ជាប់​ទៅ​ទូរសព្ទ​ផ្ទាល់​\r\n\r\n#ទម្ងន់ ៖ ៤១៦ ក្រាម​\r\n\r\n#ផ្ទាំង​សូឡារ ៖ មិន​បញ្ជាក់\r\n\r\nចង់​បាន​សម្បក​ការពារ​ទូរសព្ទ​ដែល​អាច​សាក​ថ្ម​បាន​មែន? អា​ហ្នឹង​ក៏​មាន​ដែរ​ ដោយ​​អាច​ប្រើ​បាន​ជា​មួយ​ iPhone 5, 5s, 6 និង iPhone 6s។ ផ្ទាំង​សូឡារ​បាន​បំពាក់​នៅ​លើ​សម្បក​ការពារ​ផ្ទាល់ រួម​ជា​មួយ​នឹង​ថ្ម​ដែល​អាច​ផ្ទុក​ថាមពល​បាន​ ៣០០០ mAh។ ដូច​នេះ​អ្នក​អាច​សាក​ថ្ម​ទូរសព្ទ​បាន​ងាយ​ស្រួល​បំផុត​ ដោយ​គ្រាន់​តែ​ផ្គាប់​មុខ​ទូរសព្ទ៕​​\r\n\r\nចុចអាន៖\r\n\r\n    វិធី​ប្រើប្រាស់​ ​WhatsApp​ ​ឲ្យ​បាន​ពេញលេញ​នៅ​លើ​ ​iPad\r\n\r\n    ចង់​បញ្ជា​កាមេរ៉ា​ឲ្យ​បាន​ល្អ​ ​គួរ​យល់​ពី​ប៊ូតុង​ទាំង​នេះ\r\n\r\n\r\nប្រភព៖ DigitalTrends ប្រែ​សម្រួល៖ សុខហេង', '{\"lang\":{\"kh\":\"\\u17a7\\u1794\\u1780\\u179a\\u178e\\u17cd\\u200b\\u179f\\u17b6\\u1780\\u200b\\u1790\\u17d2\\u1798\\u200b\\u1791\\u17bc\\u179a\\u179f\\u1796\\u17d2\\u1791\\u200b\\u178a\\u17c4\\u1799\\u200b\\u1796\\u1793\\u17d2\\u179b\\u17ba\\u200b\\u1796\\u17d2\\u179a\\u17c7\\u17a2\\u17b6\\u1791\\u17b7\\u178f\\u17d2\\u1799\\u200b \\u179b\\u17d2\\u17a2\\u200b\\u17d7\\u200b\\u1785\\u17c6\\u1793\\u17bd\\u1793\\u200b \\u17e6\"}}', '47236_1501146818.jpg', NULL, 1, '2017-07-27 02:13:39', '2017-07-27 02:13:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_index` (`category_id`),
  ADD KEY `items_brand_id_index` (`brand_id`),
  ADD KEY `items_title_index` (`title`);

--
-- Indexes for table `item_brands`
--
ALTER TABLE `item_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_brands_brand_name_index` (`brand_name`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_categories_title_index` (`title`),
  ADD KEY `item_categories_parent_index` (`parent`);

--
-- Indexes for table `item_category_details`
--
ALTER TABLE `item_category_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_category_details_item_id_index` (`item_id`),
  ADD KEY `item_category_details_category_id_index` (`category_id`);

--
-- Indexes for table `item_features`
--
ALTER TABLE `item_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_features_category_id_index` (`category_id`),
  ADD KEY `item_features_title_index` (`title`);

--
-- Indexes for table `item_feature_details`
--
ALTER TABLE `item_feature_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_feature_details_item_id_index` (`item_id`),
  ADD KEY `item_feature_details_spec_id_index` (`spec_id`);

--
-- Indexes for table `item_spaces`
--
ALTER TABLE `item_spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_spaces_category_id_index` (`category_id`),
  ADD KEY `item_spaces_title_index` (`title`);

--
-- Indexes for table `item_space_details`
--
ALTER TABLE `item_space_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_space_details_item_id_index` (`item_id`),
  ADD KEY `item_space_details_spec_id_index` (`spec_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sale_orders`
--
ALTER TABLE `sale_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_orders_member_id_index` (`member_id`),
  ADD KEY `sale_orders_order_status_index` (`order_status`);

--
-- Indexes for table `sale_order_details`
--
ALTER TABLE `sale_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_order_details_sale_order_id_index` (`sale_order_id`),
  ADD KEY `sale_order_details_item_id_index` (`item_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_slide_title_index` (`slide_title`(191));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `web_settings_key_unique` (`key`),
  ADD UNIQUE KEY `web_settings_title_unique` (`title`),
  ADD KEY `web_settings_key_type_index` (`key_type`);

--
-- Indexes for table `whatnews`
--
ALTER TABLE `whatnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `whatnews_title_index` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `item_brands`
--
ALTER TABLE `item_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `item_category_details`
--
ALTER TABLE `item_category_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_features`
--
ALTER TABLE `item_features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_feature_details`
--
ALTER TABLE `item_feature_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_spaces`
--
ALTER TABLE `item_spaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `item_space_details`
--
ALTER TABLE `item_space_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sale_orders`
--
ALTER TABLE `sale_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sale_order_details`
--
ALTER TABLE `sale_order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `whatnews`
--
ALTER TABLE `whatnews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
