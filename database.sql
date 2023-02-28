-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 04:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waziper`
--

-- --------------------------------------------------------

--
-- Table structure for table `sp_account_manager`
--

CREATE TABLE `sp_account_manager` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `social_network` mediumtext DEFAULT NULL,
  `category` mediumtext DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `login_type` int(11) DEFAULT NULL,
  `can_post` int(1) DEFAULT NULL,
  `pid` mediumtext DEFAULT NULL,
  `name` mediumtext DEFAULT NULL,
  `username` mediumtext DEFAULT NULL,
  `token` mediumtext DEFAULT NULL,
  `avatar` mediumtext DEFAULT NULL,
  `url` mediumtext DEFAULT NULL,
  `data` mediumtext DEFAULT NULL,
  `proxy` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_blog`
--

CREATE TABLE `sp_blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_caption`
--

CREATE TABLE `sp_caption` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_coupon_manager`
--

CREATE TABLE `sp_coupon_manager` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `name` mediumtext DEFAULT NULL,
  `code` mediumtext DEFAULT NULL,
  `type` mediumtext DEFAULT NULL,
  `price` float DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `packages` mediumtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_faqs`
--

CREATE TABLE `sp_faqs` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_file_manager`
--

CREATE TABLE `sp_file_manager` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `name` mediumtext DEFAULT NULL,
  `file` mediumtext DEFAULT NULL,
  `type` mediumtext DEFAULT NULL,
  `extension` mediumtext DEFAULT NULL,
  `size` float DEFAULT NULL,
  `is_image` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `note` mediumtext DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_language`
--

CREATE TABLE `sp_language` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `code` mediumtext DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `text` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_language`
--

INSERT INTO `sp_language` (`id`, `ids`, `code`, `slug`, `text`) VALUES
(1, 'fd4198b5a36d02bae3a9d277717930dd', 'en', '505a83f220c02df2f85c3810cd9ceb38', 'Success'),
(2, '595f481146ce9d1fa6fc425c7b784f6e', 'en', 'dfb45b965eb127f7dd2a2dad190dfe05', 'Your account has been activated successfully. Let\'s start experiencing the great features.'),
(3, '73c8755f5656eae86828edaba2aa68c9', 'en', '99dea78007133396a7b8ed70578ac6ae', 'Login'),
(4, '604ffd06b73c74f00116fe0c2d775a25', 'en', 'a9a62e70841c4d06dd16306a85700d36', 'Activation'),
(5, '12a49f75c6a1016c984299bf50f37a57', 'en', 'f6357dcd28326385103ae773c87137cf', 'Activate your account'),
(6, '5fa93cddabd9ec8a498bf1a7d40a88cf', 'en', '8f13c68b90bc8f1c6c0157bd2c6931bc', 'Our latest news'),
(7, '8e1aa3f7534e86cc30ba44825a41f50e', 'en', '640c044aaad475efe45c2a1b26d19d8f', 'Update the latest information from us'),
(8, '7947209edd7abd3e6dd65bd852056e38', 'en', 'decbe415d8accca7c2c16d48a79ee934', 'Read More'),
(9, 'ff149adcbee5a6c89fd49552739ce548', 'en', 'e31f55827f6612c005f44acc3fc8a76c', '&copy; 2020-2021. All rights reserved.'),
(10, 'fed93aca4e369c7642ec1c3796bb4380', 'en', '8cf04a9734132302f96da8e113e80ce5', 'Home'),
(11, '58775ec3e6e6a6683c63127f6a436018', 'en', '831d44552f2142638681102ef1ec0bf1', 'Useful Links'),
(12, '6928466b438d8725cf6c77d4cfed8498', 'en', '98f770b0af18ca763421bac22b4b6805', 'Features'),
(13, '60b1a1ca07db5a6514955a25f9e918f0', 'en', '80919be0413cba91ea1c240ca12ee13a', 'Signup'),
(14, 'a5812f8988f92caddbe50c07e27e500f', 'en', 'db5eb84117d06047c97c9a0191b5fffe', 'Support'),
(15, 'f421397228b47ba3074f760044c5f570', 'en', '483a5da192f46e3cfe8391d3ef234fc4', 'FAQs'),
(16, '28ad71a43e9ce66965e4c3d8dde0d468', 'en', 'fa2ead697d9998cbc65c81384e6533d5', 'Privacy Policy'),
(17, 'cba15e97c6b652230db48687ff089394', 'en', '9f45d62f87438db3fc4e7cba1052d9ad', 'Terms of Services'),
(18, 'ffbc35bb5598564f00b7aa4593904260', 'en', '6fee787a18ae5c9d4d26daed2cc4f6a0', 'Our Social Networks'),
(19, 'cd669028a0a600420a6438694d56383d', 'en', '9d63ea2313445bd6c85426133ae2645d', 'Another way you can also search for us on social networks'),
(20, '0d982f2c5dbe9881f7547fda5d32be3b', 'en', '98f130908bdb82901f3bc905870908fb', 'Forgot password'),
(21, 'ce62f7cab2238f645023c81ecaf8ce77', 'en', '227f1ae18fd039ffe553f5aaf6b16d35', 'Please enter your email we will to reset password'),
(22, '4c91b99574ad858d65a907a4c5045cbc', 'en', 'f6039d44b29456b20f8f373155ae4973', 'Username'),
(23, '877e882f18023058bc592e319a3713f5', 'en', '3bbbad631029e3575da7a151bba4f37c', 'Log In'),
(24, 'df18fdfcc4a8a408e0f3074b13edc6e9', 'en', 'e22ac25b066b201473de7aa700ef5d92', 'Pricing'),
(25, '884967d65fddd0037cc7513d2518bb5b', 'en', 'be8df1f28c0abc85a0ed0c6860e5d832', 'Blog'),
(26, '9752cf36469731dae6edae7d8eff439b', 'en', 'e0c4332e8c13be976552a059f106354f', 'Get Started'),
(27, '8ec8f38ee5d6c7dc8540819e69d46ab7', 'en', 'fa02393dd2853fa7e6e0e28df30a0043', 'Hi, %s'),
(28, '8b0055d4908182fe86a94a9746c30d77', 'en', '36c50a61062198424098cc2281636e34', '#1 Marketing Platform for Social Network'),
(29, 'c2fcc0202494f279562398a5f300c88c', 'en', '3ced0c9fcf81f4b8a38804b0256acbbd', 'With our service will help you save time and optimize profile management on social networks. Visually Plan, Schedule post and automation on social networks.'),
(30, '5d33399d33e8acdf29bfc78abdb97f17', 'en', '621adc05b86ead219c0f74f6ff67eba1', 'Start A Free Trial'),
(31, 'a743b3c2364c11eb10d79d193df47ec1', 'en', 'f5395c9793af8a11b406ca7c1ac70da9', 'Learn More'),
(32, '64129694839200c49830a5c048ef1a51', 'en', 'd5fcda9391bcf3ec22726b84c6873eae', 'Using Benefits'),
(33, 'a91ccc933469613904d02982ecdb3b89', 'en', '5c9d1512ad2cfa8e356ab42dbc7f2a7b', 'A simple, smart & proven way to boost your work performance'),
(34, '659ad28108e21338d42aabd62d62db98', 'en', '35a599f0a73067e8b33642b0fa08f63a', 'No downloads'),
(35, '80ec2f4442e53a96321e72b94ea1a56a', 'en', '191b476862fc32fc11776ab0b4655577', 'You can use our service straight from the web on all browsers. You don\'t need to download or install anything to enjoy our service'),
(36, 'e50ec00e9aefcea672007beb041aa37f', 'en', '5799419308504ac51e21078e644562a7', 'Saving Time'),
(37, 'd2ea71284f4b5e117f89f96ab33d445f', 'en', '1056634b3cc4659e96281768576cc161', 'Dedicating just 10-20 minutes a day on your social media strategy can dramatically improve your customer relations and interactions'),
(38, '2c86880967bd7754c215d50cd3a61480', 'en', '777dfe12677ee343905c520f3a6093ae', 'Schedule posts'),
(39, 'c66d5d48fc077e4fa219c5d92e575695', 'en', '7b2f1c1838da9b5389912045046b7a6e', 'Select your date, time or whenever you want to publish on each your social accounts just need a few click to complete and enjoy'),
(40, '9fdf1963bca1d8fe10675e04a849dcbd', 'en', '1c673827f58ce9caf3692e421991baf2', 'Analytics performance'),
(41, 'a5934ac8578ab6c197e8d2c11be97640', 'en', 'fde77a165d758a85d9abff31d15b0561', 'You can see all your posts how it work and increase does. It will help you control your audiences and target'),
(42, '8c9ef12f5832c1870e93338f3b699eab', 'en', '745d730613d5c5abb52b75a5c5a1b6d9', 'Influencer Marketing'),
(43, 'f055aa6e49c4439f7fdbafb14a677f1a', 'en', '4f2c2c858340379920559bdd7079d895', 'Focus on your top influencers & supporters so you don\'t miss their engagements follow them'),
(44, '07a78359d934ca33269e1636165addc1', 'en', '2b69032ea36626a737438ed001ced720', 'Safe and Secure'),
(45, '5c392394f685d387aaf9f776ff4217af', 'en', 'ae5274a9b52a0faf3c8249316c8d1a05', 'Your data is safe with us. We\'re not one of those companies that gives your personal information away'),
(46, '427b89e4a7dddfc7b7a4b4dc88b115cd', 'en', 'b568f3c7c226f7e08f5ded8c0e6134ba', 'The Bright Feature'),
(47, '12ade863b8cff1cb8111d98813f693b8', 'en', 'dfe32db50ff96cd1b11cb0428f57d902', 'We\'re more than a scheduling tool. Explore our features, and beat the algorithm'),
(48, '4433405eab580877e99e1cfc25a8719b', 'en', 'a632162abed09bc6d2439e913151479d', 'Visually plan and schedule your social media campaigns'),
(49, '08bd9f58b3fa074110df33b8243a7367', 'en', '86aaa6f8124608229aa0ff148590b414', 'Coordinate creative campaigns to drive engagement on social'),
(50, 'f2aa0f64f1b9e2711f1e8480dec007a2', 'en', 'fbe058053a23f48562dca3a546aeabb3', 'Measure and report on the performance of your content'),
(51, 'cdab22440aa9c19553775dbb8a54b544', 'en', '416d850e049a3592ebdc3996f27e2f0c', 'Get in-depth insights to grow your reach, engagement, and sales'),
(52, 'c6d0be959aa9a50263ef452b56c613f0', 'en', '469a5192bf25d20c488af59a71716578', 'Monitor engagement across all your social channels'),
(53, '8e11cb5c94358689c23c661b7c12612c', 'en', '9539e55fce6c1e6905092562f70f9459', 'Engage with your audience & build a community that loves your brand.'),
(54, '713353744081cc143464da18b537a41f', 'en', 'f838f64c7e629d3105edc134c5249580', 'Streamline your social media processes & delivery for your clients'),
(55, '25749b2b87b823501e688243a126db4e', 'en', 'c338a4ee896cfb5f4941f576dbfe61b1', 'Whether focusing on a campaign for one brand or managing social across hundreds, Our service helps agency teams be more productive by managing all their client activities from a centralized hub. Our service is guaranteed to save your hours each day'),
(56, '8c8611b8c9a0a5f183c64d962ec301f1', 'en', 'f311e14ff1b91f5693153c94826baa37', 'A complete solution for your social marketing & save your time'),
(57, '9194164a1d84ff8e8da446f8d06e4199', 'en', '23150f89ef560b9e2d0f35211398c0a8', 'With an intuitive interface and a lot of extra features to help you create articles that are interesting and easier'),
(58, 'fceb48c26dd4c053afe794a63ead4787', 'en', 'b9b68dceb6a2b28dc352924fde795a20', 'What are you waiting for? Let us help you succeed'),
(59, 'cbd81d70192a05f5adf22926c28a9f8c', 'en', '5780c62ec55362fac70d8fe8b1982b56', 'Try it now'),
(60, '898e8770c45571705650a53c7b3354ed', 'en', '62bc912e792dfdc0ad4adef14e549d1b', 'Extra Performance'),
(61, '59ea4dbe812054ce7f13220a1fef704d', 'en', 'ee20bb60493f049175fc10c35acd2272', 'Watermark'),
(62, '720d959a704340e18f33f70e73932978', 'en', 'bb78ef11ae67d8357867c8040799f3a5', 'Easily add watermark to your images with intuitive interface'),
(63, 'fbc0b723ca704f5e1248d7019eea9c86', 'en', '86f03349e5a9b0b36155770fefcb687a', 'File manager'),
(64, '0d4edb33b2d3554afd6fbe195e0a9470', 'en', 'e6ff256eaa380d9404dfa56bdf6a1f5f', 'Fully integrated with the best image uploading and editing currently available'),
(65, '054b2ea0c64a49c17653370e3ae6e48a', 'en', 'f230ce7c467ab27a08261c4556e595ef', 'Group manager'),
(66, '04ed1f312c89d4ba5306a1aa5cd4d014', 'en', 'c4d10af08527a66f7861fde758bb1b17', 'Managing all of your accounts in groups saves you time'),
(67, 'cc84007809551d618caf11455e4746b0', 'en', 'd913a8dce67e7616c9f6633f7d0457d8', 'Our Happy Clients'),
(68, '7429b8e4f24911f3dc92ed0de7c1c057', 'en', '89efcd55852717d2a934c3904bd285fb', 'Our clients praise us for our great results, personable service and expert knowledge. Here are what just a few of them had to say'),
(69, '4c3b74c5253717d8bcb8fa246dd49762', 'en', '4e8ec0734a0d07224b03866b2074f82f', 'This tool has made sharing our story and building our brand on social media so much easier.'),
(70, 'fb4fb6b7f6d40726d66d767bfc16aec5', 'en', '743476ba51eec82e973686907e6ee64b', 'Adam John'),
(71, '4f3878e2b3343d301841084989d23106', 'en', 'f86a7e10ae273ad8b534470d3bb72cc5', 'CEO & Founder, Designing World'),
(72, 'f2cbb603ea0b3b70a4226af4215641f3', 'en', '7315fd49045dfaf15eb84296d2b8b58a', 'Jannatun Lima'),
(73, 'eb253512e4d45d7f6e96f907c04dd84d', 'en', '19514924b7aa9e4cde37ca44712f5d03', 'CEO & Founder, Cigna'),
(74, 'c2e1b9b6f28c8ae5dacd3b75c23a96be', 'en', '36c04515577b0e9fd08dde32c0b4ca97', 'Easy scheduling, simple time saving and lots of features rich'),
(75, '51d3b5eda5bb5bafeba721e4a8d29505', 'en', '72175b7d12b99c58e6e963c1048bab05', 'Very well organized tool with stunning high quality design. Thank you so much!'),
(76, '1d1e8ce5e2328fcfe33a690f1fdcc242', 'en', 'a8cf01177d48d1730b04e0b770d6712a', 'Ben Terry'),
(77, '9d116a3c43993e9e6eb32fb578821555', 'en', 'b9f331929adaa36ab1da1ef96db366fb', 'CEO & Founder, General Motors'),
(78, '8fa1944350b7973a52558ea694356322', 'en', '5405d8a903c83e89cb649f1b518ef1be', 'Frequently Asked Questions'),
(79, '7f07c361f11d846f065dd72578d08cea', 'en', '6f5a2ce69315336d106a647b43b120c8', 'We\'ve crafted this FAQ page to answer many of your frequently asked questions'),
(80, 'b918ad9b167b56d29e866140dcb61b25', 'en', 'df96d9825d4435f2089b4f249394a8be', 'Start your free trial. Are you ready to try service reign? ! No contract. No credit card'),
(81, 'afb8032b94870785d630466558fb93c5', 'en', '9030e39f00132d583da4122532e509e9', 'Monthly'),
(82, 'ddcc39297b9bd9ba17518ae9859887c5', 'en', '10b34207c4ef4df0cf0d0cf792e61bf9', 'Annually'),
(83, '589b1ab65da23668b600d065163bde43', 'en', 'c6060189b9e555b3cc63ef78429af017', 'For 5 years we have been developing for providing better services'),
(84, 'c68d263b703d8361c38363a17a8c1b62', 'en', 'ee0d8fda371736eacf8ceefb5f54ec9f', 'Choose your plan'),
(85, 'b7ecfe6440ba1cca15f297dcaa1960bf', 'en', 'e8ebf38eb3ee0242e082b5666fdbc91e', 'Add up to %s social accounts'),
(86, 'e9afd6796e9fbf8f24939ecf100b9095', 'en', '8b58b44ef9a84424f4acdc4214462ffb', '%s social account on each platform'),
(87, 'cc4f6a21a22e9fbceb3dbdfc357a5ee9', 'en', '02563ee3c4f3f87cb86a9ba5dcb6741d', '%s scheduling & report'),
(88, '89d94a2e2e9a41f5c8b7a3e71cdd9170', 'en', '437e87fd55f7d33033053fb2f319859f', 'Modules & Addons'),
(89, '0724ba0c1c26e4acc47b49ec8f10c394', 'en', '393739273b51cd92671af1d50181edb5', 'Advance features'),
(90, 'fcb30bd6cecc01e079a43e50ad8757a5', 'en', 'b80d680c03b02cb8ac3665d9e9ba5b42', 'Spintax support'),
(91, 'a2acc1e7f6eb26ba029b022c291cebc4', 'en', '32a016d18355655113f410218adfce16', 'Watermark support'),
(92, '0f30b559e549e4e0ea7c79196dfef5b0', 'en', '1ab67f5e7ec1634687355a5eb6bda98c', 'Image Editor support'),
(93, '2044d6fe752d31ad54d41baf7ee05ae3', 'en', 'd73bf6d95906e0d6281c287d05b86241', 'Cloud import: %s'),
(94, 'aeb61afcf0222aea029f2c631df8b97a', 'en', '69fd78fb9d96b75a675da80b618f29cb', 'File type: %s'),
(95, '44da6356285cdd621cd0ce58a888baf0', 'en', '185f238a37c4b62f1480a1ae41644962', 'Storage: %sMB'),
(96, 'a9b5ec73c67f15082249d91c01843e20', 'en', '3795eec1e5ceb372d5a306a1079187d2', 'Max. file size: %sMB'),
(97, 'e386f8fab540951da0051cf9a06bc761', 'en', 'b4080bdf74febf04d578ff105cce9d3f', 'Unsupported'),
(98, '09972d57bf0354f583a7b43fb6471ac6', 'en', '986829dea472db3ee57b8ecd2eea67c6', 'Below are our privacy policy'),
(99, '13d1b39bef0841bc8dd4f992ca14b906', 'en', '4b9b17565e8b4d31ffaa207ded99ac38', 'Recovery password'),
(100, '344d3cb46af314f587756016a69ecd3e', 'en', 'efb40a8b0a33d5a3689dc4a56e0e3589', 'Please enter new password to reset your password'),
(101, 'd1f855c6f442c4f5eb9c0857a6734e94', 'en', 'dc647eb65e6711e155375218212b3964', 'Password'),
(102, '4621cc2d14a57bd2ef9d8452cc0676f8', 'en', '4c231e0da3eaaa6a9752174f7f9cfb31', 'Confirm password'),
(103, 'e24c2ca9aebe3d67beed56cbfac1df8e', 'en', 'a4d3b161ce1309df1c4e25df28694b7b', 'Submit'),
(104, 'b70bd637d56b5fb8d152f2a72de12cc4', 'en', '96835c73cd1cd8a18eedc373b4ae3baf', 'Welcome back.'),
(105, '2c802f8d5693447caf2db329098aa4b5', 'en', 'a5f61298da21626d0f490ebd06ecd811', 'Don\'t have an account?'),
(106, '3e37c8c7c93a9cfc02e0e9dcb7f6afd8', 'en', 'd9776f0775997b2e698c6975420b5c5d', 'Sign up'),
(107, '0d98a70942cc8174cec1ab021b4ed184', 'en', '6ad7d86812ec1247b322a3f1e3a6e4f2', 'Keep me logged in'),
(108, '6a95fee810dacfa84555b31ffdef43b0', 'en', '38c8c1f4156fa91158ebbcee727da0b0', 'Forgot Password?'),
(109, '5bd4ed967a88c32da7b514372ceea39c', 'en', '9e09f7378eb0ed677fbeeb60d63f74f6', 'Or Log in with'),
(110, 'f0ca274077ba3493bfd4c0f0c32d7906', 'en', '13362a0e01c0fa3313bb9be2a71f6523', 'Log in with Google'),
(111, '0577dafd7facf3561794240184e5b7d8', 'en', '69df9f1a255f417e2d4b81b01f21441f', 'Log in with Facebook'),
(112, 'cf28d0a938b2611f2e41095cb4a68638', 'en', 'd4c016a0793b8d12eb3d94697632c1de', 'Log in with Twitter'),
(113, '591ce4ca29bc6d6092c562067dfd7bbc', 'en', '38b98a4de612303d0af15d91b5995c8d', 'Below are our terms of services'),
(114, '94f2924f8dc23dc933666ab7467ee056', 'en', 'c43633d0b74dc644aff1ab3475cb41a9', 'Accept Terms & Conditions'),
(115, '12d4cada2a97914a107710885fb87b07', 'en', '8c96c010dd69fdbdfb5f472bf9804f39', 'Create your free account.'),
(116, 'be4f49c2bb0d81b1a1862e7d1a088da8', 'en', '630058029627ce58e7571e7a5b6ec591', 'Full Name'),
(117, '8609e7fa42170fed2c5da7d919a83444', 'en', '643a860f992333b8600ea264aca7c4fc', 'Email Address'),
(118, '546c6c81d07194fca6600397e0603a18', 'en', '49f6a587dde090cbbe5897994eecb665', 'Already hava an account?'),
(119, '8939ba6b15df7897bfa7a4cedd360b11', 'en', '57fb105f28857a1e2d72b0f2922635a6', 'User manager'),
(120, 'f4c0e40fd8ba29fdc71b503bc4f70960', 'en', '9993039cea3e460750a2248fd8471415', 'Fullname'),
(121, 'f08072da3481302eb59d89fe69fe2811', 'en', 'ce8ae9da5b7cd6c3df2929543a9af92d', 'Email'),
(122, '1cebf804dd826c77df4fba0212417bd1', 'en', '51ec703ad6d0c70405759287c2f6f409', 'This email already exists'),
(123, 'a72d4559cd97bde007df32029dd4f840', 'en', 'c031b1ac59b11061818f51af8b291e50', 'Your password and confirmation password do not match'),
(124, 'f1ea8a9a5a00c51e6f41793f6e20529d', 'en', '8c1279db4db86553e4b9682f78cf500e', 'Expiration date'),
(125, '73659bd7f074cd54c291b95425f8a0a1', 'en', '236df51bb0e6416236e255b528346fca', 'Timezone'),
(126, '7c90f12208bf984d37053097f84ec10c', 'en', '651ed4710990f7dac47711fd8c4cc26a', 'Please select an item to delete'),
(127, 'ed65aacd73cbbf270eca68594523a09c', 'en', 'a6f2b2df29609876b609c318bdbdf9a1', 'Banned'),
(128, '16e8d36819f4c2fe45e7e2574f2dcb1e', 'en', '3cab03c00dbd11bc3569afa0748013f0', 'Inactive'),
(129, '0ca5c5eebce497647a8443d079c288b1', 'en', '4d3d769b812b6faa6b76e1a8abaece2d', 'Active'),
(130, '454ba4fc75cd48bcd3b79cb7c6976b5c', 'en', 'd85544fce402c7a2a96a48078edaf203', 'Facebook'),
(131, '84bd8416fab61b96792eb5ac4acd9999', 'en', '2491bc9c7d8731e1ae33124093bc7026', 'Twitter'),
(132, '8a9182f3548c39d5a9b443fdfab988ba', 'en', '8b36e9207c24c76e6719268e49201d94', 'Google'),
(133, '01abc581be74922b017948ba3101bb0a', 'en', 'fd1dd0c603be8170f9eae0be9f2f6afb', 'Direct'),
(134, '77f197c23f878a144da37581535ae6fe', 'en', '13348442cc6a27032d2b4aa28b75a5d3', 'Search'),
(135, '3ed0644e9511d030228524bb5d009bbc', 'en', 'f923f903857a5387d3db70494e074632', 'List users'),
(136, 'a5e96e131395bfd6f1a2ae9e752cb416', 'en', '5d720aee27e4d9612eafaf0c6a9061c9', 'User report'),
(137, '89be9123a8c04c440254c92fa45666ba', 'en', '0095a9fa74d1713e43e370a7d7846224', 'Export'),
(138, '4ed1b768df4123541356a76eb0ff17cd', 'en', 'ef61fb324d729c341ea8ab9901e23566', 'Add new'),
(139, 'ab7be4162f5b3684e309a25d4bd4a301', 'en', '2de32377e0c6ee60d03338c14986d124', 'Basic info'),
(140, 'a5b4d94ec9ad64c7374e36bc18da62e9', 'en', '209802fb858e2c83205027dbbb5d9e6c', 'Package'),
(141, '3b2cbf425cc61f76c330a8f79426c676', 'en', 'a1413ed049a4bed0e649c409b4462b49', 'Login type'),
(142, '24aa5753b1b029b5d286fb112cd4d14d', 'en', 'ec53a8c4f07baed5d8825072c89799be', 'Status'),
(143, '5e6695478c4c2f12c261ecc7afeb00fe', 'en', '820dbd2b8f606aff866c0bbfb6b737c1', 'Changed'),
(144, '75213814912e825896923c6a0f46c70a', 'en', '0eceeb45861f9585dd7a97a3e36f85c6', 'Created'),
(145, '0c9538c4fbdf1bcfb982127bb41a5f17', 'en', 'f8fd5e179bf967f2c13519802552a44a', 'View as user'),
(146, '39bb05fbdc7c7349d677985af8101e90', 'en', 'f2a6c498fb90ee345d997f888fce3b18', 'Delete'),
(147, '750b992408fc0b09abe72319c6f32b2d', 'en', '7dce122004969d56ae2e0245cb754d35', 'Edit'),
(148, '67dd660b26315c8b11dbf83b4590e824', 'en', '06933067aafd48425d67bcb01bba5cb6', 'Update'),
(149, '3c965ece2ea5720f4a8cec66c2361595', 'en', '0557fa923dcee4d0f86b1409f5c2167f', 'Back'),
(150, '77e6304b3b15a93c4901cd83ac008509', 'en', '858ba4765e53c712ef672a9570474b1d', 'Member'),
(151, '9d101285fe05b49d3b42bc9754d4f5f2', 'en', 'e3afed0047b08059d0fada10f400c1e5', 'Admin'),
(152, '21476ea2989571d19dc8e0a882688655', 'en', '32036005d1f6ed59803ba3e13c80993e', 'Avatar'),
(153, 'a6e65aa456af7db57cfb7ea52834cb2d', 'en', '16d2b386b2034b9488996466aaae0b57', 'History'),
(154, 'f56aec9dfa5a1cbecc7395e6b03e0ea0', 'en', '4649093d4d10aa95a212636f146c47fd', 'This account does not exist'),
(155, '3fff1dc3c7cc1dabc8f80be973f5d909', 'en', 'f7db455c1f8c044c06d6df622a291c21', 'This account does not belong to any team'),
(156, 'db0a3622ee77712a3cc2ee8242d82746', 'en', '9bbedb84da52a148b912871670fecc92', 'Please select a package'),
(157, '6438bff351ad38e41acd254b2691ec03', 'en', '0caffe1d763c8cca6a61814abe33b776', 'Email is required'),
(158, '130045501a505236ed4388bc2e4d1fa3', 'en', '47be05698f8dd87bb445ceefce6abd0d', 'Password is required'),
(159, '9a7747efbb132164f2adf542feb9afd7', 'en', 'f14e18ef93f7a70cb841b2330366f7ff', 'The account you entered does not match any account'),
(160, '7e03c501964d8805dc89e562751174bd', 'en', '92e72935893c7830cdec6ce385be7fff', 'The is a problem on your account. Please try again later'),
(161, '31a419f454823c4964696e9a42596426', 'en', '63e68809cb958967be7eb29412787e68', 'Your account is not activated'),
(162, '102f40dc5592a8f86345cb31bdb0a429', 'en', '6e62bbfb3b7d4dd9bf020f9c6780bc08', 'Your account is banned'),
(163, 'a46ff44999cea044e03e65216f2c03c3', 'en', '9c3cd291e0b8e35328a63d857beb6355', 'The password does not match the confirm password'),
(164, '49339cf2a7fd8aba40d93a676fa8f449', 'en', 'bee6d6b09634c22aa9df4c4f09c70efd', 'You must agree to our terms of services'),
(165, '9c32924960f27327a0d14d63eba3cb79', 'en', '92ff6ef7b7733567c89df3c3d3a5376a', 'Timezone is required'),
(166, '60d322644ae6a92d669bf57829e0b5b0', 'en', 'a838e5e0705aed3d7b42795febafaa48', 'Thank you please check your email to activate your subscription'),
(167, 'e2f4af25225ffb45eb5e643c95d01376', 'en', '9b9fd7f15f0c58da73d8b18c897b971b', 'This email not already exists'),
(168, 'c2505eb546104aa3f57446efa0ac1cea', 'en', '8c883f09aa990e5dcfa8b9d6bc8bdb11', 'We have sent you an email please follow the link in the email to complete your password reset process'),
(169, '3977aed934b404292caa1f8775ea3a37', 'en', '2ff126000ced5065e34359cd8c11009a', 'Have a problem on your request. Please try again later'),
(170, '47a8d7c3a64471c64e8661708593e607', 'en', 'fde60b717aca6cbf9b1e1cdffe82cdf4', 'Please complete captcha'),
(171, 'df1c534f0cae9bc2712266f0b741291b', 'en', '051156014e3e00388f9f5eeb3943b90c', 'Wrong captcha try again please'),
(172, '7e06532eac2dff678ca3229e9edbca3b', 'en', '6c10cf9f5b2cb966b7a4e641a9825373', 'Current pasword is not correct'),
(173, '39585965af2a9dd35cb5d052bc14b4dd', 'en', '0edd8b69106cd16594aad42e3f61ecf7', 'Are you sure to delete this items?'),
(174, 'b8ba52185b81af85460fce8ffc8b1411', 'en', '305ff8d96466521d9c84d21041d62971', 'Active user'),
(175, 'eaa01da9db3d48f1f5f45f67eb013d83', 'en', 'adaaee4b22041c27198d410c68d952c9', 'Percent'),
(176, '1db68d9b1cdf31a7aceee60f2669868a', 'en', '2a5e64419d8ac3898a8e54b0c0468b76', 'Number of active users'),
(177, 'a24205145f3043496c606a1c2c162a7a', 'en', '2cc7ee7e390eac945e7baaae2d10a9a2', 'Inactive user'),
(178, '2be23791ee4a7c35ef4c5e272e180123', 'en', '8eaacf51d41b1ab94da735410eddea49', 'Number of  inactive users'),
(179, 'ac1517017a474eda9240636220fb5cbf', 'en', '493dbec7c424e581a983acf3420ea7cd', 'Banned user'),
(180, '09b5aa60fb03e986b11d6a3eb0b0efd5', 'en', 'ef9d9a66fa63b2dbd89801ef97a4b22c', 'Number of banned users'),
(181, 'de72ab9e50804b75dcc3ee7331dc5e7c', 'en', '5cbb4a6c74b160bdd49ede71ba78718e', 'Register history'),
(182, 'f6c24da871930df8e4e00e42e7dd8ed4', 'en', '1dd1c5fb7f25cd41b291d43a89e3aefd', 'Today'),
(183, '648522f23886188dcb7b99e7424c0f11', 'en', '70a6facb9d63f6ba070900c4c13df22e', 'This week'),
(184, '11dc7f371c85c95a311790096a5536cd', 'en', '96165d6df5c2fc0a2d2049848c130c1c', 'This month'),
(185, '2c2452f898bf3550a5f1758c4277aa35', 'en', '02a3ccb8294183b300fef7a62fc44a63', '%s users'),
(186, '65fbf3fa4f446e5c4e82c5f821d04896', 'en', 'c35890fced542f7e539ca68fa7f17d2f', 'This year'),
(187, '249ecf29bd09e5ecfdde3c5a334aa4d0', 'en', '98713d5d0ab193465443f2a712a34b3a', 'Recently registered users'),
(188, '5080e6c1dfbbb4d88a0adeca39d0b4c9', 'en', '2557491405dd96ce43f55a3133cfd1fe', 'Last 30 days'),
(189, '1ccf6e8df0af5c17114cddf27a3d4608', 'en', 'bbbabdbe1b262f75d99d62880b953be1', 'Role'),
(190, 'a7543ae8963b8797c27cb29756cf248c', 'en', '47afd921e4525cb5fa1141a3b0f2f8b0', 'Select package'),
(191, 'e1fe90106327dca65d3f6eaca2f777a4', 'en', '2faec1f9f8cc7f8f40d521c4dd574f49', 'Enable'),
(192, 'e634c57cd21c350ddc62e3bdf9e2b4db', 'en', 'bcfaccebf745acfd5e75351095a5394a', 'Disable'),
(193, 'fcc44ecc22bc0eb5fa6fab5919635abb', 'en', '82c873d74c55b79a0a2f909ac2a216fe', 'Require email verification'),
(194, '3d27ee5bd94b86f8fcea62dace2bdf88', 'en', 'be546fa8668ed1db33bfd3dfc9d543c3', 'User can change email'),
(195, 'c39813d9fb92600987154ee5d322e187', 'en', 'fa5d0bdb39339051fe8f8906b4e293e3', 'Google reCaptcha'),
(196, 'dcdab1a639f411ef4f3fe0a18da9937a', 'en', 'f76aa877babf08bf899a249f0123aa1b', 'Google site key'),
(197, '9b598e526b6ca1c43eb118972a4706c5', 'en', '83e57b4b1895501252f9189c3c234790', 'Site secret key'),
(198, '11de2b22709702c4937a91bd3172c9bb', 'en', '37c485c8d229d4b72128bc0e06b6064f', 'Facebook login'),
(199, '1cad715c6898af6647270dc952cc88a9', 'en', 'ca81c5da8d3796beca28ff399b41ed46', 'Facebook app id'),
(200, 'b8e7b10c28de9eb12e93d1a762c702a1', 'en', '2a8b40ee3d3d42640abd1981fc32182b', 'Facebook app secret'),
(201, '458503800137584c83208b1d821be680', 'en', 'a678cb25405e4db8f96fcbb8a46cbef6', 'Facebook app version'),
(202, '5118a3fc265b50306ea4c73a854996ce', 'en', 'a22a1a7df8bae4e34a39b839da4e97d4', 'Google login'),
(203, '9f2dac8c7ca9a998240e6fc19d5a7fbe', 'en', '6d558567d9a5010faa337a3f08119282', 'Google client id'),
(204, 'ad9dd9ab66bddd419d546c296a516231', 'en', '9646e959eca5aaf316fc578d3bcbffc0', 'Google client secret'),
(205, '8aea65ee378868265ba022b524c4fe24', 'en', '42e23e6fc4bb37416ea65dac1506d627', 'Twitter login'),
(206, 'f231227e3d1ae5b336376a4d25ec41b3', 'en', 'e5ee1149da83cf11c12a8b6a9080d083', 'Twitter consumer key'),
(207, 'f0b813ff0b124507e656fec77b913bbe', 'en', 'e5a4be39c3935ec602c2b7d390a4bffb', 'Twitter consumer secret'),
(208, '9cbfe64db3fcbbceb0a4101d0221026e', 'en', '7f30b9fc0df4f36acdc183c5ba4b5b1c', 'Oauth & Login'),
(209, '5819797db1e1a1e677ce6b8551eababd', 'en', '947219ffd2492f689ad9d600405d368e', 'Support Center'),
(210, '2e6f422ddcfec312ea25e0015c7d6d0e', 'en', '009d65200f49f77cb6b15bdeadf60cdf', 'New Ticket'),
(211, '4419efbe83c709e8cffd3b39dc21bad5', 'en', '03368e3c1eb4d2a9048775874301b19f', 'Select category'),
(212, 'aab5099ebc67d7ad4696e248e501f9cb', 'en', '27e16c0b006436420f5d35e9d47941cd', 'Select category your want open ticket support'),
(213, 'c3f870710f787c58f8456321190d9d0c', 'en', '4c2a8fe7eaf24721cc7a9f0175115bd4', 'Message'),
(214, '277e803851823678e2547709b6ab147c', 'en', '9013b630235e2a5c48b7357e23e1bd2f', 'IMPORTANT:'),
(215, 'b1631f2b665e882ab8ad9f8eede2f95b', 'en', '442d8b8802b7f33080ca66a30c994eee', 'To help speed up the resolution of your issue, please respond with as many details as possible regarding your issue, including any error messages you may have received. (Video, Image relate to your problem) and then give us some things. \r\nWe will check these issue for you as soon as possible'),
(216, '6f06d078b11a1e72438f20cf7b5797e5', 'en', '02282e0caf0bab9e3fdcb5649b6ed3cb', 'Time support:'),
(217, '927cdff6bf00eca7d0e36886f210cff4', 'en', '26242f2254608c94c723c32e6c9b349a', 'The response time can be up to 2 business days.'),
(218, 'e316ba38c3d19c733f6ecfeec3ee2600', 'en', '9df3d59231aad6886bbbcc95533693c5', 'Do not send support too many times or many places.'),
(219, 'fd333326ad8ad33db422b3d399a0966b', 'en', '7377a17da2ca3b9a728aad047322a743', 'Date created:'),
(220, '9a480df9d4aba4193c498eb85f9788df', 'en', 'b937137e112c379c97a75a1c9d7d877c', 'Mark solved'),
(221, 'a33dc86ab6937bb81941f1cd324ebf91', 'en', 'ea907b9c1af0f060fa2c21beed25880e', 'Re-open'),
(222, '492488d9a9de1d1bd9cd5f8231f9eeb3', 'en', '4cc39c2b00b0e864ad435c91725b6f81', 'All Tickets'),
(223, '3e2a27f5ade43c1c07bde0e780726ce1', 'en', '1d3f7351be8d8940be8f0ba2ad2d37e4', 'Open Tickets'),
(224, '0dcc571c83d35c05f26490f6c6c40436', 'en', 'c0f2a8445d719de40e319f0366ac2775', 'Close Tickets'),
(225, 'af1413c2bb843b9cdd6caf4d10de50c6', 'en', '6d8187d95a854f208fca6075f65efda0', 'Ticket has been opened.'),
(226, '1e7c79a32a017fa123249292a1b8d9c1', 'en', 'eae714afa30b769fa3bc9f6d99529fac', 'Ticket has been closed.'),
(227, '79fd33d4398eaf267d72c3fea4129aab', 'en', '42feaf0e76913cb745e9ca71faf97caf', 'Please complete all fields.'),
(228, 'c2c6a8593ee4b5cda921e87a99ead5cb', 'en', '9abbf3c093708c3e345cf73c7abcd5b9', 'Ticket created successfully.'),
(229, 'b48e0db65129d2d955af1582347e64ae', 'en', 'f94b77c34f5e86490409a08ec319f7ac', 'Ticket reply successfully.'),
(230, '5801439459c6e9a37c6e66e3bf634e29', 'en', '5c00391980d348621fe9841f5890c11f', 'Ticket successfully removed.'),
(231, '154838961d0021de70c5be380a38b835', 'en', '576e27eb26cd4cbcab36fdba17e41aaa', 'Frequent Questions'),
(232, '84d3e8f6bb0af07fe60e53a84e04b0ee', 'en', '50b36880aaabe3082b41933cfb4faba7', 'Information column'),
(233, 'a0c70120ab29cb7e505c9a047b149e93', 'en', 'f21638c0048f53d7bbe9b0f0665b09dd', 'Ticket Icons'),
(234, '472235f456bdbf66fd3f1f1858d82e2d', 'en', 'f9ff06e78769286785783108d32ae7c4', 'Background Color List Icon'),
(235, '654ce6ee5ff7d2bd471a15b6a2dc7c58', 'en', '6f9de50da5bdd8facdb0fd97edef3044', 'Text Color List Icon'),
(236, '9c01ebf0e5ccac6d69843add10d3aaa4', 'en', '942397ede2813b6e32d0a497fd4caa9f', 'Publication in Social Networks'),
(237, '1ee4c9a129417252f3ead66decbbd9ae', 'en', '23e463941a4341b70f8c2743fa7cad5d', 'Setting'),
(238, '70d7fa2e46d430d2bd441097942559e1', 'en', '0782b9ad718c5e001d7810c5c7991c91', 'Profile Management'),
(239, 'cfa0625bf810f403f36170262425bdf4', 'en', 'e15708d92b56a468f4c8aa277e604a61', 'Others'),
(240, '08f01cc2dbe08de4088db8e67b397b64', 'en', '34a67de6fafacf82fb2197758d28758c', 'Receive an email when a Ticket is created (Administrators Only)'),
(241, 'ae95a4b6fa3bc03b5f2feeadfd49118d', 'en', '26d1a95530f64f4c1750ca080e6dafcf', 'Receive an email when responding to a Ticket (Admins and Users)'),
(242, 'f537b7d0ae809324a5c05977e0e3f7d1', 'en', 'bdd2b40d7cfeea1162f806effab361c7', 'Enter Email Address for Notifications'),
(243, '845f37e0c1a5fd7448033676c76d9ee9', 'en', '7be196db68f5e5d6e79f4b2de9cd77fc', 'Email - New Ticket'),
(244, '10aa62b668cd1204251e5bb501c6b662', 'en', '04a7b6cd39a484da07911b0018029218', 'Email - Reply Ticket'),
(245, '4a5a771e5c9a2168e33a5ea5604576df', 'en', '0efd039573ce49ab9abdd2b1e33e8aa2', '{support_link} - get link ticket'),
(246, '799b1ebde3eb34f4b4c1d969f4a763f6', 'en', '2500f9f20cc973a9c6530c5d83736808', '{text_ticket} - get ticket message'),
(247, '466726486b00eecbf1ea867ced0960b9', 'en', '223e86ac2622f5eb145e5f16ab889abb', '{id_ticket} - get ticket id'),
(248, 'f4c36cb3e28c47414164c149b1da8e57', 'en', 'c835168989fcff535a5d12f1fe9a9d51', 'Disable Notifications'),
(249, 'd24df483c1e9133f0883a9eb44af84a3', 'en', '717858bae7c204014c61b231b43a9bf6', 'Enable Notifications'),
(250, '359e7eea26b47e0cee797ab8234fee51', 'en', 'df5b9f9adde11181dd3011d3e7826753', 'Deactivated Notifications for this Ticket.'),
(251, 'd184ba43e81d6ad9fb1d2d2e3e5ac7d1', 'en', '30934df50d7696351966e5c6a3b1cfe3', 'Active Notifications for this Ticket.'),
(252, 'ce7606834ffdaaf50d6465dc50f46b42', 'en', 'db0ba2d0ea2b2c4b5e0d43d8d49a0229', 'Title / Question'),
(253, '9f6038b8cb01a7750f31e9bdb93819d4', 'en', '25d8df6e580905091a0d5ef5b9e05bf0', 'Reply'),
(254, 'b183fc1d6eda3651a71ded5c6b7c0178', 'en', '8812c3c4e3bc3733a9309b59f42264cd', 'New FAQ'),
(255, '53b323df2d76edd5bb4989d716f10bc1', 'en', '686e697538050e4664636337cc3b834f', 'Create'),
(256, 'cbbe617f22e479d8d377ea62cfbcdd40', 'en', '6079295b9deeaa54e436b13f1755ca29', 'FAQ created successfully.'),
(257, '9e16522fe57b70da0557d209e1d6a298', 'en', '66a64dbc4f0c66b28c7cd5af973d4739', 'FAQ successfully removed.'),
(258, '97d1079c0bef1653d4533c2dbedf6f9b', 'en', 'bf2e46a30059973d25f67373b2983a79', 'Social pages'),
(259, '5424aaab5009f50b376a07b9b38a7e6c', 'en', '55f015a0c5605702f913536afe70cfb0', 'Instagram'),
(260, 'cf30790c79112929dbdc0f150cca929a', 'en', '86709a608bd914b28221164e6680ebf7', 'Pinterest'),
(261, '6dad3e07bc579e1e51f100c925082cb7', 'en', '970cfba66b8380fb97b742e4571356c6', 'Youtube'),
(262, '854db35dc57653ba1c90d66cd9a39dfa', 'en', '0f2d5a209d1b447c2408eb16c6d8bac5', 'Social network settings'),
(263, 'c25cfad39f0d0478545d1eef7deca73d', 'en', 'f4f70727dc34561dfde1a3c529b6205c', 'Settings'),
(264, 'de1b4b7f6188f57da259ca616a6bad23', 'en', 'de62775a71fc2bf7a13d7530ae24a7ed', 'General settings'),
(265, '87112729e3d42a45cf281ebcf2571d7f', 'en', '0db377921f4ce762c62526131097968f', 'General'),
(266, '9e8dff8541f3a96b37bf0f4fe2e3e608', 'en', '5ffade01fdaefb1ab262934f65ba66c1', 'Website title'),
(267, 'a891370ba31262c24b99b370c86ca3d0', 'en', '8e517fe6f026cc2a6993b1f8b95174c2', 'Website description'),
(268, 'e044c95afca5c124ab8d611660899191', 'en', '9345b40520c58723bc8fadd985130eba', 'Website keyword'),
(269, '6488460787628a73ab8fb37b90c129d8', 'en', '6e267fa5f7cb01057142356033e8805f', 'Website favicon'),
(270, '4a8cefdaed96c20c19adf379401f9b6f', 'en', 'e5cd8f3ce698f735be83243a463fc4b5', 'Website mark'),
(271, 'f9bc0392b4418c755b74716814f56c09', 'en', '835986c76ac73675b7b202ceca9c5817', 'Website logo white'),
(272, 'ad6206440d397acb358dd4de480867d5', 'en', '9446596f724fadcb1af92ed0b5e687b5', 'Website logo black'),
(273, '47860d964a940a86ddc18c2a6dd6704c', 'en', '0615a38067b62382dc1667010669b238', 'Formats'),
(274, '649e597f112918c93302a209f2d1cbca', 'en', '44749712dbec183e983dcd78a7736c41', 'Date'),
(275, 'a62fd78981357b4e931bd435144f292c', 'en', 'a1af5f0718bfae275ce162362d0e43c5', 'Datetime'),
(276, '64dc13bef8bc04cf1353e692d852e166', 'en', '121be05a55b52b405c302293d6d782cc', 'Unscuccessfull'),
(277, 'f0dd55b086b65efeabd847a659d70129', 'en', 'cce99c598cfdb9773ab041d54c3d973a', 'Profile'),
(278, '86a01bff163a4c407e2237af873eb44f', 'en', '08bd40c7543007ad06e4fce31618f6ec', 'Account'),
(279, 'a59dc9e8b4629e27b2c5b5d8b351ac5e', 'en', '0b39c5aca15b84b1ad53a94d6b3feb78', 'Change password'),
(280, '3af30ca2457cb22b35cac59ff456ce5b', 'en', 'd9c2d86a66aa5a45326c3757f3a272cc', 'Current password'),
(281, 'a56893941bef6015408c7adeedbd621d', 'en', '3544848f820b9d94a3f3871a382cf138', 'New password'),
(282, '6d92fd25f5fba8336fcbda465ef58683', 'en', '6ab96a5df54aa6aae2bab9ea75ab76c9', 'Confirm new password'),
(283, '6343a6c87ff486e38dee8eb436a6bdc0', 'en', 'c9cc8cce247e49bae79f15173ce97354', 'Save'),
(284, 'b2f8571370d79abecf9ee24166fe1009', 'en', '39c8fef7f693688a2bf4dde48b5c910a', 'Your package'),
(285, '99ee908544073450d7d627256316a192', 'en', '5a787141d53b573ec9b86e900bfe0d79', 'Expire Date'),
(286, 'ee172fb446ed7b33cbb547b609990050', 'en', '67cebfb85c019055659c9e591a0737f0', 'Cancel automatic payments'),
(287, '5a7ba01b2eb6e68cdb731cab70d94285', 'en', 'f406b074f5a18844198f8c5807a64015', 'Renew account'),
(288, '145ae6378d71c5327e263576610d301e', 'en', '729a51874fe901b092899e9e8b31c97a', 'Are you sure?'),
(289, '540f2563528799a1c3637a1a45d74475', 'en', '0323de4f66a1700e2173e9bcdce02715', 'Logout'),
(290, '46b1a00aa4144acee32d6d023ea77b5a', 'en', 'ff4cff2ee8654c497934bfd04ef2c007', 'Back to admin'),
(291, '5bc547bf628c605252270a83f191a0b8', 'en', '7df9726e7bad876c2819aff21946b6eb', 'Package manager'),
(292, '5a1281c0395c181bf6df6f659f585ecd', 'en', '49ee3087348e8d44e1feda1917443987', 'Name'),
(293, 'd10473c890e5a0ca6e9cf74f57225070', 'en', 'b5a7adde1af5c87d7fd797b6245c2a39', 'Description'),
(294, 'b7c60a6468fa5423699c8959e3cff969', 'en', '2ebd69a77e20dfa7b449a27cb4238b19', 'Trial day'),
(295, 'a93f73761ed475a5a9c0cac781caf69b', 'en', '7b1d92d0b605bb1ea643accd09804009', 'Number accounts'),
(296, 'ede636ffc54facfc42a813c0e14efa70', 'en', '474d0324f4a5866c86779e939f9c9303', 'Price monthly'),
(297, '12280ea0be505cd65ef796c70a85d3ae', 'en', 'be973957f3b826e4cb99dd686dda5ccc', 'Price annually'),
(298, 'ab303df18f22c7f4b7677521dbedbd87', 'en', '47259eaaf0a0f806fa09ba5b06c23a1b', 'Package info'),
(299, '03bc0591829be2bf39070ef9348bac6e', 'en', 'd08ccf52b4cdd08e41cfb99ec42e0b29', 'Permissions'),
(300, '8f3661bb69f78fc852e728d2fa45d097', 'en', '2cc1943d4c0b46bfcf503a75c44f988b', 'Popular'),
(301, '3205231e95c88e4cb04cf21304c9a54f', 'en', '93cba07454f06a4a960172bbd6e2a435', 'Yes'),
(302, '4c247442689a3c6ad01195aefd8413f3', 'en', 'bafd7322c6e97d25b6299b5d6fe8920b', 'No'),
(303, 'f60c13346d52523749e1fa370fccc66f', 'en', '52f5e0bc3859bc5f5e25130b6c7e8881', 'Position'),
(304, 'a391de5713551cd37c3c2a708f5593c4', 'en', 'e566fe9aef1502d69ccdbe28e1957535', 'Enable/Disable'),
(305, '0d85dc3f1c0331f36a4975ef7e4bcfb1', 'en', '7f1f5704865feae4a903aa65afe2bb3c', 'Save and update subscribers'),
(306, '007273cdba61f00141e8d97d53b7e550', 'en', '5c1b6a4f7b977e2df04204f054771e95', 'Upgrade now'),
(307, '31a8cd2747e9bc3d3ec1fc21347e50b5', 'en', '24b227c9e2d8955a7b7f851baa203ddf', 'Subscription expire: %s'),
(308, '9a1618c251af3389e065772d98ee0c01', 'en', '06adff46e18f53c214b5efac8b99782a', 'Your subscription has expired. Renew your subscription so as not to interrupt your plan.'),
(309, '00afdd074f7a6527d47c657ba08e41fe', 'en', '52ef9633d88a7480b3a938ff9eaa2a25', 'Others'),
(310, 'c21f1b7237f5b15d1f239bc19fa3800c', 'en', '81d23a3edce834c840eb8f50cba73e2a', 'Enable HTTPS'),
(311, '1c5a2afdf1aeccd124eccafafbc58be8', 'en', '46213fc975898aafc6a6ddbbaea5de73', 'Please make sure your server supported SSL before turn on it'),
(312, 'fc7bbae9cc28983fac10dd9765448404', 'en', '9d282b2b887e9528cc04a9d72354e12e', 'Embed code'),
(313, 'b3947fa9849ae13efe643d00cda04211', 'en', '4994a8ffeba4ac3140beb89e8d41f174', 'Language'),
(314, '6fd8debd276f01204b2c2e2af3f38eb4', 'en', 'ca0dbad92a874b2f69b549293387925e', 'Code'),
(315, 'fc7dfb55d7c639bf276303e773da4d78', 'en', '0ba84225da76dbbff131e04071e88f73', 'This code already exists'),
(316, '97bc88275f6d5c78b159c6dde18f5b4b', 'en', '817434295a673aed431435658b65d9a7', 'Icon'),
(317, 'cd0f35cea7a4c9cc6af0aba1a15d1808', 'en', '3beab53b7f365bb81c4ec78cddc156dd', 'This language not exists'),
(318, 'ef880aab0a2de4c6d3212368f0f878de', 'en', 'deccbe4e9083c3b5f7cd2632722765bb', 'Translate'),
(319, 'f16d6d668a3f86b3d787502e9baa9278', 'en', '7a1920d61156abc05a60135aefe8bc67', 'Default'),
(320, '008f99825e9764eed2d2400ebf2ef0e8', 'en', '72d6d7a1885885bb55a565fd1070581a', 'Import'),
(321, 'bb3a3f9394a5724afd6336a75441255c', 'en', 'e325fb2bd63497b77c1c46ee6a4001a0', 'Import successfully'),
(322, '278e6eb4ffab6ada7a268206c9d99893', 'en', 'bf20dad9ee408d0d2876fb2e8c00f53f', 'Language package is invalid'),
(323, '98fdfddb6b25dd147fc27cc2c9e151af', 'en', 'f40f0a146b015acb0b4c5f5e933d8055', 'Translate to'),
(324, 'ed4eab3485e8f31b8d481c1351117e0c', 'en', '34bc53ba2816c9934f3ce024bb0f291e', 'Select language you want translate'),
(325, '5aeb6ffd1fd3a1e59e25e9a7c76115d8', 'en', '8a756d785da0c58a0fef97fe9c1b654a', 'Automatically translate languages using Google Translate. Do not select if you do want to translate manually'),
(326, 'ead16228e8156a612ada59a5a960029d', 'en', '2bd455d4f926e5c4478e256a8e99c836', 'Couldn\'t find the media!'),
(327, '8210367576424e786b5ee066f2040bc3', 'en', '004a990932b3437b9743cdcde2bc0fab', 'Couldn\'t get file type!'),
(328, '4ee53e19d363cfb5ff3e5b90f4f35928', 'en', '9190ffabfd6590dab2f23dc60ab1ee8f', 'The filetype you are attempting to upload is not allowed'),
(329, 'e5fdcaba626dc9a31cdf6f2954863c1f', 'en', '6217521cbe5a30675bbaeaa4be61f031', 'You do not have permission to upload images'),
(330, '186b2e4ca3b826996de5e759dc0c3840', 'en', '710a4fe7fdc3246f4dbe4e91f032add0', 'You do not have permission to upload videos'),
(331, '9a0be90cde3bee93a3aed0604ea1e550', 'en', '796ccf5f676f06fe6c2a1af3a2569e1e', 'Just can use images'),
(332, '83929f4d80b3d4260801276c2ca29c79', 'en', '0f07e630ffa23ff2a1faa80a732d60d1', 'Just can use videos'),
(333, '72d695ae4f469690a5107cbfd8f4ed0c', 'en', '933a7ef6d483a9eb7280d934a895de5b', 'Couldn\'t download the file'),
(334, 'fbe85eae0fa1b0f424f6195e73ec3278', 'en', '50ae2c31306be69a7988602390684fa6', 'Unable to upload a file larger than %sMB'),
(335, 'd6c652419f74a997ed9090ce44dff47e', 'en', '9e8cf9f4f22b1ddc4a97b8b7faf697ef', 'You have exceeded the storage quota allowed is %sMB'),
(336, 'cbb855c46babd91e51f4e63f54ffa198', 'en', '73b88faaa0d42dc575085c343e1d47d0', 'You do not have permission to use Google Drive'),
(337, '12cc2ba426a829a1ff7e91136ba92308', 'en', 'dca9a14c4cb9344974018030dc04a0fc', 'Upload failed, Please try again later'),
(338, '8e68d11d2d57dddcc2cbfd72c27f702d', 'en', 'ea0404641d289fdb4e6088a3b8ddeb33', 'Media Notes'),
(339, '71938ee151a1bcc350ad606c8850fad2', 'en', '2d1611effbc5ab0c1ff0c773fbe3dfe1', 'Enter keywork'),
(340, 'f5738b5bdb67ad6b44321aab982cab58', 'en', '5ca219b54399500b176823f866ee1383', 'Media Type'),
(341, 'f7bb88f210551747903cb453fa83917a', 'en', '74b3df98d5d1417597328786482b6bad', 'All Media'),
(342, 'c8a8cc363ed375a6ad52830ad4338d11', 'en', 'be53a0541a6d36f6ecb879fa2c584b08', 'Image'),
(343, '28b01fe49f8414a53285af1632c1708c', 'en', '34e2d1989a1dbf75cd631596133ee5ee', 'Video'),
(344, 'c698899936f4a54cfcd2f57cfe5ad75e', 'en', '4f0b453b6577ef60d9e8e57c30005b7b', 'Media info'),
(345, 'b4d6ba371be485fe44c0c6fa367321a7', 'en', 'ef0f51603bf90b1ac8f3691833454a00', '%s MB'),
(346, '3a1b56cfe86ee703e99fc96ed5cc4639', 'en', 'fff0d600f8a0b5e19e88bfb821dd1157', 'Images'),
(347, 'dc9984ef2bd4536049c46a0b006472a8', 'en', '554cfab3938e21d9270bd6b75931f96f', 'Videos'),
(348, '98a1e4ccf75c485ffc9283f9538dcbb4', 'en', '2accc9250e2d377e3c573a5e069b69e5', '%s files'),
(349, '8861e29cd6da81889c270d6a2381f965', 'en', '91412465ea9169dfd901dd5e7c96dd99', 'Upload'),
(350, '40a70aa8c55d856d5d42a8848ffa1edd', 'en', 'e0daf39823ec1a1a7878c9718f063d5f', 'Google Drive'),
(351, 'a30c8e0348fd38ed6590a93cc48ad3cd', 'en', 'f92aa92725095d5531f54b4589d99264', 'Dropbox'),
(352, '657e60f0bda80ea5da15b0896e4aa705', 'en', 'f79cd76b16e526d536ec5f9e3a3dbe9d', 'OneDrive'),
(353, '31cf6196df2ed0f65ad6fc6b7d1bc6ea', 'en', 'b45d4ac69bc12d5503c52d7a65cb49e3', 'Enter media url'),
(354, 'fbf6552d24039e6d14984f6786d2c8f3', 'en', '45e96c0a422ce8a1a6ec1bd5eb9625c6', 'Select All'),
(355, 'b179e0059af4f497e752cf3fc30c824b', 'en', 'ddda55b80f65cae4157306794a168c37', 'Deselect All'),
(356, '90a3eaab4ecdb5eda517c5743c92f220', 'en', 'a254c25adc7d10d7e9c4889484f875a5', 'Detail'),
(357, 'd4130c6392b44ab77028e5b49ca71fde', 'en', 'b7c161bb87bb0308fb25e6f68d0a5632', 'Thumbnail'),
(358, '0fe018f172d7ac5a268dca2af750e955', 'en', 'e2638644c5de6338d3858279fd7fb8f1', 'Your browser does not support the video tag.'),
(359, 'c0390a995048dd99e366cc70dbb452a1', 'en', 'c03d53b70feba4ea842510abecd6c45e', 'Photo'),
(360, 'e4c4d2c0ab7309b8c04a6fdf7447778a', 'en', 'f62ef472ce6cd891d4dfd0dc0ed926f7', 'Image Editor'),
(361, '6ebf1e496c06cee49d2a277e7dfc6f30', 'en', 'ad554e604fabcafe7e35f4826c907425', 'Max. storage size (MB)'),
(362, '70237d5513fd7d33303def76f7850652', 'en', '339f1fd6617fe2a634679fdabb5983f3', 'Max. file size (MB)'),
(363, 'a4a9592e571ec06d1001d75117f5eeb2', 'en', '8dbc5fe2a0ec07ae4815a0365d40c1b3', 'Advance option'),
(364, 'bd1e25084c5b9b41b7d31b02e957fed1', 'en', '4131cca5ec58bc44ef23fff086a99ff2', 'File Pickers'),
(365, '3c016599451cf1ce41edd43f7e7e833c', 'en', 'e539fd665e202f536325140d87d7bf72', 'File Type'),
(366, '715b890c356b330311f80a86fac182e3', 'en', 'ec211f7c20af43e742bf2570c3cb84f9', 'Add'),
(367, 'd4baaf8ed103b8d707a8e11df13dc33a', 'en', 'b71cba76b52a1f46c33274fbd63c0778', 'Filter Media'),
(368, '210b48665f8875ab3350c5bf48993d78', 'en', '9775658ef10431ad9862abbe5ee4e43c', '%s Media Items'),
(369, 'ceb3eeefc3649b2c47f083c2e131717d', 'en', 'ab0a44b7763dbe3966e9c71b7f3cc558', 'Click this link to create Dropbox app:'),
(370, '6cc9bd3ce8820bfae2bafe98c98c8f36', 'en', 'e7957b29b6ec691042d91cada7a108f8', 'Design bold app id'),
(371, '81bb53fcd650deda8cf9f4f05a8b7627', 'en', 'bb9dcf525c88efc7115dd231e18da73b', 'Click this link to create Google app:'),
(372, '42f6022c013912449e63c6da48a20da3', 'en', '8115871db1fa2a0ce0d90f83ff9311a3', 'Dropbox API Key'),
(373, 'a60b520af37cccbfa93fce28f8671e26', 'en', '3ad39fa721e4d05a13f8875ed4e24746', 'OneDrive API Key'),
(374, '1de2245066f60262502a702b73bf4753', 'en', '849ecc67da97ed5b993c516f77a643a2', 'Click this link to create Design Bold app:'),
(375, 'e582fd3cad1181188be53a20ad7c6ea9', 'en', 'a2606d9010e36899047fe8dc979d9a85', 'Design bold - Image editor'),
(376, 'd4b19087272885dee79a1b0b2d9f1d97', 'en', '83218f16455faadd503bd36a44a325ba', 'Faqs manager'),
(377, '235a46143f45f36ae7f05333aaff2f40', 'en', '95e2651cccb9508626a987a44c9274c8', 'This title already exists'),
(378, '16a61d1fdcec124dc60f6851987b1879', 'en', 'b78a3223503896721cca1303f776159b', 'Title'),
(379, 'e14135328b860c1fb3d6329319a8ccad', 'en', 'f15c1cae7882448b3fb0404682e17e61', 'Content'),
(380, 'ae79309440d0997e58c8180970a08381', 'en', 'bf50d5e661106d0abe925af3c2e6f7e7', 'Header'),
(381, '83f0049aefef9122c893862192382c69', 'en', 'ded40f2a77c30efc6062db0cbd857746', 'Footer'),
(382, '3ad52f44dbb35379732a44536385c1bf', 'en', '6d5c6b52a4fbbd984bcf312eb095c9d7', 'Renewal reminders'),
(383, '1f634eb3936b4275a560e4fb2d78ac5e', 'en', '8624a9ad4e0acb27d41e8e6c7f74faf9', 'Once/day'),
(384, 'a2fb6f3a805255305f99f0f1a11088f5', 'en', '73be97858912ef87f7a91b8a1451e9f9', 'Configure mail server'),
(385, 'eb20a4cacf0bce5ad6699d57d8d7dfe6', 'en', '13a44cb3c08c1c40a3c5b62152538ee8', 'Email template'),
(386, '4874663a78138e0693b771b4d1dead41', 'en', '6077ba750e13911cdc66d4725e30087c', 'Email from'),
(387, '610a547e85a82972d447760cae97dd60', 'en', '221e705c06e231636fdbccfdd14f4d5c', 'Your name'),
(388, 'b2779381895e268909aed0584835af6f', 'en', 'e082d878dd8867bacd0b6ee66f36fbf9', 'Email Protocol'),
(389, 'f79852b3224ba6e77f52e054366c715d', 'en', '4dfbb099eafd3c82e033bf92946d3ce6', 'Mail'),
(390, '798e96b3262536e7f7519ef0c121b29e', 'en', 'c2239a92bde29f0a9f9173193cc2fe00', 'SMTP'),
(391, 'b30a339734087dc93b0bbc383d7c4a24', 'en', 'e88771848779176222264e08cd54f806', 'Configure SMTP'),
(392, '364a386dd45d33df1f4b27f7bc9cbed0', 'en', '2e97c522fea3ff212e662a50235bfdf5', 'SMTP Server'),
(393, 'c41070ca2ad0146cd5f7815c2d4f7759', 'en', '63ede2e53d7a100acb8f97a618bb70c8', 'SMTP Port'),
(394, 'da9dfb7c1f6029b217fe81646a90ef87', 'en', '336fff487168a9f8f056c92c41a7c813', 'SMTP Encryption'),
(395, 'fbd43b378672c74cc33cb67568f6eed0', 'en', '6adf97f83acf6453d4a6a4b1070f3754', 'None'),
(396, '156e92fe92f15605591081311c235551', 'en', '58796f93f68f4a82447faac8751ed9bc', 'TSL'),
(397, '6b752107eed516ea915cd915f0becf36', 'en', 'ea52c36203c5f99c3ce2442d531b1a22', 'SSL'),
(398, '0cc12ac95817b77b2f319f94b89fa2ca', 'en', 'bf4f9ce507b4480bcd90f2b0bd97cc98', 'SMTP Username'),
(399, '6c448c903e83e40046c6fba53cfe530e', 'en', '13dfab74d4f99be29bd6c7142135b34e', 'SMTP Password'),
(400, 'd37ac6b0a017cbbbd95ef1f4435d8124', 'en', 'a67ce68ccac082ad54a552bdbcb6ecd7', 'Email notifications'),
(401, 'a3494930575698398ab48e450040e418', 'en', 'cd398a41e889e7c964b7e15396b51dd0', 'Welcome email'),
(402, '602cb1c6f1a04fcf07bf644ddc55b2e1', 'en', '9b5638a72c8871a45d0499853e7e6906', 'Payment success'),
(403, '4812867b206f2392da2bb1848eb15d98', 'en', '0d57f6ae12faef77617cdba3884b3e1b', 'You can use following template tags within the message template:'),
(404, '850d0633c15b1b8574a3b6d870d903d3', 'en', '512668ffb3bdaba560c046c36a88e658', '{full_name} - displays the user\'s fullname'),
(405, '3032757a390409e3fb14d6998e60820d', 'en', '87e9274be53db0b79c772ec0c41e998d', '{email} - displays the user\'s email'),
(406, '40b6f48ab2ade73398f025c3397582ce', 'en', 'df23ed9f7004f969107a28e5ce3dd331', '{days_left} - displays the remaining days'),
(407, '84355ec84400af3405656f65bc72763d', 'en', 'e05383902ccafde8d8c8ee3a8d5c93b1', '{expiration_date} - displays the expiration date'),
(408, 'ebcbde8eb5f571163aeef1889dd281e0', 'en', '08d9e543e294e9242b8f3c6472b1a3ab', '{activation_link} - displays activation link'),
(409, 'e714f3aff714da67a67029859198f04a', 'en', '4c84eb3b96d621b49465cb2dc71bdd78', '{website_name} - displays website_name'),
(410, '4ef45a006be9b65507d8ca31b5db02e6', 'en', 'f7f94297619a8a78c387584142f13121', '{recovery_password_link} - displays recovery password link'),
(411, '3dd7971d63cfe58badaff789ae1127bb', 'en', '0274a4c63543264feaade2c4bef375c1', 'Email activation'),
(412, '77bc1738aea16c5d6bbc0b650562e99b', 'en', 'c7892ebbb139886662c6f2fc8c450710', 'Subject'),
(413, '225ebe472651752c73369a41cdb62564', 'en', 'eb81114f7cb909e9679b00a658133c85', 'Paypent success'),
(414, '3d5c14cdb8fa80c992205a71d923966b', 'en', '5b5a4197ca80657a8845429730156c6f', '{website_link} - get link website'),
(415, '34640443270e8c5b160593718576c46b', 'en', '348797c854ebe35ed040f00917bc8a98', '{pricing_page} - get pricing page'),
(416, '8ba99f418a6bc8fe5f03a7d6cdbcd394', 'en', '2938c7f7e560ed972f8a4f68e80ff834', 'Dashboard'),
(417, '86ac60a69cc964e87e4dbacc0dab4381', 'en', '4b1b4dc8cf38b3c64b1d657da8f5ac8c', 'Report'),
(418, '929825895748c58298846a06c5289c4b', 'en', '7b596b44ed412bb168741e7230b03d8b', 'Cronjobs'),
(419, '2b16ddd50e44052944abfa74ba4a8a6b', 'en', '7eaa47ff7b37f71f301429294f835c46', 'Coupon manager'),
(420, 'f6d13ef3f30665764e201f6c4af83e52', 'en', 'a1fa27779242b4902f7ae3bdd5c6d508', 'Type'),
(421, '8c65dd415a84f209c849feac33fcf15c', 'en', '5290e2630e9d54a0fa82d0d3b69d2139', 'Coupon code'),
(422, '3ba082be2348c3fff23c79b168e73d50', 'en', 'fa4c570f1af7a06806d18121fa0cb8d9', 'Please select packages'),
(423, '965c8bef7f8ea10241ebe45ea6b3a976', 'en', 'c68934bdcf090e57159ba59438a97f94', 'This coupon already exists'),
(424, '380bc3244a32b8c061fc2f8c420dd328', 'en', '3601146c4e948c32b6424d2c0a7f0118', 'Price'),
(425, 'e9ed6c42c06b389ef733eead8d080a2b', 'en', '272ba7d164aa836995be6319a698be84', 'Caption'),
(426, '39dc9e31a118164aa79f6cfceeba11f9', 'en', '7599c66624447e81fba0b73e9f43203d', 'List captions'),
(427, '619bfd6402d2c08e072cdb22c4ebb8e6', 'en', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'xxx'),
(428, '85b587fce5cc157d4f7d206b1b5c6e1f', 'en', 'dd8dc81fe535ef0ef8e65972febfea6b', 'Blog manager'),
(429, '4d762a6af0002825b06d88d01570622b', 'en', 'd380bc4996db846896ea499b9bd495dd', 'Get Beamer product id at here:'),
(430, 'ffeb94a7b76d09a1f8c76f3ca2fe1aca', 'en', '7a262cb0d3d917313c8ba12f996fe83c', 'Important:'),
(431, '652a96bcbaee9eda0d25418aa0d068a2', 'en', 'be8d1f91bb457a932b1a4af0fcbd2373', 'Set field HTML SELECTOR is beamer-notification at here:'),
(432, '677eab8d9fa93910ddc8335513733ca4', 'en', 'e7cf0c042bb35c701919d18e70bebd26', 'Beamer product id'),
(433, 'a3a3c770487bb928b0371218ecba2b8c', 'en', '96d008db67fc0b5551a926842bbb6a71', 'Notification'),
(434, '3e85b0a660fe9e416103755a470082a9', 'en', 'b913b6a06a5769eb5ee0e1bd494b7f94', 'Notification with Beamer'),
(435, '604c36055981fceeb042265e60767658', 'en', 'a1c58e94227389415de133efdf78ea6e', 'Appearance'),
(436, '2e675bcfe2774b6b180759177551ef1d', 'en', 'bd60c369a2a177b7fb40b0c56b699e8b', 'Default menu'),
(437, 'ac5a575463d473c906ff36fbb84bd962', 'en', '4970bb4b549101caa7155cd33840c0e8', 'Menu color'),
(438, '63e99ef7fb8cd97beda5a96c63726157', 'en', 'eee0168be69b854c20621fc6f01cc3fc', 'Hover'),
(439, '08e3efaeda4bf907e24cafba22ac532e', 'en', 'd741b8147e94b397bc82ca205f9f927d', 'Full menu'),
(440, 'dc5e0c1dc3f0bf08790698cbfec04fa4', 'en', '9914a0ce04a7b7b6a8e39bec55064b82', 'Light'),
(441, 'ae1de0864647bde6fd23c3fb3f053efe', 'en', 'a18366b217ebf811ad1886e4f4f865b2', 'Dark'),
(442, '6a8d1a08b6d7d6cfd6660704e82f8b24', 'en', '11beb7884b10d709fb06b932a8f03771', 'Color Icon'),
(443, 'b09755d45ecf8cf4603a77631dc6d002', 'en', 'ecc62f310a7f88d92b471d35ba484d4e', 'Enable landing page'),
(444, 'ba9447867df51450740dfca3b4bdcd5a', 'en', '4b01d143f2670ddb850fd1b03aa726be', 'Frontend Template'),
(445, '73f7c7aee715b5a3ce549b95ef334379', 'en', '45e035baf33a8e403766a606457f8b10', 'Theme color'),
(446, '7966e784e45b8d9e8b7aa86dab95e736', 'en', '16f880e1ef8a81fb20864823f68ba6c6', 'Full light'),
(447, '896def7efad75a6790cdfcf4f997ad73', 'en', 'f7ffa95981fe684031c471e12e14dec5', 'Menu dark'),
(448, 'da9540a6f7a04cede763afee66d29818', 'en', '8a0e340cf9a655e49154b9336eeff73c', 'Full dark'),
(449, '5552e4d67d6cac5519eed86da07cdaba', 'en', '71a1c5f19c8e300d350f5f68c71e4559', 'Delete failed'),
(450, 'e79da2e9a606b76fd5441a0246d9195e', 'en', 'c9f2b66508eca21a5b6fa083268d1832', 'Your package Your package cannot add accounts'),
(451, 'cc3388849c95b9cef74d33b69c07f8e8', 'en', '053a5873e93e7a7e07ee03775c084835', 'Your package can only add up to %s accounts on each social network'),
(452, '766b7e35c96dda8587acb03c4137e252', 'en', 'bcae115a3c517d2aba3947f58ac0911e', 'Allow add profiles for'),
(453, '6801e16d6f60cfbc6e2f784a3bc30b77', 'en', 'fd1db4ebc1768305bf1bb6b61964bf8c', 'Account manager');
INSERT INTO `sp_language` (`id`, `ids`, `code`, `slug`, `text`) VALUES
(454, '6a10399f71a42eea0ccec6b3e568b0c4', 'en', '77f9467d493beef3290972d1b2e76df6', 'Relogin required'),
(455, '44a33396492d857c125dc072e8469789', 'en', 'ea60dd0dd5e4278aa90a3f4905f77a19', 'Add account'),
(456, '959111c197df1d0bae5172115357c3af', 'en', '5e9df908eafa83cb51c0a3720e8348c7', 'Check All'),
(457, 'a3ea97131094fe5df3dc06a5c302a560', 'en', 'a1f1d62cb1162e48be9afefa992f82ff', 'You can only add up to %s Whatsapp accounts'),
(458, '8161c4fd03432caf70e9c127053e5e13', 'en', 'c9c93ba953f46753afe9b4efe1feb29e', 'Successed'),
(459, '210f00a679878541c5566c4643e5b698', 'en', '9cd75419d0458a818643e5ca680e6c79', 'Instance ID: %s'),
(460, 'f035edc719a5e70700a6db7e27eeab15', 'en', 'fae6456c5f106aaa7faf86167f8a9ade', 'Scan the QR Code on your Whatsapp app'),
(461, 'c6a4bf728f5a2d95e406e4e6187fd324', 'en', '0ba6c16ce406d74ca28238a30a9511fc', 'To start using tool you need to connect your phone number.'),
(462, '49167e54b9f2cd4083a23299985cae79', 'en', '545a131bee12a6b67495831f8c41069e', 'Relogin'),
(463, 'd7d89715cd23b0a3f7ecfece085c9fa3', 'en', 'f461f93402b737202a41119942afc53a', 'Step 1: Open WhatsApp on your phone'),
(464, 'db4b64949aefe57a209923e054ed0463', 'en', 'ca46621be737bb444b5fed0c6ed3981d', 'Step 2: Tap Menu or Settings and select WhatsApp Web'),
(465, '8cd85f684cb376a5acb2fb851b27eb90', 'en', 'c4f938698de124d98f7e348afc9a77e1', 'Step 3: Point your phone at this screen and capture the code above'),
(466, 'cf022a5badacdd55d04e7b19beeb5eb7', 'en', '40055899666d71f4665fe291e59603cd', 'Please make sure you joined Whatsapp Multi-Device Beta'),
(467, 'df742624a91394a54f13361e6edf7035', 'en', 'ff131b2fb7a9bba18997f59cb23cc6fd', '1. Go to WhatsApp Settings.'),
(468, '97bea4fbebc934e250ff86bb23c40472', 'en', 'e492e6c12f507b24c47979a5d7229c20', '2. Tap Linked Devices.'),
(469, '58f56efe25e680898f1fc7451328afec', 'en', '753d20a55f8803de229e8fc880c2844e', '3. Tap Multi-Device Beta.'),
(470, '4da0697a05b7c7f133f65f65544e8ab4', 'en', 'cf16e5420ed16ef1793fadb440e7656d', '4. Tap Join Beta.'),
(471, 'b6eda62bdf9bd30ff7d618639e783908', 'en', '13b5783c5cfe5404ad7b3bdf904094f1', 'Relogin to keep old instance id'),
(472, '97e0602b2ff4e5a08e27efd43cda20e3', 'en', 'b494ce60923c04e8e4c91b0d47177d95', 'Login required'),
(473, '9ea244a23169948a206eb8c807b5eb57', 'en', '62f43ab24cc2080fc1747f47f4ee84d4', 'Instance ID Invalidated'),
(474, 'a408a5bee97fffab3846d43af077abc9', 'en', 'd4e6d6c42bf3eb807b8778255a4ce415', 'Authentication failed'),
(475, '44c9eaab599cb5b5cd0c65836863e679', 'en', 'ad9ade78638ba04c3aa4d5e27f499ef6', 'Cannot get chats. Please try again later'),
(476, '01b7768a0da34cfef2be89c9d20d7543', 'en', '1daee5ad7453bd1bc282a3c3c2556d69', 'Cannot get contact. Please try again later'),
(477, 'c0df6e81615fed49d3d08b0553d68be1', 'en', 'f6b66d975e5808c5274891a8bfccd67d', 'Cannot get contacts. Please try again later'),
(478, '83bc3e3ea614db754069159ce4ad3e65', 'en', '3ee9fe8d53f3193099a9270b8caf25b9', 'Cannot get messages. Please try again later'),
(479, '9662c11c7355220c284d9e362cb6c60d', 'en', '0c92d57f171fd9985fb311776a808d6b', 'Failed to send file'),
(480, '128043304b8cebfa33236cc24e4aeaee', 'en', '7299bef05335e954422083e7f7e5cb46', 'Failed to send the message'),
(481, 'bb54146b2c30b1e9006da8a8ba956247', 'en', 'c7a6bf14c2e14e5a847ffb9b7835db74', 'Logout failed'),
(482, '37fa3f28809292d48a50e2ea4170ba1c', 'en', '757ece9c2ff29cb5d5d6ac528db40fbd', 'You have exceeded the maximum number of messages you can send per day'),
(483, '5ad08c46d4a403e211973d97140231a7', 'en', 'dde809088eae9e9767206431070191cd', 'WHATSAPP SERVER IS LIVE NOW'),
(484, 'afb086039340bcaa1083009235120e42', 'en', 'f80b6d66fc4691b8b0d5d43d2ce195c9', 'Cannot connect to server. Please try again later'),
(485, '7e007e508d346fdf9cf71c8d7da2d03c', 'en', '8f497c1a3d15af9e0c215019f26b887d', 'Delay'),
(486, '269ecee900d0abfdf784857d469a2d27', 'en', '504efb23ef3e120d59075eac787f5045', 'Profile does not exist'),
(487, '71ab223cbb5c869e7301def19829530f', 'en', 'c72677f30690200c8a40c67b25c0bd8e', 'You can only set autoresponder delays greater than %s minutes'),
(488, '3162ad410c38a94e8993d5566317c589', 'en', '2590d127bf5de2daec46f06f806199d8', 'You can only create a maximum of %s contact groups'),
(489, '346dacfcd8af128d0bfec694e79e24f4', 'en', 'f7be48ffe20464bb6207713a125a92ea', 'This group contact name already exists'),
(490, 'b7434b14e5f090b508d8e01f2f252822', 'en', 'b641d539850de039b6c03942f69e6f2a', 'You can only add up to %s phone numbers per contact group'),
(491, '0ac20b1eaca187a9009324d64ed85a3a', 'en', '01334d8198388b5c183845e9ddff423b', 'Relogin is required'),
(492, '49bb5cebf312dae7f46497ff43f920fa', 'en', '7accdb8d4e2ba9a05700334297981f53', 'Something went wrong, please try again later'),
(493, '88e5a3b2fb362b95863547494050caa0', 'en', '27df8a01e2744fc1bdbdc2cf1dcb77d2', 'Empty schedule'),
(494, '6a6c57744e1dda9f2498160ca32e0c35', 'en', '4f788b805b64cfa7e581dc6bbc26dd85', 'Bot name'),
(495, 'd70ed8dbf7ce5456ff48218fb7ee5418', 'en', '867343577fa1f33caa632a19543bd252', 'Keywords'),
(496, 'c7a6397c91ee0ff7aea4f8ebac798868', 'en', 'e16b7b705a9c224a854de4a0613e11cc', 'Whatsapp API Configuration'),
(497, '26cc676c017b035edea5f0d8a9efeb4d', 'en', '82c616385feaa4676e3ef52af346733b', 'Whatsapp'),
(498, '3fbabe49a1cd5249615db617365d954b', 'en', '72fc0364c0569b567018e734b6179af8', 'Resubmit message only after (minute)'),
(499, '1c84a34d02a7826f2c6b95084e6d0d1b', 'en', '31fde7b05ac8952dacf4af8a704074ec', 'Preview'),
(500, '1449815a9932b35b7eaf0eaf17415953', 'en', '7bf7e846e399820beb49f1d4ad9861c3', '00:00'),
(501, '894b25c8cbda6378232b869f141f8b8a', 'en', '7f46165474d11ee5836777d85df2cdab', 'online'),
(502, 'dd4bfb5bf6d609dd76e8275cbe5114a9', 'en', '1bfb7b2503398d3ba4c00fe75903759a', 'Type a message'),
(503, '31ad60bbf02c254f24f066415e8240ec', 'en', '15291d8ff40c4701d9645b2d463c4ba7', 'Bulk messaging'),
(504, '0661555fad67dcb36b504858db93782c', 'en', '5f548ab6f18c7a3f626ea4c1e997448a', 'Manage all your contacts'),
(505, '8c6c04387f3674d04cc9568d1078aee1', 'en', '788d116524d3f6745205efca83682baf', 'Contact group'),
(506, '07d797be4653425d11994bd4af88b954', 'en', '6c887eeb421a51bede58145cb71cfded', 'Create campaign'),
(507, '80ee45f02853ede72618f1e2746a62ac', 'en', '9e61c9c09ddc1d15e56b9e63a82ccb41', 'Start your bulk messaging plan'),
(508, 'b2f1c30848cd9b91e76f8c0d1e513696', 'en', 'ef8b1d1b2063e7dbea98b510715d94ae', 'Manage all bulk messaging campaigns'),
(509, '785f40e3c36384b0360f68153ab1f96b', 'en', 'ccdb7bf9d93e5652b57cabcc8c41e061', 'Schedules'),
(510, 'ffd1de66550bade007d3f80b86120d19', 'en', 'b39a7338df6a7c99fbb130941347bc86', 'Chats'),
(511, '54906128627a7870fa70a49867857fe4', 'en', '594c73839cac56ce7470250a6b75809e', 'Search messages or users'),
(512, 'ae2e2bc016739b33a987018ad855534e', 'en', 'dae52b80711ee1029c7006f95018d300', 'Recent'),
(513, '0f5bacf22878b8cf1c4ffcefdbcc6b35', 'en', '03937134cedab9078be39a77ee3a48a0', 'Group'),
(514, '563aa6c37e5f7b6274c4388975782397', 'en', '8f9bfe9d1345237cb3b2b205864da075', 'User'),
(515, '25822a69cc61ef5ab4f903edc5eb1706', 'en', '60b4e96f874a81a7bc9fd8e1cfbac2f2', 'Chatbot'),
(516, '6398fc4267b0b29ccc2c82287baa7042', 'en', '4ee29ca12c7d126654bd0e5275de6135', 'List'),
(517, '4b41f639d76abbe8919a03bf42eba396', 'en', 'add11bc32c3633700184345ca3cc9e5f', 'Message contains the keyword'),
(518, '7a1d9e72106023bb9a74fbbcaec0b1dd', 'en', 'b0ec7d11e77c3c14d782240ac2e4bddc', 'Message contains whole keyword'),
(519, '99b8ffa4ca538d124756a1d44bd18328', 'en', '8e14becaa093f0a9f79d7e8ead8ea144', 'Enter keywords'),
(520, '260ca46b4b076adf090fd45184b15638', 'en', '9adb4e5c6804a2a51cfadb6f26b3740e', 'Campaign name'),
(521, '98498d9357acb90f36f88ae6c897800e', 'en', 'cd48ce2f7e970f11f7bc7a443aefe003', 'Select contact group'),
(522, '41a450eeb781236238e767ae92b60fc3', 'en', '25f7347236b51a5eae4ba01a7862cb55', 'Schedule'),
(523, 'c5cd5f6509bb2558689a983f4566131d', 'en', '00d9a10351c5eb873ded844bf739a1b7', 'Time post'),
(524, '8c6ef59722a35d1e3c6c000d066b4c20', 'en', '048eacec6edf123f86282ff498e85e8e', 'Interval per post (minute)'),
(525, '08771cec48c4088a318188fe61806a60', 'en', 'bbaff12800505b22a853e8b7f4eb6a22', 'Contact'),
(526, 'f6365dccf0929e522cd55988590766b0', 'en', '40b49c0d8b892ba1b9353cc727eb1633', 'Import contact'),
(527, '4ac7a96a98de6fee59ba9c18fd247b4d', 'en', '3566c020e102e0f4b9f7193d94caf558', 'Edit contact group'),
(528, '8f6d24d463b1b96245d4b378d3c47844', 'en', 'a67cae87be566e5ed72a7bd494225c43', 'Delete contact group'),
(529, '39d8efdd949f57eae1e597f101e1947a', 'en', '5a11167af35083c42853288b09072cd8', 'Validate exapmle:'),
(530, '616b60b1cc35ebbb40295ad20ad3a378', 'en', 'd3d2e617335f08df83599665eef8a418', 'Close'),
(531, '464e91703fa2a98be4b40ed5133737d7', 'en', '9c536b28e4c4e064ca609c652a5ebd57', 'Every phone number must be all one with it\'s dial code. Each phone number is separated by break line'),
(532, 'a704905a8b217682d472a0a451e2b3b2', 'en', '09731e4582f5e5b02de9c38671573a31', 'E.g. (+84) 1234567890 must me 841234567890'),
(533, '1119d912cc0c7a34c166851f56a7acc3', 'en', '23e01755c66e490d404ff7a0e759f58d', 'Add multiple phone numbers'),
(534, '338329b2f2dc1ece82d48625a6a2ec51', 'en', '9aa698f602b1e5694855cee73a683488', 'Contacts'),
(535, 'ee74e3b7fb6e9b625ad8b054ab4e9c3c', 'en', '26300a3c4a8348196381030f528c00d0', 'Group contact name'),
(536, '58076015d6c99c0f0ab814b6a69842d4', 'en', '7f8c0283f16925caed8e632086b81b9c', 'Sent'),
(537, '948a00bbe1090675f32841dc3898eb23', 'en', '3edb9dac5096533b32df08018c9dfb6c', 'Pendding'),
(538, '8611dda8af21833d68f9ac9fd4c2ea18', 'en', 'd7c8c85bf79bbe1b7188497c32c3b0ca', 'Failed'),
(539, 'fb9786a33297ac4bad22490fa71d1a42', 'en', 'bebe39eef720d7cbb479d8b3428e4c04', 'Group: %s'),
(540, '7ac32fff259d38c4b81d536b3dc39394', 'en', 'ae94f80b3ce82062a5dd7815daa04f9d', 'Complete'),
(541, 'c053486cc49245832b207482a5277d34', 'en', '105b296a83f9c105355403f3332af50f', 'Pause'),
(542, '7c1726170a3fbb6f341edc0c2b66eb9d', 'en', 'de3c731be5633838089a07179d301d7b', 'Play'),
(543, 'a0985b1b58a21f2fb811ad14b7e83366', 'en', 'c86349bc4ff139e9adfd72e628406362', 'Scan QR code and get started'),
(544, '8bea3bcfc20a38bfe2436e8a0e65da97', 'en', 'a9b38953a343306827fac51f17a26e2b', 'Use the power of WhatsApp to its fullest! Make WhatsApp Newsletter and automate communication through WhatsApp Chatbot and Autoresponder.'),
(545, '7a48fdde3a345b35b033cff596ada645', 'en', 'a5119f845025fa07aa2abb9262021ea5', 'Enter message'),
(546, 'b215ce51bd36fe2e9c1ed3e10c92eb5b', 'en', '872bc575218e7dd2c749633da28c24ab', 'Autoresponder'),
(547, 'a0373e22c142a7f9173a065c367c8e8e', 'en', 'aa49812130f37db007219cbd5c9e0d08', 'Whatsapp version'),
(548, '87f32154195192e3543b2ccceee1ad6d', 'en', '75fc5343e511ac5a88668c81cbc1fc94', 'OS Version'),
(549, 'e826cc33d75002d7b53f19ddef36d026', 'en', 'e184c1b23b4b95d3c4a6ade21df61545', 'Device manufacturer'),
(550, 'fe77d871658c0c626d8c60dc7e23d7f4', 'en', '71b401e30652987d57dc21cc1a84875b', 'Device model'),
(551, 'b0949bb95a3964f60f837d73a2ad1edb', 'en', '24c9a580ff22cda9435023d893e53155', 'How to use?'),
(552, '90196d2bfeb75aa8194abd3d6c44c409', 'en', 'c69ea282924e0b4289eebf9fc284f3d5', '1. Select an account on left menu'),
(553, 'b100d9fde3102566670f9249be2367a3', 'en', '52f5483f1ebd224d3ea95549469701c0', '2. Select Whatsapp feature you want on list'),
(554, '6968647358e9349d312b8b364c348e28', 'en', 'f7f7c2727473b4ee3aec679db47d5055', 'Enter your caption'),
(555, '344d4e498c7b984516548f04edd47500', 'en', 'a842b7168886b22d97ec524a314f842d', 'Chat permissions'),
(556, 'e16fd1073095ae1e2aa3b48ca3186cab', 'en', '4f71cbcc15cfc61488189998922c2dc8', 'Send text message'),
(557, 'fc9ea41403aa2d2fc7d49c0109a70161', 'en', '12a7877beeae35d4a2b1957f65628c1f', 'Send media message'),
(558, '5b223ea0dcdd71f08d6b6e9991d1f8fa', 'en', '988fc524fa163b9249783e376410bd60', 'Autoresponder permissions'),
(559, '5c5e9f47ff93284e2cb0f3ef588af2cd', 'en', '0b3ab58bca49d953640517e32baf20a6', 'Autoresponder with media'),
(560, 'eaf2c1ae78eb9ed5e8e034f65a9601db', 'en', 'ac567cc3b88ae7067d9c6cac656a30ac', 'Minimum number of minutes to choose autoresponder delay'),
(561, 'fcf1e3165b851b26bf0869189f19cd32', 'en', 'd7b2bb65df7d617c4c61a48414ccf89c', 'Bulk message permissions'),
(562, 'c6773733cc6da92febf954e0fd0bb684', 'en', '29dad14631fbcf3461ff6ecb90f1bcb5', 'Bulk messaging with media'),
(563, '30421ebd27e52c2f31de396823fc53fa', 'en', 'bfd1afcf8805fe30225abfdd596df5a3', 'The maximum number of contact groups'),
(564, 'a765b20e0020a4f78f1012a18057e658', 'en', '8238a2e7d615cb2b02cc2a8536dc684b', 'The maximum number of numbers that can be added to the contact group'),
(565, '2c8682bf14110ae3594f60f5d855526d', 'en', 'c01adf70fb40e0c6871271f1542374d9', 'Chatbot permissions'),
(566, '555b8c9c4a8b819fb5e380048cddc53f', 'en', '5b3518e58b8fdc8ba36f87e4940ae236', 'Chatbot with media'),
(567, 'ff0ea71a74f20ec527557643af791ad9', 'en', '763e5a4393aaef8032c77cd2f7687b53', 'Total number of messages/day'),
(568, 'f4e377c0debf163631375e0872f48d6a', 'en', '38a40f50271576925ecd5a6b1941612a', 'Total number of messages/month'),
(569, 'f3e45c01673706d9d9cd9910b5b9e059', 'en', '9424a2018eb4e2371962cdf985b53f2d', 'Include the total number of messages sent by Bulk messages, Auto response, Chatbot'),
(570, 'afa98fcaa3dae8edea0a56683e76d6d1', 'en', 'caa8b3033abed1e190c4f9bc4a2daa62', 'Whatsapp Server URL'),
(571, '7da1672139f5a947c45a31a79f5789e8', 'en', 'a806dea3fa342ea624981b8984db6458', 'Whatsapp features'),
(572, '58cae547c0dea551c8d4e4de5d71ca45', 'en', '19cf997085b6cd881f6ae2731eefa3bf', 'Unlimited Messages'),
(573, 'e47c41991069d3f68b21787149dd08df', 'en', '55dcdf017b51fc96f7b5f9d63013b95d', 'Chat'),
(574, '041af39bba2afe8e8088adaf8877e621', 'en', '63a6a88c066880c5ac42394a22803ca6', 'Refresh'),
(575, '500a47d7a4a71ebe39daffb3877d6cf8', 'en', '7c1243dadc894e656bad764355713255', 'Next action'),
(576, 'bd015eb117492e5b98762246c754d399', 'en', '6b89e0e0b10ff08441be8381b3254a7a', 'Please enter a caption or add a media'),
(577, '902c743efbc4a98d2c2b24854bf40699', 'en', 'd0f7377251002e1c6dbf04f69dd21b38', 'Max interval must be greater than or equal to min interval'),
(578, '9eb836a9782f420c3257520f9f4723dc', 'en', '94708c105487527857d244c4e13174d7', 'Random message interval by minimum (second)'),
(579, '14dcdb46f675237377cee2b3fca16402', 'en', '990770224e3b6f80047f25b90cc4b3e4', 'Random message interval by maximum (second)'),
(580, '0bd9320d067244214ce7ae0d270c857f', 'en', 'd95de909a20dea446cf7b48640513d8a', 'Except contacts'),
(581, 'fe6e647ffcb31eac742bd0c75681f3b1', 'en', '96e575c6a2e7d32e271eb0c634d97587', 'Select contact'),
(582, '0ddbc14f1a4f5aa6c6d0402687ad90a8', 'en', '96ac4e4d05451920cd34bfc4fb1d785f', 'Export participants in a group'),
(583, '6165cc8596224add1f67dcbe96d6991f', 'en', '727c042eea8e189ef3e632d49a73cb5e', 'Cannot get list of participants. Please try again later'),
(584, 'c8d845f2b3740501f8b6856a2a0c6e8c', 'en', '6aa8251efee54d6ab4680a03ca2d252d', 'Turn on/off chatbot'),
(585, '465d3a0be584d41331967f1d7bd78bba', 'en', 'b3e5527b70d5d53df81ab5fb5761d7a3', 'Random message by Spintax'),
(586, '573bbc0bd50a496abb57dbc569662311', 'en', 'eec1181df6638aa3c60ff4f26b58d0e4', 'Ex: {Hi|Hello|Hola}'),
(587, '235f65e870eedfcabdb92863e697425d', 'en', '8d09cdd430976108bd220d4245966c20', 'Whatsapp account'),
(588, '638e3cfc5eef4f61783ee61916e2054b', 'en', '96b0141273eabab320119c467cdcaf17', 'Total'),
(589, '42cfe5c797cfe48367b1b01048a7ac7f', 'en', '2ae3330084b44abd37672d0ca603471e', '%s of %s'),
(590, '64966fd7d94b7cbbdfb58efcd0687db8', 'en', '37465eade4777d3db90ac152b709e4bf', 'Messages/month'),
(591, 'e5477a81c10aced671508a612daa0696', 'en', 'da9e1752afd5ad22a06073f4c94b0ac3', 'Chatbot item'),
(592, '3df22fb6328b470b2e75e76cbf44990e', 'en', 'e78e14c5f18f793bdcd4726766f0fa44', 'Pin'),
(593, 'b5b23e409c860b598a30a2785df6e479', 'en', 'bb792693e2df302e35ff0a093e2fddf5', 'Unpin'),
(594, '35ab6728728954ab5b6a714f80bbd396', 'en', '9c372e35e7096d7d84a0d2636b24968f', 'Clear messages'),
(595, 'eb4b2bff15a067662987e7fbb78158c5', 'en', '3037d47006db2b89769b9d9205e1b5eb', 'Delete chat'),
(596, 'b62ed5e64409beeefaf84cbea185587f', 'en', '0e7361e8b9093c3695734cd54f1ce2be', 'Cannot pin chat'),
(597, '40d062f741e672c68fc12029acbdc6af', 'en', 'c008e1ee8d5e6b8100201d5ae323ab60', 'Cannot unpin chat'),
(598, '175fab779e4b21d7e9823a57d8c65094', 'en', 'e6e5752791dfa8be5f46b160cf9035c1', 'Cannot delete chat'),
(599, 'f24e0c69362d9c58490524872f24ded3', 'en', '89afcc4f2ef3295b56e89276c9ab92f9', 'Cannot clear messages on this chat'),
(600, 'ec30c2ed3a417461be9bef00b752ed60', 'en', '7ad2ba8e0921c6f676c33c674cb22c54', 'Cannot delete message'),
(601, '2d999261fcde8f8f976e1421a163443e', 'en', 'aefe181b6ea98b027de5b2e6f91f5891', 'Are you sure to cleat message for chat?'),
(602, '38c856ac21d4d8d9eed62fc8ebc4bb9a', 'en', '185b8c39a03562f9ad8a5a200f14f4f0', 'Are you sure to delete this chat?'),
(603, 'e5e50ed6a482b8cd5f069c17544c6a4f', 'en', 'a1cf7a146b52f932e610a71608662a32', 'Whatsapp can only give you up to 3 extra pins'),
(604, 'f1c1e18aedff808349b75b18a618a7cc', 'en', '6efa67dd300a75de419a7a97b24155e8', 'Your Access Token:'),
(605, '422580a74aa4979848da385d720d46f5', 'en', 'bcd95899e1214ac1d156b3739f494306', 'Caption is required'),
(606, 'c330d74f1d2eac093e0778d70aec850e', 'en', '094643219d952812d85ae7412bde31db', 'Menu title is required'),
(607, '90e1c10266b941b46d7f4cabedc246a7', 'en', '51fb002679840752bbb83ecd39ed45a4', 'Footer description is required'),
(608, 'e59902922edb4aa7dda5ae2b843f33bd', 'en', '3b3534963617ca2b9398f6b988167314', 'Button text is required'),
(609, '3c3a644775c348730e272634c72112af', 'en', '20b7e219b956a58faed3dce1208913d5', 'Add at least one section'),
(610, '5817d10ecebc886bf75c5019bb2e19c6', 'en', '400124f44dc9ff247bc1491822c06b35', 'Section %s: Section name is required'),
(611, '446398e0e09a42c2f7f8022f464910f3', 'en', '5d95e5fcfb30c7a22c5247aaa1760811', 'Section %s: Add at least one option'),
(612, '6fc3cf7271730274eff5b1ec49d4c59a', 'en', 'ee768ed3c28d3a71ca5aca6f9e068262', 'Section %s: Invalid input data'),
(613, '0eddae373283679e85678f03d7445dfd', 'en', '9ce42b97a0db84dda4c7736a4b99bc88', 'The option name is required'),
(614, '6d512c2406c0d27211bb34f0c73749c6', 'en', 'c58bf52e5345763b5923a3157af4f713', 'Button template name'),
(615, 'c03d5bc596deea6723536fb1cd13a576', 'en', '78d73d3b754221764e764ff7fcbc4cf5', 'The type main description'),
(616, '9c8fc2634b0983c1bfb12951b9206b05', 'en', '2abc9081cb92fdba2274a1d3ed23c67d', 'Caption is required for main description'),
(617, '8dc0bfa452cfd585c62334c1353e5848', 'en', '77542b22786a4cd5ef57523c418d7d51', 'Add at least one button item'),
(618, '07f1795cad264f710778aa07dc370dbe', 'en', '221a278401df869024e4373b2196d898', 'Only up to 3 button items allowed'),
(619, '781558c22ef9ed8cc255e57df8c86ba4', 'en', 'a3797be2ffa193f311c5d3fc331b0337', 'Button %s: Please enter display text'),
(620, 'e9dead63ff071317018a2d40ef32e8af', 'en', 'c365ddda07b84778fa83e05c58f99b7d', 'Button %s: Invalid URL'),
(621, 'cfa22c15a91fecf69185da97df871c52', 'en', '284ca910288212dd9c9129f73e400e77', 'Button %s: Invalid phone number'),
(622, '66b5fc3f6e2a11386d1b6cdafdb7fa3c', 'en', '4f3379b22cd5c92a01c191fab8f8f6a8', 'Button %s: Phone number is required'),
(623, '92e1be919bfe3942b83ff67d0ca86553', 'en', 'c7746981253e5af9f819d2f0b0d9aa47', 'The type button item incorrect'),
(624, 'a4bd8d3a0e85a43d66afc38594924ecd', 'en', '641c80987e92a1e9fb2ba69be843ff04', 'List message template'),
(625, '10fcfa64136999555f624b30c8184851', 'en', '278c491bdd8a53618c149c4ac790da34', 'Template'),
(626, 'a3ee8d1e81bc84657c0ea35de154fe5a', 'en', '6bd6af17f850fcbac4e4bd91eea6207e', 'Manage all list message template'),
(627, 'eadbbd8b64a1d3ef134dd8f81837a45d', 'en', '9bbaede2b60678a5fc78c6e1613af4dc', 'Button message template'),
(628, '9b62cd6edb8eeee9c6b9ba0398780625', 'en', '014d240f3dc6c63c2d1b8080ff9f9189', 'Manage all buttons message template'),
(629, 'f55ca85e7ac33871e6e251ebdb00da2f', 'en', 'd9b7d83bdaf719adfb81f5686da2bf3d', '%d buttons'),
(630, 'f85e7a15c29edf7a58f52d84747bed14', 'en', 'cd90c31a9c3e327f73567f97dd0a2137', 'Enter button template name'),
(631, '68c195414ff8196fb58cf494930862d7', 'en', '2723474264a0b22cdb4a933ab55cc62d', 'Footer description'),
(632, 'a419c23b58902ae2d285832e8e19e554', 'en', '86273b88d29c23fef4962ea40514387b', 'Enter footer description'),
(633, '4f0a5b83830a3d7c2cd4ce0095af109c', 'en', '2f26639970bd388fcc118cd15322fdde', 'List button'),
(634, '092a65f3ed523ffd7d6f4099675d3b84', 'en', 'fe136c1adfdca65b8def653c40caa925', 'Text Button'),
(635, '02bd669a5dbfa17352497d4bccadb5d7', 'en', '10663ddffb986bb1bb211ff1de5d522b', 'Link Button'),
(636, 'e2cef2addfd3b68f020498dc955e37a8', 'en', '3ac449bae10adb50b82f625d52128f20', 'Call Button'),
(637, '722f9d7fb092aff79d82a136ed0feb00', 'en', '86299932dc76cc639488ea524b9d6fb5', 'Display text'),
(638, 'ef2ed8c0cec920967bc30eee158e825d', 'en', '97e7c9a7d06eac006a28bf05467fcc8b', 'Link'),
(639, 'e017931aadf424af2a8a950b925d3b06', 'en', '7178be1ed6d93b6ca426fe70547bf9cf', 'Enter your url'),
(640, '1c6f1440192ef241dad50f1475101229', 'en', '2bb90769f04b36e26186ab7d719e2086', 'Ex: +1 (234) 5678-901'),
(641, '1ea20b58e6f7d522cdc7d48a25f3faad', 'en', '1f8261d17452a959e013666c5df45e07', 'Phone number'),
(642, 'a9cb76eca09532c4e0996638b67fd6db', 'en', '4743c4f2fd4d2619003bf593c5d252f8', 'Random message by Spintax. Ex: {Hi|Hello|Hola}'),
(643, '94c0d528b83e627e3f6d945be9a8b770', 'en', '17b5686895507f8ca7d66f02ede7391d', 'CallButton: Enter Phone number for the button'),
(644, 'c42e56be4144db9be3de5ef8570b20a8', 'en', '35bdcbe16964f0371c98cfb74ef489ff', 'UrlButton: Enter URL for the button'),
(645, '6ddc2f5a6d8a0e888d269b2f603ab060', 'en', '233c370e018bd114558829a8dbe0efc2', 'quickReplyButton: Enter a message to quick reply for the button'),
(646, '21b2f771a07f8d791ed4bcedbab0a53a', 'en', 'a961ed55be27be35dd3ee288d69b14d2', 'Add new option'),
(647, '4cc54502b3ef3b818a840851d812f69c', 'en', 'cd34260beb920dfeba2be7ff649be0ca', '%d sections'),
(648, '99b70dae6bb9b6ce6cb5753df8dc4859', 'en', 'c560d270d858e667cdfedfee9f747a51', 'List message template name'),
(649, 'c6b7368e130daa7b226c4a4da8b1761d', 'en', '78dcc95e6102e415a9e4889a024e5f97', 'Enter list message template name'),
(650, '6d2df70dfb337f6c9b042c2200d80830', 'en', 'befa9a640d6cde27a2b15fdd92d5fd27', 'Menu title'),
(651, '6d61caf57e9567ce6bce0c6923964ec6', 'en', 'c566394be44d77902b57bd112acdd745', 'Enter menu title'),
(652, 'e43d781a54c321c49ab503b4d000a001', 'en', 'fbdeba859c1b07e3e422beddfd22c6e8', 'Menu description'),
(653, '1d2871502996abf3f2aff8a3019c51f6', 'en', '111082bb18b636c4493e0370dce09f00', 'Button text'),
(654, '9ac686dcc15fed8db2ec242a94e4802a', 'en', '4c000e49c3d2cb479226092ca6cd0ee0', 'Enter button text'),
(655, '729f87e592a32ab44a7b9d8d72a67b4f', 'en', '4c64225aa89fd0fc6a8132cbfe366289', 'Add new section'),
(656, 'a694c89f709b827ed69d570719fd521a', 'en', '31de06b9c229104d038e1530faa46bdd', 'Option name'),
(657, '4652a3dafd3734880ab733865b378386', 'en', '627af1b94305fbe239ad108ddd6eeb36', 'Option description'),
(658, '167b18d289eb166cd535cfa448282ac7', 'en', '50c01b7871a5b1517fc330d426b887a7', 'Enter section name'),
(659, '7b36f6805028412eeda91ffb9882e1a4', 'en', 'c3642037e309db278bbbfe0590114c02', 'Section name'),
(660, 'a35007ddf554405b7f71a3c49a285206', 'en', '95246319560aaef5815acecbac6ce0cc', 'List option'),
(661, '2b0e586e6cc58c3ad2bd04afb7f0b39e', 'en', '77ef292794f91ad74b0d0f1e4b0643ff', 'Access Token'),
(662, '72162326e7e4a270e97ef8193967ff8d', 'en', '626e8008b253bc4fbef9dca0a3f63903', 'Instance ID'),
(663, 'e78496b33204ae61ec024525d2d6ce46', 'en', 'ca9874b9f275ef51408e7938086086db', 'Text & Media'),
(664, 'be082435986b7967c0b3f6d5a9ac843d', 'en', '5b3ec15499a125805b5bbf8e4afcec8c', 'Buttons'),
(665, '6132d19931af2b2513c0ce326bdbf0e3', 'en', 'd96815e74bb15844bf66e0d389faa10b', 'List message'),
(666, 'a6ecf0a5317942bc3493ccb3ebc82c4e', 'en', 'e124a40f06c3a3d6672dd2fc4cf02ccb', '%d contacts'),
(667, '1bbb72d91e7bb73d72c1fdb9483787df', 'en', '6ce2d3c8c549ab0fd691398bb443efb2', 'API Documentation'),
(668, 'e742adc83a988a742d2c1d416bce4d8d', 'en', '9f391801b2ff80158a5142bb44e48206', 'Instance Api'),
(669, 'a64443087432d932ddde20985de7e63f', 'en', '84608b11fe6ad202ee8f91a659106530', 'Send Direct Message Api'),
(670, '88c045e814805fe3d96e0c2032a10994', 'en', 'ddc72bfbdd42bf1021bbeba43e4d81b5', 'Group Api'),
(671, '375bbed4a43c057df1e0267614c77679', 'en', '43f8527e733785e2ca7a92853d30e4f7', 'Create Instance'),
(672, '03477b125a1d8a4dc007c52780b1803f', 'en', '87caeb02b40e8abf5dd2ce999735aa6c', 'GET QR Code'),
(673, 'a617d58714ac30d14e8cf80aae7fe475', 'en', '6227feb66305c278e957302b6b95fae8', 'Set Receving Webhook'),
(674, '6b6cf466fb039ef918cd229e6ea39cf9', 'en', '837ae07db173bbe25998c4609fe4fab7', 'Reboot Instance'),
(675, '1289f8f6e486f7cf2b3762a67042277a', 'en', 'f251c3b0bc3365973a72fe4893cc627e', 'Reset Instance'),
(676, '81990aac94d8ea07e13b565ab54c03f3', 'en', '880b8461cba2e295e1828be8d6eedb0a', 'Reconnect'),
(677, '1ae118cc3e1f37f71b98a994c09d160a', 'en', '33f0dc366da1b2477471a83ee7ec4b38', 'Send Text'),
(678, 'f577c3b7136557d69f5bb2fb83ba667b', 'en', 'd6ed4bcd7581751037e12f4ed10c5487', 'Send File'),
(679, 'e3482a3712458ceb3e3c014d4ce67ec2', 'en', '68edc5a030cfacf2fa3117e807c6a8fe', 'Send Text Message Group'),
(680, '803745443fd3379a6d3403d3679f05dc', 'en', 'bc711abfb3669a0ba9e3c33db43d3bc8', 'Send File Message Group'),
(681, '92934943ba9191d2d48685094482dcf6', 'en', '4e2242f221531924f77b7250660af487', 'Params'),
(682, '71c2c200d12cd7c06bcfc026b501bfed', 'en', '7af079b310c5a2756390ee9293336429', 'Get QR Code'),
(683, 'c3fa40ba0f814ca38a05a2471c9c51eb', 'en', '656e25bf267b4ac126c9c16942f1a9ef', 'Send Media & File'),
(684, 'b32febc80ad2b403f8455e6088e188ee', 'en', 'f9f2e76092cf583df80d9699f7da311c', 'Send a text message to a group through the app'),
(685, '594e2e21d00f4b7d2d5d81d289ed3916', 'en', 'f01188535c95b7a9b1723134138b8af1', 'Send a media or file with message to a group through the app'),
(686, '9b5c36b69b66cd7c802fc88d6bee141b', 'en', '4b6df09c2af9db500344d803c5b6e896', 'Just use for send document'),
(687, 'f372ebdcda5f10fead74b92c3fec4a77', 'en', '6b4eb3ba6de1a7c10d8e7fb2e21701c7', 'Create a new Instance ID'),
(688, '7aef61ba55721d6c6009e6952864cf09', 'en', '86f5106a8afa1651361feb8bb5bc00fa', 'Display QR code to login to Whatsapp web. You can get the results returned via Webhook'),
(689, '2106f9a523731768e825f902fd85f28d', 'en', '12dc3bb6844e52b857b1652a8691eb7c', 'Get all return values from Whatsapp. Like connection status, Incoming message, Outgoing message, Disconnected, Change Battery,...'),
(690, 'b47cd471cff32e3f00f3e01558e231aa', 'en', '758428b508c39eb31b94f1355b3d4e17', 'This will logout Whatsapp web, Change Instance ID, Delete all old instance data'),
(691, '0009da518afd6815affcc89151e5c9bf', 'en', '64dfd8f3467d58baaee021f15a51ee68', 'Re-initiate connection from app to Whatsapp web when lost connection'),
(692, '63f7a406bf14fe665d536c332238180e', 'en', 'd06704d0e06644789d11f52e264aad4a', 'Send a text message to a phone number through the app'),
(693, '28b3bb9785c39a9a12c6f6e00971cc4e', 'en', 'a5afd6edd5336d91316964e493936858', 'CONNECTED'),
(694, '35a66745b496eba822729aa84d35ee95', 'en', '18325105de95083e4a1d10b78f29c2bc', 'State:'),
(695, '3dcdddcbd78494e12fb5a3fdac2e2ca6', 'en', 'd94790104779e024f1dade90e0ae907e', '1. Send a message to group you want export participants'),
(696, '789c500af74849d15d9a25a7477bdb4b', 'en', '89c095a6bf41e1dde34fd36d3e19c6f9', '2. Click reload \'Button\''),
(697, 'bbac832df355ec956f25602cd79867c2', 'en', '5bbab8418f43fc6c96a6880b6420689d', '3. Click to group you want export on list'),
(698, 'de7e83ccee954aaed173cb901c89ca6d', 'en', '2f98e4fe333e51f2743f7db5ba106c1e', 'Group ID: '),
(699, '74879afa5c67421eb5039857d9543314', 'en', '3a38ae21768e30d02c4b0b358dd2386b', 'Example template'),
(700, '8fa2f3e333ff5e2ee8373f64828a8e10', 'en', '7deb2d84ca23f82e8a9dcb49589bcfcc', 'E.g. Group ID: 84123456789-1618177713@g.us'),
(701, 'ce71cb9c77898f02e5172685c863ee55', 'en', 'bcb3fb8c93639022a1a0a816c1c9f9b6', 'Upload CSV'),
(702, 'e0c3d057af4b8669bbad77d27d1d0237', 'en', '26836e7913c99cb394b8bc11c1c175dd', 'Import data from CSV'),
(703, 'd688e0a38cf3943c0b74520e54e342ac', 'en', '6fd7ca42c5f96eb894d97abc0133cdf0', 'Import data from form'),
(704, '1d89ce71ffac211533e02ceaaec8e6fa', 'en', '68ec9dafd9208d6348c8a8b047c7bac4', '[LIST MESSAGE TEMPLATE]'),
(705, 'cc3de0e5aab2581208ea160554e8a33f', 'en', '4136cf3cae94f2cd35329e94ddb08f7b', '[BUTTON TEMPLATE]'),
(706, '71ca0352745aaa62c02fbcbe91222c5e', 'en', '39c5b29a0c560c1e85847ddbbfeabbb3', 'Button template'),
(707, 'b6aef40aae83902dc106859ba2ef3158', 'en', 'e8163424232e01ab3e173919c5bd7ec8', 'Select a phone account to get your report, if you have more than 1 account a list will be displayed on the left side'),
(708, '17951e765f6128fc4c7d1935ac0d1201', 'en', '0286cea879221707504170c2a941786e', 'Account List'),
(709, '136618cbce53594e5dfce2f43a02dafe', 'en', 'e12ec42cf81f1b97ba3bc3e99578cbec', 'Select the start date and the end date with the help of the fields shown below.\nAfter that, press the button to start downloading all the messages and campaigns sent from the selected whatsapp number'),
(710, 'f4116cf396b6a683d4860a71874c685b', 'en', '4f2a91e15af2631ff9424564b8a45fb2', 'Start Date'),
(711, 'bba6308b85a9803e6bb8b325350c43ed', 'en', 'beae421a14a34f831c113f61323d1ab3', 'End Date'),
(712, 'e7ec5d950497cdeaca11807cbb9e8818', 'en', '9b1ef68142173de6fc830cfdc44b7cd9', 'Download Report'),
(713, '8b5a00d4ff5bcfc0b7d71c11cd344dc7', 'en', 'b8f8c3e84700edbf7cf51df3d74aa0cc', 'Download bulk report'),
(714, '63a4ca7a9f97edc55a3e91acfd68d84d', 'en', 'aa9bf6fdfd64989d3f49f55e573f90d2', 'Getting Report of Whatsapp Number:'),
(715, 'ebb161a4c7ecee502b22cdcd6ab6d672', 'en', '13aa1bfc6ae9f30180a353c54e97268d', 'Access Token:'),
(716, '9b5925b0ff3233f7140d1f2e5854ace0', 'en', '1076a5e3913969389bb2ef533ee714e1', 'Instructions'),
(717, 'b8fe37b86399cc601226c8e63fb11495', 'en', '2a304a1348456ccd2234cd71a81bd338', 'link'),
(718, 'a485aaa313278898dfc00b2642eb5a4d', 'en', '9037477e86252b3488dcf0048ea0432a', 'Whastapp Link Generator'),
(719, '30ffc6c0f26b87cca351a12c63bc9b48', 'en', 'd38cf552b9a0fb2425951212be2d5faf', '<p>Select the account on left side, this open a page with controls to generate the link. If you not have logged phone, first add one on main menu</p>'),
(720, 'bcba26a4e7a38edd4ce5e118201aadbd', 'en', '370db3b7d0fabd12f31c08eeecdbbabd', 'Generate Link For Whatsapp Number'),
(721, '4b596b6e69823678321e0e5b50688596', 'en', '3d0076fca662290f4436616a39103160', 'Write here your message'),
(722, 'dcd1267c40127e910683d157511e7333', 'en', 'fe507684850c9ba1b0562d712fd34236', 'you can copy the text below to embed it on your web page, this will generate a floating button on the bottom right side of your page'),
(723, 'c6bcac7ce1a56076e397488b032a4425', 'en', '5fb63579fc981698f97d55bfecb213ea', 'Copy'),
(724, '4c1fd23eb65420028e3ddb990a891341', 'en', '70361085cbd4a986d27d8821264d72cf', 'Link generator for  %s'),
(725, '9de2948c96f15fcb727fac0d0ec73eea', 'en', 'f92aca3d8bac1fb4ae9f36a764e9e2f4', 'Embeded Code'),
(726, '4d94ac6d1d5669803f2475d605af8238', 'en', 'fb07b027d8d8c04f512f1a6a0f7bc365', 'Image Box'),
(727, '2dbabcd31e5ee77a85e86adb6bb98814', 'en', '3238ccfaedfcd30ed5782ac96829df02', 'Image Strip'),
(728, '290f2bf75dc05f2668c563e28d0b5025', 'en', 'e84970671afe6c917c7876e54a2e54bf', 'Label Box'),
(729, '45e159fb26282a9e15f22787b073c643', 'en', '54ec56c5605802ef16edab82ae6b0961', 'Label Strip'),
(730, '34e56e3c1da5101007bc44bda516f21b', 'en', '960b44c579bc2f6818d2daaf9e4c16f0', 'Normal'),
(731, '45e41540eaaf94f62c3163810de7cbc7', 'en', '4136a932eb7724a00cb87c3fb9e1ea1d', 'contacts'),
(732, 'aaa4e3ba8d9f870242ce1e4b4a9ffb38', 'en', '1aa6328b2c9a782c05b8f0493a1b69da', 'Estimation time:'),
(733, '7e0245b27329a8ba68f0c5466d0ad596', 'en', '4eb7f4eccd9c868fb2bea1925220bd45', 'Use more numbers?'),
(734, '5f2dd75429450299e45d2754e8d4ea3d', 'en', '709b76b712fb6a995a43604cc4c78f6a', 'Extra Phones'),
(735, 'f2935246f0ee30b288b4532ffbcec725', 'en', '611315a5b41d46f578507d41b1f22e9f', 'please, select the other phones'),
(736, '9eabae4ceaa88f8aeff9136baf569c54', 'en', 'bd9adc5908319fb6c1c1866f0252f64b', 'Import data from Excel File'),
(737, '58bac1c7754b365989af292cc5d870a2', 'en', 'e9c77c89440567f97f145b874a1e318a', 'You can download and try with a sample template. Only .xls and .xlsx are allowed.'),
(738, '5ea2414f2f1bd9e2766fbc5c3c8a25a2', 'en', 'fbb7d71920afdff488c3514f3f99fe7c', 'Upload File'),
(739, 'e3dd59c74b10f0a6494f0b76303a60af', 'en', '0da6ebbcd452e676a5a90bab7c6d122b', 'You are using the monthly payment plan. Cancel it if you want to change the package or change your payment method.'),
(740, 'b415ea23cc4264490bb6ab675a751648', 'en', 'e7f9e382dc50889098cbe56f2554c77b', 'Credit card'),
(741, '1bcca65edff2780c795f41a7f40602f3', 'en', 'd930dbf4a7092e01caddb358c8f20bac', 'Recurring payment'),
(742, '25f362195c018cfe3e8f623c2eb3d41a', 'en', '063177afa76e5ace75cdd949e31537b3', 'Webhook URL:'),
(743, '0711015bdf8bc374059d15c393624218', 'en', '6ba5ab09fb8f1e50e1cd8cd8a5211a40', 'Signing secret'),
(744, 'b687f3640f3edda3cdcd5ff9b505e5bc', 'en', '20cd8258e5c60576209b7882df90b892', 'Stripe recurring'),
(745, '1722ac20766c8040305de86221166db7', 'en', '5d97f409d103a5f78ffaddd4df0a760e', 'Stripe recurring payment'),
(746, '1cabc1e2b22d57a235d1ec85449ae630', 'en', 'f2c79c6a576b2bfcd959b9e3b21dc91b', 'Required events:'),
(747, '57cd9bd7e6c02d152c255a75125d1315', 'en', 'ce7566d1d08cc094b74cf283cf9c56a5', 'Stripe'),
(748, '18e89e855f08878e3d6e56e9e806b93e', 'en', '39ab9f043b9b9009ae8f7213eb7614d0', 'One-Time payment'),
(749, '6a2ed06c98a94889e2e5aade3dba8446', 'en', '795c295850f9ab743fe152710fe3b6d2', 'Stripe one-time payment'),
(750, '1746e2e7c4148b287100a064a82a9010', 'en', '30ca9973e71cc47268616e139765f5df', 'Publishable key'),
(751, '2eba64d8bf5a1861cd96772c11c9da84', 'en', '952bf87c967660b7bbd4e1eb08cefc92', 'Secret key'),
(752, 'c580153bcd56685d7ba8bdfb3c6295d3', 'en', '9b88c95a15e018c3f8038a7d0160145c', 'Paypal'),
(753, 'f36adac3a4f1fd0cba1ca7e89e1e72d8', 'en', 'e73b6267f5e52fb65cbaedfcce14f8a4', 'Paypal one-time payment'),
(754, '32739653a7b9064cde61ed5990d84a25', 'en', '76525f0f34b48475e5ca33f71d296f3b', 'Client ID'),
(755, '897da9b99a3952c11ff54230e72d8503', 'en', 'b099b0755ee4358378a0aee7efbe6ea6', 'Client secret key'),
(756, '027be8f4f95fd09aa2434a978069c94a', 'en', '343bba3bf02c060f54134b00aabdc176', 'Paypal recurring payment'),
(757, '5fe088de63aab5ab8eaa65e3b715320b', 'en', 'f8fdcf706b2295f2972e81d2d6eae33e', 'Webhook ID'),
(758, 'fbf3a52f3e6b3098096bd4dfeec8258d', 'en', '5e36872c2e7cbb322d5aadbb33208a19', 'Paypal recurring'),
(759, 'b2018e9d6f1579cf75f6e1c21d2fa248', 'en', '14b02fbda483f193ed3232515257c6ee', 'Payment manager'),
(760, 'a3fa5befa44a44c796048d6957abb55f', 'en', '5b031d9588bc9142305e6cc85745cea7', '%s payments'),
(761, 'a9e897135b973bd88a00e87b76e26348', 'en', 'f802b5e20362c90aaa218216bccae18b', 'Payment report'),
(762, '8b90f8bcaa1939246800b071ed751f55', 'en', '822f9ce71a0c9a7aac8f6a7555cde98a', 'Find Results'),
(763, 'f95a694226b1170166bc2d020b0b7282', 'en', '7002d805a311583c3914e6c02a368848', 'Earning today'),
(764, '5ec935f4806df518938ccd0b3c3612c6', 'en', 'dc54e41512ad584904e30f0db7269030', 'Total earning today'),
(765, '848ac45ff1b0f32fb0f8655cd7df1bc8', 'en', '6328ad1793f2873e2aa9ae2f1964afb6', 'Earning this month'),
(766, 'ba61a7cb7f61ead1dfab5940508d1e5a', 'en', 'ff9dad3f3861fea98bb52a535af32e18', 'Total earning of this month'),
(767, 'dc4a59f4543e095950e1594086095777', 'en', '267f4b0573f19cb3ca91e85bc0fa53a9', 'Earning this year'),
(768, 'd203d5ec3b34cb209222e2952cced0b1', 'en', '718423462cb4edeb438b4ede039a8b02', 'Total earning of this year'),
(769, '83ea5e74c0ec4c1d921e6b9fd695972c', 'en', '6ecdeeece7dc4ee366197ea2e4b6b778', 'Payment history'),
(770, '7088b73fbc1207757089b99148bd629e', 'en', 'e1d79f804064a2d13b6d3caef638a3e1', 'Recently payments'),
(771, '98b4c69ffc2f65162438fd4eca62d67b', 'en', 'd304c853c515ea96a60b5ad81330bec7', 'New payment'),
(772, 'ccf996d472d27d795e4c16dd3f58d027', 'en', 'f23405b7f8242157f8cf3d1dcebe1d0b', 'Package name'),
(773, '7f9b6abdcdbaf58195e2ac4fdf258d9e', 'en', '88427ec035734b45aae9f7d8859a5008', 'Transaction ID'),
(774, '06b260b46a7cb03d5de1e94ee225388b', 'en', '0b6cbdf7ad2928078f1600a3e8979485', 'Plan'),
(775, '16ca222f95885f04d19fb1222a1ed2f3', 'en', 'b2f40690858b404ed10e62bdf422c704', 'Amount'),
(776, '395c3a753a228558161f6c506afee30e', 'en', 'a944f36e784aa5b002c5b625255aff09', 'Anually'),
(777, 'c47f0c2889d0d57c163dad339c06cead', 'en', '69676703a914469feb6b23afdfeccb73', 'Monthy'),
(778, '23c202edde01df90be33bdcb4c56e3af', 'en', 'c453a4b8e8d98e82f35b67f433e3b4da', 'Payment'),
(779, '39103bfb03587ae8205ba1e4da8f3f39', 'en', '5344abf359658030a2d3a0d8582939f1', 'Make a payment'),
(780, 'e91f2d811d83919eb5de3ac5fa49003d', 'en', 'f0aaaae189e9c7711931a65ffcd22543', 'Payment method'),
(781, '543e408f507efd4cf3c0b8ca617b77a0', 'en', '0ba29c6a1afacf586b03a26162c72274', 'Environment'),
(782, 'a131739a0880f4275bdf100a24112f6d', 'en', '955ad3298db330b5ee880c2c9e6f23a0', 'Live'),
(783, '49629cd3102ecc5723ff7c93e2309977', 'en', '2652eec977dcb2a5aea85f5bec235b05', 'Sandbox'),
(784, 'c9b72d003466abc2a9a66f1f210271d9', 'en', '386c339d37e737a436499d423a77df0c', 'Currency'),
(785, 'ed110929e44f8c982d28deecd2c92932', 'en', '02c86eb2792f3262c21d030a87e19793', 'Symbol'),
(786, '2fdff80a99720da177059f604684dd1c', 'en', 'bd9317b7a60e68ad016948c610434536', 'Payment successfull'),
(787, '603e2dc47789c5faff62e77ce86078f8', 'en', 'a8b0b6e79906227ea301b0da9c4856fe', 'Thank you for your payment'),
(788, 'a92a5f9087d7a9fa988d656253dbe318', 'en', '4d282591c955d8bc20dfd39697b5c858', 'Now everything is ready for you to use. Enjoy and start your plan.'),
(789, 'a517decfeece6ae2d3c128ec802b9b2a', 'en', 'd19e8ab738bcb64f6c960a6ee116b3b5', 'Go to Dashboard'),
(790, 'f238a5457c7ea662d85cf6b63dcc41ca', 'en', 'be16c05ac4f3fe7dacd8c043408d2876', 'Payment unsuccessfull'),
(791, '4f2782afeb419d3718b19a8c165aac36', 'en', '44f85b0df0968262cbcb235077ee0df0', 'The payment could not be completed'),
(792, '7added6d05e94aa30ba914c8490bef0e', 'en', 'ba4a0818e4f31cacbe54dfd5623bba24', 'An error occurred during checkout. Please try again'),
(793, '3e7f11e666e15d276aff7e63475b9068', 'en', '220986ee8c6bf1df56d9523fc49c69de', 'Try to again'),
(794, '0026c2cf3409c5d063042ae59d6198a2', 'en', '4935ede30a688b922153c6abc8d48e14', 'Total Payment'),
(795, '98356ee60bb3b03268597271de6d547f', 'en', 'ae0f0ee500f276dfe48da9af0e355b19', '%s Plan'),
(796, '535baa5512c7aa7eeab46e0974b1413c', 'en', '3c8804f76c811b866799bf7395ba0d5e', '%s must be greater than or equal to %d'),
(797, '34d2fac9150ec1056acc605cfea7fd3f', 'en', 'd752d55564884bc7d2553fcb4349545e', '%s must be less than or equal to %d'),
(798, 'b01967f9c92165f98674cf176893893f', 'en', 'fbb97a70df6d31b261522b4e4efd8931', '%s must be greater than or equal to %d characters'),
(799, 'c733eb61e27321720de629425c070078', 'en', '174931d77057c088429293427fa55100', '%s must be less than or equal to %d characters'),
(800, '3bc193b3085503645c95a1141f2f9206', 'en', '6be8d0d88059ff45ce8cb4cccdcc87d8', 'Email is not a valid email address'),
(801, '4b76f3029272901efc0005795e57e1d9', 'en', '7f95cd29f2c891b41cb8e897d9e12abb', 'The url is not valid'),
(802, 'b3774a51cb54e30e33275d4c0057c7e9', 'en', '08fd023c3bb47edd3b4f479417033c66', '%s must be an string'),
(803, '8788ce9828f10dcfabf5968f401cdd72', 'en', '53f50d262844a53a16311cd390e5592a', '%s must be an array'),
(804, '7f50c8cca48ee1576881ec74807548b7', 'en', 'c18874bf61b61cd1df0e05ce4de604ac', '%s must be an object'),
(805, '1aca3c562358f7c3fc4730afca6cc46b', 'en', '031c9ec0462b55c807d234e381c6d445', '%s must not be an string'),
(806, 'c2eb74fe2cc5759e9cad5bba97b3f50a', 'en', 'b9303283aed54d71577caef6a6a23db4', '%s must not be an array'),
(807, 'f55070eade708ebea7e3f7b27a39686f', 'en', 'eb7c06de8f198b7297b76a9d563fa9ae', '%s must not be an object'),
(808, '61d3346c8769d170eeb81755fad705a1', 'en', 'a75e7fda54ac0884c2979fbfac5e23a5', '%s is required');

-- --------------------------------------------------------

--
-- Table structure for table `sp_language_category`
--

CREATE TABLE `sp_language_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `name` mediumtext DEFAULT NULL,
  `code` mediumtext DEFAULT NULL,
  `icon` mediumtext DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_options`
--

CREATE TABLE `sp_options` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_options`
--

INSERT INTO `sp_options` (`id`, `name`, `value`) VALUES
(1, 'website_title', 'DoniaWeB #1 Whatsapp Cloud Platform'),
(2, 'website_desc', 'Today we are serving 1500+ Happy Businesses and 100 Mn+ Conversations exchanged via Wozto! But this is just the beginning of a long and exciting journey. There’s a lot more interakting left to do!'),
(3, 'website_keywords', 'DoniaWeB'),
(4, 'website_favicon', 'https://welcome.waziper.com/inc/themes/backend/default/assets/img/favicon.png'),
(5, 'embed_code', ''),
(6, 'website_black', 'https://welcome.waziper.com/inc/themes/backend/default/assets/img/logo-black.png'),
(7, 'signup_status', '1'),
(8, 'social_page_facebook', ''),
(9, 'social_page_instagram', ''),
(10, 'social_page_twitter', ''),
(11, 'social_page_youtube', ''),
(12, 'social_page_pinterest', ''),
(13, 'google_recaptcha_status', '0'),
(14, 'facebook_login_status', '0'),
(15, 'google_login_status', '0'),
(16, 'twitter_login_status', '0'),
(17, 'license', 'iELXEyL6cEG+aBR7gf83e4kLSSa4b0rcKMBl/ErZsqhroolljWDj9vsqSTDJ4cFeHRfR6/ZESTnZEw9BTehCsw7voiwpJ461Ae4/3Zuz+AA='),
(18, 'beamer_status', '0'),
(19, 'format_date', 'd/m/Y'),
(20, 'format_datetime', 'd/m/Y g:i A'),
(21, 'file_manager_google_drive_status', '0'),
(22, 'file_manager_onedrive_status', '0'),
(23, 'appearance_default_menu', '0'),
(24, 'appearance_menu_color', 'light'),
(25, 'website_mark', 'https://welcome.waziper.com/inc/themes/backend/default/assets/img/logo-black.png'),
(26, 'appearance_icon_color', '0'),
(27, 'file_manager_dropbox_status', '0'),
(28, 'current_verions', '2af72f100c356273d46284f6fd1dfc08'),
(29, 'whatsapp_server_url', 'https://api.whatsai.in/'),
(30, 'signup_email_verification', '0'),
(31, 'email_activation_subject', 'Hello {full_name}! Activation your account'),
(32, 'email_activation_content', '<p>Welcome to {website_name}!<br />\r\n<br />\r\nHello {full_name},<br />\r\n<br />\r\nThank you for joining! We&#39;re glad to have you as community member, and we&#39;re stocked for you to start exploring our service.<br />\r\nAll you need to do is activate your account:<br />\r\n{activation_link}<br />\r\n<br />\r\nThanks and Best Regards!</p>'),
(33, 'email_protocal', '1'),
(34, 'email_from', 'support@doniaweb.com'),
(35, 'email_name', 'doniaweb.com'),
(36, 'landing_page_status', '1'),
(37, 'beamer_product_id', ''),
(38, 'email_smtp_server', ''),
(39, 'email_smtp_port', ''),
(40, 'email_smtp_encryption', 'none'),
(41, 'email_smtp_username', ''),
(42, 'email_smtp_password', ''),
(43, 'email_welcome_status', '0'),
(44, 'email_payment_status', '0'),
(45, 'email_renewal_reminders_status', '0'),
(46, 'email_welcome_subject', 'Hi {full_name}! Getting Started with Our Service'),
(47, 'email_welcome_content', '<p>Hello {full_name}!<br />\r\n<br />\r\nCongratulations!<br />\r\n<br />\r\nYou have successfully signed up for our service.<br />\r\nYou have got a trial package, starting today.<br />\r\nWe hope you enjoy this package! We love to hear from you,<br />\r\n<br />\r\nThanks and Best Regards!</p>'),
(48, 'email_forgot_password_subject', 'Hi {full_name}! Password Reset'),
(49, 'email_forgot_password_content', '<p>Hi {full_name}!<br />\r\n<br />\r\nSomebody (hopefully you) requested a new password for your account.<br />\r\nNo changes have been made to your account yet.<br />\r\n<br />\r\nYou can reset your password by click this link:<br />\r\n{recovery_password_link}.<br />\r\n<br />\r\nIf you did not request a password reset, no further action is required.<br />\r\n<br />\r\nThanks and Best Regards!</p>'),
(50, 'email_renewal_reminders_subject', 'Hi {full_name}, Here\'s a little Reminder your Membership is expiring soon...'),
(51, 'email_renewal_reminders_content', '<p>Dear {full_name},<br />\r\n<br />\r\nYour membership with your current package will expire in {days_left} days.<br />\r\n<br />\r\nWe hope that you will take the time to renew your membership and remain part of our community. It couldn&#39;t be easier - just click here to renew: {pricing_page}<br />\r\n<br />\r\nThanks and Best Regards!</p>'),
(52, 'email_payment_subject', 'Hi {full_name}, Thank you for your payment'),
(53, 'email_payment_content', '<p>Hi {full_name},<br />\r\n<br />\r\nYou just completed the payment successfully on our service.<br />\r\nThank you for being awesome, we hope you enjoy your package.<br />\r\n<br />\r\nThanks and Best Regards!</p>'),
(54, 'website_white', 'https://welcome.waziper.com/inc/themes/backend/default/assets/img/logo-white.png'),
(55, 'file_manager_medias_per_page', '36'),
(56, 'file_manager_design_bold_status', '0'),
(57, 'file_manager_design_bold_app_id', ''),
(58, 'file_manager_google_api_key', ''),
(59, 'file_manager_google_client_id', ''),
(60, 'file_manager_dropbox_api_key', ''),
(61, 'file_manager_onedrive_api_key', ''),
(62, 'enable_ssl', '1'),
(63, 'terms_of_services', '&lt;p&gt;Updating...&lt;/p&gt;'),
(64, 'privacy_policy', '&lt;p&gt;Updating...&lt;/p&gt;'),
(65, 'signup_change_email_status', '0'),
(66, 'google_recaptcha_site_key', ''),
(67, 'google_recaptcha_secret_key', ''),
(68, 'facebook_login_app_id', ''),
(69, 'facebook_login_app_secret', ''),
(70, 'facebook_login_app_version', 'v9.0'),
(71, 'google_login_client_id', ''),
(72, 'google_login_client_secret', ''),
(73, 'twitter_login_consumer_key', ''),
(74, 'twitter_login_consumer_secret', ''),
(75, 'paypal_status', '0'),
(76, 'paypal_client_id', ''),
(77, 'paypal_client_secret', ''),
(78, 'paypal_recurring_status', '0'),
(79, 'paypal_recurring_webhook_id', ''),
(80, 'stripe_status', '0'),
(81, 'stripe_publishable_key', ''),
(82, 'stripe_secret_key', ''),
(83, 'stripe_recurring_status', '0'),
(84, 'stripe_recurring_webhook_id', ''),
(85, 'payment_environment', '0'),
(86, 'payment_currency', 'USD'),
(87, 'payment_symbol', '$'),
(88, 'support_info', '1'),
(89, 'support_back_color_list_icon', '7D7D7D'),
(90, 'support_text_color_list_icon', 'FFFFFF'),
(91, 'support_back_color_icon', '3CDE90'),
(92, 'support_text_color_icon', 'FFFFFF'),
(93, 'support_faqs', '1'),
(94, 'support_email_create', '1'),
(95, 'support_email_reply', '1'),
(96, 'support_email', ''),
(97, 'email_support_create_subject', '#{id_ticket} New Tiket! {full_name} it needs your help.'),
(98, 'email_support_create_content', '<p><strong>Hello {full_name} has created a new ticket in {website_name}.</strong></p> <blockquote> <p>{text_ticket}</p> </blockquote> <p>Enter now in the Support Center to see your ticket and respond to it.<br /> <a href=\"{support_link}\">{support_link}</a></p>'),
(99, 'email_support_reply_subject', '#{id_ticket} {full_name} has answered the ticket!'),
(100, 'email_support_reply_content', '<p><strong>Hello, {full_name} has answered the ticket!</strong></p> <blockquote> <p>{text_ticket}</p> </blockquote> <p>Enter now in the Support Center to see your ticket and respond to it.<br /> <a href=\"{support_link}\">{support_link}</a></p>'),
(101, 'frontend_theme', 'wimax'),
(102, 'cron_key', '63230d20df27c'),
(103, 'apiurl', ''),
(104, 'apiinstance', ''),
(105, 'apitoken', ''),
(106, 'razorpay_status', '1'),
(107, 'otpmessages', '');

-- --------------------------------------------------------

--
-- Table structure for table `sp_package_manager`
--

CREATE TABLE `sp_package_manager` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `name` mediumtext DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `price_monthly` float DEFAULT NULL,
  `price_annually` float DEFAULT NULL,
  `number_accounts` int(11) DEFAULT NULL,
  `trial_day` int(11) DEFAULT NULL,
  `popular` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `permissions` mediumtext DEFAULT NULL,
  `data` mediumtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_package_manager`
--

INSERT INTO `sp_package_manager` (`id`, `ids`, `name`, `description`, `type`, `price_monthly`, `price_annually`, `number_accounts`, `trial_day`, `popular`, `position`, `permissions`, `data`, `status`, `changed`, `created`) VALUES
(1, 'de39a2bd85b84b38207378229620a5f1', 'Free', 'Pick great plan for you', 1, 0, 0, 3, 3, 0, 0, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"100\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL, 1, '2022-11-26 11:13:11', '2019-11-20 22:11:25'),
(7, 'f92e5d5e5267505402e501fe7f51a1cd', 'Diamond', 'Pick Great Plan For Beginners', 2, 100, 1000, 10, 0, 0, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"500\",\"whatsapp_bulk_max_phone_numbers\":\"50000\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"10000\",\"payment_manager_enable\":\"1\",\"support_enable\":\"1\",\"user_manager_enable\":\"1\",\"settings_enable\":\"1\",\"social_network_configuration_enable\":\"1\",\"language_enable\":\"1\",\"package_manager_enable\":\"1\",\"faqs_manager_enable\":\"1\",\"file_manager_enable\":\"1\",\"max_storage_size\":\"1000\",\"max_file_size\":\"1000\",\"cronjobs_enable\":\"1\",\"coupon_manager_enable\":\"1\",\"caption_enable\":\"1\",\"blog_manager_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"10\"}', NULL, 1, '2022-11-26 11:20:07', '2022-11-26 11:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `sp_payment_history`
--

CREATE TABLE `sp_payment_history` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `package` int(11) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `plan` int(1) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_payment_subscriptions`
--

CREATE TABLE `sp_payment_subscriptions` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `package` int(11) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `subscription_id` text DEFAULT NULL,
  `customer_id` text DEFAULT NULL,
  `plan` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_purchase_manager`
--

CREATE TABLE `sp_purchase_manager` (
  `id` int(11) UNSIGNED NOT NULL,
  `ids` text DEFAULT NULL,
  `item_id` text DEFAULT NULL,
  `purchase_code` text DEFAULT NULL,
  `version` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_sessions`
--

CREATE TABLE `sp_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_sessions`
--

INSERT INTO `sp_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('13acd0f55547220d5b5913598e195be92e7b99f5', '104.28.157.138', 1669439006, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393030363b),
('6b432c45c1fc07a8a11d5951fb4f655f5519c2c2', '91.90.120.14', 1669438665, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433383636353b),
('016bf69f99b90185bed1d82d7350ebde0b37bef8', '91.90.120.14', 1669438666, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433383636363b),
('2108c81d6b8eb7e84d00378b7425454982d04cad', '91.90.120.14', 1669438666, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433383636363b),
('6b8c3130be7fe29e62572d950c8e33251096904d', '91.90.120.14', 1669438666, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433383636363b),
('q4gob6ik0sv5f3t58i29091rnshp84i1', '180.94.34.73', 1669300889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303838393b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('fii4phaab2adnkm7kp8vkkhibtt1c6j5', '180.94.34.73', 1669300516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303531303b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('s5dn6rr751l7ic6hcjik6ubs8acj25u7', '180.94.34.73', 1669300553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303535303b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('oq2l15t29lf8m75cd0ac0g6iutde19os', '180.94.34.73', 1669300663, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303636303b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('bs0m79rbpdbd57cvkv1lb5otn4ih9l7s', '180.94.34.73', 1669300740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303733333b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('0pic39fltlepqvna2jifm4itv8dev27u', '180.94.34.73', 1669301534, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330313533343b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('nm6lsu6tn7mn4cj4a4gofsbaisjvuaud', '180.94.34.73', 1669302076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330323037363b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('t8nb95bvrcm3l5cqit065evsi6s2chad', '180.94.34.73', 1669302316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330323037363b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('d37007cfd413e05ee1882f7fd50a5d9d17e4a50b', '180.94.34.73', 1669281285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313238353b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('b861ee261b6e65878d162de5725799864d230c55', '5.161.78.109', 1669281001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313030313b),
('7fd4676e9bb3a234452aee86241d9ce952b25ca0', '180.75.236.30', 1669281034, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313033343b),
('de8d2d309f5a9ae683304ea120d451f1175f37d7', '5.161.78.109', 1669281062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313036323b),
('454d74b099a899828fb6d4bbd392f6467f88f832', '5.161.78.109', 1669281122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313132323b),
('e74ddc070f624098c7361126899b3b0d9bf4cd83', '5.161.78.109', 1669281182, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313138323b),
('99a9aad94a4a59f2fd44ebb41ea4ecd21bfadf03', '5.161.78.109', 1669281242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313234323b),
('b1ab1ff83f967858bfa1a6155a3f58da4c5bc7f6', '180.94.34.73', 1669281300, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313238353b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('812ea3ebef1db865b351b6938896d00d44db9ade', '5.161.78.109', 1669281302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313330323b),
('d16d1ompnjp7dpcnbg76nakbcu4hj93i', '180.94.34.73', 1669302190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330323138393b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('74c77b4be2c658fef7bbfd04393541c499ad7abf', '104.28.157.138', 1669439315, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393331353b),
('7848424cb26c2b3b6724baaa9d9f6c2177c6a90b', '164.90.241.135', 1669439078, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393037383b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('22062cbc578969c85c3f0676955b27f225b679e2', '164.90.241.135', 1669439626, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393338383b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('4b3aa96f8deeaf63d8115f69e1a5cb14f40acbc2', '212.102.35.155', 1669439079, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393037393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('35a6f91be239748dbbadcbc3c03ad3011f10a4bd', '74.80.181.149', 1669439520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393531393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('2cc9f55fc15e1d4174f4d27d97385176f5c71351', '165.231.253.250', 1669439079, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393037393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('47340de1213d6e3e74f7b620177236124350035f', '185.108.106.202', 1669439079, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393037393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('76690c1b85963d0650585fe7e59214fcc50f0266', '164.90.241.135', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393037393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('82775222f92031ffe179e0a5dc7fe1de52fadc25', '212.102.35.155', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393037393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('11bb1fcb767187fc188ac1223bd00d2eea9e2948', '164.90.241.135', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393037393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('78805dd0f1b70e77fc52b589d89e563ea678d4a3', '185.108.106.202', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393038303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('4330fd582a72b8967ae3c40ad9365a541e117785', '165.231.253.250', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393038303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('7e52563c3fc8016cd80555f3f4d547169821c974', '165.231.253.250', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393038303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('7c13dd49d09faa9d9857132910601239ef2b6033', '74.80.181.149', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393038303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('2ace901ae1d424b39063e1a970a4af5cff192f18', '74.80.181.149', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393038303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('4f9132818a9e6d154c70c6b599c585fcbe8b4ba6', '165.231.253.250', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393038303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('e9998c2c8759455af4fb0e03ec6fd4dd841da9c4', '74.80.181.149', 1669439080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393038303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('5276ac19c6516b5151a8f6d1904c116a97410321', '104.28.157.138', 1669439326, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393331353b),
('5fd441e2ebd94c87df7bc366b6f6daeda616aa04', '212.102.35.155', 1669439388, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393338383b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('78ee206ea064c14619b9b295c55d467c210ebfa7', '161.35.246.138', 1669439519, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393531393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('2b148f2c9b7ecd8e09e838c86043a1acb906be59', '212.102.35.155', 1669439629, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393632373b),
('8a5ffb2991e0548c61e2146fec83756569ed3e87', '212.102.35.155', 1669439715, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393636333b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('0191b40a1e53cd34ae4d067d1f592951be712079', '159.223.109.111', 1669439701, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393730313b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('54fa832aa6b18cb2667d11f7bd8a2872ffed8494', '147.182.170.23', 1669439702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393730323b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('216c73bb3389f1163f538fdf6e2088ba7bab11e2', '159.223.109.111', 1669439702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393730323b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('951cf10efff39a067a735ac589c32ba2fc6ac963', '147.182.170.23', 1669439703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393730323b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('89d99ed3de3a73d49698c1bf83b04422dedaea5c', '137.184.244.5', 1669439785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393733303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31393a22416d65726963612f4c6f735f416e67656c6573223b),
('384f8ca18c1262cf5a461b8b36e14012841f272b', '68.183.245.101', 1669439848, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393830323b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31323a22417369612f4b6f6c6b617461223b),
('86e4908a93d217393e67732fcf9037176e0cfc32', '20.51.70.19', 1669439816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393831323b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('fa2cd2c8e2f3c20c2f9b92f40c3677f585b88c17', '74.80.181.139', 1669439893, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393833373b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31353a22416d65726963612f4368696361676f223b),
('c51c270e034f9d4a44acdd4353c9642693f0fed9', '206.189.247.132', 1669439966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393930373b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31333a224575726f70652f4c6f6e646f6e223b),
('ef7bc31a37a030145a911af0dcb6938229e8bae5', '161.35.246.138', 1669440038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393433393938323b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31363a224575726f70652f416d7374657264616d223b),
('11fe7aec99e55e3278a7583c8baeb1ee22ff4d3f', '148.113.142.65', 1669440571, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303536393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('94c1c9ca3efd77c6e98f893dfca3939a173770d5', '148.113.143.65', 1669440573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303537313b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('q4gob6ik0sv5f3t58i29091rnshp84i1', '180.94.34.73', 1669300889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303838393b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('fii4phaab2adnkm7kp8vkkhibtt1c6j5', '180.94.34.73', 1669300516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303531303b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('s5dn6rr751l7ic6hcjik6ubs8acj25u7', '180.94.34.73', 1669300553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303535303b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('oq2l15t29lf8m75cd0ac0g6iutde19os', '180.94.34.73', 1669300663, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303636303b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('bs0m79rbpdbd57cvkv1lb5otn4ih9l7s', '180.94.34.73', 1669300740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330303733333b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('0pic39fltlepqvna2jifm4itv8dev27u', '180.94.34.73', 1669301534, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330313533343b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('nm6lsu6tn7mn4cj4a4gofsbaisjvuaud', '180.94.34.73', 1669302076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330323037363b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('t8nb95bvrcm3l5cqit065evsi6s2chad', '180.94.34.73', 1669302316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330323037363b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('d37007cfd413e05ee1882f7fd50a5d9d17e4a50b', '180.94.34.73', 1669281285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313238353b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('b861ee261b6e65878d162de5725799864d230c55', '5.161.78.109', 1669281001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313030313b),
('7fd4676e9bb3a234452aee86241d9ce952b25ca0', '180.75.236.30', 1669281034, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313033343b),
('de8d2d309f5a9ae683304ea120d451f1175f37d7', '5.161.78.109', 1669281062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313036323b),
('454d74b099a899828fb6d4bbd392f6467f88f832', '5.161.78.109', 1669281122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313132323b),
('e74ddc070f624098c7361126899b3b0d9bf4cd83', '5.161.78.109', 1669281182, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313138323b),
('99a9aad94a4a59f2fd44ebb41ea4ecd21bfadf03', '5.161.78.109', 1669281242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313234323b),
('b1ab1ff83f967858bfa1a6155a3f58da4c5bc7f6', '180.94.34.73', 1669281300, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313238353b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('812ea3ebef1db865b351b6938896d00d44db9ade', '5.161.78.109', 1669281302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393238313330323b),
('d16d1ompnjp7dpcnbg76nakbcu4hj93i', '180.94.34.73', 1669302190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393330323138393b3933656536643338623230323937647c733a31303a2232352d31312d32303232223b),
('6f938174c82df19328f5f092323efc9df337fba0', '104.28.157.138', 1669440968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303830323b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('2fbbcd64784b2cd4a8fcf35b0918b4fc1dfb4c1e', '3.72.8.11', 1669440829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303832393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('c4bc3f65aada49b79cb758bff23b66219c8ecd39', '84.17.42.24', 1669440829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303832393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('d5e6f8ab1e93dbf2aff995a9a00c4ab7d4884ac5', '165.231.253.250', 1669440830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303833303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('36346bc95f8486752f2b5a1d866e8fd7860e6d24', '66.115.176.27', 1669440830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303833303b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('6dbee4088cf3a55ad0bce7bc95bb223f41278cbb', '109.201.130.26', 1669440831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303833313b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('ce986645c27fb920610f77f66676b337dfff2c5c', '45.133.173.3', 1669440832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303833313b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('2f3d37669745b00fc386da7cf7b86a40e6cbedbd', '64.145.93.26', 1669440832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303833313b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('644d8e6540343821bc54166815fc6647a21fae26', '104.28.244.9', 1669440975, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303937333b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('7486b14807ac76a9ce9ec7b6e4cb9f31057ce8e5', '20.79.223.156', 1669440996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303939353b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('5d2858f1dfa98b0ebe3507607b0a13bd773ae881', '193.36.118.232', 1669440996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303939363b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('1460fc3990a2d0d1f46f89d51433bf1b195877ef', '216.24.216.242', 1669440996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303939363b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('bc59e6e059c6cd08d9a056e85c83188eb5d32912', '23.172.112.227', 1669440997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303939373b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('d5455d9f764074cf684f37c6547f640aa7f2a01d', '23.83.130.183', 1669440997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434303939373b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('cc13299fa8874cfb412fe8658f4a8f4a0c7227f2', '104.28.244.9', 1669441145, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313133313b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b),
('96f80cd985a27fcaa7bfcfbeff583e0dbcdde00f', '45.133.173.3', 1669441136, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313133363b),
('0d4e3a3d24bb5edbf6a4fd1495f19467e6854033', '5.62.41.139', 1669441136, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313133363b),
('9cab72d5b5d26035e19fdac00b58c8370612302e', '192.200.158.221', 1669441137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313133373b),
('5ee8dfdee338d35690befaaa948956c83be790e3', '45.133.173.3', 1669441149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313134393b),
('c899a8b5b53ec5e04ee8f5bf9e4a180bd1815260', '45.133.173.3', 1669441149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313134393b),
('1b70d102aa2dcf389883a5b43d6d6a79f3f9ef35', '104.28.244.9', 1669441498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313439383b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31323a22417369612f4b6f6c6b617461223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('817a32c6d6a4616f20885b70dbb0138a3d55b885', '20.79.223.156', 1669441223, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232333b),
('204a33136c822ccd4a43aa184c39389416f543d1', '23.83.130.183', 1669441224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232343b),
('86f83b109ed2c9755be68c62e2fd77f7c76f17c5', '193.36.118.252', 1669441227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232373b),
('8b0aed3db29b7e1955a45e1a2424ed26393eec82', '216.24.216.234', 1669441227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232373b),
('15757f6924a1df92a4041f83f4e4633feb8f4bed', '23.83.130.183', 1669441228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232383b),
('3cb9ec89a3d442f9fa86ae42650a22d1d26c08b2', '23.172.112.227', 1669441228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232383b),
('072d566c89434545d5af21c985bbb9cc433669ab', '193.36.118.252', 1669441229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232393b),
('0eeff613f8d66ce152c6211e2251cd55afe30aad', '193.36.118.252', 1669441229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313232393b),
('40c3a3bd6e1aac7e75578d14f614bcd6007e62bd', '104.28.157.138', 1669441799, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313739393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31323a22417369612f4b6f6c6b617461223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('44684bf44f8114c0b2bcaa724be15d769f3d9c99', '104.28.157.138', 1669441858, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393434313739393b3933656536643338623230323937647c733a31303a2232372d31312d32303232223b74696d657a6f6e657c733a31323a22417369612f4b6f6c6b617461223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('ldekd9e72dcf8odfba31aanseicepg0g', '::1', 1669515943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393531353934333b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b),
('mpgk1gehp4ir8siceh01coipce3uetuh', '::1', 1669516262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393531363236323b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('ccqjhcjp6kha07dl0cb4q45dl81oski1', '::1', 1669516567, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393531363536373b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('64n6imv1gep2ktf7b6mvesees8k3860o', '::1', 1669517624, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393531373632343b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('bbo87n6flthumoiffel5di735g8jn6qm', '::1', 1669518002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393531383030323b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('m83p4k4ishkh5g2c5idteuhvldsslmur', '::1', 1669518310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393531383331303b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('s9vgcnsro47lbttmi7orqr0s8i36p5st', '::1', 1669518615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393531383631353b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('jldqqcdqcps1qntmjqug8o8uhskl2v1k', '::1', 1669520225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393532303232353b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('epjvdfm69q8m1c7efkn8cndalqci4cvl', '::1', 1669520569, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393532303536393b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('f4e6fc670s7ar5vh5snl72f4esv9ea2d', '::1', 1669521018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393532313031383b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b),
('2qj9u72b9puqkfer4ik5igo1b0ohaj4m', '::1', 1669521030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393532313031383b6439656264396235346237656665637c733a31303a2232382d31312d32303232223b7569647c733a33323a226366613161663038393230396331663964643866326432343739343735633732223b7465616d5f69647c733a33323a223639643364626265333033333334326539313238346334386566646566623831223b);

-- --------------------------------------------------------

--
-- Table structure for table `sp_team`
--

CREATE TABLE `sp_team` (
  `id` int(11) NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `permissions` longtext NOT NULL,
  `data` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_team`
--

INSERT INTO `sp_team` (`id`, `ids`, `owner`, `pid`, `permissions`, `data`) VALUES
(275, 'c13783ef1d59695c6fce108d1b45f8ea', 275, 2, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"5000\",\"whatsapp_bulk_max_phone_numbers\":\"2500\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"75000\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"100\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"5\"}', NULL),
(276, '69d3dbbe3033342e91284c48efdefb81', 276, 7, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"500\",\"whatsapp_bulk_max_phone_numbers\":\"50000\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"10000\",\"payment_manager_enable\":\"1\",\"support_enable\":\"1\",\"user_manager_enable\":\"1\",\"settings_enable\":\"1\",\"social_network_configuration_enable\":\"1\",\"language_enable\":\"1\",\"package_manager_enable\":\"1\",\"faqs_manager_enable\":\"1\",\"file_manager_enable\":\"1\",\"max_storage_size\":\"1000\",\"max_file_size\":\"1000\",\"cronjobs_enable\":\"1\",\"coupon_manager_enable\":\"1\",\"caption_enable\":\"1\",\"blog_manager_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"10\"}', NULL),
(277, '91e403a26c9fee88954deaa52c69a34c', 277, 4, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"5000\",\"whatsapp_bulk_max_phone_numbers\":\"5000\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"5000000\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"100\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"10\"}', NULL),
(278, 'a7193395c036aadfce3fc71f823cdd9e', 278, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL),
(279, '745a27c5e6098fa6df495fa235fb9e14', 0, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL),
(280, 'a4bae97ad02faf8089e7fbf6ca824db9', 279, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL),
(281, '6e12b19b3f5f45942b90f27886bf3f01', 280, 5, '{\"whatsapp_enable\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_max_contact_group\":\"0\",\"whatsapp_bulk_max_phone_numbers\":\"0\",\"whatsapp_message_per_day\":\"0\",\"support_enable\":\"1\",\"user_manager_enable\":\"1\",\"settings_enable\":\"1\",\"max_storage_size\":\"0\",\"max_file_size\":\"0\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"150\"}', NULL),
(282, '0a3c187f0bb277d707d65e8c3bfd5d66', 281, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL),
(283, 'e9e72818f56b9b56bd2a5ffa0606dec5', 282, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL),
(284, '6ec76d33c7e4d9e296d175a0e694dd9b', 283, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL),
(285, '94c13feaba73e2ce1d6faa5f35ae61f8', 284, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL),
(286, '66235745a5585900754926a96956bcbd', 285, 1, '{\"whatsapp_enable\":\"1\",\"whatsapp_profile\":\"1\",\"whatsapp_autoresponder\":\"1\",\"whatsapp_bulk\":\"1\",\"whatsapp_chatbot\":\"1\",\"whatsapp_export_participants\":\"1\",\"whatsapp_link_generator\":\"1\",\"whatsapp_api\":\"1\",\"whatsapp_autoresponder_media\":\"1\",\"whatsapp_autoresponder_delay\":\"0\",\"whatsapp_bulk_media\":\"1\",\"whatsapp_bulk_rotator\":\"1\",\"whatsapp_bulk_report\":\"1\",\"whatsapp_bulk_max_contact_group\":\"50\",\"whatsapp_bulk_max_phone_numbers\":\"50\",\"whatsapp_chatbot_media\":\"1\",\"whatsapp_button_status\":\"1\",\"whatsapp_list_message_status\":\"1\",\"whatsapp_message_per_day\":\"200\",\"support_enable\":\"1\",\"file_manager_enable\":\"1\",\"file_manager_google_drive\":\"1\",\"file_manager_dropbox\":\"1\",\"file_manager_onedrive\":\"1\",\"file_manager_photo\":\"1\",\"file_manager_video\":\"1\",\"file_manager_image_editor\":\"1\",\"max_storage_size\":\"100\",\"max_file_size\":\"10\",\"caption_enable\":\"1\",\"account_manager_enable\":\"1\",\"am_whatsapp_profiles\":\"1\",\"number_accounts\":\"3\"}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sp_team_member`
--

CREATE TABLE `sp_team_member` (
  `id` int(11) NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `permissions` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_tickets`
--

CREATE TABLE `sp_tickets` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` text DEFAULT NULL,
  `account_id` int(10) NOT NULL,
  `title` text DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `notify` int(1) NOT NULL DEFAULT 1,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_tickets_faqs`
--

CREATE TABLE `sp_tickets_faqs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` text DEFAULT NULL,
  `account_id` int(10) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_tickets_messages`
--

CREATE TABLE `sp_tickets_messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` text DEFAULT NULL,
  `account_id` int(10) NOT NULL,
  `text` text DEFAULT NULL,
  `ticket` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_users`
--

CREATE TABLE `sp_users` (
  `id` int(11) NOT NULL,
  `ids` mediumtext DEFAULT NULL,
  `pid` text DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `fullname` mediumtext DEFAULT NULL,
  `email` mediumtext DEFAULT NULL,
  `password` mediumtext DEFAULT NULL,
  `phone_number` text NOT NULL,
  `package` int(11) DEFAULT NULL,
  `reseller_allowed_package` varchar(255) DEFAULT NULL,
  `reseller_allowed_users` int(11) DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `timezone` mediumtext DEFAULT NULL,
  `login_type` mediumtext DEFAULT NULL,
  `data` mediumtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT 0,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_users`
--

INSERT INTO `sp_users` (`id`, `ids`, `pid`, `role`, `fullname`, `email`, `password`, `phone_number`, `package`, `reseller_allowed_package`, `reseller_allowed_users`, `expiration_date`, `timezone`, `login_type`, `data`, `status`, `created_by`, `changed`, `created`) VALUES
(276, 'cfa1af089209c1f9dd8f2d2479475c72', NULL, 1, 'Admin', 'admin@doniaweb.com', '1325d2678e420e4f338f24faa3307456', 'Your Number Here', 7, 'null', 0, '2023-09-17', 'Asia/Kolkata', 'direct', '{\"is_subscription\":0}', 2, 0, '2022-11-26 11:20:48', '2022-09-14 11:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_autoresponder`
--

CREATE TABLE `sp_whatsapp_autoresponder` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `instance_id` text DEFAULT NULL,
  `cate` int(11) DEFAULT 1,
  `template` int(11) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `media` longtext DEFAULT NULL,
  `except` longtext DEFAULT NULL,
  `path` text DEFAULT NULL,
  `delay` int(11) DEFAULT NULL,
  `result` text DEFAULT NULL,
  `sent` int(11) DEFAULT NULL,
  `send_to` int(1) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `on_unknow` varchar(5000) NOT NULL DEFAULT 'hello'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_chatbot`
--

CREATE TABLE `sp_whatsapp_chatbot` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `instance_id` text DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `cate` int(11) DEFAULT 1,
  `template` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `caption` text DEFAULT NULL,
  `media` text DEFAULT NULL,
  `path` text DEFAULT NULL,
  `run` int(1) DEFAULT 1,
  `sent` int(11) DEFAULT NULL,
  `send_to` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `phone` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_contacts`
--

CREATE TABLE `sp_whatsapp_contacts` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_phone_numbers`
--

CREATE TABLE `sp_whatsapp_phone_numbers` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `pid` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `params` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_schedules`
--

CREATE TABLE `sp_whatsapp_schedules` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `contact_group_id` int(11) DEFAULT NULL,
  `time_post` int(11) DEFAULT NULL,
  `min_delay` int(11) DEFAULT NULL,
  `max_delay` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `cate` int(11) DEFAULT 1,
  `template` int(11) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `media` longtext DEFAULT NULL,
  `path` text DEFAULT NULL,
  `sent` int(11) DEFAULT 0,
  `failed` int(11) DEFAULT 0,
  `result` text DEFAULT NULL,
  `running` int(1) DEFAULT 0,
  `status` int(11) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `phone` mediumtext DEFAULT NULL,
  `phones_send` text DEFAULT NULL,
  `phones_fail` text DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_sessions`
--

CREATE TABLE `sp_whatsapp_sessions` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `instance_id` text DEFAULT NULL,
  `data` longtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_whatsapp_sessions`
--

INSERT INTO `sp_whatsapp_sessions` (`id`, `ids`, `team_id`, `instance_id`, `data`, `status`) VALUES
(3080, '09338a1a25da51d4d953061212801a17', 276, '6382CB80373E0', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_stats`
--

CREATE TABLE `sp_whatsapp_stats` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `team_id` text DEFAULT NULL,
  `wa_message_sent_today` int(11) DEFAULT NULL,
  `wa_chat_count` int(11) DEFAULT 0,
  `wa_chatbot_count` int(11) DEFAULT NULL,
  `wa_autoresponder_count` int(11) DEFAULT NULL,
  `wa_bulk_total_count` int(11) DEFAULT NULL,
  `wa_bulk_sent_count` int(11) DEFAULT NULL,
  `wa_bulk_failed_count` int(11) NOT NULL,
  `wa_time_reset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sp_whatsapp_template`
--

CREATE TABLE `sp_whatsapp_template` (
  `id` int(11) NOT NULL,
  `ids` varchar(32) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `cate` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `data` longtext DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sp_account_manager`
--
ALTER TABLE `sp_account_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_blog`
--
ALTER TABLE `sp_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_caption`
--
ALTER TABLE `sp_caption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_coupon_manager`
--
ALTER TABLE `sp_coupon_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_faqs`
--
ALTER TABLE `sp_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_file_manager`
--
ALTER TABLE `sp_file_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_language`
--
ALTER TABLE `sp_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_language_category`
--
ALTER TABLE `sp_language_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_options`
--
ALTER TABLE `sp_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_package_manager`
--
ALTER TABLE `sp_package_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_payment_history`
--
ALTER TABLE `sp_payment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_payment_subscriptions`
--
ALTER TABLE `sp_payment_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_purchase_manager`
--
ALTER TABLE `sp_purchase_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_sessions`
--
ALTER TABLE `sp_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `sp_team`
--
ALTER TABLE `sp_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_team_member`
--
ALTER TABLE `sp_team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_tickets`
--
ALTER TABLE `sp_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_tickets_faqs`
--
ALTER TABLE `sp_tickets_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_tickets_messages`
--
ALTER TABLE `sp_tickets_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_users`
--
ALTER TABLE `sp_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_autoresponder`
--
ALTER TABLE `sp_whatsapp_autoresponder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_chatbot`
--
ALTER TABLE `sp_whatsapp_chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_contacts`
--
ALTER TABLE `sp_whatsapp_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_phone_numbers`
--
ALTER TABLE `sp_whatsapp_phone_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_schedules`
--
ALTER TABLE `sp_whatsapp_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_sessions`
--
ALTER TABLE `sp_whatsapp_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_stats`
--
ALTER TABLE `sp_whatsapp_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_whatsapp_template`
--
ALTER TABLE `sp_whatsapp_template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sp_account_manager`
--
ALTER TABLE `sp_account_manager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sp_blog`
--
ALTER TABLE `sp_blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_caption`
--
ALTER TABLE `sp_caption`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `sp_coupon_manager`
--
ALTER TABLE `sp_coupon_manager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_faqs`
--
ALTER TABLE `sp_faqs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_file_manager`
--
ALTER TABLE `sp_file_manager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sp_language`
--
ALTER TABLE `sp_language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=809;

--
-- AUTO_INCREMENT for table `sp_language_category`
--
ALTER TABLE `sp_language_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_options`
--
ALTER TABLE `sp_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `sp_package_manager`
--
ALTER TABLE `sp_package_manager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sp_payment_history`
--
ALTER TABLE `sp_payment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_payment_subscriptions`
--
ALTER TABLE `sp_payment_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_purchase_manager`
--
ALTER TABLE `sp_purchase_manager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp_team`
--
ALTER TABLE `sp_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `sp_team_member`
--
ALTER TABLE `sp_team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_tickets`
--
ALTER TABLE `sp_tickets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sp_tickets_faqs`
--
ALTER TABLE `sp_tickets_faqs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_tickets_messages`
--
ALTER TABLE `sp_tickets_messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sp_users`
--
ALTER TABLE `sp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `sp_whatsapp_autoresponder`
--
ALTER TABLE `sp_whatsapp_autoresponder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sp_whatsapp_chatbot`
--
ALTER TABLE `sp_whatsapp_chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sp_whatsapp_contacts`
--
ALTER TABLE `sp_whatsapp_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sp_whatsapp_phone_numbers`
--
ALTER TABLE `sp_whatsapp_phone_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sp_whatsapp_schedules`
--
ALTER TABLE `sp_whatsapp_schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sp_whatsapp_sessions`
--
ALTER TABLE `sp_whatsapp_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3081;

--
-- AUTO_INCREMENT for table `sp_whatsapp_stats`
--
ALTER TABLE `sp_whatsapp_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sp_whatsapp_template`
--
ALTER TABLE `sp_whatsapp_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;