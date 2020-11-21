-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Nov 2020 um 16:54
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_robertcastillo_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_robertcastillo_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_robertcastillo_petadoption`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `pets`
--

INSERT INTO `pets` (`id`, `image`, `name`, `age`, `breed`, `description`, `hobbies`, `location`, `type`) VALUES
(1, 'https://cdn.pixabay.com/photo/2016/07/21/21/23/ave-1533573__340.jpg', 'David', 2, 'Parus', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ', 'singing', 'Vienna,1220,Süßenbrunnerstraße 101', 'Small'),
(2, 'https://cdn.pixabay.com/photo/2020/10/28/03/17/parrot-5692372_1280.jpg', 'Tweetie', 5, 'Parrot', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam eratAt vero eos et accusam et justo.', 'comedy', 'Salzburb,5020,Landstraße 5', 'Large'),
(4, 'https://cdn.pixabay.com/photo/2017/07/13/16/10/cute-2500929__340.jpg', 'Bugs', 3, 'Rabbit', 'Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'eating, sleeping', 'Tirol,6050,Maximgasse 59', 'Small'),
(5, 'https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313__340.jpg', 'Luke', 8, 'Labrador', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna', 'play hide&seek,eating boots', 'Vienna,1220,Süßenbrunnerstraße 101', 'Senior'),
(6, 'https://media.istockphoto.com/photos/tibetan-mastiff-lying-on-white-floor-picture-id1131170132?s=2048x2048', 'Shorty', 10, 'Tibetian Mastiff', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ', 'being lazy', 'Vienna,1220,Süßenbrunnerstraße 101', 'Large'),
(7, 'https://cdn.pixabay.com/photo/2019/08/15/14/37/alpaca-4408201_1280.jpg', 'George', 5, 'Alpaka', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'jumping', 'Salzbug,5061,Dorfgasse 5', 'Large'),
(8, 'https://cdn.pixabay.com/photo/2018/03/01/16/26/pig-3191071__340.jpg', 'Alfred', 1, 'Minipig', 'Cuo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. , sed diam voluptua. ', 'Donuts', 'Grödig,5024,Landstraße 50', 'Small'),
(9, 'https://cdn.pixabay.com/photo/2020/11/06/17/57/horse-5718507__340.jpg', 'Jolly Jumper', 15, 'Stallion', 'Duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. , sed diam voluptua.', 'jumping', 'Salzburg,5061,Landstraße 59', 'Senior'),
(10, 'https://cdn.pixabay.com/photo/2014/06/04/16/03/cat-362114_1280.jpg', 'Kitty', 10, 'Bengal Cat', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna', 'payling with wool', 'Vienna,1220,Süßenbrunnerstraße 101', 'Senior'),
(11, 'https://cdn.pixabay.com/photo/2018/03/03/20/19/shetland-pony-3196521__340.jpg', 'Big Boy', 1, 'Pony', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna', 'coding', 'Tirol,6020,Landstraße 20', 'Small'),
(12, 'https://cdn.pixabay.com/photo/2020/04/23/20/40/puppy-5084012__340.jpg', 'Spike', 10, 'Bernhardiner', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ', 'painting', 'Tirol,6020,Ladstraße 20', 'Senior'),
(13, 'https://cdn.pixabay.com/photo/2016/06/05/21/46/goat-1438254_1280.jpg', 'Sensei', 7, 'Goat', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna ', 'meditation', 'Tirol,020,Landstraße 20', 'Large');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_status` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pass`, `user_status`) VALUES
(1, 'Tester Testing', 'test@test.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user'),
(2, 'max musterann', 'max@max.com', '481f6cc0511143ccdd7e2d1b1b94faf0a700a8b49cd13922a70b5ae28acaa8c5', NULL),
(3, 'Robert Castillo', 'robert@robert.com', '472bbe83616e93d3c09a79103ae47d8f71e3d35a966d6e8b22f743218d04171d', 'admin');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e-mail` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
