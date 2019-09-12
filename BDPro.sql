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
Puesto ENUM ('Gerente','Secretaria','Producción', 'Finanzas', 'Logistica'),
Estatus BIT
)AUTO_INCREMENT=100000;

INSERT INTO Empleado VALUES (DEFAULT,'Maria','Guzman','Lopez','12JKJKDS','maria@gmail.com','Secretaria',1);
INSERT INTO Empleado VALUES (DEFAULT,'Juan','Hernandez','Torres','13kjkldsj','juan@gmail.com','Gerente',1);
INSERT INTO Empleado VALUES (DEFAULT,'Jose','Dominguez','Calderon','12uroeuie','Jose@gmail.com','Producción',1);
INSERT INTO Empleado VALUES (DEFAULT,'Guadalupe','Estrada','Gonzalez','3dsfsdf','Lupita@gmail.com','Secretaria',1);
INSERT INTO Empleado VALUES (DEFAULT,'Jennifer','Gutierrez','Constantino','434sdfdf','Jenny@gmail.com','Finanzas',1);
INSERT INTO Empleado VALUES (DEFAULT,'Rosario','Gaytan','Segura','rwrewrs','ros@gmail.com','Gerente',1);
INSERT INTO Empleado VALUES (DEFAULT,'Jesus','Contreras','Gaytan','1werdsf','jesus@gmail.com','Logistica',1);

SELECT * FROM Empleado;

CREATE TABLE Usuario(
Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Id_empleado INT NOT NULL,
User_name VARCHAR (50) NOT NULL,
pass VARCHAR (50) NOT NULL,
Permiso ENUM ('Dios','Semidios', 'Mortal'),
Estatus BIT,
INDEX (Id_empleado),
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id)
)AUTO_INCREMENT=300000;

INSERT INTO Usuario VALUES (DEFAULT, 100000,'Maria_3', 'daddsade','Semidios',1);
INSERT INTO Usuario VALUES (DEFAULT, 100001,'Juan_H', 'reterf','Dios',1);
INSERT INTO Usuario VALUES (DEFAULT, 100002,'Jose1', 'dfsdkl','Mortal',1);
INSERT INTO Usuario VALUES (DEFAULT, 100003,'Lupita_E', 'rwerwe','Semidios',1);
INSERT INTO Usuario VALUES (DEFAULT, 100004,'Jenny_4', 'w3423lk','Semidios',1);
INSERT INTO Usuario VALUES (DEFAULT, 100005,'Ross_G', '34klkjkl','Dios',1);
INSERT INTO Usuario VALUES (DEFAULT, 100006,'Jesus_C', 'kjk323','Semidios',1);

SELECT * FROM Usuario;

CREATE TABLE Registro(
Id_empleado INT NOT NULL,
Hora_entrada DATETIME NOT NULL,
Hora_salida DATETIME,
Activo BIT NOT NULL,
Estatus BIT,
INDEX (Id_empleado),
FOREIGN KEY (Id_empleado) REFERENCES Empleado(Id)
);

INSERT INTO Registro VALUES(100000, '2019-11-24 17:15:10', '2013-11-24 17:20:10',1,1);
INSERT INTO Registro VALUES(100001, '2019-11-24 17:15:10', '2013-11-24 17:20:10',1,1);
INSERT INTO Registro VALUES(100002, '2019-11-24 17:15:10', '2013-11-24 17:20:10',1,1);
INSERT INTO Registro VALUES(100003, '2019-11-24 17:15:10', '2013-11-24 17:20:10',1,1);
INSERT INTO Registro VALUES(100004, '2019-11-24 17:15:10', '2013-11-24 17:20:10',1,1);
INSERT INTO Registro VALUES(100005, '2019-11-24 17:15:10', '2013-11-24 17:20:10',1,1);
INSERT INTO Registro VALUES(100006, '2019-11-24 17:15:10', '2013-11-24 17:20:10',1,1);

SELECT * FROM Registro;
