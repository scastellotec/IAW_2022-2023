<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <!-- 
    Escribe un script PHP que realice las siguientes acciones:
    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprimir todos los valores que almacena.
    -->
    <?php
        $miArray = [];  // inicializar array forma1
        //$miArray = array(); // inicializar array forma2
        //$miArray = [0,5,78,4,987,6,8,7]; // inicializar array con valores pre-cargados

        for($k=0;$k<10;$k++){
            $miArray[$k] = rand(1,30);
            //$miArray[] = rand(1,30); // Es lo mismo pero no especifico posición, se añade al final.
            // En caso que el array tuviera valores previos no los sobre-escribimos.
        }

        // Recorro el array posicion a posicion y muestro sus valores
        echo "<ul>";
        for($i=0;$i<count($miArray);$i++){
            echo "<li>$miArray[$i]</li>";
        }
        echo "</ul>";

        // Muestro los valores del array, pero no puedo controlar su presentación
        //var_dump($miArray);
    ?>
</body>
</html>