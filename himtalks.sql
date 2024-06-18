-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2024 at 04:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himtalks`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int NOT NULL,
  `dari` varchar(255) NOT NULL,
  `untuk` varchar(255) NOT NULL,
  `kategori` enum('Kritik/Saran','Pesan Biasa') NOT NULL,
  `pesan` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `dari`, `untuk`, `kategori`, `pesan`) VALUES
(3, 'someone', 'Himtika', 'Kritik/Saran', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic repellendus eum ut quia quas officia obcaecati iusto vel perferendis, consequuntur sunt laudantium sapiente illo unde incidunt doloribus facilis repudiandae delectus nostrum. Consequatur alias mollitia aut dolore quia doloremque qui voluptates atque cum, voluptatem beatae veniam ut. Ipsum quas culpa nisi explicabo nulla repellendus, consequatur aut fugiat ut illum. Natus cons'),
(4, 'Adam', 'Chandra', 'Kritik/Saran', 'Jomok kuy'),
(7, 'Jaki', 'Kadiv Edukasi', 'Pesan Biasa', 'Peler'),
(13, 'Nadin', 'Chandra', 'Kritik/Saran', 'Pake celana kalo kemana mana anying');

-- --------------------------------------------------------

--
-- Table structure for table `songfess`
--

CREATE TABLE `songfess` (
  `id` int NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `judul_lagu` varchar(255) NOT NULL,
  `ig_penerima` varchar(255) NOT NULL,
  `menit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `songfess`
--

INSERT INTO `songfess` (`id`, `pengirim`, `judul_lagu`, `ig_penerima`, `menit`) VALUES
(1, 'Nadindra', '@flwhere', 'wave to earth - Season', '0.20 - 1.20'),
(3, 'Adam Sandy', '@chandra', 'baoncikadap', '00.10 - 00.40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songfess`
--
ALTER TABLE `songfess`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `songfess`
--
ALTER TABLE `songfess`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
