-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2024 at 04:21 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table contact
--

DROP TABLE IF EXISTS contact;
CREATE TABLE IF NOT EXISTS contact (
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  last_name varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  email varchar(250) NOT NULL,
  comments varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table home
--

DROP TABLE IF EXISTS home;
CREATE TABLE IF NOT EXISTS home (
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  video varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table home
--

INSERT INTO home (id, video) VALUES
(1, 'demo-reel.mp4');

-- --------------------------------------------------------

--
-- Table structure for table images
--

DROP TABLE IF EXISTS images;
CREATE TABLE IF NOT EXISTS images (
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  project_page_id int NOT NULL,
  project_image varchar(500) NOT NULL,
  video varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table images
--

INSERT INTO images (id, project_page_id, project_image, video) VALUES
(1, 1, 'coupleresort_1.png', ''),
(2, 1, 'coupleresort_2.png', ''),
(3, 1, 'coupleresort_3.png', ''),
(4, 1, 'coupleresort_4.png', ''),
(5, 2, 'billybeer_1.png', ''),
(6, 2, 'billybeer_2.png', ''),
(7, 2, 'billybeer_3.png', ''),
(8, 2, 'billybeer_4.png', ''),
(9, 3, 'promotionalvideo_1', 'promotionalvideo.mp4'),
(10, 3, 'promotionalvideo_2.png', ''),
(11, 3, 'promotionalvideo_3.png', ''),
(12, 3, 'promotionalvideo_4.png', ''),
(13, 4, 'industrynight_1.png', 'industrynight.mp4'),
(14, 4, 'industrynight_2.png', ''),
(15, 4, 'industrynight_3.png', ''),
(16, 4, 'industrynight_4.png', '');

-- --------------------------------------------------------

--
-- Table structure for table project_pages
--

DROP TABLE IF EXISTS project_pages;
CREATE TABLE IF NOT EXISTS project_pages (
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  name varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  photo varchar(75) NOT NULL,
  category varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  year int UNSIGNED NOT NULL,
  software varchar(500) NOT NULL,
  description varchar(500) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table project_pages
--

INSERT INTO project_pages (id, name, photo, category, year, software, description) VALUES
(1, 'Couple Resort', 'couple_resort_main.png', 'UX/UI Design', 2023, 'Adobe XD', 'In this project, I designed wireframes for a couple resort website over a span of two weeks. The images used were a mix of those provided by the project coordinator and selected stock images. The main challenge was maintaining consistency throughout the process. As I progressed, I frequently came up with new ideas, which required careful evaluation to ensure they aligned with the overall design goals. This project enhanced my ability to balance creative innovation with design consistency, ensuri'),
(2, 'Billy Beer', 'billy_beer_main.png\r\n', 'UX/UI Design, Web-Development and 3D Design', 2024, 'Adobe XD, Adobe illustrator, Adobe After effects and Visual Studio Code editor.', 'For the \"Billy Beer\" project, I handled multiple aspects, including creating wireframes, designing the logo, modeling a 3D can, producing a video in After Effects, and coding the website. This comprehensive work demonstrates a blend of design, 3D modeling, animation, and development skills.'),
(3, 'Promotional Video', 'promotional_main.png', '3D Design and Motion Design', 2024, 'Cinema 4D, Adobe After Effects and Adobe Premiere Pro', 'For the \"Billy Beer\" project, I created a promotional video for the website. The process involved modeling the can in Cinema 4D, designing its label in Illustrator, and assembling the final video in After Effects. This showcased a blend of 3D modeling, graphic design, and video production expertise.'),
(4, 'Industry Night', 'industry_night_main.png', 'UX/UI Design, Web-Development and Motion Design.', 2024, 'Adobe XD, Adobe Premiere Pro and Visual Studio Code editor', 'For the hackathon project, I played a key role in the team by focusing primarily on coding. I developed features using JavaScript, structured the website with HTML, and styled it with CSS to ensure a functional and visually appealing design. Beyond coding, I contributed creatively by working on specific elements of the project’s video, blending technical and multimedia skills to enhance the overall presentation.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
