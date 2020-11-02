-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Ноя 02 2020 г., 14:06
-- Версия сервера: 5.7.28
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud_book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `surname`, `author_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Губайдуллин', 'Кирилл', 'test@mail.ru', '2020-10-31 15:56:41', '2020-11-01 18:05:18'),
(2, 'Петров', 'Вася', 'petrov@mail.ru', '2020-10-31 16:04:55', '2020-10-31 16:04:55'),
(3, 'Степанов', 'Андрей', 'andty@mail.ru', '2020-10-31 16:05:53', '2020-10-31 16:05:53'),
(6, 'Константинова', 'Екатерина', 'katya@library.ru', '2020-10-31 17:33:00', '2020-10-31 17:33:00');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authors_id` int(255) NOT NULL,
  `pages_count` bigint(20) NOT NULL,
  `charter_count` bigint(20) NOT NULL,
  `publish_date` bigint(20) NOT NULL,
  `city_publish_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dectiption_book` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `authors_id`, `pages_count`, `charter_count`, `publish_date`, `city_publish_date`, `dectiption_book`, `created_at`, `updated_at`) VALUES
(1, 'Симон', 1, 300, 4, 2006, 'Москва', 'В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.', '2020-10-31 18:23:23', '2020-11-01 16:25:32'),
(2, 'Хитрая лиса', 1, 255, 1, 2001, 'Казань', 'В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.', '2020-10-31 18:24:15', '2020-11-01 14:33:11'),
(3, 'Колобок', 2, 52, 3, 2019, 'Рязань', 'В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.', '2020-11-01 13:55:54', '2020-11-01 13:55:54'),
(5, 'Пельменная деревня', 1, 255, 4, 2001, 'Москва', 'В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.', '2020-11-02 10:56:45', '2020-11-02 10:56:45'),
(7, 'Куриная голова', 6, 261, 5, 2005, 'Москва', 'В маленьком армянском городке умирает каменщик Симон. Он прожил долгую жизнь, пользовался уважением горожан, но при этом был известен бесчисленными амурными похождениями. Чтобы проводить его в последний путь, в доме Симона собираются все женщины, которых он когда?то любил. И у каждой из них — своя история.', '2020-11-02 10:59:15', '2020-11-02 10:59:15');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_31_180848_create_books_table', 1),
(2, '2020_10_31_184536_create_authors_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
