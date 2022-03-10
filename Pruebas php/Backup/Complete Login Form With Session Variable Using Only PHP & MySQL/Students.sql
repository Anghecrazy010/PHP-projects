create database pruebas; 
use pruebas;

create table Students
(
Id_Alumno int  primary key not null,
 Nombre varchar (25),
 Apellido Varchar (25),
 Edad int,
 Direccion_Residencia varchar (50)
 );
 create table registro
 (
 id_user int primary key auto_increment not null,
 Nombre_u varchar(25) not null,
 Correo_E varchar(80) not null, 
 password varchar(100) NOT NULL
 );
 
 
INSERT INTO `registro` (`id_user`, `Nombre_u`, `Correo_E`, `password`) VALUES
(8, 'Angel', 'anghecrazy06@gmail.com', '12345');

INSERT INTO `registro` ( `Nombre_u`, `Correo_E`, `password`) VALUES
('uadeo', 'uadeo@gmail.com', 'uadeo');
select*from registro;

select*from registro where Correo_E = 'anghecrazy06@gmail.com' and password = '12345';
