-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 12:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `adminimg` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `pwd`, `fullname`, `adminimg`, `address`, `city`, `state`, `email`, `mobile`, `surname`) VALUES
(1, 'ritesh123', 'Ritesh  poriya', 'new.jpg', '192/193, vivekanand society, bombay market road surat', 'navsari', 'Gujarat', 'ritesh@gmail.com', '8160691814', '');

-- --------------------------------------------------------

--
-- Table structure for table `apply_event`
--

CREATE TABLE `apply_event` (
  `ae_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `card_no` varchar(100) DEFAULT NULL,
  `name_on_card` varchar(100) DEFAULT NULL,
  `expiry_month` int(11) DEFAULT '0',
  `expiry_year` int(11) DEFAULT '0',
  `card_cvv` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_event`
--

INSERT INTO `apply_event` (`ae_id`, `event_id`, `s_id`, `payment_type`, `payment_date`, `amount`, `card_no`, `name_on_card`, `expiry_month`, `expiry_year`, `card_cvv`) VALUES
(3, 21, 15, 'cash', '2020-06-24', 200, '0', '', 0, 0, 0),
(5, 21, 15, 'cash', '2020-06-24', 200, '0', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bio_cv`
--

CREATE TABLE `bio_cv` (
  `cv_id` int(11) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` decimal(15,0) NOT NULL,
  `email` varchar(100) NOT NULL,
  `apply_for` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `year_ssc` int(50) NOT NULL,
  `year_hsc` int(50) NOT NULL,
  `year_graduate` int(50) NOT NULL,
  `year_pg` int(50) NOT NULL,
  `pg` varchar(100) NOT NULL,
  `graduation` varchar(100) NOT NULL,
  `hsc` varchar(100) NOT NULL,
  `ssc` varchar(100) NOT NULL,
  `subject_ssc` varchar(100) NOT NULL,
  `subject_hsc` varchar(100) NOT NULL,
  `subject_graduate` varchar(100) NOT NULL,
  `subject_pg` varchar(100) NOT NULL,
  `ssc_school` varchar(100) NOT NULL,
  `hsc_school` varchar(100) NOT NULL,
  `graduate_university` varchar(100) NOT NULL,
  `pg_university` varchar(100) NOT NULL,
  `add01_year` varchar(50) NOT NULL,
  `add01_info` varchar(100) NOT NULL,
  `add02_year` varchar(50) NOT NULL,
  `add02_info` varchar(100) NOT NULL,
  `add03_year` varchar(50) NOT NULL,
  `add03_info` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_cv`
--

INSERT INTO `bio_cv` (`cv_id`, `s_id`, `user_image`, `name`, `address`, `mobile`, `email`, `apply_for`, `nationality`, `gender`, `marital_status`, `dob`, `place_of_birth`, `year_ssc`, `year_hsc`, `year_graduate`, `year_pg`, `pg`, `graduation`, `hsc`, `ssc`, `subject_ssc`, `subject_hsc`, `subject_graduate`, `subject_pg`, `ssc_school`, `hsc_school`, `graduate_university`, `pg_university`, `add01_year`, `add01_info`, `add02_year`, `add02_info`, `add03_year`, `add03_info`) VALUES
(1, '', 'testi-3.png', 'ritesh', 'varacha', '9909234936', 'ritesh@gmail.com', 'php developer', 'indian', 'male', 'Unmarried', '1998-11-16', 'surat', 0, 0, 0, 0, 'no', 'bmbca', '52', '53', '', '', '', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', 'no'),
(2, '', '1074159640.jpg', 'Ritesh Poriya', '192/193,viveknand society', '9909234936', 'ritesh@gmail.com', 'php developer', 'indian', 'male', 'Unmarried', '1998-11-16', 'surat', 0, 0, 0, 0, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(3, '', '1074159640.jpg', 'Ritesh Poriya', '192/193,viveknand society', '9909234936', 'ritesh@gmail.com', 'php developer', 'indian', 'male', 'Unmarried', '1998-11-16', 'surat', 0, 0, 0, 0, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(4, '', '1074159640.jpg', 'Ritesh Poriya', '192/193,viveknand society', '9909234936', 'ritesh@gmail.com', 'php developer', 'indian', 'male', 'Unmarried', '1998-11-16', 'surat', 2015, 2017, 2020, 2022, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(6, '', 'testi-3.jpg', 'Ritesh Poriya', '192/193,viveknand society', '990955566', 'vraj@gmail.com', 'ios developer', 'indian', 'male', 'Unmarried', '8955-05-12', 'surat', 0, 0, 0, 0, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(7, '15', 'testi-3.jpg', 'Ritesh Poriya', '192/193,vivekanand society', '9909234936', 'ritesh@gmail.com', 'ios developer', 'indian', 'male', 'Married', '1998-11-16', 'surat', 0, 0, 0, 0, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(9, '', 'bi-69155.jpg', 'Nirali ', 'sitanagar', '9722604598', 'nirali@gmail.com', 'asp MVC developer', 'indian', 'female', 'Unmarried', '1999-11-10', 'surat', 0, 0, 0, 0, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(11, '', 'IMG_20171119_134724.jpg', 'riteshssss', 'sssssdsdfghjk', '123456789521', 'ritesh123@gmail.com', 'ios developer', 'indian', 'male', 'Unmarried', '1998-11-16', 'surat', 0, 0, 0, 0, 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', 'IMG_20171119_134724.jpg', 'riteshssss', 'sssssdsdfghjk', '123456789521', 'ritesh123@gmail.com', 'ios developer', 'indian', 'male', 'Unmarried', '1998-11-16', 'surat', 0, 0, 0, 0, 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', 'IMG_20171119_134724.jpg', 'riteshssss', 'sssssdsdfghjk', '123456789521', 'ritesh123@gmail.com', 'ios developer', 'indian', 'male', 'Unmarried', '1998-11-16', 'surat', 0, 0, 0, 0, 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '15', 'IMG_20171119_134724.jpg', 'vivaan tollawla', 'ashirwad', '9909', 'v@gmail.com', 'hon', 'indian', 'male', 'Married', '2012-12-12', 'surat', 0, 0, 0, 0, 'no', 'no', 'no', 'yes', 'maths', '', '', '', 'gseb', '', '', '', '', '', '', '', '', ''),
(15, '2', '1074159640.jpg', 'vraj patel', 'amroli, surat', '1236547896', 'pvraj643@gmail.com', 'digital marketing', 'indian', 'male', 'Unmarried', '1998-05-11', 'surat', 0, 0, 0, 0, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(16, '', '!image004.jpg', 'thoar', 'mnbvhrfjv nf knf ', '9909234936', 'thor@gmail.com', 'ios developer', 'american', 'male', 'Married', '1998-02-16', 'surat', 0, 0, 0, 0, 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '14', '91.jpg', 'pooja jain ', 'abhishek appartment ,surat', '9909234936', 'pooja@gmail.com', 'testing developer', 'american', 'female', 'Married', '1996-05-21', 'surat', 2015, 2017, 2020, 2022, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '2013', 'bjjjmb ', '2105', 'bbjbb,m', '2013', 'n,m ,m kn'),
(19, '14', '91.jpg', 'pooja jain ', 'abhishek appartment ,surat', '9909234936', 'pooja@gmail.com', 'testing developer', 'american', 'female', 'Married', '1996-05-21', 'surat', 0, 0, 0, 0, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '', '', '', '', ''),
(21, '2', '2001_porsche_carrera_gt-3[1].jpg', 'devi jons', 'spain ', '1236598745', 'ritesh@gmail.com', 'ios developer', 'american', 'male', 'Married', '1996-02-10', 'surat', 2015, 2017, 2020, 2022, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '2013', 'bjjjmb ', '2105', 'bbjbb,m', '2013', 'n,m ,m kn'),
(24, '15', '104054564_153576749566328_890123398659049693_o.jpg', 'wdwwdwd', 'wdwdwddd', '0', '', 'wdwdwdwd', 'dwdwdwdwd', '', 'Married', '', '', 0, 0, 0, 0, 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bio_normal`
--

CREATE TABLE `bio_normal` (
  `bid` int(11) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` decimal(50,0) NOT NULL,
  `email` varchar(100) NOT NULL,
  `year_ssc` varchar(50) NOT NULL,
  `year_hsc` varchar(50) NOT NULL,
  `year_grad` varchar(100) NOT NULL,
  `year_post` varchar(100) NOT NULL,
  `year_any` varchar(100) NOT NULL,
  `ssc` varchar(100) NOT NULL,
  `hsc` varchar(100) NOT NULL,
  `graduation` varchar(100) NOT NULL,
  `post_graduation` varchar(100) NOT NULL,
  `any_degree` varchar(100) NOT NULL,
  `subject_ssc` varchar(100) NOT NULL,
  `Subject_hsc` varchar(100) NOT NULL,
  `subject_graduation` varchar(100) NOT NULL,
  `subject_pg` varchar(100) NOT NULL,
  `subject_any` varchar(100) NOT NULL,
  `ssc_school` varchar(100) NOT NULL,
  `hsc_school` varchar(100) NOT NULL,
  `graduation_university` varchar(100) NOT NULL,
  `pg_university` varchar(100) NOT NULL,
  `any_university` varchar(100) NOT NULL,
  `ssc_cgpa` varchar(50) NOT NULL,
  `hsc_cgpa` varchar(50) NOT NULL,
  `graduation_sgpa` varchar(50) NOT NULL,
  `pg_sgpa` varchar(50) NOT NULL,
  `any_sgpa` varchar(50) NOT NULL,
  `ssc_info` varchar(100) NOT NULL,
  `hsc_info` varchar(100) NOT NULL,
  `graduation_info` varchar(100) NOT NULL,
  `pg_info` varchar(100) NOT NULL,
  `any_info` varchar(100) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `married` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_normal`
--

INSERT INTO `bio_normal` (`bid`, `s_id`, `name`, `age`, `dob`, `address`, `mobile`, `email`, `year_ssc`, `year_hsc`, `year_grad`, `year_post`, `year_any`, `ssc`, `hsc`, `graduation`, `post_graduation`, `any_degree`, `subject_ssc`, `Subject_hsc`, `subject_graduation`, `subject_pg`, `subject_any`, `ssc_school`, `hsc_school`, `graduation_university`, `pg_university`, `any_university`, `ssc_cgpa`, `hsc_cgpa`, `graduation_sgpa`, `pg_sgpa`, `any_sgpa`, `ssc_info`, `hsc_info`, `graduation_info`, `pg_info`, `any_info`, `hobbies`, `married`, `gender`, `language`, `photo`) VALUES
(1, '', 'ritesh', '21', '1998-11-16', 'varacha', '9909', 'vraj@gmail.com', '2015', '2017', '2020', '2022', '2021', '', '', '', '', '', 'english', 'acvount', 'bca', 'mca', 'cyber sequerity', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', 'tops ', '51', '', '70', '80', '82', '', '', '', '', '', 'programming', 'Unmarried', '', 'english,hindi,gujarati', '45000'),
(2, '', 'hiral patel', '33', '1987-11-14', 'f 103 ashirwad', '9909', 'hiral@gmail.com', '2005', '2017', '2008', '2011', '', 'yes', 'yes', 'yes', 'yes', 'no', 'math', 'account', 'account', 'mca', '', 'gseb', 'gseb', 'vnsgu', 'vnsgu', '', '72', '', '55', '70', '', '', '', '', '', '', 'travel', 'Married', 'female', 'english,hindi,gujarati', '90000'),
(3, '', 'hiral patel', '33', '1987-11-14', 'f 103 ashirwad', '9909', 'hiral@gmail.com', '2005', '2017', '2008', '2011', '', 'yes', 'yes', 'yes', 'yes', 'no', 'math', 'account', 'account', 'mca', '', 'gseb', 'gseb', 'vnsgu', 'vnsgu', '', '72', '', '55', '70', '', '', '', '', '', '', 'travel', 'Married', 'female', 'english,hindi,gujarati', '90000'),
(4, '', 'hiral patel', '33', '1987-11-14', 'f 103 ashirwad', '9909', 'hiral@gmail.com', '2005', '2017', '2008', '2011', '', 'yes', 'yes', 'yes', 'yes', 'no', 'math', 'account', 'account', 'mca', '', 'gseb', 'gseb', 'vnsgu', 'vnsgu', '', '72', '', '55', '70', '', '', '', '', '', '', 'travel', 'Married', 'female', 'english,hindi,gujarati', '90000'),
(33, '15', 'ram', '12', '1998-11-16', 'surat', '1222222222', 'ram@gmail.com', '1111', '1111', '11111', '1111', '', 'yes', 'yes', 'yes', 'yes', 'no', '111', '111', '111', '111', '', 'gseb', 'gseb', 'vnsgu', 'vnsgu', '', '11', '11', '111', '1111', '', 'no', 'no', 'yes', 'yes', 'yes', 'wwwwwwww', 'Married', 'male', 'eerrrrrrrrr', '104454913_153576896232980_6902024293447426763_o.jpg'),
(14, '15', 'yash poriya', '33', '1987-11-14', 'f 103 ashirwad enclave', '9909234936', 'yash@gmail.com', '2008', '2011', '2013', '2015', '', 'yes', 'yes', 'yes', 'yes', 'no', 'maths', 'account', 'account', 'web', '', 'gseb', 'gseb', 'bcom', 'mca', '', '72', '84', '55', '70', '', 'no', 'no', 'yes', 'yes', 'yes', 'travel,music', 'Married', 'female', 'english,hindi,gujarati', 'commitee-1.jpg'),
(15, '15', 'Ritesh Poriya', '20', '1998-11-16', '192/193,vivekanand society nr bombay market road surat', '123456789521', 'ritesh@gmail.com', '2015', '2017', '2020', '2022', '2021', 'yes', 'yes', 'yes', 'yes', 'yes', 'english', 'acvount', 'bca', 'mca', 'cyber sequerity', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', 'tops ', '51', '52', '70', '80', '82', 'no', 'no', 'yes', 'yes', 'yes', 'programming', 'Unmarried', 'male', 'english,hindi,gujarati', 'testi-3.jpg'),
(16, '15', 'vivaan', '3', '2020-03-07', 'ghfghh', '9999999', 'vraj@gmail.com', '2011', '2015', '2016', '2018', '', 'yes', 'yes', 'yes', 'yes', 'no', 'maths', 'account', 'account', 'web', '', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '75', '55', '55', '78', '', 'no', 'no', 'yes', 'yes', 'yes', 'programming', 'Married', 'male', 'english,hindi,gujarati', 'event-img-1.jpg'),
(17, '15', 'Ritesh Poriya', '23', '1998-05-11', 'ndfneknkfnknkfbebebfb', '990955566', 'ritesh@gmail.com', '2015', '2017', '2020', '2022', '', 'yes', 'yes', 'yes', 'yes', 'no', 'english', 'account', 'bca', 'mca', '', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '51', '52', '70', '80', '', 'no', 'no', 'yes', 'yes', 'yes', 'travel,music', 'Unmarried', 'male', 'english,hindi,gujarati,tamil', 'bi-69155.jpg'),
(18, '14', 'ritesh', '20', '1489-05-12', 'cxfcvbnkljkjhvgc', '990955566', 'riteshporiya124@gmail.com', '', '', '', '', '', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'no', 'no', 'yes', 'yes', 'yes', 'programming', 'Unmarried', 'male', 'english,hindi,gujarati,tamil', '220px-Priyanka_At_Nikon_Camera_Launch.jpg'),
(19, '15', 'gyan prakash', '20', '2001-11-16', '192/193,dindoli kharvasa', '2268898745', 'thor@gmail.com', '2015', '2017', '2020', '2022', '', 'yes', 'yes', 'yes', 'yes', 'no', 'english', 'account', 'bca', 'mca', '', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', '', '51', '52', '70', '80', '', 'no', 'no', 'yes', 'yes', 'yes', 'programming', 'Unmarried', 'male', 'english,hindi,gujarati,tamil', 'SHAHRU~4_2.JPG'),
(20, '2', 'hulk', '38', '1996-02-11', 'mnjhytgrfwe ftdgdj su ', '3216547896', 'hulk@gmail.com', '2015', '2017', '2020', '2022', '2021', 'yes', 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'cyber sequerity', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', 'tops ', '51', '52', '70', '80', '82', 'no', 'no', 'yes', 'yes', 'yes', 'programming', 'Unmarried', 'male', 'english,hindi,gujarati', 'SHAHRU~4_2.JPG'),
(21, '15', 'Mr. Nikhilkumar A. Poriya', '25', '2458-11-16', '193, VIVEKANAND SOC., NR. ARCHANA SCHOOL,\r\nPUNA-BOMBAY MARKET ROAD, SURAT', '8866639730', 'nikhilaporiya@gmail.com', '2011', '2021', '3210', '3541', '5896', 'yes', 'yes', 'yes', 'yes', 'yes', 'maths', 'science', 'scence', 'nhvvctccy', 'nvjjjjb', 'gseb', 'gseb', 'vnsgu', 'vnsgu', 'buvyub', '75', '80', '95', '96', '85', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'Unmarried', 'male', 'Surat', 'Untitled Diagram (1).png'),
(34, '15', 'ram', '12', '1998-11-16', 'surat', '1234567890', 'ram@gmail.com', '111', '1111', '1111', '1111', '', 'yes', 'yes', 'yes', 'yes', 'no', '111', '1111', '111', '111', '', 'gwdefe', 'sfdffsf', 'fsfsff', 'fdsfdff', '', '11', '111', '111', '111', '', 'no', 'no', 'yes', 'yes', 'yes', 'hgfessa', 'Married', 'male', 'wdsdfdfdfdf', '104454913_153576896232980_6902024293447426763_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bio_resume`
--

CREATE TABLE `bio_resume` (
  `resume_id` int(11) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` decimal(15,0) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `domicile` varchar(100) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cnic_number` varchar(100) NOT NULL,
  `relegion` varchar(100) NOT NULL,
  `carreer_objective` varchar(100) NOT NULL,
  `skill01` varchar(100) NOT NULL,
  `skill02` varchar(100) NOT NULL,
  `skill03` varchar(100) NOT NULL,
  `year_ssc` int(50) NOT NULL,
  `year_hsc` int(50) NOT NULL,
  `year_graduate` int(50) NOT NULL,
  `year_pg` int(50) NOT NULL,
  `pg` varchar(100) NOT NULL,
  `graduation` varchar(100) NOT NULL,
  `hsc` varchar(100) NOT NULL,
  `ssc` varchar(100) NOT NULL,
  `subject_ssc` varchar(100) NOT NULL,
  `subject_hsc` varchar(100) NOT NULL,
  `subject_graduate` varchar(100) NOT NULL,
  `subject_pg` varchar(100) NOT NULL,
  `ssc_school` varchar(100) NOT NULL,
  `hsc_school` varchar(100) NOT NULL,
  `graduate_university` varchar(100) NOT NULL,
  `pg_university` varchar(100) NOT NULL,
  `professional_experience` varchar(100) NOT NULL,
  `interpersonal_skill01` varchar(100) NOT NULL,
  `interpersonal_skill02` varchar(100) NOT NULL,
  `interpersonal_skill03` varchar(100) NOT NULL,
  `reference` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_resume`
--

INSERT INTO `bio_resume` (`resume_id`, `s_id`, `user_image`, `name`, `address`, `mobile`, `father_name`, `email`, `nationality`, `domicile`, `marital_status`, `gender`, `cnic_number`, `relegion`, `carreer_objective`, `skill01`, `skill02`, `skill03`, `year_ssc`, `year_hsc`, `year_graduate`, `year_pg`, `pg`, `graduation`, `hsc`, `ssc`, `subject_ssc`, `subject_hsc`, `subject_graduate`, `subject_pg`, `ssc_school`, `hsc_school`, `graduate_university`, `pg_university`, `professional_experience`, `interpersonal_skill01`, `interpersonal_skill02`, `interpersonal_skill03`, `reference`) VALUES
(1, '2', '!image002.jpg', 'aaditay', 'satyanagar', '3968574123', 'xbjjvvvhv', 'vraj@gmail.com', 'indian', '231459', 'Unmarried', 'male', '2314569875', 'american', 'mjuydygdghdu yyyyyy ywywywyjhhhhhhhhhhhhh 99999999999999999eu', 'php', 'html', 'css', 2015, 2017, 2020, 2022, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', 'fresher', 'public speaking', 'easily learn any technology', 'no', 'nics furry'),
(2, '2', '!image003.jpg', 'thoar', 'snnbu f g uxgx  usss qs  sihsdu iqhd ii', '1233987456', 'mmkishtv  bu ', 'ritesh@gmail.com', 'american', '231459', 'Unmarried', 'male', '2314569875', 'american', 'mjuydygdghdu yyyyyy ywywywyjhhhhhhhhhhhhh 99999999999999999eu', 'php', 'html', 'css', 2015, 2017, 2020, 2022, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'bca', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', 'fresher', 'public speaking', 'easily learn any technology', 'no', 'nics furry'),
(4, '14', '[SonuWap.com]Great Car (11).jpg', 'ritesh', 'kndkbjk', '3216547896', 'odin@gmail.com', 'ritesh@gmail.com', 'american', '231459', 'Unmarried', 'male', '2314569875', 'american', 'mjuydygdghdu yyyyyy ywywywyjhhhhhhhhhhhhh 99999999999999999eu', 'php', 'html', 'css', 2015, 2017, 2020, 2022, 'yes', 'yes', 'yes', 'yes', 'english', 'account', 'account', 'mca', 'gseb', 'ghseb', 'vnsgu', 'vnsgu', 'fresher', 'public speaking', 'easily learn any technology', 'no', 'nics furry');

-- --------------------------------------------------------

--
-- Table structure for table `bulk_mail`
--

CREATE TABLE `bulk_mail` (
  `bm_id` int(11) NOT NULL,
  `subject` varchar(5000) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(100) NOT NULL,
  `from_user_id` int(100) NOT NULL,
  `chat_message` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'hiii hulk', '2020-04-08 07:10:45', 2),
(2, 2, 1, 'how are you?', '2020-02-22 12:00:53', 2),
(3, 1, 2, 'ya ritesh , I m fine', '2020-02-21 12:44:23', 0),
(4, 1, 2, ' I m also fine bro', '2020-02-22 08:29:37', 0),
(5, 2, 1, 'bye hulk', '2020-03-13 05:40:27', 0),
(6, 2, 1, 'bye hulk', '2020-03-13 05:40:27', 0),
(7, 2, 1, 'bye hulk', '2020-02-22 12:03:53', 2),
(8, 2, 1, 'bye hulk', '2020-02-22 12:03:50', 2),
(9, 2, 1, 'bye hulk', '2020-02-22 12:03:47', 2),
(10, 2, 1, 'bye hulk', '2020-02-22 12:03:38', 2),
(11, 2, 1, 'bye hulk', '2020-02-22 12:03:32', 2),
(12, 3, 1, 'hii thor', '2020-02-22 12:05:20', 0),
(13, 3, 1, 'hii thor', '2020-02-22 12:05:25', 2),
(14, 3, 1, 'hoe are you?', '2020-02-22 12:20:15', 2),
(15, 2, 1, 'hii hulk how are ?', '2020-03-13 05:40:27', 0),
(16, 2, 1, 'hii hulk how are ?', '2020-03-13 05:40:27', 0),
(17, 3, 1, 'hii thor ,where are u?\n', '2020-03-13 05:42:14', 0),
(18, 1, 3, 'hii ritesh i m fine', '2020-03-28 09:00:29', 0),
(19, 3, 2, 'hii thor ', '2020-04-08 06:47:23', 2),
(20, 3, 2, 'how are you?', '2020-03-28 09:25:49', 0),
(21, 2, 3, 'hii I m fine', '2020-03-28 08:59:08', 0),
(22, 2, 3, 'what are you doing bro ?', '2020-03-28 08:59:08', 0),
(23, 2, 1, 'what are u doing bro?', '2020-04-08 07:11:51', 2),
(24, 1, 2, 'nothing else bro ?', '2020-03-28 09:02:08', 0),
(29, 1, 2, 'ya bro', '2020-03-29 05:26:09', 0),
(30, 2, 1, 'hmmm', '2020-03-29 05:26:20', 0),
(31, 2, 1, 'no problem', '2020-03-29 05:26:44', 0),
(32, 1, 2, 'hello ritesh', '2020-03-29 05:58:38', 0),
(33, 2, 1, 'hiii ', '2020-03-29 05:58:45', 0),
(34, 2, 1, 'where are you ?', '2020-03-29 06:00:45', 0),
(35, 1, 2, 'newyork  bro my home', '2020-03-29 06:01:49', 0),
(36, 3, 2, 'hey bro...\n', '2020-04-08 06:46:07', 2),
(37, 3, 2, 'how are u?', '2020-04-08 06:46:23', 2),
(38, 2, 3, 'hii bro i m fine', '2020-04-08 06:14:10', 0),
(39, 2, 3, 'hii hulk', '2020-04-08 07:07:20', 2),
(40, 2, 3, 'hey ', '2020-04-08 07:08:43', 2),
(41, 2, 1, 'hii i m ritesh\n', '2020-04-08 07:13:55', 0),
(42, 2, 1, 'hey\n', '2020-04-08 08:38:41', 0),
(43, 1, 2, 'my name is hulk', '2020-04-08 08:55:14', 1),
(44, 3, 2, 'hey bro...', '2020-04-08 09:03:40', 1),
(45, 3, 2, 'juyhttt', '2020-04-08 09:04:43', 1),
(46, 2, 10, 'hii hulk how are ?', '2020-06-11 10:43:20', 2),
(47, 10, 2, 'hii vivan', '2020-06-11 10:42:20', 0),
(48, 2, 10, 'hii hulk hello\n', '2020-06-12 07:27:09', 0),
(49, 10, 2, 'hii vavan how are u?', '2020-06-12 07:28:35', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `message` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `name`, `mobile`, `email`, `subject`, `message`) VALUES
(1, 'Mr. Nikhilkumar A. Poriya', '8866639730', 'nikhilaporiya@gmail.com', 'testing', 'this message for testing purpose only.'),
(2, 'Mitesh', '8866051684', 'miteshaporiya@gmail.com', 'testing', 'hiiii i m mitesh poriya'),
(3, 'ddddddd', '0', 'www@gg.ccc', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empid` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empid`, `name`, `surname`, `email`, `mobile`) VALUES
(1, 'ritesh', 'poriya', 'ritesh@gmail.com', 1234567890),
(2, 'mittesh', 'poriya', 'mittesh@gmail.com', 123456890);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `organizer_name` varchar(100) NOT NULL,
  `organizer_photo` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `upload_event_date` date NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `fees` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `estime01` varchar(50) NOT NULL,
  `estime02` varchar(50) NOT NULL,
  `estime03` varchar(50) NOT NULL,
  `estime04` varchar(50) NOT NULL,
  `estime05` varchar(50) NOT NULL,
  `esheading01` varchar(100) NOT NULL,
  `esheading02` varchar(100) NOT NULL,
  `esheading03` varchar(100) NOT NULL,
  `esheading04` varchar(100) NOT NULL,
  `esheading05` varchar(100) NOT NULL,
  `esdescription01` varchar(100) NOT NULL,
  `esdescription02` varchar(100) NOT NULL,
  `esdescription03` varchar(100) NOT NULL,
  `esdescription04` varchar(100) NOT NULL,
  `esdescription05` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_date`, `photo`, `organizer_name`, `organizer_photo`, `description`, `upload_event_date`, `event_name`, `fees`, `address`, `estime01`, `estime02`, `estime03`, `estime04`, `estime05`, `esheading01`, `esheading02`, `esheading03`, `esheading04`, `esheading05`, `esdescription01`, `esdescription02`, `esdescription03`, `esdescription04`, `esdescription05`) VALUES
(21, '2020-08-15', 'images.jpg', 'ritesh poriya', '', '<p><em><strong>BMU is a premier engineering institute in Gujarat State set with the objectives of im', '2020-06-24', 'fresher Party', 200, 'BMBCA CAMPUS, BMEF VESU', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `heading` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `file_name` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `uploaded_on` datetime NOT NULL,
  `video` varchar(1000) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `heading`, `description`, `type`, `file_name`, `uploaded_on`, `video`) VALUES
(1, '', '', '', 'man-in-black-suit-holding-a-calling-card-3785104.jpg', '2020-05-27 11:46:05', ''),
(2, '', '', '', 'man-wearing-blue-suit-2897883.jpg', '2020-05-27 11:46:05', ''),
(3, '', '', '', '420191215_130650.jpg', '2020-05-27 11:46:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `invite_friend`
--

CREATE TABLE `invite_friend` (
  `if_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `friend_email_id` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_ad`
--

CREATE TABLE `job_ad` (
  `job_id` int(11) NOT NULL,
  `s_id` int(11) DEFAULT NULL,
  `job_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `ad_photo` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `apply_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `fees` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `company_email` varchar(500) NOT NULL,
  `company_description` varchar(5000) NOT NULL,
  `view` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_ad`
--

INSERT INTO `job_ad` (`job_id`, `s_id`, `job_name`, `company_name`, `company_logo`, `ad_photo`, `date`, `apply_date`, `expire_date`, `fees`, `description`, `company_email`, `company_description`, `view`) VALUES
(2, 15, 'Angular JS developer', 'paypal infotech', 'paypal.png', 'photo2.png', '2020-01-18', '2020-01-21', '2020-01-25', 100, 'i m looking for asp developer', 'hiraltollawala@gmail.com', '', 8),
(3, 16, 'Urgently Need Five Data Center Specialist', 'cisco', 'mestro.png', 'IMG-20150618-WA0049.jpg', '2019-06-12', '2019-06-12', '2019-07-20', 500, 'i m looking for good data security', 'Navi Mumbai', '', 8),
(4, 17, 'Product Owner (m/f) for our Charter Business', 'balaji foods', 'cirrus.png', 'IMG_20171119_134724.jpg', '2020-01-26', '2020-01-27', '2020-03-26', 250, 'looking for product manager', 'bhilwada,rajasthan', '', 2),
(5, 15, 'Backend Developer (Java) wanted for leading', 'sassy infotech', 'mastercard.png', 'Screenshot_2017-09-09-18-36-13.png', '2019-11-20', '2019-11-21', '2020-01-25', 150, 'experience for 2.5yrs', 'kharvar nagar,surat', '', 1),
(6, 16, 'API Architect and Lead - Python, SQLAlchemy, GraphQL', 'sai infotech', 'visa.png', '1-5536563-4235-t.jpg', '0000-00-00', '2019-05-12', '2019-12-25', 200, 'experience 2yrs', 'andheri,mumbai', '', 1),
(7, 17, 'graphic designer', 'spider developer', 'american-express.png', 'Amazing_1_n.jpg', '2019-06-12', '2019-06-13', '2019-07-16', 100, 'best raphic designer', 'yogi chowk,surat', '', 1),
(8, 15, 'php developer', 'student root', '51[1].jpg', '6[2].jpg', '2001-11-16', '2001-11-20', '2001-11-30', 250, 'Here now we require candidates to join our business team for company growth. \r\nWe have basically 4 d', '192/193,vivekanand society, surat,gujarat', 'We at students root are unique in market with our ', 6),
(9, 15, 'ios developer', 'infyom', 'LOGO.jpeg', 'small.jpg', '2020-06-06', '2020-06-07', '2020-06-30', 100, '\r\nWe are a edutech startup based in Ahmedabad. We are with a vision to change education system from its root. We work to make education more easy, interesting, \r\n\r\n', 'Let your friends and batchmates know about this', 'We are a edutech startup based in Ahmedabad. We are with a ', 5),
(10, NULL, 'ruby developer', 'poriya infotech', 'Lighthouse.jpg', 'Penguins.jpg', '2019-05-16', '2020-05-20', '2020-06-21', 500, 'jfs svh.hhshhv.kxv.dh.khvk', 'infyom@gmail.com', 'slzjff hfshvhv.kshfk.sh.kshv.khdhvk.dhkvkhkdhvkdvkvkvkk', 5),
(11, 22, 'sql developer', 'panchal infoteck', '2.jpg', '4.jpg', '2020-06-16', '2020-06-20', '2020-06-02', 500, '<p>dsjffhhhffojnghguiei ijfjeiehfhfehikdvc</p>\r\n\r\n<p>wewjewekwdwegfmmkutijjejididndnln</p>\r\n\r\n<p>dmddjddndnndhggdluwgwgbjbj,wgdf uihhhhehwiehwe wewehwew</p>\r\n\r\n<p>wwgewgegjgjwg,jwg.ugf</p>\r\n\r\n<p>jwgjfjj,gv</p>\r\n', 'panchal@gmail.com', 'dnddndknfff fiurtto ritesh aditya ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'riteshporiya', 'password'),
(2, 'hulk', 'hulk'),
(3, 'thor', 'thor'),
(10, 'vivan', 'vivan'),
(11, '', ''),
(12, 'qw', ''),
(13, '', ''),
(14, '', ''),
(15, 'rt', ''),
(16, '', ''),
(17, '', ''),
(18, '', ''),
(19, 'eeee', ''),
(20, '', ''),
(21, '', ''),
(22, '', ''),
(23, 'tt', ''),
(24, '', ''),
(25, '', ''),
(26, '', ''),
(27, '', ''),
(28, '', ''),
(29, 'wwwww', ''),
(30, '', ''),
(31, '', ''),
(32, '', ''),
(33, '', ''),
(34, 'ritesh', '12345'),
(35, '', ''),
(36, '', ''),
(37, '', ''),
(38, '', ''),
(39, '', ''),
(40, 'bbggggg', ''),
(41, 'ram', ''),
(42, 'ram', '12345678'),
(43, 'ram', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2020-02-19 12:40:25', 'yes'),
(2, 1, '2020-02-19 12:57:02', 'yes'),
(3, 2, '2020-02-19 13:02:13', 'yes'),
(4, 2, '2020-02-19 13:04:24', 'yes'),
(5, 3, '2020-02-19 13:22:55', 'yes'),
(6, 1, '2020-02-19 13:33:57', 'yes'),
(7, 3, '2020-02-19 13:34:21', 'yes'),
(8, 1, '2020-02-20 05:40:22', 'yes'),
(9, 2, '2020-02-20 05:41:33', 'yes'),
(10, 1, '2020-02-21 09:04:39', 'yes'),
(11, 2, '2020-02-21 09:04:14', 'yes'),
(12, 1, '2020-02-21 12:46:38', 'yes'),
(13, 2, '2020-02-21 12:46:46', 'yes'),
(14, 1, '2020-02-22 09:23:09', 'yes'),
(15, 3, '2020-02-22 08:22:55', 'yes'),
(16, 2, '2020-02-22 09:23:27', 'yes'),
(17, 1, '2020-02-22 12:21:38', 'yes'),
(18, 3, '2020-02-22 12:08:10', 'yes'),
(19, 1, '2020-03-13 05:41:57', 'yes'),
(20, 2, '2020-03-13 05:41:36', 'yes'),
(21, 3, '2020-03-13 05:37:12', 'yes'),
(22, 3, '2020-03-13 05:42:32', 'yes'),
(23, 2, '2020-03-17 09:31:42', 'yes'),
(24, 2, '2020-03-17 09:32:55', 'yes'),
(25, 2, '2020-03-28 09:15:35', 'yes'),
(26, 2, '2020-03-18 08:48:13', 'yes'),
(27, 2, '2020-03-22 05:35:12', 'yes'),
(28, 3, '2020-03-22 05:57:03', 'yes'),
(29, 2, '2020-03-27 09:34:44', 'yes'),
(30, 2, '2020-04-08 08:38:48', 'no'),
(31, 3, '2020-03-28 06:28:25', 'yes'),
(32, 1, '2020-03-28 08:49:17', 'yes'),
(33, 1, '2020-03-28 09:24:02', 'yes'),
(34, 2, '2020-03-28 09:24:22', 'yes'),
(35, 1, '2020-03-28 09:25:16', 'yes'),
(36, 2, '2020-03-28 09:26:49', 'no'),
(37, 3, '2020-03-28 09:34:48', 'no'),
(38, 1, '2020-03-28 09:34:15', 'no'),
(39, 1, '2020-03-28 09:51:44', 'no'),
(40, 2, '2020-03-28 09:51:48', 'no'),
(41, 1, '2020-03-29 06:03:24', 'no'),
(42, 2, '2020-03-29 05:06:51', 'no'),
(43, 3, '2020-03-29 05:21:08', 'no'),
(44, 2, '2020-03-29 06:01:58', 'no'),
(45, 2, '2020-04-08 06:21:36', 'no'),
(46, 3, '2020-04-08 06:21:34', 'no'),
(47, 2, '2020-04-08 07:06:14', 'no'),
(48, 2, '2020-04-08 08:35:33', 'no'),
(49, 3, '2020-04-08 07:10:04', 'no'),
(50, 1, '2020-04-08 08:39:48', 'no'),
(51, 2, '2020-04-08 08:39:28', 'no'),
(52, 2, '2020-04-08 09:12:30', 'no'),
(53, 1, '2020-04-08 08:40:21', 'no'),
(54, 2, '2020-04-08 09:42:10', 'no'),
(55, 2, '2020-04-10 06:08:26', 'no'),
(56, 2, '2020-04-10 06:20:00', 'no'),
(57, 2, '2020-05-21 08:32:35', 'no'),
(58, 2, '2020-06-11 07:49:20', 'no'),
(59, 10, '2020-06-11 08:15:43', 'no'),
(60, 10, '2020-06-11 08:20:44', 'no'),
(61, 10, '2020-06-11 08:22:21', 'no'),
(62, 10, '2020-06-11 08:26:17', 'no'),
(63, 10, '2020-06-11 08:29:29', 'no'),
(64, 10, '2020-06-11 10:44:50', 'no'),
(65, 2, '2020-06-11 10:44:52', 'no'),
(66, 10, '2020-06-12 07:29:25', 'no'),
(67, 2, '2020-06-12 07:29:39', 'no'),
(68, 10, '2020-06-17 13:19:34', 'no'),
(69, 10, '2020-06-19 18:09:30', 'no'),
(70, 10, '2020-06-22 12:48:30', 'no'),
(71, 2, '2020-06-22 12:48:53', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `m_id` int(11) NOT NULL,
  `m_type` varchar(100) NOT NULL,
  `m_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`m_id`, `m_type`, `m_date`, `subject`, `message`) VALUES
(2, 'staff', '2020-02-21', 'hello', 'hiii vraj how are you?\r\ni m ritesh poriya'),
(3, 'student', '2020-02-21', 'hello', 'testing '),
(4, 'staff', '2020-04-04', 'hello maam', 'this mail is testing process only.'),
(5, 'staff', '2020-04-04', 'hello maam', 'this mail is testing purpose only.'),
(6, 'student', '2020-06-16', 'hello', 'jkdsvnkjcxbcxbn knklxnvk nvk.dfhg'),
(7, 'staff', '2020-06-16', 'hello', 'tessting all staff'),
(8, 'student', '2020-06-16', 'hello', 'testing all studeent'),
(9, 'student', '2020-06-16', 'hello', 'testing once more to all student'),
(10, 'student', '2020-06-16', 'hello', 'testing once more to all student'),
(11, 'student', '2020-06-19', 'testing once again ', 'this testing for mail output only .');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `date_of_news` date NOT NULL,
  `news_heading` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `date_of_news`, `news_heading`, `description`, `photo`) VALUES
(2, '2020-04-21', 'IIT DELHI 57th CONVOCATION CEREMONY', 'IIT DELHI 57th CONVOCATION CEREMONY on august 2019', '!image006.jpg'),
(8, '2020-03-25', 'IIT KUNPUR  2020-ANNUAL FUNDRAISING CAMPAIGN', 'We Hope that this year too we will able to count on alumni generosity.with the dramatic ,increase in', 'woman-wearing-gray-notch-lapel-suit-jacket-2381069.jpg'),
(9, '2020-06-12', 'ALUMNI MEET 2K20', 'lets fun with old fellows&greet gurus.\r\nvenue:-BMEF Campus,VIP road surat', '91.jpg'),
(10, '2020-02-16', 'IIT US ROADSHOW event in 2020', 'In oct 2019,an IIT Team Comprising Of Director Anil Jain , several Deans, and other Member Visited a', 'testi-3.jpg'),
(11, '2020-03-12', 'BMBCA HOLI FESTIVEL 2K20', 'All student are come and enjoy holi festivel ,', '1074159640.jpg'),
(12, '2019-11-27', 'BMU MEGA CULTURAL FEST \"ONE WORLD 2K20\"', 'The much-awaited BMU mega cultural fest \"ONE WORLD 2K20\" was inaugurated on March 2019. It is one of', 'the-hulk.jpg'),
(13, '2019-11-09', 'BMU STUDENTS GROOVE TO THE MELODIED OF COKE STDIO.', 'On the magnificent  eveming of 9th november,the family of bahagwan mahavir university witnessed COKE', 'commitee-2.jpg'),
(14, '2020-02-04', 'TEXTILES MINISTER OF INDIA SMRITI IRANI INAUGURATED WOMEN`S SCIENCE CONGRESS WSC AT BMU CAMPUS', 'Textile Minister of Smriti Irani Reached BMU campus ,today where she  inaugurated Women science cong', 'commitee-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rate_all`
--

CREATE TABLE `rate_all` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review_date` varchar(1000) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_all`
--

INSERT INTO `rate_all` (`id`, `user_id`, `review_date`, `msg`, `rate`) VALUES
(1, 15, '2020-06-16', 'nice website', 3),
(2, 0, '2020-06-17', 'nice website', 3),
(13, 15, '2020-06-17', 'very nice website', 3),
(14, 15, '2020-06-22', 'ritesh', 3),
(12, 0, '2020-06-17', 'awsome alumni website', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate_news`
--

CREATE TABLE `rate_news` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `msg` varchar(100) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_news`
--

INSERT INTO `rate_news` (`id`, `news_id`, `user_id`, `review_date`, `msg`, `rate`) VALUES
(1, 2, 21, '2020-06-16', 'nice news', 4),
(2, 9, 15, '2020-06-16', 'superb news', 3),
(3, 2, 21, '2020-06-17', 'awesome site managed', 3),
(4, 2, 21, '2020-06-17', 'awesome site managed', 3),
(5, 11, 15, '2020-06-21', 'nice festivel', 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff_detail`
--

CREATE TABLE `staff_detail` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `phd` varchar(100) NOT NULL,
  `master_degree` varchar(100) NOT NULL,
  `bachelor_degree` varchar(100) NOT NULL,
  `other_degree` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_detail`
--

INSERT INTO `staff_detail` (`staff_id`, `name`, `sname`, `gender`, `dob`, `email`, `pwd`, `mobile`, `photo`, `phd`, `master_degree`, `bachelor_degree`, `other_degree`, `post`) VALUES
(18, 'aakas', 'jain', 'male', '1998-01-29', 'pvraj643@gmail.com', '125698', '9589751452', 'commitee-3.jpg', 'no', 'M.tech', 'B.tech', '', ''),
(19, 'hetal', 'soni', 'female', '1997-05-20', 'hetal@gmail.com', '123456', '9924761554', 'commitee-6.jpg', 'no', 'MSCIT', 'BSCIT', 'Cyber Secuerity ', ''),
(20, 'archana', 'parihar', 'female', '1995-12-05', 'archanaparihar@gmail.com', '5675', '9722604598', 'commitee-4.jpg', 'yes', 'Mcom', 'Bcom', 'Designing  course', 'principal'),
(21, 'Monal', 'jain', 'female', '1996-04-16', 'monaljain@gmail.com', '6541', '8320523832', 'commitee-5.jpg', 'no', 'LLM', 'LLB', '', 'teaching assistant'),
(22, 'Mayank', 'Paliwal', 'male', '1998-11-12', 'mayankpaliwal@gmail.com', '7895', '9909977675', 'commitee-8.jpg', 'no', 'MBAIT', 'BBA', 'Cyber Secuerity and networking', 'lab assistant'),
(23, 'Tushar', 'soni', 'male', '1995-02-21', 'aaditya.h.panchal1432@gmail.com', '4569', '9325487562', 'commitee-7.jpg', 'no', 'Mcom', 'Bcom', '', ''),
(24, 'Shivani', 'Rathi', 'female', '1994-08-15', 'shivanirathi@gmail.com', '4698', '9999999999', 'commitee-4.jpg', 'yes', 'MCA', 'BCA', 'Designing  course', 'lab assistant'),
(25, 'Neha', 'Pandey', 'female', '1997-04-05', 'nehapandey@gmail.com', '96584', '9722601814', 'commitee-6.jpg', 'no', '', 'Bcom', '', 'teaching assistant'),
(26, 'Raj', 'ordiya', 'male', '1995-06-12', 'raj@gmail.com', '5625', '9624567945', 'commitee-8.jpg', 'no', 'MSCIT', 'BCA', '', ''),
(27, 'Nirali ', 'Dave', 'female', '1896-02-12', 'riteshporiya124@gmail.com', '1234', '832085532', 'commitee-5.jpg', 'yes', 'MCA', 'BCA', '', 'assistant professer'),
(28, 'ritesh poriya ', 'Poriya', 'male', '2000-11-19', 'nikhilaporiya@gmail.com', 'ritesh123', '1234567890', 'Screenshot (4).png', 'yes', 'mca', 'bca', 'cyber sequerity', 'principal');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `joining_year` varchar(30) NOT NULL,
  `graduate_year` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `enroll_no` varchar(60) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `security_question` varchar(70) NOT NULL,
  `answer` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `skill` varchar(1000) DEFAULT NULL,
  `current_place` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `maritial_status` varchar(1000) DEFAULT NULL,
  `current_job_status` varchar(1000) DEFAULT NULL,
  `job_company_name` varchar(1000) DEFAULT NULL,
  `position_name` varchar(1000) DEFAULT NULL,
  `no.of_year` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `summery` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`s_id`, `s_name`, `surname`, `gender`, `mobile`, `email`, `photo`, `joining_year`, `graduate_year`, `dob`, `enroll_no`, `pwd`, `security_question`, `answer`, `status`, `skill`, `current_place`, `address`, `maritial_status`, `current_job_status`, `job_company_name`, `position_name`, `no.of_year`, `city`, `summery`) VALUES
(2, 'vraj', 'patel', 'male', '8160691814', 'pvraj643@gmail.com', 'gellary-img-7.jpg', '2017-05-22', '2020-04-01', '2020-02-15', 'E123456789', '1998', 'What was your childhood nickname?', 'poru', 'active', '', '', '', '', '', '', '', '', '', ''),
(3, 'ritesh', 'poriya', 'male', '9909234936', 'riteshporiya124@gmail.com', 'man-standing-near-building-white-black-turtleneck-shirt-874158.jpg', '2017-05-22', '2020-04-01', '1998-11-16', 'E1234567895', '', 'What was your childhood nickname?', 'poru', 'active', '', '', '', '', '', '', '', '', '', ''),
(4, 'hulk', 'mark rufalo', 'male', '9909234936', 'aaditya.h.panchal1432@gmail.com', 'blur-boy-casual-close-up-428333.jpg', '2017-05-22', '2020-04-01', '2011-05-10', 'E123456789545', '', 'What was your childhood nickname?', 'poru', 'active', '', '', '', '', '', '', '', '', '', ''),
(5, 'black widow', '', 'male', '9909234936', 'black@gmail.com', 'blur-boy-casual-close-up-428333.jpg', '2017-05-22', '2020-04-01', '0000-00-00', 'E12345679984', '1234', 'What was your childhood nickname?', 'poru', 'nonactive', '', '', '', '', '', '', '', '', '', ''),
(11, 'shivaji', '', 'male', '9909234936', 'vraj@gmail.com', 'Screenshot (46).png', '2017-05-22', '2020-04-01', '0000-00-00', 'E1234567895468', '', 'What was your childhood nickname?', 'poru', 'nonactive', '', '', '', '', '', '', '', '', '', ''),
(12, 'hetal', '', 'male', '9909234936', 'vraj@gmail.com', '', '2017-05-22', '2020-04-01', '0000-00-00', 'E1234567895432', '', 'What was your childhood nickname?', 'poru', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'captian', '', 'male', '9909234936', 'vraj@gmail.com', '', '2017-05-22', '2020-04-01', '0000-00-00', 'E1234567895436', '', 'What was your childhood nickname?', 'poru', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'thoar', 'ragnarok', 'male', '9099587548', 'vraj@gmail.com', 'woman-wearing-gray-notch-lapel-suit-jacket-2381069.jpg', '2020-02-04', '2020-03-04', '1998-11-16', '', '123456', 'What is your favorite color?', 'pink', 'nonactive', '', '', '', '', '', '', '', '', '', ''),
(15, 'Ritesh', 'patel', 'female', '9624785679', 'ritesh@gmail.com', 'testi-3.png', '2017-06-15', '2020-04-07', '1998-11-16', 'E12345678954', '1234', 'What is your current vehicle number?', '5675', 'nonactive', '', '', '', '', '', '', '', '', '', ''),
(16, 'Mr. Nikhilkumar ', 'Poriya', 'male', '8866051684', 'nikhilaporiya@gmail.com', '', '2017-06-20', '2020-06-12', '1896-11-24', 'E1011172589', '2558', 'What was your childhood nickname?', 'nick`s', 'active', 'structured designer and architecture', 'surat', 'eeeee1515eff', 'unmarried', 'yes', 'skylon', 'senior structured designer', '4', 'surat', 'its is very wonderfull company and many achivement.new new learning of my fields.                             '),
(17, 'Mitesh ', 'Poriya', 'male', '8866051684', 'miteshaporiya@gmail.com', '51[1].jpg', '2016-04-24', '2019-06-25', '1998-12-24', 'E1011172596', '', 'What was your childhood nickname?', 'mit', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'mark ', 'rufalo', 'male', '1562478963', 'mark@gmail.com', 'gellary-img-7.jpg', '2017-07-23', '2020-05-31', '1969-11-16', 'E10112152', '123456', 'What was your childhood nickname?', 'hulk', 'nonactive', '', '', '', '', '', '', '', '', '', ''),
(20, 'Mitesh', 'Poriya', 'male', '8866639730', 'miteshaporiya@gmail.com', '9341446836751.jpg', '2015-06-15', '2018-05-20', '1998-08-24', 'E10112558', '2558', 'What was your childhood nickname?', 'mit', 'nonactive', '', '', '', '', '', '', '', '', '', ''),
(21, 'vivan', 'patel', 'male', '1234567895', 'vivan@gmail.com', '1.jpg', '2017-04-10', '2020-04-04', '1998-11-16', 'E10118081', 'vivan', 'What was your childhood nickname?', 'vivu', 'nonactive', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apply_event`
--
ALTER TABLE `apply_event`
  ADD PRIMARY KEY (`ae_id`),
  ADD KEY `event_id` (`event_id`,`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `bio_cv`
--
ALTER TABLE `bio_cv`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `uid` (`s_id`);

--
-- Indexes for table `bio_normal`
--
ALTER TABLE `bio_normal`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `uid` (`s_id`);

--
-- Indexes for table `bio_resume`
--
ALTER TABLE `bio_resume`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `uid` (`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `bulk_mail`
--
ALTER TABLE `bulk_mail`
  ADD PRIMARY KEY (`bm_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `invite_friend`
--
ALTER TABLE `invite_friend`
  ADD PRIMARY KEY (`if_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `job_ad`
--
ALTER TABLE `job_ad`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `s_id_2` (`s_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `rate_all`
--
ALTER TABLE `rate_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_news`
--
ALTER TABLE `rate_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_detail`
--
ALTER TABLE `staff_detail`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `enroll_no` (`enroll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_event`
--
ALTER TABLE `apply_event`
  MODIFY `ae_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bio_cv`
--
ALTER TABLE `bio_cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `bio_normal`
--
ALTER TABLE `bio_normal`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `bio_resume`
--
ALTER TABLE `bio_resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bulk_mail`
--
ALTER TABLE `bulk_mail`
  MODIFY `bm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invite_friend`
--
ALTER TABLE `invite_friend`
  MODIFY `if_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_ad`
--
ALTER TABLE `job_ad`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rate_all`
--
ALTER TABLE `rate_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rate_news`
--
ALTER TABLE `rate_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_detail`
--
ALTER TABLE `staff_detail`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_event`
--
ALTER TABLE `apply_event`
  ADD CONSTRAINT `apply_event_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `apply_event_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `student_profile` (`s_id`);

--
-- Constraints for table `invite_friend`
--
ALTER TABLE `invite_friend`
  ADD CONSTRAINT `invite_friend_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student_profile` (`s_id`);

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
