-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 22 Αυγ 2017 στις 20:06:20
-- Έκδοση διακομιστή: 5.6.24
-- Έκδοση PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `eksoda`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `eksoda`
--

CREATE TABLE IF NOT EXISTS `eksoda` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `selected` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=335 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `eksoda`
--

INSERT INTO `eksoda` (`id`, `date`, `comment`, `selected`, `price`) VALUES
(315, '2017-06-11', '672', 'moto', 622),
(316, '2017-06-11', '88', 'moto', 88),
(317, '2017-06-11', 'fd', 'car', 56),
(320, '2017-06-08', '33', 'general', 33),
(322, '2017-06-08', '78', 'car', 78),
(328, '2017-06-07', 'df ÏƒÎ´Î±Ï†Ïƒ', 'car', 435),
(330, '2017-08-11', '354', 'car', 54),
(331, '2017-08-11', '354', 'car', 54),
(332, '2017-08-18', 'fsda', 'car', 444),
(334, '2017-08-26', '78787', 'car', 78787);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `eksoda1`
--

CREATE TABLE IF NOT EXISTS `eksoda1` (
  `timi` int(3) NOT NULL,
  `mera` date NOT NULL,
  `sxolia` text NOT NULL,
  `aa` int(11) NOT NULL,
  `a1` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `eksoda1`
--

INSERT INTO `eksoda1` (`timi`, `mera`, `sxolia`, `aa`, `a1`) VALUES
(2, '2017-07-12', '2017-07-04', 1, 315),
(184, '2017-07-05', '2017-07-12', 2, 316),
(78, '2017-07-13', 'fs', 3, 317);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `eksoda2`
--

CREATE TABLE IF NOT EXISTS `eksoda2` (
  `aa` int(11) NOT NULL,
  `sxolia` text NOT NULL,
  `a2` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `eksoda2`
--

INSERT INTO `eksoda2` (`aa`, `sxolia`, `a2`) VALUES
(1, 'sxoliazw', 315),
(2, 'sxoliazw', 316),
(3, 'ssafds', 316),
(4, 'sfdfsd', 317);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `eksoda`
--
ALTER TABLE `eksoda`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `eksoda1`
--
ALTER TABLE `eksoda1`
  ADD PRIMARY KEY (`aa`);

--
-- Ευρετήρια για πίνακα `eksoda2`
--
ALTER TABLE `eksoda2`
  ADD PRIMARY KEY (`aa`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `eksoda`
--
ALTER TABLE `eksoda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=335;
--
-- AUTO_INCREMENT για πίνακα `eksoda1`
--
ALTER TABLE `eksoda1`
  MODIFY `aa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT για πίνακα `eksoda2`
--
ALTER TABLE `eksoda2`
  MODIFY `aa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
