-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 06:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak-vaname`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_gejala`
--

CREATE TABLE `daftar_gejala` (
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_gejala`
--

INSERT INTO `daftar_gejala` (`kode_gejala`, `nama_gejala`, `mb`, `md`) VALUES
('g001', 'Berenang di permukaan', 0.5, 0.1),
('g002', 'Mati di tanggul', 0.9, 0.1),
('g003', 'Bintik putih di cangkang', 0.9, 0.1),
('g004', 'Terdapat bintik hitam di badan udang', 0.9, 0.1),
('g005', 'Antena udang patah', 0.5, 0.1),
('g006', 'Kaki udang tidak lengkap', 0.5, 0.1),
('g007', 'Terdapat kotoran di pojok tambak', 0.9, 0.1),
('g008', 'Nafsu makan udang menurun', 0.9, 0.1),
('g009', 'Insang udang berwarna merah', 0.9, 0.1),
('g010', 'Ekor udang mengalami kerusakan', 0.9, 0.1),
('g011', 'Ekor udang berwarna hitam', 0.5, 0.1),
('g012', 'Tubuh udang berwarna cokelat', 0.9, 0.1),
('g013', 'Karapas udang rontok', 0.9, 0.1),
('g014', 'Tubuh udang berwarna pucat', 0.9, 0.1),
('g015', 'Insang udang berwarna kekuningan', 0.9, 0.1),
('g016', 'Insang kekuningan', 0.5, 0.1),
('g017', 'Ekor berwarna merah', 0.9, 0.1),
('g018', 'Kulit udang lunak', 0.9, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_penyakit`
--

CREATE TABLE `daftar_penyakit` (
  `kode_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL,
  `deskripsi` varchar(400) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_penyakit`
--

INSERT INTO `daftar_penyakit` (`kode_penyakit`, `nama_penyakit`, `deskripsi`, `solusi`) VALUES
('p01', 'Bintik Putih', 'Penyakit ini disebabkan oleh infeksi virus SEMBV (Systemic Ectodermal Mesodermal Baculo Virus). Saat terserang virus ini maka bisa dipastikan panen udang bakal batal. Sebab virus ini menyerang dengan sangat cepat dalam beberapa jam saja seluruh populasi udang bisa mati.', 'Upaya pencegahan yang dapat dilakukan terhadap penyakit ini adalah dengan melakukan tindakan mengisolasi daerah yang sedang terserang penyakit serta pemusnahan dengan jalan pembakaran dan penguburan terhadap udang yang terindikasi terserang penyakit agar penyakit tidak menyebar luas. Kemudian melakukan upaya penanggulangan agar udang yang masih sehat terhindar dari serangan penyakit bintik putih, yaitu dengan cara mengganti air secara rutin setiap hari minimal 5% dari total volume air tambak.\r\n'),
('p02', 'Bintik Hitam', 'Disebabkan oleh virus Monodon Baculo Virus (MBV). Tanda yang nampak yaitu terdapat bintik-bintik hitam di cangkang dan biasanya diikuti dengan infeksi bakteri, sehingga gejala lain yang tampak yaitu adanya kerusakan alat tubuh udang.', 'Pencegahan pada penyakit ini dapat dilakukan dengan membersihkan dasar tambak dari kotoran sisa pakan dan sisa moulting selanjutnya menjaga  kualitas air.\r\n'),
('p03', 'Kotoran Putih', 'Disebabkan oleh tingginya konsentrasi kotoran dan gas amoniak dalam tambak. Gejala : mudah dilihat, yaitu adanya kotoran putih di daerah pojok tambak (sesuai arah angin), juga diikuti dengan penurunan nafsu makan sehingga dalam waktu yang lama dapat menyebabkan kematian.', 'Cara pencegahan yang dapat dilakukan yaitu dengan membersihkan dan mengeluarkan kotoran yang berada di tambak baik di permukaan dan di dasar tambak kemudian dilakukan pembersihan secara rutin serta menjaga kualitas air tambak.\r\n'),
('p04', 'Insang Merah', 'Ditandai dengan terbentuknya warna merah pada insang. Disebabkan tingginya keasaman air tambak, sehingga cara mengatasinya dengan penebaran kapur pada kolam budidaya. Pengolahan lahan juga harus ditingkatkan kualitasnya.', 'Pencegahan yang dapat dilakukan yaitu dengan melakukan penebaran kapur pada kolam budidaya.\r\n'),
('p05', 'Nekrosis', 'Disebabkan oleh tingginya konsentrasi bakteri dalam air tambak. Gejala yang nampak yaitu adanya kerusakan/luka yang berwarna hitam pada alat tubuh, terutama pada ekor. Cara mengatasinya adalah dengan penggantian air sebanyak-banyaknya ditambah perlakuan TON 1-2 botol/ha, sedangkan pada udang dirangsang untuk segera melakukan ganti kulit (Molting) dengan pemberian saponen atau dengan pengapuran.', 'Pencegahan dapat dilakukan dengan penggantian air sebanyak-banyaknya ditambah perlakuan TON (Tambak Organik Natural) 1-2 botol/ha, sedangkan pada udang dirangsang untuk segera melakukan ganti kulit (moulting) dengan pemberian kapur pada tambak.'),
('p06', 'Udang Gripis', 'Bagian ekornya mengalami kerusakan dengan tingkat kerusakan bervariasi yaitu mulai dari kerusakan ringan (ekor udang hanya rusak sedikit) sampai pada tingkat parah (udang hampir tidak memiliki ekor. Disebabkan oleh : Kanibalisme, kualitas air yang jelek, dasar tambak yang kotor.', 'Pencegahan pada penyakit ini dapat dilakukan dengan cara memberikan antibiotika melalui pencampuran dengan telur ayam atau telur bebek mentah dengan perbandingan 1 butir telur untuk 10 kg pakan. Campuran telur dan antibiotika diaduk dengan pakan dan dikeringkan ditempat yang teduh lalu ditebar ke dalam tambak. Dosis yang digunakan untuk penggunaan antibiotika adalah Terramycin 30 mg/kg pakan, Erythromycin 40 mg/kg pakan, Oxytetracyclin 40-50 mg/kg pakan, Furanace 100 mg/kg akan.Pemberian antibiotika dalam pakan dilakukan terus-menerus selama 3 hingga 5 hari, kecuali untuk furanace diberikan selama 14 hari.\r\n'),
('p07', 'Kepala Kuning', 'Setelah menunjukkan tanda-tanda awal, dalam rentan waktu 3 sampai 5 hari gejala akan semakin bertambah, dan penyakit ini mulai menampakkan jati dirinya. Gejala-gejala susulan tersebut berupa tubuh dan insang udang akan memucat, serta munculnya warna kuning kecokelatan pada bagian kepala udang.', 'Upaya pencegahan yang dapat dilakukan terhadap penyakit ini adalah dengan melakukan tindakan mengisolasi daerah yang sedang terserang penyakit serta pemusnahan dengan jalan pembakaran dan penguburan terhadap udang yang terindikasi terserang penyakit agar penyakit tidak menyebar luas. Kemudian melakukan upaya penanggulangan agar udang yang masih sehat terhindar dari serangan penyakit bintik putih, yaitu dengan cara mengganti air secara rutin setiap hari minimal 5% dari total volume air tambak.\r\n'),
('p08', 'Taura Syndrome Virus', 'Biasanya terdapat bercak hitam pada bagian tubuh yang mengalami perubahan warna dan udang akan mengalami kematian. Seluruh permukaan tubuh berwarna kemerahan terutama bagian kipas ekor. Saluran pencernaan kosong. Kulit udang menjadi lembek dan mati saat terjadi molting.', 'Upaya pencegahan yang dapat dilakukan yaitu dengan menjaga kualitas air dengan memberikan probiotik, jangan lakukan sirkulasi pergantian air, mengurangi pakan hingga 50%, pemberian mineral dolomite untuk mempercepat pengerasan kulit, serta pemberian vitamin dan imunostimulan.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pertanyaan`
--

CREATE TABLE `daftar_pertanyaan` (
  `id` int(3) NOT NULL,
  `pertanyaan` text NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `route` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pertanyaan`
--

INSERT INTO `daftar_pertanyaan` (`id`, `pertanyaan`, `kode_gejala`, `route`) VALUES
(1, 'udang berenang di permukaan', 'g001', 0),
(2, 'udang mati di tanggul', 'g002', 0),
(3, 'terdapat	bintik putih di cangkang', 'g003', 0),
(4, 'terdapat bintik hitam di badan', 'g004', 0),
(5, 'antena udang patah', 'g005', 0),
(6, 'kaki udang tidak lengkap', 'g006', 0),
(7, 'terdapat kotoran di pojok tambak', 'g007', 0),
(8, 'nafsu makan udang menurun', 'g008', 0),
(9, 'insang udang berwarna merah', 'g009', 0),
(10, 'ekor udang rusak', 'g010', 0),
(11, 'ekor udang berwarna hitam', 'g011', 0),
(12, 'tubuh udang berwarna cokelat', 'g012', 0),
(13, 'karapas udang  rontoh ', 'g013', 0),
(14, 'tubuh udang berwarna pucat', 'g014', 0),
(15, 'insang udang berwarna kekuningan', 'g015', 0),
(16, 'nafsu makan berhenti (udang tidak mau makan)', 'g016', 0),
(17, 'ekor udang berwarna merah', 'g018', 0),
(18, 'cangkang udang lunak', 'g019', 0);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_solusi`
--

CREATE TABLE `daftar_solusi` (
  `id_penyakit` varchar(10) NOT NULL,
  `id_solusi` varchar(10) NOT NULL,
  `solusi_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_user`
--

CREATE TABLE `daftar_user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(2) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_user`
--

INSERT INTO `daftar_user` (`id`, `username`, `password`, `level`, `keterangan`) VALUES
(11, 'hendra', '$2y$10$sb0kVvRtKeiMQJxH9AsTQ.ounD5VnQUvv0l8H4mXVD7LAac7mJwDW', '1', ''),
(12, 'pakar', '$2y$10$r9zKMqwFRUZbcqBzwTuScOnPJDbXR4i.JKQmVoPGkoMs0eexnQtYa', '2', 'akun pakar');

-- --------------------------------------------------------

--
-- Table structure for table `gejalapenyakit`
--

CREATE TABLE `gejalapenyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(10) NOT NULL,
  `kode_gejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejalapenyakit`
--

INSERT INTO `gejalapenyakit` (`id`, `kode_penyakit`, `kode_gejala`) VALUES
(1, 'p01', 'g001'),
(2, 'p01', 'g002'),
(3, 'p01', 'g003'),
(4, 'p02', 'g007'),
(5, 'p02', 'g008'),
(6, 'p02', 'g009'),
(7, 'p02', 'g005'),
(8, 'p03', 'g010'),
(9, 'p03', 'g011'),
(10, 'p04', 'g001'),
(11, 'p04', 'g004'),
(12, 'p05', 'g008'),
(13, 'p05', 'g009'),
(14, 'p05', 'g006'),
(15, 'p05', 'g005'),
(16, 'p06', 'g013'),
(17, 'p06', 'g014'),
(18, 'p06', 'g012'),
(19, 'p07', 'g015'),
(20, 'p07', 'g016'),
(21, 'p07', 'g012'),
(22, 'p08', 'g017'),
(23, 'p08', 'g018');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsul`
--

CREATE TABLE `hasil_konsul` (
  `id` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_gejala` varchar(30) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` int(1) NOT NULL,
  `waktu_konsul` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_gejala`
--
ALTER TABLE `daftar_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `daftar_penyakit`
--
ALTER TABLE `daftar_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `daftar_pertanyaan`
--
ALTER TABLE `daftar_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_solusi`
--
ALTER TABLE `daftar_solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejalapenyakit`
--
ALTER TABLE `gejalapenyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_konsul`
--
ALTER TABLE `hasil_konsul`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pertanyaan`
--
ALTER TABLE `daftar_pertanyaan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gejalapenyakit`
--
ALTER TABLE `gejalapenyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hasil_konsul`
--
ALTER TABLE `hasil_konsul`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
