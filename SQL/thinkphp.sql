# Host: localhost  (Version: 5.6.10)
# Date: 2016-03-15 20:10:34
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "hd_access"
#

DROP TABLE IF EXISTS `hd_access`;
CREATE TABLE `hd_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "hd_access"
#

/*!40000 ALTER TABLE `hd_access` DISABLE KEYS */;
INSERT INTO `hd_access` VALUES (4,7,2,NULL),(4,1,1,NULL),(1,16,3,NULL),(1,3,2,NULL),(1,11,3,NULL),(1,10,3,NULL),(4,11,3,NULL),(4,12,3,NULL),(1,12,3,NULL),(1,7,2,NULL),(2,3,2,NULL),(2,8,3,NULL),(2,9,3,NULL),(2,6,2,NULL),(2,1,1,NULL),(1,1,1,NULL),(4,10,3,NULL),(4,6,2,NULL),(4,8,3,NULL),(4,3,2,NULL),(4,16,3,NULL);
/*!40000 ALTER TABLE `hd_access` ENABLE KEYS */;

#
# Source for table "hd_node"
#

DROP TABLE IF EXISTS `hd_node`;
CREATE TABLE `hd_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '代表其属于哪一个数据内的',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1表示应用,2表示控制器,3表示方法',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

#
# Data for table "hd_node"
#

/*!40000 ALTER TABLE `hd_node` DISABLE KEYS */;
INSERT INTO `hd_node` VALUES (1,'admin','后台',1,NULL,1,0,1),(2,'Index','前台',1,NULL,1,0,1),(3,'Index','后台主要控制器',1,NULL,1,1,2),(6,'MsgManage','帖子管理',1,NULL,1,1,2),(7,'Rbac','权限控制',1,NULL,1,1,2),(8,'index','帖子列表',1,NULL,1,6,3),(9,'delete','删除帖子',1,NULL,1,6,3),(10,'index','用户列表',1,NULL,1,7,3),(11,'role','角色列表',1,NULL,1,7,3),(12,'node','节点列表',1,NULL,1,7,3),(13,'addUser','添加用户',1,NULL,1,7,3),(14,'addRole','添加角色',1,NULL,1,7,3),(15,'addNode','添加节点',1,NULL,1,7,3),(16,'index','后台首页',1,NULL,1,3,3);
/*!40000 ALTER TABLE `hd_node` ENABLE KEYS */;

#
# Source for table "hd_role"
#

DROP TABLE IF EXISTS `hd_role`;
CREATE TABLE `hd_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "hd_role"
#

/*!40000 ALTER TABLE `hd_role` DISABLE KEYS */;
INSERT INTO `hd_role` VALUES (1,'Manger',NULL,1,'普通管理员'),(2,'Editor',NULL,1,'网站编辑'),(4,'youke',NULL,1,'游客');
/*!40000 ALTER TABLE `hd_role` ENABLE KEYS */;

#
# Source for table "hd_role_user"
#

DROP TABLE IF EXISTS `hd_role_user`;
CREATE TABLE `hd_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "hd_role_user"
#

/*!40000 ALTER TABLE `hd_role_user` DISABLE KEYS */;
INSERT INTO `hd_role_user` VALUES (1,'2'),(1,'2'),(2,'3'),(1,'3'),(1,'4'),(4,'5');
/*!40000 ALTER TABLE `hd_role_user` ENABLE KEYS */;

#
# Source for table "hd_session"
#

DROP TABLE IF EXISTS `hd_session`;
CREATE TABLE `hd_session` (
  `session_id` varchar(255) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "hd_session"
#

INSERT INTO `hd_session` VALUES ('8djo0619hr20kijhe2lsrkcu22',1458045178,X'7665726966797C733A33323A223837373931653430363534333539333865613237383065383436643836313366223B'),('d31tb9i33u1ag8po03ff9jjnp7',1458045134,X'7665726966797C733A33323A223431633832373131346165343832663131636130353136613766663337366561223B');

#
# Source for table "hd_user"
#

DROP TABLE IF EXISTS `hd_user`;
CREATE TABLE `hd_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `loginip` varchar(30) NOT NULL DEFAULT '' COMMENT '登录IP',
  `locka` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '为1的时候不允许登录',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "hd_user"
#

/*!40000 ALTER TABLE `hd_user` DISABLE KEYS */;
INSERT INTO `hd_user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3',1458041435,'0.0.0.0',0),(2,'zhou','2be9bd7a3434f7038ca27d1918de58bd',1457932264,'0.0.0.0',0),(3,'ying','202cb962ac59075b964b07152d234b70',1457932502,'0.0.0.0',0),(4,'wang','81dc9bdb52d04dc20036dbd8313ed055',1458041413,'0.0.0.0',0),(5,'youke','89a91084f8aca0a0f373eb331fdece44',1458042964,'0.0.0.0',0);
/*!40000 ALTER TABLE `hd_user` ENABLE KEYS */;

#
# Source for table "hd_wish"
#

DROP TABLE IF EXISTS `hd_wish`;
CREATE TABLE `hd_wish` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

#
# Data for table "hd_wish"
#

/*!40000 ALTER TABLE `hd_wish` DISABLE KEYS */;
INSERT INTO `hd_wish` VALUES (10,'王一峰','我要考研[抓狂]',1457014827),(11,'孙凯','我要上天',1457015146),(12,'周赢','知道什么叫大神吗？',1457015172),(13,'吕海洋','好了，关灯睡觉',1457015198),(14,'汪志峰','狗日的',1457015831),(19,'王一峰','我要考研[抓狂]',1457014827),(22,'汪志峰','狗日的',1457015831),(23,'孙凯','我要上天',1457015146),(24,'周赢','知道什么叫大神吗？',1457015172),(25,'吕海洋','好了，关灯睡觉',1457015198),(28,'王一峰','我要考研[抓狂]',1457014827),(31,'汪志峰','狗日的',1457015831),(32,'孙凯','我要上天',1457015146),(33,'周赢','知道什么叫大神吗？',1457015172),(34,'吕海洋','好了，关灯睡觉',1457015198),(37,'王一峰','我要考研[抓狂]',1457014827),(41,'孙凯','我要上天',1457015146),(42,'周赢','知道什么叫大神吗？',1457015172),(43,'吕海洋','好了，关灯睡觉',1457015198);
/*!40000 ALTER TABLE `hd_wish` ENABLE KEYS */;

#
# Source for table "hd_wish2"
#

DROP TABLE IF EXISTS `hd_wish2`;
CREATE TABLE `hd_wish2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "hd_wish2"
#

/*!40000 ALTER TABLE `hd_wish2` DISABLE KEYS */;
/*!40000 ALTER TABLE `hd_wish2` ENABLE KEYS */;
