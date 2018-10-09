-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 02:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phinemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
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

CREATE TABLE `kota` (
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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `uploaded_on` datetime DEFAULT NULL,
  `status` enum('live','deleted') DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `resized` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `file_name`, `uploaded_on`, `status`, `gambar`, `resized`) VALUES
(1, 'avatar3', '2018-10-08 13:11:56', NULL, 'avatar3.png', 'avatar3_thumb.png'),
(2, 'photo1', '2018-10-08 13:23:11', NULL, 'photo1.png', 'photo1_thumb.png'),
(3, 'photo218', '2018-10-08 13:23:11', NULL, 'photo218.png', 'photo218_thumb.png'),
(4, 'photo318', '2018-10-08 13:23:12', NULL, 'photo318.jpg', 'photo318_thumb.jpg'),
(5, 'photo11', '2018-10-08 13:23:44', NULL, 'photo11.png', 'photo11_thumb.png'),
(6, 'photo219', '2018-10-08 13:23:44', NULL, 'photo219.png', 'photo219_thumb.png'),
(7, 'photo319', '2018-10-08 13:23:45', NULL, 'photo319.jpg', 'photo319_thumb.jpg'),
(8, 'avatar51', '2018-10-08 13:38:58', NULL, 'avatar51.png', 'avatar51_thumb.png'),
(9, 'avatar52', '2018-10-08 13:39:39', NULL, 'avatar52.png', 'avatar52_thumb.png'),
(10, 'avatar2', '2018-10-08 13:39:57', NULL, 'avatar2.png', 'avatar2_thumb.png'),
(11, 'photo12', '2018-10-08 13:44:13', NULL, 'photo12.png', 'photo12_thumb.png'),
(12, 'photo220', '2018-10-08 13:44:13', NULL, 'photo220.png', 'photo220_thumb.png'),
(13, 'photo320', '2018-10-08 13:44:14', NULL, 'photo320.jpg', 'photo320_thumb.jpg'),
(14, 'photo418', '2018-10-08 13:48:54', NULL, 'photo418.jpg', 'photo418_thumb.jpg'),
(15, 'user7-128x128', '2018-10-08 14:26:27', NULL, 'user7-128x128.jpg', 'user7-128x128_thumb.jpg'),
(16, 'user2-160x160', '2018-10-08 14:28:27', NULL, 'user2-160x160.jpg', 'user2-160x160_thumb.jpg'),
(17, 'user3-128x128', '2018-10-08 14:28:27', NULL, 'user3-128x128.jpg', 'user3-128x128_thumb.jpg'),
(18, 'photo-1419848449479-6c8a7d8d62c2', '2018-10-08 16:30:47', NULL, 'photo-1419848449479-6c8a7d8d62c2.jpeg', 'photo-1419848449479-6c8a7d8d62c2_thumb.jpeg'),
(19, 'photo-1505373877841-8d25f7d46678', '2018-10-08 16:30:47', NULL, 'photo-1505373877841-8d25f7d46678.jpeg', 'photo-1505373877841-8d25f7d46678_thumb.jpeg'),
(20, 'maxresdefault', '2018-10-08 16:30:47', NULL, 'maxresdefault.jpg', 'maxresdefault_thumb.jpg'),
(21, 'feature_image_booking', '2018-10-08 16:31:29', NULL, 'feature_image_booking.jpg', 'feature_image_booking_thumb.jpg'),
(22, 'feature_image_wanita', '2018-10-08 16:31:29', NULL, 'feature_image_wanita.jpg', 'feature_image_wanita_thumb.jpg'),
(23, 'feature_image_ehehehhe', '2018-10-08 16:31:29', NULL, 'feature_image_ehehehhe.jpg', 'feature_image_ehehehhe_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(150) NOT NULL,
  `biografi` text NOT NULL,
  `contact` text NOT NULL,
  `id_media` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='I';

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_operator`, `biografi`, `contact`, `id_media`) VALUES
(125, 'Uni Pratiwi', 'jhgfhjkl', '{\"facebook\":\"ffb\",\"twitter\":\"twitter\",\"number\":\"08233848399\",\"instagram\":\"Uni\"}', '15');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
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
  `id_thumb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tanggal_mulai`, `tanggal_akhir`, `jml_anggota`, `harga`, `deskripsi`, `id_operator`, `id_kota`, `id_jenis`, `id_media`, `id_thumb`) VALUES
(73, 'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcano    ', '2018-10-08', '2018-10-08', 88, 600000, '{\"deskripsi\":\"<p>lorem\\u00a0\\u00a0\\u00a0\\u00a0<\\/p>\",\"highlight\":\"<p>ipsum<\\/p>\",\"fasilitas\":\"<p>yea<\\/p>\",\"kebijakan\":\"<p>down<\\/p>\"}', '', '', '', '[21,22,23]', NULL),
(74, 'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcano   ', '2018-10-08', '2018-10-08', 32, 12222200, '{\"deskripsi\":\"<p>hello hay\\u00a0\\u00a0\\u00a0\\u00a0<\\/p>\",\"highlight\":\"<p><b>daffdafasdfasdfdasf<\\/b><\\/p>\",\"fasilitas\":\"<ul><li>fds<\\/li><li>fdasfdas<\\/li><li>dfasdfa<\\/li><\\/ul>\",\"kebijakan\":\"<p>fdasfdasfdas<\\/p>\"}', '', '', '', '[18,19,20]', NULL);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
