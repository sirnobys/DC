/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.8-MariaDB : Database - sos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sos`;

/*Table structure for table `loginform` */

DROP TABLE IF EXISTS `loginform`;

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `loginform` */

insert  into `loginform`(`id`,`username`,`password`) values 
(1,'admin','admin'),
(2,'admin','admin');

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(100) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `messages` */

insert  into `messages`(`id`,`message`,`location`,`date`,`time`,`status`) values 
(1,NULL,NULL,NULL,NULL,''),
(2,NULL,NULL,NULL,NULL,''),
(3,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1',NULL,NULL,''),
(4,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1189070999999995,-1.2936353&api=1','2019-11-29','12:30:43',''),
(5,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1189070999999995,-1.2936353&api=1','2019-11-29','12:30:44',''),
(6,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1142655999999995,-1.2951552&api=1','2019-12-04','17:36:52',''),
(7,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1142655999999995,-1.2951552&api=1','2019-12-04','17:41:02',''),
(8,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1142655999999995,-1.2951552&api=1','2019-12-04','17:41:19',''),
(9,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1142655999999995,-1.2951552&api=1','2019-12-04','17:41:20',''),
(10,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1142655999999995,-1.2951552&api=1','2019-12-04','17:41:23',''),
(11,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1142655999999995,-1.2951552&api=1','2019-12-04','17:41:23',''),
(12,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118911,-1.2938859&api=1','2019-12-04','17:44:02',''),
(13,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118911,-1.2938859&api=1','2019-12-04','17:44:09',''),
(14,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118909299999999,-1.2939042&api=1','2019-12-05','09:46:26',''),
(15,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118977999999999,-1.2939357999999999&api=1','2019-12-05','09:47:06',''),
(16,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118977999999999,-1.2939357999999999&api=1','2019-12-05','09:47:12',''),
(17,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118977999999999,-1.2939357999999999&api=1','2019-12-05','09:47:12',''),
(18,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118977999999999,-1.2939357999999999&api=1','2019-12-05','09:47:12',''),
(19,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118977999999999,-1.2939357999999999&api=1','2019-12-05','09:47:12',''),
(20,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118977999999999,-1.2939357999999999&api=1','2019-12-05','09:47:13',''),
(21,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1189838,-1.2939048&api=1','2019-12-05','09:47:46',''),
(22,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118932699999999,-1.2938144999999999&api=1','2019-12-05','13:49:41',''),
(23,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','13:56:15',''),
(24,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','13:58:28',''),
(25,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','13:58:31',''),
(26,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118901,-1.2937991&api=1','2019-12-05','14:01:44',''),
(27,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.118901,-1.2937991&api=1','2019-12-05','14:02:29',''),
(28,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','14:07:53',''),
(29,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','14:13:08',''),
(30,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','14:15:14','Pending'),
(31,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','14:15:16','Pending'),
(32,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','14:15:18','Pending'),
(33,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','14:15:28','Pending'),
(34,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1106446,-1.2987443&api=1','2019-12-05','14:18:55','Pending'),
(35,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1189889,-1.2939242&api=1','2019-12-05','14:29:56','Pending'),
(36,'','','2019-12-05','14:34:12','Pending'),
(37,'','','2019-12-05','14:34:17','Pending'),
(38,'','','2019-12-05','14:34:18','Pending'),
(39,'','','2019-12-05','14:34:19','Pending'),
(40,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1142655999999995,-1.2951552&api=1','2019-12-05','14:36:33','Pending'),
(41,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1188819,-1.2937102&api=1','2019-12-05','14:37:44','Pending'),
(42,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1188848,-1.2937732&api=1','2019-12-05','14:38:02','Pending'),
(43,'HELP ME!!!! find me with this link: ','https://www.google.com/maps/search/?query=5.1189307,-1.2939281&api=1','2019-12-05','14:43:56','Complete');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
