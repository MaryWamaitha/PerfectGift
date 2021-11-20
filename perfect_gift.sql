-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 01:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect_gift`
--

-- --------------------------------------------------------

--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(20) NOT NULL,
  `brand_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Nike'),
(2, 'Apple'),
(3, 'Tecno'),
(4, 'Canon'),
(5, 'Generic'),
(6, 'Punny Crafts');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_id`, `c_id`, `ip_add`, `qty`) VALUES
(1, 20, 3, '::1', 3),
(2, 26, 3, '::1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Gifts'),
(2, 'Money'),
(3, 'Artsy'),
(4, 'Electronics'),
(5, 'Stationary'),
(6, 'Clothes'),
(7, 'Mugs'),
(8, 'Generic Gifts'),
(9, 'Sports Item'),
(10, 'Tech Products');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_Fname` varchar(100) NOT NULL,
  `customer_Lname` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(150) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_Fname`, `customer_Lname`, `customer_email`, `customer_pass`, `customer_contact`, `customer_address`, `role`) VALUES
(1, 'Mary', 'Wamaitha', 'mary.wamaitha@ashesi.edu.oh', '$2y$10$XE.04Wn39Q/R8On.rVFQ1uJHGy7CR5XQ2/fD1a7pLDBLXeeDTItlK', '', '', 0),
(2, '', '', 'mary.wamaitha@ashesi.edu.km', '$2y$10$R7vJZGgLhDkfSxm2JbbM2.bKFmkTbBNEy3LsmqVIUaLm/kvSQcm.C', '', '', 0),
(3, 'Mary', 'Wamaitha', 'marywamaitha019@gmail.com', '$2y$10$IWz5H5DBMVoBisrJa4r9Eu1An26KlPnuVEcfSeMuF7RIEjO7bVJyW', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_cost`
--

CREATE TABLE `delivery_cost` (
  `location_id` int(20) NOT NULL,
  `locations` enum('East Legon','Airport Residential','','') NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `product_id`, `image_path`) VALUES
(1, 16, '../images/Products/shirt1.png'),
(8, 9, '../images/Products/notebook2.png'),
(10, 11, '../images/Products/mug3.jpg'),
(12, 13, '../images/Products/jar3.png'),
(14, 15, '../images/Products/jar2.png'),
(16, 17, '../images/Products/Mug2.png'),
(17, 18, '../images/Products/Jordans1.jpg'),
(18, 19, '../images/Products/NikeZoom.jpg'),
(21, 22, '../images/Products/Sneakers1.jpg'),
(23, 21, '../images/Products/yellow.jpg'),
(24, 20, '../images/Products/shoes.jpg'),
(25, 23, '../images/Products/book3.png'),
(26, 24, '../images/Products/writeideas.jpg'),
(27, 25, '../images/Products/book5.jpg'),
(28, 26, '../images/Products/iphoneairpods.jpg'),
(29, 27, '../images/Products/headphones.jpg'),
(30, 28, '../images/Products/macbook.jpg'),
(31, 29, '../images/Products/macbook5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` int(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(500) DEFAULT NULL,
  `product_colour` varchar(100) DEFAULT NULL,
  `product_keywords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_colour`, `product_keywords`) VALUES
(9, 'Irris Wharriris Notebook', 5, 5, 45, 'Notebook, puns, funny, gifts', '', 'Books, writing, friendship'),
(11, 'Stay Humble', 8, 5, 60, 'White stay humble mug ', '', 'faith, coffee, busy, working'),
(13, 'Prayer Jar', 1, 5, 35, 'Medium sized jar to keep prayers  with sticky notes', '', 'prayer, faith, gratitude, Christianity, '),
(15, 'Food', 1, 4, 700, '555', '', 'Jars'),
(17, 'Bad Puns Mug', 8, 6, 65, 'Coffe Mug', '', 'Coffee, Tea, Funny'),
(18, 'Jordans', 9, 1, 200, 'Shoes, Outdorr, exercise, fashion', '', 'Shoes, exercise, fashionable, outdoor'),
(19, 'Nike Zoom', 9, 1, 270, 'Shoes, Outdorr, exercise, fashion', '', 'Shoes, exercise, fashionable, outdoor'),
(20, 'Nike Air 1', 9, 1, 300, 'Shoes, Outdoor, exercise, fashion', '', 'Shoes, exercise, fashionable, outdoor'),
(21, 'Nike Art', 9, 1, 450, 'Shoes, Outdorr, exercise, fashion', '', 'Shoes, Art, Leather, Fashion, Cool'),
(22, 'Exercise Sneakers', 9, 1, 120, 'Exercise, shoes, simple', '', 'Shoes, Fashion'),
(23, 'Talk Nedry to me Bookmark', 5, 6, 10, 'Cute Bookmark', '', 'Bookmark'),
(24, 'Write Ideas Mini Book', 5, 6, 20, 'Book, stationary', '', 'Book, stationary, notes, creativity'),
(25, 'Best Self Book', 5, 6, 140, 'Book, stationary, reading', '', 'Books, happy, pursuit'),
(26, 'Headphones 1', 10, 2, 4600, 'Laptop', '', 'Electronics, music, quality, fun'),
(27, 'Headphones', 10, 3, 250, 'Headphones', '', 'Music, artist'),
(28, 'Mac Book 5', 10, 2, 4000, 'Laptop, work, entertainment', '', 'Laptop, electronic'),
(29, 'Macbook Pro X', 10, 2, 3000, 'Laptop, work, entertainment', '', 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `StockID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Manager` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--


--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`),
  ADD KEY `product_brand` (`product_brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
