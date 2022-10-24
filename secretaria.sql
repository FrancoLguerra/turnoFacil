-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-10-2022 a las 16:48:54
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
(1, 'Alba Bosa', ''),
(2, 'Victor Cido', ''),
(3, 'Vivi Bora', ''),
(4, 'Roque Joso', ''),
(5, 'Lean33', '$2y$10$CtoPvNaudiAZRCjn.hxmDeKu20sqozTafbRLmmfmBJXnz9fWnniYm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
