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
        $mensaje = "<p>hola marte</p>";
        // Muestro el contenido de la variable
        echo $mensaje;
        // Cambiamos el valor y volvemos a imprimir
        $mensaje = "<p>otra cosa</p>";
        echo $mensaje;

    ?>
</body>
</html>