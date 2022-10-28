<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Pagina inicio sesion</h1>
    
    <?php
        /* PRUEBA HECHA SIN USAR SESION Y
            ENVIANDO EL PARAMETRO POR LA URL DE FORMA MANUAL*/
        
        if (isset($_REQUEST['veces'])){
            $contador = $_REQUEST['veces'] +1;
        } else {
            $contador = 0;
        }
        echo "<p>Has pulsado: $contador</p>";
        echo "<a href='pruebas_sesion.php?veces=$contador'>Pulsa mas veces</a>";
    ?>
</body>
</html>