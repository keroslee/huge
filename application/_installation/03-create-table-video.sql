/*
Navicat MySQL Data Transfer

Source Server         : loc
Source Server Version : 50627
Source Host           : localhost:3306
Source Database       : huge

Target Server Type    : MYSQL
Target Server Version : 50627
File Encoding         : 65001

Date: 2017-08-28 03:11:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', 'http://www.baidu.com', '1');
