<?php
namespace App\Models;

use PDO;
use Core\Model;
use App\Models\Servicio;

require_once 'core/Model.php';

/*
* $padre->hijos array
*   -> En la ruta /Categoria/show/id puede interesar mostrar la lista de Servicioos de cada tipo
*/
class Categoria extends Model
{
    public function __construct()
    {
    }

    public static function all()
    {    
        $db = Categoria::db();
        $sql = "SELECT * FROM categoria";
        //preparar consulta
        $statement = $db->query($sql);
        //$results = $statement->query();
        $servicio = $statement->fetchAll(PDO::FETCH_CLASS,Categoria::class);
        //ejecutar la consulta
        //recoger datos con fetch_all
        //retornar

        return $servicio;
    }

    public function insert()
    { 
        $db = Categoria::db();
        $stmt = $db->prepare('INSERT INTO categoria(id, nombre) VALUES(:id, :nombre)');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);

        return $stmt->execute();
    }

    public function find($id)
    {
        $db = Categoria::db();
        $stmt = $db->prepare('SELECT * FROM categoria WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Categoria::class);
        $categoria = $stmt->fetch(PDO::FETCH_CLASS);

        return $categoria;
    }

    public function update(){
        $db = Categoria::db();
        $stmt = $db->prepare('UPDATE categoria SET id = :id, nombre = :nombre WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);

        return $stmt->execute();
    }

    public function delete()
    {
        $db = Categoria::db();
        $stmt = $db->prepare('DELETE FROM categoria WHERE id = :id');
        $stmt->bindValue(':id', $this->id);

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
         $db = Categoria::db();
         $stmt = $db->prepare('SELECT nombre FROM servicio WHERE type_id=:id');
         $stmt->execute(array(':id' => $this->type_id));
         $stmt->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
         $servicio = $stmt->fetchAll(PDO::FETCH_CLASS,Servicio::class);

         return $servicio;
    }    
}