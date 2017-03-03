-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2017 a las 15:26:07
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dreyca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contactos` int(11) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `nota` text NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contactos`, `telefono`, `horario`, `direccion`, `email`, `img`, `nota`, `facebook`, `instagram`, `twitter`) VALUES
(1, '0244-4174205', 'Lunes-Viernes: 08:00am - 06:00pm\r<br>S&aacute;bado: Cerrado\r<br>Domingo: Cerrado', 'C.C La Estancia, Calle Andr&eacute;s Bello Sur, La Victoria, Aragua', 'ploteodreyca@gmail.com', 'http://3.bp.blogspot.com/-ONGVKv3cgfQ/WDtXWZoEuGI/AAAAAAAAAL8/VuKuF4r27a06_tCtn8NR3m_JSW1d1RJLQCK4B/s1600/local1-compressor.jpg', 'Todos los archivos que sean sometidos a cambios dentro de este negocio, tendr&aacute;n un incremento en su costo de un %, recuerda revisar antes de su impresi&oacute;n ya que no nos hacemos responsables por errores o defectos de dise&ntilde;o.', 'https://www.facebook.com/ploteodreyca/', 'https://www.instagram.com/dreyca.c.a', 'https://twitter.com/Dreyca_ca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `remember_token`) VALUES
(9, 'dreyca', '$2y$10$Jv1RynMuRpL5bCIUWXDbvOUWS0XnSzCA2pt5pMR2xs4EshY0nvtR2', '2016-11-25 15:11:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `id_titulo` varchar(50) NOT NULL,
  `nombre_serv` varchar(300) NOT NULL,
  `frase` varchar(100) NOT NULL,
  `frase2` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `img_fondo` varchar(200) NOT NULL,
  `img_portada` varchar(200) NOT NULL,
  `img_descripcion1` varchar(200) NOT NULL,
  `img_descripcion2` varchar(200) NOT NULL,
  `img_descripcion3` varchar(200) NOT NULL,
  `color` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `id_titulo`, `nombre_serv`, `frase`, `frase2`, `descripcion`, `img_fondo`, `img_portada`, `img_descripcion1`, `img_descripcion2`, `img_descripcion3`, `color`) VALUES
(1, 'gigantografia', 'Gigantografia', 'Publicidad de Exteriores', 'Afiches, Pendones, Avisos, Rotulaciones, Etiquetas, No Fumar y m&aacute;s.', 'La impresi&oacute;n digital gran formato (Gigantografia) ofrece multitud de aplicaciones sobre diversos sustratos, terminarlos con variedad de acabados y luego manipularlos como se desee o colocarlos sobre el soporte que se prefiera. De esta forma encontrar&aacute; productos tales como: Pendones, Vallas, Decoraci&oacute;n Vehicular, Murales, Gigantografia, Decoraci&oacute;n de espacios, Backing, avisos luminosos, Rompe Tr&aacute;ficos, entre otros.', 'https://3.bp.blogspot.com/-UZf2zH0ueas/WDpTV8KLyFI/AAAAAAAAALI/WQRJs_kBdY4ReG_6ovfGgj0KKvU1vIy5wCK4B/s1600/fondo.jpg', 'https://4.bp.blogspot.com/-8eA8zfTSIC4/WDpTVCcHA2I/AAAAAAAAALA/h8JCxEMYR88D2kRd7jf6qkq8-vRSPIykACK4B/s1600/Vistaportada.jpg', 'http://2.bp.blogspot.com/-z0q-luI4wCk/WEdpAy41G6I/AAAAAAAAAOQ/g-2XJhRYY0kDXn11ZWpyXWGRlGhW_kOIQCK4B/s1600/gigantografia3.jpg', 'http://2.bp.blogspot.com/-SQ4YtrKEpRE/WEdpA2kdiII/AAAAAAAAAOA/4PsH2Ld8MJMDq-U25RROjAuvt7BwoPniACK4B/s1600/gigantografia1.jpg', 'http://3.bp.blogspot.com/-IxTpFsV6FPk/WEdpA6su56I/AAAAAAAAAOI/ve7xmjqDIt88d0AzaYnzmkz1WJjHsaj8gCK4B/s1600/gigantografia2.jpg', '2196F3'),
(5, 'diseno-grafico', 'Dise&ntilde;o Gr&aacute;fico', 'Para darle forma a tu mensaje publicitario', 'Desarrollamos desde un logo que identifique su empresa o servicio hasta una campa&ntilde;a publicitaria.', 'Nuestra labor como dise&ntilde;adores gr&aacute;ficos es la de encontrar la soluci&oacute;n que mejor se ajuste a tus necesidades de comunicaci&oacute;n visual. Ya sea para un folleto promocional, o para dise&ntilde;ar toda la imagen corporativa de tu empresa o entidad, trabajamos con absoluta dedicaci&oacute;n y siempre buscando el dise&ntilde;o m&aacute;s profesional. No nos conformamos con dise&ntilde;os mediocres. Nos gusta cuidar los detalles, llegar al fondo hasta dar con la soluci&oacute;n m&aacute;s id&oacute;nea. Te asesoraremos y ayudaremos a encontrar la mejor soluci&oacute;n gr&aacute;fica desde el primer momento', 'https://2.bp.blogspot.com/-kYgamj7-_c8/WDNqjeMvpII/AAAAAAAAAKY/iOthxy8QNTg_tLX1pZB1U_wPnaCGPxelgCK4B/s1600/dise%25C3%25B1o_grafico_fondo.jpg', 'https://3.bp.blogspot.com/-lq9Wp60LVnQ/WDNm7ng_uKI/AAAAAAAAAKE/YFdOfRmQp6gIgDS4FTDJ7QU3xxL0gL8CgCK4B/s1600/dise%25C3%25B1o_grafico_portada.jpg', 'http://1.bp.blogspot.com/-4hORVGkC3xA/WEdkrbIy0AI/AAAAAAAAANo/oHuyTGjrXZc9bcGQryoWyYZZ8Q3cm-vBwCK4B/s1600/3se.jpg', 'http://3.bp.blogspot.com/-Hq-7uyJut0o/WEdkrka3JKI/AAAAAAAAAN4/6lzYFEtzboYbmihMg6_nLArccFL2fN4CwCK4B/s1600/2ser.jpg', 'http://4.bp.blogspot.com/-YRbSbPUBxqM/WEdkrsHcmCI/AAAAAAAAAN0/LXwfLTukIXU-qAuslu7gEn1Mda2ZaBpawCK4B/s1600/1ser.jpg', 'FFC107'),
(6, 'impresiones', 'Impresiones', 'En todo tipo de materiales y formas', 'Stiker, papel bond, Fotocopias, Plastificacion, Encuadrencacion y mucho mas', 'Es un proceso que consiste en la impresi&oacute;n directa de un archivo digital a papel. Este proceso es ideal para proyectos de Impresi&oacute;n de Bajo Volumen y tiempos de entrega sumamente cortos.\r<br>\r<br>Ofrecemos el servicio de impresi&oacute;n digital para todo tipo de material gr&aacute;fico y publicitario en diversos papeles y cartulinas de hasta 250 gramos (gramaje); sulfato solido Calibre 10 y 12; glasse hasta 300 gramos. (300 grs)', 'http://2.bp.blogspot.com/-zXOoB9FBsrw/WD4CybXQQXI/AAAAAAAAAM8/aVp2UcbslkYi35CuXC4NDOHgYSY25NEPQCK4B/s1600/impresiones_fondo.jpg', 'http://4.bp.blogspot.com/-28h3_F_fsQs/WD4Cw8WIUPI/AAAAAAAAAM0/Yu6VdZdBISwyK6gW21HSlshdCGGUgJA6wCK4B/s1600/impreisones_portada.jpg', 'http://2.bp.blogspot.com/-Hv3GKW5xV4c/WD4BVTmQzsI/AAAAAAAAAMc/xG11Exr_pn4wAfac1dZJXUTjmo4srFTEACK4B/s400/impresiones_descripcion.jpg', 'https://s11.postimg.org/dmfvwimf7/tarjetas_de_presentacion_fotoestudio_rada.jpg', 'https://s18.postimg.org/r6949cot5/tarjetas_de_presentacion_de_valens.jpg', 'F44336'),
(10, 'linea-de-ploteo', 'Linea de Ploteo', 'La mejor calidad al alcance de tus manos', 'Dreyca.CA te ofrece Ploteo de planos... lo imprimimos, lo cortamos y lo doblamos, solo para ti.!', 'Ofrecemos todo lo relacionado con el &aacute;rea de arquitectura y dise&ntilde;o, bien sea: Copias a escala, Impresi&oacute;n, Digitalizaci&oacute;n blanco y negro o a color, Ampliaciones, Reducciones, lo imprimimos, lo cortamos, lo doblamos y mucho m&aacute;s solo posible con nosotros!.\r<br>Nosotros le garantizamos un trabajo de alta calidad, elaborado con tecnolog&iacute;a de &uacute;ltima generaci&oacute;n, as&iacute; como tambi&eacute;n nos comprometemos a realizar un manejo pulcro y confidencial de sus documentos que dar&aacute;n como resultado una excelente presentaci&oacute;n de los mismos.	', 'http://tramites.gob.sv/media/Screen%20shot%202012-08-22%20at%2010.43.30%20AM_1.png', 'http://3.bp.blogspot.com/-3nxrby4ZgAY/WD9bKjWrNUI/AAAAAAAAANM/F95JGFxTJHIlMDCeL3FJfwvrvtzoETT7ACK4B/s1600/arquitectos.jpg', 'http://2.bp.blogspot.com/-47I6pT4wAzs/WFNMGU0_aGI/AAAAAAAAAOw/KHJs9yKeRagxnYSZImqLajNaPBa7kE0FwCK4B/s640/ploteo3.png', 'http://3.bp.blogspot.com/-Ay_gfJ2m5kQ/WFNMGHAVtVI/AAAAAAAAAOo/vi1LTbqXBZUpFd0-gba5814YoYZoLKrqACK4B/s640/ploteo1.png', 'http://3.bp.blogspot.com/-pv36Jy078Q4/WFNMFp775BI/AAAAAAAAAOg/uJyhAuolF3wQJM7XYkj_goGJbaWwOh-LACK4B/s640/ploteo2.png', 'FF5722');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serv_rela`
--

CREATE TABLE `serv_rela` (
  `id_serv_rela` int(11) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serv_rela`
--

INSERT INTO `serv_rela` (`id_serv_rela`, `servicio`, `titulo`, `descripcion`) VALUES
(342, 'diseno-grafico', 'D&iacute;ptico', 'Dise&ntilde;amos d&iacute;pticos elegantes, modernos, minimalistas, &uacute;nicos, cl&aacute;sicos, a todo color, en blanco y negro y ma&acute;s.'),
(341, 'diseno-grafico', 'Revistas', 'En general todo tipo de pieza de dise&ntilde;o editorial.nos apasiona transmitir un mensaje poderoso de la manera m&aacute;s impactante.'),
(340, 'diseno-grafico', 'Afiche o Volante', 'Si Usted desea dar a conocer los productos, servicios o eventos de su empresa, un flayer puede ser la soluci&oacute;n m&aacute;s acertada.'),
(339, 'diseno-grafico', 'Tarjeta de Presentaci&oacute;n', 'No deje la primera percepci&oacute;n de sus clientes potenciales al azar. Una tarjeta de presentaci&oacute;n adecuada puede convertirse en una oportunidad de negocios.'),
(337, 'diseno-grafico', 'Logotipo', 'Su logotipo es la pieza visual que se encarga de transmitir la personalidad y esencia de su empresa. Es la puerta de entrada para una infinidad de relaciones comerciales y corporativas.'),
(336, 'gigantografia', 'Viniles Decorativos', 'Este producto es ideal para decorar un ambiente espec&iacute;fico, seg&uacute;n el gusto del cliente.  '),
(335, 'gigantografia', 'Avisos Legales', 'Le ofrecemos productos como avisos de seguridad, se&ntilde;alizaciones, de informaci&oacute;n entre otros. En su mayor&iacute;a impresos en vinil, banner y bond. Algunos de los avisos de seguridad son obligatorios en los establecimientos.  '),
(331, 'gigantografia', 'Lista de Precios', 'Las listas de precios, son ideales para colocar en alg&uacute;n espacio visible al p&uacute;blico los productos que ofrece y sus respectivos precios, cumpliendo adem&aacute;s con la norma de precios justos en Venezuela.  '),
(334, 'gigantografia', 'Etiquetas Rotuladas', 'Este producto en caso de ser impreso en plotter se imprime en vinil, puede llevar full color en fondo blanco o transparente, tambi&eacute;n puede ser fondo de un color especifico y simplemente rotular. Seg&uacute;n la necesidad del cliente se define el tama&ntilde;o, material, forma, etc.  '),
(333, 'gigantografia', 'Pendones', 'Los pendones son un medio publicitario ideal para promocionar un producto, servicio o empresa. Puede usarlo con la intensi&oacute;n de llamar la atenci&oacute;n del transe&uacute;nte, son usados tambi&eacute;n para ubicarlo en la entrada de locales, eventos entre otros.  '),
(332, 'gigantografia', 'Impresion de Banner', 'El Banner es ideal para mostradores, mesas y todo espacio reducido donde su posible cliente vea de cerca sus promociones y/o informaci&oacute;n.  '),
(338, 'diseno-grafico', 'Empaque de Producto', 'El dise&ntilde;o para empaques es una de las fases fundamentales del mercadeo de productos y en esta fase, el dise&ntilde;o del empaque es crucial'),
(354, 'impresiones', 'Impresi&oacute;n en Opalina', 'cartulina de una sola capa producida con materia primas de calidad, tiene excelente uniformidad al trasluz, tiene alta blancura y superficie de atractivo satinado. Se usa para tarjetas de presentaci&oacute;n y felicitaci&oacute;n.'),
(352, 'impresiones', 'Impresiones en gran formato', 'Las impresiones en gran formato en Venezuela, se han vuelto un m&eacute;todo publicitario muy popular.\r\nEn el mundo de las impresiones a gran escala tenemos un sin fin de materiales, con los cuales nos topamos d&iacute;a a d&iacute;a desde que salimos de la casa hasta el retorno.'),
(349, 'impresiones', 'Impresi&oacute;n  Autoadhesivo', 'es un papel estucado (texurizado) por una cara, con pegamento autoadhesivo por la otra y cubierto con otro papel fino para evitar su derrame. Se utiliza en la elaboraci&oacute;n de calcoman&iacute;as, etiquetas, etc'),
(350, 'impresiones', 'Impresi&oacute;n L&aacute;ser ', 'Impresi&oacute;n de peque&ntilde;o formato, desde hoja carta hasta tabloide (doble carta), es una excelente opci&oacute;n por su productividad y rapidez, ideal para cat&aacute;logos, revistas, d&iacute;pticos, tr&iacute;pticos.'),
(351, 'impresiones', 'Encuadernacion', 'Solo DREYCA.CA te ofrece el mejor servicio de encuadernado...\r\ncomo lo busques! en anillo o espiral, y con viniles de diferentes colores'),
(393, 'linea-de-ploteo', 'Vinil y Vinil de corte', 'Ideal para campa&ntilde;as pol&iacute;ticas y de publicidad de ayuntamientos, para instalarse en veh&iacute;culos y transporte p&uacute;blico.'),
(394, 'linea-de-ploteo', 'Papel Bond', '.'),
(395, 'linea-de-ploteo', 'Banner', 'En BANNER de calidad y optima resistencia nuestras impresiones son de &oacute;ptima calidad impresiones en tiempo record FULL COLOR'),
(353, 'impresiones', 'Impresi&oacute;n glasse', 'Es utilizado en la imprenta venezolana como base para realizar impresiones de volantes, afiches, carpetas, revistas y m&aacute;s. Este material lo podemos encontrar en varios gramajes (grosor), que van desde 115 grs hasta 350grs.'),
(396, 'linea-de-ploteo', 'Papel Recubierto', 'Impresi&oacute;n en papel recubierto 250gr, Full color \r\nexcelente Calidad, Mejores Precios, en Dreyca.CA pensamos en ti...'),
(392, 'linea-de-ploteo', 'Lona', 'Ideal para campa&ntilde;as lonas chicas, medianas y pendones'),
(391, 'linea-de-ploteo', 'Planos', 'El ploteo de planos es una herramienta muy eficaz al momento de imprimir tus planos y ponemos a tu disposici&oacute;n la mejor calidad al menor tiempo. Hacemos refilado y doblado, respetamos plumillas seg&uacute;n criterio al cliente.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contactos`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `serv_rela`
--
ALTER TABLE `serv_rela`
  ADD PRIMARY KEY (`id_serv_rela`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contactos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `serv_rela`
--
ALTER TABLE `serv_rela`
  MODIFY `id_serv_rela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
