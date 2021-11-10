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


    static function Login()
    {
        $pageName = "/login";

        unset($_SESSION["EmpresaID"]);

        require __VIEW__ . "/login.php";
    }
    static function Validar($RUC, $Clave)
    {
        $empresa = new EmpresaModel();
        $empresa = $empresa->LeerRUCClave($RUC, $Clave);

        if ($empresa != null)
        {
            $_SESSION["EmpresaID"] = $empresa->EmpresaID;
            header("Location: /registroDocumento");
            //require __VIEW__ . "/registroDocumento.php";
            //cambiando el location pq no hay funcion aqui pa registroDocumento
            return;
        }
        else
        {
            header("Location: /login");
            return;
        }
    }
}

?>