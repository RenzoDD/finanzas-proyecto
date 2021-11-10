<?php
/*
 * Copyright 2021 (c) Natalia Villanueva y Flavia Pardo
 * Licensed under MIT License
 * Empresa controller
 */

require_once __MODEL__ . "/DocumentoModel.php";

class DocumentoController
{
    static function RegistroDocumento()
    {
        $pageName = "/registroDocumento";

        require __VIEW__ . "/registroDocumento.php";
    }

    static function RegistrarDocumento($TipoDocumento, $Emisor, $FechaEmision, $FechaPago, $Moneda, $Monto)
    {
        $documento = new DocumentoModel();
        if ($documento->Crear($_SESSION["EmpresaID"], $TipoDocumento, $Emisor, $FechaEmision, $FechaPago, $Moneda, $Monto))
        {
            header("Location: /registroDocumento");
            return;
        }
        else
        {
            header("Location: /registroDocumento");
            return;
        }
    }
    
}

?>