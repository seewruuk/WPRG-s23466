-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 23, 2023 at 09:38 PM
-- Wersja serwera: 10.11.3-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fesru`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(4, 5, 2, 1),
(5, 5, 4, 3),
(6, 5, 6, 2),
(8, 12, 15, 2),
(9, 6, 5, 3),
(12, 6, 6, 1),
(14, 4, 15, 1),
(16, 4, 7, 1),
(17, 4, 5, 1),
(18, 1, 5, 1),
(20, 2, 5, 1),
(21, 2, 3, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Elektronika'),
(2, 'Moda'),
(3, 'Dom i ogrod'),
(4, 'Ksiazki'),
(5, 'Sport');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `comment`, `rating`) VALUES
(2, 5, 2, 'Smartfon rewelacyjny!', 4),
(3, 4, 3, 'Sukienka piekna, ale rozmiar mnie nie pasuje.', 3),
(4, 5, 6, 'Pilka nozna super jakosc.', 5),
(5, 5, 4, 'test', NULL),
(6, 6, 13, 'bardzo fajny zestaw garnkÃ³w ', NULL),
(7, 1, 13, 'asd', 5),
(8, 2, 13, 'aaaaaaaaaaaaaaaaaaaa', 5),
(9, 2, 3, 'test 2222', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lastviewed`
--

CREATE TABLE `lastviewed` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `lastviewed`
--

INSERT INTO `lastviewed` (`id`, `product_name`) VALUES
(1, 'Smartfon Samsung Galaxy S21'),
(2, 'Sukienka letnia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(2, 1, 3, 1),
(3, 2, 2, 1),
(4, 2, 4, 3),
(5, 2, 6, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `status`) VALUES
(1, 4, 299.98, 'zrealizowano'),
(2, 5, 589.94, 'zlozono'),
(4, 3, 399.98, 'zrealizowano');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sellerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `image`, `price`, `quantity`, `description`, `sellerId`) VALUES
(2, 1, 'Smartfon Samsung Galaxy S69', 'galaxy.png', 12.00, 10, 'kozacki opis moro', 3),
(3, 2, 'Sukienka letnia', 'sukienka.png', 99.99, 20, 'Pieknasukienka letnia w modnym wzorze.', 4),
(4, 3, 'Odkurzacz bezworkowy', 'odkurzacz.png', 299.99, 15, 'Skuteczny odkurzacz bezworkowy do sprzatania domu.', 12),
(5, 4, 'Ksiazka \"Harry Potter i Kamien Filozoficzny\"', 'harrypotter.png', 39.99, 30, 'Pierwsza czesc serii ksiazek o Harrym Potterze.', 10),
(6, 5, 'Pilka nozna', 'pilka.png', 49.99, 25, 'Wytrzymala pilka nozna do treningu.', 11),
(7, 1, 'Smartwatch Apple Watch Series 6', 'apple-watch-series-6.png', 1299.99, 15, 'Zaawansowany smartwatch z wieloma funkcjami.', 12),
(8, 1, 'Aparat fotograficzny Canon', 'canon-eos-80d.png', 2499.99, 10, 'Profesjonalny aparat fotograficzny dla wymagajacych.', 4),
(9, 1, 'Sluchawki bezprzewodowe Sony', 'sony-wh-1000xm4.png', 799.99, 25, 'Wysokiej jakosci słuchawki bezprzewodowe z redukcja halasu.', 8),
(10, 2, 'Kurtka zimowa Meska', 'kurtka-zimowa-meska.png', 349.99, 30, 'Ciepla i stylowa kurtka zimowa dla mezczyzn.', 4),
(11, 2, 'Sukienka wieczorowa Damska', 'sukienka-wieczorowa-damska.png', 299.99, 20, 'Elegancka sukienka wieczorowa dla kobiet.', 9),
(12, 3, 'Komplet poscieli z bawelny', 'komplet-poscieli-bawelna.png', 149.99, 35, 'Wygodny i przyjemny w dotyku komplet poscieli.', 10),
(13, 3, 'Zestaw garnkow indukcyjnych', 'zestaw-garnkow-indukcyjnych.png', 399.99, 12, 'Wytrzymale i funkcjonalne garnki indukcyjne.', 11),
(14, 4, 'Ksiazka Wiedzmin - Andrzej Sapkowski', 'ksiazka-wiedzmin.png', 49.99, 50, 'Najbardziej znana powiesc fantasy polskiego pisarza.', 12),
(15, 4, 'Ksiazka Harry Potter i Kamien Filozoficzny - J.K. Rowling', 'ksiazka-harry-potter.png', 39.99, 40, 'Pierwsza czesc serii o przygodach Harryego Pottera.', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'unnamed', '', '', 'unnamed'),
(2, 'admin', 'admin321', 'admin@example.com', 'administrator'),
(3, 'seller1', 'ab', 'b', 'sprzedawca'),
(4, 'seller2', 'seller456', 'seller2@example.com', 'sprzedawca'),
(5, 'user1', 'user123', 'user1@example.com', 'uzytkownik'),
(6, 'user2', 'user456', 'user2@example.com', 'uzytkownik'),
(7, 'seller3', 'seller123', 'example3@gmail.com', 'sprzedawca'),
(8, 'seller4', 'seller123', 'example4@gmail.com', 'sprzedawca'),
(9, 'seller5', 'seller123', 'example5@gmail.com', 'sprzedawca'),
(10, 'seller6', 'seller123', 'example6@gmail.com', 'sprzedawca'),
(11, 'seller7', 'seller123', 'example7@gmail.com', 'sprzedawca'),
(12, 'seller8', 'seller123', 'example8@gmail.com', 'sprzedawca');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `lastviewed`
--
ALTER TABLE `lastviewed`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sellerId` (`sellerId`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lastviewed`
--
ALTER TABLE `lastviewed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`sellerId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
