-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2022 a las 17:15:10
-- Versión del servidor: 5.6.51
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `generate_due_list` ()  NO SQL
SELECT I.issue_id, M.email, B.isbn, B.title
FROM book_issue_log I INNER JOIN member M on I.member = M.username INNER JOIN book B ON I.book_isbn = B.isbn
WHERE DATEDIFF(CURRENT_DATE, I.due_date) >= 0 AND DATEDIFF(CURRENT_DATE, I.due_date) % 5 = 0 AND (I.last_reminded IS NULL OR DATEDIFF(I.last_reminded, CURRENT_DATE) <> 0)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `nacionalidad` varchar(50) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id`, `nombres`, `apellido1`, `apellido2`, `nacionalidad`, `bio`) VALUES
(1, 'Arthur Ignatius', 'Conan', 'Doyle', 'británico', 'Arthur Ignatius Conan Doyle ​ fue un escritor y médico británico, creador del célebre detective de ficción Sherlock Holmes. Fue un autor prolífico cuya obra incluye relatos de ciencia ficción, novela histórica, teatro y poesía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cds`
--

CREATE TABLE `cds` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE `clasificaciones` (
  `id` int(11) NOT NULL,
  `clase` varchar(50) NOT NULL,
  `lengua` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `clasificacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificaciones`
--

INSERT INTO `clasificaciones` (`id`, `clase`, `lengua`, `genero`, `clasificacion`) VALUES
(1, 'literatura', 'inglesa', 'novela', '833');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Gente nueva', 'Editorial Gente Nueva es una editorial cubana fundada en 1967, enfocada en la publicación de libros para niños y jóvenes. Su objetivo es fomentar desde edades tempranas el hábito de lectura.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `karde`
--

CREATE TABLE `karde` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `numero_karde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `imagen` varchar(10000) DEFAULT NULL,
  `anio_pub` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `lugar_pub` varchar(255) DEFAULT NULL,
  `cantidad_ejemplares` int(11) NOT NULL DEFAULT '1',
  `id_clasificacion` int(11) NOT NULL,
  `doi` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `id_autor`, `imagen`, `anio_pub`, `id_editorial`, `lugar_pub`, `cantidad_ejemplares`, `id_clasificacion`, `doi`, `isbn`) VALUES
(1, 'El sabueso de los Baskerville', 1, NULL, 2015, 1, 'La Habana', 1, 1, NULL, '978-84-460-4132-0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_materias`
--

CREATE TABLE `libros_materias` (
  `id` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros_materias`
--

INSERT INTO `libros_materias` (`id`, `id_libro`, `id_materia`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `descripción` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`, `descripción`) VALUES
(1, 'Ciencias humanas y sociales', NULL),
(2, 'Lengua y literatura', NULL),
(3, 'Narrativa', NULL),
(4, 'Contemporánea', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodicos`
--

CREATE TABLE `periodicos` (
  `id` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `año` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `pais`, `edad`) VALUES
(1, 'María', 'Colombia', 52),
(2, 'Jorge', 'Argentina', 48),
(3, 'Silvia', 'Venezuela', 25),
(4, 'Ramiro Perez', 'Uruguay', 35),
(5, 'Carlos', 'Colombia', 28),
(6, 'Cristian', 'Francia', 22),
(7, 'Roberto', 'Perú', 20),
(8, 'Mauricio', 'Venezuela', 41),
(9, 'Karina', 'México', 30),
(10, 'José', 'Chile', 19),
(11, 'Beatriz', 'Colombia', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `grupo` int(11) DEFAULT NULL,
  `fecha_p` datetime NOT NULL,
  `fecha_d` datetime NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `no_ejemplar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revistas`
--

CREATE TABLE `revistas` (
  `id` int(11) NOT NULL,
  `id_karde` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabloides`
--

CREATE TABLE `tabloides` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clasificacion` (`clasificacion`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `karde`
--
ALTER TABLE `karde`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_karde` (`numero_karde`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_autor` (`id_autor`),
  ADD KEY `id_editorial` (`id_editorial`),
  ADD KEY `id_clasificacion` (`id_clasificacion`);

--
-- Indices de la tabla `libros_materias`
--
ALTER TABLE `libros_materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `materia` (`materia`);

--
-- Indices de la tabla `periodicos`
--
ALTER TABLE `periodicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_editorial` (`id_editorial`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karde` (`id_karde`);

--
-- Indices de la tabla `tabloides`
--
ALTER TABLE `tabloides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cds`
--
ALTER TABLE `cds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `karde`
--
ALTER TABLE `karde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libros_materias`
--
ALTER TABLE `libros_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `periodicos`
--
ALTER TABLE `periodicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `revistas`
--
ALTER TABLE `revistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabloides`
--
ALTER TABLE `tabloides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_5` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id`),
  ADD CONSTRAINT `libros_ibfk_7` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificaciones` (`id`),
  ADD CONSTRAINT `libros_ibfk_8` FOREIGN KEY (`id_editorial`) REFERENCES `editoriales` (`id`);

--
-- Filtros para la tabla `libros_materias`
--
ALTER TABLE `libros_materias`
  ADD CONSTRAINT `libros_materias_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `libros_materias_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`);

--
-- Filtros para la tabla `periodicos`
--
ALTER TABLE `periodicos`
  ADD CONSTRAINT `periodicos_ibfk_1` FOREIGN KEY (`id_editorial`) REFERENCES `editoriales` (`id`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`);

--
-- Filtros para la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD CONSTRAINT `revistas_ibfk_1` FOREIGN KEY (`id_karde`) REFERENCES `karde` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
