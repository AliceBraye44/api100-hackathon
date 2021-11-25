/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ britney /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE britney;

DROP TABLE IF EXISTS pictures;
CREATE TABLE `pictures` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
INSERT INTO pictures(id,name,img) VALUES(1,'Britney1','/assets/images/photo1.jpg'),(2,'Britney2','/assets/images/photo2.jpg'),(3,'Britney3','/assets/images/photo3.jpg'),(4,'Britney4','/assets/images/photo4.jpg'),(5,'Britney5','/assets/images/photo5.jpg'),(6,'Britney6','/assets/images/photo6.jpg');