-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 12:38 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u653664851_eingreso`
--

-- --------------------------------------------------------

--
-- Table structure for table `atencion`
--

CREATE TABLE `atencion` (
  `IdAtencion` int(11) NOT NULL,
  `Descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atencion`
--

INSERT INTO `atencion` (`IdAtencion`, `Descripcion`) VALUES
(1, 'Programada'),
(2, 'Atendida'),
(3, 'Cancelada');

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `IdCita` int(11) NOT NULL,
  `IdPaciente` int(11) DEFAULT NULL,
  `IdAtencion` int(11) DEFAULT NULL,
  `FechaCita` date DEFAULT NULL,
  `HoraCita` time DEFAULT NULL,
  `IdMedico` int(11) DEFAULT NULL,
  `IdEspecialidad` int(11) DEFAULT NULL,
  `IdConsultorio` int(11) DEFAULT NULL,
  `Observacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`IdCita`, `IdPaciente`, `IdAtencion`, `FechaCita`, `HoraCita`, `IdMedico`, `IdEspecialidad`, `IdConsultorio`, `Observacion`) VALUES
(2, 1, 1, '2020-04-03', '15:00:00', 1, 1, 1, 'Pruebas');

-- --------------------------------------------------------

--
-- Table structure for table `consultorios`
--

CREATE TABLE `consultorios` (
  `IdConsultorio` int(11) NOT NULL,
  `NombreConsultorio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultorios`
--

INSERT INTO `consultorios` (`IdConsultorio`, `NombreConsultorio`) VALUES
(1, 'Medicina General 1'),
(2, 'Neurología'),
(3, 'Psicología'),
(4, 'optometria');

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `IdEmpresa` int(11) NOT NULL,
  `NombreEmpresa` varchar(40) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

CREATE TABLE `especialidades` (
  `IdEspecialidad` int(11) NOT NULL,
  `Descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `especialidades`
--

INSERT INTO `especialidades` (`IdEspecialidad`, `Descripcion`) VALUES
(1, 'Medico General'),
(2, 'Neurologia'),
(3, 'Ortopedia'),
(4, 'Psicologia');

-- --------------------------------------------------------

--
-- Table structure for table `formularioexamen`
--

CREATE TABLE `formularioexamen` (
  `IdPregunta` int(11) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE `medicos` (
  `IdMedico` int(11) NOT NULL,
  `Documento` varchar(20) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `IdEspecialidad` int(11) DEFAULT NULL,
  `Telefono` bigint(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`IdMedico`, `Documento`, `Nombre`, `Apellidos`, `IdEspecialidad`, `Telefono`, `Email`) VALUES
(1, '987654', '', '', 0, 0, ''),
(2, '573193163486', '', '', 0, 0, ''),
(3, '544454645', '', '', 0, 0, ''),
(6, '1024502626', 'diego alejandro', 'Orduña Castañeda', 2, 3202750732, 'daordunac@libertadores.edu.co');

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `IdPaciente` int(11) NOT NULL,
  `Documento` varchar(30) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Telefono` bigint(20) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`IdPaciente`, `Documento`, `Nombre`, `Apellidos`, `Telefono`, `FechaNacimiento`, `Sexo`, `IdEmpresa`) VALUES
(1, '123456789', 'Paciente', 'Pruebas', 123456, '1997-04-16', 'Masculino', 1),
(2, '123', 'test', 'Apll', 1345, '1997-04-20', 'Masculino', 1);

-- --------------------------------------------------------

--
-- Table structure for table `respformulario`
--

CREATE TABLE `respformulario` (
  `IdFormulario` int(11) NOT NULL,
  `IdCita` int(11) DEFAULT NULL,
  `IdPregunta` int(11) DEFAULT NULL,
  `Respuesta` varchar(200) DEFAULT NULL,
  `Observacion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `IdRole` int(11) NOT NULL,
  `Descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`IdRole`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Medico'),
(3, 'Empresa Solicitante');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Usuario` varchar(30) DEFAULT NULL,
  `Pass` varchar(2000) DEFAULT NULL,
  `Nombres` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `IdRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Usuario`, `Pass`, `Nombres`, `Apellidos`, `Email`, `Estado`, `IdRole`) VALUES
(1, 'admin', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'Administrador', 'Pruebas', NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`IdAtencion`);

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`IdCita`);

--
-- Indexes for table `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`IdConsultorio`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IdEmpresa`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`IdEspecialidad`);

--
-- Indexes for table `formularioexamen`
--
ALTER TABLE `formularioexamen`
  ADD PRIMARY KEY (`IdPregunta`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`IdMedico`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`IdPaciente`);

--
-- Indexes for table `respformulario`
--
ALTER TABLE `respformulario`
  ADD PRIMARY KEY (`IdFormulario`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`IdRole`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `IdCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consultorios`
--
ALTER TABLE `consultorios`
  MODIFY `IdConsultorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formularioexamen`
--
ALTER TABLE `formularioexamen`
  MODIFY `IdPregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `IdMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `IdPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `respformulario`
--
ALTER TABLE `respformulario`
  MODIFY `IdFormulario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `IdRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
