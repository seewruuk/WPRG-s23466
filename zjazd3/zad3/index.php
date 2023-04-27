<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad 3</title>
</head>
<body>


<?php
    $file = fopen("adresy.txt", "r");

    echo "<h1>Lista linków</h1>";
    echo "<ul>";
    while(!feof($file)){
        $line = fgets($file);
        $parts = explode(';', $line);
        echo '<li><a href="'. $parts[0] .'" target="_blank">' . $parts[1] .  '</a></li>'; 
    }
    echo '</ul>';

?>



</body>
</html>