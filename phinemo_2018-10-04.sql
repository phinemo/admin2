# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22)
# Database: phinemo
# Generation Time: 2018-10-04 09:12:00 +0000
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
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;

INSERT INTO `media` (`id_media`, `file_name`, `uploaded_on`, `status`, `gambar`)
VALUES
	(17,'1037c7464654edb7e11f921f77ab523a','2018-10-04 14:10:03','live','1037c7464654edb7e11f921f77ab523a.png'),
	(18,'2cb0ebc02f4b6edcbeb1f7d80110c148','2018-10-04 15:01:21',NULL,'2cb0ebc02f4b6edcbeb1f7d80110c148.png'),
	(19,'8f0d2467a5bb425b5d91d8446be22096','2018-10-04 15:01:21',NULL,'8f0d2467a5bb425b5d91d8446be22096.png'),
	(20,'1c9b8f9d9ecbf5835ec98cb6f2c3c668','2018-10-04 15:03:22',NULL,'1c9b8f9d9ecbf5835ec98cb6f2c3c668.png'),
	(21,'e97531e38d72838b16fc266df6ee2b29','2018-10-04 15:03:22',NULL,'e97531e38d72838b16fc266df6ee2b29.png'),
	(22,'cde0851ddd5517fb1a2c4bba9ed15275','2018-10-04 15:03:43',NULL,'cde0851ddd5517fb1a2c4bba9ed15275.png'),
	(23,'3bfc2775476ecc727475f4b1397be6ed','2018-10-04 15:03:43',NULL,'3bfc2775476ecc727475f4b1397be6ed.png'),
	(24,'23251d973256a9cf0244fd68709f631b','2018-10-04 15:04:16',NULL,'23251d973256a9cf0244fd68709f631b.png'),
	(25,'0e93170990285c030d963540e29c63cc','2018-10-04 15:04:16',NULL,'0e93170990285c030d963540e29c63cc.png'),
	(26,'d96845ffd542ca05ad2af878b2d2aada','2018-10-04 15:04:41',NULL,'d96845ffd542ca05ad2af878b2d2aada.png'),
	(27,'2dcc7e55d346636ad5b1432d40170614','2018-10-04 15:04:41',NULL,'2dcc7e55d346636ad5b1432d40170614.png'),
	(28,'afcb3031656da7549520283bd3862a12','2018-10-04 15:05:57',NULL,'afcb3031656da7549520283bd3862a12.png'),
	(29,'7e0cca0fe383395714839b5e96e21de4','2018-10-04 15:05:57',NULL,'7e0cca0fe383395714839b5e96e21de4.png'),
	(30,'e5e8380d043eacf4d96f0e993b085ff8','2018-10-04 15:11:19',NULL,'e5e8380d043eacf4d96f0e993b085ff8.png'),
	(31,'14b57c4b578eeeda72aaba861d89843f','2018-10-04 15:11:19',NULL,'14b57c4b578eeeda72aaba861d89843f.png'),
	(32,'2e5d1bb4d99e5decc526332df0b6e59f','2018-10-04 15:14:25',NULL,'2e5d1bb4d99e5decc526332df0b6e59f.png'),
	(33,'7b61528ee0969f32f1149053ad4e293a','2018-10-04 15:14:25',NULL,'7b61528ee0969f32f1149053ad4e293a.png'),
	(34,'3e684917eac78a993da78e02efac30fb','2018-10-04 15:14:42',NULL,'3e684917eac78a993da78e02efac30fb.png'),
	(35,'075e23ab0b813c615deedfc519c02b08','2018-10-04 15:14:42',NULL,'075e23ab0b813c615deedfc519c02b08.png'),
	(36,'8ea2dfc0798297a0f8198ecb007ae01f','2018-10-04 15:15:17',NULL,'8ea2dfc0798297a0f8198ecb007ae01f.png'),
	(37,'8e4fbeb50c506160069b7692d28dc44f','2018-10-04 15:15:17',NULL,'8e4fbeb50c506160069b7692d28dc44f.png'),
	(38,'c105dd283d489e5754480362931bfb4f','2018-10-04 15:15:36',NULL,'c105dd283d489e5754480362931bfb4f.png'),
	(39,'4358cfee71eea313102d0f236489e792','2018-10-04 15:15:37',NULL,'4358cfee71eea313102d0f236489e792.png'),
	(40,'5db1491ef4cffe888a9623399b25a571','2018-10-04 15:15:40',NULL,'5db1491ef4cffe888a9623399b25a571.png'),
	(41,'3c284dd202bd6375907544c342a827dd','2018-10-04 15:15:40',NULL,'3c284dd202bd6375907544c342a827dd.png'),
	(42,'ae2927874f026b86b7d184df080340bd','2018-10-04 15:15:41',NULL,'ae2927874f026b86b7d184df080340bd.png'),
	(43,'3eab91648d185d6b47323af2eefc114f','2018-10-04 15:15:41',NULL,'3eab91648d185d6b47323af2eefc114f.png'),
	(44,'5ddbc167817157a1ed6a9e111edaf25d','2018-10-04 15:15:42',NULL,'5ddbc167817157a1ed6a9e111edaf25d.png'),
	(45,'39163ecb1e55c21168b78f683ccf7cb4','2018-10-04 15:15:42',NULL,'39163ecb1e55c21168b78f683ccf7cb4.png'),
	(46,'b07edba0265df7798b7f57e0ca832b56','2018-10-04 15:15:42',NULL,'b07edba0265df7798b7f57e0ca832b56.png'),
	(47,'f2594ff5aae70f13a390b53af257f529','2018-10-04 15:15:42',NULL,'f2594ff5aae70f13a390b53af257f529.png'),
	(48,'ed10c80cc29967fe09e8c05a1a5b484b','2018-10-04 15:15:43',NULL,'ed10c80cc29967fe09e8c05a1a5b484b.png'),
	(49,'cd8828ef7ddeb56c58169869236e3450','2018-10-04 15:15:43',NULL,'cd8828ef7ddeb56c58169869236e3450.png'),
	(50,'ef5718a8e9d613811ae6bd364bd83f7f','2018-10-04 15:15:44',NULL,'ef5718a8e9d613811ae6bd364bd83f7f.png'),
	(51,'6d061233736f3fe56a188b02b6e16134','2018-10-04 15:15:44',NULL,'6d061233736f3fe56a188b02b6e16134.png'),
	(52,'3bb62ed204e9609d36960359576490d1','2018-10-04 15:15:45',NULL,'3bb62ed204e9609d36960359576490d1.png'),
	(53,'f6ad1b1e0f2d154f1c110359da4f53f6','2018-10-04 15:15:45',NULL,'f6ad1b1e0f2d154f1c110359da4f53f6.png'),
	(54,'31378dcdfb76e4e3cb6b7b1d3b3f6d87','2018-10-04 15:16:16',NULL,'31378dcdfb76e4e3cb6b7b1d3b3f6d87.png'),
	(55,'de75e3b4602aca553e72352e20a3b230','2018-10-04 15:16:16',NULL,'de75e3b4602aca553e72352e20a3b230.png'),
	(56,'c85c955ff05ab83d0cc888f459f5470b','2018-10-04 15:16:54',NULL,'c85c955ff05ab83d0cc888f459f5470b.png'),
	(57,'9227cb3703037213917069517f7267a5','2018-10-04 15:16:54',NULL,'9227cb3703037213917069517f7267a5.png'),
	(58,'cee92f660b45a0224e0251570bc0a79b','2018-10-04 15:17:40',NULL,'cee92f660b45a0224e0251570bc0a79b.png'),
	(59,'0bd44022a9c2847b72e7430e66dc9876','2018-10-04 15:17:40',NULL,'0bd44022a9c2847b72e7430e66dc9876.png'),
	(60,'3bfc091c521939ee228603b4de07998e','2018-10-04 15:17:50',NULL,'3bfc091c521939ee228603b4de07998e.png'),
	(61,'0329cdb33f5659c090e16cdea68dd55f','2018-10-04 15:17:50',NULL,'0329cdb33f5659c090e16cdea68dd55f.png'),
	(62,'89e2df513b438ad29e88d0dadd16cac7','2018-10-04 15:17:57',NULL,'89e2df513b438ad29e88d0dadd16cac7.png'),
	(63,'f1b0e5c77d88bdbcf339f9acc65a9ad1','2018-10-04 15:17:57',NULL,'f1b0e5c77d88bdbcf339f9acc65a9ad1.png'),
	(64,'d427c1aa65411f09c25ec65c62158ba9','2018-10-04 15:18:08',NULL,'d427c1aa65411f09c25ec65c62158ba9.png'),
	(65,'b92b7c718c70ca154256e753c40c8ac6','2018-10-04 15:18:08',NULL,'b92b7c718c70ca154256e753c40c8ac6.png'),
	(66,'d8893fb251ba8e49eabf8f938bb91d10','2018-10-04 15:18:30',NULL,'d8893fb251ba8e49eabf8f938bb91d10.png'),
	(67,'db15a96a972b8df5ae3a5c8d368b4394','2018-10-04 15:18:30',NULL,'db15a96a972b8df5ae3a5c8d368b4394.png'),
	(68,'1ce603b17a39eed7708b12a3ea9f8e3b','2018-10-04 15:18:46',NULL,'1ce603b17a39eed7708b12a3ea9f8e3b.png'),
	(69,'24527cc3805a7b3e34a63ce41855ae87','2018-10-04 15:18:46',NULL,'24527cc3805a7b3e34a63ce41855ae87.png'),
	(70,'53ea9e5cef9b8f307b8dce6b9eace67a','2018-10-04 15:20:32',NULL,'53ea9e5cef9b8f307b8dce6b9eace67a.png'),
	(71,'ded73231f58bf94ea6a89a7010e39dd4','2018-10-04 15:20:32',NULL,'ded73231f58bf94ea6a89a7010e39dd4.png'),
	(72,'f1c5606c98720a33811367de6951d226','2018-10-04 15:21:58',NULL,'f1c5606c98720a33811367de6951d226.png'),
	(73,'284b0588568b3b0826ed355e7bddfb70','2018-10-04 15:21:58',NULL,'284b0588568b3b0826ed355e7bddfb70.png'),
	(74,'6e9cafbd497c6b092cb3d7543edb9156','2018-10-04 15:24:47',NULL,'6e9cafbd497c6b092cb3d7543edb9156.png'),
	(75,'d47065724ca196d33ed939aa4257588a','2018-10-04 15:24:47',NULL,'d47065724ca196d33ed939aa4257588a.png'),
	(76,'78520306ada2bb71618a83fa9b96e0de','2018-10-04 15:31:30',NULL,'78520306ada2bb71618a83fa9b96e0de.png'),
	(77,'35f04d7ffbb9d493fe8cf278f3ee9e24','2018-10-04 15:31:30',NULL,'35f04d7ffbb9d493fe8cf278f3ee9e24.png'),
	(78,'44923c2b6954dd0fef744793e9e82bcd','2018-10-04 15:31:40',NULL,'44923c2b6954dd0fef744793e9e82bcd.png'),
	(79,'ae62ad267fdd6da8f55f238f129e1d69','2018-10-04 15:31:40',NULL,'ae62ad267fdd6da8f55f238f129e1d69.png');

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
	(30,'Uni Pratiwi','<p>fkajhfdkljsahfksdajfhldasf</p>','{\"facebook\":\"dkjsfh\",\"twitter\":\"dahfkjdf\",\"number\":\"92991\",\"instagram\":\"dkjah\"}','d96845ffd542ca05ad2af878b2d2aada'),
	(55,'Syahrul Rizal','<p>dHello kdfhjkjfhaslkdfjha</p>','{\"facebook\":\"fanboy\",\"twitter\":\"ARUL\",\"number\":\"08237468887\",\"instagram\":\"syahrul\"}','78520306ada2bb71618a83fa9b96e0de'),
	(56,'Syahrul Rizal','<p>dHello kdfhjkjfhaslkdfjha</p>','{\"facebook\":\"fanboy\",\"twitter\":\"ARUL\",\"number\":\"08237468887\",\"instagram\":\"syahrul\"}','44923c2b6954dd0fef744793e9e82bcd');

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
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tanggal_mulai`, `tanggal_akhir`, `jml_anggota`, `harga`, `deskripsi`, `id_operator`, `id_kota`, `id_jenis`, `foto`)
VALUES
	(17,'Uni Pratiwi   ','2018-10-03','2018-10-03',99,1201,'<p>LOREM ipsum</p>','','','','');

/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
