<?php
    session_start();
    session_destroy();
    session_start();
    $_SESSION['msg'] = "Has vaciado el carrito";
    header("location:dudas_session.php");
?>