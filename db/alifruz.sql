-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2021 г., 16:53
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `alifruz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `freights`
--

CREATE TABLE `freights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2021_02_08_173511_create_provides_table', 1),
(20, '2021_02_08_173613_create_teams_table', 1),
(21, '2021_02_08_173658_create_news_table', 1),
(22, '2021_02_08_173724_create_freights_table', 1),
(23, '2021_02_08_173749_create_services_table', 1),
(24, '2021_02_08_173854_create_prices_table', 1),
(27, '2021_02_10_112807_create_subscriptions_table', 2),
(28, '2021_02_11_174435_make_password_nullable_to_users', 3),
(31, '2021_02_11_190852_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `image`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Flexible shipping are increasing day by day gradually.', 'flexible-shipping-are-increasing-day-by-day-gradually', '86CmGcliHm.jpg', '<p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '<p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '2021-02-10 00:20:10', '2021-02-10 00:20:10'),
(2, 'Big warehouse are most friendly for new shipping', 'big-warehouse-are-most-friendly-for-new-shipping', 'gV3GY2OLTg.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '2021-02-10 00:20:49', '2021-02-10 00:20:49'),
(3, 'Keep your product in storage for long time', 'keep-your-product-in-storage-for-long-time', 'JDwgPT37J6.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '2021-02-10 00:21:16', '2021-02-10 00:21:16');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `title`, `price`, `deadline`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Starter', '19', 'month', '<p>5GB Linux Web Space</p>\r\n\r\n<p>5 MySQL Databases</p>\r\n\r\n<p>Unlimited Email</p>\r\n\r\n<p>250Gb mo Transfer</p>\r\n\r\n<p>24/7 Tech Support</p>\r\n\r\n<p>Daily Backups</p>', '2021-02-10 02:34:46', '2021-02-10 02:43:52'),
(2, 'Basic', '29', 'week', '<p>5GB Linux Web Space</p>\r\n\r\n<p>5 MySQL Databases</p>\r\n\r\n<p>Unlimited Email</p>\r\n\r\n<p>250Gb mo Transfer</p>\r\n\r\n<p>24/7 Tech Support</p>\r\n\r\n<p>Daily Backups</p>', '2021-02-10 02:35:34', '2021-02-10 02:42:09'),
(3, 'Professional', '49', 'year', '<p>25GB Linux Web Space</p>\r\n\r\n<p>25 MySQL Databases</p>\r\n\r\n<p>Unlimited Email</p>\r\n\r\n<p>2000Gb mo Transfer</p>\r\n\r\n<p>24/7 Tech Support</p>\r\n\r\n<p>Daily Backups</p>', '2021-02-10 02:35:59', '2021-02-10 02:44:01');

-- --------------------------------------------------------

--
-- Структура таблицы `provides`
--

CREATE TABLE `provides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `provides`
--

INSERT INTO `provides` (`id`, `title`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AIR FREIGHT', 'tspO9taplA.png', '<p>We offers a host of logistic management services and supply chain solutions.</p>', '2021-02-10 00:10:05', '2021-02-10 00:10:06'),
(2, 'ROAD FREIGHT', 'JLWLxJyf8V.png', '<p>We offers a host of logistic management services and supply chain solutions.</p>', '2021-02-10 00:10:36', '2021-02-10 00:10:37'),
(3, 'WARHOUSING', 'QMfGkhNnOK.png', '<p>We offers a host of logistic management services and supply chain solutions.</p>', '2021-02-10 00:11:08', '2021-02-10 00:11:08'),
(4, 'OCEAN FREIGHT', '1VauiRHwXi.png', '<p>We offers a host of logistic management services and supply chain solutions.</p>', '2021-02-10 00:11:52', '2021-02-10 00:11:53'),
(5, 'LOGISTIC FREIGHT', 'SgtOxXfDfC.png', '<p>We offers a host of logistic management services and supply chain solutions.</p>', '2021-02-10 00:12:21', '2021-02-10 00:12:22'),
(6, 'TRAIN FREIGHT', 'ii9dtlDyoC.png', '<p>We offers a host of logistic management services and supply chain solutions.</p>', '2021-02-10 00:12:49', '2021-02-10 00:12:49');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `image`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'AIR FREIGHT', 'air-freight', 'mXCt3vxlSJ.jpg', '<p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>', '<h2>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport &amp; logistics services.</h2>\r\n\r\n<ul>\r\n	<li>We provide innovative solutions with the best</li>\r\n	<li>We offer our clients support in destination marketing</li>\r\n	<li>promoting unique story each destination</li>\r\n	<li>Strong partnerships with international agencies</li>\r\n</ul>', '2021-02-10 01:05:17', '2021-02-10 05:20:07'),
(2, 'ROAD FREIGHT', 'road-freight', '9yvBurd7aq.jpg', '<p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>', '<h2>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport &amp; logistics services.</h2>\r\n\r\n<ul>\r\n	<li>We provide innovative solutions with the best</li>\r\n	<li>We offer our clients support in destination marketing</li>\r\n	<li>promoting unique story each destination</li>\r\n	<li>Strong partnerships with international agencies</li>\r\n</ul>', '2021-02-10 01:06:44', '2021-02-10 05:20:17'),
(3, 'OCEAN FREIGHT', 'ocean-freight', 'mvKutHaeSD.jpg', '<p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>', '<h2>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport &amp; logistics services.</h2>\r\n\r\n<ul>\r\n	<li>We provide innovative solutions with the best</li>\r\n	<li>We offer our clients support in destination marketing</li>\r\n	<li>promoting unique story each destination</li>\r\n	<li>Strong partnerships with international agencies</li>\r\n</ul>', '2021-02-10 01:07:24', '2021-02-10 05:20:29'),
(4, 'WAREHOUSING', 'warehousing', 'VRHixErFtv.jpg', '<p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>', '<p>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport &amp; logistics services.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>We provide innovative solutions with the best</p>\r\n	</li>\r\n	<li>\r\n	<p>We offer our clients support in destination marketing</p>\r\n	</li>\r\n	<li>\r\n	<p>promoting unique story each destination</p>\r\n	</li>\r\n	<li>\r\n	<p>Strong partnerships with international agencies</p>\r\n	</li>\r\n</ul>', '2021-02-10 01:07:52', '2021-02-10 05:23:06'),
(5, 'STORAGE', 'storage', 'MOQ4YT9EEa.jpg', '<p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>', '<h3>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport &amp; logistics services.</h3>\r\n\r\n<ul>\r\n	<li>We provide innovative solutions with the best</li>\r\n	<li>We offer our clients support in destination marketing</li>\r\n	<li>promoting unique story each destination</li>\r\n	<li>Strong partnerships with international agencies</li>\r\n</ul>', '2021-02-10 01:08:20', '2021-02-10 05:20:39'),
(6, 'PACKAGING', 'packaging', 'd98ipepZOG.jpg', '<p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>', '<h3>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport &amp; logistics services.</h3>\r\n\r\n<ul>\r\n	<li>We provide innovative solutions with the best</li>\r\n	<li>We offer our clients support in destination marketing</li>\r\n	<li>promoting unique story each destination</li>\r\n	<li>Strong partnerships with international agencies</li>\r\n</ul>', '2021-02-10 01:08:48', '2021-02-10 05:20:57');

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provide_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `email`, `provide_id`, `phone`, `created_at`, `updated_at`) VALUES
(7, 'john', 'john@gmail.com', '2', '+54464458', '2021-02-11 15:53:19', '2021-02-11 15:53:20'),
(8, 'tom', 'tomko@mail.com', '4', '545446545', '2021-02-11 16:01:32', '2021-02-11 16:01:33'),
(10, 'hey', 'hey@gmail.com', '4', '54554', '2021-02-12 11:40:44', '2021-02-12 11:40:45');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`, `avatar`, `position`, `text`, `created_at`, `updated_at`) VALUES
(1, 'MARIA ALEN', 'aXArwd0BRU.jpg', 'Director, art media', '<p>They provide innovative solutions with the best. tempor incididunt utla bore et dolor tempor incididunt .</p>', '2021-02-10 00:16:33', '2021-02-10 00:16:33'),
(2, 'Jonathon doe', 'ZR38gXFD2C.jpg', 'Director, art media', '<p>They provide innovative solutions with the best. tempor incididunt utla bore et dolor tempor incididunt .</p>', '2021-02-10 00:17:38', '2021-02-10 00:17:38');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'alifruz', 'test@test.com', NULL, '$2y$10$0gZ3g6vy8vIxPwNhDHn6meMop0IATNLi8o.oK5hx.cdg12Tu3sXvS', NULL, '2021-02-11 13:45:55', '2021-02-11 13:51:49');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `freights`
--
ALTER TABLE `freights`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `provides`
--
ALTER TABLE `provides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `freights`
--
ALTER TABLE `freights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `provides`
--
ALTER TABLE `provides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
