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
-- Table structure for table `INFO_USUARIO`
--

DROP TABLE IF EXISTS `INFO_USUARIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INFO_USUARIO` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `ROL_ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `USER` varchar(45) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  `ESTADO` varchar(45) NOT NULL,
  `FE_CREACION` datetime NOT NULL,
  `USR_CREACION` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  UNIQUE KEY `ID_USUARIO_UNIQUE` (`ID_USUARIO`),
  KEY `ROL_ID_idx` (`ROL_ID`),
  CONSTRAINT `ROL_ID` FOREIGN KEY (`ROL_ID`) REFERENCES `ADMI_ROL` (`ID_ROL`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INFO_USUARIO`
--

LOCK TABLES `INFO_USUARIO` WRITE;
/*!40000 ALTER TABLE `INFO_USUARIO` DISABLE KEYS */;
INSERT INTO `INFO_USUARIO` (`ID_USUARIO`, `ROL_ID`, `NOMBRE`, `USER`, `PASSWORD`, `ESTADO`, `FE_CREACION`, `USR_CREACION`) VALUES (2,1,'Alisson Lago','alago','2b2f03a5d02902eaf169993cd9265d41','Activo','2016-09-11 00:48:23','arsuarez'),(4,1,'Allan Suarez','arsuarez','a9a6f4e657ec97f8b4552e7f3c0068a6','Activo','2016-09-11 08:20:31','alago'),(17,2,'Domisa','domisa','6908f5fa8b5e0f23a60a548b41c95172','Modificado','2016-10-01 05:40:38','alago'),(18,1,'usuario','usuario','e2819c9f5fb43d9130187ffc02a389f8','Eliminado','2016-10-01 05:09:21','alago');
/*!40000 ALTER TABLE `INFO_USUARIO` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-13 10:33:53
