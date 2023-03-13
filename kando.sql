-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 04:57 AM
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
-- Database: `kando`
--

-- --------------------------------------------------------

--
-- Table structure for table `etapa`
--

CREATE TABLE `etapa` (
  `idEtapa` int(11) NOT NULL,
  `observacao` text NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` int(10) UNSIGNED NOT NULL,
  `etapa` tinyint(3) UNSIGNED NOT NULL,
  `subEtapa` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etapa`
--

INSERT INTO `etapa` (`idEtapa`, `observacao`, `nome`, `valor`, `etapa`, `subEtapa`) VALUES
(38, ' ', '1.1', 1, 1, 1),
(39, ' ', '1.2', 2, 1, 2),
(40, ' ', '1.3', 2, 1, 3),
(41, ' ', '1.4', 3, 1, 4),
(42, ' ', '1.5', 1, 1, 5),
(43, ' ', '2.1', 2, 2, 1),
(44, ' ', '2.2', 2, 2, 2),
(45, ' ', '2.3', 2, 2, 3),
(46, ' ', '3.2', 2, 3, 2),
(47, ' ', '3.3', 2, 3, 3),
(48, ' ', '3.5', 3, 3, 5),
(49, ' ', '4.1', 2, 4, 1),
(50, ' ', '4.3', 2, 4, 3),
(51, ' ', '4.4', 2, 4, 4),
(52, ' ', '4.9', 2, 4, 5),
(53, ' ', '4.6', 2, 4, 6),
(54, ' ', '4.7', 2, 4, 7),
(55, ' ', '4.9', 2, 4, 8),
(56, ' ', '4.10', 2, 4, 10),
(57, ' ', '4.11', 3, 4, 11),
(58, ' ', '4.12', 3, 4, 12),
(59, ' ', '5.1', 2, 5, 1),
(60, ' ', '5.3', 2, 5, 3),
(61, ' ', '6.1', 2, 6, 1),
(62, ' ', '6.2', 2, 6, 2),
(63, ' ', '6.3', 2, 6, 3),
(64, ' ', '6.4', 2, 6, 4),
(65, ' ', '7.1', 2, 7, 1),
(66, ' ', '7.2', 2, 7, 2),
(67, ' ', '8.1', 1, 8, 1),
(68, ' ', '8.2', 1, 8, 2),
(69, ' ', '9.1', 1, 9, 1),
(70, ' ', '9.2', 1, 9, 2),
(71, ' ', '9.3', 1, 9, 3),
(72, ' ', '10.1', 2, 10, 1),
(73, ' ', '10.3', 2, 10, 3),
(74, ' ', '11.1', 1, 11, 1),
(75, ' ', '1.1', 1, 1, 1),
(76, ' ', '1.2', 2, 1, 2),
(77, ' ', '1.3', 2, 1, 3),
(78, ' ', '1.4', 3, 1, 4),
(79, ' ', '1.5', 1, 1, 5),
(80, ' ', '2.1', 2, 2, 1),
(81, ' ', '2.2', 2, 2, 2),
(82, ' ', '2.3', 2, 2, 3),
(83, ' ', '3.2', 2, 3, 2),
(84, ' ', '3.3', 2, 3, 3),
(85, ' ', '3.5', 3, 3, 5),
(86, ' ', '4.1', 2, 4, 1),
(87, ' ', '4.3', 2, 4, 3),
(88, ' ', '4.4', 2, 4, 4),
(89, ' ', '4.9', 2, 4, 5),
(90, ' ', '4.6', 2, 4, 6),
(91, ' ', '4.7', 2, 4, 7),
(92, ' ', '4.9', 2, 4, 8),
(93, ' ', '4.10', 2, 4, 10),
(94, ' ', '4.11', 3, 4, 11),
(95, ' ', '4.12', 3, 4, 12),
(96, ' ', '5.1', 2, 5, 1),
(97, ' ', '5.3', 2, 5, 3),
(98, ' ', '6.1', 2, 6, 1),
(99, ' ', '6.2', 2, 6, 2),
(100, ' ', '6.3', 2, 6, 3),
(101, ' ', '6.4', 2, 6, 4),
(102, ' ', '7.1', 2, 7, 1),
(103, ' ', '7.2', 2, 7, 2),
(104, ' ', '8.1', 1, 8, 1),
(105, ' ', '8.2', 1, 8, 2),
(106, ' ', '9.1', 1, 9, 1),
(107, ' ', '9.2', 1, 9, 2),
(108, ' ', '9.3', 1, 9, 3),
(109, ' ', '10.1', 2, 10, 1),
(110, ' ', '10.3', 2, 10, 3),
(111, ' ', '11.1', 1, 11, 1),
(112, ' ', '1.1', 1, 1, 1),
(113, ' ', '1.2', 2, 1, 2),
(114, ' ', '1.3', 2, 1, 3),
(115, ' ', '1.4', 3, 1, 4),
(116, ' ', '1.5', 1, 1, 5),
(117, ' ', '2.1', 2, 2, 1),
(118, ' ', '2.2', 2, 2, 2),
(119, ' ', '2.3', 2, 2, 3),
(120, ' ', '3.2', 2, 3, 2),
(121, ' ', '3.3', 2, 3, 3),
(122, ' ', '3.5', 3, 3, 5),
(123, ' ', '4.1', 2, 4, 1),
(124, ' ', '4.3', 2, 4, 3),
(125, ' ', '4.4', 2, 4, 4),
(126, ' ', '4.9', 2, 4, 5),
(127, ' ', '4.6', 2, 4, 6),
(128, ' ', '4.7', 2, 4, 7),
(129, ' ', '4.9', 2, 4, 8),
(130, ' ', '4.10', 2, 4, 10),
(131, ' ', '4.11', 3, 4, 11),
(132, ' ', '4.12', 3, 4, 12),
(133, ' ', '5.1', 2, 5, 1),
(134, ' ', '5.3', 2, 5, 3),
(135, ' ', '6.1', 2, 6, 1),
(136, ' ', '6.2', 2, 6, 2),
(137, ' ', '6.3', 2, 6, 3),
(138, ' ', '6.4', 2, 6, 4),
(139, ' ', '7.1', 2, 7, 1),
(140, ' ', '7.2', 2, 7, 2),
(141, ' ', '8.1', 1, 8, 1),
(142, ' ', '8.2', 1, 8, 2),
(143, ' ', '9.1', 1, 9, 1),
(144, ' ', '9.2', 1, 9, 2),
(145, ' ', '9.3', 1, 9, 3),
(146, ' ', '10.1', 2, 10, 1),
(147, ' ', '10.3', 2, 10, 3),
(148, ' ', '11.1', 1, 11, 1),
(149, ' ', '1.1', 1, 1, 1),
(150, ' ', '1.2', 2, 1, 2),
(151, ' ', '1.3', 2, 1, 3),
(152, ' ', '1.4', 3, 1, 4),
(153, ' ', '1.5', 1, 1, 5),
(154, ' ', '2.1', 2, 2, 1),
(155, ' ', '2.2', 2, 2, 2),
(156, ' ', '2.3', 2, 2, 3),
(157, ' ', '3.2', 2, 3, 2),
(158, ' ', '3.3', 2, 3, 3),
(159, ' ', '3.5', 3, 3, 5),
(160, ' ', '4.1', 2, 4, 1),
(161, ' ', '4.3', 2, 4, 3),
(162, ' ', '4.4', 2, 4, 4),
(163, ' ', '4.9', 2, 4, 5),
(164, ' ', '4.6', 2, 4, 6),
(165, ' ', '4.7', 2, 4, 7),
(166, ' ', '4.9', 2, 4, 8),
(167, ' ', '4.10', 2, 4, 10),
(168, ' ', '4.11', 3, 4, 11),
(169, ' ', '4.12', 3, 4, 12),
(170, ' ', '5.1', 2, 5, 1),
(171, ' ', '5.3', 2, 5, 3),
(172, ' ', '6.1', 2, 6, 1),
(173, ' ', '6.2', 2, 6, 2),
(174, ' ', '6.3', 2, 6, 3),
(175, ' ', '6.4', 2, 6, 4),
(176, ' ', '7.1', 2, 7, 1),
(177, ' ', '7.2', 2, 7, 2),
(178, ' ', '8.1', 1, 8, 1),
(179, ' ', '8.2', 1, 8, 2),
(180, ' ', '9.1', 1, 9, 1),
(181, ' ', '9.2', 1, 9, 2),
(182, ' ', '9.3', 1, 9, 3),
(183, ' ', '10.1', 2, 10, 1),
(184, ' ', '10.3', 2, 10, 3),
(185, ' ', '11.1', 1, 11, 1),
(186, ' ', '1.1', 1, 1, 1),
(187, ' ', '1.2', 2, 1, 2),
(188, ' ', '1.3', 2, 1, 3),
(189, ' ', '1.4', 3, 1, 4),
(190, ' ', '1.5', 1, 1, 5),
(191, ' ', '2.1', 2, 2, 1),
(192, ' ', '2.2', 2, 2, 2),
(193, ' ', '2.3', 2, 2, 3),
(194, ' ', '3.2', 2, 3, 2),
(195, ' ', '3.3', 2, 3, 3),
(196, ' ', '3.5', 3, 3, 5),
(197, ' ', '4.1', 2, 4, 1),
(198, ' ', '4.3', 2, 4, 3),
(199, ' ', '4.4', 2, 4, 4),
(200, ' ', '4.9', 2, 4, 5),
(201, ' ', '4.6', 2, 4, 6),
(202, ' ', '4.7', 2, 4, 7),
(203, ' ', '4.9', 2, 4, 8),
(204, ' ', '4.10', 2, 4, 10),
(205, ' ', '4.11', 3, 4, 11),
(206, ' ', '4.12', 3, 4, 12),
(207, ' ', '5.1', 2, 5, 1),
(208, ' ', '5.3', 2, 5, 3),
(209, ' ', '6.1', 2, 6, 1),
(210, ' ', '6.2', 2, 6, 2),
(211, ' ', '6.3', 2, 6, 3),
(212, ' ', '6.4', 2, 6, 4),
(213, ' ', '7.1', 2, 7, 1),
(214, ' ', '7.2', 2, 7, 2),
(215, ' ', '8.1', 1, 8, 1),
(216, ' ', '8.2', 1, 8, 2),
(217, ' ', '9.1', 1, 9, 1),
(218, ' ', '9.2', 1, 9, 2),
(219, ' ', '9.3', 1, 9, 3),
(220, ' ', '10.1', 2, 10, 1),
(221, ' ', '10.3', 2, 10, 3),
(222, ' ', '11.1', 1, 11, 1),
(223, ' ', '1.1', 1, 1, 1),
(224, ' ', '1.2', 1, 1, 2),
(225, ' ', '1.3', 1, 1, 3),
(226, ' ', '1.4', 2, 1, 4),
(227, ' ', '1.5', 1, 1, 5),
(228, ' ', '2.1', 2, 2, 1),
(229, ' ', '2.2', 2, 2, 2),
(230, ' ', '2.3', 2, 2, 3),
(231, ' ', '3.2', 3, 3, 2),
(232, ' ', '3.3', 3, 3, 3),
(233, ' ', '3.4', 3, 3, 4),
(234, ' ', '3.5', 3, 3, 5),
(235, ' ', '4.1', 2, 4, 1),
(236, ' ', '4.3', 2, 4, 3),
(237, ' ', '4.4', 2, 4, 4),
(238, ' ', '4.5', 2, 4, 5),
(239, ' ', '4.6', 2, 4, 6),
(240, ' ', '4.7', 2, 4, 7),
(241, ' ', '4.9', 2, 4, 8),
(242, ' ', '4.9', 2, 4, 9),
(243, ' ', '4.10', 2, 4, 10),
(244, ' ', '4.11', 2, 4, 11),
(245, ' ', '4.12', 2, 4, 12),
(246, ' ', '5.1', 1, 5, 1),
(247, ' ', '5.2', 1, 5, 2),
(248, ' ', '5.3', 1, 5, 3),
(249, ' ', '6.1', 2, 6, 1),
(250, ' ', '6.2', 2, 6, 2),
(251, ' ', '6.3', 2, 6, 3),
(252, ' ', '6.4', 2, 6, 4),
(253, ' ', '7.1', 3, 7, 1),
(254, ' ', '7.2', 3, 7, 2),
(255, ' ', '8.1', 3, 8, 1),
(256, ' ', '8.2', 3, 8, 2),
(257, ' ', '9.1', 1, 9, 1),
(258, ' ', '9.2', 1, 9, 2),
(259, ' ', '9.3', 1, 9, 3),
(260, ' ', '10.1', 2, 10, 1),
(261, ' ', '10.3', 2, 10, 3),
(262, ' ', '11.1', 3, 11, 1),
(263, ' ', '1.1', 1, 1, 1),
(264, ' ', '1.2', 1, 1, 2),
(265, ' ', '1.3', 1, 1, 3),
(266, ' ', '1.4', 1, 1, 4),
(267, ' ', '1.5', 1, 1, 5),
(268, ' ', '2.1', 2, 2, 1),
(269, ' ', '2.2', 2, 2, 2),
(270, ' ', '2.3', 2, 2, 3),
(271, ' ', 'ordemTrabalho', 2, 3, 1),
(272, ' ', '3.2', 2, 3, 2),
(273, ' ', '3.3', 2, 3, 3),
(274, ' ', '3.4', 2, 3, 4),
(275, ' ', '3.5', 2, 3, 5),
(276, ' ', '4.1', 2, 4, 1),
(277, ' ', '4.3', 2, 4, 3),
(278, ' ', '4.4', 2, 4, 4),
(279, ' ', '4.5', 2, 4, 5),
(280, ' ', '4.6', 2, 4, 6),
(281, ' ', '4.7', 2, 4, 7),
(282, ' ', '4.9', 2, 4, 8),
(283, ' ', '4.9', 2, 4, 9),
(284, ' ', '4.10', 2, 4, 10),
(285, ' ', '4.11', 2, 4, 11),
(286, ' ', '4.12', 2, 4, 12),
(287, ' ', '5.1', 3, 5, 1),
(288, ' ', '5.2', 3, 5, 2),
(289, ' ', '5.3', 3, 5, 3),
(290, ' ', '6.1', 1, 6, 1),
(291, ' ', '6.2', 1, 6, 2),
(292, ' ', '6.3', 1, 6, 3),
(293, ' ', '6.4', 1, 6, 4),
(294, ' ', '7.1', 2, 7, 1),
(295, ' ', '7.2', 2, 7, 2),
(296, ' ', '8.1', 3, 8, 1),
(297, ' ', '8.2', 3, 8, 2),
(298, ' ', '9.1', 1, 9, 1),
(299, ' ', '9.2', 1, 9, 2),
(300, ' ', '9.3', 1, 9, 3),
(301, ' ', '10.1', 2, 10, 1),
(302, ' ', '10.3', 2, 10, 3),
(303, ' ', '11.1', 3, 11, 1),
(304, ' ', '1.1', 3, 1, 1),
(305, ' ', '1.2', 2, 1, 2),
(306, ' ', '1.3', 1, 1, 3),
(307, ' ', '1.4', 2, 1, 4),
(308, ' ', '1.5', 2, 1, 5),
(309, ' ', '2.1', 2, 2, 1),
(310, ' ', '2.2', 2, 2, 2),
(311, ' ', '2.3', 2, 2, 3),
(312, ' ', 'ordemTrabalho', 2, 3, 1),
(313, ' ', '3.2', 2, 3, 2),
(314, ' ', '3.3', 2, 3, 3),
(315, ' ', '3.4', 2, 3, 4),
(316, ' ', '3.5', 2, 3, 5),
(317, ' ', '4.1', 3, 4, 1),
(318, ' ', '4.3', 3, 4, 3),
(319, ' ', '4.4', 3, 4, 4),
(320, ' ', '4.5', 3, 4, 5),
(321, ' ', '4.6', 3, 4, 6),
(322, ' ', '4.7', 3, 4, 7),
(323, ' ', '4.9', 3, 4, 8),
(324, ' ', '4.9', 3, 4, 9),
(325, ' ', '4.10', 3, 4, 10),
(326, ' ', '4.11', 3, 4, 11),
(327, ' ', '4.12', 3, 4, 12),
(328, ' ', '5.1', 2, 5, 1),
(329, ' ', '5.2', 2, 5, 2),
(330, ' ', '5.3', 2, 5, 3),
(331, ' ', '6.1', 1, 6, 1),
(332, ' ', '6.2', 1, 6, 2),
(333, ' ', '6.3', 1, 6, 3),
(334, ' ', '6.4', 1, 6, 4),
(335, ' ', '7.1', 1, 7, 1),
(336, ' ', '7.2', 1, 7, 2),
(337, ' ', '8.1', 2, 8, 1),
(338, ' ', '8.2', 2, 8, 2),
(339, ' ', '9.1', 1, 9, 1),
(340, ' ', '9.2', 1, 9, 2),
(341, ' ', '9.3', 1, 9, 3),
(342, ' ', '10.1', 2, 10, 1),
(343, ' ', '10.3', 2, 10, 3),
(344, ' ', '11.1', 1, 11, 1),
(345, ' ', '1.1', 3, 1, 1),
(346, ' ', '1.2', 2, 1, 2),
(347, ' ', '1.3', 1, 1, 3),
(348, ' ', '1.4', 2, 1, 4),
(349, ' ', '1.5', 2, 1, 5),
(350, ' ', '2.1', 2, 2, 1),
(351, ' ', '2.2', 2, 2, 2),
(352, ' ', '2.3', 2, 2, 3),
(353, ' ', 'ordemTrabalho', 2, 3, 1),
(354, ' ', '3.2', 2, 3, 2),
(355, ' ', '3.3', 2, 3, 3),
(356, ' ', '3.4', 2, 3, 4),
(357, ' ', '3.5', 2, 3, 5),
(358, ' ', '4.1', 3, 4, 1),
(359, ' ', '4.3', 3, 4, 3),
(360, ' ', '4.4', 3, 4, 4),
(361, ' ', '4.5', 3, 4, 5),
(362, ' ', '4.6', 3, 4, 6),
(363, ' ', '4.7', 3, 4, 7),
(364, ' ', '4.9', 3, 4, 8),
(365, ' ', '4.9', 3, 4, 9),
(366, ' ', '4.10', 3, 4, 10),
(367, ' ', '4.11', 3, 4, 11),
(368, ' ', '4.12', 3, 4, 12),
(369, ' ', '5.1', 2, 5, 1),
(370, ' ', '5.2', 2, 5, 2),
(371, ' ', '5.3', 2, 5, 3),
(372, ' ', '6.1', 1, 6, 1),
(373, ' ', '6.2', 1, 6, 2),
(374, ' ', '6.3', 1, 6, 3),
(375, ' ', '6.4', 1, 6, 4),
(376, ' ', '7.1', 1, 7, 1),
(377, ' ', '7.2', 1, 7, 2),
(378, ' ', '8.1', 2, 8, 1),
(379, ' ', '8.2', 2, 8, 2),
(380, ' ', '9.1', 1, 9, 1),
(381, ' ', '9.2', 1, 9, 2),
(382, ' ', '9.3', 1, 9, 3),
(383, ' ', '10.1', 2, 10, 1),
(384, ' ', '10.3', 2, 10, 3),
(385, ' ', '11.1', 1, 11, 1),
(386, ' ', '1.1', 3, 1, 1),
(387, ' ', '1.2', 2, 1, 2),
(388, ' ', '1.3', 1, 1, 3),
(389, ' ', '1.4', 2, 1, 4),
(390, ' ', '1.5', 2, 1, 5),
(391, ' ', '2.1', 2, 2, 1),
(392, ' ', '2.2', 2, 2, 2),
(393, ' ', '2.3', 2, 2, 3),
(394, ' ', 'ordemTrabalho', 2, 3, 1),
(395, ' ', '3.2', 2, 3, 2),
(396, ' ', '3.3', 2, 3, 3),
(397, ' ', '3.4', 2, 3, 4),
(398, ' ', '3.5', 2, 3, 5),
(399, ' ', '4.1', 3, 4, 1),
(400, ' ', '4.3', 3, 4, 3),
(401, ' ', '4.4', 3, 4, 4),
(402, ' ', '4.5', 3, 4, 5),
(403, ' ', '4.6', 3, 4, 6),
(404, ' ', '4.7', 3, 4, 7),
(405, ' ', '4.9', 3, 4, 8),
(406, ' ', '4.9', 3, 4, 9),
(407, ' ', '4.10', 3, 4, 10),
(408, ' ', '4.11', 3, 4, 11),
(409, ' ', '4.12', 3, 4, 12),
(410, ' ', '5.1', 2, 5, 1),
(411, ' ', '5.2', 2, 5, 2),
(412, ' ', '5.3', 2, 5, 3),
(413, ' ', '6.1', 1, 6, 1),
(414, ' ', '6.2', 1, 6, 2),
(415, ' ', '6.3', 1, 6, 3),
(416, ' ', '6.4', 1, 6, 4),
(417, ' ', '7.1', 1, 7, 1),
(418, ' ', '7.2', 1, 7, 2),
(419, ' ', '8.1', 2, 8, 1),
(420, ' ', '8.2', 2, 8, 2),
(421, ' ', '9.1', 1, 9, 1),
(422, ' ', '9.2', 1, 9, 2),
(423, ' ', '9.3', 1, 9, 3),
(424, ' ', '10.1', 2, 10, 1),
(425, ' ', '10.3', 2, 10, 3),
(426, ' ', '11.1', 1, 11, 1),
(427, ' ', '1.1', 2, 1, 1),
(428, ' ', '1.2', 2, 1, 2),
(429, ' ', '1.3', 2, 1, 3),
(430, ' ', '1.4', 2, 1, 4),
(431, ' ', '1.5', 2, 1, 5),
(432, ' ', '2.1', 1, 2, 1),
(433, ' ', '2.2', 1, 2, 2),
(434, ' ', '2.3', 1, 2, 3),
(435, ' ', 'ordemTrabalho', 1, 3, 1),
(436, ' ', '3.2', 2, 3, 2),
(437, ' ', '3.3', 2, 3, 3),
(438, ' ', '3.4', 1, 3, 4),
(439, ' ', '3.5', 1, 3, 5),
(440, ' ', '4.1', 1, 4, 1),
(441, ' ', '4.2', 1, 4, 2),
(442, ' ', '4.3', 3, 4, 3),
(443, ' ', '4.4', 2, 4, 4),
(444, ' ', '4.5', 2, 4, 5),
(445, ' ', '4.6', 2, 4, 6),
(446, ' ', '4.7', 2, 4, 7),
(447, ' ', '4.9', 2, 4, 8),
(448, ' ', '4.9', 2, 4, 9),
(449, ' ', '4.10', 2, 4, 10),
(450, ' ', '4.11', 2, 4, 11),
(451, ' ', '4.12', 2, 4, 12),
(452, ' ', '5.1', 1, 5, 1),
(453, ' ', '5.2', 1, 5, 2),
(454, ' ', '5.3', 1, 5, 3),
(455, ' ', '6.1', 2, 6, 1),
(456, ' ', '6.2', 2, 6, 2),
(457, ' ', '6.3', 2, 6, 3),
(458, ' ', '6.4', 2, 6, 4),
(459, ' ', '7.1', 3, 7, 1),
(460, ' ', '7.2', 3, 7, 2),
(461, ' ', '8.1', 1, 8, 1),
(462, ' ', '8.2', 1, 8, 2),
(463, ' ', '9.1', 2, 9, 1),
(464, ' ', '9.2', 2, 9, 2),
(465, ' ', '9.3', 2, 9, 3),
(466, ' ', '10.1', 1, 10, 1),
(467, ' ', '10.2', 1, 10, 2),
(468, ' ', '10.3', 1, 10, 3),
(469, ' ', '11.1', 1, 11, 1),
(470, ' ', '1.1', 2, 1, 1),
(471, ' ', '1.2', 2, 1, 2),
(472, ' ', '1.3', 2, 1, 3),
(473, ' ', '1.4', 2, 1, 4),
(474, ' ', '1.5', 2, 1, 5),
(475, ' ', '2.1', 1, 2, 1),
(476, ' ', '2.2', 1, 2, 2),
(477, ' ', '2.3', 1, 2, 3),
(478, ' ', 'ordemTrabalho', 1, 3, 1),
(479, ' ', '3.2', 2, 3, 2),
(480, ' ', '3.3', 2, 3, 3),
(481, ' ', '3.4', 1, 3, 4),
(482, ' ', '3.5', 1, 3, 5),
(483, ' ', '4.1', 1, 4, 1),
(484, ' ', '4.2', 1, 4, 2),
(485, ' ', '4.3', 3, 4, 3),
(486, ' ', '4.4', 2, 4, 4),
(487, ' ', '4.5', 2, 4, 5),
(488, ' ', '4.6', 2, 4, 6),
(489, ' ', '4.7', 2, 4, 7),
(490, ' ', '4.9', 2, 4, 8),
(491, ' ', '4.9', 2, 4, 9),
(492, ' ', '4.10', 2, 4, 10),
(493, ' ', '4.11', 2, 4, 11),
(494, ' ', '4.12', 2, 4, 12),
(495, ' ', '5.1', 1, 5, 1),
(496, ' ', '5.2', 1, 5, 2),
(497, ' ', '5.3', 1, 5, 3),
(498, ' ', '6.1', 2, 6, 1),
(499, ' ', '6.2', 2, 6, 2),
(500, ' ', '6.3', 2, 6, 3),
(501, ' ', '6.4', 2, 6, 4),
(502, ' ', '7.1', 3, 7, 1),
(503, ' ', '7.2', 3, 7, 2),
(504, ' ', '8.1', 1, 8, 1),
(505, ' ', '8.2', 1, 8, 2),
(506, ' ', '9.1', 2, 9, 1),
(507, ' ', '9.2', 2, 9, 2),
(508, ' ', '9.3', 2, 9, 3),
(509, ' ', '10.1', 1, 10, 1),
(510, ' ', '10.2', 1, 10, 2),
(511, ' ', '10.3', 1, 10, 3),
(512, ' ', '11.1', 1, 11, 1),
(513, ' ', '1.1', 1, 1, 1),
(514, ' ', '1.2', 2, 1, 2),
(515, ' ', '1.3', 2, 1, 3),
(516, ' ', '1.4', 2, 1, 4),
(517, ' ', '1.5', 2, 1, 5),
(518, ' ', '2.1', 1, 2, 1),
(519, ' ', '2.2', 1, 2, 2),
(520, ' ', '2.3', 1, 2, 3),
(521, ' ', 'ordemTrabalho', 2, 3, 1),
(522, ' ', '3.2', 2, 3, 2),
(523, ' ', '3.3', 2, 3, 3),
(524, ' ', '3.4', 2, 3, 4),
(525, ' ', '3.5', 2, 3, 5),
(526, ' ', '4.1', 1, 4, 1),
(527, ' ', '4.2', 1, 4, 2),
(528, ' ', '4.3', 1, 4, 3),
(529, ' ', '4.4', 1, 4, 4),
(530, ' ', '4.5', 1, 4, 5),
(531, ' ', '4.6', 1, 4, 6),
(532, ' ', '4.7', 1, 4, 7),
(533, ' ', '4.9', 1, 4, 8),
(534, ' ', '4.9', 1, 4, 9),
(535, ' ', '4.10', 1, 4, 10),
(536, ' ', '4.11', 1, 4, 11),
(537, ' ', '4.12', 1, 4, 12),
(538, ' ', '5.1', 3, 5, 1),
(539, ' ', '5.2', 3, 5, 2),
(540, ' ', '5.3', 3, 5, 3),
(541, ' ', '6.1', 2, 6, 1),
(542, ' ', '6.2', 2, 6, 2),
(543, ' ', '6.3', 2, 6, 3),
(544, ' ', '6.4', 2, 6, 4),
(545, ' ', '7.1', 1, 7, 1),
(546, ' ', '7.2', 1, 7, 2),
(547, ' ', '8.1', 2, 8, 1),
(548, ' ', '8.2', 2, 8, 2),
(549, ' ', '9.1', 2, 9, 1),
(550, ' ', '9.2', 2, 9, 2),
(551, ' ', '9.3', 3, 9, 3),
(552, ' ', '10.1', 2, 10, 1),
(553, ' ', '10.2', 2, 10, 2),
(554, ' ', '10.3', 2, 10, 3),
(555, ' ', '11.1', 1, 11, 1),
(556, ' ', '1.1', 1, 1, 1),
(557, ' ', '1.2', 2, 1, 2),
(558, ' ', '1.3', 2, 1, 3),
(559, ' ', '1.4', 2, 1, 4),
(560, ' ', '1.5', 2, 1, 5),
(561, ' ', '2.1', 1, 2, 1),
(562, ' ', '2.2', 1, 2, 2),
(563, ' ', '2.3', 1, 2, 3),
(564, ' ', 'ordemTrabalho', 2, 3, 1),
(565, ' ', '3.2', 2, 3, 2),
(566, ' ', '3.3', 2, 3, 3),
(567, ' ', '3.4', 2, 3, 4),
(568, ' ', '3.5', 2, 3, 5),
(569, ' ', '4.1', 3, 4, 1),
(570, ' ', '4.2', 3, 4, 2),
(571, ' ', '4.3', 3, 4, 3),
(572, ' ', '4.4', 3, 4, 4),
(573, ' ', '4.5', 3, 4, 5),
(574, ' ', '4.6', 3, 4, 6),
(575, ' ', '4.7', 3, 4, 7),
(576, ' ', '4.9', 3, 4, 8),
(577, ' ', '4.9', 3, 4, 9),
(578, ' ', '4.10', 3, 4, 10),
(579, ' ', '4.11', 3, 4, 11),
(580, ' ', '4.12', 3, 4, 12),
(581, ' ', '5.1', 1, 5, 1),
(582, ' ', '5.2', 1, 5, 2),
(583, ' ', '5.3', 1, 5, 3),
(584, ' ', '6.1', 2, 6, 1),
(585, ' ', '6.2', 2, 6, 2),
(586, ' ', '6.3', 2, 6, 3),
(587, ' ', '6.4', 2, 6, 4),
(588, ' ', '7.1', 1, 7, 1),
(589, ' ', '7.2', 1, 7, 2),
(590, ' ', '8.1', 1, 8, 1),
(591, ' ', '8.2', 1, 8, 2),
(592, ' ', '9.1', 2, 9, 1),
(593, ' ', '9.2', 2, 9, 2),
(594, ' ', '9.3', 2, 9, 3),
(595, ' ', '10.1', 2, 10, 1),
(596, ' ', '10.2', 2, 10, 2),
(597, ' ', '10.3', 2, 10, 3),
(598, ' ', '11.1', 1, 11, 1),
(599, ' ', '1.1', 1, 1, 1),
(600, ' ', '1.2', 2, 1, 2),
(601, ' ', '1.3', 2, 1, 3),
(602, ' ', '1.4', 2, 1, 4),
(603, ' ', '1.5', 2, 1, 5),
(604, ' ', '2.1', 1, 2, 1),
(605, ' ', '2.2', 1, 2, 2),
(606, ' ', '2.3', 1, 2, 3),
(607, ' ', 'ordemTrabalho', 2, 3, 1),
(608, ' ', '3.2', 2, 3, 2),
(609, ' ', '3.3', 2, 3, 3),
(610, ' ', '3.4', 2, 3, 4),
(611, ' ', '3.5', 2, 3, 5),
(612, ' ', '4.1', 3, 4, 1),
(613, ' ', '4.2', 3, 4, 2),
(614, ' ', '4.3', 3, 4, 3),
(615, ' ', '4.4', 3, 4, 4),
(616, ' ', '4.5', 3, 4, 5),
(617, ' ', '4.6', 3, 4, 6),
(618, ' ', '4.7', 3, 4, 7),
(619, ' ', '4.9', 3, 4, 8),
(620, ' ', '4.9', 3, 4, 9),
(621, ' ', '4.10', 3, 4, 10),
(622, ' ', '4.11', 3, 4, 11),
(623, ' ', '4.12', 3, 4, 12),
(624, ' ', '5.1', 1, 5, 1),
(625, ' ', '5.2', 1, 5, 2),
(626, ' ', '5.3', 1, 5, 3),
(627, ' ', '6.1', 2, 6, 1),
(628, ' ', '6.2', 2, 6, 2),
(629, ' ', '6.3', 2, 6, 3),
(630, ' ', '6.4', 2, 6, 4),
(631, ' ', '7.1', 1, 7, 1),
(632, ' ', '7.2', 1, 7, 2),
(633, ' ', '8.1', 1, 8, 1),
(634, ' ', '8.2', 1, 8, 2),
(635, ' ', '9.1', 2, 9, 1),
(636, ' ', '9.2', 2, 9, 2),
(637, ' ', '9.3', 2, 9, 3),
(638, ' ', '10.1', 2, 10, 1),
(639, ' ', '10.2', 2, 10, 2),
(640, ' ', '10.3', 2, 10, 3),
(641, ' ', '11.1', 1, 11, 1),
(642, ' ', '1.1', 1, 1, 1),
(643, ' ', '1.2', 2, 1, 2),
(644, ' ', '1.3', 2, 1, 3),
(645, ' ', '1.4', 2, 1, 4),
(646, ' ', '1.5', 2, 1, 5),
(647, ' ', '2.1', 1, 2, 1),
(648, ' ', '2.2', 1, 2, 2),
(649, ' ', '2.3', 1, 2, 3),
(650, ' ', 'ordemTrabalho', 2, 3, 1),
(651, ' ', '3.2', 2, 3, 2),
(652, ' ', '3.3', 2, 3, 3),
(653, ' ', '3.4', 2, 3, 4),
(654, ' ', '3.5', 2, 3, 5),
(655, ' ', '4.1', 3, 4, 1),
(656, ' ', '4.2', 3, 4, 2),
(657, ' ', '4.3', 3, 4, 3),
(658, ' ', '4.4', 3, 4, 4),
(659, ' ', '4.5', 3, 4, 5),
(660, ' ', '4.6', 3, 4, 6),
(661, ' ', '4.7', 3, 4, 7),
(662, ' ', '4.9', 3, 4, 8),
(663, ' ', '4.9', 3, 4, 9),
(664, ' ', '4.10', 3, 4, 10),
(665, ' ', '4.11', 3, 4, 11),
(666, ' ', '4.12', 3, 4, 12),
(667, ' ', '5.1', 1, 5, 1),
(668, ' ', '5.2', 1, 5, 2),
(669, ' ', '5.3', 1, 5, 3),
(670, ' ', '6.1', 2, 6, 1),
(671, ' ', '6.2', 2, 6, 2),
(672, ' ', '6.3', 2, 6, 3),
(673, ' ', '6.4', 2, 6, 4),
(674, ' ', '7.1', 1, 7, 1),
(675, ' ', '7.2', 1, 7, 2),
(676, ' ', '8.1', 1, 8, 1),
(677, ' ', '8.2', 1, 8, 2),
(678, ' ', '9.1', 2, 9, 1),
(679, ' ', '9.2', 2, 9, 2),
(680, ' ', '9.3', 2, 9, 3),
(681, ' ', '10.1', 2, 10, 1),
(682, ' ', '10.2', 2, 10, 2),
(683, ' ', '10.3', 2, 10, 3),
(684, ' ', '11.1', 1, 11, 1),
(685, ' ', '1.1', 1, 1, 1),
(686, ' ', '1.2', 2, 1, 2),
(687, ' ', '1.3', 1, 1, 3),
(688, ' ', '1.4', 3, 1, 4),
(689, ' ', '1.5', 1, 1, 5),
(690, ' ', '2.1', 2, 2, 1),
(691, ' ', '2.2', 3, 2, 2),
(692, ' ', '2.3', 3, 2, 3),
(693, ' ', 'ordemTrabalho', 2, 3, 1),
(694, ' ', '3.2', 2, 3, 2),
(695, ' ', '3.3', 2, 3, 3),
(696, ' ', '3.4', 1, 3, 4),
(697, ' ', '3.5', 3, 3, 5),
(698, ' ', '4.1', 2, 4, 1),
(699, ' ', '4.2', 2, 4, 2),
(700, ' ', '4.3', 2, 4, 3),
(701, ' ', '4.4', 1, 4, 4),
(702, ' ', '4.5', 2, 4, 5),
(703, ' ', '4.6', 2, 4, 6),
(704, ' ', '4.7', 2, 4, 7),
(705, ' ', '4.9', 3, 4, 8),
(706, ' ', '4.9', 2, 4, 9),
(707, ' ', '4.10', 2, 4, 10),
(708, ' ', '4.11', 2, 4, 11),
(709, ' ', '4.12', 1, 4, 12),
(710, ' ', '5.1', 2, 5, 1),
(711, ' ', '5.2', 2, 5, 2),
(712, ' ', '5.3', 3, 5, 3),
(713, ' ', '6.1', 2, 6, 1),
(714, ' ', '6.2', 2, 6, 2),
(715, ' ', '6.3', 2, 6, 3),
(716, ' ', '6.4', 3, 6, 4),
(717, ' ', '7.1', 2, 7, 1),
(718, ' ', '7.2', 2, 7, 2),
(719, ' ', '8.1', 1, 8, 1),
(720, ' ', '8.2', 1, 8, 2),
(721, ' ', '9.1', 2, 9, 1),
(722, ' ', '9.2', 2, 9, 2),
(723, ' ', '9.3', 2, 9, 3),
(724, ' ', '10.1', 2, 10, 1),
(725, ' ', '10.2', 2, 10, 2),
(726, ' ', '10.3', 1, 10, 3),
(727, ' ', '11.1', 2, 11, 1),
(728, ' ', '1.1', 1, 1, 1),
(729, ' ', '1.2', 2, 1, 2),
(730, ' ', '1.3', 1, 1, 3),
(731, ' ', '1.4', 3, 1, 4),
(732, ' ', '1.5', 1, 1, 5),
(733, ' ', '2.1', 2, 2, 1),
(734, ' ', '2.2', 3, 2, 2),
(735, ' ', '2.3', 3, 2, 3),
(736, ' ', 'ordemTrabalho', 2, 3, 1),
(737, ' ', '3.2', 2, 3, 2),
(738, ' ', '3.3', 2, 3, 3),
(739, ' ', '3.4', 1, 3, 4),
(740, ' ', '3.5', 3, 3, 5),
(741, ' ', '4.1', 2, 4, 1),
(742, ' ', '4.2', 2, 4, 2),
(743, ' ', '4.3', 2, 4, 3),
(744, ' ', '4.4', 1, 4, 4),
(745, ' ', '4.5', 2, 4, 5),
(746, ' ', '4.6', 2, 4, 6),
(747, ' ', '4.7', 2, 4, 7),
(748, ' ', '4.9', 3, 4, 8),
(749, ' ', '4.9', 2, 4, 9),
(750, ' ', '4.10', 2, 4, 10),
(751, ' ', '4.11', 2, 4, 11),
(752, ' ', '4.12', 1, 4, 12),
(753, ' ', '5.1', 2, 5, 1),
(754, ' ', '5.2', 2, 5, 2),
(755, ' ', '5.3', 3, 5, 3),
(756, ' ', '6.1', 2, 6, 1),
(757, ' ', '6.2', 2, 6, 2),
(758, ' ', '6.3', 2, 6, 3),
(759, ' ', '6.4', 3, 6, 4),
(760, ' ', '7.1', 2, 7, 1),
(761, ' ', '7.2', 2, 7, 2),
(762, ' ', '8.1', 1, 8, 1),
(763, ' ', '8.2', 1, 8, 2),
(764, ' ', '9.1', 2, 9, 1),
(765, ' ', '9.2', 2, 9, 2),
(766, ' ', '9.3', 2, 9, 3),
(767, ' ', '10.1', 2, 10, 1),
(768, ' ', '10.2', 2, 10, 2),
(769, ' ', '10.3', 1, 10, 3),
(770, ' ', '11.1', 2, 11, 1),
(771, ' ', '1.1', 1, 1, 1),
(772, ' ', '1.2', 2, 1, 2),
(773, ' ', '1.3', 1, 1, 3),
(774, ' ', '1.4', 3, 1, 4),
(775, ' ', '1.5', 1, 1, 5),
(776, ' ', '2.1', 2, 2, 1),
(777, ' ', '2.2', 3, 2, 2),
(778, ' ', '2.3', 3, 2, 3),
(779, ' ', 'ordemTrabalho', 2, 3, 1),
(780, ' ', '3.2', 2, 3, 2),
(781, ' ', '3.3', 2, 3, 3),
(782, ' ', '3.4', 1, 3, 4),
(783, ' ', '3.5', 3, 3, 5),
(784, ' ', '4.1', 2, 4, 1),
(785, ' ', '4.2', 2, 4, 2),
(786, ' ', '4.3', 2, 4, 3),
(787, ' ', '4.4', 1, 4, 4),
(788, ' ', '4.5', 2, 4, 5),
(789, ' ', '4.6', 2, 4, 6),
(790, ' ', '4.7', 2, 4, 7),
(791, ' ', '4.9', 3, 4, 8),
(792, ' ', '4.9', 2, 4, 9),
(793, ' ', '4.10', 2, 4, 10),
(794, ' ', '4.11', 2, 4, 11),
(795, ' ', '4.12', 1, 4, 12),
(796, ' ', '5.1', 2, 5, 1),
(797, ' ', '5.2', 2, 5, 2),
(798, ' ', '5.3', 3, 5, 3),
(799, ' ', '6.1', 2, 6, 1),
(800, ' ', '6.2', 2, 6, 2),
(801, ' ', '6.3', 2, 6, 3),
(802, ' ', '6.4', 3, 6, 4),
(803, ' ', '7.1', 2, 7, 1),
(804, ' ', '7.2', 2, 7, 2),
(805, ' ', '8.1', 1, 8, 1),
(806, ' ', '8.2', 1, 8, 2),
(807, ' ', '9.1', 2, 9, 1),
(808, ' ', '9.2', 2, 9, 2),
(809, ' ', '9.3', 2, 9, 3),
(810, ' ', '10.1', 2, 10, 1),
(811, ' ', '10.2', 2, 10, 2),
(812, ' ', '10.3', 1, 10, 3),
(813, ' ', '11.1', 2, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
--

CREATE TABLE `formulario` (
  `idFormulario` int(11) NOT NULL,
  `NOS` int(11) NOT NULL,
  `empresa` varchar(70) NOT NULL,
  `diretoria` varchar(80) NOT NULL,
  `data_form` date NOT NULL,
  `hora` time NOT NULL,
  `atividade` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `Nempregados` int(11) NOT NULL,
  `bairro` varchar(90) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `inspetor` varchar(55) NOT NULL,
  `placaVeiculo` varchar(10) NOT NULL,
  `tipoContrato` varchar(45) NOT NULL,
  `responsavel` varchar(45) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  `gerencia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formulario`
--

INSERT INTO `formulario` (`idFormulario`, `NOS`, `empresa`, `diretoria`, `data_form`, `hora`, `atividade`, `endereco`, `Nempregados`, `bairro`, `cidade`, `inspetor`, `placaVeiculo`, `tipoContrato`, `responsavel`, `departamento`, `gerencia`) VALUES
(1, 45, 'lklkk', 'kkkkk', '2003-01-24', '14:00:00', ',l,l,', 'mkmkm', 80, 'kkmk', 'mkmkm', 'kmkmk', 'kmkmk', 'kmkmkm', 'mkmkm', 'mkm', 'mkmkmk'),
(2, 45, 'lklkk', 'kkkkk', '2003-01-24', '14:00:00', ',l,l,', 'mkmkm', 80, 'kkmk', 'mkmkm', 'kmkmk', 'kmkmk', 'kmkmkm', 'mkmkm', 'mkm', 'mkmkmk'),
(3, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(4, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(5, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(6, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(7, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(8, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(9, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(10, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(11, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(12, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(13, 5, ',lll', 'l,l,l', '2003-02-20', '14:00:00', 'l,l', ',l,l', 5, ',koo', ',,o,o', ',l,,lmimi', 'mimim', 'mimimi', 'immimim', 'mimmi', 'mmmimi'),
(14, 45, 'lklkk', 'kkkkk', '2003-01-24', '14:00:00', ',l,l,', 'mkmkm', 80, 'kkmk', 'mkmkm', 'kmkmk', 'kmkmk', 'kmkmkm', 'mkmkm', 'mkm', 'mkmkmk'),
(15, 6, 'Avulsa', 'eu', '2003-02-24', '14:00:00', 'Qualquer', 'kskskks', 8, 'kskksk', 'Foz do Iguaçu', 'Eu', 'AKS2K', 'Qualquer Tipo', 'LLL', 'lll', 'LLLLL');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `user_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`user_name`, `email`, `senha`, `idUsuario`) VALUES
('teste', 'teste@gmail.com', 'teste123', 1),
('kelvinsilva', 'kelvinsilva@gmail.com', 'senha', 35),
('migel.araujo', '', 'senha', 73);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`idEtapa`);

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idFormulario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etapa`
--
ALTER TABLE `etapa`
  MODIFY `idEtapa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=814;

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `idFormulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;