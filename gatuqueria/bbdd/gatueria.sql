-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 14:08:10
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gatueria`
--
CREATE DATABASE IF NOT EXISTS `gatueria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gatueria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `idProfesional` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `hora` int(11) NOT NULL,
  `Comentarios` int(11) NOT NULL,
  `fechaCreación` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `ultimaActualizacion` datetime NOT NULL,
  `fechaCreacicion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) DEFAULT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `foto` varchar(32) NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT 0,
  `estado` int(11) NOT NULL DEFAULT 1,
  `ultimaModificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `pass`, `email`, `foto`, `administrador`, `estado`, `ultimaModificacion`, `fechaCreacion`) VALUES
(1, 'Sergio', '1234', 'sergio@gmail.com', 'user.png', 1, 1, '2022-11-03 12:30:39', '2022-11-03 12:30:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cita_idProfesional` (`idProfesional`),
  ADD KEY `Cita_idUsuario` (`idUsuario`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `Cita_idProfesional` FOREIGN KEY (`idProfesional`) REFERENCES `trabajadores` (`id`),
  ADD CONSTRAINT `Cita_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
