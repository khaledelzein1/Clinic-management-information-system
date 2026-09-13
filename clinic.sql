-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 12:04 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctorid` int(100) NOT NULL AUTO_INCREMENT,
  `doctorname` varchar(100) NOT NULL DEFAULT '',
  `doctorspeciality` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertypeid` int(10) NOT NULL,
  PRIMARY KEY (`doctorid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `doctorname`, `doctorspeciality`, `status`, `username`, `password`, `usertypeid`) VALUES
(2, 'KHALED SALIM', 'cardio', 'ACTIVE', 'kzein', 'kzein', 2),
(53, 'MAZEN AYOUBI', 'GENERAL', 'ACTIVE', 'mayoubi', 'mayoubi', 2),
(56, 'HASSAN YASSIN', 'GENERAL', 'ACTIVE', 'hyassin', 'hyassin', 2),
(57, 'NATHALIE KENAAN', 'GENERAL', 'ACTIVE', 'nkenaan', 'nkenaan', 2),
(58, 'SAID KHATIB', 'PULMONARY', 'ACTIVE', 'skhatib', 'skhatib', 2),
(65, 'Ahmad Sleiman', 'Cardio', 'ACTIVE', 'ahmad', 'ahmad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `employerid` int(100) NOT NULL AUTO_INCREMENT,
  `employername` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `adress` varchar(100) DEFAULT NULL,
  `phone` varchar(100) NOT NULL DEFAULT '',
  `registerdate` date NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `confirmpassword` varchar(100) NOT NULL DEFAULT '',
  `usertypeid` int(10) NOT NULL,
  PRIMARY KEY (`employerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employerid`, `employername`, `email`, `adress`, `phone`, `registerdate`, `username`, `password`, `confirmpassword`, `usertypeid`) VALUES
(1, 'khaled', 'khaled_amam@hotmail.com', 'akkar', '76158589', '2022-04-21', 'khaled', 'khaled', 'khaled', 1),
(3, 'mirella khally', 'mirella@hotmail.com', 'beirut', '76158589', '2022-04-21', 'mirella', 'mirella', 'mirella', 3),
(4, 'ali ashi', 'ali@hotmail.com', 'beirut', '76158589', '2022-04-21', 'ali', 'ali', 'ali', 4);

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE IF NOT EXISTS `immunization` (
  `immunizationid` int(100) NOT NULL AUTO_INCREMENT,
  `patientid` int(10) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `immunizationdate` date NOT NULL,
  `immunizationname` varchar(100) NOT NULL DEFAULT '',
  `doctornote` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`immunizationid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `immunization`
--

INSERT INTO `immunization` (`immunizationid`, `patientid`, `doctorid`, `immunizationdate`, `immunizationname`, `doctornote`) VALUES
(1, 70, 53, '2022-04-22', 'hepatitisA', 'A'),
(2, 70, 53, '2022-04-22', 'Hasbeh', 'tttt');

-- --------------------------------------------------------

--
-- Table structure for table `investigation`
--

CREATE TABLE IF NOT EXISTS `investigation` (
  `investigationid` int(100) NOT NULL AUTO_INCREMENT,
  `patientid` int(10) NOT NULL,
  `date` date NOT NULL,
  `history` varchar(100) NOT NULL DEFAULT '',
  `chiefcomplaint` varchar(100) NOT NULL DEFAULT '',
  `physicalexam` varchar(100) NOT NULL DEFAULT '',
  `diagnosis` varchar(100) NOT NULL DEFAULT '',
  `reservation1id` int(10) NOT NULL,
  `doctorid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`investigationid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `investigation`
--

INSERT INTO `investigation` (`investigationid`, `patientid`, `date`, `history`, `chiefcomplaint`, `physicalexam`, `diagnosis`, `reservation1id`, `doctorid`) VALUES
(1, 59, '2014-11-01', 'pain chest', 'pain', 'pain', 'hyperthermie', 0, NULL),
(2, 60, '2015-02-09', 'chest pain', 'pain', 'panic', 'hyper thyroid', 0, NULL),
(3, 61, '2016-02-05', 'chest pain', 'chest new pain', 'no panic', 'essential', 0, NULL),
(4, 63, '2016-08-01', 'general informations', 'allergic', 'no panic ', 'primary essentials ', 0, NULL),
(5, 65, '2017-02-17', 'chest pain', 'pain', 'chest pain', 'hypertension', 0, NULL),
(6, 67, '2021-10-28', 'kuhadkuhakdjh', 'chest pain', 'akshdkajhdkjahsdkjad', 'jasdjkhasdkjhaskdjhaskjdhaskjdhakjdsha', 0, NULL),
(7, 68, '2021-11-25', 'trytyryeyetetetrwet\r\nrtrt', 'chest pain', 'yes I think it chest pain', 'chest pain', 0, NULL),
(19, 60, '2022-04-24', 'test1', 'test1', 'test1', 'test1', 13, 53),
(20, 70, '2022-04-25', 'aha', 'hasdljka', 'shfiosfj', 'slhfsjfio', 13, 53),
(18, 70, '2022-04-22', 'qqq', 'qqq', 'qqq', 'qqq', 13, 53);

-- --------------------------------------------------------

--
-- Table structure for table `newclinic`
--

CREATE TABLE IF NOT EXISTS `newclinic` (
  `clinicid` int(10) NOT NULL AUTO_INCREMENT,
  `clinicname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`clinicid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `newclinic`
--

INSERT INTO `newclinic` (`clinicid`, `clinicname`, `status`) VALUES
(1, 'Cardio', 'ACTIVE'),
(2, 'Ophtalmo', 'ACTIVE'),
(4, 'ENT', 'ACTIVE'),
(6, 'Pulmonary', 'ACTIVE'),
(7, 'OBS', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(10) NOT NULL AUTO_INCREMENT,
  `patientid` int(10) NOT NULL,
  `reservation1id` int(10) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `ordertype` varchar(100) NOT NULL,
  `ordername` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `orderdate` date NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `patientid`, `reservation1id`, `doctorid`, `ordertype`, `ordername`, `notes`, `orderdate`) VALUES
(1, 70, 12, 53, 'Medication', 'panadol', '1 tablet every 4 hours', '2022-04-22'),
(2, 70, 12, 53, 'Laboratory', 'CBCD', 'test', '2022-04-22'),
(3, 70, 12, 53, 'Xray', 'chest xray', 'test', '2022-04-22'),
(4, 60, 13, 53, 'Xray', 'chest', 'notes', '2022-04-24'),
(5, 60, 13, 53, 'Xray', 'test1', 'test1', '2022-04-24'),
(6, 68, 14, 57, 'Medication', 'panadol', '1 tablet every 5 hours', '2022-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patientid` int(100) NOT NULL AUTO_INCREMENT,
  `patientfirstname` varchar(100) NOT NULL DEFAULT '',
  `patientadresse` varchar(100) NOT NULL DEFAULT '',
  `patientphone` varchar(100) NOT NULL DEFAULT '',
  `registernumber` varchar(100) NOT NULL DEFAULT '',
  `patientsexe` varchar(100) NOT NULL DEFAULT '',
  `patientnationality` varchar(100) NOT NULL DEFAULT '',
  `patientstatus` varchar(100) NOT NULL DEFAULT '',
  `patientbirthday` varchar(100) NOT NULL DEFAULT '',
  `patientregistrationdate` date NOT NULL,
  PRIMARY KEY (`patientid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `patientfirstname`, `patientadresse`, `patientphone`, `registernumber`, `patientsexe`, `patientnationality`, `patientstatus`, `patientbirthday`, `patientregistrationdate`) VALUES
(58, 'rabih wazneh', 'kafartoun', '70358036', '13', 'MALE', 'LEBANON', 'MARRIED', '03/04/1985', '2012-04-28'),
(59, 'khaled', 'tripoli', '76158589', '35', 'MALE', 'LEBANON', 'MARRIED', '04/03/1985', '2008-02-17'),
(60, 'khaled el zein', 'akkar', '76158589', '35', 'MALE', 'LEBANON', 'MARRIED', '04/03/1985', '2015-02-09'),
(61, 'ahmad el zein', '2ebbeh', '71385206', '39', 'MALE', 'LEBANON', 'MARRIED', '04/03/1965', '2016-02-05'),
(62, 'reem hankeer', 'berut', '71674644', '35', 'FEMELE', 'LEBANON', 'MARRIED', '01/01/1920', '2016-06-28'),
(63, 'ali chehab', 'berut', '71234567', '56', 'MALE', 'LEBANON', 'SINGLE', '01/1/1900', '2016-08-01'),
(64, 'salim', 'hjhjg', 'jhg', 'gjhg', 'MALE', 'LEBANON', 'SINGLE', 'iuyuiy', '2016-09-06'),
(65, 'elie', 'berut', '76158589', '35', 'MALE', 'LEBANON', 'SINGLE', '24/01/2017', '2017-02-17'),
(66, 'ew', 'hgf', 'hgf', '65', 'MALE', 'Bangladesh', 'SINGLE', '53636', '2021-09-28'),
(72, 'ahmad khaled zein', 'akkar', '75158589', '5', 'MALE', 'LEBANON', 'SINGLE', '04/03/1985', '2022-04-25'),
(68, 'alice ramadan', 'beirut', '76152523', '58', 'FEMELE', 'LEBANON', 'SINGLE', '03/03/1999', '2021-11-25'),
(69, 'alice ramadan', 'beirut', '76158525', '43', 'FEMELE', 'LEBANON', 'SINGLE', '03/02/1984', '2021-12-02'),
(70, 'bader el douja', 'tripoli2', '76152523', '42', 'FEMELE', 'LEBANON', 'SINGLE', '01/02/1985', '2022-04-22'),
(73, 'xxxx', 'xx', '654', '54', 'MALE', 'LEBANON', 'SINGLE', '02/01/1985', '2022-04-25'),
(74, 'merach', 'sef', '4533', '345', 'MALE', 'LEBANON', 'SINGLE', '21', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `referal`
--

CREATE TABLE IF NOT EXISTS `referal` (
  `referalid` int(100) NOT NULL AUTO_INCREMENT,
  `patientid` int(100) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `financial` varchar(100) NOT NULL DEFAULT '',
  `diagnosis` varchar(100) NOT NULL DEFAULT '',
  `tohospital` varchar(100) NOT NULL DEFAULT '',
  `referaldate` date NOT NULL,
  `notes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`referalid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `referal`
--

INSERT INTO `referal` (`referalid`, `patientid`, `doctorid`, `financial`, `diagnosis`, `tohospital`, `referaldate`, `notes`) VALUES
(4, 70, 53, 'army', 'chest pain', 'al salam', '2022-04-24', 'urgent case');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservationid` int(100) NOT NULL AUTO_INCREMENT,
  `patientid` int(100) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `clinicid` int(11) NOT NULL,
  `reservationdate` date NOT NULL,
  `reservationtime` varchar(100) NOT NULL DEFAULT '',
  `getdate` date NOT NULL,
  PRIMARY KEY (`reservationid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `reservation`
--


-- --------------------------------------------------------

--
-- Table structure for table `reservation1`
--

CREATE TABLE IF NOT EXISTS `reservation1` (
  `reservation1id` int(100) NOT NULL AUTO_INCREMENT,
  `patientid` int(100) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `clinicid` int(10) NOT NULL,
  `reservationdate` date NOT NULL,
  `reservationtime` varchar(10) NOT NULL DEFAULT '',
  `getdate` date NOT NULL,
  PRIMARY KEY (`reservation1id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `reservation1`
--

INSERT INTO `reservation1` (`reservation1id`, `patientid`, `doctorid`, `clinicid`, `reservationdate`, `reservationtime`, `getdate`) VALUES
(12, 70, 53, 2, '2022-04-22', '8:00', '2022-04-22'),
(13, 60, 53, 6, '2022-04-24', '9:00', '2022-04-24'),
(14, 68, 57, 7, '2022-04-24', '9:30', '2022-04-24'),
(95, 71, 57, 7, '2022-04-25', '9:00', '2022-04-25'),
(15, 71, 2, 1, '2022-04-25', '10:00', '2022-04-25'),
(16, 71, 2, 1, '2022-04-25', '9:00', '2022-04-25'),
(17, 70, 2, 1, '2022-04-24', '10:00', '2022-04-25'),
(18, 70, 2, 1, '2022-04-27', '8:00', '2022-04-27'),
(23, 70, 2, 0, '0000-00-00', '8:00', '2022-04-27'),
(24, 70, 2, 1, '2022-04-28', '8:00', '2022-04-27'),
(26, 70, 2, 1, '2022-04-28', '8:30', '2022-04-27'),
(27, 74, 53, 2, '2022-04-28', '8:00', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `sick`
--

CREATE TABLE IF NOT EXISTS `sick` (
  `sickid` int(100) NOT NULL AUTO_INCREMENT,
  `patientid` int(100) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `diagnosis` varchar(100) NOT NULL DEFAULT '',
  `day` varchar(10) NOT NULL DEFAULT '',
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`sickid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sick`
--

INSERT INTO `sick` (`sickid`, `patientid`, `doctorid`, `diagnosis`, `day`, `fromdate`, `todate`, `date`) VALUES
(1, 59, 0, 'hyperthermie', '2', '2014-11-01', '2014-11-03', '2014-11-01'),
(2, 60, 0, '12', '12', '2015-05-30', '2015-06-11', '2015-05-30'),
(3, 63, 0, 'primary ', '3', '2016-08-01', '2016-08-04', '2016-08-01'),
(4, 65, 0, 'hypertension', '5', '2017-02-17', '2017-02-21', '2017-02-17'),
(5, 60, 0, 'chest pain', '3', '2021-10-13', '2021-10-15', '2021-10-13'),
(6, 67, 0, 'Pain chest', '3', '2021-10-28', '2021-10-30', '2021-10-28'),
(7, 68, 0, 'chest pain', '3', '2021-11-25', '2021-11-28', '2021-11-25'),
(8, 60, 0, 'chest pain', '3', '2022-01-17', '2022-01-19', '2022-01-17'),
(9, 70, 53, 'Chest Pain', '3', '2022-04-24', '2022-04-27', '2022-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `usertypeid` int(100) NOT NULL AUTO_INCREMENT,
  `usertypedesc` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`usertypeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`usertypeid`, `usertypedesc`) VALUES
(1, 'Administrator'),
(2, 'Doctor'),
(3, 'Nurse'),
(4, 'Employer');

-- --------------------------------------------------------

--
-- Table structure for table `vital`
--

CREATE TABLE IF NOT EXISTS `vital` (
  `vitalid` int(100) NOT NULL AUTO_INCREMENT,
  `patientid` int(100) NOT NULL,
  `employerid` int(10) NOT NULL,
  `visitdat` varchar(10) NOT NULL DEFAULT '',
  `temperature` varchar(100) NOT NULL DEFAULT '',
  `height` varchar(100) NOT NULL DEFAULT '',
  `weight` varchar(100) NOT NULL DEFAULT '',
  `respiratoryrate` varchar(100) NOT NULL DEFAULT '',
  `bodyposition` varchar(100) NOT NULL DEFAULT '',
  `bloodpressure` varchar(100) NOT NULL DEFAULT '',
  `heartstatus` varchar(100) NOT NULL DEFAULT '',
  `heart` varchar(100) NOT NULL DEFAULT '',
  `notes` varchar(100) NOT NULL DEFAULT '',
  `reservation1id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vitalid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vital`
--

INSERT INTO `vital` (`vitalid`, `patientid`, `employerid`, `visitdat`, `temperature`, `height`, `weight`, `respiratoryrate`, `bodyposition`, `bloodpressure`, `heartstatus`, `heart`, `notes`, `reservation1id`) VALUES
(2, 70, 0, '2022-04-22', '23', '4', '234', '324', 'SITTING', '34', 'NORMAL', '234', '234242', 0),
(7, 68, 3, '2022-04-24', '23', '232', '233', '2', 'Lying', '23', 'Normal', '23', 'wrwrwrwr', 14),
(5, 70, 3, '2022-04-22', '23', '234', '24', '234', 'SITTING', '12', 'NORMAL', '243', '23424wsfsf', 12),
(6, 60, 3, '2022-04-22', '34', '122', '84', '33', 'LYING', '54', 'NORMAL', '53', 'fgdfgdgd', 13);
