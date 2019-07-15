/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.7.21 : Database - db_fotografi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_fotografi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_fotografi`;

/*Table structure for table `juri_lomba` */

DROP TABLE IF EXISTS `juri_lomba`;

CREATE TABLE `juri_lomba` (
  `id_jurilomba` int(11) NOT NULL AUTO_INCREMENT,
  `id_lomba` int(11) NOT NULL,
  `id_juri` int(11) NOT NULL,
  PRIMARY KEY (`id_jurilomba`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `juri_lomba` */

insert  into `juri_lomba`(`id_jurilomba`,`id_lomba`,`id_juri`) values 
(10,1,2),
(11,2,4),
(9,1,4),
(12,2,3),
(13,2,2);

/*Table structure for table `lomba` */

DROP TABLE IF EXISTS `lomba`;

CREATE TABLE `lomba` (
  `id_lomba` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `foto` tinytext,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `biaya_lomba` bigint(20) DEFAULT NULL,
  `status_lomba` enum('Draft','Posting') DEFAULT NULL,
  PRIMARY KEY (`id_lomba`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `lomba` */

insert  into `lomba`(`id_lomba`,`judul`,`deskripsi`,`foto`,`tgl_daftar`,`tgl_mulai`,`tgl_selesai`,`biaya_lomba`,`status_lomba`) values 
(1,'TEsting','deskripsi',NULL,'2019-05-27','2019-05-29','2019-05-31',50000,'Draft'),
(2,'Lomba fotografi pantai siung','<p>perlombaan fotografi pantai siung<br></p>','0107201915564115-fotor.jpg','2019-07-01','2019-07-07','2019-07-14',50000,'Posting'),
(3,'coba','<p>asdad<br></p>','01072019161340civic.jpg','1970-01-01','1970-01-01','1970-01-01',10000,'Draft');

/*Table structure for table `lomba_detail` */

DROP TABLE IF EXISTS `lomba_detail`;

CREATE TABLE `lomba_detail` (
  `id_lombadetail` int(11) NOT NULL AUTO_INCREMENT,
  `id_lomba` int(11) DEFAULT NULL,
  `id_peserta` int(11) DEFAULT NULL,
  `foto_lomba` varchar(255) DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `id_status` tinyint(6) DEFAULT NULL,
  `nilai_lomba` decimal(3,2) DEFAULT NULL,
  `deskripsi_nilai` text,
  `tgl_nilai` datetime DEFAULT NULL,
  `id_juri` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_lombadetail`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `lomba_detail` */

insert  into `lomba_detail`(`id_lombadetail`,`id_lomba`,`id_peserta`,`foto_lomba`,`tgl_upload`,`id_status`,`nilai_lomba`,`deskripsi_nilai`,`tgl_nilai`,`id_juri`) values 
(1,2,5,NULL,NULL,3,NULL,NULL,NULL,NULL);

/*Table structure for table `status_lomba` */

DROP TABLE IF EXISTS `status_lomba`;

CREATE TABLE `status_lomba` (
  `id_status` tinyint(6) NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `status_lomba` */

insert  into `status_lomba`(`id_status`,`nama_status`) values 
(1,'Pendaftaran'),
(2,'Upload Bukti Pembayaran'),
(3,'Terdaftar (Sudah membayar)');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` enum('admin','juri','peserta') NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`kategori`,`nama`,`email`,`password`,`tanggal_lahir`,`alamat`,`no_hp`,`foto_profil`) values 
(1,'juri','Abot','abot2@gmail.com','1a1dc91c907325c69271ddf0c944bc72','2009-03-03','jogja 2','0992388237744',NULL),
(2,'juri','Hendry','hendry@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','1996-04-04','Jogja','085682377236523',NULL),
(3,'juri','Anton','anton@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','1996-04-04','Jogja','085623882366',NULL),
(4,'juri','Idul','idul@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','1996-04-04','Jogja','0992388237723',NULL),
(5,'peserta','Joni','joni@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','2019-07-01','jogja','0239887723',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
