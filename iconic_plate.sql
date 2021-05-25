-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 04:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iconic_plate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(200) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'Platonic Squad', 'iconicplate@gmail.com', 'AdminPanelPass2021', 'platonic.jpg', 'This application is created by Platonic Squad, if you willing to contact me, please click this link.\r\nPlatonic Squad\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloribus tempore non ut velit, nesciunt totam, perspiciatis corrupti expedita nulla aut necessitatibus eius nisi. Unde quasi, recusandae doloribus minus quisquam.', '+63-9273-39-8102', 'Web Developers'),
(2, 'Regina A.', 'reginaCute@gmail.com', 'regina123', 'LRM_EXPORT_20190613_073643.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloribus tempore non ut velit, nesciunt totam, perspiciatis corrupti expedita nulla aut necessitatibus eius nisi. Unde quasi, recusandae doloribus minus quisquam.', '+63 123-456-7890', 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(0, 0, 'xsaaSDCx', 'regina', '2021-05-24 18:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_firstname` varchar(255) NOT NULL,
  `cust_lastname` varchar(255) NOT NULL,
  `cust_middlename` varchar(255) NOT NULL,
  `cust_province` text NOT NULL,
  `cust_city` text NOT NULL,
  `cust_brgy` varchar(255) NOT NULL,
  `cust_zipcode` varchar(255) NOT NULL,
  `cust_contactNo` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_username` varchar(100) NOT NULL,
  `cust_password` varchar(30) NOT NULL,
  `cust_image` text NOT NULL,
  `cust_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_firstname`, `cust_lastname`, `cust_middlename`, `cust_province`, `cust_city`, `cust_brgy`, `cust_zipcode`, `cust_contactNo`, `cust_email`, `cust_username`, `cust_password`, `cust_image`, `cust_ip`) VALUES
(5, 'Eman', 'Balderama', 'Baynosa', 'Albay', 'Sto.domingo', 'Alimsog', '4508 ', '09273398102', 'alianreybalderama@gmail.com', 'eman ', '1234', 'Capture.PNG ', '::1'),
(6, 'Regina', 'Aurellana', 'Agnote', 'Albay', 'Polangui', 'Napo', '4506 ', '0965651221', 'reg@gmail.com', 'rejina123 ', 'reg123', 'IMG_20190513_105230.JPG ', '::1'),
(7, 'Chabbie', 'Piornato', '--', 'Albay', 'Ligao', 'Tas-tas', '21654 ', '094565832656565+', 'chabbie@gmail.com', 'chabii123 ', '123456789', 'LRM_EXPORT_20190520_161708.jpg ', '::1'),
(8, 'Chabbie', 'Piornato', 'sada', 'Albay', 'Ligao', 'Tas-tas', '21654 ', '09656512152112', 'chabbie@gmail.com', 'chabii123  ', '123chabii', 'UOP.jpg ', '::1'),
(9, 'May anne', 'reynes', 'sales', 'Albay', 'Polangui', 'gabon', '4506 ', '09656512152112', 'meh123@gmail.com', 'meh1234 ', 'meh1234', 'basic meal.jpg ', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `cust_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`) VALUES
(25, 7, 120, '573947646 ', 1, '2021-05-24', 'Pending'),
(26, 6, 50, '1096743000 ', 1, '2021-05-25', 'Complete'),
(27, 6, 200, '310411616 ', 1, '2021-05-25', 'Complete'),
(28, 6, 150, '1113966021 ', 1, '2021-05-25', 'Complete'),
(29, 6, 99, '1726627634 ', 1, '2021-05-25', 'Complete'),
(30, 6, 85, '160177024 ', 1, '2021-05-25', 'Complete'),
(31, 6, 250, '875059193 ', 1, '2021-05-25', 'Complete'),
(32, 6, 300, '715564959 ', 1, '2021-05-25', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) NOT NULL,
  `m_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `menu_title` text NOT NULL,
  `menu_img1` text NOT NULL,
  `menu_price` int(10) NOT NULL,
  `menu_keywords` text NOT NULL,
  `menu_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `m_cat_id`, `cat_id`, `date`, `menu_title`, `menu_img1`, `menu_price`, `menu_keywords`, `menu_desc`) VALUES
(8, 1, 1, '2021-05-24 08:54:10', 'Tocilog', 'tocilog.jpg', 120, 'Ftocilog', '<p class=\"MsoNormal\"><span style=\"font-size: 14.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%;\">Tender slices of fried sweetened pork belly served with garlic rice and eggs. Served with zesty atchara.</span></p>'),
(9, 1, 1, '2021-04-29 16:35:55', 'Best Plate', 'best plate.jpg', 150, 'Fbestplate', '<p class=\"MsoNormal\"><span style=\"font-size: 14.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%;\">Fried chicken drumstick, 4-pc lumpiang shanghai, pancit canton, choice of either tofu or chicken skin, sweet kamote fries, plain rice, drink, and 1-pc caramel bar.</span></p>'),
(10, 2, 1, '2021-04-29 16:36:36', 'Basic Meal', 'basic meal.jpg', 120, 'Fbasic', '<p class=\"MsoNormal\"><span style=\"font-size: 14.0pt; mso-bidi-font-size: 11.0pt; line-height: 107%;\">Quarter fried chicken, with rice, and comes with Drinks</span></p>'),
(24, 5, 0, '2021-05-24 14:52:51', 'Halo-Halo', 'Halo-Halo.jpg', 50, 'FHalo', '<p>For ultimate summer treat, enjoy our famous Halo-halo filipino dessert. A combination of shaved iced and many different layers of sweet beans, fruits and other traets then dizzled with milk.</p>'),
(25, 5, 0, '2021-05-24 16:48:28', 'Leche Plan', 'Leche Flan.jpg', 99, 'Dplan', '<p>Enjoy creamy classic creme caramel filipino version Letche Plan! A dessert that made-up of eggs and milk with a soft caramel on top.</p>'),
(26, 5, 0, '2021-05-24 15:05:32', 'Mais Con Yelo Solo', 'Mais Con Yelo Solo.jpg', 110, 'Dmais', '<p>For a sweet and refreshing snack food, try our Iconic Mais Con Yelo. A traditional dessert of crushed ice layered with corn kernels and sweetened milk.</p>'),
(27, 4, 0, '2021-05-24 15:14:34', 'Buko Pandan Juice', 'Buko Pandan.jpg', 95, 'dpandan', '<p>Refreshing and delicious tropical drink, try the iconic Buko Pandan Juice. A creamy coconut juice with pandan gelatin and shredded young coconut.</p>'),
(28, 3, 0, '2021-05-24 16:47:11', 'Crispy Pata', 'crispy pata.jpg', 250, 'icrispypata', '<p>It is a Filipino dish&nbsp; made from pork leg, usually from the hock to the trotters. The main target is have a crispy skin. It is best with accompanying dip -- a mix of vinegar, soy sauce, chopped onions, ground pepper and chilli labuyo.</p>'),
(29, 3, 0, '2021-05-24 16:48:47', 'Lechon Kawali', 'lechon kawali.jpg', 300, 'ilechonkawali', '<p>Lechon kawali, crispy pan-fried pork belly, is a tasty Filipino dish with flavors of garlic and bay leaves.&nbsp;</p>'),
(30, 2, 0, '2021-05-24 15:33:07', 'Tapsilog', 'tapsilog.jpg', 85, 'ctapsilog', '<p>A plate of tapsilog is a delightful study in taste and texture. You get the rich buttery silkiness of the egg, the herbed, aromatic grains of the fried rice and the savory, lip-smacking meatiness of the tapa in one delicious dish.</p>'),
(31, 3, 0, '2021-05-24 15:36:53', 'Nilagang Bulalo', 'nilagang bulalo.jpg', 250, 'ibulalo', '<p>A type of Filipino beef soup wherein chunks of beef are boiled with whole peppercorn and onion until tender. Vegetables such as cabbage, bok choy, long green beans (also known as pechay Baguio), potato and corn.</p>'),
(35, 2, 0, '2021-05-24 16:04:07', 'Fiesta Plate', 'fiesta plate.jpg', 200, 'cfiesta', '<p>Iconic Plate quarter fried chicken, fried or fresh lumpia with caramel bar, served refreshing drink.</p>'),
(36, 3, 0, '2021-05-24 16:08:58', 'Sizzling Tofu', 'sizzling tofu.jpg', 150, 'isizzling', '<p>Sizzling tofu is a delicious way to enjoy the bold flavors of sisig in a vegetarian way. Made with crisp-fried tofu, chili peppers, mayonnaise and onions.</p>'),
(38, 2, 0, '2021-05-24 16:22:58', 'Iconic Platter', 'iconics platter.jpg', 200, 'iplatter', '<p>Mouthwatering fried chicken served steamed plain rice, refreshing drink and caramel bar</p>'),
(39, 4, 0, '2021-05-24 16:24:54', 'Pepsi Can', 'Pepsi Can.jpg', 50, 'dpepsi', '<p>Refreshing carbonated drink that will quench your thirst</p>');

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

CREATE TABLE `menu_categories` (
  `m_cat_id` int(10) NOT NULL,
  `m_cat_title` text NOT NULL,
  `m_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`m_cat_id`, `m_cat_title`, `m_cat_desc`) VALUES
(1, 'All-Day Breakfast', 'All your favorite Breakfast, you can find here!Just choose your favorite and Add it to your cart.'),
(2, '        Combo Meals        ', 'Taste the best combo meal in town, choose your favorite and it Add to your Cart'),
(3, ' Iconic Favorites Ulam ', 'Savour on Our Iconic Favorite Dishes. You can find your everyday ulam here in a affordably prices. Just add to cart and Check it out.'),
(4, '  Drinks and Beverages  ', 'Refreshing drinks that will quench your thirst and will freshen your soul, choose your favorite and Add to your Cart'),
(5, '  Dessert  ', 'Experience sweet embrace and deliciousness jumping into your mouth!');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mess_id` int(10) NOT NULL,
  `mess_email` varchar(100) NOT NULL,
  `mess_name` varchar(100) NOT NULL,
  `mess_subj` text NOT NULL,
  `mess_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mess_id`, `mess_email`, `mess_name`, `mess_subj`, `mess_about`) VALUES
(1, 'reginasalveaurellana@yahoo.com', 'Regina', 'test message', 'this is just a twestA'),
(2, 'Wynmarcobo@yahoo.com.ph', 'Regina', 'Message', 'Very good service. I love the food'),
(3, 'reginasalveaurellana@yahoo.com', 'Regina', 'test message', 'JGDSIUAS\r\nDCKSJDCDHDSEPIKKJFCDSFPJK \r\nLCXJSOZJDC\r\nKDSNCSHDFCJSKDF V ZSHHFVDOUJSZ DOUFE VHOSERHG SERTHF OEISHGHFOUSW GTFUGWEUF UT UROTGG ESOUH IESF HEIIIER ISR'),
(4, 'reginasalveaurellana@yahoo.com', 'Regina', 'test message', 'JGDSIUAS\r\nDCKSJDCDHDSEPIKKJFCDSFPJK \r\nLCXJSOZJDC\r\nKDSNCSHDFCJSKDF V ZSHHFVDOUJSZ DOUFE VHOSERHG SERTHF OEISHGHFOUSW GTFUGWEUF UT UROTGG ESOUH IESF HEIIIER ISR'),
(5, 'chabii@gmail.com', 'Chabi piornato', 'Message', 'thank you for the service.');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` text NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(1, 1568692630, '30 ', 'COD- Cash On Delivery', 0, 34232, '5/22/21'),
(3, 254458, '50', 'COD- Cash On Delivery', 0, 0, '5/24/21'),
(18, 0, '', 'COD- Cash On Delivery', 0, 0, '5/24/21'),
(19, 0, '300', 'COD- Cash On Delivery', 0, 0, '5/24/21');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `menu_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `cust_id`, `invoice_no`, `menu_id`, `qty`, `size`, `order_status`) VALUES
(25, 7, 573947646, '10', 1, '', 'Pending'),
(26, 6, 1096743000, '39', 1, '', 'Complete'),
(27, 6, 310411616, '38', 1, '', 'Complete'),
(28, 6, 1113966021, '36', 1, '', 'Complete'),
(29, 6, 1726627634, '25', 1, '', 'Complete'),
(30, 6, 160177024, '30', 1, '', 'Complete'),
(31, 6, 875059193, '28', 1, '', 'Complete'),
(32, 6, 715564959, '29', 1, '', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(6, 'slide_5', 'pexels-artem-beliaikin-1051747.jpg'),
(7, 'slide_6', 'slide-3.jpg'),
(8, 'slide_7', 'slide-4.jpg'),
(9, 'slide_9', 'slide-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'hi', 'regina', '2021-05-24 18:26:47'),
(2, 0, 'hi', 'regina', '2021-05-24 18:26:48'),
(3, 2, 'hello', 'admin', '2021-05-24 18:27:26'),
(4, 2, 'jyfuikgyuh', 'gsdeg', '2021-05-24 21:34:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`m_cat_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `m_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mess_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
