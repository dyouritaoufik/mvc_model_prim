-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 31 jan. 2020 à 02:31
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `watchs`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `paragraph` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nom`, `prix`, `type`, `description`, `paragraph`) VALUES
(1, 'Swatch', 2500, 'Watch', 'Lorem ipsum dolor si', 'Duis lectus nisl, volutpat ut enim eu, malesuada commodo velit. Aliquam ut diam vel tortor pellentesque dictum in quis lorem.'),
(2, 'Rolex', 3000, 'Watch', 'Lorem ipsum dolor si', 'Duis lectus nisl, volutpat ut enim eu, malesuada commodo velit. Aliquam ut diam vel tortor pellentesque dictum in quis lorem.'),
(3, 'Cartier', 3200, 'Watch', 'Lorem ipsum dolor si', 'Duis lectus nisl, volutpat ut enim eu, malesuada commodo velit. Aliquam ut diam vel tortor pellentesque dictum in quis lorem.'),
(4, 'Omega', 2000, 'Watch', 'Lorem ipsum dolor si', 'Duis lectus nisl, volutpat ut enim eu, malesuada commodo velit. Aliquam ut diam vel tortor pellentesque dictum in quis lorem.'),
(5, 'Zenith', 2500, 'Watch', 'Lorem ipsum dolor si', 'Duis lectus nisl, volutpat ut enim eu, malesuada commodo velit. Aliquam ut diam vel tortor pellentesque dictum in quis lorem.'),
(6, 'Xerox', 2500, 'Watch', 'Lorem ipsum dolor si', 'Duis lectus nisl, volutpat ut enim eu, malesuada commodo velit. Aliquam ut diam vel tortor pellentesque dictum in quis lorem.');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `id_command` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `email`, `password`, `id_command`) VALUES
(0, 'Taoufik Dyouri', 'taoufikdyouri@gmail.com', '$2y$10$BEGBkI0Ler2Hy', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `id_command` int(10) NOT NULL,
  `matriculation` varchar(20) DEFAULT NULL,
  `date_livraison` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `id_command` int(10) NOT NULL,
  `id_article` int(10) NOT NULL,
  `quentite` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_command` (`id_command`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id_command`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`id_command`,`id_article`),
  ADD KEY `fk_art` (`id_article`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_command`) REFERENCES `command` (`id_command`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `fk_art` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `fk_cmd` FOREIGN KEY (`id_command`) REFERENCES `command` (`id_command`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
