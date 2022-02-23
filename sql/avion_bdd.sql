-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 fév. 2022 à 02:26
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `avion_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(3) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `prenom`, `pass`, `role`) VALUES
(2, 'Tom', '1234', 'admin'),
(1, 'Salim', '5678', 'admin'),
(3, 'Clara', 'azerty', 'admin'),
(4, 'Dan', 'okok', 'user'),
(5, 'Maz', 'okok', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `aeroport`
--

DROP TABLE IF EXISTS `aeroport`;
CREATE TABLE IF NOT EXISTS `aeroport` (
  `idaeroport` int(3) NOT NULL AUTO_INCREMENT,
  `desiaero` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` varchar(20) NOT NULL,
  PRIMARY KEY (`idaeroport`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aeroport`
--

INSERT INTO `aeroport` (`idaeroport`, `desiaero`, `adresse`, `statut`) VALUES
(15, 'Paris', 'France', 'OK'),
(14, 'Marseille', 'France', 'OK'),
(16, 'Namek', 'France', 'OK');

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

DROP TABLE IF EXISTS `avion`;
CREATE TABLE IF NOT EXISTS `avion` (
  `idavion` int(3) NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `nbplaces` int(3) NOT NULL,
  `typeavion` varchar(50) NOT NULL,
  PRIMARY KEY (`idavion`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`idavion`, `marque`, `etat`, `nbplaces`, `typeavion`) VALUES
(14, 'ORIK', 'Neuf', 650, 'CroisiÃ¨re'),
(13, 'FJ25', 'Neuf', 500, 'Voyage'),
(15, 'N25K', 'Neuf', 350, 'Marchand');

-- --------------------------------------------------------

--
-- Structure de la table `pilote`
--

DROP TABLE IF EXISTS `pilote`;
CREATE TABLE IF NOT EXISTS `pilote` (
  `idpilote` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  PRIMARY KEY (`idpilote`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pilote`
--

INSERT INTO `pilote` (`idpilote`, `nom`, `prenom`, `age`, `email`, `adresse`, `grade`) VALUES
(19, 'Garcia', 'Clara', '23', 'C@gmail.com', 'France', 'Pro'),
(17, 'LAU', 'Tom', '21', 'T@gmail.com', 'France', 'Pro'),
(18, 'Alarcon', 'Salim', '18', 'S@gmail.com', 'France', 'Pro');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

DROP TABLE IF EXISTS `vol`;
CREATE TABLE IF NOT EXISTS `vol` (
  `idvol` int(10) NOT NULL AUTO_INCREMENT,
  `desivol` varchar(50) NOT NULL,
  `duree` varchar(50) NOT NULL,
  `datevole` date DEFAULT NULL,
  `idavion` int(10) NOT NULL,
  `idaeroport1` int(10) NOT NULL,
  `idaeroport2` int(10) NOT NULL,
  `idpilote1` int(10) NOT NULL,
  `idpilote2` int(10) NOT NULL,
  PRIMARY KEY (`idvol`),
  KEY `idaeroport1` (`idaeroport1`),
  KEY `idaeroport2` (`idaeroport2`),
  KEY `idpilote1` (`idpilote1`),
  KEY `idpilote2` (`idpilote2`),
  KEY `idavion` (`idavion`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`idvol`, `desivol`, `duree`, `datevole`, `idavion`, `idaeroport1`, `idaeroport2`, `idpilote1`, `idpilote2`) VALUES
(30, 'VK52', '220', '2022-03-02', 15, 16, 15, 18, 17),
(29, 'JNR52', '2852', '2022-02-04', 14, 15, 14, 19, 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
