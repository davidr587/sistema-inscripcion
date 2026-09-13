-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2023 a las 16:42:56
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelatecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academico`
--

CREATE TABLE `academico` (
  `id` int(11) NOT NULL,
  `cedEst` varchar(20) NOT NULL,
  `procedencia` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rendimiento` varchar(100) NOT NULL,
  `repetido` varchar(100) NOT NULL,
  `repetidocuales` varchar(100) NOT NULL,
  `repetidoano` varchar(100) NOT NULL,
  `pendiente` varchar(100) NOT NULL,
  `pendientecuales` varchar(100) NOT NULL,
  `pendientemotivo` varchar(100) NOT NULL,
  `profesor` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `literal6` varchar(100) NOT NULL,
  `promediolapso` varchar(100) NOT NULL,
  `promediocurso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `academico`
--

INSERT INTO `academico` (`id`, `cedEst`, `procedencia`, `direccion`, `rendimiento`, `repetido`, `repetidocuales`, `repetidoano`, `pendiente`, `pendientecuales`, `pendientemotivo`, `profesor`, `area`, `literal6`, `promediolapso`, `promediocurso`) VALUES
(1, '17245987', '2', '2', 'Bueno', 'Si', '2', '2', 'Si', '2', '2', '2', '2', '2', '2', '2'),
(2, '14125123', '12', '12', 'S', 'S', '', '', 'S', '', '', '', '', '', '', ''),
(3, '10000001', 'Materno', 'Merida', 'Muy bueno', 'No', 'Ninguna', 'Ninguna', 'No', 'Ninguna', 'Ninguna', 'Ninguna', 'Ninguna', 'A', 'A', 'A'),
(4, '32254145', '', '', 'S', 'S', '', '', 'S', '', '', '', '', '', '', ''),
(5, '26452745', '', '', 'S', 'S', '', '', 'S', '', '', '', '', '', '', ''),
(6, '26452745', '', '', 'S', 'S', '', '', 'S', '', '', '', '', '', '', '');

--
-- Disparadores `academico`
--
DELIMITER $$
CREATE TRIGGER `trigger_academico_ins` AFTER INSERT ON `academico` FOR EACH ROW INSERT INTO bitacora (clave, nombre, usuario, modificado, accion, modulo) VALUES (NEW.cedEst, NEW.procedencia, CURRENT_USER(), NOW(), 'Guardado' , 'academico')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anoescolar`
--

CREATE TABLE `anoescolar` (
  `id` int(11) NOT NULL,
  `ano` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anoescolar`
--

INSERT INTO `anoescolar` (`id`, `ano`) VALUES
(2, '2021 - 2022'),
(3, '2022 - 2023'),
(4, '2023 - 2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  `accion` varchar(100) DEFAULT NULL,
  `modulo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `clave`, `nombre`, `usuario`, `modificado`, `accion`, `modulo`) VALUES
(109, '99999', 'raul', 'root@localhost', '2022-11-16 21:10:43', 'Guardado', 'propietario'),
(110, '122222', '', 'root@localhost', '2022-11-17 19:35:15', 'Guardado', 'personal'),
(111, '156202621', '', 'root@localhost', '2023-01-19 09:47:25', 'Guardado', 'personal'),
(112, '55455', '11221sas', 'root@localhost', '2023-01-19 09:48:48', 'Guardado', 'personal'),
(113, '10101010', 'Maria', 'root@localhost', '2023-01-19 10:04:17', 'Guardado', 'personal'),
(114, '33333', 'maria', 'root@localhost', '2023-01-19 10:38:25', 'Guardado', 'personal'),
(115, '1120112', '2021 - 202', 'root@localhost', '2023-01-20 21:50:09', 'Guardado', 'dataescolar'),
(116, '15620262', '2023 - 202', 'root@localhost', '2023-01-21 14:09:33', 'Guardado', 'dataescolar'),
(117, '', '', 'root@localhost', '2023-01-21 17:38:50', 'Guardado', 'personal'),
(118, '32254145', '2021 - 202', 'root@localhost', '2023-04-22 17:35:31', 'Guardado', 'dataescolar'),
(119, '32254145', '222222', 'root@localhost', '2023-04-22 17:36:51', 'Guardado', 'estudiantes'),
(120, '32254145', '', 'root@localhost', '2023-04-22 17:42:37', 'Guardado', 'academico'),
(121, '26452745', '2021 - 202', 'root@localhost', '2023-04-23 18:57:59', 'Guardado', 'dataescolar'),
(122, '26452745', '', 'root@localhost', '2023-04-23 18:58:28', 'Guardado', 'estudiantes'),
(123, '26452745', '', 'root@localhost', '2023-04-23 19:09:41', 'Guardado', 'academico'),
(124, '26452745', '', 'root@localhost', '2023-04-23 19:09:52', 'Guardado', 'academico'),
(125, '22000000', '2021 - 202', 'root@localhost', '2023-07-24 21:50:00', 'Guardado', 'dataescolar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `cargo`) VALUES
(1, 'Docente'),
(3, 'Bedel'),
(5, 'Cocina'),
(7, 'Administrativo'),
(9, 'Director'),
(17, 'SubDirector');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dataescolar`
--

CREATE TABLE `dataescolar` (
  `id` int(11) NOT NULL,
  `escolar` varchar(20) NOT NULL,
  `ano` varchar(50) NOT NULL,
  `nomSeccion` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `cedulaEst` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dataescolar`
--

INSERT INTO `dataescolar` (`id`, `escolar`, `ano`, `nomSeccion`, `fecha`, `cedulaEst`) VALUES
(1, '2023 - 2024', '2do Año', 'A', '2022-09-08', '17245987'),
(4, '2022 - 2023', '3er Año', 'A', '2022-09-08', '14120232'),
(5, '2023 - 2024', '5to Año', 'C', '2022-09-06', '15620262'),
(6, '2022 - 2023', '4to Año', 'A', '2022-09-15', '15620262'),
(7, '2022 - 2023', '1er Año', 'A', '2022-09-09', '10000001'),
(8, '2022 - 2023', '1er Año', 'A', '2022-09-29', '12000000'),
(9, '2021 - 2022', '1er Año', 'A', '2023-01-09', '1120112'),
(10, '2023 - 2024', '2do Año', 'A', '2023-01-09', '15620262'),
(11, '2021 - 2022', '2do Año', 'A', '2023-04-27', '32254145'),
(12, '2021 - 2022', '2do Año', 'B', '2023-04-29', '26452745'),
(13, '2021 - 2022', '2do Año', 'A', '2023-07-19', '22000000');

--
-- Disparadores `dataescolar`
--
DELIMITER $$
CREATE TRIGGER `trigger_dataescolar_ins` AFTER INSERT ON `dataescolar` FOR EACH ROW INSERT INTO bitacora (clave, nombre, usuario, modificado, accion, modulo) VALUES (NEW.cedulaEst, NEW.escolar, CURRENT_USER(), NOW(), 'Guardado' , 'dataescolar')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosmedicos`
--

CREATE TABLE `datosmedicos` (
  `id` int(11) NOT NULL,
  `cedEst` varchar(20) NOT NULL,
  `gruposanguineo` varchar(100) NOT NULL,
  `alergicoa` varchar(100) NOT NULL,
  `tratamiento` varchar(100) NOT NULL,
  `seguro` varchar(100) NOT NULL,
  `seguroinstitucion` varchar(100) NOT NULL,
  `segurotlfn` varchar(100) NOT NULL,
  `parto` varchar(100) NOT NULL,
  `complicacion` varchar(110) NOT NULL,
  `operacion` varchar(100) NOT NULL,
  `hospitalizacion` varchar(100) NOT NULL,
  `diversidad` varchar(100) NOT NULL,
  `otrasenfe` varchar(110) NOT NULL,
  `lentes` varchar(100) NOT NULL,
  `protesis` varchar(100) NOT NULL,
  `tipoprotesis` varchar(100) NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `enfermedad` varchar(100) NOT NULL,
  `enfermedadcual` varchar(100) NOT NULL,
  `enfermedadafecta` varchar(100) NOT NULL,
  `informe` varchar(100) NOT NULL,
  `informemedicacion` varchar(100) NOT NULL,
  `informecual` varchar(100) NOT NULL,
  `discapacidad` varchar(100) NOT NULL,
  `discapacidadtipo` varchar(100) NOT NULL,
  `conapdis` varchar(100) NOT NULL,
  `condicion` varchar(100) NOT NULL,
  `condicioncual` varchar(100) NOT NULL,
  `condicionafecta` varchar(100) NOT NULL,
  `informe2` varchar(100) NOT NULL,
  `informe2medica` varchar(100) NOT NULL,
  `informe2cual` varchar(100) NOT NULL,
  `dificultad` varchar(100) NOT NULL,
  `dificultadcual` varchar(100) NOT NULL,
  `vacunas` varchar(100) NOT NULL,
  `vacunaotra` varchar(100) NOT NULL,
  `observacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosmedicos`
--

INSERT INTO `datosmedicos` (`id`, `cedEst`, `gruposanguineo`, `alergicoa`, `tratamiento`, `seguro`, `seguroinstitucion`, `segurotlfn`, `parto`, `complicacion`, `operacion`, `hospitalizacion`, `diversidad`, `otrasenfe`, `lentes`, `protesis`, `tipoprotesis`, `medicamento`, `enfermedad`, `enfermedadcual`, `enfermedadafecta`, `informe`, `informemedicacion`, `informecual`, `discapacidad`, `discapacidadtipo`, `conapdis`, `condicion`, `condicioncual`, `condicionafecta`, `informe2`, `informe2medica`, `informe2cual`, `dificultad`, `dificultadcual`, `vacunas`, `vacunaotra`, `observacion`) VALUES
(1, '12', '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '122', 'A+', '2', '3', 'S', '', '', 'S', '', '', '', 'S', '', 'S', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', 'S', '', ''),
(3, '17245987', 'A+', '1', '2', 'Si', '3', '4', 'Natural', '', '6', '7', 'Auditiva', '8', 'Si', 'Si', '9', '10', 'Si', '11', '12', 'Si', 'Si', '13', 'Si', '14', '15', 'No', '16', '17', 'Si', 'No', '18', 'Si', '19', 'Neumococo', '20', '21'),
(4, '14125123', 'A+', '1', '2', 'S', '', '', 'S', '', '', '', 'S', '', 'S', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', 'S', '', ''),
(5, '10000001', 'A-', 'Nada', 'Nada', 'No', 'Nada', 'Nada', 'Natural', '', 'Ninguna', 'Ninguna', 'Visual', 'Miopia', 'Si', 'No', 'Ninguna', 'Acetaminofen', 'No', 'Ninguna', 'Ninguna', 'No', 'No', 'Ninguna', 'No', 'Ninguna', 'Ninguna', 'No', 'Ninguna', 'Ninguna', 'No', 'No', 'Ninguna', 'No', 'Ninguna', 'Bivalente', 'COVID', 'Nada Relevante'),
(6, '32254145', 'S', '', '', 'S', '', '', 'S', '', '', '', 'S', '', 'S', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', 'S', '', ''),
(7, '26452745', 'S', '', '', 'S', '', '', 'S', '', '', '', 'S', '', 'S', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', '', 'S', '', '', 'S', 'S', '', 'S', '', 'S', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entornofamiliar`
--

CREATE TABLE `entornofamiliar` (
  `id` int(11) NOT NULL,
  `cedEst` varchar(20) NOT NULL,
  `situacion` varchar(100) NOT NULL,
  `relacion` varchar(100) NOT NULL,
  `conquienvive` varchar(100) NOT NULL,
  `familiares` varchar(100) NOT NULL,
  `hermanos` varchar(100) NOT NULL,
  `hermanas` varchar(20) NOT NULL,
  `lugarhermanos` varchar(100) NOT NULL,
  `hermanoinstitu` varchar(100) NOT NULL,
  `hermanoano` varchar(100) NOT NULL,
  `hermanoseccion` varchar(100) NOT NULL,
  `hermanonombre` varchar(100) NOT NULL,
  `familiarinstitu` varchar(100) NOT NULL,
  `familiarparentesco` varchar(100) NOT NULL,
  `familiarnombre` varchar(100) NOT NULL,
  `autoriza` varchar(100) NOT NULL,
  `quienretira` varchar(100) NOT NULL,
  `nombreretira` varchar(100) NOT NULL,
  `familiarnombre1` varchar(100) NOT NULL,
  `familiarparentesco1` varchar(100) NOT NULL,
  `familiartlfn1` varchar(100) NOT NULL,
  `familiarnombre2` varchar(100) NOT NULL,
  `familiarparentesco2` varchar(100) NOT NULL,
  `familiartlfn2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entornofamiliar`
--

INSERT INTO `entornofamiliar` (`id`, `cedEst`, `situacion`, `relacion`, `conquienvive`, `familiares`, `hermanos`, `hermanas`, `lugarhermanos`, `hermanoinstitu`, `hermanoano`, `hermanoseccion`, `hermanonombre`, `familiarinstitu`, `familiarparentesco`, `familiarnombre`, `autoriza`, `quienretira`, `nombreretira`, `familiarnombre1`, `familiarparentesco1`, `familiartlfn1`, `familiarnombre2`, `familiarparentesco2`, `familiartlfn2`) VALUES
(1, '17245987', 'Casados', 'Casados', '1', '1', '1', '1', '1', 'Si', '2', '2', '2', 'No', '2', '2', 'Si', '2', '2', '3', '3', '3', '3', '3', '3'),
(2, '12254785', 'Concubinos', 'Viudo(a)', '2', '2', '2', '2', '2', 'Si', '2', '2', '2', 'No', '2', '2', 'Si', '2', '2', '2', '2', '2', '2', '2', '2'),
(3, '14125123', 'Viudo(a)', 'Viudo(a)', '', '', '', '', '', 'S', '', '', '', 'S', '', '', 'S', '', '', '', '', '', '', '', ''),
(4, '10000001', 'Concubinos', 'Concubinos', 'Padres', 'Ninguno', '3', '2', '2do', 'Si', '4', 'A', 'Jose Mendez', 'Si', 'Tio', 'Luna Andares', 'No', 'Abuela', 'Marta Garces', 'Marta Garces', 'Abuela', '02742563214', 'Jose Mendez', 'Tio', '02742216525'),
(5, '32254145', 'S', 'S', '', '', '', '', '', 'S', '', '', '', 'S', '', '', 'S', '', '', '', '', '', '', '', ''),
(6, '26452745', 'S', 'S', '', '', '', '', '', 'S', '', '', '', 'S', '', '', 'S', '', '', '', '', '', '', '', ''),
(7, '26452745', 'S', 'S', '', '', '', '', '', 'S', '', '', '', 'S', '', '', 'S', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `cedulaEst` varchar(25) NOT NULL,
  `nombreApellidoEst` varchar(100) NOT NULL,
  `nacionalidaEst` varchar(50) NOT NULL,
  `lugarNacEst` varchar(50) NOT NULL,
  `fechaNacEst` date NOT NULL,
  `edadEst` varchar(50) NOT NULL,
  `municipioEst` varchar(50) NOT NULL,
  `parroquiaEst` varchar(50) NOT NULL,
  `direcciónEst` text NOT NULL,
  `telefonoEst` varchar(20) NOT NULL,
  `celularEst` varchar(20) NOT NULL,
  `whatsappEst` varchar(20) NOT NULL,
  `emailEst` varchar(50) NOT NULL,
  `estaturaEst` varchar(5) NOT NULL,
  `pesoEst` varchar(5) NOT NULL,
  `camisaEst` varchar(5) NOT NULL,
  `pantalonEst` varchar(5) NOT NULL,
  `calzadoEst` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cedulaEst`, `nombreApellidoEst`, `nacionalidaEst`, `lugarNacEst`, `fechaNacEst`, `edadEst`, `municipioEst`, `parroquiaEst`, `direcciónEst`, `telefonoEst`, `celularEst`, `whatsappEst`, `emailEst`, `estaturaEst`, `pesoEst`, `camisaEst`, `pantalonEst`, `calzadoEst`) VALUES
('10000001', 'Maria Ramona Cortez Garcia', 'Venezolana', 'Merida', '2022-09-02', '01', 'Campo Elias', 'Fernandez Peña', 'Merida', '02742214152', '04147521414', '04147521414', 'ramona@gmail.com', '1.50', '50', 'S', 'S', '35'),
('12000000', 'David Ramos', '2', '2', '2022-10-06', '21', 'Campo Elias', 'Fernandez Peña', 'Lejos', '2', '2', '2', 'ramona@gmail.com', '2', '2', '2', '2', '2'),
('14120232', 'David Ramos', 'Venezolano', 'Merida', '2022-09-06', '23', '2022-09-15', '', '', '', '', '', '', '', '', '', '', ''),
('15620262', 'Davisito Garces', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('17245987', 'Maria Mendez Inaloha', 'Venezolano', 'Merida', '2022-09-03', '21', 'Campo Elias', 'Fernandez Peña', 'Urb Los Pinos Merida', '0412-5452145', '0412-5452145', '0412-5452145', 'mariita@gmail.com', '1.60', '50', 'S', 'S', '37'),
('26452745', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('32254145', '222222', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Disparadores `estudiante`
--
DELIMITER $$
CREATE TRIGGER `trigger_estudiantes_ins` AFTER INSERT ON `estudiante` FOR EACH ROW INSERT INTO bitacora (clave, nombre, usuario, modificado, accion, modulo) VALUES (NEW.cedulaEst , NEW.nombreApellidoEst, CURRENT_USER(), NOW(), 'Guardado' , 'estudiantes')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitos`
--

CREATE TABLE `habitos` (
  `id` int(11) NOT NULL,
  `cedEst` varchar(20) NOT NULL,
  `horalevanta` varchar(100) NOT NULL,
  `horadormir` varchar(100) NOT NULL,
  `tv` varchar(100) NOT NULL,
  `tvtiempo` varchar(100) NOT NULL,
  `actextra` varchar(100) NOT NULL,
  `actextracual` varchar(100) NOT NULL,
  `actextrainstitucion` varchar(100) NOT NULL,
  `actextrahora` varchar(100) NOT NULL,
  `actextradireccion` varchar(100) NOT NULL,
  `actextrainstruct` varchar(100) NOT NULL,
  `actextratlfn` varchar(100) NOT NULL,
  `actextratiempo` varchar(100) NOT NULL,
  `actextraestado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitos`
--

INSERT INTO `habitos` (`id`, `cedEst`, `horalevanta`, `horadormir`, `tv`, `tvtiempo`, `actextra`, `actextracual`, `actextrainstitucion`, `actextrahora`, `actextradireccion`, `actextrainstruct`, `actextratlfn`, `actextratiempo`, `actextraestado`) VALUES
(1, '17245987', '12', '21', 'Si', '2', 'Si', '2', '2', '2', '2', '2', '2', '2', 'Si'),
(2, '14125123', '2', '2', 'Si', '2', 'S', '', '', '', '', '', '', '', 'S'),
(3, '10000001', '8am', '10pm', 'Si', '2hrs', 'Si', 'Futbol', 'SS', '2pm', 'Ejido', 'Pichi', '0274-2712525', '1año', 'No'),
(4, '14521021', '21', '21', 'Si', '12', 'Si', 'Futbol', '', '8', 'Merida', 'Pichi', '0424', '5', 'Si'),
(5, '14521021', '21', '21', 'Si', '12', 'Si', 'Futbol', '', '8', 'Merida', 'Pichi', '0424', '5', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `madre`
--

CREATE TABLE `madre` (
  `id` int(11) NOT NULL,
  `cedMad` varchar(15) NOT NULL,
  `cedEst` varchar(15) NOT NULL,
  `nombreApellidoMad` varchar(100) NOT NULL,
  `parentescoMad` varchar(50) NOT NULL,
  `edadMad` int(11) NOT NULL,
  `lugarMad` varchar(50) NOT NULL,
  `fechaMad` date NOT NULL,
  `nacionalidadMad` varchar(50) NOT NULL,
  `rifMad` varchar(50) NOT NULL,
  `edoCivilMad` varchar(50) NOT NULL,
  `justificativoMad` varchar(50) NOT NULL,
  `organismoMad` varchar(50) NOT NULL,
  `fehaMad` date NOT NULL,
  `direccionMad` varchar(100) NOT NULL,
  `municipioMad` varchar(50) NOT NULL,
  `parroquiaMad` varchar(50) NOT NULL,
  `telefonoMad` varchar(20) NOT NULL,
  `celularMad` varchar(20) NOT NULL,
  `whastappMad` varchar(20) NOT NULL,
  `emailMad` varchar(50) NOT NULL,
  `profesionMad` varchar(20) NOT NULL,
  `cargoMad` varchar(50) NOT NULL,
  `empresaMad` varchar(50) NOT NULL,
  `direccionTrabMad` varchar(50) NOT NULL,
  `teleTrabMad` varchar(20) NOT NULL,
  `horarioMad` varchar(50) NOT NULL,
  `religionMad` varchar(20) NOT NULL,
  `tiempoMad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `madre`
--

INSERT INTO `madre` (`id`, `cedMad`, `cedEst`, `nombreApellidoMad`, `parentescoMad`, `edadMad`, `lugarMad`, `fechaMad`, `nacionalidadMad`, `rifMad`, `edoCivilMad`, `justificativoMad`, `organismoMad`, `fehaMad`, `direccionMad`, `municipioMad`, `parroquiaMad`, `telefonoMad`, `celularMad`, `whastappMad`, `emailMad`, `profesionMad`, `cargoMad`, `empresaMad`, `direccionTrabMad`, `teleTrabMad`, `horarioMad`, `religionMad`, `tiempoMad`) VALUES
(1, '5', '17245987', '5', 'Madre', 5, '5', '0000-00-00', 'Venezolano', '5', 'Soltero', 'Si', '5', '0000-00-00', '5@gmail.com', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(2, '2212', '14125123', '121', 'Padre', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '2415782', '10000001', 'Julia Garces', 'Madre', 40, 'Merida', '0000-00-00', 'Venezolano', '2415782-2', 'Casado', 'Si', 'Ninguno', '0000-00-00', 'Merida@gmail.com', 'Campo Elias', 'Fernandez Peña', '0274-2142021', '0274-2142021', '0274-2142021', 'juliana@gmail.com', 'Licenciada', 'Administradora', 'Calzamerida', 'Merida', '0274-2704545', '8am a 7pm', 'Catolica', '14años'),
(4, '', '32254145', '', 'Madre', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '26452745', '', 'Madre', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mencion`
--

CREATE TABLE `mencion` (
  `id` int(11) NOT NULL,
  `nomMencion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mencion`
--

INSERT INTO `mencion` (`id`, `nomMencion`) VALUES
(1, 'wewe'),
(2, 'wewe'),
(3, 'Turismo'),
(4, 'Informática'),
(5, 'sdsd'),
(6, 'sdds'),
(7, 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

CREATE TABLE `padre` (
  `id` int(11) NOT NULL,
  `cedPad` varchar(15) NOT NULL,
  `cedEst` varchar(15) NOT NULL,
  `nombreApellidoPad` varchar(100) NOT NULL,
  `parentescoPad` varchar(50) NOT NULL,
  `edadPad` int(11) NOT NULL,
  `lugarPad` varchar(50) NOT NULL,
  `fechaPad` date NOT NULL,
  `nacionalidadPad` varchar(50) NOT NULL,
  `rifPad` varchar(50) NOT NULL,
  `edoCivilPad` varchar(50) NOT NULL,
  `justificativoPad` varchar(50) NOT NULL,
  `organismoPad` varchar(50) NOT NULL,
  `fehaPad` date NOT NULL,
  `direccionPad` varchar(100) NOT NULL,
  `municipioPad` varchar(50) NOT NULL,
  `parroquiaPad` varchar(50) NOT NULL,
  `telefonoPad` varchar(20) NOT NULL,
  `celularPad` varchar(20) NOT NULL,
  `whastappPad` varchar(20) NOT NULL,
  `emailPad` varchar(50) NOT NULL,
  `profesionPad` varchar(20) NOT NULL,
  `cargoPad` varchar(50) NOT NULL,
  `empresaPad` varchar(50) NOT NULL,
  `direccionTrabPad` varchar(50) NOT NULL,
  `teleTrabPad` varchar(20) NOT NULL,
  `horarioPad` varchar(50) NOT NULL,
  `religionPad` varchar(20) NOT NULL,
  `tiempoPad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`id`, `cedPad`, `cedEst`, `nombreApellidoPad`, `parentescoPad`, `edadPad`, `lugarPad`, `fechaPad`, `nacionalidadPad`, `rifPad`, `edoCivilPad`, `justificativoPad`, `organismoPad`, `fehaPad`, `direccionPad`, `municipioPad`, `parroquiaPad`, `telefonoPad`, `celularPad`, `whastappPad`, `emailPad`, `profesionPad`, `cargoPad`, `empresaPad`, `direccionTrabPad`, `teleTrabPad`, `horarioPad`, `religionPad`, `tiempoPad`) VALUES
(1, '2', '17245987', '2', 'S', 2, '2', '0000-00-00', 'S', '2', 'S', 'S', '2', '0000-00-00', 'no@gmail.com', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '', '2', '2'),
(2, '212', '14125123', '12', 'Padre', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '3452145', '10000001', 'Ricardo Jose Garcia', 'Padre', 45, 'Merida', '2022-09-27', 'Venezolano', '3452145-1', 'Casado', 'Si', 'CEPNA', '2022-09-14', 'Merida', 'Campo Elias', 'Fernandez Peña', '0274-2664230', '0274-2664230', '0274-2664230', 'micorreo@gmail.com', 'Ingeniero', 'Ingeniero', 'Constructora', 'Merida', '0274-2664230', '7am a 12m', 'Catolica', '14años'),
(4, '3452145', '15', 'Ricardo Jose Garcia', 'Padre', 45, 'Merida', '2022-12-27', 'Venezolano', '1222', 'Casado', 'Si', 'CEPNA', '2023-01-20', 'Merida', 'Campo Elias', 'Fernandez Peña', '04247774919', '04247774919', '04247774919', 'nochesdigitales@gmail.com', 'Ingeniero', 'Ingeniero', 'Nochesdigitales', 'Merida', '04247774919', '7am a 12m', 'Catolica', '14años'),
(5, '', '32254145', '', 'Padre', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '26452745', '', 'Padre', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `nacPersonal` varchar(2) NOT NULL,
  `cedPersonal` varchar(20) NOT NULL,
  `nombrePersonal` varchar(100) NOT NULL,
  `apellidoPersonal` varchar(100) NOT NULL,
  `fechaNac` date NOT NULL,
  `emailPersonal` varchar(100) NOT NULL,
  `numCasa` varchar(100) NOT NULL,
  `numCel` varchar(100) NOT NULL,
  `direPersonal` text NOT NULL,
  `cargoPersonal` varchar(100) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `passPersonal` varchar(100) NOT NULL,
  `nivelusuario` int(11) NOT NULL,
  `sobre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`nacPersonal`, `cedPersonal`, `nombrePersonal`, `apellidoPersonal`, `fechaNac`, `emailPersonal`, `numCasa`, `numCel`, `direPersonal`, `cargoPersonal`, `fechaIngreso`, `passPersonal`, `nivelusuario`, `sobre`) VALUES
('V', '11457253', 'Maria Ines', 'Marquez Gallardo', '2022-09-27', 'ADMIN@GMAIL.COM', '0414-4257841', '0426-2417841', 'Merida', 'Admin', '2022-09-27', '202cb962ac59075b964b07152d234b70', 1, ''),
('V', '23241582', 'David Josue', 'Sosa', '2022-03-13', 'USER@GMAIL.COM', '0424-2210609', '0424-7774919', 'Merida\r\nEjido', 'Usuario', '2022-03-22', '202cb962ac59075b964b07152d234b70', 0, '');

--
-- Disparadores `personal`
--
DELIMITER $$
CREATE TRIGGER `trigger_personal_ins` AFTER INSERT ON `personal` FOR EACH ROW INSERT INTO bitacora (clave, nombre, usuario, modificado, accion, modulo) VALUES (NEW.cedPersonal , NEW.nombrePersonal, CURRENT_USER(), NOW(), 'Guardado' , 'personal')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `id` int(11) NOT NULL,
  `cedRep` varchar(15) NOT NULL,
  `cedEst` varchar(15) NOT NULL,
  `nombreApellidoRep` varchar(100) NOT NULL,
  `parentescoRep` varchar(50) NOT NULL,
  `edadRep` int(11) NOT NULL,
  `lugarRep` varchar(50) NOT NULL,
  `fechaRep` date NOT NULL,
  `nacionalidadRep` varchar(50) NOT NULL,
  `rifRep` varchar(50) NOT NULL,
  `edoCivilRep` varchar(50) NOT NULL,
  `justificativoRep` varchar(50) NOT NULL,
  `organismoRep` varchar(50) NOT NULL,
  `fehaRep` date NOT NULL,
  `direccionRep` varchar(100) NOT NULL,
  `municipioRep` varchar(50) NOT NULL,
  `parroquiaRep` varchar(50) NOT NULL,
  `telefonoRep` varchar(20) NOT NULL,
  `celularRep` varchar(20) NOT NULL,
  `whastappRep` varchar(20) NOT NULL,
  `emailRep` varchar(50) NOT NULL,
  `profesionRep` varchar(20) NOT NULL,
  `cargoRep` varchar(50) NOT NULL,
  `empresaRep` varchar(50) NOT NULL,
  `direccionTrabRep` varchar(50) NOT NULL,
  `teleTrabRep` varchar(20) NOT NULL,
  `horarioRep` varchar(50) NOT NULL,
  `religionRep` varchar(20) NOT NULL,
  `tiempoRep` varchar(20) NOT NULL,
  `bancoRep` varchar(20) NOT NULL,
  `tipoRep` varchar(50) NOT NULL,
  `nroRep` varchar(50) NOT NULL,
  `carnetRep` varchar(50) NOT NULL,
  `codCarnetRep` varchar(50) NOT NULL,
  `serialCarnetRep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`id`, `cedRep`, `cedEst`, `nombreApellidoRep`, `parentescoRep`, `edadRep`, `lugarRep`, `fechaRep`, `nacionalidadRep`, `rifRep`, `edoCivilRep`, `justificativoRep`, `organismoRep`, `fehaRep`, `direccionRep`, `municipioRep`, `parroquiaRep`, `telefonoRep`, `celularRep`, `whastappRep`, `emailRep`, `profesionRep`, `cargoRep`, `empresaRep`, `direccionTrabRep`, `teleTrabRep`, `horarioRep`, `religionRep`, `tiempoRep`, `bancoRep`, `tipoRep`, `nroRep`, `carnetRep`, `codCarnetRep`, `serialCarnetRep`) VALUES
(1, '1', '15', '1', 'Madre', 1, '1', '0000-00-00', 'Venezolano', '2', 'Soltero', 'Si', '2', '0000-00-00', 'raf@gmail.com', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', 'No', '3', '3'),
(2, '1', '15', '1', 'Madre', 1, '1', '0000-00-00', 'Venezolano', '2', 'Soltero', 'Si', '2', '0000-00-00', 'raf@gmail.com', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', 'No', '3', '3'),
(3, '1', '15', '1', 'Madre', 1, '1', '0000-00-00', 'Venezolano', '2', 'Soltero', 'Si', '2', '0000-00-00', 'raf@gmail.com', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', 'No', '3', '3'),
(4, '1', '15', '1', 'Madre', 1, '1', '0000-00-00', 'Venezolano', '2', 'Soltero', 'Si', '2', '0000-00-00', 'raf@gmail.com', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', 'No', '3', '3'),
(5, '10146311', '17245987', 'Maria Mendes', 'Madre', 45, 'Merida', '2022-09-06', 'Venezolano', '10146311-8', 'Casado', 'Si', 'HULA', '2022-09-06', 'Merida', 'Libertador', 'Spinetti Dini', '0274-2715874', '0412-4587452', '0412-4587452', 'jose@gmail.com', 'Arquitecto', 'CEO', 'Materiales los Andes', 'Merida', '0274-2447812', '8am a 6pm', 'Catolica', '2hrs', 'Provincial', 'Corriente', '0108-0105-21-0100178531', 'Si', '87544644855454445', '12545415465656454'),
(6, '4254874', '10000001', 'Julia Maria Amberes', 'Padre', 40, 'Merida', '0000-00-00', 'Venezolano', '2', 'Casado', 'Si', 'CEPNA', '0000-00-00', 'Merida@gmail.com', 'Campo Elias', 'Fernandez Peña', '02742715425', '04247542525', '04247542525', 'julia@gmail.com', 'Docente', 'Profesora', 'ULA', 'Merida', '02742664124', '8am a 6pm', 'Catolica', '2años', 'Provincial', 'Corriente', '0207-0105-52-01002145', 'Si', '02141221241557', '57452154554554'),
(7, '', '32254145', '', 'S', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'S', '', ''),
(8, '', '26452745', '', 'S', 0, '', '0000-00-00', 'S', '', 'S', 'S', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'S', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id` int(11) NOT NULL,
  `nomSeccion` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id`, `nomSeccion`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socioeconomico`
--

CREATE TABLE `socioeconomico` (
  `id` int(11) NOT NULL,
  `cedEst` varchar(20) NOT NULL,
  `traslado` varchar(100) NOT NULL,
  `trasladotiempo` varchar(100) NOT NULL,
  `nropersonas` varchar(100) NOT NULL,
  `quienaporta` varchar(100) NOT NULL,
  `ingreso` varchar(100) NOT NULL,
  `dependen` varchar(100) NOT NULL,
  `beca` varchar(100) NOT NULL,
  `becaorganismo` varchar(100) NOT NULL,
  `becamonto` varchar(100) NOT NULL,
  `becafrecuencia` varchar(100) NOT NULL,
  `canaima` varchar(100) NOT NULL,
  `canaimaserial` varchar(100) NOT NULL,
  `canaimacondicion` varchar(100) NOT NULL,
  `desayuno` varchar(100) NOT NULL,
  `almuerzo` varchar(100) NOT NULL,
  `comedor` varchar(100) NOT NULL,
  `comedoruso` varchar(100) NOT NULL,
  `situacion` varchar(100) NOT NULL,
  `comidas` varchar(100) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `calidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `socioeconomico`
--

INSERT INTO `socioeconomico` (`id`, `cedEst`, `traslado`, `trasladotiempo`, `nropersonas`, `quienaporta`, `ingreso`, `dependen`, `beca`, `becaorganismo`, `becamonto`, `becafrecuencia`, `canaima`, `canaimaserial`, `canaimacondicion`, `desayuno`, `almuerzo`, `comedor`, `comedoruso`, `situacion`, `comidas`, `cantidad`, `calidad`) VALUES
(1, '17245987', 'Buseta', '2', '2', '2', '2', '2', 'Si', '2', '2', 'Mensual', 'Si', '2', 'Funcional', 'En casa', 'Sí', 'Sí', 'Sí', 'Muy buena', 'Desayuno', 'Regular', 'Muy buena'),
(2, '14125123', 'Caminando', '22', '22', '', '', '', 'S', '', '', 'S', 'S', '', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S'),
(3, '10000001', 'Buseta', '30min', '2', 'Padres', '100$', '5', 'No', 'Nada', 'Nada', 'S', 'No', '125415454545', 'Funcional', 'En casa', 'Sí', 'Sí', 'Sí', 'Regular', 'Almuerzo', 'Mucha', 'Buena'),
(4, '32254145', 'S', '', '', '', '', '', 'S', '', '', 'S', 'S', '', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S'),
(5, '26452745', 'S', '', '', '', '', '', 'S', '', '', 'S', 'S', '', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `id` int(11) NOT NULL,
  `cedEst` varchar(20) NOT NULL,
  `tipozona` varchar(100) NOT NULL,
  `tipocasa` varchar(100) NOT NULL,
  `condición` varchar(100) NOT NULL,
  `tenencia` varchar(100) NOT NULL,
  `monto` varchar(100) NOT NULL,
  `condicionhab` varchar(100) NOT NULL,
  `condicionbah` varchar(100) NOT NULL,
  `condicioncac` varchar(100) NOT NULL,
  `condicioncom` varchar(100) NOT NULL,
  `condiciongar` varchar(100) NOT NULL,
  `condicionser` varchar(100) NOT NULL,
  `condicionjat` varchar(100) NOT NULL,
  `Servicios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`id`, `cedEst`, `tipozona`, `tipocasa`, `condición`, `tenencia`, `monto`, `condicionhab`, `condicionbah`, `condicioncac`, `condicioncom`, `condiciongar`, `condicionser`, `condicionjat`, `Servicios`) VALUES
(1, '17245987', 'Rural', 'Rancho', 'Muy buena', 'Propia', '12', '2', '2', '2', '2', '2', '2', '2', 'Tlf. Residencial'),
(2, '14125123', 'Urbana', 'Quinta', 'S', 'S', '', '', '', '', '', '', '', '', 'S'),
(3, '10000001', 'Urbana', 'Casa', 'Muy buena', 'Propia', '10000$', '4', '2', '1', '1', '2', '1', '1', 'Gas'),
(4, '32254145', 'S', 'S', 'S', 'S', '', '', '', '', '', '', '', '', 'S'),
(5, '26452745', 'S', 'S', 'S', 'S', '', '', '', '', '', '', '', '', 'S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academico`
--
ALTER TABLE `academico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `anoescolar`
--
ALTER TABLE `anoescolar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dataescolar`
--
ALTER TABLE `dataescolar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosmedicos`
--
ALTER TABLE `datosmedicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entornofamiliar`
--
ALTER TABLE `entornofamiliar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`cedulaEst`);

--
-- Indices de la tabla `habitos`
--
ALTER TABLE `habitos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `madre`
--
ALTER TABLE `madre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mencion`
--
ALTER TABLE `mencion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `padre`
--
ALTER TABLE `padre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`cedPersonal`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socioeconomico`
--
ALTER TABLE `socioeconomico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `academico`
--
ALTER TABLE `academico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `anoescolar`
--
ALTER TABLE `anoescolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `dataescolar`
--
ALTER TABLE `dataescolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `datosmedicos`
--
ALTER TABLE `datosmedicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `entornofamiliar`
--
ALTER TABLE `entornofamiliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `habitos`
--
ALTER TABLE `habitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `madre`
--
ALTER TABLE `madre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mencion`
--
ALTER TABLE `mencion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `padre`
--
ALTER TABLE `padre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `socioeconomico`
--
ALTER TABLE `socioeconomico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
