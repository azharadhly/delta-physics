/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `category` (
	`id` int(11) NOT NULL,
    `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
	`active` int(11) DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci; 


