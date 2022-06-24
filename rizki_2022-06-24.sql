# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.32)
# Database: rizki
# Generation Time: 2022-06-24 16:45:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;

INSERT INTO `contact` (`id`, `gambar`, `title`, `deskripsi`, `created_at`, `updated_at`)
VALUES
	(1,'2022061308121562a6f15f00f7d.webp','Phone','+62 896 8896 1400','2022-06-13 15:12:15','2022-06-13 08:12:15'),
	(2,'2022061308140462a6f1cccf4f7.webp','Email','ikifirdaus@gmail.com','2022-06-13 15:14:04','2022-06-13 08:14:04'),
	(3,'2022061308144362a6f1f3bf06c.webp','Address','Jl. Kp. Patrol Rancaekek','2022-06-13 15:14:43','2022-06-13 08:14:43'),
	(4,'2022061308145562a6f1ff49b2b.webp','Full Time Remote','I am available for Full Time Remote hire.','2022-06-24 19:16:22','2022-06-24 12:16:22');

/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contact_form
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact_form`;

CREATE TABLE `contact_form` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `subject` text,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table education
# ------------------------------------------------------------

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;

INSERT INTO `education` (`id`, `tanggal`, `title`, `deskripsi`, `created_at`, `updated_at`)
VALUES
	(2,'2021-Present','Example - Example Inc.','Collaborate with creative and development teams on the execution of ideas.','2022-06-24 20:52:30','2022-06-24 13:52:30');

/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table experience
# ------------------------------------------------------------

DROP TABLE IF EXISTS `experience`;

CREATE TABLE `experience` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;

INSERT INTO `experience` (`id`, `tanggal`, `title`, `deskripsi`, `created_at`, `updated_at`)
VALUES
	(2,'2021-Present','Example - Example Inc.','Collaborate with creative and development teams on the execution of ideas.','2022-06-24 20:52:03','2022-06-24 13:52:03');

/*!40000 ALTER TABLE `experience` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table home
# ------------------------------------------------------------

DROP TABLE IF EXISTS `home`;

CREATE TABLE `home` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gambar_home` varchar(200) DEFAULT NULL,
  `title_home` varchar(200) DEFAULT NULL,
  `deskripsi_home` text,
  `email` varchar(200) DEFAULT NULL,
  `telephone` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;

INSERT INTO `home` (`id`, `gambar_home`, `title_home`, `deskripsi_home`, `email`, `telephone`, `created_at`, `updated_at`)
VALUES
	(7,'20220607120054629f3df644878.png','Welcome to My Website','Hello! I’m Rizki Firdaussahlan. Web developer from INDONESIA, Bandung, Jawa Barat. I have rich experience in web site design and building, also I am good at laravel. I love to talk with you about our unique.','ikifirdaus@gmail.com','+62 896 8896 1400','2022-06-07 19:00:54','2022-06-07 12:00:54');

/*!40000 ALTER TABLE `home` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table knowledge
# ------------------------------------------------------------

DROP TABLE IF EXISTS `knowledge`;

CREATE TABLE `knowledge` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `knowledge` WRITE;
/*!40000 ALTER TABLE `knowledge` DISABLE KEYS */;

INSERT INTO `knowledge` (`id`, `deskripsi`, `created_at`, `updated_at`)
VALUES
	(1,'Website Hosting','2022-06-07 14:46:31','2022-06-07 14:46:31'),
	(2,'Git System','2022-06-16 21:02:40','2022-06-16 14:02:40'),
	(3,'Laravel Framework','2022-06-16 21:02:46','2022-06-16 14:02:46'),
	(4,'Slicing Design to HTML','2022-06-16 21:07:25','2022-06-16 14:07:25');

/*!40000 ALTER TABLE `knowledge` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(5,'2022_06_13_050318_create_notifications_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table notifications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table portfolio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `deskripsi_singkat` text,
  `deskripsi_lengkap` text,
  `url` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;

INSERT INTO `portfolio` (`id`, `gambar`, `tanggal`, `title`, `deskripsi_singkat`, `deskripsi_lengkap`, `url`, `created_at`, `updated_at`)
VALUES
	(3,'20220607154038629f7176e58f7.png','2022-06-07','Example','For me, the design — it is the quality of life. Good design has little to do with trends. Designers do not only image-makers, but also dreamers who tell stories and think. For me, all the things a good story is more important than its forms.','For me, the design — it is the quality of life. Good design has little to do with trends. Designers do not only image-makers, but also dreamers who tell stories and think. For me, all the things a good story is more important than its form.\r\n\r\nFor me, the design — it is the quality of life. Good design has little to do with trends. Designers do not only image-makers, but also dreamers who tell stories and think. For me, all the things a good story is more important than its form.','ikkubaruofficial.com','2022-06-24 20:53:32','2022-06-24 13:53:32');

/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profile
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gambar_profile` varchar(200) DEFAULT NULL,
  `deskripsi_profile` text,
  `age` varchar(100) DEFAULT NULL,
  `freelance` varchar(200) DEFAULT NULL,
  `telephone` varchar(200) DEFAULT NULL,
  `residence` varchar(200) DEFAULT NULL,
  `address` text,
  `email` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;

INSERT INTO `profile` (`id`, `gambar_profile`, `deskripsi_profile`, `age`, `freelance`, `telephone`, `residence`, `address`, `email`, `created_at`, `updated_at`)
VALUES
	(4,'20220607132400629f517011e5c.png','In 2021 i start to learned about Web Programming. I took an online course at BuildWith Angga (BWA) and i studied about Full Stack Web Developer.\r\n\r\nCurrently working as Web Developer and almost in 2 years i involved with several projects. Start to understand client’s needs and translate them into the lines of codes.','34','Available','+62 896 8896 1400','INDONESIA','Bandung','ikifirdaus@gmail.com','2022-06-16 15:22:14','2022-06-16 08:22:14');

/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gambar_icon` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `gambar_icon`, `title`, `deskripsi`, `created_at`, `updated_at`)
VALUES
	(7,'2022061413144762a889c761147.webp','Web Development','Blablabalbalbalbalbalbalbalablablblab\r\nbalbalbalabl','2022-06-14 13:14:47','2022-06-14 13:14:47');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'admin','ikifirdaus@gmail.com',NULL,'$2y$10$r/.L7Ay9DynvqXq8NZ7GT.96ZtQC2i3w9CM.K6YoZFf1LN9BSMVi.',NULL,'2022-06-04 12:34:48','2022-06-04 12:34:48'),
	(2,'admin','admin@gmail.com',NULL,'$2y$10$uvC0z9Z.hX.XFcpxVsis.OWaUqHrGhumT/GXilwnFZ7EPxt2jLSlu',NULL,'2022-06-13 06:01:08','2022-06-13 06:01:08');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
