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

    static function RegistrarDocumento($TipoDocumento, $Emisor, $FechaEmision, $FechaVencimiento, $Moneda, $Monto)
    {
        $documento = new DocumentoModel();
        if ($documento->Crear($_SESSION["EmpresaID"], $TipoDocumento, $Emisor, $FechaEmision, $FechaVencimiento, $Moneda, $Monto))
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

    public static function ListaDeComitentes($moneda, $fechaInicio, $fechaFin)
    {
        $documento = new DocumentoModel();
        $documentos=$documento->LeerEmpresaMonedaRango($_SESSION["EmpresaID"],$moneda,  $fechaInicio, $fechaFin);
        $sumaCargos=0;
        $sumaAbonos=0;
        foreach ($documentos as $documento) {
            if($documento->Monto<0)
                $sumaCargos +=$documento->Monto;
            else 
                $sumaAbonos+=$documento->Monto;

        } 
      
        
        require __VIEW__ . "/comitentes.php";
    }

}

?>