<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Page Header
 */

if (!isset($codigo_pagina))
    $codigo_pagina = "";

function NavbarItem($enabled, $text, $href = "#", $active = false, $modal= false, $items = null)
{
    if ($items == null)
    {
        $active   = $enabled && $active ? " active"   : "";
        $enabled = !$enabled            ? " disabled" : "";

        $class = "class='nav-link$active$enabled'";

        if ($modal == true)
            $href = "href='#' data-bs-toggle='modal' data-bs-target='$href'";
        else
            $href = "href='$href'";

        print '<li class="nav-item my-auto">';
        print "    <a $class $href>$text</a>";
        print '</li>';
    }
    else
    {
        $active   = $enabled && $active ? " active"   : "";
        $enabled = !$enabled            ? " disabled" : "";
        
        print "<li class='nav-item dropdown my-auto'>";
        print "     <a class='nav-link dropdown-toggle $active$enabled' href='$href' id='navbarDropdown' role='button' data-bs-toggle='dropdown'>";
        print           $text;
        print "     </a>";
        print "     <ul class='dropdown-menu'>";
        
        foreach ($items as $i)
            print "<li class='text-center'><a class='dropdown-item' href='".$i["href"]."'>".$i["text"]."</a></li>";
        
        print "     </ul>";
        print "</li>";
    }
}

if (!function_exists("str_starts_with"))
{
    function str_starts_with($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }
}
?>

<navbar class="navbar navbar-expand-md navbar-dark bg-dark header">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/assets/img/original.png" height="50">
            PHP Web Template
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php
                    NavbarItem(true , Bootstrap::Icon("house-door-fill")       . " Home"         , "#"                   , str_starts_with( $codigo_pagina, "/home") );
                    NavbarItem(true , Bootstrap::Icon("hand-thumbs-up-fill")   . " Modal regular", "#iniciarSesion"      , str_starts_with( $codigo_pagina, "/example"), true);
                    NavbarItem(true , Bootstrap::Icon("hand-thumbs-down-fill") . " Modal static" , "#ingresarObligatorio", str_starts_with( $codigo_pagina, "/php")    , true);
                    NavbarItem(true , Bootstrap::Icon("three-dots-vertical")   . " Dropdown"     , "#"                   , str_starts_with( $codigo_pagina, "/web")    , false, [["href"=>"https://google.com", "text"=>"Google"],["href"=>"https://twitter.com", "text"=>"Twitter"]]);
                    NavbarItem(false, Bootstrap::Icon("x-octagon-fill")        . " Disabled");
                ?>
            </ul>
        </div>
    </div>
</navbar>