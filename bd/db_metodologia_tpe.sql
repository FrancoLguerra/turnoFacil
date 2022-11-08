-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 23:51:12
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_metodologia_tpe`
--

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `db_metodologia_tpe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_metodologia_tpe`;
--
-- Estructura de tabla para la tabla `disp_medico`
--

CREATE TABLE `disp_medico` (
  `id_disp` int(20) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `horario_inicio` varchar(60) NOT NULL,
  `horario_fin` varchar(60) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `duracion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disp_medico`
--

INSERT INTO `disp_medico` (`id_disp`, `id_medico`, `horario_inicio`, `horario_fin`, `dia`, `duracion`) VALUES
(1, 3, '18:00', '21:00', 'Miércoles', 15),
(2, 4, '12:30', '16:30', 'Miércoles', 30),
(3, 5, '20:30', '21:30', 'Lunes', 45),
(4, 5, '20:30', '21:30', 'Lunes', 30),
(20, 3, '08:30', '09:45', 'Jueves', 15),
(21, 6, '10:00', '14:00', 'Martes', 30),
(22, 6, '07:00', '11:30', 'Miércoles', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `id_secretaria` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `especialidad` varchar(20) NOT NULL,
  `obra_social` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `id_secretaria`, `nombre`, `especialidad`, `obra_social`) VALUES
(1, 5, 'Cynthia Tita Pena', 'Cirujano', 'Ioma'),
(2, 5, 'Agustin Vertebrado', 'Dermatologo', 'Ioma'),
(3, 7, 'Cynthia Tita Pena', 'Cirujano', 'Ioma'),
(4, 5, 'Yanny Como', 'Dermatologo', 'Ioma'),
(5, 7, 'Gonzalez Maria', 'Dermatología', 'OSPE'),
(6, 7, 'Pérez Maria', 'Clínica', 'OSAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id_secretaria` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id_secretaria`, `nombre`, `password`) VALUES
(5, 'Lean33', '$2y$10$CtoPvNaudiAZRCjn.hxmDeKu20sqozTafbRLmmfmBJXnz9fWnniYm'),
(7, 'TUDAI', '$2y$10$zuTkNOsGZxdZWebGzBzAD.B0rxmFuJyGgaJ8WIupGTBr8VKio.6RW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  ADD PRIMARY KEY (`id_disp`),
  ADD KEY `id_medico` (`id_medico`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`),
  ADD KEY `id_secretaria` (`id_secretaria`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  MODIFY `id_disp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  ADD CONSTRAINT `disp_medico_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
