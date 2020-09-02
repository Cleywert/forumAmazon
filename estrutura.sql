-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Set-2020 às 01:27
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `forum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `creatAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`id`, `titulo`, `descricao`, `creatAt`) VALUES
(1, 'teste', 'teste', '2020-08-28'),
(2, 'Teste 2', 'Testando d nv\r\n', '2020-08-28'),
(3, 'Quando o mundo acaba?', 'Queria saber quando o mundo vai acabar para poder me preparar. Alguém ai sabe me dizer?', '2020-08-28'),
(4, 'PQ o Fabrício some?', 'O Fabrício sempre chama pra reunião e some... Q mistério é esse?', '2020-08-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `id` int(11) NOT NULL,
  `corpo` text NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `creatAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`id`, `corpo`, `id_pergunta`, `creatAt`) VALUES
(1, 'O mundo acaba hj e eu estarei dançando', 3, '2020-08-31'),
(2, 'O mundo acabou em 2012 bro... Isso é só delírio coletivo', 3, '2020-08-31'),
(3, 'Testa ai, bro\r\n', 2, '2020-08-31'),
(4, 'Não sei.. Ele é gay', 4, '2020-08-31');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREING` (`id_pergunta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
