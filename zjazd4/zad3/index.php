<?php

$liczbaOdwiedzin = isset($_COOKIE['liczbaOdwiedzin']) ? $_COOKIE['liczbaOdwiedzin'] : 0;
$sesja = isset($_SESSION['liczbaOdwiedzin']) ? $_SESSION['liczbaOdwiedzin'] : 0;

if($liczbaOdwiedzin == 0 || $liczbaOdwiedzin != $sesja){
    $liczbaOdwiedzin ++;
    setcookie("liczbaOdwiedzin", $liczbaOdwiedzin);
    $_SESSION['liczbaOdwiedzin'] = $liczbaOdwiedzin;
}

if($liczbaOdwiedzin % 10 == 0 ){
    echo "<h3>To twoja ".$liczbaOdwiedzin." wizyta na stronie</h3>";
}

echo "Liczba odwiedzin: ".$liczbaOdwiedzin;


?>