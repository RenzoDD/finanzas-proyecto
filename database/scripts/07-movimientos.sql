/*
 * Copyright 2021 (c) Renzo Diaz
 * 
 * Tabla de movimientos
 * URL: http://localhost/phpmyadmin/
 */

DELIMITER //

DROP TABLE IF EXISTS Movimientos //
CREATE TABLE Movimientos (
	MovimientoID		INTEGER			NOT NULL,
	
    EmpresaID	        INTEGER			NOT NULL,
    FinanciamientoID    INTEGER,

    Fecha               DATE            NOT NULL,
    Detalle             TEXT            NOT NULL,
    Moneda				TEXT			NOT NULL, -- USD / PEN
    Monto			    DECIMAL(19,9)	NOT NULL,

    PRIMARY KEY (MovimientoID),
	FOREIGN KEY (EmpresaID)	        REFERENCES EMPRESAS         (EmpresaID),
	FOREIGN KEY (FinanciamientoID)	REFERENCES FINANCIAMIENTOS  (FinanciamientoID)
) //

DROP PROCEDURE IF EXISTS MOVIMIENTOS_CREAR //
CREATE PROCEDURE MOVIMIENTOS_CREAR ( IN EmpresaID INTEGER, IN Fecha DATE, IN Detalle TEXT, IN Moneda TEXT, IN Monto DECIMAL(19,9) )
BEGIN
    INSERT INTO Movimientos (EmpresaID,Fecha,Detalle,Moneda,Monto)
    VALUES  (EmpresaID,Fecha,Detalle,Moneda,Monto);

    SELECT  M.*
    FROM    Movimientos AS M
    WHERE   M.EmpresaID = EmpresaID
            AND M.Fecha = Fecha
            AND M.Detalle = Detalle
            AND M.Moneda = Moneda
            AND M.Monto = Monto;
END //

DROP PROCEDURE IF EXISTS MOVIMIENTOS_CREAR_FINANCIAMIENTO //
CREATE PROCEDURE MOVIMIENTOS_CREAR_FINANCIAMIENTO ( IN EmpresaID INTEGER, IN FinanciamientoID INTEGER, IN Fecha DATE, IN Detalle TEXT, IN Moneda TEXT, IN Monto DECIMAL(19,9) )
BEGIN
    INSERT INTO Movimientos (EmpresaID,FinanciamientoID,Fecha,Detalle,Moneda,Monto)
    VALUES  (EmpresaID,FinanciamientoID,Fecha,Detalle,Moneda,Monto);

    SELECT  M.*
    FROM    Movimientos AS M
    WHERE   M.EmpresaID = EmpresaID
            AND M.FinanciamientoID = FinanciamientoID
            AND M.Fecha = Fecha
            AND M.Detalle = Detalle
            AND M.Moneda = Moneda
            AND M.Monto = Monto;
END //

DROP PROCEDURE IF EXISTS MOVIMIENTOS_LEER_EMPRESA_MONEDA //
CREATE PROCEDURE MOVIMIENTOS_LEER_EMPRESA_MONEDA ( IN EmpresaID INTEGER, IN Moneda TEXT)
BEGIN
    SELECT  M.*
    FROM    Movimientos AS M
    WHERE   M.EmpresaID = EmpresaID
            AND M.Moneda = Moneda;
END //

DROP PROCEDURE IF EXISTS MOVIMIENTOS_LEER_EMPRESA_MONEDA_RANGO //
CREATE PROCEDURE MOVIMIENTOS_LEER_EMPRESA_MONEDA_RANGO ( IN EmpresaID INTEGER, IN Moneda TEXT, IN Inicio DATE, IN Fin DATE)
BEGIN
    SELECT  M.*
    FROM    Movimientos AS M
    WHERE   M.EmpresaID = EmpresaID
            AND M.Moneda = Moneda
            AND M.Fecha >= Inicio
            AND M.Fecha <= Fin;
END //

DROP PROCEDURE IF EXISTS MOVIMIENTOS_LEER_SUMA_EMPRESA_MONEDA_FIN //
CREATE PROCEDURE MOVIMIENTOS_LEER_SUMA_EMPRESA_MONEDA_FIN ( IN EmpresaID INTEGER, IN Moneda TEXT, IN Fin DATE)
BEGIN
    SELECT  SUM(M.Monto) AS Monto
    FROM    Movimientos AS M
    WHERE   M.EmpresaID = EmpresaID
            AND M.Moneda = Moneda
            AND M.Fecha < Fin;
END //