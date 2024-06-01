-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Şub 2022, 22:52:48
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sahibindenget`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `site_logo` varchar(400) NOT NULL,
  `site_arkaplan` varchar(500) NOT NULL,
  `site_baslik` varchar(350) NOT NULL,
  `site_aciklama` varchar(300) NOT NULL,
  `site_anasayfa_aciklama` varchar(500) NOT NULL,
  `site_link` varchar(100) NOT NULL,
  `site_sahip_mail` varchar(100) NOT NULL,
  `site_mail_host` varchar(100) NOT NULL,
  `site_mail_mail` varchar(100) NOT NULL,
  `site_mail_port` int(11) NOT NULL,
  `site_mail_sifre` varchar(100) NOT NULL,
  `github` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_logo`, `site_arkaplan`, `site_baslik`, `site_aciklama`, `site_anasayfa_aciklama`, `site_link`, `site_sahip_mail`, `site_mail_host`, `site_mail_mail`, `site_mail_port`, `site_mail_sifre`, `github`, `twitter`, `instagram`, `facebook`) VALUES
(1, '222951easycep_iphone_X_spacegray_on-1-300x300.png', '587594ziraat-bankasi-logo-vector-01.png', '2. El Apple iPhone X 64 GB – Space Gray', '5.700,00', '6.100,00', '', '622', '', '', 0, '', 'YİĞİT KAAN GÜNDOĞDU', '400,00 TL', 'TR56 0001 0090 1003 2976 5050 01', '00001');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_isim` varchar(200) NOT NULL,
  `kul_mail` varchar(200) NOT NULL,
  `kul_sifre` varchar(100) NOT NULL,
  `kul_telefon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_isim`, `kul_mail`, `kul_sifre`, `kul_telefon`) VALUES
(1, 'A', 'aksoyhlc@gmail.com', '202cb962ac59075b964b07152d234b70', '111111');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `calismalarim_sayfasi` mediumtext NOT NULL,
  `hakkimda_sayfasi` mediumtext NOT NULL,
  `tanitim_sayfasi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `calismalarim_sayfasi`, `hakkimda_sayfasi`, `tanitim_sayfasi`) VALUES
(1, '<p>288</p>\r\n', '', '<p>ASD</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
