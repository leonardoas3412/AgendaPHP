-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Out-2019 às 19:38
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbagenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `cod_contato` int(11) UNSIGNED NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `rua` varchar(40) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `fone` varchar(13) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusu`
--

CREATE TABLE `tbusu` (
  `cod_usu` int(4) UNSIGNED NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusu`
--

INSERT INTO `tbusu` (`cod_usu`, `nome`, `email`, `senha`) VALUES
(1, 'leo', 'leowolf@yahoocom.br', '987654321'),
(2, 'Castelo Larceda', 'volta1850prov', '987654321nivel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcontato`
--
ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`cod_contato`);

--
-- Indexes for table `tbusu`
--
ALTER TABLE `tbusu`
  ADD PRIMARY KEY (`cod_usu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcontato`
--
ALTER TABLE `tbcontato`
  MODIFY `cod_contato` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbusu`
--
ALTER TABLE `tbusu`
  MODIFY `cod_usu` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
