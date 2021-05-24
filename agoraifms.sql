-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2021 às 23:16
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agoraifms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE `aulas` (
  `id` int(4) NOT NULL,
  `id_trilha` int(4) NOT NULL,
  `posicao` int(10) NOT NULL,
  `titulo` int(100) NOT NULL,
  `pontos` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `secoes`
--

CREATE TABLE `secoes` (
  `id` int(4) NOT NULL,
  `id_aula` int(4) NOT NULL,
  `posicao` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `conteudo` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_usuario_aula`
--

CREATE TABLE `status_usuario_aula` (
  `id` int(4) NOT NULL,
  `id_usuario` int(4) NOT NULL,
  `id_aula` int(4) NOT NULL,
  `concluida` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_usuario_trilha`
--

CREATE TABLE `status_usuario_trilha` (
  `id` int(4) NOT NULL,
  `id_usuario` int(4) NOT NULL,
  `id_trilha` int(4) NOT NULL,
  `progresso` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trilhas`
--

CREATE TABLE `trilhas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `ativa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `trilhas`
--

INSERT INTO `trilhas` (`id`, `titulo`, `foto`, `descricao`, `ativa`) VALUES
(26, 'Filosofia Antiga', 'fotos/240520211647FilosofiaAntiga.jpg', 'Comece agora mesmo!', 0),
(27, 'Maquiavel', 'fotos/240520211649Maquiavel.png', 'Conheça a história desse grande filósofo', 0),
(28, 'O Poder em maquiavél', 'fotos/240520211649Maquiavel.png', 'Vamos falar sobre poder?', 0),
(29, 'A Liberdade em Maquivél', 'fotos/240520211650Maquiavel.png', 'Conceitos importantes sobre a liberdade', 0),
(30, 'Kant', 'fotos/240520211650Kant.jpg', 'Introdução à Kant', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `perfil` varchar(20) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `perfil`, `pontos`) VALUES
(28, 'Giovane Caon de Lima', 'giovanecdelima@gmail.com', '123', 'aluno', 0),
(29, 'Giovane Caon de Lima', 'giovane@gmail.com', '123', 'professor', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trilha` (`id_trilha`);

--
-- Índices para tabela `secoes`
--
ALTER TABLE `secoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_aula` (`id_aula`);

--
-- Índices para tabela `status_usuario_aula`
--
ALTER TABLE `status_usuario_aula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_aula` (`id_aula`);

--
-- Índices para tabela `status_usuario_trilha`
--
ALTER TABLE `status_usuario_trilha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_trilha` (`id_trilha`);

--
-- Índices para tabela `trilhas`
--
ALTER TABLE `trilhas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `secoes`
--
ALTER TABLE `secoes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `status_usuario_aula`
--
ALTER TABLE `status_usuario_aula`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `status_usuario_trilha`
--
ALTER TABLE `status_usuario_trilha`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `trilhas`
--
ALTER TABLE `trilhas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aulas`
--
ALTER TABLE `aulas`
  ADD CONSTRAINT `aulas_ibfk_1` FOREIGN KEY (`id_trilha`) REFERENCES `trilhas` (`id`);

--
-- Limitadores para a tabela `secoes`
--
ALTER TABLE `secoes`
  ADD CONSTRAINT `secoes_ibfk_1` FOREIGN KEY (`id_aula`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `status_usuario_aula`
--
ALTER TABLE `status_usuario_aula`
  ADD CONSTRAINT `status_usuario_aula_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `status_usuario_aula_ibfk_2` FOREIGN KEY (`id_aula`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `status_usuario_trilha`
--
ALTER TABLE `status_usuario_trilha`
  ADD CONSTRAINT `status_usuario_trilha_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `status_usuario_trilha_ibfk_2` FOREIGN KEY (`id_trilha`) REFERENCES `trilhas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
