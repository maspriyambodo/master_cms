
-- --------------------------------------------------------

--
-- Table structure for table `dt_post_comment`
--

DROP TABLE IF EXISTS `dt_post_comment`;
CREATE TABLE `dt_post_comment` (
  `id` int NOT NULL,
  `post_id` int DEFAULT NULL COMMENT 'relasi dengan table post',
  `comment_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `comment_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `comment_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `comment_date` datetime DEFAULT NULL,
  `comment_parent` int DEFAULT '0',
  `ip_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `stat` int DEFAULT NULL COMMENT '0. delete\r\n1. aktif\r\n2. edit',
  `syscreateuser` int DEFAULT NULL,
  `syscreatedate` datetime DEFAULT NULL,
  `sysupdateuser` int DEFAULT NULL COMMENT 'user approved comment',
  `sysupdatedate` datetime DEFAULT NULL COMMENT 'date approved comment',
  `sysdeleteuser` int DEFAULT NULL,
  `sysdeletedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
