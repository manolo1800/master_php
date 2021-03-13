CREATE DATABASE MVC;
USE MVC;

CREATE TABLE usuarios(
    id_usuario int(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    apellido VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    `password` VARCHAR(20) NOT NULL,
    fecha DATE,
    CONSTRAINT PK_usuarios PRIMARY KEY(id_usuario) 
)ENGINE=InnoDB;


CREATE TABLE notas(
    id_nota int(11) NOT NULL AUTO_INCREMENT,
    id_usuario int(11) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    contenido MEDIUMTEXT,
    fecha DATE,
    CONSTRAINT PK_notas PRIMARY KEY(id_nota),
    CONSTRAINT FK_nota_usuario FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario)
)ENGINE=InnoDB; 