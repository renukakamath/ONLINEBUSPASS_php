/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - online_bus_pass
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_bus_pass` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `online_bus_pass`;

/*Table structure for table `booking_child` */

DROP TABLE IF EXISTS `booking_child`;

CREATE TABLE `booking_child` (
  `booking_child_id` int(11) NOT NULL AUTO_INCREMENT,
  `seat_id` int(11) DEFAULT NULL,
  `from_place_id` int(11) DEFAULT NULL,
  `to_place_id` int(11) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`booking_child_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `booking_child` */

insert  into `booking_child`(`booking_child_id`,`seat_id`,`from_place_id`,`to_place_id`,`amount`) values 
(1,1,2,2,'1000'),
(2,2,2,3,'1000');

/*Table structure for table `bus` */

DROP TABLE IF EXISTS `bus`;

CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) DEFAULT NULL,
  `bus_registration` varchar(30) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL,
  `phone_no` varchar(30) DEFAULT NULL,
  `manufacturing_year` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `bus` */

insert  into `bus`(`bus_id`,`route_id`,`bus_registration`,`driver_name`,`phone_no`,`manufacturing_year`,`model`) values 
(1,1,'KL 07 BW 3993','driver','1234567890','2002','school bus'),
(2,2,'MP O3 MP 4025','driver2','1234567890','1998','Single-decker ');

/*Table structure for table `cancellation` */

DROP TABLE IF EXISTS `cancellation`;

CREATE TABLE `cancellation` (
  `cancel_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_child_id` int(11) DEFAULT NULL,
  `reason_for_cancellation` varchar(30) DEFAULT NULL,
  `cancel_datetime` varchar(30) DEFAULT NULL,
  `cancellation_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cancel_id`),
  KEY `cancel_id` (`cancel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cancellation` */

insert  into `cancellation`(`cancel_id`,`booking_child_id`,`reason_for_cancellation`,`cancel_datetime`,`cancellation_status`) values 
(1,1,'nothing','2022-08-20','canceled'),
(2,1,'nothing','2022-08-20','canceled');

/*Table structure for table `fares` */

DROP TABLE IF EXISTS `fares`;

CREATE TABLE `fares` (
  `fare_id` int(11) NOT NULL AUTO_INCREMENT,
  `starting_stop_id` int(11) DEFAULT NULL,
  `ending_stop_id` int(11) DEFAULT NULL,
  `amount_per_seat` varchar(30) DEFAULT NULL,
  `pass_amount` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`fare_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `fares` */

insert  into `fares`(`fare_id`,`starting_stop_id`,`ending_stop_id`,`amount_per_seat`,`pass_amount`) values 
(1,1,1,'1000','500');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `feedback_desc` varchar(30) DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`feedback_id`,`user_id`,`feedback_desc`,`date_time`) values 
(1,1,'good','2022-08-16');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `usertype` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values 
(1,'admin','admin','admin'),
(2,'user','user','Users'),
(3,'user1','user1','Users');

/*Table structure for table `pass_request` */

DROP TABLE IF EXISTS `pass_request`;

CREATE TABLE `pass_request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `fare_id` int(11) DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pass_request` */

insert  into `pass_request`(`request_id`,`user_id`,`fare_id`,`date_time`,`status`) values 
(1,1,1,'2022-08-16 16:19:17','accept');

/*Table structure for table `passes` */

DROP TABLE IF EXISTS `passes`;

CREATE TABLE `passes` (
  `pass_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) DEFAULT NULL,
  `issue_date` varchar(30) DEFAULT NULL,
  `valid_till` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`pass_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `passes` */

insert  into `passes`(`pass_id`,`request_id`,`issue_date`,`valid_till`) values 
(1,1,'2022-08-20','1 months');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `request_id` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`user_id`,`request_id`,`type`,`date_time`,`amount`,`status`) values 
(1,1,1,'pass','2022-09-01 14:49:34','1000','pending');

/*Table structure for table `place` */

DROP TABLE IF EXISTS `place`;

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `place` */

insert  into `place`(`place_id`,`place_name`) values 
(2,'ernakulam'),
(3,'tvm'),
(4,'kollam');

/*Table structure for table `renewal_request` */

DROP TABLE IF EXISTS `renewal_request`;

CREATE TABLE `renewal_request` (
  `renewal_id` int(11) NOT NULL AUTO_INCREMENT,
  `pass_id` int(11) DEFAULT NULL,
  `expiring_on` varchar(30) DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`renewal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `renewal_request` */

insert  into `renewal_request`(`renewal_id`,`pass_id`,`expiring_on`,`date_time`,`status`) values 
(1,1,'2022-07-15 16:20:05','2022-08-16 16:20:05','accept');

/*Table structure for table `route` */

DROP TABLE IF EXISTS `route`;

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL AUTO_INCREMENT,
  `starting_place_id` int(11) DEFAULT NULL,
  `ending_place_id` int(11) DEFAULT NULL,
  `route_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`route_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `route` */

insert  into `route`(`route_id`,`starting_place_id`,`ending_place_id`,`route_name`) values 
(1,2,3,'NH47 '),
(2,3,4,'route name..........');

/*Table structure for table `seats` */

DROP TABLE IF EXISTS `seats`;

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_id` int(11) DEFAULT NULL,
  `seat_number` varchar(30) DEFAULT NULL,
  `seat_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`seat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `seats` */

insert  into `seats`(`seat_id`,`bus_id`,`seat_number`,`seat_status`) values 
(1,1,'20','accept'),
(2,1,'15','accept'),
(3,1,'4','pending'),
(4,1,'45','pending'),
(5,2,'20','accept'),
(6,2,'2','accept'),
(7,2,'6','pending');

/*Table structure for table `stops` */

DROP TABLE IF EXISTS `stops`;

CREATE TABLE `stops` (
  `stop_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `arriving_date_time` varchar(30) DEFAULT NULL,
  `departure_date_time` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`stop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `stops` */

insert  into `stops`(`stop_id`,`place_id`,`route_id`,`arriving_date_time`,`departure_date_time`) values 
(1,2,1,'2022-08-26T16:16','2022-08-19T16:16');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`login_id`,`first_name`,`last_name`,`gender`,`dob`,`address`,`place`,`pincode`,`phone`,`email`) values 
(1,2,'user','qwerty','male','2022-08-12','address','ernakulam','682032','1234567890','user@gmail.com'),
(2,3,'user','user','male','2022-08-11','dfgjk','ghjk','235645','3456783456','student@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
