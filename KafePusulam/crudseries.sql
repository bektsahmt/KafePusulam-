-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2023, 13:43:50
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `crudseries`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `multipledata1`
--

CREATE TABLE `multipledata1` (
  `id` int(11) NOT NULL,
  `checkboxData` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `multipledata1`
--

INSERT INTO `multipledata1` (`id`, `checkboxData`) VALUES
(1, 'LGBT+,Alkollü'),
(2, 'LGBT+,Alkollü'),
(3, 'LGBT+,Alkollü,Canlı Müzik,Hayvan Dostu,value 6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seriescrud`
--

CREATE TABLE `seriescrud` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sifre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `seriescrud`
--

INSERT INTO `seriescrud` (`id`, `isim`, `email`, `sifre`) VALUES
(1, 'tu', 'tugbatyglu@gmail.com', '12345678'),
(2, 'gfe', 'dfsfdfs@gmail.com', '132456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `multipledata1`
--
ALTER TABLE `multipledata1`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `seriescrud`
--
ALTER TABLE `seriescrud`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `multipledata1`
--
ALTER TABLE `multipledata1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `seriescrud`
--
ALTER TABLE `seriescrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
