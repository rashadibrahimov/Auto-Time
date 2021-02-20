-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Nis 2019, 03:16:02
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `auto_database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_text` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `news_text`) VALUES
(87, '2019 ASTON MARTIN DB11 AMR FIRST DRIVE: AN EXCLUSIVE WAY TO EAT UP MILES'),
(88, 'A BABY CLASS MERCEDES-BENZ G-CLASS MAY BE ON THE WAY'),
(97, 'JAGUAR LAND ROVER THRIVING UNDER TATA -- SO FAR');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
