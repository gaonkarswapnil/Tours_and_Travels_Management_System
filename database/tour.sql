-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 08:23 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_bus`
--

CREATE TABLE IF NOT EXISTS `add_bus` (
  `BUSNAME` varchar(100) NOT NULL,
  `AFROM` varchar(50) NOT NULL,
  `DEPTIME` time DEFAULT NULL,
  `ATO` varchar(50) NOT NULL,
  `ARRIVALTIME` time DEFAULT NULL,
  `IMAGE` blob NOT NULL,
  `SLEEPER` int(100) DEFAULT NULL,
  `AC` int(100) DEFAULT NULL,
  `DELUXE` int(100) DEFAULT NULL,
  `FOOD` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_bus`
--

INSERT INTO `add_bus` (`BUSNAME`, `AFROM`, `DEPTIME`, `ATO`, `ARRIVALTIME`, `IMAGE`, `SLEEPER`, `AC`, `DELUXE`, `FOOD`) VALUES
('Volvo', 'Mumbai', '10:00:00', 'GOA', '18:00:00', 0x566f6c766f2e6a7067, 500, 800, 1000, 300),
('Volvo', 'Mumbai', '11:00:00', 'Banglore', '23:30:00', 0x566f6c766f2e6a7067, 800, 1000, 1500, 300),
('Volvo', 'Goa', '10:00:00', 'Mumbai', '18:00:00', 0x566f6c766f2e6a7067, 500, 800, 1000, 300),
('Volvo', 'Goa', '11:00:00', 'Banglore', '17:30:00', 0x566f6c766f2e6a7067, 700, 1000, 1500, 300),
('Volvo', 'Banglore', '11:00:00', 'GOA', '17:30:00', 0x566f6c766f2e6a7067, 500, 700, 1000, 300),
('Volvo', 'Banglore', '10:00:00', 'Mumbai', '22:30:00', 0x566f6c766f2e6a7067, 800, 1000, 1500, 300);

-- --------------------------------------------------------

--
-- Table structure for table `add_flight`
--

CREATE TABLE IF NOT EXISTS `add_flight` (
  `FLIGHTNAME` varchar(100) NOT NULL,
  `AFROM` varchar(50) NOT NULL,
  `TAKEOFTIME` time DEFAULT NULL,
  `ATO` varchar(50) NOT NULL,
  `ARRIVALTIME` time DEFAULT NULL,
  `IMAGE` blob NOT NULL,
  `ECONOMY` int(100) DEFAULT NULL,
  `BUSINESS` int(100) DEFAULT NULL,
  `FIRSTCLASS` int(100) DEFAULT NULL,
  `FOOD` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_flight`
--

INSERT INTO `add_flight` (`FLIGHTNAME`, `AFROM`, `TAKEOFTIME`, `ATO`, `ARRIVALTIME`, `IMAGE`, `ECONOMY`, `BUSINESS`, `FIRSTCLASS`, `FOOD`) VALUES
('Air India', 'Mumbai', '10:00:00', 'GOA', '11:15:00', 0x6169722e6a7067, 1500, 2000, 0, 500),
('Air India', 'Mumbai', '11:00:00', 'Banglore', '02:00:00', 0x6169722e6a7067, 2000, 3000, 0, 500),
('Air India', 'Banglore', '12:00:00', 'Mumbai', '15:00:00', 0x6169722e6a7067, 2000, 3000, 0, 500),
('Air India', 'Banglore', '05:00:00', 'GOA', '07:00:00', 0x6169722e6a7067, 1700, 2500, 0, 500),
('Air India', 'Goa', '08:00:00', 'Banglore', '10:00:00', 0x6169722e6a7067, 1700, 2500, 0, 500),
('Air India', 'Goa', '09:15:00', 'Mumbai', '10:30:00', 0x6169722e6a7067, 1500, 2000, 0, 500),
('Indigo', 'Goa', '12:00:00', 'Mumbai', '13:45:00', 0x696e6469676f2e6a7067, 3000, 4000, 6000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Goa', '14:00:00', 'Mumbai', '16:00:00', '', 3000, 5000, 7000, 500),
('Spicejet', 'Mumbai', '11:13:00', 'Banglore', '12:00:00', '', 5600, 7200, 9000, 1000),
('Jet Airways', 'Mumbai', '15:00:00', 'Banglore', '17:00:00', 0x6a65742e6a7067, 2500, 3650, 5400, 500),
('Spicejet', 'Banglore', '16:00:00', 'Mumbai', '17:00:00', 0x73706963652e6a7067, 4000, 7000, 1000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `add_hotel`
--

CREATE TABLE IF NOT EXISTS `add_hotel` (
  `HOTELNAME` varchar(100) NOT NULL,
  `ASTATE` varchar(50) NOT NULL,
  `ADDRESS` varchar(500) DEFAULT NULL,
  `FACILITIES` varchar(500) NOT NULL,
  `IMAGE` blob,
  `AC` int(100) DEFAULT NULL,
  `STANDARD` int(100) DEFAULT NULL,
  `DELUXE` int(100) DEFAULT NULL,
  `FOOD` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_hotel`
--

INSERT INTO `add_hotel` (`HOTELNAME`, `ASTATE`, `ADDRESS`, `FACILITIES`, `IMAGE`, `AC`, `STANDARD`, `DELUXE`, `FOOD`) VALUES
('Grand Hyatt', 'Goa', 'Grand Hyatt, P.O Goa University, Road, Bambolim, Goa 403206', 'Indoor and Outdoor Pool, SPA, Upscale rooms with private terraces, 2 Bars', 0x686f74656c312e6a7067, 4000, 7000, 9000, 1500),
('The Fern Kadamba', 'Goa', 'The Fern Kadamba, Kadamba Plateau, Panjim, Old Goa Rd, Goa Velha, Goa 403402', 'Indoor and Outdoor Pool, SPA, Upscale rooms with private terraces, 2 Bars', 0x686f74656c322e6a7067, 5000, 7500, 10000, 2000),
('The Crown', 'Goa', 'The Crown, Rua JosÃ© FalcÃ£o, Bairro Alto, Dos Pilotos, Altinho, Panaji, Goa 403001', 'Indoor and Outdoor Pool, SPA, Upscale rooms with private terraces, 2 Bars', 0x686f74656c332e6a7067, 5000, 8000, 12000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `add_train`
--

CREATE TABLE IF NOT EXISTS `add_train` (
  `TRAINNAME` varchar(100) NOT NULL,
  `AFROM` varchar(50) NOT NULL,
  `DEPTIME` time DEFAULT NULL,
  `ATO` varchar(50) NOT NULL,
  `ARRIVALTIME` time DEFAULT NULL,
  `IMAGE` blob NOT NULL,
  `SLEEPER` int(100) DEFAULT NULL,
  `SITTING` int(100) DEFAULT NULL,
  `AC` int(100) DEFAULT NULL,
  `FOOD` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_train`
--

INSERT INTO `add_train` (`TRAINNAME`, `AFROM`, `DEPTIME`, `ATO`, `ARRIVALTIME`, `IMAGE`, `SLEEPER`, `SITTING`, `AC`, `FOOD`) VALUES
('Goa Express', 'Mumbai', '10:00:00', 'GOA', '18:00:00', 0x566f6c766f2e6a7067, 700, 400, 1000, 300),
('Banglore Express', 'Mumbai', '05:00:00', 'Banglore', '22:00:00', 0x747261696e322e6a7067, 1000, 700, 1500, 500),
('Mumbai Mail', 'Goa', '11:00:00', 'Mumbai', '19:00:00', 0x747261696e322e6a7067, 700, 400, 1000, 300),
('Banglore Express', 'Goa', '11:00:00', 'Banglore', '17:00:00', 0x747261696e322e6a7067, 700, 400, 1000, 300),
('Goa Express', 'Banglore', '10:00:00', 'GOA', '17:30:00', 0x747261696e322e6a7067, 700, 400, 1000, 300),
('Mumbai Mail', 'Banglore', '05:00:00', 'Mumbai', '22:00:00', 0x747261696e322e6a7067, 1000, 700, 1500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`uname`, `pwd`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `busbook`
--

CREATE TABLE IF NOT EXISTS `busbook` (
  `CUSTOMER` varchar(100) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `AFROM` varchar(100) DEFAULT NULL,
  `DEPTIME` varchar(100) DEFAULT NULL,
  `ATO` varchar(100) DEFAULT NULL,
  `ARRIVALTIME` varchar(100) DEFAULT NULL,
  `DATEOFTRAVEL` date DEFAULT NULL,
  `NOOFPASSENGER` int(10) DEFAULT NULL,
  `BUSCLASS` varchar(100) DEFAULT NULL,
  `INCLUDEFOOD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busbook`
--

INSERT INTO `busbook` (`CUSTOMER`, `NAME`, `AFROM`, `DEPTIME`, `ATO`, `ARRIVALTIME`, `DATEOFTRAVEL`, `NOOFPASSENGER`, `BUSCLASS`, `INCLUDEFOOD`) VALUES
('admin@admin.com', 'Goa Express', 'Banglore', '10:00:00', 'Mumbai', '22:30:00', '2020-03-14', 2, 'Sleeper', 'no'),
('admin@admin.com', 'Volvo', 'Banglore', '11:00:00', 'GOA', '17:30:00', '2020-03-14', 1, 'Sleeper', 'yes'),
('admin@admin.com', 'Volvo', 'Goa', '10:00:00', 'Mumbai', '18:00:00', '2020-03-27', 5, 'AC', 'no'),
('admin@admin.com', 'Volvo', 'Goa', '10:00:00', 'Mumbai', '18:00:00', '2020-03-12', 2, 'AC', 'yes'),
('admin@admin.com', 'Volvo', 'Mumbai', '10:00:00', 'GOA', '18:00:00', '2020-03-19', 2, 'Deluxe', 'yes'),
('admin@admin.com', 'Volvo', 'Mumbai', '10:00:00', 'GOA', '18:00:00', '2020-03-19', 2, 'DELUXE', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `CUSTOMER` varchar(100) DEFAULT NULL,
  `CARDNAME` varchar(100) DEFAULT NULL,
  `BANKNAME` varchar(100) DEFAULT NULL,
  `CARDNO` int(20) DEFAULT NULL,
  `EXPMONTH` int(20) DEFAULT NULL,
  `EXPYEAR` int(20) DEFAULT NULL,
  `CSV` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`CUSTOMER`, `CARDNAME`, `BANKNAME`, `CARDNO`, `EXPMONTH`, `EXPYEAR`, `CSV`) VALUES
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 5, 2025, 145),
('gaonkarswapnil1@gmail.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 5, 2025, 478),
('gaonkarswapnil1@gmail.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 5, 2025, 478),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 5, 2025, 785),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 485),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 1523647805, 5, 2025, 145),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 4, 2025, 478),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 5, 2025, 125),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 4, 2025, 145),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 4, 2025, 145),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 157),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 753),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 157),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 158),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 4, 2025, 145),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 4, 2025, 157),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 1234656, 2, 2025, 157),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 2, 2025, 125),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 154),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 154),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 154),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 4, 2025, 852),
('admin@admin.com', 'Swapnil Gaonkar', 'ICICI Bank', 2147483647, 7, 2025, 258);

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE IF NOT EXISTS `customer_feedback` (
  `FIRSTNAME` varchar(100) NOT NULL,
  `SURNAME` varchar(100) NOT NULL,
  `USERID` varchar(100) NOT NULL,
  `MESSAGE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`FIRSTNAME`, `SURNAME`, `USERID`, `MESSAGE`) VALUES
('Swapnil', 'Gaonkar', 'gaonkarswapnil1@gmail.com', 'OK'),
('Pranay', 'Gaonkar', 'gaonkarpranay12@gmail.com', 'HIII');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE IF NOT EXISTS `customer_login` (
`CUSTOMER_ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(100) NOT NULL,
  `SURNAME` varchar(100) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `PHONE_NO` bigint(20) NOT NULL,
  `USERID` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`CUSTOMER_ID`, `FIRSTNAME`, `SURNAME`, `ADDRESS`, `PHONE_NO`, `USERID`, `PASSWORD`) VALUES
(1, 'Swapnil111', 'Gaonkarwerwar', 'B/304 Vinayak Apartment near Jai-Bai School Katemanivali Kalsdgsdg', 9886783687, 'xzlxzmkfsjzdsklj@kklxckbl', '0987654321'),
(2, 'Swapnil', 'Gaonkar', 'B/304 Vinayak Apartment near Jai-Bai School Katemanivali Kal', 9022695479, 'gaonkarswapnil1@gmail.com', 'Oliver'),
(3, 'Swapnil', 'Gaonkar', 'B/304 Vinayak Apartment near Jai-Bai School Katemanivali Kal', 9022695479, 'gaonkarpranay12@gmail.com', 'Oliver'),
(4, 'Swapnil', 'Gaonkar', 'B/304 Vinayak Apartment near Jai-Bai School Katemanivali Kal', 9022695479, 'gaonkarswapnil1@gmail.com', '12345678'),
(5, 'admin', 'admin', 'B/304, Vinayak Apartment,Near Jai-Bai School, Katemanivali, Kalyan(East)', 9821610632, 'admin@admin.com', 'admin'),
(6, 'Oliver', 'Queen', 'B/304, Vinayak Apartment,Near Jai-Bai School, Katemanivali, Kalyan(East)', 9821610632, 'oliver@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `flightbook`
--

CREATE TABLE IF NOT EXISTS `flightbook` (
  `CUSTOMER` varchar(100) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `AFROM` varchar(100) DEFAULT NULL,
  `DEPTIME` varchar(100) DEFAULT NULL,
  `ATO` varchar(100) DEFAULT NULL,
  `ARRIVALTIME` varchar(100) DEFAULT NULL,
  `DATEOFTRAVEL` date DEFAULT NULL,
  `NOOFPASSENGER` int(10) DEFAULT NULL,
  `FLIGHTCLASS` varchar(100) DEFAULT NULL,
  `INCLUDEFOOD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightbook`
--

INSERT INTO `flightbook` (`CUSTOMER`, `NAME`, `AFROM`, `DEPTIME`, `ATO`, `ARRIVALTIME`, `DATEOFTRAVEL`, `NOOFPASSENGER`, `FLIGHTCLASS`, `INCLUDEFOOD`) VALUES
('admin@admin.com', 'Air India', 'Banglore', '12:00:00', 'Mumbai', '15:00:00', '2020-03-20', 9, 'Economy Class', 'yes'),
('admin@admin.com', 'Jet Airways', 'Mumbai', '15:00:00', 'Banglore', '17:00:00', '2020-03-13', 2, 'First Class', 'yes'),
('admin@admin.com', 'Jet Airways', 'Mumbai', '15:00:00', 'Banglore', '17:00:00', '2020-03-13', 2, 'FIRSTCLASS', 'yes'),
('admin@admin.com', 'Jet Airways', 'Mumbai', '15:00:00', 'Banglore', '17:00:00', '2020-03-13', 2, 'FIRSTCLASS', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `hotelbook`
--

CREATE TABLE IF NOT EXISTS `hotelbook` (
  `CUSTOMER` varchar(100) DEFAULT NULL,
  `DEST` varchar(100) DEFAULT NULL,
  `CHECKIN` date DEFAULT NULL,
  `CHECKOUT` date DEFAULT NULL,
  `HOTELNAME` varchar(100) DEFAULT NULL,
  `ADDRESS` varchar(500) DEFAULT NULL,
  `NOOFPASSENGER` int(10) DEFAULT NULL,
  `ROOM` varchar(100) DEFAULT NULL,
  `INCLUDEFOOD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelbook`
--

INSERT INTO `hotelbook` (`CUSTOMER`, `DEST`, `CHECKIN`, `CHECKOUT`, `HOTELNAME`, `ADDRESS`, `NOOFPASSENGER`, `ROOM`, `INCLUDEFOOD`) VALUES
('admin@admin.com', 'Goa', '2020-03-12', '2020-03-19', 'Grand Hyatt', 'Grand Hyatt, P.O Goa University, Road, Bambolim, Goa 403206', 2, 'AC Room', 'yes'),
('gaonkarswapnil1@gmail.com', 'Goa', '2020-03-20', '2020-03-26', 'Grand Hyatt', 'Grand Hyatt, P.O Goa University, Road, Bambolim, Goa 403206', 5, 'Standard Room', 'yes'),
('admin@admin.com', 'Goa', '2020-03-20', '2020-03-27', 'Grand Hyatt', 'Grand Hyatt, P.O Goa University, Road, Bambolim, Goa 403206', 5, 'AC Room', 'no'),
('admin@admin.com', 'Goa', '2020-03-19', '2020-03-26', 'Grand Hyatt', 'Grand Hyatt, P.O Goa University, Road, Bambolim, Goa 403206', 2, 'DELUXE', 'yes'),
('admin@admin.com', 'Goa', '2020-03-19', '2020-03-26', 'Grand Hyatt', 'Grand Hyatt, P.O Goa University, Road, Bambolim, Goa 403206', 2, 'DELUXE', 'yes'),
('admin@admin.com', 'Goa', '2020-03-10', '2020-03-11', 'The Crown', 'The Crown, Rua JosÃ© FalcÃ£o, Bairro Alto, Dos Pilotos, Altinho, Panaji, Goa 403001', 2, 'DELUXE', 'yes'),
('admin@admin.com', 'Goa', '2020-03-15', '2020-03-21', 'The Crown', 'The Crown, Rua JosÃ© FalcÃ£o, Bairro Alto, Dos Pilotos, Altinho, Panaji, Goa 403001', 2, 'AC', 'yes'),
('admin@admin.com', 'Goa', '2020-03-13', '2020-03-19', 'The Fern Kadamba', 'The Fern Kadamba, Kadamba Plateau, Panjim, Old Goa Rd, Goa Velha, Goa 403402', 2, 'DELUXE', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `trainbook`
--

CREATE TABLE IF NOT EXISTS `trainbook` (
  `CUSTOMER` varchar(100) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `AFROM` varchar(100) DEFAULT NULL,
  `DEPTIME` varchar(100) DEFAULT NULL,
  `ATO` varchar(100) DEFAULT NULL,
  `ARRIVALTIME` varchar(100) DEFAULT NULL,
  `DATEOFTRAVEL` date DEFAULT NULL,
  `NOOFPASSENGER` int(10) DEFAULT NULL,
  `TRAINCLASS` varchar(100) DEFAULT NULL,
  `INCLUDEFOOD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainbook`
--

INSERT INTO `trainbook` (`CUSTOMER`, `NAME`, `AFROM`, `DEPTIME`, `ATO`, `ARRIVALTIME`, `DATEOFTRAVEL`, `NOOFPASSENGER`, `TRAINCLASS`, `INCLUDEFOOD`) VALUES
('admin@admin.com', NULL, 'Goa', '11:00:00', 'Mumbai', '19:00:00', '2020-03-06', 5, 'AC Coach', 'no'),
('admin@admin.com', NULL, 'Goa', '11:00:00', 'Mumbai', '19:00:00', '2020-03-13', 7, 'Sitting Coach', 'no'),
('admin@admin.com', 'Mumbai Mail', 'Goa', '11:00:00', 'Mumbai', '19:00:00', '2020-03-13', 7, 'Sleeper Coach', 'no'),
('admin@admin.com', 'Goa Express', 'Mumbai', '10:00:00', 'GOA', '18:00:00', '2020-03-19', 2, 'Sleeper Coach', 'yes'),
('admin@admin.com', 'Mumbai Mail', 'Goa', '11:00:00', 'Mumbai', '19:00:00', '2020-03-18', 2, 'AC Coach', 'yes'),
('admin@admin.com', 'Goa Express', 'Mumbai', '10:00:00', 'GOA', '18:00:00', '2020-03-12', 2, 'AC Coach', 'yes'),
('admin@admin.com', 'Goa Express', 'Mumbai', '10:00:00', 'GOA', '18:00:00', '2020-03-12', 2, 'AC', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
 ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
MODIFY `CUSTOMER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
