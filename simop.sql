-- MySQL dump 10.13  Distrib 5.7.9, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: simop
-- ------------------------------------------------------
-- Server version	5.7.11-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bidang`
--

DROP TABLE IF EXISTS `bidang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bidang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bidang` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bidang`
--

LOCK TABLES `bidang` WRITE;
/*!40000 ALTER TABLE `bidang` DISABLE KEYS */;
INSERT INTO `bidang` VALUES (1,'Kepala'),(2,'Tata Usaha'),(3,'Statistik Sosial'),(4,'Statistik Produksi'),(5,'Statistik Distribusi'),(6,'Neraca Wilayah dan Analisis Statistik'),(7,'Integrasi Pengolahan dan Diseminasi Statistik');
/*!40000 ALTER TABLE `bidang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catatan`
--

DROP TABLE IF EXISTS `catatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catatan` text NOT NULL,
  `pekerjaan_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IX_Relationship5` (`pekerjaan_id`),
  KEY `IX_Relationship13` (`user_id`),
  CONSTRAINT `Relationship13` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `Relationship5` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catatan`
--

LOCK TABLES `catatan` WRITE;
/*!40000 ALTER TABLE `catatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `catatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_waktu`
--

DROP TABLE IF EXISTS `jenis_waktu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_waktu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_waktu` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_waktu`
--

LOCK TABLES `jenis_waktu` WRITE;
/*!40000 ALTER TABLE `jenis_waktu` DISABLE KEYS */;
INSERT INTO `jenis_waktu` VALUES (1,'Sensus'),(2,'Tahunan'),(3,'Triwulan'),(4,'Subround'),(5,'Semester'),(6,'Adhoc');
/*!40000 ALTER TABLE `jenis_waktu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `jenis_waktu_id` int(11) DEFAULT NULL,
  `nilai_waktu` varchar(4) NOT NULL,
  `tahun` char(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IX_Relationship1` (`jenis_waktu_id`),
  CONSTRAINT `Relationship1` FOREIGN KEY (`jenis_waktu_id`) REFERENCES `jenis_waktu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan`
--

LOCK TABLES `kegiatan` WRITE;
/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
INSERT INTO `kegiatan` VALUES (1,'Sensus Ekonomi',1,'2016','2016'),(2,'Ubinan',4,'1','2016'),(3,'Survei Sosial Ekonomi Nasional',5,'1','2016'),(4,'Pemutakhiran Basis Data Terpadu',6,'2016','2016'),(5,'Maintenance Server BPS Provinsi',6,'2016','2016'),(6,'Listing Sensus Ekonomi',1,'2016','2016');
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'Administrator'),(2,'Kepala BPS Provinsi'),(3,'Kepala Bidang'),(4,'Kepala Seksi'),(5,'Staf');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pekerjaan`
--

DROP TABLE IF EXISTS `pekerjaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jumlah_target` int(11) NOT NULL,
  `keterangan` text,
  `unit_target_id` int(11) DEFAULT NULL,
  `user_creator_id` int(11) DEFAULT NULL,
  `user_pj_id` int(11) DEFAULT NULL,
  `kegiatan_id` int(11) DEFAULT NULL,
  `before_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IX_Relationship2` (`kegiatan_id`),
  KEY `IX_Relationship3` (`unit_target_id`),
  KEY `IX_Relationship12` (`user_creator_id`),
  KEY `IX_Relationship17` (`user_pj_id`),
  CONSTRAINT `Relationship12` FOREIGN KEY (`user_creator_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `Relationship17` FOREIGN KEY (`user_pj_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `Relationship2` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `Relationship3` FOREIGN KEY (`unit_target_id`) REFERENCES `unit_target` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pekerjaan`
--

LOCK TABLES `pekerjaan` WRITE;
/*!40000 ALTER TABLE `pekerjaan` DISABLE KEYS */;
INSERT INTO `pekerjaan` VALUES (1,'Listing Ubinan Subround I Tahun 2016','2016-01-01','2016-01-31',120,NULL,1,8,8,2,NULL),(2,'Monitoring Entri Pemutakhiran Susenas Semester I Tahun 2016','2016-01-05','2016-01-30',250,NULL,1,17,17,3,NULL),(3,'Memasang Rak Server','2016-01-25','2016-02-01',1,NULL,5,18,18,5,NULL),(4,'Entri Hasil Listing Ubinan Subround I Tahun 2016','2016-01-28','2016-02-01',120,NULL,1,8,8,2,1),(5,'Memasang PC Server ke dalam rak','2016-02-01','2016-02-03',1,NULL,5,26,26,5,3),(6,'Alokasi Petugas','2016-01-25','2016-03-15',100,'',1,18,18,6,NULL);
/*!40000 ALTER TABLE `pekerjaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelaksana_pekerjaan`
--

DROP TABLE IF EXISTS `pelaksana_pekerjaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelaksana_pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_alokasi` date NOT NULL,
  `jumlah_target` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `kualitas` float NOT NULL,
  `pekerjaan_id` int(11) DEFAULT NULL,
  `user_pelaksana_id` int(11) DEFAULT NULL,
  `user_pengalokasi_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IX_Relationship14` (`pekerjaan_id`),
  KEY `IX_Relationship18` (`user_pelaksana_id`),
  KEY `IX_Relationship19` (`user_pengalokasi_id`),
  CONSTRAINT `Relationship14` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Relationship18` FOREIGN KEY (`user_pelaksana_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `Relationship19` FOREIGN KEY (`user_pengalokasi_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelaksana_pekerjaan`
--

LOCK TABLES `pelaksana_pekerjaan` WRITE;
/*!40000 ALTER TABLE `pelaksana_pekerjaan` DISABLE KEYS */;
INSERT INTO `pelaksana_pekerjaan` VALUES (1,'2016-01-05',250,'',0,2,17,17);
/*!40000 ALTER TABLE `pelaksana_pekerjaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progres_pelaksana_pekerjaan`
--

DROP TABLE IF EXISTS `progres_pelaksana_pekerjaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progres_pelaksana_pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persentase` float NOT NULL,
  `jumlah_realisasi` int(11) DEFAULT NULL,
  `pelaksana_pekerjaan_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IX_Relationship16` (`pelaksana_pekerjaan_id`),
  CONSTRAINT `Relationship16` FOREIGN KEY (`pelaksana_pekerjaan_id`) REFERENCES `pelaksana_pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progres_pelaksana_pekerjaan`
--

LOCK TABLES `progres_pelaksana_pekerjaan` WRITE;
/*!40000 ALTER TABLE `progres_pelaksana_pekerjaan` DISABLE KEYS */;
INSERT INTO `progres_pelaksana_pekerjaan` VALUES (1,50,125,1,'2016-01-19 00:00:00','2016-01-19 00:00:00');
/*!40000 ALTER TABLE `progres_pelaksana_pekerjaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seksi`
--

DROP TABLE IF EXISTS `seksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_seksi` varchar(50) NOT NULL,
  `bidang_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IX_Relationship9` (`bidang_id`),
  CONSTRAINT `Relationship9` FOREIGN KEY (`bidang_id`) REFERENCES `bidang` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seksi`
--

LOCK TABLES `seksi` WRITE;
/*!40000 ALTER TABLE `seksi` DISABLE KEYS */;
INSERT INTO `seksi` VALUES (1,'Bina Program',2),(2,'Kepegawaian dan Hukum',2),(3,'Keuangan',2),(4,'Urusan Dalam',2),(5,'Statistik Kependudukan',3),(6,'Statistik Ketahanan Sosial',3),(7,'Statistik Kesejahteraan Rakyat',3),(8,'Statistik Pertanian',4),(9,'Statistik Industri',4),(10,'Statistik Pertambangan, Energi dan Konstruksi',4),(11,'Statistik Harga Konsumen dan Harga Perdagangan Bes',5),(12,'Statistik Keuangan dan Harga Produsen',5),(13,'Statistik Niaga dan Jasa',5),(14,'Neraca Produksi',6),(15,'Neraca Konsumsi',6),(16,'Analisis Statistik Lintas Sektoral',6),(17,'Integrasi Pengolahan Data',7),(18,'Jaringan dan Rujukan Statistik',7),(19,'Diseminasi dan Layanan Statistik',7),(20,'Kepala Bagian',2),(21,'Kepala Bidang',3),(22,'Kepala Bidang',4),(23,'Kepala Bidang',5),(24,'Kepala Bidang',6),(25,'Kepala Bidang',7),(26,'Kepala Provinsi',1);
/*!40000 ALTER TABLE `seksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit_target`
--

DROP TABLE IF EXISTS `unit_target`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit_target` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit_target`
--

LOCK TABLES `unit_target` WRITE;
/*!40000 ALTER TABLE `unit_target` DISABLE KEYS */;
INSERT INTO `unit_target` VALUES (1,'Blok Sensus'),(2,'Dokumen'),(3,'Tabel'),(4,'Kecamatan'),(5,'Kegiatan');
/*!40000 ALTER TABLE `unit_target` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(18) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `seksi_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IX_Relationship7` (`seksi_id`),
  KEY `IX_Relationship8` (`level_id`),
  CONSTRAINT `Relationship7` FOREIGN KEY (`seksi_id`) REFERENCES `seksi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `Relationship8` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'196811051994012001','Ika Novia Satriana SE, MM','ika','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','htHgcIuszC0RlVvcyduMCjRZLxVNS7BgyFb9Rct31h3bVkC2eo4Gwc9A1KLP',1,4),(2,'196604131986032002','Faridawati','faridawati','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',2,4),(3,'196903221994012001','Ir.  Elly Nurmawati  M.M.','elly','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',3,4),(4,'195807271981031004','Suryadi S  S.H.','suryadi','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',4,4),(5,'197911262002121006','Imam Setia Harnomo SST, M.Stat','imam','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',5,4),(6,'196509051992031004','Muhammad Yani SE','yani','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',6,4),(7,'198104212003122001','Rika Kartini S.ST','rika','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',7,4),(8,'196703151994011001','Ir. Triyanto Widiarso MMA.','dimas','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',8,4),(9,'198310072006022002','Retno Pertiwi SST.,M.Si','retno','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',9,4),(10,'197506241994031001','M. Yun Imran SE','yun','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',10,4),(11,'196705291994012001','Parmiatun SE','bunda','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',11,4),(12,'196003161979121001','Abdul Kadir SE','kadir','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',12,4),(13,'198307072007012012','Fitri Wahyu Yuliasih SST','fitri','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','cVzqaAPaAUZ9VmLMq73or8aIfOwDZyoIp4412W718w9REfpdJAVnWehbw6BM',13,4),(14,'197206121994122001','Sri Suyatmi S.Si, M.Si','sri','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',14,4),(15,'197608171999011001','Agus Hartanto, SE, M.Eng M.Sc','agus','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',15,4),(16,'196611111994012001','Tri Setiani SE, M.M.','tri','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',16,4),(17,'197604091999011001','Hakim Azizi S.ST','hakim','hakim@bps.go.id','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','yFqVPJg7YGw5yqinxOksFzB6cDO9irmKMU1GtOc8VlvhtKejnCkSKZ7m6R8x',17,4),(18,'196005121981031002','Syarif Busri S.E.','busri','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','wNlE9EEK8w8qFsoQyLj5YWME2ytA2bfK2NvWUDI2X5HaqV5NMARJpeEW1f54',18,4),(19,'197612121999032001','Heny Sucihati S.ST','heny','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',19,4),(20,'196509101994021001','Ir. Jamaludin ?MM','jamaludin','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',20,3),(21,'196309041991031002','Duaksa Aritonang SE, MM','duaksa','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','F9hY3ovkJfArfP0xgnoEnfD3lLVAZsrs6nT7SySniPC8Zv7eVshlhVqTpUmm',21,3),(22,'196703211992032002','Sari Mariani SE','mariani','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',22,3),(23,'195804261983021001','Edi Rahman Asmara S.Si, M.M','edi','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',23,3),(24,'196603041992032001','Ir. Martalena M.M.','martalena','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','',24,3),(25,'197101211993121002','Sudiyanto S.Si., MM','sudiyanto','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','CfBRw3clljzEZdYyxq7qytp89HFbnpONo9dLPqZX9jYoeZon76MSSYzcSyUf',25,3),(26,'196405111992031003','Ir. Pitono MAP','pitono','','$2y$13$oHI.v9Uu1x6bW1uF8uY5cukGK3/Pwk506jpfRyYLduOny6Jrq/b.y','XXRxRqq1WfEMH5MY5PtfENMgV3n0ugYaEaUMihhzypkJLtM6yA75Gok4H6dB',26,2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-28 16:01:17
