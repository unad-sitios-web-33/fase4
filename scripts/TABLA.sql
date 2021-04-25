CREATE TABLE `bdunad33`.`tabla33` (
  `product_code` varchar(10) NOT NULL PRIMARY KEY COMMENT 'Codigo del producto',
  `product_name` varchar(255) NOT NULL COMMENT 'Nombre del producto',
  `product_brand` varchar(255) NOT NULL COMMENT 'Marca del producto',
  `product_price` decimal(10,2) NOT NULL COMMENT 'Precio del producto',
  `product_quantity` int(11) NOT NULL COMMENT 'Cantidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de productos';