--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` tinytext NOT NULL,
  `user_type` enum('ADMIN','EMP') NOT NULL DEFAULT 'EMP',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','SiS Admin','2e63ac25b05a429031c5afe7f55a1367bd8215e3','','ADMIN','2019-05-03 16:43:24');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Table structure for table `emp_expense`
--

DROP TABLE IF EXISTS `emp_expense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_expense` (
  `expense_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_category` varchar(255) NOT NULL,
  `expense_description` tinytext NOT NULL,
  `pre_tax_amount` decimal(10,2) NOT NULL,
  `tax_amount` decimal(10,2) NOT NULL,
  `expense_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `user_ref` int(11) NOT NULL,
  PRIMARY KEY (`expense_id`),
  KEY `fkc_user_id` (`user_ref`),
  CONSTRAINT `fkc_user_id` FOREIGN KEY (`user_ref`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_expense`
--

/*!40000 ALTER TABLE `emp_expense` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_expense` ENABLE KEYS */;