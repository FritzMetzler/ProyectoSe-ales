-- MySQL dump 10.13  Distrib 5.7.15, for Win32 (AMD64)
--
-- Host: localhost    Database: eq1hamburguesas
-- ------------------------------------------------------
-- Server version	5.7.15-log

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
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrito` (
  `Username` varchar(15) DEFAULT NULL,
  `ProductID` int(4) DEFAULT NULL,
  `Producto` varchar(15) NOT NULL,
  `Precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden`
--

DROP TABLE IF EXISTS `orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Username` varchar(15) DEFAULT NULL,
  `Comprados` varchar(1000) NOT NULL,
  `Total` float NOT NULL,
  `LugarEntrega` varchar(255) NOT NULL,
  `FechaCompra` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden`
--

LOCK TABLES `orden` WRITE;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
INSERT INTO `orden` VALUES (16,'FritzWeitzel','',0,'qwerqwer','2030-12-22'),(17,'FritzWeitzel','(2,Chemsburguer,90,180) (2,Pamstes Fritos,24,48) (2,Vegan Pankackes,50,100) ',0,'casa','2030-12-22'),(18,'Fritz Metzler','(2,Chemsburguer,90,180) (2,Pamstes Fritos,24,48) (2,Vegan Pankackes,50,100) ',328,'','2030-12-22'),(19,'Fritz Metzler','(3,Chemsburguer,90,270) (3,Pamstes Fritos,24,72) (3,Vegan Pankackes,50,150) (1,Chem-veza,25,25) (3,Jumguito,20,60) ',577,'casita fachera','2030-12-22'),(20,'Fritz Metzler','(1,Chemsburguer,90,90) (1,Pamstes Fritos,24,24) (1,Vegan Pankackes,50,50) (1,Chem-veza,25,25) ',189,'casa','2030-12-22'),(21,'Fritz Metzler','(3,Pamstes Fritos,24,72) ',72,'localidad normal','2030-12-22'),(22,'','(1,Chemsburguer,90,90) (1,Pamstes Fritos,24,24) (1,Vegan Pankackes,50,50) (2,Chem-veza,25,50) ',214,'casa','2030-12-22'),(23,'Fritz Metzler','(1,Chemsburguer,90,90) (1,Pamstes Fritos,24,24) (1,Vegan Pankackes,50,50) (2,Chem-veza,25,50) ',214,'pagando en casa','2030-12-22'),(24,'Fritz Metzler','(1,Pamstes Fritos,24,24) (1,Vegan Pankackes,50,50) (1,Chem-veza,25,25) ',99,'wertqwerwqerqwerwqer','2030-12-22'),(25,'Fritz Metzler','(2,Pamstes Fritos,24,48) (1,Vegan Pankackes,50,50) (1,Chem-veza,25,25) (1,Chems-co,20,20) ',143,'casa','2030-12-22');
/*!40000 ALTER TABLE `orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `ID` int(4) NOT NULL,
  `NombreProd` varchar(15) DEFAULT NULL,
  `Descripcion` varchar(20) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `PathImg` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (0,'Chemsburguer',NULL,90,'images/imagen1.png'),(1,'Pamstes Fritos',NULL,24,'images/imagen2.png'),(2,'Vegan Pankackes',NULL,50,'images/imagen3.png'),(3,'Chem-veza',NULL,25,'images/chem-veza.png'),(4,'Chems-co',NULL,20,'images/chems-co.png'),(5,'Jumguito',NULL,20,'images/jumgo.png');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `Nombre` varchar(15) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Username` varchar(15) DEFAULT NULL,
  `Clave` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('Oscar','Aguilar','test@prueba.com','Fritz Metzler','hola123'),('Juan','Perez','Juanito','test2@test.com','hola123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-01 22:54:47
