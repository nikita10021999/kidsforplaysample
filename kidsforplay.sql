-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 11:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT 0,
  `choice` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 3, 0, 'Beijing'),
(2, 3, 0, 'Mexico'),
(3, 3, 0, 'Delhi'),
(4, 3, 0, 'Shanghai'),
(5, 3, 1, 'Tokyo'),
(6, 2, 1, 'France'),
(7, 2, 0, 'India'),
(8, 2, 0, 'China'),
(9, 2, 0, 'Germany'),
(10, 2, 0, 'Turkey'),
(11, 1, 0, 'Goa'),
(12, 1, 1, 'Delhi'),
(13, 1, 0, 'Gujarat'),
(14, 1, 0, 'Maharastra'),
(15, 1, 0, 'kerela');

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
  `File2` varchar(255) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display_master`
--

INSERT INTO `display_master` (`Displaymaster_id`, `Display_id`, `Image`, `File`, `File2`, `Name`) VALUES
(35, 1, '../images/display/a.jpeg', '../audios/A.wav', '../audios/a_for_applemp3.wav', '0'),
(37, 1, '../images/display/animal_alphabet_B.png', '../audios/B.wav', '../audios/b_for_ball.wav', '0'),
(38, 1, '../images/display/c.jpg', '../audios/C.wav', '../audios/c_for_cat.wav', '0'),
(39, 1, '../images/display/1268277.png', '../audios/D.wav', '../audios/d-for-dog.wav', '0'),
(40, 1, '../images/display/animal_alphabet_E.png', '../audios/E.wav', '../audios/e_for_elephant.wav', '0'),
(41, 1, '../images/display/animal_alphabet_F.png', '../audios/F.wav', '../audios/f_for_fan.wav', '0'),
(42, 1, '../images/display/g.jpg', '../audios/G.wav', '../audios/g_for_goat.wav', '0'),
(43, 1, '../images/display/download.png', '../audios/H.wav', '../audios/h_for_horse.wav', '0'),
(44, 1, '../images/display/i.jpg', '../audios/I.wav', '../audios/i_for_icecream.wav', '0'),
(45, 1, '../images/display/j.png', '../audios/J.wav', '../audios/j_for_jug.wav', '0'),
(46, 1, '../images/display/images.jpg', '../audios/K.wav', '../audios/k_for_kite.wav', '0'),
(47, 1, '../images/display/l.jpg', '../audios/L.wav', '../audios/l_for_lion.wav', '0'),
(48, 1, '../images/display/animal_alphabet_M.png', '../audios/M.wav', '../audios/m_for_mango.wav', '0'),
(49, 1, '../images/display/n.jpg', '../audios/N.wav', '../audios/n_for_nest.wav', '0'),
(50, 1, '../images/display/animal_alphabet_O.png', '../audios/O.wav', '../audios/o_for_orange.wav', '0'),
(51, 1, '../images/display/animal_alphabet_P.png', '../audios/P.wav', '../audios/p_for_peacock.wav', '0'),
(61, 1, '../images/display/q.jpg', '../audios/Q.wav', '../audios/q_for_queen.wav', '0'),
(62, 1, '../images/display/animal_alphabet_R.png', '../audios/R.wav', '../audios/rabbit.wav', '0'),
(63, 1, '../images/display/download.jpg', '../audios/S.wav', '../audios/sun.wav', '0'),
(64, 1, '../images/display/images (1).jpg', '../audios/T.wav', '../audios/tree.wav', '0'),
(65, 1, '../images/display/u.png', '../audios/U.wav', '../audios/umbrella.wav', '0'),
(66, 1, '../images/display/animal_alphabet_V.png', '../audios/V.wav', '../audios/van.wav', '0'),
(67, 1, '../images/display/w.jpg', '../audios/W.wav', '../audios/watch.wav', '0'),
(68, 1, '../images/display/animal_alphabet_X.png', '../audios/X.wav', '../audios/x-ray.wav', '0'),
(69, 1, '../images/display/y.jpg', '../audios/Y.wav', '../audios/yark.wav', '0'),
(70, 1, '../images/display/z.jpg', '../audios/Z.wav', '../audios/zebra.wav', '0'),
(72, 2, '../images/display/0.jpg', '../audios/0.wav', '', '0'),
(73, 2, '../images/display/1.jpg', '../audios/1.wav', '', '0'),
(74, 2, '../images/display/2.jpg', '../audios/2.wav', '', '0'),
(75, 2, '../images/display/3.jpg', '../audios/3.wav', '', '0'),
(76, 2, '../images/display/4.jpg', '../audios/4.wav', '', '0'),
(77, 2, '../images/display/5.jpg', '../audios/5.wav', '', '0'),
(78, 2, '../images/display/6.jpg', '../audios/6.wav', '', '0'),
(79, 2, '../images/display/7.jpg', '../audios/7.wav', '', '0'),
(80, 2, '../images/display/8.jpg', '../audios/8.wav', '', '0'),
(81, 2, '../images/display/9.jpg', '../audios/9.wav', '', '0'),
(82, 2, '../images/display/10 (2).jpg', '../audios/10.wav', '', '0'),
(83, 3, '../images/display/apple.jpg', '../audios/apple.wav', '', 'APPLE'),
(84, 3, '../images/display/banana.jpg', '../audios/banana.wav', '', 'BANANA'),
(85, 3, '../images/display/mango.jpg', '../audios/mango.wav', '', 'MANGO'),
(86, 3, '../images/display/grapes.jpg', '../audios/Grapes.wav', '', 'GRAPES'),
(87, 3, '../images/display/nectarine.jpg', '../audios/nectarine.wav', '', 'NECTARINE'),
(88, 3, '../images/display/orange.jpg', '../audios/Orange.wav', '', 'ORANGE'),
(91, 3, '../images/display/peach.jpg', '../audios/peach.wav', '', 'PEACH'),
(92, 3, '../images/display/strawberry.jpg', '../audios/strawberry.wav', '', 'STRAWBERRY'),
(93, 3, '../images/display/watermelon.jpg', '../audios/watermelon.wav', '', 'WATERMELON'),
(94, 4, '../images/display/beans.jpg', '../audios/beans.wav', '', 'BEANS'),
(95, 4, '../images/display/brinjal.jpg', '../audios/Brinjal.wav', '', 'BRINJAL'),
(96, 4, '../images/display/broccoli.jpg', '../audios/broccoli.wav', '', 'BROCCOLI'),
(97, 4, '../images/display/capsicum.jpg', '../audios/capsicum.wav', '', 'CAPSICUM'),
(99, 4, '../images/display/carrot.jpg', '../audios/carrot.wav', '', 'CARROT'),
(100, 3, '../images/display/cherry.jpg', '../audios/cherry.wav', '', 'CHERRY'),
(101, 4, '../images/display/cucumber.jpg', '../audios/cucumber.wav', '', 'CUCUMBER'),
(102, 4, '../images/display/ushroom.jpg', '../audios/Mushroom.wav', '', 'MUSHROOM'),
(103, 4, '../images/display/tomato.jpg', '../audios/tomato.wav', '', 'TOMATO'),
(106, 5, '../images/display/cat.jpg', '../audios/Cat meow animals020.wav', '../audios/catc.wav', 'CAT'),
(107, 5, '../images/display/cow.jpg', '../audios/Cow animals055.wav', '../audios/cowc.wav', 'COW'),
(108, 5, '../images/display/crow.jpg', '../audios/Crow animals010.wav', '', 'CROW'),
(109, 5, '../images/display/dog.jpg', '../audios/Dog bark animals079.wav', '../audios/dogc.wav', 'DOG'),
(110, 5, '../images/display/duck.jpg', '../audios/Duck-quacking animals038.wav', '../audios/duckc.wav', 'DUCK'),
(111, 5, '../images/display/elephant.jpg', '../audios/elephant.wav', '../audios/elephantc.wav', 'ELEPHANT'),
(112, 5, '../images/display/goat.jpg', '../audios/Goat animals115.wav', '../audios/goatc.wav', 'GOAT'),
(113, 5, '../images/display/horse.jpg', '../audios/Horse-whinnying animals036.wav', '', 'HORSE'),
(114, 5, '../images/display/leopard.jpg', '../audios/Leopard growl animals089.wav', '', 'LEOPARD'),
(115, 5, '../images/display/peacock.jpg', '../audios/Peacock animals018.wav', '', 'PEACOCK'),
(116, 5, '../images/display/pig.jpg', '../audios/Pigs eating animals113.wav', '../audios/pigc.wav', 'PIG'),
(117, 5, '../images/display/lion.jpg', '../audios/lion.wav', '../audios/lionc.wav', 'Lion'),
(118, 3, '../images/display/apricot.jpg', '../audios/apricot.wav', '', 'Apricot '),
(119, 3, '../images/display/CustardApple.jpg', '../audios/CUSTARD APPLE.wav', '', 'CUSTARD APPLE'),
(120, 3, '../images/display/pomegranate.jpg', '../audios/pomegranate.wav', '', 'POMEGRANATE'),
(121, 3, '../images/display/plum.jpg', '../audios/plum.wav', '', 'PLUM'),
(122, 3, '../images/display/papaya.jpg', '../audios/papaya.wav', '', 'PAPAYA'),
(123, 3, '../images/display/coconut.jpg', '../audios/coconut.wav', '', 'COCONUT'),
(124, 3, '../images/display/guava.jpg', '../audios/guava.wav', '', 'GUAVA'),
(125, 3, '../images/display/kiwi.jpg', '../audios/kiwi.wav', '', 'KIWI'),
(126, 3, '../images/display/pineapple.jpg', '../audios/pineapple.wav', '', 'PINEAPPLE'),
(127, 3, '../images/display/Melon.jpg', '../audios/melon.wav', '', 'MELON'),
(128, 4, '../images/display/Peas.jpg', '../audios/peas.wav', '', 'PEAS'),
(129, 4, '../images/display/beetroot.jpg', '../audios/beetroot.wav', '', 'BEETROOT'),
(130, 4, '../images/display/cabbage.jpg', '../audios/cabbage.wav', '', 'CABBAGE '),
(131, 4, '../images/display/cauliflower.jpg', '../audios/cauliflower.wav', '', 'CAULIFLOWER '),
(132, 4, '../images/display/Chilli.jpg', '../audios/chilli.wav', '', 'CHILLY '),
(133, 4, '../images/display/corn.jpg', '../audios/corn.wav', '', 'CORN'),
(134, 4, '../images/display/Corinder-leaf.jpg', '../audios/CORINDER LEAF.wav', '', 'CORIANDER LEAF'),
(135, 4, '../images/display/Onions.jpeg', '../audios/onions.wav', '', 'ONIONS'),
(136, 4, '../images/display/Garlic.jpg', '../audios/garlic.wav', '', 'GARLIC ');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `o1` varchar(255) NOT NULL,
  `o2` varchar(255) NOT NULL,
  `o3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `picture`, `question`, `ans`, `o1`, `o2`, `o3`) VALUES
(1, 'uploads/b1.jpg', 'How Many Butterfly?', '1', '2', '5', '7'),
(2, 'uploads/b2.jpg', 'How Many Butterfly?', '3', '2', '1', '9'),
(3, '1.png', 'How Many Cupcakes?', '1', '2', '3', '5'),
(4, '2.png', 'How many Cupcakes?', '2', '5', '6', '7'),
(5, '3.png', 'How many Cupcakes?', '3', '5', '8', '6'),
(7, 'uploads/Ambulance.jpg', 'Vehicle in the Image is known as  ?', 'Ambulance', 'Helicopter', 'Cycle', 'Scooter'),
(8, 'uploads/apple.jpg', 'Which Fruit in picture ?', 'Apple', 'Banana', 'Cherry', 'Sharon'),
(9, 'uploads/abcd.png', 'Missing Alphabet ?', 'E', 'H', 'L', 'I'),
(10, 'uploads/b3.jpg', 'Count number of Balloons ?', '5', '6', '7', '9'),
(11, 'uploads/b4.jpg', 'Count Number of Stars ?', '8', '5', '6', '9'),
(12, 'uploads/Lotus.jpg', 'Which flower in the image', 'Lotus', 'Rose', 'Lily', 'Sunflower'),
(13, 'uploads/b6.webp', 'Count Number of monkeys ?', '6', '9', '2', '1'),
(14, 'uploads/elephant.jpg', 'Which Animal in the picture ?', 'Elephant', 'Cow', 'Goat', 'Lion'),
(15, 'uploads/Tulips.jpg', 'Which flower in the image ?', 'Tulips', 'Sunflower', 'Rose', 'Lotus'),
(16, 'uploads/cat.png', 'Add Missing Letter ?', 'A', 'B', 'C', 'D'),
(17, 'uploads/Taj-Mahal.jpg', 'Which Wonder in the image ?', 'Taj Mahal', 'Machu Picchu', 'Petra', 'Great Wall of china'),
(18, 'uploads/WallofChina.jpg', 'Which Wonder in the image ?', 'Great Wall of China', 'Taj Mahal', 'Colosseum', 'Petra'),
(19, 'uploads/Annotation 2020-01-24 114858.jpg', 'What would be he addition of balls in picture ? ', '8', '9', '10', '5');

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
(40, 1, 'std 1 Guj medium sem', '../images/products/std1gujs2.jpg', '../images/allpdfs/Std1_GujMed_Kalrav_Sem2.pdf'),
(42, 2, 'Std-2 Guj Medium sem', '../images/products/std2-sem1.jpg', '../images/allpdfs/Std2_GujMed_Kallol_Sem1.pdf'),
(43, 2, 'Std-2 Guj Medium sem', '../images/products/std2-sem2.jpg', '../images/allpdfs/Std2_GujMed_Kallol_Sem2.pdf'),
(44, 2, 'Std-2 Eng Medium sem', '../images/products/std2-sem1.jpg', '../images/allpdfs/Std2_EngMed_English_Sem1.pdf'),
(45, 2, 'Std-2 Eng Medium sem', '../images/products/std2-sem2.jpg', '../images/allpdfs/Std2_EngMed_Koojan_Sem2.pdf'),
(46, 3, 'Std-3 Guj Medium sem', '../images/products/guj.jpg', '../images/allpdfs/Std3_GujMed_Gujarati_Sem1.pdf'),
(47, 3, 'Std-3 Guj Medium mat', '../images/products/maths.jpg', '../images/allpdfs/Std3_GujMed_Maths_Sem1.pdf'),
(48, 3, 'Std-3 Guj Medium mar', '../images/products/mari_aspas.jpg', '../images/allpdfs/Std3_GujMed_MariAasPass_Sem1.pdf'),
(49, 3, 'Std-3 Eng Medium Eng', '../images/products/eng.jpg', '../images/allpdfs/Std3_EngMed_English_Sem1Sem2.pdf'),
(50, 4, 'Std-4 Guj Medium guj', '../images/products/guj.jpg', '../images/allpdfs/Std4_GujMed_Gujarati_Sem1Sem2.pdf'),
(51, 5, 'Std-5 Guj Medium mat', '../images/products/maths.jpg', '../images/allpdfs/Std5_GujMed_Maths_Sem1.pdf'),
(52, 6, 'Std-6 Guj Medium Mat', '../images/products/maths-sem1.jpg', '../images/allpdfs/chap1.pdf'),
(53, 7, 'Std-7 Guj Medium Mat', '../images/products/maths-sem1.jpg', '../images/allpdfs/chap1.pdf'),
(54, 8, 'Std-8 Guj Medium Mat', '../images/products/maths-sem-1.jpg', '../images/allpdfs/chap1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'What is capital of India ?'),
(2, 'Which is most visited country in world ?'),
(3, 'Which is the most populated city in world  ?');

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
  `passsword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`U_id`, `username`, `city`, `address`, `state`, `email`, `phone`, `passsword`) VALUES
(1, 'panda', 'adfadf', 'aadasd', 'affaf', 'panda@gmail.com', '741852963', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `videodata`
--

CREATE TABLE `videodata` (
  `v_id` int(11) NOT NULL,
  `v_name` text NOT NULL,
  `v_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videodata`
--

INSERT INTO `videodata` (`v_id`, `v_name`, `v_link`) VALUES
(2, 'def', 'https://www.youtube.com/embed/tgbNymZ7vqY'),
(6, 'xyz', 'https://www.youtube.com/embed/bnpfjEHF-NU'),
(7, 'pqr', 'https://www.youtube.com/embed/V0lQ3ljjl40'),
(8, 'Solar System', 'https://www.youtube.com/embed/Qd6nLM2QlWw'),
(9, 'hindi poem', 'https://www.youtube.com/embed/vTCZrgb2PWc'),
(10, 'hathi raja', 'https://www.youtube.com/embed/gAM6v3BkjYE');

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
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `videodata`
--
ALTER TABLE `videodata`
  ADD PRIMARY KEY (`v_id`);

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
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `Productmaster_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
