-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 10:09 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `username`, `password`) VALUES
(1, 'TBL Administrator', 'admin', 'edf66b28af1adeb9bf0baa08275f1488');

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

INSERT INTO `albums` (`id_album`, `id_artist`, `album_name`, `release_date`, `album_description`, `cover`, `itunes`, `spotify`, `melon`, `vibe`, `genie`, `flo`, `bugs`, `album_order`) VALUES
(6, 2, 'BIRTHDAY', '2019-06-13', '1st DIGITAL SINGLE', 'birthday.png', 'https://music.apple.com/us/album/birthday-single/1539386846', 'https://open.spotify.com/album/7GfqgsiW63VBNLRvIrhqLx', 'https://www.melon.com/album/detail.htm?albumId=10296482', 'https://vibe.naver.com/album/3068636', 'https://www.genie.co.kr/detail/albumInfo?axnm=81226575', 'https://www.music-flo.com/detail/album/edinaadzo/albumtrack', 'https://music.bugs.co.kr/album/20260104?wl_ref=list_ab_03_ar', 1),
(7, 3, 'MENNAL', '2019-10-02', '1st DIGITAL SINGLE', 'mennal.png', 'https://music.apple.com/id/album/mennal-feat-okasian-single/1481434264?l=id', 'https://open.spotify.com/album/2I5RgHEKPnCAqea3CxI4lL', 'https://www.melon.com/album/detail.htm?albumId=10334638', 'https://vibe.naver.com/album/3205311', 'https://www.genie.co.kr/detail/albumInfo?axnm=81275167', 'https://www.music-flo.com/detail/album/edilelhnh/albumtrack', 'https://music.bugs.co.kr/album/20280242?wl_ref=list_ab_03_ar', 1),
(9, 3, 'EMERGENCY', '2020-02-04', '2nd DIGITAL SINGLE', 'emergency.png', 'https://music.apple.com/us/album/emergency-feat-zion-t-single/1539561200', 'https://open.spotify.com/album/4AmZD6pHiQlNvaV0oKmXXn', 'https://www.melon.com/album/detail.htm?albumId=10383629', 'https://vibe.naver.com/album/4436219', 'https://www.genie.co.kr/detail/albumInfo?axnm=81353228', 'https://www.music-flo.com/detail/album/edeineaay/albumtrack', 'https://music.bugs.co.kr/album/20303823?wl_ref=list_ab_03_ar', 2),
(10, 2, 'WHAT YOU WAITING FOR', '2020-07-22', '2nd DIGITAL SINGLE', 'wuwf.jpg', 'https://music.apple.com/us/album/what-you-waiting-for-single/1523722876', 'https://open.spotify.com/album/1JN6jZ6tFqVojR27UZc9QB', 'https://www.melon.com/album/detail.htm?albumId=10465041', 'https://vibe.naver.com/album/4696057', 'https://www.genie.co.kr/detail/albumInfo?axnm=81511793', 'https://www.music-flo.com/detail/album/edeozllhn/albumtrack', 'https://music.bugs.co.kr/album/20339385?wl_ref=list_ab_03', 2),
(14, 4, 'WHAT YOU WAITING FOR', '2019-03-06', '1st DIGITAL SINGLE', 'wywf.png', 'https://music.apple.com/us/album/what-you-waiting-for-single/1539386376', 'https://open.spotify.com/album/2YuKK7Pr7WPADeTUwaXrn1', 'https://www.melon.com/album/detail.htm?albumId=10257647', 'https://vibe.naver.com/album/2905109', 'https://www.genie.co.kr/detail/albumInfo?axnm=81168569', 'https://www.music-flo.com/detail/album/ndnieydo/albumtrack', 'https://music.bugs.co.kr/album/20234907?wl_ref=list_ab_03_ar', 1),
(15, 1, 'OO', '2017-02-01', '2nd MINI ALBUM', 'oo.jpg', 'https://music.apple.com/us/album/oo/1539386426', 'https://open.spotify.com/album/20WQSlujuTbzd9d5V46mkc', 'https://www.melon.com/album/detail.htm?albumId=10035027', 'https://vibe.naver.com/album/1778329', 'https://www.genie.co.kr/detail/albumInfo?axnm=80918558', 'https://www.music-flo.com/detail/album/nddoyhnh/albumtrack', 'https://music.bugs.co.kr/album/20079828?wl_ref=list_ab_03_ab', 1),
(16, 1, 'SNOW', '2017-12-04', '4th DIGITAL SINGLE', 'snow.jpg', 'https://music.apple.com/us/album/snow-feat-lee-moon-sae-single/1539386512', 'https://open.spotify.com/album/5PEqgoVQje28EbUTKPbVFn', 'https://www.melon.com/album/detail.htm?albumId=10114798', 'https://vibe.naver.com/album/2287582', 'https://www.genie.co.kr/detail/albumInfo?axnm=81006914', 'https://www.music-flo.com/detail/album/ndaiiony/albumtrack', 'https://music.bugs.co.kr/album/20133729?wl_ref=list_ab_03_ab', 2),
(17, 1, 'ZZZ', '2018-10-15', '3rd MINI ALBUM', 'zzz.jpg', 'https://music.apple.com/us/album/zzz/1539386706', 'https://open.spotify.com/album/3jXVfwnqhI1wBwC2U416Ya', 'https://www.melon.com/album/detail.htm?albumId=10212202', 'https://vibe.naver.com/album/2561529', 'https://www.genie.co.kr/detail/albumInfo?axnm=81111860', 'https://www.music-flo.com/detail/album/ndnddayd/albumtrack', 'https://music.bugs.co.kr/album/20200190?wl_ref=list_ab_03_ab', 3),
(18, 1, 'MAY', '2019-11-06', '5th DIGITAL SINGLE', 'may.jpg', 'https://music.apple.com/us/album/may-single/1540535562', 'https://open.spotify.com/album/3NoWa3yoV4h6TvKYB1Ggfi', 'https://www.melon.com/album/detail.htm?albumId=10348389', 'https://vibe.naver.com/album/3401371', 'https://www.genie.co.kr/detail/albumInfo?axnm=81302011', 'https://www.music-flo.com/detail/album/edennohai/albumtrack', 'https://music.bugs.co.kr/album/20286923?wl_ref=list_ab_03_ab', 4);

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
  `commercial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id_artist`, `name`, `description`, `picture`, `instagram`, `facebook`, `twitter`, `soundcloud`, `commercial`) VALUES
(1, 'Zion.T', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'zion_t.png', 'https://www.instagram.com/ziont/', 'https://www.facebook.com/OfficialZionT', 'https://twitter.com/SkinnyRed', '', ''),
(2, 'Somi', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'jeonsomi.jpg', 'https://www.instagram.com/somsomi0309/', 'https://www.facebook.com/somsomi.official/', 'https://twitter.com/somi_official_', '', ''),
(3, 'Vince', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'joerhee.jpg', 'https://www.instagram.com/vincesince19xx/', '', 'https://twitter.com/joejrhee', '', ''),
(4, 'R.Tee', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'r_tee.png', 'https://www.instagram.com/rteeofficial/', '', 'https://twitter.com/rteemusic', '', ''),
(5, 'Ella Gross', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'ellagross.jpeg', 'https://www.instagram.com/ellagross/', '', '', '', 'Abercrombie & Fitch, Adidas, Airfish, Anta Kids, Barbie, Crayola, Fendi, GAP, Janie and Jack, Lamer, Levi\'s, OshKosh B\'gosh, The North Face, Tommy Hilfiger, Vogue, Zapos, Zara'),
(6, 'Heo Jae Hyuk', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati magnam eaque incidunt exercitationem debitis,                      tempore ducimus culpa sint voluptatum earum doloremque, recusandae dolores nihil error voluptatem consequuntur velit! Voluptate, dolorem.                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse facere tempore,                      adipisci tempora sapiente deleniti aut repellendus consequuntur quo, id quibusdam hic officia tenetur pariatur optio aliquam accusantium. Distinctio.', 'hjaehyuk.jpg', 'https://www.instagram.com/augustbrody/', '', '', '', 'Adekuver, Customellow, Uniqlo, Volkswagen Korea');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id_award` int(11) NOT NULL,
  `id_artist` int(11) NOT NULL,
  `nomination` varchar(200) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id_award`, `id_artist`, `nomination`, `year`) VALUES
(8, 2, 'Korea First Brand Awards [CF Model]', 2017),
(9, 2, 'Mubeat Awards [Best Female Solo]', 2019),
(10, 1, 'Gaon Chart Music Awards [R&B Discovery of the Year]', 2016),
(11, 1, 'Golden Disc Awards [Digital Bonsang]', 2016),
(12, 1, 'Seoul Music Awards [Bonsang Award]', 2016),
(13, 1, 'MelOn Music Awards [Top 10 Artists]', 2015),
(14, 1, 'Mnet Asian Music Awards [Best Vocal Performance - Male]', 2015),
(15, 1, 'Mnet Asian Music Awards [Best Collaboration & Unit]', 2015),
(16, 1, 'Korean Music Awards [Best R&B/Soul Album]', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `filmography`
--

CREATE TABLE `filmography` (
  `id_filmography` int(11) NOT NULL,
  `id_artist` int(11) NOT NULL,
  `film_title` varchar(100) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmography`
--

INSERT INTO `filmography` (`id_filmography`, `id_artist`, `film_title`, `year`) VALUES
(1, 5, 'Heathers (TV Series)', 2018),
(2, 5, 'Malibu Rescue (TV Series)', 2019),
(3, 5, 'Malibu Rescue', 2019),
(4, 5, 'Teachers (TV Series)', 2019),
(5, 5, 'Malibu Rescue: The Next Wave', 2020),
(6, 5, 'Star Trek: Picard (TV Series)', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id_notice` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `notice_img` varchar(100) NOT NULL,
  `notice_desc` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id_notice`, `title`, `date`, `notice_img`, `notice_desc`, `link`) VALUES
(1, 'Zion.T Comeback Teaser', '2019-10-28', 'ntc23.jpg', '', ''),
(2, 'Zion.T \'May\' Credit Poster', '2019-10-31', 'ntc24.jpg', '', ''),
(3, 'Zion.T \'May\' M/V Teaser #1', '2019-11-01', '', '', 'F8__T6Gi29Y'),
(4, 'Zion.T \'May\' M/V Teaser #2', '2019-11-04', '', '', 't9IR8YHevaw'),
(5, 'Zion.T \'May\' M/V', '2019-11-06', '', '', 'I-hw1AkqFro'),
(6, 'Zion.T #TwitterBlueroom Live Q&A', '2019-11-11', 'ntc25.jpg', '', ''),
(9, 'Merry Christmas From Somi', '2019-12-24', '', '', 'B92LPUpjPt0'),
(10, 'Vince Comeback Teaser', '2020-01-21', 'ntc16.jpg', '', ''),
(11, 'Vince Comeback Release Poster', '2020-01-23', 'ntc17.jpg', '', ''),
(12, 'Vince \'Emergency (Feat. Zion.T)\' Title Poster', '2020-01-28', 'ntc18.jpg', '', ''),
(13, 'Vince \'Emergency (Feat. Zion.T)\' Credit Poster', '2020-01-30', 'ntc19.jpg', '', ''),
(14, 'Vince \'Emergency (Feat. Zion.T)\' M/V Teaser', '2020-01-31', '', '', 'VIxKY0icpVk'),
(15, 'Vince \'Emergency (Feat. Zion.T)\' D-1 Poster', '2020-02-03', 'ntc20.jpg', '', ''),
(16, 'Vince \'Emergency (Feat. Zion.T)\' M/V', '2020-02-04', '', '', 'tXj_Viuvcrc'),
(17, 'Vince \'Emergency (Feat. Zion.T)\' M/V Behind The Scenes', '2020-02-11', '', '', 'lvkjptXALKI'),
(18, 'Somi [I Am Somi] Teaser', '2020-03-23', '', 'SOMI’S REALITY SERIES ‘I AM SOMI’ TEASER\r\n<br><br>\r\nTune in 2020.03.28 10PM (KST) on THEBLACKLABEL YouTube Channel\r\n<br><br>\r\nPLEASE SUBSCRIBE, LIKE, AND TURN ON NOTIFICATIONS', 'xQITjyspylA'),
(19, 'Somi [I Am Somi] Special Clip.01', '2020-03-26', '', '', 'Atew5Nrp8Lk'),
(20, 'Somi [I Am Somi] Ep.01', '2020-03-28', '', '', 'yrGyOJv6Yo8'),
(21, 'Somi [I Am somi] Ep.02', '2020-04-04', '', '', 'a8N3oD65zDE'),
(22, 'Somi [I Am Somi] Special Clip.02', '2020-04-09', '', '', 'jGAqC_lu9sA'),
(23, 'Somi [I Am Somi] Ep.03', '2020-04-11', '', '', 'iqnE39IxaYo'),
(24, 'Somi [I Am Somi] Special Clip.03', '2020-04-16', '', '', 'B9EL-_K1rr4'),
(25, 'Somi [I Am Somi] Ep.04', '2020-04-18', '', '', 'qBFm-0MQayw'),
(26, 'Somi [I Am Somi] Special Clip.04', '2020-04-23', '', '', 'R5w7Cs_OGI4'),
(27, 'Somi [I Am Somi] Ep.05', '2020-04-25', '', '', 'fL8tBgOFQCg'),
(28, 'Somi [I Am Somi] Special Clip.05', '2020-04-30', '', '', '20968fWhDUA'),
(29, 'Somi [I Am Somi] Ep.06', '2020-05-02', '', '', '2KOY2xx9N08'),
(30, 'Zion.T x Vince Facebook & Instagram Live', '2020-05-05', 'ntc21.jpg', '', ''),
(31, 'Somi [I Am Somi] Epilogue', '2020-05-09', '', '', 'okOKiME2W4A'),
(32, 'Somi\'s Debut 1st Anniversary Message', '2020-06-12', '', '', '5EbegY4fSC0'),
(33, 'Somi\'s 1 Year Anniversary', '2020-06-13', 'ntc22.jpg', 'In commemoration of the 1st anniversary of Jeon Somi\'s debut, V LIVE will be held at 7 o\'clock this evening.\r\n<br>\r\nSee you later at Vlive\r\n<br><br>\r\n2020.06.13 7PM (KST)\r\n<br>\r\nhttps://vlive.tv/video/197284', ''),
(34, 'SOMI COMEBACK TEASER', '2020-07-14', 'ntc10.jpg', '', ''),
(35, 'SOMI \'WHAT YOU WAITING FOR\' TITLE POSTER', '2020-07-15', 'ntc11.jpg', '', ''),
(36, 'SOMI \'WHAT YOU WAITING FOR\' CREDIT POSTER', '2020-07-16', 'ntc12.jpg', '', ''),
(37, 'SOMI \'WHAT YOU WAITING FOR\' M/V TEASER #1', '2020-07-17', '', '', 'AeVeEK05MZM'),
(38, 'SOMI \'WHAT YOU WAITING FOR\' TEASER POSTER', '2020-07-18', 'ntc13.jpg', '', ''),
(39, 'SOMI \'WHAT YOU WAITING FOR\' M/V TEASER #2', '2020-07-20', '', '', '6BEo7sQHv3U'),
(40, 'SOMI \'WHAT YOU WAITING FOR\' M/V TEASER #3', '2020-07-21', '', '', 'pNWveSm695Y'),
(41, 'SOMI \'WHAT YOU WAITING FOR\' D-DAY POSTER', '2020-07-22', 'ntc15.jpg', '', ''),
(42, 'SOMI \'WHAT YOU WAITING FOR\' M/V', '2020-07-22', '', '', 'lBYyAQ99ZFI'),
(43, 'SOMI \'WHAT YOU WAITING FOR\' M/V MAKING FILM', '2020-07-29', '', '', 'C9dHcIv8S50'),
(44, 'SOMI [I AM SOMI] SPECIAL EPISODE TEASER', '2020-09-10', '', 'SOMI\'S\'WHAT YOU WAITING FOR\' COMEBACK STORIES!\r\n<br><br>\r\nThe stories behind Somi\'s ‘WHAT YOU WAITING FOR’ comeback!\r\n<br><br>\r\nSaturday 10pm(KST) / Saturday 10pm(KST) on THEBLACKLABEL YouTube', '2ZeOTBECer8'),
(45, 'SOMI [I AM SOMI] SPECIAL EPISODE', '2020-09-12', '', '', 'y8Tc2OGO10w'),
(46, 'FIRE EXIT RECORDS PRESENTS : LØREN', '2020-11-08', 'ntc1.jpg', '', ''),
(47, 'LØREN DEBUT TEASER', '2020-11-09', 'ntc2.jpg', '', ''),
(48, 'LØREN DEBUT RELEASE POSTER', '2020-11-10', 'ntc3.jpg', '', ''),
(49, 'LØREN \'EMPTY TRASH\' TITLE POSTER', '2020-11-11', 'ntc4.jpg', '', ''),
(50, 'LØREN \'EMPTY TRASH\' M/V TEASER', '2020-11-12', '', '', '3rRb7OsxU9w'),
(51, 'LØREN \'EMPTY TRASH\' CREDIT POSTER', '2020-11-13', 'ntc5.jpg', '', ''),
(52, 'LØREN \'EMPTY TRASH\' M/V', '2020-11-13', '', '', '9f28Pi14g0w'),
(53, 'LØREN \'EMPTY TRASH\' M/V MAKING FILM', '2020-12-07', '', '', 'wg6QB0x1qm0'),
(54, 'SOMI CHRISTMAS SPECIAL LIVE EVENT [SOM ALONE]', '2020-12-15', 'ntc6.jpg', 'Date : 2020.12.23 (WED) PM 8 (KST)<br>\r\nStream on SOMI’s official TikTok @somi_official_<br><br>\r\nLink :<br>\r\nhttps://vt.tiktok.com/ZStYuGg2/', ''),
(55, 'Happy Birthday Somi', '2021-03-08', 'ntc8.jpg', '', ''),
(56, 'Happy Birthday Zion.T', '2021-04-12', 'ntc9.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id_song` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `tracknumber` int(10) NOT NULL,
  `lyricsby` varchar(500) NOT NULL,
  `composedby` varchar(500) NOT NULL,
  `arrangedby` varchar(500) NOT NULL,
  `is_title` tinyint(3) NOT NULL COMMENT '0=No, 1=Title, 2=Subtitle'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id_song`, `id_album`, `title`, `duration`, `tracknumber`, `lyricsby`, `composedby`, `arrangedby`, `is_title`) VALUES
(18, 6, 'Outta My Head', '3\'08\"', 1, 'Somi', 'Somi, 24', '24', 0),
(19, 6, 'Birthday', '3\'05\"', 2, 'Teddy, Brother Su, Bekuh Boom, Danny Chung', 'Teddy, 24, Bekuh Boom, Somi', '24, R.Tee', 1),
(20, 7, 'Mennal (Feat. Okasian)', '3\'13\"', 1, 'Vince, Okasian', 'Vince, 24, Dominsuk', 'Dominsuk, 24, Vince', 0),
(21, 9, 'Emergency (Feat. Zion.T)', '3\'28\"', 1, 'Vince, Zion.T', 'Vince, 24, Zion.T', '24, Vince, Park Junewoo', 0),
(23, 10, 'What You Waiting For', '2\'55\"', 1, 'Teddy, Somi, Danny Chung', 'Teddy, R.Tee, 24, Somi', 'R.Tee, 24', 0),
(24, 14, 'What You Waiting For (Feat. Anda)', '2\'54\"', 1, 'Vince, R.Tee, 1105', 'R.Tee, Vince, 1105', 'R.Tee', 0),
(25, 15, 'Cinema', '3\'33\"', 1, 'Zion.T', 'Zion.T, Peejay', 'Peejay', 0),
(26, 15, 'The Song', '3\'36\"', 2, 'Zion.T', 'Zion.T, Kush', 'Kush, Peejay', 1),
(27, 15, 'Comedian', '1\'53\"', 3, 'Zion.T', 'Zion.T, Yun Seok Cheol', 'Peejay', 0),
(28, 15, 'Sorry (Feat. Beenzino)', '3\'06\"', 4, 'Zion.T, Beenzino', 'Peejay, Zion.T, Seo Wonjin', 'Peejay', 0),
(29, 15, 'The Bad Guys', '3\'34\"', 5, 'Zion.T', 'Zion.T, Peejay', 'Peejay', 0),
(30, 15, 'Complex (Feat. G-Dragon of BIGBANG)', '3\'27\"', 6, 'Zion.T, G-Dragon, DJ Dopsh', 'Zion.T, Peejay, Slom', 'Peejay, Slom', 0),
(31, 15, 'Wishes', '4\'13\"', 7, 'Zion.T', 'Zion.T, Kush, Seo Wonjin', 'Seo Wonjin', 0),
(32, 15, 'Cinema (Instrumental)', '3\'32\"', 8, 'Zion.T', 'Zion.T, Peejay', 'Peejay', 0),
(33, 17, 'Ideal', '1\'59\"', 1, 'Zion.T', 'Vince, Zion.T, Park Junewoo', 'Vince', 0),
(34, 17, 'Hello Tutorial (Feat. Seulgi of Red Velvet)', '3\'22\"', 2, 'Zion.T', 'Zion.T, Peejay, Seo Wonjin', 'Peejay, Seo Wonjin', 1),
(35, 17, 'My Luv', '3\'14\"', 3, 'Zion.T', 'Peejay, Zion.T', 'Peejay', 0),
(36, 17, 'Malla Gang (Feat. E SENS)', '3\'03\"', 4, 'Zion.T, E SENS, DJ Dopsh', 'Peejay, Zion.T, Park Junewoo', 'Peejay', 0),
(37, 17, 'Uh Huh', '1\'52\"', 5, 'Zion.T', 'Peejay, Zion.T', 'Peejay', 0),
(38, 17, 'Sleep Talk (Feat. Oh Hyuk)', '2\'40\"', 6, 'Zion.T', 'Slom, Zion.T, Oh Hyuk', 'Slom', 0),
(39, 17, 'Untold Story', '3\'28\"', 7, 'Dear, Zion.T', 'Zion.T', 'Seo Wonjin, Park Junewoo', 0),
(40, 18, 'May', '3\'16\"', 1, 'Zion.T, Kim Eana', 'Zion.T, Seo Wonjin', 'Seo Wonjin, Park Junewoo', 0),
(41, 16, 'Snow (Feat. Lee Moon Sae)', '4\'00\"', 1, 'Zion.T', 'Zion.T, Slom. Yun Seok Cheol', 'Yun Seok Cheol', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `video_release_date` date NOT NULL,
  `link` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id_video`, `id_album`, `video_name`, `video_release_date`, `link`, `thumbnail`) VALUES
(6, 6, 'Birthday', '2019-06-13', 'oDJ4ct59NC4', 'birthday.jpg'),
(7, 7, 'Mennal (Feat. Okasian)', '2019-10-02', 'vvlNOzConrg', 'mennal.jpg'),
(8, 9, 'Emergency (Feat. Zion.T)', '2020-02-04', 'tXj_Viuvcrc', 'emergency.jpg'),
(10, 10, 'What You Waiting For', '2020-07-22', 'lBYyAQ99ZFI', 'wuwf.jpg'),
(11, 14, 'What You Waiting For (Feat. Anda)', '2019-03-06', 'u1xr0L1heHI', 'wywf.jpg'),
(12, 15, 'The Song', '2017-01-31', 'ecxzqqHwe-4', 'thesong.jpg'),
(13, 16, 'Snow (Feat. Lee Moon Sae)', '2017-12-04', 'fiGSDywrX1Y', 'snow.jpg'),
(14, 17, 'Hello Tutorial (Feat. Seulgi of Red Velvet)', '2018-10-15', 'nqMYG2Riq54', 'hellotut.jpg'),
(15, 18, 'May', '2019-11-06', 'I-hw1AkqFro', 'may.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id_award`) USING BTREE,
  ADD KEY `id_artist` (`id_artist`) USING BTREE;

--
-- Indexes for table `filmography`
--
ALTER TABLE `filmography`
  ADD PRIMARY KEY (`id_filmography`),
  ADD KEY `id_artist` (`id_artist`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id_notice`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id_song`) USING BTREE,
  ADD KEY `id_album` (`id_album`) USING BTREE;

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`) USING BTREE,
  ADD KEY `id_album` (`id_album`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id_award` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `filmography`
--
ALTER TABLE `filmography`
  MODIFY `id_filmography` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id_notice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id_artist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `awards`
--
ALTER TABLE `awards`
  ADD CONSTRAINT `awards_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id_artist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `filmography`
--
ALTER TABLE `filmography`
  ADD CONSTRAINT `filmography_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id_artist`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
