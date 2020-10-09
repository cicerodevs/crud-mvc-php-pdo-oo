-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Out-2020 às 14:39
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vikings`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_contato_extra`
--

CREATE TABLE `tab_contato_extra` (
  `id_contato` int(11) NOT NULL,
  `cel` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recado` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `funcionario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tab_contato_extra`
--

INSERT INTO `tab_contato_extra` (`id_contato`, `cel`, `recado`, `funcionario_id`) VALUES
(1, '(38) 98120-3259', NULL, 1),
(3, NULL, '(38) 99966-0090', 1),
(4, '(38) 99966-2811', NULL, 1),
(5, '(61)98155-0218', NULL, 2),
(6, NULL, '(61)98155-0211', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_documentos`
--

CREATE TABLE `tab_documentos` (
  `cpf` char(14) COLLATE utf8_unicode_ci NOT NULL,
  `pis` char(14) COLLATE utf8_unicode_ci NOT NULL,
  `rg` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_eleitor` char(14) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_zona` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_secao` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `certif_militar` char(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnh` char(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpts` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `cpts_series` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `funcionario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tab_documentos`
--

INSERT INTO `tab_documentos` (`cpf`, `pis`, `rg`, `titulo_eleitor`, `titulo_zona`, `titulo_secao`, `certif_militar`, `cnh`, `cpts`, `cpts_series`, `funcionario_id`) VALUES
('034.728.256-63', '759.25003.15-0', '32.238.634-2', '2536383920', '123c', '120b', '', '', '3649273526', '092827', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_enderecos`
--

CREATE TABLE `tab_enderecos` (
  `cep` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `numero` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `funcionario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tab_enderecos`
--

INSERT INTO `tab_enderecos` (`cep`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `funcionario_id`) VALUES
('72315-523', 'Quadra QN 515 Conjunto C', '670', 'Samambaia Sul (Samambaia)', 'Brasília', 'DF', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_funcionarios`
--

CREATE TABLE `tab_funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nome_conjuge` varchar(115) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nascimento` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `naturalidade` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `nome_mae` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `nome_pai` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tab_funcionarios`
--

INSERT INTO `tab_funcionarios` (`id`, `nome`, `estado_civil`, `nome_conjuge`, `data_nascimento`, `sexo`, `escolaridade`, `naturalidade`, `nome_mae`, `nome_pai`, `picture`, `email`, `cel`, `tel`) VALUES
(1, 'Catarina Olivia Flávia Corte Real', 'Casado', 'Marcos Oliveira', '13/09/1997', 'F', 'Ensino Sperior', 'Brasileira', 'Enzo Thiago Igor Corte Real', 'Analu Fabiana', 'isabella_emilly.jpg', 'catarinaoliviaflaviacortereal@prifree.fr', '(38) 99966-2811', '(38) 3928-1181'),
(2, 'Luana Oliveira', 'Solteiro', '', '21/06/1996', 'F', 'Ensino Superior', 'Brasileira', 'Clarice Oliveira', 'João carlos Oliveira', 'luana_oliveira.jpg', 'luanaoliveira@outlook.com', '(61)99167-2318', '(61)3224-1987'),
(3, 'Luana Oliveira', 'Solteiro', 'Clarice Oliveira João carlos Oliveira', '21/06/1996', 'F', 'Ensino Superior', 'Brasileira', 'Clarice Oliveira ', 'João carlos Oliveira', 'luana_oliveira.jpg', 'luanaoliveira@outlook.com', '(61)98155-0218', '(61)3219-2007'),
(4, 'Luana Oliveira', 'Casado', 'Lucas da Silva', '21/06/1996', 'F', 'Ensino Superior', 'Brasileira', 'João carlos Oliveira', 'Clarice Oliveira', 'luana_oliveira.jpg', 'luanaoliveira@outlook.com', '(61)98155-0218', '6132241987');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_contato_extra`
--
ALTER TABLE `tab_contato_extra`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `fk_tab_contatos_tab_funcionarios1_idx` (`funcionario_id`);

--
-- Índices para tabela `tab_documentos`
--
ALTER TABLE `tab_documentos`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `fk_tab_documentos_tab_funcionarios_idx` (`funcionario_id`);

--
-- Índices para tabela `tab_enderecos`
--
ALTER TABLE `tab_enderecos`
  ADD KEY `fk_tb_endereco_tab_funcionarios1_idx` (`funcionario_id`);

--
-- Índices para tabela `tab_funcionarios`
--
ALTER TABLE `tab_funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_contato_extra`
--
ALTER TABLE `tab_contato_extra`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tab_funcionarios`
--
ALTER TABLE `tab_funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tab_contato_extra`
--
ALTER TABLE `tab_contato_extra`
  ADD CONSTRAINT `fk_tab_contatos_tab_funcionarios1` FOREIGN KEY (`funcionario_id`) REFERENCES `tab_funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tab_documentos`
--
ALTER TABLE `tab_documentos`
  ADD CONSTRAINT `fk_tab_documentos_tab_funcionarios` FOREIGN KEY (`funcionario_id`) REFERENCES `tab_funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tab_enderecos`
--
ALTER TABLE `tab_enderecos`
  ADD CONSTRAINT `fk_tb_endereco_tab_funcionarios1` FOREIGN KEY (`funcionario_id`) REFERENCES `tab_funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
