/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.34 : Database - sebayhotel_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `audit` */

DROP TABLE IF EXISTS `audit`;

CREATE TABLE `audit` (
  `auditid` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT NULL,
  `sample` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`auditid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `audit` */

insert  into `audit`(`auditid`,`timestamp`,`sample`) values (1,NULL,'sadasd'),(2,NULL,'ddddd');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `empNo` varchar(10) NOT NULL DEFAULT 'NONE',
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `ename` varbinary(100) DEFAULT NULL,
  `designation` varchar(100) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `employee` */

insert  into `employee`(`eid`,`empNo`,`lname`,`fname`,`mname`,`ename`,`designation`) values (2,'3065','Casem','Elvin','Estoque',NULL,'Instructor I'),(4,'NONE','Buenio','Nympha','N.','','Chief Administrative Officer'),(5,'NONE','Galera Jr.','Rogelio','T',NULL,'ES II / Supply Officer Designate'),(7,'NONE','Diego','Cherrie Melanie','A.','Ed. D.','Director IV'),(9,'10001','Cabanban','Christianne Lynnette','G','','Education Supervisor II');

/*Table structure for table `guest` */

DROP TABLE IF EXISTS `guest`;

CREATE TABLE `guest` (
  `guestID` int(11) NOT NULL AUTO_INCREMENT,
  `guestType` varchar(15) DEFAULT 'INDIVIDUAL',
  `guestName` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contactNo` varchar(35) DEFAULT 'NONE',
  `eMail` varchar(50) DEFAULT 'NONE',
  `fb` varchar(50) DEFAULT 'NONE',
  `nationality` varchar(300) DEFAULT 'NONE',
  PRIMARY KEY (`guestID`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=latin1;

/*Data for the table `guest` */

insert  into `guest`(`guestID`,`guestType`,`guestName`,`address`,`contactNo`,`eMail`,`fb`,`nationality`) values (73,'INDIVIDUAL','LIEZEL ABRQUE','NONE','09464625077','NONE','NONE','NONE'),(74,'INDIVIDUAL','ALI DANA','NONE','09175120193','NONE','NONE','NONE'),(75,'INDIVIDUAL','CHARISSA GOMEZ','NONE','09434798560','NONE','NONE','NONE'),(76,'INDIVIDUAL','DOLLY GRACE PANGILINAN','NONE','09173242880','NONE','NONE','NONE'),(77,'INDIVIDUAL','MARIE STEPHANIE CHING','NONE','09178005079','NONE','NONE','NONE'),(78,'INDIVIDUAL','INA MOLANO','NONE','09178192764','NONE','NONE','NONE'),(79,'INDIVIDUAL','BUENA MERCADO','NONE','09179744030','NONE','NONE','NONE'),(80,'INDIVIDUAL','MINI BERENGULA','NONE','09173123497','NONE','NONE','NONE'),(81,'INDIVIDUAL','LOURDES HERERRA','NONE','09065736176','NONE','NONE','NONE'),(82,'INDIVIDUAL','MAJORIE TORRES','NONE','09175100952','NONE','NONE','NONE'),(83,'INDIVIDUAL','ROMINA JO OPULENCIA','NONE','09175926117','NONE','NONE','NONE'),(84,'INDIVIDUAL','MARI DELA CRUZ','NONE','09176581114','NONE','NONE','NONE'),(85,'INDIVIDUAL','TELLA UY','NONE','09178663540','NONE','NONE','NONE'),(86,'INDIVIDUAL','AR AR REYES','NONE','09178874710','NONE','NONE','NONE'),(87,'INDIVIDUAL','JOHANNE SIBUG','NONE','09989849015','NONE','NONE','NONE'),(88,'INDIVIDUAL','JEAN HERNANDEZ','NONE','09178499426','NONE','NONE','NONE'),(89,'INDIVIDUAL','RALPH KESTER RAGAZA','NONE','09165993023','NONE','NONE','NONE'),(90,'INDIVIDUAL','KRISTINE PIZZARO','NONE','09154005964','NONE','NONE','NONE'),(91,'INDIVIDUAL','DOUGLAS PRADO','NONE','09056628591','NONE','NONE','NONE'),(92,'INDIVIDUAL','ICE TAN','NONE','09175361209','NONE','NONE','NONE'),(93,'INDIVIDUAL','KRIZIA CAMILLE VARGAS','NONE','09159140726','NONE','NONE','NONE'),(94,'INDIVIDUAL','BERNALDEEN UY','NONE','09248164700','NONE','NONE','NONE'),(95,'INDIVIDUAL','EDGARDO CUEVAS','NONE','09351584257','NONE','NONE','NONE'),(96,'INDIVIDUAL','CRISTINA MORALES','NONE','09178964127','NONE','NONE','NONE'),(97,'INDIVIDUAL','GEO PATRICIO','NONE','09164206421','NONE','NONE','NONE'),(98,'INDIVIDUAL','NICA BALISI','NONE','09175973224','NONE','NONE','NONE'),(99,'INDIVIDUAL','MARISEN JERUSALEM','NONE','09178192764','NONE','NONE','NONE'),(100,'INDIVIDUAL','JAY LACARTE','NONE','09989576990','NONE','NONE','NONE'),(101,'INDIVIDUAL','VIELA SANTOS','NONE','09176320228','NONE','NONE','NONE'),(102,'INDIVIDUAL','NEIL ANDRE ABAD','NONE','09171480511','NONE','NONE','NONE'),(103,'INDIVIDUAL','LENNY CRISTOBAL','NONE','09158578472','NONE','NONE','NONE'),(104,'INDIVIDUAL','HELENA TIONGSON','NONE','09178670656','NONE','NONE','NONE'),(105,'INDIVIDUAL','EDMOND DEFIESTA','NONE','09174426610','NONE','NONE','NONE'),(106,'INDIVIDUAL','KING MONFEREAL','NONE','09162019144','NONE','NONE','NONE'),(107,'INDIVIDUAL','JONEL DERILO','NONE','09273766482','NONE','NONE','NONE'),(108,'INDIVIDUAL','LEYD TULUD','NONE','09175912754','NONE','NONE','NONE'),(109,'INDIVIDUAL','JACOB EHMSEN','NONE','09156913216','NONE','NONE','DANISH'),(110,'INDIVIDUAL','ANNA MARIE MACARAIG','NONE','09156913216','NONE','NONE','NONE'),(111,'INDIVIDUAL','DENNIS GONZALO LABORDO','NONE','09176431949','NONE','NONE','NONE'),(112,'INDIVIDUAL','LIA CABUSORA','NONE','09175180274','NONE','NONE','NONE'),(113,'INDIVIDUAL','JAYZEL BABLES','NONE','09175052607','NONE','NONE','NONE'),(114,'INDIVIDUAL','JONALYN PINSON','NONE','09175135333','NONE','NONE','NONE'),(115,'INDIVIDUAL','JOHN JASON ALBERTO','NONE','09063566839','NONE','NONE','NONE'),(116,'INDIVIDUAL','KRITINE FETALVERO','NONE','09363100071','NONE','NONE','NONE'),(117,'INDIVIDUAL','JANIAH PACLETA','NONE','09989689290','NONE','NONE','NONE'),(118,'INDIVIDUAL','FILIPINAS CARVAJAL','NONE','09063099480','NONE','NONE','NONE'),(119,'INDIVIDUAL','HERMAN TIU','NONE','09178880589','NONE','NONE','NONE'),(120,'INDIVIDUAL','CEDRIC ABACCO','NONE','09128535788','NONE','NONE','NONE'),(121,'INDIVIDUAL','NISSIN','NONE','09275844986','NONE','NONE','NONE'),(122,'INDIVIDUAL','JAKE MARTIN TAGARO','NONE','09178825253','NONE','NONE','NONE'),(123,'INDIVIDUAL','ALBERT AVECILLA','NONE','09175329453','NONE','NONE','NONE'),(124,'INDIVIDUAL','RONALD MACALLE','NONE','09175329453','NONE','NONE','NONE'),(125,'INDIVIDUAL','EILEEN CRUZ','NONE','09175860786','NONE','NONE','NONE'),(126,'INDIVIDUAL','HARVIN TIU AND HERMAN TIU','NONE','09178880589','NONE','NONE','NONE'),(127,'INDIVIDUAL','KRISSAR UDDING','NONE','+966550475617','NONE','NONE','NONE'),(128,'INDIVIDUAL','ANDREA BAGOTTO','NONE','09258015638','NONE','NONE','NONE'),(129,'INDIVIDUAL','CLAIRE V.','NONE','09985443226','NONE','NONE','NONE'),(130,'INDIVIDUAL','JESS MARK ONG','NONE','09778119216','NONE','NONE','NONE'),(131,'INDIVIDUAL','SAMPLE','NONE','NONE','NONE','NONE','NONE'),(132,'INDIVIDUAL','JC CASTILLO','NONE','09989985146','NONE','NONE','NONE'),(133,'INDIVIDUAL','JEROME AQUINO','NONE','09173198907','NONE','NONE','NONE'),(134,'INDIVIDUAL','RACHEL MOONG','NONE','09176299521','NONE','NONE','NONE'),(135,'INDIVIDUAL','TEODORO JOSE ORQUIZA','NONE','09175829404','NONE','NONE','NONE'),(136,'INDIVIDUAL','AILEEN SERRANO','NONE','09175821844','NONE','NONE','NONE'),(137,'INDIVIDUAL','DRAHCIR SALAZAR','NONE','09175200242','NONE','NONE','NONE'),(138,'INDIVIDUAL','ERJOSH SALVAME','NONE','09228883505','NONE','NONE','NONE'),(139,'INDIVIDUAL','JOANNE PACIS','NONE','0917839941','NONE','NONE','NONE'),(140,'INDIVIDUAL','CARLO SAMBILAY','NONE','09177201129','NONE','NONE','NONE'),(141,'INDIVIDUAL','CARLO RENIVA','NONE','NONE','NONE','NONE','NONE'),(142,'INDIVIDUAL','DAYDEE VILLARAMA','NONE','09178504776','NONE','NONE','NONE'),(143,'INDIVIDUAL','ZUZETE','NONE','09178879496','NONE','NONE','NONE'),(144,'INDIVIDUAL','KIM MIN WOO','NONE','09954574362','NONE','NONE','NONE'),(145,'INDIVIDUAL','CHESTER MARK SUPANG','NONE','09154472431','NONE','NONE','NONE'),(146,'INDIVIDUAL','ROCHELLE ANN PADOLINA','NONE','09158242225','NONE','NONE','NONE'),(147,'INDIVIDUAL','JOHANN PAG-ONG','NONE','09175546236','NONE','NONE','NONE'),(148,'INDIVIDUAL','TOM AND JOY','NONE','NONE','NONE','NONE','NONE'),(149,'INDIVIDUAL','ISAIAH SERRANO','NONE','09063265613','NONE','NONE','NONE'),(150,'INDIVIDUAL','BERNADETTE AQUINO','NONE','09425681025','NONE','NONE','NONE'),(151,'INDIVIDUAL','JAYSON CHAVEZ','NONE','09176922069','NONE','NONE','NONE'),(152,'INDIVIDUAL','ANTOLIN CAPILI','NONE','09999912175','NONE','NONE','NONE'),(153,'INDIVIDUAL','JAN MICHAEL VICENTE','NONE','09159601955','NONE','NONE','NONE'),(154,'INDIVIDUAL','LOUISA RAMIREZ','NONE','09778121213','NONE','NONE','NONE'),(155,'INDIVIDUAL','ARLENE PASAGUI','NONE','NONE','NONE','NONE','NONE'),(156,'INDIVIDUAL','RICA KING','NONE','09062040967','NONE','NONE','NONE'),(157,'INDIVIDUAL','LYSSA ILAGAN','NONE','09175930864','NONE','NONE','NONE'),(158,'INDIVIDUAL','JENICA MONTALBO','NONE','09276245589','NONE','NONE','NONE'),(159,'INDIVIDUAL','BERNADETTE ENCAMACION','NONE','09277102102','NONE','NONE','NONE'),(160,'INDIVIDUAL','HAZEL ALQUIZA','NONE','09054618838','NONE','NONE','NONE'),(161,'INDIVIDUAL','JELLY FERNANDEZ','NONE','09154540997','NONE','NONE','NONE'),(162,'INDIVIDUAL','MIKE FERNANDEZ','NONE','NONE','NONE','NONE','NONE'),(163,'INDIVIDUAL','JACOB EHMEN','STOKED S2 8980 RA','0045 5134 6821','NONE','NONE','DANISH'),(164,'INDIVIDUAL','ELYMAR JAVAR','NONE','09988438142','NONE','NONE','NONE'),(165,'INDIVIDUAL','CHESKA GARCIA','NONE','09175671345','NONE','NONE','NONE'),(166,'INDIVIDUAL','CIELO TORRES','NONE','09175997172','NONE','NONE','NONE'),(167,'INDIVIDUAL','EDUARO','NONE','NONE','NONE','NONE','NONE'),(168,'INDIVIDUAL','MAFEL TAMAYO','NONE','09189853606','NONE','NONE','NONE'),(169,'INDIVIDUAL','LEIGH FORMOSO','NONE','09985559394','NONE','NONE','NONE'),(170,'INDIVIDUAL','LOYO TULUD','NONE','09175912754','NONE','NONE','NONE'),(171,'INDIVIDUAL','AARON MANALANZAN','NONE','09399450498','NONE','NONE','NONE'),(172,'INDIVIDUAL','LORELEI AREVALO','NONE','09228474016','NONE','NONE','NONE'),(173,'INDIVIDUAL','DIANA VILLEGAS','NONE','09178688061','NONE','NONE','NONE'),(174,'INDIVIDUAL','FRANCIS DELA CRUZ','NONE','09175866783','NONE','NONE','NONE'),(175,'INDIVIDUAL','ROMEO RAMOS JR.','NONE','09175151106','NONE','NONE','NONE'),(176,'INDIVIDUAL','KRISTINE FETALVERO','NONE','09363100071','NONE','NONE','NONE'),(177,'INDIVIDUAL','CZARLEMAME SEE','NONE','09175353787','NONE','NONE','NONE'),(178,'INDIVIDUAL','ABBIE MENGUITA','NONE','09175402380','NONE','NONE','NONE'),(179,'INDIVIDUAL','RIZZA ALON','NONE','09178159213','NONE','NONE','NONE'),(180,'INDIVIDUAL','BALGACHOR CADIMAS','NONE','09162609312','NONE','NONE','NONE'),(181,'INDIVIDUAL','GINA NINAUS','NONE','NONE','NONE','NONE','NONE'),(182,'INDIVIDUAL','ROY TIU','BULACAN','09174218477','NONE','NONE','NONE'),(183,'INDIVIDUAL','MICHAEL YONGEVE','PASAY CITY','09178369493','NONE','NONE','NONE'),(184,'INDIVIDUAL','JOSEPH ABELLERA','NONE','NONE','NONE','NONE','NONE'),(185,'INDIVIDUAL','CHRISTIAN QUIBUYEN','NUEVA ECIJA','09066812741','','NONE','FILIPINO'),(186,'INDIVIDUAL','XANDY LU','NONE','09321127755','NONE','NONE','NONE'),(187,'INDIVIDUAL','ROEL MAMAAT (DOUGLAS PRADO)','44 PEREZ BLVD. SAN CARLOS CITY, PANGASINAN','09159410607','NONE','NONE','FILIPINO'),(188,'INDIVIDUAL','ROEL MAMAT (DOUGLAS PRADO)','44 PEREZ BLVD. SAN CARLOS CITY, PANGASINAN','09159410607','NONE','NONE','FILIPINO'),(189,'INDIVIDUAL','EVANGELINE SICANGCO','NONE','2017246929','NONE','NONE','FILIPINO'),(190,'INDIVIDUAL','SHAIKHANI KHALIL S.','BAGUIO CITY','09771388379','NONE','NONE','NONE'),(191,'COMPANY','EVENLY TEN WEB SOLUTIONS','NONE','NONE','NONE','NONE','NONE'),(192,'INDIVIDUAL','ELVIN','NONE','NONE','NONE','NONE','NONE'),(193,'INDIVIDUAL','IVAN ALICANTE','CABA','NONE','NONE','NONE','NONE');

/*Table structure for table `inventory` */

DROP TABLE IF EXISTS `inventory`;

CREATE TABLE `inventory` (
  `inventoryid` int(11) NOT NULL AUTO_INCREMENT,
  `itemNo` int(11) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`inventoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `inventory` */

insert  into `inventory`(`inventoryid`,`itemNo`,`unit`,`qty`,`time_stamp`) values (19,30,'PC',50,'2016-07-11 07:43:34'),(20,3,'PC',5,'2016-07-11 07:43:59');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `itemNo` bigint(20) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL DEFAULT 'Equipment',
  `unit` varchar(20) NOT NULL DEFAULT 'PC',
  `pc_per_unit` int(11) DEFAULT NULL,
  `unitCost` double(10,2) NOT NULL,
  `inventory_qty` int(11) DEFAULT '0',
  `supplierID` int(11) DEFAULT '0',
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

/*Data for the table `items` */

insert  into `items`(`itemNo`,`description`,`category`,`unit`,`pc_per_unit`,`unitCost`,`inventory_qty`,`supplierID`) values (2,'Red Sign Pen','Office Supply','PC',1,15.00,0,0),(3,'21\" Philips LCD Monitor','Equipment','PC',1,15.50,5,3),(4,'A4tech Keyboard','Equipment','PC',1,250.75,0,0),(18,'Certificate Holder','Office Supply','PC',1,100.50,0,0),(19,'Parchment Paper','Office Supply','PC',1,50.00,0,0),(24,'Pencils','Office Supply','BOX',12,25.00,0,0),(26,'Coupon Bond Long','Office Supply','REAM',500,180.00,0,0),(27,'Ballpen','Equipment','PC',1,10.00,0,2),(30,'Eraser','Office Supply','PC',1,25.00,100,1),(31,'Coupon Bond Short','Office Supply','REAM',1,150.00,0,1);

/*Table structure for table `offices` */

DROP TABLE IF EXISTS `offices`;

CREATE TABLE `offices` (
  `transid` bigint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(15) DEFAULT NULL,
  `office` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`transid`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

/*Data for the table `offices` */

insert  into `offices`(`transid`,`code`,`office`) values (1,'CAS','COLLEGE OF ARTS AND SCIENCES'),(2,'CE','COLLEGE OF EDUCATION'),(3,'CCS','COLLEGE OF COMPUTER SCIENCE'),(4,'CGS','COLLEGE OF GRADUATE STUDIES'),(5,'IA','INSTITUTE OF AGRICULTURE'),(6,'IF','INSTITUTE OF FISHERIES'),(7,'CHANC','CHANCELLOR'),(8,'PRES','PRESIDENT'),(10,'AO','ADMINISTRATIVE OFFICE'),(11,'AUX','AUXILLARY'),(13,'BAO','BUSINESS AFFAIRS OFFICE'),(14,'COA','COMMISSION ON AUDIT'),(15,'CUL','CULTURAL'),(16,'DORM','DORMITORY'),(17,'FIN','FINANCE'),(18,'HI','HEAD OF INSTRUCTION'),(19,'HRMO','HUMAN RESOURCE MANAGEMENT OFFICE'),(20,'LIB','LIBRARY'),(21,'MIS','MANAGEMENT INFORMATION SYSTEM'),(22,'MED','MEDICAL/DENTAL'),(23,'MPOOL','MOTORPOOL'),(24,'NSTP','NATIONAL SERVICE TRAINING PROGRAM'),(25,'OTH','OTHERS'),(26,'PCC','PHILIPPINE CARABAO CENTER'),(27,'PLAN','PLANNING/INFRA'),(28,'RO','RECORDS OFFICE'),(29,'REG','REGISTRAR'),(30,'R&E','RESEARCH AND EXTENSION'),(31,'SEC','SECURITY OFFICE'),(32,'SPORT','SPORTS'),(33,'SAS','STUDENT AFFAIRS SERVICES'),(34,'SUPPLY','SUPPLY OFFICE'),(36,'ICH','ICHAMS'),(39,'NTA','NON-TEACHING ASSOCIATION'),(40,'FAD','FACULTY ASSOCIATION OF DMMMSU'),(44,'OUS','OPEN UNIVERSITY SYSTEM'),(46,'BAC','BIDS AND AWARDS COMMITTEE'),(53,'BOT','BOTIKA'),(54,'ALUM','DMMMSU ALUMNI ASSOCIATION'),(56,'PUB','SCHOOL PUBLICATION'),(65,'EXT','EXTENSION'),(81,'DZAG','DZAG RADIO STATION');

/*Table structure for table `pr_list` */

DROP TABLE IF EXISTS `pr_list`;

CREATE TABLE `pr_list` (
  `transID` bigint(20) NOT NULL AUTO_INCREMENT,
  `prNo` varchar(20) NOT NULL,
  `department` varchar(80) NOT NULL,
  `section` varchar(80) NOT NULL,
  `prDate` date NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `requestedbyeid` varchar(50) DEFAULT NULL,
  `requestedBy` varchar(80) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`transID`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

/*Data for the table `pr_list` */

insert  into `pr_list`(`transID`,`prNo`,`department`,`section`,`prDate`,`purpose`,`requestedbyeid`,`requestedBy`,`designation`,`status`) values (75,'2014-27','DMMMSU-SLUC','COLLEGE OF ARTS AND SCIENCES','2015-04-06','asd',NULL,'Jerome Petonio Songcuan','MIS Head','PENDING'),(76,'2015-28','DMMMSU-SLUC','COLLEGE OF COMPUTER SCIENCE','2015-04-06','asd',NULL,'Elvin Estoque Casem','Instructor I','PENDING'),(78,'2015-30','DMMMSU-SLUC','COLLEGE OF EDUCATION','2015-04-06','asd',NULL,'Jerome Petonio Songcuan','MIS Head','PENDING'),(80,'2015-32','DMMMSU-SLUC','COLLEGE OF COMPUTER SCIENCE','2015-04-06','asf',NULL,'Elvin Estoque Casem','Instructor I','PENDING'),(83,'2015-35','DMMMSU-SLUC','COLLEGE OF GRADUATE STUDIES','2015-04-06','asd',NULL,'Elvin Estoque Casem','Instructor I','PENDING'),(87,'2015-39','DMMMSU-SLUC','COLLEGE OF COMPUTER SCIENCE','2015-04-06','asd',NULL,'Elvin Estoque Casem','Instructor I','PENDING'),(88,'2016-40','MIS','MIS','2016-05-16','for office use',NULL,'','',''),(90,'2016-41','tttt','rrrr','2016-05-16','sasdfa',NULL,'','',''),(91,'2016-42','sdfsd','fsdf','2016-07-10','dfsdf',NULL,'','',''),(92,'2016-43','sdsd','sdsd','2016-07-12','sdsd',NULL,'','','');

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `roomName` varchar(100) DEFAULT NULL,
  `building` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `room` */

insert  into `room`(`roomID`,`roomName`,`building`) values (1,'ROOM 1','RHODA'),(2,'ROOM 2','RHODA'),(3,'ROOM 3','RHODA'),(4,'ROOM 4','RHODA'),(5,'ROOM 5','RHODA'),(6,'ROOM 6','RHODA'),(7,'ROOM 7','RHODA'),(8,'ROOM 8','RHODA'),(9,'RAIZEL','RAIZEL'),(10,'AVA','AVA'),(11,'DORM A','DORM'),(12,'DORM B','DORM'),(13,'COTTAGE 1','REGINA'),(14,'COTTAGE 2','REGINA'),(15,'COTTAGE 3','REGINA'),(16,'COTTAGE 4','REGINA'),(17,'COTTAGE 5','REGINA'),(18,'BARKADA 1','RAISSA'),(19,'BARKADA 2','RAISSA'),(20,'BARKADA 3','RAISSA'),(21,'BARKADA 4','RAISSA'),(22,'BARKADA 5','RAISSA'),(23,'BARKADA 6','RAISSA'),(24,'BASEMENT 1','RAISSA'),(25,'BASEMENT 2','RAISSA'),(26,'BASEMENT 3','RAISSA'),(27,'YDA 1','YDA'),(28,'YDA 2','YDA'),(29,'YDA 3','YDA'),(30,'YDA 4','YDA'),(31,'YDA 5','YDA'),(32,'YDA 6','YDA');

/*Table structure for table `room_rates` */

DROP TABLE IF EXISTS `room_rates`;

CREATE TABLE `room_rates` (
  `rateID` int(11) NOT NULL AUTO_INCREMENT,
  `roomID` int(11) DEFAULT NULL,
  `roomName` varchar(100) DEFAULT NULL,
  `goodFor` varchar(20) DEFAULT NULL,
  `peak` double DEFAULT NULL,
  `superPeak` double DEFAULT NULL,
  `lowSeason` double DEFAULT NULL,
  `building` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`rateID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `room_rates` */

insert  into `room_rates`(`rateID`,`roomID`,`roomName`,`goodFor`,`peak`,`superPeak`,`lowSeason`,`building`) values (1,1,'ROOM 1','2',2000,2200,1700,'RHODA'),(2,2,'ROOM 2','2',2000,2200,1700,'RHODA'),(3,3,'ROOM 3','2',2000,2200,1700,'RHODA'),(4,4,'ROOM 4','2',2000,2200,1700,'RHODA'),(5,5,'ROOM 5','2',2000,2200,1700,'RHODA'),(6,6,'ROOM 6','2',2000,2200,1700,'RHODA'),(7,7,'ROOM 7','2',2000,2200,1700,'RHODA'),(8,8,'ROOM 8','2',2000,2200,1700,'RHODA'),(9,9,'RAIZEL','3',2400,2700,2040,'RAIZEL'),(10,10,'AVA','2',2000,2200,1700,'AVA'),(11,11,'DORM A','6',4200,4800,3570,'DORM'),(12,12,'DORM B','3',2400,2700,2040,'DORM'),(13,13,'COTTAGE 1','9',5700,6500,4845,'REGINA'),(14,14,'COTTAGE 2','6',4500,5200,3825,'REGINA'),(15,15,'COTTAGE 3','3',2400,2700,2040,'REGINA'),(16,16,'COTTAGE 4','2',2000,2200,1700,'REGINA'),(17,17,'COTTAGE 5','4',2800,3200,2380,'REGINA'),(18,18,'BARKADA 1','10',5700,6500,4845,'RAISSA'),(19,19,'BARKADA 2','8',5000,5750,4250,'RAISSA'),(20,20,'BARKADA 3','4',2800,3200,2380,'RAISSA'),(21,21,'BARKADA 4','4',2800,3200,2380,'RAISSA'),(22,22,'BARKADA 5','4',2800,3200,2380,'RAISSA'),(23,23,'BARKADA 6','5',3200,3650,2720,'RAISSA'),(24,24,'BASEMENT 1','5',3200,3650,2720,'RAISSA'),(25,25,'BASEMENT 2','5',3200,3650,2720,'RAISSA'),(26,26,'BASEMENT 3','5',3200,3650,2720,'RAISSA'),(27,27,'YDA 1','7',5000,5750,4250,'YDA'),(28,28,'YDA 2','6',4500,5200,3825,'YDA'),(29,29,'YDA 3','4',2800,3200,2380,'YDA'),(30,30,'YDA 4','4',2800,3200,2380,'YDA'),(31,31,'YDA 5','6',4500,5200,3825,'YDA'),(32,32,'YDA 6','7',5000,5750,4250,'YDA'),(43,1,'ROOM 1','3',2400,2700,2040,'RHODA'),(44,2,'ROOM 2','3',2400,2700,2040,'RHODA'),(45,3,'ROOM 3','3',2400,2700,2040,'RHODA'),(46,4,'ROOM 4','3',2400,2700,2040,'RHODA'),(47,5,'ROOM 5','3',2400,2700,2040,'RHODA'),(48,6,'ROOM 6','3',2400,2700,2040,'RHODA'),(49,7,'ROOM 7','3',2400,2700,2040,'RHODA'),(50,8,'ROOM 8','3',2400,2700,2040,'RHODA'),(51,10,'AVA','3',2400,2700,2040,'AVA');

/*Table structure for table `suppliers` */

DROP TABLE IF EXISTS `suppliers`;

CREATE TABLE `suppliers` (
  `supplierID` bigint(20) NOT NULL AUTO_INCREMENT,
  `supName` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL DEFAULT 'NONE',
  `contactNo` varchar(30) NOT NULL DEFAULT 'NONE',
  `TIN` varchar(20) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`supplierID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `suppliers` */

insert  into `suppliers`(`supplierID`,`supName`,`address`,`contactNo`,`TIN`) values (1,'Morning Star General Merchandise','Governor Ortigas, San Fernando, 2500 La Union, Philippine','+63 72 242 5115','NONE'),(2,'National Bookstore','Manna Mall, Pagdaraoan Biday Road, San Fernando, La Union','NONE','NONE'),(3,'PC 4 Me','San Fernando City La Union','NONE','NONE'),(4,'SKM','Sevilla San Fernando City, La Union','1234567','NONE');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `userType` varchar(10) NOT NULL DEFAULT 'staff',
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`userID`,`userName`,`password`,`userType`,`status`) values (6,'admin','21232f297a57a5a743894a0e4a801fc3','admin','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
