-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2024 at 07:26 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u812963415_speedrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_category`
--

CREATE TABLE `car_category` (
  `car_cat_id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_category`
--

INSERT INTO `car_category` (`car_cat_id`, `brand`, `model`) VALUES
(50000, 'Audi', 'A3'),
(50001, 'Audi', 'RS 7'),
(50002, 'BMW', '3ER'),
(50003, 'BMW', 'M5'),
(50004, 'Toyota', 'Aqua'),
(50005, 'Toyota', 'RAV'),
(50006, 'Toyota', 'V8'),
(50007, 'Toyota', 'Vitz'),
(50008, 'Honda', 'Civic'),
(50009, 'Honda', 'Accord'),
(50010, 'Nissan', 'X-Trail'),
(50011, 'Nissan', 'Sunny'),
(50012, 'Mitsubishi', 'Lancer'),
(50013, 'Mitsubishi', 'Pajero'),
(50014, 'Mercedes-Benz', 'C-Class'),
(50015, 'Mercedes-Benz', 'E-Class'),
(50016, 'Toyota', 'Vits'),
(50017, 'Toyota', 'V8'),
(50018, 'Toyota', 'Aqua'),
(50019, 'Toyota', 'Corolla'),
(50020, 'Honda', 'Civic'),
(50021, 'Ford', 'Mustang'),
(50022, 'Chevrolet', 'Camaro'),
(50023, 'BMW', 'X5'),
(50024, 'Mercedes-Benz', 'C-Class'),
(50025, 'Audi', 'A4'),
(50026, 'Volkswagen', 'Golf'),
(50027, 'Hyundai', 'Elantra'),
(50028, 'Kia', 'Sportage');

-- --------------------------------------------------------

--
-- Table structure for table `car_reviews`
--

CREATE TABLE `car_reviews` (
  `review_id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `review_text` text COLLATE utf8mb4_unicode_ci,
  `rating` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_reviews`
--

INSERT INTO `car_reviews` (`review_id`, `car_id`, `review_text`, `rating`) VALUES
(70000, 30000, 'The Toyota Vits is a reliable and fuel-efficient car.', '4.5'),
(70001, 30000, 'I love the Toyota Vits! It has excellent handling and a comfortable interior.', '4.7'),
(70002, 30000, 'The Toyota Vits is perfect for city driving with its compact size and good fuel economy.', '4.2'),
(70003, 30000, 'I\'ve had my Toyota Vits for years, and it still runs smoothly without any major issues.', '4.6'),
(70004, 30000, 'The Toyota Vits offers great value for the money with its low maintenance costs.', '2.9'),
(70005, 30001, 'The Toyota V8 is a powerful and luxurious car.', '4.2'),
(70006, 30001, 'I feel like a king when driving the Toyota V8. It has a commanding presence on the road.', '4.9'),
(70007, 30001, 'The Toyota V8\'s engine delivers impressive performance, and the interior is filled with premium materials.', '4.6'),
(70008, 30001, 'The Toyota V8 is the epitome of luxury and comfort. It\'s a joy to drive on long trips.', '3.5'),
(70009, 30001, 'The Toyota V8 combines power, elegance, and advanced technology in one stunning package.', '2.1'),
(70010, 30002, 'The Toyota Aqua is a great hybrid car with excellent fuel economy.', '4.8'),
(70011, 30002, 'I\'m impressed with the Toyota Aqua\'s fuel efficiency. It saves me a lot on gas expenses.', '4.7'),
(70012, 30002, 'The Toyota Aqua\'s hybrid system provides a smooth and seamless driving experience.', '4.5'),
(70013, 30002, 'The Toyota Aqua is perfect for environmentally-conscious drivers who want to reduce their carbon footprint.', '3.2'),
(70014, 30003, 'The Toyota Corolla is a popular and practical choice.', '4.0'),
(70015, 30003, 'I\'ve owned my Toyota Corolla for years, and it has never let me down.', '3.8'),
(70016, 30003, 'The Toyota Corolla offers a comfortable ride and good fuel efficiency.', '4.3'),
(70017, 30003, 'The Toyota Corolla is reliable, economical, and has a spacious interior.', '2.7'),
(70018, 30004, 'The Honda Civic offers a comfortable ride and good fuel efficiency.', '4.3'),
(70019, 30004, 'I love my Honda Civic! It\'s stylish, reliable, and has great resale value.', '4.5'),
(70020, 30004, 'The Honda Civic combines practicality with sportiness, making it a fun car to drive.', '4.4'),
(70021, 30004, 'The Honda Civic\'s modern design and advanced features set it apart from the competition.', '3.6'),
(70022, 30005, 'The Ford Mustang is a classic American muscle car with impressive performance.', '4.7'),
(70023, 30005, 'I feel like a superstar when driving the Ford Mustang. Its design turns heads everywhere.', '4.2'),
(70024, 30005, 'The Ford Mustang\'s V8 engine delivers exhilarating power and a thrilling driving experience.', '4.9'),
(70025, 30005, 'The Ford Mustang\'s iconic design pays homage to its heritage while offering modern features.', '2.9'),
(70026, 30006, 'The Chevrolet Camaro combines style and power in a sleek package.', '4.6'),
(70027, 30006, 'I\'m in love with the Chevrolet Camaro! It\'s a true performance car that never disappoints.', '4.8'),
(70028, 30006, 'The Chevrolet Camaro\'s aggressive looks and roaring engine make it a thrill to drive.', '4.7'),
(70029, 30006, 'The Chevrolet Camaro is a beast on the road, offering exhilarating performance.', '3.9'),
(70030, 30007, 'The BMW X5 is a luxury SUV with a refined interior and advanced features.', '4.4'),
(70031, 30007, 'I love the BMW X5! It combines elegance, comfort, and performance seamlessly.', '4.6'),
(70032, 30007, 'The BMW X5\'s spacious cabin and cutting-edge technology make every drive enjoyable.', '4.7'),
(70033, 30007, 'The BMW X5\'s smooth handling and powerful engine make it a pleasure to drive.', '3.3'),
(70034, 30008, 'The Mercedes-Benz C-Class provides a smooth and comfortable driving experience.', '4.5'),
(70035, 30008, 'I\'m impressed with the Mercedes-Benz C-Class\'s luxurious interior and advanced features.', '4.7'),
(70036, 30008, 'The Mercedes-Benz C-Class combines elegance, performance, and cutting-edge technology.', '4.6'),
(70037, 30008, 'The Mercedes-Benz C-Class is a symbol of refinement and prestige.', '3.8'),
(70038, 30009, 'The Audi A4 offers a perfect blend of performance and luxury.', '4.8'),
(70039, 30009, 'I\'m amazed by the Audi A4\'s powerful engine and sophisticated interior.', '4.9'),
(70040, 30009, 'The Audi A4\'s driving dynamics and advanced technology make it a top choice in its class.', '4.7'),
(70041, 30009, 'The Audi A4 is the epitome of style, performance, and luxury.', '3.5'),
(70042, 30010, 'The Volkswagen Golf is a versatile and practical hatchback.', '4.2'),
(70043, 30010, 'I love my Volkswagen Golf! It\'s compact yet spacious, making it perfect for daily commutes.', '4.4'),
(70044, 30010, 'The Volkswagen Golf offers a comfortable ride and great fuel efficiency.', '4.1'),
(70045, 30010, 'The Volkswagen Golf\'s timeless design and reliable performance make it a smart choice.', '2.9'),
(70046, 30011, 'The Hyundai Elantra is a reliable and affordable compact car.', '4.0'),
(70047, 30011, 'I\'m impressed with the Hyundai Elantra\'s fuel efficiency and value for money.', '4.2'),
(70048, 30011, 'The Hyundai Elantra\'s modern design and comfortable interior make it a practical choice.', '4.3'),
(70049, 30011, 'The Hyundai Elantra offers a smooth and responsive ride, perfect for daily commuting.', '2.6'),
(70050, 30012, 'The Kia Sportage is a stylish and capable SUV with a comfortable interior.', '4.3'),
(70051, 30012, 'I love my Kia Sportage! It\'s spacious, reliable, and offers great value for the money.', '4.5'),
(70052, 30012, 'The Kia Sportage\'s sporty design and advanced safety features make it a top contender.', '4.2'),
(70053, 30012, 'The Kia Sportage provides a smooth and enjoyable driving experience.', '3.7'),
(70054, 30000, 'The Toyota Vits is a reliable and fuel-efficient car.', '4.5'),
(70055, 30000, 'I love the Toyota Vits! It has excellent handling and a comfortable interior.', '4.7'),
(70056, 30000, 'The Toyota Vits is perfect for city driving with its compact size and good fuel economy.', '4.2'),
(70057, 30000, 'I\'ve had my Toyota Vits for years, and it still runs smoothly without any major issues.', '4.6'),
(70058, 30000, 'The Toyota Vits offers great value for the money with its low maintenance costs.', '2.9'),
(70059, 30001, 'The Toyota V8 is a powerful and luxurious car.', '4.2'),
(70060, 30001, 'I feel like a king when driving the Toyota V8. It has a commanding presence on the road.', '4.9'),
(70061, 30001, 'The Toyota V8\'s engine delivers impressive performance, and the interior is filled with premium materials.', '4.6'),
(70062, 30001, 'The Toyota V8 is the epitome of luxury and comfort. It\'s a joy to drive on long trips.', '3.5'),
(70063, 30001, 'The Toyota V8 combines power, elegance, and advanced technology in one stunning package.', '2.1'),
(70064, 30002, 'The Toyota Aqua is a great hybrid car with excellent fuel economy.', '4.8'),
(70065, 30002, 'I\'m impressed with the Toyota Aqua\'s fuel efficiency. It saves me a lot on gas expenses.', '4.7'),
(70066, 30002, 'The Toyota Aqua\'s hybrid system provides a smooth and seamless driving experience.', '4.5'),
(70067, 30002, 'The Toyota Aqua is perfect for environmentally-conscious drivers who want to reduce their carbon footprint.', '3.2'),
(70068, 30003, 'The Toyota Corolla is a popular and practical choice.', '4.0'),
(70069, 30003, 'I\'ve owned my Toyota Corolla for years, and it has never let me down.', '3.8'),
(70070, 30003, 'The Toyota Corolla offers a comfortable ride and good fuel efficiency.', '4.3'),
(70071, 30003, 'The Toyota Corolla is reliable, economical, and has a spacious interior.', '2.7'),
(70072, 30004, 'The Honda Civic offers a comfortable ride and good fuel efficiency.', '4.3'),
(70073, 30004, 'I love my Honda Civic! It\'s stylish, reliable, and has great resale value.', '4.5'),
(70074, 30004, 'The Honda Civic combines practicality with sportiness, making it a fun car to drive.', '4.4'),
(70075, 30004, 'The Honda Civic\'s modern design and advanced features set it apart from the competition.', '3.6'),
(70076, 30005, 'The Ford Mustang is a classic American muscle car with impressive performance.', '4.7'),
(70077, 30005, 'I feel like a superstar when driving the Ford Mustang. Its design turns heads everywhere.', '4.2'),
(70078, 30005, 'The Ford Mustang\'s V8 engine delivers exhilarating power and a thrilling driving experience.', '4.9'),
(70079, 30005, 'The Ford Mustang\'s iconic design pays homage to its heritage while offering modern features.', '2.9'),
(70080, 30006, 'The Chevrolet Camaro combines style and power in a sleek package.', '4.6'),
(70081, 30006, 'I\'m in love with the Chevrolet Camaro! It\'s a true performance car that never disappoints.', '4.8'),
(70082, 30006, 'The Chevrolet Camaro\'s aggressive looks and roaring engine make it a thrill to drive.', '4.7'),
(70083, 30006, 'The Chevrolet Camaro is a beast on the road, offering exhilarating performance.', '3.9'),
(70084, 30007, 'The BMW X5 is a luxury SUV with a refined interior and advanced features.', '4.4'),
(70085, 30007, 'I love the BMW X5! It combines elegance, comfort, and performance seamlessly.', '4.6'),
(70086, 30007, 'The BMW X5\'s spacious cabin and cutting-edge technology make every drive enjoyable.', '4.7'),
(70087, 30007, 'The BMW X5\'s smooth handling and powerful engine make it a pleasure to drive.', '3.3'),
(70088, 30008, 'The Mercedes-Benz C-Class provides a smooth and comfortable driving experience.', '4.5'),
(70089, 30008, 'I\'m impressed with the Mercedes-Benz C-Class\'s luxurious interior and advanced features.', '4.7'),
(70090, 30008, 'The Mercedes-Benz C-Class combines elegance, performance, and cutting-edge technology.', '4.6'),
(70091, 30008, 'The Mercedes-Benz C-Class is a symbol of refinement and prestige.', '3.8'),
(70092, 30009, 'The Audi A4 offers a perfect blend of performance and luxury.', '4.8'),
(70093, 30009, 'I\'m amazed by the Audi A4\'s powerful engine and sophisticated interior.', '4.9'),
(70094, 30009, 'The Audi A4\'s driving dynamics and advanced technology make it a top choice in its class.', '4.7'),
(70095, 30009, 'The Audi A4 is the epitome of style, performance, and luxury.', '3.5'),
(70096, 30010, 'The Volkswagen Golf is a versatile and practical hatchback.', '4.2'),
(70097, 30010, 'I love my Volkswagen Golf! It\'s compact yet spacious, making it perfect for daily commutes.', '4.4'),
(70098, 30010, 'The Volkswagen Golf offers a comfortable ride and great fuel efficiency.', '4.1'),
(70099, 30010, 'The Volkswagen Golf\'s timeless design and reliable performance make it a smart choice.', '2.9'),
(70100, 30011, 'The Hyundai Elantra is a reliable and affordable compact car.', '4.0'),
(70101, 30011, 'I\'m impressed with the Hyundai Elantra\'s fuel efficiency and value for money.', '4.2'),
(70102, 30011, 'The Hyundai Elantra\'s modern design and comfortable interior make it a practical choice.', '4.3'),
(70103, 30011, 'The Hyundai Elantra offers a smooth and responsive ride, perfect for daily commuting.', '2.6'),
(70104, 30012, 'The Kia Sportage is a stylish and capable SUV with a comfortable interior.', '4.3'),
(70105, 30012, 'I love my Kia Sportage! It\'s spacious, reliable, and offers great value for the money.', '4.5'),
(70106, 30012, 'The Kia Sportage\'s sporty design and advanced safety features make it a top contender.', '4.2'),
(70107, 30012, 'The Kia Sportage provides a smooth and enjoyable driving experience.', '3.7');

-- --------------------------------------------------------

--
-- Table structure for table `car_table`
--

CREATE TABLE `car_table` (
  `carid` int(11) NOT NULL,
  `car_brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `car_model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fuel` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_plate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `availability` int(11) NOT NULL,
  `noofseat` int(11) NOT NULL,
  `ownership` int(11) NOT NULL,
  `owner_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner_tel` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_table`
--

INSERT INTO `car_table` (`carid`, `car_brand`, `car_model`, `fuel`, `number_plate`, `price`, `availability`, `noofseat`, `ownership`, `owner_name`, `owner_id`, `owner_tel`, `year`, `description`) VALUES
(30000, 'Toyota', 'Vits', 'Petrol', 'ABC-2321', 50, 0, 5, 0, NULL, NULL, NULL, 2018, 'The Toyota Vits is a compact and fuel-efficient car with a stylish design. It offers excellent maneuverability, advanced safety features, and a comfortable interior.'),
(30001, 'Toyota', 'V8', 'Petrol', 'KC-2321', 150, 1, 8, 1, NULL, NULL, NULL, 2012, 'The Toyota V8 is a powerful and luxurious sedan that offers a smooth and refined driving experience. With its spacious cabin, advanced technology, and top-notch safety features, it redefines comfort and performance.'),
(30002, 'Toyota', 'Aqua', 'Petrol', 'ACC-2321', 80, 1, 5, 0, NULL, NULL, NULL, 2019, 'The Toyota Aqua is a hybrid car known for its exceptional fuel economy and eco-friendly nature. It combines a responsive engine, comfortable seating, and advanced safety features, making it an ideal choice for city driving.'),
(30003, 'Toyota', 'Corolla', 'Petrol', 'ABC123', 50, 1, 5, 0, NULL, NULL, NULL, 2019, 'The Toyota Corolla is a reliable and practical car that has been a popular choice for many. It offers a comfortable ride, ample cargo space, advanced safety features, and impressive fuel efficiency, making it perfect for everyday commuting.'),
(30004, 'Honda', 'Civic', 'Petrol', 'DEF456', 60, 1, 5, 0, NULL, NULL, NULL, 2020, 'The Honda Civic is a compact car that combines sporty performance with fuel efficiency. With its sleek design, spacious interior, advanced technology, and excellent handling, it delivers an exhilarating driving experience.'),
(30005, 'Ford', 'Mustang', 'Petrol', 'GHI789', 180, 1, 4, 1, NULL, NULL, NULL, 2021, 'The Ford Mustang is an iconic muscle car that delivers exhilarating power and timeless style. It boasts a powerful engine, aggressive design, cutting-edge technology, and precise handling, making it a dream car for enthusiasts.'),
(30006, 'Chevrolet', 'Camaro', 'Petrol', 'JKL012', 200, 1, 4, 1, NULL, NULL, NULL, 2022, 'The Chevrolet Camaro is a legendary American sports car that offers thrilling performance and head-turning looks. With its powerful V8 engine, refined interior, advanced features, and precise handling, it guarantees an unforgettable driving experienc'),
(30007, 'BMW', 'X5', 'Diesel', 'MNO345', 120, 1, 5, 0, NULL, NULL, NULL, 2020, 'The BMW X5 is a luxurious SUV that combines impressive performance with advanced technology. It offers a spacious and comfortable cabin, state-of-the-art infotainment system, versatile cargo capacity, and exceptional driving dynamics.'),
(30008, 'Benz', 'C-Class', 'Diesel', 'PQR678', 170, 1, 5, 1, NULL, NULL, NULL, 2018, 'The Mercedes-Benz C-Class is a sophisticated and comfortable sedan with cutting-edge features. It boasts elegant styling, a refined interior, advanced safety systems, and a range of powerful engine options, providing a truly luxurious driving experie'),
(30009, 'Audi', 'A4', 'Petrol', 'STU901', 80, 1, 5, 1, NULL, NULL, NULL, 2019, 'The Audi A4 is a premium sedan that delivers a perfect balance of luxury, performance, and comfort. With its elegant design, high-quality materials, advanced technology, and dynamic handling, it sets new standards in its class.'),
(30010, 'Volkswagen', 'Golf', 'Petrol', 'VWX234', 70, 0, 5, 1, NULL, NULL, NULL, 2022, 'The Volkswagen Golf is a versatile and practical hatchback that offers a refined driving experience. With its comfortable interior, fuel-efficient engines, advanced safety features, and user-friendly technology, it remains a top choice for compact ca'),
(30011, 'Hyundai', 'Elantra', 'Petrol', 'YZA567', 55, 1, 5, 1, NULL, NULL, NULL, 2021, 'The Hyundai Elantra is a well-rounded compact car that provides a comfortable ride and modern features. With its stylish design, spacious cabin, advanced safety systems, and fuel-efficient engines, it offers excellent value for money.'),
(30012, 'Kia', 'Sportage', 'Diesel', 'BCD890', 65, 1, 5, 1, NULL, NULL, NULL, 2023, 'The Kia Sportage is a stylish and capable SUV that offers a spacious interior and advanced safety features. With its powerful engine options, smooth handling, comfortable seating, and versatile cargo space, it is ready for any adventure.');

-- --------------------------------------------------------

--
-- Table structure for table `finised_order`
--

CREATE TABLE `finised_order` (
  `orderid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `msg_table`
--

CREATE TABLE `msg_table` (
  `msgid` int(11) NOT NULL,
  `msg_type` varchar(10) NOT NULL,
  `reply_msg_id` int(11) DEFAULT NULL,
  `msg` varchar(500) NOT NULL,
  `seen` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `datetime_column` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg_table`
--

INSERT INTO `msg_table` (`msgid`, `msg_type`, `reply_msg_id`, `msg`, `seen`, `from_id`, `to_id`, `title`, `datetime_column`) VALUES
(60002, 'info', 2, 'We apologize for the inconvenience, but the car you reserved is currently unavailable. We will provide you with a suitable alternative.', 1, 1, 10017, 'Apology for Unavailability', '2023-04-13 23:44:25'),
(60004, 'info', 2, 'Thank you for choosing our car rental service. We appreciate your business and hope you had a pleasant experience.', 0, 1, 10017, 'Thank You for Choosing Us', '2023-04-27 01:07:25'),
(60005, 'info', 2, 'Important: There has been a change in your reservation details. Please contact our customer support for further assistance.', 0, 1, 10017, 'Important: Reservation Update', '2023-05-04 05:24:41'),
(60006, 'info', 0, 'Hi, I have a query regarding my reservation. Can you please assist?', 0, 10017, 1, 'User Query', '2023-05-11 23:41:12'),
(60007, 'info', 0, 'I would like to file a complaint regarding my recent car rental experience. The car was not in the expected condition, and the staff was unhelpful.', 0, 10018, 1, 'Complaint', '2023-05-18 06:11:55'),
(60008, 'info', 0, 'I wanted to provide feedback on the service I received during my car rental. The process was smooth, and the vehicle was clean and well-maintained.', 0, 10019, 1, 'Feedback', '2023-05-25 07:55:58'),
(60010, 'info', 0, 'approved', 0, 10017, 0, 'regarding your reservation', '2023-06-13 12:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `rent_order`
--

CREATE TABLE `rent_order` (
  `orderid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date DEFAULT NULL,
  `pickup_type` int(11) NOT NULL,
  `return_type` int(11) NOT NULL,
  `stts` varchar(100) NOT NULL,
  `stts_details` varchar(100) DEFAULT NULL,
  `price` double NOT NULL,
  `payment` varchar(25) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent_order`
--

INSERT INTO `rent_order` (`orderid`, `carid`, `uid`, `date_from`, `date_to`, `pickup_type`, `return_type`, `stts`, `stts_details`, `price`, `payment`, `submit_date`) VALUES
(20008, 30001, 10017, '2023-06-22', '2023-06-24', 1, 1, 'Accept', '', 300, 'Online', '2023-05-16 04:41:19'),
(20009, 30004, 10017, '2023-06-25', '2023-06-25', 1, 1, 'Accept', '', 150, 'Online', '2023-05-16 04:41:19'),
(20012, 30000, 10017, '2023-06-12', '2023-06-12', 1, 1, 'Accept', '', 50, 'Online', '2023-06-11 07:34:32'),
(20014, 30006, 10022, '2023-06-21', '2023-06-23', 0, 0, 'Accept', '', 440, 'Online', '2023-06-11 09:42:43'),
(20015, 30005, 10024, '2023-06-14', '2023-06-19', 0, 1, 'Reject', '', 655, 'Online', '2023-06-12 04:52:34'),
(20017, 30000, 10018, '2023-06-13', '2023-06-13', 1, 1, 'Pending', '', 50, 'Online', '2023-06-12 07:31:06'),
(20019, 30006, 10026, '2023-06-25', '2023-06-27', 0, 0, 'Accept', '', 440, 'Online', '2023-06-13 13:01:10'),
(20020, 30005, 10017, '2023-06-27', '2023-07-01', 1, 1, 'Accept', '', 540, 'Null', '2023-06-20 17:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `uid` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `otp_time` datetime DEFAULT NULL,
  `verification` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankcardno` int(11) DEFAULT NULL,
  `bankcvvno` int(11) DEFAULT NULL,
  `membership` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`uid`, `email`, `user_name`, `password`, `fname`, `lname`, `address`, `phoneNo`, `idno`, `otp`, `otp_time`, `verification`, `bankcardno`, `bankcvvno`, `membership`) VALUES
(10017, 'dinethsiriwardana28@gmail.com', 'dinethsiriwardana', 'dlLKOlLocrd+AGU=', 'Dineth', 'Siriwardana', 'Janidu , Linkeppitiya, Sirigala ', '0768808901', '200102801615', 143924, '2023-06-12 09:18:07', NULL, NULL, NULL, 'user'),
(10018, 'hasithasandeepa2000@gmail.com', 'Hasitha', 'GmDNJkLpfLV7AWdQ', 'Hasitha', 'Sandeepa', 'Matara', '0774958618', '200015800715', 479876, '2023-06-09 01:51:27', NULL, NULL, NULL, 'user'),
(10019, 'anugunawardana4000@gmail.com', 'Anusarani', 'M2/LPFfzfOki', 'Anusarani', 'Gunawardhana', 'Yatiyana, Matara.', '0765520471', '200072803100', NULL, NULL, NULL, NULL, NULL, 'user'),
(10020, 'gimhanigalbadage@gmail.com', 'Himasha Gimhani', 'GmjTLkXpfLZ5Ag==', 'Himasha', 'Gimhani', '38/15, second lane, Lional jayasinghe road, panagoda, homagama', '0757146375', '200151002794', NULL, NULL, NULL, NULL, NULL, 'user'),
(10021, 'hirudilmih@gmail.com', 'Hiruni Dilmika', 'AXHbKlLBT+IlRQ==', 'Hiruni', 'Dilmika', 'Pitawala, Ginigathena', '0705585159', '200082704563', 379366, '2023-06-10 04:08:05', NULL, NULL, NULL, 'user'),
(10022, 'wishveetharu@gmail.com', 'Tharu', 'E1L6CQezLrM=', 'Tharu ', 'Matharage', 'Homagama', '0768808901', '200070903476', 564289, '2023-06-11 01:24:37', NULL, NULL, NULL, 'user'),
(10023, 'danidutharuka12345@gmail.com', 'dilshan', 'NmjSPF7gc7Z5Ag==', 'kalawila pathirage', 'danidu tharuka dilshan', 'dgsudgsjdsjdjsds', '0771981995', '200034000196', 347765, '2023-06-11 01:23:51', NULL, NULL, NULL, 'user'),
(10025, 'admin@speedrent.live', 'admin', 'M2XTJljgeeoiXw==', 'Admin', 'admin', 'Kumara Saman ', '0768808901', '1231231231', 810897, '2023-06-13 07:56:27', NULL, NULL, NULL, 'admin'),
(10026, 'sewwandi@gmail.com', 'sewwandi', 'YzONewO3Kr8=', 'Hiruni', 'Sewwandi', 'Kaburupitiya, Matara', '0717030117', '20009876543', 837761, '2023-06-13 12:53:23', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_category`
--
ALTER TABLE `car_category`
  ADD PRIMARY KEY (`car_cat_id`);

--
-- Indexes for table `car_reviews`
--
ALTER TABLE `car_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `car_table`
--
ALTER TABLE `car_table`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `finised_order`
--
ALTER TABLE `finised_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg_table`
--
ALTER TABLE `msg_table`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `rent_order`
--
ALTER TABLE `rent_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_category`
--
ALTER TABLE `car_category`
  MODIFY `car_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50029;

--
-- AUTO_INCREMENT for table `car_reviews`
--
ALTER TABLE `car_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70108;

--
-- AUTO_INCREMENT for table `car_table`
--
ALTER TABLE `car_table`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30013;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msg_table`
--
ALTER TABLE `msg_table`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60011;

--
-- AUTO_INCREMENT for table `rent_order`
--
ALTER TABLE `rent_order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20021;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10027;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
