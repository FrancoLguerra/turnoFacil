-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-10-2022 a las 16:49:01
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
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `nombre_paciente` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `max_tiempo` time NOT NULL DEFAULT '00:25:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `id_medico`, `nombre_paciente`, `fecha`, `max_tiempo`) VALUES
(1, 1, 'Ines Tornudo', '2022-11-05', '00:25:00'),
(2, 1, 'Victor Ticolis', '2022-11-05', '00:25:00'),
(3, 2, 'Abel D Retido', '2022-11-01', '00:25:00'),
(4, 4, 'Aldo Lorido', '2022-11-15', '00:25:00'),
(5, 4, 'Juampi Cadito', '2022-10-27', '00:25:00'),
(6, 2, 'Alfonsin Sesos', '2022-10-30', '00:25:00'),
(7, 3, 'Guillermo Coso', '2022-10-31', '00:25:00'),
(8, 2, 'Victor Cido', '2022-11-01', '00:25:00'),
(9, 4, 'Ulises Tropeado', '2022-11-15', '00:25:00'),
(10, 4, 'Alen Guado', '2022-10-27', '00:25:00'),
(11, 2, 'Victor Tazo', '2022-10-30', '00:25:00'),
(12, 3, 'Anibal Eado', '2022-10-31', '00:25:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`),
  ADD KEY `id_medico` (`id_medico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `turno_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
