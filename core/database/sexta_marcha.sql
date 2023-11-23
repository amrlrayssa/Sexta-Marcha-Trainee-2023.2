-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2023 às 19:00
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sexta_marcha`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `conteudo` text NOT NULL,
  `imagem` varchar(256) NOT NULL,
  `data` date NOT NULL,
  `autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `post`
--

INSERT INTO `post` (`id`, `titulo`, `conteudo`, `imagem`, `data`, `autor`) VALUES
(1, 'Tudo sobre o Tricampeonato do Brasileiro ', 'Ayrton Senna da Silva ONM ComRB CvMA OME foi um piloto de Fórmula 1, empresário e filantropo brasileiro...', 'https://s2.glbimg.com/NfOMrObYEv3E35cdUjfvOx5gA9o=/620x520/smart/e.glbimg.com/og/ed/f/original/2019/05/22/ayrton-senna-gq.jpg', '2023-11-01', 2),
(2, 'Ferrari esperançosa após Pole Position', 'Charles Leclerc leva a melhor durante treino classificatório para a corrida do Bahrein ao melhorar seu tempo...', 'https://www.autoracing.com.br/wp-content/uploads/2022/04/f1-leclerc-ferrari-2022.jpg', '2023-11-12', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Breno', 'breno@blogsexta.com', 'senna2'),
(2, 'Tintim', 'tintim@blogsexta.com', 'ayrton1'),
(3, 'Kapela', 'kapela@blogsexta.com', 'interlagos'),
(4, 'CBum', 'felipe@blogsexta.com', 'ramondino'),
(5, 'Davi Pacheco', 'dpacheco@blogsexta.com', 'davipacheco'),
(6, 'Rayssa', 'rayssa_scrum@blogsexta.com', 'diretora');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor` (`autor`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
