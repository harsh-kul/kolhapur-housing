-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 11, 2023 at 01:34 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolhapurhousing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_request`
--

CREATE TABLE `tbl_admin_request` (
  `pp_req_id` int(11) NOT NULL,
  `req_regi_id` int(11) DEFAULT NULL,
  `req_pp_id` int(11) DEFAULT NULL,
  `reg_status_id` int(11) DEFAULT NULL,
  `updated_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `req_ppowner_id` int(11) DEFAULT NULL,
  `req_remark` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `req_col1` int(11) DEFAULT NULL,
  `req_col2` int(11) DEFAULT NULL,
  `req_col3` int(11) DEFAULT NULL,
  `req_col4` int(11) DEFAULT NULL,
  `req_col5` int(11) DEFAULT NULL,
  `deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `req_admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config_table`
--

CREATE TABLE `tbl_config_table` (
  `pk_conid` int(11) NOT NULL,
  `con_key` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_value` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT '0',
  `deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triggerd_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lone_request`
--

CREATE TABLE `tbl_lone_request` (
  `lr_id` int(11) NOT NULL,
  `fk_regi_id` int(11) DEFAULT NULL,
  `fk_stid` int(11) DEFAULT NULL,
  `lr_fname` varchar(500) DEFAULT NULL,
  `lr_lname` varchar(500) DEFAULT NULL,
  `lr_email_id` varchar(500) DEFAULT NULL,
  `lr_mobile_no` varchar(50) DEFAULT NULL,
  `lr_resident_type` varchar(500) DEFAULT NULL,
  `lr_pp_loc` varchar(1000) DEFAULT NULL,
  `lr_req_type` varchar(500) DEFAULT NULL,
  `lr_amt` varchar(500) DEFAULT NULL,
  `lr_tenure` varchar(500) DEFAULT NULL,
  `lr_age` int(11) DEFAULT NULL,
  `lr_pp_cost` int(11) DEFAULT NULL,
  `lr_currently_employeed` varchar(500) DEFAULT NULL,
  `lr_income` int(11) DEFAULT NULL,
  `lr_emi` int(11) DEFAULT NULL,
  `lr_lone_type_id` int(11) DEFAULT NULL,
  `lr_rj_resone` varchar(500) DEFAULT NULL,
  `lr_rj_count` int(11) DEFAULT NULL,
  `created_on` varchar(25) DEFAULT NULL,
  `updated_on` varchar(25) DEFAULT NULL,
  `deleted_on` varchar(25) DEFAULT NULL,
  `triggerd_on` varchar(25) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `lr_col1` varchar(500) DEFAULT NULL,
  `lr_col2` varchar(500) DEFAULT NULL,
  `lr_col3` varchar(500) DEFAULT NULL,
  `lr_col4` varchar(500) DEFAULT NULL,
  `lr_col5` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lone_request`
--

INSERT INTO `tbl_lone_request` (`lr_id`, `fk_regi_id`, `fk_stid`, `lr_fname`, `lr_lname`, `lr_email_id`, `lr_mobile_no`, `lr_resident_type`, `lr_pp_loc`, `lr_req_type`, `lr_amt`, `lr_tenure`, `lr_age`, `lr_pp_cost`, `lr_currently_employeed`, `lr_income`, `lr_emi`, `lr_lone_type_id`, `lr_rj_resone`, `lr_rj_count`, `created_on`, `updated_on`, `deleted_on`, `triggerd_on`, `is_deleted`, `lr_col1`, `lr_col2`, `lr_col3`, `lr_col4`, `lr_col5`) VALUES
(2, NULL, NULL, 'harsh', 'kulkarni', 'hk@gmail.com', '9856456555', 'Indian', 'kolhapur', 'Car lone', '2000000', '', 24, 7890988, 'NO', 200000, 2000, 1, NULL, NULL, '2022-12-09 00:00:00', '2023-07-04 23:44:50', '2023-07-04 23:44:50', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'mruanl', 'kulkarni', 'mk@gmail.com', '9856456555', 'Indian', 'kolhapur', 'Home lone', '5000000', NULL, 24, 7890988, 'Yes', 200000, 10000, 1, NULL, NULL, '2022-12-09 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'sharutika', 'kerbe kumbhar', 'sk@gmail.com', '8564578954', 'Indian', 'kolhapur', 'Flat lone', '12312121223113133', '', 24, 7890988, 'Yes', 200000, 15000, 1, NULL, NULL, '2022-12-09 00:00:00', '2023-07-04 23:55:17', '2023-07-04 23:55:17', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'sharmili', 'mulani', 'sm@gmail.com', '8458754475', 'Indian', 'kolhapur', 'Home lone', '8000000', '', 24, 7890988, 'Yes', 200000, 2000, 1, NULL, NULL, '2022-12-09 00:00:00', '2022-12-30 16:36:14', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'shivani', 'nikam', 'sn@gmail.com', '8888888888', 'Indian', 'kolhapur', 'Education lone', '5000000', NULL, 24, 7890988, 'Yes', 200000, 25000, 1, NULL, NULL, '2022-12-09 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, 'aishwarya', 'patil', 'sp@gmail.com', '9999999999', 'Indian', 'kolhapur', 'Car lone', '9000000', NULL, 24, 7890988, 'Yes', 200000, 26000, 1, NULL, NULL, '2022-12-09 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lone_type`
--

CREATE TABLE `tbl_lone_type` (
  `lt_id` int(11) NOT NULL,
  `lt_name` varchar(500) NOT NULL,
  `created_at` varchar(25) DEFAULT NULL,
  `updated_at` varchar(25) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_on` varchar(25) DEFAULT NULL,
  `triggered_on` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lone_type`
--

INSERT INTO `tbl_lone_type` (`lt_id`, `lt_name`, `created_at`, `updated_at`, `is_deleted`, `deleted_on`, `triggered_on`) VALUES
(1, 'car lone', NULL, NULL, 0, NULL, NULL),
(2, 'education lone', NULL, NULL, 0, NULL, NULL),
(3, 'personal lone', NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `pk_mdid` int(11) NOT NULL,
  `fk_sfid` int(11) DEFAULT NULL,
  `fk_ppid` int(11) DEFAULT NULL,
  `md_media_url` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_media_type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_is_deleted` tinyint(1) DEFAULT '0',
  `md_updated_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_created_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`pk_mdid`, `fk_sfid`, `fk_ppid`, `md_media_url`, `md_media_type`, `md_is_deleted`, `md_updated_at`, `md_created_at`, `md_col1`, `md_col2`, `md_col3`, `md_col4`, `md_col5`, `deleted_on`, `triggered_on`) VALUES
(9118, 9102, 9102, '1', 'Image', 0, '2023-01-06 11:56:44', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 11:56:44', NULL),
(9119, 9102, 9102, '1', 'Image', 0, '2023-01-05 15:16:24', '2022-12-22 18:08:02', NULL, NULL, NULL, NULL, NULL, '2023-01-05 15:16:24', NULL),
(9120, 9102, 9102, '1', 'Image', 0, '2023-01-06 11:24:37', '2022-12-29 10:43:44', NULL, NULL, NULL, NULL, NULL, '2023-01-06 11:24:37', NULL),
(9121, 9102, 9103, '1', 'Video', 0, '2022-12-29 10:44:00', '2022-12-29 10:44:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9122, 9102, 9103, '1', 'Image', 0, '2023-01-05 16:36:12', '2022-12-30 18:52:26', NULL, NULL, NULL, NULL, NULL, '2023-01-05 16:36:12', NULL),
(9123, 9102, 9103, '1', 'Image', 0, '2023-01-06 11:59:26', '2022-12-30 18:52:43', NULL, NULL, NULL, NULL, NULL, '2023-01-06 11:59:26', NULL),
(9124, 9102, 9103, '1', 'Image', 0, '2023-01-05 14:43:09', '2022-12-31 16:12:51', NULL, NULL, NULL, NULL, NULL, '2023-01-05 14:43:09', NULL),
(9125, 9102, 9103, '11', 'Image', 0, '2022-12-31 16:16:43', '2022-12-31 16:16:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9126, 9102, 9104, 'OIP.jpg1', 'Image', 0, '2022-12-31 16:17:34', '2022-12-31 16:17:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9127, 9102, 9104, '1', 'Image', 0, '2022-12-31 16:21:23', '2022-12-31 16:21:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9128, 9102, 9104, 'video (1).mp4', 'Video', 0, '2022-12-31 16:31:18', '2022-12-31 16:31:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9129, 9102, 9105, '1', 'Image', 0, '2023-01-06 13:35:08', '2023-01-05 14:49:58', NULL, NULL, NULL, NULL, NULL, '2023-01-06 13:35:08', NULL),
(9130, 9102, 9105, '1', 'Image', 0, '2023-01-05 14:50:21', '2023-01-05 14:50:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9131, 9102, 9105, '1', 'Image', 0, '2023-01-05 14:51:26', '2023-01-05 14:51:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9132, 9102, 9105, '1', 'Image', 0, '2023-01-05 15:16:06', '2023-01-05 15:16:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9133, 9102, 9106, 'download.jpg', 'Image', 1, '2023-01-06 16:04:20', '2023-01-05 16:35:42', NULL, NULL, NULL, NULL, NULL, '2023-01-06 16:04:20', NULL),
(9134, 9102, 9106, '1', 'Image', 0, '2023-01-05 16:37:07', '2023-01-05 16:37:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9135, 9102, 9106, '1', 'Image', 0, '2023-01-05 18:48:59', '2023-01-05 18:48:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9136, 9102, 9106, '1', 'Image', 0, '2023-01-06 11:56:56', '2023-01-05 18:49:34', NULL, NULL, NULL, NULL, NULL, '2023-01-06 11:56:56', NULL),
(9137, 9102, 9106, '1', 'Image', 0, '2023-01-06 11:14:00', '2023-01-06 11:14:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9138, 9102, 9107, '1', 'Image', 0, '2023-01-06 11:45:35', '2023-01-06 11:45:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9139, 9102, 9107, '1', 'Image', 0, '2023-01-06 11:50:22', '2023-01-06 11:50:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9140, 9102, 9107, '1', 'Image', 0, '2023-01-06 11:59:38', '2023-01-06 11:59:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9141, 9102, 9107, '1', 'Image', 0, '2023-01-06 13:47:20', '2023-01-06 13:45:59', NULL, NULL, NULL, NULL, NULL, '2023-01-06 13:47:20', NULL),
(9142, 9102, 9107, '', 'Image', 0, '2023-01-06 13:46:48', '2023-01-06 13:46:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9143, 9102, 9107, '1', 'Image', 0, '2023-01-06 13:46:53', '2023-01-06 13:46:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9144, 9102, 9107, '1', 'Image', 0, '2023-01-06 13:47:26', '2023-01-06 13:46:55', NULL, NULL, NULL, NULL, NULL, '2023-01-06 13:47:26', NULL),
(9145, 9102, 9102, '1', 'Image', 0, '2023-01-06 13:48:55', '2023-01-06 13:48:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9146, 9102, 9102, 'e', 'Image', 1, '2023-01-06 15:49:12', '2023-01-06 15:45:09', NULL, NULL, NULL, NULL, NULL, '2023-01-06 15:49:12', NULL),
(9147, 9102, 9102, '$newfileName', 'Image', 0, '2023-01-06 16:03:55', '2023-01-06 16:03:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9148, 9102, 9102, '_', 'Image', 0, '2023-01-06 16:05:31', '2023-01-06 16:05:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9149, 9102, 9102, 'download_', 'Image', 0, '2023-01-06 16:05:39', '2023-01-06 16:05:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9150, 9102, 9102, 'download_', 'Image', 0, '2023-01-06 16:05:58', '2023-01-06 16:05:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9151, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite_', 'Image', 0, '2023-01-06 16:06:20', '2023-01-06 16:06:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9152, 9102, 9102, 'download_', 'Image', 0, '2023-01-06 16:08:10', '2023-01-06 16:08:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9153, 9102, 9102, 'download_1_9102_9153jpg', 'Image', 1, '2023-01-07 00:11:46', '2023-01-06 16:19:19', NULL, NULL, NULL, NULL, NULL, '2023-01-07 00:11:46', NULL),
(9154, 9102, 9102, 'dsc00137 (1)_1_9102_9154.jpg', 'Image', 1, '2023-01-07 00:54:36', '2023-01-06 16:26:40', NULL, NULL, NULL, NULL, NULL, '2023-01-07 00:54:36', NULL),
(9155, 9102, 9102, 'dsc00137 (1)_1_9102_9155.jpg', 'Image', 1, '2023-01-06 16:27:36', '2023-01-06 16:27:25', NULL, NULL, NULL, NULL, NULL, '2023-01-06 16:27:36', NULL),
(9156, 9102, 9102, 'download_1_9102_9156.jpg', 'Image', 1, '2023-01-07 00:54:41', '2023-01-07 00:01:56', NULL, NULL, NULL, NULL, NULL, '2023-01-07 00:54:41', NULL),
(9157, 9102, 9102, 'download_1_9102_9157.jpg', 'Image', 1, '2023-01-07 10:15:49', '2023-01-07 00:01:58', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:15:49', NULL),
(9158, 9102, 9102, 'download_1_9102_9158.jpg', 'Image', 1, '2023-01-07 10:15:55', '2023-01-07 00:02:16', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:15:55', NULL),
(9159, 9102, 9102, 'download_1_9102_9159.jpg', 'Image', 1, '2023-01-07 10:16:04', '2023-01-07 00:02:16', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:16:04', NULL),
(9160, 9102, 9102, 'download_1_9102_9160.jpg', 'Image', 1, '2023-01-07 10:16:08', '2023-01-07 00:02:17', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:16:08', NULL),
(9161, 9102, 9102, '_1_9102_9161.', 'Image', 0, '2023-01-07 00:26:22', '2023-01-07 00:26:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9162, 9102, 9102, 'download_1_9102_9162.jpg', 'Image', 1, '2023-01-07 00:54:31', '2023-01-07 00:33:25', NULL, NULL, NULL, NULL, NULL, '2023-01-07 00:54:31', NULL),
(9163, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 00:40:46', '2023-01-07 00:40:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9164, 9102, 9102, 'video (1)_1_9102_9164.mp4', 'Video', 0, '2023-01-07 00:41:17', '2023-01-07 00:41:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9165, 9102, 9102, 'video (1)_1_9102_9165.mp4', 'Video', 1, '2023-01-07 01:04:52', '2023-01-07 00:52:35', NULL, NULL, NULL, NULL, NULL, '2023-01-07 01:04:52', NULL),
(9166, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:14:44', '2023-01-07 10:14:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9167, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:14:45', '2023-01-07 10:14:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9168, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:15:03', '2023-01-07 10:15:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9169, 9102, 9102, 'download_1_9102_9169.jpg', 'Image', 1, '2023-01-07 10:16:13', '2023-01-07 10:15:34', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:16:13', NULL),
(9170, 9102, 9102, 'download_1_9102_9170.jpg', 'Image', 1, '2023-01-07 10:16:18', '2023-01-07 10:15:35', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:16:18', NULL),
(9171, 9102, 9102, 'download_1_9102_9171.jpg', 'Image', 1, '2023-01-07 10:19:13', '2023-01-07 10:15:35', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:19:13', NULL),
(9172, 9102, 9102, 'download_1_9102_9172.jpg', 'Image', 1, '2023-01-07 10:17:12', '2023-01-07 10:15:36', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:17:12', NULL),
(9173, 9102, 9102, 'download_1_9102_9173.jpg', 'Image', 1, '2023-01-07 10:17:18', '2023-01-07 10:15:36', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:17:18', NULL),
(9174, 9102, 9102, 'download_1_9102_9174.jpg', 'Image', 1, '2023-01-07 10:24:34', '2023-01-07 10:15:36', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:24:34', NULL),
(9175, 9102, 9102, 'download_1_9102_9175.jpg', 'Image', 1, '2023-01-07 10:24:39', '2023-01-07 10:17:01', NULL, NULL, NULL, NULL, NULL, '2023-01-07 10:24:39', NULL),
(9176, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:19:22', '2023-01-07 10:19:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9177, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:19:38', '2023-01-07 10:19:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9178, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:20:44', '2023-01-07 10:20:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9179, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:22:22', '2023-01-07 10:22:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9180, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:24:47', '2023-01-07 10:24:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9181, 9102, 9102, 'download_1_9102_9181.jpg', 'Image', 0, '2023-01-07 10:27:01', '2023-01-07 10:27:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9182, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:27:16', '2023-01-07 10:27:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9183, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:28:26', '2023-01-07 10:28:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9184, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:28:56', '2023-01-07 10:28:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9185, 9102, 9102, 'download_1_9102_9185.jpg', 'Image', 0, '2023-01-07 10:30:06', '2023-01-07 10:30:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9186, 9102, 9102, 'download_1_9102_9186.jpg', 'Image', 0, '2023-01-07 10:30:08', '2023-01-07 10:30:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9187, 9102, 9102, 'download_1_9102_9187.jpg', 'Image', 0, '2023-01-07 10:32:08', '2023-01-07 10:32:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9188, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite.jpg', 'Image', 0, '2023-01-07 10:32:18', '2023-01-07 10:32:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9189, 9102, 9102, 'bathroom-spa-deluxe-room-or-spa-suite_1_9102_9189.jpg', 'Image', 0, '2023-01-07 10:40:01', '2023-01-07 10:40:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9190, 9102, 9117, '12_1_9117_9190.png', 'Image', 0, '2023-04-07 18:14:22', '2023-04-07 18:14:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9191, 9102, 9117, 'WhatsApp Image 2023-03-17 at 13_1_9117_9191.01', 'Image', 0, '2023-04-07 18:14:29', '2023-04-07 18:14:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9192, 9102, 9118, 'WhatsApp Image 2023-03-17 at 13_1_9118_9192.02', 'Image', 0, '2023-04-07 23:41:23', '2023-04-07 23:41:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9193, 9102, 9122, 'roleadded -commit 09032023_1_9122_9193.png', 'Image', 0, '2023-04-11 17:39:23', '2023-04-11 17:39:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9194, 9102, 9122, '_1_9122_9194.', 'Image', 0, '2023-04-11 17:39:26', '2023-04-11 17:39:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9195, 9102, 9122, 'pcmc database1_1_9122_9195.png', 'Image', 0, '2023-04-11 17:39:33', '2023-04-11 17:39:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9196, 9102, 9122, '1280_1_9122_9196.mp4', 'Video', 0, '2023-04-11 17:41:51', '2023-04-11 17:41:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9197, 9102, 9122, '1280_1_9122_9197.mp4', 'Video', 0, '2023-04-11 17:42:08', '2023-04-11 17:42:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9198, 9102, 9122, '1280_1_9122_9198.mp4', 'Video', 0, '2023-04-11 17:46:15', '2023-04-11 17:46:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9199, 9102, 9124, '20012023-grievnace file commit_1_9124_9199.png', 'Image', 0, '2023-04-18 22:26:07', '2023-04-18 22:26:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9200, 9102, 9134, 'image_2_1_9134_9200.jpg', 'Image', 0, '2023-05-26 15:39:06', '2023-05-26 15:39:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9201, 9102, 9136, '_2_9136_9201.', 'Image', 0, '2023-05-26 16:01:29', '2023-05-26 16:01:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9202, 9102, 9136, 'bg_1_2_9136_9202.jpg', 'Image', 0, '2023-05-26 16:01:37', '2023-05-26 16:01:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9203, 9102, 9136, 'image_3_2_9136_9203.jpg', 'Image', 0, '2023-05-26 16:01:44', '2023-05-26 16:01:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9204, 9102, 9136, 'image_4_2_9136_9204.jpg', 'Image', 0, '2023-05-26 16:02:07', '2023-05-26 16:02:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9205, 9102, 9136, 'person_1_2_9136_9205.jpg', 'Image', 0, '2023-05-26 16:02:15', '2023-05-26 16:02:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9206, 9102, 9136, 'person_2_2_9136_9206.jpg', 'Image', 0, '2023-05-26 16:02:24', '2023-05-26 16:02:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9207, 9102, 9136, 'screen-capture (2)_2_9136_9207.webm', 'Video', 0, '2023-05-26 16:25:32', '2023-05-26 16:25:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9208, 9102, 9136, '1280_2_9136_9208.mp4', 'Video', 0, '2023-05-26 16:25:42', '2023-05-26 16:25:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9209, 9103, 9137, 'baba_9103_9137_9209.jpeg', 'Image', 0, '2023-10-10 23:53:49', '2023-10-10 23:53:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `pk_ppid` int(11) NOT NULL,
  `fk_usid` int(11) DEFAULT NULL,
  `fk_ptid` int(11) DEFAULT NULL,
  `pp_price` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_plot_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_ward` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_bulding_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_street` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_landmark` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_district` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_state` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_pincode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_owner_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_contact_no` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `pp_status` int(11) DEFAULT NULL,
  `pp_rj_resone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_rj_count` int(11) DEFAULT NULL,
  `pp_deposite` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_aggrement_month` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_is_deleted` tinyint(1) DEFAULT '0',
  `pp_created_at` datetime DEFAULT NULL,
  `pp_updated_at` datetime DEFAULT NULL,
  `pp_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pp_soid` int(11) DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `triggered_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`pk_ppid`, `fk_usid`, `fk_ptid`, `pp_price`, `pp_plot_no`, `pp_ward`, `pp_bulding_name`, `pp_street`, `pp_landmark`, `pp_city`, `pp_district`, `pp_state`, `pp_pincode`, `pp_owner_name`, `pp_contact_no`, `pp_status`, `pp_rj_resone`, `pp_rj_count`, `pp_deposite`, `pp_aggrement_month`, `pp_is_deleted`, `pp_created_at`, `pp_updated_at`, `pp_col1`, `pp_col2`, `pp_col3`, `pp_col4`, `pp_col5`, `pp_soid`, `deleted_on`, `triggered_on`) VALUES
(9102, 9102, 1, '400000', '1', 'B', 'abc', 'abc', 'landmark', 'kolhapur', 'maharastra', 'state', 'pincide', 'owner', '456574567', 1, 'are443565456545', NULL, 'test_deposite', '7898', 1, '2022-12-29 11:49:17', '2022-12-29 11:49:17', ' ', ' ', ' ', ' ', ' ', 1, '1970-01-01 00:00:01', '2022-12-29 11:49:17'),
(9103, 9102, 1, '70000', '5', 'd ward', 'mith', 'hizvde rank', NULL, 'kolhapur', 'maharastra', 'Maharashtra', '416012', 'antapurkar', '788888888', 1, NULL, NULL, NULL, NULL, 0, '2022-02-02 00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9104, 9102, 1, '70000', '8', 'h ward', 'kolha', 'oyrfh rank', NULL, 'kolhapur', 'maharastra', 'Maharashtra', '416012', 'fhj', '788888888', 2, NULL, NULL, NULL, NULL, 0, '1970-01-01 00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9105, 9102, 1, '100000', '1', 'A', 'abc', 'abc', 'landmark', 'citykolhapur', 'maharastra', 'state', '124545', 'owner', '5214555555', 2, 'hhh', NULL, 'test_deposite', '7898', 0, '1970-01-01 00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(9106, 9102, 2, '60000', '6', 'C', 'vilhar', 'nana patil', NULL, 'kolhapur', 'maharashtra', 'maharastra', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, 0, '1970-01-01 00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9107, 9102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '658965', 'harsh', '8978954789', 1, NULL, NULL, NULL, NULL, 0, '2023-01-01 00:00:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9108, 9102, 1, '50000', '1', 'B', 'abc', 'abc', 'landmark', 'kolhapur', 'maharastra', 'state', 'pincide', 'owner', 'q2wer', 8, NULL, NULL, 'test_deposite', '7898', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9109, 9102, 5, '11', '1', '1', '1', '1', '1', '1', '1', '1', '111111', 'hk', '8111111111', 8, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9110, 9102, 2, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', 'xxxxx', 'maharashatra', '416012', 'shrutika', '8111111111', 8, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9111, 9102, 2, '1', '1', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '123456', 'a', '8797979797', 8, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9112, 9102, 1, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', '1', 'maharashatra', '416012', '1', '8797979797', 8, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9113, 9102, 3, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', '1', 'maharashatra', '416012', '1', '8111111111', 8, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9114, 9102, 4, '3', '3', '3', '3', '3', '3', 'kolhapur', '1', 'maharashatra', '416012', '1', '8111111111', 8, NULL, NULL, '3', '3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9115, 9102, 1, '90', '9', '9', '9', '9', '9', 'kolhapur', '1', 'maharashatra', '416012', 'hk', '8797979797', 8, NULL, NULL, '90', '9', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9116, 9102, 2, '1', '1', '9', '9', '9', '9', 'sangili', '1', 'maharashatra', '416012', '1', '8797979797', 8, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9117, 9102, 4, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', '1', 'maharashatra', '416012', '1', '8797979797', 8, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9118, 9102, 4, '1', '1', '1', '1', 'd 100-101 survenagar kalamba', '1', 'kolhapur', '1', 'maharashatra', '416116', '1', '8797979797', 2, NULL, NULL, '1', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9119, 9102, 4, '2', '1', '2', '2', '2', '2', '2', '2', '2', '222222', '2', '8222222222', 8, NULL, NULL, '2', '2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9120, 9102, 3, '67', '1', '1', '1', '1', '1', '1', '1', '1', '111111', '1', '9876543212', 8, NULL, NULL, '67', '67', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9121, 9102, 3, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', 'Rajarampuri', 'kolhapur', '1', 'maharashatra', '416012', '1', '9876543212', 8, NULL, NULL, '1', '04/12/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9122, 9102, 3, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', 'Rajarampuri', 'kolhapur', '1', 'maharashatra', '416012', '1', '9876543212', 2, NULL, NULL, '1', '04/12/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9123, 9102, 3, '2222', '1', 'a', '12', 'reas', 'mukt sainik vasahat', 'kolhapur', 'mnbnb', 'maharashatra', '416116', 'nbjhjh', '8797979797', 8, NULL, NULL, '2222', '04/18/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9124, 9102, 3, '2222', '1', 'a', '12', 'reas', 'mukt sainik vasahat', 'kolhapur', 'mnbnb', 'maharashatra', '416116', 'nbjhjh', '8797979797', 2, NULL, NULL, '2222', '04/18/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9125, 9102, 3, '1', '1', '1', '1', 'd 100-101 survenagar kalamba', 'Tarabai Park', 'sangili', '1', 'Maharastra', '416013', '1', '9876543212', 8, NULL, NULL, '1', '05/31/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9126, 9102, 3, '1', '1', '1', '1', 'd 100-101 survenagar kalamba', 'Tarabai Park', 'sangili', '1', 'Maharastra', '416013', '1', '9876543212', 2, NULL, NULL, '1', '05/31/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9127, 9102, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '111111', '1', '9876543212', 8, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9128, 9102, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '111111', '1', '9876543212', 8, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9129, 9102, 2, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', '1', 'maharashatra', '416012', '1', '9876543212', 8, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9130, 9102, 2, '1', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', '1', 'maharashatra', '416012', '1', '9876543212', 8, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9131, 9102, 2, '1', '1', '1', '1', 'nagdevwadi', '1', 'kolhapur', '1', 'maharashatra', '416116', '1', '9876543212', 8, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9132, 9102, 2, '1', '1', '1', '1', 'nagdevwadi', '1', 'kolhapur', '1', 'maharashatra', '416116', '1', '9876543212', 2, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9133, 9102, 3, '3000000000000', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', '1', 'maharashatra', '416012', 'adfgduyugd', '8222222222', 8, NULL, NULL, '30000000000000', '05/01/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9134, 9102, 3, '3000000000000', '1', '1', '1', 'plot no 311/5 nana patil nager', '1', 'kolhapur', '1', 'maharashatra', '416012', 'adfgduyugd', '8222222222', 8, NULL, NULL, '30000000000000', '05/01/2023', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9135, 9102, 2, '1', '1', 'dbsdjcb', 'sdcbsdcjbds', 'plot no 311/5 nana patil nager', 'xcnnvdsjbsd', 'kolhapur', 'sjjsdh', 'maharashatra', '416012', '1', '8222222222', 8, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9136, 9102, 2, '1', '1', 'dbsdjcb', 'sdcbsdcjbds', 'plot no 311/5 nana patil nager', 'xcnnvdsjbsd', 'kolhapur', 'sjjsdh', 'maharashatra', '416012', '1', '8222222222', 2, NULL, NULL, '1', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9137, 9103, 2, '45', 'hi', 'h', 'a', 'survenagar kalamba road kolhapur', 'h', 'Kolhapur', 'h', 'Maharashtra', '416007', 'harsh', '9665118484', 1, NULL, NULL, '201300', '', 0, '2023-10-10 23:53:26', '2023-10-10 23:53:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_type`
--

CREATE TABLE `tbl_property_type` (
  `pk_ptid` int(11) NOT NULL,
  `pt_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_is_deleted` tinyint(1) DEFAULT '0',
  `pt_created_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_updated_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_property_type`
--

INSERT INTO `tbl_property_type` (`pk_ptid`, `pt_name`, `pt_is_deleted`, `pt_created_at`, `pt_updated_at`, `pt_col1`, `pt_col2`, `pt_col3`, `pt_col4`, `pt_col5`, `deleted_on`, `triggered_on`) VALUES
(1, 'House', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL),
(2, 'banglo', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL),
(3, 'Rent', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL),
(4, 'Row Banglo', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL),
(5, 'flat', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `pk_rgid` int(11) NOT NULL,
  `fk_sfid` int(11) DEFAULT NULL,
  `rg_fname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_lname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rd_is_super_admin` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_seller` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_buyer` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_app_user` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_deleted` tinyint(1) DEFAULT '0',
  `rg_created_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_updated_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`pk_rgid`, `fk_sfid`, `rg_fname`, `rg_lname`, `rg_email`, `rg_mobile`, `rg_address`, `rg_password`, `rd_is_super_admin`, `rg_is_seller`, `rg_is_buyer`, `rg_is_app_user`, `rg_is_deleted`, `rg_created_at`, `rg_updated_at`, `rg_status`, `rg_col1`, `rg_col2`, `rg_col3`, `rg_col4`, `rg_col5`, `rg_deleted_on`, `rg_triggered_on`) VALUES
(9102, 9102, 'Admin', 'Admin', 'admin@gmail.com', '8585858585', 'hft', 'Admin', 'Y', 'N', 'N', 'N', 0, NULL, NULL, 'Active', 'N', NULL, NULL, NULL, NULL, NULL, NULL),
(9103, 9103, 'j', 's', 'psshruti@gmail.com', '7878787878', 'hft', 'js@123', 'N', 'Y', 'Y', 'N', 0, NULL, NULL, 'Active', 'Y', NULL, NULL, NULL, NULL, NULL, NULL),
(9104, 9104, 'aa', NULL, 'shortshot05@gmail.com', '9665118464', 'survenagar kalamba road kolhapur', 'aa@123', NULL, 'Y', 'N', NULL, 0, '2023-10-10 08:57:29', '2023-10-10 08:57:29', 'inActive', 'N', '177995', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration_temp`
--

CREATE TABLE `tbl_registration_temp` (
  `pk_rgid` int(11) NOT NULL,
  `fk_sfid` int(11) DEFAULT NULL,
  `rg_fname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_lname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_email` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_password` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rd_is_super_admin` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_seller` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_buyer` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_app_user` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_is_deleted` tinyint(1) DEFAULT '0',
  `rg_created_at` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg_updated_at` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg_status` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col1` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col2` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col3` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col4` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col5` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_deleted_on` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `rg_triggered_on` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `pk_sfid` int(11) NOT NULL,
  `sf_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_is_deleted` tinyint(1) DEFAULT '0',
  `sf_created_at` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_updated_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`pk_sfid`, `sf_name`, `sf_email`, `sf_mobile`, `sf_status`, `sf_is_deleted`, `sf_created_at`, `sf_updated_at`, `sf_col1`, `sf_col2`, `sf_col3`, `sf_col4`, `deleted_on`, `triggered_on`) VALUES
(9102, 'q  ', 'q', '090909090', 'Active', NULL, NULL, '2022-12-27 20:45:15', NULL, NULL, NULL, NULL, NULL, NULL),
(9103, 'q  ', 'q', '090909090', 'Active', NULL, NULL, '2022-12-27 20:45:15', NULL, NULL, NULL, NULL, NULL, NULL),
(9104, 'aa', 'shortshot05@gmail.com', '9665118464', 'Active', 0, '2023-10-10 08:57:29', '2023-10-10 08:57:29', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `name`, `created_at`, `updated_at`, `is_deleted`, `deleted_on`, `triggered_on`) VALUES
(1, 'CR', NULL, NULL, 0, NULL, NULL),
(2, 'AC', NULL, NULL, 0, NULL, NULL),
(3, 'DT', NULL, NULL, 0, NULL, NULL),
(4, 'RJ', NULL, NULL, 0, NULL, NULL),
(5, 'SO', NULL, NULL, 0, NULL, NULL),
(6, 'BR', NULL, NULL, 0, NULL, NULL),
(7, 'DN', NULL, NULL, 0, NULL, NULL),
(8, 'RE', NULL, NULL, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_request`
--
ALTER TABLE `tbl_admin_request`
  ADD PRIMARY KEY (`pp_req_id`),
  ADD KEY `fk_reg_pp_id_idx` (`req_pp_id`),
  ADD KEY `regfkid_idx` (`req_regi_id`),
  ADD KEY `owner_fk` (`req_ppowner_id`),
  ADD KEY `req_admin_id` (`req_admin_id`);

--
-- Indexes for table `tbl_config_table`
--
ALTER TABLE `tbl_config_table`
  ADD PRIMARY KEY (`pk_conid`);

--
-- Indexes for table `tbl_lone_request`
--
ALTER TABLE `tbl_lone_request`
  ADD PRIMARY KEY (`lr_id`),
  ADD UNIQUE KEY `lr_id_UNIQUE` (`lr_id`),
  ADD KEY `loneTypeFK` (`lr_lone_type_id`);

--
-- Indexes for table `tbl_lone_type`
--
ALTER TABLE `tbl_lone_type`
  ADD PRIMARY KEY (`lt_id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`pk_mdid`),
  ADD KEY `regfkid_idx` (`fk_sfid`),
  ADD KEY `proprtyfkid_idx` (`fk_ppid`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`pk_ppid`),
  ADD KEY `reg_fk_idx` (`fk_usid`),
  ADD KEY `propertytypefk_idx` (`fk_ptid`),
  ADD KEY `statusfk_idx` (`pp_status`);

--
-- Indexes for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
  ADD PRIMARY KEY (`pk_ptid`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`pk_rgid`),
  ADD KEY `sf_fk_idx` (`fk_sfid`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`pk_sfid`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_request`
--
ALTER TABLE `tbl_admin_request`
  MODIFY `pp_req_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_config_table`
--
ALTER TABLE `tbl_config_table`
  MODIFY `pk_conid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lone_request`
--
ALTER TABLE `tbl_lone_request`
  MODIFY `lr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_lone_type`
--
ALTER TABLE `tbl_lone_type`
  MODIFY `lt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `pk_mdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9210;

--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `pk_ppid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9138;

--
-- AUTO_INCREMENT for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
  MODIFY `pk_ptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `pk_rgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9105;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `pk_sfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9105;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin_request`
--
ALTER TABLE `tbl_admin_request`
  ADD CONSTRAINT `fk_reg_pp_id` FOREIGN KEY (`req_pp_id`) REFERENCES `tbl_property` (`pk_ppid`),
  ADD CONSTRAINT `owner_fk` FOREIGN KEY (`req_ppowner_id`) REFERENCES `tbl_registration` (`pk_rgid`),
  ADD CONSTRAINT `req_admin_id` FOREIGN KEY (`req_admin_id`) REFERENCES `tbl_registration` (`pk_rgid`),
  ADD CONSTRAINT `req_regfkid` FOREIGN KEY (`req_regi_id`) REFERENCES `tbl_registration` (`pk_rgid`);

--
-- Constraints for table `tbl_lone_request`
--
ALTER TABLE `tbl_lone_request`
  ADD CONSTRAINT `loneTypeFK` FOREIGN KEY (`lr_lone_type_id`) REFERENCES `tbl_lone_type` (`lt_id`);

--
-- Constraints for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD CONSTRAINT `proprtyfkid` FOREIGN KEY (`fk_ppid`) REFERENCES `tbl_property` (`pk_ppid`),
  ADD CONSTRAINT `regfkid` FOREIGN KEY (`fk_sfid`) REFERENCES `tbl_registration` (`pk_rgid`);

--
-- Constraints for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD CONSTRAINT `propertytypefk` FOREIGN KEY (`fk_ptid`) REFERENCES `tbl_property_type` (`pk_ptid`),
  ADD CONSTRAINT `reg_fk` FOREIGN KEY (`fk_usid`) REFERENCES `tbl_registration` (`pk_rgid`),
  ADD CONSTRAINT `statusfk` FOREIGN KEY (`pp_status`) REFERENCES `tbl_status` (`id`);

--
-- Constraints for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD CONSTRAINT `sf_fk` FOREIGN KEY (`fk_sfid`) REFERENCES `tbl_staff` (`pk_sfid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
