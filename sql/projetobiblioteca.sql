-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 2024-07-11 01:55:12
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetobiblioteca`
--
CREATE DATABASE IF NOT EXISTS `projetobiblioteca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetobiblioteca`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id_emp` int(11) NOT NULL,
  `_cpf` varchar(14) NOT NULL,
  `_isbn` varchar(17) NOT NULL,
  `dataDev` date NOT NULL,
  `dataEmp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id_emp`, `_cpf`, `_isbn`, `dataDev`, `dataEmp`) VALUES
(12, '22222222222', '978-8532627698', '2024-06-20', '2025-06-14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `isbn` varchar(17) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `ano` year(4) NOT NULL,
  `editora` varchar(200) NOT NULL,
  `paginas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`isbn`, `titulo`, `autor`, `ano`, `editora`, `paginas`) VALUES
('1', 'Mundo de Sofia', 'Martin ', '2024', 'EditoraA', 900),
('2', 'Alice in Wonderland', 'OldAuthor', '2000', 'Contos', 300),
('3', 'Titulo aleatorio', 'algum autor', '2022', 'editoraB', 200),
('978-8531400933', 'Tractatus Logico-Philosophicus', 'Ludwig Wittgenstein', '2017', 'Penguin-Companhia', 280),
('978-8532627698', 'Fenomenologia do espírito', 'Georg Wilhelm Friedrich Hegel', '2014', 'Editora Vozes', 552),
('978-8532632845', 'Tractatus Logico-Philosophicus', 'Ludwig Wittgenstein', '2017', 'Penguin-Companhia', 280),
('99959595955', 'Titulo teste três', 'djskadjksajdksa', '2015', 'dskajdksajdk', 900);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `fone` varchar(16) NOT NULL,
  `sexo` char(1) NOT NULL,
  `dn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `endereco`, `fone`, `sexo`, `dn`) VALUES
('111', 'Roberto', 'Bahia', '123456789', 'm', '2004-05-12'),
('2', 'Luana', 'Japão', '1198989898', 'f', '1998-03-15'),
('22222222222', 'Maria Silva', 'São Paulo', '1156455647', 'f', '1997-02-12'),
('3', 'usuario aleatorio', 'Australia', '123445485757', 'f', '2000-01-01'),
('45678912389', 'Luiz Inácio Lula da Silva', 'Santa Catarina', '61 98781236', 'm', '1967-01-23'),
('7777777777', 'Rodrigo macedo', 'Marte', '61111111111', 'm', '2007-05-23'),
('95195195195195', 'Bianco Marques', 'Australia', '61888888888', 'm', '2001-02-15');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id_emp`),
  ADD KEY `usuario_cpf` (`_cpf`),
  ADD KEY `livro_isbn` (`_isbn`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`isbn`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `emprestimos_ibfk_1` FOREIGN KEY (`_cpf`) REFERENCES `usuarios` (`cpf`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emprestimos_ibfk_2` FOREIGN KEY (`_isbn`) REFERENCES `livros` (`isbn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
