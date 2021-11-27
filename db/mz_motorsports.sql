-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2021 a las 17:12:49
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
-- Base de datos: `mz_motorsports`
--
CREATE DATABASE IF NOT EXISTS `mz_motorsports` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mz_motorsports`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `email_usuario` varchar(30) NOT NULL,
  `articulo` varchar(40) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `km` varchar(10) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `comentario` varchar(11) NOT NULL,
  `imagen` varchar(60) NOT NULL,
  `fecha` datetime NOT NULL,
  `vendido` bit(1) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`email_usuario`, `articulo`, `modelo`, `color`, `km`, `precio`, `comentario`, `imagen`, `fecha`, `vendido`, `estado`) VALUES
('eochoa11@ucol.mx', 'Camaro', '2009', 'Amarillo', '10000', '100000', 'ASASASASA', 'camaro.jpg', '2021-11-27 10:17:15', b'1', b'1'),
('elpepe@gmail.com', 'Challenger', '2008', 'Azul', '13333', '133333', 'PRUEBITAAAA', 'dodge-challenger-hellcat-redeye-portada.jpg', '2021-11-27 15:53:20', b'1', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(85) DEFAULT NULL,
  `Fecha` datetime NOT NULL,
  `Comentario` text NOT NULL,
  `Imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `Titulo`, `Fecha`, `Comentario`, `Imagen`) VALUES
(1, 'Castran al Hellcat', '2021-11-25 01:00:11', '<h2>AHHHHHHHHHHHHHHHHHH</h2>\r\n<p>PUBLICACION DE PRUEBA</p>', 'dodge-challenger-hellcat-redeye-portada.jpg'),
(2, 'Otra publi de prueba', '2021-11-25 09:02:37', 'CUERPO DE LA PUBLICACIÓN\r\n<h2> XD </h2>\r\n<p> F </p>', 'camaro.jpg'),
(3, 'PRUEBA 3XD', '2021-11-25 09:33:12', 'AAAAAAAAAAAAAAAAAAh', 'Nube de palabras.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contacto` varchar(15) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nombre`, `apellidos`, `email`, `contacto`, `pwd`, `role`) VALUES
(1, 'MZMotorSports', '', '', 'mzmotorsport30@gmail.com', '', 'e50d11e94bafcd7c78120d7a6478bce07c60b70207f7aa19e71ebdb37eecccbde475e051a28209fdfb5c9a217ea08d335422244574465e73c39863c8f18874fa', 'admin'),
(2, 'Jk99', 'Enrique de Jesús', 'Ochoa Preciado', 'eochoa11@ucol.mx', '3141076334', 'a46fdd60a217586bdb806f1a0646fdabb1a1773ec14166e2207ce445cefa01552c79a03e6fcceb789ee1d32735c27e48d4e99993d13f1b23de2c76caae8775ac', 'usuario'),
(3, 'OscarUWU', 'Oscar', 'Guzmán Loza', 'oscaruwu@gmail.com', '3141234567', 'e50d11e94bafcd7c78120d7a6478bce07c60b70207f7aa19e71ebdb37eecccbde475e051a28209fdfb5c9a217ea08d335422244574465e73c39863c8f18874fa', 'adminval'),
(4, 'pruebito', 'Andrei', 'Rodriguez', 'elpepe@gmail.com', '3142022761', 'a46fdd60a217586bdb806f1a0646fdabb1a1773ec14166e2207ce445cefa01552c79a03e6fcceb789ee1d32735c27e48d4e99993d13f1b23de2c76caae8775ac', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD KEY `email_usuario` (`email_usuario`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `contacto` (`contacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
