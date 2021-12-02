<?php

namespace App\Models;

use PDO;
use DateTime;
use Core\Model;
use App\Models\Categoria;


require_once 'core/Model.php';


class Servicio extends Model
{
    public function __construct()
    {
        // $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }
    public static function all()
    {
        //obtener conexión
        $db = Servicio::db();
        //preparar consulta
        $sql = "SELECT * FROM servicio";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $servicios = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        //retornar
        return $servicios;
    }

    public static function find($id)
    {
        $db = Servicio::db();
        $stmt = $db->prepare('SELECT * FROM servicio WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $servicio = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $servicio;
    }

    public function findbyCategory($id)
    {
        $db = Servicio::db();
        $stmt = $db->prepare('SELECT nombre FROM servicio WHERE categoria_id=:id');
        $stmt->execute(array(':id' => $id));
        $servicios = $stmt->fetchAll(PDO::FETCH_CLASS, Servicio::class);

        return $servicios;
    }

    public function insert()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('INSERT INTO servicio(nombre, categoria_id, duracion, precio) VALUES(:nombre, :categoria, :duracion, :precio)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':categoria', $this->categoria_id);
        $stmt->bindValue(':duracion', $this->duracion);
        $stmt->bindValue(':precio', $this->precio);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('UPDATE servicio SET nombre = :nombre, categoria_id = :categoria, duracion = :duracion, precio = :precio WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':categoria', $this->categoria_id);
        $stmt->bindValue(':duracion', $this->duracion);
        $stmt->bindValue(':precio', $this->precio);
        return $stmt->execute();
    }

    public function delete()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('DELETE FROM servicio WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }

    /*
    * El método categoria 
    */
    public function category()
    {
        // un servicio pertenece a un tipo
        $db = Servicio::db();
        $statement = $db->prepare('SELECT * FROM categoria WHERE id = :id');
        $statement->bindValue(':id', $this->categoria_id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Categoria::class);
        $categorias = $statement->fetch(PDO::FETCH_CLASS);

        return $categorias;
    }

    /*
    * Aunque ya podemos mostrar el nombre del tipo: $servicio->categoria()->name
    * Sería más elegante tratar categoria como un atributo
    * Vamos ahora a usar el metodo __get($nombreAtributo)
    *   -> __get se ejecuta siempre que intentamos acceder a un atributo inexistente
    *
    * Vamos a modificarlo para que:
    *   -> Si piden un atributo desconocido pero hay un método con ese nombre
    *       1) Primero ejecuta el método para que cree ese atributo
    *       2) Después devuelve el atributo ya existente
    */
    public function __get($atributoDesconocido)
    {
        // return "atributo $atributoDesconocido desconocido";
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
        }
    }
}
