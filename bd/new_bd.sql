-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2022 a las 23:52:03
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

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
(25, 2, '19:39', '22:39', 'Lunes', 15),
(26, 4, '20:39', '23:41', 'Jueves', 15),
(27, 4, '21:40', '00:43', 'Martes', 45);

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
(2, 3, 'Larry cachinga', 'Dermatologo', 'Iome'),
(4, 3, 'Agustin Vertebrado', 'Cirujano', 'Ioma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id_secretaria` int(11) NOT NULL,
  `nombre_completo` varchar(60) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id_secretaria`, `nombre_completo`, `direccion`, `telefono`) VALUES
(3, 'Tudai-Secretaria', 'donacru 1234', 951753),
(5, 'Yanny como', 'baraderos qcyo', 48312861);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno_paciente`
--

CREATE TABLE `turno_paciente` (
  `nro_comprobante` int(11) NOT NULL,
  `medico_asignado` int(11) NOT NULL,
  `nombre_paciente` varchar(80) NOT NULL,
  `apellido_paciente` varchar(80) NOT NULL,
  `dni_paciente` varchar(30) NOT NULL,
  `obra_social` varchar(30) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `hs` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno_paciente`
--

INSERT INTO `turno_paciente` (`nro_comprobante`, `medico_asignado`, `nombre_paciente`, `apellido_paciente`, `dni_paciente`, `obra_social`, `dia`, `hs`) VALUES
(14, 2, 'Crow', 'Ramos', '40943011', 'IOMA', '5', '17:00');

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
(3, 'TUDAI', '$2y$10$er184qflj9q21UIUDvd7Y.v/y4yXqeU6iJWfECfFaZuMzR.NIUbBi', 'S'),
(4, 'Agustin_Vertebr', '$2y$10$MfdvXo9yaNGV5LN5xLByAe/qOUjJ73dWsf3FWJjwQv0pIzoRAeqkC', 'M'),
(5, 'Yanniy_Como', '$2y$10$Y3gqD8oYjVj2KdTsxD2ELOqNdUMO2vBu/O4jEmXFpjGDea32cfUei', 'M');

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
  ADD KEY `id_medico` (`id_medico`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`),
  ADD KEY `id_secretaria` (`id_secretaria`);

--
-- Indices de la tabla `turno_paciente`
--
ALTER TABLE `turno_paciente`
  ADD PRIMARY KEY (`nro_comprobante`),
  ADD KEY `medico_asignado` (`medico_asignado`);

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
  MODIFY `id_disp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `turno_paciente`
--
ALTER TABLE `turno_paciente`
  MODIFY `nro_comprobante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  ADD CONSTRAINT `disp_medico_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_3` FOREIGN KEY (`id_medico`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medico_ibfk_4` FOREIGN KEY (`id_secretaria`) REFERENCES `secretaria` (`id_secretaria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD CONSTRAINT `secretaria_ibfk_1` FOREIGN KEY (`id_secretaria`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `turno_paciente`
--
ALTER TABLE `turno_paciente`
  ADD CONSTRAINT `turno_paciente_ibfk_1` FOREIGN KEY (`medico_asignado`) REFERENCES `medico` (`id_medico`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
