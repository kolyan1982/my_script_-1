/*
Navicat MySQL Data Transfer

Source Server         : main_connect
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : money

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-05-29 16:55:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for rates
-- ----------------------------
DROP TABLE IF EXISTS `rates`;
CREATE TABLE `rates` (
  `name` varchar(3) NOT NULL,
  `value` float(9,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rates
-- ----------------------------
INSERT INTO `rates` VALUES ('usd', '40');
