<?php
    session_start();
    
    $usuario = $_REQUEST["usuario"];
    $pass = $_REQUEST["pass"];

    include "bbdd.php";
    $sql = "select * FROM usuarios WHERE nombre='$usuario' and pass='$pass'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    var_dump($row);
    
    $conn->close();
    header("location: newlogin.php");

    header("location: users.php");


?>