<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<ul>";
        echo "<li>".$_SERVER['PHP_SELF']."</li>";
        echo "<li>".$_SERVER['SERVER_ADDR']."</li>";
        /* Warning que no existe*/
        echo "<li>".$_SERVER['REMOTE_HOST']."</li>";
        echo "<li>".$_SERVER['SERVER_NAME']."</li>";
        echo "<li>".$_SERVER['HTTP_USER_AGENT']."</li>";
        echo "<li>".$_SERVER['REMOTE_ADDR']."</li>";
        echo "</ul>";
    ?>
</body>
</html>