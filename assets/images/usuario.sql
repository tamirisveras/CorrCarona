-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jun-2023 às 22:33
-- Versão do servidor: 10.10.2-MariaDB
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `corrcarona2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `matricula` varchar(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `tipo` enum('Motorista','Passageiro','Administrador') NOT NULL DEFAULT 'Passageiro',
  `path` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `disponivel` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `matricula`, `telefone`, `tipo`, `path`, `senha`, `disponivel`) VALUES
(37, 'Eutino', '1234', '8989849844', 'Motorista', 'imagem/1687200810.png', '00000', 1),
(45, 'Tamiris', '2025', '+55 (89) 99999-8888', 'Passageiro', 'imagem/1687383779.png', '2025', 0),
(44, 'Jairon', '2023', '89999966', 'Passageiro', 'imagem/1687355868.jpg', '2023', 0),
(41, 'Sabrina', '147', '+55 (98) 99098-8884', 'Motorista', 'imagem/1687354202.png', '147', 1),
(42, 'Karl', '54321', '54321', 'Motorista', 'imagem/1687295527.png', '54321', 0),
(43, 'Sabrina', '147147', '89999858632', 'Motorista', 'imagem/1687355938.png', '147147', 1),
(46, 'Felipe', '2022', '+55 (89) 99945-1236', 'Motorista', NULL, '2022', 1),
(47, 'Rayline', '2000', '+55 (89) 99941-5236', 'Passageiro', NULL, '2000', 1),
(48, 'Eutino', '2024', '+55 (89) 99994-2153', 'Passageiro', 'imagem/1687385049.png', '2024', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
