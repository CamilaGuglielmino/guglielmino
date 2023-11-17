-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2023 a las 00:29:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rapibnb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroalojamiento`
--

CREATE TABLE `registroalojamiento` (
  `ID` int(3) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `Provincia` enum('San Luis','Buenos Aires','Catamarca','Chaco','Cordoba','Corrientes','Entre Rios','Formosa','Jujuy','La Pampa','La Rioja','Mendoza','Misiones','Neuquen','Rio Negro','Salta','San Juan','Santa Cruz','Santa Fe','Santiago del Estero','Tucuman','Tierra del Fuego') NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `tipoPropiedad` enum('Casa','Departamento','Cabaña','Habitacion') NOT NULL,
  `serviciosBasicos` set('Wifi','Cocina','Lavarropas','Aire acondicionado','Televisor','Calefaccion') NOT NULL,
  `costo` float NOT NULL,
  `cupo` int(3) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `imagen` varchar(60) NOT NULL,
  `imagen2` varchar(100) NOT NULL,
  `imagen3` varchar(100) NOT NULL,
  `imagen5` varchar(100) NOT NULL,
  `fechalimite` date NOT NULL,
  `statu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registroalojamiento`
--

INSERT INTO `registroalojamiento` (`ID`, `idusuario`, `Provincia`, `ciudad`, `direccion`, `tipoPropiedad`, `serviciosBasicos`, `costo`, `cupo`, `titulo`, `descripcion`, `imagen`, `imagen2`, `imagen3`, `imagen5`, `fechalimite`, `statu`) VALUES
(222, 333, 'Cordoba', 'Cordoba', 'Ruta 148', 'Cabaña', 'Wifi,Lavarropas,Aire acondicionado,Calefaccion', 15000, 6, 'La casona', 'Hermoso lugar para descansar de la ciudad', 'img_alojamientos\\1879934125.jpg', 'img_alojamientos\\1879934126.jpg', 'img_alojamientos\\1879934131.jpg', '', '2023-12-15', 'activo'),
(243, 739, 'San Luis', 'merlo', 'Los linderos 123', 'Cabaña', 'Cocina,Aire acondicionado,Televisor,Calefaccion', 12000, 6, 'La Olguita', 'Cabañas al filo de las sierras', 'img_alojamientos/lascabanias.jpg', 'img_alojamientos/3.jpg', 'img_alojamientos/01.jpg', 'img_alojamientos/', '2023-11-30', 'activo'),
(484, 966, 'Mendoza', 'Guaymayen', 'av. principal', 'Casa', 'Wifi,Televisor,Calefaccion', 14000, 2, 'El refugio', 'Fantastico lugar para tomarse un descanso de la ciudad', 'img_alojamientos/a951230c-59b9-4a0f-9a35-aa20849d0438.jpg', 'img_alojamientos/c8279a67-2b35-4448-b45d-a45913dae0bd.jpg', 'img_alojamientos/f5cd57a3-b42d-4211-a73c-047c6cc2fc13.jpg', 'img_alojamientos/', '2023-11-29', 'activo'),
(689, 676, 'La Pampa', 'La pampa', 'las rosas 45', 'Casa', 'Lavarropas', 10000, 4, 'El sueño', 'Un lugar soñado', 'img_alojamientos/2ac4c2aa-30a2-44fa-9e5e-a99c4a82446c.jpg', 'img_alojamientos/2e9da650-5e89-4569-bf40-b27987cbad5a.jpg', 'img_alojamientos/600be1f9-c134-4461-b843-dc4579e45fed.jpg', 'img_alojamientos/', '2023-11-30', 'inactivo'),
(815, 314, 'Buenos Aires', 'San Telmo', 'av. sarmiento', 'Departamento', 'Wifi,Aire acondicionado,Calefaccion', 25000, 2, 'Loft de Lujo', 'Lujo Loft con muy buena ubicación', 'img_alojamientos/loft1.jpg', 'img_alojamientos/loft2.jpg', 'img_alojamientos/loft3.jpg', 'img_alojamientos/', '2023-12-30', 'activo'),
(835, 687, 'Buenos Aires', 'tigre', 'av. españa', 'Casa', 'Wifi,Cocina,Lavarropas', 22000, 2, 'Habitacion en Tigre', 'Hermosa habitacion en casa con pileta', 'img_alojamientos/71e5390f_original.jpg', 'img_alojamientos/05980d79-cc5c-40c8-b38c-6f9a5175ec7c.jpg', 'img_alojamientos/c4a459e1-d5f3-49ac-a4d4-6ff161285184.jpg', 'img_alojamientos/', '2023-12-31', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroreserva`
--

CREATE TABLE `registroreserva` (
  `id` int(11) NOT NULL DEFAULT current_timestamp(),
  `idalojamiento` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registroreserva`
--

INSERT INTO `registroreserva` (`id`, `idalojamiento`, `idusuario`, `fechainicio`, `fechafin`, `comentario`, `estado`) VALUES
(2, 484, 966, '2023-11-01', '2023-11-10', 'Muy lindo el lugar', 'inactivo'),
(3, 222, 676, '2023-11-07', '2023-11-17', 'Hermoso lugar, era lo que esperaba', 'inactivo'),
(5, 222, 333, '2023-11-19', '2023-11-25', '', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuario`
--

CREATE TABLE `registrousuario` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `contra` varchar(6) NOT NULL,
  `contra2` varchar(6) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `edad` int(3) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `intereses` varchar(250) NOT NULL,
  `imagen` varchar(100) NOT NULL DEFAULT 'img_perfil\\R.jpeg',
  `files` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrousuario`
--

INSERT INTO `registrousuario` (`id`, `correo`, `usuario`, `contra`, `contra2`, `tipo`, `nombre`, `apellido`, `edad`, `telefono`, `intereses`, `imagen`, `files`, `bio`) VALUES
(314, 'lucas@gmail.com', 'Lucas23', '898989', '898989', 'Regular', 'Lucas', 'Garro', 33, '242425242', 'Deportista', 'img_perfil/images (1).jpeg', '', ''),
(333, 'adm@gmail.com', 'adm', '456', '456', 'Verificado', 'Adm', '', 30, '', '', 'img_perfil\\R.jpeg', '', ''),
(337, 'viviana@gmail.com', 'viviana9', '789789', '789789', 'Regular', 'Viviana', 'Sosa', 34, '72932323', 'Todo lo que sea arte', 'img_perfil/fotoperfil.jpeg', '', ''),
(676, 'cami@gmail.com', 'camila12', '456456', '456456', 'Verificado', 'Camila', 'Guglielmino', 27, '2664246744', 'fotografia', 'img_perfil/foto.jpeg', 'documento/05980d79-cc5c-40c8-b38c-6f9a5175ec7c.jpg', 'Hola, tengo 27 años y estudio progrmación'),
(687, 'luis@gmail.com', 'luis89', '9090', '9090', 'Regular', 'Luis', 'Garcia', 43, '2664343434', 'Arte', 'img_perfil/images.jpeg', '', ''),
(739, 'sofia@gmail.com', 'SofiaG', '111', '111', 'Regular', 'Sofia', 'Garro', 22, '2665433245', 'Peliculas y Series', 'img_perfil/istockphoto-1437816897-612x612.jpg', '', ''),
(966, 'juan@gmail.com', 'Juan09', '7878', '7878', 'Regular', 'Juan', 'Perez', 23, '246454162', 'Fan de la naturaleza', 'img_perfil/images (2).jpeg', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroalojamiento`
--
ALTER TABLE `registroalojamiento`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `idusuario` (`idusuario`) USING BTREE;

--
-- Indices de la tabla `registroreserva`
--
ALTER TABLE `registroreserva`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idalojamiento` (`idalojamiento`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registroalojamiento`
--
ALTER TABLE `registroalojamiento`
  ADD CONSTRAINT `registroalojamiento_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `registrousuario` (`id`);

--
-- Filtros para la tabla `registroreserva`
--
ALTER TABLE `registroreserva`
  ADD CONSTRAINT `registroreserva_ibfk_1` FOREIGN KEY (`idalojamiento`) REFERENCES `registroalojamiento` (`ID`),
  ADD CONSTRAINT `registroreserva_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `registrousuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
