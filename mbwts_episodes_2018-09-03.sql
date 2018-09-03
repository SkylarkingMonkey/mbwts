# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: mbwts_episodes
# Generation Time: 2018-09-03 19:53:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bitchin_episodes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bitchin_episodes`;

CREATE TABLE `bitchin_episodes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sequence` int(11) DEFAULT NULL,
  `title` text,
  `date` datetime DEFAULT NULL,
  `sharing` int(11) DEFAULT NULL,
  `podcast_link` text,
  `podcast_description` text,
  `podcast_duration` text,
  `podcast_file_size` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bitchin_episodes` WRITE;
/*!40000 ALTER TABLE `bitchin_episodes` DISABLE KEYS */;

INSERT INTO `bitchin_episodes` (`id`, `sequence`, `title`, `date`, `sharing`, `podcast_link`, `podcast_description`, `podcast_duration`, `podcast_file_size`)
VALUES
	(1,1,'2013 Muga Rioja','2018-09-01 02:00:00',324,'https://s3.us-east-2.amazonaws.com/podcastdatabase/Tinkered-Thinking-Episode-10-Priorities.mp3','Spain baby!  Bring on that traditional Rioja!  Suck it down and enjoy...','3:30',5059731),
	(2,2,'2014 Something Delicious','2018-09-01 02:00:00',289,'https://s3.us-east-2.amazonaws.com/podcastdatabase/Tinkered-Thinking-Episode-10-Priorities.mp3','Something Else to drink, listen to us, and worship our wisdom of wine!','3:30',5059731),
	(3,3,'2018 Lane & Northfield','2018-09-01 02:00:00',432,'https://s3.us-east-2.amazonaws.com/podcastdatabase/Tinkered-Thinking-Episode-10-Priorities.mp3','This is gonna be YUGE','3:30',5059731);

/*!40000 ALTER TABLE `bitchin_episodes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
