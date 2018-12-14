CREATE TABLE categoria (
idcategoria INTEGER PRIMARY KEY IDENTITY,
nombre VARCHAR(50) NOT NULL UNIQUE,
descripcion VARCHAR(256) NULL,
condicion BIT DEFAULT(1)
);


INSERT INTO categoria (nombre, descripcion) VALUES ('item1','');


