<?php

/**
*
*/
namespace App\Controllers;


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
        } else {
            $arrParams['nombre'] = "";
        }

        if (isset($_POST['apellidos'])) {
            $apellidosTrabajador =  $_POST['apellidos'];
            $arrParams['apellidos'] = $apellidosTrabajador;
        } else {
            $arrParams['apellidos'] = "";
        }

        if (isset($_POST['telefono'])) {
            $telefonoTrabajador =  $_POST['telefono'];
            $arrParams['telefono'] = $telefonoTrabajador;
        } else {
            $arrParams['telefono'] = 0;
        }

        if (isset($_POST['email'])) {
            $emailTrabajador =  $_POST['email'];
            $arrParams['email'] = $emailTrabajador;
        } else {
            $arrParams['email'] = "";
        }

        if (isset($_POST['login'])) {
            $loginTrabajador =  $_POST['login'];
            $arrParams['login'] = $loginTrabajador;
        } else {
            $arrParams['login'] = "";
        }

        if (isset($_POST['password'])) {
            $passwordTrabajador =  $_POST['password'];
            $arrParams['password'] = $passwordTrabajador;
        } else {
            $arrParams['password'] = "";
        }

        //echo 'PEPEEEEEEE';
        /* \App\Helpers\trabajador_new($arrParams);*/
    }
}

