-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 May 2023, 20:28:25
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seriescrud`
--

CREATE TABLE `seriescrud` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `seriescrud`
--

INSERT INTO `seriescrud` (`id`, `kullanici_adi`, `email`, `parola`) VALUES
(79, 'tugce', 'mukultugce@gmail.com', '$2y$10$n86PS7lzpeVOdNTsgM'),
(80, 'tugcemm', 'mukultugce@gmail.com', '$2y$10$zsLz7Dz3.SpW29bNlj'),
(81, 'semih123', 'semih@gmail.com', '$2y$10$8Pz7v1kbLm5WHhdj2e');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `seriescrud`
--
ALTER TABLE `seriescrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
