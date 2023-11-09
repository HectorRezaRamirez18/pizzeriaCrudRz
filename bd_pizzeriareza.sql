-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 21:53:34
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pizzeriareza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idt` int(11) NOT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `tamanop` varchar(50) DEFAULT NULL,
  `ingredientes` varchar(50) DEFAULT NULL,
  `nombrep` varchar(50) DEFAULT NULL,
  `paquetep` varchar(50) DEFAULT NULL,
  `formap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idt`, `direccion`, `telefono`, `tamanop`, `ingredientes`, `nombrep`, `paquetep`, `formap`) VALUES
(454, 'AV.Bulevar', '6562133231', 'grande', 'peperoni', 'carlos', 'familiar', 'efectivo'),
(455, 'Av.talamas', '65634234', 'chica', 'jamon', 'luis', 'cuates', 'Tarjeta'),
(456, 'Av.tala', '6567867', 'grande', 'pina', 'hector', 'familiar', 'efectivo'),
(457, 'Av.Matamoros', '6563243', 'chica', 'carne', 'isabella', 'cuates', 'Tarjeta'),
(458, 'Av.praderas', '65612000', 'grande ', 'peperoni', 'lupe', 'familiar', 'efectivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idt`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
