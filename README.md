# GITLAB

sur gitbash ! 

git config --global user.email "lea.new2..."

git config --global user.name "21hubert"

-----------------------------------

touch README.md

git init

git checkout -b main

git add README.md

git commit -m "first commit"

git remote add origin https://git.s11.fr/21hubert/S11.git

git push -u origin main

-------

git remote add origin https://git.s11.fr/21hubert/S11.git

git push -u origin main

-------

# Base de données :

```sql
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 sep. 2023 à 12:21
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_roulette`
--

-- --------------------------------------------------------

--
-- Structure de la table `classea`
--

DROP TABLE IF EXISTS `classea`;
CREATE TABLE IF NOT EXISTS `classea` (
  `id_A` int NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Classe` text NOT NULL,
  `Passage` int DEFAULT '0',
  `Absence` int NOT NULL DEFAULT '0',
  `Note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `classea`
--

INSERT INTO `classea` (`id_A`, `Nom`, `Prenom`, `Classe`, `Passage`, `Absence`, `Note`) VALUES
(1, 'HUBERT', 'Léa', 'A', 0, 0, ''),
(2, 'Bob', 'Slague', 'A', 0, 0, ''),
(3, 'Jean', 'Crapaud', 'A', 0, 0, ''),
(4, 'Test', 'Orange', 'A', 0, 0, ''),
(5, 'Triangle', 'Rectangle', 'A', 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `classeb`
--

DROP TABLE IF EXISTS `classeb`;
CREATE TABLE IF NOT EXISTS `classeb` (
  `id_B` int NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Classe` text NOT NULL,
  `Passage` int NOT NULL DEFAULT '0',
  `Absence` int NOT NULL DEFAULT '0',
  `Note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `classeb`
--

INSERT INTO `classeb` (`id_B`, `Nom`, `Prenom`, `Classe`, `Passage`, `Absence`, `Note`) VALUES
(1, 'Walter', 'Elias', 'B', 0, 0, ''),
(2, 'Hormann', 'Aragorn', 'B', 0, 0, ''),
(3, 'Vanderhyle', 'Raven', 'B', 0, 0, ''),
(4, 'Asmira', 'Indhylle', 'B', 0, 0, ''),
(5, 'Astharos', 'Xerxes', 'B', 0, 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```