-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Oca 2021, 21:32:11
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bilim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilim_dalı`
--

CREATE TABLE `bilim_dalı` (
  `bilim_dalı_id` int(11) NOT NULL,
  `bilim_insanı_id` int(11) NOT NULL,
  `bilim_dalı_adı` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `bilim_dalı`
--

INSERT INTO `bilim_dalı` (`bilim_dalı_id`, `bilim_insanı_id`, `bilim_dalı_adı`) VALUES
(1, 1, 'Fizik'),
(2, 2, 'Psikoloji'),
(3, 3, 'Fizik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilim_insanı`
--

CREATE TABLE `bilim_insanı` (
  `bilim_insanı_id` int(11) NOT NULL,
  `baglantı_id` int(11) NOT NULL,
  `bilim_insanı_adı` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `bilim_insanı`
--

INSERT INTO `bilim_insanı` (`bilim_insanı_id`, `baglantı_id`, `bilim_insanı_adı`) VALUES
(1, 0, 'Albert Einstein'),
(2, 0, 'Sigmound  Froud'),
(3, 0, 'Nikola Tesla');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `eserler`
--

CREATE TABLE `eserler` (
  `eser_id` int(11) NOT NULL,
  `bilim_insanı_id` int(11) NOT NULL,
  `eser_adı` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `eserler`
--

INSERT INTO `eserler` (`eser_id`, `bilim_insanı_id`, `eser_adı`) VALUES
(1, 1, 'Özel Görelilik'),
(2, 2, 'Psikoanaliz'),
(3, 3, 'Alternatif Akım');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilim_dalı`
--
ALTER TABLE `bilim_dalı`
  ADD PRIMARY KEY (`bilim_dalı_id`),
  ADD KEY `bilim_insanı_id` (`bilim_insanı_id`),
  ADD KEY `bilim_dalı_id` (`bilim_dalı_id`,`bilim_insanı_id`);

--
-- Tablo için indeksler `bilim_insanı`
--
ALTER TABLE `bilim_insanı`
  ADD PRIMARY KEY (`bilim_insanı_id`),
  ADD KEY `bilim_insanı_id` (`bilim_insanı_id`),
  ADD KEY `bilim_insanı_id_2` (`bilim_insanı_id`),
  ADD KEY `baglantı_id` (`baglantı_id`);

--
-- Tablo için indeksler `eserler`
--
ALTER TABLE `eserler`
  ADD PRIMARY KEY (`eser_id`),
  ADD KEY `bilim_insanı_id` (`bilim_insanı_id`),
  ADD KEY `eser_id` (`eser_id`,`bilim_insanı_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilim_dalı`
--
ALTER TABLE `bilim_dalı`
  MODIFY `bilim_dalı_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `bilim_insanı`
--
ALTER TABLE `bilim_insanı`
  MODIFY `bilim_insanı_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `eserler`
--
ALTER TABLE `eserler`
  MODIFY `eser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
