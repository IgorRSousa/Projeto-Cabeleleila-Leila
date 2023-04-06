-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Abr-2023 às 15:41
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cabeleleilaleila`
--
CREATE DATABASE IF NOT EXISTS `cabeleleilaleila` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cabeleleilaleila`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `servico` varchar(255) NOT NULL,
  `dataehora` datetime NOT NULL,
  `observacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `nome`, `servico`, `dataehora`, `observacao`) VALUES
(26, 'ClienteUm', 'Corte de cabelo.', '2023-04-10 10:00:00', 'Nada a declarar.'),
(27, 'ClienteUm', 'Maquiagem.', '2023-04-08 10:12:00', 'Gostaria se ser atendida pela Sonia.'),
(28, 'ClienteUm', 'Cortar cabelo, Luzes e Progressiva. ', '2023-04-14 10:13:00', 'Nada a declarar.'),
(29, 'ClienteDois', 'Pedicure.', '2023-04-07 10:15:00', 'Nada.'),
(30, 'ClienteDois', 'Cortar cabelo e Progressiva. ', '2023-04-11 15:30:00', 'Nada.'),
(33, 'ClienteDois', 'Maquiagem.', '2023-04-13 10:20:00', 'Nenhuma.'),
(34, 'ClienteTres', 'Maquiagem.', '2023-04-10 10:23:00', 'Nada a declarar.'),
(35, 'ClienteTres', 'Pedicure.', '2023-04-12 10:24:00', 'Nenhuma.'),
(36, 'ClienteTres', 'Cortar cabelo e Progressiva. ', '2023-04-15 15:30:00', 'Nada a declarar.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `datacadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `tipo`, `datacadastro`) VALUES
(1, 'Leila Santos', 'leina@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '2023-04-03 00:00:00'),
(48, 'ClienteUm', 'cliente@um.com', 'ClienteUm', 'e10adc3949ba59abbe56e057f20f883e', '2', '2023-04-06 15:09:00'),
(49, 'ClienteDois', 'cliente@dois.com', 'ClienteDois', 'e10adc3949ba59abbe56e057f20f883e', '2', '2023-04-06 15:10:00'),
(50, 'ClienteTres', 'cliente@tres.com', 'ClienteTres', 'e10adc3949ba59abbe56e057f20f883e', '2', '2023-04-06 15:10:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamentos`
--
ALTER TABLE `agendamentos`
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
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
