-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2019 pada 16.55
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-parking`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `date_log_last_month`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `date_log_last_month` (
`id` int(6)
,`card_number` double
,`nama_mahasiswa` varchar(30)
,`nim` double
,`date_log` date
,`parkir_masuk` time
,`parkir_keluar` time
,`UserStat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `date_log_today_in`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `date_log_today_in` (
`date_log` date
,`parkir_masuk` time
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `date_log_today_out`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `date_log_today_out` (
`date_log` date
,`parkir_keluar` time
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_parkir`
--

CREATE TABLE `log_parkir` (
  `id` int(6) NOT NULL,
  `card_number` double NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `nim` double NOT NULL,
  `date_log` date NOT NULL,
  `parkir_masuk` time NOT NULL,
  `parkir_keluar` time NOT NULL,
  `UserStat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_parkir`
--

INSERT INTO `log_parkir` (`id`, `card_number`, `nama_mahasiswa`, `nim`, `date_log`, `parkir_masuk`, `parkir_keluar`, `UserStat`) VALUES
(6, 4.126183584194128e15, 'iqbal', 1641720113, '2019-12-20', '22:51:46', '22:52:41', 'Parkir Keluar'),
(7, 4.191246584194128e15, 'Nadya', 1641720179, '2019-12-20', '22:52:12', '22:52:36', 'Parkir Keluar'),
(8, 4.221223584194128e15, 'Fairuz', 1641720066, '2019-12-20', '22:52:20', '22:52:30', 'Parkir Keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_mhs` varchar(55) NOT NULL,
  `nim` double NOT NULL,
  `jurusan` varchar(55) NOT NULL,
  `id_card` double NOT NULL,
  `id_card_select` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_mhs`, `nim`, `jurusan`, `id_card`, `id_card_select`) VALUES
(80, 'iqbal', 1641720113, 'Teknik Informatika', 4.126183584194128e15, 0),
(81, 'Fairuz', 1641720066, 'Teknik Informatika', 4.221223584194128e15, 0),
(82, 'Nadya', 1641720179, 'Teknik Informatika', 4.191246584194128e15, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `nama` varchar(55) DEFAULT NULL,
  `alamat` varchar(55) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `alamat`, `telp`, `email`, `level`) VALUES
(1, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 'jl.admin', '010101', 'admin@eparking.com', '1'),
(2, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'User1', 'jl.User1', '0878574656', 'uiklknb@fasda.com', '2'),
(3, '4', 'a87ff679a2f3e71d9181a67b7542122c', '444', '4', '4', '4', '1'),
(4, 'kacong', '202cb962ac59075b964b07152d234b70', 'kacong', 'asd', '011', 'asd', '2'),
(5, 'sad', '49f0bad299687c62334182178bfd75d8', 'sad', 'sad', '21', 'sad@gmai.com', '1');

-- --------------------------------------------------------

--
-- Struktur untuk view `date_log_last_month`
--
DROP TABLE IF EXISTS `date_log_last_month`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `date_log_last_month`  AS  select `log_parkir`.`id` AS `id`,`log_parkir`.`card_number` AS `card_number`,`log_parkir`.`nama_mahasiswa` AS `nama_mahasiswa`,`log_parkir`.`nim` AS `nim`,`log_parkir`.`date_log` AS `date_log`,`log_parkir`.`parkir_masuk` AS `parkir_masuk`,`log_parkir`.`parkir_keluar` AS `parkir_keluar`,`log_parkir`.`UserStat` AS `UserStat` from `log_parkir` where ((year(`log_parkir`.`date_log`) = year((curdate() - interval 1 month))) and (month(`log_parkir`.`date_log`) = month((curdate() - interval 1 month)))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `date_log_today_in`
--
DROP TABLE IF EXISTS `date_log_today_in`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `date_log_today_in`  AS  select `log_parkir`.`date_log` AS `date_log`,`log_parkir`.`parkir_masuk` AS `parkir_masuk` from `log_parkir` where ((cast(`log_parkir`.`date_log` as date) = curdate()) and (`log_parkir`.`parkir_masuk` is not null)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `date_log_today_out`
--
DROP TABLE IF EXISTS `date_log_today_out`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `date_log_today_out`  AS  select `log_parkir`.`date_log` AS `date_log`,`log_parkir`.`parkir_keluar` AS `parkir_keluar` from `log_parkir` where ((cast(`log_parkir`.`date_log` as date) = curdate()) and (`log_parkir`.`parkir_keluar` is not null)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_parkir`
--
ALTER TABLE `log_parkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_parkir`
--
ALTER TABLE `log_parkir`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
