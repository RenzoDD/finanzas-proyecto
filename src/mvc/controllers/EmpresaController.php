<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Empresa controller
 */

require_once __MODEL__ . "/EmpresaModel.php";

class EmpresaController
{
    static function Registro()
    {
        $pageName = "/registro";

        require __VIEW__ . "/registroUsuario.php";
    }

    static function Registrar($RazonSocial, $Direccion, $RUC, $Clave)
    {
        $empresa = new EmpresaModel();
        if ($empresa->Crear($RazonSocial, $Direccion, $RUC, $Clave))
        {
            header("Location: /login");
            return;
        }
        else
        {
            header("Location: /registro");
            return;
        }
    }
}

?>