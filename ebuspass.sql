-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2017 at 04:22 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ebuspass`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_login`
--

CREATE TABLE IF NOT EXISTS `ad_login` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ad_login`
--

INSERT INTO `ad_login` (`ad_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `depot_master`
--

CREATE TABLE IF NOT EXISTS `depot_master` (
  `d_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `depot_master`
--

INSERT INTO `depot_master` (`d_id`, `d_name`) VALUES
(1, 'Nava vadaj'),
(2, 'Juna vadaj'),
(3, 'Lal Darwaja'),
(4, 'Kalupur'),
(5, 'Paladi'),
(6, 'jamalpur'),
(7, 'Sabarmati'),
(8, 'Chandkheda');

-- --------------------------------------------------------

--
-- Table structure for table `emp_handi_pass`
--

CREATE TABLE IF NOT EXISTS `emp_handi_pass` (
  `emp_handi_pass_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `adhar_image` varchar(255) NOT NULL,
  `tod` varchar(20) NOT NULL,
  `pod` varchar(20) NOT NULL,
  `did` varchar(20) NOT NULL,
  `d_image` varchar(255) NOT NULL,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changeno` varchar(50) NOT NULL,
  `jstart` varchar(10) NOT NULL,
  `jend` varchar(10) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_handi_pass_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `emp_handi_pass`
--

INSERT INTO `emp_handi_pass` (`emp_handi_pass_id`, `id`, `category`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `pin`, `cno`, `eid`, `adharno`, `user_image`, `adhar_image`, `tod`, `pod`, `did`, `d_image`, `place_sit`, `change_place`, `alight_place`, `trano`, `changeno`, `jstart`, `jend`, `passmonth`) VALUES
(4, 23, 'handiemployee', 'abc', 'abc', 'a', 'male', '2015-02-02', 'abc', 380012, 1234569820, 'abc@gmail.com', 123456789012, 'img1.jpg', 'img2.jpg', 'lag', '20', '1234567890', 'img3.jpg', 'abc', 'abc', 'abc', '501', '401', '08:00', '09:00', '6month');

-- --------------------------------------------------------

--
-- Table structure for table `emp_reg_pass`
--

CREATE TABLE IF NOT EXISTS `emp_reg_pass` (
  `emp_reg_pass_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `adhar_image` varchar(255) NOT NULL,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changeno` varchar(50) NOT NULL,
  `jstart` varchar(10) NOT NULL,
  `jend` varchar(10) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_reg_pass_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `emp_reg_pass`
--

INSERT INTO `emp_reg_pass` (`emp_reg_pass_id`, `id`, `category`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `pin`, `cno`, `eid`, `adharno`, `user_image`, `adhar_image`, `place_sit`, `change_place`, `alight_place`, `trano`, `changeno`, `jstart`, `jend`, `passmonth`) VALUES
(4, 20, 'Employee', 'patel', 'nishil', 'p', 'male', '2016-01-01', 'ranip', 380012, 8485952549, 'nishil@gmail.com', 123456789012, 'img1.jpg', 'img2.jpg', 'ranip', 'navavadaj', 'khataraj', '71', '70', '09:00', '05:00', '1month');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `id`, `name`, `email`, `subject`, `message`) VALUES
(3, 19, 'mayank', 'mayankmodi90@gmail.com', 'aboutpass', 'abc'),
(2, 5, 'mayank', 'mayankmodi90@gmail.com', 'profile', 'please design change in red color'),
(4, 20, 'nishil', 'nishil@gmail.com', 'forpass', 'ksdbchsbckjsnbxc'),
(5, 21, 'kiran', 'kiran@gmail.com', 'nothing', 'skjbsjakbdka'),
(6, 22, 'kunal', 'kunal', 'temp', 'akbdksabdjk'),
(7, 23, 'abc', 'abc@gmail.com', 'like', 'dasdhsbdb');

-- --------------------------------------------------------

--
-- Table structure for table `mainfeedback`
--

CREATE TABLE IF NOT EXISTS `mainfeedback` (
  `f_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mainfeedback`
--

INSERT INTO `mainfeedback` (`f_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'abc', 'abc@abc.com', 'abcdefg', 'fdsdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `uname`, `pass`, `cpass`, `emailid`, `contactno`) VALUES
(22, 'kunal', 'more', 'kunalmore1', '123', '123', 'kunalmore@gmail.com', 1234567890),
(21, 'Kiran', 'patel', 'kiranpatel12', '123', '123', 'kiranpatel@gmail.com', 4561237890),
(20, 'nishil', 'patel', 'nishilpatel1', '123', '123', 'nishilpatel@gmail.com', 7894561230),
(19, 'mayank', 'modi', 'mayankmodi90', '123', '123', 'mayankmodi90@hotmail.com', 7600805984),
(23, 'abc', 'abc', 'abc1', '123', '123', 'abc@gmail.com', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `renew_employee`
--

CREATE TABLE IF NOT EXISTS `renew_employee` (
  `emp_reg_pass_id` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changeno` varchar(50) NOT NULL,
  `jstart` varchar(10) NOT NULL,
  `jend` varchar(10) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `renew_employee`
--

INSERT INTO `renew_employee` (`emp_reg_pass_id`, `id`, `place_sit`, `change_place`, `alight_place`, `trano`, `changeno`, `jstart`, `jend`, `passmonth`) VALUES
(4, 4, 'ranip', 'navavadaj', 'khataraj', '71', '70', '09:00', '05:00', '6month');

-- --------------------------------------------------------

--
-- Table structure for table `renew_handi_emp`
--

CREATE TABLE IF NOT EXISTS `renew_handi_emp` (
  `emp_handi_pass_id` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changno` varchar(50) NOT NULL,
  `jstart` varchar(10) NOT NULL,
  `jend` varchar(10) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `renew_handi_emp`
--

INSERT INTO `renew_handi_emp` (`emp_handi_pass_id`, `id`, `place_sit`, `change_place`, `alight_place`, `trano`, `changno`, `jstart`, `jend`, `passmonth`) VALUES
(4, 3, 'abc', 'abc', 'abc', '300', '401', '08:00', '09:00', '3month');

-- --------------------------------------------------------

--
-- Table structure for table `renew_handi_stu`
--

CREATE TABLE IF NOT EXISTS `renew_handi_stu` (
  `stu_handi_pass_id` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `scname` varchar(150) NOT NULL,
  `scaddress` varchar(255) NOT NULL,
  `sc_cno` bigint(20) NOT NULL,
  `bono_image` varchar(255) NOT NULL,
  `tstart` varchar(20) NOT NULL,
  `tend` varchar(20) NOT NULL,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changeno` varchar(50) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `renew_handi_stu`
--

INSERT INTO `renew_handi_stu` (`stu_handi_pass_id`, `id`, `scname`, `scaddress`, `sc_cno`, `bono_image`, `tstart`, `tend`, `place_sit`, `change_place`, `alight_place`, `trano`, `changeno`, `passmonth`) VALUES
(4, 3, 'alpha', 'khataraj', 1234567890, 'img4.jpg', '2017-05-01', '2017-10-01', 'naroda', 'incomtax', 'khataraj', '66', '65', '6month');

-- --------------------------------------------------------

--
-- Table structure for table `renew_senior`
--

CREATE TABLE IF NOT EXISTS `renew_senior` (
  `sen_reg_pass_id` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `top` varchar(30) NOT NULL,
  `proof_id` varchar(30) NOT NULL,
  `proof_image` varchar(255) NOT NULL,
  `proof_home` varchar(30) NOT NULL,
  `home_image` varchar(255) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `renew_senior`
--

INSERT INTO `renew_senior` (`sen_reg_pass_id`, `id`, `top`, `proof_id`, `proof_image`, `proof_home`, `home_image`, `passmonth`) VALUES
(4, 3, '75year', 'driving', 'img4.jpg', 'voterid', 'img4.jpg', '3month');

-- --------------------------------------------------------

--
-- Table structure for table `renew_student`
--

CREATE TABLE IF NOT EXISTS `renew_student` (
  `stu_handi_pass_id` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `scname` varchar(150) NOT NULL,
  `scaddress` varchar(255) NOT NULL,
  `sc_cno` bigint(20) NOT NULL,
  `bono_image` varchar(255) NOT NULL,
  `tstart` varchar(20) NOT NULL,
  `tend` varchar(20) NOT NULL,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changeno` varchar(50) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `renew_student`
--

INSERT INTO `renew_student` (`stu_handi_pass_id`, `id`, `scname`, `scaddress`, `sc_cno`, `bono_image`, `tstart`, `tend`, `place_sit`, `change_place`, `alight_place`, `trano`, `changeno`, `passmonth`) VALUES
(5, 5, 'alpha', 'khataraj', 2756170612, 'img2.jpg', '2017-05-01', '2017-10-01', 'junavdaj', 'navavadaj', 'khataraj', '71', '70', '3month');

-- --------------------------------------------------------

--
-- Table structure for table `route_master`
--

CREATE TABLE IF NOT EXISTS `route_master` (
  `r_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `r_area` varchar(50) NOT NULL,
  `depot` varchar(50) NOT NULL,
  `r_bus_num` varchar(10) NOT NULL,
  `all_route` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `route_master`
--

INSERT INTO `route_master` (`r_id`, `r_area`, `depot`, `r_bus_num`, `all_route`) VALUES
(1, 'ranip', 'Juna Vadaj', '82', 'g-mandir, bhimajipura, vadaj, incomtex, lal-darwaja'),
(2, 'ranip', 'Juna Vadaj', '146/1', 'ranip, bhimjipura, vadaj, incomtex, kalupur, sarangpur, odhav, chinubhainagar'),
(3, 'ranip', 'Juna Vadaj', '40/3', 'g-mandir, bhimajipura, vadaj, usmanpura, naranpura, university, maninagar'),
(4, 'ranip', 'Lal Darwaja', '13/1', 'ranip, rto, vadaj, incometax, lal-darawaja, maninagar, isanpur'),
(5, 'ranip', 'Nava Vadaj', '202', ''),
(6, 'ranip', 'Nava Vadaj', '204', ''),
(7, 'new ranip', 'Lal Darwaja', '74', 'kadigam, newranip, vyasvadi, adani-gas, vadaj, incometax, lal-darwaja'),
(8, 'new ranip', 'Lal Darwaja', '74/1', 'kadigam, newranip, vyasvadi, adani-gas, vadaj, incometax, lal-darwaja'),
(9, 'new ranip', 'Kalupur', '79', 'kadigam, newranip, vyasvadi, adani-gas, vadaj, incometax, lal-darwaja');

-- --------------------------------------------------------

--
-- Table structure for table `sen_reg_pass`
--

CREATE TABLE IF NOT EXISTS `sen_reg_pass` (
  `sen_reg_pass_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `top` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `proof_id` varchar(30) NOT NULL,
  `proof_image` varchar(255) NOT NULL,
  `proof_home` varchar(30) NOT NULL,
  `home_image` varchar(255) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`sen_reg_pass_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sen_reg_pass`
--

INSERT INTO `sen_reg_pass` (`sen_reg_pass_id`, `id`, `category`, `top`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `pin`, `cno`, `eid`, `adharno`, `user_image`, `proof_id`, `proof_image`, `proof_home`, `home_image`, `passmonth`) VALUES
(4, 21, 'Senior', '65year', 'patel', 'kiran', 'p', 'male', '2015-02-01', 'ranip', 380062, 1234569820, 'kiran@gmail.com', 123456789012, 'img1.jpg', 'borncirti', 'img2.jpg', 'adhar', 'img2.jpg', '1month');

-- --------------------------------------------------------

--
-- Table structure for table `stu_handi_pass`
--

CREATE TABLE IF NOT EXISTS `stu_handi_pass` (
  `stu_handi_pass_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `adhar_image` varchar(255) NOT NULL,
  `scname` varchar(150) NOT NULL,
  `scaddress` varchar(255) NOT NULL,
  `sc_cno` bigint(20) NOT NULL,
  `bono_image` varchar(255) NOT NULL,
  `tstart` varchar(20) NOT NULL,
  `tend` varchar(20) NOT NULL,
  `tod` varchar(20) NOT NULL,
  `pod` varchar(20) NOT NULL,
  `did` varchar(20) NOT NULL,
  `d_image` varchar(255) NOT NULL,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changeno` varchar(50) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`stu_handi_pass_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stu_handi_pass`
--

INSERT INTO `stu_handi_pass` (`stu_handi_pass_id`, `id`, `category`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `pin`, `cno`, `eid`, `adharno`, `user_image`, `adhar_image`, `scname`, `scaddress`, `sc_cno`, `bono_image`, `tstart`, `tend`, `tod`, `pod`, `did`, `d_image`, `place_sit`, `change_place`, `alight_place`, `trano`, `changeno`, `passmonth`) VALUES
(4, 22, 'handistudent', 'more', 'kunnal', 'l', 'male', '2014-02-05', 'naroda', 380062, 1234569820, 'kunal@gmail.com', 123456789012, 'img1.jpg', 'img2.jpg', 'alpha', 'khataraj', 1234567890, 'img3.jpg', '2017-01-01', '2017-05-01', 'hand', '10', '1234567890', 'img4.jpg', 'naroda', 'incomtax', 'khataraj', '66', '65', '1month');

-- --------------------------------------------------------

--
-- Table structure for table `stu_reg_pass`
--

CREATE TABLE IF NOT EXISTS `stu_reg_pass` (
  `stu_reg_pass_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `pass_category` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `adhar_image` varchar(255) NOT NULL,
  `scname` varchar(255) NOT NULL,
  `scaddress` varchar(255) NOT NULL,
  `sc_cno` bigint(20) NOT NULL,
  `bono_image` varchar(255) NOT NULL,
  `tstart` varchar(20) NOT NULL,
  `tend` varchar(20) NOT NULL,
  `place_sit` varchar(20) NOT NULL,
  `change_place` varchar(20) NOT NULL,
  `alight_place` varchar(20) NOT NULL,
  `trano` varchar(50) NOT NULL,
  `changeno` varchar(50) NOT NULL,
  `passmonth` varchar(30) NOT NULL,
  PRIMARY KEY (`stu_reg_pass_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stu_reg_pass`
--

INSERT INTO `stu_reg_pass` (`stu_reg_pass_id`, `id`, `pass_category`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `pin`, `cno`, `eid`, `adharno`, `user_image`, `adhar_image`, `scname`, `scaddress`, `sc_cno`, `bono_image`, `tstart`, `tend`, `place_sit`, `change_place`, `alight_place`, `trano`, `changeno`, `passmonth`) VALUES
(1, 19, 'Student', 'modi', 'mayank', 'jitendrabhai', 'male', '1996-09-12', '1969/5  modi bhavan,patel vas, juna vadaj, ahmedabad', 380012, 7600805984, 'mayankmodi90@gmail.com', 123456789012, 'img1.jpg', 'img2.jpg', 'alpha collage og engineering and technology', 'khataraj', 1234567890, 'img3.jpg', '2017-01-01', '2017-05-01', 'junavdaj', 'navavadaj', 'khataraj', '70', '71', '3');
