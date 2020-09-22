-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2020 a las 18:39:08
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `famevida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumnes`
--

CREATE TABLE `albumnes` (
  `album_id` int(11) NOT NULL,
  `album_titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `album_portada_principal` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `banner_imagen` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_nombre`, `banner_imagen`) VALUES
(17, 'Banner1', '<img class=\"img-archivo\" src=\"../../images/multimedia/banner1.jpg\"></img>'),
(18, 'Banner2', '<img class=\"img-archivo\" src=\"../../images/multimedia/banner2.jpg\"></img>'),
(19, 'Banner3', '<img class=\"img-archivo\" src=\"../../images/multimedia/banner3.jpg\"></img>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `titulo_pub` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contenido_pub` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `autor_pub` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `portada_pub` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_portada` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`blog_id`, `titulo_pub`, `contenido_pub`, `autor_pub`, `fecha_pub`, `portada_pub`, `tipo_portada`) VALUES
(7, 'Presentación de famevida', 'Para famevida es un gusto poder inaugurar nuestras instalaciones para servirle a ustedes con la mejor atención para nuestros afiliados, contamos con buenos programas sociales que le permitirán a nuestros afiliados sentirse como en familia', 'Administrador', '2020-09-22 15:37:59', '<img class=\"img-archivo\" src=\"../../images/multimedia/banner1.jpg\"></img>', ''),
(8, 'Presentación de famevida', 'Para famevida es un gusto poder inaugurar nuestras instalaciones para servirle a ustedes con la mejor atención para nuestros afiliados, contamos con buenos programas sociales que le permitirán a nuestros afiliados sentirse como en familia.', 'Administrador', '2020-09-22 15:46:54', '<iframe class=\"img-archivo\" src=\"https://www.youtube.com/embed/7mNcCNawWgw\"></iframe>', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_galeria`
--

CREATE TABLE `contenido_galeria` (
  `contenido_galeria_id` int(11) NOT NULL,
  `contenido_galeria_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `album_id` int(11) NOT NULL,
  `contenido_galeria_foto` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE `multimedia` (
  `id_archivo` int(11) NOT NULL,
  `nombre_archivo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_archivo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `archivo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `peso_archivo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ruta_basica` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `procedencia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `multimedia`
--

INSERT INTO `multimedia` (`id_archivo`, `nombre_archivo`, `tipo_archivo`, `archivo`, `peso_archivo`, `ruta_basica`, `procedencia`) VALUES
(48, 'Banner1', 'jpg', '<img src=\'../../images/multimedia/banner1.jpg\' class=\'img-archivo\'></img>', '1003674 bytes', '../../images/multimedia/banner1.jpg', 'imagen_interna'),
(49, 'Banner2', 'jpg', '<img src=\'../../images/multimedia/banner2.jpg\' class=\'img-archivo\'></img>', '1627655 bytes', '../../images/multimedia/banner2.jpg', 'imagen_interna'),
(50, 'Banner3', 'jpg', '<img src=\'../../images/multimedia/banner3.jpg\' class=\'img-archivo\'></img>', '5324678 bytes', '../../images/multimedia/banner3.jpg', 'imagen_interna'),
(51, 'Programa1', 'jpg', '<img src=\'../../images/multimedia/MUJER-EMPRENDEDORA.jpg\' class=\'img-archivo\'></img>', '160648 bytes', '../../images/multimedia/MUJER-EMPRENDEDORA.jpg', 'imagen_interna'),
(52, 'Programa2', 'jpg', '<img src=\'../../images/multimedia/MUJERES-RESILIENTES.jpg\' class=\'img-archivo\'></img>', '191596 bytes', '../../images/multimedia/MUJERES-RESILIENTES.jpg', 'imagen_interna'),
(53, 'Programa3', 'jpg', '<img src=\'../../images/multimedia/SOLEDAD-EN-EL-ADULTO-MAYOR.jpg\' class=\'img-archivo\'></img>', '199049 bytes', '../../images/multimedia/SOLEDAD-EN-EL-ADULTO-MAYOR.jpg', 'imagen_interna'),
(54, 'Programa4', 'jpg', '<img src=\'../../images/multimedia/JORNADAS-DE-ATENCION-HABITANTE-DE-CALLE.jpg\' class=\'img-archivo\'></img>', '178993 bytes', '../../images/multimedia/JORNADAS-DE-ATENCION-HABITANTE-DE-CALLE.jpg', 'imagen_interna'),
(55, 'Perfil', 'png', '<img src=\'../../images/multimedia/SEBASTIAN_opt.png\' class=\'img-archivo\'></img>', '185266 bytes', '../../images/multimedia/SEBASTIAN_opt.png', 'imagen_interna'),
(56, 'Presentación', 'mp4', '<iframe class=\"img-archivo\" src=\"https://www.youtube.com/embed/7mNcCNawWgw\"></iframe>', 'null', '<iframe class=\"img-archivo\" src=\"https://www.youtube.com/embed/7mNcCNawWgw\"></iframe>', 'video_externo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `personal_id` int(11) NOT NULL,
  `personal_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `personal_perfil` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `personal_foto` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `link_facebook` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `link_instagram` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `link_twitter` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`personal_id`, `personal_nombre`, `personal_perfil`, `personal_foto`, `link_facebook`, `link_instagram`, `link_twitter`) VALUES
(23, 'Perfil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<img class=\"img-archivo\" src=\"../../images/multimedia/SEBASTIAN_opt.png\"></img>', 'https://www.instagram.com/jesusdavid.duran.54/', 'https://www.instagram.com/jesusdavid.duran.54/', 'https://www.instagram.com/jesusdavid.duran.54/'),
(24, 'Perfil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<img class=\"img-archivo\" src=\"../../images/multimedia/SEBASTIAN_opt.png\"></img>', 'https://www.instagram.com/jesusdavid.duran.54/', 'https://www.instagram.com/jesusdavid.duran.54/', 'https://twitter.com/david1212128'),
(25, 'Perfil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<img class=\"img-archivo\" src=\"../../images/multimedia/SEBASTIAN_opt.png\"></img>', 'https://www.instagram.com/jesusdavid.duran.54/', 'https://twitter.com/david1212128', 'https://www.instagram.com/jesusdavid.duran.54/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `programa_id` int(11) NOT NULL,
  `titulo_programa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contenido_programa` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `portada_programa` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`programa_id`, `titulo_programa`, `contenido_programa`, `portada_programa`) VALUES
(11, 'Mujer emprendedora', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<img class=\"img-archivo\" src=\"../../images/multimedia/MUJER-EMPRENDEDORA.jpg\"></img>'),
(12, 'Mujeres resilientes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<img class=\"img-archivo\" src=\"../../images/multimedia/MUJERES-RESILIENTES.jpg\"></img>'),
(13, 'Habitantes de la calle', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<img class=\"img-archivo\" src=\"../../images/multimedia/JORNADAS-DE-ATENCION-HABITANTE-DE-CALLE.jpg\"></img>'),
(14, 'Soledad en el adulto mayor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<img class=\"img-archivo\" src=\"../../images/multimedia/SOLEDAD-EN-EL-ADULTO-MAYOR.jpg\"></img>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_administradores`
--

CREATE TABLE `usuarios_administradores` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios_administradores`
--

INSERT INTO `usuarios_administradores` (`usuario_id`, `usuario`, `clave`) VALUES
(2, 'jduran1061539548@gmail.com', '1061539548');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_contacto`
--

CREATE TABLE `usuario_contacto` (
  `usuario_contacto_id` int(11) NOT NULL,
  `usuario_contacto_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_contacto_correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_contacto_mensaje` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_contacto`
--

INSERT INTO `usuario_contacto` (`usuario_contacto_id`, `usuario_contacto_nombre`, `telefono`, `usuario_contacto_correo`, `usuario_contacto_mensaje`) VALUES
(2, 'Jesus David Duran', '3182525189', 'jduran1061539548@gmail.com', 'Estoy interesado en formar parte de esta hermosa fundación '),
(3, 'Jesus david chaguendo duran', '3182525189', 'jduran1061539548@gmail.com', 'Quiero recibir información respecto a su fundación'),
(4, 'juan reyes', '4211035', 'jduran@redepyme.co', 'Datos'),
(5, 'david', '3182525189', 'jduran1061539548@gmail.com', 'Hola como estas'),
(6, 'Jesus david', '4211035', 'jduran1061539548@gmail.com', 'Con mucho gusto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumnes`
--
ALTER TABLE `albumnes`
  ADD PRIMARY KEY (`album_id`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indices de la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  ADD PRIMARY KEY (`contenido_galeria_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indices de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`programa_id`);

--
-- Indices de la tabla `usuarios_administradores`
--
ALTER TABLE `usuarios_administradores`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `usuario_contacto`
--
ALTER TABLE `usuario_contacto`
  ADD PRIMARY KEY (`usuario_contacto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumnes`
--
ALTER TABLE `albumnes`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  MODIFY `contenido_galeria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `programa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios_administradores`
--
ALTER TABLE `usuarios_administradores`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_contacto`
--
ALTER TABLE `usuario_contacto`
  MODIFY `usuario_contacto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  ADD CONSTRAINT `contenido_galeria_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albumnes` (`album_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
