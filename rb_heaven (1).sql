-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2021 at 11:58 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rb_heaven`
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
  `pro_updated_at` varchar(250) NOT NULL,
  `isswiggy` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_products`
--

INSERT INTO `h_products` (`pro_id`, `pro_name`, `pro_desc`, `pro_price`, `pro_status`, `pro_tmp_del`, `pro_image`, `pro_created_by`, `pro_created_at`, `pro_updated_by`, `pro_updated_at`, `isswiggy`) VALUES
(1, 'Butter-head', ' 3.63 grams of carbohydrate, 0.74 grams of protein, 1.53 grams of sugars and only 8 milligrams of sodium, butter lettuce is a low-fat, low-calorie, low-sodium.', '130.00', 0, 1, 'butterhead.jpg', 'admin', '2018-08-29 18:00:46', 'admin', '2019-03-07 16:40:51', 0),
(2, 'Red Oak-leaf', 'These Red leaves are a good source of Dietary Fiber, Calcium, Magnesium, Phosphorus and Selenium, Vitamin A, C, & K, Thiamin, Riboflavin,  Folate & Iron.', '110.00', 0, 1, 'red-oak-leaf.jpg', 'admin', '2018-08-29 18:04:05', 'admin', '2019-03-07 16:41:52', 0),
(3, 'Mint', 'Mint 50-grams', '20.00', 0, 1, 'mint-product-image.jpg', 'admin', '2018-08-29 18:05:24', 'admin', '2018-10-05 11:45:56', 0),
(4, 'Iceberg', 'Iceberg', '140.00', 0, 1, 'iceberg-lettuce product image.jpg', 'admin', '2018-08-29 18:06:12', 'admin', '2018-10-07 07:47:52', 0),
(5, 'Sage 50-grams', 'Sage 50-grams', '60.00', 0, 1, 'bunch-of-sage-leaves-product image.jpg', 'admin', '2018-08-29 18:07:01', 'admin', '2018-08-29 18:07:01', 0),
(6, 'Basil-50-grams', 'Basil-50-grams', '50.00', 0, 1, 'basil-with-wet-leaves-product image.jpg', 'admin', '2018-08-29 18:07:48', 'admin', '2018-10-11 10:35:35', 0),
(7, 'Green', 'A good source of saturated fat, cholesterol, Vitamin A, B, C, D, K & B2. Low in sodium, a good source of dietary fiber, manganese, potassium, biotin, copper and omega-3 fatty acids, phosphorus, magnesium & calcium.', '110.00', 0, 1, 'oak-leaf-product-image.jpg', 'admin', '2018-08-29 18:08:33', 'admin', '2019-03-15 17:26:41', 0),
(8, 'Sage', ' Medically it has been used as a panacea for centuries and it has a lowering effect on blood sugar. Salvia is used in cough medicine to dissolve phlegm and relieve coughing. In addition, it is used in many kinds of toothpaste.', '40', 1, 1, 'sage bunch.jpg', 'admin', '2018-11-14 18:24:49', 'admin', '2018-11-14 18:24:49', 0),
(9, 'Thyme', 'Thyme is a Mediterranean herb with dietary, medicinal, and ornamental uses. The flowers, leaves, and oil of thyme have been used to treat a range of symptoms and complaints.\r\nThese include diarrhea, stomach ache, arthritis, and sore throat.', '30', 1, 1, 'thyme.jpg', 'admin', '2018-11-14 18:28:26', 'admin', '2018-11-14 18:28:26', 0),
(10, 'Mint', 'Mint is a calming and soothing herb that has been used for thousands of years to aid with upset stomach or indigestion. Mint is thought to increase bile secretion and encourage bile flow, which helps to speed and ease digestion (and which may also support healthy cholesterol levels)', '20', 1, 1, 'mint.jpg', 'admin', '2018-11-14 18:32:01', 'admin', '2018-11-14 18:32:01', 0),
(11, 'Locarno', 'As a good source of anti-oxidants, vitamins and minerals; cauliflower consist of protein, thiamine, riboflavin, niacin, dietary fibre, vitamin C, K, B6, folate, potassium, magnesium and phosphorus. It is helpful for reducing weight and preventing various deadly diseases.', '120', 0, 1, 'locarno.jpeg', 'admin', '2019-03-07 16:45:27', 'admin', '2019-03-07 16:45:27', 0),
(12, 'Arugula', 'Good for Bone Health. Helps Reduce Inflammation in the Body. Cleanses and Detoxifies the Body. Protects the Aging Brain From Cognitive Decline', '70', 0, 1, 'arugula.jpg', 'admin', '2019-03-07 16:49:42', 'admin', '2019-03-07 16:49:42', 0),
(13, 'Baby Spinach', 'These nutrients include folate, vitamin C, niacin, riboflavin, and potassium. Cooked Spinach Benefits: When you eat spinach that has been heated, you will absorb higher levels of vitamins A and E, protein, fiber, zinc, thiamin, calcium, and iron.', '40', 0, 1, 'babyspinach.jpg', 'admin', '2019-03-07 16:53:12', 'admin', '2019-03-07 16:53:12', 0),
(14, 'Butter-head', '3.63 grams of carbohydrate, 0.74 grams of protein, 1.53 grams of sugars and only 8 milligrams of sodium, butter lettuce is a low-fat, low-calorie, low-sodium.', '130', 0, 1, 'butterhead.jpg', 'admin', '2020-08-03 17:19:05', 'admin', '2020-08-03 17:19:05', 0),
(15, 'Arugula', 'Good for Bone Health. Helps Reduce Inflammation in the Body. Cleanses and Detoxifies the Body. Protects the Aging Brain From Cognitive Decline', '70', 0, 1, 'arugula.jpg', 'admin', '2020-08-03 17:25:37', 'admin', '2020-08-03 17:25:37', 0),
(16, 'Arugula', 'Good for Bone Health. Helps Reduce Inflammation in the Body. Cleanses and Detoxifies the Body. Protects the Aging Brain From Cognitive Decline', '70', 0, 1, 'arugula.jpg', 'admin', '2020-08-03 17:28:49', 'admin', '2020-08-03 17:28:49', 0),
(17, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.\r\n\r\n', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 12:46:00', 'admin', '2020-08-04 12:46:00', 1),
(18, 'Vegan Mediterranean Crunchy Couscous salad', 'This Mediterranean couscous salad strikes the perfect balance of phytonutrients and fiber-rich vegetables plus protein that makes this salad light yet satisfying.', '219', 1, 1, 'organicfood3.jpg', 'admin', '2020-08-04 12:47:13', 'admin', '2020-08-04 12:47:13', 1),
(19, 'Nutrient Packed Lentil Salad ', 'This vegetarian lentil salad comes together complete with a flavorful honey mustard vinaigrette, itâ€™s perfect for meal prep lunches or as a side dish. Vegetarian and gluten-free', '219', 1, 1, 'organicfood2.jpg', 'admin', '2020-08-04 12:48:17', 'admin', '2020-08-04 12:48:17', 1),
(20, 'Fresh Fruit With Coconut Dressing', 'Light, Healthy, Juicy, fresh, seasonal & tropical fruit varieties like Melons, Water-melon, Berries, Orange, Grapes & Pineapple, topped with fresh Coconut milk or Coconut Cream dressing.', '219', 1, 1, 'fresh fruit with coconut.png', 'admin', '2020-08-04 12:51:56', 'admin', '2020-08-04 12:51:56', 1),
(21, 'Crunchy Mediterranean Couscous Wrap', 'Fiber rich vegetables plus protein that makes this salad stuffing addition as a great surprise into every bite through those soft wheat-based breads, and the crunch of fresh veggies.\r\n\r\n', '219', 1, 1, 'crunchy mediterranean couscous wrap.png', 'admin', '2020-08-04 12:52:31', 'admin', '2020-08-04 12:52:31', 1),
(22, 'Nutrient Packed Lentil Wrap', 'Lentils are true super foods & their flavor is super earthy, so they go well with other strong, zippy flavors, like the bold red wine vinaigrette wrapped in a traditional wheat based soft & flat bread.', '219', 1, 1, 'nutrient packed lentil wrap.png', 'admin', '2020-08-04 12:53:00', 'admin', '2020-08-04 12:53:00', 1),
(23, 'Basil Garlic & Parmesan Cheese', 'Basil Garlic & Parmesan Cheese', '25', 1, 1, 'basil garlic & parmesan cheese.png', 'admin', '2020-08-04 12:53:25', 'admin', '2020-08-04 12:53:25', 1),
(24, 'Fresh Herb Vinaigrette', 'Fresh Herb Vinaigrette', '25', 1, 1, 'fresh herb vinaigrette.png', 'admin', '2020-08-04 12:53:51', 'admin', '2020-08-04 12:53:51', 1),
(25, 'Tahini Lemon Sauce', 'Tahini Lemon Sauce', '25', 1, 1, 'tahini lemon sauce.png', 'admin', '2020-08-04 12:54:17', 'admin', '2020-08-04 12:54:17', 1),
(26, 'Classic Lime Olive & Honey', 'Classic Lime Olive & Honey\r\n', '25', 1, 1, 'classic lime olive & honey.png', 'admin', '2020-08-04 12:54:40', 'admin', '2020-08-04 12:54:40', 1),
(27, 'Lentil Salad Dressing', 'Lentil Salad Dressing', '25', 1, 1, 'lentil salad dressing.png', 'admin', '2020-08-04 12:55:49', 'admin', '2020-08-04 12:55:49', 1),
(28, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.\r\n\r\n', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 19:38:32', 'admin', '2020-08-04 19:38:32', 1),
(29, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.\r\n\r\n', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 19:50:17', 'admin', '2020-08-04 19:50:17', 1),
(30, 'Vegan Mediterranean Crunchy Couscous salad', 'This Mediterranean couscous salad strikes the perfect balance of phytonutrients and fiber-rich vegetables plus protein that makes this salad light yet satisfying.', '219', 1, 1, 'vegan mediterranean crunchy couscous salad.jpg', 'admin', '2020-08-04 19:51:01', 'admin', '2020-08-04 19:51:01', 1),
(31, 'Vegan Mediterranean Crunchy Couscous salad', 'This Mediterranean couscous salad strikes the perfect balance of phytonutrients and fiber-rich vegetables plus protein that makes this salad light yet satisfying.', '219', 1, 0, 'vegan mediterranean crunchy couscous salad.jpg', 'admin', '2020-08-04 19:53:04', 'admin', '2020-08-04 19:53:04', 1),
(32, 'Nutrient Packed Lentil Salad ', 'This vegetarian lentil salad comes together complete with a flavorful honey mustard vinaigrette, itâ€™s perfect for meal prep lunches or as a side dish. Vegetarian and gluten-free', '219', 1, 0, 'nutrient packed lentil salad.jpg', 'admin', '2020-08-04 19:53:56', 'admin', '2020-08-04 19:53:56', 1),
(33, 'Fresh Fruit With Coconut Dressing', 'Light, Healthy, Juicy, fresh, seasonal & tropical fruit varieties like Melons, Water-melon, Berries, Orange, Grapes & Pineapple, topped with fresh Coconut milk or Coconut Cream dressing.\r\n\r\n', '219', 1, 0, 'fresh fruit with coconut.png', 'admin', '2020-08-04 19:54:39', 'admin', '2020-08-04 19:54:39', 1),
(34, 'Crunchy Mediterranean Couscous Wrap', 'Fiber rich vegetables plus protein that makes this salad stuffing addition as a great surprise into every bite through those soft wheat-based breads, and the crunch of fresh veggies.', '219', 1, 0, 'crunchy mediterranean couscous wrap.png', 'admin', '2020-08-04 19:55:20', 'admin', '2020-08-04 19:55:20', 1),
(35, 'Nutrient Packed Lentil Wrap', 'Lentils are true super foods & their flavor is super earthy, so they go well with other strong, zippy flavors, like the bold red wine vinaigrette wrapped in a traditional wheat based soft & flat bread.', '219', 1, 0, 'nutrient packed lentil wrap.png', 'admin', '2020-08-04 19:56:02', 'admin', '2020-08-04 19:56:02', 1),
(36, 'Basil Garlic & Parmesan Cheese', 'Basil Garlic & Parmesan Cheese', '219', 1, 1, 'basil garlic & parmesan cheese.png', 'admin', '2020-08-04 19:56:27', 'admin', '2020-08-04 19:56:27', 1),
(37, 'Fresh Herb Vinaigrette', 'Fresh Herb Vinaigrette', '25', 1, 1, 'fresh herb vinaigrette.png', 'admin', '2020-08-04 19:56:56', 'admin', '2020-08-04 19:56:56', 1),
(38, 'Tahini Lemon Sauce', 'Tahini Lemon Sauce', '25', 1, 1, 'tahini lemon sauce.png', 'admin', '2020-08-04 19:57:27', 'admin', '2020-08-04 19:57:27', 1),
(39, 'Classic Lime Olive & Honey', 'Classic Lime Olive & Honey', '25', 1, 1, 'classic lime olive & honey.png', 'admin', '2020-08-04 19:58:01', 'admin', '2020-08-04 19:58:01', 1),
(40, 'Lentil Salad Dressing', 'Lentil Salad Dressing', '25', 1, 1, 'lentil salad dressing.png', 'admin', '2020-08-04 19:58:35', 'admin', '2020-08-04 19:58:35', 1),
(41, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 20:07:57', 'admin', '2020-08-04 20:07:57', 1),
(42, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 20:09:06', 'admin', '2020-08-04 20:09:06', 1),
(43, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 20:11:05', 'admin', '2020-08-04 20:11:05', 1),
(44, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 20:13:22', 'admin', '2020-08-04 20:13:22', 1),
(45, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.', '219', 1, 0, 'everyday leafy green salad.png', 'admin', '2020-08-04 20:17:01', 'admin', '2020-08-04 20:17:01', 1),
(46, 'Everyday Leafy Green Salad', 'Spinach, kale, seasonal lettuces & surprise tinge from various micro- greens, a promise of goodness, health & quality.', '219', 1, 1, 'everyday leafy green salad.png', 'admin', '2020-08-04 20:20:05', 'admin', '2020-08-04 20:20:05', 1),
(47, 'Basil Garlic & Parmesan Cheese', 'Basil Garlic & Parmesan Cheese', '25', 1, 0, 'basil garlic & parmesan cheese.jpg', 'admin', '2020-08-04 20:24:30', 'admin', '2020-08-04 20:24:30', 1),
(48, 'Fresh', 'Fresh Herb Vinaigrette', '25', 1, 0, 'fresh herb vinaigrette.png', 'admin', '2020-08-04 20:26:29', 'admin', '2020-08-06 07:40:36', 1),
(49, 'Tahini', 'Tahini Lemon Sauce', '25', 1, 0, 'tahini lemon sauce.png', 'admin', '2020-08-04 20:30:14', 'admin', '2020-08-06 07:40:59', 1),
(50, 'Classic Lime Olive & Honey', 'Classic Lime Olive & Honey', '25', 1, 0, 'classic lime olive & honey.png', 'admin', '2020-08-04 20:32:24', 'admin', '2020-08-04 20:32:24', 1),
(51, 'Lentil Salad Dressing', 'Lentil Salad Dressing', '25', 1, 0, 'lentil salad dressing.png', 'admin', '2020-08-04 20:34:19', 'admin', '2020-08-04 20:34:19', 1);

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
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
