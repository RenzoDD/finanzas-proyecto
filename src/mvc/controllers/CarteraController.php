<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Cartera controller

 */

require_once __MODEL__ . "/EmpresaModel.php";
require_once __MODEL__ . "/DocumentoModel.php";

class CarteraController
{
    static function Cartera()
    {
        $pageName = "/cartera";

        require __VIEW__ . "/cartera.php";


    }

    public static function MostrarCartera($moneda)
    {
        $doc = new DocumentoModel();
        $documentosPEN = $doc->LeerEmpresaMoneda($_SESSION["EmpresaID"],"PEN");
        $documentosUSD = $doc->LeerEmpresaMoneda($_SESSION["EmpresaID"],"USD");
        $sumaMN = 0;
        $sumaME = 0;
        $garantia=0;
        $doc->EnFinanciamiento = $garantia;

        require __VIEW__ . "/cartera.php";
    }

}




?>