-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 05:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created_at`) VALUES
(1, 'Post One', '            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, facilis, quasi sapiente fugiat architecto laudantium minima quod, perspiciatis ducimus vitae reprehenderit eos itaque mollitia! Obcaecati nisi, est quibusdam magnam deserunt mag', 'Isaiah Daniel', '2020-08-12 11:50:50'),
(2, 'This is Post Two', '            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, facilis, quasi sapiente fugiat architecto laudantium minima quod, perspiciatis ducimus vitae reprehenderit eos itaque mollitia! Obcaecati nisi, est quibusdam magnam deserunt mag', 'Brad Traversy', '2020-08-12 11:51:42'),
(3, 'This is Post Three', '                    This is Post 3                ', 'John Doe', '2020-08-28 11:51:46'),
(4, 'My PHP course is Out', '            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, facilis, quasi sapiente fugiat architecto laudantium minima quod, perspiciatis ducimus vitae reprehenderit eos itaque mollitia! Obcaecati nisi, est quibusdam magnam deserunt mag', 'Edwin Diaz', '2020-08-13 00:20:30'),
(6, 'Javascript is freking everyWhere', 'Javascript the most powerfull language Today', 'Mattew Smith', '2020-08-13 00:22:03'),
(9, 'The Big Three - React, Angular, Vue', '                    The Big Three - React, Angular, Vue                ', 'Mosh Hemedani', '2020-08-13 01:00:09'),
(13, 'Corona Virus Pandemic ', '            \r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, facilis, quasi sapiente fugiat architecto laudantium minima quod, perspiciatis ducimus vitae reprehenderit eos itaque mollitia! Obcaecati nisi, est quibusdam magnam deserunt m', 'Cynthia Daniels', '2020-08-13 01:04:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
