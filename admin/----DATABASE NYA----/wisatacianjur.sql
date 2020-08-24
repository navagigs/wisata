/*
 Navicat Premium Data Transfer

 Source Server         : database_macbook
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : wisatacianjur

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 24/08/2020 20:50:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_galeri
-- ----------------------------
DROP TABLE IF EXISTS `tb_galeri`;
CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `Id_Wisata` int(11) DEFAULT NULL,
  `Id_Wisatawan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_galeri
-- ----------------------------
BEGIN;
INSERT INTO `tb_galeri` VALUES (11, 'worldwide-location.png', NULL, 8, 1);
INSERT INTO `tb_galeri` VALUES (12, 'WhatsApp Image 2020-08-08 at 19.30.22.jpeg', NULL, 7, 1);
INSERT INTO `tb_galeri` VALUES (13, 'WhatsApp Image 2020-08-08 at 19.30.22.jpeg', NULL, 7, 1);
INSERT INTO `tb_galeri` VALUES (14, 'WhatsApp Image 2020-08-08 at 19.30.22.jpeg', NULL, 7, 1);
COMMIT;

-- ----------------------------
-- Table structure for tb_infowisata
-- ----------------------------
DROP TABLE IF EXISTS `tb_infowisata`;
CREATE TABLE `tb_infowisata` (
  `Id_Wisata` int(10) NOT NULL AUTO_INCREMENT,
  `wisata` varchar(100) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL,
  `bdg` varchar(255) NOT NULL,
  `bogor` varchar(255) NOT NULL,
  `sukabumi` varchar(255) NOT NULL,
  `Nama_Penginapan` varchar(100) NOT NULL,
  `Nama_Kuliner` varchar(100) NOT NULL,
  `Nama_Budaya` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `ulasan` varchar(500) NOT NULL,
  PRIMARY KEY (`Id_Wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_infowisata
-- ----------------------------
BEGIN;
INSERT INTO `tb_infowisata` VALUES (1, 'Kebun Raya Cibodas', 'Jl. Kebun Raya Cibodas, Sindangjaya, Kec. Cipanas, Kabupaten Cianjur', 'Kebun raya cibodas termasuk kategori Botanical Garden karena mempunyai berbagai macam koleksi pepohonan. Sampai saat ini sudah tercatat 5831 sample tanaman dari 1206 jenis hidup baik pepohonan tua maupun muda', 'Dari bandung naik bis jurusan Cianjur-Sukabumi sampe terminal Rawabango &ndash; dari terminal naik angkot merah atau hijau sampe Ramayana- dari Ramayana naik angkot biru sampe pasar Cipanas &ndash; dari pasar naik angkot kuning', 'Dari bogor baranangsiang sampe ciawi naik angkot 01 yang warna hijau &ndash; dari ciawi naik bis (marita, doa ibu, atau karunia bakti) sampe ke perempatan cibodas &ndash; dari perempatan naik angkot kuning. ', 'Dari Sukabumi naik bis sampe Rancagoong &ndash; dari Rancagoong naik bis marita turun diperempatan cibodas &ndash; dari perempatan naik angkot kuning', 'Mon Bel Hotel', 'Goreng Bayam', 'Seni Maenpo', 'images (30).jpeg', 'IMG-20200118-WA0013.jpg', 'images (27).jpeg', 'budaya-pencak-silat.jpg', 107.008, -6.74105, '');
INSERT INTO `tb_infowisata` VALUES (2, 'Taman Bunga Nusantara', 'Jl MariwatiKM 7, Desa Kawungluwuk, Kecamatan Sukaresmi, Kabupaten Cianjur', 'Taman Bunga Nusantara adalah taman bunga terbesar yang ada di Jawa Barat, bahkan mungkin Indonesia. Taman ini dibangun diatas lahan seluas 35 hektar yang dibagi menjadi beberapa bagian taman.', 'Dari bandung naik bis jurusan Cianjur-Sukabumi sampe terminal Rawabango &ndash; dari terminal naik angkot merah atau hijau sampe Ramayana- dari Ramayana naik angkot biru sampe pasar Cipanas &ndash; dari pasar naik angkot warna kuning ungu jurusan simpang ', 'Dari bogor baranangsiang sampe ciawi naik angkot 01 yang warna hijau &ndash; dari ciawi naik bis (marita, doa ibu, atau karunia bakti) sampe pasar Cipanas &ndash; dari pasar naik angkot warna kuning ungu jurusan simpang mariwati', 'Dari Sukabumi naik bis sampe Rancagoong &ndash; dari Rancagoong naik bis marita turun di pasar Cipanas&ndash; dari pasar naik angkot warna kuning ungu jurusan simpang mariwati. ', 'Wisma Saung Nini', 'Sate Maranggi', 'Tari Pelung Manggung', 'images (29).jpeg', 'saung nini.jpeg', 'maranggi.jpeg', 'images (39).jpeg', 107.079, -6.72764, '');
INSERT INTO `tb_infowisata` VALUES (3, 'Wana Wisata Cirata Jangari', 'Desa Bobojong, Kecamatan Mande, Kabupaten Cianjur', 'Objek Wana Wisata Cirata Jangari di Mande Cianjur Jawa Barat memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat disayangkan jika anda berada di Kota Cianjur tidak mengunjungi wisata alam yang mempunyai keindahan yang tiada duanya tersebut.', 'Dari Bandung naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango &ndash; Dari terminal naik angkot warna biru muda jurusan Jangari', 'Dari Bogor naik bis jurusan Cianjur-KP.Rambutan sampai ke Panembong &ndash; Dari Panembong naik angkot warna merah sampai Ramayana  &ndash; Dari Ramayana naik angkot warna biru muda jurusan Jangari', 'Dari Sukabumi naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango &ndash; Dari terminal naik angkot warna biru muda jurusan Jangari', 'Hotel Emilie', 'ikan nila, dan ikan bawal', 'Ngarak Posong', 'images (35).jpeg', 'hotel emilie.jpeg', 'images (37).jpeg', 'images (38).jpeg', 107.261, -6.74365, '');
INSERT INTO `tb_infowisata` VALUES (4, 'Taman Tekno', 'Desa Mulyasari, Kecamatan Mande, Kabupaten Cianjur', 'Dengan nuansa instagramebel dilengkapi dengan spot-spot yang unik untuk berswafoto. Menjadikan UG Technopark cocok bagi kalangan milenial maupun kalangan umum.', 'Dari Bandung  naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango â€“ Dari terminal naik angkot warna biru muda jurusan Jangari sampai ke pertigaan Desa Mulyasari â€“ Dari pertigaan naik ojeg', 'Dari Bogor naik bis jurusan Cianjur-KP.Rambutan sampai ke Panembong â€“ Dari Panembong naik angkot warna merah sampai Ramayana  â€“ Dari Ramayana naik angkot warna biru muda jurusan Jangari sampai ke pertigaan Desa Mulyasari â€“ Dari pertigaan naik ojeg', 'Dari Sukabumi naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango â€“ Dari terminal naik angkot warna biru muda jurusan Jangari sampai ke pertigaan Desa Mulyasari â€“ Dari pertigaan naik ojeg', 'Penginapan New Dayang Sumbi', 'Kicimpring', 'Rengkong', 'IMG-20190917-WA0000.jpg', 'dayang sumbi.jpeg', 'kicimpring.jpeg', 'Rengkong - Budaya  04.JPG', 107.21, -6.76189, '');
INSERT INTO `tb_infowisata` VALUES (5, 'Sevillage', 'Ciloto, Kec. Cipanas, Kabupaten Cianjur', 'Wisata Alam Sevillage memiliki pemandangan yang asri serta alami, serta memiliki suasana yang menenangkan. Memang wisata alam ini sangat cocock untuk dijadikan sebagai tempat liburan bersama keluarga maupun sahabat. Di tambah lagi dengan adanya wahana-wahana dan spot foto yang dimilikinya, Wisata Alam Sevillage Cianjur ini sangatlah menggoda bagi para wisatawan yang mengunjunginya.', 'Dari bandung naik bis jurusan Cianjur-Sukabumi sampe terminal Rawabango &ndash; dari terminal naik angkot merah atau hijau sampe Ramayana- dari Ramayana naik angkot biru sampe pasar Cipanas &ndash; dari pasar naik angkot kuning pink sampe ke  puncak Cilot', 'Dari bogor baranangsiang sampe ciawi naik angkot 01 yang warna hijau &ndash; dari ciawi naik bis (marita, doa ibu, atau karunia bakti) sampe di puncak ciloto.', 'Dari Sukabumi naik bis sampe Rancagoong &ndash; dari Rancagoong naik bis marita sampe puncak Ciloto\r\n', 'Lembah Hijau', 'Sate', 'seni bedor', 'images (17).jpeg', 'lembah hijau.jpg', 'sate_buminini.jpg', '2vcwd2e.jpg', 106.999, -6.71509, '');
INSERT INTO `tb_infowisata` VALUES (7, 'taman', 'Ciloto, Kec. Cipanas, Kabupaten Cianjur', 'mmmmmmmmmm', '', '', '', '', '', '', '', '', '', '', 0, 0, '');
INSERT INTO `tb_infowisata` VALUES (8, 'kebun', 'Cipanas', 'bbb', '', '', '', '', '', '', '-6.741046', '107.008046', '20200121_130221.jpg', '', 0, 0, '');
INSERT INTO `tb_infowisata` VALUES (9, 'curug', 'Cipanas', 'curug', '', '', '', '', '', '', '2vcwd2e.jpg', '', '', '', 0, 0, '');
INSERT INTO `tb_infowisata` VALUES (10, 'curug', 'Sukaresmi', 'nnnnnnnnn', 'b', 'cd', 'd', '', '', '', '20200121_125933.jpg', '', '', '', 0, 0, '');
INSERT INTO `tb_infowisata` VALUES (12, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', '2vcwd2e.jpg', '20200121_130056.jpg', '20200121_130323.jpg', 'dayang sumbi.jpeg', 0, 0, '');
INSERT INTO `tb_infowisata` VALUES (13, 'test', 'bandung', 'ini adalah deskripsi', '0', '0', '0', '0', '0', '0', 'A 1.jpg', '', '', '', 100101, 1010010, '');
COMMIT;

-- ----------------------------
-- Table structure for tb_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `tb_kecamatan`;
CREATE TABLE `tb_kecamatan` (
  `Id_Kecamatan` int(10) NOT NULL AUTO_INCREMENT,
  `Nama_Kecamatan` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Kecamatan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kecamatan
-- ----------------------------
BEGIN;
INSERT INTO `tb_kecamatan` VALUES (1, 'Cipanas');
INSERT INTO `tb_kecamatan` VALUES (2, 'Haurwangi');
COMMIT;

-- ----------------------------
-- Table structure for tb_komentar
-- ----------------------------
DROP TABLE IF EXISTS `tb_komentar`;
CREATE TABLE `tb_komentar` (
  `id_komentar` int(10) NOT NULL AUTO_INCREMENT,
  `komentar` varchar(100) NOT NULL,
  `Id_Wisatawan` int(10) NOT NULL,
  `Id_Wisata` int(10) DEFAULT NULL,
  `Id_Galeri` int(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  PRIMARY KEY (`id_komentar`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_komentar
-- ----------------------------
BEGIN;
INSERT INTO `tb_komentar` VALUES (1, 'ok', 1, 0, NULL, '2020-08-24 20:44:28');
INSERT INTO `tb_komentar` VALUES (2, 'ok', 1, 0, NULL, '2020-08-24 20:45:33');
INSERT INTO `tb_komentar` VALUES (3, 'siap', 1, 7, NULL, '2020-08-24 20:45:38');
INSERT INTO `tb_komentar` VALUES (4, 'siap', 1, 7, NULL, '2020-08-24 20:46:37');
INSERT INTO `tb_komentar` VALUES (5, 'wwlwll', 1, 7, NULL, '2020-08-24 20:46:43');
INSERT INTO `tb_komentar` VALUES (6, 'wwlwll', 1, 7, 14, '2020-08-24 20:47:27');
INSERT INTO `tb_komentar` VALUES (7, 'hahaa', 1, 7, 14, '2020-08-24 20:47:34');
INSERT INTO `tb_komentar` VALUES (8, 'hahaa', 1, 7, 14, '2020-08-24 20:47:47');
INSERT INTO `tb_komentar` VALUES (9, 'hahaa', 1, 7, 14, '2020-08-24 20:47:56');
INSERT INTO `tb_komentar` VALUES (10, 'dmn', 1, 8, 11, '2020-08-24 20:48:23');
INSERT INTO `tb_komentar` VALUES (11, 'ini apa', 1, 7, 13, '2020-08-24 20:49:45');
COMMIT;

-- ----------------------------
-- Table structure for tb_pengguna
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengguna`;
CREATE TABLE `tb_pengguna` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_pengguna
-- ----------------------------
BEGIN;
INSERT INTO `tb_pengguna` VALUES (1, 'admin', '21232f297a', 'Xxx');
INSERT INTO `tb_pengguna` VALUES (18, 'dom', '71f50dec67', 'kahfi');
INSERT INTO `tb_pengguna` VALUES (19, 'kintan', '12345', 'kimei');
INSERT INTO `tb_pengguna` VALUES (27, 'kimei', 'kimei', 'meita');
COMMIT;

-- ----------------------------
-- Table structure for tb_staff
-- ----------------------------
DROP TABLE IF EXISTS `tb_staff`;
CREATE TABLE `tb_staff` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Nama_Staff` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_staff
-- ----------------------------
BEGIN;
INSERT INTO `tb_staff` VALUES (1, 'staff', '12345', 'Kintan Meitasari');
INSERT INTO `tb_staff` VALUES (2, 'staff2', '12345', 'Sarah Nabila');
INSERT INTO `tb_staff` VALUES (3, 'Staff3', '12345', 'Mala Nursilah Sifa Pamungkas');
COMMIT;

-- ----------------------------
-- Table structure for tb_ulasan
-- ----------------------------
DROP TABLE IF EXISTS `tb_ulasan`;
CREATE TABLE `tb_ulasan` (
  `id_ulasan` int(10) NOT NULL AUTO_INCREMENT,
  `ulasan` varchar(100) NOT NULL,
  `Id_Wisatawan` int(10) NOT NULL,
  `Id_Wisata` int(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ulasan`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_ulasan
-- ----------------------------
BEGIN;
INSERT INTO `tb_ulasan` VALUES (5, 'hehe', 1, 13, '2020-08-15 12:58:41');
INSERT INTO `tb_ulasan` VALUES (7, 'apa ini?', 10, 13, '2020-08-15 12:59:19');
INSERT INTO `tb_ulasan` VALUES (11, 'dmna ini?', 10, 4, '2020-08-15 13:08:27');
INSERT INTO `tb_ulasan` VALUES (12, 'ok', 10, 4, '2020-08-15 18:09:58');
INSERT INTO `tb_ulasan` VALUES (13, 'ok', 10, 4, '2020-08-15 18:10:23');
INSERT INTO `tb_ulasan` VALUES (14, 'bagus', 10, 4, '2020-08-15 18:10:30');
INSERT INTO `tb_ulasan` VALUES (16, '', 12, 12, '2020-08-15 18:13:12');
INSERT INTO `tb_ulasan` VALUES (17, '', 12, 12, '2020-08-15 18:13:15');
INSERT INTO `tb_ulasan` VALUES (18, '', 12, 12, '2020-08-15 18:13:18');
INSERT INTO `tb_ulasan` VALUES (19, '', 12, 12, '2020-08-15 18:13:20');
INSERT INTO `tb_ulasan` VALUES (20, 'uwi cantik', 1, 12, '2020-08-18 21:37:40');
COMMIT;

-- ----------------------------
-- Table structure for tb_wisatawan
-- ----------------------------
DROP TABLE IF EXISTS `tb_wisatawan`;
CREATE TABLE `tb_wisatawan` (
  `Id_Wisatawan` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_Hp` varchar(13) NOT NULL,
  PRIMARY KEY (`Id_Wisatawan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_wisatawan
-- ----------------------------
BEGIN;
INSERT INTO `tb_wisatawan` VALUES (1, 'kimei', '12345', 'kintanmeitasari@gmail.com', 'kintan', 'Perempuan', '2009-04-25', 'Ciranjang', '09292');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
