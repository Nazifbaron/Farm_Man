-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 19 avr. 2023 à 16:26
-- Version du serveur :  8.0.32-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int NOT NULL,
  `libelleCat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelleCat`) VALUES
(1, 'folo'),
(2, 'oeuf'),
(3, 'poule'),
(4, 'poussin'),
(5, 'aria'),
(6, 'dolo'),
(7, 'gfghhj');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idCli` int NOT NULL,
  `nomCli` varchar(30) DEFAULT NULL,
  `prenomCli` varchar(60) DEFAULT NULL,
  `telephone` int DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `villeCli` varchar(30) DEFAULT NULL,
  `mdp` text NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idCli`, `nomCli`, `prenomCli`, `telephone`, `email`, `villeCli`, `mdp`, `is_admin`) VALUES
(1, 'mama', 'nazi', 62130072, 'nazif@gmail.com', 'cotonou', 'f96135cc35591790fea8b1b159c1f89bf681861e', 0),
(2, 'morel', 'mor', 52146332, 'zaka@gmail.com', 'cotonou', '44e42e127470fbabfa4fedcd415ad34605d539a9', 0),
(3, 'manou', 'moumou', 78451232, 'manou@gmail.com', 'cotonou', 'cbc18cc857a1eb0f3fea323aab4d43af7d13915c', 0),
(4, 'morel', 'morel', 5236541, 'zaka@gmail.com', 'cotonou', '77add44f8f13cf5b3298a7833613aca42430386d', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCmd` int NOT NULL,
  `montant` int DEFAULT NULL,
  `dateCmd` datetime DEFAULT CURRENT_TIMESTAMP,
  `payer` tinyint DEFAULT NULL,
  `adrLiv` varchar(60) DEFAULT NULL,
  `Client_idCli` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `detailCommande`
--

CREATE TABLE `detailCommande` (
  `id` int NOT NULL,
  `Produit_idPr` int NOT NULL,
  `Commande_idCmd` int NOT NULL,
  `quantite` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `detailEntree`
--

CREATE TABLE `detailEntree` (
  `id` int NOT NULL,
  `Produit_id` int NOT NULL,
  `Entree_idE` int NOT NULL,
  `quantite` int DEFAULT NULL,
  `prix` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `detailEntree`
--

INSERT INTO `detailEntree` (`id`, `Produit_id`, `Entree_idE`, `quantite`, `prix`) VALUES
(1, 18, 1, 300, 5220),
(2, 20, 1, 100, 2000);

-- --------------------------------------------------------

--
-- Structure de la table `detailSortie`
--

CREATE TABLE `detailSortie` (
  `id` int NOT NULL,
  `Produit_id` int NOT NULL,
  `Sortie_idS` int NOT NULL,
  `quantite` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `detailSortie`
--

INSERT INTO `detailSortie` (`id`, `Produit_id`, `Sortie_idS`, `quantite`) VALUES
(1, 20, 3, 1520),
(2, 16, 3, 25),
(3, 18, 1, 15);

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

CREATE TABLE `entree` (
  `idE` int NOT NULL,
  `typeE` varchar(30) DEFAULT NULL,
  `dateE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `entree`
--

INSERT INTO `entree` (`idE`, `typeE`, `dateE`) VALUES
(1, 'poule', '2023-04-15'),
(5, 'poussin', '2023-04-17');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `quantite` int DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `Categorie_idCat` int NOT NULL,
  `images` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `quantite`, `prix`, `Categorie_idCat`, `images`) VALUES
(3, 'mpoco', 154, 520, 3, ''),
(16, 'poulet', 12, 147, 3, ''),
(18, 'POUSSIN', 10, 147, 1, ''),
(19, 'poussin', 12, 14, 4, ''),
(20, 'mama', 14, 10, 5, ''),
(22, 'morel', 20, 2000, 3, '../medias4902505424243-4902505424243_mood_04.jpg'),
(23, 'azertyu', 20, 2000, 3, '../medias/voitu.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `idS` int NOT NULL,
  `typeS` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `dateS` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sortie`
--

INSERT INTO `sortie` (`idS`, `typeS`, `dateS`) VALUES
(1, 'poussin', '2023-04-15'),
(3, 'fghjkl', '2023-04-15'),
(4, 'jklm', '2023-04-15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idCli`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCmd`),
  ADD KEY `fk_Commande_Client1_idx` (`Client_idCli`);

--
-- Index pour la table `detailCommande`
--
ALTER TABLE `detailCommande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Produit_has_Commande_Commande1_idx` (`Commande_idCmd`),
  ADD KEY `fk_Produit_has_Commande_Produit1_idx` (`Produit_idPr`);

--
-- Index pour la table `detailEntree`
--
ALTER TABLE `detailEntree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Produit_has_Entree_Entree1_idx` (`Entree_idE`),
  ADD KEY `fk_Produit_has_Entree_Produit1_idx` (`Produit_id`);

--
-- Index pour la table `detailSortie`
--
ALTER TABLE `detailSortie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Sortie_has_Produit_Produit1_idx` (`Produit_id`),
  ADD KEY `fk_Sortie_has_Produit_Sortie1_idx` (`Sortie_idS`);

--
-- Index pour la table `entree`
--
ALTER TABLE `entree`
  ADD PRIMARY KEY (`idE`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Produit_Categorie_idx` (`Categorie_idCat`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`idS`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idCli` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCmd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detailCommande`
--
ALTER TABLE `detailCommande`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detailEntree`
--
ALTER TABLE `detailEntree`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `detailSortie`
--
ALTER TABLE `detailSortie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `entree`
--
ALTER TABLE `entree`
  MODIFY `idE` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `idS` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_Commande_Client1` FOREIGN KEY (`Client_idCli`) REFERENCES `client` (`idCli`);

--
-- Contraintes pour la table `detailCommande`
--
ALTER TABLE `detailCommande`
  ADD CONSTRAINT `fk_Produit_has_Commande_Commande1` FOREIGN KEY (`Commande_idCmd`) REFERENCES `commande` (`idCmd`),
  ADD CONSTRAINT `fk_Produit_has_Commande_Produit1` FOREIGN KEY (`Produit_idPr`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `detailEntree`
--
ALTER TABLE `detailEntree`
  ADD CONSTRAINT `fk_Produit_has_Entree_Entree1` FOREIGN KEY (`Entree_idE`) REFERENCES `entree` (`idE`),
  ADD CONSTRAINT `fk_Produit_has_Entree_Produit1` FOREIGN KEY (`Produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `detailSortie`
--
ALTER TABLE `detailSortie`
  ADD CONSTRAINT `fk_Sortie_has_Produit_Produit1` FOREIGN KEY (`Produit_id`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `fk_Sortie_has_Produit_Sortie1` FOREIGN KEY (`Sortie_idS`) REFERENCES `sortie` (`idS`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_Produit_Categorie` FOREIGN KEY (`Categorie_idCat`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
