<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <ul>
        <?php
            /*for($i=0;$i<10;$i++){
                if($i%2==0){
                    echo "<li>$i</li>";
                }
            }*/
            for($i=0;$i<10;$i=$i+2){
                echo "<li>$i</li>";
            }
        ?>
    </ul>


</body>
</html>