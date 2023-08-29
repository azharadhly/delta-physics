/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `categories` (
	`id` int(11) NOT NULL,
    `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
	`active` int(11) DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci; 
insert into `categories` (`id`, `name`, `active`) values('3','Biology','0');
insert into `categories` (`id`, `name`, `active`) values('4','Chemistry','1');
insert into `categories` (`id`, `name`, `active`) values('6','Maths','1');
insert into `categories` (`id`, `name`, `active`) values('8','physics','1');
insert into `categories` (`id`, `name`, `active`) values('12','Papers','1');

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;