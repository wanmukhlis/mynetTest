-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mynet
CREATE DATABASE IF NOT EXISTS `mynet` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mynet`;

-- Dumping structure for table mynet.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `ic_no` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL COMMENT 'default password = 12345',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table mynet.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `ic_no`, `email`, `password`, `created`, `modified`, `user_level`) VALUES
	(1, 'pengurus', 'pengurus', '12345', 'pengurus@yopmail.com', '12345', '2019-04-12 16:14:38', NULL, 1),
	(5, 'ahli', 'ahli', '12345', 'ahli@yopmail.com', '12345', '2019-04-15 01:42:15', '2019-04-15 12:20:59', 2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table mynet.user_levels
CREATE TABLE IF NOT EXISTS `user_levels` (
  `id` int(11) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table mynet.user_levels: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_levels` DISABLE KEYS */;
INSERT INTO `user_levels` (`id`, `description`) VALUES
	(1, 'Pengurus'),
	(2, 'Ahli');
/*!40000 ALTER TABLE `user_levels` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
