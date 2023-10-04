--
-- Database: `db`

-- Table structure for table `salesEmployees`
--

CREATE TABLE `salesEmployees` (
  `entry` int not null auto_increment,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `employeeID` varchar(50) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `nChildren` int(10) DEFAULT NULL,
  `nCars` int(10) DEFAULT NULL,
  `lEducation` varchar(250) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
   primary key (entry)
);