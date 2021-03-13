CREATE DATABASE IF NOT EXISTS `TIENDA`;
USE TIENDA;

CREATE TABLE usuarios(
    id INT(255) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    rol ENUM('admin','user'),
    imagen BLOB,
    CONSTRAINT PK_usuarios PRIMARY KEY(id),
    CONSTRAINT UQ_usuarios UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE pedidos(
    id INT(255) NOT NULL AUTO_INCREMENT,
    usuario_id INT(255) NOT NULL,
    provincia VARCHAR(255) NOT NULL,
    localidad VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    coste FLOAT(200,2) NOT NULL,
    estado ENUM('0','1') COMMENT '0=pendiente,1=entregado',
    fecha DATE,
    hora TIME,
    CONSTRAINT PK_pedidos PRIMARY KEY(id),
    CONSTRAINT FK_pedidos_usuarios FOREIGN KEY(usuario_id) REFERENCES usuario(id)
)ENGINE=InnoDB;

CREATE TABLE categorias(
    id INT(255) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    CONSTRAINT PK_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE productos(
    id INT(255) NOT NULL AUTO_INCREMENT,
    categoria_id INT(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio FLOAT(100,2) NOT NULL,
    fecha DATE,
    imagen BLOB,
    CONSTRAINT PK_productos PRIMARY KEY(id),
    CONSTRAINT FK_productos_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;

CREATE TABLE lineas_pedidos(
    id INT(255) NOT NULL AUTO_INCREMENT,
    pedido_id INT(255) NOT NULL,
    producto_id INT(255) NOT NULL,
    unidades SMALLINT NOT NULL,
    CONSTRAINT PK_lineasPedidos PRIMARY KEY(id),
    CONSTRAINT FK_lineasPedidos_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
    CONSTRAINT FK_lineasPedidos_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDB;

/*insertar en la tabla usuarios*/

INSERT INTO usuarios VALUES(NULL,'admin','admin','admin@gmail.com','contraseña','admin',NULL);

/*insertar en la tabla pedidos*/

/*insertar en la tabla categorias*/
    INSERT INTO categorias (nombre) VALUES
        ('manga corta'),
        ('manga larga'),
        ('sudaderas'),
        ('tirantes');
/*insertar en la tabla productos*/

/*insertar en la tabla lineas_pedidos*/