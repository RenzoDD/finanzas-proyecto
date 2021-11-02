<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Index router
 */

require_once "mvc-init.php";
session_start();

require_once __CONTROLLER__ . "/ApplicacionController.php";

if (route("/"))
{
    ApplicacionController::Inicio();
}

?>