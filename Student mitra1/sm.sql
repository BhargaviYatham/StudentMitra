-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 05:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`) VALUES
(1, 7, 2, 'cute', '2023-02-11 19:40:58'),
(2, 4, 2, 'special song', '2023-02-11 19:41:35'),
(4, 7, 1, 'achaa', '2023-02-11 19:42:54'),
(5, 5, 1, 'nice song', '2023-02-11 19:47:40'),
(9, 2, 1, 'i love this song', '2023-02-12 11:48:33'),
(10, 3, 2, 'i love shinchan', '2023-02-12 14:35:25'),
(11, 1, 2, 'romantic song', '2023-02-12 16:18:48'),
(14, 4, 1, 'loved it', '2023-02-13 09:33:20'),
(17, 13, 1, 'cute', '2023-02-14 18:32:31'),
(18, 7, 1, 'shinchan', '2023-02-15 07:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `body`) VALUES
(1, 'bargavi', 'bhargaviyatham32@gmail.com', 'contact us', 'we want cultural events'),
(2, 'nagalakshmi', 'lakshmi@gmail.com', 'hello', 'we need oopu');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_date`, `event_description`, `event_img`) VALUES
(1, 'zest', '08 dec', 'It is for freshers to welcome them', 'Screenshot (4).png'),
(2, 'zest', '08 dec', 'It is for freshers to welcome them', 'Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`) VALUES
(1, 7, 2),
(2, 4, 2),
(4, 5, 1),
(7, 4, 1),
(9, 1, 1),
(10, 6, 1),
(11, 8, 1),
(13, 8, 3),
(17, 3, 2),
(23, 1, 2),
(70, 3, 1),
(74, 11, 1),
(80, 6, 0),
(81, 7, 1),
(82, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newteam`
--

CREATE TABLE `newteam` (
  `mem_id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_position` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `linked` varchar(255) NOT NULL,
  `mem_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newteam`
--

INSERT INTO `newteam` (`mem_id`, `m_name`, `m_position`, `m_email`, `insta`, `linked`, `mem_img`) VALUES
(3, 'Pavan ch', 'president', 'n180750@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(4, 'M.Neelima', ' CEO', 'n180507@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(5, 'A.Ramesh ', 'General Secretary', 'n180020@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(6, 'B.AshaJyothi ', 'COO', 'n180219@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(7, 'M. Murali ', 'Vice President', 'n190752@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(8, 'A.Varalakshmi ', 'FO', 'n180128@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan.png'),
(9, 'K.Tharun ', 'FO', 'n180151@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan.png'),
(10, 'N.VemaChalam ', 'CTO', 'n180701@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan.png'),
(11, 'Y.Bhargavi ', 'CTO', 'n180750@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan.png'),
(12, 'K.Kumar ', 'PRO', 'n180770@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(13, 'G.Meghana ', 'PRO', 'n181155@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(14, 'M.P.S.S.Gangothri ', 'Cultural Head: ', 'n180231@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(15, 'T.Lakshmi Durga', ' Cultural Head', 'n180107@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan.png'),
(16, 'N.Shanthi ', 'Creative Head', 'n180139@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan.webp'),
(17, 'Y. Sai Sekhar', 'Creative Head', 'n190198@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(18, 'T.Mallika ', 'Content Head', 'n190215@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan.webp'),
(19, 'P.Jyothi', 'Social Media Manager', 'n180457@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan1.jpg'),
(20, 'P.Nagalakshmi', 'Event Coordinator', 'n180509@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'chan.jpg'),
(21, 'T.Likitha', 'Event Coordinator', 'n180267@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan1.jpg'),
(22, 'A.Sanjana', 'Event Coordinator', 'n190736@rguktn.ac.in', 'https://www.instagram.com/?hl=en', 'https://www.linkedin.com/login', 'shinchan1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oldteam`
--

CREATE TABLE `oldteam` (
  `team_id` int(11) NOT NULL,
  `team_title` varchar(100) NOT NULL,
  `team_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oldteam`
--

INSERT INTO `oldteam` (`team_id`, `team_title`, `team_img`) VALUES
(2, '2020', 'shinchan.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_text` varchar(255) NOT NULL,
  `post_type` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `username`, `post_img`, `post_text`, `post_type`, `keywords`, `created_at`) VALUES
(6, 'bhargaviyatham32@gmail.com', 'shinchan.png', 'banner', 2, 'photography,image,family', '2023-02-14 17:49:01'),
(7, 'bhargaviyatham32@gmail.com', 'shinchan1.jpg', ' bnbcfdsmnb', 2, 'oorike oorike,singing,songs', '2023-02-14 17:51:40'),
(15, 'bhargaviyatham32@gmail.com', 'videoplayback.mp4', 'song', 1, 'oorike oorike,singing,songs', '2023-02-15 06:29:12'),
(16, 'n180750@rguktn.ac.in', 'masteru song.mp4', 'song', 1, 'photography,image,family', '2023-02-15 06:35:04'),
(17, 'n180750@rguktn.ac.in', 'shinchan2.jpg', '123253', 1, 'banner,photography,image,shinchan', '2023-02-15 06:36:04'),
(18, 'durga@gmail.com', 'shin.jpg', '12345', 1, 'photography,image,bharu', '2023-02-15 06:36:49'),
(19, 'n180750@rguktn.ac.in', 'Remini20220210112346610.png', 'asdfghjkll', 1, 'photography,image,bharu', '2023-02-15 06:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `update_id` int(11) NOT NULL,
  `update_title` varchar(100) NOT NULL,
  `update_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update_id`, `update_title`, `update_img`) VALUES
(7, 'Today update', '1657858.webp'),
(8, 'Today update', 'pexels-bich-tran-669996.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `verify_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=no,1=yes',
  `profile_pic` text DEFAULT 'default_profile.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `username`, `password`, `verify_token`, `verify_status`, `profile_pic`, `created_at`, `updated_at`, `usertype`) VALUES
(1, 'bhargavi', 'n180750@rguktn.ac.in', 'bhargaviYatham', '827ccb0eea8a706c4c34a16891f84e7b', 'f29e4fd104acbcdbaf084fcdba6bdf94', 1, 'Remini20220210112346610.png', '2023-02-11 09:03:07', '2023-02-12 09:25:06', 'admin'),
(2, 'durga', 'bhargaviyatham32@gmail.com', 'durgaYatham', '827ccb0eea8a706c4c34a16891f84e7b', 'd02253d20bce7a25429e622ae37a1c6b', 1, 'shin.jpg', '2023-02-11 12:32:12', '2023-02-11 19:40:39', 'user'),
(3, 'M.Neelima', 'n180507@rguktn.ac.in', 'Neelu', '7867b5b95e2e11727cdca955c2f18e78', 'b1d05fdd72dcab68ec2e8dc89e88ae7d', 1, 'shinchan1.jpg', '2023-02-12 05:58:28', '2023-02-12 06:13:33', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newteam`
--
ALTER TABLE `newteam`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `oldteam`
--
ALTER TABLE `oldteam`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`update_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `newteam`
--
ALTER TABLE `newteam`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `oldteam`
--
ALTER TABLE `oldteam`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
