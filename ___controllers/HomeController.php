<?php

/**
*
*/
class HomeController
{

    function __construct()
    {
        echo "HomeController -> construct <br>";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        require "views/home.php";
    }
}

