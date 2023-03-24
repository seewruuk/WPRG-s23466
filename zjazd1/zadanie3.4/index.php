<?php

function czyLiczbaJestPierwsza($liczba) {
    if ($liczba < 2) {
      return false;
    } elseif ($liczba == 2) {
      return true;
    }
    $iteracje = 0;
    for ($i = 2; $i <= sqrt($liczba); $i++) {
      $iteracje++;
      if ($liczba % $i == 0) {
        return false;
      }
      echo "Ilosc iteracji: ".$iteracje."\n";
    }
    return true;
  }
  
  
  $liczba = readline("Podaj liczbe do sprawdzenia: ");
  if (czyLiczbaJestPierwsza($liczba)) {
    echo  $liczba." jest liczbą pierwszą";
  } else {
    echo $liczba." nie jest liczbą pierwszą";
  }

?>