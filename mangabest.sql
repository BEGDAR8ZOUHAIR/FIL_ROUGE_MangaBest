-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 06:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangabest`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `chapter`, `id_manga`, `title`) VALUES
(1, 'chapter 1', 100, 'holo'),
(1, 'chapter 1', 101, 'ne regret'),
(1, 'chapter 1', 102, 'ho'),
(1, 'chapter 1', 103, 'just'),
(1, 'chapter 1', 104, 'hunter'),
(1, 'chapter 1', 105, 'dd'),
(1, 'chapter 1', 107, 'jhr'),
(1, 'chapter 1', 108, 'eeze'),
(1, 'chapter 1', 109, 'errr'),
(1, 'chapter 1', 110, 'prp'),
(1, 'chapter 1', 111, 'rcho'),
(2, 'chapter 2', 100, 'gogo'),
(2, 'chapter 2', 101, 'atatck'),
(2, 'chapter 2', 102, 'hoo'),
(2, 'chapter 2', 103, 'gdgd'),
(2, 'chapter 2', 104, 'dgd'),
(2, 'chapter 2', 105, 'ss'),
(2, 'chapter 2', 107, 'fiugu'),
(3, 'chapter 3', 100, 'hogo'),
(3, 'chapter 3', 101, 'dyyd'),
(3, 'chapter 3', 103, 'hgge'),
(3, 'chapter 3', 104, 'kilwa'),
(3, 'chapter 3', 105, 'vvv'),
(4, 'chapter 4', 100, 'gojo'),
(4, 'chapter 4', 101, 'gge'),
(4, 'chapter 4', 104, 'gone');

-- --------------------------------------------------------

--
-- Table structure for table `chapter_images`
--

CREATE TABLE `chapter_images` (
  `id` int(10) NOT NULL,
  `number` int(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `id_manga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter_images`
--

INSERT INTO `chapter_images` (`id`, `number`, `image`, `id_chapter`, `id_manga`) VALUES
(967, 1, ' holo2022062160256.jpg', 1, 100),
(968, 2, ' holo2022062133875.jpg', 1, 100),
(969, 3, ' holo2022062167645.jpg', 1, 100),
(970, 4, ' holo2022062173379.jpg', 1, 100),
(971, 5, ' holo2022062115347.jpg', 1, 100),
(972, 1, ' gogo2022062167897.jpg', 2, 100),
(973, 2, ' gogo202206212006.jpg', 2, 100),
(974, 3, ' gogo2022062173434.jpg', 2, 100),
(975, 4, ' gogo2022062194249.jpg', 2, 100),
(976, 5, ' gogo2022062161323.jpg', 2, 100),
(977, 1, ' hogo2022062148561.jpg', 3, 100),
(978, 2, ' hogo2022062118507.jpg', 3, 100),
(979, 3, ' hogo2022062192852.jpg', 3, 100),
(980, 4, ' hogo2022062197350.jpg', 3, 100),
(981, 5, ' hogo2022062193329.jpg', 3, 100),
(982, 1, ' gojo2022062141454.jpg', 4, 100),
(983, 2, ' gojo2022062197850.jpg', 4, 100),
(984, 3, ' gojo2022062160467.jpg', 4, 100),
(985, 4, ' gojo2022062125296.jpg', 4, 100),
(986, 5, ' gojo2022062157806.jpg', 4, 100),
(987, 1, ' ne regret2022062187143.jpg', 1, 101),
(988, 2, ' ne regret202206216899.jpg', 1, 101),
(989, 3, ' ne regret2022062195581.jpg', 1, 101),
(990, 4, ' ne regret2022062161973.jpg', 1, 101),
(991, 5, ' ne regret2022062179975.jpg', 1, 101),
(992, 6, ' ne regret2022062158225.jpg', 1, 101),
(993, 1, ' atatck2022062126035.jpg', 2, 101),
(994, 2, ' atatck2022062144854.jpg', 2, 101),
(995, 3, ' atatck2022062145660.jpg', 2, 101),
(996, 4, ' atatck2022062191163.jpg', 2, 101),
(997, 5, ' atatck2022062141512.jpg', 2, 101),
(998, 1, ' dyyd202206214899.jpg', 3, 101),
(999, 2, ' dyyd2022062177714.jpg', 3, 101),
(1000, 3, ' dyyd2022062129280.jpg', 3, 101),
(1001, 4, ' dyyd2022062175107.jpg', 3, 101),
(1002, 5, ' dyyd2022062187133.jpg', 3, 101),
(1003, 1, ' gge2022062186847.jpg', 4, 101),
(1004, 2, ' gge2022062147405.jpg', 4, 101),
(1005, 3, ' gge2022062126994.jpg', 4, 101),
(1006, 4, ' gge2022062185001.jpg', 4, 101),
(1007, 1, ' ho2022062133466.jpg', 1, 102),
(1008, 2, ' ho2022062166627.jpg', 1, 102),
(1009, 3, ' ho2022062167311.jpg', 1, 102),
(1010, 4, ' ho2022062133294.jpg', 1, 102),
(1011, 5, ' ho2022062124310.jpg', 1, 102),
(1012, 1, ' hoo2022062161380.jpg', 2, 102),
(1013, 2, ' hoo2022062151410.jpg', 2, 102),
(1014, 3, ' hoo2022062192989.jpg', 2, 102),
(1015, 4, ' hoo2022062129237.jpg', 2, 102),
(1016, 5, ' hoo2022062182474.jpg', 2, 102),
(1017, 1, ' just2022062176084.jpg', 1, 103),
(1018, 2, ' just2022062155381.jpg', 1, 103),
(1019, 3, ' just2022062150133.jpg', 1, 103),
(1020, 4, ' just2022062197851.jpg', 1, 103),
(1021, 5, ' just2022062130088.jpg', 1, 103),
(1022, 6, ' just2022062147877.jpg', 1, 103),
(1023, 1, ' gdgd2022062154027.jpg', 2, 103),
(1024, 2, ' gdgd2022062140887.jpg', 2, 103),
(1025, 3, ' gdgd2022062122490.jpg', 2, 103),
(1026, 4, ' gdgd2022062133714.jpg', 2, 103),
(1027, 5, ' gdgd202206214876.jpg', 2, 103),
(1028, 6, ' gdgd2022062125888.jpg', 2, 103),
(1029, 1, ' hgge2022062131163.jpg', 3, 103),
(1030, 2, ' hgge2022062186612.jpg', 3, 103),
(1031, 3, ' hgge202206215542.jpg', 3, 103),
(1032, 4, ' hgge2022062132085.jpg', 3, 103),
(1033, 5, ' hgge2022062171006.jpg', 3, 103),
(1034, 6, ' hgge2022062128400.jpg', 3, 103),
(1035, 1, ' hunter2022062193734.jpg', 1, 104),
(1036, 2, ' hunter2022062194269.jpg', 1, 104),
(1037, 3, ' hunter2022062157.jpg', 1, 104),
(1038, 4, ' hunter2022062161228.jpg', 1, 104),
(1039, 5, ' hunter2022062195418.jpg', 1, 104),
(1040, 6, ' hunter2022062127300.jpg', 1, 104),
(1041, 7, ' hunter2022062153583.jpg', 1, 104),
(1042, 8, ' hunter2022062180715.jpg', 1, 104),
(1043, 1, ' dgd2022062169726.jpg', 2, 104),
(1044, 2, ' dgd2022062170689.jpg', 2, 104),
(1045, 3, ' dgd2022062181183.jpg', 2, 104),
(1046, 4, ' dgd2022062199348.jpg', 2, 104),
(1047, 5, ' dgd2022062113100.jpg', 2, 104),
(1048, 6, ' dgd2022062113826.jpg', 2, 104),
(1049, 7, ' dgd2022062175235.jpg', 2, 104),
(1050, 8, ' dgd2022062150716.jpg', 2, 104),
(1051, 9, ' dgd2022062161172.jpg', 2, 104),
(1052, 10, ' dgd202206219557.jpg', 2, 104),
(1053, 11, ' dgd2022062174895.jpg', 2, 104),
(1054, 1, ' kilwa2022062196165.jpg', 3, 104),
(1055, 2, ' kilwa2022062190307.jpg', 3, 104),
(1056, 3, ' kilwa2022062113879.jpg', 3, 104),
(1057, 4, ' kilwa2022062150634.jpg', 3, 104),
(1058, 5, ' kilwa2022062112456.jpg', 3, 104),
(1059, 6, ' kilwa2022062181157.jpg', 3, 104),
(1060, 7, ' kilwa2022062183283.jpg', 3, 104),
(1061, 8, ' kilwa2022062127615.jpg', 3, 104),
(1062, 9, ' kilwa2022062137093.jpg', 3, 104),
(1063, 10, ' kilwa2022062174236.jpg', 3, 104),
(1064, 11, ' kilwa2022062114356.jpg', 3, 104),
(1065, 1, ' gone2022062186069.jpg', 4, 104),
(1066, 2, ' gone2022062126868.jpg', 4, 104),
(1067, 3, ' gone2022062150955.jpg', 4, 104),
(1068, 4, ' gone2022062184422.jpg', 4, 104),
(1069, 5, ' gone202206216304.jpg', 4, 104),
(1070, 6, ' gone2022062124583.jpg', 4, 104),
(1071, 7, ' gone2022062142770.jpg', 4, 104),
(1072, 8, ' gone202206213704.jpg', 4, 104),
(1073, 9, ' gone2022062158135.jpg', 4, 104),
(1074, 10, ' gone2022062167482.jpg', 4, 104),
(1075, 11, ' gone2022062172341.jpg', 4, 104),
(1076, 1, ' dd2022062220118.jpg', 1, 105),
(1077, 2, ' dd2022062288741.jpg', 1, 105),
(1078, 3, ' dd2022062240833.jpg', 1, 105),
(1079, 4, ' dd2022062238363.jpg', 1, 105),
(1080, 5, ' dd2022062298760.jpg', 1, 105),
(1081, 6, ' dd2022062296599.jpg', 1, 105),
(1082, 7, ' dd2022062277568.jpg', 1, 105),
(1083, 8, ' dd2022062286668.jpg', 1, 105),
(1084, 1, ' ss2022062227486.jpg', 2, 105),
(1085, 2, ' ss2022062256456.jpg', 2, 105),
(1086, 3, ' ss2022062298607.jpg', 2, 105),
(1087, 4, ' ss2022062281009.jpg', 2, 105),
(1088, 5, ' ss2022062299679.jpg', 2, 105),
(1089, 6, ' ss202206229188.jpg', 2, 105),
(1090, 7, ' ss2022062224654.jpg', 2, 105),
(1091, 1, ' vvv202206223896.jpg', 3, 105),
(1092, 2, ' vvv2022062291973.jpg', 3, 105),
(1093, 3, ' vvv2022062285062.jpg', 3, 105),
(1094, 4, ' vvv2022062240433.jpg', 3, 105),
(1095, 5, ' vvv202206224158.jpg', 3, 105),
(1096, 6, ' vvv2022062245607.jpg', 3, 105),
(1097, 7, ' vvv2022062254656.jpg', 3, 105),
(1098, 8, ' vvv2022062225953.jpg', 3, 105),
(1099, 9, ' vvv2022062256559.jpg', 3, 105),
(1100, 10, ' vvv202206227094.jpg', 3, 105),
(1101, 11, ' vvv2022062258213.jpg', 3, 105),
(1102, 1, ' jhr2022062256543.jpg', 1, 107),
(1103, 2, ' jhr2022062277679.jpg', 1, 107),
(1104, 3, ' jhr2022062255225.jpg', 1, 107),
(1105, 4, ' jhr2022062284725.jpg', 1, 107),
(1106, 5, ' jhr2022062297166.jpg', 1, 107),
(1107, 6, ' jhr2022062289652.jpg', 1, 107),
(1108, 7, ' jhr2022062290975.jpg', 1, 107),
(1109, 8, ' jhr2022062251498.jpg', 1, 107),
(1110, 1, ' fiugu2022062285936.jpg', 2, 107),
(1111, 2, ' fiugu2022062251293.jpg', 2, 107),
(1112, 3, ' fiugu2022062280917.jpg', 2, 107),
(1113, 4, ' fiugu2022062224516.jpg', 2, 107),
(1114, 5, ' fiugu2022062224712.jpg', 2, 107),
(1115, 6, ' fiugu2022062261087.jpg', 2, 107),
(1116, 7, ' fiugu2022062221371.jpg', 2, 107),
(1117, 1, ' eeze2022062258855.jpg', 1, 108),
(1118, 2, ' eeze2022062219613.jpg', 1, 108),
(1119, 3, ' eeze2022062264413.jpg', 1, 108),
(1120, 4, ' eeze2022062277067.jpg', 1, 108),
(1121, 5, ' eeze2022062235959.jpg', 1, 108),
(1122, 6, ' eeze2022062287268.jpg', 1, 108),
(1123, 7, ' eeze202206227511.jpg', 1, 108),
(1124, 8, ' eeze2022062251695.jpg', 1, 108),
(1125, 9, ' eeze2022062222922.jpg', 1, 108),
(1126, 10, ' eeze202206224512.jpg', 1, 108),
(1127, 1, ' errr2022062292949.jpg', 1, 109),
(1128, 2, ' errr2022062275682.jpg', 1, 109),
(1129, 3, ' errr2022062249023.jpg', 1, 109),
(1130, 4, ' errr2022062242245.jpg', 1, 109),
(1131, 5, ' errr2022062254670.jpg', 1, 109),
(1132, 6, ' errr2022062243497.jpg', 1, 109),
(1133, 7, ' errr2022062252318.jpg', 1, 109),
(1134, 8, ' errr2022062212780.jpg', 1, 109),
(1135, 1, ' prp2022062224850.jpg', 1, 110),
(1136, 2, ' prp2022062273955.jpg', 1, 110),
(1137, 3, ' prp2022062257745.jpg', 1, 110),
(1138, 4, ' prp2022062241381.jpg', 1, 110),
(1139, 5, ' prp2022062246037.jpg', 1, 110),
(1140, 6, ' prp2022062254357.jpg', 1, 110),
(1141, 7, ' prp2022062286268.jpg', 1, 110),
(1142, 8, ' prp2022062252145.jpg', 1, 110),
(1143, 9, ' prp2022062248407.jpg', 1, 110),
(1144, 10, ' prp202206227060.jpg', 1, 110),
(1145, 1, ' rcho2022062222871.jpg', 1, 111),
(1146, 2, ' rcho2022062296118.jpg', 1, 111),
(1147, 3, ' rcho2022062239022.jpg', 1, 111),
(1148, 4, ' rcho2022062248005.jpg', 1, 111),
(1149, 5, ' rcho2022062292558.jpg', 1, 111),
(1150, 6, ' rcho2022062228394.jpg', 1, 111);

-- --------------------------------------------------------

--
-- Table structure for table `mangas`
--

CREATE TABLE `mangas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` int(11) NOT NULL DEFAULT 1,
  `date` date NOT NULL,
  `sous-title` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mangas`
--

INSERT INTO `mangas` (`id`, `title`, `genre`, `date`, `sous-title`, `status`, `image`) VALUES
(100, 'Bleach', 1, '2022-06-21', 'bleach ', 'New', '01.jpg'),
(101, 'Attack of Tittan', 2, '2022-06-21', '鬼滅の刃', 'up', 'attckchap_1.jpg'),
(102, 'Ho No', 3, '2022-06-21', '鬼滅の刃', 'End', 'HoNoChapter1.jpg'),
(103, 'JUtutsu kaisen', 6, '2022-06-21', 'jututtsu academy', 'New', 'JujutsuKaisen_1.jpg'),
(104, 'HUnter X Hunter', 8, '2022-06-21', '鬼滅の刃', 'New', '.jpg'),
(105, 'Kimitsu No Yiba', 9, '2022-06-22', '鬼滅の刃', 'End', 'kimi_1.jpg'),
(107, 'NURAND', 10, '2022-06-22', '鬼滅の刃', 'new', 'THEELUSIVE_1.jpg'),
(108, 'one Peace gold', 11, '2022-06-22', '鬼滅の刃', 'new', '.jpg'),
(109, 'HORO', 7, '2022-06-22', '鬼滅の刃', 'End', '06.jpg'),
(110, 'Comed', 4, '2022-06-22', 'comco', 'New', 'narut.jpg'),
(111, 'echako', 5, '2022-06-22', 'ddooo', 'up', '15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `typemanga`
--

CREATE TABLE `typemanga` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typemanga`
--

INSERT INTO `typemanga` (`id`, `type`) VALUES
(1, 'complete'),
(2, 'drama'),
(3, 'Action'),
(4, 'Comedy'),
(5, 'Ecchi'),
(6, 'Fantasy'),
(7, 'Horror'),
(8, 'Mystery'),
(9, 'Sci-fi'),
(10, 'Shoujo'),
(11, 'Shoujo Ai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `admin`, `created_at`) VALUES
(1, 'begdar8zouhair@gmail.com', 'begdar8zouhair@gmail.com', '12345678', 'Male', 1, '2022-06-14 13:35:25'),
(2, 'begd@mail.com', 'begd@mail.com', '1234', 'Male', 0, '2022-06-19 11:14:47'),
(3, 'test@gmail.com', 'test@gmail.com', '1234', 'Male', 0, '2022-06-19 11:15:54'),
(6, 'ttt@gmail.com', 'ttt@gmail.com', '1234', 'Female', 0, '2022-06-21 10:03:50'),
(7, 'ZZ@gmail.com', 'ZZ@gmail.com', '1234', 'Female', 0, '2022-06-21 10:05:52'),
(8, 'Reza@gmail.com', 'Reza@gmail.com', '123', 'Female', 0, '2022-06-21 10:07:29'),
(9, 'Reo@gmail.com', 'Reo@gmail.com', '123455', 'Male', 0, '2022-06-21 10:08:06'),
(10, 'Re@gmail.com', 'Re@gmail.com', '1234', 'Male', 0, '2022-06-21 10:09:18'),
(12, 'ReK@gmail.com', 'ReK@gmail.com', '12345', 'Male', 0, '2022-06-21 10:10:27'),
(13, 'RK@gmail.com', 'RK@gmail.com', '12345', 'Male', 0, '2022-06-21 10:12:32'),
(14, 'bo@gmail.com', 'bo@gmail.com', '12345', 'Male', 0, '2022-06-21 10:15:39'),
(15, 'Wo@gmail.com', 'Wo@gmail.com', '1234', 'Male', 0, '2022-06-21 10:16:53'),
(16, 'Woo@gmail.com', 'Woo@gmail.com', '123', 'Male', 0, '2022-06-21 10:17:14'),
(17, 'azr@gmail.com', 'azr@gmail.com', '23344', 'Male', 0, '2022-06-21 10:17:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`,`chapter`,`id_manga`),
  ADD KEY `id_manga` (`id_manga`);

--
-- Indexes for table `chapter_images`
--
ALTER TABLE `chapter_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_chapter` (`id_chapter`),
  ADD KEY `id_manga2` (`id_manga`);

--
-- Indexes for table `mangas`
--
ALTER TABLE `mangas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_manga` (`genre`);

--
-- Indexes for table `typemanga`
--
ALTER TABLE `typemanga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chapter_images`
--
ALTER TABLE `chapter_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1151;

--
-- AUTO_INCREMENT for table `mangas`
--
ALTER TABLE `mangas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `typemanga`
--
ALTER TABLE `typemanga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `id_manga` FOREIGN KEY (`id_manga`) REFERENCES `mangas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chapter_images`
--
ALTER TABLE `chapter_images`
  ADD CONSTRAINT `id_chapter` FOREIGN KEY (`id_chapter`) REFERENCES `chapter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_manga2` FOREIGN KEY (`id_manga`) REFERENCES `mangas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mangas`
--
ALTER TABLE `mangas`
  ADD CONSTRAINT `type_manga` FOREIGN KEY (`genre`) REFERENCES `typemanga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
