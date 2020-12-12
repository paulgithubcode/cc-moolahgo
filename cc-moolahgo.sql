/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.3.16-MariaDB : Database - moolahgo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`moolahgo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `moolahgo`;

/*Table structure for table `referral` */

DROP TABLE IF EXISTS `referral`;

CREATE TABLE `referral` (
  `userid_referrer` int(11) NOT NULL,
  `userid_referred` int(11) NOT NULL,
  `referral_code` varchar(6) DEFAULT NULL,
  `ruleid` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`userid_referrer`,`userid_referred`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `referral` */

insert  into `referral`(`userid_referrer`,`userid_referred`,`referral_code`,`ruleid`,`created_date`,`modified_date`) values (0,1,NULL,1,'2020-12-12 22:40:06',NULL),(1,2,'MKAWH0',1,'2020-12-12 22:40:06',NULL);

/*Table structure for table `rule` */

DROP TABLE IF EXISTS `rule`;

CREATE TABLE `rule` (
  `ruleid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rule_valid_from_time` datetime DEFAULT NULL,
  `rule_valid_to_time` datetime DEFAULT NULL,
  `credit_referrer` int(11) DEFAULT NULL,
  `credit_referred` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ruleid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `rule` */

insert  into `rule`(`ruleid`,`rule_valid_from_time`,`rule_valid_to_time`,`credit_referrer`,`credit_referred`,`active`,`created_date`,`modified_date`) values (1,'2020-12-12 10:57:38','2020-12-12 10:57:44',500,20,1,'2020-12-12 10:58:11','2020-12-12 10:58:15');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `code` varchar(6) DEFAULT NULL,
  `active` int(11) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`userid`,`first_name`,`last_name`,`email`,`phone_number`,`password`,`code`,`active`,`created_date`,`modified_date`) values (1,'paul','.','paul@mail.com','08159719033','9cc869df9bcd5ca4baaf0e8986d14f12','MKAWH0',1,'2020-12-12 22:40:05',NULL),(2,'Ariyani','W','arw@mail.com','08159903135','9cc869df9bcd5ca4baaf0e8986d14f12','DAX12B',1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
