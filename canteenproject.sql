-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dbtest
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Table structure for table `CHECK`
--

DROP TABLE IF EXISTS `CHECK`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CHECK` (
  `PID` int(11) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CHECK`
--

LOCK TABLES `CHECK` WRITE;
/*!40000 ALTER TABLE `CHECK` DISABLE KEYS */;
/*!40000 ALTER TABLE `CHECK` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Items`
--

DROP TABLE IF EXISTS `Items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Items` (
  `PID` int(11) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Items`
--

LOCK TABLES `Items` WRITE;
/*!40000 ALTER TABLE `Items` DISABLE KEYS */;
INSERT INTO `Items` VALUES (100,'Samosa',10,262),(101,'Cavins Milk',30,8);
/*!40000 ALTER TABLE `Items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Products`
--

DROP TABLE IF EXISTS `Products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Products` (
  `pimage` varchar(66) DEFAULT NULL,
  `pprice` varchar(65) NOT NULL,
  `pdesc` varchar(65) NOT NULL,
  `pcategory` varchar(65) NOT NULL,
  `pname` varchar(65) NOT NULL,
  `pid` int(55) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Products`
--

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;
INSERT INTO `Products` VALUES ('products/product1.jpg','10','Enjoy','SRM Good Foods','Samosa',100),('products/product6.jpg','30','Flovoured Milk','SRM Good Foods','Cavins Milk',101),('products/product3.jpg','10','Soda','Soda Wala','Soda',102);
/*!40000 ALTER TABLE `Products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Registrationa`
--

DROP TABLE IF EXISTS `Registrationa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Registrationa` (
  `NAME` varchar(55) NOT NULL,
  `COLLEGE` varchar(55) NOT NULL,
  `COURSE` varchar(55) NOT NULL,
  `BRANCH` varchar(55) NOT NULL,
  `EMAIL` varchar(55) NOT NULL,
  `PHONE_NUM` varchar(255) DEFAULT NULL,
  `opt` varchar(20) DEFAULT NULL,
  `team` varchar(20) DEFAULT 'NONE',
  `REGISTRATION_NUMBER` varchar(25) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Registrationa`
--

LOCK TABLES `Registrationa` WRITE;
/*!40000 ALTER TABLE `Registrationa` DISABLE KEYS */;
INSERT INTO `Registrationa` VALUES ('ankur pandey','SRM','btech','it','ankurpan97@gmail.com','9962','Manuscript','NONE','ra0069',157,'2016-08-28 17:43:58'),('ankur pandey','SRM','btech','it','ankurpan97@gmail.com','9962','Decipher','desi','ra0069',158,'2016-08-28 17:44:55'),('Aman Kumar','SRM','','','aman.a345@gmail.com','','dwws','asdf','RA1511008020076',159,'2016-08-28 17:47:00'),('ankur pandey','SRM','btech','it','ankurpan97@gmail.com','9962','Decipher','jai','ra0069',160,'2016-08-29 09:15:46'),('Aman Kumar','SRM','','','aman.a345@gmail.com','','Decipher','jai','RA1511008020076',161,'2016-08-29 09:16:35'),('ankur pandey','SRM','btech','it','ankurpan97@gmail.com','9962','Crack jack','NONE','ra0069',162,'2016-08-29 09:44:29'),('Aman Kumar','SRM','','','aman.a345@gmail.com','','SSDSC','hgh','RA1511008020076',163,'2016-08-29 11:43:31');
/*!40000 ALTER TABLE `Registrationa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Registrationaa`
--

DROP TABLE IF EXISTS `Registrationaa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Registrationaa` (
  `FROMM` varchar(55) NOT NULL,
  `TOOO` varchar(55) NOT NULL,
  `EVENTQ` varchar(55) NOT NULL,
  `TEAM` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Registrationaa`
--

LOCK TABLES `Registrationaa` WRITE;
/*!40000 ALTER TABLE `Registrationaa` DISABLE KEYS */;
/*!40000 ALTER TABLE `Registrationaa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Request`
--

DROP TABLE IF EXISTS `Request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Request` (
  `From` varchar(55) NOT NULL,
  `team` varchar(55) NOT NULL,
  `for_event` varchar(55) NOT NULL,
  `TOo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Request`
--

LOCK TABLES `Request` WRITE;
/*!40000 ALTER TABLE `Request` DISABLE KEYS */;
/*!40000 ALTER TABLE `Request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Requesta`
--

DROP TABLE IF EXISTS `Requesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Requesta` (
  `from` varchar(15) NOT NULL,
  `team` varchar(40) NOT NULL,
  `event` varchar(255) NOT NULL,
  `too` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Requesta`
--

LOCK TABLES `Requesta` WRITE;
/*!40000 ALTER TABLE `Requesta` DISABLE KEYS */;
INSERT INTO `Requesta` VALUES ('a1','a2','a3','a4'),('$a','$b','$c','SRM'),('ankurpan97@gmai','zxz','zxxzx','zzz');
/*!40000 ALTER TABLE `Requesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chess`
--

DROP TABLE IF EXISTS `chess`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chess` (
  `UID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(65) NOT NULL,
  `AGE` int(65) NOT NULL,
  `GUARDIAN_NAME` varchar(65) NOT NULL,
  `EMAIL` varchar(65) NOT NULL,
  `ADDRESS` varchar(65) NOT NULL,
  `PHONE_O` int(65) NOT NULL,
  `PHONE_H` int(65) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chess`
--

LOCK TABLES `chess` WRITE;
/*!40000 ALTER TABLE `chess` DISABLE KEYS */;
INSERT INTO `chess` VALUES (9,'Ankur',20,'ABC','ankurpan96@gmail.com','',99999998,2147483647),(10,'aDMIN',20,'SS','ankur4747@ymail.com','',6566,2147483647),(11,'Abhishek',20,'55','admin@gmail.com','',6556,5666);
/*!40000 ALTER TABLE `chess` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `NAME` varchar(55) NOT NULL,
  `CATAGORY` varchar(55) NOT NULL,
  `TIME` varchar(55) NOT NULL,
  `PRICE` varchar(55) NOT NULL,
  `PLACE` varchar(55) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES ('Crack Jack','SOLO','900 hrs','350','TRP',1);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `PID` int(11) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `UID` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `order_DT` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_num` int(10) NOT NULL AUTO_INCREMENT,
  `OrderN` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_status` varchar(20) DEFAULT 'NOT DELIVERED',
  PRIMARY KEY (`order_num`)
) ENGINE=InnoDB AUTO_INCREMENT=694 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (101,' Cavins Milk',30,30,78,1,'2017-02-22 14:31:46',682,'2017-02-22 14:31:46','NOT DELIVERED'),(102,' Soda Wala',10,10,78,1,'2017-02-22 14:31:46',683,'2017-02-22 14:31:46','NOT DELIVERED'),(100,' Samosa',10,30,78,3,'2017-02-22 14:31:46',684,'2017-02-22 14:31:46',' DELIVERED'),(100,' Samosa',10,20,78,2,'2017-02-23 01:32:12',685,'2017-02-23 01:32:12','NOT DELIVERED'),(102,' Soda Wala',10,10,78,1,'2017-02-23 01:32:23',686,'2017-02-23 01:32:23','NOT DELIVERED'),(101,' Cavins Milk',30,60,78,2,'2017-02-23 01:32:31',687,'2017-02-23 01:32:31','NOT DELIVERED'),(100,' Samosa',10,10,78,1,'2017-02-23 11:17:27',688,'2017-02-23 11:17:27','NOT DELIVERED'),(101,' Cavins Milk',30,60,78,2,'2017-02-23 11:18:59',689,'2017-02-23 11:18:59','NOT DELIVERED'),(102,' Soda Wala',10,30,78,3,'2017-03-02 21:28:38',690,'2017-03-02 21:28:38','NOT DELIVERED'),(100,' Samosa',10,10,78,1,'2017-03-03 14:28:51',691,'2017-03-03 14:28:51',' DELIVERED'),(100,' Samosa',10,10,80,1,'2017-07-14 14:43:28',692,'2017-07-14 14:43:28',' DELIVERED'),(101,' Cavins Milk',30,30,80,1,'2017-07-14 14:43:28',693,'2017-07-14 14:43:28',' DELIVERED');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `from` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `Quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recover`
--

DROP TABLE IF EXISTS `recover`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recover` (
  `id` int(11) NOT NULL,
  `user_mail` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recover`
--

LOCK TABLES `recover` WRITE;
/*!40000 ALTER TABLE `recover` DISABLE KEYS */;
INSERT INTO `recover` VALUES (34570,'aman.a345@gmail'),(2017,'ankur@gmail.com'),(9388,'ank@g.com'),(11577,'aman.a345@gmail'),(25686,'aman.a345@gmail'),(28447,'ankur@gmail.com');
/*!40000 ALTER TABLE `recover` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `REG_NUM` varchar(20) DEFAULT NULL,
  `Wallet_Bal` int(11) NOT NULL,
  `course` varchar(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (78,'Admin','a@b.com','8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918','00',730,NULL,NULL,NULL),(79,'Swapnil','saiamthere@gmail.com','2846f08a397dc5c54abad792f391cb4f6a42cb34ec0ad29ddfb1eb3eb33fad58','RA1511008020122',0,NULL,NULL,NULL),(80,'ankur','ankurpan96@gmail.com','65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5','Ra1511008020069',60,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-29 11:53:20
