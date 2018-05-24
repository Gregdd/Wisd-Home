-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 23 mai 2018 à 08:11
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wisdhome`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

CREATE TABLE `actionneur` (
  `actionneurtypeID` int(11) NOT NULL,
  `actionneurNom` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `url_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `actionneurpiece`
--

CREATE TABLE `actionneurpiece` (
  `ID` int(11) NOT NULL,
  `idpiece` int(11) NOT NULL,
  `typeactionneur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actionneurpiece`
--

INSERT INTO `actionneurpiece` (`ID`, `idpiece`, `typeactionneur`) VALUES
(1, 1, 'porte'),
(2, 3, 'lumiere'),
(3, 3, 'lumiere'),
(4, 40, 'porte'),
(5, 40, 'porte'),
(6, 42, 'temperature');

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `capteurtype` varchar(11) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `url_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`capteurtype`, `unit`, `url_img`) VALUES
('camera', '', 'Image/camera.png'),
('eau', '%', 'Image/consoeau.png'),
('elec', 'KWH', 'Image/consoelec.png'),
('fumee', '', 'Image/feu.png'),
('luminosite', '%', 'Image/luminosite.png'),
('mouvement', '', 'Image/mouvement.png'),
('temperature', '°c', 'Image/temp.png');

-- --------------------------------------------------------

--
-- Structure de la table `capteurpiece`
--

CREATE TABLE `capteurpiece` (
  `ID` int(11) NOT NULL,
  `idpiece` int(11) NOT NULL,
  `typecapteur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteurpiece`
--

INSERT INTO `capteurpiece` (`ID`, `idpiece`, `typecapteur`) VALUES
(1, 1, 'humidite'),
(2, 1, 'camera'),
(6, 1, 'Fumée'),
(7, 1, 'Présence'),
(8, 1, 'CO2'),
(9, 1, 'Présence'),
(10, 3, 'temperature'),
(11, 25, 'temperature'),
(12, 2, 'temperature'),
(13, 24, 'co2'),
(14, 40, 'humidite'),
(15, 40, 'fumee'),
(17, 40, 'camera'),
(18, 42, 'luminosite'),
(19, 41, 'humidite'),
(20, 40, 'humidite'),
(21, 41, 'camera');

-- --------------------------------------------------------

--
-- Structure de la table `Chat`
--

CREATE TABLE `Chat` (
  `ID` int(11) NOT NULL,
  `Pseudo` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Chat`
--

INSERT INTO `Chat` (`ID`, `Pseudo`, `Message`) VALUES
(1, 'AMINE', 'SALAMMM'),
(0, '', ''),
(2, 'OMAR', 'ZKJBCZJB'),
(3, 'HAMID', 'ZKJDCBZJK'),
(4, 'SALIM', 'HELLO WORLD!'),
(0, 'YASSINE', 'FERGREGV'),
(0, 'aaa', 'aaa'),
(0, 'AMINE', 'T5F5C'),
(0, 'Amine', 'aaa'),
(0, 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`ID`, `question`, `reponse`) VALUES
(6, 'Comment acheter un nouveau capteur ?', 'Le site Connect\'Home vous propose un catalogue en ligne présentant les produits en vente dans nos boutiques DomISEP. Vous pouvez également commander un article depuis le site et venir le retirer en magasin !'),
(7, 'Comment annuler une commande ?', 'Vous disposez d\'un délai de 24h pour annuler une commande passée sur le site. Pour cela, il vous suffit de contacter directement DomISEP par téléphone.'),
(8, 'Comment signaler une panne ?', 'Envoyez un mail domisep@gmail.com qui vous aidera dans les démarches visant à réparer le device.'),
(9, 'ALLL??', 'aaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `possesseur` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'Super Mario Bros', 'Florent', 'NES', 4, 1, 'Un jeu d\'anthologie !'),
(2, 'Sonic', 'Patrick', 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(3, 'Zelda : ocarina of time', 'Florent', 'Nintendo 64', 15, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours'),
(4, 'Mario Kart 64', 'Florent', 'Nintendo 64', 25, 4, 'Un excellent jeu de kart !'),
(5, 'Super Smash Bros Melee', 'Michel', 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 'Patrick', 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 'Patrick', 'Xbox', 60, 4, 'Un jeu de beach volley de toute beauté o_O'),
(8, 'Enter the Matrix', 'Michel', 'PC', 45, 1, 'Plutôt bof comme jeu, mais ça complète bien le film'),
(9, 'Max Payne 2', 'Michel', 'PC', 50, 1, 'Très réaliste, une sorte de film noir sur fond d\'histoire d\'amour. A essayer !'),
(10, 'Yoshi\'s Island', 'Florent', 'SuperNES', 6, 1, 'Le paradis des Yoshis :o)'),
(11, 'Commandos 3', 'Florent', 'PC', 44, 12, 'Un bon jeu d\'action où on dirige un commando pendant la 2ème guerre mondiale !'),
(12, 'Final Fantasy X', 'Patrick', 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(13, 'Pokemon Rubis', 'Florent', 'GBA', 44, 4, 'Pika-Pika-chu !!!'),
(14, 'Starcraft', 'Michel', 'PC', 19, 8, 'Le meilleur jeux pc de tout les temps !'),
(15, 'Grand Theft Auto 3', 'Michel', 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(16, 'Homeworld 2', 'Michel', 'PC', 45, 6, 'Superbe ! o_O'),
(17, 'Aladin', 'Patrick', 'SuperNES', 10, 1, 'Comme le dessin Animé !'),
(18, 'Super Mario Bros 3', 'Michel', 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(19, 'SSX 3', 'Florent', 'Xbox', 56, 2, 'Un très bon jeu de snow !'),
(20, 'Star Wars : Jedi outcast', 'Patrick', 'Xbox', 33, 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !'),
(21, 'Actua Soccer 3', 'Patrick', 'PS', 30, 2, 'Un jeu de foot assez bof ...'),
(22, 'Time Crisis 3', 'Florent', 'PS2', 40, 1, 'Un troisième volet efficace mais pas vraiment surprenant'),
(23, 'X-FILES', 'Patrick', 'PS', 25, 1, 'Un jeu censé ressembler a la série mais assez raté ...'),
(24, 'Soul Calibur 2', 'Patrick', 'Xbox', 54, 1, 'Un jeu bien axé sur le combat'),
(25, 'Diablo', 'Florent', 'PS', 20, 1, 'Comme sur PC mais la c\'est sur un ecran de télé :) !'),
(26, 'Street Fighter 2', 'Patrick', 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(27, 'Gundam Battle Assault 2', 'Florent', 'PS', 29, 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement'),
(28, 'Spider-Man', 'Florent', 'Megadrive', 15, 1, 'Vivez l\'aventure de l\'homme araignée'),
(29, 'Midtown Madness 3', 'Michel', 'Xbox', 59, 6, 'Dans la suite des autres versions de Midtown Madness'),
(30, 'Tetris', 'Florent', 'Gameboy', 5, 1, 'Qui ne connait pas ? '),
(31, 'The Rocketeer', 'Michel', 'NES', 2, 1, 'Un super un film et un jeu de m*rde ...'),
(32, 'Pro Evolution Soccer 3', 'Patrick', 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(33, 'Ice Hockey', 'Michel', 'NES', 7, 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)'),
(34, 'Sydney 2000', 'Florent', 'Dreamcast', 15, 2, 'Les JO de Sydney dans votre salon !'),
(35, 'NBA 2k', 'Patrick', 'Dreamcast', 12, 2, 'A votre avis :p ?'),
(36, 'Aliens Versus Predator : Extinction', 'Michel', 'PS2', 20, 2, 'Un shoot\'em up pour pc'),
(37, 'Crazy Taxi', 'Florent', 'Dreamcast', 11, 1, 'Conduite de taxi en folie !'),
(38, 'Le Maillon Faible', 'Mathieu', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(39, 'FIFA 64', 'Michel', 'Nintendo 64', 25, 2, 'Le premier jeu de foot sur la N64 =) !'),
(40, 'Qui Veut Gagner Des Millions', 'Florent', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(41, 'Monopoly', 'Sebastien', 'Nintendo 64', 21, 4, 'Bheuuu le monopoly sur N64 !'),
(42, 'Taxi 3', 'Corentin', 'PS2', 19, 4, 'Un jeu de voiture sur le film'),
(43, 'Indiana Jones Et Le Tombeau De L\'Empereur', 'Florent', 'PS2', 25, 1, 'Notre aventurier préféré est de retour !!!'),
(44, 'F-ZERO', 'Mathieu', 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(45, 'Harry Potter Et La Chambre Des Secrets', 'Mathieu', 'Xbox', 30, 1, 'Abracadabra !! Le célebre magicien est de retour !'),
(46, 'Half-Life', 'Corentin', 'PC', 15, 32, 'L\'autre meilleur jeu de tout les temps (surtout ses mods).'),
(47, 'Myst III Exile', 'Sébastien', 'Xbox', 49, 1, 'Un jeu de réflexion'),
(48, 'Wario World', 'Sebastien', 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(49, 'Rollercoaster Tycoon', 'Florent', 'Xbox', 29, 1, 'Jeu de gestion d\'un parc d\'attraction'),
(50, 'Splinter Cell', 'Patrick', 'Xbox', 53, 1, 'Jeu magnifique !');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `maisonID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `adresse` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `ID` int(11) NOT NULL,
  `pseudo` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `pseudo`, `message`) VALUES
(1, 'Tom', 'Il fait beau aujourd\'hui, vous ne trouvez pas ?'),
(2, 'John', 'Ouais, ça faisait un moment qu\'on n\'avait pas vu la lumière du soleil !'),
(3, 'Patrice', 'Ça vous tente d\'aller à la plage aujourd\'hui ? Y\'a de super vagues !'),
(4, 'Tom', 'Cool, bonne idée ! J\'amène ma planche !'),
(5, 'John', 'Comptez sur moi !'),
(6, 'Tom', 'allllloo'),
(7, 'Hamid', 'eeedd'),
(8, 'Salim', 'TGGGGGGGGGG'),
(9, 'amine', 'amine'),
(10, 'amine', 'amine'),
(11, 'amine', 'amine'),
(12, 'amine', 'amine');

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE `pieces` (
  `idpiece` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `superficie` int(11) NOT NULL,
  `capteurs` int(11) NOT NULL,
  `actionneurs` int(11) NOT NULL,
  `idhouse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`idpiece`, `nom`, `superficie`, `capteurs`, `actionneurs`, `idhouse`) VALUES
(40, 'salon', 0, 0, 0, 0),
(41, 'cuisine', 0, 0, 0, 0),
(42, 'azza', 0, 0, 0, 0),
(43, 'azzaa', 0, 0, 0, 0),
(44, 'azazz', 0, 0, 0, 0),
(45, 'salono', 0, 0, 0, 0),
(46, 'tyt', 0, 0, 0, 0),
(47, 'azaz', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pieces1`
--

CREATE TABLE `pieces1` (
  `idpiece` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `superficie` int(11) DEFAULT '0',
  `capteurs` int(11) NOT NULL DEFAULT '0',
  `actionneurs` int(11) NOT NULL DEFAULT '0',
  `idhouse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pieces1`
--

INSERT INTO `pieces1` (`idpiece`, `nom`, `superficie`, `capteurs`, `actionneurs`, `idhouse`) VALUES
(1, 'salon', 22, 2, 2, 2),
(3, 'chambre', 0, 0, 0, 0);

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
  `Type_utilisateur` varchar(45) DEFAULT 'client',
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
(14, 'chacha', '123456', 'Guit', 'Chay', NULL, 'chaymaa0997@hotmail.fr'),
(15, 'pppp', 'pppp', 'PPPPP', 'PPPP', NULL, 'pppp'),
(17, 'zaz', 'aaa', 'aazz', 'azza', NULL, 'salimghaiti9@gmail.com'),
(18, 'aaaa', 'aaaa', 'utili', 'aaaa', NULL, 'salimghaiti9@gmail.com'),
(19, 'aaa', 'aaa', 'aa', 'aa', NULL, 'salimghaiti9@gmail.com'),
(20, 'ww', 'wwww', 'ww', 'ww', NULL, 'salimghaiti9@gmail.com'),
(21, 'a', 'aaa', 'mm', 'aa', NULL, 'salimghaiti9@gmail.com'),
(22, 'qqqq', 'aaa', 'qmmq', 'sqq', 'client', 'salimghaiti9@gmail.com'),
(23, 'aaa', 'aaa', '123', 'aaaaa', 'client', 'salimghaiti9@gmail.com'),
(24, 'AZAZ', 'e2512172abf8cc9f67fdd49eb6cacf2df71bbad3', 'GHAITI', 'SALIM', 'client', 'salimghaiti9@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actionneurpiece`
--
ALTER TABLE `actionneurpiece`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`capteurtype`);

--
-- Index pour la table `capteurpiece`
--
ALTER TABLE `capteurpiece`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`idpiece`);

--
-- Index pour la table `pieces1`
--
ALTER TABLE `pieces1`
  ADD PRIMARY KEY (`idpiece`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actionneurpiece`
--
ALTER TABLE `actionneurpiece`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `capteurpiece`
--
ALTER TABLE `capteurpiece`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `idpiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `pieces1`
--
ALTER TABLE `pieces1`
  MODIFY `idpiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
