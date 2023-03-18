-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Mar-2023 às 02:12
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_quiz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_quiz`
--

CREATE TABLE `t_quiz` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(4000) NOT NULL,
  `alternativa1` varchar(2000) NOT NULL,
  `alternativa2` varchar(2000) NOT NULL,
  `alternativa3` varchar(2000) NOT NULL,
  `alternativa4` varchar(2000) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `resp1` varchar(20) NOT NULL,
  `resp2` varchar(20) NOT NULL,
  `resp3` varchar(20) NOT NULL,
  `resp4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_quiz`
--

INSERT INTO `t_quiz` (`id`, `pergunta`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `imagem`, `resp1`, `resp2`, `resp3`, `resp4`) VALUES
(4, 'Qual vc prefere mais?', 'Superman', 'Thor', 'Mulher Maravilha', 'Batman', 'imagens/fundo3.jpg', 'dc', 'marvel', 'dc', 'dc'),
(5, 'Quem venceria essa luta?', 'Iron Man', 'Lanterna Verde', 'Homem Formiga', 'Homen Aranha', 'imagens/fundo5.jpg', 'marvel', 'dc', 'marvel', 'marvel'),
(6, 'Quem é o pior perssonal para vc?', 'Batman', 'Thor', 'Superman', 'Iron Man', 'imagens/fundo2.jpg', 'dc', 'marvel', 'dc', 'marvel');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_quiz`
--
ALTER TABLE `t_quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_quiz`
--
ALTER TABLE `t_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
