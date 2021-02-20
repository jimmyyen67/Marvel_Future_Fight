# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.22)
# Database: MarvelFutureFight
# Generation Time: 2021-02-20 09:42:26 +0000
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
  `tier` float DEFAULT NULL,
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
	(7,'金鋼狼',3,1,'70','60.14','200.00','50.00','50.00'),
	(8,'驚奇先生',3,1,'70','51.53','189.92','50.00','50.00'),
	(9,'奇異博士',3,2,'70','53.21','200.00','50.00','50.00'),
	(10,'死侍',3,3,'70','70.85','182.11','48.02','50.00'),
	(11,'納摩',3,1,'70','50.79','183.37','50.00','50.00'),
	(12,'獨眼龍',3,2,'70','39.93','192.99','50.00','50.00'),
	(13,'萬磁王',3,2,'70','68.09','200.00','50.00','50.00'),
	(14,'美國隊長',3,1,'70','45.54','200.00','50.00','50.00'),
	(15,'星爵',3,2,'70','51.49','179.53','50.00','50.00'),
	(16,'雪倫羅傑斯',3,2,'70','32.16','165.47','50.00','50.00'),
	(17,'鋼鐵人',3,2,'70','60.49','197.58','50.00','50.00'),
	(18,'冰月花雪',3,3,'70','36.31','200.00','50.00','50.00'),
	(19,'蜘蛛人',3,3,'70','37.00','160.06','50.00','50.00'),
	(20,'蟻人',3,3,'70','42.38','177.72','50.00','50.00'),
	(21,'洛基',3,4,'70','57.23','179.19','50.00','50.00'),
	(22,'索爾',3,4,'70','60.93','200.00','50.00','50.00'),
	(23,'驚奇隊長',3,4,'70','52.68','168.94','50.00','50.00'),
	(24,'哨兵',3,4,'66','52.60','147.09','45.03','42.44'),
	(25,'貝塔雷比爾',2.5,4,'70','36.01','178.52','50.00','50.00'),
	(26,'魔形女',2.5,3,'70','31.79','188.79','50.00','50.00'),
	(27,'浩克趙',2.5,1,'70','61.91','180.48','50.00','50.00'),
	(28,'瓦爾基麗',2.5,1,'70','64.36','169.75','50.00','50.00'),
	(29,'紅色守衛者',2.5,1,'70','28.05','177.90','50.00','50.00'),
	(30,'紅骷髏',2.5,2,'70','59.66','181.71','50.00','50.00'),
	(31,'青龍',2.5,2,'70','56.90','156.67','50.00','50.00'),
	(32,'八爪博士',2.5,3,'70','50.22','164.20','50.00','50.00'),
	(33,'鳳皇',2.5,3,'70','28.73','156.24','50.00','50.00');

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
	(14,14,25,25,25,25),
	(16,19,25,25,25,25),
	(17,16,25,25,25,25),
	(18,23,25,25,25,25),
	(19,22,25,25,25,25),
	(20,21,25,25,25,25),
	(21,20,25,25,25,25),
	(22,18,25,25,25,25),
	(23,17,25,25,25,25),
	(24,15,25,25,25,25),
	(25,24,20,20,20,20),
	(26,25,25,25,25,25),
	(27,29,25,25,25,25),
	(28,27,25,25,25,25),
	(29,28,25,25,25,25),
	(30,26,25,25,25,25),
	(31,33,25,25,25,25),
	(32,30,25,25,25,25),
	(33,31,25,25,25,25),
	(34,32,25,25,25,25);

/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table isotope
# ------------------------------------------------------------

DROP TABLE IF EXISTS `isotope`;

CREATE TABLE `isotope` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ch_id` int NOT NULL,
  `isotope` int DEFAULT NULL,
  `rank` int DEFAULT NULL,
  `iso_1` tinyint DEFAULT NULL,
  `star_1` tinyint(1) DEFAULT NULL,
  `value_11` varchar(20) DEFAULT NULL,
  `value_12` varchar(20) DEFAULT NULL,
  `iso_2` tinyint DEFAULT NULL,
  `star_2` tinyint(1) DEFAULT NULL,
  `value_21` varchar(20) DEFAULT NULL,
  `value_22` varchar(20) DEFAULT NULL,
  `iso_3` tinyint DEFAULT NULL,
  `star_3` tinyint(1) DEFAULT NULL,
  `value_31` varchar(20) DEFAULT NULL,
  `value_32` varchar(20) DEFAULT NULL,
  `iso_4` tinyint DEFAULT NULL,
  `star_4` tinyint(1) DEFAULT NULL,
  `value_41` varchar(20) DEFAULT NULL,
  `value_42` varchar(20) DEFAULT NULL,
  `iso_5` tinyint DEFAULT NULL,
  `star_5` tinyint(1) DEFAULT NULL,
  `value_51` varchar(20) DEFAULT NULL,
  `value_52` varchar(20) DEFAULT NULL,
  `iso_6` tinyint DEFAULT NULL,
  `star_6` tinyint(1) DEFAULT NULL,
  `value_61` varchar(20) DEFAULT NULL,
  `value_62` varchar(20) DEFAULT NULL,
  `iso_7` tinyint DEFAULT NULL,
  `star_7` tinyint(1) DEFAULT NULL,
  `value_71` varchar(20) DEFAULT NULL,
  `value_72` varchar(20) DEFAULT NULL,
  `iso_8` tinyint DEFAULT NULL,
  `star_8` tinyint(1) DEFAULT NULL,
  `value_81` varchar(20) DEFAULT NULL,
  `value_82` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `isotope` WRITE;
/*!40000 ALTER TABLE `isotope` DISABLE KEYS */;

INSERT INTO `isotope` (`id`, `ch_id`, `isotope`, `rank`, `iso_1`, `star_1`, `value_11`, `value_12`, `iso_2`, `star_2`, `value_21`, `value_22`, `iso_3`, `star_3`, `value_31`, `value_32`, `iso_4`, `star_4`, `value_41`, `value_42`, `iso_5`, `star_5`, `value_51`, `value_52`, `iso_6`, `star_6`, `value_61`, `value_62`, `iso_7`, `star_7`, `value_71`, `value_72`, `iso_8`, `star_8`, `value_81`, `value_82`)
VALUES
	(1,1,1,12,1,1,'所攻','',2,1,'能攻','',3,1,'所防','',8,1,'所攻','所防',8,1,'所攻','HP+',4,1,'所防','',6,1,'爆擊','',8,1,'能攻','HP+'),
	(2,2,2,12,1,1,'所攻','',1,1,'物攻','',2,1,'所攻','',3,1,'物防','',4,1,'所防','',6,1,'爆擊','',8,1,'所攻','HP+',8,1,'所攻','所防'),
	(3,33,3,6,1,NULL,'所攻','',2,NULL,'所攻','',3,NULL,'所防','',4,NULL,'所防','',5,1,'HP+','',6,NULL,'爆擊','',8,NULL,'物攻','迴避',8,NULL,'物攻','迴避'),
	(4,32,1,11,1,1,'所攻','',2,1,'所攻','',3,0,'所防','',4,1,'能防','',6,1,'爆擊','',8,1,'所攻','HP+',8,1,'所攻','迴避',8,1,'所攻','迴避'),
	(5,31,1,6,1,0,'所攻','',2,1,'所攻','',3,0,'所防','',4,0,'所防','',6,0,'爆擊','',8,0,'所攻','HP+',8,0,'所攻','HP+',8,0,'所攻','HP+'),
	(6,30,3,6,1,0,'所攻','',2,0,'所攻','',3,0,'所防','',4,0,'所防','',5,1,'HP+','',6,0,'爆擊','',8,0,'所攻','HP+',8,0,'所攻','HP+'),
	(7,29,3,6,1,0,'物攻','',2,0,'所攻','',3,0,'所防','',4,0,'所防','',6,0,'HP+','',5,1,'爆擊','',8,0,'物攻','HP+',8,0,'物攻','HP+'),
	(8,28,3,7,1,1,'所攻','',2,0,'所攻','',5,1,'HP+','',3,1,'所防','',4,0,'所防','',6,0,'爆擊','',8,0,'物攻','HP+',8,0,'物攻','HP+'),
	(9,27,1,7,1,0,'物攻','',2,0,'所攻','',3,1,'物防','',4,1,'所防','',6,0,'爆擊','',8,0,'物攻','迴避',8,0,'物攻','迴避',8,0,'物攻','HP+'),
	(10,26,1,6,1,NULL,'所攻','',2,NULL,'所攻','',3,NULL,'所防','',4,1,'所防','',6,NULL,'爆擊','',8,NULL,'所攻','HP+',8,NULL,'所攻','HP+',8,NULL,'所攻','HP+'),
	(11,25,3,11,1,1,'所攻','',2,1,'所攻','',3,1,'所防','',4,1,'所防','',5,1,'HP+','',6,1,'爆擊','',8,NULL,'所攻','HP+',8,1,'所攻','HP+'),
	(12,24,1,8,1,NULL,'所攻','',2,NULL,'所攻','',3,1,'所防','',4,1,'所防','',6,1,'爆擊','',8,NULL,'所攻','HP+',8,NULL,'所攻','HP+',8,NULL,'所攻','HP+'),
	(13,23,3,8,1,1,'所攻','',2,0,'所攻','',3,1,'所防','',4,0,'所防','',5,0,'HP+','',6,0,'爆擊','',8,0,'所攻','HP+',8,0,'所攻','HP+'),
	(14,22,3,9,1,1,'所攻','',2,0,'所攻','',3,0,'所防','',4,0,'所防','',6,1,'爆擊','',5,1,'HP+','',8,1,'能攻','HP+',8,0,'所攻','HP+'),
	(15,21,3,9,3,NULL,'所防','',6,NULL,'爆擊','',8,1,'能攻','HP+',1,NULL,'所攻','',5,1,'HP+','',8,1,'能攻','HP+',2,1,'所攻','',4,1,'所防',''),
	(16,20,3,7,1,NULL,'物攻','',2,NULL,'所攻','',3,NULL,'所防','',4,NULL,'所防','',6,1,'爆擊','',5,1,'HP+','',8,NULL,'所攻','能防',8,NULL,'所攻','HP+'),
	(17,19,3,10,1,1,'物攻','',2,NULL,'所攻','',3,1,'所防','',6,1,'爆擊','',4,1,'能防','',5,1,'HP+','',8,NULL,'所攻','HP+',8,1,'物攻','所防'),
	(18,18,3,8,1,1,'所攻','',2,NULL,'所攻','',3,NULL,'所防','',6,NULL,'爆擊','',4,NULL,'所防','',8,1,'所攻','所防',5,1,'HP+','',8,NULL,'所攻','HP+'),
	(19,17,3,8,5,1,'HP+','',1,1,'所攻','',6,0,'爆擊','',4,0,'所防','',2,1,'能攻','',8,0,'所攻','迴避',8,0,'所攻','HP+',3,0,'所防',''),
	(20,16,1,9,1,1,'所攻','',2,1,'能攻','',3,NULL,'所防','',4,NULL,'所防','',6,NULL,'爆擊','',8,1,'所攻','能防',8,NULL,'所攻','迴避',8,1,'能攻','物防'),
	(21,15,3,7,1,0,'所攻','',2,1,'能攻','',3,0,'所防','',4,0,'所防','',6,0,'爆擊','',5,1,'HP+','',8,0,'能攻','HP+',8,0,'所攻','能防'),
	(22,14,2,12,2,1,'所攻','',8,1,'所攻','HP+',8,1,'物攻','所防',1,1,'物攻','',1,1,'物攻','',6,1,'爆擊','',4,1,'所防','',3,1,'物防',''),
	(23,13,2,9,1,1,'所攻','',1,1,'所攻','',2,1,'所攻','',3,0,'所防','',4,0,'能防','',6,0,'爆擊','',8,1,'能攻','所防',8,0,'所攻','迴避'),
	(24,12,3,9,1,1,'所攻','',2,1,'能攻','',3,NULL,'所防','',8,NULL,'所攻','迴避',4,1,'所防','',8,1,'所攻','HP+',5,1,'HP+','',6,NULL,'爆擊',''),
	(25,3,3,12,1,1,'所攻','',2,1,'所攻','',3,1,'所防','',4,1,'所防','',6,1,'爆擊','',5,1,'HP+','',8,1,'所攻','HP+',8,1,'所攻','HP+'),
	(26,4,2,10,1,NULL,'所攻','',1,NULL,'所攻','',2,1,'所攻','',3,1,'物防','',4,1,'所防','',6,1,'爆擊','',8,1,'所攻','HP+',8,1,'所攻','HP+'),
	(27,5,2,12,1,1,'所攻','',1,1,'所攻','',2,1,'能攻','',3,1,'所防','',4,1,'所防','',6,1,'爆擊','',8,1,'所攻','HP+',8,1,'所攻','HP+'),
	(28,6,1,9,1,1,'所攻','',2,1,'所攻','',3,1,'物防','',4,1,'能防','',6,1,'爆擊','',8,NULL,'所攻','HP+',8,NULL,'所攻','HP+',8,NULL,'所攻','HP+'),
	(29,7,1,12,1,1,'所攻','',2,1,'所攻','',3,1,'所防','',4,1,'能防','',6,1,'爆擊','',8,1,'所攻','能防',8,1,'所攻','HP+',8,1,'物攻','HP+'),
	(30,8,1,12,1,1,'物攻','',2,1,'所攻','',3,1,'所防','',4,1,'能防','',6,1,'爆擊','',8,1,'所攻','HP+',8,1,'所攻','HP+',8,1,'所攻','HP+'),
	(31,9,2,10,1,1,'所攻','',2,1,'能攻','',8,NULL,'所攻','HP+',3,1,'物防','',4,1,'所防','',1,1,'所攻','',6,NULL,'爆擊','',8,1,'能攻','HP+'),
	(32,10,1,9,1,1,'所攻','',2,NULL,'所攻','',3,NULL,'所防','',4,1,'所防','',6,1,'爆擊','',8,NULL,'所攻','HP+',8,1,'所攻','HP+',8,1,'物攻','HP+'),
	(33,11,1,6,1,1,'物攻','',2,NULL,'所攻','',3,NULL,'所防','',4,NULL,'所防','',6,NULL,'爆擊','',8,NULL,'所攻','HP+',8,NULL,'所攻','HP+',8,NULL,'所攻','迴避');

/*!40000 ALTER TABLE `isotope` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table specials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `specials`;

CREATE TABLE `specials` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `ch_id` tinyint DEFAULT NULL,
  `special` tinyint DEFAULT NULL,
  `ignore` tinyint DEFAULT NULL,
  `value_1` varchar(50) DEFAULT NULL,
  `value_2` varchar(50) DEFAULT NULL,
  `value_3` varchar(50) DEFAULT NULL,
  `hp` tinyint DEFAULT NULL,
  `sec` tinyint DEFAULT NULL,
  `percent` int DEFAULT NULL,
  `power` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `specials` WRITE;
/*!40000 ALTER TABLE `specials` DISABLE KEYS */;

INSERT INTO `specials` (`id`, `ch_id`, `special`, `ignore`, `value_1`, `value_2`, `value_3`, `hp`, `sec`, `percent`, `power`)
VALUES
	(2,1,7,0,'39.0','','',40,5,0,0),
	(3,3,7,1,'37.0',NULL,NULL,50,4,NULL,NULL),
	(4,6,7,1,'42.0',NULL,NULL,40,5,NULL,NULL),
	(5,8,7,1,'29.3',NULL,NULL,40,4,NULL,NULL),
	(6,2,4,0,'26.3','','',0,0,10,200),
	(7,9,4,1,'35.5',NULL,NULL,0,0,10,140),
	(8,14,4,1,'45.0',NULL,NULL,0,0,10,180),
	(9,22,4,1,'44.5',NULL,NULL,0,0,10,160),
	(10,20,4,1,'25.8',NULL,NULL,0,0,10,140),
	(11,5,1,0,'31.8','31.7','',50,3,0,0),
	(12,11,1,0,'28.3','24.5',NULL,40,5,0,0),
	(13,19,1,0,'22.0','38.0',NULL,40,4,0,0),
	(14,13,2,0,'28.4','39.9',NULL,0,0,10,180),
	(15,10,3,0,'27.5','18.6','60',0,0,0,0),
	(16,7,5,1,'24.7',NULL,NULL,50,0,0,25),
	(17,23,3,0,'23.8','25.6','30',0,0,0,0),
	(18,24,3,0,'23.5','19.2','60',0,0,0,0),
	(19,4,0,0,'破防免疫','HP +22.2%','HP50% 無敵(4秒)',0,0,0,0),
	(20,12,0,0,'火焰傷害 +34.5%','爆擊傷害 +38.6%','10%機率 1次增傷 180%',0,0,0,0),
	(21,15,0,0,'破防免疫','無視迴避 33.9%','HP40% 無敵(3秒)',0,0,0,0),
	(22,16,0,0,'破防免疫','HP50% 無敵(4秒)','陷阱 抵禦',0,0,0,0),
	(23,17,0,0,'爆擊率 +20.4%','爆擊傷害 +35.8%','HP40% 無敵(4秒)',0,0,0,0),
	(24,18,0,0,'爆擊傷害 +32.3%','冷氣傷害 +34.8%','HP50% 無敵(3秒)',0,0,0,0),
	(25,21,0,0,'破防免疫','冷氣傷害 +31.3%','HP40% 無敵(5秒)',0,0,0,0),
	(26,25,1,0,'28.9','23.2',NULL,40,5,0,0),
	(27,26,0,0,'破防免疫','爆擊傷害 +30.1%','HP40% 無敵(5秒)',0,0,0,0),
	(28,27,0,0,'破防免疫','爆擊率 +21.6%','HP40% 無敵(3秒)',0,0,0,0),
	(29,28,0,0,'破防免疫','爆擊率 +25.1%','HP40% 無敵(5秒)',0,0,0,0),
	(30,29,0,0,'破防免疫','HP40% 無敵(4秒)','移動速度 抵禦',0,0,0,0),
	(31,33,1,0,'28.0','32.7',NULL,40,4,0,0),
	(32,32,1,0,'25.8','39.3',NULL,40,5,0,0),
	(33,31,0,0,'電擊傷害 +39.9%','爆擊率 +27.6%','HP50% 無敵(3秒)',0,0,0,0),
	(34,30,0,0,'爆擊率 +26.8%','無視迴避 27.5%','10%機率 1次增傷160%',0,0,0,0);

/*!40000 ALTER TABLE `specials` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
