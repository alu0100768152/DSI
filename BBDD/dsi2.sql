-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-05-2018 a las 13:04:47
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dsi2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `titulo` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `contenido` varchar(600) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`titulo`, `contenido`) VALUES
('¡Acaba de anunciarse Harry Potter: Hogwarts Mystery!', 'Jam City, un estudio de desarrollo de juegos para móvil ubicado en Los Ángeles, en asociación con Warner Bros. Interactive Entertainment, ha anunciado la firma de un acuerdo de licencia para crear Harry Potter: Hogwarts Mystery, el primer juego en el que los jugadores pueden crear su propio personaje y experimentar la vida como estudiante de Hogwarts.'),
('Así sería el esperado remake de Spyro The Dragon', 'Después del genial Crash Bandicoot N.Sane Trilogy y el anuncio del remake de Medievil todo el mundo espera que Sony se atreva a rescatar al mítico Spyro para Playstation 4.'),
('La libertad de Breath of the Wild marcará así el futuro de la saga The Legend of Zelda', 'The Legend of Zelda: Breath of the Wild introdujo un montón de novedades que pusieron patas arriba los conceptos más básicos de la saga. Eiji Aonuma acaba de confirmar que fue un punto de inflexión en la saga y que algunos conceptos como la libertad han llegado para quedarse'),
('Monster Hunter World: Nuevo trailer, nueva beta y otros contenidos', 'Hoy ha anunciado Capcom nuevos detalles acerca de Monster Hunter: World , título que se estrena en PlayStation 4 y Xbox One, el 26 de enero de 2018. También se estrenamos un nuevo tráiler del juego para conmemorar el inminente lanzamiento, que presenta a los Dragones Ancianos.'),
('Switch es la consola que más rápido se ha vendido en toda la historia de Estados Unidos', 'Nintendo ha anunciado que Switch acaba de romper un nuevo récord. Se ha convertido en la consola que más rápido se ha vendido en los Estados unidos. Y es que lleva un total de 4.8 millones de unidades vendidas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resgistro_usuario`
--

CREATE TABLE `resgistro_usuario` (
  `nombre` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `nombre_usuario` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf16_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `resgistro_usuario`
--

INSERT INTO `resgistro_usuario` (`nombre`, `apellido`, `nombre_usuario`, `email`, `password`) VALUES
('Angel', 'Luis', 'angelluisas', 'angel@gmail.com', '1234'),
('Carlos', 'Rios', 'carlosrios', 'carlos@gmail.com', 'carlos'),
('Cristian ', 'Manuel', 'cristianmanuel', 'cristian@gmail.com', '1234'),
('Laura', 'Broncan', 'laurabroncan', 'laura@gmail.com', '1234'),
('Natali', 'Lopez', 'natalialoqui', 'natalia@gmail.com', '1234'),
('Pepe', 'Gotera', 'pepegotera', 'pepe@gmail.com', 'pepe'),
('Ramon', 'Glez', 'ramonglez', 'ramon@gmail.com', 'ramon'),
('Raoul', 'Mineral', 'raoulguardia', 'raoul@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `resgistro_usuario`
--
ALTER TABLE `resgistro_usuario`
  ADD PRIMARY KEY (`nombre_usuario`),
  ADD KEY `ind_email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
