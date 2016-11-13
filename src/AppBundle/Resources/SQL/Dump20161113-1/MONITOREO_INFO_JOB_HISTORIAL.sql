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
-- Table structure for table `INFO_JOB_HISTORIAL`
--

DROP TABLE IF EXISTS `INFO_JOB_HISTORIAL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INFO_JOB_HISTORIAL` (
  `ID_JOB_HISTORIAL` int(11) NOT NULL AUTO_INCREMENT,
  `JOB_ID` int(11) NOT NULL,
  `OBSERVACION` blob NOT NULL,
  `ESTADO` varchar(20) NOT NULL,
  `FE_CREACION` datetime NOT NULL,
  `USR_CREACION` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_JOB_HISTORIAL`),
  UNIQUE KEY `ID_JOB_HISTORIAL_UNIQUE` (`ID_JOB_HISTORIAL`),
  KEY `JOB_ID_1_idx` (`JOB_ID`),
  CONSTRAINT `JOB_ID_1` FOREIGN KEY (`JOB_ID`) REFERENCES `INFO_JOB` (`ID_JOB`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INFO_JOB_HISTORIAL`
--

LOCK TABLES `INFO_JOB_HISTORIAL` WRITE;
/*!40000 ALTER TABLE `INFO_JOB_HISTORIAL` DISABLE KEYS */;
/*!40000 ALTER TABLE `INFO_JOB_HISTORIAL` ENABLE KEYS */;
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
