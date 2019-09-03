CREATE DATABASE ProyectoCN;
USE ProyectoCN;

CREATE TABLE Empleado(
Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Nombre VARCHAR (59),
Apellido_paterno VARCHAR (50),
Apellido_materno VARCHAR (50),
Crup VARCHAR (50),
Estatus BIT,
Puesto ENUM ('Genernte','Secretaria','Producción', 'Finanzas', 'Logistica')
);

CREATE TABLE Usuario(
Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Id_empleado INT NOT NULL,
User_name VARCHAR (50),
pass VARCHAR (40),
Estatus ENUM ('Dios','Semidios', 'Mortal'),
INDEX (Id_empleado),
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id)
);

CREATE TABLE Registro(
Id_empleado INT NOT NULL,
INDEX (Id_empleado),
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id),
Hora_entrada DATETIME,
Hora_salida DATETIME,
Estatus BIT
);
