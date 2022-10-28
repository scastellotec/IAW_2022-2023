<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 42</h1>
    <?php
        $capitales = array(
            "Italy"=>"Rome",
            "Luxembourg"=>"Luxembourg", 
            "Belgium"=> "Brussels", 
            "Denmark"=>"Copenhagen", 
            "Finland"=>"Helsinki", 
            "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

        echo "<h2>Primera parte</h2>";
        echo $capitales['Italy']." es la capital de Italia";
        echo "<br>";
        echo strtoupper($capitales['Italy'])." es la capital de Italia";
        echo "<br>";
        echo strtolower($capitales['Italy'])." es la capital de Italia";

        echo "<h2>Segunda parte</h2>";
        foreach($capitales as $clave => $valor){
            echo "<p>la clave es: ".$clave." y el valor: ".$valor."</p>";
        }


    ?>
</body>
</html>