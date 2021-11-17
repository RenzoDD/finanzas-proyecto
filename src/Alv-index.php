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
require_once __CONTROLLER__ . "/MovimientosController.php";

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
else if (route("/movimientos"))
{
    $_GET["Moneda"] = !(isset( $_GET["Moneda"]))?"PEN":$_GET["Moneda"];
    $_GET["fechaInicio"] = !(isset( $_GET["fechaInicio"]))?"2021-01-01":$_GET["fechaInicio"];
    $_GET["fechaFin"] = !(isset( $_GET["fechaFin"]))?DateFormat("now","date"):$_GET["fechaFin"];
    MovimientoController::MostrarMovimientosMonedaRango($_GET["Moneda"],$_GET["fechaInicio"],$_GET["fechaFin"]);
}

?>