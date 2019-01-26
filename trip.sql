-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2018 at 06:16 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `ankleshwar`
--

DROP TABLE IF EXISTS `ankleshwar`;
CREATE TABLE IF NOT EXISTS `ankleshwar` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `p_pic` blob,
  `pic_name` varchar(50) NOT NULL,
  `p_text` varchar(50000) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chennai`
--

DROP TABLE IF EXISTS `chennai`;
CREATE TABLE IF NOT EXISTS `chennai` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `p_pic` blob,
  `pic_name` varchar(50) NOT NULL,
  `p_text` text,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `cust` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chennai`
--

INSERT INTO `chennai` (`id`, `place`, `p_pic`, `pic_name`, `p_text`, `latitude`, `longitude`, `rating`, `cust`) VALUES
(1, 'Marina Beach', 0x706c6163652f6d61322e6a7067, 'ma2.jpg', 'Marina Beach is a natural urban beach in Chennai, Tamil Nadu, India, along the Bay of Bengal. The beach runs from near Fort St. George in the north to Foreshore Estate in the south, a distance of 6.0 km, making it the longest natural urban beach in the country. ', '13.0500', '80.2824', 3, 2),
(2, 'MGR Film City', 0x706c6163652f6d67722e6a7067, 'mgr.jpg', 'Having been established in the year 1994, a considerably new structure, the MGR Film city is managed by the Government of Tamil Nadu in loving memory of MG Ramachandran who was not only a crowd-pleasing tamil actor but also a longtime CM of Tamil Nadu.', '12.9925', '80.2472', 0, 0),
(3, 'Arignar Anna Zoological Park', 0x706c6163652f7a6f6f2e504e47, 'zoo.PNG', 'Perhaps one of the most popular picnic spots in Vandalur, Kanchipuram District, the Arignar Zoological Park is an amazing place to discover the flora and fauna of the region. A favourite weekend spot with both children and adults alike, the Arignar Zoo is situated at a distance of 32 kilometres from Chennai city. It is the largest zoo of its kind in South East Asia and is sprawled over an area of 1260 acres. In addition to having an extensive collection of endemic and exotic animals, visitors can experience the wild first hand with a trip to safari parks where lions and deer can be easily spotted.', '12.8793', '80.0819', 0, 0),
(4, 'Ashtalakshmi Temple', 0x706c6163652f6173682e6a7067, 'ash.jpg', 'Ashtalakshmi Temple, a delightful and soft coloured temple complex, is located in Besant Nagar, in the South Indian state of Chennai. The temple complex is built a few meters away from the Besant beach on the coast of the gorgeous Bay of Bengal. Ashtalakshmi, the Goddess of Wealth and Knowledge resides here and blesses everyone who visits the temple to offer their prayers with a clean soul. Soak in the divine ambience of the temple on the scenic coast of Bay of Bengal and observe the colourful and intricate tiers on the shrines. The serenity is unquestionable and sure to calm jittery nerves of the pilgrims and devotees. Apart from locals, you can also witness tourists flocking in from different parts of the world to enjoy the mesmerizing beauty of the temple. ', '12.9926', '80.2704', 0, 0),
(5, 'Valluvar Kottam', 0x706c6163652f76616c6c2e504e47, 'vall.PNG', 'Situated in the beautiful city of Chennai, Valluvar Kottam is a temple chariot like-monument built to honour the renowned classical Tamil poet and saint, Thiruvalluvar. This intricately designed monument was built by Kalaignar M.Karunanidhi during the 1970s to honour the contributions of Thiruvalluvar. A popular Tamil poet and philosopher, he has been attributed with the creation of  Thirukkurals which are hailed as one of the greatest works of Tamil literature. Valluvar Kottam is known for its great architecture, built with innovative layouts and well-thought execution. The sublime beauty of Valluvar Kottam is best experienced during the morning hours when the city is just waking up to the day, or you can make a visit to this destination during the evening hours when the sun is just setting over the horizon. The magnificent design of the Valluvar Kottam is a wonderful sight to behold, which makes it the perfect destination to click a few pictures. ', '13.0545', '80.2418', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `delhi`
--

DROP TABLE IF EXISTS `delhi`;
CREATE TABLE IF NOT EXISTS `delhi` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `p_pic` blob,
  `pic_name` varchar(50) NOT NULL,
  `p_text` text,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `cust` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delhi`
--

INSERT INTO `delhi` (`id`, `place`, `p_pic`, `pic_name`, `p_text`, `latitude`, `longitude`, `rating`, `cust`) VALUES
(1, 'Red Fort', 0x706c6163652f5265642d466f72742e6a7067, 'Red-Fort.jpg', 'The Red Fort is an epitome of the Mughal era in India and is the face of tourist attractions in Delhi. Built in 1638, it is an outstanding marvel of Mughal architecture made of red sand stone. Within its magnanimous walls, the chhata bazaar and an every evening sound and light show are special attractions. It is one of the most famous places in Delhi.', '28.6562', '77.2410', 0, 0),
(2, 'India Gate', 0x706c6163652f496e6469612d476174652e6a7067, 'India-Gate.jpg', 'India Gate is one monument that defines Delhi or India for that matter. It was built in 1931 as a memorial for martyrs of World War I and war in Afghanistan. At Rajpath, the structure looks amazing in evening lights. The gardens that line the structure are a must visit among the sightseeing places in Delhi.', '28.6129', '77.2295', 0, 0),
(3, 'Qutub Minar', 0x706c6163652f51757475622d4d696e61722e6a7067, 'Qutub-Minar.jpg', 'Among the other places to visit in Delhi, Qutub Minar stands tall with its 73 meter tall brick minaret. Built by Qutub-ud-din Aibak, the structure has five stories abundant with chiseled carvings and scriptures.', '28.5245', '77.1855', 0, 0),
(4, 'Akshardham Temple', 0x706c6163652f5377616d696e61726179616e2d416b736861726468616d2d54656d706c652e6a7067, 'Swaminarayan-Akshardham-Temple.jpg', 'While sightseeing in Delhi, a visit is necessarily suggested to Swaminarayan Akshardham – one of the largest Hindu temples in the world. Built by the BAPS spiritual organization, it’s a stunning architectural work made of the pink stone and white marble.', '28.6127', '77.2773', 0, 0),
(5, 'Lotus Temple', 0x706c6163652f4c6f7475732d54656d706c652e6a7067, 'Lotus-Temple.jpg', 'Famously known as the Lotus temple in the list of famous tourist places in Delhi, Lotus in the Bahai Temple symbolizes four religions namely Hinduism, Jainism, Buddhism and Islam. This temple belongs to the Bahai faith which proclaims that all people and religions are united. Worshippers of every religion are welcomed here.', '28.5535', '77.2588', 0, 0),
(6, 'Red Fort', 0x706c6163652f5265642d466f72742e6a7067, 'Red-Fort.jpg', '', '28.6562', '77.2410', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kolkata`
--

DROP TABLE IF EXISTS `kolkata`;
CREATE TABLE IF NOT EXISTS `kolkata` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `p_pic` blob,
  `pic_name` varchar(50) NOT NULL,
  `p_text` text,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `cust` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kolkata`
--

INSERT INTO `kolkata` (`id`, `place`, `p_pic`, `pic_name`, `p_text`, `latitude`, `longitude`, `rating`, `cust`) VALUES
(1, 'Howrah Bridge', 0x706c6163652f686f777261682e6a7067, 'howrah.jpg', 'Located over the Hooghly river in West Bengal, Howrah Bridge or the Rabindra Setu is the main connection between Howrah and Kolkata. It is a cantilever bridge and is regarded as one of the busiest ones among them.', '22.5851', '88.3468', 3, 1),
(2, 'Aquatica', '', 'aquatica1.png', 'Aquatica is an 705000sq ft water theme park in Kolkata, India. The theme park was started in 1999. It is one of the largest water amusement parks in Kolkata as well as eastern India.', '22.5626', '88.4652', 0, 0),
(3, 'Victoria Memorial', 0x706c6163652f76322e6a7067, 'v2.jpg', 'The Victoria Memorial is a large marble building, which is considered to be the pride of Kolkata. Built between 1906 and 1921, it is dedicated to the memory of Queen Victoria. Now, it is a museum and a popular tourist spot under the Ministry of Culture.', '22.5448', '88.3426', 0, 0),
(4, 'Marble Palace Mansion', 0x706c6163652f6d61722e6a7067, 'mar.jpg', 'The Marble palace near the Chorbagan in North Kolkata built in 1835 by Rajendra Mallick is famed for its art collection of masterpieces by Reuben and paintings by various renowned international artists such as Reynolds, Van Gogh and Rembrandt.', '22.5823', '88.3601', 3, 4),
(5, 'Science City', 0x706c6163652f7363692e6a7067, 'sci.jpg', 'One of its kind in India, the Science city was inaugurated on 1st July 1997. It is a major attraction for the residents of Kolkata as well as for the people visiting Kolkata. It is one of the finest and the largest science museums in the world and provides a fun way of learning science.', '22.5391', '88.3958', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `infos` varchar(50000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pic` blob NOT NULL,
  `picname` varchar(250) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `state`, `infos`, `city`, `pic`, `picname`, `latitude`, `longitude`) VALUES
(22, 'Maharashtra', '\r\nMumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it\'s India\'s largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated to the Hindu god Shiva. The city\'s also famous as the heart of the Bollywood film industry.', 'mumbai', 0x636974792f4d756d6261692e6a7067, 'Mumbai.jpg', '19.0760', '72.8777'),
(23, 'Delhi', 'Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque, whose courtyard accommodates 25,000 people. Nearby is Chandni Chowk, a vibrant bazaar filled with food carts, sweets shops and spice stalls.', 'delhi', 0x636974792f64656c68692e6a7067, 'delhi.jpg', '28.7041', '77.1025'),
(24, 'West Bengal', 'Kolkata (formerly Calcutta) is the capital of India\'s West Bengal state. Founded as an East India Company trading post, it was India\'s capital under the British Raj from 1773–1911. Today it’s known for its grand colonial architecture, art galleries and cultural festivals. It’s also home to Mother House, headquarters of the Missionaries of Charity, founded by Mother Teresa, whose tomb is on site.\r\n', 'kolkata', 0x636974792f6b6f6c6b6174612e6a7067, 'kolkata.jpg', ' 22.5726', '88.3639'),
(25, 'Tamil Nadu', 'Chennai, on the Bay of Bengal in eastern India, is the capital of the state of Tamil Nadu. The city is home to Fort St. George, built in 1644 and now a museum showcasing the city’s roots as a British military garrison and East India Company trading outpost, when it was called Madras. Religious sites include Kapaleeshwarar Temple, adorned with carved and painted gods, and St. Mary’s, a 17th-century Anglican church.', 'chennai', 0x636974792f6368656e6e61692e706e67, 'chennai.png', ' 13.0827', '80.2707'),
(17, 'Gujarat', 'Surat is a large city beside the Tapi River in the west Indian state of Gujarat. Once known for silk weaving, Surat remains a commercial center for textiles, and the New Textile Market area is lined with fabric shops. Overlooking the river, Surat Castle was built in the 1500s to defend the city against Portuguese colonists. Nearby, the Dutch, Armenian and English cemeteries contain elaborate colonial-era tombs.', 'surat', 0x636974792f73752e6a7067, 'su.jpg', '21.1702', '72.8311');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `c_location` varchar(50) NOT NULL,
  `hash` varchar(250) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `mobile`, `c_location`, `hash`, `active`) VALUES
(4, 'hrkesh', 'hrishinao@gmail.com', 'qwert123', '9022222222', 'surat', 'dwwhvcmvcmcnmac123244$$##', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mumbai`
--

DROP TABLE IF EXISTS `mumbai`;
CREATE TABLE IF NOT EXISTS `mumbai` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `p_pic` blob,
  `pic_name` varchar(50) NOT NULL,
  `p_text` varchar(50000) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `cust` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mumbai`
--

INSERT INTO `mumbai` (`id`, `place`, `p_pic`, `pic_name`, `p_text`, `latitude`, `longitude`, `rating`, `cust`) VALUES
(6, 'Gateway of India', 0x706c6163652f476174652e6a7067, 'Gate.jpg', 'The Gateway of India is one of India\'s most unique landmarks situated in the city of Mumbai. The colossal structure was constructed in 1924. Located at the tip of Apollo Bunder, the gateway overlooks the Mumbai harbor, bordered by the Arabian Sea in the Colaba district. The Gateway of India is a monument that marks India\'s chief ports and is a major tourist attraction for visitors who arrive in India for the first time. At one point of time, this monument represented the grandeur of the British Raj in India. The total construction cost of this monument was approximately 21 lakhs and the whole expense was borne by the Indian government. A favourite spot for tourists, nowadays, this monument attracts vendors, food stalls and photographers. The passing of the \'First Battalion of the Somerset Light Infantry\' was recorded as the first main event that took place at the Gateway of India. This ceremony was conducted on February 28, 1948, when the last set of British troops and divisions left India, post-independence.', '18.9220', '72.8347', 3.06, 50),
(7, 'Juhu Beach', 0x706c6163652f6a7568752e6a7067, 'juhu.jpg', 'The Juhu Beach in Mumbai is one of the most famous Indian beaches. This beach is known to be the one of the most-visited beaches of India and is situated in \'Ville Parle\'. It is located approximately 18 km from the city center and is a desired location for most film shootings. Juhu Beach borders a posh locality where most celebrities stay and therefore, it is quite common to find famous celebrities jogging along the sands of this popular beach of Mumbai. Tourists visit this beach because of its peaceful atmosphere and its scenic beauty. Juhu Beach is also famous for its local delicacies and street food. The food stalls set up here offer excellent cuisines and snack items. People in Mumbai visit this beach to relax and enjoy after a long, tedious day. There are extravagant hotels and apartments located at the southern end of the beach. Watching the sunset in this wonderful place, guarded by the vast Arabian Sea, is a dream-like vision for anyone who visits the beach.', '19.0969', '72.8266', 3, 2),
(8, 'Elephanta Caves', 0x706c6163652f656c652e6a7067, 'ele.jpg', 'The Elephanta Caves are located in Western India on Elephanta Island (otherwise known as the Island of Gharapuri), which features two hillocks separated by a narrow valley. The small island is dotted with numerous ancient archaeological remains that are the sole testimonies to its rich cultural past. These archaeological remains reveal evidence of occupation from as early as the 2nd century BC. The rock-cut Elephanta Caves were constructed about the mid-5th to 6th centuries AD. The most important among the caves is the great Cave 1, which measures 39 metres from the front entrance to the back. In plan, this cave in the western hill closely resembles Dumar Lena cave at Ellora, in India. The main body of the cave, excluding the porticos on the three open sides and the back aisle, is 27 metres square and is supported by rows of six columns each.', '18.9633', '72.9315', 0, 0),
(9, 'Marine Drive', 0x706c6163652f6d6172696e652e6a7067, 'marine.jpg', 'Marine Drive is a km long, arc shaped boulevard along the South Mumbai coast, starting from the southern end of Nariman Point and ending at the famous Chowpatty beach. The coast lines the Arabian sea and is the best place to watch the sunset in Mumbai, or even to just take a leisurely stroll by the sea any time of the day or night.  The Marine Drive is also known as the Queen\'s necklace on account of its shape and yellow streetlights. It makes for a spectacular view at night - you can go to either end of Marine Drive after sunset and see the lights glowing in a perfect arc all along the coast. People come to walk here in the evening to experience the brilliant sunset. It is also one of the places people visit late at night, and you will find vendors selling chai and sutta at all hours. The sound of the waves, a view of the Mumbai skyline and the starry sky easily make Marine Drive one of the most romantic spots in the city.', '18.944', '72.823', 3, 1),
(10, 'Bandra Worli Sea Link', 0x706c6163652f62616e6472612e504e47, 'bandra.PNG', '', '19.0455', '72.8292', 2.5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `r1` float NOT NULL DEFAULT '0',
  `r2` float NOT NULL DEFAULT '0',
  `r3` float NOT NULL DEFAULT '0',
  `r4` float NOT NULL DEFAULT '0',
  `r5` float NOT NULL DEFAULT '0',
  `c1` int(11) NOT NULL DEFAULT '0',
  `c2` int(11) NOT NULL DEFAULT '0',
  `c3` int(11) NOT NULL DEFAULT '0',
  `c4` int(11) NOT NULL DEFAULT '0',
  `c5` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `place`, `r1`, `r2`, `r3`, `r4`, `r5`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 'Gateway of India', 1, 2, 2.85, 3.33, 4.14, 3, 11, 23, 6, 7),
(2, 'Juhu Beach', 0, 0, 3, 0, 0, 0, 0, 2, 0, 0),
(3, 'Elephanta Caves', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Marine Drive', 0, 0, 3, 0, 0, 0, 0, 1, 0, 0),
(5, 'Bandra Worli Sea Link', 1, 2, 3, 0, 0, 1, 1, 4, 0, 0),
(6, 'Dumas Beach', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Hajira Village', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Science Center,Surat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Sardar Patel Museum', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Amaazia Water Park', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Howrah Bridge', 0, 0, 3, 0, 0, 0, 0, 1, 0, 0),
(12, 'Aquatica', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Victoria Memorial', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Marble Palace Mansion', 0, 2, 3, 4, 0, 0, 1, 2, 1, 0),
(15, 'Science City', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'Red Fort', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'India Gate', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'Qutub Minar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'Akshardham Temple', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Lotus Temple', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Marina Beach', 0, 2, 0, 4, 0, 0, 1, 0, 1, 0),
(22, 'MGR Film City', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'Arignar Anna Zoological Park', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Ashtalakshmi Temple', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'Valluvar Kottam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'Essel World', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `revplace`
--

DROP TABLE IF EXISTS `revplace`;
CREATE TABLE IF NOT EXISTS `revplace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `rtitle` varchar(100) NOT NULL,
  `rev` varchar(50000) NOT NULL,
  `rdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revplace`
--

INSERT INTO `revplace` (`id`, `user`, `place`, `rtitle`, `rev`, `rdate`) VALUES
(1, 'hrishi', 'Bandra Worli Sea Link', 'nice', 'It is very nice place', '2018-10-30 12:12:56'),
(2, 'hrishi', 'Bandra Worli Sea Link', 'good', 'very good', '2018-10-30 12:18:58'),
(7, 'hrishi', 'Bandra Worli Sea Link', 'wefe2', 'History always inspires and makes you feel like traveling. The more you travel the like to learn history. The more you learn about history the more inspiration you get. ', '2018-10-30 13:35:39'),
(8, 'hrishi', 'Bandra Worli Sea Link', 'u16co008 dbms ass3', '&nbsp;&nbsp;', '2018-10-30 14:18:41'),
(9, 'hrishi', 'Gateway of India', 'nice', 'it is a very nice place...got for it', '2018-10-30 17:02:17'),
(10, 'hrishi', 'Gateway of India', '2d3e', 'd33df', '2018-10-30 17:05:05'),
(11, 'hrishi', 'Gateway of India', 'm2nvf2', 'jhfqqmvqcmqvc', '2018-10-30 17:09:34'),
(12, 'hrishi', 'Gateway of India', 'av', 'ncmhsa ', '2018-10-30 17:54:41'),
(13, 'hrishi', 'Gateway of India', 'xmsv', 'nbac amxcbm', '2018-10-30 17:55:43'),
(14, 'hrishi', 'Gateway of India', 'wefewfe', 'sdvwdvvdw', '2018-10-30 17:59:10'),
(15, 'hrishi', 'Gateway of India', 'new', 'cmvcssqc,', '2018-10-30 18:02:02'),
(16, 'hrishi', 'Gateway of India', 'last', 'mvmsanc', '2018-10-30 18:08:25'),
(17, 'hrishi', 'Gateway of India', 'one ', 'q,qbc,c', '2018-10-30 18:08:49'),
(18, 'hrishi', 'Gateway of India', 'final', 'aamvscmvcw,c', '2018-10-30 18:10:26'),
(19, 'hrishi', 'Gateway of India', 'try', 'jgacjsqcqc', '2018-10-30 22:28:26'),
(20, 'hrishi', 'Marine Drive', 'mast', 'u should go', '2018-10-30 23:13:33'),
(21, 'hrkesh', 'Marina Beach', 'hi', 'this is good', '2018-10-31 01:02:05'),
(22, 'hrkesh', 'Marina Beach', 'very good', 'good', '2018-10-31 01:02:29'),
(23, 'hrkesh', 'Howrah Bridge', 'kqgdqkwv', 'kbcdsvj', '2018-10-31 02:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

DROP TABLE IF EXISTS `surat`;
CREATE TABLE IF NOT EXISTS `surat` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `p_pic` blob,
  `pic_name` varchar(50) NOT NULL,
  `p_text` varchar(50000) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `cust` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `place`, `p_pic`, `pic_name`, `p_text`, `latitude`, `longitude`, `rating`, `cust`) VALUES
(1, 'Dumas Beach', 0x706c6163652f64756d2e6a7067, 'dum.jpg', 'Dumas beach is a very popular destination situated at a distance of 18 kms from Surat city. Travelers recommend this destination for its calming effect and picturesque scenery.', '21.0838', '72.7093', 0, 0),
(2, 'Hajira Village', 0x706c6163652f68617a6972612e6a7067, 'hazira.jpg', 'Located at the edge of the Arabian Sea, Hajira is a picturesque town located in the state of Gujarat. This destination is famous for its idyllic beach and is also a transhipment port, owing to its shallow water depths. Along with being a popular recreational destination, Hajira is also famous for its health tourism due to the presence of numerous hot water springs here. ', '21.1784', '72.6588', 0, 0),
(3, 'Science Center,Surat', 0x706c6163652f73636969692e6a7067, 'sciii.jpg', 'The Science center in Surat was created with the view to foster science learning and temperament. The Center houses a science museum, an art gallery, a planetarium and an amphitheatre.', '21.1702', '72.7956', 0, 0),
(4, 'Sardar Patel Museum', 0x706c6163652f73706d2e6a7067, 'spm.jpg', 'The Sardar Patel Museum was established in the city of Surat in the year 1890 and has since then has been highly recommended by the people, maintaining a popular position among the Surat tourist attractions.', '21.1957', '72.8201', 0, 0),
(5, 'Amaazia Water Park', 0x706c6163652f616d6d2e6a7067, 'amm.jpg', 'Find the best way to beat the summer heat at Amaazia Water Park. Housing thrilling rides like King Cobra, Kamikaze, Forest Jump and Twister for the adrenaline junkies and fun-filled rides like Windigo, Free Fall, Tribal Twist, Carnival Beach and many more for the high-spirited bunch, the Amaazia Water Park has something for everyone. Relax at the Cabana when you want to catch some breath.', '21.1945', '72.8650', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user`, `city`, `place`) VALUES
(15, 'hrkesh', 'Mumbai', 'Bandra Worli Sea Link'),
(16, 'hrkesh', 'Kolkata', 'Howrah Bridge'),
(17, 'hrkesh', 'Kolkata', 'Marble Palace Mansion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
