-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-11-2022 a las 17:17:52
-- Versión del servidor: 10.9.4-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arquitectura_hoy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revistas`
--

CREATE TABLE `revistas` (
  `arq_id` int(11) NOT NULL,
  `numero` int(11) NOT NULL DEFAULT 0,
  `mes` enum('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre') NOT NULL DEFAULT 'Enero',
  `ano` int(11) NOT NULL,
  `sumario` varchar(200) NOT NULL,
  `portada` varchar(32) NOT NULL,
  `archivo` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `revistas`
--

INSERT INTO `revistas` (`arq_id`, `numero`, `mes`, `ano`, `sumario`, `portada`, `archivo`, `activo`) VALUES
(1, 1, 'Enero', 1947, 'La restauraci&oacute;n de Francia#La reconstrucci&oacute;n de T&uacute;nez#Los maestros de la arquitectura#Nuevas construcciones en Francia#Arquitectura en Am&eacute;rica latina ', '1-1947.jpg', '1.pdf', 1),
(2, 4, 'Abril', 1947, 'Plan director para Buenos Aires#El pensamiento del siglo XX#La carta de Atenas#Aeropuerto de Buenos Aires', '4-1947.jpg', '', 1),
(3, 2, 'Febrero', 1947, 'linea 1#linea 2#linea 3', '2-1947.jpg', '', 1),
(4, 3, 'Marzo', 1947, 'linea 1#linea2', '3-1947.jpg', '', 1),
(5, 5, 'Mayo', 1947, 'linea 1#linea 2', '5-1947.jpg', '', 1),
(6, 6, 'Junio', 1947, '', '6-1947.jpg', '', 1),
(7, 7, 'Julio', 1947, '', '7-1947.jpg', '', 1),
(8, 8, 'Agosto', 1947, '', '8-1947.jpg', '', 1),
(9, 9, 'Septiembre', 1947, '', '9-1947.jpg', '', 1),
(10, 10, 'Octubre', 1947, '', '10-1947.jpg', '', 0),
(11, 11, 'Noviembre', 1947, '', '11-1947.jpg', '', 1),
(12, 12, 'Diciembre', 1947, '', '12-1947.jpg', '', 1),
(13, 13, 'Enero', 1948, '', '1-1948.jpg', '', 1),
(14, 14, 'Febrero', 1948, '', '2-1948.jpg', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD PRIMARY KEY (`arq_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `revistas`
--
ALTER TABLE `revistas`
  MODIFY `arq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
