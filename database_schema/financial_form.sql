-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 07:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `financial_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation_expenditure`
--

CREATE TABLE IF NOT EXISTS `accomodation_expenditure` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(50) NOT NULL,
  `accomodation_type` varchar(50) NOT NULL,
  `accomodation_status` varchar(50) NOT NULL,
  `accomodation_ownership` varchar(50) NOT NULL,
  `accomodation_rent_provider` varchar(50) NOT NULL,
  `accomodation_size` varchar(50) NOT NULL,
  `accomodation_area` varchar(50) NOT NULL,
  `accomodation_value` int(50) NOT NULL,
  `accomodation_address` varchar(500) NOT NULL,
  `accomodation_bedroom` varchar(50) NOT NULL,
  `accomodation_ac` varchar(50) NOT NULL,
  `accomodation_rent` int(50) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- Table structure for table `agriculture_assets`
--

CREATE TABLE IF NOT EXISTS `agriculture_assets` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `assets_title` varchar(50) NOT NULL,
  `assets_qty` int(50) NOT NULL,
  `assets_size` int(50) NOT NULL,
  `assets_location` int(50) NOT NULL,
  `assets_cultivable_area` int(50) NOT NULL,
  `agriculture_yield` int(50) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_scholarship`
--

CREATE TABLE IF NOT EXISTS `applicant_scholarship` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(50) NOT NULL,
  `applicant_institute` varchar(50) NOT NULL,
  `educational_level` varchar(20) NOT NULL,
  `scholarship_name` varchar(50) NOT NULL,
  `scholarship_amount` varchar(50) NOT NULL,
  `scholarship_period` varchar(50) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

-- --------------------------------------------------------

--
-- Table structure for table `assets_earning`
--

CREATE TABLE IF NOT EXISTS `assets_earning` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(50) NOT NULL,
  `assets_title` varchar(50) NOT NULL,
  `assets_relation` varchar(50) NOT NULL,
  `assets_price` int(50) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

-- --------------------------------------------------------

--
-- Table structure for table `assets_worth`
--

CREATE TABLE IF NOT EXISTS `assets_worth` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(11) NOT NULL,
  `assets_title` varchar(50) NOT NULL,
  `asset_holdr_reltion` varchar(50) NOT NULL,
  `total` int(50) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

-- --------------------------------------------------------

--
-- Table structure for table `career_goals`
--

CREATE TABLE IF NOT EXISTS `career_goals` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(50) NOT NULL,
  `goal1` varchar(500) NOT NULL,
  `goal2` varchar(500) NOT NULL,
  `goal3` varchar(500) NOT NULL,
  `goal4` varchar(500) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

-- --------------------------------------------------------

--
-- Table structure for table `earning_info`
--

CREATE TABLE IF NOT EXISTS `earning_info` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(10) NOT NULL,
  `earning_member_name` varchar(50) NOT NULL,
  `earning_member_relation` varchar(10) NOT NULL,
  `earning_member_occupation` varchar(50) NOT NULL,
  `earning_member_organization` varchar(50) NOT NULL,
  `earning_member_designation` varchar(50) NOT NULL,
  `earning_member_monthly_earning` int(50) NOT NULL,
  `earning_member_remarks` int(11) NOT NULL,
  `earning_member_cnic` varchar(15) NOT NULL,
  `earning_member_status` varchar(10) NOT NULL,
  `earning_member_professional_status` varchar(10) NOT NULL,
  `earning_member_company_name` varchar(50) NOT NULL,
  `earning_member_address` varchar(500) NOT NULL,
  `earning_member_mobile` varchar(50) NOT NULL,
  `earning_member_office_number` varchar(50) NOT NULL,
  `earning_member_grade` varchar(50) NOT NULL,
  `earning_member_ntn` varchar(50) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

-- --------------------------------------------------------

--
-- Table structure for table `educational_record`
--

CREATE TABLE IF NOT EXISTS `educational_record` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `level` varchar(100) NOT NULL,
  `applicant_institute` varchar(50) NOT NULL,
  `applicant_monthly_fee` int(50) NOT NULL,
  `start_school` varchar(50) NOT NULL,
  `finish_school` varchar(20) NOT NULL,
  `applicant_division` varchar(20) NOT NULL,
  `applicant_percentage` int(20) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

-- --------------------------------------------------------

--
-- Table structure for table `family_member_info`
--

CREATE TABLE IF NOT EXISTS `family_member_info` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(10) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_relation` varchar(10) NOT NULL,
  `member_martial_status` varchar(10) NOT NULL,
  `member_remarks` int(10) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uob` int(6) NOT NULL,
  `fcnic` varchar(500) NOT NULL,
  `mcnic` varchar(500) NOT NULL,
  `gnic` varchar(500) NOT NULL,
  `ftax` varchar(500) NOT NULL,
  `mtax` varchar(500) NOT NULL,
  `gtax` varchar(500) NOT NULL,
  `fslry` varchar(500) NOT NULL,
  `mslry` varchar(500) NOT NULL,
  `gslry` varchar(500) NOT NULL,
  `etrctcty` varchar(500) NOT NULL,
  `gas` varchar(500) NOT NULL,
  `tlphn` varchar(500) NOT NULL,
  `wtr` varchar(500) NOT NULL,
  `rentag` varchar(500) NOT NULL,
  `feesb` varchar(500) NOT NULL,
  `scrdoc` varchar(500) NOT NULL,
  `ppdoc` varchar(500) NOT NULL,
  `bnkst` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- Table structure for table `funds_availablity`
--

CREATE TABLE IF NOT EXISTS `funds_availablity` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `funds_frm_income` int(11) NOT NULL,
  `provider_relation` varchar(11) NOT NULL,
  `funds_amount` int(11) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

-- --------------------------------------------------------

--
-- Table structure for table `other_expenditures`
--

CREATE TABLE IF NOT EXISTS `other_expenditures` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `telephone_last` int(11) NOT NULL,
  `electricity_last` int(11) NOT NULL,
  `gas_last` int(11) NOT NULL,
  `water_last` int(11) NOT NULL,
  `mobile_last` int(11) NOT NULL,
  `telephone_six` int(11) NOT NULL,
  `electricity_six` int(11) NOT NULL,
  `gas_six` int(11) NOT NULL,
  `water_six` int(11) NOT NULL,
  `mobile_six` int(50) NOT NULL,
  `kitchen_expenditures` int(11) NOT NULL,
  `servent_expenditures` int(50) NOT NULL,
  `medical_expenditures` int(11) NOT NULL,
  `traveling_expenditures` int(11) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

-- --------------------------------------------------------

--
-- Table structure for table `personal_expendtiures`
--

CREATE TABLE IF NOT EXISTS `personal_expendtiures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(50) NOT NULL,
  `applicant_food_ex` int(50) NOT NULL,
  `applicant_clg_fee` int(50) NOT NULL,
  `applicant_hostel_fee` int(50) NOT NULL,
  `applicant_medicine_ex` int(50) NOT NULL,
  `applicant_mobile_ex` int(50) NOT NULL,
  `applicant_traveling_ex` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(10) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_father` varchar(20) NOT NULL,
  `applicant_gender` varchar(10) NOT NULL,
  `applicant_cnic` varchar(50) NOT NULL,
  `applicant_age` int(10) NOT NULL,
  `applicant_birth_place` varchar(100) NOT NULL,
  `applicant_present_address` varchar(250) NOT NULL,
  `applicant_permenent_address` varchar(250) NOT NULL,
  `applicant_residence_telephone` varchar(50) NOT NULL,
  `applicant_mobile` varchar(50) NOT NULL,
  `applicant_email` varchar(50) NOT NULL,
  `applicant_total_family_members` int(10) NOT NULL,
  `applicant_living_family_members` int(10) NOT NULL,
  `applicant_married_family_members` int(10) NOT NULL,
  `applicant_earning_members` int(10) NOT NULL,
  `applicant_not_earning_members` int(10) NOT NULL,
  `applicant_studying_members` int(10) NOT NULL,
  `familty_transport` varchar(3) NOT NULL,
  `No_of_cattles` int(50) NOT NULL,
  `location_of_land` varchar(100) NOT NULL,
  `taxes_paid` int(50) NOT NULL,
  PRIMARY KEY (`sr_no`,`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(50) NOT NULL,
  `result_name` varchar(50) NOT NULL,
  `result_father` varchar(50) NOT NULL,
  `result_cnic` varchar(50) NOT NULL,
  `result_mobile` varchar(20) NOT NULL,
  `result_income` int(20) NOT NULL,
  `result_worth` int(20) NOT NULL,
  `result_expenditures` int(20) NOT NULL,
  `result_fund_available` int(20) NOT NULL,
  `result_depisable` int(20) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Table structure for table `sibblings_studying`
--

CREATE TABLE IF NOT EXISTS `sibblings_studying` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `sibbling_name` varchar(50) NOT NULL,
  `sibbling_relation` varchar(50) NOT NULL,
  `sibbling_institue` varchar(50) NOT NULL,
  `sibbling_monthly_fee` int(20) NOT NULL,
  `sibbling_tution_fee` int(20) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

-- --------------------------------------------------------

--
-- Table structure for table `transport_assets`
--

CREATE TABLE IF NOT EXISTS `transport_assets` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(10) NOT NULL,
  `transport_type` varchar(50) NOT NULL,
  `transport_model` varchar(50) NOT NULL,
  `transport_engine` varchar(50) NOT NULL,
  `transport_registration` varchar(20) NOT NULL,
  `ownership_period` varchar(20) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE IF NOT EXISTS `users_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`id`, `username`, `pwd`) VALUES
(1, '15026436', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
