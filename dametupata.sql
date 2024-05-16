-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2024 a las 01:47:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dametupata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int(11) NOT NULL,
  `NombreCategoria` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `NombreCategoria`) VALUES
(1, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleadopcion`
--

CREATE TABLE `detalleadopcion` (
  `IdAdopcion` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdMascota` int(11) DEFAULT NULL,
  `FechaAdopcion` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `IdDetalleCompra` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  `FechaCompra` date DEFAULT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallecompra`
--

INSERT INTO `detallecompra` (`IdDetalleCompra`, `IdUsuario`, `IdProducto`, `FechaCompra`, `Cantidad`) VALUES
(53, 22, 4, '2024-05-16', 2),
(52, 22, 3, '2024-05-16', 2),
(51, 22, 2, '2024-05-16', 2),
(50, 22, 1, '2024-05-16', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalledonacion`
--

CREATE TABLE `detalledonacion` (
  `IdDonacion` int(11) NOT NULL,
  `id_transaccion` varchar(150) NOT NULL,
  `cantidad_donada` decimal(11,3) NOT NULL,
  `estado_transaccion` varchar(50) NOT NULL,
  `fecha_transaccion` date DEFAULT NULL,
  `moneda_transaccion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalledonacion`
--

INSERT INTO `detalledonacion` (`IdDonacion`, `id_transaccion`, `cantidad_donada`, `estado_transaccion`, `fecha_transaccion`, `moneda_transaccion`) VALUES
(25, '2TY710387E3209139', 21.460, 'Completed', '2024-05-17', 'USD'),
(24, '9FJ800541T618235H', 37.320, 'Completed', '2024-05-16', 'USD'),
(23, '3BH06135EF093564H', 26.740, 'Completed', '2024-05-16', 'USD'),
(22, '3MT93665XN771391Y', 16.170, 'Completed', '2024-05-16', 'USD'),
(21, '008126428D877701M', 25.000, 'Completed', '2024-05-09', 'USD'),
(20, '8X202623T4724184K', 53.170, 'Completed', '2024-05-09', 'USD'),
(19, '8Y3608259H4119034', 16.170, 'Completed', '2024-05-03', 'USD'),
(18, '0CG900984P998382E', 1.000, 'Completed', '2024-05-03', 'USD'),
(17, '9RP03725RX646114J', 7.940, 'Completed', '2024-05-03', 'USD'),
(16, '4T935762DM272120V', 5.600, 'Completed', '2024-05-03', 'USD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoproducto`
--

CREATE TABLE `estadoproducto` (
  `IdEstado` int(11) NOT NULL,
  `NombreEstado` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadoproducto`
--

INSERT INTO `estadoproducto` (`IdEstado`, `NombreEstado`) VALUES
(1, 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `IdMascota` int(11) NOT NULL,
  `NombreMascota` varchar(50) DEFAULT NULL,
  `EdadMascota` int(11) DEFAULT NULL,
  `RazaMascota` varchar(25) DEFAULT NULL,
  `ColorMascota` varchar(25) DEFAULT NULL,
  `FechaIngresoMascota` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IdProducto` int(11) NOT NULL,
  `NombreProducto` varchar(100) DEFAULT NULL,
  `DescripcionProducto` varchar(100) DEFAULT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `IdEstado` int(11) DEFAULT NULL,
  `CantidadProducto` int(11) DEFAULT NULL,
  `PrecioUnitario` float DEFAULT NULL,
  `ImagenProducto` varchar(300) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IdProducto`, `NombreProducto`, `DescripcionProducto`, `IdCategoria`, `IdEstado`, `CantidadProducto`, `PrecioUnitario`, `ImagenProducto`, `Cantidad`) VALUES
(1, 'Taza personalizada', 'Taza personalizada con temática de perritos', 1, 1, 10, 3.5, 'taza.jpg', 15),
(2, 'Cosmetiquera personalizada colorida', 'Comestiquera personalizada con temática de perritos coloridos', 1, 1, 3, 8.5, 'cosmetiquera1.jpg', 15),
(3, 'Cosmetiquera personalizada amarilla', 'Comestiquera personalizada con temática de perritos amarilla', 1, 1, 3, 5.5, 'cosmetiquera2.jpg', 15),
(4, 'Pin personalizados', 'Pin de caricaturas y personalizados', 1, 1, 3, 3, 'pinesesmaltados.jpg', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IdRol` int(11) NOT NULL,
  `NombreRol` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `IdRol` int(11) DEFAULT NULL,
  `NombreUsuario` varchar(100) DEFAULT NULL,
  `ApellidoUsuario` varchar(100) DEFAULT NULL,
  `TelefonoUsuario` varchar(10) DEFAULT NULL,
  `DuiUsuario` varchar(20) DEFAULT NULL,
  `CorreoUsuario` varchar(100) DEFAULT NULL,
  `DireccionUsuario` varchar(200) DEFAULT NULL,
  `ContrasenaUsuario` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `IdRol`, `NombreUsuario`, `ApellidoUsuario`, `TelefonoUsuario`, `DuiUsuario`, `CorreoUsuario`, `DireccionUsuario`, `ContrasenaUsuario`) VALUES
(2, 1, 'Katherine', 'Melara', '74123024', '023654123', 'katy@gmail.com', 'Villa Galicia2', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(1, 1, 'Abigail', 'Acuña', '72540178', '0735302143', 'acuaabigail@yahoo.com', 'Residencial Villa Galicia', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(22, 1, 'Erika', 'Acuna', '77410508', '012369875', 'erikaacuna671@gmail.com', 'Res Villa Galicia casa 11C', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `detalleadopcion`
--
ALTER TABLE `detalleadopcion`
  ADD PRIMARY KEY (`IdAdopcion`),
  ADD KEY `FK_Usuario_Adopcion` (`IdUsuario`),
  ADD KEY `FK_Mascota_Adopcion` (`IdMascota`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`IdDetalleCompra`),
  ADD KEY `FK_Usuario_Compra` (`IdUsuario`),
  ADD KEY `FK_Producto_Compra` (`IdProducto`);

--
-- Indices de la tabla `detalledonacion`
--
ALTER TABLE `detalledonacion`
  ADD PRIMARY KEY (`IdDonacion`);

--
-- Indices de la tabla `estadoproducto`
--
ALTER TABLE `estadoproducto`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`IdMascota`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `FK_Categoria_Producto` (`IdCategoria`),
  ADD KEY `FK_Estado_Producto` (`IdEstado`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `DuiUsuario` (`DuiUsuario`),
  ADD KEY `FK_Usuario_Rol` (`IdRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalleadopcion`
--
ALTER TABLE `detalleadopcion`
  MODIFY `IdAdopcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `IdDetalleCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `detalledonacion`
--
ALTER TABLE `detalledonacion`
  MODIFY `IdDonacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `estadoproducto`
--
ALTER TABLE `estadoproducto`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `IdMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `IdRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
