-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 06:00 PM
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
-- Database: `okok`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(50) DEFAULT NULL,
  `image_categorie` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `id_type_client` int(11) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` datetime NOT NULL,
  `statut` varchar(15) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `composer_formule`
--

CREATE TABLE `composer_formule` (
  `id_formule` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `quantité` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `constituant`
--

CREATE TABLE `constituant` (
  `id_constituant` int(11) NOT NULL,
  `nom_constituant` varchar(100) NOT NULL,
  `description_constituant` varchar(500) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formule`
--

CREATE TABLE `formule` (
  `id_formule` int(11) NOT NULL,
  `nom_formule` varchar(150) NOT NULL,
  `prix` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_ligne_commande` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_formule` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ligne_commande_constituant`
--

CREATE TABLE `ligne_commande_constituant` (
  `id_ligne_commande_constituant` int(11) NOT NULL,
  `id_ligne_commande` int(11) DEFAULT NULL,
  `id_constituant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_client`
--

CREATE TABLE `type_client` (
  `id_type_client` int(11) NOT NULL,
  `nom_type_client` varchar(50) NOT NULL,
  `comm_type_client` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `username`) VALUES
(1, 'MHIMDEN', 'WADIE');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(30) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `droits` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fisrtname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `pass`, `droits`, `email`, `fisrtname`) VALUES
('allo', 'aloooo', 'public', '', ''),
('amine', 'ALOOIIINNN', 'public', 'amine@gmail.com', 'mh'),
('fooooownwnnw', 'opppsss', 'public', 'oppss@gmail.fr', 'aljdkakadj'),
('gucci', 'gucci', 'admin', 'gucci@gmail.com', 'gucci'),
('hahaahahaha', 'kokokokoko', 'public', '', ''),
('hahahg', 'wadie', 'mh', '', ''),
('ILYAS', 'paswww', 'public', 'mm@gmail.com', 'OK'),
('ISMAIL', 'ISMAIL', 'public', '', ''),
('ITSME', 'THATMY PASS', 'public', '', ''),
('lets ', 'lovers', 'public', 'for@how.com', 'be'),
('LOOOOOOOOOL', 'NOOOOOOOOOOOOOOON', 'public', '', ''),
('louis', 'louis', 'public', 'louis@gmail.com', 'louis'),
('lqfsijfqksg', 'liqsfgisq', 'jgajgd', '', ''),
('MHIMDEN', 'MEMEMEME', 'STUDENT', '', ''),
('NEWSTUFf', 'yes it is', 'public', '', ''),
('NNNNNNNNNNN', 'NNNNNNNNNNN', 'public', '', ''),
('NOPE', 'NOPE', 'public', '', ''),
('okay', 'okay', 'public', '', ''),
('OKOKOKOK', 'OKOKOKOKOKOKO', 'public', '', ''),
('SARAH', 'SARAH', 'public', '', ''),
('sddsds', 'dfsdds', 'josdshn@example.com', '', ''),
('USERNAMas', 'mmma', 'public', '', ''),
('USERNAME', 'PASSWORD', 'public', '', ''),
('whataboutnow', 'be gentre', 'public', 'email@hhh.hhh', 'what'),
('WHATSSS', 'NOOSSMMML', 'public', '', ''),
('wwww', 'mememe', 'okayaya@example.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `login` (`login`),
  ADD KEY `id_type_client` (`id_type_client`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `composer_formule`
--
ALTER TABLE `composer_formule`
  ADD PRIMARY KEY (`id_formule`,`id_categorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indexes for table `constituant`
--
ALTER TABLE `constituant`
  ADD PRIMARY KEY (`id_constituant`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indexes for table `formule`
--
ALTER TABLE `formule`
  ADD PRIMARY KEY (`id_formule`);

--
-- Indexes for table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id_ligne_commande`),
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_formule` (`id_formule`);

--
-- Indexes for table `ligne_commande_constituant`
--
ALTER TABLE `ligne_commande_constituant`
  ADD PRIMARY KEY (`id_ligne_commande_constituant`),
  ADD KEY `id_ligne_commande` (`id_ligne_commande`),
  ADD KEY `id_constituant` (`id_constituant`);

--
-- Indexes for table `type_client`
--
ALTER TABLE `type_client`
  ADD PRIMARY KEY (`id_type_client`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `constituant`
--
ALTER TABLE `constituant`
  MODIFY `id_constituant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formule`
--
ALTER TABLE `formule`
  MODIFY `id_formule` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id_ligne_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_client`
--
ALTER TABLE `type_client`
  MODIFY `id_type_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`login`) REFERENCES `utilisateur` (`login`),
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`id_type_client`) REFERENCES `type_client` (`id_type_client`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Constraints for table `composer_formule`
--
ALTER TABLE `composer_formule`
  ADD CONSTRAINT `composer_formule_ibfk_1` FOREIGN KEY (`id_formule`) REFERENCES `formule` (`id_formule`),
  ADD CONSTRAINT `composer_formule_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Constraints for table `constituant`
--
ALTER TABLE `constituant`
  ADD CONSTRAINT `constituant_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Constraints for table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`id_formule`) REFERENCES `formule` (`id_formule`);

--
-- Constraints for table `ligne_commande_constituant`
--
ALTER TABLE `ligne_commande_constituant`
  ADD CONSTRAINT `ligne_commande_constituant_ibfk_1` FOREIGN KEY (`id_ligne_commande`) REFERENCES `ligne_commande` (`id_ligne_commande`),
  ADD CONSTRAINT `ligne_commande_constituant_ibfk_2` FOREIGN KEY (`id_constituant`) REFERENCES `constituant` (`id_constituant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
