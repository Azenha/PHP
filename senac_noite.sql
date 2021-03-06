-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jul-2021 às 21:11
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senac_noite`
--
CREATE DATABASE IF NOT EXISTS `senac_noite` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `senac_noite`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

DROP TABLE IF EXISTS `paginas`;
CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `meta_descricao` text NOT NULL,
  `publicado` tinyint(2) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `titulo`, `descricao`, `meta_descricao`, `publicado`, `categoria`, `data_cadastro`, `imagem`, `link`) VALUES
(1, 'Dúvidas', '<p>Um <strong>novo </strong>texto.</p>\\r\\n<ul>\\r\\n<li>Teste</li>\\r\\n<li>Teste dois</li>\\r\\n<li>Teste 3</li>\\r\\n</ul>', 'testando a meta', 1, 'Páginas', '2021-06-25', '', 'servicos'),
(3, 'Novo titulo', '<p>Nova Descri</p>', 'Meta Nova', 1, 'Notícias', '2021-06-30', 'interrogacao.png', 'erer'),
(4, 'Quem Somos', 'Testando', 'teste', 1, 'Notícias', '2021-07-25', '', ''),
(7, 'Códigos', '<p> Códigos </p>', 'efre', 1, 'Páginas', '2021-07-01', '', 'empresa'),
(8, 'Quem somos', '<p>Teste de GOOGLE ADS.</p>', 'ere', 1, 'Páginas', '2021-07-02', 'ads-google.png', 'empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_registro` date NOT NULL,
  `administrador` int(1) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_registro`, `administrador`, `avatar`) VALUES
(2, 'susana', 'susana@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '2021-05-17', 0, 'person.png'),
(9, 'Pri', 'pri@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2021-06-18', 0, 'person.png'),
(10, 'Fe', 'fernanda@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '2021-06-18', 0, 'person.png'),
(12, 'admin', 'admin@email.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2021-07-13', 1, 'person.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
