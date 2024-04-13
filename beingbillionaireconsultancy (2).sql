-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 02:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beingbillionaireconsultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `password`, `mobile`, `address`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'adminprofile', 'admin@gmail.com', '123456', '7800730155', 'Lucknow', '1712569971icon.png', '', '08-04-2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `gallery_images` text DEFAULT NULL,
  `gallery_thumbnail` varchar(255) NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_description` text NOT NULL,
  `uploaded_date` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `gallery_images`, `gallery_thumbnail`, `gallery_title`, `gallery_description`, `uploaded_date`, `url`, `status`, `created_at`) VALUES
(1, 'test_0_bhitari.png', '1712385534gallery_thumbnail.png', 'JOURNEY TO BECOME AN ENTREPRENEUR – CHAPTER 1 – START SIDE HUSTLING ', '<p><span style=\"font-family: &quot;Roboto Slab&quot;, sans-serif; font-size: 14px;\">Embarking on the journey to become an entrepreneur can be an exciting and fulfilling endeavour. While the path to success may vary for each individual, one crucial step that can pave the way is starting a side hustle. A side hustle refers to a part-time business or project that you pursue alongside your regular job or commitments. It provides an opportunity to explore your entrepreneurial skills, test business ideas, generate additional income, and ultimately lay the foundation for your future endeavours. In this article, we will discuss the significance of starting side hustles as the first step towards becoming an entrepreneur and highlight key considerations and benefits associated with this pursuit.</span><br></p>', '', 'https://www.linkedin.com/pulse/journey-become-entreprenuer-chapter-1-start-side-hustling-kumar/?trackingId=5kmVmL3fR%2B29ky7fbctcOw%3D%3D', 'Published', '2024-04-05 12:58:14'),
(2, 'test_0_connect-district.png', '1712385488gallery_thumbnail.png', 'JOURNEY TO BECOME AN ENTREPRENEUR : CHAPTER 2 – DIVERSIFY YOUR INCOME : EXPLORING VARIOUS OPTIONS FOR A SECOND INCOME ', '<p><span style=\"font-family: &quot;Roboto Slab&quot;, sans-serif; font-size: 14px;\">In today\'s uncertain financial landscape, relying on a single source of income is becoming less appealing, prompting individuals to seek additional ways to generate a second income. This article explores various options for earning a second income, highlighting their potential benefits. Freelancing and consulting allow individuals to leverage their skills and expertise on platforms like Upwork and Freelancer. Rental income can be obtained by listing spare rooms on Airbnb or renting out storage space.</span><br></p>', '', 'https://www.linkedin.com/pulse/journey-become-entrepreneur-chapter-3-freelancing-consulting-kumar/?trackingId=5kmVmL3fR%2B29ky7fbctcOw%3D%3D', 'Published', '2024-04-05 12:59:24'),
(3, '1712570351gallery_image.png', '1712570351gallery_thumbnail.png', 'JOURNEY TO BECOME AN ENTREPRENEUR: CHAPTER 3 –Freelancing and Consulting: Ways to Start a Second Income through Freelancing & Consulting', '<p>&nbsp; &nbsp;</p>', '', 'https://www.linkedin.com/pulse/journey-become-entrepreneur-chapter-3-freelancing-consulting-kumar/?trackingId=5kmVmL3fR%2B29ky7fbctcOw%3D%3D%22%20target=%22_blank%22', 'Pending', '2024-04-06 06:24:31'),
(4, 'test_0_cb.png', '1712570413gallery_thumbnail.png', 'ryrytry', '<p>rtyryryt</p>', '2024-05-29T15:29', 'https://www.youtube.com/embed/DSJAwFR5nu8?si=vppqi7JFjoCldHJw', 'Pending', '2024-04-08 10:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_location` varchar(255) DEFAULT NULL,
  `event_description` text DEFAULT NULL,
  `event_startdate` varchar(255) DEFAULT NULL,
  `event_enddate` varchar(255) DEFAULT NULL,
  `event_url` varchar(255) DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `event_thumbnail` varchar(255) DEFAULT NULL,
  `event_type` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `event_title`, `event_location`, `event_description`, `event_startdate`, `event_enddate`, `event_url`, `event_image`, `event_thumbnail`, `event_type`, `status`, `created_at`) VALUES
(9, 'Online', 'Online via zoom', '                                                                                                                Tackling loss and damage: practical solutions from the frontline                                                                                                        ', '2023-11-03 12:45 PM', '2023-11-03 12:45 PM', 'https://www.eventbrite.co.uk/e/tackling-loss-and-damage-practical-solutions-from-the-frontline-tickets-743493909297?aff=oddtdtcreator', '1712556145event_image.jpg', '1712556145event_thumbnail.jpg', 'Workshop', 'Pending', '2023-11-03 07:17:44'),
(10, 'test', 'test', '                                                        <p>erwwwrwr</p>                                                    ', '2024-04-16 10:03 AM', '2024-04-19 10:03 AM', 'http://localhost/bbc/Admin/events/add', '1712308692event_image.png', '1712308692event_thumbnail.png', 'Webinar', 'Pending', '2024-04-05 04:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `id` int(11) NOT NULL,
  `job_designation` varchar(200) NOT NULL,
  `job_location` varchar(200) NOT NULL,
  `job_experience` varchar(200) NOT NULL,
  `job_duration` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`id`, `job_designation`, `job_location`, `job_experience`, `job_duration`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Backend Developer', 'Lucknow', '3+ Experience', 'Full-Time', 1, '', ''),
(2, 'Fullstack Developer', 'Lucknow', '2+ Experience', 'Half-Time', 1, '', ''),
(4, 'fghfhfh', 'hgfdgfh', '1+ Experience', 'fghgfhgfh', 1, '08-04-2024', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `news_description` text NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `news_description`, `start_date`, `end_date`, `status`, `created_at`) VALUES
(6, '<p>This is my second test news</p>', '2024-04-26T09:57', '2024-04-25T09:57', 'Published', '2024-04-06 04:27:49'),
(5, '<p>This is test News for today</p>', '2024-04-18T15:46', '2024-04-18T15:46', 'Published', '2024-04-05 10:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
