<?php

/**
 *
 */

namespace App\Controllers;

// require_once "app/models/Servicio.php";

use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Trabajador;
use App\Models\Trabajador_Servicio;
use Dompdf\Dompdf;

class TrabajadorServicioController
{
    function __construct()
    {
        //echo "En ServicioController";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        //buscar datos
        $trabajador_servicios = Trabajador_Servicio::all();

        //pasar a la vista
        require "app/views/trabajador_servicio/index.php";
    }

    public function create($trabajadorid)
    {
        $trabajador = Trabajador::find($trabajadorid[0]);
        var_dump($trabajador->id);
        $servicios = Servicio::all();
        require 'app/views/trabajador_servicio/create.php';
    }

    public function store()
    {
        $trabajador_id = $_REQUEST['trabajador_id'];
        $servicio_id = $_REQUEST['servicio_id'];

        $trabajador_servicio = new Trabajador_Servicio();
        $trabajador_servicio->trabajador_id = $trabajador_id;
        $trabajador_servicio->servicio_id = $servicio_id;
        $trabajador_servicio->insert();
        header("Location: http://$_SERVER[HTTP_HOST]/trabajador/show/$trabajador_id");
        die;
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
    public function delete($arguments)
    {
        $trabajador_id = (int) $arguments[0];
        $servicio_id = (int) $arguments[1];
        $trabajador_servicio = Trabajador_Servicio::findAll($trabajador_id, $servicio_id);
        //var_dump($trabajador_servicio);
        $trabajador_servicio->delete();
        header("Location: http://$_SERVER[HTTP_HOST]/trabajador/show/$trabajador_id");
        die;
    }
//    public function edit($arguments)
//    {
//        $id = (int) $arguments[0];
//        $servicio = Servicio::find($id);
//        $categorias = Categoria::all();
//        require 'app/views/servicio/edit.php';
//    }
//
//    public function update()
//    {
//        $id = $_REQUEST['id'];
//        $servicio = Servicio::find($id);
//        $servicio->nombre = $_REQUEST['name'];
//        $servicio->categoria = $_REQUEST['category'];
//        $servicio->duracion = $_REQUEST['time'];
//        $servicio->precio = $_REQUEST['price'];
//        $servicio->save();
//        header('Location:'.PATH.'servicio');
//    }



}
