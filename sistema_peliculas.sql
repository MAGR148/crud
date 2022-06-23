-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2022 a las 20:21:36
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
-- Base de datos: `sistema_peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-06-22-181941', 'App\\Database\\Migrations\\TUsuarios', 'default', 'App', 1655923347, 1),
(2, '2022-06-22-210148', 'App\\Database\\Migrations\\TPeliculas', 'default', 'App', 1655940897, 2),
(3, '2022-06-22-234029', 'App\\Database\\Migrations\\TPeliculas', 'default', 'App', 1655941236, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_peliculas`
--

CREATE TABLE `t_peliculas` (
  `id_pelicula` int(5) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `anio` int(5) NOT NULL,
  `idioma` varchar(255) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `id_usuario` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_peliculas`
--

INSERT INTO `t_peliculas` (`id_pelicula`, `titulo`, `anio`, `idioma`, `clasificacion`, `sinopsis`, `id_usuario`) VALUES
(6, 'Avengers End Game ', 2019, 'Inglés', 'B', 'Avengers Assemble', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `id_usuario` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `a_paterno` varchar(255) NOT NULL,
  `a_materno` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id_usuario`, `nombre`, `a_paterno`, `a_materno`, `usuario`, `password`, `type`) VALUES
(9, 'Miguel Angel', 'Gómez', 'Rojas', 'admin@gmail.com', '$2y$10$T1XYpJ6Z/DRX1cB9tERs8uxdTI2N2zOEY.1x3tdITdZJBnx2esgEO', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_peliculas`
--
ALTER TABLE `t_peliculas`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `t_peliculas`
--
ALTER TABLE `t_peliculas`
  MODIFY `id_pelicula` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `id_usuario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_peliculas`
--
ALTER TABLE `t_peliculas`
  ADD CONSTRAINT `t_peliculas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
