-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30-Jan-2021 às 00:13
-- Versão do servidor: 8.0.22-0ubuntu0.20.04.3
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `diarista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int NOT NULL,
  `cliente_nome` varchar(30) NOT NULL,
  `sobrenome_cliente` varchar(30) NOT NULL,
  `endereco_cliente` varchar(30) NOT NULL,
  `imovel_cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_nome`, `sobrenome_cliente`, `endereco_cliente`, `imovel_cliente`) VALUES
(5, 'marcela', 'gome', 'rua das flores, 245', 'casa'),
(6, 'fernanda', 'oliveira', 'rua rio negro, 278', 'apartamento'),
(7, 'fernanda', 'oliveira', 'rua rio negro, 278', 'apartamento'),
(8, 'marcela', 'gome', 'rua das flores, 245', 'casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `id` int NOT NULL,
  `diarista_nome` varchar(30) NOT NULL,
  `diarista_sobrenome` varchar(30) NOT NULL,
  `diarista_endereco` varchar(30) NOT NULL,
  `diarista_salario` varchar(30) NOT NULL,
  `diarista_servico` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`id`, `diarista_nome`, `diarista_sobrenome`, `diarista_endereco`, `diarista_salario`, `diarista_servico`) VALUES
(5, 'mariana', 'julia', 'rua das limeiras,256', '89', 'faxina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int NOT NULL,
  `diarista_nome` varchar(30) DEFAULT NULL,
  `diarista_sobrenome` varchar(30) DEFAULT NULL,
  `diarista_endereco` varchar(30) DEFAULT NULL,
  `diarista_salario` varchar(30) NOT NULL,
  `diarista_servico` varchar(30) DEFAULT NULL,
  `diarista_horas` int DEFAULT NULL,
  `valor_receber` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `diarista_nome`, `diarista_sobrenome`, `diarista_endereco`, `diarista_salario`, `diarista_servico`, `diarista_horas`, `valor_receber`) VALUES
(1, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 8, 0),
(2, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 20, 0),
(3, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 23, 0),
(4, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 23, 0),
(6, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 23, 0),
(7, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 8, 0),
(8, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 5, 0),
(9, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 5, 0),
(10, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 5, 250),
(11, 'mariana ', 'souza ', 'rua das limeiras,256 ', '50 ', 'faxina ', 10, 500),
(12, 'mariana ', 'souza ', 'rua das limeiras,256 ', '', 'faxina ', 5, 0),
(13, 'mariana ', 'souza ', 'rua das limeiras,256 ', '5', 'faxina ', 5, 25),
(14, 'mariana ', 'souza ', 'rua das limeiras,256 ', '5', 'faxina ', 5, 25),
(15, 'mariana ', 'souza ', 'rua das limeiras,256 ', '', 'faxina ', 1, 0),
(16, 'mariana ', 'souza ', 'rua das limeiras,256 ', '10', 'faxina ', 1, 100),
(17, 'mariana ', 'souza ', 'rua das limeiras,256 ', '6', 'faxina ', 5, 30),
(18, 'mariana ', 'souza ', 'rua das limeiras,256 ', '5', 'faxina ', 5, 25),
(19, 'mariana ', 'souza ', 'rua das limeiras,256 ', '6', 'faxina ', 5, 30),
(20, 'mariana ', 'julia ', 'rua das limeiras,256 ', '89 ', 'faxina ', 5, 445),
(21, 'mariana ', 'julia ', 'rua das limeiras,256 ', '89 ', 'faxina ', 5, 445),
(22, 'mariana ', 'julia ', 'rua das limeiras,256 ', '89 ', 'faxina ', 5, 445),
(23, 'mariana ', 'julia ', 'rua das limeiras,256 ', '89 ', 'faxina ', 5, 445),
(24, 'mariana ', 'julia ', 'rua das limeiras,256 ', '89 ', 'faxina ', 5, 445);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices para tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
