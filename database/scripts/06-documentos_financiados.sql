/*
 * Copyright 2021 (c) Renzo Diaz
 * 
 * Tabla de documentos financiados
 * URL: http://localhost/phpmyadmin/
 */

DELIMITER //

DROP TABLE IF EXISTS DocumentosFinanciados //
CREATE TABLE DocumentosFinanciados (
	DocumentoID			INTEGER			NOT NULL,
	FinanciamientoID	INTEGER			NOT NULL,

    Moneda				TEXT			NOT NULL, -- USD / PEN
    Monto			    DECIMAL(19,9)	NOT NULL,

    PRIMARY KEY (DocumentoID, FinanciamientoID),
	FOREIGN KEY (DocumentoID)	    REFERENCES DOCUMENTOS       (DocumentoID),
	FOREIGN KEY (FinanciamientoID)	REFERENCES FINANCIAMIENTOS  (FinanciamientoID)
) //


DROP PROCEDURE IF EXISTS DOCUMENTOSFINANCIADOS_CREAR //
CREATE PROCEDURE DOCUMENTOSFINANCIADOS_CREAR ( IN DocumentoID INTEGER, IN FinanciamientoID INTEGER, IN Moneda TEXT, IN Monto DECIMAL(19,9) )
BEGIN
	INSERT INTO DocumentosFinanciados (DocumentoID,FinanciamientoID,Moneda,Monto)
	VALUES 	(DocumentoID,FinanciamientoID,Moneda,Monto);

	SELECT 	DF.*
	FROM 	DocumentosFinanciados AS DF
	WHERE 	DF.DocumentoID = DocumentoID
			AND DF.FinanciamientoID = FinanciamientoID 
			AND DF.Moneda = Moneda 
			AND DF.Moneda = Moneda 
			AND DF.Monto = Monto;
END //


DROP PROCEDURE IF EXISTS DOCUMENTOSFINANCIADOS_LEER_FINANCIAMIENTO //
CREATE PROCEDURE DOCUMENTOSFINANCIADOS_LEER_FINANCIAMIENTO ( IN FinanciamientoID INTEGER )
BEGIN
    SELECT  DF.*
    FROM    DocumentosFinanciados AS DF
    WHERE   DF.FinanciamientoID = FinanciamientoID;
END //


DROP PROCEDURE IF EXISTS DOCUMENTOSFINANCIADOS_LEER_DOCUMENTO //
CREATE PROCEDURE DOCUMENTOSFINANCIADOS_LEER_DOCUMENTO ( IN DocumentoID INTEGER )
BEGIN
    SELECT  DF.*
    FROM    DocumentosFinanciados AS DF
    WHERE   DF.DocumentoID = DocumentoID;
END //