<?php

/**
*
*/
class LoginController
{

    function __construct()
    {
        // echo "En LoginController";
    }

    public function index()
    {
        require "app/views/login.php";
    }

    public function save_trabajador()
    {
        //echo "<h2> Hola mundo </h2>";


        $arrParams = [];

        if (isset($_POST['nombre'])) {
            $nombreTrabajador =  $_POST['nombre'];
            $arrParams['nombre'] = $nombreTrabajador;
        }

        //echo 'PEPEEEEEEE';
        trabajador_new($arrParams);
    }
}

