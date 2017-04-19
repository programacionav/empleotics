-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2017 a las 03:04:57
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleostics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `busquedas`
--

CREATE TABLE `busquedas` (
  `idBusqueda` int(11) NOT NULL,
  `idRubro` int(11) NOT NULL,
  `Empresa` varchar(150) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `busquedas`
--

INSERT INTO `busquedas` (`idBusqueda`, `idRubro`, `Empresa`, `Titulo`, `Descripcion`) VALUES
(1, 1, 'Etermax', 'Analista de Producto / BI', 'Actualmente estamos buscando a un Analista de Producto / Analista de BI para ser parte de nuestros equipos de Bussiness Intelligence. \r\nEl mismo será responsable de: \r\n- Definir métricas de éxito (KPI) para los productos y dar seguimiento a las mismas. \r\n- De proveer la información analítica necesaria al equipo de producto y sector gerencial sobre la performance del producto y/o features en particular. \r\n- Diseñar y supervisar pruebas de concepto (A/B tests). \r\n- Definir junto al PO objetivos cuantificables para el producto, mejoras y cambios.'),
(2, 1, 'Staffing IT', 'DBA ORACLE', 'Estamos en la busqueda de un DBA para importante multinacional. Requisitos:\r\nDebe poder llevar adelante tareas de análisis y diseño de sistemas. \r\nDebe estar predispuesto a adquirir nuevos conocimientos. \r\nDebe tener experiencia en operación de aplicaciones web con Oracle como base de datos. \r\nDebe tener experiencia en tuning, tanto del motor como de querys \r\nDebe poseer conocimientos de las opciones de desarrollo y características particulares del motor Oracle.'),
(3, 2, 'Litt SA', 'Desarrollador backend web PHP/JS', 'Buscamos una persona con gran capacidad de abstracción a los problemas y buena capacidad para implementar soluciones eficaces y eficientes. Nos dedicamos a la integración de sistemas corporativos y buscamos un desarrollador orientado al backend pero con conocimiento en todas las ramas del desarrollo de aplicaciones web en PHP y JS. Además, también se requiere un buen conocimiento del motor MySQL. Ofrecemos un excelente ambiente laboral, con distintos juegos para bajar el nivel de estrés y poder trabajar cómodos.'),
(4, 4, 'Siap', 'Programador', 'Estamos en la búsqueda de dos programadores con experiencia en lenguaje php, html5, jquery como así también manejo de Mysql, Sql. Se valora experiencia en boostrap, posibilidad de trabajo desde casa.'),
(5, 4, 'Siap', 'Desarrollador/a Java Ssr', 'Nos encontramos en la búsqueda de un desarrollador/a Java Semi Senior para incorporarse a nuestro equipo realizando desarrollo desde cero. Los postulantes pueden aplicar tanto para trabajar en nuestra oficina de Morón, Pcia de Bs As o en Capital Federal zona tribunales. Los requisitos son: -Ser estudiante o graduado de carreras afines a sistemas. - Contar con 3 años de experiencia comprobable en: Programación Java y tecnologías de desarrollo Web (HTML/HTML5, CSS/CSS3, Javascript, Ajax, etc). - Conocimientos de Frameworks Play, Hibernate y Spring MVC y/o Struts. - Proactividad, autonomía y ganas de seguir aprendiendo'),
(6, 3, 'Litt SA', 'Desarrollador Mobile', 'Empresa líder en el mercado mobile incorporará 2 (dos) Desarrolladores Mobile para su equipo de diseño de aplicaciones. \r\nLa búsqueda se orienta a desarrolladores con ansias de crecimiento y aprendizaje, para formar parte de un equipo profesional en el cual completar su desarrollo.\r\nSe ofrecen excelentes condiciones de ingreso, beneficios y plan de carrera. '),
(7, 2, 'MoviStyle', 'Desarrollador full stack javascript Semi Sr', 'Labor a desempeñar: Diseño, desarrollo, implementación y mantenimiento de aplicaciones móviles híbridas y aplicaciones web single page. \r\n\r\nBuscamos experiencia en: \r\n- Javascript (comprobable) \r\n- Al menos 1 framework JS (AngularJS, Node.js, Backbone.js, Ember.js, React.js) \r\n- JQuery/JQuery mobile \r\n- Patrones de Diseño en JS \r\n- HTML5/CSS3 \r\n- SQL Lite \r\n- xml \r\n- Inglés ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `idInscripcion` int(11) NOT NULL,
  `idBusqueda` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Cuil` int(11) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`idInscripcion`, `idBusqueda`, `Fecha`, `Cuil`, `Apellido`, `Nombre`) VALUES
(1, 1, '2017-02-02', 3213123, 'aaaa', 'aaa'),
(2, 1, '2017-04-18', 2049343, 'Vazquez', 'Nahuel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubros`
--

CREATE TABLE `rubros` (
  `idRubro` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rubros`
--

INSERT INTO `rubros` (`idRubro`, `Descripcion`) VALUES
(1, 'Base de datos'),
(2, 'Diseño y Desarrollo Web'),
(3, 'Desarrollo Mobile'),
(4, 'Programación'),
(5, 'Redes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  ADD PRIMARY KEY (`idBusqueda`),
  ADD KEY `idRubro` (`idRubro`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`idInscripcion`),
  ADD KEY `idBusqueda` (`idBusqueda`);

--
-- Indices de la tabla `rubros`
--
ALTER TABLE `rubros`
  ADD PRIMARY KEY (`idRubro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  MODIFY `idBusqueda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `idInscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rubros`
--
ALTER TABLE `rubros`
  MODIFY `idRubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
