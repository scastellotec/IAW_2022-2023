<?php
$fecha = '2022-11-28';
$daynum = date("N", strtotime($fecha));
echo $daynum;
if($daynum > 5) { 
    echo "Today is Saturday or Sunday.";
} else {
    echo "Today is not Saturday or Sunday.";
}
?>