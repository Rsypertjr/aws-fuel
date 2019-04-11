/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table fuel_archives
# ------------------------------------------------------------

CREATE TABLE `fuel_archives` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(10) unsigned NOT NULL,
  `table_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  `version_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `archived_user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table fuel_blocks
# ------------------------------------------------------------

CREATE TABLE `fuel_blocks` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view` text COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'english',
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `date_added` datetime DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dump of table fuel_categories
# ------------------------------------------------------------

CREATE TABLE `fuel_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `slug` varchar(100) NOT NULL DEFAULT '',
  `context` varchar(100) NOT NULL DEFAULT '',
  `precedence` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `published` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dump of table fuel_logs
# ------------------------------------------------------------

CREATE TABLE `fuel_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table fuel_navigation
# ------------------------------------------------------------

CREATE TABLE `fuel_navigation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The part of the path after the domain name that you want the link to go to (e.g. comany/about_us)',
  `group_id` int(5) unsigned NOT NULL DEFAULT '1',
  `nav_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The nav key is a friendly ID that you can use for setting the selected state. If left blank, a default value will be set for you.',
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name you want to appear in the menu',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Used for creating menu hierarchies. No value means it is a root level menu item',
  `precedence` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The higher the number, the greater the precedence and farther up the list the navigational element will appear',
  `attributes` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Extra attributes that can be used for navigation implementation',
  `selected` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The pattern to match for the active state. Most likely you leave this field blank',
  `hidden` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'A hidden value can be used in rendering the menu. In some areas, the menu item may not want to be displayed',
  `language` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'english',
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'Determines whether the item is displayed or not',
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id_nav_key_language` (`group_id`,`nav_key`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table fuel_navigation_groups
# ------------------------------------------------------------

CREATE TABLE `fuel_navigation_groups` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `fuel_navigation_groups` (`id`, `name`, `published`)
VALUES
  (1, 'main', 'yes');



# Dump of table fuel_page_variables
# ------------------------------------------------------------

CREATE TABLE `fuel_page_variables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('string','int','boolean','array') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'string',
  `language` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'english',
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_id` (`page_id`,`name`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table fuel_pages
# ------------------------------------------------------------

CREATE TABLE `fuel_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Add the part of the url after the root of your site (usually after the domain name). For the homepage, just put the word ''home''',
  `layout` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the template to associate with this page',
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'A ''yes'' value will display the page and an ''no'' value will give a 404 error message',
  `cache` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'Cache controls whether the page will pull from the database or from a saved file which is more effeicent. If a page has content that is dynamic, it''s best to set cache to ''no''',
  `date_added` datetime DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modified_by` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `location` (`location`),
  KEY `layout` (`layout`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table fuel_permissions
# ------------------------------------------------------------

CREATE TABLE `fuel_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'In most cases, this should be the name of the module (e.g. news)',
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `fuel_permissions` WRITE;
/*!40000 ALTER TABLE `fuel_permissions` DISABLE KEYS */;

INSERT INTO `fuel_permissions` (`id`, `description`, `name`, `active`)
VALUES
  (NULL,'Pages','pages','yes'),
  (NULL,'Pages: Create','pages/create','yes'),
  (NULL,'Pages: Edit','pages/edit','yes'),
  (NULL,'Pages: Publish','pages/publish','yes'),
  (NULL,'Pages: Delete','pages/delete','yes'),
  (NULL,'Blocks','blocks','yes'),
  (NULL,'Blocks: Create','blocks/create','yes'),
  (NULL,'Blocks: Edit','blocks/edit','yes'),
  (NULL,'Blocks: Publish','blocks/publish','yes'),
  (NULL,'Blocks: Delete','blocks/delete','yes'),
  (NULL,'Navigation','navigation','yes'),
  (NULL,'Navigation: Create','navigation/create','yes'),
  (NULL,'Navigation: Edit','navigation/edit','yes'),
  (NULL,'Navigation: Publish','navigation/publish','yes'),
  (NULL,'Navigation: Delete','navigation/delete','yes'),
  (NULL,'Categories','categories','yes'),
  (NULL,'Categories: Create','categories/create','yes'),
  (NULL,'Categories: Edit','categories/edit','yes'),
  (NULL,'Categories: Publish','categories/publish','yes'),
  (NULL,'Categories: Delete','categories/delete','yes'),
  (NULL,'Tags','tags','yes'),
  (NULL,'Tags: Create','tags/create','yes'),
  (NULL,'Tags: Edit','tags/edit','yes'),
  (NULL,'Tags: Publish','tags/publish','yes'),
  (NULL,'Tags: Delete','tags/delete','yes'),
  (NULL,'Site Variables','sitevariables','yes'),
  (NULL,'Assets','assets','yes'),
  (NULL,'Site Documentation','site_docs','yes'),
  (NULL,'Users','users','yes'),
  (NULL,'Permissions','permissions','yes'),
  (NULL,'Cache','cache','yes'),
  (NULL,'Logs','logs','yes'),
  (NULL,'Settings','settings','yes'),
  (NULL,'Generate Code','generate','yes');
  

/*!40000 ALTER TABLE `fuel_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fuel_relationships
# ------------------------------------------------------------

CREATE TABLE `fuel_relationships` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `candidate_table` varchar(100) DEFAULT '',
  `candidate_key` int(11) NOT NULL,
  `foreign_table` varchar(100) DEFAULT NULL,
  `foreign_key` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table fuel_settings
# ------------------------------------------------------------

CREATE TABLE `fuel_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(50) NOT NULL DEFAULT '',
  `key` varchar(50) NOT NULL DEFAULT '',
  `value` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `module` (`module`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table fuel_site_variables
# ------------------------------------------------------------

CREATE TABLE `fuel_site_variables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'leave blank if you want the variable to be available to all pages',
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dump of table fuel_tags
# ------------------------------------------------------------

CREATE TABLE `fuel_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `precedence` int(11) NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Dump of table fuel_users
# ------------------------------------------------------------

CREATE TABLE `fuel_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `reset_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `super_admin` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `active` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `fuel_users` (`id`, `user_name`, `password`, `email`, `first_name`, `last_name`, `language`, `reset_key`, `salt`, `super_admin`, `active`)
VALUES
  (1, 'admin', 'f4c99eae874755b97610d650be565f1ac42019d1', 'info@getfuelcms.com', 'Admin', 'test', 'english', '', '429c6e14342dd7a63c510007a1858c26', 'yes', 'yes');








--
-- Table structure for table `headMenuOpts`
--

CREATE TABLE `headMenuOpts` (
  `id` int(10) UNSIGNED NOT NULL,
  `bannerTitle` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'if left blank, one will automatically be generated for you',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `menuImage` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `precedence` int(11) NOT NULL DEFAULT 0,
  `publish_date` datetime DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_added` datetime NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `menuTag` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuDescriptionHeight` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuFontSize` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageHeader` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `btnHTML` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `menuHTML` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `descripHeight` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuChoice` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imageHeight` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `imageWidth` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `imageStyle` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `url2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `headHeight` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extraFunction` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `llvImages` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `headMenuOpts`
--

INSERT INTO `headMenuOpts` (`id`, `bannerTitle`, `slug`, `content`, `excerpt`, `url1`, `menuImage`, `category_id`, `precedence`, `publish_date`, `last_updated`, `date_added`, `published`, `menuTag`, `menuDescriptionHeight`, `menuFontSize`, `imageHeader`, `btnHTML`, `menuHTML`, `descripHeight`, `menuChoice`, `imageHeight`, `imageWidth`, `imageStyle`, `url2`, `headHeight`, `extraFunction`, `llvImages`) VALUES
(1, 'Dynamic HTML Resume', 'resume', 'Dynamic HTML Resume', '', 'dynResume', 'jobdone.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:39:21', '2017-07-31 20:52:11', 'yes', 'div.aLi:contains(\'Dynamic HTML Resume\')', '15em', '1.0em', '<p><center>Dynamic Resume</center></p>', 'div#btn5.bCon', '<p class=\\\"descHdr\\\">Dynamic HTML Resume w/Downloads</p><p>Resume for Richard L. Sypert Jr. in Html and PDF formats.  The HTML Resume Format Only Uses CSS and no JavaScript!</p>', '35em', '', '160', '187', 'position:relative;width:90%;height:75%;margin:1.0em 5%', '', '', '', ''),
(2, 'Technical White Paper', 'whitepaper', 'White Paper Technical Writing', '', 'whitePaper', 'explainTechnology.jpg', 0, 0, '2017-08-08 00:00:00', '2017-10-11 17:28:28', '2017-08-01 05:31:50', 'yes', 'div.aLi:contains(\'White Paper\')', '50%', '1.0em', '<h1>White Paper<br>Technology Explanation</h1>', 'div#btn4.bCon', '<p class=\\\"descHdr\\\">White Paper</p><p>This is a technical specification called a White Paper which explains the technology behind a companies product.  In this case an Electrical Motor Energy Efficiency Device.</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:1em 5%', '', '', '', ''),
(3, 'Engineering Process Document', 'engSpec', 'Engineering Specification Technical Writing', '', 'engSpec', 'engProcessSpec.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:08:17', '2017-08-01 06:16:59', 'yes', 'div.aLi:contains(\'Engineering Specification\')', '50%', '1.0em', '<p><center>Engineering Process</center></p><p><center>Specification</center></p>', 'div#btn4.bCon', '<p class=\\\"descHdr\\\">Engineering Specification</p><p>This is a technical specification for the Clark County Land Development Approval process.  I authored it as an Environmental Health Engineer for Southern Nevada Health District.</p>', '39em', '', '200', '175', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(4, 'Software Technical Specification Sample', 'codetech', 'Code Developement Specification Technical Writing', '', 'softwareTW', 'softwareTechWriting.gif', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:25:39', '2017-08-01 06:22:17', 'yes', 'div.aLi:contains(\'Code Development Specification\')', '50%', '1.0em', '<h1>Software Technical</br>Specification</h1>', 'div#btn4.bCon', '<p class=\\\"descHdr\\\">Code Development Specification</p><p>This is a technical specification for guidance in developing Object Oriented Code.  It was written as a HTML document.</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(5, 'Grainger ABCDE Maintenance Manual', 'GraingerABCDE', 'Grainger ABCDE Series B Manual', '', 'graingerABCDE', 'technicalwritingimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:13:36', '2017-08-01 06:28:08', 'yes', '#twLi1 #twUl2', '50%', '1.0em', '<h1>Technical Manuals</h1>', 'div#btn4.bCon', '<p class=\\\"descHdr\\\">Grainger ABCDE Series B</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it using Adobe InDesign according to the customers style rules</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(6, 'Grainger CDE Maintenance Manual', 'GraingerCDE', 'Grainger CDE Manual', '', 'graingerCDE', 'technicalwritingimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:14:13', '2017-08-01 06:59:42', 'yes', '#twLi1 #twUl3', '50%', '1.0em', '<h1>Technical Manuals</h1>', 'div#btn4.bCon', '<p class=\\\"descHdr\\\">Grainger CDE</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a  Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it in Adobe InDesign according to the customer\\\'s style rules</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(7, 'MEC Product Maintenance Manual', 'mecProductManual', 'MEC Product Manual VT 1.6', '', 'mecPManual', 'technicalwritingimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:18:43', '2017-08-01 07:05:10', 'yes', '#twUl4', '50%', '1.0em', '<h1>Technical Manuals</h1>', 'div#btn4.bCon', '<p class=\\\"descHdr\\\">MEC Product Manual VT 1.6</p><p>This is a Product Manual for a Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it in Adobe InDesign according to the customer\\\'s style rules</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(8, 'Technical Maintenance Manuals', 'techWritingHeader', 'Product and Maintenance Manuals Header', '', '', 'technicalwritingimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:27:20', '2017-08-01 12:08:58', 'yes', '#twLi1 span', '50%', '1.0em', '<h1>Technical Manuals</h1>', 'div#btn4.bCon', '<p class =\\\"descHdr\\\">Product and Maintenance Manuals</p><p>Below are links to new product manuals for Motor Efficiency Controller (MEC) devices.  They were produced primarily with Adobe InDesign.</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(9, 'Google Code Storage', 'codeStore', 'Google Code Repository', '', 'https://drive.google.com/file/d/0Bw4sGq8fpAAnSDhMU3NBNTJSS1k/view', 'codestorageimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:12:26', '2017-08-01 12:15:02', 'yes', 'div.aLi:contains(\'Code Repository\')', '50%', '1.0em', '<h1>Code Storage</h1>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Code Repository</p><p>Link to Repository of Code I have written.  See the Git Repository link for the code of this site done within the CodeIgniter MVC Framework.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:1em 5%', '', '', '', ''),
(10, 'Git Code Repository', 'gitRepo', 'GIT Code Repository', '', 'https://bitbucket.org/Rsypertjr/profile/repositories?visibility[9] =all', 'codestorageimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:11:55', '2017-08-01 12:29:15', 'yes', 'div.aLi:contains(\'GIT Repository\')', '50%', '1.0em', '<p><center>Code Storage</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">GIT Repository</p><p>Link to GIT code repository provided thru BitBucket.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(11, 'Wordpress Portfolio Version', 'wpPortfolio', 'WordPress Work Portfolio', '', 'https://rlsworks.wordpress.com', 'wordpressimage.jpg', 0, 0, '2017-08-08 00:00:00', '2017-10-11 17:30:26', '2017-08-01 12:35:11', 'yes', 'div.aLi:contains(\'WordPress\')', '50%', '1.0em', '<h1>WordPress Site</br>Development</h1>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">WordPress Work Portfolio</p><p>Link to a WordPress version of My work portfolio</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '30em', '', ''),
(12, 'Othello Game', 'othello', 'Play Othello Game App', '', 'othello', 'othellogameimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:19:50', '2017-08-01 12:40:17', 'yes', 'div#sdLi10', '50%', '1.0em', '<p><center>A Little</center></p><p><center>Game Coding</center></p>', 'div#btn3.bCon', '<p class =\\\"descHdr\\\">Play Othello Game</p><p>This is an adaptation of the Classic Othello game where one player competes with the Computer.  Two Player Play could be implemented, as well as, making levels of difficulty for game play.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(13, 'Angular2 JavaScript with Redux', 'angular2a', 'Angular2 JavaScript App', '', 'https://young-wildwood-41737.herokuapp.com', 'myFace.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:36:10', '2017-08-01 12:54:11', 'yes', 'div#sdLi15', '50%', '1.0em', '<p><center>Angular2/Redux</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Angular2 JavaScript with Redux State Container</p><p>Angular2 JavaScript with @ngrx Redux Store Container which gives centralized, immutable state management.</p><p xss=removed>Click Menu Tab to See App, or Click Tabs in this description to See Code.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:1.0em 5%', '', '35em', 'angular2', ''),
(14, 'Mobile Web Portfolio', 'mobile', 'Mobile Web Portfolio App', '', 'mobile', 'mobiledevelopmentimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:20:42', '2017-08-01 13:06:44', 'yes', 'div.aLi:contains(\'Mobile Web Portfolio\')', '50%', '1.0em', '<p><center>Mobile Web</center></p><p><center>Development</center></p>', 'div#btn3.bCon', '<p class =\\\"descHdr\\\">Mobile Web Portfolio</p><p>Link to a Mobile version of My work portfolio. I developed it using JQuery Mobile and it should run on Android devices at:</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '30em', '', ''),
(15, 'Othello Game with Ajax', 'othelloAjax', 'Play Othello with AJAX App', '', 'othelloAjax', 'othellogameimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:21:28', '2017-08-01 13:48:49', 'yes', 'div#sdLi11', '50%', '1.0em', '<p><center>A Little</center></p><p><center>Game Coding</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Play Othello Game</p><p>Play the Othello Game using AJAX technology which will eliminate Page Reloads.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(16, 'Caribbean Food Catering', 'caribCater', 'Vegas Caribbean Catering - in Development App', '', 'http://rlsworks.com/wordpress/vcc', 'wordpressimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:06:13', '2017-08-01 13:54:25', 'yes', 'div.aLi:contains(\'Vegas Caribbean\')', '50%', '1.0em', '<p><center>WordPress Site</center></p><p><center>Development</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Vegas Caribbean Catering - in Development</p><p>A Simple WordPress skeleton site for a friends Catering business. The Woo Commerce Plug-in could be used for online ordering and payment transactions, but the client wants it kept simple.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '15em', '', ''),
(17, 'Caribbean Food Store', 'caribStore', 'Caribbean Food Store - in Development App', '', 'http://rlsworks.com/cfs/wordpress', 'wordpressimage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:32:23', '2017-08-01 14:21:36', 'yes', 'div.aLi:contains(\'Caribbean Food Store\')', '50%', '1.0em', '<p><center>WordPress Site</center></p><p><center>Development</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Caribbean Food Store - in Development</p><p>A Sample WordPress site for a friends Caribbean Food Catering. The Woo Commerce Plug-in is utilized ordering and payment transactions.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '15em', '', ''),
(18, 'Human Biology Organ Analyzer 1', 'orominer', 'Human Organ System Analyzer 1', '', 'orominer1', 'dataanalysis.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:15:54', '2017-08-01 14:26:11', 'yes', 'div.aLi:contains(\'Human Organ System Analyzer 1\')', '50%', '1.0em', '<p><center>Scientific Data</center></p><p><center>Analysis Software</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Human Organ System Analyzer 1</p><p>The Orominer program shows a hierarchical organization of the human body constitution. Its top level is Organ Systems. <p>It uses JavaScript, JQuery for event synchronization between hierarchical display and graphic display, as well as, dynamic generation of SVG graphical elements based on DOM HTML elements.</p>MySQL Database information is converted into XML format using PHP for up front access by the code for generation of Hierachical Display.  Unfortunately ONLY THE First 3 NODES Of DATA was developed at Project Completion.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(19, 'Human Biology Organ Analyzer 2', 'oroHist', 'Human Organ System Analyzer 2', '', 'orominer2', 'dataanalysis.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:15:38', '2017-08-01 14:32:50', 'yes', 'div.aLi:contains(\'Human Organ System Analyzer 2\')', '50%', '1.0em', '<p><center>Scientific Data</center></p><p><center>Analysis Software</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Human Organ System Analyzer 2</p><p>This orominer program contains Histological Data within the Hierarchical Organization of Human Body makeup.  Histological Data is information about Human Organs and their tissues and cells.  This application uses JavaScript Objects to store active data requests from which graphics is generated.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(20, 'Ruby On Rails Training', 'rubyRails', 'Ruby On Rails Training App', '', 'https://obscure-dawn-69167.herokuapp.com/', 'rubyRailsImage.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:24:14', '2017-08-01 14:40:36', 'yes', 'div.aLi:contains(\'Ruby On Rails -- Training\')', '50%', '1.0em', '<p><center>Ruby On Rails</center></p><p><center>Development</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Ruby on Rails -- Training</p><p>I am engaging in self-directed study of Ruby-On-Rails, which involves MVC application development based on REST architecture.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(21, 'Laravel MVC Applications', 'laravelMVC', 'Laravel MVC Apps', '', 'https://protected-dawn-70064.herokuapp.com', 'laravelMVC.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:35:14', '2017-08-01 14:48:01', 'yes', 'div.aLi:contains(\'Laravel MVC\')', '50%', '1.0em', '', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Laravel MVC -- Training</p><p>I was asked to complete Laravel MVC programs in application for a jobs. I  have recently learned the following technologies:  Laravel MVC, Twitter Bootstrap, Active Campaign API, Facebook and GitHub authentication, Homestead Development, Vagrant Virtual Server. I have coded a 2 programs for job applications and they can be accessed by the buttons below.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:60%;margin:0.5em 5%', '', '', 'laravelMVC', ''),
(22, 'Amino Acid Sequence Analyzer', 'miniMotif', 'Amino Acid Code Sequence Analyzer App', '', 'amino', 'dataanalysis.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:04:13', '2017-08-01 15:00:17', 'yes', 'div.aLi:contains(\'Amino Acid Code Sequence Analyzer\')', '50%', '1.0em', '<p class=\\><center>Scientific Data<br>Analysis Software</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Amino Acid Code Sequence Analyzer</p><p>This program gives statistics for all combinations of amino acid sequences within a protein.  The protein sequence is parsed by regex techniques from a text file, into a MySQL database.  The first and last amino acid is chosen in the GUI, as well as, the desired statistical output.  The database accessed by JavaScript-AJAX to PHP-MySQL on the server side which returns the statistics.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:65%;margin:0.5em 5%', '', '', '', ''),
(23, 'Web Technologies Used', 'webTech', 'Web Technologies Used', '', 'webTech', 'technologyideas.jpg', 0, 0, '2017-08-08 00:00:00', '2017-10-11 17:29:47', '2017-08-01 15:08:19', 'yes', '#abLi1', '14em', '1.0em', '<h1>Technologies I Used</h1>', 'div#btn2.bCon', '<p class=\\\"descHdr\\\">Web Page Technologies Used</p><p>This is a page that gives explanation of the programming technologies used on this site.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:1em 5%', '', '', '', ''),
(24, 'Personal Profile', 'profile', 'Personal Profile', '', 'https://www.linkedin.com/in/rlsworks', 'myFace.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:37:29', '2017-08-01 18:50:25', 'yes', 'div.aLi:contains(\'Personal Profile\')', '14em', '1.0em', '<p><center>Personal Profile</center></p>', 'div#btn2.bCon', '<p class=\\\"descHdr\\\">My Personal Profile</p><p class =\\>You can view my Linked-In Personal Profile for more info on me.</p>', '38em', '', '160', '187', 'position:relative;width:75%;height:70%;margin:1.0em 15%', '', '', '', ''),
(25, 'Google Compute Engine Deployment', 'computeEng', 'Google Compute Engine', '', '', 'myFace.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:13:00', '2017-08-01 18:57:49', 'yes', 'div.aLi:contains(\'Compute Engine\')', '50%', '1.0em', '<p><center>Google Deployment</center></p>', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Google Compute Engine Deployment --  <span style=\\\"font-style:itallic\\\">Discontinued</span></p><p>Deployment of my web portfolio to Google Compute Engine. The site also uses a sub-domain of my primary site.  Portions of the applications were changed to incorporate database storage in place of server file storage, as Google Compute Engine does not support local file access during runtime.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(26, 'Home Page', 'frontPage', 'Home Page', '', 'front', '', 0, 0, '0000-00-00 00:00:00', '2017-08-17 22:15:28', '2017-08-01 19:02:44', 'yes', '#btn1 > button', '10em', '1.2em', '', 'div#btn1.bCon', '<p class=\\\"descHdr\\\">Home</p><p>Return to the Front Page, which is a GUI of its own that enables navigation of this site. If you are using Google, check-out the 3-D File Cabinet below as it also allows site navigation</p><br><p class=\\\"descHdr\\\">This is the FUEL-CMS Version of my web portfolio.</span></p><p>The code is more modular and several CMS modules are used to store code parameters which work with iterative code.</p><p style=\\\"color:blue\\\"><i>Login-in to CMS</i> is under the Home Top Menu Button.</p>', '25em', '', '', '', '', '', '', '', ''),
(27, 'About Page', 'about', 'About Page Button Menu Top', '', '', 'technologyideas.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:03:15', '2017-08-01 19:08:04', 'yes', 'button:contains(\'About\')', '14em', '1.1em', '<h1>Web Technology</h1>', 'div#btn2.bCon', '<p class=\\\"descHdr\\\">About</p><p>Choose links below to find out about the technologies used to program this site, or to Send the author of this site an email.</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:1em 5%', '', '', '', ''),
(28, 'Software Development', 'software', 'Software Development Button Menu Top', '', '', 'websiteconstruction.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:24:53', '2017-08-01 19:17:14', 'yes', 'button:contains(\'Software Development\')', '50%', '1.0em', '', 'div#btn3.bCon', '<p class=\\\"descHdr\\\">Software Development</p><p>Select below for applications I\'ve done using different technologies.</p>', '38em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', '', '', '', ''),
(29, 'Technical Documents', 'techWritingButton', 'Technical Writing Button Menu Top', '', 'techWriter', 'techWriter.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:26:19', '2017-08-01 19:31:30', 'yes', '#btn4 > button', '50%', '1.0em', '<h1>Technical Writing</h1>', 'div#btn4.bCon', '<p class=\\\"descHdr\\\">Technical Writing</p><p>I am also a Technical Writer and the list below includes documents I have written using Microsoft Word, Adobe InDesign, as well as, OpenOffice Writer and Illustrator programs.</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:75%;margin:1em 5%', '', '', '', ''),
(30, 'Resumes', 'resumeButton', 'My Resume Button Menu Top', '', '', 'jobdone.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:23:35', '2017-08-01 19:35:15', 'yes', '#btn5 > button', '12em', '1.0em', '<p><center>My Resume</center></p>', 'div#btn5.bCon', '<p class=\\\"descHdr\\\">My Resume</p><p>A link to my Resume is below.</p>', '36em', '', '160', '187', 'position:relative;width:90%;height:75%;margin:0.5em 5%', '', '', '', ''),
(31, 'Living in Vegas', 'inVegas', 'Living In Las Vegas Button Menu Top', '', 'inVegas', '', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:17:46', '2017-08-01 19:41:27', 'yes', '#btn6 button span', '19em', '1.0em', '', 'div#btn5.bCon', '<p class=\\>Living In Vegas</p><p>A link about Las Vegas is below this Button and a Slide Show starts in Just a Moment!</p>', '37em', '', '160', '187', 'position:relative;width:90%;height:75%;margin:1em 5%', '', '', 'llv', 'vegas1.jpg,vegas2.jpg,vegas3.jpg,vegas4.jpg,vegas5.jpg,vegas6.jpg,vegas7.jpg,vegas8.jpg'),
(32, 'Technical Writing Documents', 'maintHeader', 'Product and Maintenance Manuals Header', '', '', 'technicalwritingimage.jpg', 0, 0, '2017-12-05 00:00:00', '2017-12-05 14:23:45', '0000-00-00 00:00:00', 'yes', '#twLi1 span', '25em', '1.0em', '<h1>Technical Manuals</h1>', 'div#btn4', '<p class=\\\"descHdr\\\">Product and Maintenance Manuals</p><p>Below are links to new product manuals for Motor Efficiency Controller (MEC) devices.  They were produced primarily with Adobe InDesign.</p>', '39em', '', '160', '187', 'position:relative;width:90%;height:70%;margin:0.5em 5%', NULL, NULL, NULL, NULL),
(34, 'Family Fun In Vegas', 'vegasFun', 'Having Fun In Las Vegas', '', 'inVegas', '', 0, 0, '2017-08-06 00:00:00', '2017-08-12 20:17:52', '2017-08-06 00:00:00', 'yes', '#lvLi1', '6em', '1.3em', '', 'div#btn6.bCon', '<p class=\\\"descHdr\\\">Having Vegas Family Fun</p><p>Discover Las Vegas Fun!</p>', '28em', '', '', '', '', '', '', '', ''),
(35, ' Email Contact', 'makeContact', 'Making Email Contact', '', 'email', 'upArrow.gif', 0, 0, '2017-08-07 00:00:00', '2017-08-16 23:53:22', '2017-08-07 00:00:00', 'yes', '#abLi2', '8em', '1.0em', '', 'div#btn2.bCon', '<p class=\\\"descHdr\\\">Making Contact</p><p>You can email me if you like.  Also more contact info is given in my resume.</p>', '35em', '', '', '', '', '', '', '', ''),
(37, 'FUEL-CMS Portfolio Log-In', 'fuelLogin', 'FUEL CMS Version of the Portfolio Login', '', 'fuel/login', 'myFace.jpg', 0, 0, '2017-08-17 00:00:00', '2017-10-11 17:10:23', '0000-00-00 00:00:00', 'yes', '#hmLi2', '14em', '1.2em', '<p><center>FUEL-CMS</center></p><p><center> Login</center></p>', 'div#btn1.bCon', '<p class=\\\"descHdr\\\">FUEL-CMS Login</p><p>Login to the FUEL-CMS Content Management System.  Use the Username and Password (guest).</p>', '35em', '', '160', '187', 'position:relative;width:80%;height:60%;margin:0.5em 10%', '', '', '', ''),
(38, 'FUEL-CMS Portfolio GIT Repository', 'fuelGIT', 'Git Repository for FUEL-CMS Version of Portfolio', '', 'https://bitbucket.org/Rsyp3rtjr/fuelcms.git', 'myFace.jpg', 0, 0, '0000-00-00 00:00:00', '2017-10-11 17:09:38', '2017-08-18 07:09:04', 'yes', '#hmLi1', '14em', '1.2em', '<p><center>FUEL-CMS</center></p><p><center> Git Repository</center></p>', 'div#btn1.bCon', '<p class=\\\"descHdr\\\">FUEL-CMS GIT Repository</p><p>Link to GIT Repository for the FUEL-CMS Content Management System.</p>', '35em', '160', '187', '', 'position:relative;width:80%;height:60%;margin:0.5em 10%', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `headMenuOpts`
--
ALTER TABLE `headMenuOpts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `headMenuOpts`
--
ALTER TABLE `headMenuOpts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;




SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `othelloBoards`
--

CREATE TABLE `othelloBoards` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'if left blank, one will automatically be generated for you',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `precedence` int(11) NOT NULL DEFAULT 0,
  `publish_date` datetime DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_added` datetime NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `initBoard` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `myBoard` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `rowNum` int(11) NOT NULL DEFAULT 1,
  `theBody2` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `othelloBoards`
--

INSERT INTO `othelloBoards` (`id`, `title`, `slug`, `content`, `excerpt`, `link`, `image`, `category_id`, `precedence`, `publish_date`, `last_updated`, `date_added`, `published`, `initBoard`, `myBoard`, `rowNum`, `theBody2`) VALUES
(1, '', 'othelloBoards\r\n', '', '', '', '', 0, 0, NULL, '2017-08-10 15:21:26', '0000-00-00 00:00:00', 'yes', '	<div id=\"gboard\">\n            <div class=\"topbar\" id=\"topbar\">\n                <div id=\"xbar\" >\n                    <div id=\"inner2\">X<span style=\"visibility:hidden\">---</span>COORDINATES</div>\n                </div>\n                <div class=\"tcell\"></div>\n                <div class=\"tcell\">0</div>\n                <div class=\"tcell\">1</div>\n                <div class=\"tcell\">2</div>\n                <div class=\"tcell\">3</div>\n                <div class=\"tcell\">4</div>\n                <div class=\"tcell\">5</div>\n                <div class=\"tcell\">6</div>\n                <div class=\"tcell\">7</div>\n            </div>\n            <div class=\"sidebar\" id=\"sidebar\">\n                <div id=\"ybar\" ><div id=\"inner\"><br/>Y<br/><br/>COORDINATES</div></div>\n                <div class=\"scell\">0</div>\n                <div class=\"scell\">1</div>\n                <div class=\"scell\">2</div>\n                <div class=\"scell\">3</div>\n                <div class=\"scell\">4</div>\n                <div class=\"scell\">5</div>\n                <div class=\"scell\">6</div>\n                <div class=\"scell\">7</div>\n            </div>\n            <div id=\"playarea\" >     \n                    <div class=\"grow\" id=\"row1\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row2\">\n                         <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row3\">\n                          <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row4\">\n                          <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">X</div>\n                        <div class=\"cell\"  title=\"4\">O</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row5\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">O</div>\n                        <div class=\"cell\"  title=\"4\">X</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row6\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row7\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row8\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n             </div>\n        </div>', '<div id=\"gboard\">\n            <div class=\"topbar\" id=\"topbar\">\n                <div id=\"xbar\">\n                     <div id=\"inner2\">X<span style=\"visibility:hidden\">--- \n                         </span>COORDINATES\n                     </div>\n                </div>\n                <div class=\"tcell\"></div>\n                <div class=\"tcell\">0</div>\n                <div class=\"tcell\">1</div>\n                <div class=\"tcell\">2</div>\n                <div class=\"tcell\">3</div>\n                <div class=\"tcell\">4</div>\n                <div class=\"tcell\">5</div>\n                <div class=\"tcell\">6</div>\n                <div class=\"tcell\">7</div>\n            </div>\n            <div class=\"sidebar\" id=\"sidebar\">\n                <div id=\"ybar\">\n                     <div id=\"inner\"><br>Y<br><br>COORDINATES</div>\n                </div>\n                <div class=\"scell\">0</div>\n                <div class=\"scell\">1</div>\n                <div class=\"scell\">2</div>\n                <div class=\"scell\">3</div>\n                <div class=\"scell\">4</div>\n                <div class=\"scell\">5</div>\n                <div class=\"scell\">6</div>\n                <div class=\"scell\">7</div>\n            </div>\n            <div id=\"playarea\">     \n                    <div class=\"grow\" id=\"row1\">\n                        <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">.</div>\n                        <div class=\"cell\" title=\"3\">.</div>\n                        <div class=\"cell\" title=\"4\">.</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row2\">\n                         <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">.</div>\n                        <div class=\"cell\" title=\"3\">.</div>\n                        <div class=\"cell\" title=\"4\">.</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row3\">\n                          <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">.</div>\n                        <div class=\"cell\" title=\"3\">.</div>\n                        <div class=\"cell\" title=\"4\">.</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row4\">\n                          <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">O</div>\n                        <div class=\"cell\" title=\"3\">O</div>\n                        <div class=\"cell\" title=\"4\">O</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row5\">\n                        <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">.</div>\n                        <div class=\"cell\" title=\"3\">O</div>\n                        <div class=\"cell\" title=\"4\">X</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row6\">\n                        <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">.</div>\n                        <div class=\"cell\" title=\"3\">.</div>\n                        <div class=\"cell\" title=\"4\">.</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row7\">\n                        <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">.</div>\n                        <div class=\"cell\" title=\"3\">.</div>\n                        <div class=\"cell\" title=\"4\">.</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row8\">\n                        <div class=\"cell\" title=\"0\">.</div>\n                        <div class=\"cell\" title=\"1\">.</div>\n                        <div class=\"cell\" title=\"2\">.</div>\n                        <div class=\"cell\" title=\"3\">.</div>\n                        <div class=\"cell\" title=\"4\">.</div>\n                        <div class=\"cell\" title=\"5\">.</div>\n                        <div class=\"cell\" title=\"6\">.</div>\n                        <div class=\"cell\" title=\"7\">.</div>\n                    </div>\n             </div>\n        </div>', 1, '	<div id=\"gboard\">\n            <div class=\"topbar\" id=\"topbar\">\n                <div id=\"xbar\" >\n                    <div id=\"inner2\">X<span style=\"visibility:hidden\">--- \n                       </span>COORDINATES</div>\n                </div>\n                <div class=\"tcell\"></div>\n                <div class=\"tcell\">0</div>\n                <div class=\"tcell\">1</div>\n                <div class=\"tcell\">2</div>\n                <div class=\"tcell\">3</div>\n                <div class=\"tcell\">4</div>\n                <div class=\"tcell\">5</div>\n                <div class=\"tcell\">6</div>\n                <div class=\"tcell\">7</div>\n            </div>\n            <div class=\"sidebar\" id=\"sidebar\">\n                <div id=\"ybar\" ><div id=\"inner\"><br/>Y<br/><br/>COORDINATES</div></div>\n                <div class=\"scell\">0</div>\n                <div class=\"scell\">1</div>\n                <div class=\"scell\">2</div>\n                <div class=\"scell\">3</div>\n                <div class=\"scell\">4</div>\n                <div class=\"scell\">5</div>\n                <div class=\"scell\">6</div>\n                <div class=\"scell\">7</div>\n            </div>\n            <div id=\"playarea\" >     \n                    <div class=\"grow\" id=\"row1\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row2\">\n                         <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row3\">\n                          <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row4\">\n                          <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">X</div>\n                        <div class=\"cell\"  title=\"4\">O</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row5\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">O</div>\n                        <div class=\"cell\"  title=\"4\">X</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row6\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row7\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n                    <div class=\"grow\" id=\"row8\">\n                        <div class=\"cell\"  title=\"0\">.</div>\n                        <div class=\"cell\"  title=\"1\">.</div>\n                        <div class=\"cell\"  title=\"2\">.</div>\n                        <div class=\"cell\"  title=\"3\">.</div>\n                        <div class=\"cell\"  title=\"4\">.</div>\n                        <div class=\"cell\"  title=\"5\">.</div>\n                        <div class=\"cell\"  title=\"6\">.</div>\n                        <div class=\"cell\"  title=\"7\">.</div>\n                    </div>\n             </div>\n        </div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `othelloBoards`
--
ALTER TABLE `othelloBoards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `othelloBoards`
--
ALTER TABLE `othelloBoards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;




SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rlswor5_fuel_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `FrontMenuOpts`
--

CREATE TABLE `FrontMenuOpts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'if left blank, one will automatically be generated for you',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `precedence` int(11) NOT NULL DEFAULT 0,
  `publish_date` datetime DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_added` datetime NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `menuHTML` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `btnHTML` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `divNum` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `FrontMenuOpts`
--

INSERT INTO `FrontMenuOpts` (`id`, `title`, `slug`, `content`, `excerpt`, `url`, `image`, `category_id`, `precedence`, `publish_date`, `last_updated`, `date_added`, `published`, `menuHTML`, `btnHTML`, `divNum`) VALUES
(1, '', 'orominer2', 'Left Menu Orominer App Selection', '', 'orominer2', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 13:50:39', '2017-08-13 13:44:04', 'yes', '<div><p>This orominer program contains Histological Data within the Hierarchical Organization of Human Body makeup.  Histological Data is information about Human Organs and their tissues and cells.</p></div>', '#oroHist', '#clickdiv2'),
(2, '', 'orominer1', 'Left Menu Orominer Histology App Selection', '', 'orominer1', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 13:52:14', '2017-08-13 13:51:32', 'yes', '<div><p>The Orominer program shows a hierarchical organization of the human body constitution. Its top level is Organ Systems.  It uses JavaScript, JQuery for event synchronization between hierarchical display and graphic display, as well as, dynamic generation of SVG graphical elements based on DOM HTML elements.  MySQL Database information is converted into XML format using PHP for up front access by the code for generation of Hierachical Display.  Unfortunately ONLY THE First 3 NODES Of DATA was developed at Project Completion.</p></div>', '#orominer', '#clickdiv1'),
(3, '', 'amino', 'Amino Acid Sequence Analyzer', '', 'amino', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 14:02:16', '2017-08-13 14:02:16', 'yes', '<div><p>This program gives statistics for all combinations of amino acid sequences within a protein.  The protein sequence is parsed by regex techniques from a text file, into a MySQL database.<p>The first and last amino acid is chosen in the GUI, as well as, the desired statistical output.  The database is accessed by JavaScript-AJAX to PHP-MySQL on the server side which returns the statistics.</p></div>', '#miniMotif', '#clickdiv4'),
(4, '', 'othello', '', '', 'othello', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 14:03:48', '2017-08-13 14:03:48', 'yes', '<div><p>This is an adaptation of the Classic Othello game where one player competes with the Computer.<p>Two Player Play could be implemented, as well as, making levels of difficulty for game play.</p></div>', '#othello', '#clickdiv3'),
(5, '', 'techWriter', 'Technical Writing Examples', '', 'techWriter', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 14:05:43', '2017-08-13 14:05:43', 'yes', '<div><p>I am a Technical Writer too!</p></div>', '#technicalWriting', '#clickdiv5'),
(6, '', 'dynResume', 'Dynamic Resume App Selector', '', 'dynResume', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 14:08:23', '2017-08-13 14:08:23', 'yes', '<div><p>Resume for Richard L. Sypert Jr. in Html and PDF formats.  The HTML Resume Format Only Uses CSS and no JavaScript!</p></div>', '#resume', '#clickdiv8'),
(7, '', 'inVegas', 'Living In Las Vegas App Selector', '', 'inVegas', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 14:09:51', '2017-08-13 14:09:51', 'yes', '<div><p>Living in Las Vegas has been a Discovery.</p></div>', '#livingInVegas', '#clickdiv9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FrontMenuOpts`
--
ALTER TABLE `FrontMenuOpts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FrontMenuOpts`
--
ALTER TABLE `FrontMenuOpts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;




SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rlswor5_fuel_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `twriteMenuOpts`
--

CREATE TABLE `twriteMenuOpts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'if left blank, one will automatically be generated for you',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `precedence` int(11) NOT NULL DEFAULT 0,
  `publish_date` datetime DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_added` datetime NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `btnHTML` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `menuHTML` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `clickDiv` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `twriteMenuOpts`
--

INSERT INTO `twriteMenuOpts` (`id`, `title`, `slug`, `content`, `excerpt`, `url1`, `image`, `category_id`, `precedence`, `publish_date`, `last_updated`, `date_added`, `published`, `btnHTML`, `menuHTML`, `clickDiv`) VALUES
(1, '', 'graingerABCDE', 'Grainger ABCDE SeriesB Maintenance and Product Manual', '', 'graingerABCDE', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 18:09:35', '2017-08-13 17:42:21', 'yes', '#doc1', '<span xss=removed>Grainger ABCDE SeriesB</span><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a Motor Efficiency Controller (MEC). It is a new generation product manual.</p><p>I wrote it in Adobe InDesign according to the customer\\\'s style rules</p><p xss=removed><span xss=removed id=\\>Click Blinking Button Above</span></p>', '#clickdiv1'),
(2, '', 'graingerCDE', 'Grainger CDE SeriesB Maintenance and Product Manual', '', 'graingerCDE', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 17:55:12', '2017-08-13 17:52:19', 'yes', '#doc2', '<span xss=removed>Grainger CDE</span><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a \' +                    \' Motor Efficiency Controller (MEC).  It is a new generation product manual.</p>\'+              \'<p>I wrote it in Adobe InDesign according to the customer\\\'s style rules</p><p xss=removed><span xss=removed id=\\>Click Blinking Button Above</span></p>\';', '#clickdiv2'),
(3, '', 'mecPManual', 'MEC Product Manual VT 1.6 Manual', '', 'mecPManual', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 17:58:19', '2017-08-13 17:57:11', 'yes', '#doc3', '<span xss=removed></span><p>This is a Product Manual for a \' +                    \' Motor Efficiency Controller (MEC).  It is a new generation product manual.</p>\'+              \'<p>I wrote it in Adobe InDesign according to the customer\\\'s style rules</p><p xss=removed><span xss=removed id=\\>Click Blinking Button Above</span></p>', '#clickdiv3'),
(4, '', 'whitePaper', 'MEC White Paper', '', 'whitePaper', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 18:01:13', '2017-08-13 18:00:17', 'yes', '#doc4', '<span xss=removed>MEC White Paper</span><p>This is a revision of the White Paper for the \' +                    \' Motor Efficiency Controller (MEC).  It contained a fuller explanation of the electrical induction of power and torque\' +               \' in an electrical motor.<p>It was written in Microsoft Word.</p><p xss=removed><span xss=removed id=\\>Click Blinking Button Above</span></p>', '#clickdiv4'),
(5, '', 'engSpec', 'Improvement Plan Requirements', '', 'engSpec', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 18:04:23', '2017-08-13 18:02:48', 'yes', '#doc5', '<span xss=removed>Improvement Plan Requirements</span><p>This is technical specification of the\' +                     \' requirements of approval and methodology of granting approval for land improvement in Clark County, as it pertains to water\' +               \' and sewer utility construction.</p><p>It was written in Microsoft Word.</p><p xss=removed><span xss=removed id=\\>Click Blinking Button Above</span></p>', '#clickdiv5'),
(6, '', 'softwareTW', 'Code Development Technical Writing', '', 'softwareTW', '', 0, 0, '0000-00-00 00:00:00', '2017-08-13 18:06:21', '2017-08-13 18:06:21', 'yes', '#doc6', '<span xss=removed>Code Development Technical Writing</span><p>This is a technical specification for guidance in developing Object Oriented Code.</p><p>It was written as a HTML document.</p><p xss=removed><span xss=removed id=\\>Click Blinking Button Above</span></p>', '#clickdiv6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twriteMenuOpts`
--
ALTER TABLE `twriteMenuOpts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twriteMenuOpts`
--
ALTER TABLE `twriteMenuOpts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- --------------------------------------------------------

--
-- Table structure for table `footerMenuOpts`
--

CREATE TABLE `footerMenuOpts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'if left blank, one will automatically be generated for you',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `precedence` int(11) NOT NULL DEFAULT 0,
  `publish_date` datetime DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_added` datetime NOT NULL,
  `published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `menuTag` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footerMenuOpts`
--

INSERT INTO `footerMenuOpts` (`id`, `title`, `slug`, `content`, `excerpt`, `url1`, `image`, `category_id`, `precedence`, `publish_date`, `last_updated`, `date_added`, `published`, `menuTag`) VALUES
(1, 'Vegas Caribbean Catering', 'vegasCatering', 'Vegas Caribbean Catering -- in Development', '', 'http://rlsworks.com/wordpress/vcc', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 14:44:08', '2017-08-14 14:44:08', 'yes', '#vegasCatering'),
(2, 'Caribbean Food Store', 'foodStore', 'Vegas Caribben Food Store -- in Development', '', 'http://rlsworks.com/cfs/wordpress', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 14:46:09', '2017-08-14 14:46:09', 'yes', '#foodStore'),
(3, 'Mobile Portfolio Version', 'mobilePortfolio', 'Mobile Version of Portfolio using JQuery Mobile.', '', 'mobile', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 14:49:06', '2017-08-14 14:48:41', 'yes', '#mobilePortfolio'),
(4, 'Git Repository', 'gitRepo', 'Git Repository of code for web portfolio', '', 'https://bitbucket.org/Rsypertjr/profile/repositories?visibility=all', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 14:50:31', '2017-08-14 14:50:31', 'yes', '#gitRepo'),
(5, 'Code Repository', 'codeRepo', 'Google Code repository that includes other code outside of portfolio.', '', 'https://drive.google.com/file/d/0Bw4sGq8fpAAnSDhMU3NBNTJSS1k/view', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 14:52:09', '2017-08-14 14:52:09', 'yes', '#codeRepo'),
(6, 'Othello Game', 'othello', 'Othello Game', '', 'othello', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 14:54:22', '2017-08-14 14:54:22', 'yes', '#playOthello'),
(7, 'Ruby On Rails Training', 'rubyOnRails', 'Ruby On Rails Training', '', 'https://obscure-dawn-69167.herokuapp.com/', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 14:56:28', '2017-08-14 14:56:28', 'yes', '#rubyOnRails'),
(8, 'Laravel MVC App #1', 'laravel1', 'Laravel application completed in job application process.', '', 'https://protected-dawn-70064.herokuapp.com', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 21:53:38', '2017-08-14 14:58:30', 'yes', '#laravel1'),
(9, 'Google Portfolio Deployment', 'googlePortfolio', 'Google Deployment of Web Portfolio using Google Computer Engine technology.', '', 'http://www.appeng.rlsworks.com', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:04:19', '2017-08-14 15:01:19', 'yes', '#googleCompEng'),
(10, 'Email Contact', 'email', 'Contact author by Email, hotmail or google.', '', 'email', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:11:26', '2017-08-14 15:11:00', 'yes', '#email'),
(11, 'Amino Acid Code Analyzer', 'amino', 'Amino Acid Code Analyzer', '', 'amino', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:14:15', '2017-08-14 15:13:56', 'yes', '#aminoCode'),
(12, 'Human Organ System Analyzer 1', 'orominer1', 'Human Organ System Analyzer 1', '', 'orominer1', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:19:31', '2017-08-14 15:18:37', 'yes', '#organsCode1'),
(13, 'Human Organ System Analyzer 2', 'orominer2', 'Human Organ System Analyzer 2', '', 'orominer2', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:21:04', '2017-08-14 15:21:04', 'yes', '#organsCode2'),
(14, 'Technology White Paper', 'whitePaper', 'Technology White Paper.', '', 'whitePaper', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:24:19', '2017-08-14 15:24:19', 'yes', '#whitePaper'),
(15, 'Grainger ABCDE Maintenance Manual', 'graingerABCDE', 'Grainger ABCDE Maintenance Manual', '', 'graingerABCDE', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:27:10', '2017-08-14 15:27:10', 'yes', '#graingerABCDE'),
(16, 'Dynamic HTML Resume', 'dynResume', 'Dynamic HTML Resume', '', 'dynResume', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:28:54', '2017-08-14 15:28:54', 'yes', '#dynResume'),
(17, 'Code Development Specification', 'softwareTW', 'Code Development Specification', '', 'softwareTW', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:31:14', '2017-08-14 15:31:14', 'yes', '#codeDevSpec'),
(18, 'Engineering Improvement Plan', 'engSpec', 'Engineering Improvement Plan', '', 'engSpec', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:34:34', '2017-08-14 15:34:34', 'yes', '#engSpec'),
(19, 'MEC Product Manual', 'mecPManual', 'MEC Product Manual', '', 'mecPManual', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:46:22', '2017-08-14 15:37:25', 'yes', '#mecManual'),
(20, 'Grainger Maintenance Manual', 'graingerCDE', 'Grainger Maintenance Manual', '', 'graingerCDE', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:39:24', '2017-08-14 15:38:54', 'yes', '#graingerCDE'),
(21, 'Personal Profile', 'profile', 'Personal Profile at Linked In', '', 'https://www.linkedin.com/in/rlsworks', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 15:40:53', '2017-08-14 15:40:53', 'yes', '#linkedIn'),
(22, 'PDF Resume', 'pdfResume', 'PDF Resume that can be downloaded', '', 'pdfResume', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 19:51:07', '2017-08-14 19:49:46', 'yes', '#pdfResume'),
(23, 'Laravel MVC Sample 2', 'laravel2', 'Laravel Home Sample App 2', '', 'https://safe-bayou-92699.herokuapp.com', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 21:56:23', '2017-08-14 21:42:14', 'yes', '#laravel2'),
(24, 'Laravel MVC Home School Transcript Generator', 'laravel3', 'Laravel MVC Home School Transcript Generator', '', 'https://safe-bayou-92699.herokuapp.com/cinp', '', 0, 0, '0000-00-00 00:00:00', '2017-08-14 21:57:09', '2017-08-14 21:43:40', 'yes', '#laravel3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footerMenuOpts`
--
ALTER TABLE `footerMenuOpts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footerMenuOpts`
--
ALTER TABLE `footerMenuOpts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
