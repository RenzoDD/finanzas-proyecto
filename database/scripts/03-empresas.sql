/*
 * Copyright 2021 (c) Renzo Diaz
 * 
 * Tabla de empresas
 * URL: http://localhost/phpmyadmin/
 */
 
DELIMITER //

DROP TABLE IF EXISTS Empresas //
CREATE TABLE Empresas (
	EmpresaID 		INTEGER 	AUTO_INCREMENT,

	Nombre			TEXT		NOT NULL,
	Direccion		TEXT		NOT NULL,
	RUC				TEXT		NOT NULL	UNIQUE,
	Clave			TEXT		NOT NULL,
	Salt			TEXT		NOT NULL,
	
	PRIMARY KEY (EmpresaID)
) //

DROP PROCEDURE IF EXISTS EMPRESAS_CREAR //
CREATE PROCEDURE EMPRESAS_CREAR (IN Nombre TEXT, IN Direccion TEXT, IN RUC TEXT, IN Clave TEXT)
BEGIN
	SET @salt = Nonce();

	INSERT INTO Empresas ( Nombre, Direccion, RUC, Clave, Salt )
	VALUES 	( Nombre, Direccion, RUC, HashSalt( Clave, @salt ), @salt );

	SELECT 	E.*
	FROM 	Empresas AS E
	WHERE 	E.Nombre = Nombre
			AND E.Direccion = Direccion 
			AND E.RUC = RUC 
			AND E.Clave = HashSalt( Clave, E.Salt )
			AND E.Salt = @salt ;
END //

DROP PROCEDURE IF EXISTS EMPRESAS_LEER_TODOS //
CREATE PROCEDURE EMPRESAS_LEER_TODOS ( )
BEGIN
	SELECT 	E.*
	FROM 	Empresas AS E;
END //

DROP PROCEDURE IF EXISTS EMPRESAS_LEER_ID //
CREATE PROCEDURE EMPRESAS_LEER_ID (IN EmpresaID INTEGER)
BEGIN
	SELECT 	E.*
	FROM 	Empresas AS E
	WHERE 	E.EmpresaID = EmpresaID;
END //

DROP PROCEDURE IF EXISTS EMPRESAS_LEER_RUC_CLAVE //
CREATE PROCEDURE EMPRESAS_LEER_RUC_CLAVE (IN RUC TEXT, IN Clave TEXT)
BEGIN
	SELECT 	E.*
	FROM 	Empresas AS E
	WHERE 	E.RUC = RUC
			AND E.Clave = HashSalt( Clave, E.Salt );
END //