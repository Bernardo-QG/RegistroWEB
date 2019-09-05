DROP DATABASE IF EXISTS ProyectoCN;
CREATE DATABASE ProyectoCN;
USE ProyectoCN;

CREATE TABLE Empleado(
Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Nombre VARCHAR (50) NOT NULL,
Apellido_paterno VARCHAR (50) NOT NULL,
Apellido_materno VARCHAR (50),
Curp VARCHAR (18),
Correo VARCHAR (30),
Puesto ENUM ('Generente','Secretaria','Producción', 'Finanzas', 'Logistica'),
Estatus BIT
)AUTO_INCREMENT=100000;

CREATE TABLE Usuario(
Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Id_empleado INT NOT NULL,
User_name VARCHAR (50) NOT NULL,
pass VARCHAR (50) NOT NULL,
Estatus ENUM ('Dios','Semidios', 'Mortal'),
INDEX (Id_empleado),
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id)
)AUTO_INCREMENT=300000;

CREATE TABLE Registro(
Id_empleado INT NOT NULL,
Hora_entrada DATETIME NOT NULL,
Hora_salida DATETIME,
Activo BIT NOT NULL,
Estatus BIT,
INDEX (Id_empleado),
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id)
);
