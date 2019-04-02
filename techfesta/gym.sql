
CREATE DATABASE gym;
use gym;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`Name`, `Pass`, `Email`) VALUES
('admin', 'admin', ''),
('developer', 'developer', ''),
('', '', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_page`
--

DROP TABLE IF EXISTS `admin_page`;
CREATE TABLE IF NOT EXISTS `admin_page` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Page` varchar(50) NOT NULL,
  `Link` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_page`
--

INSERT INTO `admin_page` (`id`, `Page`, `Link`) VALUES
(1, 'table_pack1', '/techfesta/admin/table_pack1'),
(2, 'table_pack2', '/techfesta/admin/table_pack2'),
(3, 'table_pack3', '/techfesta/admin/table_pack3'),
(5, 'user_comments', '/techfesta/admin/user_comments'),
(6, 'pages_recover_password', '/techfesta/admin/pages_recover_password'),
(8, 'new_page', '/techfesta/admin/new_page'),
(9, 'admin_pages', '/techfesta/admin/admin_pages');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `Id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `Date` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Id`, `Username`, `Email`, `Comment`, `Date`) VALUES
(1, 'sayak naskar', 'sayaknaskar@gmail.com', 'ggggggggggggggggggggg', '2019-03-21 09:12:10'),
(2, 'helolo', 'hel@hel.hel', 'skfdnzldhgiodzhfgidzgfh', '2019-03-21 09:36:36'),
(3, 'som', 'som@som.som', 'sakanfsjdfjuhfs\r\n', '2019-03-21 09:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `page` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `page`) VALUES
(1, 'Home', '#home'),
(2, 'About', '#overview'),
(3, 'Program', '#price'),
(4, 'Blog', '#blog'),
(5, 'Charities', '#trainer'),
(6, 'Testimonials', '#testimonials'),
(7, 'Philosophy', '#philosophy');

-- --------------------------------------------------------

--
-- Table structure for table `normal_page`
--

DROP TABLE IF EXISTS `normal_page`;
CREATE TABLE IF NOT EXISTS `normal_page` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Page` varchar(50) NOT NULL,
  `Link` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normal_page`
--

INSERT INTO `normal_page` (`id`, `Page`, `Link`) VALUES
(1, 'hello', '/techfesta/hello'),
(2, 'hello', '/techfesta/admin/hello'),
(3, 'testpurpose', '/techfesta/admin/testpupose');

-- --------------------------------------------------------

--
-- Table structure for table `package_1`
--

DROP TABLE IF EXISTS `package_1`;
CREATE TABLE IF NOT EXISTS `package_1` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_1`
--

INSERT INTO `package_1` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'sayak naskar', 'sayaknaskar@gmail.com', '1234'),
(2, 'hello', 'hello@helo.vo', '2222'),
(3, 'hello', 'hel@hel.com', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `package_2`
--

DROP TABLE IF EXISTS `package_2`;
CREATE TABLE IF NOT EXISTS `package_2` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_2`
--

INSERT INTO `package_2` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'sayak naskar', 'sayaknaskar@gmail.com', '1234'),
(2, 'sayak naskar', 'sayaknaskar@gmail.com', ''),
(3, 'hello', 'hello@hel.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `package_3`
--

DROP TABLE IF EXISTS `package_3`;
CREATE TABLE IF NOT EXISTS `package_3` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_3`
--

INSERT INTO `package_3` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'sayak naskar', 'sayaknaskar@gmail.com', '12341234');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`Id`, `Name`, `Email`) VALUES
(1, 'hello', 'sayaknaskar@gmail.com'),
(2, 'hola', 'hola@ak.ah'),
(3, 'hello', 'he@he.com'),
(4, 'sdf', 'sdf@gfh.vo'),
(5, 'jhgj', 'gffh@jgd.csj'),
(6, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
