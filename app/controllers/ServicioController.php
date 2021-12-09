<?php

/**
 *
 */

namespace App\Controllers;

// require_once "app/models/Servicio.php";

use App\Models\Categoria;
use App\Models\Servicio;
use Dompdf\Dompdf;

class ServicioController
{
    function __construct()
    {
        //echo "En ServicioController";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
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
        require "app/views/servicio/index.php";
    }

    public function create()
    {
        $categorias = Categoria::all();
        require 'app/views/servicio/create.php';
    }

    public function store()
    {
        $servicio = new Servicio();
        $servicio->nombre = $_REQUEST['name'];
        $servicio->categoria = $_REQUEST['category'];
        $servicio->duracion = $_REQUEST['time'];
        $servicio->precio = $_REQUEST['price'];
        $servicio->insert();
        header('Location:'.PATH.'servicio');
    }

    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $servicio = Servicio::find($id);
        // var_dump($servicio);
        // exit();
        require('app/views/servicio/show.php');
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicio::find($id);
        $categorias = Categoria::all();
        require 'app/views/servicio/edit.php';
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $servicio = Servicio::find($id);
        $servicio->nombre = $_REQUEST['name'];
        $servicio->categoria = $_REQUEST['category'];
        $servicio->duracion = $_REQUEST['time'];
        $servicio->precio = $_REQUEST['price'];
        $servicio->save();
        header('Location:'.PATH.'servicio');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicio::find($id);
        $servicio->delete();
        header('Location:'.PATH.'servicio');
    }

    public function pdf()
    {
        //iniciar buffer, para construir un response
        ob_start();
        $servicios = Servicio::all();
        require_once ('app/views/servicio/pdf.php');
        // Volcamos el contenido del buffer
        // el response ya no va al navegador, va a $html
        $html = ob_get_clean();

        $dompdf = new DOMPDF();
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("servicios.pdf", array("Attachment"=>0));
    }
    public function pdfsimple()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
