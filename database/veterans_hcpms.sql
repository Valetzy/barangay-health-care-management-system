-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 04:24 PM
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
-- Database: `veterans_hcpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_immuni`
--

CREATE TABLE `add_immuni` (
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `wt` varchar(255) NOT NULL,
  `ms` varchar(255) NOT NULL,
  `ht` varchar(255) NOT NULL,
  `ns` varchar(255) NOT NULL,
  `muac` varchar(255) NOT NULL,
  `hs` varchar(255) NOT NULL,
  `bt` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `child_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_immuni`
--

INSERT INTO `add_immuni` (`user_id`, `date`, `age`, `wt`, `ms`, `ht`, `ns`, `muac`, `hs`, `bt`, `temp`, `medicine`, `child_id`) VALUES
(1, '2024-01-23', '12', '12', '123', '12', '32', '43', '65', '767', '76', '76', '1'),
(2, '2024-01-23', '34', '123', '67', '45', '67', '78', '678', '45', '45678', 'nsyliw', '2'),
(3, '2024-01-23', '10', '40', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_prenatal`
--

CREATE TABLE `add_prenatal` (
  `user_id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `months` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `ht` int(11) NOT NULL,
  `bmi` int(11) NOT NULL,
  `fh` int(11) NOT NULL,
  `fht` int(11) NOT NULL,
  `date` date NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_prenatal`
--

INSERT INTO `add_prenatal` (`user_id`, `days`, `week`, `months`, `bp`, `wt`, `ht`, `bmi`, `fh`, `fht`, `date`, `p_id`) VALUES
(1, 154, 35, 4, 120, 56, 167, 234, 543, 132, '2024-01-23', 0),
(2, 154, 35, 4, 120, 56, 167, 234, 543, 132, '2024-01-23', 1),
(3, 125, 20, 3, 120, 50, 150, 22, 60, 123, '2024-01-24', 3),
(4, 140, 34, 4, 120, 50, 150, 22, 60, 123, '2024-01-24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `add_prenatal_midwife`
--

CREATE TABLE `add_prenatal_midwife` (
  `user_id` int(11) NOT NULL,
  `gravity` varchar(255) NOT NULL,
  `ttimmnuni` varchar(255) NOT NULL,
  `parity` varchar(255) NOT NULL,
  `dateofdelivery` varchar(255) NOT NULL,
  `typeofdelivery` varchar(255) NOT NULL,
  `managename` varchar(255) NOT NULL,
  `professional` varchar(255) NOT NULL,
  `assisted` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_prenatal_midwife`
--

INSERT INTO `add_prenatal_midwife` (`user_id`, `gravity`, `ttimmnuni`, `parity`, `dateofdelivery`, `typeofdelivery`, `managename`, `professional`, `assisted`, `place`, `remarks`, `p_id`) VALUES
(1, 'qw1', 'John Earl', 'John Earl', '2024-01-12', 'John Earl', 'John Earl', 'John Earl', 'John Earl', 'John Earl', 'adsfdghj', 1),
(2, '123', 'basta', 'parity', '2024-09-01', 'normal', 'John Earl', 'John Earl', 'John Earl', 'concepcion', 'manganakay na next season', 3);

-- --------------------------------------------------------

--
-- Table structure for table `add_prenatal_table`
--

CREATE TABLE `add_prenatal_table` (
  `user_id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `ttinjection` varchar(255) NOT NULL,
  `l1` varchar(255) NOT NULL,
  `l2` varchar(255) NOT NULL,
  `l3` varchar(255) NOT NULL,
  `l4` varchar(255) NOT NULL,
  `complaintsa` varchar(255) NOT NULL,
  `medication` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_prenatal_table`
--

INSERT INTO `add_prenatal_table` (`user_id`, `id_p`, `ttinjection`, `l1`, `l2`, `l3`, `l4`, `complaintsa`, `medication`) VALUES
(1, 1, 'svdsg', 'segvd', 'afffe', 'ew4tfv', 'vsedrft', 'vbn m', 'ctvybunimo'),
(2, 3, 'tt injected', '1', '2', '45', '5', 'naeifhwie', 'wejfuw');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'admin', 'admin', 'Justine ', 'Abucay');

-- --------------------------------------------------------

--
-- Table structure for table `bhw_user`
--

CREATE TABLE `bhw_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cell` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bhw_user`
--

INSERT INTO `bhw_user` (`username`, `password`, `name`, `email`, `user_id`, `cell`) VALUES
('user1', '12345', 'reymark', 'vodatankquiros@gmail.com', 1, '09207555576'),
('sasa', '123456789', 'John Earl R. Quiros', 'vodatankquiros@gmail.com ', 3, '1234567890'),
('wwww', '123456', 'dawana', 'yujade3@gmail.com', 4, '09876543'),
('red', 'red', 'justine maot', 'valetzy0114@gmail.com', 5, '09306600247'),
('soso', 'admin', 'justine', 'roldan.sencil@sibugaytech.edu.ph', 6, '912391431'),
('reymon', 'reymon', 'Reymon', 'vodatankquiros@gmail.com', 7, '09306600247');

-- --------------------------------------------------------

--
-- Table structure for table `family_plan`
--

CREATE TABLE `family_plan` (
  `lastperiod` varchar(255) NOT NULL,
  `previousperiod` varchar(255) NOT NULL,
  `changingmethod` varchar(255) NOT NULL,
  `dysmenorrhea` varchar(255) NOT NULL,
  `hydatidiform` varchar(255) NOT NULL,
  `ectopic` varchar(255) NOT NULL,
  `geniticalarea` varchar(255) NOT NULL,
  `ifyesindicate` varchar(255) NOT NULL,
  `soreulcer` varchar(255) NOT NULL,
  `sexually` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hiv_aids` varchar(255) NOT NULL,
  `unplesant` varchar(255) NOT NULL,
  `approvevisit` varchar(255) NOT NULL,
  `domesticviolence` varchar(255) NOT NULL,
  `referedtop` varchar(255) NOT NULL,
  `referedspecigy` varchar(255) NOT NULL,
  `kg` int(255) NOT NULL,
  `m` int(255) NOT NULL,
  `mmhg` int(255) NOT NULL,
  `min` int(11) NOT NULL,
  `skinsa` text NOT NULL,
  `CONJUNCTIVA` varchar(255) NOT NULL,
  `NECK` varchar(255) NOT NULL,
  `BREAST` varchar(255) NOT NULL,
  `EXTREMITIES` varchar(255) NOT NULL,
  `PELVICEXAMINATION` varchar(255) NOT NULL,
  `cervicalabnormalities` varchar(255) NOT NULL,
  `cervicalconsistency` varchar(255) NOT NULL,
  `tenderness` varchar(255) NOT NULL,
  `adnexalmass` varchar(255) NOT NULL,
  `uterineposition` varchar(255) NOT NULL,
  `uterinedepth` varchar(255) NOT NULL,
  `fam_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_plan`
--

INSERT INTO `family_plan` (`lastperiod`, `previousperiod`, `changingmethod`, `dysmenorrhea`, `hydatidiform`, `ectopic`, `geniticalarea`, `ifyesindicate`, `soreulcer`, `sexually`, `user_id`, `hiv_aids`, `unplesant`, `approvevisit`, `domesticviolence`, `referedtop`, `referedspecigy`, `kg`, `m`, `mmhg`, `min`, `skinsa`, `CONJUNCTIVA`, `NECK`, `BREAST`, `EXTREMITIES`, `PELVICEXAMINATION`, `cervicalabnormalities`, `cervicalconsistency`, `tenderness`, `adnexalmass`, `uterineposition`, `uterinedepth`, `fam_id`) VALUES
('2024-01-12', '2024-01-12', 'moderate (3-5 pads per day)', '', '✓', '', 'No', 'No', 'Yes', 'No', 1, 'No', 'Yes', 'Yes', 'No', 'DSWD', '', 36, 156, 132, 120, 'normal', 'pale', 'normal', 'normal', 'normal', 'normal', 'inflammation', 'soft', '✓', '✓', 'anteflexed', '2', 0),
('', '', '', '', '', '', '', '', '', '', 2, '', '', '', '', '', '', 36, 156, 132, 120, '', '', '', '', '', '', '', '', '', '', '', '2', 0),
('2024-01-02', '2023-12-23', 'heavy ( >5 pads per day)', '✓', '', '', 'No', 'Yes', 'Yes', 'No', 3, 'No', 'No', 'No', 'No', 'DSWD', '', 82, 168, 120, 80, 'normal', 'normal', 'normal', 'normal', 'normal', 'mass', 'wants', 'soft', '', '✓', 'mid', '11', 0),
('', '', '', '', '', '', '', '', '', '', 4, '', '', '', '', '', '', 82, 168, 120, 80, '', '', '', '', '', '', '', '', '', '', '', '11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `family_planning`
--

CREATE TABLE `family_planning` (
  `user_id` int(11) NOT NULL,
  `client` varchar(255) NOT NULL,
  `philhealth` varchar(255) NOT NULL,
  `nhts` varchar(255) NOT NULL,
  `pantawid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dateb` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `educ` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `civil` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `date_birth` varchar(255) NOT NULL,
  `ageq` int(255) NOT NULL,
  `occu` varchar(255) NOT NULL,
  `living` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `newacceptor` varchar(255) NOT NULL,
  `forfp` varchar(255) NOT NULL,
  `otherss` varchar(255) NOT NULL,
  `currentuser` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `effects` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `clinic` varchar(255) NOT NULL,
  `restart` varchar(255) NOT NULL,
  `coc` varchar(255) NOT NULL,
  `pop` varchar(255) NOT NULL,
  `injectable` varchar(255) NOT NULL,
  `implant` varchar(255) NOT NULL,
  `iud` varchar(255) NOT NULL,
  `intervals` varchar(255) NOT NULL,
  `partum` varchar(255) NOT NULL,
  `condom` varchar(255) NOT NULL,
  `bom` varchar(255) NOT NULL,
  `bbt` varchar(255) NOT NULL,
  `stm` varchar(255) NOT NULL,
  `sdm` varchar(255) NOT NULL,
  `lam` varchar(255) NOT NULL,
  `othersss` varchar(255) NOT NULL,
  `severe` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL,
  `nontrau` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL,
  `chestpain` varchar(255) NOT NULL,
  `cough` varchar(255) NOT NULL,
  `jaundice` varchar(255) NOT NULL,
  `unexplained` varchar(255) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `clientsmoker` varchar(255) NOT NULL,
  `withdisability` varchar(255) NOT NULL,
  `abnormalvigina` varchar(255) NOT NULL,
  `pleasespecify` varchar(255) NOT NULL,
  `pregnanciesg` varchar(255) NOT NULL,
  `pregnanciesp` varchar(255) NOT NULL,
  `fullterm` varchar(255) NOT NULL,
  `abortion` varchar(255) NOT NULL,
  `premature` varchar(255) NOT NULL,
  `livingchildren` varchar(255) NOT NULL,
  `datedelivery` varchar(255) NOT NULL,
  `typedelivery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`user_id`, `client`, `philhealth`, `nhts`, `pantawid`, `name`, `dateb`, `age`, `educ`, `occupation`, `address`, `civil`, `religion`, `spouse`, `date_birth`, `ageq`, `occu`, `living`, `more`, `income`, `newacceptor`, `forfp`, `otherss`, `currentuser`, `reason`, `effects`, `method`, `clinic`, `restart`, `coc`, `pop`, `injectable`, `implant`, `iud`, `intervals`, `partum`, `condom`, `bom`, `bbt`, `stm`, `sdm`, `lam`, `othersss`, `severe`, `history`, `nontrau`, `current`, `chestpain`, `cough`, `jaundice`, `unexplained`, `intake`, `clientsmoker`, `withdisability`, `abnormalvigina`, `pleasespecify`, `pregnanciesg`, `pregnanciesp`, `fullterm`, `abortion`, `premature`, `livingchildren`, `datedelivery`, `typedelivery`) VALUES
(1, '23456', '1234567890', 'Yes', 'Yes', 'Quiros, John Earl R.', '2003-01-14', 21, 'bsit', 'none', 'Concepcion, Alicia, Zamboanga Sibugay', 'Single', 'catholic', 'John Westre Emmanuel Sadaba', '1998-05-19', 25, 'housebana', '7', 'Yes', '100000', '✓', 'spacing', 'basta', '✓', 'limiting', 'rash', '', '✓', '', '', '✓', '', '', '✓', '', '', '✓', '', '', '✓', '', '', 'secret', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'hehe', '12', '12', '31', '32', '32', '7', '', 'Vaginal'),
(2, '23456', '1234567890', '', '', 'Quiros, John Earl R.', '', 21, 'bsit', 'none', 'Concepcion, Alicia, Zamboanga Sibugay', '', 'catholic', 'John Westre Emmanuel Sadaba', '', 25, 'housebana', '7', '', '100000', '', '', 'basta', '', '', 'rash', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'secret', '', '', '', '', '', '', '', '', '', '', '', '', 'hehe', '12', '12', '31', '32', '32', '7', '', ''),
(3, '1258', '7856987', 'No', 'No', 'John Westre Emmanuel Sadaba', '1999-05-12', 25, 'college graduate', 'radio DJ', 'stn, lambuyogan, alicia, zamboanga sibugay', '', 'camacoop', 'ritchelle kate agsaluna', '2000-10-26', 23, 'assistant managaer', '0', 'Yes', '50000', '', 'limiting', '', '', 'limiting', '', '✓', '', '', '✓', '', '', '', '✓', '', '✓', '', '', '', '', '', '', '', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'No', '', '0', '0', 'yes', '0', 'no', '0', '', ''),
(4, '1258', '7856987', '', '', 'John Westre Emmanuel Sadaba', '', 25, 'college graduate', 'radio DJ', 'stn, lambuyogan, alicia, zamboanga sibugay', '', 'camacoop', 'ritchelle kate agsaluna', '', 23, 'assistant managaer', '0', '', '50000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', 'yes', '0', 'no', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fam_plan`
--

CREATE TABLE `fam_plan` (
  `user_id` int(11) NOT NULL,
  `datam` varchar(255) NOT NULL,
  `medfindings` varchar(255) NOT NULL,
  `methaccep` varchar(255) NOT NULL,
  `serviceprovider` varchar(255) NOT NULL,
  `datasp` varchar(255) NOT NULL,
  `id_a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fam_plan`
--

INSERT INTO `fam_plan` (`user_id`, `datam`, `medfindings`, `methaccep`, `serviceprovider`, `datasp`, `id_a`) VALUES
(1, '2024-01-06', 'kaning imong lobot wasak na', 'for the nsj', 'ian dave lemera', '2024-01-12', 2),
(2, '2024-01-23', 'yaeszrg', 'zdhrvdsr', 'zsdtyjfcvbz', '2024-02-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE `immunization` (
  `user_id` int(11) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `childno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `pod` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `adds` varchar(255) NOT NULL,
  `aod` varchar(255) NOT NULL,
  `f` varchar(255) NOT NULL,
  `occ` varchar(255) NOT NULL,
  `m` varchar(255) NOT NULL,
  `nbs` varchar(255) NOT NULL,
  `hepa` varchar(255) NOT NULL,
  `bcl` varchar(255) NOT NULL,
  `penta` varchar(255) NOT NULL,
  `opv` varchar(255) NOT NULL,
  `pcv` varchar(255) NOT NULL,
  `ipv` varchar(255) NOT NULL,
  `measles` varchar(255) NOT NULL,
  `penta1` varchar(255) NOT NULL,
  `opv2` varchar(255) NOT NULL,
  `pcv2` varchar(255) NOT NULL,
  `ipv2` varchar(255) NOT NULL,
  `mmr` varchar(255) NOT NULL,
  `penta3` varchar(255) NOT NULL,
  `opv3` varchar(255) NOT NULL,
  `pcv3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `immunization`
--

INSERT INTO `immunization` (`user_id`, `cell`, `childno`, `name`, `sex`, `time`, `birth`, `pod`, `weight`, `adds`, `aod`, `f`, `occ`, `m`, `nbs`, `hepa`, `bcl`, `penta`, `opv`, `pcv`, `ipv`, `measles`, `penta1`, `opv2`, `pcv2`, `ipv2`, `mmr`, `penta3`, `opv3`, `pcv3`) VALUES
(1, '09207555576', '368794', 'Raymund Peter Cabanero', 'Male', '08:37', '2024-01-03', '123123', '75', 'Poblacion Ipil, Zamboanga Sibugay', 'qw', '1123', '123', '123', '123', 'none', '123', '123', 'qwe', 'qwe', 'qwe', '123123', 'qwe', 'qwe', 'qwe', 'qwe', '123', 'qwe', 'qweqwe', '123'),
(2, '12345678', '765432', 'Raymund Peter Cabanero', 'Male', '09:42', '2024-01-03', '123123', '75', 'Poblacion Ipil, Zamboanga Sibugay', 'qw', '1123', '123', '123', '123', 'none', '123', '123', 'qwe', 'qwe', 'qwe', '123123', 'qwe', 'qwe', 'qwe', 'Quiros, John Earl R.', 'Quiros, John Earl R.', 'Quiros, John Earl R.', 'Quiros, John Earl R.', 'Quiros, John Earl R.');

-- --------------------------------------------------------

--
-- Table structure for table `midwife_user`
--

CREATE TABLE `midwife_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `midwife_user`
--

INSERT INTO `midwife_user` (`user_id`, `username`, `password`, `name`, `cell`, `email`) VALUES
(1, 'hotdog', 'carl', 'Mascarinas', '76543', 'yujade3@gmail.com'),
(2, 'valetzy', 'john', 'John Earl R. Quiros', '09207555576', 'vodatankquiros@gmail.com '),
(3, 'girl', '123456789', 'sasa', '1234567890', 'vodatankquiros@gmail.com'),
(4, 'lemera ugh', '12345', 'dave maot', '0987654', 'iandavelemera@gmail.com'),
(5, 'sasa', '1234567', 'John Earl R. Quiros', '1234567890', 'vodatankquiros@gmail.com '),
(6, 'boy', '23456u7i8o9', 'dave', '0987654', 'iandavelemera@gmail.com'),
(8, 'midwife', 'midwife', 'John Earl R. Quiros', '09207555576', 'vodatankquiros@gmail.com'),
(9, 'carl', 'carl123', 'Carlo', '09207555576', 'roldan.sencil@sibugaytech.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal`
--

CREATE TABLE `prenatal` (
  `user_id` int(11) NOT NULL,
  `buntis` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `phic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `educ` varchar(255) NOT NULL,
  `occu` varchar(255) NOT NULL,
  `husband` varchar(255) NOT NULL,
  `occuhus` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `drug` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `smoke` varchar(255) NOT NULL,
  `alco` varchar(255) NOT NULL,
  `menar` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `menor` varchar(255) NOT NULL,
  `otherss` varchar(255) NOT NULL,
  `nochild` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `deceased` varchar(255) NOT NULL,
  `alive` varchar(255) NOT NULL,
  `foodalert` varchar(255) NOT NULL,
  `drugalert` varchar(255) NOT NULL,
  `illness` varchar(255) NOT NULL,
  `accident` varchar(255) NOT NULL,
  `hospi` varchar(255) NOT NULL,
  `arti` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `g` varchar(255) NOT NULL,
  `p` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `f` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `l` varchar(255) NOT NULL,
  `lmp` varchar(255) NOT NULL,
  `det` varchar(255) NOT NULL,
  `ht` varchar(255) NOT NULL,
  `edc` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `vdrl` varchar(255) NOT NULL,
  `astma` varchar(255) NOT NULL,
  `hyper` varchar(255) NOT NULL,
  `cancer` varchar(255) NOT NULL,
  `othersss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prenatal`
--

INSERT INTO `prenatal` (`user_id`, `buntis`, `cell`, `mother`, `phic`, `name`, `age`, `status`, `religion`, `address`, `birth`, `birthplace`, `educ`, `occu`, `husband`, `occuhus`, `food`, `drug`, `others`, `smoke`, `alco`, `menar`, `duration`, `menor`, `otherss`, `nochild`, `rank`, `deceased`, `alive`, `foodalert`, `drugalert`, `illness`, `accident`, `hospi`, `arti`, `b`, `c`, `g`, `p`, `a`, `f`, `pp`, `l`, `lmp`, `det`, `ht`, `edc`, `blood`, `vdrl`, `astma`, `hyper`, `cancer`, `othersss`) VALUES
(1, 'justine ', '09207555576', 'edisa', 'ongoig', 'edisa teleron', '22', 'Single', 'catholic', 'stn, lambuyogan, alicia, zamboanga sibugay', '0020-05-21', 'titay', '2nd college', 'housebana', 'justin a martinito', 'fuckers', 'adobo', 'none', 'none', 'yes', 'yes', '2024-01-11', '23', 'fouhfe', 'ufihweu', '12', '7', 'sdfvb', 'yes', 'yes,seafoods', 'yes', 'cancer', 'yes', 'yes', 'condom', 'pills', 'iud', '1', '2', '3', '4', '5', '6', '120', '129', '165', '100', 'a+', '123', '✓', '✓', '✓', 'none'),
(2, 'justine ', '09207555576', 'edisa', 'ongoig', 'edisa teleron', '22', 'Status', 'catholic', 'stn, lambuyogan, alicia, zamboanga sibugay', '2024-01-02', 'titay', '2nd college', 'housebana', 'justin a martinito', 'fuckers', 'adobo', 'none', 'none', 'yes', 'yes', '', '23', 'fouhfe', 'ufihweu', '12', '7', 'sdfvb', 'yes', 'yes,seafoods', 'yes', 'cancer', 'yes', 'yes', 'condom', 'pills', 'iud', '1', '2', '3', '4', '5', '6', '120', '129', '165', '100', 'a+', '123', '', '', '', 'none'),
(3, '345678909876543234567890', '09207555576', 'Susan', 'ok', '345678909876543234567890', '16', 'Single', 'catholic', 'Concepcion, Alicia, Zamboanga Sibugay', '1988-01-26', 'IPIL', '2nd college', 'housebana', '123456788987654', 'farmer', 'shrimp', 'none', 'none', 'yes, hope', 'yes', '2024-01-24', '', '', '', '7', '4', '0', '7', 'SHRIMP', 'PARACETAMOL', 'SAKIT SA TULO', 'N/A', '', '', '', '', '1000', '1000', '1000', '1000', '1000', '1000', '', '', '', '', '', '', '', '✓', '', 'sira');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_immuni`
--
ALTER TABLE `add_immuni`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `add_prenatal`
--
ALTER TABLE `add_prenatal`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `add_prenatal_midwife`
--
ALTER TABLE `add_prenatal_midwife`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `add_prenatal_table`
--
ALTER TABLE `add_prenatal_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bhw_user`
--
ALTER TABLE `bhw_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `family_plan`
--
ALTER TABLE `family_plan`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `family_planning`
--
ALTER TABLE `family_planning`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `fam_plan`
--
ALTER TABLE `fam_plan`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `immunization`
--
ALTER TABLE `immunization`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `midwife_user`
--
ALTER TABLE `midwife_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `prenatal`
--
ALTER TABLE `prenatal`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_immuni`
--
ALTER TABLE `add_immuni`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_prenatal`
--
ALTER TABLE `add_prenatal`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_prenatal_midwife`
--
ALTER TABLE `add_prenatal_midwife`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_prenatal_table`
--
ALTER TABLE `add_prenatal_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bhw_user`
--
ALTER TABLE `bhw_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `family_plan`
--
ALTER TABLE `family_plan`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `family_planning`
--
ALTER TABLE `family_planning`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fam_plan`
--
ALTER TABLE `fam_plan`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `immunization`
--
ALTER TABLE `immunization`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `midwife_user`
--
ALTER TABLE `midwife_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prenatal`
--
ALTER TABLE `prenatal`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
