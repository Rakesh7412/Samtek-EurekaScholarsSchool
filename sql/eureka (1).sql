-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 10:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eureka`
--

-- --------------------------------------------------------

--
-- Table structure for table `1stfees_details`
--

CREATE TABLE `1stfees_details` (
  `fid` int(11) NOT NULL,
  `finstallment` varchar(100) DEFAULT NULL,
  `ffee` varchar(100) DEFAULT NULL,
  `ffine` varchar(100) DEFAULT NULL,
  `flatefees` varchar(100) DEFAULT NULL,
  `freadmission_fee` varchar(100) DEFAULT NULL,
  `fchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `1stfees_details`
--

INSERT INTO `1stfees_details` (`fid`, `finstallment`, `ffee`, `ffine`, `flatefees`, `freadmission_fee`, `fchq_bounce`, `uid`, `sid`) VALUES
(1, '', '', '', '667', '6555', '', 21, 8),
(2, 'INST 3', '', '', '5646', '345', '32432', 21, 8),
(3, 'INST 2', '', '', '55', '544', '5545', 21, 8),
(6, 'INST 3', '23333.333333333', '200', '533', '100', '44', 21, 8),
(7, 'INST 2', '23333.333333333', '200', '400', '340', '500', 21, 8),
(8, 'INST 1', '23333.333333333', '200', '555', '55', '555', 21, 8),
(10, 'INST 1', '23333.333333333', '66.666666666667', '1', '1001', '1', 21, 9),
(11, 'INST 2', '23333.333333333', '66.666666666667', '100', '100', '100', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `1st_fees`
--

CREATE TABLE `1st_fees` (
  `fstfid` int(11) NOT NULL,
  `fstinstallments` varchar(50) DEFAULT NULL,
  `fstfees` varchar(50) DEFAULT NULL,
  `fstdiscount` varchar(50) DEFAULT NULL,
  `fstfine` varchar(50) DEFAULT NULL,
  `fstconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `1st_fees`
--

INSERT INTO `1st_fees` (`fstfid`, `fstinstallments`, `fstfees`, `fstdiscount`, `fstfine`, `fstconsession`) VALUES
(1, '4', '70000', '20%', '200', '500');

-- --------------------------------------------------------

--
-- Table structure for table `2ndfees_details`
--

CREATE TABLE `2ndfees_details` (
  `secnid` int(11) NOT NULL,
  `secninstallment` varchar(10) DEFAULT NULL,
  `secnfee` varchar(100) DEFAULT NULL,
  `secnfine` varchar(100) DEFAULT NULL,
  `secnlatefees` varchar(100) DEFAULT NULL,
  `secnreadmission_fee` varchar(100) DEFAULT NULL,
  `secnchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2ndfees_details`
--

INSERT INTO `2ndfees_details` (`secnid`, `secninstallment`, `secnfee`, `secnfine`, `secnlatefees`, `secnreadmission_fee`, `secnchq_bounce`, `uid`, `sid`) VALUES
(1, 'on,on', '0', '200', '333', '322', '2323', 21, 8),
(2, 'INST 1', '0', '200', '344', '3424', '32434', 21, 8),
(3, 'INST 2', '24333.333333333', '200', '453', '344', '34324', 21, 8),
(4, 'INST 1', '24333.333333333', '200', '100', '150', '500', 21, 8),
(5, 'INST 3', '24333.333333333', '200', '11', '11', '11', 21, 9),
(6, 'INST 1', '24333.333333333', '66.666666666667', '12', '15', '30', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `2nd_fees`
--

CREATE TABLE `2nd_fees` (
  `secfid` int(11) NOT NULL,
  `secinstallments` varchar(50) DEFAULT NULL,
  `secfees` varchar(50) DEFAULT NULL,
  `secdiscount` varchar(50) DEFAULT NULL,
  `secfine` varchar(50) DEFAULT NULL,
  `secconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2nd_fees`
--

INSERT INTO `2nd_fees` (`secfid`, `secinstallments`, `secfees`, `secdiscount`, `secfine`, `secconsession`) VALUES
(1, '3', '73000', '20%', '200', '500');

-- --------------------------------------------------------

--
-- Table structure for table `3rdfees_details`
--

CREATE TABLE `3rdfees_details` (
  `thrdfid` int(11) NOT NULL,
  `thrdinstallment` varchar(10) DEFAULT NULL,
  `thrdfee` varchar(100) DEFAULT NULL,
  `thrdfine` varchar(100) DEFAULT NULL,
  `thrdlatefees` varchar(100) DEFAULT NULL,
  `thrdreadmission_fee` varchar(100) DEFAULT NULL,
  `thrdchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `3rdfees_details`
--

INSERT INTO `3rdfees_details` (`thrdfid`, `thrdinstallment`, `thrdfee`, `thrdfine`, `thrdlatefees`, `thrdreadmission_fee`, `thrdchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 2', '25000', '200', '200', '150', '500', 21, 8),
(2, 'INST 3', '25000', '200', '400', '250', '500', 21, 8),
(3, 'INST 1', '25000', '66.666666666667', '100', '20', '50', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `3rd_fees`
--

CREATE TABLE `3rd_fees` (
  `thirdfid` int(11) NOT NULL,
  `thirdinstallments` varchar(50) DEFAULT NULL,
  `thirdfees` varchar(50) DEFAULT NULL,
  `thirddiscount` varchar(50) DEFAULT NULL,
  `thirdfine` varchar(50) DEFAULT NULL,
  `thirdconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `3rd_fees`
--

INSERT INTO `3rd_fees` (`thirdfid`, `thirdinstallments`, `thirdfees`, `thirddiscount`, `thirdfine`, `thirdconsession`) VALUES
(1, '3', '75000', '20%', '200', '600');

-- --------------------------------------------------------

--
-- Table structure for table `4thfees_details`
--

CREATE TABLE `4thfees_details` (
  `forfid` int(11) NOT NULL,
  `forinstallment` varchar(10) DEFAULT NULL,
  `forfee` varchar(100) DEFAULT NULL,
  `forfine` varchar(100) DEFAULT NULL,
  `forlatefees` varchar(100) DEFAULT NULL,
  `forreadmission_fee` varchar(100) DEFAULT NULL,
  `forchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `4thfees_details`
--

INSERT INTO `4thfees_details` (`forfid`, `forinstallment`, `forfee`, `forfine`, `forlatefees`, `forreadmission_fee`, `forchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 3', '26000', '200', '300', '250', '500', 21, 8),
(2, 'INST 2', '26000', '200', '300', '250', '500', 21, 8),
(3, 'INST 1', '26000', '200', '1000', '250', '500', 21, 8),
(4, 'INST 1', '26000', '66.666666666667', '30', '30', '50', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `4th_fees`
--

CREATE TABLE `4th_fees` (
  `forthfid` int(11) NOT NULL,
  `forthinstallments` varchar(50) DEFAULT NULL,
  `forthfees` varchar(50) DEFAULT NULL,
  `forthdiscount` varchar(50) DEFAULT NULL,
  `forthfine` varchar(50) DEFAULT NULL,
  `forthconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `4th_fees`
--

INSERT INTO `4th_fees` (`forthfid`, `forthinstallments`, `forthfees`, `forthdiscount`, `forthfine`, `forthconsession`) VALUES
(1, '3', '78000', '20%', '200', '600');

-- --------------------------------------------------------

--
-- Table structure for table `5thfees_details`
--

CREATE TABLE `5thfees_details` (
  `fiffid` int(11) NOT NULL,
  `fifinstallment` varchar(10) DEFAULT NULL,
  `fiffee` varchar(100) DEFAULT NULL,
  `fiffine` varchar(100) DEFAULT NULL,
  `fiflatefees` varchar(100) DEFAULT NULL,
  `fifreadmission_fee` varchar(100) DEFAULT NULL,
  `fifchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `5thfees_details`
--

INSERT INTO `5thfees_details` (`fiffid`, `fifinstallment`, `fiffee`, `fiffine`, `fiflatefees`, `fifreadmission_fee`, `fifchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 1', '27000', '200', '400', '350', '500', 21, 8),
(2, 'INST 2', '27000', '200', '400', '350', '600', 21, 8),
(3, 'INST 3', '27000', '200', '400', '450', '500', 21, 8),
(4, 'INST 1', '27000', '66.666666666667', '50', '50', '100', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `5th_fees`
--

CREATE TABLE `5th_fees` (
  `fifthfid` int(11) NOT NULL,
  `fifthinstallments` varchar(50) DEFAULT NULL,
  `fifthfees` varchar(50) DEFAULT NULL,
  `fifthdiscount` varchar(50) DEFAULT NULL,
  `fifthfine` varchar(50) DEFAULT NULL,
  `fifthconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `5th_fees`
--

INSERT INTO `5th_fees` (`fifthfid`, `fifthinstallments`, `fifthfees`, `fifthdiscount`, `fifthfine`, `fifthconsession`) VALUES
(1, '3', '81000', '20%', '200', '600');

-- --------------------------------------------------------

--
-- Table structure for table `6thfees_details`
--

CREATE TABLE `6thfees_details` (
  `sixid` int(11) NOT NULL,
  `sixinstallment` varchar(50) DEFAULT NULL,
  `sixfee` varchar(50) DEFAULT NULL,
  `sixfine` varchar(50) DEFAULT NULL,
  `sixlatefees` varchar(50) DEFAULT NULL,
  `sixreadmission_fee` varchar(50) DEFAULT NULL,
  `sixchq_bounce` varchar(50) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `6thfees_details`
--

INSERT INTO `6thfees_details` (`sixid`, `sixinstallment`, `sixfee`, `sixfine`, `sixlatefees`, `sixreadmission_fee`, `sixchq_bounce`, `uid`, `sid`) VALUES
(2, '3', '21250', '300', '322', 'w3e', '3224', 21, 8),
(3, 'INSt 4', '21250', '300', '322', '4535', '3224', 21, 8),
(4, 'INST 3', '21250', '300', '677', '65', '565', 21, 8),
(5, 'INST 2', '21250', '300', '1000', '300', '500', 21, 8),
(6, 'INST 4', '21250', '75', '10', '10', '50', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `6th_fees`
--

CREATE TABLE `6th_fees` (
  `sixthfid` int(11) NOT NULL,
  `sixthinstallments` varchar(50) DEFAULT NULL,
  `sixthfees` varchar(50) DEFAULT NULL,
  `sixthdiscount` varchar(50) DEFAULT NULL,
  `sixthfine` varchar(50) DEFAULT NULL,
  `sixthconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `6th_fees`
--

INSERT INTO `6th_fees` (`sixthfid`, `sixthinstallments`, `sixthfees`, `sixthdiscount`, `sixthfine`, `sixthconsession`) VALUES
(1, '4', '85000', '30%', '300', '650');

-- --------------------------------------------------------

--
-- Table structure for table `7thfees_details`
--

CREATE TABLE `7thfees_details` (
  `sevnfid` int(11) NOT NULL,
  `sevninstallment` varchar(10) DEFAULT NULL,
  `sevnfee` varchar(100) DEFAULT NULL,
  `sevnfine` varchar(100) DEFAULT NULL,
  `sevnlatefees` varchar(100) DEFAULT NULL,
  `sevnreadmission_fee` varchar(100) DEFAULT NULL,
  `sevnchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `7thfees_details`
--

INSERT INTO `7thfees_details` (`sevnfid`, `sevninstallment`, `sevnfee`, `sevnfine`, `sevnlatefees`, `sevnreadmission_fee`, `sevnchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 2', '22500', '300', '320', '200', '500', 21, 8),
(2, 'INST 3', '22500', '300', '400', '350', '600', 21, 8),
(3, 'INST 4', '22500', '75', '20', '100', '20', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `7th_fees`
--

CREATE TABLE `7th_fees` (
  `seventhfid` int(11) NOT NULL,
  `seventhinstallments` varchar(50) DEFAULT NULL,
  `seventhfees` varchar(50) DEFAULT NULL,
  `seventhdiscount` varchar(50) DEFAULT NULL,
  `seventhfine` varchar(50) DEFAULT NULL,
  `seventhconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `7th_fees`
--

INSERT INTO `7th_fees` (`seventhfid`, `seventhinstallments`, `seventhfees`, `seventhdiscount`, `seventhfine`, `seventhconsession`) VALUES
(1, '4', '90000', '30%', '300', '650');

-- --------------------------------------------------------

--
-- Table structure for table `8thfees_details`
--

CREATE TABLE `8thfees_details` (
  `eighfid` int(11) NOT NULL,
  `eighinstallment` varchar(10) DEFAULT NULL,
  `eighfee` varchar(100) DEFAULT NULL,
  `eighfine` varchar(100) DEFAULT NULL,
  `eighlatefees` varchar(100) DEFAULT NULL,
  `eighreadmission_fee` varchar(100) DEFAULT NULL,
  `eighchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `8thfees_details`
--

INSERT INTO `8thfees_details` (`eighfid`, `eighinstallment`, `eighfee`, `eighfine`, `eighlatefees`, `eighreadmission_fee`, `eighchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 1', '23250', '300', '4534', '453', '343', 21, 8),
(2, 'INST 4', '23250', '300', '4534', '34', '3424', 21, 8),
(3, 'INST 3', '23250', '300', '500', '300', '500', 21, 8),
(4, 'INST 1', '23250', '75', '100', '250', '50', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `8th_fees`
--

CREATE TABLE `8th_fees` (
  `eighthfid` int(11) NOT NULL,
  `eighthinstallments` varchar(50) DEFAULT NULL,
  `eighthfees` varchar(50) DEFAULT NULL,
  `eighthdiscount` varchar(50) DEFAULT NULL,
  `eighthfine` varchar(50) DEFAULT NULL,
  `eighthconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `8th_fees`
--

INSERT INTO `8th_fees` (`eighthfid`, `eighthinstallments`, `eighthfees`, `eighthdiscount`, `eighthfine`, `eighthconsession`) VALUES
(1, '4', '93000', '40%', '300', '700');

-- --------------------------------------------------------

--
-- Table structure for table `9thfees_details`
--

CREATE TABLE `9thfees_details` (
  `ninfid` int(11) NOT NULL,
  `nininstallment` varchar(10) DEFAULT NULL,
  `ninfee` varchar(100) DEFAULT NULL,
  `ninfine` varchar(100) DEFAULT NULL,
  `ninlatefees` varchar(100) DEFAULT NULL,
  `ninreadmission_fee` varchar(100) DEFAULT NULL,
  `ninchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `9thfees_details`
--

INSERT INTO `9thfees_details` (`ninfid`, `nininstallment`, `ninfee`, `ninfine`, `ninlatefees`, `ninreadmission_fee`, `ninchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 2', '24250', '400', '343', '33', '3433', 21, 8),
(2, 'INST 4', '24250', '400', '500', '150', '500', 21, 8),
(3, 'INST 3', '24250', '100', '50', '50', '100', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `9th_fees`
--

CREATE TABLE `9th_fees` (
  `ninthfid` int(11) NOT NULL,
  `ninthinstallments` varchar(50) DEFAULT NULL,
  `ninthfees` varchar(50) DEFAULT NULL,
  `ninthdiscount` varchar(50) DEFAULT NULL,
  `ninthfine` varchar(50) DEFAULT NULL,
  `ninthconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `9th_fees`
--

INSERT INTO `9th_fees` (`ninthfid`, `ninthinstallments`, `ninthfees`, `ninthdiscount`, `ninthfine`, `ninthconsession`) VALUES
(1, '4', '97000', '40%', '400', '700');

-- --------------------------------------------------------

--
-- Table structure for table `10thfees_details`
--

CREATE TABLE `10thfees_details` (
  `tenfid` int(11) NOT NULL,
  `teninstallment` varchar(10) DEFAULT NULL,
  `tenfee` varchar(100) DEFAULT NULL,
  `tenfine` varchar(100) DEFAULT NULL,
  `tenlatefees` varchar(100) DEFAULT NULL,
  `tenreadmission_fee` varchar(100) DEFAULT NULL,
  `tenchq_bounce` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `10thfees_details`
--

INSERT INTO `10thfees_details` (`tenfid`, `teninstallment`, `tenfee`, `tenfine`, `tenlatefees`, `tenreadmission_fee`, `tenchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 5', '30000', '350', '2222', '244', '500', 21, 8),
(2, 'INST 3', '30000', '350', '44', '34', '343', 21, 8),
(3, 'INST 1', '30000', '350', '33', '32', '32', 21, 8),
(4, 'INST 2', '30000', '350', '11', '11', '111', 21, 8),
(5, 'INST 5', '30000', '350', '340', '200', '100', 21, 8),
(7, 'INST 1', '30000', '350', '20', '20', '20', 21, 8),
(9, 'INST 4', '30000', '350', '33', '32', '32', 21, 8),
(10, 'INST 1', '30000', '70', '666', '666', '666', 21, 9),
(11, 'INST 2', '30000', '70', '20', '20', '200', 21, 9),
(12, 'INST 1', '30000', '70', '90', '90', '90', 21, 9);

-- --------------------------------------------------------

--
-- Table structure for table `10th_fees`
--

CREATE TABLE `10th_fees` (
  `tenthfid` int(11) NOT NULL,
  `tenthinstallments` varchar(50) DEFAULT NULL,
  `tenthfees` varchar(50) DEFAULT NULL,
  `tenthdiscount` varchar(50) DEFAULT NULL,
  `tenthfine` varchar(50) DEFAULT NULL,
  `tenthconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `10th_fees`
--

INSERT INTO `10th_fees` (`tenthfid`, `tenthinstallments`, `tenthfees`, `tenthdiscount`, `tenthfine`, `tenthconsession`) VALUES
(1, '5', '150000', '40%', '350', '500');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2022-01-01 10:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `ccode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `ccode`) VALUES
(3, '1testup', '1testup'),
(5, 'xyz', '123'),
(6, 'qwe', 'qwe'),
(7, 'w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `driverdetails`
--

CREATE TABLE `driverdetails` (
  `d_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `adhar` varchar(200) NOT NULL,
  `paddress` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `licensetype` varchar(200) NOT NULL,
  `license` varchar(200) NOT NULL,
  `expiry` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `vehicaltype` varchar(200) NOT NULL,
  `previous` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driverdetails`
--

INSERT INTO `driverdetails` (`d_id`, `name`, `address`, `adhar`, `paddress`, `mobile`, `licensetype`, `license`, `expiry`, `date`, `vehicaltype`, `previous`) VALUES
(1, 't', 't', 't', 't', 't', 'FVG', 't', '2022-05-01', '2022-05-01', 'Bus', 't'),
(2, 'as', 'as', 'as', 'as', 'as', 'MC EX50CC', 'as', '2022-05-09', '2022-05-09', 'Bus', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `eid` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `enq` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`eid`, `name`, `city`, `mobile`, `enq`, `email`, `message`) VALUES
(1, 'Test', 'Test', '9876543210', 'Grade 3', 'example@gmail.com', 'test'),
(2, 'Test1', 'Test', '9876543210', 'Grade 1', 'example@gmail.com', 'Test'),
(3, 'Test1.1', 'Test', '9876543210', 'Grade 1', 'example@gmail.com', 'Test'),
(4, 'Test1.2', 'Test', '9876543210', 'Playgroup', 'example@gmail.com', 'hi'),
(5, 'Contact test', 'contact test', '9876543210', '', 'example@gmail.com', 'contact test'),
(6, 'Contact test s', 'contact test', '9876543210', '', 'example@gmail.com', 'test'),
(7, 'Contact test s', 'contact test', '9876543210', '', 'example@gmail.com', ''),
(8, 'test ', 'test', 'test', '', 'test', 'test'),
(9, 'test ', 'test', 'test', '', 'test', 'test'),
(10, 'test ', 'test', 'test', '', 'test', 'test'),
(11, 'test', 'test', 'test', 'Nursery', 'test', 'test'),
(12, 'ttttt', 'ttttt', 'ttttt', 'Playgroup', 'tttttt', 'ttttttt'),
(13, 'ttttt', 'ttttt', 'ttttt', 'Junior KG', 'tttttt', 'tttt');

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `fid` int(11) NOT NULL,
  `pinstallment` varchar(10) DEFAULT NULL,
  `fee` varchar(100) DEFAULT NULL,
  `fine` varchar(100) DEFAULT NULL,
  `platefees` varchar(100) DEFAULT NULL,
  `preadmission_fee` varchar(100) DEFAULT NULL,
  `pchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees_details`
--

INSERT INTO `fees_details` (`fid`, `pinstallment`, `fee`, `fine`, `platefees`, `preadmission_fee`, `pchq_bounce`, `uid`, `sid`) VALUES
(15, 'Array', '25000', '100', '566', '4545', '3543', 21, 0),
(16, 'Array', '25000', '100', '566', '4545', '3543', 21, 8),
(17, '1', '25000', '100', '6546', '45646', '5446', 21, 8),
(24, '2', '25000', '100', '56655', '544', '54', 21, 8),
(26, '2', '25000', '100', '554', '45345', '43', 21, 8),
(27, '2', '25000', '100', '100', '150', '200', 21, 8),
(28, 'INST 2', '25000', '100', '2', '2', '2', 21, 8),
(29, 'INST 2', '25000', '100', '', '', '', 21, 9),
(30, 'INST 1', '25000', '100', '', '', '', 27, 9);

-- --------------------------------------------------------

--
-- Table structure for table `juniorfees_details`
--

CREATE TABLE `juniorfees_details` (
  `jrfid` int(11) NOT NULL,
  `jrinstallment` varchar(10) DEFAULT NULL,
  `jrfee` varchar(100) DEFAULT NULL,
  `jrfine` varchar(100) DEFAULT NULL,
  `jrlatefees` varchar(100) DEFAULT NULL,
  `jrreadmission_fee` varchar(100) DEFAULT NULL,
  `jrchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juniorfees_details`
--

INSERT INTO `juniorfees_details` (`jrfid`, `jrinstallment`, `jrfee`, `jrfine`, `jrlatefees`, `jrreadmission_fee`, `jrchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 1', '33000', '200', '656', '65', '565', 21, 8),
(2, 'INST 2', '33000', '200', '454', '433', '354', 21, 8),
(3, 'INST 1', '33000', '200', '33', '45', '100', 21, 8);

-- --------------------------------------------------------

--
-- Table structure for table `junior_fees`
--

CREATE TABLE `junior_fees` (
  `jfid` int(11) NOT NULL,
  `jinstallments` varchar(50) DEFAULT NULL,
  `jfees` varchar(50) DEFAULT NULL,
  `jdiscount` varchar(50) DEFAULT NULL,
  `jfine` varchar(50) DEFAULT NULL,
  `jconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `junior_fees`
--

INSERT INTO `junior_fees` (`jfid`, `jinstallments`, `jfees`, `jdiscount`, `jfine`, `jconsession`) VALUES
(1, '3', '66000', '20%', '200', '500');

-- --------------------------------------------------------

--
-- Table structure for table `notice1`
--

CREATE TABLE `notice1` (
  `nid1` int(200) NOT NULL,
  `notetitle1` varchar(500) NOT NULL,
  `notice1` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice1`
--

INSERT INTO `notice1` (`nid1`, `notetitle1`, `notice1`) VALUES
(26, '111qq', '111qq');

-- --------------------------------------------------------

--
-- Table structure for table `notice2`
--

CREATE TABLE `notice2` (
  `nid2` int(11) NOT NULL,
  `notetitle2` varchar(200) NOT NULL,
  `notice2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice2`
--

INSERT INTO `notice2` (`nid2`, `notetitle2`, `notice2`) VALUES
(2, 'gggg111', 'gggg111');

-- --------------------------------------------------------

--
-- Table structure for table `notice3`
--

CREATE TABLE `notice3` (
  `nid3` int(200) NOT NULL,
  `notetitle3` varchar(500) NOT NULL,
  `notice3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice3`
--

INSERT INTO `notice3` (`nid3`, `notetitle3`, `notice3`) VALUES
(6, 'AS', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `nurseryfees_details`
--

CREATE TABLE `nurseryfees_details` (
  `nrfid` int(11) NOT NULL,
  `nrinstallment` varchar(10) DEFAULT NULL,
  `nrfee` varchar(100) DEFAULT NULL,
  `nrfine` varchar(100) DEFAULT NULL,
  `nrlatefees` varchar(100) DEFAULT NULL,
  `nrreadmission_fee` varchar(100) DEFAULT NULL,
  `nrchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurseryfees_details`
--

INSERT INTO `nurseryfees_details` (`nrfid`, `nrinstallment`, `nrfee`, `nrfine`, `nrlatefees`, `nrreadmission_fee`, `nrchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 2', '32500', '100', '5465', '', '455', 21, 8),
(2, 'INST 1', '32500', '100', '333', '340', '344', 21, 8),
(3, 'INST 2', '32500', '100', '100', '200', '500', 21, 8),
(4, 'INST 1', '32500', '100', '500', '450', '500', 21, 8),
(5, 'INST 2', '32500', '100', '500', '500', '500', 21, 8);

-- --------------------------------------------------------

--
-- Table structure for table `nursery_fees`
--

CREATE TABLE `nursery_fees` (
  `nfid` int(11) NOT NULL,
  `ninstallments` varchar(50) DEFAULT NULL,
  `nfees` varchar(50) DEFAULT NULL,
  `ndiscount` varchar(50) DEFAULT NULL,
  `nfine` varchar(50) DEFAULT NULL,
  `nconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_fees`
--

INSERT INTO `nursery_fees` (`nfid`, `ninstallments`, `nfees`, `ndiscount`, `nfine`, `nconsession`) VALUES
(1, '4', '65000', '10%', '100', '400');

-- --------------------------------------------------------

--
-- Table structure for table `office_enq`
--

CREATE TABLE `office_enq` (
  `Oid` int(200) NOT NULL,
  `enqdate` varchar(200) NOT NULL,
  `childName` varchar(200) NOT NULL,
  `age` varchar(150) NOT NULL,
  `sgender` varchar(200) NOT NULL,
  `class` varchar(100) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `PschoolName` varchar(200) NOT NULL,
  `PschoolBoard` varchar(200) NOT NULL,
  `PschoolLeave` varchar(200) NOT NULL,
  `sfname` varchar(200) NOT NULL,
  `Occupation` varchar(200) NOT NULL,
  `FatherMNo` text NOT NULL,
  `femail` varchar(200) NOT NULL,
  `smname` varchar(200) NOT NULL,
  `MOccupation` varchar(200) NOT NULL,
  `MotherMNo` varchar(200) NOT NULL,
  `memail` varchar(200) NOT NULL,
  `Come` varchar(200) NOT NULL,
  `enqhandle` varchar(200) NOT NULL,
  `enqtype` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `followup` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office_enq`
--

INSERT INTO `office_enq` (`Oid`, `enqdate`, `childName`, `age`, `sgender`, `class`, `saddress`, `PschoolName`, `PschoolBoard`, `PschoolLeave`, `sfname`, `Occupation`, `FatherMNo`, `femail`, `smname`, `MOccupation`, `MotherMNo`, `memail`, `Come`, `enqhandle`, `enqtype`, `remark`, `followup`, `status`) VALUES
(16, '2022-03-17', 'asasas', '6', '2', '3rd', 'asaasssas', 'muynhtgb', 'asasas', 'asasa', 'tbtg', 'umjyhn', 'rtf', 'umjynh@gmail.com', 'mngfbty', 'tngbtg', 'asas', 'bruj@gmail.com', 'asas', 'tbntnbasasas', 'asasas', 'asas', 'asasas', 'asasas');

-- --------------------------------------------------------

--
-- Table structure for table `parentgate`
--

CREATE TABLE `parentgate` (
  `prntgid` int(100) NOT NULL,
  `sfirstname` varchar(100) NOT NULL,
  `smiddlename` varchar(100) NOT NULL,
  `slastname` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `person` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `outtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parentgate`
--

INSERT INTO `parentgate` (`prntgid`, `sfirstname`, `smiddlename`, `slastname`, `class`, `section`, `person`, `relation`, `mobile`, `reason`, `date`, `outtime`) VALUES
(4, 'test', 'test', 'test', 'Nursery', 'A', 'test', 'test', '', 'test', '2022-04-01', '12');

-- --------------------------------------------------------

--
-- Table structure for table `playgrp_fees`
--

CREATE TABLE `playgrp_fees` (
  `pfid` int(11) NOT NULL,
  `installments` varchar(50) DEFAULT NULL,
  `fees` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `fine` varchar(50) DEFAULT NULL,
  `consession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playgrp_fees`
--

INSERT INTO `playgrp_fees` (`pfid`, `installments`, `fees`, `discount`, `fine`, `consession`) VALUES
(1, '3', '50000', '10%', '100', '500');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proid` int(200) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `CategoryName` varchar(100) NOT NULL,
  `SubCategoryName` varchar(100) NOT NULL,
  `Dimension` varchar(100) NOT NULL,
  `Noofcontents` varchar(100) NOT NULL,
  `Specification` varchar(200) NOT NULL,
  `code` varchar(100) NOT NULL,
  `ColourPrint` varchar(100) NOT NULL,
  `ColourCode` varchar(100) NOT NULL,
  `Image1` varchar(100) DEFAULT NULL,
  `Image2` varchar(100) NOT NULL,
  `Image3` varchar(100) NOT NULL,
  `Image4` varchar(100) NOT NULL,
  `ProductDescription` varchar(200) NOT NULL,
  `ProductInformation` varchar(200) NOT NULL,
  `CareInstructions` varchar(200) NOT NULL,
  `Price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `ProductName`, `CategoryName`, `SubCategoryName`, `Dimension`, `Noofcontents`, `Specification`, `code`, `ColourPrint`, `ColourCode`, `Image1`, `Image2`, `Image3`, `Image4`, `ProductDescription`, `ProductInformation`, `CareInstructions`, `Price`) VALUES
(3, 'test', '2', '2', '', 'test', '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 'test', '3', '2', 'test', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 'test', '2', '2', 'test', 'test', '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 'test', '2', '2', 'test', 'test', 'test', 'test', 'test', 'test', '', '', '', '', '', '', '', 0),
(7, 'test', '2', '2', 'test', 'test', 'test', 'test', 'test', 'test', '', '', '', '', '', '', '', 0),
(8, 'test', '2', '2', 'test', 'test', 'test', 'test', 'test', 'test', '', '', '', '', '', '', '', 0),
(9, 'test', '2', '2', 'test', 'test', 'test', 'test', 'test', 'test', '', '', '', '', '', '', '', 0),
(10, 'test', '2', '2', 'test', 'v', 'test', 'test', 'test', 'test', '', '', '', '', '', '', '', 0),
(11, 'test', '2', '2', 'test', 'test', 'test', 'test', 'test', 'test', '', '', '', '', 'test', 'test', 'test', 1),
(12, 'test', '3', '2', 'test', 'test', 'test', 'test', 'test', 'test', '', '', '', '', 'Price', 'Price', 'Price', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sattendance`
--

CREATE TABLE `sattendance` (
  `atid` int(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `StudentName` varchar(200) NOT NULL,
  `ClassName` varchar(200) NOT NULL,
  `presence` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sattendance`
--

INSERT INTO `sattendance` (`atid`, `date`, `StudentName`, `ClassName`, `presence`) VALUES
(15, '2022-04-07', 'Rakesh ', '18', ''),
(16, '2022-04-05', 'Test', '18', ''),
(17, '2022-04-05', 'Test', '18', ''),
(18, '2022-04-07', 'Test', '18', ''),
(23, '2022-04-08', '[Roll No:105]----[Name:Rakesh ]', 'Nursery', ' Present'),
(24, '2022-04-08', '[Roll No:105]----[Name:Rakesh ]', 'Junior-KG', ' Present'),
(25, '2022-04-08', '[Roll No:105]----[Name:Rakesh ]', 'Senior-KG', ' Present'),
(26, '2022-04-08', '[Roll No:105]----[Name:Rakesh ]', 'Grade-1', ' Present'),
(27, '2022-04-08', '[Roll No:105]----[Name:Rakesh ]', 'Grade-2', ' Present'),
(28, '2022-04-08', '[Roll No:105]----[Name:Rakesh ]', 'Grade-3', ' Present'),
(29, '2022-04-08', '[Roll No:105]----[Name:Rakesh ]', 'Grade-4', ' Present'),
(30, '2022-04-08', '[Roll No:301]----[Name:Test]', 'Grade-5', ' Present'),
(36, '2022-05-07', '[Roll No:105]----[Name:Rakesh ]', 'Grade-1', ' Present'),
(37, '2022-05-07', '[Roll No:105]----[Name:Rakesh ]', 'Grade-1', ' Present'),
(38, '2022-05-07', '[Roll No:105]----[Name:Rakesh ]', 'Grade-1', ' Present'),
(39, '2022-05-07', '[Roll No:105]----[Name:Rakesh ]', 'Grade-1', ' Present'),
(40, '2022-05-07', '[Roll No:1]----[Name:Rohit ]', 'Grade-1', ' Present'),
(42, '2022-05-07', '[Roll No:301]----[Name:Test]', 'Grade-1', ' Present'),
(43, '2022-05-07', '[Roll No:301]----[Name:Test]', 'Grade-1', ' Present'),
(44, '2022-05-07', '[Roll No:301]----[Name:Test]', 'Grade-1', ' Present'),
(45, '2022-05-09', '[Roll No:0]----[Name:t]', 'Grade-1', ' Present'),
(46, '2022-05-09', '[Roll No:0]----[Name:t]', 'Grade-1', ' Present'),
(47, '2022-05-09', '[Roll No:1]----[Name:Rohit ]', 'Playgroup', ' Present'),
(48, '2022-05-09', '[Roll No:105]----[Name:Rakesh ]', 'Playgroup', ' Present'),
(49, '2022-05-09', '[Roll No:1]----[Name:Rohit ]', 'Grade-1', ' Present'),
(50, '2022-05-09', '[Roll No:0]----[Name:t]', 'Nursery', ' Present');

-- --------------------------------------------------------

--
-- Table structure for table `seniorfee_details`
--

CREATE TABLE `seniorfee_details` (
  `srfid` int(11) NOT NULL,
  `srinstallment` varchar(10) DEFAULT NULL,
  `srfee` varchar(100) DEFAULT NULL,
  `srfine` varchar(100) DEFAULT NULL,
  `srlatefees` varchar(100) DEFAULT NULL,
  `srreadmission_fee` varchar(100) DEFAULT NULL,
  `srchq_bounce` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seniorfee_details`
--

INSERT INTO `seniorfee_details` (`srfid`, `srinstallment`, `srfee`, `srfine`, `srlatefees`, `srreadmission_fee`, `srchq_bounce`, `uid`, `sid`) VALUES
(1, 'INST 2', '22666.666666667', '100', '323', '233', '1232', 21, 8),
(2, 'INST 1', '22666.666666667', '100', '400', '260', '500', 21, 8);

-- --------------------------------------------------------

--
-- Table structure for table `senior_fees`
--

CREATE TABLE `senior_fees` (
  `sfid` int(11) NOT NULL,
  `sinstallments` varchar(50) DEFAULT NULL,
  `sfees` int(50) DEFAULT NULL,
  `sdiscount` varchar(50) DEFAULT NULL,
  `sfine` varchar(50) DEFAULT NULL,
  `sconsession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senior_fees`
--

INSERT INTO `senior_fees` (`sfid`, `sinstallments`, `sfees`, `sdiscount`, `sfine`, `sconsession`) VALUES
(1, '3', 68000, '20%', '100', '500');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetails`
--

CREATE TABLE `staffdetails` (
  `tid` int(11) NOT NULL,
  `tfirstname` varchar(200) DEFAULT NULL,
  `tmiddlename` varchar(200) DEFAULT NULL,
  `tlastname` varchar(200) DEFAULT NULL,
  `tcampus` varchar(200) DEFAULT NULL,
  `temail` varchar(500) DEFAULT NULL,
  `tmobile` varchar(20) DEFAULT NULL,
  `tgender` varchar(10) DEFAULT NULL,
  `tdob` date NOT NULL,
  `taddress` varchar(500) DEFAULT NULL,
  `tcity` varchar(100) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffdetails`
--

INSERT INTO `staffdetails` (`tid`, `tfirstname`, `tmiddlename`, `tlastname`, `tcampus`, `temail`, `tmobile`, `tgender`, `tdob`, `taddress`, `tcity`, `uid`) VALUES
(4, 'new temp ', 'test new ', 'test ', 'test ', 'example@gmail.com', '9876543210', 'male', '2022-04-19', 'as', 'nsk', 23),
(5, 'new', 'test new ', 'test ', 'test ', 'example@gmail.com', '9876543210', '2', '2012-02-20', 'qw', 'nsk', 23),
(6, 'AS', '', 'AS', 'AS', 'AS@GMAIL.COM', 'ASDF', '3', '2022-05-01', 'FASDF', 'ASDF', 0),
(7, 'AS', '', 'AS', 'AS', 'AS@GMAIL.COM', 'ASDF', '3', '2022-05-01', 'FASDF', 'ASDF', 0),
(8, 'AS', 'AS', 'AS', 'AS', 'AS@GMAIL.COM', 'ASDF', '1', '0000-00-00', 'as', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffgate`
--

CREATE TABLE `staffgate` (
  `sid` int(200) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `outtime` varchar(200) NOT NULL,
  `intime` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffgate`
--

INSERT INTO `staffgate` (`sid`, `ename`, `designation`, `outtime`, `intime`, `reason`, `date`) VALUES
(7, 'q', 'qq', 'qq', 'q', 'q', '2022-05-04'),
(8, 'q', 'qq', '13:37', '18:25', 'q', '2022-05-04'),
(9, 'q', 'qq', '13:37', '18:25', 'q', '2022-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `sid` int(200) NOT NULL,
  `sfirstname` varchar(200) NOT NULL,
  `smiddlename` varchar(200) NOT NULL,
  `slastname` varchar(200) NOT NULL,
  `smname` varchar(200) NOT NULL,
  `sfname` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `campus` varchar(200) NOT NULL,
  `semail` varchar(200) NOT NULL,
  `smobile` varchar(20) NOT NULL,
  `sgender` varchar(100) NOT NULL,
  `scaste` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `sdob` varchar(100) NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `scity` varchar(100) NOT NULL,
  `shobbies` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`sid`, `sfirstname`, `smiddlename`, `slastname`, `smname`, `sfname`, `class`, `division`, `campus`, `semail`, `smobile`, `sgender`, `scaste`, `nationality`, `sdob`, `place_of_birth`, `saddress`, `scity`, `shobbies`, `uid`) VALUES
(2, 'Test', 'Test', 'Test', 'Test', 'Test', '', 'A', 'Test', 'example@gmail.com', '9876543210', 'male', '2022-03-16', '', '2022-03-16', 'Test', 'saddress', 'Test', 'Test', 23),
(3, 'test2', 'test2', 'test2', 'test2', 'test2', 'Nursery', 'A', 'test2', 'test2@gmail.com', '8421175712', 'male', 'test2', 'Indian', '2022-03-31', 'test2', 'test2', 'test2', 'test2', 23),
(4, '', '', '', '', '', 'Playgroup', '', '', '', '', '', '', '', '', '', '', '', '', 23),
(7, '2qqqq', '2qqqq', '2qqqq', 'qqqq', 'qqq', '', '', '', 'qqqq@gmail.com', '9123789020', '', '2022-05-03', '', '2022-05-03', 'q', 'saddress', 'q', 'q', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentgate`
--

CREATE TABLE `studentgate` (
  `sgid` int(11) NOT NULL,
  `sfirstname` varchar(100) NOT NULL,
  `smiddlename` varchar(100) NOT NULL,
  `slastname` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `person` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `outtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subid` int(100) NOT NULL,
  `ccname` varchar(100) NOT NULL,
  `scname` varchar(100) NOT NULL,
  `scode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subid`, `ccname`, `scname`, `scode`) VALUES
(1, 'xyz', 'qwe', 'qwe'),
(2, '7', 'w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(100) NOT NULL,
  `ClassName` varchar(100) NOT NULL,
  `ClassNameNumeric` int(100) NOT NULL,
  `Section` varchar(10) NOT NULL,
  `CreationDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1),
  `UpdationDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Playgroup', 1, 'A', '2022-05-12 06:35:03.5', '2022-05-12 06:35:03.5'),
(2, 'Grade-1', 1, 'A', '2022-05-12 06:37:19.1', '2022-05-12 06:37:19.1'),
(3, 'Grade-2', 2, 'A', '2022-05-12 06:37:32.5', '2022-05-12 06:37:32.5'),
(4, 'Grade-3', 3, 'A', '2022-05-12 06:37:46.8', '2022-05-12 06:37:46.8'),
(5, 'Grade-4', 4, 'A', '2022-05-12 06:37:58.4', '2022-05-12 06:37:58.4'),
(6, 'Grade-5', 4, 'A', '2022-05-12 06:38:15.7', '2022-05-12 06:38:15.7');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `noticeTitle` varchar(255) DEFAULT NULL,
  `noticeDetails` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `noticeTitle`, `noticeDetails`, `postingDate`) VALUES
(2, 'Notice regarding result Delearation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit ut aliquam purus. Vel risus commodo viverra maecenas. Et netus et malesuada fames ac turpis egestas sed. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Ornare arcu odio ut sem nulla pharetra diam. Vel pharetra vel turpis nunc eget lorem dolor sed. Velit ut tortor pretium viverra suspendisse. In ornare quam viverra orci sagittis eu. Viverra tellus in hac habitasse. Donec massa sapien faucibus et molestie. Libero justo laoreet sit amet cursus sit amet dictum. Dignissim diam quis enim lobortis scelerisque fermentum dui.\r\n\r\nEget nulla facilisi etiam dignissim. Quisque non tellus orci ac. Amet cursus sit amet dictum sit amet justo donec. Interdum velit euismod in pellentesque massa. Condimentum lacinia quis vel eros donec ac odio. Magna eget est lorem ipsum dolor. Bibendum at varius vel pharetra vel turpis nunc eget lorem. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Massa tincidunt dui ut ornare lectus sit amet est placerat. Nisi quis eleifend quam adipiscing vitae.', '2022-01-01 14:34:58'),
(3, 'Test Notice', 'This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  ', '2022-01-01 14:48:32'),
(0, 'test', 'test', '2022-04-05 09:26:21'),
(3, 'test', 'test', '2022-04-05 09:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(100) NOT NULL,
  `StudentId` int(100) NOT NULL,
  `ClassId` int(100) NOT NULL,
  `SubjectId` int(100) NOT NULL,
  `marks` int(100) NOT NULL,
  `PostingDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1),
  `UpdationDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(1, 9, 6, 1, 10, '2022-05-12 08:16:14.0', '2022-05-12 08:16:14.0'),
(2, 9, 6, 3, 10, '2022-05-12 08:16:14.2', '2022-05-12 08:16:14.2'),
(3, 9, 6, 3, 10, '2022-05-12 08:16:14.3', '2022-05-12 08:16:14.3');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(200) NOT NULL,
  `StudentName` varchar(200) NOT NULL,
  `RollId` varchar(500) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `ClassId` int(100) NOT NULL,
  `RegDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1),
  `UpdationDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Rohit 1', '1', 'rohit@gmail.com', '', '2022-04-28', 0, '2022-04-28 10:04:48.8', '2022-04-28 10:04:48.8', 1),
(6, 'Rakesh ', '105', 'example@gmail.com', 'male', '2022-03-14', 18, '2022-03-14 11:24:11.0', '2022-03-14 11:24:11.0', 1),
(8, 'Test', '301', 'example@gmail.com', 'male', '2022-03-16', 18, '2022-03-16 10:29:52.6', '2022-03-16 10:29:52.6', 1),
(9, 'Manoj', '101', 'Manoj@gmail.com', '1', '2022-11-11', 6, '2022-05-12 07:58:26.9', '2022-05-12 07:58:26.9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(100) NOT NULL,
  `ClassId` int(100) NOT NULL,
  `SubjectId` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  `CreationDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1),
  `Updationdate` timestamp(1) NOT NULL DEFAULT current_timestamp(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(1, 18, 0, 0, '2022-05-03 05:07:23.3', '2022-05-03 05:07:23.3'),
(7, 18, 2, 1, '2022-03-14 08:06:05.9', '2022-03-14 08:06:05.9'),
(8, 18, 4, 1, '2022-03-14 08:06:10.9', '2022-03-14 08:06:10.9'),
(9, 18, 5, 1, '2022-03-14 08:06:17.2', '2022-03-14 08:06:17.2'),
(10, 18, 9, 1, '2022-03-16 10:25:30.0', '2022-03-16 10:25:30.0'),
(11, 18, 5, 1, '2022-04-19 12:06:35.6', '2022-04-19 12:06:35.6'),
(12, 6, 1, 1, '2022-05-12 06:39:14.9', '2022-05-12 06:39:14.9'),
(13, 6, 2, 1, '2022-05-12 06:39:30.9', '2022-05-12 06:39:30.9'),
(14, 6, 3, 1, '2022-05-12 06:39:43.1', '2022-05-12 06:39:43.1'),
(15, 6, 3, 0, '2022-05-12 06:39:58.5', '2022-05-12 06:39:58.5');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(200) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp(1) NOT NULL DEFAULT current_timestamp(1),
  `UpdationDate` timestamp(1) NOT NULL DEFAULT current_timestamp(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'English', '101', '2022-05-12 06:25:48.1', '2022-05-12 06:25:48.1'),
(2, 'Marathi', '102', '2022-05-12 06:30:21.5', '2022-05-12 06:30:21.5'),
(3, 'History', '103', '2022-05-12 06:30:36.1', '2022-05-12 06:30:36.1'),
(4, 'Geo', '104', '2022-05-12 06:30:49.6', '2022-05-12 06:30:49.6'),
(5, 'Data', '105', '2022-05-12 06:31:13.6', '2022-05-12 06:31:13.6');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `vid` int(200) NOT NULL,
  `vehicaltype` varchar(200) NOT NULL,
  `vehicalnumber` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `fuel` varchar(200) NOT NULL,
  `maintainance` varchar(200) NOT NULL,
  `seat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`vid`, `vehicaltype`, `vehicalnumber`, `name`, `source`, `destination`, `route`, `fuel`, `maintainance`, `seat`) VALUES
(1, 'Van', 'as', '1', 'as', 'as', 'as', 'as', 'as', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `transport_student_staff`
--

CREATE TABLE `transport_student_staff` (
  `ssid` int(200) NOT NULL,
  `choice` varchar(200) NOT NULL,
  `stud_name` varchar(200) NOT NULL,
  `staff_name` varchar(11) NOT NULL,
  `class` varchar(200) NOT NULL,
  `vehicaltype` varchar(11) NOT NULL,
  `source` varchar(11) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `picku` varchar(200) NOT NULL,
  `dropu` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `charge` varchar(200) NOT NULL,
  `pending` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userslogin`
--

CREATE TABLE `userslogin` (
  `uid` int(11) NOT NULL,
  `name` varchar(2100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `cat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userslogin`
--

INSERT INTO `userslogin` (`uid`, `name`, `email`, `password`, `address`, `cat`) VALUES
(22, 'aaa', 'aaa@gmail.com', 'aaa', 'nashik road', 'Teacher'),
(23, 'Admin', 'admin@gmail.com', 'Admin123', 'Nashik', 'Principal'),
(24, 'janhavi jadhav', 'janhavi@gmail.com', 'janhavi', 'nashik road', 'Student'),
(25, 'bbbb', 'bbb@gmail.com', 'bbb', 'pune', 'parents'),
(26, 'Rakesh', 'example@gamil.com', '9876543210', 'nsk', 'Teacher'),
(27, 'Rakeh ', 'example@gmail.com', '9876543210', 'nsk', 'Student'),
(28, 'Rakeh ', 'example@gmail.com', '9876543210', 'nsk', 'Principal'),
(29, 'Rakesh', 'example@gmail.com', '9876543210', 'nsk', 'parents'),
(34, 's', 's@gmail.com', 's', 's', 'supervisor'),
(35, 'p', 'p@gmail.com', 'p', 'p', 'principal'),
(36, 'h', 'h@gmail.com', 'h', 'h', 'headm1'),
(37, 'h2', 'h2@gmail.com', 'h2', 'h', 'headm2'),
(38, 'c', 'c@gmail.com', 'c', 'c', 'crm'),
(39, 'p', 'p@gmail.com', 'p', 'p', 'parent'),
(40, 's', 's@gmail.com', 's', 's', 'student'),
(41, 'g', 'g@gmail.com', 'g', 'g', 'gate');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `vid` int(100) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `vcontact` varchar(100) NOT NULL,
  `vpurpose` varchar(100) NOT NULL,
  `vwhom` varchar(100) NOT NULL,
  `vrecord` varchar(100) NOT NULL,
  `vresponsible` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`vid`, `vname`, `vcontact`, `vpurpose`, `vwhom`, `vrecord`, `vresponsible`, `date`) VALUES
(0, 'qqq', '1234567890', 'test', 'test', 'test', 'test', '2022-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1stfees_details`
--
ALTER TABLE `1stfees_details`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `1st_fees`
--
ALTER TABLE `1st_fees`
  ADD PRIMARY KEY (`fstfid`);

--
-- Indexes for table `2ndfees_details`
--
ALTER TABLE `2ndfees_details`
  ADD PRIMARY KEY (`secnid`);

--
-- Indexes for table `2nd_fees`
--
ALTER TABLE `2nd_fees`
  ADD PRIMARY KEY (`secfid`);

--
-- Indexes for table `3rdfees_details`
--
ALTER TABLE `3rdfees_details`
  ADD PRIMARY KEY (`thrdfid`);

--
-- Indexes for table `3rd_fees`
--
ALTER TABLE `3rd_fees`
  ADD PRIMARY KEY (`thirdfid`);

--
-- Indexes for table `4thfees_details`
--
ALTER TABLE `4thfees_details`
  ADD PRIMARY KEY (`forfid`);

--
-- Indexes for table `4th_fees`
--
ALTER TABLE `4th_fees`
  ADD PRIMARY KEY (`forthfid`);

--
-- Indexes for table `5thfees_details`
--
ALTER TABLE `5thfees_details`
  ADD PRIMARY KEY (`fiffid`);

--
-- Indexes for table `5th_fees`
--
ALTER TABLE `5th_fees`
  ADD PRIMARY KEY (`fifthfid`);

--
-- Indexes for table `6thfees_details`
--
ALTER TABLE `6thfees_details`
  ADD PRIMARY KEY (`sixid`);

--
-- Indexes for table `6th_fees`
--
ALTER TABLE `6th_fees`
  ADD PRIMARY KEY (`sixthfid`);

--
-- Indexes for table `7thfees_details`
--
ALTER TABLE `7thfees_details`
  ADD PRIMARY KEY (`sevnfid`);

--
-- Indexes for table `7th_fees`
--
ALTER TABLE `7th_fees`
  ADD PRIMARY KEY (`seventhfid`);

--
-- Indexes for table `8thfees_details`
--
ALTER TABLE `8thfees_details`
  ADD PRIMARY KEY (`eighfid`);

--
-- Indexes for table `8th_fees`
--
ALTER TABLE `8th_fees`
  ADD PRIMARY KEY (`eighthfid`);

--
-- Indexes for table `9thfees_details`
--
ALTER TABLE `9thfees_details`
  ADD PRIMARY KEY (`ninfid`);

--
-- Indexes for table `9th_fees`
--
ALTER TABLE `9th_fees`
  ADD PRIMARY KEY (`ninthfid`);

--
-- Indexes for table `10thfees_details`
--
ALTER TABLE `10thfees_details`
  ADD PRIMARY KEY (`tenfid`);

--
-- Indexes for table `10th_fees`
--
ALTER TABLE `10th_fees`
  ADD PRIMARY KEY (`tenthfid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `driverdetails`
--
ALTER TABLE `driverdetails`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `fees_details`
--
ALTER TABLE `fees_details`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `juniorfees_details`
--
ALTER TABLE `juniorfees_details`
  ADD PRIMARY KEY (`jrfid`);

--
-- Indexes for table `junior_fees`
--
ALTER TABLE `junior_fees`
  ADD PRIMARY KEY (`jfid`);

--
-- Indexes for table `notice1`
--
ALTER TABLE `notice1`
  ADD PRIMARY KEY (`nid1`);

--
-- Indexes for table `notice2`
--
ALTER TABLE `notice2`
  ADD PRIMARY KEY (`nid2`);

--
-- Indexes for table `notice3`
--
ALTER TABLE `notice3`
  ADD PRIMARY KEY (`nid3`);

--
-- Indexes for table `nurseryfees_details`
--
ALTER TABLE `nurseryfees_details`
  ADD PRIMARY KEY (`nrfid`);

--
-- Indexes for table `nursery_fees`
--
ALTER TABLE `nursery_fees`
  ADD PRIMARY KEY (`nfid`);

--
-- Indexes for table `office_enq`
--
ALTER TABLE `office_enq`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `parentgate`
--
ALTER TABLE `parentgate`
  ADD PRIMARY KEY (`prntgid`);

--
-- Indexes for table `playgrp_fees`
--
ALTER TABLE `playgrp_fees`
  ADD PRIMARY KEY (`pfid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `sattendance`
--
ALTER TABLE `sattendance`
  ADD PRIMARY KEY (`atid`);

--
-- Indexes for table `seniorfee_details`
--
ALTER TABLE `seniorfee_details`
  ADD PRIMARY KEY (`srfid`);

--
-- Indexes for table `senior_fees`
--
ALTER TABLE `senior_fees`
  ADD PRIMARY KEY (`sfid`);

--
-- Indexes for table `staffdetails`
--
ALTER TABLE `staffdetails`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `staffgate`
--
ALTER TABLE `staffgate`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentgate`
--
ALTER TABLE `studentgate`
  ADD PRIMARY KEY (`sgid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `userslogin`
--
ALTER TABLE `userslogin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1stfees_details`
--
ALTER TABLE `1stfees_details`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `1st_fees`
--
ALTER TABLE `1st_fees`
  MODIFY `fstfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2ndfees_details`
--
ALTER TABLE `2ndfees_details`
  MODIFY `secnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `2nd_fees`
--
ALTER TABLE `2nd_fees`
  MODIFY `secfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `3rdfees_details`
--
ALTER TABLE `3rdfees_details`
  MODIFY `thrdfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `3rd_fees`
--
ALTER TABLE `3rd_fees`
  MODIFY `thirdfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `4thfees_details`
--
ALTER TABLE `4thfees_details`
  MODIFY `forfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `4th_fees`
--
ALTER TABLE `4th_fees`
  MODIFY `forthfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `5thfees_details`
--
ALTER TABLE `5thfees_details`
  MODIFY `fiffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `5th_fees`
--
ALTER TABLE `5th_fees`
  MODIFY `fifthfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `6thfees_details`
--
ALTER TABLE `6thfees_details`
  MODIFY `sixid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `6th_fees`
--
ALTER TABLE `6th_fees`
  MODIFY `sixthfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `7thfees_details`
--
ALTER TABLE `7thfees_details`
  MODIFY `sevnfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `7th_fees`
--
ALTER TABLE `7th_fees`
  MODIFY `seventhfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `8thfees_details`
--
ALTER TABLE `8thfees_details`
  MODIFY `eighfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `8th_fees`
--
ALTER TABLE `8th_fees`
  MODIFY `eighthfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `9thfees_details`
--
ALTER TABLE `9thfees_details`
  MODIFY `ninfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `9th_fees`
--
ALTER TABLE `9th_fees`
  MODIFY `ninthfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `10thfees_details`
--
ALTER TABLE `10thfees_details`
  MODIFY `tenfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `10th_fees`
--
ALTER TABLE `10th_fees`
  MODIFY `tenthfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driverdetails`
--
ALTER TABLE `driverdetails`
  MODIFY `d_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `eid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fees_details`
--
ALTER TABLE `fees_details`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `juniorfees_details`
--
ALTER TABLE `juniorfees_details`
  MODIFY `jrfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `junior_fees`
--
ALTER TABLE `junior_fees`
  MODIFY `jfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice1`
--
ALTER TABLE `notice1`
  MODIFY `nid1` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notice2`
--
ALTER TABLE `notice2`
  MODIFY `nid2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice3`
--
ALTER TABLE `notice3`
  MODIFY `nid3` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nurseryfees_details`
--
ALTER TABLE `nurseryfees_details`
  MODIFY `nrfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nursery_fees`
--
ALTER TABLE `nursery_fees`
  MODIFY `nfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office_enq`
--
ALTER TABLE `office_enq`
  MODIFY `Oid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `parentgate`
--
ALTER TABLE `parentgate`
  MODIFY `prntgid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `playgrp_fees`
--
ALTER TABLE `playgrp_fees`
  MODIFY `pfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sattendance`
--
ALTER TABLE `sattendance`
  MODIFY `atid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `seniorfee_details`
--
ALTER TABLE `seniorfee_details`
  MODIFY `srfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `senior_fees`
--
ALTER TABLE `senior_fees`
  MODIFY `sfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staffdetails`
--
ALTER TABLE `staffdetails`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staffgate`
--
ALTER TABLE `staffgate`
  MODIFY `sid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `sid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `vid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userslogin`
--
ALTER TABLE `userslogin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
