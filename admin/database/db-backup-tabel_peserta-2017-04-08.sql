
/*---------------------------------------------------------------
  SQL DB BACKUP 08.04.2017 17:19 
  HOST: localhost
  DATABASE: project_blk
  TABLES: peserta
  Backup By: Betta Dev Indonesia
  ---------------------------------------------------------------*/

/*---------------------------------------------------------------
  TABLE: `peserta`
  ---------------------------------------------------------------*/
SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `peserta`;
DROP TABLE IF EXISTS `peserta`;
SET FOREIGN_KEY_CHECKS=1;
CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `id_kejuruan` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `ttl` text NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `id_agama` int(11) NOT NULL,
  `skawin` enum('Menikah','Belum') NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `p_kursus` text,
  `p_kerja` text,
  `nama_ortu` varchar(50) NOT NULL,
  `pk_ortu` varchar(30) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `ijazah` varchar(450) NOT NULL,
  `ktp` varchar(450) NOT NULL,
  `tanggalDaftar` date NOT NULL,
  `status_peserta` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_peserta`),
  KEY `id_kejuruan` (`id_kejuruan`),
  KEY `id_agama` (`id_agama`),
  KEY `id_pendidikan` (`id_pendidikan`),
  CONSTRAINT `peserta_ibfk_2` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `peserta_ibfk_3` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `peserta_ibfk_4` FOREIGN KEY (`id_kejuruan`) REFERENCES `kejuruan` (`id_kejuruan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
INSERT INTO `peserta` VALUES   ('33','Bejo','7','1995','magelang, 04/23/2017','wanita','1','Belum','13','salaman','085643538877','','','sumarmo','swasta','Magelang','http://localhost/project_blk/v.1.0.3/libs/ijazah/ijazah-user-08-04-2017-07-bejo.png','http://localhost/project_blk/v.1.0.3/libs/ktp/ktp-user-08-04-2017-07-bejo.png','2017-04-08','1');
