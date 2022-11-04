<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Mis citas</h1>
    <?php
        session_start();
        // Compruebo si tenemos session iniciada
        if(isset($_SESSION['logged']) and isset($_SESSION['idUsuario'])){
            
            echo "<p>Bienvenido a tu area personal ".$_SESSION['idUsuario']."</p>";
            
        }else{
            // Muestro el acceso a la sección de usuario
            header("location: login.php");
        }
    ?>
</body>
</html>