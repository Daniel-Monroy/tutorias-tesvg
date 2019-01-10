-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2019 a las 04:04:53
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u881670891_tuto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acercade`
--

CREATE TABLE `acercade` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `acercade`
--

INSERT INTO `acercade` (`id`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `id_administrador`, `fecha`) VALUES
(1, '2009-2011', 'Our Humble Beginnings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', 'vistas/img/acercade/1.jpg', 1, '0000-00-00 00:00:00'),
(2, '2010-2012', 'Our Humble Beginnings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', 'vistas/img/acercade/2.jpg', 2, '0000-00-00 00:00:00'),
(3, '2011-2013', 'Our Humble Beginnings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', 'vistas/img/acercade/3.jpg', 3, '0000-00-00 00:00:00'),
(4, '2013-2014', 'Our Humble Beginnings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', 'vistas/img/acercade/4.jpg', 4, '0000-00-00 00:00:00'),
(5, '2013-2015', 'Our Humble Beginnings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', 'vistas/img/acercade/5.jpg', 5, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_unicode_ci NOT NULL,
  `ruta` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `categoria`, `ruta`, `fecha`) VALUES
(1, 'LA LÍNEA DE LA VIDA ', 'linea-vida', '2019-01-02 19:10:24'),
(2, 'ANÁLISIS FODA ', 'foda', '2019-01-02 20:02:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_alumnos`
--

CREATE TABLE `actividades_alumnos` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividades_alumnos`
--

INSERT INTO `actividades_alumnos` (`id`, `id_alumno`, `id_actividad`, `ruta`, `fecha`) VALUES
(1, 1, 1, 'vistas/actividades/alumnos/2014124078/sub-linea-vida.pdf', '2019-01-04 06:29:23'),
(2, 1, 3, 'vistas/actividades/alumnos/2014124078/ejemplo1.pdf', '2019-01-04 07:00:11'),
(3, 1, 4, 'vistas/actividades/alumnos/2014124078/ejemplo2.pdf', '2019-01-04 07:14:01'),
(4, 1, 5, 'vistas/actividades/alumnos/2014124078/ejemplo4.pdf', '2019-01-07 20:15:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish_ci NOT NULL,
  `numeroControl` text COLLATE utf8_spanish_ci NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `activo` int(11) NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`, `numeroControl`, `id_carrera`, `id_grupo`, `email`, `password`, `activo`, `foto`, `verificacion`, `modo`, `emailEncriptado`, `ultimo_login`, `fecha`) VALUES
(1, 'Daniel', 'Monroy Dominguez', '2014124078', 5, 6, 'totalazul90@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS', 1, 'vistas/img/alumnos/2014124078/750.jpg', 0, 'directo', '', '2019-01-07 14:09:47', '2019-01-07 20:09:47'),
(2, 'Ronaldo', 'Monroy Dominguez', '2014123069', 4, 1, 'ronaldo@gmail.com', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 1, '', 1, 'directo', '7203ffa384072399a7538fda48e69392', '0000-00-00 00:00:00', '2019-01-02 18:38:46'),
(3, 'Diana Laura', 'Monroy Dominguez', '2014123079', 4, 1, 'diana@falso.com', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 1, '', 1, 'directo', '26d5c25822c779bc33c8d476e6473992', '0000-00-00 00:00:00', '2019-01-02 18:38:54'),
(4, 'Ramiro', 'Monroy Dominguez', '1231312313', 4, 1, 'ramiro@falso.com', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 1, '', 1, 'directo', '818e46dceb808be4d335d1e93d1aa69a', '0000-00-00 00:00:00', '2019-01-02 18:30:14'),
(5, 'José de Jesus', 'Monroy Dominguez', '2098198089', 5, 6, 'jose@falso.com', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 0, '', 1, 'directo', '9f9b58d916d3f0ba115a422587a00f42', '0000-00-00 00:00:00', '2019-01-03 21:31:52'),
(6, 'Demetrio', 'Díaz V', '2019123001', 5, 6, 'garrafelina12345670@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 1, 'vistas/img/alumnos/2019123001/283.jpg', 0, 'directo', '', '2019-01-07 14:27:34', '2019-01-07 20:27:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `carrera` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_jefe` int(11) NOT NULL,
  `id_coordinador` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carrera`, `descripcion`, `id_jefe`, `id_coordinador`, `fecha`) VALUES
(4, 'I.E', 'Ingeniería Electrónica', 13, 18, '2019-01-02 05:25:51'),
(5, 'I.S.C', 'Ingeniería en Sistemas Computacionales', 19, 20, '2019-01-02 05:28:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `id_carrera`, `fecha`) VALUES
(1, '801', 4, '2019-01-02 06:50:12'),
(6, '901', 5, '2019-01-02 06:33:44'),
(7, '101', 4, '2019-01-02 06:43:15'),
(8, '102', 4, '2019-01-02 06:43:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int(11) NOT NULL,
  `tipo-usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `tipo-usuario`, `descripcion`, `icono`, `fecha`) VALUES
(1, 'Jefe de División\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eum, doloribus nobis quod repellendus tempore, voluptate labore enim dolore temporibus culpa magnam quas neque architecto quasi ut iste ratione error.\r\n', 'fa-user', '2018-11-23 22:00:23'),
(2, 'Psicólogo\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eum, doloribus nobis quod repellendus tempore, voluptate labore enim dolore temporibus culpa magnam quas neque architecto quasi ut iste ratione error.\r\n', 'fa-user', '2018-11-23 22:01:24'),
(3, 'Coordinador\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eum, doloribus nobis quod repellendus tempore, voluptate labore enim dolore temporibus culpa magnam quas neque architecto quasi ut iste ratione error.\r\n', 'fa-user', '2018-11-23 22:01:45'),
(4, 'Docente (Tutor)\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eum, doloribus nobis quod repellendus tempore, voluptate labore enim dolore temporibus culpa magnam quas neque architecto quasi ut iste ratione error.\r\n', 'fa-user', '2018-11-23 22:01:59'),
(5, 'Alumno (Tutorado)\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum eum, doloribus nobis quod repellendus tempore, voluptate labore enim dolore temporibus culpa magnam quas neque architecto quasi ut iste ratione error.\r\n', 'fa-user', '2018-11-23 22:02:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `icono` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `mensaje`, `icono`, `fecha`) VALUES
(1, 'Director General', 'Es importante asimilar que necesitamos ayuda cuando no podemos resolver una activida especifica, nuestro tecnologico cuenta con especialistas, te recomiena', 'fa-flag', '2018-11-23 00:28:24'),
(2, 'Director academico', 'El TESVG cuenta con este program llamado tutorias, el cual su principaal objetivo es brindar conocimiento exta a alumnos con desempeno bajo', 'fa-flag', '2018-11-23 00:24:04'),
(3, 'Consejo', 'No te quedes con la duda, es mejor preguntar e informarte que reprobar y darte de baja', 'fa-flag', '2018-11-23 00:24:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `barraSuperior` text COLLATE utf8_unicode_ci NOT NULL,
  `textoSuperior` text COLLATE utf8_unicode_ci NOT NULL,
  `colorFondo` text COLLATE utf8_unicode_ci NOT NULL,
  `colorTexto` text COLLATE utf8_unicode_ci NOT NULL,
  `logoTutorias` text COLLATE utf8_unicode_ci NOT NULL,
  `logoTESVG` text COLLATE utf8_unicode_ci NOT NULL,
  `copyright` text COLLATE utf8_unicode_ci NOT NULL,
  `redesSociales` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logoTutorias`, `logoTESVG`, `copyright`, `redesSociales`, `fecha`) VALUES
(1, '#000000', '#ffffff', '#fe4918', '#ffffff', 'vistas/img/plantilla/logoTutorias.png', 'vistas/img/plantilla/logoTESVG.png', 'Chamoys Team', '[{\r\n		\"red\": \"fa-facebook\",\r\n		\"estilo\": \"facebookBlanco\",\r\n		\"url\": \"http://facebook.com/\"\r\n	}, {\r\n		\"red\": \"fa-youtube\",\r\n		\"estilo\": \"youtubeBlanco\",\r\n		\"url\": \"http://youtube.com/\"\r\n	}, {\r\n		\"red\": \"fa-twitter\",\r\n		\"estilo\": \"twitterBlanco\",\r\n		\"url\": \"http://twitter.com/\"\r\n	},{\r\n		\"red\": \"fa-google-plus\",\r\n		\"estilo\": \"googleBlanco\",\r\n		\"url\": \"http://google.com/\"\r\n	}\r\n\r\n]', '2018-11-22 23:03:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`id`, `titulo`, `subtitulo`, `img`, `fecha`) VALUES
(1, 'Actividad del dia 13 de septiembre', 'Nos encontramos jugando con los alumnos', 'vistas/img/portafolio/actividad-1.png', '2018-11-23 00:04:24'),
(3, 'Actividad del dia 22 de septiembre ', 'Nos encontramos jugando con los alumnos', 'vistas/img/portafolio/actividad-3.png', '2018-11-23 00:04:48'),
(5, 'Actividad del dia 26 de septiembre ', 'Nos encontramos jugando con los alumnos', 'vistas/img/portafolio/actividad-5.png', '2018-11-23 00:05:01'),
(6, 'Actividad del dia 28 de septiembre ', 'Nos encontramos jugando con los alumnos', 'vistas/img/portafolio/actividad-6.png', '2018-11-23 00:05:05'),
(7, 'Actividad del dia 30 de septiembre ', 'Nos encontramos jugando con los alumnos', 'vistas/img/portafolio/actividad-7.png', '2018-11-23 00:05:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_actividades`
--

CREATE TABLE `sub_actividades` (
  `id` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `objetivo` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `textoAyuda` text COLLATE utf8_spanish_ci NOT NULL,
  `actividades` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sub_actividades`
--

INSERT INTO `sub_actividades` (`id`, `id_actividad`, `id_grupo`, `ruta`, `ruta_archivo`, `nombre`, `objetivo`, `imagen`, `textoAyuda`, `actividades`, `fecha`) VALUES
(1, 1, 6, 'sub-linea-vida', 'vistas/actividades/archivos/sub-linea-vida/sub-linea-vida.pdf', 'LA LÍNEA DE LA VIDA ', 'Observar tu vida como si fueras una persona ajena a ella, con el fin de identificar patrones y etapas (capítulos) de tu vida hasta el día de hoy. Cada participante describa su desarrollo o su trayectoria personal en el tiempo; es decir, marcará los sucesos desde su nacimiento hasta el día de la aplicación y como estos eventos han sido representativos para el en su vida.  La dinámica puede sufrir ajustes o cambios según se presenten variables en el comportamiento o desarrollo de las sesiones de evento.', 'vistas/actividades/imagenes/sub-linea-vida/sub-linea-vida.png', '“En alguna ocasión alguien dijo “Conócete a ti mismo” y el principio para aceptarse es siendo humilde y reconocer tanto los logros como las oportunidades que la vida misma te ha dado como proceso de enseñanza”.  La siguiente dinámica requiere de valor para ubicar en tiempo y espacio esos sucesos que han intervenido en nuestra formación y son en gran medida la suma de lo que ahora somos”. \r\n“Voy a tomar mi línea de mi vida…  yo nací … colocar el día, mes y año de nacimiento en el inicio de la línea… mi primer éxito o mi primer recuerdo de alguna travesura, hecho alegre o triste fue… anotar el año debajo de la línea si fue un hecho desagradable o arriba sí fue agradable…”  \r\nAl concluir el ejercicio por todos y cada uno de los asistentes, “indicará que el pasado quedo en el pasado y que el futuro se desconoce y lo único que nos queda es el presente y debemos vivirlo tan intensamente como sea posible”.', '1. Descarga el archivo PDF\r\n2. Grafica la curva de tu vida en el espacio que se provee en las siguientes páginas. Dibuja una línea que representa tu vida desde la infancia hasta el día de hoy, mostrando los puntos altos y bajos. El eje vertical representa el nivel de felicidad, satisfacción y realización. El eje horizontal representa tu edad al momento de los eventos significativos y los puntos de inflexión. \r\n3. Marca en la línea central las personas, eventos y acciones importantes que tuvieron lugar. Si ha pasado por un cambio dramático importante, deberás representar esto comenzando una nueva línea. Por ejemplo, el comienzo de una nueva curva “S”. \r\n4. Identifica las principales etapas de tu vida dándole un título a cada “capítulo”. Por ejemplo, 6-12 años: “Necesidad de amor y reconocimiento”, 13-18 años: “Búsqueda de identidad y aventura”, 19-30: “Búsqueda de riqueza e importancia”, etcétera. \r\n5. Identifica los patrones principales que aparecen en las diferentes etapas o “capítulos”. Lo más probable es que éstos se repitan también en los siguientes “capítulos”, a menos que sean comprendidos. \r\n6. Los patrones más significativos de los cuales necesitas estar consciente son: \r\n7.Carga el PDF', '2019-01-04 05:26:54'),
(2, 2, 1, 'foda-fortalezas', 'vistas/actividades/archivos/foda-fortalezas/foda-fortalezas.pdf', 'Fortalezas', 'Identifica lo que tiene que construir en el siguiente capítulo de tu vida. Toma conciencia de qué recursos, capacidades y cualidades conforman tus fortalezas principales. ', 'vistas/actividades/imagenes/foda-fortalezas/foda-fortalezas.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, corporis accusantium eum laboriosam, nisi nemo beatae amet inventore excepturi itaque aperiam vero sed aut, alias possimus numquam praesentium at voluptatum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, corporis accusantium eum laboriosam, nisi nemo beatae amet inventore excepturi itaque aperiam vero sed aut, alias possimus numquam praesentium at voluptatum.', '2019-01-02 20:04:37'),
(3, 2, 6, 'ejemplo1', 'vistas/actividades/archivos/ejemplo1/ejemplo1.pdf', 'Ejemplo1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste accusantium tempore, temporibus error provident nihil, eveniet fuga illo impedit ipsam suscipit officiis qui. Voluptates consequuntur hic laboriosam mollitia, sapiente. Iusto!', 'vistas/actividades/imagenes/ejemplo1/ejemplo1.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste accusantium tempore, temporibus error provident nihil, eveniet fuga illo impedit ipsam suscipit officiis qui. Voluptates consequuntur hic laboriosam mollitia, sapiente. Iusto!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste accusantium tempore, temporibus error provident nihil, eveniet fuga illo impedit ipsam suscipit officiis qui. Voluptates consequuntur hic laboriosam mollitia, sapiente. Iusto!', '2019-01-04 05:33:32'),
(4, 2, 6, 'ejemplo2', 'vistas/actividades/archivos/ejemplo2/ejemplo2.pdf', 'Ejemplo 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi maxime ad soluta beatae aliquid dolores nihil, quia. Consectetur fuga maiores, tenetur, deserunt quos magni asperiores voluptatum eveniet ipsum tempore voluptas.', 'vistas/actividades/imagenes/ejemplo2/ejemplo2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi maxime ad soluta beatae aliquid dolores nihil, quia. Consectetur fuga maiores, tenetur, deserunt quos magni asperiores voluptatum eveniet ipsum tempore voluptas.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi maxime ad soluta beatae aliquid dolores nihil, quia. Consectetur fuga maiores, tenetur, deserunt quos magni asperiores voluptatum eveniet ipsum tempore voluptas.', '2019-01-04 07:13:33'),
(5, 2, 6, 'ejemplo4', 'vistas/actividades/archivos/ejemplo4/ejemplo4.pdf', 'Ejemplo 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa molestiae nemo tempore nesciunt, quos obcaecati repellendus sequi dolores exercitationem quisquam voluptatibus porro tempora quis aperiam nobis eum dignissimos, autem?', 'vistas/actividades/imagenes/ejemplo4/ejemplo4.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa molestiae nemo tempore nesciunt, quos obcaecati repellendus sequi dolores exercitationem quisquam voluptatibus porro tempora quis aperiam nobis eum dignissimos, autem?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa molestiae nemo tempore nesciunt, quos obcaecati repellendus sequi dolores exercitationem quisquam voluptatibus porro tempora quis aperiam nobis eum dignissimos, autem?', '2019-01-07 20:14:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8_unicode_ci NOT NULL,
  `profesion` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id`, `usuario`, `nombre`, `apellido`, `profesion`, `email`, `password`, `foto`, `id_carrera`, `fecha`) VALUES
(1, 'profesor-1', 'Juan', 'Vazquez', 'Ingeniero en Sistemas', 'juan@falso.com', '1234', 'vistas/img/usuarios/tutores/p-1.jpg', 1, '2018-11-23 03:52:57'),
(2, 'profesor-2', 'Luis', 'Mota', 'Ingeniero en Sistemas', 'luis@falso.com', '1234', 'vistas/img/usuarios/tutores/p-2.jpg', 1, '2018-11-23 03:54:57'),
(3, 'profesor-3', 'Alberto', 'Vip', 'Ingeniero en Sistemas', 'alberto@falso.com', '1234', 'vistas/img/usuarios/tutores/p-3.jpg', 1, '2018-11-23 03:53:52'),
(4, 'profesor-4', 'Jose', 'Jaimez', 'Ingeniero en Sistemas', 'jose@falso.com', '1234', 'vistas/img/usuarios/tutores/p-4.jpg', 1, '2018-11-23 03:53:56'),
(5, 'profesor-5', 'Pedro', 'Vazquez', 'Ingeniero en Sistemas', 'pedro@falso.com', '1234', 'vistas/img/usuarios/tutores/p-5.jpg', 1, '2018-11-23 03:53:59'),
(6, 'profesor-6', 'Pepe', 'Mota', 'Ingeniero en Sistemas', 'pepe@falso.com', '1234', 'vistas/img/usuarios/tutores/p-6.jpg', 1, '2018-11-23 03:54:03'),
(7, 'profesor-7', 'Juan', 'Vip', 'Ingeniero en Sistemas', 'juan@falso.com', '1234', 'vistas/img/usuarios/tutores/p-7.jpg', 1, '2018-11-23 03:54:08'),
(8, 'profesor-8', 'Luis', 'Jaimez', 'Ingeniero en Sistemas', 'luis@falso.com', '1234', 'vistas/img/usuarios/tutores/p-8.jpg', 1, '2018-11-23 03:54:12'),
(9, 'profesor-9', 'Alberto', 'Vazquez', 'Ingeniero en Sistemas', 'alberto@falso.com', '1234', 'vistas/img/usuarios/tutores/p-9.jpg', 1, '2018-11-23 03:54:16'),
(10, 'profesor-10', 'Jose', 'Mota', 'Ingeniero en Sistemas', 'jose@falso.com', '1234', 'vistas/img/usuarios/tutores/p-10.png', 1, '2018-11-23 03:55:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `profesion` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `password`, `perfil`, `profesion`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(13, 'Daniel ', 'Monroy Dominguez', 'admin', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 'jefeDeDivision', 'Ingeniero en Sistemas', 'vistas/img/usuarios/admin/518.png', 1, '2019-01-07 13:51:47', '2019-01-07 19:51:47'),
(18, 'Diana Laura', 'Monroy Dominguez', 'coordinadora', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 'coordinador', 'Lic. en Informatica', 'vistas/img/usuarios/chamoys96/930.png', 1, '0000-00-00 00:00:00', '2019-01-07 19:52:35'),
(19, 'Ronaldo ', 'Monroy Domínguez', 'ronaldo2002', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 'jefeDeDivision', 'Ing. Electrico', 'vistas/img/usuarios/chamoys96/930.png', 1, '0000-00-00 00:00:00', '2019-01-07 19:52:36'),
(20, 'Maria del Carmen', 'Monroy Dominguez', 'carmen00', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 'coordinador', 'Ingeniero en Industrias Alimenticias', 'vistas/img/usuarios/carmen00/944.png', 1, '0000-00-00 00:00:00', '2019-01-07 19:52:37'),
(21, 'Israel', 'Monroy Dominguez', 'israelMD', '$2a$07$asxy54ahjppf45sd87a5aubt5jxL59S2nL.aWcAusiuidw1hJ.hWu', 'jefeDivicion', 'Ingeniero en Electroníca', 'vistas/img/usuarios/israelMD/497.jpg', 1, '0000-00-00 00:00:00', '2019-01-07 19:52:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acercade`
--
ALTER TABLE `acercade`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividades_alumnos`
--
ALTER TABLE `actividades_alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sub_actividades`
--
ALTER TABLE `sub_actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `actividades_alumnos`
--
ALTER TABLE `actividades_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sub_actividades`
--
ALTER TABLE `sub_actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
