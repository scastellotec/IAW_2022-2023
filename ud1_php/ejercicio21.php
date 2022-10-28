<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio21.php" method="get">
        Nombre: <input type="text" name="name"/><br/>
        Año nacimiento: <input type="year" name="year"/><br/>
        <input type="submit" value="Enviar"/>
    </form>
    <ul>
    <?php
        if(isset($_REQUEST['name']) and
                isset($_REQUEST['year'])){
            echo "<li>Nombre: ".$_REQUEST['name']."</li>";
            echo "<li>Año Nacimiento: ".$_REQUEST['year']."</li>";
        }
    ?>
    </ul>
</body>
</html>