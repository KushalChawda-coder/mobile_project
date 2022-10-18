-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `productCompany` varchar(255) NOT NULL,
  `Ram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `productName`, `price`, `image`, `productCompany`, `Ram`) VALUES
(1, 'Xaiomi 12 ultra', '80,000 ', 'xiaomi12s.jpg', 'Xaiomi', '16 GB'),
(2, 'Apple iphone 14 pro', '1,30,000 ', 'iphone.jpg', 'Apple', '6 GB'),
(3, 'Samsung s22 ultra', '1,10,000 ', 'samsung.jpg', 'Samsung', '8 GB'),
(4, 'Google pixel 7 pro', '80,000', 'google.png', 'Google', '6 GB'),
(5, 'One plus 8 pro', '80,000', 'oneplus.jpg', 'One plus', '8 GB'),
(7, 'Vivo x80 pro', '80,000', 'vivox80pro.jpg', 'Vivo', '8 GB');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `U_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `C_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `U_Name`, `Email`, `Password`, `C_Password`) VALUES
(1, 'harsh', 'harsh@gmail.com', '1234', '1234'),
(6, 'soham', 'murlidhosariya19990@gmail.com', '1234', '1234'),
(7, 'kushal', 'kushalchawda8@gmail.com', '1234', '1234'),
(8, 'xxx', 'xxx@x.com', '12345', '123456'),
(9, 'vishal chawda', 'vishal@gmail.com', '1234', '1234'),
(10, 'vikas\' dangi', 'vikasdangi@gmail.com', '1234', ''),
(16, 'vinod', 'vino@gmail.com', '12345', ''),
(17, 'mayank', 'mayank@gmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `rateIndex` tinyint(4) NOT NULL,
  `main` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RCOMMENT` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `rateIndex`, `main`, `RCOMMENT`, `pid`, `rid`) VALUES
(8, 1, 'fdsf', 'fsdf', NULL, NULL),
(29, 2, 'ggggg', 'this phones are what every Camera enthusiast desires, good colours, great night photography and natural skin tone it\'s all there.', 1, 6),
(30, 4, 'ffff', 'xiomi phones are what every Camera enthusiast desires, good colours, great night photography and natural skin tone it\'s all there', 1, 6),
(31, 0, 'harsh tiwari ', 'jfdklsafjhkljs', 1, 6),
(32, 0, 'sss', 'sss', 1, 6),
(33, 4, NULL, 'must buy this product', 2, 7),
(34, 4, NULL, 'Awesome product. It\'s been 4 days with this champ .. loving it. Battery, camera everything is fine ..', 3, 7),
(35, 4, NULL, 'very nice camera', 7, 7),
(36, 0, NULL, 'Excellent phone and parformance is very good ? camera quality is awesome I love this phone', 5, 7),
(37, 3, NULL, 'Good phone for daily use. Very smooth ui and a great camera. It\'s simply awesome', 4, 7),
(38, 2, NULL, 'dsad', 1, 7),
(39, 3, NULL, 'My first Samsung phone and it', 4, 4),
(40, 0, NULL, 'My first Samsung phone and its really worth it.\r\nBgmi Cod Asphalt all are running smoothly on this device.\r\nMade a great choice thanks flipkart.', 4, 9),
(41, 3, NULL, 'This phone is a good choice\r\nIt is my first phone and I\'ll say I am satisfied enough till date .\r\n', 7, 9),
(42, 0, NULL, 'Amazing picture quality, awesome design, mind blowing display and fabulous performance and specially very handy phone', 2, 9),
(43, 3, NULL, 'Worth the value. I was samsung \' user, so jump to iPhone 14 was a huge difference for me. Getting a better battery backup with this phone. I feel its a bit huge, but its good.', 3, 9),
(44, 4, NULL, 'this phone Nothing to say about it.... too Fast to furious... thank you ?', 2, 1),
(45, 0, NULL, 'I don\'t know product name??????', 1, 16),
(46, 4, NULL, 'apple iphone 13 vinod mahajan', 2, 16),
(47, 2, NULL, 'Have recently moved over from Android to IOS. Felt very happy about it.', 5, 16),
(48, 0, NULL, 'Have recently moved over from Android to IOS. Felt very happy about it.', 4, 16),
(49, 2, NULL, 'Bad performance mobile slow work', 7, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stars`
--
ALTER TABLE `stars`
  ADD CONSTRAINT `stars_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`Product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
