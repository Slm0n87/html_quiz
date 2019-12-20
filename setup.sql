--
-- Table structure for table `rechner`
--

CREATE TABLE IF NOT EXISTS `rechner` (
  `pcnr` varchar(15) NOT NULL,
  `step` int(3) NOT NULL,
  `cheater` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`pcnr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
