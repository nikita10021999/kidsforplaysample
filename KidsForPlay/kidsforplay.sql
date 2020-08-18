-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 07:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidsforplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(3, 'admin', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `C_id` int(20) NOT NULL,
  `U_id` int(20) NOT NULL,
  `Productmaster_id` int(20) NOT NULL,
  `Quantity_cart` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`C_id`, `U_id`, `Productmaster_id`, `Quantity_cart`) VALUES
(1, 1, 25, 2),
(2, 9, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'conchita', 'almeidaconchita9@gmail.com', 940940940, 'Nothing is here'),
(2, 'conchita', 'abc@gmail.com', 2147483647, 'wert'),
(3, 'conchita', 'abc@gmail.com', 987898, 'hii'),
(4, 'nikita', 'niki@gmail.com', 656767875, 'Very responsive website'),
(5, 'mahek', 'mahekpandya28@gmal.com', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `display_category`
--

CREATE TABLE `display_category` (
  `Display_id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display_category`
--

INSERT INTO `display_category` (`Display_id`, `Name`) VALUES
(1, 'alphabets');

-- --------------------------------------------------------

--
-- Table structure for table `display_master`
--

CREATE TABLE `display_master` (
  `Displaymaster_id` int(20) NOT NULL,
  `Display_id` int(20) NOT NULL,
  `Image` varchar(60) NOT NULL,
  `File` varchar(40) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display_master`
--

INSERT INTO `display_master` (`Displaymaster_id`, `Display_id`, `Image`, `File`, `Name`) VALUES
(35, 1, '../images/display/a.jpeg', '../audios/A.wav', '0'),
(37, 1, '../images/display/animal_alphabet_B.png', '../audios/B.wav', '0'),
(38, 1, '../images/display/c.jpg', '../audios/C.wav', '0'),
(39, 1, '../images/display/1268277.png', '../audios/D.wav', '0'),
(40, 1, '../images/display/animal_alphabet_E.png', '../audios/E.wav', '0'),
(41, 1, '../images/display/animal_alphabet_F.png', '../audios/F.wav', '0'),
(42, 1, '../images/display/g.jpg', '../audios/G.wav', '0'),
(43, 1, '../images/display/download.png', '../audios/H.wav', '0'),
(44, 1, '../images/display/i.jpg', '../audios/I.wav', '0'),
(45, 1, '../images/display/j.png', '../audios/J.wav', '0'),
(46, 1, '../images/display/images.jpg', '../audios/K.wav', '0'),
(47, 1, '../images/display/l.jpg', '../audios/L.wav', '0'),
(48, 1, '../images/display/animal_alphabet_M.png', '../audios/M.wav', '0'),
(49, 1, '../images/display/n.jpg', '../audios/N.wav', '0'),
(50, 1, '../images/display/animal_alphabet_O.png', '../audios/O.wav', '0'),
(51, 1, '../images/display/animal_alphabet_P.png', '../audios/P.wav', '0'),
(61, 1, '../images/display/q.jpg', '../audios/Q.wav', '0'),
(62, 1, '../images/display/animal_alphabet_R.png', '../audios/R.wav', '0'),
(63, 1, '../images/display/download.jpg', '../audios/S.wav', '0'),
(64, 1, '../images/display/images (1).jpg', '../audios/T.wav', '0'),
(65, 1, '../images/display/u.png', '../audios/U.wav', '0'),
(66, 1, '../images/display/animal_alphabet_V.png', '../audios/V.wav', '0'),
(67, 1, '../images/display/w.jpg', '../audios/W.wav', '0'),
(68, 1, '../images/display/animal_alphabet_X.png', '../audios/X.wav', '0'),
(69, 1, '../images/display/y.jpg', '../audios/Y.wav', '0'),
(70, 1, '../images/display/z.jpg', '../audios/Z.wav', '0'),
(72, 2, '../images/display/0.jpg', '../audios/0.wav', '0'),
(73, 2, '../images/display/1.jpg', '../audios/1.wav', '0'),
(74, 2, '../images/display/2.jpg', '../audios/2.wav', '0'),
(75, 2, '../images/display/3.jpg', '../audios/3.wav', '0'),
(76, 2, '../images/display/4.jpg', '../audios/4.wav', '0'),
(77, 2, '../images/display/5.jpg', '../audios/5.wav', '0'),
(78, 2, '../images/display/6.jpg', '../audios/6.wav', '0'),
(79, 2, '../images/display/7.jpg', '../audios/7.wav', '0'),
(80, 2, '../images/display/8.jpg', '../audios/8.wav', '0'),
(81, 2, '../images/display/9.jpg', '../audios/9.wav', '0'),
(82, 2, '../images/display/10 (2).jpg', '../audios/10.wav', '0'),
(83, 3, '../images/display/apple.jpg', '../audios/apple.wav', 'APPLE'),
(84, 3, '../images/display/banana.jpg', '../audios/banana.wav', 'BANANA'),
(85, 3, '../images/display/mango.jpg', '../audios/mango.wav', 'MANGO'),
(86, 3, '../images/display/grapes.jpg', '../audios/Grapes.wav', 'GRAPES'),
(87, 3, '../images/display/nectarine.jpg', '../audios/nectarine.wav', 'NECTARINE'),
(88, 3, '../images/display/orange.jpg', '../audios/Orange.wav', 'ORANGE'),
(91, 3, '../images/display/peach.jpg', '../audios/peach.wav', 'PEACH'),
(92, 3, '../images/display/strawberry.jpg', '../audios/strawberry.wav', 'STRAWBERRY'),
(93, 3, '../images/display/watermelon.jpg', '../audios/watermelon.wav', 'WATERMELON'),
(94, 4, '../images/display/beans.jpg', '../audios/beans.wav', 'BEANS'),
(95, 4, '../images/display/brinjal.jpg', '../audios/Brinjal.wav', 'BRINJAL'),
(96, 4, '../images/display/broccoli.jpg', '../audios/broccoli.wav', 'BROCCOLI'),
(97, 4, '../images/display/capsicum.jpg', '../audios/capsicum.wav', 'CAPSICUM'),
(99, 4, '../images/display/carrot.jpg', '../audios/carrot.wav', 'CARROT'),
(100, 3, '../images/display/cherry.jpg', '../audios/cherry.wav', 'CHERRY'),
(101, 4, '../images/display/cucumber.jpg', '../audios/cucumber.wav', 'CUCUMBER'),
(102, 4, '../images/display/ushroom.jpg', '../audios/Mushroom.wav', 'MUSHROOM'),
(103, 4, '../images/display/tomato.jpg', '../audios/tomato.wav', 'TOMATO'),
(104, 5, '../images/display/bird.jpg', '../audios/bird.wav', 'BIRDS'),
(105, 5, '../images/display/canary animal.jpg', '../audios/Canary animals065.wav', 'ANIMALS'),
(106, 5, '../images/display/cat.jpg', '../audios/Cat meow animals020.wav', 'CAT'),
(107, 5, '../images/display/cow.jpg', '../audios/Cow animals055.wav', 'COW'),
(108, 5, '../images/display/crow.jpg', '../audios/Crow animals010.wav', 'CROW'),
(109, 5, '../images/display/dog.jpg', '../audios/Dog bark animals079.wav', 'DOG'),
(110, 5, '../images/display/duck.jpg', '../audios/Duck-quacking animals038.wav', 'DUCK'),
(111, 5, '../images/display/elephant.jpg', '../audios/elephant.wav', 'ELEPHANT'),
(112, 5, '../images/display/goat.jpg', '../audios/Goat animals115.wav', 'GOAT'),
(113, 5, '../images/display/horse.jpg', '../audios/Horse-whinnying animals036.wav', 'HORSE'),
(114, 5, '../images/display/leopard.jpg', '../audios/Leopard growl animals089.wav', 'LEOPARD'),
(115, 5, '../images/display/peacock.jpg', '../audios/Peacock animals018.wav', 'PEACOCK'),
(116, 5, '../images/display/pig.jpg', '../audios/Pigs eating animals113.wav', 'PIG'),
(117, 5, '../images/display/lion.jpg', '../audios/lion.wav', 'Lion'),
(118, 3, '../images/display/apricot.jpg', '../audios/apricot.wav', 'Apricot '),
(119, 3, '../images/display/CustardApple.jpg', '../audios/CUSTARD APPLE.wav', 'CUSTARD APPLE'),
(120, 3, '../images/display/pomegranate.jpg', '../audios/pomegranate.wav', 'POMEGRANATE'),
(121, 3, '../images/display/plum.jpg', '../audios/plum.wav', 'PLUM'),
(122, 3, '../images/display/papaya.jpg', '../audios/papaya.wav', 'PAPAYA'),
(123, 3, '../images/display/coconut.jpg', '../audios/coconut.wav', 'COCONUT'),
(124, 3, '../images/display/guava.jpg', '../audios/guava.wav', 'GUAVA'),
(125, 3, '../images/display/kiwi.jpg', '../audios/kiwi.wav', 'KIWI'),
(126, 3, '../images/display/pineapple.jpg', '../audios/pineapple.wav', 'PINEAPPLE'),
(127, 3, '../images/display/Melon.jpg', '../audios/melon.wav', 'MELON'),
(128, 4, '../images/display/Peas.jpg', '../audios/peas.wav', 'PEAS'),
(129, 4, '../images/display/beetroot.jpg', '../audios/beetroot.wav', 'BEETROOT'),
(130, 4, '../images/display/cabbage.jpg', '../audios/cabbage.wav', 'CABBAGE '),
(131, 4, '../images/display/cauliflower.jpg', '../audios/cauliflower.wav', 'CAULIFLOWER '),
(132, 4, '../images/display/Chilli.jpg', '../audios/chilli.wav', 'CHILLY '),
(133, 4, '../images/display/corn.jpg', '../audios/corn.wav', 'CORN'),
(134, 4, '../images/display/Corinder-leaf.jpg', '../audios/CORINDER LEAF.wav', 'CORIANDER LEAF'),
(135, 4, '../images/display/Onions.jpeg', '../audios/onions.wav', 'ONIONS'),
(136, 4, '../images/display/Garlic.jpg', '../audios/garlic.wav', 'GARLIC ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(60) NOT NULL,
  `U_id` int(60) NOT NULL,
  `Productmaster_id` int(40) NOT NULL,
  `Quantity` int(60) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Total_amount` int(40) NOT NULL,
  `Order_Date` varchar(40) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `U_id`, `Productmaster_id`, `Quantity`, `Address`, `Total_amount`, `Order_Date`, `Status`) VALUES
(15, 1, 25, 1, 'sdg', 100, '19-03-2019', '0'),
(16, 1, 20, 1, 'sdg', 2200, '19-03-2019', '0'),
(17, 1, 22, 1, 'sdg', 2200, '19-03-2019', '0'),
(18, 1, 24, 1, 'sdg', 2200, '19-03-2019', '0'),
(19, 1, 25, 2, 'sdg', 200, '30-03-2019', '0'),
(20, 1, 25, 1, 'sdg', 100, '30-03-2019', '0'),
(21, 1, 25, 1, 'sdg', 100, '30-03-2019', '0'),
(22, 1, 27, 1, 'sdg', 800, '30-03-2019', '0'),
(23, 1, 32, 1, 'sdg', 2000, '31-03-2019', '0'),
(24, 1, 28, 1, 'sdg', 1000, '31-03-2019', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `Product_id` int(20) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`Product_id`, `Product_name`, `Image`) VALUES
(1, 'class1', ''),
(2, 'class2', ''),
(3, 'class3', ''),
(4, 'class4', ''),
(5, 'class5', ''),
(6, 'class6', ''),
(7, 'class7', ''),
(8, 'class8', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `Productmaster_id` int(20) NOT NULL,
  `Product_id` int(20) NOT NULL,
  `Productmaster_name` varchar(20) NOT NULL,
  `Image` text NOT NULL,
  `files` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`Productmaster_id`, `Product_id`, `Productmaster_name`, `Image`, `files`) VALUES
(37, 1, 'Std 1 Eng medium Sem', '../images/products/std1eng.jpg', '../images/allpdfs/sem1.pdf'),
(38, 1, 'Std 1 Eng medium Sem', '../images/products/std1ends2.jpg', '../images/allpdfs/sem2.pdf'),
(39, 1, 'Std 1 Guj medium sem', '../images/products/std1gujs1.jpg', '../images/allpdfs/Std1_GujMed_Kalrav_Sem1.pdf'),
(40, 1, 'std 1 Guj medium sem', '../images/products/std1gujs2.jpg', '../images/allpdfs/Std1_GujMed_Kalrav_Sem2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `U_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`U_id`, `username`, `city`, `address`, `state`, `email`, `phone`, `password`) VALUES
(1, 'abc', 'dg', 'sdg', 'dg', 'abc@gmail.com', '35890987876', '123'),
(2, 'aa', 'aaaa', 'aaaa', 'aa', 'aa', '11', '11'),
(3, 'abc', 'qw', 'as', 'qw', 'abcd@gmail.com', '12345', '12'),
(4, 'mahek28', 'rajkot', 'fgh', 'guju', 'mahekpandya28@gmal.com', '940940940', 'mahek'),
(5, 'vidhi', 'rajkot', 'aaaa', 'guj', 'vid@gmail.com', '789876567', '123'),
(6, 'conchita', 'rajkot', 'as', 'gujurat', 'almeidaconchita9@gmail.com', '940940940', '123'),
(7, 'q', 'q', 'q', 'q', 'q', 'q', 'q'),
(8, 'nikita', 'rajkot', 'near swaminarayan mandir, vrajvatika', 'gujarat', 'niki@gmail.com', '8789876765', '123456'),
(9, 'nik', 'rajkot', 'sdfsfsfd', 'gujarat', 'nik@gmail.com', '74859234', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `display_category`
--
ALTER TABLE `display_category`
  ADD PRIMARY KEY (`Display_id`);

--
-- Indexes for table `display_master`
--
ALTER TABLE `display_master`
  ADD PRIMARY KEY (`Displaymaster_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`Productmaster_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `C_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `display_category`
--
ALTER TABLE `display_category`
  MODIFY `Display_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `display_master`
--
ALTER TABLE `display_master`
  MODIFY `Displaymaster_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `Product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `Productmaster_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
