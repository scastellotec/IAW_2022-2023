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
        echo "<h1>Ruleta rusa</h1>";
        $numAleatorio1 = rand(1,6);
        $numAleatorio2 = rand(1,6);
        echo "<p>".$numAleatorio1." y ".$numAleatorio2."</p>";
        
        //if($numAleatorio1==1 and $numAleatorio2==1){
        if($numAleatorio1==1 && $numAleatorio2==1){
            echo "<p>Snake eyes</p>";
        }else if($numAleatorio1==6 && $numAleatorio2==6){
            echo "<p>Double six</p>";
        }else if(($numAleatorio1==6 && $numAleatorio2==4) ||
                    ($numAleatorio1==4 && $numAleatorio2==6)){
            echo "<p>Ten points</p>";
        } else if($numAleatorio1==$numAleatorio2){
            echo "<p>Twins</p>";
        }

        if($numAleatorio1 == 1){
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg' width='250px'>";
        } elseif ($numAleatorio1 == 2){
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg'  width='250px'>"; 
        } elseif ($numAleatorio1 == 3){
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg' width='250px'>";  
        } elseif ($numAleatorio1 == 4){
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg' width='250px'>";  
        } elseif ($numAleatorio1 == 5){
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg' width='250px'>"; 
        } elseif ($numAleatorio1 == 6){
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg' width='250px'>";  
        } else {
            echo "<p>Numero generado fuera de rango</p>";
        }

        
    ?>
</body>
</html>