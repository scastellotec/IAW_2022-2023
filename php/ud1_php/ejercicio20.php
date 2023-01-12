<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="get">
        Numero 1: <input type="number" name="num1"/>
        <select name="oper">
            <option value="sum">+</option>
            <option value="res">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        Numero 2: <input type="number" name="num2"/><br/>
        <input type="submit" value="Enviar"/>
    </form>
    
    <?php
        if ((isset($_REQUEST['num1'])) and (isset($_REQUEST['num2']))
                and (isset($_REQUEST['oper']))){
            $n1 = $_REQUEST['num1'];
            $n2 = $_REQUEST['num2'];
            $o = $_REQUEST['oper'];
    
            $res = 0;
            if ($o == "sum"){
                $res = $n1 + $n2;
            }elseif($o == "res"){
                $res = $n1 - $n2;
            }elseif($o == "mul"){
                $res = $n1 * $n2;
            }elseif($o == "div"){
                $res = $n1 / $n2;
            }else{
                $res = "Operacion no compatible";
            }
    
            echo "<p>El resultado de tu operacion es: $res</p>";
        }
    ?>

</body>
</html>