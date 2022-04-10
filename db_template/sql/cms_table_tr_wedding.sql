
-- --------------------------------------------------------

--
-- Table structure for table `tr_wedding`
--

DROP TABLE IF EXISTS `tr_wedding`;
CREATE TABLE `tr_wedding` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `attd` int DEFAULT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `syscreatedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tr_wedding`
--

INSERT INTO `tr_wedding` (`id`, `nama`, `hubungan`, `email`, `tlp`, `attd`, `pesan`, `syscreatedate`) VALUES
(1, 'priyambodo', 'kemenag thamrin', 'maspriyambodo@gmail.com', '081282309100', 1, 'Selamat atas pernikahannya Romeo & Juliet! Happy to see your dream come true, guys!', NULL);
