-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Dez-2021 às 01:00
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_galeriadefotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `imgname` varchar(90) NOT NULL,
  `data` date NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `img`
--

INSERT INTO `img` (`id`, `imgname`, `data`, `iduser`) VALUES
(30, 'media/imgaleria341bbcdfa507cb967d0c52860bfa352d.png', '2021-12-01', 1),
(31, 'media/imgaleria2a567c4cdd719b22a5f3f2951e31f18b.png', '2021-12-02', 1),
(33, 'media/imgaleriad47a2aed7e404aca9c3741c07fa3ad4a.png', '2021-12-02', 1),
(34, 'media/imgaleriac744a3aac86834ab3bbba0c3120af828.png', '2021-12-02', 3),
(35, 'media/imgaleria5184eec16b853eea08e9bd3f8c1c4880.png', '2021-12-02', 5),
(36, 'media/imgaleriae4382e4a1059558910f7de17a5cc7c4b.png', '2021-12-02', 5),
(37, 'media/imgaleria9248fc1f2d4bb3b376afe94f18c4cdaf.png', '2021-12-02', 5),
(38, 'media/imgaleria4584a3e3cf7a0b9a0e81f7acefc22479.png', '2021-12-02', 5),
(39, 'media/imgaleriad929afaa1886d957f507243c3aca7ed8.png', '2021-12-02', 5),
(40, 'media/imgaleria05f1c67232d2a01d34424ccd6faf8842.png', '2021-12-02', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `status` date NOT NULL,
  `power` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fotoperfil` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `senha`, `status`, `power`, `email`, `fotoperfil`) VALUES
(1, 'randerTeixeira', '202cb962ac59075b964b07152d234b70', '2021-12-02', 3, 'randerifurutai@gmail.com', 'assets/img_stylea96593c4c527f5e4b7310a1893f04f05.png'),
(3, 'mari', '202cb962ac59075b964b07152d234b70', '2021-12-02', 3, 'manuananick@gmail.com', 'assets/img_style5297dc0e8a13a6a27b79420b2e1f08d6.png'),
(4, 'nicole', '202cb962ac59075b964b07152d234b70', '2021-12-02', 1, 'nicolehelena@gmail.com', 'assets/img_style1b640bcd16a477d083bd5265894b2248.png'),
(5, 'manuela', '202cb962ac59075b964b07152d234b70', '2021-12-02', 2, 'manuananick@gmail.com', 'assets/img_style28dc92229a4140982ffd19dc902bca6f.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
