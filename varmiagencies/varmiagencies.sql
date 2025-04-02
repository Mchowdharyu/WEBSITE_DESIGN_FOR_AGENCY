-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 03:13 PM
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
-- Database: `varmiagencies`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `clid` int(11) NOT NULL,
  `name` varchar(1200) NOT NULL,
  `address` varchar(1200) NOT NULL,
  `telno` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `prid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`clid`, `name`, `address`, `telno`, `price`, `prid`) VALUES
(1, 'Owais Tiwari', '66, DiptiPur, Surat - 262941', 2147483647, 1200, 1),
(2, 'Jagruti Hanuman Mammen', '68, Natwar Heights, PrernaGunj Raipur - 371056', 2147483647, 1100, 32),
(3, 'Parveen Prasad Kannan', '83, Binod Apartments, Chandpole Gurgaon - 427445', 2147483647, 1200, 33),
(4, 'Mukund Pratap Pradhan', '79, RitaGunj, Vishakhapattanam - 392526 ', 2147483647, 1200, 34),
(5, 'Mukund Sastry', '96, Model Town, Jabalpur - 514875 ', 2147483647, 1000, 35),
(6, 'Yogesh Dinesh Agrawa', '69, Prabhat Society, Goregaon Jammu - 173930', 2147483647, 1200, 36),
(7, 'Prasoon Bera', '49, Manjari Apartments, Heer Nagar Gandhinagar - 286515', 2147483647, 1200, 37),
(8, 'Bishnu Sharad Khanna', '68, Vimala Apartments, Hinjewadi Bhopal - 336457 ', 2147483647, 110, 38),
(9, 'Kanika Nadkarni', '97, Jiya Heights, MonaPur Udaipur - 481853 ', 2147483647, 1200, 39),
(10, 'Sunita Mohanlal Chatterjee', '67, Qadim Apartments, Yamini Chowk Kota - 454731', 2147483647, 1200, 40),
(11, 'Yash Siddharth Shanker', '20, Hira Nagar, Kanpur - 362284 ', 2147483647, 1200, 41),
(12, 'Anjana Sibal', '66, JagatGunj, Pune - 111602 ', 2147483647, 1200, 42),
(13, 'Aslam Chana', '92, Pamela Apartments, Bandra Gurgaon - 111801', 2147483647, 1200, 43),
(14, 'Chirag Mallick', '30, Babita Society, Churchgate Nagpur - 529934', 2147483647, 123, 44),
(15, 'Jawahar Pandit', ' 43, Borivali, Ranchi - 575704', 2147483647, 900, 45),
(16, 'John Kumar Deep', '21, Vikhroli, Mumbai - 174457', 2147483647, 1200, 46),
(17, 'Pranab Brock Chhabra', '51, Padama Apartments, Churchgate Chandigarh - 477923', 2147483647, 1200, 47),
(18, 'Kusum Ganguly', '96, Goregaon, Chennai - 320747', 2147483647, 1200, 48),
(19, 'Teena Din', '68, Kajal Apartments, TeenaGunj Meerut - 503855 ', 2147483647, 1100, 49),
(20, 'Ambika Lodi', '31, Wafa Society, HabibGarh Gurgaon - 456467', 2147483647, 1200, 50),
(21, 'Savita Dua', '51, RaginiPur, Mumbai - 523936', 501656877, 389, 1),
(22, 'Astha Sengupta', '12, Neha Heights, Himesh Nagar Vishakhapattanam - 551694', 2147483647, 1200, 32),
(23, 'Bimla Raman', '96, Radheshyam Society, Virar Agra - 596010', 2147483647, 1200, 43),
(24, 'Chameli Pandit', '89, Marathahalli, Panaji - 256559', 2147483647, 1200, 34),
(25, 'Rashid Sen', '93, Harmada, Jaipur - 149254 ', 2147483647, 1200, 35),
(26, 'Ghanshyam Jaggi', '89, Harmada, Bengaluru - 220345', 2147483647, 1200, 36),
(27, 'Krishna Nadkarni', '73, Wafa Apartments, Hinjewadi Noida - 434298', 2147483647, 1200, 37),
(28, 'Kushal Rao Rajan', '28, Kunti Apartments, NehaGunj Chennai - 257587 ', 2147483647, 1200, 38),
(29, 'Aarif Master', '71, Harmada, Raipur - 368149 ', 2147483647, 1200, 39),
(30, 'Chhaya Pranay Mehrotra', '98, Sukriti Villas, Model Town Jabalpur - 201501 ', 2147483647, 800, 40);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `prid` int(11) NOT NULL,
  `name` varchar(1200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `stockprice` int(11) NOT NULL,
  `stockbuyp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`prid`, `name`, `quantity`, `stockprice`, `stockbuyp`) VALUES
(1, 'Ventilators', 50, 1200, 1000),
(32, 'Cardiopulmonary bypass device', 40, 1200, 900),
(33, 'Dialysis machine', 30, 1200, 876),
(34, 'Infusion pumps', 20, 1200, 255),
(35, 'LASIK surgical machine', 10, 1200, 999),
(36, 'Medical lasers', 10, 1200, 345),
(37, 'Consult 120 Urine Analyzer', 88, 1200, 1200),
(38, 'Urine Reagent Strips 10 Parameter', 78, 1200, 980),
(39, 'Consult Liquid Urine Control', 68, 1200, 1000),
(40, 'Plastic urine containers, sterile or unsterile', 8, 1200, 240),
(41, 'Conical centrifuge tube, 15 ml', 9, 1200, 120),
(42, 'Microscope slides and 1 coverslip', 6, 1200, 569),
(43, 'Clinical Centrifuge', 17, 1200, 1100),
(44, 'Flow cytometers', 18, 1200, 1000),
(45, 'Blood gas analyzers', 19, 1200, 340),
(46, 'Electrolyte analyzers', 10, 1200, 800),
(47, 'Differential counters', 21, 1200, 240),
(48, 'Coagulation analyzers', 23, 1200, 900),
(49, 'Slide strainers', 12, 1200, 900),
(50, 'Magnetic resonance imaging (MRI)', 78, 1200, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supid` int(11) NOT NULL,
  `name` varchar(1200) NOT NULL,
  `address` varchar(1200) NOT NULL,
  `prid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supid`, `name`, `address`, `prid`) VALUES
(1, 'Aknesh Sudha', '101 5th street', 1),
(4, 'Baalkrishan Dugali', '876 N 300th W', 34),
(5, 'Mayawati Master', '106 W Parramatta Ln', 35),
(6, 'Prabha Khosla', '2089 Woodview Dr', 36),
(7, 'Mehul Somani', '1 S Main St', 37),
(8, 'Nitin Gole', '12476 S Silverwolf Way 2700 W', 38),
(9, 'Sameera Venkat Pal', '337 North Street', 39),
(10, 'Animesh Dev Batta', '442 Austin Secret Lane', 40),
(11, 'Mayawati Dar', '3754 Kemper Lane', 41),
(12, 'Himani Sha', '274,chitalia Hse, Cawasjihormusji St', 42),
(13, 'Aayushman Vohra', 'B-2/3, Shiv Bhole Laghu', 43),
(14, 'Poonam Majumda', '08, 92 Deepali Building', 44),
(15, 'Kamlesh Lal Sagar', ' K 3, Shopping Complex Som Vihar Apartmen', 45),
(16, 'Divya Garde', ' Nr. Geeta Mandir, Pratapnagar Road', 46),
(17, 'Divya Garde', ' 20 Special Economic Zone', 47),
(18, 'Sameera Bera', ' 204, Ashirwad Indust.est-2', 48),
(19, 'Bhaagyasree Umar Ramakrishnan', '2nd Floor, 287, Abdul Rehman Street', 49),
(20, 'Owais Tiwari', '101,azalea Apts.,baner Rd.', 50),
(32, 'Rita Prabhu', '4554 W Vermillion Dr\r\nSouth Jordan', 32),
(33, 'Sapna Jaggi', '7327 W Paine Rd', 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
