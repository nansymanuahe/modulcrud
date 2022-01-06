-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 06 Jan 2022 pada 17.59
-- Versi server: 8.0.27
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudtona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudnansy`
--

CREATE TABLE `crudnansy` (
  `no` int NOT NULL,
  `nim` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `umur` int NOT NULL,
  `nama_ayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `crudnansy`
--

INSERT INTO `crudnansy` (`no`, `nim`, `nama`, `alamat`, `prodi`, `jk`, `umur`, `nama_ayah`) VALUES
(1, 1905001, 'Jackson Balao', 'Makawang,Soat 1', 'D3-Sistem Informasi', 'Pria', 20, 'Jon'),
(2, 1905071, 'Nansy Manuahe', 'Tona 1', 'D3-Sistem Informasi', 'Wanita', 20, 'Natan'),
(3, 1905040, 'Putri Makangiras', 'Sawang,Soat2', 'D3-Sistem Informasi', 'Wanita', 19, 'Enda'),
(4, 1905059, 'Christin Kelung', 'Tona 2', 'D3-Sistem Informasi', 'Wanita', 20, 'Bayu'),
(5, 1905076, 'Shelsania Selabila', 'Apes', 'D3-Sistem Informasi', 'Wanita', 20, 'Rangga');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
