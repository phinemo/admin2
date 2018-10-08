# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22)
# Database: phinemo
# Generation Time: 2018-10-08 08:31:45 +0000
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
	(1,'avatar3','2018-10-08 13:11:56',NULL,'avatar3.png','avatar3_thumb.png'),
	(2,'photo1','2018-10-08 13:23:11',NULL,'photo1.png','photo1_thumb.png'),
	(3,'photo218','2018-10-08 13:23:11',NULL,'photo218.png','photo218_thumb.png'),
	(4,'photo318','2018-10-08 13:23:12',NULL,'photo318.jpg','photo318_thumb.jpg'),
	(5,'photo11','2018-10-08 13:23:44',NULL,'photo11.png','photo11_thumb.png'),
	(6,'photo219','2018-10-08 13:23:44',NULL,'photo219.png','photo219_thumb.png'),
	(7,'photo319','2018-10-08 13:23:45',NULL,'photo319.jpg','photo319_thumb.jpg'),
	(8,'avatar51','2018-10-08 13:38:58',NULL,'avatar51.png','avatar51_thumb.png'),
	(9,'avatar52','2018-10-08 13:39:39',NULL,'avatar52.png','avatar52_thumb.png'),
	(10,'avatar2','2018-10-08 13:39:57',NULL,'avatar2.png','avatar2_thumb.png'),
	(11,'photo12','2018-10-08 13:44:13',NULL,'photo12.png','photo12_thumb.png'),
	(12,'photo220','2018-10-08 13:44:13',NULL,'photo220.png','photo220_thumb.png'),
	(13,'photo320','2018-10-08 13:44:14',NULL,'photo320.jpg','photo320_thumb.jpg'),
	(14,'photo418','2018-10-08 13:48:54',NULL,'photo418.jpg','photo418_thumb.jpg'),
	(15,'user7-128x128','2018-10-08 14:26:27',NULL,'user7-128x128.jpg','user7-128x128_thumb.jpg'),
	(16,'user2-160x160','2018-10-08 14:28:27',NULL,'user2-160x160.jpg','user2-160x160_thumb.jpg'),
	(17,'user3-128x128','2018-10-08 14:28:27',NULL,'user3-128x128.jpg','user3-128x128_thumb.jpg');

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
	(125,'Uni Pratiwi','jhgfhjkl','{\"facebook\":\"ffb\",\"twitter\":\"twitter\",\"number\":\"08233848399\",\"instagram\":\"Uni\"}','15');

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
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tanggal_mulai`, `tanggal_akhir`, `jml_anggota`, `harga`, `deskripsi`, `id_operator`, `id_kota`, `id_jenis`, `id_media`)
VALUES
	(73,'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcano  ','2018-10-08','2018-10-08',88,600000,'{\"deskripsi\":\"<p>lorem\\u00a0\\u00a0\\u00a0\\u00a0<\\/p>\",\"highlight\":\"<p>ipsum<\\/p>\",\"fasilitas\":\"<p>yea<\\/p>\",\"kebijakan\":\"<p>down<\\/p>\"}','','','','[16,17]');

/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
