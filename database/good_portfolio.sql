-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 10:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `good_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_counts`
--

CREATE TABLE `about_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `divColClass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iClass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_counts`
--

INSERT INTO `about_counts` (`id`, `divColClass`, `iClass`, `number`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 'icofont-simple-smile', 2, 'Số năm kinh nghiệm', NULL, '2021-03-05 00:28:55'),
(2, 'mt-5 mt-md-0', 'icofont-document-folder', 268, 'Số lượng hình đã hoàn thành', NULL, '2021-03-05 00:29:28'),
(3, 'mt-5 mt-lg-0 p-0', 'icofont-live-support', 40, 'Số giờ làm việc trung bình /tuần', NULL, '2021-03-05 00:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `about_interests`
--

CREATE TABLE `about_interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `divColClass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iClass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iColor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_interests`
--

INSERT INTO `about_interests` (`id`, `divColClass`, `iClass`, `iColor`, `description`, `created_at`, `updated_at`) VALUES
(1, '', 'ri-store-line', 'color: #ffbb2c;', 'Baking / Cooking', NULL, NULL),
(2, 'mt-4 mt-md-0', 'ri-bar-chart-box-line', 'color: #5578ff;', 'Coding', NULL, NULL),
(3, 'mt-4 mt-md-0', 'ri-calendar-todo-line', 'color: #e80368;', 'Organizing', NULL, NULL),
(4, 'mt-4 mt-md-0', 'ri-paint-brush-line', 'color: #e361ff;', 'Crafting', NULL, NULL),
(5, 'mt-4', 'ri-database-2-line', 'color: #47aeff;', 'Traveling', NULL, NULL),
(6, 'mt-4', 'ri-gradienter-line', 'color: #ffa76e;', 'Learning foreign languages', NULL, NULL),
(7, 'mt-4', 'ri-file-list-3-line', 'color: #11dbcf;', 'Reading', NULL, NULL),
(8, 'mt-4', 'ri-price-tag-2-line', 'color: #4233ff;', 'Meditation', NULL, NULL),
(9, 'mt-4', 'ri-anchor-line', 'color: #b2904f;', 'Taking walks', NULL, NULL),
(10, 'mt-4', 'ri-disc-line', 'color: #b20969;', 'Enjoying Music', NULL, NULL),
(11, 'mt-4', 'ri-base-station-line', 'color: #ff5828;', 'Asian Culture', NULL, NULL),
(12, 'mt-4', 'ri-fingerprint-line', 'color: #29cc61;', 'Hiking', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_me_contents`
--

CREATE TABLE `about_me_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_me_contents`
--

INSERT INTO `about_me_contents` (`id`, `title`, `description`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Nghệ nhân xăm hình', 'Tattoo là gì? Nghệ thuật hay sự lập dị của xã hội đương đại? Sẽ có nhiều câu hỏi đặt ra như vậy? Theo bạn sẽ là gì? Nhưng xét ở một khía cạnh khách quan, Tattoo là một nghệ thuật, một nghệ nhân xăm mình (Tattoo Artist) cũng giống như một họa sỹ vậy.', 'Đừng ngần ngại nữa hãy kết nối hoặc gọi điện ngay để tôi tư vấn và giúp bạn có được 1 tác phẩm ưng ý nhất, đẹp nhất.', NULL, '2021-03-05 00:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `about_me_images`
--

CREATE TABLE `about_me_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_me_images`
--

INSERT INTO `about_me_images` (`id`, `src`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'img/TidBW.jpg', 'Ảnh của tôi', NULL, '2021-03-05 00:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `about_me_infos`
--

CREATE TABLE `about_me_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_me_infos`
--

INSERT INTO `about_me_infos` (`id`, `icon`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'icofont-rounded-right', 'Birthday:', '24 November 1997', NULL, NULL),
(2, 'icofont-rounded-right', 'Instagram:', 'https://www.instagram.com/greeny.ink/', NULL, '2021-03-05 00:08:22'),
(3, 'icofont-rounded-right', 'Phone:', '+84 0969 546 681', NULL, '2021-03-05 00:10:48'),
(4, 'icofont-rounded-right', 'City:', 'Ha Noi, Viet Nam', NULL, '2021-03-05 00:11:28'),
(5, 'icofont-rounded-right', 'Age:', '23', NULL, NULL),
(6, 'icofont-rounded-right', 'Degree:', 'Bachelor', NULL, NULL),
(7, 'icofont-rounded-right', 'Email', 'greeny-ink@gmail.com', NULL, '2021-03-05 00:19:38'),
(8, 'icofont-rounded-right', 'Freelance', 'Available', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_skills`
--

CREATE TABLE `about_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iValue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ariaValue` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_skills`
--

INSERT INTO `about_skills` (`id`, `skill`, `iValue`, `ariaValue`, `created_at`, `updated_at`) VALUES
(1, 'Classic Americana', '90%', 90, NULL, '2021-03-05 00:22:01'),
(2, 'Japanese', '85%', 85, NULL, '2021-03-05 00:22:20'),
(3, 'Black and grey', '100%', 100, NULL, '2021-03-05 00:23:01'),
(4, 'Portraiture', '60%', 60, NULL, '2021-03-05 00:23:27'),
(5, 'Realism', '70%', 70, NULL, '2021-03-05 00:23:45'),
(6, 'Biomechanical', '65%', 65, NULL, '2021-03-05 00:24:00'),
(7, 'Realistic Trash Polka', '85%', 85, NULL, '2021-03-05 00:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `about_titles`
--

CREATE TABLE `about_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_titles`
--

INSERT INTO `about_titles` (`id`, `title`, `para`, `created_at`, `updated_at`) VALUES
(1, 'Tôi', 'Hãy tìm hiểu về tôi', NULL, '2021-03-05 00:13:53'),
(2, 'Kỹ năng vốn có:', 'Một sự tinh tế cho thiết kế và sáng tạo. Một bàn tay ổn định. Một tình yêu với các nền văn hóa. Kiên nhẫn và tận tâm. Kỹ năng giao tiếp tốt. Cực kỳ chú ý đến chi tiết. Bản chất đồng cảm và khả năng biến ý tưởng của khách hàng thành hiện thực.', NULL, '2021-03-05 00:15:28'),
(3, 'Interests', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_cards`
--

CREATE TABLE `contact_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `divColClass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iClass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_cards`
--

INSERT INTO `contact_cards` (`id`, `divColClass`, `iClass`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '', 'bx bx-map', 'My Address', 'Hà Nội, Việt Nam', NULL, NULL),
(2, 'mt-4 mt-md-0', 'bx bx-share-alt', 'Social Profiles', '', NULL, NULL),
(3, 'mt-4', 'bx bx-envelope', 'Email Me', 'greeny-ink@gmail.com', NULL, NULL),
(4, 'mt-4', 'bx bx-phone-call', 'Call Me', '+84 0969 546 681', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_titles`
--

CREATE TABLE `contact_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_titles`
--

INSERT INTO `contact_titles` (`id`, `title`, `para`, `created_at`, `updated_at`) VALUES
(1, 'Liên hệ', 'Liên hệ ngay!', NULL, '2021-03-05 00:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_title2s`
--

CREATE TABLE `home_title2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionPost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_title2s`
--

INSERT INTO `home_title2s` (`id`, `description1`, `descriptionPost`, `description2`, `created_at`, `updated_at`) VALUES
(1, 'Một chiếc ', 'Thợ xăm', 'với tâm hồn mộng mơ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_titles`
--

CREATE TABLE `home_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_titles`
--

INSERT INTO `home_titles` (`id`, `name`, `href`, `created_at`, `updated_at`) VALUES
(1, 'Greeny Ink', '/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_25_154309_create_navlinks_table', 1),
(5, '2021_02_25_160805_create_social_links_table', 1),
(6, '2021_02_25_162556_create_home_titles_table', 1),
(7, '2021_02_25_163832_create_home_title2s_table', 1),
(8, '2021_02_25_171906_create_about_titles_table', 1),
(9, '2021_02_25_173443_create_about_me_images_table', 1),
(10, '2021_02_25_174154_create_about_me_contents_table', 1),
(11, '2021_02_25_175154_create_about_me_infos_table', 1),
(12, '2021_02_25_203350_create_about_counts_table', 1),
(13, '2021_02_25_204844_create_about_skills_table', 1),
(14, '2021_02_25_211218_create_about_interests_table', 1),
(15, '2021_02_25_223952_create_resume_titles_table', 1),
(16, '2021_02_25_225139_create_resume_presentations_table', 1),
(17, '2021_02_25_225901_create_resume_title2s_table', 1),
(18, '2021_02_25_230630_create_resume_infos_table', 1),
(19, '2021_02_25_231124_create_resume_education_table', 1),
(20, '2021_02_25_232139_create_resume_professionals_table', 1),
(21, '2021_02_25_234850_create_portfolio_titles_table', 1),
(22, '2021_02_26_000553_create_portfolio_filters_table', 1),
(23, '2021_02_26_001454_create_portfolio_divs_table', 1),
(24, '2021_02_26_004452_create_contact_titles_table', 1),
(25, '2021_02_26_005805_create_contact_cards_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navlinks`
--

CREATE TABLE `navlinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navlinks`
--

INSERT INTO `navlinks` (`id`, `href`, `name`, `created_at`, `updated_at`) VALUES
(1, '#header', 'Trang chủ', NULL, '2021-03-05 00:11:44'),
(2, '#portfolio', 'Portfolio', NULL, NULL),
(3, '#about', 'Nói về tôi...', NULL, '2021-03-05 00:12:06'),
(4, '#resume', 'Lược sử', NULL, '2021-03-05 00:12:29'),
(5, '#contact', 'Liên hệ ngay!', NULL, '2021-03-05 00:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_divs`
--

CREATE TABLE `portfolio_divs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgsrc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a1Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a2href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_divs`
--

INSERT INTO `portfolio_divs` (`id`, `filter`, `imgsrc`, `title`, `description`, `a1Title`, `a2href`, `created_at`, `updated_at`) VALUES
(13, 'filter-realism', '/img/work/69618039_147856036423169_1039589594990065562_n.jpg', 'Wolf in the Wood', 'Một chiếc sói trong rừng rậm', 'Wolf in the Wood', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:01:46', '2021-03-05 01:22:20'),
(14, 'filter-surrealism', '/img/work/72145538_243441466635818_7357175612419260364_n.jpg', 'Hand of God', 'Một tác phẩm siêu thực', 'Hand of God', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:02:50', '2021-03-05 01:22:48'),
(15, 'filter-flower', '/img/work/106078005_2576203179286320_6820210371173119023_n.jpg', 'Hoa Bất Tử', 'Một chiếc hoa gợi cảm đầy mạnh mẽ', 'Hoa Bất Tử', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:03:40', '2021-03-05 01:23:00'),
(16, 'filter-animal', '/img/work/106563348_115821036655938_3469262195419612979_n.jpg', 'Curious Owl', 'Một chiếc cú tò mò', 'Curious Owl', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:24:53', '2021-03-05 01:40:14'),
(17, 'filter-words', '/img/work/114581424_348231899510729_8701059672178337467_n.jpg', 'Tình yêu diệu kỳ', 'Một tác phẩm làm bằng cả trái tim', 'Tình yêu diệu kỳ', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:26:05', '2021-03-05 01:26:05'),
(18, 'filter-cartoon', '/img/work/117350896_233492314486672_6615215541859641434_n.jpg', 'Owl Triangle', 'Một chiếc hình cách điệu thật bí ẩn', 'Owl Triangle', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:27:12', '2021-03-05 01:27:12'),
(19, 'filter-words', '/img/work/117814931_197395155277073_94600537713134727_n.jpg', 'Strength, Respect, Loyalty', 'Quyền lực, Sự tôn trọng và lòng thành kính', 'Strength, Respect, Loyalty', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:28:14', '2021-03-05 01:28:14'),
(20, 'filter-realism', '/img/work/119132511_316620326068541_8639418347070215081_n.jpg', 'Halley Quinn', 'Một người đàn bà nguy hiểm!', 'Halley Quinn', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:29:15', '2021-03-05 01:29:15'),
(21, 'filter-realism', '/img/work/123147850_147415767075843_4624584787248004940_n.jpg', 'Halley Quinn Chapter 2', 'm', 'Halley Quinn Chapter 2', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:29:59', '2021-03-05 01:29:59'),
(22, 'filter-surrealism', '/img/work/124073544_721349135141814_7097388126394975069_n.jpg', 'Mặt trời không bao giờ lặn', 'Một chiếc hình siêu thực', 'Mặt trời không bao giờ lặn', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:31:04', '2021-03-05 01:31:04'),
(23, 'filter-words', '/img/work/124687120_3559360034125905_7613539443146134890_n.jpg', 'Đừng nghĩ ngợi nhiều, hãy hành động!', 'Stop overthinking and do something!', 'Đừng nghĩ ngợi nhiều, hãy hành động!', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:32:01', '2021-03-05 01:32:01'),
(24, 'filter-animal', '/img/work/125834105_380235736755893_1010092487987390894_n.jpg', 'Một chiếc hươu cách điệu', 'Trào lưu thật tuyệt phù hợp cho tất cả mọi người', 'Một chiếc hươu cách điệu', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:33:22', '2021-03-05 01:38:14'),
(25, 'filter-surrealism', '/img/work/126609258_3937521492928174_3113388217770808665_n.jpg', 'Một chiếc la bàn luôn hướng về phía người thân yêu nhất', 'Family is the best!', 'Một chiếc la bàn luôn hướng về phía người thân yêu nhất', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:34:07', '2021-03-05 01:41:00'),
(26, 'filter-animal', '/img/work/135851953_234691638144216_2196774916492436203_n.jpg', 'Hai chiếc bướm thật xinh đẹp', 'Blue Butterfly', 'Hai chiếc bướm thật xinh đẹp', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:35:20', '2021-03-05 01:35:20'),
(27, 'filter-cartoon', '/img/work/136375995_415125129808038_5842751893656770210_n.jpg', 'Một chút nghịch ngợm thể hiện cá tính', '#SexyBaby', 'Một chút nghịch ngợm thể hiện cá tính', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:36:06', '2021-03-05 01:36:06'),
(28, 'filter-cartoon', '/img/work/150496298_229012508919992_8690676796146805819_n.jpg', 'UP!', 'Một căn nhà nhỏ với thật nhiều bóng bay!', 'UP!', 'https://www.instagram.com/greeny.ink/', '2021-03-05 01:36:51', '2021-03-05 01:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_filters`
--

CREATE TABLE `portfolio_filters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_filters`
--

INSERT INTO `portfolio_filters` (`id`, `data`, `name`, `created_at`, `updated_at`) VALUES
(1, '*', 'All', NULL, NULL),
(2, '.filter-realism', 'Realism', NULL, '2021-03-05 01:15:22'),
(3, '.filter-surrealism', 'Surrealism', NULL, '2021-03-05 01:17:32'),
(4, '.filter-flower', 'Flower', NULL, '2021-03-05 01:17:43'),
(5, '.filter-cartoon', 'Cartoon', '2021-03-05 01:37:14', '2021-03-05 01:37:14'),
(6, '.filter-words', 'Words', '2021-03-05 01:37:27', '2021-03-05 01:37:27'),
(7, '.filter-animal', 'Animal', '2021-03-05 01:37:40', '2021-03-05 01:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_titles`
--

CREATE TABLE `portfolio_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_titles`
--

INSERT INTO `portfolio_titles` (`id`, `title`, `para`, `created_at`, `updated_at`) VALUES
(1, 'Portfolio', 'Tác phẩm của tôi', NULL, '2021-03-05 00:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `resume_education`
--

CREATE TABLE `resume_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_education`
--

INSERT INTO `resume_education` (`id`, `title`, `date`, `institution`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tattoo Artist', '01/2020 - Nay', 'Làm vì đam mê', 'Bỏ cả đại học', NULL, '2021-03-05 00:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `resume_infos`
--

CREATE TABLE `resume_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_infos`
--

INSERT INTO `resume_infos` (`id`, `info`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội, Việt Nam', NULL, '2021-03-05 00:32:37'),
(2, '(+84) 0969 546 681', NULL, '2021-03-05 00:33:38'),
(3, 'greeny-ink@gmail.com', NULL, '2021-03-05 00:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `resume_presentations`
--

CREATE TABLE `resume_presentations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_presentations`
--

INSERT INTO `resume_presentations` (`id`, `name`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Greeny-ink', 'Mỗi hình xăm luôn thể hiện một hàm ý sâu sắc nào đó. Chúng là dấu ấn, kỉ niệm đáng nhớ mà bạn khắc họa lên cơ thể. Hình xăm không chỉ đẹp ở hình thức bên ngoài mà còn nhắc nhở trong cuộc sống tương lai.', NULL, '2021-03-05 00:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `resume_professionals`
--

CREATE TABLE `resume_professionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_professionals`
--

INSERT INTO `resume_professionals` (`id`, `title`, `date`, `institution`, `task1`, `task2`, `task3`, `task4`, `task5`, `task6`, `created_at`, `updated_at`) VALUES
(1, 'Resourcer Intern', 'February 2020 - May 2020', 'Modis Belgium – Modis IT & Engineering, Grand-Bigard', 'Search of the different IT profiles and the redaction of IT\r\n                    basics documentation', 'Search of specific candidates according to client’s criteria\r\n                    on many platforms (websites and databases) and the\r\n                    correspondence by phone and by mail', 'Search of companies in need of candidates and the creation\r\n                    of a list for the Business Manager', 'Creating candidates’ profiles in Modis’ database and\r\n                    creating companies accounts in Adecco’s database\r\n                    (Salesforce)', 'Updating my Excel file containing all the researches’ results\r\n                    (clients, contacts and job offer)', '', NULL, NULL),
(2, 'Administration Intern', 'May 2018', 'AWEX – Directorate for Financial Incentives, Brussels', 'Assistance in controlling incoming files', 'File analysis, mail writing', 'Excel database updating, mail archiving, graphics creation and getting the tasks done by following the database.', 'Online currency searches', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resume_title2s`
--

CREATE TABLE `resume_title2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_title2s`
--

INSERT INTO `resume_title2s` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Sumary', NULL, NULL),
(2, 'Education', NULL, NULL),
(3, 'Professional Experience', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resume_titles`
--

CREATE TABLE `resume_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_titles`
--

INSERT INTO `resume_titles` (`id`, `title`, `para`, `created_at`, `updated_at`) VALUES
(1, 'Lược sử', 'Hãy xem qua lược sử của tôi', NULL, '2021-03-05 00:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aClass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iClass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `href`, `aClass`, `iClass`, `created_at`, `updated_at`) VALUES
(1, 'https://twitter.com/', 'twitter', 'icofont-twitter', NULL, NULL),
(2, 'https://www.facebook.com/', 'facebook', 'icofont-facebook', NULL, NULL),
(3, 'https://www.instagram.com/greeny.ink/', 'instagram', 'icofont-instagram', NULL, '2021-03-05 00:13:03'),
(4, 'https://myaccount.google.com/intro/profile', 'google-plus', 'icofont-skype', NULL, NULL),
(5, 'http://www.linkedin.com/', 'linkedin', 'icofont-linkedin', NULL, '2021-03-05 00:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_counts`
--
ALTER TABLE `about_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_interests`
--
ALTER TABLE `about_interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_me_contents`
--
ALTER TABLE `about_me_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_me_images`
--
ALTER TABLE `about_me_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_me_infos`
--
ALTER TABLE `about_me_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_skills`
--
ALTER TABLE `about_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_titles`
--
ALTER TABLE `about_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_cards`
--
ALTER TABLE `contact_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_titles`
--
ALTER TABLE `contact_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_title2s`
--
ALTER TABLE `home_title2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_titles`
--
ALTER TABLE `home_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navlinks`
--
ALTER TABLE `navlinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolio_divs`
--
ALTER TABLE `portfolio_divs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_filters`
--
ALTER TABLE `portfolio_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_titles`
--
ALTER TABLE `portfolio_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_infos`
--
ALTER TABLE `resume_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_presentations`
--
ALTER TABLE `resume_presentations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_professionals`
--
ALTER TABLE `resume_professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_title2s`
--
ALTER TABLE `resume_title2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_titles`
--
ALTER TABLE `resume_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_counts`
--
ALTER TABLE `about_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_interests`
--
ALTER TABLE `about_interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `about_me_contents`
--
ALTER TABLE `about_me_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_me_images`
--
ALTER TABLE `about_me_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_me_infos`
--
ALTER TABLE `about_me_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `about_skills`
--
ALTER TABLE `about_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `about_titles`
--
ALTER TABLE `about_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_cards`
--
ALTER TABLE `contact_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_titles`
--
ALTER TABLE `contact_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_title2s`
--
ALTER TABLE `home_title2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_titles`
--
ALTER TABLE `home_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `navlinks`
--
ALTER TABLE `navlinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio_divs`
--
ALTER TABLE `portfolio_divs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `portfolio_filters`
--
ALTER TABLE `portfolio_filters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio_titles`
--
ALTER TABLE `portfolio_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resume_education`
--
ALTER TABLE `resume_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resume_infos`
--
ALTER TABLE `resume_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume_presentations`
--
ALTER TABLE `resume_presentations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resume_professionals`
--
ALTER TABLE `resume_professionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resume_title2s`
--
ALTER TABLE `resume_title2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume_titles`
--
ALTER TABLE `resume_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
