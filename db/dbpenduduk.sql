-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2021 pada 14.36
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbpenduduk`
--
CREATE DATABASE IF NOT EXISTS `dbpenduduk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbpenduduk`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE IF NOT EXISTS `penduduk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `tgl`, `nama`, `alamat`, `agama`, `nohp`, `status`, `keterangan`) VALUES
(5, 9009900, '2020-12-31', 'aisyah keisa', 'Jl. Mondorakan Komplek Masjid Perak No.51, Prengga', 'islam', '082367760000', 'menikah', ''),
(6, 2147483647, '2021-01-02', 'Mhd Joko syahputra', ' Jl. Pangeran Wirosobo No.17', 'islam', '082122113232', 'mahasiswa', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nik`, `nama`, `tgl`, `alamat`, `nohp`, `keterangan`) VALUES
(6, 2147483647, 'aisya derwita', '2021-01-04', 'Jl. Mondorakan Komplek Masjid Perak No.51, Prenggan, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55172', '089899003344', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'PTK@gmail.com', 'PTK', 1, 'Admin Pelayanan Terpadu Kependudukan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
