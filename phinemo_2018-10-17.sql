-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2018 at 08:52 PM
-- Server version: 10.3.8-MariaDB-1:10.3.8+maria~jessie-log
-- PHP Version: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phinemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `id_jenis` varchar(11) NOT NULL,
  `jenis_tour` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_tour`) VALUES
('JNS0001', 'Private Trip'),
('JNS0002', 'Group Trip'),
('JNS0003', 'Open Trip'),
('JNS0004', 'Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` varchar(11) NOT NULL,
  `nama_kota` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
('KT0001', ' Ambon'),
('KT0002', ' Balikpapan'),
('KT0003', ' Banda Aceh'),
('KT0004', ' Bandar Lampung'),
('KT0005', ' Bandung'),
('KT0006', ' Banjar'),
('KT0007', ' Banjarbaru'),
('KT0008', ' Banjarmasin'),
('KT0009', ' Batam'),
('KT0010', ' Batu'),
('KT0011', ' Bau-Bau'),
('KT0012', ' Bekasi'),
('KT0013', ' Bengkulu'),
('KT0014', ' Bima'),
('KT0015', ' Binjai'),
('KT0016', ' Bitung'),
('KT0017', ' Blitar'),
('KT0018', ' Bogor'),
('KT0019', ' Bontang'),
('KT0020', ' Bukittinggi'),
('KT0021', ' Cilegon'),
('KT0022', ' Cimahi'),
('KT0023', ' Cirebon'),
('KT0024', ' Denpasar'),
('KT0025', ' Depok'),
('KT0026', ' Dumai'),
('KT0027', ' Gorontalo'),
('KT0028', ' Gunungsitoli'),
('KT0029', ' Administrasi Jakarta Barat'),
('KT0030', ' Administrasi Jakarta Pusat'),
('KT0031', ' Administrasi Jakarta Selatan'),
('KT0032', ' Administrasi Jakarta Timur'),
('KT0033', ' Administrasi Jakarta Utara'),
('KT0034', ' Jambi'),
('KT0035', ' Jayapura'),
('KT0036', ' Kediri'),
('KT0037', ' Kendari'),
('KT0038', ' mobagu'),
('KT0039', ' Kupang'),
('KT0040', ' Langsa'),
('KT0041', ' Lhokseumawe'),
('KT0042', ' Lubuklinggau'),
('KT0043', ' Madiun'),
('KT0044', ' Magelang'),
('KT0045', ' Makassar'),
('KT0046', ' Malang'),
('KT0047', ' Manado'),
('KT0048', ' Mataram'),
('KT0049', ' Medan'),
('KT0050', ' Metro'),
('KT0051', ' Mojokerto'),
('KT0052', ' Padang'),
('KT0053', ' Padangpanjang'),
('KT0054', ' Padangsidempuan'),
('KT0055', ' Pagar Alam'),
('KT0056', ' Palangkaraya'),
('KT0057', ' Palembang'),
('KT0058', ' Palopo'),
('KT0059', ' Palu'),
('KT0060', ' Pangkal Pinang'),
('KT0061', ' Parepare'),
('KT0062', ' Pariaman'),
('KT0063', ' Pasuruan'),
('KT0064', ' Payakumbuh'),
('KT0065', ' Pekalongan'),
('KT0066', ' Pekanbaru'),
('KT0067', ' Pematangsiantar'),
('KT0068', ' Pontianak'),
('KT0069', ' Prabumulih'),
('KT0070', ' Probolinggo'),
('KT0071', ' Sabang'),
('KT0072', ' Salatiga'),
('KT0073', ' Samarinda'),
('KT0074', ' Sawahlunto'),
('KT0075', ' Semarang'),
('KT0076', ' Serang'),
('KT0077', ' Sibolga'),
('KT0078', ' Singkawang'),
('KT0079', ' Solok'),
('KT0080', ' Sorong'),
('KT0081', ' Subulussalam'),
('KT0082', ' Sukabumi'),
('KT0083', ' Sungai Penuh'),
('KT0084', ' Surabaya'),
('KT0085', ' Surakarta'),
('KT0086', ' Tangerang Selatan'),
('KT0087', ' Tangerang'),
('KT0088', ' Tanjung Selor'),
('KT0089', ' Tanjungbalai'),
('KT0090', ' Tarakan'),
('KT0091', ' Tasikmalaya'),
('KT0092', ' Tebing Tinggi'),
('KT0093', ' Tegal'),
('KT0094', ' Ternate'),
('KT0095', ' Tidore Kepulauan'),
('KT0096', ' Tomohon'),
('KT0097', ' Tual'),
('KT0098', ' Watampone');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
`id_layanan` int(11) unsigned NOT NULL,
  `jenis_layanan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `jenis_layanan`) VALUES
(0, 'free'),
(1, 'basic'),
(2, 'pro');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
`id_media` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `uploaded_on` datetime DEFAULT NULL,
  `status` enum('live','deleted') DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `resized` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `file_name`, `uploaded_on`, `status`, `gambar`, `resized`) VALUES
(0, 'default_profile', '2018-10-09 10:25:06', NULL, 'default_profile.png', 'default_profile_thumb.png'),
(1, 'default_picture', '2018-10-09 10:25:06', NULL, 'default_picture.png', 'default_picture_thumb.png'),
(34, 'user', '2018-10-09 10:25:06', NULL, 'user.jpg', 'user1_thumb.jpg'),
(35, 'Bali', '2018-10-09 10:27:35', NULL, 'Bali.jpg', 'Bali_thumb.jpg'),
(36, 'raja_ampat_banner', '2018-10-09 10:27:35', NULL, 'raja_ampat_banner.jpg', 'raja_ampat_banner_thumb.jpg'),
(37, 'Raja_ampat', '2018-10-09 10:27:35', NULL, 'Raja_ampat.jpg', 'Raja_ampat_thumb.jpg'),
(38, 'Bali1', '2018-10-09 10:29:00', NULL, 'Bali1.jpg', 'Bali1_thumb.jpg'),
(39, 'raja_ampat_banner1', '2018-10-09 10:29:00', NULL, 'raja_ampat_banner1.jpg', 'raja_ampat_banner1_thumb.jpg'),
(40, 'Raja_ampat1', '2018-10-09 10:29:00', NULL, 'Raja_ampat1.jpg', 'Raja_ampat1_thumb.jpg'),
(41, 'Bali2', '2018-10-09 10:29:09', NULL, 'Bali2.jpg', 'Bali2_thumb.jpg'),
(42, 'raja_ampat_banner2', '2018-10-09 10:29:09', NULL, 'raja_ampat_banner2.jpg', 'raja_ampat_banner2_thumb.jpg'),
(43, 'Raja_ampat2', '2018-10-09 10:29:09', NULL, 'Raja_ampat2.jpg', 'Raja_ampat2_thumb.jpg'),
(44, 'photo1', '2018-10-09 12:31:31', NULL, 'photo1.png', 'photo1_thumb.png'),
(45, 'photo2', '2018-10-09 12:31:32', NULL, 'photo2.png', 'photo2_thumb.png'),
(46, 'photo3', '2018-10-09 12:31:32', NULL, 'photo3.jpg', 'photo3_thumb.jpg'),
(47, 'dieng', '2018-10-10 11:29:12', NULL, 'dieng.jpg', 'dieng_thumb.jpg'),
(48, 'gili_meno', '2018-10-10 11:29:12', NULL, 'gili_meno.jpg', 'gili_meno_thumb.jpg'),
(49, 'dieng1', '2018-10-10 11:59:06', NULL, 'dieng1.jpg', 'dieng1_thumb.jpg'),
(50, 'gili_meno1', '2018-10-10 11:59:06', NULL, 'gili_meno1.jpg', 'gili_meno1_thumb.jpg'),
(51, 'user2', '2018-10-10 12:37:51', NULL, 'user2.jpg', 'user2_thumb.jpg'),
(52, 'photo11', '2018-10-10 14:15:53', NULL, 'photo11.png', 'photo11_thumb.png'),
(53, 'photo21', '2018-10-10 14:15:54', NULL, 'photo21.png', 'photo21_thumb.png'),
(54, 'photo31', '2018-10-10 14:15:54', NULL, 'photo31.jpg', 'photo31_thumb.jpg'),
(55, 'photo12', '2018-10-10 14:16:32', NULL, 'photo12.png', 'photo12_thumb.png'),
(56, 'photo22', '2018-10-10 14:16:32', NULL, 'photo22.png', 'photo22_thumb.png'),
(57, 'photo32', '2018-10-10 14:16:33', NULL, 'photo32.jpg', 'photo32_thumb.jpg'),
(58, 'user11', '2018-10-11 08:58:06', NULL, 'user11.jpg', 'user11_thumb.jpg'),
(60, 'user3', '2018-10-11 09:14:05', NULL, 'user3.jpg', 'user3_thumb.jpg'),
(61, 'user7-128x128', '2018-10-11 13:26:49', NULL, 'user7-128x128.jpg', 'user7-128x128_thumb.jpg'),
(62, 'download4', '2018-10-11 13:45:12', NULL, 'download4.png', 'download4_thumb.png'),
(63, '5OR708DX_400x4003', '2018-10-11 13:48:19', NULL, '5OR708DX_400x4003.png', '5OR708DX_400x4003_thumb.png'),
(64, 'logo-CIP', '2018-10-11 13:52:49', NULL, 'logo-CIP.png', 'logo-CIP_thumb.png'),
(65, 'photo27', '2018-10-11 18:29:20', NULL, 'photo27.png', 'photo27_thumb.png'),
(66, 'avatar3', '2018-10-11 18:30:06', NULL, 'avatar3.png', 'avatar3_thumb.png'),
(67, 'dieng1', '2018-10-12 00:50:29', NULL, 'dieng1.jpg', 'dieng1_thumb.jpg'),
(68, 'dieng1_thumb1', '2018-10-12 00:50:29', NULL, 'dieng1_thumb1.jpg', 'dieng1_thumb1_thumb.jpg'),
(69, 'dieng11', '2018-10-12 00:50:29', NULL, 'dieng11.jpg', 'dieng11_thumb.jpg'),
(70, 'dieng2_thumb', '2018-10-12 00:50:29', NULL, 'dieng2_thumb.jpg', 'dieng2_thumb_thumb.jpg'),
(71, 'dieng2', '2018-10-12 00:50:29', NULL, 'dieng2.jpg', 'dieng2_thumb.jpg'),
(72, 'dieng3', '2018-10-12 00:51:11', NULL, 'dieng3.jpg', 'dieng3_thumb.jpg'),
(73, 'dieng1_thumb2', '2018-10-12 00:51:11', NULL, 'dieng1_thumb2.jpg', 'dieng1_thumb2_thumb.jpg'),
(74, 'dieng12', '2018-10-12 00:51:11', NULL, 'dieng12.jpg', 'dieng12_thumb.jpg'),
(75, 'dieng2_thumb1', '2018-10-12 00:51:11', NULL, 'dieng2_thumb1.jpg', 'dieng2_thumb1_thumb.jpg'),
(76, 'dieng21', '2018-10-12 00:51:11', NULL, 'dieng21.jpg', 'dieng21_thumb.jpg'),
(77, 'avatar5', '2018-10-12 08:47:55', NULL, 'avatar5.png', 'avatar5_thumb.png'),
(78, 'photo31', '2018-10-12 08:50:34', NULL, 'photo31.jpg', 'photo31_thumb.jpg'),
(79, 'photo21', '2018-10-12 08:50:58', NULL, 'photo21.png', 'photo21_thumb.png'),
(80, 'user6-128x128', '2018-10-12 09:04:35', NULL, 'user6-128x128.jpg', 'user6-128x128_thumb.jpg'),
(81, 'Screen_Shot_2018-08-27_at_10_50_56', '2018-10-12 11:11:33', NULL, 'Screen_Shot_2018-08-27_at_10_50_56.png', 'Screen_Shot_2018-08-27_at_10_50_56_thumb.png'),
(82, 'wisata-gereja-blenduk-630x380', '2018-10-12 11:31:04', NULL, 'wisata-gereja-blenduk-630x380.jpg', 'wisata-gereja-blenduk-630x380_thumb.jpg'),
(83, 'Screen_Shot_2018-06-05_at_1_13_47_PM', '2018-10-12 23:25:54', NULL, 'Screen_Shot_2018-06-05_at_1_13_47_PM.png', 'Screen_Shot_2018-06-05_at_1_13_47_PM-150x100.png'),
(84, 'Bali21', '2018-10-16 07:28:37', NULL, 'Bali21.jpg', 'Bali21-150x100.jpg'),
(85, 'wisata-gereja-blenduk-630x3801', '2018-10-16 09:14:35', NULL, 'wisata-gereja-blenduk-630x3801.jpg', 'wisata-gereja-blenduk-630x3801-150x100.jpg'),
(86, '688414_720', '2018-10-16 09:20:58', NULL, '688414_720.jpg', '688414_720-150x100.jpg'),
(87, 'photo11', '2018-10-17 09:04:28', NULL, 'photo11.png', 'photo11-150x100.png'),
(88, 'photo4', '2018-10-17 09:15:55', NULL, 'photo4.jpg', 'photo4-150x100.jpg'),
(89, 'cdog', '2018-10-17 09:19:21', NULL, 'cdog.png', 'cdog-150x100.png'),
(90, 'photo41', '2018-10-17 09:25:50', NULL, 'photo41.jpg', 'photo41-150x100.jpg'),
(91, 'cdog1', '2018-10-17 09:30:13', NULL, 'cdog1.png', 'cdog1-150x100.png');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
`id_operator` int(11) NOT NULL,
  `nama_operator` varchar(150) NOT NULL,
  `biografi` text NOT NULL,
  `contact` text NOT NULL,
  `id_media` varchar(255) DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1 COMMENT='I';

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_operator`, `biografi`, `contact`, `id_media`, `id_layanan`) VALUES
(131, 'Bersukaria Tour', '<p>Bersukaria is a tour organizer based in Semarang, Indonesia. We are focusing our activities on organizing the tours in the Central Java and Yogyakarta province\r\n</p><p>\r\n<strong>Why Central Java and Yogyakarta?</strong>\r\n</p><p>\r\nCentral Java and Yogyakarta have been widely known as a center of civilizations in Java for a long time. There were many ancient kingdoms and sultanates were founded in Central Java and Yogyakarta and left several marvelous wonders like huge temples and palaces. Central Java is the home of the biggest Buddhism temple in the world, Borobudur. During the colonial era, Central Java also played an important role as a home of various tea and coffee plantations as well as various industries such as bottling water and sugar. The first railway network in Indonesia runs in Central Java. Semarang as the capital of Central Java holds an important key role during the Dutch colonial era. Just like many other coastal cities in Java, Semarang was a vibrant city enriched by the multiple ethnics that is reflected upon its culture, buildings, and the foods that receive the influence from many parts of the world. Beside, Central Java and Yogyakarta also filled with a lot of places with the majestic natural beauty. A mountain range stretches in the middle of the island and some are still active, white beaches on the north coast of Java, area that still covered by forest, and also waterfalls. Despite Central Java is the third most populous province in Indonesia but you won''t feel that you are stuffed up between the people.\r\n</p><p>\r\n<strong>Why travelling with Bersukaria?</strong>\r\n</p><p>\r\nBersukaria will take you to organise the trip to see those wonders with the most fun way as possible since <em>bersukaria </em>itself means having fun wholeheartedly, so you will know what you get by travelling with us. We are not just an ordinary tour organizer but we love Central Java and Yogyakarta and its cultural heritage and the natural beauty from the bottom of our hearts, and we want to share it with all to our clients all over the world.\r\n\r\nJust send us the inquiry, tell us what kind of places you want to see whether its cultural, historical, or natural or even gastronomical, and then we will organize it for you so you can just sit back and relax, let us take care the rest.</p>', '{"facebook":"bersukariatour","twitter":"bersukariatour","number":"+6282133963810","instagram":"bersukariatour"}', '62', 2),
(132, 'Amabel Travel ', '<p>Dari asal-usul kami sebagai agen perjalanan rekreasi di tahun 2009, CV. Amabel perjalanan telah berkembang menjadi penyedia solusi terpercaya perusahaan perjalanan di bawah merek Amabel Travel. Transformasi ini adalah hasil alami dari reputasi kami untuk keandalan, berbagai sumber daya kami dan kami keakraban yang mendalam dengan pasar Indonesia.\r\n</p><p>\r\nHari ini, menggambar pada sejarah kami, kami terus membina hubungan jangka panjang yang dipersonalisasi, didukung oleh skala dan teknologi modern: hubungan yang mana kita tahu pelanggan kami begitu baik bahwa kita dapat menyarankan dan memberikan solusi Total perjalanan untuk kebutuhan mereka.</p>', '{"facebook":"amabeltravel","twitter":"","number":"+6281949305465","instagram":"ayokelilingindonesia"}', '63', 2),
(133, 'Cip Tour & Travel ', '', '{"facebook":"","twitter":"","number":"+62243553666","instagram":"ciptoutravel"}', '64', NULL),
(135, 'TAMA Shankara', '', '{"facebook":"","twitter":"","number":"+6285602578848","instagram":""}', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(11) NOT NULL,
  `nama_produk` varchar(150) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jml_anggota` int(10) NOT NULL,
  `harga` float NOT NULL,
  `deskripsi` text NOT NULL,
  `id_operator` varchar(11) NOT NULL,
  `id_kota` varchar(11) NOT NULL,
  `id_jenis` varchar(11) NOT NULL,
  `id_media` varchar(1024) DEFAULT NULL,
  `id_thumb` int(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tanggal_mulai`, `tanggal_akhir`, `jml_anggota`, `harga`, `deskripsi`, `id_operator`, `id_kota`, `id_jenis`, `id_media`, `id_thumb`) VALUES
(99, 'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcan      ', '2018-10-12', '2018-10-12', 9, 600000, '{"deskripsi":"<p>test<\\/p>","highlight":"","fasilitas":"","kebijakan":""}', '132', 'KT0008', 'JNS0003', '[72,73,74,75,76]', 72),
(102, 'Winter In Korea 6D4N by AirAsia      ', '2018-10-13', '2018-10-13', 10, 10885000, '{"deskripsi":"<p>Promo Anniversary dalam rangka menyambut anniversary CIP TOUR ke-3\\u00a0<\\/p><p>DISC Up To IDR 3.000.000<\\/p>","highlight":"<p>Destination :\\u00a0<\\/p><ul><li>Petite France\\u00a0<\\/li><li>Nami Island\\u00a0<\\/li><li>Seoul Islan\\u00a0<\\/li><li>Seoul City Tour\\u00a0<\\/li><li>And many fovorite places more\\u00a0<\\/li><\\/ul><p><br><\\/p>","fasilitas":"<p>Include :\\u00a0<\\/p><ul><li>Flight CGK - INC - CGK\\u00a0<\\/li><li>Breakfast and lunch meal\\u00a0<\\/li><li>Daily mineral water\\u00a0<\\/li><li>Private transport AC\\u00a0<\\/li><li>Tour leader from Indonesia\\u00a0<\\/li><li>Entrance ticket\\u00a0<\\/li><li>Documentation and banner\\u00a0<\\/li><li>Exclusive merchandise\\u00a0<\\/li><li>Free wifi on the bus<\\/li><\\/ul><p>Exclude :\\u00a0<\\/p><ul><li>Optional tour\\u00a0<\\/li><li>Dinner meals (USD 10\\/pax\\/times)<\\/li><li>Visa (Rp. 699.000\\/pax)<\\/li><li>Tipping\\u00a0<\\/li><\\/ul>","kebijakan":"<ul><li>Disc berlaku untuk reservasi group min. 2 orang\\/booking<\\/li><li>Promo berlaku s\\/d 15 Juli 2018 atau sampai kuota terpenuhi\\u00a0<\\/li><li>DP Rp. 3 juta, pelunasan max 30 Juli 2018\\u00a0<\\/li><\\/ul><p><br><\\/p>"}', '133', 'KT0029', 'JNS0002', '[81]', 81),
(103, 'Semarang City Tour      ', '2018-10-16', '2018-10-16', 2, 120000, '{"deskripsi":"<p>This tour will cover one day tour by car in three destinations of your choice. We will pick you up at the hotel and our guide will guide you from 8.00 AM and we will take you back to your hotel at 17.00 (5.00PM).<br><\\/p><p><br><\\/p>","highlight":"<p><b>Destination :\\u00a0<\\/b><\\/p><p><\\/p><ul><li style=\\"padding: 3px 0px;\\">Old City of Semarang<\\/li><li style=\\"padding: 3px 0px;\\">Lawang Sewu<\\/li><li style=\\"padding: 3px 0px;\\">China Town<\\/li><li style=\\"padding: 3px 0px;\\">Sam Poo Kong<\\/li><li style=\\"padding: 3px 0px;\\">City Center of Semarang<\\/li><li style=\\"padding: 3px 0px;\\">Jatibarang Lake and Kreo Cave<\\/li><li style=\\"padding: 3px 0px;\\">Grand Mosque of Central Java<\\/li><li style=\\"padding: 3px 0px;\\">Traditional Market<\\/li><li style=\\"padding: 3px 0px;\\">Giri Natha Hinduism Temple<\\/li><li style=\\"padding: 3px 0px;\\">Pagoda Buddhagaya Avalokitesvara<\\/li><li style=\\"padding: 3px 0px;\\">Mangkang City Zoo<\\/li><li style=\\"padding: 3px 0px;\\">Maosoleum Ki Ageng Pandanaran, the founder of Semarang<\\/li><li style=\\"padding: 3px 0px;\\">Souvenirs shops and stalls<\\/li><li style=\\"padding: 3px 0px;\\">And many more<\\/li><\\/ul><p style=\\"line-height: 1.4em; margin-top: 0px !important;\\"><b>The Schedule of the tour would be :<\\/b><\\/p><ul><li style=\\"padding: 3px 0px;\\">Two interesting places will be visited before the lunch<\\/li><li style=\\"padding: 3px 0px;\\">Having lunch at the restaurant of your choice<\\/li><li style=\\"padding: 3px 0px;\\">Shopping at the souvenir shops, batik shops or malls until 3 PM<\\/li><li style=\\"padding: 3px 0px;\\">Continue to visit the last destination until 5PM and then return to the hotel<\\/li><\\/ul><p><\\/p>","fasilitas":"<div><b>Include :<\\/b><\\/div><ul><li style=\\"padding: 3px 0px;\\">A Car or Minibus to take you to see around the city<\\/li><li style=\\"padding: 3px 0px;\\">A friendly guide<\\/li><li style=\\"padding: 3px 0px;\\">The entrance tickets for the destinations that you visit<\\/li><li style=\\"padding: 3px 0px;\\">Lunch only available for\\u00a0Business\\u00a0and\\u00a0First Class<\\/li><\\/ul>","kebijakan":""}', '131', 'KT0075', 'JNS0002', '[82]', 82),
(104, 'Explore Sumba : Jelajah Negeri Para Marapu     ', '2018-10-16', '2018-10-16', 10, 2900000, '{"deskripsi":"<p>Menikmati indahnya Pantai Bwanna, menyusuri hijaunya Bukit Wairinding atau menyelami hijaunya Laguna Weekuri!<br><\\/p>","highlight":"<p>Tj. Mareha, Pantai Bwanna, Pantai Mandorak, Laguna Weekuri, Kampung Ratenggaro, Bukint Ledong Ara, Kampung Praijing, Air Terjun Lapopu, Bukit Wairinding, Pantai Walaikiri dan masih banyak destinasi terbaik lainnya<\\/p>","fasilitas":"<p><b>Harga Termasuk<\\/b><\\/p>\\r\\n<ul>\\r\\n<li>Hotel standart AC 3 malam, sekamar berdua,bertiga jika ganjil<\\/li>\\r\\n<li>Transportasi selama tour<\\/li>\\r\\n<li>Makan sesuai program (9x) dan Air Mineral<\\/li>\\r\\n<li>Donasi,tiket wisata,parkir<\\/li>\\r\\n<li>Tour Guide<\\/li>\\r\\n<li>Dok foto<\\/li>\\r\\n<\\/ul>\\r\\n<p><b>Harga tidak termasuk<\\/b><\\/p>\\r\\n<ul>\\r\\n<li>Penerbangan domestik dan internasional<\\/li>\\r\\n<li>Minuman tambahan (jus, soft drink & minumal beralkohol)<\\/li>\\r\\n<li>Pengelurana pribadi seperti laundry, telepon, room service, mini bar, dsb<\\/li>\\r\\n<\\/ul>","kebijakan":"<p><strong>Syarat dan Ketentuan<\\/strong><\\/p>\\r\\n<ul>\\r\\n<li>Seat semua peserta akan kami booking jika peserta SUDAH membayar DP kepada kami<\\/li>\\r\\n<li>Jika Peserta mundur H-10 keberangkatan , maka uang yg telah di transfer tidak bisa di kembalikan,tetapi dapat di gantikan orang lain.<\\/li><li>Jika peserta mundur pada hari H keberangkatan, maka uang yang telah di transfer tidak dapat dikembalikan dianggap hangus dan tidak dapat di gantikan oleh peserta lain<\\/li><li>Jadwal acara atau itinerary bisa berubah tergantung cuaca dan kondisi dilapangan.<\\/li>\\r\\n<li>Apabila destinasi tujuan tidak memungkinkan untuk di kunjungi karena bencana,cuaca yg tidak mendukung,penutupan tempat wisata,atau sebab lain diluar kendali kami,maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yg telah dibayarkan.<\\/li>\\r\\n<li>Apabila sampai hari H-7 tidak ada pelunasan maka peserta dianggap menggundurkan diri.<\\/li>\\r\\n<li>Peserta tidak mempunyai riwayat kesehatan yg membahaykan diri sendiri ataupun orang lain.<\\/li>\\r\\n<li>Untuk pesawat yg delay bukan tanggung jawab kami,jika keterlambatan lebih dari 1 jam dari jadwal yg sudah di tentukan maka biaya penambahan transportasi ditanggung peserta<\\/li>\\r\\n<li>Harga akan menyesuaikan jika peserta kurang<\\/li>\\r\\n<li>DP akan kami kembalikan apabila ada pembatalan dari pihak EO<\\/li><li>Peserta di anggap mengerti dan meyetujui semua ketentuan diatas.<\\/li><\\/ul>"}', '132', 'KT0029', 'JNS0003', '[86]', 86),
(109, 'Open Trip With Seleb : New Years West Europe Eve 2019            ', '2018-10-16', '2018-10-17', 10, 36850000, '{"deskripsi":"<p>Jalan-jalan menikmati suasana malam pergantian tahun baru di Eropa bersama Selebritis ternama Indonesia Cut Meyriska (Artis &amp; Pemain Sinetron)<br><\\/p>","highlight":"<p>Destinasi yang akan di kunjungi&nbsp;<\\/p><ol><li>Paris New Years Eve 2019&nbsp;<\\/li><li>Paris City Tour&nbsp;<\\/li><li>Brussels City Tour&nbsp;<\\/li><li>Netherland Tour&nbsp;<\\/li><li>Mt. Titlis Tour&nbsp;<\\/li><li>Cologne City Tour&nbsp;<\\/li><li>Shoping Tour&nbsp;<\\/li><li>and many favourite places more<\\/li><\\/ol>","fasilitas":"<p><span style=\\"font-weight: 700;\\">Include :<\\/span><\\/p><ul><li>Roundtrip flight from jakarta&nbsp;<\\/li><li>*2\\/*3 hotel (twin\\/triple share)<\\/li><li>30 kg baggage<\\/li><li>Transportation&nbsp;<\\/li><li>Tour leader from Indonesia&nbsp;<\\/li><li>Indonesian\\/English speaking guide&nbsp;<\\/li><li>Exclusive merchandise&nbsp;<\\/li><li>Traveling bag&nbsp;<\\/li><li>First aid kit (standard)&nbsp;<\\/li><li>Standard documentation&nbsp;<\\/li><li>Airport tax &amp; city tax<\\/li><\\/ul><p><span style=\\"font-weight: 700;\\">Exclude :<\\/span><\\/p><ul><li>Personal Expense&nbsp;<\\/li><li>Lunch &amp; dinner&nbsp;<\\/li><li>Optional tour&nbsp;<\\/li><li>Visa schengen &amp; Insurance&nbsp;<\\/li><li>Mt. Titlis cable car (92 euro)&nbsp;<\\/li><li>Tipping ($8\\/pax\\/day)<\\/li><\\/ul>","kebijakan":"<p><span style=\\"font-weight: 700;\\">Early Bird Price :<\\/span><\\/p><p>Rp. 27.850.000 \\/ pax (until 20 Agustus 2018)<br>Rp. 29.850.000 \\/ pax (until 10 September 2018)<br>Rp. 31.850.000 \\/ pax (until 30 September 2018)<\\/p><p><span style=\\"font-weight: 700;\\">Term &amp; Condition :<\\/span><br><\\/p><ul><li>Minimum 10 pax to go<\\/li><li>DP 30%, pelunasan max. 25 Nov 2018<\\/li><li>Kuota terbatas untuk early bird price&nbsp;<\\/li><li>Harga dapat berubah menyesuaikan nilai tukar kurs<\\/li><\\/ul>"}', '133', 'KT0075', 'JNS0002', '[91]', 91);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) unsigned NOT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `level` varchar(11) DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `id_media` int(11) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `pass`, `level`, `id_operator`, `id_media`, `full_name`) VALUES
(1, 'faiz@phinemo.com', 'faizgantengsekali', 'superadmin', NULL, 0, 'Faiz Jazuli'),
(5, 'info@amabeltravel.com', '123456', 'user', 132, NULL, 'Dinda'),
(6, 'dimas.suryo@bersukaria.com', '123456', 'user', 131, NULL, 'Dimas Suryo'),
(7, '123@a.com', '123', 'admin', 132, NULL, 'test '),
(8, '123@b.com', '123', 'user', 132, NULL, 'Uni Pratiwi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
 ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
 ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
 ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
MODIFY `id_layanan` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
