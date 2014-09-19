-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.38-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица ktt-soft.tbl_product
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `instock` int(11) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ktt-soft.tbl_product: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` (`id`, `name`, `instock`, `code`, `supplier_id`) VALUES
	(8, 'Test1', 23, 'asd12', 4),
	(9, 'Test2', 34, 'sa123s', 4),
	(10, 'Test3', 12, 'asd23asd', 4),
	(11, 'Test4', 123, 'ert3134', 1),
	(12, 'Test5', 67, 'qwe234', 2),
	(13, 'Test6', 89, 'qwe4', 5),
	(14, 'Test7', 45, 'fgh45', 4);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;


-- Дамп структуры для таблица ktt-soft.tbl_supplier
CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ktt-soft.tbl_supplier: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_supplier` DISABLE KEYS */;
INSERT INTO `tbl_supplier` (`id`, `name`) VALUES
	(1, 'test1'),
	(2, 'test2'),
	(3, 'test3'),
	(4, 'test4'),
	(5, 'test5');
/*!40000 ALTER TABLE `tbl_supplier` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
