-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2023 at 03:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblapplicants`
--

CREATE TABLE `tblapplicants` (
  `APPLICANTID` int(11) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `SEX` varchar(11) DEFAULT NULL,
  `CIVILSTATUS` varchar(30) DEFAULT NULL,
  `BIRTHDATE` date DEFAULT NULL,
  `BIRTHPLACE` varchar(255) DEFAULT NULL,
  `AGE` int(2) DEFAULT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CONTACTNO` varchar(90) DEFAULT NULL,
  `DEGREE` text DEFAULT NULL,
  `VERIFY_TOKEN` varchar(255) NOT NULL,
  `APPLICANTPHOTO` varchar(255) DEFAULT NULL,
  `NATIONALID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplicants`
--

INSERT INTO `tblapplicants` (`APPLICANTID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`, `CONTACTNO`, `DEGREE`, `VERIFY_TOKEN`, `APPLICANTPHOTO`, `NATIONALID`) VALUES
(2022023, 'Butz', 'Sayson', 'Magalong', 'Manila', 'Female', 'Single', '1962-01-17', 'Manila', 60, 'bsayson', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'djbutz6@gmail.com', '09452445257', 'College Graduate', '', '', ''),
(2022024, 'Samuel Cj', 'Sanchez', 'Dela Cruz', 'Magtaking SCCP', 'Male', 'none', '2001-03-21', 'SCCP', 21, 'samcj', '8cb2237d0679ca88db6464eac60da96345513964', 'samcj@gmail.com', '09452445457', 'College', '', 'photos/287898769_532487298604244_1142189291341027231_n.jpg', ''),
(2022026, '', '', '', 'asdsa', 'Female', 'Single', '0000-00-00', 'asd', 0, 'asdsa', 'f24e84445c27fdd906c828ce26a69222329235c4', '', 'asdsa', '', '', '', ''),
(2022030, '', '', '', 'asdas', 'Female', 'none', '0000-00-00', 'asdsa', 0, '', '8e545e1c31f91f777c894b3bd2c2e7d7044cc9dd', 'asdsa@gmail.com', 'asd', 'asdas', '', '', ''),
(2022031, '', '', '', 'asda', 'Female', 'none', '0000-00-00', 'asdas', 0, 'asda', '8e545e1c31f91f777c894b3bd2c2e7d7044cc9dd', 'asdsa@gmail.com', 'asdas', 'asd', '', '', ''),
(2022032, '', '', '', 'asd', 'Female', 'none', '0000-00-00', 'asd', 0, 'asdas', 'f10e2821bbbea527ea02200352313bc059445190', 'asd@gmail.com', 'asda', '', '', '', ''),
(2022034, '', '', 'as', 'asda', 'Female', 'Single', '0000-00-00', 'asdsa', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', 'asda', '', '', '', ''),
(2022035, '', '', '', 'asdsa', 'Female', 'Single', '0000-00-00', 'asdas', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'sample@gmail.com', 'asda', '', '', '', ''),
(2022039, '', '', 'ASD', 'ASD', 'Female', 'none', '0000-00-00', 'ASDA', 0, 'ASDAS', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'sample@gmail.com', 'ASD', '', '', '', ''),
(2022041, '', '', '', 'SADAS', 'Female', 'none', '0000-00-00', 'ASD', 0, 'ASDSA', '5271593ca406362d7a2701e331408ab77d5b5b88', 'SDA@GMAIL.COM', 'ASDAS', 'ASDSA', '', '', ''),
(2022044, '', '', '', 'sad', 'Female', 'none', '0000-00-00', 'asdsa', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'asdas@gmail.com', 'dsadas', '', '', '', ''),
(2022046, 'sample', 'sample', 'asda', 'asdas', 'Female', 'Single', '0000-00-00', 'asdsa', 0, 'asdas', '930a0029225aa4c28b8ef095b679285eaae27078', 'sample@gmail.com', 'asdsa', 'asdas', '', '', ''),
(2023054, 'asda', 'asda', 'asda', 'asdas', 'Female', 'Single', '0000-00-00', 'asda', 17, 'asd', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samplea@gmail.com', '123', 'dsada', '', '', ''),
(2023055, 'asda', 'sda', 'asda', 'sadsa', 'Female', 'none', '1995-02-15', '123', 27, 'asdsa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'zzcx@gmail.com', 'as123', 'asda', '', '', ''),
(2023057, 'asdas', 'asdsa', 'asd', 'sadas', 'Female', 'Widow', '1992-10-14', 'asdsa', 30, 'asda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'cxzcxzzcx@gmail.com', '1231', 'asdsa', '', '', ''),
(2023058, 'asdsa', 'asda', 'sada', 'dsa', 'Female', 'Single', '1992-11-16', 'asda', 30, 'adsa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'cxzcxzzcxasdsa@gmail.com', '123', 'asda', '', '', ''),
(2023060, 'asdad', 'asdasdsa', 'dsa', 'asdas', 'Female', 'Married', '1994-02-15', 'asdas', 28, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asdasdsa@gmail.com', 'sdad', 'asdasdas', '', '', ''),
(2023061, 'asdas', 'dsad', 'dsad', 'asda', 'Female', 'Married', '1996-02-18', 'asdsa', 26, 'asdasdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaaaa@gmail.com', '1231', 'asdasddsa', '', '', ''),
(2023062, 'adasdas', 'asdas', 'dsadasds', 'adas', 'Female', 'Single', '1997-10-16', 'asdsa', 25, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaaaaaaaaaaaa@gmail.com', '12312', 'asdas', '', '', ''),
(2023063, 'adasdas', 'asdas', 'dsadasds', 'adas', 'Female', 'Single', '1997-10-16', 'asdsa', 25, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaaaaaaaaaaaa@gmail.com', '12312', 'asdas', '', '', ''),
(2023064, 'adasdas', 'asdas', 'dsadasds', 'adas', 'Female', 'Single', '1997-10-16', 'asdsa', 25, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaaaaaaaaaaaa@gmail.com', '12312', 'asdas', '', '', ''),
(2023066, 'adas', 'adas', 'asdsa', 'dasda', 'Female', 'Married', '1994-01-14', 'asd', 29, 'asda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samplasde@gmail.com', '123', 'ada', '', '', ''),
(2023067, 'asdas', 'asda', 'asdsa', 'aasdsa', 'Female', 'Single', '1996-01-15', 'asdas', 27, 'sada', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaa@gmail.com', '123', 'adasd', '', '', ''),
(2023068, 'asdas', 'asda', 'asdsa', 'aasdsa', 'Female', 'Single', '1996-01-15', 'asdas', 27, 'sada', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaa@gmail.com', '123', 'adasd', '', '', ''),
(2023069, 'asda', 'dsad', 'asdsa', 'asda', 'Female', 'Single', '1995-01-15', 'adas', 28, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asdasaa@gmail.com', '123', 'asdada', '', '', ''),
(2023070, 'asda', 'adas', 'asda', 'asdsa', 'Female', 'Single', '1998-01-15', 'asdas', 25, 'asd', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaaaaaaaaaaaaaaaaaaa@gmail.com', '1231', 'asdsa', '', '', ''),
(2023071, 'asdsa', 'asdsad', 'sadsas', 'asdsadsa', 'Female', 'Single', '1995-01-15', 'asdsa', 28, 'adasdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleggjj@gmail.com', '1231', 'asdsada', '', '', ''),
(2023073, 'aasd', 'asdassda', 'dadasad', 'daadads', 'Female', 'Single', '1995-01-15', 'asdsa', 28, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sampleaaaaaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'asd', 'asdsa', '', '', ''),
(2023074, 'asdas', 'asdsa', 'asdsa', 'asda', 'Female', 'Single', '1994-01-14', 'dasdas', 29, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samplezzzz@gmail.com', '123', 'asdas', '', '', ''),
(2023075, 'adsasd', 'sadasdsa', 'dasdsa', 'dsadsa', 'Female', 'Single', '1994-01-15', 'asdsa', 29, 'asda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samplezzzzzzzzzzzzzzzzzzzz@gmail.com', '1231', 'asdas', '', '', ''),
(2023076, 'ASDASD', 'ASDSA', 'ASDA', 'SDAD', 'Female', 'Single', '1996-02-18', 'ASDA', 26, 'ASDAS', 'b0c7efa6f3eb8ed53ce2daf71679eab958609980', 'sample1@gmail.com', 'DSADSA', 'ADAS', '', '', ''),
(2023082, 'adsa', 'adsa', 'adsa', 'dasdsa', 'Female', 'Married', '1995-01-14', 'adsa', 28, 'sample', '8151325dcdbae9e0ff95f9f9658432dbedfdb209', 'sample02@gmail.com', '1231', 'sada', '', '', ''),
(2023083, 'asdsa', 'asdsa', 'asda', 'asda', 'Female', 'Single', '1995-01-15', 'asdsa', 28, 'password', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password@gmail.com', 'asda', 'password', '', '', ''),
(2023085, 'adsa', 'asdsa', 'asdsa', 'asdas', 'Female', 'Single', '1992-01-13', 'asdas', 31, '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samplezz@gmail.com', '123', '123', '', '', ''),
(2023088, 'asdsa', 'sadsa', 'adas', 'asda', 'Female', 'Single', '1995-01-31', 'zxcz', 27, 'asdas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'emmazzzzzzzzzn@gmail.com', '1231', 'asda', '', '', ''),
(2023089, 'dasda', 'asda', 'ddasd', 'asdsa', 'Female', 'Single', '1994-01-30', 'asda', 28, '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123@gmail.com', '121', 'sadsa', '', '', ''),
(2023090, 'ASDSA', 'DSD', 'DADSA', 'AD', 'Female', 'Single', '1997-04-18', '1231', 25, '123213123213', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samplAAAAe@gmail.com', '231', 'sadsa', '', NULL, NULL),
(2023091, 'asda', 'dsa', 'dsada', 'asda', 'Female', 'Single', '1997-01-31', 'sadsa', 26, 'sadsadsa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sadaasdsad@gmail.com', '2131', 'sample', '', NULL, NULL),
(2023093, 'sample', 'sada', 'dsadsa', 'sda', 'Female', 'Single', '1997-01-28', 'sadas', 26, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'sadassdaasd@gmail.com', '1231', 'saempl', 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblattachmentfile`
--

CREATE TABLE `tblattachmentfile` (
  `FILEID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(255) DEFAULT NULL,
  `FILE_LOCATION` varchar(255) DEFAULT NULL,
  `USERATTACHMENTID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblattachmentfile`
--

INSERT INTO `tblattachmentfile` (`FILEID`, `JOBID`, `FILE_NAME`, `FILE_LOCATION`, `USERATTACHMENTID`) VALUES
(1, 4, 'Resume', 'photos/', 2022037),
(2022, 4, 'Resume', 'photos/', 2022),
(2022030, 4, 'Resume', 'photos/', 2022030),
(2022031, 4, 'Resume', 'photos/', 2022031),
(2022032, 4, 'Resume', 'photos/', 2022032),
(2022033, 4, 'Resume', 'photos/', 2022033),
(2022034, 4, 'Resume', 'photos/', 2022034),
(2022035, 4, 'Resume', 'photos/', 2022035),
(2022040, 4, 'Resume', 'photos/', 2022040),
(2022041, 4, 'Resume', 'photos/', 2022041),
(2022042, 4, 'Resume', 'photos/', 2022042),
(2022043, 4, 'Resume', 'photos/', 2022043),
(2022044, 4, 'Resume', 'photos/', 2022044),
(2022045, 4, 'Resume', 'photos/', 2022045),
(2022048, 4, 'Resume', 'photos/', 2022048),
(2022049, 4, 'Resume', 'photos/', 2022049),
(2022050, 4, 'Resume', 'photos/', 2022050),
(2022051, 4, 'Resume', 'photos/', 2022051),
(2022052, 4, 'Resume', 'photos/', 2022052),
(2022053, 4, 'Resume', 'photos/', 2022053),
(2023053, 4, 'Resume', 'photos/', 2023053),
(2023054, 4, 'Resume', 'photos/', 2023054),
(2023055, 4, 'Resume', 'photos/', 2023055),
(2023057, 4, 'Resume', 'photos/07012023120236attendance-3B-1.doc', 2023057),
(2023058, 4, 'Resume', 'photos/07012023120328attendance-3B-1.doc', 2023058),
(2023059, 4, 'Resume', 'photos/09012023060803attendance-3B-1.doc', 2023059),
(2023060, 4, 'Resume', 'photos/16012023020032LEMON_EMMANUELJOSHUA_A..doc', 2023060),
(2023061, 4, 'Resume', 'photos/16012023020138LEMON_EMMANUELJOSHUA_A..doc', 2023061),
(2023062, 4, 'Resume', 'photos/16012023020313LEMON_EMMANUELJOSHUA_A..doc', 2023062),
(2023063, 4, 'Resume', 'photos/16012023020530LEMON_EMMANUELJOSHUA_A..doc', 2023063),
(2023064, 4, 'Resume', 'photos/16012023020612LEMON_EMMANUELJOSHUA_A..doc', 2023064),
(2023065, 4, 'Resume', 'photos/16012023020711LEMON_EMMANUELJOSHUA_A..doc', 2023065),
(2023066, 4, 'Resume', 'photos/16012023021105LEMON_EMMANUELJOSHUA_A..doc', 2023066),
(2023067, 4, 'Resume', 'photos/16012023021412LEMON_EMMANUELJOSHUA_A..doc', 2023067),
(2023068, 4, 'Resume', 'photos/16012023021436LEMON_EMMANUELJOSHUA_A..doc', 2023068),
(2023069, 4, 'Resume', 'photos/16012023021518LEMON_EMMANUELJOSHUA_A..doc', 2023069),
(2023070, 4, 'Resume', 'photos/16012023025006LEMON_EMMANUELJOSHUA_A..doc', 2023070),
(2023071, 4, 'Resume', 'photos/16012023025650LEMON_EMMANUELJOSHUA_A..doc', 2023071),
(2023072, 4, 'Resume', 'photos/16012023025957LEMON_EMMANUELJOSHUA_A..doc', 2023072),
(2023073, 4, 'Resume', 'photos/16012023030540LEMON_EMMANUELJOSHUA_A..doc', 2023073),
(2023074, 4, 'Resume', 'photos/16012023030845LEMON_EMMANUELJOSHUA_A..doc', 2023074),
(2023075, 4, 'Resume', 'photos/16012023032059LEMON_EMMANUELJOSHUA_A..doc', 2023075),
(2023076, 4, 'Resume', 'photos/16012023035821LEMON_EMMANUELJOSHUA_A..doc', 2023076),
(2023077, 6, 'Resume', 'photos/20012023103422attendance-3B-1.doc', 2023077),
(2023078, 6, 'Resume', 'photos/20012023103516attendance-3B-1.doc', 2023078),
(2023079, 4, 'Resume', 'photos/20012023103929attendance-3B-1.doc', 2023079),
(2023080, 4, 'Resume', 'photos/20012023104151attendance-3B-1.doc', 2023080),
(2023081, 4, 'Resume', 'photos/20012023110152attendance-3B-1.doc', 2023081),
(2023082, 4, 'Resume', 'photos/20012023111556attendance-3B-1.doc', 2023082),
(2023083, 4, 'Resume', 'photos/20012023114455attendance-3B-1.doc', 2023083),
(2023084, 4, 'Resume', 'photos/25012023034540attendance-3B-1.doc', 2023084),
(2023085, 4, 'Resume', 'photos/25012023034608attendance-3B-1.doc', 2023085),
(2023086, 4, 'Resume', 'photos/26012023071612attendance-3B-1.doc', 2023086),
(2023087, 4, 'Resume', 'photos/26012023071652attendance-3B-1.doc', 2023087),
(2023088, 4, 'Resume', 'photos/26012023071828attendance-3B-1.doc', 2023088),
(2023089, 4, 'Resume', 'photos/26012023072058attendance-3B-1.doc', 2023089),
(202200008, 4, 'Resume', 'photos/', 2022029),
(2022000013, 4, 'Resume', 'photos/', 2022036),
(2022000015, 4, 'Resume', 'photos/07122022054950mariel.docx', 2022046),
(2022000016, 4, 'Resume', 'photos/07122022055047mariel.docx', 2022047),
(2023000016, 4, 'Resume', 'photos/05012023061438attendance-3B-1.doc', 2023054),
(2023000017, 4, 'Resume', 'photos/', 2023055),
(2023000018, 4, 'Resume', 'photos/07012023115821attendance-3B-1.doc', 2023055),
(2023000019, 4, 'Resume', 'photos/07012023115910attendance-3B-1.doc', 2023056),
(2023000040, 4, 'Resume', 'photos/18032023024713attendance-3B-1.doc', 2023090),
(2023000041, 4, 'Resume', 'photos/18032023025734attendance-3B-1.doc', 2023091),
(2023000042, 4, 'Resume', 'photos/18032023025930attendance-3B-1.doc', 2023092),
(2023000045, 2, 'Resume', 'photos/18032023030448attendance-3B-1.doc', 2023093);

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 9, 1, 'userid'),
(2, '000', 81, 1, 'employeeid'),
(3, '0', 94, 1, 'APPLICANT'),
(4, '0000', 46, 1, 'FILEID');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGORYID` int(11) NOT NULL,
  `CATEGORY` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGORYID`, `CATEGORY`) VALUES
(10, 'Technology'),
(11, 'Managerial'),
(12, 'Engineer'),
(13, 'IT'),
(14, 'Civil Engineer'),
(15, 'HR'),
(23, 'Sales'),
(24, 'Banking'),
(25, 'Finance'),
(26, 'BPO'),
(27, 'Degital Marketing'),
(28, 'Shipping');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `COMPANYID` int(11) NOT NULL,
  `COMPANYNAME` varchar(90) NOT NULL,
  `COMPANYADDRESS` varchar(90) NOT NULL,
  `COMPANYCONTACTNO` varchar(30) NOT NULL,
  `COMPANYSTATUS` varchar(90) NOT NULL,
  `COMPANYMISSION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`COMPANYID`, `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`, `COMPANYSTATUS`, `COMPANYMISSION`) VALUES
(3, 'Copreros', 'Mabinay\'s', '035656', '', ''),
(4, 'Quest', 'Kabankalan Citya', '23165', '', ''),
(6, 'Palacios Company', 'Kabankalan City', '0625656899', '', ''),
(7, 'IT Company', 'Kabankalan Citya', '', '', ''),
(8, 'Samsung', 'Manila Q.C', '639 456 567', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `INCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `MNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(90) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(90) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` varchar(30) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `TELNO` varchar(40) NOT NULL,
  `EMP_EMAILADDRESS` varchar(90) NOT NULL,
  `CELLNO` varchar(30) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `WORKSTATS` varchar(90) NOT NULL,
  `EMPPHOTO` varchar(255) NOT NULL,
  `EMPUSERNAME` varchar(90) NOT NULL,
  `EMPPASSWORD` varchar(125) NOT NULL,
  `DATEHIRED` date NOT NULL,
  `COMPANYID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`INCID`, `EMPLOYEEID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `SEX`, `CIVILSTATUS`, `TELNO`, `EMP_EMAILADDRESS`, `CELLNO`, `POSITION`, `WORKSTATS`, `EMPPHOTO`, `EMPUSERNAME`, `EMPPASSWORD`, `DATEHIRED`, `COMPANYID`) VALUES
(78, '123', 'asda', 'dsad', 'dad', 'dasd', '1999-01-04', 'dsaa', 24, 'Female', 'Single', '123', 'dada@gmail.com', '', 'ad', '', '', '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-01-04', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FEEDBACKID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

CREATE TABLE `tbljob` (
  `JOBID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `CATEGORY` varchar(90) NOT NULL,
  `OCCUPATIONTITLE` varchar(90) NOT NULL,
  `REQ_NO_EMPLOYEES` int(11) NOT NULL,
  `SALARIES` double NOT NULL,
  `DURATION_EMPLOYEMENT` varchar(90) NOT NULL,
  `QUALIFICATION_WORKEXPERIENCE` text NOT NULL,
  `JOBDESCRIPTION` text NOT NULL,
  `PREFEREDSEX` varchar(30) NOT NULL,
  `SECTOR_VACANCY` text NOT NULL,
  `JOBSTATUS` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljob`
--

INSERT INTO `tbljob` (`JOBID`, `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`, `DATEPOSTED`) VALUES
(2, 8, 'Technology', 'Accounting', 100, 15000, 'may 20', 'Two years Experience', 'We are looking for bachelor of science in Acountancy', 'Female', 'yes', '', '2018-05-20 02:33:00'),
(4, 3, 'Managerial', 'asdsa', 100, 1231, 'asda', 'adad', 'asda', 'Male', 'Finance', '', '2023-01-23 05:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobregistration`
--

CREATE TABLE `tbljobregistration` (
  `REGISTRATIONID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `APPLICANT` varchar(90) NOT NULL,
  `REGISTRATIONDATE` date NOT NULL,
  `REMARKS` varchar(255) NOT NULL DEFAULT 'Pending',
  `FILEID` int(11) NOT NULL,
  `PENDINGAPPLICATION` tinyint(1) NOT NULL DEFAULT 1,
  `HVIEW` tinyint(1) NOT NULL DEFAULT 1,
  `DATETIMEAPPROVED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljobregistration`
--

INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `APPLICANTID`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `FILEID`, `PENDINGAPPLICATION`, `HVIEW`, `DATETIMEAPPROVED`) VALUES
(8, 3, 2, 2022023, 'Butz Sayson', '2022-07-02', 'Pending', 202200004, 1, 1, '2022-07-02 08:00:00'),
(9, 3, 2, 2022024, 'Samuel Cj Sanchez', '2022-07-02', 'Ready for Interview', 202200005, 0, 0, '2022-07-02 19:36:24'),
(16, 3, 2, 2022, ' ', '2022-12-07', 'Pending', 2022, 1, 1, '2022-12-07 17:14:00'),
(17, 8, 4, 2022039, ' ', '2022-12-07', 'Pending', 2022000014, 1, 1, '2022-12-07 17:17:00'),
(18, 8, 4, 2022041, ' ', '2022-12-07', 'Pending', 2022000014, 1, 1, '2022-12-07 17:24:00'),
(19, 8, 4, 2022044, ' ', '2022-12-07', 'Pending', 2022000015, 1, 1, '2022-12-07 17:31:00'),
(20, 8, 4, 2022046, 'sample sample', '2022-12-07', 'Pending', 2022000015, 1, 1, '2022-12-07 17:49:00'),
(21, 8, 4, 2023054, 'asda asda', '2023-01-05', 'Pending', 2023000016, 1, 1, '2023-01-05 06:14:00'),
(22, 8, 4, 2023055, 'asda sda', '2023-01-07', 'Pending', 2023000018, 1, 1, '2023-01-07 11:58:00'),
(23, 8, 4, 2023057, 'asdas asdsa', '2023-01-07', 'Pending', 2023057, 1, 1, '2023-01-07 12:02:00'),
(24, 8, 4, 2023058, 'asdsa asda', '2023-01-07', 'Pending', 2023058, 1, 1, '2023-01-07 12:03:00'),
(25, 8, 4, 2023060, 'asdad asdasdsa', '2023-01-16', 'Pending', 2023060, 1, 1, '2023-01-16 14:00:00'),
(26, 8, 4, 2023061, 'asdas dsad', '2023-01-16', 'Pending', 2023061, 1, 1, '2023-01-16 14:01:00'),
(27, 8, 4, 2023062, 'adasdas asdas', '2023-01-16', 'Pending', 2023062, 1, 1, '2023-01-16 14:03:00'),
(28, 8, 4, 2023063, 'adasdas asdas', '2023-01-16', 'Pending', 2023063, 1, 1, '2023-01-16 14:05:00'),
(29, 8, 4, 2023064, 'adasdas asdas', '2023-01-16', 'Pending', 2023064, 1, 1, '2023-01-16 14:06:00'),
(30, 8, 4, 2023066, 'adas adas', '2023-01-16', 'Pending', 2023066, 1, 1, '2023-01-16 14:11:00'),
(31, 8, 4, 2023067, 'asdas asda', '2023-01-16', 'Pending', 2023067, 1, 1, '2023-01-16 14:14:00'),
(32, 8, 4, 2023068, 'asdas asda', '2023-01-16', 'Pending', 2023068, 1, 1, '2023-01-16 14:14:00'),
(33, 8, 4, 2023069, 'asda dsad', '2023-01-16', 'Pending', 2023069, 1, 1, '2023-01-16 14:15:00'),
(34, 8, 4, 2023071, 'asda adas', '2023-01-16', 'Pending', 2023071, 1, 1, '2023-01-16 14:56:00'),
(35, 8, 4, 2023072, 'asdsa asdsad', '2023-01-16', 'Pending', 2023072, 1, 1, '2023-01-16 14:59:00'),
(36, 8, 4, 2023073, 'aasd asdassda', '2023-01-16', 'Pending', 2023073, 1, 1, '2023-01-16 15:05:00'),
(37, 8, 4, 2023074, 'asdas asdsa', '2023-01-16', 'Pending', 2023074, 1, 1, '2023-01-16 15:08:00'),
(38, 8, 4, 2023075, 'adsasd sadasdsa', '2023-01-16', 'Pending', 2023075, 1, 1, '2023-01-16 15:21:00'),
(39, 8, 4, 2023076, 'ASDASD ASDSA', '2023-01-16', 'Pending', 2023076, 1, 1, '2023-01-16 15:58:00'),
(40, 8, 4, 2023082, 'adsa adsa', '2023-01-20', 'Pending', 2023082, 1, 1, '2023-01-20 11:15:00'),
(41, 8, 4, 2023083, 'asdsa asdsa', '2023-01-20', 'Pending', 2023083, 1, 1, '2023-01-20 11:44:00'),
(42, 3, 4, 2023085, 'adsa asdsa', '2023-01-25', 'Pending', 2023085, 1, 1, '2023-01-25 15:46:00'),
(43, 3, 4, 2023088, 'asdsa sadsa', '2023-01-26', 'Pending', 2023088, 1, 1, '2023-01-26 07:18:00'),
(44, 3, 4, 2023089, 'dasda asda', '2023-01-26', 'Pending', 2023089, 1, 1, '2023-01-26 07:20:00'),
(45, 3, 4, 2023090, 'ASDSA DSD', '2023-03-18', 'Pending', 2023000040, 1, 1, '2023-03-18 02:47:00'),
(46, 3, 4, 2023091, 'asda dsa', '2023-03-18', 'Pending', 2023000041, 1, 1, '2023-03-18 02:57:00'),
(47, 8, 2, 2023093, 'sample sada', '2023-03-18', 'Pending', 2023000045, 1, 1, '2023-03-18 03:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `USERID` varchar(30) NOT NULL,
  `FULLNAME` varchar(40) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `ROLE` varchar(30) NOT NULL,
  `PICLOCATION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `FULLNAME`, `USERNAME`, `PASS`, `ROLE`, `PICLOCATION`) VALUES
('00018', 'Peso Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/077db70b-ab84-46c4-bbaa-a5dd6b7332a4_200x200.png'),
('029838', 'PESO Officer', 'peso', 'b0c7efa6f3eb8ed53ce2daf71679eab958609980', 'Staff', ''),
('122353465686786', 'Butz Sayson', 'Sayson', '30361dbd9c5afdf37237f35a5093ef83c56cbc59', 'Employee', ''),
('123', 'asda dsad', 'dsad', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Employee', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  ADD PRIMARY KEY (`APPLICANTID`);

--
-- Indexes for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD PRIMARY KEY (`FILEID`);

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGORYID`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`INCID`),
  ADD UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`FEEDBACKID`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`JOBID`);

--
-- Indexes for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD PRIMARY KEY (`REGISTRATIONID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  MODIFY `APPLICANTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023094;

--
-- AUTO_INCREMENT for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  MODIFY `FILEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023000046;

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGORYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `COMPANYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `FEEDBACKID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbljob`
--
ALTER TABLE `tbljob`
  MODIFY `JOBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  MODIFY `REGISTRATIONID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
