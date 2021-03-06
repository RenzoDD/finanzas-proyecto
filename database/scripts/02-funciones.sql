/*
 * Copyright 2021 (c) Renzo Diaz
 * 
 * Funciones de control básicas
 * URL: http://localhost/phpmyadmin/
 */

DELIMITER //

DROP FUNCTION IF EXISTS HashSalt //
CREATE FUNCTION HashSalt (DATA TEXT, SALT TEXT) 
RETURNS TEXT
BEGIN
	DECLARE result TEXT;
	SET result = CAST(SHA2( CONCAT(DATA, SALT) , 256 ) AS CHAR);
	RETURN result;
END //

DROP FUNCTION IF EXISTS Nonce //
CREATE FUNCTION Nonce() 
RETURNS TEXT
BEGIN
	RETURN MD5(CAST(FLOOR(RAND()*(999999999999)) AS CHAR));
END //