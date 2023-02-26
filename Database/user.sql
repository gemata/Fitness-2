-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 08:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `ofertat`
--

CREATE TABLE `ofertat` (
  `oferta_id` int(11) NOT NULL,
  `lloji` varchar(50) NOT NULL,
  `kohezgjatja` varchar(50) NOT NULL,
  `cmimi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ofertat`
--

INSERT INTO `ofertat` (`oferta_id`, `lloji`, `kohezgjatja`, `cmimi`) VALUES
(1, 'MONTHCLUB', '1 MUAJ', 60),
(2, 'DAYCLUB', '6 MUAJ', 80),
(3, 'TIMECLUB', '2 JAVE', 50),
(4, 'MULTICLUB', '12 MUAJ', 150),
(5, 'UNICLUB', '8 MUAJ', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pagesa`
--

CREATE TABLE `pagesa` (
  `Transaction_ID` int(11) NOT NULL,
  `cardNumber` varchar(50) NOT NULL,
  `cardHolder` varchar(50) NOT NULL,
  `cardYear` int(10) NOT NULL,
  `cardMonth` int(10) NOT NULL,
  `cardCvv` int(10) NOT NULL,
  `lloji` varchar(50) NOT NULL,
  `Transaction_Date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagesa`
--

INSERT INTO `pagesa` (`Transaction_ID`, `cardNumber`, `cardHolder`, `cardYear`, `cardMonth`, `cardCvv`, `lloji`, `Transaction_Date`) VALUES
(18, '8456 1315 4451 2154', 'Blend Podvorica', 2030, 9, 577, 'UNICLUB', '2023-02-25 09:06:45'),
(23, '5785 4578 5425 5467', 'Gentrit Kadriu', 2030, 5, 111, 'TIMECLUB', '2023-02-25 16:28:56'),
(26, '6549 8798 4651 5899', 'Gentrit Kadriuu', 2029, 7, 888, 'TIMECLUB', '2023-02-26 14:27:53'),
(29, '4232 5663 1649 6513', 'DION KELMENDI', 2030, 8, 592, 'YEARCLUB', '2023-02-26 16:13:16'),
(30, '4655 6598 4653 6584', 'Anesa Zhegrova', 2028, 9, 465, 'UNICLUB', '2023-02-26 16:13:54'),
(31, '5479 4651 3164 9744', 'Blenda Biqkaj', 2030, 6, 856, 'TIMECLUB', '2023-02-26 16:15:44'),
(32, '4856 2365 9126 5845', 'Bleon Jusufi', 2030, 8, 526, 'MULTICLUB', '2023-02-26 16:16:05'),
(33, '4856 2548 4515 6948', 'Dion Kelmendi', 2028, 7, 555, 'TIMECLUB', '2023-02-26 16:16:40'),
(34, '4165 9845 1569 7845', 'Mal Agushi', 2028, 3, 644, 'YEARCLUB', '2023-02-26 16:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `useri`
--

CREATE TABLE `useri` (
  `User_ID` int(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useri`
--

INSERT INTO `useri` (`User_ID`, `Username`, `Email`, `Password`) VALUES
(1, 'blend', 'blend@gmail.com', '123456'),
(2, 'gentrit', 'gentrit@gmail.com', '123456'),
(19, 'gicha', 'gicha@gmail.com', '789456'),
(23, 'Blerina Rrmoku', 'blerina.rrmoku@ubt-uni.net', '741258'),
(35, 'aaa', 'aaa@gmail.com', '123456'),
(47, 'olt', 'olt@ubt-uni.net', 'olt123'),
(67, 'Blenda', 'blenda@gmail.com', '74168565'),
(68, 'Anesa', 'anesa@gmail.com', '7569845'),
(69, 'bleon', 'bleon@gmail.com', 'acdscd64sc43s'),
(70, 'hello3', 'hello3@gmail.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ofertat`
--
ALTER TABLE `ofertat`
  ADD PRIMARY KEY (`oferta_id`);

--
-- Indexes for table `pagesa`
--
ALTER TABLE `pagesa`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- Indexes for table `useri`
--
ALTER TABLE `useri`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ofertat`
--
ALTER TABLE `ofertat`
  MODIFY `oferta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pagesa`
--
ALTER TABLE `pagesa`
  MODIFY `Transaction_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `useri`
--
ALTER TABLE `useri`
  MODIFY `User_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
