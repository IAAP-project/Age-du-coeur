-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Abr-2021 às 09:01
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `iaap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_form`
--

DROP TABLE IF EXISTS `info_form`;
CREATE TABLE IF NOT EXISTS `info_form` (
  `id_info_form` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `poids` float NOT NULL,
  `taille` float NOT NULL,
  `fumeur` tinyint(1) NOT NULL,
  `diabetique` tinyint(1) NOT NULL,
  `hypertension` tinyint(1) NOT NULL,
  `tension` float NOT NULL,
  `cholesterolTotal` float NOT NULL,
  `cholesterolHDL` float NOT NULL,
  `emboliePulmonaire` smallint(6) DEFAULT NULL,
  `anginePoitrine` smallint(6) DEFAULT NULL,
  `insuffisanceCardiaque` smallint(6) DEFAULT NULL,
  `avc` smallint(6) DEFAULT NULL,
  `infarctus` smallint(6) DEFAULT NULL,
  `arterite` smallint(6) DEFAULT NULL,
  `details` varchar(250) DEFAULT NULL,
  `ville` varchar(50) NOT NULL,
  `codePostal` int(11) NOT NULL,
  PRIMARY KEY (`id_info_form`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `info_form`
--

INSERT INTO `info_form` (`id_info_form`, `id_user`, `poids`, `taille`, `fumeur`, `diabetique`, `hypertension`, `tension`, `cholesterolTotal`, `cholesterolHDL`, `emboliePulmonaire`, `anginePoitrine`, `insuffisanceCardiaque`, `avc`, `infarctus`, `arterite`, `details`, `ville`, `codePostal`) VALUES
(1, 1, 60, 1.6, 1, 1, 1, 3, 3, 3, NULL, 1997, NULL, NULL, NULL, NULL, 'detail', 'ds', 545),
(2, 1, 60, 1.6, 1, 1, 1, 3, 3, 3, NULL, 1997, NULL, NULL, NULL, NULL, 'detail', 'ds', 545);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `sexe` char(1) NOT NULL,
  `dateBirthday` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
