-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2022 pada 16.08
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nrp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Mohammad Syafiq', '192410101071', 'syafiqauaf@gmail.com', 'Teknik Informatika'),
(2, 'M Zukhrofi Ardi', '192410101025', 'ardimasyrofi22@gmail.com', 'Teknik Planologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) DEFAULT NULL,
  `kode_matkul` varchar(255) DEFAULT NULL,
  `ruangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `kode_matkul`, `ruangan`) VALUES
(1, 'Database Sistem', 'MK01', 'Ruangan 1A'),
(2, 'Sistem Manajemen', 'Mk02', 'Ruangan 2A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `id_rekap` int(11) NOT NULL,
  `nm_mhs` varchar(255) NOT NULL,
  `nrp` varchar(255) DEFAULT NULL,
  `nm_matkul` varchar(255) DEFAULT NULL,
  `kd_matkul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`id_rekap`, `nm_mhs`, `nrp`, `nm_matkul`, `kd_matkul`) VALUES
(1, 'Mohammad Syafiq', '192410101071', 'Database Sistem', 'MK01'),
(2, 'M Zukhrofi Ardi ', '192410101025', 'Sistem Manajemen', 'MK02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`id_rekap`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
