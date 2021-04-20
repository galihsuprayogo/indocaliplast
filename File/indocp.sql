-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Apr 2021 pada 11.21
-- Versi server: 5.7.24
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indocp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailjadwal`
--

CREATE TABLE `detailjadwal` (
  `idjadwal` varchar(50) DEFAULT NULL,
  `idkaryawan` varchar(50) DEFAULT NULL,
  `idgedung` varchar(50) DEFAULT NULL,
  `shift` varchar(200) DEFAULT NULL,
  `minggu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailjadwal`
--

INSERT INTO `detailjadwal` (`idjadwal`, `idkaryawan`, `idgedung`, `shift`, `minggu`) VALUES
('J01', 'P05', 'G01', 'Shift Pagi', 'Minggu 1'),
('J01', 'P15', 'G01', 'Shift Pagi', 'Minggu 1'),
('J01', 'P04', 'G01', 'Shift Siang', 'Minggu 1'),
('J01', 'P18', 'G01', 'Shift Siang', 'Minggu 1'),
('J01', 'P10', 'G01', 'Shift Malam', 'Minggu 1'),
('J01', 'P13', 'G01', 'Shift Malam', 'Minggu 1'),
('J01', 'P02', 'G02', 'Shift Pagi', 'Minggu 1'),
('J01', 'P08', 'G02', 'Shift Pagi', 'Minggu 1'),
('J01', 'P03', 'G02', 'Shift Siang', 'Minggu 1'),
('J01', 'P17', 'G02', 'Shift Siang', 'Minggu 1'),
('J01', 'P06', 'G02', 'Shift Malam', 'Minggu 1'),
('J01', 'P12', 'G02', 'Shift Malam', 'Minggu 1'),
('J01', 'P01', 'G03', 'Shift Pagi', 'Minggu 1'),
('J01', 'P07', 'G03', 'Shift Pagi', 'Minggu 1'),
('J01', 'P09', 'G03', 'Shift Siang', 'Minggu 1'),
('J01', 'P11', 'G03', 'Shift Siang', 'Minggu 1'),
('J01', 'P14', 'G03', 'Shift Malam', 'Minggu 1'),
('J01', 'P16', 'G03', 'Shift Malam', 'Minggu 1'),
('J01', 'P05', 'G01', 'Shift Pagi', 'Minggu 2'),
('J01', 'P15', 'G01', 'Shift Pagi', 'Minggu 2'),
('J01', 'P02', 'G01', 'Shift Siang', 'Minggu 2'),
('J01', 'P16', 'G01', 'Shift Siang', 'Minggu 2'),
('J01', 'P01', 'G01', 'Shift Malam', 'Minggu 2'),
('J01', 'P18', 'G01', 'Shift Malam', 'Minggu 2'),
('J01', 'P04', 'G02', 'Shift Pagi', 'Minggu 2'),
('J01', 'P12', 'G02', 'Shift Pagi', 'Minggu 2'),
('J01', 'P11', 'G02', 'Shift Siang', 'Minggu 2'),
('J01', 'P13', 'G02', 'Shift Siang', 'Minggu 2'),
('J01', 'P09', 'G02', 'Shift Malam', 'Minggu 2'),
('J01', 'P14', 'G02', 'Shift Malam', 'Minggu 2'),
('J01', 'P06', 'G03', 'Shift Pagi', 'Minggu 2'),
('J01', 'P17', 'G03', 'Shift Pagi', 'Minggu 2'),
('J01', 'P07', 'G03', 'Shift Siang', 'Minggu 2'),
('J01', 'P10', 'G03', 'Shift Siang', 'Minggu 2'),
('J01', 'P03', 'G03', 'Shift Malam', 'Minggu 2'),
('J01', 'P08', 'G03', 'Shift Malam', 'Minggu 2'),
('J01', 'P04', 'G01', 'Shift Pagi', 'Minggu 3'),
('J01', 'P10', 'G01', 'Shift Pagi', 'Minggu 3'),
('J01', 'P05', 'G01', 'Shift Siang', 'Minggu 3'),
('J01', 'P13', 'G01', 'Shift Siang', 'Minggu 3'),
('J01', 'P06', 'G01', 'Shift Malam', 'Minggu 3'),
('J01', 'P15', 'G01', 'Shift Malam', 'Minggu 3'),
('J01', 'P08', 'G02', 'Shift Pagi', 'Minggu 3'),
('J01', 'P09', 'G02', 'Shift Pagi', 'Minggu 3'),
('J01', 'P03', 'G02', 'Shift Siang', 'Minggu 3'),
('J01', 'P18', 'G02', 'Shift Siang', 'Minggu 3'),
('J01', 'P12', 'G02', 'Shift Malam', 'Minggu 3'),
('J01', 'P17', 'G02', 'Shift Malam', 'Minggu 3'),
('J01', 'P02', 'G03', 'Shift Pagi', 'Minggu 3'),
('J01', 'P07', 'G03', 'Shift Pagi', 'Minggu 3'),
('J01', 'P11', 'G03', 'Shift Siang', 'Minggu 3'),
('J01', 'P14', 'G03', 'Shift Siang', 'Minggu 3'),
('J01', 'P01', 'G03', 'Shift Malam', 'Minggu 3'),
('J01', 'P16', 'G03', 'Shift Malam', 'Minggu 3'),
('J01', 'P06', 'G01', 'Shift Pagi', 'Minggu 4'),
('J01', 'P15', 'G01', 'Shift Pagi', 'Minggu 4'),
('J01', 'P02', 'G01', 'Shift Siang', 'Minggu 4'),
('J01', 'P04', 'G01', 'Shift Siang', 'Minggu 4'),
('J01', 'P14', 'G01', 'Shift Malam', 'Minggu 4'),
('J01', 'P16', 'G01', 'Shift Malam', 'Minggu 4'),
('J01', 'P05', 'G02', 'Shift Pagi', 'Minggu 4'),
('J01', 'P07', 'G02', 'Shift Pagi', 'Minggu 4'),
('J01', 'P09', 'G02', 'Shift Siang', 'Minggu 4'),
('J01', 'P11', 'G02', 'Shift Siang', 'Minggu 4'),
('J01', 'P08', 'G02', 'Shift Malam', 'Minggu 4'),
('J01', 'P13', 'G02', 'Shift Malam', 'Minggu 4'),
('J01', 'P01', 'G03', 'Shift Pagi', 'Minggu 4'),
('J01', 'P12', 'G03', 'Shift Pagi', 'Minggu 4'),
('J01', 'P10', 'G03', 'Shift Siang', 'Minggu 4'),
('J01', 'P17', 'G03', 'Shift Siang', 'Minggu 4'),
('J01', 'P03', 'G03', 'Shift Malam', 'Minggu 4'),
('J01', 'P18', 'G03', 'Shift Malam', 'Minggu 4'),
('J02', 'P11', 'G01', 'Shift Pagi', 'Minggu 1'),
('J02', 'P18', 'G01', 'Shift Pagi', 'Minggu 1'),
('J02', 'P01', 'G01', 'Shift Siang', 'Minggu 1'),
('J02', 'P15', 'G01', 'Shift Siang', 'Minggu 1'),
('J02', 'P03', 'G01', 'Shift Malam', 'Minggu 1'),
('J02', 'P04', 'G01', 'Shift Malam', 'Minggu 1'),
('J02', 'P12', 'G02', 'Shift Pagi', 'Minggu 1'),
('J02', 'P13', 'G02', 'Shift Pagi', 'Minggu 1'),
('J02', 'P07', 'G02', 'Shift Siang', 'Minggu 1'),
('J02', 'P14', 'G02', 'Shift Siang', 'Minggu 1'),
('J02', 'P02', 'G02', 'Shift Malam', 'Minggu 1'),
('J02', 'P17', 'G02', 'Shift Malam', 'Minggu 1'),
('J02', 'P06', 'G03', 'Shift Pagi', 'Minggu 1'),
('J02', 'P16', 'G03', 'Shift Pagi', 'Minggu 1'),
('J02', 'P08', 'G03', 'Shift Siang', 'Minggu 1'),
('J02', 'P10', 'G03', 'Shift Siang', 'Minggu 1'),
('J02', 'P05', 'G03', 'Shift Malam', 'Minggu 1'),
('J02', 'P09', 'G03', 'Shift Malam', 'Minggu 1'),
('J02', 'P07', 'G01', 'Shift Pagi', 'Minggu 2'),
('J02', 'P12', 'G01', 'Shift Pagi', 'Minggu 2'),
('J02', 'P05', 'G01', 'Shift Siang', 'Minggu 2'),
('J02', 'P17', 'G01', 'Shift Siang', 'Minggu 2'),
('J02', 'P01', 'G01', 'Shift Malam', 'Minggu 2'),
('J02', 'P02', 'G01', 'Shift Malam', 'Minggu 2'),
('J02', 'P03', 'G02', 'Shift Pagi', 'Minggu 2'),
('J02', 'P14', 'G02', 'Shift Pagi', 'Minggu 2'),
('J02', 'P08', 'G02', 'Shift Siang', 'Minggu 2'),
('J02', 'P09', 'G02', 'Shift Siang', 'Minggu 2'),
('J02', 'P15', 'G02', 'Shift Malam', 'Minggu 2'),
('J02', 'P16', 'G02', 'Shift Malam', 'Minggu 2'),
('J02', 'P06', 'G03', 'Shift Pagi', 'Minggu 2'),
('J02', 'P18', 'G03', 'Shift Pagi', 'Minggu 2'),
('J02', 'P11', 'G03', 'Shift Siang', 'Minggu 2'),
('J02', 'P13', 'G03', 'Shift Siang', 'Minggu 2'),
('J02', 'P04', 'G03', 'Shift Malam', 'Minggu 2'),
('J02', 'P10', 'G03', 'Shift Malam', 'Minggu 2'),
('J02', 'P14', 'G01', 'Shift Pagi', 'Minggu 3'),
('J02', 'P16', 'G01', 'Shift Pagi', 'Minggu 3'),
('J02', 'P04', 'G01', 'Shift Siang', 'Minggu 3'),
('J02', 'P08', 'G01', 'Shift Siang', 'Minggu 3'),
('J02', 'P13', 'G01', 'Shift Malam', 'Minggu 3'),
('J02', 'P15', 'G01', 'Shift Malam', 'Minggu 3'),
('J02', 'P11', 'G02', 'Shift Pagi', 'Minggu 3'),
('J02', 'P18', 'G02', 'Shift Pagi', 'Minggu 3'),
('J02', 'P05', 'G02', 'Shift Siang', 'Minggu 3'),
('J02', 'P12', 'G02', 'Shift Siang', 'Minggu 3'),
('J02', 'P06', 'G02', 'Shift Malam', 'Minggu 3'),
('J02', 'P07', 'G02', 'Shift Malam', 'Minggu 3'),
('J02', 'P01', 'G03', 'Shift Pagi', 'Minggu 3'),
('J02', 'P02', 'G03', 'Shift Pagi', 'Minggu 3'),
('J02', 'P09', 'G03', 'Shift Siang', 'Minggu 3'),
('J02', 'P10', 'G03', 'Shift Siang', 'Minggu 3'),
('J02', 'P03', 'G03', 'Shift Malam', 'Minggu 3'),
('J02', 'P17', 'G03', 'Shift Malam', 'Minggu 3'),
('J02', 'P11', 'G01', 'Shift Pagi', 'Minggu 4'),
('J02', 'P13', 'G01', 'Shift Pagi', 'Minggu 4'),
('J02', 'P06', 'G01', 'Shift Siang', 'Minggu 4'),
('J02', 'P17', 'G01', 'Shift Siang', 'Minggu 4'),
('J02', 'P07', 'G01', 'Shift Malam', 'Minggu 4'),
('J02', 'P15', 'G01', 'Shift Malam', 'Minggu 4'),
('J02', 'P09', 'G02', 'Shift Pagi', 'Minggu 4'),
('J02', 'P10', 'G02', 'Shift Pagi', 'Minggu 4'),
('J02', 'P16', 'G02', 'Shift Siang', 'Minggu 4'),
('J02', 'P18', 'G02', 'Shift Siang', 'Minggu 4'),
('J02', 'P02', 'G02', 'Shift Malam', 'Minggu 4'),
('J02', 'P05', 'G02', 'Shift Malam', 'Minggu 4'),
('J02', 'P01', 'G03', 'Shift Pagi', 'Minggu 4'),
('J02', 'P04', 'G03', 'Shift Pagi', 'Minggu 4'),
('J02', 'P08', 'G03', 'Shift Siang', 'Minggu 4'),
('J02', 'P12', 'G03', 'Shift Siang', 'Minggu 4'),
('J02', 'P03', 'G03', 'Shift Malam', 'Minggu 4'),
('J02', 'P14', 'G03', 'Shift Malam', 'Minggu 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `idgedung` varchar(50) NOT NULL DEFAULT '',
  `namagedung` varchar(200) DEFAULT '',
  `lokasi` varchar(200) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`idgedung`, `namagedung`, `lokasi`) VALUES
('G01', 'Gedung 1', 'Karanganyar'),
('G02', 'Gedung 2', 'Karanganyar'),
('G03', 'Gedung 3', 'KaranganyarCity');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `idjadwal` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`idjadwal`) VALUES
('J01'),
('J02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `idkaryawan` varchar(50) NOT NULL,
  `namakaryawan` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`idkaryawan`, `namakaryawan`, `jabatan`) VALUES
('P01', 'Galih', 'Mekanik'),
('P02', 'Enjang', 'Mekanik'),
('P03', 'Vander', 'Mekanik'),
('P04', 'Titho', 'Mekanik'),
('P05', 'Bima', 'Mekanik'),
('P06', 'Teve', 'Mekanik'),
('P07', 'Marh', 'Mekanik'),
('P08', 'Ayas', 'Mekanik'),
('P09', 'Willy', 'Mekanik'),
('P10', 'Yannuar', 'Mekanik'),
('P11', 'Bara', 'Mekanik'),
('P12', 'Anggit', 'Mekanik'),
('P13', 'Rona', 'Mekanik'),
('P14', 'Bayu', 'Mekanik'),
('P15', 'Blue', 'Mekanik'),
('P16', 'Sindi', 'Mekanik'),
('P17', 'Billa', 'Mekanik'),
('P18', 'Alya', 'Mekanik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailjadwal`
--
ALTER TABLE `detailjadwal`
  ADD KEY `idjadwal` (`idjadwal`),
  ADD KEY `idkaryawan` (`idkaryawan`),
  ADD KEY `idgedung` (`idgedung`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`idgedung`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idjadwal`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idkaryawan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailjadwal`
--
ALTER TABLE `detailjadwal`
  ADD CONSTRAINT `idgedung` FOREIGN KEY (`idgedung`) REFERENCES `gedung` (`idgedung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idjadwal` FOREIGN KEY (`idjadwal`) REFERENCES `jadwal` (`idjadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idkaryawan` FOREIGN KEY (`idkaryawan`) REFERENCES `karyawan` (`idkaryawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
