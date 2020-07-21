-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15/07/2020 às 19:58
-- Versão do servidor: 10.2.31-MariaDB
-- Versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u309778760_gcoop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `fechaplantao`
--

CREATE TABLE `fechaplantao` (
  `IdFechamento` int(11) NOT NULL,
  `Plantao` smallint(6) NOT NULL,
  `Senha` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Hora` time NOT NULL,
  `obs` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `fechaplantao`
--

INSERT INTO `fechaplantao` (`IdFechamento`, `Plantao`, `Senha`, `Data`, `Hora`, `obs`) VALUES
(12, 2, 616, '2020-04-11', '17:55:45', 'teste final'),
(13, 1, 302, '2020-04-12', '00:02:37', ''),
(14, 2, 720, '2020-04-13', '00:01:03', ''),
(15, 1, 360, '2020-04-14', '00:06:03', ''),
(16, 2, 766, '2020-04-15', '00:10:53', ''),
(17, 1, 52, '2020-04-16', '00:01:33', ''),
(18, 2, 417, '2020-04-17', '01:32:34', ''),
(19, 1, 125, '2020-04-18', '00:01:13', ''),
(20, 2, 480, '2020-04-19', '00:02:18', ''),
(21, 1, 197, '2020-04-20', '00:00:37', ''),
(22, 2, 558, '2020-04-21', '00:01:52', ''),
(23, 1, 264, '2020-04-22', '00:00:43', ''),
(24, 2, 638, '2020-04-23', '00:06:47', ''),
(25, 1, 376, '2020-04-24', '00:02:03', ''),
(26, 2, 727, '2020-04-25', '00:01:01', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `fechaplantao`
--
ALTER TABLE `fechaplantao`
  ADD PRIMARY KEY (`IdFechamento`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `fechaplantao`
--
ALTER TABLE `fechaplantao`
  MODIFY `IdFechamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
