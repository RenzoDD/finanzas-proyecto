/*
 * Copyright 2021 (c) Renzo Diaz
 * 
 * Tabla de financiamientos
 * URL: http://localhost/phpmyadmin/
 */

DELIMITER //

DROP TABLE IF EXISTS Financiamientos //
CREATE TABLE Financiamientos (
	FinanciamientoID	INTEGER 	AUTO_INCREMENT,

	EmpresaID			INTEGER			NOT NULL,

    Fecha				DATE			NOT NULL,
    Moneda				TEXT			NOT NULL, -- USD / PEN
    TipoCambio			DECIMAL(19,9)	NOT NULL,
    MontoBruto			DECIMAL(19,9)	NOT NULL,
    MontoNeto			DECIMAL(19,9)	NOT NULL,
	GastosIniciales		DECIMAL(19,9)	NOT NULL,
	GastosFinales		DECIMAL(19,9)	NOT NULL,
	Tasa				DECIMAL(19,9)	NOT NULL,
    TasaTipo			TEXT			NOT NULL, -- NOMINAL / EFECTIVA
    TasaPeriodo			TEXT			NOT NULL, -- ANUAL / SEMESTRAR / TRIMESTRAL / MENSUAL / DIARIA
    TasaCapitalizacion	TEXT			NOT NULL, -- ANUAL / SEMESTRAR / TRIMESTRAL / MENSUAL / DIARIA
    Comision			DECIMAL(19,9)	NOT NULL,
	TCEA				DECIMAL(19,9)	NOT NULL,

    PRIMARY KEY (FinanciamientoID),
	FOREIGN KEY (EmpresaID)	REFERENCES EMPRESAS (EmpresaID)
) //

DROP PROCEDURE IF EXISTS FINANCIAMIENTOS_CREAR //
CREATE PROCEDURE FINANCIAMIENTOS_CREAR (IN EmpresaID INTEGER, IN Fecha DATE, IN Moneda TEXT, IN TipoCambio DECIMAL(19,9), IN MontoBruto DECIMAL(19,9), IN MontoNeto DECIMAL(19,9), IN GastosIniciales DECIMAL(19,9), IN GastosFinales DECIMAL(19,9), IN Comision DECIMAL(19,9), IN Tasa DECIMAL(19,9), IN TasaTipo TEXT, IN TasaPeriodo TEXT, IN TasaCapitalizacion TEXT, IN TCEA DECIMAL(19,9) )
BEGIN
	INSERT INTO Financiamientos (EmpresaID,Fecha,Moneda,TipoCambio,MontoBruto,MontoNeto,GastosIniciales,GastosFinales,Comision,Tasa,TasaTipo,TasaPeriodo,TasaCapitalizacion,TCEA)
	VALUES 	(EmpresaID,Fecha,Moneda,TipoCambio,MontoBruto,MontoNeto,GastosIniciales,GastosFinales,Comision,Tasa,TasaTipo,TasaPeriodo,TasaCapitalizacion,TCEA);

	SELECT 	F.*
	FROM 	Financiamientos AS F
	WHERE 	F.EmpresaID = EmpresaID
			AND F.Fecha = Fecha 
			AND F.Moneda = Moneda 
			AND F.TipoCambio = TipoCambio 
			AND F.MontoBruto = MontoBruto 
			AND F.MontoNeto = MontoNeto 
			AND F.Comision = Comision 
			AND F.Tasa = Tasa 
			AND F.TasaTipo = TasaTipo 
			AND F.TasaPeriodo = TasaPeriodo 
			AND F.TasaCapitalizacion = TasaCapitalizacion;
END //

DROP PROCEDURE IF EXISTS FINANCIAMIENTOS_LEER_EMPRESA //
CREATE PROCEDURE FINANCIAMIENTOS_LEER_EMPRESA (IN EmpresaID INTEGER)
BEGIN
	SELECT 	F.*
	FROM 	Financiamientos AS F
	WHERE 	F.EmpresaID = EmpresaID;
END //