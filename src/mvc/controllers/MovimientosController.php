<?php
/*
 * Copyright 2021 (c) Alvaro Cabrera
 * Licensed under MIT License
 * Movimiento controller
 */

require_once __MODEL__ . "/MovimientoModel.php";
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
        
        require __VIEW__."/movimientos.php";
    }
}

?>