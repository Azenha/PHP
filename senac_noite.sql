-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2021 às 21:18
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

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `meta_descricao` text NOT NULL,
  `publicado` tinyint(2) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `titulo`, `descricao`, `meta_descricao`, `publicado`, `categoria`, `data_cadastro`, `imagem`, `link`) VALUES
(1, 'Serviços', '<p>Um <strong>novo </strong>texto.</p>\r\n<ul>\r\n<li>Teste</li>\r\n<li>Teste dois</li>\r\n<li>Teste 3</li>\r\n</ul>', 'testando a meta', 1, 'Páginas', '2021-06-25', '', 'servicos'),
(3, 'Novo titulo', '<p>Nova Descri</p>', 'Meta Nova', 1, 'Notícias', '2021-06-30', 'interrogacao.png', 'erer'),
(4, 'Quem Somos', 'Testando', 'teste', 1, 'Notícias', '2021-07-25', '', ''),
(7, 'Teste', '<p>teste</p>', 'efre', 1, 'Páginas', '2021-07-01', 'capa-udemy.png', 'empresa'),
(8, 'Minha Empresa', '<p>Teste de GOOGLE ADS.</p>', 'ere', 1, 'Páginas', '2021-07-02', 'ads-google.png', 'empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_registro` date NOT NULL,
  `administrador` tinyint(1) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_registro`, `administrador`, `avatar`) VALUES
(2, 'susana', 'susana@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '2021-05-17', 0, ''),
(9, 'Pri do Prado', 'pri@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2021-06-18', 0, ''),
(10, 'Fernanda', 'fernanda@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '2021-06-18', 0, ''),
(12, 'admin', 'admin@email.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2021-07-13', 1, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
