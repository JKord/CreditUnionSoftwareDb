# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.15
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2012-03-31 22:44:47
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping structure for table creditunions.creditunions
CREATE TABLE IF NOT EXISTS `creditunions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `EDRPOU` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

# Dumping data for table creditunions.creditunions: ~5 rows (approximately)
/*!40000 ALTER TABLE `creditunions` DISABLE KEYS */;
INSERT INTO `creditunions` (`id`, `name`, `EDRPOU`) VALUES
	(1, 'Народний капітал', 4568423),
	(2, 'Добрі гроші', 3564268),
	(3, 'Копілка', 3264856),
	(4, 'Банк', 7856423),
	(5, 'вава', 5345);
/*!40000 ALTER TABLE `creditunions` ENABLE KEYS */;


# Dumping structure for table creditunions.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `seriesOfPassport` varchar(255) NOT NULL,
  `numberOfPassport` int(11) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `cityOfResidence` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

# Dumping data for table creditunions.customers: ~11 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `lastName`, `name`, `middleName`, `seriesOfPassport`, `numberOfPassport`, `dateOfBirth`, `cityOfResidence`, `address`, `phoneNumber`) VALUES
	(1, 'Федорчук', 'Іван', 'Васильович', 'PR', 620148, '1975-10-10', 'Золочів', 'Садова 10', '46-75-35'),
	(2, 'Клочко', 'Олена', 'Броніславівна', 'BN', 875421, '1986-05-31', 'Харків', 'Шевченко 154', '32-46-75'),
	(3, 'Смоляк', 'Петро', 'Генадійович', 'BF', 554897, '1921-11-13', 'Черкаси', 'Гагаріна 63', '76-35-45'),
	(4, 'Куліченко', 'Володимир', 'Миколайович', 'HC', 240157, '1982-03-24', 'Київ', 'Хрешатик 201', '54-63-45'),
	(5, 'Таран', 'Сергій', 'Пилипович', 'BF', 648435, '1975-07-31', 'Черкаси', 'Смілянська 23', '36-05-84'),
	(6, 'Сметанко', 'Надія', 'Іванівна', 'BF', 435720, '1992-04-15', 'Черкаси', 'Кірова 45', '72-35-45'),
	(7, 'Жук', 'Леонід', 'Олексійович', 'HC', 238466, '1988-08-04', 'Умань', 'Галана 32', '34-58-50'),
	(8, 'Руденко', 'Наталія', 'Микитівна', 'TR', 654832, '1985-04-16', 'Київ', 'Хрещатик 104', '46-54-35'),
	(9, 'Куроченко', 'Юлія', 'Сергіївна', 'HC', 765432, '1990-12-05', 'Одеса', 'Нібелунга 10', '44-55-22'),
	(10, 'Ванцовський', 'Вахтанг', 'Анатолійович', 'BN', 345846, '1235-10-10', 'Черкаси', 'Сталінграда 6', '67-54-60'),
	(11, 'Пацинюк', 'Гнат', 'Левіч', 'BF', 45646, '1945-05-24', 'Худяки', 'Світлова 15', '32-45-63');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;


# Dumping structure for table creditunions.depositsandloans
CREATE TABLE IF NOT EXISTS `depositsandloans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `workerID` int(11) NOT NULL,
  `priceID` int(11) NOT NULL,
  `sum` double unsigned NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_depositsandloans_сustomers` (`customerID`),
  KEY `FK_depositsandloans_worker` (`workerID`),
  KEY `FK_depositsandloans_pricelist` (`priceID`),
  CONSTRAINT `FK_depositsandloans_pricelist` FOREIGN KEY (`priceID`) REFERENCES `pricelist` (`id`),
  CONSTRAINT `FK_depositsandloans_customers` FOREIGN KEY (`customerID`) REFERENCES `customers` (`id`),
  CONSTRAINT `FK_depositsandloans_worker` FOREIGN KEY (`workerID`) REFERENCES `worker` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

# Dumping data for table creditunions.depositsandloans: ~10 rows (approximately)
/*!40000 ALTER TABLE `depositsandloans` DISABLE KEYS */;
INSERT INTO `depositsandloans` (`id`, `customerID`, `workerID`, `priceID`, `sum`, `date`) VALUES
	(1, 1, 5, 3, 10000, '2010-05-10'),
	(2, 2, 3, 5, 20000, '2011-05-05'),
	(3, 9, 1, 2, 500000, '2011-10-20'),
	(4, 10, 2, 2, 54000, '2010-10-02'),
	(5, 7, 4, 6, 30400, '2010-10-04'),
	(6, 3, 3, 7, 803700, '2011-02-14'),
	(7, 4, 2, 1, 44700, '2011-11-10'),
	(8, 5, 4, 4, 10000, '2011-05-20'),
	(9, 6, 3, 3, 225880, '2011-10-19'),
	(10, 8, 5, 3, 900754, '2011-10-17');
/*!40000 ALTER TABLE `depositsandloans` ENABLE KEYS */;


# Dumping structure for table creditunions.pricelist
CREATE TABLE IF NOT EXISTS `pricelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creditUnionID` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `nterestRate` double NOT NULL,
  `forTheDate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pricelist_creditunions` (`creditUnionID`),
  CONSTRAINT `FK_pricelist_creditunions` FOREIGN KEY (`creditUnionID`) REFERENCES `creditunions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

# Dumping data for table creditunions.pricelist: ~9 rows (approximately)
/*!40000 ALTER TABLE `pricelist` DISABLE KEYS */;
INSERT INTO `pricelist` (`id`, `creditUnionID`, `type`, `nterestRate`, `forTheDate`) VALUES
	(1, 4, 'Вклад', 0.05, 10),
	(2, 3, 'Вклад', 0.02, 5),
	(3, 1, 'Вклад', 0.1, 20),
	(4, 3, 'Кредит', 0.01, 7),
	(5, 1, 'Кредит', 0.02, 15),
	(6, 2, 'Кредит', 0.05, 25),
	(7, 2, 'Вклад', 0.15, 30),
	(8, 4, 'Вклад', 0.2, 45),
	(12, 4, '5', 3, 4);
/*!40000 ALTER TABLE `pricelist` ENABLE KEYS */;


# Dumping structure for table creditunions.worker
CREATE TABLE IF NOT EXISTS `worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

# Dumping data for table creditunions.worker: ~5 rows (approximately)
/*!40000 ALTER TABLE `worker` DISABLE KEYS */;
INSERT INTO `worker` (`id`, `lastName`, `name`, `middleName`, `specialty`) VALUES
	(1, 'Фінько', 'Ігор', 'Генадіївна', 'Директор'),
	(2, 'Федоренко', 'Юлія', 'Микитівна', 'Менеджер'),
	(3, 'Тредін', 'Віктор', 'Анатолійович', 'Ресепшн'),
	(4, 'Ляпіна', 'Надія', 'Іванівна', 'Працівник'),
	(5, 'Співак', 'Леонід', 'Олексійович', 'Працівник');
/*!40000 ALTER TABLE `worker` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
