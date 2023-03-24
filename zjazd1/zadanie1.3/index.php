<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1.3</title>
</head>

<body>
<?php

	function myFunction($zdanie, $slowa){
    
    foreach($slowa as $slowo){
    $dlugosc = strlen($slowo);
       $cenzura = str_repeat("*",$dlugosc);
       $zdanie = str_replace($slowo, $cenzura, 
        $zdanie);
    }
    
    return $zdanie;
    }


	echo "Zadanie 3 <br/>";
    $z = "The quick brown fox jumps over the 
    lazy dog";
    $s = ["brown", "lazy"];
	$zdanie = myFunction($z, $s);
    
   	
    echo $zdanie;

  
?>

</body>

</html>