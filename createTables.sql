SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `account` (
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `account` (`firstName`, `lastName`, `username`, `email`, `password`) VALUES
('Ghazi', 'Salam', 'gz', 'gzsalam7@gmail.com', 'fuck');

CREATE TABLE `park` (
  `parkID` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `parkType` varchar(30) NOT NULL,
  `activities` varchar(60) NOT NULL,
  `facilities` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `park` (`parkID`, `name`, `latitude`, `longitude`, `parkType`, `activities`, `facilities`) VALUES
(1, 'Green Hills Park', 43.2498, -79.9143, 'Trail', 'Trails, Cycling, Public Classes', 'Washrooms, Bike Rental'),
(2, 'El Dorado Park', 43.24, -79.99, 'Trail', 'Treasure Hunting', 'Temples'),
(3, 'Doggie Heaven Hills Park', 43.28, -79.91, 'Dog', 'Dog park', 'Dog Daycare'),
(4, 'Public Landfill Sandlot Park', 43.21, -79.81, 'Children\'s', 'Playground', 'Garbage bins'),
(5, 'Albion Hills Park', 44, -79, 'trails', 'Games', 'Basketball hoop');

CREATE TABLE `reviews` (
  `email` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `review` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `reviews` (`email`, `name`, `review`, `rating`) VALUES
('gzsalam7@gmail.com', 'Albion Hills Park', 'Good park I think', 5);


ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

ALTER TABLE `park`
  ADD PRIMARY KEY (`parkID`);

ALTER TABLE `reviews`
  ADD PRIMARY KEY (`email`);


ALTER TABLE `park`
  MODIFY `parkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

