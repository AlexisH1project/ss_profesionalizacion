-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2021 a las 02:16:16
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_profss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ct_documentos`
--

CREATE TABLE `ct_documentos` (
  `id_doc` int(11) NOT NULL,
  `nombre_documento` varchar(265) COLLATE utf8_spanish_ci NOT NULL,
  `documentos` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `prefijo` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ct_documentos`
--

INSERT INTO `ct_documentos` (`id_doc`, `nombre_documento`, `documentos`, `prefijo`) VALUES
(0, 'Documento de Identificación Oficial Credencial para votar del INE', 'INE', 'doc1'),
(1, 'FOMOPE', 'FMP', 'doc12'),
(2, 'Convocatoria con Acuse de Recibo por parte de la Dirección Administrativa o Responsable de la Unidad', 'AUR', 'doc123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ct_unidades`
--

CREATE TABLE `ct_unidades` (
  `id_ur` int(11) NOT NULL,
  `clave_ur` varchar(4) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ramo` varchar(4) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `ct_unidades`
--

INSERT INTO `ct_unidades` (`id_ur`, `clave_ur`, `descripcion`, `ramo`) VALUES
(1, '160', '160 COMISION COORDINADORA DE LOS INSTITUTOS NACIONALES DE SALUD Y HOSPITALES DE ALTA ESPECIALIDAD', 'CEN'),
(2, '160', '160 HOSPITAL DE LA MUJER', 'CEN'),
(3, '160', '160 HOSPITAL NACIONAL HOMEOPATICO', 'CEN'),
(4, '160', '160 HOSPITAL JUAREZ DEL CENTRO', 'CEN'),
(5, '310', '310 DIRECCION GENERAL DE PROMOCION DE LA SALUD', 'CEN'),
(6, '313', '313 SECRETARIADO TECNICO DEL CONSEJO NACIONAL DE SALUD MENTAL', 'CEN'),
(7, '316', '316 DIRECCION GENERAL DE EPIDEMIOLOGIA', 'CEN'),
(8, '513', '513 DIRECCION GENERAL DE RECURSOS HUMANOS Y ORGANIZACIÓN', 'CEN'),
(9, '600', '600 SUBSECRETARIA DE INTEGRACION Y DESARROLLO DEL SECTOR SALUD', 'CEN'),
(10, '610', '610 DIRECCION GENERAL DE CALIDAD Y EDUCACION EN SALUD', 'CEN'),
(11, '611', '611 DIRECCION GENERAL DE PLANEACION Y DESARROLLO EN SALUD', 'CEN'),
(12, 'E00', 'E00 ADMINISTRACION DEL PATRIMONIO DE LA BENEFICIENCIA PUBLICA', 'DESC'),
(13, 'I00', 'I00 CENTRO NACIONAL DE LA TRANSFUSION SANGUINEA', 'DESC'),
(14, 'K00', 'K00 CENTRO NACIONAL PARA LA PREVENCION Y CONTROL DEL VIH/SIDA', 'DESC'),
(15, 'L00', 'L00 CENTRO NACIONAL DE EQUIDAD DE GENERO Y SALUD REPRODUCTIVA', 'DESC'),
(16, 'M7A', 'M7A HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE CHIAPAS', 'INST'),
(17, 'M7F', 'M7F INSTITUTO NACIONAL DE PSIQUIATRIA RAMON DE LA FUENTE MUÑIZ', 'INST'),
(18, 'M7K', 'M7K CENTROS DE INTEGRACION JUVENIL', 'INST'),
(19, 'N00', 'N00 COORDINACION ADMVA. SERVICIOS DE ATENCION PSIQUIATRICA', 'DESC'),
(20, 'N00', 'N00 HOSPITAL PSIQUIÁTRICO DR. SAMUEL RAMITEZ MORENO', 'DESC'),
(21, 'N00', 'N00 HOSPITAL PSIQUIÁTRICO FRAY BERNARDINO ÁLVAREZ', 'DESC'),
(22, 'N00', 'N00 HOSPITAL PSIQUIÁTRICO DR. JUAN N. NAVARRO', 'DESC'),
(23, 'N00', 'N00 CENTRO COMUNITARIO DE SALUD MENTAL CUAUHTEMOC', 'DESC'),
(24, 'N00', 'N00 CENTRO COMUNITARIO DE SALUD MENTAL ZACATENCO', 'DESC'),
(25, 'N00', 'N00 CENTRO COMUNITARIO DE SALUD MENTAL IZTAPALAPA', 'DESC'),
(26, 'NAW', 'NAW HOSPITAL JUAREZ DE MEXICO', 'INST'),
(27, 'NBB', 'NBB HOSPITAL GENERAL DR. MANUEL GEA GONZALEZ', 'INST'),
(28, 'NBD', 'NBD HOSPITAL GENERAL DE MEXICO', 'INST'),
(29, 'NBG', 'NBG HOSPITAL INFANTIL DE MEXICO FEDERICO GOMEZ', 'INST'),
(30, 'NBQ', 'NBQ HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DEL BAJIO', 'INST'),
(31, 'NBR', 'NBR HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE OAXACA', 'INST'),
(32, 'NBS', 'NBS HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE YUCATAN', 'INST'),
(33, 'NBT', 'NBT HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE TAMAULIPAS', 'INST'),
(34, 'NBU', 'NBU HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA', 'INST'),
(35, 'NBV', 'NBV INSTITUTO NACIONAL DE CANCEROLOGIA', 'INST'),
(36, 'NCA', 'NCA INSTITUTO NACIONAL DE CARDIOLOGIA IGNACIO CHAVEZ', 'INST'),
(37, 'NCD', 'NCD INSTITUTO NACIONAL DE ENFERMEDADES RESPIRATORIAS', 'INST'),
(38, 'NCE', 'NCE INSTITUTO NACIONAL DE GERIATRIA', 'INST'),
(39, 'NCG', 'NCG INSTITUTO NACIONAL DE CIENCIAS MEDICAS Y NUTRICION SALVADOR ZUBIRAN', 'INST'),
(40, 'NCH', 'NCH INSTITUTO NACIONAL DE MEDICINA GENOMICA', 'INST'),
(41, 'NCK', 'NCK INSTITUTO NACIONAL DE NEUROLOGIA Y NEUROCIRUGIA DR. MANUEL VELASCO S.', 'INST'),
(42, 'NCZ', 'NCZ INSITUTO NACIONAL DE PEDIATRIA', 'INST'),
(43, 'NDE', 'NDE INSTITUTO NACIONAL DE PERINATOLOGIA', 'INST'),
(44, 'NDF', 'NDF INSTITUTO NACIONAL DE REHABILITACIÓN', 'INST'),
(45, 'NDY', 'NDY INSTITUTO NACIONAL DE SALUD PUBLICA', 'INST'),
(46, 'NHK', 'NHK SISTEMA NACIONAL PARA EL DESARROLLO INTEGRAL DE LA FAMILIA', 'INST'),
(47, 'O00', 'O00 CENTRO NACIONAL DE PROGRAMAS PREVENTIVOS Y CONTROL DE ENFERMEDADES', 'DESC'),
(48, 'Q00', 'Q00 CENTRO NACIONAL DE TRASPLANTES', 'DESC'),
(49, 'R00', 'R00 CENTRO NACIONAL PARA LA SALUD DE LA INFANCIA Y ADOLESCENCIA', 'DESC'),
(50, 'S00', 'S00 COMISION FEDERAL PARA LA PROTEC CONTRA RIESGOS SANITARIOS', 'DESC'),
(51, 'X00', 'X00 CENTRO NACIONAL PARA LA PREVENCION Y EL CONTROL DE LAS ADICCIONES', 'DESC'),
(52, 'S01', 'S01 SERVICIOS ESTATALES DE SALUD EN AGUASCALIENTES', 'EDO'),
(53, 'S02', 'S02 SERVICIOS ESTATALES DE SALUD EN BAJA CALIFORNIA', 'EDO'),
(54, 'S03', 'S03 SERVICIOS ESTATALES DE SALUD EN BAJA CALIFORNIA SUR', 'EDO'),
(55, 'S04', 'S04 SERVICIOS ESTATALES DE SALUD EN CAMPECHE', 'EDO'),
(56, 'S05', 'S05 SERVICIOS ESTATALES DE SALUD EN COAHUILA', 'EDO'),
(57, 'S06', 'S06 SERVICIOS ESTATALES DE SALUD EN COLIMA', 'EDO'),
(58, 'S07', 'S07 SERVICIOS ESTATALES DE SALUD EN CHIAPAS', 'EDO'),
(59, 'S08', 'S08 SERVICIOS ESTATALES DE SALUD EN CHIHUAHUA', 'EDO'),
(60, 'S09', 'S09 SERVICIOS ESTATALES DE SALUD EN LA CDMX', 'EDO'),
(61, 'S10', 'S10 SERVICIOS ESTATALES DE SALUD EN DURANGO', 'EDO'),
(62, 'S11', 'S11 SERVICIOS ESTATALES DE SALUD EN GUANAJUATO', 'EDO'),
(63, 'S12', 'S12 SERVICIOS ESTATALES DE SALUD EN GUERRERO', 'EDO'),
(64, 'S13', 'S13 SERVICIOS ESTATALES DE SALUD EN HIDALGO', 'EDO'),
(65, 'S14', 'S14 SERVICIOS ESTATALES DE SALUD EN JALISCO', 'EDO'),
(66, 'S15', 'S15 SERVICIOS ESTATALES DE SALUD EN ESTADO DE MEXICO', 'EDO'),
(67, 'S16', 'S16 SERVICIOS ESTATALES DE SALUD EN MICHOACAN', 'EDO'),
(68, 'S17', 'S17 SERVICIOS ESTATALES DE SALUD EN MORELOS', 'EDO'),
(69, 'S18', 'S18 SERVICIOS ESTATALES DE SALUD EN NAYARIT', 'EDO'),
(70, 'S19', 'S19 SERVICIOS ESTATALES DE SALUD EN NUEVO LEON', 'EDO'),
(71, 'S20', 'S20 SERVICIOS ESTATALES DE SALUD EN OAXACA', 'EDO'),
(72, 'S21', 'S21 SERVICIOS ESTATALES DE SALUD EN PUEBLA', 'EDO'),
(73, 'S22', 'S22 SERVICIOS ESTATALES DE SALUD EN QUERETARO', 'EDO'),
(74, 'S23', 'S23 SERVICIOS ESTATALES DE SALUD EN QUINTANA ROO', 'EDO'),
(75, 'S24', 'S24 SERVICIOS ESTATALES DE SALUD EN SAN LUIS POTOSI', 'EDO'),
(76, 'S25', 'S25 SERVICIOS ESTATALES DE SALUD EN SINALOA', 'EDO'),
(77, 'S26', 'S26 SERVICIOS ESTATALES DE SALUD EN SONORA', 'EDO'),
(78, 'S27', 'S27 SERVICIOS ESTATALES DE SALUD EN TABASCO', 'EDO'),
(79, 'S28', 'S28 SERVICIOS ESTATALES DE SALUD EN TAMAULIPAS', 'EDO'),
(80, 'S29', 'S29 SERVICIOS ESTATALES DE SALUD EN TLAXCALA', 'EDO'),
(81, 'S30', 'S30 SERVICIOS ESTATALES DE SALUD EN VERACRUZ', 'EDO'),
(82, 'S31', 'S31 SERVICIOS ESTATALES DE SALUD EN YUCATAN', 'EDO'),
(83, 'S32', 'S32 SERVICIOS ESTATALES DE SALUD EN ZACATECAS', 'EDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_encuesta` int(11) NOT NULL,
  `ur` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `domicilio_ur` varchar(90) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rfc_t` varchar(13) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_t` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido1_t` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido2_t` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `puesto_t` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `domicilio_t` varchar(90) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_oft` varchar(65) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_perst` varchar(65) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tel_t` int(10) NOT NULL,
  `ext_t` int(6) NOT NULL,
  `rfc_j` varchar(13) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_j` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido1_j` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido2_j` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `puesto_j` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `domicilio_j` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_ofj` varchar(65) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_persj` varchar(65) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tel_j` int(10) NOT NULL,
  `ext_j` int(6) NOT NULL,
  `cel_j` int(10) NOT NULL,
  `rfc_e` varchar(13) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_e` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido1_e` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido2_e` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `puesto_e` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_ofe` varchar(65) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_perse` varchar(65) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tel_e` int(10) NOT NULL,
  `ext_e` int(6) NOT NULL,
  `cel_e` int(10) NOT NULL,
  `ine` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fmp` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `aur` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fechaCaptura` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_doc` varchar(14) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `color_estado` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_asignado` varchar(65) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password_asignado` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fechaEnvioUsuario` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `motivo_rechazo` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_encuesta`, `ur`, `domicilio_ur`, `rfc_t`, `nombre_t`, `apellido1_t`, `apellido2_t`, `puesto_t`, `domicilio_t`, `correo_oft`, `correo_perst`, `tel_t`, `ext_t`, `rfc_j`, `nombre_j`, `apellido1_j`, `apellido2_j`, `puesto_j`, `domicilio_j`, `correo_ofj`, `correo_persj`, `tel_j`, `ext_j`, `cel_j`, `rfc_e`, `nombre_e`, `apellido1_e`, `apellido2_e`, `puesto_e`, `correo_ofe`, `correo_perse`, `tel_e`, `ext_e`, `cel_e`, `ine`, `fmp`, `aur`, `fechaCaptura`, `id_doc`, `color_estado`) VALUES
(86, '160 COMISION COORDINADORA DE LOS INSTITUTOS NACIONALES DE SALUD Y HOSPITALES DE ALTA ESPECIALIDAD', 'WWEW', 'hjjkhjkh', 'HKJ', 'HKJHJK', 'HKJ', 'KJHKJ', 'JKHKJH', 'KJJKH', 'KJHKJ', 9098, 9890, 'kjhjhjkh', 'JKHKJH', 'KJKJKH', 'JKH', 'JKHJK', 'JKh', 'KJHJK', 'HJK', 989890, 8908, 9890, 'hjhjhJKH', 'JKH', 'JHJKH', 'KJH', 'KJH', 'JKH', 'JKHKJ', 809890, 9890, 9890, '', '', '', '2021-09-14', '20210914191558', 'verde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `colorAsignado` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombrePersonal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `unidadCorrespondiente` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `id_numUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contrasena`, `id_rol`, `colorAsignado`, `nombrePersonal`, `unidadCorrespondiente`, `id_numUser`) VALUES
('Perla', 'p123', 1, 'verde', 'Perla Xochitl Espinosa de los Monteros Peña', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ct_documentos`
--
ALTER TABLE `ct_documentos`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indices de la tabla `ct_unidades`
--
ALTER TABLE `ct_unidades`
  ADD PRIMARY KEY (`id_ur`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_encuesta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_numUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ct_documentos`
--
ALTER TABLE `ct_documentos`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `ct_unidades`
--
ALTER TABLE `ct_unidades`
  MODIFY `id_ur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_numUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
