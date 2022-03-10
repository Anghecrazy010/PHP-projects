
use d17906953_cloud_c;
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
 