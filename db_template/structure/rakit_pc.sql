/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : rakit_pc

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 26/02/2024 04:22:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dt_casing
-- ----------------------------
DROP TABLE IF EXISTS `dt_casing`;
CREATE TABLE `dt_casing`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `form_factor` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 854 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_cooler
-- ----------------------------
DROP TABLE IF EXISTS `dt_cooler`;
CREATE TABLE `dt_cooler`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 678 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_detail_product
-- ----------------------------
DROP TABLE IF EXISTS `dt_detail_product`;
CREATE TABLE `dt_detail_product`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_category` int NULL DEFAULT NULL COMMENT 'relasi dengan table mt_category',
  `id_product` int NULL DEFAULT NULL COMMENT 'relasi dengan table data product',
  `detail_specs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `stat` int NULL DEFAULT NULL COMMENT '0. deleted 1. aktif',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_mobo
-- ----------------------------
DROP TABLE IF EXISTS `dt_mobo`;
CREATE TABLE `dt_mobo`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_procie_category` int NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `socket` int NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 427 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_monitor
-- ----------------------------
DROP TABLE IF EXISTS `dt_monitor`;
CREATE TABLE `dt_monitor`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 664 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_pict_product
-- ----------------------------
DROP TABLE IF EXISTS `dt_pict_product`;
CREATE TABLE `dt_pict_product`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_detail_product` int NULL DEFAULT NULL COMMENT 'relasi dengan table dt_detail_product',
  `foto_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `stat` int NULL DEFAULT NULL COMMENT '0. deleted 1. aktif',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_procie
-- ----------------------------
DROP TABLE IF EXISTS `dt_procie`;
CREATE TABLE `dt_procie`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_procie_category` int NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_core` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `socket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat` int NULL DEFAULT NULL COMMENT '0. not ready stok, 1. ready stok',
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 186 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_psu
-- ----------------------------
DROP TABLE IF EXISTS `dt_psu`;
CREATE TABLE `dt_psu`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `daya` int NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 464 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_ram
-- ----------------------------
DROP TABLE IF EXISTS `dt_ram`;
CREATE TABLE `dt_ram`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ddr_type` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `size_ram` int NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 507 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_ssd
-- ----------------------------
DROP TABLE IF EXISTS `dt_ssd`;
CREATE TABLE `dt_ssd`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ssd_type` int NULL DEFAULT NULL COMMENT '1. internal 2. eksternal',
  `size_ssd` int NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 389 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dt_vga
-- ----------------------------
DROP TABLE IF EXISTS `dt_vga`;
CREATE TABLE `dt_vga`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pcode` bigint NULL DEFAULT NULL,
  `sku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_modal` bigint NULL DEFAULT NULL,
  `harga_jual` bigint NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 427 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_category
-- ----------------------------
DROP TABLE IF EXISTS `mt_category`;
CREATE TABLE `mt_category`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for mt_procie_category
-- ----------------------------
DROP TABLE IF EXISTS `mt_procie_category`;
CREATE TABLE `mt_procie_category`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stat` int NULL DEFAULT NULL,
  `syscreateuser` int NULL DEFAULT NULL,
  `syscreatedate` datetime NULL DEFAULT NULL,
  `sysupdateuser` int NULL DEFAULT NULL,
  `sysupdatedate` datetime NULL DEFAULT NULL,
  `sysdeleteuser` int NULL DEFAULT NULL,
  `sysdeletedate` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
