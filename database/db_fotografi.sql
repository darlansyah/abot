-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jul 2019 pada 17.14
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fotografi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `juri_lomba`
--

CREATE TABLE `juri_lomba` (
  `id_jurilomba` int(11) NOT NULL,
  `id_lomba` int(11) NOT NULL,
  `id_juri` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `juri_lomba`
--

INSERT INTO `juri_lomba` (`id_jurilomba`, `id_lomba`, `id_juri`) VALUES
(10, 1, 2),
(15, 2, 4),
(9, 1, 4),
(16, 2, 2),
(14, 2, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `foto` tinytext,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `biaya_lomba` bigint(20) DEFAULT NULL,
  `status_lomba` enum('Draft','Posting') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `judul`, `deskripsi`, `foto`, `tgl_daftar`, `tgl_mulai`, `tgl_selesai`, `biaya_lomba`, `status_lomba`) VALUES
(1, 'TEsting', 'deskripsi', NULL, '2019-05-27', '2019-05-29', '2019-05-31', 50000, 'Posting'),
(2, 'Lomba fotografi pantai siung', '<p>perlombaan fotografi pantai siung<br></p>', '0107201915564115-fotor.jpg', '2019-07-01', '2019-07-07', '2019-07-14', 50000, 'Posting'),
(3, 'coba', '<p>asdad<br></p>', '01072019161340civic.jpg', '1970-01-01', '1970-01-01', '1970-01-01', 10000, 'Posting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba_detail`
--

CREATE TABLE `lomba_detail` (
  `id_lombadetail` int(11) NOT NULL,
  `id_lomba` int(11) DEFAULT NULL,
  `id_peserta` int(11) DEFAULT NULL,
  `foto_lomba` varchar(255) DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `id_status` tinyint(6) DEFAULT NULL,
  `foto_bukti_pembayaran` varchar(255) DEFAULT NULL,
  `nilai_lomba` decimal(3,2) DEFAULT NULL,
  `tgl_nilai` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lomba_detail`
--

INSERT INTO `lomba_detail` (`id_lombadetail`, `id_lomba`, `id_peserta`, `foto_lomba`, `tgl_upload`, `id_status`, `foto_bukti_pembayaran`, `nilai_lomba`, `tgl_nilai`) VALUES
(1, 2, 5, NULL, NULL, 2, NULL, NULL, NULL),
(2, 2, 6, NULL, NULL, 3, '11072019133905credit.png', NULL, NULL),
(3, 2, 7, NULL, NULL, 2, '17072019175652darlan.jpg', NULL, NULL),
(7, 2, 10, '20072019051522airbus-aircraft-airplane-587063.jpg', NULL, 2, '20072019045440gambar1.JPG', NULL, NULL),
(6, 2, 9, NULL, NULL, 2, '17072019203509ff.jpg', NULL, NULL),
(9, 2, 11, NULL, NULL, 1, NULL, NULL, NULL),
(10, 2, 12, '20072019111729aircraft-airplane-aviation-1570541.jpg', NULL, 2, '20072019111351gambar1.JPG', NULL, NULL),
(11, 2, 13, '21072019121422aircraft-airplane-aviation-1570541.jpg', NULL, 2, '21072019121323gambar1.JPG', NULL, NULL),
(12, 2, 14, '24072019151320mylogo.jpg', NULL, 2, '24072019151257founder.jpeg', NULL, NULL),
(13, 2, 15, '24072019152618tangguh.jpeg', NULL, 2, '24072019152504ff.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_lomba`
--

CREATE TABLE `status_lomba` (
  `id_status` tinyint(6) NOT NULL,
  `nama_status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_lomba`
--

INSERT INTO `status_lomba` (`id_status`, `nama_status`) VALUES
(1, 'Pendaftaran'),
(2, 'Upload Bukti Pembayaran'),
(3, 'Terdaftar (Sudah membayar)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_jurilomba` int(11) NOT NULL,
  `id_lombadetail_nilai` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_jurilomba`, `id_lombadetail_nilai`, `nilai`) VALUES
(16, 15, 10, 30),
(17, 15, 12, 20),
(18, 16, 10, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testing`
--

CREATE TABLE `testing` (
  `kolom_a` varchar(23) NOT NULL,
  `kolom_b` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testing`
--

INSERT INTO `testing` (`kolom_a`, `kolom_b`) VALUES
('a1', '13'),
('a1', '14'),
('b1', '13'),
('c1', '13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `kategori` enum('admin','juri','peserta') NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto_profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `kategori`, `nama`, `email`, `password`, `tanggal_lahir`, `alamat`, `no_hp`, `foto_profil`) VALUES
(1, 'juri', 'Abot', 'abot2@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2009-03-03', 'jogja 2', '0992388237744', NULL),
(2, 'juri', 'Hendry', 'juri04@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1996-04-04', 'Jogja', '085682377236523', NULL),
(3, 'juri', 'Anton', 'anton@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1996-04-04', 'Jogja', '085623882366', NULL),
(4, 'juri', 'Idul', 'juri3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1996-04-04', 'Jogja', '0992388237723', NULL),
(5, 'peserta', 'Joni', 'joni@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-07-01', 'jogja', '0239887723', NULL),
(6, 'peserta', 'Wawan', 'wawan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-04-04', 'Jogja', '087812341234', '11072019131323billing.jpg'),
(7, 'peserta', 'darlan', 'darlan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-09', 'kendari', '0987776', '17072019175618darlan.jpg'),
(8, 'peserta', 'darlan', 'darlan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-09', 'kendari', '0987776', '17072019175618darlan.jpg'),
(9, 'peserta', 'aiq', 'aiq@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1998-02-21', 'jl.kaendea', '085242736459', '17072019203429faiq.jpg'),
(10, 'peserta', 'tima', 'tima@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-10-10', 'kenadi', '08983892', '19072019160034founder-full.jpeg'),
(11, 'peserta', 'brian', 'brian@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1970-01-01', 'bekasi', '98136', '19072019163403founder.jpeg'),
(12, 'peserta', 'kiki', 'kiki@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2001-04-21', 'babarsari', '9813624566', '20072019111040gambar1.JPG'),
(13, 'peserta', 'peserta 1', 'peserta1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2002-04-21', 'kendari', '9813624568', '21072019121020founder.jpeg'),
(14, 'peserta', 'peserta 02', 'peserta02@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1994-08-12', 'kendari', '08983895', '24072019150939founder.jpeg'),
(15, 'peserta', 'peserta 03', 'peserta03@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1992-05-21', 'jl.kaendea', '085242736459', '24072019152324wgsw.jpg'),
(16, 'juri', 'juri02', 'juri02@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1970-01-01', 'jl.kaendea', '08524273644', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juri_lomba`
--
ALTER TABLE `juri_lomba`
  ADD PRIMARY KEY (`id_jurilomba`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `lomba_detail`
--
ALTER TABLE `lomba_detail`
  ADD PRIMARY KEY (`id_lombadetail`);

--
-- Indexes for table `status_lomba`
--
ALTER TABLE `status_lomba`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `juri_lomba`
--
ALTER TABLE `juri_lomba`
  MODIFY `id_jurilomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lomba_detail`
--
ALTER TABLE `lomba_detail`
  MODIFY `id_lombadetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `status_lomba`
--
ALTER TABLE `status_lomba`
  MODIFY `id_status` tinyint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
