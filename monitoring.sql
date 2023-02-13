-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 06:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `bab`
--

CREATE TABLE `bab` (
  `id_bab` int(11) NOT NULL,
  `bab` varchar(244) NOT NULL,
  `judul` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bab`
--

INSERT INTO `bab` (`id_bab`, `bab`, `judul`) VALUES
(1, 'BAB 1', 'KETENTUAN UMUM'),
(2, 'BAB 2', 'DASAR DAN TUJUAN'),
(4, 'BAB III', 'RUANG LINGKUP'),
(5, 'BAB IV', 'PENGHORMATAN TERHADAP NILAI-NILAI KESUKUAN, AGAMA, RAS, DAN ANTARGOLONGAN'),
(6, 'BAB V', 'PENGHORMATAN TERHADAP NORMA KESOPANAN DAN KESUSILAAN'),
(9, 'BAB VI', 'PENGHORMATAN TERHADAP ETIKA PROFESI'),
(10, 'BAB VII', 'PERLINDUNGAN KEPENTINGAN PUBLIK'),
(11, 'BAB VIII', 'PROGRAM LAYANAN PUBLIK'),
(12, 'BAB IX', 'PENGHORMATAN TERHADAP HAK PRIVASI'),
(13, 'BAB X', 'PERLINDUNGAN KEPADA ANAK'),
(14, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_radio`
--

CREATE TABLE `data_radio` (
  `id_radio` int(11) NOT NULL,
  `nama_stasiun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `data_radio`
--

INSERT INTO `data_radio` (`id_radio`, `nama_stasiun`) VALUES
(1, 'PT. Radio Darul Musthofa (MASA FM).'),
(2, 'PT. Radio Suara Mandiri (J Radio)'),
(3, 'JHONLIN RADIO'),
(4, 'Al Khair FM'),
(5, 'Suara Al Jihad FM'),
(6, 'Kumala FM'),
(7, 'Radio Martapura'),
(8, 'Radio Gema Amandit'),
(9, 'STAR FM'),
(10, 'DIRGAHAYU (PM5BAE)'),
(11, 'SWARA TARUNA JAYA (PM5FCO)'),
(12, 'SWARA RUHUI RAHAYU (PM5FBN)');

-- --------------------------------------------------------

--
-- Table structure for table `data_tv`
--

CREATE TABLE `data_tv` (
  `id_tv` int(11) NOT NULL,
  `nama_stasiun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `data_tv`
--

INSERT INTO `data_tv` (`id_tv`, `nama_stasiun`) VALUES
(1, 'TVRI KALSEL'),
(2, 'KOMPAS TV'),
(3, 'DUTA TV'),
(4, 'RCTI');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_radio`
--

CREATE TABLE `monitoring_radio` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_tayang` varchar(244) NOT NULL,
  `program` int(11) NOT NULL,
  `time_code` varchar(244) NOT NULL,
  `keterangan` text NOT NULL,
  `pasal` int(11) NOT NULL,
  `radio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `monitoring_radio`
--

INSERT INTO `monitoring_radio` (`id`, `tanggal`, `jam_tayang`, `program`, `time_code`, `keterangan`, `pasal`, `radio`) VALUES
(2, '2023-02-05', '10.02 - 11.00', 1, '10.02 - 11.00', 'Tidak Menampilkan Klasifikasi program Acara', 1, 1),
(3, '2023-02-06', '10.02 - 11.00', 1, '10.02 - 11.00', 'Tidak Menampilkan Klasifikasi program Acara', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_tv`
--

CREATE TABLE `monitoring_tv` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_tayang` varchar(244) NOT NULL,
  `program` int(11) DEFAULT NULL,
  `time_code` varchar(244) NOT NULL,
  `keterangan` text NOT NULL,
  `pasal` int(11) NOT NULL,
  `tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `monitoring_tv`
--

INSERT INTO `monitoring_tv` (`id`, `tanggal`, `jam_tayang`, `program`, `time_code`, `keterangan`, `pasal`, `tv`) VALUES
(1, '2023-02-04', '10.02 - 11.30', 2, '10.02 - 11.30', 'Tidak menampilkan klasifikasi program acara', 7, 2),
(3, '2023-02-05', '10.02 - 11.00', 2, '10.02 - 11.00', 'Tidak Menampilkan Klasifikasi program Acara', 1, 2),
(8, '2023-02-04', '10.02 - 11.00', 2, '10.02 - 11.00', 'Tidak Menampilkan Klasifikasi program Acara', 7, 1),
(15, '2023-02-05', '10.02 - 11.00', 2, '10.02 - 11.00', 'Tidak Menampilkan Klasifikasi program Acara', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pasal`
--

CREATE TABLE `pasal` (
  `id` int(11) NOT NULL,
  `id_bab` int(11) DEFAULT NULL,
  `pasal` varchar(244) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pasal`
--

INSERT INTO `pasal` (`id`, `id_bab`, `pasal`, `isi`) VALUES
(1, 1, 'Pasal 1 (1)', 'Pedoman Perilaku Penyiaran'),
(7, 2, 'Pasal 2', 'Standar Program Siaran'),
(9, 4, 'Pasal 5 (a)', 'nilai-nilai kesukuan, keagamaan, ras, dan antargolongan'),
(10, 5, 'Pasal 6 (1)', 'Program siaran wajib menghormati perbedaan suku, agama, ras, dan antargolongan yang mencakup keberagaman budaya, usia, gender, dan/atau kehidupan sosial ekonomi'),
(11, 6, 'Pasal 9 (1)', 'Program siaran wajib memperhatikan norma kesopanan dan kesusilaan'),
(12, 6, 'SPS Pasal 9 (2)', 'Program siaran wajib berhati-hati agar tidak merugikan dan menimbulkan  dampak negatif terhadap keberagaman norma kesopanan dan kesusilaan  yang dianut oleh masyarakat.'),
(13, 9, 'SPS Pasal 10 (1)', 'Program siaran wajib menghormati etika profesi yang dimiliki oleh  profesi tertentu yang ditampilkan dalam isi siaran agar tidak merugikan  dan menimbulkan dampak negatif di masyarakat.'),
(14, 9, 'SPS Pasal 10 (2)', 'Etika profesi sebagaimana yang dimaksud pada ayat (1) adalah etika  profesi yang diakui dalam peraturan perundang-undangan.'),
(15, 10, 'SPS Pasal 11 (1)', 'Program siaran wajib dimanfaatkan untuk kepentingan publik dan tidak  untuk kepentingan kelompok tertentu'),
(16, 10, 'SPS Pasal 11 (2)', 'Program siaran dilarang dimanfaatkan untuk kepentingan pribadi pemilik  lembaga penyiaran bersangkutan dan/atau kelompoknya'),
(17, 10, 'SPS Pasal 11 (3)', 'Program siaran yang berisi tentang kesehatan masyarakat dilarang  menampilkan penyedia jasa pelayanan kesehatan masyarakat yang tidak  memiliki izin dari lembaga yang berwenang.'),
(18, 11, 'SPS Pasal 12 (a)', 'program interaktif maupun dialog antarwarga yang mewadahi hak  warga negara agar dapat ikut berperan dalam pembangunan serta  menunjukkan kiprah positifnya dalam kehidupan bermasyarakat'),
(19, 12, 'SPS Pasal 13 (1)', 'Program siaran wajib menghormati hak privasi dalam kehidupan pribadi  objek isi siaran'),
(20, 12, 'SPS Pasal 13 (2)', 'Program siaran tentang permasalahan kehidupan pribadi tidak boleh  menjadi materi yang ditampilkan dan/atau disajikan dalam seluruh isi  mata acara, kecuali demi kepentingan publik'),
(21, 12, 'SPS Pasal 13 (3)', 'Kepentingan publik sebagaimana dimaksud pada ayat (2) di atas terkait  dengan penggunaan anggaran negara, keamanan negara, dan/atau  permasalahan hukum pidana.'),
(22, 12, 'SPS Pasal 14 (a)', 'tidak berniat merusak reputasi objek yang disiarkan'),
(23, 12, 'SPS Pasal 14 (b)', 'tidak memperburuk keadaan objek yang disiarkan'),
(24, 12, 'SPS Pasal 14 (c)', 'tidak mendorong berbagai pihak yang terlibat dalam konflik  mengungkapkan secara terperinci aib dan/atau kerahasiaan masingmasing pihak yang berkon'),
(25, 12, 'SPS Pasal 14 (d)', 'tidak menimbulkan dampak buruk terhadap keluarga, terutama bagi  anak-anak dan remaja'),
(26, 12, 'SPS Pasal 14 (e)', 'tidak dilakukan tanpa dasar fakta dan data yang akurat'),
(27, 12, 'SPS Pasal 14 (f)', 'menyatakan secara eksplisit jika bersifat rekayasa, reka-ulang atau  diperankan oleh orang lain'),
(28, 12, 'SPS Pasal 14 (g)', 'tidak menjadikan kehidupan pribadi objek yang disiarkan sebagai bahan  tertawaan dan/atau bahan cercaan; dan'),
(29, 12, 'SPS Pasal 14 (h)', 'tidak boleh menghakimi objek yang disiarkan'),
(30, 13, 'SPS Pasal 15 (1)', 'Program siaran wajib memperhatikan dan melindungi kepentingan anakanak dan/atau remaja.'),
(31, 13, 'SPS Pasal 15 (2)', 'Program siaran yang berisi muatan asusila dan/atau informasi tentang  dugaan tindak pidana asusila dilarang menampilkan anak-anak dan/atau  remaja.'),
(32, 13, 'SPS Pasal 15 (3)', 'Program siaran yang menampilkan anak-anak dan/atau remaja dalam  peristiwa/penegakan hukum wajib disamarkan wajah dan identitasnya.'),
(33, 13, 'SPS Pasal 15 (4)', 'Program siaran langsung yang melibatkan anak-anak dilarang disiarkan  melewati pukul 21.30 waktu setempat.'),
(34, 13, 'SPS Pasal 16 (1)', 'Program siaran dilarang melecehkan, menghina, dan/atau merendahkan  lembaga pendidikan. '),
(35, 13, 'SPS Pasal 16 (2)', 'Penggambaran tentang lembaga pendidikan harus mengikuti ketentuan'),
(36, 13, 'SPS Pasal 16 (2) (a)', 'tidak memperolok pendidik/pengajar; '),
(37, 13, 'SPS Pasal 16 (2) (b)', 'tidak menampilkan perilaku dan cara berpakaian yang  bertentangan dengan etika yang berlaku di lingkungan pendidikan; '),
(38, 13, 'SPS Pasal 16 (2) (c)', 'tidak menampilkan konsumsi rokok dan NAPZA (narkotika,  psikotropika, dan zat adiktif), dan minuman beralkohol'),
(39, 13, 'SPS Pasal 16 (2) (d)', 'tidak menampilkan makian dan kata-kata kasar; dan/atau'),
(40, 13, 'SPS Pasal 16 (2) (e)', 'tidak menampilkan aktivitas berjudi dan/atau tindakan kriminal  lainnya. '),
(42, 14, '-', 'Menampilkan Klasifikasi Program Acara');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_radio`
--

CREATE TABLE `pelanggaran_radio` (
  `id_pelanggaran` int(11) NOT NULL,
  `jenis_pelanggaran` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pelanggaran_radio`
--

INSERT INTO `pelanggaran_radio` (`id_pelanggaran`, `jenis_pelanggaran`) VALUES
(2, 'PROGRAM LAYANAN PUBLIK'),
(3, 'Lagu dengan Judul dan/atau lirik bermuatan seks, cabul dan/atau mengesankan aktivitas seks'),
(4, 'Lagu dengan judul dan/atau lirik yang menjadikan perempuan sebagai objek seks'),
(5, ' Suara yang menggambarkan berlangsungnya aktivitas seks dan/atau persenggamaan'),
(6, 'Percakapan tentang rangkaian aktivitas seks dan/atau persenggamaan'),
(7, 'Percakapan menggunakan kata-kata cabul'),
(8, 'Bincang-bincang tentang seks yang tidak ada nilai edukasinya'),
(9, 'Pemberitaan/informasi yang diambil dari internet dan belum tentu akurat'),
(10, 'Program menjahili seseorang melalui telepon yang cenderung berlebihan'),
(11, 'Candaan yang sarat makian dan kekerasan verbal'),
(12, 'Candaan yang menggunakan istilah-istilah yang menjurus seksualitas'),
(13, 'Candaan yang melecehkan kaum minorita'),
(14, 'Iklan dengan konten dewasa di bawah pukul 22.00 WIB'),
(15, 'Iklan rokok di bawah pukul 21.30 WIB'),
(16, 'Program yang berisikan pembicaraan atau pembahasan mengenai masalah seks di luar pukul 22.00 â€“ 03.00 waktu setempat dengan tidak santun, tidak berhati-hati, tidak ilmiah dan tidak didampingi oleh praktisi kesehatan atau psikolog');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_tv`
--

CREATE TABLE `pelanggaran_tv` (
  `id_pelanggaran` int(11) NOT NULL,
  `jenis_pelanggaran` varchar(255) NOT NULL,
  `program_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pelanggaran_tv`
--

INSERT INTO `pelanggaran_tv` (`id_pelanggaran`, `jenis_pelanggaran`, `program_tv`) VALUES
(2, 'PROGRAM LAYANAN PUBLIK.', 1),
(3, 'Klasifikasi Program Siaran', 2),
(4, 'Perlindungan Anak-Anak dan Remaja', 2),
(5, 'Pelarangan Adegan Kekerasan', 3),
(6, 'Ungkapan Kasar dan Makian', 3),
(7, 'Ungkapan Kasar dan Makian', 3),
(8, 'Pelarangan Rokok, NAPZA, dan Minuman Beralkohol dalam Program Siaran', 4),
(9, 'Pelarangan Adegan Seksual', 4),
(10, 'Pelarangan Perjudian dalam Program Siaran', 5),
(11, 'Pelarangan Perjudian dalam Program Siaran', 5),
(12, 'Pelarangan Perjudian dalam Program Siaran', 5),
(13, 'Pelarangan Program Siaran Mistik, Horor, dan Supranatural', 5),
(14, 'Pelarangan Program Siaran Mistik, Horor, dan Supranatural', 1),
(15, 'Pelarangan Perjudian dalam Program Siaran', 0),
(16, 'Ungkapan Kasar dan Makian', 0),
(17, 'Perlindungan Anak-Anak dan Remaja', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `peran` enum('ADMIN','USER') NOT NULL,
  `terakhir_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `username`, `password`, `peran`, `terakhir_login`) VALUES
(1, 'admin', '$2y$10$baqQ4zTS37tzcjXzcU9GjO5.a.IIvc1OX1.kwHleKXxjVo9dZXDK2', 'ADMIN', '2023-02-03 08:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `program_radio`
--

CREATE TABLE `program_radio` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `radio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `program_radio`
--

INSERT INTO `program_radio` (`id_program`, `nama_program`, `radio`) VALUES
(1, 'Bincang Santai/Talk Show', 1),
(2, 'SORERAM, DANGSIK, PESONA ANTASARI, SENIN SANTUY, MALMING JHON, MORNING JHON', 3),
(3, 'Tanya Jawab Agama Islam', 5),
(4, 'Dangdut Kenangan dan Campur Sari', 6),
(5, 'Dangdut Kenangan dan All Disc Pop Indonesia', 6),
(6, 'Dangdut Hits dan Pop Era Tahun 1990 â€“ 2000', 6),
(7, 'Dangdut, Ethnik (Campursari dan Banjar ), Informasi daerah &amp; sekitarnya', 7),
(8, 'Info. Tips &amp; Islam, Hiburan, Berita, Lagu, Siaran Kata', 8),
(9, 'SERDUT / SERBA DANGDUT', 10),
(10, 'CAMPUR KENDANG', 11),
(11, 'NADA BANUA', 12);

-- --------------------------------------------------------

--
-- Table structure for table `program_tv`
--

CREATE TABLE `program_tv` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `program_tv`
--

INSERT INTO `program_tv` (`id_program`, `nama_program`, `tv`) VALUES
(1, 'Kalimantan Selatan Sepekan', 4),
(2, 'Bincang Santai/Talk Show', 2),
(3, 'Kajian Tauhid', 2),
(4, 'Pesona Indonesia', 1),
(5, 'Sapa Pemirsa', 1),
(6, 'Sitkom Acil Mardub', 1),
(7, 'Duta Pagi', 3),
(8, 'Duta Malam', 3),
(9, 'Duta Banua', 3),
(10, 'Sorotan Redaksi', 3),
(11, 'Majelis Sore', 3),
(12, 'Kompas Kalsel', 2),
(13, 'Sapa Kalsel', 2),
(14, 'Etalase Banua', 2),
(15, 'Bincang Sore', 2),
(16, 'Resep Rahasia', 2),
(17, 'Dunia Terbalik', 4),
(18, 'Takut Ga Sih...', 4),
(19, 'Cinta Alesha', 4),
(20, 'Ikatan Cinta', 4),
(26, 'Seputar iNews', 4),
(27, 'Kompas Pagi', 2),
(28, 'Kompas Siang', 2),
(29, 'Kompas Petang', 2),
(30, 'Breaking News', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bab`
--
ALTER TABLE `bab`
  ADD PRIMARY KEY (`id_bab`);

--
-- Indexes for table `data_radio`
--
ALTER TABLE `data_radio`
  ADD PRIMARY KEY (`id_radio`);

--
-- Indexes for table `data_tv`
--
ALTER TABLE `data_tv`
  ADD PRIMARY KEY (`id_tv`);

--
-- Indexes for table `monitoring_radio`
--
ALTER TABLE `monitoring_radio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program` (`program`),
  ADD KEY `pasal` (`pasal`),
  ADD KEY `radio` (`radio`);

--
-- Indexes for table `monitoring_tv`
--
ALTER TABLE `monitoring_tv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasal` (`pasal`),
  ADD KEY `program_tv` (`program`),
  ADD KEY `tv` (`tv`);

--
-- Indexes for table `pasal`
--
ALTER TABLE `pasal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bab` (`id_bab`);

--
-- Indexes for table `pelanggaran_radio`
--
ALTER TABLE `pelanggaran_radio`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `pelanggaran_tv`
--
ALTER TABLE `pelanggaran_tv`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `program_radio`
--
ALTER TABLE `program_radio`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `radio` (`radio`);

--
-- Indexes for table `program_tv`
--
ALTER TABLE `program_tv`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `tv` (`tv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bab`
--
ALTER TABLE `bab`
  MODIFY `id_bab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_radio`
--
ALTER TABLE `data_radio`
  MODIFY `id_radio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `data_tv`
--
ALTER TABLE `data_tv`
  MODIFY `id_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `monitoring_radio`
--
ALTER TABLE `monitoring_radio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `monitoring_tv`
--
ALTER TABLE `monitoring_tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pasal`
--
ALTER TABLE `pasal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pelanggaran_radio`
--
ALTER TABLE `pelanggaran_radio`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pelanggaran_tv`
--
ALTER TABLE `pelanggaran_tv`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_radio`
--
ALTER TABLE `program_radio`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `program_tv`
--
ALTER TABLE `program_tv`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monitoring_radio`
--
ALTER TABLE `monitoring_radio`
  ADD CONSTRAINT `monitoring_radio_ibfk_1` FOREIGN KEY (`program`) REFERENCES `program_radio` (`id_program`) ON UPDATE CASCADE,
  ADD CONSTRAINT `monitoring_radio_ibfk_2` FOREIGN KEY (`pasal`) REFERENCES `pasal` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `monitoring_radio_ibfk_3` FOREIGN KEY (`radio`) REFERENCES `data_radio` (`id_radio`) ON UPDATE CASCADE;

--
-- Constraints for table `monitoring_tv`
--
ALTER TABLE `monitoring_tv`
  ADD CONSTRAINT `monitoring_tv_ibfk_1` FOREIGN KEY (`pasal`) REFERENCES `pasal` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `monitoring_tv_ibfk_2` FOREIGN KEY (`program`) REFERENCES `program_tv` (`id_program`) ON UPDATE CASCADE,
  ADD CONSTRAINT `monitoring_tv_ibfk_3` FOREIGN KEY (`tv`) REFERENCES `data_tv` (`id_tv`) ON UPDATE CASCADE;

--
-- Constraints for table `pasal`
--
ALTER TABLE `pasal`
  ADD CONSTRAINT `pasal_ibfk_1` FOREIGN KEY (`id_bab`) REFERENCES `bab` (`id_bab`) ON UPDATE CASCADE;

--
-- Constraints for table `program_radio`
--
ALTER TABLE `program_radio`
  ADD CONSTRAINT `program_radio_ibfk_1` FOREIGN KEY (`radio`) REFERENCES `data_radio` (`id_radio`) ON UPDATE CASCADE;

--
-- Constraints for table `program_tv`
--
ALTER TABLE `program_tv`
  ADD CONSTRAINT `program_tv_ibfk_1` FOREIGN KEY (`tv`) REFERENCES `data_tv` (`id_tv`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
