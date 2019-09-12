-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: proyectocn
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `empleado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido_paterno` varchar(50) NOT NULL,
  `Apellido_materno` varchar(50) DEFAULT NULL,
  `Curp` varchar(18) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `Puesto` enum('Gerente','Secretaria','Producci├│n','Finanzas','Logistica') DEFAULT NULL,
  `Estatus` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=100007 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES (100000,'Maria','Guzman','Lopez','12JKJKDS','maria@gmail.com','Secretaria',_binary ''),(100001,'Juan','Hernandez','Torres','13kjkldsj','juan@gmail.com','Gerente',_binary ''),(100002,'Jose','Dominguez','Calderon','12uroeuie','Jose@gmail.com','Producci├│n',_binary ''),(100003,'Guadalupe','Estrada','Gonzalez','3dsfsdf','Lupita@gmail.com','Secretaria',_binary ''),(100004,'Jennifer','Gutierrez','Constantino','434sdfdf','Jenny@gmail.com','Finanzas',_binary ''),(100005,'Rosario','Gaytan','Segura','rwrewrs','ros@gmail.com','Gerente',_binary ''),(100006,'Jesus','Contreras','Gaytan','1werdsf','jesus@gmail.com','Logistica',_binary '');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `registro` (
  `Id_empleado` int(11) NOT NULL,
  `Hora_entrada` datetime NOT NULL,
  `Hora_salida` datetime DEFAULT NULL,
  `Activo` bit(1) NOT NULL,
  `Estatus` bit(1) DEFAULT NULL,
  KEY `Id_empleado` (`Id_empleado`),
  CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`Id_empleado`) REFERENCES `empleado` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` VALUES (100000,'2019-11-24 17:15:10','2013-11-24 17:20:10',_binary '',_binary ''),(100001,'2019-11-24 17:15:10','2013-11-24 17:20:10',_binary '',_binary ''),(100002,'2019-11-24 17:15:10','2013-11-24 17:20:10',_binary '',_binary ''),(100003,'2019-11-24 17:15:10','2013-11-24 17:20:10',_binary '',_binary ''),(100004,'2019-11-24 17:15:10','2013-11-24 17:20:10',_binary '',_binary ''),(100005,'2019-11-24 17:15:10','2013-11-24 17:20:10',_binary '',_binary ''),(100006,'2019-11-24 17:15:10','2013-11-24 17:20:10',_binary '',_binary '');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_empleado` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `Estatus` enum('Dios','Semidios','Mortal') DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_empleado` (`Id_empleado`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_empleado`) REFERENCES `empleado` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=300007 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (300000,100000,'Maria_3','daddsade','Semidios'),(300001,100001,'Juan_H','reterf','Dios'),(300002,100002,'Jose1','dfsdkl','Mortal'),(300003,100003,'Lupita_E','rwerwe','Semidios'),(300004,100004,'Jenny_4','w3423lk','Semidios'),(300005,100005,'Ross_G','34klkjkl','Dios'),(300006,100006,'Jesus_C','kjk323','Semidios');
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

-- Dump completed on 2019-09-12 10:31:49
