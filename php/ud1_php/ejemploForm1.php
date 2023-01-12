<?php
    echo "Los parametros recibidos son:";
    /*
    $_GET       parametros enviados por GET
    $_POST      parametros enviados por POST
    $_REQUEST   parametros enviados indistintamente
    */
    echo "Probamos con _GET";
    echo "Nombre: ".$_GET['name'];
    echo "Año Nacimiento: ".$_GET['year'];

    echo "Probamos con _REQUEST";
    echo "Nombre: ".$_REQUEST['name'];
    echo "Año Nacimiento: ".$_REQUEST['year'];
?>