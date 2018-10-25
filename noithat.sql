-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: noithat
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.22-MariaDB

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `shotName` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shotDetail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgThumbnail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longName` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longDetail` text COLLATE utf8_unicode_ci,
  `ishow` int(10) DEFAULT NULL,
  `ishome` int(10) DEFAULT NULL,
  `category` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'1'),(2,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'1'),(3,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'6'),(4,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'6'),(6,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'6'),(7,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'6'),(8,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'7'),(9,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'7'),(10,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'7'),(11,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'8'),(12,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'9'),(13,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'6'),(14,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'0'),(15,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'0'),(16,'Tư vấn chọn bàn ghế văn phòng','Tư vấn chọn bàn ghế văn phòng','http://sv1.upsieutoc.com/2018/04/01/blog1.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'0');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `introduce`
--

DROP TABLE IF EXISTS `introduce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `introduce` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `shotName` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shotDetail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgThumbnail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longName` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longDetail` text COLLATE utf8_unicode_ci,
  `ishow` int(10) DEFAULT NULL,
  `ishome` int(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `introduce`
--

LOCK TABLES `introduce` WRITE;
/*!40000 ALTER TABLE `introduce` DISABLE KEYS */;
INSERT INTO `introduce` VALUES (1,'Giới thiệu về chúng tôi','Cty TNHH TƯỜNG GIA PHÁT in trên mọi chất liệu','','Giới thiệu về chúng tôi','Cty TNHH TƯỜNG GIA PHÁT Nội dung đang cập nhật',1,NULL);
/*!40000 ALTER TABLE `introduce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `shotName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `shotDetail` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgThumbnail` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `longName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `longDetail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ishow` int(10) DEFAULT NULL,
  `ishome` int(10) DEFAULT NULL,
  `category` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `orPrice` int(25) DEFAULT NULL,
  `salePrice` int(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (6,'werwer','werrew','C:/xampp/htdocs/noithat/public/imgs/products/28238225_2033320166915637_7769057199889812877_o.jpg','werwer','<p>ghfgh</p>\r\n',1,1,'101',123,1412);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text,
  `Description` text,
  `CreateDate` date DEFAULT NULL,
  `LastModified` date DEFAULT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `LinkForSEO` text,
  `Price` decimal(10,0) DEFAULT NULL,
  `IsDisplay` tinyint(1) DEFAULT '1',
  `IsTopMenu` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-07 10:18:44
