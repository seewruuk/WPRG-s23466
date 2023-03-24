<?php

$typ_figury = readline("Podaj typ figury (trojkat, prostokat, trapez): ");

$bok_a = 0;
$bok_b = 0;
$wysokosc = 0;
$pole = 0;

switch($typ_figury){
    case "trojkat" : $pole = trojkat(); break;
    case "prostokat" : $pole = prostokat(); break;
    case "trapez" : $pole = trapez(); break;
    default: echo "Nieznany typ figury!"; break;
}


function trojkat(){
    $bok_a = readline("Podaj długość boku a: ");
    $wysokosc = readline("Podaj wysokość: ");

    return $pole=0.5 * $bok_a * $wysokosc;
}
function prostokat(){
    $bok_a = readline("Podaj długość boku a: ");
    $bok_b = readline("Podaj długość boku b: ");
    return $pole = $bok_a * $bok_b;
}
function trapez(){
    $bok_a = readline("Podaj długość górnej podstawy: ");
    $bok_b = readline("Podaj długość dolnej podstawy: ");
    $wysokosc = readline("Podaj wysokość: ");
    return $pole = 0.5 * ($bok_a + $bok_b) * $wysokosc;
}
echo "Pole figury $typ_figury wynosi: $pole";

?>