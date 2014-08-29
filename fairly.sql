SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- 
-- Base de datos: `fairly`
-- 
-- --------------------------------------------------------
-- 
-- Estructura de tabla para la tabla `auth`
-- @TODO This table should be encrypted
-- 
CREATE TABLE IF NOT EXISTS `auth` (
`id` int(12) unsigned NOT NULL AUTO_INCREMENT,
`user_id` int(12) unsigned NOT NULL,
`password` varchar(80) CHARACTER SET utf8 NOT NULL,
`user_hash` varchar(64) COLLATE utf8_bin DEFAULT NULL,
`challenge` text COLLATE utf8_bin NOT NULL,
`answer` text COLLATE utf8_bin NOT NULL,
`last_login` timestamp NULL DEFAULT NULL,
`failed` int(2) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- --------------------------------------------------------
-- 
-- Estructura de tabla para la tabla `url`
-- 
CREATE TABLE IF NOT EXISTS `url` (
`id` int(15) unsigned NOT NULL AUTO_INCREMENT,
`short_url` varchar(128) COLLATE utf8_bin DEFAULT NULL,
`long_url` varchar(1023) COLLATE utf8_bin DEFAULT NULL,
`user_hash` varchar(64) COLLATE utf8_bin DEFAULT NULL,
`visits` int(24) unsigned NOT NULL,
`created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
KEY `short_url` (`short_url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------
-- 
-- Estructura de tabla para la tabla `user`
-- 
CREATE TABLE IF NOT EXISTS `user` (
`id` int(12) unsigned NOT NULL AUTO_INCREMENT,
`username` varchar(64) COLLATE utf8_bin NOT NULL,
`created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
