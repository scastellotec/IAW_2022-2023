<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi primera web</h1>
    <?php
        // Creo la variable llamada mensaje y le asigno un valor
        $nombre = "Sergio";
        $apellido = "Castellote";
        // Muestro el contenido de la variable
        echo $nombre." ".$apellido;
        echo "<p class='importante'>".$nombre.$apellido."</p>";
        echo "<p class=\"importante\">".$nombre.$apellido."</p>";
        ?><p class="importante"><?php echo $nombre.$apellido;?></p>
        <?php
        /* Instrucciones equivalentes
        echo $nombre;
        echo " ";
        echo $apellido;*/
    ?>
</body>
</html>