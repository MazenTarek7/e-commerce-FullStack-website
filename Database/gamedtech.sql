-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamedtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AFirstName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ALastName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AdminID` int NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SSN` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AEmail` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AFirstName`, `ALastName`, `AdminID`, `Password`, `SSN`, `AEmail`) VALUES
('Ahmed', 'Medhat', 3, 'Ahmed1!', '123456789', 'Ahmed@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `billinginfo`
--

CREATE TABLE `billinginfo` (
  `BillingID` int NOT NULL,
  `PaymentMethod` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BillingDate` date NOT NULL,
  `BillingAddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `billinginfo`
--

INSERT INTO `billinginfo` (`BillingID`, `PaymentMethod`, `BillingDate`, `BillingAddress`) VALUES
(1, 'VISA', '2022-01-14', 'Cairo');

-- --------------------------------------------------------

--
-- Table structure for table `billingorder`
--

CREATE TABLE `billingorder` (
  `BillingID` int NOT NULL,
  `OrderID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int NOT NULL,
  `NoOfProducts` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TotalPrice` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartpro`
--

CREATE TABLE `cartpro` (
  `CartID` int NOT NULL,
  `ProID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatID` int NOT NULL,
  `CatName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CatDescription` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatID`, `CatName`, `CatDescription`) VALUES
(1, 'SmartPhone', 'Smartphones'),
(2, 'Laptop', 'Gaming Laptops'),
(3, 'Console', 'Gaming Console');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `EFirstName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ELastName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `EEmail` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SSN` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `EmpID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`EFirstName`, `ELastName`, `Password`, `EEmail`, `SSN`, `EmpID`) VALUES
('Mazen', 'Tarek', 'mdaowjjj', 'mazen20@gmail.com', 'A1246', 1),
('Mohamedd', 'Doee', '23aff', 'test22@gmail.com', 'A2144', 2),
('John', 'Doee', 'dawdwaa', 'test@gmail.com', 'A4122', 3),
('Test', 'Test', 'wadwdwa', 'test4@gmail.com', 'A1254', 4),
('Osama', 'Mohamed', 'Osama', 'osama@gmail.com', 'A5125', 5),
('Ahmed', 'Mohamed', 'mohamed', 'test@gmail.com', 'A2515', 6),
('Omar', 'Doe', 'dwasadwar124', 'omar@outlook.com', 'A2155', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `OrderID` int NOT NULL,
  `OrderDetails` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `OrderDate` date NOT NULL,
  `TotalPrice` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ShipperID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProID` int NOT NULL,
  `ProName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ProDescription` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UnitWeight` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CatID` int NOT NULL,
  `AdminID` int NOT NULL,
  `EmpID` int NOT NULL,
  `VendorID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProID`, `ProName`, `ProDescription`, `Quantity`, `Price`, `UnitWeight`, `CatID`, `AdminID`, `EmpID`, `VendorID`) VALUES
(1, 'Oppo F9 SmartPhone', 'Smart Phone', '5', '199.99', '0.5kg', 1, 3, 1, 1),
(2, 'Laptop', 'Gaming Laptop', '4', '124', '4', 2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shippinginfo`
--

CREATE TABLE `shippinginfo` (
  `ShipperID` int NOT NULL,
  `ShippingAddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CompanyName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UFirstName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UlastName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UEmail` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserName`, `Address`, `UFirstName`, `UlastName`, `Password`, `UEmail`) VALUES
('Mohamed', 'Sheikh Zayed', 'Mohamed', 'Mahmoud', 'waddwadwa', 'mohamed1@gmail.com'),
('Mostafa2', 'Cairo', 'Mostafa', 'Mahmoud', 'mostafa', 'Mostafa22@gmail.com'),
('Mustafa', 'Sheikh Zayed', 'Mustafa', 'Magdy', 'Mustafa123!', 'Mustafa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userbilling`
--

CREATE TABLE `userbilling` (
  `UserName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BillingID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userbilling`
--

INSERT INTO `userbilling` (`UserName`, `BillingID`) VALUES
('Mustafa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercart`
--

CREATE TABLE `usercart` (
  `UserName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CartID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userphone`
--

CREATE TABLE `userphone` (
  `UserPhone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userphone`
--

INSERT INTO `userphone` (`UserPhone`, `UserName`) VALUES
('01200014215', 'Mustafa');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VendorID` int NOT NULL,
  `FirstName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `VendorTitle` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VendorID`, `FirstName`, `LastName`, `Password`, `Email`, `VendorTitle`) VALUES
(1, 'Ashraf', 'Ahmed', 'ashraf1', 'Ash@hotmail.com', 'SD'),
(2, 'sda', 'dsa', 'sa', 'dwada', 'dwa'),
(3, 'sda', 'dsa', '214', 'ascasd', 'adwd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`,`SSN`),
  ADD UNIQUE KEY `AEmail` (`AEmail`),
  ADD UNIQUE KEY `SSN` (`SSN`);

--
-- Indexes for table `billinginfo`
--
ALTER TABLE `billinginfo`
  ADD PRIMARY KEY (`BillingID`);

--
-- Indexes for table `billingorder`
--
ALTER TABLE `billingorder`
  ADD KEY `BillingID` (`BillingID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `cartpro`
--
ALTER TABLE `cartpro`
  ADD KEY `CartID` (`CartID`),
  ADD KEY `ProID` (`ProID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`EmpID`,`SSN`,`EEmail`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `ShipperID` (`ShipperID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `CatID` (`CatID`),
  ADD KEY `VendorID` (`VendorID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `shippinginfo`
--
ALTER TABLE `shippinginfo`
  ADD PRIMARY KEY (`ShipperID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `userbilling`
--
ALTER TABLE `userbilling`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `BillingID` (`BillingID`);

--
-- Indexes for table `usercart`
--
ALTER TABLE `usercart`
  ADD PRIMARY KEY (`CartID`,`UserName`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `userphone`
--
ALTER TABLE `userphone`
  ADD PRIMARY KEY (`UserPhone`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VendorID`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `billinginfo`
--
ALTER TABLE `billinginfo`
  MODIFY `BillingID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `EmpID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `OrderID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shippinginfo`
--
ALTER TABLE `shippinginfo`
  MODIFY `ShipperID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercart`
--
ALTER TABLE `usercart`
  MODIFY `CartID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VendorID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billingorder`
--
ALTER TABLE `billingorder`
  ADD CONSTRAINT `billingorder_ibfk_1` FOREIGN KEY (`BillingID`) REFERENCES `billinginfo` (`BillingID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `billingorder_ibfk_2` FOREIGN KEY (`OrderID`) REFERENCES `orderr` (`OrderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cartpro`
--
ALTER TABLE `cartpro`
  ADD CONSTRAINT `cartpro_ibfk_1` FOREIGN KEY (`CartID`) REFERENCES `cart` (`CartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartpro_ibfk_2` FOREIGN KEY (`ProID`) REFERENCES `product` (`ProID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderr`
--
ALTER TABLE `orderr`
  ADD CONSTRAINT `orderr_ibfk_1` FOREIGN KEY (`ShipperID`) REFERENCES `shippinginfo` (`ShipperID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`CatID`) REFERENCES `category` (`CatID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`VendorID`) REFERENCES `vendor` (`VendorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`EmpID`) REFERENCES `emp` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userbilling`
--
ALTER TABLE `userbilling`
  ADD CONSTRAINT `userbilling_ibfk_1` FOREIGN KEY (`BillingID`) REFERENCES `billinginfo` (`BillingID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userbilling_ibfk_2` FOREIGN KEY (`UserName`) REFERENCES `user` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usercart`
--
ALTER TABLE `usercart`
  ADD CONSTRAINT `usercart_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `user` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usercart_ibfk_2` FOREIGN KEY (`CartID`) REFERENCES `cart` (`CartID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userphone`
--
ALTER TABLE `userphone`
  ADD CONSTRAINT `userphone_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `user` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
