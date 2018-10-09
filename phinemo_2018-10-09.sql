# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22)
# Database: phinemo
# Generation Time: 2018-10-09 03:35:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table jenis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jenis`;

CREATE TABLE `jenis` (
  `id_jenis` varchar(11) NOT NULL,
  `jenis_tour` varchar(60) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `jenis` WRITE;
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;

INSERT INTO `jenis` (`id_jenis`, `jenis_tour`)
VALUES
	('JNS0001','Private Trip'),
	('JNS0002','Group Trip'),
	('JNS0003','Open Trip'),
	('JNS0004','Transportation');

/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kota
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id_kota` varchar(11) NOT NULL,
  `nama_kota` varchar(60) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kota` WRITE;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;

INSERT INTO `kota` (`id_kota`, `nama_kota`)
VALUES
	('KT0001',' Ambon'),
	('KT0002',' Balikpapan'),
	('KT0003',' Banda Aceh'),
	('KT0004',' Bandar Lampung'),
	('KT0005',' Bandung'),
	('KT0006',' Banjar'),
	('KT0007',' Banjarbaru'),
	('KT0008',' Banjarmasin'),
	('KT0009',' Batam'),
	('KT0010',' Batu'),
	('KT0011',' Bau-Bau'),
	('KT0012',' Bekasi'),
	('KT0013',' Bengkulu'),
	('KT0014',' Bima'),
	('KT0015',' Binjai'),
	('KT0016',' Bitung'),
	('KT0017',' Blitar'),
	('KT0018',' Bogor'),
	('KT0019',' Bontang'),
	('KT0020',' Bukittinggi'),
	('KT0021',' Cilegon'),
	('KT0022',' Cimahi'),
	('KT0023',' Cirebon'),
	('KT0024',' Denpasar'),
	('KT0025',' Depok'),
	('KT0026',' Dumai'),
	('KT0027',' Gorontalo'),
	('KT0028',' Gunungsitoli'),
	('KT0029',' Administrasi Jakarta Barat'),
	('KT0030',' Administrasi Jakarta Pusat'),
	('KT0031',' Administrasi Jakarta Selatan'),
	('KT0032',' Administrasi Jakarta Timur'),
	('KT0033',' Administrasi Jakarta Utara'),
	('KT0034',' Jambi'),
	('KT0035',' Jayapura'),
	('KT0036',' Kediri'),
	('KT0037',' Kendari'),
	('KT0038',' mobagu'),
	('KT0039',' Kupang'),
	('KT0040',' Langsa'),
	('KT0041',' Lhokseumawe'),
	('KT0042',' Lubuklinggau'),
	('KT0043',' Madiun'),
	('KT0044',' Magelang'),
	('KT0045',' Makassar'),
	('KT0046',' Malang'),
	('KT0047',' Manado'),
	('KT0048',' Mataram'),
	('KT0049',' Medan'),
	('KT0050',' Metro'),
	('KT0051',' Mojokerto'),
	('KT0052',' Padang'),
	('KT0053',' Padangpanjang'),
	('KT0054',' Padangsidempuan'),
	('KT0055',' Pagar Alam'),
	('KT0056',' Palangkaraya'),
	('KT0057',' Palembang'),
	('KT0058',' Palopo'),
	('KT0059',' Palu'),
	('KT0060',' Pangkal Pinang'),
	('KT0061',' Parepare'),
	('KT0062',' Pariaman'),
	('KT0063',' Pasuruan'),
	('KT0064',' Payakumbuh'),
	('KT0065',' Pekalongan'),
	('KT0066',' Pekanbaru'),
	('KT0067',' Pematangsiantar'),
	('KT0068',' Pontianak'),
	('KT0069',' Prabumulih'),
	('KT0070',' Probolinggo'),
	('KT0071',' Sabang'),
	('KT0072',' Salatiga'),
	('KT0073',' Samarinda'),
	('KT0074',' Sawahlunto'),
	('KT0075',' Semarang'),
	('KT0076',' Serang'),
	('KT0077',' Sibolga'),
	('KT0078',' Singkawang'),
	('KT0079',' Solok'),
	('KT0080',' Sorong'),
	('KT0081',' Subulussalam'),
	('KT0082',' Sukabumi'),
	('KT0083',' Sungai Penuh'),
	('KT0084',' Surabaya'),
	('KT0085',' Surakarta'),
	('KT0086',' Tangerang Selatan'),
	('KT0087',' Tangerang'),
	('KT0088',' Tanjung Selor'),
	('KT0089',' Tanjungbalai'),
	('KT0090',' Tarakan'),
	('KT0091',' Tasikmalaya'),
	('KT0092',' Tebing Tinggi'),
	('KT0093',' Tegal'),
	('KT0094',' Ternate'),
	('KT0095',' Tidore Kepulauan'),
	('KT0096',' Tomohon'),
	('KT0097',' Tual'),
	('KT0098',' Watampone');

/*!40000 ALTER TABLE `kota` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `uploaded_on` datetime DEFAULT NULL,
  `status` enum('live','deleted') DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `resized` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;

INSERT INTO `media` (`id_media`, `file_name`, `uploaded_on`, `status`, `gambar`, `resized`)
VALUES
	(34,'user1','2018-10-09 10:25:06',NULL,'user1.jpg','user1_thumb.jpg'),
	(35,'Bali','2018-10-09 10:27:35',NULL,'Bali.jpg','Bali_thumb.jpg'),
	(36,'raja_ampat_banner','2018-10-09 10:27:35',NULL,'raja_ampat_banner.jpg','raja_ampat_banner_thumb.jpg'),
	(37,'Raja_ampat','2018-10-09 10:27:35',NULL,'Raja_ampat.jpg','Raja_ampat_thumb.jpg'),
	(38,'Bali1','2018-10-09 10:29:00',NULL,'Bali1.jpg','Bali1_thumb.jpg'),
	(39,'raja_ampat_banner1','2018-10-09 10:29:00',NULL,'raja_ampat_banner1.jpg','raja_ampat_banner1_thumb.jpg'),
	(40,'Raja_ampat1','2018-10-09 10:29:00',NULL,'Raja_ampat1.jpg','Raja_ampat1_thumb.jpg'),
	(41,'Bali2','2018-10-09 10:29:09',NULL,'Bali2.jpg','Bali2_thumb.jpg'),
	(42,'raja_ampat_banner2','2018-10-09 10:29:09',NULL,'raja_ampat_banner2.jpg','raja_ampat_banner2_thumb.jpg'),
	(43,'Raja_ampat2','2018-10-09 10:29:09',NULL,'Raja_ampat2.jpg','Raja_ampat2_thumb.jpg');

/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table operator
# ------------------------------------------------------------

DROP TABLE IF EXISTS `operator`;

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL AUTO_INCREMENT,
  `nama_operator` varchar(150) NOT NULL,
  `biografi` text NOT NULL,
  `contact` text NOT NULL,
  `id_media` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='I';

LOCK TABLES `operator` WRITE;
/*!40000 ALTER TABLE `operator` DISABLE KEYS */;

INSERT INTO `operator` (`id_operator`, `nama_operator`, `biografi`, `contact`, `id_media`)
VALUES
	(126,'Syahrul Rizal','<p>This is me, with everything between me and mine</p>','{\"facebook\":\"Yoo_Syah\",\"twitter\":\"Syahrukhan\",\"number\":\"08233848399\",\"instagram\":\"Ike_ike\"}','34');

/*!40000 ALTER TABLE `operator` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table produk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_thumb` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tanggal_mulai`, `tanggal_akhir`, `jml_anggota`, `harga`, `deskripsi`, `id_operator`, `id_kota`, `id_jenis`, `id_media`, `id_thumb`)
VALUES
	(94,'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcano','2018-10-09','2018-10-11',9,600000,'{\"deskripsi\":\"<p class=\\\"uk-text-justify uk-margin-small-bottom\\\" style=\\\"color: rgb(102, 102, 102); font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; text-align: justify !important;\\\">Menjelajahi cantiknya alam dan mengenal kearifan lokal Ubud.<\\/p><ul class=\\\"uk-list uk-list-bullet uk-margin-small-bottom uk-margin-remove-top\\\" style=\\\"margin-right: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(102, 102, 102); font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\\\"><li style=\\\"position: relative; padding-left: calc(1.5em + 10px);\\\">Durasi Tour: 8 Jam<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Jumlah Anggota Rombongan: 12 - 15 orang<\\/li><\\/ul>\",\"highlight\":\"<ul class=\\\"uk-list uk-list-bullet\\\" style=\\\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(102, 102, 102); font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\\\"><li style=\\\"position: relative; padding-left: calc(1.5em + 10px);\\\">Bersepeda santai di kawasan persawahan<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Pacu adrenalin dengan rafting di Sungai Ayung<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Belajar bermain gamelan bersama warga lokal<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Mengunjungi galeri seni<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Belanja kerajinan tangan lokal untuk oleh-oleh<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Bersantap kuliner lokal terbaik di restoran tepi sungai<\\/li><\\/ul>\",\"fasilitas\":\"<ul class=\\\"uk-list uk-list-bullet\\\" style=\\\"margin: 20px 0px; padding: 0px; list-style: none; color: rgb(102, 102, 102); font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\\\"><li style=\\\"position: relative; padding-left: calc(1.5em + 10px);\\\">Penjemputan dari bandara\\/hotel menuju meeting point<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Tiket masuk tempat wisata<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Makan 3x sehari<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Penginapan<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Dokumentasi foto<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Asuransi perjalanan<\\/li><\\/ul>\",\"kebijakan\":\"<ul class=\\\"uk-list uk-list-bullet\\\" style=\\\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(102, 102, 102); font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\\\"><li style=\\\"position: relative; padding-left: calc(1.5em + 10px);\\\">Pembatalan H-7 tur, uang kembali 100%<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Pembatalan H-6,5,4 tur, uang kembali 50%<\\/li><li style=\\\"position: relative; padding-left: calc(1.5em + 10px); margin-top: 10px;\\\">Pembatalan H-1, tidak ada pengembalian<\\/li><\\/ul>\"}','','','','[41,42,43]',41);

/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
