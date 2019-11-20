-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 nov. 2019 à 14:23
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'c82937d754dcc5becba0826de21cea92cb675fa13631ccd9033559dfa088ac75'),
(85, 'up', 'me', 'wake', 'c9d75e688d74d3503a7b247a5391723694cad3a97776a79b77afc7686b67e1e3'),
(82, 'zo', 'bu', 'ga', '491970e989b8e48b65c2e9a4b11b4bf27aeaf163c730beb9971283e15250b27b'),
(84, 'jack', 'paulO', 'pierre', '4f9274a8f5eb98a642f1470ca7e86539ff87574d3613f938b99f500c65d7dd14'),
(78, 'a', 'a', 'a', '7953d4e32cb8c4353e9cb3b1033336fa548c0dd63a0258a0c3a9a5dd6b3e12c3'),
(79, 'eti', 'etienne', 'kher', 'ddb0f76b6ad7fdeb285d50a42fc4ae6e21f6e7c6c204ade8f952f977a43a3e00'),
(83, 'kebab', 'ke', 'kebab', '8671251dbe30f076487e00e19a8f2404d3fb2186405f4e9355dbb785bc3a494d');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
