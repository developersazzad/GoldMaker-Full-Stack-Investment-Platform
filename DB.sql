-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2026 at 05:31 AM
-- Server version: 10.6.28-MariaDB
-- PHP Version: 8.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Table structure for table `aboutsection`
--

CREATE TABLE `aboutsection` (
  `id` int(11) NOT NULL,
  `SmallText` varchar(255) DEFAULT NULL,
  `MainText` text DEFAULT NULL,
  `InfoDescription` text DEFAULT NULL,
  `AdminImage` varchar(255) DEFAULT NULL,
  `Date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `aboutsection`
--

INSERT INTO `aboutsection` (`id`, `SmallText`, `MainText`, `InfoDescription`, `AdminImage`, `Date`) VALUES
(1, 'small', 'main', 'desc', 'img.png', '2026-09-28 18:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `adminsupports`
--

CREATE TABLE `adminsupports` (
  `id` int(11) NOT NULL,
  `InvestorUserEmail` varchar(100) NOT NULL,
  `Subject` text NOT NULL,
  `Help_text` text NOT NULL,
  `Admin_reply` text NOT NULL,
  `screenshoot_user` text NOT NULL,
  `screenshoot_admin` text NOT NULL,
  `Status` enum('read','unread','replay','admin','all_user','pending') NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `adminsupports`
--

INSERT INTO `adminsupports` (`id`, `InvestorUserEmail`, `Subject`, `Help_text`, `Admin_reply`, `screenshoot_user`, `screenshoot_admin`, `Status`, `Date`) VALUES
(1, 'mamuntelecome@gmail.com', 'Admin Send', '', 'hey', '0', '0', 'admin', '2023-03-14 12:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `allactivity`
--

CREATE TABLE `allactivity` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `ActivityText` text NOT NULL,
  `ac_time` varchar(300) NOT NULL,
  `maker` enum('user','admin','markAsread') NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `allactivity`
--

INSERT INTO `allactivity` (`id`, `email`, `ActivityName`, `ActivityText`, `ac_time`, `maker`, `Date`) VALUES
(15, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1.5 Usd', '1678652140', 'admin', '2023-03-13 02:15:40'),
(16, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.5 Usd', '1678652140', 'admin', '2023-03-13 02:15:40'),
(17, 'mamuntelecome@gmail.com', 'Recive_admin_sp_notice', 'Admin Send Message for You', '1678731287', 'markAsread', '2023-03-14 12:14:47'),
(18, 'mamuntelecome@gmail.com', 'payment_update_notice', 'Payment Add Your Account Success', '1678731550', 'markAsread', '2023-03-14 12:19:10'),
(19, 'mamuntelecome@gmail.com', 'recive_payment', 'You Recive 118 payment', '1678732632', 'markAsread', '2023-03-14 12:37:12'),
(20, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1678773067', 'admin', '2023-03-14 11:51:07'),
(21, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1678773067', 'admin', '2023-03-14 11:51:07'),
(22, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1678773067', 'admin', '2023-03-14 11:51:07'),
(23, 'developer.sazzad.me@gmail.com', 'payment_update_notice', 'Payment Add Your Account Success', '1678773645', 'admin', '2023-03-14 12:00:45'),
(24, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1678773819', 'admin', '2023-03-14 12:03:39'),
(25, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1678773819', 'admin', '2023-03-14 12:03:39'),
(26, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1678773819', 'markAsread', '2023-03-14 12:03:39'),
(27, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1678773819', 'admin', '2023-03-14 12:03:39'),
(28, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1678773819', 'admin', '2023-03-14 12:03:39'),
(29, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.185 USD Rafer Bonus', '1678773819', 'markAsread', '2023-03-14 12:03:39'),
(30, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1678773819', 'admin', '2023-03-14 12:03:39'),
(31, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.095 USD Rafer Bonus', '1678773819', 'admin', '2023-03-14 12:03:39'),
(32, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1678773819', 'admin', '2023-03-14 12:03:39'),
(33, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.04 USD Rafer Bonus', '1678773819', 'admin', '2023-03-14 12:03:39'),
(34, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1678773819', 'admin', '2023-03-14 12:03:39'),
(35, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.05 USD Rafer Bonus', '1678773819', 'admin', '2023-03-14 12:03:39'),
(36, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1678838413', 'admin', '2023-03-15 06:00:13'),
(37, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1678838413', 'admin', '2023-03-15 06:00:13'),
(38, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1678838413', 'markAsread', '2023-03-15 06:00:13'),
(39, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1678838413', 'admin', '2023-03-15 06:00:13'),
(40, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1678838413', 'admin', '2023-03-15 06:00:13'),
(41, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.185 USD Rafer Bonus', '1678838413', 'admin', '2023-03-15 06:00:13'),
(42, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1678838413', 'admin', '2023-03-15 06:00:13'),
(43, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.095 USD Rafer Bonus', '1678838413', 'admin', '2023-03-15 06:00:13'),
(44, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1678838413', 'admin', '2023-03-15 06:00:13'),
(45, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.04 USD Rafer Bonus', '1678838413', 'admin', '2023-03-15 06:00:13'),
(46, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1678838413', 'admin', '2023-03-15 06:00:13'),
(47, 'sazzadrahath321@gmail.com', 'Rafer_bonus_give', 'You Give 0.05 USD Rafer Bonus', '1678838413', 'admin', '2023-03-15 06:00:13'),
(48, 'developer.sazzad.me@gmail.com', 'profile_update', 'Update Investor information Done', '1678874861', 'user', '2023-03-15 04:07:41'),
(49, 'developer.sazzad.me@gmail.com', 'balance_convart_fail', 'Balance Convart Fail', '1678874912', 'user', '2023-03-15 04:08:32'),
(50, 'developer.sazzad.me@gmail.com', 'balance_convart_done', 'Balance Convart Done', '1678874919', 'user', '2023-03-15 04:08:39'),
(51, 'developer.sazzad.me@gmail.com', 'profile_update', 'Update Investor information Done', '1678875029', 'user', '2023-03-15 04:10:29'),
(52, 'mdjonyahmed410@gmail.com', 'docs_submit_varify', 'Document Submit Success', '1678900898', 'user', '2023-03-15 11:21:38'),
(53, 'mdjonyahmed410@gmail.com', 'recive_payment', 'You Recive 283 payment', '1678901046', 'markAsread', '2023-03-15 11:24:06'),
(54, 'mdjonyahmed410@gmail.com', 'pakage_buy_done', 'Buy New Pakages Done', '1678901159', 'user', '2023-03-15 11:25:59'),
(55, 'mamuntelecome@gmail.com', 'add_payment_request', 'Add payment Request Submit', '1678902329', 'user', '2023-03-15 11:45:29'),
(56, 'mamuntelecome@gmail.com', 'payment_update_notice', 'Payment Add Your Account Success', '1678902342', 'markAsread', '2023-03-15 11:45:42'),
(57, 'mamuntelecome@gmail.com', 'pakage_buy_done', 'Buy New Pakages Done', '1678902409', 'user', '2023-03-15 11:46:49'),
(58, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1678924815', 'admin', '2023-03-16 06:00:15'),
(59, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1678924815', 'admin', '2023-03-16 06:00:15'),
(60, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1678924815', 'admin', '2023-03-16 06:00:15'),
(61, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1678924815', 'admin', '2023-03-16 06:00:15'),
(62, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1678924815', 'admin', '2023-03-16 06:00:15'),
(63, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1678924815', 'admin', '2023-03-16 06:00:15'),
(64, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1678924815', 'admin', '2023-03-16 06:00:15'),
(65, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1678924816', 'admin', '2023-03-16 06:00:16'),
(66, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 2.17 Usd', '1678924816', 'admin', '2023-03-16 06:00:16'),
(67, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1678924816', 'admin', '2023-03-16 06:00:16'),
(68, 'mdjonyahmed410@gmail.com', 'add_payment_request', 'Add payment Request Submit', '1678966612', 'user', '2023-03-16 05:36:52'),
(69, 'mdjonyahmed410@gmail.com', 'payment_update_notice', 'Payment Add Request Proccing', '1678967938', 'admin', '2023-03-16 05:58:58'),
(70, 'mdjonyahmed410@gmail.com', 'payment_update_notice', 'Payment Add Your Account Success', '1678967947', 'admin', '2023-03-16 05:59:07'),
(71, 'mdjonyahmed410@gmail.com', 'pakage_buy_done', 'Buy New Pakages Done', '1678968839', 'user', '2023-03-16 06:13:59'),
(72, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(73, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(74, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(75, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(76, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(77, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(78, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(79, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(80, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 2.17 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(81, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(82, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679011224', 'admin', '2023-03-17 06:00:24'),
(83, 'mdjonyahmed410@gmail.com', 'balance_withdrow_request', 'Wallet Balance Withdrow Request Submit', '1679041002', 'user', '2023-03-17 02:16:42'),
(84, 'mdjonyahmed410@gmail.com', 'pament_withdrow_notice', 'Withdrow Request Proccing', '1679052433', 'admin', '2023-03-17 05:27:13'),
(85, 'mdjonyahmed410@gmail.com', 'pament_withdrow_notice', 'Withdrow Request Success', '1679052883', 'admin', '2023-03-17 05:34:43'),
(86, 'mamuntelecome@gmail.com', 'profile_update', 'Update Investor information Done', '1679055080', 'user', '2023-03-17 06:11:20'),
(87, 'mamuntelecome@gmail.com', 'balance_withdrow_request', 'Wallet Balance Withdrow Request Submit', '1679055377', 'user', '2023-03-17 06:16:17'),
(88, 'mamuntelecome@gmail.com', 'pament_withdrow_notice', 'Withdrow Request Success', '1679055426', 'admin', '2023-03-17 06:17:06'),
(89, 'mdjonyahmed410@gmail.com', 'profile_update', 'Update Investor information Done', '1679056674', 'user', '2023-03-17 06:37:54'),
(90, 'mdjonyahmed410@gmail.com', 'profile_update', 'Update Investor information Done', '1679056915', 'user', '2023-03-17 06:41:55'),
(91, 'mdjonyahmed410@gmail.com', 'profile_update', 'Update Investor information Done', '1679056958', 'user', '2023-03-17 06:42:38'),
(92, 'mdjonyahmed410@gmail.com', 'profile_update', 'Update Investor information Done', '1679056988', 'user', '2023-03-17 06:43:08'),
(93, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679097611', 'admin', '2023-03-18 06:00:11'),
(94, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(95, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(96, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(97, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(98, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(99, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(100, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(101, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 2.17 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(102, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(103, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679097612', 'admin', '2023-03-18 06:00:12'),
(104, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679184009', 'admin', '2023-03-19 06:00:09'),
(105, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(106, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(107, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(108, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(109, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(110, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(111, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(112, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 2.17 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(113, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(114, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679184010', 'admin', '2023-03-19 06:00:10'),
(115, 'mdjonyahmed410@gmail.com', 'profile_update', 'Update Investor information Done', '1679265447', 'user', '2023-03-20 04:37:27'),
(116, 'mdjonyahmed410@gmail.com', 'profile_update', 'Update Investor information Done', '1679265525', 'user', '2023-03-20 04:38:45'),
(117, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(118, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(119, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(120, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(121, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(122, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(123, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(124, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(125, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 2.17 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(126, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(127, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679270407', 'admin', '2023-03-20 06:00:07'),
(128, 'mdjonyahmed410@gmail.com', 'balance_convart_done', 'Balance Convart Done', '1679295637', 'user', '2023-03-20 01:00:37'),
(129, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679356810', 'admin', '2023-03-21 06:00:10'),
(130, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(131, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(132, 'sazzadrahath321@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(133, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 3.7 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(134, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1.9 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(135, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 0.8 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(136, 'developer.sazzad.me@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(137, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 2.17 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(138, 'mamuntelecome@gmail.com', 'daily_bonus_accept', 'You Accept 3 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(139, 'mdjonyahmed410@gmail.com', 'daily_bonus_accept', 'You Accept 1 Usd', '1679356811', 'admin', '2023-03-21 06:00:11'),
(140, 'mdjonyahmed410@gmail.com', 'balance_convart_done', 'Balance Convart Done', '1679357258', 'user', '2023-03-21 06:07:38'),
(141, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790617199', 'user', '2026-09-28 11:39:59'),
(142, 'developer.sazzad.me@gmail.com', 'docs_submit_varify', 'Document Submit Success', '1790619072', 'user', '2026-09-29 12:11:12'),
(143, 'sazzadrahath321@gmail.com', 'account_verified', 'Your Account Verification complete', '1790619403', 'admin', '2026-09-29 12:16:43'),
(144, 'developer.sazzad.me@gmail.com', 'account_verified', 'Your Account Verification complete', '1790619437', 'admin', '2026-09-29 12:17:17'),
(145, 'developer.sazzad.me@gmail.com', 'recive_payment', 'You Recive 300 payment', '1790619575', 'admin', '2026-09-29 12:19:35'),
(146, 'developer.sazzad.me@gmail.com', 'profile_update', 'Update Investor information Done', '1790619620', 'user', '2026-09-29 12:20:20'),
(147, 'developer.sazzad.me@gmail.com', 'pakage_buy_done', 'Buy New Pakages Done', '1790619674', 'user', '2026-09-29 12:21:14'),
(148, 'developer.sazzad.me@gmail.com', 'recive_payment', 'You Recive 9999999 payment', '1790619705', 'admin', '2026-09-29 12:21:45'),
(149, 'developer.sazzad.me@gmail.com', 'pakage_buy_done', 'Buy New Pakages Done', '1790619718', 'user', '2026-09-29 12:21:58'),
(150, 'developer.sazzad.me@gmail.com', 'pakage_buy_done', 'Buy New Pakages Done', '1790619725', 'user', '2026-09-29 12:22:05'),
(151, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790621917', 'user', '2026-09-29 12:58:37'),
(152, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790622076', 'user', '2026-09-29 01:01:16'),
(153, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790622184', 'user', '2026-09-29 01:03:04'),
(154, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790622222', 'user', '2026-09-29 01:03:42'),
(155, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624397', 'user', '2026-09-29 01:39:57'),
(156, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624406', 'user', '2026-09-29 01:40:06'),
(157, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624579', 'user', '2026-09-29 01:42:59'),
(158, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624691', 'user', '2026-09-29 01:44:51'),
(159, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624716', 'user', '2026-09-29 01:45:16'),
(160, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624778', 'user', '2026-09-29 01:46:18'),
(161, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624798', 'user', '2026-09-29 01:46:38'),
(162, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624889', 'user', '2026-09-29 01:48:09'),
(163, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790624916', 'user', '2026-09-29 01:48:36'),
(164, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790625112', 'user', '2026-09-29 01:51:52'),
(165, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790626570', 'user', '2026-09-29 02:16:10'),
(166, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790626621', 'user', '2026-09-29 02:17:01'),
(167, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790626667', 'user', '2026-09-29 02:17:47'),
(168, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790626716', 'user', '2026-09-29 02:18:36'),
(169, 'developer.sazzad.me@gmail.com', 'account_login', 'Login Sucess', '1790657685', 'user', '2026-09-29 10:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `allpakages`
--

CREATE TABLE `allpakages` (
  `id` int(11) NOT NULL,
  `planId` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `PerDayBonus` float NOT NULL,
  `banner` text NOT NULL,
  `icon` text NOT NULL,
  `rols_desc` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `start_date` datetime DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Sell_Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `allpakages`
--

INSERT INTO `allpakages` (`id`, `planId`, `Name`, `Duration`, `Price`, `PerDayBonus`, `banner`, `icon`, `rols_desc`, `date`, `start_date`, `Status`, `Sell_Status`) VALUES
(9, 'GM_plan409797', 'Regular-PKG02', '30d', 150, 1, 'assets/images/pakageImg/banner/06.png', 'assets/images/pakageImg/icon/1.png', 'No', '2023-03-14 12:28:43', NULL, NULL, NULL),
(10, 'GM_plan409797', 'Regular-PKG01', '30d', 100, 0.8, 'assets/images/pakageImg/banner/02.png', 'assets/images/pakageImg/icon/9.png', 'No withdrow When Not Complete Pakages', '2023-03-14 11:37:38', NULL, NULL, NULL),
(11, 'GM_plan409797', 'Regular-PKG03', '30d', 200, 1.9, 'assets/images/pakageImg/banner/', 'assets/images/pakageImg/icon/1.png', '', '2023-03-14 12:30:33', NULL, NULL, NULL),
(12, 'GM_plan931811', 'Golden-PKG01', '30d', 283, 2.17, 'assets/images/pakageImg/banner/02.png', 'assets/images/pakageImg/icon/3.png', 'No withdrow When Not Complete Pakages', '2023-03-14 12:34:54', NULL, NULL, NULL),
(13, 'GM_plan931811', 'Golden-PKG02', '30d', 400, 3, 'assets/images/pakageImg/banner/03.png', 'assets/images/pakageImg/icon/3.png', 'No withdrow When Not Complete Pakages', '2023-03-14 12:35:03', NULL, NULL, NULL),
(14, 'GM_plan931811', 'Golden-PKG03', '30d', 600, 3.7, 'assets/images/pakageImg/banner/03.png', 'assets/images/pakageImg/icon/3.png', 'No withdrow When Not Complete Pakages', '2023-03-14 12:35:16', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `allplans`
--

CREATE TABLE `allplans` (
  `id` int(11) NOT NULL,
  `PlanName` varchar(50) NOT NULL,
  `PlanId` varchar(50) NOT NULL,
  `picture` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `allplans`
--

INSERT INTO `allplans` (`id`, `PlanName`, `PlanId`, `picture`, `Date`) VALUES
(1, 'Golden', 'GM_plan931811', 'GM_Plan_cdfb3414e0921dc3ababa69acc9bca2d552b64bd.png', '2023-03-14 12:23:51'),
(2, 'Diamond', 'GM_plan404934', 'GM_Plan_0731d9f301dc0797e5f33380efb3f8b2a07c64c0.png', '2023-03-14 12:24:59'),
(3, 'Regular', 'GM_plan409797', 'GM_Plan_f24895cae1f7333e4898a4f078d13807d6415f0b.png', '2023-03-14 12:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `bank_list`
--

CREATE TABLE `bank_list` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_section`
--

CREATE TABLE `banner_section` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_desc` text DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `show_page` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banner_section`
--

INSERT INTO `banner_section` (`id`, `banner_title`, `banner_desc`, `button_link`, `banner_image`, `show_page`, `date`) VALUES
(1, 'test', 'Case stady Make simple and 3 section Maximum. this case stady will reflact why this site and why impect and problems solve.\r\n\r\nImportant -\r\n\r\n3 saperate Html file you made who are case stady.\r\n\r\ncreate readme.md file who explain data and all your work in case stady. important note\r\n\r\nCreate 3 poster for 3 case stady. poster bootom add developer creadit and minimal 3d concept design\r\n\r\niam\r\n\r\nSazzad Hossain â€” @developersazzad Â· Full-Stack Web Developer\r\n\r\nðŸ’¼ LinkedIn linkedin.com/in/developer-sazzad\r\n\r\nðŸ™ GitHub github.com/developersazzad\r\n\r\nðŸ“˜ Facebook fb.com/developersazzad\r\n\r\nðŸ’¬ WhatsApp wa.me/8801877856951\r\n\r\nâ–¶ï¸ YouTube youtube.com/@sazzadhossain01\r\n\r\nðŸŒ Portfolio sazzad.wedevspro.com\r\n\r\nLinks -\r\n\r\nhttps://motionuk.bcet.uk/\r\n\r\nhttps://systemcorner.com/\r\n\r\nhttps://gibsbd.org/', '#', 'rafer_bonus.png', '', '2026-09-29 00:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `bonus_activity_cron`
--

CREATE TABLE `bonus_activity_cron` (
  `id` int(11) NOT NULL,
  `Activity_name` varchar(100) NOT NULL,
  `Status` enum('Pending','Done') NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bonus_activity_cron`
--

INSERT INTO `bonus_activity_cron` (`id`, `Activity_name`, `Status`, `Date`) VALUES
(35, 'Daily_Bonus_Done', 'Done', '2023-03-13'),
(38, 'Daily_Bonus_Done', 'Done', '2023-03-14'),
(39, 'Daily_Bonus_Done', 'Done', '2023-03-15'),
(40, 'Daily_Bonus_Done', 'Done', '2023-03-16'),
(41, 'Daily_Bonus_Done', 'Done', '2023-03-17'),
(42, 'Daily_Bonus_Done', 'Done', '2023-03-18'),
(43, 'Daily_Bonus_Done', 'Done', '2023-03-19'),
(44, 'Daily_Bonus_Done', 'Done', '2023-03-20'),
(45, 'Daily_Bonus_Done', 'Done', '2023-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `dailybonusaddhistory`
--

CREATE TABLE `dailybonusaddhistory` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `pakageId` int(11) NOT NULL,
  `bonusGive` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `dailybonusaddhistory`
--

INSERT INTO `dailybonusaddhistory` (`id`, `userId`, `pakageId`, `bonusGive`, `date`) VALUES
(113, 16, 19, '1.5', '2023-03-13'),
(114, 16, 20, '3.5', '2023-03-13'),
(115, 16, 19, '1', '2023-03-14'),
(116, 16, 20, '0.8', '2023-03-14'),
(117, 16, 23, '3.7', '2023-03-14'),
(118, 16, 19, '1', '2023-03-14'),
(119, 16, 20, '0.8', '2023-03-14'),
(120, 18, 22, '3', '2023-03-14'),
(121, 16, 23, '3.7', '2023-03-14'),
(122, 19, 24, '3.7', '2023-03-14'),
(123, 19, 25, '1.9', '2023-03-14'),
(124, 19, 26, '0.8', '2023-03-14'),
(125, 19, 27, '1', '2023-03-14'),
(126, 16, 19, '1', '2023-03-15'),
(127, 16, 20, '0.8', '2023-03-15'),
(128, 18, 22, '3', '2023-03-15'),
(129, 16, 23, '3.7', '2023-03-15'),
(130, 19, 24, '3.7', '2023-03-15'),
(131, 19, 25, '1.9', '2023-03-15'),
(132, 19, 26, '0.8', '2023-03-15'),
(133, 19, 27, '1', '2023-03-15'),
(134, 16, 19, '1', '2023-03-16'),
(135, 16, 20, '0.8', '2023-03-16'),
(136, 18, 22, '3', '2023-03-16'),
(137, 16, 23, '3.7', '2023-03-16'),
(138, 19, 24, '3.7', '2023-03-16'),
(139, 19, 25, '1.9', '2023-03-16'),
(140, 19, 26, '0.8', '2023-03-16'),
(141, 19, 27, '1', '2023-03-16'),
(142, 20, 28, '2.17', '2023-03-16'),
(143, 18, 29, '3', '2023-03-16'),
(144, 16, 19, '1', '2023-03-17'),
(145, 16, 20, '0.8', '2023-03-17'),
(146, 18, 22, '3', '2023-03-17'),
(147, 16, 23, '3.7', '2023-03-17'),
(148, 19, 24, '3.7', '2023-03-17'),
(149, 19, 25, '1.9', '2023-03-17'),
(150, 19, 26, '0.8', '2023-03-17'),
(151, 19, 27, '1', '2023-03-17'),
(152, 20, 28, '2.17', '2023-03-17'),
(153, 18, 29, '3', '2023-03-17'),
(154, 20, 30, '1', '2023-03-17'),
(155, 16, 19, '1', '2023-03-18'),
(156, 16, 20, '0.8', '2023-03-18'),
(157, 18, 22, '3', '2023-03-18'),
(158, 16, 23, '3.7', '2023-03-18'),
(159, 19, 24, '3.7', '2023-03-18'),
(160, 19, 25, '1.9', '2023-03-18'),
(161, 19, 26, '0.8', '2023-03-18'),
(162, 19, 27, '1', '2023-03-18'),
(163, 20, 28, '2.17', '2023-03-18'),
(164, 18, 29, '3', '2023-03-18'),
(165, 20, 30, '1', '2023-03-18'),
(166, 16, 19, '1', '2023-03-19'),
(167, 16, 20, '0.8', '2023-03-19'),
(168, 18, 22, '3', '2023-03-19'),
(169, 16, 23, '3.7', '2023-03-19'),
(170, 19, 24, '3.7', '2023-03-19'),
(171, 19, 25, '1.9', '2023-03-19'),
(172, 19, 26, '0.8', '2023-03-19'),
(173, 19, 27, '1', '2023-03-19'),
(174, 20, 28, '2.17', '2023-03-19'),
(175, 18, 29, '3', '2023-03-19'),
(176, 20, 30, '1', '2023-03-19'),
(177, 16, 19, '1', '2023-03-20'),
(178, 16, 20, '0.8', '2023-03-20'),
(179, 18, 22, '3', '2023-03-20'),
(180, 16, 23, '3.7', '2023-03-20'),
(181, 19, 24, '3.7', '2023-03-20'),
(182, 19, 25, '1.9', '2023-03-20'),
(183, 19, 26, '0.8', '2023-03-20'),
(184, 19, 27, '1', '2023-03-20'),
(185, 20, 28, '2.17', '2023-03-20'),
(186, 18, 29, '3', '2023-03-20'),
(187, 20, 30, '1', '2023-03-20'),
(188, 16, 19, '1', '2023-03-21'),
(189, 16, 20, '0.8', '2023-03-21'),
(190, 18, 22, '3', '2023-03-21'),
(191, 16, 23, '3.7', '2023-03-21'),
(192, 19, 24, '3.7', '2023-03-21'),
(193, 19, 25, '1.9', '2023-03-21'),
(194, 19, 26, '0.8', '2023-03-21'),
(195, 19, 27, '1', '2023-03-21'),
(196, 20, 28, '2.17', '2023-03-21'),
(197, 18, 29, '3', '2023-03-21'),
(198, 20, 30, '1', '2023-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `faq section`
--

CREATE TABLE `faq section` (
  `id` int(11) NOT NULL,
  `FaqSmallText` varchar(255) DEFAULT NULL,
  `MainText` text DEFAULT NULL,
  `Date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_section_boxes`
--

CREATE TABLE `faq_section_boxes` (
  `id` int(11) NOT NULL,
  `title_text` varchar(255) DEFAULT NULL,
  `desc_text` text DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hold_live_count`
--

CREATE TABLE `hold_live_count` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `important_admin_setting`
--

CREATE TABLE `important_admin_setting` (
  `id` int(11) NOT NULL,
  `stmtp` int(11) NOT NULL,
  `maintaince_mode` int(11) NOT NULL,
  `withdrow_limit` varchar(20) NOT NULL,
  `response_time` varchar(20) NOT NULL,
  `add_amount_limit` varchar(20) NOT NULL,
  `bonus_withdrow_fee` varchar(20) NOT NULL,
  `rafer_bonus` varchar(20) NOT NULL,
  `dipogit_w_cut_amt` varchar(20) NOT NULL,
  `dipogit_withdrow_time1` varchar(20) NOT NULL,
  `dipogit_withdrow_time2` varchar(20) NOT NULL,
  `Bonus_withdrow_time` varchar(20) NOT NULL,
  `last_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `important_admin_setting`
--

INSERT INTO `important_admin_setting` (`id`, `stmtp`, `maintaince_mode`, `withdrow_limit`, `response_time`, `add_amount_limit`, `bonus_withdrow_fee`, `rafer_bonus`, `dipogit_w_cut_amt`, `dipogit_withdrow_time1`, `dipogit_withdrow_time2`, `Bonus_withdrow_time`, `last_update`) VALUES
(1, 0, 0, '10', '24', '10', '5', '10', '5', '1', '2', '24', '2026-09-29 12:33:46'),
(2, 0, 0, '10', '24', '10', '5', '10', '5', '1', '2', '24', '2026-09-29 12:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `info_links_all`
--

CREATE TABLE `info_links_all` (
  `id` int(11) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `info_links_all`
--

INSERT INTO `info_links_all` (`id`, `email1`, `email2`, `facebook`, `instagram`, `youtube`, `date`) VALUES
(3, 'info.goldmaker24@gmail.com', 'goldmaker@goldmaker24.com', '#', '#', '#', '2023-03-10 11:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `ins_bank_withdrow_data`
--

CREATE TABLE `ins_bank_withdrow_data` (
  `id` int(11) NOT NULL,
  `withdrow_id` varchar(255) DEFAULT NULL,
  `method_id` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `routing_no` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investoraccounts`
--

CREATE TABLE `investoraccounts` (
  `id` int(11) NOT NULL,
  `validate_key_unique` varchar(1000) NOT NULL,
  `FastName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `stats` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `VerificationCode` varchar(50) NOT NULL,
  `Status` enum('Active','Inactive','Suspend','Completed','Unseen') NOT NULL,
  `lavel` varchar(100) NOT NULL,
  `BonusBalance` varchar(50) NOT NULL,
  `MainBalance` varchar(50) NOT NULL,
  `ProfilePic` text NOT NULL,
  `docs_one` varchar(200) NOT NULL,
  `docs_tow` varchar(200) NOT NULL,
  `RaferId` varchar(50) NOT NULL,
  `My_RaferId` varchar(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `investoraccounts`
--

INSERT INTO `investoraccounts` (`id`, `validate_key_unique`, `FastName`, `LastName`, `Email`, `mobile`, `postcode`, `stats`, `city`, `country`, `Password`, `VerificationCode`, `Status`, `lavel`, `BonusBalance`, `MainBalance`, `ProfilePic`, `docs_one`, `docs_tow`, `RaferId`, `My_RaferId`, `Date`) VALUES
(16, 'de18cffdc01a0386fd9895c982a2c4d7', 'sazzad', 'hossain', 'sazzadrahath321@gmail.com', '01835558000', '4208', 'Bohoddrhat, chittgong', 'Chattogram', 'Bangladesh', '$2y$10$1hlVxwnkAPoyuwFt7IhJ4./ZpDbH07pExoNWiR.7rowByGUkTGBQ.', '923547', 'Completed', 'Gold', '70.415', '45900', 'userexample.png', '0', '0', 'Gm12s', 'GM8949', '2023-03-13 12:43:32'),
(18, '70e4c2d15bb0e8fe151b3cb31ed550d6', 'MAMUN', 'MIAH', 'mamuntelecome@gmail.com', '01609232317', '0', '0', '0', 'Bangladesh', '$2y$10$gZ.Dh8GGW71s.jN/FJub5OENyB1K.d6iSpbubJRv8IZanVbFKL.4G', '836635', 'Completed', 'NewBee', '24', '0', 'GM_INS_pro_77ef2ada81e4c06e23132a9c7b9927d7e625ceac.png', '', 'GM_Idocs_ffdaedfa951ef8991486ff5aa6845bbdeebabc21.png', '', 'GM2513', '2023-03-14 00:00:00'),
(19, '46f050f69cf085deb8b331c1eb451c85', 'Rahath', 'hossain', 'developer.sazzad.me@gmail.com', '01835558000', '4208', 'Bohoddrhat, chittgong', 'Chattogram', 'BD', '$2y$10$fqVZdDdyFaNhLsuojznx3OJ5hVAvJax5zl4vT9JVFcTIImkCyE2iG', '301921', 'Active', 'Diamond', '9999207.2', '1951', 'GM_INS_pro_388464dd48e3d5510e5695d737225389abe4b1f3.png', '', 'GM_Idocs_8833b7ac2f3b55beede83d8bf2af816893e56986.png', 'Gm12s', 'GM5046', '2026-09-29 00:00:00'),
(20, '044fc85d477ba3579d8f9d0d4274bce9', 'Md Jony ', 'Ahmed', 'mdjonyahmed410@gmail.com', '+966543629230', '1970', 'Tangail', 'Tangail', 'Soudia', '$2y$10$p3dfG..dAcYl.suT5z2ZdONpsW9zON4elpFe/XDAk0NO.zgjk7jWi', '885105', 'Completed', 'NewBee', '0', '12.68', 'GM_INS_pro_bc65a176eb67b69c20deb0770b9412a5297a350d.png', '', 'GM_Idocs_5fab33ee3459a9a2b00b88d03d60b3ad9e0c3f87.png', '', 'GM1385', '2023-03-15 00:00:00'),
(21, '69366e1e19c699b5c915d1144d548fb4', 'sehab', 'uddin', 'fiversazzad@gmail.com', '', '', '', '', 'Bangladesh', '$2y$10$pVxEOzCLIsdihDG3bxE.Z.ySUx1jiLnzRQK7Y38nktIKJOMkyLNVq', '653200', 'Active', 'NewBee', '0', '0', 'userexample.png', '0', '0', '', 'GM8607', '2023-03-16 12:04:09'),
(22, '331249e2bda51936e65956c5b1976ca3', 'ROMON', 'ALI', 'rsrimonngn@gmail.com', '', '', '', '', 'Bangladesh', '$2y$10$PGr/CjAHnEsfaiT8TzvWl.VajDlphL/WQhs7ARRXsmmqo0K9LtxXe', '928974', 'Active', 'NewBee', '0', '0', 'userexample.png', '0', '0', '', 'GM1920', '2023-03-17 12:44:55'),
(23, 'dccf436146b968b217b8e0093c20709d', 'Hridoy', 'Mahmodul', 'Hkshovo700@gmail.com', '', '', '', '', 'Soudia', '$2y$10$yzy9Y3bBwkt4vq/rRqga4uHFczuaMHbA6DhPUtuyyYtI1KzsMzVfS', '363827', 'Active', 'NewBee', '0', '0', 'userexample.png', '0', '0', '', 'GM7230', '2023-03-17 12:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `investordocs`
--

CREATE TABLE `investordocs` (
  `id` int(11) NOT NULL,
  `Ins_id` int(11) NOT NULL,
  `Legal_name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `stats` varchar(50) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `docs_type` text NOT NULL,
  `docs_file_1` text NOT NULL,
  `docs_file_2` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `investordocs`
--

INSERT INTO `investordocs` (`id`, `Ins_id`, `Legal_name`, `country`, `city`, `stats`, `postcode`, `age`, `docs_type`, `docs_file_1`, `docs_file_2`, `date`) VALUES
(2, 16, 'sazzad hossain', 'Bangladesh', 'Chattogram', 'Bohoddrhat, chittgong', '4208', '23', 'passport Id', 'GM_Idocs_e29f49dedaa707b812b0e3ead1ba58434ebae4b6.png', '0', '2026-09-29 12:16:43'),
(3, 19, 'Rahath hossain', 'BD', 'Chattogram', 'Bohoddrhat, chittgong', '4208', '23', 'National Id', 'GM_Idocs_7d63aee39ce086023101f457159e47d187b30387.png', '0', '2026-09-29 12:17:17'),
(6, 20, 'MD JONY MIAH', 'BD', 'Tangail', 'Kalihati', '1234', '23', 'passport Id', 'GM_Idocs_5fab33ee3459a9a2b00b88d03d60b3ad9e0c3f87.png', '0', '2023-03-15 00:00:00'),
(7, 19, 'Rahath hossain', 'BD', 'Chattogram', 'Bohoddrhat, chittgong', '4208', '26', '', 'GM_Idocs_8833b7ac2f3b55beede83d8bf2af816893e56986.png', '0', '2026-09-29 12:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `investorplanpakages`
--

CREATE TABLE `investorplanpakages` (
  `id` int(11) NOT NULL,
  `InvestorId` int(11) NOT NULL,
  `status` enum('valid','invalid','new') NOT NULL,
  `investorEmail` varchar(100) NOT NULL,
  `PlanId` varchar(50) NOT NULL,
  `PakageId` varchar(100) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `investorplanpakages`
--

INSERT INTO `investorplanpakages` (`id`, `InvestorId`, `status`, `investorEmail`, `PlanId`, `PakageId`, `Date`) VALUES
(13, 14, 'valid', 'mdmahmudul.hasan.iam@gmail.com', 'GM_plan931811', '1', '2023-03-09 02:46:09'),
(22, 18, 'valid', 'mamuntelecome@gmail.com', 'GM_plan931811', '13', '2023-03-14 11:41:05'),
(28, 20, 'valid', 'mdjonyahmed410@gmail.com', 'GM_plan931811', '12', '2023-03-15 11:25:59'),
(29, 18, 'valid', 'mamuntelecome@gmail.com', 'GM_plan931811', '13', '2023-03-15 11:46:49'),
(30, 20, 'valid', 'mdjonyahmed410@gmail.com', 'GM_plan409797', '9', '2023-03-16 06:13:59'),
(31, 19, 'valid', 'developer.sazzad.me@gmail.com', 'GM_plan409797', '9', '2026-09-29 12:21:14'),
(32, 19, 'valid', 'developer.sazzad.me@gmail.com', 'GM_plan931811', '14', '2026-09-29 12:21:58'),
(33, 19, 'valid', 'developer.sazzad.me@gmail.com', 'GM_plan931811', '13', '2026-09-29 12:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `investor_notification`
--

CREATE TABLE `investor_notification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` enum('Yes','No') NOT NULL,
  `notification` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `investor_notification`
--

INSERT INTO `investor_notification` (`id`, `user_id`, `email`, `notification`) VALUES
(1, 16, 'Yes', 'No'),
(3, 19, 'Yes', 'Yes'),
(4, 19, 'Yes', 'Yes'),
(5, 20, 'Yes', 'Yes'),
(6, 18, 'Yes', 'Yes'),
(7, 21, 'Yes', 'Yes'),
(8, 22, 'Yes', 'Yes'),
(9, 23, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `lavels`
--

CREATE TABLE `lavels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `minimum_invest` varchar(50) NOT NULL,
  `minimum_withdrow` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `lavels`
--

INSERT INTO `lavels` (`id`, `name`, `minimum_invest`, `minimum_withdrow`, `date`) VALUES
(1, 'NewBee', '0', '0', '2023-03-15 11:04:42'),
(2, 'Bronges', '30000', '', '2023-03-15 11:04:42'),
(3, 'Silvar', '60000', '', '2023-03-15 11:05:34'),
(4, 'Gold', '100000', '', '2023-03-15 11:05:34'),
(5, 'Diamond', '1500000', '', '2023-03-15 11:06:16'),
(6, 'platinum', '200000', '', '2023-03-15 11:06:16'),
(7, 'Pro', '3000000', '', '2023-03-15 11:06:52'),
(8, 'Master', '500000', '', '2023-03-15 11:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `mainadmin`
--

CREATE TABLE `mainadmin` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `VerificationCode` varchar(50) NOT NULL,
  `wallat_withdrow_fee` float NOT NULL,
  `deposit_withdrow_fee` float NOT NULL,
  `Main_session` varchar(300) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `mainadmin`
--

INSERT INTO `mainadmin` (`id`, `Email`, `amount`, `Password`, `VerificationCode`, `wallat_withdrow_fee`, `deposit_withdrow_fee`, `Main_session`, `date`) VALUES
(1, 'smart444@gmail.com', '-9475546.61', '$2y$10$9uXZg.K060huzE/gx/TyluzPT1Og7AxBPG/zzRso7k9Zk4Oc8Zgwy', '123', 10, 50, 'GM_9c87656927ad3540b39735a60f9cd0f1', '2026-09-29 10:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `method_other_all`
--

CREATE TABLE `method_other_all` (
  `id` int(11) NOT NULL,
  `widrow_id` varchar(11) NOT NULL,
  `method_id` varchar(11) NOT NULL,
  `binnance_Network` text NOT NULL,
  `wallat_address` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `method_other_all`
--

INSERT INTO `method_other_all` (`id`, `widrow_id`, `method_id`, `binnance_Network`, `wallat_address`, `date`) VALUES
(7, '45', '3', 'oopoop', 'uiaghagdwgsbvakaghdgakghagaiaghd', '2023-03-12 21:12:25'),
(8, '46', '3', 'oopoop', 'uiaghagdwgsbvakaghdgakghagaiaghd', '2023-03-12 21:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `onlinestatus`
--

CREATE TABLE `onlinestatus` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Datetime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `onlinestatus`
--

INSERT INTO `onlinestatus` (`id`, `Email`, `Datetime`) VALUES
(1, 'developer.sazzad.me@gmail.com', '1790657942');

-- --------------------------------------------------------

--
-- Table structure for table `pakage_hold_investor`
--

CREATE TABLE `pakage_hold_investor` (
  `id` int(11) NOT NULL,
  `ins_id` varchar(255) DEFAULT NULL,
  `ins_email` varchar(255) DEFAULT NULL,
  `pakage_id` varchar(255) DEFAULT NULL,
  `plan_id` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentadd`
--

CREATE TABLE `paymentadd` (
  `id` int(11) NOT NULL,
  `UserId` varchar(50) NOT NULL,
  `Screenshoot` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `Method_id` int(11) NOT NULL,
  `Status` enum('proccing','unapproved','success','unseen') NOT NULL,
  `why_unapproved` text NOT NULL,
  `Ammount` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `paymentadd`
--

INSERT INTO `paymentadd` (`id`, `UserId`, `Screenshoot`, `email`, `Method_id`, `Status`, `why_unapproved`, `Ammount`, `date`) VALUES
(53, '16', 'GM_money_add_090af780e62219041fb7d970cf4eb7704f4dd989.png', 'sazzadrahath321@gmail.com', 6, 'success', '', '50000', '2023-03-13 12:49:06'),
(54, '17', 'GM_money_add_169dfc860290a26b4450664c35fd260018a7c569.png', 'info.dubaiabayamall@gmail.com', 6, 'success', '', '500', '2023-03-13 01:08:22'),
(55, '17', 'GM_money_add_c3292b998a6101bf626dc776fc3c8fd02aaeab23.png', 'info.dubaiabayamall@gmail.com', 6, 'success', '', '600', '2023-03-13 01:08:07'),
(56, '16', '', 'sazzadrahath321@gmail.com', 3, 'unseen', '0', '300', '2023-03-13 00:00:00'),
(57, '18', '', 'mamuntelecome@gmail.com', 3, 'success', '', '282', '2023-03-14 12:19:10'),
(58, '19', 'GM_money_add_2fd689f5d7ad5cd5a35221051263869abff6988a.png', 'developer.sazzad.me@gmail.com', 3, 'success', '', '3000', '2023-03-14 12:00:45'),
(59, '18', '', 'mamuntelecome@gmail.com', 3, 'success', '', '400', '2023-03-15 11:45:42'),
(60, '20', 'GM_money_add_2aefa006f80927edd4b12ae72fa4a00270462290.png', 'mdjonyahmed410@gmail.com', 3, 'success', '', '150', '2023-03-16 05:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `paymentwithdrow`
--

CREATE TABLE `paymentwithdrow` (
  `id` int(11) NOT NULL,
  `UserId` varchar(50) NOT NULL,
  `AccountNo` varchar(50) NOT NULL,
  `Method` varchar(100) NOT NULL,
  `amout_type` enum('Deposit','Profit') NOT NULL,
  `email` varchar(100) NOT NULL,
  `Status` enum('proccing','cancle','success','unseen') NOT NULL,
  `why_cancle` text NOT NULL,
  `Ammount` varchar(50) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `paymentwithdrow`
--

INSERT INTO `paymentwithdrow` (`id`, `UserId`, `AccountNo`, `Method`, `amout_type`, `email`, `Status`, `why_cancle`, `Ammount`, `Date`) VALUES
(40, '16', '01835558000', '6', 'Profit', 'sazzadrahath321@gmail.com', 'unseen', '0', '4.5', '2023-03-13 00:00:00'),
(41, '16', '01835558000', '6', 'Deposit', 'sazzadrahath321@gmail.com', 'unseen', '0', '250', '2023-03-13 00:00:00'),
(42, '16', '01835558000', '6', 'Deposit', 'sazzadrahath321@gmail.com', 'unseen', '0', '250', '2023-03-13 00:00:00'),
(43, '16', '01835558000', '6', 'Deposit', 'sazzadrahath321@gmail.com', 'unseen', '0', '250', '2023-03-13 00:00:00'),
(44, '16', '01835558000', '6', 'Deposit', 'sazzadrahath321@gmail.com', 'unseen', '0', '250', '2023-03-13 00:00:00'),
(45, '16', '444444444444', '3', 'Deposit', 'sazzadrahath321@gmail.com', 'unseen', '0', '250', '2023-03-13 00:00:00'),
(46, '16', '444444444444', '3', 'Deposit', 'sazzadrahath321@gmail.com', 'unseen', '0', '250', '2023-03-13 00:00:00'),
(47, '20', '01742215807', '1', 'Profit', 'mdjonyahmed410@gmail.com', 'success', '', '4.806', '2023-03-17 05:34:43'),
(48, '18', '01746556444', '1', 'Profit', 'mamuntelecome@gmail.com', 'success', '', '16.2', '2023-03-17 06:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `payment_add` enum('active','inactive') NOT NULL,
  `payment_withdrow` enum('active','inactive') NOT NULL,
  `account_number` varchar(300) NOT NULL,
  `sub_text` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `custom` varchar(255) DEFAULT NULL,
  `custom2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `name`, `payment_add`, `payment_withdrow`, `account_number`, `sub_text`, `icon`, `banner`, `date`, `custom`, `custom2`) VALUES
(1, 'Bkash', 'inactive', 'active', '01835558000', 'Bkash Parsonal', 'bkash-sm.png', 'Bkash.png', '2023-03-04 13:27:12', NULL, NULL),
(2, 'Nagod', 'inactive', 'active', '01835558999', 'Nagod Parsonal', 'nagod-sm.png', 'Nagod.png', '2023-03-04 13:27:12', NULL, NULL),
(3, 'Binance', 'active', 'active', 'TZ5NhoXeFxdXshAfotJHuLoti6NR2zCk55', 'Binance', 'binance-sm.png', 'binance.png', '2023-03-11 11:39:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tramsconditions`
--

CREATE TABLE `tramsconditions` (
  `id` int(11) NOT NULL,
  `SectionName` varchar(100) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_section`
--

CREATE TABLE `tutorial_section` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutsection`
--
ALTER TABLE `aboutsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsupports`
--
ALTER TABLE `adminsupports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allactivity`
--
ALTER TABLE `allactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allpakages`
--
ALTER TABLE `allpakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allplans`
--
ALTER TABLE `allplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_list`
--
ALTER TABLE `bank_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_section`
--
ALTER TABLE `banner_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_activity_cron`
--
ALTER TABLE `bonus_activity_cron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailybonusaddhistory`
--
ALTER TABLE `dailybonusaddhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq section`
--
ALTER TABLE `faq section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_section_boxes`
--
ALTER TABLE `faq_section_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hold_live_count`
--
ALTER TABLE `hold_live_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_admin_setting`
--
ALTER TABLE `important_admin_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_links_all`
--
ALTER TABLE `info_links_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ins_bank_withdrow_data`
--
ALTER TABLE `ins_bank_withdrow_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investoraccounts`
--
ALTER TABLE `investoraccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investordocs`
--
ALTER TABLE `investordocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investorplanpakages`
--
ALTER TABLE `investorplanpakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_notification`
--
ALTER TABLE `investor_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lavels`
--
ALTER TABLE `lavels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainadmin`
--
ALTER TABLE `mainadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `method_other_all`
--
ALTER TABLE `method_other_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlinestatus`
--
ALTER TABLE `onlinestatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakage_hold_investor`
--
ALTER TABLE `pakage_hold_investor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentadd`
--
ALTER TABLE `paymentadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentwithdrow`
--
ALTER TABLE `paymentwithdrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tramsconditions`
--
ALTER TABLE `tramsconditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial_section`
--
ALTER TABLE `tutorial_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutsection`
--
ALTER TABLE `aboutsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminsupports`
--
ALTER TABLE `adminsupports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allactivity`
--
ALTER TABLE `allactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `allpakages`
--
ALTER TABLE `allpakages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `allplans`
--
ALTER TABLE `allplans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_list`
--
ALTER TABLE `bank_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_section`
--
ALTER TABLE `banner_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bonus_activity_cron`
--
ALTER TABLE `bonus_activity_cron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `dailybonusaddhistory`
--
ALTER TABLE `dailybonusaddhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `faq section`
--
ALTER TABLE `faq section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_section_boxes`
--
ALTER TABLE `faq_section_boxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hold_live_count`
--
ALTER TABLE `hold_live_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `important_admin_setting`
--
ALTER TABLE `important_admin_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info_links_all`
--
ALTER TABLE `info_links_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ins_bank_withdrow_data`
--
ALTER TABLE `ins_bank_withdrow_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investoraccounts`
--
ALTER TABLE `investoraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `investordocs`
--
ALTER TABLE `investordocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `investorplanpakages`
--
ALTER TABLE `investorplanpakages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `investor_notification`
--
ALTER TABLE `investor_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lavels`
--
ALTER TABLE `lavels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mainadmin`
--
ALTER TABLE `mainadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `method_other_all`
--
ALTER TABLE `method_other_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `onlinestatus`
--
ALTER TABLE `onlinestatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pakage_hold_investor`
--
ALTER TABLE `pakage_hold_investor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentadd`
--
ALTER TABLE `paymentadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `paymentwithdrow`
--
ALTER TABLE `paymentwithdrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tramsconditions`
--
ALTER TABLE `tramsconditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutorial_section`
--
ALTER TABLE `tutorial_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
