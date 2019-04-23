-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2019 at 04:42 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author`
(
    `author_id` int(11)      NOT NULL,
    `name`      varchar(255) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `name`)
VALUES (1, 'Ernest Hemingway'),
       (2, 'Daniel Quinn'),
       (3, 'Barack Obama'),
       (4, 'Franz Kafka'),
       (5, 'Bill Bryson'),
       (6, 'Caroline B. Cooney'),
       (7, 'James Herriot'),
       (8, 'Thomas  Kempis'),
       (9, 'Ann Rule'),
       (10, 'Linda Lael Miller'),
       (11, 'Dave Pelzer'),
       (12, 'Christopher McDougall'),
       (13, 'Art Spiegelman'),
       (14, 'Livia E. Bitton-Jackson'),
       (15, 'Truddi Chase'),
       (16, 'Julia Child'),
       (17, 'James Frey'),
       (18, 'Sidney Poitier'),
       (19, 'Sheldon Vanauken'),
       (20, 'Gerda Weissmann Klein'),
       (21, 'Amy Hill Hearth'),
       (22, 'Lucy Grealy'),
       (23, 'Jon Jefferson'),
       (24, 'Piers Paul Read'),
       (25, 'Virginia Woolf'),
       (26, 'James Redfield'),
       (27, 'Frank Bettger'),
       (28, 'Kevin Trudeau'),
       (29, 'Peter M. Senge'),
       (30, 'Kenneth H. Blanchard'),
       (31, 'Barry Z. Posner'),
       (32, 'Suzanne Brockmann'),
       (33, 'Tom Connellan'),
       (34, 'Tom Hopkins'),
       (35, 'Donald T. Phillips'),
       (36, 'Michael Gates Gill'),
       (37, 'Donald J. Trump'),
       (38, 'Joseph M. Williams'),
       (39, 'Paul Mladjenovic'),
       (40, 'Warren G. Bennis'),
       (41, 'Chip Heath'),
       (42, 'Jack D. Schwager'),
       (43, 'Neil A. Fiore'),
       (44, 'Kurt Eichenwald'),
       (45, 'Michael   Lewis'),
       (46, 'Douglas R. Andrew'),
       (47, 'Bathroom Readers\' Institute'),
       (48, 'Greg Holden'),
       (49, 'Michael   Sullivan'),
       (50, 'Louis V. Gerstner Jr.'),
       (51, 'Wallace Wang'),
       (52, 'Yasser Seirawan'),
       (53, 'Bruce Eckel'),
       (54, 'J.A. Bravo'),
       (55, 'John  Cassidy'),
       (56, 'Dee-Ann Leblanc'),
       (57, 'Charles Petzold'),
       (58, 'Gann Alexander'),
       (59, 'Peter Norvig'),
       (60, 'Eric Flint'),
       (61, 'Jim Krause'),
       (62, 'Alexander Hiam'),
       (63, 'Roger Penrose'),
       (64, 'Allan Bedford'),
       (65, 'Jay Conrad Levinson'),
       (66, 'Jenifer Tidwell'),
       (67, 'Mildred D. Taylor'),
       (68, 'Alex Kendrick'),
       (69, 'Carl Hiaasen'),
       (70, 'Theodore Taylor'),
       (71, 'Jane Austen'),
       (72, 'Isabel Allende'),
       (73, 'The College Board'),
       (74, 'James W. Loewen'),
       (75, 'Agatha Christie'),
       (76, 'Esphyr Slobodkina'),
       (77, 'Deborah Howe'),
       (78, 'Pat Frank'),
       (79, 'John Piper'),
       (80, 'William Shakespeare'),
       (81, 'Tedd Tripp'),
       (82, 'Edwin A. Abbott'),
       (83, 'Richard Blackaby'),
       (84, 'Henry Gray'),
       (85, 'Robert   Bolton'),
       (86, 'Max Lucado'),
       (87, 'Rhonda Byrne'),
       (88, 'Catherine Whitney'),
       (89, 'Al-Anon Family Groups'),
       (90, 'Howard M. Shapiro'),
       (91, 'Mayo Clinic'),
       (92, 'Peter J. D\'Adamo'),
       (93, 'Rodman Philbrick'),
       (94, 'Thomas  Moore'),
       (95, 'Iyanla Vanzant'),
       (96, 'Rory Freedman'),
       (97, 'Richard Dawkins'),
       (98, 'Bruce Fisher'),
       (99, 'Bob Anderson'),
       (100, 'Wilson Rawls'),
       (101, 'Rick Riordan'),
       (102, 'Kenneth W. Fitch'),
       (103, 'Veronica Roth'),
       (104, 'James Patterson'),
       (105, 'Jane Yolen'),
       (106, 'Chaim Potok'),
       (107, 'Lemony Snicket'),
       (108, 'Deborah Ellis'),
       (109, 'Brian Jacques'),
       (110, 'Eloise Jarvis McGraw'),
       (111, 'Aldous Huxley'),
       (112, 'George Orwell'),
       (113, 'Gabriel GarcÃ­a MÃ¡rquez'),
       (114, 'Jorge Candeias'),
       (115, 'Garth Stein'),
       (116, 'Gillian Flynn'),
       (117, 'Jeffrey Eugenides'),
       (118, 'Janet Evanovich'),
       (119, 'Michael Connelly'),
       (120, 'Charlaine Harris'),
       (121, 'Anne Rice'),
       (122, 'Tess Gerritsen'),
       (123, 'Harlan Coben'),
       (124, 'Stormie Omartian'),
       (125, 'Thomas Ã  Kempis'),
       (126, 'Leslie Ludy'),
       (127, 'David Platt'),
       (128, 'Bryan H. Derrickson'),
       (129, 'David McCullough'),
       (130, 'Bette Bao Lord'),
       (131, 'Sharon M. Draper'),
       (132, 'Caralyn Buehner'),
       (133, 'Peter T Underwood'),
       (134, 'Richard Louv'),
       (135, 'Owen Wister'),
       (136, 'Daniel Carter Beard'),
       (137, 'Monty Roberts'),
       (138, 'Elizabeth Gilbert'),
       (139, 'Arnold Schwarzenegger'),
       (140, 'Dick Francis'),
       (141, 'John Muir'),
       (142, 'Barbara Park'),
       (143, 'Bill McKibben'),
       (144, 'Stan Berenstain'),
       (145, 'Yamamoto Tsunetomo'),
       (146, 'Mike Lupica'),
       (147, 'Victoria Moran'),
       (148, 'Jackie Robinson'),
       (149, 'Hana Yasmeen Ali'),
       (150, 'Christopher Kendris'),
       (151, 'Ivan Doig'),
       (152, 'Conor Grennan'),
       (153, 'M.C. Beaton'),
       (154, 'Paul Theroux'),
       (155, 'Thomas Joseph Sugrue'),
       (156, 'Ludwig Bemelmans'),
       (157, 'Jack Knowlton'),
       (158, 'Tony Horwitz'),
       (159, 'Phil Schermeister'),
       (160, 'George MacDonald'),
       (161, 'Simon Vance'),
       (162, 'Ewan McGregor'),
       (163, 'Lane Smith'),
       (164, 'Pamela F. Service'),
       (165, 'Rutuja');

-- --------------------------------------------------------

--
-- Table structure for table `authorbook`
--

CREATE TABLE `authorbook`
(
    `author_id` int(11)    NOT NULL,
    `isbn`      bigint(20) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `authorbook`
--

INSERT INTO `authorbook` (`author_id`, `isbn`)
VALUES (1, 684801221),
       (1, 1234567890),
       (2, 553375407),
       (3, 1400082773),
       (4, 553213695),
       (4, 1234567890),
       (5, 767903862),
       (6, 440220653),
       (7, 1250058139),
       (8, 802400248),
       (9, 451166884),
       (10, 1451646291),
       (11, 525947698),
       (12, 307279189),
       (13, 679729771),
       (14, 689823959),
       (15, 525244743),
       (16, 307475018),
       (17, 1573223158),
       (17, 1594481954),
       (18, 61357901),
       (19, 60688246),
       (19, 1234567890),
       (20, 809015803),
       (21, 1568360100),
       (22, 544837398),
       (23, 425198324),
       (24, 380003210),
       (25, 156701600),
       (26, 446518620),
       (27, 671794370),
       (28, 975599500),
       (28, 981989713),
       (29, 385517254),
       (30, 688039693),
       (31, 787984922),
       (32, 345480155),
       (33, 1885167237),
       (34, 446380636),
       (35, 446394599),
       (36, 1592402860),
       (37, 399594493),
       (38, 673381862),
       (39, 1119239281),
       (40, 201550873),
       (41, 1400064287),
       (42, 1118273052),
       (43, 1585425524),
       (44, 767903277),
       (45, 393048136),
       (46, 446693510),
       (47, 1592232701),
       (48, 1118607783),
       (49, 132256886),
       (51, 470088702),
       (52, 735606030),
       (53, 131872486),
       (54, 446525685),
       (55, 1878257749),
       (56, 764516604),
       (57, 1572319950),
       (58, 805396136),
       (59, 131038052),
       (60, 671578715),
       (61, 1581800460),
       (62, 60523808),
       (62, 1118880803),
       (63, 195106466),
       (64, 60523808),
       (64, 1593270542),
       (65, 395728592),
       (66, 1449379702),
       (67, 590982079),
       (68, 1433679590),
       (69, 440419395),
       (70, 380010038),
       (71, 553212737),
       (72, 3518381768),
       (73, 874478529),
       (74, 1620973928),
       (75, 60523808),
       (75, 1983911054),
       (76, 64431436),
       (77, 590313185),
       (77, 689806590),
       (78, 60741872),
       (79, 1433555506),
       (80, 743477561),
       (81, 966378601),
       (82, 486272630),
       (83, 805418466),
       (84, 1435145461),
       (85, 671622480),
       (86, 1591450420),
       (87, 1582701709),
       (88, 399584161),
       (89, 910034796),
       (90, 1579542417),
       (91, 60746378),
       (92, 425173291),
       (92, 425183092),
       (93, 439087597),
       (95, 684869837),
       (96, 762431067),
       (97, 393351491),
       (98, 915166950),
       (99, 936070463),
       (100, 440412676),
       (101, 1423103343),
       (102, 449213943),
       (103, 62024035),
       (104, 446562432),
       (104, 446618896),
       (105, 142401099),
       (105, 399214577),
       (106, 449213447),
       (107, 64408663),
       (108, 439446333),
       (109, 441005764),
       (110, 140303359),
       (111, 60523808),
       (111, 60850523),
       (112, 451524934),
       (113, 60883286),
       (114, 553593714),
       (115, 61537969),
       (116, 553418351),
       (117, 312427735),
       (118, 312936222),
       (118, 345527704),
       (118, 1250051126),
       (119, 1455536504),
       (120, 441010512),
       (121, 452281431),
       (122, 345497627),
       (123, 345535154),
       (123, 440246083),
       (124, 736957499),
       (125, 802400248),
       (126, 1590529910),
       (127, 1601422210),
       (128, 471366927),
       (129, 671457110),
       (130, 64401758),
       (131, 689818513),
       (132, 803730411),
       (133, 1626361584),
       (134, 1565126050),
       (135, 743436539),
       (136, 879234490),
       (137, 679456589),
       (138, 142002836),
       (139, 684857219),
       (140, 425228975),
       (141, 1423649125),
       (142, 375802916),
       (143, 812976088),
       (144, 394800362),
       (145, 4805311983),
       (146, 142418447),
       (147, 60954787),
       (148, 60555971),
       (149, 743255690),
       (150, 812043634),
       (151, 156899825),
       (152, 61930067),
       (153, 312965664),
       (154, 618446877),
       (154, 804104549),
       (155, 876043759),
       (156, 140566490),
       (157, 64460991),
       (158, 805065415),
       (159, 1426216513),
       (160, 802860613),
       (161, 1400064678),
       (162, 743499344),
       (163, 142400459),
       (164, 449703398);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books`
(
    `isbn`            bigint(20) NOT NULL,
    `name`            text       NOT NULL,
    `image`           text       NOT NULL,
    `no_of_copies`    int(11)    NOT NULL,
    `availablecopies` int(11) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `name`, `image`, `no_of_copies`, `availablecopies`)
VALUES (60523808, 'Who Says Elephants Can\'t Dance? Inside IBM\'s Historic Turnaround', 'user2.png', 6, NULL),
       (60555971, 'I Never Had It Made: An Autobiography of Jackie Robinson', '41V-rrOLBYL._SL160_.jpg', 7, 7),
       (60688246, 'A Severe Mercy', '41e-p3XItdL._SL160_.jpg', 5, 5),
       (60741872, 'Alas', '41E9MEH9W3L._SL160_.jpg', 6, 6),
       (60746378, 'Mayo Clinic Guide to a Healthy Pregnancy', '41AyhH3XGkL._SL160_.jpg', 10, 10),
       (60850523, 'Brave New World', '41le8ej-fiL._SL160_.jpg', 5, 5),
       (60883286, 'One Hundred Years of Solitude', '513GEHVNTBL._SL160_.jpg', 6, 6),
       (60954787, 'Creating a Charmed Life: Sensible', '51+Z43LAqsL._SL160_.jpg', 6, 6),
       (61357901, 'The Measure of a Man: A Spiritual Autobiography', '51QHrDrQ4fL._SL160_.jpg', 5, 5),
       (61537969, 'The Art of Racing in the Rain', '414ef2JUxvL._SL160_.jpg', 6, 6),
       (61930067, 'Little Princes: One Man\'s Promise to Bring Home the Lost Children of Nepal',
        '51y1IyILlqL._SL160_.jpg', 7, 7),
       (62024035, 'Divergent', '51MyTJ6IWPL._SL160_.jpg', 8, 8),
       (64401758, 'In the Year of The Boar and Jackie Robinson', '51-OCvN3whL._SL160_.jpg', 9, 9),
       (64408663, 'The Hostile Hospital', '512gjx6MCbL._SL160_.jpg', 8, 8),
       (64431436, 'Caps for Sale: A Tale of a Peddler', '517fvFK7ngL._SL160_.jpg', 9, 9),
       (64460991, 'Geography from A to Z: A Picture Glossary (Trophy Picture Books)', '31fWTzSBnWL._SL160_.jpg', 5, 5),
       (131038052, 'Artificial Intelligence: A Modern Approach', '5194WJ11V1L._SL160_.jpg', 10, 10),
       (131872486, 'Thinking in Java', '31bmX1EXVZL._SL160_.jpg', 8, 8),
       (132256886, 'Precalculus', '51lxs5hY+JL._SL160_.jpg', 10, 10),
       (140303359, 'The Golden Goblet', '51MIUKaEkiL._SL160_.jpg', 9, 9),
       (140566490, 'Madeline in London', '51j0qXRKKdL._SL160_.jpg', 10, 10),
       (142002836, 'The Last American Man', '51S5lyDodgL._SL160_.jpg', 5, 5),
       (142400459, 'The Not-So-Jolly Roger', '51H4uBFGbQL._SL160_.jpg', 7, 7),
       (142401099, 'The Devil\'s Arithmetic', '4193GC1JWXL._SL160_.jpg', 7, 7),
       (142418447, 'Shoot-Out', '51aXwoiyVlL._SL160_.jpg', 5, 5),
       (156701600, 'Orlando', '51UcBTUmkvL._SL160_.jpg', 8, 8),
       (156899825, 'This House of Sky: Landscapes of a Western Mind', '5167oEu0bQL._SL160_.jpg', 6, 6),
       (195106466, 'Shadows of the Mind: A Search for the Missing Science of Consciousness', '51nodxgRybL._SL160_.jpg',
        7, 7),
       (201550873, 'On Becoming A Leader', '410LyWAvvwL._SL160_.jpg', 10, 10),
       (307279189, 'Born to Run: A Hidden Tribe', '5117MxRQidL._SL160_.jpg', 9, 9),
       (307475018, 'My Life in France', '51gjSqc+LQL._SL160_.jpg', 5, 5),
       (312427735, 'Middlesex', '41HHxQGKa3L._SL160_.jpg', 8, 8),
       (312936222, 'Ten Big Ones', '51OF6Y4P9wL._SL160_.jpg', 5, 5),
       (312965664, 'Agatha Raisin and the Terrible Tourist', '516J8TuyMkL._SL160_.jpg', 8, 8),
       (345480155, 'Into the Storm', '5153BkI6arL._SL160_.jpg', 5, 5),
       (345497627, 'The Keepsake', '31gkWKp3B2L._SL160_.jpg', 7, 7),
       (345527704, 'Smokin\' Seventeen', '51+8E9NP8ML._SL160_.jpg', 5, 5),
       (345535154, 'Deal Breaker', '51L-VdMPhhL._SL160_.jpg', 9, 9),
       (375802916, 'Junie B. Jones Is Captain Field Day', '51YdtC-pIcL._SL160_.jpg', 7, 7),
       (380003210, 'Alive: The Story of the Andes Survivors', '51vU+Y6dzLL._SL160_.jpg', 8, 8),
       (380010038, 'The Cay', '51J4F2A925L._SL160_.jpg', 8, 8),
       (385517254, 'The Fifth Discipline: The Art & Practice of The Learning Organization', '51T+Y7NoXcL._SL160_.jpg',
        7, 7),
       (393048136, 'The New New Thing: A Silicon Valley Story', '41LK640p4FL._SL160_.jpg', 8, 8),
       (393351491, 'The Blind Watchmaker: Why the Evidence of Evolution Reveals a Universe Without Design',
        '51gHlHu8biL._SL160_.jpg', 7, 7),
       (394800362, 'The Bike Lesson', '511QWcGmCUL._SL160_.jpg', 10, 10),
       (395728592,
        'Guerrilla Marketing Online: The Entrepreneur\'s Guide to Earning Profits on the Internet (Guerrilla Marketing)',
        '5171S1Q4S8L._SL160_.jpg', 7, 7),
       (399214577, 'Owl Moon', '51XmF+kLeJL._SL160_.jpg', 8, 8),
       (399584161, 'Eat Right 4 Your Type', '511yGPlN2DL._SL160_.jpg', 6, 6),
       (399594493, 'Trump: The Art of the Deal', '51otmKylr6L._SL160_.jpg', 10, 10),
       (425173291, 'Cook Right 4 Your Type: The Practical Kitchen Companion to Eat Right 4 Your Type',
        '51xcCUGc2sL._SL160_.jpg', 10, 10),
       (425183092, 'Diet Sehat Golongan Darah O', '51GLDWs5DFL._SL160_.jpg', 10, 10),
       (425198324, 'Death\'s Acre: Inside the Legendary Forensic Lab the Body Farm Where the Dead Do Tell Tales',
        '514073MPNTL._SL160_.jpg', 10, 10),
       (425228975, 'Silks', '5101y4tFVTL._SL160_.jpg', 8, 8),
       (439087597, 'The Last Book in the Universe', '51HtLd-e-KL._SL160_.jpg', 7, 7),
       (439446333, 'The Breadwinner', '51mkBxOLf7L._SL160_.jpg', 7, 7),
       (440220653, 'The Face on the Milk Carton', '51K0BlH8OtL._SL160_.jpg', 7, 7),
       (440246083, 'Back Spin', '514LBWH13-L._SL160_.jpg', 7, 7),
       (440412676, 'Where the Red Fern Grows', '51QWK0WB8KL._SL160_.jpg', 9, 9),
       (440419395, 'Hoot', '41tuSGK8aCL._SL160_.jpg', 7, 7),
       (441005764, 'Mossflower', '51qJt1C2UaL._SL160_.jpg', 6, 6),
       (441010512, 'Club Dead', '51CMqkkx8gL._SL160_.jpg', 7, 7),
       (446380636, 'How to Master the Art of Selling', '21cUUI4EMWL._SL160_.jpg', 7, 7),
       (446394599, 'Lincoln on Leadership: Executive Strategies for Tough Times', '51YCcocfs0L._SL160_.jpg', 6, 6),
       (446518620, 'The Celestine Prophecy', '51D1CpfhqaL._SL160_.jpg', 9, 9),
       (446525685, 'Business @ the Speed of Thought: Succeeding in the Digital Economy', '51ho3AP0OkL._SL160_.jpg', 5,
        5),
       (446562432, 'Witch & Wizard', '51tinNylvIL._SL160_.jpg', 8, 8),
       (446618896, 'School\'s Out Forever', '51GiVdPl7wL._SL160_.jpg', 8, 8),
       (446693510, 'Missed Fortune 101: A Starter Kit to Becoming a Millionaire', '51ZhnA6jgDL._SL160_.jpg', 7, 7),
       (449213447, 'The Chosen', '51G7eJjx89L._SL160_.jpg', 6, 6),
       (449213943, 'Im Westen nichts Neues', '41NKABNB9GL._SL160_.jpg', 9, 9),
       (449703398, 'Reluctant God', '513D2YH9GBL._SL160_.jpg', 7, 7),
       (451166884, 'The Want-Ad Killer', '51xHWXFp2WL._SL160_.jpg', 6, 6),
       (451524934, 'Nineteen Eighty-Four', '31twj9hz1kL._SL160_.jpg', 10, 10),
       (452281431, 'Beauty\'s Punishment', '41yxyeLwxBL._SL160_.jpg', 8, 8),
       (470088702, 'Beginning Programming For Dummies (Beginning Programming for Dummies)', '51zPQ7HrKFL._SL160_.jpg',
        8, 8),
       (471366927, 'Principles of Anatomy and Physiology', '51KFAfr2bTL._SL160_.jpg', 7, 7),
       (486272630, 'Flatland: A Romance of Many Dimensions', '51X6IkcGHPL._SL160_.jpg', 5, 5),
       (525244743, 'When Rabbit Howls', '51T5fAJG5vL._SL160_.jpg', 10, 10),
       (525947698, 'The Privilege of Youth: A Teenager\'s Story', '518IpjwAhcL._SL160_.jpg', 10, 10),
       (544837398, 'Autobiography of a Face', '41964p0t-zL._SL160_.jpg', 9, 9),
       (553212737, 'Emma', '61fM6l2UVTL._SL160_.jpg', 9, 9),
       (553213695, 'Die Verwandlung', '51tdRAgrW9L._SL160_.jpg', 10, 10),
       (553375407, 'Ishmael: An Adventure of the Mind and Spirit', '51c9PkFculL._SL160_.jpg', 9, 9),
       (553418351, 'Gone Girl', '41ePAI+zsmL._SL160_.jpg', 10, 10),
       (553593714, 'A Game of Thrones', '51aeUv8h6CL._SL160_.jpg', 9, 9),
       (590313185, 'Bunnicula: A Rabbit-Tale of Mystery', '515MBTEMKYL._SL160_.jpg', 6, 6),
       (590982079, 'Roll of Thunder', '51tE2zQ7DnL._SL160_.jpg', 5, 5),
       (618446877, 'Dark Star Safari', '51ifr63152L._SL160_.jpg', 8, 8),
       (671457110, 'The Great Bridge: The Epic Story of the Building of the Brooklyn Bridge', '51Rco7nZwEL._SL160_.jpg',
        5, 5),
       (671578715, 'Fortune\'s Stroke', '51VM2NJY1YL._SL160_.jpg', 6, 6),
       (671622480, 'People Skills: How to Assert Yourself', '416+j70DDLL._SL160_.jpg', 6, 6),
       (671794370, 'How I Raised Myself from Failure to Success in Selling', '51iMttzc7GL._SL160_.jpg', 8, 8),
       (673381862, 'Style: Ten Lessons in Clarity and Grace', '41P-Cg5vrZL._SL160_.jpg', 9, 9),
       (679456589, 'The Man Who Listens to Horses', '51YPZMWlhNL._SL160_.jpg', 7, 7),
       (679729771, 'Maus II : And Here My Troubles Began', '51fcK8PNwFL._SL160_.jpg', 10, 10),
       (684801221, 'The Old Man and the Sea', '411pakPjvdL._SL160_.jpg', 8, 8),
       (684857219, 'The New Encyclopedia of Modern Bodybuilding : The Bible of Bodybuilding', '61AJB7D89FL._SL160_.jpg',
        6, 6),
       (684869837, 'Don\'t Give It Away! : A Workbook of Self-Awareness and Self-Affirmations for Young Women',
        '41Dvey-onAL._SL160_.jpg', 9, 9),
       (688039693, 'Leadership and the One Minute Manager: Increasing Effectiveness Through Situational Leadership',
        '51Q-tRVLm3L._SL160_.jpg', 7, 7),
       (689806590, 'Bunnicula: A Rabbit-Tale of Mystery', '515MBTEMKYL._SL160_.jpg', 5, 5),
       (689818513, 'Forged by Fire', '2194l6jQaoL._SL160_.jpg', 9, 9),
       (689823959, 'I Have Lived A Thousand Years: Growing Up In The Holocaust', '51SB2C8CCWL._SL160_.jpg', 5, 5),
       (735606030, 'Play Winning Chess', '414Qw2KIY9L._SL160_.jpg', 8, 8),
       (736957499, 'The Power of a Praying Wife', '41ShQS2aUZL._SL160_.jpg', 9, 9),
       (743255690, 'The Soul of a Butterfly: Reflections on Life\'s Journey', '51XX3A8DWHL._SL160_.jpg', 5, 5),
       (743436539, 'The Virginian: A Horseman of the Plains', '41H0M9V26ZL._SL160_.jpg', 7, 7),
       (743477561, 'The Merchant of Venice', '51a-NbvkmkL._SL160_.jpg', 10, 10),
       (743499344, 'Long Way Round: Chasing Shadows Across the World', '51MTT03X7DL._SL160_.jpg', 9, 9),
       (762431067,
        'Skinny Bitch in the Kitch: Kick-Ass Solutions for Hungry Girls Who Want to Stop Eating Crap (and Start Looking Hot!)',
        '51JwJipIhnL._SL160_.jpg', 6, 6),
       (764516604, 'Linux for Dummies', '51Mse1s81AL._SL160_.jpg', 8, 8),
       (767903277, 'The Informant', '51aMTi6wXbL._SL160_.jpg', 5, 5),
       (767903862, 'Down Under', '51uCBWKPQdL._SL160_.jpg', 9, 9),
       (787984922, 'The Leadership Challenge', '51qv+NdmuRL._SL160_.jpg', 7, 7),
       (802400248, 'De Imitatione Christi', '514wAewRrmL._SL160_.jpg', 5, 5),
       (802860613, 'Lilith: A Romance', '41h1yfpSX4L._SL160_.jpg', 7, 7),
       (803730411, 'Snowmen at Night', '51xLpMdP9hL._SL160_.jpg', 10, 10),
       (804104549, 'Riding the Iron Rooster', '51MTI5LyIGL._SL160_.jpg', 9, 9),
       (805065415, 'Blue Latitudes: Boldly Going Where Captain Cook Has Gone Before', '51b0a1jhKFL._SL160_.jpg', 8, 8),
       (805396136, 'Molecular Biology of the Gene', '41riHfmSDhL._SL160_.jpg', 8, 8),
       (805418466, 'Experiencing God Day by Day: A Devotional and Journal', '41S2ek62uUL._SL160_.jpg', 7, 7),
       (809015803, 'All But My Life', '416IN9eIHdL._SL160_.jpg', 6, 6),
       (812043634,
        '501 French Verbs: Fully Conjugated in All the Tenses in a New Easy-To-Learn Format Alphabetically Arranged',
        '516Zqn1YsqL._SL160_.jpg', 10, 10),
       (812976088, 'The End of Nature', '61aoP5377IL._SL160_.jpg', 6, 6),
       (874478529, 'The Official SAT Study Guide', '4131LvT6LIL._SL160_.jpg', 9, 9),
       (876043759, 'There Is a River: The Story of Edgar Cayce', '415JlgtRaCL._SL160_.jpg', 7, 7),
       (879234490, 'The American Boy\'s Handy Book: What to Do and How to Do It', '612ZsZMNKYL._SL160_.jpg', 7, 7),
       (910034796, 'Courage to Change: One Day at a Time in Al-Anon II', '51yIcT83H+L._SL160_.jpg', 10, 10),
       (915166950, 'Rebuilding: When Your Relationship Ends (Rebuilding Books; For Divorce and Beyond)',
        '51s9Oodk21L._SL160_.jpg', 7, 7),
       (936070463, 'Stretching', '51UrjNDiENL._SL160_.jpg', 9, 9),
       (966378601, 'Shepherding a Child\'s Heart', '51R089Y1DML._SL160_.jpg', 10, 10),
       (975599500, 'Natural Cures They Don\'t Want You To Know About', '51TDZEWNOEL._SL160_.jpg', 7, 7),
       (981989713, 'Free Money', '51bqXhFK2TL._SL160_.jpg', 7, 7),
       (1118273052, 'Market Wizards: Interviews with Top Traders', '51uzWzvZskL._SL160_.jpg', 7, 7),
       (1118607783, 'Starting an Online Business For Dummies (For Dummies (Computer/Tech))', '514ENeCQ3-L._SL160_.jpg',
        8, 8),
       (1118880803, 'Marketing for Dummies', '512rEsiTrXL._SL160_.jpg', 6, 6),
       (1119239281, 'Stock Investing For Dummies (For Dummies (Business & Personal Finance))',
        '51zWLqoNkcL._SL160_.jpg', 7, 7),
       (1250051126, 'Full Bloom', '31rbngk8r6L._SL160_.jpg', 6, 6),
       (1250058139,
        'James Herriot\'s Treasury for Children: Warm and Joyful Tales by the Author of All Creatures Great and Small',
        '51pDT-YQvOL._SL160_.jpg', 6, 6),
       (1400064287, 'Made to Stick: Why Some Ideas Survive and Others Die', '41hMTwhl6IL._SL160_.jpg', 7, 7),
       (1400064678, 'China Road: A Journey into the Future of a Rising Power', '61azZ0iWdBL._SL160_.jpg', 7, 7),
       (1400082773, 'Dreams from My Father', '51LCJdzcSNL._SL160_.jpg', 5, 5),
       (1423103343, 'The Sea of Monsters', '51M7jQ4ETqL._SL160_.jpg', 10, 10),
       (1423649125, 'My First Summer in the Sierra', '516aouQB2bL._SL160_.jpg', 8, 8),
       (1426216513, 'National Geographic Guide to the National Parks of the United States', '51zjMNhDCeL._SL160_.jpg',
        5, 5),
       (1433555506, 'Don\'t Waste Your Life', '51JNBKCFLcL._SL160_.jpg', 9, 9),
       (1433679590, 'The Love Dare', '41wMLZxQmtL._SL160_.jpg', 9, 9),
       (1435145461, 'Gray\'s Anatomy', '41V5VDBX7NL._SL160_.jpg', 5, 5),
       (1449379702, 'Designing Interfaces', '51iGu-amKbL._SL160_.jpg', 10, 10),
       (1451646291, 'Springwater', '51W1MuHa73L._SL160_.jpg', 9, 9),
       (1455536504, 'The Reversal', '5160FGjFR1L._SL160_.jpg', 10, 10),
       (1565126050, 'Last Child in the Woods: Saving Our Children from Nature-Deficit Disorder',
        '51MSDpQjeLL._SL160_.jpg', 10, 10),
       (1568360100, 'Having Our Say: The Delany Sisters\' First 100 Years', '51MSM7986EL._SL160_.jpg', 6, 6),
       (1572319950, 'Programming Windows', '51PpbUUDKzL._SL160_.jpg', 5, 5),
       (1573223158, 'My Friend Leonard', '41PQEqZ8baL._SL160_.jpg', 6, 6),
       (1579542417, 'Dr. Shapiro\'s Picture Perfect Weight Loss: The Visual Program for Permanent Weight Loss',
        '513BJ8VBTKL._SL160_.jpg', 9, 9),
       (1581800460, 'Idea Index: Graphic Effects and Typographic Treatments', '41AxjO3kLxL._SL160_.jpg', 6, 6),
       (1582701709, 'The Secret', '51A+qi-XyfL._SL160_.jpg', 10, 10),
       (1585425524, 'The Now Habit: A Strategic Program for Overcoming Procrastination and Enjoying Guilt-Free Play',
        '51NbewRyO9L._SL160_.jpg', 8, 8),
       (1590529910, 'Authentic Beauty: The Shaping of a Set-Apart Young Woman', '418VwmIS3ML._SL160_.jpg', 7, 7),
       (1591450420, 'It\'s Not About Me: Rescue From the Life We Thought Would Make Us Happy',
        '413ttv5z+YL._SL160_.jpg', 9, 9),
       (1592232701, 'Uncle John\'s Slightly Irregular Bathroom Reader', '61AFQ5D464L._SL160_.jpg', 5, 5),
       (1592402860, 'How Starbucks Saved My Life: A Son of Privilege Learns to Live Like Everyone Else',
        '51jhFCO1wzL._SL160_.jpg', 9, 9),
       (1593270542, 'The Unofficial LEGO Builder\'s Guide', '51RaP4lqjHL._SL160_.jpg', 9, 9),
       (1594481954, 'My Friend Leonard', '41PQEqZ8baL._SL160_.jpg', 6, 6),
       (1601422210, 'Radical: Taking Back Your Faith from the American Dream', '41QxhEWm8DL._SL160_.jpg', 6, 6),
       (1620973928, 'Lies My Teacher Told Me: Everything Your American History Textbook Got Wrong',
        '51zPXyWbZwL._SL160_.jpg', 8, 8),
       (1626361584, 'U.S. Army Survival Manual', '31psDAd7++L._SL160_.jpg', 10, 10),
       (1878257749, 'Earthsearch: A Kids\' Geography Museum in a Book', '51qTWn49pQL._SL160_.jpg', 7, 7),
       (1885167237, 'Inside the Magic Kingdom : Seven Keys to Disney\'s Success', '41YP47WXDRL._SL160_.jpg', 8, 8),
       (1983911054, 'Murder on the Orient Express', '51xlO6rB1wL._SL160_.jpg', 10, 10),
       (3518381768, 'The House of the Spirits', '51RR9yHMRCL._SL160_.jpg', 8, 8),
       (4805311983, 'Hagakure: The Book of the Samurai', '41wzdwwxXJL._SL160_.jpg', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category`
(
    `category_id` int(10)      NOT NULL,
    `name`        varchar(255) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`)
VALUES (1, 'business'),
       (2, 'Computer'),
       (3, 'Education'),
       (4, 'health'),
       (5, 'kids'),
       (6, 'literature'),
       (7, 'romance'),
       (8, 'science'),
       (9, 'sports'),
       (10, 'travel'),
       (11, 'biography'),
       (32, 'Motivational'),
       (33, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `categorybook`
--

CREATE TABLE `categorybook`
(
    `category_id` int(11)    NOT NULL,
    `isbn`        bigint(20) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `categorybook`
--

INSERT INTO `categorybook` (`category_id`, `isbn`)
VALUES (2, 60523808),
       (4, 60523808),
       (9, 60555971),
       (11, 60688246),
       (3, 60741872),
       (4, 60746378),
       (6, 60850523),
       (7, 60850523),
       (6, 60883286),
       (9, 60954787),
       (11, 61357901),
       (6, 61537969),
       (7, 61537969),
       (10, 61930067),
       (5, 62024035),
       (6, 62024035),
       (7, 62024035),
       (9, 64401758),
       (5, 64408663),
       (3, 64431436),
       (10, 64460991),
       (2, 131038052),
       (2, 131872486),
       (2, 132256886),
       (5, 140303359),
       (10, 140566490),
       (9, 142002836),
       (10, 142400459),
       (5, 142401099),
       (9, 142418447),
       (11, 156701600),
       (10, 156899825),
       (2, 195106466),
       (1, 201550873),
       (9, 307279189),
       (11, 307279189),
       (11, 307475018),
       (6, 312427735),
       (7, 312427735),
       (6, 312936222),
       (7, 312936222),
       (10, 312965664),
       (1, 345480155),
       (6, 345497627),
       (7, 345497627),
       (6, 345527704),
       (7, 345527704),
       (6, 345535154),
       (7, 345535154),
       (9, 375802916),
       (9, 380003210),
       (10, 380003210),
       (11, 380003210),
       (3, 380010038),
       (5, 380010038),
       (6, 380010038),
       (7, 380010038),
       (1, 385517254),
       (3, 385517254),
       (1, 393048136),
       (2, 393048136),
       (4, 393351491),
       (8, 393351491),
       (9, 394800362),
       (2, 395728592),
       (5, 399214577),
       (4, 399584161),
       (8, 399584161),
       (1, 399594493),
       (4, 425173291),
       (4, 425183092),
       (8, 425198324),
       (11, 425198324),
       (9, 425228975),
       (4, 439087597),
       (5, 439446333),
       (11, 440220653),
       (9, 440246083),
       (5, 440412676),
       (6, 440412676),
       (7, 440412676),
       (3, 440419395),
       (5, 440419395),
       (5, 441005764),
       (6, 441010512),
       (7, 441010512),
       (1, 446380636),
       (1, 446394599),
       (1, 446518620),
       (2, 446525685),
       (5, 446562432),
       (5, 446618896),
       (6, 446618896),
       (7, 446618896),
       (1, 446693510),
       (5, 449213447),
       (5, 449213943),
       (6, 449213943),
       (7, 449213943),
       (10, 449703398),
       (8, 451166884),
       (11, 451166884),
       (6, 451524934),
       (7, 451524934),
       (6, 452281431),
       (7, 452281431),
       (2, 470088702),
       (8, 471366927),
       (3, 486272630),
       (8, 486272630),
       (4, 525244743),
       (11, 525244743),
       (4, 525947698),
       (11, 525947698),
       (4, 544837398),
       (8, 544837398),
       (11, 544837398),
       (3, 553212737),
       (5, 553212737),
       (8, 553212737),
       (1, 553213695),
       (3, 553213695),
       (5, 553213695),
       (11, 553213695),
       (5, 553375407),
       (6, 553375407),
       (7, 553375407),
       (11, 553375407),
       (6, 553418351),
       (7, 553418351),
       (6, 553593714),
       (7, 553593714),
       (3, 590313185),
       (3, 590982079),
       (6, 590982079),
       (7, 590982079),
       (10, 618446877),
       (8, 671457110),
       (2, 671578715),
       (3, 671622480),
       (1, 671794370),
       (1, 673381862),
       (9, 679456589),
       (11, 679729771),
       (3, 684801221),
       (5, 684801221),
       (6, 684801221),
       (7, 684801221),
       (11, 684801221),
       (9, 684857219),
       (4, 684869837),
       (8, 684869837),
       (1, 688039693),
       (5, 689806590),
       (9, 689818513),
       (11, 689823959),
       (2, 735606030),
       (8, 736957499),
       (9, 743255690),
       (9, 743436539),
       (3, 743477561),
       (8, 743477561),
       (10, 743499344),
       (4, 762431067),
       (2, 764516604),
       (1, 767903277),
       (3, 767903862),
       (8, 767903862),
       (10, 767903862),
       (11, 767903862),
       (1, 787984922),
       (8, 802400248),
       (11, 802400248),
       (10, 802860613),
       (9, 803730411),
       (10, 804104549),
       (10, 805065415),
       (2, 805396136),
       (3, 805418466),
       (11, 809015803),
       (10, 812043634),
       (9, 812976088),
       (3, 874478529),
       (10, 876043759),
       (9, 879234490),
       (4, 910034796),
       (4, 915166950),
       (4, 936070463),
       (9, 936070463),
       (3, 966378601),
       (4, 975599500),
       (1, 981989713),
       (1, 1118273052),
       (2, 1118607783),
       (2, 1118880803),
       (1, 1119239281),
       (10, 1250051126),
       (8, 1250058139),
       (11, 1250058139),
       (1, 1400064287),
       (10, 1400064678),
       (3, 1400082773),
       (8, 1400082773),
       (11, 1400082773),
       (5, 1423103343),
       (6, 1423103343),
       (7, 1423103343),
       (9, 1423649125),
       (10, 1423649125),
       (10, 1426216513),
       (3, 1433555506),
       (3, 1433679590),
       (4, 1433679590),
       (8, 1433679590),
       (3, 1435145461),
       (4, 1435145461),
       (8, 1435145461),
       (2, 1449379702),
       (11, 1451646291),
       (6, 1455536504),
       (7, 1455536504),
       (9, 1565126050),
       (8, 1568360100),
       (11, 1568360100),
       (2, 1572319950),
       (8, 1573223158),
       (4, 1579542417),
       (2, 1581800460),
       (4, 1582701709),
       (1, 1585425524),
       (8, 1590529910),
       (3, 1591450420),
       (2, 1592232701),
       (1, 1592402860),
       (4, 1592402860),
       (10, 1592402860),
       (2, 1593270542),
       (4, 1594481954),
       (11, 1594481954),
       (8, 1601422210),
       (3, 1620973928),
       (8, 1620973928),
       (9, 1626361584),
       (2, 1878257749),
       (1, 1885167237),
       (3, 1983911054),
       (5, 1983911054),
       (3, 3518381768),
       (5, 3518381768),
       (9, 4805311983);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders`
(
    `isbn`       int(11)      DEFAULT NULL,
    `StudentID`  varchar(150) DEFAULT NULL,
    `BookStatus` varchar(25) NOT NULL,
    `orderID`    int(11)     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`isbn`, `StudentID`, `BookStatus`, `orderID`)
VALUES (60555971, '1001', 'Returned', 1),
       (60555971, '1001', 'Returned', 2),
       (60555971, '1001', 'Issue Requested', 3),
       (60555971, '1001', 'Return Requested', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student`
(
    `name`       varchar(255) NOT NULL,
    `email`      varchar(255) NOT NULL,
    `password`   varchar(255) NOT NULL,
    `student_id` int(10)      NOT NULL,
    `contact`    int(15)      NOT NULL,
    `isactive`   tinyint(1)   NOT NULL DEFAULT '0'
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `password`, `student_id`, `contact`, `isactive`)
VALUES ('Admin', 'admin@utdallas.edu', '0192023a7bbd73250516f069df18b500', 999, 883883883, 1),
       ('Sankalp Bhandari', 'sankalp@utdallas.edu', 'd41d8cd98f00b204e9800998ecf8427e', 1000, 1234567890, 1),
       ('Deepak', 'deepak@utdallas.edu', '0192023a7bbd73250516f069df18b500', 1001, 12345, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
    ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `authorbook`
--
ALTER TABLE `authorbook`
    ADD UNIQUE KEY `authorbook` (`isbn`, `author_id`),
    ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
    ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
    ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `categorybook`
--
ALTER TABLE `categorybook`
    ADD UNIQUE KEY `category_id` (`category_id`, `isbn`),
    ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
    ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
    ADD PRIMARY KEY (`student_id`),
    ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
    MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 166;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
    MODIFY `isbn` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2147483647;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
    MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
    MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
    MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorbook`
--
ALTER TABLE `authorbook`
    ADD CONSTRAINT `authorbook_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
    ADD CONSTRAINT `authorbook_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`);

--
-- Constraints for table `categorybook`
--
ALTER TABLE `categorybook`
    ADD CONSTRAINT `categorybook_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
    ADD CONSTRAINT `categorybook_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
