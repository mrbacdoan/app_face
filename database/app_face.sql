/*
Navicat MySQL Data Transfer

Source Server         : php
Source Server Version : 50623
Source Host           : localhost:3306
Source Database       : app_face

Target Server Type    : MYSQL
Target Server Version : 50623
File Encoding         : 65001

Date: 2015-05-23 20:09:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `answer`
-- ----------------------------
DROP TABLE IF EXISTS `answer`;
CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of answer
-- ----------------------------
INSERT INTO `answer` VALUES ('3', 'kẹo vừng', '12', '2015-05-23 08:44:35', '1');
INSERT INTO `answer` VALUES ('4', 'Kẹo kéo', '12', '2015-05-23 08:46:12', '1');
INSERT INTO `answer` VALUES ('5', 'kẹo lạc', '12', '2015-05-23 08:46:18', '1');
INSERT INTO `answer` VALUES ('6', 'xuân', '8', '2015-05-23 08:46:52', '1');
INSERT INTO `answer` VALUES ('7', 'Hạ', '8', '2015-05-23 08:46:56', '1');
INSERT INTO `answer` VALUES ('8', 'Thu', '8', '2015-05-23 08:47:01', '1');
INSERT INTO `answer` VALUES ('9', 'Đông', '8', '2015-05-23 08:47:05', '1');
INSERT INTO `answer` VALUES ('10', 'Xanh', '7', '2015-05-23 08:47:27', '1');
INSERT INTO `answer` VALUES ('11', 'Đỏ', '7', '2015-05-23 08:47:31', '1');
INSERT INTO `answer` VALUES ('12', 'Tím', '7', '2015-05-23 08:47:35', '1');
INSERT INTO `answer` VALUES ('13', 'Nam', '6', '2015-05-23 08:47:56', '1');
INSERT INTO `answer` VALUES ('14', 'Nữ', '6', '2015-05-23 08:48:01', '1');
INSERT INTO `answer` VALUES ('15', 'Chó', '16', '2015-05-23 10:19:07', '1');
INSERT INTO `answer` VALUES ('16', 'Mèo', '16', '2015-05-23 10:19:13', '1');
INSERT INTO `answer` VALUES ('17', 'Lợn', '16', '2015-05-23 18:20:55', '1');
INSERT INTO `answer` VALUES ('18', 'Đỏ', '10', '2015-05-23 10:19:42', '1');
INSERT INTO `answer` VALUES ('19', 'Đen', '10', '2015-05-23 10:19:49', '1');
INSERT INTO `answer` VALUES ('20', 'Trắng', '10', '2015-05-23 10:19:56', '1');
INSERT INTO `answer` VALUES ('21', 'Bê đê', '6', '2015-05-23 10:20:58', '1');
INSERT INTO `answer` VALUES ('22', 'Có', '11', '2015-05-23 11:02:29', '1');
INSERT INTO `answer` VALUES ('23', 'Không', '11', '2015-05-23 11:02:35', '1');
INSERT INTO `answer` VALUES ('24', 'Không thích không ghét', '11', '2015-05-23 11:02:52', '1');

-- ----------------------------
-- Table structure for `app`
-- ----------------------------
DROP TABLE IF EXISTS `app`;
CREATE TABLE `app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of app
-- ----------------------------
INSERT INTO `app` VALUES ('2', 'Máy tính', '2015-05-22 16:45:54', '1', '1');
INSERT INTO `app` VALUES ('3', 'Quần áo', '2015-05-22 17:55:00', '1', '1');
INSERT INTO `app` VALUES ('4', 'Ô tô', '2015-05-23 11:32:50', '1', '1');
INSERT INTO `app` VALUES ('5', 'Xe máy', '2015-05-23 18:16:46', '1', '0');

-- ----------------------------
-- Table structure for `question`
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `app_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('6', 'Giới tính bạn là gì?', '3', '2015-05-23 10:55:47', '1');
INSERT INTO `question` VALUES ('7', 'Bạn thích màu gì?', '3', '2015-05-23 10:55:42', '1');
INSERT INTO `question` VALUES ('8', 'Bạn thích mùa nào nhất?', '3', '2015-05-23 10:55:37', '1');
INSERT INTO `question` VALUES ('10', 'Bạn thích ô tô màu gì?', '4', '2015-05-23 10:55:29', '1');
INSERT INTO `question` VALUES ('11', 'Bạn có thích mày tính bảng không?', '2', '2015-05-23 10:56:02', '1');
INSERT INTO `question` VALUES ('12', 'Bạn thích ăn kẹo gì?', '5', '2015-05-23 19:46:04', '1');
INSERT INTO `question` VALUES ('16', 'Bạn thích con vật gì nhất?', '5', '2015-05-23 18:20:44', '1');

-- ----------------------------
-- Table structure for `result`
-- ----------------------------
DROP TABLE IF EXISTS `result`;
CREATE TABLE `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of result
-- ----------------------------
INSERT INTO `result` VALUES ('1', '5', 'http://localhost/app/uploads/image/tulips.jpg', 'Bạn là người nóng tính           ', '1', '2015-05-23 20:05:54');
INSERT INTO `result` VALUES ('2', '4', 'http://localhost/app/uploads/image/kha2-507ee.jpg', 'Bạn là người rất tinh tế            ', '1', '2015-05-23 10:18:18');
INSERT INTO `result` VALUES ('3', '5', 'http://localhost/app/uploads/image/penguins.jpg', 'Bạn là người sống rất tình cảm                        ', '1', '2015-05-23 20:05:13');
INSERT INTO `result` VALUES ('4', '5', 'http://localhost/app/uploads/image/kha2-507ee.jpg', 'Bạn là người rất khó tính                        ', '1', '2015-05-23 16:09:55');
INSERT INTO `result` VALUES ('5', '2', '', 'Bạn là người rất sành điệu            ', '1', '2015-05-23 11:03:15');
INSERT INTO `result` VALUES ('6', '2', '', 'Bạn là người trẻ trung, năng động            ', '1', '2015-05-23 11:03:37');
INSERT INTO `result` VALUES ('7', '5', 'http://localhost/app/uploads/image/koala.jpg', 'Bạn là người rất lạnh lùng                                                            ', '1', '2015-05-23 20:05:00');
INSERT INTO `result` VALUES ('8', '3', '', 'Bạn là người rất tinh tế            ', '1', '2015-05-23 18:22:58');
INSERT INTO `result` VALUES ('9', '3', '', 'bạn là người trẻ trung năng động            ', '1', '2015-05-23 18:23:15');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `per_page` int(11) NOT NULL DEFAULT '20',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'mrbacdoan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '0979191493', 'Sóc Sơn, Hà Nội', '1993-12-20', '2015-05-23 18:20:27', '1', '10');
INSERT INTO `user` VALUES ('16', 'mrbacdoan@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '0979191493', 'Sóc sơn, Hà Nội', '1991-02-12', '2015-05-23 19:47:23', '1', '20');
