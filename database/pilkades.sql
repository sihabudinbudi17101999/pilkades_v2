-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2021 pada 13.27
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilkades`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id_calon` int(11) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `jk` enum('LAKI-LAKI','PEREMPUAN','','') NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nw` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40') NOT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_calon`
--

INSERT INTO `tb_calon` (`id_calon`, `calon`, `jk`, `kecamatan`, `desa`, `nomor`, `status`, `nw`, `modified_by`) VALUES
(15, 'c1', '', 'pamijahan', 'cibening', '1', 'pertahana', '1', NULL),
(16, 'c2', '', 'sukamaju', 'maju', '1', 'pertahana', '2', NULL),
(17, 'c3', '', 'pamijahan', 'gunung menyan', '1', 'pertahana', '1', NULL),
(18, 'c4', '', 'pamijahan', 'cibening', '2', 'pertahana', '1', NULL),
(19, 'c5', '', 'pamijahan', 'gunung menyan', '2', 'pertahana', '1', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deskripsi`
--

CREATE TABLE `tb_deskripsi` (
  `id_deskripsi` int(11) NOT NULL,
  `isi_des` text NOT NULL,
  `waktu_des` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_pemilihan`
--

CREATE TABLE `tb_hasil_pemilihan` (
  `id_hasil` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `tps` varchar(20) NOT NULL,
  `jumlah_suara` varchar(20) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info_umum`
--

CREATE TABLE `tb_info_umum` (
  `id_info` int(11) NOT NULL,
  `isi_info` text NOT NULL,
  `file` varchar(130) NOT NULL,
  `waktu_info` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `jenis_kategori` varchar(50) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `jenis_kategori`, `modified_by`) VALUES
(2, 'Tes kategori', 'Pilkada', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `id_calon` int(11) DEFAULT NULL,
  `id_wilayah` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(130) NOT NULL,
  `status_akun` enum('AKTIF','TIDAK AKTIF','','') NOT NULL,
  `status_users` enum('ADMIN','PETUGAS','','') NOT NULL,
  `mendaftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `id_calon`, `id_wilayah`, `username`, `nama`, `password`, `status_akun`, `status_users`, `mendaftar`, `modified_by`) VALUES
(5, 0, 0, 'admin', NULL, '$2y$10$meYahH3G2JGQI3TufTwJbexjtjszQul6e8jM8ScOfhACMHpVhQu2G', 'AKTIF', 'ADMIN', '2021-01-27 13:09:46', NULL),
(13, 12, 7, 'petugas', 'petugas pamijahan', '$2y$10$4PKAurH773o/nOxpFV32d.TA19Ze4DqRUPMyvJkVnHkIUvgofvUtq', 'AKTIF', 'PETUGAS', '2021-01-29 12:12:55', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wilayah`
--

CREATE TABLE `tb_wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `kecamatan` varchar(45) NOT NULL,
  `desa` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wilayah`
--

INSERT INTO `tb_wilayah` (`id_wilayah`, `kecamatan`, `desa`) VALUES
(7, 'pamijahan', 'cibening'),
(8, 'pamijahan', 'gunung menyan'),
(9, 'sukamaju', 'maju'),
(10, 'sukamaju', 'maju'),
(11, 'sukamaju', 'maju');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indeks untuk tabel `tb_deskripsi`
--
ALTER TABLE `tb_deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indeks untuk tabel `tb_hasil_pemilihan`
--
ALTER TABLE `tb_hasil_pemilihan`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tb_info_umum`
--
ALTER TABLE `tb_info_umum`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_wilayah`
--
ALTER TABLE `tb_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_deskripsi`
--
ALTER TABLE `tb_deskripsi`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_pemilihan`
--
ALTER TABLE `tb_hasil_pemilihan`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_info_umum`
--
ALTER TABLE `tb_info_umum`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_wilayah`
--
ALTER TABLE `tb_wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
