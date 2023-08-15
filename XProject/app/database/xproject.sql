-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 11:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `Name`, `Address`, `Salary`) VALUES
(1, 'Tran Van Khanh', '123 Main St, City, Country', '2500.00'),
(2, 'Bui Van Trong', '456 Elm St, Town, Country', '3000.00'),
(3, 'Tran Thi Phuong Anh', '789 Oak St, Village, Country', '3500.00'),
(4, 'Alex Brown', '111 First Ave, City, Country', '2800.00'),
(5, 'Emily White', '222 Second St, Town, Country', '3200.00'),
(6, 'Daniel Lee', '333 Third Rd, Village, Country', '4000.00'),
(7, 'Olivia Wilson', '444 Fourth Blvd, City, Country', '2600.00'),
(8, 'William Clark', '555 Fifth Pl, Town, Country', '3100.00'),
(9, 'Sophia Davis', '666 Sixth Ln, Village, Country', '2800.00'),
(10, 'James Martin', '777 Seventh Ave, City, Country', '3500.00'),
(11, 'Ava Allen', '888 Eighth St, Town, Country', '3000.00'),
(12, 'Joseph Garcia', '999 Ninth Rd, Village, Country', '3800.00'),
(13, 'Isabella Rodriguez', '101 Tenth Blvd, City, Country', '2700.00'),
(14, 'Michael Martinez', '202 Eleventh Pl, Town, Country', '3400.00'),
(15, 'Emma Smith', '303 Twelfth Ln, Village, Country', '2900.00'),
(16, 'David Johnson', '404 Thirteenth Ave, City, Country', '3300.00'),
(17, 'Sophia Wilson', '505 Fourteenth St, Town, Country', '3100.00'),
(18, 'James Lee', '606 Fifteenth Rd, Village, Country', '3600.00'),
(19, 'Olivia Clark', '707 Sixteenth Blvd, City, Country', '2700.00'),
(20, 'Daniel Allen', '808 Seventeenth Pl, Town, Country', '2900.00'),
(21, 'Ava Garcia', '909 Eighteenth Ln, Village, Country', '3200.00'),
(22, 'Joseph Rodriguez', '1000 Nineteenth Ave, City, Country', '3700.00'),
(23, 'Emily Martinez', '1111 Twentieth St, Town, Country', '3000.00'),
(24, 'Alex Smith', '1212 Twenty-first Rd, Village, Country', '3300.00'),
(25, 'Michael Johnson', '1313 Twenty-second Blvd, City, Country', '2800.00'),
(26, 'Emma Davis', '1414 Twenty-third Pl, Town, Country', '3100.00'),
(27, 'William Martin', '1515 Twenty-fourth Ln, Village, Country', '3400.00'),
(28, 'Isabella White', '1616 Twenty-fifth Ave, City, Country', '2900.00'),
(29, 'Sophia Brown', '1717 Twenty-sixth St, Town, Country', '3300.00'),
(30, 'James Wilson', '1818 Twenty-seventh Rd, Village, Country', '2800.00'),
(31, 'Emily Johnson', '1919 Twenty-eighth Blvd, City, Country', '3500.00'),
(32, 'David Lee', '2020 Twenty-ninth Pl, Town, Country', '3000.00'),
(33, 'Ava Smith', '2121 Thirtieth Ln, Village, Country', '3600.00'),
(34, 'Michael Martinez', '2222 Thirty-first Ave, City, Country', '2700.00'),
(35, 'Emma Garcia', '2323 Thirty-second St, Town, Country', '3100.00'),
(36, 'Joseph Clark', '2424 Thirty-third Rd, Village, Country', '3200.00'),
(37, 'Sophia Rodriguez', '2525 Thirty-fourth Blvd, City, Country', '2900.00'),
(38, 'William Allen', '2626 Thirty-fifth Pl, Town, Country', '3400.00'),
(39, 'Isabella Wilson', '2727 Thirty-sixth Ln, Village, Country', '3300.00'),
(40, 'Michael Brown', '2828 Thirty-seventh Ave, City, Country', '3000.00'),
(41, 'Emma Johnson', '2929 Thirty-eighth St, Town, Country', '3600.00'),
(42, 'David Davis', '3030 Thirty-ninth Rd, Village, Country', '3200.00'),
(43, 'Ava Martin', '3131 Fortieth Blvd, City, Country', '3400.00'),
(44, 'Joseph Smith', '3232 Forty-first Pl, Town, Country', '3100.00'),
(45, 'Sophia Lee', '3333 Forty-second Ln, Village, Country', '3800.00'),
(46, 'James Wilson', '3434 Forty-third Ave, City, Country', '2700.00'),
(47, 'Emily Garcia', '3535 Forty-fourth St, Town, Country', '2900.00'),
(48, 'Alex Martinez', '3636 Forty-fifth Rd, Village, Country', '3300.00'),
(49, 'Emma Davis', '3737 Forty-sixth Blvd, City, Country', '3200.00'),
(50, 'William Johnson', '3838 Forty-seventh Pl, Town, Country', '3500.00'),
(51, 'Olivia Rodriguez', '3939 Forty-eighth Ln, Village, Country', '2900.00'),
(52, 'Michael Allen', '4040 Forty-ninth Ave, City, Country', '3600.00'),
(53, 'Ava Wilson', '4141 Fiftieth St, Town, Country', '3100.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
