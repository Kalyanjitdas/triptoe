-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 04:35 AM
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
-- Table structure for table `consultant_table`
--

CREATE TABLE `consultant_table` (
  `c_id` int(11) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `c_lname` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_photo` varchar(255) NOT NULL,
  `C_certificates` varchar(2000) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultant_table`
--

INSERT INTO `consultant_table` (`c_id`, `c_fname`, `c_lname`, `c_email`, `c_phone`, `c_photo`, `C_certificates`, `description`) VALUES
(1, 'Kalyanjit', 'Das', 'kalyanjitdas123@gmail.com', '8258063211', 'employees_images/WhatsApp Image 2021-04-21 at 7.32.26 PM.jpeg', 'generated _page-0003.jpg generated _page-0004.jpg generated _page-0005.jpg generated _page-0006.jpg ', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.'),
(2, 'Debanjan', 'Biswas', 'debanjanbiswas1232@gmail.com', '2231566523', 'employees_images/debanjan.jpg', 'generated _page-0005.jpg generated _page-0006.jpg generated _page-0007.jpg ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(3, 'Bhavesh ', 'Chauhan', 'bhaveshchauhan123@gmail.com', '8987565458', 'employees_images/bhavesh.jpg', 'generated _page-0005.jpg generated _page-0006.jpg generated _page-0007.jpg ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(4, 'Tarun', 'Chauhan', 'tarunchauhan123@gmail.com', '7896541235', 'employees_images/tarun.jpg', 'generated _page-0006.jpg generated _page-0007.jpg ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `event_description` varchar(500) NOT NULL,
  `event_start` varchar(255) NOT NULL,
  `event_end` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_image`, `event_description`, `event_start`, `event_end`, `location`) VALUES
(2, 'Kumbh Mela', 'event_images/1547553787-2337.jpg', 'The next Kumbh Mela will be held in 2021 in Haridwar, a religious event which will be attended by millions of devotees around the world. The Kumbh Mela is held at one of the four holy pilgrimage destinations, Haridwar, Nashik, Allahabad and Ujjain, every 12 years by rotation.', '2021-04-08', '2021-05-12', ' Haridwar'),
(3, 'Durga Puja', 'event_images/durga-puja.jpg', 'Durga Puja, also called Durgotsava, is an annual Hindu festival originating in the Indian subcontinent which reveres and pays homage to the Hindu goddess, Durga.It is particularly popular and traditionally celebrated in the Indian states of West Bengal, Assam, Odisha, Tripura and the country of Bangladesh, and the diaspora from this region, and also in Mithilanchal regions of Bihar and Nepal. The festival is observed in the Indian calendar month of Ashwin, which corresponds to the months of Sept', '2021-10-11', '2021-10-15', 'Tripura'),
(4, 'Udaipur Mewar Festival', 'event_images/Udaipur-Mewar-Festival.jpg', 'This famous festival of Rajasthan celebrated to welcome the spring season, is one of the ancient and oldest festivals of Rajasthan. Presently, the festivity celebrated in Udaipur is splendour filled. Amongst the carnival time, the entire city assists the travellers with dazzling light and elaboration that is truly surprising to watch.', '2021-03-11', '2021-03-15', 'Udaipur');

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

--
-- Dumping data for table `hotel_table`
--

INSERT INTO `hotel_table` (`Hotel_id`, `Hotel_name`, `Hotel_location`, `Hotel_city`, `Hotel_image`, `Hotel_rating`, `Hotel_description`, `Hotel_facilities`, `hotel_state`, `cover_image`) VALUES
(7, 'Welcomhotel The Savoy', 'Library Chowk, 248179 Mussoorie, India ', 'Mussoorie', '100723258.jpg 150350037.jpg 260847476.jpg 260847496.jpg 260847502.jpg 283593243.jpg 283593269.jpg 283593318.jpg', '4', 'Built in English Gothic architecture style, Welcomhotel The Savoy - Member ITC Hotels Group is situated 2,500 m above sea level amidst the Gharwal Hills in Mussoorie. It features 4 dining options, a spa and a gym. 24-hour room service is provided.\r\n\r\nThe property is 7 km from Lal Tibba (Red Hill), 5 km from Gun Hill and 15 km from Dhanaulti hill station. Dehradun Railway Station is 32 km away, while Jolly Grant Airport is 55 km away.\r\n\r\nFitted with a balcony, elegant rooms are equipped with air conditioning and heating systems, and feature a flat-screen TV with cable channels, a minibar and an electric kettle. A wardrobe and a personal safe are included. The attached bathroom comes with shower facilities and a hairdryer.\r\n\r\nGuests can dine at Fortune Deli or head to Welcomhotel The Savoy - Member ITC Hotels Group’s 24-hour coffee shop. Refreshing drinks are offered at Nostradamus and Beer Garden.\r\n\r\nThe hotel houses meeting/banqueting facilities, a tour desk and a business centre. Staff at the 24-hour reception can assist with luggage storage, currency exchange and laundry services.\r\n\r\nChrist Church is located 450 m away, Gun Hill is 2 km while Camels Back Road and New Lal Tibba are within 5 km of the property. Jabarkhet Wildlife Reserve is 7 km and Kempty Falls is 14 km from the property.', '<i class=\'fas fa-wifi\'></i> Free WiFi;;<i class=\'fas fa-parking\'></i> Free parking;;<i class=\'fas fa-hot-tub\'></i> Spa and wellness centre;;<i class=\'fas fa-utensils\'></i> Restaurant;;<i class=\'fas fa-concierge-bell\'></i> Free Room service;;<i class=\'fas fa-money-check-alt\'></i> Atm available', 'Uttarakhand', 'hotel_images/92505472.jpg'),
(8, 'The Claridges Nabha Residence', '  Airfield, Barlowgunj, 248179 Mussoorie, India ', 'Mussoorie', '100723258.jpg 150350037.jpg 260847476.jpg 260847496.jpg 260847502.jpg 283593243.jpg 283593269.jpg 283593318.jpg', '3', 'Set in an elegant building, The Claridges Nabha Residence features a spa, restaurant and a garden.\r\n\r\nAir-conditioned rooms are fitted with a sofa seating area, a flat-screen TV with satellite channels and tea/coffee making facilities. The en suite bathroom comes with hot/cold shower facilities.\r\n\r\nGuest facilities include a 24-hour front desk, travel arrangements and meeting/banquet facilities.\r\n\r\nLocal Indian, Chinese and continental dishes can be enjoyed at The Pavilion Restaurant. Alcoholic and non-alcoholic drinks can be enjoyed at the The Victorian Bar. Room service options are available as well.\r\n\r\nThis luxurious property is located within 4 km to Gun Hill district and 8 km to Lal Tibba. Dehradun Railway Station is 30 km away while Jolly Grant Airport is 80 km from the hotel.\r\n\r\nCouples particularly like the location — they rated it 8.6 for a two-person trip.', '<i class=\'fas fa-wifi\'></i> Free WiFi;;<i class=\'fas fa-parking\'></i> Free parking;;<i class=\'fas fa-hot-tub\'></i> Spa and wellness centre;;<i class=\'fas fa-concierge-bell\'></i> Free Room service', 'Uttarakhand', 'hotel_images/uk hotel 2.jpg'),
(9, 'The Vamika Stay', ' Ghana Road , Shashbani,Mukteshwar Near Gahna Waterfall, 263132 Mukteswar, India –', 'Mukteshwar', '100723258.jpg 150350037.jpg 260847476.jpg 260847496.jpg 260847502.jpg 283593243.jpg 283593269.jpg 283593318.jpg', '3', 'Located in Mukteswar, The Vamika Stay offers a terrace. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi. Free private parking is available and the hotel also provides car hire for guests who want to explore the surrounding area.\r\n\r\nAll units are equipped with air conditioning, a flat-screen TV with satellite channels, a kettle, a shower, a hairdryer and a wardrobe. At the hotel every room has a private bathroom with free toiletries.\r\n\r\nGuests at The Vamika Stay can enjoy a continental breakfast.\r\n\r\nGuests at the accommodation will be able to enjoy activities in and around Mukteswar, like cycling.\r\n\r\nThe nearest airport is Pantnagar Airport, 48 km from The Vamika Stay.', '<i class=\'fas fa-wifi\'></i> Free WiFi;;<i class=\'fas fa-parking\'></i> Free parking;;<i class=\'fas fa-utensils\'></i> Restaurant', 'Uttarakhand', 'hotel_images/uk hotel 3.jpg'),
(10, 'Radisson Blu Hotel', 'Plot No C-1, Sector 12, BHEL Township, 249403 Haridwār, India', 'Haridwar', '100723258.jpg 150350037.jpg 260847476.jpg 260847496.jpg 260847502.jpg 283593243.jpg 283593269.jpg 283593318.jpg', '5', 'Modern spa treatments await at Radisson Blu Hotel, a 5-star property in Haridwār, Ganges City. Its modern rooms come with free Wi-Fi and a flat-screen TV. Five dining options and 24-hour room service are also available.\r\n\r\nFeaturing contemporary décor, the air-conditioned rooms are all equipped with a DVD player and tea/coffee making facilities. En suite bathrooms come with a shower.\r\n\r\nParking is free. European and Asian therapies can be enjoyed at the spa. The hotel also provides a business centre with computer work stations.\r\n\r\nInternational and Asian cuisines, as well as vegetarian options, are served at Next 2 and Wok 12 restaurants.\r\n\r\nRadisson Blu Hotel is 9 km from Haridwār Train and Bus Stations. It is 42 km from Jolly Grant Airport in Dehradun.', '<i class=\'fas fa-wifi\'></i> Free WiFi;;<i class=\'fas fa-parking\'></i> Free parking;;<i class=\'fas fa-hot-tub\'></i> Spa and wellness centre;;<i class=\'fas fa-utensils\'></i> Restaurant;;<i class=\'fas fa-concierge-bell\'></i> Free Room service;;<i class=\'fas fa-money-check-alt\'></i> Atm available', 'Uttarakhand', 'hotel_images/uk hotel 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345');

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Mr.', 'Kalyanjit', 'Das', 'Superior Room', 'Double', 1, '2021-04-24', '2021-04-24', 0.00, 0.00, 0.00, 'Room only', 0.00, 0),
(3, 'Dr.', 'gfgffg', 'fgfgfbggb', 'Superior Room', 'Double', 1, '2021-04-29', '2021-04-30', 320.00, 326.40, 0.00, 'Room only', 6.40, 1),
(4, 'Mr.', 'Debanjan', 'biswas', 'Deluxe Room', 'Double', 1, '2021-04-28', '2021-04-28', 0.00, 0.00, 0.00, 'Full Board', 0.00, 0),
(5, 'Mr.', 'vbfb', 'fvbfbg', 'Guest House', 'Single', 1, '2021-04-28', '2021-04-28', 0.00, 0.00, 0.00, 'Room only', 0.00, 0),
(6, 'Mr.', 'Kalyanjit', 'Das', 'Superior Room', 'Single', 1, '2021-04-30', '2021-05-02', 640.00, 659.20, 12.80, 'Breakfast', 6.40, 2),
(7, 'Mr.', 'Kalyanjit', 'Das', 'Superior Room', 'Double', 1, '2021-04-29', '2021-04-30', 320.00, 339.20, 12.80, 'Breakfast', 6.40, 1);

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
(9, 'Lake pichola', 'Lake Pichola, situated in Udaipur city in the Indian state of Rajasthan, is an artificial fresh water lake, created in the year 1362 AD, named after the nearby Picholi village. It is one of the several contiguous lakes, and developed over the last few centuries in and around the famous Udaipur city. The lakes around Udaipur were primarily created by building dams to meet the drinking water and irrigation needs of the city and its neighborhood. Two islands, Jag Niwas and Jag Mandir are located within Pichola Lake, and have been developed with several palaces to provide views of the lake.\r\n\r\nThere are four islands on the lake:\r\n\r\nJag Niwas, where the Lake Palace is built.\r\nJag Mandir, with the palace of the same name.\r\nMohan Mandir, from where the king would watch the annual Gangaur festival celebration.\r\n\r\nArsi Vilas, small island which was an ammunition depot, but also a small palace. This one was built by one of the maharanas of Udaipur to enjoy the sunset on the lake. It is also a sanctuary catering to a variety of birds, including tufted ducks, coots, egrets, terns, cormorants and kingfishers.', 'admin_upload/udypr6.jpg', 'Landscape', 'situated in Udaipur city'),
(11, 'Meerabai temple', 'Chittorgarh is the place where Meera Bai was born who was a Rajput princess and is also being well known as a poetess and saint. The princess had given up her lavish lifestyle and dedicated her life in the worship of Lord Krishna. The Meera temple is constructed to be dedicated to her and is a very famous Hindu temple which is a must visit on your tour to Rajasthan. The splendid work of art on the temple attracts a large number of tourists. The temple reflects the Indo-Aryan style of architecture which was very famous in those times and is still a part of our cultural heritage. The Meera Bai temple and the Kumbha Shyam temple are both built on the same ground. On the outer side of the Meera Bai temple you will notice a carved statue of five human bodies with one head which symbolizes the fact that people of all castes and creed are the same and no differences exists among them. ', 'admin_upload/meerabai.jpg', 'Pilgrimage', 'Located in Chittorgarh'),
(12, 'Victory tower', 'The Vijaya Stambha is an imposing victory monument located within Chittor Fort in Chittorgarh, Rajasthan, India. The tower was constructed by the Mewar king, Rana Kumbha, in 1448 to commemorate his victory over the combined armies of Malwa and Gujarat led by Mahmud Khilji. The tower is dedicated to Vishnu.\r\nWhile Vijaya Stambha is its common name, it is technically a Kirttistambha or Kirti Stambha, a \"tower of fame\".', 'admin_upload/Victory tower.jpg', 'Historical', 'Located within Chittor Fort in Chittorgarh'),
(13, 'Chittorgarh', 'Chittorgarh(also Chittor or Chittaurgarh) is a major city in Rajasthan state of western India. It lies on the Berach River, a tributary of the Banas, and is the administrative headquarters of Chittorgarh District. It was capital of Rajput State of Medapata (Modern Mewar) during 8th to 16th Century. The city of Chittorgarh is located on the banks of river Gambhiri and Berach.\r\n\r\nChittorgarh is home to the Chittor Fort, the largest fort in India and Asia. It was sacked thrice In 1303 by Alauddin Khalji, again in 1535 by Bahadur Shah of Gujarat, and lastly by the Mughal king Akbar in 1568. Its Hindu Rajput rulers fought fiercely to maintain their independence. ', 'admin_upload/chittor.jpg', 'Landscape', 'Located in Rajasrthan'),
(14, 'Kalika mata mandir', 'Kalika Mata Temple is an 8th-century[1] Hindu temple located within the Chittor Fort in the Chittorgarh municipality of Rajasthan state in India. The upper parts of the structure are more recent. It predates Maharana Pratap and has thousands of visitors every day. The goddess worshipped at this temple is an aspect of goddess Bhadrakali, clan goddess of Panwar (Mori Panwar) clan, The Mori Panwar Clan are the descendants of Chitrangna Mori, who built Chittorgargh. Kalika Mata is Kuldevi of Mori Panwar Clan.', 'admin_upload/Kalika mata mandir.jpg', 'Pilgrimage', 'Located within the Chittor Fort'),
(15, 'Sam sand dunes', '\"Our Desert Camp - \"Sam Sand Dunes Desert Safari Camp\" are Located amidst the wide region of Sand Dunes in Great Thar Desert. We offers you an exclusive stay at The Great Indian Thar Desert. Experience our renowned hospitality and luxurious stay in our swish tents and cottages. Join us with camel safari, a journey to watch the quieting sunrise and sunset through the sand dunes of the Thar. Spend your evening with cultural folk dance and music while you relish Rajasthani traditional food Dinner & Breakfast. Also experience adventure with Jeep safari and camel Safari in Sand Dunes.\"', 'admin_upload/camel1.jpg', 'Choose a category', 'situated in Rajasthan'),
(16, 'Gadi sagar lake', 'One of the most well-known tourist attractions in Jaisalmer, Gadi Sagar Lake originally was a man-made reservoir that was founded to provide a source of water to the people of Jaisalmer. Founded in 1367 by the first ruler of the city Maharawal Jaisal, this reservoir was revamped by Maharawal Garsi Singh. The banks of the Lake consist of shrines, temples, ghats and Chattris. Placed southwards of the city, this Lake has an entry archway in yellow sandstone, Telia-Pol, which was made by Telia, a royal courtesan. One can indulge in boat riding here or simply enjoy a leisure walk. The Jaisalmer fort in the backdrop, offers an amazing view. This Lake is largely visited during the yearly celebrations of Gangaur festival.', 'admin_upload/Gadi sagar lake.jpg', 'Landscape', 'Situated in Jaisalmer'),
(17, 'Jaisalmer fort', 'Jaisalmer Fort is situated in the city of Jaisalmer, in the Indian state of Rajasthan. It is believed to be one of the very few living forts in the world (such as Carcassonne, France), as nearly one fourth of the old city population still resides within the fort. For the better part of its 800-year history, the fort was the city of Jaisalmer. The first settlements outside the fort walls, to accommodate the growing population of Jaisalmer, are said to have come up in the 17th century.', 'admin_upload/Jaisalmer fort1.jpg', 'Historical', 'Situated in the city of Jaisalmer');

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
(7, 'debanjan', 'biswas', 'db@gmail.com', '$2y$10$.X1nAlJ4GceDHklQPtPxUOJ/Py7Ek8c1EGW6jr4ssifB.j4GWQcX6', 'abcds', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'NotFree', 6),
(2, 'Superior Room', 'Double', 'NotFree', 7),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', 0),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'NotFree', 5),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(6, 'Mr.', 'Kalyanjit', 'Das', 'kalyanjitdas123@gmail.com', 'Indian', 'India', '8258063211', 'Superior Room', 'Single', '1', 'Breakfast', '2021-04-30', '2021-05-02', 'Conform', 2);

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
(25, 'Har Ki Pauri', 'Har Ki Pauri is a famous ghat on the banks of the Ganges in Haridwar in the Indian state of Uttarakhand. This revered place is the major landmark of the holy city of Haridwar. Literally, \"Hari\" means \"God\", \"Ki\" means \"of\" and \"Pauri\" means \"steps\". Lord Vishnu is believed to have visited the Brahmakund in Har Ki Pauri in the Vedic times.\r\nIt is believed that it is precise spot where the Ganges leaves the mountains and enters the plains. The ghat is on the west bank of Ganges canal through which the Ganges is diverted just to the north. Har Ki Pauri is also the area where thousands of pilgrims converge and the festivities commence during the Kumbha Mela (कुम्भ मेला), which takes place every twelve years, and the Ardh Kumbh Mela (अर्धकुम्भ मेला), which takes place every six years and the Punjabi festival of Vaisakhi, a harvest festival occurring every year in the month of April.', 'admin_upload/1543938801_img_20180513_094523.jpg', 'Pilgrimage', 'Located in in Haridwar'),
(26, 'Jagdish temple', 'Jagdish Temple is a large Hindu temple in the middle of Udaipur in Rajasthan, just outside the royal palace. It has been in continuous worship since 1651. A big tourist attraction, the temple was originally called the temple of Jagannath Rai but is now called Jagdish-ji. It is a major monument in Udaipur.Jagdish Temple is raised on a tall terrace and was completed in 1651. It attaches a double-storey Mandapa (hall) to a double-storey saandhara (with a covered ambulatory) sanctum. The mandapa has another storey tucked within its pyramidal samavarna (bellroof) while the hollow clustered spire over the sanctum contains two more, nonfunctional stories.', 'admin_upload/jagdish temple.jpg', 'Pilgrimage', 'Situated in the city of Udaipur'),
(27, 'Padmini Palace Chittorgarh', 'Padmini, also known as Padmavati, was a legendary 13th–14th century Rani (queen) of the Mewar kingdom of present-day India. Several 16th-century texts mention her, of which the earliest source is Padmavat, a poem written by Malik Muhammad Jayasi in 1540 CE. The versions are disparate and many modern historians question the extent of overall authenticity.\r\n\r\nThe Jayasi text describes her story as follows: Padmavati was an exceptionally beautiful princess of the Singhal kingdom (Sri Lanka). Ratan Sen, the Rajput ruler of Chittor Fort, heard about her beauty from a talking parrot named Hiraman.', 'admin_upload/Raani padmini palace.jpg', 'Historical', 'Located in the Chittorgarh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultant_table`
--
ALTER TABLE `consultant_table`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `hotel_table`
--
ALTER TABLE `hotel_table`
  ADD PRIMARY KEY (`Hotel_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
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
-- AUTO_INCREMENT for table `consultant_table`
--
ALTER TABLE `consultant_table`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotel_table`
--
ALTER TABLE `hotel_table`
  MODIFY `Hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tripura`
--
ALTER TABLE `tripura`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uttarakhand`
--
ALTER TABLE `uttarakhand`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
