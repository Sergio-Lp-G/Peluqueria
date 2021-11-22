<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Trabajador extends Model
{
    public function __construct()
    {
        $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }
    public static function all(){ 
        //obtener conexión
        $db = Trabajador::db();
        //preparar consulta
        $sql = "SELECT * FROM trabajadores";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $trabajadores = $statement->fetchAll(PDO::FETCH_CLASS, Trabajador::class);
        //retornar
        return $trabajadores;
    }
    public static function find($id) 
    {
        $db = Trabajador::db();
        $stmt = $db->prepare('SELECT * FROM trabajadores WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Trabajador::class);
        $trabajador = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $trabajador;
    }    
    public function insert()
    {
        $db = Trabajador::db();
        $stmt = $db->prepare('INSERT INTO trabajadores(name, surname, birthdate, email) VALUES(:name, :surname, :birthdate, :email)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':birthdate', $this->birthdate);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Trabajador::db();
        $stmt = $db->prepare('UPDATE trabajadores SET name = :name, surname = :surname, birthdate = :birthdate, email = :email WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':email', $this->email);
        return $stmt->execute();
    }
    
    public function delete(){ 
        $db = Trabajador::db();
        $stmt = $db->prepare('DELETE FROM trabajadores WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
