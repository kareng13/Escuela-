-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 03:19 AM
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
-- Database: `escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `licenciatura` varchar(30) NOT NULL,
  `cuatrimestre` varchar(10) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `licenciatura`, `cuatrimestre`, `status`) VALUES
(1, 'Gerardo ', 'Casanova', '1212121212', 'gerardoca@gmail.com', 'ing. software', '6', 0),
(2, 'Sofia', 'Gonzalez', '1442542489', 'karenglez13@gmail.com', 'ing. software', '6', 0),
(3, 'Ricardo', 'Perecito', '9843784399', 'ricardito@gmail.com', 'ing. software', '6', 1),
(11, 'Brisa', 'Dominguez', '9873009811', 'brisitap@gmail.com', 'derecho', '4', 1),
(18, 'Angie', 'Velasco', '9999998765', 'angievelasquito@gmail.com', 'derecho', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `cuatrimestre` int(20) NOT NULL,
  `licenciatura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `cuatrimestre`, `licenciatura`) VALUES
(1, 'servidores', 6, 'ing. software'),
(2, 'proyecto de transformación', 6, 'ing. software'),
(3, 'economia politica', 4, 'derecho'),
(4, 'psicoanalisis', 6, 'psicologia'),
(6, 'etica', 4, 'derecho');

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `status`) VALUES
(1, 'Alberto', 'Pech', '5555666555', 'albertopech@gmail.com', 1),
(2, 'Carlos', 'Castillo', '1893762847', 'carloscastillito@gmail.com', 1),
(3, 'Pablo', 'Hipolito', '8888333298', 'pablitohipolitito@gmail.com', 0),
(4, 'Moises', 'Ortega', '8975067380', 'moisesortega@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo_2` (`correo`),
  ADD UNIQUE KEY `correo_5` (`correo`),
  ADD KEY `correo_3` (`correo`),
  ADD KEY `correo` (`correo`) USING BTREE;
ALTER TABLE `alumnos` ADD FULLTEXT KEY `correo_4` (`correo`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
