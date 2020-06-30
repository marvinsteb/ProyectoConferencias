CREATE DATABASE  IF NOT EXISTS `proyectoconferencias` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyectoconferencias`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: proyectoconferencias
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria_evento`
--

DROP TABLE IF EXISTS `categoria_evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria_evento` (
  `id_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_evento` varchar(50) DEFAULT NULL,
  `icono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='						';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_evento`
--

LOCK TABLES `categoria_evento` WRITE;
/*!40000 ALTER TABLE `categoria_evento` DISABLE KEYS */;
INSERT INTO `categoria_evento` VALUES (1,'Seminario','fa-university'),(2,'Conferencias','fa-coment'),(3,'Talleres','fa-code');
/*!40000 ALTER TABLE `categoria_evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento`
--

DROP TABLE IF EXISTS `evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evento` (
  `evento_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(60) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `hora_evento` time DEFAULT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `id_cat_evento` int(11) DEFAULT NULL,
  `id_invitado` int(11) DEFAULT NULL,
  PRIMARY KEY (`evento_id`),
  KEY `id_cat_evento` (`id_cat_evento`),
  KEY `fk_invitado_evento_idx` (`id_invitado`),
  CONSTRAINT `fk_cat_evento` FOREIGN KEY (`id_cat_evento`) REFERENCES `evento` (`evento_id`),
  CONSTRAINT `fk_invitado_evento` FOREIGN KEY (`id_invitado`) REFERENCES `invitados` (`invitado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento`
--

LOCK TABLES `evento` WRITE;
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitados`
--

DROP TABLE IF EXISTS `invitados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invitados` (
  `invitado_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_invitado` varchar(30) DEFAULT NULL,
  `apellido_invitado` varchar(30) DEFAULT NULL,
  `descripcion` text,
  `url_imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`invitado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitados`
--

LOCK TABLES `invitados` WRITE;
/*!40000 ALTER TABLE `invitados` DISABLE KEYS */;
INSERT INTO `invitados` VALUES (1,'Nombre 1','Apellido 1','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste blanditiis magni quo tempora et','invitado1.jpg'),(2,'Nombre 2 ','Apellido 2 ','saepe consequatur totam adipisci atque laboriosam cum animi id architecto. Corrupti sint recusandae','invitado2.jpg'),(3,'Nombre 3','Apellido 3','3saepe consequatur totam adipisci atque laboriosam cum animi id architecto. Corrupti sint recusandae','invitado3.jpg'),(4,'Nombre 4','Apellido 4','4 saepe consequatur totam adipisci atque laboriosam cum animi id architecto. Corrupti sint recusandae','invitado4.jpg'),(5,'Nombre 5','Apellido 5','5 saepe consequatur totam adipisci atque laboriosam cum animi id architecto. Corrupti sint recusandae','invitado5.jpg'),(6,'Nombre 6','Apellido 6','6 saepe consequatur totam adipisci atque laboriosam cum animi id architecto. Corrupti sint recusandae','invitado6.jpg');
/*!40000 ALTER TABLE `invitados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-29 21:53:58
