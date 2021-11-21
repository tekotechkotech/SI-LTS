-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2021 pada 12.30
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `nim` char(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `thn_lulus` char(4) DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alumni`
--

INSERT INTO `tb_alumni` (`nim`, `password`, `nama`, `prodi`, `thn_lulus`, `jk`, `email`, `no_hp`, `foto`) VALUES
('190102020', 'pass', 'Siapa saja', 'TI', '2020', 'Laki-Laki', 'siapa@saja.com', '088888888888', ''),
('190102021', 'pass', 'Siapa hayo', 'TI', '2020', 'Perempuan', 'siapa@hayo.com', '088888888880', ''),
('190102024', 'okok', 'Faiz AG', 'D3 Teknik Listrik', '2020', 'Laki-Laki', 'faiz571@gmail.com', '082230156049', 'unnamed.jpg'),
('1981726', 'asd', 'Gunawan Tri Laksono Hidayat', 'D3 Teknik Mesin', '1980', 'Laki-Laki', 'gun@guna.wan', '082230156049', '616aa92fb4426.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hproses`
--

CREATE TABLE `tb_hproses` (
  `id_hproses` int(11) NOT NULL,
  `id_proses` int(11) NOT NULL,
  `nip_npak` char(20) DEFAULT NULL,
  `waktu_hproses` datetime DEFAULT NULL,
  `level_proses` char(1) DEFAULT NULL,
  `acc` enum('Disetujui','Ditolak') DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hproses`
--

INSERT INTO `tb_hproses` (`id_hproses`, `id_proses`, `nip_npak`, `waktu_hproses`, `level_proses`, `acc`, `keterangan`) VALUES
(1, 4, NULL, '2021-09-26 09:55:23', '1', NULL, ''),
(2, 4, '190102022097', '2021-09-26 10:05:45', '2', 'Disetujui', ''),
(3, 4, NULL, '2021-09-26 09:55:23', '3', 'Disetujui', ''),
(4, 4, NULL, '2021-09-26 09:55:23', '4', 'Ditolak', ''),
(5, 4, NULL, '2021-09-26 09:55:23', '5', NULL, ''),
(6, 5, NULL, '2021-09-27 08:33:45', '1', 'Disetujui', ''),
(7, 5, NULL, '2021-09-27 08:33:45', '2', NULL, ''),
(8, 5, NULL, '2021-09-27 08:33:45', '3', NULL, ''),
(9, 5, NULL, '2021-09-27 08:33:45', '4', 'Disetujui', ''),
(10, 5, NULL, '2021-09-27 08:33:45', '5', NULL, '');

--
-- Trigger `tb_hproses`
--
DELIMITER $$
CREATE TRIGGER `upproses_uphproses` AFTER UPDATE ON `tb_hproses` FOR EACH ROW IF NEW.acc = 'Disetujui' THEN
    UPDATE tb_proses
SET
    nip_npak = NEW.nip_npak,
    waktu_proses = now(),
	level_proses = NEW.level_proses
WHERE
	id_proses = OLD.id_proses;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip_npak` char(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `jabatan` enum('Wakil Direktur 1','Kepala BAAK','Pegawai BAAK','') DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip_npak`, `username`, `password`, `nama`, `jk`, `jabatan`, `email`, `no_hp`, `foto`) VALUES
('190102022096', 'Handhika', 'passw', 'Pagi', 'Laki-Laki', 'Wakil Direktur 1', 'pegawai@baak.com', '088888888884', ''),
('190102022097', 'Kurniawan', 'passw', 'Sang KaBAAKe', 'Laki-Laki', '', 'ketua@baak.com', '088888888883', ''),
('1928109281', 'Jonathan', 'asd', 'Nabila Nur Salsabila Anggraeni', 'Perempuan', '', 'bil@na.b', '082230156049', 'WhatsApp Image 2021-03-05 at 23.49.57.jpeg'),
('827641984169', 'Rendi', 'asdf', 'Semangat', '', 'Kepala BAAK', 'qwe@rt.y', '08126491862', 'unnamed.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_print`
--

CREATE TABLE `tb_print` (
  `id_print` int(11) NOT NULL,
  `nim` char(10) DEFAULT NULL,
  `waktu_print` datetime DEFAULT NULL,
  `jenis_berkas` enum('Ijazah','Transkip Nilai') DEFAULT NULL,
  `berkas_print` varchar(255) DEFAULT NULL,
  `keterangan_print` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_proses`
--

CREATE TABLE `tb_proses` (
  `id_proses` int(11) NOT NULL,
  `id_upload` int(11) NOT NULL,
  `nip_npak` char(20) DEFAULT NULL,
  `waktu_proses` datetime DEFAULT NULL,
  `level_proses` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_proses`
--

INSERT INTO `tb_proses` (`id_proses`, `id_upload`, `nip_npak`, `waktu_proses`, `level_proses`) VALUES
(4, 17, NULL, '2021-10-02 14:13:00', '3'),
(5, 18, NULL, '2021-11-17 15:37:23', '4');

--
-- Trigger `tb_proses`
--
DELIMITER $$
CREATE TRIGGER `inproses_inhistory` AFTER INSERT ON `tb_proses` FOR EACH ROW BEGIN
INSERT INTO tb_hproses SET
    id_proses = NEW.id_proses,
    waktu_hproses = now(),
    level_proses = NEW.level_proses
    ;
INSERT INTO tb_hproses SET
    id_proses = NEW.id_proses,
    waktu_hproses = now(),
    level_proses = '2'
    ;
INSERT INTO tb_hproses SET
    id_proses = NEW.id_proses,
    waktu_hproses = now(),
    level_proses = '3'
    ;
INSERT INTO tb_hproses SET
    id_proses = NEW.id_proses,
    waktu_hproses = now(),
    level_proses = '4'
    ;
INSERT INTO tb_hproses SET
    id_proses = NEW.id_proses,
    waktu_hproses = now(),
    level_proses = '5'
    ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_qr`
--

CREATE TABLE `tb_qr` (
  `id_qr` int(11) NOT NULL,
  `id_proses` int(11) NOT NULL,
  `qr_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id_upload` int(11) NOT NULL,
  `nim` char(10) DEFAULT NULL,
  `waktu_up` datetime DEFAULT NULL,
  `jenis_berkas` enum('Ijazah','Transkip Nilai') DEFAULT NULL,
  `berkas_upload` varchar(255) DEFAULT NULL,
  `keterangan_upload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_upload`
--

INSERT INTO `tb_upload` (`id_upload`, `nim`, `waktu_up`, `jenis_berkas`, `berkas_upload`, `keterangan_upload`) VALUES
(11, '190102020', '2021-09-26 04:45:03', 'Ijazah', 'yhgj', 'fg'),
(17, '190102020', '2021-09-26 04:53:04', 'Ijazah', 'sdf', 'dfg'),
(18, '190102020', '2021-09-27 03:33:36', 'Transkip Nilai', 'awsde', 'afsd');

--
-- Trigger `tb_upload`
--
DELIMITER $$
CREATE TRIGGER `upload_inproses` AFTER INSERT ON `tb_upload` FOR EACH ROW BEGIN
INSERT INTO tb_proses SET
    id_upload = NEW.id_upload,
    waktu_proses = now(),
    level_proses = '1'
    ;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_dashboard`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_dashboard` (
`jumlah_pegawai` bigint(21)
,`jumlah_alumni` bigint(21)
,`jumlah_legalisasi` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_dashboard`
--
DROP TABLE IF EXISTS `v_dashboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dashboard`  AS SELECT (select count(`tb_pegawai`.`nip_npak`) from `tb_pegawai`) AS `jumlah_pegawai`, (select count(`tb_alumni`.`nim`) from `tb_alumni`) AS `jumlah_alumni`, (select count(`tb_upload`.`id_upload`) from `tb_upload`) AS `jumlah_legalisasi` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_hproses`
--
ALTER TABLE `tb_hproses`
  ADD PRIMARY KEY (`id_hproses`),
  ADD KEY `FK_idproses` (`id_proses`),
  ADD KEY `FK_nipnpak` (`nip_npak`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip_npak`);

--
-- Indeks untuk tabel `tb_print`
--
ALTER TABLE `tb_print`
  ADD PRIMARY KEY (`id_print`),
  ADD KEY `FK_nimprint` (`nim`);

--
-- Indeks untuk tabel `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD PRIMARY KEY (`id_proses`),
  ADD KEY `FK_idup` (`id_upload`);

--
-- Indeks untuk tabel `tb_qr`
--
ALTER TABLE `tb_qr`
  ADD PRIMARY KEY (`id_qr`),
  ADD KEY `FK_qridproses` (`id_proses`);

--
-- Indeks untuk tabel `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `FK_nimup` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_hproses`
--
ALTER TABLE `tb_hproses`
  MODIFY `id_hproses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_print`
--
ALTER TABLE `tb_print`
  MODIFY `id_print` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_proses`
--
ALTER TABLE `tb_proses`
  MODIFY `id_proses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_qr`
--
ALTER TABLE `tb_qr`
  MODIFY `id_qr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_hproses`
--
ALTER TABLE `tb_hproses`
  ADD CONSTRAINT `FK_idproses` FOREIGN KEY (`id_proses`) REFERENCES `tb_proses` (`id_proses`),
  ADD CONSTRAINT `FK_nipnpak` FOREIGN KEY (`nip_npak`) REFERENCES `tb_pegawai` (`nip_npak`);

--
-- Ketidakleluasaan untuk tabel `tb_print`
--
ALTER TABLE `tb_print`
  ADD CONSTRAINT `FK_nimprint` FOREIGN KEY (`nim`) REFERENCES `tb_alumni` (`nim`);

--
-- Ketidakleluasaan untuk tabel `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD CONSTRAINT `FK_idup` FOREIGN KEY (`id_upload`) REFERENCES `tb_upload` (`id_upload`);

--
-- Ketidakleluasaan untuk tabel `tb_qr`
--
ALTER TABLE `tb_qr`
  ADD CONSTRAINT `FK_qridproses` FOREIGN KEY (`id_proses`) REFERENCES `tb_proses` (`id_proses`);

--
-- Ketidakleluasaan untuk tabel `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD CONSTRAINT `FK_nimup` FOREIGN KEY (`nim`) REFERENCES `tb_alumni` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
