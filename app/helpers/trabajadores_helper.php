<?php

namespace App\Helpers;

function db_conn() {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "capelos_belleza";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        return false;
    } else {
        return $conn;
    }

}

    function trabajador_new( $arrParams ){

        $nombre = $arrParams['nombre'];
        $apellidos = $arrParams['apellidos'];
        $email = $arrParams['email'];
        $telefono = $arrParams['telefono'];
        $login = $arrParams['login'];
        $password = $arrParams['password'];

       $conn = db_conn();

        $sql = "INSERT INTO Usuarios ( nombre, apellidos, telefono, email, login, password )
        VALUES ('$nombre', '$apellidos', '$telefono', '$email', '$login', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }