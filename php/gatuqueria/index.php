<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gatuqueria</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
    <h1>Bienvenido a mi sitio</h1>
    <?php
        session_start();

        // Compruebo si tenemos session iniciada
        if(isset($_SESSION['logged']) and isset($_SESSION['idUsuario'])){
            // Muestro el enlace al formulario para iniciar sesion
            echo "<p><a href='usuario.php'>".$_SESSION['idUsuario']."</a></p>";
            echo "<p><a href='cerrarSesion.php'>Cerrar sesion</a></p>";
        }else{
            // Muestro el acceso a la sección de usuario
            echo "<p><a href='login.php'>Iniciar sesion</a></p>";
        }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>