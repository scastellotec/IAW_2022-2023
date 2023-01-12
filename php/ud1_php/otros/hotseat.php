<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $randomNumber1 = rand(0,7);
        $students = array();
        $students[] = "ivan";
        $students[] = "rosado";
        $students[] = "jorge";
        $students[] = "paloma";
        $students[] = "daniel";
        $students[] = "roberto";
        $students[] = "sergio";
        $students[] = "miguel";
        echo "<p>the number is: $randomNumber1</p>";
        echo "<p>It's your turn, $students[$randomNumber1]</p>";

    ?>
</body>
</html>