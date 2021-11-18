<?php

/**
 *
 */

namespace App\Controllers;


class ServicioController
{
    function __construct()
    {
        echo "En ServicioController";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        require "app/views/parts/servicio.php";
    }
}
