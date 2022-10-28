<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        // Creamos el array
        $alumnos = ["Antonio","Julian","Andrea","Thiago"];
        // Mostramos su contenido
        var_dump($alumnos);
        // Mostramos una posicion en concreto
        echo "<p>$alumnos[1]</p>";
        // Añadir un alumno al final del array
        $alumnos[] = "Sergio";
        // Volvemos a mostrar su contenido
        var_dump($alumnos);

        // Como saber el tamaño que tiene un array
        echo "<p>Tamaño del array: ".count($alumnos)."</p>";
        echo "<ul>";
        // Recorro el array posicion por posicion y muestro el contenido
        for($i=0; $i<count($alumnos); $i++){
            echo "<li>$alumnos[$i]</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>