-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 09:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codepolitan`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `url`, `cover`, `date`) VALUES
(3, 'Artikel Ketiga Saya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum egestas mauris, vel gravida diam iaculis vel. Nulla urna neque, euismod nec aliquet ut, mattis sollicitudin nisl. Phasellus nibh ipsum, aliquet a dolor at, laoreet accumsan arcu. In hac habitasse platea dictumst. Aliquam a urna mollis, egestas leo id, gravida augue. Donec semper id nisi vel porta. Vivamus sollicitudin vehicula sapien, vitae porttitor arcu eleifend nec. Phasellus porta orci in tempor volutpat. Proin id placerat lectus. Donec pretium in ipsum quis pretium. Sed tempus vel lacus eget rutrum.', 'artikel-ketiga', '-', '2022-07-12 15:31:26'),
(4, 'Artikel Keempat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie cursus augue, aliquet rutrum justo consequat sit amet. Pellentesque consectetur neque quis orci molestie condimentum quis sed mauris.', 'artikel-keempat', '', '2022-07-14 02:25:30'),
(5, 'Artikel Kelima', '       maklo gaming         Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie cursus augue, aliquet rutrum justo consequat sit amet. Pellentesque consectetur neque quis orci molestie condimentum quis sed mauris.            ', 'artikel-kelima', '', '2022-07-14 02:46:06'),
(6, 'Artikel Keenam', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie cursus augue, aliquet rutrum justo consequat sit amet. Pellentesque consectetur neque quis orci molestie condimentum quis sed mauris.', 'artikel-keenam', '', '2022-07-14 02:25:30'),
(12, 'Artikel Pertama Saya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie cursus augue, aliquet rutrum justo consequat sit amet. Pellentesque consectetur neque quis orci molestie condimentum quis sed mauris.', 'Artikel-pertama', '', '2022-07-14 03:01:02'),
(13, 'Blog Terbaru Saya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt id aliquet risus feugiat in ante metus dictum at. Elementum eu facilisis sed odio morbi quis commodo odio. Bibendum arcu vitae elementum curabitur vitae nunc. Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Tortor pretium viverra suspendisse potenti nullam ac tortor. Mattis nunc sed blandit libero volutpat sed cras. Duis ut diam quam nulla porttitor massa id. Nibh tellus molestie nunc non blandit massa enim. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Sit amet luctus venenatis lectus magna fringilla urna. Netus et malesuada fames ac turpis egestas. Vitae nunc sed velit dignissim sodales. Scelerisque eleifend donec pretium vulputate. Malesuada fames ac turpis egestas sed tempus urna et. Sit amet nisl purus in mollis.\r\n\r\nEgestas erat imperdiet sed euismod nisi. Viverra ipsum nunc aliquet bibendum. Eros donec ac odio tempor orci dapibus ultrices in iaculis. In aliquam sem fringilla ut morbi tincidunt augue. Non sodales neque sodales ut etiam sit amet nisl purus. Risus nullam eget felis eget nunc lobortis mattis. Nunc sed id semper risus in hendrerit. Pharetra pharetra massa massa ultricies mi quis hendrerit. Purus in massa tempor nec. Amet justo donec enim diam vulputate. Id leo in vitae turpis massa sed elementum tempus egestas. Placerat in egestas erat imperdiet sed euismod. Ut consequat semper viverra nam libero justo laoreet sit amet. Vitae suscipit tellus mauris a diam maecenas sed.\r\n\r\nNisl rhoncus mattis rhoncus urna neque viverra justo nec. Tempor orci dapibus ultrices in. Porttitor leo a diam sollicitudin tempor id eu. Viverra vitae congue eu consequat ac felis donec et odio. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit. Sed augue lacus viverra vitae congue eu consequat ac. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Quisque non tellus orci ac. Duis tristique sollicitudin nibh sit amet commodo. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris.\r\n\r\nSapien eget mi proin sed libero enim. Odio facilisis mauris sit amet massa. Lorem sed risus ultricies tristique nulla aliquet enim tortor. Pellentesque nec nam aliquam sem et tortor consequat. Mollis nunc sed id semper risus in hendrerit. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Neque egestas congue quisque egestas. Felis imperdiet proin fermentum leo vel. Dignissim diam quis enim lobortis scelerisque. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Nisi porta lorem mollis aliquam ut. Dis parturient montes nascetur ridiculus mus. Sollicitudin nibh sit amet commodo nulla facilisi. Pellentesque elit ullamcorper dignissim cras tincidunt. Placerat in egestas erat imperdiet sed. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat. Tincidunt lobortis feugiat vivamus at augue eget arcu.\r\n\r\nNam at lectus urna duis convallis. Aliquam faucibus purus in massa tempor. Morbi tincidunt ornare massa eget egestas purus. Consequat interdum varius sit amet. Mi bibendum neque egestas congue quisque egestas. Interdum velit euismod in pellentesque massa placerat duis ultricies lacus. Eget arcu dictum varius duis at consectetur lorem. Ut enim blandit volutpat maecenas volutpat blandit. Duis at consectetur lorem donec massa. Orci dapibus ultrices in iaculis nunc sed. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Lorem sed risus ultricies tristique nulla aliquet. Aliquet bibendum enim facilisis gravida neque. Nunc sed blandit libero volutpat sed cras ornare arcu dui. Neque vitae tempus quam pellentesque nec.', 'Blog-Baru', '', '2022-07-14 06:11:33'),
(14, 'Artikel Baru', 'uwooooooooooooooooogggggggghhhhhhh', 'Art-baru', '', '2022-07-14 06:21:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
