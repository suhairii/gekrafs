-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 12:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gekrafs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `hashtag` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul`, `isi`, `hashtag`, `foto`) VALUES
(3, 'SELAMAT DATANG DI GEKRAFS BENGKALIS', '<p>Gekrafs yaitu perkumpulan gerbong ekonomi kreatif dan budaya (Gerakan Ekonomi Kreatif Nasional disingkat GEKRAFS) Gekrafs adalah masyarakat dan para pelaku ekonomi kreatif yang memiliki visi bersama yakini belajar,bersinergi,berdaya guna menjadikan ekonomi</p>\r\n', 'hahahahah', '354659010_Bengkalis.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `foto`, `sumber`, `lokasi`, `isi`) VALUES
(1, 'Kata Kreatif Indonesia 2022, Membangkitkan Ekonomi dan Buka Lapangan Kerja', '2023-12-07', '506-l1.png', 'Biro Komunikasi Kemenparekraf', 'Bengkalissss', '<p>Menteri Pariwisata dan Ekonomi Kreatif/Kepala Badan Pariwisata dan Ekonomi Kreatif (Menparekraf), Sandiaga Salahuddin Uno, meluncurkan program pengembangan Kabupaten/Kota (KaTa) Kreatif Indonesia 2022, sebagai upaya membangkitkan ekonomi dan membuka lapangan kerja seluas-luasnya.</p>\r\n\r\n<p>Peluncuran Kabupaten/Kota (KaTa) Kreatif Indonesia 2022 ini ditandai dengan dimulainya kegiatan Uji Petik Penilaian Mandiri Kabupaten/Kota Kreatif Indonesia (PMK3I) di Kota Bitung, Sulawesi Utara.</p>\r\n\r\n<p>Menparekraf Sandiaga Uno dalam acara &quot;kick off Pelaksanaan Program Kabupaten/Kota (KaTa) Kreatif Indonesia Tahun 2022&quot;, secara hybrid, Senin (31/1/2022), mengatakan, program KaTa Kreatif bertujuan untuk menggali, memanfaatkan, menumbuhkembangkan, mengelola, dan mengonversi kreativitas serta memanfaatkan ilmu pengetahuan dan teknologi, seni, dan budaya untuk mengembangkan potensi lokal.&nbsp;</p>\r\n\r\n<p>&quot;Mengawali 2022, selamat Kota Bitung mengalami momentum penting, menjadi kota pertama yang menandai pelaksanaan program KaTa Kreatif indonesia, yang menjadi unggulan kami di kemenparekraf. Besar harapan saya Tuhan memberkati kita semua atas kick off pengembangan KaTa Kreatif 2022 ini,&quot; ujarnya.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Melalui pengembangan KaTa Kreatif, ia berharap masyarakat dan pemerintah Kota Bitung semakin inovatif, adaptif, dan kolaboratif dalam meningkatkan kinerja ekonomi kreatif demi memajukan kesejahteraan masyarakat di Kota Bitung.&nbsp;</p>\r\n\r\n<p>&quot;Karena dengan kolaborasi ini, kita terus berkomitmen dan konsisten melalui beberapa program yang tepat sasaran dan tepat waktu untuk membangkitkan ekonomi kreatif di Kota Bitung,&quot; ujar Sandiaga.&nbsp;</p>\r\n\r\n<p>Lebih lanjut, Sandiaga menjelaskan bahwa Kota Bitung memiliki keindahan alam bahari dengan lingkup Destinasi Super Prioritas Likupang, yang perlu untuk terus didorong potensi produk ekonomi kreatifnya.&nbsp;</p>\r\n\r\n<p>Sebab, kontribusi sektor ekonomi kreatif (ekraf), Indonesia menempati posisi tiga besar dunia, setelah Amerika dengan Holywood, nomor dua Korea dengan K-Pop dan drama Korea.&nbsp;</p>\r\n\r\n<p>&quot;Tapi jangan khawatir, karena Bitung ini tetap menjadi bagian, bukan penyangga, tapi merupakan pilar yang kuat, yang kita akan dukung dari berbagai hasil ekonomi kreatif masyarakatnya, seperti hasil kuliner, hingga kriya khas Kota Bitung,&quot; kata Sandiaga.&nbsp;</p>\r\n'),
(4, 'Mantap Betolllll', '2023-12-15', '273-cover-9ad67dae-c568-a356-59cf-785fc2575bda.jpg', 'tes', 'Bengkalis', '<p style=\"text-align:justify\">Menteri Pariwisata dan Ekonomi Kreatif/Kepala Badan Pariwisata dan Ekonomi Kreatif (Menparekraf), Sandiaga Salahuddin Uno, meluncurkan program pengembangan Kabupaten/Kota (KaTa) Kreatif Indonesia 2022, sebagai upaya membangkitkan ekonomi dan membuka lapangan kerja seluas-luasnya.</p>\r\n\r\n<p style=\"text-align:justify\">Peluncuran Kabupaten/Kota (KaTa) Kreatif Indonesia 2022 ini ditandai dengan dimulainya kegiatan Uji Petik Penilaian Mandiri Kabupaten/Kota Kreatif Indonesia (PMK3I) di Kota Bitung, Sulawesi Utara.</p>\r\n\r\n<p style=\"text-align:justify\">Menparekraf Sandiaga Uno dalam acara &quot;kick off Pelaksanaan Program Kabupaten/Kota (KaTa) Kreatif Indonesia Tahun 2022&quot;, secara hybrid, Senin (31/1/2022), mengatakan, program KaTa Kreatif bertujuan untuk menggali, memanfaatkan, menumbuhkembangkan, mengelola, dan mengonversi kreativitas serta memanfaatkan ilmu pengetahuan dan teknologi, seni, dan budaya untuk mengembangkan potensi lokal.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Mengawali 2022, selamat Kota Bitung mengalami momentum penting, menjadi kota pertama yang menandai pelaksanaan program KaTa Kreatif indonesia, yang menjadi unggulan kami di kemenparekraf. Besar harapan saya Tuhan memberkati kita semua atas kick off pengembangan KaTa Kreatif 2022 ini,&quot; ujarnya.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Melalui pengembangan KaTa Kreatif, ia berharap masyarakat dan pemerintah Kota Bitung semakin inovatif, adaptif, dan kolaboratif dalam meningkatkan kinerja ekonomi kreatif demi memajukan kesejahteraan masyarakat di Kota Bitung.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Karena dengan kolaborasi ini, kita terus berkomitmen dan konsisten melalui beberapa program yang tepat sasaran dan tepat waktu untuk membangkitkan ekonomi kreatif di Kota Bitung,&quot; ujar Sandiaga.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Lebih lanjut, Sandiaga menjelaskan bahwa Kota Bitung memiliki keindahan alam bahari dengan lingkup Destinasi Super Prioritas Likupang, yang perlu untuk terus didorong potensi produk ekonomi kreatifnya.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Sebab, kontribusi sektor ekonomi kreatif (ekraf), Indonesia menempati posisi tiga besar dunia, setelah Amerika dengan Holywood, nomor dua Korea dengan K-Pop dan drama Korea.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Tapi jangan khawatir, karena Bitung ini tetap menjadi bagian, bukan penyangga, tapi merupakan pilar yang kuat, yang kita akan dukung dari berbagai hasil ekonomi kreatif masyarakatnya, seperti hasil kuliner, hingga kriya khas Kota Bitung,&quot; kata Sandiaga.&nbsp;</p>\r\n'),
(5, 'anjiung', '2023-12-15', '1675943024_logo-pdp.png', 'ntahh', 'Bengkalis', '<p style=\"text-align:justify\">Menteri Pariwisata dan Ekonomi Kreatif/Kepala Badan Pariwisata dan Ekonomi Kreatif (Menparekraf), Sandiaga Salahuddin Uno, meluncurkan program pengembangan Kabupaten/Kota (KaTa) Kreatif Indonesia 2022, sebagai upaya membangkitkan ekonomi dan membuka lapangan kerja seluas-luasnya.</p>\r\n\r\n<p style=\"text-align:justify\">Peluncuran Kabupaten/Kota (KaTa) Kreatif Indonesia 2022 ini ditandai dengan dimulainya kegiatan Uji Petik Penilaian Mandiri Kabupaten/Kota Kreatif Indonesia (PMK3I) di Kota Bitung, Sulawesi Utara.</p>\r\n\r\n<p style=\"text-align:justify\">Menparekraf Sandiaga Uno dalam acara &quot;kick off Pelaksanaan Program Kabupaten/Kota (KaTa) Kreatif Indonesia Tahun 2022&quot;, secara hybrid, Senin (31/1/2022), mengatakan, program KaTa Kreatif bertujuan untuk menggali, memanfaatkan, menumbuhkembangkan, mengelola, dan mengonversi kreativitas serta memanfaatkan ilmu pengetahuan dan teknologi, seni, dan budaya untuk mengembangkan potensi lokal.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Mengawali 2022, selamat Kota Bitung mengalami momentum penting, menjadi kota pertama yang menandai pelaksanaan program KaTa Kreatif indonesia, yang menjadi unggulan kami di kemenparekraf. Besar harapan saya Tuhan memberkati kita semua atas kick off pengembangan KaTa Kreatif 2022 ini,&quot; ujarnya.&nbsp;</p>\r\n'),
(6, 'tessswwww', '2023-12-16', '857239862_design food.jpg', 'tes', 'Bengkalis', '<p>Menteri Pariwisata dan Ekonomi Kreatif/Kepala Badan Pariwisata dan Ekonomi Kreatif (Menparekraf), Sandiaga Salahuddin Uno, meluncurkan program pengembangan Kabupaten/Kota (KaTa) Kreatif Indonesia 2022, sebagai upaya membangkitkan ekonomi dan membuka lapangan kerja seluas-luasnya.</p>\r\n\r\n<p>Peluncuran Kabupaten/Kota (KaTa) Kreatif Indonesia 2022 ini ditandai dengan dimulainya kegiatan Uji Petik Penilaian Mandiri Kabupaten/Kota Kreatif Indonesia (PMK3I) di Kota Bitung, Sulawesi Utara.</p>\r\n\r\n<p>Menparekraf Sandiaga Uno dalam acara &quot;kick off Pelaksanaan Program Kabupaten/Kota (KaTa) Kreatif Indonesia Tahun 2022&quot;, secara hybrid, Senin (31/1/2022), mengatakan, program KaTa Kreatif bertujuan untuk menggali, memanfaatkan, menumbuhkembangkan, mengelola, dan mengonversi kreativitas serta memanfaatkan ilmu pengetahuan dan teknologi, seni, dan budaya untuk mengembangkan potensi lokal.&nbsp;</p>\r\n\r\n<p>&quot;Mengawali 2022, selamat Kota Bitung mengalami momentum penting, menjadi kota pertama yang menandai pelaksanaan program KaTa Kreatif indonesia, yang menjadi unggulan kami di kemenparekraf. Besar harapan saya Tuhan memberkati kita semua atas kick off pengembangan KaTa Kreatif 2022 ini,&quot; ujarnya.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Melalui pengembangan KaTa Kreatif, ia berharap masyarakat dan pemerintah Kota Bitung semakin inovatif, adaptif, dan kolaboratif dalam meningkatkan kinerja ekonomi kreatif demi memajukan kesejahteraan masyarakat di Kota Bitung.&nbsp;</p>\r\n\r\n<p>&quot;Karena dengan kolaborasi ini, kita terus berkomitmen dan konsisten melalui beberapa program yang tepat sasaran dan tepat waktu untuk membangkitkan ekonomi kreatif di Kota Bitung,&quot; ujar Sandiaga.&nbsp;</p>\r\n\r\n<p>Lebih lanjut, Sandiaga menjelaskan bahwa Kota Bitung memiliki keindahan alam bahari dengan lingkup Destinasi Super Prioritas Likupang, yang perlu untuk terus didorong potensi produk ekonomi kreatifnya.&nbsp;</p>\r\n\r\n<p>Sebab, kontribusi sektor ekonomi kreatif (ekraf), Indonesia menempati posisi tiga besar dunia, setelah Amerika dengan Holywood, nomor dua Korea dengan K-Pop dan drama Korea.&nbsp;</p>\r\n\r\n<p>&quot;Tapi jangan khawatir, karena Bitung ini tetap menjadi bagian, bukan penyangga, tapi merupakan pilar yang kuat, yang kita akan dukung dari berbagai hasil ekonomi kreatif masyarakatnya, seperti hasil kuliner, hingga kriya khas Kota Bitung,&quot; kata Sandiaga.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id_community` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id_community`, `judul`, `isi`, `foto`) VALUES
(3, 'Community Space', '<p>Apa itu :</p>\r\n\r\n<p>Wadah yang memanfaatkan ruang publik sebagai pusat kegiatan komunitas yang bergerak diberbagai sub sektor industri kreatif.</p>\r\n\r\n<p>Tujuan community space:</p>\r\n\r\n<ol>\r\n	<li>Sebagai pusat berkumpulnya pelaku industri kreatif (sulaturahmi)</li>\r\n	<li>Untuk saling mendukung kebutuhan lintas sub sektor industri kreatif</li>\r\n	<li>Menjalin dan menjaring koneksi lintas usaha/ kegiatan dilintas sub sektor industri kreatif</li>\r\n	<li>Ruang diskusi para pelaku industri kreatif</li>\r\n	<li>Membangun ruang informasi, edukasi, promosi dan inovasi lintas sub sektor industri kreatif</li>\r\n</ol>\r\n\r\n<p>Kenapa Community Space:</p>\r\n\r\n<p>Dengan wadah Community Space memberikan ruang untuk menyelesaikan permasalahan yang ada di sektor industri kreatif serta memicu pertumbuhan inovasi dan kreatifitas baru dalam sebuah produk berbasis kearifan lokal</p>\r\n\r\n<p>Apa saja di Community Space:</p>\r\n\r\n<ol>\r\n	<li>Expo Produk Ekraf</li>\r\n	<li>Bazar UMKM</li>\r\n	<li>Permainan Rakyat</li>\r\n	<li>Kesenian Daerah dan Pegelaran Seni Lainnya</li>\r\n	<li>Talkshow Lintas Sub Sektor</li>\r\n	<li>Fashion dan Aktivitas Kreatifitas&nbsp;lainnya</li>\r\n</ol>\r\n', '868-WhatsApp Image 2024-01-11 at 21.44.11_ad4c9603.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `edukasi`
--

CREATE TABLE `edukasi` (
  `id_edukasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edukasi`
--

INSERT INTO `edukasi` (`id_edukasi`, `nama`, `jabatan`, `foto`) VALUES
(1, 'taro', 'Anggota', '1210086839_design food.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ekraf`
--

CREATE TABLE `ekraf` (
  `id_ekraf` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekraf`
--

INSERT INTO `ekraf` (`id_ekraf`, `judul`, `foto`, `desa`) VALUES
(1, 'Mantap Betolllll', '1820206701_design food.jpg', ''),
(3, 'Polbeng Lakukan Pelantikan Sejumlah Pejabat', '7864637_3d-rendering-beautiful-luxury-bedroom-suite-hotel-with-tv.jpg', 'Pangkalan Batang');

-- --------------------------------------------------------

--
-- Table structure for table `kolaborasi`
--

CREATE TABLE `kolaborasi` (
  `id_kolaborasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kolaborasi`
--

INSERT INTO `kolaborasi` (`id_kolaborasi`, `nama`, `gambar`) VALUES
(1, '', '657125973_gekrafs.png'),
(4, 'Ramadhan Abelio Nusa Putra', '1743930986_apple-touch-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `lcc`
--

CREATE TABLE `lcc` (
  `id_lcc` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lcc`
--

INSERT INTO `lcc` (`id_lcc`, `nama`, `isi`, `foto`) VALUES
(1, 'ss', '<p>asssssssssaaaa</p>\n', '2077695826_3imageartikelpromobank-bankBI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id_pariwisata` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id_pariwisata`, `nama`, `foto`) VALUES
(1, 'Pasir', '1465823553_14609-bengkalis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `bidang` enum('Dewan Pimpinan Gekrafs Cabang Kabupaten','Bidang 1 Program & Strategi','Bidang 2 Pengembangan Talenta','Bidang 3 Pemasaran, Media & Kerjasama','Bidang 4 HAKI, Hukum & Advokasi','Bidang 5 Event & Sosialisasi Program','Bidang 6 HAKI, Hukum & Advokasi','Bidang 7 Pembinaan Potensi Ekonomi Kreatif','Bidang 8 Riset Pelestarian Budaya Tradisi Nusantara') NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `bidang`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Dewan Pimpinan Gekrafs Cabang Kabupaten', 'taro', 'Ketua', '1012881811_design food.jpg'),
(2, 'Dewan Pimpinan Gekrafs Cabang Kabupaten', 'Teh Es', 'anggota', '274807088_logo-pdp.png'),
(3, 'Dewan Pimpinan Gekrafs Cabang Kabupaten', 'Ayam Krisp', 'anggota', '350799951_design food.jpg'),
(4, 'Dewan Pimpinan Gekrafs Cabang Kabupaten', 'Ricky Riotaro', 'Wakil Ketua', '352558302_sisohshjisd.png'),
(5, 'Bidang 2 Pengembangan Talenta', 'Ayam Krisp', 'anggota', '210326528_design food.jpg'),
(6, 'Bidang 2 Pengembangan Talenta', 'via', 'Ketua', '2130053_design food.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `isi` mediumtext NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `isi`, `foto`) VALUES
(3, '<p style=\"text-align:center\"><span style=\"color:#f1c40f\"><span style=\"font-size:20px\"><strong>APA ITU GEKRAFS</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">YAITU PERKUMPULAN GERBONG EKONOMI KREATIF DAN BUDAYA (GERAKAN EKONOMI KREATIF NASIONAL DISINGKAT GEKRAFS) ADALAH GERAKAN MASYARAKAT DAN PARA PELAKU EKONOMI KREATIF YANG MEMILIKI VISI BERSAMA YAKNI BELAJAR, BERSINERGI,&nbsp;BERDAYA GUNA MENJADIKAN EKONOMI KREATIF SEBAGAI MASA DEPAN INDONESIA.</p>\r\n\r\n<p style=\"text-align:right\"><span style=\"color:#f1c40f\">Dengan tagline #EkrafBangkitIndonesiaMaju</span></p>\r\n\r\n<p style=\"text-align:right\"><span style=\"color:#f1c40f\">menjadikan Gekrafs menjadi lokomotif para pelaku ekonomi kreatif</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#f1c40f\"><strong><span style=\"font-size:20px\">DASAR HUKUM</span></strong></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 24 TAHUN 2019 TENTANG EKONOMI KREATIF</li>\r\n	<li style=\"text-align:justify\">PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 6 TAHUN 2015 TENTANG BADAN EKONOMI KREATIF BESERTA PERUBAHAN&nbsp;</li>\r\n	<li style=\"text-align:justify\">PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 142 TAHUN 2018 TENTANG RENCANA INDUK PENGEMBANGAN EKONOMI KREATIF NASIONAL TAHUN 2018-2025</li>\r\n	<li style=\"text-align:justify\">PERATURAN DAERAH PROVINSI RIAU NOMOR 3 TAHUN 2019 TENTANG RPJMD PROVINSI RIAU 2019-2025</li>\r\n	<li style=\"text-align:justify\">PERATURAN DAERAH KABUPATEN BENGKALIS NOMOR 3 TAHUN 2021 TENTANG RPJMD KABUPATEN BENGKALIS 2021-2026</li>\r\n	<li style=\"text-align:justify\">PANDUAN PENYUSUNAN ROADMAP PENGEMBANGAN EKONOMI KREATIF DAERAH (RPKED)</li>\r\n	<li style=\"text-align:justify\">SURAT KEPUTUSAN KETUA UMUM DEWAN PIMPINAN PUSAT GERAKAN EKONOMI KREATIF NASIONAL (GEKRAFS) NOMOR : 120/SK/GEKRAFS/V/2023 TENTANG PEMBENTUKAN DEWAN PIMPINAN CABANG</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:right\"><strong><span style=\"color:#f1c40f\"><span style=\"font-size:20px\">LATAR BELAKANG KEBERADAAN GEKRAFS</span></span></strong></p>\r\n\r\n<p style=\"text-align:right\"><strong><span style=\"color:#f1c40f\"><span style=\"font-size:20px\">NASIONAL DI KABUPATEN BENGKALIS</span></span></strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">BANYAKNYA SITUS-SITUS PENINGGALAN SEJARAH, ALAM YANG RAMAH, SERTA KEGIATAN KEBUDAYAAN DAN KEAGAMAAN YANG BERPOTENSI MENJADI DESTINASI WISATA KOMPLEKS DIKABUPATEN BENGKALIS</li>\r\n	<li style=\"text-align:justify\">KEGIATAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL SEMAKIN MENARIK UNTUK DILIRIK MULAI DARI SUBSEKTOR KULINER, FASYEN, KESENIAN DAN BUDAYA, PERMAINAN RAKYAT, DAN LAIN SEBAGAINYA</li>\r\n	<li style=\"text-align:justify\">BENGKALIS MEMILIKI MASYARAKAT YANG HARMONIS DAN RAMAH DENGAN TINGKAT RASA KEKELUARGAAN YANG SANGAT TINGGI</li>\r\n	<li style=\"text-align:justify\">TURUT SERTA MEWUJUDKAN PENGELOLAAN POTENSI KEUANGAN DAERAH, SUMBER DAYA ALAM DAN SUMBER DAYA MANUSIA YANG EFEKTIF DALAM MEMAJUKAN PEREKONOMIAN KABUPATEN BENGKALIS MELAUI STRATEGI PENGUATAN EKONOMI BERBASIS SUMBERDAYA LOKAL DAN MENJAMIN KEBERLANGSUNGAN USAHA MASYARAKAT</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#f1c40f\"><span style=\"font-size:20px\"><strong>TUJUAN DIBENTUKNYA GEKRAFS </strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#f1c40f\"><span style=\"font-size:20px\"><strong>DI KABUPATEN BENGKALIS</strong></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">SEBAGAI WADAH BAGI PELAKU IDUSTRI KREATIF DIKABUPATEN BENGKALIS UNTUK BERSINERGI DALAM PERGERAKAN PENGEMBANGAN INDUSTRI KREATIF</li>\r\n	<li style=\"text-align:justify\">BERSAMA-SAMA MENGEMBANGKAN POTENSI WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DI KABUPATEN BENGKALIS;</li>\r\n	<li style=\"text-align:justify\">MELALUI PRODUK LOKAL MELAHIRKAN KARAKTERISTIK WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DI KABUPATEN BENGKALIS;</li>\r\n	<li style=\"text-align:justify\">MEMBERDAYAKAN MASYARAKAT SEBAGAI PENGGERAK KEGIATAN WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DI KABUPATEN BENGKALIS;</li>\r\n	<li style=\"text-align:justify\">PENGELOLAAN KEGIATAN WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DENGAN MEMANFAATKAN TEKNOLOGI INFOMASI SEBAGAI SISTEM MANAJEMEN KOLABORATIF YANG INKLUSIF, INFORMATIF, KOMUNIKATIF DAN AKUNTABLE. SERTA WACANA AGENSI KEPARIWISATAAN BERBASIS DIGITALISASI DI KABUPATEN BENGKALIS;</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#f1c40f\"><span style=\"font-size:20px\"><strong>PERMASALAHAN</strong></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">BELUM OPTIMALNYA KEGIATAN USAHA EKONOMI KREATIF DALAM MENUNJANG POTENSI WISATA YANG ADA DI KABUPATEN BENGKALIS.</li>\r\n	<li style=\"text-align:justify\">BELUM TERCIPTANYA SINERGISITAS LINTAS PELAKU USAHA EKONOMI KREATIF DIKABUPATEN BENGAKALIS</li>\r\n	<li style=\"text-align:justify\">MASIH RENDAHNYA KUALITAS BEBERAPA PRODUK EKONOMI KREATIF SEHINGGA SULIT UNTUK BERSAING DIPASAR NASIONAL MAUPUN INTERNASIONAL</li>\r\n	<li style=\"text-align:justify\">BELUM TERPENUHINYA KEGIATAN EKONOMI KREATIF DIBEBERAPA TITIK DAERAH WISATA DI KABUPATEN BENGKALIS</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"color:#f1c40f\"><strong>VISI GEKRAFS BENGKALIS</strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><em>&ldquo; MENJADIKAN NILAI SEJARAH, SENI DAN BUDAYA SERTA ALAM SEKITAR SEBAGAI DESTINASI WISATA BARU SERTA USAHA EKONOMI KREATIF BERBASIS KEARIFAN LOKAL YANG BERDAYA SAING DAN BERKELANJUTAN DENGAN POLA KOLABORASI BERBASIS TEKNOLOGI INFORMASI DI KABUPATEN BENGKALIS&rdquo;</em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#f1c40f\"><span style=\"font-size:20px\"><strong>MISI GEKRAFS BENGKALIS</strong></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">MELAKUKAN IDENTIFIKASI, INVENTARISASI DATA, PENGOLAHAN DATA SERTA ANALISIS DATA WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DI KABUPATEN BENGKALIS</li>\r\n	<li style=\"text-align:justify\">MENETAPKAN KEPUTUSAN KELOMPOK SASARAN WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DI KABUPATEN BENGKALIS</li>\r\n	<li style=\"text-align:justify\">MELAKUKAN KERJASAMA BERSAMA PEMERINTAH DAERAH/PEMERINTAH DESA, MASYARAKAT DAN STAKEHOLDER TERKAIT KEGIATAN WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DI KABUPATEN BENGKALIS</li>\r\n	<li style=\"text-align:justify\">MELAKUKAN PERENCANAAN, PEMBINAAN SERTA PENGELOLAAN SECARA INKLUSIF DENGAN POLA MANAJEMEN KOLABORATIF BERBASIS TEKNOLOGI INFORMASI</li>\r\n	<li style=\"text-align:justify\">MELAKUKAN EVALUASI DAN INOVASI TERKAIT KEGIATAN WISATA, BUDAYA DAN EKONOMI KREATIF BERBASIS KEARIFAN LOKAL DI KABUPATEN BENGKALIS</li>\r\n</ol>\r\n', '510505890_Screenshot 2023-12-27 193628.png');

-- --------------------------------------------------------

--
-- Table structure for table `trabas`
--

CREATE TABLE `trabas` (
  `id_trabas` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trabas`
--

INSERT INTO `trabas` (`id_trabas`, `judul`, `tgl`, `lokasi`, `foto`) VALUES
(1, 'Mantap Betolllll', '2023-12-15', 'Bengkalis', '1119592222_Screenshot 2023-12-27 193628.png');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `video` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `tanggal`, `video`, `tentang`) VALUES
(1, 'tessswwww', '2023-12-13', '644352701_2023-09-16-22-14-33_horizontal.mp4', 'mantap kali'),
(2, 'Rapat Harian dan Buka Puasa Bersama DPP Gekrafs', '2023-12-16', '1713088106_2023-09-16-22-14-33_horizontal.mp4', 'Rapat Harian dan Buka Puasa Bersama DPP Gekrafs, 19 April 2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id_community`);

--
-- Indexes for table `edukasi`
--
ALTER TABLE `edukasi`
  ADD PRIMARY KEY (`id_edukasi`);

--
-- Indexes for table `ekraf`
--
ALTER TABLE `ekraf`
  ADD PRIMARY KEY (`id_ekraf`);

--
-- Indexes for table `kolaborasi`
--
ALTER TABLE `kolaborasi`
  ADD PRIMARY KEY (`id_kolaborasi`);

--
-- Indexes for table `lcc`
--
ALTER TABLE `lcc`
  ADD PRIMARY KEY (`id_lcc`);

--
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id_pariwisata`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `trabas`
--
ALTER TABLE `trabas`
  ADD PRIMARY KEY (`id_trabas`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id_community` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `edukasi`
--
ALTER TABLE `edukasi`
  MODIFY `id_edukasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ekraf`
--
ALTER TABLE `ekraf`
  MODIFY `id_ekraf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kolaborasi`
--
ALTER TABLE `kolaborasi`
  MODIFY `id_kolaborasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lcc`
--
ALTER TABLE `lcc`
  MODIFY `id_lcc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trabas`
--
ALTER TABLE `trabas`
  MODIFY `id_trabas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
