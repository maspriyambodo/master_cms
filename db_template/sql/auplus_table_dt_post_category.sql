
-- --------------------------------------------------------

--
-- Table structure for table `dt_post_category`
--

DROP TABLE IF EXISTS `dt_post_category`;
CREATE TABLE `dt_post_category` (
  `id` int NOT NULL,
  `category` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `descriptions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `stat` int DEFAULT NULL COMMENT '1. aktif\r\n2. non-aktif',
  `syscreateuser` int DEFAULT NULL COMMENT 'di dapat dari session login user',
  `syscreatedate` datetime DEFAULT NULL,
  `sysupdateuser` int DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysupdatedate` datetime DEFAULT NULL,
  `sysdeleteuser` int DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysdeletedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
