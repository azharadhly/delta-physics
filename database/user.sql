/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `users` (
	`id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
	`is_active` tinyint(5) NOT NULL DEFAULT 0,
	`created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
	`name` varchar (600),
	`books` varchar (150)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci; 
insert into `users` (`id`, `username`, `email`, `password`, `is_active`, `created_at`, `updated_at`, `name`, `books`) values('1','Super Admin','admin@gmail.com','$2y$10$0XVvEecgEo9ZcaCXNkPeveHOUexF3iGqLXB8ca13Rg8.IPj.Gt6ni','0','2019-06-06 01:28:40','2019-10-27 21:59:41','Admin','1');
insert into `users` (`id`, `username`, `email`, `password`, `is_active`, `created_at`, `updated_at`, `name`, `books`) values('2','Adhly','user@gmail.com','$2y$10$/3nxyUEb88tsyems/9QwV.D/HBIGy45wtGnDipZmTKo/DYa/zLcYi','0','0000-00-00 00:00:00',NULL,'user','2');
insert into `users` (`id`, `username`, `email`, `password`, `is_active`, `created_at`, `updated_at`, `name`, `books`) values('81','adhly','ceo12345@gmail.com','$2y$10$BcaRidBCm/tKV2Y8Wp9hp.dspeleo2OSR7YJqWq8nxpG0dhJ1haBm','0','0000-00-00 00:00:00',NULL,'azhar',NULL);
--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
