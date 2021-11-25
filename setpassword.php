<?php
use App\Models\Trabajador;
require "app/models/Trabajador.php";

$trabajadores = Trabajador::all();

foreach ($trabajadores as $trabajador) {
    //echo $trabajador->name . "\n";
    echo $trabajador->name . ': ' . $trabajador->setPassword('secret') . "\n";

}