<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        .negro{
            background-color: black;
            color: white;
        }
        .blanco{
            background-color: white;
        }
    </style>
</head>
<body>
    <form action="#" method="get">
        Tamaño tablero: <input type="number" name="tam"/>
        <input type="submit" value="Enviar"/>
    </form>
    <?php
        //0. Comprobar que me envian el tamaño de tablero
        if (isset($_REQUEST['tam'])){
            //1. Recoger en una variable el tamaño de tablero
            $t = $_REQUEST['tam'];

            //2. Dibujar una tabla cuadrada con tantas filas y columnas como tam
            $cFilas = 0;
            $cColumnas = 0;
            echo "<table border='1' width='100%'>";
                while($cFilas < $t){
                    echo "<tr>";
                        while($cColumnas < $t){
                            if(($cFilas+$cColumnas)%2==1){
                                echo "<td class='negro'>$cFilas , $cColumnas</td>";
                            } else {
                                echo "<td class='blanco'>$cFilas , $cColumnas</td>";
                            }
                            $cColumnas++;
                        }
                        $cColumnas = 0;
                    echo "</tr>";
                    $cFilas++;
                }
            echo "</table>";
        }
    ?>
</body>
</html>