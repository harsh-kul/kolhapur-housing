CREATE DATABASE  IF NOT EXISTS `housingkolhapur` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `housingkolhapur`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: housingkolhapur
-- ------------------------------------------------------
-- Server version	5.7.7-rc-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_admin_request` (
  `pp_req_id` int(11) NOT NULL AUTO_INCREMENT,
  `req_regi_id` int(11) DEFAULT NULL,
  `req_pp_id` int(11) DEFAULT NULL,
  `reg_status_id` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `req_ppowner_id` int(11) DEFAULT NULL,
  `req_remark` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `req_col1` int(11) DEFAULT NULL,
  `req_col2` int(11) DEFAULT NULL,
  `req_col3` int(11) DEFAULT NULL,
  `req_col4` int(11) DEFAULT NULL,
  `req_col5` int(11) DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `triggered_on` datetime DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_config_table` (
  `pk_conid` int(11) NOT NULL AUTO_INCREMENT,
  `con_key` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_value` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT '0',
  `deleted_on` datetime DEFAULT NULL,
  `triggerd_on` datetime DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
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
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `triggerd_on` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `lr_col1` varchar(500) DEFAULT NULL,
  `lr_col2` varchar(500) DEFAULT NULL,
  `lr_col3` varchar(500) DEFAULT NULL,
  `lr_col4` varchar(500) DEFAULT NULL,
  `lr_col5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`lr_id`),
  KEY `loneTypeFK` (`lr_lone_type_id`),
  CONSTRAINT `loneTypeFK` FOREIGN KEY (`lr_lone_type_id`) REFERENCES `tbl_lone_type` (`lt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_lone_request`
--

LOCK TABLES `tbl_lone_request` WRITE;
/*!40000 ALTER TABLE `tbl_lone_request` DISABLE KEYS */;
INSERT INTO `tbl_lone_request` VALUES (2,NULL,NULL,'harsh','kulkarni','hk@gmail.com','9856456555','Indian','kolhapur','Car lone','2000000',NULL,24,7890988,'Yes',200000,2000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,'mruanl','kulkarni','mk@gmail.com','9856456555','Indian','kolhapur','Home lone','5000000',NULL,24,7890988,'Yes',200000,10000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,'sharutika','kumbhar','sk@gmail.com','8564578954','Indian','kolhapur','Flat lone','7000000',NULL,24,7890988,'Yes',200000,15000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,'sharmili','mulani','sm@gmail.com','8458754475','Indian','kolhapur','Home lone','8000000',NULL,24,7890988,'Yes',200000,2000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,'shivani','nikam','sn@gmail.com','8888888888','Indian','kolhapur','Education lone','5000000',NULL,24,7890988,'Yes',200000,25000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,'aishwarya','patil','sp@gmail.com','9999999999','Indian','kolhapur','Car lone','9000000',NULL,24,7890988,'Yes',200000,26000,1,NULL,NULL,'2022-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_lone_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_lone_type`
--

DROP TABLE IF EXISTS `tbl_lone_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_lone_type` (
  `lt_id` int(11) NOT NULL AUTO_INCREMENT,
  `lt_name` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_on` datetime DEFAULT NULL,
  `triggered_on` datetime DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_media` (
  `pk_mdid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_sfid` int(11) DEFAULT NULL,
  `fk_ppid` int(11) DEFAULT NULL,
  `md_media_url` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_media_type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_is_deleted` tinyint(1) DEFAULT '0',
  `md_updated_at` datetime DEFAULT NULL,
  `md_created_at` datetime DEFAULT NULL,
  `md_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `triggered_on` datetime DEFAULT NULL,
  PRIMARY KEY (`pk_mdid`),
  KEY `regfkid_idx` (`fk_sfid`),
  KEY `proprtyfkid_idx` (`fk_ppid`),
  CONSTRAINT `proprtyfkid` FOREIGN KEY (`fk_ppid`) REFERENCES `tbl_property` (`pk_ppid`),
  CONSTRAINT `regfkid` FOREIGN KEY (`fk_sfid`) REFERENCES `tbl_registration` (`pk_rgid`)
) ENGINE=InnoDB AUTO_INCREMENT=9105 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_media`
--

LOCK TABLES `tbl_media` WRITE;
/*!40000 ALTER TABLE `tbl_media` DISABLE KEYS */;
INSERT INTO `tbl_media` VALUES (9102,2,9103,'add budget.png','image',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9103,2,9103,'add budget.png','image',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9104,2,9104,'add budget.png','image',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_property`
--

DROP TABLE IF EXISTS `tbl_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9108 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_property`
--

LOCK TABLES `tbl_property` WRITE;
/*!40000 ALTER TABLE `tbl_property` DISABLE KEYS */;
INSERT INTO `tbl_property` VALUES (9102,1,1,'50000','1','B','abc','abc','landmark','kolhapur','maharastra','state','pincide','owner','5214555555',1,'hhh',NULL,'test_deposite','7898',0,'2022-02-02 00:00:01','1970-01-01 00:00:01',' ',' ',' ',' ',' ',1,'1970-01-01 00:00:01','1970-01-01 00:00:01'),(9103,2,1,'70000','5','d ward','mith','hizvde rank',NULL,'kolhapur','maharastra','Maharashtra','416012','antapurkar','788888888',1,NULL,NULL,NULL,NULL,0,'2022-02-02 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9104,2,1,'70000','8','h ward','kolha','oyrfh rank',NULL,'kolhapur','maharastra','Maharashtra','416012','fhj','788888888',1,NULL,NULL,NULL,NULL,0,'1970-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9105,1,1,'100000','1','A','abc','abc','landmark','citykolhapur','maharastra','state','124545','owner','5214555555',1,'hhh',NULL,'test_deposite','7898',0,'1970-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(9106,2,2,'60000','6','C','vilhar','nana patil',NULL,'kolhapur','maharashtra','maharastra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'1970-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9107,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'658965','harsh','8978954789',1,NULL,NULL,NULL,NULL,0,'2023-01-01 00:00:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_property_type`
--

DROP TABLE IF EXISTS `tbl_property_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_property_type` (
  `pk_ptid` int(11) NOT NULL AUTO_INCREMENT,
  `pt_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_is_deleted` tinyint(1) DEFAULT '0',
  `pt_created_at` datetime DEFAULT NULL,
  `pt_updated_at` datetime DEFAULT NULL,
  `pt_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pt_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `triggered_on` datetime DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
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
  `rg_created_at` datetime DEFAULT NULL,
  `rg_updated_at` datetime DEFAULT NULL,
  `rg_status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_deleted_on` date DEFAULT NULL,
  `rg_triggered_on` date DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
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
  `rg_created_at` datetime DEFAULT NULL,
  `rg_updated_at` datetime DEFAULT NULL,
  `rg_status` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col1` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col2` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col3` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col4` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_col5` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_deleted_on` date DEFAULT NULL,
  `rg_triggered_on` date DEFAULT NULL
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_staff` (
  `pk_sfid` int(11) NOT NULL AUTO_INCREMENT,
  `sf_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_is_deleted` tinyint(1) DEFAULT '0',
  `sf_created_at` datetime DEFAULT NULL,
  `sf_updated_at` datetime DEFAULT NULL,
  `sf_col1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_col2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_col3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sf_col4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_on` datetime DEFAULT NULL,
  `triggered_on` datetime DEFAULT NULL,
  PRIMARY KEY (`pk_sfid`)
) ENGINE=InnoDB AUTO_INCREMENT=9112 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_staff`
--

LOCK TABLES `tbl_staff` WRITE;
/*!40000 ALTER TABLE `tbl_staff` DISABLE KEYS */;
INSERT INTO `tbl_staff` VALUES (1,'mrunal kulkarni','manu@gmail.com','9874587458','Active',NULL,'2022-11-03 20:23:25','2022-11-03 20:23:25',NULL,NULL,NULL,NULL,NULL,NULL),(2,'kalyani kulkarni','kalyani@gmail.com','9874587458','Active',NULL,'2022-11-03 20:23:25','2022-11-03 20:23:25',NULL,NULL,NULL,NULL,NULL,NULL),(3,'harsh kulkarni','harsh@gmail.com','9874587458','Active',NULL,'2022-11-03 20:23:25','2022-11-03 20:23:25',NULL,NULL,NULL,NULL,NULL,NULL),(4,'sharmili mulani','sharu@gmail.com','9874587458','Active',NULL,'2022-11-03 20:23:25','2022-11-03 20:23:25',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Dhanu','dhanu@gmail.com','9874587458','Active',NULL,'2022-11-03 20:23:25','2022-11-03 20:23:25',NULL,NULL,NULL,NULL,NULL,NULL),(9102,'dfg  kk','kk@Gmail.com','5124547854','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9103,'dfg  kk','kk@Gmail.com','5124547854','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9104,'kk  kk','k','k','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9105,'k  k','k','k','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9106,'ok  ok','ok','ok','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9107,'shuti  hdch','bzcjnb','mncb ','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9108,'l  l','l','l','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9109,'q  ','q','q','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9110,'q','q','q','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9111,'','','','Active',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `deleted_on` datetime DEFAULT NULL,
  `triggered_on` datetime DEFAULT NULL,
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
-- Dumping events for database 'housingkolhapur'
--

--
-- Dumping routines for database 'housingkolhapur'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-09 17:42:47
