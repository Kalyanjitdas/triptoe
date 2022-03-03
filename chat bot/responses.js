function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } 
    else if (input == "paper") {
        return "scissors";
    } 
    else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello! i am trippy how can i help you???";
    } 
    else if (input == "how are you") {
        return "i am good , ask something and i will tell you the best places to visit in different cities.";
    }
    else if (input == "hi") {
        return "hi! i am trippy how can i help you???"
    }
    else if (input == "goodbye") {
        return "Talk to you later!";
    }
    else if (input == "bye") {
        return "thank you for your time.. have a nice trip!!";
    }
    else if (input == "tell me something about yourself") {
        return "my name is 'trippy' and i am here to help you to navigate through the wensite and tell you about some of the best tourist destinations that are listed on our website."; 
    }
    // UTTARAKHAND
    else if (input == "places to visit in uttarakhand" ) {
        return "some tourist destinations in uttarakhand are: Mussorie, Haridwar, Kedarnath, Kedarkantha, Tungnath, Nainital, Badrinath, Auli, Dhanulti, George everest, Yamunotri, Gangotri, Rudraprayag, Chamoli, Jim corbett national park,Almora, Bageshwar, Rishikesh";
    }
    else if (input == "tell me something about mussorie") {
        return "The ‘Queen of Hills’, Mussoorie, is a pretty hill station located at a distance of about 38 km from Dehradun, a ride from Dehradun to Musoorie is full of scenic views and beautiful landscapes which makes this place one of the best places to visit in Uttarakhand.Walk through the winding lanes of the tiny town and explore its beauty. Also, try your luck in spotting resident author Ruskin Bond, who enjoys a stroll through the markets";
    }
    else if (input == "tell me sonething about Haridwar") {
        return "Popular as a Hindu pilgrimage Haridwar is one of the most visited places by the spiritual people. A trip here during your Uttarakhand holiday should be a part of your itinerary. This ancient city is also the headquarter of Haridwar district and a major tourist place in Uttarakhand.Har ki Pauri ghat is a must visit place while you are in Uttarakhand.The Brhmakhund, which is visited by hordes of devotes is known to have one of the most amazing arts and is a surreal experience.";
    }
    else if (input == "tell me something about nainital") {
        return "Sandwiched between the majestic mountains, right in the lap of Naini Lake, Nainital is popular as one of the best places to visit in Uttarakhand, surrounded by mountains from every corner offering a majestic view of Himalayas. The ‘Lake city of India’ is also a well-known tourist place in Uttarakhand.The sparkling Naini Lake offers a grand boating ride which is unmissable and the highest point 'Naina Peak' is also a must visit destination.";
    }
    else if (input == "tell me something about auli") {
        return "This magnificent hill station offers a panoramic view of the Himalayan ranges and an interesting place to visit in Uttarakhand. This picturesque hamlet is a great honeymoon destination as well. This Himalayan ski resort and hill station is a very popular tourist place in Uttarakhand surrounded by coniferous and oak trees. Auli is the skiing and snowboarding hub of India. Try your lick at mountaineering here and you will have an unforgettable experience.";
    }
    else if (input == "tell me something about chamoli") {
        return "Chamoli is also known as the “Abode of Gods’. This beautiful town is well-known for its lovely shrines, temples and charming Garhwali traditions. Chamoli is also the town known to spark the famous ‘Chipko’ movement. Chamoli is the largest district in Uttarakhand and one of the best places in Uttarakhand. Head to the Valley of Flowers and be surrounded by the most amazing sight of beautiful blooms";
    }
    else if (input == "tell me something about jim corbett national park") {
        return "Established in 1936, this is India's first national park. It is named after the legendary naturalist and conservationist Jim Corbett.  Located at the Himalayas' foothills, near the popular hill-station of Nainital, the beautiful Jim Corbett National Park, is famous for being home to a large number of tigers, the highest among any Indian national park. The jeep safari into the dense forest to see the wild animals in their natural habitat is a must-have experience. And if you are lucky, then you may get a chance to even spot a tiger. It has 231 Tigers which is the highest count in any national park in India.";
    }
    else if (input == "tell me something about kedarnath") {
        return "Kedarnath Dham, located in the Rudraprayag district of Uttarakhand, is one of the most paramount locations for worshipers of Shiva. The air appears to be reverberating with the name of Lord Shiva amid the mighty snow-clad peaks. Situated in a breathtaking location, near the source of Mandakini River and at the height of 3,584 meters, Kedarnath Dham celebrates the greatness of Lord Shiva. Kedarnath temple is one of the 12 Jyotir Lingams and is also the most important temple among the Panch Kedars";
    }
    else if (input == "tell me something about tungnath") {
        return "The highest Kedar amongst the five, Tungnath is a magnificent temple with an aura soothes both eyes and soul. Situated at an elevation of 3680 m and on the Chandranath mountain, Tungnath is an important Hindu pilgrimage site that is dedicated to Lord Shiva and is where his hands are worshipped. The shrine is believed to be more than 1000 years old and is reckoned to have been discovered by Adi Shankaracharya.";
    }
    else if (input == "tell me something about rishikesh") {
        return "For the spiritualist in you, one of the places to visit in Uttarakhand is Rishikesh. This charming town exudes a rustic touch and spiritual energy that is infectious. The ancient temples and popular cafes make Rishikesh one of the best places in Uttarakhand. One of the interesting places to see in Uttarakhand is the Beetles Ashram. While you are surrounded by serenity, do make it a point to see the graffiti on the walls. Entry fee is Rs 150 per person and Ram and LAxman jhula bridges are also main centre of attraction of the city.";
    }
    // RAJASTHAN
    else if (input == "places to visit in rajasthan") {
        return "some tourist destinations in rajasthan are: Udaipur, Jaisalmer, Chittorgarh";
    }
    else if (input == "tell me something about udaipur") {
        return "Often referred to as the 'Venice of the East', the city of lakes Udaipur is located around azure water lakes and is hemmed in by lush green hills of Aravallis. The famous Lake Palace, located in the middle of Lake Pichola is one of the most beautiful sights of Udaipur. The beautiful City Palace and Sajjangarh (Monsoon Palace) add to the architectural beauty and grandeur of the city. The city is also known for its profusion of zinc and marble. Solar observatory in Lake Fateh Sagar is the only observatory in India located on an island and has been made on the pattern of  Big Bear Lake in Southern California.";
    }
    else if (input == "tell me something about jaisalmer") {
        return "If geology interests you, then Jaisalmer is where you need to journey. Here, one can discover and trace geologic tragedies that occurred in the Thar Desert 180 million years ago. The city of Jaisalmer also acts as the guard to western Rajasthan (and India’s) frontier. This city is known as 'Golden City' beacuse all the houses and stuructures are built from yellow sandstone. The city’s most prominent landmark is the Jaisalmer Fort, also called Sonar Qila (Golden Fort).";
    }
    else if (input == "tell me something about chittorgarh") {
        return "Chittorgarh resonates with stories of Rajputana bravery, pride and passion. The bards of Rajasthan sing tales of courage and sacrifice recounting stories that are known to every child and adult in the city. Chittorgarh is named after its most imposing structure, the Chittorgarh Fort which stands atop a 180 metre high hill and is spread across 700 acres. Chittorgarh Fort has had a tumultuous past. This bastion of the Rajputs has faced violent attacks thrice in its entire history. The first was in 1303 when the Sultan of Delhi, Ala-ud-din Khilji, who was enamoured by Queen Padmini, launched an attack to abduct her. More than two centuries later, in 1533, it was Bahadur Shah, the Sultan of Gujarat, who caused immense destruction. Four decades later, in 1568, Mughal Emperor Akbar attacked and seized the fort. It was finally in 1616, under the rule of Mughal Emperor Jahangir that the fort was returned to the Rajputs.";
    }
    else if (input == "places to visit in udaipur" ) {
        return "you can visit The City Palace, Lake Pichola, Jag Mandir, Fateh Sagar Lake, Neemach Mata Mandir, Sajjangarh Monsoon Palace, Bagore ki Haveli, Vintage Car galary,Lake Palace";
    }
    else if (input == "tell me something about city palace") {
        return "The City Palace towers over Lake Pichola. The balconies, cupolas, and towers of the palace give a wonderful view of the lake and the surrounding city. This complex actually consists of four major and several minor palaces that collectively form the magnificent City Palace. The main part of the palace is now preserved as a museum displaying artifacts.";
    }
    else if (input == "tell me something about lake palace") {
        return "Now a hotel but was originally called Jagniwas and served as a summer palace. Built between 1743 and 1746 on the island near Jagmandir in Lake Pichola, the palace, which faces east, is a wondrous sight to behold. The walls made of black and white marbles are adorned with semi-precious stones and ornamented niches. Gardens, fountains, pillared terraces, and columns line its courtyards.";
    }
    else if (input == "tell me something about jag mandir") {
        return "Jagmandir is a palace built on an island on the Lake Pichola. Also called the ‘Lake Garden Palace’, the construction for this began in 1620 and was completed around 1652. The royal family used the palace as its summer resort and for hosting parties. The Palace had such an impact on Emperor Shah Jahan that it went on to become the inspiration for one of the most magnificent Wonders of the World, The Taj Mahal.";
    }
    else if (input == "tell me something about monsoon palace") {
        return "Situated just outside Udaipur, this 19th-century palace is built on top of Bansdara hills. Used as a monsoon palace and hunting lodge, its builder, Maharana Sajjan Singh, originally planned to make it an astronomical center. The plan was cancelled with Maharana Sajjan Singh's premature death. It is still an awe-inspiring sight on the Udaipur skyline and offers spectacular views of the city and the areas around.";
    }
    else if (input == "tell me something about fateh sagar lake") {
        return "This delightful lake, bordered by hills and woodlands, lies to the north of Lake Pichola. This artificial lake is connected to Lake Pichola by a canal. The lake houses the beautiful Nehru Island as well as an islet on which stands the Udaipur Solar Observatory. It was inaugurated by the Duke of Connaught and was initially called Connaught Bundh.";
    }
    else if (input == "tell me something about lake pichola") {
        return "Picholi was the name of a village that lent its name to the lake. The islands of Jagniwas and Jagmandir are housed in this lake. Along the eastern banks of the lake lies the City Palace. A boat ride in the lake around sunset offers a breathtaking view of the Lake and City Palace.";
    }
    else if (input == "tell me something about bagore ki haveli") {
        return "Bagore-ki-Haveli is located by Lake Pichola, at Gangaur Ghat. Amar Chand Badwa, the Prime Minister of Mewar, built it in the 18th century. The massive palace has over a hundred rooms that display costumes and modern art. The glass and mirrors in the interiors are structured in classical haveli style.";
    }
    else if (input == "places to visit in jaisalmer" ) {
        return "you can visit Sam sand dunes, Patwon ki Haveli, Nathmal ki Haveli, Jaisalmer Fort, Vyas Chatri, Gadisar Lake, Salam Singh ki Haveli, Kuldhara ,desert camping, and you can do many different adventure sports too.";
    }
    else if (input == "tell me something about sam sand dunes") {
        return "Nestled cosily in between an Oasis surrounded by golden sands of a desert in Jaisalmer. The campsite offers mesmerizing views of the dunes and features a rejuvenating stay amidst the vivid cactus vegetation embraced by the unique flora and fauna of Jaisalmer. Sam sand dunes are 30-60 meter tall genuine sand dunes located on the city outskirts, at a distance of 40 km from Jaisalmer in a village named 'Sam'.";
    }
    else if (input == "tell me something about jaisalmer fort") {
        return "The Jaisalmer Fort also goes by the name Sonar Quila (Golden Fort) as it rises from the desert itself and seems to become one with the golden hues of the sand. The setting sun adds its own magic and shrouds the fort with mystique. The fort is constructed in the classic style of the royals by local craftsmen. This fort is a world heritage site and forms an important plot point in one of Satyajit Ray’s famous Feluda stories and corresponding movie, Sonar Kela (The Golden Fortress).";
    }
    else if (input == "tell me something about patwon ki haveli") {
        return "Among the largest and the most elaborately carved havelis in Jaisalmer, this five-storey structure sits proudly in a narrow street. While the haveli has lost some of its early glory, a few paintings and mirror work art can still be seen on the inside walls.";
    }
    else if (input == "tell me something about nathmal ki haveli" ) {
        return "Two architect brothers built Nathmal Ji Ki Haveli in the 19th century. They worked on the haveli from two sides and the outcome is a beautiful blend of the symmetrical construction. Miniature style paintings and mighty tuskers carved out of yellow sandstone are used for decoration.";
    }
    else if (input == "tell me something about salam singh ki haveli") {
        return "This haveli was built in the first half of the 18th century and a part of it is still occupied by descendants of the original residents. The high arched roof is supported by carved brackets designed in the shape of peacocks. Legend has it that there were two additional wooden storeys that made it match the Maharaja's palace in height, but he ordered for the upper level to be demolished.";
    }
    else if (input == "tell me something about vyas chhatri") {
        return "Located in Bada Bagh in Jaisalmer, Vyas Chhatri is one of the most beautiful examples of Rajasthani architecture. This old Brahmin cemetery, full of local versions of cenotaphs, is dedicated to Ved Vyaas, the sage who wrote the epic, Mahabharata. Filled with cenotaphs all throughout, this place is more popularly referred to as the sunset point of Jaisalmer. Every evening, hordes of people visit the Vyas Chhatri to get a glimpse of the beautiful desert sunset.";
    }
    else if (input == "tell me something about gadisar lake") {
        return "Gadisar Lake was constructed in the 14th century by Maharawal Gadsi Singh to meet the water needs of his arid lands. Considering its importance, many small temples and shrines were constructed around it, transforming it into a pilgrimage centre and a tourist attraction.";
    }
    else if (input == "tell me something about kuldhara") {
        return "The underlying history of Kuldhara has piqued the curiosity of one visitor too many, and makes it one of the most enigmatic destinations to visit in Jaisalmer, Rajasthan. The story has a beautiful daughter, an unscrupulous minister, scared villagers, an exodus in the middle of the night, and no idea where the villagers vanished.  Located about 18 km from the city of Jaisalmer is this old town that was abandoned by its villagers in the 1800s. It was like the entire town vanished in the course of a single night. With about 85 villages full of people, it remains a mystery as to how no one saw them leave; in fact, even to this date, no one knows where all of them went either.";
    }
    else if (input == "places to visit in chittorgarh" ) {
        return "you can vsist : Vijaya Stambh, Chittorgarh Fort, Meera Temple, Kalika Mata Temple, Khumbha palace, Rana Ratan palace, Rani padmini Palace, kirti stambh";
    }
    else if (input == "tell me something about rani padmini palace") {
        return "This palace plays an important role in Rajput history. The structure is built on the banks of a lotus pool and has a pavilion that provides privacy for the women of the royal family. Ala-ud-din Khilji, then Sultan of Delhi, spotted Queen Padmini’s reflection in the pool and was so besotted by her beauty that he led his forces in battle to abduct her.";
    }
    else if (input == "tell me something about vijay stambh") {
        return "Vijay Stambh (the Tower of Victory) was built by Maharana Kumbha between 1440 AD and 1448 AD to immortalise his triumph of defeating the Muslim rulers of Malwa and Gujarat. Built partly from red sandstone and partly white marble, this architectural wonder is nine-storey tower decorated with detailed sculptures of Hindu gods and goddesses. Narrow steps lead to the terrace where one can catch a spectacular view of the entire town from the balconies.";
    }
    else if (input == "tell me something about kirti stambh") {
        return "This Tower of Fame is dedicated to Adinathji, the 1st Jain Tirthankara (great teacher). Adorned by the figures of the Digambars (Jain monks), this seven-storied tower was built by a wealthy Jain merchant in 12th century AD.";
    }
    else if (input == "tell me something about chittorgarh fort") {
        return "While it is difficult to arrive at the exact date the fort was established, legend has it that the construction of the Chittorgarh Fort was initiated by Bhim, a Pandava hero from the mythological epic Mahabharata. The fort houses several magnificent monuments, some unfortunately ravaged by time.";
    }
    else if (input == "tell me something about meera temple") {
        return "The temple was constructed during the rule of Rana Kumbha and is built in the Indo-Aryan style popular in those times. It bears a strong connection to the mystic poetess Meerabai, a zealous devotee of Krishna’s. She was the wife of Prince Bhojraj.";
    }
    // MEGHALAYA
    else if (input == "tell me something about meghalaya") {
        return "Meghalaya, meaning the “abode of clouds” is a paradise for nature lovers. A hill station that is home to a beautiful, mesmerizing sky in a true sense has captivated the minds of tourists all across the globe. It is perfectly nestled in the northeast of India in the Himalayas. ";
    }
    else if (input == "places to visit in meghalaya" ) {
        return "you can visit Dawki, Arwah cave, Ward's lake, Mawlynnong village, root bridge, Nohkalikai falls, Weisawdong falls";
    }
    else if (input == "tell me something about dawki") {
        return "Dawki-Located in the state of Meghalaya, a place filled with waterfalls, rivers, rich wildlife and most importantly a place close to the clouds, is a small village named Dawki. Nestled at the bottom of Jaintia hills is one of the cleanest villages in India. The little village is known for its beautiful waterfalls that flow uninterrupted and the lush green environment. ";
    }
    else if (input == "tell me something about arwah cave") {
        return "Arwah Lumshynna Cave is located in Sohra which is about 54 km from the capital city of Shillong. The Arwah Cave is known for its limestone formations and fossils of fish bones, shells, etc. Arwah Lumshynna Cave is a huge cave surrounded by the thick forest of Law Shynna and is much larger in size than the Mawsmai Cave in Sohra. ";
    }
    else if (input == "tell me something about ward's lake") {
        return "One of the most popular attractions of Shillong, Ward’s lake is a must-visit place when in this pristine north-eastern city. Also known as Pollock’s Lake, this artificial water body is encircled by an extensive lush garden and lies in the middle of the city.";
    }
    else if (input == "tell  me something about mawlynnong village") {
        return "Mawlynnong, located in Meghalaya, is called “God’s own Garden” and has enough reasons for that. It was awarded the title “cleanest village in Asia” by Discover India in 2003. Cleanliness must be its most important aspect, but it has achieved so much more than that. From a full hundred percent literacy rate to a highly progressive scenario for women, it has struck all the correct chords.";
    }
    else if (input == "tell me something about root bridge") {
        return "Deep in the dense tropical forest of Meghalaya, and shrouded in cloud and rain for much of the year, are some astonishing man-made natural wonders. Known as living root bridges, inventive members of the Khasi tribe have trained them to grow from the roots of ancient rubber trees, native to the northeast region.";
    }
    else if (input == "tell me something about nohkalikai falls") {
        return "Nohkalikai Falls is the tallest plunge waterfall in India. Its height is 340 metres (1,115 ft).The waterfall is located in the Indian state of Meghalaya, near Cherrapunji, one of the wettest places on Earth. Nohkalikai Falls are fed by the rainwater collected on the summit of a comparatively small plateau and decrease in power during the dry season.";
    }
    else if (input == "tell me something about weisawdong falls") {
        return "Wei Sawdong or the three level waterfalls is a must must visit while you are in Sohra. This is way more beautiful than you will see in the pictures. The catch is reaching here . . . .it's a bit tricky . It will take about 30 to 45 minutes for you to reach to this waterfalls and the route is completely downhill .";
    }
    // TRIPURA
    else if (input == "places to visit in tripura" ) {
        return "you can visit : unakoti, Neermahal palace, Ujjayanta palace, Tripurasundari temple, Sepahijala wildlife sanctuary, Devtamura, gunavati group of temples, Jagannath temple, Trishna wildlife sanctuary, Dumboor lake, Bhuvneshwari temple";
    }
    else if (input == "tell me something about unakoti") {
        return "Translating to ‘one less than a crore’ in English, Unakoti is one of the most intriguing places to see in Tripura for those who seek something unique. This place is sitting near the Kailasahwar town and is home to hundreds and thousands of massive structures that are rock-cut and spellbinding.";
    }
    else if (input == "tell me something about neermahal palace") {
        return "One of the famous tourist places in Tripura, Neermahal Palace is sitting right in the heart of Rudrasagar Lake. This Palace not only gives one a chance to witness a scintillating structure but also beholds the beauty of its surroundings. The name translates to ‘water palace’ in English and justifies the name to the T.";
    }
    else if (input == "tell me something about ujjayanta palace") {
        return "A popular Tripura destination, Ujjayanata Palace is one of the most eye-catching structures standing on the floors of this North-Eastern state. This Palace is home to a gorgeous Mughal garden that showcases various musical fountains, velvety grassland, artificial lakes, and the royal existence of the majestic ancestry.";
    }
    else if (input == "tell me something about sapahijala wildlife sanctuary") {
        return "For all the animal and plant admirers out there in the world, Sepahijala Wildlife Sanctuary is one of the exciting places to see in Tripura. This wildlife sanctuary is spread over approximately 19 kilometers and is home to some enchanting species of flora and fauna. There is an extensive variety of local and migratory birds that can be found here.";
    }
    else if (input == "") {
        return "";
    }
    else if (input == "") {
        return "";
    }
    else if (input == "") {
        return "";
    }     
    else {
        return "Try asking something else!";
    }

    
}