CREATE DATABASE  IF NOT EXISTS `tienda_musica` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tienda_musica`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tienda_musica
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autor` (
  `COD_AUTOR` int(6) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  PRIMARY KEY (`COD_AUTOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autor_interpreta`
--

DROP TABLE IF EXISTS `autor_interpreta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autor_interpreta` (
  `COD_DISCO` int(6) DEFAULT NULL,
  `COD_AUTOR` int(6) DEFAULT NULL,
  KEY `FK_COD_DISCO_AUT` (`COD_DISCO`),
  KEY `FK_COD_AUTOR_DIS` (`COD_AUTOR`),
  CONSTRAINT `FK_COD_AUTOR_DIS` FOREIGN KEY (`COD_AUTOR`) REFERENCES `autor` (`COD_AUTOR`),
  CONSTRAINT `FK_COD_DISCO_AUT` FOREIGN KEY (`COD_DISCO`) REFERENCES `disco` (`COD_DISCO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor_interpreta`
--

LOCK TABLES `autor_interpreta` WRITE;
/*!40000 ALTER TABLE `autor_interpreta` DISABLE KEYS */;
/*!40000 ALTER TABLE `autor_interpreta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancion`
--

DROP TABLE IF EXISTS `cancion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cancion` (
  `COD_CANCION` int(6) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(50) DEFAULT NULL,
  `DURACION` varchar(20) DEFAULT NULL,
  `COD_DISCO` int(6) DEFAULT NULL,
  PRIMARY KEY (`COD_CANCION`),
  KEY `FK_COD_DISCO2` (`COD_DISCO`),
  CONSTRAINT `FK_COD_DISCO2` FOREIGN KEY (`COD_DISCO`) REFERENCES `disco` (`COD_DISCO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancion`
--

LOCK TABLES `cancion` WRITE;
/*!40000 ALTER TABLE `cancion` DISABLE KEYS */;
/*!40000 ALTER TABLE `cancion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cesta`
--

DROP TABLE IF EXISTS `cesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cesta` (
  `COD_USU` int(6) DEFAULT NULL,
  `COD_DISCO` int(6) DEFAULT NULL,
  `CANTIDAD` int(8) DEFAULT NULL,
  `PRECIO_UNITARIO` double(9,2) DEFAULT NULL,
  KEY `FK_COD_USU1` (`COD_USU`),
  KEY `FK_COD_DISCO4` (`COD_DISCO`),
  CONSTRAINT `FK_COD_DISCO4` FOREIGN KEY (`COD_DISCO`) REFERENCES `disco` (`COD_DISCO`),
  CONSTRAINT `FK_COD_USU1` FOREIGN KEY (`COD_USU`) REFERENCES `usuario` (`COD_USU`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cesta`
--

LOCK TABLES `cesta` WRITE;
/*!40000 ALTER TABLE `cesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `cesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disco`
--

DROP TABLE IF EXISTS `disco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disco` (
  `COD_DISCO` int(6) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(50) DEFAULT NULL,
  `GENERO` varchar(30) DEFAULT NULL,
  `NºCANCIONES` int(8) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `CARATULA` varchar(200) DEFAULT NULL,
  `PRECIO` double(9,2) DEFAULT NULL,
  `COD_DISCOGRA` int(6) DEFAULT NULL,
  PRIMARY KEY (`COD_DISCO`),
  KEY `FK_COD_DISCOGRA` (`COD_DISCOGRA`),
  CONSTRAINT `FK_COD_DISCOGRA` FOREIGN KEY (`COD_DISCOGRA`) REFERENCES `discografica` (`COD_DISCOGRA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disco`
--

LOCK TABLES `disco` WRITE;
/*!40000 ALTER TABLE `disco` DISABLE KEYS */;
/*!40000 ALTER TABLE `disco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discografica`
--

DROP TABLE IF EXISTS `discografica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discografica` (
  `COD_DISCOGRA` int(6) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `TLF` int(9) DEFAULT NULL,
  `PAGINA_WEB` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`COD_DISCOGRA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discografica`
--

LOCK TABLES `discografica` WRITE;
/*!40000 ALTER TABLE `discografica` DISABLE KEYS */;
/*!40000 ALTER TABLE `discografica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linea_pedido`
--

DROP TABLE IF EXISTS `linea_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linea_pedido` (
  `COD_LINEA` int(6) NOT NULL AUTO_INCREMENT,
  `COD_PEDIDO` int(6) DEFAULT NULL,
  `COD_DISCO` int(6) DEFAULT NULL,
  `CANTIDAD` int(6) DEFAULT NULL,
  PRIMARY KEY (`COD_LINEA`),
  KEY `FK_COD_PED` (`COD_PEDIDO`),
  KEY `FK_COD_DISCO` (`COD_DISCO`),
  CONSTRAINT `FK_COD_DISCO` FOREIGN KEY (`COD_DISCO`) REFERENCES `disco` (`COD_DISCO`),
  CONSTRAINT `FK_COD_PED` FOREIGN KEY (`COD_PEDIDO`) REFERENCES `pedido` (`COD_PEDIDO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linea_pedido`
--

LOCK TABLES `linea_pedido` WRITE;
/*!40000 ALTER TABLE `linea_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `linea_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `COD_PEDIDO` int(6) NOT NULL AUTO_INCREMENT,
  `COD_USU` int(6) DEFAULT NULL,
  `FECHA_PED` date DEFAULT NULL,
  `IMPORTE` double(9,2) DEFAULT NULL,
  PRIMARY KEY (`COD_PEDIDO`),
  KEY `FK_COD_USU` (`COD_USU`),
  CONSTRAINT `FK_COD_USU` FOREIGN KEY (`COD_USU`) REFERENCES `usuario` (`COD_USU`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `COD_USU` int(6) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `ROL` varchar(30) DEFAULT NULL,
  `ESTADO` varchar(20) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `DIRECCION` varchar(200) DEFAULT NULL,
  `TLF` int(9) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PROVINCIA` varchar(30) DEFAULT NULL,
  `LOCALIDAD` varchar(30) DEFAULT NULL,
  `PAIS` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`COD_USU`),
  UNIQUE KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-28 20:45:26
