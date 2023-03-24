<?php

$array=[];

for($i = 0; $i<10; $i++){
    $array[$i] = rand(1,100);
}
for($i = 0; $i<10; $i++){
    echo $array[$i]." ";
}
echo "\n";

do{
    echo "Podaj wartosc od 0 do 10"."\n";
    $szukana_wartosc = readline("Podaj wartosc: ");
}while($szukana_wartosc < 0 || $szukana_wartosc >= 10);

echo "Szukana wartosc: ".$array[$szukana_wartosc];


?>