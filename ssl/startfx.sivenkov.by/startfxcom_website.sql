-- MySQL dump 10.15  Distrib 10.0.35-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: startfxcom_website
-- ------------------------------------------------------
-- Server version	10.0.35-MariaDB

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) NOT NULL,
  `short` text NOT NULL,
  `content` mediumtext NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `language` enum('ru','en','ge') NOT NULL,
  `img_big` varchar(254) DEFAULT NULL,
  `img_small` varchar(254) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `short`, `content`, `date`, `language`, `img_big`, `img_small`, `status`) VALUES (1,'Четыре часто задаваемых вопроса о криптовалютах','<p class=\"MsoNormal\"><span style=\"font-size:16px;line-height:107%;font-family:\r\n\" calibri=\"\" light\",sans-serif;mso-ascii-theme-font:major-latin;mso-hansi-theme-font:=\"\" major-latin;mso-bidi-theme-font:major-latin\"=\"\">В последние несколько лет СМИ\r\nмного пишут о биткоине и криптовалютах в целом, однако для обычного человека\r\nони по-прежнему остаются загадкой. <o:p></o:p></span></p>','<p>В последние несколько лет СМИ много пишут о биткоине и криптовалютах в целом, однако для обычного человека они по-прежнему остаются загадкой.&nbsp;</p><h2>Не поздно ли начинать сейчас?&nbsp;</h2><p>Нет. Несмотря на то, что многие эксперты считают, что эта технология совершит мировую революцию, инвестируют в криптовалюты и работают с ними очень немногие.</p><h2>\r\n\r\nЧто такое блокчейн?\r\n\r\n</h2><p>Технология блокчейн была разработана для биткоина, однако она нашла гораздо более широкое применение.</p><p>Если говорить упрощенно, блокчейн — это база данных, одновременно хранящаяся на многих компьютерах. Достоверность этих данных легко проверить, так как каждый участник сети имеет доступ к одной и той же информации.</p><p>Сегодня в большинстве случаев данные принято хранить на одном компьютере, что делает их уязвимыми для хакеров. Блокчейн существует уже почти десять лет, и за все это время никто не смог взломать сеть такого типа.</p><p>Биткоин использует блокчейн для подтверждения права собственности на актив. При переводе биткоинов от одного человека другому транзакцию «видит» вся сеть.</p><p>Сейчас разрабатываются новые приложения, которые позволят использовать блокчейн в самых разных сферах, от управления поставками до прав на интеллектуальную собственность.</p><h2>Какую криптовалюту покупать?</h2><p>В обращении сегодня находится более 1500 различных криптовалют. Следить за всеми не представляется возможным. Покупать второстепенные цифровые валюты очень рискованно, так как неизвестно, найдут ли они свое место на массовом рынке.</p><p>Начинающим лучше всего инвестировать в уже признанные рынком криптовалюты, такие как биткоин, эфир, XRP и лайткоин.</p><p>Компания StartFX предлагает только известные цифровые валюты.</p><p>Как и в случае с любыми другими активами, не стоит класть все яйца в одну корзину. Чтобы снизить риски, целесообразно распределить свои вложения по разным криптовалютам. Это поможет вам ограничить свои убытки при резком снижении курса одной из них. Если же какая-то криптовалюта существенно вырастет в цене, то вы выигрываете в любом случае.</p><p>Если вы не уверены в своих силах, можно начать с копирования других, более опытных трейдеров, работающих на StartFX.</p><h2>С чего начать?</h2><p>Первый шаг самый сложный, однако компания StartFX старается максимально его упростить. Все начинается с нажатия вот этой кнопки. Затем мы поможем вам пройти процедуру открытия счета и совершить первую сделку. Просто и удобно.&nbsp;&nbsp;</p><p>Счет открывается бесплатно. В зависимости от суммы пополнения, каждый новый трейдер получает до $1.000 на свой торговый счет, призванный помочь в отработке навыков и знакомстве с платформой.</p><p>Не теряйте время!</p>','2018-06-13 10:28:55','ru','artmax.png','artmin.png',1),(2,'The 4 most commonly asked questions about cryptocurrencies','<p class=\"MsoNormal\"><span lang=\"EN-GB\" style=\"font-size:16px;line-height:107%;\r\nfont-family:\" calibri=\"\" light\",sans-serif;mso-ascii-theme-font:major-latin;=\"\" mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin;mso-ansi-language:=\"\" en-gb\"=\"\">There’s been a lot of buzz in the media about Bitcoin and\r\ncryptocurrencies lately and, to the average person, it might seem very\r\ndaunting.</span><span style=\"font-size:16.0pt;line-height:107%;font-family:\r\n\" calibri=\"\" light\",sans-serif;mso-ascii-theme-font:major-latin;mso-hansi-theme-font:=\"\" major-latin;mso-bidi-theme-font:major-latin\"=\"\"><o:p></o:p></span></p>','<p>There’s been a lot of buzz in the media about Bitcoin and cryptocurrencies lately and, to the average person, it might seem very daunting.</p><h2>Is it too late to get in?</h2><p>Not at all. Even though many experts believe that this technology is about to revolutionise the world, only a very small percentage of people have started dealing with cryptocurrencies or made an investment.</p>\r\n\r\n<h2>What is blockchain?</h2>\r\n\r\n<p>The technology was invented for Bitcoin but has now found many other uses.</p><p>Put simply; a blockchain is a database that is stored on many different computers at the same time. Because everybody has access to the same information, it is easy to verify that the data is accurate.</p><p>Most data these days is stored on a single computer making it very easy for hackers to steal. During almost a decade since the invention of this technology, no hacker has ever been able to crack a blockchain network.</p><p>Bitcoin uses the blockchain to verify ownership of value. So you can send Bitcoins from one person to another, and the entire network can see that the transaction indeed took place.</p><p>At the moment, developers are creating new applications that use the blockchain for everything from tracking produce across a supply line, to verifying the ownership of intellectual property and much more.</p>\r\n\r\n<h2>Which cryptos should I buy?</h2>\r\n\r\n<p>With more than 1,500 different cryptocurrencies in circulation, it can be a bit difficult to track them all. Many of the smaller ones are very tricky because it’s not always clear if they will ever see mass adoption.</p><p>For beginners, it’s usually best to stick to the more well-established coins like Bitcoin, Ethereum, XRP, and Litecoin.</p><p>On the StartFX company, we offer only the most well-established cryptocurrencies.</p><p>As with any investment, you don’t want to put all of your eggs in a single basket. So by spreading your funds around different cryptocurrencies, you can help decrease your risk. This way, if one of them fails you don’t lose too much and if one of them skyrockets you still take advantage.</p><p>If you’re not sure what to do, you can also start out by copying other StartFX traders who have more experience.</p><h2>How do I get started?</h2><p>The first step is always the hardest, but at StartFX, we try to make it as simple as possible. Once you click the button below, your journey will begin. We will then guide you through the process of opening an account and making your first trade in a simple and fun way.</p><p>The account is opened for free. Depending on the amount of replenishment, each new trader receives up to $ 1,000 to his trading account, designed to help in skills training and familiarity with the platform. So what are you waiting for?</p><div><br></div>','2018-06-13 11:15:59','en','artmax.png','artmin.png',1);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `og_title` varchar(254) CHARACTER SET latin1 NOT NULL,
  `og_description` varchar(254) CHARACTER SET latin1 NOT NULL,
  `og_image` varchar(254) CHARACTER SET latin1 NOT NULL DEFAULT 'https://startfx.com/dev/common/images/logo/logo_startfx.png',
  `page` varchar(124) CHARACTER SET latin1 NOT NULL,
  `lang` varchar(16) NOT NULL,
  `title` varchar(254) NOT NULL,
  `description` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
INSERT INTO `seo` (`id`, `og_title`, `og_description`, `og_image`, `page`, `lang`, `title`, `description`) VALUES (1,'Trade forex and CFDs with International broker.','Trade CFDs on Forex, Shares, Indices, Commodities & Cryptocurrencies','https://startfx.com/common/images/banner_lg.png','index.php','en','',''),(2,'Test new','Test Test new','https://startfx.com/common/images/banner_lg.png','index.php','ru','This ','Sparta');
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) CHARACTER SET latin1 NOT NULL,
  `email` varchar(254) CHARACTER SET latin1 NOT NULL,
  `password` varchar(124) CHARACTER SET latin1 NOT NULL,
  `rank` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `rank`) VALUES (1,'Admin','albert@htsmarket.com','afdd0b4ad2ec172c586e2150770fbf9e',1),(2,'Blog','seo@startfx.com','afdd0b4ad2ec172c586e2150770fbf9e',3),(4,'Marketing','marketing@startfx.com','afdd0b4ad2ec172c586e2150770fbf9e',2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'startfxcom_website'
--

--
-- Dumping routines for database 'startfxcom_website'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-30  2:06:10
