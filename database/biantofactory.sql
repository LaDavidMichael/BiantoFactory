-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2021 pada 11.41
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updateOnDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updateOnDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-02-21 19:45:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `judul`, `deskripsi`, `gambar`) VALUES
(4, '2021-03-02', 'Pemanas Air', '  Percayakan kebutuhan Sparepart Elektrikal, Mekanikal,Produk HF lebih khusus di bidang Heating Elements pada kami, karena kami sudah berpengalaman di bidang tersebut. Jaminan Kualitas dan Harga menjadi kepercayaan kami..  ', 0x622e706e67),
(15, '2021-03-20', 'Produk CV Bianto Factory ke 3`', 'terbaik', 0x732e706e67),
(16, '2021-03-20', 'Produk CV Bianto Factory ke 6', 'keren', 0x612e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `tlpn` varchar(13) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `alamat`, `tlpn`, `email`) VALUES
(1, 'Jalan Kyai Satari II/14B, Kel. Rungkut Menanggal, Kec. Gunung Anyar, Kota Surabaya ', '081357047260', 'biantofactory@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
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
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `misi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id`, `misi`) VALUES
(1, 'Mengkalibrasi seluruh alat - alat kerja'),
(2, 'Berinovasi dalam setiap proyek'),
(3, 'Selalu memberikan rekomendasi terhadap konsumen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `gambar` blob NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `gambar`, `deskripsi`) VALUES
(1, 0x6c6f676f20362e706e67, ' CV. Bianto Factory merupakan pelopor Produsen Element Pemanas dan Thermocouple di salah satu Kota di Jawa Timur. Dengan lingkup pemasaran seluruh Indonesia. Perusahaan kami berdiri sejak tahun 1995, dengan alamat awal di Jalan Kyai Satari II/41 Surabaya. Pada tahun 2013 kami berpindah tempat, dikarenakan Sertifikat lahan yang masih belum kejelasannya.\r\nDalam perjalannya, CV. Bianto Factory telah mengalami sejumlah perubahan nama, dengan nama awal adalah CV. Tunggal Jaya Elektrik, dan pada tahun 2013 merubah namanya menjadi CV. Bianto Factory. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosialmedia`
--

CREATE TABLE `sosialmedia` (
  `id` int(11) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sosialmedia`
--

INSERT INTO `sosialmedia` (`id`, `instagram`, `facebook`, `twitter`, `linkedin`, `youtube`) VALUES
(1, 'https://www.instagram.com/', 'https://id-id.facebook.com/', 'https://twitter.com/', 'https://id.linkedin.com/', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
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
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `deskripsi`, `foto`, `instagram`, `facebook`) VALUES
(8, 'David Michael', 'General Manager', 'selalu ingin menjadi yang terbaik', 0x69636f6e642e706e67, '', ''),
(9, 'M. Soni Rejeki', 'MARKETING', ' Selalu memberikan yang terbaik ', 0x69636f6e632e706e67, '', ''),
(10, 'Bagus Kurniawan', 'CFO', 'Memberikan yang terbaik untuk bangsa', 0x69636f6e622e706e67, '', ''),
(13, 'Ahmad Muhammad', 'CEO', 'Ingin selalu berkarya', 0x69636f6e612e706e67, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testi`
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
-- Dumping data untuk tabel `testi`
--

INSERT INTO `testi` (`id`, `fotosampul`, `kota`, `provinsi`, `judul`, `deskripsi`) VALUES
(9, 'orangc.png', 'Jakarta', 'DKI Jakarta', 'Mitsubishi Motors Corporation', 'Barang bagus dan juga terpercaya'),
(11, 'orangb.png', 'Sidoarjo', 'Jawa Timur', 'PT. Avia Avian', 'Thanks CV. Avia Avian,\r\nBagus dan Awet'),
(13, 'orang.png', 'Surabaya', 'Jawa Timur', 'PT. AM Desain Corp', 'Terpercaya, mesinnya bagus, Sukses terus CV Bianto Factory, next pasti order lagi'),
(14, 'oranga.png', 'Bandung', 'Jawa Bandung', 'PT Astra Honda Motor (AHM)', 'Puas dengan pemanasnya, terima kasih untuk CV. Bianto Factory');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `visi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `visi`) VALUES
(1, 'Menjadikan perusahaan Manufaktur terkemuka'),
(2, 'Menjadi Perusahaan Produsen Element Pemanas dan Thermocouple');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sosialmedia`
--
ALTER TABLE `sosialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
