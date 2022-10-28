<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Pagina inicio sesion</h1>
    <?php
        //inicio sesion
        session_start();

        // Compruebo si ya esta guardado el numero en sesion
        if (isset($_SESSION['numeroGenerado'])){
            $numAzar = $_SESSION['numeroGenerado'];
            // Miro si me llega un numero por el formulario
            if(isset($_REQUEST['num'])){
                $numUsuario = $_REQUEST['num'];
                if ($numAzar == $numUsuario){
                    echo "<p>Has acertado</p>";
                    session_destroy();
                    echo "<p>Recarga la pagina</p>";
                } else {
                    echo "<p>Has fallado, sigue jugando</p>";
                }
            }
        } else {
            // Saco un numero al azar
            $numAzar = rand(1,99);
            // Guardo con el nombre que me parezca el valor
            $_SESSION['numeroGenerado'] = $numAzar;
        }

        echo "<p>El numero a adivinar es: $numAzar</p>";

    ?>
    <form action="#">
        <input type="number" name="num"/>
        <input type="submit" value="enviar"/>
    </form>

</body>
</html>