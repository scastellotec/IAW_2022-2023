<?php
    $fecha = '2022-11-8';
    echo date('w', strtotime($fecha));

    if(date('w', strtotime($fecha))==1){
        echo "los lunes se descansa";
    }
?>