-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2015 at 01:34 AM
-- Server version: 5.5.41-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `logo_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `full`
--

CREATE TABLE IF NOT EXISTS `full` (
  `logo_id` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `full`
--

INSERT INTO `full` (`logo_id`, `location`) VALUES
(1, '../uploads/full/20th_century_fox.gif'),
(2, '../uploads/full/Acer.jpg'),
(3, '../uploads/full/Adata.jpg'),
(4, '../uploads/full/adidas.gif'),
(5, '../uploads/full/adobe.gif'),
(6, '../uploads/full/Alfa Romeo.jpg'),
(7, '../uploads/full/Alienware.JPG'),
(8, '../uploads/full/amd.gif'),
(9, '../uploads/full/Animal Planet.jpg'),
(10, '../uploads/full/Assasins Creed.jpg'),
(11, '../uploads/full/Asus.jpg'),
(12, '../uploads/full/atandt.gif'),
(13, '../uploads/full/atari.gif'),
(14, '../uploads/full/Avg.jpg'),
(15, '../uploads/full/Becks.jpg'),
(16, '../uploads/full/bic.gif'),
(17, '../uploads/full/Blogger.jpg'),
(18, '../uploads/full/Bluetooth.jpg'),
(19, '../uploads/full/bmw.gif'),
(20, '../uploads/full/bmw_mini.gif'),
(21, '../uploads/full/Bosch.jpg'),
(22, '../uploads/full/boeing.gif'),
(23, '../uploads/full/bp.gif'),
(24, '../uploads/full/campbells.gif'),
(25, '../uploads/full/canon.gif'),
(26, '../uploads/full/Casio.jpg'),
(27, '../uploads/full/Cisco.jpg'),
(28, '../uploads/full/coca-cola.gif'),
(29, '../uploads/full/Colgate.jpg'),
(30, '../uploads/full/Debian.png'),
(31, '../uploads/full/del_monte.gif'),
(32, '../uploads/full/discovery_channel.gif'),
(33, '../uploads/full/disney_entertainment.gif');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
`logo_id` int(10) NOT NULL,
  `logo_name` varchar(30) NOT NULL,
  `type` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `logo_description` text NOT NULL,
  `logo_question` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_name`, `type`, `status`, `logo_description`, `logo_question`) VALUES
(1, '20th century fox', 123, 1, '20th century fox des', '20th century fox ques'),
(2, 'Acer', 123, 0, 'acer des', 'acer ques'),
(3, 'Adata', 123, 0, 'adata des', 'adata ques'),
(4, 'adidas', 123, 0, 'adidas des', 'adidas ques'),
(5, 'adobe', 123, 0, 'adobe des \r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'adobe ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(6, 'alfa romeo', 123, 0, 'alfa romeo des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'alfa romeo ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(7, 'Alienware', 123, 0, 'Alienware des', 'alienware ques'),
(8, 'amd', 123, 0, ' amd des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'amd ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(9, 'animal planate', 123, 0, 'animal planate des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'animal planate ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(10, 'Assasins creed', 123, 0, 'Assasins creed des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'assasins creed ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(11, 'Asus', 123, 0, 'asus des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'asus ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(12, 'at & t', 123, 0, 'at & T des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'at & t ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(13, 'atari', 123, 1, 'atari des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'atari ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(14, 'Avg', 123, 0, 'avg des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'avg ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(15, 'becks', 123, 0, 'becks des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'becks ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(16, 'bic', 123, 0, 'bic des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'bic ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(17, 'blogger', 123, 1, 'bloger des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'bloger ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(18, 'bluetooth', 123, 1, 'bluetooth des', 'bluetooth ques'),
(19, 'bmw', 123, 0, 'bmw des\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.', 'bmw ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(20, 'bmw mini', 123, 1, 'bmw mini des', 'bmw mini ques'),
(21, 'bosch', 123, 0, 'bosch des', 'bosch ques'),
(22, 'boeing', 123, 1, 'boeing des', 'boeing ques'),
(23, 'bp', 123, 1, 'bp des', 'bp ques\r\nThe worldâ€™s largest cosmetics and beauty company.\r\nWith its registered office in Paris and head office in the Paris suburb of Clichy, Hauts-de-Seine, France, it has developed activities in the field of cosmetics.'),
(24, 'campbells', 123, 0, 'campbells des', 'campbells ques'),
(25, 'canon', 123, 1, 'canon des', 'canon ques'),
(26, 'casio', 123, 0, 'casio des', 'casio ques'),
(27, 'cisco', 123, 1, 'cisco des', 'cisco ques'),
(28, 'coca-cola', 123, 0, 'coca-cola des', 'coca-cola ques'),
(29, 'Colgate', 123, 1, 'colgate des', 'Colgate ques'),
(30, 'Debian', 123, 0, 'debian des', 'debin ques'),
(31, 'del monte', 123, 1, 'del monte des', 'del monte ques'),
(32, 'discovery channel', 123, 1, 'discovery channel des', 'discovery channel ques'),
(33, 'disney', 123, 0, 'disney des', 'disney ques');

-- --------------------------------------------------------

--
-- Table structure for table `round1_result`
--

CREATE TABLE IF NOT EXISTS `round1_result` (
  `team_id` int(6) unsigned NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `correct` int(11) DEFAULT '0',
  `wrong` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `round1_result`
--

INSERT INTO `round1_result` (`team_id`, `team_name`, `correct`, `wrong`, `status`, `active`) VALUES
(1, '', 2, 1, 1, 1),
(2, 'Dixit', 1, 2, -1, 0),
(3, '', 3, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `round2_result`
--

CREATE TABLE IF NOT EXISTS `round2_result` (
  `team_id` int(6) unsigned NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `correct` int(11) DEFAULT '0',
  `wrong` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `round2_result`
--

INSERT INTO `round2_result` (`team_id`, `team_name`, `correct`, `wrong`, `status`, `active`) VALUES
(1, '', 2, 1, 1, 1),
(3, '', 3, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `round3_result`
--

CREATE TABLE IF NOT EXISTS `round3_result` (
  `team_id` int(6) unsigned NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `correct` int(11) DEFAULT '0',
  `wrong` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `round3_result`
--

INSERT INTO `round3_result` (`team_id`, `team_name`, `correct`, `wrong`, `status`, `active`) VALUES
(1, '', 1, 2, -1, 0),
(3, '', 3, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `small`
--

CREATE TABLE IF NOT EXISTS `small` (
  `logo_id` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `small`
--

INSERT INTO `small` (`logo_id`, `location`) VALUES
(1, '../uploads/small/20th_century_fox_small.gif'),
(2, '../uploads/small/Acer_small.jpg'),
(3, '../uploads/small/Adata_small.jpg'),
(4, '../uploads/small/adidas_small.gif'),
(5, '../uploads/small/adobe_small.gif'),
(6, '../uploads/small/Alfa Romeo_small.jpg'),
(7, '../uploads/small/Alienware_small.png'),
(8, '../uploads/small/amd_small.gif'),
(9, '../uploads/small/Animal Planet_small.jpg'),
(10, '../uploads/small/Assasins Creed_small.jpg'),
(11, '../uploads/small/Asus_small.jpg'),
(12, '../uploads/small/atandt_small.gif'),
(13, '../uploads/small/atari_small.gif'),
(14, '../uploads/small/Avg_smaill.jpg'),
(15, '../uploads/small/Becks_small.jpg'),
(16, '../uploads/small/bic_small.gif'),
(17, '../uploads/small/Blogger_small.jpg'),
(18, '../uploads/small/Bluetooth_small.jpg'),
(19, '../uploads/small/bmw_small.gif'),
(20, '../uploads/small/bmw_mini_small.gif'),
(21, '../uploads/small/Bosch_small.jpg'),
(22, '../uploads/small/boeing_small.gif'),
(23, '../uploads/small/bp_small.gif'),
(24, '../uploads/small/campbells_small.gif'),
(25, '../uploads/small/canon_small.gif'),
(26, '../uploads/small/Casio_small.jpg'),
(27, '../uploads/small/Cisco_small.jpg'),
(28, '../uploads/small/coca-cola_small.gif'),
(29, '../uploads/small/Colgate_small.jpg'),
(30, '../uploads/small/Debian_small.png'),
(31, '../uploads/small/del_monte_small.gif'),
(32, '../uploads/small/discovery_channel_small.gif'),
(33, '../uploads/small/disney_entertainment_small.gif');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(6) unsigned NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `member` text NOT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `member`, `active`) VALUES
(1, '', ', ', 1),
(2, 'Dixit', 'Dixit, ', 1),
(3, '', ', ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team_result_dumy`
--

CREATE TABLE IF NOT EXISTS `team_result_dumy` (
  `team_id` int(6) unsigned NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `correct` int(11) DEFAULT '0',
  `wrong` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_result_dumy`
--

INSERT INTO `team_result_dumy` (`team_id`, `team_name`, `correct`, `wrong`, `status`, `active`) VALUES
(1, '', 0, 0, 0, 1),
(3, '', 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `full`
--
ALTER TABLE `full`
 ADD UNIQUE KEY `logo_id` (`logo_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
 ADD PRIMARY KEY (`logo_id`), ADD UNIQUE KEY `logo_name` (`logo_name`);

--
-- Indexes for table `round1_result`
--
ALTER TABLE `round1_result`
 ADD PRIMARY KEY (`team_id`), ADD UNIQUE KEY `team_name` (`team_name`);

--
-- Indexes for table `round2_result`
--
ALTER TABLE `round2_result`
 ADD PRIMARY KEY (`team_id`), ADD UNIQUE KEY `team_name` (`team_name`);

--
-- Indexes for table `round3_result`
--
ALTER TABLE `round3_result`
 ADD PRIMARY KEY (`team_id`), ADD UNIQUE KEY `team_name` (`team_name`);

--
-- Indexes for table `small`
--
ALTER TABLE `small`
 ADD PRIMARY KEY (`logo_id`), ADD UNIQUE KEY `logo_id` (`logo_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`team_id`), ADD UNIQUE KEY `team_name` (`team_name`);

--
-- Indexes for table `team_result_dumy`
--
ALTER TABLE `team_result_dumy`
 ADD PRIMARY KEY (`team_id`), ADD UNIQUE KEY `team_name` (`team_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
MODIFY `logo_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
