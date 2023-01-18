-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 10:36 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `pasal`
--

CREATE TABLE `pasal` (
  `id_pasal` int(100) NOT NULL,
  `pasal` varchar(50) NOT NULL,
  `ayat_point` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasal`
--

INSERT INTO `pasal` (`id_pasal`, `pasal`, `ayat_point`) VALUES
(1, 'SPS Pasal 6', '(1) Program siaran wajib menghormati perbedaan suku, agama, ras, dan antargolongan yang mencakup keberagaman budaya, usia, gender, dan/ atau kehidupan sosial ekonomi.'),
(2, 'SPS Pasal 6', '(2) Program siaran dilarang merendahkan dan/atau melecehkan:\r\na. suku, agama, ras, dan/atau antargolongan; dan/atau\r\nb. individu atau kelompok karena perbedaan suku, agama, ras, antargolongan, usia, budaya, dan/atau kehidupan sosial ekonomi.'),
(3, 'SPS Pasal 7', 'Materi agama pada program siaran wajib memenuhi ketentuan sebagai berikut:\r\na. tidak berisi serangan, penghinaan dan/atau pelecehan terhadap pandangan dan keyakinan antar atau dalam agama tertentu serta menghargai etika hubungan antarumat beragama;\r\nb. menyajikan muatan yang berisi perbedaan pandangan/paham dalam agama tertentu secara berhati-hati, berimbang, tidak berpihak, dengan narasumber yang berkompeten, dan dapat dipertanggungjawabkan.\r\nc. tidak menyajikan perbandingan antaragama; dan\r\nd. tidak menyajikan alasan perpindahan agama seseorang atau sekelompok\r\norang.'),
(4, 'SPS Pasal 8', 'Program siaran tentang keunikan suatu budaya dan/atau kehidupan sosial masyarakat tertentu dengan muatan yang dapat menimbulkan ketidaknyamanan khalayak wajib disiarkan dengan gambar longshot atau disamarkan dan/atau tidak dinarasikan secara  detail.'),
(5, 'SPS Pasal 9', '(1) Program siaran wajib memperhatikan norma kesopanan dan kesusilaan yang dijunjung oleh keberagaman khalayak baik terkait agama, suku, budaya, usia, dan/atau latar belakang ekonomi.'),
(6, 'SPS Pasal 9', '(2) Program siaran wajib berhati-hati agar tidak merugikan dan menimbulkan dampak negatif terhadap keberagaman norma kesopanan dan kesusilaan yang dianut oleh masyarakat.'),
(7, 'SPS Pasal 10', '(1) Program siaran wajib menghormati etika profesi yang dimiliki oleh profesi tertentu yang ditampilkan dalam isi siaran agar tidak merugikan dan menimbulkan dampak negatif di masyarakat.'),
(8, 'SPS Pasal 10', '(2) Etika profesi sebagaimana yang dimaksud pada ayat (1) adalah etika\r\nprofesi yang diakui dalam peraturan perundang-undangan.'),
(9, 'SPS Pasal 11', '(1) Program siaran wajib dimanfaatkan untuk kepentingan publik dan tidak untuk kepentingan kelompok tertentu.'),
(10, 'SPS Pasal 11', '(2) Program siaran dilarang dimanfaatkan untuk kepentingan pribadi pemilik lembaga penyiaran bersangkutan dan/atau kelompoknya.'),
(11, 'SPS Pasal 11', '(3) Program siaran yang berisi tentang kesehatan masyarakat dilarang menampilkan penyedia jasa pelayanan kesehatan masyarakat yang tidak memiliki izin dari lembaga yang berwenang.'),
(12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_anggar` int(30) NOT NULL,
  `nama_bab` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_anggar`, `nama_bab`) VALUES
(1, 'Penghormatan Terhadap Nilai-Nilai Kesukuan, Agama, Ras, dan Golongan'),
(2, 'PENGHORMATAN TERHADAP NORMA KESOPANAN DAN KESUSILAAN'),
(3, 'PENGHORMATAN TERHADAP ETIKA PROFESI'),
(4, 'PERLINDUNGAN KEPENTINGAN PUBLIK'),
(5, 'PROGRAM LAYANAN PUBLIK'),
(6, 'PENGHORMATAN TERHADAP HAK PRIVASI'),
(7, 'PERLINDUNGAN KEPADA ANAK (Bagian Pertama Perlindungan Anak-Anak dan Remaja)'),
(8, 'PERLINDUNGAN KEPADA ANAK (Bagian Kedua\r\nProgram Siaran tentang Lingkungan Pendidikan)'),
(9, 'PERLINDUNGAN KEPADA ORANG DAN MASYARAKAT TERTENTU'),
(10, 'PELARANGAN DAN PEMBATASAN SEKSUALITAS (Bagian Pertama Pelarangan Adegan Seksual)'),
(11, 'PELARANGAN DAN PEMBATASAN SEKSUALITAS (Bagian Kedua\r\nSeks di Luar Nikah, Praktek Aborsi, dan Pemerkosaan)'),
(12, 'PELARANGAN DAN PEMBATASAN SEKSUALITAS (Bagian Ketiga\r\nMuatan Seks dalam Lagu dan Klip Video)'),
(13, 'PELARANGAN DAN PEMBATASAN SEKSUALITAS (Bagian Keempat\r\nPerilaku Seks)'),
(14, 'PELARANGAN DAN PEMBATASAN SEKSUALITAS (Bagian Kelima Program Bincang-bincang Seks)'),
(15, 'PELARANGAN DAN PEMBATASAN KEKERASAN (Bagian Pertama Pelarangan Adegan Kekerasan)'),
(16, 'PELARANGAN DAN PEMBATASAN KEKERASAN (Bagian Kedua\r\nUngkapan Kasar dan Makian)'),
(17, 'PELARANGAN DAN PEMBATASAN KEKERASAN (Bagian Ketiga\r\nPembatasan Program Bermuatan Kekerasan)'),
(18, 'PELARANGAN DAN PEMBATASAN MATERI SIARAN ROKOK, NAPZA, DAN MINUMAN BERALKOHOL (Bagian Pertama\r\nPelarangan Rokok, NAPZA, dan Minuman Beralkohol dalam Program Siaran)'),
(19, 'PELARANGAN DAN PEMBATASAN MATERI SIARAN ROKOK, NAPZA, DAN MINUMAN BERALKOHOL (Pembatasan Rokok, NAPZA, dan Minuman Beralkohol dalam Program Siaran)'),
(20, 'PELARANGAN DAN PEMBATASAN MUATAN PERJUDIAN (Bagian Pertama\r\nPelarangan Perjudian dalam Program Siaran)'),
(21, 'PELARANGAN DAN PEMBATASAN MUATAN PERJUDIAN (Bagian Kedua\r\nPembatasan Perjudian dalam Program Siaran)'),
(22, 'PELARANGAN DAN PEMBATASAN PROGRAM SIARAN BERMUATAN MISTIK, HOROR, DAN SUPRANATURAL (Bagian Pertama\r\nPelarangan Program Siaran Mistik, Horor, dan Supranatural)'),
(23, 'PELARANGAN DAN PEMBATASAN PROGRAM SIARAN BERMUATAN MISTIK, HOROR, DAN SUPRANATURAL (Pembatasan Program Siaran Mistik, Horor, dan Supranatural)'),
(24, 'PENGGOLONGAN PROGRAM SIARAN (Bagian Pertama Klasifikasi Program Siaran)'),
(25, 'PENGGOLONGAN PROGRAM SIARAN (Bagian Kedua\r\nKlasifikasi P)'),
(26, 'PENGGOLONGAN PROGRAM SIARAN (Bagian Ketiga Klasifikasi A)'),
(27, 'PENGGOLONGAN PROGRAM SIARAN (Bagian Keempat Klasifikasi R)'),
(28, 'PENGGOLONGAN PROGRAM SIARAN (Bagian Kelima Klasifikasi D)'),
(29, 'PENGGOLONGAN PROGRAM SIARAN (Bagian Keenam\r\nKlasifikasi SU)'),
(30, 'PROGRAM SIARAN JURNALISTIK (Bagian Satu\r\nPrinsip-Prinsip Jurnalistik )'),
(31, 'PROGRAM SIARAN JURNALISTIK (Bagian Kedua\r\nPenggambaran Kembali)'),
(32, 'PROGRAM SIARAN JURNALISTIK (Bagian Ketiga Muatan Kekerasan dan Kejahatan serta Kewajiban Penyamaran) '),
(33, 'PROGRAM SIARAN JURNALISTIK (Bagian Keempat Peliputan Terorisme)'),
(34, 'PROGRAM SIARAN JURNALISTIK (Bagian Kelima Peliputan Sidang Pengadilan, Kasus Hukum, dan Hukuman Mati)'),
(35, 'PROGRAM SIARAN JURNALISTIK (Bagian Keenam\r\nPeliputan Bencana)'),
(36, 'HAK SIAR'),
(37, 'BAHASA, BENDERA, LAMBANG NEGARA, DAN LAGU KEBANGSAAN'),
(38, 'SENSOR'),
(39, 'PROGRAM SIARAN BERLANGGANAN'),
(40, 'SIARAN IKLAN'),
(41, 'PROGRAM ASING');

-- --------------------------------------------------------

--
-- Table structure for table `pprograms`
--

CREATE TABLE `pprograms` (
  `id_pprogs` int(50) NOT NULL,
  `nama_stas` varchar(100) NOT NULL,
  `progaca` varchar(100) NOT NULL,
  `passal` varchar(50) NOT NULL,
  `keterangann` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pprograms`
--

INSERT INTO `pprograms` (`id_pprogs`, `nama_stas`, `progaca`, `passal`, `keterangann`) VALUES
(4, 'KOMPAS TV', 'Terserah', 'SPS Pasal 33 (2)', 'Sip');

-- --------------------------------------------------------

--
-- Table structure for table `programradio`
--

CREATE TABLE `programradio` (
  `id_progradio` int(50) NOT NULL,
  `program_radio` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programradio`
--

INSERT INTO `programradio` (`id_progradio`, `program_radio`) VALUES
(1, 'SORERAM, DANGSIK, PESONA ANTASARI, SENIN SANTUY, MALMING JHON, MORNING JHON'),
(2, 'Bincang Santai/Talk Show'),
(3, 'Tanya Jawab Agama Islam'),
(4, 'Dangdut Kenangan dan Campur Sari'),
(5, 'Dangdut Kenangan dan All Disc Pop Indonesia'),
(6, 'Dangdut Hits dan Pop Era Tahun 1990 – 2000 '),
(7, 'Dangdut, Ethnik (Campursari dan Banjar)'),
(8, 'Info. Tips & Islam, Hiburan, Berita, Lagu, Siaran Kata'),
(9, 'Serdut / Serba Dangdut'),
(10, 'Campur Kendang'),
(11, 'Nada Banua'),
(12, 'Indonesia Lama '),
(13, 'Hallo Indonesia, Musik'),
(14, 'Film, Olahraga, Musik, Acara Anak-Anak '),
(15, 'Musik Campur Sari Dangdut, Berita Pagi, Kerohanian'),
(16, 'HALLO INDONESIA, WAYANG, PARIWISATA LOKAL, MUSIK'),
(17, 'AL QUR’AN BY REQUEST'),
(18, 'Keluarga harmonis, Peluang Usaha (Pulsa), Badadapatan'),
(19, 'Request pagi-pagi, Daun muda, Special Program'),
(20, 'Request pagi-pagi, Daun muda, Special Program'),
(21, 'Begadang (berdendang) & Goyang Dangdut, WARJOK (Warung pojok), Kardut                                          (Karaoke dangdut)'),
(22, 'Cafe musik, Kabar Kalimantan, Dangdut Nirwana'),
(23, 'Rarampahan paacila, Klak klik ceria, Tombo Kangen'),
(24, 'Bursa Musik, Ragam Family, Trendi (Trend Dangdut terkini)'),
(25, 'Spirit kotabaru, Family & Pekerja, Mitra musik, Dendang bamega'),
(26, 'Semarak dangdut, Kedai 15, Info petang'),
(27, 'Habar Nirwana, Bahana Dangdut, Dendang banua'),
(28, 'Planet nirwana, GODAM, Nirwana in D’morning'),
(29, 'Warung senggol, Kiram Kirim, Patung Dangdut'),
(30, ' HOT TOPIC PAGI & PETANG, POLEMIK, DAN THE\r\n LEADER'),
(31, 'Lintas Banua');

-- --------------------------------------------------------

--
-- Table structure for table `programtv`
--

CREATE TABLE `programtv` (
  `id_ptv` int(50) NOT NULL,
  `nama_ptv` varchar(200) NOT NULL,
  `id_stasiuntv` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programtv`
--

INSERT INTO `programtv` (`id_ptv`, `nama_ptv`, `id_stasiuntv`) VALUES
(1, 'Kalimantan Selatan Sepekan', 1),
(2, 'Kajian Tauhid', 1),
(3, 'Pesona Indonesia', 1),
(4, 'Sapa Pemirsa', 1),
(5, 'Sitkom Acil Mardub', 1),
(6, 'Duta Pagi', 2),
(7, 'Duta Malam', 2),
(8, 'Duta Banua', 2),
(9, 'Sorotan Redaksi', 2),
(10, 'Sorotan Redaksi', 2),
(11, 'Kompas Kalsel', 3),
(12, 'Sapa Kalsel', 3),
(13, 'Etalase Banua', 3),
(14, 'Bincang Sore', 3),
(15, 'Resep Rahasia', 3),
(16, 'Tukang Ojek Pengkolan', 4),
(17, 'Dunia Terbalik', 4),
(18, 'Takut Ga Sih...', 4),
(19, 'Cinta Alesha', 4),
(20, 'Ikatan Cinta', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_radio`
--

CREATE TABLE `tb_data_radio` (
  `id_radiu` int(70) NOT NULL,
  `lps_radio` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data_radio`
--

INSERT INTO `tb_data_radio` (`id_radiu`, `lps_radio`) VALUES
(1, 'PT. Radio Darul Musthofa ( MASA FM )'),
(2, 'PT. Radio Suara Mandiri (J Radio)'),
(3, 'PT. Radio Citra Bahana Swara (Ashbone FM)'),
(4, 'PT. Radio Dhirgantara Permai (DBS FM)'),
(5, 'PT. Radio Nusantara Antik (Nusantara FM)'),
(6, 'PT. Radio Suara Banjar Lazuardi/SINDO Radio'),
(7, 'PT. Radio Iskinada Mustika (Mustika FM)'),
(8, 'PT. Radio Swara Maida Artanusa (SMART FM)'),
(9, 'PT. Radio Nirwana'),
(10, 'PT. Radio Kharismanada Rasisonia (Khana FM)'),
(11, 'PT. Radio Telerama (I Radio)'),
(12, 'PT. Radio Chandra Rasisonia (Chandra FM)'),
(13, 'PT. Radio Citra Posindo (MC FM)'),
(14, 'PT. Radio Citra Posindo (MC FM)'),
(15, 'PT. Radio Allian Perdana Media ( SUN FM )'),
(16, 'PT. Radio Citraswara Pelangi Indah (Pelangi FM)'),
(17, 'PT. Radio Swara Kayutangi (SKY FM)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_tv`
--

CREATE TABLE `tb_data_tv` (
  `id_tivi` int(100) NOT NULL,
  `nama_tv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data_tv`
--

INSERT INTO `tb_data_tv` (`id_tivi`, `nama_tv`) VALUES
(1, 'TVRI'),
(2, 'DUTA TV'),
(3, 'RCTI'),
(4, 'KOMPAS TV');

-- --------------------------------------------------------

--
-- Table structure for table `tb_langgar`
--

CREATE TABLE `tb_langgar` (
  `id_langgar` int(50) NOT NULL,
  `namastas` varchar(100) NOT NULL,
  `progjud` varchar(100) NOT NULL,
  `bab` varchar(50) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `pasal` varchar(50) NOT NULL,
  `keterangan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_langgar`
--

INSERT INTO `tb_langgar` (`id_langgar`, `namastas`, `progjud`, `bab`, `judul`, `pasal`, `keterangan`) VALUES
(1, '', '', 'BAB I', 'KETENTUAN UMUM', 'SPS Pasal 1 (11)', 'Tidak Menyajikan Program Faktual'),
(2, '', '', 'BAB XVII', 'PENGGOLONGAN PROGRAM SIARAN (Bagian Pertama Klasifikasi Program Siaran)', 'SPS Pasal 33 (2)', 'Tidak Menampilkan Klasifikasi Program Acara'),
(4, 'Aasasas', 'asxasxas', 'saxasx', 'KETENTUAN UMUM', 'pasal 1', 'tuuuu'),
(5, 'KOMPAS TV', 'sfcscscscs', 'BAB 1', 'KETENTUAN UMUM', 'SPS Pasal 33 (2)', 'Tidak menampilkan klasifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_options`
--

CREATE TABLE `tb_options` (
  `option_name` varchar(16) NOT NULL,
  `option_value` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_options`
--

INSERT INTO `tb_options` (`option_name`, `option_value`) VALUES
('default_lat', '-8.251889'),
('default_lng', '115.076818'),
('default_zoom', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_radio`
--

CREATE TABLE `tb_radio` (
  `id_radio` int(10) NOT NULL,
  `penyiaran` varchar(40) NOT NULL,
  `nama_stasiun_radio` varchar(30) NOT NULL,
  `frekuensi` varchar(10) NOT NULL,
  `prog_unggulan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `Pasal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_radio`
--

INSERT INTO `tb_radio` (`id_radio`, `penyiaran`, `nama_stasiun_radio`, `frekuensi`, `prog_unggulan`, `keterangan`, `Pasal`) VALUES
(6, 'PT. Jhonlin Media Komunika', 'JHONLIN RADIO', '88.2 FM', 'SORERAM, DANGSIK, PESONA ANTASARI, SENIN SANTUY, MALMING JHON, MORNING JHON', 'Tidak ada', ''),
(7, ' PT. Radio Suara Alkhair', 'Al Khair FM', 'FM 92,7 MH', 'Bincang Santai/Talk Show', 'Tidak ada', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tv`
--

CREATE TABLE `tb_tv` (
  `id_tv` int(10) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_stasiun` varchar(50) NOT NULL,
  `jam_tayang` varchar(20) NOT NULL,
  `program` varchar(200) NOT NULL,
  `time_code` varchar(30) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `pasal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tv`
--

INSERT INTO `tb_tv` (`id_tv`, `hari`, `tanggal`, `nama_stasiun`, `jam_tayang`, `program`, `time_code`, `keterangan`, `pasal`) VALUES
(7, 'Senin', '2023-01-16', 'TVRI KALSEL', '11.02 - 11.30', 'Kajian Tauhid', '11.02 - 11.30', 'Tidak menampilkan klasifikasi program acara', 'SPS Pasal 33 (2)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasal`
--
ALTER TABLE `pasal`
  ADD PRIMARY KEY (`id_pasal`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_anggar`);

--
-- Indexes for table `pprograms`
--
ALTER TABLE `pprograms`
  ADD PRIMARY KEY (`id_pprogs`);

--
-- Indexes for table `programradio`
--
ALTER TABLE `programradio`
  ADD PRIMARY KEY (`id_progradio`);

--
-- Indexes for table `programtv`
--
ALTER TABLE `programtv`
  ADD PRIMARY KEY (`id_ptv`);

--
-- Indexes for table `tb_data_radio`
--
ALTER TABLE `tb_data_radio`
  ADD PRIMARY KEY (`id_radiu`);

--
-- Indexes for table `tb_data_tv`
--
ALTER TABLE `tb_data_tv`
  ADD PRIMARY KEY (`id_tivi`);

--
-- Indexes for table `tb_langgar`
--
ALTER TABLE `tb_langgar`
  ADD PRIMARY KEY (`id_langgar`);

--
-- Indexes for table `tb_options`
--
ALTER TABLE `tb_options`
  ADD PRIMARY KEY (`option_name`);

--
-- Indexes for table `tb_radio`
--
ALTER TABLE `tb_radio`
  ADD PRIMARY KEY (`id_radio`);

--
-- Indexes for table `tb_tv`
--
ALTER TABLE `tb_tv`
  ADD PRIMARY KEY (`id_tv`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasal`
--
ALTER TABLE `pasal`
  MODIFY `id_pasal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_anggar` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pprograms`
--
ALTER TABLE `pprograms`
  MODIFY `id_pprogs` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programradio`
--
ALTER TABLE `programradio`
  MODIFY `id_progradio` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `programtv`
--
ALTER TABLE `programtv`
  MODIFY `id_ptv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_data_radio`
--
ALTER TABLE `tb_data_radio`
  MODIFY `id_radiu` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_data_tv`
--
ALTER TABLE `tb_data_tv`
  MODIFY `id_tivi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_langgar`
--
ALTER TABLE `tb_langgar`
  MODIFY `id_langgar` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_radio`
--
ALTER TABLE `tb_radio`
  MODIFY `id_radio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_tv`
--
ALTER TABLE `tb_tv`
  MODIFY `id_tv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
