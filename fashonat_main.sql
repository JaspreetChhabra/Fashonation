<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 04:38 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashonat_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasho_user`
--

CREATE TABLE `fasho_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(12) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasho_user`
--

INSERT INTO `fasho_user` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(5, 'india', '123@gmail.com', 'pass', 'user'),
(7, 'alikaleach', 'sed.dictum@odio.co.uk', 'mitempor', 'user '),
(8, 'lucycastro', 'eget@vitae.ca', 'euerat', 'user '),
(9, 'kadenhutchinson', 'nunc.ac.mattis@atauctorullamcorper.org', 'idmagna', ' admin'),
(10, 'samanthaberry', 'eu@vulputatemauris.co.uk', 'turpisegestas.', 'user '),
(11, 'amberrodriguez', 'Nulla.eget@hendrerita.ca', 'donecdignissim', 'user '),
(12, 'cassadydudley', 'Aenean.sed.pede@Integer.co.uk', 'tinciduntcongue', ' admin'),
(13, 'brodyfreeman', 'non@vitaesodales.org', 'sollicitudinadipiscing', ' admin'),
(14, 'venuswatson', 'Cras.dolor@inconsequat.ca', 'pedenec', 'user '),
(15, 'judithfisher', 'a@Sedeunibh.com', 'leo,in', ' admin'),
(16, 'tatyanawolf', 'euismod@Nullam.edu', 'namporttitor', 'user '),
(17, 'donnaortega', 'rutrum@duiaugue.edu', 'lectus,a', 'user '),
(18, 'callymorris', 'nibh@enimconsequat.co.uk', 'euenim.', ' admin'),
(19, 'fullerkeller', 'non@mieleifend.com', 'enim.mauris', 'user '),
(20, 'vannavaughn', 'eu@velfaucibus.com', 'fuscediam', ' admin'),
(21, 'jonahsullivan', 'arcu.eu@velquam.org', 'bibendumullamcorper.', ' admin'),
(22, 'lareinapeck', 'consectetuer.rhoncus.Nullam@dictumProineget.ca', 'necluctus', ' admin'),
(23, 'keanewaller', 'ut@Nullamfeugiatplacerat.edu', 'ametornare', ' admin'),
(24, 'jaelscott', 'Nulla.interdum.Curabitur@et.co.uk', 'sollicitudinadipiscing', ' admin'),
(25, 'hannafinley', 'et.magnis.dis@et.co.uk', 'egetodio.', ' admin'),
(26, 'xenaparrish', 'condimentum.Donec.at@sitametante.edu', 'eu,eleifend', ' admin'),
(27, 'carlwalsh', 'ac@leoinlobortis.org', 'eutellus.', 'user '),
(28, 'tylerbruce', 'pharetra.nibh.Aliquam@feugiatmetus.ca', 'elementumpurus,', 'user '),
(29, 'isadoramcdowell', 'velit@mollisDuissit.co.uk', 'variusultrices,', 'user '),
(30, 'ninavinson', 'luctus.et.ultrices@Fuscediamnunc.net', 'elit.curabitur', 'user '),
(31, 'karlymcleod', 'dolor@sedsapienNunc.ca', 'enim.etiam', ' admin'),
(32, 'phelanramsey', 'ut.molestie.in@duiquis.com', 'pretiumaliquet,', ' admin'),
(33, 'carapage', 'sodales@orciDonecnibh.ca', 'aeneanegestas', ' admin'),
(34, 'carasimmons', 'congue.elit.sed@mattisCras.edu', 'montes,nascetur', ' admin'),
(35, 'wyntergay', 'pede@liberolacus.edu', 'malesuadaaugue', 'user '),
(37, 'conanhubbard', 'sed@aliquetProinvelit.com', 'feugiatnec,', 'user '),
(38, 'cherylcopeland', 'semper@molestiesodales.ca', 'dictumaugue', 'user '),
(39, 'murphyavila', 'urna.suscipit@et.com', 'aliquetmolestie', 'user '),
(40, 'tylerbrown', 'Integer.vitae.nibh@nonquam.edu', 'etnetus', ' admin'),
(41, 'pearlwalsh', 'Donec.est.Nunc@Aliquamerat.com', 'felispurus', 'user '),
(42, 'gingerandrews', 'ipsum.cursus@porttitorinterdumSed.ca', 'mauris.integer', ' admin'),
(43, 'sebastianjenkins', 'id.nunc.interdum@magnaNam.ca', 'ridiculusmus.', ' admin'),
(44, 'donnalong', 'facilisis@enimSed.org', 'purus.maecenas', 'user '),
(45, 'barclaycummings', 'fringilla.mi.lacinia@egetnisidictum.co.uk', 'aeneansed', 'user '),
(46, 'quentinhorn', 'nunc.sit.amet@molestiearcu.org', 'ligulaeu', 'user '),
(47, 'constanceaustin', 'Etiam.bibendum.fermentum@risusodio.ca', 'sollicitudinorci', 'user '),
(48, 'cobywhitley', 'luctus@aneque.edu', 'egetlaoreet', 'user '),
(49, 'quynnhood', 'metus.eu.erat@arcuimperdietullamcorper.net', 'nulla.cras', 'user '),
(50, 'wesleynicholson', 'eget@justo.net', 'aliquamauctor,', ' admin'),
(51, 'oribenson', 'parturient@Quisqueporttitor.org', 'urnaconvallis', ' admin'),
(52, 'kylanparrish', 'vehicula@leoelementum.org', 'egestas.duis', ' admin'),
(53, 'wilmapitts', 'Donec.luctus.aliquet@nislelementum.net', 'rutrumlorem', 'user '),
(54, 'colbymcgowan', 'lacus.Quisque@penatibuset.ca', 'orcilobortis', 'user '),
(55, 'ayannaball', 'fermentum@ornareelitelit.co.uk', 'neque.in', ' admin'),
(56, 'yeodonaldson', 'dui.Cras.pellentesque@dictummagna.com', 'sociisnatoque', 'user '),
(57, 'raysweeney', 'id.sapien@tempusscelerisquelorem.co.uk', 'mifringilla', 'user '),
(58, 'ashelyvaughn', 'interdum.Sed@nisiCumsociis.org', 'erat.etiam', 'user '),
(59, 'loganortega', 'eros.Proin@natoquepenatibuset.net', 'sempertellus', 'user '),
(60, 'igorharper', 'Sed.dictum.Proin@feugiat.ca', 'idrisus', ' admin'),
(61, 'aidanparks', 'eu.ultrices.sit@Fuscemi.ca', 'bibendum.donec', ' admin'),
(62, 'borismay', 'ut@famesac.edu', 'malesuadaut,', ' admin'),
(63, 'chandlerburt', 'malesuada.ut.sem@consectetuer.co.uk', 'at,velit.', ' admin'),
(64, 'patiencecamacho', 'sed.libero@amet.co.uk', 'nasceturridiculus', 'user '),
(65, 'ardensims', 'lobortis@auguemalesuadamalesuada.com', 'leo.cras', ' admin'),
(66, 'kendalldavenport', 'sodales@eutemporerat.org', 'enimcommodo', 'user '),
(67, 'rhiannonmoss', 'non.feugiat@tinciduntaliquamarcu.edu', 'augue,eu', 'user '),
(68, 'adamhartman', 'luctus@quis.edu', 'euelit.', ' admin'),
(69, 'hadleyrusso', 'pellentesque@aaliquetvel.net', 'consectetuermauris', ' admin'),
(70, 'abdulhuffman', 'quam@anteMaecenasmi.org', 'aliquet.proin', ' admin'),
(71, 'ivorcase', 'risus.a@malesuadafringilla.net', 'loremsemper', ' admin'),
(72, 'fletcherbonner', 'Morbi@diam.com', 'seddui.', 'user '),
(73, 'lindabyers', 'nunc.risus@nibhPhasellusnulla.co.uk', 'quisarcu', 'user '),
(74, 'jordenlester', 'neque.venenatis.lacus@turpis.org', 'maurisblandit', ' admin'),
(75, 'kaiperry', 'nunc.id.enim@anequeNullam.ca', 'nec,eleifend', ' admin'),
(76, 'gwendolynmeyers', 'Quisque.imperdiet.erat@etmagnis.com', 'magnisdis', 'user '),
(77, 'ivyberg', 'dignissim.tempor.arcu@Nullamlobortisquam.co.uk', 'donecporttitor', 'user '),
(78, 'keeganconley', 'In.condimentum.Donec@CuraePhasellus.com', 'orcilacus', 'user '),
(79, 'rigelromero', 'egestas.a@in.ca', 'molestieorci', 'user '),
(80, 'lamardunn', 'faucibus@vitaedolorDonec.co.uk', 'donecfeugiat', 'user '),
(81, 'cainglover', 'dolor.nonummy.ac@libero.edu', 'eu,accumsan', ' admin'),
(82, 'eatongoodwin', 'orci@Donecsollicitudinadipiscing.ca', 'disparturient', ' admin'),
(83, 'camillasawyer', 'senectus.et@variusultrices.ca', 'orci,adipiscing', 'user '),
(84, 'quintessagrant', 'nonummy@odio.ca', 'sitamet', 'user '),
(85, 'vivianbowman', 'ac.orci.Ut@dignissimmagnaa.net', 'maecenasornare', ' admin'),
(86, 'medgelara', 'ornare.placerat.orci@tristiquealiquet.co.uk', 'adipiscingelit.', ' admin'),
(87, 'rajaharnold', 'Quisque@odio.edu', 'pellentesquea,', ' admin'),
(88, 'meredithholmes', 'ut.pharetra@pede.edu', 'nullamscelerisque', ' admin'),
(89, 'kirestincarver', 'lobortis@odio.net', 'eu,ultrices', ' admin'),
(90, 'odessalambert', 'dolor.sit.amet@tempordiamdictum.edu', 'penatibuset', ' admin'),
(91, 'jocelynsimpson', 'lacus.pede@nec.ca', 'id,erat.', 'user '),
(92, 'hardingrobles', 'sed.dictum.eleifend@InfaucibusMorbi.com', 'seddictum', 'user '),
(93, 'neromcleod', 'Donec.vitae@ami.ca', 'lectusjusto', 'user '),
(94, 'stacylewis', 'Fusce.mollis.Duis@velconvallisin.ca', 'nunccommodo', 'user '),
(95, 'willowmitchell', 'commodo@elitdictumeu.com', 'est,vitae', ' admin'),
(96, 'amelajimenez', 'eu.odio.Phasellus@etipsum.edu', 'nonummyipsum', ' admin'),
(97, 'indiaroman', 'nascetur.ridiculus.mus@pellentesqueegetdictum.edu', 'cumsociis', ' admin'),
(98, 'kennethdaniels', 'leo.Cras.vehicula@orcilacus.ca', 'sociisnatoque', 'user '),
(99, 'lawrencehenson', 'felis@Morbineque.edu', 'ante,iaculis', 'user '),
(100, 'jaelramsey', 'velit.egestas.lacinia@quisdiamluctus.ca', 'orci.ut', 'user '),
(101, 'jerrychambers', 'tellus.Suspendisse@semNulla.edu', 'seddolor.', 'user '),
(102, 'deirdreblevins', 'Proin.vel@dictumeu.co.uk', 'tempusrisus.', 'user '),
(103, 'stoneacosta', 'fringilla.Donec@dolor.ca', 'consectetueradipiscing', 'user '),
(104, 'brennahowe', 'Nullam.suscipit.est@luctusaliquetodio.ca', 'ut,nulla.', ' admin'),
(105, 'tigerwise', 'ac.orci@feugiatplaceratvelit.ca', 'euneque', 'user '),
(106, 'rigelvazquez', 'amet.consectetuer@nunc.net', 'curabitursed', 'user ');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nx9_users`
--

CREATE TABLE `nx9_users` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `display_image` varchar(255) DEFAULT NULL,
  `age` int(4) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `have_designs` int(1) DEFAULT NULL,
  `have_orders` int(1) DEFAULT NULL,
  `p_role` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nx9_users`
--

INSERT INTO `nx9_users` (`user_id`, `user_name`, `email_id`, `password`, `display_image`, `age`, `gender`, `address`, `city`, `state`, `country`, `pincode`, `contact_no`, `have_designs`, `have_orders`, `p_role`) VALUES
(1, 'Alika Leach', 'sed.dictum@odio.co.uk', 'mi tempor', 'molestie tellus. Aenean egestas hendrerit', 60, ' female ', 'Ap #777-3022 Nisi Ave', 'Pondicherry', 'PY', 'India', 187461, '1682101710099', 1, 66, 'user '),
(2, 'Lucy Castro', 'eget@vitae.ca', 'eu erat', 'interdum. Curabitur dictum. Phasellus in', 54, 'male ', '2084 Lacus. Road', 'Salem', 'OR', 'United States', 58970, '1690121519599', 1, 86, 'user '),
(3, 'Kaden Hutchinson', 'nunc.ac.mattis@atauctorullamcorper.org', 'id magna', 'dictum eleifend, nunc risus varius', 65, ' other', '2476 Quisque St.', 'Port Blair', 'AN', 'India', 795506, '1663022650499', 0, 74, ' admin'),
(4, 'Samantha Berry', 'eu@vulputatemauris.co.uk', 'turpis egestas.', 'sed pede nec ante blandit', 49, 'male ', '505-4053 Et Ave', 'Itanagar', 'AR', 'India', 488169, '1639062493599', 1, 14, 'user '),
(5, 'Amber Rodriguez', 'Nulla.eget@hendrerita.ca', 'Donec dignissim', 'mauris sagittis placerat. Cras dictum', 64, ' female ', 'Ap #821-8281 Sed, St.', 'Grand Island', 'NE', 'United States', 97457, '1639080216699', 1, 38, 'user '),
(6, 'Cassady Dudley', 'Aenean.sed.pede@Integer.co.uk', 'tincidunt congue', 'neque sed dictum eleifend, nunc', 23, 'male ', '450-599 Eget Av.', 'Raj Nandgaon', 'CT', 'India', 418583, '1637051222599', 0, 36, ' admin'),
(7, 'Brody Freeman', 'non@vitaesodales.org', 'sollicitudin adipiscing', 'turpis egestas. Aliquam fringilla cursus', 35, ' female ', 'P.O. Box 472, 9221 Aliquam Rd.', 'Guwahati', 'AS', 'India', 358577, '1641022365099', 1, 31, ' admin'),
(8, 'Venus Watson', 'Cras.dolor@inconsequat.ca', 'pede nec', 'elit. Aliquam auctor, velit eget', 85, ' other', '132-8157 Sapien, St.', 'Rohtak', 'HR', 'India', 423076, '1638110367099', 0, 69, 'user '),
(9, 'Judith Fisher', 'a@Sedeunibh.com', 'leo, in', 'auctor quis, tristique ac, eleifend', 11, ' other', '127-4662 Habitant Street', 'Nashville', 'TN', 'United States', 29991, '1638030218199', 0, 9, ' admin'),
(10, 'Tatyana Wolf', 'euismod@Nullam.edu', 'Nam porttitor', 'eget, dictum placerat, augue. Sed', 77, ' other', '4673 Vel Rd.', 'Cuttack', 'OR', 'India', 928665, '1688012737799', 0, 56, 'user '),
(11, 'Donna Ortega', 'rutrum@duiaugue.edu', 'lectus, a', 'metus urna convallis erat, eget', 83, ' female ', '7069 Quisque Ave', 'Dehradun', 'UT', 'India', 284323, '1679021479399', 0, 49, 'user '),
(12, 'Cally Morris', 'nibh@enimconsequat.co.uk', 'eu enim.', 'nibh dolor, nonummy ac, feugiat', 75, ' female ', '1368 Vitae Rd.', 'Salem', 'OR', 'United States', 49333, '1691021237099', 1, 1, ' admin'),
(13, 'Fuller Keller', 'non@mieleifend.com', 'enim. Mauris', 'eget laoreet posuere, enim nisl', 26, ' female ', '231-564 Elementum, St.', 'Bijapur', 'KA', 'India', 117655, '1624061184199', 1, 26, 'user '),
(14, 'Vanna Vaughn', 'eu@velfaucibus.com', 'Fusce diam', 'molestie dapibus ligula. Aliquam erat', 1, ' other', '241-2590 Ultricies Rd.', 'West Valley City', 'UT', 'United States', 51553, '1622040271199', 1, 24, ' admin'),
(15, 'Jonah Sullivan', 'arcu.eu@velquam.org', 'bibendum ullamcorper.', 'elit elit fermentum risus, at', 83, 'male ', '211-3492 Vulputate Road', 'Bhir', 'MH', 'India', 853645, '1629081601499', 1, 27, ' admin'),
(16, 'Lareina Peck', 'consectetuer.rhoncus.Nullam@dictumProineget.ca', 'nec luctus', 'nunc nulla vulputate dui, nec', 78, 'male ', '4301 Fringilla, Rd.', 'Dehri', 'BR', 'India', 148404, '1620100155599', 0, 22, ' admin'),
(17, 'Keane Waller', 'ut@Nullamfeugiatplacerat.edu', 'amet ornare', 'massa. Vestibulum accumsan neque et', 65, 'male ', 'P.O. Box 827, 9370 Fringilla Rd.', 'West Jordan', 'UT', 'United States', 96887, '1670093007699', 1, 20, ' admin'),
(18, 'Jael Scott', 'Nulla.interdum.Curabitur@et.co.uk', 'sollicitudin adipiscing', 'penatibus et magnis dis parturient', 41, 'male ', '318-9341 Pellentesque St.', 'Erode', 'TN', 'India', 391558, '1641052493899', 1, 29, ' admin'),
(19, 'Hanna Finley', 'et.magnis.dis@et.co.uk', 'eget odio.', 'Cras eget nisi dictum augue', 16, ' other', 'P.O. Box 794, 1221 A Rd.', 'Biloxi', 'MS', 'United States', 11344, '1665100542899', 0, 51, ' admin'),
(20, 'Xena Parrish', 'condimentum.Donec.at@sitametante.edu', 'eu, eleifend', 'rhoncus. Proin nisl sem, consequat', 57, ' female ', '4037 Sit St.', 'Bear', 'DE', 'United States', 17410, '1600011190199', 0, 15, ' admin'),
(21, 'Carl Walsh', 'ac@leoinlobortis.org', 'eu tellus.', 'ipsum. Suspendisse non leo. Vivamus', 37, ' other', 'P.O. Box 573, 7480 Ultrices. Rd.', 'Shimla', 'HP', 'India', 255620, '1685050470999', 1, 53, 'user '),
(22, 'Tyler Bruce', 'pharetra.nibh.Aliquam@feugiatmetus.ca', 'elementum purus,', 'Nulla facilisis. Suspendisse commodo tincidunt', 100, ' female ', '3152 Lorem Street', 'Kavaratti', 'LD', 'India', 428231, '1638062689799', 0, 77, 'user '),
(23, 'Isadora Mcdowell', 'velit@mollisDuissit.co.uk', 'varius ultrices,', 'ac mi eleifend egestas. Sed', 29, ' female ', '486-139 Mattis. Ave', 'Madison', 'WI', 'United States', 90991, '1609102216099', 1, 51, 'user '),
(24, 'Nina Vinson', 'luctus.et.ultrices@Fuscediamnunc.net', 'elit. Curabitur', 'eu sem. Pellentesque ut ipsum', 64, ' female ', 'P.O. Box 528, 9991 Tellus. St.', 'Chandler', 'AZ', 'United States', 86730, '1688060253099', 0, 89, 'user '),
(25, 'Karly Mcleod', 'dolor@sedsapienNunc.ca', 'enim. Etiam', 'non dui nec urna suscipit', 23, ' female ', 'P.O. Box 284, 6606 Vel Ave', 'Mobile', 'AL', 'United States', 35733, '1681011810799', 0, 54, ' admin'),
(26, 'Phelan Ramsey', 'ut.molestie.in@duiquis.com', 'pretium aliquet,', 'augue ac ipsum. Phasellus vitae', 43, ' female ', 'P.O. Box 442, 1754 Cursus. Av.', 'Aurora', 'IL', 'United States', 11112, '1693091542199', 0, 33, ' admin'),
(27, 'Cara Page', 'sodales@orciDonecnibh.ca', 'Aenean egestas', 'nec orci. Donec nibh. Quisque', 78, ' female ', 'P.O. Box 248, 9427 Pharetra Ave', 'Kota', 'RJ', 'India', 793791, '1690121465299', 0, 82, ' admin'),
(28, 'Cara Simmons', 'congue.elit.sed@mattisCras.edu', 'montes, nascetur', 'magna sed dui. Fusce aliquam,', 32, 'male ', 'Ap #735-6357 Vitae, Street', 'Owensboro', 'KY', 'United States', 48537, '1624111440599', 1, 89, ' admin'),
(29, 'Wynter Gay', 'pede@liberolacus.edu', 'malesuada augue', 'convallis in, cursus et, eros.', 16, 'male ', '846-6084 Elit, Rd.', 'Puri', 'OR', 'India', 622482, '1668071163299', 0, 2, 'user '),
(30, 'Ora Lott', '123@gmail.com', '123456789', 'nec mauris blandit mattis. Cras', 80, ' other', 'P.O. Box 287, 8954 Dolor. Rd.', 'North Barrackpur', 'WB', 'India', 544926, '1688110111599', 1, 43, ' admin'),
(31, 'Conan Hubbard', 'sed@aliquetProinvelit.com', 'feugiat nec,', 'Maecenas malesuada fringilla est. Mauris', 63, 'male ', 'Ap #941-4548 Blandit Road', 'Las Vegas', 'NV', 'United States', 95266, '1665031453599', 1, 86, 'user '),
(32, 'Cheryl Copeland', 'semper@molestiesodales.ca', 'dictum augue', 'Integer vitae nibh. Donec est', 91, 'male ', '548-2453 Accumsan Avenue', 'Darbhanga', 'BR', 'India', 865680, '1608121280499', 0, 34, 'user '),
(33, 'Murphy Avila', 'urna.suscipit@et.com', 'aliquet molestie', 'pharetra nibh. Aliquam ornare, libero', 70, 'male ', 'Ap #524-5128 Tincidunt Rd.', 'Itanagar', 'AR', 'India', 533192, '1647090534699', 1, 38, 'user '),
(34, 'Tyler Brown', 'Integer.vitae.nibh@nonquam.edu', 'et netus', 'at pede. Cras vulputate velit', 91, ' other', '2317 Cursus Avenue', 'Surendranagar', 'GJ', 'India', 203803, '1626051008599', 0, 8, ' admin'),
(35, 'Pearl Walsh', 'Donec.est.Nunc@Aliquamerat.com', 'felis purus', 'nec, diam. Duis mi enim,', 69, ' other', 'P.O. Box 241, 8160 Porta Street', 'Cheyenne', 'WY', 'United States', 10912, '1655030950499', 1, 14, 'user '),
(36, 'Ginger Andrews', 'ipsum.cursus@porttitorinterdumSed.ca', 'mauris. Integer', 'egestas blandit. Nam nulla magna,', 66, ' female ', 'Ap #414-7668 Mauris, St.', 'Miami', 'FL', 'United States', 40868, '1678081760299', 1, 35, ' admin'),
(37, 'Sebastian Jenkins', 'id.nunc.interdum@magnaNam.ca', 'ridiculus mus.', 'nec tempus mauris erat eget', 77, ' female ', '9521 Dui, Street', 'Sioux City', 'IA', 'United States', 68322, '1600071968199', 0, 41, ' admin'),
(38, 'Donna Long', 'facilisis@enimSed.org', 'purus. Maecenas', 'mauris elit, dictum eu, eleifend', 33, ' female ', '4671 Odio Avenue', 'Cambridge', 'MA', 'United States', 37471, '1688060360499', 0, 96, 'user '),
(39, 'Barclay Cummings', 'fringilla.mi.lacinia@egetnisidictum.co.uk', 'Aenean sed', 'non quam. Pellentesque habitant morbi', 65, ' female ', 'P.O. Box 764, 3692 Eleifend St.', 'Dehradun', 'UT', 'India', 816355, '1604072310499', 0, 35, 'user '),
(40, 'Quentin Horn', 'nunc.sit.amet@molestiearcu.org', 'ligula eu', 'leo. Vivamus nibh dolor, nonummy', 62, 'male ', 'P.O. Box 464, 7949 Nisl. Avenue', 'Evansville', 'IN', 'United States', 66134, '1685060779399', 1, 32, 'user '),
(41, 'Constance Austin', 'Etiam.bibendum.fermentum@risusodio.ca', 'sollicitudin orci', 'facilisis non, bibendum sed, est.', 98, ' other', 'P.O. Box 534, 8273 Sollicitudin St.', 'Port Blair', 'AN', 'India', 621916, '1698082807399', 0, 2, 'user '),
(42, 'Coby Whitley', 'luctus@aneque.edu', 'eget laoreet', 'est, congue a, aliquet vel,', 72, ' female ', 'P.O. Box 554, 3665 Phasellus St.', 'Mesa', 'AZ', 'United States', 85534, '1619100539199', 0, 90, 'user '),
(43, 'Quynn Hood', 'metus.eu.erat@arcuimperdietullamcorper.net', 'nulla. Cras', 'ac, eleifend vitae, erat. Vivamus', 82, 'male ', '776-8606 Mollis Avenue', 'Bettiah', 'BR', 'India', 632180, '1651051234299', 1, 37, 'user '),
(44, 'Wesley Nicholson', 'eget@justo.net', 'Aliquam auctor,', 'orci, adipiscing non, luctus sit', 15, ' female ', '598-5702 Nibh. Avenue', 'Grand Rapids', 'MI', 'United States', 29575, '1625122082599', 1, 100, ' admin'),
(45, 'Ori Benson', 'parturient@Quisqueporttitor.org', 'urna convallis', 'a felis ullamcorper viverra. Maecenas', 95, ' other', 'Ap #957-855 Magnis Ave', 'Guntakal', 'AP', 'India', 857218, '1654112911299', 1, 11, ' admin'),
(46, 'Kylan Parrish', 'vehicula@leoelementum.org', 'egestas. Duis', 'nunc ac mattis ornare, lectus', 82, ' female ', '1467 Ultrices. Ave', 'Shimoga', 'KA', 'India', 180613, '1686011889199', 1, 38, ' admin'),
(47, 'Wilma Pitts', 'Donec.luctus.aliquet@nislelementum.net', 'rutrum lorem', 'sapien imperdiet ornare. In faucibus.', 65, 'male ', '125-325 Sociis Rd.', 'Bikaner', 'RJ', 'India', 570456, '1651080256299', 0, 3, 'user '),
(48, 'Colby Mcgowan', 'lacus.Quisque@penatibuset.ca', 'orci lobortis', 'in magna. Phasellus dolor elit,', 90, ' female ', 'P.O. Box 294, 8592 Nibh Rd.', 'Columbus', 'GA', 'United States', 23390, '1639071844799', 0, 39, 'user '),
(49, 'Ayanna Ball', 'fermentum@ornareelitelit.co.uk', 'neque. In', 'diam lorem, auctor quis, tristique', 88, ' other', 'Ap #783-2328 Vulputate, Avenue', 'Columbia', 'MO', 'United States', 53669, '1680060226399', 0, 8, ' admin'),
(50, 'Yeo Donaldson', 'dui.Cras.pellentesque@dictummagna.com', 'sociis natoque', 'purus, in molestie tortor nibh', 47, 'male ', '6176 Neque St.', 'Des Moines', 'IA', 'United States', 46525, '1621092538999', 1, 64, 'user '),
(51, 'Ray Sweeney', 'id.sapien@tempusscelerisquelorem.co.uk', 'mi fringilla', 'sem mollis dui, in sodales', 21, ' female ', '3464 Quisque St.', 'Helena', 'MT', 'United States', 19052, '1622030219499', 1, 28, 'user '),
(52, 'Ashely Vaughn', 'interdum.Sed@nisiCumsociis.org', 'erat. Etiam', 'placerat velit. Quisque varius. Nam', 85, 'male ', 'Ap #100-5802 Egestas Street', 'Columbia', 'MO', 'United States', 60603, '1666092466399', 0, 57, 'user '),
(53, 'Logan Ortega', 'eros.Proin@natoquepenatibuset.net', 'semper tellus', 'in sodales elit erat vitae', 94, ' other', 'Ap #237-6974 A Avenue', 'West Jordan', 'UT', 'United States', 52985, '1657102015599', 0, 97, 'user '),
(54, 'Igor Harper', 'Sed.dictum.Proin@feugiat.ca', 'id risus', 'ullamcorper eu, euismod ac, fermentum', 92, ' other', '8022 Sit Street', 'Broken Arrow', 'OK', 'United States', 63617, '1600053023999', 0, 97, ' admin'),
(55, 'Aidan Parks', 'eu.ultrices.sit@Fuscemi.ca', 'bibendum. Donec', 'non, luctus sit amet, faucibus', 51, 'male ', 'P.O. Box 683, 8672 Enim. Avenue', 'Cochin', 'KL', 'India', 435952, '1608101608499', 1, 29, ' admin'),
(56, 'Boris May', 'ut@famesac.edu', 'malesuada ut,', 'massa. Suspendisse eleifend. Cras sed', 56, ' female ', 'P.O. Box 256, 9265 Non Rd.', 'Biloxi', 'MS', 'United States', 14570, '1620020730499', 1, 17, ' admin'),
(57, 'Chandler Burt', 'malesuada.ut.sem@consectetuer.co.uk', 'at, velit.', 'Cras interdum. Nunc sollicitudin commodo', 61, ' other', 'Ap #553-1129 Dolor, St.', 'Chesapeake', 'VA', 'United States', 38249, '1656022970099', 0, 7, ' admin'),
(58, 'Patience Camacho', 'sed.libero@amet.co.uk', 'nascetur ridiculus', 'per conubia nostra, per inceptos', 48, ' female ', '396-3897 Metus Road', 'Richmond', 'VA', 'United States', 54342, '1694042502999', 0, 20, 'user '),
(59, 'Arden Sims', 'lobortis@auguemalesuadamalesuada.com', 'leo. Cras', 'dignissim tempor arcu. Vestibulum ut', 14, 'male ', 'P.O. Box 675, 6257 Vel Rd.', 'Shimla', 'HP', 'India', 415417, '1665092540299', 1, 75, ' admin'),
(60, 'Kendall Davenport', 'sodales@eutemporerat.org', 'enim commodo', 'Sed malesuada augue ut lacus.', 58, ' other', '4027 Montes, Avenue', 'Agartala', 'TR', 'India', 190049, '1679092402499', 1, 35, 'user '),
(61, 'Rhiannon Moss', 'non.feugiat@tinciduntaliquamarcu.edu', 'augue, eu', 'elit, dictum eu, eleifend nec,', 90, ' other', 'Ap #493-8958 Interdum Ave', 'Gangtok', 'SK', 'India', 804834, '1667022233999', 0, 93, 'user '),
(62, 'Adam Hartman', 'luctus@quis.edu', 'eu elit.', 'dictum. Proin eget odio. Aliquam', 88, ' other', '400-1968 Vel Rd.', 'West Jordan', 'UT', 'United States', 93387, '1685031887199', 0, 54, ' admin'),
(63, 'Hadley Russo', 'pellentesque@aaliquetvel.net', 'consectetuer mauris', 'amet metus. Aliquam erat volutpat.', 85, ' other', 'P.O. Box 366, 6972 Per Street', 'Rochester', 'MN', 'United States', 50625, '1658101429399', 1, 37, ' admin'),
(64, 'Abdul Huffman', 'quam@anteMaecenasmi.org', 'aliquet. Proin', 'lacus pede sagittis augue, eu', 41, ' female ', '872-4616 Eu Rd.', 'Jaipur', 'RJ', 'India', 179122, '1679040807699', 1, 16, ' admin'),
(65, 'Ivor Case', 'risus.a@malesuadafringilla.net', 'lorem semper', 'condimentum. Donec at arcu. Vestibulum', 100, ' other', 'Ap #932-3578 In Ave', 'Missoula', 'MT', 'United States', 82258, '1643082461399', 0, 96, ' admin'),
(66, 'Fletcher Bonner', 'Morbi@diam.com', 'sed dui.', 'Phasellus elit pede, malesuada vel,', 69, ' female ', '9195 Adipiscing Ave', 'Patna', 'BR', 'India', 625385, '1667090236299', 1, 13, 'user '),
(67, 'Linda Byers', 'nunc.risus@nibhPhasellusnulla.co.uk', 'quis arcu', 'Nulla facilisis. Suspendisse commodo tincidunt', 85, ' other', 'Ap #650-6401 Vitae Rd.', 'Delhi', 'DL', 'India', 551131, '1632030617599', 1, 56, 'user '),
(68, 'Jorden Lester', 'neque.venenatis.lacus@turpis.org', 'Mauris blandit', 'mus. Donec dignissim magna a', 63, ' other', '5845 Ligula. Ave', 'Jammu', 'JK', 'India', 951586, '1685121988199', 1, 2, ' admin'),
(69, 'Kai Perry', 'nunc.id.enim@anequeNullam.ca', 'nec, eleifend', 'urna suscipit nonummy. Fusce fermentum', 25, ' female ', '431-2478 Malesuada Rd.', 'Overland Park', 'KS', 'United States', 37513, '1687082132699', 0, 13, ' admin'),
(70, 'Gwendolyn Meyers', 'Quisque.imperdiet.erat@etmagnis.com', 'magnis dis', 'ornare. In faucibus. Morbi vehicula.', 15, ' other', 'Ap #981-3680 Orci. Road', 'Milwaukee', 'WI', 'United States', 67279, '1639110270999', 1, 63, 'user '),
(71, 'Ivy Berg', 'dignissim.tempor.arcu@Nullamlobortisquam.co.uk', 'Donec porttitor', 'enim, gravida sit amet, dapibus', 16, ' female ', 'P.O. Box 384, 3743 Arcu. Street', 'Paradise', 'NV', 'United States', 96453, '1607100802199', 0, 80, 'user '),
(72, 'Keegan Conley', 'In.condimentum.Donec@CuraePhasellus.com', 'orci lacus', 'dis parturient montes, nascetur ridiculus', 25, ' other', '9582 Id St.', 'Agartala', 'TR', 'India', 799985, '1663080535399', 1, 78, 'user '),
(73, 'Rigel Romero', 'egestas.a@in.ca', 'molestie orci', 'et, rutrum non, hendrerit id,', 59, ' female ', 'P.O. Box 919, 1379 Mauris Road', 'Gangtok', 'SK', 'India', 208529, '1680061163899', 1, 38, 'user '),
(74, 'Lamar Dunn', 'faucibus@vitaedolorDonec.co.uk', 'Donec feugiat', 'nulla. Donec non justo. Proin', 30, ' female ', 'Ap #622-8476 Lacus, Street', 'Itanagar', 'AR', 'India', 147220, '1664082651499', 1, 75, 'user '),
(75, 'Cain Glover', 'dolor.nonummy.ac@libero.edu', 'eu, accumsan', 'consectetuer rhoncus. Nullam velit dui,', 69, ' other', 'P.O. Box 232, 7641 Arcu. Road', 'Bhilai', 'CT', 'India', 719442, '1677061452599', 1, 28, ' admin'),
(76, 'Eaton Goodwin', 'orci@Donecsollicitudinadipiscing.ca', 'dis parturient', 'est. Nunc laoreet lectus quis', 62, 'male ', '109-9087 Ornare Rd.', 'Kavaratti', 'LD', 'India', 779668, '1680051488099', 1, 99, ' admin'),
(77, 'Camilla Sawyer', 'senectus.et@variusultrices.ca', 'orci, adipiscing', 'eleifend vitae, erat. Vivamus nisi.', 40, ' female ', '615-3256 Maecenas St.', 'Shimla', 'HP', 'India', 239269, '1618112258599', 1, 46, 'user '),
(78, 'Quintessa Grant', 'nonummy@odio.ca', 'sit amet', 'lacinia at, iaculis quis, pede.', 44, 'male ', '2069 Quam. St.', 'North Las Vegas', 'NV', 'United States', 77275, '1628091736499', 1, 24, 'user '),
(79, 'Vivian Bowman', 'ac.orci.Ut@dignissimmagnaa.net', 'Maecenas ornare', 'nonummy ipsum non arcu. Vivamus', 58, 'male ', 'Ap #872-7916 Ridiculus Road', 'Sitapur', 'UP', 'India', 369971, '1679110877899', 1, 57, ' admin'),
(80, 'Medge Lara', 'ornare.placerat.orci@tristiquealiquet.co.uk', 'adipiscing elit.', 'condimentum. Donec at arcu. Vestibulum', 20, ' female ', '9513 Massa. St.', 'Portland', 'ME', 'United States', 91295, '1641071370099', 1, 66, ' admin'),
(81, 'Rajah Arnold', 'Quisque@odio.edu', 'pellentesque a,', 'Vestibulum ante ipsum primis in', 41, ' other', '9636 Tempor St.', 'Kurnool', 'AP', 'India', 422467, '1694020179399', 1, 6, ' admin'),
(82, 'Meredith Holmes', 'ut.pharetra@pede.edu', 'Nullam scelerisque', 'Pellentesque ut ipsum ac mi', 80, ' female ', 'P.O. Box 598, 4328 Sed Avenue', 'Agartala', 'TR', 'India', 850931, '1679031034299', 1, 51, ' admin'),
(83, 'Kirestin Carver', 'lobortis@odio.net', 'eu, ultrices', 'ipsum primis in faucibus orci', 44, 'male ', 'P.O. Box 762, 1712 Aenean Ave', 'Moradabad', 'UP', 'India', 648199, '1662012008899', 0, 73, ' admin'),
(84, 'Odessa Lambert', 'dolor.sit.amet@tempordiamdictum.edu', 'penatibus et', 'velit justo nec ante. Maecenas', 66, ' other', '1918 Vestibulum Rd.', 'Silvassa', 'DN', 'India', 381215, '1662071757899', 1, 31, ' admin'),
(85, 'Jocelyn Simpson', 'lacus.pede@nec.ca', 'id, erat.', 'et risus. Quisque libero lacus,', 73, 'male ', 'Ap #383-8519 Cursus St.', 'Oklahoma City', 'OK', 'United States', 19276, '1610112325099', 0, 85, 'user '),
(86, 'Harding Robles', 'sed.dictum.eleifend@InfaucibusMorbi.com', 'sed dictum', 'lobortis mauris. Suspendisse aliquet molestie', 36, ' other', 'Ap #139-5537 Eu Ave', 'Auburn', 'ME', 'United States', 76791, '1637120808899', 0, 15, 'user '),
(87, 'Nero Mcleod', 'Donec.vitae@ami.ca', 'lectus justo', 'ligula. Aenean gravida nunc sed', 3, ' female ', 'Ap #939-6996 Nisi. Av.', 'Chandler', 'AZ', 'United States', 85886, '1625122547999', 1, 13, 'user '),
(88, 'Stacy Lewis', 'Fusce.mollis.Duis@velconvallisin.ca', 'Nunc commodo', 'In tincidunt congue turpis. In', 60, ' other', 'Ap #794-7944 Aliquet Street', 'Etawah', 'UP', 'India', 459146, '1688010738899', 1, 98, 'user '),
(89, 'Willow Mitchell', 'commodo@elitdictumeu.com', 'est, vitae', 'Maecenas mi felis, adipiscing fringilla,', 53, 'male ', 'Ap #188-7628 Cursus Av.', 'Shillong', 'ML', 'India', 620201, '1632042023599', 0, 88, ' admin'),
(90, 'Amela Jimenez', 'eu.odio.Phasellus@etipsum.edu', 'nonummy ipsum', 'dui. Cras pellentesque. Sed dictum.', 99, ' female ', 'P.O. Box 462, 4080 Imperdiet Street', 'Latur', 'MH', 'India', 616728, '1692092581199', 0, 74, ' admin'),
(91, 'India Roman', 'nascetur.ridiculus.mus@pellentesqueegetdictum.edu', 'Cum sociis', 'nec enim. Nunc ut erat.', 56, ' female ', 'Ap #804-2375 Risus. St.', 'Port Blair', 'AN', 'India', 500351, '1611071306499', 1, 99, ' admin'),
(92, 'Kenneth Daniels', 'leo.Cras.vehicula@orcilacus.ca', 'sociis natoque', 'nec, imperdiet nec, leo. Morbi', 86, 'male ', '474-8036 Donec St.', 'Raurkela Civil Township', 'OR', 'India', 159939, '1647053006199', 1, 6, 'user '),
(93, 'Lawrence Henson', 'felis@Morbineque.edu', 'ante, iaculis', 'ultrices a, auctor non, feugiat', 91, ' female ', '1767 A Rd.', 'Covington', 'KY', 'United States', 39203, '1662011729899', 0, 6, 'user '),
(94, 'Jael Ramsey', 'velit.egestas.lacinia@quisdiamluctus.ca', 'orci. Ut', 'tincidunt, nunc ac mattis ornare,', 37, ' female ', '3920 Eget Ave', 'Aizwal', 'MZ', 'India', 811545, '1668112848699', 1, 27, 'user '),
(95, 'Jerry Chambers', 'tellus.Suspendisse@semNulla.edu', 'sed dolor.', 'aliquet, sem ut cursus luctus,', 53, ' female ', '2928 Luctus Street', 'Salt Lake City', 'UT', 'United States', 97023, '1642070350299', 1, 1, 'user '),
(96, 'Deirdre Blevins', 'Proin.vel@dictumeu.co.uk', 'tempus risus.', 'nascetur ridiculus mus. Proin vel', 52, ' female ', '468 Sed Av.', 'Portland', 'ME', 'United States', 37042, '1649102989099', 0, 30, 'user '),
(97, 'Stone Acosta', 'fringilla.Donec@dolor.ca', 'consectetuer adipiscing', 'erat eget ipsum. Suspendisse sagittis.', 50, ' other', '525-5397 Rutrum Rd.', 'Aizwal', 'MZ', 'India', 573280, '1693091576799', 1, 56, 'user '),
(98, 'Brenna Howe', 'Nullam.suscipit.est@luctusaliquetodio.ca', 'ut, nulla.', 'vitae nibh. Donec est mauris,', 98, ' other', '278-803 Magna. Rd.', 'Chandigarh', 'CH', 'India', 655982, '1601061056199', 0, 2, ' admin'),
(99, 'Tiger Wise', 'ac.orci@feugiatplaceratvelit.ca', 'eu neque', 'at auctor ullamcorper, nisl arcu', 13, ' female ', 'P.O. Box 974, 5800 Ut Avenue', 'Iowa City', 'IA', 'United States', 43084, '1617051779999', 1, 89, 'user '),
(100, 'Rigel Vazquez', 'amet.consectetuer@nunc.net', 'Curabitur sed', 'iaculis odio. Nam interdum enim', 65, 'male ', 'P.O. Box 959, 740 Sed, Rd.', 'Itanagar', 'AR', 'India', 611925, '1629053078999', 0, 80, 'user ');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `product_id` blob NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `delivery_charges` int(3) NOT NULL,
  `tax_amount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `SKUID` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `product_desc` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `product_name` varchar(43) CHARACTER SET utf8 DEFAULT NULL,
  `product_mrp` int(11) DEFAULT NULL,
  `product_selling_price` int(11) DEFAULT NULL,
  `audience_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `body_colour` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `collor` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `sleeve` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `product_fabric` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `SKUID`, `product_desc`, `product_name`, `product_mrp`, `product_selling_price`, `audience_id`, `category_id`, `featured`, `body_colour`, `collor`, `sleeve`, `product_fabric`, `size`) VALUES
(1, 'OCSLNFSH3001', 'Look all cool in Pure linen shirt. Go Simple, Look clean. This has a nechband contrast, cuff contrast. Regular Collar', 'Oxford Club Men''s Solid Casual Shirt', 1999, 1099, 2, 1, 0, 'LT. Pink', 'REGULAR', 'full sleeve', '100% Linen', 39404244),
(2, 'OCSLNFSH3002', 'Look all cool in Pure linen shirt. Go Simple, Look clean. This has a nechband contrast, cuff contrast. Regular Collar', 'Oxford Club Men''s Solid Casual Shirt', 1999, 1099, 2, 1, 0, 'Wheat', 'REGULAR', 'full sleeve', '100% Linen', 39404244),
(3, 'OCSLNFSH3003', 'Look all cool in Pure linen shirt. Go Simple, Look clean. This has a nechband contrast, cuff contrast. Regular Collar', 'Oxford Club Men''s Solid Casual Shirt', 1999, 1099, 2, 1, 0, 'Baige', 'REGULAR', 'full sleeve', '100% Linen', 39404244),
(4, 'OCSLNFSH3004', 'Look all cool in Pure linen shirt. Go Simple, Look clean. This has a nechband contrast, cuff contrast. Regular Collar', 'Oxford Club Men''s Solid Casual Shirt', 1999, 1099, 2, 1, 0, 'Khaki', 'REGULAR', 'full sleeve', '100% Linen', 39404244),
(5, 'OCSLNFSH3006', 'What''s classier than an Oxford Button-down Shirt. A contrast piping detail on neckband. Got the Perfect shirt For Office today', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Lt blue', 'Button-down', 'full sleeve', 'PPO', 39404244),
(6, 'OCSLNFSH3009', 'What''s classier than an Oxford Button-down Shirt. A contrast piping detail on neckband. Got the Perfect shirt For Office today', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Orange', 'Button-down', 'full sleeve', 'PPO', 39404244),
(7, 'OCSLNFSH3010', 'What''s classier than an Oxford Button-down Shirt. A contrast piping detail on neckband. Got the Perfect shirt For Office today', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Dark Blue', 'Button-down', 'full sleeve', 'PPO', 39404244),
(8, 'OCSLNFSH3011', 'Go Print This season again. Wear this Premiun shirt and look Sassy at Work. Contrast detail on neckband and inner cuffs. Button-down Collar.', 'Oxford Club Men''s Printed Casual Shirt', 1599, 899, 2, 1, 0, 'Orange', 'Button-down', 'full sleeve', '100% Cotton', 39404244),
(9, 'OCSLNFSH3012', 'Go Print This season again. Wear this Premiun shirt and look Sassy at Work. Contrast detail on neckband and inner cuffs. Button-down Collar.', 'Oxford Club Men''s Printed Casual Shirt', 1599, 899, 2, 1, 0, 'Blue', 'Button-down', 'full sleeve', '100% Cotton', 39404244),
(10, 'OCSLNFSH3013', 'Go Print This season again. Wear this Premiun shirt and look Sassy at Work. Contrast detail on neckband and inner cuffs. Button-down Collar.', 'Oxford Club Men''s Printed Casual Shirt', 1599, 899, 2, 1, 0, 'Charcoal', 'Button-down', 'full sleeve', '100% Cotton', 39404244),
(11, 'OCSLNFSH3018', 'Cool for the Summer. Premium and Stylized Linen with Mandarin collar. Contrast on Inner cuffs and inner neckband. ', 'Oxford Club Men''s Solid Casual Shirt', 1699, 999, 2, 1, 0, 'Dark Blue', 'Mandarin', 'full sleeve', 'Linen Blend', 39404244),
(12, 'OCSLNFSH3019', 'Cool for the Summer. Premium and Stylized Linen with Mandarin collar. Contrast on Inner cuffs and inner neckband. ', 'Oxford Club Men''s Solid Casual Shirt', 1699, 999, 2, 1, 0, 'orange', 'Mandarin', 'full sleeve', 'Linen Blend', 39404244),
(13, 'OCFS1505', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Printed Casual Shirt', 1599, 899, 2, 1, 0, 'Light Blue', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(14, 'OCFS1502', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Printed Casual Shirt', 1599, 899, 2, 1, 0, 'Purple', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(15, 'OSFS1501', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Printed Casual Shirt', 1599, 899, 2, 1, 0, 'Green', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(16, 'OCFS475AX', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Checks Casual Shirt', 1599, 899, 2, 1, 0, 'Multi', 'Regular', 'full sleeve', 'Cotton', 394042),
(17, 'OCFS475BX', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Checks Casual Shirt', 1599, 899, 2, 1, 0, 'Multi', 'Regular', 'full sleeve', 'Cotton', 394042),
(18, 'OCFS400AX', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Checks Casual Shirt', 1599, 899, 2, 1, 0, 'Multi', 'Regular', 'full sleeve', 'Cotton', 394042),
(19, 'OCFS405AX', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Checks Casual Shirt', 1599, 899, 2, 1, 0, 'Multi', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(20, 'OCFS639AX', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Checks Casual Shirt', 1599, 899, 2, 1, 0, 'Red', 'Regular', 'full sleeve', 'Cotton', 394042),
(21, 'OCFS400BX', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Checks Casual Shirt', 1599, 899, 2, 1, 0, 'Multi', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(22, 'OCFS44121', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Pink', 'Regular', 'full sleeve', 'Cotton', 394042),
(23, 'OCFS44119', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Blue', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(24, 'OCFS44115', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Light Green', 'Regular', 'full sleeve', 'Cotton', 394042),
(25, 'OCFS44114', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Beige', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(26, 'OCFSBLCH', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Blue', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(27, 'OCFSYLCH', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Yellow', 'Button Down Collar', 'full sleeve', 'Cotton', 394042),
(28, 'OCFSRDCH', 'A 100% Premium Cotton Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1499, 799, 2, 1, 0, 'Red', 'Cut-Away Collar', 'full sleeve', 'Cotton', 394042),
(29, 'OCFSOF0624009-3', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Printed Casual Shirt', 2199, 1199, 2, 1, 0, 'Brown', 'Classic collar', 'full sleeve', 'Linen', 394042),
(30, 'OCFSOF0222567-2', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Striped Casual Shirt', 2099, 1149, 2, 1, 0, 'Multi', 'Classic collar', 'full sleeve', 'Linen', 394042),
(31, 'OCFSOF0721597-1', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Printed Casual Shirt', 2199, 1199, 2, 1, 0, 'White', 'Classic collar', 'full sleeve', 'Linen', 394042),
(32, 'OCFSOF0622899-3', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Houndsstooth Casual Shirt', 1999, 1099, 2, 1, 0, 'Purple', 'Classic collar', 'full sleeve', 'Linen', 394042),
(33, 'OCFSOF0622899-4', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Houndsstooth Casual Shirt', 1999, 1099, 2, 1, 0, 'Blue', 'Classic collar', 'full sleeve', 'Linen', 394042),
(34, 'OCFSOF085003-70', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1999, 1099, 2, 1, 0, 'Red', 'Classic collar', 'full sleeve', 'Linen', 394042),
(35, 'OCFSOF085003-19', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1999, 1099, 2, 1, 0, 'Orange', 'Classic collar', 'full sleeve', 'Linen', 394042),
(36, 'OCFSOF085003-2', 'A 100% Premium Linen Shirt incorporated with handsomely selected aesthetic elements. Pair with Crisp Chinos and Loafers to get the premium sport look', 'Oxford Club Men''s Solid Casual Shirt', 1999, 1099, 2, 1, 0, 'Pink', 'Classic collar', 'full sleeve', 'Linen', 394042);

-- --------------------------------------------------------

--
-- Table structure for table `product_audience`
--

CREATE TABLE `product_audience` (
  `audience_id` int(11) NOT NULL,
  `audience_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_audience`
--

INSERT INTO `product_audience` (`audience_id`, `audience_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(5, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `product_by_seller`
--

CREATE TABLE `product_by_seller` (
  `seller_id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories_list`
--

CREATE TABLE `product_categories_list` (
  `category_id` int(20) NOT NULL,
  `categories` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories_list`
--

INSERT INTO `product_categories_list` (`category_id`, `categories`) VALUES
(2, 'cat1'),
(3, 'cat2'),
(4, 'cat3');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_img_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_id` bigint(20) NOT NULL,
  `product_desc` text NOT NULL,
  `product_name` text NOT NULL,
  `product_cost` int(11) NOT NULL,
  `audience_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_fabric` text NOT NULL,
  `featured` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_patterns`
--

CREATE TABLE `product_patterns` (
  `pattern_id` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_pattern_images`
--

CREATE TABLE `product_pattern_images` (
  `image_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  `image1_url` text NOT NULL,
  `image2_url` text NOT NULL,
  `image3_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_pattern_measurements`
--

CREATE TABLE `product_pattern_measurements` (
  `measure_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  `measure_1` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_pattern_quantity`
--

CREATE TABLE `product_pattern_quantity` (
  `quantity_id` int(11) NOT NULL,
  `measure_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `tag_relation` int(11) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `design_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`tag_relation`, `tag_id`, `product_id`, `design_id`) VALUES
(93, 48, 76, 49),
(94, 49, 76, 49),
(95, 50, 76, 49),
(96, 51, 76, 49),
(97, 75, 76, 49),
(98, 76, 76, 49),
(99, 75, 76, 49),
(100, 77, 76, 49),
(101, 52, 76, 49),
(102, 53, 76, 49),
(103, 56, 76, 49),
(104, 78, 77, 50),
(105, 76, 77, 50),
(106, 79, 77, 50),
(107, 80, 77, 50),
(108, 53, 77, 50),
(109, 81, 77, 50),
(110, 82, 77, 50),
(111, 83, 78, 51),
(112, 84, 78, 51),
(113, 85, 78, 51),
(114, 86, 78, 51),
(115, 54, 78, 51),
(116, 81, 78, 51),
(117, 80, 78, 51),
(118, 56, 78, 51);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag_list`
--

CREATE TABLE `product_tag_list` (
  `tag_id` bigint(20) NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tag_list`
--

INSERT INTO `product_tag_list` (`tag_id`, `tags`) VALUES
(54, 'blend'),
(50, 'blue'),
(53, 'cotton'),
(78, 'database'),
(56, 'female'),
(84, 'india'),
(79, 'jackadd'),
(76, 'killer'),
(85, 'kurta'),
(82, 'male'),
(77, 'mas'),
(83, 'pakistan'),
(81, 'prada'),
(48, 'red'),
(86, 'salwar'),
(49, 'shirt'),
(52, 'silk'),
(55, 'swade'),
(51, 'vicot'),
(80, 'wool');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `company_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `u_name`, `password`, `email`, `company_name`) VALUES
(2, 'tysonkidd', '123456789', 'gujjartapan@yahoo.com', 'company');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  `purchased` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cart_id`, `user_id`, `pattern_id`, `purchased`) VALUES
(1, 14, 14, 0),
(2, 14, 14, 0),
(3, 14, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `user_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasho_user`
--
ALTER TABLE `fasho_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `nx9_users`
--
ALTER TABLE `nx9_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);
ALTER TABLE `nx9_users` ADD FULLTEXT KEY `p_role` (`p_role`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_audience`
--
ALTER TABLE `product_audience`
  ADD PRIMARY KEY (`audience_id`);

--
-- Indexes for table `product_by_seller`
--
ALTER TABLE `product_by_seller`
  ADD PRIMARY KEY (`seller_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_categories_list`
--
ALTER TABLE `product_categories_list`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `categories` (`categories`),
  ADD KEY `categories_2` (`categories`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `audience_id` (`audience_id`);

--
-- Indexes for table `product_patterns`
--
ALTER TABLE `product_patterns`
  ADD PRIMARY KEY (`pattern_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `pattern_id` (`pattern_id`);

--
-- Indexes for table `product_pattern_images`
--
ALTER TABLE `product_pattern_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `pattern_id` (`pattern_id`);

--
-- Indexes for table `product_pattern_measurements`
--
ALTER TABLE `product_pattern_measurements`
  ADD PRIMARY KEY (`measure_id`),
  ADD KEY `pattern_id` (`pattern_id`);

--
-- Indexes for table `product_pattern_quantity`
--
ALTER TABLE `product_pattern_quantity`
  ADD PRIMARY KEY (`quantity_id`),
  ADD KEY `measure_id` (`measure_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`tag_relation`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `design_id` (`design_id`);

--
-- Indexes for table `product_tag_list`
--
ALTER TABLE `product_tag_list`
  ADD PRIMARY KEY (`tag_id`),
  ADD UNIQUE KEY `tags` (`tags`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `pattern_id` (`pattern_id`),
  ADD KEY `wishlist_id` (`wishlist_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `wishlist_id_2` (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasho_user`
--
ALTER TABLE `fasho_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nx9_users`
--
ALTER TABLE `nx9_users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_audience`
--
ALTER TABLE `product_audience`
  MODIFY `audience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_categories_list`
--
ALTER TABLE `product_categories_list`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `product_patterns`
--
ALTER TABLE `product_patterns`
  MODIFY `pattern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `product_pattern_images`
--
ALTER TABLE `product_pattern_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `product_pattern_measurements`
--
ALTER TABLE `product_pattern_measurements`
  MODIFY `measure_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_pattern_quantity`
--
ALTER TABLE `product_pattern_quantity`
  MODIFY `quantity_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `tag_relation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `product_tag_list`
--
ALTER TABLE `product_tag_list`
  MODIFY `tag_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_by_seller`
--
ALTER TABLE `product_by_seller`
  ADD CONSTRAINT `product_by_seller_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_by_seller_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `product_list_ibfk_1` FOREIGN KEY (`audience_id`) REFERENCES `product_audience` (`audience_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_list_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `product_categories_list` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `product_patterns`
--
ALTER TABLE `product_patterns`
  ADD CONSTRAINT `product_patterns_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pattern_images`
--
ALTER TABLE `product_pattern_images`
  ADD CONSTRAINT `product_pattern_images_ibfk_1` FOREIGN KEY (`pattern_id`) REFERENCES `product_patterns` (`pattern_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pattern_measurements`
--
ALTER TABLE `product_pattern_measurements`
  ADD CONSTRAINT `product_pattern_measurements_ibfk_1` FOREIGN KEY (`pattern_id`) REFERENCES `product_patterns` (`pattern_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pattern_quantity`
--
ALTER TABLE `product_pattern_quantity`
  ADD CONSTRAINT `product_pattern_quantity_ibfk_1` FOREIGN KEY (`measure_id`) REFERENCES `product_pattern_measurements` (`measure_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD CONSTRAINT `user_wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fasho_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_wishlist_ibfk_2` FOREIGN KEY (`pattern_id`) REFERENCES `product_patterns` (`pattern_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 05:18 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fashonat_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasho_user`
--

CREATE TABLE IF NOT EXISTS `fasho_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(12) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `fasho_user`
--

INSERT INTO `fasho_user` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(5, 'india', '123@gmail.com', 'pass', 'user'),
(7, 'alikaleach', 'sed.dictum@odio.co.uk', 'mitempor', 'user '),
(8, 'lucycastro', 'eget@vitae.ca', 'euerat', 'user '),
(9, 'kadenhutchinson', 'nunc.ac.mattis@atauctorullamcorper.org', 'idmagna', ' admin'),
(10, 'samanthaberry', 'eu@vulputatemauris.co.uk', 'turpisegestas.', 'user '),
(11, 'amberrodriguez', 'Nulla.eget@hendrerita.ca', 'donecdignissim', 'user '),
(12, 'cassadydudley', 'Aenean.sed.pede@Integer.co.uk', 'tinciduntcongue', ' admin'),
(13, 'brodyfreeman', 'non@vitaesodales.org', 'sollicitudinadipiscing', ' admin'),
(14, 'venuswatson', 'Cras.dolor@inconsequat.ca', 'pedenec', 'user '),
(15, 'judithfisher', 'a@Sedeunibh.com', 'leo,in', ' admin'),
(16, 'tatyanawolf', 'euismod@Nullam.edu', 'namporttitor', 'user '),
(17, 'donnaortega', 'rutrum@duiaugue.edu', 'lectus,a', 'user '),
(18, 'callymorris', 'nibh@enimconsequat.co.uk', 'euenim.', ' admin'),
(19, 'fullerkeller', 'non@mieleifend.com', 'enim.mauris', 'user '),
(20, 'vannavaughn', 'eu@velfaucibus.com', 'fuscediam', ' admin'),
(21, 'jonahsullivan', 'arcu.eu@velquam.org', 'bibendumullamcorper.', ' admin'),
(22, 'lareinapeck', 'consectetuer.rhoncus.Nullam@dictumProineget.ca', 'necluctus', ' admin'),
(23, 'keanewaller', 'ut@Nullamfeugiatplacerat.edu', 'ametornare', ' admin'),
(24, 'jaelscott', 'Nulla.interdum.Curabitur@et.co.uk', 'sollicitudinadipiscing', ' admin'),
(25, 'hannafinley', 'et.magnis.dis@et.co.uk', 'egetodio.', ' admin'),
(26, 'xenaparrish', 'condimentum.Donec.at@sitametante.edu', 'eu,eleifend', ' admin'),
(27, 'carlwalsh', 'ac@leoinlobortis.org', 'eutellus.', 'user '),
(28, 'tylerbruce', 'pharetra.nibh.Aliquam@feugiatmetus.ca', 'elementumpurus,', 'user '),
(29, 'isadoramcdowell', 'velit@mollisDuissit.co.uk', 'variusultrices,', 'user '),
(30, 'ninavinson', 'luctus.et.ultrices@Fuscediamnunc.net', 'elit.curabitur', 'user '),
(31, 'karlymcleod', 'dolor@sedsapienNunc.ca', 'enim.etiam', ' admin'),
(32, 'phelanramsey', 'ut.molestie.in@duiquis.com', 'pretiumaliquet,', ' admin'),
(33, 'carapage', 'sodales@orciDonecnibh.ca', 'aeneanegestas', ' admin'),
(34, 'carasimmons', 'congue.elit.sed@mattisCras.edu', 'montes,nascetur', ' admin'),
(35, 'wyntergay', 'pede@liberolacus.edu', 'malesuadaaugue', 'user '),
(37, 'conanhubbard', 'sed@aliquetProinvelit.com', 'feugiatnec,', 'user '),
(38, 'cherylcopeland', 'semper@molestiesodales.ca', 'dictumaugue', 'user '),
(39, 'murphyavila', 'urna.suscipit@et.com', 'aliquetmolestie', 'user '),
(40, 'tylerbrown', 'Integer.vitae.nibh@nonquam.edu', 'etnetus', ' admin'),
(41, 'pearlwalsh', 'Donec.est.Nunc@Aliquamerat.com', 'felispurus', 'user '),
(42, 'gingerandrews', 'ipsum.cursus@porttitorinterdumSed.ca', 'mauris.integer', ' admin'),
(43, 'sebastianjenkins', 'id.nunc.interdum@magnaNam.ca', 'ridiculusmus.', ' admin'),
(44, 'donnalong', 'facilisis@enimSed.org', 'purus.maecenas', 'user '),
(45, 'barclaycummings', 'fringilla.mi.lacinia@egetnisidictum.co.uk', 'aeneansed', 'user '),
(46, 'quentinhorn', 'nunc.sit.amet@molestiearcu.org', 'ligulaeu', 'user '),
(47, 'constanceaustin', 'Etiam.bibendum.fermentum@risusodio.ca', 'sollicitudinorci', 'user '),
(48, 'cobywhitley', 'luctus@aneque.edu', 'egetlaoreet', 'user '),
(49, 'quynnhood', 'metus.eu.erat@arcuimperdietullamcorper.net', 'nulla.cras', 'user '),
(50, 'wesleynicholson', 'eget@justo.net', 'aliquamauctor,', ' admin'),
(51, 'oribenson', 'parturient@Quisqueporttitor.org', 'urnaconvallis', ' admin'),
(52, 'kylanparrish', 'vehicula@leoelementum.org', 'egestas.duis', ' admin'),
(53, 'wilmapitts', 'Donec.luctus.aliquet@nislelementum.net', 'rutrumlorem', 'user '),
(54, 'colbymcgowan', 'lacus.Quisque@penatibuset.ca', 'orcilobortis', 'user '),
(55, 'ayannaball', 'fermentum@ornareelitelit.co.uk', 'neque.in', ' admin'),
(56, 'yeodonaldson', 'dui.Cras.pellentesque@dictummagna.com', 'sociisnatoque', 'user '),
(57, 'raysweeney', 'id.sapien@tempusscelerisquelorem.co.uk', 'mifringilla', 'user '),
(58, 'ashelyvaughn', 'interdum.Sed@nisiCumsociis.org', 'erat.etiam', 'user '),
(59, 'loganortega', 'eros.Proin@natoquepenatibuset.net', 'sempertellus', 'user '),
(60, 'igorharper', 'Sed.dictum.Proin@feugiat.ca', 'idrisus', ' admin'),
(61, 'aidanparks', 'eu.ultrices.sit@Fuscemi.ca', 'bibendum.donec', ' admin'),
(62, 'borismay', 'ut@famesac.edu', 'malesuadaut,', ' admin'),
(63, 'chandlerburt', 'malesuada.ut.sem@consectetuer.co.uk', 'at,velit.', ' admin'),
(64, 'patiencecamacho', 'sed.libero@amet.co.uk', 'nasceturridiculus', 'user '),
(65, 'ardensims', 'lobortis@auguemalesuadamalesuada.com', 'leo.cras', ' admin'),
(66, 'kendalldavenport', 'sodales@eutemporerat.org', 'enimcommodo', 'user '),
(67, 'rhiannonmoss', 'non.feugiat@tinciduntaliquamarcu.edu', 'augue,eu', 'user '),
(68, 'adamhartman', 'luctus@quis.edu', 'euelit.', ' admin'),
(69, 'hadleyrusso', 'pellentesque@aaliquetvel.net', 'consectetuermauris', ' admin'),
(70, 'abdulhuffman', 'quam@anteMaecenasmi.org', 'aliquet.proin', ' admin'),
(71, 'ivorcase', 'risus.a@malesuadafringilla.net', 'loremsemper', ' admin'),
(72, 'fletcherbonner', 'Morbi@diam.com', 'seddui.', 'user '),
(73, 'lindabyers', 'nunc.risus@nibhPhasellusnulla.co.uk', 'quisarcu', 'user '),
(74, 'jordenlester', 'neque.venenatis.lacus@turpis.org', 'maurisblandit', ' admin'),
(75, 'kaiperry', 'nunc.id.enim@anequeNullam.ca', 'nec,eleifend', ' admin'),
(76, 'gwendolynmeyers', 'Quisque.imperdiet.erat@etmagnis.com', 'magnisdis', 'user '),
(77, 'ivyberg', 'dignissim.tempor.arcu@Nullamlobortisquam.co.uk', 'donecporttitor', 'user '),
(78, 'keeganconley', 'In.condimentum.Donec@CuraePhasellus.com', 'orcilacus', 'user '),
(79, 'rigelromero', 'egestas.a@in.ca', 'molestieorci', 'user '),
(80, 'lamardunn', 'faucibus@vitaedolorDonec.co.uk', 'donecfeugiat', 'user '),
(81, 'cainglover', 'dolor.nonummy.ac@libero.edu', 'eu,accumsan', ' admin'),
(82, 'eatongoodwin', 'orci@Donecsollicitudinadipiscing.ca', 'disparturient', ' admin'),
(83, 'camillasawyer', 'senectus.et@variusultrices.ca', 'orci,adipiscing', 'user '),
(84, 'quintessagrant', 'nonummy@odio.ca', 'sitamet', 'user '),
(85, 'vivianbowman', 'ac.orci.Ut@dignissimmagnaa.net', 'maecenasornare', ' admin'),
(86, 'medgelara', 'ornare.placerat.orci@tristiquealiquet.co.uk', 'adipiscingelit.', ' admin'),
(87, 'rajaharnold', 'Quisque@odio.edu', 'pellentesquea,', ' admin'),
(88, 'meredithholmes', 'ut.pharetra@pede.edu', 'nullamscelerisque', ' admin'),
(89, 'kirestincarver', 'lobortis@odio.net', 'eu,ultrices', ' admin'),
(90, 'odessalambert', 'dolor.sit.amet@tempordiamdictum.edu', 'penatibuset', ' admin'),
(91, 'jocelynsimpson', 'lacus.pede@nec.ca', 'id,erat.', 'user '),
(92, 'hardingrobles', 'sed.dictum.eleifend@InfaucibusMorbi.com', 'seddictum', 'user '),
(93, 'neromcleod', 'Donec.vitae@ami.ca', 'lectusjusto', 'user '),
(94, 'stacylewis', 'Fusce.mollis.Duis@velconvallisin.ca', 'nunccommodo', 'user '),
(95, 'willowmitchell', 'commodo@elitdictumeu.com', 'est,vitae', ' admin'),
(96, 'amelajimenez', 'eu.odio.Phasellus@etipsum.edu', 'nonummyipsum', ' admin'),
(97, 'indiaroman', 'nascetur.ridiculus.mus@pellentesqueegetdictum.edu', 'cumsociis', ' admin'),
(98, 'kennethdaniels', 'leo.Cras.vehicula@orcilacus.ca', 'sociisnatoque', 'user '),
(99, 'lawrencehenson', 'felis@Morbineque.edu', 'ante,iaculis', 'user '),
(100, 'jaelramsey', 'velit.egestas.lacinia@quisdiamluctus.ca', 'orci.ut', 'user '),
(101, 'jerrychambers', 'tellus.Suspendisse@semNulla.edu', 'seddolor.', 'user '),
(102, 'deirdreblevins', 'Proin.vel@dictumeu.co.uk', 'tempusrisus.', 'user '),
(103, 'stoneacosta', 'fringilla.Donec@dolor.ca', 'consectetueradipiscing', 'user '),
(104, 'brennahowe', 'Nullam.suscipit.est@luctusaliquetodio.ca', 'ut,nulla.', ' admin'),
(105, 'tigerwise', 'ac.orci@feugiatplaceratvelit.ca', 'euneque', 'user '),
(106, 'rigelvazquez', 'amet.consectetuer@nunc.net', 'curabitursed', 'user ');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nx9_users`
--

CREATE TABLE IF NOT EXISTS `nx9_users` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `display_image` varchar(255) DEFAULT NULL,
  `age` int(4) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `have_designs` int(1) DEFAULT NULL,
  `have_orders` int(1) DEFAULT NULL,
  `p_role` varchar(25) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_id` (`email_id`),
  FULLTEXT KEY `p_role` (`p_role`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `nx9_users`
--

INSERT INTO `nx9_users` (`user_id`, `user_name`, `email_id`, `password`, `display_image`, `age`, `gender`, `address`, `city`, `state`, `country`, `pincode`, `contact_no`, `have_designs`, `have_orders`, `p_role`) VALUES
(1, 'Alika Leach', 'sed.dictum@odio.co.uk', 'mi tempor', 'molestie tellus. Aenean egestas hendrerit', 60, ' female ', 'Ap #777-3022 Nisi Ave', 'Pondicherry', 'PY', 'India', 187461, '1682101710099', 1, 66, 'user '),
(2, 'Lucy Castro', 'eget@vitae.ca', 'eu erat', 'interdum. Curabitur dictum. Phasellus in', 54, 'male ', '2084 Lacus. Road', 'Salem', 'OR', 'United States', 58970, '1690121519599', 1, 86, 'user '),
(3, 'Kaden Hutchinson', 'nunc.ac.mattis@atauctorullamcorper.org', 'id magna', 'dictum eleifend, nunc risus varius', 65, ' other', '2476 Quisque St.', 'Port Blair', 'AN', 'India', 795506, '1663022650499', 0, 74, ' admin'),
(4, 'Samantha Berry', 'eu@vulputatemauris.co.uk', 'turpis egestas.', 'sed pede nec ante blandit', 49, 'male ', '505-4053 Et Ave', 'Itanagar', 'AR', 'India', 488169, '1639062493599', 1, 14, 'user '),
(5, 'Amber Rodriguez', 'Nulla.eget@hendrerita.ca', 'Donec dignissim', 'mauris sagittis placerat. Cras dictum', 64, ' female ', 'Ap #821-8281 Sed, St.', 'Grand Island', 'NE', 'United States', 97457, '1639080216699', 1, 38, 'user '),
(6, 'Cassady Dudley', 'Aenean.sed.pede@Integer.co.uk', 'tincidunt congue', 'neque sed dictum eleifend, nunc', 23, 'male ', '450-599 Eget Av.', 'Raj Nandgaon', 'CT', 'India', 418583, '1637051222599', 0, 36, ' admin'),
(7, 'Brody Freeman', 'non@vitaesodales.org', 'sollicitudin adipiscing', 'turpis egestas. Aliquam fringilla cursus', 35, ' female ', 'P.O. Box 472, 9221 Aliquam Rd.', 'Guwahati', 'AS', 'India', 358577, '1641022365099', 1, 31, ' admin'),
(8, 'Venus Watson', 'Cras.dolor@inconsequat.ca', 'pede nec', 'elit. Aliquam auctor, velit eget', 85, ' other', '132-8157 Sapien, St.', 'Rohtak', 'HR', 'India', 423076, '1638110367099', 0, 69, 'user '),
(9, 'Judith Fisher', 'a@Sedeunibh.com', 'leo, in', 'auctor quis, tristique ac, eleifend', 11, ' other', '127-4662 Habitant Street', 'Nashville', 'TN', 'United States', 29991, '1638030218199', 0, 9, ' admin'),
(10, 'Tatyana Wolf', 'euismod@Nullam.edu', 'Nam porttitor', 'eget, dictum placerat, augue. Sed', 77, ' other', '4673 Vel Rd.', 'Cuttack', 'OR', 'India', 928665, '1688012737799', 0, 56, 'user '),
(11, 'Donna Ortega', 'rutrum@duiaugue.edu', 'lectus, a', 'metus urna convallis erat, eget', 83, ' female ', '7069 Quisque Ave', 'Dehradun', 'UT', 'India', 284323, '1679021479399', 0, 49, 'user '),
(12, 'Cally Morris', 'nibh@enimconsequat.co.uk', 'eu enim.', 'nibh dolor, nonummy ac, feugiat', 75, ' female ', '1368 Vitae Rd.', 'Salem', 'OR', 'United States', 49333, '1691021237099', 1, 1, ' admin'),
(13, 'Fuller Keller', 'non@mieleifend.com', 'enim. Mauris', 'eget laoreet posuere, enim nisl', 26, ' female ', '231-564 Elementum, St.', 'Bijapur', 'KA', 'India', 117655, '1624061184199', 1, 26, 'user '),
(14, 'Vanna Vaughn', 'eu@velfaucibus.com', 'Fusce diam', 'molestie dapibus ligula. Aliquam erat', 1, ' other', '241-2590 Ultricies Rd.', 'West Valley City', 'UT', 'United States', 51553, '1622040271199', 1, 24, ' admin'),
(15, 'Jonah Sullivan', 'arcu.eu@velquam.org', 'bibendum ullamcorper.', 'elit elit fermentum risus, at', 83, 'male ', '211-3492 Vulputate Road', 'Bhir', 'MH', 'India', 853645, '1629081601499', 1, 27, ' admin'),
(16, 'Lareina Peck', 'consectetuer.rhoncus.Nullam@dictumProineget.ca', 'nec luctus', 'nunc nulla vulputate dui, nec', 78, 'male ', '4301 Fringilla, Rd.', 'Dehri', 'BR', 'India', 148404, '1620100155599', 0, 22, ' admin'),
(17, 'Keane Waller', 'ut@Nullamfeugiatplacerat.edu', 'amet ornare', 'massa. Vestibulum accumsan neque et', 65, 'male ', 'P.O. Box 827, 9370 Fringilla Rd.', 'West Jordan', 'UT', 'United States', 96887, '1670093007699', 1, 20, ' admin'),
(18, 'Jael Scott', 'Nulla.interdum.Curabitur@et.co.uk', 'sollicitudin adipiscing', 'penatibus et magnis dis parturient', 41, 'male ', '318-9341 Pellentesque St.', 'Erode', 'TN', 'India', 391558, '1641052493899', 1, 29, ' admin'),
(19, 'Hanna Finley', 'et.magnis.dis@et.co.uk', 'eget odio.', 'Cras eget nisi dictum augue', 16, ' other', 'P.O. Box 794, 1221 A Rd.', 'Biloxi', 'MS', 'United States', 11344, '1665100542899', 0, 51, ' admin'),
(20, 'Xena Parrish', 'condimentum.Donec.at@sitametante.edu', 'eu, eleifend', 'rhoncus. Proin nisl sem, consequat', 57, ' female ', '4037 Sit St.', 'Bear', 'DE', 'United States', 17410, '1600011190199', 0, 15, ' admin'),
(21, 'Carl Walsh', 'ac@leoinlobortis.org', 'eu tellus.', 'ipsum. Suspendisse non leo. Vivamus', 37, ' other', 'P.O. Box 573, 7480 Ultrices. Rd.', 'Shimla', 'HP', 'India', 255620, '1685050470999', 1, 53, 'user '),
(22, 'Tyler Bruce', 'pharetra.nibh.Aliquam@feugiatmetus.ca', 'elementum purus,', 'Nulla facilisis. Suspendisse commodo tincidunt', 100, ' female ', '3152 Lorem Street', 'Kavaratti', 'LD', 'India', 428231, '1638062689799', 0, 77, 'user '),
(23, 'Isadora Mcdowell', 'velit@mollisDuissit.co.uk', 'varius ultrices,', 'ac mi eleifend egestas. Sed', 29, ' female ', '486-139 Mattis. Ave', 'Madison', 'WI', 'United States', 90991, '1609102216099', 1, 51, 'user '),
(24, 'Nina Vinson', 'luctus.et.ultrices@Fuscediamnunc.net', 'elit. Curabitur', 'eu sem. Pellentesque ut ipsum', 64, ' female ', 'P.O. Box 528, 9991 Tellus. St.', 'Chandler', 'AZ', 'United States', 86730, '1688060253099', 0, 89, 'user '),
(25, 'Karly Mcleod', 'dolor@sedsapienNunc.ca', 'enim. Etiam', 'non dui nec urna suscipit', 23, ' female ', 'P.O. Box 284, 6606 Vel Ave', 'Mobile', 'AL', 'United States', 35733, '1681011810799', 0, 54, ' admin'),
(26, 'Phelan Ramsey', 'ut.molestie.in@duiquis.com', 'pretium aliquet,', 'augue ac ipsum. Phasellus vitae', 43, ' female ', 'P.O. Box 442, 1754 Cursus. Av.', 'Aurora', 'IL', 'United States', 11112, '1693091542199', 0, 33, ' admin'),
(27, 'Cara Page', 'sodales@orciDonecnibh.ca', 'Aenean egestas', 'nec orci. Donec nibh. Quisque', 78, ' female ', 'P.O. Box 248, 9427 Pharetra Ave', 'Kota', 'RJ', 'India', 793791, '1690121465299', 0, 82, ' admin'),
(28, 'Cara Simmons', 'congue.elit.sed@mattisCras.edu', 'montes, nascetur', 'magna sed dui. Fusce aliquam,', 32, 'male ', 'Ap #735-6357 Vitae, Street', 'Owensboro', 'KY', 'United States', 48537, '1624111440599', 1, 89, ' admin'),
(29, 'Wynter Gay', 'pede@liberolacus.edu', 'malesuada augue', 'convallis in, cursus et, eros.', 16, 'male ', '846-6084 Elit, Rd.', 'Puri', 'OR', 'India', 622482, '1668071163299', 0, 2, 'user '),
(30, 'Ora Lott', '123@gmail.com', '123456789', 'nec mauris blandit mattis. Cras', 80, ' other', 'P.O. Box 287, 8954 Dolor. Rd.', 'North Barrackpur', 'WB', 'India', 544926, '1688110111599', 1, 43, ' admin'),
(31, 'Conan Hubbard', 'sed@aliquetProinvelit.com', 'feugiat nec,', 'Maecenas malesuada fringilla est. Mauris', 63, 'male ', 'Ap #941-4548 Blandit Road', 'Las Vegas', 'NV', 'United States', 95266, '1665031453599', 1, 86, 'user '),
(32, 'Cheryl Copeland', 'semper@molestiesodales.ca', 'dictum augue', 'Integer vitae nibh. Donec est', 91, 'male ', '548-2453 Accumsan Avenue', 'Darbhanga', 'BR', 'India', 865680, '1608121280499', 0, 34, 'user '),
(33, 'Murphy Avila', 'urna.suscipit@et.com', 'aliquet molestie', 'pharetra nibh. Aliquam ornare, libero', 70, 'male ', 'Ap #524-5128 Tincidunt Rd.', 'Itanagar', 'AR', 'India', 533192, '1647090534699', 1, 38, 'user '),
(34, 'Tyler Brown', 'Integer.vitae.nibh@nonquam.edu', 'et netus', 'at pede. Cras vulputate velit', 91, ' other', '2317 Cursus Avenue', 'Surendranagar', 'GJ', 'India', 203803, '1626051008599', 0, 8, ' admin'),
(35, 'Pearl Walsh', 'Donec.est.Nunc@Aliquamerat.com', 'felis purus', 'nec, diam. Duis mi enim,', 69, ' other', 'P.O. Box 241, 8160 Porta Street', 'Cheyenne', 'WY', 'United States', 10912, '1655030950499', 1, 14, 'user '),
(36, 'Ginger Andrews', 'ipsum.cursus@porttitorinterdumSed.ca', 'mauris. Integer', 'egestas blandit. Nam nulla magna,', 66, ' female ', 'Ap #414-7668 Mauris, St.', 'Miami', 'FL', 'United States', 40868, '1678081760299', 1, 35, ' admin'),
(37, 'Sebastian Jenkins', 'id.nunc.interdum@magnaNam.ca', 'ridiculus mus.', 'nec tempus mauris erat eget', 77, ' female ', '9521 Dui, Street', 'Sioux City', 'IA', 'United States', 68322, '1600071968199', 0, 41, ' admin'),
(38, 'Donna Long', 'facilisis@enimSed.org', 'purus. Maecenas', 'mauris elit, dictum eu, eleifend', 33, ' female ', '4671 Odio Avenue', 'Cambridge', 'MA', 'United States', 37471, '1688060360499', 0, 96, 'user '),
(39, 'Barclay Cummings', 'fringilla.mi.lacinia@egetnisidictum.co.uk', 'Aenean sed', 'non quam. Pellentesque habitant morbi', 65, ' female ', 'P.O. Box 764, 3692 Eleifend St.', 'Dehradun', 'UT', 'India', 816355, '1604072310499', 0, 35, 'user '),
(40, 'Quentin Horn', 'nunc.sit.amet@molestiearcu.org', 'ligula eu', 'leo. Vivamus nibh dolor, nonummy', 62, 'male ', 'P.O. Box 464, 7949 Nisl. Avenue', 'Evansville', 'IN', 'United States', 66134, '1685060779399', 1, 32, 'user '),
(41, 'Constance Austin', 'Etiam.bibendum.fermentum@risusodio.ca', 'sollicitudin orci', 'facilisis non, bibendum sed, est.', 98, ' other', 'P.O. Box 534, 8273 Sollicitudin St.', 'Port Blair', 'AN', 'India', 621916, '1698082807399', 0, 2, 'user '),
(42, 'Coby Whitley', 'luctus@aneque.edu', 'eget laoreet', 'est, congue a, aliquet vel,', 72, ' female ', 'P.O. Box 554, 3665 Phasellus St.', 'Mesa', 'AZ', 'United States', 85534, '1619100539199', 0, 90, 'user '),
(43, 'Quynn Hood', 'metus.eu.erat@arcuimperdietullamcorper.net', 'nulla. Cras', 'ac, eleifend vitae, erat. Vivamus', 82, 'male ', '776-8606 Mollis Avenue', 'Bettiah', 'BR', 'India', 632180, '1651051234299', 1, 37, 'user '),
(44, 'Wesley Nicholson', 'eget@justo.net', 'Aliquam auctor,', 'orci, adipiscing non, luctus sit', 15, ' female ', '598-5702 Nibh. Avenue', 'Grand Rapids', 'MI', 'United States', 29575, '1625122082599', 1, 100, ' admin'),
(45, 'Ori Benson', 'parturient@Quisqueporttitor.org', 'urna convallis', 'a felis ullamcorper viverra. Maecenas', 95, ' other', 'Ap #957-855 Magnis Ave', 'Guntakal', 'AP', 'India', 857218, '1654112911299', 1, 11, ' admin'),
(46, 'Kylan Parrish', 'vehicula@leoelementum.org', 'egestas. Duis', 'nunc ac mattis ornare, lectus', 82, ' female ', '1467 Ultrices. Ave', 'Shimoga', 'KA', 'India', 180613, '1686011889199', 1, 38, ' admin'),
(47, 'Wilma Pitts', 'Donec.luctus.aliquet@nislelementum.net', 'rutrum lorem', 'sapien imperdiet ornare. In faucibus.', 65, 'male ', '125-325 Sociis Rd.', 'Bikaner', 'RJ', 'India', 570456, '1651080256299', 0, 3, 'user '),
(48, 'Colby Mcgowan', 'lacus.Quisque@penatibuset.ca', 'orci lobortis', 'in magna. Phasellus dolor elit,', 90, ' female ', 'P.O. Box 294, 8592 Nibh Rd.', 'Columbus', 'GA', 'United States', 23390, '1639071844799', 0, 39, 'user '),
(49, 'Ayanna Ball', 'fermentum@ornareelitelit.co.uk', 'neque. In', 'diam lorem, auctor quis, tristique', 88, ' other', 'Ap #783-2328 Vulputate, Avenue', 'Columbia', 'MO', 'United States', 53669, '1680060226399', 0, 8, ' admin'),
(50, 'Yeo Donaldson', 'dui.Cras.pellentesque@dictummagna.com', 'sociis natoque', 'purus, in molestie tortor nibh', 47, 'male ', '6176 Neque St.', 'Des Moines', 'IA', 'United States', 46525, '1621092538999', 1, 64, 'user '),
(51, 'Ray Sweeney', 'id.sapien@tempusscelerisquelorem.co.uk', 'mi fringilla', 'sem mollis dui, in sodales', 21, ' female ', '3464 Quisque St.', 'Helena', 'MT', 'United States', 19052, '1622030219499', 1, 28, 'user '),
(52, 'Ashely Vaughn', 'interdum.Sed@nisiCumsociis.org', 'erat. Etiam', 'placerat velit. Quisque varius. Nam', 85, 'male ', 'Ap #100-5802 Egestas Street', 'Columbia', 'MO', 'United States', 60603, '1666092466399', 0, 57, 'user '),
(53, 'Logan Ortega', 'eros.Proin@natoquepenatibuset.net', 'semper tellus', 'in sodales elit erat vitae', 94, ' other', 'Ap #237-6974 A Avenue', 'West Jordan', 'UT', 'United States', 52985, '1657102015599', 0, 97, 'user '),
(54, 'Igor Harper', 'Sed.dictum.Proin@feugiat.ca', 'id risus', 'ullamcorper eu, euismod ac, fermentum', 92, ' other', '8022 Sit Street', 'Broken Arrow', 'OK', 'United States', 63617, '1600053023999', 0, 97, ' admin'),
(55, 'Aidan Parks', 'eu.ultrices.sit@Fuscemi.ca', 'bibendum. Donec', 'non, luctus sit amet, faucibus', 51, 'male ', 'P.O. Box 683, 8672 Enim. Avenue', 'Cochin', 'KL', 'India', 435952, '1608101608499', 1, 29, ' admin'),
(56, 'Boris May', 'ut@famesac.edu', 'malesuada ut,', 'massa. Suspendisse eleifend. Cras sed', 56, ' female ', 'P.O. Box 256, 9265 Non Rd.', 'Biloxi', 'MS', 'United States', 14570, '1620020730499', 1, 17, ' admin'),
(57, 'Chandler Burt', 'malesuada.ut.sem@consectetuer.co.uk', 'at, velit.', 'Cras interdum. Nunc sollicitudin commodo', 61, ' other', 'Ap #553-1129 Dolor, St.', 'Chesapeake', 'VA', 'United States', 38249, '1656022970099', 0, 7, ' admin'),
(58, 'Patience Camacho', 'sed.libero@amet.co.uk', 'nascetur ridiculus', 'per conubia nostra, per inceptos', 48, ' female ', '396-3897 Metus Road', 'Richmond', 'VA', 'United States', 54342, '1694042502999', 0, 20, 'user '),
(59, 'Arden Sims', 'lobortis@auguemalesuadamalesuada.com', 'leo. Cras', 'dignissim tempor arcu. Vestibulum ut', 14, 'male ', 'P.O. Box 675, 6257 Vel Rd.', 'Shimla', 'HP', 'India', 415417, '1665092540299', 1, 75, ' admin'),
(60, 'Kendall Davenport', 'sodales@eutemporerat.org', 'enim commodo', 'Sed malesuada augue ut lacus.', 58, ' other', '4027 Montes, Avenue', 'Agartala', 'TR', 'India', 190049, '1679092402499', 1, 35, 'user '),
(61, 'Rhiannon Moss', 'non.feugiat@tinciduntaliquamarcu.edu', 'augue, eu', 'elit, dictum eu, eleifend nec,', 90, ' other', 'Ap #493-8958 Interdum Ave', 'Gangtok', 'SK', 'India', 804834, '1667022233999', 0, 93, 'user '),
(62, 'Adam Hartman', 'luctus@quis.edu', 'eu elit.', 'dictum. Proin eget odio. Aliquam', 88, ' other', '400-1968 Vel Rd.', 'West Jordan', 'UT', 'United States', 93387, '1685031887199', 0, 54, ' admin'),
(63, 'Hadley Russo', 'pellentesque@aaliquetvel.net', 'consectetuer mauris', 'amet metus. Aliquam erat volutpat.', 85, ' other', 'P.O. Box 366, 6972 Per Street', 'Rochester', 'MN', 'United States', 50625, '1658101429399', 1, 37, ' admin'),
(64, 'Abdul Huffman', 'quam@anteMaecenasmi.org', 'aliquet. Proin', 'lacus pede sagittis augue, eu', 41, ' female ', '872-4616 Eu Rd.', 'Jaipur', 'RJ', 'India', 179122, '1679040807699', 1, 16, ' admin'),
(65, 'Ivor Case', 'risus.a@malesuadafringilla.net', 'lorem semper', 'condimentum. Donec at arcu. Vestibulum', 100, ' other', 'Ap #932-3578 In Ave', 'Missoula', 'MT', 'United States', 82258, '1643082461399', 0, 96, ' admin'),
(66, 'Fletcher Bonner', 'Morbi@diam.com', 'sed dui.', 'Phasellus elit pede, malesuada vel,', 69, ' female ', '9195 Adipiscing Ave', 'Patna', 'BR', 'India', 625385, '1667090236299', 1, 13, 'user '),
(67, 'Linda Byers', 'nunc.risus@nibhPhasellusnulla.co.uk', 'quis arcu', 'Nulla facilisis. Suspendisse commodo tincidunt', 85, ' other', 'Ap #650-6401 Vitae Rd.', 'Delhi', 'DL', 'India', 551131, '1632030617599', 1, 56, 'user '),
(68, 'Jorden Lester', 'neque.venenatis.lacus@turpis.org', 'Mauris blandit', 'mus. Donec dignissim magna a', 63, ' other', '5845 Ligula. Ave', 'Jammu', 'JK', 'India', 951586, '1685121988199', 1, 2, ' admin'),
(69, 'Kai Perry', 'nunc.id.enim@anequeNullam.ca', 'nec, eleifend', 'urna suscipit nonummy. Fusce fermentum', 25, ' female ', '431-2478 Malesuada Rd.', 'Overland Park', 'KS', 'United States', 37513, '1687082132699', 0, 13, ' admin'),
(70, 'Gwendolyn Meyers', 'Quisque.imperdiet.erat@etmagnis.com', 'magnis dis', 'ornare. In faucibus. Morbi vehicula.', 15, ' other', 'Ap #981-3680 Orci. Road', 'Milwaukee', 'WI', 'United States', 67279, '1639110270999', 1, 63, 'user '),
(71, 'Ivy Berg', 'dignissim.tempor.arcu@Nullamlobortisquam.co.uk', 'Donec porttitor', 'enim, gravida sit amet, dapibus', 16, ' female ', 'P.O. Box 384, 3743 Arcu. Street', 'Paradise', 'NV', 'United States', 96453, '1607100802199', 0, 80, 'user '),
(72, 'Keegan Conley', 'In.condimentum.Donec@CuraePhasellus.com', 'orci lacus', 'dis parturient montes, nascetur ridiculus', 25, ' other', '9582 Id St.', 'Agartala', 'TR', 'India', 799985, '1663080535399', 1, 78, 'user '),
(73, 'Rigel Romero', 'egestas.a@in.ca', 'molestie orci', 'et, rutrum non, hendrerit id,', 59, ' female ', 'P.O. Box 919, 1379 Mauris Road', 'Gangtok', 'SK', 'India', 208529, '1680061163899', 1, 38, 'user '),
(74, 'Lamar Dunn', 'faucibus@vitaedolorDonec.co.uk', 'Donec feugiat', 'nulla. Donec non justo. Proin', 30, ' female ', 'Ap #622-8476 Lacus, Street', 'Itanagar', 'AR', 'India', 147220, '1664082651499', 1, 75, 'user '),
(75, 'Cain Glover', 'dolor.nonummy.ac@libero.edu', 'eu, accumsan', 'consectetuer rhoncus. Nullam velit dui,', 69, ' other', 'P.O. Box 232, 7641 Arcu. Road', 'Bhilai', 'CT', 'India', 719442, '1677061452599', 1, 28, ' admin'),
(76, 'Eaton Goodwin', 'orci@Donecsollicitudinadipiscing.ca', 'dis parturient', 'est. Nunc laoreet lectus quis', 62, 'male ', '109-9087 Ornare Rd.', 'Kavaratti', 'LD', 'India', 779668, '1680051488099', 1, 99, ' admin'),
(77, 'Camilla Sawyer', 'senectus.et@variusultrices.ca', 'orci, adipiscing', 'eleifend vitae, erat. Vivamus nisi.', 40, ' female ', '615-3256 Maecenas St.', 'Shimla', 'HP', 'India', 239269, '1618112258599', 1, 46, 'user '),
(78, 'Quintessa Grant', 'nonummy@odio.ca', 'sit amet', 'lacinia at, iaculis quis, pede.', 44, 'male ', '2069 Quam. St.', 'North Las Vegas', 'NV', 'United States', 77275, '1628091736499', 1, 24, 'user '),
(79, 'Vivian Bowman', 'ac.orci.Ut@dignissimmagnaa.net', 'Maecenas ornare', 'nonummy ipsum non arcu. Vivamus', 58, 'male ', 'Ap #872-7916 Ridiculus Road', 'Sitapur', 'UP', 'India', 369971, '1679110877899', 1, 57, ' admin'),
(80, 'Medge Lara', 'ornare.placerat.orci@tristiquealiquet.co.uk', 'adipiscing elit.', 'condimentum. Donec at arcu. Vestibulum', 20, ' female ', '9513 Massa. St.', 'Portland', 'ME', 'United States', 91295, '1641071370099', 1, 66, ' admin'),
(81, 'Rajah Arnold', 'Quisque@odio.edu', 'pellentesque a,', 'Vestibulum ante ipsum primis in', 41, ' other', '9636 Tempor St.', 'Kurnool', 'AP', 'India', 422467, '1694020179399', 1, 6, ' admin'),
(82, 'Meredith Holmes', 'ut.pharetra@pede.edu', 'Nullam scelerisque', 'Pellentesque ut ipsum ac mi', 80, ' female ', 'P.O. Box 598, 4328 Sed Avenue', 'Agartala', 'TR', 'India', 850931, '1679031034299', 1, 51, ' admin'),
(83, 'Kirestin Carver', 'lobortis@odio.net', 'eu, ultrices', 'ipsum primis in faucibus orci', 44, 'male ', 'P.O. Box 762, 1712 Aenean Ave', 'Moradabad', 'UP', 'India', 648199, '1662012008899', 0, 73, ' admin'),
(84, 'Odessa Lambert', 'dolor.sit.amet@tempordiamdictum.edu', 'penatibus et', 'velit justo nec ante. Maecenas', 66, ' other', '1918 Vestibulum Rd.', 'Silvassa', 'DN', 'India', 381215, '1662071757899', 1, 31, ' admin'),
(85, 'Jocelyn Simpson', 'lacus.pede@nec.ca', 'id, erat.', 'et risus. Quisque libero lacus,', 73, 'male ', 'Ap #383-8519 Cursus St.', 'Oklahoma City', 'OK', 'United States', 19276, '1610112325099', 0, 85, 'user '),
(86, 'Harding Robles', 'sed.dictum.eleifend@InfaucibusMorbi.com', 'sed dictum', 'lobortis mauris. Suspendisse aliquet molestie', 36, ' other', 'Ap #139-5537 Eu Ave', 'Auburn', 'ME', 'United States', 76791, '1637120808899', 0, 15, 'user '),
(87, 'Nero Mcleod', 'Donec.vitae@ami.ca', 'lectus justo', 'ligula. Aenean gravida nunc sed', 3, ' female ', 'Ap #939-6996 Nisi. Av.', 'Chandler', 'AZ', 'United States', 85886, '1625122547999', 1, 13, 'user '),
(88, 'Stacy Lewis', 'Fusce.mollis.Duis@velconvallisin.ca', 'Nunc commodo', 'In tincidunt congue turpis. In', 60, ' other', 'Ap #794-7944 Aliquet Street', 'Etawah', 'UP', 'India', 459146, '1688010738899', 1, 98, 'user '),
(89, 'Willow Mitchell', 'commodo@elitdictumeu.com', 'est, vitae', 'Maecenas mi felis, adipiscing fringilla,', 53, 'male ', 'Ap #188-7628 Cursus Av.', 'Shillong', 'ML', 'India', 620201, '1632042023599', 0, 88, ' admin'),
(90, 'Amela Jimenez', 'eu.odio.Phasellus@etipsum.edu', 'nonummy ipsum', 'dui. Cras pellentesque. Sed dictum.', 99, ' female ', 'P.O. Box 462, 4080 Imperdiet Street', 'Latur', 'MH', 'India', 616728, '1692092581199', 0, 74, ' admin'),
(91, 'India Roman', 'nascetur.ridiculus.mus@pellentesqueegetdictum.edu', 'Cum sociis', 'nec enim. Nunc ut erat.', 56, ' female ', 'Ap #804-2375 Risus. St.', 'Port Blair', 'AN', 'India', 500351, '1611071306499', 1, 99, ' admin'),
(92, 'Kenneth Daniels', 'leo.Cras.vehicula@orcilacus.ca', 'sociis natoque', 'nec, imperdiet nec, leo. Morbi', 86, 'male ', '474-8036 Donec St.', 'Raurkela Civil Township', 'OR', 'India', 159939, '1647053006199', 1, 6, 'user '),
(93, 'Lawrence Henson', 'felis@Morbineque.edu', 'ante, iaculis', 'ultrices a, auctor non, feugiat', 91, ' female ', '1767 A Rd.', 'Covington', 'KY', 'United States', 39203, '1662011729899', 0, 6, 'user '),
(94, 'Jael Ramsey', 'velit.egestas.lacinia@quisdiamluctus.ca', 'orci. Ut', 'tincidunt, nunc ac mattis ornare,', 37, ' female ', '3920 Eget Ave', 'Aizwal', 'MZ', 'India', 811545, '1668112848699', 1, 27, 'user '),
(95, 'Jerry Chambers', 'tellus.Suspendisse@semNulla.edu', 'sed dolor.', 'aliquet, sem ut cursus luctus,', 53, ' female ', '2928 Luctus Street', 'Salt Lake City', 'UT', 'United States', 97023, '1642070350299', 1, 1, 'user '),
(96, 'Deirdre Blevins', 'Proin.vel@dictumeu.co.uk', 'tempus risus.', 'nascetur ridiculus mus. Proin vel', 52, ' female ', '468 Sed Av.', 'Portland', 'ME', 'United States', 37042, '1649102989099', 0, 30, 'user '),
(97, 'Stone Acosta', 'fringilla.Donec@dolor.ca', 'consectetuer adipiscing', 'erat eget ipsum. Suspendisse sagittis.', 50, ' other', '525-5397 Rutrum Rd.', 'Aizwal', 'MZ', 'India', 573280, '1693091576799', 1, 56, 'user '),
(98, 'Brenna Howe', 'Nullam.suscipit.est@luctusaliquetodio.ca', 'ut, nulla.', 'vitae nibh. Donec est mauris,', 98, ' other', '278-803 Magna. Rd.', 'Chandigarh', 'CH', 'India', 655982, '1601061056199', 0, 2, ' admin'),
(99, 'Tiger Wise', 'ac.orci@feugiatplaceratvelit.ca', 'eu neque', 'at auctor ullamcorper, nisl arcu', 13, ' female ', 'P.O. Box 974, 5800 Ut Avenue', 'Iowa City', 'IA', 'United States', 43084, '1617051779999', 1, 89, 'user '),
(100, 'Rigel Vazquez', 'amet.consectetuer@nunc.net', 'Curabitur sed', 'iaculis odio. Nam interdum enim', 65, 'male ', 'P.O. Box 959, 740 Sed, Rd.', 'Itanagar', 'AR', 'India', 611925, '1629053078999', 0, 80, 'user ');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `product_id` blob NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `delivery_charges` int(3) NOT NULL,
  `tax_amount` int(3) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `order_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_audience`
--

CREATE TABLE IF NOT EXISTS `product_audience` (
  `audience_id` int(11) NOT NULL AUTO_INCREMENT,
  `audience_name` text NOT NULL,
  PRIMARY KEY (`audience_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_audience`
--

INSERT INTO `product_audience` (`audience_id`, `audience_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(5, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `product_by_seller`
--

CREATE TABLE IF NOT EXISTS `product_by_seller` (
  `seller_id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  PRIMARY KEY (`seller_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_by_seller`
--

INSERT INTO `product_by_seller` (`seller_id`, `product_id`) VALUES
(2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories_list`
--

CREATE TABLE IF NOT EXISTS `product_categories_list` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `categories` varchar(200) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `categories` (`categories`),
  KEY `categories_2` (`categories`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_categories_list`
--

INSERT INTO `product_categories_list` (`category_id`, `categories`) VALUES
(2, 'cat1'),
(3, 'cat2'),
(4, 'cat3');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `product_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `product_img_1` varchar(50) NOT NULL,
  PRIMARY KEY (`product_image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE IF NOT EXISTS `product_list` (
  `product_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_desc` text NOT NULL,
  `product_name` text NOT NULL,
  `product_cost` int(11) NOT NULL,
  `audience_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_fabric` text NOT NULL,
`featured` int NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`),
  KEY `audience_id` (`audience_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_id`, `product_desc`, `product_name`, `product_cost`, `audience_id`, `category_id`, `product_fabric`) VALUES
(15, 'des', 'prod1', 232, 1, 2, 'asdsad'),
(21, 'asdsads', 'killer', 250, 1, 3, 'Silk Cotton'),
(39, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(40, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(41, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(42, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(43, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(44, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(45, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(46, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(47, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(48, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(49, 'sadasdashdiashdi', 'prod3434', 3434, 1, 3, 'asdasdoasdo'),
(50, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(51, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(52, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(53, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(54, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(55, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(56, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(57, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(58, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(59, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(60, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(61, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(62, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(63, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(64, 'this is the descripton of the product', 'the product', 890, 2, 4, 'Silk,cotton,blend,swade'),
(65, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(66, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(67, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(68, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(69, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(70, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(71, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(72, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(73, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(74, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(75, 'this is the descripton of the product', 'the product', 890, 2, 4, 'silk,cotton,blend,swade'),
(76, 'dproduct1', 'product1', 234, 2, 4, 'silk cotton'),
(77, 'product2_description', 'product2', 241, 1, 4, 'wool,cotton,prada'),
(78, 'description for product 34', 'product34', 980, 2, 2, 'blend,prada,wool');

-- --------------------------------------------------------

--
-- Table structure for table `product_patterns`
--

CREATE TABLE IF NOT EXISTS `product_patterns` (
  `pattern_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(11) NOT NULL,
  `product_desc` text NOT NULL,
  PRIMARY KEY (`pattern_id`),
  KEY `product_id` (`product_id`),
  KEY `pattern_id` (`pattern_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `product_patterns`
--

INSERT INTO `product_patterns` (`pattern_id`, `product_id`, `product_desc`) VALUES
(12, 39, 'sdasdasdsa'),
(13, 40, 'sdasdasdsa'),
(14, 41, 'sdasdasdsa'),
(15, 42, 'sdasdasdsa'),
(16, 43, 'sdasdasdsa'),
(17, 44, 'sdasdasdsa'),
(18, 45, 'sdasdasdsa'),
(19, 46, 'sdasdasdsa'),
(20, 47, 'sdasdasdsa'),
(21, 48, 'sdasdasdsa'),
(22, 49, 'sdasdasdsa'),
(23, 50, 'Pattern'),
(24, 51, 'Pattern'),
(25, 52, 'Pattern'),
(26, 53, 'Pattern'),
(27, 54, 'Pattern'),
(28, 55, 'Pattern'),
(29, 56, 'Pattern'),
(30, 57, 'Pattern'),
(31, 58, 'Pattern'),
(32, 59, 'Pattern'),
(33, 60, 'Pattern'),
(34, 61, 'Pattern'),
(35, 62, 'Pattern'),
(36, 63, 'Pattern'),
(37, 64, 'Pattern'),
(38, 65, 'Pattern'),
(39, 66, 'Pattern'),
(40, 67, 'Pattern'),
(41, 68, 'Pattern'),
(42, 69, 'Pattern'),
(43, 70, 'Pattern'),
(44, 71, 'Pattern'),
(45, 72, 'Pattern'),
(46, 73, 'Pattern'),
(47, 74, 'Pattern'),
(48, 75, 'Pattern'),
(49, 76, 'pattern_product_1'),
(50, 77, 'pattern_product_2'),
(51, 78, 'The pattern in red with black stripss');

-- --------------------------------------------------------

--
-- Table structure for table `product_pattern_images`
--

CREATE TABLE IF NOT EXISTS `product_pattern_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `pattern_id` int(11) NOT NULL,
  `image1_url` text NOT NULL,
  `image2_url` text NOT NULL,
  `image3_url` text NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `pattern_id` (`pattern_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `product_pattern_images`
--

INSERT INTO `product_pattern_images` (`image_id`, `pattern_id`, `image1_url`, `image2_url`, `image3_url`) VALUES
(3, 19, 'images/46-19database.png', 'images/46-19console.png', 'images/46-19fee1.jpg'),
(4, 20, 'images/47-20database.png', 'images/47-20console.png', 'images/47-20fee1.jpg'),
(5, 21, 'images/48-21database.png', 'images/48-21console.png', 'images/48-21fee1.jpg'),
(6, 22, 'images/49-22database.png', 'images/49-22console.png', 'images/49-22fee1.jpg'),
(7, 23, 'images/50-23console.png', 'images/50-23database.png', 'images/50-23database_shell.png'),
(8, 24, 'images/51-24console.png', 'images/51-24database.png', 'images/51-24database_shell.png'),
(9, 25, 'images/52-25console.png', 'images/52-25database.png', 'images/52-25database_shell.png'),
(10, 26, 'images/53-26console.png', 'images/53-26database.png', 'images/53-26database_shell.png'),
(11, 27, 'images/54-27console.png', 'images/54-27database.png', 'images/54-27database_shell.png'),
(12, 28, 'images/55-28console.png', 'images/55-28database.png', 'images/55-28database_shell.png'),
(13, 29, 'images/56-29console.png', 'images/56-29database.png', 'images/56-29database_shell.png'),
(14, 30, 'images/57-30console.png', 'images/57-30database.png', 'images/57-30database_shell.png'),
(15, 31, 'images/58-31console.png', 'images/58-31database.png', 'images/58-31database_shell.png'),
(16, 32, 'images/59-32console.png', 'images/59-32database.png', 'images/59-32database_shell.png'),
(17, 33, 'images/60-33console.png', 'images/60-33database.png', 'images/60-33database_shell.png'),
(18, 34, 'images/61-34console.png', 'images/61-34database.png', 'images/61-34database_shell.png'),
(19, 35, 'images/62-35console.png', 'images/62-35database.png', 'images/62-35database_shell.png'),
(20, 36, 'images/63-36console.png', 'images/63-36database.png', 'images/63-36database_shell.png'),
(21, 37, 'images/64-37console.png', 'images/64-37database.png', 'images/64-37database_shell.png'),
(22, 38, 'images/65-38console.png', 'images/65-38database.png', 'images/65-38database_shell.png'),
(23, 39, 'images/66-39console.png', 'images/66-39database.png', 'images/66-39database_shell.png'),
(24, 40, 'images/67-40console.png', 'images/67-40database.png', 'images/67-40database_shell.png'),
(25, 41, 'images/68-41console.png', 'images/68-41database.png', 'images/68-41database_shell.png'),
(26, 42, 'images/69-42console.png', 'images/69-42database.png', 'images/69-42database_shell.png'),
(27, 43, 'images/70-43console.png', 'images/70-43database.png', 'images/70-43database_shell.png'),
(28, 44, 'images/71-44console.png', 'images/71-44database.png', 'images/71-44database_shell.png'),
(29, 48, 'images/75-48console.png', 'images/75-48database.png', 'images/75-48database_shell.png'),
(30, 49, 'images/76-49console.png', 'images/76-49console.png', 'images/76-49console.png'),
(31, 50, 'images/77-50database.png', 'images/77-50database.png', 'images/77-50database.png'),
(32, 51, 'images/78-51wiki.jpeg', 'images/78-51table1.png', 'images/78-51table2.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_pattern_measurements`
--

CREATE TABLE IF NOT EXISTS `product_pattern_measurements` (
  `measure_id` int(11) NOT NULL AUTO_INCREMENT,
  `pattern_id` int(11) NOT NULL,
  `measure_1` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`measure_id`),
  KEY `pattern_id` (`pattern_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_pattern_quantity`
--

CREATE TABLE IF NOT EXISTS `product_pattern_quantity` (
  `quantity_id` int(11) NOT NULL AUTO_INCREMENT,
  `measure_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`quantity_id`),
  KEY `measure_id` (`measure_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE IF NOT EXISTS `product_tags` (
  `tag_relation` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `design_id` bigint(20) NOT NULL,
  PRIMARY KEY (`tag_relation`),
  KEY `product_id` (`product_id`),
  KEY `design_id` (`design_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`tag_relation`, `tag_id`, `product_id`, `design_id`) VALUES
(93, 48, 76, 49),
(94, 49, 76, 49),
(95, 50, 76, 49),
(96, 51, 76, 49),
(97, 75, 76, 49),
(98, 76, 76, 49),
(99, 75, 76, 49),
(100, 77, 76, 49),
(101, 52, 76, 49),
(102, 53, 76, 49),
(103, 56, 76, 49),
(104, 78, 77, 50),
(105, 76, 77, 50),
(106, 79, 77, 50),
(107, 80, 77, 50),
(108, 53, 77, 50),
(109, 81, 77, 50),
(110, 82, 77, 50),
(111, 83, 78, 51),
(112, 84, 78, 51),
(113, 85, 78, 51),
(114, 86, 78, 51),
(115, 54, 78, 51),
(116, 81, 78, 51),
(117, 80, 78, 51),
(118, 56, 78, 51);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag_list`
--

CREATE TABLE IF NOT EXISTS `product_tag_list` (
  `tag_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tags` varchar(200) NOT NULL,
  PRIMARY KEY (`tag_id`),
  UNIQUE KEY `tags` (`tags`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `product_tag_list`
--

INSERT INTO `product_tag_list` (`tag_id`, `tags`) VALUES
(54, 'blend'),
(50, 'blue'),
(53, 'cotton'),
(78, 'database'),
(56, 'female'),
(84, 'india'),
(79, 'jackadd'),
(76, 'killer'),
(85, 'kurta'),
(82, 'male'),
(77, 'mas'),
(83, 'pakistan'),
(81, 'prada'),
(48, 'red'),
(86, 'salwar'),
(49, 'shirt'),
(52, 'silk'),
(55, 'swade'),
(51, 'vicot'),
(80, 'wool');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `company_name` text NOT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `u_name`, `password`, `email`, `company_name`) VALUES
(2, 'tysonkidd', '123456789', 'gujjartapan@yahoo.com', 'company');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE IF NOT EXISTS `user_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  `purchased` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cart_id`, `user_id`, `pattern_id`, `purchased`) VALUES
(1, 14, 14, 0),
(2, 14, 14, 0),
(3, 14, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE IF NOT EXISTS `user_wishlist` (
  `user_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`wishlist_id`),
  KEY `pattern_id` (`pattern_id`),
  KEY `wishlist_id` (`wishlist_id`),
  KEY `user_id` (`user_id`),
  KEY `wishlist_id_2` (`wishlist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_by_seller`
--
ALTER TABLE `product_by_seller`
  ADD CONSTRAINT `product_by_seller_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_by_seller_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `product_list_ibfk_1` FOREIGN KEY (`audience_id`) REFERENCES `product_audience` (`audience_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_list_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `product_categories_list` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `product_patterns`
--
ALTER TABLE `product_patterns`
  ADD CONSTRAINT `product_patterns_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pattern_images`
--
ALTER TABLE `product_pattern_images`
  ADD CONSTRAINT `product_pattern_images_ibfk_1` FOREIGN KEY (`pattern_id`) REFERENCES `product_patterns` (`pattern_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pattern_measurements`
--
ALTER TABLE `product_pattern_measurements`
  ADD CONSTRAINT `product_pattern_measurements_ibfk_1` FOREIGN KEY (`pattern_id`) REFERENCES `product_patterns` (`pattern_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pattern_quantity`
--
ALTER TABLE `product_pattern_quantity`
  ADD CONSTRAINT `product_pattern_quantity_ibfk_1` FOREIGN KEY (`measure_id`) REFERENCES `product_pattern_measurements` (`measure_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD CONSTRAINT `user_wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fasho_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_wishlist_ibfk_2` FOREIGN KEY (`pattern_id`) REFERENCES `product_patterns` (`pattern_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> ea3bd9cedc858c330032c57f2871b52a139fabcc
