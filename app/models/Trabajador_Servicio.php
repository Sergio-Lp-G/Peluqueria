<?php

namespace App\Models;

use PDO;
use Core\Model;
use App\Models\Servicio;

require_once 'core/Model.php';

/*
* $padre->hijos array
*   -> En la ruta /Trabajador_Servicio/show/id puede interesar mostrar la lista de Servicioos de cada tipo
*/
class Trabajador_Servicio extends Model
{
    public function __construct()
    {
    }

    public static function all()
    {
        $db = Trabajador_Servicio::db();
        $sql = "SELECT * FROM trabajador_servicio";
        //preparar consulta
        $statement = $db->query($sql);
        //$results = $statement->query();
        $trabajador_servicio = $statement->fetchAll(PDO::FETCH_CLASS, Trabajador_Servicio::class);
        //ejecutar la consulta
        //recoger datos con fetch_all
        //retornar

        return $trabajador_servicio;
    }

    public function insert()
    {
        $db = Trabajador_Servicio::db();
        $stmt = $db->prepare('INSERT INTO trabajador_servicio(trabajador_id, servicio_id) VALUES(:trabajador_id, :servicio_id)');
        $stmt->bindValue(':trabajador_id', $this->trabajador_id);
        $stmt->bindValue(':servicio_id', $this->servicio_id);

        return $stmt->execute();
    }

    public static function find($id)
    {
        $db = Trabajador_Servicio::db();
        $stmt = $db->prepare('SELECT * FROM trabajador_servicio WHERE trabajador_id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Trabajador_Servicio::class);
        $trabajador_servicios = $stmt->fetchAll(PDO::FETCH_CLASS);

        return $trabajador_servicios;
    }

    public static function findAll($trabajador_id, $servicio_id)
    {
        $db = Trabajador_Servicio::db();
        //$stmt = $db->prepare('SELECT * FROM trabajador_servicio WHERE trabajador_id = :trabajador_id AND servicio_id = :servicio_id');
//        $stmt->bindValue(':trabajador_id', trabajador_id);
//        $stmt->bindValue(':servicio_id', servicio_id);
        $stmt = $db->prepare('SELECT * 
FROM trabajador_servicio 
WHERE trabajador_id = ? AND servicio_id = ?');
        $stmt->execute(array($trabajador_id, $servicio_id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Trabajador_Servicio::class);
        $trabajador_servicios = $stmt->fetch(PDO::FETCH_CLASS);

        return $trabajador_servicios;
    }

    public function update()
    {
        $db = Trabajador_Servicio::db();
        $stmt = $db->prepare('UPDATE trabajador_servicio SET trabajador_id = :id, servicio_id = :servicio_id WHERE trabajador_id = :trabajador_id');
        $stmt->bindValue(':trabajador_id', $this->trabajador_id);
        $stmt->bindValue(':servicio_id', $this->servicio_id);

        return $stmt->execute();
    }

    public function delete()
    {

        $db = Trabajador_Servicio::db();
        $stmt = $db->prepare('DELETE FROM trabajador_servicio WHERE trabajador_id = :trabajador_id AND servicio_id = :servicio_id');
        $stmt->bindValue(':trabajador_id', $this->trabajador_id);
        $stmt->bindValue(':servicio_id', $this->servicio_id);

        return $stmt->execute();
    }

    public function __get($atributoDesconocido)
    {
        // return "atributo $atributoDesconocido desconocido";
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
            // echo "<hr> atributo $x <hr>";
        }
    }

    /*
    * Definimos un método servicio
    */
    public function servicio()
    {
        $db = Trabajador_Servicio::db();
        $stmt = $db->prepare('SELECT nombre FROM servicio WHERE type_id=:id');
        $stmt->execute(array(':id' => $this->type_id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $trabajador_servicio = $stmt->fetchAll(PDO::FETCH_CLASS, Servicio::class);

        return $trabajador_servicio;
    }
}
