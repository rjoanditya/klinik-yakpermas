-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2022 pada 11.55
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbklinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id_diagnosis` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `diagnosis_utama` varchar(50) NOT NULL,
  `diagnosis_sekunder` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `keterangan_resep` text NOT NULL,
  `anamnesis` text NOT NULL,
  `keluhan` text NOT NULL,
  `alergi_makanan` varchar(200) NOT NULL,
  `alergi_udara` varchar(200) NOT NULL,
  `alergi_obat` varchar(200) NOT NULL,
  `tinggi_badan` int(4) NOT NULL,
  `berat_badan` int(4) NOT NULL,
  `sistole` int(4) NOT NULL,
  `diastole` int(4) NOT NULL,
  `lingkar_perut` int(4) NOT NULL,
  `suhu_tubuh` int(3) NOT NULL,
  `respiratory_rate` int(3) NOT NULL,
  `heart_rate` int(2) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_user` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lib_pasien`
--

CREATE TABLE `lib_pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` int(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `debitur` enum('UMUM','BPJS','','') NOT NULL,
  `perawatan` enum('Rawat Jalan','Rawat Inap','Rawat Gawat Darurat','') NOT NULL,
  `jenis_kunjungan` enum('Kunjungan Sehat','Kunjungan Sakit','','') NOT NULL,
  `poli` enum('Pemeriksaan Umum','Poli Gigi','KIA','') NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `gol_darah` enum('A','B','O','AB') NOT NULL,
  `agama` enum('Islam','Katolik','Protestan','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan` enum('Tidak/Belum Sekolah','TK/PAUD','SD','SMP','SMA/K','Perguruan Tinggi') NOT NULL,
  `status_pernikahan` enum('Sudah Menikah','Belum Menikah','','') NOT NULL,
  `alamat` text NOT NULL,
  `ibu_kandung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lib_poli`
--

CREATE TABLE `lib_poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lib_user`
--

CREATE TABLE `lib_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('Admin','Dokter','Petugas Pendaftaran','Petugas Apotek') NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_poli`
--

CREATE TABLE `pendaftaran_poli` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `jenis_perawatan` enum('Rawat jalan','Rawat Inap','','') NOT NULL,
  `tgl_periksa` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_diagnosis` int(11) NOT NULL,
  `status` enum('Sudah Membayar','Belum Membayar','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id_diagnosis`) USING BTREE;

--
-- Indeks untuk tabel `lib_pasien`
--
ALTER TABLE `lib_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `lib_poli`
--
ALTER TABLE `lib_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `lib_user`
--
ALTER TABLE `lib_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `pendaftaran_poli`
--
ALTER TABLE `pendaftaran_poli`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lib_pasien`
--
ALTER TABLE `lib_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lib_poli`
--
ALTER TABLE `lib_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lib_user`
--
ALTER TABLE `lib_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_poli`
--
ALTER TABLE `pendaftaran_poli`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
