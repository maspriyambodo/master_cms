
-- --------------------------------------------------------

--
-- Table structure for table `compro_option`
--

DROP TABLE IF EXISTS `compro_option`;
CREATE TABLE `compro_option` (
  `id` int NOT NULL,
  `option_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `option_value` longtext COLLATE utf8mb4_general_ci,
  `description` longtext COLLATE utf8mb4_general_ci,
  `stat` int DEFAULT '1',
  `syscreateuser` int DEFAULT NULL,
  `syscreatedate` datetime DEFAULT NULL,
  `sysupdateuser` int DEFAULT NULL,
  `sysupdatedate` datetime DEFAULT NULL,
  `sysdeleteuser` int DEFAULT NULL,
  `sysdeletedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `compro_option`
--

TRUNCATE TABLE `compro_option`;
--
-- Dumping data for table `compro_option`
--

INSERT INTO `compro_option` (`id`, `option_name`, `option_value`, `description`, `stat`, `syscreateuser`, `syscreatedate`, `sysupdateuser`, `sysupdatedate`, `sysdeleteuser`, `sysdeletedate`) VALUES
(1, 'slider text', 'lorem ipsum</br>giohp', 'asiodj', 1, 1, '2021-07-23 16:02:59', 1, '2021-08-02 12:18:32', 1, '2021-08-02 12:04:42'),
(2, 'phone company', '+62 813-8237-6140', 'telepon perusahaan', 1, 1, '2021-07-23 18:34:05', NULL, NULL, NULL, NULL),
(3, 'sub slider', 'We work with a focus on creativity, combining design and results.', 'text dibawah slider text ', 1, 1, '2021-07-23 20:16:09', NULL, NULL, NULL, NULL),
(4, 'mail company', 'info@auplus.com', 'email untuk company profile', 1, 1, '2021-07-23 21:31:00', NULL, NULL, NULL, NULL),
(5, 'alamat company', 'Jalan Kavling PGRI XIII No. 133', 'alamat company profile', 1, 1, '2021-07-23 22:25:18', NULL, NULL, NULL, NULL),
(6, 'tagline company', 'Authentic and innovative.<br>\r\nBuilt to the smallest detail<br>\r\n with a focus on usability<br>\r\nand performance.', '-', 1, 1, '2021-07-23 22:30:19', 1, '2021-07-23 22:31:27', NULL, NULL);
