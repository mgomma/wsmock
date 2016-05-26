-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wsmock
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `engagmentSummaryBeanList`
--

DROP TABLE IF EXISTS `engagmentSummaryBeanList`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `engagmentSummaryBeanList` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gosi_id` int(11) NOT NULL,
  `engagementStatus` int(11) NOT NULL,
  `establishmentNameArb` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `joiningDate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `joiningDateEntFmt` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `leavingDate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `leavingDateEntFmt` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `molEstId` int(11) NOT NULL,
  `molEstOfficeId` int(11) NOT NULL,
  `registrationNumber` int(11) NOT NULL,
  `wage` int(11) NOT NULL,
  `wageStatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engagmentSummaryBeanList`
--

LOCK TABLES `engagmentSummaryBeanList` WRITE;
/*!40000 ALTER TABLE `engagmentSummaryBeanList` DISABLE KEYS */;
INSERT INTO `engagmentSummaryBeanList` VALUES (1,1000051700,3,'sdfsdf','2014-05-01T00:00:00','2014-05-01T00:00:00','0000-00-00','0000-00-00',8913,9,2423,43,324);
/*!40000 ALTER TABLE `engagmentSummaryBeanList` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gosi`
--

DROP TABLE IF EXISTS `gosi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gosi` (
  `NIN` int(11) NOT NULL,
  `contributorFirstName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contributorLastName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contributorSecondName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contributorThirdName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nationalityCode` int(2) NOT NULL,
  `newNINumber` int(10) NOT NULL,
  `sex` int(2) NOT NULL,
  `socialInsuranceNumber` int(10) NOT NULL,
  `specifiedDate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gosi`
--

LOCK TABLES `gosi` WRITE;
/*!40000 ALTER TABLE `gosi` DISABLE KEYS */;
INSERT INTO `gosi` VALUES (23423,'test','test','test','test',0,23,1,23,'2010-01-01 00:00:00'),(23424,'sfd','sdfsd','sdf','sdf',24234,2342,1,23423,'2010-01-01 00:00:00'),(1000051700,'first','sfd','second','third',2,1000051700,0,1000159,' 2010-01-01 00:00:00 '),(1002555178,'فثسف','????','','محمود',16,1002555178,0,0,'2006-06-25 00:00:00'),(1002673505,'???????','???????','','???',16,1002673505,0,0,'2006-07-03 00:00:00'),(1003051560,'?????','?? ???','','?????????',16,1003051560,0,0,'2006-07-19 00:00:00'),(1004866662,'????','??????','','????',16,1004866662,0,369337505,'2006-06-19 00:00:00'),(1004962054,'?????','??????','','????',16,1004962054,0,375822202,'2006-07-18 00:00:00'),(1005254204,'?????????','???????','','????',16,1005254204,0,376214222,'2006-07-07 00:00:00'),(1006051450,'???','???????','','???????',16,1006051450,0,376175669,'2006-07-18 00:00:00'),(1006210010,'?????','??????','','???',16,1006210010,0,374601989,'2006-06-26 00:00:00'),(1006695041,'??','????????','','????',16,1006695041,0,368731080,'2006-07-19 00:00:00'),(1006735169,'محمد','?????','','????',16,1006735169,0,370253005,'2006-07-19 00:00:00'),(1006805269,'????','??????','','??????????',16,1006805269,0,375142759,'2006-07-19 00:00:00'),(1007078494,'???','?? ????','','???',16,1007078494,0,376818683,'2006-07-19 00:00:00'),(1007338861,'?????','???','','???',16,1007338861,0,0,'2006-06-26 00:00:00'),(1007388853,'????','?????','','????',16,1007388853,0,0,'2006-07-03 00:00:00'),(1009735729,'???????','??????','','????',16,1009735729,0,375189526,'2006-07-03 00:00:00'),(1010305645,'????','????????','','????',16,1010305645,0,0,'2006-07-01 00:00:00'),(1010390225,'?????','??????','','?????????',16,1010390225,0,370146586,'2006-07-18 00:00:00'),(1010415864,'?????','???????','','???????',16,1010415864,0,373769002,'2006-07-18 00:00:00'),(1010777538,'???','???????','','???',16,1010777538,0,373214051,'2006-07-21 00:00:00'),(1011301131,'????','??? ???','','???????',16,1011301131,0,374602470,'2006-06-27 00:00:00'),(1011785399,'?????????','????????','','????',16,1011785399,0,375590859,'2006-07-03 00:00:00'),(1013868417,'???','????????','','???',16,1013868417,0,22333333,'2006-07-18 00:00:00'),(1014455031,'????','??????','','???',16,1014455031,0,376821145,'2006-07-18 00:00:00'),(1016888024,'???','?????','','???',16,1016888024,0,373261165,'2006-07-19 00:00:00'),(1016915333,'???','??????','','????',16,1016915333,0,0,'2006-06-26 00:00:00'),(1017211895,'???','???????','','???',16,1017211895,0,376821536,'2006-07-18 00:00:00'),(1019311313,'????','??????','','???',16,1019311313,0,376820726,'2006-07-19 00:00:00'),(1019388888,'?????','??????','','???',16,1019388888,0,0,'2006-06-21 00:00:00'),(1019569524,'?????','???????','','????',16,1019569524,0,0,'2006-07-17 00:00:00'),(1019946423,'????','????????','','???',16,1019946423,0,376947750,'2006-07-18 00:00:00'),(1023835050,'?????','?????','','???',16,1023835050,0,376820270,'2006-07-18 00:00:00'),(1026583060,'??? ????','?? ????','','????',16,1026583060,0,370272654,'2006-07-19 00:00:00'),(1027214871,'????','???????','','??? ????',16,1027214871,0,371717382,'2006-07-19 00:00:00'),(1030741654,'?????','???????','','???????',16,1030741654,0,376820777,'2006-07-18 00:00:00'),(1031005950,'????','??????','','????',16,1031005950,0,377093410,'2006-07-21 00:00:00'),(1031192378,'????','???????','','????',16,1031192378,0,376375536,'2006-07-11 00:00:00'),(1033888821,'?????','??????','','?????????',16,1033888821,0,0,'2006-06-25 00:00:00'),(1037535240,'????','???????','','????',16,1037535240,0,376375501,'2006-07-11 00:00:00'),(1041410091,'?????','???????','','????',16,1041410091,0,376821382,'2006-07-19 00:00:00'),(1044442671,'???','??????','','???',16,1044442671,0,1,'2006-06-19 00:00:00'),(1044831053,'????','????????','','??? ??????',16,1044831053,0,376940497,'2006-07-19 00:00:00'),(1046633200,'????','??????','','??????',16,1046633200,0,0,'2006-07-04 00:00:00'),(1046633668,'???','??????','','????',16,1046633668,0,0,'2006-07-01 00:00:00'),(1049311143,'????','??????','','?????',16,1049311143,0,375823446,'2006-07-11 00:00:00'),(1050309898,'????','???????','','?????',16,1050309898,0,376821420,'2006-07-17 00:00:00'),(1051061412,'????','????????','','????? ?????',16,1051061412,0,376820599,'2006-07-18 00:00:00'),(1055498098,'???','??????','','????',16,1055498098,0,372432942,'2006-07-17 00:00:00'),(1060331152,'???????','??????','','?????',16,1060331152,0,376606228,'2006-07-01 00:00:00'),(1061716021,'????','??????','','????',16,1061716021,0,0,'2006-07-03 00:00:00'),(1067231421,'???','???????','','?????',16,1067231421,0,376376125,'2006-07-11 00:00:00'),(1073111591,'????','??????','','???',16,1073111591,0,376940586,'2006-07-19 00:00:00'),(1075686475,'????','??????','','????',16,1075686475,0,376376052,'2006-07-11 00:00:00'),(1076145729,'????','??????','','??? ????',16,1076145729,0,375521903,'2006-07-19 00:00:00'),(1077222226,'????','???????','','????',16,1077222226,0,0,'2006-06-17 00:00:00'),(1077615993,'????','??????','','????',16,1077615993,0,0,'2006-07-02 00:00:00'),(1080355255,'???','??????','','?????',16,1080355255,0,375242141,'2006-06-26 00:00:00'),(1088869690,'????','??????','','????',16,1088869690,0,376781402,'2006-06-26 00:00:00');
/*!40000 ALTER TABLE `gosi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-26 18:08:49
