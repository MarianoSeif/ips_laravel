-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-12-2019 a las 23:37:30
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ips_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_19_194053_first_migration', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `userName`, `name`, `lastName`, `email`, `nationality`) VALUES
(1, 'nash77', 'Wilhelm Williamson DDS', 'Ullrich', 'nicolas.nat@example.net', 'Paraguay'),
(3, 'ggreenholt', 'Prof. Kenton Gorczany', 'Welch', 'lurline.casper@example.net', 'Uruguay'),
(4, 'bluettgen', 'Allie Ruecker', 'Naderasdas', 'rau.travis@example.com', 'Chile'),
(5, 'jonathan37', 'Hildegard Bednar', 'Upton', 'carlie08@example.com', 'Brasil'),
(6, 'bosco.adah', 'Elwyn Veum', 'Jenkins', 'borer.triston@example.org', 'Bolivia'),
(7, 'tschneider', 'Aniyah Gibson', 'Green', 'tiara.gottlieb@example.com', 'Bolivia'),
(8, 'imarquardt', 'Arlene Abshire', 'Conroy', 'giovanny.bode@example.com', 'Argentina'),
(9, 'zbrown', 'Antonietta Pfeffer', 'Hegmann', 'kaelyn79@example.org', 'Bolivia'),
(10, 'haven26', 'Jayde Muller PhD', 'Hartmann', 'fkuhic@example.net', 'Brasil'),
(11, 'mohammad31', 'Prof. Margaret Gulgowski', 'Mosciski', 'harvey.darrick@example.net', 'Chile'),
(12, 'rgoldner', 'Janice Carroll III', 'Turner', 'ahansen@example.com', 'Uruguay'),
(13, 'marks.stacy', 'Dr. Brooke Bogisich DDS', 'Haag', 'koelpin.dejuan@example.com', 'Bolivia'),
(14, 'koss.ed', 'Ms. Fanny Wisozk', 'Streich', 'jeff.pollich@example.org', 'Paraguay'),
(15, 'qweimann', 'Hobart Marks', 'Adams', 'pfadel@example.com', 'Bolivia'),
(16, 'obecker', 'Sylvester Hoeger', 'White', 'annabell21@example.net', 'Argentina'),
(17, 'bflatley', 'Mr. Leif O\'Hara', 'Wisozk', 'lkreiger@example.com', 'Paraguay'),
(18, 'hermann.lauretta', 'Dr. Quinten VonRueden I', 'Effertz', 'schaden.theron@example.com', 'Bolivia'),
(19, 'srolfson', 'Ambrose Conroy', 'Hessel', 'fritsch.collin@example.net', 'Uruguay'),
(20, 'goldner.magnus', 'Eden Aufderhar', 'Hansen', 'emil.reichel@example.net', 'Brasil'),
(21, 'leatha17', 'Izaiah Hermiston', 'Ernser', 'nienow.george@example.com', 'Uruguay'),
(22, 'kemmer.paula', 'Miss Carolina Dare', 'Heller', 'kunze.martine@example.org', 'Bolivia'),
(23, 'batz.kenton', 'Althea Stiedemann', 'Schroeder', 'elisabeth10@example.com', 'Brasil'),
(24, 'obauch', 'Raleigh Ebert', 'Bauch', 'wilfred.leffler@example.org', 'Chile'),
(25, 'devyn04', 'Rey Altenwerth', 'Carter', 'flarson@example.net', 'Argentina'),
(26, 'neha37', 'Estella Kuhic', 'Crooks', 'mitchell.karianne@example.org', 'Uruguay'),
(27, 'alvina.deckow', 'Serena Hamill', 'Jacobson', 'xrosenbaum@example.net', 'Chile'),
(28, 'ehermann', 'Ms. Tiana Daugherty IV', 'O\'Hara', 'leuschke.ellie@example.org', 'Bolivia'),
(29, 'kohler.ansley', 'Lessie Willms IV', 'Langworth', 'stan49@example.com', 'Uruguay'),
(30, 'nia.ruecker', 'Prof. Alicia Wisozk', 'Waters', 'garfield.gleichner@example.org', 'Uruguay'),
(31, 'josh65', 'Adell Ratke', 'Miller', 'alphonso.jerde@example.com', 'Paraguay'),
(32, 'ilueilwitz', 'Chris Zieme', 'Aufderhar', 'aric.wisozk@example.net', 'Bolivia'),
(33, 'estel.hessel', 'Elza Ward I', 'Schmeler', 'samantha35@example.org', 'Paraguay'),
(34, 'roob.dino', 'Bettie Klocko Jr.', 'Gottlieb', 'ikuhlman@example.net', 'Argentina'),
(35, 'ondricka.vicenta', 'Gladys Russel', 'Beier', 'xnader@example.com', 'Uruguay'),
(36, 'jedediah68', 'Dejah Gleichner', 'Barton', 'randall.rowe@example.net', 'Chile'),
(37, 'jean.morissette', 'Ervin Huels I', 'Bernier', 'dylan.schiller@example.org', 'Uruguay'),
(38, 'hmohr', 'Mr. Camden Rodriguez DVM', 'Crist', 'nemmerich@example.com', 'Argentina'),
(39, 'sylvester93', 'Ressie Bernhard', 'Nikolaus', 'ischroeder@example.com', 'Paraguay'),
(40, 'nader.josiah', 'Shannon Barton', 'Murazik', 'dale35@example.org', 'Chile');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`userName`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
