-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Şub 2023, 11:23:11
-- Sunucu sürümü: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- PHP Sürümü: 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `torque`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `createdat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `logs`
--

INSERT INTO `logs` (`id`, `userid`, `ip`, `createdat`) VALUES
(1, 1, '31.210.37.9', '2023-02-05 16:35:26'),
(2, 1, '31.210.37.9', '2023-02-05 19:15:01'),
(3, 1, '31.210.37.9', '2023-02-06 05:22:06'),
(4, 1, '31.210.37.9', '2023-02-06 11:11:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lostpassword`
--

CREATE TABLE `lostpassword` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `shareid` varchar(32) NOT NULL,
  `expired` datetime NOT NULL,
  `createdat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `lostpassword`
--

INSERT INTO `lostpassword` (`id`, `userid`, `shareid`, `expired`, `createdat`) VALUES
(5, 1, 'c027bfba4e4d174692a38038438e2f95', '2023-02-05 18:12:17', '2023-02-05 17:52:17'),
(6, 1, '9546b595c1284385932b52fdbf431c9c', '2023-02-05 18:32:11', '2023-02-05 18:12:11'),
(7, 1, '4b6fa274c8b77b5c9daa092813c0e67d', '2023-02-05 19:13:08', '2023-02-05 18:55:28'),
(8, 1, '990cb6ddaa4e96e674e3968821afd25d', '2023-02-06 05:34:15', '2023-02-06 05:14:15'),
(9, 1, '4919b897c630cc4e0540f4f9183515c4', '2023-02-06 11:33:46', '2023-02-06 11:13:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `createdat` datetime NOT NULL,
  `updatedat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `gender`, `email`, `phone`, `password`, `createdat`, `updatedat`) VALUES
(1, 'Necip Can', 'Güler', 'Male', 'necipcanguler@gmail.com', '53244314', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-05 07:36:43', '2023-02-05 07:36:43'),
(2, 'dwadawd2', 'awdawdaw', 'Male', 'test2@gmail.com', '35435435', 'e10adc3949ba59abbe56e057f20f883e', '2023-02-05 13:19:46', '2023-02-05 13:19:46');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `lostpassword`
--
ALTER TABLE `lostpassword`
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
-- Tablo için AUTO_INCREMENT değeri `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `lostpassword`
--
ALTER TABLE `lostpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
