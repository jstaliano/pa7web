-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15/07/2020 às 19:37
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
-- Estrutura para tabela `tab_SenhaPa7`
--

CREATE TABLE `tab_SenhaPa7` (
  `IdSenhaPa7` bigint(11) NOT NULL,
  `SenhaPa7` int(11) NOT NULL,
  `DtReceb` date NOT NULL,
  `HrReceb` time NOT NULL,
  `FechaPlantao` int(11) DEFAULT NULL,
  `serverstatus` smallint(6) DEFAULT NULL,
  `remoteAddr` text COLLATE utf8_bin NOT NULL,
  `IdSenha` int(11) NOT NULL,
  `DataHoraId` text COLLATE utf8_bin DEFAULT NULL,
  `Situacao` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `tab_SenhaPa7`
--

INSERT INTO `tab_SenhaPa7` (`IdSenhaPa7`, `SenhaPa7`, `DtReceb`, `HrReceb`, `FechaPlantao`, `serverstatus`, `remoteAddr`, `IdSenha`, `DataHoraId`, `Situacao`) VALUES
(46947, 450, '2020-07-15', '11:03:09', 1, NULL, '177.43.202.178', 495242, '20200715   11:02:52', 0),
(46948, 451, '2020-07-15', '11:03:14', 1, NULL, '177.43.202.178', 495243, '20200715   11:02:56', 0),
(46949, 453, '2020-07-15', '11:04:00', 1, NULL, '177.43.202.178', 495244, '20200715   11:03:45', 0),
(46950, 454, '2020-07-15', '11:05:00', 1, NULL, '177.43.202.178', 495245, '20200715   11:04:46', 0),
(46951, 456, '2020-07-15', '11:32:26', 1, NULL, '177.43.202.178', 495246, '20200715   11:32:11', 0),
(46952, 457, '2020-07-15', '11:35:26', 1, NULL, '177.43.202.178', 495247, '20200715   11:35:10', 0),
(46953, 459, '2020-07-15', '12:22:30', 1, NULL, '177.43.202.178', 495248, '20200715   12:22:15', 0),
(46954, 461, '2020-07-15', '12:29:49', 1, NULL, '177.43.202.178', 495249, '20200715   12:29:33', 0),
(46955, 464, '2020-07-15', '12:36:16', 1, NULL, '177.43.202.178', 495250, '20200715   12:35:59', 0),
(46956, 467, '2020-07-15', '12:38:54', 1, NULL, '177.43.202.178', 495251, '20200715   12:38:39', 0),
(46957, 469, '2020-07-15', '12:43:06', 1, NULL, '177.43.202.178', 495252, '20200715   12:42:50', 0),
(46958, 472, '2020-07-15', '12:46:30', 1, NULL, '177.43.202.178', 495253, '20200715   12:46:13', 0),
(46959, 475, '2020-07-15', '12:52:20', 1, NULL, '177.43.202.178', 495254, '20200715   12:52:04', 0),
(46960, 477, '2020-07-15', '15:38:21', 1, NULL, '177.43.202.178', 495255, '20200715   15:38:04', 0),
(46961, 478, '2020-07-15', '15:39:19', 1, NULL, '177.43.202.178', 495256, '20200715   15:39:04', 0),
(46962, 479, '2020-07-15', '15:48:09', 1, NULL, '177.43.202.178', 495257, '20200715   15:47:52', 0),
(46963, 481, '2020-07-15', '15:53:33', 1, NULL, '177.43.202.178', 495258, '20200715   15:53:17', 0),
(46964, 483, '2020-07-15', '16:01:23', 1, NULL, '177.43.202.178', 495259, '20200715   16:01:08', 0),
(46965, 486, '2020-07-15', '16:15:40', 1, NULL, '177.43.202.178', 495260, '20200715   16:15:24', 0),
(46966, 488, '2020-07-15', '16:21:50', 1, NULL, '177.43.202.178', 495261, '20200715   16:21:34', 0),
(46967, 490, '2020-07-15', '16:22:54', 1, NULL, '177.43.202.178', 495262, '20200715   16:22:38', 0),
(46968, 492, '2020-07-15', '16:36:45', 1, NULL, '177.43.202.178', 495263, '20200715   16:36:30', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tab_SenhaPa7`
--
ALTER TABLE `tab_SenhaPa7`
  ADD PRIMARY KEY (`IdSenhaPa7`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tab_SenhaPa7`
--
ALTER TABLE `tab_SenhaPa7`
  MODIFY `IdSenhaPa7` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46969;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
