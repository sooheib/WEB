-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 06 Novembre 2015 à 16:50
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `atelier2cinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `classe` varchar(20) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `age`, `type`, `classe`, `login`, `pwd`) VALUES
(1, 'Said', 'Amine', 25, 'admin', NULL, 'admin', 'admin'),
(2, 'Said', 'Amine', 25, 'admin', NULL, 'admin', 'admin'),
(3, 'Said', 'Amine', 25, 'admin', NULL, 'admin', 'admin'),
(9, 'said', 'amine', 20, 'admin', NULL, 'admin', 'admin'),
(10, 'mohsen', 'mohamed', 20, 'admin', NULL, 'admin2', 'admin2'),
(13, 'Mohsen', 'Mohamed', 20, 'etudiant', '5GL1', NULL, NULL),
(14, 'khfifi', 'Marwen', 20, 'etudiant', '5gl2', NULL, NULL),
(15, 'said', 'amine', 20, 'etudiant', '5gl3', NULL, NULL),
(17, 'salah', 'ali', 30, 'admin', NULL, 'esprit', 'esprit');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
