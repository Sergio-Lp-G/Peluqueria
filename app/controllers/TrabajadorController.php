<?php
namespace App\Controllers;

// require_once "app/models/Trabajador.php";
use App\Models\Servicio;
use App\Models\Trabajador;
use App\Models\Trabajador_Servicio;
use Dompdf\Dompdf;

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
        $servicios_id = Trabajador_Servicio::find($id);

        $servicios = [];
        foreach ( $servicios_id as $servicioid ) {
            $servicio = Servicio::find($servicioid->servicio_id);
            array_push( $servicios, $servicio );
        }

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

    public function pdf()
    {
        //iniciar buffer, para construir un response
        ob_start();
        $trabajadores = Trabajador::all();
        require_once ('app/views/trabajador/pdf.php');
        // Volcamos el contenido del buffer
        // el response ya no va al navegador, va a $html
        $html = ob_get_clean();

        $dompdf = new DOMPDF();
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("trabajadores.pdf", array("Attachment"=>0));
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
