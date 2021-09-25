-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2021 a las 11:22:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infoautos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `Patente` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Modelo` int(11) NOT NULL,
  `DniDuenio` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`Patente`, `Marca`, `Modelo`, `DniDuenio`) VALUES
('ADC 152', 'Fiat Uno', 1998, '22985265'),
('KJU 952', 'Ford Fiesta', 2006, '22985265'),
('LKI 865', 'Fiat Siena', 1990, '28326986'),
('LOL 555', 'Ford Fiesta', 2020, '25963874'),
('MOM 011', 'Volkswagen Gol', 2004, '38222222'),
('POL 968', 'Renault 12', 1977, '28326986'),
('POP 333', 'Chery Tiggo 3', 2020, '38222222'),
('SDC 965', 'Peugeot 205', 1988, '30875962'),
('UYH 985', 'Fiat Palio', 1995, '30875962');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `NroDni` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechaNac` date NOT NULL DEFAULT '1900-01-01',
  `Telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Domicilio` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`NroDni`, `Apellido`, `Nombre`, `fechaNac`, `Telefono`, `Domicilio`) VALUES
('10909090', 'Sprungfeld', 'Hans', '1975-06-19', '299-1332500', 'Springfield'),
('20985220', 'El Zapo', 'Pepe', '2010-11-16', '299-8877788', 'Pepepepe'),
('22985265', 'Ramirez', 'Claudia', '1971-05-16', '299-9854155', 'Sarmiento 55'),
('25963874', 'Farias', 'Marta', '1975-06-21', '299-1559354', 'Roca 568'),
('28326986', 'Moyo', 'Manuela', '1981-12-23', '299-9632587', 'Linares 44 piso 2 dpto 5'),
('30875962', 'Lopez', 'Eduardo', '1983-10-03', '299-6587741', 'Santa Fe 98'),
('38222222', 'Garcia Ruiz', 'María Eugenia', '2000-05-05', '299-7777777', 'UnDosTres'),
('39222888', 'El', 'Brayan', '2010-09-12', '299-1277790', 'Entucasa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`Patente`),
  ADD KEY `idTipoVehiculo` (`DniDuenio`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`NroDni`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`DniDuenio`) REFERENCES `persona` (`NroDni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;