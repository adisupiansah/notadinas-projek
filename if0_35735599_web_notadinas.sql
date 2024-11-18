-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.infinityfree.com
-- Waktu pembuatan: 17 Nov 2024 pada 04.37
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35735599_web_notadinas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `kepada` varchar(100) DEFAULT NULL,
  `perihal` char(250) DEFAULT NULL,
  `no_ndkeluar` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `kepada`, `perihal`, `no_ndkeluar`, `tanggal`) VALUES
(44, 'Yth. Kapolres Karimun', 'pengajuan tagihan air Polres Karimun bulan Januari', 'B/ND-01/I/LOG.3.16./2024/Baglog', '2024-01-09'),
(45, 'Yth. Kapolres Karimun', 'pengajuan anggaran pemeliharaan dan perawatan kursi ruang kerja Sattahti Polres Karimun', 'B/ND-02/I/KEU./2024/Baglog', '2024-01-10'),
(46, 'Yth. Kapolres Karimun', 'permohonan pemeliharaan dan perawatan kendaraan dinas roda 2 Baglog Polres Karimun', 'B/ND-03/I/LOG./2024/Baglog', '2024-01-10'),
(47, 'Yth. Kapolres Karimun', 'permohonan pemeliharaan dan perawatan kendaraan dinas Roda 4 Thermyn I', 'B/ND-04/I/LOG./2024/Baglog', '2024-01-17'),
(48, 'Yth. kapolres Karimun', 'Pengajuan tagihan air Polres Karimun bulan Februari', 'B/ND-05/II/LOG.3.16./2024/Baglog', '2024-02-19'),
(49, 'Yth. Kapolres Karimun', 'Pengajuan anggaran pembuatan neon box Polres Karimun', 'B/ND-6/II/LOG./2024', '2024-02-21'),
(50, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan Januari 2024', 'B/ND-7/II/KEU./2024', '2024-02-22'),
(51, 'Yth. Kabag SDM Polres Karimun', 'pengiriman nama personil seleksi Dikbangspes Polri bulan April Tahun Anggaran 2024', 'B/ND-8/III/DIK.2.3./2024/BAGLOG', '2024-03-06'),
(52, 'Yth. Kapolres karimun', 'Permohonan pembayaran tagihan jasa kebersihan gedung  Bulan januari 2024', 'B/ND-9/III/LOG./2024/LOGISTIK', '2024-03-07'),
(53, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan jasa kebersihan gedung  Bulan Februari 2024', 'B/ND-10/III/LOG./2024/LOGSITIK', '2024-03-10'),
(54, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan Februari 2024', 'B/ND-11/III/KEU./2024', '2024-03-07'),
(55, 'Yth. Kabagops Polres Karimun', 'pengiriman nama personel yang terlibat Operasi Keselamatan Seligi 2024', 'B/ND-12/II/OPS.1.3./2024/Baglog', '2024-03-13'),
(56, 'Yth. Kapolres Karimun', 'Pengajuan Thermyn 1 atas pembayaran dan perawatan Kendaraan Khusus Roda 4 &amp; Roda 6 Polres karimun Tahun Anggaran 2024', 'B/ND-13/III/KEU./2024', '2024-03-18'),
(57, 'Yth. Kapolres Karimun', 'pengajuan tagihan air Polres Karimun bulan Maret', 'B/ND-14/III/LOG.3.16./2024/Baglog', '2024-03-18'),
(58, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik polres karimun bulan Maret 2024', 'B/ND-15/III/KEU./2024', '2024-03-21'),
(59, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan internet periode Februari (pemakaian Bulan januari) Satuan Bag/Sat/Si dan Polsek jajaran Polres Karimun', 'B/ND-16/III/KEU./2024/LOGISTIK', '2024-03-21'),
(60, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan internet periode Maret (Pemakaian bulan: Februari 2024) satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-17/III/KEU./2024/LOGISTIK', '2024-03-21'),
(61, 'Yth. Kapolres Karimun', 'pengajuan anggaran paket kegiatan pemeliharaan dan perawatan kendaraan roda 2 Polres Karimun Thermyn I', 'B/ND-18/III/KEU./2024', '2024-03-25'),
(62, 'Yth. Kapolres Karimun', 'pengajuan anggaran pengadaan BMP Polres larimun Thermyn I (januari - februari0 TA 2024', 'B/ND-19/III/KEU./2024', '2024-03-27'),
(63, 'Yth. Kapolres Karimun', 'pengajuan anggaran ATK Baglog Polres karimun triwulan I ( Januari, Februari, Maret) 2024.', 'B/ND-20/III/KEU./2024', '2024-03-27'),
(64, 'Yth. Kapolres karimun', 'permohonan pembayaran tagihan jasa kebersihan gedung dan halaman Polres karimun bulan Maret 2024', 'B/ND-21/III/LOG./2024/LOGISTIK', '2024-03-27'),
(65, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan Gaji ke 14 petugas jasa kebesihan gedung dan halaman Polres Karimun 2024', 'B/ND-22/III/LOG./2024/LOGISTIK', '2024-03-27'),
(66, 'Yth. Kapolres Karimun', 'pengajuan anggaran pengadaan BMP Polres Karimun Thermyn I (Januari - Februari) TA 2024-RM', 'B/ND-23/III/KEU./2024', '2024-03-27'),
(67, 'Yth. Kapolres Karimun', 'pengajuan thermyn I (satu) atas pembayaran penyelesaian pekerjaan Pemeliharaan dan Perawatan Kendaraan Roda 4 &amp; Roda 6', 'B/ND-24/III/KEU./2024', '2024-04-01'),
(68, 'Yth. Kapolres Karimun', 'Pengajuan tagihan air polres karimun bulan April Tahun Anggaran 2024', 'B/ND-25/IV/LOG.3.16./2024/Baglog', '2024-04-16'),
(69, 'Yth. Kabag SDM Polres Karimun', 'pengiriman nama personel Dikbangspes Polri bulan Mei Tahun Anggaran 2024', 'B/ND-26/IV/DIK.2.3./2024/Baglog', '2024-04-17'),
(70, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan internet periode April (pemakaian bulan: Maret 2024) satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-27/IV/KEU./2024/LOGISTIK', '2024-04-17'),
(71, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan April 2024', 'B/ND-28/IV/KEU./2024', '2024-04-25'),
(72, 'Yth. Kapolres Karimun', 'kendaraan roda 2 Polres Karimun Thermyn II (dua) Tahun Anggaran 2024', 'B/ND-29/V/Keu./2024', '2024-05-02'),
(73, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan jasa kebersihan gedung dan halaman Polres karimun bulan April 2024', 'B/ND-30/V/LOG./2024/LOGISTIK', '2024-05-02'),
(74, 'Yth. Kapolres Karimun', 'pengajuan anggaran pekerjaan pemeliharaan dan perawatan peralatan kantor pada Polres Karimun Triwulan I (satu) T.A. 2024', 'B/BD-31/IV/KEU./2024', '2024-05-07'),
(75, 'Yth. Kapolres Karimun', 'permohonan pemeliharaan dan perawatan kendaraan dinas Roda 4 Baglog Thermyn II (dua) Tahun Anggaran 2024', 'B/ND-32/V/LOG./2024/baglog', '2024-05-07'),
(76, 'Yth. Kapolres Karimun', 'pengajuan tagihan air Polres Karimun bulan Mei', 'B/ND-33/V/LOG.3.16./2024/Baglog', '2024-05-08'),
(77, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan Internet periode Mei (Pemakaian Bulan: April 2024) Satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-34/V/KEU./2024/LOGISTIK', '2024-05-16'),
(78, 'Yth. Kabag SDM Polres Karimun', 'permintaan nama personel sebagai Monitor Siswa latja SPN Polda Kepri Tahun Anggaran 2024', 'B/ND-35/V/DIK.2.1./2024/Baglog', '2024-05-20'),
(79, 'Yth. Kapolres Karimun', 'permohonan pemeliharaan dan perawatan dan kendaraan dinas Roda 2 Baglog Polres Karimun', 'B/ND-36/V/LOG.5.10.1./2024/Baglog', '2024-05-21'),
(80, 'Yth. Kapolres Karimun', 'pengiriman nama personel Baglog Polres Karimun yang akan melaksanakan cuti', 'B/ND-37/V/YAN.2.14./2024/Baglog', '2024-05-27'),
(81, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan Mei 2024', 'B/ND-38/V/KEU./2024', '2024-05-27'),
(82, 'Yth. Kapolres Karimun', 'pengajuan anggaran inventaris kantor kursi futura Polres Karimun T.A. 2024', 'B/ND-39/V/KEU./2024/Bag SDM ', '2024-05-29'),
(83, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan internet periode Juni (Pemakaian Bulan: Mei2024) satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-40/VI/KEU./2024/LOGISTIK', '2024-06-03'),
(84, 'Yth. Kapolres Karimun', 'pengajuan anggaran pengadaan BMP Polres Karimun Thermyn II ( Maret-April) T.A. 2024- PNBP Diluar Fungsi Lantas', 'B/ND-41/VI/KEU./2024', '2024-06-04'),
(85, 'Yth. Kapolres Karimun', 'pengajuan anggaran pendaan BMP Polres Karimun Thermyn II (Maret-April) T.A. 2024-RM', 'B/ND-42/VI/KEU./2024', '2024-06-04'),
(86, 'Yth. Kabagren Polres Karimun', 'permohonan revisi Rencana Penarikan Dana (RPD) Tahun Anggaran 2024 Baglog Polres Karimun', 'B/ND-43/VI/WAS.2./2024/Baglog', '2024-06-04'),
(87, 'Yth. Kapolres Karimun', 'permohonan pengusulan revisi rencana penarikan Dana (RPD) pada satuan fungsi Logistik Polres Karimun sebagai tindak lannjut temuan tabulasi audit kinerja Itwasda Polda Kepri tahap I (satu)', 'B/ND-44/VI/KEU./2024/Baglog', '2024-06-06'),
(88, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan jasa kebersihan gedung dan Halaman Polres Karimun bulan Mei 2024', 'B/ND-45/VI/LOG./2024/LOGISTIK', '2024-06-07'),
(89, 'Yth. Kapolres Karimun', 'pangajuan anggaran Administrasi pengadaan B/J Paket kegiatan tender pemeliharaan Kendaraan Roda 4/6 Polres Karimun Tahun Anggaran 2024', 'B/ND-46/VI/KEU./2024/Baglog', '2024-06-07'),
(90, 'Yth. Kapolres Karimun', 'Pengajuan anggaran administrasi pengadaan B/J Paket kegiatan Tender Jasa Kebersihan Polres Karimun Tahun Anggaran 2024', 'B/ND-47/VI/KEU./2024/Baglog', '2024-06-07'),
(91, 'Yth. Kapolres Karimun', 'pengajuan tagihan air Polres Karimun bulan Juni', 'B/ND-48/VI/LOG.3.16./2024/Baglog', '2024-06-11'),
(92, 'Yth. Kapolres Karimun', 'kendaraan Roda 2 polres Karimun Thermyn III (tiga) T.A 2024', 'B/ND-49/VI/KEU./2024', '2024-06-12'),
(94, 'Yth. Kapolres Karimun', 'pengiriman nama personel Baglog Polres Karimun yang akan melaksanakan izin', 'B/ND-50/VI/YAN.2.14./2024/Baglog', '2024-06-19'),
(95, 'Yth. Kapolres Karimun', 'pengajuan thermyn II (dua) atas pembayaran penyelesaian Pekerjaan Pemeliharaan dan Perawatan kendaraan Roda 4 dan Roda 6 Polres Karimun T.A. 2024', 'B/ND-51/VI/KEU./2024', '2024-06-19'),
(96, 'Yth. Kapolres Karimun', 'pengajuan anggaran BMP Polres Karimun thermyn III (Mei-Juni) - PNBP Diluar Fungsi Lantas', 'B/ND-52/VI/KEU./2024', '2024-06-19'),
(97, 'Yth. Kapolres Karimun', 'pengajuan anggaran pengadaan BMP Polres Karimun Thermyn III (mei-juni) T.A.2024-RM', 'B/ND-53/VI/KEU./2024', '2024-06-19'),
(98, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan Juni 2024', 'B/ND-54/VI/KEU./2024', '2024-06-19'),
(99, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan internet periode Juli (Pemakaian Bulan:  Juni 2024) Satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-55/VI/KEU./2024/LOGISTIK', '2024-06-20'),
(100, 'Yth. Kapolres Karimun', 'pengajuan anggaran ATK Baglog Polres Karimun Triwulan II (April, Mei, Juni) 2024', 'B/ND-56/VI/KEU./2024', '2024-06-21'),
(101, 'Yth. Kapolres Karimun', 'pengiriman nama personel Baglog Polres Karimun yang akan melaksanakan izin', 'B/ND-57/VI/YAN.2.14./2024/Baglog', '2024-06-21'),
(102, 'Yth. Kapolres Karimun', 'pengajuan biaya anggaran giat zoom launching peresmian bantuan pembangunan fasilitas air bersih bagi masyarakat dalam rangka hari Bhayangkara ke-78', 'B/ND-58/VI/KEU./2024', '2024-06-21'),
(103, 'Yth. Kasatreskrim Polres Karimun', 'Permintaan nomor senjata HS-9 Croatia dan jumlah amunisi', 'B/ND-59/VI/LOG.3.4./2024/Logistik', '2024-06-24'),
(104, 'Yth. Kapolres karimun', 'pengajuan thermyn II (dua) atas pembayaran penyelesaian Pekerjaan Pemeliharaan dan Perawatan kendaraan Roda 4 dan Roda 6 Polres Karimun T.A. 2024', 'B/ND-60/VI/KEU./2024', '2024-07-01'),
(105, 'Kasatsamapta, Kasatbinmas, Kasatintelkam, Kasatlantas, Kasatpolairud, Mess perwira, Mess Polwan', 'pemberitahuan rencana pembangunan Rusun Lt II (dua) Graha Bhagkara Residence di Asrama Polres Karimun', 'B/ND-61/VII/LOG./2024', '2024-07-03'),
(106, 'Yth. Kapolres karimun', 'permohonan pembayaran tagihan jasa kebersihan gedung dan halaman  Polres Karimun Bulan Juni 2024', 'B/ND-62/VII/LOG./2024/LOGISTIK', '2024-07-03'),
(107, 'Yth. Kapolres Karimun', 'Permohonan pemabayaran tagihan Internet periode Agustus (pemakaian Bulan: Juli 2024) Satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-63/VII/KEU./2024/LOGISTIK', '2024-07-04'),
(108, 'Yth. Kapolres Karimun', 'Pengajuan tagihan air Polres Karimun bulan Juli', 'B/ND-64/VII/LOG.3.16./2024/Baglog', '2024-07-09'),
(109, 'Yth. Kapolres Karimun', 'permohonan pemeliharan dan perawatan kendaraan dinas Roda 4 Baglog Thermyn III TA 2024', 'B/ND-65/VII/LOG./2024', '2024-07-11'),
(110, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya kunjungan Kerja Kompolnas Awards 2024', 'B/ND-66/VII/LOG./2024/Baglog', '2024-07-11'),
(111, 'Yth. Kapolres Karimun', 'Pengiriman nama Personel Baglog Polres Karimun yang akan melaksanakan izin', 'B/ND-67/VII/YAN.2.14./2024/Baglog', '2024-07-16'),
(112, 'Yth. Kapolres Karimun', 'permohonan pemeliharaan dan perawatan kendaraan dinas R2', 'B/ND-68/VII/LOG.5.10.1./2024/Baglog', '2024-07-17'),
(113, 'Yth. Kapolres Karimun', 'Penghadapan', 'B/ND-69/VII/2023/Baglog', '2024-07-17'),
(114, 'Yth. Kasatreskrim Polres Karimun', 'permintaan nomor senjata HS-9 Croatia dan jumlah amunisi', 'B/ND-70/VII/LOG.3.4./2024/Logistik', '2024-07-19'),
(115, 'Yth. Kapolres Karimun', 'kendaraan Roda 2 Polres Karimun Thermyn IV (Empat) Tahun Anggaran 2024', 'B/ND-71/VIII/KEU./2024', '2024-08-01'),
(116, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan jasa kebersihan gedung dan halaman Polres Karimun bulan Juli 2024', 'B/ND-72/VIII/LOG./2024/LOGISTIK', '2024-08-05'),
(117, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan internet periode September (Pemakaian Bulan: Agustus 2024)Satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-73/VIII/KEU./2024/LOGISTIK', '2024-08-07'),
(118, 'Yth. Kapolres Karimun', 'pengajuan anggaran pengadaan BMP Polres Karimun Thermyn IV (Juli - Agustus) T.A. 2024 -PNBP di luar fungsi Lantas', 'B/ND-74/VIII/KEU./2024', '2024-08-07'),
(119, 'Yth. Kapolres Karimun', 'pengajuan anggaran pengadaan BMP Polres Karimun Thermyn IV (Juli - Agustus) T.A. 2024 - RM', 'B/ND-75/VIII/KEU./2024', '2024-08-07'),
(120, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan Juli 2024', 'B/ND-76/VIII/KEU./2024', '2024-08-07'),
(121, 'Yth. Kapolres Karimun', 'Pengajuan Anggaran Honor tim Pokja harwat gedung Kantor Polres Karimun', 'B/ND-77/VIII/KEU./2024/Baglog', '2024-08-08'),
(122, 'Yth. Kapolres Karimun', 'Pengajuan anggaran Honor Tim Pokja Harwat Halaman Polres Karimun', 'B/ND-78/VIII/KEU./2024/Baglog', '2024-08-08'),
(123, 'Yth. Kapolres Karimun', 'pengajuan rencana kebutuhan dalam rangka kegiatan Puslitbang Polri', 'B/ND-79/VIII/KEU./2024/Logistik', '2024-08-09'),
(124, 'Yth. Kapolres Karimun', 'Pengajuan tagihan Air Polres Karimun bulan Agustus', 'B/ND-80/VIII/LOG.3.16./2024/Baglog', '2024-08-15'),
(125, 'Yth. Kapolres Karimun', 'pengajuan perawatan senpi Polres Karimun Bulan Agustus 2024', 'B/ND-81/VIII/LOG.6.5./2024/Baglog', '2024-08-20'),
(126, 'Yth. Kapolres Karimun', 'pengajuan anggaran Administrasi Pengadaan B/J Paket Kegiatan Tender pemeliharaan dan Perawatan Gedung Kantor Polres Karimun tahun Anggaran 2024', 'B/ND-82/VIII/KEU./2024/Baglog', '2024-08-22'),
(127, 'Yth. Kapolres Karimun', 'pengajuan anggaran Administras Pengadaan b/J Paket kegiatan Tender Pemeliharaan dan perawatan Halaman Gedung Kantor Polres Karimun TA 2024', 'B/ND-83/VIII/KEU./2024/Baglog', '2024-08-23'),
(128, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan Agustus 2024', 'B/ND-84/VIII/KEU./2024', '2024-08-28'),
(129, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan jasa kebersihan gedung dan halaman Polres Karimun Bulan Agustsus 2024', 'B/ND-85/IX/LOG./2024/Baglog', '2024-09-04'),
(130, 'Yth. Kapolres Karimun', 'permohonan pemeliharaan dan perawatan kendaraan dinas roda 2 Baglog Polres Karimun', 'B/ND-86/IX/LOG.5.10.1./2024/Baglog', '2024-09-04'),
(131, 'Yth. Kapolres Karimun', 'permohonan pembayaran tagihan Internet periode Oktober (Pemakaian Bulan: September 2024) Satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-87/IX/KEU./2024/LOGISTIK', '2024-09-06'),
(132, 'Yth. Kapolres Karimun', 'pengajuan tagihan air Polres Karimun bulan September', 'B/ND-88/IX/LOG.3.16./2024/Baglog', '2024-09-10'),
(133, 'Yth. Kapolres Karimun', 'pengajuan Thermyn III atas pembayaran penyelesaian Pekerjaan Pemeliharaan dan Perawatan Kendaraan Khusus Roda 4 dan 6', 'B/ND-89/IX/KEU./2024', '2024-09-17'),
(134, 'Yth. Kasitik Polres Karimun', 'pengembalian kendaraan dinas', 'B/ND-90/IX/LOG.8./2024/Baglog', '2024-09-25'),
(135, 'Yth. Kapolres Karimun', 'Pengajuan pencairan thermyn I (satu) pekerjaan pemeliharaan gedung kantor Polres Karimun T.A. 2023', 'B/ND-91/IX/KEU./2024', '2024-09-25'),
(136, 'Yth. Kapolres Karimun', 'pengajuan pencairan Thermyn I pekerjaan pemeliharaan dan perawatan gedung kantor Polres Karimun T.A. 2024', 'B/ND-92/IX/KEU./2024', '2024-09-26'),
(137, 'Yth. Kapolres Karimun', 'pengajuan pembayaran ATK baglog Polres Karimun triwulan III (Juli, Agustus, September) 2024.', 'B/ND-93/IX/KEU./2024', '2024-09-30'),
(138, 'Yth. Kapolres Karimun', 'Permintaan nomor senjata HS-9 Croatia dan jumlah amunisi', 'B/ND-94/IX/LOG.3.4./2024', '2024-09-30'),
(139, 'Yth. Kapolres Karimun', 'permohonan cuti melahirkan', 'B/ND-95/X/KEP./2024/BAGLOG', '2024-10-01'),
(140, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan jasa kebersihan dan halaman Polres Karimun Bulan September 2024', 'B/ND-96/X/LOG./2024/LOGISTIK', '2024-10-01'),
(141, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan Internet periode November (Pemakain bulan: Oktober 2024) Satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-97/X/KEU./2024/LOGISTIK', '2024-10-03'),
(142, 'Yth. Kapolres Karimun', 'pengajuan pembayaran pengadaan BMP Polres Karimun Thermyn V (September-Oktober) T.A. 2024 - RM', 'B/ND-98/X/KEU./2024', '2024-10-11'),
(143, 'Yth. Kapolres Karimun', 'engajuan anggaran permohoanan perbaikan / perawatan peralatan pada inventarisor Kantor Polres KArimun tahun anggaran 2024', 'B/ND-99/IX/KEU./2024/Baglog', '2024-10-11'),
(144, 'Yth. Kapolres Karimun', 'HARWAT R2 (NGEBON)', 'B/ND-100/X/LOG./2024', '2024-10-11'),
(145, 'Yth. Kapolres Karimun', 'pengajuan pengadaan BMP Polres Karimun Thermyn V (September - Oktober) T.A. 2024 - PNBP Diluar Fungsi Lantas', 'B/ND-101/X/KEU./2024', '2024-10-14'),
(146, 'Yth. Kapolres Karimun', 'permohonan pemeliharaan dan perawatan Komputer Baglog Polres Karimun', 'B/ND-102/X/LOG.3.17.1./2024/Baglog', '2024-10-14'),
(147, 'Yth. Kapolres Karimun', 'Permohonan Pemeliharaan dan Perawatan Kendaraan Dinas Roda 4 Baglog Thermyn IV (empat) Tahun Anggaran 2024', 'B/ND-103/X/LOG./2024/Baglog', '2024-10-22'),
(148, 'Yth. Kapolres Karimun', 'Pengajuan Anggaran Administrasi Pengadaan B/J Paket kegiatan Tender Pemeliharaan dan perawatan Gedung Pelayanan Polres Karimun Tahun Anggaran 2024', 'B/ND-104/X/KEU./2024/Baglog', '2024-10-29'),
(149, 'Yth. Kapolres Karimun', 'Pengajuan Anggaran Administrasi Pengadaan B/J Paket Kegiatan Pemeliharaan dan perawatan Halaman Gedung Kantor Polres Karimun Tahun Anggaran 2024', 'B/ND-105/X/KEU./2024/Baglog', '2024-10-29'),
(150, 'Yth. Kapolres Karimun', 'Pengajuan Anggaran Administraasi Pengadan B/J Paket Kegiatan tender Pemeliharaan dan Perawatan Gedung Kantor Polres Karimun tahun Anggaran 2024', 'B/ND-106/X/KEU./2024/Baglog', '2024-10-29'),
(151, 'Yth. Kapolres Karimun', 'Pengajuan Anggaran Honor Pejabat/Panitia Pengadaan B/J Harwat Gedung Pelayanan Polres Karimun', 'B/ND-107/X/KEU./2024/Baglog', '2024-10-29'),
(152, 'Yth. Kapolres Karimun', 'pengajuan anggaran belanja barang operasional biaya administrasi pengadaan BMP Polres Karimun T.A.2024 - RM', 'B/ND-108/X/KEU./2024', '2024-10-30'),
(153, 'Yth. Kapolres Karimun', 'pengajuan anggaran biaya pembayaran listrik Polres Karimun bulan September 2024', 'B/ND-109/X/KEU./2024', '2024-10-30'),
(154, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan Internet period Desember (Pemakaian Bulan: November 2024) Satuan Bag/Sat/Si dan Polsek Jajaran Polres Karimun', 'B/ND-110/XI/KEU./2024/LOGISTIK', '2024-11-01'),
(155, 'Yth. Kapolres Karimun', 'Permohonan pembayaran tagihan jasa kebersihan gedung dan halaman Polres Karimun Bulan Oktober 2024', 'B/ND-111/XI/LOG./2024/LOGISTIK', '2024-11-04'),
(156, 'Yth. Kapolres Karimun', 'Pengiriman rakapitulasi daftar pemeliharaan kendaran R2, R4 dan R6 Polres Karimun', 'B/ND-112/IX/LOG.6.2./2024/Logistik', '2024-11-05'),
(157, 'Yth. Kapolres Karimun', 'pengajuan anggaran perawatan senpi Polres Karimun bulan November', 'B/ND-113/XI/LOG.5.6./2024/Baglog', '2024-11-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'adisu', '$2y$10$fKaOmkJqKL5DTEKAX1dameFHTQPQXoCFXLF.6i9pKHlZ.wRnsFN1O'),
(2, 'admin', '$2y$10$v1XzH2nd0pCSMtFVZUZgse7V7ZyRHHYCx6KjSSfm1REAsGU5XTqqy'),
(3, 'baglog', '$2y$10$7OHF5WmrGtJzIGL4JxEuUeJH.o4GeAG.1IfRqKUotqYgXhfmX5TMa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
