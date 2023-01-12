<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Piedra - Papel - Tijera</h1>
    <p>Saca lo que quieras</p>

    <form action="#" method="get">
        Jugador:
        <select name="eleccion">
            <option value="1">Piedra</option>
            <option value="2">Papel</option>
            <option value="3">Tijeras</option>
        </select>
        <input type="submit" value="jugar"/>
    </form>

    <?php
        session_start();
        if(isset($_SESSION["maquina"]) and isset($_SESSION["jugador"])){
            $maquina = $_SESSION["maquina"];
            $jugador = $_SESSION["jugador"];

        } else {
            $maquina = 0;
            $jugador = 0;
        }


        if(isset($_REQUEST["eleccion"])){
            $maquinaEleccion = rand(1,3);
            $jugadorEleccion = $_REQUEST["eleccion"];

            echo "jugador saca ".$jugadorEleccion;
            echo "maquina saca ".$maquinaEleccion;

            if($jugadorEleccion == $maquinaEleccion){
                //empate
                echo "<p>Empate</p>";
            } else if (($jugadorEleccion == 1 and $maquinaEleccion == 2) or
                        ($jugadorEleccion == 2 and $maquinaEleccion == 3) or
                        ($jugadorEleccion == 3 and $maquinaEleccion == 1)){
                echo "<p>Pierdes</p>";
                $maquina++;
                $_SESSION["maquina"] = $maquina;
            } else if (($jugadorEleccion == 1 and $maquinaEleccion == 3) or
                        ($jugadorEleccion == 2 and $maquinaEleccion == 1) or
                        ($jugadorEleccion == 3 and $maquinaEleccion == 2)){
                echo "<p>Ganas</p>";
                $jugador++;
                $_SESSION["jugador"]  = $jugador;
            }

        }

                
        echo "<p>Maquina: $maquina puntos</p>";
        echo "<p>Jugador: $jugador puntos</p>";
    ?>
</body>
</html>