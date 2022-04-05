-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 05:22:45
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nekocell`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` smallint(6) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` tinyint(3) NOT NULL DEFAULT 1,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `descripcion`, `activo`, `fecha_alta`, `fecha_edit`) VALUES
(1, 'xiaomi notes', 'telefono con capacidad de 120 gb de almacenamineto', 1, '2020-11-15 12:41:44', '2020-11-15 11:41:44'),
(2, 'apple', 'capacidad de 150gb ', 1, '2020-11-11 17:07:26', '2020-11-11 16:07:26'),
(3, 'Lg', 'ndiendiec ', 1, '2020-11-11 22:46:30', '2020-11-11 21:46:30'),
(4, 'hawei ', '123 gb de memoria ', 0, '2020-11-15 22:49:58', '2020-11-15 21:49:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` smallint(6) NOT NULL,
  `codigo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `precio_venta` decimal(10,2) NOT NULL,
  `existencias` int(11) NOT NULL,
  `inventariable` tinyint(4) NOT NULL,
  `id_marcas` smallint(6) NOT NULL,
  `id_proveedores` smallint(6) NOT NULL,
  `tipo_producto` tinyint(4) NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `precio_venta`, `existencias`, `inventariable`, `id_marcas`, `id_proveedores`, `tipo_producto`, `activo`, `fecha_alta`, `fecha_edit`) VALUES
(8, '011111119', 'huwei', '455.00', 0, 0, 1, 1, 1, 1, '2020-11-16 12:20:18', '2020-11-16 11:20:18'),
(9, '01123', 'telefono apple', '300.00', 0, 1, 1, 1, 0, 0, '2020-11-16 12:34:27', '2020-11-16 11:34:27'),
(11, '0192292929', 'A30', '230000.00', 0, 1, 2, 1, 0, 0, '2020-11-16 11:49:38', '2020-11-16 10:49:38'),
(12, '1234567', 'P30', '230.00', 0, 1, 2, 1, 1, 1, '2020-11-16 12:20:10', '2020-11-16 11:20:10'),
(13, '234567', 'X12', '300.00', 0, 1, 2, 1, 1, 1, '2020-11-16 11:07:33', '2020-11-16 11:07:33'),
(14, '67890', 'A40', '450.30', 7, 1, 3, 1, 1, 1, '2020-11-16 11:33:37', '2020-11-16 11:33:37'),
(15, '56783932', 'x43', '345.00', 34, 1, 2, 1, 1, 1, '2020-11-16 14:05:39', '2020-11-16 14:05:39'),
(16, '3647484', 'A45', '232.90', 200, 1, 3, 1, 1, 1, '2020-11-16 14:33:52', '2020-11-16 14:33:52'),
(17, '2346690', 'Carcasa ', '30000.00', 40, 0, 2, 1, 0, 1, '2020-11-16 15:14:45', '2020-11-16 15:14:45'),
(18, '567889', 'funda ', '60000.00', 4000, 1, 1, 1, 0, 1, '2020-11-16 15:43:37', '2020-11-16 15:43:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` smallint(6) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` tinyint(3) NOT NULL DEFAULT 1,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `telefono`, `descripcion`, `direccion`, `activo`, `fecha_alta`, `fecha_edit`) VALUES
(1, 'juna  de arco', '3245000', 'proveedor de telefonos marca sansum', 'av 11 # 12 - centro ', 1, '2020-11-12 12:16:17', '2020-11-12 11:16:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `fk_producto_marcas` (`id_marcas`),
  ADD KEY `fk_producto_proveedores` (`id_proveedores`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_marcas` FOREIGN KEY (`id_marcas`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `fk_producto_proveedores` FOREIGN KEY (`id_proveedores`) REFERENCES `proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
