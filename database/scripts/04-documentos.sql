/*
 * Copyright 2021 (c) Renzo Diaz
 * 
 * Tabla de documentos
 * URL: http://localhost/phpmyadmin/
 */
 
DELIMITER //

DROP TABLE IF EXISTS Documentos //
CREATE TABLE Documentos (
	DocumentoID			INTEGER			AUTO_INCREMENT,
	
    EmpresaID			INTEGER			NOT NULL,
	TipoDocumento		TEXT			NOT NULL,  -- LETRA / FACTURA / RECIBO
	Emisor				TEXT			NOT NULL,
	FechaEmision		DATE			NOT NULL,
	FechaVencimiento	DATE			NOT NULL,	
	Moneda				TEXT			NOT NULL,  -- PEN / USD
	Monto				DECIMAL(19,9)	NOT NULL,
	EnFinanciamiento	DECIMAL(19,9)	NOT NULL DEFAULT 0,

    PRIMARY KEY (DocumentoID),
	FOREIGN KEY (EmpresaID)	REFERENCES EMPRESAS (EmpresaID)
) //

DROP PROCEDURE IF EXISTS DOCUMENTOS_CREAR //
CREATE PROCEDURE DOCUMENTOS_CREAR (IN EmpresaID INTEGER, IN TipoDocumento TEXT, IN Emisor TEXT, IN FechaEmision DATE, IN FechaVencimiento DATE, IN Moneda TEXT, IN Monto DECIMAL(19,9))
BEGIN
	INSERT INTO Documentos (EmpresaID, TipoDocumento, Emisor, FechaEmision, FechaVencimiento, Moneda, Monto)
	VALUES 	(EmpresaID, TipoDocumento, Emisor, FechaEmision, FechaVencimiento, Moneda, Monto);

	SELECT 	D.*
	FROM 	Documentos AS D
	WHERE 	D.EmpresaID = EmpresaID
			AND D.TipoDocumento = TipoDocumento
			AND D.Emisor = Emisor
			AND D.FechaEmision = FechaEmision
			AND D.FechaVencimiento = FechaVencimiento
			AND D.Moneda = Moneda
			AND D.Monto = Monto;
END //

DROP PROCEDURE IF EXISTS DOCUMENTOS_LEER_EMPRESA //
CREATE PROCEDURE DOCUMENTOS_LEER_EMPRESA (IN EmpresaID INTEGER)
BEGIN
	SELECT 	D.*
	FROM 	Documentos AS D
	WHERE	D.EmpresaID = EmpresaID
	ORDER BY D.FechaEmision;
END //

DROP PROCEDURE IF EXISTS DOCUMENTOS_LEER_ID //
CREATE PROCEDURE DOCUMENTOS_LEER_ID (IN DocumentoID INTEGER)
BEGIN
	SELECT 	D.*
	FROM 	Documentos AS D
	WHERE	D.DocumentoID = DocumentoID
	LIMIT 	1;
END //

DROP PROCEDURE IF EXISTS DOCUMENTOS_LEER_EMPRESA_MONEDA //
CREATE PROCEDURE DOCUMENTOS_LEER_EMPRESA_MONEDA (IN EmpresaID INTEGER, IN Moneda TEXT)
BEGIN
	SELECT 	D.*
	FROM 	Documentos AS D
	WHERE	D.EmpresaID = EmpresaID
			AND D.Moneda = Moneda
	ORDER BY D.FechaEmision;
END //

DROP PROCEDURE IF EXISTS DOCUMENTOS_LEER_FINANCIAMIENTO_DISPONIBLE //
CREATE PROCEDURE DOCUMENTOS_LEER_FINANCIAMIENTO_DISPONIBLE (IN EmpresaID INTEGER, IN FechaActual DATE)
BEGIN
	SELECT 	D.*
	FROM 	Documentos AS D
	WHERE	D.EmpresaID = EmpresaID
			AND D.EnFinanciamiento < D.Monto
			AND D.FechaVencimiento > FechaActual
	ORDER BY D.FechaEmision;
END //

DROP PROCEDURE IF EXISTS DOCUMENTOS_LEER_CON_FINANCIAMIENTO //
CREATE PROCEDURE DOCUMENTOS_LEER_CON_FINANCIAMIENTO (IN EmpresaID INTEGER, IN FechaActual DATE)
BEGIN
	SELECT 	D.*
	FROM 	Documentos AS D
	WHERE	D.EmpresaID = EmpresaID
			AND D.EnFinanciamiento > 0
	ORDER BY D.FechaEmision;
END //

DROP PROCEDURE IF EXISTS DOCUMENTOS_LEER_EMPRESA_MONEDA_RANGO //
CREATE PROCEDURE DOCUMENTOS_LEER_EMPRESA_MONEDA_RANGO ( IN EmpresaID INTEGER, IN Moneda TEXT, IN Inicio DATE, IN Fin DATE)
BEGIN
    SELECT  D.*
    FROM    DOCUMENTOS AS D
    WHERE   D.EmpresaID = EmpresaID
            AND D.Moneda = Moneda
            AND D.FechaEmision >= Inicio
            AND D.FechaEmision <= Fin;
END //

DROP PROCEDURE IF EXISTS DOCUMENTOS_MODIFICAR_AGREGAR_FINANCIAMIENTO //
CREATE PROCEDURE DOCUMENTOS_MODIFICAR_AGREGAR_FINANCIAMIENTO (IN DocumentoID INTEGER, IN Financiamiento DECIMAL(19,9))
BEGIN
	UPDATE	Documentos AS D
	SET		D.EnFinanciamiento = D.EnFinanciamiento + Financiamiento
	WHERE	D.DocumentoID = DocumentoID;

	SELECT 	D.*
	FROM 	Documentos AS D
	WHERE	D.DocumentoID = DocumentoID
	LIMIT	1;
END //



