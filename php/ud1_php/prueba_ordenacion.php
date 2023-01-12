<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // Creamos el array con numeros aleatorios
        $miArray = [];
        for($k=0;$k<10;$k++){
            $miArray[$k] = rand(1,99);
        }

        $miArray2 = $miArray;
        echo "<p>Solucion: </p>";
        sort($miArray2);
        
        echo "<table border='1'>";
        // Mostramos valores
            echo "<tr>";
            for($i=0;$i<count($miArray2);$i++){
                echo "<td>$miArray2[$i]</td>";
            }
            echo "</tr>";
            echo "<tr>";
            for($i=0;$i<count($miArray);$i++){
                echo "<td>$miArray[$i]</td>";
            }
            echo "</tr>";


        for($k=0;$k<10;$k++){    
            // Hacemos un intento de ordenacion
                $aux1 = 0;
                $aux2 = 0;
                for($i=0;$i<count($miArray)-1;$i++){
                    if($miArray[$i]>$miArray[$i+1]){
                        $aux1 = $miArray[$i+1];
                        $aux2 = $miArray[$i];
                        $miArray[$i] = $aux1;
                        $miArray[$i+1] = $aux2;
                    }
                }

            // Imprimimos los valores
                echo "<tr>";
                for($i=0;$i<count($miArray);$i++){
                    echo "<td>$miArray[$i]</td>";
                }
                echo "</tr>";
        }


        echo "</table>";
        
    ?>
</body>
</html>