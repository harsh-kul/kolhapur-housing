-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.7.7-rc-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_admin_request`
--

DROP TABLE IF EXISTS `tbl_admin_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_admin_request` (
  `pp_req_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `req_admin_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pp_req_id`),
  KEY `fk_reg_pp_id_idx` (`req_pp_id`),
  KEY `regfkid_idx` (`req_regi_id`),
  KEY `owner_fk` (`req_ppowner_id`),
  KEY `req_admin_id` (`req_admin_id`),
  CONSTRAINT `fk_reg_pp_id` FOREIGN KEY (`req_pp_id`) REFERENCES `tbl_property` (`pk_ppid`),
  CONSTRAINT `owner_fk` FOREIGN KEY (`req_ppowner_id`) REFERENCES `tbl_registration` (`pk_rgid`),
  CONSTRAINT `req_admin_id` FOREIGN KEY (`req_admin_id`) REFERENCES `tbl_registration` (`pk_rgid`),
  CONSTRAINT `req_regfkid` FOREIGN KEY (`req_regi_id`) REFERENCES `tbl_registration` (`pk_rgid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin_request`
--

LOCK TABLES `tbl_admin_request` WRITE;
/*!40000 ALTER TABLE `tbl_admin_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_admin_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_config_table`
--

DROP TABLE IF EXISTS `tbl_config_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_config_table` (
  `pk_conid` int(11) NOT NULL AUTO_INCREMENT,
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
  `triggerd_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pk_conid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_config_table`
--

LOCK TABLES `tbl_config_table` WRITE;
/*!40000 ALTER TABLE `tbl_config_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_config_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_lone_request`
--

DROP TABLE IF EXISTS `tbl_lone_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_lone_request` (
  `lr_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `lr_col5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`lr_id`),
  UNIQUE KEY `lr_id_UNIQUE` (`lr_id`),
  KEY `loneTypeFK` (`lr_lone_type_id`),
  CONSTRAINT `loneTypeFK` FOREIGN KEY (`lr_lone_type_id`) REFERENCES `tbl_lone_type` (`lt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_lone_request`
--

LOCK TABLES `tbl_lone_request` WRITE;
/*!40000 ALTER TABLE `tbl_lone_request` DISABLE KEYS */;
INSERT INTO `tbl_lone_request` VALUES (2,NULL,NULL,'harsh','kulkarni','hk@gmail.com','9856456555','Indian','kolhapur','Car lone','2000000','',24,7890988,'NO',200000,2000,1,NULL,NULL,'2022-12-09 00:00:00','2022-12-30 16:45:52',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,'mruanl','kulkarni','mk@gmail.com','9856456555','Indian','kolhapur','Home lone','5000000',NULL,24,7890988,'Yes',200000,10000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,'sharutika','kerbe kumbhar','sk@gmail.com','8564578954','Indian','kolhapur','Flat lone','12312121223113133','',24,7890988,'Yes',200000,15000,1,NULL,NULL,'2022-12-09 00:00:00','2022-12-30 16:39:07',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,'sharmili','mulani','sm@gmail.com','8458754475','Indian','kolhapur','Home lone','8000000','',24,7890988,'Yes',200000,2000,1,NULL,NULL,'2022-12-09 00:00:00','2022-12-30 16:36:14',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,'shivani','nikam','sn@gmail.com','8888888888','Indian','kolhapur','Education lone','5000000',NULL,24,7890988,'Yes',200000,25000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,'aishwarya','patil','sp@gmail.com','9999999999','Indian','kolhapur','Car lone','9000000',NULL,24,7890988,'Yes',200000,26000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_lone_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_lone_type`
--

DROP TABLE IF EXISTS `tbl_lone_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_lone_type` (
  `lt_id` int(11) NOT NULL AUTO_INCREMENT,
  `lt_name` varchar(500) NOT NULL,
  `created_at` varchar(25) DEFAULT NULL,
  `updated_at` varchar(25) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_on` varchar(25) DEFAULT NULL,
  `triggered_on` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`lt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_lone_type`
--

LOCK TABLES `tbl_lone_type` WRITE;
/*!40000 ALTER TABLE `tbl_lone_type` DISABLE KEYS */;
INSERT INTO `tbl_lone_type` VALUES (1,'car lone',NULL,NULL,0,NULL,NULL),(2,'education lone',NULL,NULL,0,NULL,NULL),(3,'personal lone',NULL,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `tbl_lone_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_media`
--

DROP TABLE IF EXISTS `tbl_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_media` (
  `pk_mdid` int(11) NOT NULL AUTO_INCREMENT,
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
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pk_mdid`),
  KEY `regfkid_idx` (`fk_sfid`),
  KEY `proprtyfkid_idx` (`fk_ppid`),
  CONSTRAINT `proprtyfkid` FOREIGN KEY (`fk_ppid`) REFERENCES `tbl_property` (`pk_ppid`),
  CONSTRAINT `regfkid` FOREIGN KEY (`fk_sfid`) REFERENCES `tbl_registration` (`pk_rgid`)
) ENGINE=InnoDB AUTO_INCREMENT=9190 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_media`
--

LOCK TABLES `tbl_media` WRITE;
/*!40000 ALTER TABLE `tbl_media` DISABLE KEYS */;
INSERT INTO `tbl_media` VALUES (9118,1,9102,'1','Image',0,'2023-01-06 11:56:44',NULL,NULL,NULL,NULL,NULL,NULL,'2023-01-06 11:56:44',NULL),(9119,1,9102,'1','Image',0,'2023-01-05 15:16:24','2022-12-22 18:08:02',NULL,NULL,NULL,NULL,NULL,'2023-01-05 15:16:24',NULL),(9120,1,9102,'1','Image',0,'2023-01-06 11:24:37','2022-12-29 10:43:44',NULL,NULL,NULL,NULL,NULL,'2023-01-06 11:24:37',NULL),(9121,1,9102,'1','Video',0,'2022-12-29 10:44:00','2022-12-29 10:44:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9122,1,9102,'1','Image',0,'2023-01-05 16:36:12','2022-12-30 18:52:26',NULL,NULL,NULL,NULL,NULL,'2023-01-05 16:36:12',NULL),(9123,1,9102,'1','Image',0,'2023-01-06 11:59:26','2022-12-30 18:52:43',NULL,NULL,NULL,NULL,NULL,'2023-01-06 11:59:26',NULL),(9124,1,9102,'1','Image',0,'2023-01-05 14:43:09','2022-12-31 16:12:51',NULL,NULL,NULL,NULL,NULL,'2023-01-05 14:43:09',NULL),(9125,1,9102,'11','Image',0,'2022-12-31 16:16:43','2022-12-31 16:16:43',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9126,1,9102,'OIP.jpg1','Image',0,'2022-12-31 16:17:34','2022-12-31 16:17:34',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9127,1,9102,'1','Image',0,'2022-12-31 16:21:23','2022-12-31 16:21:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9128,1,9102,'video (1).mp4','Video',0,'2022-12-31 16:31:18','2022-12-31 16:31:18',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9129,1,9102,'1','Image',0,'2023-01-06 13:35:08','2023-01-05 14:49:58',NULL,NULL,NULL,NULL,NULL,'2023-01-06 13:35:08',NULL),(9130,1,9102,'1','Image',0,'2023-01-05 14:50:21','2023-01-05 14:50:21',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9131,1,9102,'1','Image',0,'2023-01-05 14:51:26','2023-01-05 14:51:26',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9132,1,9102,'1','Image',0,'2023-01-05 15:16:06','2023-01-05 15:16:06',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9133,1,9102,'download.jpg','Image',1,'2023-01-06 16:04:20','2023-01-05 16:35:42',NULL,NULL,NULL,NULL,NULL,'2023-01-06 16:04:20',NULL),(9134,1,9102,'1','Image',0,'2023-01-05 16:37:07','2023-01-05 16:37:07',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9135,1,9102,'1','Image',0,'2023-01-05 18:48:59','2023-01-05 18:48:59',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9136,1,9102,'1','Image',0,'2023-01-06 11:56:56','2023-01-05 18:49:34',NULL,NULL,NULL,NULL,NULL,'2023-01-06 11:56:56',NULL),(9137,1,9102,'1','Image',0,'2023-01-06 11:14:00','2023-01-06 11:14:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9138,1,9102,'1','Image',0,'2023-01-06 11:45:35','2023-01-06 11:45:35',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9139,1,9102,'1','Image',0,'2023-01-06 11:50:22','2023-01-06 11:50:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9140,1,9102,'1','Image',0,'2023-01-06 11:59:38','2023-01-06 11:59:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9141,1,9102,'1','Image',0,'2023-01-06 13:47:20','2023-01-06 13:45:59',NULL,NULL,NULL,NULL,NULL,'2023-01-06 13:47:20',NULL),(9142,1,9102,'','Image',0,'2023-01-06 13:46:48','2023-01-06 13:46:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9143,1,9102,'1','Image',0,'2023-01-06 13:46:53','2023-01-06 13:46:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9144,1,9102,'1','Image',0,'2023-01-06 13:47:26','2023-01-06 13:46:55',NULL,NULL,NULL,NULL,NULL,'2023-01-06 13:47:26',NULL),(9145,1,9102,'1','Image',0,'2023-01-06 13:48:55','2023-01-06 13:48:55',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9146,1,9102,'e','Image',1,'2023-01-06 15:49:12','2023-01-06 15:45:09',NULL,NULL,NULL,NULL,NULL,'2023-01-06 15:49:12',NULL),(9147,1,9102,'$newfileName','Image',0,'2023-01-06 16:03:55','2023-01-06 16:03:55',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9148,1,9102,'_','Image',0,'2023-01-06 16:05:31','2023-01-06 16:05:31',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9149,1,9102,'download_','Image',0,'2023-01-06 16:05:39','2023-01-06 16:05:39',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9150,1,9102,'download_','Image',0,'2023-01-06 16:05:58','2023-01-06 16:05:58',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9151,1,9102,'bathroom-spa-deluxe-room-or-spa-suite_','Image',0,'2023-01-06 16:06:20','2023-01-06 16:06:20',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9152,1,9102,'download_','Image',0,'2023-01-06 16:08:10','2023-01-06 16:08:10',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9153,1,9102,'download_1_9102_9153jpg','Image',1,'2023-01-07 00:11:46','2023-01-06 16:19:19',NULL,NULL,NULL,NULL,NULL,'2023-01-07 00:11:46',NULL),(9154,1,9102,'dsc00137 (1)_1_9102_9154.jpg','Image',1,'2023-01-07 00:54:36','2023-01-06 16:26:40',NULL,NULL,NULL,NULL,NULL,'2023-01-07 00:54:36',NULL),(9155,1,9102,'dsc00137 (1)_1_9102_9155.jpg','Image',1,'2023-01-06 16:27:36','2023-01-06 16:27:25',NULL,NULL,NULL,NULL,NULL,'2023-01-06 16:27:36',NULL),(9156,1,9102,'download_1_9102_9156.jpg','Image',1,'2023-01-07 00:54:41','2023-01-07 00:01:56',NULL,NULL,NULL,NULL,NULL,'2023-01-07 00:54:41',NULL),(9157,1,9102,'download_1_9102_9157.jpg','Image',1,'2023-01-07 10:15:49','2023-01-07 00:01:58',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:15:49',NULL),(9158,1,9102,'download_1_9102_9158.jpg','Image',1,'2023-01-07 10:15:55','2023-01-07 00:02:16',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:15:55',NULL),(9159,1,9102,'download_1_9102_9159.jpg','Image',1,'2023-01-07 10:16:04','2023-01-07 00:02:16',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:16:04',NULL),(9160,1,9102,'download_1_9102_9160.jpg','Image',1,'2023-01-07 10:16:08','2023-01-07 00:02:17',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:16:08',NULL),(9161,1,9102,'_1_9102_9161.','Image',0,'2023-01-07 00:26:22','2023-01-07 00:26:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9162,1,9102,'download_1_9102_9162.jpg','Image',1,'2023-01-07 00:54:31','2023-01-07 00:33:25',NULL,NULL,NULL,NULL,NULL,'2023-01-07 00:54:31',NULL),(9163,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 00:40:46','2023-01-07 00:40:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9164,1,9102,'video (1)_1_9102_9164.mp4','Video',0,'2023-01-07 00:41:17','2023-01-07 00:41:17',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9165,1,9102,'video (1)_1_9102_9165.mp4','Video',1,'2023-01-07 01:04:52','2023-01-07 00:52:35',NULL,NULL,NULL,NULL,NULL,'2023-01-07 01:04:52',NULL),(9166,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:14:44','2023-01-07 10:14:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9167,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:14:45','2023-01-07 10:14:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9168,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:15:03','2023-01-07 10:15:03',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9169,1,9102,'download_1_9102_9169.jpg','Image',1,'2023-01-07 10:16:13','2023-01-07 10:15:34',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:16:13',NULL),(9170,1,9102,'download_1_9102_9170.jpg','Image',1,'2023-01-07 10:16:18','2023-01-07 10:15:35',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:16:18',NULL),(9171,1,9102,'download_1_9102_9171.jpg','Image',1,'2023-01-07 10:19:13','2023-01-07 10:15:35',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:19:13',NULL),(9172,1,9102,'download_1_9102_9172.jpg','Image',1,'2023-01-07 10:17:12','2023-01-07 10:15:36',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:17:12',NULL),(9173,1,9102,'download_1_9102_9173.jpg','Image',1,'2023-01-07 10:17:18','2023-01-07 10:15:36',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:17:18',NULL),(9174,1,9102,'download_1_9102_9174.jpg','Image',1,'2023-01-07 10:24:34','2023-01-07 10:15:36',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:24:34',NULL),(9175,1,9102,'download_1_9102_9175.jpg','Image',1,'2023-01-07 10:24:39','2023-01-07 10:17:01',NULL,NULL,NULL,NULL,NULL,'2023-01-07 10:24:39',NULL),(9176,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:19:22','2023-01-07 10:19:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9177,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:19:38','2023-01-07 10:19:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9178,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:20:44','2023-01-07 10:20:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9179,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:22:22','2023-01-07 10:22:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9180,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:24:47','2023-01-07 10:24:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9181,1,9102,'download_1_9102_9181.jpg','Image',0,'2023-01-07 10:27:01','2023-01-07 10:27:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9182,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:27:16','2023-01-07 10:27:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9183,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:28:26','2023-01-07 10:28:26',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9184,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:28:56','2023-01-07 10:28:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9185,1,9102,'download_1_9102_9185.jpg','Image',0,'2023-01-07 10:30:06','2023-01-07 10:30:06',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9186,1,9102,'download_1_9102_9186.jpg','Image',0,'2023-01-07 10:30:08','2023-01-07 10:30:08',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9187,1,9102,'download_1_9102_9187.jpg','Image',0,'2023-01-07 10:32:08','2023-01-07 10:32:08',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9188,1,9102,'bathroom-spa-deluxe-room-or-spa-suite.jpg','Image',0,'2023-01-07 10:32:18','2023-01-07 10:32:18',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9189,1,9102,'bathroom-spa-deluxe-room-or-spa-suite_1_9102_9189.jpg','Image',0,'2023-01-07 10:40:01','2023-01-07 10:40:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_property`
--

DROP TABLE IF EXISTS `tbl_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_property` (
  `pk_ppid` int(11) NOT NULL AUTO_INCREMENT,
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
  `triggered_on` datetime DEFAULT NULL,
  PRIMARY KEY (`pk_ppid`),
  KEY `reg_fk_idx` (`fk_usid`),
  KEY `propertytypefk_idx` (`fk_ptid`),
  KEY `statusfk_idx` (`pp_status`),
  CONSTRAINT `propertytypefk` FOREIGN KEY (`fk_ptid`) REFERENCES `tbl_property_type` (`pk_ptid`),
  CONSTRAINT `reg_fk` FOREIGN KEY (`fk_usid`) REFERENCES `tbl_registration` (`pk_rgid`),
  CONSTRAINT `statusfk` FOREIGN KEY (`pp_status`) REFERENCES `tbl_status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9109 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_property`
--

LOCK TABLES `tbl_property` WRITE;
/*!40000 ALTER TABLE `tbl_property` DISABLE KEYS */;
INSERT INTO `tbl_property` VALUES (9102,1,1,'400000','1','B','abc','abc','landmark','kolhapur','maharastra','state','pincide','owner','456574567',1,'are443565456545',NULL,'test_deposite','7898',1,'2022-12-29 11:49:17','2022-12-29 11:49:17',' ',' ',' ',' ',' ',1,'1970-01-01 00:00:01','2022-12-29 11:49:17'),(9103,2,1,'70000','5','d ward','mith','hizvde rank',NULL,'kolhapur','maharastra','Maharashtra','416012','antapurkar','788888888',1,NULL,NULL,NULL,NULL,0,'2022-02-02 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9104,2,1,'70000','8','h ward','kolha','oyrfh rank',NULL,'kolhapur','maharastra','Maharashtra','416012','fhj','788888888',1,NULL,NULL,NULL,NULL,0,'1970-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9105,1,1,'100000','1','A','abc','abc','landmark','citykolhapur','maharastra','state','124545','owner','5214555555',2,'hhh',NULL,'test_deposite','7898',0,'1970-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(9106,2,2,'60000','6','C','vilhar','nana patil',NULL,'kolhapur','maharashtra','maharastra',NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,0,'1970-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9107,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'658965','harsh','8978954789',1,NULL,NULL,NULL,NULL,0,'2023-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9108,1,1,'50000','1','B','abc','abc','landmark','kolhapur','maharastra','state','pincide','owner','q2wer',8,NULL,NULL,'test_deposite','7898',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_property_type`
--

DROP TABLE IF EXISTS `tbl_property_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_property_type` (
  `pk_ptid` int(11) NOT NULL AUTO_INCREMENT,
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
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pk_ptid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_property_type`
--

LOCK TABLES `tbl_property_type` WRITE;
/*!40000 ALTER TABLE `tbl_property_type` DISABLE KEYS */;
INSERT INTO `tbl_property_type` VALUES (1,'House',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'banglo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Rent',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Row Banglo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'flat',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_property_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_registration`
--

DROP TABLE IF EXISTS `tbl_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_registration` (
  `pk_rgid` int(11) NOT NULL AUTO_INCREMENT,
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
  `rg_triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pk_rgid`),
  KEY `sf_fk_idx` (`fk_sfid`),
  CONSTRAINT `sf_fk` FOREIGN KEY (`fk_sfid`) REFERENCES `tbl_staff` (`pk_sfid`)
) ENGINE=InnoDB AUTO_INCREMENT=9114 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_registration`
--

LOCK TABLES `tbl_registration` WRITE;
/*!40000 ALTER TABLE `tbl_registration` DISABLE KEYS */;
INSERT INTO `tbl_registration` VALUES (1,1,'kk','kk','kk','kk','kk','dc468c70fb574ebd07287b38d0d0676d','Y','N','N','N',1,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,2,'kalyni','kulkarni','kalyni@gmail.com','7666666666','kalmba','shankar13','N','Y','N','N',1,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,3,'harsh','kulkarni','harsh@gmail.com','945454545','kalmba','shankar13','N','Y','Y','N',NULL,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,4,'sharmili','mulani','sharu@gmail.com','9856985698','kalmba','shankar13','N','N','Y','N',NULL,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,5,'dhanu',NULL,'dhanu@gmail.com','97845454545','kalmba','shankar13','N','N','Y','N',NULL,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9102,1,'gh','gh','gh','gh','hft','gf','h','gv','hgv','6',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9103,1,'gh','gh','gh','gh','hft','gf',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9104,3,'mrunal','kulkarni','manu@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9105,1,'dfg','kk','kk@Gmail.com','5124547854','dfxgchvj','12',NULL,'Y','Y',NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9106,1,'kk','kk','k','k','k','k',NULL,'','',NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9107,1,'k','k','k','k','k','k',NULL,'SE','BU',NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9108,1,'ok','ok','ok','ok','ok','ok',NULL,'Y','Y',NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9109,1,'shuti','hdch','bzcjnb','mncb ','NZBX ','BBB',NULL,'Y','Y',NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9110,1,'l','l','l','l','l','l',NULL,'Y','Y',NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9111,1,'q','','q','q','q','q',NULL,'','',NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9112,1,'q',NULL,'q','q','q','q',NULL,NULL,NULL,NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9113,1,'',NULL,'','','','',NULL,NULL,NULL,NULL,0,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_registration_temp`
--

DROP TABLE IF EXISTS `tbl_registration_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_registration_temp`
--

LOCK TABLES `tbl_registration_temp` WRITE;
/*!40000 ALTER TABLE `tbl_registration_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_registration_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_staff`
--

DROP TABLE IF EXISTS `tbl_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_staff` (
  `pk_sfid` int(11) NOT NULL AUTO_INCREMENT,
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
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pk_sfid`)
) ENGINE=InnoDB AUTO_INCREMENT=9112 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_staff`
--

LOCK TABLES `tbl_staff` WRITE;
/*!40000 ALTER TABLE `tbl_staff` DISABLE KEYS */;
INSERT INTO `tbl_staff` VALUES (1,'q  ','q','090909090','Active',NULL,'2022-11-03 20:23:25','2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(2,'q  ','q','090909090','Active',NULL,'2022-11-03 20:23:25','2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(3,'q  ','q','090909090','Active',NULL,'2022-11-03 20:23:25','2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(4,'q  ','q','090909090','Active',NULL,'2022-11-03 20:23:25','2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(5,'q  ','q','090909090','Active',NULL,'2022-11-03 20:23:25','2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(9102,'q  ','q','090909090','Active',NULL,NULL,'2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(9103,'q  ','q','090909090','Active',NULL,NULL,'2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(9104,'q  ','q','090909090','Active',NULL,NULL,'2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(9105,'q  ','q','090909090','Active',NULL,NULL,'2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(9106,'q  ','q','090909090','Active',NULL,NULL,'2022-12-27 20:45:15',NULL,NULL,NULL,NULL,NULL,NULL),(9107,'harsh r kukjaenu','q','090909090','Active',0,NULL,'2022-12-28 13:13:27',NULL,NULL,NULL,NULL,'2022-12-28 13:13:27',NULL),(9108,'q  ','q','090909090','Active',0,NULL,'2022-12-28 13:13:30',NULL,NULL,NULL,NULL,'2022-12-28 13:13:30',NULL),(9109,'ram','q','090909090','Active',0,NULL,'2022-12-28 13:13:32',NULL,NULL,NULL,NULL,'2022-12-28 13:13:32',NULL),(9110,'q  tsr','qramuaa','090909090','Active',0,NULL,'2022-12-28 13:13:34',NULL,NULL,NULL,NULL,'2022-12-28 13:13:34',NULL),(9111,'q  dfdffdffsfsfs','qdfd','123456789','Active',0,NULL,'2022-12-28 13:13:38',NULL,NULL,NULL,NULL,'2022-12-28 13:13:38',NULL);
/*!40000 ALTER TABLE `tbl_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `deleted_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `triggered_on` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_status`
--

LOCK TABLES `tbl_status` WRITE;
/*!40000 ALTER TABLE `tbl_status` DISABLE KEYS */;
INSERT INTO `tbl_status` VALUES (1,'CR',NULL,NULL,0,NULL,NULL),(2,'AC',NULL,NULL,0,NULL,NULL),(3,'DT',NULL,NULL,0,NULL,NULL),(4,'RJ',NULL,NULL,0,NULL,NULL),(5,'SO',NULL,NULL,0,NULL,NULL),(6,'BR',NULL,NULL,0,NULL,NULL),(7,'DN',NULL,NULL,0,NULL,NULL),(8,'RE',NULL,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `tbl_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'test'
--

--
-- Dumping routines for database 'test'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-08 20:23:06
