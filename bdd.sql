-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.28-log - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour dbweb
CREATE DATABASE IF NOT EXISTS `dbweb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbweb`;

-- Listage de la structure de la table dbweb. correspondance_forum_mess
CREATE TABLE IF NOT EXISTS `correspondance_forum_mess` (
  `id_forum` int(11) DEFAULT NULL,
  `id_message` int(11) DEFAULT NULL,
  KEY `id_message` (`id_message`),
  KEY `id_forum` (`id_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table dbweb.correspondance_forum_mess : ~0 rows (environ)
/*!40000 ALTER TABLE `correspondance_forum_mess` DISABLE KEYS */;
INSERT INTO `correspondance_forum_mess` (`id_forum`, `id_message`) VALUES
	(1, 1),
	(1, 3),
	(1, 5),
	(2, 2),
	(2, 4),
	(2, 6);
/*!40000 ALTER TABLE `correspondance_forum_mess` ENABLE KEYS */;

-- Listage de la structure de la table dbweb. inf_forum
CREATE TABLE IF NOT EXISTS `inf_forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `nom_forum` varchar(50) DEFAULT NULL,
  `date_crea` timestamp NULL DEFAULT NULL COMMENT 'Date de création du forum',
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Contient les données relative aux forum';

-- Listage des données de la table dbweb.inf_forum : ~0 rows (environ)
/*!40000 ALTER TABLE `inf_forum` DISABLE KEYS */;
INSERT INTO `inf_forum` (`id_forum`, `nom_forum`, `date_crea`) VALUES
	(1, 'Premier Pas', '2019-12-13 14:03:25'),
	(2, 'Question sur la survie', '2019-12-13 14:03:25');
/*!40000 ALTER TABLE `inf_forum` ENABLE KEYS */;

-- Listage de la structure de la table dbweb. inf_message
CREATE TABLE IF NOT EXISTS `inf_message` (
  `id_message` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_crea` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contenu` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table dbweb.inf_message : ~0 rows (environ)
/*!40000 ALTER TABLE `inf_message` DISABLE KEYS */;
INSERT INTO `inf_message` (`id_message`, `id_user`, `date_crea`, `contenu`) VALUES
	(1, 1, '2019-12-13 15:34:19', 'Bonjour, je viens juste d\'installer le modPack, des conseils ?'),
	(2, 3, '2019-12-13 15:39:02', 'Hey, quelqu un peut m expliquer comment jouer ?'),
	(3, 3, '2019-12-13 15:37:31', 'Je te conseil l excellent guide "Premier pas" present sur le site !'),
	(4, 2, '2019-12-13 15:39:14', 'Fait un effort, tu as la section "Installation" pour ca'),
	(5, 2, '2019-12-13 15:37:39', 'J ai tout appris en le lisant, je ne peux que te le recommender egalement !'),
	(6, 2, '2019-12-13 15:38:51', 'He is right you know !');
/*!40000 ALTER TABLE `inf_message` ENABLE KEYS */;

-- Listage de la structure de la table dbweb. inf_user
CREATE TABLE IF NOT EXISTS `inf_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `img` varchar(50) DEFAULT '/images/default.jpg',
  `droit` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1 COMMENT='Table contenant toutes les informations relatives aux utilisateurs';

-- Listage des données de la table dbweb.inf_user : ~10 rows (environ)
/*!40000 ALTER TABLE `inf_user` DISABLE KEYS */;
INSERT INTO `inf_user` (`id_user`, `pseudo`, `password`, `mail`, `img`, `droit`) VALUES
	(1, 'Patrick', '$2y$10$KYLxut/NDh4igc50.DH0Eul4fjOgYY35IpOirI.SqlGA80KidXB9C', 'dsjdalkd', '/images/default.jpg', 1),
	(2, 'Mathias', '$2y$10$MJl3OrAPR7x5svjALxUar.W0x7W.qk/3pk0Zges8t/2TMdY8VpMNi', 'dazdazd', '/images/default.jpg', 1),
	(3, 'Julie', '$2y$10$UZgVdZrnVrH55splWdCimeJ/mQmjhFf.7pMcUps7RssqcZD632eHC', 'zajhdazkdh', '/images/default.jpg', 1),
	(4, 'Amelie', '$2y$10$2gqqfBy4jNKEd7veWtPlm.ADNgqizzp5FqQARJCFff8yWN2YFFtZS', 'fezfzef', '/images/default.jpg', 1),
	(5, 'Justine', '$2y$10$6FYsntAwHgwY566z2tLL9uo8QOKD2mU2jAiPvtOJ38sYpUipgtfIq', 'dazdaz', '/images/default.jpg', 1),
	(6, 'Admin', '$2y$10$0cboiD.1glf/Rw16TQqrju0vHrp5wZi1uNQ3kIekKiSVFkc.CtxtW', 'admin', '/images/default.jpg', 2),
	(7, 'Samia2', '$2y$10$/4Z9VeDojD8ekerX6HX4Fex4I/Tp9goWXUqcKMCQj8qI/HH.iDERa', 'fdjzalaj', '/images/default.jpg', 2),
	(8, 'UserTest', '$2y$10$9b7XMT7t1gken.BRrG/sFeRijibH2V6ss/O0RoTl0CyWo5vo3bAgq', 'User@gmail.com', '/images/default.jpg', 1),
	(9, 'fefzefzeff', '$2y$10$OpMMBG/U4VSdoFJ/RYRVDOYcmNxpyHlXRdNdJK9NfA4AoqFFtUEyy', 'zefzefzefze', '/images/default.jpg', 1),
	(10, 'fefzef', '$2y$10$aUqTOk20q9.LZj2nkw7k3.dLjalAsl0HvcKPihkK0WTfNdhk.oyzW', 'dazdazdazd', '/images/default.jpg', 1);
/*!40000 ALTER TABLE `inf_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
