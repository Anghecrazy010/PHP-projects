CREATE TABLE usuarios (
clave INT,
correo CHAR(250),
nombre CHAR(250),
pswd CHAR(50),
direccion TEXT,
estado INT
);

CREATE TABLE estados (
clave INT,
descripcion CHAR(100)
);



INSERT INTO estados (clave, descripcion) VALUES('1', 'Ciudad de México');
INSERT INTO estados (clave, descripcion) VALUES('2', 'Aguascalientes');
INSERT INTO estados (clave, descripcion) VALUES('3', 'Baja California');
INSERT INTO estados (clave, descripcion) VALUES('4', 'Baja California Sur');
INSERT INTO estados (clave, descripcion) VALUES('5', 'Campeche');
INSERT INTO estados (clave, descripcion) VALUES('6', 'Chiapas');
INSERT INTO estados (clave, descripcion) VALUES('7', 'Chihuahua');
INSERT INTO estados (clave, descripcion) VALUES('8', 'Coahuila de Zaragoza');
INSERT INTO estados (clave, descripcion) VALUES('9', 'Colima');
INSERT INTO estados (clave, descripcion) VALUES('10', 'Durango');
INSERT INTO estados (clave, descripcion) VALUES('11', 'Guanajuato');
INSERT INTO estados (clave, descripcion) VALUES('12', 'Guerrero');
INSERT INTO estados (clave, descripcion) VALUES('13', 'Hidalgo');
INSERT INTO estados (clave, descripcion) VALUES('14', 'Jalisco');
INSERT INTO estados (clave, descripcion) VALUES('15', 'México');
INSERT INTO estados (clave, descripcion) VALUES('16', 'Michoacán de Ocampo');
INSERT INTO estados (clave, descripcion) VALUES('17', 'Morelos');
INSERT INTO estados (clave, descripcion) VALUES('18', 'Nayarit');
INSERT INTO estados (clave, descripcion) VALUES('19', 'Nuevo León');
INSERT INTO estados (clave, descripcion) VALUES('20', 'Oaxaca');
INSERT INTO estados (clave, descripcion) VALUES('21', 'Puebla');
INSERT INTO estados (clave, descripcion) VALUES('22', 'Querétaro Arteaga');
INSERT INTO estados (clave, descripcion) VALUES('23', 'Quintana Roo');
INSERT INTO estados (clave, descripcion) VALUES('24', 'San Luis Potosí');
INSERT INTO estados (clave, descripcion) VALUES('25', 'Sinaloa');
INSERT INTO estados (clave, descripcion) VALUES('26', 'Sonora');
INSERT INTO estados (clave, descripcion) VALUES('27', 'Tabasco');
INSERT INTO estados (clave, descripcion) VALUES('28', 'Tamaulipas');
INSERT INTO estados (clave, descripcion) VALUES('29', 'Tlaxcala');
INSERT INTO estados (clave, descripcion) VALUES('30', 'Veracruz');
INSERT INTO estados (clave, descripcion) VALUES('31', 'Yucatán');
INSERT INTO estados (clave, descripcion) VALUES('32', 'Zacatecas');



