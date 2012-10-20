-- MySQL dump 10.13  Distrib 5.1.41, for Win32 (ia32)
--
-- Host: localhost    Database: aes
-- ------------------------------------------------------
-- Server version	5.1.41

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','123456');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answerkey`
--

DROP TABLE IF EXISTS `answerkey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answerkey` (
  `id` int(11) NOT NULL,
  `answer` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answerkey`
--

LOCK TABLES `answerkey` WRITE;
/*!40000 ALTER TABLE `answerkey` DISABLE KEYS */;
/*!40000 ALTER TABLE `answerkey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paper`
--

DROP TABLE IF EXISTS `paper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idd` int(50) NOT NULL,
  `sy` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `subject` varchar(11) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `question` varchar(50) NOT NULL,
  `num_ans` varchar(10) NOT NULL,
  `option1` varchar(30) NOT NULL,
  `option2` varchar(30) NOT NULL,
  `option3` varchar(30) NOT NULL,
  `option4` varchar(30) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=529 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paper`
--

LOCK TABLES `paper` WRITE;
/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
INSERT INTO `paper` VALUES (508,5,'2013-2014','1st Semester','CSC 101','Prelim','Number 5','5','A','B','C','D','A',10),(507,4,'2013-2014','1st Semester','CSC 101','Prelim','Number 4','5','A','B','C','D','A',5),(506,3,'2013-2014','1st Semester','CSC 101','Prelim','Number 3','5','A','B','C','D','A',5),(505,2,'2013-2014','1st Semester','CSC 101','Prelim','Number 2','5','A','B','C','D','A',5),(504,1,'2013-2014','1st Semester','CSC 101','Prelim','Number 1','5','A','B','C','D','A',5),(512,4,'2013-2014','1st Semester','CSC 101','Midterm','Number 4','5','A','B','C','D','B',2),(511,3,'2013-2014','1st Semester','CSC 101','Midterm','Number 3','5','A','B','C','D','B',2),(510,2,'2013-2014','1st Semester','CSC 101','Midterm','Number 2','5','A','B','C','D','B',2),(509,1,'2013-2014','1st Semester','CSC 101','Midterm','Number 1','5','A','B','C','D','B',2),(513,5,'2013-2014','1st Semester','CSC 101','Midterm','Number 5','5','A','B','C','D','B',2),(523,5,'2013-2014','1st Semester','CSC 101','Finals','Number 5','5','A','B','C','D','A',3),(522,4,'2013-2014','1st Semester','CSC 101','Finals','Number 4','5','A','B','C','D','A',3),(521,3,'2013-2014','1st Semester','CSC 101','Finals','Number 3','5','A','B','C','D','A',3),(520,2,'2013-2014','1st Semester','CSC 101','Finals','Number 2','5','A','B','C','D','A',3),(519,1,'2013-2014','1st Semester','CSC 101','Finals','Number 1','5','A','B','C','D','A',3),(524,1,'2013-2014','2nd Semester','CSC 101','Prelim','Number 1','5','A','B','C','D','A',2),(525,2,'2013-2014','2nd Semester','CSC 101','Prelim','Number 2','5','A','B','C','D','A',3),(526,3,'2013-2014','2nd Semester','CSC 101','Prelim','Number 3','5','A','B','C','D','A',3),(527,4,'2013-2014','2nd Semester','CSC 101','Prelim','Number 4','5','A','B','C','D','A',3),(528,5,'2013-2014','2nd Semester','CSC 101','Prelim','Number 5','5','A','B','C','D','A',3);
/*!40000 ALTER TABLE `paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_answer`
--

DROP TABLE IF EXISTS `student_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_answer` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `idno` varchar(50) NOT NULL,
  `sy` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `subject` varchar(11) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `num_ans` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=282 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_answer`
--

LOCK TABLES `student_answer` WRITE;
/*!40000 ALTER TABLE `student_answer` DISABLE KEYS */;
INSERT INTO `student_answer` VALUES (281,'2013-0001','2013-2014','1st Semester','CSC 101','Prelim',30,30);
/*!40000 ALTER TABLE `student_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `idno` varchar(50) NOT NULL,
  `course` varchar(5) NOT NULL,
  `year` int(1) NOT NULL,
  `sy` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3232324 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (29,'Charlie Yee','2013-0001','BSCS',1,'2013-2014','1st Semester','CSC 101','B1','tsaparlippi','d8578edf8458ce06fbc5bb76a58c5ca4');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `sy` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `section1` varchar(11) NOT NULL,
  `section2` varchar(11) NOT NULL,
  `section3` varchar(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (74,'CSC 101','2013-2014','1st Semester','Z1','Z2','Z3');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp` (
  `idno` varchar(30) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `sy` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp`
--

LOCK TABLES `temp` WRITE;
/*!40000 ALTER TABLE `temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-10-18  8:30:34
