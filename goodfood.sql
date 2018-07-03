-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2018 at 08:52 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `pass` varchar(6) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nume`, `pass`) VALUES
(1, 'ana', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

DROP TABLE IF EXISTS `categ`;
CREATE TABLE IF NOT EXISTS `categ` (
  `id_categ` int(4) NOT NULL AUTO_INCREMENT,
  `categ` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categ`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`id_categ`, `categ`) VALUES
(1, 'ciorbe'),
(2, 'supe'),
(3, 'prep_carne_vita'),
(4, 'prep_carne_porc'),
(5, 'prep_care_pui'),
(6, 'paste'),
(7, 'salate'),
(8, 'garnituri'),
(9, 'sosuri'),
(10, 'desert'),
(11, 'bauturi_nealcoolice'),
(12, 'bauturi_alcoolice');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Loredana Toma', 'tomaloredana@gmail.com', '0746323991', 'Strada Iosiv Sava nr. 34. Cluj-napoca'),
(2, 'Manole Ana', 'ana_manole@gmail.com', '0742545878', 'Strada Lalelor nr.4. Cluj-Napoca'),
(3, 'Ana', 'ana@gmail.com', '123456', 'strada frunzelor nr 5'),
(8, 'aaa', '', '', ''),
(9, '', 'toma@hhh', '0745455444', 'gggg'),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', 'gggggg', '55555', ''),
(13, '', 'ggg', '444', ''),
(14, 'xxxx', 'xxx', 'xxx', 'xxx'),
(15, 'hhh', 'hhh', '555', ''),
(16, 'aaa', 'aaa', '123', ''),
(17, 'aaa', 'aaa', '123', ''),
(18, 'aaa', 'aaa', '123', ''),
(19, 'jjj', 'jjjj', '2121', ''),
(20, 'xxx', 'xxx', '111', ''),
(21, 'stefan', 'stefan@gmail.com', '0741222555', ''),
(22, 'lore', 'dddd', '3333', 'dddd'),
(23, 'gggg', 'gggg', '1111', 'dddd'),
(24, 'Alina Sorescu', 'alina_sorescu@gmail.com', '0746232585', 'strada Narciselor nr 5.bl 4. ap 105'),
(25, 'Alina Sorescu', 'alina_sorescu@gmail.com', '', 'strada Narciselor nr 5.bl 4. ap 105'),
(26, '', '', '', ''),
(27, 'ff', 'fffff', '333', 'fff'),
(28, 'Toma Loredana', 'tomaloredana@gmail.com', '0745252525', 'strada Narciselor nr 5.bl 4. ap 105'),
(29, 'ana', 'gdfgdf', '555555', '1jhggf'),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, 'ggdfdfgdfgf', '', '', ''),
(33, 'ggdfdfgdfgf', '', '', ''),
(34, '', '', '', ''),
(35, 'ggdfdfgdfgf', '', '', ''),
(36, 'ggdfdfgdfgf', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', 'ffff', '', ''),
(48, '', 'ggg', '', ''),
(49, '', 'ggg', '', ''),
(50, '', '', '', ''),
(51, 'Loredana', 'tomaloredana@gmail.com', '0745222555', 'strada iosiv Mecu.nr78.'),
(52, 'ggg', 'fffff', '0475124577', ''),
(53, 'Ana', 'anatoma@gmail.com', '0745123123', ''),
(54, '', 'fff', 'ffd', ''),
(55, '', 'ghgf', 'gfhfh', ''),
(56, '', 'ghgf', 'gfhfh', ''),
(57, '', 'gfgfg', 'gfgfgggffggf', ''),
(58, '', 'gfgfg', 'ffddfdgfhfghf', ''),
(59, '', 'gfgfg', 'ffffff', ''),
(60, '', 'ggggggggg', 'ffffff', ''),
(61, '', 'ggggggggg', 'ffffff', ''),
(62, '', 'ggggggggg', 'ffffff', ''),
(63, 'fff', 'fffffrffff', '33fddfgdfgdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `nr` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `data` timestamp NOT NULL,
  `email` varchar(50) NOT NULL,
  `mesaj` varchar(500) NOT NULL,
  PRIMARY KEY (`nr`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`nr`, `nume`, `prenume`, `data`, `email`, `mesaj`) VALUES
(7, 'Caianu', 'Vlad', '2018-07-03 06:36:54', 'vladut_caianu@yahoo.com', 'Imi pare rau sa va anunt ca ultima oara nu am fost incantata de faptul ca mancarea a ajuns cu intarziere la destinatie, acest lucru bineinteles ca nu ne-a multumit, mancarea a ajuns rece. va rog sa luati in considerare faptul ca daca se mai intampla voi renunta la serviciile dvs.'),
(4, 'Irimescu', 'Alina', '2018-07-03 06:17:47', 'alina@gmail.com', 'Sunteti minunati.Aveti o mancare foarte buna.'),
(5, 'Rosu', 'Iulian', '2018-07-03 06:33:27', 'rosu@iulian@gmail.com', 'As dori sa-mi fac un abonament la dumneavoastra daca s-ar putea pe perioada verii. Aveti  o mancare foarte buna.'),
(6, 'Toma', 'Loredana', '2018-07-03 06:34:28', 'tomaloredana@gmil.com', 'As vrea sa va felicit pentru preparatele delicioase si sa va urez succes in continuare!');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(19, 3, 15.00, '2018-07-02 07:41:06', '2018-07-02 07:41:06', '1'),
(20, 3, 30.00, '2018-07-02 07:58:55', '2018-07-02 07:58:55', '1'),
(21, 20, 12.00, '2018-07-02 09:03:45', '2018-07-02 09:03:45', '1'),
(22, 21, 15.00, '2018-07-02 09:13:30', '2018-07-02 09:13:30', '1'),
(23, 22, 15.00, '2018-07-02 10:35:07', '2018-07-02 10:35:07', '1'),
(24, 22, 30.00, '2018-07-02 11:23:42', '2018-07-02 11:23:42', '1'),
(25, 23, 12.00, '2018-07-02 11:31:36', '2018-07-02 11:31:36', '1'),
(26, 27, 12.00, '2018-07-02 11:36:27', '2018-07-02 11:36:27', '1'),
(27, 28, 23.00, '2018-07-02 14:16:24', '2018-07-02 14:16:24', '1'),
(28, 51, 55.00, '2018-07-02 17:53:42', '2018-07-02 17:53:42', '1'),
(29, 52, 14.00, '2018-07-03 08:59:22', '2018-07-03 08:59:22', '1'),
(30, 53, 15.00, '2018-07-03 09:44:43', '2018-07-03 09:44:43', '1'),
(31, 63, 23.00, '2018-07-03 11:50:43', '2018-07-03 11:50:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(25, 19, 4, 1),
(26, 20, 4, 2),
(27, 21, 3, 1),
(28, 22, 4, 1),
(29, 23, 4, 1),
(30, 24, 4, 2),
(31, 25, 3, 1),
(32, 26, 3, 1),
(33, 27, 11, 1),
(34, 27, 64, 1),
(35, 28, 24, 1),
(36, 29, 20, 1),
(37, 30, 19, 1),
(38, 31, 79, 1),
(39, 31, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categ` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_categ`, `img`, `name`, `description`, `price`) VALUES
(4, 1, '2.jpg', 'Ciorba de potroace', 'Din maruntae de vita si porc', 15.00),
(11, 1, 'img11.jpg', 'Ciorba de burta', 'Din burta prefiarta', 17.00),
(12, 1, 'img12.jpg', 'Ciorba de afumatura', 'Afumatura este din carne de porc', 22.00),
(13, 1, 'img13.jpg', 'Ciorba de fasole', 'Ciorbica de fasole boabe', 18.00),
(14, 1, 'img14.jpg', 'Ciorba de pui a la grec', 'Ciorbica acra cu smantana', 17.00),
(15, 2, 'img15.jpg', 'Supa de brocoli', 'Supica crema delicioasa', 20.00),
(16, 2, 'img16.png', 'Supa de ciuperci', 'Supa crema ciuperci champignon', 22.00),
(17, 2, 'img17.jpg', 'Supa dovleac', 'Supa pasata din dovlecel', 15.00),
(18, 2, 'img18.jpg', 'Supa galuste', 'Supica din supa de pui', 17.00),
(19, 2, 'img19.jpg', 'Supe rosii', 'Supa din rosii proaspete', 15.00),
(20, 2, 'img20.jpg', 'Supa taitei', 'Supica din taitei \"home made\"', 14.00),
(21, 3, 'img21.jpg', 'Vita cu sos de piper verde', '', 45.00),
(22, 3, 'img22.jpg', 'Vita cu sos de ansoa', '', 55.00),
(23, 3, 'img23.jpg', 'Vita la cuptor', '', 48.00),
(24, 3, 'img24.jpg', 'Vita marinata', '', 55.00),
(25, 3, 'img25.jpg', 'Vita cu sos de ciuperci', '', 56.00),
(26, 3, 'img26.jpg', 'Vita caramelizata', '', 50.00),
(27, 4, 'img27.jpg', 'Costite afumate', '', 35.00),
(28, 4, 'img28.jpg', 'Chiftele moldovenesti', '', 32.00),
(29, 4, 'img29.jpg', 'Porc dulce acrisor', '', 40.00),
(30, 4, 'img30.jpg', 'Cotlet de porc cu cartofi natur', '', 35.00),
(31, 4, 'img31.jpg', 'Mititei', '', 15.00),
(32, 4, 'img32.jpg', 'Ceafa de porc la gratar', '', 35.00),
(33, 5, 'img33.jpg', 'Tocanita de pui', '', 28.00),
(34, 5, 'img34.jpg', 'Piept de pui la gratar', '', 27.00),
(35, 5, 'img35.jpg', 'Snitel de pui', '', 20.00),
(36, 5, 'img36.jpg', 'Ciulama', '', 35.00),
(37, 5, 'img37.jpg', 'Cordon bleu', '', 26.00),
(38, 5, 'img38.jpg', 'Aripioare picante', '', 37.00),
(39, 6, 'img39.jpg', 'Paste cu rosii', '', 28.00),
(40, 6, 'img40.jpg', 'Paste cu ulei de masline si usturoi', '', 25.00),
(41, 6, 'img41.jpg', 'Paste cu fructe de mare', '', 40.00),
(42, 6, 'img42.jpg', 'Paste bolognese', '', 30.00),
(43, 6, 'img43.jpg', 'Paste carbonara', '', 35.00),
(44, 6, 'img44.jpg', 'Paste cu sos pesto', '', 25.00),
(45, 8, 'img45.jpg', 'cartofi prajiti', '', 5.00),
(46, 8, 'img46.JPG', 'Cartofi aurii', '', 7.00),
(47, 8, 'img47.jpg', 'Legume la gratar', '', 10.00),
(48, 8, 'img48.jpg', 'Orez alb', '', 8.00),
(49, 8, 'img49.jpg', 'Piure de cartofi', '', 7.00),
(50, 8, 'img50.jpg', 'Brocoli', '', 12.00),
(51, 8, 'img51.jpg', 'Baby morcovi sote', '', 15.00),
(52, 7, 'img52.jpg', 'Salata cu ton', '', 35.00),
(53, 7, 'img53.jpg', 'salata cu pui', '', 27.00),
(54, 7, 'img54.jpg', 'Salata greceasca', '', 20.00),
(55, 7, 'img55.jpg', 'Salata boef', '', 24.00),
(56, 7, 'img56.jpg', 'Salata cu avocado', '', 30.00),
(57, 7, 'img57.jpg', 'Salata cu creveti', '', 35.00),
(58, 7, 'img58.jpg', 'Salata cu ananas', '', 30.00),
(59, 9, 'img59.jpg', 'Ketchup dulce', '', 3.00),
(60, 9, 'img60.jpg', 'Ketchup picant', '', 3.00),
(61, 9, 'img61.jpg', 'maioneza', '', 5.00),
(62, 9, 'img62.jpg', 'maioneza cu usturoi', '', 5.00),
(63, 9, 'img63.jpg', 'Sos tartar', '', 5.00),
(64, 9, 'img64.jpg', 'Sos tzatziki', '', 6.00),
(65, 9, 'img65.jpg', 'Ulei picant', '', 3.00),
(66, 10, 'img66.jpg', 'Ecler fondant', '', 6.00),
(67, 10, 'img67.jpg', 'Amandina', '', 6.00),
(68, 10, 'img68.jpg', 'Cheescake cu visine', '', 14.00),
(69, 10, 'img69.jpg', 'Cremsnit', '', 13.00),
(70, 10, 'img70.jpg', 'Fursecuri cu fructe', '', 12.00),
(71, 10, 'img71.JPG', 'Savarina', '', 6.00),
(72, 10, 'img72.jpg', 'Negresa', '', 6.00),
(73, 11, 'img73.jpg', 'Apa minerala carbozazificata', '', 4.00),
(74, 11, 'img74.jpeg', 'Apa minerala plata', '', 4.00),
(75, 11, 'img75.jpg', 'Bautura racoritoare carbogazoasa', '', 5.00),
(76, 11, 'img76.jpg', 'Bautura racoritoare carbogazoasa', '', 5.00),
(77, 11, 'img77.jpg', 'Bautura racoritoare carbogazoasa', '', 5.00),
(78, 11, 'img78.jpg', 'cafea rece', '', 10.00),
(79, 11, 'img79.jpg', 'Bautura racoritoare carbogazoasa', '', 5.00),
(80, 12, 'img80.jpg', 'bere blonda doza', '', 5.00),
(81, 12, 'img81.jpg', 'bere nefiltrata doza', '', 7.00),
(82, 12, 'img82.jpg', 'Vin rose 750ml', '', 30.00),
(83, 12, 'img83.jpg', 'Vin rosu 750ml', '', 35.00),
(84, 12, 'img84.jpg', 'Whiskey 750ml', '', 100.00),
(85, 12, 'img85.jpg', 'Cognac 1l', '', 150.00),
(86, 12, 'img86.jpg', 'Vin alb 750ml', '', 35.00);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
