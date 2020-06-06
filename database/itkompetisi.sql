-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2020 pada 06.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itkompetisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotografi`
--

CREATE TABLE `fotografi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `perguruan` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fotografi`
--

INSERT INTO `fotografi` (`id`, `nama`, `perguruan`, `phone`, `email`, `alamat`, `created`) VALUES
(1, 'dsdfdsf', 'UMI', '084444444444', 'terserah@gmail.com', 'medan\r\nJL.pijer prodi no.25, kwala bekala, medan johor', '2020-03-21 09:00:24'),
(2, 'wijaya galung', 'UMI', '08333333333', 'andika@gmail.com', 'medan', '2020-03-21 09:00:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobile_legend`
--

CREATE TABLE `mobile_legend` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama_leader` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nama_anggota` text NOT NULL,
  `nama_nick` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobile_legend`
--

INSERT INTO `mobile_legend` (`id`, `nama_tim`, `nama_leader`, `phone`, `nama_anggota`, `nama_nick`, `created`) VALUES
(1, 'febri', 'wijaya', '08972966375', '1.angga\r\n2.riski\r\n3.wijaya', '1.angga09\r\n2.riski12\r\n3.wijaya07', '2020-03-21 09:01:19'),
(2, 'Momo', 'FEBRI WIJAYA HUTAGALUNG', '0811111111', '1.rani\r\n2.dodi\r\n3.riyan', '1.joni\r\n2.ono\r\n3.dani', '2020-03-21 09:01:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pes`
--

CREATE TABLE `pes` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `perguruan` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pes`
--

INSERT INTO `pes` (`id`, `nama`, `perguruan`, `phone`, `email`, `alamat`, `created`) VALUES
(1, 'wijaya galung', 'UMI', '084444444444', 'terserah@gmail.com', 'medan', '2020-03-21 09:02:35'),
(2, 'Febriyan', 'Universitas Sumatra Utara', '08972966375', 'sukaku@gmail.com', 'medan\r\nJL.pijer prodi no.25, kwala bekala, medan johor', '2020-03-21 09:02:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `name`, `email`, `subject`, `message`, `created`) VALUES
(1, 'wijaya galung', 'terserah@gmail.com', 'mantap', 'ini sudah keren', '2020-03-21 09:04:54'),
(2, 'Febri wijaya', 'riyani@gmail.com', 'Bagus', 'Jangan banyak pikiran', '2020-03-21 09:04:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'febri wijaya', 'tarutung', 1),
(6, 'yusantoni', '50ff5101e420d076b3038b1fc4e65546bd980de4', 'Yusantoni Harefa', 'Medan', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `nama_tim` text NOT NULL,
  `perguruan` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `nama_ketua`, `nama_tim`, `perguruan`, `phone`, `email`, `created`) VALUES
(1, 'fcgcg', '1.roni\r\n2.joni\r\n3.toni', 'umi', '0822222222', 'sukaku@gmail.com', '2020-03-21 09:05:34'),
(2, 'rono', '1.oni\r\n2.roni', 'UMI', '08972966375', 'sukaku@gmail.com', '2020-03-21 09:05:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fotografi`
--
ALTER TABLE `fotografi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobile_legend`
--
ALTER TABLE `mobile_legend`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pes`
--
ALTER TABLE `pes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fotografi`
--
ALTER TABLE `fotografi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mobile_legend`
--
ALTER TABLE `mobile_legend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pes`
--
ALTER TABLE `pes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
