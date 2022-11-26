-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2022 a las 20:55:23
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
(23, 7, '07:00', '11:00', 'Lunes', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `id_secretaria` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `especialidad` varchar(20) NOT NULL,
  `obra_social` varchar(20) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `id_secretaria`, `nombre`, `especialidad`, `obra_social`, `id_usuario`) VALUES
(7, 9, 'Cynthia Tita Pena', 'Cirujano', 'Ioma', 2),
(8, 9, 'Agustin Vertebrado', 'Dermatologo', 'Ioma', NULL),
(11, 10, 'Yanniy Como', 'Dermatologo', 'Ioma', NULL),
(12, 9, 'Gonzalez Maria', 'Dermatologo', 'OSPE', NULL),
(13, 9, 'Perez Maria', 'Clinica', 'OSAM', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id_secretaria` int(11) NOT NULL,
  `nombre_completo` varchar(60) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id_secretaria`, `nombre_completo`, `direccion`, `telefono`, `id_usuario`) VALUES
(9, 'TUDAI', 'UNICEN', 223453522, 3),
(10, 'TUDAI2', 'UNICEN', 234234324, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(15) NOT NULL,
  `password` varchar(150) NOT NULL,
  `rol_usuario` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `password`, `rol_usuario`) VALUES
(2, 'CPENA', '$2y$10$Kclfg0R4keTVunKdVO5LMenaIDJmR5a6Yop9ioq9feErKsr0kNDDW', 'M'),
(3, 'TUDAI', '$2y$10$er184qflj9q21UIUDvd7Y.v/y4yXqeU6iJWfECfFaZuMzR.NIUbBi', 'S');

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
  ADD KEY `id_secretaria` (`id_secretaria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  MODIFY `id_disp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  ADD CONSTRAINT `disp_medico_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `medico_ibfk_2` FOREIGN KEY (`id_secretaria`) REFERENCES `secretaria` (`id_secretaria`);

--
-- Filtros para la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD CONSTRAINT `secretaria_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
