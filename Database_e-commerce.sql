-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 mars 2022 à 10:26
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database_e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `customerCode` int(11) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `adress` varchar(254) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`customerCode`, `lastName`, `firstName`, `adress`, `phone`, `email`, `password`) VALUES
(1, 'boukhana', 'shaymae', 'shaymaebjkbjkbk', '067363747844', 'chaymae@gmail.com', 'shaymae0909');

-- --------------------------------------------------------

--
-- Structure de la table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderedQuantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerCode` int(11) NOT NULL,
  `orderDate` datetime DEFAULT NULL,
  `deliveryAddress` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(254) DEFAULT NULL,
  `description` varchar(254) DEFAULT NULL,
  `unitPrice` decimal(8,0) DEFAULT NULL,
  `quantityInStock` int(11) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`productID`, `productName`, `description`, `unitPrice`, `quantityInStock`, `image`) VALUES
(3, 'Love Nature', 'skin care', '35', 0, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F38382%2F38382.png'),
(6, 'HairX', 'skin care', '45', 500, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F41676%2F41676.png'),
(7, 'Gold Essonza', 'pure skin', '399', 1000, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F42614%2F42614.png'),
(8, 'Feet up ', 'skin care', '49', 1900, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F38391%2F38391.png'),
(9, 'The one', 'makeup', '59', 200, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F41989%2F41989.png'),
(10, 'Miroire Golden', 'makeup', '65', 900, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F43134%2F43134.png'),
(11, 'Giordan Gold', 'Makeup', '149', 2000, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F42355%2F42355.png'),
(12, 'oinseau polisoir', 'Makeup', '89', 200, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F30887%2F30887.png'),
(13, 'so fever ', 'perfum', '394', 400, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F42835%2F42835.png'),
(14, 'Love potience', 'perfum', '199', 100, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F42815%2F42815.png'),
(15, 'DIVIN', 'perfum', '296', 300, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F38497%2F38497.png'),
(16, 'Enigma', 'perfum', '389', 200, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F41542%2F41542.png'),
(17, 'HairX', 'hair', '49', 200, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F42840%2F42840.png'),
(18, 'WOUM', 'hair', '109', 900, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F42888%2F42888.png'),
(19, 'eleo', 'hair', '19900', 500, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F38601%2F38601.png'),
(20, 'love nature', 'hair', '45', 900, 'https://media-afr-cdn.oriflame.com/-/media/images/externalImage.ashx?externalMediaId=product-management-media%2F42897%2F42897.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerCode`);

--
-- Index pour la table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderID`,`productID`),
  ADD KEY `FK_commande_dans` (`productID`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_commander` (`customerCode`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_Contient` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `FK_commande_dans` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_commander` FOREIGN KEY (`customerCode`) REFERENCES `customers` (`customerCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
