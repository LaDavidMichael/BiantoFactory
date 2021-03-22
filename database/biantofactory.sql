-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 06:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biantofactory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updateOnDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updateOnDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-02-21 19:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `judul`, `deskripsi`, `gambar`) VALUES
(4, '2021-03-22', 'Tubular Heater', 'Elemen pemanas berbentuk tabung yang dibangun dari selubung tabung logam dari bahan yang dipilih untuk memenuhi aplikasi tertentu. Selubung ini, mengelilingi kumparan heliks dari nikel-krom kawat resistensi, berpusat dan ketat dipadatkan dengan insulator listrik dan media transfer panas dari magnesium oksida (MgO). Hal ini memberikan spiral resistensi yang dapat bervariasi dalam konsentrasi panas dan bagian panjang . hampir semua bentuk atau ukuran Diameter  kustom dapat dibuat atas permintaan. Biasanya menggunakan baja, stainless steel, Incoloy, Inconel atau paduan titanium, elemen tubular sering dianggap sebagai dasar dari semua elemen pemanas. Elemen-elemen pemanas memiliki selubung luar yang kuat untuk membantu melindungi pemanas dari stres fisik dan menggunakan paduan kualitas tinggi untuk memungkinkan transfer panas yang efisien dari koil resistansi terhadap media pemanas Anda.', 0x547562756c61724865617465722e6a7067),
(47, '2021-03-22', 'Nozzle Heater', 'Nozzle heater dipergunakan untuk memanaskan tabung, perbedaan nya diameter nozzle heater lebih kecil dari 50 mm.  Nozzle heater paling banyak dipergunakan untuk barrel mesin extruder dan injection plastik, pada barrel nya dipasang band heater dan pada ujung keluaran cairan platik (nozzle) di pasang nozzle heater.', 0x4e6f7a7a6c654865617465722e6a7067),
(48, '2021-03-22', 'Band Heater', 'Band Heater adalah pemanas yang biasanya digunakan untuk aplikasi pengolahan plastik dalam bentuk silinder, pada umumnya dimensi yang sering digunakan pada industri mulai dari Ø 25 sampai dengan 500 mm. Band Heater tentunya memiliki keterbatasan apabila dibandingkan dengan band heater keramik. Daya yang dihasilkan mulai dari 50 – 10.000 Watt dapat diaplikasikan pada mesin-mesin injeksi/ekstruder.', 0x42616e644865617465722e6a7067),
(49, '2021-03-22', 'Immersion Heater', '  Penggunaan pemanas celup telah lebih populer dalam beberapa dekade terakhir karena meningkatnya biaya bahan bakar memaksa individu untuk memilih cara yang lebih efisien untuk biaya pemanasan aplikasi mereka. Secara ekologis kelompok consciencious telah lama menganjurkan untuk menggunakan energi yang bersih untuk membantu menyelamatkan lingkungan. Pemanas listrik telah dikenal sebagai bentuk terbersih pemanasan tidak meninggalkan residu dan  menyediakan transfer panas langsung ke media apapun.  ', 0x496d6d657273696f6e4865617465722e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `tlpn` varchar(13) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `alamat`, `tlpn`, `email`) VALUES
(1, 'Jalan Kyai Satari II/14B, Kel. Rungkut Menanggal, Kec. Gunung Anyar, Kota Surabaya ', '081357047260', 'biantofactory@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `misi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `misi`) VALUES
(1, 'Mengkalibrasi seluruh alat - alat kerja'),
(2, 'Berinovasi dalam setiap proyek'),
(3, 'Selalu memberikan rekomendasi terhadap konsumen');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `gambar` blob NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `gambar`, `deskripsi`) VALUES
(1, 0x6c6f676f20362e706e67, ' CV. Bianto Factory merupakan pelopor Produsen Element Pemanas dan Thermocouple di salah satu Kota di Jawa Timur. Dengan lingkup pemasaran seluruh Indonesia. Perusahaan kami berdiri sejak tahun 1995, dengan alamat awal di Jalan Kyai Satari II/41 Surabaya. Pada tahun 2013 kami berpindah tempat, dikarenakan Sertifikat lahan yang masih belum kejelasannya.\r\nDalam perjalannya, CV. Bianto Factory telah mengalami sejumlah perubahan nama, dengan nama awal adalah CV. Tunggal Jaya Elektrik, dan pada tahun 2013 merubah namanya menjadi CV. Bianto Factory. ');

-- --------------------------------------------------------

--
-- Table structure for table `sosialmedia`
--

CREATE TABLE `sosialmedia` (
  `id` int(11) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosialmedia`
--

INSERT INTO `sosialmedia` (`id`, `instagram`, `facebook`, `youtube`) VALUES
(1, 'https://www.instagram.com/', 'https://id-id.facebook.com/', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` blob NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `deskripsi`, `foto`, `instagram`, `facebook`) VALUES
(8, 'Teguh', 'Manager Operasional', '\" Kamu jauh lebih kuat dari ketakutanmu \"', 0x63726577342e706e67, '', ''),
(9, 'Suyanto', 'Planning & Production Operator', '\" Nilaimu tidak berkurang berdasarkan ketidakmampuan seseorang untuk melihat nilaimu \"', 0x63726577312e706e67, '', ''),
(10, 'Suwito', 'General Mechanic', '\" Kedewasaan bukan dilihat dari usia, melainkan dengan tindakan dan tingkah laku \"', 0x63726577322e706e67, '', ''),
(15, 'Hariyo', 'Production Operator', '\" Sulit bukan berarti tidak mungkin \"', 0x63726577332e706e67, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `fotosampul` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `fotosampul`, `kota`, `provinsi`, `judul`, `deskripsi`) VALUES
(9, 'orangc.png', 'Jakarta', 'DKI Jakarta', 'Mitsubishi Motors Corporation', 'Barang bagus dan juga terpercaya'),
(11, 'orangb.png', 'Sidoarjo', 'Jawa Timur', 'PT. Avia Avian', 'Thanks CV. Avia Avian,\r\nBagus dan Awet'),
(13, 'orang.png', 'Surabaya', 'Jawa Timur', 'PT. AM Desain Corp', 'Terpercaya, mesinnya bagus, Sukses terus CV Bianto Factory, next pasti order lagi'),
(14, 'oranga.png', 'Bandung', 'Jawa Bandung', 'PT Astra Honda Motor (AHM)', 'Puas dengan pemanasnya, terima kasih untuk CV. Bianto Factory');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `visi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `visi`) VALUES
(1, 'Menjadikan perusahaan Manufaktur terkemuka'),
(2, 'Menjadi Perusahaan Produsen Element Pemanas dan Thermocouple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
