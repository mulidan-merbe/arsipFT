-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 10:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `Id` int(11) NOT NULL,
  `Id_ketegori` int(11) NOT NULL,
  `No_arsip` varchar(20) NOT NULL,
  `Nama_file` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Tanggal_upload` date NOT NULL,
  `Tanggal_update` date NOT NULL,
  `File` varchar(255) NOT NULL,
  `Histori` varchar(50) NOT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `Id` int(11) NOT NULL,
  `Nomor_surat` text NOT NULL,
  `Tentang` text NOT NULL,
  `Berkas` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`Id`, `Nomor_surat`, `Tentang`, `Berkas`, `Tanggal`) VALUES
(1, '3354/UN22/KP/2021', 'PERUBAHAN ATAS KEPUTUSAN REKTOR NOMOR 3186/UN22/KP/2021 TENTANG PANITIA PERSIAPAN PROGRAM PENDIDIKAN PROFESI ARSITEK (PPAr) FAKULTAS TEKNIK UNIVERSITAS TANJUNGPURA', '0', '2021-12-07'),
(2, '1964/UN22/PG/2021', 'TIM REVIEWER INTERNAL PENELITIAN DAN PENGABDIAN MASYARAKAT UNIVERSITAS TANJUNGPURA TAHUN 2021', 'A', '2021-12-07'),
(3, '3185/UN22/KP/2021', 'TIM TASK FORCE PERSIAPAN PENDIRIAN PROGRAM STUDI DOKTOR (S3) TEKNIK ELEKTRO FAKULTAS TEKNIK UNIVERSITAS TANJUNGPURA', '-', '2021-12-07'),
(5, '1553/UN22/KP/2021', 'ASESOR PENILAIAN BEBAN KERJA  DOSEN DI LINGKUNGAN UNIVERSITAS TANJUNGPURA TAHUN 2021', '-', '2021-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `datas_anggota`
--

CREATE TABLE `datas_anggota` (
  `Id_datas_anggota` int(11) NOT NULL,
  `Id_datas` int(11) NOT NULL,
  `Status` text NOT NULL,
  `Nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datas_anggota`
--

INSERT INTO `datas_anggota` (`Id_datas_anggota`, `Id_datas`, `Status`, `Nama`) VALUES
(1, 1, 'Penanggung Jawab Umum', 'Prof. Dr. Garuda Wiko, S.H., M.Si., FCBArb (Rektor)'),
(2, 1, 'Pengarah', 'Dr. Ir. H. Radian, M.S. (Wakil Rektor Bid. Akademik)');

-- --------------------------------------------------------

--
-- Table structure for table `dep`
--

CREATE TABLE `dep` (
  `Id_dep` int(11) NOT NULL,
  `Department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dep`
--

INSERT INTO `dep` (`Id_dep`, `Department`) VALUES
(1, 'Admin'),
(2, 'Wakil Dekan 1'),
(3, 'Wakil Dekan 2'),
(5, 'Wakil Dekan 3'),
(6, 'KTU'),
(7, 'Keupeg'),
(8, 'Kesma'),
(9, 'Kajur Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `Id_disposisi` int(11) NOT NULL,
  `Id_masuk` int(11) NOT NULL,
  `Id_tujuan` int(11) NOT NULL,
  `Id_dep` int(11) NOT NULL,
  `Keterangan` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`Id_disposisi`, `Id_masuk`, `Id_tujuan`, `Id_dep`, `Keterangan`, `Status`, `Tanggal`) VALUES
(1, 308, 1, 2, 'bla', 'Terima', '2021-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `Id_dosen` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `JK` varchar(50) NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `Gol` int(11) NOT NULL,
  `Jab` varchar(50) NOT NULL,
  `NIDN` int(20) NOT NULL,
  `Jnj` varchar(50) NOT NULL,
  `Id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Id_dosen`, `Nama`, `NIP`, `JK`, `Agama`, `Gol`, `Jab`, `NIDN`, `Jnj`, `Id_prodi`) VALUES
(1, 'Ir.Elvira, M.T., Ph.D., IPM', '196707141993031002', 'L', 'Islam', 6, 'LK', 14076701, 'S3', 1),
(2, 'Dr.rer.nat. Ir. R. M. Rustamaji, M.T., IPU.       ', '196801161994031003', 'L', 'Islam ', 5, 'LK', 16016802, 'S3', 1),
(3, 'Dr.-Ing. Ir. Eka Priadi., M.T.                    ', '196303241990031002', 'L', 'Islam', 5, 'LK', 24036303, 'S3', 1),
(4, 'Dr. Nurhayati, S.T., M.T.                        ', '197101041998022001', 'P', 'Islam', 5, 'LK', 4017101, 'S3', 1),
(5, 'Dr.-Ing. Ir. Slamet Widodo, M.T., IPM.            ', '196712231992031002', 'L', 'Islam', 5, 'LK', 23126704, 'S3', 1),
(6, 'Dr. Ir. Kartini, M.T., IPU, ASEAN Eng.            ', '195812151988102001', 'P', 'Islam', 7, 'LK', 15125806, 'S3', 13),
(7, 'Ir. Yoke Lestyowati, M.T., IPM.                   ', '196304231989032002', 'P', 'Islam', 7, 'LK', 23046303, 'S2', 13),
(8, 'Ir. M. Indrayadi, M.T., IPM.                      ', '195708251984031001', 'L', 'Islam', 6, 'LK', 25085707, 'S2', 13),
(9, 'Ir. Komala Erwan, M.T., IPM.', '195805101984031003', 'L', 'Islam', 6, 'LK', 10055808, 'S2', 13),
(10, ' Ir. Akhmadali, M.Sc.                             ', '195807031988101001', 'L', 'Islam', 6, 'LK', 3075802, 'S2', 13),
(11, 'Prof. Dr. Hj. Henny Herawati, S.T., M.T,. IPM.    ', '197201311996012001', 'P', 'Islam', 6, 'GB', 31017201, 'S3', 13),
(12, 'Ir. Faisal, M.T.                                  ', '196207271992021001', 'L', 'Islam', 5, 'LK', 27076213, 'S2', 13),
(13, 'Ir. Safaruddin M. Nuh, M.T.                       ', '196506091992021001', 'L', 'Islam', 5, 'LK', 9066505, 'S2', 13),
(14, 'Erwin Sutandar, S.T., M.T.                        ', '197209301997021002', 'L', 'Islam', 5, 'LK', 30097201, 'S2', 13),
(15, 'Ferry Juniardi, ST., M.T.                        ', '197506171999031003', 'L', 'Islam', 5, 'LK', 17067508, 'S2', 13),
(16, 'Ir. Aprianto, M.T.                                ', '195804151987031002', 'L', 'Islam', 5, 'LK', 15045803, 'S2', 13),
(17, 'Dr. Stefanus B. Soeryamassoeka, S.T., M.T.', '197212262000031001', 'L', 'Katolik', 6, 'LK', 26127202, 'S3', 13),
(18, 'M.Yusuf, ST., M.T., IPM.      ', '197005201998021001', 'L', 'Islam', 6, 'LK', 20057001, 'S2', 13),
(19, 'Eti Sulandari, ST, MT                 ', '197107201998022001', 'P', 'Islam', 5, 'LK', 20077101, 'S2', 13),
(20, 'Siti Mayuni, M.T.', '196805181993032002', 'P', 'Islam', 5, 'LK', 18056805, 'S2', 13),
(21, 'Heri Azwansyah, S.T., M.T.              ', '197311302000121001', 'L', 'Islam', 5, 'LK', 30117301, 'S2', 13),
(22, 'Sumiyattinah, S.T., M.T., IPM.                    ', '197111031997022001', 'P', 'Islam', 5, 'LK', 3117102, 'S2', 13),
(23, 'Herwani, ST, MT', '197107261998021001', 'L', 'Islam', 4, 'L', 26077101, 'S2', 13);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `Id_gol` int(11) NOT NULL,
  `golongan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`Id_gol`, `golongan`) VALUES
(1, 'III/a'),
(2, 'III/b'),
(3, 'III/c'),
(4, 'III/d'),
(5, 'IV/a'),
(6, 'IV/b'),
(7, 'IV/c'),
(8, 'IV/d');

-- --------------------------------------------------------

--
-- Table structure for table `ketegori`
--

CREATE TABLE `ketegori` (
  `Id` int(11) NOT NULL,
  `Nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketegori`
--

INSERT INTO `ketegori` (`Id`, `Nama_kategori`) VALUES
(1, 'Surat Masuk'),
(2, 'Surat Tugas');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `Id_masuk` int(11) NOT NULL,
  `Asal_surat` varchar(255) NOT NULL,
  `Nomor_surat` text NOT NULL,
  `Tanggal_surat` date NOT NULL,
  `Tanggal_terima` date NOT NULL,
  `Ringkasan` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Id_tujuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`Id_masuk`, `Asal_surat`, `Nomor_surat`, `Tanggal_surat`, `Tanggal_terima`, `Ringkasan`, `Status`, `Id_tujuan`) VALUES
(3, 'Pan Retret Cafatifa', '13/1-A/Pan.RC/XI/21', '2021-11-11', '2021-11-26', 'Permohonan Rekomendasi Proposal Pengajuan Data\r\n', '', 1),
(4, 'HIMATA Tek Pertambangan', '001/A/Pan-5Th-ANNIVERSARY-HIMATA/XI/21', '2021-11-04', '2021-11-26', 'Permohonan SK Kepanitian\r\n', '', 0),
(5, 'Kajur Tek-EL', '759/UN22.4/KU/EL-FT/XI/21', '2021-11-11', '2021-11-26', 'Usulan Data Praktikum Semester Ganjil TA 2021/2022\r\n', '', 1),
(6, 'An. Ayong Hendro, ST, MT, IPM', '-', '2021-11-09', '2021-11-26', 'Permohonan SK Reviewer Jurnal Nasional dan Internasional\r\n', '', 0),
(7, 'Kepala Balai Wilayah Sungai Kalimantan I Pontianak', 'UM.0102/BWS8/1139', '2021-11-04', '2021-11-11', 'Undangan Open Forum Penguatan Sinergitas Antar Stakeholder dalam Menghadapi Pontensi Banjir Akibat Fenomena La Nina Di Provinsi Kalimantan Barat\r\n', '', 1),
(8, 'Direktur KUI Untan', '091/UN22.25/KS/2021', '2021-11-03', '2021-11-10', 'Online Winter Exchange Program\r\n', '', 1),
(9, 'An. Dr. Eng. Ferry Hadari, ST, M.Eng, IPM', '-', '2021-11-10', '2021-11-10', 'Permohonan Surat Tugas\r\n', '', 1),
(10, 'Warek II Untan', 'ITT24/UN22/LK/2021', '2021-11-05', '2021-11-11', 'Usulan Petugas Impentarisasi BMN TA 2021\r\n', '', 1),
(11, 'Kajur Tek Lingkungan', '309/UN22.4/PP/TL/XI/2021', '2021-11-08', '2021-11-11', 'Permohonan Pengajuan Alat Praktikum\r\n', '', 1),
(12, 'Kajur Tek Lingkungan', '310/UN22.4/PP/TL/XI/2021', '2021-11-08', '2021-11-11', 'Permohonan Pengajuan Barang Inventaris Lab Kualitas Lingkungan\r\n', '', 1),
(13, 'Kajur Tek Kelautan', '27/UN22.4/TK/XI/2021', '2021-11-10', '2021-11-11', 'Mohon Bantuan Pendanaan Untuk Kegiatan Mahasiswa Jurusan Tek Kelautan\r\n', '', 1),
(14, 'MAPALA FT', '107/K/Pan-DIKSAR-XX111/MPL/XI/21', '2021-11-10', '2021-11-11', 'Permohonan Audiensi\r\n', '', 1),
(15, 'Pan PMKM BINA DESA Jurusan Informatika', '004/A/Pan-PMKM.22/XI/21', '2021-11-10', '2021-11-11', 'Permohonan Surat Rekomendasi\r\n', '', 1),
(16, 'Ketua Lemlit', '8944/UN22.10/TU/2021', '2021-11-09', '2021-11-11', 'Workshop Penulisan Buku Ber-ISBN\r\n', '', 1),
(17, 'Ketua Lemlit', '8950/UN22.10/TU/2021', '2021-11-09', '2021-11-08', 'Workshop Pengamatan Persepsi Reviewer Internal dalam rangka Penilaian Penelitian dan PKM DIPA Fak di Untan Tahun 2021\r\n', '', 1),
(18, 'PLN', '3358/STH.01.04/C/2000000/21', '2021-11-08', '2021-11-09', 'Persetujuan Pengambilan Data Penelitian Skripsi\r\n', '', 1),
(19, 'Ketua LP3M', '3303/UN22.11/TU/2021', '2021-11-08', '2021-11-09', 'Kegiatan Benchmarking Penjamin Mutu dan Akreditasi Internasional, Tgl 29-30 Nov 21, Pengelaran Sistem Penjaminan Mutu dan Akreditasi Internasional (Terlampir)\r\n\r\n', '', 1),
(20, 'Pimpinan BAZNAS Prov KALBAR', '280/BAZNAS-KB/XI/2021', '2021-11-08', '2021-11-10', 'Pengumpulan donasi bencana banjir\r\n', '', 1),
(21, 'Rektor Untan', '1664/UN22/KP/2021', '2021-11-05', '2021-11-10', 'Pemberian NIDN bagi Dosen Non-ASN di lingkungan Untan\r\n', '', 1),
(22, 'Ka Lab Analisis Dan Komputasi Manajemen Kantork', '01/AKMK/JS/VII/2021', '2021-07-12', '2021-09-14', 'Pelaksanaan Praktikum\r\n', '', 1),
(23, 'Warek II Untan', '12698/UN22/KP/2021', '2021-09-08', '2021-09-13', 'Hasil Penilaian Usul Pak Dosen An. Ayong Hendro, ST, MT\r\n', '', 1),
(24, 'An Aji Ali Akbar. M.Si', '-', '2021-09-13', '2021-09-13', 'Permohonan Surat Tugas\r\n', '', 1),
(25, 'Kajur Tek Pertambangan', '86/UN22.4/TU/Pertambangan/21', '2021-09-10', '2021-09-13', 'Pengaktifan pnak Presensi BDR Dosen\r\n', '', 1),
(26, 'Pembimbing SPOIRUM', '-', '2021-09-13', '2021-09-13', 'Permohonan Dana\r\n', '', 1),
(27, 'Kep BUK Untan', '12763/UN22.13/KP/2021', '2021-09-09', '2021-09-13', 'Surat Pengantar SK, Jabatan Dosen dan SK Pengaktifan Kembali dalam Jabatan Akademik\r\n', '', 1),
(28, 'Ketua LemLit dan PKM', '7032/UN22.10/KM/2021', '2021-09-13', '2021-09-13', 'Partisipasi Dosen dan Mahasiswa Kegiatan Kepang Bakal di Kab Kubu Raya\r\n', '', 1),
(29, 'Ketua LP3M Untan', '2192/UN22.11/TU/21', '2021-09-09', '2021-09-14', 'Surat Pengantar Buku Saku Membangun Pusiliensi Untuk Mahasiswa Pusat Bimbingan Konseling Untan\r\n', '', 1),
(30, 'Kajur Informatika', '378/UN22.4/TU/IF/IX/21', '2021-09-13', '2021-09-14', 'Permohonan Surat Tugas\r\n', '', 1),
(31, 'Kajur Informatika', '379/UN22.4/TU/IF/IX/21', '2021-09-13', '2021-09-14', 'Permohonan Surat Tugas Sebagai Narasumber\r\n', '', 1),
(32, 'Kajur PWK', '49/UN22.4/EP/PWK/IX/21', '2021-09-10', '2021-09-14', 'Permohonan Surat Tugas\r\n', '', 1),
(33, 'PT Agronusa Investama', '229/ANI-HRR/EXT/IX/21', '2021-09-14', '2021-09-14', 'Permohonan Data Alumni\r\n', '', 1),
(34, 'Dit Reskrimum', 'B/340/IX/2021/Ditreskrimum', '2021-09-09', '2021-09-14', 'Permohonan Pemeriksaan BB Digital Forensik\r\n', '', 1),
(35, 'Resor Kota Pontianak Kota', 'B/1912/IX/Res.1.24/21', '2021-09-13', '2021-09-14', 'Permohonan Tenaga Ahli ITE\r\n', '', 1),
(36, 'Kajur Tek Industri', '224/UN22.4/PP/TIN-D/X/2021', '2021-09-15', '2021-09-16', 'Usulan Kepala Laboratorium (Optimasi dan Simulasi)\r\n', '', 1),
(37, 'Kajur Tek Industri', '225/UN22.4/PP/TIN-D/X/2021', '2021-09-15', '2021-09-16', 'Usulan Kepala Laboratorium (Studio Inovasi Manajemen Industri)\r\n', '', 1),
(38, 'Kajur Tek Industri', '226/UN22.4/PP/TIN-D/X/2021', '2021-09-15', '2021-09-16', 'Usulan Kepala Laboratorium (Sistem Produksi)\r\n', '', 1),
(39, 'Juni V. R', '-', '2021-08-25', '2021-09-15', 'Permohonan Cuti Akademik\r\n', '', 1),
(40, 'Direktur Reskrimum Polda Kalbar ', 'B/341/IX/2021/Ditreskrimum', '2021-09-14', '2021-09-15', 'Permohonan Pemeriksaan BB digital forensik dan keterangan ahli ITE\r\n', '', 1),
(41, 'Kajur Arsitektur', '76/UN22.4/TU/Arsitektur/2021', '2021-09-07', '2021-09-15', 'Proposal Kegiatan Penyusunan Borang Prodi Profesi Arsitektur\r\n', '', 1),
(42, 'Kepala BUK Untan', '12678/UN22.13/PP/2021', '2021-09-08', '2021-09-15', 'Surat Pengantar (SK Pangkat Dosen An Zairin Z\r\n', '', 1),
(43, 'Plt Kajur Kelautan', '23/UN22.4/T.K.IX.2021', '2021-09-15', '2021-09-15', 'Permohonan Surat Pengantar Menghadap BWSK I\r\n', '', 1),
(44, 'Karo SDM Polda Kalbar', 'B/1728/VIII/DIK.2.2/2021/Po/SDM', '2021-08-23', '2021-09-14', 'Permintaan Tenaga Ahli Auditor IT (P. Helfi)\r\n', '', 1),
(45, 'HIMAP Untan (PWK)', '014/A/HMAP-Untan/VIII/2021', '2021-08-12', '2021-09-14', 'Permohonan SK Hari Tata Ruang 2021\r\n', '', 1),
(46, 'Plt Kajur Tek Industri', '229/UN22.4/PP/TIN-D/IX/2021', '2021-09-17', '2021-09-17', 'Permohonan SK Kepanitian Kegiatan\r\n', '', 1),
(47, 'Plt Kajur Tek Pertambangan FT Untan', '87/UN22.4/PP/Pertambangan-FT/21', '2021-09-17', '2021-09-17', 'Permohonan Surat Rekomendasi Peserta Pelatihan\r\n', '', 1),
(48, 'An. Direktur Reskrimsus Polda Kalbar', 'B/2629/IX/HUK.11.2/2020Ditreskrimsus-5', '2021-09-15', '2021-09-17', 'Permohonan Keterangan Ahli ITE dan Digital Forensik\r\n', '', 1),
(49, 'Ketua LP3M Untan', '2345/UN22.11/PJ/2021', '2021-09-16', '2021-09-17', 'Workshop External Benchmarking Penjaminan Mutuk di LLDikti XI dan Workshop PMF Untan\r\n', '', 1),
(50, ' An Fadel W.M (T Sipil)', '-', '2021-09-16', '2021-09-16', 'Permohonan Pindah Kuliah An Fadel W.M (T Sipil)\r\n', '', 1),
(51, 'Rektor Untan', '3185/UN22/KP/2021', '2021-09-09', '2021-09-16', 'SK Rektor Tim Task Force Persiapan Pendirian Program Studi Doktor (S3) Teknik Elektro FT Untan\r\n', '', 1),
(52, 'Rektor Untan', '3186/UN22/KP/2021', '2021-09-09', '2021-09-16', 'SK Rektor Panitia Persiapan Program Pendidikan Profesi Arsitek (PPAr) Fakultas Teknik\r\n', '', 1),
(53, 'Dekan F Kehutanan Untan', '3852/UN22.7/KU/2021', '2021-09-15', '2021-09-16', 'Permohonan Narasumber (Ferry Hadary)\r\n', '', 1),
(54, 'Rektor Untan', '13222/UN22/KP/2021', '2021-09-16', '2021-09-21', 'Undangan Menghadiri Pelantikan dan Pengangkatan Sumpat Jabatan Dekan Fak Kehutanan Untan\r\n', '', 1),
(55, 'Ketua Kim Erwin Sutandar', '08/UN22.4/Senat-Kajur/2021', '2021-09-17', '2021-09-21', 'Surat Pengantar Hasil Pemilihan Ketua Jurusan, Ka Prodi dan Anggota Senat Fak-Teknik Untan Periode 2021-2025\r\n', '', 1),
(56, 'Telkom Indonesia', 'Tel.4559/PS 200/HCB-1000000/21', '2021-09-15', '2021-09-21', 'Surat Pengantar Hasil Pemilihan Ketua Jurusan, Ka Prodi dan Anggota Senat Fak-Teknik Untan Periode 2021-2025\r\n', '', 1),
(57, 'SPAIRUM (Naufal F.I / Hafiz M)', '008/03/EET/I/2021', '2021-09-20', '2021-09-20', 'Permohonan Surat Rekomendasi/Pengantar\r\n', '', 1),
(58, 'Kajur Tek Kimia', '152/UN22.4/PP/Kimia-FT/09/2021', '2021-09-20', '2021-09-20', 'Permohonan Surat Pengantar Kuliah Lapangan Jurusan Tek Kimia\r\n', '', 1),
(59, 'HR. Manager Indomaret', '227/B!.04/HRD/IX/2021', '2021-09-20', '2021-09-20', 'Permohonan Proses Perekrutan Calon Supervisor Traineer dari alumni FT Untan\r\n', '', 1),
(60, 'Kajur Arsitektur', '78/UN22.4/PP/Arsitektur/2021', '2021-09-17', '2021-09-17', 'Rekomendasi Tugas Belajar Dosen An Jawas D P\r\n', '', 1),
(61, 'An. Reza Fahroni', '-', '2021-07-26', '2021-09-22', 'Permohonan Cuti Akademik\r\n', '', 1),
(62, 'Kajur Tek Elektro', '658/UN22.4/PT/EL-FT/09/21', '2021-09-21', '2021-09-22', 'Usulan Kepala Lab dan Ketua Kelompok Keahlian Telekomunikasi\r\n', '', 1),
(63, 'Kajur Tek Elektro', '657/UN22.4/PT/EL-FT/09/21', '2021-09-21', '2021-09-22', 'Usulan Kepala Lab dan Ketua Kelompok Keahlian Sisten dan Distribusi Tenaga Listrik\r\n', '', 1),
(64, 'Kajur Informatika', '390/UN22.4/TU/IF/IX/2021', '2021-09-20', '2021-09-21', 'Permohonan Dana Kegiatan dan SK Kepanitiaan, Proposal Kuliah Daring, Kuliah Lapangan Hakrid, Sertifikat Kompetensi Mahasiswa Informatika dgn 2 Skema\r\n\r\n', '', 1),
(65, 'Ketua LP3M Untan', '2382/UN22.11/TU/2021', '2021-09-20', '2021-09-21', 'Undangan Workshop Jumat 24 September 2021 di Hotel Golden Tulip Pontianak\r\n', '', 1),
(66, 'Tek Industri', '-', '2021-09-20', '2021-09-21', 'Usulan Kegiatan Evaluasi dan Penyempurnaan Kurikulum\r\n', '', 1),
(67, 'LKI 2021 Tek Industri', '514/A/PAN-LKI 2021/IX/2021', '2021-09-20', '2021-09-21', 'Permohonan Digitalisasi Tanda Tangan\r\n', '', 1),
(68, 'Kajur Arsitektur', '79/Un22.4/PP/Arsitektur/2021', '2021-09-22', '2021-09-23', 'Usulan Nama Calon Kepala Laboratorium\r\n', '', 1),
(69, 'Panitia Workshop Kurikulum Tek Kelautan', '25/UN22.4/TK/IX/2021', '2021-09-22', '2021-09-23', 'Permohonan Permintaan Plakat\r\n', '', 1),
(70, 'Dekan Fak Kedokteran', '6082/UN22.4/TU/2021', '2021-09-21', '2021-09-23', 'Permohonan Narasumber An Ferry Hadari\r\n', '', 1),
(71, 'Panitian E-Sport Competition', '093/A/PAN-DC FT/IX/2021', '2021-09-21', '2021-09-22', 'Surat Permohonan Penambahan Bandwith WiFI\r\n', '', 1),
(72, 'Ketua LP3M Untan', '2404/UN22.11/PJ/2021', '2021-09-21', '2021-09-22', 'Undangan Pembukaan Workshop LP3M, Kamis 23 September 2021 Di Golden Tulip\r\n', '', 1),
(73, 'Kajur PWK', '61/UN22.4/EP/PWK-FT/IX/2021', '2021-09-22', '2021-09-22', 'Permohonan Ijin dan Pemberitahuan Kuliah Lapangan\r\n', '', 1),
(74, 'Kajur PWK', '62/UN22.4/EP/PWK-FT/IX/2021', '2021-09-22', '2021-09-22', 'Permohonan Surat Tugas dan SK Kuliah Lapangan\r\n', '', 1),
(75, 'An Anggota KK Bidang ELDAS', '37/UN22.4/ELDAS/IX/2021', '2021-09-15', '2021-09-22', 'Permohonan Pengusulan SK Ka Lab dan Kelompok Keahlian\r\n', '', 1),
(76, 'Kajur Tek Industri', '232/UN22.4/PP/TIN-D/IX/2021', '2021-09-24', '2021-09-24', 'Permohonan Bantuan Dana (program changemaker youth IV pesona lombok)\r\n', '', 1),
(77, 'WD I F Kedokteran', '6104/UN22.9/PP/2021', '2021-09-22', '2021-09-24', 'Permohonan Menjadi Pemateri Narasumber (An Isna A)\r\n', '', 0),
(78, 'Rektor Untan', '13457/UN22/KP/2021', '2021-09-20', '2021-09-24', 'Batas Akhir Pengisian Pemuktahiran Data Mandiri (PDM) pada MySapte\r\n', '', 1),
(79, 'Kajur Informatika', '394/UN22.4/TU/IF/IX/2021', '2021-09-22', '2021-09-23', 'Usulan Nama Kalab dan Penempatan nama lab di Lingkungan Jurusan Informatika\r\n', '', 1),
(80, 'Kajur Tek Elektro', '664/UN22.4/KU/Elektro-FT/09/21', '2021-09-23', '2021-09-23', 'Pengantar Proposal Kegiatan (sertifikasi kompetensi mahasiswa)\r\n', '', 1),
(81, 'Wadek I FT', '5491/UN22.4/TU/21', '2021-09-23', '2021-09-23', 'Usulan Nama Kalab (Jur Sipil)\r\n', '', 1),
(82, 'Kajur Tek Pertambangan', '91/UN22.4/TU/Pertambangan-FT/21', '2021-09-23', '2021-09-23', 'Permohonan Pengadaan Barang\r\n', '', 1),
(83, 'Kajur Tek Lingkungan', '21/UN22.4/DL/TL/IX/2021', '2021-09-21', '2021-09-23', 'Pengantar (Usulan Kalab)\r\n', '', 1),
(84, 'Kajur Tek Elektro, Kajur Tek Industri, Kajur Tek Mesin', '-', '2021-09-27', '2021-09-23', 'Talent Scout PT Telkom Indonesia (Persero) Tbk\r\n', '', 1),
(85, 'Ketua LP3M Untan', '2475/UN22.11/TU/2021', '2021-09-27', '2021-11-27', 'Pendampingan Penyusunan IPEPA Prodi S1 T Lingkungan Selasa 28 Septembe 2021\r\n', '', 1),
(86, 'Ketua LPPKM Untan', '7464/UN22.10/TU/2021', '2021-09-24', '2021-09-27', 'Workshop Open Journal System (OJS) 2 , Jumat 1 oktober 2021 via zoom\r\n', '', 1),
(87, 'M. Lutfi (D1041171014)', '-', '2021-09-27', '2021-09-27', 'Permohonan Bantuan Data (Lomba SNEDCO)\r\n', '', 1),
(88, 'Kaprodi Magister Tek Sipil', '121/UN22.4/HM/MTS/2021', '2021-09-27', '2021-09-27', 'Permohonan Dosen Luar Biasa\r\n', '', 1),
(89, 'Kajur Tek Lingkungan', '24/UN22.4/Kulap/TL/IX/2021', '2021-09-23', '2021-09-24', 'Pengantar (Proposal Kuliah Lapangan)\r\n', '', 1),
(90, 'KaBiro Umum dan Keuangan Untan', '13699/UN22/KP/2021', '2021-09-23', '2021-09-24', 'Penyesuaian Ijazah tenaga honor/kontrak di lingkungan Untan\r\n', '', 1),
(91, 'Ketua Umum LSMI Al Istiqomah', '014/A/LSMI.Al Istiqomah/IX/21', '2021-09-23', '2021-09-24', 'Permohonan Menjadi Pemateri (AN. Ferry H)\r\n', '', 1),
(92, 'Kajur arsitektur', '80/UN22.4/TU/Prodi-Arsitektur/21', '2021-09-23', '2021-09-24', 'Permohonan Dana (Evaluasi Dan Revisi Kurikulum Arsitektur 2021)\r\n', '', 1),
(93, 'Kajur Tek Elektro', '660/UN22.4/KU/Elektro-FT/09/2021', '2021-09-23', '2021-09-24', 'Usulan Pencairan Dana Praktikum Semester Ganjil TA 2021/2022 (Lab Elektronika Dasar)\r\n', '', 1),
(94, 'Kajur Informatika', '402/UN22.4/TU/IF/IX/2021', '2021-09-28', '2021-09-29', 'Permohonan Dana Kegiatan Revisi Kurikulum Prodi Informatika 2021\r\n', '', 1),
(95, 'Magister Tek Sipil (Ketua Prodi)', '122/UN22.4/AM.MTS/2021', '2021-09-28', '2021-09-29', 'Usulan Kegiatan KKL\r\n', '', 1),
(96, 'Panitia HATARU PWK', '002/A/PAN-HTR/IX/2021', '2021-09-28', '2021-09-28', 'Permohonan Audiensi (HATARU 2021)\r\n', '', 1),
(97, 'Panitia HATARU PWK', '003/A/PAN-HTR/IX/2021', '2021-09-28', '2021-09-28', 'Permohonan Fasilitas Materi (HATARU 2021)\r\n', '', 1),
(98, 'Kepala Kepolisian Resor Singkawang', 'B-2820/IX/RES.1.24/2021/Reskrim', '2021-09-28', '2021-09-28', 'Permohonan Keterangan Ahli Informasi dan Tranksaksi Elektronik Serta Pemeriksaan Digitak Forensik Handphone Tersangka\r\n', '', 1),
(99, 'Kadis PUPR Kab Kuburaya', '650/1074/DPUPRPRKP-TR/2021', '2021-09-23', '2021-09-28', 'Usulan Nama Untuk Pembentukan Forum Penataan Ruang Kabupaten Kuburaya\r\n', '', 1),
(100, 'Dr. Aji Ali Akbar, M.Si', '-', '2021-09-28', '2021-09-28', 'Rapat Validasi Dokumen KLHS RPJMD Th 2021-2024, Sambas (Dinas Lingkungan Hidup Ptk)\r\n', '', 1),
(101, 'Kajur Tek Elektro', '666/UN22.4/FT/Elektro-FT09/21', '2021-09-27', '2021-09-27', 'Permohonan Surat Pengantar PKM (Ade Elbani)\r\n', '', 1),
(102, 'Ketua Umum CAFATIFA', '08/I-A/CAFATIFA UNTAN/IX/21', '2021-09-27', '2021-09-27', 'Permohonan Rekomendasi (Renovasi Sekretariat CAFATIFA)\r\n', '', 1),
(103, 'Kajur PWK', '64/UN22.4/EP/PWK-FT/IX/2021', '2021-09-28', '2021-09-30', 'Surat Permohonan SK Kuliah Umum\r\n', '', 1),
(104, 'Haris M (Informatika) D1041201023', '-', '2021-09-28', '2021-09-29', 'Pengantar Proposal Kegiatan (Persiapan Prodi S3 T Elektro)\r\n', '', 1),
(105, 'Wadek I FT', '5593/UN22.4/EP/2021', '2021-09-29', '2021-09-29', 'Permohonan Pencantuman TTD WD I Pada UHS mahasiswa FT\r\n', '', 1),
(106, 'Kajur Tek Elektro', '670/UN22.4/PT/Elektro-FT/09/2021', '2021-09-28', '2021-09-29', 'Usulan Ka Lab dan Nama KK Teknik Tegangan Tinggi\r\n', '', 1),
(107, 'Kajur Tek Kimia', '5549/UN22.4/PP/09/2021', '2021-09-27', '2021-09-29', 'Undangan Kuliah Umum, Sabtu 2 Oktober 2021 Via Zoom\r\n', '', 1),
(108, 'M. Sofitra', '-', '2021-09-28', '2021-09-29', 'Permohonan Surat Tugas Narasumber Pelatihan AMI\r\n', '', 1),
(109, 'Manager Pontianak PT Taspen (Persero)', 'SRT-369/C.1.5/092021', '2021-09-21', '2021-09-29', 'Permintaan Nomor Handphone\r\n', '', 1),
(110, 'Rektor Untan', '13888/UN22/TU.01.01/2021', '2021-09-27', '2021-09-29', 'Undangan Rapat Dewan Untan, Kamis 30 September 2021 Via Zoom\r\n', '', 1),
(111, 'ketua Dekan Cup', '105/A/PAN-DC FT/2021', '2021-10-01', '2021-10-01', 'Undangan\r\n', '', 1),
(112, 'Kajur Tek Lingkungan', '233/UN22.4/PP/TIN-D/X/21', '2021-10-01', '2021-10-01', 'Pengantar Permohonan Bahan Praktikum\r\n', '', 1),
(113, 'BRIN Plt Dir Pengembangan Kompetensi', 'B-142/IV/DL.02.01/9/21', '2021-09-30', '2021-10-01', 'Penawaran Peserta Pelatihan Teknologi dan Keselamatan PLTN\r\n', '', 1),
(114, 'Ketua LP3M Untan', '2447/UN22.11/TU/2021', '2021-09-24', '2021-10-01', 'Calon Peserta Pelatihan AMI\r\n', '', 1),
(115, 'Ketua LP3M Untan', '2597/UN22.11/TU/2021', '2021-09-30', '2021-09-30', 'Pendampingan Penyusunan IPEPA dan IAPS 4.0, Jumat 1 Oktober 2021, Di Aula LP3M Untan\r\n', '', 1),
(116, 'Ketua LP3M Untan', '2598/UN22.11/TU/2021', '2021-09-30', '2021-09-30', 'Pendampingan Penyusunan IPEPA dan IAPS 4.0, Jumat 1 Oktober 2021, Zoom Meeting\r\n', '', 1),
(117, 'Kajur PWK', '65/UN22.4/EP/PWK-FT/XI/27', '2021-09-28', '2021-09-30', 'Surat Pemberitahuan Kuliah Umum, Sabtu 5 Oktober 2021\r\n', '', 1),
(118, 'Kajur Informatika', '401/UN22.4/TU/IF/IX/21', '2021-09-28', '2021-10-01', 'Usulan Ruang Lab dan Renovasi Gedung di Lingkungan Jurusan Informatika\r\n', '', 1),
(119, 'HMTK', '017/A/HMTK/FT/IX/21', '2021-09-30', '2021-10-01', 'Permohonan Tanda Tangan Sertifikat\r\n', '', 1),
(120, 'Kep Satker Balai Prasana Pemukiman Pemukiman Wilayah Kal Bar', 'UM02.02.CB21/PKP/5423/21', '2021-09-15', '2021-10-01', 'Permohonan Pelaksanaan Kajian Teknis dan Penanganan Pasca Konstruksi Promenade Kuala Simpang Kota Singkawanga\r\n', '', 1),
(121, 'Ketua LP3M Untan', '2582/UN22.11/TU/21', '2021-09-30', '2021-10-01', 'Undangan selasa 05 Oktober 2021 Di Hotel Orchard A Yani\r\n', '', 1),
(122, 'Ketua LemLit dan PKM', '7662/UN22.10/TU/21', '2021-09-30', '2021-10-01', 'Permohonan Nama-Nama Kepala Lab Lingkungan Fak Untan\r\n', '', 1),
(123, 'Kajur PWK', '66/UN22.4/EP/PWK/IX/21', '2021-09-30', '2021-10-01', 'Usulan Nama-Nama Untuk Pembentukan Forum Penataan Ruang KKR\r\n', '', 1),
(124, 'An. Intan Tri Herfiska Tek Sipil', '-', '2021-10-01', '2021-10-05', 'Permohonan Pengunduran Diri Sebagai Mahasiswa Fak-Teknik\r\n', '', 1),
(125, 'Ketua LemLit dan PKM', '776/UN22.10/TU/2021', '2021-10-04', '2021-10-05', 'Data Awal Untuk Kegiatan Pendampingan Publikasi Artikel Ilmiah\r\n', '', 1),
(126, 'Ketua Tim', '-', '2021-10-04', '2021-10-04', 'Permohonan Surat Pengantar\r\n', '', 1),
(127, 'Kajur Tek Lingkungan', '255/UN22.4/AK/TL/X/21', '2021-10-01', '2021-10-04', 'Permohonan SK Tim Pengurusan Instrumen Pemantauan dan Evaluasi Peringkat Akreditasi (IPEPA)\r\n', '', 1),
(128, 'Rektor Untan', '-', '2021-09-27', '2021-10-04', 'Undangan Kuliah Umum, Rabu 6 Oktober 2021 Di Hotel Mercure\r\n', '', 1),
(129, 'Jurusan Arsitektur', '86/UN22.4/TU/Arsitektur/21', '2021-10-01', '2021-10-04', 'Permohonan Dana\r\n', '', 1),
(130, 'Rektor Untan', '3354/UN22/KP/2021', '2021-09-28', '2021-10-04', 'Perubahan atas Keputusan Rektor No: 3186/UN22/KP/21, Ttg: Panitia Persiapan Program Pendidikan Profesi Arsitek (PPAr) Fak Teknik Untan\r\n', '', 1),
(131, 'Kajur Tek Lingkungan', '04/UN22.4/DL/TL/X/2021', '2021-10-04', '2021-10-05', 'Permohonan Penerbitan SK\r\n', '', 1),
(132, 'HIMATA Tek Pertambangan', '020/B/SP/HIMATA.FT/X/21', '2021-10-05', '2021-10-05', 'Permohonan Bantuan Dana\r\n', '', 1),
(133, 'Ketua Program Studi MTS', '124/UN22.4/AKMTS/21', '2021-10-05', '2021-10-05', 'Permohonan Berkas Kelengkapan Kegiatan Akreditasi Prodi MTS Untan\r\n', '', 1),
(134, 'Ketua Program Studi MTS', '123/UN22.4/AKMTS/21', '2021-10-05', '2021-10-05', 'Usulan Tim Akreditasi Prodi Magister Teknik Sipil\r\n', '', 1),
(135, 'An Rianti Indah Lestari, SP', '-', '2021-10-05', '2021-10-05', 'Permohonan Ijin Menikah\r\n', '', 1),
(136, 'Ketua CAFATIFA', '07/I-A/CAFATIFAH-Untan/XI/21', '2021-10-05', '2021-10-05', 'Permohonan SK Panitia\r\n', '', 1),
(137, 'AIESEC in Untan', '002/AIESEC Untan/X/21', '2021-09-07', '2021-10-05', 'Permohonan Rekomendasi Kerjasama KKN Project AIESEC In Untan\r\n', '', 1),
(138, 'Kantor ADVOKAT Kota Singkawang', '01/ADV.MU/2021', '2021-10-07', '2021-10-07', 'Permohonan Saksi Ahli\r\n', '', 1),
(139, 'An Aji Ali Akbar. M.Si', '-', '2021-10-07', '2021-10-07', 'Permohonan Surat Tugas\r\n', '', 1),
(140, 'Kajur Tek Lingkungan', '260/UN22.4/AK/TL/2021', '2021-10-06', '2021-10-07', 'Revisi Permohonan SK\r\n', '', 1),
(141, 'Kajur Tek Industri', '238/UN22.4/PT/TIN-D/X/22', '2021-10-06', '2021-10-06', 'Usulan Nama Anggota Tim Peneliti\r\n', '', 1),
(142, 'Kajur Tek Industri', '237/UN22.4/PT/TIN-D/X/21', '2021-10-06', '2021-10-06', 'Usulan Nama Anggota Tim Peneliti\r\n', '', 1),
(143, 'Kajur Tek Industri', '236/UN22.4/PT/TIN-D/X/21', '2021-10-06', '2021-10-06', 'Usulan Nama Anggota Tim Peneliti\r\n', '', 1),
(144, 'Ketua LemLit dan PKM', '7811/UN22.10/TU/2021', '2021-10-05', '2021-10-06', 'Data Editor dan Reviewer Jurnal di Fak Se Untan\r\n', '', 1),
(145, 'Kep BUK Untan', '13878/UN22.13/KP/2021', '2021-09-27', '2021-10-06', 'Penilaian Prestasi Kerja PNS Periode Januari-Juni 2021 dan Rencana Sasaran Kinerja PNS (SKP) Periode II Tahun 2021 (Dosen dan Tendik)\r\n', '', 1),
(146, 'An Charmyllia, ST, M.P.W.K', '-', '2021-10-05', '2021-10-06', 'Surat Lamaran Sebagai Dosen PWK\r\n', '', 1),
(147, 'Ketua LP3M Untan', '2752/UN22.11/TU/2021', '2021-10-07', '2021-10-08', 'Surat Pengantar Dir Dewan Eksekutif BAN-PT\r\n', '', 1),
(148, 'Kajur Tek Industri', '240/UN22.4/PT/TIN-D/X/21', '2021-10-08', '2021-10-08', 'Usulan Nama Peserta Pelatihan\r\n', '', 1),
(149, 'Kajur Tek Lingkungan', '263/UN22.4/AK/TL/X/2021', '2021-10-06', '2021-10-08', 'Permohonan Permintaan Data\r\n', '', 1),
(150, 'Kajur PWK', '67/UN22.4/BP/PWK/X/2021', '2021-10-06', '2021-10-08', 'Permohonan Surat Tugas\r\n', '', 1),
(151, 'Walikota Pontianak', '048/741/Prokopim', '2021-10-07', '2021-10-07', 'Mohon Fasilitas Kunjungan Kerja\r\n', '', 1),
(152, 'An. Dwi Rizaldi Hatmoka, M Ling', '-', '2021-10-05', '2021-10-07', 'Permohonan Untuk Menjadi Dosen Tidak Tetap (DTT)\r\n', '', 1),
(153, 'Kep Balai Jasa Konstruksi Wil V Banjarmasin', 'BK.05.20-KB.7/380', '2021-10-06', '2021-10-07', 'Penyampaian Hasil Pelatihan SIBIMA Konstruksi Untuk Politeknik dan Universitas Se-Kalimantan Tahap II TA 2021\r\n', '', 1),
(154, 'Ketua LP3M Untan', '2630/UN22/TU/2021', '2021-10-01', '2021-10-07', 'Penerimaan Peserta Pelatihan E-Learning Untan\r\n', '', 1),
(155, 'Jurusan Tek Pertambangan', '105/UN22.4/PP/Pertambangan/21', '2021-10-08', '2021-10-08', 'Permohonan Surat Tugas\r\n', '', 1),
(156, 'Kep UPT Lab Terpadu', '318/UN22.17/TU/2021', '2021-10-07', '2021-10-08', 'Penerimaan Peserta Pelatihan UV-VIS, Selasa-Rabu, 12-13 Oktober 21\r\n', '', 1),
(157, 'Ketua LP3M Untan', '2757/UN22.11/TU/2021', '2021-10-07', '2021-10-08', 'Surat Pengantar Pemantauan dan Evaluasi Peringkta Akreditasi Program Studi Penilaian Pemantauan Tahap I\r\n', '', 1),
(158, 'Ketua Himpunan Mahasiswa PWK HATARU', '077/A/PAN-HTR/X/2021', '2021-10-05', '2021-10-08', 'Permohonan Bantuan Dana\r\n', '', 1),
(159, 'Kajur Tek Lingkungan', '266/UN22.4/PP/TL/X/21', '2021-10-08', '2021-10-08', 'Permohonan Surat Tugas\r\n', '', 1),
(160, 'Ketua LP3M Untan', '2753/UN22/TU/2021', '2021-10-07', '2021-10-08', 'Undangan, Senin 11 Oktober 2021 Di Hotel Orchard Perdana Kota Pontianak\r\n', '', 1),
(161, 'Resor Sekadau', 'B/1379/X/Res.1.14.2021', '2021-10-08', '2021-10-11', 'Mohon Bantuan Untuk dimintain Keterangan Sebagai Ahli\r\n', '', 1),
(162, 'Kep UPT TIK Untan', '288/UN22.16/TU/2021', '2021-10-10', '2021-10-11', 'Mohon Buku Pedoman Fakultas\r\n', '', 1),
(163, 'Plt Dir Pengembangan Kompetensi (BRIN)', 'B-378/IV/DL.04.02/10/2021', '2021-10-09', '2021-10-11', 'Pemanggilan Peserta Pelatihan Teknologi dan Keselamatan PLTN\r\n', '', 1),
(164, 'Kep Pusat Riset dan Teknologi Reaktor (BRIN)', 'B-031/V/TN/10/2021', '2021-10-08', '2021-10-11', 'Konsultasi/Diskusi Riset Human Factory dan Kunjungan Laboratorium Eksperimen Tek Industri\r\n', '', 1),
(165, 'Kep Dinas Perhubungan Prov Kal Bar', '005/31/Dishub-B', '2021-10-08', '2021-10-11', 'Rapat Koordinasi, Selasa 12 Oktober 2021\r\n', '', 1),
(166, 'Plt. Ka Prodi Tek Sipil', '770/UN22.4/SIPIL-FT/PP/21', '2021-10-08', '2021-10-08', 'Pengajuan Dosen\r\n', '', 1),
(167, 'Ditreskrimsus-5', 'B/2814/x/huk.11.2/2021/Krimsus-5', '2021-10-04', '2021-10-08', 'Permintaan Tenaga Ahli ITE dan Ahli Forensik\r\n', '', 1),
(168, 'An. Kartini', '-', '2021-10-12', '2021-10-12', 'Permohonan Penelitian\r\n', '', 1),
(169, 'Kajur Tek Industri', '243/UN22.4/PP/TIN-D/X/21', '2021-10-12', '2021-10-12', 'Usulan Kepala Laboratorium\r\n', '', 1),
(170, 'Kep Dinas PU Penataan Ruang', '600/395B/DPRUR/2021', '2021-10-06', '2021-10-12', 'Permohonan Tenaga Ahli Pendamping\r\n', '', 1),
(171, 'Warek I Untan', '14935/UN22/KM/2021', '2021-10-11', '2021-10-12', 'Peserta Magang Kampus Merdeka\r\n', '', 1),
(172, 'An. Joerka Weddnesday Indigo Tek Sipil', '-', '2021-10-05', '2021-10-11', 'Permohonan Cuti Akademik\r\n', '', 1),
(173, 'Warek I Untan', '14843/UN22/AK/2021', '2021-10-08', '2021-10-11', 'Pengisian Kuisioner Kepuasan Dosen dan Tenaga Kependidikan Untan\r\n', '', 1),
(174, 'An. Hilaria Meliana Anpetri Tek Lingkungan', '-', '2021-10-11', '2021-10-11', 'Permohonan Cuti Akademik\r\n', '', 1),
(175, 'AN. Diviera Romansa Tek-EL', '-', '2021-10-11', '2021-10-11', 'Permohonan Cuti Akademik\r\n', '', 2),
(176, 'Ketua Tim Program Pembinaan Kewirausahaan Mahasiswa', '-', '2021-10-11', '2021-10-11', 'Permohonan Ijin Implementasi Miramadai Mahasiswa\r\n', '', 1),
(177, 'Resor Sintang', 'B/1126/X/RES.1.24/2021/Reskrim', '2021-10-13', '2021-10-12', 'Permintaan Print Out Data Layanan Panggilan Keluar Telephone dan WA\r\n', '', 1),
(178, 'Warek I Untan', '15204/UN22/TU/2021', '2021-10-14', '2021-10-12', '-', '', 1),
(179, 'Resor Kota Pontianak Kota', 'B/2094/X/RES.3.3/2021', '2021-10-09', '2021-10-14', 'Permohonan dan Permintaan Keterangan\r\n', '', 1),
(180, 'Ketua Panitia', '-', '2021-10-14', '2021-10-14', 'Permohonan Bantuan Dana Kegiatan Mutu SDM Tenaga Kependidikan\r\n', '', 1),
(181, 'Panitia Webinar HIMATEKLA', '021/A/HIMATEKLA/X/2021', '2021-10-13', '2021-10-13', 'Undangan Webinar, Sabtu 16 Oktober 2021 Via Zoom\r\n', '', 1),
(182, 'Plt Kajur Tek Lingkungan', '270/UN22.4/PP/TL/2021', '2021-10-12', '2021-10-13', 'Permohonan Surat Tugas An Isti Hartika\r\n', '', 1),
(183, 'Panitia Kejuaran BRIDGE ke XXI', '042/A/Pan.PRD-FT Untan/X/21', '2021-10-10', '2021-10-13', 'Undangan Pembukaan Bridge, Jumat 15 Oktober 2021 via Zoom\r\n', '', 1),
(184, 'Haftoh Batubara, ST, M.Se', '-', '2021-10-12', '2021-10-13', 'Permohonan Pengaktifan Kembali Sebagai Dosen Fakultas Teknik An Hafzoh Batubara\r\n', '', 1),
(185, 'Kantor ADVOKAT', '02/ADV.MU/2021', '2021-10-14', '2021-10-15', 'Permohonan Pemeriksaan Digital Forensik\r\n', '', 1),
(186, 'Kejaksaan Negeri Sintang', 'B/039/0.1.12/Eku.2/10/21', '2021-10-14', '2021-10-15', 'Permohonan Menghadapkan Saksi Ahli\r\n', '', 1),
(187, 'Ketua Pan Dekan Cup', '136/A/Pan-DC/FT/X/21', '2021-10-15', '2021-10-15', 'Undangan: Sabtu 16 Oktober 2021\r\n', '', 1),
(188, 'Ketua Lemlit', '8033/UN22.10/TU/2021', '2021-10-11', '2021-10-15', 'Pengumuman Hasil Seleksi Insentif Penelitian Buku Gelombang II\r\n', '', 1),
(189, 'Prodi Arsitek U11	Dekan	Ijin Survey/Pengambilan Data An. Yazid Artiza', '545/ProdiARS/70/FTSP/X/21', '2021-10-07', '2021-10-14', 'Ijin Survey/Pengambilan Data An. Yazid Artiza\r\n', '', 1),
(190, 'UPT Bahasa', '193/UN22.18/TU/2021', '2021-10-07', '2021-10-14', 'Tes Penataan Bahasa Inggris\r\n', '', 1),
(191, 'Dit Reskrimum', 'B/383/X/2021/DitReskrimum', '2021-10-14', '2021-10-14', 'Permohonan Pemeriksaan Digital Forensik\r\n', '', 1),
(192, 'An. Apjuliana P Gagasi Tek Sipil', '-', '2021-10-18', '2021-10-08', 'Pengunduran Diri Sebagai Mahasiswa Tek Sipil\r\n', '', 1),
(193, 'Ketua LemLit dan PKM', '8233/UN22.10/TU/2021', '2021-10-15', '2021-10-18', 'Workshop Pendampingan Publikasi Karya Ilmiah\r\n', '', 1),
(194, 'Resor Bengkayang', 'B/341/X/Res.3.1/21/Reskrim', '2021-10-12', '2021-10-18', 'Permintaan Keterangan Ahli\r\n', '', 1),
(195, 'Kep BUK Untan', '15372/UN22/KP/2021', '2021-10-11', '2021-10-18', 'Surat Edaran Cuti Bersama Pegawai pada Hari Rabu, 20 Oktober 2021 di Lingkungan Untan\r\n', '', 1),
(196, 'H. Muda M. SH', '-', '2021-10-11', '2021-10-15', 'Pengiriman Buku Mamoar Alur Prof H. Mahmud Akil, SH\r\n', '', 1),
(197, 'Kajur Arsitektur', '79/UN22.4/PP/Arsitek/2021', '2021-09-22', '2021-10-15', 'Usulan Nama Kepala Lab\r\n', '', 1),
(198, 'Kajur Tek Elektro', '697/UN22.4/KM/EL-FT/10/21', '2021-10-13', '2021-10-15', 'Usulan Mahasiswa PMKM di Semester Gasal 2021/2022 Program Studi Sarjana Tek-EL\r\n', '', 1),
(199, 'Rektor Untan', '15398/UN22/PK.01.02/21', '2021-10-18', '2021-10-19', 'Undangan: Jumat, 22 Oktober 2021 Ruang Teater I Gedung Konference Untan, Agenda: Kuliah Umum Anti Korupsi\r\n', '', 1),
(200, 'Ketua HMTI', '094/A/HMTI-FT/X/2021', '2021-10-13', '2021-10-19', 'Permohonan Digitalisasi Tanda Tangan\r\n', '', 1),
(201, 'Kajur Tek Pertambangan', '106/UN22.4/OT/Pertambangan/21', '2021-10-18', '2021-10-19', 'Iuran Tahunan Keanggotaan FORKOPINDO 2021\r\n', '', 1),
(202, 'Dirjen Cipta Karya', 'UM01-02-CB21/413', '2021-10-13', '2021-10-18', 'Undangan Kegiatan Bimibingan Teknis Sistem Informasi Manajemen Bangunan Gedung (SIMBG) di Balai Prasarana Pemukiman Wilayah Kal Bar , Rabu-Kamis, 27-28/10/21 Di Hotel Mercure Pontianak\r\n', '', 1),
(203, 'Kajur Tek Elektro', '708/UN22.4/KU/EL-FT/X/21', '2021-10-18', '2021-10-18', 'Usulan Pencarian Dana Praktikum Semester Ganjil TA 2021/2021\r\n', '', 1),
(204, 'Kajur Tek Elektro lab Fisik', '707/UN22.4/KU/EL-FT/X/21', '2021-10-18', '2021-10-18', 'Permohonan ATK Lab Fisika\r\n', '', 3),
(205, 'Rektor Untan', '92/UN22.4/PP/Arsitek/2021', '2021-10-19', '2021-10-21', 'Undangan Menghadiri Pelatihan dan Pengangkatan Sumpah Jabatan\r\n', '', 1),
(206, 'Ketua STATAT Neg PTK', '2063/Sak.01/KP.02.3/X/21', '2021-10-19', '2021-10-21', 'Permohonan Sebagai Narasumber Workshop RIP An. Seno Darmawan P\r\n', '', 1),
(207, 'Ketua LP3M Untan', '2900/UN22.11/PP/2021', '2021-10-13', '2021-10-21', 'Calon Peserta Pelatihan PEKERTI\r\n', '', 1),
(208, 'Ketua HMM Tek Mesin', '011/A/HMM-FT/X/2021', '2021-10-18', '2021-10-19', 'Permohonan Dana Kegiatan (MUNAS) ke XIII Tek Mesin\r\n', '', 1),
(209, 'Ketua HMTK Tek KIMIA', '020/A/HMTK/FT/X/2021', '2021-10-18', '2021-10-19', 'Permohonan Dana Kegiatan (ISOTERM)\r\n', '', 1),
(210, 'Kajur PWK', '68/UN22.4/EP/PWK-FT/X/21', '2021-10-18', '2021-10-19', 'Permohonan Surat Tugas An. Nema Novita Pratiwi, ST, M.Eng\r\n', '', 1),
(211, 'Kajur PWK', '69/UN22.4/EP/PWK-FT/X/21', '2021-10-19', '2021-10-19', 'Permohonan Surat Tugas An. Dr. Ir. G. Zulkifli M\r\n', '', 1),
(212, 'Kajur PWK', '70/UN22.4/EP/PWK-FT/10/21', '2021-10-21', '2021-10-22', 'Surat Permohonan SK Workshop, Minggu, 24 Oktober 2021\r\n', '', 1),
(213, 'Kajur Tek Elektro', '712/UN22.4/PT/EL/10/21', '2021-10-21', '2021-10-22', 'Permohonan Surat Tugas An. Jainal Abidin, ST, M.Eng\r\n', '', 1),
(214, 'Kejaksaan Negeri Mempawah', 'B-2444/0.1.15/FD.1/10/21', '2021-10-21', '2021-10-22', 'Permohonan Tindakan Permintaan Tenaga Ahli\r\n', '', 1),
(215, 'Kajur Arsitektur', '93/UN22.4/PP/Arsitek/2021', '2021-10-19', '2021-10-22', 'Ijin Pelaksanaan Kegiatan Kuliah Praktek Studio Lapangan Arsitektur KalBar dan Kegiatan PMKM 2021 di Kab Bengkayang\r\n', '', 1),
(216, 'Dekan FMIPA', '6914/UN22.8/EP/2021', '2021-10-15', '2021-10-21', 'Permohonan Pengajar Prodi S2 Kimia FMIPA Untan Semester Gasal 2021/2022\r\n', '', 1),
(217, 'An. Jurista Purnama J, ST', '-', '2021-10-21', '2021-10-21', 'Permohonan Ijin Tidak Masuk Kerja\r\n', '', 1),
(218, 'Ketua LP3M Untan', '2958/UN22.11/TU/2021', '2021-10-19', '2021-10-21', 'Undangan: Sabtu 23 oktober 2021\r\n', '', 1),
(219, 'Kajur Tek Industri', '246/UN22.4/AK/2021', '2021-10-25', '2021-10-25', 'Permohonan Dana\r\n', '', 1),
(220, 'PLP Lab Mektan', '-', '2021-10-25', '2021-10-25', 'Usulan Pencairan Dana Praktikum Semester Genap TA 2020/2021\r\n', '', 1),
(221, 'Ketua UKM FTBC', '017/A/FTBC-Untan/X/21', '2021-10-05', '2021-10-25', 'Permohonan Bantuan Dana Apresiasi\r\n', '', 1),
(222, 'Kajur Pertambangan', '107/UN22.4/PerTamb/2021', '2021-10-22', '2021-10-25', 'Pengajuan Proposal Kegiatan Evaluasi dan Penyempurnaan Kurikulum\r\n', '', 1),
(223, 'Warek II Untan', '15103/UN22/KP/2021', '2021-10-13', '2021-10-25', 'Hasil Penilaian Usul Pak Dosen An. Dr. Herry Sujaini, ST, MT\r\n', '', 1),
(224, 'Kajur Arsitektur', '94/UN22.4/TU/Arsitek/21', '2021-10-21', '2021-10-25', 'Permohonan Surat Tugas Pembimbing Lapangan Arsitek KalBar 2021 di Kab Bengkayang\r\n', '', 1),
(225, 'Kajur Tek Kimia', '6060/UN22.4/PP/2021', '2021-10-21', '2021-10-22', 'Undangan Kuliah Umum, Sabtu 23 Oktober 2021\r\n', '', 1),
(226, 'Ketua Lemlit', '8450/UN22.10/TU/2021', '2021-10-25', '2021-10-26', 'Workshop Pendampingan Publikasi Karya Ilmiah\r\n', '', 1),
(227, 'Dosen Jurusan Teknik Mesin', '143/UN22.4/SP/Mesin/X/21', '2021-10-26', '2021-10-26', 'Undangan Kuliah Umum, Jumat 29 Oktober 2021\r\n', '', 1),
(228, 'Kep BUK Untan', '15792/UN22.13/TU/2021', '2021-10-25', '2021-10-26', 'Surat Pemberitahuan Pelatihan dan Sertifikasi Manajemen Sumber Daya Manusia Bidang Kewirausahaan\r\n', '', 1),
(229, 'Kep BUK Untan', '15790/UN22.13/TU/2021', '2021-10-25', '2021-10-26', 'Surat Pemberitahuan Pelatihan Sub Bidang Metedologi Pelatihan\r\n', '', 1),
(230, 'Kep BUK Untan', '15794/UN22.11/TU/2021', '2021-10-25', '2021-10-26', 'Surat Pemberitahuan Pelatihan dan Sertifikasi Kompetensi Bidang Administrasi Perkantoran\r\n', '', 1),
(231, 'Ketua HMIF', '027/A/HMIF-FT/X/2021', '2021-10-26', '2021-10-26', 'Undangan Webinar Nasional HMIF\r\n', '', 1),
(232, 'Kep BMKG', 'HM.02.00/009/KPTK/X/21', '2021-10-25', '2021-10-26', 'Permohonan Kegiatan BMKG Goest To Campus\r\n', '', 1),
(233, 'An. Ignatius Apul, ST, MT', '-', '2021-10-27', '2021-10-27', 'Permohonan Pensiun Dini Sebagai Staf Pengajar\r\n', '', 1),
(234, 'Pan Dekan Cup', '133/B/Pan-DC-FT/X/21', '2021-10-18', '2021-10-27', 'Permohonan Penandatanganan Sertifikat Digital\r\n', '', 1),
(235, 'Dosen Jurusan Teknik Mesin', '144/UN22.4/EP/Mesin/X/21', '2021-10-26', '2021-10-27', 'Permohonan SK Kuliah Umum\r\n', '', 1),
(236, 'Ketua Prodi Megister Tek Elektro', '32/UN22.4/AM/MTE/2021', '2021-10-25', '2021-10-27', 'Permohonan SK Panitia Pelaksana KKL Megister Tek. Elektro Th 2021\r\n', '', 1),
(237, 'Ketua Prodi Megister Tek Elektro', '31/UN22.4/AM/MTE/2021', '2021-10-25', '2021-11-27', 'Permohonan Surat Tugas Pelaksana KKL Megister Tek. Elektro Th 2021\r\n', '', 1),
(238, 'Ketua Prodi Megister Tek Elektro', '30/UN22.4/AM/MTE/2021', '2021-10-25', '2021-10-27', 'Permohonan Plakat\r\n', '', 1),
(239, 'Kajur Tek Lingkungan', '26/UN22.4/Kalap/TL/21', '2021-10-26', '2021-10-26', 'Per Penerbitan Surat, Per Kuliah Lapangan\r\n', '', 1),
(240, 'Kajur Arsitektur', '96/UN22.4/PP/ARS/2021', '2021-10-25', '2021-10-26', 'Pengajuan Proposal PMKM Gasal TA 2021/2022 dan SK Dosen Pembimbing PMKM 2021\r\n', '', 1),
(241, 'Tek Industri Indonesia', '020/SP/BKSTI/X/2021', '2021-10-27', '2021-10-27', 'Permohonan Ijin Penugasan Moderator Webinar Penulisan Proposal Penelitian Hibah Ristek BRIN\r\n', '', 1),
(242, 'Ketua LP3M Untan', '3033/UN22.11/PP/2021', '2021-10-25', '2021-10-27', 'Ralat Jadwal Pelatihan PEKERTI\r\n', '', 1),
(243, 'Ketua HMIF', '021/A/HMIF-FT/X/21', '2021-10-25', '2021-10-27', 'Permohonan Bantuan Dana\r\n', '', 1),
(244, 'Ketua HIMATA', '025/A/SP/HIMATA/10/21', '2021-10-26', '2021-10-27', 'Permohonan Bantuan Dana\r\n', '', 1),
(245, 'An. Muhammad Lutfhi', '-', '2021-10-27', '2021-10-27', 'Permohonan Dana Apresiasi\r\n', '', 1),
(246, 'An. Dariyati', '-', '2021-10-27', '2021-10-27', 'Permohonan Izin\r\n', '', 1),
(247, 'Kajur PWK', '72/UN22.4/EP/PWK/10/21', '2021-10-27', '2021-10-27', 'Permohonan Surat Tugas\r\n', '', 1),
(248, 'An. Jonatan H Tobing', '-', '2021-10-26', '2021-10-27', 'Permohonan Tanda Tangan\r\n', '', 1),
(249, 'HIMAP', '079/A/HIMAP/X/2021', '2021-10-22', '2021-10-27', 'Permohonan Bantuan Dana\r\n', '', 1),
(250, 'Ka. Lab Teg. Tinggi', '-', '2021-10-28', '2021-10-29', 'Permohonan Pengadaan Lab Tek Teg. Tinggi\r\n', '', 1),
(251, 'Kajur Tek Pertambangan', '108/UN22.4/PR/Pertambangan', '2021-10-28', '2021-10-29', 'Permohonan Bantuan Dana Kuliah Lapangan Jurusan Tek Pertambangan\r\n', '', 1),
(252, 'Kajur Tek Pertambangan', '109/UN22.4/PR/Pertambangan', '2021-10-28', '2021-10-29', 'Permohonan Bantuan Dana kegiatan Kuliah Umum\r\n', '', 1),
(253, 'Kajur Tek Pertambangan', '110/UN22.4/PR/Pertambangan', '2021-10-28', '2021-10-29', 'Permohonan Bantuan Dana\r\n', '', 1),
(254, 'Ketua Pan BRIDGE Teknik ke XXI', '072/A/Pan-PRD-FT/X/21', '2021-10-27', '2021-10-28', 'Undangan BRIDGE Online, Minggu 31 Oktober 2021 Di Aula Fak. Teknik\r\n', '', 1),
(255, 'BMN FT Untan', '-', '2021-10-28', '2021-10-28', 'Laporan Penggolongan dan Kelefikasi (Pelabelau) BMN FT Untan\r\n', '', 1),
(256, 'Jurusan Teknik Sipil (Plt Kaprodi)', '825/UN22.4/SIPIL-FAK/PP/2021', '2021-10-27', '2021-10-28', 'Penunjukkan Dosen An. Aryanto (Kab Kapuas Hulu)\r\n', '', 1),
(257, 'Jurusan Teknik Industri', '247/UN22.4/PP/TIN-D/10/21', '2021-10-27', '2021-10-27', 'Permohonan Peminjaman Ruangan\r\n', '', 1),
(258, 'Kep Lab Terpadu', '387/UN22.17/TU/2021', '2021-10-29', '2021-11-01', 'Penerimaan Peserta Pelatihan K3, B3 dan Manajemen Lab, Selasa-jumat, 16-19/November-2021, Jam 08.00, Di UPT Lab Terpadu\r\n', '', 1),
(259, 'Kajur PWK', '73/UN22.4/EP/PWK-FT/X/21', '2021-10-29', '2021-11-01', 'Permohonan SK Panitia Webinar Ikatan Ahli Perencanaan (IAP) KalBar \"Upaya Mitigasi dan Penanganan Banjir di Kota Pontianak\" tahun 2021\r\n', '', 1),
(260, 'Resor Kota Pontianak Kota', 'B/2219/X/2021/Reskrim', '2021-10-30', '2021-11-01', 'Permohonan Keterangan Ahli ITE dan Digital Forensik\r\n', '', 1),
(261, 'Plt Kajur Arsitektur', '97/UN22.4/KIU/Arsitektur/2021', '2021-10-27', '2021-11-01', 'Rekomendasi Kegiatan Kejuaran Lomba KARATE An. F. Diagnes Agan\r\n', '', 1),
(262, 'Ketua HIMATEKLA Tek Kelautan', '027/A/HIMATEKLA/X/2021', '2021-10-28', '2021-10-29', 'Undangan Kegiatan Kuliah Umum, Sabtu 6 Nov 2021 Di Aula D01\r\n', '', 1),
(263, 'Jurnal ELKHA Jur Tek-EL', '-', '2021-10-29', '2021-10-29', 'Permohonan Pembaharuan SK\r\n', '', 1),
(264, 'An. Arjuliana Panggasia Gagasi (Tek Sipil)', '-', '2021-10-18', '2021-10-29', 'Permohonan Pengunduran Diri Sebagai Mahasiswa Fak-Teknik\r\n', '', 1),
(265, 'MAPALA FT', '006/A/Pan-DIKSAR-XXIII/MPL/21', '2021-11-01', '2021-11-02', 'Permohonan Rekomendasi\r\n', '', 1),
(266, 'MAPALA FT', '007/A/PPB/BP/MPL-FT/X/21', '2021-11-01', '2021-11-02', 'Permohonan Jalur TC\r\n', '', 1),
(267, 'Warek II Untan', '16025/UN22/KU/2021', '2021-10-26', '2021-11-02', 'Petunjuk Teknis Perhitungan Verifikasi dan Pembayaran Insentif Kinerja Renumerasi\r\n', '', 1),
(268, 'Kep BUK Untan', '16308/UN22.13/TU/2021', '2021-11-01', '2021-11-02', 'Surat Pengantar SK Pengaktifan Kembali Jabatan Akademik An. Hiwani, ST, MT\r\n', '', 1),
(269, 'Kep BUK Untan', '16325/UN22.13/TU/2021', '2021-11-01', '2021-11-02', 'Surat Pengantar Fotocopy Surat dari Inspektorat Jenderal No: 7450/G/KS.01.01/21 , Tgl 22 Oktober 2021, Hal: Pememakan Kewajiban Pelapor Harta Kekayaan\r\n', '', 1),
(270, 'Rektor Untan', '16318/UN22/TU/2021', '2021-11-01', '2021-11-01', 'Tim Pansel Satgas PPKS\r\n', '', 1),
(271, 'Ketua Panitia (Romario)', '-', '2021-10-26', '2021-11-01', 'Permohonan Biaya dan SK Kegiatan PMKM\r\n', '', 1),
(272, 'Kajur PWK', '74/UN22.4/EP/PWK-FT/XI/21', '2021-11-01', '2021-11-01', 'Permohonan SK Revisi Kurikulum Fak-Teknik Jurusan PWK\r\n', '', 1),
(273, 'Ketua LPPKM Untan', '019/UN22.10/PHKI-UNTAN/2021', '2021-10-27', '2021-11-03', 'Undangan Sosialisasi Paten, Jumat 5 Nov 2021, Jam 07.30 Via Zoom\r\n', '', 1),
(274, 'An. Handika Awan Saputra Tek-EL', '-', '2021-11-02', '2021-11-02', 'Permohonan Cuti Kuliah\r\n', '', 1),
(275, 'An. Elvira', '2564/J3/KLU.02.11/2021', '2021-10-26', '2021-11-02', 'Undangan Pelaksanaan Final KJI dan KBSI 2021 (Permohonan Surat Tugas) An. Elvira\r\n', '', 1),
(276, 'Jurusan Informatika', '420/UN22.4/TU/17/21', '2021-10-29', '2021-11-02', 'Tindak Lanjut Draft MoU dan PKS dari PT Agate International dalam rangka MBKM-MSIB\r\n', '', 1),
(277, 'Rektor Untan', '16307/UN22/PR/2021', '2021-11-01', '2021-11-02', 'Undangan, Kamis 4 November 2021 Di gedung Konverensi Untan Aula Utama lt 2\r\n', '', 0),
(278, 'Ketua LP3M Untan', '3169/UN22.11/TU/2021', '2021-11-01', '2021-11-02', 'Undangan: Januari 5 Nov 2021 Hotel Orchard Perdana jam 07.30 wib\r\n', '', 1),
(279, 'An. Dedy Wijayanto', '3166/UN22.11/TU/2021', '2021-11-01', '2021-11-02', 'Permohonan Surat Tugas\r\n', '', 1),
(280, 'Dit Reskrimsus', 'B/3035/XI/HUK.II-I/21/Krimsus', '2021-11-03', '2021-11-04', 'Permohonan Keterangan Ahli dibidang Informasi dan Transaksi Elektronik dan Pemeriksaan Digital Kontrol\r\n', '', 1),
(281, 'Kajur Tek Kimia', '171/UN22.4/PP/Kimia/X/21', '2021-10-22', '2021-11-04', 'Permohonan Pembuatan SK Panitia Evaluasi Kurikulum Tahun 2021 dan Penyelarasan Kurikulum Berbasis Kompetensi Jurusan Tek Kimia\r\n', '', 1),
(282, 'Kajur Tek Kimia', '169/UN22.4/PT/Kimia/X/21', '2021-10-19', '2021-11-04', 'Permohonan Praktikum di Lab Kimia Terpadu Untan\r\n', '', 1),
(283, 'Kajur Tek Lingkungan', '297/UN22.4/KR/MBKM/TL/21', '2021-11-03', '2021-11-03', 'Penerbitan Surat Permohonaan Sebagai Narasumber FGD II\r\n', '', 1),
(284, 'Ka Lab Survey dan Pemetaan', '-', '2021-11-03', '2021-11-03', 'Laporan Praktikum Survey dan Pemetaan Semester Genap TA 2020/2021\r\n', '', 1),
(285, 'Dirjen SDA Wilayah Sungai Kalimantan', 'UM.01.02/BWS8/1125.4', '2021-11-02', '2021-11-03', 'Permohonan Narasumber Kegiatan IPDMIP (Surat Tugas) An. Prof. Dr. Hj. Henny Herawati\r\n', '', 1),
(286, 'Direktur Pengelolaan Data dan Penyajian Informasi Kepegawaian BKN', '14198/B-SI.01.01/SD/EIII/2021', '2021-11-02', '2021-11-03', 'Tindak Lanjut Monev Pemuktahiran Data Mandiri\r\n', '', 1),
(287, 'Kajur Informatika', '046/A/HMIF-FT/XI/21', '2021-11-03', '2021-11-04', 'Permohonan Tanda Tangan Sertifikat\r\n', '', 1),
(288, 'MAPALA FT', '080/A/Pan-DIKSAR-XXIII/MPL/IX', '2021-11-03', '2021-11-04', 'Undanganan Upacara\r\n', '', 1),
(289, 'Kajur Tek Lingkungan', '301/UN22.4/KR/MBKM/TL/XI/21', '2021-11-04', '2021-11-04', 'Permohonan Bantuan Fasilitas zoom meeting dan perlengkapan yang terkait\r\n', '', 1),
(290, 'Kajur Tek Lingkungan', '302/UN22.4/KR/MBKM/TL/XI/21', '2021-11-04', '2021-11-04', 'Permohonan Konsumsi\r\n', '', 1),
(291, 'Kajur Tek Lingkungan', '293/UN22.4/PT/TL/XI/21', '2021-11-03', '2021-11-04', 'Permohonan SK Untik Dosen Pembimbing Lapangan PMKM Mandiri 2022\r\n', '', 1),
(292, 'Kajur Tek Lingkungan', '300/UN22.4/KR/MBKM/TL/XI/21', '2021-11-04', '2021-11-04', 'Permohonan Peminjaman Aula Fak-Teknik\r\n', '', 1),
(293, 'Kep Lab Terpadu', '420/UN22.17/TU/2021', '2021-11-04', '2021-11-04', 'Permohonan Biaya Penganti Bahan Habus Pakai dan Operasional Praktikum\r\n', '', 1),
(294, 'Kajur PWK', '76/UN22.4/EP/PWK/XI/21', '2021-11-03', '2021-11-04', 'Permohonan SK Pengelola Jurnal UNIPUAN Jurusan PWK Fak-Teknik Untan\r\n', '', 1),
(295, 'Kajur PWK', '117/A/Pan-HTR/X/2021', '2021-10-28', '2021-11-05', 'Undangan, Sabtu 13 November 2021, Via Zoom\r\n', '', 1),
(296, 'Kajur Arsitektur', '91/UN22.4/TU/Arsitek/21', '2021-10-14', '2021-11-05', 'Permohonan Surat Pengantar Pengajuan ISSN terbitan berkala (Elektronik)\r\n', '', 1),
(297, 'Kajur Tek Industri', '254/UN22.4/AM/TIN-D/XI/21', '2021-11-05', '2021-11-05', 'Permohonan Surat Pengantar\r\n', '', 1),
(298, 'Kajur Arsitektur', '15001/HIMARS/HIMARSGOESTOSCHOOL-III/XI/21', '2021-11-02', '2021-11-05', 'Permohonan Bantuan Dana\r\n', '', 1),
(299, 'Kajur Tek Elektro', '744/UN22.4/LK/TE-FT/XI/21', '2021-11-05', '2021-11-05', 'Permohonan Peminjaman Lab Teknik Kendali\r\n', '', 1),
(300, 'Kep BUK Untan', '16565/UN22.13/KP/2021', '2021-11-04', '2021-11-05', 'surat Pengantar = SK kenaikan Pangkat Dosen, An.  Prof. Dr. Ing. Seno Darmawan Panjaitan, ST, MT (Guru Besar)\r\n', '', 1),
(301, 'Kajur Arsitektur', '106/UN22.4/KM/2021', '2021-11-03', '2021-11-05', 'Rekomendasi Kegiatan Kejuaraan Nasional Federasi Olahraga Karate-Do-Indonesia (FORKI)\r\n', '', 1),
(302, 'Resor Kota Pontianak Kota', 'B/2274/XI/2021/Reskrim', '2021-11-08', '2021-11-08', 'Permohonan Keterangan Ahli ITE dan Digital Forensik\r\n', '', 1),
(303, 'Ketua HMIF', '053/A/HMIF-FT/XI/2021', '2021-11-08', '2021-11-08', 'Undangan Webinar Nasional HMIF, Kamis 11 November 2021, Webinar Nasional\r\n', '', 1),
(304, 'Dekan FMIPA', '7368/UN22.8/TU/2021', '2021-11-05', '2021-11-08', 'Undangan Dies Natalis Ke 20 Fak MIPA, selasa 9 Nov 2021, gedung Konvensi Ruang teater I Untan\r\n', '', 1),
(305, 'An. Ketua Pelaksana', '-', '2021-11-08', '2021-11-08', 'Permohonan Bantuan Dana Kegiatan Untan Engineering EXPO (UEE 2021) di Fak-Teknik\r\n', '', 1),
(306, 'An. Dr. Arifin, ST, M.Eng.Sc', '05/Insentif-Jurnal/DIPA/XI/2021', '2021-11-05', '2021-11-08', 'Permohonan Insentif Jurnal\r\n', '', 1),
(307, 'An. Eddy Kurniawan, ST, M.Sc', '-', '2021-11-11', '2021-11-08', 'Permohonan Surat Keterangan Kerja di Fak Teknik\r\n', '', 1),
(308, 'Kajur Tek Lingkungan', '05/UN22.4/Kurikulum/m…', '2021-11-05', '2021-11-05', 'Permohonan Kata Sambutan dan Membuka Acara Kegiatan FGD II\r\n', 'Diterima', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1638328527, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `Id_prodi` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`Id_prodi`, `prodi`) VALUES
(1, 'Megister Teknik Sipil (S2)'),
(2, 'Megister Teknik Elektro (S2)'),
(3, 'Arsitektur'),
(4, 'Teknik Lingkungan'),
(5, 'PWK'),
(6, 'Teknik Kelautan'),
(7, 'Teknik Pertambangan'),
(8, 'Teknik Elektro'),
(9, 'Informatika'),
(10, 'Teknik Industri'),
(11, 'Teknik Mesin'),
(12, 'Teknik Kimia'),
(13, 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keputusan`
--

CREATE TABLE `surat_keputusan` (
  `Id_sk` int(11) NOT NULL,
  `Nomor_sk` varchar(255) NOT NULL,
  `Tanggal_sk` date NOT NULL,
  `Tentang` text NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_keputusan`
--

INSERT INTO `surat_keputusan` (`Id_sk`, `Nomor_sk`, `Tanggal_sk`, `Tentang`, `Tanggal`) VALUES
(3, '12345', '2021-11-20', 'surat keputusan', '2021-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `Id_tugas` int(11) NOT NULL,
  `NoST` text NOT NULL,
  `Dasar` text NOT NULL,
  `Tentang` text NOT NULL,
  `Hari` text NOT NULL,
  `Tanggal_kegiatan` text NOT NULL,
  `Lokasi` text NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`Id_tugas`, `NoST`, `Dasar`, `Tentang`, `Hari`, `Tanggal_kegiatan`, `Lokasi`, `Tanggal`) VALUES
(1, '6260/UN22.4/TU/2021', 'Surat Kepala Unit Pelaksana Teknis Laboratorium Terpadu Universitas Tanjungpura Nomor : 387/UN22.17/TU/2021 tanggal 29 oktober 2021 tentang Penerimaan peserta Pelatihan K3, B3, dan Manajemen Lab', 'Pelatihan K3, B3 dan Manajemen Lab untuk Laboratorium Berbasis Pengujian dan Kalibrasi', 'Selasa - Jumat', '16 - 19 November 2021', 'UPT Lab. Terpadu', '2021-12-03'),
(2, '123', 'test', 'test', 'test', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_anggota`
--

CREATE TABLE `tugas_anggota` (
  `Id` int(11) NOT NULL,
  `Id_tugas` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `Pangkat` text NOT NULL,
  `Keterangan` text NOT NULL,
  `Tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_anggota`
--

INSERT INTO `tugas_anggota` (`Id`, `Id_tugas`, `Nama`, `NIP`, `Pangkat`, `Keterangan`, `Tanggal_upload`) VALUES
(1, 1, 'Naim, S.T., M.T.', '197412061995021001', 'Penata/III/c', 'PLP. Ahli Muda', '0000-00-00'),
(2, 1, 'Mujiono', '197412061995021001', 'Penata Muda Tk. I/III/b', 'PLP. Pelaksana Lanjutan', '2021-12-03'),
(3, 1, 'test', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `Id_tujuan` int(11) NOT NULL,
  `Tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`Id_tujuan`, `Tujuan`) VALUES
(1, 'Dekan'),
(2, 'Wakil Dekan 1'),
(3, 'Wakil Dekan 2'),
(4, 'Wakil Dekan 3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Level` varchar(11) NOT NULL,
  `Id_dep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Nama`, `Email`, `Password`, `Level`, `Id_dep`) VALUES
(1, 'Admin', 'admin@gmail.com', '123', '1', 1),
(2, 'Pengguna 1', 'pengguna1@gmail.com', 'pengguna2', '2', 2),
(3, 'Pengguna 3', 'pengguna3@gmail.com', 'penguna3', '2', 3),
(4, 'pengguna 4', 'pengguna4@gmail.com', 'pengguna4', '2 ', 3),
(6, 'Dekan', 'dekan@gmail.com', 'dekan123', '2 ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `datas_anggota`
--
ALTER TABLE `datas_anggota`
  ADD PRIMARY KEY (`Id_datas_anggota`);

--
-- Indexes for table `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`Id_dep`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`Id_disposisi`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`Id_dosen`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`Id_gol`);

--
-- Indexes for table `ketegori`
--
ALTER TABLE `ketegori`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`Id_masuk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`Id_prodi`);

--
-- Indexes for table `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  ADD PRIMARY KEY (`Id_sk`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`Id_tugas`);

--
-- Indexes for table `tugas_anggota`
--
ALTER TABLE `tugas_anggota`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`Id_tujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `datas_anggota`
--
ALTER TABLE `datas_anggota`
  MODIFY `Id_datas_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dep`
--
ALTER TABLE `dep`
  MODIFY `Id_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `Id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `Id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `Id_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ketegori`
--
ALTER TABLE `ketegori`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `Id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `Id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  MODIFY `Id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `Id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tugas_anggota`
--
ALTER TABLE `tugas_anggota`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `Id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
