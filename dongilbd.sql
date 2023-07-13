-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 11:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dongilbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `boletas`
--

CREATE TABLE `boletas` (
  `id_boleta` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `productos` varchar(10000) NOT NULL,
  `pago_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boletas`
--

INSERT INTO `boletas` (`id_boleta`, `fecha`, `usuario`, `productos`, `pago_total`) VALUES
(1, '2023-07-12 13:03:50', 'afernandez@gmail.com', 'Carne de Ternera 13.90 x 1, Agua San Mateo 2.5L 3.00 x 1, Alfajor x Und. 2.50 x 2', 21.90),
(2, '2023-07-12 15:53:59', 'afernandez@gmail.com', 'Carne de Ternera S/13.90 x 1, Agua San Mateo 2.5L S/3.00 x 1, Alfajor x Und. S/2.50 x 2, ', 21.90),
(3, '2023-07-12 15:58:13', 'afernandez@gmail.com', 'Crema de leche S/8.90 x 2, Guiso de Cerdo x Kg. S/26.90 x 3, Queso fresco S/34.50 x 1, ', 133.00),
(4, '2023-07-12 16:04:09', 'jzapata@gmail.com', 'Flan 150gr. S/5.00 x 1, Gaseosa incakola 355ml. S/3.50 x 2, Fresas x Kg. S/10.00 x 1, Jabon Protex Pack x3 S/11.40 x 1, ', 33.40);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `proveedor` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `imagen`, `descripcion`, `proveedor`, `precio`, `stock`) VALUES
(1, 'Carne de Ternera', 'CARNES, AVES Y PESCADOS', '1686974431_bisteck.png', 'Bisteck de Tapa x Kg', 'San Fernando', 13.90, 30),
(3, 'Crema de leche', 'LACTEOS', '1686974481_crema_de_leche.png', 'Esto es una Crema', 'Gloria', 8.90, 8),
(4, 'Agua San Mateo 2.5L', 'BEBIDAS', '1686974333_agua_sanmateo.jpg', 'Agua San Mateo de Manantial', 'San Mateo', 3.00, 15),
(5, 'Guiso de Cerdo x Kg.', 'CARNES, AVES Y PESCADOS', '1686973848_cerdo.png', 'Esto es un chanchito', 'San Fernando', 26.90, 15),
(12, 'Queso fresco', 'LACTEOS', '1686979760_queso_fresco.png', 'Queso fresco de 150 gramos', 'Bonle', 34.50, 8),
(14, 'Leche evaporada', 'LACTEOS', '1686979760_leche_evaporada.png', 'Leche evaporada en lata de 400 gramos', 'Gloria', 4.20, 15),
(22, 'Manjarblanco', 'LACTEOS', '1686979760_Manjarblanco.png', 'Manjar blanco de 250 gramos en envase de plastico ', 'Bonle', 6.10, 14),
(23, 'Leche condensada', 'LACTEOS', '1686979760_leche_condensada.png', 'Leche condensada 390 gramos en lata', 'Nestle', 6.25, 11),
(25, 'Queso fundido', 'LACTEOS', '1686979760_queso_fundido.png', 'Queso dundido en tajadas 136 gramos', 'Bonle', 6.20, 16),
(27, 'Queso parmesano', 'LACTEOS', '1686979760_queso_parmesano.png', 'Queso parmesano 35 gramos en bolsa', 'Laive', 5.29, 16),
(29, 'Queso Mozzarella', 'LACTEOS', '1686979760_queso_mozzarella.png', 'Queso mozzarella 250 gramos ', 'Bonle', 13.00, 8),
(31, 'Queso gouda', 'LACTEOS', '1686979760_queso_gouda.png', 'Queso gouda 9 tajadas 180 gramos', 'Gloria', 10.50, 16),
(34, 'Yogurt con cereal', 'LACTEOS', '1686979760_yogurt_cereal.png', 'yogurt en vaso con cereal  145 gramos', 'Coisine y co', 2.99, 9),
(36, 'Yogurt batimix chocolate', 'LACTEOS', '1686979760_yogurt_batimix.png', 'yogurt de vainilla con bolas de chocolate 145 gramos', 'Laive', 3.40, 14),
(38, 'Mantequilla sin sal', 'LACTEOS', '1686979760_mantequilla_sin_sal.png', 'mantequilla en barra sin sal 150 gramos', 'Gloria', 12.90, 13),
(39, 'Yogurt descremado', 'LACTEOS', '1686979760_yogurt_descremado.png', 'Yogurt sin grasas ni azucares 1Kg', 'Gloria', 6.30, 12),
(40, 'Yogurt sin lactosa', 'LACTEOS', '1686979760_yogurt_sin_lactosa.png', 'Yogurt sin lactosa sabor fresa 1kg', 'Gloria', 8.40, 14),
(44, 'Arandano congelado 500gr.', 'CONGELADOS', '1686979761_arandanocongelado500gr_Feat.jpg', 'arandanos congelados sin azucares añadidos ni preservantes 500 gramos', 'Feat', 6.50, 9),
(46, 'Champiñones 500gr. Feat', 'CONGELADOS', '1686979761_champiñonescongelados500gr_Feat.jpg', 'champiñones congelados sin sal añadida, sin colorantes ni preservantes 500 gramos', 'Feat', 6.50, 18),
(48, 'Choclo congelado GreenFood', 'CONGELADOS', '1686979761_chocloserrano400gr_Greenfood.jpg', 'Choclo serrano desgranado congelado 500 gramos', 'Greenfood', 6.00, 17),
(49, 'Fresa congelada 500gr Feat.', 'CONGELADOS', '1686979761_fresacongelada500gr_Feat.jpg', 'Fresas congealadas sin azucar añadido ni preservantes ni colorantes 500 gramos', 'Feat', 5.00, 9),
(50, 'Frijol canario congelado Guva', 'CONGELADOS', '1686979761_frijocanarioprecocido500g_guva.jpg', 'Frijol canario precocido congelado 500 gramos', 'Guva', 4.00, 19),
(52, 'Garbanzo congelado Guva', 'CONGELADOS', '1686979761_garbanzoprecocido500g_guva.jpg', 'Garbanzo precocido congelado 500 gramos', 'Guva', 4.00, 13),
(54, 'Helado brownie 1Lt.LaCalaca', 'CONGELADOS', '1686979761_heladobrownie1Lt_lacalaca.jpg', 'Helado de chocolate sabor brownie 1 litro', 'Calaca', 12.00, 14),
(56, 'Helado lúcuma 1Lt.LaCalaca', 'CONGELADOS', '1686979761_heladolucumagalleta1Lt_lacalaca.jpg', 'Helado sabor lucuma con galletas de chocolate 1 Litro', 'Calaca', 12.00, 18),
(57, 'Helado Menta 1Lt.LaCalaca', 'CONGELADOS', '1686979761_heladomenta1L_Lacalaca.jpg', 'Helado de menta con galletas de chocolate 1 Litro', 'Calaca', 12.00, 3),
(58, 'Mango congelado 500gr.', 'CONGELADOS', '1686979761_mangocongelado500gr_Feat.jpg', 'Mango congelado sin colorantes ni preservantes ni azucar añadido 500 gramos', 'Feat', 4.50, 15),
(59, 'Pallar congelado Guva', 'CONGELADOS', '1686979761_pallarprecocido500g_Bells.jpg', 'pallar congelado precocido 500 gramos', 'Guva', 5.50, 18),
(62, 'Pan Cciabata congelado x4', 'CONGELADOS', '1686979761_pancciabatacongelado5unds_Bells.jpg', 'pan congelado cciabata 4 unidades precocido', 'Bells', 4.00, 14),
(64, 'Pan Francés congelado x4', 'CONGELADOS', '1686979761_panfrancescongelado5und_Bells.jpg', 'Pan frances congelado y precocido 4 unidades ', 'Bells', 4.00, 17),
(65, 'Pizza Hawaiana congelada', 'CONGELADOS', '1686979761_pizzahawaianacongelada400g_ilpastificio.jpg', 'Pizza Hawaiana congelada precocida 8 porciones ', 'Il Patificio', 16.00, 16),
(66, 'Pizza Americana congelada', 'CONGELADOS', '1686979761_pizzaamericana360g_bells.jpg', 'Pizza americana congelada precocida 8 porciones 360 gramos', 'Bells', 15.00, 12),
(68, 'Pizza Salame congelada', 'CONGELADOS', '1686979761_pizzasalame360g_bells.jpg', 'Pizza salame congelada precocida 360 gramos', 'Bells', 15.00, 14),
(70, 'Manzana Golden x Kg.', 'FRUTAS Y VERDURAS', '1686979761_manzana_golden.jpg', 'manzana golden verde ', 'Pronasel', 5.00, 18),
(71, 'Platano seda  5Und.', 'FRUTAS Y VERDURAS', '1686979761_platano_seda.jpg', 'Platano seda 5 unidades ', 'Pronasel', 3.00, 7),
(73, 'Naranja x Kg.', 'FRUTAS Y VERDURAS', '1686979761_naranja.jpg', 'Naranja valencia dulce ', 'Pronasel', 3.00, 8),
(75, 'Uva borgoña x Kg.', 'FRUTAS Y VERDURAS', '1686979761_uva_borgoña.jpg', 'Uva borgoña premium', 'Pronasel', 6.50, 12),
(78, 'Mandarina sin pepa x Kg.', 'FRUTAS Y VERDURAS', '1686979761_mandarina_sin_pepa.jpg', 'mandarina sin pepa clementina', 'Pronasel', 4.00, 17),
(80, 'Mango papaya x Kg.', 'FRUTAS Y VERDURAS', '1686979761_mango_papaya.jpg', 'Mango papaya amarillo verdoso dulce', 'Pronasel', 4.00, 9),
(82, 'Papaya x Kg', 'FRUTAS Y VERDURAS', '1686979761_papaya.jpg', 'Papaya criolla maduro dulce', 'Pronasel', 4.50, 16),
(84, 'Fresas x Kg.', 'FRUTAS Y VERDURAS', '1686979761_fresas.jpg', 'Fresa chandler grandes frescas', 'Sierralta', 10.00, 13),
(86, 'Maracuyá x Kg.', 'FRUTAS Y VERDURAS', '1686979761_maracuya.jpg', 'Maracuya amarilla fresca', 'Sierralta', 4.50, 16),
(88, 'Carambolas x Kg.', 'FRUTAS Y VERDURAS', '1686979761_carambola.jpg', 'Carambola acida amarilla', 'Sierralta', 3.50, 11),
(90, 'Papa amarilla x Kg.', 'FRUTAS Y VERDURAS', '1686979761_papa_amarilla.jpg', 'Papa amarilla tamaño mediano', 'Sierralta', 4.50, 13),
(91, 'Tomate x Kg.', 'FRUTAS Y VERDURAS', '1686979761_tomate.jpg', 'Tomate nativo rojo pequeños', 'Sierralta', 5.50, 17),
(92, 'Zanahoria x Kg.', 'FRUTAS Y VERDURAS', '1686979761_zanahoria.jpg', 'Zanahoria criolla grandes', 'Sierralta', 2.50, 16),
(93, 'Lechuga 1 Und.', 'FRUTAS Y VERDURAS', '1686979761_lechuga.jpg', 'lechuga escarola grande', 'Sierralta', 2.50, 15),
(94, 'Apio 1 Und.', 'FRUTAS Y VERDURAS', '1686979761_apio.jpg', 'Apio amarillo grande', 'Sierralta', 5.00, 4),
(97, 'Poro 1 Und.', 'FRUTAS Y VERDURAS', '1686979761_poro.jpg', 'Puerro grande', 'Sierralta', 2.00, 6),
(98, 'Cebolla x Kg.', 'FRUTAS Y VERDURAS', '1686979761_cebolla.jpg', 'Cebolla morada mediana seca', 'Sierralta', 3.00, 13),
(100, 'Arveja Costeño 500g.', 'FRUTAS Y VERDURAS', '1686979761_arveja_costeño500g.jpg', 'Arveja partida cruda 500 gramos', 'Costeño', 3.50, 13),
(102, 'Choclo x 1 Und.', 'FRUTAS Y VERDURAS', '1686979761_choclo.jpg', 'choclo dentado grande', 'Sierralta', 1.50, 13),
(104, 'Esparragos X 350g.', 'FRUTAS Y VERDURAS', '1686979761_esparragos.jpg', 'Esparrago verde mediano', 'Sieralta', 3.00, 16),
(105, 'Pepino x 1 Und.', 'FRUTAS Y VERDURAS', '1686979761_pepino.jpg', 'Pepino americano mediano', 'Sierralta', 1.00, 8),
(106, 'Limón x Kg.', 'FRUTAS Y VERDURAS', '1686979761_limon.jpg', 'Limon cevichero grande', 'Sierralta', 4.50, 16),
(108, 'Palta Fuerte x Kg.', 'FRUTAS Y VERDURAS', '1686979761_palta_fuerte.jpg', 'Palta fuerte madura ', 'Sierralta', 8.00, 13),
(110, 'Lúcuma x Kg.', 'FRUTAS Y VERDURAS', '1686979761_lucuma.jpg', 'Lucuma seda dulce fresca', 'Pronasel', 8.00, 19),
(111, 'Pan francés x Kg', 'PANADERIA Y PASTELERIA', '1686979761_pan_frances.jpg', 'Pan frances grande recien horneados', 'Repaspan', 6.50, 16),
(112, 'Flan 150gr.', 'PANADERIA Y PASTELERIA', '1686979761_flan.jpg', 'Rebanada de flan de vainilla de 150 gramos', 'Repaspan', 5.00, 14),
(114, 'Alfajor x Und.', 'PANADERIA Y PASTELERIA', '1686979761_alfajor.jpg', 'Alfajores artesanales rellenos de manjar blanco', 'Repaspan', 2.50, 16),
(115, 'Pan de yema x Kg.', 'PANADERIA Y PASTELERIA', '1686979761_pan_de_yema.jpg', 'Pan de yema recien horneados con semillas de ajonjoli', 'Repaspan', 8.50, 12),
(116, 'Caramandunga x 12 Und.', 'PANADERIA Y PASTELERIA', '1686979761_caramandunga.jpg', 'Panes caramandunga frescos ', 'Repaspan', 12.50, 14),
(118, 'Torta Selva Negra porcion  150g', 'PANADERIA Y PASTELERIA', '1686979761_torta_selva_negra.jpg', 'Rebanada de torta selva negra clasica', 'Repaspan', 6.90, 16),
(119, 'Queque de vainilla porcion 150 gr.', 'PANADERIA Y PASTELERIA', '1686979761_queque_de_vainilla.jpg', 'Rebanada de queque de vainilla 150gramos', 'Repaspan', 3.50, 8),
(120, 'Mil hojas porcion 130gr.', 'PANADERIA Y PASTELERIA', '1686979761_mil_hojas.jpg', 'Porcion de mil hojas con relleno de manjar blanco 130 gramos', 'Repaspan', 6.20, 10),
(124, 'Gelatina Universal Fresa', 'PANADERIA Y PASTELERIA', '1686979761_gelatina_fresa_sobre.jpeg', 'Gelatina sabor a fresa para preparar sin azucar', 'Universal', 7.50, 12),
(126, 'Pan Caracol x Kg', 'PANADERIA Y PASTELERIA', '1686979761_pan_caracol.jpg', 'Pan caracol grande recien horneados', 'Repaspan', 6.90, 13),
(128, 'Crema volteada 600gr.', 'PANADERIA Y PASTELERIA', '1686979761_crema_volteada.jpg', 'Crema volteada envasado 600 gramos', 'La florencia', 16.50, 12),
(132, 'Café instantáneo bells 100gr.', 'BEBIDAS', '1686979761_cafeinstantaneo100g_bells.jpg', 'Cafe instantaneo 100 gramos', 'Bells', 2.50, 11),
(134, 'Cerveza corona 355ml.', 'BEBIDAS', '1686979761_cerveza355ml_corona.jpg', 'Cerveza corona personal 355ml', 'Corona', 6.00, 12),
(135, 'Sixpack cerveza pilsen 355ml.', 'BEBIDAS', '1686979761_cervezasixpack355ml_pilsen.jpg', 'Cerveza pilsen en lata Sixpack 355ml', 'Pilsen', 21.50, 12),
(137, 'Chicha morada Naturale 1Lt.', 'BEBIDAS', '1686979761_chichamorada1L_naturale.jpg', 'Chicha morada clasica 1Litro', 'Naturale', 4.00, 11),
(138, 'Emoliente Naturale 1Lt.', 'BEBIDAS', '1686979761_emoliente1L_naturale.jpg', 'Emoliente clasico en botella 1 litro', 'Naturale', 4.00, 10),
(139, 'Frugos Watts de pera 1Lt.', 'BEBIDAS', '1686979761_Frugos1L_WattsPera.jpg', 'Frugos Watts sabor pera 1 Litro', 'Watts', 5.00, 13),
(141, 'Gaseosa Incakola 500ml.', 'BEBIDAS', '1686979761_gaseosa500ml_incakola.jpg', 'Gaseosa Incakola sabor original en botella 500ml', 'Inca kola', 4.00, 10),
(143, 'Gaseosa incakola 355ml.', 'BEBIDAS', '1686979761_gaseosalata355ml_incakola.jpg', 'Gaseosa inca kola en lata 355ml', 'Inca kola', 3.50, 8),
(148, 'Gatorade mandarina 500ml.', 'BEBIDAS', '1686979761_gatorade500ml.jpg', 'Bebida energética gatorade sabor mandarina 500ml', 'Gatorade', 3.50, 11),
(150, 'Manzanilla CajaX20unds Bells', 'BEBIDAS', '1686979761_manzanilla20undx20gr_bells.jpg', 'Te de manzanilla filtrante 20 gramos 20 unidades', 'Bells', 4.50, 19),
(152, 'Muña Cajax20unds Sunka', 'BEBIDAS', '1686979761_muña20und_sunka.jpg', 'Té de muña 100% natural 20 unidades', 'Sunka', 5.50, 11),
(154, 'Pisco Quebranta 750ml', 'BEBIDAS', '1686979761_piscoquebranta750ml_queirolo.jpg', 'Pisco quebranta 45% alcohol 750 ml', 'Santiago Queirolo', 32.50, 16),
(155, 'Ron Cartavio Black 1Lt.', 'BEBIDAS', '1686979761_roncartavioblack1L.jpg', 'Ron peruano Cartavio black 1Lt', 'Cartavio', 25.00, 13),
(157, 'Té verde Cajax20unds Bells', 'BEBIDAS', '1686979761_teverde20und_bells.jpg', 'Te verde filtrante 24 gramos 20 unidades', 'Bells', 4.50, 16),
(160, 'Vino Torton 750ml.', 'BEBIDAS', '1686979761_vino750ml_torton.jpg', 'Vino tinto Malbec Privada botella 750ml', 'Malbec', 50.00, 16),
(161, 'Whisky Black Label 750ml', 'BEBIDAS', '1686979761_whiskyblacklabel750ml_walker.jpg', 'Whisky Johnnie Walker Black Label Botella 750ml', 'Johnnie Walker', 3.00, 12),
(164, 'Zuko limonada Mi tierra', 'BEBIDAS', '1686979761_zuko_limonada.jpg', 'Refresco Instantáneo Sabores de Mi Tierra Limonada Sobre 15 gramos', 'Zuko', 3.50, 17),
(166, 'Hilo Dental Colgate - 50 M', 'CUIDADO PERSONAL', '1686979761_colgate-hilo-dental-encerado.png', 'Hilo Dental Colgate Menta Paquete 50m', 'Colgate', 12.30, 18),
(168, 'Gel Antibacterial 1L', 'CUIDADO PERSONAL', '1686979761_Gel.png', 'Gel Antibacterial Instan clean Sin Fragancia Frasco 1L', 'Instan clean', 20.50, 19),
(170, 'Jabon Protex Pack x3', 'CUIDADO PERSONAL', '1686979761_Jabon.png', 'Pack x3 Jabón Antibacterial Nutri Protect Barra 110 gramos', 'Protex', 11.40, 12),
(172, 'Enjuague Bucal 500ml', 'CUIDADO PERSONAL', '1686979761_listerine-coolmint-500ml-front.png', 'Enjuague Bucal Menta 100% Frasco 500ml', 'Listerine', 18.00, 12),
(173, 'Gillette Prestobarba 4un', 'CUIDADO PERSONAL', '1686979761_Prestobarba-UltraGrip3-4-un.jpg', 'Máquina de Afeitar Prestobarba 3 Bodysense Paquete 4 unidades', 'Gillette', 21.50, 19),
(174, 'Shampoo Head y Shoulders', 'CUIDADO PERSONAL', '1686979761_Shampoo.png', 'Shampoo con cafeina anticaida 700 ml', 'Head & shoulders', 32.50, 17),
(177, 'Protector Labial - Fresa', 'CUIDADO PERSONAL', '1686979761_Protector labial.png', 'Protector Labial cereza Shine Nivea', 'Nivea', 15.00, 12),
(179, 'Toalla Higienica NOSOTRAS', 'CUIDADO PERSONAL', '1686979761_toallas-nosotras-nocturna-naturalx10.png', 'Toallas higienica nocturno 10 unidades', 'Nosotras', 14.70, 16),
(181, 'Cepillo Electronico ORAL-B', 'CUIDADO PERSONAL', '1686979761_Cepillo de dientes electronico.png', 'Cepillo de Dientes Eléctrico Oral-B Pro', 'Oral B', 50.00, 8),
(183, 'Espuma de Afeitar NIVEA', 'CUIDADO PERSONAL', '1686979761_Gel de afeitar.png', 'Espuma para Afeitar Nivea Men Sensitive - Frasco 200 ML', 'Nivea', 30.90, 7),
(185, 'Desodorante AXE', 'CUIDADO PERSONAL', '1686979761_Axe-Desodorante.png', 'Desodorante en Aerosol para Hombre AXE Dark Temptation Frasco 150ml', 'Axe', 12.50, 9),
(187, 'Ropa Desechable TENA', 'CUIDADO PERSONAL', '1686979761_Ropa-interior-desechable.png', 'Ropa Interior Desechable TENA Pants Ultra Plus Unisex Talla L 10 unidades', 'Tena ', 65.50, 6),
(188, 'Jabon Bolivar 190g', 'LIMPIEZA', '1686979761_jabon_bolivar_floral_210_gr-300x300.png', 'Jabón en Barra BOLÍVAR Floral Paquete 190g', 'Bolivar', 3.50, 19),
(191, 'Escoba VIRUTEX', 'LIMPIEZA', '1686979761_1400001 Escoba_Poderosa.png', 'Escoba VIRUTEX La Poderosa', 'Virutex', 15.90, 16),
(193, 'Quitamanchas VANISH', 'LIMPIEZA', '1686979761_3118263_vanish-oxi-action-multipower-potenciador-de-lavado-en-polvo-sin-cloro-_900-g_front.png', 'Quitamanchas en Polvo VANISH Gold Pote 900g', 'Vanish', 50.00, 15),
(195, 'Lavavajilla AYUDIN', 'LIMPIEZA', '1686979761_ayudin_sabila_limon_750_gr-300x300.png', 'Lavavajillas en Pasta Ayudin Lima y Limón 750g', 'Ayudin', 8.20, 17),
(196, 'Detergente BOLIVAR', 'LIMPIEZA', '1686979761_BOLIVAR.png', 'Detergente en Polvo BOLÍVAR Active Care Bolsa 4.2Kg', 'Bolivar', 60.30, 17),
(197, 'Papel Toalla NOVA', 'LIMPIEZA', '1686979761_nova megarollo.png', 'Papel Toalla Clásico Mega Rollo 1un', 'Nova', 11.00, 4),
(201, 'LimpiaVidrios SAPOLIO', 'LIMPIEZA', '1686979761_vidrios-sapolio-650ml-gatillo3622_ccexpress.png', 'Limpia Vidrios Lavanda Gatillo 650ml', 'Sapolio', 10.00, 10),
(202, 'LimpiaVidrios MRMUSCULO', 'LIMPIEZA', '1686979761_mrmusculos.png', 'Limpia Vidrios Lavanda Gatillo 500ml', 'Mr musculo', 7.10, 13),
(203, 'Cera Liquida SAPOLIO', 'LIMPIEZA', '1686979761_Cera Liquida.png', 'Cera líquida autobrillante Amarilla Doypack 300Ml', 'Sapolio', 5.50, 17),
(204, 'Papel Toalla PARACAS', 'LIMPIEZA', '1686979761_Paracas.png', 'Papel higienico Premium x 40 mt – Doble Hoja', 'Paracas', 10.00, 18),
(206, 'Ambientador SAPOLIO', 'LIMPIEZA', '1686979761_sapolio-ambientador-6-en-1-antitabaco-copia3533.png', 'Ambientador en spray sapolio MelonFrasco 396Ml', 'Sapolio', 6.50, 12),
(207, 'Insecticida RAID', 'LIMPIEZA', '1686979761_Raid-DobleAccion-360.png', 'Insecticida Raid Doble Acción Frasco 400ml', 'Raid', 13.00, 9),
(234, 'Pescado Bonito', 'CARNES, AVES Y PESCADOS', '1689014046_pescado_bonito.png', 'Pescado Bonito Entero Fresco - Precio por Kg.', 'Frescura Calidad', 5.49, 13);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo`, `password`) VALUES
(1, 'Alvaro', 'Fernandez', 'Zuloeta', 'afernandez@gmail.com', 'afernandez'),
(2, 'Miguel', 'Fernandez', 'Zuloeta', 'mzuloeta@gmail.com', 'mzuloeta'),
(3, 'Jose', 'Zapata', 'Muñoz', 'jzapata@gmail.com', 'pepe1234'),
(4, 'Admin', 'adminP', 'adminM', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boletas`
--
ALTER TABLE `boletas`
  ADD PRIMARY KEY (`id_boleta`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boletas`
--
ALTER TABLE `boletas`
  MODIFY `id_boleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
