-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jul-2021 às 02:24
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senac_noite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

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
(1, 'Serviços', '<p>Um <strong>novo </strong>texto.</p>\r\n<ul>\r\n<li>Teste</li>\r\n<li>Teste dois</li>\r\n<li>Teste 3</li>\r\n</ul>', 'testando a meta', 1, 'Páginas', '2021-06-25', '', 'servicos'),
(3, 'Novo titulo', '<p>Nova Descri</p>', 'Meta Nova', 1, 'Notícias', '2021-06-30', 'interrogacao.png', 'erer'),
(4, 'Quem Somos', 'Testando', 'teste', 1, 'Notícias', '2021-07-25', '', ''),
(7, 'Teste', '<p>teste</p>', 'efre', 1, 'Páginas', '2021-07-01', 'capa-udemy.png', 'empresa'),
(8, 'Minha Empresa', '<p>Teste de GOOGLE ADS.</p>', 'ere', 1, 'Páginas', '2021-07-02', 'ads-google.png', 'empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_registro`) VALUES
(2, 'susana', 'susana@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '2021-05-17'),
(9, 'Pri do Prado', 'pri@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2021-06-18'),
(10, 'Fernanda', 'fernanda@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '2021-06-18');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
