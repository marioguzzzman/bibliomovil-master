-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: biblio-web
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `idcategorias` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcategorias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juego`
--

DROP TABLE IF EXISTS `juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juego` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_trivia` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juego`
--

LOCK TABLES `juego` WRITE;
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_viaja`
--

DROP TABLE IF EXISTS `personal_viaja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_viaja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `DNI` int(11) NOT NULL,
  `Legajo` varchar(10) NOT NULL,
  `Departamento` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Estado_civil` varchar(11) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_viaja`
--

LOCK TABLES `personal_viaja` WRITE;
/*!40000 ALTER TABLE `personal_viaja` DISABLE KEYS */;
INSERT INTO `personal_viaja` VALUES (1,'Acuña, Javier',30709367,'301856',NULL,'AV. CORRIENTES 4264','15-6236-1168','soltero',NULL,'1984-01-29','jahaac1@hotmail.com'),(2,'Alvarez, Natalia',26878028,'301966',NULL,'Av. Mitre 2274 - Avellaneda','15-4027-8811','casada',1872,'1978-09-02','verosj6@hotmail.com'),(3,'Aquino, Maximiliano',27387809,'400720',NULL,'Viamonte 845  13 B','15-6666-0183','soltero',NULL,'1979-09-19','riosblanco@gmail.com'),(4,'Arancibia, Valeria',31963799,'301619',NULL,NULL,'15-5803-6831','soltera',NULL,'1985-11-24','vale.p.arancibia@gmail.com'),(5,'Berrios, Marcela',17922066,'301576',NULL,'Av. Rivadavia 4282 3°G','15-6631-0481','SOLTERA',NULL,NULL,NULL),(6,'Bortni, Lucia',37143440,'301838',NULL,'Billinghurt 943 6° C','15-4085-2841','soltera',NULL,'1992-11-04','luci.bortni@gmail.com'),(7,'Bourdieu, Agustin',28119428,'301625',NULL,'Canal Rompani y Rio Sarmiento','15-6168-9752','soltero',NULL,'1980-06-04','bajounarboldetala@gmail.com'),(8,'Brugnoni, Laura',31090421,'302076',NULL,'ROMULO NAON 4287',NULL,NULL,NULL,NULL,NULL),(9,'Colombres, Tomas',40747003,'401311',NULL,'San Lorenzo 2648 (V. Ballester - San Martin)','15-3130-4193','Soltero ',NULL,'1997-11-04','tomascolombres@gmail.com'),(10,'Coronel, Julieta',37340251,'302254',NULL,'valle 1332 3 A',NULL,NULL,NULL,'1993-02-09',NULL),(11,'Didolich, Micaela Carla Evita',37760258,'401302',NULL,'Rancho 1935 castelar','15-6436-2949','soltera',1712,'1993-08-05','micadidolich@gmail.com'),(12,'Guzman Cerdio, Mario',94002978,'302013',NULL,'Cuba 1836','15-4060-3473','casado',1428,'1985-06-12','mario.cerdio@gmail.com'),(13,'Jamad, Julio',37621019,'Contratado',NULL,'Corrientes 3553 3 A','02954-15-598368','soltero',1189,'1993-07-15','juliojamad10@gmail.com'),(14,'Lataillade, Andrea',14772440,'300823',NULL,'Italia 1569 Timbre 4 ',NULL,'divorciada',NULL,'1961-09-29','andrelataillade@gmail.com'),(15,'Lavigna, Olga',17057789,'301533',NULL,'calle 1 165 rincon de Milberg','15-5327-0119','divorciada',1648,'1964-09-16','bcncontenidosculturales@gmail.com'),(16,'Lukin, Maia',39065537,'301979',NULL,'bogota 2261','15-3705-5515','soltera',NULL,'1995-06-10','maialuna.lukin@gmail.com'),(17,'Lynn, Micaela',32063888,'302020',NULL,'64 1021 la plata (papá Washington 2763)','15-4085-2841','soltera',1900,'1985-12-04','tzaradada@gmail.com'),(18,'Maier, Esteban',29381899,'401231',NULL,NULL,NULL,NULL,NULL,'1982-03-26',NULL),(19,'Mastroiacovo, Ignacio',34632965,'Contratado',NULL,'tucuman 3021','02954-15657440','soltero',1189,'1990-05-22',NULL),(20,'Morato, Sofia',35729941,'302029',NULL,'Anchorena 1267 6to M','15-6934-6510','soltero',NULL,'1991-02-16','sofimorato@gmail.com'),(21,'Pazos, Facundo',31824453,'301.89',NULL,'Corvalan 1710',NULL,NULL,NULL,'1985-11-02',NULL),(22,'Perez, Leticia',18827935,'302108',NULL,'Benjamin Canard 1170','11-5888-3375','Divorciada ',NULL,'1981-11-27','Perezleti@gmail.com'),(23,'Portone, Marianela',25765662,'301655',NULL,'Cabildo 227 2°','15-4074-6992','SOLTERA',NULL,'1977-05-05',NULL),(24,'Salto, Ariel Victor Arturo',20478658,'300957',NULL,'Chaco 104 2do piso B','15-5059-6272','casado',1424,'1968-09-08','arielsalto68@gmail.com'),(25,'Sanchez, Abril',38167263,'302222',NULL,'Italia 1569 Timbre 4 ','15-2343-4225','soltera',NULL,NULL,'bartifula@gmail.com'),(26,'Santa, Ariana',28862268,'301958',NULL,'Av. Independencia 3168 9no 27','15-3685-5900','divorciada',1225,'1981-05-22','ari_maga@yahoo.com.ar'),(27,'Suburu Marranti, Mariel',32677276,'302102',NULL,'Boedo 646 6to piso A','15-6865-3575','soltero',NULL,'1986-10-17','mariel.suburu.marranti@gmail.com'),(28,'Vallejos, Milagros',36647081,'302138',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'Weiss, Marcela',18653768,'301068',NULL,NULL,'15-6125-1766','divorciada',NULL,'1967-05-24','marcelaweiss8@gmail.com');
/*!40000 ALTER TABLE `personal_viaja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pregunta` (
  `idpregunta` int(11) NOT NULL AUTO_INCREMENT,
  `id_trivia` varchar(45) DEFAULT NULL,
  `pregunta` text,
  `tip` text,
  `respuestas_idrespuestas` int(11) NOT NULL,
  `respuestas_id_pregunta` int(11) NOT NULL,
  PRIMARY KEY (`idpregunta`),
  KEY `fk_pregunta_respuestas1_idx` (`respuestas_idrespuestas`,`respuestas_id_pregunta`),
  CONSTRAINT `fk_pregunta_respuestas1` FOREIGN KEY (`respuestas_idrespuestas`, `respuestas_id_pregunta`) REFERENCES `respuestas` (`idrespuestas`, `id_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta`
--

LOCK TABLES `pregunta` WRITE;
/*!40000 ALTER TABLE `pregunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestas` (
  `idrespuestas` int(11) NOT NULL AUTO_INCREMENT,
  `id_pregunta` int(11) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `respuesta2` varchar(100) NOT NULL,
  `correcta` varchar(100) NOT NULL,
  PRIMARY KEY (`idrespuestas`,`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuestas`
--

LOCK TABLES `respuestas` WRITE;
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trivia`
--

DROP TABLE IF EXISTS `trivia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trivia` (
  `idtrivia` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT NULL,
  `categorias_idcategorias` int(11) NOT NULL,
  `pregunta_idpregunta` int(11) NOT NULL,
  PRIMARY KEY (`idtrivia`),
  KEY `fk_trivia_categorias1_idx` (`categorias_idcategorias`),
  KEY `fk_trivia_pregunta1_idx` (`pregunta_idpregunta`),
  CONSTRAINT `fk_trivia_categorias1` FOREIGN KEY (`categorias_idcategorias`) REFERENCES `categorias` (`idcategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trivia_pregunta1` FOREIGN KEY (`pregunta_idpregunta`) REFERENCES `pregunta` (`idpregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trivia`
--

LOCK TABLES `trivia` WRITE;
/*!40000 ALTER TABLE `trivia` DISABLE KEYS */;
/*!40000 ALTER TABLE `trivia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_has_juego`
--

DROP TABLE IF EXISTS `usuario_has_juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_has_juego` (
  `usuario_idusuario` int(11) NOT NULL,
  `juego_id` int(11) NOT NULL,
  `trivia_idtrivia` int(11) NOT NULL,
  PRIMARY KEY (`usuario_idusuario`,`juego_id`),
  KEY `fk_usuario_has_juego_juego1_idx` (`juego_id`),
  KEY `fk_usuario_has_juego_usuario_idx` (`usuario_idusuario`),
  KEY `fk_usuario_has_juego_trivia1_idx` (`trivia_idtrivia`),
  CONSTRAINT `fk_usuario_has_juego_juego1` FOREIGN KEY (`juego_id`) REFERENCES `juego` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_juego_trivia1` FOREIGN KEY (`trivia_idtrivia`) REFERENCES `trivia` (`idtrivia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_juego_usuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_juego`
--

LOCK TABLES `usuario_has_juego` WRITE;
/*!40000 ALTER TABLE `usuario_has_juego` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_has_juego` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-21 12:21:08
