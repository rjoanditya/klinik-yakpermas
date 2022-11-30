-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2022 pada 10.18
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
  `id_user` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosis`
--

INSERT INTO `diagnosis` (`id_diagnosis`, `id_pendaftaran`, `diagnosis_utama`, `diagnosis_sekunder`, `tindakan`, `keterangan_resep`, `anamnesis`, `keluhan`, `alergi_makanan`, `alergi_udara`, `alergi_obat`, `tinggi_badan`, `berat_badan`, `sistole`, `diastole`, `lingkar_perut`, `suhu_tubuh`, `respiratory_rate`, `heart_rate`, `gol_darah`, `id_user`, `id_obat`, `jumlah_obat`) VALUES
(1, 2, 'anemia', 'fever', 'cek dl', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, 5),
(2, 1, '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal_dokter` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kodifikasi`
--

CREATE TABLE `kodifikasi` (
  `id_kodifikasi` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_diagnosis` int(11) NOT NULL,
  `icd10_utama` varchar(50) NOT NULL,
  `icd10_sekunder` varchar(50) NOT NULL,
  `icd9` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kodifikasi`
--

INSERT INTO `kodifikasi` (`id_kodifikasi`, `id_pendaftaran`, `id_diagnosis`, `icd10_utama`, `icd10_sekunder`, `icd9`) VALUES
(1, 2, 1, 'D64.9', 'R50.9', '90.59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lib_obat`
--

CREATE TABLE `lib_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga_satuan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lib_obat`
--

INSERT INTO `lib_obat` (`id_obat`, `nama_obat`, `harga_satuan`) VALUES
(1, 'paracetamol', 10000),
(2, 'tolakangin', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lib_pasien`
--

CREATE TABLE `lib_pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` int(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
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

--
-- Dumping data untuk tabel `lib_pasien`
--

INSERT INTO `lib_pasien` (`id_pasien`, `no_rm`, `nik`, `nama_pasien`, `tempat_lahir`, `tgl_lahir`, `umur`, `jenis_kelamin`, `gol_darah`, `agama`, `pendidikan`, `status_pernikahan`, `alamat`, `ibu_kandung`) VALUES
(2, 1, '12345678912', 'rofik', 'sumilir', '2022-11-01', 12, 'Laki-Laki', '', '', '', '', 'sumilir', ''),
(3, 1, '12345678913', 'Doni', 'Purbalingga', '2022-11-17', 0, 'Laki-Laki', '', '', '', '', 'Jompo RT 01 RW 01', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lib_poli`
--

CREATE TABLE `lib_poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lib_poli`
--

INSERT INTO `lib_poli` (`id_poli`, `nama_poli`) VALUES
(1, 'UMUM'),
(2, 'KIA');

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

--
-- Dumping data untuk tabel `lib_user`
--

INSERT INTO `lib_user` (`id_user`, `nama_lengkap`, `username`, `password`, `role`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(3, 'edo', 'edo', '25d55ad283aa400af464c76d713c07ad', 'Admin', 'Laki-Laki', 'sumbang 6/6', '1212121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_poli`
--

CREATE TABLE `pendaftaran_poli` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `debitur` enum('BPJS','UMUM','','') NOT NULL,
  `jenis_perawatan` enum('Rawat Jalan','Rawat Inap','Rawat Gawat Darurat','') NOT NULL,
  `jenis_kunjungan` enum('Kunjungan Sakit','Kunjungan Sehat','','') NOT NULL,
  `tgl_periksa` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_poli`
--

INSERT INTO `pendaftaran_poli` (`id_pendaftaran`, `id_pasien`, `id_poli`, `debitur`, `jenis_perawatan`, `jenis_kunjungan`, `tgl_periksa`, `keterangan`) VALUES
(1, 2, 1, 'UMUM', 'Rawat Jalan', 'Kunjungan Sakit', '2022-11-01', ''),
(2, 3, 2, 'BPJS', 'Rawat Inap', 'Kunjungan Sehat', '2022-11-25', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_diagnosis` int(11) NOT NULL,
  `total_harga` int(7) NOT NULL
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
-- Indeks untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal_dokter`);

--
-- Indeks untuk tabel `kodifikasi`
--
ALTER TABLE `kodifikasi`
  ADD PRIMARY KEY (`id_kodifikasi`);

--
-- Indeks untuk tabel `lib_obat`
--
ALTER TABLE `lib_obat`
  ADD PRIMARY KEY (`id_obat`);

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
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal_dokter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kodifikasi`
--
ALTER TABLE `kodifikasi`
  MODIFY `id_kodifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `lib_obat`
--
ALTER TABLE `lib_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lib_pasien`
--
ALTER TABLE `lib_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lib_poli`
--
ALTER TABLE `lib_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lib_user`
--
ALTER TABLE `lib_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_poli`
--
ALTER TABLE `pendaftaran_poli`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
