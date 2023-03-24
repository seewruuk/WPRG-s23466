<?php

$array=[];
$maks = 0;

for($i=0;$i<10;$i++){
    $array[$i]=rand(1,100);
    if($array[$i] > $maks){
        $maks = $array[$i];
    }
}
for($i=0;$i<10;$i++){
    echo $array[$i]." ";
}
echo "Najwiekszy element tablicy: ".$maks;



?>