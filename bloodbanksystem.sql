-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 03:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbanksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_username` varchar(20) NOT NULL,
  `A_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_username`, `A_password`) VALUES
('Admin101', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `BloodGroup` varchar(5) NOT NULL,
  `Date_donated` date DEFAULT NULL,
  `approval` int(11) DEFAULT NULL,
  `Blood_id` int(11) NOT NULL,
  `Recepient_id` int(11) DEFAULT NULL,
  `Donor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`BloodGroup`, `Date_donated`, `approval`, `Blood_id`, `Recepient_id`, `Donor_id`) VALUES
('A+', '2021-04-15', 1, 37, 123456, 98765),
('A-', '2021-05-13', 1, 38, 87654, 345678),
('A-', '2021-04-15', 1, 39, 98765, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `doctor_add` varchar(100) NOT NULL,
  `doctor_phno` varchar(10) NOT NULL,
  `d_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `doctor_add`, `doctor_phno`, `d_password`) VALUES
(101, 'Aurelio Champlin', '85428 Dortha Parkways\nBrannonfurt, WI 70540', '0654123150', '1111'),
(102, 'Melyna Gleichner', '795 Serena Viaduct\nPort Clairtown, DE 46946', '(029)164-6', '2222'),
(103, 'Lavinia Kertzmann', '928 Savannah Forks\nNew Griffin, MT 03148-3241', '184.015.56', '3333'),
(104, 'Edwin Hickle', '44903 Sanford Radial Apt. 729\nHauckburgh, AZ 38140', '0994977112', '4444'),
(105, 'Fiona Olson', '95512 Alejandrin Alley Suite 253\nGislasonberg, HI 77574', '(141)164-6', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_name` varchar(50) NOT NULL,
  `donor_city` varchar(25) NOT NULL,
  `iron_content` float NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `weight` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `D_BloodGroup` varchar(5) NOT NULL,
  `Donor_id` int(11) NOT NULL,
  `D_approval` varchar(5) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_name`, `donor_city`, `iron_content`, `ph_no`, `weight`, `email`, `DOB`, `D_BloodGroup`, `Donor_id`, `D_approval`, `doctor_id`) VALUES
('Ayush Garg', 'Mumbai', 16, '8765432103', 50, 'a1@hotmail.com', '1983-10-12', 'A+', 98765, 'NO', 102),
('Deepika Dilip Garg', 'Mumbai, Thane', 14, '9987166675', 54, 'deepikagarg12@hotmail.com', '2021-05-01', 'A-', 123456, 'NO', 102),
('Mamta Garg', 'Mumbai, Thane', 14, '9870328614', 56, 'mg@h.com', '1972-10-11', 'A-', 345678, 'NO', 102);

-- --------------------------------------------------------

--
-- Table structure for table `recepient`
--

CREATE TABLE `recepient` (
  `Recepient_id` int(11) NOT NULL,
  `R_name` varchar(20) NOT NULL,
  `R_email` varchar(50) NOT NULL,
  `R_BloodGroup` varchar(5) NOT NULL,
  `Medical_his` varchar(200) NOT NULL,
  `R_add` varchar(100) NOT NULL,
  `R_phno` varchar(10) NOT NULL,
  `R_DOB` date NOT NULL,
  `Received_Status` varchar(10) DEFAULT NULL,
  `R_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recepient`
--

INSERT INTO `recepient` (`Recepient_id`, `R_name`, `R_email`, `R_BloodGroup`, `Medical_his`, `R_add`, `R_phno`, `R_DOB`, `Received_Status`, `R_password`) VALUES
(87654, 'name', 'm@h.com', 'A-', 'None', 'Mumbai, Thane', '0987654', '2021-05-20', 'YES', 'pass'),
(98765, 'Rahul Jain', 'rahul@hotmail.com', 'a-', 'Heart patient', 'Mumbai', '9876543210', '1992-06-18', 'YES', 'pass'),
(123456, 'Deepika Garg', 'deepugarg@hotmail.com', 'A+', 'None', 'Mumbai', '9987166675', '2000-10-12', 'YES', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_username`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`Blood_id`),
  ADD KEY `Recepient_id` (`Recepient_id`),
  ADD KEY `Donor_id` (`Donor_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Donor_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `recepient`
--
ALTER TABLE `recepient`
  ADD PRIMARY KEY (`Recepient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `Blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood`
--
ALTER TABLE `blood`
  ADD CONSTRAINT `blood_ibfk_1` FOREIGN KEY (`Recepient_id`) REFERENCES `recepient` (`Recepient_id`),
  ADD CONSTRAINT `blood_ibfk_2` FOREIGN KEY (`Donor_id`) REFERENCES `donor` (`Donor_id`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
