-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema thesis
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ thesis;
USE thesis;

--
-- Table structure for table `thesis`.`activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`activity_log`
--

/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` (`activity_log_id`,`username`,`date`,`action`) VALUES 
 (207,'admin','2017-02-09 22:44:19','SET 1 Returned to the admin '),
 (208,'admin','2017-02-09 22:52:53','Assign Device id 21&nbspName&nbspProjector to loca'),
 (209,'admin','2017-02-09 22:52:53','Assign Device id 20&nbspName&nbspAVR to location i'),
 (210,'admin','2017-02-09 22:53:03','Assign Set id 4&nbspName&nbspSET 1 to location id '),
 (211,'admin','2017-02-09 22:57:51','AVR Returned to the admin '),
 (212,'admin','2017-02-09 22:57:55','SET 1 Returned to the admin '),
 (213,'admin','2017-02-09 22:58:05','Assign Device id 21&nbspName&nbspProjector to loca'),
 (214,'admin','2017-02-09 22:58:37','Assign Set id 4&nbspName&nbspSET 1 to location id '),
 (215,'admin','2017-02-09 22:58:46','transfer Item   to location id 8&nbspName&nbspPL1'),
 (216,'admin','2017-02-09 22:58:54','transfer Item   to location id 9&nbspName&nbspPL3'),
 (217,'admin','2017-02-09 22:59:18','transfer Item   to location id 9&nbspName&nbspPL3'),
 (218,'admin','2017-02-09 23:20:16','transfer Item   to location id PL3');
INSERT INTO `activity_log` (`activity_log_id`,`username`,`date`,`action`) VALUES 
 (219,'admin','2017-02-09 23:25:18','transfer Item   to location id PL3'),
 (220,'admin','2017-02-09 23:34:48','transfer Item   to location id PL2'),
 (221,'admin','2017-02-09 23:44:05','transfer Item   to location id 9'),
 (222,'admin','2017-02-09 23:44:23','transfer Item   to location id 10'),
 (223,'admin','2017-02-09 23:44:54','SET 1 Returned to the admin '),
 (224,'admin','2017-02-10 00:14:10','Created New Set : SET 1'),
 (225,'admin','2017-02-10 00:18:59','Assign Set id 5&nbspName&nbspSET 1 to location id '),
 (226,'admin','2017-02-10 00:26:18','SET 1 Returned to the admin '),
 (227,'admin','2017-02-10 00:26:51','Created New Set : Blaezers Set'),
 (228,'admin','2017-02-10 00:27:48','Assign Set id 6&nbspName&nbspBlaezers Set to locat'),
 (229,'admin','2017-02-10 00:29:26','Add device Detail id 8&nbspName&nbspMonitor'),
 (230,'admin','2017-02-10 00:29:55','Blaezers Set Returned to the admin '),
 (231,'admin','2017-02-10 00:30:19','Replacement of item from Blaezers Set'),
 (232,'admin','2017-02-10 00:30:50','Replacement of item from Blaezers Set');
INSERT INTO `activity_log` (`activity_log_id`,`username`,`date`,`action`) VALUES 
 (233,'admin','2017-02-10 00:32:00','Replacement of item from Blaezers Set'),
 (234,'admin','2017-02-10 00:32:27','Assign Device id 22&nbspName&nbspMonitor to locati'),
 (235,'admin','2017-02-10 00:32:59','Assign Set id 6&nbspName&nbspBlaezers Set to locat'),
 (236,'admin','2017-02-10 00:34:12','transfer Item   to location id 9'),
 (237,'admin','2017-02-10 00:34:25','Blaezers Set Returned to the admin '),
 (238,'admin','2017-02-10 00:39:42','Add device Type CD Room'),
 (239,'admin','2017-02-10 00:40:10','Add device Type Tablet '),
 (240,'admin','2017-02-10 00:40:15','Add device Type Laptop'),
 (241,'admin','2017-02-10 00:40:27','Add device Type Table '),
 (242,'admin','2017-02-10 00:40:34','Add device Type Chair'),
 (243,'admin','2017-02-10 00:40:50','Add device Type Printer'),
 (244,'admin','2017-02-10 00:43:30','Add device Type DSLR'),
 (245,'admin','2017-02-10 02:10:11','Add device Detail id 5&nbspName&nbspAVR'),
 (246,'admin','2017-02-10 02:11:13','Add device Detail id 6&nbspName&nbspCPU');
INSERT INTO `activity_log` (`activity_log_id`,`username`,`date`,`action`) VALUES 
 (247,'admin','2017-02-10 02:12:06','Created New Set : Blaezers Set'),
 (248,'admin','2017-02-10 02:13:22','Assign Device id 28&nbspName&nbspCPU to location i'),
 (249,'admin','2017-02-10 02:13:23','Assign Device id 28&nbspName&nbspCPU to location i'),
 (250,'admin','2017-02-10 02:16:16','transfer Item   to location id 10'),
 (251,'admin','2017-02-10 02:18:15','CPU Returned to the admin '),
 (252,'admin','2017-02-10 02:24:56','Add device Detail id 7&nbspName&nbspProjector'),
 (253,'admin','2017-02-10 02:42:21','Add device Detail id 9&nbspName&nbspSystem Unit'),
 (254,'admin','2017-02-10 03:56:02','Edit Device Type Central Processing Unit');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `lastname` varchar(40) DEFAULT NULL,
  `adminthumbnails` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`admin_id`,`username`,`password`,`firstname`,`lastname`,`adminthumbnails`) VALUES 
 (1,'admin','123','ADMIN',' ','uploads/boys1.png');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `idcontent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `for` varchar(45) NOT NULL DEFAULT '',
  `texts` varchar(600) NOT NULL DEFAULT '',
  PRIMARY KEY (`idcontent`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`content`
--

/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` (`idcontent`,`for`,`texts`) VALUES 
 (1,'Mission','<p>&nbsp; &nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;Sample Mission&nbsp;</p>'),
 (2,'Vision','<p>&nbsp; Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;Sample Vision&nbsp;</p>\r\n'),
 (3,'History','<p>&nbsp; &nbsp; &nbsp; &nbsp; Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;Sample History&nbsp;</p>\r\n');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`device_name`
--

DROP TABLE IF EXISTS `device_name`;
CREATE TABLE `device_name` (
  `dev_id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`device_name`
--

/*!40000 ALTER TABLE `device_name` DISABLE KEYS */;
INSERT INTO `device_name` (`dev_id`,`dev_name`) VALUES 
 (5,'AVR'),
 (8,'Monitor'),
 (9,'System Unit'),
 (10,'Mouse'),
 (11,'Keyboard'),
 (12,'CD Room'),
 (13,'Tablet '),
 (14,'Laptop'),
 (15,'Table '),
 (16,'Chair'),
 (17,'Printer'),
 (18,'DSLR');
/*!40000 ALTER TABLE `device_name` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`location_details`
--

DROP TABLE IF EXISTS `location_details`;
CREATE TABLE `location_details` (
  `Id_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_id` int(11) DEFAULT NULL,
  `date_deployment` date DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `type` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`location_details`
--

/*!40000 ALTER TABLE `location_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `location_details` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`recyclebin`
--

DROP TABLE IF EXISTS `recyclebin`;
CREATE TABLE `recyclebin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dev_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dev_desc` varchar(128) NOT NULL DEFAULT '',
  `dev_serial` varchar(128) NOT NULL DEFAULT '',
  `dev_brand` varchar(128) NOT NULL DEFAULT '',
  `dev_model` varchar(128) NOT NULL DEFAULT '',
  `dev_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=508 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`recyclebin`
--

/*!40000 ALTER TABLE `recyclebin` DISABLE KEYS */;
INSERT INTO `recyclebin` (`id`,`dev_id`,`dev_desc`,`dev_serial`,`dev_brand`,`dev_model`,`dev_status`) VALUES 
 (504,5,'<p>O yes&nbsp;</p>\r\n','S1RKS-11082-SJKEL','HP','Super Model','Deadpool'),
 (505,7,'<p>Baby</p>\r\n\r\n<p>&nbsp;</p>\r\n','S1RKS-11082-Szzzz','Samsung','A-11P Super Model','Deadpool'),
 (506,6,'<p>my gosh</p>\r\n','123LK-KI1JS-GISP1-10SJK','Lenovo','Super Heavy Model','Deadpool'),
 (507,9,'<p>all right</p>\r\n','S1RKS-11082-SJKEL','Lenovo','Super Heavy Model','Deadpool');
/*!40000 ALTER TABLE `recyclebin` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`sets`
--

DROP TABLE IF EXISTS `sets`;
CREATE TABLE `sets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(125) NOT NULL DEFAULT '',
  `Status` varchar(125) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`sets`
--

/*!40000 ALTER TABLE `sets` DISABLE KEYS */;
/*!40000 ALTER TABLE `sets` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`stdevice`
--

DROP TABLE IF EXISTS `stdevice`;
CREATE TABLE `stdevice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dev_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dev_desc` varchar(45) NOT NULL DEFAULT '',
  `dev_serial` varchar(45) NOT NULL DEFAULT '',
  `dev_brand` varchar(45) NOT NULL DEFAULT '',
  `dev_model` varchar(45) NOT NULL DEFAULT '',
  `dev_status` varchar(45) NOT NULL DEFAULT '',
  `assigned_set` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`stdevice`
--

/*!40000 ALTER TABLE `stdevice` DISABLE KEYS */;
/*!40000 ALTER TABLE `stdevice` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`stlocation`
--

DROP TABLE IF EXISTS `stlocation`;
CREATE TABLE `stlocation` (
  `stdev_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_location_name` varchar(100) DEFAULT NULL,
  `thumbnails` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`stdev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`stlocation`
--

/*!40000 ALTER TABLE `stlocation` DISABLE KEYS */;
INSERT INTO `stlocation` (`stdev_id`,`stdev_location_name`,`thumbnails`) VALUES 
 (8,'PL1','images/thumbnails.jpg'),
 (9,'PL3','images/thumbnails.jpg'),
 (10,'PL2','images/thumbnails.jpg');
/*!40000 ALTER TABLE `stlocation` ENABLE KEYS */;


--
-- Table structure for table `thesis`.`user_log`
--

DROP TABLE IF EXISTS `user_log`;
CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `login_date` varchar(50) DEFAULT NULL,
  `logout_date` varchar(50) DEFAULT NULL,
  `admin_id` int(128) DEFAULT NULL,
  `client_id` int(128) DEFAULT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`.`user_log`
--

/*!40000 ALTER TABLE `user_log` DISABLE KEYS */;
INSERT INTO `user_log` (`user_log_id`,`username`,`login_date`,`logout_date`,`admin_id`,`client_id`) VALUES 
 (29,'admin','2016-02-19 17:38:29','2017-02-09',1,NULL),
 (30,'admin','2016-02-19 18:05:28','2017-02-09',1,NULL),
 (31,'admin','2016-02-19 18:15:00','2017-02-09',1,NULL),
 (32,'admin','2016-02-19 18:18:11','2017-02-09',1,NULL),
 (33,'admin','2016-02-19 18:18:26','2017-02-09',1,NULL),
 (34,'admin','2017-01-20 10:50:30','2017-02-09',1,NULL),
 (35,'admin','2017-01-20 19:02:38','2017-02-09',1,NULL),
 (36,'admin','2017-01-20 21:21:32','2017-02-09',1,NULL),
 (37,'admin','2017-01-21 22:06:09','2017-02-09',1,NULL),
 (38,'admin','2017-01-21 22:06:11','2017-02-09',1,NULL),
 (39,'admin','2017-01-22 07:35:25','2017-02-09',1,NULL),
 (40,'admin','2017-01-23 09:28:19','2017-02-09',1,NULL),
 (41,'admin','2017-01-23 09:35:07','2017-02-09',1,NULL),
 (42,'admin','2017-01-27 17:15:17','2017-02-09',1,NULL),
 (43,'admin','2017-01-28 22:06:31','2017-02-09',1,NULL),
 (44,'admin','2017-01-29 05:24:26','2017-02-09',1,NULL),
 (45,'admin','2017-01-30 23:57:49','2017-02-09',1,NULL);
INSERT INTO `user_log` (`user_log_id`,`username`,`login_date`,`logout_date`,`admin_id`,`client_id`) VALUES 
 (46,'admin','2017-02-05 13:43:34','2017-02-09',1,NULL),
 (47,'admin','2017-02-06 07:30:00','2017-02-09',1,NULL),
 (48,'admin','2017-02-07 07:59:45','2017-02-09',1,NULL),
 (49,'admin','2017-02-08 20:14:55','2017-02-09',1,NULL),
 (50,'admin','2017-02-08 22:48:00','2017-02-09',1,NULL),
 (51,'admin','2017-02-09 18:09:25','2017-02-09',1,NULL),
 (52,'admin','2017-02-10 01:45:33',NULL,1,NULL);
/*!40000 ALTER TABLE `user_log` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
