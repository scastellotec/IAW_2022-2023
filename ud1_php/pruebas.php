<?php 
  //0. Compruebo que me envian todos los valores que necesito
    // aqui hariamos lo del isset()....
    
  //1. Recoger los valores que nos envian
    //$_GET $_POST $_REQUEST

    $n1 = $_REQUEST['num1'];
    $n2 = $_REQUEST['num2'];
    $o = $_REQUEST['oper'];

    echo "<p>Los valores recibidos son: </p>";
    echo "<ul>";
    echo "<li>$n1</li>";
    echo "<li>$n2</li>";
    echo "<li>$o</li>";
    echo "</ul>";

  //2. En funcion de la operacion calcular el resultado
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

  //3. Mostrar el resultado por pantalla
    echo "El resultado de tu operacion es: $res";
?>