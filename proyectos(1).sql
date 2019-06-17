-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 04:33:17
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechanac` date NOT NULL,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dptoID` int(10) UNSIGNED DEFAULT NULL,
  `ciudadID` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `cedula`, `nombre`, `email`, `fechanac`, `genero`, `celular`, `dptoID`, `ciudadID`, `created_at`, `updated_at`) VALUES
(1, '1005293576', 'jonathan', 'jcruz2@udi.edu.co', '1994-12-29', 'Femenino', '3134192147', 1, 1, NULL, NULL),
(2, '12452', 'prueba', 'jcruz2@udi.edu.co', '2019-06-04', 'Masculino', '45789', NULL, NULL, '2019-06-16 12:54:15', '2019-06-16 12:54:15'),
(3, '12452', 'prueba', 'jcruz2@udi.edu.co', '2019-06-04', 'Masculino', '45789', NULL, NULL, '2019-06-16 12:56:16', '2019-06-16 12:56:16'),
(4, '1098778328', 'Duvan alberto martinez parra', 'dmartinez2@udi.edu.co', '1995-12-14', 'Femenino', '3152227700', NULL, NULL, '2019-06-17 05:22:47', '2019-06-17 05:22:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autrep`
--

CREATE TABLE `autrep` (
  `id` int(10) UNSIGNED NOT NULL,
  `idRepositorio` int(10) UNSIGNED NOT NULL,
  `idAutor` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autrep`
--

INSERT INTO `autrep` (`id`, `idRepositorio`, `idAutor`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 1, '2019-06-17 00:02:34', '2019-06-17 00:02:34'),
(3, 1, 2, '2019-06-17 00:05:27', '2019-06-17 00:05:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dptoId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `descripcion`, `dptoId`, `created_at`, `updated_at`) VALUES
(1, 'Bucaramanga', 1, '2019-06-15 05:00:00', '2019-06-15 05:00:00'),
(2, 'Florida', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dptos`
--

CREATE TABLE `dptos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dptos`
--

INSERT INTO `dptos` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Santander', '2019-06-15 05:00:00', '2019-06-15 05:00:00'),
(2, 'Cundinamarca', '2019-06-15 05:00:00', '2019-06-15 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Privado', '2019-06-15 05:00:00', '2019-06-15 05:00:00'),
(2, 'Restringido', '2019-06-15 05:00:00', '2019-06-15 05:00:00'),
(3, 'Inactivo', '2019-06-15 05:00:00', '2019-06-15 05:00:00'),
(4, 'Publico', '2019-06-15 05:00:00', '2019-06-15 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keywords`
--

CREATE TABLE `keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `keywords`
--

INSERT INTO `keywords` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'pruebas', '2019-06-15 05:00:00', '2019-06-15 05:00:00');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_06_15_220717_crear_tabla__dptos', 1),
(3, '2019_06_15_220733_crear_tabla_ciudades', 1),
(4, '2019_06_15_220738_crear_tabla__autores', 1),
(5, '2019_06_15_220742_crear_tabla__estados', 1),
(6, '2019_06_15_220747_crear_tabla__tipo_repositorio', 1),
(7, '2019_06_15_220751_crear_tabla__repositorios', 1),
(8, '2019_06_15_220757_crear_tabla__aut_rep', 1),
(9, '2019_06_15_220802_crear_tabla_key_words', 1),
(10, '2019_06_15_220806_crear_tabla__repkey_words', 1),
(11, '2019_06_15_220810_crear_tabla__roles', 1),
(12, '2019_06_15_220815_crear_tabla__users', 1),
(13, '2019_06_15_220859_crear_tabla__publicacion', 1);

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
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `fechaPublicacion` date NOT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idRepositorio` int(10) UNSIGNED NOT NULL,
  `idEstudiante` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `fechaPublicacion`, `observacion`, `idRepositorio`, `idEstudiante`, `created_at`, `updated_at`) VALUES
(1, '2019-06-15', 'ninguna', 1, 2, '2019-06-15 05:00:00', '2019-06-15 05:00:00'),
(2, '2019-06-09', 'tengo sueñito', 1, 2, '2019-06-17 03:05:39', '2019-06-17 03:05:39'),
(4, '2019-06-04', 'asi se ve mejor', 1, 2, '2019-06-17 03:30:09', '2019-06-17 03:36:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repkeywords`
--

CREATE TABLE `repkeywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `idRepositorio` int(10) UNSIGNED NOT NULL,
  `idKeyword` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `repkeywords`
--

INSERT INTO `repkeywords` (`id`, `idRepositorio`, `idKeyword`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repositorios`
--

CREATE TABLE `repositorios` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `resumen` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `proyectimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(10) UNSIGNED NOT NULL,
  `tipoRepositorio` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `repositorios`
--

INSERT INTO `repositorios` (`id`, `titulo`, `fecha`, `resumen`, `abstract`, `proyectimg`, `programa`, `estado`, `tipoRepositorio`, `created_at`, `updated_at`) VALUES
(1, 'repositorio', '2019-06-15', 'posible prueba de proyecto', 'no se que se guarda aqui', '45.png', 'sistemas', 1, 1, '2019-06-15 05:00:00', NULL),
(2, 'posible mejora', '2019-06-16', 'pues no se', 'ajajjajaja', 'posible.png', 'Sistemas', 4, 1, '2019-06-17 01:21:48', '2019-06-17 01:21:48'),
(3, 'subir archivo', '2019-06-02', 'prueba archivo', 'nunca he savido de este campo', 'comandos_inicio - Wiki del GUTL.pdf', 'Sistemas', 1, 1, '2019-06-17 03:59:39', '2019-06-17 03:59:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Estudiante', '2019-06-15 05:00:00', NULL),
(2, 'Coordinador', '2019-06-15 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporepositorio`
--

CREATE TABLE `tiporepositorio` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tiporepositorio`
--

INSERT INTO `tiporepositorio` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Software', '2019-06-15 05:00:00', '2019-06-15 05:00:00'),
(2, 'Articulos', '2019-06-15 05:00:00', '2019-06-15 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `rolID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `estado`, `rolID`, `created_at`, `updated_at`) VALUES
(2, 'jonathan', 'jcruz2@udi.edu.co', '2019-06-15 05:00:00', '12345', '4578', 1, 1, '2019-06-15 05:00:00', NULL),
(3, 'pepito', 'adios@edu', NULL, '$2y$10$Xfx7d1t6EW9H3whBVes1HO6/L9afitvVRKazc8hI3251YVJWQqtb.', NULL, 1, 2, '2019-06-16 09:35:59', '2019-06-17 06:42:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autores_dptoid_foreign` (`dptoID`),
  ADD KEY `autores_ciudadid_foreign` (`ciudadID`);

--
-- Indices de la tabla `autrep`
--
ALTER TABLE `autrep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autrep_idrepositorio_foreign` (`idRepositorio`),
  ADD KEY `autrep_idautor_foreign` (`idAutor`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciudades_dptoid_foreign` (`dptoId`);

--
-- Indices de la tabla `dptos`
--
ALTER TABLE `dptos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publicacion_idrepositorio_foreign` (`idRepositorio`),
  ADD KEY `publicacion_idestudiante_foreign` (`idEstudiante`);

--
-- Indices de la tabla `repkeywords`
--
ALTER TABLE `repkeywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repkeywords_idrepositorio_foreign` (`idRepositorio`),
  ADD KEY `repkeywords_idkeyword_foreign` (`idKeyword`);

--
-- Indices de la tabla `repositorios`
--
ALTER TABLE `repositorios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repositorios_estado_foreign` (`estado`),
  ADD KEY `repositorios_tiporepositorio_foreign` (`tipoRepositorio`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiporepositorio`
--
ALTER TABLE `tiporepositorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_rolid_foreign` (`rolID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `autrep`
--
ALTER TABLE `autrep`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dptos`
--
ALTER TABLE `dptos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `repkeywords`
--
ALTER TABLE `repkeywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `repositorios`
--
ALTER TABLE `repositorios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tiporepositorio`
--
ALTER TABLE `tiporepositorio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autores`
--
ALTER TABLE `autores`
  ADD CONSTRAINT `autores_ciudadid_foreign` FOREIGN KEY (`ciudadID`) REFERENCES `ciudades` (`id`),
  ADD CONSTRAINT `autores_dptoid_foreign` FOREIGN KEY (`dptoID`) REFERENCES `dptos` (`id`);

--
-- Filtros para la tabla `autrep`
--
ALTER TABLE `autrep`
  ADD CONSTRAINT `autrep_idautor_foreign` FOREIGN KEY (`idAutor`) REFERENCES `autores` (`id`),
  ADD CONSTRAINT `autrep_idrepositorio_foreign` FOREIGN KEY (`idRepositorio`) REFERENCES `repositorios` (`id`);

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_dptoid_foreign` FOREIGN KEY (`dptoId`) REFERENCES `dptos` (`id`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_idestudiante_foreign` FOREIGN KEY (`idEstudiante`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `publicacion_idrepositorio_foreign` FOREIGN KEY (`idRepositorio`) REFERENCES `repositorios` (`id`);

--
-- Filtros para la tabla `repkeywords`
--
ALTER TABLE `repkeywords`
  ADD CONSTRAINT `repkeywords_idkeyword_foreign` FOREIGN KEY (`idKeyword`) REFERENCES `keywords` (`id`),
  ADD CONSTRAINT `repkeywords_idrepositorio_foreign` FOREIGN KEY (`idRepositorio`) REFERENCES `repositorios` (`id`);

--
-- Filtros para la tabla `repositorios`
--
ALTER TABLE `repositorios`
  ADD CONSTRAINT `repositorios_estado_foreign` FOREIGN KEY (`estado`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `repositorios_tiporepositorio_foreign` FOREIGN KEY (`tipoRepositorio`) REFERENCES `tiporepositorio` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_rolid_foreign` FOREIGN KEY (`rolID`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
