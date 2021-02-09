# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.22)
# Database: MarvelFutureFight
# Generation Time: 2021-02-09 12:07:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table charactors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `charactors`;

CREATE TABLE `charactors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `tier` tinyint DEFAULT NULL,
  `attribute` tinyint DEFAULT NULL,
  `level` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `critical_hit` varchar(10) DEFAULT NULL,
  `critical_rate` varchar(10) DEFAULT NULL,
  `ignore_defence` varchar(10) DEFAULT NULL,
  `cool_down` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `charactors` WRITE;
/*!40000 ALTER TABLE `charactors` DISABLE KEYS */;

INSERT INTO `charactors` (`id`, `name`, `tier`, `attribute`, `level`, `critical_hit`, `critical_rate`, `ignore_defence`, `cool_down`)
VALUES
	(1,'緋紅女巫',3,2,'70','59.45','200.00','50.00','50.00'),
	(2,'快銀',3,3,'70','46.53','196.51','50.00','50.00'),
	(3,'薩諾斯',3,4,'70','50.43','200.00','50.00','50.00'),
	(4,'銀色衝浪手',3,4,'70','59.02','179.98','50.00','50.00'),
	(5,'天啓',3,1,'70','43.47','159.61','50.00','50.00'),
	(6,'琴葛雷',3,4,'70','63.13','200.00','50.00','50.00'),
	(7,'金鋼狼',3,1,'70','55.51','200.00','50.00','50.00'),
	(8,'驚奇先生',3,1,'70','51.53','189.92','50.00','50.00'),
	(9,'奇異博士',3,2,'70','53.21','200.00','50.00','50.00'),
	(10,'死侍',3,3,'70','43.37','182.11','48.02','50.00'),
	(11,'納摩',3,1,'70','50.79','183.37','50.00','50.00'),
	(12,'獨眼龍',3,2,'70','39.93','192.99','50.00','50.00'),
	(13,'萬磁王',3,2,'70','68.09','200.00','50.00','50.00'),
	(14,'美國隊長',3,1,'70','45.54','200.00','50.00','50.00');

/*!40000 ALTER TABLE `charactors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table equipment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `equipment`;

CREATE TABLE `equipment` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ch_id` int DEFAULT NULL,
  `equip_1` tinyint DEFAULT NULL,
  `equip_2` tinyint DEFAULT NULL,
  `equip_3` tinyint DEFAULT NULL,
  `equip_4` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;

INSERT INTO `equipment` (`id`, `ch_id`, `equip_1`, `equip_2`, `equip_3`, `equip_4`)
VALUES
	(1,1,25,25,25,25),
	(2,2,25,25,25,25),
	(3,3,25,25,25,25),
	(4,5,25,25,25,25),
	(5,4,25,25,25,25),
	(6,6,25,25,25,25),
	(7,9,25,25,25,25),
	(8,8,25,25,25,25),
	(9,7,25,25,25,25),
	(10,12,25,25,25,25),
	(11,11,25,25,25,25),
	(12,10,25,25,25,25),
	(13,13,25,25,25,25),
	(14,14,25,25,25,25);

/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table specials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `specials`;

CREATE TABLE `specials` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ch_id` int DEFAULT NULL,
  `special` int DEFAULT NULL,
  `value1` int DEFAULT NULL,
  `value2` int DEFAULT NULL,
  `value3` int DEFAULT NULL,
  `value4` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
