-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2016 a las 00:44:31
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestiondecambios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambio`
--

CREATE TABLE `cambio` (
  `idCambio` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `motivo` varchar(200) DEFAULT NULL,
  `proposito` varchar(200) DEFAULT NULL,
  `tiempoEstimado` int(10) UNSIGNED DEFAULT NULL,
  `nombreSolicitante` varchar(20) DEFAULT NULL,
  `fechaDeVencimiento` datetime DEFAULT NULL,
  `fechaDeImplementacion` datetime DEFAULT NULL,
  `asignadoA` varchar(20) DEFAULT NULL,
  `equipo` varchar(25) DEFAULT NULL COMMENT 'Nombre del equipo extraido de inventario',
  `observacion` varchar(200) DEFAULT NULL,
  `fk_idCategoria` int(10) UNSIGNED DEFAULT NULL,
  `fk_idImpacto` int(10) UNSIGNED NOT NULL,
  `fk_idEstado` int(10) UNSIGNED NOT NULL,
  `fk_idPrioridad` int(10) UNSIGNED NOT NULL,
  `fk_idSysExterno` int(10) UNSIGNED NOT NULL,
  `fk_idUsuario` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cambio`
--

INSERT INTO `cambio` (`idCambio`, `descripcion`, `motivo`, `proposito`, `tiempoEstimado`, `nombreSolicitante`, `fechaDeVencimiento`, `fechaDeImplementacion`, `asignadoA`, `equipo`, `observacion`, `fk_idCategoria`, `fk_idImpacto`, `fk_idEstado`, `fk_idPrioridad`, `fk_idSysExterno`, `fk_idUsuario`) VALUES
(1, 'CAMBIO #1', 'MOTIVO #1', 'PROPOSITO #1', 5, 'HOMERO SIMPSON', '2016-11-24 00:00:00', NULL, 'NED FLANDERES', NULL, NULL, 1, 2, 1, 2, 1, 2),
(2, 'CAMBIO #2', 'MOTIVO #2', 'PROPOSITO #2', 5, 'BART SIMPSON', '2016-11-30 00:00:00', NULL, 'NED FLANDERES', NULL, NULL, 1, 2, 1, 2, 1, 2),
(3, 'CAMBIO #3', 'MOTIVO #3', 'PROPOSITO #3', 10, 'MARGE SIMPSON', '2016-11-27 00:00:00', NULL, 'NED FLANDERES', NULL, NULL, 1, 2, 1, 2, 1, 2),
(4, 'CAMBIO #4', 'MOTIVO #4', 'PROPOSITO #4', 2, 'LISA SIMPSON', '2016-11-21 00:00:00', NULL, 'NED FLANDERES', NULL, NULL, 1, 2, 1, 2, 1, 2),
(5, 'CAMBIO #5', 'MOTIVO #5', 'PROPOSITO #5', 5, 'HOMERO SIMPSON', '2016-11-24 00:00:00', NULL, 'NED FLANDERES', NULL, NULL, 1, 2, 2, 2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`) VALUES
(1, 'HARDWARE'),
(2, 'REDES'),
(3, 'SISTEMA OPERATIVO'),
(4, 'GESTION DE PROYECTOS'),
(5, 'GESTION DE INCIDENTES'),
(6, 'GESTION DE INVENTARIO'),
(7, 'GESTION DE PROYECTOS'),
(8, 'GESTION DE CAMBIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `nombre`) VALUES
(1, 'PETICION'),
(2, 'ACEPTADO'),
(3, 'RECHAZADO'),
(4, 'APROBADO'),
(5, 'ANULADO'),
(6, 'PLANIFICADO'),
(7, 'REALIZADO'),
(8, 'CERRADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impacto`
--

CREATE TABLE `impacto` (
  `idImpacto` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `impacto`
--

INSERT INTO `impacto` (`idImpacto`, `nombre`) VALUES
(1, 'BAJO'),
(2, 'MEDIO'),
(3, 'ALTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `nombre`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'OPERADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE `prioridad` (
  `idPrioridad` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`idPrioridad`, `nombre`) VALUES
(1, 'BAJA'),
(2, 'MEDIA'),
(3, 'ALTA'),
(4, 'URGENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientocambio`
--

CREATE TABLE `seguimientocambio` (
  `idSeguimientoCambio` int(10) UNSIGNED NOT NULL,
  `fechaCambioEstado` datetime DEFAULT NULL,
  `fk_idCambio` int(10) UNSIGNED NOT NULL,
  `fk_idEstado` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sysexterno`
--

CREATE TABLE `sysexterno` (
  `idSysExterno` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sysexterno`
--

INSERT INTO `sysexterno` (`idSysExterno`, `nombre`) VALUES
(1, 'PROYECTOS'),
(2, 'INCIDENTES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `nombreUsuario` varchar(20) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `apellidoNombre` varchar(45) NOT NULL,
  `fk_idPerfil` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `pass`, `apellidoNombre`, `fk_idPerfil`) VALUES
(1, 'PFERNANDEZ', '33577', 'PABLO FERNANDEZ', 1),
(2, 'JPEREZ', '4444', 'JUAN PEREZ', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cambio`
--
ALTER TABLE `cambio`
  ADD PRIMARY KEY (`idCambio`),
  ADD UNIQUE KEY `idCambio_UNIQUE` (`idCambio`),
  ADD KEY `fk_Cambio_Categoria1_idx` (`fk_idCategoria`),
  ADD KEY `fk_Cambio_Impacto1_idx` (`fk_idImpacto`),
  ADD KEY `fk_Cambio_Estado1_idx` (`fk_idEstado`),
  ADD KEY `fk_Cambio_Prioridad1_idx` (`fk_idPrioridad`),
  ADD KEY `fk_Cambio_SysExterno1_idx` (`fk_idSysExterno`),
  ADD KEY `fk_Cambio_Usuario1_idx` (`fk_idUsuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD UNIQUE KEY `idCategoria_UNIQUE` (`idCategoria`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`),
  ADD UNIQUE KEY `idEstado_UNIQUE` (`idEstado`);

--
-- Indices de la tabla `impacto`
--
ALTER TABLE `impacto`
  ADD PRIMARY KEY (`idImpacto`),
  ADD UNIQUE KEY `idImpacto_UNIQUE` (`idImpacto`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`),
  ADD UNIQUE KEY `idPerfil_UNIQUE` (`idPerfil`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`idPrioridad`),
  ADD UNIQUE KEY `idPrioridad_UNIQUE` (`idPrioridad`);

--
-- Indices de la tabla `seguimientocambio`
--
ALTER TABLE `seguimientocambio`
  ADD PRIMARY KEY (`idSeguimientoCambio`),
  ADD UNIQUE KEY `idSeguimientoCambio_UNIQUE` (`idSeguimientoCambio`),
  ADD KEY `fk_SeguimientoCambio_Cambio1_idx` (`fk_idCambio`),
  ADD KEY `fk_SeguimientoCambio_Estado1_idx` (`fk_idEstado`);

--
-- Indices de la tabla `sysexterno`
--
ALTER TABLE `sysexterno`
  ADD PRIMARY KEY (`idSysExterno`),
  ADD UNIQUE KEY `idSysExterno_UNIQUE` (`idSysExterno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`),
  ADD KEY `idPerfil_idx` (`fk_idPerfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cambio`
--
ALTER TABLE `cambio`
  MODIFY `idCambio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `impacto`
--
ALTER TABLE `impacto`
  MODIFY `idImpacto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  MODIFY `idPrioridad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `seguimientocambio`
--
ALTER TABLE `seguimientocambio`
  MODIFY `idSeguimientoCambio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sysexterno`
--
ALTER TABLE `sysexterno`
  MODIFY `idSysExterno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cambio`
--
ALTER TABLE `cambio`
  ADD CONSTRAINT `fk_Cambio_Categoria` FOREIGN KEY (`fk_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cambio_Estado1` FOREIGN KEY (`fk_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cambio_Impacto1` FOREIGN KEY (`fk_idImpacto`) REFERENCES `impacto` (`idImpacto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cambio_Prioridad1` FOREIGN KEY (`fk_idPrioridad`) REFERENCES `prioridad` (`idPrioridad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cambio_SysExterno1` FOREIGN KEY (`fk_idSysExterno`) REFERENCES `sysexterno` (`idSysExterno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cambio_Usuario1` FOREIGN KEY (`fk_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `seguimientocambio`
--
ALTER TABLE `seguimientocambio`
  ADD CONSTRAINT `fk_SeguimientoCambio_Cambio1` FOREIGN KEY (`fk_idCambio`) REFERENCES `cambio` (`idCambio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SeguimientoCambio_Estado1` FOREIGN KEY (`fk_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `idPerfil` FOREIGN KEY (`fk_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
