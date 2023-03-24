<?php

$bok = readline("Podaj dlugosc boku: "); 
funkcja($bok);
function funkcja($bok) {
    for ($i = 1; $i <= $bok; $i++) {
      echo str_pad($i, 4);
      for ($j = 2; $j <= $bok; $j++) {
        echo str_pad($i * $j, 4);
      }
      echo "\n";
    }
  }
  

?>