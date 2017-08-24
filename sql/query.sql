

-- colegio


CREATE  table alumno
(
id  int auto_increment primary key,
nombres varchar(100),
apellidos varchar(100),
fecha_creacion timestamp default current_timestamp

)engine=innodb;



INSERT INTO alumno(nombres,apellidos)VALUES('OMAR','PEREZ');

SELECT * FROM alumno;

