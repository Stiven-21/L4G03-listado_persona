<?php
    $host="localhost";
    $user="root";
    $password="12345678";
    $bd="registrar";

    $conexion=new mysqli($host,$user,$password,$bd);

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    
    $query = "insert into personas(nombre,email) values ('$nombre','$email')";

    $conexion->close();
    header('location: crear.php');
?>
