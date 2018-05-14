-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2018 pada 05.13
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_xi_rpl3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_extra`
--

CREATE TABLE `tb_extra` (
  `id_extra` int(11) NOT NULL,
  `nama_extra` varchar(25) NOT NULL,
  `pengajar_extra` varchar(25) NOT NULL,
  `icon_extra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_extra`
--

INSERT INTO `tb_extra` (`id_extra`, `nama_extra`, `pengajar_extra`, `icon_extra`) VALUES
(1, 'Web Design Club 1h', 'Pak Urip', 'fa-globe'),
(3, 'Catur', 'Pak Gung Abdi', 'fa-search');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`) VALUES
(4, 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `nama_kebutuhan` varchar(50) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nis_siswa` varchar(6) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama_siswa` varchar(10) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `quotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `nis_siswa`, `jenis_kelamin`, `agama_siswa`, `no_telp`, `quotes`) VALUES
(17, 'Abielevan Meidialmo', '3395', 'Laki-laki', 'Kristen Pr', '081339273049', ''),
(18, 'I Wayan Prema Agus Prasetya', '3413', 'Laki-laki', 'Hindu', '087761661669', ''),
(19, 'Ryan Ardito Zahwan Ragazzo', '3424', 'Laki-laki', 'Islam', '081339760178', ''),
(20, 'Ahmad Yudi Prasetyo', '3397', 'Laki-laki', 'Islam', '', ''),
(21, 'Apriyanto Dwi Pangestu', '3398', 'Laki-laki', 'Kristen Ka', '', ''),
(22, 'Belinda Dwi Sukma Putri', '3399', 'Perempuan', 'Islam', '08873801498', ''),
(23, 'Christian Jonathan Lamik', '3400', 'Laki-laki', 'Kristen Pr', '', ''),
(24, 'Daniel Lusikooy', '3402', 'Laki-laki', 'Kristen Pr', '', ''),
(25, 'Dea Ayu Agustina', '3403', 'Perempuan', 'Islam', '085965973999', ''),
(26, 'Gede Ngurah Bagus Yudhistira Mahardiningrat', '3405', 'Laki-laki', 'Hindu', '', ''),
(27, 'Gede Putu Arya Bismana Kori', '3406', 'Laki-laki', 'Hindu', '', ''),
(28, 'I Gede Bagus Ngurah Aditya Dharma Giri', '3407', 'Laki-laki', 'Hindu', '', ''),
(29, 'I Gede Yoga Permana Putra', '3408', 'Laki-laki', 'Hindu', '', ''),
(30, 'I Kadek Dwika Umbara Jaya', '3409', 'Laki-laki', 'Hindu', '', ''),
(31, 'I Komang Agus Dana Artha', '3410', 'Laki-laki', 'Hindu', '', ''),
(32, 'I Nyoman Arta Gunawan', '3411', 'Laki-laki', 'Hindu', '', ''),
(33, 'I Wayan Aditya Semara Putra', '3412', 'Laki-laki', 'Hindu', '', ''),
(34, 'Ida Bagus Anom Mardiana', '3414', 'Laki-laki', 'Hindu', '', ''),
(35, 'Ida Bagus Sari Dhananjaya', '3415', 'Laki-laki', 'Hindu', '', ''),
(36, 'Indra Setyawan', '3416', 'Laki-laki', 'Hindu', '', ''),
(37, 'Kadek Eric Saputra', '3417', 'Laki-laki', 'Hindu', '', ''),
(38, 'Made Deva Mahayana', '3418', 'Laki-laki', 'Hindu', '', ''),
(39, 'Made Putri Adhinda Rahmastra', '3419', 'Laki-laki', 'Hindu', '', ''),
(40, 'Made Reksananda Surya Laksmana', '3420', 'Laki-laki', 'Hindu', '', ''),
(41, 'Nyoman Andika Yogiswara', '3421', 'Laki-laki', 'Hindu', '', ''),
(42, 'Putu Suputra Wahyu Harta', '3422', 'Laki-laki', 'Hindu', '', ''),
(43, 'Rendi Pranoto', '3423', 'Laki-laki', 'Islam', '', ''),
(45, 'Theodorus Wijaya Kusuma', '3425', 'Laki-laki', 'Kristen Ka', '', ''),
(46, 'Tri Sapta Wijaya', '3426', 'Laki-laki', 'Islam', '', ''),
(47, 'Wildhan Naufal Ziah', '3427', 'Laki-laki', 'Islam', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_uangkas`
--

CREATE TABLE `tb_uangkas` (
  `id_uangkas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `date_uangkas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_uangkas`
--

INSERT INTO `tb_uangkas` (`id_uangkas`, `id_siswa`, `id_bulan`, `jumlah`, `date_uangkas`) VALUES
(109, 19, 5, 10000, '2018-05-07 13:56:02'),
(110, 47, 5, 10000, '2018-05-07 13:56:14'),
(111, 43, 5, 10000, '2018-05-07 15:39:19'),
(112, 18, 5, 10000, '2018-05-08 14:09:47'),
(113, 20, 5, 10000, '2018-05-08 14:11:46'),
(114, 36, 5, 10000, '2018-05-08 14:12:03'),
(115, 46, 5, 10000, '2018-05-08 14:12:19'),
(116, 34, 5, 10000, '2018-05-08 14:12:50'),
(117, 23, 5, 10000, '2018-05-08 14:13:05'),
(118, 22, 5, 10000, '2018-05-08 14:15:30'),
(119, 38, 5, 10000, '2018-05-08 14:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email_user`, `username`, `password`, `level_user`) VALUES
(2, 'premaagus1@gmail.com', 'premaagus', '$2y$11$fHXHXVo9cIjcJz.qs6d5/uVKgcLCRpFv57gMismGX7vFUFjaHa6aK', 'Admin'),
(3, 'ragazzoskuy@gmail.com', 'Bul', '$2y$11$aTRV7oA3BCwyGLe/8uYoTO1MdoW.aKQRi12CzWPpzdvMG.SMxSKU.', 'Admin'),
(5, 'devamahayanatop@gmail.com', 'devamahayana', '$2y$11$W5LqUhSVd9DpVv3Zp/1TfeDyrb.MXQlsxFuLCg0bfK9w7ivzaS2fS', 'Admin'),
(6, 'wayanadityasemaraputra@gmail.com', 'adityasemaraputra', '$2y$11$vicbeM7IALlYmzBlEhWryulA65hnJgRE.HcVydLIuh72Cw4B9hkNW', 'Admin'),
(7, 'deaayuagstn@yahoo.com', 'deaayuagstn', '$2y$11$CldGxq83O7W7341itWgQz.Iei5oZfw.QGHPtN8IA.UK1oeXXIwPGi', 'Admin'),
(8, 'putriadhinda10@gmail.com', 'adhinda.rh', '$2y$11$RSZvHRIBFJjNpi1YxmNN4uT0NCtCWe3KjJ78z22XeA7Cl/KU0ZQLu', 'Admin'),
(9, 'ryanardito25@gmail.com', 'Ragazzo', '$2y$11$uYMxObUv/gSw.eJYvPzrkOgmhf977EFy8VU3cHX2KQnUntb4DudxG', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_extra`
--
ALTER TABLE `tb_extra`
  ADD PRIMARY KEY (`id_extra`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_uangkas`
--
ALTER TABLE `tb_uangkas`
  ADD PRIMARY KEY (`id_uangkas`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_extra`
--
ALTER TABLE `tb_extra`
  MODIFY `id_extra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_uangkas`
--
ALTER TABLE `tb_uangkas`
  MODIFY `id_uangkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
