/*
SQLyog Ultimate v12.4.3 (32 bit)
MySQL - 5.5.24-log : Database - masjid1600005
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`masjid1600005` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `masjid1600005`;

/*Table structure for table `donatur` */

DROP TABLE IF EXISTS `donatur`;

CREATE TABLE `donatur` (
  `kd_donatur` char(7) NOT NULL,
  `nama_donatur` varchar(30) DEFAULT NULL,
  `jeniskelamin` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` char(20) DEFAULT NULL,
  PRIMARY KEY (`kd_donatur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `donatur` */

insert  into `donatur`(`kd_donatur`,`nama_donatur`,`jeniskelamin`,`alamat`,`nohp`) values 
('-','-','-','-','-'),
('D-001','Mega','Perempuan','Padang','087896767677'),
('D-002','Gita','Perempuan','Batusangkar','082345434534'),
('D-003','Rahmi','Perempuan','Padang','087767564545'),
('D-004','Lukman','Laki-Laki','Jakarta','082567789889');

/*Table structure for table `jadwalceramah` */

DROP TABLE IF EXISTS `jadwalceramah`;

CREATE TABLE `jadwalceramah` (
  `kd_jadwal` varchar(7) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `hari` varchar(40) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `penceramah` varchar(40) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jadwalceramah` */

insert  into `jadwalceramah`(`kd_jadwal`,`tanggal`,`hari`,`judul`,`penceramah`,`ket`) values 
('JC-001','2019-05-30','Selasa','Indahnya Islam','K-003','Bada Maghrib'),
('JC-002','2019-06-01','Selasa','DDDuuu','K-001','Setelah Ashar');

/*Table structure for table `jeniskas` */

DROP TABLE IF EXISTS `jeniskas`;

CREATE TABLE `jeniskas` (
  `kd_jeniskas` varchar(7) NOT NULL,
  `jeniskas` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_jeniskas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jeniskas` */

insert  into `jeniskas`(`kd_jeniskas`,`jeniskas`,`jumlah`) values 
('K-001','Masjid',1000000),
('K-002','Anak Yatim',1000100),
('K-003','TPA',1000000),
('K-004','Pesantren',2000000);

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `kd_kegiatan` char(7) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ketua` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` longtext,
  PRIMARY KEY (`kd_kegiatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`kd_kegiatan`,`nama`,`ketua`,`tanggal`,`keterangan`) values 
('K-001','Isra dan Miraj','HAKIM','2019-05-20','PROSES'),
('K-002','MAULID NABI','IMAM','2019-05-20','PROSES');

/*Table structure for table `keuangan` */

DROP TABLE IF EXISTS `keuangan`;

CREATE TABLE `keuangan` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `idkas` varchar(7) DEFAULT NULL,
  `uraian` varchar(50) DEFAULT NULL,
  `uangmasuk` double DEFAULT NULL,
  `uangkeluar` double DEFAULT NULL,
  `jumlahh` double DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `keuangan` */

insert  into `keuangan`(`kode`,`tanggal`,`idkas`,`uraian`,`uangmasuk`,`uangkeluar`,`jumlahh`) values 
(1,'2019-06-27','K-001','100000',0,0,1000000),
(2,'2019-06-27','K-002','500',0,0,1000000),
(3,'2019-06-27','K-001','500',0,0,1000000),
(4,'2019-06-27','K-001','500',0,0,1000000),
(5,'1970-01-01','K-001','100000',0,0,1000000),
(6,'1970-01-01','K-002','eeee',100,0,1000100);

/*Table structure for table `penceramah` */

DROP TABLE IF EXISTS `penceramah`;

CREATE TABLE `penceramah` (
  `kd_penceramah` char(7) NOT NULL,
  `nama_penceramah` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` char(20) DEFAULT NULL,
  PRIMARY KEY (`kd_penceramah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `penceramah` */

insert  into `penceramah`(`kd_penceramah`,`nama_penceramah`,`alamat`,`nohp`) values 
('K-001','Ust. Abdul Somad Lc.Mc','Pekanbaru','2147483647'),
('K-002','Ust. Doddy','Lubuk Basung','08975434444'),
('K-003','Irwanto','Padang','19010839811');

/*Table structure for table `pengurus` */

DROP TABLE IF EXISTS `pengurus`;

CREATE TABLE `pengurus` (
  `kd_pengurus` char(7) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` char(20) DEFAULT NULL,
  PRIMARY KEY (`kd_pengurus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengurus` */

insert  into `pengurus`(`kd_pengurus`,`nama`,`jabatan`,`alamat`,`nohp`) values 
('K-001','ISMAIL M','KETUA','LUBUK BASUNG','082567878999'),
('K-002','MAIZIR','SEKRETARIS','LUBUK BASUNG','081328292919'),
('K-003','LUKMAN','BENDAHARA','LUBUK BASUNG','082391818121'),
('K-004','LINDA','WAKIL KETUA','LUBUK BASUNG','081328292919'),
('K-005','DODI','KETUA SEKSI DAKWAH','LUBUK BASUNG','082391818121');

/*Table structure for table `tempkeluar` */

DROP TABLE IF EXISTS `tempkeluar`;

CREATE TABLE `tempkeluar` (
  `idkaskeluar` varchar(7) DEFAULT NULL,
  `uraian` varchar(60) DEFAULT NULL,
  `jumlahkeluar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tempkeluar` */

/*Table structure for table `tempmasuk` */

DROP TABLE IF EXISTS `tempmasuk`;

CREATE TABLE `tempmasuk` (
  `idkasmasuk` varchar(7) NOT NULL,
  `uraian` varchar(30) DEFAULT NULL,
  `jumlahmasuk` int(11) DEFAULT NULL,
  KEY `idkasmasuk` (`idkasmasuk`),
  CONSTRAINT `tempmasuk_ibfk_1` FOREIGN KEY (`idkasmasuk`) REFERENCES `jeniskas` (`kd_jeniskas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tempmasuk` */

/*Table structure for table `uangkeluar` */

DROP TABLE IF EXISTS `uangkeluar`;

CREATE TABLE `uangkeluar` (
  `kd_ukeluar` int(11) NOT NULL AUTO_INCREMENT,
  `kaskeluar` varchar(7) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `uraian` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`kd_ukeluar`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `uangkeluar` */

/*Table structure for table `uangmasuk` */

DROP TABLE IF EXISTS `uangmasuk`;

CREATE TABLE `uangmasuk` (
  `kd_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `kasmasuk` varchar(7) DEFAULT NULL,
  `tgl_uangmasuk` date DEFAULT NULL,
  `donatur` varchar(7) DEFAULT NULL,
  `jumlahmasuk` int(11) NOT NULL,
  `uraian` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`kd_masuk`),
  KEY `donatur` (`donatur`),
  CONSTRAINT `uangmasuk_ibfk_1` FOREIGN KEY (`donatur`) REFERENCES `donatur` (`kd_donatur`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `uangmasuk` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` char(7) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `hakakses` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`iduser`,`nama`,`pass`,`hakakses`) values 
('1','mega','698d51a19d8a121ce581499d7b701668','superadmin'),
('2','ami','698d51a19d8a121ce581499d7b701668','Bendahara'),
('3','Gita','698d51a19d8a121ce581499d7b701668','Sekretaris'),
('4','Via','698d51a19d8a121ce581499d7b701668','Ketua');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
