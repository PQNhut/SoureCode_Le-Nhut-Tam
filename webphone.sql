-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2023 at 10:01 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `Username` varchar(50) NOT NULL,
  `Fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Password` int DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Username`, `Fullname`, `Password`, `Email`, `Phone`) VALUES
('Lenguyen', 'Nguyen Thanh Hieu Le', 123456789, 'lenguyen@gmail.com', '0125898524'),
('Nhut', 'Pham Quoc Nhut', 987654321, 'nhut@gmail.com', '0985246732');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` varchar(50) NOT NULL,
  `ProductName` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `Image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Details` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Price`, `Image`, `Details`, `Category`) VALUES
('1', 'Ốp lưng bằng gổ khắc tên cho Iphone', '500.000VND', '2.jpg', 'Cực kỳ tốt ', 'Phone'),
('2', 'Ốp lưng bằng gổ điêu khắc theo yêu cầu', '400.000VND', '3.jpg', 'Điêu khắc đẹp đầy sự tinh tế ', 'Phone'),
('3', 'Ốp lưng Iphone bằng gổ điêu khắc theo yêu cầu', '600.000VND', '4.jpg', 'Rất đẹp ,rất san', 'Phone'),
('4', 'Ốp lưng SamSung bằng gổ điêu khắc theo yêu cầu', '350.000VND', '5.jpg', 'Rất tuyệt vời ', 'Phone'),
('5', 'Các mẫu ốp lưng Iphone điêu khắc khác nhau', '350.000VND', '6.jpg', 'Sản đán giá chất lượng cao ', 'Phone'),
('6', 'Ốp lưng chạm khắc rồng cực kỳ uy tín', '500.000VND', '7.jpg', 'Sản phẩm làm từ gổ chất lượng cao', 'Phone'),
('7', 'Ốp lưng Iphone 14 điêu khắc theo yêu cầu ', '600.000VND', '8.jpg', 'Sản phẩm làm từ gổ chất lượng cao', 'Phone');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
