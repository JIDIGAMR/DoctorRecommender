-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 09:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorrcmnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

DROP TABLE IF EXISTS `doctorinfo`;
CREATE TABLE `doctorinfo` (
  `doctor_id` int(11) NOT NULL,
  `doctor_first_name` varchar(30) DEFAULT NULL,
  `doctor_last_name` varchar(30) DEFAULT NULL,
  `doctor_speciality_field` varchar(30) DEFAULT NULL,
  `doctor_phone_number` varchar(30) DEFAULT NULL,
  `doctor_office_address` varchar(50) DEFAULT NULL,
  `doctor_office_location` varchar(50) DEFAULT NULL,
  `doctor_sex_type` varchar(30) DEFAULT NULL,
  `doctor_age` varchar(30) DEFAULT NULL,
  `doctor_prof_experience` varchar(30) DEFAULT NULL,
  `doctor_school_graduated` varchar(30) DEFAULT NULL,
  `doctor_highest_degree` varchar(30) DEFAULT NULL,
  `doctor_pos_ratings` int(11) NOT NULL,
  `doctor_neg_ratings` int(11) NOT NULL,
  `doctor_language_of_service` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorinfo`
--

INSERT INTO `doctorinfo` (`doctor_id`, `doctor_first_name`, `doctor_last_name`, `doctor_speciality_field`, `doctor_phone_number`, `doctor_office_address`, `doctor_office_location`, `doctor_sex_type`, `doctor_age`, `doctor_prof_experience`, `doctor_school_graduated`, `doctor_highest_degree`, `doctor_pos_ratings`, `doctor_neg_ratings`, `doctor_language_of_service`) VALUES
(1, 'Ali', 'Zulfiqar', 'Cardiology', '+1(510)-537-2920', '1544 B Street', 'Hayward', 'Male', '32', '5', 'Stanford University', 'MD', 10, 2, 'punjabi,english,hindi'),
(2, 'Amerson', 'Erin', 'Dermatology', '+1(510)-785-5000', '27212 F Street', 'Hayward', 'Female', '55', '25', 'Stanford University', 'BD', 8, 1, 'english,hindi,spanish'),
(3, 'Alexander', 'Kopelnik', 'Cardiology', '+1(510)-670-1111', '27206 C Street', 'Santa Clara', 'Female', '45', '15', 'UC Berkley University', 'MBBS', 10, 1, 'english,french,spanish'),
(4, 'Suri', 'Rajesh', 'Cardiology', '+1(510)-931-4310', '27171 Calargo Ave', 'San Jose', 'Male', '40', '10', 'Cal State East Bay Univ', 'MD', 9, 3, 'punjabi,english,hindi,spanish'),
(5, 'Carney', 'John', 'Dermatology', '+1(510)-889-5036', '27212 Z Street', 'San Jose', 'Male', '45', '15', 'San Jose State University', 'MD', 9, 2, 'english,hindi,french'),
(6, 'Chen', 'Kwan', 'Cardiology', '+1(510)-783-1736', '25200 A Street', 'Hayward', 'Female', '32', '5', 'Stanford University', 'MD', 5, 2, 'mandarin,english,hindi'),
(7, 'Ball', 'Katharine', 'Dermatology', '+1(510)-881-7822', '20055 w Street', 'Santa Clara', 'Female', '35', '5', 'Santa Clara State University', 'MD', 10, 1, 'english,hindi,french'),
(8, 'Vasiliki', 'Economu', 'Neurology', '+1(510)-881-7891', '27206 w Street', 'Hayward', 'Male', '40', '10', 'Standford University', 'MD', 9, 1, 'English,Spanish,French'),
(9, 'Bhattacharya', 'Alok', 'Neurology', '+1(510)-881-7823', '20056 w Street', 'San Jose', 'Female', '45', '15', 'San Jose State University', 'MD', 10, 3, 'English,Hindi,Punjabi'),
(10, 'Bonovich', 'David', 'Neurology', '+1(510)-881-7824', '20155 X Street', 'Santa Clara', 'Male', '40', '10', 'Santa Clara State University', 'BD', 5, 2, 'English,Hindi,French'),
(11, 'Ravi', 'Jidigam', 'Dermatology', '+1(510)-881-7825', '21055 F Street', 'Hayward', 'Male', '45', '15', 'Stanford University', 'MD', 8, 2, 'English,Hindi,Telugu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD PRIMARY KEY (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
