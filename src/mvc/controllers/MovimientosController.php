<?php
/*
 * Copyright 2021 (c) Alvaro Cabrera
 * Licensed under MIT License
 * Movimiento controller
 */

require_once __MODEL__ . "/MovimientoModel.php";
require_once __MODEL__ . "/DocumentoModel.php";
require_once __MODEL__ . "/EmpresaModel.php";

class MovimientoController
{

    static function MostrarMovimientosMonedaRango($Moneda, $fechaInicio, $fechaFin)
    {
        $empresa = new EmpresaModel();
        $empresa = $empresa->LeerEmpresaID($_SESSION['EmpresaID']);

        $movimiento = new MovimientoModel();
        $movimientos = $movimiento->LeerEmpresaMonedaRango($empresa->EmpresaID, $Moneda, $fechaInicio, $fechaFin);
        
        $sumaMovimientos = $movimiento->LeerSumaEmpresaMonedaFin($empresa->EmpresaID, $Moneda, $fechaFin);
        
        $documento = new DocumentoModel();
        $documentos = $documento->LeerEmpresaMonedaRango($empresa->EmpresaID, $Moneda, $fechaInicio, $fechaFin);

        $documentosGeneral = array_merge($movimientos, $documentos);
        function compara_fecha($a,$b){ return strtotime(trim($a['fecha'])) > strtotime(trim($b['Fecha'])); }
        usort($aux, 'compara_fecha');

        $sumaCargos=0;
        $sumaAbonos=0;
        foreach ($documentosGeneral as $d) {
            if($documento->Monto<0)
                $sumaCargos +=$d->Monto;
            else 
                $sumaAbonos+=$d->Monto;
        } 

        
        require __VIEW__."/movimientos.php";
    }
}

?>