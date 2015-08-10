# phpMyAdmin SQL Dump
# version 2.5.3
# http://www.phpmyadmin.net
#
# Gazda (Host): mysql.suidzer0.org
# Timp de generare: Oct 27, 2003 at 02:35 AM
# Versiune server: 4.0.15
# Versiune PHP: 4.3.3
# 
# Baza de date : `lucianf`
# 
CREATE DATABASE `lucianf`;
USE lucianf;

# --------------------------------------------------------

#
# Structura de tabel pentru tabelul `cvdb`
#

CREATE TABLE `cvdb` (
  `ID` tinyint(4) NOT NULL auto_increment,
  `NUME` varchar(30) default NULL,
  `COMP` varchar(30) default NULL,
  `EMAIL` varchar(30) default NULL,
  `TEL` varchar(30) default NULL,
  `DATA` datetime NOT NULL default '0000-00-00 00:00:00',
  `IP` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`ID`),
  KEY `ID` (`ID`)
) TYPE=MyISAM AUTO_INCREMENT=12 ;

#
# Salvarea datelor din tabel `cvdb`
#

INSERT INTO `cvdb` VALUES (1, '', '', '', '', '2003-06-05 16:52:22', '193.254.42.253');
INSERT INTO `cvdb` VALUES (2, 'Roxana Steleanu', 'SAAF', 'sroxana2001@emoka.ro', '0724270372', '2003-06-24 08:35:04', '193.230.156.9');
INSERT INTO `cvdb` VALUES (3, 'Roxana Steleanu', 'SAAF', 'sroxana2001@emoka.ro', '0724270372', '2003-06-24 08:36:33', '193.230.156.9');
INSERT INTO `cvdb` VALUES (4, '', '', '', '', '2003-08-05 11:03:05', '62.231.81.232');
INSERT INTO `cvdb` VALUES (5, '', '', '', '', '2003-08-29 12:10:24', '81.196.100.104');
INSERT INTO `cvdb` VALUES (6, '', '', '', '', '2003-09-04 08:28:17', '80.86.98.204');
INSERT INTO `cvdb` VALUES (7, '', '', '', '', '2003-09-25 22:34:34', '213.233.97.153');
INSERT INTO `cvdb` VALUES (8, 'laura', '', 'bubu2xx2@yahoo.com', '', '2003-09-30 20:55:13', '81.196.12.229');
INSERT INTO `cvdb` VALUES (9, '', '', '', '', '2003-10-13 13:47:32', '213.164.226.223');
INSERT INTO `cvdb` VALUES (10, 'Todea Mihaela', '', 'bluella@xnet.ro', '', '2003-10-16 17:51:10', '193.231.20.2');
INSERT INTO `cvdb` VALUES (11, '', '', '', '', '2003-10-23 10:56:17', '194.102.104.11');
    