<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $miFrase = "esta frase es muy larga, y no termina nunca";
        echo "<p>$miFrase</p>";
        echo "<p>Tamaño:". strlen($miFrase)."</p>";
        /*echo "<p>$miFrase[0]</p>";
        echo "<p>$miFrase[1]</p>";*/
        for($i=0; $i<strlen($miFrase);$i++){
            echo "<p>$miFrase[$i]</p>";
        }
    ?>
</body>
</html>