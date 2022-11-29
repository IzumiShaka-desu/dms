-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 29, 2022 at 02:48 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `document_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id_document` int(11) NOT NULL,
  `nama_alat` varchar(90) NOT NULL,
  `pabrik_pembuat` varchar(60) NOT NULL,
  `kapasitas` varchar(30) NOT NULL,
  `lokasi` varchar(25) NOT NULL,
  `no_seri` varchar(20) NOT NULL,
  `no_perijinan` varchar(20) NOT NULL,
  `expired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id_document`, `nama_alat`, `pabrik_pembuat`, `kapasitas`, `lokasi`, `no_seri`, `no_perijinan`, `expired_date`) VALUES
(1, 'Fire Alarm Systems', '', '', 'Area Pabrik', '', '566.10/396/UPTD-WIL.', '2023-04-06'),
(2, 'Instalasi Listrik', '', '20 Kv/ 380 V/ 220 V', '', '', '566.7/396/UPTD-WIL.I', '2023-04-09'),
(3, 'Generating Set/ Motor Diesel', 'PERKINS', '350 Kva', '', 'TGBF5031 U14969W', '566.3/9764/UPTD-WIL.', '2022-11-17'),
(4, 'Penyalur Petir ', 'Viking V. 120', '', 'Gedung A dan B', '', '566.8/1805/UPTD-WIL.', '2023-08-25'),
(5, 'Penyalur Petir ', 'Viking V. 6', '', 'Formation C', '', '566.8/1804/UPTD-WIL.', '2023-08-25'),
(6, 'Tangki Soda Caustic', 'PT Sinergi Mekatrotama Indonesia', '10.000 liter', 'WWT', 'KE-1208-T12-006', '566.2/4025/UPTD-WIL.', '2022-10-30'),
(7, 'Tangki Solar/Bejana Tekanan', '', '500 liter', 'MTN', 'TS-500', '566.3/4068/UPTD/WIL.', '2023-08-25'),
(8, 'Bejana Tekanan / Air Receiver Tank', 'PT. Daya Perkasa Teknik', '2.000 liter', 'Gedung D', '02/DPT/IV/2015', '566.2/1539/UPTD/WIL.', '2023-03-24'),
(9, 'Bejana Tekanan / Air Pressure Air Tank', 'PT. Satotek Dwimitri Indonesia; PT. Mitraplus Filter', '1 m3', 'Gedung G ', 'ART 30', '566.2/1538/UPTD-WIL/', '2023-03-24'),
(10, 'Bejana Tekanan / Air Pressure Tank', 'Penta Tank', '1.000 liter', 'Gedung E2', '9510/KP/APT/XI/17', '566.2/6153/UPTD-WIL.', '2023-11-17'),
(11, 'Mesin Melting Pot Lead Powder Ball Mill 1', 'HANGSU SANHUAN INDUSTRI', '', 'Ruang Melting Pot Lead Po', 'SH x 11 - 1048', '566.3/9448/UPTD-WIL.', '2023-11-09'),
(12, 'Mesin Melting Pot Cos Assy Line 4', 'BATEK MAKINA SANAYI VE TIC., LTD', '', 'Ruang COS', 'T 240160', '566.3/9762/JPTD-WIL.', '2022-11-17'),
(13, 'Mesin Melting Pot Cos Assy Line 1', 'BATEK MAKINA SANAYI VE TIC., LTD', '', 'Ruang COS', 'MC 01', '566.3/9442/UPTD-WIL.', '2023-11-09'),
(14, 'Mesin Melting Pot Cos MCB', 'GROWN AUTOMATION CO., LTD', '', 'Ruang Melting POT COS MCB', 'F351 COS', '566.3/9447/UPTD-WIL.', '2023-11-11'),
(15, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '10151113231', '566.3/7309/UPTD-WIL.', '2023-08-03'),
(16, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '1202113088', '566.3/7312/UPTD-WIL.', '2023-08-03'),
(17, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '1452113073', '566.3/7310/UPTD-WIL.', '2023-08-03'),
(18, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '1202113081', '566.3/7313/UPTD-WIL.', '2023-08-03'),
(19, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '145123062', '566.3/7316/UPTD-WIL.', '2023-08-03'),
(20, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '1452113064', '566.3/7314/UPTD-WIL.', '2023-08-03'),
(21, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '131100110171', '566.3/9450/UPTD-WIL.', '2023-11-09'),
(22, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '11452113070', '566.3/7315/UPTD-WIL.', '2023-08-03'),
(23, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '1452113061', '566.3/7317/UPTD-WIL.', '2023-08-03'),
(24, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '1393113409', '566.3/7634/UPTD-WIL.', '2023-08-03'),
(25, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', 'MC11MC12', '566.3/9763/UPTD-WIL.', '2022-11-17'),
(26, 'Mesin Melting Pot Grid Casting', 'PT. SUKSES JAYA', '', 'Ruang Melting Pot Grid Ca', '1426113124', '566.3/7311/UPTD-WIL.', '2023-08-03'),
(27, 'Forklift/ Reach Truck', 'SUMITOMO NACCO MATERIALS HANDLING CO., LTD', '1.900 kg', 'WH Bawah', 'R2B-03495', '566.4/7855/UPTD-WIL.', '2021-07-20'),
(28, 'Reach Truck', 'TOYOTA INDUSTRIES CORPORATION', '1800 kg', 'Area Warehouse', '7FBR18 - 15584', '556.4/3646/UPTD-WIL.', '2023-02-27'),
(29, 'Reach Truck', 'TOYOTA INDUSTRIES CORPORATION', '1950 kg', 'Area Assembling', '7FBE20 - 54395', '556.4/3650/UPTD-WIL.', '2023-02-27'),
(30, 'Chain Hoist Crane', 'SAMSUNG MACHINERY CO., LTD', '500 kg', 'Grid Casting Kanan', '1205206', '566.4/10929/UPTD-WIL', '2023-09-16'),
(31, 'Chain Hoist Crane', 'KITO', '1.000 kg', 'Ballmill gd E', '028178', '566.4/10929/UPTD-WIL', '2023-09-16'),
(32, 'Chain Hoist Crane', 'SAMSUNG MACHINERY CO., LTD', '500 kg', 'Ballmill Kiri B', '1110226', '566.4/15022/UPTD-WIL', '2023-09-16'),
(33, 'Overhead Crane', 'DEMAG', '3200 kg', 'Punch Grid E', '94815904', '566.4/16315/UPTD-WIL', '2022-11-17'),
(34, 'Overhead Crane', 'KITO INDONESIA', '3.000 kg', 'Formation C B2 ', '00140176', '566.4/16435/UPTD-WIL', '2023-11-11'),
(35, 'Overhead Crane', 'KITO INDONESIA', '3.000 kg', 'Formation C B1', '001440174', '566.4/16437/UPTD-WIL', '2023-11-11'),
(36, 'Overhead Crane', 'KITO INDONESIA', '3.000 kg', 'Formation T 2', '00143915', '566.4/16436/UPTD-WIL', '2023-11-11'),
(37, 'Overhead Crane', 'KITO INDONESIA', '3.000 kg', 'Formation C T1', '00143914', '566.4/16434/UPTD_WIL', '2023-11-11'),
(38, 'Jib Crane', 'KITO', '500 kg', 'AMB 2 COS', '248990', '566.4/16314/UPTD-WIL', '2022-11-17'),
(39, 'Jib Crane', 'GEMAG', '1.000 kg', 'AMB 1 COS', '941', '566.4/16312/UPTD-WIL', '2022-11-17'),
(40, 'Electric Hoist Crane', 'SAMSUNG MACHINERY CO., LTD', '500 kg', 'Grid Casting Kiri', '1205211 /  1101125', '566.4/10929/UPTD-WIL', '2023-09-16'),
(41, 'Electric Hoist Crane', 'KITO', '500 kg', 'Ballmill', '244806', '566.4/16313/UPTD-WIL', '2022-11-17'),
(42, 'Electric Hoist Crane', 'KITO', '1.000 kg', 'Pasting E', '044462 / 1702155', '566.4/10929/UPTD-WIL', '2023-09-16'),
(43, 'Electric Hoist Crane', 'KITO', '3.000 kg', 'Formation F1', '00098002', '566.4/16432/UPTD-WIL', '2023-11-11'),
(44, 'Single Girder Electric Semi Gantry Crane', 'DEMAG', '2.500 kg', 'Gedung D', '946 225 73', '566.4/16433/UPTD-WIL', '2023-10-07'),
(45, 'Single Grider Electric Semi Gantry Crane', 'DEMAG', '2.500 kg', 'Gedung G ', '946 225 74', '566.4/16431/UPTD-WIL', '2023-11-11'),
(46, 'Penyalur Petir Prevectron 3S 60.R125M', '', '', 'Gedung A dan B', '', '566.8/1212/UPTD-WIL.', '2023-06-04'),
(47, 'Penyalur Petir Prevectron 3S 60.R125M', '', '', 'Formation C', '', '566.8/1213/UPTD-WIL.', '2023-06-04'),
(48, 'Forklift/ reachtruck ', 'SUMITOMO NACCO MATERIALS HANDLING CO., LTD', '', '', '', '', '0000-00-00'),
(49, 'Volume Tangki T500L', '', '362 L', '', '', '', '0000-00-00'),
(50, 'Volume Tangki T10KL', '', '2037 L', '', '', '', '0000-00-00'),
(51, 'Bejana Tekanan', '', '10.000 liter', '', '', '5663/598/UPTD-WIL.11', '2021-02-27'),
(52, 'nama', 'pabrik', 'kapasitas', 'lokasi', 'n344324', '2342423dsf', '2022-11-20'),
(53, 'nama', 'panrik', 'kapa', 'lok', '34345i', 'n23423', '2022-11-20'),
(54, 'kaoskoa', 'dnfjksn', 'dsnkjfn', 'ndskjnf', '9i45', 'nnds93', '2022-11-20'),
(55, 'jefk', 'jhkjdfh', 'khkh', 'kkj', 'hk', 'k', '0000-00-00'),
(56, 'nawa', 'nawa', 'kapa', 'lok', '39438924', 'dsf939848', '2022-12-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
