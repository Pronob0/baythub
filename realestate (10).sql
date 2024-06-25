-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 04:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) NOT NULL,
  `header_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `header_title`, `title`, `description`) VALUES
(1, 'About Our Companyyyy', 'We’re Committed to Roofing Excellence', '<div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" style=\"outline: none; color: rgb(105, 105, 105); font-family: Jost;\"><h2 style=\"outline: none; font-weight: 400; line-height: 36px; font-size: 30px; color: rgb(32, 40, 56);\"><font size=\"6\" style=\"outline: none;\">Title number 1</font><br style=\"outline: none;\"></h2><p style=\"outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.8;\"><span style=\"outline: none; font-weight: 700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" style=\"outline: none; color: rgb(105, 105, 105); font-family: Jost;\"><h2 style=\"outline: none; font-weight: 400; line-height: 36px; font-size: 30px; color: rgb(32, 40, 56);\"><font size=\"6\" style=\"outline: none;\">Title number 2</font><br style=\"outline: none;\"></h2><p style=\"outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.8;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" style=\"outline: none; color: rgb(105, 105, 105); font-family: Jost;\"><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" style=\"outline: none; color: rgb(105, 105, 105); font-family: Jost;\"><h2 style=\"outline: none; font-weight: 400; line-height: 36px; font-size: 30px; color: rgb(32, 40, 56);\"><font size=\"6\" style=\"outline: none;\">Title number 3</font><br style=\"outline: none;\"></h2><p style=\"outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.8;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.8;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2 helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 700;=\"\" line-height:=\"\" 1.1;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" margin:=\"\" 0px=\"\" 15px;=\"\" font-size:=\"\" 30px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" 51);\"=\"\" style=\"outline: none; font-weight: 400; line-height: 36px; font-size: 30px; color: rgb(32, 40, 56); font-family: Jost;\"><font size=\"6\" style=\"outline: none;\">Title number 9</font><br style=\"outline: none;\"></h2><p helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" style=\"outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.8; color: rgb(105, 105, 105); font-family: Jost;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verify_token` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verify_token`, `phone`, `photo`, `role_id`, `role`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '', '09000000', '5021030811679304831.png', '0', 'Administrator', 1, '$2y$10$XRwVDuEISDfSl5ATNW59yOlGAb2h/9PJDX5WKErChklrQeDi0wb.i', 'iej9icmkyjyhwznHIyQHtxwn0CzOh7ZXmiumynIGQqBpCC2My8Lh3Yn44F9v', NULL, '2023-03-20 16:34:21'),
(3, 'showrav Hasan', 'showrabhasan715@gmail.com', NULL, NULL, NULL, NULL, 'Farhad', 1, '$2y$10$WpCFoErUffgj0T59dorrKuJH5Nef6z7PCpgY52XPNbpWUVBrTw/6C', NULL, '2023-03-20 16:32:09', '2023-03-20 16:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_languages`
--

CREATE TABLE `admin_languages` (
  `id` int(191) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_languages`
--

INSERT INTO `admin_languages` (`id`, `is_default`, `language`, `file`, `rtl`) VALUES
(1, 0, 'test', '1638353833MI23H252.json', 0),
(5, 0, 'tet4', '1638353982qIEUykRT.json', 0);

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(55) NOT NULL,
  `subcategory_id` int(55) NOT NULL,
  `location` varchar(191) DEFAULT NULL,
  `postcode` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `buyer_type` varchar(191) DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `is_image` tinyint(5) NOT NULL DEFAULT 0,
  `description` longtext DEFAULT NULL,
  `amenities` varchar(191) DEFAULT NULL,
  `property_type` varchar(191) DEFAULT NULL,
  `plot_usage` varchar(191) DEFAULT NULL,
  `plot_size` varchar(191) DEFAULT NULL,
  `bedroom` varchar(255) DEFAULT NULL,
  `bathroom` varchar(255) DEFAULT NULL,
  `reception` varchar(255) DEFAULT NULL,
  `require` varchar(191) DEFAULT NULL,
  `strategy` varchar(155) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `train_station` varchar(255) DEFAULT NULL,
  `hmo` varchar(255) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `buying_for` varchar(155) DEFAULT NULL,
  `floor_pic` varchar(255) DEFAULT NULL,
  `occupancy` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `market_valuation` varchar(255) DEFAULT NULL,
  `gross` varchar(255) DEFAULT NULL,
  `sale` varchar(255) DEFAULT NULL,
  `type` varchar(155) DEFAULT NULL,
  `is_buddy_up` tinyint(4) DEFAULT NULL,
  `is_tenancy` int(2) NOT NULL DEFAULT 0,
  `tenant_details` varchar(255) DEFAULT NULL,
  `features` varchar(255) DEFAULT NULL,
  `tenance` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_sizes` int(11) DEFAULT NULL,
  `period_accomodation` varchar(5) DEFAULT NULL,
  `accomodation_for` varchar(255) DEFAULT NULL,
  `move_from` varchar(255) DEFAULT NULL,
  `about_you` varchar(555) DEFAULT NULL,
  `about_flatmte` varchar(555) DEFAULT NULL,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `feature_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `user_id`, `category_id`, `subcategory_id`, `location`, `postcode`, `title`, `buyer_type`, `budget`, `is_image`, `description`, `amenities`, `property_type`, `plot_usage`, `plot_size`, `bedroom`, `bathroom`, `reception`, `require`, `strategy`, `region`, `street`, `furnished`, `train_station`, `hmo`, `cost`, `photo`, `buying_for`, `floor_pic`, `occupancy`, `condition`, `market_valuation`, `gross`, `sale`, `type`, `is_buddy_up`, `is_tenancy`, `tenant_details`, `features`, `tenance`, `created_at`, `updated_at`, `room_sizes`, `period_accomodation`, `accomodation_for`, `move_from`, `about_you`, `about_flatmte`, `is_featured`, `feature_date`) VALUES
(7, 1, 11, 3, 'asdf', NULL, 'sdfasdf', 'mortgage', 50, 0, 'sdfgsdfgsdfg', NULL, NULL, 'Commercial', '65', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'living', NULL, NULL, NULL, NULL, NULL, NULL, 'buy', NULL, 0, NULL, NULL, NULL, '2024-01-15 09:20:30', '2024-01-15 09:20:30', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(8, 1, 11, 4, 'Uttara, Sector 10, Dhaka', NULL, 'test property', 'mortgage', 20, 0, 'asdfasdfassdf', 'Garden,Balcony', 'Houses,Flats', NULL, NULL, '1,2', '1,2', '1,2', 'Both', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'investment', NULL, NULL, NULL, NULL, NULL, NULL, 'buy', NULL, 0, NULL, NULL, NULL, '2024-01-15 09:37:39', '2024-01-15 09:37:39', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(9, 1, 11, 4, 'Dhaka, Sylhet, Noakhali', NULL, 'I am looking for a Appartment', 'mix', 100, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis optio ut rerum placeat aperiam explicabo omnis minima vitae ratione possimus?', 'Garden,Balcony,Garage,Swimming Pool,Gym', 'Houses,Flats,Bungalows', NULL, NULL, '1,2,3', '1,2,3', '1,2,3', 'Both', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'living', NULL, NULL, NULL, NULL, NULL, NULL, 'buy', NULL, 0, NULL, NULL, NULL, '2024-01-16 08:53:15', '2024-01-16 08:53:15', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(10, 1, 11, 3, 'Dhaka, Sylhet, Noakhali', NULL, 'This is test', 'mortgage', 50, 0, 'This is test description', NULL, NULL, 'Residential', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'investment', NULL, NULL, NULL, NULL, NULL, NULL, 'buy', NULL, 0, NULL, NULL, NULL, '2024-01-18 08:33:14', '2024-04-04 09:09:33', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-11 09:09:33'),
(11, 1, 12, 5, NULL, '3500', 'This is Test', NULL, NULL, 0, NULL, 'Garden,Swimming Pool', 'Detached House', NULL, NULL, '5', '', '', NULL, 'Service Accommodation', 'East of England', 'Songraish, Adarsha Sadar', 'Fully', 'Comilla', 'Yes', '{\"rent_pm\":\"30\",\"rent_deposit\":\"50\",\"damage_deposit\":\"80\",\"agency_fee\":\"50\",\"potential_rent\":\"20\"}', '1706450377.jpg,1706450377.jpg,1706450377.jpg,1706450377.jpg,1706450377.jpg,1706450377.jpg', NULL, '1706450377.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-28 07:59:38', '2024-01-28 07:59:38', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(12, 1, 12, 5, NULL, 'E59AB', '5 bedroom hmo 5 bedroom hmo', NULL, NULL, 0, 'Nice House Available in London  Nice House Available in London  Nice House Available in London  Nice House Available in London', 'Garden,Swimming Pool', 'Apartment', NULL, NULL, '5', '', '', NULL, 'Service Accommodation', 'Yorkshire & Humberside', 'London road', 'Partially', 'Barking', 'Yes', '{\"rent_pm\":\"1500\",\"rent_deposit\":\"2000\",\"damage_deposit\":\"500\",\"agency_fee\":\"3000\",\"potential_rent\":\"1000\"}', '1706456472.jpg,1706456472.jpg,1706456472.jpg', NULL, '1706456472.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-28 09:41:12', '2024-04-03 10:14:05', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-10 10:14:05'),
(19, 1, 12, 6, NULL, 'GHIJKL', 'This is test Property', NULL, NULL, 0, 'sdfgsdfgsdff sdfgsdfgsd sddfgsdfgsdf', 'Garden,Terrace,Swimming Pool', 'Semi Detached House', NULL, NULL, '1', '1', '1', NULL, 'FLIP', 'North East & Cumbria', 'London road', NULL, 'Barking', 'Yes', '{\"rent_pm\":\"500\",\"potential_rent\":\"600\",\"rent_deposit\":\"400\",\"agency_fee\":\"600\"}', 'IGEiPu1706629992.jpg,9FlPbB1706629992.jpg,yOTD7c1706629992.jpg', NULL, '1706629992.jpg', 'Tenanted', 'Rentable Condition', '200', '30', '500', NULL, NULL, 0, NULL, NULL, NULL, '2024-01-30 09:53:12', '2024-04-03 09:31:08', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-10 09:31:08'),
(21, 1, 11, 3, 'Uttara, Sector 10, Dhaka, Bangladeshh', NULL, 'This is Test Buying', 'mortgage', 50, 0, 'asdfsadfasd', NULL, NULL, 'Commercial', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'living', NULL, NULL, NULL, NULL, NULL, NULL, 'buy', NULL, 0, NULL, NULL, NULL, '2024-02-08 07:15:28', '2024-04-03 09:28:18', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-10 09:28:18'),
(24, 1, 13, 7, 'Comilla', '3500', 'dfaddfasd', NULL, NULL, 0, 'sadfsadfgsfdgsdfg', NULL, 'Studio flat', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, 'Songraish, Adarsha Sadar, Comilla', 'Partially', NULL, NULL, NULL, 'xbGYsD1707580174.jpg,tOEern1707580174.jpg,A7bCZW1707580174.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '{\"monthly_rent\":\"500\",\"month\":\"12\",\"weekly_rent\":200,\"tenance_number\":\"5\",\"deposit\":\"100\",\"date\":\"2024-02-29\"}', 'bill_included,parking,garden_access,fire_access', 'students_allowed,pets_allowed,families_allowed,smokers_allowed,dss_income_accepted', '2024-02-10 09:49:34', '2024-04-03 09:26:40', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-04-10 09:26:40'),
(25, 1, 11, 0, 'Comilla', '3500', 'This is room wanted', NULL, 50, 0, 'This is test room wanted', 'Furnish,Shared living room,Garden or roof terrace,Balcony or patio,Garage,Disabled access,En-suite', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Songraish, Adarsha Sadar, Comilla', NULL, NULL, NULL, NULL, 'dXCeYg1708510372.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rent', 0, 0, NULL, NULL, NULL, '2024-02-21 04:12:53', '2024-04-03 09:20:32', 0, '5', '7 days aa week', '2024-03-01', '{\"age\":\"32\",\"occupation\":\"Business\",\"nationality\":\"Bnagladeshi\",\"language\":\"English\",\"gender\":\"female\",\"name\":\"pranab Sarker\",\"smoke\":\"1\",\"pets\":\"1\"}', '{\"mate_age\":\"25\",\"mate_occupation\":\"Business\",\"mate_gender\":\"male\",\"mate_smoke\":\"1\",\"mate_pets\":\"0\"}', 1, '2024-04-10 09:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `source` varchar(191) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_tag` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `seo_check` tinyint(4) NOT NULL DEFAULT 0,
  `tags` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `photo`, `description`, `source`, `views`, `status`, `meta_tag`, `meta_description`, `seo_check`, `tags`, `created_at`, `updated_at`) VALUES
(66, 8, 'Transforming Your Roof into a Functional Outdoor Space', 'transforming-your-roof-into-a-functional-outdoor-space', '16398124991702829841.jpg', '<p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Your home\'s roof is one of its most vital components, protecting you and your belongings from the elements. Regular roof maintenance is essential to ensure its longevity and keep your home looking beautiful. In this comprehensive blog post, we\'ll walk you through the top 10 roof maintenance tips that will not only extend the life of your roof but also enhance the overall aesthetics of your home.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">From inspecting for signs of damage to addressing common issues like leaks and loose shingles, our expert tips will empower you to take proactive measures in caring for your roof. We\'ll delve into the importance of clearing debris, maintaining gutters, and ensuring proper ventilation to prevent potential problems and keep your roof in top-notch condition.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Furthermore, we\'ll provide guidance on selecting the right roofing materials and how they can impact both the durability and visual appeal of your home. Whether you\'re considering traditional shingles, eco-friendly options like green roofing, or exploring the benefits of solar roofing, we\'ve got you covered with insightful information.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">You don\'t need to be a roofing expert to follow these maintenance tips. We\'ve simplified each step and included practical advice for homeowners of all experience levels. By incorporating these strategies into your routine, you\'ll not only save money on costly repairs but also maintain the curb appeal and value of your property.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Don\'t wait for a major roofing problem to arise; be proactive and take control of your roof\'s health and aesthetics today. Join us on this roof maintenance journey and ensure that your home remains a durable and beautiful haven for years to come.</span></font></p>', NULL, 2, 1, NULL, NULL, 0, NULL, '2023-03-12 05:28:22', '2023-12-17 10:17:21'),
(67, 9, 'How to Protect Your Roof During Extreme Weather', 'how-to-protect-your-roof-during-extreme-weather', '15089110981702829819.jpg', '<p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Extreme weather events, such as hurricanes, heavy storms, snowstorms, and scorching heatwaves, can wreak havoc on your home\'s roof. Safeguarding your roof during these challenging conditions is crucial to prevent costly damages and ensure the safety of your family. In this informative blog post, we provide valuable insights and practical tips on how to protect your roof when facing extreme weather.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Our expert advice covers a wide range of weather scenarios, offering comprehensive guidance on preparing your roof before, during, and after extreme events. Learn about the importance of regular roof inspections, identifying weak spots, and reinforcing vulnerable areas to fortify your roof\'s resilience.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Discover effective strategies for safeguarding against strong winds, heavy rainfall, and hail damage. From installing hurricane straps and securing loose shingles to ensuring proper drainage, our step-by-step instructions will empower you to take proactive measures in protecting your roof.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">During winter storms, snow and ice can create significant challenges for roofs. We\'ll outline best practices for snow removal and ice dam prevention to avoid structural stress and water leaks. Additionally, we\'ll explore how proper insulation and ventilation can enhance your roof\'s ability to withstand extreme cold temperatures.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">For those living in regions prone to wildfires or scorching heatwaves, we\'ll share essential tips on selecting fire-resistant roofing materials and implementing fire safety measures to shield your home from potential disasters.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">No matter where you live, extreme weather can pose a threat to your roof. By following the advice in this blog, you\'ll gain valuable knowledge and actionable steps to protect your investment and maintain the integrity of your roof during the most challenging weather conditions.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Don\'t wait for a storm to strike; be prepared and proactive in safeguarding your roof against extreme weather. Join us in this journey to fortify your roof and ensure that it stands strong and secure through any weather event that comes its way.</span></font></p>', NULL, 2, 1, NULL, NULL, 0, 'Blog', '2023-03-12 05:28:44', '2023-12-17 10:16:59'),
(68, 9, 'Top 10 Roof Maintenance Tips for a Durable and Beautiful Home', 'top-10-roof-maintenance-tips-for-a-durable-and-beautiful-home', '11310907941702829797.jpg', '<p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Your home\'s roof is one of its most vital components, protecting you and your belongings from the elements. Regular roof maintenance is essential to ensure its longevity and keep your home looking beautiful. In this comprehensive blog post, we\'ll walk you through the top 10 roof maintenance tips that will not only extend the life of your roof but also enhance the overall aesthetics of your home.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">From inspecting for signs of damage to addressing common issues like leaks and loose shingles, our expert tips will empower you to take proactive measures in caring for your roof. We\'ll delve into the importance of clearing debris, maintaining gutters, and ensuring proper ventilation to prevent potential problems and keep your roof in top-notch condition.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Furthermore, we\'ll provide guidance on selecting the right roofing materials and how they can impact both the durability and visual appeal of your home. Whether you\'re considering traditional shingles, eco-friendly options like green roofing, or exploring the benefits of solar roofing, we\'ve got you covered with insightful information.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">You don\'t need to be a roofing expert to follow these maintenance tips. We\'ve simplified each step and included practical advice for homeowners of all experience levels. By incorporating these strategies into your routine, you\'ll not only save money on costly repairs but also maintain the curb appeal and value of your property.</span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p><font color=\"#7b7d83\" face=\"DM Sans, sans-serif\"><span style=\"font-size: 16px;\">Don\'t wait for a major roofing problem to arise; be proactive and take control of your roof\'s health and aesthetics today. Join us on this roof maintenance journey and ensure that your home remains a durable and beautiful haven for years to come.</span></font></p>', NULL, 30, 1, NULL, NULL, 0, 'Blog,Tag', '2023-03-12 05:28:59', '2023-12-17 10:16:37'),
(72, 14, 'Exploring Unique and Stylish Roofing Design Options', 'exploring-unique-and-stylish-roofing-design-options', '11117333651702829780.jpg', '<p>Extreme weather events, such as hurricanes, heavy storms, snowstorms, and scorching heatwaves, can wreak havoc on your home\'s roof. Safeguarding your roof during these challenging conditions is crucial to prevent costly damages and ensure the safety of your family. In this informative blog post, we provide valuable insights and practical tips on how to protect your roof when facing extreme weather.</p><p><br></p><p>Our expert advice covers a wide range of weather scenarios, offering comprehensive guidance on preparing your roof before, during, and after extreme events. Learn about the importance of regular roof inspections, identifying weak spots, and reinforcing vulnerable areas to fortify your roof\'s resilience.</p><p><br></p><p>Discover effective strategies for safeguarding against strong winds, heavy rainfall, and hail damage. From installing hurricane straps and securing loose shingles to ensuring proper drainage, our step-by-step instructions will empower you to take proactive measures in protecting your roof.</p><p><br></p><p>During winter storms, snow and ice can create significant challenges for roofs. We\'ll outline best practices for snow removal and ice dam prevention to avoid structural stress and water leaks. Additionally, we\'ll explore how proper insulation and ventilation can enhance your roof\'s ability to withstand extreme cold temperatures.</p><p><br></p><p>For those living in regions prone to wildfires or scorching heatwaves, we\'ll share essential tips on selecting fire-resistant roofing materials and implementing fire safety measures to shield your home from potential disasters.</p><p><br></p><p>No matter where you live, extreme weather can pose a threat to your roof. By following the advice in this blog, you\'ll gain valuable knowledge and actionable steps to protect your investment and maintain the integrity of your roof during the most challenging weather conditions.</p><p><br></p><p>Don\'t wait for a storm to strike; be prepared and proactive in safeguarding your roof against extreme weather. Join us in this journey to fortify your roof and ensure that it stands strong and secure through any weather event that comes its way.</p>', NULL, 0, 1, NULL, NULL, 0, 'Blog,Blog Tag', '2023-08-02 02:18:32', '2023-12-17 10:16:20'),
(73, 8, 'dfasdfdsaf', 'dfasdfdsaf', '2124839001702829757.jpg', '<p>sdfasddfasd</p>', NULL, 0, 1, NULL, 'gfhdgh', 1, 'asdfasd,ertyert', '2023-09-10 10:54:41', '2023-12-17 10:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`) VALUES
(8, 'Roof Repairs 101', 'roof-repairs-101', 1),
(9, 'Weathering the Storm', 'weathering-the-storm', 1),
(13, 'Rooftop Renovations', 'rooftop-renovations', 1),
(14, 'Preventing Roof Leaks', 'preventing-roof-leaks', 1),
(15, 'Roofing Safety', 'roofing-safety', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `photo`) VALUES
(1, 'Office', '18870181751687254874.png'),
(2, 'Window', '19801867251687254867.png'),
(3, 'Service', '9109954631687254859.png'),
(4, 'ProfessionalBand', '4075842061687254851.png'),
(5, 'Cleaning', '16399467211687254844.png'),
(6, 'Matador', '4599468961687254837.png'),
(8, 'Today', '2542370731687254888.png'),
(9, 'Askimat', '18769126691687254904.png'),
(10, 'Martino', '7672074811687254916.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `photo`) VALUES
(11, 'Property wanted', 'property-wanted', '17829234591699199968.jpg'),
(12, 'Exclusive Deals', 'exclusive-deals', '12593435911699200120.jpg'),
(13, 'Room Rent', 'room-rent', '16900884271701856390.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(9, 'Test Name', 'test@gmail.com', '017000000000', NULL, 'Lorem ipsum dolor sit amet consectetur. Ut tellus suspendisse nulla aliquam. Risus rutrum tellus as eget ultrices amet facilisis.', '2023-03-22 16:40:41', '2023-03-22 16:40:41'),
(10, 'Demo Name', 'demouser@gmail.com', '01800000000', NULL, 'Lorem ipsum dolor sit amet consectetur. Ut tellus suspendisse nulla aliquam. Risus rutrum tellus as eget ultrices amet facilisis.', '2023-03-22 16:41:14', '2023-03-22 16:41:14'),
(11, 'Dummy Name', 'dummy@gmail.com', '01900000000', NULL, 'Lorem ipsum dolor sit amet consectetur. Ut tellus suspendisse nulla aliquam. Risus rutrum tellus as eget ultrices amet facilisis.', '2023-03-22 16:41:44', '2023-03-22 16:41:44'),
(12, 'pronob sarker', 'pronobsarker16@gmail.com', '01976814812', 'test new', 'This is test message', '2023-12-06 04:36:26', '2023-12-06 04:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` int(11) NOT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `map_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `email1`, `email2`, `phone1`, `phone2`, `address`, `photo`, `title`, `map_link`) VALUES
(1, 'Envatodemo@gmail.com', 'Envatodemo2@gmail.com', '+23 (000) 68 603', '+21 (000) 68 703', '66 broklyn golden street 600 New york. USA!', '13685679351701858077.png', 'Contact with Authority', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d406880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f131!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `iso3` varchar(191) DEFAULT NULL,
  `phone_code` varchar(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso3`, `phone_code`, `status`) VALUES
(2, 'Bath', 'UK', '46546', 1),
(3, 'Birmingham', 'UK', '46546', 1),
(4, 'Bradford', 'UK', '46546', 1),
(5, 'Brighton & Hove', 'UK', '46546', 1),
(6, 'Bristol', 'UK', '46546', 1),
(7, 'Cambridge', 'UK', '46546', 1),
(8, 'Canterbury', 'UK', '46546', 1),
(9, 'Carlisle', 'UK', '46546', 1),
(10, 'Chelmsford', 'UK', '46546', 1),
(11, 'Chester', 'UK', '46546', 1),
(12, 'Chichester', 'UK', '46546', 1),
(13, 'Colchester', 'UK', '46546', 1),
(14, 'Coventry', 'UK', '46546', 1),
(15, 'Derby', 'UK', '46546', 1),
(16, 'Doncaster', 'UK', '46546', 1),
(17, 'Durham', 'UK', '46546', 1),
(18, 'Ely', 'UK', '46546', 1),
(19, 'Exeter', 'UK', '46546', 1),
(20, 'Gloucester', 'UK', '46546', 1),
(21, 'Hereford', 'UK', '46546', 1),
(22, 'Kingston-upon-Hull', 'UK', '46546', 1),
(23, 'Lancaster', 'UK', '46546', 1),
(24, 'Leeds', 'UK', '46546', 1),
(25, 'Leicester', 'UK', '46546', 1),
(26, 'Lichfield', 'UK', '46546', 1),
(27, 'Lincoln', 'UK', '46546', 1),
(28, 'Liverpool', 'UK', '46546', 1),
(29, 'London', 'UK', '46546', 1),
(30, 'Manchester', 'UK', '46546', 1),
(31, 'Milton Keynes', 'UK', '46546', 1),
(32, 'Newcastle-upon-Tyne', 'UK', '46546', 1),
(33, 'Norwich', 'UK', '46546', 1),
(34, 'Nottingham', 'UK', '46546', 1),
(35, 'Oxford', 'UK', '46546', 1),
(36, 'Peterborough', 'UK', '46546', 1),
(37, 'Plymouth', 'UK', '46546', 1),
(38, 'Portsmouth', 'UK', '46546', 1),
(39, 'Preston', 'UK', '46546', 1),
(40, 'Ripon', 'UK', '46546', 1),
(41, 'Salford', 'UK', '46546', 1),
(42, 'Salisbury', 'UK', '46546', 1),
(43, 'Sheffield', 'UK', '46546', 1),
(44, 'Southampton', 'UK', '46546', 1),
(45, 'Southend-on-Sea', 'UK', '46546', 1),
(46, 'St Albans', 'UK', '46546', 1),
(47, 'Stoke on Trent', 'UK', '46546', 1),
(48, 'Sunderland', 'UK', '46546', 1),
(49, 'Truro', 'UK', '46546', 1),
(50, 'Wakefield', 'UK', '46546', 1),
(51, 'Wells', 'UK', '46546', 1),
(52, 'Westminster', 'UK', '46546', 1),
(53, 'Winchester', 'UK', '46546', 1),
(54, 'Wolverhampton', 'UK', '46546', 1),
(55, 'Worcester', 'UK', '46546', 1),
(56, 'York', 'UK', '46546', 1),
(57, 'Armagh', 'UK', '46546', 1),
(58, 'Bangor', 'UK', '46546', 1),
(59, 'Belfast', 'UK', '46546', 1),
(60, 'Lisburn', 'UK', '46546', 1),
(61, 'Londonderry', 'UK', '46546', 1),
(62, 'Newry', 'UK', '46546', 1),
(63, 'Aberdeen', 'UK', '46546', 1),
(64, 'Dundee', 'UK', '46546', 1),
(65, 'Dunfermline', 'UK', '46546', 1),
(66, 'Edinburgh', 'UK', '46546', 1),
(67, 'Glasgow', 'UK', '46546', 1),
(68, 'Inverness', 'UK', '46546', 1),
(69, 'Perth', 'UK', '46546', 1),
(70, 'Stirling', 'UK', '46546', 1),
(71, 'Bangor', 'UK', '46546', 1),
(72, 'Cardiff', 'UK', '46546', 1),
(73, 'Newport', 'UK', '46546', 1),
(74, 'St Asaph', 'UK', '46546', 1),
(75, 'St Davids', 'UK', '46546', 1),
(76, 'Swansea', 'UK', '46546', 1),
(77, 'Wrexham', 'UK', '46546', 1),
(78, 'Douglas', 'UK', '46546', 1);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(191) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `sign`, `value`, `is_default`) VALUES
(1, 'USD', '$', 1, 0),
(12, 'jgsdjyhasdf', 'sdf', 50, 0),
(13, 'GBP', '£', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `email_type` varchar(255) DEFAULT NULL,
  `email_subject` mediumtext DEFAULT NULL,
  `email_body` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `email_type`, `email_subject`, `email_body`, `status`) VALUES
(1, 'Plan', 'Your Plan Placed Successfully', '<p>Hello {customer_name},<br>Your Plan has been placed successfully</p>', 1),
(2, 'new_registration', 'Welcome To Booking Core', '<p>Hello {customer_name},<br>You have successfully registered to {website_title}, We wish you will have a wonderful experience using our service.</p><p>Thank You<br></p>', 1),
(4, 'subscription_warning', 'Your subscrption plan will end after five days', '<p>Hello {customer_name},<br>Your subscription plan duration will end after five days. Please renew your plan otherwise all of your products will be deactivated.</p><p>Thank You<br></p>', 1),
(5, 'user_verification', 'Request for verification.', '<p>Hello {customer_name},<br>You are requested verify your account. Please send us photo of your passport.</p><p>Thank You<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `details`) VALUES
(3, 'How stay calm from the first time', 'People tend to do such a thing is because they find hiring a cleaning service company too expensive. Even if they do end up hiring a cleaning service, they tend to cheap out on this. Doing so can result in spending more money than you initially thought. So, let us find out how choosing the proper cleaning services can benefit you in more ways than you are thinking.'),
(5, 'Our proprietary enables Quality', 'People tend to do such a thing is because they find hiring a cleaning service company too expensive. Even if they do end up hiring a cleaning service, they tend to cheap out on this. Doing so can result in spending more money than you initially thought. So, let us find out how choosing the proper cleaning services can benefit you in more ways than you are thinking.'),
(6, 'Locate Clean USA Office Near You', 'People tend to do such a thing is because they find hiring a cleaning service company too expensive. Even if they do end up hiring a cleaning service, they tend to cheap out on this. Doing so can result in spending more money than you initially thought. So, let us find out how choosing the proper cleaning services can benefit you in more ways than you are thinking.'),
(7, 'Visit our office and see services', 'People tend to do such a thing is because they find hiring a cleaning service company too expensive. Even if they do end up hiring a cleaning service, they tend to cheap out on this. Doing so can result in spending more money than you initially thought. So, let us find out how choosing the proper cleaning services can benefit you in more ways than you are thinking.'),
(8, 'How to get Services', 'People tend to do such a thing is because they find hiring a cleaning service company too expensive. Even if they do end up hiring a cleaning service, they tend to cheap out on this. Doing so can result in spending more money than you initially thought. So, let us find out how choosing the proper cleaning services can benefit you in more ways than you are thinking.');

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` int(11) NOT NULL,
  `curr_code` varchar(10) NOT NULL DEFAULT 'USD',
  `curr_sym` varchar(10) NOT NULL DEFAULT '$',
  `header_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `loader` varchar(191) NOT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `mail_type` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `mail_encryption` varchar(255) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `theme_color` varchar(255) DEFAULT NULL,
  `is_tawk` tinyint(4) NOT NULL DEFAULT 0,
  `tawk_id` varchar(222) DEFAULT NULL,
  `is_verify` tinyint(4) DEFAULT 0,
  `is_cookie` tinyint(4) NOT NULL DEFAULT 0,
  `cookie_btn_text` varchar(255) DEFAULT NULL,
  `cookie_text` text DEFAULT NULL,
  `is_maintenance` tinyint(4) DEFAULT 0,
  `maintenance` text DEFAULT NULL,
  `registration` tinyint(1) NOT NULL DEFAULT 1,
  `kyc` tinyint(1) NOT NULL DEFAULT 1,
  `kyc_offer_limit` int(11) NOT NULL DEFAULT 0,
  `kyc_trade_limit` int(11) NOT NULL DEFAULT 0,
  `sms_notify` tinyint(1) NOT NULL DEFAULT 1,
  `email_notify` tinyint(1) NOT NULL DEFAULT 1,
  `allowed_email` text DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `recaptcha` tinyint(1) NOT NULL DEFAULT 0,
  `recaptcha_key` varchar(255) DEFAULT NULL,
  `recaptcha_secret` varchar(255) DEFAULT NULL,
  `cookie` text DEFAULT NULL,
  `two_fa` int(11) NOT NULL,
  `hero_banner` varchar(255) DEFAULT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_text` varchar(255) DEFAULT NULL,
  `copyright_text` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `curr_code`, `curr_sym`, `header_logo`, `favicon`, `title`, `loader`, `smtp_host`, `mail_type`, `smtp_port`, `smtp_user`, `smtp_pass`, `mail_encryption`, `from_email`, `from_name`, `theme_color`, `is_tawk`, `tawk_id`, `is_verify`, `is_cookie`, `cookie_btn_text`, `cookie_text`, `is_maintenance`, `maintenance`, `registration`, `kyc`, `kyc_offer_limit`, `kyc_trade_limit`, `sms_notify`, `email_notify`, `allowed_email`, `contact_no`, `recaptcha`, `recaptcha_key`, `recaptcha_secret`, `cookie`, `two_fa`, `hero_banner`, `hero_title`, `hero_text`, `copyright_text`) VALUES
(1, 'USD', '$', '3794149701702919519.png', '14887296331702919532.png', 'Auctionsdfasd', '1564224328loading3.gif', 'sandbox.smtp.mailtrap.io', 'php_mailer', '2525', '4609fe63ba0b4b', '86dde1c9bf6d55', 'tls', 'pronob@famillynest.com', 'Admin', 'FFC107', 0, '6124fa49d6e7610a49b1c136/1fds73c17', 1, 0, 'cookie_btn_text', NULL, 0, 'Website Maintenance', 1, 1, 2, 2, 1, 1, NULL, '+88000000000', 1, '6LeMB00fAAAAABm___8W1d2ocsMjC7_8vdRXQ58b', '6LeMB00fAAAAAGB_3ya1UuIpAbikNOXyfPUr8Gey', '{\"status\":\"1\",\"button_text\":\"Allow Cookie\",\"cookie_text\":\"Our site use cookies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the site and improve your experience.\"}', 0, '3478667561715093939.jpg', 'Find Your Property', 'From as low as $10 per day with limited time offer', 'Copyright © 2023 Reserved Passion by GeniusOceannnn');

-- --------------------------------------------------------

--
-- Table structure for table `header_sections`
--

CREATE TABLE `header_sections` (
  `id` int(11) NOT NULL,
  `room_title` varchar(255) DEFAULT NULL,
  `room_subtitle` varchar(255) DEFAULT NULL,
  `distress_title` varchar(255) DEFAULT NULL,
  `distress_subtitle` varchar(255) DEFAULT NULL,
  `buyer_title` varchar(255) DEFAULT NULL,
  `buyer_subtitle` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_subtitle` varchar(255) DEFAULT NULL,
  `subscribe_title` varchar(255) DEFAULT NULL,
  `subscribe_subtitle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header_sections`
--

INSERT INTO `header_sections` (`id`, `room_title`, `room_subtitle`, `distress_title`, `distress_subtitle`, `buyer_title`, `buyer_subtitle`, `blog_title`, `blog_subtitle`, `subscribe_title`, `subscribe_subtitle`) VALUES
(1, 'Properties for Rent', 'Find new & featured property for you.', 'Exclusive Deals', 'Find new & featured Deals for you.', 'Latest Adverts', 'Find new & featured property for you.', 'Trending Articles', 'We post regulary most powerful articles for help and supportt.', 'Subscribe Now', 'Subscribe subtitle here');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(191) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `is_default`, `language`, `file`, `rtl`) VALUES
(1, 1, 'English', '163479343308Fu3jm9.json', 0),
(11, 0, 'test', '1638347401hPc8azyI.json', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `designation`, `message`, `photo`) VALUES
(17, 'Test Productss', 'test', 'test', 'nqD1588136884bv-rm.jpg'),
(18, 'showrav Hasan', 'Designation', 'asdfasd', 'Nv41588136853people.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2021_09_25_053316_create_admins_table', 2),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(191) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `meta_tag`, `meta_description`) VALUES
(12, 'About Us', 'about-us', '<p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Welcome to [Your Company Name], your premier destination for all things real estate. Founded on the principles of integrity, expertise, and personalized service, we are committed to helping you navigate the complexities of the real estate market with confidence and ease.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">At Baythub, we understand that buying, selling, or renting a property is one of the most significant decisions you\'ll make in your lifetime. That\'s why we\'ve assembled a team of dedicated professionals who are passionate about assisting you every step of the way. Whether you\'re a first-time homebuyer, an experienced investor, or someone looking to sell their property, we have the knowledge and resources to meet your unique needs and exceed your expectations.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">What sets us apart is our unwavering dedication to our clients. We believe in building long-lasting relationships based on trust, transparency, and mutual respect. When you choose to work with us, you can rest assured knowing that your best interests are always our top priority.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">With a deep understanding of the local market trends and years of experience in the industry, we provide valuable insights and guidance to help you make informed decisions. From conducting thorough market analyses to negotiating the best deals on your behalf, we go above and beyond to ensure your real estate journey is a smooth and successful one.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Beyond our commitment to client satisfaction, we are also deeply invested in giving back to the communities we serve. Through various philanthropic initiatives and volunteer efforts, we strive to make a positive impact and contribute to the betterment of society.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Thank you for considering [Your Company Name] for your real estate needs. We look forward to the opportunity to work with you and to help you achieve your real estate goals. Get in touch with us today, and let\'s embark on this exciting journey together!</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Sincerely,</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px 0px; color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Baythub\r\nFounder &amp; CEO, Baythub</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` int(11) NOT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('manual','automatic') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'manual',
  `information` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(191) DEFAULT NULL,
  `currency_id` varchar(191) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `subtitle`, `title`, `details`, `name`, `type`, `information`, `keyword`, `currency_id`, `status`) VALUES
(1, NULL, NULL, NULL, 'Stripe', 'automatic', '{\"key\":\"pk_test_UnU1Coi1p5qFGwtpjZMRMgJM\",\"secret\":\"sk_test_QQcg3vGsKRPlW6T3dXcNJsor\",\"text\":\"Pay via your Credit Card.\"}', 'stripe', '[\"1\"]', 1),
(15, NULL, NULL, NULL, 'Paypal', 'automatic', '{\"client_id\":\"AcWYnysKa_elsQIAnlfsJXokR64Z31CeCbpis9G3msDC-BvgcbAwbacfDfEGSP-9Dp9fZaGgD05pX5Qi\",\"client_secret\":\"EGZXTq6d6vBPq8kysVx8WQA5NpavMpDzOLVOb9u75UfsJ-cFzn6aeBXIMyJW2lN1UZtJg5iDPNL9ocYE\",\"sandbox_check\":1,\"text\":\"Pay via your PayPal account.\"}', 'paypal', '[\"1\"]', 1),
(27, 'mobile money', 'bKash', 'Please send money using number', NULL, 'manual', NULL, NULL, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `days` int(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `contact_limit` int(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `slug`, `price`, `days`, `description`, `contact_limit`, `status`, `created_at`, `updated_at`) VALUES
(3, 'BASIC PACKAGE', 'basic-package', 49, 90, '<p>This is Basic Packages</p>', 50, 1, '2023-11-17 03:54:35', '2023-11-17 03:54:35'),
(4, 'PLATINUM PACKAGE', 'platinum-package', 149, 90, '<p>This is Platinum Package</p>', 90, 1, '2023-11-17 03:55:39', '2023-11-17 03:55:39'),
(5, 'STANDARD PACKAGE', 'standard-package', 199, 90, '<p>This is Standard Package</p>', 90, 1, '2023-11-17 03:57:28', '2023-11-17 03:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(55) NOT NULL,
  `star_rating` int(5) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `star_rating`, `review`, `created_at`, `updated_at`, `owner_id`) VALUES
(2, 8, 4, 'Excellent Job.', '2024-03-21 08:06:51', '2024-03-21 08:06:51', 1),
(3, 1, 5, 'Excellent Job.', '2024-03-22 10:31:39', '2024-03-22 10:31:39', 8);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_tag` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_image` varchar(255) DEFAULT NULL,
  `google_analytics` varchar(255) DEFAULT NULL,
  `facebook_pixel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `title`, `meta_tag`, `meta_description`, `meta_image`, `google_analytics`, `facebook_pixel`) VALUES
(1, 'Dashboard1', 'a,b,c,d,s', 'test description1', 'fgy1588136884bv-rm.jpg', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `budget` double DEFAULT 0,
  `photo` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `region` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `feature_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `title`, `slug`, `description`, `location`, `budget`, `photo`, `user_id`, `region`, `postcode`, `start_date`, `created_at`, `updated_at`, `is_featured`, `feature_date`) VALUES
(3, 2, 'Innovative Abstract Icon Logo Design', 'innovative-abstract-icon-logo-design', 'Website Design: Develop a modern, user-friendly, and responsive website that reflects our consultancy\'s professionalism and expertise. Design a clean and intuitive layout with easy navigation to showcase our services, team, and contact information. Integration of essential features, such as a contact form, social media links, and a blog section. Logo Design: Create a unique and memorable logo that represents our consultancy\'s values and vision. Ensure the logo is versatile and scalable for various marketing materials and platforms. Provide multiple', 'Uttara, Sector 10, Dhaka, Bangladeshh', 500, 'JDY8lg1711129812.png,XuKovV1711129812.png', 1, 'East Midlands', '1230', '2024-03-28', '2024-03-04 06:31:26', '2024-04-03 10:07:46', 1, '2024-04-10 10:07:45'),
(6, 2, 'With Start date', 'with-start-date', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Dhaka, Sylhet, Noakhali', 50, '967665631711001434.png', 1, 'Wales', '3500', '2024-03-29', '2024-03-21 00:10:36', '2024-04-03 10:11:11', 1, '2024-04-10 10:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `status`) VALUES
(2, 'Hello', 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socialsettings`
--

CREATE TABLE `socialsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `fclient_id` text DEFAULT NULL,
  `fclient_secret` text DEFAULT NULL,
  `fredirect` text DEFAULT NULL,
  `gclient_id` text DEFAULT NULL,
  `gclient_secret` text DEFAULT NULL,
  `gredirect` text DEFAULT NULL,
  `website_url` varchar(191) DEFAULT NULL,
  `social_icons` text DEFAULT NULL,
  `social_urls` text DEFAULT NULL,
  `facebook_check` tinyint(4) NOT NULL DEFAULT 0,
  `google_check` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialsettings`
--

INSERT INTO `socialsettings` (`id`, `fclient_id`, `fclient_secret`, `fredirect`, `gclient_id`, `gclient_secret`, `gredirect`, `website_url`, `social_icons`, `social_urls`, `facebook_check`, `google_check`) VALUES
(1, '353155922795407', '55f8379d2e9717b72f862d07e92af8ed', 'http://localhost/booking-laravel-7', '915191002660-okcvhj4qspmbcm4qgn9et4vnu5q3mdei.apps.googleusercontent.com', 'PP-ZuCXvvdIPrpUy2WEDeIck', 'http://localhost/charity/main-charity/auth/google/callback', 'http://localhost/booking-laravel-7', '[\"fab fa-font-awesome\",\"fab fa-fonticons\",\"fas fa-football-ball\"]', '[\"tttt\",\"tttt4\",\"test\"]', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `icon`, `link`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', 'https://getbootstrap.com'),
(2, 'Twitter', 'fab fa-twitter', 'https://getbootstrap.com'),
(3, 'Instagram', 'fab fa-instagram', 'https://getbootstrap.com'),
(4, 'Linkedin', 'fab fa-linkedin-in', 'https://getbootstrap.com');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `town` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(191) NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(37, 'owner@gmail.com'),
(38, 'shaon@gmail.com'),
(39, 'showrav@gmail.com'),
(40, 'showrabhasan@gmail.com'),
(41, 'user@gmail.com'),
(43, 'pronob@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `transaction_no` varchar(255) DEFAULT NULL,
  `charge_id` varchar(255) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `method` varchar(191) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `notify_id` int(11) DEFAULT NULL,
  `payment_status` varchar(191) NOT NULL DEFAULT 'pending',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `transaction_no`, `charge_id`, `txnid`, `user_id`, `plan_id`, `price`, `method`, `currency_id`, `amount`, `notify_id`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fjng1701437295', 'cs_test_a1lNQATTMuxMklK4WjKQH6oyUrNHkICyjJlmJuOhU0uOzACk7FJvPd4hN3', 'pi_3OIWiwJlIV5dN9n70Pr9EDQn', 1, 5, 199, 'Stripe', 13, NULL, NULL, 'Completed', 1, '2023-12-01 07:28:15', '2023-12-01 07:28:15'),
(2, 'aphk1701438848', 'cs_test_a1lNQATTMuxMklK4WjKQH6oyUrNHkICyjJlmJuOhU0uOzACk7FJvPd4hN3', 'pi_3OIWiwJlIV5dN9n70Pr9EDQn', 1, 5, 199, 'Stripe', 13, NULL, NULL, 'Completed', 1, '2023-12-01 07:54:08', '2023-12-01 07:54:08'),
(3, 'CklC1701439003', 'cs_test_a1GKlIq7i3WcXo6v9NU2ghaDxjpkd7L75FxJHaHd9VBw1r05U0cC6E4DQj', 'pi_3OIXCsJlIV5dN9n70o3GlLHH', 1, 5, 199, 'Stripe', 13, NULL, NULL, 'Completed', 1, '2023-12-01 07:56:43', '2023-12-01 07:56:43'),
(4, 'Rcml1701439199', 'cs_test_a1BzAHJ9Dj9veGFFg6IcRQpTPxWUqhCvUPaGajKayDPxbWTcPMVOb7MJbB', 'pi_3OIXFzJlIV5dN9n705drfQog', 1, 4, 149, 'Stripe', 13, NULL, NULL, 'Completed', 1, '2023-12-01 07:59:59', '2023-12-01 07:59:59'),
(5, 'lG8R1701439393', 'cs_test_a1mFsPegGZV0LFbDc6LMTQhqeGsFJMn8rp6SZWKrgIoi0UzGKdgsRHxV6s', 'pi_3OIXJCJlIV5dN9n71fJkGk7D', 1, 3, 49, 'Stripe', 13, NULL, NULL, 'Completed', 1, '2023-12-01 08:03:13', '2023-12-01 08:03:13'),
(6, 'Oye51701439619', 'cs_test_a1oKhQlPrfEl0rNkav8Vx0byjHv5zJcR3lY85BxTvxw5IDJJa1k0b4E9td', 'pi_3OIXMWJlIV5dN9n71DQ4Bvcv', 1, 3, 49, 'Stripe', 13, NULL, NULL, 'Completed', 1, '2023-12-01 08:06:59', '2023-12-01 08:06:59'),
(7, 'hoQ51701440661', 'cs_test_a1P7Umux6z5NlDjz92nOIT6mXmA2ffVx3bVrZEByDPyDweaOVLSqbOmjiI', 'pi_3OIXdbJlIV5dN9n70MnUhjO3', 1, 5, 199, 'Stripe', 13, NULL, NULL, 'Completed', 1, '2023-12-01 08:24:22', '2023-12-01 08:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(22) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `attributes` varchar(555) DEFAULT NULL,
  `bedroom` varchar(255) DEFAULT NULL,
  `bathrooms` varchar(255) DEFAULT NULL,
  `receptions` varchar(255) DEFAULT NULL,
  `required` varchar(255) DEFAULT NULL,
  `is_bedrooms` int(5) NOT NULL DEFAULT 0,
  `is_bathrooms` int(5) NOT NULL DEFAULT 0,
  `is_receptions` int(5) NOT NULL DEFAULT 0,
  `is_required` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `attributes`, `bedroom`, `bathrooms`, `receptions`, `required`, `is_bedrooms`, `is_bathrooms`, `is_receptions`, `is_required`) VALUES
(3, 11, 'Land', 'land', '{\"amenities\":[null],\"property_type\":[null],\"plot_usage\":[\"Residential\",\"Commercial\"],\"strategy\":[null]}', NULL, NULL, NULL, NULL, 0, 0, 0, 0),
(4, 11, 'Property', 'property', '{\"amenities\":[\"Garden\",\"Balcony\",\"Garage\",\"Swimming Pool\",\"Gym\"],\"property_type\":[\"Houses\",\"Flats\",\"Penthouses\",\"Bungalows\",\"Villas\",\"Hotel Apartments\"],\"plot_usage\":[null],\"strategy\":[null]}', '1,2,3,4,5,6,7,8,9', '1,2,3,4,5,6,7,8,9', '1,2,3,4,5,6,7,8,9', 'Ready,Off Plan,Both', 1, 1, 1, 1),
(5, 12, 'Rent', 'rent', '{\"amenities\":[\"Garden\",\"Terrace\",\"Parking\",\"Swimming Pool\",\"Gym\"],\"property_type\":[\"Terrance House\",\"Semi Detached House\",\"Detached House\",\"Apartment\",\"Block Apartment\",\"Bungalow\"],\"plot_usage\":[null],\"strategy\":[\"HMO\",\"Service Accommodation\",\"Housing Association\",\"SLT\"]}', '1,2,3,4,5,6,7,8', '1,2,3,4,5,6,7,8', '1,2,3,4,5,6,7,8', NULL, 1, 1, 1, 0),
(6, 12, 'Sales', 'sales', '{\"amenities\":[\"Garden\",\"Terrace\",\"Garage\",\"Swimming Pool\",\"Gym\"],\"property_type\":[\"Terrance House\",\"Semi Detached House\",\"Detached House\",\"Apartment\",\"Block Apartment\",\"Bungalow\"],\"plot_usage\":[null],\"strategy\":[\"BTL\",\"FLIP\",\"HMO\",\"Service Accommodation\",\"Housing Association\",\"SLT\"]}', '1,2,3,4,5,6', '1,2,3,4,5,6', '1,2,3,4,5,6', NULL, 1, 1, 1, 0),
(7, 13, 'Whole Property', 'whole-property', '{\"amenities\":[null],\"property_type\":[\"Studio flat\",\"Bedsit\",\"Detached House\",\"Semi-Detached\",\"House\",\"Terraced House\",\"Bungalow\",\"End Terrace\",\"Flat\",\"Penthouse\",\"Maisonette\",\"Mobile Phone\",\"House Boat\"],\"plot_usage\":[null],\"strategy\":[null]}', '1,2,3,4,5,6,7,8,9', '1,2,3,4,5,6,7,8,9', NULL, NULL, 1, 1, 0, 0),
(8, 13, 'Room Only', 'room-only', '{\"amenities\":[null],\"property_type\":[\"Room Shared at House\",\"Room Shared in Flat\"],\"plot_usage\":[null],\"strategy\":[null]}', '1,2,3,4,5,6,7,8,9', '1,2,3,4,5,6,7,8,9', NULL, NULL, 1, 1, 0, 0),
(9, 11, 'Room', 'room', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0),
(10, 11, 'Property rent', 'property-rent', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0),
(11, 13, 'Bed Space', 'bed-space', '{\"amenities\":[null],\"property_type\":[\"Room Shared at House\",\"Room Shared in Flat\"],\"plot_usage\":[null],\"strategy\":[null]}', '1,2,3,4,5,6,7,8,9', '1,2,3,4,5,6,7,8,9', NULL, NULL, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `slug`, `designation`, `photo`, `bio`, `phone`, `email`, `address`, `website`, `facebook`, `twitter`, `linkedin`, `instagram`) VALUES
(8, 'pronob sarker', 'pronob-sarker', 'Creative Director', '9471010251701850857.png', '<p>sdfgsdfgdsfgsdfgg</p>', '01976814812', 'pronobsarker16@gmail.com', 'Main Campus', 'https://geniusocean.net/support/staff/opened-tickets', 'https://facebook.com', 'https://twitter.com', 'https://linkedin.com', 'https://instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `photo`, `message`) VALUES
(2, 'Mr. Aashik', 'UI Designer', '9618403561678617327.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'),
(3, 'Jhon Due', 'Creative Director', '2966177251678617322.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'),
(4, 'Mr. Marlie', 'CEO GeniusTeam', '6019306521678617316.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `trnx_number` varchar(255) DEFAULT NULL,
  `user_id` int(25) NOT NULL,
  `amount` double NOT NULL,
  `currency_id` int(25) NOT NULL,
  `type` varchar(5) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `trnx_number`, `user_id`, `amount`, `currency_id`, `type`, `remark`, `details`, `created_at`, `updated_at`) VALUES
(1, 'J2DR1712158000', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-03 09:26:40', '2024-04-03 09:26:40'),
(2, 'g0y91712158037', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-03 09:27:18', '2024-04-03 09:27:18'),
(3, 'LOjw1712158098', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-03 09:28:19', '2024-04-03 09:28:19'),
(4, '7SgO1712158268', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-03 09:31:08', '2024-04-03 09:31:08'),
(5, 'i4uc1712160465', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-03 10:07:46', '2024-04-03 10:07:46'),
(6, 'TqWd1712160671', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-03 10:11:11', '2024-04-03 10:11:11'),
(7, '3uJV1712160845', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-03 10:14:05', '2024-04-03 10:14:05'),
(8, 'ggb31712243373', 1, 4, 13, '-', 'Featured', 'Feature of Auctionsdfasd', '2024-04-04 09:09:33', '2024-04-04 09:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(191) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `zip` varchar(25) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `email_verified` enum('Yes','No') DEFAULT 'No',
  `verification_link` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `balance` double NOT NULL DEFAULT 0,
  `is_plan` int(11) DEFAULT NULL,
  `is_verify` int(2) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `kyc_status` int(5) NOT NULL,
  `portfolio` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `photo`, `phone`, `country`, `city`, `address`, `zip`, `status`, `email_verified`, `verification_link`, `password`, `balance`, `is_plan`, `is_verify`, `remember_token`, `created_at`, `updated_at`, `description`, `skills`, `kyc_status`, `portfolio`) VALUES
(1, 'User Hasan', NULL, 'user@gmail.com', '1706536283.png', '+8801976814812', 'Belarus', 'United Kingdom', 'Tangail,Dhaka,Bangladesh', '1234', 1, NULL, NULL, '$2y$10$bpzr5I3WnA1FKp7SR0meoeJgmXT5Ux7DovdWCUquPvWdNgjXZHS5i', 900.5495728445, 5, 0, 'e5BcK6ppgopsErVnEXW7yZL9JEQ75zq2JG0SZYG1EWKoRXqEKt03O9ODupWg', '2024-06-13 15:57:15', '2024-06-13 09:56:26', 'I am a web developer specialize in building web applications using the Laravel PHP framework. I am skilled at HTML, CSS, Bootstrap, Javascript, Jquery, PHP and so on. I can work on a variety of projects, from small websites to large-scale web applications, and they are often responsible for the entire development lifecycle, from design and development to testing and deployment. I am excited for the chance to help you with my back-end and front-end expertise and experience. I look forward to the opportunity to making you smile as well.', 'fghsdgh,sdfgsefg', 2, 'xTVTCJ1718292607.jpg'),
(4, 'User Hasan', NULL, 'showrabhasan7515@gmail.com', 'JIC1588136853people.png', '17283320', 'Belarus', 'UserRequest', 'Tangail,Dhaka,Bangladesh', '1234', 1, NULL, NULL, '$2y$10$Muu9xoTvxsx6mHh3yjqLTecTKADrG7YMYmGIqWIuz.YbDoR97Cqw.', 0, NULL, 0, NULL, '2024-06-12 18:00:00', '2021-12-14 00:04:01', NULL, NULL, 0, NULL),
(5, 'Test Product1', NULL, 'shaon@gmail.com', NULL, '172833200', NULL, NULL, NULL, NULL, 1, 'Yes', '521dabcadf15fabf6eb8d08bd960942a', '$2a$12$6eVkxqi9PbsGAg.uRBoyOOND8oZaCH8IHtss5FFVPb0k.64u1aSW.', 0, NULL, 0, 'rLpl6P782AXzb2zKX8qqc62W0TblP8v0nMK4yC7JU8UF76rHAQYnx7ZTeULP', '2021-12-18 23:30:31', '2021-12-18 23:30:31', NULL, NULL, 0, NULL),
(8, 'pranab Sarker', 'pronob', 'pronobsarker@gmail.com', '1711031757.png', '01976814812', NULL, 'Comilla', 'Songraish, Adarsha Sadar, Comilla', '3500', 1, 'No', NULL, '$2y$10$cGZdaxAzxk0lpyXWbGfukuLxnvyr1HJw7Y39wAx092ReKNu1S.BFC', 0, NULL, 0, 'VC55wNik6F8vDeUpGOMzKwDA6nn4RS4nEld35ZBGbU8deBZ1BiXsooihlVpM', '2023-11-11 01:01:54', '2024-03-21 08:35:57', 'I am a web developer specialize in building web applications using the Laravel PHP framework. I am skilled at HTML, CSS, Bootstrap, Javascript, Jquery, PHP and so on. I can work on a variety of projects, from small websites to large-scale web applications, and they are often responsible for the entire development lifecycle, from design and development to testing and deployment. I am excited for the chance to help you with my back-end and front-end expertise and experience. I look forward to the opportunity to making you smile as well.', 'sdfgsefg,fghsdgh,fdgsdhdfgh', 0, NULL),
(9, 'software', 'softbakery', 'softwarebakery71@gmail.com', NULL, '+8801976814812', NULL, NULL, NULL, NULL, 1, 'No', '1444e0ba77c86e8b08b8d301e56e1ac4', '$2y$10$bKwgbvt8lUaCd3EglY5xMe8y4aFAKCv9vZWV8AxDh0NY5Z.KpJ0I2', 0, NULL, 0, NULL, '2024-01-30 08:39:31', '2024-01-30 08:39:31', NULL, NULL, 0, NULL),
(10, 'pranab Sarker', 'newuser', 'pronobsarker1600@gmail.com', NULL, '+8801976814812', NULL, NULL, NULL, NULL, 1, 'No', '415ced504fab6c810410df3e11ed4098', '$2y$10$KCMBf.zsRLIuHfM0ghGaj.MRrSkY605TMzAlNDS4XSm9ezaJWvnYa', 0, NULL, 0, NULL, '2024-01-30 08:42:38', '2024-01-30 08:42:38', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` int(11) NOT NULL,
  `ticket_number` varchar(255) DEFAULT NULL,
  `property_id` int(25) DEFAULT NULL,
  `user_id` int(25) DEFAULT NULL,
  `owner_id` int(25) DEFAULT NULL,
  `messages` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `is_service` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `ticket_number`, `property_id`, `user_id`, `owner_id`, `messages`, `phone`, `is_service`, `created_at`, `updated_at`) VALUES
(1, 'TKTEBPZGC', 5, 8, 1, 'I\'m interested in this property.', '01976814812', 0, '2023-12-18 10:08:53', '2023-12-18 10:08:53'),
(2, 'TKTC0F5DS', 6, 8, 1, 'I\'m interested in this job.', '01976814812', 1, '2024-03-21 00:50:43', '2024-03-21 00:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_owner_conversations`
--

CREATE TABLE `user_owner_conversations` (
  `id` int(11) NOT NULL,
  `contact_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `owner_id` int(25) NOT NULL,
  `messages` text DEFAULT NULL,
  `is_service` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_owner_conversations`
--

INSERT INTO `user_owner_conversations` (`id`, `contact_id`, `user_id`, `owner_id`, `messages`, `is_service`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 1, 'I\'m interested in this property.', 0, '2023-12-18 10:08:53', '2023-12-18 10:08:53'),
(2, 2, 8, 1, 'sdfasd', 0, '2023-12-18 10:44:20', '2023-12-18 10:44:20'),
(3, 2, 1, 8, 'dfgsdf', 0, '2023-12-18 10:45:21', '2023-12-18 10:45:21'),
(4, 2, 1, 8, 'fgsdfg', 0, '2024-03-21 08:40:21', '2024-03-21 08:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` int(11) NOT NULL,
  `user_id` int(15) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `criminal_record` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `id_image` varchar(255) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`id`, `user_id`, `qualification`, `criminal_record`, `telephone`, `id_image`, `status`) VALUES
(1, 1, 'sdgsdfgdsfgsdf', '1711289362.png', '01976814812', 'kUxqm1711289362.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(25) NOT NULL,
  `advert_id` int(25) NOT NULL,
  `is_job` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `advert_id`, `is_job`) VALUES
(2, 1, 24, 0),
(3, 1, 11, 0),
(4, 1, 25, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_languages`
--
ALTER TABLE `admin_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_sections`
--
ALTER TABLE `header_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialsettings`
--
ALTER TABLE `socialsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_owner_conversations`
--
ALTER TABLE `user_owner_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_languages`
--
ALTER TABLE `admin_languages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_sections`
--
ALTER TABLE `header_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socialsettings`
--
ALTER TABLE `socialsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_owner_conversations`
--
ALTER TABLE `user_owner_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
