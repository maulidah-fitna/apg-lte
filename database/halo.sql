-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table appasi.data_rekap
DROP TABLE IF EXISTS `data_rekap`;
CREATE TABLE IF NOT EXISTS `data_rekap` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kelas` int DEFAULT NULL,
  `jurusan` varchar(4) DEFAULT NULL,
  `kehadiran` enum('hadir','alpa','izin') NOT NULL,
  `kaos_kaki` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `sabuk` varchar(50) DEFAULT NULL,
  `seragam` varchar(50) DEFAULT NULL,
  `songkok` varchar(50) DEFAULT NULL,
  `sepatu` varchar(50) DEFAULT NULL,
  `hasduk` varchar(50) DEFAULT NULL,
  `atribut` text,
  `tanggal_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table appasi.data_rekap: ~4 rows (approximately)
DELETE FROM `data_rekap`;
INSERT INTO `data_rekap` (`id`, `nama_siswa`, `kelas`, `jurusan`, `kehadiran`, `kaos_kaki`, `sabuk`, `seragam`, `songkok`, `sepatu`, `hasduk`, `atribut`, `tanggal_input`) VALUES
	(25, 'Abdillah Aziz', NULL, NULL, 'hadir', '1', '1', '1', NULL, '1', '1', 'kaos_kaki, sabuk, seragam, sepatu, hasduk', '2025-02-20 19:49:28'),
	(26, 'Aufa Ihabi', NULL, NULL, 'hadir', '1', '1', '1', NULL, '1', '1', 'kaos_kaki, sabuk, seragam, sepatu, hasduk', '2025-02-20 19:49:28'),
	(27, 'Muhammad Rofiq Fatoni', NULL, NULL, 'hadir', '1', '1', '1', NULL, '1', '1', 'kaos_kaki, sabuk, seragam, sepatu, hasduk', '2025-02-20 19:49:28'),
	(28, 'Vesta Lingga Loka', NULL, NULL, 'hadir', '1', '1', '1', NULL, '1', '1', 'kaos_kaki, sabuk, seragam, sepatu, hasduk', '2025-02-20 19:49:28');

-- Dumping structure for table appasi.data_siswa
DROP TABLE IF EXISTS `data_siswa`;
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `nis` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` int NOT NULL,
  `jurusan` varchar(4) NOT NULL,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`nis`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table appasi.data_siswa: ~133 rows (approximately)
DELETE FROM `data_siswa`;
INSERT INTO `data_siswa` (`nis`, `nama_siswa`, `kelas`, `jurusan`, `gender`) VALUES
	('178/117.065', 'Ahmad Daffa Al Burhani', 12, 'RPL', 'l'),
	('180/119.065', 'Annisa Hayu Istiqomah', 12, 'RPL', 'p'),
	('181/120.065', 'Anggi Suhetiani', 12, 'RPL', 'p'),
	('182/121.065', 'Citra Ayu Lestari', 12, 'RPL', 'p'),
	('183/122.065', 'Doni Putra Pratama', 12, 'RPL', 'l'),
	('184/123.065', 'Faris Surya Pratama A.', 12, 'RPL', 'l'),
	('186/125.065', 'Lucky Tegar Saputra', 12, 'RPL', 'l'),
	('187/126.065', 'M. Fasih Irsyadul Maula', 12, 'RPL', 'l'),
	('189/128.065', 'Muhammad Sidiq Masyhuri', 12, 'RPL', 'l'),
	('190/129.065', 'Namja Hasya Y. U', 12, 'RPL', 'l'),
	('191/130.065', 'Naufal Labib Fikri', 12, 'RPL', 'l'),
	('192/131.065', 'Nasywa Galan Baskara', 12, 'RPL', 'l'),
	('193/132.065', 'Rahmania Azzahra', 12, 'RPL', 'p'),
	('194/133.065', 'Reno Widiyatmoko', 12, 'RPL', 'l'),
	('195/134.065', 'Safiur Rofik', 12, 'RPL', 'l'),
	('196/135.065', 'Siti Dwi Rohmatin', 12, 'RPL', 'p'),
	('197/136.065', 'Siti Mubasy Syaroh', 12, 'RPL', 'p'),
	('198/137.065', 'Ubaidil Munawar Amin', 12, 'RPL', 'l'),
	('199/138.065', 'Umam Anum Wiranu', 12, 'RPL', 'l'),
	('200/139.065', 'Wilda Mufida Aini', 12, 'RPL', 'p'),
	('201/140.065', 'Yazid Basthomi', 12, 'RPL', 'l'),
	('202/141.065', 'Yusuf Geva Rowais', 12, 'RPL', 'l'),
	('203/062.113', 'Adit Tiya', 12, 'PBS', 'l'),
	('204/063.113', 'Azaria Diva Nataneila', 12, 'PBS', 'p'),
	('205/064.113', 'Bahrudin Ahmad', 12, 'PBS', 'l'),
	('206/065.113', 'Binti Fatimatus Zahro', 12, 'PBS', 'p'),
	('208/067.113', 'Dio Rizky Rahayu', 12, 'PBS', 'p'),
	('209/068.113', 'Faikhul Himam Efendy', 12, 'PBS', 'l'),
	('210/069.113', 'Hasyiem Muayad', 12, 'PBS', 'l'),
	('211/070.113', 'Muhinnatul Fitriyah', 12, 'PBS', 'p'),
	('212/071.113', 'Reena Alfiana Aulia', 12, 'PBS', 'p'),
	('213/072.113', 'Sekar Arum Safitri', 12, 'PBS', 'p'),
	('214/073.113', 'Tialin Dwi Nurdianti', 12, 'PBS', 'p'),
	('215/142.065', 'Afrizal Eka Putra', 12, 'RPL', 'l'),
	('217/001.21', 'Ahmad Fathan Karim', 11, 'RPL', 'l'),
	('218/002.21', 'Ahmad Jamal Mansur', 11, 'RPL', 'l'),
	('219/003.21', 'Ahmad Riadi', 11, 'RPL', 'l'),
	('220/004.21', 'Anggun Khowatim', 11, 'RPL', 'p'),
	('221/005.21', 'Arif Nur Rahman', 11, 'RPL', 'l'),
	('222/006.21', 'Asatidzal Hakiim', 11, 'RPL', 'l'),
	('223/007.21', 'Aulia Fatmawati', 11, 'RPL', 'p'),
	('226/010.21', 'Dwi Hidayatul Khoiriyah', 11, 'RPL', 'p'),
	('227/011.21', 'Elok Nuraini', 11, 'RPL', 'p'),
	('228/012.21', 'Faathir Al-A\'Raaffi Arby', 11, 'RPL', 'l'),
	('229/013.21', 'Faruq Arzaky Nuryandino', 11, 'RPL', 'l'),
	('230/014.21', 'Indra Muhamad Wakhibul Qohar', 11, 'RPL', 'l'),
	('232/016.21', 'Kevin Azriel Hartanto', 11, 'RPL', 'l'),
	('233/017.21', 'Muhammad Fahrur Rozi', 11, 'RPL', 'l'),
	('234/018.21', 'Muhammad Fauzi Afandi', 11, 'RPL', 'l'),
	('235/019.21', 'Maulidah Fitri Khasanah', 11, 'RPL', 'p'),
	('236/020.21', 'Mohammad Fadhil Al-Fakhri', 11, 'RPL', 'l'),
	('237/021.21', 'Muhammad Dihya Al Qolbi', 11, 'RPL', 'l'),
	('238/022.21', 'Muhammad Fatih Fuady', 11, 'RPL', 'l'),
	('239/023.21', 'Najma Faricha', 11, 'RPL', 'p'),
	('240/024.21', 'Nata Dwi Rhama Sakti', 11, 'RPL', 'l'),
	('241/025.21', 'Nayla Azkiya', 11, 'RPL', 'p'),
	('242/026.21', 'Raafi Hafidz Wardono', 11, 'RPL', 'l'),
	('243/027.21', 'Rangga Aji Pratama', 11, 'RPL', 'l'),
	('244/028.21', 'Rizky Alif Khoirul Anam', 11, 'RPL', 'l'),
	('245/029.21', 'Sholihin Ilham Nur Ridhwan', 11, 'RPL', 'l'),
	('247/001.39', 'Abdillah Aziz', 11, 'LPS', 'l'),
	('249/003.39', 'Alfina Tryanor Fandhini', 11, 'LPS', 'p'),
	('250/004.39', 'Anggun Tyas Ayu Ramadhani', 11, 'LPS', 'p'),
	('251/005.39', 'Aufa Ihabi', 11, 'LPS', 'l'),
	('252/006.39', 'Aulia Rivya', 11, 'LPS', 'p'),
	('253/007.39', 'Azizatun Nafi\'ah', 11, 'LPS', 'p'),
	('254/008.39', 'Cantika Aulia Rahma', 11, 'LPS', 'p'),
	('255/009.39', 'Delfinna Fitro Tuzzida', 11, 'LPS', 'p'),
	('258/012.39', 'Muhammad Rofiq Fatoni', 11, 'LPS', 'l'),
	('259/013.39', 'Nadira Alif Fatul Kholifah', 11, 'LPS', 'p'),
	('260/014.39', 'Rizka Syarifatul Maulida', 11, 'LPS', 'p'),
	('262/016.39', 'Shofiana Salsabyla', 11, 'LPS', 'p'),
	('263/017.39', 'Ulin Nihaayah', 11, 'LPS', 'p'),
	('263/018.39', 'Vesta Lingga Loka', 11, 'LPS', 'l'),
	('265/019.39', 'Amalizatul Hammi', 11, 'LPS', 'p'),
	('266/020.39', 'Nur Mufidatul Hasanah', 11, 'LPS', 'p'),
	('267/031.21', 'Sella Ayunia', 11, 'RPL', 'p'),
	('268/032.21', 'Ahdiyana Fatwani Maulafia', 10, 'PPLG', 'p'),
	('269/033.21', 'Ahmad Akbar Taufiqurrohman', 10, 'PPLG', 'l'),
	('270/034.21', 'Ahmad Hadi Mahmud', 10, 'PPLG', 'l'),
	('271/035.21', 'Ahmad Syarifuddin', 10, 'PPLG', 'l'),
	('272/036.21', 'Aira Surya Pratama', 10, 'PPLG', 'l'),
	('273/037.21', 'Ambar Rohmah', 10, 'PPLG', 'p'),
	('274/038.21', 'Arifah Nuril Mursyidah', 10, 'PPLG', 'p'),
	('275/039.21', 'Azza Asyura Alhafizh Pramawa', 10, 'PPLG', 'p'),
	('276/040.21', 'Azzahra Salsa Bila Putri', 10, 'PPLG', 'p'),
	('277/041.21', 'Azzahratun Nur\'aini', 10, 'PPLG', 'p'),
	('278/042.21', 'Azzura Zahra', 10, 'PPLG', 'p'),
	('279/043.21', 'Enggar Kirana Ramadhani', 10, 'PPLG', 'p'),
	('280/044.21', 'Erlangga Alviant Pratama El-Badr', 10, 'PPLG', 'l'),
	('281/045.21', 'Fadhil Nur Faiz', 10, 'PPLG', 'l'),
	('282/046.21', 'Faizatul Alya', 10, 'PPLG', 'p'),
	('283/047.21', 'Izna Ayudestika Munawaroh', 10, 'PPLG', 'p'),
	('284/048.21', 'Luthfia Zalfa Ardisyaputri', 10, 'PPLG', 'p'),
	('285/049.21', 'M Davin Berliano', 10, 'PPLG', 'l'),
	('286/050.21', 'Mega Alya Putri', 10, 'PPLG', 'p'),
	('287/051.21', 'Megananda Cristal Maliha Syisyoria S.', 10, 'PPLG', 'p'),
	('288/052.21', 'Meytta Putri Nabila Gusti', 10, 'PPLG', 'p'),
	('289/053.21', 'Muflihatuddaroini', 10, 'PPLG', 'p'),
	('290/054.21', 'Muhammad Fathir Rizky Abdillah', 10, 'PPLG', 'l'),
	('291/055.21', 'Muhammad Ilham Musyaffa\'', 10, 'PPLG', 'l'),
	('292/056.21', 'Muhammad Raihan Fuad Fakhrurrozi', 10, 'PPLG', 'l'),
	('293/057.21', 'Muhammad Shalman Alfarizzi', 10, 'PPLG', 'l'),
	('294/058.21', 'Nazhifah', 10, 'PPLG', 'p'),
	('296/060.21', 'Nur Fauziah Eli Melsy', 10, 'PPLG', 'p'),
	('297/061.21', 'Putri Agusti Nailaturrohmah', 10, 'PPLG', 'p'),
	('298/062.21', 'Reyfaldo Maulana Rosyid', 10, 'PPLG', 'l'),
	('299/063.21', 'Rizky Andriano', 10, 'PPLG', 'l'),
	('300/064.21', 'Shobibar Ridlwan', 10, 'PPLG', 'l'),
	('301/065.21', 'Siti Kholifah', 10, 'PPLG', 'p'),
	('302/066.21', 'Sukma Maulida Hidayati', 10, 'PPLG', 'p'),
	('303/067.21', 'Ulya Zumrotul Muwahidah', 10, 'PPLG', 'p'),
	('305/069.21', 'Yanuharti Widhi Astuti', 10, 'PPLG', 'p'),
	('306/070.21', 'Yoshi Arwan Zullathiif', 10, 'PPLG', 'l'),
	('308/022.39', 'Azkya Aulia Maghfirany', 10, 'AKL', 'p'),
	('309/023.39', 'Cinta Ratih Martha Ningtyas', 10, 'AKL', 'p'),
	('310/024.39', 'Devinda Amelia', 10, 'AKL', 'p'),
	('311/025.39', 'Enti Imroatul Jalillah', 10, 'AKL', 'p'),
	('312/026.39', 'Fairies Yefi Angelicha', 10, 'AKL', 'p'),
	('313/027.39', 'Farel Ghibran Al Ghozali', 10, 'AKL', 'l'),
	('316/030.39', 'Kheisya Fiddina Hanifah', 10, 'AKL', 'p'),
	('317/031.39', 'Muhammad Abi Ya\'la', 10, 'AKL', 'l'),
	('318/032.39', 'Muhamad Ilham', 10, 'AKL', 'l'),
	('319/033.39', 'Nayla Fahma Maulida', 10, 'AKL', 'p'),
	('320/034.39', 'Nindi Tri Rafiunchel', 10, 'AKL', 'p'),
	('321/035.39', 'Putri Monica Dwi Rahayu', 10, 'AKL', 'p'),
	('322/036.39', 'Rahma Dany Kashfi Sabrina', 10, 'AKL', 'p'),
	('323/037.39', 'Sherly Felicia Anatasya', 10, 'AKL', 'p'),
	('324/038.39', 'Syarif', 10, 'AKL', 'l'),
	('325/039.39', 'Taufiq Ilham Novianto', 10, 'AKL', 'l'),
	('326/040.39', 'Vivi Tri Nur Andriana', 10, 'AKL', 'p'),
	('327/041.39', 'Benny Yudha Tata Adhitama', 10, 'AKL', 'l'),
	('328/042.39', 'Veni Veliska', 10, 'AKL', 'p');

-- Dumping structure for table appasi.rekap_tahunan
DROP TABLE IF EXISTS `rekap_tahunan`;
CREATE TABLE IF NOT EXISTS `rekap_tahunan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) NOT NULL,
  `kehadiran` enum('hadir','izin','alpa') NOT NULL,
  `kaos_kaki` tinyint(1) DEFAULT '0',
  `sabuk` tinyint(1) DEFAULT '0',
  `seragam` tinyint(1) DEFAULT '0',
  `songkok` tinyint(1) DEFAULT '0',
  `sepatu` tinyint(1) DEFAULT '0',
  `hasduk` tinyint(1) DEFAULT '0',
  `atribut` text,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table appasi.rekap_tahunan: ~0 rows (approximately)
DELETE FROM `rekap_tahunan`;

-- Dumping structure for table appasi.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table appasi.user: ~3 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`) VALUES
	(1, 'Najma Faricha', 'admin1', '72fc58fee3f47cc53664fd4bf0110dd0'),
	(2, 'nana', 'admine', '6f8770590d8c6289718ec0f211a6c2cf'),
	(3, 'Muyas', 'admine', '6f8770590d8c6289718ec0f211a6c2cf');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
