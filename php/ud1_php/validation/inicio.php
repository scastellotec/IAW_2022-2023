<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <h1>Ejemplo validacion</h1>
    <form action="validacion.php">
        <div>
            <label for="nombre">Nombre:</label>    
            <input type="text" id="nombre" name="nombre" value="<?php if (isset($_SESSION['nombre'])) echo $_SESSION['nombre'];?>">
        </div>
        <div>
            <label for="edad">Edad</label>    
            <input type="text" id="edad" name="edad" value="<?php if (isset($_SESSION['edad'])) echo $_SESSION['edad'];?>">
        </div>
        <input type="submit"/>
        <?php
            if (isset($_SESSION['error'])){    
                echo "<p>".$_SESSION['error']."</p>";
            }
            session_destroy();
        ?>
    </form>
</body>
</html>