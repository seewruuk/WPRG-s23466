<?php

$array = [];
$iloscRzutow = readline("Podaj ilosc rzutow: ");

for($i=0; $i<$iloscRzutow; $i++){
    $array[$i]=rand(1,6);
}
echo "twoje rzuty: \n";
for($i=0; $i<$iloscRzutow; $i++){
    echo $array[$i]." ";
}

?>