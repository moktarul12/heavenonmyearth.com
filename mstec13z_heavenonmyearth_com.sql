-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2019 at 07:35 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mstec13z_heavenonmyearth.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `h_products`
--

CREATE TABLE `h_products` (
  `pro_id` int(10) NOT NULL,
  `pro_name` varchar(250) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_price` varchar(250) NOT NULL,
  `pro_status` int(1) NOT NULL DEFAULT '0',
  `pro_tmp_del` int(1) NOT NULL DEFAULT '0',
  `pro_image` varchar(250) NOT NULL,
  `pro_created_by` varchar(250) NOT NULL,
  `pro_created_at` varchar(250) NOT NULL,
  `pro_updated_by` varchar(255) NOT NULL,
  `pro_updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_products`
--

INSERT INTO `h_products` (`pro_id`, `pro_name`, `pro_desc`, `pro_price`, `pro_status`, `pro_tmp_del`, `pro_image`, `pro_created_by`, `pro_created_at`, `pro_updated_by`, `pro_updated_at`) VALUES
(1, 'Butter-head', ' 3.63 grams of carbohydrate, 0.74 grams of protein, 1.53 grams of sugars and only 8 milligrams of sodium, butter lettuce is a low-fat, low-calorie, low-sodium.', '130.00', 0, 0, 'butterhead.jpg', 'admin', '2018-08-29 18:00:46', 'admin', '2019-03-07 16:40:51'),
(2, 'Red Oak-leaf', 'These Red leaves are a good source of Dietary Fiber, Calcium, Magnesium, Phosphorus and Selenium, Vitamin A, C, & K, Thiamin, Riboflavin,  Folate & Iron.', '110.00', 0, 0, 'red-oak-leaf.jpg', 'admin', '2018-08-29 18:04:05', 'admin', '2019-03-07 16:41:52'),
(3, 'Mint', 'Mint 50-grams', '20.00', 0, 1, 'mint-product-image.jpg', 'admin', '2018-08-29 18:05:24', 'admin', '2018-10-05 11:45:56'),
(4, 'Iceberg', 'Iceberg', '140.00', 0, 1, 'iceberg-lettuce product image.jpg', 'admin', '2018-08-29 18:06:12', 'admin', '2018-10-07 07:47:52'),
(5, 'Sage 50-grams', 'Sage 50-grams', '60.00', 0, 1, 'bunch-of-sage-leaves-product image.jpg', 'admin', '2018-08-29 18:07:01', 'admin', '2018-08-29 18:07:01'),
(6, 'Basil-50-grams', 'Basil-50-grams', '50.00', 0, 1, 'basil-with-wet-leaves-product image.jpg', 'admin', '2018-08-29 18:07:48', 'admin', '2018-10-11 10:35:35'),
(7, 'Green', 'A good source of saturated fat, cholesterol, Vitamin A, B, C, D, K & B2. Low in sodium, a good source of dietary fiber, manganese, potassium, biotin, copper and omega-3 fatty acids, phosphorus, magnesium & calcium.', '110.00', 0, 0, 'oak-leaf-product-image.jpg', 'admin', '2018-08-29 18:08:33', 'admin', '2019-03-15 17:26:41'),
(8, 'Sage', ' Medically it has been used as a panacea for centuries and it has a lowering effect on blood sugar. Salvia is used in cough medicine to dissolve phlegm and relieve coughing. In addition, it is used in many kinds of toothpaste.', '40', 1, 0, 'sage bunch.jpg', 'admin', '2018-11-14 18:24:49', 'admin', '2018-11-14 18:24:49'),
(9, 'Thyme', 'Thyme is a Mediterranean herb with dietary, medicinal, and ornamental uses. The flowers, leaves, and oil of thyme have been used to treat a range of symptoms and complaints.\r\nThese include diarrhea, stomach ache, arthritis, and sore throat.', '30', 1, 0, 'thyme.jpg', 'admin', '2018-11-14 18:28:26', 'admin', '2018-11-14 18:28:26'),
(10, 'Mint', 'Mint is a calming and soothing herb that has been used for thousands of years to aid with upset stomach or indigestion. Mint is thought to increase bile secretion and encourage bile flow, which helps to speed and ease digestion (and which may also support healthy cholesterol levels)', '20', 1, 1, 'mint.jpg', 'admin', '2018-11-14 18:32:01', 'admin', '2018-11-14 18:32:01'),
(11, 'Locarno', 'As a good source of anti-oxidants, vitamins and minerals; cauliflower consist of protein, thiamine, riboflavin, niacin, dietary fibre, vitamin C, K, B6, folate, potassium, magnesium and phosphorus. It is helpful for reducing weight and preventing various deadly diseases.', '120', 0, 0, 'locarno.jpeg', 'admin', '2019-03-07 16:45:27', 'admin', '2019-03-07 16:45:27'),
(12, 'Arugula', 'Good for Bone Health. Helps Reduce Inflammation in the Body. Cleanses and Detoxifies the Body. Protects the Aging Brain From Cognitive Decline', '70', 0, 0, 'arugula.jpg', 'admin', '2019-03-07 16:49:42', 'admin', '2019-03-07 16:49:42'),
(13, 'Baby Spinach', 'These nutrients include folate, vitamin C, niacin, riboflavin, and potassium. Cooked Spinach Benefits: When you eat spinach that has been heated, you will absorb higher levels of vitamins A and E, protein, fiber, zinc, thiamin, calcium, and iron.', '40', 0, 0, 'babyspinach.jpg', 'admin', '2019-03-07 16:53:12', 'admin', '2019-03-07 16:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `h_users`
--

CREATE TABLE `h_users` (
  `uid` int(11) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `u_password` varchar(250) NOT NULL,
  `u_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_users`
--

INSERT INTO `h_users` (`uid`, `u_name`, `u_password`, `u_email`) VALUES
(1, 'admin', 'admin@123', 'admin@home.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `h_products`
--
ALTER TABLE `h_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `h_products`
--
ALTER TABLE `h_products`
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
