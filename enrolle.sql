-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2017 at 11:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tz`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrolle`
--

CREATE TABLE `enrolle` (
  `id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `last_name` varchar(44) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '1',
  `group_num` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `points` int(3) NOT NULL,
  `birth_date` date NOT NULL,
  `resident` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrolle`
--

INSERT INTO `enrolle` (`id`, `name`, `last_name`, `gender`, `group_num`, `email`, `points`, `birth_date`, `resident`) VALUES
(1, 'Alex', 'Tix', 1, '7', 'test@test.ru', 20, '2000-10-10', 0),
(2, 'Alex', 'Tix', 1, '7', 'test2@test.ru', 100, '1990-10-10', 1),
(3, 'Сергей', 'Иванов', 1, '2', 't2@test.ru', 20, '2000-09-20', 1),
(5, 'Мария', 'Смирнова', 0, '4б', 'test3@test.ru', 20, '1999-01-01', 0),
(8, 'Петр', 'Пелегрим', 1, '7б', 'pel@gmail.com', 100, '1990-10-10', 0),
(9, 'Test', 'Test', 1, '22', 'w2w2@sws.ss', 100, '1990-10-10', 1),
(10, 'Пол', 'Льюис', 1, '6', 'pok@hh.tt', 200, '1990-10-10', 0),
(11, 'Ваня2', 'Овало', 1, '33', 'val@aa.vv', 200, '1990-10-10', 1),
(13, 'Тома', 'Мороз', 0, '2ЛЛЛ', 'www@ww.ee', 300, '1990-10-10', 1),
(14, 'Вадим', 'Иванов', 1, '2Ц8Ц', 'qqq@ww.ee', 100, '1990-10-10', 1),
(15, 'Максим', 'Балу', 1, 'РТ23', 'maxt@gmail.com', 23, '1990-10-10', 0),
(16, 'Иван', 'Смирнов', 1, '24к', 'job_tix@mail.ru', 200, '1990-10-10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolle`
--
ALTER TABLE `enrolle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrolle`
--
ALTER TABLE `enrolle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
