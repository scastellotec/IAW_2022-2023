<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="get">
        Introduce un numero:
        <input type="number" name="num"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        //1 Me aseguro que viene el numero como parametro
        if(isset($_REQUEST['num'])){
            //2 Recojo el valor del numero
            $numeroUsario = $_REQUEST['num'];

            //3 Bucle hasta el numero del usuario
            for($numero=1;$numero<=$numeroUsario;$numero++){
                //3.1 Comprobar multiplos de 3 y/o 5
        
                // Codigo optimizado donde solo valoramos una vez cada operacion
                $resultado = "";
                if($numero%3==0){$resultado = "Fizz";}
                if($numero%5==0){$resultado = $resultado."Buzz";}
                //if($numero%7==0){$resultado = $resultado."Zoom";}
                if($resultado == ""){$resultado = $numero;}
                echo "<p>$resultado</p>";
            
                // Codigo OK, pero requiere evaluar varias veces la misma operacion
                if($numero%3==0 and $numero%5==0){
                    echo "<p>FizzBuzzZoom</p>";
                }elseif($numero%3==0){
                    echo "<p>Fizz</p>";
                }elseif($numero%5==0){
                    echo "<p>Buzz</p>";
                } else {
                    echo "<p>$numero</p>";
                }
            }
        }
        
        
        
    ?>
</body>
</html>