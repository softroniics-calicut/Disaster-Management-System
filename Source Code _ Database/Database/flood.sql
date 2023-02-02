-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 09:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flood`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_tb`
--

CREATE TABLE `area_tb` (
  `area_id` int(20) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_tb`
--

INSERT INTO `area_tb` (`area_id`, `area`) VALUES
(1, 'kozhikode'),
(2, 'kannur'),
(3, 'malappuram');

-- --------------------------------------------------------

--
-- Table structure for table `camp_tb`
--

CREATE TABLE `camp_tb` (
  `camp_id` int(20) NOT NULL,
  `camp_name` varchar(20) NOT NULL,
  `area_id` int(20) NOT NULL,
  `land_mark` varchar(20) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `camp_org_name` varchar(20) NOT NULL,
  `facilities` varchar(100) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp_tb`
--

INSERT INTO `camp_tb` (`camp_id`, `camp_name`, `area_id`, `land_mark`, `taluk`, `camp_org_name`, `facilities`, `phone_no`, `email`) VALUES
(1, 'cc1', 1, 'near campus ghss', 'aaaaaaaa', 'corg', 'aaaaaaaa', '8281649855', 'camp@gmsil.com'),
(2, 'nadakavu', 1, 'civil', 'calicut', 'corg', 'aaaaaaaa', '8281649855', 'camp@gmsil.com');

-- --------------------------------------------------------

--
-- Table structure for table `collection_tb`
--

CREATE TABLE `collection_tb` (
  `collection_id` int(20) NOT NULL,
  `materials_collected` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_tb`
--

CREATE TABLE `comment_tb` (
  `comment_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `notify_id` int(10) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_tb`
--

INSERT INTO `comment_tb` (`comment_id`, `login_id`, `notify_id`, `comments`) VALUES
(1, 5, 2, 'sfdfsd'),
(2, 5, 2, 'dfgsfdg'),
(3, 2, 3, 'sdfsdf'),
(4, 2, 3, 'fgfdgg'),
(5, 2, 3, 'fgfdgg'),
(6, 2, 1, 'fgdgd'),
(7, 5, 6, 'asasas'),
(8, 5, 6, 'asasa'),
(9, 5, 6, 'dsdsdsd'),
(10, 5, 6, 'dsdsdsd'),
(11, 1, 3, 'sdffggfg');

-- --------------------------------------------------------

--
-- Table structure for table `guest_tb`
--

CREATE TABLE `guest_tb` (
  `guest_id` int(10) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `approve_status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_tb`
--

INSERT INTO `guest_tb` (`guest_id`, `login_id`, `name`, `mobile_no`, `email_id`, `approve_status`) VALUES
(3, 36, 'qazxc', '6565656565', 'maneesh.futura@gmail.com', 1),
(4, 37, 'nandhitha', '9846168880', 'nandhithadineshkk@gmail.com', 1),
(5, 42, 'ajithkumar', '4747474741', 'ajithkumar@gmail.com', 1),
(6, 43, 'jijosh', '5552132152', 'ckjijosh@gmai.com', 1),
(7, 44, 'maneeshkchandran', '7894563210', 'maneesh.futura@gmail.com', 1),
(8, 45, 'ksdsdfdsjhfi', '4569873125', 'ckjijosh@gmail.com', 1),
(9, 46, 'jijoshck', '6565545654', 'jojo@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `health_requirements`
--

CREATE TABLE `health_requirements` (
  `health_co_id` int(20) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `required_medicine` varchar(100) NOT NULL,
  `count` int(20) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `contact_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_requirements`
--

INSERT INTO `health_requirements` (`health_co_id`, `doctor_name`, `dept_name`, `required_medicine`, `count`, `hospital_name`, `contact_info`) VALUES
(1, '$dr', '$dept_nm', '$req_m', 0, '$h_n', '$cntct_info'),
(2, 'qqq', 'hhhhhhhh', 'w', 1, 'qqq', 'mnnjnjnjnj');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `user_name`, `password`, `type`) VALUES
(1, 'police', '1111', 'police'),
(3, 'admin', '000', 'admin'),
(4, 'manu', '6060', 'guest'),
(5, 'cog', '4444', 'camporganizer'),
(6, 'rahul', 'rahul', 'camporganizer'),
(7, '', '', '4'),
(8, '', '', 'camporganizer'),
(9, 'sdjfgiweugbfv', '465464', 'camporganizer'),
(36, 'qazxc', '2020', 'guest'),
(37, 'nandhu', '12345678', 'guest'),
(38, 'collector', '5555', 'collector'),
(39, 'collector', '5555', 'collector'),
(40, 'health', '6666', 'healthcoordinator'),
(41, 'manumanu', '5454', 'camporganizer'),
(42, 'aji', '4545', 'guest'),
(43, 'jojo', '4545', 'guest'),
(44, 'manesshkc', '4654', 'guest'),
(45, 'sdfsafafsadf', 'asdfasf', 'guest'),
(46, 'jojo', '5050', 'guest'),
(47, 'shamju', '123123', 'camporganizer');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tb`
--

CREATE TABLE `notification_tb` (
  `notify_id` int(20) NOT NULL,
  `camp_id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_tb`
--

INSERT INTO `notification_tb` (`notify_id`, `camp_id`, `title`, `message`) VALUES
(1, 1, 'alert', 'llllllllllllllg'),
(2, 2, 'dfgfgdfg', 'kjhgjhf'),
(3, 2, 'alert', 'escape'),
(4, 6, 'aaaaaaaaaaaaaaaaaa', 'aasasas'),
(5, 6, 'aaaaaaaaaaaaaaaaaa', 'aasasas'),
(6, 3, 'aaasdd', 'aaaaaaaaaaaxxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `register_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area_id` int(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `login_id` int(20) NOT NULL,
  `approve_status` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`register_id`, `name`, `area_id`, `phone_no`, `email_id`, `login_id`, `approve_status`) VALUES
(1, 'police', 1, '9633325215', 'police@gmail.com', 1, 0),
(2, 'corg', 1, '8281649855', 'camdp@gmsil.com', 5, 1),
(3, 'rahul', 1, '8281465232', 'rahul@gmail.com', 6, 1),
(4, 'camporg', 1, '6598745896', '', 7, 0),
(5, 'asdaassa', 1, '3699985877', 'djsfakkkkkkkfkhl@gmail.com', 9, 1),
(20, 'manumanu', 1, '5544661122', 'maneeshchandran28@gmail.com', 27, 1),
(27, 'collector', 1, '9633325216', 'collectosrofficial@gmail.com', 39, 1),
(28, 'HealthCoordinator', 1, '9633325286', 'manedesh4@gmail.com', 40, 1),
(29, 'manumanu', 3, '3232323232', 'manumaanu@gmail.com', 41, 1),
(30, 'shamjad', 3, '9898989874', 'shamju@gmail.com', 47, 1);

-- --------------------------------------------------------

--
-- Table structure for table `requirements_tb`
--

CREATE TABLE `requirements_tb` (
  `requirement_id` int(20) NOT NULL,
  `materials_required` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements_tb`
--

INSERT INTO `requirements_tb` (`requirement_id`, `materials_required`, `quantity`) VALUES
(1, '', 0),
(2, 'qq', 0),
(3, 'wwwwwwwwwwwwwww', 10);

-- --------------------------------------------------------

--
-- Table structure for table `service_tb`
--

CREATE TABLE `service_tb` (
  `service_id` int(10) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_tb`
--

INSERT INTO `service_tb` (`service_id`, `heading`, `service`) VALUES
(5, 'lkjh', 'maneesh'),
(6, 'ijnh', 'ljkhjghjffhgj'),
(7, 'wewewewe', 'mnbhghjdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `victim_tb`
--

CREATE TABLE `victim_tb` (
  `register_id` int(20) NOT NULL,
  `area_id` int(20) NOT NULL,
  `camp_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `house_no` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `member_in_house` int(20) NOT NULL,
  `members_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `victim_tb`
--

INSERT INTO `victim_tb` (`register_id`, `area_id`, `camp_id`, `name`, `address`, `house_no`, `gender`, `phone_no`, `email_id`, `member_in_house`, `members_details`) VALUES
(5, 1, 1, 'maneesh', 'aaaaaaaaaaaaaaaaaaaaaa', 102, 'Male', '2147483647', 'maneesh@gmail.com', 12, ''),
(6, 2, 2, 'dh', 'aaaaaaaaaaaaaahddddddddddddddddddbcbc', 123, 'Male', '2147483647', 'fgshfgh@gmail.com', 12, ''),
(7, 1, 3, 'dh', 'sdddddd', 0, 'Male', '2147483647', 'maneesh@gmail.com', 12, ''),
(8, 2, 2, 'asd', 'lkkjhgg', 54, 'Male', '2147483647', 'fgshfgh@gmail.com', 12, ''),
(9, 2, 0, 'ksdjhfi', 'as', 1, 'Male', '2147483647', 'masneesh@gmail.com', 12, ''),
(10, 2, 5, 'dgf', 'dfdsfdf', 12, 'male', '4565987845', 'dsdsfsd@g.c', 10, ''),
(11, 5, 5, 'dfsf', 'sgrrgrg', 65, 'male', '5446879', 'ewewrwr@g.com', 54, ''),
(12, 6, 6, 'sfdsf', 'sdfsf', 66, 'male', '548796212', 'kshdfsg@g.c', 54, ''),
(13, 5, 9, 'sdafcvz', 'hgfdh', 45, 'male', '8978946546', 'aafsdflll@g.c', 6, ''),
(14, 5, 6, 'sfgrrrrr', 'sdfsafdsaf', 45, 'male', '46546546', 'ljdfjldf@g.c', 45, ''),
(15, 9, 3, 'kjdlghsdfs', 'oieuripqwyr', 5, 'male', '4689799', 'ljalsdhsa@g.c', 5, ''),
(16, 1, 1, 'vivek', 'kjghlafjkdgsgsgfsdgfsdg', 102, 'Female', '2121213698', 'vivek@gmail.com', 4, 'dad,52,mom,48,bro,25,sis,20'),
(17, 1, 1, 'golden', 'sdfgdsgsdgf', 102, 'Male', '6666666666', 'golden@gmail.com', 3, 'dadd-55-bro-18-mom-50'),
(18, 1, 0, 'qwertyu', 'fghdfhgfd', 102, 'Male', '9733325215', 'fgsdfggggfghfgh@gmail.com', 3, ''),
(19, 1, 1, 'irshad', 'dsfgdgfdsgdsg', 1, 'Male', '9637325215', 'fgsdfgsdghfgh@gmail.com', 5, 'dadd,50,sis,18,bro,20,daddy,55,mom,40'),
(20, 1, 0, 'babu', 'nadakavu po', 123, 'Male', '6282303212', 'maneesh1@gmail.com', 3, 'babu,50'),
(21, 1, 1, 'vijaykrishna', 'ksjgdlkafdjgjksladgdgasfgdsljkf', 10, 'Male', '3265982536', 'vijaykrishna@gmail.com', 3, 'mom:20,mommy:40,daddy:50,bro:18,dadd:30,'),
(22, 1, 1, 'vicky', 'sdlnsgjkfb.jbsdg', 12, 'Male', '9677325215', 'vicky@gmail.com', 4, 'dadd:50,sis:20,bro:18,mom:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_tb`
--
ALTER TABLE `area_tb`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `camp_tb`
--
ALTER TABLE `camp_tb`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `collection_tb`
--
ALTER TABLE `collection_tb`
  ADD PRIMARY KEY (`collection_id`);

--
-- Indexes for table `comment_tb`
--
ALTER TABLE `comment_tb`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `guest_tb`
--
ALTER TABLE `guest_tb`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `health_requirements`
--
ALTER TABLE `health_requirements`
  ADD PRIMARY KEY (`health_co_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `notification_tb`
--
ALTER TABLE `notification_tb`
  ADD PRIMARY KEY (`notify_id`);

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `requirements_tb`
--
ALTER TABLE `requirements_tb`
  ADD PRIMARY KEY (`requirement_id`);

--
-- Indexes for table `service_tb`
--
ALTER TABLE `service_tb`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `victim_tb`
--
ALTER TABLE `victim_tb`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_tb`
--
ALTER TABLE `area_tb`
  MODIFY `area_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `camp_tb`
--
ALTER TABLE `camp_tb`
  MODIFY `camp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collection_tb`
--
ALTER TABLE `collection_tb`
  MODIFY `collection_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_tb`
--
ALTER TABLE `comment_tb`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guest_tb`
--
ALTER TABLE `guest_tb`
  MODIFY `guest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `health_requirements`
--
ALTER TABLE `health_requirements`
  MODIFY `health_co_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `notification_tb`
--
ALTER TABLE `notification_tb`
  MODIFY `notify_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `register_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `requirements_tb`
--
ALTER TABLE `requirements_tb`
  MODIFY `requirement_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_tb`
--
ALTER TABLE `service_tb`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `victim_tb`
--
ALTER TABLE `victim_tb`
  MODIFY `register_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
