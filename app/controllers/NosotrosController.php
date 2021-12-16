<?php

/**
*
*/
namespace App\Controllers;


class NosotrosController
{

    
    function __construct()
    {
        
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        require "app/views/nosotros.php";
    }
}

