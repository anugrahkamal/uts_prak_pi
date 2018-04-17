-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Apr 2018 pada 04.34
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uts_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `serial` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `synopsis` text,
  `id_books_categories` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `serial`, `title`, `author`, `synopsis`, `id_books_categories`) VALUES
(1, 'JK101', 'Jaringan Komputer : Konsep Dasar Pengembangan Jaringan & Keamanan', 'Anjik Sukmaji', 'Buku ini mengupas perihal jaringan komputer dan keamanannya dengan memberikan pemahaman dan konsep tentang sistem jaringan komputer dan komponen-komponen yang mendukungnya. Adanya konsep yang jelas dan diharapkan akan mempermudah pembaca untuk menggali gagasan dan menumbuhkan kreativitas sehingga tidak hanya sebagai penikmat teknologi. tetapi juga mampu mengembangkan teknologi khususnya jaringan komputer. Pokok bahasan ditekankan pada hal-hal yang berkaitan dengan perencanaan. perancangan. implementasi. operasionalo. dan pengelolaan manajeman jaringan komputer baik Local Area Nework maupun Wide Area Network.', 1),
(3, 'RPL101', 'REKAYASA PERANGKAT LUNAK', 'Janner Simarmata', 'Berbicara tentang rekayasa perangkat lunak (software engineering) bukanlah berbicara tentang bahasa pemrograman untuk membangun sebuah perangkat lunak. Rekayasa Perangkat Lunak atau RPL adalah suatu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak, termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak, dan sebagainya, atau sebuah profesi dari seorang perekayasa perangkat lunak yang berkaitan dengan pembuatan dan pemeliharaan aplikasi perangkat lunak dengan menerapkan teknologi dan praktik dari ilmu komputer, manajemen proyek, dan bidang-bidang lainnya.  Buku ini sangat cocok untuk Anda, para mahasiswa komputer yang sedang mengambil mata kuliah Rekayasa Perangkat Lunak, Analisis dan Perancangan Sistem, dan Manajemen Proyek, serta bagi para konsultan teknologi informasi.', 2),
(4, 'BD201', 'Basis Data - Buku Teks Ilmu Komputer Basis Data (Edisi Revisi)', 'Fathansyah', 'Buku "Basis Data " ini merupakan revisi dalam rangka penyesuaian dengan situasi terkini, setelah sekian tahun lamanya rencana revisi itu tertunda. Revisi ini sekaligus juga berbentuk penggabungan dari 2 (dua) buku sebelumnya, yaitu Basis Data dan Sistem Basis Data.  Buku ini mencoba fokus pada ketiga hal, yaitu: basis data, model data dan bagaimana membuat model data yang baik. Dalam berbagai pembahasan, niscaya kita akan melihat perancangan basis data yang baik juga senantiasa mempertimbangkan prosedur (aturan-aturan) yang berlaku di dalam sistem. Karena itu, pembahasan tentang contoh-contoh aturan yang berlaku di lapangan yang terefleksikan dalam perancangan juga banyak mewarnai isi buku ini. Sejumlah aspek lain yang relevan, seperti DBMS, aplikasi basis data dan perkembangan teknologi terbaru, juga turut dibahas.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Jaringan', 'Buku tentang jaringan komputer'),
(2, 'RPL', 'buku tentang rekayasa perangkat lunak'),
(3, 'database', 'buku tentang basis data'),
(4, 'sistem informasi', 'buku tentang sistem informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(2, 'Anugrah', 'Kamal', 'anugrah_kamal', 'anugrah_kamal@gmail.com', 'anugrah123'),
(3, 'Indah ', 'Dewi', 'indahdewi12', 'indahdewi@yahoo.com', 'indah123'),
(4, 'Rita', 'Permatasari', 'rita_permata', 'rita_permatasari@gmail.com', 'ritapermata'),
(5, 'Aldi', 'Anwarul', 'aldianwarul', 'aldi_anwarul96@gmail.com', 'aldianwarul96');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`), ADD KEY `id_books_categories` (`id_books_categories`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_books_categories`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
