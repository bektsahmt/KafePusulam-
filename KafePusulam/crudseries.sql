-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 May 2023, 23:40:19
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
(47, '1,2,5'),
(48, '0,4,5,9,10,11'),
(49, '0,1,2,3,4,5,6,7,8,9,10,11'),
(50, '0,1,2,3,4,5,6,7,8,9,10,11'),
(51, '0,1,2'),
(52, '0,1,2'),
(53, '0,1,2,11'),
(54, '0,1,2,3,4,5,6,7,8,9,10,11'),
(55, '0,4,7,8,9'),
(56, '0,4,5,9');

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
(87, 'tugbattt', 'tugbaaa@gmail.com', '12345678'),
(88, 'tuvba', 'tuvba@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_aurora`
--

CREATE TABLE `siparis_aurora` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) NOT NULL,
  `siparis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_gaia`
--

CREATE TABLE `siparis_gaia` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) NOT NULL,
  `siparis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `siparis_gaia`
--

INSERT INTO `siparis_gaia` (`id`, `kullanici`, `siparis`) VALUES
(9, 'root', 'sağğde küfte2'),
(10, 'root', 'sağğde küfte2'),
(11, 'tuvba', 'sağğde küfte22222'),
(12, 'tuvba', 'sağğde küfte');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_harmonious`
--

CREATE TABLE `siparis_harmonious` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) NOT NULL,
  `siparis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `siparis_harmonious`
--

INSERT INTO `siparis_harmonious` (`id`, `kullanici`, `siparis`) VALUES
(1, 'tuvba', 'sağğde küfte');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_lepetit`
--

CREATE TABLE `siparis_lepetit` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) NOT NULL,
  `siparis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `siparis_lepetit`
--

INSERT INTO `siparis_lepetit` (`id`, `kullanici`, `siparis`) VALUES
(1, 'tuvba', 'sağğde küfte');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_royal`
--

CREATE TABLE `siparis_royal` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) NOT NULL,
  `siparis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `siparis_royal`
--

INSERT INTO `siparis_royal` (`id`, `kullanici`, `siparis`) VALUES
(1, 'tuvba', 'sağğde küfte');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_theroasted`
--

CREATE TABLE `siparis_theroasted` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) NOT NULL,
  `siparis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `siparis_theroasted`
--

INSERT INTO `siparis_theroasted` (`id`, `kullanici`, `siparis`) VALUES
(1, 'tuvba', 'sağğde küfte');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumaurora`
--

CREATE TABLE `yorumaurora` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `yorum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumaurora`
--

INSERT INTO `yorumaurora` (`id`, `kullanici`, `yildiz`, `tarih`, `yorum`) VALUES
(5, 'tuvba', 5, '2023-05-27', ' İnanılmaz lezzetli kahveleri ve atıştırmalıkları ile beni büyüledi. Çalışanlar da son derece nazik ve misafirperverdi. Atmosferi de çok hoş ve rahatlatıcı. Kesinlikle tekrar ziyaret etmek isteyeceğim bir yer :)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumgaia`
--

CREATE TABLE `yorumgaia` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `yorum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumgaia`
--

INSERT INTO `yorumgaia` (`id`, `kullanici`, `yildiz`, `tarih`, `yorum`) VALUES
(3, 'tuvba', 5, '2023-05-27', 'Gaia Bistro gerçekten harika bir deneyim sunuyor! Vejetaryen ve vegan seçeneklerinin geniş olması beni çok mutlu etti. Yemeklerin tümü sağlıklı ve lezzetliydi. Ayrıca, yöresel zevklere de önem veriyorlar ve özgün tatlar sunuyorlar. Çalışanlar son derece ilgili ve misafirperver. Atmosferi sıcak ve samimi, dekorasyonu da çok hoş. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumharmonious`
--

CREATE TABLE `yorumharmonious` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `yorum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumharmonious`
--

INSERT INTO `yorumharmonious` (`id`, `kullanici`, `yildiz`, `tarih`, `yorum`) VALUES
(4, 'tuvba', 5, '2023-05-27', 'Hem vegan dostu seçenekleriyle hem de bütçe dostu fiyatlarıyla beni etkiledi. Menüsünde geniş bir vegan seçeneği bulunuyor ve hepsi lezzetli ve sağlıklıydı. Ayrıca, canlı müzik performansları sayesinde atmosfer çok canlı ve enerjikti. Hem kahvemi yudumlarken keyifli bir zaman geçirdim hem de harika müzikle ruhum dinlendi. Kesinlikle tekrar ziyaret etmek için sabırsızlanıyorum');

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
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `kullanici`, `yildiz`, `tarih`, `yorum`) VALUES
(76, 'tugbattt', 3, '2023-05-27', 'beş yıldız vermiyor'),
(77, 'tugbattt', 3, '2023-05-27', 'beş yıldız vermiyor');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlepetitcafe`
--

CREATE TABLE `yorumlepetitcafe` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `yorum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumlepetitcafe`
--

INSERT INTO `yorumlepetitcafe` (`id`, `kullanici`, `yildiz`, `tarih`, `yorum`) VALUES
(1, 'tuvba', 4, '2023-05-27', 'Kahveleri oldukça lezzetliydi ve sunumları da göz alıcıydı. Ancak, fiyatlar biraz yüksek ve hizmet biraz yavaş olabiliyor. Çalışanlar nazik olsa da bazen ilgilenme süresi uzayabiliyor. Mekanın atmosferi hoş ve sakin, ancak daha fazla oturma alanı olabilirdi. Genel olarak, iyi bir deneyimdi, ancak bazı iyileştirmeler yapılabilir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumroyalbrew`
--

CREATE TABLE `yorumroyalbrew` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `yorum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumroyalbrew`
--

INSERT INTO `yorumroyalbrew` (`id`, `kullanici`, `yildiz`, `tarih`, `yorum`) VALUES
(2, 'tuvba', 5, '2023-05-27', 'Sadece mükemmel kahveleri ve hizmetiyle değil, aynı zamanda hayvandostu özelliğiyle de benim favori mekanımdır! Burada kahvemi yudumlarken sevimli dostumuzu yanımızda getirebilmek gerçekten harika bir deneyim. Çalışanlar, hayvanseverler için özel olarak hazırlanmış alanlara evcil hayvanları da kabul ediyor ve onlara ilgi gösteriyor. Bu özelliği sayesinde hem kendim hem de evcil dostum için rahat ve keyifli bir ortam sağlanıyor. Royal Brew cafe, hem kahve severlere hem de hayvanseverlere hitap eden nadir mekanlardan biridir ve kesinlikle tavsiye ederim!');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumtheroasted`
--

CREATE TABLE `yorumtheroasted` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `yorum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumtheroasted`
--

INSERT INTO `yorumtheroasted` (`id`, `kullanici`, `yildiz`, `tarih`, `yorum`) VALUES
(2, 'tuvba', 4, '2023-05-27', 'Lezzetli kahveleri ve çeşitli atıştırmalıkları vardı. Atmosferi sıcak ve rahattı. Ancak bazen yoğun olabiliyor, bu yüzden hizmet biraz yavaşlayabiliyor. Yine de genel olarak keyifli bir deneyimdi ve tekrar ziyaret etmeyi düşünebilirim.');

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
-- Tablo için indeksler `siparis_aurora`
--
ALTER TABLE `siparis_aurora`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_gaia`
--
ALTER TABLE `siparis_gaia`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_harmonious`
--
ALTER TABLE `siparis_harmonious`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_lepetit`
--
ALTER TABLE `siparis_lepetit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_royal`
--
ALTER TABLE `siparis_royal`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_theroasted`
--
ALTER TABLE `siparis_theroasted`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumaurora`
--
ALTER TABLE `yorumaurora`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumgaia`
--
ALTER TABLE `yorumgaia`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumharmonious`
--
ALTER TABLE `yorumharmonious`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlepetitcafe`
--
ALTER TABLE `yorumlepetitcafe`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumroyalbrew`
--
ALTER TABLE `yorumroyalbrew`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumtheroasted`
--
ALTER TABLE `yorumtheroasted`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `multipledata1`
--
ALTER TABLE `multipledata1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Tablo için AUTO_INCREMENT değeri `seriescrud`
--
ALTER TABLE `seriescrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_aurora`
--
ALTER TABLE `siparis_aurora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_gaia`
--
ALTER TABLE `siparis_gaia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_harmonious`
--
ALTER TABLE `siparis_harmonious`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_lepetit`
--
ALTER TABLE `siparis_lepetit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_royal`
--
ALTER TABLE `siparis_royal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_theroasted`
--
ALTER TABLE `siparis_theroasted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumaurora`
--
ALTER TABLE `yorumaurora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `yorumgaia`
--
ALTER TABLE `yorumgaia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `yorumharmonious`
--
ALTER TABLE `yorumharmonious`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlepetitcafe`
--
ALTER TABLE `yorumlepetitcafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yorumroyalbrew`
--
ALTER TABLE `yorumroyalbrew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yorumtheroasted`
--
ALTER TABLE `yorumtheroasted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
