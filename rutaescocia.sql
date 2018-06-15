-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2018 a las 19:10:24
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rutaescocia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_compras`
--

CREATE TABLE `clientes_compras` (
  `idclientes` int(10) UNSIGNED NOT NULL,
  `nombre_cliente` varchar(45) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_ruta` varchar(11) DEFAULT NULL,
  `fecha_compra` timestamp NULL DEFAULT NULL,
  `observaciones` varchar(5000) DEFAULT NULL,
  `numero_personas` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes_compras`
--

INSERT INTO `clientes_compras` (`idclientes`, `nombre_cliente`, `apellidos`, `email`, `fecha_ruta`, `fecha_compra`, `observaciones`, `numero_personas`, `telefono`) VALUES
(107, 'Maria', 'Robles', 'mariarobles1979@gmail.com', '06/29/2018', '2018-06-15 17:08:35', '', 2, 664586738);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `idgalerias` int(11) NOT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `foto6` varchar(100) DEFAULT NULL,
  `idrutas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`idgalerias`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `idrutas`) VALUES
(1, 'galeriacastillos1.jpg', 'galeriacastillos2.jpg', 'galeriacastillos3.jpg', 'galeriacastillos4.jpg', 'galeriacastillos5.jpg', 'galeriacastillos6.jpg', 1),
(2, 'destileria1.jpg', 'destileria2.jpg', 'destileria3.jpg', 'destileria4.jpg', 'destileria5.jpg', 'destileria6.jpg', 2),
(3, 'destileria1.jpg', 'destileria2.jpg', 'destileria3.jpg', 'destileria4.jpg', 'destileria5.jpg', 'destileria6.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_13_083250_create_items_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(5000) DEFAULT NULL,
  `dias` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `nombre`, `descripcion`, `dias`, `precio`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Castillos y Fantasmas', 'Una de las mejores cosas de Escocia es que, independientemente de donde se encuentre, siempre habrá un castillo cerca. Tan característicos del paisaje escocés como los lagos cristalinos y las montañas ondulantes, los castillos del país se encuentran entre los más emblemáticos del mundo. Con más de 3.000 castillos en Escocia, casi uno por cada milla cuadrada, en nuestro tour encontrarás aquellos que siempre dejan sin aliento.', 1, 1200, 'dunnottar.png', NULL, '2018-06-13 12:52:45'),
(2, 'Whysky y el Santo Grial', 'No es necesario pasar horas de viaje para descubrir algunas de las maravillas de Escocia. A pocos minutos de Edimburgo, en la región de Midlothian, encontramos auténticas joyas como la capilla de Rosslyn o la destilería de Glenkinchie. Esta ruta ofrece arte, entretenimiento y misterio a partes iguales y en trayectos cortos.', 1, 150, 'abadia.png', NULL, '2018-06-08 07:19:33'),
(3, 'Héroes y panorámicas', 'El corazón de Escocia se encuentra en su región central, donde el país hunde sus raíces históricas más profundas. Aquí se han librado las contiendas más señaladas en la continua lucha de los escoceses por su independencia. Esta ruta combina las historias y batallas de tres grandes héroes escoceses –William Wallace, Robert the Bruce y Rob Roy- con algunos de los mejores paisajes de la zona, frontera natural entre las Lowlands y las Highlands. ', 1, 175, 'forth.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes_compras`
--
ALTER TABLE `clientes_compras`
  ADD PRIMARY KEY (`idclientes`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`idgalerias`),
  ADD KEY `galerias_id_idrutas_idx` (`idrutas`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idrutas_UNIQUE` (`id`),
  ADD UNIQUE KEY `Nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes_compras`
--
ALTER TABLE `clientes_compras`
  MODIFY `idclientes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `galerias_rutas` FOREIGN KEY (`idrutas`) REFERENCES `rutas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
