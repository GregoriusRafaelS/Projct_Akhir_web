-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 04:55 AM
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
-- Database: `western_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `username`, `password`) VALUES
(1, '11', '$2y$10$EYAkXZv2QgV3mPaikvjCvue873ubFjhXG2Pm47QwIJ0yrMpxulVdu'),
(2, 'admin', '$2y$10$D22c0sk/fh1UQAAycAG3QO8nm2iL2HCwaS.308dqofZICE7LFY8n.'),
(3, 'admin1', '$2y$10$W1vSkV.5FaTbF.oTiSumm.5mJvkBvbBTzrTdLGtcsvNiMtU8mRK9q'),
(4, 'rafa', '$2y$10$Z4Z0X9RVkEIAdrs1z77CIejR2guFZUD9lWRdaHd2zY8EZBB/8.Q9W'),
(5, 'rara', '$2y$10$s5qAfNSDaPEc8EjGD4sA7eRdswGRBT1rPh3X9ABQrnRSCftKmn0Ee');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id_food` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(6) NOT NULL,
  `rating` float NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id_food`, `nama`, `keterangan`, `harga`, `rating`, `gambar`, `category`) VALUES
(1, 'Burger', 'A hamburger  is a food consisting of fillings a patty of ground meat, typically beef—placed inside a sliced bun or bread roll. Hamburgers are often served with cheese, lettuce, tomato, onion, pickles, bacon, or chilis; condiments such as ketchup, mustard, mayonnaise, relish, or a \'special sauce\'', 33000, 4.5, 'burger.jpg', 'appetizer'),
(2, 'Spaghetti', 'Spaghetti (Italian: [spaˈɡetti]) is a long, thin, solid, cylindrical pasta.[1] It is a staple food of traditional Italian cuisine. Like other pasta, spaghetti is made of milled wheat and water and sometimes enriched with vitamins and minerals. Italian spaghetti is typically made from durum wheat semolina.[2] Usually the pasta is white because refined flour is used, but whole wheat flour may be added. Spaghettoni is a thicker form of spaghetti, while capellini is a very thin spaghetti.', 22000, 4.7, 'spaghetti.jpg', 'main course'),
(3, 'Pizza', 'Pizza (Italian: [ˈpittsa], Neapolitan: [ˈpittsə]) is a dish of Italian origin consisting of a usually round, flat base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients (such as various types of sausage, anchovies, mushrooms, onions, olives, vegetables, meat, ham, etc.), which is then baked at a high temperature, traditionally in a wood-fired oven.[1] A small pizza is sometimes called a pizzetta. A person who makes pizza is known as a pizzaiolo.', 120000, 4.8, 'pizza.jpg', 'main course'),
(4, 'Pancake', 'A pancake (or hot-cake, griddlecake, or flapjack) is a flat cake, often thin and round, prepared from a starch-based batter that may contain eggs, milk and butter and cooked on a hot surface such as a griddle or frying pan, often frying with oil or butter. It is a type of batter bread. Archaeological evidence suggests that pancakes were probably eaten in prehistoric societies.', 23000, 4.4, 'pancake.jpg', 'dessert'),
(5, 'Mushroom Risotto', 'Mushroom risotto is a creamy Italian rice with chicken broth and your favorite mushrooms. You can make it on the stovetop with a little patience and meditative stirring. You can\'t make risotto with any old rice. The high starch content of risotto rices creates that creamy texture when cooked.', 43000, 4.5, 'mushroom-risotto.jpg', 'main course'),
(6, 'Chicken Cordon Bleu', 'A cordon bleu or schnitzel cordon bleu is a dish of meat wrapped around cheese (or with cheese filling), then breaded and pan-fried or deep-fried. Veal or pork cordon bleu is made of veal or pork pounded thin and wrapped around a slice of ham and a slice of cheese, breaded, and then pan-fried or baked.[1] For chicken cordon bleu, chicken breast is used instead of veal.[2] Ham cordon bleu is ham stuffed with mushrooms and cheese.', 74000, 4.6, 'chicken-cordon-bleu.jpg', 'main course'),
(7, 'Sandwich', 'A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread, or more generally any dish wherein bread serves as a container or wrapper for another food type.[1][2][3] The sandwich began as a portable, convenient finger food in the Western world, though over time it has become prevalent worldwide.', 29000, 4.8, 'sandwich.jpg', 'appetizer'),
(8, 'Ratatouille', 'Ratatouille is a bright and chunky summer vegetable stew, rich with olive oil and fragrant with garlic and herbs. Hailing from Provence, a region in the south of France near the Mediterranean Sea, ratatouille is a bright and chunky summer vegetable stew made with eggplant, zucchini, bell peppers, and tomatoes.', 55000, 4.3, 'ratatouille.jpg', 'appetizer'),
(9, 'Steak', 'A steak is a thick cut of meat generally sliced across the muscle fibers, sometimes including a bone. It is normally grilled or fried. Steak can be diced, cooked in sauce, such as in steak and kidney pie, or minced and formed into patties, such as hamburgers.', 43000, 4.9, 'steak.jpg', 'main course'),
(10, 'French Fries', 'French fries (North American English), chips (British English),[1] finger chips (Indian English),[2] french-fried potatoes, or simply fries, are batonnet or allumette-cut[3] deep-fried potatoes of disputed origin from Belgium and France. They are prepared by cutting potatoes into even strips, drying them, and frying them, usually in a deep fryer. Pre-cut, blanched, and frozen russet potatoes are widely used, and sometimes baked in a regular or convection oven; air fryers are small convection ovens marketed for frying potatoes.', 17000, 4.6, 'french-fries.jpg', 'main course'),
(22, 'hehehehehehe', 'huhuhuhuhu', 50000, 4.4, '636a90f680c51.jpg', 'Choose...'),
(23, 'makanan aneh', 'lorem ga bisa ya disini', 49999, 4.4, '6387a3e29c175.jpg', 'dan lain lain'),
(25, 'jus alpokat', 'Jus alpukat adalah salah satu olahan yang banyak digemari oleh para penggemar buah yang satu ini. Selain itu, buah yang satu ini juga kerap dijadikan sebagai salad, dikonsumsi sendiri, dan masih banyak lainnya.', 20000, 4, '6388205720005.png', 'drink'),
(26, 'nasi putih', 'Nasi putih adalah sumber karbohidrat utama yang menjadi makanan pokok di banyak negara, terutama Indonesia. Dalam satu porsi nasi putih seukuran mangkok (180 gram), setidaknya terkandung 50 gram karbohidrat. Meski kadarnya tinggi, karbohidrat dalam nasi putih lebih banyak terdiri dari gula dan pati, ketimbang serat.', 5000, 4.9, '6388209a558d1.jpg', 'dan lain lain'),
(27, 'nasi merah', 'Nasi merah bisa didapatkan dari beras yang masih memiliki sekam maupun tidak.', 3000, 4.2, '638820c63f275.jpg', 'dan lain lain');

-- --------------------------------------------------------

--
-- Table structure for table `history_payment`
--

CREATE TABLE `history_payment` (
  `id_history` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_payment`
--

INSERT INTO `history_payment` (`id_history`, `id_payment`, `id_user`, `id_employee`, `id_food`, `quantity`) VALUES
(4, 1, 1, 5, 1, 1),
(5, 1, 1, 5, 2, 1),
(6, 1, 1, 5, 1, 2),
(7, 3, 1, 5, 1, 1),
(8, 9, 2, 5, 1, 2),
(9, 9, 2, 5, 2, 2),
(10, 9, 2, 5, 3, 2),
(11, 9, 2, 5, 4, 2),
(12, 9, 2, 5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_order` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_order`, `id_payment`, `id_user`, `id_food`, `quantity`) VALUES
(14, 5, 1, 10, 3),
(15, 6, 1, 3, 4),
(16, 6, 1, 4, 4),
(17, 7, 1, 1, 2),
(22, 8, 2, 1, 2),
(23, 8, 2, 2, 2),
(24, 8, 2, 3, 2),
(30, 9, 1, 1, 2),
(31, 9, 1, 2, 2),
(32, 9, 1, 3, 2),
(33, 10, 2, 1, 4),
(34, 10, 2, 2, 4),
(35, 10, 2, 7, 3),
(36, 10, 2, 8, 3),
(37, 10, 2, 9, 2),
(38, 11, 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'rafael', '$2y$10$.vBZwN31jcI5qmI9Aeqt8edV9QuS6dhrs1rS7Djh2DHimbR32JLBu'),
(2, 'rainan', '$2y$10$6sA5W/HOh5KljSxtKzWKXeCCMxEWqF.w0BxfeYUZdt.uC/mQweb5K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id_food`);

--
-- Indexes for table `history_payment`
--
ALTER TABLE `history_payment`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_food` (`id_food`),
  ADD KEY `id_employee` (`id_employee`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_food` (`id_food`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id_food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `history_payment`
--
ALTER TABLE `history_payment`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_payment`
--
ALTER TABLE `history_payment`
  ADD CONSTRAINT `history_payment_ibfk_2` FOREIGN KEY (`id_food`) REFERENCES `food` (`id_food`),
  ADD CONSTRAINT `history_payment_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `history_payment_ibfk_4` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id_employee`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`id_food`) REFERENCES `food` (`id_food`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
