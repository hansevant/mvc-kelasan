-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2022 at 05:23 PM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technof4_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `npm` int(8) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `name`, `npm`, `email`, `gender`, `status`) VALUES
(1, 'METHA ANISA', 13119676, '', 'Perempuan', 'Aktif'),
(2, 'MUHAMMAD JODY', 14119263, '', 'Laki-laki', 'Aktif'),
(3, 'ADAM RAHMADIANDI', 10119102, '', 'Laki-laki', 'Aktif'),
(4, 'IBRAHIM ASYUR', 12119873, '', 'Laki-laki', 'Aktif'),
(5, 'LINGGA ANGGALA PRASETYO', 13119417, '', 'Laki-laki', 'Aktif'),
(6, 'MOCHAMAD ANDHIKA WILBY', 17119580, '', 'Laki-laki', 'Aktif'),
(7, 'RAIHAN PUTRO MAULANA RIZKY', 15119262, '', 'Laki-laki', 'Aktif'),
(8, 'SHAHIBIL ANWAR', 16119011, '', 'Laki-laki', 'Aktif'),
(9, 'VIANDA SALEH', 17119087, '', 'Laki-laki', 'Aktif'),
(10, 'DINDA SALSABILA PUTRI', 11119862, '', 'Perempuan', 'Aktif'),
(11, 'GERDINO GEOFARREL', 12119586, '', 'Laki-laki', 'Tidak Aktif'),
(12, 'IBNU HIDAYATULLAH', 12119870, '', 'Laki-laki', 'Aktif'),
(13, 'ALLESANDRO REYNARD KARAMOY', 10119559, '', 'Laki-laki', 'Tidak Aktif'),
(14, 'ARYA DHARMA DWIPUTERA', 11119077, '', 'Laki-laki', 'Aktif'),
(15, 'ARYANDI SYAHPUTRA', 11119090, '', 'Laki-laki', 'Aktif'),
(16, 'MUHAMMAD ALIFIO WIBISONO', 14119006, '', 'Laki-laki', 'Aktif'),
(17, 'MUHAMMAD KEMAL RAFLIANSYAH SURALAGA', 14119269, '', 'Laki-laki', 'Aktif'),
(18, 'MUHAMMAD YASIN ATSAQIB', 14119483, '', 'Laki-laki', 'Aktif'),
(19, 'NICO RIZKY ANANDA', 14119770, '', 'Laki-laki', 'Tidak Aktif'),
(20, 'RESHA MUHAMMAD SUYUDI', 17119242, '', 'Laki-laki', 'Tidak Aktif'),
(21, 'TENGKU ADINDA ZHAFIRAH FITRI', 16119316, '', 'Perempuan', 'Aktif'),
(22, 'GAHTRA RAMADHAN', 12119542, '', 'Laki-laki', 'Tidak Aktif'),
(23, 'MUHAMMAD FARIS RAHMAN', 14119161, '', 'Laki-laki', 'Aktif'),
(24, 'LARDI RAMA MANGAWEANG', 17119618, '', 'Laki-laki', 'Aktif'),
(25, 'SUBUR FIRMANSYAH', 16119165, '', 'Laki-laki', 'Aktif'),
(26, 'WAHYU RAMADHAN', 17119204, '', 'Laki-laki', 'Aktif'),
(27, 'HANS EVAN TATIPATA', 12119740, 'thansevan@gmail.com', 'Laki-laki', 'Aktif'),
(28, 'ALAMSYAH PUTRA HERDANI', 10119409, '', 'Laki-laki', 'Aktif'),
(29, 'MARSHA NABILA LUTHFIANTY', 13119569, '', 'Perempuan', 'Aktif'),
(30, 'ISMAIL', 13119087, '', 'Laki-laki', 'Tidak Aktif'),
(31, 'MUHAMMAD NABIL AKBAR', 14119284, '', 'Laki-laki', 'Aktif'),
(32, 'RAHMANIA ULFAH SISWANTA', 15119230, '', 'Perempuan', 'Tidak Aktif'),
(33, 'SAMUEL PRASETYOADI DANUTIRTO', 15119885, '', 'Laki-laki', 'Aktif'),
(34, 'BREMA BONIFASIUS', 11119383, '', 'Laki-laki', 'Aktif'),
(35, 'SYAHRUL RAMADHAN', 16119230, '', 'Laki-laki', 'Aktif'),
(36, 'VIKRY TIHAS LUTHFIAN', 16119497, '', 'Laki-laki', 'Aktif'),
(37, 'YEHEZKIEL ROBINSON TUKA', 16119676, '', 'Laki-laki', 'Aktif'),
(38, 'JASMINE SAFIERA', 19120004, '', 'Perempuan', 'Transfer'),
(40, 'GEDE SATRIA AJI PANGESTU', 17121002, '', 'Laki-laki', 'Transfer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
