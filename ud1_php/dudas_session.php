<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
</head>
<body>
    <h1>Amazon</h1>
    <ul>
        <li>Lapiceros 0.3mm<a href='dudas_session.php?id=1'>Comprar</a></li>
        <li>Cuadernos <a href='dudas_session.php?id=2'>Comprar</a></li>
        <li>Goma milan <a href='dudas_session.php?id=3'>Comprar</a></li>
    </ul>
    <h2>Tu carrito de la compra</h2>
    <?php
        session_start();
        
        if(isset($_SESSION['msg'])){
            echo "<p>".$_SESSION['msg']."</p>";
            $_SESSION['msg'] = "";
        }

        if(isset($_SESSION['lapiceros']) and isset($_SESSION['cuadernos']) and isset($_SESSION['gomas'])){
            $lapiceros = $_SESSION['lapiceros'];
            $cuadernos = $_SESSION['cuadernos'];
            $gomas = $_SESSION['gomas'];
        } else {
            $lapiceros = 0; $cuadernos = 0; $gomas = 0;
            $_SESSION['lapiceros'] = $lapiceros;
            $_SESSION['cuadernos'] = $cuadernos;
            $_SESSION['gomas'] = $gomas;
        }
        
        if(isset($_REQUEST['id'])){
            $item = $_REQUEST['id'];
            if($item == 1){
                $lapiceros++; //$lapiceros = $lapiceros + 1;
                $_SESSION['lapiceros'] = $lapiceros;
                $_SESSION['msg'] = "Has comprado un lapiz";
            }else if ($item == 2){
                $cuadernos++;
                $_SESSION['cuadernos'] = $cuadernos;
                $_SESSION['msg'] = "Has comprado un cuaderno";
            }else if ($item == 3){
                $gomas++;
                $_SESSION['gomas'] = $gomas;
                $_SESSION['msg'] = "Has comprado una goma";
            }else{
                #este producto te lo has inventado
            }
        }

    ?>
    <table border='1'>
        <tr>
            <td>Lapiceros</td>
            <td><?php echo $lapiceros ?></td>
        </tr>
        <tr>
            <td>Cuadernos</td>
            <td><?php echo $cuadernos ?></td>
        </tr>
        <tr>
            <td>Gomas</td>
            <td><?php echo $gomas ?></td>
        </tr>
    </table>
    <a href="destruye_session.php">Vaciar carrito</a>
</body>
</html>