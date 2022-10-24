-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-10-2022 a las 16:48:44
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
-- Base de datos: `tpe_metodologia_2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disp_medico`
--

CREATE TABLE `disp_medico` (
  `id_dia` int(20) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `horario_inicio` varchar(60) NOT NULL,
  `horario_fin` varchar(60) NOT NULL,
  `dia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disp_medico`
--

INSERT INTO `disp_medico` (`id_dia`, `id_medico`, `horario_inicio`, `horario_fin`, `dia`) VALUES
(1, 1, '(9:00-12:00) ', '(14:00-18:00)', 'Lunes'),
(2, 1, '(18:00-20:00)', '(21:00)', 'Lunes'),
(5, 1, '(9:00-12:00) ', '(14:00-18:00)', 'Martes'),
(7, 1, '(18:00-20:00)', '(21:00-00:00)', 'Martes'),
(9, 2, '(9:00-12:00) ', '(21:00-00:00)(00:00)', 'Lunes'),
(10, 3, '(18:00-20:00)', '(21:00)(00:00)', 'Jueves'),
(11, 4, '(7:00-12:00)', '(13:00- 16:00)', 'Viernes'),
(12, 2, '(9:00-12:00) ', '(21:00-00:00)(00:00)', 'Lunes'),
(13, 3, '(18:00-20:00)', '(21:00)(00:00)', 'Jueves'),
(14, 4, '(7:00-12:00)', '(13:00- 16:00)', 'Viernes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  ADD PRIMARY KEY (`id_dia`),
  ADD KEY `id_medico` (`id_medico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disp_medico`
--
ALTER TABLE `disp_medico`
  MODIFY `id_dia` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
