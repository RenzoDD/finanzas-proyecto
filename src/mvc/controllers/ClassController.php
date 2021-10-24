<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Class controller
 */

require_once __MODEL__ . "/ClassModel.php";

class ClassController
{
    public function Home()
    {
        $pagename = "/home";
        
        require __VIEW__ . "/home.php";
    }
}

?>