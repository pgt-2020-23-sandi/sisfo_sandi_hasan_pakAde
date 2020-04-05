-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2020 pada 03.53
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasidosen`
--

CREATE TABLE `evaluasidosen` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `mk` text NOT NULL,
  `tahun` text NOT NULL,
  `nim` text NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `a7` int(11) NOT NULL,
  `a8` int(11) NOT NULL,
  `a9` int(11) NOT NULL,
  `a10` int(11) NOT NULL,
  `a11` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `b6` int(11) NOT NULL,
  `b7` int(11) NOT NULL,
  `b8` int(11) NOT NULL,
  `b9` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL,
  `d4` int(11) NOT NULL,
  `d5` int(11) NOT NULL,
  `d6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `evaluasidosen`
--

INSERT INTO `evaluasidosen` (`id`, `nama`, `mk`, `tahun`, `nim`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `c1`, `c2`, `c3`, `c4`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`) VALUES
(0, 'Ade Hadianto', 'Mekatronika', '2017', '1701061', 4, 5, 4, 3, 4, 3, 5, 5, 4, 5, 4, 3, 4, 5, 4, 4, 5, 3, 5, 4, 5, 3, 4, 4, 5, 4, 5, 4, 5, 4),
(0, 'Ade Thohirudin', 'Mekatronika', '2017', '1701062', 5, 4, 4, 5, 5, 4, 5, 4, 5, 5, 4, 4, 5, 5, 5, 4, 5, 4, 3, 5, 4, 5, 4, 5, 4, 5, 4, 5, 5, 5),
(0, 'Ahmad Firdaus', 'Mekatronika', '2017', '1701063', 4, 5, 5, 4, 3, 4, 5, 4, 4, 5, 5, 4, 4, 5, 5, 4, 3, 5, 5, 4, 4, 5, 5, 4, 4, 5, 5, 4, 4, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `logkondite`
--

CREATE TABLE `logkondite` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenispoint` text NOT NULL,
  `point` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `prodi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logkondite`
--

INSERT INTO `logkondite` (`id`, `nim`, `nama`, `jenispoint`, `point`, `keterangan`, `tahun`, `prodi`, `tanggal`) VALUES
(0, 1701061, 'Ade Hadianto', 'Minus', 5, 'Out standing', 2017, 'Teknik Mesin', '2020-03-01'),
(2, 1702052, 'Sandi Pramudya Pratama', 'plus', 25, 'Repair Stop kontak', 2017, 'Teknik Elektronika', '2020-03-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `programstudi` text NOT NULL,
  `tempatlahir` text NOT NULL,
  `tanggallahir` date NOT NULL,
  `tahunmasuk` int(11) NOT NULL,
  `status` text NOT NULL,
  `kelas` text NOT NULL,
  `password` text NOT NULL,
  `pembimbing` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jeniskelamin`, `programstudi`, `tempatlahir`, `tanggallahir`, `tahunmasuk`, `status`, `kelas`, `password`, `pembimbing`, `email`, `facebook`, `whatsapp`, `instagram`, `handphone`, `alamat`) VALUES
(1701061, 'Ade Hadianto', 'Laki-laki', 'Teknik Mesin', 'Kuningan', '1990-10-01', 2017, 'aktif', '3MC', '1701061', 'Ahmad Zohari', '', '', '', '', '0', ''),
(1701062, 'Ade Thohirudin', 'Laki-laki', 'Teknik Mesin', 'Tangerang', '1990-03-02', 0, 'aktif', '3MC', '1701062', 'Ahmad Zohari', '', '', '', '', '0', ''),
(1701063, 'Ahmad Firdaus', 'Laki-laki', 'Teknik Mesin', 'Tangerang', '1990-03-10', 0, 'aktif', '3MC', '1701063', 'Ahmad Zohari', '', '', '', '', '0', ''),
(1702052, 'Sandi Pramudya Pratama', 'Laki-laki', 'Teknik Elektronika', 'Bantul, Yogyakarta', '1999-09-04', 2017, 'aktif', '3 Elektronika B', '1702052', '-', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiakademik`
--

CREATE TABLE `nilaiakademik` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` text NOT NULL,
  `uts` text NOT NULL,
  `uas` text NOT NULL,
  `tugas` text NOT NULL,
  `kuis` text NOT NULL,
  `akhir` text NOT NULL,
  `huruf` text NOT NULL,
  `angka` double NOT NULL,
  `kodemk` text NOT NULL,
  `namamk` text NOT NULL,
  `sks` int(11) NOT NULL,
  `tahunakademik` varchar(6) NOT NULL DEFAULT '',
  `prodi` text NOT NULL,
  `dosen` text NOT NULL,
  `kelas` text NOT NULL,
  `status` text NOT NULL,
  `statusmk` text NOT NULL,
  `semester` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilaiakademik`
--

INSERT INTO `nilaiakademik` (`id`, `nim`, `nama`, `uts`, `uas`, `tugas`, `kuis`, `akhir`, `huruf`, `angka`, `kodemk`, `namamk`, `sks`, `tahunakademik`, `prodi`, `dosen`, `kelas`, `status`, `statusmk`, `semester`) VALUES
(1, 1702052, 'Sandi Pramudya Pratama', '100', '100', '99', '99', '100', 'A', 99, 'MK02', 'INSTRUMENTASI', 2, '2017-1', 'Teknik Elektronika', 'Pak Ridwan', '3 Elektronika B', 'aktif', 'aktif', 1),
(2, 1702052, 'Sandi Pramudya Pratama', '99', '100', '98', '100', '99', 'A', 98, 'MK04', 'Instalasi Listrik', 3, '2017-2', 'Teknik Elektronika', 'Pak Ihsan', '3 Elektronika B', 'aktif', 'aktif', 2),
(3, 1701062, 'Ade Thohirudin', '100', '100', '100', '100', '100', 'A', 100, 'MK01', 'Mekatronika', 2, '2017-1', 'Teknik Mesin', 'Indri', '3MC', 'aktif', 'aktif', 1),
(4, 1701062, 'Ade Thohirudin', '99', '98', '97', '96', '95', 'A-', 97, 'MK05', 'Bubut', 3, '2017-2', 'Teknik Mesin', 'Pak Puguh', '3MC', 'aktif', 'aktif', 2),
(5, 1701063, 'Ahmad Firdaus', '90', '90', '90', '90', '90', 'A', 90, 'MK01', 'Mekatronika', 2, '2017-1', 'Teknik Mesin', 'Indri', '3MC', 'aktif', 'aktif', 1),
(6, 1701063, 'Ahmad Firdaus', '90', '90', '90', '90', '90', 'A', 90, 'MK01', 'CNC', 3, '2017-2', 'Teknik Mesin', 'Pak Darmanto', '3MC', 'aktif', 'aktif', 2),
(7, 1702052, 'Sandi Pramudya Pratama', '99', '97', '98', '100', '98', 'A+', 100, 'MK06', 'Elektronika Dasar', 3, '2018-1', 'Teknik Elektronika', 'Pak Ihsan', '3 Elektronika B', 'aktif', 'aktif', 3),
(8, 1702052, 'Sandi Pramudya Pratama', '96', '100', '98', '99', '99', 'A', 96, 'MK07', 'PLC', 3, '2018-2', 'Teknik Elektronika', 'Pak Slamet', '3 Elektronika B', 'aktif', 'aktif', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `nim` int(7) NOT NULL,
  `ipakademik1` double NOT NULL,
  `ipakademik2` double NOT NULL,
  `ipakademik3` double NOT NULL,
  `ipakademik4` double NOT NULL,
  `ipakademik5` double NOT NULL,
  `ipakademik6` double NOT NULL,
  `ipkedisiplinan1` double NOT NULL,
  `ipkedisiplinan2` double NOT NULL,
  `ipkedisiplinan3` double NOT NULL,
  `ipkedisiplinan4` double NOT NULL,
  `ipkedisiplinan5` double NOT NULL,
  `ipkedisiplinan6` double NOT NULL,
  `ipmagang1` double NOT NULL,
  `ipmagang2` double NOT NULL,
  `ipmagang3` double NOT NULL,
  `ipmagang4` double NOT NULL,
  `ipmagang5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`nim`, `ipakademik1`, `ipakademik2`, `ipakademik3`, `ipakademik4`, `ipakademik5`, `ipakademik6`, `ipkedisiplinan1`, `ipkedisiplinan2`, `ipkedisiplinan3`, `ipkedisiplinan4`, `ipkedisiplinan5`, `ipkedisiplinan6`, `ipmagang1`, `ipmagang2`, `ipmagang3`, `ipmagang4`, `ipmagang5`) VALUES
(1702052, 4, 4, 3.99, 3.98, 3.97, 4, 4, 3.99, 3.96, 3.97, 3.95, 3.98, 4, 4, 4, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `logkondite`
--
ALTER TABLE `logkondite`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
