/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80036 (8.0.36-0ubuntu0.22.04.1)
 Source Host           : localhost:3306
 Source Schema         : db_cms

 Target Server Type    : MySQL
 Target Server Version : 80036 (8.0.36-0ubuntu0.22.04.1)
 File Encoding         : 65001

 Date: 02/02/2024 18:40:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for compro_option
-- ----------------------------
DROP TABLE IF EXISTS `compro_option`;
CREATE TABLE `compro_option`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `option_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `stat` int NULL DEFAULT 1,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_finance
-- ----------------------------
DROP TABLE IF EXISTS `dt_finance`;
CREATE TABLE `dt_finance`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `jenis` int NULL DEFAULT NULL COMMENT '1. uang masuk, 2. uang keluar',
  `tgl` date NULL DEFAULT NULL,
  `nominal` bigint NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 179 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_notif
-- ----------------------------
DROP TABLE IF EXISTS `dt_notif`;
CREATE TABLE `dt_notif`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_notif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role_id` int NULL DEFAULT NULL,
  `stat` int NOT NULL DEFAULT 1 COMMENT '1. unread, 0. read',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  INDEX `role_id`(`role_id` ASC) USING BTREE,
  INDEX `syscreateuser`(`syscreateuser` ASC) USING BTREE,
  CONSTRAINT `dt_notif_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `sys_roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_notif_ibfk_2` FOREIGN KEY (`syscreateuser`) REFERENCES `dt_users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_portfolio
-- ----------------------------
DROP TABLE IF EXISTS `dt_portfolio`;
CREATE TABLE `dt_portfolio`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `lowres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `highres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tipe` int NULL DEFAULT NULL COMMENT '1.pict, 2.video from upload, 3. youtube',
  `stat` int NULL DEFAULT 1 COMMENT '1.aktif, 0. delete',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_post
-- ----------------------------
DROP TABLE IF EXISTS `dt_post`;
CREATE TABLE `dt_post`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL,
  `post_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `post_status` int NULL DEFAULT NULL COMMENT '1. aktif\r\n2. delete\r\n3. draft',
  `post_thumbnail` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `comment_status` int NULL DEFAULT NULL COMMENT '1. open\r\n2. closed',
  `post_category` int NULL DEFAULT NULL COMMENT 'relasi dengan tb_category',
  `post_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL,
  `viewers` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL COMMENT 'di dapat dari session login user',
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  UNIQUE INDEX `post_title`(`post_title` ASC) USING BTREE,
  INDEX `syscreateuser`(`syscreateuser` ASC) USING BTREE,
  INDEX `post_category`(`post_category` ASC) USING BTREE,
  CONSTRAINT `dt_post_ibfk_1` FOREIGN KEY (`syscreateuser`) REFERENCES `sys_users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_post_ibfk_2` FOREIGN KEY (`post_category`) REFERENCES `dt_post_category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_post_ibfk_3` FOREIGN KEY (`syscreateuser`) REFERENCES `dt_users` (`sys_user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_post_category
-- ----------------------------
DROP TABLE IF EXISTS `dt_post_category`;
CREATE TABLE `dt_post_category`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `descriptions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `stat` int NULL DEFAULT NULL COMMENT '1. aktif\r\n2. non-aktif',
  `syscreateuser` int NULL DEFAULT NULL COMMENT 'di dapat dari session login user',
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_post_comment
-- ----------------------------
DROP TABLE IF EXISTS `dt_post_comment`;
CREATE TABLE `dt_post_comment`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NULL DEFAULT NULL COMMENT 'relasi dengan table post',
  `comment_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `comment_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `comment_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL,
  `comment_date` datetime NULL DEFAULT NULL,
  `comment_parent` int NULL DEFAULT 0,
  `ip_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL COMMENT '0. delete\r\n1. aktif\r\n2. edit',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL COMMENT 'user approved comment',
  `sysupdatedate` datetime NULL DEFAULT NULL COMMENT 'date approved comment',
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  INDEX `post_id`(`post_id` ASC) USING BTREE,
  CONSTRAINT `dt_post_comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `dt_post` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_post_report
-- ----------------------------
DROP TABLE IF EXISTS `dt_post_report`;
CREATE TABLE `dt_post_report`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` int NULL DEFAULT NULL COMMENT '1. post\r\n2. comment',
  `id_category` int NULL DEFAULT NULL COMMENT 'diambil dari ID post, atau ID comment',
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  INDEX `id_category`(`id_category` ASC) USING BTREE,
  CONSTRAINT `dt_post_report_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `dt_post` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_post_report_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `dt_post_comment` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'table untuk report / laporkan post atau komentar di aplikasi blog' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_pwd
-- ----------------------------
DROP TABLE IF EXISTS `dt_pwd`;
CREATE TABLE `dt_pwd`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lastcheck` date NULL DEFAULT NULL,
  `note` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `status` int NULL DEFAULT NULL COMMENT '1. Aktif, 2. Non-Aktif',
  `syscreatedate` date NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `sysupdatedate` date NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysdeletedate` date NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 442 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'ini adalah table manajemen password' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_services
-- ----------------------------
DROP TABLE IF EXISTS `dt_services`;
CREATE TABLE `dt_services`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `stat` int NULL DEFAULT 1 COMMENT '1.aktif, 0. delete',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'table untuk company profile halaman services' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_subscriber
-- ----------------------------
DROP TABLE IF EXISTS `dt_subscriber`;
CREATE TABLE `dt_subscriber`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `platform` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT 1 COMMENT '1.aktif, 0. nonaktif',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_toto
-- ----------------------------
DROP TABLE IF EXISTS `dt_toto`;
CREATE TABLE `dt_toto`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `satu` int NULL DEFAULT NULL,
  `dua` int NULL DEFAULT NULL,
  `tiga` int NULL DEFAULT NULL,
  `empat` int NULL DEFAULT NULL,
  `lima` int NULL DEFAULT NULL,
  `enam` int NULL DEFAULT NULL,
  `pasaran` int NULL DEFAULT NULL COMMENT '1. hk siang\r\n2. sydney\r\n3. haipong\r\n4. singapore\r\n5. singapore 45\r\n6. malaysia\r\n7. jinan\r\n8. qatar\r\n9. bogor\r\n10. hongkong',
  `tgl_keluar` date NULL DEFAULT NULL,
  `noted` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pasaran`(`pasaran` ASC) USING BTREE,
  CONSTRAINT `dt_toto_ibfk_1` FOREIGN KEY (`pasaran`) REFERENCES `mt_toto_pasar` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 646 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_users
-- ----------------------------
DROP TABLE IF EXISTS `dt_users`;
CREATE TABLE `dt_users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `sys_user_id` int NULL DEFAULT NULL COMMENT 'relasi dengan ID table sys_users',
  `nama` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `jenis_kelamin` int NOT NULL DEFAULT 0 COMMENT '1. Male\r\n2. Female',
  `id_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL COMMENT 'bisa nomor ktp, nomor induk pegawai, nomor induk karyawan',
  `lahir_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL COMMENT 'tempat lahir',
  `lahir_2` date NULL DEFAULT NULL COMMENT 'tanggal_lahir',
  `address_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL COMMENT 'alamat nama jalan',
  `address_provinsi` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address_kabupaten` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address_kecamatan` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address_kelurahan` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` int NULL DEFAULT 101,
  `mail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  INDEX `id_user`(`sys_user_id` ASC) USING BTREE,
  INDEX `address_provinsi`(`address_provinsi` ASC) USING BTREE,
  INDEX `address_kelurahan`(`address_kelurahan` ASC) USING BTREE,
  INDEX `address_kecamatan`(`address_kecamatan` ASC) USING BTREE,
  INDEX `address_kabupaten`(`address_kabupaten` ASC) USING BTREE,
  INDEX `negara`(`negara` ASC) USING BTREE,
  CONSTRAINT `dt_users_ibfk_1` FOREIGN KEY (`sys_user_id`) REFERENCES `sys_users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_users_ibfk_2` FOREIGN KEY (`address_provinsi`) REFERENCES `mt_wil_provinsi` (`id_provinsi`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_users_ibfk_3` FOREIGN KEY (`address_kelurahan`) REFERENCES `mt_wil_kelurahan` (`id_kelurahan`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_users_ibfk_4` FOREIGN KEY (`address_kecamatan`) REFERENCES `mt_wil_kecamatan` (`id_kecamatan`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_users_ibfk_5` FOREIGN KEY (`address_kabupaten`) REFERENCES `mt_wil_kabupaten` (`id_kabupaten`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dt_users_ibfk_6` FOREIGN KEY (`negara`) REFERENCES `mt_country` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_country
-- ----------------------------
DROP TABLE IF EXISTS `mt_country`;
CREATE TABLE `mt_country`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `country` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `flags` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `code`(`code` ASC) USING BTREE,
  INDEX `id`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 250 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_toto_pasar
-- ----------------------------
DROP TABLE IF EXISTS `mt_toto_pasar`;
CREATE TABLE `mt_toto_pasar`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tipe` int NULL DEFAULT NULL,
  `nama_web` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hari_undi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hari_libur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jam_tutup` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jam_undi` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_wil_kabupaten
-- ----------------------------
DROP TABLE IF EXISTS `mt_wil_kabupaten`;
CREATE TABLE `mt_wil_kabupaten`  (
  `id_kabupaten` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_provinsi` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_jenis` int NOT NULL,
  `nama_abbr` varchar(48) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_actived` int NOT NULL DEFAULT 1,
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_kabupaten`) USING BTREE,
  UNIQUE INDEX `id_kabupaten`(`id_kabupaten` ASC) USING BTREE,
  INDEX `id_provinsi`(`id_provinsi` ASC) USING BTREE,
  CONSTRAINT `mt_wil_kabupaten_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `mt_wil_provinsi` (`id_provinsi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_wil_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `mt_wil_kecamatan`;
CREATE TABLE `mt_wil_kecamatan`  (
  `id_kecamatan` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kabupaten` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_abbr` varchar(48) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_actived` int NOT NULL DEFAULT 1,
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_kecamatan`) USING BTREE,
  UNIQUE INDEX `id_kecamatan`(`id_kecamatan` ASC) USING BTREE,
  INDEX `id_kabupaten`(`id_kabupaten` ASC) USING BTREE,
  CONSTRAINT `mt_wil_kecamatan_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `mt_wil_kabupaten` (`id_kabupaten`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_wil_kelurahan
-- ----------------------------
DROP TABLE IF EXISTS `mt_wil_kelurahan`;
CREATE TABLE `mt_wil_kelurahan`  (
  `id_kelurahan` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kecamatan` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `id_jenis` int NOT NULL,
  `nama_abbr` varchar(48) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_actived` int NOT NULL DEFAULT 1,
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_kelurahan`) USING BTREE,
  UNIQUE INDEX `id_kelurahan`(`id_kelurahan` ASC) USING BTREE,
  INDEX `id_kecamatan`(`id_kecamatan` ASC) USING BTREE,
  CONSTRAINT `mt_wil_kelurahan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `mt_wil_kecamatan` (`id_kecamatan`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_wil_provinsi
-- ----------------------------
DROP TABLE IF EXISTS `mt_wil_provinsi`;
CREATE TABLE `mt_wil_provinsi`  (
  `id_provinsi` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_abbr` varchar(48) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_actived` int NOT NULL DEFAULT 1,
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`) USING BTREE,
  UNIQUE INDEX `id_provinsi`(`id_provinsi` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_app
-- ----------------------------
DROP TABLE IF EXISTS `sys_app`;
CREATE TABLE `sys_app`  (
  `favico` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `company_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `app_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `app_year` int NULL DEFAULT NULL,
  PRIMARY KEY (`favico`) USING BTREE,
  INDEX `favico`(`favico` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_menu
-- ----------------------------
DROP TABLE IF EXISTS `sys_menu`;
CREATE TABLE `sys_menu`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu_parent` int NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_no` int NULL DEFAULT NULL,
  `group_menu` int NULL DEFAULT NULL COMMENT '1. applications\r\n2. report\r\n3. systems',
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  INDEX `group_menu`(`group_menu` ASC) USING BTREE,
  CONSTRAINT `sys_menu_ibfk_1` FOREIGN KEY (`group_menu`) REFERENCES `sys_menu_group` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_menu_group
-- ----------------------------
DROP TABLE IF EXISTS `sys_menu_group`;
CREATE TABLE `sys_menu_group`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_no` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1000 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_param
-- ----------------------------
DROP TABLE IF EXISTS `sys_param`;
CREATE TABLE `sys_param`  (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `param_group` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `param_value` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `param_desc` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_permissions
-- ----------------------------
DROP TABLE IF EXISTS `sys_permissions`;
CREATE TABLE `sys_permissions`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_id` int NULL DEFAULT NULL,
  `id_menu` int NULL DEFAULT NULL,
  `v` int NULL DEFAULT NULL COMMENT 'view',
  `c` int NULL DEFAULT NULL COMMENT 'create',
  `r` int NULL DEFAULT NULL COMMENT 'read',
  `u` int NULL DEFAULT NULL COMMENT 'update',
  `d` int NULL DEFAULT NULL COMMENT 'delete',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  INDEX `sys_permissions_ibfk_1`(`role_id` ASC) USING BTREE,
  INDEX `id_menu`(`id_menu` ASC) USING BTREE,
  CONSTRAINT `sys_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `sys_roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `sys_permissions_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `sys_menu` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_roles
-- ----------------------------
DROP TABLE IF EXISTS `sys_roles`;
CREATE TABLE `sys_roles`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL DEFAULT 0,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NOT NULL DEFAULT 1 COMMENT '1. aktif 0. non-aktif',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_users
-- ----------------------------
DROP TABLE IF EXISTS `sys_users`;
CREATE TABLE `sys_users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `role_id` int NULL DEFAULT NULL,
  `pict` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `last_login` datetime NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `login_attempt` int NULL DEFAULT 0,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  UNIQUE INDEX `id`(`id` ASC) USING BTREE,
  UNIQUE INDEX `uname`(`uname` ASC) USING BTREE,
  INDEX `role_id`(`role_id` ASC) USING BTREE,
  CONSTRAINT `sys_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `sys_roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for test_impor
-- ----------------------------
DROP TABLE IF EXISTS `test_impor`;
CREATE TABLE `test_impor`  (
  `no` int NULL DEFAULT NULL,
  `nama` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tr_wedding
-- ----------------------------
DROP TABLE IF EXISTS `tr_wedding`;
CREATE TABLE `tr_wedding`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hubungan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tlp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `attd` int NULL DEFAULT NULL,
  `pesan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- View structure for group_menu
-- ----------------------------
DROP VIEW IF EXISTS `group_menu`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `group_menu` AS select `sys_menu`.`link` AS `link`,`sys_menu`.`stat` AS `stat` from `sys_menu` where ((`sys_menu`.`stat` = 1) and (`sys_menu`.`order_no` like '%00%')) group by `sys_menu`.`group_menu` order by `sys_menu`.`order_no`;

-- ----------------------------
-- View structure for password_management
-- ----------------------------
DROP VIEW IF EXISTS `password_management`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `password_management` AS select `dt_pwd`.`id` AS `id`,`sys_users`.`uname` AS `owner`,`dt_pwd`.`link` AS `link`,`dt_pwd`.`uname` AS `username`,`dt_pwd`.`lastcheck` AS `lastcheck`,`dt_pwd`.`note` AS `note`,`dt_pwd`.`status` AS `status_aktif`,`dt_pwd`.`syscreateuser` AS `syscreateuser` from (`dt_pwd` left join `sys_users` on((`dt_pwd`.`syscreateuser` = `sys_users`.`id`)));

-- ----------------------------
-- View structure for post_index
-- ----------------------------
DROP VIEW IF EXISTS `post_index`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `post_index` AS select `dt_post`.`id` AS `id`,substr(`dt_post`.`post_content`,1,50) AS `post_content`,`dt_post`.`post_title` AS `post_title`,`dt_post`.`post_status` AS `post_status`,`dt_post`.`viewers` AS `viewers`,`dt_post`.`comment_status` AS `comment_status`,`dt_post`.`syscreateuser` AS `syscreateuser`,`dt_post`.`syscreatedate` AS `syscreatedate`,`sys_users`.`uname` AS `uname`,`sys_users`.`id` AS `id_user`,`dt_post_category`.`id` AS `id_category`,`dt_post_category`.`category` AS `category` from ((`dt_post` left join `sys_users` on((`dt_post`.`syscreateuser` = `sys_users`.`id`))) left join `dt_post_category` on((`dt_post`.`post_category` = `dt_post_category`.`id`))) order by `dt_post`.`syscreatedate` desc;

-- ----------------------------
-- View structure for sys_app_select
-- ----------------------------
DROP VIEW IF EXISTS `sys_app_select`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `sys_app_select` AS select `sys_app`.`favico` AS `favico`,`sys_app`.`logo` AS `logo`,`sys_app`.`company_name` AS `company_name`,`sys_app`.`app_name` AS `app_name`,`sys_app`.`app_year` AS `app_year` from `sys_app`;

-- ----------------------------
-- View structure for sys_auth
-- ----------------------------
DROP VIEW IF EXISTS `sys_auth`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `sys_auth` AS select `sys_users`.`id` AS `id_user`,`sys_users`.`uname` AS `uname`,`dt_users`.`mail` AS `mail`,`sys_users`.`pwd` AS `pwd`,`sys_users`.`pict` AS `pict`,`sys_users`.`stat` AS `stat_aktif`,`sys_users`.`role_id` AS `role_id`,`sys_roles`.`stat` AS `role_stat`,`sys_roles`.`name` AS `role_name`,`dt_users`.`nama` AS `fullname`,`sys_users`.`last_login` AS `last_login`,`sys_users`.`ip_address` AS `ip_address`,`sys_users`.`login_attempt` AS `limit_login` from ((`sys_users` join `sys_roles` on((`sys_users`.`role_id` = `sys_roles`.`id`))) join `dt_users` on((`sys_users`.`id` = `dt_users`.`sys_user_id`)));

-- ----------------------------
-- View structure for sys_menu_group_select
-- ----------------------------
DROP VIEW IF EXISTS `sys_menu_group_select`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `sys_menu_group_select` AS select `sys_menu_group`.`id` AS `id`,`sys_menu_group`.`nama` AS `nama`,`sys_menu_group`.`stat` AS `stat`,`sys_menu_group`.`description` AS `description`,`sys_menu_group`.`order_no` AS `order_no` from `sys_menu_group` where (`sys_menu_group`.`stat` = 1);

-- ----------------------------
-- View structure for sys_menu_select
-- ----------------------------
DROP VIEW IF EXISTS `sys_menu_select`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `sys_menu_select` AS select `sys_menu`.`id` AS `id_menu`,`sys_menu`.`menu_parent` AS `id_parent`,(select `child`.`nama` from `sys_menu` `child` where (`sys_menu`.`menu_parent` = `child`.`id`)) AS `parent_name`,`sys_menu`.`nama` AS `nama_menu`,`sys_menu`.`link` AS `link`,`sys_menu`.`order_no` AS `order_no`,`sys_menu`.`icon` AS `icon`,`sys_menu`.`stat` AS `stat_menu`,`sys_menu`.`group_menu` AS `id_group_menu`,`sys_menu`.`description` AS `description`,`sys_menu_group`.`nama` AS `group_menu`,`sys_menu_group`.`order_no` AS `group_order`,`sys_permissions`.`role_id` AS `role_id`,`sys_permissions`.`id` AS `id_permision`,`sys_permissions`.`v` AS `view`,`sys_permissions`.`c` AS `create`,`sys_permissions`.`r` AS `read`,`sys_permissions`.`u` AS `update`,`sys_permissions`.`d` AS `delete`,`sys_roles`.`name` AS `grup_nama` from ((((`sys_menu` join `sys_menu_group` on((`sys_menu`.`group_menu` = `sys_menu_group`.`id`))) join `sys_permissions` on((`sys_menu`.`id` = `sys_permissions`.`id_menu`))) join `sys_roles` on((`sys_permissions`.`role_id` = `sys_roles`.`id`))) left join `sys_menu` `t2` on((`t2`.`menu_parent` = `sys_menu`.`id`)));

-- ----------------------------
-- View structure for sys_roles_select
-- ----------------------------
DROP VIEW IF EXISTS `sys_roles_select`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `sys_roles_select` AS select `sys_roles`.`id` AS `id_grup`,`sys_roles`.`name` AS `nama_grup`,`sys_roles`.`description` AS `des_grup`,`sys_roles`.`stat` AS `status_grup`,`sys_roles`.`parent_id` AS `parent_id`,(select `child`.`name` from `sys_roles` `child` where (`sys_roles`.`parent_id` = `child`.`id`)) AS `parent_name` from (`sys_roles` left join `sys_roles` `t2` on((`t2`.`parent_id` = `sys_roles`.`id`))) group by `sys_roles`.`id`;

-- ----------------------------
-- View structure for sys_users_select
-- ----------------------------
DROP VIEW IF EXISTS `sys_users_select`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `sys_users_select` AS select `sys_users`.`id` AS `id_user`,`sys_users`.`uname` AS `uname`,`sys_users`.`role_id` AS `role_id`,`sys_users`.`pict` AS `pict`,`sys_users`.`stat` AS `stat`,`sys_roles`.`name` AS `role_name`,`sys_roles`.`parent_id` AS `parent_id` from (`sys_users` join `sys_roles` on((`sys_users`.`role_id` = `sys_roles`.`id`)));

-- ----------------------------
-- Procedure structure for group_menu
-- ----------------------------
DROP PROCEDURE IF EXISTS `group_menu`;
delimiter ;;
CREATE PROCEDURE `group_menu`()
BEGIN
SELECT link FROM group_menu;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for mt_country
-- ----------------------------
DROP PROCEDURE IF EXISTS `mt_country`;
delimiter ;;
CREATE PROCEDURE `mt_country`(IN `param` VARCHAR(50), IN `country_id` INT, IN `kode_negara` VARCHAR(2), IN `nama_negara` VARCHAR(45), IN `bendera` VARCHAR(50), IN `user_login` INT)
BEGIN
IF param = 'select' THEN
	
	SELECT  mt_country.id AS id_country, mt_country.`code` AS code_country, mt_country.country AS nama_country, mt_country.stat, mt_country.flags
	FROM mt_country
	WHERE mt_country.stat = 1;

ELSEIF param = 'insert' THEN

	INSERT INTO mt_country
	(
		mt_country.`code`,
		mt_country.country,
		mt_country.flags,
		mt_country.stat,
		mt_country.syscreateuser,
		mt_country.syscreatedate
	)
	VALUES
	(
		kode_negara,
		nama_negara,
		bendera,
		1,
		user_login,
		NOW()
	);

ELSEIF param = 'get_code' THEN

SELECT COUNT(mt_country.id) AS total FROM mt_country WHERE mt_country.`code` = kode_negara;

ELSEIF param = 'get_detail' THEN

SELECT  mt_country.`code` AS code_country, mt_country.country AS nama_country, mt_country.flags
FROM mt_country
WHERE mt_country.id = country_id;

ELSEIF param = 'update' THEN

UPDATE mt_country
SET mt_country.`code`= kode_negara, 
mt_country.country = nama_negara, 
mt_country.flags = bendera,
mt_country.sysupdateuser = user_login, 
mt_country.sysupdatedate = NOW()
WHERE mt_country.id = country_id;

ELSE

	UPDATE mt_country
	SET mt_country.stat = 0,
	mt_country.sysdeleteuser = user_login,
	mt_country.sysdeletedate = NOW()
	WHERE mt_country.id = country_id;
	
END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for mt_will_kab
-- ----------------------------
DROP PROCEDURE IF EXISTS `mt_will_kab`;
delimiter ;;
CREATE PROCEDURE `mt_will_kab`(IN `param` VARCHAR(10), IN `kab_id` CHAR(2), IN `nama_kab` TINYTEXT, IN `lat` DOUBLE, IN `longtitut` DOUBLE, IN `user_login` INT)
BEGIN
	IF param = 'select' THEN
		
		SELECT mt_wil_kabupaten.id_kabupaten
		FROM mt_wil_kabupaten
		ORDER BY mt_wil_kabupaten.id_kabupaten ASC;
		
	END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for mt_will_prov
-- ----------------------------
DROP PROCEDURE IF EXISTS `mt_will_prov`;
delimiter ;;
CREATE PROCEDURE `mt_will_prov`(IN `param` VARCHAR(10), IN `prov_id` CHAR(2), IN `nama_prov` TINYTEXT, IN `lat` DOUBLE, IN `longtitut` DOUBLE, IN `user_login` INT)
BEGIN

	IF param = 'select' THEN
	
	SELECT mt_wil_provinsi.id_provinsi, 
	mt_wil_provinsi.nama AS nama_prov, 
	mt_wil_provinsi.is_actived AS stat_aktif, 
	mt_wil_provinsi.latitude AS lat, 
	mt_wil_provinsi.longitude AS ltd
	FROM mt_wil_provinsi
	ORDER BY mt_wil_provinsi.id_provinsi;
	
	ELSEIF param = 'detail' THEN
	
	SELECT mt_wil_provinsi.id_provinsi, 
	mt_wil_provinsi.nama AS nama_prov, 
	mt_wil_provinsi.is_actived AS stat_aktif, 
	mt_wil_provinsi.latitude AS lat, 
	mt_wil_provinsi.longitude AS ltd
	FROM mt_wil_provinsi
	WHERE mt_wil_provinsi.id_provinsi = prov_id;
	
	ELSEIF param = 'update' THEN
	
	UPDATE mt_wil_provinsi
	SET mt_wil_provinsi.nama =  nama_prov,
	mt_wil_provinsi.latitude = lat,
	mt_wil_provinsi.longitude = longtitut,
	mt_wil_provinsi.sysupdateuser = user_login,
	mt_wil_provinsi.sysupdatedate = NOW()
	WHERE mt_wil_provinsi.id_provinsi = prov_id;
	
	ELSEIF param = 'Get_id' THEN
	
	SELECT COUNT(mt_wil_provinsi.id_provinsi) AS total
	FROM mt_wil_provinsi
	WHERE mt_wil_provinsi.id_provinsi = prov_id;
	
	ELSEIF param = 'insert' THEN
	
	INSERT INTO mt_wil_provinsi
	(
		mt_wil_provinsi.id_provinsi,
		mt_wil_provinsi.nama,
		mt_wil_provinsi.latitude,
		mt_wil_provinsi.longitude,
		mt_wil_provinsi.is_actived,
		mt_wil_provinsi.syscreateuser,
		mt_wil_provinsi.syscreatedate
	)
	VALUES
	(
		prov_id,
		nama_prov,
		lat,
		longtitut,
		1,
		user_login,
		NOW()
	);
	
	ELSEIF param = 'Set_active' THEN
	
	UPDATE mt_wil_provinsi
	SET mt_wil_provinsi.is_actived = 1,
	mt_wil_provinsi.syscreateuser = user_login,
	mt_wil_provinsi.sysupdatedate = NOW()
	WHERE mt_wil_provinsi.id_provinsi = prov_id;
	
ELSE
	
	UPDATE mt_wil_provinsi
	SET mt_wil_provinsi.is_actived = 0,
					mt_wil_provinsi.sysdeleteuser = user_login,
					mt_wil_provinsi.sysdeletedate = NOW()
	WHERE mt_wil_provinsi.id_provinsi = prov_id;
	
END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_app_select
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_app_select`;
delimiter ;;
CREATE PROCEDURE `sys_app_select`()
BEGIN
	
	SELECT
		`sys_app_select`.`favico`,
		`sys_app_select`.`logo`,
		`sys_app_select`.`company_name`,
		`sys_app_select`.`app_name`,
		`sys_app_select`.`app_year`
	FROM sys_app_select;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_app_select_select
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_app_select_select`;
delimiter ;;
CREATE PROCEDURE `sys_app_select_select`()
BEGIN
	
	SELECT
		`sys_app_select`.`favico`,
		`sys_app_select`.`logo`,
		`sys_app_select`.`company_name`,
		`sys_app_select`.`app_name`,
		`sys_app_select`.`app_year`
	FROM sys_app_select_select;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_auth
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_auth`;
delimiter ;;
CREATE PROCEDURE `sys_auth`(IN `usernama` VARCHAR(100))
BEGIN

	SELECT
	`sys_auth`.`id_user`,
	`sys_auth`.`uname`,
	`sys_auth`.`pwd`,
	`sys_auth`.`pict`,
	`sys_auth`.`stat_aktif`,
	`sys_auth`.`role_id`,
	`sys_auth`.`role_stat`,
	`sys_auth`.`role_name`,
	`sys_auth`.`fullname`,
	`sys_auth`.`last_login`,
	`sys_auth`.`ip_address`,
	`sys_auth`.`limit_login` 
	FROM sys_auth
	WHERE sys_auth.uname = usernama 
	AND sys_auth.stat_aktif = 1
	AND sys_auth.role_stat = 1
	OR sys_auth.mail = usernama
	AND sys_auth.stat_aktif = 1
	AND sys_auth.role_stat = 1;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_active
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_active`;
delimiter ;;
CREATE PROCEDURE `sys_menu_active`(IN `id_menu` INT, IN `user_login` INT)
BEGIN

DECLARE menu_nama VARCHAR(50);
SELECT sys_menu.nama INTO menu_nama FROM sys_menu WHERE sys_menu.id = id_menu;
UPDATE sys_menu 
SET sys_menu.stat = 1, 
	sys_menu.sysdeleteuser = user_login, 
	sys_menu.sysdeletedate = NOW()
WHERE sys_menu.id = id_menu OR sys_menu.menu_parent = id_menu;
SELECT menu_nama;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_delete
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_delete`;
delimiter ;;
CREATE PROCEDURE `sys_menu_delete`(IN `id_menu` INT, IN `user_login` INT)
BEGIN

DECLARE menu_nama VARCHAR(50);
SELECT sys_menu.nama INTO menu_nama FROM sys_menu WHERE sys_menu.id = id_menu;
UPDATE sys_menu 
SET sys_menu.stat = 0, 
	sys_menu.sysdeleteuser = user_login, 
	sys_menu.sysdeletedate = NOW()
WHERE sys_menu.id = id_menu OR sys_menu.menu_parent = id_menu;
SELECT menu_nama;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_dir
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_dir`;
delimiter ;;
CREATE PROCEDURE `sys_menu_dir`()
BEGIN
SELECT * FROM sys_menu_select
GROUP BY sys_menu_select.id_menu
ORDER BY sys_menu_select.order_no ASC;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_getorder
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_getorder`;
delimiter ;;
CREATE PROCEDURE `sys_menu_getorder`(IN `user_role` INT, IN `menu_grup` INT)
BEGIN

SELECT sys_menu_select.order_no, sys_menu_select.nama_menu
FROM sys_menu_select
WHERE sys_menu_select.stat_menu = 1
AND sys_menu_select.role_id = user_role
AND sys_menu_select.id_group_menu = menu_grup
GROUP BY sys_menu_select.order_no
ORDER BY sys_menu_select.order_no, sys_menu_select.id_group_menu ASC;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_group
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_group`;
delimiter ;;
CREATE PROCEDURE `sys_menu_group`(IN `param` VARCHAR(50), 
IN `id_grup` INT,
IN `nama_group` VARCHAR(255), 
IN `deskripsi` VARCHAR(255), 
IN `no_order` INT, 
IN `user_login` INT)
BEGIN

DECLARE new_id INT;

IF param = 'check_nama' THEN

	SELECT COUNT(sys_menu_group.id) AS total
	FROM sys_menu_group
	WHERE sys_menu_group.nama = nama_group;
	
ELSEIF param = 'insert_baru' THEN

	UPDATE `sys_menu_group` 
	SET `sys_menu_group`.`order_no` = `order_no` + 1 
	WHERE `sys_menu_group`.`order_no` >= no_order
	AND `sys_menu_group`.`order_no` <> 999;

	IF id_grup >= 999 THEN
		
		SET new_id = id_grup + 1;
		
	ELSE
	
		SET new_id = id_grup;
	
	END IF;

	INSERT INTO sys_menu_group (
		`sys_menu_group`.`id`,
		`sys_menu_group`.`nama`, 
		`sys_menu_group`.`description`,
		`sys_menu_group`.`order_no`,
		`sys_menu_group`.`stat`, 
		`sys_menu_group`.`syscreateuser`, 
		`sys_menu_group`.`syscreatedate`
	)
	VALUES (
		new_id,
		nama_group,
		deskripsi,
		no_order,
		1,
		user_login,
		NOW()
	);
	
ELSEIF param = 'edit' THEN

	UPDATE sys_menu_group
	SET sys_menu_group.nama = nama_group, 
	sys_menu_group.description = deskripsi, 
	sys_menu_group.sysupdateuser = user_login, 
	sys_menu_group.sysupdatedate = NOW()
	WHERE sys_menu_group.id = id_grup;
	
ELSEIF param = 'set_active' THEN

	UPDATE sys_menu_group
	SET sys_menu_group.stat = 1,
	sys_menu_group.sysdeleteuser = user_login, 
	sys_menu_group.sysdeletedate = NOW()
	WHERE sys_menu_group.id = id_grup;
	
	ELSEIF param = 'get_detail' THEN
	
	SELECT sys_menu_group.id, sys_menu_group.nama AS nama_grup, sys_menu_group.description
	FROM sys_menu_group
	WHERE sys_menu_group.id = id_grup;
	
ELSE
	
	UPDATE sys_menu_group
	SET sys_menu_group.stat = 0,
	sys_menu_group.sysdeleteuser = user_login, 
	sys_menu_group.sysdeletedate = NOW()
	WHERE sys_menu_group.id = id_grup;
	
END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_group_reorder
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_group_reorder`;
delimiter ;;
CREATE PROCEDURE `sys_menu_group_reorder`(IN `old_id` INT, IN `old_order` INT, IN `new_id` INT, IN `new_order` INT)
BEGIN

	UPDATE sys_menu_group
	SET order_no = new_order
	WHERE sys_menu_group.id = old_id;
	
	UPDATE sys_menu_group
	SET order_no = old_order
	WHERE sys_menu_group.id = new_id;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_group_select
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_group_select`;
delimiter ;;
CREATE PROCEDURE `sys_menu_group_select`()
BEGIN
	SELECT * 
	FROM sys_menu_group_select
	ORDER BY sys_menu_group_select.order_no ASC;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_insert
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_insert`;
delimiter ;;
CREATE PROCEDURE `sys_menu_insert`(IN `parent` INT, IN `nama_menu` VARCHAR(50), IN `link_menu` VARCHAR(255), IN `no_order` INT, IN `gr_menu` INT, IN `ico_menu` VARCHAR(50), IN `desc_txt` VARCHAR(255), IN `user_login` INT)
BEGIN
	DECLARE
		new_id_menu INT DEFAULT 0;
	DECLARE
		sys_roles_id INT DEFAULT 0;
	DECLARE
		i INT DEFAULT 0;
	DECLARE
		pref_order INT DEFAULT 0;
	SELECT
		COUNT( sys_menu.id ) AS total INTO pref_order 
	FROM
		sys_menu 
	WHERE
		sys_menu.order_no = no_order;
	IF
		pref_order <> 0 THEN
			UPDATE sys_menu 
			SET sys_menu.order_no = sys_menu.order_no + 1 
		WHERE
			sys_menu.order_no > no_order - 1 
			AND sys_menu.group_menu = gr_menu;
		
	END IF;
	INSERT INTO `sys_menu` (
		sys_menu.menu_parent,
		sys_menu.nama,
		sys_menu.link,
		sys_menu.order_no,
		sys_menu.group_menu,
		sys_menu.icon,
		sys_menu.description,
		sys_menu.stat,
		sys_menu.syscreateuser,
		sys_menu.syscreatedate 
	)
	VALUES
		( parent, nama_menu, link_menu, no_order, gr_menu, ico_menu, desc_txt, 1, user_login, NOW() );
	
	SET new_id_menu = LAST_INSERT_ID();
	SELECT
		MAX( id ) INTO sys_roles_id 
	FROM
		sys_roles;
	WHILE
			i < sys_roles_id DO
			INSERT INTO sys_permissions ( role_id, id_menu, v, c, r, u, d, syscreateuser, syscreatedate )
		VALUES
			( i + 1, new_id_menu, 0, 0, 0, 0, 0, user_login, NOW() );
		
		SET i = i + 1;
		
	END WHILE;
	
	UPDATE sys_permissions 
	SET sys_permissions.v = 1,
	sys_permissions.c = 1,
	sys_permissions.r = 1,
	sys_permissions.u = 1,
	sys_permissions.d = 1 
	WHERE
		sys_permissions.id_menu = new_id_menu 
		AND sys_permissions.role_id = 1;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_order
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_order`;
delimiter ;;
CREATE PROCEDURE `sys_menu_order`(IN `old_id` INT, IN `old_order` INT, IN `new_id` INT, IN `new_order` INT)
BEGIN
	
	UPDATE sys_menu
	SET order_no = new_order
	WHERE sys_menu.id = old_id;
	
	UPDATE sys_menu
	SET order_no = old_order
	WHERE sys_menu.id = new_id;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_select
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_select`;
delimiter ;;
CREATE PROCEDURE `sys_menu_select`(IN `user_role` INT)
BEGIN

SELECT * FROM sys_menu_select
WHERE sys_menu_select.stat_menu = 1 
AND sys_menu_select.`view` = 1 
AND sys_menu_select.role_id = user_role
ORDER BY sys_menu_select.group_order ASC,
sys_menu_select.order_no ASC;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_menu_update
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_menu_update`;
delimiter ;;
CREATE PROCEDURE `sys_menu_update`(IN `parent` INT, 
	IN `menu` VARCHAR(50), 
	IN `location` VARCHAR(255), 
	IN `nomor_order` INT, 
	IN `grup` INT, 
	IN `icon_menu` VARCHAR(50), 
	IN `user_login` INT, 
	IN `id_menu` INT, 
	IN `desc_txt` VARCHAR(255), 
	OUT `menu_nama` VARCHAR(50))
BEGIN

SELECT sys_menu.nama INTO menu_nama FROM sys_menu WHERE sys_menu.id = id_menu;

UPDATE sys_menu
SET sys_menu.menu_parent = parent, 
	sys_menu.nama = menu, 
	sys_menu.link = location, 
	sys_menu.order_no = nomor_order, 
	sys_menu.group_menu = grup, 
	sys_menu.icon = icon_menu, 
	sys_menu.sysupdateuser = user_login, 
	sys_menu.sysupdatedate = NOW(),
	sys_menu.description = desc_txt
WHERE sys_menu.id = id_menu;

IF parent IS NULL THEN

	UPDATE sys_menu 
	SET sys_menu.group_menu = grup,
		order_no = grup * 101
	WHERE
		sys_menu.menu_parent = id_menu;

END IF;

SELECT menu_nama;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_mt_country
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_mt_country`;
delimiter ;;
CREATE PROCEDURE `sys_mt_country`(IN `param` VARCHAR(50), IN `country_id` INT, IN `kode_negara` VARCHAR(2), IN `nama_negara` VARCHAR(45), IN `bendera` VARCHAR(50), IN `user_login` INT)
BEGIN
IF param = 'select' THEN
	
	SELECT  mt_country.id AS id_country, mt_country.`code` AS code_country, mt_country.country AS nama_country
	FROM mt_country;
	
ELSE

	UPDATE mt_country
	SET mt_country.stat = 0,
	mt_country.sysdeleteuser = user_login,
	mt_country.sysdeletedate = NOW()
	WHERE mt_country.id = country_id;
	
END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_permision_update
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_permision_update`;
delimiter ;;
CREATE PROCEDURE `sys_permision_update`(IN `id_role` INT, IN `menu_id` INT, IN `lihat` INT, IN `buat` INT, IN `baca` INT, IN `ubah` INT, IN `hapus` INT, IN `user_login` INT)
BEGIN

UPDATE `sys_permissions`
SET 
	sys_permissions.v = lihat, 
	sys_permissions.c = buat, 
	sys_permissions.r = baca, 
	sys_permissions.u = ubah, 
	sys_permissions.d = hapus, 
	sys_permissions.sysupdateuser = user_login,
	sys_permissions.sysupdatedate = NOW()
WHERE
sys_permissions.role_id = id_role AND sys_permissions.id_menu = menu_id;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_permission_select
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_permission_select`;
delimiter ;;
CREATE PROCEDURE `sys_permission_select`(IN `permisi_id` INT,
IN `id_user` INT)
BEGIN 
# id_user 1 adalah super user
IF id_user = 1 THEN

	SELECT 
		`sys_menu_select`.`id_menu`, 
		`sys_menu_select`.`nama_menu`,
		`sys_menu_select`.`group_menu`,
		`sys_menu_select`.`grup_nama`, 
		`sys_menu_select`.`view`, 
		`sys_menu_select`.`create`, 
		`sys_menu_select`.`read`, 
		`sys_menu_select`.`update`, 
		`sys_menu_select`.`delete` 
	FROM 
		sys_menu_select 
	WHERE 
		`sys_menu_select`.`role_id` = permisi_id
	GROUP BY 
		sys_menu_select.id_menu;
	
ELSE
	
	SELECT 
  `sys_menu_select`.`id_menu`, 
  `sys_menu_select`.`nama_menu`,
	`sys_menu_select`.`group_menu`,
  `sys_menu_select`.`grup_nama`, 
  `sys_menu_select`.`view`, 
  `sys_menu_select`.`create`, 
  `sys_menu_select`.`read`, 
  `sys_menu_select`.`update`, 
  `sys_menu_select`.`delete` 
	FROM 
		sys_menu_select 
	WHERE 
		`sys_menu_select`.`role_id` = permisi_id
		AND
		sys_menu_select.`view` = 1
	GROUP BY 
		sys_menu_select.id_menu;
	
END IF;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_roles_insert
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_roles_insert`;
delimiter ;;
CREATE PROCEDURE `sys_roles_insert`(IN `nama` VARCHAR(30), IN `deskripsi` VARCHAR(255), IN `group_parent` INT, IN `user_id` INT)
BEGIN
	DECLARE role_id_new int DEFAULT 0;
	DECLARE id_menu int DEFAULT 0;
	DECLARE i int DEFAULT 0;
INSERT INTO `sys_roles`(
	sys_roles.`name`, 
	sys_roles.description, 
	sys_roles.stat, 
	sys_roles.parent_id,
	sys_roles.syscreateuser, 
	sys_roles.syscreatedate
)
VALUES(
	nama,
	deskripsi,
	1,
	group_parent,
	user_id,
	NOW()
);
SET role_id_new = LAST_INSERT_ID();

SELECT MAX(id) INTO id_menu FROM sys_menu;
WHILE i < id_menu  DO

	INSERT INTO sys_permissions (
		role_id,id_menu,v,c,r,u,d,syscreateuser,syscreatedate
	)
	VALUES(
		role_id_new,
		i+1,
		0,0,0,0,0,
		user_id,
		NOW()
	);
	SET i = i + 1;
END WHILE;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_roles_select
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_roles_select`;
delimiter ;;
CREATE PROCEDURE `sys_roles_select`(IN `grup_id` INT)
BEGIN 

IF grup_id = 0 THEN 

	SELECT 
		* 
	FROM 
		sys_roles_select 
	WHERE 
		status_grup = 1
		AND sys_roles_select.id_grup <> 1;#lanjutin disini!
		
ELSEIF grup_id = 1 THEN

	SELECT 
		* 
	FROM 
		sys_roles_select 
	WHERE 
		status_grup = 1;
		
ELSE

	SELECT 
		* 
	FROM 
		sys_roles_select 
	WHERE 
		id_grup = grup_id 
		AND status_grup = 1;
		
END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_roles_update
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_roles_update`;
delimiter ;;
CREATE PROCEDURE `sys_roles_update`(IN `id_grup` INT, IN `nama_grup` VARCHAR(30), IN `des_grup` VARCHAR(255), IN `user_login` INT, IN `id_parent` INT)
BEGIN
UPDATE sys_roles 
SET
	sys_roles.`name` = nama_grup, 
	sys_roles.description = des_grup, 
    sys_roles.parent_id = id_parent, 
	sys_roles.sysupdateuser = user_login, 
	sys_roles.sysupdatedate = NOW()
WHERE sys_roles.id = id_grup;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_users_insert
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_users_insert`;
delimiter ;;
CREATE PROCEDURE `sys_users_insert`(IN `user_name` VARCHAR(100), IN `pass_word` VARCHAR(100), IN `id_role` INT, IN `avatar` VARCHAR(100), IN `status_active` INT, IN `user_login` INT)
BEGIN

IF pass_word = 'update' THEN

	UPDATE sys_users
	SET sys_users.uname = user_name,
	sys_users.role_id = id_role,
	sys_users.pict = avatar,
	sys_users.sysupdateuser = user_login,
	sys_users.sysupdatedate = NOW()
	WHERE sys_users.id = status_active;
	
ELSE
	
	INSERT INTO `sys_users`(
	sys_users.uname, 
	sys_users.pwd, 
	sys_users.role_id, 
	sys_users.pict, 
	sys_users.stat, 
	sys_users.syscreateuser,
	sys_users.syscreatedate
)
	VALUES(
	user_name,
	pass_word,
	id_role,
	avatar,
	status_active,
	user_login,
	NOW()
);

INSERT INTO `dt_users`(
dt_users.sys_user_id,
dt_users.stat,
dt_users.syscreatedate,
dt_users.syscreateuser
)
VALUES(
LAST_INSERT_ID(),
1,
NOW(),
user_login
);

END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_users_select
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_users_select`;
delimiter ;;
CREATE PROCEDURE `sys_users_select`(IN `param` VARCHAR(50), IN `user_id` INT, IN `panjang` INT, IN `mulai` INT)
BEGIN

IF param = 'get_detail' THEN

	SELECT sys_users_select.id_user, 
								sys_users_select.uname, 
								sys_users_select.role_id, 
								sys_users_select.pict
	FROM sys_users_select
	WHERE sys_users_select.id_user = user_id;
	
	ELSEIF param = 'count_all' THEN
	
	SELECT COUNT(sys_users.id) AS tot FROM sys_users;
	
ELSE

	SELECT * 
	FROM sys_users_select
	WHERE sys_users_select.id_user = user_id
	OR sys_users_select.parent_id = user_id;
	
END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sys_users_stat
-- ----------------------------
DROP PROCEDURE IF EXISTS `sys_users_stat`;
delimiter ;;
CREATE PROCEDURE `sys_users_stat`(IN `id_user` INT, IN `user_login` INT, IN `stat_active` INT)
BEGIN
UPDATE sys_users
SET sys_users.stat = stat_active, 
	sys_users.sysdeleteuser = user_login, 
	sys_users.sysdeletedate = NOW()
WHERE sys_users.id = id_user;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
