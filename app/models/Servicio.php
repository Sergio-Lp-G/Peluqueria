<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Servicio extends Model
{
    public function __construct()
    {
        $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }
    public static function all(){
        //obtener conexión
        $db = Servicio::db();
        //preparar consulta
        $sql = "SELECT * FROM servicio";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $servicio = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        //retornar
        return $servicio;
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
    public function insert()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('INSERT INTO servicio(name, surname, birthdate, email) VALUES(:name, :surname, :birthdate, :email)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':birthdate', $this->birthdate);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('UPDATE servicio SET name = :name, surname = :surname, birthdate = :birthdate, email = :email WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':email', $this->email);
        return $stmt->execute();
    }

    public function delete(){
        $db = Servicio::db();
        $stmt = $db->prepare('DELETE FROM servicio WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
