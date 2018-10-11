# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22)
# Database: phinemo
# Generation Time: 2018-10-11 04:20:36 +0000
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
	(0,'default_profile','2018-10-09 10:25:06',NULL,'default_profile.png','default_profile_thumb.png'),
	(1,'default_picture','2018-10-09 10:25:06',NULL,'default_picture.png','default_picture_thumb.png'),
	(34,'user','2018-10-09 10:25:06',NULL,'user.jpg','user1_thumb.jpg'),
	(35,'Bali','2018-10-09 10:27:35',NULL,'Bali.jpg','Bali_thumb.jpg'),
	(36,'raja_ampat_banner','2018-10-09 10:27:35',NULL,'raja_ampat_banner.jpg','raja_ampat_banner_thumb.jpg'),
	(37,'Raja_ampat','2018-10-09 10:27:35',NULL,'Raja_ampat.jpg','Raja_ampat_thumb.jpg'),
	(38,'Bali1','2018-10-09 10:29:00',NULL,'Bali1.jpg','Bali1_thumb.jpg'),
	(39,'raja_ampat_banner1','2018-10-09 10:29:00',NULL,'raja_ampat_banner1.jpg','raja_ampat_banner1_thumb.jpg'),
	(40,'Raja_ampat1','2018-10-09 10:29:00',NULL,'Raja_ampat1.jpg','Raja_ampat1_thumb.jpg'),
	(41,'Bali2','2018-10-09 10:29:09',NULL,'Bali2.jpg','Bali2_thumb.jpg'),
	(42,'raja_ampat_banner2','2018-10-09 10:29:09',NULL,'raja_ampat_banner2.jpg','raja_ampat_banner2_thumb.jpg'),
	(43,'Raja_ampat2','2018-10-09 10:29:09',NULL,'Raja_ampat2.jpg','Raja_ampat2_thumb.jpg'),
	(44,'photo1','2018-10-09 12:31:31',NULL,'photo1.png','photo1_thumb.png'),
	(45,'photo2','2018-10-09 12:31:32',NULL,'photo2.png','photo2_thumb.png'),
	(46,'photo3','2018-10-09 12:31:32',NULL,'photo3.jpg','photo3_thumb.jpg'),
	(47,'dieng','2018-10-10 11:29:12',NULL,'dieng.jpg','dieng_thumb.jpg'),
	(48,'gili_meno','2018-10-10 11:29:12',NULL,'gili_meno.jpg','gili_meno_thumb.jpg'),
	(49,'dieng1','2018-10-10 11:59:06',NULL,'dieng1.jpg','dieng1_thumb.jpg'),
	(50,'gili_meno1','2018-10-10 11:59:06',NULL,'gili_meno1.jpg','gili_meno1_thumb.jpg'),
	(51,'user2','2018-10-10 12:37:51',NULL,'user2.jpg','user2_thumb.jpg'),
	(52,'photo11','2018-10-10 14:15:53',NULL,'photo11.png','photo11_thumb.png'),
	(53,'photo21','2018-10-10 14:15:54',NULL,'photo21.png','photo21_thumb.png'),
	(54,'photo31','2018-10-10 14:15:54',NULL,'photo31.jpg','photo31_thumb.jpg'),
	(55,'photo12','2018-10-10 14:16:32',NULL,'photo12.png','photo12_thumb.png'),
	(56,'photo22','2018-10-10 14:16:32',NULL,'photo22.png','photo22_thumb.png'),
	(57,'photo32','2018-10-10 14:16:33',NULL,'photo32.jpg','photo32_thumb.jpg'),
	(58,'user11','2018-10-11 08:58:06',NULL,'user11.jpg','user11_thumb.jpg'),
	(60,'user3','2018-10-11 09:14:05',NULL,'user3.jpg','user3_thumb.jpg');

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
  `id_media` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(8) DEFAULT NULL,
  `level` enum('BASIC','PRO') DEFAULT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='I';

LOCK TABLES `operator` WRITE;
/*!40000 ALTER TABLE `operator` DISABLE KEYS */;

INSERT INTO `operator` (`id_operator`, `nama_operator`, `biografi`, `contact`, `id_media`, `email`, `pass`, `level`)
VALUES
	(126,'Syahrul Rizal','<p>This is me, with everything between me and mine</p>','{\"facebook\":\"Yoo_Syah\",\"twitter\":\"Syahrukhan\",\"number\":\"08233848399\",\"instagram\":\"Ike_ike\"}','60','pi@p.com','123','BASIC'),
	(127,'Roy Suryo','<p>This is me, with everything between me and mine</p>','{\"facebook\":\"Yoo_Syah\",\"twitter\":\"Syahrukhan\",\"number\":\"08233848399\",\"instagram\":\"Ike_ike\"}','34','roy@p.com','123','PRO'),
	(128,'Uni Pratiwi','<p>bla bla bla</p>','{\"facebook\":\"fkjash\",\"twitter\":\"twitter\",\"number\":\"08233848399\",\"instagram\":\"fdjkhf\"}','51',NULL,NULL,NULL);

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
	(94,'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcano ','2018-10-09','2018-10-09',9,600000,'{\"deskripsi\":\"<ul><li>Menjelajahi cantiknya alam dan mengenal kearifan lokal Ubud.<\\/li><li>Durasi Tour: 8 Jam<\\/li><li>Jumlah Anggota Rombongan: 12 - 15 orang<\\/li><\\/ul>\",\"highlight\":\"<ul><li>Bersepeda santai di kawasan persawahanPacu adrenalin dengan rafting di Sungai Ayung<\\/li><li>Belajar bermain gamelan bersama warga lokal<\\/li><li>Mengunjungi galeri seni<\\/li><li>Belanja kerajinan tangan lokal untuk oleh-oleh<\\/li><li>Bersantap kuliner lokal terbaik di restoran tepi sungai<\\/li><\\/ul>\",\"fasilitas\":\"<ul><li>Penjemputan dari bandara\\/hotel menuju meeting point<\\/li><li>Tiket masuk tempat wisata<\\/li><li>Makan 3x sehari<\\/li><li>Penginapan<\\/li><li>Dokumentasi foto<\\/li><li>Asuransi perjalanan<\\/li><\\/ul>\",\"kebijakan\":\"<ul><li>Pembatalan H-7 tur, uang kembali 100%<\\/li><li>Pembatalan H-6,5,4 tur, uang kembali 50%<\\/li><li>Pembatalan H-1, tidak ada pengembalian<\\/li><\\/ul>\"}','','','','[44,45,46]',41),
	(96,'Mt. Batur Sunrise Hike Dieng','2018-10-18','2018-10-19',88,1200000,'{\"deskripsi\":\"<ul><li>Lalalalala<\\/li><li>fdakjfhdaslkfj<\\/li><li>fkldjashf<\\/li><li>dflakjdhfas<\\/li><\\/ul>\",\"highlight\":\"<ul><li>fdklasjfhalkfjahldkfjahdslfkjah<\\/li><li>dlfkajhladksjfhdalskjfh<\\/li><li>d;fajhdkajfhdlaksjfhaslkdjfha<\\/li><li>dfjahdflajfhdsalfkjasdhlkfjdsahflkjadshf<\\/li><li>fdkljasfhaldskfjhdaslkfjdashfljahf<\\/li><\\/ul>\",\"fasilitas\":\"<p>Termasuk<\\/p><ul><li>fdjahfdlaksfjhadlskjfhalskjf<\\/li><li>fdkajsfhadlksjfhas<\\/li><\\/ul><p>Tidak Termasuk<\\/p><ul><li>kfdahfkladjsf<\\/li><li>dflajhdlaksf<\\/li><\\/ul>\",\"kebijakan\":\"<ul><li>fkdjashfkldasjfhalkdsjfh<\\/li><li>dajfhadlksfjh<\\/li><li>dlasjfhdalfkjdhal<\\/li><\\/ul>\"}','','','','[49,50]',49);

/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
