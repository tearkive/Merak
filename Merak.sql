CREATE DATABASE Merak;

USE Merak;

CREATE TABLE Usuarios(
	idUsuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Nombre VARCHAR(30) NOT NULL,
    Apellidos VARCHAR(50) NOT NULL,
    Fecha_Nacimiento DATE NOT NULL,
    Tel BIGINT NOT NULL,
    Correo VARCHAR(50) NOT NULL,
    Contraseña VARCHAR(80) NOT NULL
);
CREATE TABLE Administradores(
	idAdministrador INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idUsuario INT NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
);
CREATE TABLE Profesionales(
	idProfesional INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idUsuario INT NOT NULL,
    Cedula LONGBLOB NOT NULL,
    Fecha_Inicio DATE NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
);
CREATE TABLE Pacientes(
	idPaciente INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idUsuario INT NOT NULL,
    Frecuencia VARCHAR(20) NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
);
CREATE TABLE Citas(
	idCita INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idUsuario INT NOT NULL,
    Fecha DATE NOT NULL,
    Hora TIME NOT NULL,
    Estado VARCHAR(20) NOT NULL,
    Editable BOOLEAN NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
);
CREATE TABLE Testimonios(
	idTestimonio INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idUsuario INT NOT NULL,
    Calificacion DOUBLE NOT NULL,
    Comentario VARCHAR(255) NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
);
CREATE TABLE Sellos(
	idSello INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idCita INT NOT NULL,
    Fecha DATE NOT NULL,
    FOREIGN KEY (idCita) REFERENCES Citas(idCita)
);
CREATE TABLE Beneficios(
	idBeneficio INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Descripcion VARCHAR(255) NOT NULL
);
CREATE TABLE Recompensas(
	idRecompensa INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idUsuario INT NOT NULL,
    idBeneficio INT NOT NULL,
    Estado VARCHAR(20) NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario),
    FOREIGN KEY (idBeneficio) REFERENCES Beneficios(idBeneficio)
);
USE Merak;

CREATE PROCEDURE usuarioExiste(Corr VARCHAR(50))
	SELECT * FROM Usuarios WHERE Correo = Corr;
CREATE PROCEDURE agregarUsuario(nom VARCHAR(30), ape VARCHAR(50), fech DATE, te BIGINT, Corr VARCHAR(50), Pass VARCHAR(80))
	INSERT INTO Usuarios(Nombre, Apellidos, Fecha_Nacimiento, Tel, Correo, Contraseña) VALUES(nom, ape, fech, te, Corr, Pass);
CREATE PROCEDURE obtenerInfoUlt()
	SELECT idUsuario, Nombre, Apellidos, Fecha_Nacimiento, Tel, Correo FROM Usuarios ORDER BY idUsuario DESC LIMIT 1;
CREATE PROCEDURE obtenerUsuario(Corr VARCHAR(50), pass VARCHAR(80))
	SELECT idUsuario, Nombre, Apellidos, Fecha_Nacimiento, Tel, Correo FROM Usuarios WHERE Correo = Corr AND Contraseña = pass;
CREATE PROCEDURE setUsuario(idU INT)
	SELECT idUsuario, Nombre, Apellidos, Fecha_Nacimiento, Tel, Correo FROM Usuarios WHERE idUsuario = idU;
CREATE PROCEDURE usuarioProfesional(idU INT)
	SELECT idProfesional FROM Profesionales Where idUsuario = idU;
CREATE PROCEDURE usuarioAdministrador(idU INT)
	SELECT idAdministrador FROM Administradores Where idUsuario = idU;
CREATE PROCEDURE actualizarUsuario(idUsu INT, nom VARCHAR(30), ape VARCHAR(50), fech DATE, te BIGINT, Corr VARCHAR(50))
	UPDATE usuarios SET Nombre = nom, Apellidos = ape, Fecha_Nacimiento = fech, Tel = te, Correo = Corr WHERE idUsuario = idUsu;
CREATE PROCEDURE actualizarPass(Corr VARCHAR(50),pass VARCHAR(80))
	UPDATE usuarios SET Contraseña = pass WHERE Correo = Corr;
    
CREATE PROCEDURE verCitaPF(fech DATE)
	SELECT * FROM citas WHERE Fecha = fech AND Estado != "Cancelada";
CREATE PROCEDURE insertarCita(idU INT, fech DATE, hor TIME, est VARCHAR(20), edit BOOLEAN)
	INSERT INTO Citas(idUsuario, Fecha, Hora, Estado, Editable) VALUES(idU, fech, hor, est, edit);
CREATE PROCEDURE verEditables(idUsu INT)
	SELECT idCita, CONCAT(Nombre," ",Apellidos) AS Nombre_Paciente, Fecha, Hora, Estado FROM citas JOIN usuarios ON usuarios.idUsuario = citas.idUsuario WHERE usuarios.idUsuario = idUsu AND editable = 1; 
CREATE PROCEDURE verCitaId(idC INT)
	SELECT Fecha, Hora FROM citas WHERE idCita = idC;
CREATE PROCEDURE actualizarCita(idC INT, idU INT, fech DATE, hor TIME, est VARCHAR(20), edit BOOLEAN)
	UPDATE citas SET idUsuario = idU, Fecha = fech, Hora = hor, Estado = est, Editable = edit WHERE idCita = idC;
CREATE PROCEDURE verCitasPUsuario(idU INT)
	SELECT idCita, citas.idUsuario, CONCAT(Nombre," ",Apellidos) AS Nombre_Paciente, Fecha, Hora, Estado, Editable FROM citas JOIN usuarios ON usuarios.idUsuario = citas.idUsuario WHERE usuarios.idUsuario = idU ORDER BY citas.Fecha DESC;  
CREATE PROCEDURE cancelarCita(idC INT, est VARCHAR(20), edit BOOLEAN)
	UPDATE citas SET Estado = est, Editable = edit WHERE idCita = idC;
CREATE PROCEDURE verTodasCitas()
    SELECT idCita, citas.idUsuario, CONCAT(Nombre," ",Apellidos) AS Nombre_Paciente, Fecha, Hora, Estado, Editable FROM citas JOIN usuarios ON usuarios.idUsuario = citas.idUsuario ORDER BY citas.idCita DESC;  
CREATE PROCEDURE actualizarEstado(idC INT, est VARCHAR(20))
	UPDATE citas SET Estado =  est, Editable = 0 WHERE idCita = idC;
CREATE PROCEDURE obtenerUsuPidCit(idC INT)
	SELECT idUsuario FROM citas WHERE idCita = idC;
    
CREATE PROCEDURE sellosUsu(idU INT)
	SELECT idSello, sellos.idCita, sellos.Fecha FROM sellos JOIN citas ON sellos.idCita = citas.idCita JOIN usuarios ON citas.idUsuario = usuarios.idUsuario WHERE usuarios.idUsuario = idU;
CREATE PROCEDURE agregarSellos(idC INT, fech DATE)
    INSERT INTO sellos(idCita, Fecha) VALUES (idC, fech);
CREATE PROCEDURE cantidadSellosByUsu(idU INT)
    SELECT COUNT(idSello) AS Cantidad_Sellos FROM sellos JOIN citas  ON sellos.idCita = citas.idCita WHERE citas.idUsuario = idU;
    
CREATE PROCEDURE verPacientes()
	SELECT usuarios.idUsuario, CONCAT(Nombre," ",Apellidos) AS Nombre_Paciente, Frecuencia FROM pacientes JOIN usuarios ON pacientes.idUsuario = usuarios.idUsuario ORDER BY Nombre_Paciente;
CREATE PROCEDURE agregarPaciente(idU INT, frec VARCHAR(20))
	INSERT INTO pacientes(idUsuario, Frecuencia) VALUES (idU, frec);
    
CREATE PROCEDURE agregarRecompensas(idU INT, idB INT)
	INSERT INTO recompensas(idUsuario, idBeneficio, Estado)  VALUES(idU, idB, "Vigente");
CREATE PROCEDURE verRecompensasPUsu(idU INT)
	SELECT beneficios.Descripcion, recompensas.Estado FROM recompensas JOIN beneficios ON recompensas.idBeneficio = beneficios.idBeneficio WHERE recompensas.idUsuario = idU;
    
CREATE PROCEDURE agregarProfesional(idU INT, ced LONGBLOB, fech DATE)
	INSERT INTO Profesionales(idUsuario, Cedula, Fecha_Inicio) VALUES (idU, ced, fech);
CREATE PROCEDURE verProfesionales()
	SELECT profesionales.idProfesional, profesionales.idUsuario, CONCAT(usuarios.Nombre," ",usuarios.Apellidos) AS Nombre_Profesional FROM profesionales INNER JOIN usuarios ON profesionales.idUsuario = usuarios.idUsuario;  
CREATE PROCEDURE verProfesionalesbyId(idU INT)
	SELECT profesionales.idProfesional, profesionales.idUsuario, CONCAT(usuarios.Nombre," ",usuarios.Apellidos) AS Nombre_Profesional FROM profesionales INNER JOIN usuarios ON profesionales.idUsuario = usuarios.idUsuario WHERE profesionales.idUsuario = idU;
CREATE PROCEDURE eliminarProfesional(idU INT)
	DELETE FROM profesionales WHERE idUsuario = idU;