-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Ne 08.Dec 2019, 02:06
-- Verzia serveru: 10.1.36-MariaDB
-- Verzia PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `jaj`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `hodnotenies`
--

CREATE TABLE `hodnotenies` (
  `id` int(10) UNSIGNED NOT NULL,
  `Otazka_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Otazka_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Otazka_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Otazka_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hodnotenie` tinyint(4) NOT NULL,
  `potvrdenie` tinyint(1) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `podujatia_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `hodnotenies`
--

INSERT INTO `hodnotenies` (`id`, `Otazka_1`, `Otazka_2`, `Otazka_3`, `Otazka_4`, `hodnotenie`, `potvrdenie`, `users_id`, `podujatia_id`, `created_at`, `updated_at`) VALUES
(1, 'effe', 'ff', 'fef', 'fefef', 4, 1, 17, 1, '2019-12-04 21:22:53', '2019-12-04 21:22:53');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `koordinatoris`
--

CREATE TABLE `koordinatoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakulta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `katedra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonne cislo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `krajinies`
--

CREATE TABLE `krajinies` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `krajinies`
--

INSERT INTO `krajinies` (`id`, `code`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Congo', 242),
(50, 'CD', 'Congo The Democratic Republic Of The', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `mestos`
--

CREATE TABLE `mestos` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf32_slovak_ci NOT NULL,
  `krajiny_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `mestos`
--

INSERT INTO `mestos` (`id`, `name`, `krajiny_id`) VALUES
(1, 'London', 230),
(2, 'Munich', 82),
(3, 'Moscow', 181),
(4, 'Madrid', 205),
(5, 'Genk', 21),
(6, 'Manchester', 230),
(7, 'Helsinki', 74),
(8, 'Wien', 14),
(9, 'Prague', 57),
(10, 'Kiev', 228),
(11, 'Maribor', 198),
(12, 'Paris', 75),
(13, 'Amsterdam', 155);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_19_154443_create_roly_table', 1),
(2, '2019_10_20_144007_create_podujatias_table', 1),
(3, '2019_10_20_145722_create_vyzvy_table', 1),
(4, '2019_10_20_151725_create_krajinys_table', 2),
(5, '2019_10_20_152604_create_univerzity_table', 2),
(6, '2019_10_20_153327_create_typsuboru_table', 2),
(7, '2019_10_20_153452_create_subory_table', 2),
(8, '2019_10_20_160822_create_spravy_table', 2),
(9, '2019_10_20_161513_create_univerzityvyzvy_table', 2),
(10, '2019_10_21_200643_create_users_table', 2),
(11, '2019_11_27_232125_create_koordinatoris_table', 2),
(12, '2019_11_30_231555_create_hodnotenies_table', 2),
(13, '2019_10_19_154443_create_rolies_table', 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `podujatias`
--

CREATE TABLE `podujatias` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nazov` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `mesto_id` int(10) UNSIGNED NOT NULL,
  `univerzity_id` int(10) UNSIGNED NOT NULL,
  `krajny_id` int(10) UNSIGNED NOT NULL,
  `vyzvy_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT NULL,
  `pocitadlo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `podujatias`
--

INSERT INTO `podujatias` (`id`, `created_at`, `updated_at`, `Nazov`, `datum`, `mesto_id`, `univerzity_id`, `krajny_id`, `vyzvy_id`, `users_id`, `confirmed`, `pocitadlo`) VALUES
(1, NULL, '2019-12-07 20:44:38', 'Staz', '2019-12-12', 1, 1, 1, 1, 17, 1, 1),
(2, NULL, '2019-12-04 16:29:55', 'vever', '2019-12-13', 12, 1, 1, 1, NULL, 0, 4),
(3, NULL, '2019-12-07 21:15:53', 'cfdvdf', '2019-12-03', 1, 11, 11, 1, 17, 0, 2),
(4, NULL, '2019-12-08 00:00:50', 'gtg', '2019-12-18', 6, 6, 1, 1, 17, NULL, 3),
(5, NULL, '2019-12-07 21:31:19', 'gttgt', '2019-12-09', 1, 11, 1, 1, 17, NULL, 6),
(6, '2019-12-06 01:09:11', '2019-12-07 23:46:00', 'Blabla', '2019-12-18', 1, 1, 1, 1, 17, 0, 16),
(7, '2019-12-09 23:00:00', '2019-12-07 23:59:17', 'La malia Italia', '2019-12-31', 7, 1, 1, 1, 17, 0, 73);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `rolies`
--

CREATE TABLE `rolies` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rola` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `rolies`
--

INSERT INTO `rolies` (`id`, `created_at`, `updated_at`, `rola`) VALUES
(1, NULL, NULL, 'Admin'),
(2, NULL, NULL, 'Referent'),
(3, NULL, NULL, 'Ucasnik');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `spravy`
--

CREATE TABLE `spravy` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vyzvy_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `subory`
--

CREATE TABLE `subory` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `spravy_id` int(10) UNSIGNED NOT NULL,
  `Adresa` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nazov` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typsuboru_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `typsuboru`
--

CREATE TABLE `typsuboru` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `typ` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `univerzities`
--

CREATE TABLE `univerzities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nazov` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmluva_od` date NOT NULL,
  `zmluva_do` date NOT NULL,
  `mesto_id` int(11) NOT NULL,
  `krajiny_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `univerzities`
--

INSERT INTO `univerzities` (`id`, `created_at`, `updated_at`, `nazov`, `zmluva_od`, `zmluva_do`, `mesto_id`, `krajiny_id`) VALUES
(1, NULL, NULL, 'Queens college of London', '2015-10-10', '2021-10-10', 1, 230),
(2, NULL, NULL, 'University of Munich', '2018-10-12', '2022-10-20', 2, 82),
(3, NULL, NULL, 'Russian Institute of science', '2018-11-10', '2022-10-19', 3, 181),
(4, NULL, NULL, 'Madrid technology institute', '2019-12-10', '2022-10-19', 4, 205),
(5, NULL, NULL, 'University of Genk', '2018-10-10', '2023-10-19', 5, 21),
(6, NULL, NULL, 'West Manchester college', '2017-12-10', '2023-10-18', 6, 230),
(7, NULL, NULL, 'University of arts', '2016-10-22', '2023-10-17', 7, 74),
(8, NULL, NULL, 'University of Wien', '2016-10-20', '2022-10-15', 8, 14),
(9, NULL, NULL, 'Karlova univerzita', '2014-10-15', '2023-10-12', 9, 57),
(10, NULL, NULL, 'Lenins Institute', '2012-10-16', '2023-11-10', 10, 228),
(11, NULL, NULL, 'Maribor college of tech', '2012-10-17', '2022-11-10', 11, 198),
(12, NULL, NULL, 'France science university', '2015-10-10', '2021-12-10', 12, 75),
(13, NULL, NULL, ' Royal University', '2014-10-10', '2021-12-10', 13, 155);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `univerzityvyzvy`
--

CREATE TABLE `univerzityvyzvy` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vyzvy_id` int(10) UNSIGNED NOT NULL,
  `Pocet-miest` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `univerzity_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roly_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `roly_id`) VALUES
(19, 'filip', 'filip@nana.sk', '$2y$10$3IrFLyg.06UYZcD2B2InsOpXt7Zcyg95TUsD3M4qCBlSF36OvTbeK', 'H9WB2n7BYi0MG8uOOg1XqvuTMCrb04GlNBslPrU6scWpxgbni4v2268pBU4i', '2019-12-03 09:48:59', '2019-12-03 09:48:59', 3),
(18, 'tomas', 'nanana@na.sk', '$2y$10$Z2JrmxHQtuDJy1qbAKVeXOF.TWo1RYfhD8ZWUfdm.hwjv628CAYfm', 'CcNZ6PsH3pvjdzEpkIbietMkObn06HueEJqvbdDelvyQwGgRtgOZMrt3hUhh', '2019-12-03 09:48:34', '2019-12-03 09:48:34', 3),
(15, 'Referent Smith', 'referent@gmail.com', '$2y$10$IayWx8Cz3xXaTD9urRtV8ufbEHssQsMjB9uqnFQNI6B5pxxdS4Ygq', 'NhUb2iW3hanCvRiwSZ1COcmZ7gLuOOeMH712q19dWbJvHbftbpzNKq7HlEQi', '2019-12-02 16:22:55', '2019-12-02 16:22:55', 2),
(17, 'Patrik Táčik', 'ucasnik@mail.com', '$2y$10$qOm6xaQAf5MFqcPOCIWmbeEK7ZYcER9yXC96HorZ9ISH7BcQB0sg6', 'iyfirosbGn0PEozwZ2FYtGRERS3voUf2NpcOdkEWDGAy9Gdjn7wcOS1hcaG8', '2019-12-02 16:27:55', '2019-12-02 16:34:46', 3),
(14, 'Admin Smith', 'admin@gmail.com', '$2y$10$L.yXoX9QzkUbpxavTSLjluxKn/5urH5lZii/Zwf2OFivSs.yI/gz2', 'UAe4lTd3fTfzm6jz9vIni648J5hfIiGL9bOyZLKTk6oPctbYqJDwmcpxz7tt', '2019-12-02 16:22:55', '2019-12-02 16:22:55', 1),
(11, 'Admin Smith', 'admin@gmail.com', '$2y$10$BM/8f03YhN.ZZKmTgqJ4Au2JRJS3ZI0gFhW1wBCs9h4DzRpR.ECf2', 'KTKZm9l8rosUQO6JDLVNbpKxxqvD2hP1CAlIan3ioFCQS4Ngb8QJmsgToYD2', '2019-12-02 15:45:31', '2019-12-02 15:45:31', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vyzvy`
--

CREATE TABLE `vyzvy` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Typ` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `hodnotenies`
--
ALTER TABLE `hodnotenies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hodnotenies_users_id_foreign` (`users_id`),
  ADD KEY `hodnotenies_podujatia_id_foreign` (`podujatia_id`);

--
-- Indexy pre tabuľku `koordinatoris`
--
ALTER TABLE `koordinatoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `krajinies`
--
ALTER TABLE `krajinies`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `podujatias`
--
ALTER TABLE `podujatias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `podujatias_mesto_id_foreign` (`mesto_id`),
  ADD KEY `podujatias_univerzity_id_foreign` (`univerzity_id`),
  ADD KEY `podujatias_krajny_id_foreign` (`krajny_id`),
  ADD KEY `podujatias_vyzvy_id_foreign` (`vyzvy_id`),
  ADD KEY `podujatias_users_id_foreign` (`users_id`);

--
-- Indexy pre tabuľku `rolies`
--
ALTER TABLE `rolies`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spravy_vyzvy_id_foreign` (`vyzvy_id`),
  ADD KEY `spravy_users_id_foreign` (`users_id`);

--
-- Indexy pre tabuľku `subory`
--
ALTER TABLE `subory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subory_spravy_id_foreign` (`spravy_id`),
  ADD KEY `subory_typsuboru_id_foreign` (`typsuboru_id`);

--
-- Indexy pre tabuľku `typsuboru`
--
ALTER TABLE `typsuboru`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `univerzities`
--
ALTER TABLE `univerzities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `univerzity_krajiny_id_foreign` (`krajiny_id`);

--
-- Indexy pre tabuľku `univerzityvyzvy`
--
ALTER TABLE `univerzityvyzvy`
  ADD KEY `univerzityvyzvy_vyzvy_id_foreign` (`vyzvy_id`),
  ADD KEY `univerzityvyzvy_univerzity_id_foreign` (`univerzity_id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_roly_id_foreign` (`roly_id`);

--
-- Indexy pre tabuľku `vyzvy`
--
ALTER TABLE `vyzvy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `hodnotenies`
--
ALTER TABLE `hodnotenies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `koordinatoris`
--
ALTER TABLE `koordinatoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `krajinies`
--
ALTER TABLE `krajinies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `podujatias`
--
ALTER TABLE `podujatias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `rolies`
--
ALTER TABLE `rolies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `subory`
--
ALTER TABLE `subory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `typsuboru`
--
ALTER TABLE `typsuboru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `univerzities`
--
ALTER TABLE `univerzities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pre tabuľku `vyzvy`
--
ALTER TABLE `vyzvy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
