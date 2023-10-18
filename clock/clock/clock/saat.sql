-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2022, 14:27:37
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `saat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ad`, `soyad`, `email`, `sifre`) VALUES
(1, 'Hakan', 'Admin', 'hakan@admin.com', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giris`
--

CREATE TABLE `giris` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `giris`
--

INSERT INTO `giris` (`id`, `ad`, `soyad`, `email`, `sifre`) VALUES
(7, 'hakan', 'kul', 'hakankul0666@gmail.com', '3131'),
(8, 'hakan', 'kul', 'hakankul0666@gmail.com', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `urun_model` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_marka` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_gosterilme` int(11) NOT NULL,
  `urun_indirim` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_model`, `urun_aciklama`, `urun_fiyat`, `urun_stok`, `urun_marka`, `resim`, `urun_gosterilme`, `urun_indirim`) VALUES
(1, 'u-12', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '1250000', 1, 'Rolex', 'resimler /ty9643.jpg', 2, ''),
(2, 'u-12', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '7555', 1, 'Rolex', 'resimler /fg4323.jpg', 2, ''),
(3, 'A-31', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '5000', 1, 'Rolex', 'resimler /rt2050.jpg', 2, ''),
(4, 'A-31', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '9999', 1, 'Rolex', 'resimler /yu1132.jpg', 1, ''),
(5, 'A-31', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '1250000', 1, 'Rolex', 'resimler /ty8068.jpg', 1, ''),
(6, 'u-12', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '7555', 1, 'Rolex', 'resimler /yu6383.jpg', 0, ''),
(7, 'u-12', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '5000', 1, 'Rolex', 'resimler /fg1837.jpg', 1, ''),
(8, 'u-12', 'Prestijli ve yüksek hassasi̇yetli̇ saatlerden oluşan Rolex koleksi̇yonunu i̇nceleyin. Rolex’in geniş bir çeşitliliğe sahip klasik ve profesyonel modelleri arasında her bileğe yakışacak bir saat vardır. Stil ve işlevselliğin mükemmel birleşimini bulmak için Rolex’in kapsamlı kol saatleri seçkisini keşfedin.', '9999', 1, 'Rolex', 'resimler /ty9403.jpg', 13, ''),
(9, 'b-12', 'rolextir güzeldir hoştur', '10000', 1, 'Rolex', 'resimler /ty6010.jpg', 7, ''),
(10, 'd-12', 'rolextir güzeldir hoştur', '10000', 1, 'Alphina', 'resimler /as8543.jpg', 3, ''),
(11, 'a-12', 'rolextir güzeldir hoştur', '10000', 0, 'Rolex', 'resimler /yu4384.jpg', 2, '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `giris`
--
ALTER TABLE `giris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `giris`
--
ALTER TABLE `giris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
