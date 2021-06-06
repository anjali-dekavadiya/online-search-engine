-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 01:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `site_title` varchar(200) NOT NULL,
  `site_link` varchar(400) NOT NULL,
  `site_key` varchar(200) NOT NULL,
  `site_des` text NOT NULL,
  `site_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `site_title`, `site_link`, `site_key`, `site_des`, `site_img`) VALUES
(5, 'Everyday Cooking Recipes-Allrecipes', 'https://www.allrecipes.com/recipes/1642/everyday-cooking/', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Everyday Cooking Recipes. Speedy weeknight dinners, 5-ingredient dishes, quick and easy meals, plus kid-pleasing snacks and desserts.', '8aac85b2-blog_foodpresentationtipsfromtopchefs.jpg'),
(6, 'Cooking - Wikipedia', 'https://en.wikipedia.org/wiki/Cooking', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Cooking or cookery is the art, science and craft of using heat to prepare food for consumption. Cooking techniques and ingredients vary widely across the world, ...', '9mmaqfa8_salad_625x300_29_July_20.webp'),
(7, 'Cooking at Home - HelpGuide.org', 'https://www.helpguide.org/articles/healthy-eating/cooking-at-home.htm', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Cooking at Home. We all love convenience food, but one of the simplest ways to improve your health is by preparing more home-cooked meals. Here\'s how to ...', '2957789-halloween-menu-hero-adults-2.jpg'),
(8, '52 Life-Changing Kitchen Tricks For Easier Cooking | Eat This ...', 'https://www.eatthis.com/kitchen-hacks-cooking-tips/', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Oct 8, 2020 — 52 Cooking Hacks That Will Change Your Life. The smart cooking tips and tricks you can\'t believe you\'ve lived without.', '1474395998-ghk-0216-comfortfoodcover-meatballs.jpg'),
(9, 'Cooking for...recipes - BBC Good Food', 'https://www.bbcgoodfood.com/recipes/category/all-cooking-for', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Whether you need a wholesome dinner for one or a quick meal for a crowd, we have the perfect recipes for you. Cater for every diet and palate with our favourite ...', 'caprese-sandwich-1.jpg'),
(10, 'Amazing Indian Food Cooking Videos | Best Food India ...', 'https://www.youtube.com/watch?v=Wih3skFj_OE', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Indian food is awesome, if you are looking for some amazing cooking skills then see this video to learn more ...\r\nNov 27, 2016 · Uploaded by Crazy For Indian Food', 'citrus.jpg'),
(11, 'COOK | Frozen Ready Meals, Delivered Meals, Prepared ...', 'https://www.cookfood.net/', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Remarkable frozen ready meals, prepared by our own chefs and delivered to your door via our nationwide delivery service. Or discover your local COOK shop!\r\n‎Home Delivery · ‎Main Meals · ‎About COOK · ‎COOK Catering', 'cropped-GettyImages-643764514.jpg'),
(12, 'COOK | meaning in the Cambridge English Dictionary', 'https://dictionary.cambridge.org/dictionary/english/cook', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', '6 days ago — When you cook food, you prepare it to be eaten by heating it in a particular way, such as baking or boiling, and when food cooks, it is heated ...', 'maxresdefault.jpg'),
(13, 'Cooks in Rajkot | Find, Hire Best Cook Agencies in Rajkot ...', 'https://www.quikr.com/services/cook-in-rajkot-evaluate', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'TWINKLE HOUSE KEEPING AND SECURITY SERVICE. Cook, Baby Sitter, Home Nurse, Driver, Maid. Food Type: Vegetarian, Non-Vegetarian, Vegetarian and ...', 'images (1).jpg'),
(14, 'Food - Wikipedia', 'https://en.wikipedia.org/wiki/Food', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Food is any substance consumed to provide nutritional support for an organism. Food is usually of plant, animal or fungal in origin, and contains essential ...', 'images.jpg'),
(15, 'Top 10 List, Top 10 Foods, Top 10 Recipes - NDTV Food', 'https://food.ndtv.com/lists', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Top 10 List, Top 10 Foods, Top 10 Recipes, Best of the Best Recipes at NDTVCooks.com – A compilation of 10 best lists across recipes, restaurants and food ...', 'iStock-1131794876.t5d482e40.m800.xtDADj9SvTVFjzuNeGuNUUGY4tm5d6UGU5tkKM0s3iPk-620x342.jpg'),
(16, 'Easy Food & Drink Recipes', 'https://www.kindmeal.my/recipes.htm?gclid=Cj0KCQjwit_8BRCoARIsAIx3Rj5mp6UHI0dQ0YjvrfyUSsdW6IfGlQqrOXdNhU-J2BKOQKCwuv0n0zEaAl2nEALw_wcB', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Healthy meat-free recipes for meals & snacks. Share your creations too! Instant Dining. Free Coupons. Save Animal Lives. Healthy Meals. Discover Tasty Food.\r\n‎Hot Picks · ‎Amazing Deals · ‎Mobile Apps · ‎Photo Moments\r\nDeal: Up to 70% off Restaurant & Cafes', 'maxresdefault.jpg'),
(17, 'Baking - Wikipedia', 'https://en.wikipedia.org/wiki/Baking', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Baking is a method of preparing food that uses dry heat, typically in an oven, but can also be done in hot ashes, or on hot stones. The most common baked item ...', 'noodles-625_625x350_41466064269.webp'),
(18, 'JoyofBaking.com - Baking & Dessert *Video Recipes*', 'https://www.joyofbaking.com/', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'A wonderful recipe collection of cakes, cookes, pies, tarts, muffins, scones, shortbreads and other baked goods with over 400 demonstration videos.', 'small2_0001_Velvet-Taco.jpg'),
(19, '25 Super Fun Baking Recipes - Love and Lemons', 'https://www.loveandlemons.com/baking-recipes/', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'These easy baking recipes will make any meal more fun. Find recipes for sweet and savory baked goods like cookies, breads, brownies, cakes, and more!', 'sweets.jpg'),
(20, 'Baking Recipes & Ideas | Easy Cake & Bread Recipes ...', 'https://www.bakingmad.com/', 'cooking,food,cook,dinner,breakfast,lunch,love food,baking', 'Find classic baking recipes & ideas or be inspired to try something new. Sign up for the chance to become baker of the month! Bake something delicious!', 'what-is-a-plant-based-diet-beginners-guide-food-list-benefits-722x406.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
