/*
 Navicat Premium Data Transfer

 Source Server         : shop
 Source Server Type    : MySQL
 Source Server Version : 50546
 Source Host           : localhost:3306
 Source Schema         : shop

 Target Server Type    : MySQL
 Target Server Version : 50546
 File Encoding         : 65001

 Date: 17/08/2020 22:28:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id_brg` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_brg` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga_brg` int(40) NOT NULL,
  `desc_brg` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jml_brg` int(40) NOT NULL,
  `kategori` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar_brg` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_brg`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('B01', 'Baju 1', 85000, 'Baju 1', 5, '1', '../gambar/preview-1.jpg');
INSERT INTO `barang` VALUES ('B02', 'Baju 2', 90000, 'Baju 2', 6, '1', '../gambar/preview-2.jpg');
INSERT INTO `barang` VALUES ('B03', 'Baju 3', 100000, 'Baju 3', 10, '1', '../gambar/preview-3.jpg');
INSERT INTO `barang` VALUES ('B04', 'Baju 4', 65000, 'Baju 4', 7, '1', '../gambar/preview-4.jpg');
INSERT INTO `barang` VALUES ('B05', 'Baju 5', 100000, 'Baju 5', 8, '1', '../gambar/preview-5.jpg');
INSERT INTO `barang` VALUES ('B06', 'Baju 6', 105000, 'Baju 6', 5, '1', '../gambar/preview-6.jpg');
INSERT INTO `barang` VALUES ('B07', 'Baju 7', 70000, 'Baju 7', 9, '1', '../gambar/preview-7.jpg');
INSERT INTO `barang` VALUES ('B08', 'Baju 8', 89000, 'Baju 8', 6, '1', '../gambar/preview-8.jpg');
INSERT INTO `barang` VALUES ('B09', 'Baju 9', 100000, 'Baju 9', 4, '1', '../gambar/preview-9.jpg');
INSERT INTO `barang` VALUES ('B10', 'Baju 10', 80000, 'Baju 10', 7, '1', '../gambar/preview-10.jpg');
INSERT INTO `barang` VALUES ('B11', 'Baju 11', 120000, 'Baju 11', 4, '1', '../gambar/preview-11.jpg');
INSERT INTO `barang` VALUES ('B12', 'Baju 12', 67000, 'Baju 12', 5, '1', '../gambar/preview-12.jpg');
INSERT INTO `barang` VALUES ('B13', 'Baju 13', 89000, 'Baju 13', 10, '1', '../gambar/preview-13.jpg');
INSERT INTO `barang` VALUES ('B14', 'Baju 14', 130000, 'Baju 14', 6, '2', '../gambar/preview-14.jpg');
INSERT INTO `barang` VALUES ('B15', 'Baju 15', 125000, 'Baju 15', 3, '3', '../gambar/preview-15.jpg');

-- ----------------------------
-- Table structure for pageabout
-- ----------------------------
DROP TABLE IF EXISTS `pageabout`;
CREATE TABLE `pageabout`  (
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of pageabout
-- ----------------------------
INSERT INTO `pageabout` VALUES ('<p style=\"text-align:center\"><img alt=\"cool\" src=\"http://localhost/shop/admin/ckeditor/plugins/smiley/images/shades_smile.gif\" style=\"height:20px; width:20px\" title=\"cool\" /> Kami adalah toko online yang sedang berjualan kaos <img alt=\"yes\" src=\"http://localhost/shop/admin/ckeditor/plugins/smiley/images/thumbs_up.gif\" style=\"height:20px; width:20px\" title=\"yes\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://localhost/shop/gambar/preview-1.jpg\" style=\"height:328px; width:328px\" /></p>\r\n');

-- ----------------------------
-- Table structure for pagekontak
-- ----------------------------
DROP TABLE IF EXISTS `pagekontak`;
CREATE TABLE `pagekontak`  (
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of pagekontak
-- ----------------------------
INSERT INTO `pagekontak` VALUES ('<p><span style=\"font-family:lucida sans unicode,lucida grande,sans-serif\"><strong><span style=\"font-size:22px\">Hubungi Kami</span></strong></span></p>\r\n\r\n<p>lalayeyeye : +62 857 461 7445</p>\r\n\r\n<p>Email : lalayeyey@yahoo.com</p>\r\n');

-- ----------------------------
-- Table structure for pembeli
-- ----------------------------
DROP TABLE IF EXISTS `pembeli`;
CREATE TABLE `pembeli`  (
  `id_pembeli` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` int(20) NOT NULL,
  PRIMARY KEY (`id_pembeli`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 206 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of pembeli
-- ----------------------------
INSERT INTO `pembeli` VALUES (171, 'coba3', 'coba3', 'coba3', 122222222);
INSERT INTO `pembeli` VALUES (173, 'dfghjk', 'fghjk', 'ghjk', 3456);
INSERT INTO `pembeli` VALUES (174, 'dfghj', 'xcvbn', 'cdvfbn', 123456);
INSERT INTO `pembeli` VALUES (175, 'rendy', 'karangasem', 'it.edp.ssq@gmail.com', 82111);
INSERT INTO `pembeli` VALUES (176, 'rendy caem', 'karangasem', 'it.edp.ssq@gmail.com', 82111);
INSERT INTO `pembeli` VALUES (177, 'a', 'a', 'a', 82111);
INSERT INTO `pembeli` VALUES (178, 'a', 'a', 'a', 82111);
INSERT INTO `pembeli` VALUES (179, 'a', 'a', 'a', 82111);
INSERT INTO `pembeli` VALUES (180, 'ds', 'dddd', 'sa', 1212);
INSERT INTO `pembeli` VALUES (181, 'ds', 'dddd', 'sa', 1212);
INSERT INTO `pembeli` VALUES (182, 'rendy', 'a', '082133946233', 82111);
INSERT INTO `pembeli` VALUES (183, 'xx', 'aas', 'xx', 43434);
INSERT INTO `pembeli` VALUES (184, 'as', 'sa', 'sasa', 3435);
INSERT INTO `pembeli` VALUES (185, 'rtr', 'ff', 'trtr', 1212);
INSERT INTO `pembeli` VALUES (186, '', '', '', 0);
INSERT INTO `pembeli` VALUES (187, 'rendy', 'karangasem', 'ops.solosquare@gmail.com', 82111);
INSERT INTO `pembeli` VALUES (188, 'rendy', 'karangasem', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (189, 'rendy', 'karangasem', 'it.edp.ssq@gmail.com', 43434);
INSERT INTO `pembeli` VALUES (190, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (191, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (192, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (193, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (194, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (195, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (196, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (197, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (198, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (199, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (200, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (201, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (202, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (203, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (204, 'rendy', 'a', 'solosquare.adminecommerce@solo', 43434);
INSERT INTO `pembeli` VALUES (205, 'niken', 'siwal', 'ss', 1213);

-- ----------------------------
-- Table structure for pengelola
-- ----------------------------
DROP TABLE IF EXISTS `pengelola`;
CREATE TABLE `pengelola`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hakases` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of pengelola
-- ----------------------------
INSERT INTO `pengelola` VALUES (14, 'Audit', 'admin', 'admin', 'audit');

-- ----------------------------
-- Table structure for pesan
-- ----------------------------
DROP TABLE IF EXISTS `pesan`;
CREATE TABLE `pesan`  (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(20) NOT NULL,
  `nama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_brg` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_brg` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jml` int(10) NOT NULL,
  `total` int(30) NOT NULL,
  `tanggal_pesan` datetime NOT NULL,
  PRIMARY KEY (`id_pesan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of pesan
-- ----------------------------
INSERT INTO `pesan` VALUES (10, 171, 'coba3', 'coba3', 'B01', 'Baju 1', 1, 85000, '2013-11-27 11:04:22');
INSERT INTO `pesan` VALUES (11, 171, 'coba3', 'coba3', 'B02', 'Baju 2', 1, 90000, '2013-11-27 11:04:22');
INSERT INTO `pesan` VALUES (12, 171, 'coba3', 'coba3', 'B02', 'Baju 2', 1, 90000, '2013-11-27 11:16:07');
INSERT INTO `pesan` VALUES (13, 171, 'coba3', 'coba3', 'B12', 'Baju 12', 3, 201000, '2013-11-27 11:17:25');
INSERT INTO `pesan` VALUES (14, 173, 'dfghjk', 'fghjk', 'B04', 'Baju 4', 2, 130000, '2013-11-27 12:52:27');
INSERT INTO `pesan` VALUES (16, 176, 'rendy caem', 'karangasem', 'B07', 'Baju 7', 2, 140000, '2020-08-15 11:14:37');
INSERT INTO `pesan` VALUES (17, 177, 'a', 'a', 'B03', 'Baju 3', 1, 100000, '2020-08-15 14:34:38');
INSERT INTO `pesan` VALUES (18, 177, 'a', 'a', 'B01', 'Baju 1', 1, 85000, '2020-08-15 14:34:38');
INSERT INTO `pesan` VALUES (19, 177, 'a', 'a', 'B02', 'Baju 2', 1, 90000, '2020-08-15 14:34:38');
INSERT INTO `pesan` VALUES (20, 180, 'ds', 'dddd', 'B02', 'Baju 2', 1, 90000, '2020-08-15 14:49:16');
INSERT INTO `pesan` VALUES (21, 182, 'rendy', 'a', 'B03', 'Baju 3', 1, 100000, '2020-08-15 14:51:35');
INSERT INTO `pesan` VALUES (22, 183, 'xx', 'aas', 'B02', 'Baju 2', 1, 90000, '2020-08-15 14:57:35');
INSERT INTO `pesan` VALUES (23, 184, 'as', 'sa', 'B01', 'Baju 1', 1, 85000, '2020-08-15 15:00:03');
INSERT INTO `pesan` VALUES (24, 185, 'rtr', 'ff', 'B04', 'Baju 4', 1, 65000, '2020-08-15 15:02:21');
INSERT INTO `pesan` VALUES (25, 186, '', '', 'B08', 'Baju 8', 1, 89000, '2020-08-15 15:08:48');
INSERT INTO `pesan` VALUES (26, 175, 'rendy', 'karangasem', 'B08', 'Baju 8', 1, 89000, '2020-08-15 15:12:13');
INSERT INTO `pesan` VALUES (27, 175, 'rendy', 'karangasem', 'B04', 'Baju 4', 1, 65000, '2020-08-15 15:14:28');
INSERT INTO `pesan` VALUES (28, 175, 'rendy', 'karangasem', 'B01', 'Baju 1', 1, 85000, '2020-08-15 15:23:29');
INSERT INTO `pesan` VALUES (29, 182, 'rendy', 'a', 'B04', 'Baju 4', 1, 65000, '2020-08-15 15:27:03');
INSERT INTO `pesan` VALUES (30, 205, 'niken', 'siwal', 'B02', 'Baju 2', 1, 90000, '2020-08-17 20:41:53');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, '../gambar-slide/banner-slide-1.jpg');

-- ----------------------------
-- View structure for v_pembeli
-- ----------------------------
DROP VIEW IF EXISTS `v_pembeli`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_pembeli` AS SELECT
	pembeli.id_pembeli, 
	pesan.nama, 
	pesan.alamat, 
	pembeli.email, 
	pembeli.telp, 
	pesan.total
FROM
	pembeli
	INNER JOIN
	pesan
	ON 
		pembeli.id_pembeli = pesan.id_pembeli ;

SET FOREIGN_KEY_CHECKS = 1;
