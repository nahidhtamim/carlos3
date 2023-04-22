-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 08:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carlos`
--

-- --------------------------------------------------------

--
-- Table structure for table `award_certificates`
--

CREATE TABLE `award_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` tinyint(4) NOT NULL DEFAULT 1,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_certificates`
--

INSERT INTO `award_certificates` (`id`, `type_id`, `title`, `description`, `image`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Qality Management ISO-9001-2015', NULL, '1678997475.png', 1, 1, '2023-03-16 14:11:15', '2023-03-16 14:42:24'),
(2, 1, 'Environment Management ISO-14001-2015', NULL, '1678997754.png', 1, 1, '2023-03-16 14:15:54', '2023-03-16 14:42:30'),
(3, 1, 'Occupational Health And Safety Management ISO-45001-2018', NULL, '1678997814.png', 1, 1, '2023-03-16 14:16:54', '2023-03-16 14:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name`, `description_one`, `description_two`, `featured`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '1680188574.jpg', 'Case Study - Kitting Services', '<p><span style=\"color:#c0392b\"><span style=\"font-size:20px\">Customer Requirement</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">A leading&nbsp;automotive brands European after sales services division, was looking for a method of servicing the front cover of one of their high mileage vehicles ensuring that the integrity of the oil seals remained.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Originally the in-country service partner would order each of the individual components and would &ldquo;press&rdquo; the oil seal into the cover onsite; however, without specialist pressing equipment the seal could be damaged and the integrity of the oil seal compromised.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The customer approached TMP Manufacturing for a solution.</span></p>', '<p><span style=\"font-size:20px\"><span style=\"color:#c0392b\">TMP Manufacturing solution</span></span></p>\r\n\r\n<p>A project team was established, consisting of our technical engineer, CAD designer and production manager from our partner company, Total Metal Products. We designed, developed and built a cover assembly station which provided consistent pressing of the oil seal into the cover, controlling the depth, parallelism and cleanliness of the assembly.</p>\r\n\r\n<p>Our supply chain team established purchasing agreements with the customers key component suppliers.</p>\r\n\r\n<p>Bespoke packaging was designed, and the customer&rsquo;s standard labeling system was implemented.&nbsp;</p>\r\n\r\n<p>The customers order processing system was implemented, allowing TMP Manufacturing to automatically receive the daily production scheduling requirements, and update&nbsp;the customer when the schedule is completed awaiting collection.&nbsp;</p>\r\n\r\n<p>TMP Manufacturing now operates 4 cover assembly stations, producing 5 kit variants for the customers European dealer service network.</p>', 1, 'case-study-kitting-services', 1, '2023-03-17 08:35:48', '2023-03-30 20:02:54'),
(2, '1680189265.jpg', 'Case Study - Supplier Insolvency Support', '<p><span style=\"color:#c0392b\"><span style=\"font-size:20px\">Customer Requirement</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">Electronic Throttle Controllers (ETC&rsquo;s) are dedicated to usually one specific vehicle.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The original supplier of ETC&#39;s to a leading automotive brand&nbsp;went into receivership, leaving the customer without five service part numbers and no alternative supplier. The customers technical engineer was aware of&nbsp; TMP Manufacturing broad range of skills from a previous insolvency project, and approached us to see if they could take over the production cell and put the service parts back into production.</span></p>', '<p><span style=\"font-size:20px\"><span style=\"color:#c0392b\"><strong>TMP Manufacturing solution</strong></span></span></p>\r\n\r\n<p><span style=\"color:#000000\">We liaised with the administrator and purchased the production assembly cell set-up (which occupied a floor space of approximately 15&sup2;M). The cell was partially disassembled by us before being transported and reassembled at our premises. In conjunction with the customers technical engineer we sourced a new sub-supplier to take over the production of all the required mouldings for the assemblies. We also set up supply arrangements with the various bought-in components, all from the original sources.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The cell was back in production just a few weeks later producing all five part numbers. A former employee of the original supplier was employed by us to ensure no errors were made, during our early production runs.</span></p>\r\n\r\n<p><span style=\"color:#000000\">After two years of maintaining the assembly cell, it was decided to reduce the cell footprint by around 75% to save floor space. The original assembly cell was designed around three operators and now only one was required to keep up with service volumes. Following the build-up of some buffer stocks, this cell redesign was undertaken by in-house teams. The redesigned cell was back in operation within 2 weeks.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Shortly after the assembly cell redesign, a key sub-supplier, who made the electronic sensors, announced they were ceasing production and would only manufacture one final batch of sensors. As the all-time-requirement was still well in excess of 100,000 sensors, we took over responsibility for the sensor assembly, finding and working with a new supplier in this area.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Two years later the annual service demand had fallen by over 60%.&nbsp;&nbsp;Consequently TMP Manufacturing redesigned and manufactured a manual assembly cell, with only 1&sup2;M floor space. This assembly cell still currently in use.</span></p>', 1, 'case-study-supplier-insolvency-support', 1, '2023-03-17 08:36:07', '2023-03-30 20:14:25'),
(3, '1680189279.jpg', 'Case Study - Resourcing Assemblies', '<p><span style=\"color:#c0392b\"><span style=\"font-size:20px\">Customer Requirement</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">In 2017, a German supplier to a leading automotive manufacturer, was producing three variants of an EGR (exhaust gas recirculation) exhaust manifold assembly for an out of production diesel engine.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The supplier wanted to cease production to free up the floor space for a new production part, and asked the customer to find an alternative supplier, whom they would support. The customer approached TMP Manufacturing to continue the production.</span></p>', '<p><span style=\"font-size:20px\"><span style=\"color:#c0392b\">TMP Manufacturing solution</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">A number of planning meetings between the customer, the supplier and TMP Manufacturing were held. The supplier built up an agreed volume of safety stock prior to all nine dedicated production cells were transferred to us, along with all stocks of component parts, an inventory of spare parts for the machines, and letters of introduction to all component suppliers.</span></p>\r\n\r\n<p><span style=\"color:#000000\">We took over the maintenance of all of the production cells and within a short period of time we were able to supply all three part numbers to the customer production schedules. This included procuring and replacing old Windows 95 PC&rsquo;s on a vital test cell.</span></p>', 1, 'case-study-resourcing-assemblies', 1, '2023-03-17 08:36:44', '2023-03-30 20:14:39'),
(4, '1679941239.png', 'Gary Burley', '<p>Test blog / news item number 4</p>', '<p>Des this work?</p>', 1, 'Gary-Burley', 1, '2023-03-27 12:20:39', '2023-03-28 14:13:17'),
(5, '1679994856.jpg', 'Blog 280323', '<p>This is the latest blog entry I have made</p>', '<p>Extra information should be written here</p>', 1, 'blog-280323', 1, '2023-03-28 14:14:16', '2023-03-29 17:16:07'),
(6, '1680031435.jpg', 'Another 280323 Blog', '<p>This is a test blog on 28/03<br />\r\nText is double lining :(</p>', '<p>Blog text goes here<br />\r\njsajshs</p>', 1, 'another-280323-blog', 1, '2023-03-29 00:23:55', '2023-03-29 17:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `serial`, `title`, `image`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Edible Oil', '1681776448.jpg', 1, 1, '2023-04-17 18:07:28', '2023-04-17 18:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_cards`
--

CREATE TABLE `equipment_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_cards`
--

INSERT INTO `equipment_cards` (`id`, `serial`, `title`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kitting Services', '1679937985.jpg', 'https://tmp.nahidhtamim.top/our-services/Kitting-Services', 1, '2023-03-11 12:55:36', '2023-03-27 11:26:25'),
(2, 2, 'After Sales Parts', '1679938001.png', 'https://tmp.nahidhtamim.top/our-services/After-Sales-Parts', 1, '2023-03-11 12:55:50', '2023-03-27 11:26:41'),
(3, 3, 'After Market Parts', '1679938018.jpg', 'https://tmp.nahidhtamim.top/our-services/Aftermarket-Parts', 1, '2023-03-11 12:56:04', '2023-03-27 11:26:58'),
(4, 4, 'Low volume production', '1679938045.png', 'https://tmp.nahidhtamim.top/our-services/Low-volume-production', 1, '2023-03-11 12:56:17', '2023-03-28 15:10:44');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) DEFAULT NULL,
  `image_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image_id`)),
  `service_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, '167974422769.jpg', 1, '2023-03-25 05:37:07', '2023-03-25 05:37:07'),
(4, '1679763033.jpg', 1, '2023-03-25 05:37:07', '2023-03-25 10:50:33'),
(5, '167976281149.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(6, '167976281173.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(7, '167976281134.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(8, '167976281144.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(9, '167976281185.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(10, '16797628113.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:54:43'),
(11, '167976281145.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(12, '168080764081.jpg', 1, '2023-04-06 13:00:40', '2023-04-06 13:00:40'),
(13, '168080764090.jpg', 1, '2023-04-06 13:00:40', '2023-04-06 13:00:40'),
(14, '168080764073.jpg', 1, '2023-04-06 13:00:40', '2023-04-06 13:00:40'),
(15, '168080764077.jpg', 1, '2023-04-06 13:00:40', '2023-04-06 13:00:40'),
(16, '16808076406.jpg', 1, '2023-04-06 13:00:40', '2023-04-06 13:00:40');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_25_210405_create_links_table', 1),
(6, '2023_01_29_194205_create_socials_table', 1),
(7, '2023_01_29_202327_create_teams_table', 1),
(8, '2023_02_03_173721_create_partners_table', 1),
(9, '2023_02_08_222825_create_services_table', 1),
(10, '2023_03_11_175500_create_equipment_cards_table', 1),
(11, '2023_03_11_183127_create_solutions_table', 1),
(12, '2023_03_11_193644_create_services_table', 2),
(13, '2023_03_15_213754_create_videos_table', 3),
(14, '2023_03_15_220047_create_pages_table', 4),
(15, '2023_03_15_233323_create_award_certificates_table', 5),
(16, '2023_03_17_140032_create_blogs_table', 6),
(17, '2023_03_24_215204_create_timelines_table', 7),
(18, '2023_03_25_092441_create_images_table', 8),
(19, '2023_04_05_174011_create_galleries_table', 9),
(20, '2023_04_17_231945_create_categories_table', 10),
(21, '2023_04_19_174925_create_products_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `serial`, `image`, `name`, `description_one`, `description_two`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '1681939537.jpg', 'Usina Corurpe', '<section class=\"elementor-section elementor-top-section elementor-element elementor-element-560807a elementor-section-boxed elementor-section-height-default\" data-id=\"560807a\" data-element_type=\"section\"><div class=\"elementor-container elementor-column-gap-extended\"><div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-91bbe65\" data-id=\"91bbe65\" data-element_type=\"column\"><div class=\"elementor-widget-wrap elementor-element-populated\"><section class=\"elementor-section elementor-inner-section elementor-element elementor-element-6854975 elementor-section-boxed elementor-section-height-default\" data-id=\"6854975\" data-element_type=\"section\"><div class=\"elementor-container elementor-column-gap-extended\"><div class=\"elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c5d1847\" data-id=\"c5d1847\" data-element_type=\"column\"><div class=\"elementor-widget-wrap elementor-element-populated\"><div class=\"elementor-element elementor-element-e8ef5c8 elementor-widget elementor-widget-heading\" data-id=\"e8ef5c8\" data-element_type=\"widget\" data-widget_type=\"heading.default\"><div class=\"elementor-widget-container\"><h2 class=\"elementor-heading-title elementor-size-default\">About Usina Corurpe</h2></div></div><div class=\"elementor-element elementor-element-57f660f elementor-widget-divider--view-line elementor-widget elementor-widget-divider\" data-id=\"57f660f\" data-element_type=\"widget\" data-widget_type=\"divider.default\"><div class=\"elementor-widget-container\"><div class=\"elementor-divider\">&nbsp;</div></div></div><div class=\"elementor-element elementor-element-3a74f31 elementor-widget elementor-widget-text-editor\" data-id=\"3a74f31\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\"><div class=\"elementor-widget-container\"><p>Usina Corurpe is a Brazilian based leader in the manufacturing, trade supply and distribution of food products and ingredients such as Corn, Soyabeans, Poultry, Pork, and Beef, Dairy, Nuts, Rice, Sugar, Tomato products, Edible oils, feed ingredients, and many more. We also distribute consumer packaged goods to retail and foodservice industries. Our company, with more than 7 years of experience, has streamlined the supply chain through a proprietary platform that supports our logistics and distribution system. Apart from our own produced products, we sell over 4,300 products from 45 source countries into over 112 destination countries.</p><p>In 2016 Usina Corurpe joined forces with Seaboard Corporation, a Fortune 500 company with dozens of subsidiaries and affiliates across the world. Seaboard Overseas and Trading Group, a division of Seaboard Corporations and Usina Corurpe, is a global agribusiness company focused on milling and merchandising grains and protein meals. Together these business units source, transport, and market 13 million metric tons of grains and commodities each year.</p></div></div></div></div></div></section></div></div></div></section>', '<div class=\"elementor-element elementor-element-9c3557e elementor-widget elementor-widget-heading\" data-id=\"9c3557e\" data-element_type=\"widget\" data-widget_type=\"heading.default\"><div class=\"elementor-widget-container\"><h2 class=\"elementor-heading-title elementor-size-default\">Company Profile</h2></div></div><div class=\"elementor-element elementor-element-7435ff6 elementor-widget elementor-widget-text-editor\" data-id=\"7435ff6\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\"><div class=\"elementor-widget-container\"><p>At Usina Corurpe, we are dedicated to providing customers and suppliers with exceptional value. Our customers trust us to find the right source at the right price. Our suppliers count on us to market and trade their products competitively. Usina Corurpe documentation and logistics capabilities distinguish us from our competition, allowing us to offer outstanding service from start to finish. At Usina Corurpe, we know what is important to our customers and suppliers in their own markets.</p><p>We are in the information business. Whether your question is about availability, quality, pricing, logistics or compliance – our staff will deliver accurate, timely information that you will come to rely on. What keeps our course and guides this company is a simple promise: “Our word is our ink – it’s the bond with our suppliers and customers.” With this guiding principle as our compass, we work with customers and suppliers who share in our business ethic. We do this because, at the end of the day, trust is the bond in a long-term relationship.</p><p>Combined, these features support the company’s mission – “The right quality, The right price, The right time – Usina Corurpe Delivers!”</p></div></div>', 'usina-corurpe', 1, '2023-03-15 17:00:49', '2023-04-19 15:25:37'),
(7, 2, '1681940138.jpg', 'Values, Vision, Mission', '<h1>Our Values</h1><p class=\"todo-list\"><label class=\"todo-list__label\"><span class=\"todo-list__label__description\">Insisting on&nbsp;Integrity, Striving for Excellence, Promoting the Family &amp; Fostering Cooperation</span></label></p><h1>Our Vision</h1><p>Usina Corurpe is a global leader in international trade through innovative technology, values driven professionals, and strategic relationships.</p><h1 class=\"elementor-heading-title elementor-size-default\">Our Mission</h1><p class=\"elementor-heading-title elementor-size-default\">Usina Corurpe strives to provide our customers and business partners with professionally accurate, precise and timely market information. We continually implement new ideas and technology allowing us to be a global leader in our industry and to ensure a competitive position in international trade.</p>', NULL, 'values-vision-mission', 1, '2023-03-27 12:16:04', '2023-04-19 15:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ford FCSD', '1679938154.svg', NULL, 1, '2023-03-11 13:04:50', '2023-03-27 11:29:14'),
(2, 'Land Rover', '1679938210.svg', NULL, 1, '2023-03-11 13:05:02', '2023-03-27 11:30:10'),
(3, 'Aston Martin', '1679938221.svg', NULL, 1, '2023-03-11 13:05:17', '2023-03-27 11:30:21'),
(4, 'Gestamp', '1679938230.jpg', NULL, 1, '2023-03-11 13:06:13', '2023-03-27 11:30:30'),
(5, 'LEVC', '1679938245.svg', NULL, 1, '2023-03-11 13:06:35', '2023-03-27 11:30:45'),
(6, 'Jaguar', '1679938370.svg', NULL, 1, '2023-03-11 13:06:58', '2023-03-27 11:32:50');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `type_id` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `description_one`, `description_two`, `slug`, `status`, `type_id`, `created_at`, `updated_at`) VALUES
(1, '1679938519.jpg', 'Kitting Services', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">Our kitting services?</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing has the supply chain control and inhouse expertise to handle low &ndash; medium volume kitting of service style kits, we have expertise in handling these services from a low volume (less than 100 kits PA) through to 100,000 kits per annum.<br />\r\n<br />\r\nOur assembly and supply chain management combined with our logistical controls, means we can ship worldwide.<br />\r\n<br />\r\nWe have comprehensive inhouse stock and process controls and are comfortable handling an international supply chain to bring all this together for a global customer base.</span></span></p>', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">What are kitting services?</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Kitting is a cost-effective way of providing customers with the items they need in one package. It is&nbsp;the process of assembling related materials into a single package or kit. It is used by businesses to save time and money by grouping components together in one package, eliminating the need for multiple orders and shipments. Kitting can be used for material kitting, product kitting, and service part kitting.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Kitting has become an increasingly popular option for businesses of all sizes as it offers numerous advantages such as reduced inventory costs, improved customer satisfaction, and increased efficiency. With kitting, companies can provide their customers with everything they need in one package, making it easier for them to get what they need quickly and easily.</span></span></p>\r\n\r\n<h1><span style=\"font-size:20px\"><span style=\"color:#c0392b\">If your organisation has material or kitting requirements, please do not hesitate to contact us.</span></span></h1>', 'kitting-services', 1, 1, '2023-03-11 14:23:52', '2023-03-30 14:57:04'),
(4, '1680171731.png', 'After Sales Parts', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">Our After Sales Parts Services</span></span><br />\r\n<br />\r\n<span style=\"color:#000000\"><span style=\"font-size:16px\">If you are a brand owner and you are looking for an after sales/after sales partner because:</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you have a supplier who is at risk or has become insolvent;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want an additional supplier to protect / bolster your supply chain;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want an in-country supplier to reduce your resupply time or reduce cross border cost / administration;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want to produce a service kit from a number of individual service parts;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want to produce a low volume / all time run; or</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want to resource parts from former suppliers who have have ceased trading</span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing can provide you with a service partner who can eliminate your challenge and support your after sales network.&nbsp;</span></span></p>', '<p><span style=\"font-size:36px\"><span style=\"color:#c0392b\">How can we support your After Sales Parts requirements?</span></span><br />\r\n<span style=\"font-size:16px\"><span style=\"color:#000000\">At TMP Manufacturing we have the experience and expertise to meet your after sales part needs.&nbsp;<br />\r\n<br />\r\nAs highlighted in our </span><a href=\"https://tmp.nahidhtamim.top/blogs\"><span style=\"color:#000000\">News / Blog page</span></a><span style=\"color:#000000\">&nbsp;we have worked with a number of brand owners to supply after sales parts to their business network.&nbsp;<br />\r\n<br />\r\nWith comprehensive in-house stock control processes, we are comfortable handling an international supply chain to bring all this together for our customer base. And&nbsp;</span></span><span style=\"font-size:16px\"><span style=\"color:#000000\">combined&nbsp;with our logistical controls we can ship worldwide.</span></span></p>\r\n\r\n<p><strong><span style=\"font-size:20px\"><span style=\"color:#c0392b\">If your organisation has any after sale parts requirements, please do not hesitate to contact us.</span></span></strong><br />\r\n&nbsp;</p>', 'after-sales-parts', 1, 1, '2023-03-11 14:23:52', '2023-03-30 16:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Consult', '1678561066.jpg', 1, '2023-03-11 12:57:46', '2023-03-11 12:57:46'),
(2, 'Design', '1678561106.jpg', 1, '2023-03-11 12:58:26', '2023-03-11 12:59:12'),
(3, 'Manufacture', '1678561121.jpg', 1, '2023-03-11 12:58:41', '2023-03-11 12:58:41'),
(4, 'Supply Chain Management', '1678561134.jpg', 1, '2023-03-11 12:58:54', '2023-03-13 17:14:57'),
(5, 'Automate', '1678561171.jpg', 1, '2023-03-11 12:59:31', '2023-03-11 12:59:31'),
(6, 'Protype Design', '1678561309.jpg', 1, '2023-03-11 13:01:49', '2023-03-25 03:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `timelines`
--

CREATE TABLE `timelines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timelines`
--

INSERT INTO `timelines` (`id`, `serial`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2010', 'Total Metal Products formed in May 2010', 1, '2023-03-24 16:50:38', '2023-03-24 16:50:38'),
(2, 2, '2011', 'Total Metal Products moves into its own dedicated workshop (leasehold property)', 1, '2023-03-24 16:51:17', '2023-03-24 16:51:17'),
(3, 3, '2012', 'Invested in our first CNC Mill', 1, '2023-03-24 17:27:25', '2023-03-24 17:27:25'),
(4, 4, '2013', 'Investment into a second mill and a CNC lathe', 1, '2023-03-24 17:27:45', '2023-03-24 17:27:45'),
(5, 5, '2014', 'Invested in a new Haas VF9 Milling machine c/w 4th Axis', 1, '2023-03-24 17:28:04', '2023-03-24 17:28:04'),
(6, 6, '2015', '<p>TMP Manufacturing formed<br />\r\nWinners of the Monmouthshire Business Awards 2015</p>\r\n\r\n<p>&ldquo;Company Demonstrating Sustained Growth&rdquo;<br />\r\nTotal Metal Products completed a large R&amp;D Project</p>', 1, '2023-03-27 12:22:51', '2023-03-29 00:03:28'),
(7, 7, '2016', 'TMP Group formed\r\nMoved into current premises\r\nBuilding extended to create a \r\ndedicated manufacturing are', 1, '2023-03-27 12:23:12', '2023-03-27 12:23:12'),
(8, 8, '2017', 'Investment into EDM Wire \r\nCutting technology\r\n.Winners of The Forester \r\nBusiness Awards 2017 -\r\n\"Business of the Year\"', 1, '2023-03-27 12:23:31', '2023-03-27 12:23:31'),
(9, 9, '2018', 'Unit 1 purchased to future proof and \r\nfacilitate business expansion. \r\nTMP wins ‘Company of the Year’ at Forest of \r\nDean and Wye Valley Business Awards.\r\nPurchased a MAZAK CNC lathe', 1, '2023-03-27 12:23:47', '2023-03-27 12:23:47'),
(10, 10, '2019', '<p>HAAS UMC-750 5-Axis &amp; VF-4 VMC CNC purchased<br />\r\nWinners of the Forest of Dean &amp; Wye Valley Business Awards &ldquo;Business of the Year&rdquo;<br />\r\nTMP Manufacturing relocates to Unit 1<br />\r\nISO 45001:2018 accredited</p>', 1, '2023-03-27 12:24:04', '2023-03-29 12:27:45'),
(11, 11, '2020', 'Invested in a 10’ span FARO Arm CMM with \r\nfull faro software, new Haas VM-3 highperformance VMC and 2nd Panther pressing station.\r\nISO 9001:2015 and ISO 14001:2015 accredited.', 1, '2023-03-27 12:24:25', '2023-03-27 12:24:25'),
(12, 12, '2021', 'TMP Group invests in a 66.60 kWp solar farm.', 1, '2023-03-27 12:24:43', '2023-03-27 12:24:43'),
(13, 13, '2022', 'TMP Manufacturing installs an additional 22 kWp solar farm.', 1, '2023-03-27 12:25:04', '2023-03-27 12:25:04'),
(14, 14, '2023', 'TMP Manufacturing website launched', 1, '2023-03-28 12:57:43', '2023-03-28 12:58:00');

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
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$D1IMwLbzT2w3BxqtgSz5H.s1c91U2NjGeRiSlq8Ts7zFbuS4vCczW', 1, NULL, '2023-03-11 12:53:16', '2023-03-11 12:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `created_at`, `updated_at`) VALUES
(1, '1678922030.mp4', '2023-03-15 17:13:50', '2023-03-15 17:13:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award_certificates`
--
ALTER TABLE `award_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_cards`
--
ALTER TABLE `equipment_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `award_certificates`
--
ALTER TABLE `award_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipment_cards`
--
ALTER TABLE `equipment_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timelines`
--
ALTER TABLE `timelines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
