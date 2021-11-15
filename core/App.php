<?php

namespace Core;

require 'app/helpers/trabajadores_helper.php';

class App
{
    public function __construct()
    {

        // El método a ejecutar depende de un argumente $GET

        # region CONSTRUCTOR OLD
        //        if (isset($_GET['method'])) {
        //            $method = $_GET['method'];
        //        } else {
        //            $method = 'home';
        //        }
        //
        //        try {
        //            $this->$method();
        //        } catch (Throwable $th) {
        //            if (method_exists($this, $method)) {
        //                header("HTTP/1.0 500 Internal Server Error");
        //                return http_response_code(500);
        //                echo "Error en el servidor";
        //            } else {
        //                header("HTTP/1.0 404 Not Found");
        //                echo "No encontrado";
        //            }
        //        } finally {
        //            echo "<pre>";
        //            //print_r($th);
        //        }

        # endregion CONSTRUCTOR OLD

        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName = ucwords($controllerName) . "Controller";
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }

        $file = "app/controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        
        $controllerName = '\\App\\Controllers\\' . $controllerName;
        
        $controllerObject = new $controllerName;
        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }

    // public function save_trabajador()
    // {
    //     //echo "<h2> Hola mundo </h2>";


    //     $arrParams = [];

    //     if (isset($_POST['nombre'])) {
    //         $nombreTrabajador =  $_POST['nombre'];
    //         $arrParams['nombre'] = $nombreTrabajador;
    //     }

    //     //echo 'PEPEEEEEEE';
    //     trabajador_new($arrParams);
    // }

    public function home()
    {
        include('app/views/home.php');
    }

    public function login()
    {
        include('app/views/login.php');
    }
}
