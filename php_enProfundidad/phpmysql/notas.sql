CREATE DATABASE phpmysql ;
USE phpmysql;

CREATE TABLE notas(
    id INT (255) AUTO_INCREMENT,
    titulo VARCHAR (255),
    descripcion MEDIUMINT,
    color VARCHAR (255),
    CONSTRAINT pk_notas PRIMARY KEY (id)
)CHARSET=utf8;