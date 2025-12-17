-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 déc. 2025 à 05:17
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `galerie_lampes`
--

-- --------------------------------------------------------

--
-- Structure de la table `lamps`
--

DROP TABLE IF EXISTS `lamps`;
CREATE TABLE IF NOT EXISTS `lamps` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `price` decimal(10,2) NOT NULL,
  `img_default` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_hover` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `main_category` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sub_category` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `lamps`
--

INSERT INTO `lamps` (`id`, `name`, `description`, `price`, `img_default`, `img_hover`, `main_category`, `sub_category`, `created_at`) VALUES
(1, 'Lampe Art Déco Noir', 'Superbe lampe au style Art Déco des années 1920. Base en laiton noir mat et abat-jour en verre fumé. Ambiance intimiste.', 349.90, 'https://media.discordapp.net/attachments/1417856101986205791/1450737578373415033/sombre1.png?ex=6943a028&is=69424ea8&hm=2a1b552ec6c454fae1769df073efa76cf8776d366b6a8c10e2a2b7d8b2fef4eb&=&format=webp&quality=lossless&width=1200&height=800', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe sombre', 'Art Déco', '2025-12-16 23:30:28'),
(2, 'Suspension Industrielle Noire', 'Lampe suspension au style industriel avec finition métal noir mat. Idéale pour un loft ou une cuisine moderne.', 189.50, 'https://media.discordapp.net/attachments/1417856101986205791/1450737578822340678/sombre2.png?ex=6943a028&is=69424ea8&hm=a4b216ac7b18efaf12e38a571acff4d2ca9e31dbc0d75df61bc1521aaae5a70c&=&format=webp&quality=lossless&width=1200&height=800', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe sombre', 'Suspension', '2025-12-16 23:30:28'),
(3, 'Lampadaire Arc Anthracite', 'Imposant lampadaire arc avec finition anthracite. Pied en marbre noir et bras métallisé. Abat-jour ajustable.', 599.00, 'https://media.discordapp.net/attachments/1417856101986205791/1450737579262480535/sombre3.png?ex=6943a028&is=69424ea8&hm=e98625be7914f2e461ee3babbfe182ced693cecbfe976e5f0de7202237e8d204&=&format=webp&quality=lossless&width=1200&height=800', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe sombre', 'Lampadaire', '2025-12-16 23:30:28'),
(4, 'Applique Murale Graphite', 'Applique murale au design contemporain. Finition graphite brossé. Crée une ambiance feutrée et élégante.', 159.00, 'https://media.discordapp.net/attachments/1417856101986205791/1450737579761729638/sombre4.png?ex=6943a028&is=69424ea8&hm=eac4e324286858df6f4ebcca7bebc9ae5b6cf2b00782018d3fad80a24afbf74a&=&format=webp&quality=lossless&width=1200&height=800', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe sombre', 'Applique', '2025-12-16 23:30:28'),
(5, 'Lampe de Bureau Noire', 'Lampe de bureau avec bras articulé. Finition noir profond. LED intégrée avec variateur d intensité.', 129.90, 'https://media.discordapp.net/attachments/1417856101986205791/1450737580349067286/sombre5.png?ex=6943a028&is=69424ea8&hm=999f89d9097582e268bd4fa8f0f4a8fba0cf831484370c5e54569cafb074333b&=&format=webp&quality=lossless&width=1200&height=800', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe sombre', 'Bureau', '2025-12-16 23:30:28'),
(6, 'Suspension Verre Ambré', 'Suspension sphérique en verre soufflé ambré. Style mid-century modern. Câble textile tressé doré.', 159.90, 'https://i.pinimg.com/736x/4b/1a/e2/4b1ae230fdc8bec1c301010872d0f4e9.jpg', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe coloré', 'Suspension', '2025-12-16 23:30:28'),
(7, 'Lampe Tiffany Multicolore', 'Authentique lampe style Tiffany avec motif libellule. Vitrail multicolore assemblé à la main. Base en bronze patiné.', 449.00, 'https://resize.elle.fr/article/var/plain_site/storage/images/deco/pieces/salon/meubles-objets/lampes-et-lampadaires-design/lampe-design-dalu-d-artemide/88557599-1-fre-FR/Lampe-design-Dalu-d-Artemide.jpg', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe coloré', 'Tiffany', '2025-12-16 23:30:28'),
(8, 'Néon LED Rose', 'Néon LED moderne en rose vif. Faible consommation. Design contemporain. Idéal pour une décoration originale.', 179.00, 'https://tse3.mm.bing.net/th/id/OIP.xzuEWtCOOGCAJaD17ub6iwHaD4?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe coloré', 'Néon', '2025-12-16 23:30:28'),
(9, 'Lampe Champignon Rouge', 'Lampe de table iconique style champignon. Finition rouge brillante. Diffusion lumineuse douce et colorée.', 149.90, 'https://tse2.mm.bing.net/th/id/OIP.u4biCPpSABJfq_S9728rQgHaLH?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe coloré', 'Table', '2025-12-16 23:30:28'),
(10, 'Applique Verre Bleu', 'Applique murale en verre soufflé bleu cobalt. Crée une ambiance marine et apaisante. Laiton doré.', 189.00, 'https://i.pinimg.com/736x/27/bd/be/27bdbe5bdc88566bc643d2b0a08566be.jpg', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe coloré', 'Applique', '2025-12-16 23:30:28'),
(11, 'Lampe de Chevet Blanche', 'Lampe de chevet minimaliste avec base en céramique blanche. Abat-jour en lin naturel clair. Touch control.', 69.90, 'https://tse4.mm.bing.net/th/id/OIP.D3LeeZKmRYnyeIyk6GVAXwHaKe?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe clair', 'Chevet', '2025-12-16 23:30:28'),
(12, 'Lustre Cristal Transparent', 'Magnifique lustre à pampilles en cristal transparent. 6 bras de lumière. Style classique chic pour illuminer vos pièces.', 899.00, 'https://i.pinimg.com/originals/89/20/bd/8920bdb9c11fa87aca6dab27e6bf136d.jpg', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe clair', 'Lustre', '2025-12-16 23:30:28'),
(13, 'Lampe Trépied Bois Clair', 'Lampe sur trépied en bois de chêne naturel clair. Abat-jour en lin blanc. Design nordique épuré et lumineux.', 119.90, 'https://i.pinimg.com/originals/89/e6/c7/89e6c76a55cb401d4a5652ffc31486c8.jpg', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe clair', 'Trépied', '2025-12-16 23:30:28'),
(14, 'Applique Scandinave Blanche', 'Applique au design épuré scandinave. Bois de bouleau clair et diffuseur blanc. Ambiance lumineuse et chaleureuse.', 89.90, 'https://deavita.fr/wp-content/uploads/2016/05/lampes-design-syst%C3%A8mes-%C3%A9clairage-modulables-lumi%C3%A8re-personnalisable.jpg', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe clair', 'Applique', '2025-12-16 23:30:28'),
(15, 'Suspension Verre Opalin', 'Suspension en verre opalin blanc. Diffusion lumineuse douce et uniforme. Style intemporel et élégant.', 139.90, 'https://th.bing.com/th/id/R.e152e2a5577e48005c8795818dff0f3e?rik=W1iwj2ffEo%2bhVw&riu=http%3a%2f%2fdesignmag.fr%2fwp-content%2fuploads%2f7Gods-design-contemporain-lampe.jpg&ehk=FOhx2B6lpYqoSaHDf8H4sdEg7qE3KujXmSqMMJNAXm8%3d&risl=&pid=ImgRaw&r=0', 'https://media.discordapp.net/attachments/1417856101986205791/1450737577811509268/plus.jpg?ex=6943a027&is=69424ea7&hm=c5d935e3cb1afb150868a3b9a296ee5e6c00057fab467419f03406e451c60abc&=&format=webp&width=800&height=800', 'Lampe clair', 'Suspension', '2025-12-16 23:30:28');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_demande` int NOT NULL,
  `id_auteur` int DEFAULT NULL,
  `message` text NOT NULL,
  `date_envoi` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_demande`, `id_auteur`, `message`, `date_envoi`) VALUES
(1, 1, 3, 'De: Maelys Bart\nEmail: maelysbart@gmail.com\n\nszdqz', '2025-12-17 05:31:49');

-- --------------------------------------------------------

--
-- Structure de la table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_client` int DEFAULT NULL,
  `id_receveur` int DEFAULT NULL,
  `sujet` varchar(500) NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `statut` enum('En attente','En cours','Résolu','Fermé') DEFAULT 'En attente',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `request`
--

INSERT INTO `request` (`id`, `id_client`, `id_receveur`, `sujet`, `date_creation`, `statut`) VALUES
(1, 3, 3, 'Question avant achat', '2025-12-17 05:31:49', 'En attente');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role`, `prenom`, `nom`, `email`, `telephone`, `mot_de_passe`, `date_creation`) VALUES
(3, 'client', 'Maelys', 'Bart', 'maelysbart@gmail.com', '0624554591', '$2y$10$Uvdw9Mn8.f/GAcoy/cdxvO5DYTIUR83JAl9F8IeCThXE7fZidm/Xu', '2025-12-17 03:39:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
