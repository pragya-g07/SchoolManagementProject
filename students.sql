CREATE TABLE `students` (
  `S_no.` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `class` int(20) NOT NULL,
  `previous_class` varchar(20) NOT NULL,
  `fphone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`S_no.`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4