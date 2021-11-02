<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Aplicación controller
 */

class ApplicacionController
{
    static function Inicio()
    {
        $pageName = "/inicio";

        require __VIEW__ . "/registro.php";
    }
}

?>