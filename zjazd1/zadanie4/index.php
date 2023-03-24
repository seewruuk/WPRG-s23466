<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>

<body>
<?php

	// data z peselu dd-mm-rr
	echo "Zadanie 4 <br/>";
    $pesel = "0021230953";
    
    $year = substr($pesel, 0, 2);
    $day = substr($pesel, 4,2);
    $month;
    $month_pref = substr($pesel, 2,2);
    switch($month_pref){
    case "21": $month = "01"; break;
    case "22": $month = "02"; break;
    case "23": $month = "03"; break;
    case "24": $month = "04"; break;
    case "25": $month = "05"; break;
    case "26": $month = "06"; break;
    case "27": $month = "07"; break;
    case "28": $month = "08"; break;
    case "29": $month = "09"; break;
    case "30": $month = "10"; break;
    case "31": $month = "11"; break;
    case "32": $month = "12"; break;
    default: $month = "01"; break;
    }
    echo "Data uro: <br/>";
    echo $day."-".$month."-".$year;
    
  
?>

</body>

</html>