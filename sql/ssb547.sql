-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 11:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssb547`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `u_status` int(11) NOT NULL DEFAULT 1 COMMENT '0 for inactive, 1 for active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_mail`, `u_phone`, `join_date`, `father_name`, `mother_name`, `address`, `u_status`) VALUES
(1, 'কাইফ রাসেল', 'ananta29@yahoo.com', '01715365380', '2023-05-26', 'স্বাধীন মোস্তফা', 'Reese Vazquez', '৪৫ হাজী গলি, পূর্বতলা ঢাকা', 1),
(2, 'Danna Williams', 'tattooman@comcast.net', '029138253909090', '2023-05-26', 'Cael Schaefer', 'Reese Vazquez', 'room # 420, supreme court bar, dhanmondi, 1209', 1),
(3, 'will delete', 'tattooman@comcast.net', '029138253909090', '2023-05-26', 'Cael Schaefer', 'Reese Vazquez', 'room # 420, supreme court bar, dhanmondi, 1209', 1),
(4, 'Erick Bridges', ' policies@msn.com', '01712530285', '2023-05-26', 'Jackie Shelton', 'Fernando Green', 'room # 21, ray shaheb bazar, (metropolitan law chamber), 1100', 1),
(5, 'Connie Long', 'bulletin@msn.com', '029138253909090', '2023-05-26', 'Caroline Craig', 'Alton Maldonado', 'holy family red crescent medical college, maghbazar, 1217', 1),
(6, 'রহিম সার', 'tattooman@comcast.net', '029138253909090', '2023-05-26', 'Danny Richardson', 'Garrett Swanson', '14/-a, rajani chowdhury road, gandaria, 1204', 1),
(7, 'আবেদীন সাদ্দাম', 'jsekha@ali.info', '029566669', '2023-05-26', 'Mamie Briggs', 'Cristina Pierce', '৭৭ বরকত সড়ক, লেইকটাউন চিটাগং', 1),
(8, 'স্বাধীন মোস্তফা', 'sabarina.sekha@khana.com', '029138253909090', '2023-05-26', 'Michelle Torres', 'Stella Collier', '৪০ বরকত ব্রীজ, নতুনহাট কুমিল্লা', 0),
(9, 'Suman', 'suman@comcast.net', '121324545', '2023-05-26', 'Abdullah ', 'Marium', 'kolabagan', 1),
(10, 'Asir israk', 'israksisir@gmail.com', '01627277580', '2023-05-26', 'Cael Schaefer', 'Reese Vazquez', 'College Para, Meherpur Sadar, Meherpur', 1),
(11, 'Sarif Khan', 'sharifkhan@yahoo.com', '01963784537', '2023-05-28', 'Kaiyum Ahmed', 'Sakhina Banu', 'Mirpur DOHS, Dhaka ', 1),
(12, 'mX6j5zXZY5', '5yW6RugPId', '455272', '2023-05-28', 'SWOiiHTVH4', 'qfd6VK6oBP', 'hBQyj61ens', 1),
(13, 'Sumon', 'ctU9n3A3cA', '742464', '2023-05-28', 'lAK6QYfEpU', 'KEvdmedeuj', 'Fv1blMrKyv', 1),
(14, 'IrX48Q4h03', 'pb12Og4Xm1', '265875', '2023-05-30', '0nYjgGBhKk', 'QeJoRVw4Uw', 'iHX0Xmh8zP', 1),
(15, 'jkqKzq1K09', 'Qpb4fDg5Rh', '053518', '2023-05-30', 'z0D4eWHe12', 'cvoOY1AmgE', 'U89vqJDeBj', 0),
(16, 'VLtf41knUW', 'wP8S4jyrfZ', '897850', '2023-05-30', 'YoivS0hp6M', 'V0vf0yOkEn', '7CuRUx7fWB', 0),
(17, 'kJMKmQdioN', 'JqMpT2rWCT', '461005', '2023-05-30', 'MF7kzESFVz', 'DKsH1Q4XQc', 'PxwKEdL7by', 0),
(18, 'z4YbSzabFO', 'XtpRPM3Un4', '523977', '2023-05-30', 'KGVHlb3NXt', '4a6XlbEZDf', 'Mpgihyl8YE', 0),
(20, 'Inactive', 'usqoFOMsSW', '978687', '2023-05-30', 't5S7Zaz93C', 'EEyonp6zBJ', '1x3pCMWmWP', 0),
(22, 'Sandman ', '7e72CN1biD', '895380', '2023-05-30', 'iKXLuwM7lF', 'wVOK4gJLYa', '0ekdQq69zT', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
