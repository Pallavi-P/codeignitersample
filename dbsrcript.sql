-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: student
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `zipcode` int(20) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`zipcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (254,'jk','hk'),(454,'',''),(455,'gdhbd','ghb'),(456,'dfg','dfg'),(465,'fgh','fdg'),(524,'fchtg','fgc'),(752,'klll','jhkhb'),(1656,'hj','jk'),(4554,'l,kkjl','kl,k'),(5353,'gd','fg'),(7525,'klll','jhkhb'),(12345,'fhbfg','fghbfg'),(34454,'df','fd'),(45454,'',''),(54635,',l;','mk;l'),(65465,'ghh','gfh'),(302005,'jaipur','RJ'),(325602,'Kota','RJ'),(382220,'ahmedabad','GJ'),(400053,'mumbai','MH'),(411001,'pune','MH'),(451551,'barwani','MP'),(452001,'indore','MP'),(452543,'hjuk','jhkjhk'),(456010,'Ujjain','M.P.'),(544452,'gjh','gvhj'),(3234343,'',''),(3234454,'dfgf','df'),(3333333,'fg','fg'),(5245646,'fchtg','fgc'),(56635456,'ijl','jkl');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `course_period` varchar(50) DEFAULT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'BE','4 year','26-06','26-06'),(2,'BCS','2 year','2015','2017'),(3,'BSc','3 year','2015','2018'),(4,'BA','2 year','2014','2016'),(5,'MBA','2 year','2016','2018');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(50) DEFAULT NULL,
  `add_line1` varchar(50) DEFAULT NULL,
  `zipcode` int(20) NOT NULL,
  PRIMARY KEY (`std_id`),
  KEY `FK_student_address` (`zipcode`),
  CONSTRAINT `FK_student_address` FOREIGN KEY (`zipcode`) REFERENCES `address` (`zipcode`)
) ENGINE=InnoDB AUTO_INCREMENT=1609 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'AB','mahankal',302005),(2,'CD','achrol',400053),(3,'GH','anjad',456010),(4,'PQ','AB_road',325602),(5,'RS','talvandi',452001),(6,'ST','ujjain',452001),(1571,'hgj','hgj',452543),(1574,'fgh','gfhf',12345),(1576,'ghgvgh','fgh',3333333),(1577,'fh','fg',5353),(1596,'gh','hbjh',544452),(1598,'gdx','rfgxd',524),(1600,'gdx','rfgxd',5245646),(1601,'hg','hgg',254),(1602,'knj','njk',54635),(1603,'tg','gf',34454),(1604,'dsdf','edgfrt',3234454),(1606,'fgdh','fgbh',454),(1607,'fgdh','fgbh',45454),(1608,'dg','fdg',465);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentSkill`
--

DROP TABLE IF EXISTS `studentSkill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studentSkill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` int(11) NOT NULL,
  `skill` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `FK_skills_student` (`std_id`),
  CONSTRAINT `FK_skills_student` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentSkill`
--

LOCK TABLES `studentSkill` WRITE;
/*!40000 ALTER TABLE `studentSkill` DISABLE KEYS */;
INSERT INTO `studentSkill` VALUES (1,1,'singing'),(2,3,'cricket'),(3,4,'travelling'),(4,5,'football'),(5,2,'table tennis');
/*!40000 ALTER TABLE `studentSkill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_course`
--

DROP TABLE IF EXISTS `student_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_course` (
  `stdcourse_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  PRIMARY KEY (`stdcourse_id`),
  KEY `FK__course` (`course_id`),
  KEY `FK_student_course_student` (`std_id`),
  CONSTRAINT `FK_student_course_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  CONSTRAINT `FK_student_course_student` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_course`
--

LOCK TABLES `student_course` WRITE;
/*!40000 ALTER TABLE `student_course` DISABLE KEYS */;
INSERT INTO `student_course` VALUES (2,1,1571),(3,2,1571),(4,3,1571),(5,1,1574),(6,3,1574),(10,2,1576),(11,3,1576),(12,2,1577),(13,3,1577),(38,2,1596),(39,3,1596),(42,1,1598),(43,2,1598),(46,1,1600),(47,2,1600),(48,1,1601),(49,2,1601),(50,1,1602),(51,2,1602),(52,2,1603),(53,3,1603),(54,1,1604),(55,2,1604),(58,1,1606),(59,1,1607),(60,2,1607);
/*!40000 ALTER TABLE `student_course` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-28 10:06:27
