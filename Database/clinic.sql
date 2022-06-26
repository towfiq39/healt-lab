-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 08:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_doctor`
--

CREATE TABLE `add_doctor` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_details` text NOT NULL,
  `doc_pic` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `con_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`doc_id`, `doc_name`, `doc_email`, `doc_details`, `doc_pic`, `pass`, `con_pass`) VALUES
(1, ' B.D.C Dr. Md. Farhan Akhtar', 'farhan@gmail.com', ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium amet iusto, similique tenetur nisi eos repudiandae eius aut, debitis repellendus nobis nemo accusantium porro! Deleniti temporibus laboriosam in eveniet recusandae? ', '../images/doctorimage/img-2.jpg', '$2y$10$a187FLDEb4Evm0iFMjOuGe4P4g41fN0sUMPPsthrb6iV.zVcZQS2a', '$2y$10$OboteHs3cg8ej/0E1uaaWOLgv8bCWnZRaFUVp0EFYOECtCHqDG4eW'),
(2, ' BCS Most. Munira Yeasmin', 'munira@gmail.com', ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates assumenda iste voluptatem explicabo a sint dignissimos odit ipsum vel minus. Velit maxime ex odit exercitationem earum voluptatibus temporibus aliquam at! ', '../images/doctorimage/img-3.jpg', '$2y$10$3/rbuaRJydIQqrR51cgw9ur35v0JjOrz7FS2qMgIZw3aiNHJhbWoa', '$2y$10$DBi/ylx8Nwc2dRslk27JTuYwmR5ua.hTSMPS.xccAacfcJWzxVueC'),
(3, ' BFC Aisha siddika', 'aisha@gmail.com', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima facere quos officia esse. Quos harum quae at iure odio molestias obcaecati necessitatibus temporibus ipsam dolore quasi nulla facere voluptates excepturi unde, ipsa saepe. Ducimus, ullam. ', '../images/doctorimage/img-1.jpg', '$2y$10$yu0abkf51H6sEaDu9Y57l.Z.82yWLwlrNTcyVhY6lmZdO86ByOrJW', '$2y$10$fSDAEWbTAjzubi/4VKoNZOKeEyITTZ25kv6gzFzterSb5BsC9buNe');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_appoinment`
--

CREATE TABLE `book_appoinment` (
  `appointment_id` int(11) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `pat_email` varchar(255) NOT NULL,
  `pat_number` varchar(20) NOT NULL,
  `pat_gender` varchar(255) NOT NULL,
  `appoinment_date` varchar(255) NOT NULL,
  `appoinment_time` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `confirmation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_appoinment`
--

INSERT INTO `book_appoinment` (`appointment_id`, `pat_name`, `pat_email`, `pat_number`, `pat_gender`, `appoinment_date`, `appoinment_time`, `dept`, `doc_name`, `confirmation`) VALUES
(1, 'Towfiq Imroz', 'imrosetowfik@gmail.com', '01311425570', 'Male', '2021-05-30', '6:00 PM to 10:00 PM', 'Dermatologist', 'B.D.C Dr. Md. Farhan Akhtar', 'active'),
(2, 'WebDev Towfiq', 'imrosetowfik@gmail.com', '01717866830', 'Male', '2021-05-30', '6:00 PM to 10:00 PM', 'Dermatologist', 'BCS Most. Munira Yeasmin', 'active'),
(3, 'kuet', 'imroz1921039@stud.kuet.ac.bd', '01717866830', 'Male', '2021-05-29', '6:00 PM to 10:00 PM', 'Orthology', 'BFC Aisha siddika', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `pat_regestration`
--

CREATE TABLE `pat_regestration` (
  `pat_id` int(11) NOT NULL,
  `pat_email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pat_pass` varchar(255) NOT NULL,
  `pat_con_pass` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_regestration`
--

INSERT INTO `pat_regestration` (`pat_id`, `pat_email`, `status`, `pat_pass`, `pat_con_pass`, `token`) VALUES
(1, 'imrosetowfik@gmail.com', 'active', '$2y$10$KuJzJ6jadH6nFUQou5v0mu.XycQ4/gK7DktTXQb9J2sjdDalQvVlO', '$2y$10$z8.G/hhM4lkq./fLO8NsPem59ti1bYDg4CUkiZtFl7bfm89ZIgOXG', ''),
(2, 'imroz1921039@stud.kuet.ac.bd', 'active', '$2y$10$CkCR8w8wUS1nBc/XUx.N0OtlzqPWeVs2.U8QPUweGyhxIfDY0kPUC', '$2y$10$n3IiGzfpKt6xfvJwwosn8u4AUkCLkmgCViv84O2gYvLiultmNgrRW', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `pat_email` varchar(255) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `pat_id`, `pat_email`, `query`) VALUES
(1, 1, 'imrosetowfik@gmail.com', 'How can i reset my password?'),
(2, 9, 'imrosetowfik2@gmail.com', 'hiii'),
(3, 9, 'imrosetowfik2@gmail.com', 'how are you'),
(4, 9, 'imrosetowfik2@gmail.com', 'what are you doing here');

-- --------------------------------------------------------

--
-- Table structure for table `query_reply`
--

CREATE TABLE `query_reply` (
  `query_reply_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `query_reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query_reply`
--

INSERT INTO `query_reply` (`query_reply_id`, `pat_id`, `query_reply`) VALUES
(1, 1, 'Go to change password page'),
(2, 9, 'hello'),
(3, 9, 'fine and you ?'),
(4, 9, 'nothing can you stop right now'),
(5, 1, 'welcome'),
(6, 1, 'nice to meet you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doctor`
--
ALTER TABLE `add_doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book_appoinment`
--
ALTER TABLE `book_appoinment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `pat_regestration`
--
ALTER TABLE `pat_regestration`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `query_reply`
--
ALTER TABLE `query_reply`
  ADD PRIMARY KEY (`query_reply_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doctor`
--
ALTER TABLE `add_doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_appoinment`
--
ALTER TABLE `book_appoinment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pat_regestration`
--
ALTER TABLE `pat_regestration`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `query_reply`
--
ALTER TABLE `query_reply`
  MODIFY `query_reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
