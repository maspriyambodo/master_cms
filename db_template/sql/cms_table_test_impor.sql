
-- --------------------------------------------------------

--
-- Table structure for table `test_impor`
--

DROP TABLE IF EXISTS `test_impor`;
CREATE TABLE `test_impor` (
  `no` int DEFAULT NULL,
  `nama` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama2` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_impor`
--

INSERT INTO `test_impor` (`no`, `nama`, `nama2`) VALUES
(1, 'parentmenu default systems', 'Dashboard'),
(2, 'parent', 'Master Country'),
(3, 'parent', 'Master Wilayah'),
(4, 'Master Wilayah', 'Provinsi'),
(5, 'Master Wilayah', 'Kabupaten'),
(6, 'Master Wilayah', 'Kecamatan'),
(7, 'Master Wilayah', 'Kelurahan'),
(8, 'parentmenu untuk aplikasi penyimpanan password', 'Password Management'),
(9, 'parent', 'Menu Management'),
(10, 'parent', 'Menu Group'),
(11, 'parent', 'Systems'),
(12, 'parent', 'User Management'),
(13, 'parent', 'Permissions'),
(14, 'parent', 'Blocked Account');
