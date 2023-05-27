-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 May 2023, 09:05:50
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

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
-- Tablo için tablo yapısı `filtreler1`
--

CREATE TABLE `filtreler1` (
  `id` int(11) NOT NULL,
  `filtreler` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `filtreler1`
--

INSERT INTO `filtreler1` (`id`, `filtreler`) VALUES
(0, 'LGBT+'),
(1, 'Alkol Sever'),
(2, 'Canlı Müzik'),
(3, 'Vejetaryen'),
(4, 'Hayvan Dostu'),
(5, 'Alkolsüz'),
(6, 'Vegan'),
(7, 'Yöresel Zevkler'),
(8, 'Dünya Mutfağı'),
(9, 'Yeni Nesil Kahveciler'),
(10, 'Yeşilay'),
(11, 'Bütçe Dostu');

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
(12, 'LGBT+,Alkollü,Canlı Müzik'),
(13, 'LGBT+,Alkollü,Canlı Müzik'),
(14, 'LGBT+,Alkollü,Canlı Müzik'),
(15, 'LGBT+,Alkollü'),
(16, 'Vegan,Yöresel Zevkler,Dünya Mutfağı'),
(17, 'LGBT+,Alkollü,Canlı Müzik'),
(18, 'LGBT+,Alkollü,Canlı Müzik'),
(19, '0,1,2'),
(20, '4,5,6'),
(21, '1'),
(22, '5'),
(23, '3'),
(24, '10'),
(25, '0,1'),
(26, '0,5,9'),
(27, '0,4,5'),
(28, '0,1,5,10'),
(29, '0,5,9,10'),
(30, '0,1,6,7,11'),
(31, '0,4'),
(32, '0,5,6,7'),
(33, '0,4,8,9,10'),
(34, '0'),
(35, '0,1'),
(36, '0'),
(37, '0'),
(38, '1'),
(39, '4,8,9'),
(40, '0,5,6,10'),
(41, '0,1,2,3,4,5,6,7,8,9,10,11'),
(42, '4,5,8'),
(43, '0,4,8,9'),
(44, '0,5,9,10,11'),
(45, '0,1,2,5,6,9'),
(46, '0,1,4,5,9'),
(47, '1,2,5');

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
(81, 'semih123', 'semih@gmail.com', '$2y$10$8Pz7v1kbLm5WHhdj2e'),
(82, 'tugba', 'tgba@gmail.com', '$2y$10$mjkmaYpb1zVPJQfKef'),
(83, 'tugbakkk', 'cjldssyglu@gmail.com', '$2y$10$HVfITNyi3zsRyKirS2'),
(84, 'tubik', 'tubik@gmail.com', '$2y$10$LZnbkYPGMTVAa0d2Gg'),
(85, 'tubatggg', 'tgbu@gmail.com', '$2y$10$CTbb2rvMPA3o8e0zuO'),
(86, 'eyupeyup', 'eyup@gmail.com', '12345678'),
(87, 'tugbattt', 'tugbaaa@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `yorum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `filtreler1`
--
ALTER TABLE `filtreler1`
  ADD PRIMARY KEY (`id`);

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
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `multipledata1`
--
ALTER TABLE `multipledata1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `seriescrud`
--
ALTER TABLE `seriescrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
