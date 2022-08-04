-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 07:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thp_movie_streaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies_collection`
--

CREATE TABLE `movies_collection` (
  `Movie_Poster` varchar(100) NOT NULL,
  `Movie_id` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Trailer` varchar(200) NOT NULL,
  `Video` varchar(100) NOT NULL,
  `Movie_Type` varchar(100) NOT NULL,
  `PublicYear` int(11) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Storyline` varchar(1000) NOT NULL,
  `Rating` varchar(100) NOT NULL,
  `Casts` varchar(100) NOT NULL,
  `Writers` varchar(100) NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Countries_Of_Origin` varchar(100) NOT NULL,
  `Languages` varchar(100) NOT NULL,
  `DateTimeAdding` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateTimeUpdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies_collection`
--

INSERT INTO `movies_collection` (`Movie_Poster`, `Movie_id`, `Title`, `Trailer`, `Video`, `Movie_Type`, `PublicYear`, `Duration`, `Storyline`, `Rating`, `Casts`, `Writers`, `Director`, `Countries_Of_Origin`, `Languages`, `DateTimeAdding`, `DateTimeUpdate`) VALUES
('image/22_jump_street.jpg', '2jpstrt', '22 Jump Street', 'https://www.youtube.com/embed/qP755JkDxyM', 'video/22_jump_street.mp4', 'Action Comedy Crime', 2014, '1 hour 52 minutes', 'After making their way through high school (twice), big changes are in store for officers Schmidt and Jenko when they go deep undercover at a local college.', 'R', 'Channing Tatum,Jonah Hill,Ice Cube', 'Michael Bacall,Oren Uziel, Rodney Rothman', 'Phil Lord', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/Aladin.jpg', 'Aldn', 'Aladin', 'https://www.youtube.com/embed/eTjHiQKJUDY', 'video/Aladin.mp4', 'Animation Action Adventure', 1994, '1 hour 30 minutes', 'Aladdin, the clever hero of Agrabah, continues his adventures with the help of his fiancee Princess Jasmine, his pet monkey Abu, Magic Carpet, Iago the greedy parrot, and of course his best friend the semi-cosmic Genie.', 'TV-Y7', 'Scott Weinger,Linda Larkin', 'Duane Capizzi,Doug Langdale,Mark McCorkle', 'Toby Shelton', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:23:24'),
('image/aquaman_img1.jpg', 'AQM1', 'Aquaman', 'https://www.youtube.com/embed/WDkg3h8PCVU', 'video/Aquaman.mp4', 'Action Adventure Fantasy', 2018, '2 hour 23 minutes', 'Arthur Curry, the human-born heir to the underwater kingdom of Atlantis, goes on a quest to prevent a war between the worlds of ocean and land.', 'PG-13', 'Jason Momoa,Amber Heard,Willem Dafoe,Patrick Wilso,Nicole Kidman', 'David Leslie,Johnson-McGoldrick,Geoff Johns', 'James Wan', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/Batman_2022.jpg', 'Btmn', 'Batman 2022', 'https://www.youtube.com/embed/mqqft2x_Aa4', 'video/Batman_2022.mp4', 'Action Crime Drama', 2022, '2 hour 56 minutes', 'When a sadistic serial killer begins murdering key political figures in Gotham, Batman is forced to investigate the city\'s hidden corruption and question his family\'s involvement.', 'PG-13', 'Robert Pattinson,Jeffrey Wright', 'Matt Reeves,Peter Craig,Bob Kane', 'Matt Reeves', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:23:31'),
('image/captain_america_img1.jpg', 'Cptnmrc1', 'Captain America', 'https://www.youtube.com/embed/7SlILk2WMTI', 'video/Captain_america.mp4', 'Action Adventure Sci-Fi', 2011, '2 hour 4 minutes', 'Steve Rogers, a rejected military soldier, transforms into Captain America after taking a dose of a \"Super-Soldier serum\". But being Captain America comes at a price as he attempts to take down a warmonger and a terrorist organization.', 'PG-13', 'Chris Evans , Hugo Weaving,Hayley Atwell \n,Sebastian Stan,Samuel L. Jackson', 'Christopher Markus,Joe Simon', '	Joe Johnston', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/Deadpool_2.jpg', 'Ddpl2', 'Deadpool 2', 'https://www.youtube.com/embed/D86RtevtfrA', 'video/Deadpool2.mp4', 'Comedy Action Adventure', 2018, '1 hour 59 minutes', 'Foul-mouthed mutant mercenary Wade Wilson (a.k.a. Deadpool) assembles a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg Cable.', 'R', 'Ryan Reynolds,Josh Brolin,Morena Baccarin', 'Rhett Reese,Paul Wernick,Ryan Reynolds', 'David Leitch', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:23:38'),
('image/despicable_me_3.jpg', 'Dspcblm3', 'Despicable Me 3', 'https://www.youtube.com/embed/6DBi41reeF0', 'video/Despicable_me.mp4', 'Animation Comedy Adventure', 2017, '1 hour 29 minutes', 'Gru meets his long-lost, charming, cheerful, and more successful twin brother Dru, who wants to team up with him for one last criminal heist.', 'PG', 'Steeve Carell,Kristen Wiig,Trey Parker', 'Cinco Paul,Ken Daurlo', 'Kyle Balda', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/disaster_movie.jpg', 'Dsstrmv', 'Disaster Movie', 'https://www.youtube.com/embed/tt3ahQeT_3M', 'video/Disaster_movie.mp4', 'Comedy Sci-Fi', 2008, '1 hour 27 minutes', 'Over the course of one evening, an unsuspecting group of twenty-somethings find themselves bombarded by a series of natural disasters and catastrophic events.', 'PG-13', 'Carmen Electra,Vanessa Lachey,Nicole Parker', 'Jason Friedberg,Aaron Seltzer', 'Jason Friedberg', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:23:46'),
('image/doctor_strange_img1.jpg', 'Dtrsg1', 'Doctor Strange', 'https://www.youtube.com/embed/aWzlQ2N6qqg', 'video/Doctor_strange.mp4', 'Action Adventure Fantasy', 2016, '1 hour 55 minutes', 'While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.', 'PG-13', 'Benedict Cumberbatch,Chiwetel Ejiofor,Rachel McAdams', 'Jon Spaihts,Scott Derrickson', ' Scott Derrickson', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/Fast_And_Furious_Nine.jpg', 'FstAnFrs9', 'Fast And Furious 9', 'https://www.youtube.com/embed/FUK2kdPsBws', 'video/Fast_and_furious_9.mp4', 'Action Crime Thriller', 2021, '2 hour 23 minutes', 'Dom and the crew must take on an international terrorist who turns out to be Dom and Mia\'s estranged brother.', 'PG-13', 'Vin Diesel,Michelle Rodriguez,Jordana Brewster', 'Daniel Casey,Justin Lin,Alfredo Botello', 'Justin Lin', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/iron_man_img1.jpg', 'Irnm1', 'Iron Man', 'https://www.youtube.com/embed/Ke1Y3P9D0Bc', 'video/Iron_man.mp4', 'Action Adventure Sci-Fi', 2013, '2 hour 10 minutes', 'When Tony Stark\'s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', 'PG-13', 'Robert Downey Jr,Guy Pearce', 'Drew Pearce,Stan Lee', ' Shane Black', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:23:53'),
('image/Jumanji.jpg', 'Jmnji', 'Jumanji', 'https://www.youtube.com/embed/2QKg5SZ_35I', 'video/Jumanji.mp4', 'Comedy Action Adventure', 2017, '1 hour 59 minutes', 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.', 'PG-13', 'Dwayne Johnson,Karen Gillan,Kevin Hart', 'Chris McKenna,Erik Sommers,Scott Rosenberg', 'Jake Kasdan', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/luca.jpg', 'Lc', 'Luca', 'https://www.youtube.com/embed/wH9FFYR1lGQ', 'video/Luca.mp4', 'Animation Adventure Comedy', 2021, '1 hour 35 minutes', 'On the Italian Riviera, an unlikely but strong friendship grows between a human being and a sea monster disguised as a human.', 'PG', 'Jacob Tremblay,Jack Dylan Grazer,Emma Berman', 'Enrico Casarosa,Jesse Andrews,Simon Stephenson', 'Enrico Casarosa', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:24:01'),
('image/monster_inc.jpg', 'Mnstrnc', 'Monster Inc', 'https://www.youtube.com/embed/CGbgaHoapFM', 'video/Monster_inc.mp4', 'Animation Adventure Comedy', 2001, '1 hour 32 minutes', 'In order to power the city, monsters have to scare children so that they scream. However, the children are toxic to the monsters, and after a child gets through, two monsters realize things may not be what they think.', 'G', 'Billy Crystal,John Goodman,Mary Gibbs', 'Pete Docter,Jill Culton,Jeff Pidgeon', 'Pete Docter', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/matrix_poster2.jpg', 'Mtrxrld', 'Matrix Reloaded', 'https://www.youtube.com/embed/kYzz0FSgpSU', 'video/Matrix2.mp4', 'Action Sci-Fi', 2002, '2 hour 18 minutes', 'Freedom fighters Neo, Trinity and Morpheus continue to lead the revolt against the Machine Army, unleashing their arsenal of extraordinary skills and weaponry against the systematic forces of repression and exploitation.', 'R', 'Keanu Reeves,Laurence Fishburne,Carrie-Anne Moss', 'Lilly Wachowski,Lana Wachowski', 'Lana Wachowski', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:24:09'),
('image/onward.jpg', 'Owrd', 'Onward', 'https://www.youtube.com/embed/gn5QmllRCn4', 'video/Onward.mp4', 'Animation Adventure Comedy', 2020, '1 hour 42 minutes', 'Two elven brothers embark on a quest to bring their father back for one day.', 'PG', 'Tom Holland,Chris Pratt,Julia Louis-Dreyfus', 'Dan Scanlon,Keith Bunin,Jason Headley', 'Dan Scanlon', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/pirate_of_caribean_img1.jpg', 'Prftcbn1', 'Pirate Of The Caribbean', 'https://www.youtube.com/embed/Hgeu5rhoxxY', 'video/Pirate_of_the_caribbean.mp4', 'Action Adventure Fantasy', 2003, '2 hour 23 minutes', 'Blacksmith Will Turner teams up with eccentric pirate \"Captain\" Jack Sparrow to save his love, the governor\'s daughter, from Jack\'s former pirate allies, who are now undead.', 'PG-13', 'Johny Depp,Geoffrey Rush,Orlando Bloom', 'Ted Elliott,Stuart Beattie', 'Gore Verbinski', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:24:19'),
('image/Ride_along_2.jpg', 'Rdlng2', 'Ride Along 2', 'https://www.youtube.com/embed/iWfmmwdCHTg', 'video/Ride_along2.mp4', 'Comedy Action Crime', 2016, '1 hour 42 minutes', 'As his wedding day approaches, Ben heads to Miami with his soon-to-be brother-in-law James to bring down a drug dealer who\'s supplying the dealers of Atlanta with product.', 'PG-13', 'Ice Cube,Kevin Hart,Tika Sumpter', 'Phil Hay,Matt Manfredi,Greg Coolidge', 'Tim Story', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/scary_movie.jpg', 'Scrmv', 'Scary Movie', 'https://www.youtube.com/embed/HTLPULt0eJ4', 'video/Scary_movie.mp4', 'Comedy', 2000, '1 hour 28 minutes', 'A year after disposing of the body of a man they accidentally killed, a group of dumb teenagers are stalked by a bumbling serial killer.', 'R', 'Anna Faris,Jon Abrahams,Marlon Wayans', 'Shawn Wayans,Marlon Wayans,Buddy Johnson', 'Keenen Ivory Wayans', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:24:26'),
('image/spiderman_img1.jpg', 'Sdrm1', 'Spider Man', 'https://www.youtube.com/embed/JfVOs4VSpmA', 'video/Spider_man.mp4', 'Action Adventure Fantasy', 2021, '2 hour 28 minutes', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'PG-13', 'Tom Holland,Zendaya', 'Chris McKenna,Stan Lee', 'Jon Watts', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/sonic_2.jpg', 'Snc2', 'Sonic 2', 'https://www.youtube.com/embed/47r8FXYZWNU', 'video/Sonic2.mp4', 'Comedy Action Adventure', 2022, '2 hour 2 minutes', 'When the manic Dr Robotnik returns to Earth with a new ally, Knuckles the Echidna, Sonic and his new friend Tails is all that stands in their way.', 'PG', 'James Marsden,Jim Carrey,Ben Schwartz', 'Pat Casey,Josh Miller,John Whittington', 'Jeff Fowler', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:24:33'),
('image/the_hot_chick.jpg', 'Tehtck', 'The Hot Chick', 'https://www.youtube.com/embed/6z5zbY-0QCA', 'video/The_hot_chick.mp4', 'Comedy Fantasy', 2002, '1 hour 44 minutes', 'An attractive and popular teenager, who is mean-spirited toward others, finds herself in the body of an older man, and must find a way to get back to her original body.', 'PG-13', 'Rob Schneider,Rachel McAdams,Anna Faris', 'Tom Brady,Rob Schneider', 'Tom Brady', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/transformer_img1.jpg', 'Trnfmr1', 'Transformers', 'https://www.youtube.com/embed/AntcyqJ6brc', 'video/Transformers.mp4', 'Action Adventure Sci-Fi', 2011, '2 hour 34 minutes', 'The Autobots learn of a Cybertronian spacecraft hidden on the moon, and race against the Decepticons to reach it and to learn its secrets.', 'PG-13', 'Shia LaBeouf,Rosie Hungtinton-Whiteley', 'Ehren Kruger,Michael Bay', ' Michael Bay', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:24:41'),
('image/turning_red.jpeg', 'Trnngrd', 'Turning Red', 'https://www.youtube.com/embed/XdKzUbAiswE', 'video/Turning_Red.mp4', 'Animation Adventure Comedy', 2022, '1 hour 40 minutes', 'A 13-year-old girl named Meilin turns into a giant red panda whenever she gets too excited.', 'PG', 'Rosalie Chiang,Sandra Oh,Ava Morse', 'Domee Shi,Julia Cho,Sarah Streicher', 'Domee Shi', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/toy_story.jpg', 'Tysty', 'Toy Story', 'https://www.youtube.com/embed/rNk1Wi8SvNc', 'video/Toy_story.mp4', 'Animation Adventure Comedy', 1995, '1 hour 21 minutes', 'A cowboy doll is profoundly threatened and jealous when a new spaceman action figure supplants him as top toy in a boy\'s bedroom.', 'G', 'Tom Hanks,Tim Allen,Don Rickles', 'John Lasseter,Pete Docter,Andrew Stanton', 'John Lasseter', 'USA', 'English', '2022-07-02 22:26:48', '2022-08-03 17:24:47'),
('image/wonder_woman_img1.jpg', 'Wdwm1', 'Wonder Woman', 'https://www.youtube.com/embed/piIUpbIlp8U', 'video/Wonder_woman.mp4', 'Action Adventure Fantasy', 2017, '2 hour 21 minutes', 'When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny.', 'PG-13', 'Gal Gadot,Chris Pine,Robin Wright', 'Allan Heinberg,Zack Snyder,Jason Fuchs', 'Patty Jenkins', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/wreck_it_ralph.jpg', 'Wrcktrlph', 'Wreck It Ralph', 'https://www.youtube.com/embed/87E6N7ToCxs', 'video/Wreck_it_ralph.mp4', 'Animation Adventure Comedy', 2012, '1 hour 41 minutes', 'A video game villain wants to be a hero and sets out to fulfill his dream, but his quest brings havoc to the whole arcade where he lives.', 'PG', 'John C. Reilly,Jack McBrayer,Jane Lynch', 'Rich Moore,Phil Johnston,Jim Reardon', 'Rich Moore', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48'),
('image/xmen_img1.jpg', 'Xmn1', 'X-Men', 'https://www.youtube.com/embed/pK2zYHWDZKo', 'video/X_men.mp4', 'Action Adventure Sci-Fi', 2016, '2 hour 24 minutes', 'In the 1980s the X-Men must defeat an ancient all-powerful mutant, En Sabah Nur, who intends to thrive through bringing destruction to the world.', 'PG-13', 'James McAvoy ,Michael ssbender,Jenifer Lawrence', 'Simon Kinberg,Bryan Singer,Michael Dougherty', 'Bryan Singer', 'USA', 'English', '2022-08-02 22:26:48', '2022-08-02 22:26:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies_collection`
--
ALTER TABLE `movies_collection`
  ADD UNIQUE KEY `U_NQ` (`Movie_id`,`Title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
