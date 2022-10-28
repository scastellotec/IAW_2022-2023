<?php
    session_start();

    // Valido que me envian el campo
    if (!isset($_REQUEST['nombre']) or $_REQUEST['nombre']==''){
        $error = 'Nombre incompleto';
    }else if (!isset($_REQUEST['edad']) or $_REQUEST['edad']==''){
        $error = 'Edad incompleto';
    }else if(!filter_var( $_REQUEST['nombre'], FILTER_VALIDATE_EMAIL)){
        $error = 'Nombre debe ser un email';
    }else if(!filter_var( $_REQUEST['edad'], FILTER_VALIDATE_INT)){
        $error = 'La edad debe ser un numero';
    }else if($_REQUEST['edad']< 18){
        $error = 'Debes ser mayor de edad';
    }

    if (isset($error)){
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        $_SESSION['edad'] = $_REQUEST['edad'];
        $_SESSION['error'] = $error;
        Header("Location: inicio.php");
    }else{
        Header("Location: secreto.php");
    }

?>