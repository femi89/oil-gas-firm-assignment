-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: oil_gas
-- ------------------------------------------------------
-- Server version	5.7.28

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
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id_post` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_title` varchar(1045) DEFAULT NULL,
  `post_body` longblob,
  `feature_image` varchar(2345) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `post_id` varchar(415) DEFAULT NULL,
  PRIMARY KEY (`id_post`),
  UNIQUE KEY `id_post_UNIQUE` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Something is missing from the way we view things',_binary 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a feugiat justo. Sed eu dolor nec sapien bibendum convallis. Sed viverra non erat eget interdum. Phasellus lorem mi, tincidunt sed fermentum a, accumsan a erat. Proin pellentesque euismod sapien at placerat. Integer cursus, arcu id congue malesuada, sem libero suscipit nisi, sit amet auctor nulla nunc sit amet mi. Vestibulum varius gravida ex in tristique. Duis gravida ex vitae ornare lobortis. Praesent ultricies diam quis bibendum interdum. Ut pulvinar maximus dui et dictum. Phasellus in vestibulum quam, ac auctor purus. Nunc elementum eget justo non vulputate.\n\nMorbi leo dolor, vehicula at ultricies in, efficitur eu justo. Integer auctor convallis purus, et convallis lectus placerat in. Cras sed nibh tristique, viverra erat at, efficitur nisi. Vivamus elementum nulla vitae nisi laoreet, ac aliquam diam facilisis. Maecenas augue lectus, sollicitudin ut pulvinar id, ornare sit amet erat. Maecenas viverra lacus ac massa ornare, ac malesuada leo pretium. Integer iaculis, magna et iaculis feugiat, elit enim lacinia ex, sit amet semper urna ante in felis. Etiam lobortis eget risus quis efficitur. Aliquam mollis nulla id neque cursus, nec molestie quam mattis. Quisque pulvinar sem eget justo pellentesque, non molestie urna ultrices. Aenean nec orci id nunc aliquam eleifend sed et massa. Pellentesque at ligula vel metus aliquet aliquet. Mauris in ipsum vel massa vehicula varius in sit amet sapien. Phasellus sodales et urna in tincidunt. Duis id felis lorem. Curabitur ultrices velit libero.\n\nSuspendisse hendrerit in nibh in volutpat. Integer euismod eros sit amet augue euismod cursus. Phasellus ipsum nulla, dictum eget blandit eget, pellentesque id purus. Sed nec augue odio. Nunc sodales urna libero, eu tincidunt dui sagittis ut. Phasellus id aliquam neque. Phasellus ullamcorper dui elit, nec placerat felis vestibulum id. Vestibulum lacinia volutpat laoreet. Suspendisse eu nulla arcu. Suspendisse ut enim massa. Aliquam nec dolor sed dolor elementum venenatis. Aliquam eget augue eget lacus euismod euismod ut sit amet diam.\n\nSuspendisse sollicitudin consectetur justo eget lacinia. Praesent mi diam, tristique nec arcu vitae, bibendum pretium nulla. Suspendisse lorem diam, euismod at urna vitae, commodo ornare enim. In tristique condimentum ullamcorper. Nunc a purus maximus, maximus ligula id, porttitor diam. Aliquam magna dolor, varius et metus at, scelerisque vehicula risus. Mauris pulvinar vel dolor non condimentum. Nulla placerat commodo pretium. Phasellus ut ante mollis diam dignissim sodales. Quisque condimentum, quam non aliquet porta, ante neque ultrices tortor, id tincidunt ex lectus et nibh. Aliquam erat volutpat. Donec tellus tortor, semper ut porta vitae, blandit ac nulla. Quisque ac dolor nibh. Nulla et felis ultricies, scelerisque neque non, tempus velit.\n\nEtiam id dui velit. Pellentesque feugiat aliquet blandit. Donec sem dolor, finibus id risus eu, accumsan porta metus. Vestibulum finibus, felis sed pretium blandit, purus neque rutrum nisi, vitae elementum dolor turpis sed metus. Donec auctor tempus metus, ac elementum felis vestibulum eu. Duis ut pulvinar nisl, vitae convallis dolor. Cras id justo et lectus vehicula pulvinar at nec odio. Donec viverra elementum nibh sed tempor. Vestibulum aliquet maximus ullamcorper. Quisque velit quam, gravida ac ante quis, fermentum rutrum libero. Nunc viverra volutpat justo, sit amet pretium lectus vestibulum vitae. Cras ut quam accumsan, pretium diam sed, suscipit ligula. Vestibulum tincidunt urna sed est facilisis, sit amet interdum mauris vestibulum. Ut a est lacus. ','assets/img/permian-project-tile.jpg','1581447746','234521'),(3,'Is missing from the way we view things',_binary 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a feugiat justo. Sed eu dolor nec sapien bibendum convallis. Sed viverra non erat eget interdum. Phasellus lorem mi, tincidunt sed fermentum a, accumsan a erat. Proin pellentesque euismod sapien at placerat. Integer cursus, arcu id congue malesuada, sem libero suscipit nisi, sit amet auctor nulla nunc sit amet mi. Vestibulum varius gravida ex in tristique. Duis gravida ex vitae ornare lobortis. Praesent ultricies diam quis bibendum interdum. Ut pulvinar maximus dui et dictum. Phasellus in vestibulum quam, ac auctor purus. Nunc elementum eget justo non vulputate.\n\nMorbi leo dolor, vehicula at ultricies in, efficitur eu justo. Integer auctor convallis purus, et convallis lectus placerat in. Cras sed nibh tristique, viverra erat at, efficitur nisi. Vivamus elementum nulla vitae nisi laoreet, ac aliquam diam facilisis. Maecenas augue lectus, sollicitudin ut pulvinar id, ornare sit amet erat. Maecenas viverra lacus ac massa ornare, ac malesuada leo pretium. Integer iaculis, magna et iaculis feugiat, elit enim lacinia ex, sit amet semper urna ante in felis. Etiam lobortis eget risus quis efficitur. Aliquam mollis nulla id neque cursus, nec molestie quam mattis. Quisque pulvinar sem eget justo pellentesque, non molestie urna ultrices. Aenean nec orci id nunc aliquam eleifend sed et massa. Pellentesque at ligula vel metus aliquet aliquet. Mauris in ipsum vel massa vehicula varius in sit amet sapien. Phasellus sodales et urna in tincidunt. Duis id felis lorem. Curabitur ultrices velit libero.\n\nSuspendisse hendrerit in nibh in volutpat. Integer euismod eros sit amet augue euismod cursus. Phasellus ipsum nulla, dictum eget blandit eget, pellentesque id purus. Sed nec augue odio. Nunc sodales urna libero, eu tincidunt dui sagittis ut. Phasellus id aliquam neque. Phasellus ullamcorper dui elit, nec placerat felis vestibulum id. Vestibulum lacinia volutpat laoreet. Suspendisse eu nulla arcu. Suspendisse ut enim massa. Aliquam nec dolor sed dolor elementum venenatis. Aliquam eget augue eget lacus euismod euismod ut sit amet diam.\n\nSuspendisse sollicitudin consectetur justo eget lacinia. Praesent mi diam, tristique nec arcu vitae, bibendum pretium nulla. Suspendisse lorem diam, euismod at urna vitae, commodo ornare enim. In tristique condimentum ullamcorper. Nunc a purus maximus, maximus ligula id, porttitor diam. Aliquam magna dolor, varius et metus at, scelerisque vehicula risus. Mauris pulvinar vel dolor non condimentum. Nulla placerat commodo pretium. Phasellus ut ante mollis diam dignissim sodales. Quisque condimentum, quam non aliquet porta, ante neque ultrices tortor, id tincidunt ex lectus et nibh. Aliquam erat volutpat. Donec tellus tortor, semper ut porta vitae, blandit ac nulla. Quisque ac dolor nibh. Nulla et felis ultricies, scelerisque neque non, tempus velit.\n\nEtiam id dui velit. Pellentesque feugiat aliquet blandit. Donec sem dolor, finibus id risus eu, accumsan porta metus. Vestibulum finibus, felis sed pretium blandit, purus neque rutrum nisi, vitae elementum dolor turpis sed metus. Donec auctor tempus metus, ac elementum felis vestibulum eu. Duis ut pulvinar nisl, vitae convallis dolor. Cras id justo et lectus vehicula pulvinar at nec odio. Donec viverra elementum nibh sed tempor. Vestibulum aliquet maximus ullamcorper. Quisque velit quam, gravida ac ante quis, fermentum rutrum libero. Nunc viverra volutpat justo, sit amet pretium lectus vestibulum vitae. Cras ut quam accumsan, pretium diam sed, suscipit ligula. Vestibulum tincidunt urna sed est facilisis, sit amet interdum mauris vestibulum. Ut a est lacus. ','assets/img/363.jpg','1581443746','341234'),(4,'New OPAC price from the market price',_binary 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a feugiat justo. Sed eu dolor nec sapien bibendum convallis. Sed viverra non erat eget interdum. Phasellus lorem mi, tincidunt sed fermentum a, accumsan a erat. Proin pellentesque euismod sapien at placerat. Integer cursus, arcu id congue malesuada, sem libero suscipit nisi, sit amet auctor nulla nunc sit amet mi. Vestibulum varius gravida ex in tristique. Duis gravida ex vitae ornare lobortis. Praesent ultricies diam quis bibendum interdum. Ut pulvinar maximus dui et dictum. Phasellus in vestibulum quam, ac auctor purus. Nunc elementum eget justo non vulputate.\n\nMorbi leo dolor, vehicula at ultricies in, efficitur eu justo. Integer auctor convallis purus, et convallis lectus placerat in. Cras sed nibh tristique, viverra erat at, efficitur nisi. Vivamus elementum nulla vitae nisi laoreet, ac aliquam diam facilisis. Maecenas augue lectus, sollicitudin ut pulvinar id, ornare sit amet erat. Maecenas viverra lacus ac massa ornare, ac malesuada leo pretium. Integer iaculis, magna et iaculis feugiat, elit enim lacinia ex, sit amet semper urna ante in felis. Etiam lobortis eget risus quis efficitur. Aliquam mollis nulla id neque cursus, nec molestie quam mattis. Quisque pulvinar sem eget justo pellentesque, non molestie urna ultrices. Aenean nec orci id nunc aliquam eleifend sed et massa. Pellentesque at ligula vel metus aliquet aliquet. Mauris in ipsum vel massa vehicula varius in sit amet sapien. Phasellus sodales et urna in tincidunt. Duis id felis lorem. Curabitur ultrices velit libero.\n\nSuspendisse hendrerit in nibh in volutpat. Integer euismod eros sit amet augue euismod cursus. Phasellus ipsum nulla, dictum eget blandit eget, pellentesque id purus. Sed nec augue odio. Nunc sodales urna libero, eu tincidunt dui sagittis ut. Phasellus id aliquam neque. Phasellus ullamcorper dui elit, nec placerat felis vestibulum id. Vestibulum lacinia volutpat laoreet. Suspendisse eu nulla arcu. Suspendisse ut enim massa. Aliquam nec dolor sed dolor elementum venenatis. Aliquam eget augue eget lacus euismod euismod ut sit amet diam.\n\nSuspendisse sollicitudin consectetur justo eget lacinia. Praesent mi diam, tristique nec arcu vitae, bibendum pretium nulla. Suspendisse lorem diam, euismod at urna vitae, commodo ornare enim. In tristique condimentum ullamcorper. Nunc a purus maximus, maximus ligula id, porttitor diam. Aliquam magna dolor, varius et metus at, scelerisque vehicula risus. Mauris pulvinar vel dolor non condimentum. Nulla placerat commodo pretium. Phasellus ut ante mollis diam dignissim sodales. Quisque condimentum, quam non aliquet porta, ante neque ultrices tortor, id tincidunt ex lectus et nibh. Aliquam erat volutpat. Donec tellus tortor, semper ut porta vitae, blandit ac nulla. Quisque ac dolor nibh. Nulla et felis ultricies, scelerisque neque non, tempus velit.\n\nEtiam id dui velit. Pellentesque feugiat aliquet blandit. Donec sem dolor, finibus id risus eu, accumsan porta metus. Vestibulum finibus, felis sed pretium blandit, purus neque rutrum nisi, vitae elementum dolor turpis sed metus. Donec auctor tempus metus, ac elementum felis vestibulum eu. Duis ut pulvinar nisl, vitae convallis dolor. Cras id justo et lectus vehicula pulvinar at nec odio. Donec viverra elementum nibh sed tempor. Vestibulum aliquet maximus ullamcorper. Quisque velit quam, gravida ac ante quis, fermentum rutrum libero. Nunc viverra volutpat justo, sit amet pretium lectus vestibulum vitae. Cras ut quam accumsan, pretium diam sed, suscipit ligula. Vestibulum tincidunt urna sed est facilisis, sit amet interdum mauris vestibulum. Ut a est lacus. ','assets/img/gorgon-tile.jpg','1581447165','546789');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-12 21:21:41