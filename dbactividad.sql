-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2021 a las 00:58:23
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbactividad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

CREATE TABLE `asistente` (
  `id` int(11) NOT NULL,
  `docType` varchar(45) NOT NULL,
  `docN` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tlf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistente`
--

INSERT INTO `asistente` (`id`, `docType`, `docN`, `name`, `tlf`, `email`) VALUES
(1, 'tarjetaDeIdentidad', '28288237', 'Ruben Gonzalez', '3042812563', 'artorias201001@gmail.com'),
(2, 'tarjetaDeIdentidad', '28288236', 'Luna Guerrero', '3156440782', 'lunaWarrior12@gmail.com'),
(3, '', '', '', '', ''),
(4, 'tarjetaDeIdentidad', '28282828', 'Alberto Carrasquero', '1111111111', 'abcd123@hotmail.com'),
(5, 'cedulaExtranjeria', '123456789', 'Ricardo Enrique Fajardo Fernandez', '3215647899', 'ricenfafer@gmail.com'),
(6, 'tarjetaDeIdentidad', '123789456123', 'Elefante Pantera', '3548974256', 'aleatorio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `correo`, `contraseña`) VALUES
(1, 'artorias201001@gmail.com', 'Abc123-123Abc'),
(2, '', ''),
(3, '', ''),
(4, '', 'Art0ri4s.'),
(5, 'ricardoarjonaismylover@gmail.com', 'Art0ri4s.'),
(6, 'ricardoarjonaismylover@gmail.com', 'abc123A.'),
(7, 'enfermitodediosuwu@gmail.com', '123Abc..');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistente`
--
ALTER TABLE `asistente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistente`
--
ALTER TABLE `asistente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
