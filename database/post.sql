/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `posts` (
 `id` int(11) NOT NULL,
`title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `summary` text COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
	`user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_persian_ci,
	`status` enum('disable','enable') COLLATE utf8_persian_ci NOT NULL DEFAULT 'disable',
  `selected` tinyint(5) NOT NULL DEFAULT 1,
	`published_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	`issue` varchar (300)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci; 
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('1','Chemistry','Molar mass','https://youtube.com/embed/UIwjmD8UofM','1','4','1681108707.jpg','enable','0','1970-01-01 01:00:00','2019-07-17 12:06:43','2023-08-19 21:29:54',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('2','Biology','respiration','https://youtube.com/embed/UIwjmD8UofM','1','3','1681107625.jpg','enable','0','1970-01-01 01:00:00','2019-07-17 12:07:21','2023-08-19 21:30:06',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('3','Biology','digestive system','https://youtube.com/embed/UIwjmD8UofM','1','3','1681107590.jpg','enable','0','1970-01-01 01:00:00','2022-06-19 22:37:55','2023-08-19 21:30:13',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('4','Maths','Trignometry','https://youtube.com/embed/UIwjmD8UofM','1','6','1681107543.jpg','enable','0','1970-01-01 01:00:00','2022-07-17 12:10:04','2023-08-19 21:30:27',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('12','Maths','Basic','https://youtube.com/embed/UIwjmD8UofM','1','6','1681107474.jpg','enable','0',NULL,'2023-04-09 17:29:29','2023-08-19 21:30:34',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('13','Physics','mechanics','https://youtube.com/embed/UIwjmD8UofM','1','8','1681108361.jpg','enable','0',NULL,'2023-04-09 17:29:29','2023-08-19 21:30:40',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('16','Physics','Speed,Velocity','https://youtube.com/embed/UIwjmD8UofM','1','8','1681113255.jpg','enable','0',NULL,'2023-04-10 13:24:15','2023-08-19 21:28:04',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('20','Physics','Vectors..','https://youtube.com/embed/UIwjmD8UofM','1','8','1682344224.jpg','enable','0',NULL,'2023-04-24 19:20:24','2023-08-19 21:27:44',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('32','Chemistry','Organic','https://youtube.com/embed/B-yLZeRJexk','1','4','1692084594.jpg','enable','0',NULL,'2023-08-15 12:59:54','2023-08-19 21:21:30',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('41','physics','mechanics','no','1','12','1692593156.pdf','enable','0',NULL,'2023-08-21 10:15:56','2023-08-21 10:17:23',NULL);
insert into `posts` (`id`, `title`, `summary`, `body`, `user_id`, `cat_id`, `image`, `status`, `selected`, `published_at`, `created_at`, `updated_at`, `issue`) values('42','Physics','vectors','no','1','12','1692593313.pdf','enable','0',NULL,'2023-08-21 10:18:33','2023-08-21 10:18:33',NULL);

-- -

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `user_id` (`user_id`);


--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
