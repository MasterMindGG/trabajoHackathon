-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2023 a las 15:29:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preguntashackathon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id` int(11) NOT NULL,
  `pais` varchar(10) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `bachiller` varchar(45) DEFAULT NULL,
  `pasantias` varchar(25) DEFAULT NULL,
  `cargahr` varchar(25) DEFAULT NULL,
  `contenidos` varchar(25) DEFAULT NULL,
  `funcioncentro` varchar(25) DEFAULT NULL,
  `relalumnos` varchar(25) DEFAULT NULL,
  `reldocentes` varchar(25) DEFAULT NULL,
  `bullying` varchar(2) DEFAULT NULL,
  `psicologo` varchar(2) NOT NULL,
  `estadoinstitucion` varchar(25) DEFAULT NULL,
  `wifi` varchar(25) DEFAULT NULL,
  `cantequipamientos` varchar(25) DEFAULT NULL,
  `calequipamientos` varchar(25) DEFAULT NULL,
  `ace` varchar(25) DEFAULT NULL,
  `muebles` varchar(2) DEFAULT NULL,
  `matespecificas` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id`, `pais`, `edad`, `genero`, `departamento`, `email`, `bachiller`, `pasantias`, `cargahr`, `contenidos`, `funcioncentro`, `relalumnos`, `reldocentes`, `bullying`, `psicologo`, `estadoinstitucion`, `wifi`, `cantequipamientos`, `calequipamientos`, `ace`, `muebles`, `matespecificas`) VALUES
(1, 'Paraguay', 12, 'Masculino', 'AltoParaguay', 'lautaro12345@gmail.com', 'Informatica', 'Cualquiera de las anterio', 'Suficiente', 'Bueno', 'Bueno', 'Excelente', 'Excelente', 'No', 'Si', 'Regular', 'Bueno', 'Si', 'Regular', 'Si', 'Si', 'Si'),
(2, 'Paraguay', 12, 'Masculino', 'AltoParaguay', 'lautaro123456@gmail.com', 'Informatica', 'Cualquiera de las anterio', 'Suficiente', 'Bueno', 'Bueno', 'Excelente', 'Excelente', 'No', 'Si', 'Regular', 'Bueno', 'Si', 'Regular', 'Si', 'Si', 'Si'),
(3, 'Uruguay', 35, 'Masculino', 'RíoNegro', 'lautarocaballero@gmail.com', 'Construcciones Civiles', 'Elijo yo', 'Excesivo', 'Desactualizado', 'Excelente', 'Malo', 'Malo', 'Si', 'No', 'Descuidado', 'Malo', 'No', 'Descuidado', 'No hay', 'No', 'No'),
(5, 'Argentina', 16, 'Masculino', 'Mendoza', 'lautarocaballero123@gmail.com', 'Informatica', 'Elijo yo', 'Insuficiente', 'Malo', 'Bueno', 'Excelente', 'Excelente', 'Si', 'Si', 'Descuidado', 'Excelente', 'Si', 'Descuidado', 'Si', 'Si', 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
