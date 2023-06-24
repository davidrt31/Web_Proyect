-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2023 a las 06:32:40
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
-- Base de datos: `bd_dongil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `name_prod` varchar(255) NOT NULL,
  `img_prod` varchar(2500) NOT NULL,
  `cate_prod` varchar(255) NOT NULL,
  `desc_prod` varchar(255) NOT NULL,
  `prov_prod` varchar(255) NOT NULL,
  `cost_prod` decimal(10,2) NOT NULL,
  `stock_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name_prod`, `img_prod`, `cate_prod`, `desc_prod`, `prov_prod`, `cost_prod`, `stock_prod`) VALUES
(1, 'Bisteck', '1687506110_bisteck.png', 'Carnes, aves y pescados', 'Bisteck 1Kg', 'San Fernando', 8.50, 15),
(2, 'Pavo Empaquetado', '1687555217_pavo.png', 'Carnes, aves y pescados', 'Presentación de 1kg aprox.', 'San Fernando', 12.50, 9),
(3, 'Pechuga Entera de Pollo', '1687552979_pechuga_pollo.png', 'Carnes, aves y pescados', 'Presentación de 1kg apróx.', 'San Fernando', 13.90, 12),
(4, 'Carne de Res', '1687552687_res.png', 'Carnes, aves y pescados', 'Carne de Res', 'Plaza Vea', 12.50, 8),
(5, 'Churrasco', '1687552600_churrasco.png', 'Carnes, aves y pescados', 'Churrasco de 1Kg', 'El Buen Corte', 12.00, 2),
(6, 'Carne de Cerdo', '1687548428_cerdo.png', 'Carnes, aves y pescados', 'Carne de Cerdo de 1kg', 'San Fernando', 8.50, 9),
(7, 'Leche Condensada Nestle', '1687574317_leche_condensada.png', 'Lácteos', 'Contendido 300ml', 'Nestle', 4.50, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `lastnames` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `names`, `lastnames`, `email`, `pass`) VALUES
(1, 'David', 'Ruiz', 'admin@admin.org', 'admin12345'),
(2, 'Álvaro', 'Fernández', 'admin1@admin.org', 'admin12345'),
(3, 'Johanderson', 'Espinoza', 'admin2@admin.org', 'admin12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
