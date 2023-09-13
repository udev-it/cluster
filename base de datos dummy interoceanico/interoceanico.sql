-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2020 a las 18:35:17
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
-- Base de datos: `interoceanico`
--
CREATE DATABASE IF NOT EXISTS `interoceanico` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `interoceanico`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_colaboradores`
--

CREATE TABLE `img_colaboradores` (
  `id` int(10) NOT NULL,
  `nom_dependencia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `img_url` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `hipervinculo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `img_colaboradores`
--

INSERT INTO `img_colaboradores` (`id`, `nom_dependencia`, `img_url`, `hipervinculo`) VALUES
(1, 'Secretaría de Economía', 'imagenes/logo_1.jpg', 'http://www.gob.mx/se'),
(2, 'Consejo Nacional de Clústeres Energéticos', 'imagenes/logo_2.jpg', 'http://www.conacen.org'),
(3, 'Conacyt', 'imagenes/logo_3.jpg', 'http://http://www.conacyt.gob.mx'),
(4, 'Tecnológico Nacional de México', 'imagenes/logo_4.jpg', 'http://www.tecnm.mx'),
(5, 'Corredor Interoceánico', 'imagenes/logo_5.jpg', 'http://www.gob.mx/ciit'),
(6, 'Instituto Tecnológico del Valle de Etla', 'imagenes/logo_6.jpg', 'http://vetla.tecnm.mx'),
(7, 'TEKNIA', 'imagenes/logo_7.jpg', ''),
(8, 'Senado de la República', 'imagenes/logo_8.jpg', 'http://www.senado.gob.mx'),
(9, 'DEFTEKK', 'imagenes/logo_9.jpg', 'http://www.deftekk.com'),
(10, 'Secretaría de Educación Pública', 'imagenes/logo_10.jpg', 'http://www.gob.mx/sep'),
(11, 'Programa Istmo', 'imagenes/logo_11.jpg', 'http://www.gob.mx/programaistmo'),
(12, 'CIIE', 'imagenes/logo_12.jpg', 'http://tesci.edomex.gob.mx/incubadora_negocios'),
(13, 'Instituto Tecnológico del Istmo', 'imagenes/logo_13.jpg', 'http://istmo.tecnm.mx'),
(14, 'Congreso de Oaxaca', 'imagenes/logo_14.jpg', 'http://www.congresooaxaca.gob.mx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `img_colaboradores`
--
ALTER TABLE `img_colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `img_colaboradores`
--
ALTER TABLE `img_colaboradores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
