-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 11 mai 2018 à 09:05
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `Mot_de_passe` varchar(500) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Prenom` varchar(45) DEFAULT NULL,
  `Type_utilisateur` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `pseudo`, `Mot_de_passe`, `Nom`, `Prenom`, `Type_utilisateur`, `mail`) VALUES
(2, 'azert', 'azert', 'azert', 'azert', 'client', 'aaaa@isep.fr'),
(3, 'aaaaa', 'aaaaa', 'aaaa', 'aaaaa', 'client', '1111@isep.fr'),
(10, 'salim', 'Salim', 'GHAITI', 'SALIM', 'client', 'salimghaiti9@gmail.com'),
(11, 'test', 'test', 'test', 'test', 'Administrateur', NULL),
(12, 'SALIM10', 'Salim', 'GHAITI', 'SALIM', NULL, 'AAAAA'),
(13, 'louis', 'louis', 'GAUTIER', 'Louis', NULL, 'louisgautier@hotmail.fr'),
(14, 'chacha', '123456', 'Guit', 'Chay', NULL, 'chaymaa0997@hotmail.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
