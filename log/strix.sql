-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2019 às 02:38
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `attempt`
--

CREATE TABLE `attempt` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(10) NOT NULL,
  `nome` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nome_usu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasci` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permissoes` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `conf_senha` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `nome_usu`, `email`, `cpf`, `sexo`, `data_nasci`, `dataCriacao`, `permissoes`, `status`, `senha`, `conf_senha`) VALUES
(52, 'Yung', 'Buda', '7k', 'SoundFoodGang@gmail.com', '111.111.111-11', 'Masculino', '21/01/2002', '2019-04-14 05:45:17', 'users', 'confirmation', '$2y$10$nbxPyrL2cm69YBrY.Vmg.OX/aaq6.v7BS5UEkmVOKN4p.r4oIEdhe', '$2y$10$3tH9W0VnWDZzvt8ABFf9QeGZU3oMl4QLzBWjBx0wlk1RVZUVqx9u6'),
(53, 'Yung', 'Lean', 'sad', 'yungLean@gmail.com', '111.111.111-11', 'Masculino', '20/04/2002', '2019-04-20 16:52:54', 'users', 'confirmation', '$2y$10$cSp3w91mk9QBhIkOh53Jp.ZCSdeBQZ3LNzgczxcinHnCXOQa5klCu', '$2y$10$0LtMpBxvMo7uAZnMq/pK5OO16oC7BpOZO2e/gLBPpE1Ow1A.uCRu.'),
(57, 'Jo&atilde;o', 'Vitor', 'Yung_lean', 'joa.fggf3.27@gmail.com', '111.111.111-11', 'Masculino', '20/04/2002', '2019-04-28 15:39:58', 'users', 'confirmation', '$2y$10$5oOH3yAxtk3B5ptRT51Yg.R0VU.YbRWUQ3B92FnSvMXRwl52zRjVe', '$2y$10$8N7XLSTE60BvYHcaDtzrQeIkmV7PIL8XU3A9INJrvyy/NLtASpFda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id` int(20) NOT NULL,
  `id_adm` int(20) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postagem` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `visitas` int(200) NOT NULL,
  `curtidas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt`
--
ALTER TABLE `attempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt`
--
ALTER TABLE `attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
