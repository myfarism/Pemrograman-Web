-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping database structure for portfolio_db
CREATE DATABASE IF NOT EXISTS `portfolio_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `portfolio_db`;

-- Dumping structure for table portfolio_db.about
CREATE TABLE IF NOT EXISTS `about` (
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfolio_db.about: ~0 rows (approximately)
INSERT INTO `about` (`content`) VALUES
	('Hello! I’m Faris, a student at Pembangunan Jaya University majoring in Informatics. I have a keen interest in Mobile Developer and am actively involved in Bangkit Academy Program. Outside of my studies, I enjoy music and film. I’m always eager to learn new things and open to collaboration. Feel free to reach out!');

-- Dumping structure for table portfolio_db.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_instagram` varchar(50) DEFAULT NULL,
  `link_github` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfolio_db.contact: ~0 rows (approximately)
INSERT INTO `contact` (`email`, `phone`, `link_instagram`, `link_github`) VALUES
	('farishafizh19@gmail.com', '+62 8810 2520 1548', 'https://www.instagram.com/farishafizh/', 'https://github.com/myfarism');

-- Dumping structure for table portfolio_db.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) NOT NULL,
  `caption` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfolio_db.gallery: ~4 rows (approximately)
INSERT INTO `gallery` (`id`, `image_url`, `caption`) VALUES
	(1, 'assets/img/IMG_0935.JPEG', 'Merapi'),
	(2, 'assets/img/IMG_2115.JPEG', 'GBK'),
	(3, 'assets/img/IMG_2147.JPEG', 'So7'),
	(4, 'assets/img/IMG_2162.PNG', 'Lulus SMK'),
	(5, 'assets/img/IMG_5507.JPEG', 'Fam'),
	(6, 'assets/img/IMG_6079.JPEG', 'Bromo');

-- Dumping structure for table portfolio_db.intro
CREATE TABLE IF NOT EXISTS `intro` (
  `title` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfolio_db.intro: ~0 rows (approximately)
INSERT INTO `intro` (`title`, `content`) VALUES
	('-Hello World', 'I\'m Faris Hafizh, a mobile developer, music and film enthusiast');

-- Dumping structure for table portfolio_db.sertif
CREATE TABLE IF NOT EXISTS `sertif` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfolio_db.sertif: ~7 rows (approximately)
INSERT INTO `sertif` (`id`, `title`, `image_url`, `link`) VALUES
	(3, 'Belajar Membuat Aplikasi Untuk Pemula', 'assets/project/Belajar Membuat Aplikasi Untuk Pemula.png', 'https://www.dicoding.com/certificates/1OP8458OLZQK'),
	(4, 'Memulai Pemrograman Dengan Kotlin', 'assets/project/Memulai Pemrograman Dengan Kotlin.png', 'https://www.dicoding.com/certificates/2VX3R8N1JZYQ'),
	(5, 'Belajar Fundamental Aplikasi Android', 'assets/project/Belajar Fundamental Aplikasi Android.png', 'https://www.dicoding.com/certificates/N9ZOYY710PG5'),
	(6, 'Memulai Dasar Pemrograman untuk Menjadi Pengembang Software', 'assets/project/1.png', 'https://www.dicoding.com/certificates/GRX5O8JYKP0M'),
	(7, 'Pengenalan ke Logika Pemrograman (Programming Logic 101)', 'assets/project/Pengenalan ke Logika Pemrograman (Programming Logic 101).png', 'https://www.dicoding.com/certificates/MRZME1WQ0PYQ'),
	(9, 'Belajar Dasar Git dengan Github', 'assets/project/Belajar Dasar Git dengan Github.png', 'https://www.dicoding.com/certificates/NVP7QDNJWZR0'),
	(10, 'Belajar Dasar AI', 'assets/project/Belajar Dasar AI.png', 'https://www.dicoding.com/certificates/L4PQ5GKMQZO1');

-- Dumping structure for table portfolio_db.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(100) NOT NULL,
  `skill_type` enum('hard','soft') NOT NULL,
  `skill_level` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfolio_db.skills: ~6 rows (approximately)
INSERT INTO `skills` (`id`, `skill_name`, `skill_type`, `skill_level`) VALUES
	(1, 'PHP', 'hard', 85),
	(2, 'JavaScript', 'hard', 80),
	(3, 'HTML/CSS', 'hard', 90),
	(4, 'Communication', 'soft', 75),
	(5, 'Teamwork', 'soft', 80),
	(6, 'Problem Solving', 'soft', 70);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
