-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 juin 2022 à 13:38
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carrent`
--

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `clientID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `firstName` varchar(254) DEFAULT NULL,
  `lastName` varchar(254) DEFAULT NULL,
  `cin` int(11) DEFAULT NULL,
  `phone` varchar(14) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`clientID`, `email`, `firstName`, `lastName`, `cin`, `phone`, `pass`) VALUES
(5, 'Abdelkarim_97@gmail.com', 'abdkrim', 'harak', 0, '0660808090', 'koenigsegg1'),
(7, 'krimoo-tg@hotmail.fr', 'nassim', 'achab', 0, '0660808090', 'madrid00'),
(8, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `chassisNumber` int(11) NOT NULL,
  `idMedia` int(11) NOT NULL,
  `url` varchar(254) DEFAULT NULL,
  `type` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`chassisNumber`, `idMedia`, `url`, `type`) VALUES
(1, 1, 'fiesta.jpg', 'image'),
(2, 2, 'polo.jpg', 'image'),
(3, 3, 'logan.jpg', 'Image'),
(4, 4, 'yaris.jpg', 'Image'),
(5, 5, 'accent.jpg', 'image'),
(6, 6, 'golf7.jpg', 'image'),
(7, 7, 'ibiza.jpg', 'image'),
(8, 8, '301.jpg', 'image'),
(9, 9, 'tiguain.jpg', 'image'),
(10, 10, 'evoque.jpg', 'image'),
(11, 11, 'c.png', 'image'),
(12, 12, 'golf8.jpg', 'image'),
(13, 13, 'leon.jpg', 'image'),
(14, 14, 'vito.jpg', 'image'),
(15, 15, 'rav4.jpg', 'image'),
(16, 16, 's.jpg', 'image'),
(17, 17, 'rangerover.jpg', 'image\r\n\r\n'),
(18, 18, 'panamera.jpg', 'image'),
(19, 19, 'g.jpg', 'image'),
(20, 20, 'q8.jpg', 'image'),
(21, 21, 'landcruiser.jpg', 'image');

-- --------------------------------------------------------

--
-- Structure de la table `office`
--

CREATE TABLE `office` (
  `officeNumber` int(11) NOT NULL,
  `city` varchar(254) DEFAULT NULL,
  `adress` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `office`
--

INSERT INTO `office` (`officeNumber`, `city`, `adress`) VALUES
(1, 'Tangier', 'Rte de Boubana N11'),
(2, 'Tangier', 'Nejma Rue Ibn katir Numéro 6'),
(3, 'Tangier', 'Souani Hafid ben abdelbar Avenue');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `reservationId` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `chassisNumber` int(11) NOT NULL,
  `dateMade` datetime DEFAULT NULL,
  `dateOut` datetime DEFAULT NULL,
  `dateBack` datetime DEFAULT NULL,
  `state` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`reservationId`, `clientID`, `chassisNumber`, `dateMade`, `dateOut`, `dateBack`, `state`) VALUES
(40, 5, 11, '2022-06-23 00:00:00', '2022-06-23 00:00:00', '2022-06-28 00:00:00', NULL),
(41, 5, 6, '2022-06-23 00:00:00', '2022-06-23 00:00:00', '2022-06-30 00:00:00', NULL),
(42, 5, 6, '2022-06-23 00:00:00', '2022-06-23 00:00:00', '2022-06-30 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `chassisNumber` int(30) NOT NULL,
  `officeNumber` int(11) NOT NULL,
  `model` varchar(254) DEFAULT NULL,
  `type` varchar(254) DEFAULT NULL,
  `pricePerDay` int(11) DEFAULT NULL,
  `productionYear` int(11) DEFAULT NULL,
  `photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`chassisNumber`, `officeNumber`, `model`, `type`, `pricePerDay`, `productionYear`, `photos`) VALUES
(1, 3, 'Ford Fiesta', 'Hatchback', 350, 2020, 'fiesta.jpg'),
(2, 3, 'Volkswagen Polo', 'Hatchback', 370, 2021, 'polo.jpg'),
(3, 3, 'Dacia Logan', 'Sedan', 270, 2021, 'logan.jpg'),
(4, 3, 'Toyota Yaris', 'Hatchback', 320, 2018, 'yaris.jpg'),
(5, 3, 'Hyundai Accent', 'Sedan', 320, 2019, 'accent.jpg'),
(6, 3, 'Volkswagen Golf 7', 'Hatchback', 450, 2019, 'golf7.jpg'),
(7, 3, 'Seat Ibiza', 'Hatchback', 390, 2020, 'ibiza.jpg'),
(8, 3, 'Peugeot 301', 'Sedan', 300, 2018, '301.jpg'),
(9, 2, 'Volkswagen Tiguain', 'Crossover', 650, 2019, 'tiguain.jpg'),
(10, 2, 'Range Rover Evoque', 'Crossover', 750, 2018, 'evoque.jpg'),
(11, 2, 'Mercedes Class C', 'Sedan', 800, 2021, 'c.png'),
(12, 2, 'Volkswagen Golf 8', 'Hatchback', 750, 2021, 'golf8.jpg'),
(13, 2, 'Seat Leon FR', 'Hatchback', 750, 2020, 'leon.jpg'),
(14, 2, 'Mercedes Vito', 'VAN', 700, 2020, 'vito.jpg'),
(15, 2, 'Toyota Rav 4 Cross', 'Crossover', 650, 2021, 'rav4.jpg'),
(16, 1, 'Mercedes S Class', 'Sedan', 1200, 2019, 's.jpg'),
(17, 1, 'Range Rover Sport', 'SUV', 1100, 2021, 'rangerover.jpg'),
(18, 1, 'Porshce Panamera', 'Sedan', 1300, 2020, 'panamera.jpg'),
(19, 1, 'Mercedes G Wagon', 'SUV', 1500, 2021, 'g.jpg'),
(20, 1, 'Audi Q8', 'SUV', 1300, 2021, 'q8.jpg'),
(21, 1, 'Toyota Land Cruiser', 'SUV', 1200, 2021, 'landcruiser.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`clientID`),
  ADD KEY `AK_Identifiant_1` (`clientID`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idMedia`),
  ADD KEY `FK_association4` (`chassisNumber`);

--
-- Index pour la table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`officeNumber`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationId`),
  ADD KEY `AK_Identifiant_1` (`reservationId`),
  ADD KEY `FK_association2` (`chassisNumber`),
  ADD KEY `FK_association3` (`clientID`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`chassisNumber`) USING BTREE,
  ADD KEY `FK_association1` (`officeNumber`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `idMedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `FK_association4` FOREIGN KEY (`chassisNumber`) REFERENCES `vehicule` (`chassisNumber`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_association2` FOREIGN KEY (`chassisNumber`) REFERENCES `vehicule` (`chassisNumber`),
  ADD CONSTRAINT `FK_association3` FOREIGN KEY (`clientID`) REFERENCES `customer` (`clientID`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `FK_association1` FOREIGN KEY (`officeNumber`) REFERENCES `office` (`officeNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
