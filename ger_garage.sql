-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Ago-2020 às 23:42
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fer2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(7) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_vehicle` int(9) NOT NULL,
  `date` date NOT NULL,
  `slot` int(11) NOT NULL,
  `id_employee` int(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `booking`
--

INSERT INTO `booking` (`id_booking`, `id_user`, `id_vehicle`, `date`, `slot`, `id_employee`, `status`) VALUES
(1, 4, 2, '2020-08-20', 2, 1, 1),
(2, 4, 2, '2020-08-20', 4, 1, 1),
(3, 4, 2, '2020-08-20', 3, 1, 1),
(4, 4, 2, '2020-08-20', 4, 2, 1),
(5, 4, 2, '2020-08-24', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(5) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`id_employee`, `name`) VALUES
(1, 'Conor Lyons'),
(2, 'John Oconnell'),
(3, 'Conor casey'),
(4, 'Tibor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(36) NOT NULL,
  `isAdm` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `id_user`, `login`, `pass`, `isAdm`) VALUES
(1, 1, 'fernanda', '698dc19d489c4e4db73e28a713eab07b', 1),
(2, 4, 'asd@asd.com', '698dc19d489c4e4db73e28a713eab07b', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `email` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `address` text NOT NULL,
  `address2` text NOT NULL,
  `eircode` varchar(15) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `email`, `first_name`, `last_name`, `phone`, `birthday`, `address`, `address2`, `eircode`, `info`) VALUES
(4, 'asd@ase.com', 'fernanda', 'morais', '910602805', '1993-12-28', 'teste rua 1 ', 'teate rua 2', '191919', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vehicle`
--

CREATE TABLE `vehicle` (
  `id_vehicle` int(9) NOT NULL,
  `id_user` int(11) NOT NULL,
  `vehicle_type` varchar(150) NOT NULL,
  `vehicle_year` int(4) NOT NULL,
  `vehicle_model` varchar(150) NOT NULL,
  `vehicle_color` varchar(150) NOT NULL,
  `vehicle_engine` varchar(150) NOT NULL,
  `vehicle_make` varchar(150) NOT NULL,
  `vehicle_registration` varchar(50) NOT NULL,
  `adicional` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vehicle`
--

INSERT INTO `vehicle` (`id_vehicle`, `id_user`, `vehicle_type`, `vehicle_year`, `vehicle_model`, `vehicle_color`, `vehicle_engine`, `vehicle_make`, `vehicle_registration`, `adicional`) VALUES
(2, 4, 'asdasd', 1222, 'Volkswagen', 'asdasd', 'asdasd', 'asdasd', 'teste', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Índices para tabela `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Índices para tabela `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id_vehicle`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id_vehicle` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;