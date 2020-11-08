-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 08 nov. 2020 à 13:45
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE `concert` (
  `artiste` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `pays` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `salle` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `concert`
--

INSERT INTO `concert` (`artiste`, `date`, `heure`, `pays`, `ville`, `salle`, `adresse`, `cp`) VALUES
('', '2020-11-03', '03:15:00', 'france', 'toulouse', 'bikini', 'ramo', 0),
('', '2020-11-03', '03:15:00', 'france', 'ramonville', 'bikini', 'ramonville', 31520),
('damso', '2020-11-12', '08:15:00', 'france', 'toulouse', 'bikini', 'zenith', 31000),
('nekfeu', '2020-11-10', '00:00:00', 'espagne', 'madrid', 'arena', 'ruiz lopez', 89563),
('nekfeu', '2020-11-10', '00:00:00', 'espagne', 'madrid', 'arena', 'ruiz lopez', 89563),
('nekfeu', '2020-11-10', '00:00:00', 'espagne', 'madrid', 'arena', 'ruiz lopez', 89563),
('booba', '2020-11-10', '00:00:00', '', '', '', '', 0),
('booba', '2020-11-10', '00:00:00', '', '', '', '', 0),
('booba', '2020-11-10', '00:00:00', '', '', '', '', 0),
('Hugo TSR', '2020-11-09', '21:00:00', 'france', 'Paris', 'U Arena', '9 rue de la tronche', 93000),
('Moulin', '2020-11-11', '22:00:00', 'france', 'toulouse', 'bikini', 'ramonville', 31000),
('busquet', '2020-11-09', '08:00:00', 'france', 'toulouse', 'dans son appart', 'liste rouge', 31000),
('paul tournu', '2020-11-18', '10:51:00', 'france', 'toulouse', 'zenith', 'zenith', 31000);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `ID_Pays` int(11) NOT NULL,
  `Nom_Pays` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`ID_Pays`, `Nom_Pays`) VALUES
(1, 'France'),
(2, 'Espagne'),
(3, 'Italie');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `salle` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `pseudo` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `email`, `password`) VALUES
('muruva', 'paul.tournu@orange.fr', 'pololepro'),
('muruva', 'nicolas@busquet.com', 'nicolas'),
('muruva', 'paul.tournu@orange.fr', 'pololepro'),
('necrolya', 'jean.dupont@orange.fr', 'jean'),
('necrolya', 'jean.dupont@orange.fr', 'JEAN'),
('titi', 'titi@orange.fr', 'titi'),
('titi', 'titi@orange.fr', 'titi'),
('tata', 'tata@orange.fr', 'tata'),
('titi', 'titi@gmail.com', 'titi'),
('tata', 'tata@orange.com', 'tata'),
('toto', 'toto@orange.com', 'toto');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `ID_Ville` int(11) NOT NULL,
  `Nom_Ville` varchar(20) NOT NULL,
  `ID_Pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`ID_Ville`, `Nom_Ville`, `ID_Pays`) VALUES
(1, 'Paris', 0),
(2, 'Toulouse', 1),
(3, 'Marseille', 1),
(4, 'Madrid', 2),
(5, 'Barcelone', 2),
(6, 'Seville', 2),
(7, 'Rome', 3),
(8, 'Milan', 3),
(9, 'Florence', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`ID_Pays`) USING BTREE;

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`ID_Ville`),
  ADD KEY `ID_Pays` (`ID_Pays`) USING BTREE;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_pays_ville` FOREIGN KEY (`ID_Pays`) REFERENCES `pays` (`ID_Pays`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
