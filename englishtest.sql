-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: toeictest
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
  `imgsmallthum` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Federer cách ngôi số một thế giới một trận thắng','Pha sút phạt thành bàn đầy khôn ngoan của Quang Hải góp phần giúp Hà Nội thắng Khánh Hòa 4-0 ở vòng 11 V-League tại Hàng Đẫy','https://aazztech.com/demos/themes/html/rida/rida/images/blog1.jpg','Federer cách ngôi số một thế giới một trận thắng','<p>Nội dung đang cập nhật 3</p>\r\n',1,1,'1','https://cdn.images.express.co.uk/img/dynamic/galleries/64x64/357425.jpg'),(2,'Federer tái xuất ở Stuttgart Mở rộng, muốn chiếm đỉnh ATP','Pha sút phạt thành bàn đầy khôn ngoan của Quang Hải góp phần giúp Hà Nội thắng Khánh Hòa 4-0 ở ','https://aazztech.com/demos/themes/html/rida/rida/images/blog2.jpg','Federer tái xuất ở Stuttgart Mở rộng, muốn chiếm đỉnh ATP','Nội dung đang cập nhật',1,1,'1','https://cdn.images.express.co.uk/img/dynamic/galleries/64x64/357425.jpg'),(3,'Nadal: ‘Tôi sợ hãi khi chuột rút trong set ba trận chung kết’','Pha sút phạt thành bàn đầy khôn ngoan của Quang Hải góp phần giúp Hà Nội thắng Khánh Hòa 4-0 ở vòng 11 V-League','https://aazztech.com/demos/themes/html/rida/rida/images/blog3.jpg','Nadal: ‘Tôi sợ hãi khi chuột rút trong set ba trận chung kết’','Nội dung đang cập nhật',1,1,'6','https://cdn.images.express.co.uk/img/dynamic/galleries/64x64/357425.jpg'),(4,'Hà Nội đại thắng Quảng Ninh, bất bại sau lượt đi V-League','Pha sút phạt thành bàn đầy khôn ngoan của Quang Hải góp phần giúp Hà Nội thắng Khánh Hòa 4-0 ở vòng 11 V-League tại Hàng Đẫy','https://aazztech.com/demos/themes/html/rida/rida/images/blog4.jpg','Hà Nội đại thắng Quảng Ninh, bất bại sau lượt đi V-League','Nội dung đang cập nhật',1,1,'6','https://cdn.images.express.co.uk/img/dynamic/galleries/64x64/357425.jpg'),(6,'Nội binh rực sáng, Hà Nội đạt chuỗi 11 trận bất bại','Pha sút phạt thành bàn đầy khôn ngoan của Quang Hải góp phần giúp Hà Nội thắng Khánh Hòa 4-0 ở vòng ','https://aazztech.com/demos/themes/html/rida/rida/images/blog5.jpg','Nội binh rực sáng, Hà Nội đạt chuỗi 11 trận bất bại','Nội dung đang cập nhật',1,1,'6','https://cdn.images.express.co.uk/img/dynamic/galleries/64x64/357425.jpg'),(7,'Tư vấn chọn bàn ghế văn phòng','Pha sút phạt thành bàn đầy khôn ngoan của Quang Hải góp phần giúp Hà Nội thắng Khánh Hòa','https://aazztech.com/demos/themes/html/rida/rida/images/blog6.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'6','https://cdn.images.express.co.uk/img/dynamic/galleries/64x64/357425.jpg'),(9,'Tư vấn chọn bàn ghế văn phòng','Pha sút phạt thành bàn đầy khôn ngoan của Quang Hải góp phần giúp Hà Nội thắng Khánh Hòa 4-0 ở vòng 11 V-League','https://aazztech.com/demos/themes/html/rida/rida/images/blog9.jpg','Tư vấn chọn bàn ghế văn phòng','Nội dung đang cập nhật',1,1,'7','https://cdn.images.express.co.uk/img/dynamic/galleries/64x64/357425.jpg'),(10,'sasasa','assasa',NULL,'assasa','<p>(MA)&nbsp;&nbsp; &nbsp;Questions 41 - 43 refer to the following conversation.<br />\r\n(WA)&nbsp;&nbsp; &nbsp;Hi, before I check in, I have a quick question. I&rsquo;m speaking at a conference here in town, and I need to get some emergency dry cleaning and ironing done on a blouse. Could you do that here at that hotel?<br />\r\n(MA)&nbsp;&nbsp; &nbsp;We sure can. That&rsquo;s all done on site. Today&rsquo;s Sunday, so if you give us the clothes this evening, they&rsquo;ll be ready by noon tomorrow.<br />\r\n(WA)&nbsp;&nbsp; &nbsp;Oh, that&rsquo;s perfect. The conference is Tuesday, so I&rsquo;ll have a day to work with. Do I just leave the clothing with the housekeeping staff?<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Yes, there should be a clear plastic bag beside the luggage rack in your room. But it may be missing. So, before I process your check-in on the computer, let me grab a bag for you from the coat room. One moment - I&rsquo;ll be right back.</p>\r\n\r\n<p>41.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What service is the woman asking about?<br />\r\n42.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When most likely will the woman give a speech?<br />\r\n43.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What will the man probably do next?</p>\r\n\r\n<p>&nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 44 - 46 refer to the following conversation.<br />\r\n(WB)&nbsp;&nbsp; &nbsp;Hi, Terrance. Well, it looks like we&rsquo;ll have to postpone our Wednesday department meeting on Wednesday. Five or six members of our staff will be touring the new computer facility all afternoon that day.&nbsp;<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Oh, right. I heard they&rsquo;ll have a data management forum there. On Thursday, I&rsquo;m busy all morning and afternoon. Why don&rsquo;t we set the meeting for Friday?<br />\r\n(WB)&nbsp;&nbsp; &nbsp;That&rsquo;ll work. I have a report to do in the afternoon, so would 10 A.M. work?<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Ten on Friday is perfect. I&rsquo;ll send a group e-mail to everyone once I&rsquo;ve booked the meeting room. Looks like a busy afternoon for me, so I think I&rsquo;ll head out and grab some lunch in a second.&nbsp;</p>\r\n\r\n<p>44.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why does the woman say the meeting should be postponed?<br />\r\n45.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When will the meeting most likely be held?<br />\r\n46.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What will the man probably do next?</p>\r\n\r\n<p><br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 47 - 49 refer to the following conversation.<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Hi, I&rsquo;m looking for a laptop bag for an extended business trip to India. Once there, I&rsquo;ll be traveling around to various hotels and universities trying to sell our firm&rsquo;s software packages. I need a bag that&rsquo;s very sturdy.&nbsp;<br />\r\n(WB)&nbsp;&nbsp; &nbsp;Well, you might want to try this black PC10 bag. It&rsquo;s a hard-bag, so it&rsquo;s a little heavy and not really stylish, but it&rsquo;s durable and a good value at just $34 on sale.&nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;It looks very tough. I like it, but it&rsquo;s not quite big enough. I have a larger laptop, so I need a 20 inch bag.&nbsp;<br />\r\n(WB)&nbsp;&nbsp; &nbsp;Oh, I&rsquo;m afraid we only have the PC10 in our regular stores. But I can check our online inventory for a 20-inch hard bag and have it shipped here within 24 hours. One moment while I bring up the computer.</p>\r\n\r\n<p>47.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why is the man traveling to India?<br />\r\n48.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man say about the bag?<br />\r\n49.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the woman offer to do?</p>\r\n\r\n<p><br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 50 - 52 refer to the following conversation.<br />\r\n(MB)&nbsp;&nbsp; &nbsp;McCleary Associates, this is Carl McCleary speaking. How may I help you?<br />\r\n(WA)&nbsp;&nbsp; &nbsp;Hi, this is Kate from Stone Dental Center. You had tried to get a 5 or 5:30 appointment with us for this Friday and we were booked, but now one patient just canceled her visit. Would you be interested in coming in at 5:30? &nbsp;<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Sure, that would be great. I&rsquo;m a new patient, so do I need to arrive early or anything?&nbsp;<br />\r\n(WA)&nbsp;&nbsp; &nbsp;No, just come in at 5:30. We&rsquo;re on the 6th floor of the Stone Complex, and there&rsquo;s free parking on both sides of the building. Please bring an ID with a picture on it for registration. You&rsquo;re all set, and we&rsquo;ll see you Friday.</p>\r\n\r\n<p>50.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why most likely is the woman calling?<br />\r\n51.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;At what time Friday will the man most likely visit the Stone Complex?<br />\r\n52.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the woman ask the man to do?</p>\r\n\r\n<p><br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 53 - 55 refer to the following conversation.<br />\r\n(WA)&nbsp;&nbsp; &nbsp;Hi, Greg. Well, today&rsquo;s my first day at work at Access Publishing, and it looks like I&rsquo;m going to be late. I left my house early to be sure not to miss the train, but now the train is running 30 minutes late.&nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Oh, hi, Susan. They just announced that the delays are from the work crews out clearing debris from the tracks, but the train should arrive soon. With all this wind and rain, there are still lots of branches falling down.&nbsp;<br />\r\n(WA)&nbsp;&nbsp; &nbsp;I see. Well, I&rsquo;m just glad the electricity didn&rsquo;t go out.&nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;I&rsquo;ll say. You know those redesigned townhomes in the financial district? I&rsquo;m showing one to a client this morning, and I have to print out the online brochure from our realty office as soon as I arrive.&nbsp;</p>\r\n\r\n<p>53.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why is the woman concerned?<br />\r\n54.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What is causing the problem?<br />\r\n55.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Where does the man most likely work?</p>\r\n\r\n<p><br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 56 - 58 refer to the following conversation.<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Hi, Olivia. Do you know where I can find more of those thick file folders? Some of my colleagues down in the accounting area need them for our tax paperwork.&nbsp;<br />\r\n(WB)&nbsp;&nbsp; &nbsp;Well, the operations team took the last folders here. But Barb in the sales department may have a few, or you might want to look in the supply room by Human Resources. I could also order some from Max&rsquo;s Supply today.&nbsp;<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Oh, it&rsquo;s no rush. The tax forms won&rsquo;t arrive until Monday or Tuesday anyway. Tomorrow&rsquo;s Friday, so I&rsquo;ll just go to Max&rsquo;s Supply during lunch and get supplies with the company credit card. &nbsp;<br />\r\n(WB)&nbsp;&nbsp; &nbsp;That&rsquo;ll work. You can phone them and they&rsquo;ll set things aside for you if you give them the items&rsquo; catalogue numbers. In fact, why don&rsquo;t I make a list of supplies our department needs? Hold on, and I&rsquo;ll do that right away.</p>\r\n\r\n<p>56.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What department does the man most likely work in?<br />\r\n57.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When will the man probably go to Max&rsquo;s Supply?<br />\r\n58.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What will the woman probably do next?</p>\r\n\r\n<p><br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 59 - 61 refer to the following conversation.<br />\r\n(WB)&nbsp;&nbsp; &nbsp;Hi, Mr. Foley? This is Debra from Ten-Tech Industries. I&rsquo;m calling to follow up on your purchase of our DTC-10 cloth cutting machine, and just want to make sure you&rsquo;re happy with its performance. &nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Oh, yes, we&rsquo;re very satisfied with it. Its digital technology has really helped us speed up production in our factory, as your salesperson said it would, and it&rsquo;s energy efficient as well.&nbsp;<br />\r\n(WB)&nbsp;&nbsp; &nbsp;That&rsquo;s great to hear. As you know, the DTC-10 is not the cheapest machine around, and it&rsquo;s not the only cloth cutter that uses computer technology, but we&rsquo;re proud of it being the fastest operating unit on the market.&nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Well, it helped us meet our production deadline for a new line of men&rsquo;s shirts we just introduced. We&rsquo;re packaging the clothes now, and they&rsquo;ll be shipped to stores next months. Thank you for all your service, and thanks for the call.&nbsp;</p>\r\n\r\n<p>59.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What is the main purpose of the woman&rsquo;s call?<br />\r\n60.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;According to the conversation, what is special about the DTC-10?<br />\r\n61.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man say will happen next month?&nbsp;</p>\r\n\r\n<p><br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 62 - 64 refer to the following conversation.<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Hi, Ellen. I looked at the Web site for the new Indian restaurant. There&rsquo;s no lunch buffet, but they do have some cheap dishes on the regular menu. It&rsquo;s a long walk to get there, but it&rsquo;s worth checking out. What do you think?&nbsp;<br />\r\n(WA)&nbsp;&nbsp; &nbsp;Oh, I&rsquo;m afraid I have to stay here at the office. I have to finish that report for the afternoon meeting.&nbsp;<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Well, you helped me design that brochure last month. Why don&rsquo;t I help you out with the report? I can do some of the copying, sorting, and stapling. I owe it to you.<br />\r\n(WA)&nbsp;&nbsp; &nbsp;I suppose we could go. My colleague who&rsquo;s been there says the service is good, but that it&rsquo;s a tiny space with just 20 tables. Don&rsquo;t be surprised if we have to wait outside in a line to get a table.&nbsp;</p>\r\n\r\n<p>62.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man indicate about the restaurant?<br />\r\n63.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man offer to do?<br />\r\n64.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the woman&rsquo;s colleague say about the restaurant?<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 65 - 67 refer to the following conversation.<br />\r\n(MA)&nbsp;&nbsp; &nbsp;Hi, Carla? This is Frank Renzi with the Weekly Times. One of my fellow reporters here just handed me a press release saying your company&rsquo;s delaying the launch of its new Vista motorcycle. Could you tell me more about that?<br />\r\n(WA)&nbsp;&nbsp; &nbsp;Hi. Yes, that&rsquo;s correct. The release of that model will be postponed for one month because of factory renovations that took place in January. However, it&rsquo;s a great bike, especially for beginning riders, and your staff can test it soon.&nbsp;<br />\r\n(MA)&nbsp;&nbsp; &nbsp;We&rsquo;d like to. We&rsquo;re especially interested in having Barry, our columnist, give it a road test before April&rsquo;s New City motorcycle festival. Is that possible?&nbsp;<br />\r\n(WA)&nbsp;&nbsp; &nbsp;lt sure is. We are inviting media representatives to test the Vista at our factory&rsquo;s track on February 28th, just three weeks before its official market launch on March 14th. I will e-mail you details about the media event later today, in fact. &nbsp;</p>\r\n\r\n<p>65.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Who most likely is the man?<br />\r\n66.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What kind of company does the woman probably work for?<br />\r\n67.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When will the Vista be released on the market?</p>\r\n\r\n<p><br />\r\n(MA)&nbsp;&nbsp; &nbsp;Questions 68 - 70 refer to the following conversation.<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Air-Co. Industries, this is Sam speaking. How may I help you?&nbsp;<br />\r\n(WB)&nbsp;&nbsp; &nbsp;Hi, Sam. It&rsquo;s Lisa from Chicago Relocation service. I&rsquo;m calling to tell you about an apartment that came up for rent. It&rsquo;s near public transportation and Hamlin Park, and it would be close to your new office.<br />\r\n(MB)&nbsp;&nbsp; &nbsp;Oh, hi, Lisa. Actually, I just found out that I&rsquo;ll have a company car in Chicago, so my preferences have changed. I can live farther from downtown. Now the key thing for me is finding any unit that rents for under $1,000 a month.&nbsp;<br />\r\n(WB)&nbsp;&nbsp; &nbsp;Well, that&rsquo;ll make the search even easier. I&rsquo;ll put that information into our office computer and then at around 2 this afternoon I&rsquo;ll e-mail you a list of available units for you to look at. We&rsquo;ll have no trouble finding a place for you.&nbsp;</p>\r\n\r\n<p>68.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why is the woman calling the man?<br />\r\n69.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man say is important to him?<br />\r\n70.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What most likely will happen in the afternoon ?&nbsp;<br />\r\n&nbsp;</p>\r\n',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cominfo`
--

DROP TABLE IF EXISTS `cominfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cominfo` (
  `comname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mobile1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8_unicode_ci,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortintro` text COLLATE utf8_unicode_ci,
  `address2` text COLLATE utf8_unicode_ci,
  `taxtcode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`comname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cominfo`
--

LOCK TABLES `cominfo` WRITE;
/*!40000 ALTER TABLE `cominfo` DISABLE KEYS */;
INSERT INTO `cominfo` VALUES ('CÔNG TY','0999888666','0999888666','0999888666','Dương','info@gmail.com','<p>Tempor incididunt ut dương</p>\r\n','364/45/22 D??ng Qu?ng Hàm','0123456');
/*!40000 ALTER TABLE `cominfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extra`
--

DROP TABLE IF EXISTS `extra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extra` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `link1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extra`
--

LOCK TABLES `extra` WRITE;
/*!40000 ALTER TABLE `extra` DISABLE KEYS */;
INSERT INTO `extra` VALUES (1,'1','2','3');
/*!40000 ALTER TABLE `extra` ENABLE KEYS */;
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
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `cusname` varchar(255) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `adress` text,
  `total` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'sfdsf',6,NULL,'sdfsdf','dsfd',0,NULL,1,NULL),(2,'sfdsf',6,'aaa','sdfsdf','dsfd',0,'as@fm.com',1,NULL),(3,'sfdsf',6,NULL,'sdfsdf','dsfd',0,NULL,1,NULL),(4,'sfdsf',6,NULL,'sdfsdf','dsfd',0,NULL,0,'etert'),(5,'sfdsf',6,NULL,'sdfsdf','dsfd',0,NULL,1,NULL),(6,'sfdsf',6,NULL,'sdfsdf','dsfd',0,NULL,0,NULL),(7,'sfdsf',6,NULL,'sdfsdf','dsfd',0,NULL,0,'sadsad asdsa asd ');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (6,'werwer','werrew','http://noithatvanphongbacninh.com/public/imgs/products/IMG_0476.JPG','werwer','<p>ghfgh sdfsdfsd sdf&nbsp;</p>\r\n\r\n<p>sdf</p>\r\n\r\n<p>sfd</p>\r\n',1,1,'801',123,1412),(7,'aasasa1','asddsa1','http://[::1]/kblog/public/imgs/products/682_img-0689-550x413.gif','asdsad1','<p>adsadsadsa1</p>\r\n',1,0,'101',0,0);
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

--
-- Table structure for table `toeicpart1`
--

DROP TABLE IF EXISTS `toeicpart1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toeicpart1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `mp3url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transcript` text COLLATE utf8_unicode_ci,
  `quest` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transimg` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ishow` int(5) DEFAULT NULL,
  `questID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookcode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toeicpart1`
--

LOCK TABLES `toeicpart1` WRITE;
/*!40000 ALTER TABLE `toeicpart1` DISABLE KEYS */;
INSERT INTO `toeicpart1` VALUES (1,'public/books/67937/54564/p1/54564p1.mp3','C','1. <br />\r\n(MA)	(A) She is repairing the printer.<br />\r\n	(B) She is storing some boxes.<br />\r\n	(C) She is working in a copy room. *<br />\r\n	(D) She is opening a cabinet door.<br />\r\n<br />\r\n2. <br />\r\n(WA)		(A) People are walking across the bridge. *<br />\r\n(B) People are using the handrails. <br />\r\n(C) People are enjoying a boat ride.<br />\r\n	(D) People are crossing the street.<br />\r\n<br />\r\n3. <br />\r\n(MB)		(A) The sign is hanging over the sidewalk.<br />\r\n(B) The address is above the entrance. *<br />\r\n	(C) There is a sign posted on the wall.<br />\r\n		(D) There is a security guard in front of the gate.<br />\r\n<br />\r\n4. <br />\r\n(WB)		(A) He is cleaning the kitchen.<br />\r\n	(B) He is weighing something. *<br />\r\n	(C) He is cutting some meat.<br />\r\n		(D) He is standing on a scale.<br />\r\n<br />\r\n5. <br />\r\n(MA)		(A) The couple is shaking hands.<br />\r\n	(B) The couple is wearing sunglasses.<br />\r\n	(C) The woman is holding some balloons.<br />\r\n		(D) The man is passing out some brochures. *<br />\r\n<br />\r\n6. <br />\r\n(WA)	(A) They are driving to the airport.<br />\r\n	(B) They are waiting for the taxi.<br />\r\n	(C) They are unloading the car. *<br />\r\n	(D) They are unpacking their bags.<br />\r\n <br />\r\n7. <br />\r\n(MB)	(A) The attendant is tagging the luggage. *<br />\r\n	(B) The traveler is carrying the bags.<br />\r\n	(C) One woman is tying her scarf.<br />\r\n	(D) One woman is reserving her flight.<br />\r\n<br />\r\n8. <br />\r\n(WB)	(A) The couple is walking along the sidewalk. <br />\r\n	(B) The man is surrounded by birds. *<br />\r\n	(C) The couple is sitting near the bench.<br />\r\n	(D) The birds are resting under the trees.<br />\r\n<br />\r\n9. <br />\r\n(MA)	(A) The men are reading a magazine.<br />\r\n	(B) The men are posting a note on the board.<br />\r\n	(C) One man is writing in a calendar.<br />\r\n	(D) One of the men is pointing at a map. *<br />\r\n<br />\r\n10. <br />\r\n(WA)	(A) The traffic is moving in both directions.<br />\r\n	(B) Flags line the side of the street. *<br />\r\n	(C) There are signs on the side of the building.<br />\r\n	(D) Some trees are blocking the street.','public/books/67937/54564/p1/54564_1.png','',NULL,1,'1','67937','54564'),(2,'','A','','public/books/67937/54564/p1/54564_2.png','',NULL,1,'2','67937','54564'),(3,'','B','','public/books/67937/54564/p1/54564_3.png','',NULL,1,'3','67937','54564'),(4,'','B','','public/books/67937/54564/p1/54564_4.png','',NULL,1,'4','67937','54564'),(5,'','D','','public/books/67937/54564/p1/54564_5.png','',NULL,1,'5','67937','54564'),(6,'','C','','public/books/67937/54564/p1/54564_6.png','',NULL,1,'6','67937','54564'),(7,'','A','','public/books/67937/54564/p1/54564_7.png','',NULL,1,'7','67937','54564'),(8,'','B','','public/books/67937/54564/p1/54564_8.png','',NULL,1,'8','67937','54564'),(9,'','D','','public/books/67937/54564/p1/54564_9.png','',NULL,1,'9','67937','54564'),(10,'','B','','public/books/67937/54564/p1/54564_10.png','',NULL,1,'10','67937','54564'),(21,'public/books/67937/26813/p1/26813p1.mp3','A','1* (A) They\'re sitting on a bench. <br />\r\n(B) They\'re lying on the grass. <br />\r\n(C) They\'re riding their bicycles. <br />\r\n(D) They\'re swimming in the water. <br />\r\n<br />\r\n2 (A) One of the men is putting on a tie. <br />\r\n(B) One of the men is standing at a counter. <br />\r\n(C) One of the men is setting a briefcase on the floor. <br />\r\n(D) One of the men is typing on a computer. <br />\r\n<br />\r\n3 (A) Customers are waiting to be seated. <br />\r\n(B) Cars are parked along the street. <br />\r\n(C) A restaurant worker is sweeping the sidewalk.<br />\r\n(D) Diners are sitting in an outdoor café. <br />\r\n<br />\r\n4 (A) The man is taking some paper out of a printer <br />\r\n(B) The man is putting a file in a drawer. <br />\r\n(C) The woman is signing her name. <br />\r\n(D) The people are reviewing a document. <br />\r\n<br />\r\n5 (A) A man is unloading some packages. <br />\r\n(B) A man is resting in a shopping mall. <br />\r\n(C) Boxes have been piled onto some carts. <br />\r\n(D) Items are being arranged in a store. <br />\r\n<br />\r\n6 (A) A sign is hanging above some artwork. <br />\r\n(B) Plants are arranged on a stairway. <br />\r\n(C) A round table is surrounded by chairs. <br />\r\n(D) An area rug has been rolled up. <br />\r\n<br />\r\n7 (A) A man is, placing a basket on a shelf.<br />\r\n(B) Labels have been attached to shelving units. <br />\r\n(C) A man is opening the door of a cabinet. <br />\r\n(D) Some newspapers have been piled on the floor. <br />\r\n<br />\r\n8* (A) Lampposts are standing in a row. <br />\r\n(B) A crowd of people has gathered on a beach. <br />\r\n(C) A garden has been planted on a rooftop. <br />\r\n(D) The roadway is full of vehicles. <br />\r\n<br />\r\n9 (A) An employee is organizing a shoe display. <br />\r\n(B) Merchandise is being put into a bag. <br />\r\n(C) Some footwear is being scanned by a cashier.<br />\r\n(D) A customer is trying on a pair of shoes. <br />\r\n<br />\r\n10 (A) Trees are growing under an archway. <br />\r\n(B) Passengers are waiting to board a train. <br />\r\n(C) A high wall runs alongside the train tracks. <br />\r\n(D) A train is about to go over a bridge. <br />\r\n','public/books/67937/26813/p1/26813_1.png','',NULL,1,'1','67937','26813'),(22,'','B','','public/books/67937/26813/p1/26813_2.png','',NULL,1,'2','67937','26813'),(23,'','D','','public/books/67937/26813/p1/26813_3.png','',NULL,1,'3','67937','26813'),(24,'','D','','public/books/67937/26813/p1/26813_4.png','',NULL,1,'4','67937','26813'),(25,'','C','','public/books/67937/26813/p1/26813_5.png','',NULL,1,'5','67937','26813'),(26,'','C','','public/books/67937/26813/p1/26813_6.png','',NULL,1,'6','67937','26813'),(27,'','B','','public/books/67937/26813/p1/26813_7.png','',NULL,1,'7','67937','26813'),(28,'','A','','public/books/67937/26813/p1/26813_8.png','',NULL,1,'8','67937','26813'),(29,'','D','','public/books/67937/26813/p1/26813_9.png','',NULL,1,'9','67937','26813'),(30,'','C','','public/books/67937/26813/p1/26813_10.png','',NULL,1,'10','67937','26813'),(31,'public/books/67937/51464/p1/51464p1.mp3','D','1 (A) He\'s writing a letter. <br />\r\n(B) He\'s reading a book. <br />\r\n(C) He\'s serving some food. <br />\r\n(D) He\'s holding a piece of paper. <br />\r\n<br />\r\n2 (A) A woman is arranging the shelves. <br />\r\n(B) A woman is standing at the board. <br />\r\n(C) A woman is watering a plant. <br />\r\n(D) A woman is washing a window. <br />\r\n<br />\r\n3 (A) He\'s looking at his watch.  <br />\r\n(B) He\'s talking on the phone. <br />\r\n(C) He\'s walking outside. <br />\r\n(0) He\'s opening a box. <br />\r\n<br />\r\n4 (A) She\'s tidying her room. <br />\r\n(B) She\'s brushing her teeth.<br />\r\n(C) She\'s sweeping the deck. <br />\r\n(D) She\'s scrubbing the pots. <br />\r\n<br />\r\n5 (A) The women are in a parking lot. <br />\r\n(B) The women are shopping for clothes. <br />\r\n(C) The women are in a supermarket. <br />\r\n(D) The women are paying for food. <br />\r\n<br />\r\n6 (A) They\'re resting in a waiting area. <br />\r\n(B) They\'re boarding an airplane. <br />\r\n(C) They\'re waiting in line. <br />\r\n(D) They\'re packing a suitcase. <br />\r\n<br />\r\n7 (A) A painting is hanging on the wall. <br />\r\n(B) Some people are eating a meal. <br />\r\n(C) The table is being cleared. <br />\r\n(D) A lamp is being turned off. <br />\r\n<br />\r\n8 (A) The woman is taking a picture. <br />\r\n(B) The woman is reading as she walks. <br />\r\n(C) The boy is holding the woman\'s hand. <br />\r\n(D) The boy is playing in the bushes. <br />\r\n<br />\r\n9 (A) The motorcycle has been parked. <br />\r\n(B) The motorcycle is being ridden. <br />\r\n(C) A tire has been removed from the motorcycle. <br />\r\n(D) The seat of the motorcycle is being repaired.<br />\r\n <br />\r\n10 (A) They\'re delivering a presentation.<br />\r\n(B) They\'re moving a piece of furniture. <br />\r\n(C) They\'re adjusting a pull-down screen. <br />\r\n(D) They\'re connecting a computer cable. <br />\r\n','public/books/67937/51464/p1/51464_1.png','',NULL,1,'1','67937','51464'),(32,'','B','','public/books/67937/51464/p1/51464_2.png','',NULL,1,'2','67937','51464'),(33,'','B','','public/books/67937/51464/p1/51464_3.png','',NULL,1,'3','67937','51464'),(34,'','C','','public/books/67937/51464/p1/51464_4.png','',NULL,1,'4','67937','51464'),(35,'','C','','public/books/67937/51464/p1/51464_5.png','',NULL,1,'5','67937','51464'),(36,'','A','','public/books/67937/51464/p1/51464_6.png','',NULL,1,'6','67937','51464'),(37,'','A','','public/books/67937/51464/p1/51464_7.png','',NULL,1,'7','67937','51464'),(38,'','B','','public/books/67937/51464/p1/51464_8.png','',NULL,1,'8','67937','51464'),(39,'','A','','public/books/67937/51464/p1/51464_9.png','',NULL,1,'9','67937','51464'),(40,'','B','','public/books/67937/51464/p1/51464_10.png','',NULL,1,'10','67937','51464');
/*!40000 ALTER TABLE `toeicpart1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toeicpart2`
--

DROP TABLE IF EXISTS `toeicpart2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toeicpart2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `mp3url` text COLLATE utf8_unicode_ci,
  `trueans1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans6` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans7` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans8` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans9` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans10` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans11` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans12` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans13` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans14` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans15` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans16` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans17` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans18` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans19` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans20` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans21` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans22` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans23` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans24` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans25` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans26` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans27` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans28` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans29` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans30` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transcript` text COLLATE utf8_unicode_ci,
  `transimg` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ishow` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookcode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toeicpart2`
--

LOCK TABLES `toeicpart2` WRITE;
/*!40000 ALTER TABLE `toeicpart2` DISABLE KEYS */;
INSERT INTO `toeicpart2` VALUES (3,'public/books/67937/54564/p2/54564p2.mp3','C','A','C','B','B','C','C','B','C','B','C','C','C','B','A','A','B','B','C','C','A','B','C','B','C','A','B','B','C','A','11. 	(MA)	When is Tom going to the bank?<br />\r\n	(WA)	(A) To deposit his paycheck.<br />\r\n		(B) The Madison Street branch.<br />\r\n		(C) Sometime after lunch.<br />\r\n<br />\r\n12. 	(MB)	Does the airport bus stop here?<br />\r\n	(WB)	(A) Oh, you can catch it on the next block.<br />\r\n		(B) The workshop is near the airport.<br />\r\n		(C) Because it’s very crowded.<br />\r\n<br />\r\n13. 	(MA)	Why did you e-mail the clients?<br />\r\n	(WB)	(A) Yes, they did. <br />\r\n		(B) It’s better if you fax it. <br />\r\n		(C) To send them the revised proposal.<br />\r\n<br />\r\n14. 	(MB)	Who usually orders office supplies?<br />\r\n	(WA)	(A) That’s a surprise.<br />\r\n		(B) Linda, I think. <br />\r\n		(C) They gave him a discount.<br />\r\n<br />\r\n15. 	(WA)	Is that your laptop on the desk?<br />\r\n	(MA)	(A) He sits over there.<br />\r\n		(B) No, it’s Ms. Cheng’s. <br />\r\n		(C) Mostly for its power.<br />\r\n<br />\r\n16. 	(WB)	How do I add paper to this copier?<br />\r\n	(MB)	(A) The promotion was in yesterday’s paper.<br />\r\n		(B) Oh, it makes coffee automatically.<br />\r\n		(C) Place it in the tray at the bottom.<br />\r\n<br />\r\n17. 	(WA)	Whose key card is that?<br />\r\n	(MB)	(A) Yes, they are.<br />\r\n		(B) Press the red key there.<br />\r\n		(C) Actually, it’s mine. Thanks.<br />\r\n<br />\r\n18. 	(WB)	Which workshop did you attend last week?<br />\r\n	(MA)	(A) Attendance was a bit low.<br />\r\n		(B) The one about Web Page design.<br />\r\n		(C) They attempted to register.<br />\r\n<br />\r\n19. 	(MA)	Did you hand in the research report?<br />\r\n	(WA)	(A) The handles are easy to use. <br />\r\n		(B) Let’s give them a big hand.<br />\r\n		(C) I’m just finishing it up now. <br />\r\n<br />\r\n20. 	(MB)	How long will the meeting last?<br />\r\n	(WB)	(A) Yes, we’ve met before.<br />\r\n		(B) Maybe for a couple of hours.<br />\r\n		(C) At least three meters long.<br />\r\n<br />\r\n21. 	(MA)	Could you tell me the way to the post office?<br />\r\n	(WB)	(A) We don’t normally weigh the mail here.<br />\r\n		(B) Yes, he has a new office.<br />\r\n		(C) Oh, it’s just around the corner. <br />\r\n<br />\r\n22. 	(MB)	I finished writing the marketing plan. <br />\r\n	(WA)	(A) I’ve never shopped there.<br />\r\n		(B) When do you plan to visit?<br />\r\n		(C) Great. What’s the next step?<br />\r\n<br />\r\n23. 	(WA)	What do you think is wrong with the printer?<br />\r\n	(MA)	(A) Mine is about 40 pages long.<br />\r\n		(B) Then try the service center.<br />\r\n		(C) It may have a loose connection. <br />\r\n<br />\r\n24. 	(WB)	It feels cold in this office, doesn’t it? <br />\r\n	(MB)	(A) His office is just down the hall. <br />\r\n		(B) I can turn up the heat if you want. <br />\r\n		(C) They have the oldest one.<br />\r\n<br />\r\n25. 	(WA)	Should we take the subway to the airport, or should we share a taxi instead?<br />\r\n	(MB)	(A) Let’s get a cab – it’s quicker.<br />\r\n		(B) No, Stan usually treats us to meals.<br />\r\n		(C) We got there two hours before departure time.<br />\r\n<br />\r\n26. 	(WB)	We should extend the deadline for job applications.<br />\r\n	(MA)	(A) How much extra time should we allow?<br />\r\n		(B) Oh, we use the hotline to contact them.<br />\r\n		(C) Congratulations on the new job.<br />\r\n<br />\r\n27. 	(MA)	Who is in charge of the billing department?<br />\r\n	(WA)	(A) On the 5th and 25th of every month.<br />\r\n		(B) I think Janice oversees that section now.<br />\r\n		(C) You can charge it on our store card.<br />\r\n<br />\r\n28. 	(MB)	When will the new security system be installed?<br />\r\n	(WB)	(A) Gary is my new assistant.<br />\r\n		(B) They’re working on it right now. <br />\r\n.		(C) No, that’s your user ID number.<br />\r\n<br />\r\n29. 	(MA)	Are the seminars being offered here or at headquarters?<br />\r\n	(WB)	(A) One of the speakers was late. <br />\r\n		(B) No, I’ve never been to the head office.<br />\r\n		(C) They’ll run them all in this building. <br />\r\n<br />\r\n30. 	(MB)	Do you have time to review these graphs and charts?<br />\r\n	(WA)	(A) The rooftop view is great.<br />\r\n		(B) Yes, she won the sales contest.<br />\r\n		(C) Sure, I can look them over.<br />\r\n<br />\r\n31. 	(WA)	We should take the earlier train home. <br />\r\n	(MA)	(A) OK. It’s an express, right?<br />\r\n		(B) I’m sorry they came in late. <br />\r\n		(C) It’ll be in Training Room C. <br />\r\n<br />\r\n32. 	(WB)	When will the staff lounge be redecorated? <br />\r\n	(MB)	(A) Johnson and Sons Construction Company.<br />\r\n		(B) That work starts next Monday.<br />\r\n		(C) Because it needs to be updated.<br />\r\n<br />\r\n33. 	(WA)	Would you mind if we switch seats?<br />\r\n	(MB)	(A) In the last row.<br />\r\n		(B) Press this switch here.<br />\r\n		(C) Not at all. We can trade. <br />\r\n<br />\r\n34. 	(MA)	Do you want to have the staff party indoors or outdoors?<br />\r\n	(WB)	(A) It’s two doors down and on the left.<br />\r\n		(B) Let’s have a picnic at Grand Park.<br />\r\n		(C) The staff met on the seventh floor.<br />\r\n<br />\r\n35. 	(MA)	You’re giving product demonstrations at the trade show, aren’t you?<br />\r\n	(WA)	(A) Yes, I guess the train is faster. <br />\r\n		(B) There’s a discount for early registration.<br />\r\n		(C) No, but Cathy’s sales team will be there. <br />\r\n<br />\r\n36. 	(MB)	Have we chosen a caterer for the fall banquet yet?<br />\r\n	(WB)	(A) We may have it at a restaurant this year.<br />\r\n		(B) Thank you for giving us such good service.<br />\r\n		(C) Kate left the company in the summer, I think. <br />\r\n<br />\r\n37. 	(MA)	How do you like the new carpet in the waiting room?<br />\r\n	(WB)	(A) I’m afraid I can’t wait any longer.<br />\r\n		(B) It’s a really nice shade, I think. <br />\r\n		(C) The other car is a compact model. <br />\r\n<br />\r\n38. 	(MB)	Don’t you think we need a new printer?<br />\r\n	(WA)	(A) I think it’ll be around 100 pages. <br />\r\n		(B) Oh, Troy is getting us one this week. <br />\r\n		(C) You can use it. I’m all finished.<br />\r\n<br />\r\n39. 	(MA)	Who usually updates our Web site? <br />\r\n	(WA)	(A) Every month, I think. <br />\r\n		(B) I don’t know that program.<br />\r\n		(C) Mary is in charge of that. <br />\r\n<br />\r\n40. 	(MB)	How did Sarah achieve such high sales figures last quarter?<br />\r\n	(WB)	(A) I heard she’s very motivated.<br />\r\n		(B) Sure, I’ll print those numbers right away.<br />\r\n		(C) They’ll offer bigger discounts next time.<br />\r\n','','1','67937','54564'),(5,'public/books/67937/26813/p2/26813p2.mp3','B','C','C','C','B','A','C','A','A','B','C','C','A','A','A','B','C','A','C','C','B','A','B','B','B','C','B','A','B','A','11 When are you planning to go on vacation?<br>(A) It\'s near a lake. * (B) In December (C) For two weeks. <br />\r\n12 What\'s the name of the medical clinic that you go to? <br />\r\n(A) To see Dr. Paulson. (B) It\'s a great job. (C) Norrell Health Center. <br />\r\n13 I just mei the new board members.<br>(A) No, it was quite interesting. (B) It\'s on the first floor. • (C) I met them, too. <br />\r\n14 Who\'s thal man speaking to Mr. Douglas?<br>(A) They haven\'t been waiting too long. (B) Usually at least twice a week. (C) He\'s a reporter for the local newspaper. <br />\r\n15 Excuse me, ‘•ehere is conference room<br>(A) Thanks, I\'ll be there soon. • (B) It\'s at the end of the hall. (C) That bookshelf has one. <br />\r\n16 Would you look over my research proposal before I submit it? *<br>(A) I\'d be happy to. (B) Try looking in the drawer. (C) You\'re welcome. <br />\r\n17 isn\'t it supposed to rain this afternoon?<br>(A) Roger was supposed to. (B) It\'s a new umbrella. (C) That\'s what I heard. <br />\r\n18 What time should I meet you in the lobby? *<br>(A) How about at noon? (B) The side door. (C) That\'s plenty of time. <br />\r\n19 that Malian restaurant on Kinney Road?<br>(A) Yes, I go there often. (B) I can\'t get there before six. (C) A very large menu. <br />\r\n20 are you traveling to Denver?<br>(A) Only for a few days. (B) To spend time with my relatives. (C) I\'m planning to drive there. <br />\r\n21 The qua:tarty report is going to be released tomorrow. <br />\r\n(A) To sign a lease. (B) Not since last month. (C) I\'ll be interested to see it. <br />\r\n22 Did Lena deposit the checks at the bank? <br />\r\n(A) Remember to get a receipt. (B) There\'s one near the post office. ,(C) Yes, she did it on her way home. <br />\r\n23 How much paper should I buy? ik<br>(A) Two boxes should be enough. (B) Your total comes to 25 dollars. (C) The comments were helpful. <br />\r\n24 Who\'ll be our sales director now that Ms. Wu\'s been promoted? *<br>(A) Mr. Hudson will. (B) It\'s currently on sale. (C) Congratulations—that\'s great news! <br />\r\n25 Can you play tennis this weekend, or are you too busy? *<br>(A) I\'d love to, but I don\'t have time. (B) I\'m pleased to be here. (C) The park has courts, though. <br />\r\n26 How oiler, do employees at your company have performance reviews?<br>(A) Did you enjoy the performance? * (B) We have them twice a year. (C) My manager\'s Ms. Aweel. <br />\r\n27 Could you distribute these brochures to all the staff? <br />\r\n(A) I\'m sure it\'s in here somewhere. (B) The head of the publicity department. • (C) Sure, I\'ll put them in their mailboxes. <br />\r\n28 There\'s only one key that unlocks this supply cabinet. <br />\r\n*<br>(A) I know—Janet has it. (B) Make sure to turn it off before you leave. (C) One of our new suppliers. <br />\r\n29 When are we interviewing the next ;el.-) candidate?<br>(A) As part of the hiring process. (B) Our top three choices. • (C) In about fifteen minutes. <br />\r\n30 You don\'t work on Fridays, do you?<br>(A) Do you have one, too? (B) That\'d work for me. • (C) Not unless I have a meeting. <br />\r\n31 i-le,A; will the new equipment be delivered to the factory? <br />\r\n(A) I don\'t know how to operate it yet. • (B) I think it\'ll come by truck. (C) On this delivery form. <br />\r\n32 Why don\'t I give you a ride to the airport on Monday morning? *<br>(A) Thanks, but I\'ve already arranged for a taxi. (B) To attend a training session for our international clients. <br />\r\n(C) I called to confirm my flight. <br />\r\n33 Do you think this advertisement would looi, better with blue writing, or with orange?<br>(A) Yes, it\'s the best I\'ve seen so far • (B) Why don\'t you try green instead? (C) Aren\'t you going to? <br />\r\n34 These client files are ordered alphabetically, aren\'t they? <br />\r\n(A) I haven\'t placed the order yet. fr (B) Yes, by last name. (C) The first one you come across. <br />\r\n35 Mr. Tan, would you mind printing the results of the survey?<br>(A) I\'ll lend you a catalog. • (B) Is it alright if I do it after lunch? (C) Across from the copy room. <br />\r\n36 Where should I put this scarf that I found in the hallway?<br>(A) No, I\'m afraid that isn\'t mine. (B) I set them on your desk last night. -4( (C) You can leave it with the receptionist. <br />\r\n37 whot type of c.:1 ii would you like for your rievt: office? <br />\r\n(A) That\'s a good choice. (B) I\'ll just keep the one I\'m using now. (C) It won\'t arrive for another month. <br />\r\n38 Why do you go to this grocery store when there\'s one closer to your house? <br />\r\n(• A) This one has a wider selection. (B) We live near each other. (C) Did you get everything you needed? <br />\r\n39 Shouldn\'t the budget proposal have been approved by now?<br>(A) To save any excess funds. * (B) It\'s taking longer than we anticipated. (C) I certainly appreciate the offer. <br />\r\n40 is the employee appreciation dinner going to be formal or informal? *<br>(A) I was told that we could dress casually. (B) I\'m looking forward to it, too. (C) You\'re welcome to sit by me. <br />\r\n','','1','67937','26813');
/*!40000 ALTER TABLE `toeicpart2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toeicpart3`
--

DROP TABLE IF EXISTS `toeicpart3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toeicpart3` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `mp3url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transcript` text COLLATE utf8_unicode_ci,
  `quest1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transimg` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansa1` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansb1` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansc1` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansd1` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ishow` int(5) DEFAULT NULL,
  `questID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookcode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansa2` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansb2` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansc2` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansd2` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansa3` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansb3` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansd3` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansc3` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toeicpart3`
--

LOCK TABLES `toeicpart3` WRITE;
/*!40000 ALTER TABLE `toeicpart3` DISABLE KEYS */;
INSERT INTO `toeicpart3` VALUES (9,'333333333','A','ttttttttttttttttt','What service is the woman asking about?',NULL,NULL,'Room cleaning ','Laundry service ','Express check-in ','Conference room rental',1,'1','1','1','q2','q3','a2','b2','c2','d2','a3','b3','d3','c3','A','B'),(10,NULL,'A',NULL,'What service is the woman asking about?',NULL,NULL,'Room cleaning ','Laundry service ','Express check-in ','Conference room rental',1,'2','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(11,NULL,'B',NULL,'What service is the woman asking about?',NULL,NULL,'Room cleaning ','Laundry service ','Express check-in ','Conference room rental',1,'3','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(12,NULL,'C',NULL,'What service is the woman asking about?',NULL,NULL,'Room cleaning ','Laundry service ','Express check-in ','Conference room rental',1,'4','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(13,NULL,'D',NULL,'What service is the woman asking about?',NULL,NULL,'Room cleaning ','Laundry service ','Express check-in ','Conference room rental',1,'5','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(14,NULL,'D',NULL,'What service is the woman asking about?',NULL,NULL,'Room cleaning ','Laundry service ','Express check-in ','Conference room rental',1,'6','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(15,NULL,'A',NULL,'a',NULL,NULL,NULL,NULL,NULL,NULL,1,'7','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(16,NULL,'C',NULL,'a',NULL,NULL,NULL,NULL,NULL,NULL,1,'8','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(17,NULL,'D',NULL,'a',NULL,NULL,NULL,NULL,NULL,NULL,1,'9','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(18,NULL,'A',NULL,'a',NULL,NULL,NULL,NULL,NULL,NULL,1,'10','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B'),(19,NULL,'B',NULL,'a',NULL,NULL,NULL,NULL,NULL,NULL,1,'11','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A','B');
/*!40000 ALTER TABLE `toeicpart3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toeicpart4`
--

DROP TABLE IF EXISTS `toeicpart4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toeicpart4` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `mp3url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transcript` text COLLATE utf8_unicode_ci,
  `quest` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transimg` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansb` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansc` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansd` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ishow` int(5) DEFAULT NULL,
  `questID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookcode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toeicpart4`
--

LOCK TABLES `toeicpart4` WRITE;
/*!40000 ALTER TABLE `toeicpart4` DISABLE KEYS */;
INSERT INTO `toeicpart4` VALUES (1,NULL,'A','<p>(MA)&nbsp;&nbsp; &nbsp;Questions 41 - 43 refer to the following conversation.<br />(WA)&nbsp;&nbsp; &nbsp;Hi, before I check in, I have a quick question. I&rsquo;m speaking at a conference here in town, and I need to get some emergency dry cleaning and ironing done on a blouse. Could you do that here at that hotel?<br />(MA)&nbsp;&nbsp; &nbsp;We sure can. That&rsquo;s all done on site. Today&rsquo;s Sunday, so if you give us the clothes this evening, they&rsquo;ll be ready by noon tomorrow.<br />(WA)&nbsp;&nbsp; &nbsp;Oh, that&rsquo;s perfect. The conference is Tuesday, so I&rsquo;ll have a day to work with. Do I just leave the clothing with the housekeeping staff?<br />(MA)&nbsp;&nbsp; &nbsp;Yes, there should be a clear plastic bag beside the luggage rack in your room. But it may be missing. So, before I process your check-in on the computer, let me grab a bag for you from the coat room. One moment - I&rsquo;ll be right back.</p><p>41.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What service is the woman asking about?<br />42.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When most likely will the woman give a speech?<br />43.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What will the man probably do next?</p><p>&nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;Questions 44 - 46 refer to the following conversation.<br />(WB)&nbsp;&nbsp; &nbsp;Hi, Terrance. Well, it looks like we&rsquo;ll have to postpone our Wednesday department meeting on Wednesday. Five or six members of our staff will be touring the new computer facility all afternoon that day.&nbsp;<br />(MB)&nbsp;&nbsp; &nbsp;Oh, right. I heard they&rsquo;ll have a data management forum there. On Thursday, I&rsquo;m busy all morning and afternoon. Why don&rsquo;t we set the meeting for Friday?<br />(WB)&nbsp;&nbsp; &nbsp;That&rsquo;ll work. I have a report to do in the afternoon, so would 10 A.M. work?<br />(MB)&nbsp;&nbsp; &nbsp;Ten on Friday is perfect. I&rsquo;ll send a group e-mail to everyone once I&rsquo;ve booked the meeting room. Looks like a busy afternoon for me, so I think I&rsquo;ll head out and grab some lunch in a second.&nbsp;</p><p>44.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why does the woman say the meeting should be postponed?<br />45.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When will the meeting most likely be held?<br />46.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What will the man probably do next?</p><p><br />(MA)&nbsp;&nbsp; &nbsp;Questions 47 - 49 refer to the following conversation.<br />(MA)&nbsp;&nbsp; &nbsp;Hi, I&rsquo;m looking for a laptop bag for an extended business trip to India. Once there, I&rsquo;ll be traveling around to various hotels and universities trying to sell our firm&rsquo;s software packages. I need a bag that&rsquo;s very sturdy.&nbsp;<br />(WB)&nbsp;&nbsp; &nbsp;Well, you might want to try this black PC10 bag. It&rsquo;s a hard-bag, so it&rsquo;s a little heavy and not really stylish, but it&rsquo;s durable and a good value at just $34 on sale.&nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;It looks very tough. I like it, but it&rsquo;s not quite big enough. I have a larger laptop, so I need a 20 inch bag.&nbsp;<br />(WB)&nbsp;&nbsp; &nbsp;Oh, I&rsquo;m afraid we only have the PC10 in our regular stores. But I can check our online inventory for a 20-inch hard bag and have it shipped here within 24 hours. One moment while I bring up the computer.</p><p>47.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why is the man traveling to India?<br />48.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man say about the bag?<br />49.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the woman offer to do?</p><p><br />(MA)&nbsp;&nbsp; &nbsp;Questions 50 - 52 refer to the following conversation.<br />(MB)&nbsp;&nbsp; &nbsp;McCleary Associates, this is Carl McCleary speaking. How may I help you?<br />(WA)&nbsp;&nbsp; &nbsp;Hi, this is Kate from Stone Dental Center. You had tried to get a 5 or 5:30 appointment with us for this Friday and we were booked, but now one patient just canceled her visit. Would you be interested in coming in at 5:30? &nbsp;<br />(MB)&nbsp;&nbsp; &nbsp;Sure, that would be great. I&rsquo;m a new patient, so do I need to arrive early or anything?&nbsp;<br />(WA)&nbsp;&nbsp; &nbsp;No, just come in at 5:30. We&rsquo;re on the 6th floor of the Stone Complex, and there&rsquo;s free parking on both sides of the building. Please bring an ID with a picture on it for registration. You&rsquo;re all set, and we&rsquo;ll see you Friday.</p><p>50.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why most likely is the woman calling?<br />51.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;At what time Friday will the man most likely visit the Stone Complex?<br />52.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the woman ask the man to do?</p><p><br />(MA)&nbsp;&nbsp; &nbsp;Questions 53 - 55 refer to the following conversation.<br />(WA)&nbsp;&nbsp; &nbsp;Hi, Greg. Well, today&rsquo;s my first day at work at Access Publishing, and it looks like I&rsquo;m going to be late. I left my house early to be sure not to miss the train, but now the train is running 30 minutes late.&nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;Oh, hi, Susan. They just announced that the delays are from the work crews out clearing debris from the tracks, but the train should arrive soon. With all this wind and rain, there are still lots of branches falling down.&nbsp;<br />(WA)&nbsp;&nbsp; &nbsp;I see. Well, I&rsquo;m just glad the electricity didn&rsquo;t go out.&nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;I&rsquo;ll say. You know those redesigned townhomes in the financial district? I&rsquo;m showing one to a client this morning, and I have to print out the online brochure from our realty office as soon as I arrive.&nbsp;</p><p>53.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why is the woman concerned?<br />54.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What is causing the problem?<br />55.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Where does the man most likely work?</p><p><br />(MA)&nbsp;&nbsp; &nbsp;Questions 56 - 58 refer to the following conversation.<br />(MB)&nbsp;&nbsp; &nbsp;Hi, Olivia. Do you know where I can find more of those thick file folders? Some of my colleagues down in the accounting area need them for our tax paperwork.&nbsp;<br />(WB)&nbsp;&nbsp; &nbsp;Well, the operations team took the last folders here. But Barb in the sales department may have a few, or you might want to look in the supply room by Human Resources. I could also order some from Max&rsquo;s Supply today.&nbsp;<br />(MB)&nbsp;&nbsp; &nbsp;Oh, it&rsquo;s no rush. The tax forms won&rsquo;t arrive until Monday or Tuesday anyway. Tomorrow&rsquo;s Friday, so I&rsquo;ll just go to Max&rsquo;s Supply during lunch and get supplies with the company credit card. &nbsp;<br />(WB)&nbsp;&nbsp; &nbsp;That&rsquo;ll work. You can phone them and they&rsquo;ll set things aside for you if you give them the items&rsquo; catalogue numbers. In fact, why don&rsquo;t I make a list of supplies our department needs? Hold on, and I&rsquo;ll do that right away.</p><p>56.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What department does the man most likely work in?<br />57.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When will the man probably go to Max&rsquo;s Supply?<br />58.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What will the woman probably do next?</p><p><br />(MA)&nbsp;&nbsp; &nbsp;Questions 59 - 61 refer to the following conversation.<br />(WB)&nbsp;&nbsp; &nbsp;Hi, Mr. Foley? This is Debra from Ten-Tech Industries. I&rsquo;m calling to follow up on your purchase of our DTC-10 cloth cutting machine, and just want to make sure you&rsquo;re happy with its performance. &nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;Oh, yes, we&rsquo;re very satisfied with it. Its digital technology has really helped us speed up production in our factory, as your salesperson said it would, and it&rsquo;s energy efficient as well.&nbsp;<br />(WB)&nbsp;&nbsp; &nbsp;That&rsquo;s great to hear. As you know, the DTC-10 is not the cheapest machine around, and it&rsquo;s not the only cloth cutter that uses computer technology, but we&rsquo;re proud of it being the fastest operating unit on the market.&nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;Well, it helped us meet our production deadline for a new line of men&rsquo;s shirts we just introduced. We&rsquo;re packaging the clothes now, and they&rsquo;ll be shipped to stores next months. Thank you for all your service, and thanks for the call.&nbsp;</p><p>59.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What is the main purpose of the woman&rsquo;s call?<br />60.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;According to the conversation, what is special about the DTC-10?<br />61.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man say will happen next month?&nbsp;</p><p><br />(MA)&nbsp;&nbsp; &nbsp;Questions 62 - 64 refer to the following conversation.<br />(MB)&nbsp;&nbsp; &nbsp;Hi, Ellen. I looked at the Web site for the new Indian restaurant. There&rsquo;s no lunch buffet, but they do have some cheap dishes on the regular menu. It&rsquo;s a long walk to get there, but it&rsquo;s worth checking out. What do you think?&nbsp;<br />(WA)&nbsp;&nbsp; &nbsp;Oh, I&rsquo;m afraid I have to stay here at the office. I have to finish that report for the afternoon meeting.&nbsp;<br />(MB)&nbsp;&nbsp; &nbsp;Well, you helped me design that brochure last month. Why don&rsquo;t I help you out with the report? I can do some of the copying, sorting, and stapling. I owe it to you.<br />(WA)&nbsp;&nbsp; &nbsp;I suppose we could go. My colleague who&rsquo;s been there says the service is good, but that it&rsquo;s a tiny space with just 20 tables. Don&rsquo;t be surprised if we have to wait outside in a line to get a table.&nbsp;</p><p>62.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man indicate about the restaurant?<br />63.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man offer to do?<br />64.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the woman&rsquo;s colleague say about the restaurant?<br />&nbsp;&nbsp; &nbsp;&nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;Questions 65 - 67 refer to the following conversation.<br />(MA)&nbsp;&nbsp; &nbsp;Hi, Carla? This is Frank Renzi with the Weekly Times. One of my fellow reporters here just handed me a press release saying your company&rsquo;s delaying the launch of its new Vista motorcycle. Could you tell me more about that?<br />(WA)&nbsp;&nbsp; &nbsp;Hi. Yes, that&rsquo;s correct. The release of that model will be postponed for one month because of factory renovations that took place in January. However, it&rsquo;s a great bike, especially for beginning riders, and your staff can test it soon.&nbsp;<br />(MA)&nbsp;&nbsp; &nbsp;We&rsquo;d like to. We&rsquo;re especially interested in having Barry, our columnist, give it a road test before April&rsquo;s New City motorcycle festival. Is that possible?&nbsp;<br />(WA)&nbsp;&nbsp; &nbsp;lt sure is. We are inviting media representatives to test the Vista at our factory&rsquo;s track on February 28th, just three weeks before its official market launch on March 14th. I will e-mail you details about the media event later today, in fact. &nbsp;</p><p>65.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Who most likely is the man?<br />66.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What kind of company does the woman probably work for?<br />67.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;When will the Vista be released on the market?</p><p><br />(MA)&nbsp;&nbsp; &nbsp;Questions 68 - 70 refer to the following conversation.<br />(MB)&nbsp;&nbsp; &nbsp;Air-Co. Industries, this is Sam speaking. How may I help you?&nbsp;<br />(WB)&nbsp;&nbsp; &nbsp;Hi, Sam. It&rsquo;s Lisa from Chicago Relocation service. I&rsquo;m calling to tell you about an apartment that came up for rent. It&rsquo;s near public transportation and Hamlin Park, and it would be close to your new office.<br />(MB)&nbsp;&nbsp; &nbsp;Oh, hi, Lisa. Actually, I just found out that I&rsquo;ll have a company car in Chicago, so my preferences have changed. I can live farther from downtown. Now the key thing for me is finding any unit that rents for under $1,000 a month.&nbsp;<br />(WB)&nbsp;&nbsp; &nbsp;Well, that&rsquo;ll make the search even easier. I&rsquo;ll put that information into our office computer and then at around 2 this afternoon I&rsquo;ll e-mail you a list of available units for you to look at. We&rsquo;ll have no trouble finding a place for you.&nbsp;</p><p>68.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;Why is the woman calling the man?<br />69.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What does the man say is important to him?<br />70.&nbsp;&nbsp; &nbsp;(MA)&nbsp;&nbsp; &nbsp;What most likely will happen in the afternoon ?&nbsp;<br />&nbsp;</p>','What happened yesterday? ',NULL,NULL,'A sports contest was postponed','Some local stores were closed','A flower show took place','Local schools canceled classes',1,'1','1','1'),(2,NULL,'B',NULL,'What happened yesterday? ',NULL,NULL,'A sports contest was postponed','Some local stores were closed','A flower show took place','Local schools canceled classes',1,'2','1','1'),(3,NULL,'C',NULL,'What happened yesterday? ',NULL,NULL,'A sports contest was postponed','Some local stores were closed','A flower show took place','Local schools canceled classes',1,'3','1','1'),(4,NULL,'A',NULL,'What happened yesterday? ',NULL,NULL,'A sports contest was postponed','Some local stores were closed','A flower show took place','Local schools canceled classes',1,'4','1','1'),(5,NULL,'D',NULL,'What happened yesterday? ',NULL,NULL,'A sports contest was postponed','Some local stores were closed','A flower show took place','Local schools canceled classes',1,'5','1','1'),(6,NULL,'A',NULL,'What happened yesterday? ',NULL,NULL,'A sports contest was postponed','Some local stores were closed','A flower show took place','Local schools canceled classes',1,'6','1','1'),(7,NULL,'B',NULL,'What happened yesterday? ',NULL,NULL,'A sports contest was postponed','Some local stores were closed','A flower show took place','Local schools canceled classes',1,'7','1','1');
/*!40000 ALTER TABLE `toeicpart4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toeicpart5`
--

DROP TABLE IF EXISTS `toeicpart5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toeicpart5` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `quest` text COLLATE utf8_unicode_ci,
  `ansa` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansb` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansc` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ansd` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testid` int(10) DEFAULT NULL,
  `explainans` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ishow` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toeicpart5`
--

LOCK TABLES `toeicpart5` WRITE;
/*!40000 ALTER TABLE `toeicpart5` DISABLE KEYS */;
/*!40000 ALTER TABLE `toeicpart5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toeicpart6`
--

DROP TABLE IF EXISTS `toeicpart6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toeicpart6` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `quest` text COLLATE utf8_unicode_ci,
  `questimg` text COLLATE utf8_unicode_ci,
  `trueans1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookcode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ishow` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toeicpart6`
--

LOCK TABLES `toeicpart6` WRITE;
/*!40000 ALTER TABLE `toeicpart6` DISABLE KEYS */;
INSERT INTO `toeicpart6` VALUES (1,NULL,'http://[::1]/toeic/public/books/67937/54564/p1/54564_1.png','A','B','C','',NULL,NULL,NULL,NULL),(2,NULL,'public/books/39744/26813/p6/2018-06-28_22h51_117.png','B','C','C',NULL,NULL,'39744','26813','0'),(3,NULL,'public/books/39744/26813/p6/2018-06-28_22h51_118.png','B','C','C',NULL,NULL,'39744','26813','0'),(4,NULL,'public/books/39744/26813/p6/2018-07-01_15h12_18.png','B','C','C',NULL,NULL,'39744','26813','0'),(5,NULL,'public/books/39744/26813/p6/2018-07-01_15h12_181.png','B','C','C',NULL,NULL,'39744','26813','0'),(6,NULL,'public/books/39744/26813/p6/2018-07-01_15h12_182.png','B','C','C',NULL,NULL,'39744','26813','0'),(7,NULL,'public/books/p6/1/2018-06-28_22h50_50.png','B','C','C',NULL,NULL,'1','11','0'),(8,NULL,'public/books/p6/1/2018-06-28_22h50_50.png','C','B','A',NULL,NULL,'1','11','0'),(9,NULL,'public/books/p6/1/2018-06-28_22h50_50.png','C','A','A',NULL,NULL,'1','11','0'),(10,NULL,'public/books/p6/1/2018-06-28_22h50_50.png','B','C','C',NULL,NULL,'1','11','0');
/*!40000 ALTER TABLE `toeicpart6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toeicpart7`
--

DROP TABLE IF EXISTS `toeicpart7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toeicpart7` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `questpar1` text COLLATE utf8_unicode_ci,
  `questpar2` text COLLATE utf8_unicode_ci,
  `quest1img` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest2img` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans1a` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans1b` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans1c` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans1d` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans2a` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans2b` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans2c` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans2d` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans3a` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans3b` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans3c` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans3d` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans4a` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans4b` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans4c` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans4d` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans5a` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans5b` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans5c` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans5d` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest5` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trueans5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ishow` int(5) DEFAULT NULL,
  `testID` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookcode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toeicpart7`
--

LOCK TABLES `toeicpart7` WRITE;
/*!40000 ALTER TABLE `toeicpart7` DISABLE KEYS */;
INSERT INTO `toeicpart7` VALUES (1,'The majority of top managers work moat productively outside standard working hours. This per a recent survey by Jefferson Watch Corporation of 100 chief executives of the top 500 companies in the country. The morning hours before other employees arrive were favored by 43 executives, while 18 preferred to work alter the other employees had left. Among those who considered normal working hours to he their most productive, 75% favored mornings over afternoons. 115% of those surveyed said that they worked at home in the evenings, and 65% worked over the weekends.','The majority of top managers work moat productively outside standard working hours. This per a recent survey by Jefferson Watch Corporation of 100 chief executives of the top 500 companies in the country. The morning hours before other employees arrive were favored by 43 executives, while 18 preferred to work alter the other employees had left. Among those who considered normal working hours to he their most productive, 75% favored mornings over afternoons. 115% of those surveyed said that they worked at home in the evenings, and 65% worked over the weekends.','a','a','What is the purpose of the notice?','What is the purpose of the notice?','What is the purpose of the notice?','What is the purpose of the notice?','file','file','file','file','file','file','file','file','file','file','file','file','file','file','file','file','file','file','file','file','What is the purpose of the notice?','a','b','b','c','d',1,NULL,NULL),(2,NULL,NULL,'https://baomoi-photo-3-td.zadn.vn/w900_r16x9/15/07/30/233/17162081/avatar.jpg','https://guidetoenglish.files.wordpress.com/2017/02/valentine3.jpg?w=645&h=430','What is the purpose of the notice?','What is the purpose of the notice?','What is the purpose of the notice?',NULL,'file','file','file','file','file','file','file','file','file','file','file','file',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'a','a','d',NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,'public/books/p7/1/11/2018-07-01_16h22_5610.png','public/books/p7/1/11/2018-07-01_16h48_2310.png',' What is the purpose of the letter? ','What is stated as one of the Crockett Center\'s goals? ','What subject was most likely discussed when Mr. Shaw and Ms. Price met? ','','To arrange a joint project between two organizations ','To inquire about future job openings ','To provide a schedule of gardening classes ','To finalize a merger of two organizations \r','To find gardens located outside Austin ','To increase attendance at gardening dub meetings ','To establish new community gardens ','To sell produce at neighborhood markets \r','Integral Harvest\'s reputation among gardeners ','Attitudes toward all natural agriculture ','A government proposal to build new schools ','Gardening classes for Austin residents \r','','','','','','','','','','','','','','',0,'11','1'),(4,NULL,NULL,NULL,NULL,' What is suggested about the check-in process? ','How far in advance should passengers arrive at the airport if flying to Ireland? ','In paragraph 2, line 2, the word \"match\" is closest in meaning to ','','It is more complicated than it used to be. ','It can vary widely in duration. ','It comes after a security screening. ','It can be expedited for an additional fee. \r','25 minutes ','One hour ','90 minutes ','Two hours \r','correspond to ','be near ','join with ','compete with \r','','','','','','','','','','','','','','',0,'11','1');
/*!40000 ALTER TABLE `toeicpart7` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-23  6:52:45
