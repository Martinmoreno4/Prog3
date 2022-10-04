    -- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2022 a las 07:42:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp01_mysql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `código_de_barra` int(8) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `stock` int(10) NOT NULL,
  `precio` float NOT NULL,
  `fecha_de_creación` date NOT NULL,
  `fecha_de_modificación` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `código_de_barra`, `nombre`, `tipo`, `stock`, `precio`, `fecha_de_creación`, `fecha_de_modificación`) VALUES
(1001, 77900361, 'Westmacot t', 'liquido', 33, 15.87, '2021-02-09', '2020-09-26'),
(1002, 77900362, 'Spirit', 'solido', 45, 66, '2020-09-18', '2020-04-14'),
(1003, 77900363, 'Newgrosh', 'polvo', 0, 68.19, '2020-11-29', '2021-02-11'),
(1004, 77900364, 'McNickle', 'polvo', 0, 53.51, '2020-11-28', '2020-04-17'),
(1005, 77900365, 'Hudd', 'solido', 68, 66, '2020-12-19', '2020-06-19'),
(1006, 77900366, 'Schrader', 'polvo', 0, 96.54, '2020-08-02', '2020-04-18'),
(1007, 77900367, 'Bachellier', 'solido', 59, 66, '2020-01-30', '2020-06-07'),
(1008, 77900368, 'Fleming', 'solido', 38, 66, '2020-10-26', '2020-10-03'),
(1009, 77900369, 'Hurry', 'solido', 44, 66, '2020-07-04', '2020-05-30'),
(1011, 0, 'chocolate', 'solido', 0, 66, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_de_registro` date NOT NULL,
  `localidad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `clave`, `mail`, `fecha_de_registro`, `localidad`) VALUES
(101, 'Esteban', 'Madou', '2345', 'dkantor0@example.com', '2021-01-07', 'Quilmes'),
(102, 'German', 'Gerram', '1234', 'ggerram1@hud.gov', '2020-05-08', 'Berazategui'),
(103, 'Deloris', 'Fosis', '5678', 'bsharpe2@wisc.edu', '2020-11-28', 'Avellaneda'),
(104, 'Brok', 'Neiner', '4567', 'bblazic3@desdev.cn', '2020-12-08', 'Quilmes'),
(105, 'Garrick', 'Brent', '6789', 'gbrent4@theguardian.com', '2020-12-17', 'Moron'),
(106, 'Bili', 'Baus', '0123', 'bhoff5@addthis.com', '2020-11-27', 'Moreno'),
(107, 'Martin', 'moreno', '1234', 'mmartin@example.com', '2022-09-20', 'Avellaneda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `fecha_de_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `id_producto`, `id_usuario`, `cantidad`, `fecha_de_venta`) VALUES
(1, 1001, 101, 2, '2020-07-19'),
(2, 1008, 102, 3, '2020-08-16'),
(3, 1007, 102, 4, '2021-01-24'),
(4, 1006, 103, 5, '2021-01-14'),
(5, 1003, 104, 6, '2021-03-20'),
(6, 1005, 105, 7, '2021-02-22'),
(7, 1003, 104, 6, '2021-12-02'),
(8, 1003, 106, 6, '2020-06-10'),
(9, 1002, 106, 6, '2021-02-04'),
(10, 1001, 106, 1, '2020-05-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*****************************************************************************************************************************************************/   
/*TP1*/    
    INSERT INTO `producto`(`id`, `código_de_barra`, `nombre`, `tipo`, `stock`, `precio`, `fecha_de_creación`, `fecha_de_modificación`) 
    VALUES 
	('1001','77900361','Westmacot t','liquido','33','15.87','2021-02-09','2020-09-26'),
    ('1002','77900362','Spirit','solido','45','69.74','2020-09-18','2020-04-14'),
    ('1003','77900363','Newgrosh','polvo','14','68.19','2020-11-29','2021-02-11'),
    ('1004','77900364','McNickle','polvo','19','53.51','2020-11-28','2020-04-17'),
    ('1005','77900365','Hudd','solido','68','26.56','2020-12-19','2020-06-19'),
    ('1006','77900366','Schrader','polvo','17','96.54','2020-08-02','2020-04-18'),
    ('1007','77900367','Bachellier','solido','59','69.17','2020-01-30','2020-06-07'),
    ('1008','77900368','Fleming','solido','38','66.77','2020-10-26','2020-10-03'),
    ('1009','77900369','Hurry','solido','44','43.01','2020-07-04','2020-05-30'),
    ('1010','77900310','Krauss','polvo','73','35.73','2020-03-03','2020-08-30');
    
    INSERT INTO `venta`(`id_producto`, `id_usuario`, `cantidad`, `fecha_de_venta`) 
    VALUES 
	('1001','101','2','2020-07-19'),
    ('1008','102','3','2020-08-16'),
    ('1007','102','4','2021-01-24'),
    ('1006','103','5','2021-01-14'),
    ('1003','104','6','2021-03-20'),
    ('1005','105','7','2021-02-22'),
    ('1003','104','6','2021-12-02'),
    ('1003','106','6','2020-06-10'),
    ('1002','106','6','2021-02-04'),
	('1001','106','1','2020-05-17');
	
	
	INSERT INTO `usuarios`(`nombre`, `apellido`, `clave`, `mail`, `fecha_de_registro`, `localidad`) 
	VALUES 
    ('Esteban','Madou','2345','dkantor0@example.com','2021-01-07','Quilmes'),
    ('German','Gerram','1234','ggerram1@hud.gov','2020-05-08','Berazategui'),
    ('Deloris','Fosis','5678','bsharpe2@wisc.edu','2020-11-28','Avellaneda'),
    ('Brok','Neiner','4567','bblazic3@desdev.cn','2020-12-08','Quilmes'),
    ('Garrick','Brent','6789','gbrent4@theguardian.com','2020-12-17','Moron'),
    ('Bili','Baus','0123','bhoff5@addthis.com','2020-11-27','Moreno');

    /*1. Obtener los detalles completos de todos los usuarios, ordenados alfabéticamente.*/

    SELECT * FROM `usuarios` ORDER BY nombre ASC;

    /*2. Obtener los detalles completos de todos los productos líquidos.*/

    SELECT * FROM `producto` WHERE tipo = 'liquido'; 

    /*3. Obtener todas las compras en los cuales la cantidad esté entre 6 y 10 inclusive.*/

    SELECT * FROM `venta` WHERE cantidad BETWEEN 6 AND 10;

    /*4. Obtener la cantidad total de todos los productos vendidos.*/

    SELECT SUM(cantidad) FROM `venta`; 

    /*5. Mostrar los primeros 3 números de productos que se han enviado.*/

    SELECT * FROM `venta` ORDER BY fecha_de_venta ASC LIMIT 3; 

    /*6. Mostrar los nombres del usuario y los nombres de los productos de cada venta.*/

    SELECT nombre FROM usuarios INNER JOIN venta ON venta.id_usuario = usuarios.id;  

    SELECT nombre FROM producto INNER JOIN venta ON venta.id_producto = producto.id; 

    /*7. Indicar el monto (cantidad * precio) por cada una de las ventas.*/
    
    SELECT id_producto, producto.precio*venta.cantidad AS monto FROM venta INNER JOIN producto WHERE producto.id = venta.id_producto; 

    /*8. Obtener la cantidad total del producto 1003 vendido por el usuario 104.*/

    SELECT SUM(cantidad) FROM `venta` WHERE id_producto=1003 AND id_usuario = 104;

    /*9. Obtener todos los números de los productos vendidos por algún usuario de ‘Avellaneda’.*/

    SELECT venta.* FROM usuarios INNER JOIN venta ON venta.id_usuario = usuarios.id WHERE usuarios.localidad = 'Avellaneda'; 

    /*10.Obtener los datos completos de los usuarios cuyos nombres contengan la letra ‘u’.*/

    select * from usuarios where nombre like '%u%'; 
    
    /*11. Traer las ventas entre junio del 2020 y febrero 2021.*/

    SELECT * FROM `venta` WHERE fecha_de_venta BETWEEN '2020/06/01' AND '2021/02/01'; 

    /*12. Obtener los usuarios registrados antes del 2021.*/

    SELECT * FROM `usuarios` WHERE fecha_de_registro < '2021/01/01'; 

    /*13.Agregar el producto llamado ‘Chocolate’, de tipo Sólido y con un precio de 25,35.*/

    INSERT INTO `producto`(`nombre`, `tipo`, `precio`) VALUES ('chocolate','liquido','25.35');

    /*14.Insertar un nuevo usuario .*/

    INSERT INTO `usuarios`(`nombre`, `apellido`, `clave`, `mail`, `fecha_de_registro`, `localidad`) VALUES ('Martin','moreno','1234','mmartin@example.com','2022-09-20','Avellaneda'); 

    /*15.Cambiar los precios de los productos de tipo sólido a 66,60.*/

    UPDATE producto SET precio = '66.00' WHERE tipo = 'solido'; 

    /*16.Cambiar el stock a 0 de todos los productos cuyas cantidades de stock sean menores
    a 20 inclusive.*/

    UPDATE producto SET stock = '0' WHERE stock <= '20';

    /*17.Eliminar el producto número 1010.*/

    DELETE FROM producto WHERE id = '1010'; 

    /*18.Eliminar a todos los usuarios que no han vendido productos.*/
    DELETE from usuarios
    WHERE usuarios.id =(
    SELECT usuarios.id FROM ventas
    RIGHT JOIN usuarios on ventas.id_usuario = usuarios.id
    WHERE ventas.id is null);
    

    
