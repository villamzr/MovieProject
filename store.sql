-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-08-2018 a las 19:46:19
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_pelicula` int(11) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `id_pelicula`, `img`, `ruta`) VALUES
(1, 4, '2227piratascaribe1.jpg', 'Views/template/imagenes/portadas/storage/2227piratascaribe1.jpg'),
(2, 4, '2227piratascaribe2.jpg', 'Views/template/imagenes/portadas/storage/2227piratascaribe2.jpg'),
(3, 4, '2227piratascaribe3.jpg', 'Views/template/imagenes/portadas/storage/2227piratascaribe3.jpg'),
(4, 5, '0448spectre1.jpg', 'Views/template/imagenes/portadas/storages/0448spectre1.jpg'),
(5, 5, '0448spectre2.jpg', 'Views/template/imagenes/portadas/storage/0448spectre2.jpg'),
(6, 5, '0448spectre3.jpg', 'Views/template/imagenes/portadas/storage/0448spectre3.jpg'),
(7, 5, '1033spectre1.jpg', 'Views/template/imagenes/portadas/storages/1033spectre1.jpg'),
(8, 5, '1034spectre2.jpg', 'Views/template/imagenes/portadas/storages/1034spectre2.jpg'),
(9, 5, '1034spectre3.jpg', 'Views/template/imagenes/portadas/storages/1034spectre3.jpg'),
(10, 4, '1516piratascaribe1.jpg', 'Views/template/imagenes/portadas/storages/1516piratascaribe1.jpg'),
(11, 4, '1516piratascaribe2.jpg', 'Views/template/imagenes/portadas/storages/1516piratascaribe2.jpg'),
(12, 4, '1516piratascaribe3.jpg', 'Views/template/imagenes/portadas/storages/1516piratascaribe3.jpg'),
(13, 5, '1637spectre1.jpg', 'Views/template/imagenes/portadas/storages/1637spectre1.jpg'),
(14, 5, '1637spectre2.jpg', 'Views/template/imagenes/portadas/storages/1637spectre2.jpg'),
(15, 5, '1637spectre3.jpg', 'Views/template/imagenes/portadas/storages/1637spectre3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` decimal(15,0) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `portada` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `codigo`, `nombre`, `descripcion`, `portada`, `fecha`) VALUES
(4, '151619', 'Piratas del Caribe', 'Piratas del Caribe es el tÃ­tulo de una serie cinematogrÃ¡fica de aventura fantÃ¡stica', '0503piratasdelcaribe.jpg', '16-08-18'),
(5, '324567', 'Spectre', 'Un mensaje encriptado de su pasado envÃ­a a James Bond en una bÃºsqueda para descubrir a una organizaciÃ³n siniestra mientras M se enfrenta a las fuerzas polÃ­ticas que quieren cerrar el servicio secreto britÃ¡nico.', '0619spectre.jpg', '16-08-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_peliculas` (`id_pelicula`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
