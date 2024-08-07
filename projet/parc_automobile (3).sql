-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 09:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parc_automobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `num_demande` int(11) NOT NULL,
  `id_employe` int(20) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `service` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `distance` varchar(10) NOT NULL,
  `cause` varchar(10) NOT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `date_debut` date NOT NULL,
  `heure_debut` time DEFAULT NULL,
  `date_fin` date NOT NULL,
  `heure_fin` time DEFAULT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`num_demande`, `id_employe`, `nom`, `prenom`, `service`, `date`, `distance`, `cause`, `destination`, `date_debut`, `heure_debut`, `date_fin`, `heure_fin`, `etat`) VALUES
(15, 234654, 'Boukhalfa', 'Tarek', 'approvisionnement', '2023-07-05', '789 KM', 'travail', 'Oran', '2023-07-04', '08:00:00', '2023-07-04', '16:00:00', 'accepte'),
(16, 564543, 'Salhi', 'Imadeddine', 'approvisionnement', '2023-06-24', '88998', 'travail', 'Alger Centre', '2023-07-07', '10:00:00', '2023-07-08', '15:00:00', 'refuse'),
(17, 9900089, 'Boudaoud', 'Lila', 'approvisionnement', '2023-06-25', '87879', 'travail', 'Kouba', '2023-07-04', '09:00:00', '2023-07-04', '16:00:00', 'accepte'),
(18, 999809, 'Ouragh', 'Nawel', 'approvisionnement', '2023-06-24', '8765km', 'travail', 'bir mourad rais', '2023-07-06', '09:00:00', '2023-07-07', '11:00:00', 'accepte'),
(20, 999809, 'Ouragh', 'Nawel', 'approvisionnement', '2023-06-20', '8765km', 'travail', NULL, '2023-06-22', '08:00:19', '2023-06-24', '15:00:00', 'accepte'),
(22, 999809, 'Ouragh', 'Nawel', 'app', '2023-02-01', '6463553', 'profession', 'alger', '2023-07-27', '10:05:00', '2023-07-29', '10:05:00', 'en attente'),
(21, 0, '0000', '0000', '', '0000-00-00', '', '', NULL, '0000-00-00', NULL, '0000-00-00', NULL, 'refuse'),
(23, 999809, 'ouragh', 'nawel', 'approvisionnemet', '2023-07-04', 'cette demq', 'personnel', 'Alger', '2023-07-04', '02:29:00', '2023-07-11', '11:32:00', 'refuse');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `numreservation` int(11) NOT NULL,
  `id_chauff` varchar(25) NOT NULL,
  `id_employee` varchar(25) NOT NULL,
  `mat_vehicule` varchar(25) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`numreservation`, `id_chauff`, `id_employee`, `mat_vehicule`, `date_debut`, `date_fin`, `destination`) VALUES
(3, '91274', '999809', '08585311416', '2023-07-06', '2023-07-07', 'bir mourad rais'),
(4, '982309', '234654', '084755211516', '2023-07-04', '2023-07-04', 'Oran'),
(5, '765678', '9900089', '084755211516', '2023-07-04', '2023-07-04', 'Kouba'),
(6, '765678', '999809', '08585311416', '2023-06-22', '2023-06-24', ''),
(7, '765678', '999809', '08585311416', '2023-07-06', '2023-07-07', 'bir mourad rais');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `poste` varchar(20) NOT NULL,
  `departement` varchar(20) NOT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL,
  `disponibilite` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `password`, `nom`, `prenom`, `telephone`, `poste`, `departement`, `etat`, `responsable`, `disponibilite`) VALUES
(765678, 'zaatchi@gmail.com', '0000', 'Zaatchi', 'Ilyes', '0786978534', 'chauffeur', 'technologie d inform', 'actif', 'Mekhazni Rami', NULL),
(654534, 'Yahiaoui@gmail.com', '0000', 'Yahiaoui', 'Said', '0589763425', 'chauffeur', 'technologie d inform', 'actif', 'Mekhazni Rami', 'Disponible'),
(768576, 'toumi@yahoo.com', '0000', 'Toumi', 'Said', '0798653434', 'chefparc', 'technologie d inform', 'actif', NULL, NULL),
(867564, 'cherifi@gmail.com', '0000', 'Cherifi', 'Said', '0798675467', 'chefparc', 'technologie d inform', 'actif', NULL, NULL),
(756454, 'Talbi@yahoo.com', '0000', 'Talbi', 'Mohammed', '0578465789', 'chauffeur', 'technologie d inform', 'actif', 'Kadri Amir', 'disponible'),
(91274, 'Larbi@gmail.com', '0000', 'Larbi', 'Rayan', '0676543456', 'chauffeur', 'technologie d inform', 'actif', 'Nasri Amir', 'disponible'),
(876556, 'belarbi@gmail.com', '0000', 'Belarbi', 'Achraf', '0786987876', 'chauffeur', 'technologie d inform', 'actif', 'Mekhazni rami', 'disponible'),
(982309, 'sahli@outlook.com', '0000', 'Sahli', 'Youcef', '0586309830', 'chauffeur', 'technologie d inform', 'actif', 'zaatchi Tarek', 'disponible'),
(876777, 'Amraoui@outlook.com', '0000', 'Amraoui', 'Mahdi', '0789876560', 'chauffeur', 'technologie d inform', 'actif', 'Zaatchi Tarek', 'disponible\r\n'),
(756489, 'abidi23@yahoo.com', '0000', 'Abidi', 'Anis', '0789090938', 'chauffeur', 'technologie d inform', 'actif', 'Zaatchi Tarek', 'disponible'),
(564543, 'Salhi@outlook.fr', '0000', 'Salhi', 'Imadeddine', '0798345678', 'employe', 'technologie d inform', 'actif', 'mekhazni Rami', NULL),
(9900089, 'Boudaoud@gmail.com', '0000', 'Boudaoud', 'Lila', '0777654509', 'employe', 'technologie d inform', 'actif', 'razzoug issa', NULL),
(999809, 'Ouragh.nawel@gmail.com', '0000', 'Ouragh', 'Nawel', '0678066654', 'employe', 'technologie d inform', 'actif', 'Razzoug issa', NULL),
(234765, 'sarah@gmail.com', 'sarah000', 'Doudane', 'sarah', '0791025950', 'chefparc', 'technologie d inform', 'actif', 'sarah', NULL),
(654345, 'razzoug@gmail.com', '0000', 'Razzoug', 'issa', '0787654333', 'responsable', 'technologie', 'actif', NULL, NULL),
(1, 'admin@gmail.com', '0000', 'Admin', 'Admin', '0798098765', 'administrateur', 'technologie', 'actif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(11) NOT NULL,
  `matricule` varchar(30) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `modele` varchar(30) NOT NULL,
  `couleur` varchar(30) NOT NULL,
  `nserie` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `carburant` varchar(30) NOT NULL,
  `kilometrage` double NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `matricule`, `marque`, `modele`, `couleur`, `nserie`, `type`, `carburant`, `kilometrage`, `etat`) VALUES
(1, '08585311416', 'Fiat', 'Bravo', 'blanc', 'XXX', 'voiture', 'Essance', 179014, 'Disponible'),
(2, '08526911416', 'DACIA', 'Dokken Van', 'gris', 'STU654', 'voiture', 'Essance sans plomb', 10000, 'disponible'),
(3, '084755211516', 'DACIA ', 'DUSTER', 'noir', 'PQR987', 'voiture', 'GPL', 100000, 'Disponible'),
(4, '05847211435', 'Volkswagen', 'POLO', 'blanc', 'MNO654', 'voiture', 'Diasel', 80000, 'Disponible'),
(5, '08425711735', 'Chevrolet', 'Silverado', 'gris', 'XXXXXX', 'voiture', 'Diasel', 70000, 'Disponible'),
(6, '084755981516', 'FORD', 'Explorer', 'noir', 'DEF456', 'voiture', 'Diasel', 890000, 'Disponible'),
(0, '08585311416', 'Fiat', 'Bravo', 'blanc', 'XXX', 'voiture', 'Essance', 179014, 'Disponible'),
(0, '08585311416', 'Fiat', 'Bravo', 'blanc', 'XXX', 'voiture', 'Essance', 179014, 'Disponible'),
(0, '08585311416', 'Fiat', 'Bravo', 'blanc', 'XXX', 'voiture', 'Essance', 179014, 'Disponible'),
(0, '08585311416', 'Fiat', 'Bravo', 'blanc', 'XXX', 'voiture', 'Essance', 179014, 'Disponible');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`num_demande`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numreservation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `num_demande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numreservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
