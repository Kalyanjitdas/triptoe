-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 11:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triptoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_table`
--

CREATE TABLE `hotel_table` (
  `Hotel_id` int(11) NOT NULL,
  `Hotel_name` varchar(255) NOT NULL,
  `Hotel_location` varchar(300) NOT NULL,
  `Hotel_city` varchar(100) NOT NULL,
  `Hotel_image` varchar(300) NOT NULL,
  `Hotel_rating` varchar(20) NOT NULL,
  `Hotel_description` varchar(3000) NOT NULL,
  `Hotel_facilities` varchar(2000) NOT NULL,
  `hotel_state` varchar(50) NOT NULL,
  `cover_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meghalaya`
--

CREATE TABLE `meghalaya` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meghalaya`
--

INSERT INTO `meghalaya` (`place_id`, `place_name`, `description`, `image`, `category`, `location`) VALUES
(5, 'Dawki', 'Dawki-Located in the state of Meghalaya, a place filled with waterfalls, rivers, rich wildlife and most importantly a place close to the clouds, is a small village named Dawki. Nestled at the bottom of Jaintia hills is one of the cleanest villages in India. The little village is known for its beautiful waterfalls that flow uninterrupted and the lush green environment. The village is also famous for its crystal clear waters from the river and falls that flow throughout the area. The water here flows uninterrupted, not just at the village but also passed through the borders of Bangladesh. Here is an ultimate travel guide to the village of Dawki, Meghalaya.', 'admin_upload/dawki.jpeg', 'Landscape', 'Situated in West Jaintia Hills'),
(6, 'Mawlynnong', 'Mawlynnong, located in Meghalaya, is called “God’s own Garden” and has enough reasons for that. It was awarded the title “cleanest village in Asia” by Discover India in 2003. Cleanliness must be its most important aspect, but it has achieved so much more than that. From a full hundred percent literacy rate to a highly progressive scenario for women, it has struck all the correct chords.', 'admin_upload/mawlynnong.jpg', 'Landscape', 'Located in the East Khasi Hills.'),
(7, 'Wei Sawdong', 'This falls is about 7km from Sohra and just 2 km from Kshaid Daiñthlen Falls. It will take about a 2 hr drive from Shillong to reach this place. \r\nThe name ‘Wei Sawdong’ implies a round lagoon. The clear waters cascades down into a beautiful three step lagoon. This falls is enclosed within a thicket of green forest.\r\nThe road leading to this falls is pretty narrow with mountains of earth on either side making for a very picturesque sight indeed. \r\nWhen you get there you will have to trek for about 20 minutes to reach it’s viewpoint. You will get a breathtaking view of this falls below. It will take another 20 mins to reach to the bottom of this falls. However do remember that treks and trails in Meghalaya require one to be moderately fit.\r\nThe trial to the base of this falls is mostly marked by bamboo logs entrenched into the earth and covered with fallen leaves. As you follow the trial you will reach a steep stairway made of bamboos that will bring your heart to a standstill. Let’s just say that the entire trek will thrill and fill you.', 'admin_upload/Wei Sawdong.jpg', 'Landscape', 'Situated at 7km from Sohra'),
(8, 'Nohkalikai Falls', 'Nohkalikai Falls is the tallest plunge waterfall in India. Its height is 340 metres (1,115 ft).The waterfall is located in the Indian state of Meghalaya, near Cherrapunji, one of the wettest places on Earth. Nohkalikai Falls are fed by the rainwater collected on the summit of a comparatively small plateau and decrease in power during the dry season, from December to February. Below the falls is a plunge pool with unusual green-colored water.', 'admin_upload/Nohkalikai Falls.jpg', 'Landscape', 'Located near Cherrapunji'),
(9, 'Double decker bridge', 'Deep in the dense tropical forest of Meghalaya, and shrouded in cloud and rain for much of the year, are some astonishing man-made natural wonders. Known as living root bridges, inventive members of the Khasi tribe have trained them to grow from the roots of ancient rubber trees, native to the northeast region. The root bridges provide a stable alternative to wooden bridges, which decay and get destroyed during the lengthy monsoon seasons.', 'admin_upload/5cd222c22315430e41_rootbridge1.jpg', 'Landscape', 'Located in the tropical forest of Meghalaya'),
(10, 'Single Root Bridge', 'There are bridges around the world that are known to be human’s finest creations! But the natural marvel of Living Root Bridges in Meghalaya is mindblowing. These wonderful structures have meticulously grown over a period of time and are among the biggest attractions in Meghalaya.\r\nThe ever evolving Meghalaya bridges are made up of tangled thick roots that provide formidability to the structure and make it good enough to hold 50 or more people in one go. They are grown by trained Khasi and Jaintia tribes who have mastered the art of growing root bridges across raised banks of streams running through the dense woods of Meghalaya.', 'admin_upload/Living-root-bridge-4.jpg', 'Landscape', 'Located in the Jaintia Hills'),
(11, 'Arwah Lumshynna Cave ', 'Arwah Lumshynna Cave is located in Sohra which is about 54 km from the capital city of Shillong. The Arwah Cave is known for its limestone formations and fossils of fish bones, shells, etc.\r\n\r\nArwah Lumshynna Cave is a huge cave surrounded by the thick forest of Law Shynna and is much larger in size than the Mawsmai Cave in Sohra.\r\n\r\nArwah Cave is known for its fossil formations, limestone structures and stalagmite and stalactite formations which are believed to be millions of years old and are naturally carved. It houses many narrow passages and chambers as well as a stream that flows inside the cave.', 'admin_upload/195195136Cherrapunji_Arwah_Cave_Main.jpg', 'Archaeological', 'Located in Sohra'),
(12, 'Ward’s/Pollock’s Lake', 'One of the most popular attractions of Shillong, Ward’s lake is a must-visit place when in this pristine north-eastern city. Also known as Pollock’s Lake, this artificial water body is encircled by an extensive lush garden and lies in the middle of the city. Take a walk around this horse-shoe shaped lake on the cobble-stone path or simply admire the colorful floral beds in the garden. It is equally popular amidst locals, family vacationers and honeymooning couples, as a picnic spot.', 'admin_upload/wards-lake-head-413.jpeg', 'Adventure', 'Located in Shillong');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_desc`, `price`, `discount`, `delivery`, `image`) VALUES
(4, 'product 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '500', '10', '12 jan 2020', 'upload/bamboo.jpeg'),
(5, 'product 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '255', '30', '14 jan 2020', 'upload/bmboo1.jpg'),
(6, 'product 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '260', '10', '14 fav 2020', 'upload/bmboo2.jfif'),
(7, 'product 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '653', '50', '19 jan 2020', 'upload/bmboo3.jpg'),
(8, 'product 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '100', '0', '12 may 2020', 'upload/bmboo4.jpg'),
(9, 'product 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1000', '90', '19 jan 2020', 'upload/bmboo5.jpg'),
(10, 'product 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '260', '10', '12 jan 2020', 'upload/bmboo6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rajasthan`
--

CREATE TABLE `rajasthan` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(60) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(30) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rajasthan`
--

INSERT INTO `rajasthan` (`place_id`, `place_name`, `description`, `image`, `category`, `location`) VALUES
(5, 'City Palace', 'City Palace, Udaipur is a palace complex situated in the city of Udaipur in the Indian state of Rajasthan. It was built over a period of nearly 400 years, with contributions from several rulers of the Mewar dynasty. Its construction began in 1553, started by Maharana Udai Singh II of the Sisodia Rajput family as he shifted his capital from the erstwhile Chittor to the new found city of Udaipur.The palace is located on the east bank of Lake Pichola and has several palaces built within its complex.\r\nThe City Palace in Udaipur was built in a flamboyant style and is considered the largest of its type in the state of Rajasthan. It was built atop a hill, in a fusion of the Rajasthani and Mughal architectural styles, providing a panoramic view of the city and its surroundings.', 'admin_upload/udypr1.jpg', 'Historical', 'Situated in the city of Udaipur'),
(6, 'Jag Mandir', 'Jag Mandir is a palace built on an island in the Lake Pichola. It is also called the \"Lake Garden Palace\". The palace is located in Udaipur city in the Indian state of Rajasthan. Its construction is credited to three Maharanas of the Sisodia Rajputs of Mewar kingdom. The construction of the palace was started in 1551 by Maharana Amar Singh, continued by Maharana Karan Singh (1620–1628) and finally completed by Maharana Jagat Singh I (1628–1652). It is named as \"Jagat Mandir\" in honour of the last named Maharana Jagat Singh. The royal family used the palace as a summer resort and pleasure palace for holding parties. The palace served as a refuge to asylum seekers on two occasions.', 'admin_upload/udypr3.jpg', 'Historical', 'located in Udaipur city'),
(7, 'sun set/sunrise point', 'Located near the lake pichola one can get a mesmarizing view of the sun set as well as the sunrise. Tourists from all the over the country come to this place to enjoy this view.', 'admin_upload/udypr4.jpg', 'Landscape', 'Located near the lake pichola'),
(9, 'Lake pichola', 'Lake Pichola, situated in Udaipur city in the Indian state of Rajasthan, is an artificial fresh water lake, created in the year 1362 AD, named after the nearby Picholi village. It is one of the several contiguous lakes, and developed over the last few centuries in and around the famous Udaipur city. The lakes around Udaipur were primarily created by building dams to meet the drinking water and irrigation needs of the city and its neighborhood. Two islands, Jag Niwas and Jag Mandir are located within Pichola Lake, and have been developed with several palaces to provide views of the lake.\r\n\r\nThere are four islands on the lake:\r\n\r\nJag Niwas, where the Lake Palace is built.\r\nJag Mandir, with the palace of the same name.\r\nMohan Mandir, from where the king would watch the annual Gangaur festival celebration.\r\n\r\nArsi Vilas, small island which was an ammunition depot, but also a small palace. This one was built by one of the maharanas of Udaipur to enjoy the sunset on the lake. It is also a sanctuary catering to a variety of birds, including tufted ducks, coots, egrets, terns, cormorants and kingfishers.', 'admin_upload/udypr6.jpg', 'Landscape', 'situated in Udaipur city');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `password`, `token`, `status`) VALUES
(4, 'kalyanjit', 'Das', 'djeet4938@gmail.com', '$2y$10$jxC2epLtDa.NAB6aWucuTeqrWgt6ElF4GUjN7Qg42uTfmVjRwPFk6', 'abcds', 'active'),
(5, 'Bhavesh', 'chauhan', 'bhavesh@gmail.com', '$2y$10$WPxkTmQUVA/35T7j/vwq5Owg2GwLkJDrHkwNUJaZVMO09LCpwzmP.', 'abcds', 'active'),
(6, 'aa', 'aa', 'aa@aa', '$2y$10$bfbAIUTgu1R8tN9autFgmulUJjgcX9.bl.IDTPKZ0W88TOjrLKMxy', 'abcds', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tripura`
--

CREATE TABLE `tripura` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tripura`
--

INSERT INTO `tripura` (`place_id`, `place_name`, `description`, `image`, `category`, `location`) VALUES
(2, 'JAMPAI HILL', 'The Jampui Hills stretch from North to South and are bordering the state Mizoram in the east.930 m high Betalongchhip, also known as Betlingchhip, Balinchhip and Thaidawr, is the highest', 'admin_upload/jampuihills1.png', 'Landscape', 'Located in the borders of Tripura and Mizoram'),
(3, 'Dumboor Lake', 'Dumboor Lake is a water area of 41 km2, with 48 islands surrounded by green vegetation. There is a Hydel Project near the lake from where the River Gomati originates.', 'admin_upload/dumboorlake1.png', 'Landscape', 'Located 42 km from Agartala'),
(4, 'Devtamura', 'Devtamura (or Debtamura) is a hill range in South district of Tripura, India. It is known for an archaeological site of rock sculptures, a panel of carved images, on the bank', 'admin_upload/CHABIMURA.jpg', 'Landscape', 'Situated in the South Tripura district'),
(5, 'Neermahal', 'The palace is the largest of its kind in India and the only one in Eastern India. It is so huge, it cannot be fit into a single picture frame on the standard camera until you are at a distance of approximately 800 metres from the entrance. There are only two water palaces in India, the other one being the Jal Mahal in Rajasthan. However, the latter is significantly smaller in size than Neermahal.\r\nKnown as the ‘lake palace’ of Tripura, Neer-Mahal was constructed as a summer residence. It was Maharaja Bir Bikram Kishore Manikya Debbarma', 'admin_upload/neermahal.jpg', 'historical', 'Located in Melagarh');

-- --------------------------------------------------------

--
-- Table structure for table `uttarakhand`
--

CREATE TABLE `uttarakhand` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(60) NOT NULL,
  `place_desc` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uttarakhand`
--

INSERT INTO `uttarakhand` (`place_id`, `place_name`, `place_desc`, `image`, `category`, `location`) VALUES
(8, 'Kempty Fall', 'Kempty Fall is located at 15 kms from Mussoorie on the Yamunotri Road. Kempty Falls is accessible by car, taxi or bus which are easily available from Mussoorie station.Now it has become a must visit tourist destination for people visiting Mussoorie.\r\n\r\nTo', 'admin_upload/india-kempty-falls-mussoorie-uttarakhand-wallpaper-preview.jpg', 'Landscape', 'located at 15 kms from Mussoorie'),
(9, 'Dhanaulti', 'Dhanaulti is a hill station situated in the foothills of the Garhwal Himalayan range located 24 km from the hill station of Mussoorie. The tinsel town of Dhanaulti is emerging as a popular winter destination because of its tranquil vistas and its proximit', 'admin_upload/dhanaulti.jpg', 'Landscape', 'Located in foothills of the Garhwal range.'),
(10, 'The Forest Research Institute (FRI)', 'The Forest Research Institute (FRI)  is an institute of the Indian Council of Forestry Research and Education and is a premier institution in the field of forestry research in India. It is located at Dehradun in Uttarakhand, and is among the oldest instit', 'admin_upload/varun-gaba-6gmFal4KkIk-unsplash.jpg', 'Historical', 'Located in Dehradun'),
(11, 'The Buddha Temple', 'The Buddha Temple in Dehradun is among the most notable tourist places in Dehradun. Known for its intriguing Japanese style architecture, beautifully-manicured gardens, and serene ambience, the temple depicts the life and teachings of Lord Buddha in the f', 'admin_upload/carson-arias-qAelAS7rU-4-unsplash.jpg', 'Pilgrimage', 'Located in Dehradun'),
(12, 'Kedarnath Temple', 'Kedarnath Temple is a Hindu temple dedicated to lord Shiva. Located on the Garhwal Himalayan range near the Mandakini river, Kedarnath is located in the state of Uttarakhand, India. Due to extreme weather conditions, the temple is open to the general publ', 'admin_upload/akshay-syal-5vDTocCCutE-unsplash.jpg', 'Pilgrimage', 'Located on the Garhwal Himalayan range'),
(13, 'Badrinath or Badrinarayan Temple', 'Badrinath or Badrinarayan Temple is a Hindu temple dedicated to Vishnu which is situated in the town of Badrinath in Uttarakhand, India. The temple and town form one of the four Char Dham and Chota Char Dham pilgrimage sites. The temple is also one of the', 'admin_upload/avi-theret-2u6eLolV1JY-unsplash.jpg', 'Pilgrimage', 'Situated in the town of Badrinath'),
(23, 'Mussorie', 'Mussorie ia the biggest and most visited hill.station of uttrakahand which is situated 35 km from dehradun. It covers the hilly areas which makes it more beautiful . When snowfall falls there,it actually looks like a heaven and crowds gather more fastly from different different parts of uttrakhand and other states', 'admin_upload/76506898.jpg', 'Landscape', 'situated 35 km from dehradun'),
(24, 'Chopta', 'Chopta is a small region of meadows and evergreen forest area which is a part of kedarnath wildlife sanctuary located in Uttarakhand state, India and a base for trekking to Tungnath, third temple of Panch Kedar, which lies 3.5 kilometres  away. Located at a distance of 1.5 kilometres  from Tungnath is Chandrashila, a rising to over 4,000 metres Chopta is an unspoiled natural destination lying in the lap of the Uttarakhand Himalayas and offers views of the imposing Himalayan range\r\nThe Chopta - Tungnath - Chandrashila trek is a destinations for trekkers. The Chopta region has many treks and trails cutting through jungles and grasslands. Chandrashilla, Tunganath and Devariyatal are the best known trekking routes in the Chopta region. Because of an abundance of birds, Chopta is popular among birdwatchers.\r\nSome activities in Chopta\r\nCamping and trekking, yoga, survival activity\r\nSnow trekking, snow skiing\r\nRock craft, rock climbing, rappelling', 'admin_upload/under banner_0.jpg', 'Adventure', 'Located kedarnath wildlife sanctuary'),
(25, 'Har Ki Pauri', 'Har Ki Pauri is a famous ghat on the banks of the Ganges in Haridwar in the Indian state of Uttarakhand. This revered place is the major landmark of the holy city of Haridwar. Literally, \"Hari\" means \"God\", \"Ki\" means \"of\" and \"Pauri\" means \"steps\". Lord Vishnu is believed to have visited the Brahmakund in Har Ki Pauri in the Vedic times.\r\nIt is believed that it is precise spot where the Ganges leaves the mountains and enters the plains. The ghat is on the west bank of Ganges canal through which the Ganges is diverted just to the north. Har Ki Pauri is also the area where thousands of pilgrims converge and the festivities commence during the Kumbha Mela (कुम्भ मेला), which takes place every twelve years, and the Ardh Kumbh Mela (अर्धकुम्भ मेला), which takes place every six years and the Punjabi festival of Vaisakhi, a harvest festival occurring every year in the month of April.', 'admin_upload/1543938801_img_20180513_094523.jpg', 'Pilgrimage', 'Located in in Haridwar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_table`
--
ALTER TABLE `hotel_table`
  ADD PRIMARY KEY (`Hotel_id`);

--
-- Indexes for table `meghalaya`
--
ALTER TABLE `meghalaya`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rajasthan`
--
ALTER TABLE `rajasthan`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tripura`
--
ALTER TABLE `tripura`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `uttarakhand`
--
ALTER TABLE `uttarakhand`
  ADD PRIMARY KEY (`place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_table`
--
ALTER TABLE `hotel_table`
  MODIFY `Hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meghalaya`
--
ALTER TABLE `meghalaya`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rajasthan`
--
ALTER TABLE `rajasthan`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tripura`
--
ALTER TABLE `tripura`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uttarakhand`
--
ALTER TABLE `uttarakhand`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
