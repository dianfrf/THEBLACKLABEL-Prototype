-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 05:48 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theblacklabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id_album` int(11) NOT NULL,
  `id_artist` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `album_description` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `poster` varchar(100) DEFAULT NULL,
  `itunes` varchar(100) DEFAULT NULL,
  `spotify` varchar(100) DEFAULT NULL,
  `melon` varchar(100) DEFAULT NULL,
  `vibe` varchar(100) DEFAULT NULL,
  `genie` varchar(100) DEFAULT NULL,
  `flo` varchar(100) DEFAULT NULL,
  `bugs` varchar(100) DEFAULT NULL,
  `album_order` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id_album`, `id_artist`, `album_name`, `release_date`, `album_description`, `cover`, `poster`, `itunes`, `spotify`, `melon`, `vibe`, `genie`, `flo`, `bugs`, `album_order`) VALUES
(6, 2, 'BIRTHDAY', '2019-06-13', '1st DIGITAL SINGLE', 'birthday.png', NULL, 'https://music.apple.com/id/album/birthday-single/1467846641?l=id', 'https://open.spotify.com/album/7GfqgsiW63VBNLRvIrhqLx', 'https://www.melon.com/album/detail.htm?albumId=10296482', 'https://vibe.naver.com/album/3068636', 'https://www.genie.co.kr/detail/albumInfo?axnm=81226575', 'https://www.music-flo.com/detail/album/edinaadzo/albumtrack', 'https://music.bugs.co.kr/album/20260104?wl_ref=list_ab_03_ar', 1),
(7, 3, 'MENNAL', '2019-10-02', '1st DIGITAL SINGLE', 'mennal.png', NULL, 'https://music.apple.com/id/album/mennal-feat-okasian-single/1481434264?l=id', 'https://open.spotify.com/album/2I5RgHEKPnCAqea3CxI4lL', 'https://www.melon.com/album/detail.htm?albumId=10334638', 'https://vibe.naver.com/album/3205311', 'https://www.genie.co.kr/detail/albumInfo?axnm=81275167', 'https://www.music-flo.com/detail/album/edilelhnh/albumtrack', 'https://music.bugs.co.kr/album/20280242?wl_ref=list_ab_03_ar', 1),
(9, 3, 'EMERGENCY', '2020-02-04', '2nd DIGITAL SINGLE', 'emergency.png', '', 'https://music.apple.com/id/album/emergency-feat-zion-t-single/1497241245?l=id', 'https://open.spotify.com/album/4AmZD6pHiQlNvaV0oKmXXn', 'https://www.melon.com/album/detail.htm?albumId=10383629', 'https://vibe.naver.com/album/4436219', 'https://www.genie.co.kr/detail/albumInfo?axnm=81353228', 'https://www.music-flo.com/detail/album/edeineaay/albumtrack', 'https://music.bugs.co.kr/album/20303823?wl_ref=list_ab_03_ar', 2),
(10, 2, 'WHAT YOU WAITING FOR', '2020-07-22', '2nd DIGITAL SINGLE', 'wuwf.jpg', 'poster1.jpg', 'https://music.apple.com/id/album/what-you-waiting-for-single/1523801767?l=id', 'https://open.spotify.com/album/1JN6jZ6tFqVojR27UZc9QB', 'https://www.melon.com/album/detail.htm?albumId=10465041', 'https://vibe.naver.com/album/4696057', 'https://www.genie.co.kr/detail/albumInfo?axnm=81511793', 'https://www.music-flo.com/detail/album/edeozllhn/albumtrack', 'https://music.bugs.co.kr/album/20339385?wl_ref=list_ab_03', 2),
(14, 4, 'WHAT YOU WAITING FOR', '2019-03-06', '1st DIGITAL SINGLE', 'wywf.png', NULL, 'https://music.apple.com/id/album/what-you-waiting-for-single/1454603189?l=id', 'https://open.spotify.com/album/2YuKK7Pr7WPADeTUwaXrn1', 'https://www.melon.com/album/detail.htm?albumId=10257647', 'https://vibe.naver.com/album/2905109', 'https://www.genie.co.kr/detail/albumInfo?axnm=81168569', 'https://www.music-flo.com/detail/album/ndnieydo/albumtrack', 'https://music.bugs.co.kr/album/20234907?wl_ref=list_ab_03_ar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id_artist` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `soundcloud` varchar(100) DEFAULT NULL,
  `singer` tinyint(1) NOT NULL,
  `commercial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id_artist`, `name`, `description`, `picture`, `instagram`, `facebook`, `twitter`, `soundcloud`, `singer`, `commercial`) VALUES
(1, 'Okasian', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'okasian.png', 'https://www.instagram.com/chrt_okasian/', NULL, 'https://twitter.com/realokasian', 'https://soundcloud.com/kkzznn', 1, ''),
(2, 'Somi', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'somi.png', 'https://www.instagram.com/somsomi0309/', 'https://www.facebook.com/somsomi.official/', 'https://twitter.com/somi_official_', NULL, 1, ''),
(3, 'Vince', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'vince.png', 'https://www.instagram.com/vincesince19xx/', NULL, 'https://twitter.com/joejrhee', NULL, 1, ''),
(4, 'R.Tee', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'rtee.png', 'https://www.instagram.com/rteeofficial/', NULL, 'https://twitter.com/rteemusic', NULL, 1, ''),
(5, 'Ella Gross', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'ella.jpg', 'https://www.instagram.com/ellagross/', NULL, NULL, NULL, 0, 'Abercrombie & Fitch, Adidas, Airfish, Anta Kids, Barbie, Crayola, Fendi, GAP, Janie and Jack, Lamer, Levi\'s, OshKosh B\'gosh, The North Face, Tommy Hilfiger, Vogue, Zapos, Zara'),
(6, 'Heo Jae Hyuk', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'jaehyuk.png', 'https://www.instagram.com/augustbrody/', NULL, NULL, NULL, 0, 'Adekuver, Customellow, Uniqlo, Volkswagen Korea');

-- --------------------------------------------------------

--
-- Table structure for table `filmografi`
--

CREATE TABLE `filmografi` (
  `id_filmografi` int(11) NOT NULL,
  `id_artist` int(11) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmografi`
--

INSERT INTO `filmografi` (`id_filmografi`, `id_artist`, `nama_film`, `tahun`) VALUES
(1, 5, 'Heathers (TV Series)', 2018),
(2, 5, 'Teachers (TV Series)', 2019),
(3, 5, 'Malibu Rescue', 2019),
(4, 5, 'Malibu Rescue (TV Series)', 2019),
(5, 5, 'Star Trek: Picard (TV Series)', 2020),
(6, 5, 'Malibu Rescue: The Next Wave', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id_penghargaan` int(11) NOT NULL,
  `id_artist` int(11) NOT NULL,
  `nominasi` varchar(200) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id_penghargaan`, `id_artist`, `nominasi`, `tahun`) VALUES
(8, 2, 'Korea First Brand Awards [CF Model]', 2017),
(9, 2, 'Mubeat Awards [Best Female Solo]', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id_song` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `tracknumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id_song`, `id_album`, `title`, `duration`, `tracknumber`) VALUES
(18, 6, 'Outta My Head', '3\'08\"', 1),
(19, 6, 'Birthday', '3\'05\"', 2),
(20, 7, 'Mennal (Feat. Okasian)', '3\'13\"', 1),
(21, 9, 'Emergency (Feat. Zion.T)', '3\'28\"', 1),
(23, 10, 'What You Waiting For', '2\'55\"', 1),
(24, 14, 'What You Waiting For (Feat. Anda)', '2\'54\"', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `video_release_date` date NOT NULL,
  `link` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `id_album`, `video_name`, `video_release_date`, `link`, `thumbnail`) VALUES
(6, 6, 'Birthday', '2019-06-13', 'oDJ4ct59NC4', 'birthday.jpg'),
(7, 7, 'Mennal (Feat. Okasian)', '2019-10-02', 'vvlNOzConrg', 'mennal.jpg'),
(8, 9, 'Emergency (Feat. Zion.T)', '2020-02-04', 'tXj_Viuvcrc', 'emergency.jpg'),
(10, 10, 'What You Waiting For', '2020-07-22', 'lBYyAQ99ZFI', 'wuwf.jpg'),
(11, 14, 'What You Waiting For (Feat. Anda)', '2019-03-06', 'u1xr0L1heHI', 'wywf.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id_album`) USING BTREE,
  ADD KEY `id_artist` (`id_artist`) USING BTREE;

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id_artist`) USING BTREE;

--
-- Indexes for table `filmografi`
--
ALTER TABLE `filmografi`
  ADD PRIMARY KEY (`id_filmografi`),
  ADD KEY `id_artist` (`id_artist`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`) USING BTREE,
  ADD KEY `id_artist` (`id_artist`) USING BTREE;

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id_song`) USING BTREE,
  ADD KEY `id_album` (`id_album`) USING BTREE;

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`) USING BTREE,
  ADD KEY `id_album` (`id_album`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `filmografi`
--
ALTER TABLE `filmografi`
  MODIFY `id_filmografi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id_penghargaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id_artist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD CONSTRAINT `penghargaan_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id_artist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
