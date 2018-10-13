# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22)
# Database: phinemo
# Generation Time: 2018-10-13 00:20:50 +0000
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


# Dump of table layanan
# ------------------------------------------------------------

CREATE TABLE `layanan` (
  `id_layanan` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_layanan` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table media
# ------------------------------------------------------------

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
	(60,'user3','2018-10-11 09:14:05',NULL,'user3.jpg','user3_thumb.jpg'),
	(61,'photo23','2018-10-11 12:00:26',NULL,'photo23.png','photo23_thumb.png'),
	(62,'photo33','2018-10-11 12:00:26',NULL,'photo33.jpg','photo33_thumb.jpg'),
	(63,'photo24','2018-10-11 12:01:43',NULL,'photo24.png','photo24_thumb.png'),
	(64,'photo34','2018-10-11 12:01:44',NULL,'photo34.jpg','photo34_thumb.jpg'),
	(65,'user7-128x128','2018-10-11 12:22:57',NULL,'user7-128x128.jpg','user7-128x128_thumb.jpg'),
	(66,'photo25','2018-10-11 14:46:23',NULL,'photo25.png','photo25_thumb.png'),
	(67,'photo35','2018-10-11 14:46:24',NULL,'photo35.jpg','photo35_thumb.jpg'),
	(68,'photo26','2018-10-11 14:46:53',NULL,'photo26.png','photo26_thumb.png'),
	(69,'photo36','2018-10-11 14:46:53',NULL,'photo36.jpg','photo36_thumb.jpg'),
	(70,'user1-128x128','2018-10-11 18:11:13',NULL,'user1-128x128.jpg','user1-128x128_thumb.jpg'),
	(71,'photo37','2018-10-11 18:23:58',NULL,'photo37.jpg','photo37_thumb.jpg'),
	(72,'photo27','2018-10-11 18:24:56',NULL,'photo27.png','photo27_thumb.png'),
	(73,'photo28','2018-10-11 18:35:33',NULL,'photo28.png','photo28_thumb.png'),
	(74,'photo38','2018-10-11 19:00:38',NULL,'photo38.jpg','photo38_thumb.jpg'),
	(75,'dieng2','2018-10-11 21:05:46',NULL,'dieng2.jpg','dieng2_thumb.jpg'),
	(76,'dieng3','2018-10-11 23:13:33',NULL,'dieng3.jpg','dieng3_thumb.jpg'),
	(77,'dieng4','2018-10-11 23:14:05',NULL,'dieng4.jpg','dieng4_thumb.jpg'),
	(78,'dieng5','2018-10-11 23:14:07',NULL,'dieng5.jpg','dieng5_thumb.jpg'),
	(79,'dieng6','2018-10-11 23:14:37',NULL,'dieng6.jpg','dieng6_thumb.jpg'),
	(80,'dieng7','2018-10-11 23:15:46',NULL,'dieng7.jpg','dieng7_thumb.jpg'),
	(81,'dieng8','2018-10-11 23:16:31',NULL,'dieng8.jpg','dieng8_thumb.jpg'),
	(82,'dieng9','2018-10-11 23:16:59',NULL,'dieng9.jpg','dieng9_thumb.jpg'),
	(83,'dieng10','2018-10-11 23:17:50',NULL,'dieng10.jpg','dieng10_thumb.jpg'),
	(84,'dieng11','2018-10-11 23:18:29',NULL,'dieng11.jpg','dieng11_thumb.jpg'),
	(85,'dieng12','2018-10-11 23:18:35',NULL,'dieng12.jpg','dieng12_thumb.jpg'),
	(86,'dieng13','2018-10-11 23:18:54',NULL,'dieng13.jpg','dieng13_thumb.jpg'),
	(87,'dieng14','2018-10-11 23:19:07',NULL,'dieng14.jpg','dieng14_thumb.jpg'),
	(88,'dieng15','2018-10-11 23:20:06',NULL,'dieng15.jpg','dieng15_thumb.jpg'),
	(89,'dieng16','2018-10-11 23:20:23',NULL,'dieng16.jpg','dieng16_thumb.jpg'),
	(90,'dieng17','2018-10-11 23:20:35',NULL,'dieng17.jpg','dieng17_thumb.jpg'),
	(91,'dieng18','2018-10-11 23:23:55',NULL,'dieng18.jpg','dieng18_thumb.jpg'),
	(92,'dieng19','2018-10-11 23:36:50',NULL,'dieng19.jpg','dieng19_thumb.jpg'),
	(93,'dieng20','2018-10-11 23:37:19',NULL,'dieng20.jpg','dieng20_thumb.jpg'),
	(94,'dieng21','2018-10-11 23:37:46',NULL,'dieng21.jpg','dieng21_thumb.jpg'),
	(95,'dieng22','2018-10-11 23:38:58',NULL,'dieng22.jpg','dieng22_thumb.jpg'),
	(96,'dieng23','2018-10-11 23:39:45',NULL,'dieng23.jpg','dieng23_thumb.jpg'),
	(97,'dieng24','2018-10-11 23:41:19',NULL,'dieng24.jpg','dieng24_thumb.jpg'),
	(98,'dieng25','2018-10-11 23:41:37',NULL,'dieng25.jpg','dieng25_thumb.jpg'),
	(99,'dieng26','2018-10-11 23:42:55',NULL,'dieng26.jpg','dieng26_thumb.jpg'),
	(100,'dieng27','2018-10-11 23:43:45',NULL,'dieng27.jpg','dieng27_thumb.jpg'),
	(101,'default_profile1','2018-10-11 23:47:28',NULL,'default_profile1.png','default_profile1_thumb.png'),
	(102,'default_picture1','2018-10-11 23:50:34',NULL,'default_picture1.png','default_picture1_thumb.png'),
	(103,'default_picture2','2018-10-11 23:51:18',NULL,'default_picture2.png','default_picture2_thumb.png'),
	(104,'default_picture3','2018-10-11 23:51:37',NULL,'default_picture3.png','default_picture3_thumb.png'),
	(105,'default_profile_thumb1','2018-10-12 00:03:16',NULL,'default_profile_thumb1.png','default_profile_thumb1_thumb.png'),
	(106,'dieng28','2018-10-12 00:04:16',NULL,'dieng28.jpg','dieng28_thumb.jpg'),
	(107,'dieng1_thumb1','2018-10-12 00:04:16',NULL,'dieng1_thumb1.jpg','dieng1_thumb1_thumb.jpg'),
	(108,'dieng110','2018-10-12 00:04:16',NULL,'dieng110.jpg','dieng110_thumb.jpg'),
	(109,'dieng2_thumb1','2018-10-12 00:04:16',NULL,'dieng2_thumb1.jpg','dieng2_thumb1_thumb.jpg'),
	(110,'dieng29','2018-10-12 00:04:16',NULL,'dieng29.jpg','dieng29_thumb.jpg'),
	(111,'default_profile_thumb1_thumb1','2018-10-12 00:11:18',NULL,'default_profile_thumb1_thumb1.png','default_profile_thumb1_thumb1_thumb.png'),
	(112,'photo29','2018-10-12 09:00:14',NULL,'photo29.png','photo29_thumb.png'),
	(113,'photo210','2018-10-12 09:01:40',NULL,'photo210.png','photo210_thumb.png'),
	(114,'user6-128x128','2018-10-12 09:03:06',NULL,'user6-128x128.jpg','user6-128x128_thumb.jpg'),
	(115,'Screen_Shot_2018-06-05_at_1_13_47_PM','2018-10-12 11:26:27',NULL,'Screen_Shot_2018-06-05_at_1_13_47_PM.png','Screen_Shot_2018-06-05_at_1_13_47_PM_thumb.png'),
	(116,'Screen_Shot_2018-06-05_at_1_13_47_PM1','2018-10-12 11:27:45',NULL,'Screen_Shot_2018-06-05_at_1_13_47_PM1.png','Screen_Shot_2018-06-05_at_1_13_47_PM1_thumb.png'),
	(117,'IMG_20180619_172635','2018-10-12 22:03:04',NULL,'IMG_20180619_172635.jpg','IMG_20180619_172635_thumb.jpg'),
	(118,'IMG_20180619_172635','2018-10-12 22:03:06',NULL,'IMG_20180619_172635.jpg','IMG_20180619_172635_medium.jpg'),
	(119,'IMG_20180619_1726351','2018-10-12 22:07:42',NULL,'IMG_20180619_1726351.jpg','IMG_20180619_1726351_medium.jpg'),
	(120,'','2018-10-12 22:44:09',NULL,'',''),
	(121,'','2018-10-12 22:47:21',NULL,'',''),
	(122,'','2018-10-12 22:49:23',NULL,'',''),
	(123,'','2018-10-12 22:51:13',NULL,'',''),
	(124,'IMG_20180619_1726351_thumb13','2018-10-12 22:53:47',NULL,'IMG_20180619_1726351_thumb13.jpg','IMG_20180619_1726351_thumb13_thumb.jpg'),
	(125,'IMG_20180619_1726351_thumb131','2018-10-12 22:54:11',NULL,'IMG_20180619_1726351_thumb131.jpg','IMG_20180619_1726351_thumb131_thumb.jpg'),
	(126,'','2018-10-12 22:56:09',NULL,'','_thumb'),
	(127,'','2018-10-12 22:56:48',NULL,'','_thumb'),
	(128,'','2018-10-12 22:58:02',NULL,'','_thumb'),
	(129,'','2018-10-12 22:59:21',NULL,'','_thumb'),
	(130,'','2018-10-12 22:59:50',NULL,'',''),
	(131,'','2018-10-12 23:00:26',NULL,'',''),
	(132,'IMG_20180619_17263517','2018-10-12 23:01:11',NULL,'IMG_20180619_17263517.jpg','IMG_20180619_17263517_thumb.jpg'),
	(133,'','2018-10-12 23:04:18',NULL,'',''),
	(134,'','2018-10-12 23:05:53',NULL,'',''),
	(135,'IMG_20180619_17263517111','2018-10-12 23:07:00',NULL,'IMG_20180619_17263517111.jpg','IMG_20180619_17263517111_thumb.jpg'),
	(136,'IMG_20180619_172635171111','2018-10-12 23:08:44',NULL,'IMG_20180619_172635171111.jpg','IMG_20180619_172635171111_thumb.jpg'),
	(137,'IMG_20180619_17263517112','2018-10-12 23:14:15',NULL,'IMG_20180619_17263517112.jpg','IMG_20180619_17263517112-150x100.jpg'),
	(138,'IMG_20180619_172635171121','2018-10-12 23:17:11',NULL,'IMG_20180619_172635171121.jpg','IMG_20180619_172635171121-150x100.jpg'),
	(139,'IMG_20180619_172635171121-800x6001','2018-10-12 23:22:16',NULL,'IMG_20180619_172635171121-800x6001.jpg','IMG_20180619_172635171121-800x6001-150x100.jpg');

/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table operator
# ------------------------------------------------------------

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL AUTO_INCREMENT,
  `nama_operator` varchar(150) NOT NULL,
  `biografi` text NOT NULL,
  `contact` text NOT NULL,
  `id_media` varchar(255) DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='I';

LOCK TABLES `operator` WRITE;
/*!40000 ALTER TABLE `operator` DISABLE KEYS */;

INSERT INTO `operator` (`id_operator`, `nama_operator`, `biografi`, `contact`, `id_media`, `id_layanan`)
VALUES
	(127,'Roy Suryo','<p>This is me kjdahkjs</p>','{\"facebook\":\"Yoo_Syah\",\"twitter\":\"Syahrukhan\",\"number\":\"08233848399\",\"instagram\":\"Ike_ike\"}','101',NULL),
	(134,'xda','<p>dfafdaf</p>','{\"facebook\":\"fb\",\"twitter\":\"tw\",\"number\":\"08233848399\",\"instagram\":\"tw\"}','116',NULL);

/*!40000 ALTER TABLE `operator` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table produk
# ------------------------------------------------------------

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(150) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jml_anggota` int(10) NOT NULL,
  `harga` double NOT NULL,
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
	(113,'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcan       ','2018-10-12','2018-10-12',0,6000000,'{\"deskripsi\":\"<p>kkkk<\\/p>\",\"highlight\":\"\",\"fasilitas\":\"\",\"kebijakan\":\"\"}','127','KT0029','JNS0002','[99]',NULL),
	(119,'hjgk       ','2018-10-12','2018-10-12',0,1000000,'{\"deskripsi\":\"\",\"highlight\":\"\",\"fasilitas\":\"\",\"kebijakan\":\"aku ngantuk cuy\"}','127','KT0029','JNS0002','[111]',NULL),
	(120,'Bali All Inclusive: Ubud Rice Terraces, Temples & Vulcan               ','2018-10-12','2018-10-12',0,600,'{\"deskripsi\":\"<p>daf<\\/p>\",\"highlight\":\"\",\"fasilitas\":\"<p>dfa<\\/p>\",\"kebijakan\":\"\"}','127','KT0029','JNS0001','[113,117,119,135,136,137,138,139]',NULL);

/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(25) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `level` varchar(11) DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `id_media` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id_user`, `email`, `pass`, `level`, `id_operator`, `id_media`)
VALUES
	(1,'a@a.a','123','superadmin',127,65),
	(2,'roy@p.com','123','free',134,114);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
