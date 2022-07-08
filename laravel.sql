-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.food
CREATE TABLE IF NOT EXISTS `food` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double(8,2) NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reservacion` tinyint(1) NOT NULL,
  `imagen` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.food: ~12 rows (aproximadamente)
DELETE FROM `food`;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` (`id`, `nombre`, `costo`, `descripcion`, `reservacion`, `imagen`, `created_at`, `updated_at`) VALUES
	(1, 'Orden de barbacoa de res', 120.00, 'Al horno de tierra', 1, '/img/Barbacoa.jpg', NULL, NULL),
	(2, 'Orden de barbacoa de borrego', 150.00, 'Al horno de tierra', 1, '/img/Barbacoa_borrego.jpg', NULL, NULL),
	(3, 'Orden de carnitas', 100.00, 'Al horno de tierra', 1, '/img/Carnitas.jpg', NULL, NULL),
	(4, 'Pizza', 240.00, 'De pepperoni o hawaina', 1, '/img/Pizza.jpg', NULL, NULL),
	(5, 'Gordas de horno salada', 20.00, 'De guisos variados', 1, '/img/Platillo_2.jpg', NULL, NULL),
	(6, 'Gordas de horno dulce', 20.00, 'Con piloncillo', 1, '/img/GorditasAzucar.jpg', NULL, NULL),
	(7, 'Atole de arroz', 20.00, 'Con canela y pasas', 1, '/img/atoleArroz.jpg', NULL, NULL),
	(8, 'Gorditas', 15.00, 'De guisos variados', 0, '/img/GorditasComal.jpg', NULL, NULL),
	(9, 'Sopes sencillos', 15.00, 'Con queso y crema', 0, '/img/Sopes.jpg', NULL, NULL),
	(10, 'Quesadilla sencilla', 35.00, 'De guisos variados', 0, '/img/Quesadillas.jpeg', NULL, NULL),
	(11, 'Quesadilla de arrachera', 45.00, 'Con cebolla y salsa', 0, '/img/Q_arrachera.jpg', NULL, NULL),
	(12, 'Menudo', 80.00, 'Acompañado de tortillas hechas a mano', 0, '/img/Menudo.jpeg', NULL, NULL);
/*!40000 ALTER TABLE `food` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.food_list
CREATE TABLE IF NOT EXISTS `food_list` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_reservation` bigint(20) unsigned NOT NULL,
  `comida` bigint(20) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `food_list_id_reservation_foreign` (`id_reservation`),
  KEY `food_list_comida_foreign` (`comida`),
  CONSTRAINT `food_list_comida_foreign` FOREIGN KEY (`comida`) REFERENCES `food` (`id`),
  CONSTRAINT `food_list_id_reservation_foreign` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.food_list: ~0 rows (aproximadamente)
DELETE FROM `food_list`;
/*!40000 ALTER TABLE `food_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_list` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.hours
CREATE TABLE IF NOT EXISTS `hours` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` bigint(20) unsigned NOT NULL,
  `hora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` date NOT NULL,
  `seleccionado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hours_service_id_foreign` (`service_id`),
  CONSTRAINT `hours_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.hours: ~0 rows (aproximadamente)
DELETE FROM `hours`;
/*!40000 ALTER TABLE `hours` DISABLE KEYS */;
/*!40000 ALTER TABLE `hours` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `imagen` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `estacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.images: ~14 rows (aproximadamente)
DELETE FROM `images`;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `imagen`, `estacion`, `created_at`, `updated_at`) VALUES
	(1, '/img/platillo_pizza.jpg', 'primavera', NULL, NULL),
	(2, '/img/Creacion.jpg', 'verano', NULL, NULL),
	(3, '/img/mesa_decorada.jpg', 'invierno', NULL, NULL),
	(4, '/img/Columpios.jpg', 'otono', NULL, NULL),
	(5, '/img/pizza_completa.jpg', 'verano', NULL, NULL),
	(6, '/img/vista_nave.jpg', 'otono', NULL, NULL),
	(7, '/img/pan_dulce.jpg', 'invierno', NULL, NULL),
	(8, '/img/huertos-verano.jpeg', 'verano', NULL, NULL),
	(9, '/img/cruz-verano.jpeg', 'verano', NULL, NULL),
	(10, '/img/maiz-verano.jpeg', 'verano', NULL, NULL),
	(11, '/img/Regando.jpg', 'primavera', NULL, NULL),
	(12, '/img/arcoirirs_2.jpg', 'primavera', NULL, NULL),
	(13, '/img/arboles-verano.jpeg', 'verano', NULL, NULL),
	(14, '/img/Huertos_6.jpg', 'primavera', NULL, NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.migrations: ~10 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_09_27_211452_create_food_table', 1),
	(5, '2021_09_29_024045_create_services_table', 1),
	(6, '2021_10_18_211407_create_reservation_table', 1),
	(7, '2021_11_18_170141_create_hours_table', 1),
	(8, '2021_11_29_160837_create_food_list_table', 1),
	(9, '2021_11_29_180850_create_services_list_table', 1),
	(10, '2022_01_31_232746_create_images_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.reservation
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personas` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `total` bigint(20) NOT NULL,
  `pago` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.reservation: ~0 rows (aproximadamente)
DELETE FROM `reservation`;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double(8,2) NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `reservacion` tinyint(1) NOT NULL,
  `imagen` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.services: ~7 rows (aproximadamente)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `nombre`, `costo`, `descripcion`, `reservacion`, `imagen`, `created_at`, `updated_at`) VALUES
	(1, 'Paseo a caballo', 200.00, 'Precio por hora', 1, '/img/Caballo.jpg', NULL, NULL),
	(2, 'Renta de cuatrimoto', 120.00, 'Precio por hora', 1, '/img/cuatrimoto.jpeg', NULL, NULL),
	(3, 'Renta de bicicleta', 50.00, 'Precio por hora', 1, '/img/Bicicleta.jpg', NULL, NULL),
	(4, 'Caminata guiada (2km, 4km, y 5km)', 20.00, 'Por persona en grupos minimo de 10 (Gratis sin guía)', 1, '/img/Caminata.jpg', NULL, NULL),
	(5, 'Espacio para acampar', 150.00, 'Por noche y por tienda de campaña. Casa de campaña propia', 1, '/img/zona_acampar.jpeg', NULL, NULL),
	(6, 'Espacio para eventos', 3000.00, 'Por jornada de 10 horas. Incluye cocina, espacio techado con mobiliario rústico para 80 personas, baños secos, agua y vigilancia', 1, '/img/mesas.jpg', NULL, NULL),
	(7, 'Leña para fogata', 10.00, 'Por kilo', 1, '/img/Lena_1.jpg', NULL, NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.services_list
CREATE TABLE IF NOT EXISTS `services_list` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_reservation` bigint(20) unsigned NOT NULL,
  `servicio` bigint(20) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_horario` bigint(20) DEFAULT NULL,
  `horario` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_list_id_reservation_foreign` (`id_reservation`),
  KEY `services_list_servicio_foreign` (`servicio`),
  CONSTRAINT `services_list_id_reservation_foreign` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`),
  CONSTRAINT `services_list_servicio_foreign` FOREIGN KEY (`servicio`) REFERENCES `services` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.services_list: ~0 rows (aproximadamente)
DELETE FROM `services_list`;
/*!40000 ALTER TABLE `services_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `services_list` ENABLE KEYS */;

-- Volcando estructura para tabla laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel.users: ~1 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'ecoturismodenaturaleza@gmail.com', NULL, '$2y$10$NxB9Cbpgkj.RPvwpB2IWSeeLWUPlKvsadwvp/ggSfrHi1N5yoKRIm', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
