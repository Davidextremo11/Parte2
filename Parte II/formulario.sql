-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2018 a las 04:36:46
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_tarjeta` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titular` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `numero_tarjeta` int(30) NOT NULL,
  `cvv2` int(4) NOT NULL,
  `año` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `apellido`, `email`, `tipo_tarjeta`, `titular`, `numero_tarjeta`, `cvv2`, `año`, `mes`, `direccion`, `ciudad`, `telefono`) VALUES
('alfin', 'asdasd', 'asf56@gmail.com', 'Credito', 'asdasd', 56166, 5165, '2030', '11', 'asd', 'asdasd', 516);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
