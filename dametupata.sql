-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 07:41 PM
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
-- Database: `dametupata`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int(11) NOT NULL,
  `NombreCategoria` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `NombreCategoria`) VALUES
(1, 'Accesorios');

-- --------------------------------------------------------

--
-- Table structure for table `detalleadopcion`
--

CREATE TABLE `detalleadopcion` (
  `IdAdopcion` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdMascota` int(11) DEFAULT NULL,
  `FechaAdopcion` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detallecompra`
--

CREATE TABLE `detallecompra` (
  `IdDetalleCompra` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  `FechaCompra` date DEFAULT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detallecompra`
--

INSERT INTO `detallecompra` (`IdDetalleCompra`, `IdUsuario`, `IdProducto`, `FechaCompra`, `Cantidad`) VALUES
(1, 1, 3, '2024-04-23', 2),
(2, 1, 4, '2024-04-23', 2),
(3, 1, 2, '2024-04-23', 2),
(4, 1, 1, '2024-04-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `detalledonacion`
--

CREATE TABLE `detalledonacion` (
  `IdDonacion` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `FechaDonacion` date DEFAULT NULL,
  `MontoDonacion` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estadoproducto`
--

CREATE TABLE `estadoproducto` (
  `IdEstado` int(11) NOT NULL,
  `NombreEstado` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estadoproducto`
--

INSERT INTO `estadoproducto` (`IdEstado`, `NombreEstado`) VALUES
(1, 'Disponible');

-- --------------------------------------------------------

--
-- Table structure for table `mascota`
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
-- Table structure for table `producto`
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
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`IdProducto`, `NombreProducto`, `DescripcionProducto`, `IdCategoria`, `IdEstado`, `CantidadProducto`, `PrecioUnitario`, `ImagenProducto`, `Cantidad`) VALUES
(1, 'Collar para mascota pequeña', 'Collar color rosado para mascota talla pequeña', 1, 1, 8, 6.5, 'collar.jpg', 0),
(2, 'Collar para mascota mediano', 'Collar para mascota talla mediana de diferentes colores', 1, 1, 15, 8.5, 'collarmediano.jpg', 0),
(3, 'Jueguete mascota lazo', 'Lazo para juegos de mascotas', 1, 1, 8, 5.5, 'lazo.jpg', 0),
(4, 'Jueguete plástico para mascota', 'Jueguete plástico azul para mascota', 1, 1, 4, 5.65, 'juegueteazul.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `IdRol` int(11) NOT NULL,
  `NombreRol` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `IdRol`, `NombreUsuario`, `ApellidoUsuario`, `TelefonoUsuario`, `DuiUsuario`, `CorreoUsuario`, `DireccionUsuario`, `ContrasenaUsuario`) VALUES
(2, 1, 'Katherine', 'Melara', '74123024', '023654123', 'katy@gmail.com', 'Villa Galicia2', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(1, 1, 'Abigail', 'Acuña', '72540178', '0735302143', 'acuaabigail@yahoo.com', 'Residencial Villa Galicia', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indexes for table `detalleadopcion`
--
ALTER TABLE `detalleadopcion`
  ADD PRIMARY KEY (`IdAdopcion`),
  ADD KEY `FK_Usuario_Adopcion` (`IdUsuario`),
  ADD KEY `FK_Mascota_Adopcion` (`IdMascota`);

--
-- Indexes for table `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`IdDetalleCompra`),
  ADD KEY `FK_Usuario_Compra` (`IdUsuario`),
  ADD KEY `FK_Producto_Compra` (`IdProducto`);

--
-- Indexes for table `detalledonacion`
--
ALTER TABLE `detalledonacion`
  ADD PRIMARY KEY (`IdDonacion`),
  ADD KEY `FK_Usuario_Donacion` (`IdUsuario`);

--
-- Indexes for table `estadoproducto`
--
ALTER TABLE `estadoproducto`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indexes for table `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`IdMascota`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `FK_Categoria_Producto` (`IdCategoria`),
  ADD KEY `FK_Estado_Producto` (`IdEstado`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `DuiUsuario` (`DuiUsuario`),
  ADD KEY `FK_Usuario_Rol` (`IdRol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detalleadopcion`
--
ALTER TABLE `detalleadopcion`
  MODIFY `IdAdopcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `IdDetalleCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detalledonacion`
--
ALTER TABLE `detalledonacion`
  MODIFY `IdDonacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estadoproducto`
--
ALTER TABLE `estadoproducto`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mascota`
--
ALTER TABLE `mascota`
  MODIFY `IdMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `IdRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
