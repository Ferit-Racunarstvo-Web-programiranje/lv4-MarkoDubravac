-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 08:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruits_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Apple', 1.49, 'https://i.ibb.co/qMRGFpw/Apples.jpg', 'Apple is a crisp and refreshing fruit, known for its sweet flavor and a wide variety of cultivars.'),
(2, 'Banana', 1.19, 'https://i.ibb.co/H2zZBRb/Bananas.jpg', 'Banana is a tropical fruit characterized by its elongated shape, vibrant yellow color when ripe, and a creamy, mildly sweet taste.'),
(3, 'Blueberries', 3.99, 'https://i.ibb.co/wsFPPw5/Blueberries.jpg', 'Blueberries are small, round fruits packed with antioxidants, featuring a deep blue-purple hue, and known for their sweet-tart flavor and numerous health benefits.'),
(4, 'Cherries', 3.49, 'https://i.ibb.co/pQTrDz6/Cherries.jpg', 'Cherries are small, juicy fruits with a vibrant red color, delightful sweetness, and a hint of tartness, often enjoyed fresh or as a flavorful addition to various culinary creations.'),
(5, 'Grapes', 2.49, 'https://i.ibb.co/S6w8BvG/Grapes.jpg', 'Grapes are small, succulent fruits that grow in clusters, offering a diverse range of colors and flavors, from sweet and juicy to tangy and refreshing, making them a popular choice for snacking and winemaking.'),
(6, 'Kiwi', 0.29, 'https://i.ibb.co/pvSPF0d/Kiwi.jpg', 'Kiwi is a small, oval-shaped fruit with a fuzzy brown exterior and bright green flesh, known for its unique sweet-tart flavor, high vitamin C content, and abundance of small black seeds.'),
(7, 'Lemon', 0.99, 'https://i.ibb.co/GcLhnTF/Lemons.jpg', 'Lemon is a citrus fruit with a bright yellow color, tangy flavor, and refreshing acidity, often used to add zesty freshness to culinary dishes, beverages, and desserts.'),
(8, 'Mango', 2.49, 'https://i.ibb.co/Dk8qqgv/Mangoes.jpg', 'Mango is a tropical fruit with a vibrant orange-yellow flesh, a rich, sweet taste, and a distinct aroma, making it a tropical delight and a popular ingredient in various cuisines and desserts worldwide.'),
(9, 'Orange', 1.79, 'https://i.ibb.co/WyRV4BC/Oranges.jpg', 'Orange is a citrus fruit known for its round shape, bright orange color, and refreshing, citrusy flavor, packed with vitamin C and enjoyed both as a juicy snack and as a versatile ingredient in culinary recipes.'),
(10, 'Peach', 2.49, 'https://i.ibb.co/CBg4xMy/Peaches.jpg', 'Peach is a juicy and fragrant fruit with a velvety skin, soft flesh, and a delicate balance of sweetness and acidity, making it a delightful summer treat and a popular addition to desserts and preserves.'),
(11, 'Pear', 1.79, 'https://i.ibb.co/CpdYKQ6/Pears.jpg', 'Pear is a sweet and juicy fruit with a distinctive bell-like shape, smooth skin, and a range of varieties, known for its mild flavor, crisp texture, and versatility in both fresh consumption and culinary preparations.'),
(12, 'Pineapple', 1.99, 'https://i.ibb.co/4NDdXsq/Pineapple.jpg', 'Pineapple is a tropical fruit characterized by its spiky, rough exterior, juicy golden flesh, and a perfect balance of sweetness and tanginess, making it a refreshing and tropical delight enjoyed fresh or incorporated into various dishes and beverages.'),
(13, 'Plum', 1.99, 'https://i.ibb.co/89zmM6Q/Plums.jpg', 'Plum is a succulent fruit with a smooth skin, juicy flesh, and a delightful combination of sweetness and tartness, available in a variety of colors, and commonly enjoyed fresh or used in jams, pies, and other culinary creations.'),
(14, 'Raspberries', 3.99, 'https://i.ibb.co/0mdgxjD/Raspberries.jpg', 'Raspberries are small, delicate fruits with a vibrant red color, sweet-tart flavor, and a pleasantly soft texture, cherished for their juiciness and versatility in desserts, jams, and as a refreshing snack.'),
(15, 'Strawberries', 3.49, 'https://i.ibb.co/bv5155C/Strawberries.jpg', 'Strawberries are luscious, heart-shaped fruits with a bright red color, sweet fragrance, and a perfect balance of sweetness and tanginess, making them a beloved summertime treat and a versatile ingredient in desserts, salads, and beverages.'),
(16, 'Watermelon', 0.79, 'https://i.ibb.co/8xyjT7y/Watermelon.jpg', 'Watermelon is a large, juicy fruit with a refreshing, sweet taste, vibrant pink or red flesh, and a high water content, making it a quintessential summer fruit enjoyed for its thirst-quenching properties and crisp texture.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
