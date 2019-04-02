-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `series`;
CREATE TABLE `series` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `synopsys` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_seasons` int(11) NOT NULL,
  `poster_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `series` (`id`, `name`, `year`, `director`, `synopsys`, `number_of_seasons`, `poster_url`, `created_at`, `updated_at`) VALUES
(1,	'The Shield',	'2002',	'Shawn Ryan',	'Pour rétablir l\'ordre dans les secteurs les plus dangereux de Los Angeles, une brigade de police en arrive à mettre en oeuvre des méthodes plutôt expéditives et inhabituelles. ',	7,	'http://fr.web.img4.acsta.net/medias/nmedia/18/35/64/15/18430100.jpg',	NULL,	NULL),
(2,	'Narcos ',	'2015',	'Carlo Bernard, Chris Brancato, Doug Miro',	'Loin d’un simple biopic de Pablo Escobar, Narcos retrace la lutte acharnée des États-Unis et de la Colombie contre le cartel de la drogue de Medellín, l’organisation la plus lucrative et impitoyable de l’histoire criminelle moderne',	3,	'http://fr.web.img2.acsta.net/f_png/c_216_288/o_logo-netflix-n.png_5_se/pictures/15/07/29/14/33/086520.jpg',	NULL,	NULL),
(3,	'Game of thrones',	'2011',	'David Benioff',	'Sur le continent de Westeros, le roi Robert Baratheon gouverne le Royaume des Sept Couronnes depuis plus de dix-sept ans, à la suite de la rébellion qu\'il a menée contre le « roi fou » Aerys II Targaryen. Jon Arryn, époux de la sœur...',	7,	'https://i.ytimg.com/sh/ow8-ZftRoZelY710tvO45Q/market.jpg',	'2019-04-01 12:54:05',	'2019-04-01 12:54:05');

-- 2019-04-02 00:06:43
