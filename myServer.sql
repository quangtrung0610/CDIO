-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: myServer
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `catinfo`
--

DROP TABLE IF EXISTS `catinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catinfo` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 DEFAULT NULL,
  `type` text CHARACTER SET utf8 DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8 DEFAULT NULL,
  `img` text CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catinfo`
--

LOCK TABLES `catinfo` WRITE;
/*!40000 ALTER TABLE `catinfo` DISABLE KEYS */;
INSERT INTO `catinfo` VALUES (1,'Mướp','Mèo Mướp','D','Đặc điểm nổi bật là bộ lông có sọc vằn, đó là những đường vân có nhiều màu sắc khác nhau, tông màu chủ đạo là màu đen.\r\n\r\nĐiểm dễ nhận biết là màu lông trên trán có chữ M đặc trưng và bộ lông ngắn.\r\n\r\nThân hình nhỏ nhắn, đáng yêu.\r\nKhuôn mặt nhỏ, đôi tai vểnh cao.\r\nĐuôi dài.','/imgs/meo-muop.jpg'),(2,'Lucky','Mèo Vàng','D','Lông ngắn, thường có màu vàng hoặc vàng trắng.\r\nMõm dài nhìn khá ngố, lông thường có màu trắng quanh miệng.\r\nTai vểnh cao, đôi mắt màu vàng đen.','/imgs/meo-vang.jpg'),(3,'Xiêm','Mèo Xiêm','C','Có nguồn gốc từ Thái Lan.\r\nLông ngắn khá dày và ôm sát cơ thể.\r\nMàu lông nổi bật ở khuôn mặt, tai, chân và đuôi.\r\nMàu sắc lông phổ biến là sô cô la, xám xanh ...\r\nMèo xiêm rất nhanh nhẹn và thông minh, ưa bắt côn trùng.','/imgs/meo-xiem.jpg'),(4,'Max','Mèo ANh Lông Dài','D','Thân hình chắc khỏe.\r\nĐầu to tròn, mắt tròn sáng, tai ngắn.\r\nChân ngắn khỏe, đuôi dài với lông dày.\r\nBộ ngực sâu rộng tưởng kích thước chúng trung bình.\r\nChúng có nhiều loại màu lông phổ biến là xám xanh, các màu khác như đen, trắng, đỏ, kem, xanh, nâu socola, tím hoa cà, nâu vàng hoa quế...','/imgs/meo-anh-long-dai.jpg'),(5,'Min','Mèo Anh Lông Ngắn','C','Xuất xứ Anh quốc.\r\nLông tuy ngắn nhưng khá dày giúp giữ nhiệt cho cơ thể.\r\nLông màu xám phổ biến ngoài ra còn có một số màu khác như đen, vàng, xám-trắng, xanh dương…\r\nChiếc đầu to tròn, mũi miệng ngắn, má rộng.\r\nMắt tròn và to màu đồng phổ biến một số khác màu đen, xanh lá cây.\r\nLông đuôi rất dày mà không xù (ngược với ALD).','/imgs/meo-anh-long-ngan.jpg'),(6,'Persian','Mèo Ba Tư','C','Nguồn gốc Iran (Ba Tư).\r\nMèo này nổi bật lên với đáng yêu, nhỏ nhắn, xinh xắn. Chúng sở hữu bộ lông mượt, dài, khuôn mặt tẹt.\r\nĐầu to, mắt lớn, mũi nhỏ, tai nhỏ hình tam giác, thân hình săn chắc.\r\n\r\nChúng có bộ lông dài, dày phủ khắp cơ thể và chân ngắn.\r\n\r\nBộ lông 2 lớp có nhiều màu khác nhau như xám xanh hoặc trắng đen, đỏ nâu...','/imgs/meo-ba-tu.jpg'),(7,'Cụp','Mèo Scottish Fold','D','Từ Scotland.\r\nMèo này có quả tai vô cùng đặc biệt từ 2 - 3 nếp gấp, khiến tai chúng lúc nào cũng cụp xuống không ngóc đầu lên nổi (do gen tự nhiên).\r\n\r\nTừ khi sinh ra, trong vòng 21 ngày (3 tuần) tai vẫn còn thẳng sau đó mới bắt đầu xuất hiện các nếp gấp.\r\n\r\nMàu lông đa dạng, gồm bất kì màu hoặc sự phối hợp màu nào kèm theo bộ lông cũng có thể là ngắn, hoặc dài.\r\nMũi suýt tẹt.','/imgs/meo-tai-cup.jpg'),(8,'Trung','Mèo Turkish Angora','D','Xương nhỏ nhưng dẻo và cứng cáp, chân thon gọn nhưng không quá ngắn.\r\nĐầu dài, mặt nhỏ và hẹp, mũi mõm to, tương đối dài.\r\nMắt to có màu xanh hoặc màu hổ phách, tai vểnh cao nhọn.\r\nĐuôi dài và dày.\r\nCó bộ lông dài và mịn màng, màu lông phổ biến là màu trắng.','/imgs/meo-angora.jpg'),(9,'My','Mèo Mỹ lông ngắn','C','Đây là một giống mèo thuộc họ mướp, đặc tính của chúng rất giống với mèo mướp, một số cá thể có thể lành tính hơn, ít nghịch ngợm hơn.','/imgs/meo-my-long-ngan.jpg'),(10,'Lion','Mèo Manie Coon','D','Thân hình đặc biệt to lớn.\r\nBộ lông khá dài, mềm mại toàn thân.\r\nLông ở cổ dày hơn như bờm sư tử.\r\nLông ở ngực và bụng thì dài hơn bộ phận khác.\r\nChúng thường có màu lông giống như socola, muối tiêu…\r\nLông đuôi khá dài và dày, móng vuốt dày giúp chúng đi dễ dàng trên tuyết.','/imgs/meo-Maine-Coon.jpg'),(11,'Luli','Mèo Nga mắt xanh','C','Kích thước vừa nhỏ, thân hình khá cứng cáp, cơ bắp săn chắc, các chân dài và bước đi linh hoạt.\r\nĐầu nhìn vươn lên rất giống với rắn hổ mang.\r\nCặp mắt to tròn màu xanh lục cùng với chiếc mũi ngắn, miệng rộng.\r\nĐôi tai lớn và dài dựng đứng lên, chiếc đuôi thuôn dài.\r\nLông ngắn nhưng dày, mượt mà.\r\nLông màu xám đậm hoặc nhạt, sợi lông kết cấu nhìn như ánh bạc.','/imgs/meo-nga-mat-xanh.jpg'),(12,'Xoắn','Mèo American Curl','D','Điểm đặc biệt là chiếc tai xoắn lại và có những lông dài nhô lên, khác biệt rõ nét với các giống mèo khác.\r\nĐuôi được phủ bộ lông dài rậm, rất đẹp khi di chuyển.\r\nKhuôn mặt dài, hẹp, mũi thẳng, cằm nhọn, mõm sâu.\r\nLông dày óng mượt, có thể ngắn hoặc tương đối dài.','/imgs/meo-americancurl.jpg'),(13,'Kin','Mèo Munchkin','C','Đặc trưng từ giống mèo này là cặp chân ngắn khó đỡ, xuất phát từ một biến dị trong gen.\r\nMặc dù có một biến dị gen, nhưng không như Scottish Fold, giống mèo này hoàn toàn khỏe mạnh.\r\nMèo Munchkin ngọt ngào, thân thiện nhưng rất năng động, hướng ngoại và thông minh.\r\nMunchkin cũng quấn chủ, an toàn với trẻ nhỏ.\r\nMunchkin có nhiều màu lông và hoa văn.','/imgs/meo-munchkin.jpg'),(14,'Đô','Mèo Ragdoll','C','Ragdoll là giống mèo cảnh khổng lồ có nguồn gốc từ Mỹ.\r\n\r\nKích thước cơ thể khổng lồ, cân nặng lên tới 9kg, hơn hẳn so với các giống mèo khác.\r\nTuy thế, Ragdoll là giống mèo điềm đạm, cool ngầu và trung thành.\r\nBất chấp ngoại hình khổng lồ, Ragdoll quá hiền nên có thể trở thành mục tiêu Vàng cho kẻ gian.\r\nRagdoll chưa phổ biến ở Việt Nam do khó thích nghi với điều kiện sống.','/imgs/meo-ragdoll.jpg'),(15,'Hổ','Mèo Bengal ','D','Được xếp vào giống mèo quý tộc, một trong những giống mèo đắt nhất thế giới.\r\nCó dáng vẻ và bộ lông khá ngắn như mèo Mỹ lông ngắn, tuy nhiên điểm khác biệt ở lông chúng có vằn như loài báo nhờ việc được lai chéo với mèo rừng.\r\nThân hình to dài nhiều cơ bắp, đôi chân nhỏ nhưng bàn chân to hơn so với giống mèo khác.\r\nĐôi mắt to, đôi tai dài và dựng đứng, đuôi thuôn dài.\r\nLông mượt mà nhiều màu sắc nhìn khá giống báo rừng.\r\nMàu lông đặc trưng là đen và cẩm thạch.','/imgs/meo-bengal.jpg'),(16,'Da','Mèo Sphynx không lông','C','Không phải một giống mèo có xuất xứ Ai Cập nhưng được đặt tên Sphynx (mèo Ai Cập) theo các nhân sư Ai Cập.\r\nNghe tên đã biết Sphynx là giống mèo đặc biệt nhất: không lông, có nhiều nếp nhăn, có bụng phệ.\r\nNhìn có thể nói là xấu nhưng loài này lại rất đắt, có thể nói là dành cho những người nuôi mèo cá tính, cao cấp.\r\nThân hình cứng cáp, cơ bắp mượt mà.\r\nLông mỏng được phủ ở vùng mũi, ngón chân, tai, đuôi.\r\nĐuôi dài linh hoạt như chiếc roi vậy.\r\nTai lớn, mắt hình quả chanh, vẻ mặt ưu tư, đầu hơi nhọn, xương gò má nhô lên.\r\nGiống mèo có nhiều màu sắc khác nhau đen, đỏ, trắng, tím … màu này là màu của da, nếu có lông thì cũng là do màu lông.','/imgs/meo-sphynx.jpg'),(17,'tô','Mèo Tonkin','C','là một loại mèo lai thực sự, với màu lông và hoa văn trên cơ thể hoàn toàn phụ thuộc vào việc cá nhân mang gen mèo Xiêm hay mèo Miến Điện. Màu sắc cũng như hoa văn trong bất kỳ lứa nào đều phụ thuộc hết vào di truyền màu và kiểu dáng của bố mẹ.','/imgs/meo-tonkin.jpg'),(18,'đà','Mèo Havana Brown','D','Giống mèo này sở hữu bộ lông màu sô cô la sáng bóng và đôi mắt màu xanh lá cây hút hồn, đây chính la một trong những giống mèo thông minh và có vẻ đẹp nổi bật.','/imgs/meo-havana-brown.jpg'),(19,'Bóp','Mèo Japanese Bobtail','D','Mèo Japanese Bobtail hay còn gọi là mèo cộc đuôi Nhật Bản là một giống mèo nhà có đặc điểm nhận dạng vô cùng dễ dàng nhận dạng là sở hữu chiếc đuôi rất ngắn, giống như chiếc đuôi của thỏ. Chiếc đuôi ngắn của loài mèo này là kết quả của một đột biến về thân hình ở mèo, gây ra bởi một gien lặn.','/imgs/meo-japanese-bobtail.jpg'),(20,'Na','Mèo rừng Na Uy','C','Những chú mèo rừng Na Uy là loài mèo lớn, đáng yêu, vật nuôi được yêu thương trong gia đình.Bộ lông của mèo rừng Na Uy sở hữu bộ lông sáng bóng, có khả năng chống nước tốt và thích nghi với mùa đông khắc nghiệt của Na Uy. Lớp lông lót của mèo rừng Na Uy sẽ thay lông vào mùa xuân. Bộ lông của mèo rừng Na Uy có nhiều màu sắc và hoa văn, màu sắc chủ yếu của những cú mèo này thường là trắng, đen, xanh, đỏ, kem, bạc, vàng,... ','/imgs/meo-rung-na-uy.jpg'),(27,'a','a','D','a','a'),(28,NULL,NULL,NULL,NULL,''),(29,NULL,NULL,NULL,NULL,''),(30,NULL,NULL,NULL,NULL,''),(31,NULL,NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `catinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(30) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'Đặng Quang Trung','0941981831','admin','123456','quangtrung061019@gmail.com'),(2,'Nguyễn Văn A','0912312321','vana','12345','vanaaa123@gmail.com'),(5,'Trân Thị C','012343242','testcap','123456','vvvdasd@gmail.com'),(6,'Võ Văn Vỡ','0912312321','testcapw','123456','vvvdasd@gmail.com'),(7,'Võ Văn Vỡ','0912312321','adminc','123456','quangtrung061019@gmail.com');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-16 14:34:27
