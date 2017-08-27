/*
Navicat MySQL Data Transfer

Source Server         : loc
Source Server Version : 50627
Source Host           : localhost:3306
Source Database       : huge

Target Server Type    : MYSQL
Target Server Version : 50627
File Encoding         : 65001

Date: 2017-08-28 03:10:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `session_id` varchar(48) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'stores session cookie id to prevent session concurrency',
  `phone` int(11) DEFAULT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email, unique',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s deletion status',
  `user_account_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'user''s account type (basic, premium, etc)',
  `user_has_avatar` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 if user has a local avatar, 0 if not',
  `user_remember_me_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
  `user_creation_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the creation of user''s account',
  `user_suspension_timestamp` bigint(20) DEFAULT NULL COMMENT 'Timestamp till the end of a user suspension',
  `user_last_login_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of user''s last login',
  `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attempts',
  `user_last_failed_login` int(10) DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `user_provider_type` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'sr6up934um123ihjneu6m7bpso', null, 'admin', '$2y$10$3zOQ1ry0aWYehq/K3cf3F.y8Tr0uDpqWievImt76/tVnxk7Yt8rp2', 'demo@demo.com', '1', '0', '0', '0', null, '1422205178', null, '1503857597', '0', null, null, null, null, 'DEFAULT');
INSERT INTO `users` VALUES ('2', null, null, 'demo2', '$2y$10$OvprunjvKOOhM1h9bzMPs.vuwGIsOqZbw88rzSyGCTJTcE61g5WXi', 'demo2@demo.com', '1', '0', '1', '0', null, '1422205178', null, '1422209189', '0', null, null, null, null, 'DEFAULT');
INSERT INTO `users` VALUES ('8', null, null, 'keros', '$2y$10$3zOQ1ry0aWYehq/K3cf3F.y8Tr0uDpqWievImt76/tVnxk7Yt8rp2', 'keroslee@gmail.com', '0', '0', '0', '0', null, '1503857436', null, null, '0', null, '763286be8942810a283fd3399f1ec0cda8d77e9c', null, null, 'DEFAULT');
