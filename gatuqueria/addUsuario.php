<?php
    //TODO: validacion de datos
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["pass"];
    $email = $_REQUEST["email"];
    $foto = "user.png";
    //$foto = $_REQUEST["foto"];

    // realizo conexion con la bbdd
    include 'bbdd.php';    
    $sql = "insert into usuarios (nombre, pass, email, foto, administrador, ultimaModificacion, fechaCreacion) values ('$nombre', '$pass', '$email', '$foto', 1, now(), now())";
    echo $sql;
    $conn->query($sql);
    $conn->close();
    //header("location: index.php");
?>