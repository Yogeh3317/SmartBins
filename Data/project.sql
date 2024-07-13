-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 03:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(12) NOT NULL,
  `area_name` varchar(20) NOT NULL,
  `city_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`) VALUES
(1, 'Bapunagar', 1),
(2, 'Nikol', 1),
(3, 'Naroda', 1),
(4, 'Mani-nagar', 1),
(5, 'Krishna-nagar', 1),
(6, 'Saraspur', 1),
(7, 'Hirawadi', 1),
(8, 'Ranip', 1),
(9, 'Paldi', 1),
(10, 'Vasna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(12) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Sinhgad Clean'),
(2, 'Clothes_donation'),
(3, 'River Clean Event'),
(4, 'Warm_clothes(Winter_wear)');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(12) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `state_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Ahmedabad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wastetype` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `locationdescription` text NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `d_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `address` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `fromtime` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `totime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`d_id`, `title`, `description`, `cat_id`, `donation_date`, `address`, `city_id`, `area_id`, `status`, `fromtime`, `user_id`, `contact_name`, `contact_number`, `totime`) VALUES
(9, 'CLOTH', 'I want donat old cloth', 2, '2024-04-25', 'pune', 1, 10, 'pending', '15:00:00', 25, '123657890', 123657890, '14:00:00'),
(13, 'hb', 'fdgh', 1, '2024-06-26', 'hhg', 1, 1, 'pending', '11:11:00', 25, 'fgv', 0, '11:11:00'),
(14, 'hb', 'fdgh', 1, '2024-06-26', 'hhg', 1, 1, 'pending', '11:11:00', 25, 'fgv', 0, '11:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(12) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(12) NOT NULL,
  `status` varchar(30) NOT NULL,
  `r_location` varchar(255) NOT NULL,
  `event_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `title`, `description`, `date`, `user_id`, `status`, `r_location`, `event_type`) VALUES
(9, 'I want wet Garbage f', 'I am seeking wet garbage that can be used as fertilizer, which is in good condition for plant and so', '2024-06-11', 25, 'pending', '', 'Anniversary-celebration'),
(10, 'vccv', 'gfgfgf', '2024-06-13', 25, 'pending', '', 'Anniversary-celebration'),
(11, 'ygu', 'hg', '1111-11-11', 25, 'pending', '', 'Birthday-celebration'),
(12, 'dcsc', 'ds', '1111-11-11', 25, 'pending', 'm', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(12) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `date`, `user_id`, `comment`, `rating`) VALUES
(1, '2022-11-05', 2, 'Nice work....', 3),
(10, '2023-01-14', 2, 'good working for societys', 3),
(11, '2023-01-24', 6, 'good working keep going', 1),
(20, '2023-04-07', 18, 'I am happy so say i am the part of them,and i worked for him as volunteer....', 5);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `name`, `email`, `contact`, `message`, `date`) VALUES
(1, 'abcc', 'abc@gmail.com', 5566223311, 'how to donate....?', '2023-01-03'),
(2, 'fenil patel', 'fento@gmail.com', 9368521452, 'can i donate  money ....?', '2023-01-03'),
(3, 'Kalpesh patel', 'kalpeshpatel@gmail.com', 5689741230, 'what is process of donation?.....', '2023-01-09'),
(4, 'meenaben shah', 'shahds007@gmail.com', 9687052303, 'What is process to donate a food....', '2023-01-29'),
(5, 'Heena patel', 'heena01@gmao.com', 8865324179, 'what time can take your volunteer for delivering food into ngo...', '2023-03-15'),
(6, 'Kajal Mehta', 'shahkajal@gmail.com', 9714658962, 'i want donate money using my banking application can i make ...?', '2023-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `money_donation`
--

CREATE TABLE `money_donation` (
  `m_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `d_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `money_donation`
--

INSERT INTO `money_donation` (`m_id`, `user_id`, `amount`, `description`, `date`, `d_name`) VALUES
(10, 1, '10000', 'i will donete for meal in ngo all person\'s', '2023-03-22', 'Harsh Shah'),
(11, 1, '6000', 'i will donate in ngo\'s for medicine\'s.... ', '2023-03-26', 'Aarav fumakiya'),
(18, 25, '1500', 'For Temple Flower ', '2024-05-30', 'Yogesh');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(12) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(12) NOT NULL,
  `state_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `reg_date` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `contact`, `gender`, `dob`, `address`, `city_id`, `area_id`, `image`, `reg_date`, `password`, `role_id`) VALUES
(1, 'harsh', 'shh@gmail.com', 5566332211, 'male', '2023-01-03', '750/5011 g.h.b ,near shriji school,bapunagar-ahmedbad-380024', 1, 1, '0000.jpg', '2023-01-11', '1234567', 2),
(2, 'shashank patel', 'patelshashank@gmail.com', 566223311, 'male', '2023-01-03', '52-g,near sardar chowk,bapunagar,ahmedabad', 1, 1, '0000.jpg', '2023-01-05', '123', 3),
(3, 'Mann ambani', 'mann@gmail.com', 5883636665, 'Male', '1999-01-02', '56-t,annpurna socity,near chadra prasad desi hall,bapunagar,ahmedabad-380024', 1, 5, '0000.jpg', '2023-01-02', '123', 2),
(6, 'fenil', 'fento@gmail.com', 233114455, 'Female', '2023-01-04', '52-g,near sardar chowk,bapunagar,ahmedabad', 1, 7, '00.jpg', '2023-01-02', '1234', 3),
(12, 'Helping-Hand(NGO)', 'halpinghand@gmail.com', 9712658293, 'Male', '2003-07-02', '743/8956 g.h.board,near shirji school,bapunagar', 1, 1, '20221123_215139.png', '2023-01-20', '1234567', 1),
(18, 'Panchal priya', 'priyapanchal1323@gmail.com', 6589230147, 'Female', '2023-01-05', 'b-14,satyam flat,nikol,ahmedabad', 1, 2, 'team2.jpg', '2023-01-31', '1324', 3),
(24, 'v@gmail.com', 'v@gmail.com', 1236547890, 'Female', '2004-01-05', 'Ganesh Nagar , New Sangvi', 1, 8, 'YogeshPhoto - Copy.jpg', '2024-04-18', 'v@gmail.com', 3),
(25, 'u@gmail.com', 'u@gmail.com', 3214569870, 'Male', '1994-10-20', 'new ', 1, 10, '00.jpg', '2024-04-23', 'u@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_acceptance`
--

CREATE TABLE `volunteer_acceptance` (
  `v_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  `d_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `receive_datetime` datetime NOT NULL,
  `receive_message` text NOT NULL,
  `delivery_datetime` datetime NOT NULL,
  `delivery_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer_acceptance`
--

INSERT INTO `volunteer_acceptance` (`v_id`, `user_id`, `datetime`, `status`, `d_id`, `description`, `receive_datetime`, `receive_message`, `delivery_datetime`, `delivery_message`) VALUES
(1, 14, '2023-01-29 12:51:55', 'accept', 1, 'i am here in your location i will collect in few hour...', '2023-01-29 12:52:17', ' i will donation there is 4 person meal...', '2023-01-29 12:52:36', 'i delivered 4 person meal into ngo.'),
(2, 15, '2023-01-29 08:11:25', 'accept', 2, 'i will come in evening...', '2023-01-29 08:11:51', 'i will collect 10 person meal...', '2023-01-29 08:12:14', 'i will delivered 10 person meal into ngo.'),
(3, 14, '2023-03-03 09:59:59', 'accept', 4, 'i will be reached at time...', '2023-03-03 10:00:25', 'parcel received successfully...', '2023-03-03 10:00:48', 'parcel delivered successfully...'),
(4, 14, '2023-03-04 12:14:00', 'accept', 3, 'i will be reached at time...', '2023-03-04 12:14:28', 'i will coloect 3 person meal...', '2023-03-04 12:14:43', 'I will delivered 3 persong meal into ngo...'),
(5, 18, '2023-04-07 10:58:46', 'accept', 5, 'I will be reached to collect donation at 11:00 am', '2023-04-07 11:02:05', 'i will receive for 4 person meal for ngo..', '2023-04-07 11:13:05', ' i will delivered food in NGO.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `cat_id` (`cat_id`,`city_id`,`area_id`,`user_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `money_donation`
--
ALTER TABLE `money_donation`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `area_id` (`area_id`,`city_id`,`role_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `volunteer_acceptance`
--
ALTER TABLE `volunteer_acceptance`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `user_id` (`user_id`,`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `money_donation`
--
ALTER TABLE `money_donation`
  MODIFY `m_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `volunteer_acceptance`
--
ALTER TABLE `volunteer_acceptance`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `money_donation`
--
ALTER TABLE `money_donation`
  ADD CONSTRAINT `money_donation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
