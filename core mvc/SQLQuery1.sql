CREATE TABLE categoria (
idcategoria INTEGER PRIMARY KEY IDENTITY,
nombre VARCHAR(50) NOT NULL UNIQUE,
descripcion VARCHAR(256) NULL,
condicion BIT DEFAULT(1)
);


INSERT INTO categoria (nombre, descripcion) VALUES ('item1','');


SELECT * FROM categoria;

CREATE TABLE articulo (
idarticulo INTEGER PRIMARY KEY IDENTITY,
idcategoria INTEGER NOT NULL,
codigo VARCHAR(50) NULL,
nombre VARCHAR(100) NOT NULL UNIQUE,
precio_venta DECIMAL(11,2) NOT NULL,
stock INTEGER NOT NULL,
descripcion VARCHAR(256) NULL,
condicion BIT DEFAULT(1),
FOREIGN KEY (idcategoria) REFERENCES categoria(idcategoria)
);



CREATE TABLE persona (
idpersona INTEGER PRIMARY KEY IDENTITY,
tipo_persona VARCHAR(20) NOT NULL,
nombre VARCHAR(100) NOT NULL,
tipo_documento VARCHAR(20) NULL,
num_documento VARCHAR(20) NULL,
dirreccion VARCHAR(70) NULL,
telefono VARCHAR(20) NULL,
email VARCHAR(50) NULL
);

CREATE TABLE rol(
idrol INTEGER PRIMARY KEY IDENTITY,
nombre VARCHAR(30) NOT NULL,
descripcion VARCHAR(100) NULL,
condicion BIT DEFAULT(1)
);



CREATE TABLE usuario(
idusuario INTEGER PRIMARY KEY IDENTITY,
idrol INTEGER NOT NULL,
nombre VARCHAR(100) NOT NULL,
tipo_documento VARCHAR(20) NULL,
num_documento VARCHAR(20) NULL,
direccion VARCHAR(70) NULL,
telefono VARCHAR(20) NULL,
email VARCHAR(50) NOT NULL,
password_hast VARBINARY NOT NULL,
password_salt  VARBINARY NOT NULL,
condicion BIT DEFAULT(1),
FOREIGn KEY (idrol) REFERENCES rol(idrol)
);



CREATE TABLE ingreso (
idingreso INTEGER PRIMARY KEY IDENTITY,
idproveedor INTEGER NOT NULL,
idusuario INTEGER NOT NULL,
tipo_comprobante VARCHAR(20)NOT NULL,
serie_comprobante VARCHAR(7) NULL,
num_comprobante VARCHAR(10) NOT NULL,
fecha_hora DATETIME NOT NULL,
impuesto DECIMAL (4,2) NOT NULL,
total DECIMAL (11,2) NOT NULL,
estado VARCHAR(20) NOT NULL,
FOREIGN KEY (idproveedor) REFERENCES persona(idpersona),
FOREIGN KEY (idusuario) REFERENCES usuario(idusuario)
);



CREATE TABLE detalle_ingreso(
iddetalle_ingreso INTEGER PRIMARY KEY IDENTITY,
idingreso INTEGER NOT NULL,
idarticulo INTEGER NOT NULL,
cantidad INTEGER NOT NULL,
precio DECIMAL(11,2) NOT NULL,
FOREIGN KEY (idingreso) REFERENCES ingreso(idingreso) ON DELETE CASCADE,
FOREIGN KEY (idarticulo) REFERENCES articulo (idarticulo) 
);

CREATE TABLE venta(
idventa INTEGER PRIMARY KEY IDENTITY,
idcliente INTEGER NOT NULL,
idusuario INTEGER NOT NULL,
tipo_comprobante VARCHAR(20) NOT NULL,
serie_comprobante VARCHAR(7) NULL,
num_comprobante VARCHAR(10) NOT NULL,
fecha_hora DATETIME NOT NULL,
impuesto DECIMAL(4,2) NOT NULL,
estado VARCHAR(20) NOT NULL,
FOREIGN KEY(idcliente) REFERENCES persona(idpersona),
FOREIGN KEY(idusuario) REFERENCES usuario(idusuario)

);



CREATE TABLE detalle_venta(
iddetalle_venta INTEGER PRIMARY KEY IDENTITY,
idventa INTEGER NOT NULL,
idarticulo INTEGER NOT NULL,
cantidad INTEGER NOT NULL,
precio DECIMAL(11,2) NOT NULL,
descuento DECIMAL(11,2) NOT NULL,
FOREIGN KEY(idventa) REFERENCES venta (idventa) ON DELETE CASCADE,
FOREIGN KEY(idarticulo) REFERENCES articulo(idarticulo)
);