<?php

/**
 *
 */

namespace App\Controllers;

require_once "app/models/servicio.php";
use App\Models\Servicio;

class ServicioController
{
    function __construct()
    {
        echo "En ServicioController";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        //buscar datos
        $servicios = Servicio::all();
        //pasar a la vista
        require "app/views/servicio/index.php";
    }

    public function create()
    {
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
        header('Location:'.PATH.'user');
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
}
