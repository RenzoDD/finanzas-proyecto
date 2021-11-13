<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Index router
 */

require_once "mvc-init.php";
session_start();

require_once __CONTROLLER__ . "/ApplicacionController.php";
require_once __CONTROLLER__ . "/EmpresaController.php";
require_once __CONTROLLER__ . "/DocumentoController.php";


if (route("/"))
{
    ApplicacionController::Inicio();
}
else if (route("/registro"))
{
    EmpresaController::Registro();
}
else if (route("/registro/registrar"))
{
    EmpresaController::Registrar($_POST["RazonSocial"], $_POST["Direccion"], $_POST["RUC"], $_POST["Clave"]);
}
else if (route("/login"))
{
    EmpresaController::Login();
}
else if (route("/login/validar"))
{
    EmpresaController::Validar($_POST["RUC"], $_POST["Clave"]);
}

else if (route("/registroDocumento"))
{
    DocumentoController::RegistroDocumento();
}
else if (route("/registroDocumento/registrarDocumento"))
{
    DocumentoController::RegistrarDocumento($_POST["TipoDocumento"], $_POST["Emisor"], $_POST["FechaEmision"], $_POST["FechaPago"], $_POST["Moneda"], $_POST["Monto"]);
}

else if (route("/comitentes"))
{
    $_GET["moneda"] = !(isset( $_GET["moneda"]))?"PEN":$_GET["moneda"];
    $_GET["fechaInicio"] = !(isset( $_GET["fechaInicio"]))?"2020-01-01":$_GET["fechaInicio"];
    $_GET["fechaFin"] = !(isset( $_GET["fechaFin"]))?DateFormat("now","date"):$_GET["fechaFin"];
    DocumentoController::ListaDeComitentes($_GET["moneda"],$_GET["fechaInicio"],$_GET["fechaFin"]);

}

?> 