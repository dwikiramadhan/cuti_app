-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 21, 2021 at 05:11 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_s2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `id_pekerja` int(11) NOT NULL,
  `tgl_cuti` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `id_pekerja`, `tgl_cuti`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-07-31', 'Pindahan', 1, '2021-07-30 22:55:10', '2021-07-30 15:55:10'),
(2, 1, '2021-11-26', 'Holiday', 1, '2021-11-22 00:01:16', '2021-11-21 17:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `master_pekerja`
--

CREATE TABLE `master_pekerja` (
  `id` int(11) NOT NULL,
  `fungsi` varchar(50) DEFAULT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL COMMENT 'wadir: wakil direktur, ka: kepala, pws: pengawas, pnt: penata',
  `kode_jabatan` varchar(50) DEFAULT NULL,
  `bagian` varchar(50) DEFAULT NULL,
  `divisi` varchar(50) DEFAULT NULL,
  `gol_upah` int(11) DEFAULT NULL,
  `tmt_gol_upah` date DEFAULT NULL,
  `lama_gol_upah` int(11) DEFAULT NULL,
  `nopek` varchar(50) DEFAULT NULL,
  `nama_pekerja` varchar(100) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `tmt_pwtt` date DEFAULT NULL,
  `jenjang_pendidikan` varchar(20) DEFAULT NULL,
  `status_pekerja` varchar(5) DEFAULT NULL,
  `status_pernikahan` varchar(10) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_pekerja`
--

INSERT INTO `master_pekerja` (`id`, `fungsi`, `nama_jabatan`, `kode_jabatan`, `bagian`, `divisi`, `gol_upah`, `tmt_gol_upah`, `lama_gol_upah`, `nopek`, `nama_pekerja`, `gelar`, `jenis_kelamin`, `tmt_pwtt`, `jenjang_pendidikan`, `status_pekerja`, `status_pernikahan`, `created_at`, `updated_at`) VALUES
(1, 'Manajemen', 'Direktur RSPJ', 'Direktur', 'Manajemen', 'Non Medis', 3, '2001-06-19', 2, '59061105', 'Syafik Ahmad', 'dr, MPH', 'L', '2003-04-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:11:49'),
(3, 'Manajemen', 'Wakil Direktur Keperawatan ', 'Wakil Direktur', 'Manajemen', 'Non Medis', 5, '2018-06-01', 3, '59060344', 'Neni Sulista Yulianti', 'S.Kep, Ns', 'L', '1999-06-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:11:57'),
(5, 'Manajemen', 'Wakil Direktur SDM & Umum ', 'Wakil Direktur', 'Manajemen', 'Non Medis', 5, '2018-06-01', 3, '59061484', 'Henry Hidayatullah', 'dr, M.Si', 'P', '2007-06-15', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:12:18'),
(6, 'Manajemen', 'Wakil Direktur Layanan Klinik ', 'Wakil Direktur', 'Manajemen', 'Non Medis', 7, '2018-06-01', 3, '59061698', 'Molita Marliana', 'dr, MARS', 'P', '2009-11-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:12:30'),
(7, 'Pemasaran & Pengembangan', 'Ka. Pemasaran & Pengembangan', 'Ka.', 'Pemasaran & Pengembangan', 'Non Medis', 4, '2014-12-01', 6, '59061134', 'Rista Lasmaria Tioliana', 'dr, MPH', 'L', '2003-04-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:12:34'),
(9, 'Hukum & Perijinan', 'Pws. Hukum & Perijinan', 'Pws.', 'Hukum & Perijinan', 'Non Medis', 11, '2017-06-01', 4, '59060698', 'Sunardi', 'S.H, M.H', 'L', '2000-10-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:12:37'),
(10, 'Hukum & Perijinan', 'Pnt. Hukum & Perijinan', 'Pnt.', 'Hukum & Perijinan', 'Non Medis', 11, '2019-06-01', 2, '59060980', 'Poebiyan Padra Jaya', 'S.H', 'L', '2001-06-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:12:41'),
(11, 'TI/TE', 'Ka. TIK', 'Ka.', 'TI/TE', 'Non Medis', 8, '2017-06-01', 4, '59061599', 'Budi Rachmadi', 'S.Kom', 'L', '2008-07-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:12:45'),
(12, 'TI/TE', 'Pws. Software', 'Pws.', 'Software', 'Non Medis', 10, '2017-11-01', 3, '59062429', 'Bayu Pinasthika', 'S.T', 'L', '2017-11-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-07 11:12:50'),
(13, 'TI/TE', 'Pnt. Infrastruktur', 'Pnt.', 'Infrastruktur', 'Non Medis', 11, '2017-06-01', 4, '59061564', 'Hery Susanto', 'S.Kom', 'L', '2008-04-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:12:55'),
(14, 'TI/TE', 'Pnt. Infrastruktur', 'Pnt.', 'Infrastruktur', 'Non Medis', 11, '2016-06-01', 5, '59060699', 'Nurudin Hasan', 'S.Kom', 'L', '2000-10-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:13:01'),
(15, 'TI/TE', 'Pws. Pengelolaan Data', 'Pws.', 'Pengelolaan Data', 'Non Medis', 12, '2013-06-01', 8, '59061072', 'Teguh Pudjiarto', NULL, 'P', '2003-02-01', 'SMK', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:13:04'),
(16, 'Manajemen Mutu', 'Pws. Manajemen Mutu ', 'Pws.', 'Manajemen Mutu', 'Non Medis', 9, '2019-06-01', 2, '59061076', 'Anika Setiyawati', 'S.Kep, Ns', 'P', '2003-02-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:13:08'),
(17, 'HSE', 'Ka.  HSE', 'Ka.', 'HSE', 'Non Medis', 5, '2014-06-01', 7, '59061225', 'Hany Winihastuti', 'drg, M.KKK', 'P', '2004-02-09', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:13:12'),
(18, 'HSE', 'Pws. HSE', 'Pws.', 'HSE', 'Non Medis', 8, '2019-06-01', 2, '59060482', 'Siti Puji Rahayu', 'S.KM', 'P', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:13:20'),
(19, 'KSM Spesialis', 'KSM Rumah Sakit', 'KSM', 'KSM Spesialis Paru', 'Medis', 4, '2014-06-01', 7, '59060365', 'Ni Nyoman Priantini', 'dr, Sp.P', 'P', '1999-08-02', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:13:50'),
(20, 'KSM Spesialis', 'KSM Rumah Sakit', 'KSM', 'KSM Spesialis Saraf', 'Medis', 5, '2018-06-01', 3, '59062033', 'Sri Utami Ningsih', 'dr, Sp.S', 'L', '2008-07-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:13:54'),
(21, 'KSM Spesialis', 'KSM Rumah Sakit', 'KSM', 'KSM Spesialis Radiologi', 'Medis', 3, '2013-06-01', 8, '59060438', 'Sutrisno', 'dr, Sp.Rad', 'P', '2000-06-05', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:51'),
(22, 'KSM Umum', 'KSM Rumah Sakit', 'KSM', 'KSM IGD', 'Medis', 8, '2017-09-01', 3, '59062393', 'Diana Safitri', 'dr', 'L', '2017-09-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-07 11:14:53'),
(28, 'KSM Spesialis', 'Ka. IGD ', 'Ka.', 'KSM Spesialis Penyakit Dalam', 'Medis', 7, '2017-09-01', 3, '59062392', 'Lucas Welfried', 'dr, Sp.PD', 'P', '2017-09-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:31'),
(29, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 3', NULL, 'Keperawatan Lantai 3 Group II', 'Paramedis', 9, '2014-06-01', 7, '59060889', 'Ririn Sriwidiarti', 'A.Md.Kep', 'L', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(30, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Koordinator', 'Paramedis', 8, '2019-06-01', 2, '59060890', 'Agung Tri Nugraha', 'S.Kep, Ns, MARS', 'P', '2000-11-15', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(31, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group VI', 'Paramedis', 8, '2019-06-01', 2, '59060897', 'Dian Andriyanti', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(32, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group III', 'Paramedis', 8, '2017-06-01', 4, '59060253', 'Iswani Idris', 'A.Md.Kep', 'P', '1991-11-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(33, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group IV', 'Paramedis', 9, '2014-06-01', 7, '59060886', 'Sarah Tanduk', 'A.Md.Kep', 'L', '2000-11-15', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(34, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group V', 'Paramedis', 10, '2017-10-01', 3, '59062408', 'Syaiful Amri', 'S.Kep, Ns', 'L', '2017-10-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(35, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group II', 'Paramedis', 12, '2017-11-01', 3, '59062428', 'Yohanes Prasetya', 'A.Md.Kep', 'L', '2017-11-01', 'D3', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(36, 'KSM Spesialis', 'Ka. ICU ', 'Ka.', 'KSM Spesialis Anestesi', 'Medis', 7, '2017-09-01', 3, '59062391', 'Rocky Hendrawan', 'dr, Sp.AN', 'P', '2017-09-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:29'),
(37, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Koordinator', 'Paramedis', 5, '2018-06-01', 3, '59060140', 'Tuti Setiawati', 'A.Md.Kep', 'P', '1986-01-02', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(38, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group III', 'Paramedis', 10, '2017-06-01', 4, '59061233', 'Amelia Tahun', 'A.Md.Kep', 'P', '2004-03-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(39, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group IV', 'Paramedis', 10, '2017-06-01', 4, '59061485', 'Dwi Fitri Hapsari', 'A.Md.Kep, S.AP', 'P', '2007-06-01', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(40, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group II', 'Paramedis', 9, '2014-06-01', 7, '59060896', 'Eva Marini', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(41, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group III', 'Paramedis', 9, '2016-06-01', 5, '59060904', 'Meilasari Surtikania', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(42, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group VI', 'Paramedis', 10, '2018-06-01', 3, '59061260', 'Nenden Naziah', 'A.Md.Kep', 'P', '2005-03-01', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(43, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group V', 'Paramedis', 10, '2017-06-01', 4, '59061259', 'Wilda Marini Octria Siahaan', 'A.Md.Kep, S.KM', 'L', '2005-03-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(48, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group V', 'Paramedis', NULL, NULL, NULL, '59060484', 'Euis Restiyanti', 'A.Md.Kep', 'P', '2000-06-05', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(49, 'KSM Spesialis', 'Ka. Hemodialisis', 'Ka.', 'KSM Spesialis Penyakit Dalam', 'Medis', 4, '2016-06-01', 5, '59060809', 'Pujiwati', 'dr, Sp.PD', 'P', '2000-10-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:27'),
(51, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group III', 'Paramedis', 8, '2016-06-01', 5, '59060376', 'Hendrijani', 'A.Md.Kep, S.E', 'L', '2000-06-05', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(52, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group IV', 'Paramedis', 10, '2016-06-01', 5, '59061262', 'Bagus Tri Agung Yuniar', 'A.Md.Kep, S.KM', 'L', '2005-03-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(53, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group VI', 'Paramedis', 11, '2016-06-01', 5, '59061790', 'Isa Muslimin', 'A.Md.Kep, S.KM', 'P', '2010-06-01', 'D3', 'PWTT', 'Duda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(54, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group V', 'Paramedis', 8, '2017-06-01', 4, '59060381', 'Wiwik Wahyuningsih', 'A.Md.Kep', 'L', '2000-06-05', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(55, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group I', 'Paramedis', 12, '2017-10-01', 3, '59062405', 'Endang Suparto', 'A.Md.Kep', 'L', '2017-10-01', 'D3', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(56, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group V', 'Paramedis', 12, '2017-11-01', 3, '59062432', 'Bambang Rudiansyah', 'A.Md.Kep', 'L', '2017-11-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(58, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group V', 'Paramedis', 9, '2013-06-01', 8, '59060819', 'Novitasari', 'A.Md.Kep, S.Sos', 'P', '2000-10-01', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(59, 'KSM Umum', 'Ka. Instalasi Penunjang Medis ', 'Ka.', 'KSM Lantai 2', 'Medis', 7, '2014-03-01', 7, '59062063', 'Sri Rejeki', 'dr', 'L', '2014-03-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:37'),
(60, 'Instalasi Penunjang Medis', 'Pws. Laboratorium ', NULL, 'Analis Kesehatan', 'Penunjang Medis', 8, '2018-06-01', 3, '59060099', 'Asep Wawan Kurniawan', 'A.Md.A.K', 'L', '1985-04-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(61, 'Instalasi Penunjang Medis', 'Pnt. Laboratorium', NULL, 'Analis Kesehatan', 'Non Medis', 7, '2019-06-01', 2, '59060098', 'Achmad Destiawan', NULL, 'L', '1985-03-15', 'SMAK', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(62, 'Instalasi Penunjang Medis', 'Pnt. Laboratorium', NULL, 'Analis Kesehatan', 'Penunjang Medis', 8, '2019-06-01', 2, '59060334', 'Dedy Ujang Nuryadi', 'A.Md.A.K', 'P', '1999-06-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(63, 'Instalasi Penunjang Medis', 'Pnt. Laboratorium', NULL, 'Analis Kesehatan', 'Penunjang Medis', 8, '2019-06-01', 2, '59060336', 'Eri Sri Lestari', NULL, 'P', '1999-06-01', 'SMAK', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(64, 'Instalasi Penunjang Medis', 'Pnt. Laboratorium', NULL, 'Analis Kesehatan', 'Penunjang Medis', 10, '2019-06-01', 2, '59061428', 'Miranti Wulansari', 'A.Md.A.K', 'L', '2007-01-02', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(65, 'Instalasi Penunjang Medis', 'Pnt. Laboratorium', NULL, 'Analis Kesehatan', 'Penunjang Medis', 7, '2019-06-01', 2, '59060370', 'Romiko Andrianza Lubis', 'A.Md.A.K', 'L', '2000-06-05', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(66, 'Instalasi Penunjang Medis', 'Pnt. Laboratorium', NULL, 'Analis Kesehatan', 'Penunjang Medis', 7, '2008-06-01', 13, '59060204', 'Yogaswara', 'A.Md.A.K', 'L', '1990-12-17', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(67, 'Elektromedik', 'Pws. Fisika Medis', NULL, 'Elektromedik', 'Penunjang Medis', 10, '2017-06-01', 4, '59061283', 'Gomgom', 'S.Si', 'L', '2005-07-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(68, 'Instalasi Penunjang Medis', 'Pnt. Radiologi RS ', NULL, 'Radiologi', 'Penunjang Medis', 11, '2017-07-01', 4, '59061794', 'Lukman Hadi', 'A.Md.Rad', 'L', '2010-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(69, 'Instalasi Penunjang Medis', 'Pnt. Radiologi RS ', NULL, 'Radiologi', 'Penunjang Medis', 10, '2014-06-01', 7, '59061126', 'Mochamad Iqbal Husein', 'A.Md.Rad, S.E', 'L', '2003-04-01', 'D3', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(70, 'Instalasi Penunjang Medis', 'Pws. Radiologi ', NULL, 'Radiologi', 'Penunjang Medis', 10, '2019-06-01', 2, '59061391', 'Tri Sasongko', 'A.Md.Rad', 'L', '2006-04-12', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(72, 'Instalasi Penunjang Medis', 'Pnt. Radiologi RS ', NULL, 'Radiologi', 'Penunjang Medis', 10, '2019-06-01', 2, '59061287', 'Muhamad Irawan', 'A.Md.Rad', 'L', '2005-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(73, 'Instalasi Penunjang Medis', 'Pnt. Radiologi RS ', NULL, 'Radiologi', 'Penunjang Medis', 9, '2017-06-01', 4, '59060373', 'Mohamad Zulfitri', 'S.T', 'P', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(74, 'Instalasi Penunjang Medis', 'Pws. Gizi ', NULL, 'Ahli Gizi', 'Penunjang Medis', 9, '2019-06-01', 2, '59061070', 'Siti Aminah', 'A.Md.G', 'P', '2003-02-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(75, 'Apoteker', 'Ka. Instalasi Farmasi ', 'Ka.', 'Farmasi Sentral', 'Penunjang Medis', 9, '2014-06-01', 7, '59060882', 'Dini Susanti', 'S.Si, Apt', 'P', '2000-11-15', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:35'),
(76, 'Apoteker', 'Pws. Farmasi Rawat Jalan', NULL, 'Farmasi Sentral', 'Penunjang Medis', 11, '2017-06-01', 4, '59061427', 'Gusti Wangi Permana Putri', 'S.Si, Apt', 'P', '2007-01-02', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(77, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi Modular', 'Penunjang Medis', 11, '2018-06-01', 3, '59061494', 'Sari Dewi Astuti', NULL, 'P', '2007-06-01', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(78, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi Rawat Inap', 'Penunjang Medis', 12, '2017-09-01', 3, '59062401', 'Dea Febria Swastriaty', 'S.Farm', 'P', '2017-09-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(79, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi Modular', 'Penunjang Medis', 10, '2019-06-01', 2, '59061496', 'Sari Widyawati', 'A.Md.Far', 'P', '2007-06-01', 'D3', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(80, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi Modular', 'Penunjang Medis', 11, '2017-06-01', 4, '59061235', 'Dian Sitarasmi', NULL, 'P', '2004-03-01', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(81, 'Asisten Apoteker', 'Pnt. Gudang Farmasi ', NULL, 'Farmasi IGD', 'Penunjang Medis', 14, '2017-11-01', 3, '59062437', 'Annisa Fatinnuha', NULL, 'L', '2017-11-01', 'SMF', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(82, 'Apoteker', 'Pws. Farmasi Rawat Inap', NULL, 'Farmasi Sentral', 'Penunjang Medis', 12, '2017-06-01', 4, '59061871', 'Achmad Fauzan', 'S.Farm, Apt', 'P', '2011-09-15', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(83, 'Apoteker', 'Pnt. Farmasi Rawat Inap', NULL, 'Farmasi Sentral', 'Penunjang Medis', 12, '2017-09-01', 3, '59062400', 'Sartinawati', 'S.Farm, Apt', 'P', '2017-09-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(84, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Inap', NULL, 'Farmasi IGD', 'Penunjang Medis', 14, '2017-11-01', 3, '59062430', 'Ayu Nurul Wijayanti', NULL, 'P', '2017-11-01', 'SMF', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(85, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Inap', NULL, 'Farmasi Rawat Inap', 'Penunjang Medis', 14, '2017-11-01', 3, '59062436', 'Amalia', NULL, 'P', '2017-11-01', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(87, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi Rawat Inap', 'Penunjang Medis', 14, '2017-11-01', 3, '59062435', 'Ika Sukartiningsih', NULL, 'P', '2017-11-01', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(88, 'Asisten Apoteker', 'Pws. Gudang Farmasi ', NULL, 'Farmasi Perencanaan', 'Penunjang Medis', 10, '2016-06-01', 5, '59060790', 'Lilik Ernawati', NULL, 'P', '2000-10-01', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(89, 'Asisten Apoteker', 'Pnt. Gudang Farmasi ', NULL, 'Farmasi Modular', 'Penunjang Medis', 12, '2018-06-01', 3, '59061875', 'Rafika', 'A.Md.Far', 'L', '2011-09-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(91, 'Info Rekam Medis', 'Ka. Info Rekam Medis', 'Ka.', 'Info Rekam Medis', 'Non Medis', 8, '2014-12-01', 6, '59060541', 'Yunilda Darwis', 'S.KM, M.AP', 'L', '2000-06-05', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:33'),
(93, 'Info Rekam Medis', 'Pnt. Rekam Medis & Pendaftaran', NULL, 'Adm Command Room', 'Non Medis', 11, '2017-06-01', 4, '59060507', 'Ramli Ali', NULL, 'L', '2000-06-05', 'SMA', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(95, 'Pemasaran & Pengembangan', 'Pnt. Layanan Pelanggan', NULL, 'Pemasaran & Pengembangan', 'Non Medis', 9, '2019-06-01', 2, '59061492', 'Nurfahmi Oktavia', 'S.Pd', 'L', '2007-06-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(96, 'Pemasaran & Pengembangan', 'Pnt. Pengembangan ', NULL, 'Pemasaran & Pengembangan', 'Non Medis', 12, '2017-06-01', 4, '59061872', 'Faiz Muttaqin Amrulloh', NULL, 'L', '2011-09-15', 'SMF', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(97, 'Info Rekam Medis', 'Pws. Korespon Medis & Infokes', NULL, 'Korespon Medis & Infokes', 'Non Medis', 9, '2017-06-01', 4, '59061123', 'Dikky Muhamad Asidikky', 'A.Md.Kep', 'L', '2003-04-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(98, 'Pemulasaran Jenazah', 'Pnt. Pemulasaran Jenazah', NULL, 'Pemulasaran Jenazah', 'Non Medis', 10, '2019-06-01', 2, '59060298', 'Abdul Fattah', NULL, 'P', '1999-06-01', 'SMA', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(99, 'Info Rekam Medis', 'Pnt. Korespon  Medis & Infokes ', NULL, 'Korespon Medis & Infokes', 'Non Medis', 10, '2013-06-01', 8, '59060910', 'Gussa Azizah', 'S.KM', 'P', '2000-11-15', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(100, 'Info Rekam Medis', 'Pnt. Korespon  Medis & Infokes ', NULL, 'Korespon Medis & Infokes', 'Non Medis', 12, '2017-06-01', 4, '59060581', 'Siti Nuroniah', NULL, 'L', '2000-06-05', 'SMA', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(101, 'Info Rekam Medis', 'Pws. Verifikasi ', NULL, 'Verifikasi', 'Non Medis', 5, '2019-06-01', 2, '59060236', 'Bambang Prihatno', 'S.Kep', 'L', '1991-08-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(102, 'Info Rekam Medis', 'Pnt. Verifikasi ', NULL, 'Verifikasi', 'Non Medis', 9, '2019-06-01', 2, '59061124', 'Muhammad Latif', 'S.KM', 'L', '2003-04-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(103, 'Info Rekam Medis', 'Pnt. Verifikasi ', NULL, 'Verifikasi', 'Non Medis', 11, '2019-06-01', 2, '59060989', 'Bachrudin', NULL, 'P', '2001-10-01', 'SMA', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(104, 'Info Rekam Medis', 'Pnt. Case Mix', NULL, 'Case Mix', 'Non Medis', 9, '2019-06-01', 2, '59060557', 'Ferdiana Simanjnutak', 'S.E', 'L', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(105, 'Info Rekam Medis', 'Pnt. Case Mix', NULL, 'Case Mix', 'Non Medis', 11, '2019-06-01', 2, '59060780', 'Sutono', NULL, 'P', '2000-10-01', 'SMA', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(107, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group V', 'Paramedis', 9, '2014-06-01', 7, '59060547', 'Sri Yati Maryono', 'S.Kep, Ns', 'P', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(108, 'Keperawatan Umum', 'Supervisor', NULL, 'Supervisor', 'Paramedis', 8, '2017-06-01', 4, '59060355', 'Dwi Yuni Herawati', 'A.Md.Kep', 'P', '1999-06-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(109, 'Keperawatan Umum', 'Supervisor', NULL, 'Supervisor', 'Paramedis', 8, '2018-06-01', 3, '59060873', 'Neneng Saadah', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(110, 'Keperawatan Umum', 'Supervisor', NULL, 'Supervisor', 'Paramedis', 6, '2015-06-01', 6, '59060233', 'Dedeh Kurniasari', 'A.Md.Kep', 'P', '1991-08-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(111, 'Keperawatan Umum', 'Supervisor', NULL, 'Supervisor', 'Paramedis', 8, '2016-06-01', 5, '59060388', 'Rina Susanti', 'A.Md.Kep', 'P', '2000-06-05', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(112, 'Keperawatan Umum', 'Pws. Rawat Inap Modular', NULL, 'Keperawatan Modular Koordinator', 'Paramedis', 8, '2016-06-01', 5, '59060389', 'Jenny Christina Metawati Hutapea', 'S.Kep, Ns', 'P', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(113, 'Keperawatan Umum', 'Supervisor', NULL, 'Supervisor', 'Paramedis', 7, '2017-06-01', 4, '59060351', 'Nurdiastuti', 'S.Kep, Ns', 'P', '1999-06-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(114, 'Kebidanan', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group IV', 'Paramedis', 8, '2017-06-01', 4, '59060870', 'Nurmala Silaen', 'A.Md.Keb', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(115, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Koordinator', 'Paramedis', 6, '2015-06-01', 6, '59060249', 'Ida Susanthi', 'S.Kep, Ns', 'P', '1991-09-06', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(116, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Koordinator', 'Paramedis', 6, '2016-06-01', 5, '59060234', 'Elitha Hannum Pohan', 'A.Md.Kep', 'P', '1991-08-01', 'D3', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(117, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group II', 'Paramedis', 9, '2013-06-01', 8, '59060872', 'Citra Dewi Yana', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(118, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group III', 'Paramedis', 11, '2014-06-01', 7, '59061590', 'Sucie Renggogeni', 'A.Md.Kep', 'P', '2008-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(119, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 3', NULL, 'Keperawatan Lantai 3 Group III', 'Paramedis', 12, '2018-04-01', 3, '59062482', 'Heti Rohayati', 'A.Md.Kep', 'P', '2018-04-01', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(124, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Koordinator', 'Paramedis', 8, '2019-06-01', 2, '59060894', 'Berlianah', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(125, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group II', 'Paramedis', 11, '2014-06-01', 7, '59061588', 'Desmawita', 'S.Kep, Ns', 'P', '2008-07-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(126, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group I', 'Paramedis', 11, '2014-06-01', 7, '59061589', 'Juniati', 'A.Md.Kep', 'P', '2008-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(133, 'Keperawatan Umum', 'Supervisor', NULL, 'Supervisor', 'Paramedis', 7, '2014-06-01', 7, '59060329', 'Nancy Kartika Sarie', 'A.Md.Kep', 'P', '1999-06-01', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(134, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 3', NULL, 'Keperawatan Lantai 3 Group VI', 'Paramedis', 12, '2017-10-01', 3, '59062402', 'Dyah Pratina Sari', 'A.Md.Kep', 'P', '2017-10-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(140, 'Kebidanan', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group V', 'Paramedis', 8, '2018-06-01', 3, '59060868', 'Lismarni Zain', 'A.Md.Keb', 'P', '2000-11-15', 'D3', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(141, 'Pemasaran & Pengembangan', 'Pnt. Pendukung Pemasaran', NULL, 'Pemasaran & Pengembangan', 'Non Medis', 9, '2019-06-01', 2, '59061125', 'Lenny Hotna M Sinaga', 'A.Md.Keb, M.Kes', 'P', '2003-04-01', 'D4', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(142, 'Kebidanan', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group I', 'Paramedis', 11, '2014-06-01', 7, '59061594', 'Rina Hastani', 'A.Md.Keb', 'P', '2008-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(143, 'Kebidanan', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group VI', 'Paramedis', 11, '2017-06-01', 4, '59061864', 'Siti Aisyah Nurlaeli', 'A.Md.Keb', 'P', '2011-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(144, 'Kebidanan', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group II', 'Paramedis', 11, '2014-06-01', 7, '59061595', 'Tatin Sariningsih', 'A.Md.Keb', 'P', '2008-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(146, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 3', NULL, 'Keperawatan Lantai 3 Koordinator', 'Paramedis', 6, '2015-06-01', 6, '59060333', 'Siti Marwati Daeng Ngaseng', 'S.Kep, Ns', 'P', '1999-06-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(147, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group IV', 'Paramedis', 9, '2019-06-01', 2, '59061075', 'Tri Apriyanti', 'S.Kep, Ns', 'P', '2003-02-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(148, 'Kebidanan', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group III', 'Paramedis', 10, '2017-06-01', 4, '59061288', 'Ndari Purwidaningsih', 'A.Md.Keb', 'P', '2005-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(149, 'Kebidanan', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group I', 'Paramedis', 9, '2014-06-01', 7, '59060902', 'Ramauli Samosir', 'A.Md.Keb', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(150, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group II', 'Paramedis', 11, '2016-06-01', 5, '59061791', 'Alien Marlina ', 'A.Md.Kep', 'P', '2010-06-01', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(151, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group II', 'Paramedis', 10, '2019-06-01', 2, '59061226', 'Deassy Ari Sandy Ratna Komala Sari', 'A.Md.Kep', 'L', '2004-03-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(152, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group I', 'Paramedis', 8, '2019-06-01', 2, '59060877', 'Eko Sutrisno', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(153, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group III', 'Paramedis', 9, '2014-06-01', 7, '59060875', 'Tri Karunianingsih', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(154, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Lantai 3 Group IV', 'Paramedis', 8, '2019-06-01', 2, '59060884', 'Tuti Fathonah', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(158, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group VI', 'Paramedis', 9, '2015-06-01', 6, '59060801', 'Tetty Lidya Rosnawati Sihombing', 'S.Kep, Ns, S.KM', 'P', '2000-10-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(159, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group VI', 'Paramedis', 9, '2016-06-01', 5, '59060898', 'Endah Kartikawati', 'A.Md.Kep', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(160, 'SDM', 'Ka. SDM ', 'Ka.', 'SDM', 'Non Medis', 6, '2018-06-01', 3, '59060330', 'Reno Sari', 'S.ST, MARS', 'P', '1999-06-01', 'S2', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-07 11:14:44'),
(161, 'SDM', 'Pws. Renbang & Diklat ', NULL, 'Renbang & Diklat', 'Non Medis', 9, '2019-06-01', 2, '59060988', 'Ernawaty', 'S.E', 'L', '2001-10-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(163, 'SDM', 'Pnt. Diklat ', NULL, 'Diklat', 'Non Medis', 10, '2017-06-01', 4, '59061289', 'Sumantri ', 'S.AP, M.AP', 'P', '2005-07-01', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(164, 'SDM', 'Pws. HIK & Layanan Pekerja ', NULL, 'HIK & Layanan Pekerja', 'Non Medis', 9, '2019-06-01', 2, '59060911', 'Wiwik Trihastuti', 'A.Md.Kom', 'L', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(165, 'Hubungan Masyarakat', 'Pws. Hubungan Masyarakat', NULL, 'Hubungan Masyarakat', 'Non Medis', 10, '2017-09-01', 3, '59062398', 'M. Rezza Pah Levi', 'S.T', 'P', '2017-09-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(166, 'SDM', 'Pnt. Sekretaris', NULL, 'Sekretaris', 'Non Medis', 11, '2017-06-01', 4, '59060584', 'Erni Astuti', 'S.E', 'P', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(168, 'Logistik', 'Ka. Logistik ', 'Ka.', 'Logistik', 'Non Medis', 9, '2014-06-01', 7, '59060871', 'Heru Indra Cahya', 'S.E, M.KM', 'L', '2000-11-15', 'S2', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:41'),
(169, 'Logistik', 'Pws. Pengadaan ', NULL, 'Pengadaan', 'Non Medis', 11, '2014-06-01', 7, '59060881', 'Sujarwadi', NULL, 'P', '2000-11-15', 'SMK', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(170, 'Logistik', 'Pnt. Pengadaan Barang Farmasi', NULL, 'Pengadaan Barang Farmasi', 'Non Medis', 12, '2013-06-01', 8, '59061598', 'Dewi Mardasari', 'S.E', 'L', '2008-07-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(171, 'Logistik', 'Pnt. Penerimaan Barang Umum', NULL, 'Penerimaan Barang Umum', 'Non Medis', 10, '2017-09-01', 3, '59062397', 'Jefri Achmad', 'S.E', 'L', '2017-09-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(172, 'Elektromedik', 'Pws. Medeq & Lismek', NULL, 'Elektromedik', 'Non Medis', 11, '2018-06-01', 3, '59061854', 'Wahyu Wiarso', 'A.Md.T.E', 'L', '2011-05-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(173, 'Teknik', 'Pnt. Listrik Mekanik', NULL, 'Listrik Mekanik', 'Non Medis', 11, '2017-06-01', 4, '59060878', 'Suyatman', NULL, 'L', '2000-11-15', 'STM', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(174, 'Teknik', 'Pnt. Listrik Mekanik', NULL, 'Listrik Mekanik', 'Non Medis', 11, '2019-06-01', 2, '59061073', 'Syahrulloh', NULL, 'L', '2003-02-01', 'STM', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(175, 'Teknik', 'Pnt. Listrik Mekanik', NULL, 'Listrik Mekanik', 'Non Medis', 11, '2014-06-01', 7, '59060374', 'Tarmuka', NULL, 'L', '2000-06-05', 'STM', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(176, 'Teknik', 'Pws. Teknik Sipil ', NULL, 'Sipil', 'Non Medis', 10, '2015-06-01', 6, '59060409', 'Abdul Fakih', 'S.T', 'L', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(177, 'Teknik', 'Pnt. Administrasi Teknik ', NULL, 'Sipil', 'Non Medis', 12, '2018-06-01', 3, '59061873', 'Febriyanto Firdaus', NULL, 'L', '2011-09-15', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(178, 'Teknik', 'Ka. Teknik', 'Ka.', 'Sipil', 'Non Medis', 9, '2019-06-01', 2, '59060992', 'Agus Suparyono', 'S.T', 'L', '2001-10-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:45'),
(179, 'Pemulasaran Jenazah', 'Pws. Fasilitas Umum', NULL, 'Pemulasaran Jenazah', 'Non Medis', 9, '2017-06-01', 4, '59060408', 'Djaelani', 'S.E', 'L', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(180, 'Layanan Umum', 'Pnt. Fasilitas Umum', NULL, 'Layanan Umum', 'Non Medis', 12, '2011-06-01', 10, '59060337', 'Usahanta Tarigan', NULL, 'L', '1999-06-01', 'STM', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(181, 'Layanan Umum', 'Ka. Layanan Umum', 'Ka.', 'Layanan Umum', 'Non Medis', 9, '2019-06-01', 2, '59060474', 'Yakub Maulana', 'S.E', 'P', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:39'),
(182, 'Akt. Keuangan & Akt. Manajemen', 'Head Of Controller', NULL, 'Keuangan', 'Non Medis', 10, '2019-06-01', 2, '59061410', 'Rezqi Kusuma Dewi', 'S.E', 'L', '2006-09-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(184, 'Akt. Keuangan & Akt. Manajemen', 'Sr. Officer Management Accounting', NULL, 'Keuangan', 'Non Medis', 11, '2019-06-01', 2, '59061412', 'Thessa Sylvia Fahmi', 'S.E', 'L', '2006-09-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(185, 'Treasury & Kas/Bank', 'Head Of Treasury', NULL, 'Keuangan', 'Non Medis', 9, '2019-06-01', 2, '59060520', 'Harianto', 'S.E', 'P', '2000-06-05', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(186, 'Treasury & Kas/Bank', 'Sr. Officer Finance Accounting & Reporting', NULL, 'Keuangan', 'Non Medis', 9, '2019-06-01', 2, '59060287', 'Trimiastuti', 'S.E', 'P', '1999-06-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(187, 'Treasury & Kas/Bank', 'Sr. Officer Cash Management Bank', NULL, 'Keuangan', 'Non Medis', 9, '2016-06-01', 5, '59060885', 'Dwi Farianti Sari', 'S.E', 'L', '2000-11-15', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(189, 'Piutang', 'Head Of Account Receivable', NULL, 'Keuangan', 'Non Medis', 9, '2014-12-01', 6, '59061866', 'Sisy Silvia', 'S.E', 'L', '2011-07-15', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(190, 'Piutang', 'Sr. Officer Account Receivable ICT', NULL, 'Keuangan', 'Non Medis', 12, '2017-06-01', 4, '59062017', 'Daddi Julisworo', 'S.E', 'L', '2013-01-02', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(191, 'Piutang', 'Sr. Officer Account Receivable Non ICT', NULL, 'Keuangan', 'Non Medis', 10, '2014-12-01', 6, '59062144', 'Muhammad Andi Hakim', 'S.E', 'P', '2014-12-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(192, 'Piutang', 'Officer Account Receivable', 'OAR', 'Keuangan', 'Non Medis', 10, '2014-06-23', 7, '59062096', 'Agustina Veronica Ompusunggu', 'S.E', 'L', '2014-07-01', 'S1', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-07 11:14:59'),
(193, 'Pajak', 'Sr. Officer Taxation', NULL, 'Keuangan', 'Non Medis', 11, '2015-12-01', 5, '59060517', 'Bambang Sugiyanto', NULL, 'P', '2000-06-05', 'SMA', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(194, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group III', 'Paramedis', 10, '2017-06-01', 4, '59061497', 'Solepawati', 'A.Md.Kep', 'P', '2007-06-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(195, 'Kebidanan', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group V', 'Paramedis', 11, '2018-06-01', 3, '59061499', 'Widyawati', 'A.Md.Keb', 'P', '2007-06-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(196, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group V', 'Paramedis', 9, '2013-06-01', 6, '59060888', 'Dwi Murdiyati', 'A.Md.Kep, S.E', 'P', '2000-11-15', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(197, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group I', 'Paramedis', 11, '2014-06-01', 5, '59061591', 'Rina Angraini', 'A.Md.Kep', 'P', '2008-07-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(198, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group VI', 'Paramedis', 9, '2014-06-01', 5, '59060570', 'Sitti Haeriah Hareta', 'A.Md.Kep', 'P', '2000-06-05', 'D3', 'PWTT', 'Janda', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(199, 'Keperawatan Umum', 'Pnt. Rawat Inap Modular', NULL, 'Keperawatan Modular Group IV', 'Paramedis', 7, '2016-06-01', 3, '59060327', 'Yuli Sumartriani', 'A.Md.Kep', 'P', '1999-06-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(200, 'Keperawatan Umum', 'Pnt. Rawat Inap Lantai 2', NULL, 'Keperawatan Lantai 2 Group II', 'Paramedis', 10, '2019-06-01', 0, '59061586', 'Ade Yayah Inayatun Muzdalifah', 'S.Kep, Ns', 'P', '2008-07-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(201, 'Keperawatan Umum', 'Pnt. IGD ', NULL, 'Keperawatan IGD Group VI', 'Paramedis', 9, '2016-06-01', 5, '59060869', 'Elya Fitri', 'S.Kep, Ns', 'P', '2000-11-15', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(203, 'KSM Umum', 'KSM Rumah Sakit', 'KSM', 'KSM Lantai 2', 'Medis', 8, '2017-09-01', 3, '59062395', 'Cahyono Hendro', 'dr', 'P', '2017-09-01', 'S1', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-07 11:14:55'),
(204, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi Perencanaan', 'Penunjang Medis', 9, '2019-06-01', 2, '59060308', 'Suprihatin Ningsih', NULL, 'P', '1999-06-01', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(205, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Inap', NULL, 'Farmasi Rawat Inap', 'Penunjang Medis', 13, '2017-10-15', 3, '59062431', 'Dwi Purnamasari', NULL, 'P', '2017-11-01', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(206, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi IGD', 'Penunjang Medis', 14, '2018-04-01', 3, '59062483', 'Nindi Eka Sari', NULL, 'P', '2018-04-01', 'SMF', 'PWTT', 'Lajang', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(211, 'Asisten Apoteker', 'Pnt. Farmasi Rawat Jalan', NULL, 'Farmasi Modular', 'Penunjang Medis', 9, '2019-06-01', 2, '59060416', 'Ida Hayati', NULL, 'L', '2000-06-05', 'SMF', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(212, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group I', 'Paramedis', 12, '2017-10-01', 2, '59062404', 'Yandry Supriyadi', 'A.Md.Kep', 'L', '2017-10-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00'),
(216, 'Keperawatan Umum', 'Pnt. ICU ', NULL, 'Keperawatan ICU Group II', 'Paramedis', 12, '2017-10-01', 3, '59062410', 'Ridwan Firmansyah', 'A.Md.Kep', NULL, '2017-10-01', 'D3', 'PWTT', 'Nikah', '2021-07-04 00:00:00', '2021-07-03 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_perjalanan`
--

CREATE TABLE `rencana_perjalanan` (
  `id` int(11) NOT NULL,
  `id_pekerja` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `tgl_mulai_perjalanan` datetime NOT NULL,
  `tgl_berakhir_perjalanan` datetime DEFAULT NULL,
  `is_jabodetabek` varchar(100) NOT NULL,
  `jenis_transport` varchar(50) NOT NULL,
  `destinasi` varchar(50) NOT NULL,
  `item` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rencana_perjalanan`
--

INSERT INTO `rencana_perjalanan` (`id`, `id_pekerja`, `kode`, `tgl_mulai_perjalanan`, `tgl_berakhir_perjalanan`, `is_jabodetabek`, `jenis_transport`, `destinasi`, `item`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 1, 'SPD20210730225538', '2021-07-31 00:00:00', '2021-08-01 00:00:00', 'Jabodetabek', 'transport_bandara', 'Jakarta', 'Akomodasi', 225000, '2021-07-30 22:55:38', '2021-07-30 15:55:38'),
(2, 1, 'SPD20210730225538', '2021-07-31 00:00:00', '2021-08-01 00:00:00', 'Jabodetabek', 'transport_bandara', 'Jakarta', 'Transport Lokal Jabodetabek', 100000, '2021-07-30 22:55:38', '2021-07-30 15:55:38'),
(3, 1, 'SPD20210730225538', '2021-07-31 00:00:00', '2021-08-01 00:00:00', 'Jabodetabek', 'transport_bandara', 'Jakarta', 'Transport Lokal Non Jabodetabek', 75000, '2021-07-30 22:55:38', '2021-07-30 15:55:38'),
(4, 1, 'SPD20211122001102', '2021-11-23 00:00:00', '2021-11-24 00:00:00', 'Non Jabodetabek', 'transport_bandara', 'Jakarta', 'Akomodasi', 225000, '2021-11-22 00:11:02', '2021-11-21 17:11:02'),
(5, 1, 'SPD20211122001102', '2021-11-23 00:00:00', '2021-11-24 00:00:00', 'Non Jabodetabek', 'transport_bandara', 'Jakarta', 'Transport Lokal Jabodetabek', 100000, '2021-11-22 00:11:02', '2021-11-21 17:11:02'),
(6, 1, 'SPD20211122001102', '2021-11-23 00:00:00', '2021-11-24 00:00:00', 'Non Jabodetabek', 'transport_bandara', 'Jakarta', 'Transport Lokal Non Jabodetabek', 75000, '2021-11-22 00:11:02', '2021-11-21 17:11:02'),
(7, 1, 'SPD20211122001102', '2021-11-23 00:00:00', '2021-11-24 00:00:00', 'Non Jabodetabek', 'transport_bandara', 'Jakarta', 'Makan Pagi', 50000, '2021-11-22 00:11:02', '2021-11-21 17:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `rules_cuti`
--

CREATE TABLE `rules_cuti` (
  `id` int(11) NOT NULL,
  `tahun_ke` int(11) NOT NULL,
  `jlh_cuti` int(11) NOT NULL COMMENT 'Hari',
  `kadaluarsa` int(11) NOT NULL COMMENT 'Tahun',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules_cuti`
--

INSERT INTO `rules_cuti` (`id`, `tahun_ke`, `jlh_cuti`, `kadaluarsa`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 1, '2021-07-04 14:09:28', '2021-07-04 07:09:37'),
(2, 2, 12, 1, '2021-07-04 14:09:28', '2021-07-04 07:09:37'),
(3, 3, 26, 3, '2021-07-04 14:09:28', '2021-07-04 07:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `sisa_cuti`
--

CREATE TABLE `sisa_cuti` (
  `id` int(11) NOT NULL,
  `id_pekerja` int(11) NOT NULL,
  `sisa_sebelumnya` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sisa_cuti`
--

INSERT INTO `sisa_cuti` (`id`, `id_pekerja`, `sisa_sebelumnya`, `created_at`, `updated_at`) VALUES
(2, 1, 20, '2021-07-06 18:24:16', '2021-07-06 11:26:33'),
(3, 1, 19, '2021-07-06 18:26:50', '2021-07-06 11:26:50'),
(4, 1, 18, '2021-07-06 18:29:52', '2021-07-06 11:29:52'),
(5, 1, 17, '2021-07-08 09:07:26', '2021-07-08 02:07:26'),
(6, 1, 16, '2021-07-30 16:14:44', '2021-07-30 09:14:44'),
(7, 1, 15, '2021-07-30 22:51:38', '2021-07-30 15:51:38'),
(8, 1, 14, '2021-07-30 22:51:58', '2021-07-30 15:51:58'),
(9, 1, 13, '2021-07-30 22:52:33', '2021-07-30 15:52:33'),
(10, 1, 12, '2021-07-30 22:52:37', '2021-07-30 15:52:37'),
(11, 1, 11, '2021-07-30 22:52:55', '2021-07-30 15:52:55'),
(12, 1, 10, '2021-07-30 22:55:10', '2021-07-30 15:55:10'),
(13, 1, 9, '2021-11-22 00:01:16', '2021-11-21 17:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `spd_golongan`
--

CREATE TABLE `spd_golongan` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `gol_upah` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spd_golongan`
--

INSERT INTO `spd_golongan` (`id`, `item`, `gol_upah`, `nominal`, `created_at`, `updated_at`) VALUES
(7, 'Akomodasi', '1,2,3,4,5', 200000, '2005-07-21 00:00:00', '2021-07-07 02:45:07'),
(8, 'Akomodasi', '6,7,8,9', 175000, '2005-07-21 00:00:00', '2021-07-07 02:46:35'),
(9, 'Akomodasi', '10,11,12,13,15', 150000, '2005-07-21 00:00:00', '2021-07-07 02:52:12'),
(16, 'Transport Lokal Jabodetabek', '1,2,3,4,5', 100000, '2005-07-21 00:00:00', '2021-07-07 02:45:16'),
(17, 'Transport Lokal Jabodetabek', '6,7,8,9', 100000, '2005-07-21 00:00:00', '2021-07-07 02:46:39'),
(18, 'Transport Lokal Jabodetabek', '10,11,12,13,15', 100000, '2005-07-21 00:00:00', '2021-07-07 02:46:52'),
(25, 'Transport Lokal Non Jabodetabek', '1,2,3,4,5', 75000, '2005-07-21 00:00:00', '2021-07-07 02:45:20'),
(26, 'Transport Lokal Non Jabodetabek', '6,7,8,9', 75000, '2005-07-21 00:00:00', '2021-07-07 02:46:43'),
(27, 'Transport Lokal Non Jabodetabek', '10,11,12,13,15', 75000, '2005-07-21 00:00:00', '2021-07-07 02:47:01'),
(34, 'Makan Pagi', '1,2,3,4,5', 50000, '2005-07-21 00:00:00', '2021-07-07 02:45:27'),
(35, 'Makan Pagi', '6,7,8,9', 50000, '2005-07-21 00:00:00', '2021-07-07 02:46:28'),
(36, 'Makan Pagi', '10,11,12,13,15', 50000, '2005-07-21 00:00:00', '2021-07-07 02:47:07'),
(43, 'Makan Siang', '1,2,3,4,5', 75000, '2005-07-21 00:00:00', '2021-07-07 02:45:49'),
(44, 'Makan Siang', '6,7,8,9', 65000, '2005-07-21 00:00:00', '2021-07-07 02:46:23'),
(45, 'Makan Siang', '10,11,12,13,15', 60000, '2005-07-21 00:00:00', '2021-07-07 02:47:10'),
(52, 'Makan Malam', '1,2,3,4,5', 75000, '2005-07-21 00:00:00', '2021-07-07 02:45:53'),
(53, 'Makan Malam', '6,7,8,9', 65000, '2005-07-21 00:00:00', '2021-07-07 02:46:19'),
(54, 'Makan Malam', '10,11,12,13,15', 60000, '2005-07-21 00:00:00', '2021-07-07 02:47:14'),
(61, 'Uang Harian', '1,2,3,4,5', 120000, '2005-07-21 00:00:00', '2021-07-07 02:46:01'),
(62, 'Uang Harian', '6,7,8,9', 100000, '2005-07-21 00:00:00', '2021-07-07 02:46:07'),
(63, 'Uang Harian', '10,11,12,13,15', 80000, '2005-07-21 00:00:00', '2021-07-07 02:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `spd_golongan_backup`
--

CREATE TABLE `spd_golongan_backup` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `gol_upah` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spd_golongan_backup`
--

INSERT INTO `spd_golongan_backup` (`id`, `item`, `gol_upah`, `nominal`, `created_at`, `updated_at`) VALUES
(7, 'Akomodasi', '1,2,3,4,5', 200000, '2005-07-21 00:00:00', '2021-07-07 02:45:07'),
(8, 'Akomodasi', '6,7,8,9', 175000, '2005-07-21 00:00:00', '2021-07-07 02:46:35'),
(9, 'Akomodasi', '10,11,12,13,15', 150000, '2005-07-21 00:00:00', '2021-07-07 02:52:12'),
(16, 'Transport Lokal Jabodetabek', '1,2,3,4,5', 100000, '2005-07-21 00:00:00', '2021-07-07 02:45:16'),
(17, 'Transport Lokal Jabodetabek', '6,7,8,9', 100000, '2005-07-21 00:00:00', '2021-07-07 02:46:39'),
(18, 'Transport Lokal Jabodetabek', '10,11,12,13,15', 100000, '2005-07-21 00:00:00', '2021-07-07 02:46:52'),
(25, 'Transport Lokal Non Jabodetabek', '1,2,3,4,5', 75000, '2005-07-21 00:00:00', '2021-07-07 02:45:20'),
(26, 'Transport Lokal Non Jabodetabek', '6,7,8,9', 75000, '2005-07-21 00:00:00', '2021-07-07 02:46:43'),
(27, 'Transport Lokal Non Jabodetabek', '10,11,12,13,15', 75000, '2005-07-21 00:00:00', '2021-07-07 02:47:01'),
(34, 'Makan Pagi', '1,2,3,4,5', 50000, '2005-07-21 00:00:00', '2021-07-07 02:45:27'),
(35, 'Makan Pagi', '6,7,8,9', 50000, '2005-07-21 00:00:00', '2021-07-07 02:46:28'),
(36, 'Makan Pagi', '10,11,12,13,15', 50000, '2005-07-21 00:00:00', '2021-07-07 02:47:07'),
(43, 'Makan Siang', '1,2,3,4,5', 75000, '2005-07-21 00:00:00', '2021-07-07 02:45:49'),
(44, 'Makan Siang', '6,7,8,9', 65000, '2005-07-21 00:00:00', '2021-07-07 02:46:23'),
(45, 'Makan Siang', '10,11,12,13,15', 60000, '2005-07-21 00:00:00', '2021-07-07 02:47:10'),
(52, 'Makan Malam', '1,2,3,4,5', 75000, '2005-07-21 00:00:00', '2021-07-07 02:45:53'),
(53, 'Makan Malam', '6,7,8,9', 65000, '2005-07-21 00:00:00', '2021-07-07 02:46:19'),
(54, 'Makan Malam', '10,11,12,13,15', 60000, '2005-07-21 00:00:00', '2021-07-07 02:47:14'),
(61, 'Uang Harian', '1,2,3,4,5', 120000, '2005-07-21 00:00:00', '2021-07-07 02:46:01'),
(62, 'Uang Harian', '6,7,8,9', 100000, '2005-07-21 00:00:00', '2021-07-07 02:46:07'),
(63, 'Uang Harian', '10,11,12,13,15', 80000, '2005-07-21 00:00:00', '2021-07-07 02:47:20'),
(64, 'Akomodasi', 'Vice President', 250000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(65, 'Akomodasi', 'Direktur', 225000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(66, 'Akomodasi', 'Manager', 200000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(67, 'Akomodasi', 'Wakil Direktur', 200000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(68, 'Akomodasi', 'Asisten Manager', 180000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(69, 'Akomodasi', 'Ka.', 180000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(70, 'Transport Lokal Jabodetabek', 'Vice President', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(71, 'Transport Lokal Jabodetabek', 'Direktur', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(72, 'Transport Lokal Jabodetabek', 'Manager', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(73, 'Transport Lokal Jabodetabek', 'Wakil Direktur', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(74, 'Transport Lokal Jabodetabek', 'Asisten Manager', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(75, 'Transport Lokal Jabodetabek', 'Ka.', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(76, 'Transport Lokal Non Jabodetabek', 'Vice President', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(77, 'Transport Lokal Non Jabodetabek', 'Direktur', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(78, 'Transport Lokal Non Jabodetabek', 'Manager', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(79, 'Transport Lokal Non Jabodetabek', 'Wakil Direktur', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(80, 'Transport Lokal Non Jabodetabek', 'Asisten Manager', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(81, 'Transport Lokal Non Jabodetabek', 'Ka.', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(82, 'Makan Pagi', 'Vice President', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(83, 'Makan Pagi', 'Direktur', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(84, 'Makan Pagi', 'Manager', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(85, 'Makan Pagi', 'Wakil Direktur', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(86, 'Makan Pagi', 'Asisten Manager', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(87, 'Makan Pagi', 'Ka.', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(88, 'Makan Siang', 'Vice President', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(89, 'Makan Siang', 'Direktur', 90000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(90, 'Makan Siang', 'Manager', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(91, 'Makan Siang', 'Wakil Direktur', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(92, 'Makan Siang', 'Asisten Manager', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(93, 'Makan Siang', 'Ka.', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(94, 'Makan Malam', 'Vice President', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(95, 'Makan Malam', 'Direktur', 90000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(96, 'Makan Malam', 'Manager', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(97, 'Makan Malam', 'Wakil Direktur', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(98, 'Makan Malam', 'Asisten Manager', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(99, 'Makan Malam', 'Ka.', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(100, 'Uang Harian', 'Vice President', 150000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(101, 'Uang Harian', 'Direktur', 135000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(102, 'Uang Harian', 'Manager', 125000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(103, 'Uang Harian', 'Wakil Direktur', 125000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(104, 'Uang Harian', 'Asisten Manager', 110000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(105, 'Uang Harian', 'Ka.', 110000, '2005-07-21 00:00:00', '2005-07-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `spd_jabatan`
--

CREATE TABLE `spd_jabatan` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spd_jabatan`
--

INSERT INTO `spd_jabatan` (`id`, `item`, `nama_jabatan`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 'Akomodasi', 'Vice President', 250000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(2, 'Akomodasi', 'Direktur', 225000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(3, 'Akomodasi', 'Manager', 200000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(4, 'Akomodasi', 'Wakil Direktur', 200000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(5, 'Akomodasi', 'Asisten Manager', 180000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(6, 'Akomodasi', 'Ka.', 180000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(10, 'Transport Lokal Jabodetabek', 'Vice President', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(11, 'Transport Lokal Jabodetabek', 'Direktur', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(12, 'Transport Lokal Jabodetabek', 'Manager', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(13, 'Transport Lokal Jabodetabek', 'Wakil Direktur', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(14, 'Transport Lokal Jabodetabek', 'Asisten Manager', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(15, 'Transport Lokal Jabodetabek', 'Ka.', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(19, 'Transport Lokal Non Jabodetabek', 'Vice President', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(20, 'Transport Lokal Non Jabodetabek', 'Direktur', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(21, 'Transport Lokal Non Jabodetabek', 'Manager', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(22, 'Transport Lokal Non Jabodetabek', 'Wakil Direktur', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(23, 'Transport Lokal Non Jabodetabek', 'Asisten Manager', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(24, 'Transport Lokal Non Jabodetabek', 'Ka.', 75000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(28, 'Makan Pagi', 'Vice President', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(29, 'Makan Pagi', 'Direktur', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(30, 'Makan Pagi', 'Manager', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(31, 'Makan Pagi', 'Wakil Direktur', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(32, 'Makan Pagi', 'Asisten Manager', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(33, 'Makan Pagi', 'Ka.', 50000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(37, 'Makan Siang', 'Vice President', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(38, 'Makan Siang', 'Direktur', 90000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(39, 'Makan Siang', 'Manager', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(40, 'Makan Siang', 'Wakil Direktur', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(41, 'Makan Siang', 'Asisten Manager', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(42, 'Makan Siang', 'Ka.', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(46, 'Makan Malam', 'Vice President', 100000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(47, 'Makan Malam', 'Direktur', 90000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(48, 'Makan Malam', 'Manager', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(49, 'Makan Malam', 'Wakil Direktur', 80000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(50, 'Makan Malam', 'Asisten Manager', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(51, 'Makan Malam', 'Ka.', 70000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(55, 'Uang Harian', 'Vice President', 150000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(56, 'Uang Harian', 'Direktur', 135000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(57, 'Uang Harian', 'Manager', 125000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(58, 'Uang Harian', 'Wakil Direktur', 125000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(59, 'Uang Harian', 'Asisten Manager', 110000, '2005-07-21 00:00:00', '2005-07-20 17:00:00'),
(60, 'Uang Harian', 'Ka.', 110000, '2005-07-21 00:00:00', '2005-07-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_spd`
--

CREATE TABLE `sub_spd` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `destinasi` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_spd`
--

INSERT INTO `sub_spd` (`id`, `item`, `keterangan`, `destinasi`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 'transport_bandara', 'Transport dari/ke Bandara', 'Jakarta', 150000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(2, 'transport_bandara', 'Transport dari/ke Bandara', 'Balikpapan', 75000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(3, 'transport_bandara', 'Transport dari/ke Bandara', 'Prabumulih', 175000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(4, 'transport_bandara', 'Transport dari/ke Bandara', 'Tanjung', 275000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(5, 'transport_bandara', 'Transport dari/ke Bandara', 'Tarakan', 100000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(6, 'transport_bandara', 'Transport dari/ke Bandara', 'Pangkalan Brandan', 150000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(7, 'transport_bandara', 'Transport dari/ke Bandara', 'Sorong', 125000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(8, 'transport_bandara', 'Transport dari/ke Bandara', 'Plaju', 75000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(9, 'transport_bandara', 'Transport dari/ke Bandara', 'Area 1', 125000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(10, 'transport_bandara', 'Transport dari/ke Bandara', 'Area 2', 100000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(11, 'transport_bandara', 'Transport dari/ke Bandara', 'Area 3', 75000, '2021-07-06 00:00:00', '2021-07-05 17:00:00'),
(12, 'transport_non_bandara', 'Transport Non Bandara (stasiun,terminal,pleabuhan)', 'Jakarta', 100000, '2021-07-06 00:00:00', '2021-07-07 07:12:06'),
(13, 'transport_non_bandara', 'Transport Non Bandara (stasiun,terminal,pleabuhan)', 'Cirebon', 50000, '2021-07-06 00:00:00', '2021-07-07 07:09:28'),
(14, 'transport_non_bandara', 'Transport Non Bandara (stasiun,terminal,pleabuhan)', 'Balikpapan', 50000, '2021-07-06 00:00:00', '2021-07-07 07:09:31'),
(15, 'transport_non_bandara', 'Transport Non Bandara (stasiun,terminal,pleabuhan)', 'Pangkalan Brandan', 75000, '2021-07-06 00:00:00', '2021-07-07 07:09:00'),
(16, 'transport_non_bandara', 'Transport Non Bandara (stasiun,terminal,pleabuhan)', 'Area 1', 75000, '2021-07-06 00:00:00', '2021-07-07 07:09:15'),
(17, 'transport_non_bandara', 'Transport Non Bandara (stasiun,terminal,pleabuhan)', 'Area 2', 60000, '2021-07-06 00:00:00', '2021-07-07 07:09:22'),
(18, 'transport_non_bandara', 'Transport Non Bandara (stasiun,terminal,pleabuhan)', 'Area 3', 50000, '2021-07-06 00:00:00', '2021-07-07 07:09:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pekerja` (`id_pekerja`);

--
-- Indexes for table `master_pekerja`
--
ALTER TABLE `master_pekerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rencana_perjalanan`
--
ALTER TABLE `rencana_perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules_cuti`
--
ALTER TABLE `rules_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sisa_cuti`
--
ALTER TABLE `sisa_cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pekerja` (`id_pekerja`);

--
-- Indexes for table `spd_golongan`
--
ALTER TABLE `spd_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spd_golongan_backup`
--
ALTER TABLE `spd_golongan_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spd_jabatan`
--
ALTER TABLE `spd_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_spd`
--
ALTER TABLE `sub_spd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_pekerja`
--
ALTER TABLE `master_pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `rencana_perjalanan`
--
ALTER TABLE `rencana_perjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rules_cuti`
--
ALTER TABLE `rules_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sisa_cuti`
--
ALTER TABLE `sisa_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `spd_golongan`
--
ALTER TABLE `spd_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `spd_golongan_backup`
--
ALTER TABLE `spd_golongan_backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `spd_jabatan`
--
ALTER TABLE `spd_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `sub_spd`
--
ALTER TABLE `sub_spd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`id_pekerja`) REFERENCES `master_pekerja` (`id`);

--
-- Constraints for table `sisa_cuti`
--
ALTER TABLE `sisa_cuti`
  ADD CONSTRAINT `sisa_cuti_ibfk_1` FOREIGN KEY (`id_pekerja`) REFERENCES `master_pekerja` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
