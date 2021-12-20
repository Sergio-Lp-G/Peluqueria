<?php

/**
*
*/
namespace App\Controllers;
use App\Models\Servicio;


class HomeController
{

    
    function __construct()
    {
        echo "HomeController -> construct <br>";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        $servicios = Servicio::all();

        $order = $_GET['orderby'];

        switch ($order) {
            case 'nombre':
                array_multisort(array_column($servicios, 'nombre'), SORT_ASC, $servicios);
                break;
            case 'categoria':
                array_multisort(array_column($servicios, 'categoria_id'), SORT_ASC, $servicios);
                break;
            case 'duracion':
                array_multisort(array_column($servicios, 'duracion'), SORT_ASC, $servicios);
                break;
            case 'precio':
                array_multisort(array_column($servicios, 'precio'), SORT_ASC, $servicios);
                break;
            default:
                break;
        }
        
        require "app/views/home.php";
    }

    public function showService()
    {
        //buscar datos
        $servicios = Servicio::all();

        $order = $_GET['orderby'];

        switch ($order) {
            case 'nombre':
                array_multisort(array_column($servicios, 'nombre'), SORT_ASC, $servicios);
                break;
            case 'categoria':
                array_multisort(array_column($servicios, 'categoria_id'), SORT_ASC, $servicios);
                break;
            case 'duracion':
                array_multisort(array_column($servicios, 'duracion'), SORT_ASC, $servicios);
                break;
            case 'precio':
                array_multisort(array_column($servicios, 'precio'), SORT_ASC, $servicios);
                break;
            default:
                break;
        }
        //pasar a la vista
        // require "app/views/servicio/showPart.php";
    }
}

