-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 11:36 AM
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
(1, 1, 'OO', '2017-02-01', '2nd Mini Album', 'oo.png', NULL, 'https://music.apple.com/id/album/oo/1199341558?l=id', 'https://open.spotify.com/album/2JwgCL53vA3Y2oVDOCold3', 'https://www.melon.com/album/detail.htm?albumId=10035027', 'https://vibe.naver.com/album/1778329', 'https://www.genie.co.kr/detail/albumInfo?axnm=80918558', 'https://www.music-flo.com/detail/album/nddoyhnh/albumtrack', 'https://music.bugs.co.kr/album/20079828?wl_ref=list_ab_03_ab', 1),
(2, 2, 'WALKIN\' VOL.2', '2017-09-04', '2nd Full Album', 'walkinvol2.png', NULL, 'https://music.apple.com/id/album/walkin-vol-2/1476800458?l=id', 'https://open.spotify.com/album/0w3HKEdCt5hUS9TBB8mt3H', 'https://www.melon.com/album/detail.htm?albumId=10093386', 'https://vibe.naver.com/album/2176357', 'https://www.genie.co.kr/detail/albumInfo?axnm=80983275', 'https://www.music-flo.com/detail/album/ndaaodyo/albumtrack', 'https://music.bugs.co.kr/album/20117097?wl_ref=list_ab_03_ar', 1),
(3, 1, 'SNOW', '2017-12-04', '5th  Digital Single', 'snow.png', NULL, 'https://music.apple.com/id/album/snow-feat-lee-moon-sae-single/1320693320?l=id', 'https://open.spotify.com/album/3viVqPqPnrjrsUqRyg6QC6', 'https://www.melon.com/album/detail.htm?albumId=10114798', 'https://vibe.naver.com/album/2287582', 'https://www.genie.co.kr/detail/albumInfo?axnm=81006914', 'https://www.music-flo.com/detail/album/ndaiiony/albumtrack', 'https://music.bugs.co.kr/album/20133729?wl_ref=list_ab_03_ab', 2),
(4, 1, 'ZZZ', '2018-10-15', '3rd Mini Album', 'zzz.png', NULL, 'https://music.apple.com/id/album/zzz/1438831911?l=id', 'https://open.spotify.com/album/1h68ClpWp0bS59PAZuLk4X', 'https://www.melon.com/album/detail.htm?albumId=10212202', 'https://vibe.naver.com/album/2561529', 'https://www.genie.co.kr/detail/albumInfo?axnm=81111860', 'https://www.music-flo.com/detail/album/ndnddayd/albumtrack', 'https://music.bugs.co.kr/album/20200190?wl_ref=list_ab_03_ab', 3),
(5, 4, 'WHAT YOU WAITING FOR', '2019-03-06', '1st Digital Single', 'wywf.png', NULL, 'https://music.apple.com/id/album/what-you-waiting-for-single/1454603189?l=id', 'https://open.spotify.com/album/2YuKK7Pr7WPADeTUwaXrn1', 'https://www.melon.com/album/detail.htm?albumId=10257647', 'https://vibe.naver.com/album/2905109', 'https://www.genie.co.kr/detail/albumInfo?axnm=81168569', 'https://www.music-flo.com/detail/album/ndnieydo/albumtrack', 'https://music.bugs.co.kr/album/20234907?wl_ref=list_ab_03_ar', 1),
(6, 5, 'BIRTHDAY', '2019-06-13', '1st Digital Single', 'birthday.png', NULL, 'https://music.apple.com/id/album/birthday-single/1467846641?l=id', 'https://open.spotify.com/album/7GfqgsiW63VBNLRvIrhqLx', 'https://www.melon.com/album/detail.htm?albumId=10296482', 'https://vibe.naver.com/album/3068636', 'https://www.genie.co.kr/detail/albumInfo?axnm=81226575', 'https://www.music-flo.com/detail/album/edinaadzo/albumtrack', 'https://music.bugs.co.kr/album/20260104?wl_ref=list_ab_03_ar', 1),
(7, 6, 'MENNAL', '2019-10-02', '1st Digital Single', 'mennal.png', NULL, 'https://music.apple.com/id/album/mennal-feat-okasian-single/1481434264?l=id', 'https://open.spotify.com/album/2I5RgHEKPnCAqea3CxI4lL', 'https://www.melon.com/album/detail.htm?albumId=10334638', 'https://vibe.naver.com/album/3205311', 'https://www.genie.co.kr/detail/albumInfo?axnm=81275167', 'https://www.music-flo.com/detail/album/edilelhnh/albumtrack', 'https://music.bugs.co.kr/album/20280242?wl_ref=list_ab_03_ar', 1),
(8, 1, 'MAY', '2019-11-06', '6th Digital Single', 'may.png', NULL, 'https://music.apple.com/id/album/may/1486128074?l=id', 'https://open.spotify.com/album/2t7mzhYYKBkEaNVAkFyPAv', 'https://www.melon.com/album/detail.htm?albumId=10348389', 'https://vibe.naver.com/album/3401371', 'https://www.genie.co.kr/detail/albumInfo?axnm=81302011', 'https://www.music-flo.com/detail/album/edennohai/albumtrack', 'https://music.bugs.co.kr/album/20286923?wl_ref=list_ab_03_ab', 4),
(9, 6, 'EMERGENCY', '2020-02-04', '2nd Digital Single', 'emergency.png', '', 'https://music.apple.com/id/album/emergency-feat-zion-t-single/1497241245?l=id', 'https://open.spotify.com/album/4AmZD6pHiQlNvaV0oKmXXn', 'https://www.melon.com/album/detail.htm?albumId=10383629', 'https://vibe.naver.com/album/4436219', 'https://www.genie.co.kr/detail/albumInfo?axnm=81353228', 'https://www.music-flo.com/detail/album/edeineaay/albumtrack', 'https://music.bugs.co.kr/album/20303823?wl_ref=list_ab_03_ar', 2),
(10, 5, 'WHAT YOU WAITING FOR', '2020-07-22', '2nd Digital Single', 'wuwf.jpg', 'poster1.jpg', 'https://music.apple.com/id/album/what-you-waiting-for-single/1523801767?l=id', 'https://open.spotify.com/album/1JN6jZ6tFqVojR27UZc9QB', 'https://www.melon.com/album/detail.htm?albumId=10465041', 'https://vibe.naver.com/album/4696057', 'https://www.genie.co.kr/detail/albumInfo?axnm=81511793', 'https://www.music-flo.com/detail/album/edeozllhn/albumtrack', 'https://music.bugs.co.kr/album/20339385?wl_ref=list_ab_03', 2);

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
  `singer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id_artist`, `name`, `description`, `picture`, `instagram`, `facebook`, `twitter`, `soundcloud`, `singer`) VALUES
(1, 'Zion.T', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'ziont.jpg', 'https://www.instagram.com/ziont/', 'https://www.facebook.com/OfficialZionT/', 'https://twitter.com/SkinnyRed', NULL, 1),
(2, 'Peejay', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'peejay.png', 'https://www.instagram.com/_.peejay._/', NULL, 'https://twitter.com/producerpeejay', 'https://soundcloud.com/peejays-soundcloud', 0),
(3, 'Okasian', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'okasian.png', 'https://www.instagram.com/chrt_okasian/', NULL, 'https://twitter.com/realokasian', 'https://soundcloud.com/kkzznn', 1),
(4, 'R.Tee', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'rtee.png', 'https://www.instagram.com/rteeofficial/', NULL, 'https://twitter.com/rteemusic', NULL, 1),
(5, 'Somi', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'somi.png', 'https://www.instagram.com/somsomi0309/', 'https://www.facebook.com/somsomi.official/', 'https://twitter.com/somi_official_', NULL, 1),
(6, 'Vince', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'vince.png', 'https://www.instagram.com/vincesince19xx/', NULL, 'https://twitter.com/joejrhee', NULL, 1),
(7, 'Ella Gross', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'ella.jpg', 'https://www.instagram.com/ellagross/', NULL, NULL, NULL, 0),
(8, 'Heo Jae Hyuk', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'jaehyuk.png', 'https://www.instagram.com/augustbrody/', NULL, NULL, NULL, 0);

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
(1, 7, 'Heathers (TV Series)', 2018),
(2, 7, 'Teachers (TV Series)', 2019),
(3, 7, 'Malibu Rescue', 2019),
(4, 7, 'Malibu Rescue (TV Series)', 2019),
(5, 7, 'Star Trek: Picard (TV Series)', 2020),
(6, 7, 'Malibu Rescue: The Next Wave', 2020);

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
(1, 1, '11th Korean Music Awards [Best R&B/Soul Album]', 2014),
(2, 1, '7th MelOn Music Awards [Top 10 Artists]', 2015),
(3, 1, '17th Mnet Asian Music Awards [Best Vocal Performance - Male]', 2015),
(4, 1, '17th Mnet Asian Music Awards [Best Collaboration & Unit]', 2015),
(5, 1, '25th Seoul Music Awards [Bonsang Award]', 2016),
(6, 1, '30th Golden Disc Awards [Digital Bonsang]', 2016),
(7, 1, '5th Gaon Chart Music Awards [R&B Discovery of the Year]', 2016),
(8, 5, 'Korea First Brand Awards [CF Model]', 2017),
(9, 5, 'Mubeat Awards [Best Female Solo]', 2019);

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
(1, 8, 'May', '3\'16\"', 1),
(2, 4, 'Ideal', '1\'59\"', 1),
(3, 4, 'Hello Tutorial (Feat. Seulgi of Red Velvet)', '3\'22\"', 2),
(4, 4, 'My Luv', '3\'14\"', 3),
(5, 4, 'Malla Gang (Feat. E SENS)', '3\'03\"', 4),
(6, 4, 'Uh Huh', '1\'52\"', 5),
(7, 4, 'Sleep Talk (Feat. Oh Hyuk)', '2\'40\"', 6),
(8, 4, 'Untold Story', '3\'28\"', 7),
(9, 3, 'Snow (Feat. Lee Moon Sae)', '4\'00\"', 1),
(10, 1, 'Cinema', '3\'33\"', 1),
(11, 1, 'The Song', '3\'36\"', 2),
(12, 1, 'Comedian', '1\'53\"', 3),
(13, 1, 'Sorry (Feat. Beenzino)', '3\'06\"', 4),
(14, 1, 'The Bad Guys', '3\'34\"', 5),
(15, 1, 'Complex (Feat. G-Dragon of BIGBANG)', '3\'27\"', 6),
(16, 1, 'Wishes', '4\'13\"', 7),
(17, 1, 'Cinema (Instrumental)', '3\'32\"', 8),
(18, 6, 'Outta My Head', '3\'08\"', 1),
(19, 6, 'Birthday', '3\'05\"', 2),
(20, 7, 'Mennal (Feat. Okasian)', '3\'13\"', 1),
(21, 9, 'Emergency (Feat. Zion.T)', '3\'28\"', 1),
(22, 5, 'What You Waiting For (Feat. Anda)', '2\'54\"', 1),
(23, 10, 'What You Waiting For', '2\'55\"', 1),
(24, 2, 'After Summer Day (Feat. Yun Seokcheol & Jeong Yoo Jong)', '4\'46\"', 1),
(25, 2, 'Stranger (Feat. Crush)', '3\'35\"', 2),
(26, 2, 'Na B Ya (Feat. Zion.T)', '3\'59\"', 3),
(27, 2, 'Warigari (Feat. Kush & Taeyang of BIGBANG)', '3\'32\"', 4),
(28, 2, 'I Drive Slow (Feat. Beenzino)', '3\'36\"', 5),
(29, 2, 'Stay (Feat. Kumapark)', '2\'45\"', 6),
(30, 2, 'Say No (Feat. Masta Wu)', '3\'53\"', 7),
(31, 2, 'Thinking About You (Feat. B-Free)', '3\'53\"', 8),
(32, 2, 'Moonstruck (Feat. Qim Isle & Oh Hyuk)', '3\'49\"', 9),
(33, 2, 'Outro', '2\'21\"', 10);

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
(1, 4, 'Hello Tutorial (Feat. Seulgi of Red Velvet)', '2018-10-15', 'nqMYG2Riq54', 'hellotutorial.jpg'),
(2, 4, 'Uh Huh + Sleep Talk (Feat. Oh Hyuk)', '2018-11-18', 'xKMeaR9dsFE', 'uhhuh.jpg'),
(3, 8, 'May', '2019-11-06', 'I-hw1AkqFro', 'may.jpg'),
(4, 3, 'Snow (Feat. Lee Moon Sae)', '2017-12-04', 'fiGSDywrX1Y', 'snow.jpg'),
(5, 1, 'The Song', '2017-01-31', 'ecxzqqHwe-4', 'thesong.jpg'),
(6, 6, 'Birthday', '2019-06-13', 'oDJ4ct59NC4', 'birthday.jpg'),
(7, 7, 'Mennal (Feat. Okasian)', '2019-10-02', 'vvlNOzConrg', 'mennal.jpg'),
(8, 9, 'Emergency (Feat. Zion.T)', '2020-02-04', 'tXj_Viuvcrc', 'emergency.jpg'),
(9, 5, 'What You Waiting For (Feat. Anda)', '2019-03-06', 'u1xr0L1heHI', 'wywf.jpg'),
(10, 10, 'What You Waiting For', '2020-07-22', 'lBYyAQ99ZFI', 'wuwf.jpg'),
(11, 2, 'Na B Ya (Feat. Zion.T)', '2017-09-09', 'a0TjAq-a3kA', 'nabya.jpg');

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
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- Constraints for table `filmografi`
--
ALTER TABLE `filmografi`
  ADD CONSTRAINT `filmografi_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id_artist`);

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
