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

SET NAMES utf8mb4;

-- --------------------------------------------------------

-- Base de données : `db_roulette`
CREATE DATABASE IF NOT EXISTS `db_roulette` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_roulette`;

-- --------------------------------------------------------

-- Structure de la table `classea`
DROP TABLE IF EXISTS `classea`;
CREATE TABLE `classea` (
  `id_A` int NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(100) NOT NULL,
  `Prenom` VARCHAR(100) NOT NULL,
  `Classe` VARCHAR(50) NOT NULL,
  `Passage` int DEFAULT 0,
  `Absence` int NOT NULL DEFAULT 0,
  `Note` VARCHAR(255) NOT NULL DEFAULT '',
  `nb_tirages` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_A`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Déchargement des données de la table `classea`
INSERT INTO `classea` (`Nom`, `Prenom`, `Classe`, `Passage`, `Absence`, `Note`, `nb_tirages`) VALUES
('HUBERT', 'Léa', 'A', 0, 0, '', 0),
('Bob', 'Slague', 'A', 0, 0, '', 0),
('Jean', 'Crapaud', 'A', 0, 0, '', 0),
('Test', 'Orange', 'A', 0, 0, '', 0),
('Triangle', 'Rectangle', 'A', 0, 0, '', 0);

-- --------------------------------------------------------

-- Structure de la table `classeb`
DROP TABLE IF EXISTS `classeb`;
CREATE TABLE `classeb` (
  `id_B` int NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(100) NOT NULL,
  `Prenom` VARCHAR(100) NOT NULL,
  `Classe` VARCHAR(50) NOT NULL,
  `Passage` int NOT NULL DEFAULT 0,
  `Absence` int NOT NULL DEFAULT 0,
  `Note` VARCHAR(255) NOT NULL DEFAULT '',
  `nb_tirages` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_B`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Déchargement des données de la table `classeb`
INSERT INTO `classeb` (`Nom`, `Prenom`, `Classe`, `Passage`, `Absence`, `Note`, `nb_tirages`) VALUES
('Walter', 'Elias', 'B', 0, 0, '', 0),
('Hormann', 'Aragorn', 'B', 0, 0, '', 0),
('Vanderhyle', 'Raven', 'B', 0, 0, '', 0),
('Asmira', 'Indhylle', 'B', 0, 0, '', 0),
('Astharos', 'Xerxes', 'B', 0, 0, '', 0);

-- --------------------------------------------------------

-- Créer une table pour stocker les statistiques des notes par classe
CREATE TABLE IF NOT EXISTS `stats_notes` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `classe` VARCHAR(50) NOT NULL,
    `moyenne` FLOAT NOT NULL,
    `mediane` FLOAT NOT NULL,
    `ecart_type` FLOAT NOT NULL,
    `date_calcul` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

COMMIT;
