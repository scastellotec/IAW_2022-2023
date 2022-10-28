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
        print_r($GLOBALS);
        print_r($_SERVER);
        print_r($_GET);
        print_r($_POST);
        print_r($_FILES);
        print_r($_COOKIE);
        //print_r($_SESSION);
        print_r($_REQUEST);
        print_r($_ENV);
    ?>
</body>
</html>
