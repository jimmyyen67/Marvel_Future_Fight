# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.22)
# Database: MarvelFutureFight
# Generation Time: 2021-02-01 10:36:43 +0000
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
  `id` int NOT NULL AUTO_INCREMENT,
  `charactorName` varchar(50) DEFAULT NULL,
  `tierLevel` int DEFAULT NULL,
  `attribute` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `charactors` WRITE;
/*!40000 ALTER TABLE `charactors` DISABLE KEYS */;

INSERT INTO `charactors` (`id`, `charactorName`, `tierLevel`, `attribute`)
VALUES
	(1,'緋紅女巫',3,2),
	(2,'快銀',3,3),
	(3,'薩諾斯',3,4),
	(4,'銀河衝浪手',3,4),
	(5,'天啓',3,1),
	(6,'琴葛雷',3,2),
	(7,'金鋼狼',3,1),
	(8,'驚奇先生',3,1),
	(9,'奇異博士',3,2),
	(10,'死侍',3,3),
	(11,'納摩',3,1),
	(12,'獨眼龍',3,2),
	(13,'萬磁王',3,2),
	(14,'美國隊長',3,1),
	(15,'星爵',3,2),
	(16,'雪倫羅傑斯',3,2),
	(17,'鋼鐵人',3,2),
	(18,'冰月花雪',3,3),
	(19,'蜘蛛人',3,3),
	(20,'蟻人',3,3),
	(21,'洛基',3,4),
	(22,'索爾',3,4),
	(23,'驚奇隊長',3,4),
	(24,'哨兵',3,4),
	(25,'貝塔雷比爾',5,4),
	(26,'魔形女',5,3),
	(27,'浩克趙',5,1),
	(28,'紅色守衛者',5,1),
	(29,'紅骷髏',5,2),
	(30,'青龍',5,2),
	(31,'八爪博士',5,3),
	(32,'鳳皇',5,3),
	(33,'瓦爾基麗',5,1);

/*!40000 ALTER TABLE `charactors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table qualities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `qualities`;

CREATE TABLE `qualities` (
  `id` int unsigned NOT NULL,
  `criticalHit` tinytext,
  `criticalRate` tinytext,
  `ignoreDefence` tinytext,
  `coolDown` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `qualities` WRITE;
/*!40000 ALTER TABLE `qualities` DISABLE KEYS */;

INSERT INTO `qualities` (`id`, `criticalHit`, `criticalRate`, `ignoreDefence`, `coolDown`)
VALUES
	(1,'59.45','200.00','50.0','50.0');

/*!40000 ALTER TABLE `qualities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int unsigned NOT NULL,
  `skillName` varchar(50) DEFAULT NULL,
  `attribute` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
