/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `contact` (
	`id` int (11),
	`name` varchar (1800),
	`email` varchar (1800),
	`subject` varchar (1800),
	`message` varchar (1800)
); 
insert into `contact` (`id`, `name`, `email`, `subject`, `message`) values('19','Adhy azhar','ceo@gmail.com','testing','i think success');
insert into `contact` (`id`, `name`, `email`, `subject`, `message`) values('20','shamil','shamil123@gmail.com','study',' i want to join\r\n');
