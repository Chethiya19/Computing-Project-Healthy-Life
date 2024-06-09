-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 05:44 AM
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
-- Database: `healthy_life`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'Chethiya', '1234', 'Chethiya Nimesha'),
(2, 'Wanshika', 'abc', 'Wanshika Yashmal');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Sugar'),
(2, 'Pressure'),
(3, 'Cholesterol'),
(4, 'Child'),
(5, 'Hemoglobin'),
(6, 'Gym'),
(7, 'Overweight'),
(8, 'Underweight');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('Chethiya', 'chethiyanimesha19@gmail.com', '0762240099', 'food', 'Food Scheduling should improve');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
(1, 'Chethiya', 'Chethiya Nimesha', 'chethiyanimesha19@gmail.com', '0762240099', 'Kotikawatta', '1234'),
(2, 'Damindu', 'Damindu Prasad', 'daminduprasad123@gmail.com', '0713784765', 'Maharagama', 'dam567'),
(3, 'Pasindu', 'Pasindu Kasun', 'pasindukasun55@gmail.com', '0758967536', 'Piliyandala', 'pass2233'),
(4, 'Sheron', 'Sheron De Silva', 'sherondesilva99@gmail.com', '0759873626', 'Maharagama', 'sheron999'),
(5, 'Tamasha', 'Tamasha Kavindi', 'tamashakavindi123@gmail.com', '0764243674', 'Kahathuduwa', '1234'),
(6, 'Tharindu', 'Tharindu Lakshan', 'tharindulakshan123@gmail.com', '0740987463', 'Homagama', 'tha356'),
(7, 'Wanshika', 'Wanshika Yashmal', 'wanshikayashmal@gmail.com', '0759683402', 'Nugegoda', 'abcd'),
(8, 'Yasara', 'Yasara Nethmini', 'yasaranethmini@gmail.com', '0718946730', 'Aththidiya', 'yas123'),
(9, 'Yasintha', 'Yasintha Shanika', 'yasinthashanika@gmail.com', '0762130099', 'Kaduwela', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

CREATE TABLE `deliveryboy` (
  `deliveryboy_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryboy`
--

INSERT INTO `deliveryboy` (`deliveryboy_id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `vehicle_number`) VALUES
(1, 'John', 'Doe', 'john@gmail.com', '0774567890', 'Colombo', 'BFW 1234'),
(2, 'kasun', 'Perera', 'kasun@gmail.com', '0772974639', 'Nugegoda', 'BBC 9878'),
(3, 'Chethiya', 'Nimesha', 'chethiya@gmail.com', '0762240099', 'Kotikawatta', 'BFC 4422'),
(4, 'Pasindu', 'Mendis', 'pasindu@gmail.com', '0758395256', 'Piliyandala', 'BIX 2323'),
(5, 'Sheron', 'Silva', 'sheron@gmail.com', '0710975437', 'Maharagama', 'BBC 9182'),
(6, 'Yasintha', 'Senadheera', 'yasintha@gmail.com', '0762130099', 'Colombo 9', 'BFW 5767');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `payment_type`) VALUES
(1, 1, 'Cash'),
(2, 2, 'Cash'),
(3, 3, 'Card'),
(4, 4, 'Cash'),
(5, 5, 'Card'),
(6, 6, 'Card'),
(7, 7, 'Cash'),
(8, 8, 'Cash'),
(9, 9, 'Card'),
(10, 10, 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_image`, `price`, `category_id`) VALUES
(1, 'Red Rice', 'Red Rice is the best.', './uploads/redrice.jpg', '220.00', 1),
(2, 'Almond', 'Almond 1Kg', './uploads/Almond.jpg', '950.00', 6),
(3, 'Lady finger', 'Lady finger 1 Kg', './uploads/Lady finger.png', '160.00', 1),
(4, 'Dried Prunus', 'Dried Prunus 1Kg', './uploads/Dried_Prunus.jpg', '850.00', 5),
(5, 'Cashew Nut', 'Cashew Nut 1Kg', './uploads/Cashew Nut.jpg', '2500.00', 6),
(6, 'Bitter ground', 'Bitter ground 1 Kg', './uploads/Bitter ground.png', '270.00', 2),
(7, 'Sardine', 'Sardine 1 Kg', './uploads/Sardine.png', '450.00', 3),
(8, 'Carrot', 'Carrot 1Kg', './uploads/Carrot.png', '260.00', 1),
(9, 'Tomato', 'Tomato 1Kg', './uploads/Tomato.png', '260.00', 5),
(10, 'Golden Cow Baby Rusks ', 'Little lion Golden Cow Baby Rusks 70g', './uploads/Rusks.jpg', '360.00', 4),
(11, 'Pumpkin seeds.jpg', 'Pumpkin seeds 1Kg', './uploads/Pumpking seeds.jpg', '370.00', 5),
(12, 'cauliflower', 'cauliflower 1 Kg', './uploads/cauliflower.png', '160.00', 1),
(13, 'Apple', 'Apple 1 Kg', './uploads/Apple.png', '650.00', 5),
(14, 'Red Reddish', 'Red Reddish 1Kg', './uploads/Red raddish.png', '330.00', 1),
(15, 'Raisins', 'Raisins 1Kg', './uploads/Raisins.jpg', '1000.00', 5),
(16, 'Garlic', 'Garlic', './uploads/Garlic.png', '640.00', 1),
(17, 'Avocado', 'Avocado 1Kg', './uploads/Avacado.png', '250.00', 3),
(18, 'Salmon', 'Salmon 1Kg', './uploads/Salmon.png', '250.00', 3),
(19, 'Mushrooms', 'Mushrooms 1Kg', './uploads/Mushrooms.jpg', '430.00', 5),
(20, 'Orange', 'Orange 1Kg', './uploads/Orange.png', '550.00', 3),
(21, 'Green Beans', 'Green Beans 1Kg', './uploads/Green Beans.jpg', '260.00', 5),
(22, 'Potato', 'Potato 1Kg', './uploads/Potatos.jpg', '300.00', 5),
(23, 'Butternut Squash', 'Butternut Squash 1Kg', './uploads/Butternut Squash.png', '560.00', 7),
(24, 'Gova', 'Gova 1Kg', './uploads/Gova.jpg', '450.00', 7),
(25, 'Fresh Milk ', 'Fresh Milk 1l', './uploads/Fresh Milk.jpg', '550.00', 8),
(26, 'Happy cow Cheese', 'Happy cow Cheese 1 Pack', './uploads/Cheese.jpg', '990.00', 8),
(27, 'Kiwi', 'Kiwi 1Kg', './uploads/Kiwi.png', '500.00', 7),
(28, 'Spinach', 'Spinach 1kg', './uploads/Spinach.png', '700.00', 7),
(29, 'Green tea', 'Green tea 1 Pack', './uploads/Green tea.jpg', '800.00', 7),
(30, 'Anchor plus', 'Anchor plus 400g\r\n', './uploads/Anchor+.jpeg', '1500.00', 4),
(31, 'Nestle Lactogrow Clasic', 'Nestle Lactogrow Clasic 300g', './uploads/Lactogrow.jpeg', '1350.00', 4),
(32, 'Astra Mayonnaise', 'Astra Mayonnaise 280ml', './uploads/Astra.jpeg', '630.00', 4),
(33, 'Baby Cereal with Milk', 'Baby Cereal with Milk 250g', './uploads/Baby Cereal with Milk.jpg', '860.00', 4),
(34, 'First Steps breakfast', 'First Steps breakfast 500g', './uploads/First Steps breakfast.jpg', '1350.00', 4),
(35, 'Mango & Vanilla Custard', 'Mango & Vanilla Custard 120g', './uploads/Mango & Vanila Custard.jpg', '330.00', 4),
(36, 'Nestle Nangrow ', 'Nestle Nangrow 300g', './uploads/Nangrow.jpeg', '1200.00', 4),
(37, 'PediaPro', 'Achor PediaPro 350g (3-5) Years ', './uploads/PediaPro.jpeg', '1100.00', 4),
(38, 'Samaposha', 'CBL Samaposha 200g', './uploads/Samaposha.jpg', '150.00', 4),
(39, 'Prediapro (1-3)', 'Anchor Prediapro 250g for (1-3) Years', './uploads/Prediapro(1-3).jpeg', '1350.00', 4),
(40, 'Sweet Potato.jpg', 'Sweet Potato 1Kg', './uploads/Sweet Potato.jpg', '260.00', 4),
(41, 'Best protein', 'bpi sports Best protein 5.1 LBS (2329g)', './uploads/Best protein.jpg', '6500.00', 6),
(42, 'Chocolate & Peanut butter blast', 'Chocolate & Peanut butter blast', './uploads/Choclate & Peanut butter blast.jpg', '530.00', 6),
(43, 'Cowpea White', 'Catch Cowpea-White 500g', './uploads/Cowpea-White.jpeg', '530.00', 6),
(44, 'Canned Fish', 'Renuka Captain Jack Mackerel Canned Fish 425g', './uploads/Canned-Fish.jpeg', '830.00', 6),
(45, 'Diet Whey Protein', 'Applied Nutrition Diet Whey Protein 1kg ', './uploads/Diet Whey Protein.jpg', '3400.00', 6),
(46, 'Fruits & Fitness', 'Nestle Fruits & Fitness 230g', './uploads/Fitnesse & Fruits.png', '1200.00', 6),
(47, 'Granola bar', 'Granola bar 1Kg', './uploads/Granola bar.png', '1000.00', 6),
(48, 'Protinex', 'Nutritional Supplement Protinex Gold 400g', './uploads/Protinex.jpeg', '1700.00', 6),
(49, 'Grains', 'Grains 1Kg', './uploads/Grains.jpg', '600.00', 6),
(50, 'Samaposha', 'CBL Samaposha 200g', './uploads/Samaposha.jpeg', '180.00', 6),
(51, 'Edamame', 'Edamame 1Kg ', './uploads/Edamame.png', '800.00', 1),
(52, 'Cashew nuts', 'Cashew nuts 1Kg', './uploads/Cashew nuts.png', '2300.00', 1),
(53, 'Bitter ground', 'Bitter ground 1 Kg', './uploads/Bitter ground.png', '270.00', 1),
(54, 'Resource Diabetic', 'Resource Diabetic Complete Nutrition 400g Nestle Health Science  ', './uploads/Resource Diabetic.jpg', '1500.00', 1),
(55, 'Brussels sprout', 'Brussels sprout 1 Kg', './uploads/Brussels sprout.png', '1050.00', 3),
(56, 'Ensure Diabetes Care', 'Ensure Diabetes Care 1Kg Low Glycemic Index ', './uploads/Ensure Diabetes Care.jpg', '1200.00', 1),
(57, 'Apple', 'Apple 1 Kg', './uploads/Apple.png', '650.00', 3),
(58, 'Beans', 'Beans 1 Kg', './uploads/Beans.png', '450.00', 3),
(59, 'Berries', 'Berries 1 Kg', './uploads/Berries.png', '980.00', 3),
(60, 'Pelwatta Milk Powder (Non-Fat)', 'Pelwatta Milk Powder (Non-Fat) 400g', './uploads/pelwatta Milk Powder.jpg', '1100.00', 3),
(61, 'Olive Oil', 'Olive Oil 1L', './uploads/oliveoil.jpg', '1200.00', 3),
(62, 'Cashew Nuts', 'Cashew Nut 1Kg', './uploads/Cashew Nut.jpg', '2400.00', 3),
(63, 'Lavalu', 'Lavalu 1Kg', './uploads/Lavalu.jpg', '400.00', 3),
(64, 'Broccoli', 'Broccoli 1Kg', './uploads/Bracoli.png', '400.00', 5),
(65, 'Dates', 'Dates 1Kg', './uploads/Dates.jpg', '900.00', 5),
(66, 'Peas', 'Peas 1Kg', './uploads/Peas.jpg', '500.00', 5),
(67, 'Berries ', 'Berries 1Kg', './uploads/Berries.png', '3550.00', 5),
(68, 'Appetite booster', 'Appetite booster 24ml', './uploads/Appetite booster.jpg', '760.00', 8),
(69, 'Kandos COCOA', 'Kandos COCOA Extra Butter', './uploads/Kandos.jpg', '1500.00', 8),
(70, 'Rezyme-BC', 'B Vitamin Complex syrup 200ml', './uploads/Vitamin syrup.jpg', '940.00', 8),
(71, 'Salmon', 'Salmon 1Kg', './uploads/Salmon.png', '250.00', 8),
(72, 'Diabetasol', 'Diabetasol ', './uploads/Diabetasol.png', '2500.00', 1),
(73, 'Sustagen', 'Powder Sustagen Nutritional Suppliment 400g (Chocolate flavoured) ', './uploads/diabetic 1.jpg', '1150.00', 1),
(74, 'Diasure Diabetic', 'Astron Nutrition Diasure Diabetic 400g ', './uploads/Diasure Diabetic.png', '1430.00', 1),
(75, 'Orange Fruit', 'Orange Stock - Pack (5 Oranges)', './uploads/Orange-fruits.png', '600.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `customer_id`, `contact`, `address`, `total`, `order_status`, `order_date`) VALUES
(1, 1, '0762240099', 'Kotikawatta', '650.00', 1, '2023-07-19'),
(2, 5, '0764243674', 'Kahathuduwa', '1520.00', 1, '2023-07-20'),
(3, 7, '0759683402', 'Nugegoda', '2160.00', 1, '2023-07-21'),
(4, 8, '0718946730', 'Aththidiya', '1100.00', 1, '2023-07-22'),
(5, 2, '0713784765', 'Maharagama', '2590.00', 1, '2023-07-23'),
(6, 4, '0759873626', 'Maharagama', '6500.00', 0, '2023-07-24'),
(7, 6, '0740987463', 'Homagama', '2630.00', 0, '2023-07-25'),
(8, 3, '0758967536', 'Piliyandala', '2400.00', 0, '2023-07-26'),
(9, 9, '0762130099', 'Kaduwela', '950.00', 0, '2023-07-26'),
(10, 9, '0762130099', 'Kaduwela', '950.00', 0, '2023-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_quantity`, `price`, `total`) VALUES
(1, 1, 13, 'Apple', 1, '650.00', '650.00'),
(2, 2, 1, 'Red Rice', 2, '220.00', '440.00'),
(3, 2, 10, 'Golden Cow Baby Rusks ', 3, '360.00', '1080.00'),
(4, 3, 26, 'Happy cow Cheese', 2, '990.00', '1980.00'),
(5, 3, 50, 'Samaposha', 1, '180.00', '180.00'),
(6, 4, 20, 'Orange', 2, '550.00', '1100.00'),
(7, 5, 32, 'Astra Mayonnaise', 3, '630.00', '1890.00'),
(8, 5, 28, 'Spinach', 1, '700.00', '700.00'),
(9, 6, 41, 'Best protein', 1, '6500.00', '6500.00'),
(10, 7, 74, 'Diasure Diabetic', 1, '1430.00', '1430.00'),
(11, 7, 56, 'Ensure Diabetes Care', 1, '1200.00', '1200.00'),
(12, 8, 62, 'Cashew Nuts', 1, '2400.00', '2400.00'),
(13, 9, 2, 'Almond', 1, '950.00', '950.00'),
(14, 10, 2, 'Almond', 1, '950.00', '950.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  ADD PRIMARY KEY (`deliveryboy_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_customer_order` (`customer_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `fk_details_orders` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  MODIFY `deliveryboy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_orders` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `fk_customer_order` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `fk_tbl_orders_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `fk_details_orders` FOREIGN KEY (`order_id`) REFERENCES `tbl_orders` (`order_id`),
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tbl_orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
