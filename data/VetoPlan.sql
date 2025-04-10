-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 14 Mars 2023 à 17:34
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vetoplan`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `rdv`;
DROP TABLE IF EXISTS `client`;
DROP TABLE IF EXISTS `utilisateur`;


CREATE TABLE `client` (
  `idC` int(11) NOT NULL,
  `nomC` varchar(255) DEFAULT NULL,
  `prenomC` varchar(255) DEFAULT NULL,
  `rueC` varchar(255) DEFAULT NULL,
  `cpC` char(5) DEFAULT NULL,
  `villeC` varchar(255) DEFAULT NULL,
  `notes` text,
  `idU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idC`, `nomC`, `prenomC`, `rueC`, `cpC`, `villeC`, `notes`, `idU`) VALUES
(1, 'Yann', 'Barrot', 'Le chambon', '24390', 'Tourtoirac', NULL, 1),
(2, 'Harispe', 'Michel', 'Gaineko Etxea', '64220', 'Saint Jean Pied de port', NULL, 2),
(3, 'Garay', 'Nicolas', '123 allee des Genêts', '40440', 'Ondres', NULL, 3),
(4, 'Fontaine', 'Christophe', '24 rue du chemin de fer', '94110', 'Arcueil', NULL, 4),
(5, 'Da Ros', 'Joel', 'chemin forestier', '94400', 'Alfortville', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `idR` int(11) NOT NULL,
  `idU` int(11) DEFAULT NULL,
  `idC` int(11) DEFAULT NULL,
  `dateR` datetime DEFAULT NULL,
  `rueR` varchar(255) DEFAULT NULL,
  `cpR` char(5) DEFAULT NULL,
  `villeR` varchar(255) DEFAULT NULL,
  `animalR` text,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `rdv`
--

INSERT INTO `rdv` (`idR`, `idU`, `idC`, `dateR`, `rueR`, `cpR`, `villeR`, `animalR`, `notes`) VALUES
(1, 1, 1, '2023-03-11 14:20:00', '20 chemin de la mothe', '24390', 'Hautefort', NULL, NULL),
(2, 1, 1, '2023-01-15 14:00:00', '20 chemin de la mothe', '24390', 'Hautefort', NULL, NULL),
(3, 2, 2, '2023-02-20 10:45:00', 'Gaineko Etxea', '64220', 'Saint Jean Pied de port', NULL, NULL),
(4, 2, 2, '2023-02-07 11:30:00', 'Gaineko Etxea', '64220', 'Saint Jean Pied de port', NULL, NULL),
(5, 2, 2, '2023-01-10 15:00:00', 'Gaineko Etxea', '64220', 'Saint Jean Pied de port', NULL, NULL),
(6, 2, 2, '2023-01-01 16:30:00', 'Gaineko Etxea', '64220', 'Saint Jean Pied de port', NULL, NULL),
(7, 2, 2, '2023-01-01 16:30:00', 'Gaineko Etxea', '64220', 'Saint Jean Pied de port', NULL, NULL),
(8, 3, 3, '2023-01-01 16:30:00', '123 allee des Genêts', '40440', 'Ondres', NULL, NULL),
(9, 3, 3, '2023-02-23 16:30:00', '123 allee des Genêts', '40440', 'Ondres', NULL, NULL),
(10, 4, 4, '2023-01-09 16:30:00', '24 rue du chemin de fer', '94110', 'Arcueil', 'Chien', 'Opération oreille droite'),
(11, 4, 4, '2023-02-15 16:30:00', '24 rue du chemin de fer', '94110', 'Arcueil', 'Chien', 'Visite de contrôle de l\'opération sur l\'oreille droite : RAS'),
(12, 4, 4, '2023-03-30 16:30:00', '24 rue du chemin de fer', '94110', 'Arcueil', 'Chien', 'Suite opération oreille droite, retrait des points de suture.'),
(13, 4, 4, '2023-06-29 17:00:00', '24 rue du chemin de fer', '94110', 'Arcueil', 'Chien', 'vaccination CHLRP, vérifier la cicatrisation post-op');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idU` int(11) NOT NULL,
  `mailU` varchar(150) NOT NULL,
  `mdpU` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idU`, `mailU`, `mdpU`) VALUES
(1, 'alex.garat@vetoplan.fr', 'seSzpoUAQgIl.'),
(2, 'jj.soueix@vetoplan.fr', 'seSzpoUAQgIl.'),
(3, 'lionel.romain@vetoplan.fr', 'seSzpoUAQgIl.'),
(4, 'amal.hecker@vetoplan.fr', 'seSzpoUAQgIl.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idC`),
  ADD KEY `idU` (`idU`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`idR`),
  ADD KEY `idU` (`idU`),
  ADD KEY `idC` (`idC`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idU`),
  ADD UNIQUE KEY `mailU` (`mailU`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`),
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `client` (`idC`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
