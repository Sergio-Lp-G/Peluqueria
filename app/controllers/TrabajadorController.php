<?php
namespace App\Controllers;

require_once "app/models/Trabajador.php";
use App\Models\Trabajador;

/*
* La inserción requiere dos métodos en el controlador:
*   - Método insert que genera un formulario de alta
*   - Método store que recibe los datos de dicho formulario:
*       -> concluye con un reenvío a la lista, index(), o al detalle, show() del nuevo registro
*
* La actualización requiere dos métodos en el controlador:
*   - Método edit que genera un formulario de modificación con los datos del registro.
*        Este método implica buscar en la base de datos antes de construir el formulario
*   - Método update que recibe los datos de dicho formulario.
*        Igualmente, debemos buscar el registro en la base de datos y después modificarlo
*
*
*/
class TrabajadorController
{

    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $trabajadores = Trabajador::all();
        //pasar a la vista
        require('app/views/trabajador/index.php');
    }

    
    
    public function create()
    {
        require 'app/views/trabajador/create.php';
    }
    
    public function store()
    {
        $trabajador = new Trabajador();
        $trabajador->name = $_REQUEST['name'];
        $trabajador->surname = $_REQUEST['surname'];
        $trabajador->birthdate = $_REQUEST['birthdate'];
        $trabajador->email = $_REQUEST['email'];
        $trabajador->insert();
        header('Location:'.PATH.'trabajador');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $trabajador = Trabajador::find($id);
        // var_dump($trabajador);
        // exit();
        require('app/views/trabajador/show.php');        
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $trabajador = Trabajador::find($id);
        require 'app/views/trabajador/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $trabajador = Trabajador::find($id);
        $trabajador->name = $_REQUEST['name'];
        $trabajador->surname = $_REQUEST['surname'];
        $trabajador->birthdate = $_REQUEST['birthdate'];
        $trabajador->email = $_REQUEST['email'];
        $trabajador->save();
        header('Location:'.PATH.'trabajador');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $trabajador = Trabajador::find($id);
        $trabajador->delete();
        header('Location:'.PATH.'trabajador');
    }    
}
