-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2022 pada 17.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id_formulir` int(11) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `no_pendaftaran` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `anak` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `sd` varchar(255) DEFAULT NULL,
  `smp` varchar(255) DEFAULT NULL,
  `alamat_sekolah` varchar(255) DEFAULT NULL,
  `orangtua` varchar(255) NOT NULL,
  `nama_ortu` text NOT NULL,
  `nik` varchar(255) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_telp_ortu` varchar(255) NOT NULL,
  `verifikasi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id_formulir`, `date_created`, `no_pendaftaran`, `image`, `nama_lengkap`, `nisn`, `tempat`, `tanggal_lahir`, `jk`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `anak`, `status`, `nomor_hp`, `pendidikan`, `tk`, `sd`, `smp`, `alamat_sekolah`, `orangtua`, `nama_ortu`, `nik`, `alamat_ortu`, `pekerjaan`, `no_telp_ortu`, `verifikasi`) VALUES
(2, '01:04:22', '0002', 'pas_foto14.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2022-04-29', 'Laki - Laki', 'Jalan Cipedes Hegar', '12', '1204', '1204021', '1204021002', '1', 'anak bungsu', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(3, '01:04:22', '0003', 'pas_foto15.jpg', 'rizky', '08952662733', 'Bandung', '2022-04-07', 'Laki - Laki', 'Jalan Cipedes Hegar', '36', '3602', '3602121', '3602121006', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(4, '02:04:22', '0004', 'pas_foto16.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2022-03-27', 'Laki - Laki', 'Jalan Cipedes Hegar', '33', '3318', '3318020', '3318020002', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(5, '02:04:22', '0005', '', 'rizky', '08952662733', 'Bandung', '2022-03-28', 'Laki - Laki', 'Jalan Cipedes Hegar', '33', '3302', '3302030', '3302030001', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(6, '02:04:22', '0006', '', 'rizky', '08952662733', 'Bandung', '2022-03-31', 'Laki - Laki', 'Jalan Cipedes Hegar', '12', '1219', '1219060', '1219060008', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(7, '02:04:22', '0007', 'pas_foto17.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2022-03-27', 'Laki - Laki', 'Jalan Cipedes Hegar', '12', '1202', '1202052', '1202052003', '2', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(8, '02:04:22', '0008', 'pas_foto18.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2022-04-08', 'Laki - Laki', 'Jalan Cipedes Hegar', '52', '5202', '5202090', '5202090009', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(9, '02:04:22', '0009', 'pas_foto19.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2022-03-27', 'Laki - Laki', 'Jalan Cipedes Hegar', '51', '5103', '5103020', '5103020001', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(10, '02:04:22', '0010', 'pas_foto20.jpg', 'luthfi', '15160137', 'Bandung', '2022-04-06', 'Laki - Laki', 'Jalan Cipedes Hegar', '52', '5202', '5202011', '5202011002', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(11, '02:04:22', '0011', 'pas_foto21.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2022-04-07', 'Perempuan', 'Jalan Cipedes Hegar', '53', '5302', '5302011', '5302011005', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(12, 'Sat-Apr-2022', '0012', 'pas_foto22.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2000-02-04', 'Laki - Laki', 'Jalan Cipedes Hegar', '32', '3273', '3273190', '3273190004', '1', 'anak sulung', '088223603617', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '0'),
(14, '3 April, 2022, 12:30 am', '0013', 'pas_foto24.jpg', 'Rizky Febriyanto', '15160137', 'Bandung', '2000-02-05', 'Laki - Laki', 'Jalan Cipedes Hegar', '32', '3273', '3273190', '3273190004', '1', 'anak sulung', '088223603617', 'ALIYAH', 'TK islahul ummah', 'sdn pasirkaliki', 'smp indonesia raya', 'tk = jalan abc\r\nsd = jalan def\r\nsmp = jalan ghi', 'Ayah', 'asep', '2021010125', 'Jalan Cipedes Hegar', 'buruh', '08911122344', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'Teacher');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `images`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'banner3.jpg', 'utama', '2022-03-25 16:47:36', '2022-03-25 16:47:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `username`, `password`, `date_created`, `is_active`, `role`) VALUES
(1, 'administrator', 'profile.jpg', 'admin', '$2y$10$CGfc302Im2QeAMEMMAis7.6B.B021HeXliQlIfpQHTN735NUK82V6', '2022-03-11 16:01:10', 1, 1),
(2, 'User Demo', 'profile.jpg', 'user', '$2y$10$WZFbJlSDGFnoPdcJbsKliOOU5YwZXInaq/JlEVd4D1dL6ab2ga0OG', '2022-03-11 16:40:24', 1, 2),
(3, 'rizky febriyanto', 'profile.jpg', 'rizky', '$2y$10$k/AdvQgQkTAZRu3tiQVNye77oPQY17RzLHVAE7g68nEzm6GIRhcvS', '2022-03-23 17:34:38', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
