-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Apr 2018 pada 17.49
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_xi_rpl3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_extra`
--

CREATE TABLE IF NOT EXISTS `tb_extra` (
`id_extra` int(11) NOT NULL,
  `nama_extra` varchar(25) NOT NULL,
  `pengajar_extra` varchar(25) NOT NULL,
  `icon_extra` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tb_mapel` (
`id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`) VALUES
(4, 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `tb_pengeluaran` (
`id_pengeluaran` int(11) NOT NULL,
  `nama_kebutuhan` varchar(50) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
`id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nis_siswa` varchar(6) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama_siswa` varchar(10) NOT NULL,
  `no_telp` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `nis_siswa`, `jenis_kelamin`, `agama_siswa`, `no_telp`) VALUES
(16, 'I Wayan Prema Agus Prasetya', '3413', 'Laki-laki', 'Hindu', '087761661669');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_uangkas`
--

CREATE TABLE IF NOT EXISTS `tb_uangkas` (
`id_uangkas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `date_uangkas` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_uangkas`
--

INSERT INTO `tb_uangkas` (`id_uangkas`, `id_siswa`, `id_bulan`, `jumlah`, `date_uangkas`) VALUES
(28, 16, 1, 5000, '2018-04-29 19:36:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email_user`, `username`, `password`, `level_user`) VALUES
(2, 'premaagus1@gmail.com', 'premaagus', '$2y$11$fHXHXVo9cIjcJz.qs6d5/uVKgcLCRpFv57gMismGX7vFUFjaHa6aK', 'Admin'),
(3, 'ragazzoskuy@gmail.com', 'Bul', '$2y$11$aTRV7oA3BCwyGLe/8uYoTO1MdoW.aKQRi12CzWPpzdvMG.SMxSKU.', 'Admin'),
(5, 'devamahayanatop@gmail.com', 'devamahayana', '$2y$11$W5LqUhSVd9DpVv3Zp/1TfeDyrb.MXQlsxFuLCg0bfK9w7ivzaS2fS', 'Admin');

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
MODIFY `id_extra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_uangkas`
--
ALTER TABLE `tb_uangkas`
MODIFY `id_uangkas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
