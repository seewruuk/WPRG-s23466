<?php

$liczbaOdwiedzin = isset($_COOKIE['liczbaOdwiedzin']) ? $_COOKIE['liczbaOdwiedzin'] : 0;
$liczbaOdwiedzin ++;

setcookie("liczbaOdwiedzin", $liczbaOdwiedzin);

if($liczbaOdwiedzin % 10 == 0 ){
    echo "<h3>To twoja ".$liczbaOdwiedzin." wizyta na stronie</h3>";
}

echo "Liczba odwiedzin: ".$liczbaOdwiedzin;


?>