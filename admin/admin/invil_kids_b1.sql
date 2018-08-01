-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2017 a las 15:45:21
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `invil_kids_b1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audio_usuarios`
--

CREATE TABLE IF NOT EXISTS `audio_usuarios` (
`aud_id` int(11) NOT NULL,
  `pre_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `aud_dir` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `audio_usuarios`
--

INSERT INTO `audio_usuarios` (`aud_id`, `pre_id`, `usu_id`, `aud_dir`) VALUES
(296, 2368, 67, '/INVIL_KIDS_B1/assets/audios/usu_67/audio_0_2368.wav'),
(297, 2368, 67, '/INVIL_KIDS_B1/assets/audios/usu_67/audio_0_2368.wav');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_pregunta`
--

CREATE TABLE IF NOT EXISTS `categoria_pregunta` (
`cat_pre_id` int(11) NOT NULL,
  `cat_pre_nom` varchar(45) DEFAULT NULL,
  `cat_pre_des` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_pregunta`
--

INSERT INTO `categoria_pregunta` (`cat_pre_id`, `cat_pre_nom`, `cat_pre_des`) VALUES
(1, 'Writing', 'Para escribir'),
(2, 'Drag and Drop', 'Ejercicios de arrastrar'),
(3, 'Seleccion Multiple', 'Selección Multiple'),
(4, 'Completar texto', 'Completar texto'),
(5, 'Informativa', 'Solo texto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_prueba`
--

CREATE TABLE IF NOT EXISTS `estado_prueba` (
`est_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `tip_pre_id` int(11) NOT NULL,
  `mod_id` int(11) NOT NULL,
  `est_time_fin` datetime DEFAULT NULL,
  `est_time_act` datetime DEFAULT NULL,
  `est_tip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
`mod_id` int(11) NOT NULL,
  `mod_nom` varchar(45) DEFAULT NULL,
  `mod_des` varchar(45) DEFAULT NULL,
  `niv_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`mod_id`, `mod_nom`, `mod_des`, `niv_id`) VALUES
(78, 'module 1', 'module 1', 3),
(79, 'module 2', 'module 2', 3),
(80, 'module 3', 'module 3', 3),
(81, 'module 4', 'module 4', 3),
(82, 'module 5', 'module 5', 3),
(83, 'module 6', 'module 6', 3),
(84, 'module 7', 'module 7', 3),
(85, 'module 8', 'module 8', 3),
(86, 'module 9', 'module 9', 3),
(87, 'module 10', 'module 10', 3),
(88, 'module 11', 'module 11', 3),
(89, 'module 12', 'module 12', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
`niv_id` int(11) NOT NULL,
  `niv_nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `niv_des` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `niv_est` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`niv_id`, `niv_nom`, `niv_des`, `niv_est`) VALUES
(3, 'Level 3', 'Level 3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
`pre_id` int(11) NOT NULL,
  `pre_tit` varchar(200) NOT NULL,
  `pre_des` varchar(100) DEFAULT NULL,
  `pre_plantilla` varchar(300) DEFAULT NULL,
  `pre_estado` tinyint(1) DEFAULT NULL,
  `pre_ord` int(11) NOT NULL,
  `cat_pre_id` int(11) NOT NULL,
  `mod_id` int(11) NOT NULL,
  `tip_pre_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2879 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`pre_id`, `pre_tit`, `pre_des`, `pre_plantilla`, `pre_estado`, `pre_ord`, `cat_pre_id`, `mod_id`, `tip_pre_id`) VALUES
(2327, '1', '1', '../../../templates/level-3/module-5/html/01.html', 1, 3, 1, 82, 1),
(2328, '2', '2', '../../../templates/level-3/module-5/html/02.html', 1, 4, 1, 82, 1),
(2329, '3', '3', '../../../templates/level-3/module-5/html/03.html', 1, 5, 1, 82, 1),
(2330, '4', '4', '../../../templates/level-3/module-5/html/04.html', 1, 6, 1, 82, 1),
(2331, '5', '5', '../../../templates/level-3/module-5/html/05.html', 1, 7, 1, 82, 1),
(2332, '6', '6', '../../../templates/level-3/module-5/html/06.html', 1, 8, 3, 82, 1),
(2333, '7', '7', '../../../templates/level-3/module-5/html/07.html', 1, 9, 3, 82, 1),
(2334, '8', '8', '../../../templates/level-3/module-5/html/08.html', 1, 10, 3, 82, 1),
(2335, '9', '9', '../../../templates/level-3/module-5/html/09.html', 1, 11, 3, 82, 1),
(2336, '10', '10', '../../../templates/level-3/module-5/html/10.html', 1, 12, 3, 82, 1),
(2337, '11', '11', '../../../templates/level-3/module-5/html/11.html', 1, 13, 3, 82, 1),
(2338, '12', '12', '../../../templates/level-3/module-5/html/12.html', 1, 14, 1, 82, 1),
(2339, '13', '13', '../../../templates/level-3/module-5/html/13.html', 1, 15, 3, 82, 1),
(2340, '14', '14', '../../../templates/level-3/module-5/html/14.html', 1, 16, 2, 82, 1),
(2341, '15', '15', '../../../templates/level-3/module-5/html/15.html', 1, 17, 1, 82, 1),
(2342, '16', '16', '../../../templates/level-3/module-5/html/16.html', 1, 18, 1, 82, 1),
(2343, '17', '17', '../../../templates/level-3/module-5/html/17.html', 1, 19, 1, 82, 1),
(2344, '18', '18', '../../../templates/level-3/module-5/html/18.html', 1, 20, 1, 82, 1),
(2345, '19', '19', '../../../templates/level-3/module-5/html/19.html', 1, 21, 1, 82, 1),
(2346, '20', '20', '../../../templates/level-3/module-5/html/20.html', 1, 22, 1, 82, 1),
(2347, '21', '21', '../../../templates/level-3/module-5/html/21.html', 1, 23, 3, 82, 1),
(2348, '22', '22', '../../../templates/level-3/module-5/html/22.html', 1, 24, 3, 82, 1),
(2349, '23', '23', '../../../templates/level-3/module-5/html/23.html', 1, 25, 3, 82, 1),
(2350, '24', '24', '../../../templates/level-3/module-5/html/24.html', 1, 26, 1, 82, 1),
(2351, '25', '25', '../../../templates/level-3/module-5/html/25.html', 1, 27, 3, 82, 1),
(2352, '26', '26', '../../../templates/level-3/module-5/html/26.html', 1, 30, 1, 82, 2),
(2353, '27', '27', '../../../templates/level-3/module-5/html/27.html', 1, 31, 3, 82, 2),
(2354, '28', '28', '../../../templates/level-3/module-5/html/28.html', 1, 32, 3, 82, 2),
(2355, '29', '29', '../../../templates/level-3/module-5/html/29.html', 1, 33, 3, 82, 2),
(2356, '30', '30', '../../../templates/level-3/module-5/html/30.html', 1, 34, 1, 82, 2),
(2357, '31', '31', '../../../templates/level-3/module-5/html/31.html', 0, 35, 1, 82, 2),
(2358, '32', '32', '../../../templates/level-3/module-5/html/32.html', 0, 36, 1, 82, 2),
(2359, '33', '33', '../../../templates/level-3/module-5/html/33.html', 1, 37, 1, 82, 2),
(2360, '34', '34', '../../../templates/level-3/module-5/html/34.html', 1, 38, 1, 82, 2),
(2361, '35', '35', '../../../templates/level-3/module-5/html/35.html', 1, 41, 3, 82, 4),
(2362, '1', '1', '../../../templates/level-3/module-1/html/01.html', 1, 6, 5, 78, 1),
(2363, '2', '2', '../../../templates/level-3/module-1/html/02.html', 1, 7, 3, 78, 1),
(2364, '3', '3', '../../../templates/level-3/module-1/html/03.html', 1, 8, 3, 78, 1),
(2365, '4', '4', '../../../templates/level-3/module-1/html/04.html', 1, 9, 3, 78, 1),
(2366, '5', '5', '../../../templates/level-3/module-1/html/05.html', 1, 10, 3, 78, 1),
(2367, '6', '6', '../../../templates/level-3/module-1/html/06.html', 1, 11, 3, 78, 1),
(2368, '7', '7', '../../../templates/level-3/module-1/html/07.html', 1, 12, 1, 78, 1),
(2369, '8', '8', '../../../templates/level-3/module-1/html/08.html', 1, 13, 1, 78, 1),
(2370, '9', '9', '../../../templates/level-3/module-1/html/09.html', 1, 14, 3, 78, 1),
(2371, '10', '10', '../../../templates/level-3/module-1/html/10.html', 1, 15, 3, 78, 1),
(2372, '11', '11', '../../../templates/level-3/module-1/html/11.html', 1, 16, 3, 78, 1),
(2373, '12', '12', '../../../templates/level-3/module-1/html/12.html', 1, 17, 1, 78, 1),
(2374, '13', '13', '../../../templates/level-3/module-1/html/13.html', 1, 18, 3, 78, 1),
(2375, '14', '14', '../../../templates/level-3/module-1/html/14.html', 1, 19, 1, 78, 1),
(2376, '15', '15', '../../../templates/level-3/module-1/html/15.html', 1, 20, 3, 78, 1),
(2377, '16', '16', '../../../templates/level-3/module-1/html/16.html', 1, 21, 3, 78, 1),
(2378, '17', '17', '../../../templates/level-3/module-1/html/17.html', 1, 22, 1, 78, 1),
(2379, '18', '18', '../../../templates/level-3/module-1/html/18.html', 0, 23, 1, 78, 1),
(2380, '19', '19', '../../../templates/level-3/module-1/html/19.html', 0, 24, 1, 78, 1),
(2381, '20', '20', '../../../templates/level-3/module-1/html/20.html', 1, 25, 1, 78, 1),
(2382, '21', '21', '../../../templates/level-3/module-1/html/21.html', 1, 26, 1, 78, 1),
(2383, '22', '22', '../../../templates/level-3/module-1/html/22.html', 1, 29, 3, 78, 2),
(2384, '23', '23', '../../../templates/level-3/module-1/html/23.html', 1, 30, 3, 78, 2),
(2385, '24', '24', '../../../templates/level-3/module-1/html/24.html', 1, 31, 1, 78, 2),
(2386, '25', '25', '../../../templates/level-3/module-1/html/25.html', 1, 32, 3, 78, 2),
(2387, '26', '26', '../../../templates/level-3/module-1/html/26.html', 1, 33, 3, 78, 2),
(2388, '27', '27', '../../../templates/level-3/module-1/html/27.html', 1, 34, 3, 78, 2),
(2389, '28', '28', '../../../templates/level-3/module-1/html/28.html', 1, 35, 3, 78, 2),
(2390, '29', '29', '../../../templates/level-3/module-1/html/29.html', 1, 36, 1, 78, 2),
(2391, '30', '30', '../../../templates/level-3/module-1/html/30.html', 1, 37, 3, 78, 2),
(2392, '31', '31', '../../../templates/level-3/module-1/html/31.html', 1, 38, 1, 78, 2),
(2393, '32', '32', '../../../templates/level-3/module-1/html/32.html', 1, 41, 3, 78, 4),
(2394, '33', '33', '../../../templates/level-3/module-1/html/33.html', 1, 42, 3, 78, 4),
(2395, '34', '34', '../../../templates/level-3/module-1/html/34.html', 1, 43, 3, 78, 4),
(2396, '35', '35', '../../../templates/level-3/module-1/html/35.html', 1, 44, 3, 78, 4),
(2402, '1', '1', '../../../templates/level-3/module-3/html/01.html', 1, 3, 1, 80, 1),
(2403, '2', '2', '../../../templates/level-3/module-3/html/02.html', 1, 4, 1, 80, 1),
(2404, '3', '3', '../../../templates/level-3/module-3/html/03.html', 1, 5, 1, 80, 1),
(2405, '4', '4', '../../../templates/level-3/module-3/html/04.html', 1, 6, 1, 80, 1),
(2406, '5', '5', '../../../templates/level-3/module-3/html/05.html', 1, 7, 1, 80, 1),
(2407, '6', '6', '../../../templates/level-3/module-3/html/06.html', 1, 8, 1, 80, 1),
(2408, '7', '7', '../../../templates/level-3/module-3/html/07.html', 1, 9, 1, 80, 1),
(2409, '8', '8', '../../../templates/level-3/module-3/html/08.html', 1, 10, 1, 80, 1),
(2410, '9', '9', '../../../templates/level-3/module-3/html/09.html', 1, 11, 1, 80, 1),
(2411, '10', '10', '../../../templates/level-3/module-3/html/10.html', 1, 12, 1, 80, 1),
(2412, '11', '11', '../../../templates/level-3/module-3/html/11.html', 1, 13, 1, 80, 1),
(2413, '12', '12', '../../../templates/level-3/module-3/html/12.html', 1, 14, 1, 80, 1),
(2414, '13', '13', '../../../templates/level-3/module-3/html/13.html', 1, 15, 1, 80, 1),
(2415, '14', '14', '../../../templates/level-3/module-3/html/14.html', 1, 16, 1, 80, 1),
(2416, '15', '15', '../../../templates/level-3/module-3/html/15.html', 1, 17, 1, 80, 1),
(2417, '16', '16', '../../../templates/level-3/module-3/html/16.html', 1, 18, 1, 80, 1),
(2418, '17', '17', '../../../templates/level-3/module-3/html/17.html', 1, 19, 1, 80, 1),
(2419, '18', '18', '../../../templates/level-3/module-3/html/18.html', 1, 20, 1, 80, 1),
(2420, '19', '19', '../../../templates/level-3/module-3/html/19.html', 1, 21, 1, 80, 1),
(2421, '20', '20', '../../../templates/level-3/module-3/html/20.html', 1, 22, 1, 80, 1),
(2422, '21', '21', '../../../templates/level-3/module-3/html/21.html', 1, 23, 1, 80, 1),
(2423, '22', '22', '../../../templates/level-3/module-3/html/22.html', 1, 24, 1, 80, 1),
(2424, '23', '23', '../../../templates/level-3/module-3/html/23.html', 1, 25, 1, 80, 1),
(2425, '24', '24', '../../../templates/level-3/module-3/html/24.html', 1, 26, 1, 80, 1),
(2426, '25', '25', '../../../templates/level-3/module-3/html/25.html', 1, 27, 1, 80, 1),
(2427, '26', '26', '../../../templates/level-3/module-3/html/26.html', 1, 28, 1, 80, 1),
(2428, '27', '27', '../../../templates/level-3/module-3/html/27.html', 1, 29, 1, 80, 1),
(2429, '28', '28', '../../../templates/level-3/module-3/html/28.html', 1, 30, 1, 80, 1),
(2430, '29', '29', '../../../templates/level-3/module-3/html/29.html', 1, 31, 1, 80, 1),
(2431, '30', '30', '../../../templates/level-3/module-3/html/30.html', 1, 32, 1, 80, 1),
(2432, '31', '31', '../../../templates/level-3/module-3/html/31.html', 1, 33, 1, 80, 1),
(2433, '32', '32', '../../../templates/level-3/module-3/html/32.html', 1, 34, 1, 80, 1),
(2434, '33', '33', '../../../templates/level-3/module-3/html/33.html', 1, 35, 1, 80, 1),
(2435, '34', '34', '../../../templates/level-3/module-3/html/34.html', 1, 36, 1, 80, 1),
(2436, '35', '35', '../../../templates/level-3/module-3/html/35.html', 1, 37, 1, 80, 1),
(2437, '36', '36', '../../../templates/level-3/module-3/html/36.html', 1, 38, 1, 80, 1),
(2438, '37', '37', '../../../templates/level-3/module-3/html/37.html', 1, 39, 1, 80, 1),
(2439, '38', '38', '../../../templates/level-3/module-3/html/38.html', 1, 40, 1, 80, 1),
(2440, '1', '1', '../../../templates/level-3/module-4/html/01.html', 1, 3, 1, 81, 1),
(2441, '2', '2', '../../../templates/level-3/module-4/html/02.html', 1, 4, 1, 81, 1),
(2442, '3', '3', '../../../templates/level-3/module-4/html/03.html', 1, 5, 1, 81, 1),
(2443, '4', '4', '../../../templates/level-3/module-4/html/04.html', 1, 6, 1, 81, 1),
(2444, '5', '5', '../../../templates/level-3/module-4/html/05.html', 1, 7, 3, 81, 1),
(2445, '6', '6', '../../../templates/level-3/module-4/html/06.html', 1, 8, 3, 81, 1),
(2446, '7', '7', '../../../templates/level-3/module-4/html/07.html', 1, 9, 3, 81, 1),
(2447, '8', '8', '../../../templates/level-3/module-4/html/08.html', 1, 10, 3, 81, 1),
(2448, '9', '9', '../../../templates/level-3/module-4/html/09.html', 1, 11, 1, 81, 1),
(2449, '10', '10', '../../../templates/level-3/module-4/html/10.html', 1, 12, 1, 81, 1),
(2450, '11', '11', '../../../templates/level-3/module-4/html/11.html', 1, 13, 4, 81, 1),
(2451, '12', '12', '../../../templates/level-3/module-4/html/12.html', 1, 14, 1, 81, 1),
(2452, '13', '13', '../../../templates/level-3/module-4/html/13.html', 1, 15, 3, 81, 1),
(2455, '14', '14', '../../../templates/level-3/module-4/html/14.html', 1, 16, 3, 81, 1),
(2456, '15', '15', '../../../templates/level-3/module-4/html/15.html', 1, 17, 1, 81, 1),
(2457, '16', '16', '../../../templates/level-3/module-4/html/16.html', 1, 18, 1, 81, 1),
(2458, '17', '17', '../../../templates/level-3/module-4/html/17.html', 1, 19, 4, 81, 1),
(2459, '18', '18', '../../../templates/level-3/module-4/html/18.html', 1, 20, 1, 81, 1),
(2460, '19', '19', '../../../templates/level-3/module-4/html/19.html', 1, 21, 2, 81, 1),
(2461, '20', '20', '../../../templates/level-3/module-4/html/20.html', 1, 22, 1, 81, 1),
(2466, '21', '21', '../../../templates/level-3/module-4/html/21.html', 1, 25, 3, 81, 2),
(2467, '22', '22', '../../../templates/level-3/module-4/html/22.html', 1, 26, 2, 81, 2),
(2468, '23', '23', '../../../templates/level-3/module-4/html/23.html', 1, 27, 3, 81, 2),
(2469, '24', '24', '../../../templates/level-3/module-4/html/24.html', 1, 28, 3, 81, 2),
(2470, '25', '25', '../../../templates/level-3/module-4/html/25.html', 1, 29, 1, 81, 2),
(2471, '26', '26', '../../../templates/level-3/module-4/html/26.html', 1, 30, 4, 81, 2),
(2472, '27', '27', '../../../templates/level-3/module-4/html/27.html', 1, 31, 3, 81, 2),
(2473, '28', '28', '../../../templates/level-3/module-4/html/28.html', 1, 32, 3, 81, 2),
(2474, '29', '29', '../../../templates/level-3/module-4/html/29.html', 1, 33, 1, 81, 2),
(2475, '31', '31', '../../../templates/level-3/module-4/html/31.html', 1, 35, 1, 81, 2),
(2476, '32', '32', '../../../templates/level-3/module-4/html/32.html', 1, 38, 2, 81, 4),
(2477, '33', '33', '../../../templates/level-3/module-4/html/33.html', 1, 39, 4, 81, 4),
(2478, '34', '34', '../../../templates/level-3/module-4/html/34.html', 1, 40, 2, 81, 4),
(2479, '35', '35', '../../../templates/level-3/module-4/html/35.html', 1, 41, 3, 81, 4),
(2480, '1', '1', '../../../templates/level-3/module-6/html/01.html', 1, 3, 1, 83, 1),
(2481, '2', '2', '../../../templates/level-3/module-6/html/02.html', 1, 4, 1, 83, 1),
(2482, '3', '3', '../../../templates/level-3/module-6/html/03.html', 1, 5, 1, 83, 1),
(2483, '4', '4', '../../../templates/level-3/module-6/html/04.html', 1, 6, 2, 83, 1),
(2484, '5', '5', '../../../templates/level-3/module-6/html/05.html', 1, 7, 1, 83, 1),
(2485, '6', '6', '../../../templates/level-3/module-6/html/06.html', 1, 8, 3, 83, 1),
(2486, '7', '7', '../../../templates/level-3/module-6/html/07.html', 1, 9, 4, 83, 1),
(2487, '8', '8', '../../../templates/level-3/module-6/html/08.html', 1, 10, 3, 83, 1),
(2488, '9', '9', '../../../templates/level-3/module-6/html/09.html', 1, 11, 1, 83, 1),
(2489, '10', '10', '../../../templates/level-3/module-6/html/10.html', 1, 12, 3, 83, 1),
(2490, '11', '11', '../../../templates/level-3/module-6/html/11.html', 1, 13, 1, 83, 1),
(2491, '12', '12', '../../../templates/level-3/module-6/html/12.html', 1, 14, 1, 83, 1),
(2496, '17', '17', '../../../templates/level-3/module-6/html/17.html', 1, 17, 4, 83, 2),
(2497, '18', '18', '../../../templates/level-3/module-6/html/18.html', 1, 18, 3, 83, 2),
(2498, '19', '19', '../../../templates/level-3/module-6/html/19.html', 1, 19, 4, 83, 2),
(2499, '20', '20', '../../../templates/level-3/module-6/html/20.html', 1, 20, 4, 83, 2),
(2500, '21', '21', '../../../templates/level-3/module-6/html/21.html', 1, 21, 2, 83, 2),
(2501, '22', '22', '../../../templates/level-3/module-6/html/22.html', 1, 22, 1, 83, 2),
(2502, '23', '23', '../../../templates/level-3/module-6/html/23.html', 1, 23, 4, 83, 2),
(2503, '24', '24', '../../../templates/level-3/module-6/html/24.html', 1, 24, 1, 83, 2),
(2504, '25', '25', '../../../templates/level-3/module-6/html/25.html', 1, 25, 4, 83, 2),
(2505, '26', '26', '../../../templates/level-3/module-6/html/26.html', 1, 26, 1, 83, 2),
(2506, '27', '27', '../../../templates/level-3/module-6/html/27.html', 1, 29, 4, 83, 4),
(2507, '28', '28', '../../../templates/level-3/module-6/html/28.html', 1, 30, 4, 83, 4),
(2508, '29', '29', '../../../templates/level-3/module-6/html/29.html', 1, 31, 3, 83, 4),
(2509, '1', '1', '../../../templates/level-3/module-9/html/01.html', 1, 3, 1, 86, 1),
(2510, '2', '2', '../../../templates/level-3/module-9/html/02.html', 1, 4, 3, 86, 1),
(2511, '3', '3', '../../../templates/level-3/module-9/html/03.html', 1, 5, 3, 86, 1),
(2512, '4', '4', '../../../templates/level-3/module-9/html/04.html', 1, 6, 1, 86, 1),
(2513, '5', '5', '../../../templates/level-3/module-9/html/05.html', 1, 7, 4, 86, 1),
(2514, '6', '6', '../../../templates/level-3/module-9/html/06.html', 1, 8, 3, 86, 1),
(2515, '7', '7', '../../../templates/level-3/module-9/html/07.html', 1, 9, 1, 86, 1),
(2516, '8', '8', '../../../templates/level-3/module-9/html/08.html', 1, 10, 4, 86, 1),
(2517, '9', '9', '../../../templates/level-3/module-9/html/09.html', 1, 11, 3, 86, 1),
(2518, '10', '10', '../../../templates/level-3/module-9/html/10.html', 1, 12, 1, 86, 1),
(2519, '11', '11', '../../../templates/level-3/module-9/html/11.html', 1, 13, 1, 86, 1),
(2520, '12', '12', '../../../templates/level-3/module-9/html/12.html', 1, 14, 3, 86, 1),
(2521, '13', '13', '../../../templates/level-3/module-9/html/13.html', 1, 15, 1, 86, 1),
(2522, '14', '14', '../../../templates/level-3/module-9/html/14.html', 1, 16, 4, 86, 1),
(2523, '15', '15', '../../../templates/level-3/module-9/html/15.html', 1, 17, 1, 86, 1),
(2524, '16', '16', '../../../templates/level-3/module-9/html/16.html', 1, 18, 3, 86, 1),
(2525, '17', '17', '../../../templates/level-3/module-9/html/17.html', 1, 19, 4, 86, 1),
(2526, '18', '18', '../../../templates/level-3/module-9/html/18.html', 1, 20, 4, 86, 1),
(2527, '19', '19', '../../../templates/level-3/module-9/html/19.html', 1, 21, 4, 86, 1),
(2528, '20', '20', '../../../templates/level-3/module-9/html/20.html', 1, 22, 4, 86, 1),
(2529, '21', '21', '../../../templates/level-3/module-9/html/21.html', 1, 23, 4, 86, 1),
(2530, '22', '22', '../../../templates/level-3/module-9/html/22.html', 1, 24, 4, 86, 1),
(2531, '23', '23', '../../../templates/level-3/module-9/html/23.html', 1, 25, 4, 86, 1),
(2532, '24', '24', '../../../templates/level-3/module-9/html/24.html', 1, 26, 3, 86, 1),
(2533, '25', '25', '../../../templates/level-3/module-9/html/25.html', 1, 27, 1, 86, 1),
(2538, '30', '30', '../../../templates/level-3/module-9/html/30.html', 1, 28, 1, 86, 1),
(2539, '31', '31', '../../../templates/level-3/module-9/html/31.html', 1, 29, 1, 86, 1),
(2540, '32', '32', '../../../templates/level-3/module-9/html/32.html', 1, 32, 4, 86, 2),
(2541, '33', '33', '../../../templates/level-3/module-9/html/33.html', 1, 33, 1, 86, 2),
(2542, '34', '34', '../../../templates/level-3/module-9/html/34.html', 0, 34, 4, 86, 2),
(2543, '35', '35', '../../../templates/level-3/module-9/html/35.html', 1, 35, 1, 86, 2),
(2544, '1', '1', '../../../templates/level-3/module-10/html/01.html', 1, 3, 1, 87, 1),
(2545, '2', '2', '../../../templates/level-3/module-10/html/02.html', 1, 4, 3, 87, 1),
(2546, '3', '3', '../../../templates/level-3/module-10/html/03.html', 1, 5, 3, 87, 1),
(2547, '4', '4', '../../../templates/level-3/module-10/html/04.html', 1, 6, 3, 87, 1),
(2548, '5', '5', '../../../templates/level-3/module-10/html/05.html', 1, 7, 1, 87, 1),
(2549, '6', '6', '../../../templates/level-3/module-10/html/06.html', 1, 8, 3, 87, 1),
(2550, '7', '7', '../../../templates/level-3/module-10/html/07.html', 1, 9, 1, 87, 1),
(2551, '8', '8', '../../../templates/level-3/module-10/html/08.html', 1, 10, 1, 87, 1),
(2552, '9', '9', '../../../templates/level-3/module-10/html/09.html', 1, 11, 1, 87, 1),
(2553, '10', '10', '../../../templates/level-3/module-10/html/10.html', 1, 12, 1, 87, 1),
(2554, '11', '11', '../../../templates/level-3/module-10/html/11.html', 1, 13, 1, 87, 1),
(2555, '12', '12', '../../../templates/level-3/module-10/html/12.html', 1, 14, 4, 87, 1),
(2556, '13', '13', '../../../templates/level-3/module-10/html/13.html', 1, 15, 1, 87, 1),
(2559, '16', '16', '../../../templates/level-3/module-10/html/16.html', 1, 16, 1, 87, 1),
(2560, '17', '17', '../../../templates/level-3/module-10/html/17.html', 1, 19, 4, 87, 2),
(2561, '18', '18', '../../../templates/level-3/module-10/html/18.html', 1, 20, 4, 87, 2),
(2562, '19', '19', '../../../templates/level-3/module-10/html/19.html', 1, 21, 1, 87, 2),
(2563, '20', '20', '../../../templates/level-3/module-10/html/20.html', 1, 22, 4, 87, 2),
(2564, '21', '21', '../../../templates/level-3/module-10/html/21.html', 1, 23, 1, 87, 2),
(2565, '22', '22', '../../../templates/level-3/module-10/html/22.html', 1, 24, 4, 87, 2),
(2566, '23', '23', '../../../templates/level-3/module-10/html/23.html', 1, 25, 4, 87, 2),
(2567, '24', '24', '../../../templates/level-3/module-10/html/24.html', 1, 26, 1, 87, 2),
(2568, '25', '25', '../../../templates/level-3/module-10/html/25.html', 1, 27, 1, 87, 2),
(2569, '26', '26', '../../../templates/level-3/module-10/html/26.html', 1, 28, 1, 87, 2),
(2570, '27', '27', '../../../templates/level-3/module-10/html/27.html', 1, 29, 1, 87, 2),
(2571, '28', '28', '../../../templates/level-3/module-10/html/28.html', 1, 32, 4, 87, 4),
(2572, '29', '29', '../../../templates/level-3/module-10/html/29.html', 1, 33, 4, 87, 4),
(2573, '30', '30', '../../../templates/level-3/module-10/html/30.html', 1, 34, 3, 87, 4),
(2576, '1', '1', '../../../templates/level-3/module-2/html/01.html', 1, 3, 5, 79, 1),
(2577, '2', '2', '../../../templates/level-3/module-2/html/02.html', 1, 4, 3, 79, 1),
(2578, '3', '3', '../../../templates/level-3/module-2/html/03.html', 1, 5, 1, 79, 1),
(2579, '4', '4', '../../../templates/level-3/module-2/html/04.html', 1, 6, 3, 79, 1),
(2580, '5', '5', '../../../templates/level-3/module-2/html/05.html', 1, 7, 1, 79, 1),
(2581, '6', '6', '../../../templates/level-3/module-2/html/06.html', 1, 8, 3, 79, 1),
(2582, '7', '7', '../../../templates/level-3/module-2/html/07.html', 1, 9, 1, 79, 1),
(2583, '8', '8', '../../../templates/level-3/module-2/html/08.html', 1, 10, 5, 79, 1),
(2584, '9', '9', '../../../templates/level-3/module-2/html/09.html', 1, 11, 3, 79, 1),
(2585, '10', '10', '../../../templates/level-3/module-2/html/10.html', 1, 12, 1, 79, 1),
(2586, '11', '11', '../../../templates/level-3/module-2/html/11.html', 1, 13, 1, 79, 1),
(2587, '12', '12', '../../../templates/level-3/module-2/html/12.html', 1, 14, 3, 79, 1),
(2588, '13', '13', '../../../templates/level-3/module-2/html/13.html', 1, 15, 1, 79, 1),
(2589, '14', '14', '../../../templates/level-3/module-2/html/14.html', 1, 16, 3, 79, 1),
(2590, '15', '15', '../../../templates/level-3/module-2/html/15.html', 1, 17, 1, 79, 1),
(2591, '16', '16', '../../../templates/level-3/module-2/html/16.html', 1, 18, 1, 79, 1),
(2592, '17', '17', '../../../templates/level-3/module-2/html/17.html', 0, 19, 1, 79, 1),
(2593, '18', '18', '../../../templates/level-3/module-2/html/18.html', 0, 20, 1, 79, 1),
(2594, '19', '19', '../../../templates/level-3/module-2/html/19.html', 1, 21, 3, 79, 1),
(2595, '20', '20', '../../../templates/level-3/module-2/html/20.html', 1, 22, 1, 79, 1),
(2596, '21', '21', '../../../templates/level-3/module-2/html/21.html', 1, 23, 1, 79, 1),
(2597, '22', '22', '../../../templates/level-3/module-2/html/22.html', 1, 24, 3, 79, 1),
(2598, '23', '23', '../../../templates/level-3/module-2/html/23.html', 1, 27, 1, 79, 2),
(2599, '24', '24', '../../../templates/level-3/module-2/html/24.html', 1, 28, 3, 79, 2),
(2600, '25', '25', '../../../templates/level-3/module-2/html/25.html', 1, 29, 3, 79, 2),
(2601, '26', '26', '../../../templates/level-3/module-2/html/26.html', 1, 30, 3, 79, 2),
(2602, '27', '27', '../../../templates/level-3/module-2/html/27.html', 1, 31, 3, 79, 2),
(2603, '28', '28', '../../../templates/level-3/module-2/html/28.html', 1, 32, 1, 79, 2),
(2604, '29', '29', '../../../templates/level-3/module-2/html/29.html', 1, 33, 3, 79, 2),
(2605, '30', '30', '../../../templates/level-3/module-2/html/30.html', 1, 34, 3, 79, 2),
(2606, '31', '31', '../../../templates/level-3/module-2/html/31.html', 1, 35, 1, 79, 2),
(2607, '32', '32', '../../../templates/level-3/module-2/html/32.html', 1, 36, 1, 79, 2),
(2608, '33', '33', '../../../templates/level-3/module-2/html/33.html', 1, 39, 3, 79, 4),
(2609, '34', '34', '../../../templates/level-3/module-2/html/34.html', 1, 40, 3, 79, 4),
(2610, '35', '35', '../../../templates/level-3/module-2/html/35.html', 1, 41, 3, 79, 4),
(2614, '1', '1', '../../../templates/level-3/module-8/html/01.html', 1, 3, 1, 85, 1),
(2615, '2', '2', '../../../templates/level-3/module-8/html/02.html', 1, 4, 1, 85, 1),
(2616, '4', '4', '../../../templates/level-3/module-8/html/04.html', 1, 6, 2, 85, 1),
(2617, '5', '5', '../../../templates/level-3/module-8/html/05.html', 1, 7, 2, 85, 1),
(2618, '6', '6', '../../../templates/level-3/module-8/html/06.html', 1, 8, 1, 85, 1),
(2619, '7', '7', '../../../templates/level-3/module-8/html/07.html', 1, 9, 1, 85, 1),
(2620, '9', '9', '../../../templates/level-3/module-8/html/09.html', 1, 11, 1, 85, 1),
(2621, '11', '11', '../../../templates/level-3/module-8/html/11.html', 1, 13, 1, 85, 1),
(2622, '12', '12', '../../../templates/level-3/module-8/html/12.html', 1, 14, 3, 85, 1),
(2623, '13', '13', '../../../templates/level-3/module-8/html/13.html', 1, 15, 2, 85, 1),
(2624, '14', '14', '../../../templates/level-3/module-8/html/14.html', 1, 16, 1, 85, 1),
(2625, '15', '15', '../../../templates/level-3/module-8/html/15.html', 1, 17, 1, 85, 1),
(2630, '16', '16', '../../../templates/level-3/module-8/html/20.html', 1, 18, 1, 85, 1),
(2631, '17', '17', '../../../templates/level-3/module-8/html/21.html', 1, 19, 1, 85, 1),
(2632, '18', '18', '../../../templates/level-3/module-8/html/22.html', 1, 20, 3, 85, 1),
(2633, '19', '19', '../../../templates/level-3/module-8/html/23.html', 1, 23, 1, 85, 2),
(2634, '20', '20', '../../../templates/level-3/module-8/html/24.html', 1, 24, 4, 85, 2),
(2635, '21', '21', '../../../templates/level-3/module-8/html/25.html', 1, 25, 3, 85, 2),
(2636, '22', '22', '../../../templates/level-3/module-8/html/26.html', 1, 26, 3, 85, 2),
(2637, '23', '23', '../../../templates/level-3/module-8/html/27.html', 1, 27, 3, 85, 2),
(2638, '24', '24', '../../../templates/level-3/module-8/html/28.html', 1, 28, 4, 85, 2),
(2639, '25', '25', '../../../templates/level-3/module-8/html/29.html', 1, 29, 1, 85, 2),
(2640, '26', '26', '../../../templates/level-3/module-8/html/30.html', 1, 30, 1, 85, 2),
(2641, '27', '27', '../../../templates/level-3/module-8/html/31.html', 1, 31, 4, 85, 2),
(2642, '28', '28', '../../../templates/level-3/module-8/html/32.html', 1, 32, 1, 85, 2),
(2643, '29', '29', '../../../templates/level-3/module-8/html/33.html', 1, 35, 4, 85, 4),
(2644, '30', '30', '../../../templates/level-3/module-8/html/34.html', 1, 36, 3, 85, 4),
(2645, '31', '31', '../../../templates/level-3/module-8/html/35.html', 1, 37, 3, 85, 4),
(2646, '1', '1', '../../../templates/level-3/module-12/html/01.html', 1, 3, 1, 89, 1),
(2647, '2', '2', '../../../templates/level-3/module-12/html/02.html', 1, 4, 3, 89, 1),
(2648, '3', '3', '../../../templates/level-3/module-12/html/03.html', 1, 5, 3, 89, 1),
(2649, '4', '4', '../../../templates/level-3/module-12/html/04.html', 1, 6, 3, 89, 1),
(2650, '5', '5', '../../../templates/level-3/module-12/html/05.html', 1, 7, 1, 89, 1),
(2651, '6', '6', '../../../templates/level-3/module-12/html/06.html', 1, 8, 3, 89, 1),
(2652, '11', '11', '../../../templates/level-3/module-12/html/07.html', 1, 13, 1, 89, 1),
(2653, '12', '12', '../../../templates/level-3/module-12/html/08.html', 1, 14, 3, 89, 1),
(2654, '13', '13', '../../../templates/level-3/module-12/html/09.html', 1, 15, 4, 89, 1),
(2655, '14', '14', '../../../templates/level-3/module-12/html/10.html', 1, 16, 4, 89, 1),
(2656, '15', '15', '../../../templates/level-3/module-12/html/11.html', 1, 17, 4, 89, 1),
(2657, '16', '16', '../../../templates/level-3/module-12/html/12.html', 1, 18, 4, 89, 1),
(2658, '17', '17', '../../../templates/level-3/module-12/html/13.html', 1, 19, 4, 89, 1),
(2659, '18', '18', '../../../templates/level-3/module-12/html/14.html', 1, 20, 4, 89, 1),
(2660, '19', '19', '../../../templates/level-3/module-12/html/15.html', 1, 21, 4, 89, 1),
(2661, '20', '20', '../../../templates/level-3/module-12/html/16.html', 1, 22, 3, 89, 1),
(2662, '21', '21', '../../../templates/level-3/module-12/html/17.html', 1, 23, 1, 89, 1),
(2667, '26', '26', '../../../templates/level-3/module-12/html/22.html', 1, 24, 1, 89, 1),
(2668, '27', '27', '../../../templates/level-3/module-12/html/23.html', 1, 25, 1, 89, 1),
(2669, '28', '28', '../../../templates/level-3/module-12/html/24.html', 1, 28, 4, 89, 2),
(2670, '29', '29', '../../../templates/level-3/module-12/html/25.html', 1, 29, 4, 89, 2),
(2671, '30', '30', '../../../templates/level-3/module-12/html/26.html', 1, 30, 1, 89, 2),
(2672, '31', '31', '../../../templates/level-3/module-12/html/27.html', 1, 31, 3, 89, 2),
(2673, '32', '32', '../../../templates/level-3/module-12/html/28.html', 1, 33, 1, 89, 2),
(2674, '33', '33', '../../../templates/level-3/module-12/html/29.html', 1, 34, 4, 89, 2),
(2675, '34', '34', '../../../templates/level-3/module-12/html/30.html', 1, 35, 1, 89, 2),
(2676, '35', '35', '../../../templates/level-3/module-12/html/31.html', 1, 36, 1, 89, 2),
(2677, '36', '36', '../../../templates/level-3/module-12/html/32.html', 0, 37, 1, 89, 2),
(2678, '37', '37', '../../../templates/level-3/module-12/html/33.html', 1, 38, 3, 89, 2),
(2679, '38', '38', '../../../templates/level-3/module-12/html/34.html', 1, 39, 1, 89, 2),
(2680, '39', '39', '../../../templates/level-3/module-12/html/35.html', 1, 42, 3, 89, 4),
(2681, '40', '40', '../../../templates/level-3/module-12/html/36.html', 1, 43, 2, 89, 4),
(2682, '41', '41', '../../../templates/level-3/module-12/html/37.html', 1, 44, 4, 89, 4),
(2689, '1', '1', '../../../templates/level-3/module-11/html/01.html', 1, 3, 1, 88, 1),
(2690, '2', '2', '../../../templates/level-3/module-11/html/02.html', 1, 4, 3, 88, 1),
(2691, '3', '3', '../../../templates/level-3/module-11/html/03.html', 1, 5, 3, 88, 1),
(2692, '4', '4', '../../../templates/level-3/module-11/html/04.html', 1, 6, 3, 88, 1),
(2693, '5', '5', '../../../templates/level-3/module-11/html/05.html', 1, 7, 1, 88, 1),
(2694, '6', '6', '../../../templates/level-3/module-11/html/06.html', 1, 8, 3, 88, 1),
(2695, '7', '7', '../../../templates/level-3/module-11/html/07.html', 1, 9, 1, 88, 1),
(2696, '8', '8', '../../../templates/level-3/module-11/html/08.html', 1, 10, 1, 88, 1),
(2697, '9', '9', '../../../templates/level-3/module-11/html/09.html', 1, 11, 4, 88, 1),
(2698, '10', '10', '../../../templates/level-3/module-11/html/10.html', 1, 12, 1, 88, 1),
(2699, '11', '11', '../../../templates/level-3/module-11/html/11.html', 1, 13, 4, 88, 1),
(2700, '12', '12', '../../../templates/level-3/module-11/html/12.html', 1, 14, 1, 88, 1),
(2701, '13', '13', '../../../templates/level-3/module-11/html/13.html', 1, 15, 1, 88, 1),
(2702, '14', '14', '../../../templates/level-3/module-11/html/14.html', 1, 16, 1, 88, 1),
(2703, '15', '15', '../../../templates/level-3/module-11/html/15.html', 1, 17, 1, 88, 1),
(2704, '16', '16', '../../../templates/level-3/module-11/html/16.html', 1, 18, 1, 88, 1),
(2705, '17', '17', '../../../templates/level-3/module-11/html/17.html', 1, 19, 1, 88, 1),
(2706, '18', '18', '../../../templates/level-3/module-11/html/18.html', 1, 22, 4, 88, 2),
(2707, '19', '19', '../../../templates/level-3/module-11/html/19.html', 1, 23, 1, 88, 2),
(2708, '20', '20', '../../../templates/level-3/module-11/html/20.html', 1, 24, 1, 88, 2),
(2709, '21', '21', '../../../templates/level-3/module-11/html/21.html', 1, 25, 4, 88, 2),
(2710, '22', '22', '../../../templates/level-3/module-11/html/22.html', 1, 26, 4, 88, 2),
(2711, '23', '23', '../../../templates/level-3/module-11/html/23.html', 1, 27, 4, 88, 2),
(2712, '24', '24', '../../../templates/level-3/module-11/html/24.html', 1, 28, 4, 88, 2),
(2713, '25', '25', '../../../templates/level-3/module-11/html/25.html', 1, 29, 1, 88, 2),
(2714, '26', '26', '../../../templates/level-3/module-11/html/26.html', 1, 30, 1, 88, 2),
(2715, '27', '27', '../../../templates/level-3/module-11/html/27.html', 1, 33, 3, 88, 4),
(2716, '28', '28', '../../../templates/level-3/module-11/html/28.html', 1, 34, 4, 88, 4),
(2717, '29', '29', '../../../templates/level-3/module-11/html/29.html', 1, 35, 4, 88, 4),
(2718, '30', '30', '../../../templates/level-3/module-11/html/30.html', 1, 36, 3, 88, 4),
(2728, '1', '1', '../../../templates/level-3/module-7/html/01.html', 1, 3, 1, 84, 1),
(2729, '2', '2', '../../../templates/level-3/module-7/html/02.html', 1, 4, 3, 84, 1),
(2730, '3', '3', '../../../templates/level-3/module-7/html/03.html', 1, 5, 3, 84, 1),
(2731, '4', '4', '../../../templates/level-3/module-7/html/04.html', 1, 6, 3, 84, 1),
(2732, '5', '5', '../../../templates/level-3/module-7/html/05.html', 1, 7, 3, 84, 1),
(2733, '6', '6', '../../../templates/level-3/module-7/html/06.html', 1, 8, 1, 84, 1),
(2734, '7', '7', '../../../templates/level-3/module-7/html/07.html', 1, 9, 4, 84, 1),
(2735, '8', '8', '../../../templates/level-3/module-7/html/08.html', 1, 10, 1, 84, 1),
(2736, '9', '9', '../../../templates/level-3/module-7/html/09.html', 1, 11, 1, 84, 1),
(2737, '10', '10', '../../../templates/level-3/module-7/html/10.html', 1, 12, 3, 84, 1),
(2738, '11', '11', '../../../templates/level-3/module-7/html/11.html', 1, 13, 1, 84, 1),
(2739, '12', '12', '../../../templates/level-3/module-7/html/12.html', 1, 14, 1, 84, 1),
(2740, '13', '13', '../../../templates/level-3/module-7/html/13.html', 1, 15, 3, 84, 1),
(2741, '14', '14', '../../../templates/level-3/module-7/html/14.html', 1, 16, 1, 84, 1),
(2742, '15', '15', '../../../templates/level-3/module-7/html/15.html', 1, 17, 4, 84, 1),
(2743, '16', '16', '../../../templates/level-3/module-7/html/16.html', 1, 18, 1, 84, 1),
(2744, '17', '17', '../../../templates/level-3/module-7/html/17.html', 1, 19, 2, 84, 1),
(2745, '18', '18', '../../../templates/level-3/module-7/html/18.html', 1, 20, 1, 84, 1),
(2746, '19', '19', '../../../templates/level-3/module-7/html/19.html', 1, 21, 1, 84, 1),
(2747, '20', '20', '../../../templates/level-3/module-7/html/20.html', 1, 22, 1, 84, 1),
(2752, '25', '25', '../../../templates/level-3/module-7/html/25.html', 1, 23, 1, 84, 1),
(2753, '26', '26', '../../../templates/level-3/module-7/html/26.html', 1, 24, 1, 84, 1),
(2754, '27', '27', '../../../templates/level-3/module-7/html/27.html', 1, 27, 4, 84, 2),
(2755, '28', '28', '../../../templates/level-3/module-7/html/28.html', 1, 28, 3, 84, 2),
(2756, '29', '29', '../../../templates/level-3/module-7/html/29.html', 1, 29, 3, 84, 2),
(2757, '30', '30', '../../../templates/level-3/module-7/html/30.html', 1, 30, 4, 84, 2),
(2758, '31', '31', '../../../templates/level-3/module-7/html/31.html', 1, 31, 1, 84, 2),
(2759, '32', '32', '../../../templates/level-3/module-7/html/32.html', 1, 32, 4, 84, 2),
(2760, '33', '33', '../../../templates/level-3/module-7/html/33.html', 1, 33, 4, 84, 2),
(2761, '34', '34', '../../../templates/level-3/module-7/html/34.html', 1, 34, 1, 84, 2),
(2762, '35', '35', '../../../templates/level-3/module-7/html/35.html', 1, 35, 1, 84, 2),
(2763, '36', '36', '../../../templates/level-3/module-7/html/36.html', 1, 38, 3, 84, 4),
(2764, '37', '37', '../../../templates/level-3/module-7/html/37.html', 1, 39, 4, 84, 4),
(2765, '38', '38', '../../../templates/level-3/module-7/html/38.html', 1, 40, 3, 84, 4),
(2766, '3', '3', '../../../templates/level-3/module-8/html/03.html', 1, 5, 1, 85, 1),
(2767, '8', '8', '../../../templates/level-3/module-8/html/08.html', 1, 10, 1, 85, 1),
(2768, '10', '10', '../../../templates/level-3/module-8/html/10.html', 1, 12, 4, 85, 1),
(2769, '30', '30', '../../../templates/level-3/module-4/html/30.html', 1, 34, 4, 81, 2),
(2770, '6_2', '6_2', '../../../templates/level-3/module-12/html/06_2.html', 1, 9, 3, 89, 1),
(2771, '6_3', '6_3', '../../../templates/level-3/module-12/html/06_3.html', 1, 10, 3, 89, 1),
(2772, '6_4', '6_4', '../../../templates/level-3/module-12/html/06_4.html', 1, 11, 3, 89, 1),
(2773, '6_5', '6_5', '../../../templates/level-3/module-12/html/06_5.html', 1, 12, 3, 89, 1),
(2774, '36', '36', '../../../templates/level-3/module-9/html/36.html', 1, 36, 1, 86, 2),
(2775, '37', '37', '../../../templates/level-3/module-9/html/37.html', 1, 37, 1, 86, 2),
(2776, '38', '38', '../../../templates/level-3/module-9/html/38.html', 1, 38, 2, 86, 2),
(2777, '39', '39', '../../../templates/level-3/module-9/html/39.html', 1, 39, 2, 86, 2),
(2778, '40', '40', '../../../templates/level-3/module-9/html/40.html', 1, 40, 4, 86, 2),
(2779, '41', '41', '../../../templates/level-3/module-9/html/41.html', 1, 41, 3, 86, 2),
(2780, '42', '42', '../../../templates/level-3/module-9/html/42.html', 1, 44, 3, 86, 4),
(2781, '43', '43', '../../../templates/level-3/module-9/html/43.html', 1, 45, 2, 86, 4),
(2782, '44', '44', '../../../templates/level-3/module-9/html/44.html', 1, 46, 4, 86, 4),
(2783, '45', '45', '../../../templates/level-3/module-9/html/45.html', 1, 47, 3, 86, 4),
(2785, '35', '35', '../../../templates/level-3/module-5/html/36.html', 1, 42, 2, 82, 4),
(2786, '35', '35', '../../../templates/level-3/module-5/html/37.html', 1, 43, 3, 82, 4),
(2787, 'Portada', '36', '../../../templates/level-3/module-1/html/portada.php', 1, 1, 5, 78, 1),
(2788, 'Wellcome', '37', '../../../templates/level-3/module-1/html/welcome.php', 1, 2, 5, 78, 1),
(2789, 'Learning', '38', '../../../templates/level-3/module-1/html/learning.php', 1, 3, 5, 78, 1),
(2790, 'Module', '39', '../../../templates/level-3/module-1/html/module.php', 1, 4, 5, 78, 1),
(2791, 'Actividades', '40', '../../../templates/level-3/module-1/html/buhoactv.php', 1, 5, 5, 78, 1),
(2792, 'Fin Actividades', '41', '../../../templates/level-3/module-1/html/activities_end.php', 1, 27, 5, 78, 1),
(2793, 'SelfCheck', 'SelfCheck', '../../../templates/level-3/module-1/html/self_check.php', 1, 28, 5, 78, 2),
(2794, 'EndSelf', 'EndSelf', '../../../templates/level-3/module-1/html/self_check_end.php', 1, 39, 5, 78, 2),
(2795, 'Test', 'Test', '../../../templates/level-3/module-1/html/testing.php', 1, 40, 5, 78, 4),
(2796, 'EndTest', 'EndTest', '../../../templates/level-3/module-1/html/test_end.php', 1, 45, 5, 78, 4),
(2800, 'module', 'module', '../../../templates/level-3/module-2/html/module.php', 1, 1, 5, 79, 1),
(2801, 'actividades', 'actividades', '../../../templates/level-3/module-2/html/buhoactv.php', 1, 2, 5, 79, 1),
(2802, 'fin actividades', 'fin actividades', '../../../templates/level-3/module-2/html/activities_end.php', 1, 25, 5, 79, 1),
(2803, 'self check', 'self check', '../../../templates/level-3/module-2/html/self_check.php', 1, 26, 5, 79, 2),
(2804, 'fin self', 'fin self', '../../../templates/level-3/module-2/html/self_check_end.php', 1, 37, 5, 79, 2),
(2805, 'test', 'test', '../../../templates/level-3/module-2/html/testing.php', 1, 38, 5, 79, 4),
(2806, 'fin test', 'fin test', '../../../templates/level-3/module-2/html/test_end.php', 1, 42, 5, 79, 4),
(2807, 'module', 'module', '../../../templates/level-3/module-3/html/module.php', 1, 1, 5, 80, 1),
(2808, 'actividades', 'actividades', '../../../templates/level-3/module-3/html/buhoactv.php', 1, 2, 5, 80, 1),
(2809, 'fin actividades', 'fin actividades', '../../../templates/level-3/module-3/html/activities_end.php', 1, 43, 5, 80, 1),
(2810, 'self check', 'self check', '../../../templates/level-3/module-3/html/self_check.php', 1, 42, 5, 80, 2),
(2811, 'fin self', 'fin self', '../../../templates/level-3/module-3/html/self_check_end.php', 1, 45, 5, 80, 2),
(2812, 'test', 'test', '../../../templates/level-3/module-3/html/testing.php', 1, 41, 5, 80, 4),
(2813, 'fin test', 'fin test', '../../../templates/level-3/module-3/html/test_end.php', 1, 44, 5, 80, 4),
(2814, 'module', 'module', '../../../templates/level-3/module-4/html/module.php', 1, 1, 5, 81, 1),
(2815, 'actividades', 'actividades', '../../../templates/level-3/module-4/html/buhoactv.php', 1, 2, 5, 81, 1),
(2817, 'fin actividades', 'fin actividades', '../../../templates/level-3/module-4/html/activities_end.php', 1, 23, 5, 81, 1),
(2818, 'self check', 'self check', '../../../templates/level-3/module-4/html/self_check.php', 1, 24, 5, 81, 2),
(2819, 'fin self', 'fin self', '../../../templates/level-3/module-4/html/self_check_end.php', 1, 36, 5, 81, 2),
(2820, 'test', 'test', '../../../templates/level-3/module-4/html/testing.php', 1, 37, 5, 81, 4),
(2821, 'fin test', 'fin test', '../../../templates/level-3/module-4/html/test_end.php', 1, 42, 5, 81, 4),
(2822, 'module', 'module', '../../../templates/level-3/module-5/html/module.php', 1, 1, 5, 82, 1),
(2823, 'actividades', 'actividades', '../../../templates/level-3/module-5/html/buhoactv.php', 1, 2, 5, 82, 1),
(2824, 'fin actividades', 'fin actividades', '../../../templates/level-3/module-5/html/activities_end.php', 1, 28, 5, 82, 1),
(2825, 'self check', 'self check', '../../../templates/level-3/module-5/html/self_check.php', 1, 29, 5, 82, 2),
(2826, 'fin self', 'fin self', '../../../templates/level-3/module-5/html/self_check_end.php', 1, 39, 5, 82, 2),
(2827, 'test', 'test', '../../../templates/level-3/module-5/html/testing.php', 1, 40, 5, 82, 4),
(2828, 'fin test', 'fin test', '../../../templates/level-3/module-5/html/test_end.php', 1, 44, 5, 82, 4),
(2829, '31_2', '31_2', '../../../templates/level-3/module-12/html/27_2.html', 1, 32, 3, 89, 2),
(2830, 'Mod12', 'Mod12', '../../../templates/level-3/module-12/html/modulo12.html', 1, 1, 1, 89, 1),
(2831, 'activities', 'activities', '../../../templates/level-3/module-12/html/activities.html', 1, 2, 1, 89, 1),
(2832, 'end_act', 'end_act', '../../../templates/level-3/module-12/html/activities_end.html', 1, 26, 1, 89, 1),
(2833, 'self', 'self', '../../../templates/level-3/module-12/html/self_check.html', 1, 27, 1, 89, 2),
(2834, 'end_self', 'end_self', '../../../templates/level-3/module-12/html/self_check_end.html', 1, 40, 1, 89, 2),
(2835, 'module', 'module', '../../../templates/level-3/module-6/html/module.php', 1, 1, 5, 83, 1),
(2836, 'actividades', 'actividades', '../../../templates/level-3/module-6/html/buhoactv.php', 1, 2, 5, 83, 1),
(2837, 'fin actividades', 'fin actividades', '../../../templates/level-3/module-6/html/activities_end.php', 1, 15, 5, 83, 1),
(2838, 'self check', 'self check', '../../../templates/level-3/module-6/html/self_check.php', 1, 16, 5, 83, 2),
(2839, 'fin self', 'fin self', '../../../templates/level-3/module-6/html/self_check_end.php', 1, 27, 5, 83, 2),
(2840, 'test', 'test', '../../../templates/level-3/module-6/html/testing.php', 1, 28, 5, 83, 4),
(2841, 'fin test', 'fin test', '../../../templates/level-3/module-6/html/test_end.php', 1, 32, 5, 83, 4),
(2842, 'test', 'test', '../../../templates/level-3/module-12/html/test.html', 1, 41, 1, 89, 4),
(2843, 'end_test', 'end_test', '../../../templates/level-3/module-12/html/test_end.html', 1, 45, 1, 89, 4),
(2844, 'modulo11', 'modulo11', '../../../templates/level-3/module-11/html/modulo11.html', 1, 1, 1, 88, 1),
(2845, 'activities', 'activities', '../../../templates/level-3/module-11/html/activities.html', 1, 2, 1, 88, 1),
(2846, 'activities_end', 'activities_end', '../../../templates/level-3/module-11/html/activities_end.html', 1, 20, 1, 88, 1),
(2847, 'self_check', 'self_check', '../../../templates/level-3/module-11/html/self_check.html', 1, 21, 1, 88, 2),
(2848, 'self_check_end', 'self_check_end', '../../../templates/level-3/module-11/html/self_check_end.html', 1, 31, 1, 88, 2),
(2849, 'test', 'test', '../../../templates/level-3/module-11/html/test.html', 1, 32, 1, 88, 4),
(2850, 'test_end', 'test_end', '../../../templates/level-3/module-11/html/test_end.html', 1, 37, 1, 88, 4),
(2851, 'module', 'module', '../../../templates/level-3/module-7/html/module.php', 1, 1, 5, 84, 1),
(2852, 'actividades', 'actividades', '../../../templates/level-3/module-7/html/buhoactv.php', 1, 2, 5, 84, 1),
(2853, 'fin actividades', 'fin actividades', '../../../templates/level-3/module-7/html/activities_end.php', 1, 25, 5, 84, 1),
(2854, 'self check', 'self check', '../../../templates/level-3/module-7/html/self_check.php', 1, 26, 5, 84, 2),
(2855, 'fin self', 'fin self', '../../../templates/level-3/module-7/html/self_check_end.php', 1, 36, 5, 84, 2),
(2856, 'test', 'test', '../../../templates/level-3/module-7/html/testing.php', 1, 37, 5, 84, 4),
(2857, 'fin test', 'fin test', '../../../templates/level-3/module-7/html/test_end.php', 1, 41, 5, 84, 4),
(2858, 'modulo10', 'modulo10', '../../../templates/level-3/module-10/html/modulo10.html', 1, 1, 1, 87, 1),
(2859, 'activities', 'activities', '../../../templates/level-3/module-10/html/activities.html', 1, 2, 1, 87, 1),
(2860, 'activities_end', 'activities_end', '../../../templates/level-3/module-10/html/activities_end.html', 1, 17, 1, 87, 1),
(2861, 'self_check', 'self_check', '../../../templates/level-3/module-10/html/self_check.html', 1, 18, 1, 87, 2),
(2862, 'self_check_end', 'self_check_end', '../../../templates/level-3/module-10/html/self_check_end.html', 1, 30, 1, 87, 2),
(2863, 'test', 'test', '../../../templates/level-3/module-10/html/test.html', 1, 31, 1, 87, 4),
(2864, 'test_end', 'test_end', '../../../templates/level-3/module-10/html/test_end.html', 1, 35, 1, 87, 4),
(2865, 'modulo9', 'modulo9', '../../../templates/level-3/module-9/html/modulo9.html', 1, 1, 1, 86, 1),
(2866, 'activities', 'activities', '../../../templates/level-3/module-9/html/activities.html', 1, 2, 1, 86, 1),
(2867, 'activities_end', 'activities_end', '../../../templates/level-3/module-9/html/activities_end.html', 1, 30, 1, 86, 1),
(2868, 'self_check', 'self_check', '../../../templates/level-3/module-9/html/self_check.html', 1, 31, 1, 86, 2),
(2869, 'self_check_end', 'self_check_end', '../../../templates/level-3/module-9/html/self_check_end.html', 1, 42, 1, 86, 2),
(2870, 'test', 'test', '../../../templates/level-3/module-9/html/test.html', 1, 43, 1, 86, 4),
(2871, 'test_end', 'test_end', '../../../templates/level-3/module-9/html/test_end.html', 1, 48, 1, 86, 4),
(2872, 'module', 'module', '../../../templates/level-3/module-8/html/module.php', 1, 1, 5, 85, 1),
(2873, 'actividades', 'actividades', '../../../templates/level-3/module-8/html/buhoactv.php', 1, 2, 5, 85, 1),
(2874, 'fin actividades', 'fin actividades', '../../../templates/level-3/module-8/html/activities_end.php', 1, 21, 5, 85, 1),
(2875, 'self check', 'self check', '../../../templates/level-3/module-8/html/self_check.php', 1, 22, 5, 85, 2),
(2876, 'fin self', 'fin self', '../../../templates/level-3/module-8/html/self_check_end.php', 1, 33, 5, 85, 2),
(2877, 'test', 'test', '../../../templates/level-3/module-8/html/testing.php', 1, 34, 5, 85, 4),
(2878, 'fin test', 'fin test', '../../../templates/level-3/module-8/html/test_end.php', 1, 38, 5, 85, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso_preguntas`
--

CREATE TABLE IF NOT EXISTS `progreso_preguntas` (
`pro_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `mod_id` int(11) NOT NULL,
  `ord_id` int(11) NOT NULL,
  `tip_pre_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1147 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `progreso_preguntas`
--

INSERT INTO `progreso_preguntas` (`pro_id`, `usu_id`, `mod_id`, `ord_id`, `tip_pre_id`) VALUES
(1114, 67, 82, 27, 1),
(1115, 67, 78, 26, 1),
(1116, 67, 79, 24, 1),
(1117, 67, 79, 11, 2),
(1118, 67, 81, 22, 1),
(1119, 67, 83, 11, 2),
(1120, 67, 83, 14, 1),
(1121, 67, 84, 24, 1),
(1122, 67, 85, 11, 2),
(1123, 67, 85, 20, 1),
(1124, 67, 86, 29, 1),
(1125, 67, 87, 12, 2),
(1126, 67, 87, 16, 1),
(1127, 67, 88, 19, 1),
(1128, 67, 89, 25, 1),
(1129, 67, 82, 10, 2),
(1130, 67, 78, 11, 2),
(1131, 67, 78, 5, 4),
(1132, 67, 82, 4, 4),
(1133, 67, 81, 12, 2),
(1134, 67, 84, 10, 2),
(1135, 67, 84, 4, 4),
(1136, 67, 85, 4, 4),
(1137, 67, 79, 4, 4),
(1138, 67, 81, 5, 4),
(1139, 67, 87, 4, 4),
(1140, 67, 83, 4, 4),
(1141, 67, 88, 10, 2),
(1142, 67, 88, 5, 4),
(1143, 67, 89, 13, 2),
(1144, 67, 89, 4, 4),
(1145, 70, 78, 0, 1),
(1146, 67, 86, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_actividad`
--

CREATE TABLE IF NOT EXISTS `registro_actividad` (
`reg_id` int(11) NOT NULL,
  `fecha_ult_ing` varchar(45) DEFAULT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_actividad`
--

INSERT INTO `registro_actividad` (`reg_id`, `fecha_ult_ing`, `usu_id`) VALUES
(46, '2017-03-22 14:51:26', 67),
(47, '2017-03-17 11:47:05', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
`res_id` int(11) NOT NULL,
  `respuestascol` varchar(45) DEFAULT NULL,
  `res_val` varchar(45) DEFAULT NULL,
  `pre_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `res_cantidad_pre` int(100) NOT NULL,
  `res_bien` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_txt_usu`
--

CREATE TABLE IF NOT EXISTS `respuesta_txt_usu` (
`res_txt_id` int(11) NOT NULL,
  `res_txt_usu` text,
  `usu_id` int(11) NOT NULL,
  `pre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`rol_id` int(11) NOT NULL,
  `rol_nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `rol_nom`) VALUES
(1, 'Super Administrador'),
(2, 'Administrador'),
(3, 'Usuario'),
(4, 'Examinador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pregunta`
--

CREATE TABLE IF NOT EXISTS `tipo_pregunta` (
`tip_pre_id` int(11) NOT NULL,
  `tip_pre_nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_pregunta`
--

INSERT INTO `tipo_pregunta` (`tip_pre_id`, `tip_pre_nom`) VALUES
(1, 'Actividad'),
(2, 'Self Check'),
(3, 'Grammar'),
(4, 'Test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(45) NOT NULL,
  `usu_apellido` varchar(45) DEFAULT NULL,
  `usu_genero` varchar(5) NOT NULL,
  `usu_ide` varchar(45) DEFAULT NULL,
  `usu_email` varchar(45) DEFAULT NULL,
  `usu_pwd` varchar(32) DEFAULT NULL,
  `usu_est` int(11) DEFAULT NULL,
  `usu_fecha_reg` datetime DEFAULT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_test` int(11) DEFAULT NULL,
  `usu_time_fin` datetime DEFAULT NULL,
  `usu_time_ini` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_genero`, `usu_ide`, `usu_email`, `usu_pwd`, `usu_est`, `usu_fecha_reg`, `rol_id`, `usu_test`, `usu_time_fin`, `usu_time_ini`) VALUES
(67, 'Examinador', 'Prueba', 'M', '3434343434', 'examinador@prueba.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2015-03-26 00:00:00', 4, 0, NULL, NULL),
(70, 'Admin', 'Invil', 'M', '4431223231', 'admin@invil.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2015-04-06 00:00:00', 1, 0, NULL, NULL),
(73, 'Usuario', 'Prueba', 'M', '1254255688', 'usuario@prueba.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2015-09-17 00:00:00', 3, NULL, NULL, NULL),
(116, 'ges', 'admin', 'M', '789797798', 'gesadmin@prueba.com', '0192023a7bbd73250516f069df18b500', 1, '2016-09-29 00:00:00', 2, NULL, NULL, NULL),
(117, 'Usuario', 'Prueba', 'M', '1254255688', 'ander@prueba.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2015-09-17 00:00:00', 3, NULL, NULL, NULL),
(118, 'Usuario', 'Prueba', 'M', '1254255688', 'juan@prueba.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2015-09-17 00:00:00', 3, NULL, NULL, NULL),
(122, 'cesar', 'porras', 'M', '369852', 'cesar@prueba.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2017-03-27 13:18:06', 3, NULL, NULL, NULL),
(123, 'jhon', 'aldana', 'M', '1234555', 'jhon@prueba.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2017-03-27 15:54:18', 3, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audio_usuarios`
--
ALTER TABLE `audio_usuarios`
 ADD PRIMARY KEY (`aud_id`), ADD KEY `fk_audio_usuarios_preguntas1_idx` (`pre_id`), ADD KEY `fk_audio_usuarios_usuarios1_idx` (`usu_id`);

--
-- Indices de la tabla `categoria_pregunta`
--
ALTER TABLE `categoria_pregunta`
 ADD PRIMARY KEY (`cat_pre_id`);

--
-- Indices de la tabla `estado_prueba`
--
ALTER TABLE `estado_prueba`
 ADD PRIMARY KEY (`est_id`), ADD KEY `fk_estado_prueba_usuarios1_idx` (`usu_id`), ADD KEY `fk_estado_prueba_tipo_pregunta1_idx` (`tip_pre_id`), ADD KEY `fk_estado_prueba_modulos1_idx` (`mod_id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
 ADD PRIMARY KEY (`mod_id`), ADD KEY `fk_modulos_niveles1_idx` (`niv_id`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
 ADD PRIMARY KEY (`niv_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
 ADD PRIMARY KEY (`pre_id`), ADD KEY `fk_Preguntas_categoria_pregunta1_idx` (`cat_pre_id`), ADD KEY `fk_Preguntas_Modulos1_idx` (`mod_id`), ADD KEY `fk_preguntas_tipo_pregunta1_idx` (`tip_pre_id`);

--
-- Indices de la tabla `progreso_preguntas`
--
ALTER TABLE `progreso_preguntas`
 ADD PRIMARY KEY (`pro_id`), ADD UNIQUE KEY `pro_id_UNIQUE` (`pro_id`), ADD KEY `fk_progreso_preguntas_usuarios1_idx` (`usu_id`), ADD KEY `fk_progreso_preguntas_modulos1_idx` (`mod_id`), ADD KEY `fk_progreso_preguntas_tipo_pregunta1_idx` (`tip_pre_id`);

--
-- Indices de la tabla `registro_actividad`
--
ALTER TABLE `registro_actividad`
 ADD PRIMARY KEY (`reg_id`), ADD KEY `fk_registro_actividad_Usuarios1_idx` (`usu_id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
 ADD PRIMARY KEY (`res_id`), ADD KEY `fk_respuestas_Preguntas1_idx` (`pre_id`), ADD KEY `fk_respuestas_Usuarios1_idx` (`usu_id`);

--
-- Indices de la tabla `respuesta_txt_usu`
--
ALTER TABLE `respuesta_txt_usu`
 ADD PRIMARY KEY (`res_txt_id`), ADD KEY `fk_respuesta_txt_usu_Usuarios1_idx` (`usu_id`), ADD KEY `fk_respuesta_txt_usu_Preguntas1_idx` (`pre_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
 ADD PRIMARY KEY (`tip_pre_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`usu_id`), ADD UNIQUE KEY `usu_email_UNIQUE` (`usu_email`), ADD KEY `fk_Usuarios_roles1_idx` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `audio_usuarios`
--
ALTER TABLE `audio_usuarios`
MODIFY `aud_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=298;
--
-- AUTO_INCREMENT de la tabla `categoria_pregunta`
--
ALTER TABLE `categoria_pregunta`
MODIFY `cat_pre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estado_prueba`
--
ALTER TABLE `estado_prueba`
MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
MODIFY `niv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
MODIFY `pre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2879;
--
-- AUTO_INCREMENT de la tabla `progreso_preguntas`
--
ALTER TABLE `progreso_preguntas`
MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1147;
--
-- AUTO_INCREMENT de la tabla `registro_actividad`
--
ALTER TABLE `registro_actividad`
MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta_txt_usu`
--
ALTER TABLE `respuesta_txt_usu`
MODIFY `res_txt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
MODIFY `tip_pre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=134;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `audio_usuarios`
--
ALTER TABLE `audio_usuarios`
ADD CONSTRAINT `fk_audio_usuarios_preguntas1` FOREIGN KEY (`pre_id`) REFERENCES `preguntas` (`pre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_audio_usuarios_usuarios1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estado_prueba`
--
ALTER TABLE `estado_prueba`
ADD CONSTRAINT `fk_estado_prueba_modulos1` FOREIGN KEY (`mod_id`) REFERENCES `modulos` (`mod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estado_prueba_tipo_pregunta1` FOREIGN KEY (`tip_pre_id`) REFERENCES `tipo_pregunta` (`tip_pre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estado_prueba_usuarios1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
ADD CONSTRAINT `fk_modulos_niveles1` FOREIGN KEY (`niv_id`) REFERENCES `niveles` (`niv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
ADD CONSTRAINT `fk_Preguntas_Modulos1` FOREIGN KEY (`mod_id`) REFERENCES `modulos` (`mod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Preguntas_categoria_pregunta1` FOREIGN KEY (`cat_pre_id`) REFERENCES `categoria_pregunta` (`cat_pre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_preguntas_tipo_pregunta1` FOREIGN KEY (`tip_pre_id`) REFERENCES `tipo_pregunta` (`tip_pre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `progreso_preguntas`
--
ALTER TABLE `progreso_preguntas`
ADD CONSTRAINT `fk_progreso_preguntas_modulos1` FOREIGN KEY (`mod_id`) REFERENCES `modulos` (`mod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_progreso_preguntas_tipo_pregunta1` FOREIGN KEY (`tip_pre_id`) REFERENCES `tipo_pregunta` (`tip_pre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_progreso_preguntas_usuarios1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro_actividad`
--
ALTER TABLE `registro_actividad`
ADD CONSTRAINT `fk_registro_actividad_Usuarios1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
ADD CONSTRAINT `fk_respuestas_Preguntas1` FOREIGN KEY (`pre_id`) REFERENCES `preguntas` (`pre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_respuestas_Usuarios1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuesta_txt_usu`
--
ALTER TABLE `respuesta_txt_usu`
ADD CONSTRAINT `fk_respuesta_txt_usu_Preguntas1` FOREIGN KEY (`pre_id`) REFERENCES `preguntas` (`pre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_respuesta_txt_usu_Usuarios1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `fk_Usuarios_roles1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
