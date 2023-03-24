<?php

$array = array(
    'polska' => 'Polska',
    'niemcy' => 'Niemiecka',
    'ukraina' => 'Ukraińska',
    'rosja'  => 'Rosyjska'
);

echo "Do wyboru: 'polska', 'niemcy', 'ukraina', 'rosja'"."\n";
$zJakiegoKrajuJestes = readline("Z jakiego kraju jestes: ");
echo "Twoja narodowosc: ".$array[$zJakiegoKrajuJestes];
?>