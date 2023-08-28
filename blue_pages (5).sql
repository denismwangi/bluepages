-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 06:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue_pages`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `created_at` int(10) DEFAULT NULL,
  `updated_at` int(109) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `image`) VALUES
(27, 'test', 1692692512, NULL, 'JOBS3.jpg'),
(28, 'test t', 1692909848, NULL, 'WRITTING.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` int(200) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `category` varchar(400) DEFAULT NULL,
  `subcategory` varchar(400) DEFAULT NULL,
  `created_at` int(12) DEFAULT NULL,
  `updated_at` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `name`, `image`, `category`, `subcategory`, `created_at`, `updated_at`) VALUES
(3, 'testvdfgfd', 'HINO.png', '28', '53', 1692916386, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corporates`
--

CREATE TABLE `corporates` (
  `id` int(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `county` varchar(200) DEFAULT NULL,
  `sub_county` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(400) DEFAULT NULL,
  `reg_person` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `phone` varchar(200) NOT NULL,
  `postal_address` varchar(200) DEFAULT NULL,
  `passport` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_by` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporates`
--

INSERT INTO `corporates` (`id`, `name`, `type`, `country`, `county`, `sub_county`, `address`, `email`, `website`, `reg_person`, `designation`, `phone`, `postal_address`, `passport`, `created_at`, `updated_at`, `create_by`) VALUES
(4, 'D& SONS1', NULL, '103', '30', '321', '680', 'info@dandSONS.COm', 'DANDSONS.COM', NULL, 'Sales manager', '0711675033', NULL, 'acc_logo13.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 'Mark & Sons', '1', '206', '46', '315', '8769-007', 'mark@gmail.com', 'mark.com', 'Steven NJOGU', 'Manager', '0798456879', NULL, 'bluepages.png', '0000-00-00 00:00:00', NULL, NULL),
(9, 'Tesr Bill', '1', '103', '30', '310', '853566', 'user@gmail.com', 'https://homeworkchoice.com', 'Mark Njoroge', 'Sales manager', '5525985555', NULL, '', '0000-00-00 00:00:00', NULL, NULL),
(10, 'sdfsdf', '1', '212', '42', '308', '853566', 'sdfsdf36@posta.go.ke', 'https://homeworkchoice.com', 'Mark Njoroge', 'Dean', '+2545525985555', NULL, 'Screenshot_2023-08-03_232942.png', '0000-00-00 00:00:00', NULL, NULL),
(11, 'Global Communication', NULL, '214', '35', '318', '680-008', 'globalcommunication38@posta.go.ke', 'global.com', NULL, 'Manager', '0711675033', NULL, 'jhgfghjk.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, 'Bidco merchants', '1', '103', '30', '319', '680', 'bidcomerchants@posta.go.ke', 'https://homeworkchoice.com', 'Mark Njoroge', 'Sales manager', '0711675045', 'fdgfg 5656', 'jhgfghjk1.jpg', '0000-00-00 00:00:00', NULL, NULL),
(13, 'Test Company', '1', '123', '46', '314', '9777-009', 'testcompany@posta.go.ke', 'global.com', 'Mark Njoroge', 'Sales manager', '0701675034', 'PO BOX 776-009 KASARANI', 'bluepages5.png', '0000-00-00 00:00:00', NULL, NULL),
(14, 'dfgdfg ergrt', '1', '219', 'AZ', '321', '680', 'dfgdfgergrt@posta.go.ke', 'https://homeworkchoice.com', 'Mark Njoroge', 'Sales manager', '0711675000', 'rtrtr ', 'bluepages7.png', '0000-00-00 00:00:00', NULL, NULL),
(15, 'dfg rwr', '1', '218', '45', '317', '680', 'dfgrwr@posta.go.ke', 'https://homeworkchoice.com', 'Mark Njoroge', 'sdfdfdf', '0711675011', 'sdfdfg', 'pic_m6.jpg', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  `modified_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id`, `name`, `code`, `created_by`, `modified_by`, `created_on`, `modified_on`) VALUES
(1, 'BARINGO', 30, NULL, NULL, NULL, NULL),
(2, 'BOMET', 36, NULL, NULL, NULL, NULL),
(3, 'BUNGOMA', 39, NULL, NULL, NULL, NULL),
(4, 'BUSIA', 40, NULL, NULL, NULL, NULL),
(5, 'ELGEYO/MARAKWET', 28, NULL, NULL, NULL, NULL),
(6, 'EMBU', 14, NULL, NULL, NULL, NULL),
(7, 'GARISSA', 7, NULL, NULL, NULL, NULL),
(8, 'HOMA BAY', 43, NULL, 1, NULL, 1469110115),
(9, 'ISIOLO', 11, NULL, NULL, NULL, NULL),
(10, 'KAJIADO', 34, NULL, NULL, NULL, NULL),
(11, 'KAKAMEGA', 37, NULL, NULL, NULL, NULL),
(12, 'KERICHO', 35, NULL, NULL, NULL, NULL),
(13, 'KIAMBU', 22, NULL, NULL, NULL, NULL),
(14, 'KILIFI', 3, NULL, NULL, NULL, NULL),
(15, 'KIRINYAGA', 20, NULL, NULL, NULL, NULL),
(16, 'KISII', 45, NULL, NULL, NULL, NULL),
(17, 'KISUMU', 42, NULL, NULL, NULL, NULL),
(18, 'KITUI', 15, NULL, NULL, NULL, NULL),
(19, 'KWALE', 2, NULL, NULL, NULL, NULL),
(20, 'LAIKIPIA', 31, NULL, NULL, NULL, NULL),
(21, 'LAMU', 5, NULL, NULL, NULL, NULL),
(22, 'MACHAKOS', 16, NULL, NULL, NULL, NULL),
(23, 'MAKUENI', 17, NULL, NULL, NULL, NULL),
(24, 'MANDERA', 9, NULL, NULL, NULL, NULL),
(25, 'MARSABIT', 10, NULL, NULL, NULL, NULL),
(26, 'MERU', 12, NULL, NULL, NULL, NULL),
(27, 'MIGORI', 44, NULL, NULL, NULL, NULL),
(28, 'MOMBASA', 1, NULL, NULL, NULL, NULL),
(29, 'MURANGA', 21, NULL, NULL, NULL, NULL),
(30, 'NAIROBI', 47, NULL, NULL, NULL, NULL),
(31, 'NAKURU', 32, NULL, NULL, NULL, NULL),
(32, 'NANDI', 29, NULL, NULL, NULL, NULL),
(33, 'NAROK', 33, NULL, NULL, NULL, NULL),
(34, 'NYAMIRA', 46, NULL, NULL, NULL, NULL),
(35, 'NYANDARUA', 18, NULL, NULL, NULL, NULL),
(36, 'NYERI', 19, NULL, NULL, NULL, NULL),
(37, 'SAMBURU', 25, NULL, NULL, NULL, NULL),
(38, 'SIAYA', 41, NULL, NULL, NULL, NULL),
(39, 'TAITA TAVETA', 6, NULL, NULL, NULL, NULL),
(40, 'TANA RIVER', 4, NULL, NULL, NULL, NULL),
(41, 'THARAKA - NITHI', 13, NULL, NULL, NULL, NULL),
(42, 'TRANS NZOIA', 26, NULL, NULL, NULL, NULL),
(43, 'TURKANA', 23, NULL, NULL, NULL, NULL),
(44, 'UASIN GISHU', 27, NULL, NULL, NULL, NULL),
(45, 'VIHIGA', 38, NULL, NULL, NULL, NULL),
(46, 'WAJIR', 8, NULL, NULL, NULL, NULL),
(47, 'WEST POKOT', 24, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `iso` varchar(255) NOT NULL DEFAULT '',
  `code` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  `modified_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso`, `code`, `created_by`, `modified_by`, `created_on`, `modified_on`) VALUES
(1, 'Afghanistan', 'af', 93, 1, NULL, 1591120734, NULL),
(2, 'Albania', 'al', 355, 1, NULL, 1591120734, NULL),
(3, 'Algeria', 'dz', 213, 1, NULL, 1591120734, NULL),
(4, 'American Samoa', 'as', 1684, 1, NULL, 1591120734, NULL),
(5, 'Andorra', 'ad', 376, 1, NULL, 1591120734, NULL),
(6, 'Angola', 'ao', 244, 1, NULL, 1591120734, NULL),
(7, 'Anguilla', 'ai', 1264, 1, NULL, 1591120734, NULL),
(8, 'Antigua and Barbuda', 'ag', 1268, 1, NULL, 1591120734, NULL),
(9, 'Argentina', 'ar', 54, 1, NULL, 1591120734, NULL),
(10, 'Armenia', 'am', 374, 1, NULL, 1591120734, NULL),
(11, 'Aruba', 'aw', 297, 1, NULL, 1591120734, NULL),
(12, 'Australia', 'au', 61, 1, NULL, 1591120734, NULL),
(13, 'Austria', 'at', 43, 1, NULL, 1591120734, NULL),
(14, 'Azerbaijan', 'az', 994, 1, NULL, 1591120734, NULL),
(15, 'Bahamas', 'bs', 1242, 1, NULL, 1591120734, NULL),
(16, 'Bahrain', 'bh', 973, 1, NULL, 1591120734, NULL),
(17, 'Bangladesh', 'bd', 880, 1, NULL, 1591120734, NULL),
(18, 'Barbados', 'bb', 1246, 1, NULL, 1591120734, NULL),
(19, 'Belarus', 'by', 375, 1, NULL, 1591120734, NULL),
(20, 'Belgium', 'be', 32, 1, NULL, 1591120734, NULL),
(21, 'Belize', 'bz', 501, 1, NULL, 1591120734, NULL),
(22, 'Benin', 'bj', 229, 1, NULL, 1591120734, NULL),
(23, 'Bermuda', 'bm', 1441, 1, NULL, 1591120734, NULL),
(24, 'Bhutan', 'bt', 975, 1, NULL, 1591120734, NULL),
(25, 'Bolivia', 'bo', 591, 1, NULL, 1591120734, NULL),
(26, 'Bosnia and Herzegovina', 'ba', 387, 1, NULL, 1591120734, NULL),
(27, 'Botswana', 'bw', 267, 1, NULL, 1591120734, NULL),
(28, 'Brazil', 'br', 55, 1, NULL, 1591120734, NULL),
(29, 'Brunei', 'bn', 673, 1, NULL, 1591120734, NULL),
(30, 'Bulgaria', 'bg', 359, 1, NULL, 1591120734, NULL),
(31, 'Burkina Faso', 'bf', 226, 1, NULL, 1591120734, NULL),
(32, 'Burundi', 'bi', 257, 1, NULL, 1591120734, NULL),
(33, 'Cambodia', 'kh', 855, 1, NULL, 1591120734, NULL),
(34, 'Cameroon', 'cm', 237, 1, NULL, 1591120734, NULL),
(35, 'Canada', 'ca', 1, 1, NULL, 1591120734, NULL),
(36, 'Cape Verde', 'cv', 238, 1, NULL, 1591120734, NULL),
(37, 'Cayman Islands', 'ky', 1345, 1, NULL, 1591120734, NULL),
(38, 'Central African Republic', 'cf', 236, 1, NULL, 1591120734, NULL),
(39, 'Chad', 'td', 235, 1, NULL, 1591120734, NULL),
(40, 'Chile', 'cl', 56, 1, NULL, 1591120734, NULL),
(41, 'China', 'cn', 86, 1, NULL, 1591120734, NULL),
(42, 'Colombia', 'co', 57, 1, NULL, 1591120734, NULL),
(43, 'Comoros', 'km', 269, 1, NULL, 1591120734, NULL),
(44, 'Congo (DRC)', 'cd', 243, 1, NULL, 1591120734, NULL),
(45, 'Congo (Republic)', 'cg', 242, 1, NULL, 1591120734, NULL),
(46, 'Cook Islands', 'ck', 682, 1, NULL, 1591120734, NULL),
(47, 'Costa Rica', 'cr', 506, 1, NULL, 1591120734, NULL),
(48, 'Cote d\'Ivoire', 'ci', 225, 1, NULL, 1591120734, NULL),
(49, 'Croatia', 'hr', 385, 1, NULL, 1591120734, NULL),
(50, 'Cuba', 'cu', 53, 1, NULL, 1591120734, NULL),
(51, 'Cyprus', 'cy', 357, 1, NULL, 1591120734, NULL),
(52, 'Czech Republic', 'cz', 420, 1, NULL, 1591120734, NULL),
(53, 'Denmark', 'dk', 45, 1, NULL, 1591120734, NULL),
(54, 'Djibouti', 'dj', 253, 1, NULL, 1591120734, NULL),
(55, 'Dominica', 'dm', 1767, 1, NULL, 1591120734, NULL),
(56, 'Dominican Republic', 'do', 1809, 1, NULL, 1591120734, NULL),
(57, 'Ecuador', 'ec', 593, 1, NULL, 1591120734, NULL),
(58, 'Egypt', 'eg', 20, 1, NULL, 1591120734, NULL),
(59, 'El Salvador', 'sv', 503, 1, NULL, 1591120734, NULL),
(60, 'Equatorial Guinea', 'gq', 240, 1, NULL, 1591120734, NULL),
(61, 'Eritrea', 'er', 291, 1, NULL, 1591120734, NULL),
(62, 'Estonia', 'ee', 372, 1, NULL, 1591120734, NULL),
(63, 'Ethiopia', 'et', 251, 1, NULL, 1591120734, NULL),
(64, 'Faroe Islands', 'fo', 298, 1, NULL, 1591120734, NULL),
(65, 'Fiji', 'fj', 679, 1, NULL, 1591120734, NULL),
(66, 'Finland', 'fi', 358, 1, NULL, 1591120734, NULL),
(67, 'France', 'fr', 33, 1, NULL, 1591120734, NULL),
(68, 'French Polynesia', 'pf', 689, 1, NULL, 1591120734, NULL),
(69, 'Gabon', 'ga', 241, 1, NULL, 1591120734, NULL),
(70, 'Gambia', 'gm', 220, 1, NULL, 1591120734, NULL),
(71, 'Georgia', 'ge', 995, 1, NULL, 1591120734, NULL),
(72, 'Germany', 'de', 49, 1, NULL, 1591120734, NULL),
(73, 'Ghana', 'gh', 233, 1, NULL, 1591120734, NULL),
(74, 'Gibraltar', 'gi', 350, 1, NULL, 1591120734, NULL),
(75, 'Greece', 'gr', 30, 1, NULL, 1591120734, NULL),
(76, 'Greenland', 'gl', 299, 1, NULL, 1591120734, NULL),
(77, 'Grenada', 'gd', 1473, 1, NULL, 1591120734, NULL),
(78, 'Guadeloupe', 'gp', 590, 1, NULL, 1591120734, NULL),
(79, 'Guam', 'gu', 1671, 1, NULL, 1591120734, NULL),
(80, 'Guatemala', 'gt', 502, 1, NULL, 1591120734, NULL),
(81, 'Guernsey', 'gg', 44, 1, NULL, 1591120734, NULL),
(82, 'Guinea', 'gn', 224, 1, NULL, 1591120734, NULL),
(83, 'Guinea-Bissau', 'gw', 245, 1, NULL, 1591120734, NULL),
(84, 'Guyana', 'gy', 592, 1, NULL, 1591120734, NULL),
(85, 'Haiti', 'ht', 509, 1, NULL, 1591120734, NULL),
(86, 'Honduras', 'hn', 504, 1, NULL, 1591120734, NULL),
(87, 'Hong Kong', 'hk', 852, 1, NULL, 1591120734, NULL),
(88, 'Hungary', 'hu', 36, 1, NULL, 1591120734, NULL),
(89, 'Iceland', 'is', 354, 1, NULL, 1591120734, NULL),
(90, 'India', 'in', 91, 1, NULL, 1591120734, NULL),
(91, 'Indonesia', 'id', 62, 1, NULL, 1591120734, NULL),
(92, 'Iran', 'ir', 98, 1, NULL, 1591120734, NULL),
(93, 'Iraq', 'iq', 964, 1, NULL, 1591120734, NULL),
(94, 'Ireland', 'ie', 353, 1, NULL, 1591120734, NULL),
(95, 'Isle of Man', 'im', 44, 1, NULL, 1591120734, NULL),
(96, 'Israel', 'il', 972, 1, NULL, 1591120734, NULL),
(97, 'Italy', 'it', 39, 1, NULL, 1591120734, NULL),
(98, 'Jamaica', 'jm', 1876, 1, NULL, 1591120734, NULL),
(99, 'Japan', 'jp', 81, 1, NULL, 1591120734, NULL),
(100, 'Jersey', 'je', 44, 1, NULL, 1591120734, NULL),
(101, 'Jordan', 'jo', 962, 1, NULL, 1591120734, NULL),
(102, 'Kazakhstan', 'kz', 7, 1, NULL, 1591120734, NULL),
(103, 'Kenya', 'ke', 254, 1, NULL, 1591120734, NULL),
(104, 'Kiribati', 'ki', 686, 1, NULL, 1591120734, NULL),
(105, 'Kuwait', 'kw', 965, 1, NULL, 1591120734, NULL),
(106, 'Kyrgyzstan', 'kg', 996, 1, NULL, 1591120734, NULL),
(107, 'Laos', 'la', 856, 1, NULL, 1591120734, NULL),
(108, 'Latvia', 'lv', 371, 1, NULL, 1591120734, NULL),
(109, 'Lebanon', 'lb', 961, 1, NULL, 1591120734, NULL),
(110, 'Lesotho', 'ls', 266, 1, NULL, 1591120734, NULL),
(111, 'Liberia', 'lr', 231, 1, NULL, 1591120734, NULL),
(112, 'Libya', 'ly', 218, 1, NULL, 1591120734, NULL),
(113, 'Liechtenstein', 'li', 423, 1, NULL, 1591120734, NULL),
(114, 'Lithuania', 'lt', 370, 1, NULL, 1591120734, NULL),
(115, 'Luxembourg', 'lu', 352, 1, NULL, 1591120734, NULL),
(116, 'Macao', 'mo', 853, 1, NULL, 1591120734, NULL),
(117, 'Macedonia', 'mk', 389, 1, NULL, 1591120734, NULL),
(118, 'Madagascar', 'mg', 261, 1, NULL, 1591120734, NULL),
(119, 'Malawi', 'mw', 265, 1, NULL, 1591120734, NULL),
(120, 'Malaysia', 'my', 60, 1, NULL, 1591120734, NULL),
(121, 'Maldives', 'mv', 960, 1, NULL, 1591120734, NULL),
(122, 'Mali', 'ml', 223, 1, NULL, 1591120734, NULL),
(123, 'Malta', 'mt', 356, 1, NULL, 1591120734, NULL),
(124, 'Marshall Islands', 'mh', 692, 1, NULL, 1591120734, NULL),
(125, 'Martinique', 'mq', 596, 1, NULL, 1591120734, NULL),
(126, 'Mauritania', 'mr', 222, 1, NULL, 1591120734, NULL),
(127, 'Mauritius', 'mu', 230, 1, NULL, 1591120734, NULL),
(128, 'Mexico', 'mx', 52, 1, NULL, 1591120734, NULL),
(129, 'Micronesia', 'fm', 691, 1, NULL, 1591120734, NULL),
(130, 'Moldova', 'md', 373, 1, NULL, 1591120734, NULL),
(131, 'Monaco', 'mc', 377, 1, NULL, 1591120734, NULL),
(132, 'Mongolia', 'mn', 976, 1, NULL, 1591120734, NULL),
(133, 'Montenegro', 'me', 382, 1, NULL, 1591120734, NULL),
(134, 'Montserrat', 'ms', 1664, 1, NULL, 1591120734, NULL),
(135, 'Morocco', 'ma', 212, 1, NULL, 1591120734, NULL),
(136, 'Mozambique', 'mz', 258, 1, NULL, 1591120734, NULL),
(137, 'Myanmar (Burma)', 'mm', 95, 1, NULL, 1591120734, NULL),
(138, 'Namibia', 'na', 264, 1, NULL, 1591120734, NULL),
(139, 'Nauru', 'nr', 674, 1, NULL, 1591120734, NULL),
(140, 'Nepal', 'np', 977, 1, NULL, 1591120734, NULL),
(141, 'Netherlands', 'nl', 31, 1, NULL, 1591120734, NULL),
(142, 'New Caledonia', 'nc', 687, 1, NULL, 1591120734, NULL),
(143, 'New Zealand', 'nz', 64, 1, NULL, 1591120734, NULL),
(144, 'Nicaragua', 'ni', 505, 1, NULL, 1591120734, NULL),
(145, 'Niger', 'ne', 227, 1, NULL, 1591120734, NULL),
(146, 'Nigeria', 'ng', 234, 1, NULL, 1591120734, NULL),
(147, 'North Korea', 'kp', 850, 1, NULL, 1591120734, NULL),
(148, 'Norway', 'no', 47, 1, NULL, 1591120734, NULL),
(149, 'Oman', 'om', 968, 1, NULL, 1591120734, NULL),
(150, 'Pakistan', 'pk', 92, 1, NULL, 1591120734, NULL),
(151, 'Palau', 'pw', 680, 1, NULL, 1591120734, NULL),
(152, 'Palestinian Territory', 'ps', 970, 1, NULL, 1591120734, NULL),
(153, 'Panama', 'pa', 507, 1, NULL, 1591120734, NULL),
(154, 'Papua New Guinea', 'pg', 675, 1, NULL, 1591120734, NULL),
(155, 'Paraguay', 'py', 595, 1, NULL, 1591120734, NULL),
(156, 'Peru', 'pe', 51, 1, NULL, 1591120734, NULL),
(157, 'Philippines', 'ph', 63, 1, NULL, 1591120734, NULL),
(158, 'Poland', 'pl', 48, 1, NULL, 1591120734, NULL),
(159, 'Portugal', 'pt', 351, 1, NULL, 1591120734, NULL),
(160, 'Puerto Rico', 'pr', 1787, 1, NULL, 1591120734, NULL),
(161, 'Qatar', 'qa', 974, 1, NULL, 1591120734, NULL),
(162, 'RÃ©union', 're', 262, 1, NULL, 1591120734, NULL),
(163, 'Romania', 'ro', 40, 1, NULL, 1591120734, NULL),
(164, 'Russian Federation', 'ru', 7, 1, NULL, 1591120734, NULL),
(165, 'Rwanda', 'rw', 250, 1, NULL, 1591120734, NULL),
(166, 'Saint Kitts and Nevis', 'kn', 1869, 1, NULL, 1591120734, NULL),
(167, 'Saint Lucia', 'lc', 1758, 1, NULL, 1591120734, NULL),
(168, 'Saint Vincent and the Grenadines', 'vc', 1784, 1, NULL, 1591120734, NULL),
(169, 'Samoa', 'ws', 685, 1, NULL, 1591120734, NULL),
(170, 'San Marino', 'sm', 378, 1, NULL, 1591120734, NULL),
(171, 'Sao Tome and Pri­ncipe', 'st', 239, 1, NULL, 1591120734, NULL),
(172, 'Saudi Arabia', 'sa', 966, 1, NULL, 1591120734, NULL),
(173, 'Senegal', 'sn', 221, 1, NULL, 1591120734, NULL),
(174, 'Serbia', 'rs', 381, 1, NULL, 1591120734, NULL),
(175, 'Seychelles', 'sc', 248, 1, NULL, 1591120734, NULL),
(176, 'Sierra Leone', 'sl', 232, 1, NULL, 1591120734, NULL),
(177, 'Singapore', 'sg', 65, 1, NULL, 1591120734, NULL),
(178, 'Slovakia', 'sk', 421, 1, NULL, 1591120734, NULL),
(179, 'Slovenia', 'si', 386, 1, NULL, 1591120734, NULL),
(180, 'Solomon Islands', 'sb', 677, 1, NULL, 1591120734, NULL),
(181, 'Somalia', 'so', 252, 1, NULL, 1591120734, NULL),
(182, 'South Africa', 'za', 27, 1, NULL, 1591120734, NULL),
(183, 'South Korea', 'kr', 82, 1, NULL, 1591120734, NULL),
(184, 'Spain', 'es', 34, 1, NULL, 1591120734, NULL),
(185, 'Sri Lanka', 'lk', 94, 1, NULL, 1591120734, NULL),
(186, 'Sudan', 'sd', 249, 1, NULL, 1591120734, NULL),
(187, 'Suriname', 'sr', 597, 1, NULL, 1591120734, NULL),
(188, 'Swaziland', 'sz', 268, 1, NULL, 1591120734, NULL),
(189, 'Sweden', 'se', 46, 1, NULL, 1591120734, NULL),
(190, 'Switzerland', 'ch', 41, 1, NULL, 1591120734, NULL),
(191, 'Syrian Arab Republic', 'sy', 963, 1, NULL, 1591120734, NULL),
(192, 'Taiwan, Province of China', 'tw', 886, 1, NULL, 1591120734, NULL),
(193, 'Tajikistan', 'tj', 992, 1, NULL, 1591120734, NULL),
(194, 'Tanzania', 'tz', 255, 1, NULL, 1591120734, NULL),
(195, 'Thailand', 'th', 66, 1, NULL, 1591120734, NULL),
(196, 'Timor-Leste', 'tl', 670, 1, NULL, 1591120734, NULL),
(197, 'Togo', 'tg', 228, 1, NULL, 1591120734, NULL),
(198, 'Tonga', 'to', 676, 1, NULL, 1591120734, NULL),
(199, 'Trinidad and Tobago', 'tt', 1868, 1, NULL, 1591120734, NULL),
(200, 'Tunisia', 'tn', 216, 1, NULL, 1591120734, NULL),
(201, 'Turkey', 'tr', 90, 1, NULL, 1591120734, NULL),
(202, 'Turkmenistan', 'tm', 993, 1, NULL, 1591120734, NULL),
(203, 'Turks and Caicos Islands', 'tc', 1649, 1, NULL, 1591120734, NULL),
(204, 'Tuvalu', 'tv', 688, 1, NULL, 1591120734, NULL),
(205, 'Uganda', 'ug', 256, 1, NULL, 1591120734, NULL),
(206, 'Ukraine', 'ua', 380, 1, NULL, 1591120734, NULL),
(207, 'United Arab Emirates', 'ae', 971, 1, NULL, 1591120734, NULL),
(208, 'United Kingdom', 'gb', 44, 1, NULL, 1591120734, NULL),
(209, 'United States', 'us', 1, 1, NULL, 1591120734, NULL),
(210, 'Uruguay', 'uy', 598, 1, NULL, 1591120734, NULL),
(211, 'Uzbekistan', 'uz', 998, 1, NULL, 1591120734, NULL),
(212, 'Vanuatu', 'vu', 678, 1, NULL, 1591120734, NULL),
(213, 'Vatican City', 'va', 379, 1, NULL, 1591120734, NULL),
(214, 'Venezuela', 've', 58, 1, NULL, 1591120734, NULL),
(215, 'Viet Nam', 'vn', 84, 1, NULL, 1591120734, NULL),
(216, 'Virgin Islands (British)', 'vg', 1284, 1, NULL, 1591120734, NULL),
(217, 'Virgin Islands (U.S.)', 'vi', 1340, 1, NULL, 1591120734, NULL),
(218, 'Western Sahara', 'eh', 212, 1, NULL, 1591120734, NULL),
(219, 'Yemen', 'ye', 967, 1, NULL, 1591120734, NULL),
(220, 'Zambia', 'zm', 260, 1, NULL, 1591120734, NULL),
(221, 'Zimbabwe', 'zw', 263, 1, NULL, 1591120734, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `month` int(11) NOT NULL DEFAULT 0,
  `year` int(11) NOT NULL DEFAULT 0,
  `title` varchar(256) NOT NULL DEFAULT '',
  `category` varchar(32) NOT NULL DEFAULT '',
  `status` varchar(32) NOT NULL DEFAULT '',
  `discussion` text DEFAULT NULL,
  `file` varchar(256) DEFAULT NULL,
  `views` int(200) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  `modified_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `month`, `year`, `title`, `category`, `status`, `discussion`, `file`, `views`, `created_by`, `modified_by`, `created_on`, `modified_on`) VALUES
(32, 8, 2023, 'Test', 'everyone', '1', 'test', '', 4, 9, NULL, 1691089561, NULL),
(33, 8, 2023, 'trr', 'everyone', '1', 'fgf', '', 6, 31, NULL, 1691165916, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forum_replies`
--

CREATE TABLE `forum_replies` (
  `id` int(11) NOT NULL,
  `discussion_id` varchar(256) NOT NULL DEFAULT '',
  `comment` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file` varchar(256) NOT NULL DEFAULT '',
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  `modified_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_replies`
--

INSERT INTO `forum_replies` (`id`, `discussion_id`, `comment`, `status`, `file`, `created_by`, `modified_by`, `created_on`, `modified_on`) VALUES
(41, '32', 'hello', 1, '', 9, NULL, 1691089907, NULL),
(42, '32', 'good', 1, '', 9, NULL, 1691089966, NULL),
(43, '33', 'helo', 1, '', 12, NULL, 1691250048, NULL),
(44, '32', 'testing profile appearance', 1, '', 31, NULL, 1691256854, NULL),
(45, '32', 'another comment', 1, '', 31, NULL, 1691257106, NULL),
(46, '32', 'hello checking meshack account', 1, '', 37, NULL, 1691431641, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forum_views`
--

CREATE TABLE `forum_views` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `post_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_views`
--

INSERT INTO `forum_views` (`id`, `user_id`, `post_id`) VALUES
(6, 9, 32),
(7, 11, 32),
(8, 31, 32),
(9, 31, 33),
(10, 9, 33),
(11, 12, 33),
(12, 32, 33),
(13, 37, 32),
(14, 43, 33),
(15, 48, 33);

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `id` int(200) NOT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `institution` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `county` varchar(200) DEFAULT NULL,
  `sub_county` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `passport` varchar(200) DEFAULT NULL,
  `created_at` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT NULL,
  `create_by` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`id`, `full_name`, `institution`, `country`, `county`, `sub_county`, `address`, `email`, `phone`, `passport`, `created_at`, `updated_at`, `create_by`) VALUES
(23, 'Dennis Kamau Njoroge', 'ST MARK', '103', '45', '307', '1234567890-', 'denniske992@gmail.com1', '0711675033', 'hero_solar.png', '1691165801', '1691256593', NULL),
(24, 'Tesr Bill', 'ST MARK', '103', '30', '308', '853566', 'user@gmail.com', '5525985555', 'bluepages1.png', '1691397387', NULL, NULL),
(25, 'Tesr Bill', 'DSMS', '103', '30', '317', '853566', 'user@gmail.com', '5525985555', 'bluepages2.png', '1691424012', NULL, NULL),
(26, 'Meshack Mai', 'DSMS', '208', '40', '308', 'uyuyu', 'meshackmai37@posta.go.ke', '0711675033', 'pic_m.jpg', '1691431519', '1691432561', NULL),
(27, 'hrtt mwai', 'ST MARK', '219', '46', '317', '680', 'hrttmwai@posta.go.ke', '0711675033', 'IMG_0727.png', '1691688565', NULL, NULL),
(28, 'hrtt mwai', 'ST MARK', '219', '45', '318', '56546', 'hrttmwai1@posta.go.ke', '0711675033', 'bluepages4.png', '1691689155', NULL, NULL),
(30, 'hrtt mwai', 'ST MARK', '220', '33', '317', '4546', 'hrttmwai2@posta.go.ke', '0711675033', 'pic_m2.jpg', '1691689445', NULL, NULL),
(31, 'mark mwai njogu', 'DSMS', '220', '45', '319', '546547', 'markmwai@posta.go.ke', '0711675033', 'pic_m3.jpg', '1691690218', NULL, NULL),
(32, 'mark mwai njogu', 'DSMS', '220', '45', '319', '546547', 'markmwai@posta.go.ke', '0711675033', 'pic_m4.jpg', '1691690219', NULL, NULL),
(33, 'mark mwai njogu', 'DSMS', '209', '45', '320', '680', 'markmwai1@posta.go.ke', '0711675033', 'pic_m5.jpg', '1691690261', NULL, NULL),
(34, 'mark mwai njogu', 'ST MARK', '220', '30', '306', '680', 'marknjogu@posta.go.ke', '0711675033', 'compling_c_file.png', '1692255326', NULL, NULL),
(36, 'mark mwai njogu', 'DSMS', '219', '45', '317', '97877', 'marknjogu001@posta.go.ke', '0711675033', 'compling_c_file2.png', '1692257528', NULL, NULL),
(37, 'mark mwai njogu', 'DSMS', '219', '45', '317', '97877', 'marknjogu001@posta.go.ke', '0711675033', 'compling_c_file3.png', '1692257529', NULL, NULL),
(38, 'dfgdfh dfgdf', 'DSMS', '219', '46', '320', '680', 'dfgdfhdfgdf@posta.go.ke', '0711675333', 'AUDI.jpg', '1692515136', NULL, NULL),
(39, 'nbm trytr', 'DSMS', '220', '46', '318', '680', 'nbmtrytr@posta.go.ke', '0711675044', 'AUDI1.jpg', '1692515249', NULL, NULL),
(40, 'dennis ke', 'ST MARK', '103', '30', '318', '680', 'denniske@posta.go.ke', '0711675099', 'BMW.jpg', '1692515754', NULL, NULL),
(41, 'dennis ke', 'ST MARK', '103', '30', '306', '680', 'denniske001@posta.go.ke', '0711675233', 'AUDI2.jpg', '1692515887', NULL, NULL),
(42, 'dennis ke', 'ST MARK', '103', '30', '317', '680', 'denniske002@posta.go.ke', '0722675033', 'BMW1.jpg', '1692516057', NULL, NULL),
(43, 'dennis ke', 'DSMS', '206', '46', '305', '680', '', '0711675066', 'bluepages6.png', '1692555735', NULL, NULL),
(44, 'dennis kcc', 'DSMS', '219', '47', '308', '680', 'denniskcc@posta.go.ke', '0711675001', 'IMG_07271.png', '1692559420', NULL, NULL),
(45, 'dennis kes', 'DSMS', '103', '30', '308', '680', 'denniskes@posta.go.ke', '0711675666', 'bluepages8.png', '1692559522', NULL, NULL),
(46, 'cvbvb gbgf', 'DSMS', '219', '32', '319', '680', 'cvbvbgbgf@posta.go.ke', '0711675323', 'bluepages9.png', '1692559765', NULL, NULL),
(47, 'dennis kedffg', 'DSMS', '103', '30', '309', '680', 'denniskedffg@posta.go.ke', '0711675222', 'bluepages10.png', '1692559819', NULL, NULL),
(48, 'dennis kef', 'DSMS', '219', '46', '317', '680', 'denniskef@posta.go.ke', '0711675041', 'bluepages11.png', '1692559930', NULL, NULL),
(49, 'dennis kee', 'DSMS', '103', '30', '318', '680', 'denniskee@posta.go.ke', '0711675042', 'bluepages12.png', '1692559993', NULL, NULL),
(50, 'dennis keuyy', 'DSMS', '103', '30', '310', '680', 'denniskeuyy@posta.go.ke', '0711675213', 'bluepages13.png', '1692560215', NULL, NULL),
(51, 'dennis kedfgdf', 'DSMS', '103', '30', '306', '680', 'denniskedfgdf@posta.go.ke', '0711675027', 'bluepages14.png', '1692560428', NULL, NULL),
(52, 'dennis kefg', 'DSMS', '103', '30', '320', '680', 'denniskefg@posta.go.ke', '0721941380', 'JOBS.jpg', '1692691212', NULL, NULL),
(53, 'vn  bnvbn', 'ST MARK', '221', 'AZ', '305', '853566', 'vnbnvbn@posta.go.ke', '0701941386', 'PETS.jpg', '1692691295', NULL, NULL),
(54, 'Tesr Bill', 'DSMS', '103', '30', '307', '853566', 'tesrbill@posta.go.ke', '0721041386', 'JOBS1.jpg', '1692691376', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `o_sessions`
--

CREATE TABLE `o_sessions` (
  `session_id` int(40) NOT NULL,
  `id` varchar(500) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` text NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `o_sessions`
--

INSERT INTO `o_sessions` (`session_id`, `id`, `ip_address`, `user_agent`, `last_activity`, `data`, `timestamp`) VALUES
(20, '2n1i1m150pamdls04unfkasuf7qot49p', '::1', '', 0, '__ci_last_regenerate|i:1692555530;', '0000-00-00 00:00:00.000000'),
(21, 'pug1cmhthu4htqgipo76blmuab9tl8rk', '::1', '', 0, '__ci_last_regenerate|i:1692555637;', '0000-00-00 00:00:00.000000'),
(23, 'tuq6596gi6t6pcjf2a52352rkh8opstl', '::1', '', 0, '__ci_last_regenerate|i:1692559265;id|s:1:\"9\";full_name|s:10:\"admin user\";email|s:15:\"Admin@ADMIN.COM\";password|s:60:\"$2y$10$SvtP7JPmdDdVb4Twisa9BeikHYvgWyDLY48lMyvsm1RFqB8RuPule\";group_id|s:1:\"1\";passport|s:0:\"\";ip_address|N;activation_code|N;company|N;forget_password_code|N;last_login|N;active|s:1:\"1\";role|s:1:\"2\";unique_id|s:1:\"0\";locked|s:1:\"1\";phone|s:9:\"711675033\";postal_address|N;created_at|s:19:\"0000-00-00 00:00:00\";updated_at|N;updated_by|N;created_by|N;', '0000-00-00 00:00:00.000000'),
(24, '3nmtebo0ndk9h6u29f0n8heh12gm52p9', '::1', '', 0, '__ci_last_regenerate|i:1692561582;', '0000-00-00 00:00:00.000000'),
(26, 'rssef5l3l72o0c0t5rddagh06ufegr6e', '::1', '', 0, '__ci_last_regenerate|i:1692691536;id|s:1:\"9\";full_name|s:10:\"admin user\";email|s:15:\"Admin@ADMIN.COM\";password|s:60:\"$2y$10$SvtP7JPmdDdVb4Twisa9BeikHYvgWyDLY48lMyvsm1RFqB8RuPule\";group_id|s:1:\"1\";passport|s:0:\"\";ip_address|N;activation_code|N;company|N;forget_password_code|N;last_login|N;active|s:1:\"1\";role|s:1:\"2\";unique_id|s:1:\"0\";locked|s:1:\"1\";phone|s:9:\"711675033\";postal_address|N;created_at|s:19:\"0000-00-00 00:00:00\";updated_at|N;updated_by|N;created_by|N;', '0000-00-00 00:00:00.000000'),
(27, '64kq42pfg4shvc7oul4c91nvij913t52', '::1', '', 0, '__ci_last_regenerate|i:1692778045;id|s:1:\"9\";full_name|s:10:\"admin user\";email|s:15:\"Admin@ADMIN.COM\";password|s:60:\"$2y$10$SvtP7JPmdDdVb4Twisa9BeikHYvgWyDLY48lMyvsm1RFqB8RuPule\";group_id|s:1:\"1\";passport|s:0:\"\";ip_address|N;activation_code|N;company|N;forget_password_code|N;last_login|N;active|s:1:\"1\";role|s:1:\"2\";unique_id|s:1:\"0\";locked|s:1:\"1\";phone|s:9:\"711675033\";postal_address|N;created_at|s:19:\"0000-00-00 00:00:00\";updated_at|N;updated_by|N;created_by|N;', '0000-00-00 00:00:00.000000'),
(28, 'h7lm2rdc4v46qd56uhmdtkft6tkhp91t', '::1', '', 0, '__ci_last_regenerate|i:1692901980;id|s:1:\"9\";full_name|s:10:\"admin user\";email|s:15:\"Admin@ADMIN.COM\";password|s:60:\"$2y$10$SvtP7JPmdDdVb4Twisa9BeikHYvgWyDLY48lMyvsm1RFqB8RuPule\";group_id|s:1:\"1\";passport|s:0:\"\";ip_address|N;activation_code|N;company|N;forget_password_code|N;last_login|N;active|s:1:\"1\";role|s:1:\"2\";unique_id|s:1:\"0\";locked|s:1:\"1\";phone|s:9:\"711675033\";postal_address|N;created_at|s:19:\"0000-00-00 00:00:00\";updated_at|N;updated_by|N;created_by|N;', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `reply_responses`
--

CREATE TABLE `reply_responses` (
  `id` int(11) NOT NULL,
  `reply_id` varchar(256) NOT NULL DEFAULT '',
  `comment` text DEFAULT NULL,
  `file` varchar(256) NOT NULL DEFAULT '',
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  `modified_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  `modified_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(200) NOT NULL,
  `category` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` int(200) DEFAULT NULL,
  `updated_at` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, '2', 'BUSES', 'BUSES.jpg', 0, NULL),
(4, '2', 'HEAVY', 'HEAVY_.jpg', 0, NULL),
(5, '2', 'MOTORBIKES', 'MOTORBIKES_2.jpg', 0, NULL),
(6, '2', 'TRUCKS', 'TRUCKS.jpg', 0, NULL),
(7, '2', 'PARTS & ACCSRIES', 'PARTS.jpg', 0, NULL),
(8, '2', 'BOATS', 'BOATS.jpg', 0, NULL),
(9, '3', 'FOR RENT', 'FOR_RENT.jpg', 0, NULL),
(10, '3', 'FOR SALE', 'FOR_SALE.jpg', 0, NULL),
(11, '3', 'LAND', 'LAND_FOR_SALE.jpg', 0, NULL),
(12, '3', 'COMMERCIAL', 'SHOP.jpg', 0, NULL),
(13, '3', 'EVENTS', 'EVENTS.jpg', 0, NULL),
(14, '4', 'PHONES', 'MOBILE_PHONES_1.jpg', 0, NULL),
(15, '4', 'ACCESSORIES', 'MOBILE_AASRIES.jpg', 0, NULL),
(16, '4', 'WATCHES', 'WATCHES.jpg', 0, NULL),
(17, '4', 'TABLETS', 'TABLETS.jpg', 0, NULL),
(18, '14', 'FURNITURE', 'FURNITURE.jpg', 0, NULL),
(19, '14', 'ACCESSORIES', 'HOME_FURNITURE___APPLIANCES1.jpg', 0, NULL),
(20, '14', 'COOKWARE', 'KITCHEN_WARE.jpg', 0, NULL),
(21, '14', 'CHEMICALS', 'CHEMICALS.jpg', 0, NULL),
(22, '14', 'GARDEN', 'GARDEN.jpg', 0, NULL),
(23, '14', 'KITCHEN', 'KITCHEN.jpg', 0, NULL),
(24, '5', 'ACCESSORIES', 'ELECTRONICS_2.jpg', 0, NULL),
(25, '5', 'LAPTOPS', 'LAP_TOPS.jpg', 0, NULL),
(26, '5', 'COMPUTERS', 'COMPUTERS.jpg', 0, NULL),
(27, '5', 'TV & DVDs', 'TV___DVD.jpg', 0, NULL),
(28, '5', 'MUSIC AUDIO', 'AUDIO.jpg', 0, NULL),
(29, '5', 'COMPUTER PARTS', 'COMPUTER_PARTS.jpg', 0, NULL),
(30, '5', 'MONITORS', 'COMPUTER_MONITORS.jpg', 0, NULL),
(31, '5', 'HEADPHONES', 'HEADPHONES.jpg', 0, NULL),
(32, '5', 'NETWORKING', 'NETWORKING.jpg', 0, NULL),
(33, '5', 'CAMERAS', 'CAMERAS.jpg', 0, NULL),
(34, '5', 'PRINTERS', 'PRINTERS.jpg', 0, NULL),
(35, '5', 'SECURITY', 'SECURITY.jpg', 0, NULL),
(36, '5', 'SOFTWARE', 'SOFTWARE.jpg', 0, NULL),
(37, '5', 'VIDEO GAMES', 'VIDEO_GAMES.jpg', 0, NULL),
(38, '7', 'BATH', 'BATH.jpg', 0, NULL),
(39, '7', 'FRAGRANCES', 'FRAGRANCES.jpg', 0, NULL),
(40, '7', 'MAKE-UP     ', 'MAKE_UP.jpg', 0, NULL),
(41, '7', 'SEXUAL', 'SEXUAL.jpg', 0, NULL),
(42, '7', 'SKINCARE', 'SKIN_CARE.jpg', 0, NULL),
(43, '7', 'TOBACCO', 'TOBACCO.jpg', 0, NULL),
(44, '7', 'BEAUTY TOOLS', 'BEAUTY_TOOLS.jpg', 0, NULL),
(45, '7', 'SUPPLEMENTS', 'SUPPLEMENTS.jpg', 0, NULL),
(46, '8', 'BAGS', 'BAGS.jpg', 0, NULL),
(47, '8', 'CLOTHING', 'FASHION1.jpg', 0, NULL),
(48, '8', 'ACCESSORIES', 'FASHION_ACCESSORIES.jpg', 0, NULL),
(49, '8', 'JEWELLERY', 'ACCESSORIES.jpg', 0, NULL),
(50, '8', 'WATCHES', 'WATCHES_FASHION.jpg', 0, NULL),
(51, '8', 'SHOES', 'SHOES.jpg', 0, NULL),
(52, '8', 'WEDDING', 'WEDDING.jpg', 0, NULL),
(53, '10', 'REPAIRS', 'REPAIRS.jpg', 0, NULL),
(54, '10', 'BUILDING', 'BUILDERS_2.jpg', 0, NULL),
(55, '10', 'TRADING', 'TRADING.jpg', 0, NULL),
(56, '10', 'CAR HIRE', 'CAR_HIRE.jpg', 0, NULL),
(57, '10', 'CHILD CARE', 'CHILD_CARE.jpg', 0, NULL),
(58, '10', 'LESSONS', 'COURSES.jpg', 0, NULL),
(59, '10', 'BEAUTY', 'BEAUTY_SERVICES.jpg', 0, NULL),
(60, '10', 'COMPUTER IT', 'COMPUTER_SERVICE.jpg', 0, NULL),
(61, '10', 'ENTERTAINMENT', 'ENTERTAINMENT.jpg', 0, NULL),
(62, '10', 'FITNESS', 'FITNESS.jpg', 0, NULL),
(63, '10', 'BARBER', 'BARBER.jpg', 0, NULL),
(64, '10', 'LANDSCAPING ', 'LANDSCAPING.jpg', 0, NULL),
(68, '27', 'test', 'JOBS4.jpg', 1692692547, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_counties`
--

CREATE TABLE `sub_counties` (
  `id` int(11) NOT NULL,
  `county` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  `modified_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_counties`
--

INSERT INTO `sub_counties` (`id`, `county`, `name`, `created_by`, `modified_by`, `created_on`, `modified_on`) VALUES
(1, 1, 'CHANGAMWE', NULL, NULL, NULL, NULL),
(2, 1, 'JOMVU', NULL, NULL, NULL, NULL),
(3, 1, 'KISAUNI', NULL, NULL, NULL, NULL),
(4, 1, 'LIKONI', NULL, NULL, NULL, NULL),
(5, 1, 'MVITA (MOMBASA)', NULL, NULL, NULL, NULL),
(6, 1, 'NYALI', NULL, NULL, NULL, NULL),
(7, 2, 'KINANGO', NULL, NULL, NULL, NULL),
(8, 2, 'KWALE', NULL, NULL, NULL, NULL),
(9, 2, 'LUNGA LUNGA', NULL, NULL, NULL, NULL),
(10, 2, 'MSAMBWENI', NULL, NULL, NULL, NULL),
(11, 3, 'BAHARI (KILIFI)', NULL, NULL, NULL, NULL),
(12, 3, 'GANZE', NULL, NULL, NULL, NULL),
(13, 3, 'KALOLENI', NULL, NULL, NULL, NULL),
(14, 3, 'KILIFI SOUTH', NULL, NULL, NULL, NULL),
(15, 3, 'MAGARINI', NULL, NULL, NULL, NULL),
(16, 3, 'MALINDI', NULL, NULL, NULL, NULL),
(17, 3, 'RABAI', NULL, NULL, NULL, NULL),
(18, 4, 'BURA (TANA NORTH)', NULL, NULL, NULL, NULL),
(19, 4, 'TANA DELTA', NULL, NULL, NULL, NULL),
(20, 4, 'TANA RIVER', NULL, NULL, NULL, NULL),
(21, 5, 'LAMU EAST', NULL, NULL, NULL, NULL),
(22, 5, 'LAMU WEST', NULL, NULL, NULL, NULL),
(23, 6, 'MWATATE', NULL, NULL, NULL, NULL),
(24, 6, 'TAVETA', NULL, NULL, NULL, NULL),
(25, 6, 'VOI', NULL, NULL, NULL, NULL),
(26, 6, 'WUNDANYI (TAITA)', NULL, NULL, NULL, NULL),
(27, 7, 'BALAMBALA', NULL, NULL, NULL, NULL),
(28, 7, 'DADAAB', NULL, NULL, NULL, NULL),
(29, 7, 'FAFI', NULL, NULL, NULL, NULL),
(30, 7, 'GARISSA', NULL, NULL, NULL, NULL),
(31, 7, 'HULUGHO', NULL, NULL, NULL, NULL),
(32, 7, 'IJARA', NULL, NULL, NULL, NULL),
(33, 7, 'LAGDERA', NULL, NULL, NULL, NULL),
(34, 8, 'BUNA', NULL, NULL, NULL, NULL),
(35, 8, 'ELDAS', NULL, NULL, NULL, NULL),
(36, 8, 'HABASWEIN', NULL, NULL, NULL, NULL),
(37, 8, 'TARBAJ', NULL, NULL, NULL, NULL),
(38, 8, 'WAJIR EAST', NULL, NULL, NULL, NULL),
(39, 8, 'WAJIR NORTH', NULL, NULL, NULL, NULL),
(40, 8, 'WAJIR SOUTH', NULL, NULL, NULL, NULL),
(41, 8, 'WAJIR WEST', NULL, NULL, NULL, NULL),
(42, 9, 'BANISA', NULL, NULL, NULL, NULL),
(43, 9, 'LAFEY', NULL, NULL, NULL, NULL),
(44, 9, 'MANDERA CENTRAL', NULL, NULL, NULL, NULL),
(45, 9, 'MANDERA EAST', NULL, NULL, NULL, NULL),
(46, 9, 'MANDERA NORTH', NULL, NULL, NULL, NULL),
(47, 9, 'MANDERA WEST', NULL, NULL, NULL, NULL),
(48, 10, 'CHALBI', NULL, NULL, NULL, NULL),
(49, 10, 'HORR NORTH', NULL, NULL, NULL, NULL),
(50, 10, 'LOIYANGALANI', NULL, NULL, NULL, NULL),
(51, 10, 'MARSABIT', NULL, NULL, NULL, NULL),
(52, 10, 'MARSABIT SOUTH (LAISAMIS)', NULL, NULL, NULL, NULL),
(53, 10, 'MOYALE', NULL, NULL, NULL, NULL),
(54, 10, 'SOLOLO', NULL, NULL, NULL, NULL),
(55, 11, 'GARBATULA', NULL, NULL, NULL, NULL),
(56, 11, 'ISIOLO', NULL, NULL, NULL, NULL),
(57, 11, 'MERTI', NULL, NULL, NULL, NULL),
(58, 12, 'BUURI', NULL, NULL, NULL, NULL),
(59, 12, 'IGEMBE CENTRAL', NULL, NULL, NULL, NULL),
(60, 12, 'IGEMBE NORTH', NULL, NULL, NULL, NULL),
(61, 12, 'IGEMBE SOUTH', NULL, NULL, NULL, NULL),
(62, 12, 'IMENTI NORTH', NULL, NULL, NULL, NULL),
(63, 12, 'IMENTI SOUTH', NULL, NULL, NULL, NULL),
(64, 12, 'MERU CENTRAL', NULL, NULL, NULL, NULL),
(65, 12, 'TIGANIA CENTRAL', NULL, NULL, NULL, NULL),
(66, 12, 'TIGANIA EAST', NULL, NULL, NULL, NULL),
(67, 12, 'TIGANIA WEST', NULL, NULL, NULL, NULL),
(68, 13, 'MAARA', NULL, NULL, NULL, NULL),
(69, 13, 'MERU SOUTH', NULL, NULL, NULL, NULL),
(70, 13, 'THARAKA NORTH', NULL, NULL, NULL, NULL),
(71, 13, 'THARAKA SOUTH', NULL, NULL, NULL, NULL),
(72, 14, 'EMBU EAST', NULL, NULL, NULL, NULL),
(73, 14, 'EMBU NORTH', NULL, NULL, NULL, NULL),
(74, 14, 'EMBU WEST', NULL, NULL, NULL, NULL),
(75, 14, 'MBEERE NORTH', NULL, NULL, NULL, NULL),
(76, 14, 'MBEERE SOUTH', NULL, NULL, NULL, NULL),
(77, 15, 'IKUTHA', NULL, NULL, NULL, NULL),
(78, 15, 'KATULANI', NULL, NULL, NULL, NULL),
(79, 15, 'KISASI', NULL, NULL, NULL, NULL),
(80, 15, 'KITUI CENTRAL', NULL, NULL, NULL, NULL),
(81, 15, 'KITUI WEST', NULL, NULL, NULL, NULL),
(82, 15, 'KYUSO', NULL, NULL, NULL, NULL),
(83, 15, 'LOWER YATTA', NULL, NULL, NULL, NULL),
(84, 15, 'MATINYANI', NULL, NULL, NULL, NULL),
(85, 15, 'MUMONI', NULL, NULL, NULL, NULL),
(86, 15, 'MUTITO', NULL, NULL, NULL, NULL),
(87, 15, 'MUTOMO', NULL, NULL, NULL, NULL),
(88, 15, 'MWINGI CENTRAL', NULL, NULL, NULL, NULL),
(89, 15, 'MWINGI EAST', NULL, NULL, NULL, NULL),
(90, 15, 'MWINGI WEST /MIGWANI', NULL, NULL, NULL, NULL),
(91, 15, 'NZAMBANI', NULL, NULL, NULL, NULL),
(92, 15, 'TSEIKURU', NULL, NULL, NULL, NULL),
(93, 16, 'ATHI RIVER', NULL, NULL, NULL, NULL),
(94, 16, 'KANGUNDO', NULL, NULL, NULL, NULL),
(95, 16, 'KATHIANI', NULL, NULL, NULL, NULL),
(96, 16, 'MACHAKOS', NULL, NULL, NULL, NULL),
(97, 16, 'MASINGA', NULL, NULL, NULL, NULL),
(98, 16, 'MATUNGULU', NULL, NULL, NULL, NULL),
(99, 16, 'MWALA', NULL, NULL, NULL, NULL),
(100, 16, 'YATTA', NULL, NULL, NULL, NULL),
(101, 17, 'KATHONZWENI', NULL, NULL, NULL, NULL),
(102, 17, 'KIBWEZI', NULL, NULL, NULL, NULL),
(103, 17, 'KILUNGU', NULL, NULL, NULL, NULL),
(104, 17, 'MAKINDU', NULL, NULL, NULL, NULL),
(105, 17, 'MAKUENI', NULL, NULL, NULL, NULL),
(106, 17, 'MBOONI EAST', NULL, NULL, NULL, NULL),
(107, 17, 'MBOONI WEST', NULL, NULL, NULL, NULL),
(108, 17, 'MUKAA', NULL, NULL, NULL, NULL),
(109, 17, 'NZAUI', NULL, NULL, NULL, NULL),
(110, 18, 'KINANGOP', NULL, NULL, NULL, NULL),
(111, 18, 'KIPIPIRI', NULL, NULL, NULL, NULL),
(112, 18, 'MIRANGINE', NULL, NULL, NULL, NULL),
(113, 18, 'NYANDARUA CENTRAL', NULL, NULL, NULL, NULL),
(114, 18, 'NYANDARUA NORTH', NULL, NULL, NULL, NULL),
(115, 18, 'NYANDARUA SOUTH', NULL, NULL, NULL, NULL),
(116, 18, 'NYANDARUA WEST', NULL, NULL, NULL, NULL),
(117, 19, 'KIENI EAST', NULL, NULL, NULL, NULL),
(118, 19, 'KIENI WEST', NULL, NULL, NULL, NULL),
(119, 19, 'MATHIRA EAST', NULL, NULL, NULL, NULL),
(120, 19, 'MATHIRA WEST', NULL, NULL, NULL, NULL),
(121, 19, 'MUKURWE-INI', NULL, NULL, NULL, NULL),
(122, 19, 'NYERI CENTRAL', NULL, NULL, NULL, NULL),
(123, 19, 'NYERI SOUTH', NULL, NULL, NULL, NULL),
(124, 19, 'TETU', NULL, NULL, NULL, NULL),
(125, 20, 'KIRINYAGA CENTRAL', NULL, NULL, NULL, NULL),
(126, 20, 'KIRINYAGA EAST', NULL, NULL, NULL, NULL),
(127, 20, 'KIRINYAGA WEST', NULL, NULL, NULL, NULL),
(128, 20, 'MWEA EAST', NULL, NULL, NULL, NULL),
(129, 20, 'MWEA WEST', NULL, NULL, NULL, NULL),
(130, 21, 'GATANGA', NULL, NULL, NULL, NULL),
(131, 21, 'KAHURO', NULL, NULL, NULL, NULL),
(132, 21, 'KANDARA', NULL, NULL, NULL, NULL),
(133, 21, 'KANGEMA', NULL, NULL, NULL, NULL),
(134, 21, 'KIGUMO', NULL, NULL, NULL, NULL),
(135, 21, 'MATHIOYA', NULL, NULL, NULL, NULL),
(136, 21, 'MURANG\'A EAST', NULL, NULL, NULL, NULL),
(137, 21, 'MURANG\'A SOUTH', NULL, NULL, NULL, NULL),
(138, 22, 'GATUNDU NORTH', NULL, NULL, NULL, NULL),
(139, 22, 'GATUNDU SOUTH', NULL, NULL, NULL, NULL),
(140, 22, 'GITHUNGURI', NULL, NULL, NULL, NULL),
(141, 22, 'JUJA', NULL, NULL, NULL, NULL),
(142, 22, 'KABETE', NULL, NULL, NULL, NULL),
(143, 22, 'KIAMBAA', NULL, NULL, NULL, NULL),
(144, 22, 'KIAMBU', NULL, NULL, NULL, NULL),
(145, 22, 'KIKUYU', NULL, NULL, NULL, NULL),
(146, 22, 'LARI', NULL, NULL, NULL, NULL),
(147, 22, 'LIMURU', NULL, NULL, NULL, NULL),
(148, 22, 'RUIRU', NULL, NULL, NULL, NULL),
(149, 22, 'THIKA EAST', NULL, NULL, NULL, NULL),
(150, 22, 'THIKA WEST', NULL, NULL, NULL, NULL),
(151, 23, 'KIBISH', NULL, NULL, NULL, NULL),
(152, 23, 'LOIMA', NULL, NULL, NULL, NULL),
(153, 23, 'TURKANA CENTRAL', NULL, NULL, NULL, NULL),
(154, 23, 'TURKANA EAST', NULL, NULL, NULL, NULL),
(155, 23, 'TURKANA NORTH', NULL, NULL, NULL, NULL),
(156, 23, 'TURKANA SOUTH', NULL, NULL, NULL, NULL),
(157, 23, 'TURKANA WEST', NULL, NULL, NULL, NULL),
(158, 24, 'KIPKOMO', NULL, NULL, NULL, NULL),
(159, 24, 'POKOT CENTRAL', NULL, NULL, NULL, NULL),
(160, 24, 'POKOT NORTH', NULL, NULL, NULL, NULL),
(161, 24, 'POKOT SOUTH', NULL, NULL, NULL, NULL),
(162, 24, 'WEST POKOT', NULL, NULL, NULL, NULL),
(163, 25, 'SAMBURU CENTRAL', NULL, NULL, NULL, NULL),
(164, 25, 'SAMBURU EAST', NULL, NULL, NULL, NULL),
(165, 25, 'SAMBURU NORTH', NULL, NULL, NULL, NULL),
(166, 26, 'ENDEBES', NULL, NULL, NULL, NULL),
(167, 26, 'KIMININI', NULL, NULL, NULL, NULL),
(168, 26, 'KWANZA', NULL, NULL, NULL, NULL),
(169, 26, 'TRANS NZOIA EAST', NULL, NULL, NULL, NULL),
(170, 26, 'TRANS NZOIA WEST', NULL, NULL, NULL, NULL),
(171, 27, 'ELDORET EAST', NULL, NULL, NULL, NULL),
(172, 27, 'ELDORET WEST', NULL, NULL, NULL, NULL),
(173, 27, 'KESSES', NULL, NULL, NULL, NULL),
(174, 27, 'MOIBEN', NULL, NULL, NULL, NULL),
(175, 27, 'SOY', NULL, NULL, NULL, NULL),
(176, 27, 'WARENG', NULL, NULL, NULL, NULL),
(177, 28, 'KEIYO', NULL, NULL, NULL, NULL),
(178, 28, 'KEIYO SOUTH', NULL, NULL, NULL, NULL),
(179, 28, 'MARAKWET EAST', NULL, NULL, NULL, NULL),
(180, 28, 'MARAKWET WEST', NULL, NULL, NULL, NULL),
(181, 29, 'CHESUMEI', NULL, NULL, NULL, NULL),
(182, 29, 'NANDI CENTRAL', NULL, NULL, NULL, NULL),
(183, 29, 'NANDI EAST', NULL, NULL, NULL, NULL),
(184, 29, 'NANDI NORTH', NULL, NULL, NULL, NULL),
(185, 29, 'NANDI SOUTH', NULL, NULL, NULL, NULL),
(186, 29, 'TINDERET', NULL, NULL, NULL, NULL),
(187, 30, 'BARINGO CENTRAL', NULL, NULL, NULL, NULL),
(188, 30, 'BARINGO NORTH', NULL, NULL, NULL, NULL),
(189, 30, 'EAST POKOT', NULL, NULL, NULL, NULL),
(190, 30, 'KOIBATEK', NULL, NULL, NULL, NULL),
(191, 30, 'MARIGAT', NULL, NULL, NULL, NULL),
(192, 30, 'MOGOTIO', NULL, NULL, NULL, NULL),
(193, 31, 'LAIKIPIA CENTRAL', NULL, NULL, NULL, NULL),
(194, 31, 'LAIKIPIA EAST', NULL, NULL, NULL, NULL),
(195, 31, 'LAIKIPIA NORTH', NULL, NULL, NULL, NULL),
(196, 31, 'LAIKIPIA WEST', NULL, NULL, NULL, NULL),
(197, 31, 'NYAHURURU', NULL, NULL, NULL, NULL),
(198, 32, 'GILGIL', NULL, NULL, NULL, NULL),
(199, 32, 'KURESOI', NULL, NULL, NULL, NULL),
(200, 32, 'KURESOI NORTH', NULL, NULL, NULL, NULL),
(201, 32, 'MOLO', NULL, NULL, NULL, NULL),
(202, 32, 'NAIVASHA', NULL, NULL, NULL, NULL),
(203, 32, 'NAKURU EAST', NULL, NULL, NULL, NULL),
(204, 32, 'NAKURU NORTH', NULL, NULL, NULL, NULL),
(205, 32, 'NAKURU WEST', NULL, NULL, NULL, NULL),
(206, 32, 'NJORO', NULL, NULL, NULL, NULL),
(207, 32, 'RONGAI', NULL, NULL, NULL, NULL),
(208, 32, 'SUBUKIA', NULL, NULL, NULL, NULL),
(209, 33, 'NAROK EAST', NULL, NULL, NULL, NULL),
(210, 33, 'NAROK NORTH', NULL, NULL, NULL, NULL),
(211, 33, 'NAROK SOUTH', NULL, NULL, NULL, NULL),
(212, 33, 'NAROK WEST', NULL, NULL, NULL, NULL),
(213, 33, 'TRANS MARA EAST', NULL, NULL, NULL, NULL),
(214, 33, 'TRANS MARA WEST', NULL, NULL, NULL, NULL),
(215, 34, 'ISINYA', NULL, NULL, NULL, NULL),
(216, 34, 'KAJIADO CENTRAL', NULL, NULL, NULL, NULL),
(217, 34, 'KAJIADO NORTH', NULL, NULL, NULL, NULL),
(218, 34, 'KAJIADO WEST', NULL, NULL, NULL, NULL),
(219, 34, 'LOITOKITOK', NULL, NULL, NULL, NULL),
(220, 34, 'MASHUURU', NULL, NULL, NULL, NULL),
(221, 35, 'BELGUT', NULL, NULL, NULL, NULL),
(222, 35, 'BURETI', NULL, NULL, NULL, NULL),
(223, 35, 'KERICHO', NULL, NULL, NULL, NULL),
(224, 35, 'KIPKELION', NULL, NULL, NULL, NULL),
(225, 35, 'LONDIANI', NULL, NULL, NULL, NULL),
(226, 35, 'SIGOWEI / SOIN', NULL, NULL, NULL, NULL),
(227, 36, 'BOMET', NULL, NULL, NULL, NULL),
(228, 36, 'BOMET EAST', NULL, NULL, NULL, NULL),
(229, 36, 'CHEPALUNGU', NULL, NULL, NULL, NULL),
(230, 36, 'KONOIN', NULL, NULL, NULL, NULL),
(231, 36, 'SOTIK', NULL, NULL, NULL, NULL),
(232, 37, 'BUTERE', NULL, NULL, NULL, NULL),
(233, 37, 'KAKAMEGA CENTRAL', NULL, NULL, NULL, NULL),
(234, 37, 'KAKAMEGA EAST', NULL, NULL, NULL, NULL),
(235, 37, 'KAKAMEGA NORTH', NULL, NULL, NULL, NULL),
(236, 37, 'KAKAMEGA SOUTH', NULL, NULL, NULL, NULL),
(237, 37, 'KHWISERO', NULL, NULL, NULL, NULL),
(238, 37, 'LIKUYANI', NULL, NULL, NULL, NULL),
(239, 37, 'LUGARI', NULL, NULL, NULL, NULL),
(240, 37, 'MATETE', NULL, NULL, NULL, NULL),
(241, 37, 'MATUNGU', NULL, NULL, NULL, NULL),
(242, 37, 'MUMIAS', NULL, NULL, NULL, NULL),
(243, 37, 'MUMIAS EAST', NULL, NULL, NULL, NULL),
(244, 37, 'NAVAKHOLO', NULL, NULL, NULL, NULL),
(245, 38, 'EMUHAYA', NULL, NULL, NULL, NULL),
(246, 38, 'HAMISI', NULL, NULL, NULL, NULL),
(247, 38, 'LUANDA', NULL, NULL, NULL, NULL),
(248, 38, 'SABATIA', NULL, NULL, NULL, NULL),
(249, 38, 'VIHIGA', NULL, NULL, NULL, NULL),
(250, 39, 'BUMULA', NULL, NULL, NULL, NULL),
(251, 39, 'BUNGOMA CENTRAL', NULL, NULL, NULL, NULL),
(252, 39, 'BUNGOMA EAST', NULL, NULL, NULL, NULL),
(253, 39, 'BUNGOMA NORTH', NULL, NULL, NULL, NULL),
(254, 39, 'BUNGOMA SOUTH', NULL, NULL, NULL, NULL),
(255, 39, 'BUNGOMA WEST', NULL, NULL, NULL, NULL),
(256, 39, 'CHEPTAIS', NULL, NULL, NULL, NULL),
(257, 39, 'KIMILILI', NULL, NULL, NULL, NULL),
(258, 39, 'MT ELGON', NULL, NULL, NULL, NULL),
(259, 39, 'WEBUYE WEST', NULL, NULL, NULL, NULL),
(260, 40, 'BUNYALA', NULL, NULL, NULL, NULL),
(261, 40, 'BUSIA', NULL, NULL, NULL, NULL),
(262, 40, 'BUTULA', NULL, NULL, NULL, NULL),
(263, 40, 'NAMBALE', NULL, NULL, NULL, NULL),
(264, 40, 'SAMIA', NULL, NULL, NULL, NULL),
(265, 40, 'TESO NORTH', NULL, NULL, NULL, NULL),
(266, 40, 'TESO SOUTH', NULL, NULL, NULL, NULL),
(267, 41, 'BONDO', NULL, NULL, NULL, NULL),
(268, 41, 'GEM', NULL, NULL, NULL, NULL),
(269, 41, 'RARIEDA', NULL, NULL, NULL, NULL),
(270, 41, 'SIAYA', NULL, NULL, NULL, NULL),
(271, 41, 'UGENYA', NULL, NULL, NULL, NULL),
(272, 41, 'UGUNJA', NULL, NULL, NULL, NULL),
(273, 42, 'KISUMU CENTRAL', NULL, NULL, NULL, NULL),
(274, 42, 'KISUMU EAST', NULL, NULL, NULL, NULL),
(275, 42, 'KISUMU WEST', NULL, NULL, NULL, NULL),
(276, 42, 'MUHORONI', NULL, NULL, NULL, NULL),
(277, 42, 'NYAKACH', NULL, NULL, NULL, NULL),
(278, 42, 'NYANDO', NULL, NULL, NULL, NULL),
(279, 42, 'SEME', NULL, NULL, NULL, NULL),
(280, 43, 'HOMA BAY', NULL, NULL, NULL, NULL),
(281, 43, 'MBITA', NULL, NULL, NULL, NULL),
(282, 43, 'NDHIWA', NULL, NULL, NULL, NULL),
(283, 43, 'RACHUONYO EAST', NULL, NULL, NULL, NULL),
(284, 43, 'RACHUONYO NORTH', NULL, NULL, NULL, NULL),
(285, 43, 'RACHUONYO SOUTH', NULL, NULL, NULL, NULL),
(286, 43, 'RANGWE', NULL, NULL, NULL, NULL),
(287, 43, 'SUBA', NULL, NULL, NULL, NULL),
(288, 44, 'AWENDO', NULL, NULL, NULL, NULL),
(289, 44, 'KURIA EAST', NULL, NULL, NULL, NULL),
(290, 44, 'KURIA WEST', NULL, NULL, NULL, NULL),
(291, 44, 'MIGORI', NULL, NULL, NULL, NULL),
(292, 44, 'NYATIKE', NULL, NULL, NULL, NULL),
(293, 44, 'RONGO', NULL, NULL, NULL, NULL),
(294, 44, 'SUNA WEST', NULL, NULL, NULL, NULL),
(295, 44, 'URIRI', NULL, NULL, NULL, NULL),
(296, 45, 'GUCHA', NULL, NULL, NULL, NULL),
(297, 45, 'GUCHA SOUTH', NULL, NULL, NULL, NULL),
(298, 45, 'KENYENYA', NULL, NULL, NULL, NULL),
(299, 45, 'KISII CENTRAL', NULL, NULL, NULL, NULL),
(300, 45, 'KISII SOUTH', NULL, NULL, NULL, NULL),
(301, 45, 'KITUTU CENTRAL', NULL, NULL, NULL, NULL),
(302, 45, 'MARANI', NULL, NULL, NULL, NULL),
(303, 45, 'MASABA SOUTH', NULL, NULL, NULL, NULL),
(304, 45, 'NYAMACHE', NULL, NULL, NULL, NULL),
(305, 45, 'SAMETA', NULL, NULL, NULL, NULL),
(306, 46, 'BORABU', NULL, NULL, NULL, NULL),
(307, 46, 'MANGA', NULL, NULL, NULL, NULL),
(308, 46, 'MASABA NORTH', NULL, NULL, NULL, NULL),
(309, 46, 'NYAMIRA NORTH', NULL, NULL, NULL, NULL),
(310, 46, 'NYAMIRA SOUTH', NULL, NULL, NULL, NULL),
(311, 47, 'DAGORETTI', NULL, NULL, NULL, NULL),
(312, 47, 'EMBAKASI', NULL, NULL, NULL, NULL),
(313, 47, 'KAMUKUNJI', NULL, NULL, NULL, NULL),
(314, 47, 'KASARANI', NULL, NULL, NULL, NULL),
(315, 47, 'KIBRA', NULL, NULL, NULL, NULL),
(316, 47, 'LANGATA', NULL, NULL, NULL, NULL),
(317, 47, 'MAKADARA', NULL, NULL, NULL, NULL),
(318, 47, 'MATHARE', NULL, NULL, NULL, NULL),
(319, 47, 'NJIRU', NULL, NULL, NULL, NULL),
(320, 47, 'STAREHE', NULL, NULL, NULL, NULL),
(321, 47, 'WESTLANDS', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `talents`
--

CREATE TABLE `talents` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` int(200) NOT NULL,
  `updated_at` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `passport` varchar(200) DEFAULT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `activation_code` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `forget_password_code` int(116) DEFAULT NULL,
  `last_login` int(116) DEFAULT NULL,
  `active` int(116) DEFAULT NULL,
  `role` int(116) DEFAULT NULL,
  `unique_id` int(200) DEFAULT NULL,
  `locked` int(116) DEFAULT NULL,
  `phone` int(116) DEFAULT NULL,
  `postal_address` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `created_by` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `group_id`, `passport`, `ip_address`, `activation_code`, `company`, `forget_password_code`, `last_login`, `active`, `role`, `unique_id`, `locked`, `phone`, `postal_address`, `created_at`, `updated_at`, `updated_by`, `created_by`) VALUES
(9, 'admin user', 'Admin@ADMIN.COM', '$2y$10$SvtP7JPmdDdVb4Twisa9BeikHYvgWyDLY48lMyvsm1RFqB8RuPule', 1, '', NULL, NULL, NULL, NULL, NULL, 1, 2, 0, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(12, 'D& SONS1', 'info@dandSONS.COm', '$2y$10$gVGAzPa6CCz8xYlUlnqdpOnAR5c.JkfU/yajVEDb9GHNpjvhXiBUK', 3, 'acc_logo13.jpeg', NULL, NULL, NULL, NULL, NULL, 1, 2, 4, 1, 711675033, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00.000000', NULL, NULL),
(31, 'Dennis Kamau Njoroge', 'denniske992@gmail.com1', '$2y$10$Y0n/0Z5DDkr1/m2hkVhnke81H0u375fsjY/lBndaMa/8PZMVH2Uki', 4, 'hero_solar.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 23, 1, 711675033, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00.000000', NULL, NULL),
(32, 'Mark & Sons', 'mark@gmail.com', '$2y$10$m1eDMddOkv5soNdWzfpTXOCuesaHCQHP0XBC7lAXNw4F1SZ1GVNti', 3, 'bluepages.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 8, 1, 798456879, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(33, 'Tesr Bill', 'user@gmail.com', '$2y$10$DgYB2v/71BgAu.HVYW6wuOLDJiK/cEkIi0fDdNI4RqQF4TvYyW/hO', 4, 'bluepages1.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 24, 1, 2147483647, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(34, 'Tesr Bill', 'user@gmail.com', '$2y$10$bVl5Q0WIPlPG/fQ54AsPUO9TApkVtE/ZW7tuyM160CT1NT9ko8y.m', 3, '', NULL, NULL, NULL, NULL, NULL, 1, 2, 9, 1, 2147483647, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(35, 'Tesr Bill', 'user@gmail.com', '$2y$10$li3CFetJ.QDodQroggpYg.sUKzy5Mav19ZeMwfmwgAlYtUoarEcfu', 4, 'bluepages2.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 25, 1, 2147483647, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(36, 'sdfsdf', 'sdfsdf36@posta.go.ke', '$2y$10$NwqTr4WMQya5LfpDNQKQl.eWJDSdSFKNM.X19iSc/JpWcEuv8G0Hy', 3, 'Screenshot_2023-08-03_232942.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 10, 1, 2147483647, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(37, 'Meshack Mai', 'meshackmai37@posta.go.ke', '$2y$10$XF0FwLNATAe20GqDr2QEYefcWzhsPS397Ms9tWaSSU2EWSEwjE7Fq', 4, 'pic_m.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 26, 1, 711675033, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00.000000', NULL, NULL),
(38, 'Global Communication', 'globalcommunication38@posta.go.ke', '$2y$10$GCtdKSpfq15bJqKodvebHOKuYAcs2wPe6pmYEX505lfa8HaR9y292', 3, 'jhgfghjk.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 11, 1, 711675033, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00.000000', NULL, NULL),
(39, 'hrtt mwai', 'hrttmwai@posta.go.ke', '$2y$10$iYhvLJy4eCOST8cHKY/o4ObgVam/nj6iAc3z9iyuvTWv1moeDHuHO', 4, 'IMG_0727.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 27, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(40, 'hrtt mwai', 'hrttmwai1@posta.go.ke', '$2y$10$mpN51jZK6OXq9ttXsmOV6OvsR3csfn3SqiZeXHIOsZFAMgo7tD8g.', 4, 'bluepages4.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 28, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(42, 'hrtt mwai', 'hrttmwai2@posta.go.ke', '$2y$10$Ko6uk0DwCo.BUY2Umr3oGeoLfENSq71TtraObxAKJVBjgbXikx0uS', 4, 'pic_m2.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 30, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(43, 'mark mwai njogu', 'markmwai@posta.go.ke', '$2y$10$iZuFR5pBLvESyvuyhOomlON7YIxk2R9xUZs84TSoexH7j/kI2iSJG', 4, 'pic_m3.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 31, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(44, 'mark mwai njogu', 'markmwai@posta.go.ke', '$2y$10$oGc4tkK1LsdLk7KqQ7SmwOD677y..qK1zsqk/SXnkcGPaV0kzz1v6', 4, 'pic_m4.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 32, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(45, 'mark mwai njogu', 'markmwai1@posta.go.ke', '$2y$10$9y7l2nJ0i8CjKqd5T2Ar6OCKsQQi//Yci5Gjjw7K6CemQP8HqeknW', 4, 'pic_m5.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 33, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(46, 'mark mwai njogu', 'marknjogu@posta.go.ke', '$2y$10$GHhANyEtsyZnPiTFQuz3LOxRgkLABHIOKxhZfYopea8k9AcbhDr5S', 4, 'compling_c_file.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 34, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(48, 'mark mwai njogu', 'marknjogu001@posta.go.ke', '$2y$10$VNEOXf0YPY4NuBfk0QsWpu5AdFG6Fwgf2BWRELvFESxQ0TawnWXlu', 4, 'compling_c_file2.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 36, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(49, 'mark mwai njogu', 'marknjogu001@posta.go.ke', '$2y$10$h/JIQqZMAllrRXQVvJgL1.vPdwNoflW.OkOuASa9kGvf0zGv8klQy', 4, 'compling_c_file3.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 37, 1, 711675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(50, 'Bidco merchants', 'bidcomerchants@posta.go.ke', '$2y$10$z2W9B1kAnrPdMt1a.dySMe3LjGlLc7xnomaGIcmkIAI.xcwkYat4S', 3, 'jhgfghjk1.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 12, 1, 711675045, 'fdgfg 5656', '0000-00-00 00:00:00', NULL, NULL, NULL),
(51, 'Test Company', 'testcompany@posta.go.ke', '$2y$10$xFQPEMKS6BzG0Ru1xqjDzub659TPzrcmW1jgkj169UHL6BgOJXJDO', 3, 'bluepages5.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 13, 1, 701675034, 'PO BOX 776-009 KASARANI', '0000-00-00 00:00:00', NULL, NULL, NULL),
(52, 'dfgdfh dfgdf', 'dfgdfhdfgdf@posta.go.ke', '$2y$10$CAWiT9wmT02YqoYosloLwemK7kIURwld0D1WQllJpAgeadeNWU4h.', 4, 'AUDI.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 38, 1, 711675333, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(53, 'nbm trytr', 'nbmtrytr@posta.go.ke', '$2y$10$KuC.2IYm3QUtBVMRHYFUEu0htnoEAlpMp6XBl1ZJNPFfRVy6Ou/wG', 4, 'AUDI1.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 39, 1, 711675044, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(54, 'dennis ke', 'denniske@posta.go.ke', '$2y$10$5.buck8POsHE7dmeK8YFRukfjLrutN.JQtbr6H6Ks8d21eXLoK13q', 4, 'BMW.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 40, 1, 711675099, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(55, 'dennis ke', 'denniske001@posta.go.ke', '$2y$10$gr/njkaWOf2J2SGXAtXQe.uZZVYToEuHuY6xm.fn62gq.tsGi4xCO', 4, 'AUDI2.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 41, 1, 711675233, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(56, 'dennis ke', 'denniske002@posta.go.ke', '$2y$10$iXDuLfK5WDUP.FAn58w51.VqLOVC8QD.R6OKdhoQBtaek0UXccdiK', 4, 'BMW1.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 42, 1, 722675033, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(57, 'dennis ke', '', '$2y$10$/L8sCCJwz3p0gNJRPku6pubiUXn2Rm9oUQSE3E15.Z2aGJ/10UVzy', 4, 'bluepages6.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 43, 1, 711675066, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(58, 'dfgdfg ergrt', 'dfgdfgergrt@posta.go.ke', '$2y$10$sE7LRLZ5uUQ1jc6XZravRu.ka3NKwLBKPD2Jydj14KAQ.jt8PnCQW', 3, 'bluepages7.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 14, 1, 711675000, 'rtrtr ', '0000-00-00 00:00:00', NULL, NULL, NULL),
(59, 'dennis kcc', 'denniskcc@posta.go.ke', '$2y$10$e/nvGqe5A3rUOmZR.oJrA.7zFJBUtiESaXVvvmgByLOLR1McEnS86', 4, 'IMG_07271.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 44, 1, 711675001, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(60, 'dennis kes', 'denniskes@posta.go.ke', '$2y$10$ycnjzDfxzfVZJrBKZC4KNO6U4K6C7cgxSua7MwmPk3Ya42WabjPpO', 4, 'bluepages8.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 45, 1, 711675666, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(61, 'cvbvb gbgf', 'cvbvbgbgf@posta.go.ke', '$2y$10$NA6KpFLCY.udDZ/L0V7IJuf8v7ICO13e1r4u.AzzCt5vCUe6N445y', 4, 'bluepages9.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 46, 1, 711675323, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(62, 'dennis kedffg', 'denniskedffg@posta.go.ke', '$2y$10$I/Gpkkk.q9M9ssn2zAheW.09YZeC7dM8wJ7eNRHAJKHUURpEkpgQi', 4, 'bluepages10.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 47, 1, 711675222, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(63, 'dennis kef', 'denniskef@posta.go.ke', '$2y$10$rVDZATiO.QloKJrZcNcI9OA2K2V6FpErSXiagC8xSKMuDBPOmMLAy', 4, 'bluepages11.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 48, 1, 711675041, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(64, 'dennis kee', 'denniskee@posta.go.ke', '$2y$10$opzfyKjKwivoH.iXT7cwLOq8VxXI8drPIDYT4btSKG.vOLNWr5soa', 4, 'bluepages12.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 49, 1, 711675042, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(65, 'dennis keuyy', 'denniskeuyy@posta.go.ke', '$2y$10$9Xu4yX5GR2Ly0DwtcJuAbeZylbuKz48DS8eeihooHqhOx2sRxArHm', 4, 'bluepages13.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 50, 1, 711675213, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(66, 'dennis kedfgdf', 'denniskedfgdf@posta.go.ke', '$2y$10$LblX1uivdsi1s1BTmqQqq.ja2T4gtB/Q3FiZ8UIJ06f7mYZ54IFIi', 4, 'bluepages14.png', NULL, NULL, NULL, NULL, NULL, 1, 2, 51, 1, 711675027, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(67, 'dfg rwr', 'dfgrwr@posta.go.ke', '$2y$10$ttAL1iJoaI9beRuPpVtcc.iWTu02Sm/JQphIJiN0W/y1H3AjneoFK', 3, 'pic_m6.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 15, 1, 711675011, 'sdfdfg', '0000-00-00 00:00:00', NULL, NULL, NULL),
(68, 'dennis kefg', 'denniskefg@posta.go.ke', '$2y$10$KopTcEwz36zC0Y41XxJM2ep/fICaKdV5Fi8Mh8WBWq/9dlyOwNMEO', 4, 'JOBS.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 52, 1, 721941380, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(69, 'vn  bnvbn', 'vnbnvbn@posta.go.ke', '$2y$10$7rwABUsNe4aNF4ZFzMAcC./NKodoHhkbYWwzal2YJUaBdt9wYHnAy', 4, 'PETS.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 53, 1, 701941386, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL),
(70, 'Tesr Bill', 'tesrbill@posta.go.ke', '$2y$10$hiMVrULFsJ0xvl3qIDIeEu6vi3utDTwCeaUaHpC3niPqkIWxD9xW6', 4, 'JOBS1.jpg', NULL, NULL, NULL, NULL, NULL, 1, 2, 54, 1, 721041386, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(200) NOT NULL,
  `group_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporates`
--
ALTER TABLE `corporates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_replies`
--
ALTER TABLE `forum_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_views`
--
ALTER TABLE `forum_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_sessions`
--
ALTER TABLE `o_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `reply_responses`
--
ALTER TABLE `reply_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_counties`
--
ALTER TABLE `sub_counties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talents`
--
ALTER TABLE `talents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `corporates`
--
ALTER TABLE `corporates`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `forum_replies`
--
ALTER TABLE `forum_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `forum_views`
--
ALTER TABLE `forum_views`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `o_sessions`
--
ALTER TABLE `o_sessions`
  MODIFY `session_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reply_responses`
--
ALTER TABLE `reply_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `sub_counties`
--
ALTER TABLE `sub_counties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `talents`
--
ALTER TABLE `talents`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
