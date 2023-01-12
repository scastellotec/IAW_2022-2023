<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
</body>
</html>