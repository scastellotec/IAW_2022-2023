<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>    
    <?php
        // Creamos el array con numeros aleatorios
        $miArray = [];
        for($k=0;$k<10;$k++){
            $miArray[$k] = rand(1,30);
        }

        // Mostramos valores
        echo "<ul>";
        for($i=0;$i<count($miArray);$i++){
            echo "<li>$miArray[$i]</li>";
        }
        echo "</ul>";

        /* Version de maximo esfuerzo (sin funciones) */
        echo "<h1>Version dificil</h1>";
        // Valor medio
            $sumaTotal = 0;
            $posicionesTotal = count($miArray);
            $media = 0;
            for($i=0;$i<count($miArray);$i++){
                $sumaTotal = $sumaTotal + $miArray[$i];
                //$sumaTotal += $miArray[$i];
            }
            $media = $sumaTotal/$posicionesTotal;
            echo "La media es $sumaTotal/$posicionesTotal = ".$media;

        // Valor maximo
            $valorMax = $miArray[0];
            for($i=0;$i<count($miArray);$i++){
                if($miArray[$i]>$valorMax){
                    $valorMax = $miArray[$i];
                }
            }
            echo "<p>Maximo: $valorMax</p>";

        // Valor minimo
            $valorMin = $miArray[0];
            for($i=0;$i<count($miArray);$i++){
                if($miArray[$i]<$valorMin){
                    $valorMin = $miArray[$i];
                }
            }
            echo "<p>Minimo: $valorMin</p>";

        /* Version facil*/
        echo "<h1>Version facil</h1>";
            $max = max($miArray);
            $min = min($miArray);
            $avg = array_sum($miArray) / count($miArray);

            echo "<p>AVG: $avg</p>";
            echo "<p>MAX: $max</p>";
            echo "<p>MIN: $min</p>";

    ?>
</body>
</html>