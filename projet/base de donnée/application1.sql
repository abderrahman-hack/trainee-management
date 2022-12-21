-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 déc. 2022 à 12:42
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `encadrant`
--

CREATE TABLE `encadrant` (
  `idENCADRANT` int(4) NOT NULL,
  `nomS` varchar(100) DEFAULT NULL,
  `preS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `encadrant`
--

INSERT INTO `encadrant` (`idENCADRANT`, `nomS`, `preS`) VALUES
(1, 'bella', 'HOUSSIN'),
(2, NULL, 'fouzia'),
(3, 'amin', 'naiim');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `idE` int(5) NOT NULL,
  `nomE` varchar(100) DEFAULT NULL,
  `adressE` varchar(100) DEFAULT NULL,
  `villeE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`idE`, `nomE`, `adressE`, `villeE`) VALUES
(1, 'province asfi', 'hay ERRAHMA', 'SAFI'),
(2, 'EL MARSSA', 'El massira', 'SAFI'),
(3, 'est', 'el gods', 'oujda');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id_filliere` int(4) NOT NULL,
  `nomFILLIERE` varchar(100) DEFAULT NULL,
  `niveau` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id_filliere`, `nomFILLIERE`, `niveau`) VALUES
(1, 'GIM', '1ERE'),
(2, 'TIMQ', '2EME'),
(3, 'GI', '1ERE');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `idSTAG` int(4) NOT NULL,
  `cin` varchar(100) DEFAULT NULL,
  `nomST` varchar(100) DEFAULT NULL,
  `preST` varchar(100) DEFAULT NULL,
  `sexe` varchar(100) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `id_encadrant` int(4) DEFAULT NULL,
  `id_filliere` int(4) DEFAULT NULL,
  `id_entreprise` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`idSTAG`, `cin`, `nomST`, `preST`, `sexe`, `date_debut`, `date_fin`, `id_encadrant`, `id_filliere`, `id_entreprise`) VALUES
(1, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(2, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(3, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(4, 'EA456789', 'abderrhman', 'fennane', 'homme', '2021-06-12', '2021-08-12', 1, 3, 3),
(5, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(6, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(7, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(8, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(9, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(10, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(11, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(12, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(13, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(14, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(15, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(16, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(17, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(18, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(19, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(20, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(21, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(22, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(23, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(24, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(25, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(26, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(27, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(28, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(29, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(30, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(31, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(32, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(33, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(34, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(35, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(36, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(37, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(38, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(39, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(40, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(41, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(42, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(43, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(44, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(45, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(46, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(47, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(48, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(49, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(50, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(51, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(52, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(53, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(54, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(55, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(56, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(57, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(58, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(59, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(60, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(61, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(62, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(63, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(64, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(65, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(66, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(67, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(68, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(69, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(70, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(71, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(72, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(73, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(74, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(75, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(76, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(77, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(78, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(79, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(80, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(81, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(82, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(83, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(84, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(85, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(86, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(87, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(88, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(89, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(90, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(91, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(92, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(93, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(94, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(95, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(96, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(97, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(98, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(99, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(100, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(101, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(102, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(103, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(104, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(105, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(106, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(107, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(108, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(109, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(110, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(111, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(112, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(113, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(114, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(115, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(116, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(117, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(118, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(119, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(120, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(121, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(122, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(123, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(124, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(125, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(126, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(127, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(128, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(129, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(130, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(131, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(132, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(133, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(134, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(135, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(136, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(137, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(138, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(139, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(140, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(141, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(142, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(143, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(144, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(145, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(146, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(147, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(148, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(149, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(150, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(151, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(152, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(153, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(154, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(155, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(156, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(157, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(158, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(159, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(160, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(161, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(162, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(163, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(164, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(165, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(166, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(167, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(168, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(169, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(170, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(171, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(172, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(173, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(174, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(175, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(176, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(177, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(178, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(179, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(180, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(181, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(182, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(183, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(184, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(185, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(186, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(187, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(188, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(189, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(190, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(191, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(192, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(193, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(194, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(195, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(196, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(197, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(198, 'EA234567', 'mohamad', 'karim', 'homme', '2021-06-17', '2021-07-17', 2, 1, 2),
(199, 'EA345678', 'mourid', 'amina', 'femme', '2021-06-06', '2021-08-06', 1, 2, 1),
(200, 'EA456789', 'zoubir', 'rachide', 'homme', '2021-06-12', '2021-08-12', 2, 2, 1),
(201, 'EA567890', 'zouhairi', 'rachide', 'homme', '2021-06-05', '2021-07-05', 2, 3, 2),
(202, 'EA678901', 'zahir', 'anas', 'homme', '2021-06-10', '2021-07-10', 2, 3, 1),
(203, 'EA789012', 'moha', 'nabila', 'femme', '2021-06-14', '2021-08-14', 1, 2, 1),
(204, 'EA890123', 'ezzaki', 'najib', 'homme', '2021-06-20', '2021-07-20', 1, 2, 2),
(205, 'EA901234', 'salim', 'rachida', 'femme', '2021-06-12', '2021-07-12', 1, 3, 1),
(206, 'EA112345', 'salimi', 'naaima', 'femme', '2021-06-12', '2021-07-12', 2, 1, 2),
(207, 'EA223456', 'soulaiman', 'kamal', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(208, 'EA334567', 'faouzi', 'zakia', 'femme', '2021-06-06', '2021-08-06', 1, 2, 2),
(209, 'EA445678', 'ettaoussi', 'nouaman', 'homme', '2021-06-14', '2021-08-14', 2, 2, 1),
(210, 'EA123456', 'mohamadi', 'amine', 'homme', '2021-06-12', '2021-07-12', 2, 3, 1),
(211, 'EQ763813', 'rabab', 'mouin', 'femme', '2021-04-08', '2021-07-16', 1, 2, 1),
(212, '', '', '', 'femme', '0000-00-00', '0000-00-00', 1, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `encadrant`
--
ALTER TABLE `encadrant`
  ADD PRIMARY KEY (`idENCADRANT`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`idE`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id_filliere`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`idSTAG`),
  ADD KEY `fk_ee` (`id_filliere`),
  ADD KEY `fk_e` (`id_encadrant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `encadrant`
--
ALTER TABLE `encadrant`
  MODIFY `idENCADRANT` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `idE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id_filliere` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  MODIFY `idSTAG` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD CONSTRAINT `fk_e` FOREIGN KEY (`id_encadrant`) REFERENCES `encadrant` (`idENCADRANT`),
  ADD CONSTRAINT `fk_ee` FOREIGN KEY (`id_filliere`) REFERENCES `filiere` (`id_filliere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
