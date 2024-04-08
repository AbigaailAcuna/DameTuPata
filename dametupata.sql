-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2024 at 05:49 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

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

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `NombreCategoria`) VALUES
(1, 'Accesorios');

-- --------------------------------------------------------

--
-- Table structure for table `detalleadopcion`
--

DROP TABLE IF EXISTS `detalleadopcion`;
CREATE TABLE IF NOT EXISTS `detalleadopcion` (
  `IdAdopcion` int NOT NULL AUTO_INCREMENT,
  `IdUsuario` int DEFAULT NULL,
  `IdMascota` int DEFAULT NULL,
  `FechaAdopcion` date DEFAULT NULL,
  PRIMARY KEY (`IdAdopcion`),
  KEY `FK_Usuario_Adopcion` (`IdUsuario`),
  KEY `FK_Mascota_Adopcion` (`IdMascota`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detallecompra`
--

DROP TABLE IF EXISTS `detallecompra`;
CREATE TABLE IF NOT EXISTS `detallecompra` (
  `IdDetalleCompra` int NOT NULL AUTO_INCREMENT,
  `IdUsuario` int DEFAULT NULL,
  `IdProducto` int DEFAULT NULL,
  `FechaCompra` date DEFAULT NULL,
  `TotalCompra` float DEFAULT NULL,
  PRIMARY KEY (`IdDetalleCompra`),
  KEY `FK_Usuario_Compra` (`IdUsuario`),
  KEY `FK_Producto_Compra` (`IdProducto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalledonacion`
--

DROP TABLE IF EXISTS `detalledonacion`;
CREATE TABLE IF NOT EXISTS `detalledonacion` (
  `IdDonacion` int NOT NULL AUTO_INCREMENT,
  `IdUsuario` int DEFAULT NULL,
  `FechaDonacion` date DEFAULT NULL,
  `MontoDonacion` float DEFAULT NULL,
  PRIMARY KEY (`IdDonacion`),
  KEY `FK_Usuario_Donacion` (`IdUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estadoproducto`
--

DROP TABLE IF EXISTS `estadoproducto`;
CREATE TABLE IF NOT EXISTS `estadoproducto` (
  `IdEstado` int NOT NULL AUTO_INCREMENT,
  `NombreEstado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdEstado`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `estadoproducto`
--

INSERT INTO `estadoproducto` (`IdEstado`, `NombreEstado`) VALUES
(1, 'Disponible');

-- --------------------------------------------------------

--
-- Table structure for table `mascota`
--

DROP TABLE IF EXISTS `mascota`;
CREATE TABLE IF NOT EXISTS `mascota` (
  `IdMascota` int NOT NULL AUTO_INCREMENT,
  `NombreMascota` varchar(50) DEFAULT NULL,
  `EdadMascota` int DEFAULT NULL,
  `RazaMascota` varchar(25) DEFAULT NULL,
  `ColorMascota` varchar(25) DEFAULT NULL,
  `FechaIngresoMascota` date DEFAULT NULL,
  PRIMARY KEY (`IdMascota`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `IdProducto` int NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(100) DEFAULT NULL,
  `DescripcionProducto` varchar(100) DEFAULT NULL,
  `IdCategoria` int DEFAULT NULL,
  `IdEstado` int DEFAULT NULL,
  `CantidadProducto` int DEFAULT NULL,
  `PrecioUnitario` float DEFAULT NULL,
  `ImagenProducto` varchar(300) NOT NULL,
  `Cantidad` int NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `FK_Categoria_Producto` (`IdCategoria`),
  KEY `FK_Estado_Producto` (`IdEstado`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`IdProducto`, `NombreProducto`, `DescripcionProducto`, `IdCategoria`, `IdEstado`, `CantidadProducto`, `PrecioUnitario`, `ImagenProducto`, `Cantidad`) VALUES
(1, 'Collar para mascota pequeña', 'Collar color rosado para mascota talla pequeña', 1, 1, 10, 6.5, 'collar.jpg', 0),
(2, 'Collar para mascota mediano', 'Collar para mascota talla mediana de diferentes colores', 1, 1, 17, 8.5, 'collarmediano.jpg', 0),
(3, 'Jueguete mascota lazo', 'Lazo para juegos de mascotas', 1, 1, 10, 5.5, 'lazo.jpg', 0),
(4, 'Jueguete plástico para mascota', 'Jueguete plástico azul para mascota', 1, 1, 6, 5.65, 'juegueteazul.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `IdRol` int NOT NULL AUTO_INCREMENT,
  `NombreRol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdRol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int NOT NULL AUTO_INCREMENT,
  `IdRol` int DEFAULT NULL,
  `NombreUsuario` varchar(100) DEFAULT NULL,
  `ApellidoUsuario` varchar(100) DEFAULT NULL,
  `TelefonoUsuario` varchar(10) DEFAULT NULL,
  `DuiUsuario` varchar(20) DEFAULT NULL,
  `CorreoUsuario` varchar(100) DEFAULT NULL,
  `DireccionUsuario` varchar(200) DEFAULT NULL,
  `ContrasenaUsuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`),
  UNIQUE KEY `DuiUsuario` (`DuiUsuario`),
  KEY `FK_Usuario_Rol` (`IdRol`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `IdRol`, `NombreUsuario`, `ApellidoUsuario`, `TelefonoUsuario`, `DuiUsuario`, `CorreoUsuario`, `DireccionUsuario`, `ContrasenaUsuario`) VALUES
(2, 1, 'Katherine', 'Melara', '74123024', '023654123', 'katy@gmail.com', 'Villa Galicia2', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(1, 1, 'Abigail', 'Acuña', '72540178', '0735302143', 'acuaabigail@yahoo.com', 'Residencial Villa Galicia', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
