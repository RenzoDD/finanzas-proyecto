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

?>