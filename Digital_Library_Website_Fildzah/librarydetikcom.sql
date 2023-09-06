-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 24 Jul 2023 pada 07.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydetikcom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id_acc` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_acc` varchar(255) NOT NULL,
  `password_acc` varchar(255) NOT NULL,
  `type_acc` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id_acc`, `username`, `email_acc`, `password_acc`, `type_acc`) VALUES
(1, 'admin1', 'admin1@gmail.com', 'de41b7fb99201d8334c23c014db35ecd92df81bc', 'admin'),
(2, 'user1', 'user1@gmail.com', '817f305c94d9506e8e6a196717d3b913d4576ef4', 'user'),
(3, 'admin2', 'admin2@gmail.com', 'd95734a3680fa690dccb4ba2a1a59070f91b49c4', 'admin'),
(4, 'user2', 'user2@gmail.com', '99f187c8f3d8724817f2d8d5d49fa0ce6a35f3cf', 'user'),
(5, 'admin3', 'admin3@gmail.com', '131e99b6b49ef6b43b0cdc0ba98f99655a979c3f', 'admin'),
(6, 'user3', 'user3@gmail.com', 'f0b442328de3aa75694c30abdf2c6083d1d8de79', 'user'),
(7, 'admin4', 'admin4@gmail.com', '223d9ae35710c29057c90e96b287f8640e6259de', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `title_book` varchar(255) NOT NULL,
  `category_book` varchar(255) NOT NULL,
  `description_book` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `file_book` varchar(255) NOT NULL,
  `cover_book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id_book`, `user`, `title_book`, `category_book`, `description_book`, `jumlah`, `file_book`, `cover_book`) VALUES
(1, 4, 'book1', '1', 'ini first book loh...', 112, 'file1.pdf', 'cover1.jpg'),
(2, 4, 'magazine1', '2', 'aq adalah majalah', 222, 'file2.pdf', 'cover2.jpg'),
(3, 2, 'comic1', '3', 'comic lucu bgt hahaha', 333, 'file3.pdf', 'cover3.jpg'),
(4, 2, 'dictionary1', '4', 'kamus jerman x ya', 444, 'file4.pdf', 'cover4.jpg'),
(5, 2, 'biography1', '5', 'biografi wow', 555, 'file5.pdf', 'cover5.jpg'),
(6, 2, 'comic2', '3', 'second episodeee', 666, 'file6.pdf', 'cover6.jpg'),
(7, 6, 'book2', '1', 'coba baca aja', 777, 'file7.pdf', 'cover7.jpg'),
(9, 4, 'cobauser', '8', 'coba kidsss', 323, 'file1.pdf', 'cover1.jpg'),
(10, 4, 'cobalagi', '9', 'eaaa', 1, 'file3.pdf', 'cover7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'novel'),
(2, 'magazine'),
(3, 'comics'),
(4, 'dictionary'),
(5, 'biography'),
(6, 'autobiography'),
(7, 'history'),
(8, 'kids'),
(9, 'business'),
(10, 'recipes');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeks untuk tabel `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
