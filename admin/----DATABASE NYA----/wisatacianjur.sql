-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Agu 2020 pada 04.15
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wisatacianjur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_infowisata`
--

CREATE TABLE IF NOT EXISTS `tb_infowisata` (
`Id_Wisata` int(10) NOT NULL,
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
  `ulasan` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tb_infowisata`
--

INSERT INTO `tb_infowisata` (`Id_Wisata`, `wisata`, `Alamat`, `Deskripsi`, `bdg`, `bogor`, `sukabumi`, `Nama_Penginapan`, `Nama_Kuliner`, `Nama_Budaya`, `image`, `image2`, `image3`, `image4`, `longitude`, `latitude`, `ulasan`) VALUES
(1, 'Kebun Raya Cibodas', 'Jl. Kebun Raya Cibodas, Sindangjaya, Kec. Cipanas, Kabupaten Cianjur', 'Kebun raya cibodas termasuk kategori Botanical Garden karena mempunyai berbagai macam koleksi pepohonan. Sampai saat ini sudah tercatat 5831 sample tanaman dari 1206 jenis hidup baik pepohonan tua maupun muda', 'Dari bandung naik bis jurusan Cianjur-Sukabumi sampe terminal Rawabango &ndash; dari terminal naik angkot merah atau hijau sampe Ramayana- dari Ramayana naik angkot biru sampe pasar Cipanas &ndash; dari pasar naik angkot kuning', 'Dari bogor baranangsiang sampe ciawi naik angkot 01 yang warna hijau &ndash; dari ciawi naik bis (marita, doa ibu, atau karunia bakti) sampe ke perempatan cibodas &ndash; dari perempatan naik angkot kuning. ', 'Dari Sukabumi naik bis sampe Rancagoong &ndash; dari Rancagoong naik bis marita turun diperempatan cibodas &ndash; dari perempatan naik angkot kuning', 'Mon Bel Hotel', 'Goreng Bayam', 'Seni Maenpo', 'images (30).jpeg', 'IMG-20200118-WA0013.jpg', 'images (27).jpeg', 'budaya-pencak-silat.jpg', 107.008, -6.74105, ''),
(2, 'Taman Bunga Nusantara', 'Jl MariwatiKM 7, Desa Kawungluwuk, Kecamatan Sukaresmi, Kabupaten Cianjur', 'Taman Bunga Nusantara adalah taman bunga terbesar yang ada di Jawa Barat, bahkan mungkin Indonesia. Taman ini dibangun diatas lahan seluas 35 hektar yang dibagi menjadi beberapa bagian taman.', 'Dari bandung naik bis jurusan Cianjur-Sukabumi sampe terminal Rawabango &ndash; dari terminal naik angkot merah atau hijau sampe Ramayana- dari Ramayana naik angkot biru sampe pasar Cipanas &ndash; dari pasar naik angkot warna kuning ungu jurusan simpang ', 'Dari bogor baranangsiang sampe ciawi naik angkot 01 yang warna hijau &ndash; dari ciawi naik bis (marita, doa ibu, atau karunia bakti) sampe pasar Cipanas &ndash; dari pasar naik angkot warna kuning ungu jurusan simpang mariwati', 'Dari Sukabumi naik bis sampe Rancagoong &ndash; dari Rancagoong naik bis marita turun di pasar Cipanas&ndash; dari pasar naik angkot warna kuning ungu jurusan simpang mariwati. ', 'Wisma Saung Nini', 'Sate Maranggi', 'Tari Pelung Manggung', 'images (29).jpeg', 'saung nini.jpeg', 'maranggi.jpeg', 'images (39).jpeg', 107.079, -6.72764, ''),
(3, 'Wana Wisata Cirata Jangari', 'Desa Bobojong, Kecamatan Mande, Kabupaten Cianjur', 'Objek Wana Wisata Cirata Jangari di Mande Cianjur Jawa Barat memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat disayangkan jika anda berada di Kota Cianjur tidak mengunjungi wisata alam yang mempunyai keindahan yang tiada duanya tersebut.', 'Dari Bandung naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango &ndash; Dari terminal naik angkot warna biru muda jurusan Jangari', 'Dari Bogor naik bis jurusan Cianjur-KP.Rambutan sampai ke Panembong &ndash; Dari Panembong naik angkot warna merah sampai Ramayana  &ndash; Dari Ramayana naik angkot warna biru muda jurusan Jangari', 'Dari Sukabumi naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango &ndash; Dari terminal naik angkot warna biru muda jurusan Jangari', 'Hotel Emilie', 'ikan nila, dan ikan bawal', 'Ngarak Posong', 'images (35).jpeg', 'hotel emilie.jpeg', 'images (37).jpeg', 'images (38).jpeg', 107.261, -6.74365, ''),
(4, 'Taman Tekno', 'Desa Mulyasari, Kecamatan Mande, Kabupaten Cianjur', 'Dengan nuansa instagramebel dilengkapi dengan spot-spot yang unik untuk berswafoto. Menjadikan UG Technopark cocok bagi kalangan milenial maupun kalangan umum.', 'Dari Bandung  naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango â€“ Dari terminal naik angkot warna biru muda jurusan Jangari sampai ke pertigaan Desa Mulyasari â€“ Dari pertigaan naik ojeg', 'Dari Bogor naik bis jurusan Cianjur-KP.Rambutan sampai ke Panembong â€“ Dari Panembong naik angkot warna merah sampai Ramayana  â€“ Dari Ramayana naik angkot warna biru muda jurusan Jangari sampai ke pertigaan Desa Mulyasari â€“ Dari pertigaan naik ojeg', 'Dari Sukabumi naik bis jurusan Bandung-Sukabumi sampai ke terminal Rawabango â€“ Dari terminal naik angkot warna biru muda jurusan Jangari sampai ke pertigaan Desa Mulyasari â€“ Dari pertigaan naik ojeg', 'Penginapan New Dayang Sumbi', 'Kicimpring', 'Rengkong', 'IMG-20190917-WA0000.jpg', 'dayang sumbi.jpeg', 'kicimpring.jpeg', 'Rengkong - Budaya  04.JPG', 107.21, -6.76189, ''),
(5, 'Sevillage', 'Ciloto, Kec. Cipanas, Kabupaten Cianjur', 'Wisata Alam Sevillage memiliki pemandangan yang asri serta alami, serta memiliki suasana yang menenangkan. Memang wisata alam ini sangat cocock untuk dijadikan sebagai tempat liburan bersama keluarga maupun sahabat. Di tambah lagi dengan adanya wahana-wahana dan spot foto yang dimilikinya, Wisata Alam Sevillage Cianjur ini sangatlah menggoda bagi para wisatawan yang mengunjunginya.', 'Dari bandung naik bis jurusan Cianjur-Sukabumi sampe terminal Rawabango &ndash; dari terminal naik angkot merah atau hijau sampe Ramayana- dari Ramayana naik angkot biru sampe pasar Cipanas &ndash; dari pasar naik angkot kuning pink sampe ke  puncak Cilot', 'Dari bogor baranangsiang sampe ciawi naik angkot 01 yang warna hijau &ndash; dari ciawi naik bis (marita, doa ibu, atau karunia bakti) sampe di puncak ciloto.', 'Dari Sukabumi naik bis sampe Rancagoong &ndash; dari Rancagoong naik bis marita sampe puncak Ciloto\r\n', 'Lembah Hijau', 'Sate', 'seni bedor', 'images (17).jpeg', 'lembah hijau.jpg', 'sate_buminini.jpg', '2vcwd2e.jpg', 106.999, -6.71509, ''),
(7, 'taman', 'Cipanas', 'mmmmmmmmmm', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(8, 'kebun', 'Cipanas', 'bbb', '', '', '', '', '', '', '-6.741046', '107.008046', '20200121_130221.jpg', '', 0, 0, ''),
(9, 'curug', 'Cipanas', 'curug', '', '', '', '', '', '', '2vcwd2e.jpg', '', '', '', 0, 0, ''),
(10, 'curug', 'Sukaresmi', 'nnnnnnnnn', 'b', 'cd', 'd', '', '', '', '20200121_125933.jpg', '', '', '', 0, 0, ''),
(12, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', '2vcwd2e.jpg', '20200121_130056.jpg', '20200121_130323.jpg', 'dayang sumbi.jpeg', 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE IF NOT EXISTS `tb_kecamatan` (
`Id_Kecamatan` int(10) NOT NULL,
  `Nama_Kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`Id_Kecamatan`, `Nama_Kecamatan`) VALUES
(1, 'Cipanas'),
(2, 'Haurwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
`user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`user_id`, `username`, `password`, `nama_pengguna`) VALUES
(1, 'admin', '21232f297a', 'Xxx'),
(18, 'dom', '71f50dec67', 'kahfi'),
(19, 'kintan', '12345', 'kimei'),
(27, 'kimei', 'kimei', 'meita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_staff`
--

CREATE TABLE IF NOT EXISTS `tb_staff` (
`user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Nama_Staff` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_staff`
--

INSERT INTO `tb_staff` (`user_id`, `username`, `password`, `Nama_Staff`) VALUES
(1, 'staff', '12345', 'Kintan Meitasari'),
(2, 'staff2', '12345', 'Sarah Nabila'),
(3, 'Staff3', '12345', 'Mala Nursilah Sifa Pamungkas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ulasan`
--

CREATE TABLE IF NOT EXISTS `tb_ulasan` (
`id_ulasan` int(10) NOT NULL,
  `ulasan` varchar(100) NOT NULL,
  `Id_Wisatawan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisatawan`
--

CREATE TABLE IF NOT EXISTS `tb_wisatawan` (
`Id_Wisatawan` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_Hp` varchar(13) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_wisatawan`
--

INSERT INTO `tb_wisatawan` (`Id_Wisatawan`, `Username`, `Password`, `Email`, `Nama`, `Jenis_Kelamin`, `Tanggal_Lahir`, `Alamat`, `No_Hp`) VALUES
(1, 'kimei', '12345', 'kintanmeitasari@gmail.com', 'Kintan Meitasari', 'Perempuan', '2009-04-25', 'Ciranjang', '089668665959');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_infowisata`
--
ALTER TABLE `tb_infowisata`
 ADD PRIMARY KEY (`Id_Wisata`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
 ADD PRIMARY KEY (`Id_Kecamatan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
 ADD PRIMARY KEY (`id_ulasan`);

--
-- Indexes for table `tb_wisatawan`
--
ALTER TABLE `tb_wisatawan`
 ADD PRIMARY KEY (`Id_Wisatawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_infowisata`
--
ALTER TABLE `tb_infowisata`
MODIFY `Id_Wisata` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
MODIFY `Id_Kecamatan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
MODIFY `id_ulasan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_wisatawan`
--
ALTER TABLE `tb_wisatawan`
MODIFY `Id_Wisatawan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
