/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : usegear

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2016-01-12 02:37:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `usegear_admin`
-- ----------------------------
DROP TABLE IF EXISTS `usegear_admin`;
CREATE TABLE `usegear_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usegear_admin
-- ----------------------------
INSERT INTO `usegear_admin` VALUES ('1', 'admin', '123456', null);

-- ----------------------------
-- Table structure for `usegear_category`
-- ----------------------------
DROP TABLE IF EXISTS `usegear_category`;
CREATE TABLE `usegear_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `code` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usegear_category
-- ----------------------------
INSERT INTO `usegear_category` VALUES ('9', '解决方案', '解决方案', '0', '0', '0-9');
INSERT INTO `usegear_category` VALUES ('10', '服务管理1', '', '0', '0', null);
INSERT INTO `usegear_category` VALUES ('11', '解决方案的子类', '', '9', '0', null);
INSERT INTO `usegear_category` VALUES ('12', '服务管理的子类', '', '10', '0', null);
INSERT INTO `usegear_category` VALUES ('13', '产品', '', '0', '0', null);
INSERT INTO `usegear_category` VALUES ('14', '产品子类', '', '13', '0', null);

-- ----------------------------
-- Table structure for `usegear_kv`
-- ----------------------------
DROP TABLE IF EXISTS `usegear_kv`;
CREATE TABLE `usegear_kv` (
  `kvid` int(11) NOT NULL AUTO_INCREMENT,
  `kvkey` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kvvalue` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`kvid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usegear_kv
-- ----------------------------
INSERT INTO `usegear_kv` VALUES ('1', 'email', 'usegear@usegear.com.cn');
INSERT INTO `usegear_kv` VALUES ('2', 'phone', '+86 0515-88153990');
INSERT INTO `usegear_kv` VALUES ('3', 'weibo', 'weibo');
INSERT INTO `usegear_kv` VALUES ('4', 'qq', 'qq');
INSERT INTO `usegear_kv` VALUES ('5', 'wechat', 'wechat');
INSERT INTO `usegear_kv` VALUES ('6', 'address', '盐城市世纪大道东路15号高新科技园');

-- ----------------------------
-- Table structure for `usegear_product`
-- ----------------------------
DROP TABLE IF EXISTS `usegear_product`;
CREATE TABLE `usegear_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_description` text COLLATE utf8_unicode_ci,
  `product_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pub_time` datetime NOT NULL,
  `product_att` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_download_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usegear_product
-- ----------------------------
INSERT INTO `usegear_product` VALUES ('3', '测试产品', '13', 'asda的', '', '2016-01-08 11:17:42', 'asda是', '', '<p>啊实打实的</p>\r\n');
INSERT INTO `usegear_product` VALUES ('4', '我去额为', '10', '阿阿三大殿', '', '2016-01-09 01:10:33', '请问', '', '<p>其味无穷</p>\r\n');
INSERT INTO `usegear_product` VALUES ('5', '士大夫大师傅', '9', '阿阿三大殿阿阿三大殿阿阿三大殿阿阿三大殿阿阿三大殿阿阿三大殿阿阿三大殿', '', '2016-01-09 01:10:22', '阿迪斯', '', '<p>阿斯顿</p>\r\n');
INSERT INTO `usegear_product` VALUES ('6', '梵蒂冈地方', '10', '飒飒', '', '2016-01-09 01:53:45', '阿', '', '<p>asda</p>\r\n');
INSERT INTO `usegear_product` VALUES ('7', '啊飒飒', '14', '', '', '2016-01-10 11:25:37', '阿', '', '');
INSERT INTO `usegear_product` VALUES ('8', 'vdvsd', '10', '', '', '2016-01-09 01:54:08', '', '', '');
INSERT INTO `usegear_product` VALUES ('9', '啊撒大苏打实打实', '9', '撒大苏打撒', '', '2016-01-09 01:57:50', '', '', '');
INSERT INTO `usegear_product` VALUES ('10', '阿斯顿撒旦撒', '13', '', 'http://localhost/usegear/assets/upload/img/20130308121537_tQBXj_2016_01_10_12.jpeg', '2016-01-11 11:07:00', '', '', '<p><img alt=\"\" src=\"http://localhost/usegear/assets/upload/img/20130308121537_tQBXj_2016_01_10_12.jpeg\" style=\"height:108px; width:192px\" /><img alt=\"\" src=\"http://localhost/usegear/assets/upload/img/20130308121537_tQBXj_2016_01_09_10.jpeg\" style=\"height:108px; width:192px\" /></p>\r\n');
INSERT INTO `usegear_product` VALUES ('11', '的反对发射点', '11', '', '', '2016-01-10 01:30:01', '', '', '');
