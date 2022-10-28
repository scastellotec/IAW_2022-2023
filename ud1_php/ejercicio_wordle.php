<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>IAWle</title>
</head>

<body>
    <?php
        $arrayPalabras = ["humanidad", "humano", "persona", "gente", "hombre", "mujer", "bebe", "adolescente", "adulto", "adulta", "anciano", "anciana", "don"];

        //Inicio sesion
        session_start();

        // Inicializo el juego o recupero el estado de la partida
        if (isset($_SESSION["palabraSecreta"]) and isset($_SESSION["letrasUsuario"])){
            $palabraSecreta = $_SESSION["palabraSecreta"];
            $letrasUsuario = $_SESSION["letrasUsuario"];
        }else{
            //Elegir una palabra al azar. array_rand devuelve una posicion aleatoria de un array
            $palabraSecreta = $arrayPalabras[array_rand($arrayPalabras)];
            $letrasUsuario = [];
            //Guardarla en sesion los valores
            $_SESSION["palabraSecreta"] = $palabraSecreta;
            $_SESSION["letrasUsuario"] = $letrasUsuario;
        }

        //Recoger las letras que me envia el usuario
        if(isset($_REQUEST['letra'])){
            //Comprobar que la letra no esta ya
            $letrasUsuario[] = $_REQUEST['letra'];
            // Guardo en session el nuevo array
            $_SESSION["letrasUsuario"] = $letrasUsuario;
        }

        // Muestro la palabra para facilitarme la vida
        echo "<p>$palabraSecreta</p>";
        var_dump($letrasUsuario);

        // Dibujar los huecos de la palabra
        echo "<table border='1' width='50%'>";
        echo "<tr>";
        $resultado;
        for($i=0;$i<strlen($palabraSecreta);$i++){
            $dibujaHueco = '?';
            // Si la letra esta en el array pintar la letra
            // sino la ha dicho pintar el ?
            for($j=0;$j<count($letrasUsuario);$j++){
                if($palabraSecreta[$i]==$letrasUsuario[$j]){
                    $dibujaHueco = $palabraSecreta[$i];
                }
            }
            echo "<td>$dibujaHueco</td>";
        }
        echo "</tr>";
        echo "</table>";

        //De alguna forma el usuario elige la letra
        foreach(range('a', 'z') as $j){
            $pintar = true;
            for($i=0; $i<count($letrasUsuario);$i++){
                if($j == $letrasUsuario[$i]){
                    $pintar = false;
                }
            }
            if($pintar == true){
                echo "<a href='ejercicio_wordle.php?letra=$j'>$j</a> - ";
            } else {
                echo "$j - ";
            }
        }

        echo "<br><a href='destruye_session.php'>Empezar de nuevo</a>";
    ?>
</body>

</html>