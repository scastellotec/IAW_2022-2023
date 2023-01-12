<?php
    // No hago validaciones
    $nombre = $_REQUEST['nombre'];
    $pass = $_REQUEST['pass'];

    session_start();

    if ($nombre=='sergio' and $pass=='123'){
        // estamos logeamos
        $_SESSION['logged'] = true;
        $_SESSION['idUsuario'] = "sergio";
        header("location: index.php");
    } else {
        //no es correcto
        $_SESSION['error'] = "Usuario y/o Contraseña incorrectas";
        header("location: login.php");
    }
?>