-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2022 pada 02.14
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) NOT NULL,
  `level` enum('petugas','tamu','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`, `level`) VALUES
(1, 'Putripuspita', '7fd606a8a6a0471484f50f793f5e24c3', 'Putri', 'admin'),
(2, 'Firmansyah', '06b14b3a568ae0d4390e900af89b7021', 'Firman', 'tamu'),
(3, 'Deviressa', '704013fe5bed59fcc48fbdc93b84254e', 'Devi', 'petugas'),
(4, 'Andiniregina', '7cc189c6e0a97b6d24c4468be600bab0', 'Andini', 'petugas'),
(5, 'Vioalvionita', '8a93009d18c9258b1bc02132f769d30a', 'Vio', 'tamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES
(1, 'Kolam Renang', 'Berada di belakang kamar hotel'),
(2, 'Restaurant', 'Berada di samping kolam renang'),
(3, 'Gym', 'Berada di lobby');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `fasilitas_kamar` varchar(255) NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `jml_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `nama_kamar`, `fasilitas_kamar`, `harga_kamar`, `jml_kamar`) VALUES
(1, 'Standard Rooms', 'Televisi/Kamar Mandi/Dapur/Meja/Wifi', 400000, 8),
(2, 'Superior Rooms', 'Televisi/Kamar Mandi/Dapur/Telepon/Ac/Wifi', 600000, 10),
(3, 'Deluxe Rooms', 'Televisi/Kamar Mandi/Bathub/Mini Bar/Ac/Wifi', 1500000, 15),
(4, 'Junior Suite Rooms', 'Televisi/Kamar Mandi/Dapur/Bathub/Mini Bar/Shower/Ac/Wifi', 2000000, 20),
(5, 'Exsecutive Rooms', 'Televisi/Kamar Mandi/Dapur/Bathub/Mini Bar/Shower/Kulkas/Ac/Wifi', 3000000, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `kd_bayar` char(6) NOT NULL,
  `kd_pesan` char(6) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `nama_akun_rekening` varchar(50) NOT NULL,
  `nmr_rekening` char(14) NOT NULL,
  `status_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`kd_bayar`, `kd_pesan`, `bukti_bayar`, `tgl_bayar`, `nama_akun_rekening`, `nmr_rekening`, `status_bayar`) VALUES
('BYR01', 'MSN01', '1234.jpg', '2022-03-05', 'putri puspita', '2468913.995', 1),
('BYR02', 'MSN02', '0987.jpg', '2022-03-12', 'syila lala', '0089543.77', 1),
('BYR03', 'MSN03', '6544.jpg', '2022-03-17', 'Ria Nur', '2426272.676', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` char(6) NOT NULL,
  `kd_tamu` char(5) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  `jml_kamar_dipesan` int(11) NOT NULL,
  `jml_orang` int(11) NOT NULL,
  `jml_hari` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_reservasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `kd_tamu`, `tgl_check_in`, `tgl_check_out`, `jml_kamar_dipesan`, `jml_orang`, `jml_hari`, `id_kamar`, `total_bayar`, `status_reservasi`) VALUES
('MSN01', 'TM01', '2022-03-03', '2022-03-05', 1, 1, 2, 1, 800000, 1),
('MSN02', 'TM02', '2022-03-10', '2022-03-12', 1, 1, 2, 2, 1200000, 1),
('MSN03', 'TM03', '2022-03-15', '2022-03-17', 1, 1, 2, 3, 3000000, 1),
('MSN04', 'TM04', '2022-03-19', '2022-03-21', 1, 1, 2, 4, 4000000, 1),
('MSN05', 'TM05', '2022-03-23', '2022-03-25', 1, 1, 2, 5, 6000000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_resepsionis`
--

CREATE TABLE `tbl_resepsionis` (
  `id` int(11) NOT NULL,
  `nama_resepsionis` varchar(50) NOT NULL,
  `username_resepsionis` varchar(50) NOT NULL,
  `password_resepsionis` varchar(255) NOT NULL,
  `level_login` enum('petugas','tamu','admin''') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_resepsionis`
--

INSERT INTO `tbl_resepsionis` (`id`, `nama_resepsionis`, `username_resepsionis`, `password_resepsionis`, `level_login`) VALUES
(1, 'Restu Putra', 'restuputra', 'cecb655c0593334f688e913113ffa829', 'petugas'),
(2, 'Laela Aulia', 'laelaaulia', 'cae8bcabcab5a7fe78e1af5887f9af58', 'petugas'),
(3, 'Siska Amelia', 'siskaamelia', '6038ea88c20b815276469aa036049c11', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `kd_tamu` char(5) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_telepon` char(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`kd_tamu`, `nama_tamu`, `email`, `no_telepon`, `alamat`, `password`, `provinsi`, `kota`, `kecamatan`) VALUES
('TM01', 'Putri Puspita Sari', 'puspitaputri123@gmail.com', '0881023710745', 'cangkorah', '5136b96817648b5b81008f6a984284a7', '1', '1', '1'),
('TM02', 'Cecep Firmansyah', 'cecep14@gmail.com', '081232445678', 'kp. cigintung', '87d0131489d9bcc23521dc47fc083ef3', '1', '1', '2'),
('TM03', 'Muhammad Arkana', 'arkana17@gmail.com', '081207145693', 'kp. babakan jalur', 'f8e46add463a66e0eb3a74b3ecc44028', '1', '1', '3'),
('TM04', 'Fransiska', 'fransiska11@gmail.com', '085710772546', 'cimahi', 'a160317995415119d274a921bf2af21d', '1', '1', '4'),
('TM05', 'Sintiani', 'sintiani22@gmail.com', '089722431234', 'kp. haurnyondol', '32caaa1ac57d235321c9594bd02bf5c0', '1', '1', '5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`kd_bayar`),
  ADD KEY `kd_pesan` (`kd_pesan`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `kd_tamu` (`kd_tamu`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `tbl_resepsionis`
--
ALTER TABLE `tbl_resepsionis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`kd_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_resepsionis`
--
ALTER TABLE `tbl_resepsionis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
