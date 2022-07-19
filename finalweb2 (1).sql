-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 14.10
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalweb2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tl` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` enum('belum kawin','sudah kawin') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `motto` varchar(300) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `tl`, `tgl`, `jk`, `agama`, `alamat`, `status`, `pekerjaan`, `kewarganegaraan`, `hobi`, `motto`, `foto`) VALUES
(1, 'Abdul Malik Haqqul Mubin', 'Makassar', '2001-04-29', 'Laki-laki', 'Islam', 'Griya Pallangga Mas Blok I No 2', 'belum kawin', 'pelajar/mahasiswa', 'WNI', 'touring', 'Proses yang matang dan disiplin pribadi meningkatkan perencanaan, menningkatkan produktivitas.', 'malik.jpg'),
(2, 'Thariq Putra Aulia Rahmadana', 'Makassar', '2001-11-22', 'Laki-laki', 'Islam', 'BTN Pao-Pao Permai Blok C7 / 1', 'belum kawin', 'pelajar/mahasiswa', 'WNI', 'main futsal', 'Berhenti melihat masa lalu, mulailah untuk melihat masa depan.', 'thariq.jpeg'),
(3, 'Ayu Azhari Zainal', 'Makassar', '2002-08-09', 'Perempuan', 'Islam', 'Btn Bumi Pallangga Mas 2 Blok I/12', 'belum kawin', 'pelajar/mahasiswa', 'WNA', 'Membaca', 'Setiap bunga memiliki waktu mekarnya masing-masing. Setiap orang memiliki waktu sukses yang berbeda.', 'ayu.jpeg'),
(6, 'Syarifah Fujina Azzahra', 'Barru', '2002-05-13', 'Perempuan', 'Islam', 'Jl. Kamboja Nno. 25 Barru', 'belum kawin', 'pelajar/mahasiswa', 'WNI', 'tiktok', 'Tidak harus menjadi lebih baik dari orang lain, karena yang benar saya harusb lebih baik dari yang kemarin', 'fuji.jpeg'),
(7, 'Muhammada Faisal Iskandar', 'Makassar', '2002-05-12', 'Laki-laki', 'Islam', 'Jl. Bontoduri IX Lr.I No.18A', 'belum kawin', 'pelajar/mahasiswa', 'WNI', 'Mendaki', 'Membutuhkan 5000 jam untuk mengubah orang awam menjadi ahli', 'este.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `konfirmasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `konfirmasi`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'klp3', 'klsc', 'klsc');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
