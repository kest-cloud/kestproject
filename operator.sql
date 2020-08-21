-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 12:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `operator`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinates`
--

CREATE TABLE `coordinates` (
  `id` int(11) NOT NULL,
  `coordinates` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinates`
--

INSERT INTO `coordinates` (`id`, `coordinates`) VALUES
(1, '2,38,144,19,157,46,169,75,176,98,181,127,181,152,172,152,168,143,124,143,117,135,74,137,67,146,21,151,19,144,23,132,27,122,29,116,25,91,20,73,6,51,4,38'),
(2, '146,18,153,35,159,46,166,64,171,78,177,96,179,109,182,126,182,128,217,129,244,127,246,74,242,72,243,68,246,65,244,55,239,54,238,8,145,18'),
(3, '239,8,240,31,240,53,243,53,246,57,247,62,247,66,244,72,247,73,247,88,246,113,246,128,240,128,240,140,260,139,260,159,290,159,293,165,300,162,309,161,321,160,335,160,331,133,335,129,335,113,330,114,330,97,375,99,385,89,385,89,375,70,366,57,358,50,342,49,328,43,322,41,316,33,300,20,297,4,240,8'),
(4, '386,89,376,100,363,100,341,99,331,98,331,112,336,112,336,130,332,133,332,138,333,144,336,161,375,160,428,162,431,170,443,170,449,174,453,176,473,164,467,158,462,151,457,144,451,136,450,129,448,124,444,121,438,117,430,114,422,110,414,110,403,107,397,105,394,103,386,90'),
(5, '375,161,427,163,431,171,443,171,453,177,474,165,479,168,528,167,548,187,550,193,552,200,552,207,551,213,547,224,533,246,482,233,372,231,372,198,377,198,375,162'),
(6, '218,130,240,128,240,140,259,140,259,160,289,160,291,163,292,166,297,164,302,163,317,161,335,161,335,162,374,162,376,197,372,197,372,232,367,233,367,243,368,249,361,250,352,251,345,253,337,256,330,258,323,259,314,258,313,254,269,253,269,249,275,248,274,226,246,227,246,246,228,245,227,222,232,218,231,197,230,171,219,173,217,130'),
(7, '122,142,124,144,167,144,171,153,182,153,182,129,217,130,219,173,229,173,231,196,194,197,190,204,174,209,172,205,162,205,163,210,158,217,123,214,121,179,122,142'),
(8, '21,152,69,147,75,138,118,136,123,143,122,161,124,214,103,218,93,245,87,244,51,244,45,176,39,169,32,168,22,157,22,153'),
(9, '103,219,92,244,109,259,109,272,131,293,227,282,227,222,231,219,231,197,194,197,191,203,176,210,172,203,165,207,160,217,123,215,103,218'),
(10, '228,247,247,246,247,227,274,228,276,248,269,248,269,253,312,254,314,259,327,259,351,252,365,251,367,282,362,285,360,321,351,322,352,334,338,334,338,326,235,337,227,282,229,246'),
(11, '368,235,369,249,366,251,367,282,362,286,361,322,449,320,448,306,457,305,461,309,499,307,504,290,520,273,533,247,481,233,374,231,370,235'),
(12, '408,322,450,321,450,311,449,307,458,305,462,311,499,309,499,315,535,342,536,355,547,385,547,398,539,412,530,417,509,424,491,423,483,429,473,414,432,412,431,391,413,391,408,322'),
(13, '353,323,408,321,413,391,430,392,432,412,352,418,352,393,333,395,333,386,345,383,346,370,350,370,352,324'),
(14, '234,338,336,326,337,334,351,334,352,369,347,370,346,381,333,387,333,394,352,394,353,419,299,419,285,420,272,420,250,422,238,382,234,337'),
(15, '227,282,238,381,178,389,177,406,136,407,135,402,95,402,101,384,105,370,108,355,111,345,118,341,118,322,128,315,129,291,227,282'),
(16, '95,403,134,404,136,408,178,408,178,439,160,443,161,450,162,470,165,473,166,484,47,485,49,480,52,476,54,474,57,469,62,464,63,451,80,428,92,414,95,403'),
(17, '179,391,238,383,255,435,251,500,222,501,220,499,217,497,213,497,210,498,207,500,165,500,166,472,163,469,161,444,178,439,179,392'),
(18, '250,422,354,420,354,417,357,417,356,453,360,457,362,493,322,495,319,498,318,500,315,503,282,504,281,500,251,501,255,435,253,431,250,422'),
(19, '358,417,471,412,480,431,477,434,475,439,473,445,477,447,482,450,482,455,481,461,480,465,475,471,469,475,466,477,458,480,451,486,447,494,443,503,437,512,364,511,360,456,356,453,357,417'),
(20, '333,495,362,494,363,513,437,513,436,518,435,546,430,548,425,551,420,555,417,565,415,575,415,581,414,587,413,597,395,621,345,620,344,613,346,613,342,564,339,557,336,554,332,495'),
(21, '252,502,281,501,282,505,315,504,322,496,332,496,336,552,343,563,345,613,272,615,272,611,244,611,244,597,250,597,250,575,247,560,246,553,245,546,247,539,249,534,251,527,251,502'),
(22, '169,500,208,501,211,498,214,498,217,498,221,502,251,501,250,525,249,529,247,534,246,539,245,543,246,556,248,568,250,577,249,597,176,596,176,593,167,594,169,500'),
(23, '47,486,164,484,165,500,168,501,166,593,138,594,139,599,140,603,134,613,108,609,111,600,75,587,77,572,71,572,59,568,51,561,51,556,75,526,75,520,61,506,56,503,51,501,47,494,47,486'),
(24, '138,594,167,595,176,593,176,597,243,598,244,611,240,673,178,672,178,647,135,646,134,613,136,611,138,608,140,604,139,595'),
(25, '245,610,271,610,272,614,344,612,345,620,396,620,396,625,397,631,406,644,406,657,420,685,421,697,405,700,397,678,377,680,377,701,337,703,340,685,278,689,274,678,267,676,260,705,239,705,240,673,246,610');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(3) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'Use of English'),
(2, 'Citizenship Education I'),
(3, 'Logic and Linear Algebra'),
(4, 'Trig. & Anal. Geom'),
(5, 'Introduction to Computing'),
(6, 'Introduction to Computer Programming'),
(7, 'Basic Programming'),
(8, 'Citizenship Education II'),
(9, 'Communication in English'),
(10, 'Java Programming'),
(11, 'Introduction to Internet'),
(12, 'Computer Packages'),
(13, 'Data Structure'),
(14, 'Entrepreneur Development');

-- --------------------------------------------------------

--
-- Table structure for table `docspool`
--

CREATE TABLE `docspool` (
  `id` int(11) NOT NULL,
  `downloads` int(11) NOT NULL DEFAULT '0',
  `delMindset` varchar(300) NOT NULL DEFAULT '0',
  `doctype` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `relpath` varchar(300) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `docspool`
--

INSERT INTO `docspool` (`id`, `downloads`, `delMindset`, `doctype`, `owner`, `relpath`, `docname`, `description`) VALUES
(1, 1, '1', 'text book', 'Abuzar Mochi', 'features/document/090 Final Project Topics.pdf', 'Use of English', 'good for setting the foundation'),
(2, 1, '1', 'maual', 'Mr. Ayeni', 'features/document/letterheaded.pdf', 'Use of English', 'follow your intuition'),
(3, 1, '1', 'pdf', 'Ben Joseph', 'document/fbi most wanted.PNG', 'Basic Programming', 'complete book'),
(4, 1, '1', 'kindle', 'Mc Carson', 'document/090 Final Project Topics.pdf', 'Introduction to Computing', 'Its an head first'),
(5, 1, '1', 'xhtml', 'Mr. Andrew', 'ownerpic/ownerpic.png', 'Use of English', 'Its good for all'),
(1705, 0, '1', 'kindle', 'Sobayo', 'document/PROJECT_TOPICSCPY.pdf', 'Citizenship Education I', 'its good for human right orientation'),
(1706, 0, '1', 'year 2', 'NBTE', '', 'Entrepreneur Development', 'introduction'),
(1707, 0, '1', 'kindle', 'Mr Abiodun', '', 'Basic Programming', 'its good for human right orientation'),
(1708, 1, '', 'pdf', '', 'kwasu/', '040471.pdf', ''),
(1709, 1, '', 'pdf', '', 'kwasu/', '04369b9d19c451a57e25b282ecefc03ae542.pdf', ''),
(1710, 0, '', 'pdf', '', 'kwasu/pdf', 'An_overview_of_Residue_Number_System.pdf', ''),
(1711, 4, '', 'pdf', '', 'kwasu/10.1.1.207.5562.pdf', '10.1.1.207.5562.pdf', ''),
(1712, 2, '', 'pdf', '', 'kwasu/EmbeddedBasedTailgating.pdf', 'EmbeddedBasedTailgating.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `position` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `eyesprob` varchar(4) NOT NULL,
  `depthknow` varchar(4) NOT NULL,
  `terms` varchar(4) NOT NULL,
  `confirm` varchar(4) NOT NULL,
  `willing` varchar(4) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `street`, `city`, `position`, `country`, `gender`, `birthday`, `nationality`, `eyesprob`, `depthknow`, `terms`, `confirm`, `willing`, `phone`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'admin', 'admin', 'admin', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(2, 'm', 'm', 'm', 'm', 'm', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(3, 'j', 'j', 'j', 'j', 'j', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(4, 'g', 'g', 'g', 'g', 'g', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(5, 'm', 'm', 'm', 'm', 'm', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(6, 'evans', 'teating', 'evans', 'pano', 'ken', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(7, 'benson', 'benson', 'ben', 'son', 'jay', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(8, 'johndoe@gmail.com', 'johndoe', 'John', 'Kennedy', 'Pencil', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(9, 'okikiola@gmail.com', 'okikila', 'Shittu', 'Rafiu', 'Temidayo', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(10, 'ola@gmail.com', 'jmmdcnxdd', 'hdndikxej', 'dijxxs', 'ddidkkjed', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(11, 'la@gmail.com', 'vfcr', 'rfcrf', 'rfdrdf', 'rfrfd', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(12, 'anifowosheyusuph@yahoo.com', 'just4testing', 'Yusuf', 'Anifowoshe', 'Atanda', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(13, 'yusuph@yahoo.com', 'penmedium', 'Yusuf', 'Anifowoshe', 'Atanda', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(14, 'cggvvv', 'benson', 'evans', 'henry', 'imri', 'user', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(15, 'bon@gmail.com', 'testing', 'matland', 'hide', 'shomolu', 'user', '1', 'male', '2020-01-16', '1', 'yes', 'yes', 'on', 'on', 'on', '7038102304'),
(16, 'simply@gmail.com', 'ae2b1fca515949e5d54fb22b8ed955', 'matland', 'hide', 'shomolu', 'user', '1', 'female', '1992-08-01', '1', 'Yes', 'yes', 'Yes', 'Yes', 'Yes', '7038102304');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `images` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `zone`, `images`) VALUES
(1, 6, 'images/1.png'),
(2, 7, 'images/2.png'),
(3, 8, 'images/3.png'),
(4, 9, 'images/4.png'),
(5, 10, 'images/5.png'),
(6, 11, 'images/6.png'),
(7, 12, 'images/7.png'),
(8, 13, 'images/8.png'),
(9, 14, 'images/9.png'),
(10, 15, 'images/10.png'),
(11, 16, 'images/11.png'),
(12, 17, 'images/12.png'),
(13, 18, 'images/13.png'),
(14, 19, 'images/14.png'),
(15, 20, 'images/15.png'),
(16, 21, 'images/16.png'),
(17, 22, 'images/17.png'),
(18, 23, 'images/18.png'),
(19, 24, 'images/19.png'),
(20, 25, 'images/20.png'),
(21, 26, 'images/21.png'),
(22, 27, 'images/22.png'),
(23, 28, 'images/23.png'),
(24, 29, 'images/24.png'),
(25, 30, 'images/25.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinates`
--
ALTER TABLE `coordinates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docspool`
--
ALTER TABLE `docspool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coordinates`
--
ALTER TABLE `coordinates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `docspool`
--
ALTER TABLE `docspool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1713;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
