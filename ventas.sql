-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-08-2022 a las 08:25:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id_Categorias` int(11) NOT NULL,
  `Nombre_Categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`Id_Categorias`, `Nombre_Categoria`) VALUES
(1, 'Aguardiente'),
(2, 'Cerveza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `Id_Perfil` int(11) NOT NULL,
  `Perfil_Users` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`Id_Perfil`, `Perfil_Users`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CLIENTE'),
(3, 'PROVEEDOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(20) NOT NULL,
  `Precio_producto` decimal(20,0) NOT NULL,
  `Cantidad_Producto` int(10) NOT NULL,
  `Imagen_Producto` text NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Nombre_Producto`, `Precio_producto`, `Cantidad_Producto`, `Imagen_Producto`, `Id_User`, `Id_Categoria`) VALUES
(1, 'Aguila', '25', 30, 'Imagen_Productos/945b0976043789.5df7f96fa31ef.jpg', 30, 2),
(2, 'Poker', '25000', 30, 'Imagen_Productos/Poker-1.png', 26, 2),
(3, 'coronita', '25', 0, 'Imagen_Productos/CORONITA-SIX-PACK-2.png', 26, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_User` int(11) NOT NULL,
  `Name_User` varchar(20) NOT NULL,
  `LastName_User` varchar(20) NOT NULL,
  `Email_User` varchar(50) NOT NULL,
  `Password_User` varchar(10) NOT NULL,
  `Id_Rol_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_User`, `Name_User`, `LastName_User`, `Email_User`, `Password_User`, `Id_Rol_User`) VALUES
(19, 'yilson alexis', 'malambo madrigal', 'rapalexism@gmail.com', '1', 1),
(20, 'yilson', 'malambo', 'q@gmail.com', '1', 1),
(21, 'yilson', 'malambo', 'qz@gmail.com', '1', 1),
(22, 'yilson', 'malambo', 'qzs@gmail.com', '1', 1),
(23, 'yilson', 'malambo', 'qx@gmail.com', '1', 3),
(24, 'luisa', 'espitia', 'luisa@gmail.com', '123', 1),
(25, 'yilson', 'malambo', 'yilson@gmail.com', '1', 2),
(26, 'elver', 'moreno', 'moreno@gmail.com', '1', 1),
(27, 'yilson', 'malambo', 'rapalexmism@gmail.com', '1', 2),
(28, 'ss', 'ss', 'rapaleximmsm@gmail.com', '1', 1),
(29, 'yilson', 'ss', 'rapalehhxism@gmail.com', '1', 1),
(30, 'yilson', 'malambo', '100760100n1madrigal@gmail.com', '1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_Categorias`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`Id_Perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_Categoria` (`Id_Categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `Id_Rol_User` (`Id_Rol_User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_Categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `Id_Perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `usuarios` (`Id_User`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`Id_Categoria`) REFERENCES `categorias` (`Id_Categorias`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Rol_User`) REFERENCES `perfiles` (`Id_Perfil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
