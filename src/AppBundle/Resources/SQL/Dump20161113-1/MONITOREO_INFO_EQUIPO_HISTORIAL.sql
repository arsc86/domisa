-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: MONITOREO
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `INFO_EQUIPO_HISTORIAL`
--

DROP TABLE IF EXISTS `INFO_EQUIPO_HISTORIAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INFO_EQUIPO_HISTORIAL` (
  `ID_EQUIPO_HITORIAL` int(11) NOT NULL AUTO_INCREMENT,
  `EQUIPO_ID` int(11) NOT NULL,
  `OBSERVACION` blob,
  `ESTADO` varchar(20) NOT NULL,
  `FE_CREACION` datetime NOT NULL,
  `USR_CREACION` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_EQUIPO_HITORIAL`),
  UNIQUE KEY `ID_EQUIPO_HITORIAL_UNIQUE` (`ID_EQUIPO_HITORIAL`),
  KEY `EQUIPO_ID_idx` (`EQUIPO_ID`),
  CONSTRAINT `EQUIPO_ID` FOREIGN KEY (`EQUIPO_ID`) REFERENCES `INFO_EQUIPO` (`ID_EQUIPO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INFO_EQUIPO_HISTORIAL`
--

LOCK TABLES `INFO_EQUIPO_HISTORIAL` WRITE;
/*!40000 ALTER TABLE `INFO_EQUIPO_HISTORIAL` DISABLE KEYS */;
INSERT INTO `INFO_EQUIPO_HISTORIAL` (`ID_EQUIPO_HITORIAL`, `EQUIPO_ID`, `OBSERVACION`, `ESTADO`, `FE_CREACION`, `USR_CREACION`) VALUES (1,2,'Se realizo Actualizacion de Equipo','Activo','2016-10-05 07:16:23','arsuarez'),(2,2,'Se realizo Actualizacion de Equipo','Activo','2016-10-05 08:16:24','arsuarez'),(3,2,'Se realizo Actualizacion de Equipo','Activo','2016-10-15 15:56:40','arsuarez');
/*!40000 ALTER TABLE `INFO_EQUIPO_HISTORIAL` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-13 10:33:52
