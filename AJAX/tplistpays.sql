-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 24 Janvier 2016 à 21:23
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tplistpays`
--
CREATE DATABASE IF NOT EXISTS `tplistpays` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tplistpays`;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `libelle`) VALUES
(1, 'France'),
(2, 'Tunisie');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_ville` varchar(20) NOT NULL,
  `id_pays` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pays` (`id_pays`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `libelle_ville`, `id_pays`) VALUES
(1, 'Paris', 1),
(2, 'Monaco', 1),
(3, 'Lyon', 1),
(4, 'Toulouse', 1),
(5, 'Tunis', 2),
(6, 'Ariana', 2),
(7, 'Nabeul', 2),
(8, 'Gabes', 2);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
