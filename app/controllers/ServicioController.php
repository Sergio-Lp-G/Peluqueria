<?php

/**
 *
 */

namespace App\Controllers;

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
        require "app/views/servicio/index.php";
    }

    public function create()
    {
        require 'app/views/servicio/create.php';
    }

    public function store()
    {
        $servicio = new Servicio();
        $servicio->name = $_REQUEST['name'];
        $servicio->surname = $_REQUEST['surname'];
        $servicio->birthdate = $_REQUEST['birthdate'];
        $servicio->email = $_REQUEST['email'];
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
        $servicio->name = $_REQUEST['name'];
        $servicio->surname = $_REQUEST['surname'];
        $servicio->birthdate = $_REQUEST['birthdate'];
        $servicio->email = $_REQUEST['email'];
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
