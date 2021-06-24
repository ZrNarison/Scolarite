-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Octobre 2019 à 19:46
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `scolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `CODE` int(11) NOT NULL,
  `NOM` varchar(25) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHOTO` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`CODE`, `NOM`, `EMAIL`, `PHOTO`) VALUES
(1, 'ABRAHAMsfs', 'Abraham@gmail.com', ''),
(2, 'SYLVITTA', 'Sylvitta@gmail.com', 'image2.png'),
(3, 'SYLVANOlahossa', 'sylvano@gmail.com', 'img3.jpg'),
(7, 'azerdddddd', 'zrfzrzrz@gmail.com', 'img4.jpg'),
(8, 'RABEMANATSOA', 'Rabemanatsoa@gmail.com', 'image3.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `LOGIN` varchar(15) NOT NULL,
  `PASWORD` varchar(120) NOT NULL,
  `ROLE` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`LOGIN`, `PASWORD`, `ROLE`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'SCOLARITE'),
('et1', 'b2f82460d6f91c4abcb2b36d78386469', 'ETUDIANT');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`CODE`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`LOGIN`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
