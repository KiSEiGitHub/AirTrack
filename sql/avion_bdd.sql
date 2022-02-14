-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 14 fév. 2022 à 20:04
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aeroport`
--

INSERT INTO `aeroport` (`idaeroport`, `desiaero`, `adresse`, `statut`) VALUES
(10, 'Orly', 'France', 'âœ”ï¸'),
(11, 'PÃ©kin-Capitale', 'Chine', 'âœ”ï¸'),
(12, 'AÃ©roport international de Dubai', 'Dubai', 'âœ”ï¸');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`idavion`, `marque`, `etat`, `nbplaces`, `typeavion`) VALUES
(7, 'FRB476', 'Neuf', 8282, 'Voyage'),
(8, 'CHB271', 'Neuf', 9281, 'Voyage'),
(9, 'Rafale', 'Neuf', 2, 'Guerre'),
(10, 'Mirage', 'Neuf', 2, 'Guerre'),
(11, 'C-130 HERCULES', 'Neuf', 680, 'Porteur');

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pilote`
--

INSERT INTO `pilote` (`idpilote`, `nom`, `prenom`, `age`, `email`, `adresse`, `grade`) VALUES
(15, 'Alarcon', 'Salim', '18', 'S@gmail.com', 'France', 'Pro'),
(13, 'LAU', 'Tom', '21', 'T@gmail.com', 'France', 'Pro'),
(14, 'Garcia', 'Clara', '23', 'C@gmail.com', 'France', 'Pro');

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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`idvol`, `desivol`, `duree`, `datevole`, `idavion`, `idaeroport1`, `idaeroport2`, `idpilote1`, `idpilote2`) VALUES
(27, 'DBCH282', '28192', '2021-11-19', 10, 12, 10, 15, 13),
(26, 'CHFR281', '2829', '2017-09-20', 7, 10, 11, 15, 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
