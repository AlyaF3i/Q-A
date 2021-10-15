-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 12:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qa`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id_comment` int(5) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `id` int(4) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id_comment`, `answer`, `id`, `username`) VALUES
(1, 'INSERT into Table_Name VALUES()', 1, 'Tarik'),
(2, 'by using Kali Linux because it\'s good OS for hacking', 2, 'Tarik'),
(3, 'buy a box of brownie powder and just cook it', 4, 'Tarik'),
(4, 'Insert into table_NAME(name) values(\'hi\')', 1, 'Tarik'),
(5, 'add a lot of sugar', 4, 'Tarik'),
(6, 'Go look it up in the statistics book', 9, 'Tarik'),
(7, 'standard to the power 2 is the variance', 9, 'Hali'),
(8, 'Give him a toy', 5, 'Tarik'),
(9, 'create table', 1, 'salem'),
(10, 'it is a hard question', 2, 'salem'),
(11, 'meditate :)', 3, 'salem'),
(12, 'Watch a youtube video on how to make brownies', 4, 'Ahmad'),
(13, 'by watching youtube ', 4, 'salem'),
(14, 'If you can afford it and you feel like its a suitable phone then why not', 10, 'Ahmad'),
(15, 'give him chocolate  ', 5, 'salem'),
(16, 'Mean : add up all the numbers, then divide by how many numbers there are.\r\nVariance : Google it \r\nStandard deviation: Google it ', 9, 'Ahmad'),
(17, 'Ask a garden designer to help you design your garden, or look up to some ideas on the internet ', 8, 'Ahmad'),
(18, 'My favorite color is blue', 11, 'Ahmad'),
(19, 'Think about something catchy ', 3, 'Ahmad'),
(20, 'Let them cry ', 5, 'Ahmad'),
(21, 'Insert INTO test(test1,test2) VALUES(testvalue1,testvalue2);', 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(4) NOT NULL,
  `title` varchar(64) NOT NULL,
  `question` varchar(300) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `title`, `question`, `username`) VALUES
(1, 'SQL', 'How can I insert data to a table', 'Tarik'),
(2, 'Hacking', 'How can I fetch the IPs of people using the same internet I use.', 'Tarik'),
(3, 'Writing', 'how to pick a book title???', 'Tarik'),
(4, 'Cooking', 'how can make a delicious brownie', 'Tarik'),
(5, 'Childs', 'My kid is crying non-stop what can I do for him to shut him up', 'Tarik'),
(6, 'Laptops', 'I am a freshman student and I want to buy a laptop is there any suggestions?', 'Tarik'),
(8, 'Garden', 'Hello My name is Daniel,\r\n\r\nI have a question which is what is the best way of designing a garden', 'Tarik'),
(9, 'Statistics', 'How I can find the mean, variance, and standard deviation  ', 'Tarik'),
(10, 'Iphone 11', 'Should I buy Iphone 11', 'Ganka'),
(11, 'colour', 'what is your favorite colour?', 'salem'),
(12, 'Food', 'What application provides fast food delivery ?', 'Ahmad'),
(13, 'PHP Sessions', 'Do I have to start session in each page or is it enough to add it once?', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `gender` set('male','female') NOT NULL,
  `language` set('arabic','english') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `pass`, `gender`, `language`) VALUES
('Ahmad', 'Ahmad13@gmail.com', '123456789ahmad', 'male', ''),
('Ganka', 'ddaannddoonnaa@gmail.com', 'sdS81696', 'female', ''),
('Hali', 'Hali_1@hali.com', '123', 'female', ''),
('salem', 'salemsalem98@gmail.com', '1998', 'male', ''),
('Tarik', 'asdf@yahoo.com', '123', 'male', ''),
('test', 'test@test.com', '123', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id_comment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
