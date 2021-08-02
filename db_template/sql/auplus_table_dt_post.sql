
-- --------------------------------------------------------

--
-- Table structure for table `dt_post`
--

DROP TABLE IF EXISTS `dt_post`;
CREATE TABLE `dt_post` (
  `id` int NOT NULL,
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `post_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `post_status` int DEFAULT NULL COMMENT '1. aktif\r\n2. delete\r\n3. draft',
  `comment_status` int DEFAULT NULL COMMENT '1. open\r\n2. closed',
  `post_category` int DEFAULT NULL COMMENT 'relasi dengan tb_category',
  `post_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `viewers` int DEFAULT NULL,
  `syscreateuser` int DEFAULT NULL COMMENT 'di dapat dari session login user',
  `syscreatedate` datetime DEFAULT NULL,
  `sysupdateuser` int DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysupdatedate` datetime DEFAULT NULL,
  `sysdeleteuser` int DEFAULT NULL COMMENT 'di dapat dari session login user',
  `sysdeletedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Truncate table before insert `dt_post`
--

TRUNCATE TABLE `dt_post`;