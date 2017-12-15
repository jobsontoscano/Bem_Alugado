-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: bemalugado_db
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_propertie` int(11) NOT NULL,
  `duracao_contract` datetime NOT NULL,
  `end_contract` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user_fk` (`id_user`),
  KEY `id_propertie_fk` (`id_propertie`),
  CONSTRAINT `id_propertie_fk` FOREIGN KEY (`id_propertie`) REFERENCES `properties` (`id`),
  CONSTRAINT `id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts`
--

LOCK TABLES `contracts` WRITE;
/*!40000 ALTER TABLE `contracts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES (1,'imovel_17479604795a1d4d3e71be14.93409993.jpg','/uploads/'),(2,'imovel_1607652015a1d4d7ebdf033.02725171.jpg','/uploads/'),(3,'imovel_2560275545a1d4e7d3b6a20.83933254.jpg','/uploads/'),(4,'imovel_13053229945a1d4eb2102ba2.65255181.jpg','/uploads/'),(5,'imovel_6387115485a1d4eceb86204.15797860.jpg','/uploads/'),(6,'imovel_5859047145a1d51bbc3a500.68712040.jpg','/uploads/'),(7,'imovel_21151865525a1d51fb24cd65.17276968.jpg','/uploads/'),(8,'imovel_8115036605a1d5227c645f3.28518787.jpg','/uploads/'),(9,'imovel_756051795a1d53b4743555.85583805.jpg','/uploads/'),(10,'imovel_15977685765a1d550eb13b17.51259144.jpg','/uploads/'),(11,'imovel_15135846295a1dcd2a2d6e18.74129525.jpeg','/uploads/'),(12,'imovel_13760413495a1dd28cc51a72.33973466.png','/uploads/'),(13,'imovel_8237927835a2f3014b18c77.04898981.jpg','/uploads/');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_file` int(11) NOT NULL,
  `kind` varchar(40) NOT NULL,
  `number` int(11) NOT NULL,
  `state` varchar(70) NOT NULL,
  `complement` varchar(70) NOT NULL,
  `city` varchar(70) NOT NULL,
  `descricao` varchar(70) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `address` varchar(70) NOT NULL,
  `cep` varchar(70) NOT NULL,
  `active_code` varchar(70) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `neighborhood` varchar(70) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_fk` (`id_user`),
  KEY `file_fk` (`id_file`),
  CONSTRAINT `file_fk` FOREIGN KEY (`id_file`) REFERENCES `files` (`id`),
  CONSTRAINT `user_fk` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (5,19,13,'sdfgdfg',234,'dfgdfgdf','52254','dfgdfg','sgdgsdgsdgsd',1,'dfgdfgd','dfgdfgdf','6f3b8ded65bd7a4db11625ac84e579bb',1,'dfgdfgdfg');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (19,'Bemalugado.com','bac','$2y$10$S2gssCaHT3gZ1TuhdcWOLOZacKjNf6nk4K8VtT9nav4ixQFw3IqEG','bemalugado.com@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishes`
--

DROP TABLE IF EXISTS `wishes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_propertie` int(11) NOT NULL,
  `chekin` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_fk_pro` (`id_propertie`),
  KEY `fk_id_user` (`id_user`),
  CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  CONSTRAINT `id_fk_pro` FOREIGN KEY (`id_propertie`) REFERENCES `properties` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishes`
--

LOCK TABLES `wishes` WRITE;
/*!40000 ALTER TABLE `wishes` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-11 22:46:20
